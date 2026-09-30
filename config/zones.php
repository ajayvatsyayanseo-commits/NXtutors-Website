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
            'sectors' => [30, 31, 32, 33, 38, 39, 40, 41, 44, 45, 46],
            'names' => ['huda city centre', 'south city 1','sushant lok 2', 'sushant lok ii', 'sushant lok 3', 'kanhai', 'jharsa'],
        ],
        'Golf Course Extension Road' => [
            'sectors' => [55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66],
            'names' => ['golf course extension', 'gcer', 'huda plots'],
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
    // Noida (30 Sep 2026): from the sector research in database/seo-content/areas/noida-research.json.
    'Noida' => [
        'Old Noida' => [
            'sectors' => [11, 12, 14, 15, 17, 19, 20, 21, 22, 23, 25, 26, 27, 28, 29, 30, 31, 33],
            'names' => ['old noida', 'atta market', 'film city'],
        ],
        'Central Noida' => [
            'sectors' => [34, 35, 36, 37, 39, 40, 41, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53],
            'names' => ['botanical garden', 'city centre', 'central noida'],
        ],
        'Sector 62 Belt' => [
            'sectors' => [55, 56, 61, 62],
            'names' => ['sector 62', 'electronic city'],
        ],
        'Sectors 70–82' => [
            'sectors' => [70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 82],
            'names' => ['nsez'],
        ],
        'Noida Expressway' => [
            'sectors' => [92, 93, 99, 100, 104, 105, 107, 108, 110, 128, 134, 137, 143, 144, 150, 151, 168],
            'names' => ['noida expressway', 'expressway'],
        ],
        'Near Noida Extension' => [
            'sectors' => [115, 116, 117, 118, 119, 120, 121, 122],
            'names' => ['gaur chowk', 'noida extension border'],
        ],
    ],
    // Greater Noida incl. Greater Noida West (30 Sep 2026), from database/seo-content/areas/greater-noida-research.json.
    // Greek-letter sectors are matched by full name ("pi 1", "mu 2"), never bare "pi"/"mu".
    'Greater Noida' => [
        'Greater Noida West' => [
            'sectors' => [1, 2, 3, 4, 10, 12, 16],
            'names' => ['techzone 4', 'gaur city 1', 'gaur city 2', 'shahberi', 'greater noida west', 'noida extension', 'gaur chowk', 'ek murti'],
        ],
        'Alpha–Delta & Pari Chowk' => [
            'sectors' => [],
            'names' => ['alpha 1', 'alpha 2', 'beta 1', 'beta 2', 'gamma 1', 'gamma 2', 'delta 1', 'delta 2', 'delta 3', 'sector p 3', 'sector p 4', 'jagat farm', 'alpha', 'beta', 'gamma', 'delta'],
        ],
        'Omega, Chi & Phi' => [
            'sectors' => [],
            'names' => ['omega 1', 'omega 2', 'chi 2', 'chi 3', 'chi 4', 'chi 5', 'phi 2', 'phi 3', 'pari chowk'],
        ],
        'Pi, Sigma & Sectors 36–37' => [
            'sectors' => [36, 37],
            'names' => ['swarn nagri', 'pi 1', 'pi 2', 'sigma 1', 'sigma 2', 'sigma 3', 'sigma 4', 'kasna'],
        ],
        'Zeta & Eta' => [
            'sectors' => [],
            'names' => ['zeta 1', 'zeta 2', 'eta 1', 'eta 2'],
        ],
        'Omicron, Mu & Xu' => [
            'sectors' => [],
            'names' => ['omicron 1', 'omicron 1a', 'omicron 2', 'omicron 3', 'mu 1', 'mu 2', 'xu 1', 'xu 2', 'xu 3', 'surajpur'],
        ],
    ],
    // Ghaziabad (30 Sep 2026), from database/seo-content/areas/ghaziabad-research.json.
    // Order matters: "raj nagar extension" is matched before "raj nagar".
    'Ghaziabad' => [
        'Indirapuram' => [
            'sectors' => [],
            'names' => ['indirapuram', 'ahinsa khand', 'nyay khand', 'shakti khand', 'gyan khand', 'niti khand', 'abhay khand', 'vaibhav khand', 'kanawani', 'makanpur'],
        ],
        'Vaishali & Kaushambi' => [
            'sectors' => [],
            'names' => ['vaishali', 'kaushambi'],
        ],
        'Vasundhara' => [
            'sectors' => [],
            'names' => ['vasundhara'],
        ],
        'Sahibabad & Rajendra Nagar' => [
            'sectors' => [],
            'names' => ['rajendra nagar', 'shalimar garden', 'sahibabad', 'shyam park', 'pasonda', 'shaheed nagar', 'mohan nagar', 'garima garden', 'arthala', 'karhera'],
        ],
        'Surya Nagar & Ramprastha' => [
            'sectors' => [],
            'names' => ['surya nagar', 'ramprastha', 'brij vihar', 'chander nagar'],
        ],
        'Raj Nagar Extension & NH-9 Corridor' => [
            'sectors' => [],
            'names' => ['raj nagar extension', 'rajnagar extension', 'vijay nagar', 'pratap vihar', 'siddharth vihar', 'crossings republik', 'crossing republik'],
        ],
        'Raj Nagar, Kavi Nagar & Old Ghaziabad' => [
            'sectors' => [],
            'names' => ['raj nagar', 'rajnagar', 'kavi nagar', 'shastri nagar', 'nehru nagar', 'lohia nagar', 'patel nagar', 'sanjay nagar', 'govindpuram', 'nandgram', 'madhuban bapudham', 'ambedkar road'],
        ],
    ],
    // Faridabad (30 Sep 2026), from database/seo-content/areas/faridabad-research.json.
    // Named places first, then HSVP sector numbers ("sector 21c" counts as 21).
    'Faridabad' => [
        'NIT & Old Faridabad' => [
            'sectors' => [],
            'names' => ['nit', 'new industrial township', 'old faridabad', 'jawahar colony', 'dabua colony'],
        ],
        'Central Sectors (Mathura Road)' => [
            'sectors' => [7, 8, 9, 10, 11, 12, 14, 15, 16, 17, 18, 19, 21],
            'names' => [],
        ],
        'Sectors 28–31 & 37' => [
            'sectors' => [28, 29, 30, 31, 37],
            'names' => [],
        ],
        'Surajkund & Sainik Colony' => [
            'sectors' => [43, 45, 46, 48, 49],
            'names' => ['sainik colony', 'charmwood', 'surajkund'],
        ],
        'Ballabhgarh & Southern Sectors' => [
            'sectors' => [2, 3, 4, 5, 22, 23, 55, 56, 57, 62, 64, 65],
            'names' => ['ballabhgarh', 'ballabgarh', 'sanjay colony'],
        ],
        'Greater Faridabad (Sectors 75–80)' => [
            'sectors' => [75, 76, 77, 78, 79, 80],
            'names' => [],
        ],
        'Greater Faridabad (Sectors 81–89)' => [
            'sectors' => [81, 82, 83, 84, 85, 86, 87, 88, 89],
            'names' => ['neharpar', 'greater faridabad'],
        ],
    ],
];
