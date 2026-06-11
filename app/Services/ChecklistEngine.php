<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class ChecklistEngine
{
    /**
     * Evaluate document rules for a given visa subclass + user inputs.
     *
     * @param  int   $visaSubclassId
     * @param  array $inputs  Associative array of user answers, e.g.:
     *   [
     *     'student_category'     => 'standard',   // standard|dfat|defence|exchange|phd_marking
     *     'course_type'          => 'higher_ed',  // higher_ed|phd_research|elicos|school|non_english_medium|vet|other
     *     'english_exempt'       => 'no',          // yes|no (derived from passport country)
     *     'oshc_exempt'          => 'no',          // yes|no
     *     'under_18'             => 'no',          // yes|no
     *     'has_dependants'       => 'yes',         // yes|no
     *     'has_migration_agent'  => 'no',          // yes|no
     *   ]
     * @return array  Grouped by category, each document has resolved requirement type.
     */
    public function resolve(int $visaSubclassId, array $inputs): array
    {
        $rules = DB::table('document_rules as r')
            ->join('document_items as d',     'r.document_item_id',     '=', 'd.id')
            ->join('document_categories as c','d.document_category_id', '=', 'c.id')
            ->where('r.visa_subclass_id', $visaSubclassId)
            ->where('r.is_active', true)
            ->where('d.is_active', true)
            ->orderBy('c.sort_order')
            ->orderBy('d.sort_order')
            ->select([
                'r.id as rule_id',
                'r.conditions',
                'r.exclude_if',
                'r.requirement_override',
                'r.additional_notes',
                'd.key',
                'd.title',
                'd.description',
                'd.requirement_type as base_requirement',
                'd.hint',
                'd.official_form',
                'd.official_form_url',
                'c.name as category_name',
                'c.slug as category_slug',
                'c.sort_order as cat_sort',
            ])
            ->get();

        $result    = [];
        $seen_keys = [];

        foreach ($rules as $rule) {
            // Skip duplicate document keys (first matching rule wins)
            if (in_array($rule->key, $seen_keys)) {
                continue;
            }

            $conditions = json_decode($rule->conditions, true) ?? [];
            $excludeIf  = json_decode($rule->exclude_if, true)  ?? [];

            // Check "include" conditions — all fields must match (AND)
            if (!$this->matchesConditions($conditions, $inputs)) {
                continue;
            }

            // Check "exclude" conditions — if ANY field matches, skip document
            if (!empty($excludeIf) && $this->matchesAnyCondition($excludeIf, $inputs)) {
                continue;
            }

            $seen_keys[] = $rule->key;

            $requirementType = $rule->requirement_override ?? $rule->base_requirement;
            if ($requirementType === 'always_required') {
                $requirementType = 'required';
            }

            $result[$rule->category_slug]['name']      = $rule->category_name;
            $result[$rule->category_slug]['sort_order']= $rule->cat_sort;
            $result[$rule->category_slug]['items'][]   = [
                'key'              => $rule->key,
                'title'            => $rule->title,
                'description'      => $rule->description,
                'requirement_type' => $requirementType,
                'hint'             => $rule->hint,
                'official_form'    => $rule->official_form,
                'official_form_url'=> $rule->official_form_url,
                'additional_notes' => $rule->additional_notes,
            ];
        }

        // Sort categories by sort_order
        uasort($result, fn($a, $b) => $a['sort_order'] <=> $b['sort_order']);

        return $result;
    }

    /**
     * Enrich inputs by resolving country-level flags from the DB.
     *
     * Pass raw user inputs + country code; get back inputs with
     * english_exempt and oshc_exempt resolved.
     */
    public function enrichInputs(array $inputs, string $countryCode): array
    {
        $country = DB::table('passport_countries')
            ->where('code', $countryCode)
            ->first(['english_exempt', 'oshc_exempt']);

        $inputs['english_exempt'] = ($country && $country->english_exempt) ? 'yes' : 'no';
        $inputs['oshc_exempt']    = ($country && $country->oshc_exempt)    ? 'yes' : 'no';

        return $inputs;
    }

    // ──────────────────────────────────────────────────────────────
    // Private helpers
    // ──────────────────────────────────────────────────────────────

    /**
     * All conditions fields must match (AND logic across fields).
     * Within a field the user value must appear in the allowed values (OR).
     */
    private function matchesConditions(array $conditions, array $inputs): bool
    {
        if (empty($conditions)) {
            return true; // No conditions = always include
        }

        foreach ($conditions as $field => $allowedValues) {
            $userValue = $inputs[$field] ?? null;
            if ($userValue === null || !in_array($userValue, $allowedValues)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Exclude if ANY condition field from exclude_if matches (OR logic).
     */
    private function matchesAnyCondition(array $excludeConditions, array $inputs): bool
    {
        foreach ($excludeConditions as $field => $disallowedValues) {
            $userValue = $inputs[$field] ?? null;
            if ($userValue !== null && in_array($userValue, $disallowedValues)) {
                return true;
            }
        }

        return false;
    }
}
