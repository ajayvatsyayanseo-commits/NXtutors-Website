<?php

declare(strict_types=1);

/**
 * Dashboard configuration.
 *
 * The policy windows here are the ones the brief calls settings rather than
 * constants — ops is expected to tune them without a deploy — so they live in
 * config and are read, never hardcoded at the call site.
 */
return [

    /*
    |---------------------------------------------------------------------------
    | Where the Next.js dashboard is served from
    |---------------------------------------------------------------------------
    |
    | Same host by default: nginx sends /user/* and /teacher/* to the Next.js
    | process and everything else to PHP, so the URLs the site has always used
    | keep working and the session cookie is sent to both. Set NXT_DASHBOARD_URL
    | only when the dashboard is moved to its own origin, which is the one case
    | that needs the bearer-token hand-off.
    |
    */
    'url' => env('NXT_DASHBOARD_URL'),

    'student_path' => '/user/dashboard',
    'tutor_path' => '/teacher/dashboard',

    /*
    |---------------------------------------------------------------------------
    | Policy windows
    |---------------------------------------------------------------------------
    */
    'auto_confirm_hours' => (int) env('NXT_AUTO_CONFIRM_HOURS', 24),
    // A class checked in manually — no parent code, no verified location — is
    // only the tutor's word, so silence never confirms it. If the family has
    // neither confirmed nor disputed it this long after check-out, it goes to
    // ops as a dispute instead of paying out.
    'manual_review_after_hours' => (int) env('NXT_MANUAL_REVIEW_AFTER_HOURS', 48),
    'free_cancellation_hours' => (int) env('NXT_FREE_CANCELLATION_HOURS', 12),
    'lead_expiry_hours' => (int) env('NXT_LEAD_EXPIRY_HOURS', 24),
    'geofence_radius_m' => (int) env('NXT_GEOFENCE_RADIUS_M', 150),
    'check_in_opens_minutes_before' => 15,
    'no_show_after_minutes' => 20,

    // How long after its start time a class nobody ever closed is swept: the
    // fee goes back to the family rather than staying held forever.
    'abandon_after_hours' => (int) env('NXT_ABANDON_AFTER_HOURS', 48),

    // Brief 9.1: the free AI allowance is ninety a month, capped per day so it
    // cannot be burned in one afternoon.
    'free_ai_messages_per_day' => (int) env('NXT_FREE_AI_MESSAGES_PER_DAY', 3),

    /*
    |---------------------------------------------------------------------------
    | Outbox relay
    |---------------------------------------------------------------------------
    |
    | Where nxt-dashboard:relay-outbox publishes to. `log` records the event and
    | marks it delivered, which is what a same-process deployment needs; point
    | it at `gateway` once the event bus is in front of it.
    |
    */
    'outbox' => [
        'transport' => env('NXT_OUTBOX_TRANSPORT', 'log'),
        'batch' => (int) env('NXT_OUTBOX_BATCH', 200),
        'max_attempts' => (int) env('NXT_OUTBOX_MAX_ATTEMPTS', 5),
    ],

    /*
    |---------------------------------------------------------------------------
    | Commission by tutor plan
    |---------------------------------------------------------------------------
    |
    | Matched to the plan names in `subscription_plans`. A tutor on no plan pays
    | the free-tier rate.
    |
    */
    'commission_pct' => [
        'default' => 18,
        'Tutor Pro' => 15,
        'Tutor Premium' => 12,
        'Tutor Featured' => 10,
    ],

    /*
    |---------------------------------------------------------------------------
    | Verifiable parental consent (DPDP Act 2023)
    |---------------------------------------------------------------------------
    |
    | PLACEHOLDER WORDING — NOT LEGALLY REVIEWED.
    |
    | What a parent is told before they consent is a legal question, not an
    | engineering one, so the text lives here rather than in the service: it can
    | be replaced by whoever signs it off without a code change, and the version
    | recorded against each consent says which text that parent actually saw.
    |
    | Bump `consent_version` whenever the notice changes in a way that alters
    | what was agreed to. Consents already recorded keep their own version, so
    | a later question about what someone agreed to has an answer.
    |
    */
    'consent_version' => env('NXT_CONSENT_VERSION', 'v1-draft'),

    'consent_notice' => env(
        'NXT_CONSENT_NOTICE',
        'Enter this code to confirm you are the parent or guardian of this student '
        .'and agree to NXTutors recording their attendance, topics covered and '
        .'progress. You can withdraw this at any time from your account.'
    ),

];
