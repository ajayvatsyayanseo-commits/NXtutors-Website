<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Services;

use App\Nxt\Dashboard\Models\LedgerEntry;
use App\Nxt\Dashboard\Models\Package;
use App\Nxt\Dashboard\Models\TutoringSession;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

/**
 * Money, derived rather than stored.
 *
 * Every figure either dashboard shows — a family's wallet, the amount held
 * against scheduled classes, a tutor's payable balance — is a sum over
 * `nxt_ledger_entries`. Nothing writes a balance column, so no balance can
 * disagree with the events that produced it, and the nightly reconciliation the
 * brief asks for has something to reconcile against.
 *
 * The ledger is double-entry: every movement writes both legs, so the signed
 * sum across every account of everything one class produced is zero. A hold is
 * a move from the family's available balance into `held`, not a credit minted
 * from nothing, which is what makes a solvency check representable at all.
 *
 * Amounts are integer paise throughout. Floating point never touches money.
 */
class Ledger
{
    public const WALLET = 'family_wallet';

    public const HELD = 'held';

    public const TUTOR_PAYABLE = 'tutor_payable';

    public const COMMISSION = 'platform_commission';

    /**
     * Money the payment provider has taken on our behalf and not yet settled.
     *
     * It is the counterparty of every wallet credit, so money entering the
     * system has a place it came from and the signed sum across every account
     * stays zero. It is also what the nightly reconciliation compares against
     * the provider's own statement.
     */
    public const SETTLEMENT = 'provider_settlement';

    /** The owner the platform's own accounts are kept under. */
    public const PLATFORM_OWNER = 'platform';

    /** The directions an entry may move in. Anything else is invisible to balance(). */
    private const DIRECTIONS = ['debit', 'credit'];

    /**
     * Post one entry. The idempotency key makes a retried webhook or a
     * double-tapped Pay button write the row once.
     *
     * The key is enforced by a unique index, so the read-then-write below is
     * racy by construction: two workers posting the same key both miss on the
     * read and both insert. The loser is handed the winner's row rather than a
     * database exception, because the caller that loses is usually inside a
     * confirmation whose whole transaction would otherwise unwind.
     */
    public function post(
        string $account,
        string $ownerUserId,
        string $direction,
        int $amountPaise,
        string $kind,
        string $idempotencyKey,
        ?string $sessionId = null,
        ?string $packageId = null,
        ?string $description = null,
        ?string $reference = null,
    ): LedgerEntry {
        if (! in_array($direction, self::DIRECTIONS, true)) {
            throw new \InvalidArgumentException(
                sprintf('A ledger entry moves in a named direction, not "%s".', $direction),
            );
        }

        if ($amountPaise <= 0) {
            throw new \InvalidArgumentException(
                sprintf('A ledger entry is a positive amount of paise, not %d.', $amountPaise),
            );
        }

        $attributes = [
            'account' => $account,
            'owner_user_id' => $ownerUserId,
            'session_id' => $sessionId,
            'package_id' => $packageId,
            'direction' => $direction,
            'amount_paise' => $amountPaise,
            'kind' => $kind,
            'reference' => $reference,
            'description' => $description,
            'occurred_at' => now(),
        ];

        $existing = LedgerEntry::where('idempotency_key', $idempotencyKey)->first();

        if ($existing) {
            return $existing;
        }

        try {
            return LedgerEntry::create($attributes + ['idempotency_key' => $idempotencyKey]);
        } catch (UniqueConstraintViolationException) {
            // Another worker committed this key between the read above and the
            // insert. Their row is the one that counts; hand it back.
            return LedgerEntry::where('idempotency_key', $idempotencyKey)->sole();
        }
    }

    /** Credits minus debits on one account, in paise. */
    public function balance(string $ownerUserId, string $account): int
    {
        $rows = LedgerEntry::where('owner_user_id', $ownerUserId)
            ->where('account', $account)
            ->selectRaw('direction, SUM(amount_paise) AS total')
            ->groupBy('direction')
            ->pluck('total', 'direction');

        return (int) ($rows['credit'] ?? 0) - (int) ($rows['debit'] ?? 0);
    }

    /**
     * The family's money screen: what is spent, what is still held against
     * classes that have not happened, and what each line means in plain words.
     *
     * Every figure is a sum over the ledger, including spend — reading it off
     * `nxt_packages.amount_paise` made the statement unreconcilable, and moved
     * the moment somebody edited a package row.
     *
     * `held_paise` is reported as it is, negative included. A held balance below
     * zero means something released twice, and that is the loudest signal the
     * reconciliation has; flooring it at zero shows the family a clean number
     * over a corrupt account.
     */
    public function familyWallet(string $studentUserId): array
    {
        $packages = Package::where('student_user_id', $studentUserId)->get();

        return [
            'spent_paise' => $this->spent($studentUserId),
            'held_paise' => $this->balance($studentUserId, self::HELD),
            'balance_paise' => $this->balance($studentUserId, self::WALLET),
            'packages' => $packages->map(fn (Package $p): array => [
                'id' => $p->id,
                'tutor_user_id' => $p->tutor_user_id,
                'subject' => $p->subject,
                'sessions_total' => $p->sessions_total,
                'sessions_used' => $p->sessions_used,
                'sessions_left' => max(0, $p->sessions_total - $p->sessions_used),
                'rate_paise' => $p->rate_paise,
                'amount_paise' => $p->amount_paise,
                'status' => $p->status,
                'purchased_at' => $p->purchased_at?->toIso8601String(),
            ])->all(),
            'entries' => $this->entries($studentUserId),
        ];
    }

    /**
     * The tutor's money screen. Payable is what confirmed classes have earned
     * and not yet paid out; held is what is waiting on a parent's confirmation
     * or an open dispute, which is the number tutors most often ask about.
     *
     * Earnings and commission are the amounts the ledger actually moved, not
     * the fee columns on the session rows they settled — a fee edited after the
     * fact cannot make the earnings card disagree with the money. The month is
     * still the month the classes ran in, because that is the statement a tutor
     * is reading.
     */
    public function tutorEarnings(string $tutorUserId): array
    {
        $monthStart = now()->startOfMonth();
        $monthEnd = now()->endOfMonth();

        $awaiting = TutoringSession::where('tutor_user_id', $tutorUserId)
            ->whereIn('status', ['checked_out', 'disputed'])
            ->get();

        // Everything that reached an ending this month: confirmed classes, plus
        // the ones that were called off or not attended and still moved money.
        $settledThisMonth = TutoringSession::where('tutor_user_id', $tutorUserId)
            ->whereIn('status', ['confirmed', 'cancelled', 'no_show'])
            ->whereBetween('starts_at', [$monthStart, $monthEnd])
            ->pluck('id');

        $confirmedThisMonth = TutoringSession::where('tutor_user_id', $tutorUserId)
            ->where('status', 'confirmed')
            ->whereBetween('starts_at', [$monthStart, $monthEnd])
            ->count();

        $pending = (int) $awaiting->sum(fn (TutoringSession $s): int => $s->fee_paise - $s->commission_paise);

        return [
            'earned_this_month_paise' => $this->creditedForSessions($tutorUserId, self::TUTOR_PAYABLE, $settledThisMonth),
            'pending_paise' => $pending,
            'payable_paise' => $this->balance($tutorUserId, self::TUTOR_PAYABLE),
            'commission_this_month_paise' => $this->creditedForSessions($tutorUserId, self::COMMISSION, $settledThisMonth),
            'sessions_done_this_month' => $confirmedThisMonth,
            'sessions_awaiting_confirmation' => $awaiting->count(),
            'entries' => $this->entries($tutorUserId),
        ];
    }

    /**
     * @return list<array<string,mixed>> the transaction list, newest first
     */
    public function entries(string $ownerUserId, int $limit = 50): array
    {
        return LedgerEntry::where('owner_user_id', $ownerUserId)
            ->orderByDesc('occurred_at')
            ->limit($limit)
            ->get()
            ->map(fn (LedgerEntry $e): array => [
                'id' => $e->id,
                'account' => $e->account,
                'kind' => $e->kind,
                'direction' => $e->direction,
                'amount_paise' => $e->amount_paise,
                'description' => $e->description ?? self::describe($e->kind),
                'session_id' => $e->session_id,
                'package_id' => $e->package_id,
                'occurred_at' => $e->occurred_at?->toIso8601String(),
            ])
            ->all();
    }

    /**
     * Money in: a completed payment credits the family's wallet, keyed on the
     * provider's own event id so a redelivered webhook credits once.
     *
     * This is the first movement in the life of every rupee the module handles,
     * and the only write allowed to create wallet money. Everything downstream —
     * the hold a class takes, the solvency check that hold passes — is a move
     * between accounts that this credit funded.
     */
    public function recordPurchase(
        string $studentUserId,
        int $amountPaise,
        string $providerEventId,
        ?string $packageId = null,
        ?string $description = null,
    ): LedgerEntry {
        return DB::transaction(function () use ($studentUserId, $amountPaise, $providerEventId, $packageId, $description): LedgerEntry {
            // Where the money came from. Without this leg a purchase is value
            // appearing out of nothing, and the books only balance as long as
            // nobody pays anything in.
            $this->post(
                self::SETTLEMENT, self::PLATFORM_OWNER, 'debit', $amountPaise, 'package_purchase',
                'settlement:'.$providerEventId, packageId: $packageId,
                description: $description ?? 'Package purchased',
                reference: $providerEventId,
            );

            return $this->post(
                self::WALLET, $studentUserId, 'credit', $amountPaise, 'package_purchase',
                'purchase:'.$providerEventId, packageId: $packageId,
                description: $description ?? 'Package purchased',
                reference: $providerEventId,
            );
        });
    }

    /**
     * Money out: paying a tutor debits what they were owed.
     *
     * Without this leg `tutor_payable` only ever climbs, and a tutor already
     * paid by bank transfer still reads as owed the same amount — so Friday's
     * run pays it again. The key belongs to the payout run, not to the tutor,
     * so re-running a payout batch pays once.
     */
    public function payOut(string $tutorUserId, int $amountPaise, string $idempotencyKey, ?string $reference = null): LedgerEntry
    {
        return $this->post(
            self::TUTOR_PAYABLE, $tutorUserId, 'debit', $amountPaise, 'payout',
            $idempotencyKey, description: 'Paid out', reference: $reference,
        );
    }

    /**
     * Hold a session's fee when it is scheduled and release it on confirmation.
     * Both halves are posted here so the pair cannot drift apart.
     *
     * A hold is a move, so it is two entries: the fee leaves the family's
     * available balance and arrives in `held`. One credit with no matching
     * debit left the available balance untouched by scheduling every class a
     * family owns, and put the books +fee out of balance per scheduled class.
     */
    public function holdForSession(TutoringSession $session, string $studentUserId): void
    {
        if ($session->fee_paise <= 0) {
            return;
        }

        DB::transaction(function () use ($session, $studentUserId): void {
            $this->post(
                self::WALLET, $studentUserId, 'debit', $session->fee_paise, 'hold',
                'hold-wallet:'.$session->id, $session->id, $session->package_id,
                'Moved into hold for the class on '.$session->starts_at?->format('D j M'),
            );

            $this->post(
                self::HELD, $studentUserId, 'credit', $session->fee_paise, 'hold',
                'hold:'.$session->id, $session->id, $session->package_id,
                'Held for the class on '.$session->starts_at?->format('D j M'),
            );
        });
    }

    /**
     * The hold, released to the people it was held for: the tutor's share and
     * the platform's commission. Called when a class is confirmed.
     */
    public function releaseForSession(TutoringSession $session, string $studentUserId): void
    {
        if ($session->fee_paise <= 0) {
            return;
        }

        DB::transaction(function () use ($session, $studentUserId): void {
            $payable = $session->fee_paise - $session->commission_paise;

            $this->post(
                self::HELD, $studentUserId, 'debit', $session->fee_paise, 'release',
                'release:'.$session->id, $session->id, $session->package_id,
                'Class completed and confirmed',
            );

            if ($payable > 0) {
                $this->post(
                    self::TUTOR_PAYABLE, $session->tutor_user_id, 'credit', $payable, 'release',
                    'payable:'.$session->id, $session->id, $session->package_id,
                    'Class on '.$session->starts_at?->format('D j M').' confirmed',
                );
            }

            if ($session->commission_paise > 0) {
                $this->post(
                    self::COMMISSION, $session->tutor_user_id, 'credit', $session->commission_paise, 'commission',
                    'commission:'.$session->id, $session->id, $session->package_id,
                    'Platform commission',
                );
            }
        });
    }

    /**
     * Give a session's hold back to the family's available balance.
     *
     * The mirror of holdForSession, used by every ending that is not a
     * confirmation: a free cancellation, the unused half of a late one, a tutor
     * who did not arrive, a dispute resolved for the family. `$amountPaise` is
     * what comes back, which is not always the whole fee.
     */
    public function releaseHoldToWallet(
        TutoringSession $session,
        string $studentUserId,
        int $amountPaise,
        string $keySuffix,
        string $description,
    ): void {
        if ($amountPaise <= 0) {
            return;
        }

        DB::transaction(function () use ($session, $studentUserId, $amountPaise, $keySuffix, $description): void {
            $this->post(
                self::HELD, $studentUserId, 'debit', $amountPaise, 'release',
                $keySuffix.'-held:'.$session->id, $session->id, $session->package_id,
                $description,
            );

            $this->post(
                self::WALLET, $studentUserId, 'credit', $amountPaise, 'refund',
                $keySuffix.'-wallet:'.$session->id, $session->id, $session->package_id,
                $description,
            );
        });
    }

    /**
     * Move a session's hold to the tutor, with commission taken or waived.
     *
     * The paths that pay a tutor for a class that did not run — a late
     * cancellation, a family no-show, a platform failure — differ only in how
     * much moves and whether the platform takes its cut, so they share one
     * writer rather than each posting their own pair of legs.
     */
    public function settleHoldToTutor(
        TutoringSession $session,
        int $amountPaise,
        int $commissionPaise,
        string $kind,
        string $keySuffix,
        string $description,
    ): void {
        if ($amountPaise <= 0) {
            return;
        }

        DB::transaction(function () use ($session, $amountPaise, $commissionPaise, $kind, $keySuffix, $description): void {
            $this->post(
                self::HELD, $session->student_user_id, 'debit', $amountPaise, 'release',
                $keySuffix.'-held:'.$session->id, $session->id, $session->package_id,
                $description,
            );

            $toTutor = $amountPaise - $commissionPaise;

            if ($toTutor > 0) {
                $this->post(
                    self::TUTOR_PAYABLE, $session->tutor_user_id, 'credit', $toTutor, $kind,
                    $keySuffix.'-payable:'.$session->id, $session->id, $session->package_id,
                    $description,
                );
            }

            if ($commissionPaise > 0) {
                $this->post(
                    self::COMMISSION, $session->tutor_user_id, 'credit', $commissionPaise, 'commission',
                    $keySuffix.'-commission:'.$session->id, $session->id, $session->package_id,
                    'Platform commission',
                );
            }
        });
    }

    /**
     * Refuse to hold more than the family has paid in.
     *
     * A hold is a move out of the available balance, so a balance that cannot
     * cover it means the class is being scheduled against money the ledger has
     * no record of receiving. Replays are exempt: a hold already posted under
     * this key is not a second claim on the wallet.
     */
    public function assertCanHold(string $studentUserId, TutoringSession|int $feeOrSession, ?string $sessionId = null): void
    {
        $fee = $feeOrSession instanceof TutoringSession ? $feeOrSession->fee_paise : $feeOrSession;
        $id = $feeOrSession instanceof TutoringSession ? $feeOrSession->id : $sessionId;

        if ($fee <= 0) {
            return;
        }

        if ($id !== null && LedgerEntry::where('idempotency_key', 'hold:'.$id)->exists()) {
            return;
        }

        if ($this->balance($studentUserId, self::WALLET) < $fee) {
            throw ValidationException::withMessages([
                'wallet' => 'There is not enough in the wallet to hold this class.',
            ]);
        }
    }

    /** What a family has put into the wallet, from the purchase entries themselves. */
    private function spent(string $studentUserId): int
    {
        return (int) LedgerEntry::where('owner_user_id', $studentUserId)
            ->where('kind', 'package_purchase')
            ->sum('amount_paise');
    }

    /** @param \Illuminate\Support\Collection<int,string> $sessionIds */
    private function creditedForSessions(string $ownerUserId, string $account, $sessionIds): int
    {
        if ($sessionIds->isEmpty()) {
            return 0;
        }

        return (int) LedgerEntry::where('owner_user_id', $ownerUserId)
            ->where('account', $account)
            ->where('direction', 'credit')
            ->whereIn('session_id', $sessionIds)
            ->sum('amount_paise');
    }

    public static function describe(string $kind): string
    {
        return match ($kind) {
            'package_purchase' => 'Package purchased',
            'hold' => 'Held for a scheduled class',
            'release' => 'Released after the class was confirmed',
            'commission' => 'Platform commission',
            'payout' => 'Paid out',
            'refund' => 'Refunded',
            'cancellation_fee' => 'Late cancellation charge',
            default => 'Adjustment',
        };
    }
}
