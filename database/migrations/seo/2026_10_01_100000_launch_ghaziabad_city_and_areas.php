<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Ghaziabad gets its own city page (NCR roll-out, 30 Sep 2026; before this
 * it was filed under "Delhi NCR") and 75 area pages (Indirapuram khands,
 * Vaishali, Vasundhara, Kaushambi, Sahibabad, Raj Nagar, Raj Nagar
 * Extension and more) with "About this area" text researched from cited
 * sources (database/seo-content/areas/ghaziabad-research.json).
 * Zones: config/zones.php['Ghaziabad'].
 * Existing rows are never touched; down() removes only rows inserted here.
 * Strings respect VARCHAR(255) (see nxt-seo-rules §6).
 */
return new class extends Migration
{
    private const MARK = 'seo-2026-10-01-ghaziabad';

    private function research(): array
    {
        return json_decode((string) @file_get_contents(database_path('seo-content/areas/ghaziabad-research.json')), true) ?: [];
    }

    public function up(): void
    {
        if (! Schema::hasTable('city_managment') || ! Schema::hasTable('city_area_list_managment')) {
            return;
        }

        $cityId = DB::table('city_managment')->where('slug', 'ghaziabad')->value('id');
        if (! $cityId) {
            $cityCols = array_flip(Schema::getColumnListing('city_managment'));
            $cityId = DB::table('city_managment')->insertGetId(array_intersect_key([
                'city_name' => 'Ghaziabad',
                'slug' => 'ghaziabad',
                // city_desc is VARCHAR(255) in production: keep it short.
                'city_desc' => 'Home and online tutors across Ghaziabad, from Indirapuram, Vaishali and Vasundhara to Raj Nagar, Kavi Nagar and Raj Nagar Extension: CBSE, ICSE, IB and IGCSE, Classes 1–12, JEE and NEET. Free demo.',
                'meta_title' => 'Home Tutors in Ghaziabad – CBSE, ICSE, IB, JEE | NXTutors',
                'meta_desc' => 'Home tutors in Ghaziabad for Class 1–12, CBSE, ICSE, IB, IGCSE, JEE and NEET, from Indirapuram and Vaishali to Raj Nagar Extension. See fees; book a free demo.',
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
                'main_title' => 'Home Tutors in ' . $a['name'] . ', Ghaziabad',
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
        $cityId = DB::table('city_managment')->where('slug', 'ghaziabad')->where('meta_title', 'Home Tutors in Ghaziabad – CBSE, ICSE, IB, JEE | NXTutors')->value('id');
        if ($cityId && ! DB::table('city_area_list_managment')->where('city_id', $cityId)->exists()) {
            DB::table('city_managment')->where('id', $cityId)->delete();
        }
    }
};
