<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * What parents search for and pick, so suggestions can favour what leads to
 * a demo request and the gaps report can show what nobody here teaches.
 * No personal data: `sid` is a random id the browser makes for itself.
 */
return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('search_events')) {
            return;
        }
        Schema::create('search_events', function (Blueprint $t) {
            $t->id();
            $t->string('sid', 40)->nullable()->index();
            $t->string('kind', 12);            // search | pick | demo
            $t->string('q', 160)->nullable();  // what was typed
            $t->string('pick', 160)->nullable(); // the suggestion chosen
            $t->string('subject', 60)->nullable();
            $t->string('city', 60)->nullable();
            $t->string('area', 100)->nullable();
            $t->string('mode', 10)->nullable();
            $t->unsignedSmallInteger('results')->nullable();
            $t->timestamp('created_at')->useCurrent()->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('search_events');
    }
};
