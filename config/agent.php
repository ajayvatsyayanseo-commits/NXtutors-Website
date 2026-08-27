<?php

declare(strict_types=1);

/**
 * Configuration for the read-only tutor feed consumed by the NXTutors Tutor
 * Intelligence Agent.
 *
 * The agent runs on AWS Lambda and has no network route to this database, so
 * it consumes tutor data over a signed HTTPS feed instead. Nothing here grants
 * write access: the feed is GET-only and reads the same public projection the
 * site's own tutor cards use (App\NxtAi\Support\PublicTutorFieldMapper).
 */
return [
    /*
     * Shared HMAC secret. Must equal TMM_WEBSITE_API_SIGNING_KEY on the agent.
     * Leave unset to disable the feed entirely — the middleware refuses every
     * request when no secret is configured, so a missing key fails closed.
     */
    'signing_key' => env('AGENT_FEED_SIGNING_KEY'),


    /*
     * Shared phone pepper. Must equal TMM_HASH_PEPPER and DCC_HASH_PEPPER in
     * the agents' .env — it is the same secret in all three places.
     *
     * The agents address a person as `ph_<hmac>` and never send a number, so a
     * different pepper here does not raise: every lookup simply misses, the
     * agent finds no contact, and — because an unknown contact fails closed as
     * opted-out — every message to that person is silently suppressed.
     */
    'hash_pepper' => env('AGENT_HASH_PEPPER'),

    /*
     * Prefixed onto a 10-digit number when handing the agent something it can
     * actually deliver to.
     */
    'default_country_code' => env('AGENT_DEFAULT_COUNTRY_CODE', '91'),

    /*
     * Gateway requests per minute. Separate from the feed: the feed is one
     * scheduled sweep, the gateway is per-conversation and much chattier.
     */
    'gateway_rate_limit_per_minute' => (int) env('AGENT_GATEWAY_RATE_LIMIT', 300),

    /*
     * Replay window in seconds. A captured request is only usable inside this
     * window; outside it the signature is rejected even though it verifies.
     */
    'timestamp_tolerance' => (int) env('AGENT_FEED_TIMESTAMP_TOLERANCE', 300),

    /*
     * Page size ceiling. The agent asks for a limit; anything above this is
     * clamped rather than refused, so a misconfigured agent degrades to slower
     * paging instead of erroring.
     */
    'max_page_size' => (int) env('AGENT_FEED_MAX_PAGE_SIZE', 200),

    /*
     * Requests per minute per agent identity. The sync is a scheduled job
     * paging a small table, so this is generous without being unbounded.
     */
    'rate_limit_per_minute' => (int) env('AGENT_FEED_RATE_LIMIT', 60),

    /*
     * Optional allowlist of agent identifiers (the X-Nxt-Agent header). Empty
     * means any correctly-signed caller is accepted.
     */
    'allowed_agents' => array_values(array_filter(
        explode(',', (string) env('AGENT_FEED_ALLOWED_AGENTS', 'tutor_match_meta_agent'))
    )),
];
