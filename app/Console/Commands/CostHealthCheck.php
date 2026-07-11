<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Throwable;

class CostHealthCheck extends Command
{
    protected $signature = 'app:cost-health-check';

    protected $description = 'Read-only queue, storage-driver, and cost-safety health report';

    public function handle(): int
    {
        $this->info('NXTutors cost health check (READ-ONLY)');

        $connection = (string) config('queue.default');
        $retryAfter = config("queue.connections.{$connection}.retry_after", 'n/a');
        $pageTimeout = (int) config('cost-safety.workers.pagegen_timeout', 240);
        $tutorTimeout = (int) config('cost-safety.workers.tutor_timeout', 600);

        $this->table(['Setting', 'Value'], [
            ['Queue connection', $connection],
            ['Cache store', (string) config('cache.default')],
            ['Session driver', (string) config('session.driver')],
            ['Queue retry_after', (string) $retryAfter],
            ['Page worker timeout', (string) $pageTimeout],
            ['Tutor worker timeout', (string) $tutorTimeout],
            ['OpenAI connect/request timeout', config('services.openai.connect_timeout', 10).'/'.config('services.openai.timeout', 90)],
            ['Pincode connect/request timeout', config('services.pincode.connect_timeout', 5).'/'.config('services.pincode.timeout', 10)],
        ]);

        if (is_numeric($retryAfter) && (int) $retryAfter <= max($pageTimeout, $tutorTimeout)) {
            $this->error('UNSAFE: queue retry_after must be greater than every worker timeout.');

            return self::FAILURE;
        }

        try {
            $rows = [];
            foreach (['jobs', 'failed_jobs'] as $table) {
                $rows[] = [$table, Schema::hasTable($table) ? DB::table($table)->count() : 'table not present'];
            }

            foreach (['pagegen_import_rows', 'tutor_import_rows', 'page_generation_jobs'] as $table) {
                if (! Schema::hasTable($table)) {
                    $rows[] = [$table.' processing', 'table not present'];
                    continue;
                }

                $rows[] = [$table.' pending', DB::table($table)->where('status', 'pending')->count()];
                $rows[] = [$table.' processing', DB::table($table)->where('status', 'processing')->count()];
                $rows[] = [$table.' failed', DB::table($table)->where('status', 'failed')->count()];
            }

            $this->table(['Queue/state', 'Count'], $rows);
        } catch (Throwable $exception) {
            $this->warn('Database counters unavailable: '.$exception::class);
        }

        $this->info('No configuration values, credentials, or database records were changed.');

        return self::SUCCESS;
    }
}
