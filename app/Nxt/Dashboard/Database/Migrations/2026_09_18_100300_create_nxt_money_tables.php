<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Money: the ledger, payouts and the meter audit trail.
 *
 * `nxt_ledger_entries` is append-only and is the source of truth for every
 * balance shown in either dashboard. Wallet and payable figures are summed
 * from it and never stored as an editable column, so a balance cannot drift
 * away from the events that produced it.
 *
 * `idempotency_key` is unique: a retried webhook or a double-tapped Pay button
 * writes the same row once.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nxt_ledger_entries', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            // family_wallet|held|tutor_payable|platform_commission|payout|refund
            $table->string('account', 32)->index();
            $table->string('owner_user_id')->index();                 // register.user_id
            $table->ulid('session_id')->nullable()->index();
            $table->ulid('package_id')->nullable()->index();
            $table->string('direction', 8);                           // debit|credit
            $table->bigInteger('amount_paise');
            // package_purchase|hold|release|commission|payout|refund|adjustment|cancellation_fee
            $table->string('kind', 32)->index();
            $table->string('reference')->nullable();                  // provider payment id
            $table->string('idempotency_key')->unique();
            $table->string('description')->nullable();
            $table->timestamp('occurred_at')->index();
            $table->timestamps();

            $table->index(['owner_user_id', 'account']);
        });

        Schema::create('nxt_payouts', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->string('tutor_user_id')->index();
            $table->unsignedBigInteger('amount_paise');
            $table->string('status', 16)->default('pending')->index(); // pending|processing|paid|failed
            $table->date('period_start')->nullable();
            $table->date('period_end')->nullable();
            $table->string('reference')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->string('failure_reason')->nullable();
            $table->timestamps();
        });

        Schema::create('nxt_invoices', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->string('owner_user_id')->index();
            $table->string('number')->unique();
            $table->ulid('package_id')->nullable();
            $table->unsignedBigInteger('amount_paise');
            $table->unsignedBigInteger('gst_paise')->default(0);
            $table->string('status', 16)->default('paid');
            $table->string('pdf_path')->nullable();
            $table->timestamp('issued_at');
            $table->timestamps();
        });

        // Audit trail on top of the existing user_subscriptions counters, so a
        // consumed credit can be explained and refunded rather than only counted.
        Schema::create('nxt_meter_events', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->unsignedBigInteger('subscription_id')->nullable()->index();
            $table->string('user_id')->index();
            $table->string('feature', 48)->index();                   // ai.messages|tutors.contact|leads.view|...
            $table->integer('delta');                                 // negative consumes, positive grants
            $table->string('reference_type', 48)->nullable();
            $table->string('reference_id')->nullable();
            $table->string('idempotency_key')->unique();
            $table->string('actor')->nullable();
            $table->string('reason', 24)->default('consume');         // consume|refund|grant|admin_adjust
            $table->timestamps();

            $table->index(['user_id', 'feature']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nxt_meter_events');
        Schema::dropIfExists('nxt_invoices');
        Schema::dropIfExists('nxt_payouts');
        Schema::dropIfExists('nxt_ledger_entries');
    }
};
