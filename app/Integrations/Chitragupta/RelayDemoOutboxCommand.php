<?php

declare(strict_types=1);

namespace App\Integrations\Chitragupta;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

/**
 * Relay for demo_integration_outbox — the previously missing publisher.
 *
 * DemoProjectionService / SubscriptionActivationService append rows; this
 * command leases due rows, ships them to the Chitragupta Memory Gateway and
 * stamps published_at on acknowledgement (accepted or duplicate). Rows that
 * fail keep accumulating attempts and stay leased-out briefly so overlapping
 * runs never double-send within a lease window.
 *
 * Schedule every minute next to the existing workers:
 *   $schedule->command('chitragupta:relay-outbox')->everyMinute()->withoutOverlapping(5);
 */
final class RelayDemoOutboxCommand extends Command
{
    private const LEASE_SECONDS = 120;
    private const BATCH = 50;

    protected $signature = 'chitragupta:relay-outbox {--limit=200}';

    protected $description = 'Publish demo_integration_outbox rows to the Chitragupta Memory Gateway';

    public function handle(ChitraguptaGatewayClient $client, OutboxEventMapper $mapper): int
    {
        if (! $client->enabled()) {
            $this->info('Chitragupta relay disabled (config chitragupta.enabled).');

            return self::SUCCESS;
        }

        $now = now()->utc();
        $leased = DB::table('demo_integration_outbox')
            ->whereNull('published_at')
            ->where('available_at', '<=', $now)
            ->where(function ($query) use ($now): void {
                $query->whereNull('lease_expires_at')->orWhere('lease_expires_at', '<', $now);
            })
            ->orderBy('id')
            ->limit((int) $this->option('limit'))
            ->get();

        if ($leased->isEmpty()) {
            $this->info('Outbox empty.');

            return self::SUCCESS;
        }

        DB::table('demo_integration_outbox')
            ->whereIn('id', $leased->pluck('id'))
            ->update(['lease_expires_at' => $now->clone()->addSeconds(self::LEASE_SECONDS)]);

        $published = 0;
        $failed = 0;
        foreach ($leased->chunk(self::BATCH) as $chunk) {
            $events = $chunk->map(fn (object $row): array => $mapper->toMemoryEvent($row))->values()->all();
            try {
                $response = $client->postEventsBatch($events);
            } catch (\Throwable $exception) {
                $this->markFailed($chunk->pluck('id')->all(), 'transport:' . substr($exception::class, 0, 80));
                $failed += $chunk->count();
                continue;
            }

            if ($response->status() >= 300) {
                $this->markFailed($chunk->pluck('id')->all(), 'gateway_status_' . $response->status());
                $failed += $chunk->count();
                continue;
            }

            $body = $response->json();
            $ackedEventIds = array_column($body['acks'] ?? [], 'event_id');
            $rejected = array_column($body['rejected'] ?? [], 'reason', 'event_id');
            foreach ($chunk as $row) {
                if (in_array((string) $row->event_id, $ackedEventIds, true)) {
                    $this->markPublished((int) $row->id);
                    $published++;
                } elseif (isset($rejected[(string) $row->event_id])) {
                    // Permanent contract rejection: park with the reason, do not retry forever.
                    $this->markFailed([(int) $row->id], 'rejected:' . substr((string) $rejected[(string) $row->event_id], 0, 80));
                    $failed++;
                } else {
                    $this->markFailed([(int) $row->id], 'no_ack');
                    $failed++;
                }
            }
        }

        $this->info(sprintf('published=%d failed=%d', $published, $failed));

        return $failed === 0 ? self::SUCCESS : self::FAILURE;
    }

    private function markPublished(int $id): void
    {
        DB::table('demo_integration_outbox')->where('id', $id)->update([
            'published_at' => now()->utc(),
            'lease_expires_at' => null,
            'last_error_code' => null,
            'updated_at' => now()->utc(),
        ]);
    }

    /** @param array<int, int> $ids */
    private function markFailed(array $ids, string $errorCode): void
    {
        DB::table('demo_integration_outbox')->whereIn('id', $ids)->update([
            'attempts' => DB::raw('attempts + 1'),
            'last_error_code' => $errorCode,
            'updated_at' => now()->utc(),
        ]);
    }
}
