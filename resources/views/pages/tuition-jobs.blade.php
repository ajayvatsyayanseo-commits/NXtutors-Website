<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  @include('include.header')
  @php
    $ld = [
      '@context' => 'https://schema.org',
      '@graph' => [
        ['@type' => 'WebPage', 'url' => $canonical, 'name' => $metatitle, 'description' => $metadesc, 'inLanguage' => 'en-IN'],
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
          ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')],
          ['@type' => 'ListItem', 'position' => 2, 'name' => 'Teach on NXTutors', 'item' => url('/become-a-tutor')],
          ['@type' => 'ListItem', 'position' => 3, 'name' => 'Tuition jobs in ' . $label, 'item' => $canonical],
        ]],
        ['@type' => 'FAQPage', 'mainEntity' => array_map(fn ($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]], $faqs)],
      ],
    ];
  @endphp
  <script type="application/ld+json">{!! json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
</head>
<body class="page">
<div class="shell">
<main class="main">
  <div class="container nx-subject">

    <nav class="nx-crumbs" aria-label="Breadcrumb">
      <a href="{{ url('/') }}">Home</a> <span aria-hidden="true">›</span>
      <a href="{{ url('/become-a-tutor') }}">Teach on NXTutors</a> <span aria-hidden="true">›</span>
      <span aria-current="page">Tuition jobs in {{ $label }}</span>
    </nav>

    <section class="nx-shero">
      <div class="nx-shero__main">
        <span class="nx-card__kicker">For tutors in {{ $cityName }}</span>
        <h1 class="nx-shero__title">Home tuition jobs in {{ $label }} ({{ $cityName }})</h1>
        <p class="nx-shero__lede">
          Families across {{ $cityName }} ask NXTutors for home and online tutors every week, for CBSE, ICSE, IB and IGCSE,
          Classes 1–12, and JEE and NEET. Tell us what you teach and which areas you can reach; once our team has checked
          your identity, you appear on those area pages and in the shortlists we send to families.
        </p>
        <ul class="nx-trust">
          <li>You set your fee</li>
          <li>Home, online or both</li>
          <li>Choose your areas and timings</li>
          <li>Verified badge after ID check</li>
        </ul>
        <div class="nx-cta-row">
          <a class="nx-cta nx-cta--primary" href="#" data-modal-target="tutorModal">Apply on WhatsApp</a>
          <a class="nx-cta nx-cta--ghost" href="#zones">See where tutors are needed</a>
        </div>
      </div>
    </section>

    <section class="nx-sec" id="zones" aria-labelledby="zonesTitle">
      <div class="nx-sec__head">
        <h2 class="nx-sec__title" id="zonesTitle">Where in {{ $label }} tutors are needed</h2>
      </div>
      <p class="nx-sec__sub">Zones marked "Tutors needed" have the fewest tutors living in or travelling to them, so families there mostly see online tutors today. Add them to your travel areas to reach those families first.</p>
      <div class="nxjobs-zones">
        @foreach($zones as $z)
          <article class="nxjobs-zone{{ $z['needed'] ? ' nxjobs-zone--needed' : '' }}">
            <h3>{{ $z['name'] }}</h3>
            <span class="nxjobs-zone__tag">{{ $z['needed'] ? 'Tutors needed' : 'Open to new tutors' }}</span>
            @if($z['areas']->isNotEmpty())
              <p>
                @foreach($z['areas'] as $a)<a href="{{ url('/city/' . $cityRow->slug . '/' . $a->slug) }}">{{ \App\Support\CityHub::cleanAreaName($a->name, $a->slug) }}</a>@if(!$loop->last), @endif @endforeach
              </p>
            @endif
          </article>
        @endforeach
      </div>
    </section>

    @if(!empty($requests))
      <section class="nx-sec" aria-labelledby="reqTitle">
        <div class="nx-sec__head"><h2 class="nx-sec__title" id="reqTitle">Recent requests from families in {{ $label }}</h2></div>
        <p class="nx-sec__sub">Anonymised: the month, class, board and subject only.</p>
        <ul class="nxdemand__list">
          @foreach($requests['rows'] as $r)
            <li><span class="nxdemand__month">{{ $r['month'] }}</span><span class="nxdemand__what">{{ $r['what'] }}</span></li>
          @endforeach
        </ul>
      </section>
    @endif

    <section class="nx-sec" aria-labelledby="howTitle">
      <div class="nx-sec__head"><h2 class="nx-sec__title" id="howTitle">How tuition jobs on NXTutors work</h2></div>
      <ol class="nxjobs-steps">
        <li><strong>Apply.</strong> Send your details on WhatsApp, or create your tutor account with your full profile.</li>
        <li><strong>Get checked.</strong> Our team checks your identity document and your profile. Verified tutors are shown first.</li>
        <li><strong>List your areas.</strong> Add the sectors, societies and neighbourhoods of {{ $cityName }} you can reach for home classes, and whether you also teach online.</li>
        <li><strong>Appear where families look.</strong> You show on the area pages you cover, marked "In" or "Travels to" that area, and in the two or three tutors we shortlist for each request.</li>
        <li><strong>Teach a free demo.</strong> The family decides after the first class. Your fee, per class, is on your profile and families see it before the demo.</li>
      </ol>
    </section>

    <section class="nx-sec" aria-labelledby="fitTitle">
      <div class="nx-sec__head"><h2 class="nx-sec__title" id="fitTitle">What families in {{ $label }} look for in a tutor</h2></div>
      <ul class="nxjobs-list">
        <li><strong>Board experience.</strong> Parents ask which board and which papers you have taught: CBSE and ICSE, and in many parts of {{ $cityName }} IB and Cambridge or Edexcel IGCSE.</li>
        <li><strong>A clear plan after the demo.</strong> What you noticed, what you will cover in the first month, and how you will report progress.</li>
        <li><strong>Reliable timing.</strong> Traffic at school-run and office hours is heavy; tutors who plan around it and arrive on time are rebooked.</li>
        <li><strong>Safe, professional conduct.</strong> Classes in a common room, clear written terms, and respect for society entry rules.</li>
      </ul>
      <p>Read what parents are told to check in our <a href="{{ url('/blog/choose-home-tutor-gurgaon-safety-checklist') }}">hiring checklist</a> and <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a>, and how fees are discussed in <a href="{{ url('/blog/home-tuition-fees-gurgaon') }}">home tuition fees in Gurgaon</a>.</p>
    </section>

    <section class="nx-sec" aria-labelledby="faqTitle">
      <div class="nx-sec__head"><h2 class="nx-sec__title" id="faqTitle">Questions from tutors in {{ $label }}</h2></div>
      <div class="nx-faq">
        @foreach($faqs as $f)
          <details class="nx-faq__item" @if($loop->first) open @endif><summary>{{ $f[0] }}</summary><p>{{ $f[1] }}</p></details>
        @endforeach
      </div>
    </section>

    <section class="nx-sec nx-cta-band" aria-label="Apply">
      <div>
        <h2 class="nx-sec__title">Start teaching in {{ $label }}</h2>
        <p class="nx-sec__sub">Apply in two minutes on WhatsApp, or <a href="{{ url('/login') }}">create your tutor account</a>. See <a href="{{ url('/pricing') }}">tutor plans</a> and <a href="{{ url('/city/' . $cityRow->slug) }}">home tuition in {{ $cityName }}</a>.</p>
      </div>
      <div class="nx-cta-row">
        <a class="nx-cta nx-cta--primary" href="#" data-modal-target="tutorModal">Apply on WhatsApp</a>
      </div>
    </section>

  </div>
</main>
@include('include.footer')
</div>
</body>
</html>
