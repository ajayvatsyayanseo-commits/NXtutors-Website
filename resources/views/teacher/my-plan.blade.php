 @include('include.teacherheader')
 
 <div class="right_col" role="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">My Plan</li>
        </ol>
      </nav>
    </div> 
<style>
.my-plan-section{
    padding:24px;
    background:#f4f7fb;
    min-height:100vh;
}

.my-plan-wrap{
    max-width:1180px;
    margin:auto;
}

.plan-hero{
    background:linear-gradient(135deg,#0f172a,#2563eb);
    border-radius:28px;
    padding:34px;
    color:#fff;
    margin-bottom:28px;
    box-shadow:0 20px 50px rgba(15,23,42,.18);
}

.plan-hero h1{
    font-size:clamp(28px,4vw,44px);
    margin:0 0 8px;
    font-weight:900;
}

.plan-hero p{
    color:#dbeafe;
    margin:0;
}

.active-plan-card{
    background:#fff;
    border-radius:26px;
    padding:28px;
    margin-bottom:30px;
    box-shadow:0 18px 45px rgba(15,23,42,.08);
    border:1px solid #e5e7eb;
}

.active-plan-top{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    gap:20px;
    flex-wrap:wrap;
    margin-bottom:24px;
}

.plan-name{
    font-size:30px;
    font-weight:900;
    color:#0f172a;
}

.active-plan-top p{
    color:#64748b;
    margin:6px 0 0;
}

.plan-badge{
    padding:10px 18px;
    border-radius:999px;
    background:#22c55e;
    color:#fff;
    font-weight:900;
    font-size:14px;
}

.usage-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:16px;
}

.usage-box{
    background:linear-gradient(180deg,#f8fafc,#eef2ff);
    border:1px solid #e5e7eb;
    border-radius:20px;
    padding:20px;
}

.usage-box span{
    display:block;
    color:#64748b;
    font-size:14px;
    margin-bottom:8px;
    font-weight:700;
}

.usage-box strong{
    color:#0f172a;
    font-size:26px;
    font-weight:900;
}

.available-title{
    color:#0f172a;
    font-size:28px;
    font-weight:900;
    margin:32px 0 18px;
}

.plan-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
}

.plan-card{
    background:#fff;
    border-radius:24px;
    padding:26px;
    color:#0f172a;
    box-shadow:0 18px 45px rgba(15,23,42,.08);
    border:1px solid #e5e7eb;
    display:flex;
    flex-direction:column;
    transition:.25s ease;
}

.plan-card:hover{
    transform:translateY(-6px);
    box-shadow:0 24px 60px rgba(15,23,42,.14);
}

.plan-card h3{
    font-size:24px;
    font-weight:900;
    margin-bottom:10px;
}

.price{
    font-size:38px;
    font-weight:950;
    color:#16a34a;
    margin-bottom:18px;
}

.plan-card ul{
    padding:0;
    list-style:none;
    display:grid;
    gap:10px;
    margin-bottom:22px;
    flex:1;
}

.plan-card li{
    font-size:14px;
    color:#475569;
}

.plan-btn{
    display:flex;
    justify-content:center;
    align-items:center;
    height:48px;
    border-radius:16px;
    background:#2563eb;
    color:#fff;
    text-decoration:none;
    font-weight:900;
}

.plan-btn:hover{
    color:#fff;
    background:#1d4ed8;
}

.current-btn{
    background:#e5e7eb;
    color:#111827;
    pointer-events:none;
}

.no-plan{
    background:#fff7ed;
    border:1px solid #fed7aa;
    color:#9a3412;
    padding:18px;
    border-radius:18px;
    margin-bottom:22px;
    font-weight:700;
}

@media(max-width:1100px){
    .plan-grid{
        grid-template-columns:repeat(2,1fr);
    }
}

@media(max-width:768px){
    .my-plan-section{
        padding:16px;
    }

    .usage-grid,
    .plan-grid{
        grid-template-columns:1fr;
    }

    .plan-hero,
    .active-plan-card,
    .plan-card{
        border-radius:20px;
        padding:22px;
    }
}

@media(max-width:480px){
    .plan-name{
        font-size:24px;
    }

    .price{
        font-size:32px;
    }

    .usage-box strong{
        font-size:22px;
    }
}
</style>

<section class="my-plan-section">
    <div class="my-plan-wrap">

       
        @if($subscription && $subscription->plan)
            <div class="active-plan-card">
                <div class="active-plan-top">
                    <div>
                        <div class="plan-name">{{ $subscription->plan->plan_name }}</div>
                        <p>
                            Valid till:
                            {{ optional($subscription->end_date)->format('d M Y') }}
                        </p>
                    </div>

                    <span class="plan-badge">Active</span>
                </div>

                <div class="usage-grid">
                    <div class="usage-box">
                        <span>AI Credits</span>
                        <strong>{{ $subscription->ai_credit_used }} / {{ $subscription->ai_credit_limit }}</strong>
                    </div>

                    <div class="usage-box">
                        <span>Lead Used</span>
                        <strong>{{ $subscription->lead_used }} / {{ $subscription->lead_limit }}</strong>
                    </div>

                    <div class="usage-box">
                        <span>Contact Used</span>
                        <strong>{{ $subscription->contact_used }} / {{ $subscription->contact_limit }}</strong>
                    </div>
                </div>
            </div>
        @else
            <div class="no-plan">
                You do not have an active tutor plan. Choose a plan to unlock leads and AI tools.
            </div>
        @endif

        <h2 class="available-title">Available Tutor Plans</h2>

        <div class="plan-grid">
            @foreach($tutorPlans as $plan)
                @php
                    $features = $plan->features;

                    if (is_string($features)) {
                        $decoded = json_decode($features, true);
                        $features = is_array($decoded) ? $decoded : [];
                    }

                    if (!is_array($features)) {
                        $features = [];
                    }

                    $isCurrent = $subscription && $subscription->plan_id == $plan->id;
                @endphp

                <div class="plan-card">
                    <h3>{{ $plan->plan_name }}</h3>

                    <div class="price">
                        {{ $plan->price > 0 ? '₹'.number_format($plan->price, 0) : 'Free' }}
                    </div>

                    <ul>
                        <li>✔ AI Credits: {{ $plan->ai_credits ?? 0 }}</li>
                        <li>✔ Leads: {{ $plan->lead_limit ?? 0 }}</li>
                        <li>✔ Contacts: {{ $plan->contact_limit ?? 0 }}</li>

                        @foreach($features as $feature)
                            <li>✔ {{ $feature }}</li>
                        @endforeach
                    </ul>

                    @if($isCurrent)
                        <a href="javascript:void(0)" class="plan-btn current-btn">Current Plan</a>
                    @else
                        <a href="{{ route('subscription.buy', $plan->id) }}" class="plan-btn">
                            {{ $plan->price > 0 ? 'Upgrade / Buy' : 'Activate Free' }}
                        </a>
                    @endif
                </div>
            @endforeach
        </div>

    </div>
</section>


    </div>

  @include('include.teacherfooter')