<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Lucknow area pages (city roll-out, 1 Oct 2026): 27 localities across
 * 5 zones, with "About this area" text researched from cited
 * sources (database/seo-content/areas/lucknow-research.json). Zones:
 * config/zones.php['Lucknow']. The Lucknow city row already exists and is
 * never changed or removed; down() deletes only the area rows added here.
 */
return new class extends Migration
{
    private const MARK = 'seo-2026-10-02-lucknow';

    private function research(): array
    {
        return json_decode((string) @file_get_contents(database_path('seo-content/areas/lucknow-research.json')), true) ?: [];
    }

    public function up(): void
    {
        if (! Schema::hasTable('city_managment') || ! Schema::hasTable('city_area_list_managment')) {
            return;
        }

        $cityId = DB::table('city_managment')->where('slug', 'lucknow')->value('id');
        // Only on a fresh database: production already has the Lucknow row.
        if (! $cityId) {
            $cityCols = array_flip(Schema::getColumnListing('city_managment'));
            $cityId = DB::table('city_managment')->insertGetId(array_intersect_key([
                'city_name' => 'Lucknow',
                'slug' => 'lucknow',
                // city_desc is VARCHAR(255) in production: keep it short.
                'city_desc' => 'Home and online tutors across Lucknow, from Gomti Nagar and Indira Nagar to Aliganj, Hazratganj and Alambagh: CBSE, ICSE, ISC and UP Board, Classes 1–12, JEE and NEET.',
                'meta_title' => 'Home Tutors in Lucknow – CBSE, ICSE, IB, JEE | NXTutors',
                'meta_desc' => 'Home and online tutors in Lucknow, Uttar Pradesh for CBSE, ICSE, ISC, IB, JEE and NEET. Get 2–3 matched tutors and a free demo class.',
                'avatar' => '',
                'status' => 't',
            ], $cityCols));
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
                'main_title' => 'Home Tutors in ' . $a['name'] . ', Lucknow',
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
