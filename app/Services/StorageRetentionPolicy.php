<?php

namespace App\Services;

use DateTimeInterface;

class StorageRetentionPolicy
{
    public function shouldDelete(string $area, int $modifiedAt, DateTimeInterface $now): bool
    {
        $retentionDays = match ($area) {
            'Laravel logs', 'Legacy worker logs' => max(1, (int) config('cost-safety.storage.log_retention_days', 14)),
            'Temporary files' => max(1, (int) config('cost-safety.storage.temporary_retention_days', 7)),
            default => null,
        };

        if ($retentionDays === null) {
            return false;
        }

        return $modifiedAt < $now->getTimestamp() - ($retentionDays * 86400);
    }
}
