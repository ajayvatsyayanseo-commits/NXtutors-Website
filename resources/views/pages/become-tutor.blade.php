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
      <span aria-current="page">Teach on NXTutors</span>
    </nav>

    <section class="nx-shero">
      <div class="nx-shero__main">
        <span class="nx-card__kicker">For tutors and professionals</span>
        <h1 class="nx-shero__title">Teach on NXTutors: home tuition and online teaching jobs</h1>
        <p class="nx-shero__lede">
          Parents across India tell us what their child needs; we send them two or three matched tutors. Join as a
          school tutor, exam coach, language teacher, music or dance teacher, coach or working professional, and get
          matched with families near you or online.
        </p>
        <ul class="nx-trust">
          <li>Families come to you</li>
          <li>Home, online or both</li>
          <li>Choose your areas and timings</li>
          <li>Verified badge after ID check</li>
        </ul>
        <div class="nx-cta-row">
          <a class="nx-cta nx-cta--primary" href="#" data-modal-target="tutorModal">Join as a tutor</a>
          <a class="nx-cta nx-cta--ghost" href="#categories">See what parents are asking for</a>
        </div>
      </div>
      <aside class="nx-shero__side" aria-label="How it works">
        <ul class="nx-stats nx-stats--stack">
          <li><strong>1</strong><span>Create your profile: subjects, classes, boards, fee</span></li>
          <li><strong>2</strong><span>Add the areas you travel to, and get ID-verified</span></li>
          <li><strong>3</strong><span>We match you with families; the first class is a demo</span></li>
        </ul>
      </aside>
    </section>

    <section class="nx-sec" id="categories" aria-labelledby="catTitle">
      <div class="nx-sec__head">
        <h2 class="nx-sec__title" id="catTitle">What you can teach</h2>
      </div>
      <p class="nx-sec__sub">Categories marked <strong>Tutors needed</strong> are ones parents ask us for where we have too few tutors yet.</p>
      <div class="nx-tabs">
        <div class="nx-tabs__bar" role="tablist">
          @foreach($areas as $key => $area)
            <input class="nx-tabs__radio" type="radio" name="teachArea" id="teach-{{ $key }}" @if($loop->first) checked @endif>
            <label class="nx-tabs__tab" for="teach-{{ $key }}" role="tab">{{ $area['label'] }}</label>
          @endforeach
        </div>
        <div class="nx-tabs__panels">
          @foreach($areas as $key => $area)
            <div class="nx-tabs__panel" role="tabpanel">
              <h3 class="nx-tabs__panel-title">{{ $area['label'] }}</h3>
              <ul class="nx-chips">
                @foreach($area['items'] as $it)
                  <li>
                    <button type="button" class="nx-chip @if(!empty($it['on_request'])) nx-chip--request @endif" data-modal-target="tutorModal">
                      {{ $it['label'] }}@if(!empty($it['on_request'])) · <strong>Tutors needed</strong>@endif
                    </button>
                  </li>
                @endforeach
              </ul>
            </div>
          @endforeach
        </div>
      </div>
    </section>

    <section class="nx-sec" aria-labelledby="whyTitle">
      <div class="nx-sec__head"><h2 class="nx-sec__title" id="whyTitle">Why tutors join</h2></div>
      <div class="nx-grid">
        <article class="nx-card"><h3 class="nx-card__title">Matched, not listed</h3><p class="nx-card__meta">We send parents two or three tutors who fit their subject, class, board, area and budget, so you meet families who actually need you.</p></article>
        <article class="nx-card"><h3 class="nx-card__title">Your areas, your hours</h3><p class="nx-card__meta">Tell us the sectors and societies you travel to, and whether you teach online. Home requests near you come to you first.</p></article>
        <article class="nx-card"><h3 class="nx-card__title">Not only school subjects</h3><p class="nx-card__meta">Languages, music, dance, fitness, coding, and professional and college subjects are all welcome.</p></article>
        <article class="nx-card"><h3 class="nx-card__title">A profile that works for you</h3><p class="nx-card__meta">A verified profile page with your subjects, boards, experience, fee and parent reviews, ranked in search for what you teach.</p></article>
      </div>
    </section>

    <section class="nx-sec" aria-labelledby="faqTitle">
      <div class="nx-sec__head"><h2 class="nx-sec__title" id="faqTitle">Questions from tutors</h2></div>
      <div class="nx-faq">
        @foreach($faqs as $f)
          <details class="nx-faq__item" @if($loop->first) open @endif><summary>{{ $f[0] }}</summary><p>{{ $f[1] }}</p></details>
        @endforeach
      </div>
    </section>

    <section class="nx-sec nx-cta-band" aria-label="Join">
      <div>
        <h2 class="nx-sec__title">Start teaching with NXTutors</h2>
        <p class="nx-sec__sub">It takes a few minutes to create your profile. Add the areas you travel to so home requests near you reach you first.</p>
      </div>
      <div class="nx-cta-row">
        <a class="nx-cta nx-cta--primary" href="#" data-modal-target="tutorModal">Join as a tutor</a>
      </div>
    </section>

  </div>
</main>
@include('include.footer')
</div>
</body>
</html>
