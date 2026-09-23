<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Services;

use App\Models\Register;
use App\Nxt\Dashboard\Models\ParentalConsent;
use App\NxtAi\Support\AgentPseudonymiser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

/**
 * Collecting verifiable parental consent, and proving later that it happened.
 *
 * Modelled on {@see CheckInProof} deliberately rather than coincidentally. That
 * service already answers the hard parts of "did the holder of this phone
 * actually agree" — a hashed single-use code, an attempt cap that survives a
 * restart, a re-issue that replaces rather than accumulates — and those answers
 * do not become different answers because the question is consent instead of
 * attendance. A second, subtly weaker implementation of the same idea is how
 * one of them ends up unchecked.
 *
 * Three boundaries this service holds, all of which matter more than the code
 * itself:
 *
 *  1. **An agent can never grant consent.** Nothing here is reachable from the
 *     agent gateway. Issuing a code means messaging a family, which the Student
 *     agent's §5 forbids outright, and a consent an automated caller can mint
 *     for itself is not consent. The agent may only ask whether one exists.
 *  2. **Fails closed everywhere.** No row, a pending row, an expired row, a
 *     withdrawn row and a burnt row all answer the same way: not consented.
 *     "We could not find a record" must never read as "probably fine".
 *  3. **Withdrawal is a write, not a delete.** The obligation is to stop
 *     processing, not to forget that permission once existed — the record of
 *     when it was given and when it was revoked is the evidence that the
 *     obligation was met.
 */
class ParentalConsentFlow
{
    /** Wrong codes allowed before the consent request is burned. */
    private const MAX_ATTEMPTS = 5;

    /**
     * How long a family has to confirm.
     *
     * Longer than a check-in code, which is read out during a class. A parent
     * gets a message about their child's data and may read it that evening.
     */
    private const VALID_FOR_HOURS = 48;

    /** Who may consent for a child (DPDP Act 2023, s.9): a parent or lawful guardian. */
    public const GUARDIAN_ROLES = ['mother', 'father', 'guardian'];

    /**
     * Ask a family to consent, and return the code for delivery.
     *
     * Returns the code in the clear exactly once, the way `CheckInProof::issue`
     * does, because it has to be delivered by something and this is the only
     * moment it is knowable.
     *
     * Re-asking replaces the live request rather than adding a second one, so
     * a code from last week cannot confirm this week's request. Any *verified*
     * consent for the same purpose is superseded at the same moment and keeps
     * its history.
     */
    public function request(
        string $studentUserId,
        string $parentPhone,
        string $purpose,
        ?string $parentName = null,
        ?string $consentVersion = null,
        ?string $secret = null,
    ): string {
        $this->assertNotATutor($parentPhone);

        $code = $secret ?? str_pad((string) random_int(0, 999999), 6, '0', STR_PAD_LEFT);
        $version = $consentVersion ?? (string) config('nxt-dashboard.consent_version', 'v1');

        DB::transaction(function () use ($studentUserId, $parentPhone, $purpose, $parentName, $version, $code): void {
            // Releasing the key before claiming it: the unique index is the
            // thing that actually enforces one live consent per purpose, so
            // the old row has to stop being live inside the same transaction
            // that makes the new one live.
            ParentalConsent::query()
                ->where('active_key', ParentalConsent::activeKeyFor($studentUserId, $purpose))
                ->lockForUpdate()
                ->get()
                ->each(function (ParentalConsent $previous): void {
                    $previous->forceFill([
                        'active_key' => null,
                        'code_hash' => null,
                        'status' => $previous->status === ParentalConsent::STATUS_VERIFIED
                            ? ParentalConsent::STATUS_VERIFIED
                            : ParentalConsent::STATUS_EXPIRED,
                    ])->save();
                });

            ParentalConsent::create([
                'student_user_id' => $studentUserId,
                'purpose' => $purpose,
                'consent_version' => $version,
                'parent_phone_hash' => AgentPseudonymiser::fromConfig()->phoneHash($parentPhone),
                'parent_name' => $parentName,
                'status' => ParentalConsent::STATUS_PENDING,
                'code_hash' => Hash::make($code),
                'issued_at' => now(),
                'expires_at' => now()->addHours(self::VALID_FOR_HOURS),
                'active_key' => ParentalConsent::activeKeyFor($studentUserId, $purpose),
            ]);
        });

        return $code;
    }

    /**
     * Ask a parent to consent from a link, and return the link.
     *
     * For when the student is the one signing up (BLOCKERS D12 in the Student
     * agent): the parent is not in the conversation, so they get a WhatsApp
     * message with a Confirm button that opens this link. Possession of the
     * link is possession of the parent's WhatsApp, which is the proof.
     *
     * Replaces `requestAndNotify`, which put the code in the *student's* own
     * inbox — so the child could consent on the parent's behalf, which is the
     * one thing verifiable parental consent exists to prevent.
     *
     * @return array{id: string, token: string, url: string}
     */
    public function requestLink(
        string $studentUserId,
        string $parentPhone,
        string $purpose,
        ?string $parentName = null,
    ): array {
        $token = Str::random(48);
        $this->request($studentUserId, $parentPhone, $purpose, $parentName, secret: $token);

        $id = (string) ParentalConsent::query()
            ->where('active_key', ParentalConsent::activeKeyFor($studentUserId, $purpose))
            ->value('id');

        return ['id' => $id, 'token' => $token, 'url' => route('consent.show', [$id, $token])];
    }

    /**
     * The pending consent a link names, if the link is still good. Read-only.
     */
    public function pendingForLink(string $id, string $token): ?ParentalConsent
    {
        $consent = ParentalConsent::query()->find($id);

        if ($consent === null
            || $consent->status !== ParentalConsent::STATUS_PENDING
            || $consent->active_key === null
            || $consent->code_hash === null
            || $consent->expires_at === null
            || $consent->expires_at->isPast()
            || $consent->attempts >= self::MAX_ATTEMPTS
            || ! Hash::check($token, $consent->code_hash)) {
            return null;
        }

        return $consent;
    }

    /**
     * The parent confirms from the link, saying who they are.
     *
     * The declaration is part of the evidence, not a formality: consent from
     * someone who is not the parent or a lawful guardian, or not an adult, is
     * not consent. Both are recorded against the row.
     */
    public function confirmLink(string $id, string $token, string $role, bool $declaredAdult, array $evidence = []): bool
    {
        if (! in_array($role, self::GUARDIAN_ROLES, true) || ! $declaredAdult) {
            return false;
        }

        $consent = ParentalConsent::query()->find($id);
        if ($consent === null) {
            return false;
        }

        return $this->confirm($consent->student_user_id, $consent->purpose, $token, $evidence + [
            'actor' => $role,
            'declared_adult' => true,
            'channel' => 'whatsapp_link',
        ]);
    }

    /**
     * Refuses a number that belongs to a tutor on the platform.
     *
     * A tutor approving data processing for a child they teach — or any child
     * — is not a parent consenting. Matched on the last ten digits, so +91 and
     * spacing do not get a tutor's number past it.
     */
    private function assertNotATutor(string $parentPhone): void
    {
        $digits = preg_replace('/\D/', '', $parentPhone) ?? '';
        $last10 = strlen($digits) >= 10 ? substr($digits, -10) : $digits;

        $isTutor = $last10 !== '' && Register::query()
            ->where('join_as', 'teacher')
            // Stored numbers carry spaces and dashes as typed; compare digits.
            ->whereRaw("REPLACE(REPLACE(phone, ' ', ''), '-', '') LIKE ?", ['%'.$last10])
            ->exists();

        if ($isTutor) {
            throw ValidationException::withMessages([
                'parent_phone' => 'This number belongs to a tutor on NXTutors, so it cannot give consent as a parent.',
            ]);
        }
    }

    /**
     * Confirm a consent with the code that was sent.
     *
     * Attempts are counted on the row rather than in a cache: what is being
     * protected is one family's consent record and the count has to survive a
     * restart. Five wrong codes burn the request, and a new one has to be
     * issued — which is a message to the family, and therefore visible to them
     * if somebody else is guessing.
     */
    public function confirm(string $studentUserId, string $purpose, ?string $code, array $evidence = []): bool
    {
        if (! filled($code)) {
            return false;
        }

        return (bool) DB::transaction(function () use ($studentUserId, $purpose, $code, $evidence): bool {
            $consent = ParentalConsent::query()
                ->where('active_key', ParentalConsent::activeKeyFor($studentUserId, $purpose))
                ->lockForUpdate()
                ->first();

            if ($consent === null
                || $consent->status !== ParentalConsent::STATUS_PENDING
                || $consent->code_hash === null
                || $consent->expires_at === null
                || $consent->expires_at->isPast()
                || $consent->attempts >= self::MAX_ATTEMPTS) {
                return false;
            }

            if (! Hash::check($code, $consent->code_hash)) {
                $consent->increment('attempts');

                return false;
            }

            $consent->forceFill([
                'status' => ParentalConsent::STATUS_VERIFIED,
                'verified_at' => now(),
                // The code has done its job. Keeping it would only mean a
                // leaked table let somebody replay a confirmation.
                'code_hash' => null,
                'evidence' => array_merge($consent->evidence ?? [], array_filter([
                    'confirmed_ip' => $evidence['ip'] ?? null,
                    'confirmed_channel' => $evidence['channel'] ?? 'in_app',
                    'consent_version' => $consent->consent_version,
                    // Who said they were consenting, and that they are an
                    // adult: a named allow-list, not whatever a caller passed.
                    'actor' => $evidence['actor'] ?? null,
                    'declared_adult' => $evidence['declared_adult'] ?? null,
                ], fn ($value) => $value !== null)),
            ])->save();

            return true;
        });
    }

    /**
     * Withdraw consent.
     *
     * The row stays. What changes is that it stops being live, which is what
     * every reader checks — so processing stops immediately rather than when
     * some purge job next runs, and the dates that prove the obligation was
     * met are still there afterwards.
     */
    public function withdraw(string $studentUserId, string $purpose): bool
    {
        return (bool) DB::transaction(function () use ($studentUserId, $purpose): bool {
            $consent = ParentalConsent::query()
                ->where('active_key', ParentalConsent::activeKeyFor($studentUserId, $purpose))
                ->lockForUpdate()
                ->first();

            if ($consent === null) {
                return false;
            }

            $consent->forceFill([
                'status' => ParentalConsent::STATUS_WITHDRAWN,
                'withdrawn_at' => now(),
                'code_hash' => null,
                'active_key' => null,
            ])->save();

            return true;
        });
    }

    /**
     * The live consent for this purpose, or null.
     *
     * Null is the answer for every failure mode there is — never found, not
     * yet confirmed, expired, burnt, withdrawn. A caller that cannot tell
     * those apart cannot accidentally treat one of them as permission, and no
     * caller needs to: the only question is whether processing may happen.
     */
    public function current(string $studentUserId, string $purpose): ?ParentalConsent
    {
        $consent = ParentalConsent::query()
            ->where('active_key', ParentalConsent::activeKeyFor($studentUserId, $purpose))
            ->first();

        return $consent !== null && $consent->isLive() ? $consent : null;
    }

    /**
     * Withdraw everything for a student, for the account-deletion path.
     *
     * {@see \App\Services\AccountLifecycle} removes the account; consent is a
     * separate record that has to stop being live at the same moment, and it
     * is not covered by a `deleted_at` on `register` because it survives it on
     * purpose.
     */
    public function withdrawAll(string $studentUserId): int
    {
        return ParentalConsent::query()
            ->where('student_user_id', $studentUserId)
            ->whereNotNull('active_key')
            ->get()
            ->filter(fn (ParentalConsent $consent): bool => $this->withdraw($studentUserId, $consent->purpose))
            ->count();
    }

    /**
     * Is this the number we hold consent from?
     *
     * A family can have more than one adult and a number can change. The check
     * is deliberately narrow: consent given by one parent's phone is not
     * evidence that a different number agreed to anything.
     */
    public function matchesParentPhone(ParentalConsent $consent, string $phone): bool
    {
        return hash_equals(
            $consent->parent_phone_hash,
            AgentPseudonymiser::fromConfig()->phoneHash($phone),
        );
    }

    /**
     * The number to ask, for a student who has one on their account.
     *
     * On this platform the number on a minor's registration is in practice the
     * parent's — there is no separate parent record to read. That is an
     * assumption, so it is in one place where it can be replaced when a real
     * parent entity exists, rather than spread across every caller.
     */
    public function parentPhoneFor(string $studentUserId): ?string
    {
        $phone = Register::query()
            ->where('user_id', $studentUserId)
            ->value('phone');

        return filled($phone) ? (string) $phone : null;
    }
}
