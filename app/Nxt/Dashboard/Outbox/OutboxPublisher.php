<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Outbox;

use App\Nxt\Dashboard\Models\OutboxEvent;

/**
 * Where a dashboard event goes once it has been written down.
 *
 * The outbox pattern is a write and then a relay: the write half is inside the
 * transaction that changed the state, so nothing is ever published for a change
 * that did not commit. This is the other half. Publishing is a transport
 * detail, so consumers — notifications, the progress and reliability agents —
 * never depend on which one is configured.
 */
interface OutboxPublisher
{
    /**
     * Deliver one event, or throw. A throw is a retry; a return is delivery.
     */
    public function publish(OutboxEvent $event): void;
}
