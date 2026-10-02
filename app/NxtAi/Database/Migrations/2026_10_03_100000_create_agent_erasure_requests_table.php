<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Outbox for erasures the WhatsApp side still has to carry out.
 *
 * When an account is erased here (App\Services\AccountLifecycle::purge), Lead
 * Intake and the onboarding agent must forget the same person. A row is
 * written in the purge and sent until Lead Intake confirms; the number and
 * file names are blanked as soon as it does, so this table holds personal
 * data only while an erasure is in flight. See App\Services\AgentErasure.
 */
return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('agent_erasure_requests')) {
            return;
        }
        Schema::create('agent_erasure_requests', function (Blueprint $t) {
            $t->id();
            $t->string('request_id', 128)->unique();
            $t->string('user_id', 64)->index();
            $t->text('phones')->nullable();
            $t->text('files')->nullable();
            $t->unsignedInteger('attempts')->default(0);
            $t->string('last_error', 255)->nullable();
            $t->timestamp('done_at')->nullable()->index();
            $t->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('agent_erasure_requests');
    }
};
