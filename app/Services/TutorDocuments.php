<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/**
 * A tutor's ID photo, for the admin's review screen.
 *
 * Uploaded on the website: the file is in public/storage/user or uploads.
 * Sent on WhatsApp ("whatsapp_doc_*"): the file is only on the onboarding
 * agent, never on a public URL, and comes through Lead Intake's signed
 * /v1/internal/website/document (the same key and scheme as AgentErasure).
 */
class TutorDocuments
{
    public const PATH = '/v1/internal/website/document';

    /** @return array{0: string, 1: string}|null [bytes, content type] */
    public function fetch(?string $stored): ?array
    {
        $name = basename((string) parse_url(trim((string) $stored), PHP_URL_PATH));
        if ($name === '' || preg_match('/^[A-Za-z0-9][A-Za-z0-9_.-]{0,200}$/', $name) !== 1) {
            return null;
        }

        foreach (['storage/user', 'uploads'] as $dir) {
            $path = public_path($dir.'/'.$name);
            if (is_file($path)) {
                return [(string) file_get_contents($path), (string) (mime_content_type($path) ?: 'application/octet-stream')];
            }
        }

        if (! str_starts_with($name, 'whatsapp_doc_')) {
            return null;
        }

        $key = (string) config('agent.signing_key', '');
        $base = rtrim((string) config('agent.lead_intake_url', ''), '/');
        if ($key === '' || $base === '') {
            return null;
        }
        $body = json_encode(['name' => $name], JSON_UNESCAPED_SLASHES);
        $ts = (string) time();
        $canonical = implode("\n", ['POST', self::PATH, $ts, hash('sha256', $body)]);

        try {
            $response = Http::timeout(20)
                ->withHeaders([
                    'X-Nxt-Agent' => 'website',
                    'X-Nxt-Timestamp' => $ts,
                    'X-Nxt-Signature' => 'v1='.hash_hmac('sha256', $canonical, $key),
                ])
                ->withBody($body, 'application/json')
                ->post($base.self::PATH);
        } catch (\Throwable $e) {
            Log::warning('Tutor document fetch failed', ['error' => class_basename($e)]);

            return null;
        }

        if ($response->status() !== 200) {
            return null;
        }
        $type = strtok((string) $response->header('Content-Type'), ';') ?: 'application/octet-stream';

        return in_array($type, ['image/jpeg', 'image/png', 'image/webp', 'application/pdf'], true)
            ? [$response->body(), $type]
            : null;
    }
}
