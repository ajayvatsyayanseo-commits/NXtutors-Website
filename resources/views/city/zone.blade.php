<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  {{-- Zone page (ZonePageController, App\Support\ZonePages): live only with
       written text in database/seo-content/zones/{city}.json and at least
       three active area pages in the zone. --}}
  @include('include.header')

  @php
    $cityUrl = url('/city/' . $city->slug);
    $pageUrl = \App\Support\ZonePages::url($city->slug, $zone);
    $zonePlace = $zone . ', ' . $city->city_name;

    $breadcrumb = [
      '@context' => 'https://schema.org',
      '@type' => 'BreadcrumbList',
      'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')],
        ['@type' => 'ListItem', 'position' => 2, 'name' => $city->city_name, 'item' => $cityUrl],
        ['@type' => 'ListItem', 'position' => 3, 'name' => $zone, 'item' => $pageUrl],
      ],
    ];

    $serviceSchema = [
      '@context' => 'https://schema.org',
      '@type' => 'Service',
      'name' => 'Home tutoring in ' . $zonePlace,
      'serviceType' => 'Home and online tutoring',
      'url' => $pageUrl,
      'provider' => ['@type' => 'EducationalOrganization', '@id' => rtrim(url('/'), '/') . '#organization', 'name' => 'NXTutors'],
      'areaServed' => [
        '@type' => 'Place',
        'name' => $zonePlace,
        'containedInPlace' => ['@type' => 'City', 'name' => $city->city_name],
      ],
      'offers' => ['@type' => 'Offer', 'priceCurrency' => 'INR', 'priceSpecification' => ['@type' => 'PriceSpecification', 'minPrice' => 800, 'maxPrice' => 2500, 'priceCurrency' => 'INR', 'unitText' => 'per hour']],
    ];

    $faqSchema = count($content['faqs']) ? [
      '@context' => 'https://schema.org',
      '@type' => 'FAQPage',
      'mainEntity' => array_map(fn ($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]], $content['faqs']),
    ] : null;

    $tutors = $tutorCards->pluck('tutor');
    $realNear = $tutorCards->filter(fn ($c) => $c['tier'] <= 3 && empty($c['tutor']->is_sample))->count();
    $areaWord = fn (int $n) => $n === 1 ? '1 area page' : $n . ' area pages';
  @endphp
  <script type="application/ld+json">{!! json_encode($breadcrumb, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
  <script type="application/ld+json">{!! json_encode($serviceSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
  @if($faqSchema)
    <script type="application/ld+json">{!! json_encode($faqSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
  @endif
  <style>
    body.page .nxzp{max-width:1100px;margin:auto;padding:18px}
    body.page .nxzp__intro p{margin:0 0 var(--nxt-s4, 14px);max-width:760px}
  </style>
</head>

<body class="page">
<div class="shell">
<main class="main">
  <div class="container nxzp">

    <nav class="nx-crumbs" aria-label="Breadcrumb">
      <a href="{{ url('/') }}">Home</a> <span aria-hidden="true">›</span>
      <a href="{{ $cityUrl }}">{{ $city->city_name }}</a> <span aria-hidden="true">›</span>
      <span aria-current="page">{{ $zone }}</span>
    </nav>

    <section class="nx-sec nxzp__intro" aria-labelledby="zoneH1">
      <span class="nxzone__eyebrow">{{ $state }} · {{ $city->city_name }}</span>
      <h1 class="nx-sec__title" id="zoneH1">{{ $seo['h1'] }}</h1>
      @foreach($content['intro'] as $para)
        <p>{{ $para }}</p>
      @endforeach
      <ul class="nx-stats">
        <li><strong>{{ $zoneAreas->count() }}</strong><span>areas in this zone</span></li>
        @if($realInZone > 0)<li><strong>{{ $realInZone }}</strong><span>{{ $realInZone === 1 ? 'tutor on NXTutors covers it' : 'tutors on NXTutors cover it' }}</span></li>@endif
        <li><strong>Free</strong><span>demo class</span></li>
      </ul>
    </section>

    {{-- At a glance: facts true for this zone. --}}
    <section class="nx-sec nxglance" aria-labelledby="zoneGlance">
      <h2 class="nx-sec__title" id="zoneGlance">{{ $zone }} at a glance</h2>
      <div class="nx-table-wrap">
        <table class="nx-table">
          <tbody>
            <tr><th scope="row">City</th><td><a href="{{ $cityUrl }}">{{ $city->city_name }}</a>, {{ $state }}</td></tr>
            <tr><th scope="row">Areas with a page</th><td>{{ $areaWord($zoneAreas->count()) }}, listed below</td></tr>
            <tr><th scope="row">Lessons</th><td>At home in {{ $zone }}, online, or both</td></tr>
            <tr><th scope="row">Fees</th><td>Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; you see each tutor's fee before the demo</td></tr>
            <tr><th scope="row">First class</th><td>Free demo; two or three matched tutors; switching tutor later is free</td></tr>
            @if($guidePost)<tr><th scope="row">Local guide</th><td><a href="{{ url('/blog/' . $guidePost->slug) }}">{{ $guidePost->title }}</a></td></tr>@endif
          </tbody>
        </table>
      </div>
    </section>

    {{-- Tutor cascade at zone level: covers the zone, then the city, then
         online. Every card says why it is shown; sample profiles are marked. --}}
    <section class="nx-sec" id="tutors" aria-labelledby="zoneTutors">
      <h2 class="nx-sec__title" id="zoneTutors">Tutors for {{ $zone }}</h2>
      <p class="nxarea-note">Nearest first: tutors who live in or travel to {{ $zone }}, then elsewhere in {{ $city->city_name }}, then online. Each card says why it is shown; sample profiles are marked.</p>
      <div class="suggested-grid nxarea-tutors">
        @include('pages.partials.teacher-cards', ['teachers' => $tutors, 'placeLabels' => $tutorCards->mapWithKeys(fn ($c) => [(string) $c['tutor']->user_id => $c['label']])->all(), 'page' => (object) ['city' => $city->city_name, 'location' => $zone]])
      </div>
      @if($tutors->isEmpty())
        <p class="nxarea-note">No tutor profile is listed for {{ $zone }} yet. <a href="{{ url('/demo-class') }}">Tell us your class and slot</a> and we find a tutor who can reach you, or teach online.</p>
      @endif
      @if($realNear < 2)
        <div class="nxrecruit">
          <p><strong>Tutor in {{ $zone }}?</strong> Families here are looking for tutors. Apply on WhatsApp, add the areas you travel to, and appear on this page once approved.</p>
          <a class="nxbtn btn-accent" href="{{ url('/become-a-tutor') }}?area={{ urlencode($zone) }}&amp;city={{ urlencode($city->city_name) }}">Teach in {{ $zone }}</a>
          <a class="nxrecruit__more" href="{{ url('/tuition-jobs/' . $city->slug) }}">See tuition jobs in {{ $city->city_name }} →</a>
        </div>
      @else
        <p class="nxzone__more"><a href="{{ url('/tuition-jobs/' . $city->slug) }}">Tutor? See tuition jobs in {{ $city->city_name }} →</a></p>
      @endif
    </section>

    @if(!empty($zoneDemand))
    <section class="nx-sec nxdemand" id="requests" aria-labelledby="zoneDemandTitle">
      <h2 class="nx-sec__title" id="zoneDemandTitle">Recent tutor requests in {{ $zone }}</h2>
      <p class="nxarea-note">What families in this part of {{ $city->city_name }} asked us for in the last six months. We show only the class, board and subject, never who asked.</p>
      <ul class="nxdemand__list">
        @foreach($zoneDemand['rows'] as $r)
          <li><span class="nxdemand__month">{{ $r['month'] }}</span><span class="nxdemand__what">{{ $r['what'] }}</span></li>
        @endforeach
      </ul>
    </section>
    @endif

    <section class="nx-sec" id="areas" aria-labelledby="zoneAreasTitle">
      <h2 class="nx-sec__title" id="zoneAreasTitle">Areas in {{ $zone }}</h2>
      <p class="nx-sec__sub">Open your sector or society for the tutors nearest to it.</p>
      <ul class="nx-chips">
        @foreach($zoneAreas as $a)<li><a class="nx-chip" href="{{ url('/city/' . $city->slug . '/' . $a->slug) }}">{{ $a->name }}</a></li>@endforeach
      </ul>
    </section>

    @if(count($tips))
    <section class="nx-sec nxzone" aria-labelledby="zoneTips">
      <h2 class="nx-sec__title" id="zoneTips">Before the first class in {{ $zone }}</h2>
      <ul class="nxzone__tips">
        @foreach($tips as $tip)<li>{{ $tip }}</li>@endforeach
      </ul>
      @if($guidePost)
        <p class="nxzone__more"><a href="{{ url('/blog/' . $guidePost->slug) }}">Read the full guide to home tuition in {{ $zone }} →</a></p>
      @endif
    </section>
    @elseif($guidePost)
      <p class="nxzone__more"><a href="{{ url('/blog/' . $guidePost->slug) }}">Read the full guide to home tuition in {{ $zone }} →</a></p>
    @endif

    @if(count($content['faqs']))
    <section class="nx-sec" id="faqs" aria-labelledby="zoneFaqTitle">
      <h2 class="nx-sec__title" id="zoneFaqTitle">Home tuition in {{ $zone }}: common questions</h2>
      <div class="nx-faq">
        @foreach($content['faqs'] as $f)
          <details class="nx-faq__item" @if($loop->first) open @endif><summary>{{ $f[0] }}</summary><p>{{ $f[1] }}</p></details>
        @endforeach
      </div>
    </section>
    @endif

    @if($siblings->count())
    <section class="nx-sec" aria-labelledby="zoneSiblings">
      <h2 class="nx-sec__title" id="zoneSiblings">Other parts of {{ $city->city_name }}</h2>
      <ul class="nx-chips nx-chips--rail">
        @foreach($siblings as $s)<li><a class="nx-chip" href="{{ $s->url }}">{{ $s->name }}</a></li>@endforeach
      </ul>
    </section>
    @endif

    <nav class="nx-sec" aria-label="More places">
      <ul class="nx-chips nx-chips--rail">
        @foreach($subjects as $sp)<li><a class="nx-chip" href="{{ $sp['url'] }}">{{ $sp['label'] }}</a></li>@endforeach
        <li><a class="nx-chip" href="{{ $cityUrl }}">Home tutors in {{ $city->city_name }}</a></li>
        <li><a class="nx-chip" href="{{ url('/tuition-jobs/' . $city->slug) }}">Tuition jobs in {{ $city->city_name }}</a></li>
        <li><a class="nx-chip" href="{{ url('/city') }}">All cities in India</a></li>
      </ul>
    </nav>

  </div>
</main>

@include('include.footer')
</div>
</body>
</html>
