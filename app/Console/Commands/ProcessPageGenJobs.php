<?php

namespace App\Console\Commands;

use App\Models\PageGenerationJob;
use App\Services\PageGen\CreateGeneratedPage;
use App\Services\Queue\AtomicImportClaim;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Throwable;

class ProcessPageGenJobs extends Command
{
    protected $signature = 'pagegen:process {--limit=5}';

    protected $description = 'Process a bounded number of legacy page generation records';

    public function handle(CreateGeneratedPage $creator, AtomicImportClaim $claimer): int
    {
        $limit = min(
            max(1, (int) $this->option('limit')),
            max(1, (int) config('cost-safety.imports.batch_size', 25))
        );

        $jobs = PageGenerationJob::whereIn('status', ['pending', 'failed'])
            ->orderBy('id')
            ->limit($limit)
            ->get();

        if ($jobs->isEmpty()) {
            $this->info('No pending jobs.');

            return self::SUCCESS;
        }

        foreach ($jobs as $job) {
            if (! $claimer->claim(PageGenerationJob::class, $job->id)) {
                continue;
            }

            try {
                $creator->create((array) $job->payload);

                PageGenerationJob::query()
                    ->whereKey($job->id)
                    ->where('status', 'processing')
                    ->update([
                        'status' => 'done',
                        'error' => null,
                        'processed_at' => now(),
                        'updated_at' => now(),
                    ]);
                $this->info("Done job #{$job->id}");
            } catch (Throwable $exception) {
                $message = (string) str($exception->getMessage())->squish()->limit(500);
                Log::warning('Legacy page generation job failed.', [
                    'job_id' => $job->id,
                    'exception' => $exception::class,
                    'message' => $message,
                ]);

                PageGenerationJob::query()->whereKey($job->id)->update([
                    'status' => 'failed',
                    'error' => $message,
                    'processed_at' => now(),
                    'updated_at' => now(),
                ]);
                $this->error("Failed job #{$job->id}");
            }
        }

        return self::SUCCESS;
    }
}
