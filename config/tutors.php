<?php

/*
|--------------------------------------------------------------------------
| Real tutors vs sample profiles
|--------------------------------------------------------------------------
|
| On 28 Sep 2026 Ajay confirmed four real tutors; every other profile then on
| the site is a model (sample) profile. The migration
| 2026_09_28_120000_add_is_sample_to_register marks those as samples once.
| Anyone who signs up afterwards is real by default (is_sample = 0), so this
| list never needs updating for new tutors.
|
| Samples stay visible (Ajay: "no hidden") but are shown honestly: no
| Verified badge, rating or experience, labelled "Sample profile", after
| real tutors, with "get a verified tutor in 10 minutes", and kept out of
| Google.
*/

return [
    'real_user_ids' => [
        '1997',            // Ajay Vatsyayan (IB, IGCSE, ISC maths)
        'NXT-2026-W7PBUU', // Abhinandan Tiwary (Class 10 CBSE/ICSE maths)
        'NXT-2026-3FULEA', // Aaditya Kashyap (CBSE/ICSE science)
        '1995',            // Parul Kashyap (Delhi)
    ],

    // Shown on sample cards and in the search results bar.
    // demo_leads ids left out of the anonymised request summaries on area
    // pages, for parents who asked (App\Support\AreaDemand, privacy policy).
    'demand_exclude_ids' => [],

    'match_promise' => 'We match you with a verified tutor in 10 minutes',
];
