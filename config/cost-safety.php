<?php

return [
    'workers' => [
        'pagegen_timeout' => (int) env('PAGEGEN_WORKER_TIMEOUT', 240),
        'tutor_timeout' => (int) env('TUTOR_WORKER_TIMEOUT', 600),
        'tutor_queue' => env('TUTOR_QUEUE', 'default'),
        'max_jobs' => (int) env('QUEUE_WORKER_MAX_JOBS', 100),
    ],

    'imports' => [
        'max_rows' => (int) env('PAGEGEN_IMPORT_MAX_ROWS', 500),
        'batch_size' => (int) env('PAGEGEN_IMPORT_BATCH_SIZE', 25),
        'max_file_kb' => (int) env('PAGEGEN_IMPORT_MAX_FILE_KB', 10240),
        'tutor_max_rows' => (int) env('TUTOR_IMPORT_MAX_ROWS', 250),
        'tutor_batch_size' => (int) env('TUTOR_IMPORT_BATCH_SIZE', 2),
    ],

    'processing' => [
        'stale_after_minutes' => (int) env('PROCESSING_STALE_AFTER_MINUTES', 30),
    ],

    'rate_limits' => [
        'public_form' => (int) env('RATE_LIMIT_PUBLIC_FORM', 10),
        'public_api' => (int) env('RATE_LIMIT_PUBLIC_API', 30),
        'payment' => (int) env('RATE_LIMIT_PAYMENT', 10),
        'webhook' => (int) env('RATE_LIMIT_WEBHOOK', 120),
        'admin_generation' => (int) env('RATE_LIMIT_ADMIN_GENERATION', 5),
        'admin_import' => (int) env('RATE_LIMIT_ADMIN_IMPORT', 3),
    ],

    'storage' => [
        'log_retention_days' => (int) env('LOG_DAILY_DAYS', 14),
        'temporary_retention_days' => (int) env('TEMP_FILE_RETENTION_DAYS', 7),
    ],
];
