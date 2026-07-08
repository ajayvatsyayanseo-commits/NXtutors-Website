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
        Schema::create('tutor_import_rows', function (Blueprint $table) {
            $table->id();
             $table->foreignId('tutor_import_id')
                  ->constrained('tutor_imports')
                  ->cascadeOnDelete();

            $table->json('payload'); 
            // Excel row data

            $table->string('status')->default('pending'); 
            // pending | processing | done | failed

            $table->text('error')->nullable();

            $table->unsignedBigInteger('register_id')->nullable();
            // Generated tutor ID

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutor_import_rows');
    }
};
