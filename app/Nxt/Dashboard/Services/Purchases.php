<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Services;

use App\Nxt\Dashboard\Models\LedgerEntry;
use App\Nxt\Dashboard\Models\OutboxEvent;
use App\Nxt\Dashboard\Models\Package;
use App\Nxt\Dashboard\Support\CorrelationId;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

/**
 * Money in.
 *
 * A family pays, the wallet is credited, and the classes they schedule are held
 * against that credit. Until this existed every hold in the module was taken
 * against money the ledger had no record of receiving, the wallet balance on a
 * family's screen was structurally zero, and the nightly reconciliation had
 * nothing to reconcile the holds against.
 *
 * The provider's own event id is the idempotency key, which is what makes a
 * redelivery — routine for Cashfree, which re-sends on any non-2xx and on its
 * own schedule — credit the family exactly once.
 */
class Purchases
{
    /** Orders whose id carries this prefix are package payments the dashboard owns. */
    public const PACKAGE_ORDER_PREFIX = 'pkg_';

    public function __construct(private readonly Ledger $ledger)
    {
    }

    /**
     * Handle a verified Cashfree webhook payload. Returns the entry that holds
     * the money, or null when the event is not a completed package payment.
     *
     * The caller has already verified the signature; this decides whether the
     * event is ours and what it means.
     */
    public function fromCashfreeWebhook(array $payload): ?LedgerEntry
    {
        $order = (string) data_get($payload, 'data.order.order_id', '');

        if (! str_starts_with($order, self::PACKAGE_ORDER_PREFIX)) {
            return null;   // a subscription payment, handled by the pricing flow
        }

        $status = strtoupper((string) data_get($payload, 'data.payment.payment_status', ''));
        $type = strtoupper((string) data_get($payload, 'type', ''));

        if ($status !== 'SUCCESS' && $type !== 'PAYMENT_SUCCESS_WEBHOOK') {
            return null;
        }

        $eventId = (string) (data_get($payload, 'data.payment.cf_payment_id')
            ?: data_get($payload, 'data.order.order_id'));

        $rupees = (float) data_get($payload, 'data.order.order_amount', 0);

        return $this->recordPackagePayment(
            substr($order, strlen(self::PACKAGE_ORDER_PREFIX)),
            (int) round($rupees * 100),
            $eventId,
        );
    }

    /**
     * Credit a family's wallet for a package they have paid for.
     *
     * Nothing else in the module may create wallet money: every other write is
     * a move between accounts that this credit funded.
     */
    public function recordPackagePayment(string $packageId, int $amountPaise, string $providerEventId): ?LedgerEntry
    {
        $package = Package::find($packageId);

        if (! $package) {
            Log::warning('nxt-dashboard: payment for an unknown package', [
                'package_id' => $packageId,
                'provider_event_id' => $providerEventId,
            ]);

            return null;
        }

        if ($amountPaise <= 0) {
            return null;
        }

        return DB::transaction(function () use ($package, $amountPaise, $providerEventId): LedgerEntry {
            $entry = $this->ledger->recordPurchase(
                $package->student_user_id,
                $amountPaise,
                $providerEventId,
                $package->id,
                sprintf('%d classes of %s', $package->sessions_total, $package->subject ?? 'tuition'),
            );

            if ($entry->wasRecentlyCreated) {
                $package->forceFill([
                    'status' => 'active',
                    'purchased_at' => $package->purchased_at ?? now(),
                ])->save();

                OutboxEvent::create([
                    'topic' => 'payments',
                    'event' => 'payment.captured',
                    'payload' => [
                        'package_id' => $package->id,
                        'student_user_id' => $package->student_user_id,
                        'tutor_user_id' => $package->tutor_user_id,
                        'amount_paise' => $amountPaise,
                        'provider_event_id' => $providerEventId,
                    ],
                    'correlation_id' => CorrelationId::current(),
                ]);
            }

            return $entry;
        });
    }
}
