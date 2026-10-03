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
          ['@type' => 'ListItem', 'position' => 2, 'name' => 'How we verify tutors', 'item' => $canonical],
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
      <span aria-current="page">How we verify tutors</span>
    </nav>

    <section class="nx-shero">
      <div class="nx-shero__main">
        <span class="nx-card__kicker">Trust and safety</span>
        <h1 class="nx-shero__title">How NXTutors verifies tutors</h1>
        <p class="nx-shero__lede">
          Before a tutor is shortlisted for your child, we check who they are. Here is exactly what that check
          involves, what the Verified badge on a tutor's card means, what it does not cover, and the simple habits
          that keep home tuition safe.
        </p>
        <ul class="nx-trust">
          <li>One-time code at sign-up</li>
          <li>Government photo ID reviewed</li>
          <li>Verified badge on real tutors</li>
          <li>Free demo before you decide</li>
        </ul>
      </div>
      <aside class="nx-shero__side" aria-label="The check in short">
        <ul class="nx-stats nx-stats--stack">
          <li><strong>1</strong><span>Tutor confirms their phone or email</span></li>
          <li><strong>2</strong><span>Tutor uploads a government photo ID</span></li>
          <li><strong>3</strong><span>Our team reviews it before the profile is marked Verified</span></li>
        </ul>
      </aside>
    </section>

    <section class="nx-sec" aria-labelledby="stepsTitle">
      <div class="nx-sec__head"><h2 class="nx-sec__title" id="stepsTitle">The check, step by step</h2></div>
      <div class="nx-grid">
        <article class="nx-card">
          <h3 class="nx-card__title">1. A one-time code at sign-up</h3>
          <p class="nx-card__meta">Every tutor who joins confirms their phone number or email address with a one-time code, so the contact details on the profile belong to the person who created it.</p>
        </article>
        <article class="nx-card">
          <h3 class="nx-card__title">2. A government photo ID</h3>
          <p class="nx-card__meta">From their dashboard the tutor uploads a government photo ID: the type of document, its number, and photos of the front and back. Each document number can be linked to only one tutor account, so one ID cannot be used for a second profile.</p>
        </article>
        <article class="nx-card">
          <h3 class="nx-card__title">3. Review by our team</h3>
          <p class="nx-card__meta">Our team looks at the uploaded ID against the details on the profile. The Verified badge appears only after this review, so a new tutor's profile can be live without it for a while: look for the badge on the card and profile.</p>
        </article>
        <article class="nx-card">
          <h3 class="nx-card__title">4. The Verified badge</h3>
          <p class="nx-card__meta">Tutors who pass the check carry a Verified badge on their card and profile. The badge confirms identity. How well someone teaches is something you see for yourself in the free demo class.</p>
        </article>
      </div>
    </section>

    <section class="nx-sec" aria-labelledby="sampleTitle">
      <div class="nx-sec__head"><h2 class="nx-sec__title" id="sampleTitle">Sample profiles</h2></div>
      <p class="nx-sec__sub">
        While we grow in each city, some pages show sample profiles so you can see what a tutor profile looks like.
        They are always labelled <strong>Sample profile</strong>, never carry the Verified badge, and show no rating,
        fee or Compare button. They are not tutors you can book. When you send a request, we match you with real,
        active tutors only.
      </p>
    </section>

    <section class="nx-sec" aria-labelledby="notTitle">
      <div class="nx-sec__head"><h2 class="nx-sec__title" id="notTitle">What the check does not cover</h2></div>
      <p class="nx-sec__sub">
        The ID check confirms who a tutor is. It is not a police verification or a criminal background check, and it
        does not grade teaching. That is why the first class is a free demo, why you see each tutor's fee before it,
        and why switching to another tutor later costs nothing.
      </p>
    </section>

    <section class="nx-sec" aria-labelledby="safeTitle">
      <div class="nx-sec__head"><h2 class="nx-sec__title" id="safeTitle">Safety habits for home tuition</h2></div>
      <div class="nx-grid">
        <article class="nx-card"><h3 class="nx-card__title">Meet at the demo</h3><p class="nx-card__meta">Be at home for the demo class, talk to the tutor, and match the name and photo with the profile you were sent.</p></article>
        <article class="nx-card"><h3 class="nx-card__title">Use the gate register</h3><p class="nx-card__meta">In a gated society, add the tutor to the visitor app or gate register so every visit is logged.</p></article>
        <article class="nx-card"><h3 class="nx-card__title">A common room for young children</h3><p class="nx-card__meta">For younger children, keep an adult at home and hold classes in a shared room rather than a closed bedroom.</p></article>
        <article class="nx-card"><h3 class="nx-card__title">Tell us straight away</h3><p class="nx-card__meta">If anything about a tutor worries you, stop the classes and tell us through WhatsApp or the <a href="{{ url('/contact') }}">contact page</a>. Switching is free.</p></article>
      </div>
    </section>

    <section class="nx-sec" aria-labelledby="faqTitle">
      <div class="nx-sec__head"><h2 class="nx-sec__title" id="faqTitle">Questions parents ask</h2></div>
      <div class="nx-faq">
        @foreach($faqs as $f)
          <details class="nx-faq__item" @if($loop->first) open @endif><summary>{{ $f[0] }}</summary><p>{{ $f[1] }}</p></details>
        @endforeach
      </div>
    </section>

    <section class="nx-sec nx-cta-band" aria-label="Find a tutor">
      <div>
        <h2 class="nx-sec__title">Find a verified tutor near you</h2>
        <p class="nx-sec__sub">Tell us the class, board, subject and area. We send two or three matched tutors, and the first class is a free demo.</p>
      </div>
      <div class="nx-cta-row">
        <a class="nx-cta nx-cta--primary" href="{{ url('/demo-class') }}">Book a free demo</a>
        <a class="nx-cta nx-cta--ghost" href="{{ url('/tutors') }}">Browse tutors</a>
        <a class="nx-cta nx-cta--ghost" href="{{ url('/become-a-tutor') }}">Teach on NXTutors</a>
      </div>
    </section>

  </div>
</main>
@include('include.footer')
</div>
</body>
</html>
