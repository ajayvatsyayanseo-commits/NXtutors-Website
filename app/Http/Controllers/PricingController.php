<?php

namespace App\Http\Controllers;

use App\Models\SubscriptionPlan;

use App\Models\UserSubscription;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use App\Models\Register;

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

    $baseUrl = env('CASHFREE_ENV') === 'production'
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
        'x-client-id' => env('CASHFREE_APP_ID'),
        'x-client-secret' => env('CASHFREE_SECRET_KEY'),
        'x-api-version' => env('CASHFREE_API_VERSION', '2025-01-01'),
        'Content-Type' => 'application/json',
    ])->post($baseUrl . '/orders', $payload);

    if (!$response->successful()) {
        return back()->with('error', 'Payment order creation failed: ' . $response->body());
    }

    $data = $response->json();

    if (empty($data['payment_session_id'])) {
        return back()->with('error', 'Payment session not created.');
    }

    return view('subscription.cashfree-checkout', [
        'paymentSessionId' => $data['payment_session_id'],
        'cashfreeMode' => env('CASHFREE_ENV') === 'production' ? 'production' : 'sandbox',
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

    $baseUrl = env('CASHFREE_ENV') === 'production'
        ? 'https://api.cashfree.com/pg'
        : 'https://sandbox.cashfree.com/pg';

    $response = Http::withHeaders([
        'x-client-id' => env('CASHFREE_APP_ID'),
        'x-client-secret' => env('CASHFREE_SECRET_KEY'),
        'x-api-version' => env('CASHFREE_API_VERSION', '2025-01-01'),
    ])->get($baseUrl . '/orders/' . $orderId);

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
    \Log::info('Cashfree Webhook Hit', [
        'headers' => $request->headers->all(),
        'body' => $request->all(),
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