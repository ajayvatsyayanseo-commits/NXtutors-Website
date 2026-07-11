<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Throwable;

class AuditGenerationDuplicates extends Command
{
    protected $signature = 'app:audit-generation-duplicates';

    protected $description = 'Read-only duplicate audit before any future uniqueness migration';

    public function handle(): int
    {
        $this->info('Generation duplicate audit (READ-ONLY)');

        try {
            if (Schema::hasTable('generated_pages')) {
                $duplicates = DB::table('generated_pages')
                    ->select('slug', DB::raw('COUNT(*) AS duplicate_count'))
                    ->groupBy('slug')
                    ->havingRaw('COUNT(*) > 1')
                    ->limit(100)
                    ->get();
                $this->line('Duplicate generated-page slugs: '.$duplicates->count());
            }

            if (Schema::hasTable('tutor_import_rows')) {
                $duplicates = DB::table('tutor_import_rows')
                    ->whereNotNull('register_id')
                    ->select('register_id', DB::raw('COUNT(*) AS duplicate_count'))
                    ->groupBy('register_id')
                    ->havingRaw('COUNT(*) > 1')
                    ->limit(100)
                    ->get();
                $this->line('Register IDs referenced by multiple import rows: '.$duplicates->count());
            }
        } catch (Throwable $exception) {
            $this->error('Duplicate audit failed: '.$exception::class);

            return self::FAILURE;
        }

        $this->info('No records or indexes were changed.');

        return self::SUCCESS;
    }
}
