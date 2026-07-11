<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\TutorImportRow;
use App\Jobs\GenerateTutorFromImportRow;

class TutorProcessImports extends Command
{
    protected $signature = 'tutor:process-imports {--limit=1}';
    protected $description = 'Dispatch jobs for pending tutor import rows';

    public function handle()
    {
        $configuredLimit = max(1, (int) config('cost-safety.imports.tutor_batch_size', 2));
        $limit = min(max(1, (int) $this->option('limit')), $configuredLimit);

        $rows = TutorImportRow::where('status', 'pending')
            ->orderBy('id')
            ->limit($limit)
            ->get();

        if ($rows->isEmpty()) {
            $this->info('No pending tutor rows.');
            return 0;
        }

        foreach ($rows as $row) {
            GenerateTutorFromImportRow::dispatch($row->id)
                ->onQueue((string) config('cost-safety.workers.tutor_queue', 'default'));
            $this->info("Dispatched row #{$row->id}");
        }

        return 0;
    }
}
