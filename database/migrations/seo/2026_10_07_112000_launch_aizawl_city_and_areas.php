<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Aizawl, Mizoram gets its own city page (state-capital launch, 7 Oct 2026;
 * no Aizawl row existed in production) and 16 area pages across 4 zones,
 * with "About this area" text researched from cited sources
 * (database/seo-content/areas/aizawl-research.json). Zones:
 * config/zones.php['Aizawl']; zone text: config/zone_guides.php['Aizawl'].
 * Existing rows are never touched; down() removes only the area rows added
 * here, and the city row only when this migration created it (its meta_title
 * still matches and no other area points at it).
 * Strings respect VARCHAR(255) (see nxt-seo-rules §6).
 */
return new class extends Migration
{
    private const MARK = 'seo-2026-10-07-aizawl';

    private const SLUG = 'aizawl';

    private const META_TITLE = 'Home Tutors in Aizawl – CBSE, ICSE, IB, JEE | NXTutors';

    private function research(): array
    {
        return json_decode((string) @file_get_contents(database_path('seo-content/areas/aizawl-research.json')), true) ?: [];
    }

    public function up(): void
    {
        if (! Schema::hasTable('city_managment') || ! Schema::hasTable('city_area_list_managment')) {
            return;
        }

        $cityId = DB::table('city_managment')->where('slug', self::SLUG)->value('id');
        if (! $cityId) {
            $cityCols = array_flip(Schema::getColumnListing('city_managment'));
            $cityId = DB::table('city_managment')->insertGetId(array_intersect_key([
                'city_name' => 'Aizawl',
                'slug' => self::SLUG,
                // city_desc is VARCHAR(255) in production: keep it short.
                'city_desc' => 'Home and online tutors across Aizawl, from Chaltlang and Zarkawt to Khatla, Tuikual and Durtlang: CBSE, ICSE, MBSE, Classes 1–12, JEE and NEET. Free demo class.',
                'meta_title' => self::META_TITLE,
                'meta_desc' => 'Home and online tutors in Aizawl, Mizoram for Classes 1–12: CBSE, ICSE, MBSE, JEE and NEET. Get two or three matched tutors and a free demo class.',
                'avatar' => '',
                'status' => 't',
            ], $cityCols));
        }

        $cols = array_flip(Schema::getColumnListing('city_area_list_managment'));
        foreach (($this->research()['areas'] ?? []) as $slug => $a) {
            if (! is_array($a) || empty($a['name']) || DB::table('city_area_list_managment')->where('city_id', $cityId)->whereIn('slug', [$slug, $slug . '-', '-' . $slug])->exists()) {
                continue;
            }
            $row = [
                'city_id' => $cityId,
                'areapid' => 0,
                'name' => mb_substr((string) $a['name'], 0, 250),
                'main_title' => mb_substr('Home Tutors in ' . $a['name'] . ', Aizawl', 0, 250),
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
        $cityId = DB::table('city_managment')->where('slug', self::SLUG)->where('meta_title', self::META_TITLE)->value('id');
        if ($cityId && ! DB::table('city_area_list_managment')->where('city_id', $cityId)->exists()) {
            DB::table('city_managment')->where('id', $cityId)->delete();
        }
    }
};
