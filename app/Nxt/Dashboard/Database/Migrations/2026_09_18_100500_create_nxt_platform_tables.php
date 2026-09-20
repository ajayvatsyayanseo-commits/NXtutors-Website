<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Cross-cutting platform tables: saved tutors, notifications, in-app messages
 * and the transactional outbox.
 *
 * Messages carry both parties rather than a thread table: a conversation is
 * keyed by (lead or package), which is the only grouping either dashboard
 * needs, and it keeps the tutor's own phone number out of the exchange.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nxt_saved_tutors', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->string('student_user_id')->index();
            $table->string('tutor_user_id')->index();
            $table->timestamp('saved_at');
            $table->timestamps();

            $table->unique(['student_user_id', 'tutor_user_id']);
        });

        Schema::create('nxt_notifications', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->string('user_id')->index();
            $table->string('role', 16)->index();                      // student|tutor
            $table->string('event', 48)->index();                     // session.checked_out, lead.received, ...
            $table->string('title');
            $table->text('body')->nullable();
            $table->string('deep_link')->nullable();
            $table->string('channel', 16)->default('in_app');         // in_app|whatsapp|email|sms
            $table->string('status', 16)->default('sent');            // sent|delivered|read|failed
            $table->timestamp('read_at')->nullable();
            $table->timestamps();

            $table->index(['user_id', 'read_at']);
        });

        Schema::create('nxt_messages', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->string('thread_key')->index();                    // lead:<ulid> or package:<ulid>
            $table->ulid('lead_id')->nullable()->index();
            $table->ulid('package_id')->nullable()->index();
            $table->string('from_user_id')->index();
            $table->string('to_user_id')->index();
            $table->text('body');
            $table->json('attachments')->nullable();
            $table->timestamp('read_at')->nullable();
            $table->timestamps();
        });

        // Write the event inside the same transaction as the state change; a
        // relay publishes it afterwards. Without this an event is lost whenever
        // the process dies between the commit and the publish.
        Schema::create('nxt_outbox_events', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->string('topic', 64)->index();
            $table->string('event', 64);
            $table->json('payload');
            $table->string('correlation_id')->nullable();
            $table->timestamp('published_at')->nullable()->index();
            $table->unsignedTinyInteger('attempts')->default(0);
            $table->text('last_error')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nxt_outbox_events');
        Schema::dropIfExists('nxt_messages');
        Schema::dropIfExists('nxt_notifications');
        Schema::dropIfExists('nxt_saved_tutors');
    }
};
