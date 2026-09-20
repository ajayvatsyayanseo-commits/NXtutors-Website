<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Services;

use App\Models\SubscriptionPlan;
use App\Models\UserSubscription;
use App\Nxt\Dashboard\Models\MeterEvent;
use App\Nxt\Dashboard\Support\DashboardIdentity;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * The gate in front of every metered feature.
 *
 * Counters already live on `user_subscriptions` (ai_credit_used, contact_used,
 * lead_used) and the pricing page sells them, so those columns stay the running
 * total. What was missing is why a credit went: a bare counter cannot be
 * audited, cannot be refunded when a generation fails, and cannot answer a
 * parent asking what their credits were spent on. Every change therefore also
 * writes a `nxt_meter_events` row, and the two are moved inside one transaction.
 *
 * Consuming is idempotent on the caller's key, so a retried request or a
 * double-tap charges once. Refunding is idempotent on the charge it reverses,
 * and refunds live in a key namespace of their own — a caller's key can never
 * collide with one, so a consume can never be handed a credit as if it were the
 * charge it just made.
 */
class Entitlements
{
    /** Feature keys, mapped to the columns the live schema already meters. */
    public const AI_MESSAGES = 'ai.messages';

    public const TUTOR_CONTACT = 'tutors.contact';

    public const LEAD_VIEW = 'leads.view';

    /** The key space refunds own. Nothing else may write into it. */
    private const REFUND_KEY_PREFIX = 'meter-refund:';

    private const COLUMNS = [
        self::AI_MESSAGES => ['used' => 'ai_credit_used', 'limit' => 'ai_credit_limit'],
        self::TUTOR_CONTACT => ['used' => 'contact_used', 'limit' => 'contact_limit'],
        self::LEAD_VIEW => ['used' => 'lead_used', 'limit' => 'lead_limit'],
    ];

    /**
     * The meters for the credit chip in the app bar, plus the plan behind them.
     */
    public function snapshot(DashboardIdentity $identity): array
    {
        $subscription = $this->activeSubscription($identity->userId);
        $plan = $subscription?->plan;

        $features = $identity->isTutor()
            ? [self::LEAD_VIEW, self::AI_MESSAGES]
            : [self::AI_MESSAGES, self::TUTOR_CONTACT];

        $meters = [];

        foreach ($features as $feature) {
            $meters[] = $this->meter($subscription, $feature, $identity->userId);
        }

        return [
            'plan' => [
                'name' => $plan?->plan_name ?? ($identity->isTutor() ? 'Tutor Free' : 'Student Free'),
                'price' => $plan ? (float) $plan->price : 0.0,
                'type' => $plan?->plan_type ?? ($identity->isTutor() ? 'tutor' : 'student'),
                'features' => $plan?->features ?? [],
                'status' => $subscription?->status ?? 'free',
                'started_on' => $subscription?->start_date?->toIso8601String(),
                'renews_on' => $subscription?->end_date?->toIso8601String(),
                'days_left' => $subscription?->end_date
                    ? max(0, now()->startOfDay()->diffInDays($subscription->end_date->startOfDay(), false))
                    : null,
            ],
            'meters' => $meters,
        ];
    }

    /**
     * @return array{allow:bool,feature:string,used:int,limit:int|null,remaining:int|null,reset_at:string|null,daily_limit:int|null,daily_remaining:int|null,upgrade_plan:string|null}
     */
    public function check(string $userId, string $feature, int $cost = 1): array
    {
        $subscription = $this->activeSubscription($userId);
        $meter = $this->meter($subscription, $feature, $userId);
        $daily = $this->dailyMeter($subscription, $feature, $userId);

        $allow = ($meter['limit'] === null || $meter['remaining'] >= $cost)
            && ($daily['limit'] === null || $daily['remaining'] >= 1);

        return $meter + [
            'daily_limit' => $daily['limit'],
            'daily_remaining' => $daily['remaining'],
            'allow' => $allow,
            'upgrade_plan' => $allow ? null : $this->nextPlanUnlocking($subscription, $feature),
        ];
    }

    /**
     * Consume `cost` units, or return null when the meter will not allow it.
     *
     * Runs in the caller's transaction when there is one, so a credit is never
     * spent by an action that then fails to save.
     */
    public function consume(
        string $userId,
        string $feature,
        string $idempotencyKey,
        int $cost = 1,
        ?string $referenceType = null,
        ?string $referenceId = null,
    ): ?MeterEvent {
        if ($cost <= 0) {
            throw new \InvalidArgumentException(
                sprintf('A consume is a charge of at least one unit, not %d.', $cost),
            );
        }

        if (str_starts_with($idempotencyKey, self::REFUND_KEY_PREFIX)) {
            throw new \InvalidArgumentException('That key belongs to the refund namespace.');
        }

        return DB::transaction(function () use ($userId, $feature, $idempotencyKey, $cost, $referenceType, $referenceId) {
            $existing = MeterEvent::where('idempotency_key', $idempotencyKey)->first();

            if ($existing) {
                return $this->assertIsTheSameCharge($existing, $userId, $feature);
            }

            $subscription = $this->activeSubscription($userId, lock: true);
            $meter = $this->meter($subscription, $feature, $userId);
            $daily = $this->dailyMeter($subscription, $feature, $userId);

            if ($meter['limit'] !== null && $meter['remaining'] < $cost) {
                return null;
            }

            if ($daily['limit'] !== null && $daily['remaining'] < 1) {
                return null;
            }

            if ($subscription && isset(self::COLUMNS[$feature])) {
                $subscription->increment(self::COLUMNS[$feature]['used'], $cost);
            }

            $event = MeterEvent::create([
                'subscription_id' => $subscription?->id,
                'user_id' => $userId,
                'feature' => $feature,
                'delta' => -$cost,
                'reference_type' => $referenceType,
                'reference_id' => $referenceId,
                'idempotency_key' => $idempotencyKey,
                'actor' => $userId,
                'reason' => 'consume',
            ]);

            // A free account has no subscription row to lock, and its usage is
            // a sum over the event log — so two requests spending the last
            // credit both read the same total and both pass the guard above.
            // Reading the log back after writing to it is what makes the
            // ceiling a ceiling: whoever tips it over takes their own row back
            // out and is denied. That row is this request's own and has never
            // been read by anything else, so removing it loses no history —
            // and only that row is removed, because the other request's charge
            // is valid and has to stand.
            if (! $subscription && $meter['limit'] !== null
                && $this->usedFromEvents($userId, $feature) > $meter['limit']) {
                $event->delete();

                return null;
            }

            return $event;
        });
    }

    /**
     * Give back a credit whose action failed. The brief makes this mandatory:
     * a failed AI generation must not cost the family anything.
     *
     * Refunds are triggered by failure handlers, queue retries and webhook
     * redeliveries — the code paths that run twice — so this is idempotent on
     * the charge it reverses, and it refuses anything that is not a charge.
     */
    public function refund(MeterEvent $consumed, string $reason = 'refund'): MeterEvent
    {
        if ($consumed->delta >= 0) {
            throw new \InvalidArgumentException(
                'A refund gives back a charge. Refunding a credit mints one.',
            );
        }

        $key = self::REFUND_KEY_PREFIX.$consumed->id;

        return DB::transaction(function () use ($consumed, $reason, $key) {
            $existing = MeterEvent::where('idempotency_key', $key)->first();

            if ($existing) {
                return $existing;   // already given back for exactly this charge
            }

            $subscription = $consumed->subscription_id
                ? UserSubscription::where('id', $consumed->subscription_id)->lockForUpdate()->first()
                : null;

            $cost = abs($consumed->delta);

            if ($subscription && isset(self::COLUMNS[$consumed->feature])) {
                // Not floored at zero. A renewal resets the counter, and a
                // charge made before the reset can still fail after it — the
                // family is owed that credit in the period they are now in, and
                // flooring here is what made it vanish with no trace on any
                // screen.
                $subscription->decrement(self::COLUMNS[$consumed->feature]['used'], $cost);
            }

            return MeterEvent::create([
                'subscription_id' => $consumed->subscription_id,
                'user_id' => $consumed->user_id,
                'feature' => $consumed->feature,
                'delta' => $cost,
                'reference_type' => $consumed->reference_type,
                'reference_id' => $consumed->reference_id,
                'idempotency_key' => $key,
                'actor' => 'system',
                'reason' => $reason,
            ]);
        });
    }

    /**
     * A new billing period starts at nothing spent.
     *
     * Unused credits do not roll over: the free branch gets that from the
     * calendar-month window, and a subscriber gets it from here. The caller
     * owns when this fires — the renewal webhook — because a reset that fires
     * twice gives a family two allowances and one that never fires gives them
     * none.
     */
    public function renew(UserSubscription $subscription, ?\DateTimeInterface $periodStart = null): UserSubscription
    {
        return DB::transaction(function () use ($subscription, $periodStart) {
            $start = $periodStart ? \Illuminate\Support\Carbon::instance(
                $periodStart instanceof \DateTimeImmutable ? \DateTime::createFromImmutable($periodStart) : $periodStart,
            ) : now();

            $days = (int) ($subscription->plan?->duration_days ?: 30);

            $subscription->forceFill([
                'ai_credit_used' => 0,
                'contact_used' => 0,
                'lead_used' => 0,
                'start_date' => $start,
                'end_date' => $start->copy()->addDays($days),
                'status' => 'active',
            ])->save();

            return $subscription->fresh();
        });
    }

    /** Recent meter movements, so a family can see where their credits went. */
    public function history(string $userId, int $limit = 30): array
    {
        return MeterEvent::where('user_id', $userId)
            ->latest()
            ->limit($limit)
            ->get()
            ->map(fn (MeterEvent $e): array => [
                'id' => $e->id,
                'feature' => $e->feature,
                'label' => self::label($e->feature),
                'delta' => $e->delta,
                'reason' => $e->reason,
                'reference_type' => $e->reference_type,
                'reference_id' => $e->reference_id,
                'at' => $e->created_at?->toIso8601String(),
            ])
            ->all();
    }

    public static function label(string $feature): string
    {
        return match ($feature) {
            self::AI_MESSAGES => 'AI credits',
            self::TUTOR_CONTACT => 'Tutor contacts',
            self::LEAD_VIEW => 'Lead views',
            default => Str::headline($feature),
        };
    }

    public function activeSubscription(string $userId, bool $lock = false): ?UserSubscription
    {
        $query = UserSubscription::with('plan')
            ->where('user_id', $userId)
            ->where('status', 'active')
            ->where(function ($q): void {
                $q->whereNull('end_date')->orWhere('end_date', '>=', now());
            })
            ->latest('id');

        if ($lock) {
            $query->lockForUpdate();
        }

        return $query->first();
    }

    /**
     * The row behind an idempotency key has to be the charge the caller thinks
     * it is making. A key that already belongs to somebody else's movement is a
     * collision, and handing that row back would record one action as the
     * receipt for another.
     */
    private function assertIsTheSameCharge(MeterEvent $existing, string $userId, string $feature): MeterEvent
    {
        if ($existing->delta >= 0 || $existing->user_id !== $userId || $existing->feature !== $feature) {
            throw new \InvalidArgumentException(
                sprintf('The key %s already belongs to a different meter movement.', $existing->idempotency_key),
            );
        }

        return $existing;
    }

    /**
     * @return array{feature:string,label:string,used:int,limit:int|null,remaining:int|null,reset_at:string|null}
     */
    private function meter(?UserSubscription $subscription, string $feature, string $userId): array
    {
        $columns = self::COLUMNS[$feature] ?? null;

        if ($subscription && $columns) {
            $used = (int) $subscription->{$columns['used']};
            // Null means unlimited, and the plan that means it has to be able
            // to say so. Casting it to an int read unlimited as zero and locked
            // the subscriber out of the feature they were paying for.
            $limit = $subscription->{$columns['limit']} === null
                ? null
                : (int) $subscription->{$columns['limit']};
            $resetAt = $subscription->end_date?->toIso8601String();
        } else {
            // No subscription row means the free plan, and the free plan still
            // has limits the pricing page states. Counting the meter events
            // themselves is what enforces them: reading the (absent) counter
            // column instead left every free account effectively unlimited.
            $used = $this->usedFromEvents($userId, $feature);
            $limit = $this->freeAllowance($feature);
            $resetAt = now()->startOfMonth()->addMonth()->toIso8601String();
        }

        return [
            'feature' => $feature,
            'label' => self::label($feature),
            'used' => $used,
            'limit' => $limit,
            'remaining' => $limit === null ? null : max(0, $limit - $used),
            'reset_at' => $resetAt,
        ];
    }

    /**
     * The second half of the free AI allowance: ninety a month, capped at three
     * a day, so an account cannot burn the month in one afternoon.
     *
     * It counts messages rather than credits — a charge is a message, whatever
     * it cost — and it applies to the free plan only. A paid plan is bounded by
     * the allowance it sells.
     *
     * @return array{limit:int|null,used:int,remaining:int|null}
     */
    private function dailyMeter(?UserSubscription $subscription, string $feature, string $userId): array
    {
        $limit = $subscription === null && $feature === self::AI_MESSAGES
            ? (int) config('nxt-dashboard.free_ai_messages_per_day', 3)
            : null;

        if ($limit === null) {
            return ['limit' => null, 'used' => 0, 'remaining' => null];
        }

        $used = MeterEvent::where('user_id', $userId)
            ->where('feature', $feature)
            ->whereNull('subscription_id')
            ->where('reason', 'consume')
            ->where('created_at', '>=', now()->startOfDay())
            ->count();

        return ['limit' => $limit, 'used' => $used, 'remaining' => max(0, $limit - $used)];
    }

    /**
     * Net consumption this calendar month on the free plan, from the
     * append-only event log. Refunds are positive deltas, so a failed
     * generation gives the credit back here too without any second bookkeeping
     * path.
     *
     * Events written against a subscription are excluded: those were paid for
     * by a plan and counted against that plan's allowance. Counting them here
     * as well charged a lapsed subscriber twice for the same messages, so a
     * family whose plan ended on the 10th began the 11th already forty
     * messages down on an allowance they had not touched.
     */
    private function usedFromEvents(string $userId, string $feature): int
    {
        $net = (int) MeterEvent::where('user_id', $userId)
            ->where('feature', $feature)
            ->whereNull('subscription_id')
            ->where('created_at', '>=', now()->startOfMonth())
            ->sum('delta');

        return max(0, -$net);
    }

    /** What someone with no subscription row still gets, per the pricing page. */
    private function freeAllowance(string $feature): int
    {
        return match ($feature) {
            self::AI_MESSAGES => 90,
            self::LEAD_VIEW => 3,
            default => 0,
        };
    }

    /**
     * The cheapest active plan that raises this meter — the one the inline
     * upgrade prompt names. Upgrades are only ever offered at the point the
     * meter blocks the action, never as a banner.
     */
    private function nextPlanUnlocking(?UserSubscription $current, string $feature): ?string
    {
        $column = match ($feature) {
            self::AI_MESSAGES => 'ai_credits',
            self::TUTOR_CONTACT => 'contact_limit',
            self::LEAD_VIEW => 'lead_limit',
            default => null,
        };

        if (! $column) {
            return null;
        }

        $currentLimit = $current && isset(self::COLUMNS[$feature])
            ? (int) $current->{self::COLUMNS[$feature]['limit']}
            : 0;

        return SubscriptionPlan::active()
            ->where('plan_type', $feature === self::LEAD_VIEW ? 'tutor' : 'student')
            ->where($column, '>', $currentLimit)
            ->orderBy('price')
            ->value('plan_name');
    }
}
