@include('include.header')

<style>
.checkout-section{
    padding:clamp(32px,6vw,80px) 16px;
}

.checkout-wrap{
    max-width:1050px;
    margin:auto;
    display:grid;
    grid-template-columns:minmax(0,1fr) 420px;
    gap:32px;
    align-items:start;
}

.checkout-left h1{
    color:#fff;
    font-size:clamp(32px,5vw,52px);
    margin-bottom:14px;
}

.checkout-left p{
    color:#cbd5e1;
    line-height:1.7;
}

.checkout-card{
    background:rgba(255,255,255,.07);
    border:1px solid rgba(255,255,255,.14);
    border-radius:26px;
    padding:30px;
    color:#fff;
    box-shadow:0 24px 70px rgba(0,0,0,.28);
    backdrop-filter:blur(18px);
}

.plan-name{
    font-size:28px;
    font-weight:800;
    margin-bottom:8px;
}

.plan-type{
    display:inline-block;
    padding:6px 12px;
    border-radius:999px;
    background:rgba(56,189,248,.15);
    color:#38bdf8;
    font-size:13px;
    margin-bottom:18px;
}

.plan-price{
    font-size:42px;
    font-weight:900;
    color:#fbbf24;
    margin-bottom:6px;
}

.plan-duration{
    color:#cbd5e1;
    margin-bottom:22px;
}

.plan-list{
    list-style:none;
    padding:0;
    margin:0 0 24px;
    display:grid;
    gap:12px;
}

.plan-list li{
    color:#e5e7eb;
    font-size:15px;
}

.checkout-btn{
    width:100%;
    height:54px;
    border:0;
    border-radius:16px;
    background:#fbbf24;
    color:#111827;
    font-weight:900;
    font-size:16px;
    cursor:pointer;
}

.checkout-btn.free{
    background:#22c55e;
    color:#052e16;
}

.back-link{
    display:block;
    text-align:center;
    margin-top:16px;
    color:#38bdf8;
    text-decoration:none;
}

.notice-box{
    margin-top:20px;
    padding:14px;
    border-radius:14px;
    background:rgba(255,255,255,.06);
    color:#cbd5e1;
    font-size:14px;
}

@media(max-width:900px){
    .checkout-wrap{
        grid-template-columns:1fr;
        max-width:680px;
    }

    .checkout-left{
        text-align:center;
    }
}

@media(max-width:576px){
    .checkout-card{
        padding:22px 16px;
        border-radius:20px;
    }

    .plan-price{
        font-size:34px;
    }
}
</style>

<section class="checkout-section">
    <div class="checkout-wrap">

        <div class="checkout-left">
            <h1>Complete Your Subscription</h1>
            <p>
                You selected the <strong>{{ $plan->plan_name }}</strong> plan.
                Review your plan details and continue to activate your subscription.
            </p>

            <div class="notice-box">
                Your subscription will be activated after successful confirmation/payment.
            </div>
        </div>

        <div class="checkout-card">
            <div class="plan-type">
                {{ ucfirst($plan->plan_type) }} Plan
            </div>

            <div class="plan-name">
                {{ $plan->plan_name }}
            </div>

            <div class="plan-price">
                @if($plan->price > 0)
                    ₹{{ number_format($plan->price, 0) }}
                @else
                    Free
                @endif
            </div>

            <div class="plan-duration">
                Valid for {{ $plan->duration_days ?? 30 }} days
            </div>

            @php
    $features = $plan->features;

    if (is_string($features)) {
        $decoded = json_decode($features, true);
        $features = is_array($decoded) ? $decoded : [];
    }

    if (!is_array($features)) {
        $features = [];
    }
@endphp

<ul class="plan-list">
    <li>✔ AI Credits: {{ $plan->ai_credits ?? 0 }}</li>
    <li>✔ Contact Limit: {{ $plan->contact_limit ?? 0 }}</li>
    <li>✔ Lead Limit: {{ $plan->lead_limit ?? 0 }}</li>

    @forelse($features as $feature)
        <li>✔ {{ $feature }}</li>
    @empty
        <li>✔ No extra features added.</li>
    @endforelse
</ul>

            @if($plan->price > 0)
                <form method="POST" action="{{ route('subscription.pay', $plan->id) }}">
                    @csrf
                    <button type="submit" class="checkout-btn">
                        Proceed to Payment
                    </button>
                </form>
            @else
                <form method="POST" action="{{ route('subscription.activate.free', $plan->id) }}">
                    @csrf
                    <button type="submit" class="checkout-btn free">
                        Activate Free Plan
                    </button>
                </form>
            @endif

            <a href="{{ route('pricing') }}" class="back-link">
                ← Back to Pricing
            </a>
        </div>

    </div>
</section>

@include('include.footer')