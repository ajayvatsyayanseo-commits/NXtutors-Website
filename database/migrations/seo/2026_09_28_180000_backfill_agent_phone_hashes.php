<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;

/**
 * AGENT_HASH_PEPPER was set in production on 28 Sep 2026. Until then demo
 * leads and sign-ups were saved without `phone_hash` (AgentPseudonymiser::
 * tryPhoneHash), so the agents could not recognise those parents. This fills
 * those rows once. It only touches rows with no hash, so it is safe to run on
 * any database; without a pepper it does nothing and the deploy carries on.
 */
return new class extends Migration
{
    public function up(): void
    {
        if ((string) config('agent.hash_pepper', '') === '') {
            Log::warning('agent.backfill_skipped_no_pepper');

            return;
        }

        try {
            Artisan::call('agent:backfill-phone-hashes');
            Log::info('agent.backfill_done', ['output' => trim(Artisan::output())]);
        } catch (\Throwable $e) {
            Log::error('agent.backfill_failed', ['error' => $e->getMessage()]);
        }
    }

    public function down(): void
    {
        // Derived data; nothing to undo.
    }
};
