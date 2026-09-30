<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  @include('include.header')
  @php
    // One template for India, state and city (TuitionJobsController).
    $crumbs = [['Home', url('/')], ['Teach on NXTutors', url('/become-a-tutor')]];
    if ($level !== 'india') $crumbs[] = ['Tuition jobs in India', url('/tuition-jobs')];
    if ($level === 'city' && ($stateSlug ?? '') !== '' && $stateName !== \App\Support\Geo::OTHER_STATE) $crumbs[] = ['Tuition jobs in ' . $stateName, url('/tuition-jobs/state/' . $stateSlug)];
    $here = $level === 'india' ? 'Tuition jobs in India' : 'Tuition jobs in ' . $label;
    $ld = [
      '@context' => 'https://schema.org',
      '@graph' => [
        ['@type' => 'WebPage', 'url' => $canonical, 'name' => $metatitle, 'description' => $metadesc, 'inLanguage' => 'en-IN'],
        ['@type' => 'BreadcrumbList', 'itemListElement' => collect($crumbs)->push([$here, $canonical])->values()->map(fn ($c, $i) => ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $c[0], 'item' => $c[1]])->all()],
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
      @foreach($crumbs as $c)<a href="{{ $c[1] }}">{{ $c[0] }}</a> <span aria-hidden="true">›</span> @endforeach
      <span aria-current="page">{{ $here }}</span>
    </nav>

    <section class="nx-shero">
      <div class="nx-shero__main">
        @if($level === 'india')
          <span class="nx-card__kicker">For tutors across India</span>
          <h1 class="nx-shero__title">Home tuition and online tutor jobs in India</h1>
          <p class="nx-shero__lede">
            Families tell NXTutors what their child needs, and we send each request to two or three well-matched tutors,
            not to everyone. Teach at home in the areas you choose, online from anywhere, or both. Pick your state and city
            below to see where families are looking for tutors.
          </p>
        @elseif($level === 'state')
          <span class="nx-card__kicker">For tutors in {{ $label }}</span>
          <h1 class="nx-shero__title">Home tuition jobs in {{ $label }}</h1>
          <p class="nx-shero__lede">
            Teach at home in your own city and neighbourhood, online for families anywhere in India, or both. These are the
            cities in {{ $label }} with their own pages for families; tutors from other towns in the state can join for online
            teaching and home classes where they live.
          </p>
        @else
          <span class="nx-card__kicker">For tutors in {{ $cityName }}</span>
          <h1 class="nx-shero__title">Home tuition jobs in {{ $label }}{{ $label !== $cityName ? ' (' . $cityName . ')' : '' }}</h1>
          <p class="nx-shero__lede">
            Families in {{ $cityName }} ask NXTutors for home and online tutors for CBSE, ICSE, IB and IGCSE, Classes 1–12, and
            JEE and NEET. Tell us what you teach and which areas you can reach; once our team has checked your identity, you
            appear on those area pages and in the shortlists we send to families.
          </p>
        @endif
        <ul class="nx-trust">
          <li>You set your fee</li>
          <li>Home, online or both</li>
          <li>Choose your areas and timings</li>
          <li>Verified badge after ID check</li>
        </ul>
        <div class="nx-cta-row">
          <a class="nx-cta nx-cta--primary" href="#" data-modal-target="tutorModal">Apply on WhatsApp</a>
          <a class="nx-cta nx-cta--ghost" href="{{ url('/login') }}">Tutor login</a>
        </div>
      </div>
    </section>

    @if($level === 'india')
      <section class="nx-sec" aria-labelledby="statesTitle">
        <div class="nx-sec__head"><h2 class="nx-sec__title" id="statesTitle">Tuition jobs by state and city</h2></div>
        <div class="nxjobs-zones">
          @foreach($states as $st)
            <article class="nxjobs-zone">
              <h3>@if($st['name'] !== \App\Support\Geo::OTHER_STATE)<a href="{{ url('/tuition-jobs/state/' . $st['slug']) }}">{{ $st['name'] }}</a>@else{{ $st['name'] }}@endif</h3>
              <p>@foreach($st['cities'] as $c)<a href="{{ url('/tuition-jobs/' . $c->slug) }}">{{ $c->name }}</a>@if(!$loop->last), @endif @endforeach</p>
            </article>
          @endforeach
        </div>
      </section>
      <section class="nx-sec" aria-labelledby="onlineTitle">
        <div class="nx-sec__head"><h2 class="nx-sec__title" id="onlineTitle">Online tutor jobs, from any city</h2></div>
        <p class="nx-sec__sub">Choose online on your profile and teach families anywhere in India: school subjects, IB and IGCSE, JEE and NEET, languages and more. Online requests are matched on subject, board, class and your available hours, never on where you live.</p>
      </section>
    @elseif($level === 'state')
      <section class="nx-sec" aria-labelledby="citiesTitle">
        <div class="nx-sec__head"><h2 class="nx-sec__title" id="citiesTitle">Cities in {{ $label }}</h2></div>
        <div class="nxjobs-zones">
          @foreach($group['cities'] as $c)
            <article class="nxjobs-zone">
              <h3><a href="{{ url('/tuition-jobs/' . $c->slug) }}">Tuition jobs in {{ $c->name }}</a></h3>
              <p><a href="{{ url('/city/' . $c->slug) }}">Home tutors in {{ $c->name }}</a> (the page families see)</p>
            </article>
          @endforeach
        </div>
      </section>
    @else
      @if($zones->isNotEmpty())
        <section class="nx-sec" id="zones" aria-labelledby="zonesTitle">
          <div class="nx-sec__head"><h2 class="nx-sec__title" id="zonesTitle">Where in {{ $label }} tutors are needed</h2></div>
          <p class="nx-sec__sub">Zones marked "Tutors needed" have the fewest tutors living in or travelling to them, so families there mostly see online tutors today. Add them to your travel areas to reach those families first.</p>
          <div class="nxjobs-zones">
            @foreach($zones as $z)
              <article class="nxjobs-zone{{ $z['needed'] ? ' nxjobs-zone--needed' : '' }}">
                <h3>{{ $z['name'] }}</h3>
                <span class="nxjobs-zone__tag">{{ $z['needed'] ? 'Tutors needed' : 'Open to new tutors' }}</span>
                @if($z['areas']->isNotEmpty())
                  <p>@foreach($z['areas'] as $a)<a href="{{ url('/city/' . $cityRow->slug . '/' . $a->slug) }}">{{ \App\Support\CityHub::cleanAreaName($a->name, $a->slug) }}</a>@if(!$loop->last), @endif @endforeach</p>
                @endif
              </article>
            @endforeach
          </div>
        </section>
      @else
        <section class="nx-sec" aria-labelledby="startTitle">
          <div class="nx-sec__head"><h2 class="nx-sec__title" id="startTitle">Tutors needed in {{ $label }}</h2></div>
          <p class="nx-sec__sub">
            @if($realHere > 0)
              A few tutors in {{ $cityName }} are already on NXTutors; families here still see mostly online tutors, so there is room for home tutors in every part of the city.
            @else
              We are building our home-tutor network in {{ $cityName }}. Families here see online tutors today; home tutors who join now are the first they see for their area.
            @endif
            Add the neighbourhoods you can reach under "Areas I travel to".
          </p>
          @if($areas->isNotEmpty())
            <ul class="nxzone__areas">
              @foreach($areas->take(24) as $a)<li><a href="{{ url('/city/' . $cityRow->slug . '/' . $a->slug) }}">{{ \App\Support\CityHub::cleanAreaName($a->name, $a->slug) }}</a></li>@endforeach
            </ul>
          @endif
        </section>
      @endif

      @if(!empty($requests))
        <section class="nx-sec" aria-labelledby="reqTitle">
          <div class="nx-sec__head"><h2 class="nx-sec__title" id="reqTitle">Recent requests from families in {{ $label }}</h2></div>
          <p class="nx-sec__sub">Anonymised: the month, class, board and subject only.</p>
          <ul class="nxdemand__list">
            @foreach($requests['rows'] as $r)<li><span class="nxdemand__month">{{ $r['month'] }}</span><span class="nxdemand__what">{{ $r['what'] }}</span></li>@endforeach
          </ul>
        </section>
      @endif
    @endif

    <section class="nx-sec" aria-labelledby="howTitle">
      <div class="nx-sec__head"><h2 class="nx-sec__title" id="howTitle">How tuition jobs on NXTutors work</h2></div>
      <ol class="nxjobs-steps">
        <li><strong>Apply.</strong> Send your details on WhatsApp; our team replies and sets up your tutor account with you.</li>
        <li><strong>Get checked.</strong> Our team checks your identity document and your profile. Verified tutors are shown first.</li>
        <li><strong>List your areas.</strong> Add the neighbourhoods you can reach for home classes, and whether you also teach online.</li>
        <li><strong>Appear where families look.</strong> You show on the area and subject pages you cover, marked "In" or "Travels to" that area, and in the two or three tutors we shortlist for each request.</li>
        <li><strong>Teach a free demo.</strong> The family decides after the first class. Your fee, per class, is on your profile and families see it before the demo.</li>
      </ol>
    </section>

    <section class="nx-sec" aria-labelledby="whyTitle">
      <div class="nx-sec__head"><h2 class="nx-sec__title" id="whyTitle">Why tutors choose NXTutors</h2></div>
      <ul class="nxjobs-list">
        <li><strong>Matched, not broadcast.</strong> Each request goes to two or three tutors who fit it, so you are not one of dozens chasing the same family.</li>
        <li><strong>Your area, your timings.</strong> Home requests come only from the areas you list; online requests fit your hours.</li>
        <li><strong>Your fee.</strong> You set it; families see it before the demo, so there is no haggling after a good class.</li>
        <li><strong>Real profiles.</strong> Tutors are shown first once their identity is checked; sample profiles are always labelled.</li>
      </ul>
    </section>

    <section class="nx-sec" aria-labelledby="faqTitle">
      <div class="nx-sec__head"><h2 class="nx-sec__title" id="faqTitle">Questions from tutors</h2></div>
      <div class="nx-faq">
        @foreach($faqs as $f)<details class="nx-faq__item" @if($loop->first) open @endif><summary>{{ $f[0] }}</summary><p>{{ $f[1] }}</p></details>@endforeach
      </div>
    </section>

    <section class="nx-sec nx-cta-band" aria-label="Apply">
      <div>
        <h2 class="nx-sec__title">Start teaching {{ $level === 'india' ? 'with NXTutors' : 'in ' . $label }}</h2>
        <p class="nx-sec__sub">Apply in two minutes on WhatsApp. Already a tutor with us? <a href="{{ url('/login') }}">Log in</a> to update your areas. See <a href="{{ url('/pricing') }}">tutor plans</a>@if($level === 'city') and <a href="{{ url('/city/' . $cityRow->slug) }}">home tuition in {{ $cityName }}</a>@endif.</p>
      </div>
      <div class="nx-cta-row"><a class="nx-cta nx-cta--primary" href="#" data-modal-target="tutorModal">Apply on WhatsApp</a></div>
    </section>

  </div>
</main>
@include('include.footer')
</div>
</body>
</html>
