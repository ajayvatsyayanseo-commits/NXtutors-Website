<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Deduplication for notifications raised by an agent.
 *
 * The Student agent recomputes attendance on a schedule and after every
 * session event. The same two consecutive misses are therefore noticed several
 * times over, and each notice is a correct observation of one situation — not
 * three situations. Without a key, a family gets told three times that their
 * child missed two classes, which is how people learn to ignore notifications.
 *
 * Unique, and nullable. Unique because the guarantee has to come from the
 * database: an agent retrying a timeout races itself, and a check-then-insert
 * in PHP passes both checks. Nullable because every notification the site
 * already writes has no key and must keep working unchanged — in MySQL a
 * unique index ignores NULLs, so any number of them coexist.
 *
 * The key is the agent's own idempotency key, e.g.
 * `student:<student_user_id>:alert:attendance:2026-09`.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('nxt_notifications', function (Blueprint $table): void {
            $table->string('dedupe_key', 191)->nullable()->after('event');
            $table->unique('dedupe_key');
        });
    }

    public function down(): void
    {
        Schema::table('nxt_notifications', function (Blueprint $table): void {
            $table->dropUnique(['dedupe_key']);
            $table->dropColumn('dedupe_key');
        });
    }
};
