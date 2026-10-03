<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Area-specific FAQs for the Shillong area pages added by 2026_10_07_104000_launch_shillong_city_and_areas,
 * written only from the checked facts in shillong-research.json and NXTutors'
 * published policies (database/seo-content/areas/shillong-faqs.json).
 * Added only to an area that has no FAQs yet; a missing file adds nothing;
 * down() removes exactly these questions again.
 */
return new class extends Migration
{
    private const TABLE = 'city_area_related_faqs_managment';

    private function faqs(): array
    {
        return (json_decode((string) @file_get_contents(database_path('seo-content/areas/shillong-faqs.json')), true) ?: []);
    }

    private function areaId(string $slug): ?int
    {
        $city = DB::table('city_managment')->where('slug', 'shillong')->value('id');

        return $city ? DB::table('city_area_list_managment')->where('city_id', $city)->where('slug', $slug)->value('id') : null;
    }

    public function up(): void
    {
        if (! Schema::hasTable(self::TABLE) || ! Schema::hasTable('city_area_list_managment')) {
            return;
        }
        $hasStatus = Schema::hasColumn(self::TABLE, 'status');
        foreach ($this->faqs() as $slug => $pairs) {
            $id = $this->areaId((string) $slug);
            if (! $id || DB::table(self::TABLE)->where('area_id', $id)->exists()) {
                continue;
            }
            foreach ((array) $pairs as $pair) {
                if (! is_array($pair) || ! isset($pair[0], $pair[1])) {
                    continue;
                }
                DB::table(self::TABLE)->insert(['area_id' => $id, 'question' => $pair[0], 'answer' => e($pair[1])] + ($hasStatus ? ['status' => 't'] : []));
            }
        }
    }

    public function down(): void
    {
        if (! Schema::hasTable(self::TABLE) || ! Schema::hasTable('city_area_list_managment')) {
            return;
        }
        foreach ($this->faqs() as $slug => $pairs) {
            if ($id = $this->areaId((string) $slug)) {
                DB::table(self::TABLE)->where('area_id', $id)->whereIn('question', array_column((array) $pairs, 0))->delete();
            }
        }
    }
};
