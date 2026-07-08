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
        Schema::create('user_subscriptions', function (Blueprint $table) {
        $table->id();

        $table->string('user_id');
        $table->unsignedBigInteger('plan_id');
        $table->string('plan_type'); // student / tutor

        $table->dateTime('start_date')->nullable();
        $table->dateTime('end_date')->nullable();

        $table->string('status')->default('active'); 
        $table->string('payment_status')->nullable();

        $table->integer('ai_credit_limit')->default(0);
        $table->integer('contact_limit')->default(0);
        $table->integer('lead_limit')->default(0);

        $table->integer('ai_credit_used')->default(0);
        $table->integer('contact_used')->default(0);
        $table->integer('lead_used')->default(0);

        $table->timestamps();

        $table->index(['user_id', 'plan_type']);
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_subscriptions');
    }
};
