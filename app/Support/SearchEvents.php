<?php

namespace App\Support;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

/** Writes search_events rows; a logging failure never breaks a search. */
class SearchEvents
{
    public static function record(string $kind, array $data): void
    {
        try {
            DB::table('search_events')->insert([
                'sid' => self::clip($data['sid'] ?? null, 40, '/[^A-Za-z0-9_-]/'),
                'kind' => $kind,
                'q' => self::clip($data['q'] ?? null, 160),
                'pick' => self::clip($data['pick'] ?? null, 160),
                'subject' => self::clip($data['subject'] ?? null, 60),
                'city' => self::clip($data['city'] ?? null, 60),
                'area' => self::clip($data['area'] ?? null, 100),
                'mode' => self::clip($data['mode'] ?? null, 10),
                'results' => isset($data['results']) ? min(65535, max(0, (int) $data['results'])) : null,
                'created_at' => now(),
            ]);
        } catch (Throwable $e) {
            Log::debug('search_events write skipped', ['error' => $e->getMessage()]);
        }
    }

    private static function clip($v, int $len, ?string $strip = null): ?string
    {
        $v = trim((string) $v);
        if ($strip) {
            $v = preg_replace($strip, '', $v);
        }

        return $v === '' ? null : mb_substr(strip_tags($v), 0, $len);
    }
}
