<?php

/*
|--------------------------------------------------------------------------
| Enquiries desk (Super Admin → Enquiries, /super/enquiries)
|--------------------------------------------------------------------------
| Every family enquiry, whatever form it came through, is normalised into one
| `enquiry_leads` row (App\Services\Enquiries\EnquiryFeed). Contact details stay
| in the source tables and are shown only behind the admin sign-in.
|
| Emails never carry a phone number or email address: the parent's name, the
| request and a link to the admin page only.
*/
return [
    // "New enquiry: {class} {subject} in {city}" for every new enquiry.
    'alerts' => (bool) env('ENQUIRY_ALERTS', true),

    'alert_email' => env('ENQUIRY_ALERT_EMAIL', 'support@nxtutors.com'),

    // The 9:00 IST morning digest (counts, overdue follow-ups, names only).
    'digest' => (bool) env('ENQUIRY_DIGEST', true),

    'digest_time' => env('ENQUIRY_DIGEST_TIME', '09:00'),

    'timezone' => 'Asia/Kolkata',

    // Same phone or email within this many days = "possible duplicate".
    'duplicate_window_days' => 30,

    // "Needs action now": unassigned for longer than this.
    'unassigned_alert_hours' => 2,

    // Rows the list page backfills from the source tables per visit.
    'sync_batch' => 500,
];
