<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Kolkata area pages, phase 2 (5 Oct 2026): 24 more localities across seven
 * of the nine Kolkata zones, with "About this area" text researched from
 * cited sources (database/seo-content/areas/kolkata-research-2.json). Zones:
 * config/zones.php['Kolkata']. Any slug that already exists (including
 * trailing- or leading-hyphen variants) is skipped. The Kolkata city row is
 * never created, changed or removed here; down() deletes only the area rows
 * added by this migration.
 */
return new class extends Migration
{
    private const MARK = 'seo-2026-10-05-kolkata-2';

    private function research(): array
    {
        return json_decode((string) @file_get_contents(database_path('seo-content/areas/kolkata-research-2.json')), true) ?: [];
    }

    public function up(): void
    {
        if (! Schema::hasTable('city_managment') || ! Schema::hasTable('city_area_list_managment')) {
            return;
        }

        $cityId = DB::table('city_managment')->where('slug', 'kolkata')->value('id');
        // The city row comes from the phase-1 migration; without it, do nothing.
        if (! $cityId) {
            return;
        }

        $cols = array_flip(Schema::getColumnListing('city_area_list_managment'));
        foreach (($this->research()['areas'] ?? []) as $slug => $a) {
            if (DB::table('city_area_list_managment')->where('city_id', $cityId)->whereIn('slug', [$slug, $slug . '-', '-' . $slug])->exists()) {
                continue;
            }
            $row = [
                'city_id' => $cityId,
                'areapid' => 0,
                'name' => $a['name'],
                'main_title' => 'Home Tutors in ' . $a['name'] . ', Kolkata',
                'slug' => $slug,
                'status' => 't',
                'page_schema' => self::MARK,
                'area_desc' => trim((string) ($a['about'] ?? '')),
            ];
            foreach (['teacher_approch', 'area_map', 'pincode', 'why_choose', 'short_desc', 'package', 'tutor_types', 'subjects_covered_desc', 'meta_title', 'meta_desc'] as $c) {
                $row[$c] = '';
            }
            DB::table('city_area_list_managment')->insert(array_intersect_key($row, $cols));
        }
    }

    public function down(): void
    {
        if (! Schema::hasTable('city_managment') || ! Schema::hasTable('city_area_list_managment')) {
            return;
        }
        DB::table('city_area_list_managment')->where('page_schema', self::MARK)->delete();
    }
};
