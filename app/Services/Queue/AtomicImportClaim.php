<?php

namespace App\Services\Queue;

use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

class AtomicImportClaim
{
    /**
     * @param  class-string<Model>  $modelClass
     * @param  array<int, string>  $claimableStatuses
     */
    public function claim(string $modelClass, int $id, array $claimableStatuses = ['pending', 'failed']): bool
    {
        if (! is_a($modelClass, Model::class, true)) {
            throw new InvalidArgumentException('Atomic claims require an Eloquent model.');
        }

        return $modelClass::query()
            ->whereKey($id)
            ->whereIn('status', $claimableStatuses)
            ->update([
                'status' => 'processing',
                'error' => null,
                'updated_at' => now(),
            ]) === 1;
    }
}
