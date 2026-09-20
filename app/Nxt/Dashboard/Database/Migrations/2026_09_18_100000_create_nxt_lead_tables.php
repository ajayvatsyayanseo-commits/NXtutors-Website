<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Leads and matching.
 *
 * These tables are new; the legacy `student_enquiry_managment` and `demo_leads`
 * rows are the source they are backfilled from, so both legacy ids are carried
 * here rather than the legacy rows being rewritten. Nothing in the public site
 * reads these tables.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nxt_leads', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->string('student_user_id')->nullable()->index();   // register.user_id once claimed
            $table->string('source', 32)->default('web');             // web|whatsapp|enquiry|demo_form
            $table->unsignedBigInteger('legacy_enquiry_id')->nullable()->index();
            $table->unsignedBigInteger('legacy_demo_lead_id')->nullable()->index();
            $table->string('conversation_id')->nullable();            // WhatsApp thread
            $table->string('contact_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_hash', 32)->nullable()->index();
            $table->string('student_name')->nullable();
            $table->string('class_level')->nullable();
            $table->string('board')->nullable();
            $table->string('subject')->nullable();
            $table->json('subjects')->nullable();
            $table->string('mode', 16)->default('home');              // home|online|hybrid
            $table->string('locality')->nullable();
            $table->string('city')->nullable();
            $table->string('pincode', 16)->nullable();
            $table->decimal('lat', 10, 7)->nullable();
            $table->decimal('lng', 10, 7)->nullable();
            $table->json('slots')->nullable();                        // ["mon_evening", ...]
            $table->unsignedBigInteger('budget_min_paise')->nullable();
            $table->unsignedBigInteger('budget_max_paise')->nullable();
            $table->text('note')->nullable();
            $table->date('start_by')->nullable();
            // received|matching|matches_ready|demo_booked|demo_done|hired|cancelled|expired
            $table->string('status', 24)->default('received')->index();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();

            $table->index(['status', 'expires_at']);
        });

        Schema::create('nxt_matches', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->ulid('lead_id')->index();
            $table->string('tutor_user_id')->index();
            $table->unsignedTinyInteger('score')->default(0);         // fit score 0-100
            $table->json('reasons')->nullable();                      // engine's own reasons
            $table->unsignedSmallInteger('rank')->default(1);
            // offered|viewed|contacted|rejected|replaced|hired
            $table->string('status', 16)->default('offered')->index();
            $table->string('reject_reason', 64)->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();

            $table->unique(['lead_id', 'tutor_user_id']);
        });

        // One row per tutor per lead: opening a lead costs exactly one lead view.
        Schema::create('nxt_lead_views', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->ulid('match_id');
            $table->ulid('lead_id')->index();
            $table->string('tutor_user_id')->index();
            $table->ulid('meter_event_id')->nullable();
            $table->timestamp('viewed_at');
            $table->timestamps();

            $table->unique(['match_id', 'tutor_user_id']);
        });

        Schema::create('nxt_lead_replies', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->ulid('lead_id')->index();
            $table->ulid('match_id')->nullable();
            $table->string('tutor_user_id')->index();
            $table->text('body');
            $table->boolean('ai_drafted')->default(false);
            $table->string('delivery_status', 16)->default('sent');   // sent|delivered|read|failed
            $table->timestamp('sent_at')->nullable();
            $table->timestamps();
        });

        Schema::create('nxt_quotes', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->ulid('lead_id')->index();
            $table->string('tutor_user_id')->index();
            $table->unsignedBigInteger('rate_paise');
            $table->json('packages')->nullable();                     // [{sessions, amount_paise}]
            $table->boolean('superseded')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nxt_quotes');
        Schema::dropIfExists('nxt_lead_replies');
        Schema::dropIfExists('nxt_lead_views');
        Schema::dropIfExists('nxt_matches');
        Schema::dropIfExists('nxt_leads');
    }
};
