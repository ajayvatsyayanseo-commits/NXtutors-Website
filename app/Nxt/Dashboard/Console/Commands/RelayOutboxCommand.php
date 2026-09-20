<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Console\Commands;

use App\Nxt\Dashboard\Models\OutboxEvent;
use App\Nxt\Dashboard\Outbox\OutboxPublisher;
use App\Nxt\Dashboard\Support\CorrelationId;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

/**
 * Publish `nxt_outbox_events`, the half of the outbox pattern that was missing.
 *
 * `LeadFlow` and `SessionFlow` write a row inside the same transaction as the
 * state change, which is what makes "everything is replayable" true — but
 * nothing drained the table, so `published_at` was null on every row forever
 * and a family was never told their class had been auto-confirmed.
 *
 * Rows are claimed under a lock and published in the order they were written
 * (the id is a ULID, so id order is time order). A failure increments
 * `attempts` and backs off; after `max_attempts` the row is dead-lettered —
 * left unpublished, reported, and never retried automatically again, because a
 * message failing for the sixth time is a message a person needs to look at.
 *
 * Schedule it beside the existing relay:
 *   $schedule->command('nxt-dashboard:relay-outbox')->everyMinute()->withoutOverlapping(5);
 */
final class RelayOutboxCommand extends Command
{
    protected $signature = 'nxt-dashboard:relay-outbox {--limit=} {--retry-dead : Include rows that have already exhausted their attempts}';

    protected $description = 'Publish unsent nxt_outbox_events rows to the configured transport';

    public function handle(OutboxPublisher $publisher): int
    {
        CorrelationId::start('relay');

        $limit = (int) ($this->option('limit') ?: config('nxt-dashboard.outbox.batch', 200));
        $maxAttempts = (int) config('nxt-dashboard.outbox.max_attempts', 5);

        $due = OutboxEvent::whereNull('published_at')
            ->when(! $this->option('retry-dead'), fn ($q) => $q->where('attempts', '<', $maxAttempts))
            ->orderBy('id')
            ->limit($limit)
            ->pluck('id');

        $published = 0;
        $failed = 0;
        $deadLettered = 0;

        foreach ($due as $id) {
            $event = $this->claim($id, $maxAttempts);

            if (! $event) {
                continue;   // another run has it, or it is already out
            }

            try {
                $publisher->publish($event);

                $event->forceFill(['published_at' => now(), 'last_error' => null])->save();
                $published++;
            } catch (\Throwable $e) {
                $event->forceFill([
                    'attempts' => $event->attempts + 1,
                    'last_error' => substr($e::class.': '.$e->getMessage(), 0, 1000),
                ])->save();

                $failed++;

                if ($event->attempts >= $maxAttempts) {
                    $deadLettered++;

                    $this->error(sprintf('Dead-lettered %s (%s) after %d attempts.', $event->id, $event->event, $event->attempts));
                }
            }
        }

        $this->info(sprintf('published=%d failed=%d dead_lettered=%d', $published, $failed, $deadLettered));

        return self::SUCCESS;
    }

    /**
     * Take one row, if it is still there to be taken and its backoff has
     * elapsed. The backoff is a minute per attempt, so a transport that is down
     * is retried politely rather than hammered every minute by every row.
     */
    private function claim(string $id, int $maxAttempts): ?OutboxEvent
    {
        return DB::transaction(function () use ($id, $maxAttempts): ?OutboxEvent {
            $event = OutboxEvent::whereKey($id)->lockForUpdate()->first();

            if (! $event || $event->published_at !== null) {
                return null;
            }

            if (! $this->option('retry-dead') && $event->attempts >= $maxAttempts) {
                return null;
            }

            if ($event->attempts > 0 && $event->updated_at?->gt(now()->subMinutes($event->attempts))) {
                return null;
            }

            return $event;
        });
    }
}
