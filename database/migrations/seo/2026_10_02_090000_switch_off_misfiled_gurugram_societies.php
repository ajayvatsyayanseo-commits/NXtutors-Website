<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Two Gurugram housing societies were filed as area pages of Kochi and
 * Guwahati. They are switched off (leaving the lists and the sitemap) and
 * their URLs 301 to Gurugram via config/area_redirects.php. Both were active
 * on 1 Oct 2026, so down() turns them back on.
 */
return new class extends Migration
{
    private const PAGES = ['kochi' => 'ireo-skyon', 'guwahati' => 'mapsko-mountville'];

    private function flip(string $from, string $to): void
    {
        if (! Schema::hasTable('city_area_list_managment') || ! Schema::hasTable('city_managment')) {
            return;
        }
        foreach (self::PAGES as $city => $slug) {
            $id = DB::table('city_managment')->where('slug', $city)->value('id');
            if ($id) {
                DB::table('city_area_list_managment')->where('city_id', $id)->where('slug', $slug)->where('status', $from)->update(['status' => $to]);
            }
        }
    }

    public function up(): void
    {
        $this->flip('t', 'f');
    }

    public function down(): void
    {
        $this->flip('f', 't');
    }
};
