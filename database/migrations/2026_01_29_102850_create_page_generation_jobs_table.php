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
        Schema::create('page_generation_jobs', function (Blueprint $table) {
      $table->id();
      $table->json('payload'); // input data
      $table->enum('status', ['pending','processing','done','failed'])->default('pending');
      $table->text('error')->nullable();
      $table->unsignedTinyInteger('attempts')->default(0);
      $table->timestamp('processed_at')->nullable();
      $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_generation_jobs');
    }
};
