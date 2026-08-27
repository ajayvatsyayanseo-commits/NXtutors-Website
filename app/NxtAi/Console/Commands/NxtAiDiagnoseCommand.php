<?php

declare(strict_types=1);

namespace App\NxtAi\Console\Commands;

use App\NxtAi\Support\ToolRegistry;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/** Safe health check for the NXT AI module. Never prints secrets. */
class NxtAiDiagnoseCommand extends Command
{
    protected $signature = 'nxt-ai:diagnose';

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
        $this->line($ok ? '<info>NXT AI core looks healthy.</info>' : '<comment>NXT AI has issues above to resolve.</comment>');

        return $ok ? self::SUCCESS : self::FAILURE;
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
