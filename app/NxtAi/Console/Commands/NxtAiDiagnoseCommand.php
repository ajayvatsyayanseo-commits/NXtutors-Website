<?php

declare(strict_types=1);

namespace App\NxtAi\Console\Commands;

use App\NxtAi\Support\ToolRegistry;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/** Safe health check for the NXT AI module. Never prints secrets. */
class NxtAiDiagnoseCommand extends Command
{
    protected $signature = 'nxt-ai:diagnose {--ping : Make one real OpenAI call and report the HTTP status}';

    protected $description = 'Verify NXT AI configuration and dependencies (no secrets printed).';

    public function handle(ToolRegistry $registry): int
    {
        $rows = [];
        $ok = true;

        $rows[] = ['NXT AI enabled', config('nxt-ai.enabled') ? 'yes' : 'no'];
        $keySet = ((string) config('services.openai.key')) !== '';
        $rows[] = ['OpenAI key present', $keySet ? 'yes' : 'NO — set OPENAI_API_KEY'];
        $ok = $ok && $keySet;
        $rows[] = ['Model', (string) config('nxt-ai.model')];
        $rows[] = ['cURL available', function_exists('curl_init') ? 'yes' : 'no'];

        try {
            DB::connection()->getPdo();
            $rows[] = ['Database', 'connected'];
        } catch (\Throwable $e) {
            $rows[] = ['Database', 'FAILED'];
            $ok = false;
        }

        foreach (['register', 'teacher_review', 'demo_leads', 'nxt_ai_conversations', 'nxt_ai_messages', 'nxt_ai_actions'] as $table) {
            $exists = $this->tableExists($table);
            $rows[] = ['Table '.$table, $exists ? 'ok' : 'MISSING'];
            if (in_array($table, ['nxt_ai_conversations', 'nxt_ai_messages', 'nxt_ai_actions'], true)) {
                $ok = $ok && $exists;
            }
        }

        $rows[] = ['Chat route', Route::has('nxt-ai.chat') ? 'ok' : ($this->hasAsk() ? 'ok (ask.nxt.ai)' : 'MISSING')];
        $rows[] = ['Storage writable', is_writable(storage_path()) ? 'yes' : 'no'];
        $rows[] = ['Tools registered', (string) count($registry->definitions())];
        $rows[] = ['Knowledge docs', (string) count((array) config('nxt-ai.knowledge', []))];

        $this->table(['Check', 'Result'], $rows);

        if ($this->option('ping')) {
            $ok = $this->ping() && $ok;
        } else {
            $this->line('<comment>Add --ping to test the OpenAI call itself.</comment>');
        }

        $this->line($ok ? '<info>NXT AI core looks healthy.</info>' : '<comment>NXT AI has issues above to resolve.</comment>');

        return $ok ? self::SUCCESS : self::FAILURE;
    }

    /**
     * One real call to the Responses API. This is the check that matters: a key
     * can be present and the tables can exist while the model is unavailable to
     * the account, egress is blocked, or the parameters are rejected - all of
     * which surface to the visitor as the same generic "could not complete
     * that" message. Prints the status and the API error code, never the key.
     */
    private function ping(): bool
    {
        $model = (string) config('nxt-ai.model');
        $this->line('Calling OpenAI with model <info>'.$model.'</info> ...');

        $payload = [
            'model' => $model,
            'instructions' => 'Reply with the single word: ok',
            'input' => [['role' => 'user', 'content' => 'ping']],
            'max_output_tokens' => (int) config('nxt-ai.max_output_tokens', 1600),
            'store' => false,
        ];
        if (str_starts_with($model, 'gpt-5') || str_starts_with($model, 'o1') || str_starts_with($model, 'o3')) {
            $payload['reasoning'] = ['effort' => (string) config('nxt-ai.reasoning_effort', 'low')];
        }

        try {
            $res = Http::withToken((string) config('nxt-ai.api_key'))
                ->connectTimeout((int) config('nxt-ai.connect_timeout', 10))
                ->timeout((int) config('nxt-ai.request_timeout', 60))
                ->post('https://api.openai.com/v1/responses', $payload);
        } catch (\Throwable $e) {
            $this->error('CONNECTION FAILED: '.class_basename($e).' - '.$e->getMessage());
            $this->line('The server could not reach api.openai.com. Check egress/firewall and the CA bundle.');

            return false;
        }

        if ($res->successful()) {
            $body = $res->json();
            $status = $body['status'] ?? 'completed';
            $this->info('HTTP 200 - status: '.$status);
            if ($status === 'incomplete') {
                $this->warn('Truncated: '.($body['incomplete_details']['reason'] ?? '?')
                    .'. Raise NXT_AI_MAX_OUTPUT_TOKENS or lower NXT_AI_REASONING_EFFORT.');

                return false;
            }

            return true;
        }

        $err = $res->json('error') ?? [];
        $this->error('HTTP '.$res->status()
            .' - code: '.($err['code'] ?? '?')
            .' | type: '.($err['type'] ?? '?'));
        $this->line('message: '.($err['message'] ?? substr((string) $res->body(), 0, 300)));

        return false;
    }

    private function tableExists(string $table): bool
    {
        try {
            return DB::getSchemaBuilder()->hasTable($table);
        } catch (\Throwable) {
            return false;
        }
    }

    private function hasAsk(): bool
    {
        return Route::has('ask.nxt.ai');
    }
}
