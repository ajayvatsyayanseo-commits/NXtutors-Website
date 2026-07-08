<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\PageGenerationJob;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Services\OpenAiPageGenerator; 

class ProcessPageGenJobs extends Command
{
    protected $signature = 'pagegen:process {--limit=5}';
    protected $description = 'Process pending page generation jobs from Excel queue';

    public function handle(OpenAiPageGenerator $gen)
    {
        $limit = (int)$this->option('limit');

        $jobs = PageGenerationJob::where('status','pending')
            ->orderBy('id','asc')
            ->limit($limit)
            ->get();

        if ($jobs->isEmpty()) {
            $this->info("No pending jobs.");
            return 0;
        }

        foreach ($jobs as $job) {
            try {
                $job->update(['status'=>'processing', 'attempts'=>$job->attempts + 1]);

                DB::transaction(function() use ($job, $gen) {
                    $payload = $job->payload;

                    // ✅ CALL YOUR EXISTING GENERATOR LOGIC
                    // Example: $gen->generate($payload) + DB insert your page record
                    // Replace below with your actual service call:
                    $gen->generateAndStore($payload);

                    $job->update([
                        'status' => 'done',
                        'error' => null,
                        'processed_at' => now(),
                    ]);
                });

                $this->info("Done job #{$job->id}");

            } catch (\Throwable $e) {
                Log::error("PageGen job failed", [
                    'job_id' => $job->id,
                    'msg' => $e->getMessage()
                ]);

                $job->update([
                    'status' => 'failed',
                    'error' => $e->getMessage(),
                    'processed_at' => now(),
                ]);

                $this->error("Failed job #{$job->id}: ".$e->getMessage());
            }
        }

        return 0;
    }
}