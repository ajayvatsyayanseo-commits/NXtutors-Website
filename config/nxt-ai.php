<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Master switch
    |--------------------------------------------------------------------------
    | When false the chat endpoint returns a friendly "unavailable" response
    | and never calls OpenAI. Lets you kill the feature from .env with no deploy.
    */
    'enabled' => (bool) env('NXT_AI_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | OpenAI model + limits (model is never hardcoded in code — only here)
    |--------------------------------------------------------------------------
    | Falls back to the app-wide services.openai.model so a single env drives it.
    */
    // Dedicated key so the assistant can be billed/rotated separately;
    // falls back to the app-wide key when unset.
    'api_key' => env('OPENAI_API_KEY_NXT_AI', env('OPENAI_API_KEY')),
    'model' => env('NXT_AI_MODEL', env('OPENAI_MODEL', 'gpt-5-mini')),
    'reasoning_effort' => env('NXT_AI_REASONING_EFFORT', 'low'),
    'max_tool_rounds' => (int) env('NXT_AI_MAX_TOOL_ROUNDS', 4),
    // Must cover hidden reasoning tokens too, or the turn returns empty.
    'max_output_tokens' => (int) env('NXT_AI_MAX_OUTPUT_TOKENS', 1600),
    'connect_timeout' => (int) env('NXT_AI_CONNECT_TIMEOUT', 10),
    'request_timeout' => (int) env('NXT_AI_REQUEST_TIMEOUT', 60),
    // Must exceed max_tool_rounds x request_timeout, or PHP kills the
    // request mid-turn and the browser sees a 500.
    'max_execution_time' => (int) env('NXT_AI_MAX_EXECUTION_TIME', 120),
    'daily_call_limit' => (int) env('NXT_AI_DAILY_LIMIT', 400),

    /*
    |--------------------------------------------------------------------------
    | Tutor search
    |--------------------------------------------------------------------------
    */
    'max_results' => (int) env('NXT_AI_MAX_RESULTS', 6),
    'default_recommendations' => 3,

    /*
    |--------------------------------------------------------------------------
    | Free turns before WhatsApp handoff
    |--------------------------------------------------------------------------
    | The assistant is a lead-intake funnel, not an unlimited chatbot. After
    | this many questions the conversation is handed to a human on WhatsApp.
    | Enforced server-side (before OpenAI is called), so it also caps spend.
    */
    'free_turns' => (int) env('NXT_AI_FREE_TURNS', 4),
    'whatsapp_number' => env('NXT_AI_WHATSAPP_NUMBER'),

    /*
    |--------------------------------------------------------------------------
    | Logging / privacy
    |--------------------------------------------------------------------------
    | log_content=false means we never write raw user/assistant text to logs.
    */
    'log_content' => (bool) env('NXT_AI_LOG_CONTENT', false),

    /*
    |--------------------------------------------------------------------------
    | Conversation memory
    |--------------------------------------------------------------------------
    */
    'history_messages' => (int) env('NXT_AI_HISTORY_MESSAGES', 12),
    'guest_retention_days' => (int) env('NXT_AI_GUEST_RETENTION_DAYS', 14),
    'message_max_chars' => (int) env('NXT_AI_MESSAGE_MAX_CHARS', 1500),

    /*
    |--------------------------------------------------------------------------
    | Rate limits (per minute unless noted). Layered: burst + daily caps.
    |--------------------------------------------------------------------------
    */
    'rate' => [
        'per_minute' => (int) env('NXT_AI_RATE_PER_MINUTE', 12),
        'guest_per_day' => (int) env('NXT_AI_RATE_GUEST_PER_DAY', 60),
        'user_per_day' => (int) env('NXT_AI_RATE_USER_PER_DAY', 300),
    ],

    /*
    |--------------------------------------------------------------------------
    | Demo booking confirmation token time-to-live (seconds)
    |--------------------------------------------------------------------------
    */
    'confirmation_ttl' => (int) env('NXT_AI_CONFIRMATION_TTL', 900),

    /*
    |--------------------------------------------------------------------------
    | Canonical website knowledge base (v1: config-driven; no scraping).
    |--------------------------------------------------------------------------
    | search_site_content / get_pricing_info / get_demo_class_info read this.
    | Upgrade path: replace this array with a nxt_ai_documents full-text table
    | + `php artisan nxt-ai:sync-content` without changing the tool contracts.
    | Keep entries factual and in sync with the real site. `tags` drives search.
    */
    'knowledge' => [
        [
            'key' => 'fees',
            'title' => 'Tutor Fees Overview',
            'type' => 'Fees',
            'tags' => ['fee', 'fees', 'price', 'pricing', 'cost', 'charges', 'budget', 'rupees', 'paisa', 'kitna', 'kitne'],
            'snippet' => 'Tutor fees usually range between ₹800 and ₹2,500 depending on the class, subject, board and whether it is online or home tuition. Each tutor lists their own budget on their profile.',
            'url' => '/tutors',
        ],
        [
            'key' => 'fee_payment',
            'title' => 'Fee Payment Policy',
            'type' => 'Policy',
            'tags' => ['payment', 'pay', 'upi', 'card', 'net banking', 'advance', 'refund'],
            'snippet' => 'Fees are agreed directly with the tutor. NXTutors helps you discover and shortlist tutors; final payment terms are confirmed with the tutor before classes begin.',
            'url' => '/tutors',
        ],
        [
            'key' => 'demo',
            'title' => 'How to Book a Demo Class',
            'type' => 'FAQ',
            'tags' => ['demo', 'trial', 'free class', 'book demo', 'demo class', 'kaise', 'how'],
            'snippet' => 'Yes — you can book a demo class with a tutor before finalizing. Share your name, contact number, subject, class and a preferred time, and the tutor arranges a short demo so you can decide.',
            'url' => '/tutors',
        ],
        [
            'key' => 'timings',
            'title' => 'Timings & Availability',
            'type' => 'Info',
            'tags' => ['timing', 'time', 'availability', 'evening', 'weekend', 'schedule', 'slot'],
            'snippet' => 'Most tutors are available in the evenings and on weekends. Exact timings depend on the individual tutor and are confirmed during the demo class.',
            'url' => '/tutors',
        ],
        [
            'key' => 'modes',
            'title' => 'Online & Home Tuition',
            'type' => 'Info',
            'tags' => ['online', 'home', 'offline', 'at home', 'mode', 'remote', 'virtual'],
            'snippet' => 'NXTutors offers both online and home (in-person) tutors. You can filter by your preferred teaching mode when searching for a tutor.',
            'url' => '/tutors',
        ],
        [
            'key' => 'how_to_choose',
            'title' => 'How to Choose the Right Tutor',
            'type' => 'Guide',
            'tags' => ['best tutor', 'choose', 'select', 'which tutor', 'good tutor', 'recommend'],
            'snippet' => 'The best tutor depends on subject fit, board, class level, location, teaching mode, experience and parent reviews. NXT AI ranks strong matches for you; a demo class helps you make the final call.',
            'url' => '/tutors',
        ],
        [
            'key' => 'subjects',
            'title' => 'Subjects & Classes Covered',
            'type' => 'Info',
            'tags' => ['subject', 'subjects', 'class', 'board', 'cbse', 'icse', 'academic', 'which subjects'],
            'snippet' => 'NXTutors covers academic subjects for school classes (typically Class 1 to 12) across boards such as CBSE and others, including Maths, Science, Physics, Chemistry, Biology, English, Hindi and more.',
            'url' => '/tutors',
        ],
        [
            'key' => 'about',
            'title' => 'About NXTutors',
            'type' => 'Info',
            'tags' => ['about', 'nxtutors', 'what is', 'who are', 'company', 'platform'],
            'snippet' => 'NXTutors is a tutor discovery platform that helps parents find and compare verified home and online tutors by subject, class, board, location and budget.',
            'url' => '/',
        ],
    ],

    /*
    | Canonical fee explanation used by get_pricing_info (kept separate so it can
    | later be sourced from a plans/settings table without touching the tool).
    */
    'pricing' => [
        'summary' => 'Tutor fees on NXTutors usually range between ₹800 and ₹2,500, depending on the class, subject, board and teaching mode. Each tutor sets and displays their own budget on their profile.',
        'range_min' => 800,
        'range_max' => 2500,
        'currency' => '₹',
        'note' => 'The exact fee is what the tutor lists on their profile and confirms with you before classes begin. NXTutors does not add a separate platform fee to the tutor amount shown.',
    ],
];
