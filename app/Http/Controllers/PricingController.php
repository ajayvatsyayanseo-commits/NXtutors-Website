<?php

namespace App\Http\Controllers;

use App\Models\SubscriptionPlan;

use App\Models\UserSubscription;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use App\Models\Register;
use Illuminate\Support\Facades\Log;

class PricingController extends Controller
{
    public function index()
    {
        $studentPlans = SubscriptionPlan::where('status', 1)
            ->where('plan_type', 'student')
            ->orderBy('sort_order', 'asc')
            ->orderBy('price', 'asc')
            ->get();

        $tutorPlans = SubscriptionPlan::where('status', 1)
            ->where('plan_type', 'tutor')
            ->orderBy('sort_order', 'asc')
            ->orderBy('price', 'asc')
            ->get();

        $metatitle = 'Pricing Plans - NXTutors';
        $metakey = 'NXTutors pricing, student plans, tutor plans, AI tutor plans';
        $metadesc = 'Choose NXTutors student and tutor subscription plans with AI credits, contact limits and lead limits.';

        return view('pricing', compact(
            'studentPlans',
            'tutorPlans',
            'metatitle',
            'metakey',
            'metadesc'
        ));
    }



    public function buy($planId)
    {
        $plan = SubscriptionPlan::where('status', 1)->findOrFail($planId);

        if (!session()->has('userid')) {
            session(['intended_plan_id' => $plan->id]);

            return redirect()->route('login');
        }

        return redirect()->route('subscription.checkout', $plan->id);
    }

    public function checkout($planId)
    {
        if (!session()->has('userid')) {
            session(['intended_plan_id' => $planId]);

            return redirect()->route('login');
        }

        $plan = SubscriptionPlan::where('status', 1)->findOrFail($planId);

        $metatitle = 'Checkout - ' . $plan->plan_name;
        $metakey = '';
        $metadesc = '';

        return view('subscription.checkout', compact(
            'plan',
            'metatitle',
            'metakey',
            'metadesc'
        ));
    }

     public function activateFree($planId)
    {
        if (!session()->has('userid')) {
            session(['intended_plan_id' => $planId]);
            return redirect()->route('login');
        }

        $plan = SubscriptionPlan::where('status', 1)
            ->where('price', 0)
            ->findOrFail($planId);

        $this->createSubscription($plan, 'free');

        return redirect()->route(
            session('join_as') === 'teacher' ? 'teacher.my-plan' : 'user.my-plan'
        )->with('success', 'Free plan activated successfully.');
    }

    // public function pay($planId)
    // {
    //     if (!session()->has('userid')) {
    //         session(['intended_plan_id' => $planId]);
    //         return redirect()->route('login');
    //     }

    //     $plan = SubscriptionPlan::where('status', 1)
    //         ->where('price', '>', 0)
    //         ->findOrFail($planId);

    //     // Temporary: activate directly until payment gateway is added.
    //     $this->createSubscription($plan, 'paid_test');

    //     return redirect()->route(
    //         session('join_as') === 'teacher' ? 'teacher.my-plan' : 'user.my-plan'
    //     )->with('success', 'Plan activated successfully.');
    // }

    public function pay($planId)
{
    if (!session()->has('userid')) {
        session(['intended_plan_id' => $planId]);
        return redirect()->route('login');
    }

    $plan = SubscriptionPlan::where('status', 1)
        ->where('price', '>', 0)
        ->findOrFail($planId);

    $user = Register::where('user_id', session('userid'))->firstOrFail();

    $orderId = 'NXT-' . time() . '-' . Str::random(6);

    session([
        'cashfree_order_id' => $orderId,
        'cashfree_plan_id' => $plan->id,
    ]);

    $baseUrl = config('services.cashfree.environment') === 'production'
        ? 'https://api.cashfree.com/pg'
        : 'https://sandbox.cashfree.com/pg';

    $returnUrl = route('subscription.payment.success') . '?order_id={order_id}';

    $payload = [
        'order_id' => $orderId,
        'order_amount' => (float) $plan->price,
        'order_currency' => 'INR',
        'customer_details' => [
            'customer_id' => (string) $user->user_id,
            'customer_name' => $user->name ?? 'NXTutors User',
            'customer_email' => $user->email ?? 'support@nxtutors.com',
            'customer_phone' => preg_replace('/[^0-9]/', '', $user->phone ?? '9999999999'),
        ],
        'order_meta' => [
            'return_url' => $returnUrl,
        ],
        'order_note' => 'NXTutors Subscription - ' . $plan->plan_name,
    ];

    $response = Http::withHeaders([
        'x-client-id' => config('services.cashfree.app_id'),
        'x-client-secret' => config('services.cashfree.secret_key'),
        'x-api-version' => config('services.cashfree.api_version'),
        'Content-Type' => 'application/json',
    ])->connectTimeout(5)->timeout(20)->retry(1, 250, throw: false)->post($baseUrl . '/orders', $payload);

    if (!$response->successful()) {
        Log::warning('Cashfree order creation failed.', ['status' => $response->status()]);

        return back()->with('error', 'Payment order creation failed. Please try again.');
    }

    $data = $response->json();

    if (empty($data['payment_session_id'])) {
        return back()->with('error', 'Payment session not created.');
    }

    return view('subscription.cashfree-checkout', [
        'paymentSessionId' => $data['payment_session_id'],
        'cashfreeMode' => config('services.cashfree.environment') === 'production' ? 'production' : 'sandbox',
        'metatitle' => 'Processing Payment - NXTutors',
        'metakey' => '',
        'metadesc' => '',
    ]);
}


public function paymentSuccess(Request $request)
{
    if (!session()->has('userid')) {
        return redirect()->route('login');
    }

    $orderId = $request->order_id;

    if (!$orderId) {
        return redirect()->route('pricing')->with('error', 'Invalid payment response.');
    }

    $expectedOrderId = (string) session('cashfree_order_id');
    if ($expectedOrderId === '' || ! hash_equals($expectedOrderId, (string) $orderId)) {
        return redirect()->route('pricing')->with('error', 'Invalid payment response.');
    }

    $baseUrl = config('services.cashfree.environment') === 'production'
        ? 'https://api.cashfree.com/pg'
        : 'https://sandbox.cashfree.com/pg';

    $response = Http::withHeaders([
        'x-client-id' => config('services.cashfree.app_id'),
        'x-client-secret' => config('services.cashfree.secret_key'),
        'x-api-version' => config('services.cashfree.api_version'),
    ])->connectTimeout(5)->timeout(20)->retry(1, 250, throw: false)->get($baseUrl . '/orders/' . $orderId);

    if (!$response->successful()) {
        return redirect()->route('pricing')->with('error', 'Payment verification failed.');
    }

    $order = $response->json();

    if (($order['order_status'] ?? '') !== 'PAID') {
        return redirect()->route('pricing')->with('error', 'Payment not completed.');
    }

    $planId = session('cashfree_plan_id');

    if (!$planId) {
        return redirect()->route('pricing')->with('error', 'Plan session expired.');
    }

    $plan = SubscriptionPlan::where('status', 1)->findOrFail($planId);

    $this->createSubscription($plan, 'paid');

    session()->forget(['cashfree_order_id', 'cashfree_plan_id']);

    return redirect()->route(
        session('join_as') === 'teacher' ? 'teacher.my-plan' : 'user.my-plan'
    )->with('success', 'Payment successful. Plan activated.');
}

public function cashfreeWebhook(Request $request)
{
    $timestamp = (string) $request->header('x-webhook-timestamp');
    $signature = (string) $request->header('x-webhook-signature');
    $secret = (string) config('services.cashfree.secret_key');

    if ($timestamp === '' || $signature === '' || $secret === '') {
        return response()->json(['message' => 'Invalid webhook signature.'], 401);
    }

    $expected = base64_encode(hash_hmac('sha256', $timestamp.$request->getContent(), $secret, true));

    if (! hash_equals($expected, $signature)) {
        Log::warning('Cashfree webhook signature verification failed.');

        return response()->json(['message' => 'Invalid webhook signature.'], 401);
    }

    Log::info('Cashfree webhook verified.', [
        'event' => $request->input('type'),
        'order_id' => $request->input('data.order.order_id'),
    ]);

    return response()->json([
        'message' => 'Webhook received'
    ], 200);
}

    private function createSubscription($plan, $paymentStatus)
    {
        $startDate = Carbon::now();
        $endDate = Carbon::now()->addDays($plan->duration_days ?? 30);

        return UserSubscription::updateOrCreate(
            [
                'user_id' => session('userid'),
                'plan_type' => $plan->plan_type,
            ],
            [
                'plan_id' => $plan->id,
                'start_date' => $startDate,
                'end_date' => $endDate,
                'status' => 'active',
                'payment_status' => $paymentStatus,
                'ai_credit_limit' => $plan->ai_credit_limit ?? 0,
                'contact_limit' => $plan->contact_limit ?? 0,
                'lead_limit' => $plan->lead_limit ?? 0,
                'ai_credit_used' => 0,
                'contact_used' => 0,
                'lead_used' => 0,
            ]
        );
    }

    public function teacherMyPlan()
{
    if (!session()->has('userid') || session('join_as') !== 'teacher') {
        return redirect()->route('login');
    }

    $subscription = UserSubscription::with('plan')
        ->where('user_id', session('userid'))
        ->where('plan_type', 'tutor')
        ->where('status', 'active')
        ->latest()
        ->first();

    $tutorPlans = SubscriptionPlan::where('status', 1)
        ->where('plan_type', 'tutor')
        ->orderBy('sort_order', 'asc')
        ->orderBy('price', 'asc')
        ->get();

    $metatitle = 'My Plan - NXTutors';
    $metakey = '';
    $metadesc = '';

    return view('teacher.my-plan', compact(
        'subscription',
        'tutorPlans',
        'metatitle',
        'metakey',
        'metadesc'
    ));
}

public function studentMyPlan()
{
    if (!session()->has('userid') || session('join_as') !== 'student') {
        return redirect()->route('login');
    }

    $subscription = UserSubscription::with('plan')
        ->where('user_id', session('userid'))
        ->where('plan_type', 'student')
        ->where('status', 'active')
        ->latest()
        ->first();

    $studentPlans = SubscriptionPlan::where('status', 1)
        ->where('plan_type', 'student')
        ->orderBy('sort_order', 'asc')
        ->orderBy('price', 'asc')
        ->get();

    $metatitle = 'My Plan - NXTutors';
    $metakey = '';
    $metadesc = '';

    return view('user.my-plan', compact(
        'subscription',
        'studentPlans',
        'metatitle',
        'metakey',
        'metadesc'
    ));
}
}
