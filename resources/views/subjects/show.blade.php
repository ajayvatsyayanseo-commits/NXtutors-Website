<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  @include('include.header')

  @php
    $lead = $authors->first();
    // Home › pillar › city page › this page, following the parent chain.
    $chain = [];
    for ($k = $page['parent'] ?? null, $guard = 0; $k && isset($pages[$k]) && $guard < 4; $k = $pages[$k]['parent'] ?? null, $guard++) {
      array_unshift($chain, [$pages[$k]['label'] ?? $pages[$k]['h1'], url('/' . $k)]);
    }
    $crumbs = array_merge([['Home', url('/')]], $chain, [[$page['label'] ?? $page['h1'], $page['url']]]);

    $ld = [
      '@context' => 'https://schema.org',
      '@graph' => array_values(array_filter([
        [
          '@type' => 'WebPage',
          '@id' => $page['url'] . '#page',
          'url' => $page['url'],
          'name' => $page['title'],
          'description' => $page['description'],
          'inLanguage' => 'en-IN',
          'author' => $lead ? ['@type' => 'Person', 'name' => $lead['name'], 'jobTitle' => $lead['role'], 'url' => $lead['profile_url']] : null,
        ],
        [
          '@type' => 'BreadcrumbList',
          'itemListElement' => array_map(fn ($c, $i) => ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $c[0], 'item' => $c[1]], $crumbs, array_keys($crumbs)),
        ],
        [
          '@type' => 'Service',
          'name' => $page['h1'],
          'serviceType' => ($page['subject'] ?? 'Tutoring') . ' tutoring',
          'provider' => ['@type' => 'EducationalOrganization', 'name' => 'NXTutors', 'url' => url('/')],
          'areaServed' => !empty($page['city']) ? ['@type' => 'City', 'name' => $page['city']] : ['@type' => 'Country', 'name' => 'India'],
          'offers' => ['@type' => 'Offer', 'priceCurrency' => 'INR', 'priceSpecification' => ['@type' => 'PriceSpecification', 'minPrice' => 800, 'maxPrice' => 2500, 'priceCurrency' => 'INR', 'unitText' => 'per hour']],
        ],
        count($faqs) ? [
          '@type' => 'FAQPage',
          'mainEntity' => array_map(fn ($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]], $faqs),
        ] : null,
      ])),
    ];
  @endphp
  <script type="application/ld+json">{!! json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
</head>

<body class="page">
<div class="shell">
<main class="main">
  <div class="container nx-subject">

    <nav class="nx-crumbs" aria-label="Breadcrumb">
      @foreach($crumbs as $i => $c)
        @if($loop->last)
          <span aria-current="page">{{ $c[0] }}</span>
        @else
          <a href="{{ $c[1] }}">{{ $c[0] }}</a> <span aria-hidden="true">›</span>
        @endif
      @endforeach
    </nav>

    {{-- Hero: calm navy for trust, the amber accent only on the one action
         that matters (the free demo), green for the verified promise. --}}
    <section class="nx-shero">
      <div class="nx-shero__main">
        <span class="nx-card__kicker">{{ $page['subject'] ?? '' }}@if(!empty($page['class'])) · {{ $page['class'] }}@endif @if(!empty($page['city'])) · {{ $page['city'] }}@endif</span>
        <h1 class="nx-shero__title">{{ $page['h1'] }}</h1>
        <p class="nx-shero__lede">{{ $page['lede'] }}</p>

        <ul class="nx-trust">
          <li>ID-verified tutors</li>
          <li>2–3 matched tutors, not a long list</li>
          <li>Free demo class</li>
          <li>Home, online or both</li>
        </ul>

        <div class="nx-cta-row">
          <a class="nx-cta nx-cta--primary" href="{{ url('/demo-class') }}">Book a free demo class</a>
          <a class="nx-cta nx-cta--ghost" href="#nxAskAISection">Ask NXT AI</a>
        </div>

        @if($lead)
          <p class="nx-byline">
            @if($lead['image'])<img src="{{ $lead['image'] }}" alt="{{ $lead['name'] }}" width="32" height="32" loading="lazy">@endif
            <span>Guide by <a href="#authors">{{ $lead['name'] }}</a> · {{ $lead['role'] }}</span>
          </p>
        @endif
      </div>

      <aside class="nx-shero__side" aria-label="At a glance">
        <ul class="nx-stats nx-stats--stack">
          @if(($tutors['matched'] ?? 0) > 0 && empty($tutors['relaxed']))
            <li><strong>{{ number_format($tutors['matched']) }}</strong><span>matching {{ strtolower($page['subject'] ?? '') }} tutors @if(!empty($page['city'])) in {{ $page['city'] }} @endif</span></li>
          @endif
          <li><strong>₹800–2,500</strong><span>typical per hour across NXTutors</span></li>
          <li><strong>Free</strong><span>first demo class; switching tutor is free</span></li>
        </ul>
      </aside>
    </section>

    {{-- Tutors for this subject (same search as the chat), in the site's card. --}}
    @if(count($tutors['cards'] ?? []))
      <section class="section section--suggested nx-assist" aria-labelledby="subjectTutorsTitle">
        <div class="section-head">
          <h2 class="section-title" id="subjectTutorsTitle">
            {{ !empty($tutors['relaxed']) ? 'Verified tutors' : 'Verified ' . strtolower($page['subject'] ?? '') . ' tutors' }}@if(!empty($page['class'])) for {{ $page['class'] }}@endif @if(!empty($page['city'])) in {{ $page['city'] }}@endif
          </h2>
          <a class="btn btn-ghost btn-small" href="{{ route('tutors.index') }}">View all tutors →</a>
        </div>
        <div class="suggested-grid">
          @include('subjects.partials.tutor-cards', ['cards' => array_slice($tutors['cards'], 0, 8)])
        </div>
      </section>
    @endif

    @include('home.partials.ask-ai', ['aiPage' => array_filter([
      'type' => 'subject',
      'subject' => $page['subject'] ?? '',
      'class' => $page['class'] ?? '',
      'city' => $page['city'] ?? '',
    ])])

    {{-- Where to go next: class, board and city pages that exist, then the other subjects. --}}
    @if(count($related['family']) || count($related['subjects']) || !empty($page['city_slug']))
      <section class="nx-sec" aria-labelledby="exploreTitle">
        <div class="nx-sec__head">
          <h2 class="nx-sec__title" id="exploreTitle">Find the right {{ strtolower($page['subject'] ?? '') }} tutor faster</h2>
        </div>
        <ul class="nx-chips nx-chips--rail">
          @foreach($related['family'] as $r)<li><a class="nx-chip" href="{{ $r['url'] }}">{{ $r['label'] }}</a></li>@endforeach
          @foreach($related['subjects'] as $r)<li><a class="nx-chip nx-chip--muted" href="{{ $r['url'] }}">{{ $r['label'] }}</a></li>@endforeach
          @if(!empty($page['city_slug']))
            <li><a class="nx-chip nx-chip--muted" href="{{ url('/city/' . $page['city_slug']) }}">All home tutors in {{ $page['city'] }}</a></li>
          @else
            <li><a class="nx-chip nx-chip--muted" href="{{ url('/city') }}">Home tutors in your city</a></li>
          @endif
        </ul>
      </section>
    @endif

    @include('subjects.content.' . $page['view'], ['page' => $page, 'allAreas' => $allAreas])

    @if(count($faqs))
      <section class="nx-sec" aria-labelledby="subjectFaqTitle">
        <div class="nx-sec__head">
          <h2 class="nx-sec__title" id="subjectFaqTitle">{{ $page['h1'] }}: common questions</h2>
        </div>
        <div class="nx-faq">
          @foreach($faqs as $f)
            <details class="nx-faq__item" @if($loop->first) open @endif><summary>{{ $f[0] }}</summary><p>{{ $f[1] }}</p></details>
          @endforeach
        </div>
      </section>
    @endif

    @if($authors->count())
      <section class="nx-sec" id="authors" aria-labelledby="authorsTitle">
        <div class="nx-sec__head">
          <h2 class="nx-sec__title" id="authorsTitle">Who wrote this guide</h2>
        </div>
        <div class="nx-grid">
          @foreach($authors as $a)
            <article class="nx-card nx-author">
              <div class="nx-author__top">
                <img src="{{ $a['image'] ?: asset('frount/assets/images/tutor1.jpg') }}" alt="{{ $a['name'] }}" width="64" height="64" loading="lazy">
                <div>
                  <h3 class="nx-card__title">{{ $a['name'] }}</h3>
                  <span class="nx-card__meta">{{ $a['role'] }}</span>
                </div>
              </div>
              <ul class="nx-author__facts">
                @if($a['education'] !== '')<li><span>Qualification</span>{{ $a['education'] }}</li>@endif
                @if($a['experience'] !== '')<li><span>Teaching</span>{{ \App\Support\SubjectLinks::experience($a['experience']) }}</li>@endif
                @if(!empty($a['user_id']))<li><span>Verified</span>ID-verified NXTutors tutor</li>@else<li><span>Team</span>Written and reviewed by NXTutors tutors</li>@endif
              </ul>
              @if($a['profile_url'])<a class="nx-sec__action" href="{{ $a['profile_url'] }}">View profile and book a demo →</a>@endif
            </article>
          @endforeach
        </div>
      </section>
    @endif

    @if($guides->count())
      <section class="nx-sec" aria-labelledby="subjectGuidesTitle">
        <div class="nx-sec__head">
          <h2 class="nx-sec__title" id="subjectGuidesTitle">{{ $page['subject'] ?? '' }} guides from our tutors</h2>
          <a class="nx-sec__action" href="{{ url('/blog') }}">All guides →</a>
        </div>
        <div class="nx-rail">
          @foreach($guides as $g)
            <a class="nx-card" href="{{ url('/blog/' . $g->slug) }}">
              <span class="nx-card__kicker">{{ \App\Support\BlogTopics::TOPICS[\App\Support\BlogTopics::of($g->slug)] }}</span>
              <span class="nx-card__title">{{ $g->title }}</span>
              <span class="nx-card__meta">Read the guide →</span>
            </a>
          @endforeach
        </div>
      </section>
    @endif

    <section class="nx-sec nx-cta-band" aria-label="Book a demo">
      <div>
        <h2 class="nx-sec__title">Try a {{ strtolower($page['subject'] ?? '') }} tutor before you decide</h2>
        <p class="nx-sec__sub">Tell us the class, board and your area. We share two or three matched tutors, and the first class is a free demo.</p>
      </div>
      <div class="nx-cta-row">
        <a class="nx-cta nx-cta--primary" href="{{ url('/demo-class') }}">Book a free demo class</a>
        <a class="nx-cta nx-cta--ghost" href="{{ route('tutors.index') }}">Browse tutors</a>
      </div>
    </section>

  </div>
</main>

@include('include.footer')
</div>
</body>
</html>
