<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Parent accounts, Phase 1 of the parent dashboard (owner decision, 3 Oct 2026).
 *
 * Until now there was no parent on this platform: `register.join_as` is only
 * teacher or student, and a family used the child's login. A parent is now a
 * person of their own, with their own login, and the team links their children
 * to them in Super Admin. Children get no login yet.
 *
 *  - nxt_parents: one row per parent. `phone` is the normalised 10-digit Indian
 *    mobile and is unique, because the WhatsApp login code is addressed by it.
 *    `phone_hash` is the agents' peppered hash (AgentPseudonymiser), so Lead
 *    Intake can be told about a parent without ever being sent a number; it is
 *    nullable because a missing pepper must not stop the team saving a family.
 *    `password` is nullable: a parent who only ever uses WhatsApp has none.
 *  - nxt_parent_children: the link. `student_user_id` is a `register.user_id`
 *    when the child already has a student account, or NULL for a child the
 *    team added by name only. A unique index on (parent_id, student_user_id)
 *    stops the same account being linked twice; MySQL and SQLite both let any
 *    number of NULLs through it, so name-only children are never blocked.
 *  - nxt_parent_login_codes: the WhatsApp login challenge. Only a hash of the
 *    code is kept, never the code. Addressed by the phone hash rather than the
 *    parent id, so a code is checked against the number the parent typed.
 *
 * Created here (app/Nxt/Dashboard) because the deploy runs this folder with
 * its own `migrate --path`, and new tables only, so nothing existing changes.
 */
return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('nxt_parents')) {
            Schema::create('nxt_parents', function (Blueprint $table): void {
                $table->id();
                $table->string('name', 120);
                $table->string('phone', 10)->unique();
                $table->string('phone_hash', 64)->nullable()->index();
                $table->string('email', 191)->nullable()->unique();
                $table->string('password')->nullable();
                $table->string('status', 16)->default('active');
                $table->timestamp('last_login_at')->nullable();
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('nxt_parent_children')) {
            Schema::create('nxt_parent_children', function (Blueprint $table): void {
                $table->id();
                $table->foreignId('parent_id')->constrained('nxt_parents')->cascadeOnDelete();
                $table->string('student_user_id', 64)->nullable()->index();
                $table->string('child_name', 120);
                $table->string('child_class', 40)->nullable();
                $table->string('board', 40)->nullable();
                $table->string('relationship', 16)->default('mother');
                $table->boolean('is_primary')->default(false);
                $table->timestamps();

                $table->unique(['parent_id', 'student_user_id']);
            });
        }

        if (! Schema::hasTable('nxt_parent_login_codes')) {
            Schema::create('nxt_parent_login_codes', function (Blueprint $table): void {
                $table->id();
                $table->string('phone_hash', 64);
                $table->string('code_hash');
                $table->timestamp('expires_at');
                $table->unsignedTinyInteger('attempts')->default(0);
                $table->timestamp('used_at')->nullable();
                $table->timestamp('created_at')->nullable();

                // "the newest code for this number" and "codes in the last hour"
                // are the only two questions ever asked of this table.
                $table->index(['phone_hash', 'created_at']);
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('nxt_parent_login_codes');
        Schema::dropIfExists('nxt_parent_children');
        Schema::dropIfExists('nxt_parents');
    }
};
