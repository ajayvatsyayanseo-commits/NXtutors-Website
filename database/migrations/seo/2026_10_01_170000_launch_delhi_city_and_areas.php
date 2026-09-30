<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Delhi gets its own city page (NCR roll-out, 30 Sep 2026; before this
 * Delhi tutors were filed under "Delhi NCR", which becomes the hub for the
 * NCR cities) and 111 locality pages across 12 zones (South, Dwarka and
 * South-West, West and Central, North and North-West, East), with "About
 * this area" text researched from cited sources
 * (database/seo-content/areas/delhi-research.json). Zones:
 * config/zones.php['Delhi']. Existing rows are never touched; down()
 * removes only rows inserted here. Strings respect VARCHAR(255).
 */
return new class extends Migration
{
    private const MARK = 'seo-2026-10-01-delhi';

    private function research(): array
    {
        return json_decode((string) @file_get_contents(database_path('seo-content/areas/delhi-research.json')), true) ?: [];
    }

    public function up(): void
    {
        if (! Schema::hasTable('city_managment') || ! Schema::hasTable('city_area_list_managment')) {
            return;
        }

        $cityId = DB::table('city_managment')->where('slug', 'delhi')->value('id');
        if (! $cityId) {
            $cityCols = array_flip(Schema::getColumnListing('city_managment'));
            $cityId = DB::table('city_managment')->insertGetId(array_intersect_key([
                'city_name' => 'Delhi',
                'slug' => 'delhi',
                // city_desc is VARCHAR(255) in production: keep it short.
                'city_desc' => 'Home and online tutors across Delhi, from South Delhi and Dwarka to Rohini, West Delhi and Mayur Vihar: CBSE, ICSE, IB and IGCSE, Classes 1–12, JEE and NEET. Free demo class.',
                'meta_title' => 'Home Tutors in Delhi – CBSE, ICSE, IB, JEE | NXTutors',
                'meta_desc' => 'Home tutors in Delhi for Class 1–12, CBSE, ICSE, IB, IGCSE, JEE and NEET, from South Delhi and Dwarka to Rohini and Mayur Vihar. See fees; book a free demo.',
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
                'main_title' => 'Home Tutors in ' . $a['name'] . ', Delhi',
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
        $cityId = DB::table('city_managment')->where('slug', 'delhi')->where('meta_title', 'Home Tutors in Delhi – CBSE, ICSE, IB, JEE | NXTutors')->value('id');
        if ($cityId && ! DB::table('city_area_list_managment')->where('city_id', $cityId)->exists()) {
            DB::table('city_managment')->where('id', $cityId)->delete();
        }
    }
};
