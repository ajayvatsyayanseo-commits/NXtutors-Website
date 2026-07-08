<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('demo_leads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone', 20);
            $table->string('service')->nullable();
            $table->string('subject')->nullable();
            $table->string('child_class')->nullable();
            $table->string('preferred_time')->nullable();
            $table->string('mode')->nullable();
            $table->string('location')->nullable();
            $table->text('message')->nullable();
            $table->string('source_page')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demo_leads');
    }
};
