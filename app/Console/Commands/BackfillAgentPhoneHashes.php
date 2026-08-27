<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\NxtAi\Support\AgentPseudonymiser;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

/**
 * Fill `phone_hash` for rows that existed before the column did.
 *
 * The model keeps the hash current from now on; this is the one-off for
 * history. Until it has run, every one of those people is invisible to the
 * agents — a lookup miss reads as "unknown contact", which fails closed as
 * opted-out, so no message reaches them and nothing is logged.
 *
 *     php artisan agent:backfill-phone-hashes --dry-run
 *     php artisan agent:backfill-phone-hashes
 *
 * Chunked and resumable: it only touches rows where `phone_hash IS NULL`, so
 * an interrupted run continues where it stopped rather than starting over.
 * Updates go through the query builder rather than the model on purpose —
 * `save()` would fire observers and touch `updated_at` on 1,900 rows, making a
 * derived-column fill look like a mass edit in every audit view.
 */
final class BackfillAgentPhoneHashes extends Command
{
    protected $signature = 'agent:backfill-phone-hashes
                            {--dry-run : Count what would change without writing}
                            {--chunk=500 : Rows per batch}';

    protected $description = 'Compute phone_hash for register and demo_leads rows that lack one';

    public function handle(): int
    {
        try {
            $pseudonymiser = AgentPseudonymiser::fromConfig();
        } catch (\RuntimeException $exception) {
            $this->error($exception->getMessage());

            return self::FAILURE;
        }

        $dryRun = (bool) $this->option('dry-run');
        $chunk = max(50, min(5000, (int) $this->option('chunk')));
        $total = 0;

        foreach (['register', 'demo_leads'] as $table) {
            $updated = $this->backfill($table, $pseudonymiser, $chunk, $dryRun);
            $total += $updated;
            $this->line(sprintf('  %-12s %d row(s)%s', $table, $updated, $dryRun ? ' (dry run)' : ''));
        }

        $this->info(sprintf(
            '%s %d row(s).',
            $dryRun ? 'Would update' : 'Updated',
            $total
        ));

        if (! $dryRun && $total > 0) {
            $this->line('Verify one against the agent: the ref it sends for a known');
            $this->line('number must equal ph_<that row\'s phone_hash>.');
        }

        return self::SUCCESS;
    }

    private function backfill(
        string $table,
        AgentPseudonymiser $pseudonymiser,
        int $chunk,
        bool $dryRun
    ): int {
        $updated = 0;

        while (true) {
            $rows = DB::table($table)
                ->select('id', 'phone')
                ->whereNull('phone_hash')
                ->whereNotNull('phone')
                ->where('phone', '<>', '')
                ->orderBy('id')
                ->limit($chunk)
                ->get();

            if ($rows->isEmpty()) {
                break;
            }

            foreach ($rows as $row) {
                $hash = $pseudonymiser->phoneHash((string) $row->phone);
                if ($hash === '') {
                    continue;
                }
                if (! $dryRun) {
                    DB::table($table)->where('id', $row->id)->update(['phone_hash' => $hash]);
                }
                $updated++;
            }

            // A dry run never writes, so the same page would be selected
            // forever. One pass is enough to report the count.
            if ($dryRun) {
                break;
            }
        }

        return $updated;
    }
}
