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
|   subject what tutors list for it, when that differs ("JEE Maths" -> Mathematics)
|   aka     other spellings for the search suggestions
|   keys    regex matched against public tutor profiles to count supply
|   tutors  public profiles that mention it (snapshot, see `as_of`), not
|           counting the 724 profiles that carry a copied bio; an item with no
|           page and fewer than LearningAreas::MIN_TUTORS is not shown, so
|           parents are never offered something nobody here teaches
|
*/

return [
    'as_of' => '2026-09-27',

    'areas' => [
        'school' => [
            'label' => 'School subjects',
            'items' => [
                ['label' => 'Maths', 'page' => 'maths-home-tutor', 'aka' => ['Math', 'Mathematics'], 'keys' => '\bmath', 'tutors' => 59],
                ['label' => 'Science', 'page' => 'science-home-tutor', 'keys' => '\bscience\b', 'tutors' => 12],
                ['label' => 'Physics', 'page' => 'physics-home-tutor', 'keys' => '\bphysics\b', 'tutors' => 32],
                ['label' => 'Chemistry', 'page' => 'chemistry-home-tutor', 'keys' => '\bchemistry\b', 'tutors' => 5],
                ['label' => 'Biology', 'keys' => '\bbiology\b', 'tutors' => 2],
                ['label' => 'English', 'aka' => ['English grammar', 'English literature'], 'keys' => '\benglish (?:grammar|literature|language|tutor|teacher|subject)|\bteach(?:es|ing)? english\b', 'tutors' => 0],
                ['label' => 'Hindi', 'keys' => '\bhindi (?:tutor|teacher|subject|language|grammar)|\bteach(?:es|ing)? hindi\b', 'tutors' => 0],
                ['label' => 'Social Science', 'aka' => ['SST', 'History', 'Geography'], 'keys' => '\bsocial (?:science|studies)\b|\bsst\b', 'tutors' => 0],
                ['label' => 'Accountancy', 'aka' => ['Accounts'], 'keys' => '\baccount(?:s|ancy)\b', 'tutors' => 0],
                ['label' => 'Economics', 'keys' => '\beconomics\b', 'tutors' => 0],
                ['label' => 'Business Studies', 'keys' => '\bbusiness studies\b', 'tutors' => 0],
                ['label' => 'Computer Science', 'aka' => ['Informatics Practices', 'IP'], 'keys' => '\bcomputer science\b|\binformatics practices\b', 'tutors' => 2],
            ],
        ],

        'boards' => [
            'label' => 'Boards & classes',
            'items' => [
                ['label' => 'Primary (LKG to Class 5)', 'search' => 'Primary', 'aka' => ['Class 1', 'Class 2', 'Class 3', 'Class 4', 'Class 5', 'Nursery', 'KG'], 'keys' => '\bprimary\b|\bclass(?:es)? ?(?:1|i)\s?(?:-|to|–)\s?(?:5|v)\b|\bnursery\b|\bkindergarten\b', 'tutors' => 0],
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
                ['label' => 'IB & IGCSE English', 'search' => 'IB English', 'subject' => 'English', 'keys' => '\b(?:ib|igcse)\b[^.]{0,40}\benglish\b', 'tutors' => 1],
            ],
        ],

        'exams' => [
            'label' => 'Entrance exams',
            'items' => [
                ['label' => 'JEE Physics', 'page' => 'physics-home-tutor/jee', 'keys' => null],
                ['label' => 'NEET Physics', 'page' => 'physics-home-tutor/neet', 'keys' => null],
                ['label' => 'NEET Chemistry', 'page' => 'chemistry-home-tutor/neet', 'keys' => null],
                ['label' => 'JEE Maths', 'search' => 'JEE Maths', 'subject' => 'Mathematics', 'aka' => ['IIT JEE'], 'keys' => '\b(?:iit[- ]?)?jee\b', 'tutors' => 29],
                ['label' => 'NEET Biology', 'search' => 'NEET Biology', 'subject' => 'Biology', 'keys' => '\bneet\b[^.]{0,40}\bbiology\b|\bbiology\b[^.]{0,40}\bneet\b', 'tutors' => 0],
                ['label' => 'CUET', 'keys' => '\bcuet\b', 'tutors' => 0],
                ['label' => 'Olympiads', 'aka' => ['IMO', 'NSO', 'RMO'], 'keys' => '\bolympiad', 'tutors' => 0],
                ['label' => 'SAT', 'keys' => '\bsat\b(?! ?urday)', 'tutors' => 1],
                ['label' => 'CA Foundation', 'aka' => ['CA'], 'keys' => '\bca (?:foundation|inter|final)\b|\bchartered accountan', 'tutors' => 0],
                ['label' => 'CLAT', 'aka' => ['Law entrance'], 'keys' => '\bclat\b'],
                ['label' => 'IPMAT', 'keys' => '\bipmat\b'],
                ['label' => 'NDA Maths', 'search' => 'NDA', 'subject' => 'Mathematics', 'keys' => '\bnda\b'],
                ['label' => 'NTSE', 'keys' => '\bntse\b'],
                ['label' => 'GRE', 'keys' => '\bgre\b'],
                ['label' => 'GMAT', 'keys' => '\bgmat\b'],
            ],
        ],

        'languages' => [
            'label' => 'Languages & study abroad',
            'items' => [
                ['label' => 'Spoken English', 'aka' => ['English speaking', 'Communication skills'], 'keys' => '\bspoken english\b|\benglish speaking\b', 'tutors' => 0],
                ['label' => 'IELTS', 'keys' => '\bielts\b', 'tutors' => 1],
                ['label' => 'PTE', 'keys' => '\bpte\b', 'tutors' => 0],
                ['label' => 'TOEFL', 'keys' => '\btoefl\b', 'tutors' => 0],
                ['label' => 'French', 'keys' => '\bfrench\b', 'tutors' => 0],
                ['label' => 'German', 'keys' => '\bgerman\b', 'tutors' => 0],
                ['label' => 'Spanish', 'keys' => '\bspanish\b', 'tutors' => 0],
                ['label' => 'Japanese', 'keys' => '\bjapanese\b', 'tutors' => 0],
                ['label' => 'Sanskrit', 'keys' => '\bsanskrit\b', 'tutors' => 0],
                ['label' => 'Hindi (for NRI kids)', 'search' => 'Hindi language', 'keys' => null],
                ['label' => 'Arabic', 'keys' => '\barabic\b'],
                ['label' => 'Mandarin Chinese', 'search' => 'Mandarin', 'aka' => ['Chinese'], 'keys' => '\bmandarin\b|\bchinese\b'],
                ['label' => 'Korean', 'keys' => '\bkorean\b'],
                ['label' => 'Italian', 'keys' => '\bitalian\b'],
                ['label' => 'Tamil', 'keys' => '\btamil (?:language|tutor|teacher)'],
                ['label' => 'Telugu', 'keys' => '\btelugu (?:language|tutor|teacher)'],
                ['label' => 'Kannada', 'keys' => '\bkannada (?:language|tutor|teacher)'],
                ['label' => 'Marathi', 'keys' => '\bmarathi (?:language|tutor|teacher)'],
                ['label' => 'Bengali', 'keys' => '\bbengali (?:language|tutor|teacher)'],
            ],
        ],

        'skills' => [
            'label' => 'Skills & hobbies',
            'items' => [
                ['label' => 'Abacus', 'aka' => ['Mental maths'], 'keys' => '\babacus\b', 'tutors' => 0],
                ['label' => 'Vedic Maths', 'keys' => '\bvedic math', 'tutors' => 0],
                ['label' => 'Coding for kids', 'search' => 'Coding', 'aka' => ['Scratch', 'Programming'], 'keys' => '\bcoding\b|\bscratch\b', 'tutors' => 0],
                ['label' => 'Python', 'keys' => '\bpython\b', 'tutors' => 1],
                ['label' => 'Excel & MS Office', 'search' => 'Excel', 'aka' => ['MS Office', 'Excel'], 'keys' => '\bms[- ]?office\b|\bexcel\b(?! in)', 'tutors' => 2],
                ['label' => 'Handwriting', 'keys' => '\bhandwriting\b|\bcalligraphy\b', 'tutors' => 0],
                ['label' => 'Chess', 'keys' => '\bchess\b', 'tutors' => 0],
                ['label' => 'Drawing & painting', 'search' => 'Drawing', 'aka' => ['Art', 'Painting', 'Sketching'], 'keys' => '\bdrawing\b|\bpainting\b|\bsketching\b', 'tutors' => 0],
                ['label' => 'Guitar', 'keys' => '\bguitar\b', 'tutors' => 0],
                ['label' => 'Keyboard & piano', 'search' => 'Keyboard', 'aka' => ['Piano'], 'keys' => '\bpiano\b|\bkeyboard (?:classes|teacher|lessons)', 'tutors' => 0],
                ['label' => 'Singing', 'aka' => ['Vocal music', 'Hindustani music'], 'keys' => '\bsinging\b|\bvocal\b', 'tutors' => 0],
                ['label' => 'Dance', 'keys' => '\bdance\b', 'tutors' => 0],
                ['label' => 'Yoga', 'aka' => ['Meditation'], 'keys' => '\byoga\b', 'tutors' => 0],
                ['label' => 'Violin', 'keys' => '\bviolin\b'],
                ['label' => 'Tabla', 'keys' => '\btabla\b'],
                ['label' => 'Flute', 'keys' => '\bflute\b'],
                ['label' => 'Kathak', 'aka' => ['Classical dance'], 'keys' => '\bkathak\b'],
                ['label' => 'Bharatanatyam', 'keys' => '\bbharatanatyam\b'],
                ['label' => 'Zumba & fitness', 'search' => 'Fitness', 'aka' => ['Zumba', 'Aerobics'], 'keys' => '\bzumba\b|\bfitness trainer\b'],
                ['label' => 'Art & craft', 'search' => 'Art and craft', 'keys' => '\bart (?:and|&) craft\b'],
                ['label' => 'Public speaking', 'aka' => ['Personality development', 'Debate'], 'keys' => '\bpublic speaking\b|\bpersonality development\b'],
                ['label' => 'Robotics', 'keys' => '\brobotics\b'],
                ['label' => 'Web development', 'aka' => ['HTML', 'JavaScript'], 'keys' => '\bweb development\b|\bjavascript\b'],
                ['label' => 'Java', 'keys' => '\bjava\b(?!script)'],
            ],
        ],

        'professional' => [
            'label' => 'Professional & college',
            'items' => [
                ['label' => 'CA / CS / CMA', 'search' => 'CA', 'aka' => ['Chartered accountancy', 'Company secretary', 'CMA'], 'keys' => '\bca (?:inter|final)\b|\bcompany secretary\b|\bcma\b'],
                ['label' => 'BCom tuition', 'search' => 'BCom', 'aka' => ['B.Com', 'Commerce college'], 'keys' => '\bb\.?\s?com\b'],
                ['label' => 'BTech / engineering', 'search' => 'BTech', 'aka' => ['Engineering maths', 'B.Tech'], 'keys' => '\bb\.?\s?tech\b.*\btuition\b|\bengineering (?:maths|mathematics)\b'],
                ['label' => 'BBA / MBA subjects', 'search' => 'MBA', 'keys' => '\bmba\b|\bbba\b'],
                ['label' => 'Tally & GST', 'search' => 'Tally', 'keys' => '\btally\b|\bgst\b'],
                ['label' => 'Digital marketing', 'keys' => '\bdigital marketing\b|\bseo\b'],
                ['label' => 'Data science', 'aka' => ['Machine learning', 'Data analytics'], 'keys' => '\bdata science\b|\bmachine learning\b'],
                ['label' => 'Business English', 'aka' => ['Interview preparation'], 'keys' => '\bbusiness english\b|\binterview preparation\b'],
            ],
        ],
    ],
];
