<?php

/*
|--------------------------------------------------------------------------
| What NXTutors teaches, in five learning areas
|--------------------------------------------------------------------------
|
| One list drives the home page Explore tabs, the hero search suggestions
| and the popular-search chips, so they can never disagree.
|
| Each item:
|   label   what parents call it
|   page    a key in config/subject_pages.php; linked once that page is live
|   search  what a chip types into the hero search (defaults to label)
|   aka     other spellings for the search suggestions
|   keys    regex matched against public tutor profiles to count supply
|   tutors  tutors whose public profile mentions it (snapshot, see `as_of`);
|           an item with no page and no tutors is not shown anywhere, so
|           parents are never offered something nobody here teaches
|
*/

return [
    'as_of' => '2026-09-27',

    'areas' => [
        'school' => [
            'label' => 'School subjects',
            'items' => [
                ['label' => 'Maths', 'page' => 'maths-home-tutor', 'aka' => ['Math', 'Mathematics'], 'keys' => '\bmath'],
                ['label' => 'Science', 'page' => 'science-home-tutor', 'keys' => '\bscience\b'],
                ['label' => 'Physics', 'page' => 'physics-home-tutor', 'keys' => '\bphysics\b'],
                ['label' => 'Chemistry', 'page' => 'chemistry-home-tutor', 'keys' => '\bchemistry\b'],
                ['label' => 'Biology', 'keys' => '\bbiology\b'],
                ['label' => 'English', 'aka' => ['English grammar', 'English literature'], 'keys' => '\benglish (?:grammar|literature|language|tutor|teacher|subject)|\bteach(?:es|ing)? english\b'],
                ['label' => 'Hindi', 'keys' => '\bhindi (?:tutor|teacher|subject|language|grammar)|\bteach(?:es|ing)? hindi\b'],
                ['label' => 'Social Science', 'aka' => ['SST', 'History', 'Geography'], 'keys' => '\bsocial (?:science|studies)\b|\bsst\b'],
                ['label' => 'Accountancy', 'aka' => ['Accounts'], 'keys' => '\baccount(?:s|ancy)\b'],
                ['label' => 'Economics', 'keys' => '\beconomics\b'],
                ['label' => 'Business Studies', 'keys' => '\bbusiness studies\b'],
                ['label' => 'Computer Science', 'aka' => ['Informatics Practices', 'IP'], 'keys' => '\bcomputer science\b|\binformatics practices\b'],
            ],
        ],

        'boards' => [
            'label' => 'Boards & classes',
            'items' => [
                ['label' => 'Primary (LKG to Class 5)', 'search' => 'Primary', 'aka' => ['Class 1', 'Class 2', 'Class 3', 'Class 4', 'Class 5', 'Nursery', 'KG'], 'keys' => '\bprimary\b|\bclass(?:es)? ?(?:1|i)\s?(?:-|to|–)\s?(?:5|v)\b|\bnursery\b|\bkindergarten\b'],
                ['label' => 'Class 10 Maths', 'page' => 'maths-home-tutor/class-10', 'keys' => null],
                ['label' => 'Class 10 Science', 'page' => 'science-home-tutor/class-10', 'keys' => null],
                ['label' => 'Class 12 Maths', 'page' => 'maths-home-tutor/class-12', 'keys' => null],
                ['label' => 'Class 12 Physics', 'page' => 'physics-home-tutor/class-12', 'keys' => null],
                ['label' => 'Class 12 Chemistry', 'page' => 'chemistry-home-tutor/class-12', 'keys' => null],
                ['label' => 'IB Maths', 'page' => 'ib-maths-tutor', 'keys' => null],
                ['label' => 'IGCSE Maths', 'page' => 'igcse-maths-tutor', 'keys' => null],
                ['label' => 'ISC Maths', 'page' => 'isc-maths-tutor', 'keys' => null],
                ['label' => 'ICSE Maths', 'page' => 'icse-maths-tutor-gurgaon', 'keys' => null],
                ['label' => 'IB Physics', 'page' => 'ib-physics-tutor-gurgaon', 'keys' => null],
                ['label' => 'IGCSE Physics', 'page' => 'igcse-physics-tutor-gurgaon', 'keys' => null],
                ['label' => 'IB & IGCSE Chemistry', 'page' => 'ib-igcse-chemistry-tutor-gurgaon', 'keys' => null],
                ['label' => 'IB & IGCSE English', 'search' => 'IB English', 'keys' => '\b(?:ib|igcse)\b[^.]{0,40}\benglish\b'],
            ],
        ],

        'exams' => [
            'label' => 'Entrance exams',
            'items' => [
                ['label' => 'JEE Physics', 'page' => 'physics-home-tutor/jee', 'keys' => null],
                ['label' => 'NEET Physics', 'page' => 'physics-home-tutor/neet', 'keys' => null],
                ['label' => 'NEET Chemistry', 'page' => 'chemistry-home-tutor/neet', 'keys' => null],
                ['label' => 'JEE Maths', 'search' => 'JEE Maths', 'aka' => ['IIT JEE'], 'keys' => '\b(?:iit[- ]?)?jee\b'],
                ['label' => 'NEET Biology', 'search' => 'NEET Biology', 'keys' => '\bneet\b[^.]{0,40}\bbiology\b|\bbiology\b[^.]{0,40}\bneet\b'],
                ['label' => 'CUET', 'keys' => '\bcuet\b'],
                ['label' => 'Olympiads', 'aka' => ['IMO', 'NSO', 'RMO'], 'keys' => '\bolympiad'],
                ['label' => 'SAT', 'keys' => '\bsat\b(?! ?urday)'],
                ['label' => 'CA Foundation', 'aka' => ['CA'], 'keys' => '\bca (?:foundation|inter|final)\b|\bchartered accountan'],
            ],
        ],

        'languages' => [
            'label' => 'Languages & study abroad',
            'items' => [
                ['label' => 'Spoken English', 'aka' => ['English speaking', 'Communication skills'], 'keys' => '\bspoken english\b|\benglish speaking\b'],
                ['label' => 'IELTS', 'keys' => '\bielts\b'],
                ['label' => 'PTE', 'keys' => '\bpte\b'],
                ['label' => 'TOEFL', 'keys' => '\btoefl\b'],
                ['label' => 'French', 'keys' => '\bfrench\b'],
                ['label' => 'German', 'keys' => '\bgerman\b'],
                ['label' => 'Spanish', 'keys' => '\bspanish\b'],
                ['label' => 'Japanese', 'keys' => '\bjapanese\b'],
                ['label' => 'Sanskrit', 'keys' => '\bsanskrit\b'],
            ],
        ],

        'skills' => [
            'label' => 'Skills & hobbies',
            'items' => [
                ['label' => 'Abacus', 'aka' => ['Mental maths'], 'keys' => '\babacus\b'],
                ['label' => 'Vedic Maths', 'keys' => '\bvedic math'],
                ['label' => 'Coding for kids', 'search' => 'Coding', 'aka' => ['Scratch', 'Programming'], 'keys' => '\bcoding\b|\bscratch\b'],
                ['label' => 'Python', 'keys' => '\bpython\b'],
                ['label' => 'Excel & MS Office', 'search' => 'Excel', 'aka' => ['MS Office', 'Excel'], 'keys' => '\bms[- ]?office\b|\bexcel\b(?! in)'],
                ['label' => 'Handwriting', 'keys' => '\bhandwriting\b|\bcalligraphy\b'],
                ['label' => 'Chess', 'keys' => '\bchess\b'],
                ['label' => 'Drawing & painting', 'search' => 'Drawing', 'aka' => ['Art', 'Painting', 'Sketching'], 'keys' => '\bdrawing\b|\bpainting\b|\bsketching\b'],
                ['label' => 'Guitar', 'keys' => '\bguitar\b'],
                ['label' => 'Keyboard & piano', 'search' => 'Keyboard', 'aka' => ['Piano'], 'keys' => '\bpiano\b|\bkeyboard (?:classes|teacher|lessons)'],
                ['label' => 'Singing', 'aka' => ['Vocal music', 'Hindustani music'], 'keys' => '\bsinging\b|\bvocal\b'],
                ['label' => 'Dance', 'keys' => '\bdance\b'],
                ['label' => 'Yoga', 'aka' => ['Meditation'], 'keys' => '\byoga\b'],
            ],
        ],
    ],
];
