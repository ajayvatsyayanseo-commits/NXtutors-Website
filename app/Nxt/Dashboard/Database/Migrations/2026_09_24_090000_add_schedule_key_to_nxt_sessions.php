<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Makes booking a class through the agent gateway safe to retry.
 *
 * The Session agent books a family's timetable into classes and retries a
 * timeout, as every agent does. Without a key, a retry books the same evening
 * twice and holds the fee twice. The overlap guard would refuse the second
 * one, but it would do so as an error the agent cannot tell apart from a real
 * clash.
 *
 * The key is the agent's, e.g. `timetable:<id>:20260924T1130Z`. Unique, so the
 * database decides and not a check in PHP. Nullable, because every class booked
 * from the tutor's own screen has no key, and in MySQL a unique index ignores
 * NULLs.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('nxt_sessions', function (Blueprint $table): void {
            $table->string('schedule_key', 191)->nullable()->after('recurrence_id');
            $table->unique('schedule_key');
        });
    }

    public function down(): void
    {
        Schema::table('nxt_sessions', function (Blueprint $table): void {
            $table->dropUnique(['schedule_key']);
            $table->dropColumn('schedule_key');
        });
    }
};
