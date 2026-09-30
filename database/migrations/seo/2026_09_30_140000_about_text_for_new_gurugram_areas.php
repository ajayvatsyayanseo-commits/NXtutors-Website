<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * "About this area" text for the 19 Gurugram area pages added on 30 Sep
 * 2026 (Palam Vihar, Old Gurugram sectors, Sectors 38–40 and 44), which had
 * none, so the template dominated them. Each text was researched from
 * cited sources (database/seo-content/areas/gurugram-about.json keeps the
 * sources). Only fills an empty area_desc, so text written in Super Admin
 * is never overwritten; down() empties only text this migration wrote.
 */
return new class extends Migration
{
    private function texts(): array
    {
        $rows = json_decode((string) @file_get_contents(database_path('seo-content/areas/gurugram-about.json')), true) ?: [];

        return array_filter(array_map(fn ($r) => trim((string) ($r['html'] ?? '')), $rows));
    }

    private function cityId(): ?int
    {
        return Schema::hasTable('city_managment') ? DB::table('city_managment')->where('slug', 'gurugram')->value('id') : null;
    }

    public function up(): void
    {
        if (! Schema::hasTable('city_area_list_managment') || ! ($id = $this->cityId())) {
            return;
        }
        foreach ($this->texts() as $slug => $html) {
            DB::table('city_area_list_managment')->where('city_id', $id)->where('slug', $slug)
                ->where(fn ($q) => $q->whereNull('area_desc')->orWhere('area_desc', ''))
                ->update(['area_desc' => $html]);
        }
    }

    public function down(): void
    {
        if (! Schema::hasTable('city_area_list_managment') || ! ($id = $this->cityId())) {
            return;
        }
        foreach ($this->texts() as $slug => $html) {
            DB::table('city_area_list_managment')->where('city_id', $id)->where('slug', $slug)
                ->where('area_desc', $html)->update(['area_desc' => '']);
        }
    }
};
