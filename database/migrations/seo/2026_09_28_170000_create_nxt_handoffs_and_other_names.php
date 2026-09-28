<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * WhatsApp hand-off context (docs/contracts/lead-intake-handoff-v1.md).
 *
 * Every WhatsApp button on the site creates one row and puts its code
 * ("Ref: NX-7K3Q2M") in the prefilled message, so the Lead Intake agent
 * and the team know the page, the exact tutor, the comparison or the
 * AI chat behind the message. No phone number or parent name is stored.
 *
 * Also `register.other_names`: names a tutor is also known by ("Ajay Sir"),
 * so a parent who types one of them is matched to the right tutor.
 */
return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('nxt_handoffs')) {
            Schema::create('nxt_handoffs', function (Blueprint $t) {
                $t->id();
                $t->string('code', 12)->unique();
                $t->string('kind', 20);
                $t->string('intent', 20);
                $t->string('source_url', 500)->nullable();
                $t->string('page_type', 40)->nullable();
                $t->string('page_title', 255)->nullable();
                $t->json('utm')->nullable();
                $t->string('primary_tutor_id', 64)->nullable();
                $t->json('tutors')->nullable();          // [{id, role}]
                $t->json('compare')->nullable();         // {ranked_tutor_ids, winner_tutor_id}
                $t->string('conversation_uid', 40)->nullable();
                $t->json('known')->nullable();
                $t->unsignedInteger('fetch_count')->default(0);
                $t->timestamp('fetched_at')->nullable();
                $t->timestamp('expires_at')->index();
                $t->timestamps();
            });
        }

        if (Schema::hasTable('register') && ! Schema::hasColumn('register', 'other_names')) {
            Schema::table('register', function (Blueprint $t) {
                $t->string('other_names', 255)->nullable();
            });
        }

        // Ajay Vatsyayan (1997) teaches as "Ajay Vatsyayan Classes"; parents say "Ajay Sir".
        if (Schema::hasTable('register') && Schema::hasColumn('register', 'other_names')) {
            DB::table('register')->where('user_id', '1997')
                ->where(fn ($q) => $q->whereNull('other_names')->orWhere('other_names', ''))
                ->update(['other_names' => 'Ajay Sir, Ajay Vatsyayan Classes']);
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('nxt_handoffs');
        if (Schema::hasTable('register') && Schema::hasColumn('register', 'other_names')) {
            Schema::table('register', function (Blueprint $t) {
                $t->dropColumn('other_names');
            });
        }
    }
};
