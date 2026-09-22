<?php

return [

    /*
    | Email verification for tutor reviews.
    |
    | Off until the site can actually send mail: MAIL_MAILER is "log" in
    | production today, so a verification link would never arrive and every
    | review would sit unverified forever. With it off, a review goes straight
    | to the admin queue, marked "email not verified". Turn it on once SMTP
    | works; nothing else changes.
    */
    'verify_email' => (bool) env('REVIEWS_VERIFY_EMAIL', false),

    // How long a verification link stays valid.
    'verify_link_hours' => (int) env('REVIEWS_VERIFY_LINK_HOURS', 48),

    // Reviewer photos, under public/. Served as asset("storage/reviews/…").
    'photo_dir' => 'storage/reviews',
    'photo_max_kb' => 3072,

];
