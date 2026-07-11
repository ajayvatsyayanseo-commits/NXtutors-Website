<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Throwable;

class RecoverStaleProcessing extends Command
{
    protected $signature = 'app:recover-stale-processing {--apply : Reset only records older than the configured stale threshold}';

    protected $description = 'Audit stale processing records; no changes are made without --apply';

    public function handle(): int
    {
        $minutes = max(10, (int) config('cost-safety.processing.stale_after_minutes', 30));
        $cutoff = now()->subMinutes($minutes);
        $apply = (bool) $this->option('apply');

        $this->info('Stale processing audit '.($apply ? '(APPLY)' : '(READ-ONLY)')."; cutoff {$cutoff->toDateTimeString()}");

        try {
            foreach (['pagegen_import_rows', 'tutor_import_rows', 'page_generation_jobs'] as $table) {
                if (! Schema::hasTable($table)) {
                    $this->line("{$table}: table not present");
                    continue;
                }

                $query = DB::table($table)
                    ->where('status', 'processing')
                    ->where('updated_at', '<', $cutoff);
                $count = (clone $query)->count();

                if ($apply && $count > 0) {
                    $query->update([
                        'status' => 'failed',
                        'error' => 'Recovered after stale processing timeout; safe to retry.',
                        'updated_at' => now(),
                    ]);
                }

                $this->line("{$table}: {$count} stale record(s)".($apply ? ' marked failed' : ''));
            }
        } catch (Throwable $exception) {
            $this->error('Stale audit failed: '.$exception::class);

            return self::FAILURE;
        }

        if (! $apply) {
            $this->info('No records were changed. Use --apply only after confirming no active worker owns the listed records.');
        }

        return self::SUCCESS;
    }
}
