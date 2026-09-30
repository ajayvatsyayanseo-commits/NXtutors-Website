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
        // Not in Gurugram.
        'bptp-parklands' => '/city/faridabad',
        'ats-greens-1' => '/city/delhi-ncr',
        'ats-green-valley-pockets' => '/city/delhi-ncr',
    ],
];
