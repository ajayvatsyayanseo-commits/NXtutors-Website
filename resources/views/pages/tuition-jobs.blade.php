<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  @include('include.header')
  @php
    // One template for India, state, city and the national topic pages (TuitionJobsController).
    // Text from database/seo-content/jobs/ when written ($content), the template otherwise.
    // Schema: WebPage, BreadcrumbList, FAQPage only. Never JobPosting (tutor plans are paid).
    $content = $content ?? null;
    $crumbs = [['Home', url('/')]];
    if ($level !== 'india') $crumbs[] = ['Tuition jobs', url('/tuition-jobs')];
    if ($level === 'city' && ($stateSlug ?? '') !== '' && $stateName !== \App\Support\Geo::OTHER_STATE) $crumbs[] = ['Tuition jobs in ' . $stateName, url('/tuition-jobs/state/' . $stateSlug)];
    $here = match ($level) {
      'india' => 'Tuition jobs',
      'topic' => $label,
      default => 'Tuition jobs in ' . $label,
    };
    $graph = [
      ['@type' => 'WebPage', 'url' => $canonical, 'name' => $metatitle, 'description' => $metadesc, 'inLanguage' => 'en-IN'],
      ['@type' => 'BreadcrumbList', 'itemListElement' => collect($crumbs)->push([$here, $canonical])->values()->map(fn ($c, $i) => ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $c[0], 'item' => $c[1]])->all()],
    ];
    if (count($faqs)) {
      $graph[] = ['@type' => 'FAQPage', 'mainEntity' => array_map(fn ($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]], $faqs)];
    }
    $ld = ['@context' => 'https://schema.org', '@graph' => $graph];
  @endphp
  <script type="application/ld+json">{!! json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
  <style>
    body.page .nxjobs-prose p{max-width:78ch;line-height:1.7;margin:0 0 12px}
    body.page .nxjobs-zone__note{opacity:.9}
    body.page .nxjobs-board{padding:14px 16px;border-radius:14px;border:1px solid rgba(255,255,255,.12);max-width:78ch}
    body.page .nxjobs-board h3{margin:0 0 6px;font-size:17px}
    body.page .nxjobs-board a,body.page .nxjobs-prose a{color:var(--nxt-link)}
    body.page .nxjobs-towns h3{margin:16px 0 4px;font-size:17px}
    body.page .nxjobs-towns p{margin:0;max-width:78ch;line-height:1.6}
  </style>
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
        @elseif($level === 'topic')
          <span class="nx-card__kicker">For tutors across India</span>
          <h1 class="nx-shero__title">{{ $content['h1'] }}</h1>
          <p class="nx-shero__lede">{{ \App\Support\JobsContent::rich($content['intro'][0]) }}</p>
        @elseif($level === 'state')
          <span class="nx-card__kicker">For tutors in {{ $label }}</span>
          <h1 class="nx-shero__title">Home tuition jobs in {{ $label }}</h1>
          <p class="nx-shero__lede">
            Teach at home in your own city or town, online for families anywhere in India, or both.
            @if($group['cities']->isNotEmpty())
              These are the cities in {{ $label }} with their own pages for families; tutors from other towns in the state can join for online
              teaching and home classes where they live.
            @else
              Tutors from any town in {{ $label }} can join for online teaching and for home classes where they live.
            @endif
          </p>
        @else
          <span class="nx-card__kicker">For tutors in {{ $cityName }}</span>
          <h1 class="nx-shero__title">Home tuition jobs in {{ $label }}{{ $label !== $cityName ? ' (' . $cityName . ')' : '' }}</h1>
          <p class="nx-shero__lede">
            Tell NXTutors what you teach and which areas of {{ $cityName }} you can reach, at home, online or both. Once our team
            has checked your identity, you appear on those area pages and in the shortlists we send to families.
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
              @if($st['cities']->isNotEmpty())
                <p>@foreach($st['cities'] as $c)<a href="{{ url('/tuition-jobs/' . $c->slug) }}">{{ $c->name }}</a>@if(!$loop->last), @endif @endforeach</p>
              @else
                <p>Towns across {{ $st['name'] }}, home and online</p>
              @endif
            </article>
          @endforeach
        </div>
      </section>
      <section class="nx-sec" aria-labelledby="onlineTitle">
        <div class="nx-sec__head"><h2 class="nx-sec__title" id="onlineTitle">Online tutor jobs, from any city</h2></div>
        <p class="nx-sec__sub">Choose online on your profile and teach families anywhere in India: school subjects, IB and IGCSE, JEE and NEET, languages and more. Online requests are matched on subject, board, class and your available hours, never on where you live.
          @if(collect($topics)->contains('slug', 'online-tutor-jobs'))<a href="{{ url('/online-tutor-jobs') }}">How online tutor jobs work on NXTutors →</a>@endif
        </p>
      </section>
      @if(count($topics))
        <section class="nx-sec" aria-labelledby="topicsTitle">
          <div class="nx-sec__head"><h2 class="nx-sec__title" id="topicsTitle">Tutor jobs by subject and class</h2></div>
          <ul class="nx-chips">
            @foreach($topics as $t)<li><a class="nx-chip" href="{{ $t['url'] }}">{{ $t['label'] }}</a></li>@endforeach
          </ul>
        </section>
      @endif

    @elseif($level === 'topic')
      @if(count($content['intro']) > 1)
        <section class="nx-sec nxjobs-prose" aria-label="About this work">
          @foreach(array_slice($content['intro'], 1) as $p)<p>{{ \App\Support\JobsContent::rich($p) }}</p>@endforeach
        </section>
      @endif
      @foreach($content['sections'] as $i => $s)
        <section class="nx-sec nxjobs-prose" aria-labelledby="topicSec{{ $i }}">
          <div class="nx-sec__head"><h2 class="nx-sec__title" id="topicSec{{ $i }}">{{ $s['h2'] }}</h2></div>
          @foreach($s['paras'] as $p)<p>{{ \App\Support\JobsContent::rich($p) }}</p>@endforeach
        </section>
      @endforeach
      <section class="nx-sec" aria-labelledby="topicNextTitle">
        <div class="nx-sec__head"><h2 class="nx-sec__title" id="topicNextTitle">Before you apply</h2></div>
        <ul class="nx-chips">
          <li><a class="nx-chip" href="{{ url('/pricing') }}">Tutor plans and what each includes</a></li>
          <li><a class="nx-chip" href="{{ url('/how-we-verify-tutors') }}">How the ID check works</a></li>
          <li><a class="nx-chip" href="{{ url('/become-a-tutor') }}">Become a tutor on NXTutors</a></li>
          @if($parentLink)<li><a class="nx-chip nx-chip--muted" href="{{ $parentLink['url'] }}">{{ $parentLink['label'] }} (the page families see)</a></li>@endif
        </ul>
      </section>
      @if(count($topicCities))
        <section class="nx-sec" aria-labelledby="topicCitiesTitle">
          <div class="nx-sec__head"><h2 class="nx-sec__title" id="topicCitiesTitle">Home tuition jobs by city</h2></div>
          <ul class="nx-chips">
            @foreach($topicCities as $c)<li><a class="nx-chip" href="{{ $c['url'] }}">{{ $c['label'] }}</a></li>@endforeach
            <li><a class="nx-chip nx-chip--muted" href="{{ url('/tuition-jobs') }}">All states and cities</a></li>
          </ul>
        </section>
      @endif
      @if(count($topics))
        <section class="nx-sec" aria-labelledby="topicMoreTitle">
          <div class="nx-sec__head"><h2 class="nx-sec__title" id="topicMoreTitle">Other tutor jobs</h2></div>
          <ul class="nx-chips">
            @foreach($topics as $t)<li><a class="nx-chip nx-chip--muted" href="{{ $t['url'] }}">{{ $t['label'] }}</a></li>@endforeach
          </ul>
        </section>
      @endif

    @elseif($level === 'state')
      @if($content)
        @if($content['board'])
          <section class="nx-sec" aria-labelledby="boardTitle">
            <div class="nx-sec__head"><h2 class="nx-sec__title" id="boardTitle">School boards in {{ $label }}</h2></div>
            <div class="nxjobs-board">
              <h3>@if($content['board']['site'] !== '')<a href="{{ $content['board']['site'] }}" rel="noopener" target="_blank">{{ $content['board']['name'] }}</a>@else{{ $content['board']['name'] }}@endif</h3>
              @if($content['board']['summary'] !== '')<p>{{ \App\Support\JobsContent::rich($content['board']['summary']) }}</p>@endif
              @if($content['board']['site'] !== '')<p class="nx-card__meta">Official site: <a href="{{ $content['board']['site'] }}" rel="noopener" target="_blank">{{ preg_replace('#^https?://(www\.)?#i', '', rtrim($content['board']['site'], '/')) }}</a></p>@endif
            </div>
          </section>
        @endif
        <section class="nx-sec nxjobs-prose" aria-labelledby="stateIntroTitle">
          <div class="nx-sec__head"><h2 class="nx-sec__title" id="stateIntroTitle">Tutoring in {{ $label }}</h2></div>
          @foreach($content['intro'] as $p)<p>{{ \App\Support\JobsContent::rich($p) }}</p>@endforeach
        </section>
      @endif

      @if($group['cities']->isNotEmpty())
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
      @endif

      @if($content && count($content['towns']))
        <section class="nx-sec nxjobs-towns" aria-labelledby="townsTitle">
          <div class="nx-sec__head"><h2 class="nx-sec__title" id="townsTitle">Teaching in other towns of {{ $label }}</h2></div>
          <p class="nx-sec__sub">Apply with your town: home classes are matched when families near you ask, and online classes can come from anywhere in India.</p>
          @foreach($content['towns'] as $t)
            <h3>{{ $t['name'] }}</h3>
            <p>{{ \App\Support\JobsContent::rich($t['note']) }}</p>
          @endforeach
        </section>
      @endif

    @else
      @if($content)
        <section class="nx-sec nxjobs-prose" aria-labelledby="cityIntroTitle">
          <div class="nx-sec__head"><h2 class="nx-sec__title" id="cityIntroTitle">Tutoring in {{ $label }}: what to know</h2></div>
          @foreach($content['intro'] as $p)<p>{{ \App\Support\JobsContent::rich($p) }}</p>@endforeach
        </section>
      @endif

      @if($zones->isNotEmpty())
        <section class="nx-sec" id="zones" aria-labelledby="zonesTitle">
          <div class="nx-sec__head"><h2 class="nx-sec__title" id="zonesTitle">Where in {{ $label }} tutors are needed</h2></div>
          <p class="nx-sec__sub">Zones marked "Tutors needed" have the fewest tutors living in or travelling to them, so families there mostly see online tutors today. Add them to your travel areas to reach those families first.</p>
          <div class="nxjobs-zones">
            @foreach($zones as $z)
              <article class="nxjobs-zone{{ $z['needed'] ? ' nxjobs-zone--needed' : '' }}">
                <h3>@if(!empty($z['url']))<a href="{{ $z['url'] }}">{{ $z['name'] }}</a>@else{{ $z['name'] }}@endif</h3>
                <span class="nxjobs-zone__tag">{{ $z['needed'] ? 'Tutors needed' : 'Open to new tutors' }}</span>
                @if(!empty($z['note']))<p class="nxjobs-zone__note">{{ \App\Support\JobsContent::rich($z['note']) }}</p>@endif
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

      @if($content && $content['boards'] !== '')
        <section class="nx-sec nxjobs-prose" aria-labelledby="boardsTitle">
          <div class="nx-sec__head"><h2 class="nx-sec__title" id="boardsTitle">Boards and subjects you can teach in {{ $label }}</h2></div>
          <p>{{ \App\Support\JobsContent::rich($content['boards']) }}</p>
          @foreach($boardLinks as $g)
            <h3 class="nx-card__meta">{{ $g['title'] }}</h3>
            <ul class="nx-chips">
              @foreach($g['items'] as $it)<li><a class="nx-chip nx-chip--muted" href="{{ $it['url'] }}">{{ $it['label'] }}</a></li>@endforeach
            </ul>
          @endforeach
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
        <li><strong>Apply.</strong> Send your details on WhatsApp; our team replies and sets up your tutor account with you. Tutor plans and what each includes are on our <a href="{{ url('/pricing') }}">pricing page</a>.</li>
        <li><strong>Get checked.</strong> Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>: our team reviews your government photo ID before your profile goes live. Verified tutors are shown first.</li>
        <li><strong>List your areas.</strong> Add the neighbourhoods you can reach for home classes, and whether you also teach online.</li>
        <li><strong>Appear where families look.</strong> You show on the area and subject pages you cover, marked "In" or "Travels to" that area, and in the two or three tutors we shortlist for each request.</li>
        <li><strong>Teach a free demo.</strong> The family decides after the first class. Your fee, per class, is on your profile and families see it before the demo.</li>
      </ol>
    </section>

    @if($level !== 'topic')
      <section class="nx-sec" aria-labelledby="whyTitle">
        <div class="nx-sec__head"><h2 class="nx-sec__title" id="whyTitle">Why tutors choose NXTutors</h2></div>
        <ul class="nxjobs-list">
          <li><strong>Matched, not broadcast.</strong> Each request goes to two or three tutors who fit it, so you are not one of dozens chasing the same family.</li>
          <li><strong>Your area, your timings.</strong> Home requests come only from the areas you list; online requests fit your hours.</li>
          <li><strong>Your fee.</strong> You set it; families see it before the demo, so there is no haggling after a good class.</li>
          <li><strong>Real profiles.</strong> Tutors are shown first once their identity is checked; sample profiles are always labelled.</li>
        </ul>
      </section>
    @endif

    @if(count($faqs))
      <section class="nx-sec" aria-labelledby="faqTitle">
        <div class="nx-sec__head"><h2 class="nx-sec__title" id="faqTitle">Questions from tutors</h2></div>
        <div class="nx-faq">
          @foreach($faqs as $f)<details class="nx-faq__item" @if($loop->first) open @endif><summary>{{ $f[0] }}</summary><p>{{ \App\Support\JobsContent::rich($f[1]) }}</p></details>@endforeach
        </div>
      </section>
    @endif

    <section class="nx-sec nx-cta-band" aria-label="Apply">
      <div>
        <h2 class="nx-sec__title">Start teaching {{ in_array($level, ['india', 'topic'], true) ? 'with NXTutors' : 'in ' . $label }}</h2>
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
