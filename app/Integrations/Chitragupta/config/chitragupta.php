<?php

declare(strict_types=1);

// Chitragupta Memory Gateway — server-side only. Disabled by default.
// The website database remains the operational source of truth; the gateway
// receives accountability events and serves scoped memory to authorized
// server-side callers only (never to browsers).
return [
    'enabled' => env('CHITRAGUPTA_ENABLED', false),
    'base_url' => env('CHITRAGUPTA_BASE_URL', ''),
    'agent_id' => env('CHITRAGUPTA_AGENT_ID', 'web-gateway'),
    'api_key' => env('CHITRAGUPTA_API_KEY', ''),
    'timeout_seconds' => env('CHITRAGUPTA_TIMEOUT_S', 10),
];
