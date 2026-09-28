<?php

/*
|--------------------------------------------------------------------------
| TutorTwin
|--------------------------------------------------------------------------
|
| TutorTwin is the WhatsApp tutoring product. It is a separate application on
| its own subdomain, so every link to it has to be absolute - `url()` would
| point back at this site and quietly 404.
|
| Kept in config rather than written into the Blade template so a staging host
| can be pointed somewhere else without editing markup, and so there is one
| place to change if the subdomain ever moves.
|
*/

return [
    'url' => rtrim(env('TUTORTWIN_URL', 'https://nxtutortwin.nxtutors.com'), '/'),

    // TutorTwin's public plan list. The "from" price on this site is read from
    // here (App\Support\TutorTwin::fromPrice), never typed into a template:
    // the product's own pages and scripts have disagreed (₹999 vs ₹1,199).
    'api' => rtrim(env('TUTORTWIN_API_URL', 'https://api.nxtutors.com'), '/'),

    // The subjects TutorTwin sells. A page hero shows the TutorTwin strip only
    // for these, so a guitar or yoga page never advertises a homework tutor.
    'subjects' => ['Maths', 'Physics', 'Chemistry', 'Biology', 'English', 'Computer Science', 'Social Science', 'Economics'],
];
