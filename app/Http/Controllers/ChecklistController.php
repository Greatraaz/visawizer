<?php

namespace App\Http\Controllers;

use App\Services\ChecklistEngine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ChecklistController extends Controller
{
    public function __construct(private ChecklistEngine $engine) {}

    // ── Step 1: Show visa selector + wizard form ──────────────────
    public function index()
    {
        $visas = DB::table('visa_subclasses')
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get(['id', 'code', 'name', 'slug', 'description']);

        return view('checklist.index', compact('visas'));
    }

    // ── Step 2: Wizard for a specific visa subclass ───────────────
    public function wizard(string $slug)
    {
        $visa = DB::table('visa_subclasses')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->first();

        if (!$visa) {
            abort(404);
        }

        $countries = DB::table('passport_countries')
            ->where('is_active', true)
            ->orderBy('name')
            ->get(['code', 'name', 'english_exempt', 'oshc_exempt']);

        return view('checklist.wizard', compact('visa', 'countries'));
    }

    // ── Step 3: Generate + show the checklist ────────────────────
    public function generate(Request $request, string $slug)
    {
        $visa = DB::table('visa_subclasses')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->first();

        if (!$visa) {
            abort(404);
        }

        $validated = $request->validate([
            'passport_country_code' => 'required|string|max:5',
            'student_category'      => 'required|in:standard,dfat,defence,exchange,phd_marking',
            'course_type'           => 'required|in:higher_ed,phd_research,elicos,school,non_english_medium,vet,other',
            'under_18'              => 'required|in:yes,no',
            'has_dependants'        => 'required|in:yes,no',
            'has_migration_agent'   => 'required|in:yes,no',
            'applicant_name'        => 'nullable|string|max:100',
            'email'                 => 'nullable|email|max:150',
        ]);

        // Enrich inputs with country-level flags
        $inputs = $this->engine->enrichInputs($validated, $validated['passport_country_code']);

        // Evaluate rules
        $checklistGroups = $this->engine->resolve($visa->id, $inputs);

        // Persist session so user can return / share
        $token = Str::random(32);
        DB::table('checklist_sessions')->insert([
            'session_token'   => $token,
            'visa_subclass_id'=> $visa->id,
            'user_inputs'     => json_encode($validated),
            'ticked_items'    => '[]',
            'email'           => $validated['email'] ?? null,
            'applicant_name'  => $validated['applicant_name'] ?? null,
            'expires_at'      => Carbon::now()->addDays(30),
            'created_at'      => now(),
            'updated_at'      => now(),
        ]);

        return view('checklist.result', [
            'visa'             => $visa,
            'checklistGroups'  => $checklistGroups,
            'inputs'           => $inputs,
            'token'            => $token,
            'countryName'      => DB::table('passport_countries')
                                    ->where('code', $validated['passport_country_code'])
                                    ->value('name'),
        ]);
    }

    // ── Resume a saved checklist by token ────────────────────────
    public function resume(string $token)
    {
        $session = DB::table('checklist_sessions')
            ->where('session_token', $token)
            ->where(function ($q) {
                $q->whereNull('expires_at')
                  ->orWhere('expires_at', '>', now());
            })
            ->first();

        if (!$session) {
            abort(404, 'Checklist session not found or expired.');
        }

        $visa    = DB::table('visa_subclasses')->find($session->visa_subclass_id);
        $inputs  = json_decode($session->user_inputs, true);
        $ticked  = json_decode($session->ticked_items, true) ?? [];

        if (!empty($inputs['passport_country_code'])) {
            $inputs = $this->engine->enrichInputs($inputs, $inputs['passport_country_code']);
        }

        $checklistGroups = $this->engine->resolve($visa->id, $inputs);

        return view('checklist.result', [
            'visa'            => $visa,
            'checklistGroups' => $checklistGroups,
            'inputs'          => $inputs,
            'token'           => $token,
            'ticked'          => $ticked,
            'countryName'     => DB::table('passport_countries')
                                   ->where('code', $inputs['passport_country_code'] ?? '')
                                   ->value('name'),
        ]);
    }

    // ── AJAX: save ticked item ────────────────────────────────────
    public function tick(Request $request, string $token)
    {
        $validated = $request->validate([
            'key'     => 'required|string|max:60',
            'checked' => 'required|boolean',
        ]);

        $session = DB::table('checklist_sessions')
            ->where('session_token', $token)
            ->first();

        if (!$session) {
            return response()->json(['error' => 'Session not found'], 404);
        }

        $ticked = json_decode($session->ticked_items, true) ?? [];

        if ($validated['checked']) {
            $ticked = array_unique([...$ticked, $validated['key']]);
        } else {
            $ticked = array_values(array_filter($ticked, fn($k) => $k !== $validated['key']));
        }

        DB::table('checklist_sessions')
            ->where('session_token', $token)
            ->update([
                'ticked_items' => json_encode(array_values($ticked)),
                'updated_at'   => now(),
            ]);

        return response()->json(['ok' => true, 'ticked' => count($ticked)]);
    }
}
