<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nxt_ai_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('conversation_id')->index();
            $table->string('role', 20);
            $table->longText('content')->nullable();
            $table->json('structured_blocks')->nullable();
            $table->string('tool_name')->nullable();
            $table->string('tool_call_id')->nullable();
            $table->json('tool_metadata')->nullable();
            $table->string('request_id')->nullable();
            $table->json('token_usage')->nullable();
            $table->unsignedInteger('latency_ms')->nullable();
            $table->timestamps();

            $table->foreign('conversation_id')
                ->references('id')->on('nxt_ai_conversations')
                ->cascadeOnDelete();

            $table->index(['conversation_id', 'id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nxt_ai_messages');
    }
};
