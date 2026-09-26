<?php

/*
|--------------------------------------------------------------------------
| Subject pages: /maths-home-tutor, /maths-home-tutor/class-10, …
|--------------------------------------------------------------------------
|
| One entry per URL. A page is served only if it is listed here AND its
| guide exists at resources/views/subjects/content/{view}.blade.php, so a
| half-written page can never go live by accident.
|
|   subject  what the tutor search filters on (SubjectNormalizer names)
|   class    class filter for tutor cards, e.g. "Class 10" (optional)
|   city     city filter and local wording (optional; null = all India)
|   parent   the page above this one in the breadcrumb (optional)
|   authors  keys from config/nx_authors.php; the first is the byline
|   title/description/h1/lede  the page's own words
|
| Content and FAQs live in resources/views/subjects/{content,faqs}/{view}.
*/

return [
    'maths-home-tutor' => [
        'view' => 'maths-home-tutor',
        'subject' => 'Mathematics',
        'label' => 'Maths home tutors',
        'title' => 'Maths Home Tutor – Classes 5–12, CBSE, ICSE, IB & IGCSE | NXTutors',
        'description' => 'Verified maths home tutors and online maths tutors for Classes 5–12: CBSE, ICSE, IB, IGCSE and JEE. See matched tutors, fees and a free demo class.',
        'h1' => 'Maths Home Tutors for Classes 5–12',
        'lede' => 'Verified maths tutors at home or online, matched to your child’s class, board and pace — CBSE, ICSE, IB, IGCSE and JEE.',
        'authors' => ['ajay', 'abhinandan'],
    ],
    'maths-home-tutor/class-10' => [
        'view' => 'maths-home-tutor--class-10',
        'subject' => 'Mathematics',
        'class' => 'Class 10',
        'parent' => 'maths-home-tutor',
        'label' => 'Class 10',
        'title' => 'Maths Home Tutor for Class 10 – CBSE & ICSE 2026-27 | NXTutors',
        'description' => 'Class 10 maths home tutors for CBSE and ICSE boards 2026-27: chapter weightage, a month-by-month plan, fees and a free demo class, at home or online.',
        'h1' => 'Maths Home Tutor for Class 10 (CBSE & ICSE)',
        'lede' => 'Board-year maths with a tutor who knows the 2026-27 paper: chapter weightage, step marking and a plan that ends with full papers.',
        'authors' => ['abhinandan', 'ajay'],
    ],
    'maths-home-tutor-gurgaon' => [
        'view' => 'maths-home-tutor-gurgaon',
        'subject' => 'Mathematics',
        'city' => 'Gurugram',
        'city_slug' => 'gurugram',
        'parent' => 'maths-home-tutor',
        'label' => 'Gurugram',
        'title' => 'Maths Home Tutor in Gurgaon – CBSE, ICSE, IB & IGCSE | NXTutors',
        'description' => 'Maths home tutors in Gurgaon (Gurugram) for CBSE, ICSE, IB and IGCSE, Classes 5–12 and JEE. Verified tutors near your sector, with a free demo class.',
        'h1' => 'Maths Home Tutors in Gurgaon (Gurugram)',
        'lede' => 'Verified maths tutors across Gurugram’s sectors and societies — CBSE, ICSE, IB and IGCSE — at home or online, with a free demo class.',
        'authors' => ['ajay', 'abhinandan'],
    ],
    'science-home-tutor' => [
        'view' => 'science-home-tutor',
        'subject' => 'Science',
        'label' => 'Science home tutors',
        'title' => 'Science Home Tutor – Classes 6–10, CBSE & ICSE | NXTutors',
        'description' => 'Verified science home tutors and online science tutors for Classes 6–10, CBSE and ICSE. Concepts, diagrams and numericals, with a free demo class.',
        'h1' => 'Science Home Tutors for Classes 6–10',
        'lede' => 'Physics, chemistry and biology taught the way the board marks them — concepts first, then diagrams, numericals and answers that score.',
        'authors' => ['aaditya'],
    ],
    'science-home-tutor/class-10' => [
        'view' => 'science-home-tutor--class-10',
        'subject' => 'Science',
        'class' => 'Class 10',
        'parent' => 'science-home-tutor',
        'label' => 'Class 10',
        'title' => 'Science Home Tutor for Class 10 – CBSE & ICSE 2026-27 | NXTutors',
        'description' => 'Class 10 science home tutors for CBSE and ICSE 2026-27: chapter weightage, diagrams, numericals and a board plan, at home or online. Free demo class.',
        'h1' => 'Science Home Tutor for Class 10 (CBSE & ICSE)',
        'lede' => 'Chemistry, biology and physics for the board year, with a tutor who drills the diagrams, equations and numericals examiners look for.',
        'authors' => ['aaditya'],
    ],
];
