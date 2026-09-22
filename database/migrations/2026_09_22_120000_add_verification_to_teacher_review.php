<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Verified, moderated tutor reviews.
 *
 * `teacher_review` has no migration of its own — it exists only in the
 * production dump — so every step here checks before it acts.
 *
 * `status` stays what every reader already filters on: 't' is published,
 * 'f' is not. `moderation` records why:
 *
 *   unverified  submitted, waiting for the reviewer to click the email link
 *   pending     waiting for an admin
 *   approved    published by an admin
 *   rejected    turned down by an admin
 *   legacy      existed before this migration
 *
 * Every existing row becomes `legacy` and unpublished. Most were written by
 * the tutor importer, which asked an AI to invent up to 30 reviews per tutor;
 * they cannot be told apart from real ones, and showing invented reviews — or
 * handing them to Google as review markup — is the risk this removes. An admin
 * can restore any real one from the review queue. `down()` republishes them.
 */
return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('teacher_review')) {
            return;
        }

        Schema::table('teacher_review', function (Blueprint $table): void {
            $add = fn (string $column) => ! Schema::hasColumn('teacher_review', $column);

            if ($add('email')) $table->string('email', 191)->nullable();
            if ($add('email_verified_at')) $table->timestamp('email_verified_at')->nullable();
            if ($add('reviewer_role')) $table->string('reviewer_role', 16)->nullable();
            if ($add('subject')) $table->string('subject', 120)->nullable();
            if ($add('board')) $table->string('board', 16)->nullable();
            if ($add('class_level')) $table->string('class_level', 16)->nullable();
            if ($add('mode')) $table->string('mode', 16)->nullable();
            if ($add('duration')) $table->string('duration', 16)->nullable();
            if ($add('tags')) $table->text('tags')->nullable();
            if ($add('photo')) $table->string('photo', 255)->nullable();
            if ($add('moderation')) $table->string('moderation', 16)->nullable()->index();
            if ($add('verify_token_hash')) $table->string('verify_token_hash', 64)->nullable()->index();
            if ($add('verify_expires_at')) $table->timestamp('verify_expires_at')->nullable();
            if ($add('ip_hash')) $table->string('ip_hash', 64)->nullable();
            if ($add('submitted_at')) $table->timestamp('submitted_at')->nullable();
            if ($add('moderated_at')) $table->timestamp('moderated_at')->nullable();
            if ($add('moderated_by')) $table->string('moderated_by', 191)->nullable();
            if ($add('reject_reason')) $table->string('reject_reason', 255)->nullable();
        });

        DB::table('teacher_review')
            ->whereNull('moderation')
            ->update(['moderation' => 'legacy', 'status' => 'f']);
    }

    public function down(): void
    {
        if (! Schema::hasTable('teacher_review') || ! Schema::hasColumn('teacher_review', 'moderation')) {
            return;
        }

        DB::table('teacher_review')->where('moderation', 'legacy')->update(['status' => 't']);

        $columns = array_values(array_filter([
            'email', 'email_verified_at', 'reviewer_role', 'subject', 'board', 'class_level', 'mode',
            'duration', 'tags', 'photo', 'moderation', 'verify_token_hash', 'verify_expires_at',
            'ip_hash', 'submitted_at', 'moderated_at', 'moderated_by', 'reject_reason',
        ], fn (string $c) => Schema::hasColumn('teacher_review', $c)));

        Schema::table('teacher_review', function (Blueprint $table) use ($columns): void {
            if (in_array('moderation', $columns, true)) $table->dropIndex(['moderation']);
            if (in_array('verify_token_hash', $columns, true)) $table->dropIndex(['verify_token_hash']);
            $table->dropColumn($columns);
        });
    }
};
