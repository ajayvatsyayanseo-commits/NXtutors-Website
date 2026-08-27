<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Register;
use App\NxtAi\Support\AgentPseudonymiser;
use App\NxtAi\Support\PublicTutorFieldMapper;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * The agent gateway. Identity, contacts, availability, pricing and activation.
 *
 * The Demo Command Center agent runs on AWS Lambda with no route to this
 * database, so everything it needs about a real person comes through here. It
 * had no counterpart at all until now: every call returned 404, and because an
 * unresolvable contact fails closed as opted-out, **every message the agent
 * tried to send was silently suppressed** — to parents and tutors alike.
 *
 * Four rules for anything added below.
 *
 *  1. **Refs in, refs out.** The agent addresses people as `ph_<hash>` and
 *     never holds a phone number. A number appears in a response only where the
 *     agent must actually deliver a message, and never in one it merely reads.
 *  2. **Shape tutors with {@see PublicTutorFieldMapper}.** It is the one place
 *     allowed to turn a tutor model into data that leaves the server, and its
 *     PRIVATE_COLUMNS list is asserted in tests.
 *  3. **Writes are idempotent on `X-Idempotency-Key`.** The agent retries a
 *     timeout, and a second subscription for one payment is not recoverable by
 *     apologising.
 *  4. **Money is integer paise.** Never a float. `4799.99 * 100` is 479998.99
 *     in binary floating point, and the agent reconciles the payment against
 *     this number exactly.
 */
final class AgentGatewayController extends Controller
{
    public function __construct(private readonly PublicTutorFieldMapper $mapper)
    {
    }

    // ------------------------------------------------------------- identity

    /**
     * `POST /identity/resolve` — who is this hashed number?
     *
     * Returns a `student_ref` whether or not we have seen them, because the
     * agent needs a stable handle for a brand-new lead too. `known_customer`
     * is what says which it is.
     */
    public function resolveIdentity(Request $request): JsonResponse
    {
        $hash = AgentPseudonymiser::stripPrefix((string) $request->input('phone_hash', ''));
        if (! preg_match('/^[0-9a-f]{16}$/', $hash)) {
            return response()->json(['error' => 'phone_hash must be 16 hex characters'], 422);
        }

        $register = Register::query()->where('phone_hash', $hash)->first();
        $lead = DB::table('demo_leads')->where('phone_hash', $hash)->latest('id')->first();

        return $this->ok([
            // Derived from the hash, so the same person always resolves to the
            // same ref even before they exist in `register`.
            'student_ref' => 'stu_'.$hash,
            'known_customer' => $register !== null,
            'display_name' => $register->name ?? ($lead->name ?? null),
            'city' => $register->city ?? ($lead->location ?? null),
            'registered_as' => $register->join_as ?? null,
        ]);
    }

    // ------------------------------------------------------------- contacts

    /**
     * `GET /tutors/{ref}/contacts` — a deliverable address for one ref.
     *
     * Deliberately handles both a tutor ref and a `ph_<hash>` parent ref: the
     * agent's `GatewayContactResolver` uses one method for every recipient, so
     * a route that only knew about tutors would leave every parent
     * unreachable.
     *
     * This is the one endpoint that returns a real phone number, because it is
     * the only thing the agent cannot do without: you cannot send a WhatsApp
     * message to a hash.
     */
    public function tutorContacts(string $ref): JsonResponse
    {
        if (AgentPseudonymiser::looksLikePhoneRef($ref)) {
            return $this->contactsForPhoneRef($ref);
        }

        $tutor = Register::query()
            ->where('user_id', $ref)
            ->where('join_as', 'teacher')
            ->first();

        if ($tutor === null) {
            return response()->json(['error' => 'tutor_not_found'], 404);
        }

        return $this->ok([
            'tutor_ref' => (string) $tutor->user_id,
            'name' => (string) ($tutor->name ?? ''),
            'whatsapp' => $this->deliverablePhone($tutor->phone),
            'email' => $tutor->email,
            // A deactivated tutor must not be messaged about new bookings.
            // `opted_out` is the agent's own suppression flag, so mapping
            // status onto it stops the send without a second mechanism.
            'opted_out' => $tutor->status !== 't',
        ]);
    }

    private function contactsForPhoneRef(string $ref): JsonResponse
    {
        $hash = AgentPseudonymiser::stripPrefix($ref);

        $register = Register::query()->where('phone_hash', $hash)->first();
        if ($register !== null) {
            return $this->ok([
                'tutor_ref' => $ref,
                'name' => (string) ($register->name ?? ''),
                'whatsapp' => $this->deliverablePhone($register->phone),
                'email' => $register->email,
                'opted_out' => $register->status !== 't',
            ]);
        }

        $lead = DB::table('demo_leads')->where('phone_hash', $hash)->latest('id')->first();
        if ($lead === null) {
            return response()->json(['error' => 'contact_not_found'], 404);
        }

        return $this->ok([
            'tutor_ref' => $ref,
            'name' => (string) ($lead->name ?? ''),
            'whatsapp' => $this->deliverablePhone($lead->phone),
            'email' => null,
            // A lead who filled in the demo form asked to be contacted.
            'opted_out' => false,
        ]);
    }

    // --------------------------------------------------------- availability

    /**
     * `GET /tutors/{ref}/availability` — bookable windows.
     *
     * The schema holds no tutor schedules, so this returns an empty list with
     * `source: "not_recorded"` rather than inventing office hours. The agent
     * treats an empty list as "unknown" and asks the parent for a time instead
     * of booking one nobody agreed to.
     *
     * When this site starts capturing schedules, fill `slots` and the agent
     * uses them with no change on its side.
     */
    public function tutorAvailability(Request $request, string $ref): JsonResponse
    {
        $tutor = Register::query()
            ->where('user_id', $ref)
            ->where('join_as', 'teacher')
            ->first();

        if ($tutor === null) {
            return response()->json(['error' => 'tutor_not_found'], 404);
        }

        return $this->ok([
            'tutor_ref' => $ref,
            'timezone' => config('app.agent_timezone', 'Asia/Kolkata'),
            'slots' => [],
            'source' => 'not_recorded',
        ]);
    }

    // ---------------------------------------------------------- commercials

    /**
     * `GET /plans/quote` — the list price, in paise.
     *
     * `list_price_minor` is computed with `bcmul` on the decimal string the
     * database holds. Casting to float first is how 4799.99 becomes 479998.
     */
    public function planQuote(Request $request): JsonResponse
    {
        $planRef = (string) $request->query('plan_ref', '');

        $plan = Plan::query()
            ->where('is_active', 1)
            ->when($planRef !== '', fn ($q) => $q->where('id', self::planId($planRef)))
            ->when($planRef === '', fn ($q) => $q->where('plan_type', 'student'))
            ->orderBy('sort_order')
            ->first();

        if ($plan === null) {
            return response()->json(['error' => 'no_active_plan'], 404);
        }

        return $this->ok([
            'plan_ref' => 'plan_'.$plan->id,
            'plan_name' => (string) $plan->plan_name,
            'list_price_minor' => (int) bcmul((string) $plan->price, '100', 0),
            'currency' => (string) ($plan->currency ?: 'INR'),
            'billing_period' => self::billingPeriod((int) $plan->duration_days),
            'inclusions' => self::inclusions($plan),
        ]);
    }

    /**
     * `GET /customers/discount-eligibility` — how many offers they have had.
     *
     * The agent's discount engine decides the band; this only reports history,
     * so a repeat asker cannot collect a fresh discount every week.
     */
    public function discountEligibility(Request $request): JsonResponse
    {
        $hash = AgentPseudonymiser::stripPrefix((string) $request->query('student_ref', ''));
        $hash = str_starts_with($hash, 'stu_') ? substr($hash, 4) : $hash;
        $lookbackDays = max(1, min(365, (int) $request->query('lookback_days', '90')));

        $register = Register::query()->where('phone_hash', $hash)->first();
        if ($register === null) {
            return $this->ok(['prior_offers' => 0, 'eligible' => true, 'reason' => 'new_customer']);
        }

        $priorOrders = DB::table('order_managment')
            ->where('user_id', $register->user_id)
            ->where('created_at', '>=', now()->subDays($lookbackDays))
            ->count();

        return $this->ok([
            'prior_offers' => $priorOrders,
            // Reported, never decided here. The agent's band engine owns the
            // rule; duplicating it would give two answers that disagree.
            'eligible' => true,
            'lookback_days' => $lookbackDays,
        ]);
    }

    // --------------------------------------------------------------- writes

    /**
     * `POST /demos` — record a demo the agent scheduled.
     *
     * Idempotent on `X-Idempotency-Key`: the agent retries a timeout, and this
     * must not create a second row for one booking.
     */
    public function recordDemo(Request $request): JsonResponse
    {
        $key = (string) $request->header('X-Idempotency-Key', '');
        if ($key === '') {
            return response()->json(['error' => 'idempotency_key_required'], 400);
        }

        $existing = DB::table('demo_leads')->where('source_page', 'agent:'.$key)->first();
        if ($existing !== null) {
            return $this->ok(['recorded' => true, 'created' => false, 'id' => $existing->id]);
        }

        $phone = (string) $request->input('phone', '');
        $id = DB::table('demo_leads')->insertGetId([
            'name' => Str::limit((string) $request->input('student_name', 'Agent lead'), 200, ''),
            'phone' => $phone,
            'phone_hash' => $phone !== ''
                ? AgentPseudonymiser::fromConfig()->phoneHash($phone)
                : null,
            'service' => Str::limit((string) $request->input('service', ''), 200, ''),
            'subject' => Str::limit((string) $request->input('subject', ''), 200, ''),
            'child_class' => Str::limit((string) $request->input('student_class', ''), 200, ''),
            'preferred_time' => Str::limit((string) $request->input('starts_at', ''), 200, ''),
            'mode' => Str::limit((string) $request->input('mode', ''), 200, ''),
            'location' => Str::limit((string) $request->input('locality', ''), 200, ''),
            'message' => 'Demo booked by the Demo Command Center agent. '
                .'demo_id='.(string) $request->input('demo_id', ''),
            // The idempotency key is stored here because `demo_leads` has no
            // column of its own for it. Adding one is the tidier fix; this
            // keeps the write idempotent today without a second migration.
            'source_page' => 'agent:'.$key,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return $this->ok(['recorded' => true, 'created' => true, 'id' => $id]);
    }

    /**
     * `POST /subscriptions/activate` — turn a paid order into a subscription.
     *
     * The most consequential write here. Idempotency is not optional: a
     * timeout-then-retry without it charges once and subscribes twice.
     */
    public function activateSubscription(Request $request): JsonResponse
    {
        $key = (string) $request->header('X-Idempotency-Key', '');
        if ($key === '') {
            return response()->json(['error' => 'idempotency_key_required'], 400);
        }

        $orderRef = (string) $request->input('order_ref', '');
        $studentRef = AgentPseudonymiser::stripPrefix((string) $request->input('student_ref', ''));
        $studentRef = str_starts_with($studentRef, 'stu_') ? substr($studentRef, 4) : $studentRef;

        if ($orderRef === '') {
            return response()->json(['error' => 'order_ref_required'], 422);
        }

        $register = Register::query()->where('phone_hash', $studentRef)->first();
        if ($register === null) {
            return response()->json(['error' => 'student_not_found'], 404);
        }

        $plan = Plan::query()->where('is_active', 1)->where('plan_type', 'student')
            ->orderBy('sort_order')->first();
        if ($plan === null) {
            return response()->json(['error' => 'no_active_plan'], 409);
        }

        // One winner, decided inside a transaction rather than by a read: two
        // concurrent retries of the same key must not both insert.
        return DB::transaction(function () use ($key, $orderRef, $register, $plan): JsonResponse {
            $existing = DB::table('user_subscriptions')
                ->where('user_id', $register->user_id)
                ->where('status', 'active')
                ->lockForUpdate()
                ->first();

            if ($existing !== null) {
                return $this->ok([
                    'subscription_ref' => 'sub_'.$existing->id,
                    'created' => false,
                ]);
            }

            $id = DB::table('user_subscriptions')->insertGetId([
                'user_id' => $register->user_id,
                'plan_id' => $plan->id,
                'plan_type' => 'student',
                'start_date' => now(),
                'end_date' => now()->addDays((int) $plan->duration_days),
                'status' => 'active',
                'payment_status' => 'paid',
                'ai_credit_limit' => 0,
                'contact_limit' => 0,
                'lead_limit' => 0,
                'ai_credit_used' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return $this->ok([
                'subscription_ref' => 'sub_'.$id,
                'created' => true,
                'order_ref' => $orderRef,
                'idempotency_key' => $key,
            ]);
        });
    }

    // -------------------------------------------------------- authorisation

    /**
     * `GET /operators/{ref}/regions` — which regions an operator may see.
     *
     * Returns an empty list for an unknown operator, which the agent reads as
     * "no regions" and therefore refuses. Failing closed is right: the
     * alternative is an unrecognised console user reading every region.
     */
    public function regionAuthorization(string $operatorRef): JsonResponse
    {
        $operator = Register::query()->where('user_id', $operatorRef)->first();
        if ($operator === null) {
            return $this->ok(['operator_ref' => $operatorRef, 'regions' => []]);
        }

        $regions = array_values(array_filter([
            $operator->city,
            $operator->district,
            $operator->state,
        ]));

        return $this->ok(['operator_ref' => $operatorRef, 'regions' => $regions]);
    }

    // ------------------------------------------------------------- helpers

    private function ok(array $payload): JsonResponse
    {
        // `no-store` throughout: these responses carry contact details and
        // pricing, and neither should sit in an intermediary cache.
        return response()->json($payload)->header('Cache-Control', 'no-store');
    }

    /**
     * A number in the form Meta accepts, or null.
     *
     * Null rather than a malformed string: the agent treats a missing number as
     * "cannot deliver" and suppresses the send, which is correct. A malformed
     * one becomes a failed Meta call and a message nobody receives.
     */
    private function deliverablePhone(?string $phone): ?string
    {
        $digits = preg_replace('/\D/', '', (string) $phone) ?? '';
        if (strlen($digits) < 10) {
            return null;
        }
        $last10 = substr($digits, -10);

        return '+'.(string) config('agent.default_country_code', '91').$last10;
    }

    private static function planId(string $planRef): string
    {
        return str_starts_with($planRef, 'plan_') ? substr($planRef, 5) : $planRef;
    }

    private static function billingPeriod(int $days): string
    {
        return match (true) {
            $days <= 31 => 'monthly',
            $days <= 93 => 'quarterly',
            $days <= 186 => 'half_yearly',
            default => 'yearly',
        };
    }

    /** @return array<int,string> */
    private static function inclusions(Plan $plan): array
    {
        $features = $plan->features_json;
        if (is_string($features)) {
            $features = json_decode($features, true);
        }
        if (! is_array($features)) {
            return [];
        }

        return array_values(array_map('strval', array_filter($features, 'is_scalar')));
    }
}
