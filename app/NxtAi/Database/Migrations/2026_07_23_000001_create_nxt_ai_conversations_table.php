<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nxt_ai_conversations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->ulid('uid')->unique()->index();
            $table->string('user_id')->nullable()->index();
            $table->string('guest_session_hash', 64)->nullable()->index();
            $table->string('title')->nullable();
            $table->text('summary')->nullable();
            $table->string('last_openai_response_id')->nullable();
            $table->string('status', 20)->default('active')->index();
            $table->timestamp('last_activity_at')->nullable()->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nxt_ai_conversations');
    }
};
