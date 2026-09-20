<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Let a plan say "unlimited".
 *
 * Brief 9.3 makes a null limit mean unlimited, and `user_subscriptions`
 * declared the three limit columns NOT NULL DEFAULT 0 — so unlimited could not
 * be stored at all, and the null branches in the entitlement gate were dead
 * code. A plan meant to be unlimited locked its subscriber out entirely.
 *
 * Nullable only. Existing rows keep their integers, and zero still means zero:
 * no allowance. Only an explicit null is unlimited.
 */
return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('user_subscriptions')) {
            return;
        }

        Schema::table('user_subscriptions', function (Blueprint $table): void {
            $table->integer('ai_credit_limit')->default(0)->nullable()->change();
            $table->integer('contact_limit')->default(0)->nullable()->change();
            $table->integer('lead_limit')->default(0)->nullable()->change();
        });
    }

    public function down(): void
    {
        if (! Schema::hasTable('user_subscriptions')) {
            return;
        }

        // A null cannot survive the trip back, so it becomes the old default.
        foreach (['ai_credit_limit', 'contact_limit', 'lead_limit'] as $column) {
            \Illuminate\Support\Facades\DB::table('user_subscriptions')->whereNull($column)->update([$column => 0]);
        }

        Schema::table('user_subscriptions', function (Blueprint $table): void {
            $table->integer('ai_credit_limit')->default(0)->nullable(false)->change();
            $table->integer('contact_limit')->default(0)->nullable(false)->change();
            $table->integer('lead_limit')->default(0)->nullable(false)->change();
        });
    }
};
