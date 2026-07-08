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
         Schema::create('subscription_plans', function (Blueprint $table) {
            $table->id();

            $table->enum('plan_type', ['student', 'tutor'])->index();
            $table->string('plan_name');
            $table->decimal('price', 10, 2)->default(0);

            $table->unsignedInteger('duration_days')->default(30);
            $table->unsignedInteger('ai_credits')->default(0);
            $table->unsignedInteger('contact_limit')->default(0);
            $table->unsignedInteger('lead_limit')->default(0);

            $table->json('features')->nullable();

            $table->boolean('status')->default(true)->index();
            $table->unsignedInteger('sort_order')->default(0)->index();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_plans');
    }
};
