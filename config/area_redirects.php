<?php

/*
 * Area pages that are duplicates of another page, or not in this city,
 * sent to the right page with a 301 (HomeController::cityAreaShow). The
 * duplicates are also switched off (migration 2026_09_30_130000) so they
 * leave the lists and the sitemap; the redirect keeps old links working.
 * Found in the society research of 30 Sep 2026. Keyed by city page slug;
 * a target is an area slug in the same city, or a path starting with "/".
 */
return [
    'gurugram' => [
        // Same society, two pages: keep the cleaner name.
        'the-camellias-towers-ah' => 'dlf-camellias',
        'the-aralias-tower-af' => 'dlf-aralias',
        'the-crest-tower-16' => 'dlf-crest',
        'the-magnolias-towers-19' => 'dlf-magnolias',
        'dlf-the-skycourt-inh' => 'dlf-sky-court',
        'hines-elevate' => 'conscient-hines-elevate',
        'conscient-elevate-tower-5' => 'conscient-hines-elevate',
        'heritage-one-residences' => 'heritage-one',
        'emaar-emerald-estate-floors' => 'emerald-estate-emaar',
        'adani-oyster-grande-phase-2' => 'adani-oyster-grande',
        'adani-m2k-oyster-grande-2' => 'adani-oyster-grande',
        'spaze-privy-residences' => 'spaze-privy',
        'eros-rosewood-city-floors' => 'rosewood-city',
        'dlf-princeton-estate-blocks-ae' => 'dlf-princeton-estate',
        'pioneer-araya-sky-villas' => 'pioneer-urban-araya',
        'mahindra-luminare-c' => 'mahindra-luminare',
        // Thin road / block / plot-row pages inside DLF Phase 1, merged into
        // the DLF Phase 1 page (audit 1 Oct 2026, switched off by migration
        // 2026_10_04_100000). None had Search Console clicks or impressions.
        'arjun-marg' => 'dlf-phase-1',
        'qutab-plaza-ashok-crescent-marg' => 'dlf-phase-1',
        'the-shopping-mall-arjun-marg' => 'dlf-phase-1',
        'paschim-marg-24m-road' => 'dlf-phase-1',
        'champa-marg-24m-road' => 'dlf-phase-1',
        'kusum-marg-24m-road' => 'dlf-phase-1',
        'sukhchain-marg-18m-road' => 'dlf-phase-1',
        'silver-oaks-avenue-18m-road' => 'dlf-phase-1',
        'deodar-marg-12m-road' => 'dlf-phase-1',
        'amaltas-marg-18m-road' => 'dlf-phase-1',
        'block-e-golf-course-road-side' => 'dlf-phase-1',
        'block-b-premium-lanes' => 'dlf-phase-1',
        'block-f-premium-lanes' => 'dlf-phase-1',
        'block-g-premium-lanes' => 'dlf-phase-1',
        'select-ablock-inner-lanes' => 'dlf-phase-1',
        'sector-26aarjun-marg-belt' => 'dlf-phase-1',
        'sector-28-edge-near-golf-course-road' => 'dlf-phase-1',
        'metro-phase1-station-vicinity' => 'dlf-phase-1',
        'arjun-marg--ashok-crescent-junction' => 'dlf-phase-1',
        'arjun-marg-central-parkfacing-plots' => 'dlf-phase-1',
        'qutab-plaza-blocka-ring-roads' => 'dlf-phase-1',
        'qutab-plaza-blockbc-inner-loop' => 'dlf-phase-1',
        'paschim-marg-parkfacing-row' => 'dlf-phase-1',
        'champa-marg-parkfacing-row' => 'dlf-phase-1',
        'kusum-marg-parkfacing-row' => 'dlf-phase-1',
        'sukhchain-marg-corner-plots' => 'dlf-phase-1',
        'silver-oaks-avenue-corner-plots' => 'dlf-phase-1',
        'deodar-marg-corner-plots' => 'dlf-phase-1',
        'amaltas-marg-corner-plots' => 'dlf-phase-1',
        'golf-course-road-interface-eblock-side' => 'dlf-phase-1',
        'qutab-plaza-area-' => 'dlf-phase-1',
        // Same audit: market / road / club pockets of the other DLF phases,
        // the Sushant Lok 1 blocks, and a second Sushant Lok 3 page.
        'jacaranda-marg-area' => 'dlf-phase-2',
        'moulsari-avenue-area' => 'dlf-phase-3',
        'galleria-area' => 'dlf-phase-4',
        'club5-vicinity' => 'dlf-phase-5',
        'sushant-lok-1-ablock' => 'sushant-lok-phase-1',
        'sushant-lok-1-bblock' => 'sushant-lok-phase-1',
        'sushant-lok-1-cblock' => 'sushant-lok-phase-1',
        'sushant-lok-3' => 'sushant-lok-phase-3',
        // Not in Gurugram.
        'bptp-parklands' => '/city/faridabad',
        'ats-greens-1' => '/city/noida',
        'ats-green-valley-pockets' => '/city/noida',
    ],
    // Gurugram societies that were filed under the wrong city (found 1 Oct 2026).
    'kochi' => [
        'ireo-skyon' => '/city/gurugram/ireo-skyon-towers-bd',
    ],
    'guwahati' => [
        'mapsko-mountville' => '/city/gurugram',
    ],
];
