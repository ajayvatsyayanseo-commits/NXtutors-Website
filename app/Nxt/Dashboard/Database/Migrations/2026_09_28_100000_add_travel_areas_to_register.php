<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * "Areas I travel to" on a tutor profile: the sectors, societies or zones a
 * home tutor will go to, comma-separated. Home-tutor search ranks a tutor
 * who travels to the parent's area with those who live there.
 */
return new class extends Migration
{
    public function up(): void
    {
        // `register` predates migrations; test databases may not have it.
        if (Schema::hasTable('register') && ! Schema::hasColumn('register', 'travel_areas')) {
            Schema::table('register', function (Blueprint $t) {
                $t->string('travel_areas', 500)->nullable();
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('register') && Schema::hasColumn('register', 'travel_areas')) {
            Schema::table('register', function (Blueprint $t) {
                $t->dropColumn('travel_areas');
            });
        }
    }
};
