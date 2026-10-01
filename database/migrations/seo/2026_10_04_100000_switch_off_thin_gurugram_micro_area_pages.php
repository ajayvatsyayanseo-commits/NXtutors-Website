<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Thin Gurugram area pages for single roads, blocks, markets and plot rows
 * inside a bigger locality (31 inside DLF Phase 1: "Deodar Marg corner
 * plots", "Block F premium lanes"…; one pocket each of DLF Phases 2-5; the
 * three Sushant Lok 1 blocks) and a second page for Sushant Lok 3. Each was
 * the same template with the name swapped in and no Search Console clicks
 * or impressions; together they diluted the parent pages. They are switched
 * off here (leaving the area lists, zone pages, hub chips and the sitemap)
 * and their URLs 301 to the parent page via config/area_redirects.php. All
 * were active on 1 Oct 2026, so down() turns them back on.
 */
return new class extends Migration
{
    /** Frozen copy of the matching config/area_redirects.php (gurugram) entries. */
    private const SLUGS = [
        // DLF Phase 1
        'arjun-marg',
        'qutab-plaza-ashok-crescent-marg',
        'the-shopping-mall-arjun-marg',
        'paschim-marg-24m-road',
        'champa-marg-24m-road',
        'kusum-marg-24m-road',
        'sukhchain-marg-18m-road',
        'silver-oaks-avenue-18m-road',
        'deodar-marg-12m-road',
        'amaltas-marg-18m-road',
        'block-e-golf-course-road-side',
        'block-b-premium-lanes',
        'block-f-premium-lanes',
        'block-g-premium-lanes',
        'select-ablock-inner-lanes',
        'sector-26aarjun-marg-belt',
        'sector-28-edge-near-golf-course-road',
        'metro-phase1-station-vicinity',
        'arjun-marg--ashok-crescent-junction',
        'arjun-marg-central-parkfacing-plots',
        'qutab-plaza-blocka-ring-roads',
        'qutab-plaza-blockbc-inner-loop',
        'paschim-marg-parkfacing-row',
        'champa-marg-parkfacing-row',
        'kusum-marg-parkfacing-row',
        'sukhchain-marg-corner-plots',
        'silver-oaks-avenue-corner-plots',
        'deodar-marg-corner-plots',
        'amaltas-marg-corner-plots',
        'golf-course-road-interface-eblock-side',
        'qutab-plaza-area-',
        // Pockets of DLF Phases 2-5 (to that phase's page)
        'jacaranda-marg-area',
        'moulsari-avenue-area',
        'galleria-area',
        'club5-vicinity',
        // Sushant Lok 1 blocks (to Sushant Lok Phase 1); second Sushant Lok 3 page
        'sushant-lok-1-ablock',
        'sushant-lok-1-bblock',
        'sushant-lok-1-cblock',
        'sushant-lok-3',
    ];

    private function flip(string $from, string $to): void
    {
        if (! Schema::hasTable('city_area_list_managment') || ! Schema::hasTable('city_managment')) {
            return;
        }
        $id = DB::table('city_managment')->where('slug', 'gurugram')->value('id');
        if ($id) {
            DB::table('city_area_list_managment')->where('city_id', $id)
                ->whereIn('slug', self::SLUGS)->where('status', $from)->update(['status' => $to]);
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
