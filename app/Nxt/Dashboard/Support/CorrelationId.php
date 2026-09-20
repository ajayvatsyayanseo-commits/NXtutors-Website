<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Support;

use Illuminate\Support\Str;

/**
 * The thread somebody can pull six weeks later.
 *
 * "Why was this family charged" has to be answerable for the automatic path
 * too, which is how most classes settle: a scheduler run is still a caller.
 * Reading the id straight off an inbound request header recorded a null for
 * every transition the scheduler made, which was the majority of them.
 *
 * Inside an HTTP request the caller's `X-Correlation-Id` wins, so a trace that
 * started in the browser stays one trace. Outside one — a queue worker, a cron
 * run, a tinker session — the process mints an id once and every event it
 * writes carries it, so one run is one thread.
 */
final class CorrelationId
{
    private static ?string $current = null;

    public static function current(): string
    {
        $header = self::fromRequest();

        if ($header !== null) {
            return $header;
        }

        return self::$current ??= 'run_'.Str::ulid();
    }

    /** Start a new thread — one scheduled command run, one queued job. */
    public static function start(string $prefix = 'run'): string
    {
        return self::$current = $prefix.'_'.Str::ulid();
    }

    /** Adopt a thread that began somewhere else, so a consumer keeps the caller's id. */
    public static function set(?string $correlationId): void
    {
        self::$current = $correlationId;
    }

    public static function flush(): void
    {
        self::$current = null;
    }

    private static function fromRequest(): ?string
    {
        if (! app()->bound('request')) {
            return null;
        }

        $header = request()?->header('X-Correlation-Id');

        return filled($header) ? (string) $header : null;
    }
}
