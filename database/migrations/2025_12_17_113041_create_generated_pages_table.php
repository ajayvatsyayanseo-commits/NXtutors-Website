<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void {
    Schema::create('generated_pages', function (Blueprint $table) {
      $table->id();
      $table->string('slug')->unique();
      $table->string('title');
      $table->string('meta_title')->nullable();
      $table->text('meta_description')->nullable();

      $table->string('city')->nullable();
      $table->string('location')->nullable();
      $table->string('hyper_location')->nullable();
      $table->string('page_type')->nullable();
      $table->string('service_mode')->nullable();
      $table->boolean('is_premium')->default(false);
      $table->string('primary_keyword')->nullable();

      $table->json('subjects')->nullable();
      $table->json('boards')->nullable();
      $table->json('classes_tracks')->nullable();

      $table->longText('html')->nullable();       // final page html
      $table->json('schemas')->nullable();        // json-ld array
      $table->json('payload')->nullable();        // your form input payload
      $table->string('status')->default('draft'); // draft/published
      $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();

      $table->timestamps();
      $table->index(['city','location']);
    });
  }

  public function down(): void {
    Schema::dropIfExists('generated_pages');
  }
};
