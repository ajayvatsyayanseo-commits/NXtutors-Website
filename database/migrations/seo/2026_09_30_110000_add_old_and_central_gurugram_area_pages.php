<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Old Gurugram had one area page (Sector 3) for Sectors 1–23 and none for
 * Palam Vihar, although Search Console shows Google serving our generated
 * Sector 4, 12, 21 and 23 pages to people searching there. Central Gurugram
 * lacked Sectors 38–40 and 44. These pages get their content from the area
 * template: tutors who travel there, the zone block (config/zone_guides.php),
 * nearby areas and the zone's guide.
 *
 * Pincodes are left empty rather than guessed; tutor matching then falls
 * back to the zone and city. A slug that already exists is skipped, and
 * down() removes only rows this migration inserted (marked in page_schema).
 */
return new class extends Migration
{
    private const MARK = 'seo-2026-09-30-area';

    private const AREAS = [
        'palam-vihar' => 'Palam Vihar',
        'sector-4' => 'Sector 4',
        'sector-5' => 'Sector 5',
        'sector-7' => 'Sector 7',
        'sector-9' => 'Sector 9',
        'sector-10' => 'Sector 10',
        'sector-10a' => 'Sector 10A',
        'sector-12' => 'Sector 12',
        'sector-14' => 'Sector 14',
        'sector-15' => 'Sector 15',
        'sector-17' => 'Sector 17',
        'sector-21' => 'Sector 21',
        'sector-22' => 'Sector 22',
        'sector-23' => 'Sector 23',
        'sector-23a' => 'Sector 23A',
        'sector-38' => 'Sector 38',
        'sector-39' => 'Sector 39',
        'sector-40' => 'Sector 40',
        'sector-44' => 'Sector 44',
    ];

    public function up(): void
    {
        if (! Schema::hasTable('city_area_list_managment') || ! Schema::hasTable('city_managment')) {
            return;
        }
        $cityId = DB::table('city_managment')->where('slug', 'gurugram')->value('id');
        if (! $cityId) {
            return;
        }
        $cols = array_flip(Schema::getColumnListing('city_area_list_managment'));

        foreach (self::AREAS as $slug => $name) {
            $exists = DB::table('city_area_list_managment')->where('city_id', $cityId)
                ->whereIn('slug', [$slug, $slug . '-', '-' . $slug, '-' . $slug . '-'])->exists();
            if ($exists) {
                continue;
            }
            $row = [
                'city_id' => $cityId,
                'areapid' => 0,
                'name' => $name,
                'main_title' => 'Home Tutors in ' . $name . ', Gurugram',
                'slug' => $slug,
                'status' => 't',
                'page_schema' => self::MARK,
            ];
            // Legacy text columns may be NOT NULL without a default.
            foreach (['area_desc', 'teacher_approch', 'area_map', 'pincode', 'why_choose', 'short_desc', 'package', 'tutor_types', 'subjects_covered_desc', 'meta_title', 'meta_desc'] as $c) {
                $row[$c] = '';
            }
            DB::table('city_area_list_managment')->insert(array_intersect_key($row, $cols));
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('city_area_list_managment')) {
            DB::table('city_area_list_managment')->where('page_schema', self::MARK)->whereIn('slug', array_keys(self::AREAS))->delete();
        }
    }
};
