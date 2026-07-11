<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'openai' => [
        'key' => env('OPENAI_API_KEY'),
        'model' => env('OPENAI_MODEL', 'gpt-5-mini'),
        'text_model' => env('OPENAI_MODEL', 'gpt-5-mini'),
        'image_model' => env('OPENAI_IMAGE_MODEL', 'gpt-image-1.5'),
        'connect_timeout' => (int) env('OPENAI_CONNECT_TIMEOUT', 10),
        'timeout' => (int) env('OPENAI_REQUEST_TIMEOUT', 90),
        'retry_times' => (int) env('OPENAI_RETRY_TIMES', 1),
        'page_daily_limit' => (int) env('OPENAI_PAGE_DAILY_LIMIT', 100),
        'tutor_daily_limit' => (int) env('OPENAI_TUTOR_DAILY_LIMIT', 25),
    ],

    'cashfree' => [
        'environment' => env('CASHFREE_ENV', 'sandbox'),
        'app_id' => env('CASHFREE_APP_ID'),
        'secret_key' => env('CASHFREE_SECRET_KEY'),
        'api_version' => env('CASHFREE_API_VERSION', '2025-01-01'),
    ],

    'pincode' => [
        'base_url' => env('PINCODE_API_BASE_URL', 'https://api.postalpincode.in/pincode'),
        'rapidapi_key' => env('RAPIDAPI_PINCODE_KEY'),
        'rapidapi_host' => env('RAPIDAPI_PINCODE_HOST'),
        'connect_timeout' => (int) env('PINCODE_CONNECT_TIMEOUT', 5),
        'timeout' => (int) env('PINCODE_REQUEST_TIMEOUT', 10),
        'cache_seconds' => (int) env('PINCODE_CACHE_SECONDS', 86400),
    ],

    'provider_circuit' => [
        'failure_threshold' => (int) env('PROVIDER_CIRCUIT_FAILURE_THRESHOLD', 5),
        'open_seconds' => (int) env('PROVIDER_CIRCUIT_OPEN_SECONDS', 120),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],
  
    'nxtutors' => [
        'ai_function_url' => env('NXT_AI_FUNCTION_URL'),
        'facebook' => env('NXT_FACEBOOK'),
        'instagram' => env('NXT_INSTAGRAM'),
        'linkedin' => env('NXT_LINKEDIN'),
        'google_business' => env('NXT_GOOGLE_BUSINESS'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

];
