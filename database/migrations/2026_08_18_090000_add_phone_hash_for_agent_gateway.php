<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Peppered phone hashes, so the agent gateway can find a person without ever
 * sending us a phone number.
 *
 * The NXTutors agents refer to a customer as `ph_<16 hex>` — an HMAC-SHA256 of
 * the last ten digits of the number under a shared pepper. That is deliberate:
 * a dump of any agent table contains no phone numbers at all.
 *
 * It leaves this site with a lookup problem. A hash cannot be reversed, so
 * `GET /api/agent/v1/tutors/{ref}/contacts` for a parent has nothing to match
 * on. Computing the hash of every candidate row per request would work and
 * would also be a full scan of `register` on every reminder we send.
 *
 * So the hash is stored and indexed. It is derived data, never input: the model
 * recomputes it on save, and `agent:backfill-phone-hashes` fills the existing
 * rows. Nothing here weakens privacy — the hash is one-way and useless without
 * the pepper, which lives only in the environment.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('register', function (Blueprint $table): void {
            $table->string('phone_hash', 32)->nullable()->after('phone');
            // Not unique: two rows can legitimately carry one number (a parent
            // who also registered as a tutor), and a unique index would make
            // that an insert failure on a live signup form.
            $table->index('phone_hash', 'register_phone_hash_index');
        });

        Schema::table('demo_leads', function (Blueprint $table): void {
            $table->string('phone_hash', 32)->nullable()->after('phone');
            $table->index('phone_hash', 'demo_leads_phone_hash_index');
        });
    }

    public function down(): void
    {
        Schema::table('register', function (Blueprint $table): void {
            $table->dropIndex('register_phone_hash_index');
            $table->dropColumn('phone_hash');
        });

        Schema::table('demo_leads', function (Blueprint $table): void {
            $table->dropIndex('demo_leads_phone_hash_index');
            $table->dropColumn('phone_hash');
        });
    }
};
