<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Outbox;

use App\Nxt\Dashboard\Models\OutboxEvent;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\Facades\Log;

/**
 * The same-process transport: record the event and hand it to Laravel's own
 * dispatcher, so in-process consumers — notifications today, more later — see
 * every dashboard event without an event bus in front of them.
 *
 * It is the default deliberately. A relay that needs infrastructure nobody has
 * provisioned yet is a relay that stays switched off, and an outbox nothing
 * drains is a queue that silently eats every message the module produces.
 */
final class LogOutboxPublisher implements OutboxPublisher
{
    public function __construct(private readonly Dispatcher $events)
    {
    }

    public function publish(OutboxEvent $event): void
    {
        $this->events->dispatch('nxt.outbox.'.$event->event, [$event]);

        Log::channel(config('logging.default'))->info('nxt-dashboard outbox', [
            'id' => $event->id,
            'topic' => $event->topic,
            'event' => $event->event,
            'correlation_id' => $event->correlation_id,
            'payload' => $event->payload,
        ]);
    }
}
