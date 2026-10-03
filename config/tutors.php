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

    /*
    | New tutors (owner decision, 3 Oct 2026). While hiring fast, a real tutor
    | who signs up goes live at once, and the Verified badge appears only after
    | the team has checked the ID and pressed Approve (register.id_verified_at).
    | Set TUTORS_PUBLISH_BEFORE_REVIEW=false to go back to "approve first, then
    | live": new tutors then stay pending ('p') until approved.
    |
    | Every new real tutor sends one "New tutor to check" email to
    | review_email (App\Services\TutorIntake), in both modes.
    */
    'publish_before_review' => (bool) env('TUTORS_PUBLISH_BEFORE_REVIEW', true),

    'review_email' => env('TUTOR_REVIEW_EMAIL', 'support@nxtutors.com'),
];
