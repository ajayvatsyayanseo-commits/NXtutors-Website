<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Packages, sessions and the attendance ledger.
 *
 * `nxt_sessions` rather than `sessions`: Laravel's own session store already
 * owns that table name in this database.
 *
 * A session's money fields are captured at scheduling time, not read from the
 * package later, so changing a package's rate can never rewrite the fee of a
 * class that has already happened.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nxt_packages', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->string('student_user_id')->index();
            $table->string('tutor_user_id')->index();
            $table->ulid('lead_id')->nullable()->index();
            $table->string('subject')->nullable();
            $table->string('class_level')->nullable();
            $table->unsignedSmallInteger('sessions_total');
            $table->unsignedSmallInteger('sessions_used')->default(0);
            $table->unsignedBigInteger('rate_paise');                 // per session
            $table->unsignedBigInteger('amount_paise');               // total paid
            $table->unsignedTinyInteger('commission_pct')->default(15);
            $table->string('status', 16)->default('active')->index(); // active|completed|cancelled|expired
            $table->timestamp('purchased_at')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();

            $table->index(['student_user_id', 'status']);
            $table->index(['tutor_user_id', 'status']);
        });

        Schema::create('nxt_sessions', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->ulid('package_id')->nullable()->index();
            $table->ulid('lead_id')->nullable()->index();
            $table->string('student_user_id')->index();
            $table->string('tutor_user_id')->index();
            $table->string('subject')->nullable();
            $table->string('type', 16)->default('regular');           // demo|regular|doubt
            $table->string('mode', 16)->default('home');              // home|online
            $table->text('address')->nullable();
            $table->string('meeting_url')->nullable();
            $table->timestamp('starts_at')->index();
            $table->unsignedSmallInteger('planned_min')->default(60);
            $table->unsignedSmallInteger('actual_min')->nullable();
            // scheduled|checked_in|checked_out|confirmed|disputed|cancelled|no_show
            $table->string('status', 16)->default('scheduled')->index();
            $table->json('topics')->nullable();
            $table->unsignedTinyInteger('confidence')->nullable();    // student confidence 1-5
            $table->unsignedBigInteger('fee_paise')->default(0);
            $table->unsignedBigInteger('commission_paise')->default(0);
            $table->string('recurrence_id', 26)->nullable()->index();
            $table->timestamp('checked_in_at')->nullable();
            $table->timestamp('checked_out_at')->nullable();
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamp('cancelled_at')->nullable();
            $table->string('cancel_reason')->nullable();
            $table->timestamps();

            $table->index(['tutor_user_id', 'starts_at']);
            $table->index(['student_user_id', 'starts_at']);
            $table->index(['status', 'starts_at']);
        });

        Schema::create('nxt_attendance_events', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->ulid('session_id')->index();
            // check_in|check_out|no_show|confirm|dispute|auto_confirm|cancel
            $table->string('kind', 16);
            $table->string('actor_user_id')->nullable()->index();
            $table->string('method', 24)->nullable();                 // parent_otp|geofence|online_join|manual|system
            $table->decimal('lat', 10, 7)->nullable();
            $table->decimal('lng', 10, 7)->nullable();
            $table->unsignedSmallInteger('accuracy_m')->nullable();
            $table->timestamp('device_time')->nullable();
            $table->timestamp('server_time');
            $table->boolean('offline')->default(false);
            $table->json('payload')->nullable();
            $table->timestamps();
        });

        Schema::create('nxt_disputes', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->ulid('session_id')->index();
            $table->string('raised_by_user_id')->index();
            $table->string('reason', 64);
            $table->text('detail')->nullable();
            $table->json('files')->nullable();
            $table->string('status', 16)->default('open')->index();   // open|resolved|rejected
            $table->text('resolution')->nullable();
            $table->timestamp('resolved_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nxt_disputes');
        Schema::dropIfExists('nxt_attendance_events');
        Schema::dropIfExists('nxt_sessions');
        Schema::dropIfExists('nxt_packages');
    }
};
