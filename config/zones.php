<?php

/*
|--------------------------------------------------------------------------
| Zones within a city, for home-tutor matching
|--------------------------------------------------------------------------
|
| Home tutoring is about whether a tutor can reach the house. There are no
| map coordinates on profiles, so areas are grouped into zones and a tutor in
| the same zone ranks just below one in the same area (App\Support\Zones).
|
| Zones are approximate neighbourhood groupings, matched by sector number
| and by name. They are a starting point to correct as the team sees real
| travel patterns, not survey boundaries. Add a city by adding its block.
|
*/

return [
    'Gurugram' => [
        'Golf Course Road' => [
            'sectors' => [27, 28, 42, 43, 52, 53, 54],
            'names' => ['dlf phase', 'golf course road', 'sushant lok 1', 'sushant lok i', 'wazirabad', 'dlf city', 'ardee city'],
        ],
        'MG Road & Cyber City' => [
            'sectors' => [24, 25, 26, 29],
            'names' => ['mg road', 'cyber city', 'cyber hub', 'udyog vihar', 'nathupur', 'sikanderpur', 'dlf qe'],
        ],
        'Central Gurugram' => [
            'sectors' => [30, 31, 32, 38, 39, 40, 41, 44, 45, 46],
            'names' => ['huda city centre', 'south city 1','sushant lok 2', 'sushant lok ii', 'sushant lok 3', 'kanhai', 'jharsa'],
        ],
        'Golf Course Extension Road' => [
            'sectors' => [55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66],
            'names' => ['golf course extension', 'gcer'],
        ],
        'Sohna Road' => [
            'sectors' => [47, 48, 49, 50, 51, 67, 68, 69, 70, 71, 72],
            'names' => ['sohna road', 'south city 2', 'south city ii', 'nirvana', 'malibu', 'badshahpur', 'vatika city'],
        ],
        'Southern Peripheral Road' => [
            'sectors' => [73, 74, 75, 76, 77, 78, 79, 80],
            'names' => ['southern peripheral', 'spr'],
        ],
        'New Gurugram' => [
            'sectors' => [81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95],
            'names' => ['new gurgaon', 'new gurugram', 'manesar'],
        ],
        'Dwarka Expressway' => [
            'sectors' => [34, 35, 36, 37, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115],
            'names' => ['dwarka expressway', 'sector 37c', 'sector 37d', 'sector 36a'],
        ],
        'Old Gurugram' => [
            'sectors' => range(1, 23),
            'names' => ['palam vihar', 'old gurgaon', 'old gurugram', 'sadar bazar', 'shivaji nagar', 'new colony', 'laxman vihar', 'krishna colony'],
        ],
    ],
];
