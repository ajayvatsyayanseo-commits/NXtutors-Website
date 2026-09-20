<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * The learning surfaces: homework, study plans, practice tests and progress.
 *
 * Progress rows carry the ids of the events they were computed from, because
 * the brief requires every number on the Progress screen to be traceable back
 * to a ledger event rather than presented as an unsourced score.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nxt_homework', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->ulid('session_id')->nullable()->index();
            $table->string('student_user_id')->index();
            $table->string('tutor_user_id')->index();
            $table->string('subject')->nullable();
            $table->string('title');
            $table->text('instructions')->nullable();
            $table->json('attachments')->nullable();
            $table->timestamp('due_at')->nullable()->index();
            $table->string('status', 16)->default('open')->index();   // open|submitted|marked|cancelled
            $table->timestamps();

            $table->index(['student_user_id', 'status']);
        });

        Schema::create('nxt_homework_submissions', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->ulid('homework_id')->index();
            $table->string('student_user_id')->index();
            $table->json('files')->nullable();                        // signed-URL object keys
            $table->text('note')->nullable();
            $table->timestamp('submitted_at');
            $table->timestamps();
        });

        Schema::create('nxt_homework_marks', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->ulid('homework_id')->index();
            $table->ulid('submission_id')->nullable();
            $table->string('tutor_user_id')->index();
            $table->unsignedTinyInteger('score')->nullable();         // out of 100
            $table->string('grade', 8)->nullable();
            $table->text('comment')->nullable();
            $table->string('voice_note_path')->nullable();
            $table->timestamp('marked_at');
            $table->timestamps();
        });

        Schema::create('nxt_study_plans', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->string('student_user_id')->index();
            $table->string('tutor_user_id')->nullable()->index();
            $table->string('subject')->nullable();
            $table->date('week_start')->index();
            $table->string('status', 16)->default('active');
            $table->string('generated_by', 24)->default('tutor');     // tutor|planner_agent|fallback
            $table->timestamps();
        });

        Schema::create('nxt_study_plan_items', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->ulid('plan_id')->index();
            $table->string('subject')->nullable();
            $table->string('chapter')->nullable();
            $table->string('title');
            $table->string('kind', 16)->default('self_study');        // in_class|self_study
            $table->boolean('locked')->default(false);                // survives regeneration
            $table->unsignedSmallInteger('position')->default(0);
            $table->timestamp('due_at')->nullable();
            $table->timestamp('done_at')->nullable();
            $table->string('edited_by')->nullable();
            $table->timestamps();
        });

        Schema::create('nxt_tests', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->string('subject');
            $table->string('class_level')->nullable();
            $table->string('board')->nullable();
            $table->string('chapter')->nullable();
            $table->string('difficulty', 16)->default('mixed');
            $table->unsignedSmallInteger('question_count')->default(10);
            $table->json('questions')->nullable();
            $table->string('source', 24)->default('bank');            // bank|test_agent
            $table->timestamps();
        });

        Schema::create('nxt_test_attempts', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->ulid('test_id')->index();
            $table->string('student_user_id')->index();
            $table->unsignedSmallInteger('score')->nullable();
            $table->unsignedSmallInteger('total')->nullable();
            $table->json('per_topic')->nullable();
            $table->json('answers')->nullable();
            $table->string('status', 16)->default('in_progress');     // in_progress|finished|abandoned
            $table->timestamp('started_at');
            $table->timestamp('finished_at')->nullable();
            $table->timestamps();
        });

        Schema::create('nxt_progress_snapshots', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->string('student_user_id')->index();
            $table->string('subject');
            $table->string('chapter')->nullable();
            $table->unsignedTinyInteger('score')->nullable();         // 0-100 heatmap cell
            $table->json('evidence')->nullable();                     // ids of the events behind the cell
            $table->date('computed_for')->index();
            $table->timestamps();
        });

        Schema::create('nxt_progress_summaries', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->string('student_user_id')->index();
            $table->date('week_start');
            $table->date('week_end');
            $table->json('counters')->nullable();                     // attendance, tests, homework
            $table->text('narrative')->nullable();                    // Premium plans only
            $table->timestamp('read_at')->nullable();
            $table->timestamps();

            $table->unique(['student_user_id', 'week_start']);
        });

        Schema::create('nxt_tutor_notes', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->string('student_user_id')->index();
            $table->string('tutor_user_id')->index();
            $table->string('visibility', 16)->default('private');     // private|shared
            $table->text('body');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        foreach ([
            'nxt_tutor_notes', 'nxt_progress_summaries', 'nxt_progress_snapshots',
            'nxt_test_attempts', 'nxt_tests', 'nxt_study_plan_items', 'nxt_study_plans',
            'nxt_homework_marks', 'nxt_homework_submissions', 'nxt_homework',
        ] as $table) {
            Schema::dropIfExists($table);
        }
    }
};
