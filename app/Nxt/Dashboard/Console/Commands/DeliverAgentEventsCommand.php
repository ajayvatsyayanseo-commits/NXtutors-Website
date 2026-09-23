<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Console\Commands;

use App\Nxt\Dashboard\Models\OutboxEvent;
use App\Nxt\Dashboard\Support\CorrelationId;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

/**
 * Push outbox events to the agents that subscribe to them, as they happen.
 *
 * The outbox already records every class transition in the transaction that
 * made it. Nothing sent those records to an agent, so an agent could learn that
 * a class was confirmed only by asking, on a timer. This command closes that
 * gap. It runs every minute and sends each new event once to each subscriber
 * (config `nxt-dashboard.agent_events`).
 *
 * Delivery is at least once. A timeout after the agent accepted the event
 * means it is sent again, and the agent dedupes on `event_id`. Each (event,
 * agent) pair has its own row in `nxt_agent_deliveries`, with its own attempts
 * and backoff (a minute per attempt). After `max_attempts` the row is left
 * undelivered and reported, for a person to look at.
 *
 * None of this touches `nxt_outbox_events.published_at`, which belongs to the
 * relay that drives notifications.
 */
final class DeliverAgentEventsCommand extends Command
{
    protected $signature = 'nxt-dashboard:deliver-agent-events {--limit=}';

    protected $description = 'Send new outbox events to subscribed agents';

    public function handle(): int
    {
        CorrelationId::start('agent-events');

        $config = (array) config('nxt-dashboard.agent_events', []);
        $limit = (int) ($this->option('limit') ?: ($config['batch'] ?? 200));
        $maxAttempts = (int) ($config['max_attempts'] ?? 10);
        $since = now()->subHours((int) ($config['lookback_hours'] ?? 72));

        foreach ((array) ($config['subscribers'] ?? []) as $name => $subscriber) {
            $url = trim((string) ($subscriber['url'] ?? ''));
            $secret = (string) ($subscriber['secret'] ?? '');
            $events = array_values((array) ($subscriber['events'] ?? []));

            if ($url === '' || $secret === '' || $events === []) {
                continue;   // off
            }

            $due = OutboxEvent::query()
                ->whereIn('event', $events)
                ->where('created_at', '>=', $since)
                ->whereNotExists(function ($q) use ($name, $maxAttempts): void {
                    $q->select(DB::raw(1))
                        ->from('nxt_agent_deliveries')
                        ->whereColumn('nxt_agent_deliveries.outbox_event_id', 'nxt_outbox_events.id')
                        ->where('nxt_agent_deliveries.subscriber', $name)
                        ->where(fn ($w) => $w->whereNotNull('delivered_at')->orWhere('attempts', '>=', $maxAttempts));
                })
                ->orderBy('id')
                ->limit($limit)
                ->get();

            $sent = $failed = $dead = 0;

            foreach ($due as $event) {
                if (! $this->claim($event, $name)) {
                    continue;   // backing off
                }

                [$ok, $status, $error] = $this->send($event, $url, $secret, (array) ($subscriber['omit'] ?? []));

                $row = DB::table('nxt_agent_deliveries')
                    ->where('outbox_event_id', $event->id)
                    ->where('subscriber', $name);

                if ($ok) {
                    $row->update([
                        'delivered_at' => now(),
                        'last_status' => $status,
                        'last_error' => null,
                        'updated_at' => now(),
                    ]);
                    $sent++;

                    continue;
                }

                $attempts = (int) $row->value('attempts') + 1;
                $row->update([
                    'attempts' => $attempts,
                    'last_status' => $status,
                    'last_error' => $error === null ? null : substr($error, 0, 1000),
                    'updated_at' => now(),
                ]);
                $failed++;

                if ($attempts >= $maxAttempts) {
                    $dead++;
                    $this->error(sprintf('Gave up sending %s (%s) to %s after %d attempts.', $event->id, $event->event, $name, $attempts));
                }
            }

            $this->info(sprintf('%s: sent=%d failed=%d gave_up=%d', $name, $sent, $failed, $dead));
        }

        return self::SUCCESS;
    }

    /**
     * Make sure a delivery row exists, and say whether its backoff has passed.
     */
    private function claim(OutboxEvent $event, string $subscriber): bool
    {
        DB::table('nxt_agent_deliveries')->insertOrIgnore([
            'id' => (string) Str::ulid(),
            'outbox_event_id' => $event->id,
            'subscriber' => $subscriber,
            'attempts' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $row = DB::table('nxt_agent_deliveries')
            ->where('outbox_event_id', $event->id)
            ->where('subscriber', $subscriber)
            ->first(['attempts', 'delivered_at', 'updated_at']);

        if ($row === null || $row->delivered_at !== null) {
            return false;
        }

        $attempts = (int) $row->attempts;

        return $attempts === 0
            || now()->subMinutes($attempts)->gte(Carbon::parse($row->updated_at));
    }

    /**
     * @return array{0: bool, 1: ?int, 2: ?string}
     */
    private function send(OutboxEvent $event, string $url, string $secret, array $omit): array
    {
        $payload = (array) $event->payload;
        foreach ($omit as $key) {
            unset($payload[$key]);
        }

        $body = json_encode([
            'event_id' => (string) $event->id,
            'event' => (string) $event->event,
            'topic' => (string) $event->topic,
            'occurred_at' => $event->created_at?->toIso8601ZuluString(),
            'correlation_id' => $event->correlation_id,
            'payload' => $payload,
        ], JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);

        $parts = parse_url($url);
        $path = ($parts['path'] ?? '/').(isset($parts['query']) ? '?'.$parts['query'] : '');
        $timestamp = (string) time();
        $canonical = implode("\n", ['POST', $path, $timestamp, hash('sha256', $body)]);

        try {
            $response = Http::timeout((int) config('nxt-dashboard.agent_events.timeout_seconds', 5))
                ->withHeaders([
                    'X-Nxt-Timestamp' => $timestamp,
                    'X-Nxt-Signature' => 'v1='.hash_hmac('sha256', $canonical, $secret),
                    'X-Nxt-Source' => 'nxtutors_website',
                    'X-Nxt-Event-Id' => (string) $event->id,
                ])
                ->withBody($body, 'application/json')
                ->post($url);
        } catch (\Throwable $e) {
            return [false, null, $e::class];
        }

        if ($response->successful()) {
            return [true, $response->status(), null];
        }

        // The status only, never the body: an agent's error page is not ours
        // to store, and it may echo the payload back.
        return [false, $response->status(), 'http_'.$response->status()];
    }
}
