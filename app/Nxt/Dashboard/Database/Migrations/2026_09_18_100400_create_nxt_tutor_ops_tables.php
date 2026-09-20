<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Tutor-side operations: availability, verification, reliability and Studio.
 *
 * Availability lives here rather than on `register` because the matching engine
 * and the booking screen both need a queryable weekly pattern, and `register`
 * has no column that could hold one without another delimited string field.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nxt_tutor_availability', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->string('tutor_user_id')->index();
            $table->unsignedTinyInteger('weekday');                   // 0 Sun .. 6 Sat
            $table->time('start_time');
            $table->time('end_time');
            $table->string('mode', 16)->default('any');               // home|online|any
            $table->timestamps();

            $table->index(['tutor_user_id', 'weekday']);
        });

        Schema::create('nxt_availability_exceptions', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->string('tutor_user_id')->index();
            $table->date('date')->index();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->string('kind', 16)->default('blocked');           // blocked|extra
            $table->string('reason')->nullable();
            $table->timestamps();
        });

        Schema::create('nxt_tutor_verifications', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->string('tutor_user_id')->index();
            // id_proof|qualification|address_proof|police_verification
            $table->string('doc_type', 32);
            $table->string('file_path')->nullable();
            $table->string('status', 16)->default('pending')->index(); // pending|approved|rejected
            $table->string('reviewer_user_id')->nullable();
            $table->text('reviewer_comment')->nullable();
            $table->timestamp('reviewed_at')->nullable();
            $table->timestamps();

            $table->unique(['tutor_user_id', 'doc_type']);
        });

        Schema::create('nxt_reliability_scores', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->string('tutor_user_id')->index();
            $table->unsignedTinyInteger('score')->default(0);         // 0-100
            $table->unsignedTinyInteger('punctuality')->default(0);   // weight 40%
            $table->unsignedTinyInteger('response')->default(0);      // weight 30%
            $table->unsignedTinyInteger('completion')->default(0);    // weight 30%
            $table->date('window_start');
            $table->date('window_end');
            $table->json('top_events')->nullable();                   // the events that moved it
            $table->timestamps();

            $table->unique(['tutor_user_id', 'window_end']);
        });

        Schema::create('nxt_studio_artefacts', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->string('tutor_user_id')->index();
            // lesson_plan|worksheet|demo_script|profile_builder|reply_template
            $table->string('tool', 32)->index();
            $table->string('title')->nullable();
            $table->json('inputs')->nullable();
            $table->longText('output')->nullable();
            $table->unsignedSmallInteger('version')->default(1);
            $table->string('pdf_path')->nullable();
            $table->ulid('shared_session_id')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nxt_studio_artefacts');
        Schema::dropIfExists('nxt_reliability_scores');
        Schema::dropIfExists('nxt_tutor_verifications');
        Schema::dropIfExists('nxt_availability_exceptions');
        Schema::dropIfExists('nxt_tutor_availability');
    }
};
