<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Area-specific FAQs for the 22 Coimbatore area pages added on 30 Sep 2026,
 * written only from the checked facts in coimbatore-research.json and NXTutors'
 * published policies (database/seo-content/areas/coimbatore-faqs.json).
 * Added only to an area that has no FAQs yet; down() removes exactly these
 * questions again.
 */
return new class extends Migration
{
    private const TABLE = 'city_area_related_faqs_managment';

    private function faqs(): array
    {
        return (json_decode((string) @file_get_contents(database_path('seo-content/areas/coimbatore-faqs.json')), true) ?: []);
    }

    private function areaId(string $slug): ?int
    {
        $city = DB::table('city_managment')->where('slug', 'coimbatore')->value('id');

        return $city ? DB::table('city_area_list_managment')->where('city_id', $city)->where('slug', $slug)->value('id') : null;
    }

    public function up(): void
    {
        if (! Schema::hasTable(self::TABLE) || ! Schema::hasTable('city_area_list_managment')) {
            return;
        }
        $hasStatus = Schema::hasColumn(self::TABLE, 'status');
        foreach ($this->faqs() as $slug => $pairs) {
            $id = $this->areaId($slug);
            if (! $id || DB::table(self::TABLE)->where('area_id', $id)->exists()) {
                continue;
            }
            foreach ((array) $pairs as [$q, $a]) {
                DB::table(self::TABLE)->insert(['area_id' => $id, 'question' => $q, 'answer' => e($a)] + ($hasStatus ? ['status' => 't'] : []));
            }
        }
    }

    public function down(): void
    {
        if (! Schema::hasTable(self::TABLE) || ! Schema::hasTable('city_area_list_managment')) {
            return;
        }
        foreach ($this->faqs() as $slug => $pairs) {
            if ($id = $this->areaId($slug)) {
                DB::table(self::TABLE)->where('area_id', $id)->whereIn('question', array_column((array) $pairs, 0))->delete();
            }
        }
    }
};
