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
        $limit = (int)$this->option('limit') ?: 1;

        $rows = TutorImportRow::where('status', 'pending')
            ->orderBy('id')
            ->limit($limit)
            ->get();

        if ($rows->isEmpty()) {
            $this->info('No pending tutor rows.');
            return 0;
        }

        foreach ($rows as $row) {
            $row->update(['status' => 'processing']);
            GenerateTutorFromImportRow::dispatch($row->id);
            $this->info("Dispatched row #{$row->id}");
        }

        return 0;
    }
}
