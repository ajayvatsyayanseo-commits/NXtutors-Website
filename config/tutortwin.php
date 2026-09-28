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
];
