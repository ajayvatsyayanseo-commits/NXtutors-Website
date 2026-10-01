{{--
  Shared frame for the policy pages (LegalController). A page provides:
    @section('summary')  the "in short" box (a <ul>)
    @section('content')  numbered <section>s, each <h2 id="…">
  The table of contents is built from those <h2 id> tags, so it can never
  drift from the headings.
--}}
@php
  $docHtml = trim($__env->yieldContent('content'));
  preg_match_all('#<h2 id="([a-z0-9-]+)">(.*?)</h2>#s', $docHtml, $tocMatches, PREG_SET_ORDER);
  $ld = [
    '@context' => 'https://schema.org',
    '@graph' => [
      [
        '@type' => 'WebPage',
        '@id' => $canonical . '#webpage',
        'url' => $canonical,
        'name' => $metatitle,
        'description' => $metadesc,
        'inLanguage' => 'en-IN',
        'datePublished' => '2026-10-01',
        'dateModified' => '2026-10-01',
        'isPartOf' => ['@type' => 'WebSite', 'url' => url('/'), 'name' => 'NXTutors'],
        'publisher' => ['@type' => 'Organization', 'name' => $legal['entity_name'], 'url' => url('/')],
      ],
      ['@type' => 'BreadcrumbList', 'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')],
        ['@type' => 'ListItem', 'position' => 2, 'name' => $h1, 'item' => $canonical],
      ]],
    ],
  ];
  $officerName = $legal['grievance_officer'] ?: null;
@endphp
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  @if(!empty($metakey))<meta name="keywords" content="{{ $metakey }}">@endif
  @include('include.header')
  <script type="application/ld+json">{!! json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
</head>
<body class="page">

@include('partials.legal-styles')

<main class="shell">

  <section class="page-hero">
    <div class="page-hero__row">
      <h1 class="page-hero__title">{{ $h1 }}</h1>
      <nav class="page-hero__crumbs" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a>
        <span class="page-hero__sep" aria-hidden="true">›</span>
        <span aria-current="page">{{ $h1 }}</span>
      </nav>
    </div>
  </section>

  <article class="nxlegal">

    <nav class="nxlegal-toc" aria-label="On this page">
      <p class="nxlegal-toc__label">On this page</p>
      <ol class="nxlegal-toc__list">
        @foreach($tocMatches as $t)
          <li><a href="#{{ $t[1] }}">{{ preg_replace('/^\d+\.\s*/', '', strip_tags($t[2])) }}</a></li>
        @endforeach
      </ol>
      <p class="nxlegal-toc__label nxlegal-toc__label--gap">Other policies</p>
      <ul class="nxlegal-toc__list nxlegal-toc__list--plain">
        @foreach($legalPages as $ps => $pm)
          @if($ps !== $slug)
            <li><a href="{{ url('/' . $ps) }}">{{ $pm['label'] }}</a></li>
          @endif
        @endforeach
      </ul>
    </nav>

    <div class="nxlegal-body">

      <p class="nxlegal-dates">
        <span><strong>Effective date:</strong> {{ $legal['effective_date'] }}</span>
        <span><strong>Last updated:</strong> {{ $legal['last_updated'] }}</span>
      </p>

      <aside class="nxlegal-summary" aria-label="Summary">
        <h2 class="nxlegal-summary__head">In short</h2>
        @yield('summary')
        <p class="nxlegal-summary__note">This summary helps you find your way. The numbered sections below are the binding text.</p>
      </aside>

      <div class="nxlegal-doc">
        {!! $docHtml !!}
      </div>

      <aside class="nxlegal-help">
        <h2 class="nxlegal-help__head">Questions or a complaint?</h2>
        <p class="nxlegal-help__text">
          Write to {{ $officerName ? $officerName . ', ' . $legal['grievance_designation'] : 'our ' . $legal['grievance_designation'] }}
          at <a href="mailto:{{ $legal['grievance_email'] }}">{{ $legal['grievance_email'] }}</a>.
          We acknowledge every complaint within {{ $legal['ack_hours'] }} hours. See
          <a href="{{ url('/grievance-redressal') }}">Grievance Redressal</a> for timelines.
        </p>
        <div class="nxlegal-help__actions">
          <a class="nxbtn nxbtn--accent" href="{{ url('/contact') }}">Contact us</a>
          <a class="nxbtn" href="mailto:{{ $legal['grievance_email'] }}">{{ $legal['grievance_email'] }}</a>
        </div>
      </aside>

    </div>
  </article>

</main>

@include('include.footer')
</body>
</html>
