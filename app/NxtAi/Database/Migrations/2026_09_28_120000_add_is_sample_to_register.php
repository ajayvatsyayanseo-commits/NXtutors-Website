<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Marks model (sample) tutor profiles, so they are shown honestly: every
 * tutor at this date except the real ones in config/tutors.php. New sign-ups
 * default to 0 (real). down() drops the column.
 */
return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('register')) {
            return; // pre-migration table; absent in fresh test databases
        }
        if (! Schema::hasColumn('register', 'is_sample')) {
            Schema::table('register', function (Blueprint $t) {
                $t->boolean('is_sample')->default(false);
            });

            DB::table('register')
                ->where('join_as', 'teacher')
                ->whereNotIn('user_id', config('tutors.real_user_ids', []))
                ->update(['is_sample' => true]);
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('register') && Schema::hasColumn('register', 'is_sample')) {
            Schema::table('register', function (Blueprint $t) {
                $t->dropColumn('is_sample');
            });
        }
    }
};
