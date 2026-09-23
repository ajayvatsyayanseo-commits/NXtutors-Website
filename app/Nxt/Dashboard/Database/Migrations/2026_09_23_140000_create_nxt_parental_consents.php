<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Verifiable parental consent, which nothing on this platform could record.
 *
 * The DPDP Act 2023 requires verifiable consent from a parent before a child's
 * personal data is processed, and the Student agent's contract (§5) forbids it
 * from creating a student profile without one. The only DPDP machinery here so
 * far is account hide/delete — that is consent **withdrawal**. Nothing
 * collected it in the first place.
 *
 * The proof method is the one the platform already uses and has already
 * hardened: a short code, hashed, single-use, attempt-capped, delivered to the
 * family's own number. `CheckInProof` proves a tutor was in someone's front
 * room with it; the same evidence proves the person who holds the family's
 * phone agreed to something. Reusing it means one implementation to get right.
 *
 * Three decisions in this table are worth the words:
 *
 * **The record outlives the challenge.** `code_hash` is cleared the moment the
 * code is accepted — after that it proves nothing and is only a liability —
 * but the row stays forever. "We had consent" is a claim that must be
 * defensible years later, including after the account is deleted, so
 * withdrawal writes a timestamp rather than removing anything.
 *
 * **One live consent per purpose, enforced by the database.** `active_key`
 * holds `<student>:<purpose>` while the consent is live and NULL once it is
 * superseded or withdrawn. A MySQL unique index ignores NULLs, so any number
 * of historical rows coexist while at most one is current — the same mechanism
 * as `dedupe_key` on notifications, for the same reason: a check-then-insert
 * in PHP passes both checks when two requests race.
 *
 * **The parent is a phone hash, not a name.** There is no parent record on this
 * platform and inventing one here would be a second source of truth for who a
 * family is. What is actually needed is the ability to say "the holder of this
 * number consented", and `phone_hash` is already how every agent addresses a
 * person. The number itself is never stored by this table.
 *
 * The notice the parent agreed to is versioned (`consent_version`) rather than
 * copied in: what matters legally is which text was shown, and a version that
 * resolves to `config('consent.notices')` keeps the text reviewable by whoever
 * signs it off without a schema change.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nxt_parental_consents', function (Blueprint $table): void {
            $table->ulid('id')->primary();

            $table->string('student_user_id')->index();
            $table->string('purpose', 64);
            $table->string('consent_version', 32);

            // Who gave it. Peppered HMAC, exactly as `register.phone_hash` —
            // an agent holding `ph_<hash>` can be told whether that person
            // consented without this table ever holding a number.
            $table->string('parent_phone_hash', 64)->index();
            $table->string('parent_name')->nullable();

            $table->string('status', 16)->default('pending');
            $table->timestamp('verified_at')->nullable();
            $table->timestamp('withdrawn_at')->nullable();

            // The challenge. Nulled once it has been used or has failed for
            // good, because a spent code is only a liability.
            $table->string('code_hash')->nullable();
            $table->timestamp('issued_at')->nullable();
            $table->timestamp('expires_at')->nullable()->index();
            $table->unsignedTinyInteger('attempts')->default(0);

            // What was true when it was given: the channel it went out on, the
            // IP the confirmation came from. Deliberately not a free-for-all —
            // this is evidence, and evidence that accumulates whatever a caller
            // felt like attaching is not evidence.
            $table->json('evidence')->nullable();

            // NULL once superseded or withdrawn. See the note above.
            $table->string('active_key', 191)->nullable()->unique();

            $table->timestamps();

            $table->index(['student_user_id', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nxt_parental_consents');
    }
};
