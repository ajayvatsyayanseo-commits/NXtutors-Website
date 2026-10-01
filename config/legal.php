<?php

/*
|--------------------------------------------------------------------------
| Legal facts printed on the policy pages (/terms-conditions, /privacy-policy,
| /refund-policy, /tutor-terms, /cookie-policy, /safeguarding-policy,
| /disclaimer, /grievance-redressal, /community-guidelines).
|--------------------------------------------------------------------------
|
| Every value here is printed as a fact, so each one must be true. Values
| marked UNCONFIRMED are the best the code and the live site could show on
| 1 Oct 2026 and must be confirmed by the owner (set them in .env). A null
| value is not printed at all: the pages fall back to a neutral wording
| rather than show an invented name or number.
|
| Source of each default:
| - entity_name / address: the address line in the site settings, printed in
|   the live footer ("BLK-2/49, NXTUTORS EDTECH PVT LTD, M3M Cosmopolitan …").
| - email / phone: the site settings (support@nxtutors.com, +91 78360 34313).
| - payment_gateway: app/Http/Controllers/PricingController.php (Cashfree).
*/

return [

    // MCA record (ZaubaCorp, as on 13 Jul 2026): incorporated 19 Dec 2025, RoC Delhi.
    'entity_name' => env('LEGAL_ENTITY', 'NXTUTORS EDTECH PRIVATE LIMITED'),

    // Brand the public knows.
    'brand' => 'NXTutors',

    // Registered office per the MCA record (COS/R/1L/BLK2/49, M3M Sec 66, Cosmopolitan, off Golf Extn Rd, Badshahpur, Gurgaon).
    'address' => env('LEGAL_ADDRESS', 'COS/R/1L/BLK-2/49, M3M Cosmopolitan, Sector 66, off Golf Course Extension Road, Badshahpur, Gurugram, Haryana 122101, India'),

    // CIN from the MCA record. GSTIN not found in public records yet: not printed while null.
    'cin' => env('LEGAL_CIN', 'U85499HR2025PTC139508'),
    // GST REG-06 certificate, issued 27 Dec 2025.
    'gstin' => env('LEGAL_GSTIN', '06AALCN1246M1Z7'),

    'email' => env('LEGAL_EMAIL', 'support@nxtutors.com'),
    'phone' => env('LEGAL_PHONE', '+91 78360 34313'),

    // UNCONFIRMED: name of the Grievance Officer (Consumer Protection (E-Commerce)
    // Rules 2020 r.4(4)/(5) and IT Rules 2021 r.3(2) need a named person). Until a
    // name is set, the pages say "Grievance Officer, NXTutors".
    // Named by the owner on 1 Oct 2026.
    'grievance_officer' => env('LEGAL_GRIEVANCE_OFFICER', 'Ajay Tiwary'),
    'grievance_designation' => env('LEGAL_GRIEVANCE_DESIGNATION', 'Director and Grievance Officer'),
    // Dedicated mailbox, set up by the owner on 1 Oct 2026.
    'grievance_email' => env('LEGAL_GRIEVANCE_EMAIL', 'grievance@nxtutors.com'),

    // Person who answers questions about personal data (DPDP Rules 2025 r.9).
    // UNCONFIRMED: falls back to the Grievance Officer.
    'privacy_contact' => env('LEGAL_PRIVACY_CONTACT'),
    'privacy_email' => env('LEGAL_PRIVACY_EMAIL', 'grievance@nxtutors.com'),

    // Courts with exclusive jurisdiction.
    'jurisdiction' => 'Gurugram, Haryana',

    // Payment gateway used for plan payments (PricingController, Cashfree PG).
    'payment_gateway' => env('LEGAL_PAYMENT_GATEWAY', 'Cashfree Payments'),

    // Dates printed on every policy page.
    'effective_date' => '1 October 2026',
    'last_updated' => '1 October 2026',

    // Grievance timelines we commit to (the shortest that applies by law, see
    // /grievance-redressal): acknowledge 24 h; IT-Rules complaints 7 days;
    // consumer complaints one month; data-rights requests 30 days (law: up to
    // 90 days under DPDP Rules 2025 r.14 once in force).
    'ack_hours' => 24,
];
