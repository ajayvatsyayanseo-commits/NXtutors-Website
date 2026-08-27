<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nxt_ai_actions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('conversation_id')->index();
            $table->string('user_id')->nullable()->index();
            $table->string('action_type', 40);
            $table->string('status', 20)->default('prepared')->index();
            $table->json('payload')->nullable();
            $table->string('confirmation_token_hash', 64)->nullable()->index();
            $table->timestamp('confirmation_expires_at')->nullable();
            $table->string('idempotency_key', 64)->nullable()->unique();
            $table->timestamp('executed_at')->nullable();
            $table->string('result_reference')->nullable();
            $table->timestamps();

            $table->foreign('conversation_id')
                ->references('id')->on('nxt_ai_conversations')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nxt_ai_actions');
    }
};
