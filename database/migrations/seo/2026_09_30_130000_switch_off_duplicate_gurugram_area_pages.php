<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Switches off the Gurugram area pages listed in config/area_redirects.php:
 * duplicates of another society page, and three projects that are in
 * Faridabad or Noida. They leave the area lists and the sitemap; their URLs
 * 301 to the right page (HomeController::cityAreaShow). All were active on
 * 30 Sep 2026, so down() turns them back on.
 */
return new class extends Migration
{
    private function slugs(): array
    {
        // Frozen copy of config/area_redirects.php (gurugram) as of this migration.
        return [
            'the-camellias-towers-ah',
            'the-aralias-tower-af',
            'the-crest-tower-16',
            'the-magnolias-towers-19',
            'dlf-the-skycourt-inh',
            'hines-elevate',
            'conscient-elevate-tower-5',
            'heritage-one-residences',
            'emaar-emerald-estate-floors',
            'adani-oyster-grande-phase-2',
            'adani-m2k-oyster-grande-2',
            'spaze-privy-residences',
            'eros-rosewood-city-floors',
            'dlf-princeton-estate-blocks-ae',
            'pioneer-araya-sky-villas',
            'mahindra-luminare-c',
            'bptp-parklands',
            'ats-greens-1',
            'ats-green-valley-pockets',
        ];
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
        DB::table('city_area_list_managment')->where('city_id', $id)->whereIn('slug', $this->slugs())->where('status', 't')->update(['status' => 'f']);
    }

    public function down(): void
    {
        if (! Schema::hasTable('city_area_list_managment') || ! ($id = $this->cityId())) {
            return;
        }
        DB::table('city_area_list_managment')->where('city_id', $id)->whereIn('slug', $this->slugs())->where('status', 'f')->update(['status' => 't']);
    }
};
