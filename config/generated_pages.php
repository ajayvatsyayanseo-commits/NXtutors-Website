<?php
/*
 * Generated /p/ pages that stay in Google's index.
 *
 * About 3,100 pages were generated from area x subject x board x class, most
 * of them near-identical and with few real tutors behind them. In Search
 * Console (23 Jul - 27 Sep 2026) Google had surfaced 343 of them and 30 got a
 * click. Scaled templated pages like these are what Google's spam policy on
 * scaled content targets, and they can pull the whole site down.
 *
 * So only the pages below are indexable: every one that earned at least one
 * click or ten impressions in that export. The rest stay live for visitors
 * and internal links, marked noindex,follow and left out of the sitemap.
 * See App\Support\GeneratedPageIndex.
 *
 * To bring a page back, add its slug here. A page whose payload says
 * index_flag = Noindex stays noindexed even if listed.
 */
return [
    'indexable' => [
        'gurugramdlf-phase-2ibmathematics',
        'gurugramsector-47ibmathematics',
        'gurugramnirvana-countryigcsemathematicshome-tutor-class-9',
        'gurugramsector-48ibmathematicshome-tutor',
        'noidasector-134mathematicshome-class-11-cbse',
        'gurugramcyber-cityibmathematics',
        'gurugram-sector-43-best-maths-home-tutor-igcse-class-9',
        'gurugramdlf-phase-5ibmathematics',
        'gurugramsector-54mathematics-home-tutor',
        'kolkatarajarhatsiddha-happyvillemathematics-home-tuition-jee',
        'best-maths-home-tutor-dlf-phase-2-gurugram-igcse-class-9',
        'kolkata-southern-avenue-chemistry-class-12-home-tutor',
        'sector-46-gurugram-maths-home-tutor-igcse-class-9',
        'kolkatatopsianeet-biology-home-tutors',
        'gurugramsector-47igcsemathematics',
        'gurugramsector-50mathematics-igcse-class-9-home-tutor',
        'gurugramsector-49chemistry-home-tutor-ib-class-11',
        'gurugramsector-23igcsephysics-home-tutor',
        'kolkatagariahatphysicscbse-class-11home',
        'gurugram-dlf-phase-5-business-studies-home-tutor-ib-class-11',
        'gurugramsector-45ibsocial-science',
        'kolkatarajarahtsiddha-happyvillephysics-class-12-home-tutor',
        'gurugramsector-107ibeconomics',
        'gurugramsector-58english-home-tutor-ib-class-6-home',
        'gurugramsector-91physics-home-tutor-ib-class-11',
        'gurugramdlf-phase-3ibphysics',
        'best-accountancy-home-tutor-palam-vihar-gurugram-ib-class-11',
        'kolkatacamac-streetsocial-science-home-tutor-igcse-class-9',
        'gurugramsector-88maths-home-tutor-ib-class-6',
        'gurugram-sector-104-chemistry-home-tutor-cbse-class-11',
        'gurugramsector-4ibaccountancy',
        'gurugramsector-12accountancy-ib-class-11-home-tutor',
        'gurugramsector-44accountancy-home-tutor-ib-class-11',
        'gurugramdlf-phase-5igcsemathematics',
        'kolkatagariahatgolpark-mathematics-jee-home-tutors',
        'gurugramcyber-cityigcsesocial-science-home-tutor',
        'gurugramgolf-course-roadphysics-home-tutor-class-11',
        'gurugramsector-10amathematicsib-class-6-home-tutor',
        'gurugramdlf-phase-1ibmathematics',
        'gurugramsector-65igcsemathematics',
        'kolkata-lake-gardens-economics-cuet-home-tutors',
        'best-cuet-coaching-in-golpark-gariahat-kolkata-economics-home',
        'best-neet-coaching-hindustan-park-north-kolkata-biology-home-tutor',
        'gurugramsector-21physics-igcse-class-9-home-tutor',
        'kolkatasouthern-avenueeconomics',
        'gurugramsector-44igcsescience-home-tutor-class-9',
        'gurugramsector-48maths-home-tutor-igcse',
        'gurugramsector-36mathematicshome-tutor-ib-class-6',
        'gurugramsector-55ibphysicshome-tutor',
        'gurugramsector-36ibcomputer-science',
    ],

    /*
     * Titles for the indexed pages: [area, city, what is taught]. Google shows
     * several of these for "home tutor near me" at positions 1-3, but the
     * stored titles led with the subject ("Best Accountancy Home Tutor ...")
     * and got no clicks. App\Support\GeneratedPageIndex::seo() builds
     * "Home Tutor in {area}, {city} - {subject}" from these. Remove a line to
     * fall back to the page's stored title.
     */
    'seo' => [
        'gurugramdlf-phase-2ibmathematics' => ['DLF Phase 2', 'Gurugram', 'IB Maths, Class 6'],
        'gurugramsector-47ibmathematics' => ['Sector 47', 'Gurugram', 'IB Maths, Class 6'],
        'gurugramnirvana-countryigcsemathematicshome-tutor-class-9' => ['Nirvana Country', 'Gurugram', 'IGCSE Maths, Class 9'],
        'gurugramsector-48ibmathematicshome-tutor' => ['Sector 48', 'Gurugram', 'IB Maths, Class 6'],
        'noidasector-134mathematicshome-class-11-cbse' => ['Sector 134', 'Noida', 'CBSE Maths, Class 11'],
        'gurugramcyber-cityibmathematics' => ['Cyber City', 'Gurugram', 'IB Maths, Class 6'],
        'gurugram-sector-43-best-maths-home-tutor-igcse-class-9' => ['Sector 43', 'Gurugram', 'IGCSE Maths, Class 9'],
        'gurugramdlf-phase-5ibmathematics' => ['DLF Phase 5', 'Gurugram', 'IB Maths, Class 6'],
        'gurugramsector-54mathematics-home-tutor' => ['Sector 54', 'Gurugram', 'IB Maths, Class 6'],
        'kolkatarajarhatsiddha-happyvillemathematics-home-tuition-jee' => ['Rajarhat', 'Kolkata', 'JEE Maths'],
        'best-maths-home-tutor-dlf-phase-2-gurugram-igcse-class-9' => ['DLF Phase 2', 'Gurugram', 'IGCSE Maths, Class 9'],
        'kolkata-southern-avenue-chemistry-class-12-home-tutor' => ['Southern Avenue', 'Kolkata', 'CBSE Chemistry, Class 12'],
        'sector-46-gurugram-maths-home-tutor-igcse-class-9' => ['Sector 46', 'Gurugram', 'IGCSE Maths, Class 9'],
        'kolkatatopsianeet-biology-home-tutors' => ['Topsia', 'Kolkata', 'NEET Biology'],
        'gurugramsector-47igcsemathematics' => ['Sector 47', 'Gurugram', 'IGCSE Maths, Class 9'],
        'gurugramsector-50mathematics-igcse-class-9-home-tutor' => ['Sector 50', 'Gurugram', 'IGCSE Maths, Class 9'],
        'gurugramsector-49chemistry-home-tutor-ib-class-11' => ['Sector 49', 'Gurugram', 'IB Chemistry, Class 11'],
        'gurugramsector-23igcsephysics-home-tutor' => ['Sector 23', 'Gurugram', 'IGCSE Physics, Class 9'],
        'kolkatagariahatphysicscbse-class-11home' => ['Gariahat', 'Kolkata', 'CBSE Physics, Class 11'],
        'gurugram-dlf-phase-5-business-studies-home-tutor-ib-class-11' => ['DLF Phase 5', 'Gurugram', 'IB Business, Class 11'],
        'gurugramsector-45ibsocial-science' => ['Sector 45', 'Gurugram', 'IB Social Science, Class 6'],
        'kolkatarajarahtsiddha-happyvillephysics-class-12-home-tutor' => ['Rajarhat', 'Kolkata', 'CBSE Physics, Class 12'],
        'gurugramsector-107ibeconomics' => ['Sector 107', 'Gurugram', 'IB Economics, Class 11'],
        'gurugramsector-58english-home-tutor-ib-class-6-home' => ['Sector 58', 'Gurugram', 'IB English, Class 6'],
        'gurugramsector-91physics-home-tutor-ib-class-11' => ['Sector 91', 'Gurugram', 'IB Physics, Class 11'],
        'gurugramdlf-phase-3ibphysics' => ['DLF Phase 3', 'Gurugram', 'IB Physics, Class 11'],
        'best-accountancy-home-tutor-palam-vihar-gurugram-ib-class-11' => ['Palam Vihar', 'Gurugram', 'Accountancy, Class 11 (Commerce)'],
        'kolkatacamac-streetsocial-science-home-tutor-igcse-class-9' => ['Camac Street', 'Kolkata', 'IGCSE Social Science, Class 9'],
        'gurugramsector-88maths-home-tutor-ib-class-6' => ['Sector 88', 'Gurugram', 'IB Maths, Class 6'],
        'gurugram-sector-104-chemistry-home-tutor-cbse-class-11' => ['Sector 104', 'Gurugram', 'CBSE Chemistry, Class 11'],
        'gurugramsector-4ibaccountancy' => ['Sector 4', 'Gurugram', 'Accountancy, Class 11 (Commerce)'],
        'gurugramsector-12accountancy-ib-class-11-home-tutor' => ['Sector 12', 'Gurugram', 'Accountancy, Class 11 (Commerce)'],
        'gurugramsector-44accountancy-home-tutor-ib-class-11' => ['Sector 44', 'Gurugram', 'Accountancy, Class 11 (Commerce)'],
        'gurugramdlf-phase-5igcsemathematics' => ['DLF Phase 5', 'Gurugram', 'IGCSE Maths, Class 9'],
        'kolkatagariahatgolpark-mathematics-jee-home-tutors' => ['Golpark, Gariahat', 'Kolkata', 'JEE Maths'],
        'gurugramcyber-cityigcsesocial-science-home-tutor' => ['Cyber City', 'Gurugram', 'IGCSE Social Science, Class 9'],
        'gurugramgolf-course-roadphysics-home-tutor-class-11' => ['Golf Course Road', 'Gurugram', 'CBSE Physics, Class 11'],
        'gurugramsector-10amathematicsib-class-6-home-tutor' => ['Sector 10A', 'Gurugram', 'IB Maths, Class 6'],
        'gurugramdlf-phase-1ibmathematics' => ['DLF Phase 1', 'Gurugram', 'IB Maths, Class 6'],
        'gurugramsector-65igcsemathematics' => ['Sector 65', 'Gurugram', 'IGCSE Maths, Class 9'],
        'kolkata-lake-gardens-economics-cuet-home-tutors' => ['Lake Gardens', 'Kolkata', 'CUET Economics'],
        'best-cuet-coaching-in-golpark-gariahat-kolkata-economics-home' => ['Golpark, Gariahat', 'Kolkata', 'CUET Economics'],
        'best-neet-coaching-hindustan-park-north-kolkata-biology-home-tutor' => ['Hindustan Park', 'Kolkata', 'NEET Biology'],
        'gurugramsector-21physics-igcse-class-9-home-tutor' => ['Sector 21', 'Gurugram', 'IGCSE Physics, Class 9'],
        'kolkatasouthern-avenueeconomics' => ['Southern Avenue', 'Kolkata', 'CUET Economics'],
        'gurugramsector-44igcsescience-home-tutor-class-9' => ['Sector 44', 'Gurugram', 'IGCSE Science, Class 9'],
        'gurugramsector-48maths-home-tutor-igcse' => ['Sector 48', 'Gurugram', 'IGCSE Maths, Class 9'],
        'gurugramsector-36mathematicshome-tutor-ib-class-6' => ['Sector 36', 'Gurugram', 'IB Maths, Class 6'],
        'gurugramsector-55ibphysicshome-tutor' => ['Sector 55', 'Gurugram', 'IB Physics, Class 11'],
        'gurugramsector-36ibcomputer-science' => ['Sector 36', 'Gurugram', 'IB Computer Science, Class 9'],
    ],
];
