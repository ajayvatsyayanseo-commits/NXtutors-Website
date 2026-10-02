<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

/**
 * Carries an account erasure over to the WhatsApp side (DPDP Act 2023).
 *
 * The website erases its own rows in AccountLifecycle::purge(). The same person
 * also lives in Lead Intake (their lead, messages, Memory Bank) and in the
 * onboarding agent (signup chat, profile photo, ID card photos). purge() queues
 * a request here; sendPending() delivers it to Lead Intake, which erases its
 * part and forwards to the onboarding agent, and only a 200 from Lead Intake
 * (both done) marks it finished. Until then the scheduled purge job retries
 * every ten minutes. Erasure is idempotent on the other side, so a retry after
 * a lost answer does no harm.
 *
 * Signed with the key the website already shares with Lead Intake
 * (config agent.signing_key = Lead Intake's WEBSITE_AGENT_SIGNING_KEY), in the
 * scheme VerifyAgentSignature uses for calls the other way.
 */
class AgentErasure
{
    public const PATH = '/v1/internal/erasure';

    public const MAX_ATTEMPTS = 500; // ~3.5 days at one try per ten minutes

    /**
     * @param  list<string>  $phones
     * @param  list<string>  $files  stored file names or URLs (only the name is sent)
     */
    public function queue(string $userId, array $phones, array $files): ?string
    {
        if (! Schema::hasTable('agent_erasure_requests')) {
            return null;
        }
        $phones = array_values(array_unique(array_filter(array_map(
            fn ($p) => preg_replace('/\D+/', '', (string) $p), $phones
        ), fn ($p) => strlen($p) >= 8 && strlen($p) <= 15)));
        if ($phones === []) {
            return null; // nobody to find on WhatsApp
        }
        $files = array_values(array_unique(array_filter(array_map(
            fn ($f) => basename((string) parse_url((string) $f, PHP_URL_PATH)), $files
        ), fn ($f) => preg_match('/^[A-Za-z0-9][A-Za-z0-9_.-]{0,200}$/', $f) === 1)));

        $requestId = 'erase:'.$userId.':'.Str::lower(Str::random(12));
        DB::table('agent_erasure_requests')->insert([
            'request_id' => $requestId,
            'user_id' => $userId,
            'phones' => json_encode($phones),
            'files' => json_encode(array_slice($files, 0, 20)),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return $requestId;
    }

    /** Send every unfinished request once. Returns how many were confirmed. */
    public function sendPending(): int
    {
        if (! Schema::hasTable('agent_erasure_requests')) {
            return 0;
        }
        $done = 0;
        DB::table('agent_erasure_requests')
            ->whereNull('done_at')
            ->where('attempts', '<', self::MAX_ATTEMPTS)
            ->orderBy('id')
            ->limit(50)
            ->get()
            ->each(function ($row) use (&$done): void {
                if ($this->send($row)) {
                    $done++;
                }
            });

        return $done;
    }

    private function send(object $row): bool
    {
        $key = (string) config('agent.signing_key', '');
        $base = rtrim((string) config('agent.lead_intake_url', ''), '/');
        if ($key === '' || $base === '') {
            $this->failed($row, 'not_configured');

            return false;
        }

        $body = json_encode([
            'request_id' => $row->request_id,
            'phones' => json_decode((string) $row->phones, true) ?: [],
            'files' => json_decode((string) $row->files, true) ?: [],
        ], JSON_UNESCAPED_SLASHES);
        $ts = (string) time();
        $canonical = implode("\n", ['POST', self::PATH, $ts, hash('sha256', $body)]);

        try {
            $response = Http::timeout(30)
                ->withHeaders([
                    'X-Nxt-Agent' => 'website',
                    'X-Nxt-Timestamp' => $ts,
                    'X-Nxt-Signature' => 'v1='.hash_hmac('sha256', $canonical, $key),
                ])
                ->withBody($body, 'application/json')
                ->post($base.self::PATH);
        } catch (\Throwable $e) {
            $this->failed($row, class_basename($e));

            return false;
        }

        if ($response->status() !== 200) {
            $this->failed($row, 'http_'.$response->status());

            return false;
        }

        // Confirmed: the number and file names are no longer needed here either.
        DB::table('agent_erasure_requests')->where('id', $row->id)->update([
            'phones' => null,
            'files' => null,
            'attempts' => $row->attempts + 1,
            'last_error' => null,
            'done_at' => now(),
            'updated_at' => now(),
        ]);
        Log::info('Agent erasure confirmed', ['request_id' => $row->request_id]);

        return true;
    }

    private function failed(object $row, string $error): void
    {
        DB::table('agent_erasure_requests')->where('id', $row->id)->update([
            'attempts' => $row->attempts + 1,
            'last_error' => Str::limit($error, 250, ''),
            'updated_at' => now(),
        ]);
        Log::warning('Agent erasure not confirmed yet', ['request_id' => $row->request_id, 'error' => $error]);
    }
}
