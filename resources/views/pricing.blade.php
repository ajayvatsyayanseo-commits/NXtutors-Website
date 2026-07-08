<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $metatitle ?? 'Pricing Plans - NXTutors' }}</title>
    <meta name="title" content="{{ $metatitle ?? 'Pricing Plans - NXTutors' }}">
    <meta name="keywords" content="{{ $metakey ?? 'NXTutors pricing, student plans, tutor plans' }}">
    <meta name="description" content="{{ $metadesc ?? 'Choose NXTutors student and tutor subscription plans.' }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('include.header')
</head>

<body>
<main class="main">

<style>
    :root {
        --nx-primary: #0f5f9c;
        --nx-primary-dark: #0b3b70;
        --nx-secondary: #1c8c3a;
        --nx-secondary-dark: #116329;
        --nx-heading: #082a55;
        --nx-text: #536173;
        --nx-muted: #7c8798;
        --nx-light: #f4f8fd;
        --nx-border: #e5edf7;
        --nx-white: #ffffff;
        --nx-shadow: 0 18px 45px rgba(8, 42, 85, 0.10);
        --nx-shadow-hover: 0 22px 60px rgba(8, 42, 85, 0.18);
    }

    .pricing-page {
        background:
            radial-gradient(circle at top left, rgba(15, 95, 156, 0.12), transparent 32%),
            radial-gradient(circle at top right, rgba(28, 140, 58, 0.10), transparent 30%),
            linear-gradient(180deg, #f8fbff 0%, #eef5ff 100%);
        padding: 70px 0 80px;
        overflow: hidden;
    }

    .pricing-wrapper {
        width: min(1180px, calc(100% - 32px));
        margin: 0 auto;
    }

    .pricing-hero {
        position: relative;
        background: linear-gradient(135deg, #ffffff 0%, #edf6ff 100%);
        border: 1px solid rgba(15, 95, 156, 0.10);
        border-radius: 28px;
        padding: 48px 28px;
        text-align: center;
        margin-bottom: 28px;
        box-shadow: var(--nx-shadow);
        overflow: hidden;
    }

    .pricing-hero::before {
        content: "";
        position: absolute;
        width: 220px;
        height: 220px;
        background: rgba(15, 95, 156, 0.10);
        border-radius: 50%;
        top: -90px;
        left: -80px;
    }

    .pricing-hero::after {
        content: "";
        position: absolute;
        width: 240px;
        height: 240px;
        background: rgba(28, 140, 58, 0.10);
        border-radius: 50%;
        right: -90px;
        bottom: -110px;
    }

    .pricing-hero-inner {
        position: relative;
        z-index: 2;
    }

    .pricing-kicker {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #ffffff;
        border: 1px solid var(--nx-border);
        color: var(--nx-primary);
        padding: 8px 16px;
        border-radius: 999px;
        font-size: 13px;
        font-weight: 800;
        margin-bottom: 16px;
        box-shadow: 0 8px 25px rgba(8, 42, 85, 0.08);
    }

    .pricing-heading h1 {
        font-size: clamp(30px, 4vw, 52px);
        line-height: 1.08;
        font-weight: 900;
        color: var(--nx-heading);
        margin: 0 0 14px;
        letter-spacing: -0.04em;
    }

    .pricing-heading p {
        color: var(--nx-text);
        font-size: clamp(14px, 1.6vw, 17px);
        max-width: 760px;
        margin: 0 auto;
        line-height: 1.7;
    }

    .pricing-tabs-wrap {
        display: flex;
        justify-content: center;
        margin: 0 0 34px;
        position: sticky;
        top: 0;
        z-index: 10;
        padding-top: 6px;
    }

    .pricing-tabs {
        display: inline-flex;
        gap: 8px;
        padding: 8px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.88);
        border: 1px solid var(--nx-border);
        box-shadow: 0 12px 35px rgba(8, 42, 85, 0.10);
        backdrop-filter: blur(10px);
    }

    .pricing-tab-btn {
        border: 0;
        background: transparent;
        color: var(--nx-heading);
        padding: 12px 24px;
        border-radius: 999px;
        font-weight: 900;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.25s ease;
        white-space: nowrap;
    }

    .pricing-tab-btn.active {
        background: var(--nx-primary);
        color: #ffffff;
        box-shadow: 0 10px 22px rgba(15, 95, 156, 0.28);
    }

    .pricing-tab-btn[data-target="tutor-plans"].active {
        background: var(--nx-secondary);
        box-shadow: 0 10px 22px rgba(28, 140, 58, 0.25);
    }

    .pricing-tab-content {
        display: none;
        animation: pricingFade 0.35s ease;
    }

    .pricing-tab-content.active {
        display: block;
    }

    @keyframes pricingFade {
        from {
            opacity: 0;
            transform: translateY(8px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .pricing-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 22px;
        align-items: stretch;
    }

    .pricing-card {
        background: rgba(255, 255, 255, 0.96);
        border-radius: 24px;
        border: 1px solid var(--nx-border);
        padding: 24px;
        min-height: 100%;
        position: relative;
        box-shadow: var(--nx-shadow);
        transition: all 0.28s ease;
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .pricing-card::before {
        content: "";
        position: absolute;
        inset: 0 0 auto 0;
        height: 5px;
        background: linear-gradient(90deg, var(--nx-primary), #4ab3ff);
    }

    #tutor-plans .pricing-card::before {
        background: linear-gradient(90deg, var(--nx-secondary), #7ee29b);
    }

    .pricing-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--nx-shadow-hover);
        border-color: rgba(15, 95, 156, 0.22);
    }

    .pricing-card.featured {
        border-color: rgba(15, 95, 156, 0.35);
        transform: translateY(-4px);
    }

    #tutor-plans .pricing-card.featured {
        border-color: rgba(28, 140, 58, 0.35);
    }

    .popular-ribbon {
        position: absolute;
        top: 17px;
        right: 18px;
        background: #ffb13d;
        color: #2d210b;
        padding: 7px 12px;
        border-radius: 999px;
        font-size: 11px;
        font-weight: 900;
        box-shadow: 0 10px 20px rgba(255, 177, 61, 0.28);
    }

    .plan-badge {
        display: inline-flex;
        align-items: center;
        width: fit-content;
        padding: 7px 13px;
        border-radius: 999px;
        font-size: 12px;
        font-weight: 900;
        margin-bottom: 18px;
    }

    .student-badge {
        background: #e8f3ff;
        color: var(--nx-primary);
    }

    .tutor-badge {
        background: #eaf8ec;
        color: var(--nx-secondary);
    }

    .plan-name {
        font-size: 23px;
        line-height: 1.2;
        font-weight: 900;
        color: var(--nx-heading);
        margin: 0 0 12px;
        padding-right: 72px;
    }

    .plan-price {
        display: flex;
        align-items: flex-end;
        gap: 3px;
        margin-bottom: 20px;
        color: var(--nx-heading);
    }

    .plan-price .currency {
        font-size: 22px;
        font-weight: 900;
        margin-bottom: 8px;
    }

    .plan-price .amount {
        font-size: 46px;
        line-height: 0.95;
        font-weight: 950;
        letter-spacing: -0.05em;
    }

    .plan-price .duration {
        font-size: 13px;
        color: var(--nx-muted);
        margin-bottom: 7px;
        margin-left: 4px;
        white-space: nowrap;
    }

    .plan-limits {
        background: linear-gradient(180deg, #f7faff 0%, #f1f6fc 100%);
        border: 1px solid #edf3fa;
        border-radius: 18px;
        padding: 14px;
        margin-bottom: 20px;
    }

    .limit-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 12px;
        padding: 9px 0;
        border-bottom: 1px solid #e3ebf5;
        font-size: 13px;
    }

    .limit-row:first-child {
        padding-top: 0;
    }

    .limit-row:last-child {
        border-bottom: 0;
        padding-bottom: 0;
    }

    .limit-label {
        color: var(--nx-muted);
        font-weight: 700;
    }

    .limit-value {
        color: var(--nx-heading);
        font-weight: 950;
        text-align: right;
    }

    .features-title {
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: 950;
        color: var(--nx-heading);
        margin: 2px 0 14px;
        font-size: 14px;
    }

    .features-title::before {
        content: "";
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--nx-primary);
    }

    #tutor-plans .features-title::before {
        background: var(--nx-secondary);
    }

    .feature-list {
        list-style: none;
        padding: 0;
        margin: 0 0 22px;
        flex: 1;
    }

    .feature-list li {
        position: relative;
        padding-left: 26px;
        margin-bottom: 11px;
        color: #46566b;
        font-size: 13.5px;
        line-height: 1.45;
    }

    .feature-list li::before {
        content: "✓";
        position: absolute;
        left: 0;
        top: 0;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: #e9f8ee;
        color: #159447;
        font-size: 12px;
        font-weight: 950;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .pricing-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        text-align: center;
        border-radius: 16px;
        padding: 14px 18px;
        font-weight: 950;
        font-size: 14px;
        text-decoration: none;
        transition: all 0.25s ease;
        margin-top: auto;
    }

    .student-btn {
        background: var(--nx-primary);
        color: #ffffff;
        box-shadow: 0 14px 24px rgba(15, 95, 156, 0.22);
    }

    .student-btn:hover {
        background: var(--nx-primary-dark);
        color: #ffffff;
        transform: translateY(-2px);
    }

    .tutor-btn {
        background: var(--nx-secondary);
        color: #ffffff;
        box-shadow: 0 14px 24px rgba(28, 140, 58, 0.20);
    }

    .tutor-btn:hover {
        background: var(--nx-secondary-dark);
        color: #ffffff;
        transform: translateY(-2px);
    }

    .empty-plan-box {
        background: #ffffff;
        border-radius: 22px;
        padding: 42px 22px;
        text-align: center;
        color: var(--nx-muted);
        box-shadow: var(--nx-shadow);
        border: 1px solid var(--nx-border);
    }

    @media (max-width: 1199px) {
        .pricing-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 991px) {
        .pricing-page {
            padding: 48px 0 60px;
        }

        .pricing-hero {
            padding: 38px 22px;
            border-radius: 22px;
        }

        .pricing-wrapper {
            width: min(100% - 24px, 860px);
        }

        .pricing-card {
            padding: 22px;
        }
    }

    @media (max-width: 767px) {
        .pricing-page {
            padding: 28px 0 42px;
        }

        .pricing-wrapper {
            width: calc(100% - 20px);
        }

        .pricing-hero {
            padding: 30px 16px;
            margin-bottom: 20px;
        }

        .pricing-kicker {
            font-size: 12px;
            padding: 7px 12px;
        }

        .pricing-heading h1 {
            font-size: 29px;
        }

        .pricing-heading p {
            font-size: 14px;
            line-height: 1.6;
        }

        .pricing-tabs-wrap {
            margin-bottom: 22px;
        }

        .pricing-tabs {
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            border-radius: 18px;
            padding: 6px;
        }

        .pricing-tab-btn {
            width: 100%;
            padding: 11px 10px;
            font-size: 13px;
            border-radius: 14px;
        }

        .pricing-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }

        .pricing-card {
            border-radius: 20px;
            padding: 20px;
        }

        .plan-name {
            font-size: 21px;
        }

        .plan-price .amount {
            font-size: 40px;
        }

        .plan-limits {
            padding: 13px;
        }

        .feature-list li {
            font-size: 13px;
        }
    }

    @media (max-width: 420px) {
        .pricing-wrapper {
            width: calc(100% - 16px);
        }

        .pricing-card {
            padding: 18px;
        }

        .popular-ribbon {
            position: static;
            display: inline-flex;
            width: fit-content;
            margin-bottom: 12px;
        }

        .plan-name {
            padding-right: 0;
        }

        .plan-price {
            flex-wrap: wrap;
        }

        .plan-price .duration {
            width: 100%;
            margin-left: 0;
            margin-top: 3px;
        }
    }
</style>

<section class="pricing-page">
    <div class="pricing-wrapper">
        <div class="pricing-hero">
            <div class="pricing-hero-inner pricing-heading">
                <div class="pricing-kicker">
                    AI Powered Subscription Plans
                </div>

                <h1>Choose Your NXTutors Plan</h1>

                <p>
                    Select the right subscription plan for students, parents, and tutors.
                    Get AI credits, tutor contact access, lead access, and premium visibility based on your plan.
                </p>
            </div>
        </div>

        <div class="pricing-tabs-wrap">
            <div class="pricing-tabs">
                <button type="button" class="pricing-tab-btn active" data-target="student-plans">
                    Student Plans
                </button>

                <button type="button" class="pricing-tab-btn" data-target="tutor-plans">
                    Tutor Plans
                </button>
            </div>
        </div>

        <div id="student-plans" class="pricing-tab-content active">
            <div class="pricing-grid">
                @forelse($studentPlans as $plan)
                    @php
                        $features = $plan->features;

                        if (is_string($features)) {
                            $decoded = json_decode($features, true);
                            $features = is_array($decoded) ? $decoded : [];
                        }

                        if (!is_array($features)) {
                            $features = [];
                        }

                        $isPopular = in_array(strtolower($plan->plan_name), [
                            'student plus',
                            'student premium'
                        ]);
                    @endphp

                    <div class="pricing-card {{ $isPopular ? 'featured' : '' }}">
                        @if($isPopular)
                            <div class="popular-ribbon">Popular</div>
                        @endif

                        <span class="plan-badge student-badge">
                            Student
                        </span>

                        <h2 class="plan-name">
                            {{ $plan->plan_name }}
                        </h2>

                        <div class="plan-price">
                            <span class="currency">₹</span>
                            <span class="amount">{{ number_format($plan->price, 0) }}</span>
                            <span class="duration">/ {{ $plan->duration_days }} days</span>
                        </div>

                        <div class="plan-limits">
                            <div class="limit-row">
                                <span class="limit-label">AI Credits</span>
                                <span class="limit-value">{{ number_format($plan->ai_credits) }}</span>
                            </div>

                            <div class="limit-row">
                                <span class="limit-label">Tutor Contacts</span>
                                <span class="limit-value">{{ number_format($plan->contact_limit) }}</span>
                            </div>

                            <div class="limit-row">
                                <span class="limit-label">Lead Limit</span>
                                <span class="limit-value">{{ number_format($plan->lead_limit) }}</span>
                            </div>
                        </div>

                        <div class="features-title">
                            Included Features
                        </div>

                        <ul class="feature-list">
                            @forelse($features as $feature)
                                <li>{{ $feature }}</li>
                            @empty
                                <li>No features added.</li>
                            @endforelse
                        </ul>

                        @if($plan->price > 0)
                            <a href="{{ route('subscription.buy', $plan->id) }}" class="pricing-btn student-btn">
                                Choose Plan
                            </a>
                        @else
                            <a href="{{ route('subscription.buy', $plan->id) }}" class="pricing-btn student-btn">
                                Start Free
                            </a>
                        @endif
                    </div>
                @empty
                    <div class="empty-plan-box">
                        Student plans are not available right now.
                    </div>
                @endforelse
            </div>
        </div>

        <div id="tutor-plans" class="pricing-tab-content">
            <div class="pricing-grid">
                @forelse($tutorPlans as $plan)
                    @php
                        $features = $plan->features;

                        if (is_string($features)) {
                            $decoded = json_decode($features, true);
                            $features = is_array($decoded) ? $decoded : [];
                        }

                        if (!is_array($features)) {
                            $features = [];
                        }

                        $isPopular = in_array(strtolower($plan->plan_name), [
                            'tutor pro',
                            'tutor premium'
                        ]);
                    @endphp

                    <div class="pricing-card {{ $isPopular ? 'featured' : '' }}">
                        @if($isPopular)
                            <div class="popular-ribbon">Popular</div>
                        @endif

                        <span class="plan-badge tutor-badge">
                            Tutor
                        </span>

                        <h2 class="plan-name">
                            {{ $plan->plan_name }}
                        </h2>

                        <div class="plan-price">
                            <span class="currency">₹</span>
                            <span class="amount">{{ number_format($plan->price, 0) }}</span>
                            <span class="duration">/ {{ $plan->duration_days }} days</span>
                        </div>

                        <div class="plan-limits">
                            <div class="limit-row">
                                <span class="limit-label">AI Credits</span>
                                <span class="limit-value">{{ number_format($plan->ai_credits) }}</span>
                            </div>

                            <div class="limit-row">
                                <span class="limit-label">Contact Limit</span>
                                <span class="limit-value">{{ number_format($plan->contact_limit) }}</span>
                            </div>

                            <div class="limit-row">
                                <span class="limit-label">Lead Limit</span>
                                <span class="limit-value">{{ number_format($plan->lead_limit) }}</span>
                            </div>
                        </div>

                        <div class="features-title">
                            Included Features
                        </div>

                        <ul class="feature-list">
                            @forelse($features as $feature)
                                <li>{{ $feature }}</li>
                            @empty
                                <li>No features added.</li>
                            @endforelse
                        </ul>

                        @if($plan->price > 0)
                            <a href="{{ route('subscription.buy', $plan->id) }}" class="pricing-btn tutor-btn">
                                Choose Plan
                            </a>
                        @else
                            <a href="{{ route('subscription.buy', $plan->id) }}" class="pricing-btn tutor-btn">
                                Start Free
                            </a>
                        @endif
                    </div>
                @empty
                    <div class="empty-plan-box">
                        Tutor plans are not available right now.
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</section>

</main>

@include('include.footer')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const buttons = document.querySelectorAll('.pricing-tab-btn');
        const contents = document.querySelectorAll('.pricing-tab-content');

        buttons.forEach(function (button) {
            button.addEventListener('click', function () {
                const target = this.getAttribute('data-target');

                buttons.forEach(function (btn) {
                    btn.classList.remove('active');
                });

                contents.forEach(function (content) {
                    content.classList.remove('active');
                });

                this.classList.add('active');

                const activeContent = document.getElementById(target);
                if (activeContent) {
                    activeContent.classList.add('active');
                }
            });
        });
    });
</script>

</body>
</html>