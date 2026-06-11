<?php

namespace App\Support;

/**
 * Country names and ITU-style dial codes for phone UI (from resources/data/country_dial_codes.json).
 */
class CountryDialCodes
{
    /**
     * @return array<int, array{name: string, dial: string}>
     */
    public static function all(): array
    {
        static $cached = null;
        if ($cached !== null) {
            return $cached;
        }
        $path = resource_path('data/country_dial_codes.json');
        if (! is_file($path)) {
            return $cached = [
                ['name' => 'Australia', 'dial' => '+61'],
                ['name' => 'India', 'dial' => '+91'],
                ['name' => 'United Kingdom', 'dial' => '+44'],
                ['name' => 'United States', 'dial' => '+1'],
            ];
        }
        $decoded = json_decode(file_get_contents($path), true);

        return $cached = is_array($decoded) ? $decoded : [];
    }

    /**
     * Australia first, then alphabetical by country name.
     *
     * @return array<int, array{name: string, dial: string}>
     */
    public static function forSelect(): array
    {
        $rows = self::all();
        $au = [];
        $rest = [];
        foreach ($rows as $row) {
            if (($row['name'] ?? '') === 'Australia') {
                $au[] = $row;
            } else {
                $rest[] = $row;
            }
        }
        usort($rest, function ($a, $b) {
            return strcmp($a['name'] ?? '', $b['name'] ?? '');
        });

        return array_merge($au, $rest);
    }
}
