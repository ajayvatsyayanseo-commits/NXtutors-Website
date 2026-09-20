<?php

declare(strict_types=1);

namespace Tests\Feature\Dashboard;

use App\Nxt\Dashboard\Models\LedgerEntry;
use App\Nxt\Dashboard\Models\Package;
use App\Nxt\Dashboard\Services\Ledger;
use Illuminate\Testing\TestResponse;

/**
 * The money-in end of the double-entry ledger.
 *
 * Brief 7.5 makes a purchase the entry point of the whole wallet: a family pays,
 * `family_wallet` is credited, and the webhook that says so is processed exactly
 * once using the provider's event id as the idempotency key —
 * `nxt_ledger_entries.reference` is even documented in the migration as the
 * provider payment id.
 *
 * `PricingController::cashfreeWebhook` verifies Cashfree's signature and hands
 * a package payment to `Purchases`, which credits the wallet through the ledger
 * under the provider's event id. Every webhook here is signed the way Cashfree
 * signs one, because an unsigned request must never move money — the handler
 * refusing it is part of what these tests are for.
 */
class PurchaseLedgerTest extends DashboardTestCase
{
    /**
     * What the webhook handler has to call, and the guarantee it gets for free
     * when it does: the provider's event id as the idempotency key means a
     * redelivered webhook — routine, and the reason 7.5 names event-id
     * idempotency at all — credits the family once.
     */
    public function test_a_purchase_posted_under_a_provider_event_id_credits_the_wallet_once(): void
    {
        $package = $this->makePackage();
        $eventId = 'cf_evt_3f8a91';

        foreach (range(1, 3) as $delivery) {
            $this->ledger()->post(
                Ledger::WALLET,
                self::STUDENT,
                'credit',
                $package->amount_paise,
                'package_purchase',
                'purchase:'.$eventId,
                packageId: $package->id,
                description: 'Twelve classes of Mathematics',
                reference: $eventId,
            );
        }

        $this->assertSame(1, LedgerEntry::count(), 'Three deliveries of one payment event are one credit.');
        $this->assertBalance(self::STUDENT, Ledger::WALLET, 1320000);

        $entry = LedgerEntry::sole();
        $this->assertSame($eventId, $entry->reference, 'The provider payment id is on the row that holds the money.');
        $this->assertSame($package->id, $entry->package_id);
    }

    /**
     * Brief 7.5: paying for a package credits the family's wallet. This is the
     * first movement in the life of every rupee the module handles, and nothing
     * in production makes it.
     */
    public function test_a_completed_payment_credits_the_family_wallet(): void
    {
        $package = $this->makePackage();

        $this->postSignedWebhook($this->paymentFor($package))->assertOk();

        $this->assertBalance(self::STUDENT, Ledger::WALLET, 1320000);
        $this->assertSame(
            'package_purchase',
            LedgerEntry::where('account', Ledger::WALLET)->sole()->kind,
        );
        $this->assertSame(
            0,
            $this->signedTotalOverEveryAccount(),
            'Money arriving from the provider is a move, not a creation.',
        );
    }

    /** An unsigned webhook is not a payment, whatever it claims to be. */
    public function test_an_unsigned_webhook_moves_no_money(): void
    {
        $package = $this->makePackage();

        $this->postJson('/cashfree/webhook', $this->paymentFor($package))->assertStatus(401);

        $this->assertSame(0, LedgerEntry::count());
        $this->assertBalance(self::STUDENT, Ledger::WALLET, 0);
    }

    /**
     * Brief 7.5: webhooks are processed exactly once, keyed on the provider's
     * event id. Cashfree redelivers on any non-2xx and on its own retry
     * schedule, so a handler without this is a handler that can charge a family
     * twice the day it is wired up.
     */
    public function test_a_redelivered_payment_webhook_credits_the_wallet_once(): void
    {
        $package = $this->makePackage();

        $payload = $this->paymentFor($package);

        $this->postSignedWebhook($payload)->assertOk();
        $this->postSignedWebhook($payload)->assertOk();

        $this->assertSame(
            1,
            LedgerEntry::where('account', Ledger::WALLET)->count(),
            'One payment is one credit however many times it is delivered.',
        );
        $this->assertBalance(self::STUDENT, Ledger::WALLET, 1320000);
    }

    /** The payload Cashfree sends when a package payment succeeds. */
    private function paymentFor(Package $package, string $paymentId = 'cf_pay_9f3a'): array
    {
        return [
            'type' => 'PAYMENT_SUCCESS_WEBHOOK',
            'data' => [
                'order' => ['order_id' => 'pkg_'.$package->id, 'order_amount' => 13200.00],
                'payment' => ['cf_payment_id' => $paymentId, 'payment_status' => 'SUCCESS'],
            ],
        ];
    }

    /**
     * Post a webhook signed the way Cashfree signs one: base64 HMAC-SHA256 over
     * the timestamp and the raw body, under the configured secret.
     */
    private function postSignedWebhook(array $payload): TestResponse
    {
        $secret = 'cf_test_secret';
        config()->set('services.cashfree.secret_key', $secret);

        $timestamp = (string) now()->getTimestamp();
        $body = json_encode($payload);

        return $this->postJson('/cashfree/webhook', $payload, [
            'x-webhook-timestamp' => $timestamp,
            'x-webhook-signature' => base64_encode(hash_hmac('sha256', $timestamp.$body, $secret, true)),
        ]);
    }

    /**
     * Brief 7.3: scheduling a class moves the fee from available to held, which
     * only means anything if there is an available balance for it to leave. A
     * family cannot be held for more than they have paid in.
     */
    public function test_a_family_cannot_be_held_for_more_than_they_have_paid_in(): void
    {
        $package = $this->makePackage(['sessions_total' => 2]);

        $this->ledger()->post(
            Ledger::WALLET, self::STUDENT, 'credit', self::RATE_PAISE, 'package_purchase',
            'purchase:cf_evt_one_class_only', packageId: $package->id,
        );

        $this->sessions()->schedule($package, now()->addDay()->setTime(10, 0), 60, 'home', '12 Rose Lane');

        $this->assertBalance(self::STUDENT, Ledger::WALLET, 0);
        $this->assertBalance(self::STUDENT, Ledger::HELD, self::RATE_PAISE);

        $this->expectExceptionMessage('There is not enough in the wallet to hold this class.');

        $this->sessions()->schedule($package->fresh(), now()->addDay()->setTime(14, 0), 60, 'home', '12 Rose Lane');
    }
}
