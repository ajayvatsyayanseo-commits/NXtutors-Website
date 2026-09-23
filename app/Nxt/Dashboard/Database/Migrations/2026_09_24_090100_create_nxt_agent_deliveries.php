<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * One row per (outbox event, agent): has this agent been told yet?
 *
 * Kept apart from `nxt_outbox_events.published_at` on purpose. That column
 * belongs to the in-process relay that drives a family's notifications. If an
 * agent's delivery shared it, an agent being down would hold back a family's
 * "confirm today's class" message, and five failures would dead-letter it for
 * good. An agent is a subscriber. It must never be able to delay the site.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nxt_agent_deliveries', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->ulid('outbox_event_id');
            $table->string('subscriber', 64);
            $table->unsignedSmallInteger('attempts')->default(0);
            $table->timestamp('delivered_at')->nullable();
            $table->unsignedSmallInteger('last_status')->nullable();
            $table->string('last_error', 1000)->nullable();
            $table->timestamps();

            $table->unique(['outbox_event_id', 'subscriber']);
            $table->index(['subscriber', 'delivered_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nxt_agent_deliveries');
    }
};
