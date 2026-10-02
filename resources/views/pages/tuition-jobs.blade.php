<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  @php $nxtJobsCss = true; @endphp
  @include('include.header')
  @php
    // One template for India, state, city and the national topic pages (TuitionJobsController),
    // built from the shared components in pages/jobs/partials (spec v2, 2 Oct 2026).
    // Text from database/seo-content/jobs/ when written ($content), defaults otherwise (App\Support\JobsPage).
    // Schema: WebPage, BreadcrumbList, FAQPage, and HowTo only while the storyboard is on the page.
    // Never JobPosting (tutors are independent and tutor plans are paid).
    $content = $content ?? null;
    $jobs = $jobs ?? \App\Http\Controllers\TuitionJobsController::skeleton(null, [], false, null);
    $rich = fn ($t) => \App\Support\JobsContent::rich($t);
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
    if (!empty($jobs['story'])) {
      $graph[] = \App\Support\JobsPage::howTo($jobs['story'], $canonical);
    }
    $ld = ['@context' => 'https://schema.org', '@graph' => $graph];

    // Hero copy per page type.
    if ($level === 'india') {
      $heroH1 = 'Home tuition and online tutor jobs in India';
      $heroKicker = 'across India';
      $heroLede = 'Families tell NXTutors what their child needs, and we send each request to two or three well-matched tutors, not to everyone. Teach at home in the areas you choose, online from anywhere, or both. Pick your state and city below to see where families are looking for tutors.';
    } elseif ($level === 'topic') {
      $heroH1 = $content['h1'];
      $heroKicker = 'across India';
      $heroLede = $rich($content['intro'][0]);
    } elseif ($level === 'state') {
      $heroH1 = 'Home tuition jobs in ' . $label;
      $heroKicker = 'in ' . $label;
      $heroLede = 'Teach at home in your own city or town, online for families anywhere in India, or both. '
        . ($group['cities']->isNotEmpty()
          ? 'These are the cities in ' . $label . ' with their own pages for families; tutors from other towns in the state can join for online teaching and home classes where they live.'
          : 'Tutors from any town in ' . $label . ' can join for online teaching and for home classes where they live.');
    } else {
      $heroH1 = 'Home tuition jobs in ' . $label . ($label !== $cityName ? ' (' . $cityName . ')' : '');
      $heroKicker = 'in ' . $cityName;
      $heroLede = 'Tell NXTutors what you teach and which areas of ' . $cityName . ' you can reach, at home, online or both. Once our team has checked your identity, you appear on those area pages and in the shortlists we send to families.';
    }

    // Related links per page type.
    $topicItems = collect($topics ?? [])->map(fn ($t) => ['url' => $t['url'], 'label' => $t['label']])->all();
    $applyItems = [
      ['url' => url('/become-a-tutor'), 'label' => 'Become a tutor: the steps'],
      ['url' => url('/how-we-verify-tutors'), 'label' => 'How the ID check works'],
      ['url' => url('/pricing'), 'label' => 'Tutor plans and what each includes'],
      ['url' => url('/tutor-terms'), 'label' => 'Tutor terms', 'muted' => true],
    ];
    $related = match ($level) {
      'india' => [['title' => 'Before you apply', 'items' => $applyItems]],
      'state' => [
        ['title' => 'Tutor jobs by subject and class', 'items' => $topicItems],
        ['title' => 'Before you apply', 'items' => array_merge([['url' => url('/tuition-jobs'), 'label' => 'Tuition jobs in every state']], $applyItems)],
      ],
      'city' => [
        ['title' => 'What families in ' . $label . ' look for', 'items' => array_merge(
          [['url' => url('/city/' . $cityRow->slug), 'label' => 'Home tutors in ' . $cityName . ' (the page families see)']],
          collect($cityLinks ?? [])->flatMap(fn ($g) => $g['items'])->take(14)->map(fn ($i) => ['url' => $i['url'], 'label' => $i['label'], 'muted' => true])->all()
        )],
        ['title' => 'More tutor jobs', 'items' => array_merge(
          ($stateSlug ?? '') !== '' && $stateName !== \App\Support\Geo::OTHER_STATE ? [['url' => url('/tuition-jobs/state/' . $stateSlug), 'label' => 'Tuition jobs in ' . $stateName]] : [],
          $topicItems,
          [['url' => url('/tuition-jobs'), 'label' => 'All states and cities', 'muted' => true]]
        )],
        ['title' => 'Before you apply', 'items' => $applyItems],
      ],
      default => [
        ['title' => 'Before you apply', 'items' => array_merge($applyItems, $parentLink ? [['url' => $parentLink['url'], 'label' => $parentLink['label'] . ' (the page families see)', 'muted' => true]] : [])],
        ['title' => 'Home tuition jobs by city', 'items' => array_merge($topicCities, [['url' => url('/tuition-jobs'), 'label' => 'All states and cities', 'muted' => true]])],
        ['title' => 'Other tutor jobs', 'items' => $topicItems],
      ],
    };
  @endphp
  <script type="application/ld+json">{!! json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
</head>
<body class="page">
<div class="shell">
<main class="main">
  <div class="container nx-subject nxj{{ !empty($jobs['pink']) ? ' nxj--pink' : '' }}">

    <nav class="nx-crumbs" aria-label="Breadcrumb">
      @foreach($crumbs as $c)<a href="{{ $c[1] }}">{{ $c[0] }}</a> <span aria-hidden="true">›</span> @endforeach
      <span aria-current="page">{{ $here }}</span>
    </nav>

    @include('pages.jobs.partials.hero', ['h1' => $heroH1, 'lede' => $heroLede, 'kicker' => $heroKicker])

    {{-- ===== Page-type content: intro, places, boards ===== --}}
    @if($level === 'india')
      @if(!empty($jobs['intro']))
        <section class="nx-sec nxjobs-prose" aria-labelledby="hubIntroTitle">
          <div class="nx-sec__head"><h2 class="nx-sec__title" id="hubIntroTitle">Tutoring work through NXTutors</h2></div>
          @foreach($jobs['intro'] as $p)<p>{{ $rich($p) }}</p>@endforeach
        </section>
      @endif
      @if(!empty($jobs['story']))@include('pages.jobs.partials.story', ['panels' => $jobs['story']])@endif
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
      @if(count($jobs['boards']))@include('pages.jobs.partials.boards', ['boards' => $jobs['boards'], 'boardsTitle' => 'Boards you can teach'])@endif
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
          @foreach(array_slice($content['intro'], 1) as $p)<p>{{ $rich($p) }}</p>@endforeach
        </section>
      @endif
      @if(!empty($jobs['pink']))
        @include('pages.jobs.partials.women', ['women' => $jobs['women'], 'onWomenPage' => true])
      @endif
      @if(!empty($jobs['story']))@include('pages.jobs.partials.story', ['panels' => $jobs['story']])@endif
      @foreach($content['sections'] as $i => $s)
        <section class="nx-sec nxjobs-prose" aria-labelledby="topicSec{{ $i }}">
          <div class="nx-sec__head"><h2 class="nx-sec__title" id="topicSec{{ $i }}">{{ $s['h2'] }}</h2></div>
          @foreach($s['paras'] as $p)<p>{{ $rich($p) }}</p>@endforeach
        </section>
      @endforeach
      @if(count($jobs['boards']))@include('pages.jobs.partials.boards', ['boards' => $jobs['boards'], 'boardsTitle' => 'Boards you can teach'])@endif

    @elseif($level === 'state')
      @if($content)
        <section class="nx-sec nxjobs-prose" aria-labelledby="stateIntroTitle">
          <div class="nx-sec__head"><h2 class="nx-sec__title" id="stateIntroTitle">Tutoring in {{ $label }}</h2></div>
          @foreach($content['intro'] as $p)<p>{{ $rich($p) }}</p>@endforeach
        </section>
      @endif
      @if(!empty($jobs['story']))@include('pages.jobs.partials.story', ['panels' => $jobs['story']])@endif
      @if(count($jobs['boards']))
        @include('pages.jobs.partials.boards', ['boards' => $jobs['boards'], 'boardsTitle' => 'School boards in ' . $label, 'boardsSub' => 'Boards families in ' . $label . ' ask tutors for, with the official site and our own board pages where we have them.'])
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
          <div class="nxjobs-zones">
            @foreach($content['towns'] as $t)
              <article class="nxjobs-zone"><h3>{{ $t['name'] }}</h3><p>{{ $rich($t['note']) }}</p></article>
            @endforeach
          </div>
        </section>
      @endif

    @else
      @if($content)
        <section class="nx-sec nxjobs-prose" aria-labelledby="cityIntroTitle">
          <div class="nx-sec__head"><h2 class="nx-sec__title" id="cityIntroTitle">Tutoring in {{ $label }}: what to know</h2></div>
          @foreach($content['intro'] as $p)<p>{{ $rich($p) }}</p>@endforeach
        </section>
      @endif
      @if(!empty($jobs['story']))@include('pages.jobs.partials.story', ['panels' => $jobs['story']])@endif

      @if(count($jobs['boards']))
        @include('pages.jobs.partials.boards', ['boards' => $jobs['boards'], 'boardsTitle' => 'Boards you can teach in ' . $label, 'boardsSub' => $content && $content['boards'] !== '' ? $content['boards'] : null])
      @elseif($content && $content['boards'] !== '')
        <section class="nx-sec nxjobs-prose" id="boards" aria-labelledby="boardsTitle">
          <div class="nx-sec__head"><h2 class="nx-sec__title" id="boardsTitle">Boards and subjects you can teach in {{ $label }}</h2></div>
          <p>{{ $rich($content['boards']) }}</p>
          @foreach($boardLinks as $g)
            <h3 class="nx-card__meta">{{ $g['title'] }}</h3>
            <ul class="nx-chips">
              @foreach($g['items'] as $it)<li><a class="nx-chip nx-chip--muted" href="{{ $it['url'] }}">{{ $it['label'] }}</a></li>@endforeach
            </ul>
          @endforeach
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
                @if(!empty($z['note']))<p class="nxjobs-zone__note">{{ $rich($z['note']) }}</p>@endif
                @if($z['areas']->isNotEmpty())
                  <p class="nxjobs-zone__areas">@foreach($z['areas'] as $a)<a href="{{ url('/city/' . $cityRow->slug . '/' . $a->slug) }}">{{ \App\Support\CityHub::cleanAreaName($a->name, $a->slug) }}</a>@if(!$loop->last), @endif @endforeach</p>
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

      @include('pages.jobs.partials.demand', ['requests' => $requests, 'label' => $label])
    @endif

    {{-- ===== Shared skeleton ===== --}}
    @if(empty($jobs['pink']))
      @include('pages.jobs.partials.women', ['women' => $jobs['women']])
    @endif
    @include('pages.jobs.partials.why', ['why' => $jobs['why']])
    @include('pages.jobs.partials.plans')
    @include('pages.jobs.partials.faq', ['faqs' => $faqs])
    @include('pages.jobs.partials.related', ['related' => $related])

    <section class="nx-sec nx-cta-band" aria-label="Apply">
      <div>
        <h2 class="nx-sec__title">Start teaching {{ in_array($level, ['india', 'topic'], true) ? 'with NXTutors' : 'in ' . $label }}</h2>
        <p class="nx-sec__sub">Apply in two minutes on WhatsApp. Already a tutor with us? <a href="{{ url('/login') }}">Log in</a> to update your areas. See <a href="{{ url('/pricing') }}">tutor plans</a>@if($level === 'city') and <a href="{{ url('/city/' . $cityRow->slug) }}">home tuition in {{ $cityName }}</a>@endif.</p>
      </div>
      <div class="nx-cta-row"><a class="nxj-btn nxj-btn--act" href="{{ url('/become-a-tutor') }}" data-modal-target="tutorModal">Apply as a tutor</a></div>
    </section>

  </div>
</main>
@include('pages.jobs.partials.applybar', ['jobs' => $jobs])
@include('include.footer')
</div>
</body>
</html>
