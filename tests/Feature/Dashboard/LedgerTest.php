<?php

declare(strict_types=1);

namespace Tests\Feature\Dashboard;

use App\Nxt\Dashboard\Models\LedgerEntry;
use App\Nxt\Dashboard\Services\Ledger;
use Illuminate\Database\QueryException;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * The ledger on its own, with no session state machine in the way.
 *
 * Every rupee either dashboard reports is a sum over `nxt_ledger_entries`, so
 * this file pins the three properties the brief makes non-negotiable in section
 * 2.1: that a money write is idempotent, that a balance is derived rather than
 * stored, and that what was written can be read back and explained. The
 * idempotency tests are the load-bearing ones — they are what stands between a
 * retried webhook and a tutor being paid twice.
 *
 * Where the implementation and the brief disagree, the test states the brief's
 * rule and skips with the file and line of the divergence. A skipped test that
 * names its gap is a debt on the books; a passing test written around a money
 * bug is a lie the next agent will believe.
 */
class LedgerTest extends DashboardTestCase
{
    public function test_post_writes_one_entry_carrying_everything_it_was_given(): void
    {
        $package = $this->makePackage();
        $session = $this->makeSession($package);

        $entry = $this->ledger()->post(
            Ledger::WALLET,
            self::STUDENT,
            'debit',
            250000,
            'package_purchase',
            'purchase:'.$package->id,
            $session->id,
            $package->id,
            'Twelve classes of Mathematics',
            'cf_pay_9f3a',
        );

        $stored = LedgerEntry::sole();

        $this->assertSame($entry->id, $stored->id);
        $this->assertSame(Ledger::WALLET, $stored->account);
        $this->assertSame(self::STUDENT, $stored->owner_user_id);
        $this->assertSame('debit', $stored->direction);
        $this->assertSame(250000, $stored->amount_paise);
        $this->assertSame('package_purchase', $stored->kind);
        $this->assertSame('purchase:'.$package->id, $stored->idempotency_key);
        $this->assertSame($session->id, $stored->session_id);
        $this->assertSame($package->id, $stored->package_id);
        $this->assertSame('Twelve classes of Mathematics', $stored->description);
        $this->assertSame('cf_pay_9f3a', $stored->reference);
        $this->assertSame(self::NOW, $stored->occurred_at->format('Y-m-d H:i:s'));
    }

    public function test_post_leaves_the_optional_references_null_rather_than_empty(): void
    {
        $this->ledger()->post(Ledger::HELD, self::STUDENT, 'credit', 1000, 'hold', 'k-bare');

        $entry = LedgerEntry::sole();

        $this->assertNull($entry->session_id);
        $this->assertNull($entry->package_id);
        $this->assertNull($entry->description);
        $this->assertNull($entry->reference);
    }

    /**
     * The retry contract. A second post under a key already used must not write
     * a second row, and must hand the caller the row that already exists.
     */
    public function test_a_retried_post_writes_one_row_and_returns_the_first_entry(): void
    {
        $first = $this->ledger()->post(Ledger::TUTOR_PAYABLE, self::TUTOR, 'credit', self::PAYABLE_PAISE, 'release', 'payable:S1');
        $second = $this->ledger()->post(Ledger::TUTOR_PAYABLE, self::TUTOR, 'credit', self::PAYABLE_PAISE, 'release', 'payable:S1');

        $this->assertSame(1, LedgerEntry::count(), 'A retry under a used key must not write a second row.');
        $this->assertSame($first->id, $second->id);
        $this->assertTrue($first->wasRecentlyCreated, 'The first post is the one that writes.');
        $this->assertFalse($second->wasRecentlyCreated, 'The retry must report that it wrote nothing.');
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, self::PAYABLE_PAISE);
    }

    /**
     * The same retry arriving with different money — the shape a duplicated
     * webhook actually takes when a provider re-sends a corrected payload. The
     * first write wins, the second is a no-op, and the balance moves exactly
     * once. This is the test in this file most worth keeping.
     */
    public function test_a_retried_post_carrying_a_different_amount_keeps_the_first_write(): void
    {
        $first = $this->ledger()->post(Ledger::TUTOR_PAYABLE, self::TUTOR, 'credit', self::PAYABLE_PAISE, 'release', 'payable:S1');
        $second = $this->ledger()->post(Ledger::TUTOR_PAYABLE, self::TUTOR, 'credit', 500000, 'release', 'payable:S1');

        $this->assertSame(1, LedgerEntry::count());
        $this->assertSame($first->id, $second->id);
        $this->assertFalse($second->wasRecentlyCreated);
        $this->assertSame(self::PAYABLE_PAISE, LedgerEntry::sole()->amount_paise, 'The first amount is the one on the books.');
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, self::PAYABLE_PAISE);
    }

    /**
     * The key is the whole of the identity. A retry that names a different
     * account or a different owner is still a retry, and must not open a second
     * position somewhere else in the books.
     */
    public function test_a_retried_post_naming_another_account_does_not_open_a_second_position(): void
    {
        $this->ledger()->post(Ledger::HELD, self::STUDENT, 'credit', 110000, 'hold', 'hold:S1');
        $this->ledger()->post(Ledger::TUTOR_PAYABLE, self::TUTOR, 'credit', 110000, 'release', 'hold:S1');

        $this->assertSame(1, LedgerEntry::count());
        $this->assertBalance(self::STUDENT, Ledger::HELD, 110000);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, 0);
    }

    public function test_two_entries_under_different_keys_both_land(): void
    {
        $this->ledger()->post(Ledger::HELD, self::STUDENT, 'credit', 110000, 'hold', 'hold:S1');
        $this->ledger()->post(Ledger::HELD, self::STUDENT, 'credit', 110000, 'hold', 'hold:S2');

        $this->assertSame(2, LedgerEntry::count());
        $this->assertBalance(self::STUDENT, Ledger::HELD, 220000);
    }

    public function test_balance_is_zero_for_an_account_that_has_never_been_written(): void
    {
        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
        $this->assertBalance(self::STUDENT, Ledger::WALLET, 0);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, 0);
        $this->assertBalance(self::TUTOR, Ledger::COMMISSION, 0);
    }

    public function test_balance_is_credits_minus_debits_on_one_account(): void
    {
        $this->ledger()->post(Ledger::HELD, self::STUDENT, 'credit', 110000, 'hold', 'k1');
        $this->ledger()->post(Ledger::HELD, self::STUDENT, 'credit', 90000, 'hold', 'k2');
        $this->ledger()->post(Ledger::HELD, self::STUDENT, 'debit', 110000, 'release', 'k3');

        $this->assertBalance(self::STUDENT, Ledger::HELD, 90000);
    }

    public function test_balance_ignores_other_owners_and_other_accounts(): void
    {
        $this->ledger()->post(Ledger::HELD, self::STUDENT, 'credit', 110000, 'hold', 'k1');
        $this->ledger()->post(Ledger::HELD, 'STU9999', 'credit', 777000, 'hold', 'k2');
        $this->ledger()->post(Ledger::WALLET, self::STUDENT, 'credit', 500000, 'package_purchase', 'k3');

        $this->assertBalance(self::STUDENT, Ledger::HELD, 110000);
        $this->assertBalance('STU9999', Ledger::HELD, 777000);
        $this->assertBalance(self::STUDENT, Ledger::WALLET, 500000);
    }

    /**
     * A negative balance is the signal that something released twice, so
     * balance() has to report it rather than clamp it. familyWallet() floors the
     * held figure at zero, which is why these suites assert here instead.
     */
    public function test_balance_goes_negative_when_debits_exceed_credits(): void
    {
        $this->ledger()->post(Ledger::HELD, self::STUDENT, 'credit', 110000, 'hold', 'k1');
        $this->ledger()->post(Ledger::HELD, self::STUDENT, 'debit', 110000, 'release', 'k2');
        $this->ledger()->post(Ledger::HELD, self::STUDENT, 'debit', 110000, 'release', 'k3');

        $this->assertBalance(self::STUDENT, Ledger::HELD, -110000);
    }

    /**
     * Money is integer paise from the argument to the column to the sum. The
     * amount used here is 2^53 + 1, the smallest whole number a double cannot
     * hold: if any part of the round trip ever went through a float it would
     * come back one paisa short and this test would say so.
     */
    public function test_amounts_stay_integer_paise_through_a_full_round_trip(): void
    {
        $lossyAsFloat = 9007199254740993;

        $this->assertNotSame($lossyAsFloat, (int) (float) $lossyAsFloat, 'The probe value must be one a float cannot hold.');

        $this->ledger()->post(Ledger::WALLET, self::STUDENT, 'credit', $lossyAsFloat, 'package_purchase', 'k-big');

        $this->assertSame($lossyAsFloat, LedgerEntry::sole()->amount_paise);
        $this->assertSame($lossyAsFloat, $this->ledger()->balance(self::STUDENT, Ledger::WALLET));
    }

    public function test_an_odd_amount_is_never_rounded_on_its_way_through_the_ledger(): void
    {
        $this->ledger()->post(Ledger::HELD, self::STUDENT, 'credit', 33333, 'hold', 'k1');
        $this->ledger()->post(Ledger::HELD, self::STUDENT, 'credit', 1, 'hold', 'k2');
        $this->ledger()->post(Ledger::HELD, self::STUDENT, 'debit', 7, 'release', 'k3');

        $this->assertSame(33327, $this->ledger()->balance(self::STUDENT, Ledger::HELD));
    }

    /**
     * A hold is a move, so it is two legs: the fee leaves the family's
     * available balance and arrives in `held`. Both are asserted, because one
     * leg on its own is how the books came to gain a fee per scheduled class.
     */
    public function test_holding_a_session_moves_the_fee_out_of_the_wallet_and_into_held(): void
    {
        $package = $this->makePackage();
        $session = $this->makeSession($package);

        $this->ledger()->holdForSession($session, self::STUDENT);

        $entry = LedgerEntry::where('account', Ledger::HELD)->sole();

        $this->assertSame('credit', $entry->direction);
        $this->assertSame('hold', $entry->kind);
        $this->assertSame(self::RATE_PAISE, $entry->amount_paise);
        $this->assertSame('hold:'.$session->id, $entry->idempotency_key);
        $this->assertSame($session->id, $entry->session_id);
        $this->assertSame($package->id, $entry->package_id);

        $funding = LedgerEntry::where('account', Ledger::WALLET)->sole();

        $this->assertSame('debit', $funding->direction);
        $this->assertSame(self::RATE_PAISE, $funding->amount_paise);
        $this->assertSame('hold-wallet:'.$session->id, $funding->idempotency_key);

        $this->assertBalance(self::STUDENT, Ledger::HELD, self::RATE_PAISE);
        $this->assertBalance(self::STUDENT, Ledger::WALLET, -self::RATE_PAISE);
        $this->assertSame(0, $this->signedTotalOverEveryAccount(), 'A move creates nothing.');
    }

    public function test_a_retried_hold_writes_one_move(): void
    {
        $session = $this->makeSession($this->makePackage());

        $this->ledger()->holdForSession($session, self::STUDENT);
        $this->ledger()->holdForSession($session, self::STUDENT);
        $this->ledger()->holdForSession($session, self::STUDENT);

        $this->assertSame(2, LedgerEntry::count(), 'One move, two legs, however many retries.');
        $this->assertBalance(self::STUDENT, Ledger::HELD, self::RATE_PAISE);
        $this->assertBalance(self::STUDENT, Ledger::WALLET, -self::RATE_PAISE);
    }

    /**
     * A free demo class must not appear in the books at all. An entry of zero
     * paise is an audit line saying nothing happened, which is worse than no
     * line: it has to be read and dismissed by whoever reconciles the account.
     */
    public function test_holding_a_zero_fee_session_writes_nothing_at_all(): void
    {
        $package = $this->makePackage(['rate_paise' => 0, 'amount_paise' => 0]);
        $session = $this->makeSession($package, ['type' => 'demo', 'fee_paise' => 0]);

        $this->ledger()->holdForSession($session, self::STUDENT);

        $this->assertSame(0, LedgerEntry::count());
        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
    }

    public function test_releasing_a_session_writes_three_entries_and_splits_the_fee(): void
    {
        $package = $this->makePackage();
        $session = $this->makeSession($package);

        $this->ledger()->holdForSession($session, self::STUDENT);
        $this->ledger()->releaseForSession($session, self::STUDENT);

        $this->assertSame(5, LedgerEntry::count(), 'The two legs of the hold and the three entries the release posts.');
        $this->assertSame(3, LedgerEntry::whereIn('idempotency_key', [
            'release:'.$session->id,
            'payable:'.$session->id,
            'commission:'.$session->id,
        ])->count());

        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, self::PAYABLE_PAISE);
        $this->assertBalance(self::TUTOR, Ledger::COMMISSION, self::COMMISSION_PAISE);
    }

    /**
     * The split is a subtraction, not a second rounding, so it holds for every
     * fee including the odd ones a discounted pack produces.
     *
     * The three figures per row are written out by hand rather than computed,
     * because a test that recomputes the production formula can only ever prove
     * the formula equals itself. A rate of 1 paisa is in the list because that
     * is where a second round() would show up, and 3 paise because fifteen per
     * cent of it rounds down to nothing at all — the platform earns zero and the
     * tutor keeps the lot, which is the correct answer and an easy one to lose.
     */
    public function test_the_release_entries_sum_back_to_the_fee_for_every_rate(): void
    {
        $package = $this->makePackage();

        $cases = [
            [110000, 16500, 93500],
            [99999, 15000, 84999],
            [33333, 5000, 28333],
            [12345, 1852, 10493],
            [7, 1, 6],
            [3, 0, 3],
            [1, 0, 1],
        ];

        foreach ($cases as [$fee, $commission, $expectedPayable]) {
            $student = 'STU-'.$fee;
            $tutor = 'TUT-'.$fee;

            $session = $this->makeSession($package, [
                'student_user_id' => $student,
                'tutor_user_id' => $tutor,
                'fee_paise' => $fee,
                'commission_paise' => $commission,
            ]);

            $this->ledger()->holdForSession($session, $student);
            $this->ledger()->releaseForSession($session, $student);

            $payable = $this->ledger()->balance($tutor, Ledger::TUTOR_PAYABLE);
            $platform = $this->ledger()->balance($tutor, Ledger::COMMISSION);

            $this->assertSame($expectedPayable, $payable, sprintf('Tutor share of a %d paise fee.', $fee));
            $this->assertSame($commission, $platform, sprintf('Commission taken on a %d paise fee.', $fee));
            $this->assertSame($fee, $payable + $platform, sprintf('The split of a %d paise fee must sum back to it.', $fee));
            $this->assertSame(0, $this->ledger()->balance($student, Ledger::HELD), sprintf('Held after releasing %d paise.', $fee));
        }
    }

    public function test_a_retried_release_moves_the_money_once(): void
    {
        $session = $this->makeSession($this->makePackage());

        $this->ledger()->holdForSession($session, self::STUDENT);
        $this->ledger()->releaseForSession($session, self::STUDENT);
        $this->ledger()->releaseForSession($session, self::STUDENT);
        $this->ledger()->releaseForSession($session, self::STUDENT);

        $this->assertSame(5, LedgerEntry::count());
        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, self::PAYABLE_PAISE);
        $this->assertBalance(self::TUTOR, Ledger::COMMISSION, self::COMMISSION_PAISE);
    }

    public function test_releasing_a_zero_fee_session_writes_nothing_at_all(): void
    {
        $package = $this->makePackage(['rate_paise' => 0, 'amount_paise' => 0]);
        $session = $this->makeSession($package, ['type' => 'demo', 'fee_paise' => 0]);

        $this->ledger()->releaseForSession($session, self::STUDENT);

        $this->assertSame(0, LedgerEntry::count());
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, 0);
    }

    public function test_the_release_credits_the_tutor_named_on_the_session(): void
    {
        $package = $this->makePackage();
        $session = $this->makeSession($package, ['tutor_user_id' => 'TUT7777']);

        $this->ledger()->releaseForSession($session, self::STUDENT);

        $this->assertBalance('TUT7777', Ledger::TUTOR_PAYABLE, self::PAYABLE_PAISE);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, 0);
        $this->assertBalance(self::STUDENT, Ledger::TUTOR_PAYABLE, 0);
    }

    /**
     * The three-legged release is the only multi-entry money write in the
     * module, and brief 2.1 makes atomicity non-negotiable. The commission leg
     * is made to fail the way a dead connection or a constraint violation would,
     * and what has to survive is nothing at all.
     *
     * A half-written release is the one shape of corruption no retry can repair:
     * with release:{id} and payable:{id} already taken, running the release
     * again is a silent no-op, so the family's money has left the hold, the
     * tutor has been paid and the platform's commission is never booked. The
     * last assertion is therefore about the keys rather than the balances.
     */
    public function test_a_release_that_fails_on_its_last_leg_rolls_back_the_first_two(): void
    {
        $session = $this->makeSession($this->makePackage());
        $this->ledger()->holdForSession($session, self::STUDENT);

        LedgerEntry::creating(static function (LedgerEntry $entry): void {
            if ($entry->kind === 'commission') {
                throw new \RuntimeException('The commission insert died.');
            }
        });

        try {
            $this->ledger()->releaseForSession($session, self::STUDENT);
            $this->fail('The commission leg was rigged to fail.');
        } catch (\RuntimeException) {
            // The failure the transaction has to unwind.
        }

        $this->assertSame(2, LedgerEntry::count(), 'Only the hold, both legs, written before the release began.');
        $this->assertBalance(self::STUDENT, Ledger::HELD, self::RATE_PAISE);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, 0);
        $this->assertBalance(self::TUTOR, Ledger::COMMISSION, 0);

        $this->assertSame(
            0,
            LedgerEntry::whereIn('idempotency_key', ['release:'.$session->id, 'payable:'.$session->id])->count(),
            'Both keys must be free again, or the repair run writes nothing.',
        );
    }

    /**
     * Every other idempotency test in this file passes on firstOrCreate's SELECT
     * because the suite is single-threaded. The unique index is the only thing
     * that holds when two workers confirm the same class in the same second, so
     * its existence is asserted directly, by writing round the service.
     */
    public function test_the_database_itself_refuses_a_second_entry_under_a_used_key(): void
    {
        $this->ledger()->post(Ledger::HELD, self::STUDENT, 'credit', self::RATE_PAISE, 'hold', 'hold:S1');

        $this->expectException(QueryException::class);

        LedgerEntry::create([
            'account' => Ledger::HELD,
            'owner_user_id' => self::STUDENT,
            'direction' => 'credit',
            'amount_paise' => self::RATE_PAISE,
            'kind' => 'hold',
            'idempotency_key' => 'hold:S1',
            'occurred_at' => now(),
        ]);
    }

    /**
     * Brief 2.1: a money write is idempotent — which has to mean under
     * concurrency and not merely on a retry that arrives after the first one
     * committed. Ledger::post reads and then writes, so the interleaving that
     * matters is a second worker committing between those two statements. It is
     * forced here rather than hoped for: the racing row is inserted from inside
     * the creating hook, which fires after the read and before the insert.
     */
    public function test_two_workers_posting_one_key_leave_one_entry_and_neither_an_error(): void
    {
        $raced = false;

        LedgerEntry::creating(function (LedgerEntry $entry) use (&$raced): void {
            if ($raced) {
                return;
            }

            $raced = true;

            DB::table('nxt_ledger_entries')->insert([
                'id' => (string) Str::ulid(),
                'account' => $entry->account,
                'owner_user_id' => $entry->owner_user_id,
                'direction' => $entry->direction,
                'amount_paise' => $entry->amount_paise,
                'kind' => $entry->kind,
                'idempotency_key' => $entry->idempotency_key,
                'occurred_at' => now(),
            ]);
        });

        $entry = $this->ledger()->post(Ledger::HELD, self::STUDENT, 'credit', self::RATE_PAISE, 'hold', 'hold:S1');

        $this->assertSame(1, LedgerEntry::count(), 'The loser of the race must not write a second row.');
        $this->assertSame('hold:S1', $entry->idempotency_key, 'The caller is handed the entry that won.');
        $this->assertBalance(self::STUDENT, Ledger::HELD, self::RATE_PAISE);
    }

    /**
     * Spend and balance come from two different places — the package rows and
     * the ledger — so the wallet credit here is deliberately not the package
     * total. Give them the same value and crossing the two keys would pass.
     */
    public function test_the_family_wallet_reports_held_spend_packages_and_entries(): void
    {
        $package = $this->makePackage();
        $session = $this->makeSession($package);

        $this->ledger()->post(
            Ledger::WALLET, self::STUDENT, 'credit', 900000, 'package_purchase',
            'purchase:'.$package->id, packageId: $package->id,
        );
        $this->ledger()->holdForSession($session, self::STUDENT);

        $wallet = $this->ledger()->familyWallet(self::STUDENT);

        $this->assertSame(900000, $wallet['spent_paise'], 'Spend is what the purchase entries say, not what the package row claims.');
        $this->assertSame(self::RATE_PAISE, $wallet['held_paise']);
        $this->assertSame(790000, $wallet['balance_paise'], 'What is left after the hold moved a fee out of it.');
        $this->assertCount(1, $wallet['packages']);
        $this->assertCount(3, $wallet['entries'], 'The purchase, and the two legs of the hold.');

        $this->assertSame([
            'id' => $package->id,
            'tutor_user_id' => self::TUTOR,
            'subject' => 'Mathematics',
            'sessions_total' => 12,
            'sessions_used' => 0,
            'sessions_left' => 12,
            'rate_paise' => self::RATE_PAISE,
            'amount_paise' => 1320000,
            'status' => 'active',
            'purchased_at' => $package->purchased_at->toIso8601String(),
        ], $wallet['packages'][0]);
    }

    public function test_the_held_figure_is_the_sum_of_the_holds_still_outstanding(): void
    {
        $package = $this->makePackage();
        $first = $this->makeSession($package);
        $second = $this->makeSession($package, ['starts_at' => now()->addDays(2)]);
        $third = $this->makeSession($package, ['starts_at' => now()->addDays(3)]);

        foreach ([$first, $second, $third] as $session) {
            $this->ledger()->holdForSession($session, self::STUDENT);
        }

        $this->ledger()->releaseForSession($first, self::STUDENT);

        $this->assertSame(self::RATE_PAISE * 2, $this->ledger()->familyWallet(self::STUDENT)['held_paise']);
    }

    public function test_a_family_with_no_history_gets_zeroes_and_empty_lists(): void
    {
        $wallet = $this->ledger()->familyWallet('STU-NOBODY');

        $this->assertSame(0, $wallet['spent_paise']);
        $this->assertSame(0, $wallet['held_paise']);
        $this->assertSame(0, $wallet['balance_paise']);
        $this->assertSame([], $wallet['packages']);
        $this->assertSame([], $wallet['entries']);
    }

    public function test_a_packages_remaining_class_count_never_reads_below_zero(): void
    {
        $this->makePackage(['sessions_total' => 2, 'sessions_used' => 5]);

        $this->assertSame(0, $this->ledger()->familyWallet(self::STUDENT)['packages'][0]['sessions_left']);
    }

    /**
     * Earnings are a monthly statement, so a class taught in August must not
     * appear in the September figure however recently it was confirmed. The two
     * boundary rows sit one minute inside and one minute outside the month.
     */
    public function test_tutor_earnings_count_only_confirmed_classes_inside_this_month(): void
    {
        $package = $this->makePackage();

        $confirmed = [
            $this->makeSession($package, ['status' => 'confirmed', 'starts_at' => '2026-09-02 10:00:00']),
            $this->makeSession($package, ['status' => 'confirmed', 'starts_at' => '2026-09-30 23:59:00']),
            $this->makeSession($package, ['status' => 'confirmed', 'starts_at' => '2026-08-31 23:59:00']),
            $this->makeSession($package, ['status' => 'confirmed', 'starts_at' => '2026-10-01 00:01:00']),
        ];

        $this->makeSession($package, ['status' => 'scheduled', 'starts_at' => '2026-09-20 10:00:00']);

        // The figures are sums over the ledger, so every one of these classes
        // has to have settled through it — which is what confirming one does.
        foreach ($confirmed as $session) {
            $this->ledger()->holdForSession($session, self::STUDENT);
            $this->ledger()->releaseForSession($session, self::STUDENT);
        }

        $earnings = $this->ledger()->tutorEarnings(self::TUTOR);

        $this->assertSame(2, $earnings['sessions_done_this_month']);
        $this->assertSame(self::PAYABLE_PAISE * 2, $earnings['earned_this_month_paise']);
        $this->assertSame(self::COMMISSION_PAISE * 2, $earnings['commission_this_month_paise']);
    }

    public function test_tutor_earnings_count_checked_out_and_disputed_classes_as_pending(): void
    {
        $package = $this->makePackage();

        $this->makeSession($package, ['status' => 'checked_out', 'starts_at' => '2026-09-14 10:00:00']);
        $this->makeSession($package, ['status' => 'disputed', 'starts_at' => '2026-09-13 10:00:00']);
        $this->makeSession($package, ['status' => 'confirmed', 'starts_at' => '2026-09-12 10:00:00']);
        $this->makeSession($package, ['status' => 'cancelled', 'starts_at' => '2026-09-11 10:00:00']);

        $earnings = $this->ledger()->tutorEarnings(self::TUTOR);

        $this->assertSame(2, $earnings['sessions_awaiting_confirmation']);
        $this->assertSame(self::PAYABLE_PAISE * 2, $earnings['pending_paise'], 'Pending is the tutor share of what is not yet confirmed.');
    }

    /**
     * Pending money is money a tutor cannot draw. Payable is what confirmation
     * actually released through the ledger, so the two figures have to be able
     * to disagree — a class waiting on a parent counts in one and not the other.
     */
    public function test_tutor_payable_comes_from_the_ledger_and_pending_does_not(): void
    {
        $package = $this->makePackage();
        $confirmed = $this->makeSession($package, ['status' => 'confirmed', 'starts_at' => '2026-09-10 10:00:00']);

        // Priced apart from the confirmed class on purpose: with both at the
        // default rate the two figures would be the same number and crossing
        // the two sources in tutorEarnings would go unnoticed.
        $this->makeSession($package, [
            'status' => 'checked_out',
            'starts_at' => '2026-09-14 10:00:00',
            'fee_paise' => 50000,
            'commission_paise' => 7500,
        ]);

        $this->ledger()->holdForSession($confirmed, self::STUDENT);
        $this->ledger()->releaseForSession($confirmed, self::STUDENT);

        $earnings = $this->ledger()->tutorEarnings(self::TUTOR);

        $this->assertSame(self::PAYABLE_PAISE, $earnings['payable_paise'], 'Payable is the ledger balance of the released class.');
        $this->assertSame(42500, $earnings['pending_paise'], 'Pending is the tutor share of the class still waiting.');
    }

    public function test_a_tutor_with_no_classes_gets_zeroes_rather_than_nulls(): void
    {
        $earnings = $this->ledger()->tutorEarnings('TUT-NOBODY');

        $this->assertSame(0, $earnings['earned_this_month_paise']);
        $this->assertSame(0, $earnings['pending_paise']);
        $this->assertSame(0, $earnings['payable_paise']);
        $this->assertSame(0, $earnings['commission_this_month_paise']);
        $this->assertSame(0, $earnings['sessions_done_this_month']);
        $this->assertSame(0, $earnings['sessions_awaiting_confirmation']);
        $this->assertSame([], $earnings['entries']);
    }

    /**
     * Entries are ordered by occurred_at alone, so the clock is moved between
     * posts here — three rows written in the same frozen second would come back
     * in whatever order SQLite felt like, and the test would flake rather than
     * prove anything.
     */
    public function test_entries_come_back_newest_first_and_respect_the_limit(): void
    {
        $this->ledger()->post(Ledger::WALLET, self::STUDENT, 'credit', 1320000, 'package_purchase', 'k1');

        Carbon::setTestNow('2026-09-15 11:00:00');
        $this->ledger()->post(Ledger::HELD, self::STUDENT, 'credit', 110000, 'hold', 'k2');

        Carbon::setTestNow('2026-09-15 13:00:00');
        $this->ledger()->post(Ledger::HELD, self::STUDENT, 'debit', 110000, 'release', 'k3');

        $entries = $this->ledger()->entries(self::STUDENT);

        $this->assertSame(['release', 'hold', 'package_purchase'], array_column($entries, 'kind'));
        $this->assertSame(['release', 'hold'], array_column($this->ledger()->entries(self::STUDENT, 2), 'kind'));
        $this->assertCount(1, $this->ledger()->entries(self::STUDENT, 1));
    }

    public function test_an_entry_carries_the_fields_the_transaction_list_shows(): void
    {
        $package = $this->makePackage();
        $session = $this->makeSession($package);

        $this->ledger()->holdForSession($session, self::STUDENT);

        $entry = collect($this->ledger()->entries(self::STUDENT))
            ->firstWhere('account', Ledger::HELD);

        $this->assertSame(Ledger::HELD, $entry['account']);
        $this->assertSame('hold', $entry['kind']);
        $this->assertSame('credit', $entry['direction']);
        $this->assertSame(self::RATE_PAISE, $entry['amount_paise']);
        $this->assertSame('Held for the class on Wed 16 Sep', $entry['description']);
        $this->assertSame($session->id, $entry['session_id']);
        $this->assertSame($package->id, $entry['package_id']);
        $this->assertSame(now()->toIso8601String(), $entry['occurred_at']);
    }

    /**
     * A line with no description of its own still has to read as English on the
     * family's statement, because "adjustment of Rs 1,100" is the line that
     * generates the support ticket.
     */
    public function test_an_entry_without_its_own_description_falls_back_to_the_kind(): void
    {
        $this->ledger()->post(Ledger::TUTOR_PAYABLE, self::TUTOR, 'credit', 55000, 'cancellation_fee', 'k1');

        $this->assertSame('Late cancellation charge', $this->ledger()->entries(self::TUTOR)[0]['description']);
    }

    public function test_an_entry_keeps_its_own_description_when_it_was_given_one(): void
    {
        $this->ledger()->post(
            Ledger::TUTOR_PAYABLE, self::TUTOR, 'credit', 55000, 'cancellation_fee', 'k1',
            description: 'Cancelled two hours out',
        );

        $this->assertSame('Cancelled two hours out', $this->ledger()->entries(self::TUTOR)[0]['description']);
    }

    public function test_entries_are_scoped_to_one_owner(): void
    {
        $this->ledger()->post(Ledger::HELD, self::STUDENT, 'credit', 110000, 'hold', 'k1');
        $this->ledger()->post(Ledger::TUTOR_PAYABLE, self::TUTOR, 'credit', self::PAYABLE_PAISE, 'release', 'k2');

        $this->assertCount(1, $this->ledger()->entries(self::STUDENT));
        $this->assertCount(1, $this->ledger()->entries(self::TUTOR));
        $this->assertSame('hold', $this->ledger()->entries(self::STUDENT)[0]['kind']);
    }

    /**
     * Every kind in the ledger's documented vocabulary must have words of its
     * own. Anything falling through to "Adjustment" is a statement line no
     * parent can read, so the default is reserved for a kind that genuinely has
     * no meaning yet.
     */
    public function test_describe_names_every_kind_in_the_ledgers_vocabulary(): void
    {
        $vocabulary = [
            'package_purchase' => 'Package purchased',
            'hold' => 'Held for a scheduled class',
            'release' => 'Released after the class was confirmed',
            'commission' => 'Platform commission',
            'payout' => 'Paid out',
            'refund' => 'Refunded',
            'cancellation_fee' => 'Late cancellation charge',
        ];

        foreach ($vocabulary as $kind => $expected) {
            $this->assertSame($expected, Ledger::describe($kind), sprintf('The words shown for a %s entry.', $kind));
        }

        $this->assertSame('Adjustment', Ledger::describe('adjustment'));
        $this->assertSame('Adjustment', Ledger::describe('something_invented_later'));
    }

    /**
     * The kinds the services actually write, read back off the rows rather than
     * off a list someone remembered to update. If a new kind starts being posted
     * without a describe() arm, this is the test that notices.
     *
     * Every kind below is reached by calling the service that writes it, so the
     * list really is what the module emits. `package_purchase` is written by
     * the purchase path rather than by anything in this test, and `payout` by
     * the payout run; both have their own coverage.
     */
    public function test_every_kind_a_service_writes_reads_as_english(): void
    {
        $package = $this->makePackage(['sessions_total' => 2]);
        $confirmed = $this->makeSession($package);
        $lateCancel = $this->makeSession($package, ['starts_at' => now()->addHours(3)]);

        $this->ledger()->holdForSession($confirmed, self::STUDENT);
        $this->ledger()->releaseForSession($confirmed, self::STUDENT);

        $this->ledger()->holdForSession($lateCancel, self::STUDENT);
        $this->sessions()->cancel($lateCancel, self::STUDENT, 'Child unwell');

        $kinds = LedgerEntry::query()->distinct()->pluck('kind')->sort()->values()->all();

        $this->assertSame(['cancellation_fee', 'commission', 'hold', 'refund', 'release'], $kinds);

        foreach ($kinds as $kind) {
            $this->assertNotSame(
                'Adjustment',
                Ledger::describe($kind),
                sprintf('The module writes %s entries, so they need words of their own.', $kind),
            );
        }
    }

    /**
     * The ledger is append-only, which is the whole basis for deriving balances
     * from it: an entry that can be edited is an entry that cannot be
     * reconciled. Nothing in the schema enforces that, so what is watched here
     * is every statement a real lifecycle issues — schedule, arrive, teach,
     * check out, confirm, and a late cancellation on a second class — and the
     * only statements allowed to name the table are inserts and selects. The
     * first correction somebody makes by UPDATEing an amount instead of posting
     * a compensating entry is the one this catches.
     */
    public function test_no_code_path_updates_or_deletes_a_ledger_entry(): void
    {
        $package = $this->makePackage(['sessions_total' => 2]);
        $this->fundWallet($package);

        $statements = [];

        DB::listen(function ($query) use (&$statements): void {
            $statements[] = $query->sql;
        });

        $session = $this->sessions()->schedule($package, now()->addDay(), 60, 'home', '12 Rose Lane');
        $this->sessions()->checkIn($session, self::TUTOR, 'geofence');
        $this->sessions()->checkOut($session->fresh(), self::TUTOR, ['Quadratic equations']);
        $this->sessions()->confirm($session->fresh(), self::STUDENT);

        $cancelled = $this->sessions()->schedule($package, now()->addHours(3), 60, 'home', '12 Rose Lane');
        $this->sessions()->cancel($cancelled, self::STUDENT, 'Child unwell');

        $touching = array_values(array_filter(
            $statements,
            static fn (string $sql): bool => str_contains($sql, 'nxt_ledger_entries'),
        ));

        $this->assertNotSame([], $touching, 'The lifecycle has to have reached the ledger at all.');

        foreach ($touching as $sql) {
            $this->assertMatchesRegularExpression(
                '/^\s*(select|insert)\b/i',
                $sql,
                'Only inserts and selects may name nxt_ledger_entries: '.$sql,
            );
        }
    }

    /**
     * Brief 2.1 and 7.5: the ledger is double-entry, so every account needs a
     * way out as well as a way in. Paying a tutor has to debit tutor_payable, or
     * the balance only ever climbs and the next payout run pays the same money
     * again — the mirror of the double-pay every idempotency test above exists
     * to prevent, sitting one account over.
     */
    public function test_paying_a_tutor_out_debits_the_payable_account(): void
    {
        $session = $this->makeSession($this->makePackage());

        $this->ledger()->holdForSession($session, self::STUDENT);
        $this->ledger()->releaseForSession($session, self::STUDENT);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, self::PAYABLE_PAISE);

        $this->ledger()->payOut(self::TUTOR, self::PAYABLE_PAISE, 'payout:2026-09:'.self::TUTOR);

        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, 0);
        $this->assertSame('debit', LedgerEntry::where('kind', 'payout')->sole()->direction);
    }

    /**
     * Brief 7.5: the wallet is a double-entry ledger, so a full purchase to
     * confirmation sequence must conserve value — what leaves one account
     * arrives in another and the signed sum across every account is zero.
     *
     * This is the invariant the release gate rests on, and it is the one the
     * current schema cannot satisfy: a hold is a single credit with no matching
     * debit anywhere, so the books gain a fee out of nothing the moment a class
     * is scheduled.
     */
    public function test_a_purchase_to_confirmation_sequence_conserves_money_across_every_account(): void
    {
        $package = $this->makePackage(['sessions_total' => 1, 'amount_paise' => self::RATE_PAISE]);
        $session = $this->makeSession($package);

        // Through the purchase path, so the money has a place it came from:
        // the provider settlement account is the counterparty of the credit.
        $this->ledger()->recordPurchase(self::STUDENT, self::RATE_PAISE, $package->id, $package->id);

        $this->ledger()->holdForSession($session, self::STUDENT);
        $this->ledger()->releaseForSession($session, self::STUDENT);

        $this->assertSame(
            0,
            $this->signedTotalOverEveryAccount(),
            'Every paisa credited somewhere was debited somewhere else.',
        );

        $this->assertSame(
            -self::RATE_PAISE,
            $this->ledger()->balance(Ledger::PLATFORM_OWNER, Ledger::SETTLEMENT),
            'What the provider took in, waiting to be settled.',
        );
        $this->assertBalance(self::STUDENT, Ledger::WALLET, 0);
        $this->assertBalance(self::STUDENT, Ledger::HELD, 0);
        $this->assertBalance(self::TUTOR, Ledger::TUTOR_PAYABLE, self::PAYABLE_PAISE);
        $this->assertBalance(self::TUTOR, Ledger::COMMISSION, self::COMMISSION_PAISE);
    }

    /**
     * Brief 7.3: scheduling a class moves one session's fee from available to
     * held. A move is two entries. Today it is one, so a family's available
     * balance is untouched by scheduling every class they own.
     */
    public function test_holding_a_fee_takes_it_out_of_the_family_wallet(): void
    {
        $package = $this->makePackage();
        $session = $this->makeSession($package);

        $this->ledger()->post(
            Ledger::WALLET, self::STUDENT, 'credit', $package->amount_paise,
            'package_purchase', 'purchase:'.$package->id,
        );
        $this->ledger()->holdForSession($session, self::STUDENT);

        $this->assertBalance(self::STUDENT, Ledger::HELD, self::RATE_PAISE);
        $this->assertBalance(self::STUDENT, Ledger::WALLET, $package->amount_paise - self::RATE_PAISE);
        $this->assertSame(2, LedgerEntry::where('session_id', $session->id)->count(), 'A move is a debit and a credit.');
    }

    /**
     * Brief 2.1: wallet figures are DERIVED from ledger entries, never read from
     * somewhere else. What a family has spent should be the sum of the purchase
     * entries, so that editing a package row cannot silently change the number
     * on the statement.
     */
    public function test_the_spend_on_the_family_wallet_is_derived_from_the_ledger(): void
    {
        $package = $this->makePackage();

        $this->ledger()->post(
            Ledger::WALLET, self::STUDENT, 'debit', 1320000, 'package_purchase',
            'purchase:'.$package->id, packageId: $package->id,
        );

        $package->update(['amount_paise' => 9900000]);

        $this->assertSame(1320000, $this->ledger()->familyWallet(self::STUDENT)['spent_paise']);
    }

    /**
     * Brief 2.1 and 7.5: a balance that has gone negative is the loudest signal
     * that something released twice, and the reconciliation the ledger exists to
     * support has to be able to see it.
     */
    public function test_the_family_wallet_reports_a_negative_held_balance_rather_than_masking_it(): void
    {
        $session = $this->makeSession($this->makePackage());

        $this->ledger()->holdForSession($session, self::STUDENT);
        $this->ledger()->releaseForSession($session, self::STUDENT);
        $this->ledger()->post(
            Ledger::HELD, self::STUDENT, 'debit', $session->fee_paise, 'release',
            'cancel-release:'.$session->id, $session->id,
        );

        $this->assertBalance(self::STUDENT, Ledger::HELD, -self::RATE_PAISE);
        $this->assertSame(-self::RATE_PAISE, $this->ledger()->familyWallet(self::STUDENT)['held_paise']);
    }

    /**
     * Brief 2.1: every figure on a money screen is a sum over ledger entries. A
     * tutor's earnings are read off the session rows instead, so a session whose
     * fee is edited after confirmation reports one number on the earnings card
     * and another in the ledger it was actually paid from.
     */
    public function test_tutor_earnings_are_derived_from_the_ledger(): void
    {
        $package = $this->makePackage();
        $session = $this->makeSession($package, ['status' => 'confirmed', 'starts_at' => '2026-09-10 10:00:00']);

        $this->ledger()->holdForSession($session, self::STUDENT);
        $this->ledger()->releaseForSession($session, self::STUDENT);

        $session->update(['fee_paise' => 990000, 'commission_paise' => 0]);

        $this->assertSame(self::PAYABLE_PAISE, $this->ledger()->tutorEarnings(self::TUTOR)['earned_this_month_paise']);
    }

    /**
     * Brief 2.1: money writes are auditable. An entry whose direction is neither
     * debit nor credit is invisible to balance() — it is written, it is counted
     * as history, and it moves nothing, which is the worst of the three.
     */
    public function test_post_refuses_a_direction_that_is_neither_debit_nor_credit(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->ledger()->post(Ledger::HELD, self::STUDENT, 'CREDIT', 110000, 'hold', 'k1');
    }

    /**
     * Brief 2.1: money is positive integer paise moving in a named direction. A
     * negative credit is a debit in disguise and it defeats every sum written
     * over the direction column.
     */
    public function test_post_refuses_a_negative_amount(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->ledger()->post(Ledger::HELD, self::STUDENT, 'credit', -110000, 'hold', 'k1');
    }
}
