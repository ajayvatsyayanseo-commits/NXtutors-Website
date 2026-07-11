<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use SplFileInfo;

class StorageAudit extends Command
{
    protected $signature = 'app:storage-audit {--delete : Delete expired logs and temporary files only}';

    protected $description = 'Report application storage use; read-only unless --delete is explicitly supplied';

    public function handle(): int
    {
        $delete = (bool) $this->option('delete');
        $this->info('NXTutors storage audit '.($delete ? '(EXPLICIT CLEANUP)' : '(READ-ONLY)'));

        $targets = [
            'Laravel logs' => storage_path('logs'),
            'Legacy worker logs' => storage_path('storage/logs'),
            'Generated media' => storage_path('app/public/user'),
            'Legacy generated media' => storage_path('storage/app/public/user'),
            'Import files' => storage_path('app/public/pagegen/imports'),
            'Temporary files' => storage_path('app/private/tmp'),
        ];

        $rows = [];
        $deleted = 0;
        foreach ($targets as $label => $path) {
            $stats = $this->inspect($path, $delete && in_array($label, ['Laravel logs', 'Legacy worker logs', 'Temporary files'], true));
            $deleted += $stats['deleted'];
            $rows[] = [$label, $stats['files'], $this->bytes($stats['bytes']), $stats['oldest'] ?: 'n/a'];
        }

        $this->table(['Area', 'Files', 'Size', 'Oldest'], $rows);

        if ($delete) {
            $this->warn("Deleted {$deleted} expired log/temporary files. Imports and generated media were never deletion candidates.");
        } else {
            $this->info('No files were deleted. Re-run with --delete only after reviewing this report and retention settings.');
        }

        return self::SUCCESS;
    }

    /** @return array{files:int,bytes:int,oldest:?string,deleted:int} */
    private function inspect(string $path, bool $deleteExpired): array
    {
        $stats = ['files' => 0, 'bytes' => 0, 'oldest' => null, 'deleted' => 0];
        if (! is_dir($path)) {
            return $stats;
        }

        $logCutoff = now()->subDays(max(1, (int) config('cost-safety.storage.log_retention_days', 14)))->getTimestamp();
        $temporaryCutoff = now()->subDays(max(1, (int) config('cost-safety.storage.temporary_retention_days', 7)))->getTimestamp();
        $cutoff = str_contains(str_replace('\\', '/', $path), '/tmp') ? $temporaryCutoff : $logCutoff;

        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($path, RecursiveDirectoryIterator::SKIP_DOTS)
        );

        /** @var SplFileInfo $file */
        foreach ($iterator as $file) {
            if (! $file->isFile() || $file->isLink()) {
                continue;
            }

            $stats['files']++;
            $stats['bytes'] += $file->getSize();
            $date = date('Y-m-d H:i:s', $file->getMTime());
            $stats['oldest'] = $stats['oldest'] === null || $date < $stats['oldest'] ? $date : $stats['oldest'];

            if ($deleteExpired && $file->getMTime() < $cutoff && @unlink($file->getPathname())) {
                $stats['deleted']++;
            }
        }

        return $stats;
    }

    private function bytes(int $bytes): string
    {
        if ($bytes < 1024) {
            return $bytes.' B';
        }

        if ($bytes < 1024 ** 2) {
            return number_format($bytes / 1024, 1).' KB';
        }

        if ($bytes < 1024 ** 3) {
            return number_format($bytes / (1024 ** 2), 1).' MB';
        }

        return number_format($bytes / (1024 ** 3), 2).' GB';
    }
}
