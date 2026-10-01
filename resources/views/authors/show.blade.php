<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  @include('include.header')

  @php
    $isTeam = empty($author['user_id']);
    $crumbs = [['Home', url('/')], ['Authors', url('/authors')], [$author['name'], $author['author_url']]];
    $person = array_filter([
      '@type' => $isTeam ? 'Organization' : 'Person',
      '@id' => $author['author_url'] . '#person',
      'name' => $author['name'],
      'url' => $author['author_url'],
      'image' => $author['image'] ?: null,
      'jobTitle' => $isTeam ? null : $author['role'],
      'description' => $author['bio'] ?? null,
      'knowsAbout' => $author['knows'] ?? null,
      'worksFor' => $isTeam ? null : ['@type' => 'EducationalOrganization', 'name' => 'NXTutors', 'url' => url('/')],
      'sameAs' => (! $isTeam && $author['profile_url']) ? [$author['profile_url']] : null,
    ]);
    $ld = [
      '@context' => 'https://schema.org',
      '@graph' => [
        [
          '@type' => 'ProfilePage',
          '@id' => $author['author_url'] . '#page',
          'url' => $author['author_url'],
          'name' => $metatitle,
          'inLanguage' => 'en-IN',
          'mainEntity' => ['@id' => $author['author_url'] . '#person'],
          'hasPart' => array_map(fn ($p) => ['@type' => 'WebPage', 'url' => $p['url'], 'name' => $p['label']], $pages),
        ],
        $person,
        [
          '@type' => 'BreadcrumbList',
          'itemListElement' => array_map(fn ($c, $i) => ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $c[0], 'item' => $c[1]], $crumbs, array_keys($crumbs)),
        ],
      ],
    ];
    $leadPages = array_values(array_filter($pages, fn ($p) => $p['lead']));
    $coPages = array_values(array_filter($pages, fn ($p) => ! $p['lead']));
  @endphp
  <script type="application/ld+json">{!! json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
</head>

<body class="page">
<div class="shell">
<main class="main">
  <div class="container nx-subject">

    <nav class="nx-crumbs" aria-label="Breadcrumb">
      @foreach($crumbs as $c)
        @if($loop->last)
          <span aria-current="page">{{ $c[0] }}</span>
        @else
          <a href="{{ $c[1] }}">{{ $c[0] }}</a> <span aria-hidden="true">›</span>
        @endif
      @endforeach
    </nav>

    <section class="nx-shero">
      <div class="nx-shero__main">
        <div class="nx-author__top">
          <img src="{{ $author['image'] ? \App\Support\Thumb::url($author['image'], 160) : asset('frount/assets/images/tutor1.jpg') }}" alt="{{ $author['name'] }}" width="64" height="64" decoding="async">
          <div>
            <span class="nx-card__kicker">{{ $isTeam ? 'Editorial team' : 'Author · NXTutors tutor' }}</span>
            <h1 class="nx-shero__title" style="margin:0">{{ $author['name'] }}</h1>
          </div>
        </div>
        <p class="nx-shero__lede">{{ $author['role'] }}</p>
        <p>{{ $author['bio'] ?? '' }}</p>

        @if(!empty($author['knows']))
          <ul class="nx-chips" aria-label="Specialisms">
            @foreach($author['knows'] as $k)<li class="nx-chip">{{ $k }}</li>@endforeach
          </ul>
        @endif

        <div class="nx-cta-row">
          @if(! $isTeam && $author['profile_url'])
            <a class="nx-cta nx-cta--primary" href="{{ $author['profile_url'] }}">View profile and book a demo</a>
          @else
            <a class="nx-cta nx-cta--primary" href="{{ url('/demo-class') }}">Book a free demo class</a>
          @endif
          @if(count($pages))<a class="nx-cta nx-cta--ghost" href="#authorPages">Read {{ $isTeam ? 'our' : 'their' }} guides</a>@endif
        </div>
      </div>

      <aside class="nx-shero__side" aria-label="At a glance">
        <ul class="nx-stats nx-stats--stack">
          <li><strong>{{ count($pages) + $posts->count() }}</strong><span>guides written or reviewed</span></li>
          @if($author['education'] !== '')<li><strong>Qualification</strong><span>{{ $author['education'] }}</span></li>@endif
          @if($author['experience'] !== '')<li><strong>{{ \App\Support\SubjectLinks::experience($author['experience']) }}</strong><span>of teaching</span></li>@endif
          <li><strong>{{ $isTeam ? 'Reviewed' : 'Verified' }}</strong><span>{{ $isTeam ? 'every fact checked against the board' : 'ID-verified NXTutors tutor' }}</span></li>
        </ul>
      </aside>
    </section>

    @if(count($leadPages))
      <section class="nx-sec" id="authorPages" aria-labelledby="leadPagesTitle">
        <div class="nx-sec__head">
          <h2 class="nx-sec__title" id="leadPagesTitle">Guides by {{ $author['name'] }}</h2>
        </div>
        <div class="nx-grid">
          @foreach($leadPages as $p)
            <a class="nx-card" href="{{ $p['url'] }}">
              <span class="nx-card__kicker">{{ $p['kicker'] }}</span>
              <span class="nx-card__title">{{ $p['label'] }}</span>
              <span class="nx-card__meta">{{ $p['lede'] }}</span>
            </a>
          @endforeach
        </div>
      </section>
    @endif

    @if(count($coPages))
      <section class="nx-sec" @if(! count($leadPages)) id="authorPages" @endif aria-labelledby="coPagesTitle">
        <div class="nx-sec__head">
          <h2 class="nx-sec__title" id="coPagesTitle">Also reviewed by {{ $author['name'] }}</h2>
        </div>
        <div class="nx-rail">
          @foreach($coPages as $p)
            <a class="nx-card" href="{{ $p['url'] }}">
              <span class="nx-card__kicker">{{ $p['kicker'] }}</span>
              <span class="nx-card__title">{{ $p['label'] }}</span>
              <span class="nx-card__meta">Read the guide →</span>
            </a>
          @endforeach
        </div>
      </section>
    @endif

    @if($posts->count())
      <section class="nx-sec" aria-labelledby="authorPostsTitle">
        <div class="nx-sec__head">
          <h2 class="nx-sec__title" id="authorPostsTitle">Articles by {{ $author['name'] }}</h2>
          <a class="nx-sec__action" href="{{ url('/blog') }}">All guides →</a>
        </div>
        <div class="nx-rail">
          @foreach($posts as $b)
            <a class="nx-card" href="{{ url('/blog/' . $b->slug) }}">
              <span class="nx-card__kicker">{{ \App\Support\BlogTopics::TOPICS[\App\Support\BlogTopics::of($b->slug)] }}</span>
              <span class="nx-card__title">{{ $b->title }}</span>
              <span class="nx-card__meta">Read the article →</span>
            </a>
          @endforeach
        </div>
      </section>
    @endif

    <section class="nx-sec" aria-labelledby="otherAuthorsTitle">
      <div class="nx-sec__head">
        <h2 class="nx-sec__title" id="otherAuthorsTitle">Our other authors</h2>
        <a class="nx-sec__action" href="{{ url('/authors') }}">All authors →</a>
      </div>
      <ul class="nx-chips">
        @foreach(config('nx_authors', []) as $k => $a)
          @if(!empty($a['slug']) && $a['slug'] !== ($author['slug'] ?? null))
            <li><a class="nx-chip" href="{{ url('/authors/' . $a['slug']) }}">{{ $a['name'] }}</a></li>
          @endif
        @endforeach
      </ul>
    </section>

    <section class="nx-sec nx-cta-band" aria-label="Book a demo">
      <div>
        <h2 class="nx-sec__title">Want a tutor like {{ $isTeam ? 'ours' : strtok($author['name'], ' ') }}?</h2>
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
