<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Chennai area pages (city roll-out, 1 Oct 2026): 45 localities across
 * 8 zones, with "About this area" text researched from cited
 * sources (database/seo-content/areas/chennai-research.json). Zones:
 * config/zones.php['Chennai']. The Chennai city row already exists and is
 * never changed or removed; down() deletes only the area rows added here.
 */
return new class extends Migration
{
    private const MARK = 'seo-2026-10-02-chennai';

    private function research(): array
    {
        return json_decode((string) @file_get_contents(database_path('seo-content/areas/chennai-research.json')), true) ?: [];
    }

    public function up(): void
    {
        if (! Schema::hasTable('city_managment') || ! Schema::hasTable('city_area_list_managment')) {
            return;
        }

        $cityId = DB::table('city_managment')->where('slug', 'chennai')->value('id');
        // Only on a fresh database: production already has the Chennai row.
        if (! $cityId) {
            $cityCols = array_flip(Schema::getColumnListing('city_managment'));
            $cityId = DB::table('city_managment')->insertGetId(array_intersect_key([
                'city_name' => 'Chennai',
                'slug' => 'chennai',
                // city_desc is VARCHAR(255) in production: keep it short.
                'city_desc' => 'Home and online tutors across Chennai, from Adyar, Mylapore and T Nagar to Anna Nagar, Velachery and the OMR: CBSE, ICSE, IB, IGCSE and Tamil Nadu State Board, Classes 1–12.',
                'meta_title' => 'Home Tutors in Chennai – CBSE, ICSE, IB, JEE | NXTutors',
                'meta_desc' => 'Home and online tutors in Chennai, Tamil Nadu for CBSE, ICSE, IB, IGCSE, JEE and NEET. Get 2–3 matched tutors and a free demo class.',
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
                'main_title' => 'Home Tutors in ' . $a['name'] . ', Chennai',
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
