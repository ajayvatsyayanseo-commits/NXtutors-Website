<!doctype html>
<html>
<head>
  <meta charset="utf-8">
 
 @include('include.header')
   <main class="main">
 <link rel="stylesheet" href="{{ asset('frount/assets') }}/css/home.css?v={{ $nxtAssetV ?? 1 }}" />

{{-- ============================================================
     Structured data. Google reads this for rich results and AI
     answer engines read it to decide what NXTutors is and what it
     can be cited for. Every Q&A below is also visible on the page
     (the FAQ section), which is what keeps the FAQPage markup
     eligible rather than spammy.
     ============================================================ --}}
@php
  $nxtHome = url('/');
  $nxtFaqs = [
    ['How does Nxtutors AI tutor matching work?', 'Our AI evaluates subject expertise, board alignment, class/exam needs, location feasibility, availability overlap, budget and reliability signals to recommend 2–3 high-fit tutors instead of long random lists.'],
    ['Do you provide home tutors and online tutors across India?', 'Yes. Nxtutors supports home tutoring, online tutoring, institute mentoring and hybrid learning across India based on tutor availability and feasibility.'],
    ['Which classes and boards are supported?', 'We support Classes 6–12 across CBSE, ICSE, IB, ISC and IGCSE boards, including foundation support and board exam preparation.'],
    ['Do you support JEE and NEET preparation?', 'Yes. We match students with specialised JEE/NEET mentors for Physics, Chemistry, Maths and Biology based on goals, level and schedule.'],
    ['Are tutors verified on Nxtutors?', 'Every educator undergoes structured verification and profile validation. We also track feedback and reliability signals to maintain quality and accountability.'],
    ['How does the trial/demo class work?', 'A demo is a normal session to evaluate teaching style and student comfort. After the demo, you can continue with the same tutor or request a different match.'],
    ['What are the typical fees for tutors?', 'Fees depend on class, subject and experience. In most cases, tutoring ranges from ₹800 to ₹2500 per hour. We shortlist tutors aligned to your budget range.'],
    ['Can I change the tutor after hiring?', 'Yes. If the match is not working, we help you switch quickly by recommending alternate verified tutors with better fit.'],
    ['How quickly can I get matched with a tutor?', 'Typically you receive 2–3 recommendations within a short time after sharing your requirement — class, subjects, board, location, schedule and budget.'],
    ['What details should I share to get the best match?', 'Share class/grade, board, subjects, location (city or pincode), preferred days and time slots, mode (home or online) and budget. The more precise the input, the better the match.'],
    ['Do tutors give homework, tests and progress updates?', 'Many tutors follow structured plans with homework, periodic tests and feedback. You can also request weekly progress updates while finalising the tutor.'],
    ['Which cities do you currently support?', 'Nxtutors supports tutor matching across India. Availability depends on the tutor network in each area, and online tutoring is available nationwide.'],
  ];

  $nxtSchema = [
    '@context' => 'https://schema.org',
    '@graph' => [
      [
        '@type' => 'EducationalOrganization',
        '@id' => $nxtHome . '#organization',
        'name' => 'NXTutors',
        'url' => $nxtHome,
        'logo' => asset('uploads/logo/newlogo.png'),
        'description' => 'NXTutors is an AI-powered tutor matching platform that connects parents and students with ID-verified home and online tutors for CBSE, ICSE, IB, ISC and IGCSE, Classes 6–12.',
        'areaServed' => ['@type' => 'Country', 'name' => 'India'],
        'address' => [
          '@type' => 'PostalAddress',
          'streetAddress' => $setting->address ?? '',
          'addressCountry' => 'IN',
        ],
        'telephone' => $setting->phone ?? '',
        'email' => $setting->email ?? '',
      ],
      [
        '@type' => 'WebSite',
        '@id' => $nxtHome . '#website',
        'url' => $nxtHome,
        'name' => 'NXTutors',
        'publisher' => ['@id' => $nxtHome . '#organization'],
        'inLanguage' => 'en-IN',
        'potentialAction' => [
          '@type' => 'SearchAction',
          'target' => [
            '@type' => 'EntryPoint',
            'urlTemplate' => url('/tutors') . '?q={search_term_string}',
          ],
          'query-input' => 'required name=search_term_string',
        ],
      ],
      [
        '@type' => 'Service',
        'name' => 'AI tutor matching',
        'serviceType' => 'Home and online tutoring',
        'provider' => ['@id' => $nxtHome . '#organization'],
        'areaServed' => ['@type' => 'Country', 'name' => 'India'],
        'audience' => ['@type' => 'EducationalAudience', 'educationalRole' => 'parent'],
        'offers' => [
          '@type' => 'Offer',
          'priceCurrency' => 'INR',
          'priceSpecification' => [
            '@type' => 'PriceSpecification',
            'minPrice' => 800,
            'maxPrice' => 2500,
            'priceCurrency' => 'INR',
            'unitText' => 'per hour',
          ],
        ],
      ],
      [
        '@type' => 'FAQPage',
        '@id' => $nxtHome . '#faq',
        'mainEntity' => array_map(fn ($f) => [
          '@type' => 'Question',
          'name' => $f[0],
          'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]],
        ], $nxtFaqs),
      ],
    ],
  ];
@endphp
<script type="application/ld+json">{!! json_encode($nxtSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>

{{-- ============================================================
     HOME HERO
     ------------------------------------------------------------
     One cinematic frame: the photograph carries the emotion, the
     scrim carries the type, and the white search card is the only
     bright object on screen so the eye lands on it. Copy and the
     amber accent are pinned to this specific photograph's warm
     lamplight — see the note on --nxh-gold below.

     Replaces a five-slide rotator that never rotated: main.js
     bails unless `#heroDots` exists, and this view never rendered
     it, so slides 2–5 sat at opacity:0 forever while still being
     parsed. Admin copy still drives the badge, headline and the
     facts line from the first active banner row.
     ============================================================ --}}
@php
  $hero = $banner->first();

  // Only real, already-published claims. The footer and the FAQ/JSON-LD on
  // this same page are the source for all three.
  $nxtHeroStats = [
    ['4,500+',      'Families matched',  'families'],
    ['Classes 6–12','CBSE · ICSE · IB',  'board'],
    ['₹800–2,500',  'Typical, per hour', 'fee'],
  ];
@endphp

<section class="nxh" aria-labelledby="nxhTitle">
  <img
    class="nxh__photo"
    src="{{ asset('storage/Hero/heroimage-1280.webp') }}"
    srcset="{{ asset('storage/Hero/heroimage-760.webp') }} 760w,
            {{ asset('storage/Hero/heroimage-1280.webp') }} 1280w,
            {{ asset('storage/Hero/heroimage-1717.webp') }} 1717w"
    sizes="100vw"
    width="1717" height="916"
    fetchpriority="high" decoding="async"
    alt="A tutor working through a notebook exercise with a school student at home"
  />
  <span class="nxh__scrim" aria-hidden="true"></span>

  <div class="nxh__inner">
    <p class="nxh__badge">
      <svg viewBox="0 0 24 24" width="13" height="13" fill="currentColor" aria-hidden="true" focusable="false">
        <path d="M12 2.6l2.7 6.1 6.6.6-5 4.4 1.5 6.5L12 16.8l-5.8 3.4 1.5-6.5-5-4.4 6.6-.6z"/>
      </svg>
      {{ $hero?->sub_title ?: 'Premium tutoring. Proven results.' }}
    </p>

    {{-- Deliberately not $hero->title. The banner row currently holds
         "Top home tutors in" — a fragment meant to be completed by a detected
         city, which renders as a broken sentence at H1 size. The badge above
         still carries the admin's locality copy. Wire the title back here once
         that column holds a complete headline. --}}
    <h1 class="nxh__title" id="nxhTitle">
      Better learning,
      <span class="nxh__title-line">brighter futures</span>
    </h1>

    <p class="nxh__sub">
      Verified home and online tutors for Classes 6–12.
      Tell us the subject and your locality — our AI returns two or three real
      matches, not a directory to sift through.
    </p>

    {{-- Two fields, because two is what the matcher accepts: `search` is
         OR-matched across subject/board/profile, `place` narrows with AND.
         A third "Mode" control would look right and filter nothing. --}}
    <div class="nxh__search">
      <div class="nxh__field">
        <label class="nxh__label" for="heroSearchInput">Search classes</label>
        <div class="nxh__control">
          <input
            type="text"
            id="heroSearchInput"
            class="nxh__input"
            placeholder="e.g. Class 10 Maths"
          />
          <span class="nxh__control-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="17" height="17" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.6" y2="16.6"/></svg>
          </span>
        </div>
      </div>

      <span class="nxh__sep" aria-hidden="true"></span>

      <div class="nxh__field">
        <label class="nxh__label" for="heroSearchArea">Location</label>
        <div class="nxh__control">
          <input
            type="text"
            id="heroSearchArea"
            class="nxh__input"
            placeholder="Sector or city"
          />
          <span class="nxh__control-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 21s7-5.5 7-11a7 7 0 1 0-14 0c0 5.5 7 11 7 11z"/><circle cx="12" cy="10" r="2.6"/></svg>
          </span>
        </div>
      </div>

      {{-- The search handler resets this button with .text(), which would wipe
           any child element, so the chevron is a ::after and the contents stay
           plain text. Label must match the strings in the handler below. --}}
      <button type="button" id="heroSearchBtn" class="nxh__go">Find Tutors</button>
    </div>

    {{-- The reassurance belongs directly under the commit button, not in the
         stats row. Wording is the demo modal's own promise, kept identical so
         the two never drift apart. --}}
    <p class="nxh__reassure">
      <svg viewBox="0 0 16 16" width="13" height="13" fill="currentColor" aria-hidden="true" focusable="false">
        <path d="M6.4 12.1 2.7 8.4l1.3-1.3 2.4 2.4 5.6-5.6 1.3 1.3z"/>
      </svg>
      Free demo class · No card, no commitment
    </p>

    <ul class="nxh__stats">
      @foreach($nxtHeroStats as [$figure, $label, $icon])
        <li class="nxh__stat">
          <span class="nxh__stat-icon" aria-hidden="true">
            @if($icon === 'families')
              <svg viewBox="0 0 24 24" width="17" height="17" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M16 19v-1.5a3.5 3.5 0 0 0-3.5-3.5h-5A3.5 3.5 0 0 0 4 17.5V19"/><circle cx="10" cy="8" r="3.2"/><path d="M17.5 11.2a3 3 0 1 0-2-5.3"/><path d="M20 19v-1.4a3.3 3.3 0 0 0-2.2-3.1"/></svg>
            @elseif($icon === 'board')
              <svg viewBox="0 0 24 24" width="17" height="17" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 8.2 12 4l9 4.2-9 4.2z"/><path d="M6.6 10.4V15c0 1.7 2.4 3 5.4 3s5.4-1.3 5.4-3v-4.6"/><path d="M21 8.6v5"/></svg>
            @else
              <svg viewBox="0 0 24 24" width="17" height="17" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M7 6h9"/><path d="M7 10.5h9"/><path d="M8.6 6c3 0 4.4 1.6 4.4 3.6S11.6 13.2 9 13.2H7l7 6.3"/></svg>
            @endif
          </span>
          <span class="nxh__stat-text">
            <strong class="nxh__stat-figure">{{ $figure }}</strong>
            <span class="nxh__stat-label">{{ $label }}</span>
          </span>
        </li>
      @endforeach
    </ul>
  </div>

  {{-- The reference sweeps into a white page; this page is dark, so the curve
       is cut in the page's own ground. Same silhouette, right colour. --}}
  <svg class="nxh__sweep" viewBox="0 0 1440 120" preserveAspectRatio="none"
       aria-hidden="true" focusable="false">
    <path d="M0 120h1440V50C1200 96 900 120 720 120S240 96 0 50z"/>
  </svg>
</section>

<style>
/* ---------------------------------------------------------------
   Home hero. Prefixed `body.page` throughout so these rules carry
   the same weight as the design system's own component rules and
   win on document order, without reaching for !important.
   --------------------------------------------------------------- */
body.page .nxh{
  /* Marigold, not var(--accent). The accent is theme-switchable and
     defaults to acid lime (#a3e635 in styles.css), which fights the amber
     lamplight in this photograph badly. This hero is art-directed around
     one specific image, so the warm accent is pinned here — it is also the
     design system's own documented "Slate & Marigold" hue. */
  --nxh-gold:  #F5B93F;
  --nxh-ground:#020617;

  position: relative;
  isolation: isolate;
  overflow: hidden;
  /* Bleeds past the shell's 16px side gutter so the frame reads edge-to-edge,
     but keeps a positive top margin: at -16px the frame sat flush under the
     topbar and the WhatsApp button appeared to rest on the photograph. */
  margin: 12px calc(-1 * var(--nxt-shell-pad, 16px)) 26px;
  padding: 74px 22px 96px;
  min-height: 520px;
  display: flex;
  align-items: center;
  /* Now that it clears the topbar, all four corners round — a frame with a
     gap above it but square top corners reads as a clipping mistake. */
  border-radius: 22px;
  background: #0C1226;
}

@media (min-width: 720px){
  body.page .nxh{
    margin-top: 16px;
    padding: 96px 48px 112px;
    min-height: 660px;
    border-radius: 26px;
  }
}

@media (min-width: 1100px){
  body.page .nxh__inner{ max-width: 680px; }
}

body.page .nxh__photo{
  position: absolute;
  z-index: -2;
  inset: 0;
  width: 100%;
  height: 100%;
  /* The subject sits right of centre in the source frame, so hold that edge
     while narrow viewports crop the built-in navy gradient off the left. */
  object-fit: cover;
  object-position: 74% center;
}

@media (min-width: 960px){
  body.page .nxh__photo{ object-position: center; }
}

/* Mobile: a flat vertical wash, because there is no room to keep a clear
   text column beside the subject. Desktop: a horizontal fade that leaves
   the tutor and student fully visible on the right. */
body.page .nxh__scrim{
  position: absolute;
  z-index: -1;
  inset: 0;
  background:
    linear-gradient(180deg,
      rgba(6,10,26,.90) 0%,
      rgba(6,10,26,.74) 45%,
      rgba(6,10,26,.88) 100%);
}

@media (min-width: 960px){
  body.page .nxh__scrim{
    /* Holds near-opaque past the right edge of the search card (~72%) before
       releasing, so no white type ever lands on lamplit wood. */
    background:
      linear-gradient(100deg,
        rgba(8,13,30,.96)  0%,
        rgba(8,13,30,.92) 42%,
        rgba(8,13,30,.74) 60%,
        rgba(8,13,30,.34) 76%,
        rgba(8,13,30,.06) 90%,
        rgba(8,13,30,0)  100%);
  }
}

body.page .nxh__inner{
  position: relative;
  width: 100%;
  max-width: 640px;
}

/* ---- Badge ---- */
body.page .nxh__badge{
  display: inline-flex;
  align-items: center;
  gap: 8px;
  margin: 0 0 20px;
  padding: 8px 16px 8px 13px;
  border: 1px solid rgba(245,185,63,.34);
  border-radius: 999px;
  background: rgba(10,16,34,.62);
  backdrop-filter: blur(6px);
  font-family: var(--nxt-font-body, system-ui), sans-serif;
  font-size: 12.5px;
  font-weight: 700;
  letter-spacing: .01em;
  color: #FFF6E4;
}

body.page .nxh__badge svg{ flex: 0 0 auto; color: var(--nxh-gold); }

/* ---- Headline ------------------------------------------------
   One colour, on purpose. Splitting a headline white/amber is the
   move every hero template makes, and it spends the accent twice —
   here the amber belongs to the button alone, so the eye goes to
   the thing you can press. Emphasis comes from scale and tracking
   instead of hue: set large, packed tight, two lines, no tint.
   -------------------------------------------------------------- */
body.page .nxh__title{
  margin: 0 0 18px;
  font-family: var(--nxt-font-display, system-ui), sans-serif;
  font-size: clamp(2.1rem, 1.1rem + 5.1vw, 4.6rem);
  font-weight: 800;
  line-height: 1.0;
  letter-spacing: -.038em;
  color: #fff;
  text-wrap: balance;
  text-shadow: 0 2px 20px rgba(2,6,23,.5);
}

/* Holds the line break at every width rather than leaving it to reflow. */
body.page .nxh__title-line{
  display: block;
  color: inherit;
}

body.page .nxh__sub{
  margin: 0;
  max-width: 44ch;
  font-family: var(--nxt-font-body, system-ui), sans-serif;
  font-size: 15.5px;
  line-height: 1.6;
  color: rgba(255,255,255,.78);
}

/* ---- Search card: the only bright object in the frame ---- */
body.page .nxh__search{
  display: grid;
  gap: 10px;
  margin-top: 30px;
  padding: 10px;
  border-radius: 20px;
  background: #fff;
  box-shadow:
    0 0 0 1px rgba(255,255,255,.5),
    0 24px 56px rgba(2,6,23,.52),
    0 4px 12px rgba(2,6,23,.28);
}

@media (min-width: 620px){
  body.page .nxh__search{
    grid-template-columns: minmax(0,1.1fr) auto minmax(0,.9fr) auto;
    align-items: stretch;
    gap: 0;
    padding: 8px;
  }
}

body.page .nxh__field{
  display: flex;
  flex-direction: column;
  justify-content: center;
  min-width: 0;
  padding: 10px 14px;
  border-radius: 13px;
  background: #F4F6FA;
  transition: background var(--nxt-fast, 130ms) var(--nxt-ease, ease);
}

@media (min-width: 620px){
  body.page .nxh__field{
    background: transparent;
    padding: 8px 18px;
  }
  body.page .nxh__field:hover{ background: #F7F9FC; }
}

body.page .nxh__label{
  display: block;
  margin: 0 0 3px;
  font-family: var(--nxt-font-body, system-ui), sans-serif;
  font-size: 10.5px;
  font-weight: 700;
  letter-spacing: .085em;
  text-transform: uppercase;
  color: #8A93A2;
}

body.page .nxh__control{
  display: flex;
  align-items: center;
  gap: 10px;
}

body.page .nxh__control-icon{
  display: inline-flex;
  flex: 0 0 auto;
  color: #A8B0BE;
}

/* The design system styles fields by attribute — `body.page input[type="text"]`
   is (0,2,2) and outranked a plain `.nxh__input` class, which is what painted
   these inputs as dark grey wells with a 46px floor and a border. Matching on
   the attribute inside `.nxh` lifts this to (0,3,2) and wins on merit rather
   than with !important. */
body.page .nxh input[type="text"],
body.page .nxh input[type="text"]:hover,
body.page .nxh input[type="text"]:focus{
  width: 100%;
  min-width: 0;
  min-height: 0;
  padding: 0;
  border: 0;
  border-radius: 0;
  background: transparent;
  box-shadow: none;
  outline: 0;
  font-family: var(--nxt-font-body, system-ui), sans-serif;
  font-size: 15.5px;
  font-weight: 600;
  line-height: 1.35;
  letter-spacing: -.005em;
  color: #111827;
}

body.page .nxh input[type="text"]::placeholder{
  color: #A8B0BE;
  font-weight: 500;
  opacity: 1;
}

/* Focus lands on the whole field, so the ring reads as one control. */
body.page .nxh__field:focus-within{
  background: #fff;
  outline: 2px solid #111827;
  outline-offset: -1px;
}

body.page .nxh__sep{ display: none; }

@media (min-width: 620px){
  body.page .nxh__sep{
    display: block;
    align-self: center;
    width: 1px;
    height: 40px;
    background: #E4E8EF;
  }
}

body.page .nxh__go{
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  min-height: 56px;
  padding: 14px 30px;
  border: 0;
  border-radius: 14px;
  background: linear-gradient(180deg, #FFC957 0%, var(--nxh-gold) 52%, #EFA924 100%);
  color: #23180A;
  font-family: var(--nxt-font-body, system-ui), sans-serif;
  font-size: 15.5px;
  font-weight: 800;
  letter-spacing: -.008em;
  white-space: nowrap;
  cursor: pointer;
  box-shadow:
    0 1px 0 rgba(255,255,255,.45) inset,
    0 8px 20px rgba(226,150,20,.34);
  transition: filter var(--nxt-fast, 130ms) var(--nxt-ease, ease),
              transform var(--nxt-fast, 130ms) var(--nxt-ease, ease),
              box-shadow var(--nxt-fast, 130ms) var(--nxt-ease, ease);
}

/* Chevron as a pseudo-element: the handler's .text() call would delete a
   real child node on the first search. */
body.page .nxh__go::after{
  content: "›";
  font-size: 20px;
  font-weight: 700;
  line-height: 1;
  transform: translateY(-1.5px);
}

body.page .nxh__go:hover{
  filter: brightness(1.06);
  transform: translateY(-1px);
  box-shadow:
    0 1px 0 rgba(255,255,255,.5) inset,
    0 12px 26px rgba(226,150,20,.44);
}

body.page .nxh__go:active{ transform: none; }

body.page .nxh__go:focus-visible{
  outline: 3px solid #fff;
  outline-offset: 2px;
}

body.page .nxh__go[disabled]{
  cursor: not-allowed;
  transform: none;
  filter: none;
}

/* ---- Reassurance, immediately under the commit ---- */
body.page .nxh__reassure{
  display: flex;
  align-items: center;
  gap: 7px;
  margin: 14px 0 0;
  font-family: var(--nxt-font-body, system-ui), sans-serif;
  font-size: 12.5px;
  font-weight: 600;
  color: rgba(255,255,255,.7);
}

body.page .nxh__reassure svg{ flex: 0 0 auto; color: #4ADE80; }

/* ---- Stats: three claims this site already publishes ---- */
body.page .nxh__stats{
  display: flex;
  flex-wrap: wrap;
  gap: 14px 12px;
  margin: 26px 0 0;
  padding: 0;
  list-style: none;
}

body.page .nxh__stat{
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 9px 16px 9px 10px;
  /* A glass chip per stat: the photograph is busy behind this row, and white
     type on lamplit wood is the one place legibility actually breaks. */
  border: 1px solid rgba(255,255,255,.10);
  border-radius: 14px;
  background: rgba(8,13,30,.44);
  backdrop-filter: blur(7px);
}

body.page .nxh__stat-icon{
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex: 0 0 auto;
  width: 38px;
  height: 38px;
  border: 1px solid rgba(245,185,63,.38);
  border-radius: 999px;
  background: rgba(245,185,63,.13);
  color: var(--nxh-gold);
}

body.page .nxh__stat-text{ display: block; }

body.page .nxh__stat-figure{
  display: block;
  font-family: var(--nxt-font-display, system-ui), sans-serif;
  font-size: 19px;
  font-weight: 800;
  letter-spacing: -.024em;
  line-height: 1.12;
  color: #fff;
}

body.page .nxh__stat-label{
  display: block;
  margin-top: 1px;
  font-family: var(--nxt-font-body, system-ui), sans-serif;
  font-size: 11.5px;
  font-weight: 600;
  letter-spacing: .01em;
  color: rgba(255,255,255,.66);
}

/* ---- Bottom sweep ---- */
body.page .nxh__sweep{
  position: absolute;
  left: 0;
  right: 0;
  bottom: -1px;
  width: 100%;
  height: 62px;
  fill: var(--nxh-ground);
  pointer-events: none;
}

@media (min-width: 720px){
  body.page .nxh__sweep{ height: 88px; }
}

/* ---- Phone tune-up: same frame, less air, smaller furniture ---- */
@media (max-width: 480px){
  body.page .nxh{
    margin: 8px calc(-1 * var(--nxt-shell-pad, 16px)) 20px;
    padding: 52px 16px 74px;
    min-height: 0;
    border-radius: 18px;
  }
  body.page .nxh__badge{
    margin-bottom: 14px;
    padding: 6px 13px 6px 11px;
    font-size: 11.5px;
  }
  body.page .nxh__title{ margin-bottom: 14px; }
  body.page .nxh__sub{ font-size: 14px; }
  body.page .nxh__search{
    margin-top: 22px;
    padding: 8px;
    border-radius: 16px;
  }
  body.page .nxh__go{ min-height: 50px; }
  body.page .nxh__reassure{ margin-top: 12px; font-size: 12px; }
  body.page .nxh__stats{ gap: 8px; margin-top: 20px; }
  body.page .nxh__stat{
    /* Content-sized chips: a stretched full-width chip reads as a bar, not
       a stat. Let each one hug its text and wrap naturally. */
    flex: 0 1 auto;
    gap: 9px;
    padding: 7px 12px 7px 8px;
    border-radius: 12px;
  }
  body.page .nxh__stat-icon{ width: 32px; height: 32px; }
  body.page .nxh__stat-icon svg{ width: 14px; height: 14px; }
  body.page .nxh__stat-figure{ font-size: 15.5px; }
  body.page .nxh__stat-label{ font-size: 10.5px; }
  body.page .nxh__sweep{ height: 44px; }
}

@media (prefers-reduced-motion: reduce){
  body.page .nxh__go{ transition: none; }
  body.page .nxh__go:hover{ transform: none; }
}
</style>


<section class="section">
        <div class="section-head">
          <h2 class="section-title">Explore Tutors by Subject, Skill & Exam</h2>
        </div>
        <div class="grid grid--categories">
         
        @foreach($category as $rowcc)
          <a href="{{ url('/')}}/category/{{ $rowcc->slug}}" class="tile">
            <div class="tile-icon"><img src="{{ asset('storage/category') }}/{{ $rowcc->avatar}}" alt="icon" style="width:40px; height:40px; border-radius: 50%;" loading="lazy" decoding="async" /></div>
            <div class="tile-main">
              <div class="tile-kicker">{{ $rowcc->cat_title}}</div>
              <!-- <div class="tile-title">All Subjects</div>
              <div class="tile-meta">18 tutors nearby</div> -->
            </div>
          </a>
            @endforeach

         
        </div>
      </section>
    

<section class="section section--suggested" id="suggestedTeachersSection">
  <div class="section-head">
    <h2 class="section-title" id="suggestedTitle">Suggested for your child</h2>
    <p id="suggestedSubtitle" style="margin:0;"></p>
    <a class="btn btn-ghost btn-small" href="{{ route('tutors.index') }}">View all tutors →</a>
  </div>

  <!-- <div id="teacherLoading" style="display:none; text-align:center; padding:20px; font-weight:600;">
    NXTutors AI is finding the best tutors for you...
  </div> -->
  <div id="teacherLoading" style="display:none; margin-top:14px;">
  <div class="nx-compare-loading">
    <div class="nx-compare-loader-ring"></div>

    <div class="nx-compare-loading-title">
      NXTutors AI is finding the best tutors...
    </div>

    <div class="nx-compare-loading-sub" id="teacherLoadingText">
      Matching subject, board, budget, location and availability
    </div>

    <div class="nx-compare-progress">
      <i id="teacherProgressBar"></i>
    </div>

    <div class="nx-compare-progress-text" id="teacherProgressText">
      Preparing search...
    </div>
  </div>
</div>

  <div
    class="suggested-grid"
    id="homeTeachersGrid"
    data-url="{{ route('home.teachers') }}"
  >
    @include('home.partials.teacher-cards', ['teachers' => $teachers])
  </div>
 
</section>

@include('home.partials.ask-ai')
 
      
 

<!-- AI TUTOR MATCHING -->
<section class="section ai-matching-section">
  <style>
    .ai-section-header {
      text-align: center;
      max-width: 700px;
      margin: 0 auto 40px;
    }
    
    .ai-section-header h2 {
      font-size: clamp(24px, 3.5vw, 32px);
      font-weight: 800;
      color: #fff;
      margin-bottom: 12px;
    }
    
    .ai-section-header p {
      font-size: 15px;
      line-height: 1.6;
      color: var(--text-subtle, #9ca3af);
    }
    
    /* Top 3 Columns Grid */
    .ai-grid-top {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      margin-bottom: 24px;
    }
    
    .ai-card-small {
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid rgba(255, 255, 255, 0.08);
      border-radius: 20px;
      padding: 24px;
      transition: transform 0.2s, background-color 0.2s, border-color 0.2s;
    }
    
    .ai-card-small:hover {
      background: rgba(255, 255, 255, 0.06);
      border-color: rgba(255, 255, 255, 0.16);
      transform: translateY(-2px);
    }
    
    .ai-card-icon {
      width: 44px;
      height: 44px;
      border-radius: 12px;
      background: rgba(251, 191, 36, 0.1);
      border: 1px solid rgba(251, 191, 36, 0.2);
      color: var(--accent, #fbbf24);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
    }
    
    .ai-card-small h3 {
      font-size: 17px;
      font-weight: 700;
      color: #fff;
      margin-bottom: 10px;
    }
    
    .ai-card-small p {
      font-size: 13.5px;
      line-height: 1.6;
      color: var(--text-subtle, #9ca3af);
      margin: 0;
    }
    
    /* Large Card Below */
    .ai-card-large {
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid rgba(255, 255, 255, 0.08);
      border-radius: 24px;
      padding: 32px;
      display: grid;
      grid-template-columns: 1.2fr 1fr;
      gap: 40px;
      align-items: center;
    }
    
    .ai-card-large-content h3 {
      font-size: clamp(20px, 3vw, 24px);
      font-weight: 800;
      color: #fff;
      margin-bottom: 14px;
    }
    
    .ai-card-large-content p {
      font-size: 14.5px;
      line-height: 1.6;
      color: var(--text-subtle, #9ca3af);
      margin: 0 0 24px;
    }
    
    .ai-check-list {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      flex-direction: column;
      gap: 12px;
    }
    
    .ai-check-item {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 14.5px;
      font-weight: 600;
      color: #fff;
    }
    
    .ai-check-icon {
      color: #10b981; /* Emerald green checkmark */
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .ai-card-large-image {
      position: relative;
      border-radius: 16px;
      overflow: hidden;
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .ai-card-large-image img {
      width: 100%;
      height: auto;
      display: block;
    }
    
    .ai-image-badge {
      position: absolute;
      bottom: 16px;
      left: 16px;
      background: rgba(15, 23, 42, 0.85);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.15);
      padding: 6px 14px;
      border-radius: 30px;
      font-size: 11px;
      font-weight: 700;
      color: #fff;
      letter-spacing: 0.5px;
    }
    
    /* Responsive */
    @media (max-width: 991px) {
      .ai-grid-top {
        grid-template-columns: 1fr;
        gap: 16px;
      }
      .ai-card-large {
        grid-template-columns: 1fr;
        gap: 30px;
        padding: 24px;
      }
    }
  </style>

  <div class="ai-section-header">
    <h2>AI-Based Tutor Matching Across India</h2>
    <p>Nxtutors is an AI-powered tutor and education matching platform connecting parents and students with verified educators across India.</p>
  </div>

  <!-- Top Row Grid -->
  <div class="ai-grid-top">
    <!-- Card 1 -->
    <div class="ai-card-small">
      <div class="ai-card-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l-.019.007a1 1 0 0 0-.528.816v8.354a1 1 0 0 0 .528.816l6 2.5.019.007a.5.5 0 0 0 .372 0l6-2.5.019-.007a1 1 0 0 0 .528-.816V4.323a1 1 0 0 0-.528-.816l-6-2.5zM8 4.07 13.06 6.18 8 8.29 2.94 6.18 8 4.07zM2 7.64v4.44a.5.5 0 0 0 .264.44l5.236 2.18v-4.88L2 7.64zm12 0v4.44a.5.5 0 0 1-.264.44l-5.236 2.18v-4.88L14 7.64z"/>
        </svg>
      </div>
      <h3>AI-Based Shortlisting</h3>
      <p>Instead of browsing random tutor listings, our structured AI recommendation system evaluates academic compatibility and delivers a shortlist.</p>
    </div>

    <!-- Card 2 -->
    <div class="ai-card-small">
      <div class="ai-card-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
          <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM11 9.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM11 12.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM8 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM8 9.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM8 12.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM5 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM5 9.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM5 12.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
        </svg>
      </div>
      <h3>Academic Support</h3>
      <p>We provide home tutors, online tutors, institute mentors and hybrid academic support for Classes 6–12 across CBSE, ICSE, IB, ISC and IGCSE boards.</p>
    </div>

    <!-- Card 3 -->
    <div class="ai-card-small">
      <div class="ai-card-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
          <path d="M5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.24 62.24 0 0 1 5.072.56zm3.857 11.758a.5.5 0 0 0 .708-.708L5.707 7.682a.5.5 0 0 0-.708 0l-1.39 1.39a.5.5 0 1 0 .708.708l1.036-1.036 3.576 3.574z"/>
        </svg>
      </div>
      <h3>Demo &amp; Evaluation</h3>
      <p>We support competitive exam preparation including JEE and NEET. Parents can book a demo class to evaluate teaching clarity and decide confidently.</p>
    </div>
  </div>

  <!-- Large Card Below -->
  <div class="ai-card-large">
    <div class="ai-card-large-content">
      <h3>Shortlist of 2–3 High-Fit Tutors</h3>
      <p>Instead of browsing random tutor listings, our recommendation system evaluates compatibility and delivers a shortlist based on subject expertise, board alignment, availability, budget and reliability signals.</p>
      <div class="ai-check-list">
        <div class="ai-check-item">
          <span class="ai-check-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
          </span>
          <span>Verified tutors for home, online and hybrid learning across India.</span>
        </div>
        <div class="ai-check-item">
          <span class="ai-check-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
          </span>
          <span>Support for CBSE, ICSE, IB, ISC, IGCSE + JEE &amp; NEET.</span>
        </div>
        <div class="ai-check-item">
          <span class="ai-check-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
          </span>
          <span>AI-based shortlisting: get 2–3 best matches instead of long lists.</span>
        </div>
      </div>
    </div>
    
    <div class="ai-card-large-image">
      <img src="{{ asset('frount/assets') }}/images/aa.png" alt="AI powered tutor matching platform across India" loading="lazy" decoding="async" />
      <div class="ai-image-badge">AI-Based · Verified Tutors · India-Wide</div>
    </div>
  </div>
</section>

  

      <section class="section">
        <div class="section-head">
          <h2 class="section-title">Local tutors</h2>
          <a class="btn btn-ghost btn-small" href="{{ route('tutors.index') }}">View all tutors →</a>
        </div>

        <div class="suggested-grid"
             id="localTutorsRow"
             data-url="{{ route('home.localTutors') }}">
          {{-- Initial fallback (page load pe) --}}
          @include('home.partials.local-teacher-cards', ['teachers' => $teachers ?? collect()])
        </div>
      </section>

       
 

      <!-- PARENT GUIDE -->
      <section class="section">
        <style>
          .parent-guide-container {
            display: flex;
            gap: 40px;
            align-items: flex-start;
            margin-top: 15px;
          }
          
          .parent-guide-left {
            flex: 0 0 320px;
            max-width: 320px;
          }
          
          .parent-guide-right {
            flex: 1;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
          }
          
          .guide-badge {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 30px;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.12);
            color: var(--accent, #fbbf24);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.8px;
            margin-bottom: 16px;
            text-transform: uppercase;
          }
          
          .guide-main-title {
            font-size: clamp(24px, 3.5vw, 32px);
            font-weight: 800;
            line-height: 1.25;
            margin: 0 0 12px;
            color: #fff;
          }
          
          .guide-main-subtitle {
            font-size: 14px;
            line-height: 1.6;
            color: var(--text-subtle, #9ca3af);
            margin: 0 0 24px;
          }
          
          
          /* Cards */
          .guide-card-new {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
          }
          
          .guide-card-no {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.12);
            color: var(--accent, #fbbf24);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 20px;
          }
          
          .guide-card-heading {
            font-size: 18px;
            font-weight: 700;
            margin: 0 0 16px;
            color: #fff;
          }
          
          .guide-card-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 12px;
          }
          
          .guide-card-list li {
            display: flex;
            align-items: flex-start;
            font-size: 13.5px;
            line-height: 1.5;
            color: var(--text-subtle, #9ca3af);
          }
          
          .circle-bullet {
            width: 8px;
            height: 8px;
            border: 1.5px solid var(--accent, #fbbf24);
            border-radius: 50%;
            display: inline-block;
            flex-shrink: 0;
            margin-right: 10px;
            margin-top: 5px;
          }
          
          /* Responsive */
          @media (max-width: 991px) {
            .parent-guide-container {
              flex-direction: column;
              gap: 30px;
            }
            .parent-guide-left {
              max-width: 100%;
              flex: 1;
            }
            .parent-guide-right {
              width: 100%;
              gap: 20px;
            }
          }
          
          @media (max-width: 640px) {
            .parent-guide-right {
              grid-template-columns: 1fr;
              gap: 30px;
            }
            .guide-card-no {
              margin-bottom: 12px;
            }
            .guide-card-heading {
              margin-bottom: 10px;
            }
          }
        </style>

        <div class="parent-guide-container">
          <!-- Left Column -->
          <div class="parent-guide-left">
            <span class="guide-badge">Expert Advice</span>
            <h2 class="guide-main-title">Parent’s Guide — Choosing the right tutor</h2>
            <p class="guide-main-subtitle">
              Short, actionable checklist for busy parents: topics to ask, trial class checklist &amp; pricing guidance.
            </p>
          </div>

          <!-- Right Column -->
          <div class="parent-guide-right">
            <!-- Card 1 -->
            <div class="guide-card-new">
              <div class="guide-card-no">01</div>
              <h3 class="guide-card-heading">Before you speak</h3>
              <ul class="guide-card-list">
                <li>
                  <span class="circle-bullet"></span>
                  <span>Confirm board &amp; class experience</span>
                </li>
                <li>
                  <span class="circle-bullet"></span>
                  <span>Ask for sample lesson or demo</span>
                </li>
                <li>
                  <span class="circle-bullet"></span>
                  <span>Check availability &amp; location</span>
                </li>
              </ul>
            </div>

            <!-- Card 2 -->
            <div class="guide-card-new">
              <div class="guide-card-no">02</div>
              <h3 class="guide-card-heading">During trial class</h3>
              <ul class="guide-card-list">
                <li>
                  <span class="circle-bullet"></span>
                  <span>Look for clarity in explanations</span>
                </li>
                <li>
                  <span class="circle-bullet"></span>
                  <span>Check engagement with child</span>
                </li>
                <li>
                  <span class="circle-bullet"></span>
                  <span>Ask for a follow-up plan</span>
                </li>
              </ul>
            </div>

            <!-- Card 3 -->
            <div class="guide-card-new">
              <div class="guide-card-no">03</div>
              <h3 class="guide-card-heading">After hiring</h3>
              <ul class="guide-card-list">
                <li>
                  <span class="circle-bullet"></span>
                  <span>Set weekly goals</span>
                </li>
                <li>
                  <span class="circle-bullet"></span>
                  <span>Track progress monthly</span>
                </li>
                <li>
                  <span class="circle-bullet"></span>
                  <span>Ask for regular feedback</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>


      <!-- TRUSTED BY -->
      <section class="section">
        <div class="section-head">
          <h2 class="section-title">Trusted by schools &amp; parents in Gurugram</h2>
          <p class="section-subtitle">
            We work with local schools and coaching centres — here are some logos.
          </p>
        </div>

        <div class="logo-row">
          <div class="logo-card">
            <img src="{{ asset('frount/assets') }}/images/logo1.png" loading="lazy" decoding="async" alt="School logo" />
          </div>
          <div class="logo-card">
            <img src="{{ asset('frount/assets') }}/images/logo2.png" loading="lazy" decoding="async" alt="School logo" />
          </div>
          <div class="logo-card">
            <img src="{{ asset('frount/assets') }}/images/logo3.png" loading="lazy" decoding="async" alt="School logo" />
          </div>
          <div class="logo-card">
            <img src="{{ asset('frount/assets') }}/images/logo4.png" loading="lazy" decoding="async" alt="School logo" />
          </div>
        </div>
      </section>

 
<!-- AI TUTOR MATCHING -->
<section class="section ai-matching-section">
  <style>
    .ai-section-header {
      text-align: center;
      max-width: 700px;
      margin: 0 auto 40px;
    }
    
    .ai-section-header h2 {
      font-size: clamp(24px, 3.5vw, 32px);
      font-weight: 800;
      color: #fff;
      margin-bottom: 12px;
    }
    
    .ai-section-header p {
      font-size: 15px;
      line-height: 1.6;
      color: var(--text-subtle, #9ca3af);
    }
    
    /* Top 3 Columns Grid */
    .ai-grid-top {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      margin-bottom: 24px;
    }
    
    .ai-card-small {
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid rgba(255, 255, 255, 0.08);
      border-radius: 20px;
      padding: 24px;
      transition: transform 0.2s, background-color 0.2s, border-color 0.2s;
    }
    
    .ai-card-small:hover {
      background: rgba(255, 255, 255, 0.06);
      border-color: rgba(255, 255, 255, 0.16);
      transform: translateY(-2px);
    }
    
    .ai-card-icon {
      width: 44px;
      height: 44px;
      border-radius: 12px;
      background: rgba(251, 191, 36, 0.1);
      border: 1px solid rgba(251, 191, 36, 0.2);
      color: var(--accent, #fbbf24);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
    }
    
    .ai-card-small h3 {
      font-size: 17px;
      font-weight: 700;
      color: #fff;
      margin-bottom: 10px;
    }
    
    .ai-card-small p {
      font-size: 13.5px;
      line-height: 1.6;
      color: var(--text-subtle, #9ca3af);
      margin: 0;
    }
    
    /* Large Card Below */
    .ai-card-large {
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid rgba(255, 255, 255, 0.08);
      border-radius: 24px;
      padding: 32px;
      display: grid;
      grid-template-columns: 1.2fr 1fr;
      gap: 40px;
      align-items: center;
    }
    
    .ai-card-large-content h3 {
      font-size: clamp(20px, 3vw, 24px);
      font-weight: 800;
      color: #fff;
      margin-bottom: 14px;
    }
    
    .ai-card-large-content p {
      font-size: 14.5px;
      line-height: 1.6;
      color: var(--text-subtle, #9ca3af);
      margin: 0 0 24px;
    }
    
    .ai-check-list {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      flex-direction: column;
      gap: 12px;
    }
    
    .ai-check-item {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 14.5px;
      font-weight: 600;
      color: #fff;
    }
    
    .ai-check-icon {
      color: #10b981; /* Emerald green checkmark */
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .ai-card-large-image {
      position: relative;
      border-radius: 16px;
      overflow: hidden;
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .ai-card-large-image img {
      width: 100%;
      height: auto;
      display: block;
    }
    
    .ai-image-badge {
      position: absolute;
      bottom: 16px;
      left: 16px;
      background: rgba(15, 23, 42, 0.85);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.15);
      padding: 6px 14px;
      border-radius: 30px;
      font-size: 11px;
      font-weight: 700;
      color: #fff;
      letter-spacing: 0.5px;
    }
    
    /* Responsive */
    @media (max-width: 991px) {
      .ai-grid-top {
        grid-template-columns: 1fr;
        gap: 16px;
      }
      .ai-card-large {
        grid-template-columns: 1fr;
        gap: 30px;
        padding: 24px;
      }
    }
  </style>
  
  <div class="ai-section-header">
    <h2>How Our AI Tutor Matching System Works</h2>
    <p>We avoid random listings. Our engine processes structured compatibility parameters to recommend only the top 2–3 precise fits.</p>
  </div>
  
  <!-- Top Row Grid -->
  <div class="ai-grid-top">
    <!-- Card 1 -->
    <div class="ai-card-small">
      <div class="ai-card-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l-.019.007a1 1 0 0 0-.528.816v8.354a1 1 0 0 0 .528.816l6 2.5.019.007a.5.5 0 0 0 .372 0l6-2.5.019-.007a1 1 0 0 0 .528-.816V4.323a1 1 0 0 0-.528-.816l-6-2.5zM8 4.07 13.06 6.18 8 8.29 2.94 6.18 8 4.07zM2 7.64v4.44a.5.5 0 0 0 .264.44l5.236 2.18v-4.88L2 7.64zm12 0v4.44a.5.5 0 0 1-.264.44l-5.236 2.18v-4.88L14 7.64z"/>
        </svg>
      </div>
      <h3>Subject Expertise &amp; Experience</h3>
      <p>Our AI matches subject relevance, teaching experience, tutoring clarity, feedback signals, and student outcome patterns.</p>
    </div>

    <!-- Card 2 -->
    <div class="ai-card-small">
      <div class="ai-card-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
          <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM11 9.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM11 12.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM8 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM8 9.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM8 12.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM5 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM5 9.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zM5 12.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
        </svg>
      </div>
      <h3>Availability &amp; Location</h3>
      <p>We align your preferred schedule time slots, verify physical location feasibility for home tutoring, and test online readiness.</p>
    </div>

    <!-- Card 3 -->
    <div class="ai-card-small">
      <div class="ai-card-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
          <path d="M5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.24 62.24 0 0 1 5.072.56zm3.857 11.758a.5.5 0 0 0 .708-.708L5.707 7.682a.5.5 0 0 0-.708 0l-1.39 1.39a.5.5 0 1 0 .708.708l1.036-1.036 3.576 3.574z"/>
        </svg>
      </div>
      <h3>Verification &amp; Budget</h3>
      <p>Every match goes through verification to ensure profile reliability, budget alignment, and communication quality.</p>
    </div>
  </div>

  <!-- Large Card Below -->
  <div class="ai-card-large">
    <div class="ai-card-large-content">
      <h3>2–3 Best Matches, Guaranteed</h3>
      <p>Our system helps parents avoid confusion and saves time by delivering 2–3 precise tutor recommendations with high match confidence. You can book a demo to confirm the fit before continuing.</p>
      <div class="ai-check-list">
        <div class="ai-check-item">
          <span class="ai-check-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
          </span>
          <span>Board alignment (CBSE, ICSE, IB, ISC, IGCSE)</span>
        </div>
        <div class="ai-check-item">
          <span class="ai-check-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
          </span>
          <span>Class &amp; exam specialization (JEE, NEET)</span>
        </div>
      </div>
    </div>
    
    <div class="ai-card-large-image">
      <img src="{{ asset('frount/assets') }}/images/aa1.png" alt="AI tutor matching compatibility system" loading="lazy" decoding="async" />
      <div class="ai-image-badge">2–3 Best Matches · Demo First · Verified</div>
    </div>
  </div>
</section>
 <section class="section">
  <div class="section-head section-head--row">
    <div>
      <h2 class="section-title">What parents say</h2>
      <p class="section-subtitle">Real reviews from local parents — quick highlights.</p>
    </div>
    <a href="javascript:void(0)" class="btn btn-ghost btn-small">All reviews</a>
  </div>

  <div class="review-slider">
    <style>
      .review-slider {
        position: relative;
        display: flex;
        align-items: center;
        width: 100%;
      }
      
      .review-track {
        display: flex;
        gap: 20px;
        overflow-x: auto;
        scroll-behavior: smooth;
        scroll-snap-type: x mandatory;   /* swipe settles on a whole card */
        -webkit-overflow-scrolling: touch;
        width: 100%;
        padding: 16px 8px;
        margin: -16px -8px;
        scrollbar-width: none; /* Hide scrollbar for Firefox */
      }
      .review-track > * {
        scroll-snap-align: start;
      }
      
      .review-track::-webkit-scrollbar {
        display: none; /* Hide scrollbar for Chrome/Safari */
      }
      
      .review-slide {
        flex: 0 0 340px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 20px;
        padding: 20px;
        transition: background-color 0.2s, border-color 0.2s, transform 0.2s, box-shadow 0.2s;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      }
      
      .review-slide:hover {
        background: rgba(255, 255, 255, 0.06);
        border-color: rgba(255, 255, 255, 0.16);
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
      }
      
      .card-header--review {
        display: flex;
        gap: 16px;
        align-items: flex-start;
      }
      
      .avatar {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid rgba(255, 255, 255, 0.12);
        flex-shrink: 0;
      }
      
      .card-title {
        font-size: 14.5px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 4px;
      }
      
      .card-text {
        font-size: 13.5px;
        line-height: 1.55;
        color: var(--text-subtle, #9ca3af);
        font-style: italic;
      }
      
      .tutor-meta {
        margin-top: 10px;
        font-size: 12px;
        color: var(--accent, #fbbf24);
        opacity: 0.85;
        font-weight: 500;
      }
      
      .rating--big {
        margin-top: 16px;
        font-size: 13.5px;
        font-weight: 700;
        color: var(--accent, #fbbf24);
        display: flex;
        align-items: center;
        gap: 4px;
      }
      
      /* Navigation Arrows */
      .rnav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #fff !important;
        border: 1px solid rgba(0, 0, 0, 0.05) !important;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important;
        color: #0f172a !important;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 10;
        transition: transform 0.2s, background-color 0.2s, opacity 0.2s;
        opacity: 0.9;
        font-size: 18px !important;
        line-height: 1 !important;
      }
      
      .rnav:hover {
        opacity: 1;
        background: #f8fafc !important;
        transform: translateY(-50%) scale(1.05);
      }
      
      .rnav--left {
        left: -20px;
      }
      
      .rnav--right {
        right: -20px;
      }
      
      @media (max-width: 1024px) {
        .rnav--left { left: -10px; }
        .rnav--right { right: -10px; }
      }
      
      @media (max-width: 640px) {
        .review-slide {
          flex: 0 0 290px;
          padding: 16px;
        }
        .rnav {
          display: none;
        }
      }
    </style>

    {{-- Swipe/drag to browse — the strip snaps per card; no arrow chrome. --}}
    <div class="review-track" id="reviewTrack">
      @include('home.partials.review-slider-cards', ['reviews' => $reviews ?? collect()])
    </div>
  </div>
</section>
      <!-- FAQ -->
      <section class="section">
        <style>
          .faq-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 15px;
          }
          
          @media (max-width: 768px) {
            .faq-grid {
              grid-template-columns: 1fr;
              gap: 12px;
            }
          }
          
          .faq-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
          }
          
          .faq-item {
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
            padding: 0;
            overflow: hidden;
            transition: background-color 0.2s, border-color 0.2s;
          }
          
          .faq-item:hover {
            background: rgba(255, 255, 255, 0.07);
            border-color: rgba(255, 255, 255, 0.16);
          }
          
          .faq-item[open] {
            background: rgba(255, 255, 255, 0.06);
            border-color: rgba(255, 255, 255, 0.16);
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
          }
          
          .faq-item summary {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 20px;
            font-size: 14px;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
            user-select: none;
            outline: none;
            list-style: none; /* Hide default arrow on Firefox/others */
            transition: color 0.2s;
          }
          
          /* Hide webkit default arrow */
          .faq-item summary::-webkit-details-marker {
            display: none;
          }
          
          /* Custom Chevron indicator */
          .faq-item summary::after {
            content: '';
            display: inline-block;
            width: 14px;
            height: 14px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' stroke='white' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' viewBox='0 0 24 24'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            opacity: 0.7;
            transition: transform 0.25s ease, opacity 0.2s;
            flex-shrink: 0;
            margin-left: 15px;
          }
          
          .faq-item[open] summary::after {
            transform: rotate(180deg);
            opacity: 1;
          }
          
          .faq-item p {
            margin: 0;
            padding: 0 20px 20px;
            font-size: 13.5px;
            line-height: 1.6;
            color: var(--text-subtle, #9ca3af);
            border-top: 1px solid rgba(255, 255, 255, 0.04);
            animation: slideDown 0.25s ease-out;
          }
          
          @keyframes slideDown {
            from {
              opacity: 0;
              transform: translateY(-8px);
            }
            to {
              opacity: 1;
              transform: translateY(0);
            }
          }
        </style>
        
        <div class="section-head section-head--row">
          <h2 class="section-title">Frequently asked questions</h2>
          <a href="{{ route('faqs.index') }}" class="btn btn-ghost btn-small">More FAQs</a>
        </div>
      
        <div class="faq-grid">


    <!-- LEFT COLUMN (6) -->
    <div class="faq-list">
      <details class="faq-item">
        <summary>How does Nxtutors AI tutor matching work?</summary>
        <p>
          Our AI evaluates subject expertise, board alignment, class/exam needs, location feasibility,
          availability overlap, budget and reliability signals to recommend 2–3 high-fit tutors instead
          of long random lists.
        </p>
      </details>

      <details class="faq-item">
        <summary>Do you provide home tutors and online tutors across India?</summary>
        <p>
          Yes. Nxtutors supports home tutoring, online tutoring, institute mentoring and hybrid learning
          across India based on tutor availability and feasibility.
        </p>
      </details>

      <details class="faq-item">
        <summary>Which classes and boards are supported?</summary>
        <p>
          We support Classes 6–12 across CBSE, ICSE, IB, ISC and IGCSE boards, including foundation
          support and board exam preparation.
        </p>
      </details>

      <details class="faq-item">
        <summary>Do you support JEE and NEET preparation?</summary>
        <p>
          Yes. We match students with specialised JEE/NEET mentors for Physics, Chemistry, Maths and Biology
          based on goals, level and schedule.
        </p>
      </details>

      <details class="faq-item">
        <summary>Are tutors verified on Nxtutors?</summary>
        <p>
          Every educator undergoes structured verification and profile validation. We also track feedback and
          reliability signals to maintain quality and accountability.
        </p>
      </details>

      <details class="faq-item">
        <summary>How does the trial/demo class work?</summary>
        <p>
          A demo is a normal session to evaluate teaching style and student comfort. After the demo, you can
          continue with the same tutor or request a different match.
        </p>
      </details>
    </div>

    <!-- RIGHT COLUMN (6) -->
    <div class="faq-list">
      <details class="faq-item">
        <summary>What are the typical fees for tutors?</summary>
        <p>
          Fees depend on class, subject and experience. In most cases, tutoring ranges from ₹800 to ₹2500/hour.
          We shortlist tutors aligned to your budget range.
        </p>
      </details>

      <details class="faq-item">
        <summary>Can I change the tutor after hiring?</summary>
        <p>
          Yes. If the match isn’t working, we help you switch quickly by recommending alternate verified tutors
          with better fit.
        </p>
      </details>

      <details class="faq-item">
        <summary>How quickly can I get matched with a tutor?</summary>
        <p>
          Typically, you receive 2–3 recommendations within a short time after sharing your requirement (class,
          subjects, board, location, schedule and budget).
        </p>
      </details>

      <details class="faq-item">
        <summary>What details should I share to get the best match?</summary>
        <p>
          Share class/grade, board, subjects, location (city/pincode), preferred days &amp; time slots, mode
          (home/online) and budget. The more precise the input, the better the match.
        </p>
      </details>

      <details class="faq-item">
        <summary>Do tutors give homework, tests and progress updates?</summary>
        <p>
          Many tutors follow structured plans with homework, periodic tests and feedback. You can also request
          weekly progress updates while finalising the tutor.
        </p>
      </details>

      <details class="faq-item">
        <summary>Which cities do you currently support?</summary>
        <p>
          Nxtutors supports tutor matching across India. Availability depends on tutor network in each area, and
          online tutoring is available nationwide.
        </p>
      </details>
    </div>
  </div>
</section>

 
      <section class="section">
        <style>
          .cta-card-new {
            background: linear-gradient(135deg, rgba(255,255,255,0.06) 0%, rgba(255,255,255,0.02) 100%);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 24px;
            padding: 56px 24px;
            text-align: center;
            max-width: 1000px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
          }
          
          .cta-card-new h3 {
            color: #fff;
            font-size: clamp(24px, 4vw, 36px);
            font-weight: 800;
            margin: 0 0 16px;
            line-height: 1.25;
          }
          
          .cta-card-new p {
            color: var(--text-subtle, #9ca3af);
            font-size: 15px;
            line-height: 1.6;
            max-width: 640px;
            margin: 0 auto 32px;
          }
          
          .cta-card-buttons {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
            flex-wrap: wrap;
          }
          
          .cta-btn-primary {
            background: #fff;
            color: #020617 !important;
            border: 1px solid transparent;
            padding: 12px 32px;
            border-radius: 50px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.2s, transform 0.15s;
          }
          .cta-btn-primary:hover {
            background: #f1f5f9;
            transform: translateY(-1px);
          }
          
          .cta-btn-outline {
            background: transparent;
            color: #fff !important;
            border: 1px solid rgba(255, 255, 255, 0.25);
            padding: 12px 32px;
            border-radius: 50px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: background-color 0.2s, border-color 0.2s, transform 0.15s;
          }
          .cta-btn-outline:hover {
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(255, 255, 255, 0.45);
            transform: translateY(-1px);
          }
        </style>

        <div class="cta-card-new">
          <h3>Book a demo class — limited slots today</h3>
          <p>Get a free 30-minute demo with a top local tutor. Slots fill fast due to academic demand.</p>
          <div class="cta-card-buttons">
            <a href="#" class="cta-btn-primary" data-modal-target="demoModal">Book Free Demo</a>
            <a href="tel:+917836034313" class="cta-btn-outline">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="vertical-align: middle;">
                <path d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
              </svg>
              <span>Call Us Now</span>
            </a>
          </div>
        </div>
      </section>

      {{-- The sliding strip of every subject we tutor, last thing before the footer. --}}
      @include('home.partials.course-marquee')

    </main>

  @include('include.footer')
 
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
// Shared, XSS-safe chat bubble builder used by every Ask-AI handler.
window.nxgAppendMsg = function(container, text, type){
  if(!container) return;
  const isAi = type === "ai";
  const time = new Date().toLocaleTimeString([], { hour: "2-digit", minute: "2-digit" });
  const wrap = document.createElement("div");
  wrap.className = "nxg-msg " + type;

  const av = document.createElement("span");
  av.className = "nxg-av";
  av.textContent = isAi ? "🤖" : "🧑";

  const name = document.createElement("span");
  name.className = "nxg-name";
  name.textContent = isAi ? "NXT AI" : "You";

  if(isAi){
    const head = document.createElement("div");
    head.className = "nxg-head";
    const ts = document.createElement("span");
    ts.className = "nxg-time";
    ts.textContent = time;
    head.appendChild(av);
    head.appendChild(name);
    head.appendChild(ts);

    const body = document.createElement("div");
    body.className = "nxg-text";
    body.textContent = text;

    const react = document.createElement("div");
    react.className = "nxg-react";
    react.innerHTML = '<button type="button" aria-label="Helpful">👍</button><button type="button" aria-label="Not helpful">👎</button>';

    wrap.appendChild(head);
    wrap.appendChild(body);
    wrap.appendChild(react);
  } else {
    const bubble = document.createElement("div");
    bubble.className = "nxg-bubble";
    const body = document.createElement("span");
    body.className = "nxg-text";
    body.textContent = text;
    const ts = document.createElement("span");
    ts.className = "nxg-time";
    ts.textContent = time + " ✓";
    bubble.appendChild(body);
    bubble.appendChild(ts);

    wrap.appendChild(av);
    wrap.appendChild(name);
    wrap.appendChild(bubble);
  }

  container.appendChild(wrap);
  container.scrollTop = container.scrollHeight;
};

// Thumbs up/down toggle (one delegated listener for all AI messages).
document.addEventListener("click", function(e){
  const btn = e.target.closest(".nxg-react button");
  if(!btn) return;
  const group = btn.parentNode;
  group.querySelectorAll("button").forEach(b => { if(b !== btn) b.classList.remove("is-on"); });
  btn.classList.toggle("is-on");
});

document.addEventListener("DOMContentLoaded", function(){

  const input = document.getElementById("nxAskAiInput");
  const send = document.getElementById("nxAskAiSend");
  const chatBox = document.getElementById("nxAskAiThread");

  if(!input || !send || !chatBox) return;

  function getReply(q){
    q = q.toLowerCase();

    if(q.includes("fees") || q.includes("price")){
      return "Fees depend on class and subject. Usually ₹800–₹2500.";
    }

    if(q.includes("demo")){
      return "Yes 👍 Demo class available before finalizing tutor.";
    }

    if(q.includes("best")){
      return "Best tutor depends on subject fit, experience and timing.";
    }

    if(q.includes("timing") || q.includes("evening")){
      return "Tutors are matched based on your preferred timing.";
    }

    if(q.includes("online")){
      return "Both online and home tutors are available.";
    }

    return "I can help you choose best tutor. Ask about fees, demo or subject.";
  }

  function addMsg(text, type){
    window.nxgAppendMsg(chatBox, text, type);
  }

  function sendMsg(){
    const val = input.value.trim();
    if(!val) return;

    addMsg(val, "user");
    input.value = "";

    setTimeout(()=>{
      addMsg(getReply(val), "ai");
    }, 400);
  }

  send.addEventListener("click", sendMsg);

  input.addEventListener("keypress", function(e){
    if(e.key === "Enter"){
      e.preventDefault();
      sendMsg();
    }
  });

});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  (function () {
    const KEY = "nx_compare_tutors";

    const grid = document.getElementById("compareGrid");
    const title = document.getElementById("compareTitle");
    const hint = document.getElementById("compareHint");
    const compareSection = document.getElementById("compareSection");
    const compareLoadingWrap = document.getElementById("compareLoadingWrap");
    const compareResultsMount = document.getElementById("compareResultsMount");
    const loadingTextEl = document.getElementById("nxCompareLoadingText");
    const progressBarEl = document.getElementById("nxCompareProgressBar");
    const progressTextEl = document.getElementById("nxCompareProgressText");

    if (!grid) return;

    const defaultUrl = grid.dataset.defaultUrl || "";
    const aiUrlBase = grid.dataset.aiUrl || "";

    let compareProgressTimer = null;
    let compareResizeObserver = null;

    function wait(ms) {
      return new Promise(resolve => setTimeout(resolve, ms));
    }

    function loadSelected() {
      try {
        const parsed = JSON.parse(localStorage.getItem(KEY) || "[]");
        return Array.isArray(parsed) ? parsed : [];
      } catch (e) {
        return [];
      }
    }

    function saveSelected(list) {
      localStorage.setItem(KEY, JSON.stringify(Array.isArray(list) ? list : []));
    }

    function removeById(list, id) {
      return list.filter(x => String(x.id).trim() !== String(id).trim());
    }

    function esc(str) {
      return String(str ?? "")
        .replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#039;");
    }

    function getMatchLabel(score) {
      if (score >= 90) return "Excellent Match";
      if (score >= 80) return "Strong Match";
      if (score >= 70) return "Good Match";
      if (score >= 60) return "Worth Demo";
      return "Needs Validation";
    }

    function normalizeTutor(t) {
      const rawScore = parseInt(t.score, 10) || 0;
      const displayScore = rawScore < 70 ? Math.min(100, rawScore + 12) : rawScore;
      const b = t.breakdown || {};

      return {
        ...t,
        _displayScore: displayScore,
        _subject: Math.max(0, Math.min(100, parseInt(b["Subject Fit"] ?? b["Subject"] ?? 82, 10) || 82)),
        _experience: Math.max(0, Math.min(100, parseInt(b["Experience"] ?? 78, 10) || 78)),
        _reviews: Math.max(0, Math.min(100, parseInt(b["Reviews"] ?? b["Rating"] ?? 80, 10) || 80)),
        _location: Math.max(0, Math.min(100, parseInt(b["Location"] ?? 74, 10) || 74)),
        _budget: Math.max(0, Math.min(100, parseInt(b["Budget"] ?? 72, 10) || 72)),
        _availability: Math.max(0, Math.min(100, parseInt(b["Availability"] ?? 76, 10) || 76))
      };
    }

    function getChatReply(q, winner, tutors) {
      const text = (q || "").toLowerCase();
      const second = tutors[1] || null;

      if (text.includes("budget")) {
        if (second && second._budget > winner._budget) {
          return `${second.name} looks slightly safer on budget, but ${winner.name} remains the stronger overall choice because of better combined fit across subject, experience and availability.`;
        }
        return `${winner.name} is still ahead overall. Budget fit is acceptable, but the final decision should still be validated through a demo class.`;
      }

      if (text.includes("science")) {
        return `${winner.name} is the current overall leader, but for a Science-first decision you should compare subject fit and teaching clarity in the demo. Subject-specific comfort can change the final ranking.`;
      }

      if (text.includes("math")) {
        return `${winner.name} is currently strongest for Maths-led requirements because the overall fit, subject compatibility and consistency indicators are higher.`;
      }

      if (text.includes("timing") || text.includes("evening") || text.includes("availability")) {
        return `${winner.name} appears stronger for schedule matching. If timing flexibility matters more than total score, the second option can remain a practical backup.`;
      }

      if (text.includes("fees") || text.includes("price")) {
        return `${winner.name} stays ahead on overall value. If pure price is your first filter, compare budget fit with demo outcome before finalising.`;
      }

      if (text.includes("why")) {
        return `${winner.name} ranks first because the combined score across subject fit, experience, reviews and availability is stronger than the rest. Use a demo to validate teaching style before booking long-term sessions.`;
      }

      return `${winner.name} is still the best overall choice based on current AI comparison. You can ask about budget, timing, subject fit, board fit or demo suitability for a sharper recommendation.`;
    }

    function startFakeCompareProgress() {
      if (!progressBarEl || !progressTextEl || !loadingTextEl) return;

      let progress = 0;

      const steps = [
        { at: 8, title: "Reading tutor profiles...", text: "Analyzing selected tutor profiles and base information" },
        { at: 18, title: "Checking subject fit...", text: "Comparing class, board and subject compatibility" },
        { at: 32, title: "Analyzing experience...", text: "Reviewing relevant teaching experience and expertise" },
        { at: 48, title: "Checking reviews and trust signals...", text: "Evaluating parent feedback, reliability and score patterns" },
        { at: 64, title: "Matching budget and location...", text: "Comparing budget fit, travel convenience and locality match" },
        { at: 80, title: "Checking availability...", text: "Finding the best overlap for preferred timing and session flow" },
        { at: 92, title: "Generating AI recommendation...", text: "Preparing the final tutor ranking and recommendation summary" }
      ];

      progressBarEl.style.width = "0%";
      progressTextEl.textContent = "Preparing comparison...";
      loadingTextEl.textContent = "Checking subject fit, experience, rating, location, budget and availability";

      if (compareProgressTimer) clearInterval(compareProgressTimer);

      compareProgressTimer = setInterval(() => {
        progress += Math.random() * 3.2;
        if (progress > 95) progress = 95;

        progressBarEl.style.width = progress.toFixed(0) + "%";

        let currentTitle = "NXTutors AI is comparing tutors...";
        let currentText = "Preparing comparison...";

        steps.forEach(step => {
          if (progress >= step.at) {
            currentTitle = step.title;
            currentText = step.text;
          }
        });

        loadingTextEl.textContent = currentTitle;
        progressTextEl.textContent = currentText;
      }, 900);
    }

    function stopFakeCompareProgress(success = true) {
      if (compareProgressTimer) {
        clearInterval(compareProgressTimer);
        compareProgressTimer = null;
      }

      if (progressBarEl) progressBarEl.style.width = success ? "100%" : "0%";
      if (progressTextEl) progressTextEl.textContent = success ? "Comparison ready" : "Comparison failed";
    }

    function renderAiLoading() {
      if (compareLoadingWrap) compareLoadingWrap.style.display = "block";
      if (compareResultsMount) compareResultsMount.innerHTML = "";
      startFakeCompareProgress();

      if (compareSection) {
        compareSection.scrollIntoView({ behavior: "smooth", block: "start" });
      }
    }

    async function loadDefaults() {
      const pin = localStorage.getItem("nx_pin") || "";
      const city = localStorage.getItem("nx_city") || "";

      if (compareLoadingWrap) compareLoadingWrap.style.display = "none";
      if (compareResultsMount) compareResultsMount.innerHTML = "";

      if (!defaultUrl) {
        grid.innerHTML = `<div style="padding:12px;color:#94a3b8;">Default compare URL missing.</div>`;
        return;
      }

      try {
        const qs = new URLSearchParams({ pincode: pin, city: city });
        const res = await fetch(defaultUrl + "?" + qs.toString(), {
          headers: { "X-Requested-With": "XMLHttpRequest" }
        });

        const html = await res.text();
        grid.innerHTML = html;

        if (title) title.textContent = "Compare tutors (suggested near you)";
        if (hint) hint.textContent = "Tip: Click Compare on any tutor card to add here.";

        updateCompareButtons();
      } catch (e) {
        grid.innerHTML = `<div style="padding:12px;color:#dc2626;">Unable to load suggested tutors.</div>`;
      }
    }

    function buildGlassCompareUI(tutors, selectedList, recommendationReason = "") {
      if (!tutors || !tutors.length) return "";

      const winner = tutors[0];
      const top3 = tutors.slice(0, 3);
      const rankedTutors = tutors;
      const second = tutors[1] || null;
      const third = tutors[2] || null;

      const winnerMeta =
        selectedList.find(x => String(x.id) === String(winner._compareId || winner.id)) || {};

      function avatarLetter(name) {
        return (name || "T").trim().charAt(0).toUpperCase();
      }
 

      function scoreLine(label, value, cls = "blue") {
        const safe = Math.max(0, Math.min(100, parseInt(value, 10) || 0));
        return `
          <div class="nxg-score-row">
            <div class="nxg-score-meta">
              <span>${esc(label)}</span>
              <b>${safe}</b>
            </div>
            <div class="nxg-line ${cls}">
              <i style="width:${safe}%"></i>
            </div>
          </div>
        `;
      }

      const leftCards = rankedTutors.map((t, idx) => `
        <div class="nxg-mini-card">
          <div class="nxg-mini-head">
            <div class="nxg-avatar ${colorClass(idx)}">${avatarLetter(t.name)}</div>
            <div>
              <strong>${esc(t.name)}</strong>
              <span>${esc(getMatchLabel(t._displayScore))}</span>
            </div>
          </div>

          <div class="nxg-mini-score-row">
            <div class="nxg-mini-score">${esc(t._displayScore)}/100</div>
            <button type="button" class="nxg-remove-btn js-compare-remove" data-id="${esc(t._compareId || t.id)}">Remove</button>
          </div>

          <div class="nxg-mini-bar ${colorClass(idx)}">
            <i style="width:${t._displayScore}%"></i>
          </div>
        </div>
      `).join("");

      const compareHead = top3.map((t, idx) => `
        <div class="nxg-tutor-chip">
          <div class="nxg-avatar ${colorClass(idx)}">${avatarLetter(t.name)}</div>
          <div>
            <strong>${esc(t.name)}</strong>
            <span>${esc(getMatchLabel(t._displayScore))}</span>
          </div>
          <small>${esc(t._displayScore)}</small>
        </div>
      `).join("");

      const metrics = [
        { key: "_subject", label: "Subject fit" },
        { key: "_experience", label: "Experience" },
        { key: "_reviews", label: "Reviews" },
        { key: "_budget", label: "Budget fit" },
        { key: "_availability", label: "Availability" }
      ];

      const compareRows = metrics.map(metric => `
        <div class="nxg-compare-row">
          <div class="nxg-metric">${esc(metric.label)}</div>
          ${top3.map((t, idx) => `
            <div class="nxg-metric-box">
              <b>${esc(t[metric.key])}</b>
              <div class="nxg-line ${colorClass(idx)}">
                <i style="width:${t[metric.key]}%"></i>
              </div>
            </div>
          `).join("")}
        </div>
      `).join("");

      const selectedMobile = top3.map((t, idx) => {
        const meta =
          selectedList.find(x => String(x.id) === String(t._compareId || t.id)) || {};

        return `
          <div class="nxg-mobile-chip">
            <div class="nxg-mobile-chip__top">
              <div class="nxg-avatar ${colorClass(idx)}">${avatarLetter(t.name)}</div>
              <div>
                <strong>${esc(t.name)}</strong>
                <span>${esc(getMatchLabel(t._displayScore))}</span>
              </div>
            </div>

            <div class="nxg-mobile-chip__bottom">
              <small>${esc(t._displayScore)}/100</small>
              <div class="nxg-mobile-chip__actions">
                <a href="${esc(t._wa || meta.wa || '#')}" target="_blank" rel="nofollow noopener">Demo</a>
                <button type="button" class="nxg-remove-btn js-compare-remove" data-id="${esc(t._compareId || t.id)}">Remove</button>
              </div>
            </div>
          </div>
        `;
      }).join("");

      const aiFirstQuestion = `Who is best for my child among ${top3.map(t => t.name).join(", ")}?`;
      const aiReply = `${winner.name} ranks first overall because subject fit, experience and availability are strongest. ${second ? `${second.name} is a good backup option` : ""}${winner._budget < 75 ? ", especially if budget is flexible." : "."}`;

      return `
        <div class="nxg-wrap" id="nxgCompareWrap">
          <div class="nxg-orb nxg-orb--1"></div>
          <div class="nxg-orb nxg-orb--2"></div>
          <div class="nxg-orb nxg-orb--3"></div>

          <div class="nxg-topbar">
            <div>
              <h2>NXTutors — Compare + Ask AI</h2>
              <p>Smart tutor comparison powered by subject fit, teaching strength, budget comfort and schedule alignment.</p>
            </div>
          </div>

          <div class="nxg-shell">
            <div class="nxg-main">
              <div class="nxg-hero nxg-glass">
                <div class="nxg-hero__content">
                  <span class="nxg-pill">AI Comparison</span>
                  <h3>${esc(winner.name)} is the best overall choice</h3>
                  <p>${esc(recommendationReason || "Best balance of subject fit, experience, reviews, budget and availability.")}</p>

                  <div class="nxg-tags">
                    <span>2–3 tutors only</span>
                    <span>No clipped columns</span>
                    <span>Demo-first decision</span>
                  </div>
                </div>

                <div class="nxg-scorecard">
                  <label>Best overall</label>
                  <div class="nxg-scorecard__value">${esc(winner._displayScore)} <small>/100</small></div>
                  <span class="nxg-scorecard__pill">AI Top Pick</span>
                </div>
              </div>

              <div class="nxg-grid">
                <div class="nxg-panel nxg-glass nxg-selected-panel">
                <div class="nxg-selected-top">
                  <div class="nxg-selected-chart">
                    <h4>Score distribution</h4>
                    <p>Visual comparison of shortlisted tutors by AI match score.</p>

                    <div class="nxg-pie-wrap">
                      <canvas id="nxComparePieChart"></canvas>
                    </div>
                  </div>

    <div class="nxg-selected-list-wrap">
      <h4>Shortlisted tutors</h4>
<p>AI-ranked tutor list based on overall fit, teaching relevance and session readiness.</p>

      <div class="nxg-mini-list nxg-mini-list-scroll ${rankedTutors.length > 3 ? 'has-scroll' : ''}">
        ${leftCards}
      </div>
    </div>
  </div>
</div>

                <div class="nxg-panel nxg-glass">
                  <h4>Why ${esc(winner.name)} ranks first</h4>
                  <p>Compare key tutor signals clearly without overflow or clutter.</p>

                  <div class="nxg-head-row">
                    <div class="nxg-head-row__title">Signals</div>
                    ${compareHead}
                  </div>

                  <div class="nxg-rows">
                    ${compareRows}
                  </div>

                  <div class="nxg-footer-tags">
                    <span class="green">Strong fit</span>
                    <span>Subject + experience lead</span>
                    <span class="gold">Watch-out</span>
                    <span>Use demo class as final tie-breaker</span>
                  </div>
                </div>

                 
              </div>
            </div>

            <div class="nxg-mobile nxg-mobile-preview">
              <div class="nxg-mobile-frame">
                <div class="nxg-mobile-inner">
                  <h3>Compare tutors</h3>
                  <p>Sticky mobile comparison preview</p>

                  <div class="nxg-mobile-top nxg-glass">
                    <span class="nxg-pill green">AI Top Pick</span>
                    <h4>${esc(winner.name)} leads the shortlist</h4>
                    <p>${esc(recommendationReason || "Best overall fit for experience, reviews and schedule match.")}</p>

                    <div class="nxg-mobile-top__meta">
                      <small>${esc(winner._displayScore)}/100</small>
                      <span>Good Match</span>
                      <a href="${esc(winnerMeta.wa || '#')}" target="_blank" rel="nofollow noopener">Demo</a>
                    </div>
                  </div>

                  <h5>Selected tutors</h5>
                  <div class="nxg-mobile-list">
                    ${selectedMobile}
                  </div>

                  <div class="nxg-mobile-win nxg-glass">
                    <h5>Why ${esc(winner.name)} wins</h5>

                    <div class="nxg-rings nxg-rings--sm">
                      <div class="nxg-ring gold sm" style="--val:${winner._displayScore}">
                        <div class="nxg-ring blue sm2" style="--val:${second ? second._displayScore : 0}">
                          <div class="nxg-ring pink sm3" style="--val:${third ? third._displayScore : 0}">
                            <div class="nxg-ring-center">
                              <strong>${esc(winner._displayScore)}</strong>
                              <span>Top pick</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    ${scoreLine("Subject", winner._subject, "blue")}
                    ${scoreLine("Experience", winner._experience, "blue")}
                    ${scoreLine("Reviews", winner._reviews, "blue")}
                    ${scoreLine("Budget", winner._budget, "blue")}
                    ${scoreLine("Availability", winner._availability, "blue")}

                    <div class="nxg-mobile-note">Use demo clarity as final decision factor.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      `;
    }

    let nxComparePieChart = null;

function renderComparePieChart(tutors) {
  const canvas = document.getElementById("nxComparePieChart");
  if (!canvas || typeof Chart === "undefined") return;

  if (nxComparePieChart) {
    nxComparePieChart.destroy();
  }

  // Rank order, one accent: leader in the theme accent, the rest neutral.
  const accent = getComputedStyle(document.documentElement).getPropertyValue("--accent").trim() || "#F5A524";
  const colors = [accent, "rgba(255,255,255,.34)", "rgba(255,255,255,.22)", "rgba(255,255,255,.16)", "rgba(255,255,255,.12)"];

  nxComparePieChart = new Chart(canvas, {
    type: "doughnut",
    data: {
      labels: tutors.map(t => t.name),
      datasets: [{
        data: tutors.map(t => t._displayScore),
        backgroundColor: tutors.map((_, i) => colors[i % colors.length]),
        borderWidth: 0
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      cutout: "62%",
      plugins: {
        legend: {
          display: false
        },
        tooltip: {
          callbacks: {
            label: function(ctx) {
              return `${ctx.label}: ${ctx.raw}/100`;
            }
          }
        }
      }
    }
  });
}

    function colorClass(index){
  return ["gold", "blue", "pink", "blue", "gold"][index % 5] || "blue";
}

    function applyCompareLayoutMode() {
      const wrap = document.getElementById("nxgCompareWrap");
      if (!wrap) return;

      const width = wrap.clientWidth;

      wrap.classList.remove("nxg-mode-compact", "nxg-mode-single");

      if (width <= 900) {
        wrap.classList.add("nxg-mode-single");
      } else if (width <= 1250) {
        wrap.classList.add("nxg-mode-compact");
      }
    }

    function wireAskAI(tutors) {
      const input = document.getElementById("nxAskAiInput");
      const send = document.getElementById("nxAskAiSend");
      const chatBox = document.getElementById("nxAskAiThread");
      const promptBtns = document.querySelectorAll(".nx-ask-chip");
      const budgetBtn = document.querySelector(".nx-ask-budget");

      if (!input || !send || !chatBox || !tutors || !tutors.length) return;

      const winner = tutors[0];

      function addBubble(text, type) {
        window.nxgAppendMsg(chatBox, text, type);
      }

      function submitAsk(q) {
        const value = (q || input.value || "").trim();
        if (!value) return;

        addBubble(value, "user");
        input.value = "";

        setTimeout(() => {
          addBubble(getChatReply(value, winner, tutors), "ai");
        }, 500);
      }

      send.addEventListener("click", function () {
        submitAsk();
      });

      input.addEventListener("keydown", function (e) {
        if (e.key === "Enter") {
          e.preventDefault();
          submitAsk();
        }
      });

      promptBtns.forEach(btn => {
        btn.addEventListener("click", function () {
          const q = this.getAttribute("data-question") || "";
          input.value = q;
          submitAsk(q);
        });
      });

      if (budgetBtn) {
        budgetBtn.addEventListener("click", function () {
          submitAsk("Compare only budget between selected tutors");
        });
      }
    }

    async function renderAiCompare(list) {
      const ids = list.map(x => x.id).join(",");
      if (!ids || !aiUrlBase) return;

      renderAiLoading();

      const city = localStorage.getItem("nx_city") || "";
      const pincode = localStorage.getItem("nx_pin") || "";

      const qs = new URLSearchParams({ ids, city, pincode });
      const url = aiUrlBase + "?" + qs.toString();

      const MIN_LOADER_TIME = 5000;
      const startTime = Date.now();

      let response, data;

      try {
        [response] = await Promise.all([
          fetch(url, {
            headers: { "X-Requested-With": "XMLHttpRequest" }
          }),
          wait(MIN_LOADER_TIME)
        ]);

        data = await response.json();
      } catch (e) {
        const elapsed = Date.now() - startTime;
        if (elapsed < MIN_LOADER_TIME) {
          await wait(MIN_LOADER_TIME - elapsed);
        }

        stopFakeCompareProgress(false);

        if (compareLoadingWrap) compareLoadingWrap.style.display = "none";
        if (grid) grid.style.display = "none"; 
        if (compareResultsMount) {
          compareResultsMount.innerHTML = `
            <div style="padding:16px;background:#fff;border:1px solid #fee2e2;color:#dc2626;border-radius:16px;">
              AI compare failed. Try again.
            </div>
          `;
        }
        return;
      }

      if (!data || !data.ok || !Array.isArray(data.tutors) || !data.tutors.length) {
        stopFakeCompareProgress(false);

        if (compareLoadingWrap) compareLoadingWrap.style.display = "none";
        if (compareResultsMount) {
          compareResultsMount.innerHTML = `
            <div style="padding:16px;background:#fff;border:1px solid #e5e7eb;color:#334155;border-radius:16px;">
              No tutors available for comparison.
            </div>
          `;
        }
        return;
      }

      stopFakeCompareProgress(true);
      await wait(500);

      const tutors = data.tutors
        .map(normalizeTutor)
        .map((t, index) => {
          const matched =
            list.find(x => String(x.id) === String(t.id)) ||
            list.find(x => (x.name || "").trim().toLowerCase() === (t.name || "").trim().toLowerCase()) ||
            list[index] ||
            {};

          return {
            ...t,
            _compareId: matched.id || t.id || "",
            _wa: matched.wa || "#",
            _profile: matched.profile || "#",
            img: matched.img || t.img || "",
            rating: matched.rating || t.rating || "0.0",
            reviews: matched.reviews || t.reviews || "0"
          };
        })
        .sort((a, b) => b._displayScore - a._displayScore);

      const winner = tutors[0];

      const uiHtml = buildGlassCompareUI(
        tutors,
        list,
        (data.recommendation && data.recommendation.reason) || "Best balance of subject fit, reviews, budget and location."
      );

      if (compareLoadingWrap) compareLoadingWrap.style.display = "none";
      if (compareResultsMount) {
        compareResultsMount.innerHTML = uiHtml;
      }

      applyCompareLayoutMode();
      wireAskAI(tutors);
      renderComparePieChart(tutors);

      const wrap = document.getElementById("nxgCompareWrap");
      if (compareResizeObserver) {
        compareResizeObserver.disconnect();
        compareResizeObserver = null;
      }

      if (wrap && typeof ResizeObserver !== "undefined") {
        compareResizeObserver = new ResizeObserver(() => applyCompareLayoutMode());
        compareResizeObserver.observe(wrap);
      }

      if (title) title.textContent = "AI Compare Results";
      if (hint) hint.textContent = `Top Recommendation: ${winner.name} (${winner._displayScore}/100)`;

      setTimeout(() => {
        if (compareResultsMount) {
          //compareResultsMount.scrollIntoView({ behavior: "smooth", block: "start" });
        }
      }, 120);
    }

    function updateCompareButtons() {
      document.querySelectorAll(".js-compare-toggle").forEach(btn => {
        const id = btn.dataset.id;
        const selected = loadSelected().some(x => String(x.id) === String(id));
        btn.classList.toggle("is-selected", selected);
        btn.textContent = selected ? "Compared ✓" : "Compare";
      });
    }

   
   async function refreshCompare() {
      let list = loadSelected();

      // >3 could only come from stale storage; clamp before anything reads it,
      // otherwise the tray never renders and every card click just alerts.
      if (list.length > 3) {
        list = list.slice(0, 3);
        saveSelected(list);
      }

      if (grid) grid.style.display = list.length ? "none" : "block";
      if (compareLoadingWrap) compareLoadingWrap.style.display = "none";

      if (!list.length && compareResultsMount) compareResultsMount.innerHTML = "";

      showCompareTray(list);
      updateCompareButtons();
    }

    // One dock for every state: stacked faces, the count, and the single action
    // that uses them. "×" empties the basket.
    //
    // It hangs off <body>, NOT off #compareResultsMount: that mount lives in
    // .nxg-compare-slot, which nxt-ds.css collapses to display:none while no
    // real comparison is showing — a tray rendered in there is invisible no
    // matter how it is positioned, so picks piled up unseen until the
    // "up to 3 tutors" alert was the only sign anything had been selected.
    function showCompareTray(list) {
      let dock = document.getElementById("cmpDock");

      if (!list.length) {
        if (dock) dock.remove();
        return;
      }

      if (!dock) {
        dock = document.createElement("div");
        dock.id = "cmpDock";
        dock.className = "cmp-dock";
        document.body.appendChild(dock);
      }

      const ready = list.length >= 2;

      dock.innerHTML = `
        <div class="cmp-dock-faces">
          ${list.map(t => `
            <img class="cmp-dock-face" src="${esc(t.img || "")}" alt="${esc(t.name || "")}"
              onerror="this.style.visibility='hidden'">
          `).join("")}
        </div>
        <div class="cmp-dock-text">
          <strong>${list.length} Tutor${list.length > 1 ? "s" : ""} Selected</strong>
          ${ready ? "" : `<span>Select 1 more to compare</span>`}
        </div>
        <button type="button" class="cmp-dock-go" ${ready ? "" : "disabled"}>Compare</button>
        <button type="button" class="cmp-dock-clear" aria-label="Clear selection">&times;</button>
      `;

      const goBtn = dock.querySelector(".cmp-dock-go");
      if (goBtn && ready) goBtn.addEventListener("click", () => renderAiCompare(list));

      dock.querySelector(".cmp-dock-clear").addEventListener("click", async () => {
        saveSelected([]);
        await refreshCompare();
      });
    }
    document.addEventListener("click", async (e) => {
      const btn = e.target.closest(".js-compare-toggle");
      if (btn) {
        const list = loadSelected();
        const id = btn.dataset.id;
        const already = list.some(x => String(x.id) === String(id));

        if (already) {
          saveSelected(removeById(list, id));
          await refreshCompare();
          return;
        }

        // if (list.length >= 3) {
        //   alert("You can compare up to 3 tutors at a time");
        //   return;
        // }
        if (list.length >= 3) {
          alert("You can compare up to 3 tutors at a time.");
          return;
        }

        list.push({
          id: btn.dataset.id || "",
          name: btn.dataset.name || "",
          img: btn.dataset.img || "",
          rating: btn.dataset.rating || "0.0",
          reviews: btn.dataset.reviews || "0",
          exp: btn.dataset.exp || "",
          edu: btn.dataset.edu || "",
          budget: btn.dataset.budget || "",
          chip: btn.dataset.chip || "",
          city: btn.dataset.city || "",
          pincode: btn.dataset.pincode || "",
          wa: btn.dataset.wa || "#",
          profile: btn.dataset.profile || "#"
        });

        saveSelected(list);
        await refreshCompare();
        return;
      }

      const rm = e.target.closest(".js-compare-remove");
      if (rm) {
        const id = rm.dataset.id;
        const list = loadSelected();
        saveSelected(removeById(list, id));
        await refreshCompare();
      }
    });

    refreshCompare();
  })();
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {


  window.nxTeacherState = {
  rotationTimer: null,
  rotationRunning: false,
  searchMode: false,
  teacherLoading: false,
  teacherOffset: 10,
  teacherLimit: 10,
  teacherMobileOffset: 0,
  teacherMobileLimit: 2,
  lastMobileMode: null
};

window.nxBlogState = {
  rotationTimer: null,
  loading: false,
  mobileOffset: 0,
  mobileLimit: 2,
  lastMobileMode: null
};

function isMobileView() {
  return window.innerWidth <= 768;
}
 
(function () {
  const bBtn = document.getElementById('homeLoadMoreBlogs');
  const bGrid = document.getElementById('homeBlogsGrid');
  if (!bGrid || !bBtn) return;

  const blogState = window.nxBlogState;
  const blogUrl = bBtn.dataset.url;
  let desktopLoading = false;
  let resizeTimer = null;

  async function fetchBlogs(offset = 0, limit = 6) {
    const qs = new URLSearchParams({
      offset: String(offset),
      limit: String(limit)
    });

    const res = await fetch(blogUrl + '?' + qs.toString(), {
      headers: { 'X-Requested-With': 'XMLHttpRequest' }
    });

    if (!res.ok) throw new Error('HTTP ' + res.status);
    return (await res.text()).trim();
  }

  async function renderMobileBlogs(offset = 0) {
    if (!isMobileView()) return;
    if (blogState.loading) return;

    blogState.loading = true;

    try {
      let html = await fetchBlogs(offset, blogState.mobileLimit);

      if (!html) {
        blogState.mobileOffset = 0;
        html = await fetchBlogs(0, blogState.mobileLimit);
      }

      if (!html) return;

      bGrid.style.opacity = '0.2';

      setTimeout(() => {
        if (isMobileView()) {
          bGrid.innerHTML = html;
          bGrid.style.opacity = '1';
        }
      }, 180);

      blogState.mobileOffset = offset + blogState.mobileLimit;
    } catch (e) {
      console.log('Mobile blog rotate failed:', e);
    } finally {
      blogState.loading = false;
    }
  }

  function startBlogRotation() {
    if (!isMobileView()) return;
    if (blogState.rotationTimer) return;

    blogState.rotationTimer = setInterval(() => {
      renderMobileBlogs(blogState.mobileOffset);
    }, 4500);
  }

  function stopBlogRotation() {
    if (blogState.rotationTimer) {
      clearInterval(blogState.rotationTimer);
      blogState.rotationTimer = null;
    }
  }

  async function setupBlogMode(force = false) {
    const mobile = isMobileView();

    if (!force && blogState.lastMobileMode === mobile) return;
    blogState.lastMobileMode = mobile;

    stopBlogRotation();

    if (mobile) {
      blogState.mobileOffset = 0;
      await renderMobileBlogs(0);
      startBlogRotation();
    } else {
      try {
        const html = await fetchBlogs(0, 10);
        if (html) {
          bGrid.innerHTML = html;
        }

        bBtn.dataset.offset = '6';
        bBtn.disabled = false;
        bBtn.textContent = 'Load More Blogs';
        bBtn.style.opacity = '1';
      } catch (e) {
        console.log('Desktop blog reset failed:', e);
      }
    }
  }

  bBtn.addEventListener('click', async () => {
    if (isMobileView()) return;
    if (desktopLoading) return;

    desktopLoading = true;

    const offset = parseInt(bBtn.dataset.offset || '0', 10);

    bBtn.disabled = true;
    bBtn.textContent = 'Loading...';

    try {
      const html = await fetchBlogs(offset, 6);

      if (!html) {
        bBtn.textContent = 'No more blogs';
        bBtn.style.opacity = '0.7';
        return;
      }

      bGrid.insertAdjacentHTML('beforeend', html);

      const nextOffset = offset + 6;
      bBtn.dataset.offset = String(nextOffset);
      bBtn.textContent = 'Load More Blogs';
      bBtn.disabled = false;
      bBtn.style.opacity = '1';

      const tmp = document.createElement('div');
      tmp.innerHTML = html;

      if (tmp.querySelectorAll('.blog-card').length < 6) {
        bBtn.textContent = 'No more blogs';
        bBtn.disabled = true;
        bBtn.style.opacity = '0.7';
      }
    } catch (e) {
      console.error(e);
      bBtn.textContent = 'Try again';
      bBtn.disabled = false;
    } finally {
      desktopLoading = false;
    }
  });

  setupBlogMode(true);

  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      setupBlogMode();
    }, 220);
  });

  document.addEventListener('visibilitychange', () => {
    if (document.hidden) {
      stopBlogRotation();
    } else if (isMobileView()) {
      startBlogRotation();
    }
  });
})();

 

(function () {
  const grid = document.getElementById('homeTeachersGrid');
  if (!grid) return;

  const url = grid.dataset.url;
  const state = window.nxTeacherState;
  let resizeTimer = null;

  async function fetchTeachers(offset = 0, limit = 6) {
    const qs = new URLSearchParams({
      offset: String(offset),
      limit: String(limit)
    });

    const res = await fetch(url + '?' + qs.toString(), {
      headers: { 'X-Requested-With': 'XMLHttpRequest' }
    });

    if (!res.ok) throw new Error('HTTP ' + res.status);
    return (await res.text()).trim();
  }

  async function rotateTeachers() {
    if (state.teacherLoading) return;
    if (state.searchMode) return;

    state.teacherLoading = true;

    try {
      const isMobile = isMobileView();
      const limit = isMobile ? state.teacherMobileLimit : state.teacherLimit;
      let offset = isMobile ? state.teacherMobileOffset : state.teacherOffset;

      let html = await fetchTeachers(offset, limit);

      if (!html) {
        offset = 0;
        html = await fetchTeachers(0, limit);
      }

      if (!html) {
        state.teacherLoading = false;
        return;
      }

      grid.style.opacity = '0.2';

      setTimeout(() => {
        if (!state.searchMode) {
          grid.innerHTML = html;
          grid.style.opacity = '1';
        }
      }, 180);

      if (isMobile) {
        state.teacherMobileOffset = offset + state.teacherMobileLimit;
      } else {
        state.teacherOffset = offset + state.teacherLimit;
      }
    } catch (e) {
      console.log('Teacher auto-rotate failed:', e);
    } finally {
      state.teacherLoading = false;
    }
  }

  async function setupTeacherMode(force = false) {
    const mobile = isMobileView();

    if (!force && state.lastMobileMode === mobile) return;
    state.lastMobileMode = mobile;

    window.stopTeacherRotation();

    if (state.searchMode) return;

    try {
      const limit = mobile ? state.teacherMobileLimit : state.teacherLimit;
      const html = await fetchTeachers(0, limit);

      if (html) {
        grid.innerHTML = html;
        grid.style.opacity = '1';

        if (mobile) {
          state.teacherMobileOffset = limit;
        } else {
          state.teacherOffset = limit;
        }
      }
    } catch (e) {
      console.log('Teacher mode setup failed:', e);
    }

    window.startTeacherRotation();
  }

  window.startTeacherRotation = function () {
    if (state.rotationTimer) return;
    if (state.searchMode) return;

    state.rotationRunning = true;

    state.rotationTimer = setInterval(() => {
      rotateTeachers();
    }, isMobileView() ? 4000 : 5000);
  };

  window.stopTeacherRotation = function () {
    if (state.rotationTimer) {
      clearInterval(state.rotationTimer);
      state.rotationTimer = null;
    }
    state.rotationRunning = false;
  };

  setupTeacherMode(true);

  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      setupTeacherMode();
    }, 220);
  });

  document.addEventListener('visibilitychange', () => {
    if (document.hidden) {
      window.stopTeacherRotation();
    } else if (!state.searchMode) {
      window.startTeacherRotation();
    }
  });
})();

  // ==============================
  // REVIEW SLIDER
  // ==============================
  (function(){
    const track = document.getElementById('reviewTrack');
    if (!track) return;

    const leftBtn  = document.querySelector('.rnav--left');
    const rightBtn = document.querySelector('.rnav--right');

    function step(){
      const first = track.querySelector('.review-slide');
      if (!first) return 320;
      const w = first.getBoundingClientRect().width;
      const gap = parseFloat(window.getComputedStyle(track).gap || '14');
      return w + gap;
    }

    leftBtn?.addEventListener('click', () => {
      track.scrollLeft -= step();
    });

    rightBtn?.addEventListener('click', () => {
      track.scrollLeft += step();
    });
  })();

 
  (function () {
    const grid = document.getElementById('homeTeachersGrid');
    if (!grid) return;

    const url = grid.dataset.url;
    const state = window.nxTeacherState;

    async function rotateTeachers() {
      if (state.teacherLoading) return;
      if (state.searchMode) return;

      state.teacherLoading = true;

      try {
        const qs = new URLSearchParams({
          offset: String(state.teacherOffset),
          limit: String(state.teacherLimit)
        });

        const res = await fetch(url + "?" + qs.toString(), {
          headers: { "X-Requested-With": "XMLHttpRequest" }
        });

        if (!res.ok) throw new Error("HTTP " + res.status);

        const html = await res.text();

        if (!html || html.trim().length < 10) {
          state.teacherOffset = 0;
          state.teacherLoading = false;
          return;
        }

        grid.style.opacity = "0.2";

        setTimeout(() => {
          if (!state.searchMode) {
            grid.innerHTML = html;
            grid.style.opacity = "1";
          }
        }, 180);

        state.teacherOffset += state.teacherLimit;
      } catch (e) {
        console.log("Teacher auto-rotate failed:", e);
      } finally {
        state.teacherLoading = false;
      }
    }

    window.startTeacherRotation = function () {
      if (state.rotationTimer) return;
      state.rotationRunning = true;
      state.rotationTimer = setInterval(rotateTeachers, 5000);
    };

    window.stopTeacherRotation = function () {
      if (state.rotationTimer) {
        clearInterval(state.rotationTimer);
        state.rotationTimer = null;
      }
      state.rotationRunning = false;
    };

    window.startTeacherRotation();

    document.addEventListener("visibilitychange", () => {
      if (document.hidden) {
        window.stopTeacherRotation();
      } else if (!state.searchMode) {
        window.startTeacherRotation();
      }
    });
  })();

});
</script>

 
<script>
$(document).ready(function () {

    // Just enough for the progress bar to read as "working" — the old 15s
    // theatrical wait made a sub-second query feel broken.
    const SEARCH_MIN_LOADER_TIME = 1200;
    let teacherProgressTimer = null;

    function startTeacherProgress() {
        let progress = 0;

        const steps = [
            { at: 8,  title: 'Reading your requirement...', text: 'Understanding class, subject, board and location' },
            { at: 22, title: 'Checking subject fit...', text: 'Matching tutors by subject expertise and teaching level' },
            { at: 38, title: 'Checking board and class alignment...', text: 'Comparing board, class and teaching compatibility' },
            { at: 55, title: 'Checking budget and location...', text: 'Finding tutors who match price and nearby availability' },
            { at: 72, title: 'Checking ratings and experience...', text: 'Reviewing teaching experience and parent feedback' },
            { at: 88, title: 'Preparing best matches...', text: 'Finalizing the most relevant tutors for your child' }
        ];

        $('#teacherProgressBar').css('width', '0%');
        $('#teacherLoadingText').text('NXTutors AI is finding the best tutors...');
        $('#teacherProgressText').text('Preparing search...');

        if (teacherProgressTimer) {
            clearInterval(teacherProgressTimer);
        }

        teacherProgressTimer = setInterval(function () {
            progress += Math.random() * 4;
            if (progress > 94) progress = 94;

            $('#teacherProgressBar').css('width', progress.toFixed(0) + '%');

            let currentTitle = 'NXTutors AI is finding the best tutors...';
            let currentText = 'Preparing search...';

            steps.forEach(function(step){
                if (progress >= step.at) {
                    currentTitle = step.title;
                    currentText = step.text;
                }
            });

            $('#teacherLoadingText').text(currentTitle);
            $('#teacherProgressText').text(currentText);
        }, 900);
    }

    function stopTeacherProgress(success = true) {
        if (teacherProgressTimer) {
            clearInterval(teacherProgressTimer);
            teacherProgressTimer = null;
        }

        $('#teacherProgressBar').css('width', success ? '100%' : '0%');
        $('#teacherProgressText').text(success ? 'Search ready' : 'Search failed');
    }

    function finishAfterDelay(startTime, minTime, callback) {
        let elapsed = Date.now() - startTime;
        let wait = Math.max(0, minTime - elapsed);
        setTimeout(callback, wait);
    }

    function loadTeachers(search = '', offset = 0, append = false) {
        let url = $('#homeTeachersGrid').data('url');
        let state = window.nxTeacherState || {};

        const isFreshSearch = !append && search.trim() !== '';
        const minTime = isFreshSearch ? SEARCH_MIN_LOADER_TIME : 0;
        const requestStart = Date.now();

        // User ne manually interact kiya -> auto rotate band
        state.searchMode = true;
        if (typeof window.stopTeacherRotation === 'function') {
            window.stopTeacherRotation();
        }

        $('#teacherLoading').show();
        $('#heroSearchBtn').prop('disabled', true).text('Finding Tutors...');
        $('#homeLoadMoreTeachers').prop('disabled', true);

        if (minTime > 0) {
            startTeacherProgress();
        } else {
            $('#teacherProgressBar').css('width', '0%');
            $('#teacherLoadingText').text('NXTutors AI is finding the best tutors...');
            $('#teacherProgressText').text('Loading...');
        }

        $.ajax({
            url: url,
            type: 'GET',
            data: {
                search: search,
                place: ($('#heroSearchArea').val() || '').trim(),
                offset: offset,
                limit: 6
            },
            success: function(response) {
                finishAfterDelay(requestStart, minTime, function () {
                    stopTeacherProgress(true);

                    $('#teacherLoading').hide();
                    $('#heroSearchBtn').prop('disabled', false).text('Find Tutors');

                    let cleanResponse = $.trim(response);

                    if (!cleanResponse) {
                        if (!append) {
                            $('#homeTeachersGrid').html(`
                                <div style="grid-column:1/-1;text-align:center;padding:30px;">
                                    <h3>No tutors found</h3>
                                    <p>Try another subject, class, board, or location.</p>
                                </div>
                            `);
                        }

                        $('#homeLoadMoreTeachers')
                            .text('No more tutors')
                            .prop('disabled', true)
                            .css('opacity', '0.7')
                            .show();

                        return;
                    }

                    if (append) {
                        $('#homeTeachersGrid').append(cleanResponse);
                    } else {
                        $('#homeTeachersGrid').html(cleanResponse);
                    }

                    let tempDiv = $('<div>').html(cleanResponse);
                    let loadedCards = tempDiv.find('.tutor-card, .card--tutor').length;

                    $('#homeLoadMoreTeachers')
                        .data('query', search)
                        .data('offset', offset + loadedCards)
                        .text('Load More Tutors')
                        .prop('disabled', false)
                        .css('opacity', '1')
                        .show();

                    if (search.trim() !== '') {
                        $('#suggestedTitle').text('Results for "' + search + '"');
                        $('#suggestedSubtitle').text('Handpicked tutors based on your search');
                    } else {
                        $('#suggestedTitle').text('Suggested for your child');
                        $('#suggestedSubtitle').text('');
                    }

                    if (!append && $('#suggestedTeachersSection').length) {
                        $('html, body').animate({
                            scrollTop: $('#suggestedTeachersSection').offset().top - 40
                        }, 1000);
                    }

                    // Intentionally NO auto hide/disable here
                    // Button tabhi disable hoga jab actual blank response milega
                });
            },
            error: function() {
                finishAfterDelay(requestStart, minTime, function () {
                    stopTeacherProgress(false);

                    $('#teacherLoading').hide();
                    $('#heroSearchBtn').prop('disabled', false).text('Find Tutors');
                    $('#homeLoadMoreTeachers').prop('disabled', false);

                    alert('Something went wrong. Please try again.');
                });
            }
        });
    }

    // Subject goes to `search` (OR-matched against subjects/boards/profile);
    // the place field travels separately as `place` and narrows with AND.
    function heroQuery() {
        return $('#heroSearchInput').val().trim();
    }

    $('#heroSearchBtn').on('click', function () {
        loadTeachers(heroQuery(), 0, false);
    });

    $('#heroSearchInput, #heroSearchArea').on('keypress', function (e) {
        if (e.which === 13) {
            e.preventDefault();
            loadTeachers(heroQuery(), 0, false);
        }
    });

    $('#homeLoadMoreTeachers').on('click', function () {
        let btn = $(this);
        let offset = parseInt(btn.data('offset')) || 0;
        let search = btn.data('query') || '';
        loadTeachers(search, offset, true);
    });

});
</script>

<script>
function openPDF() {
    document.getElementById("pdfModal").style.display = "block";
}

function closePDF() {
    document.getElementById("pdfModal").style.display = "none";
}
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('nxAskAiInput');
    const sendBtn = document.getElementById('nxAskAiSend');
    const thread = document.getElementById('nxAskAiThread');

    function addMessage(type, name, text) {
        window.nxgAppendMsg(thread, text, type);
    }

    function sendMessage() {
        const message = input.value.trim();
        if (!message) return;

        addMessage('user', 'Parent', message);
        input.value = '';

        sendBtn.disabled = true;
        sendBtn.classList.add('is-loading');

        fetch("{{ route('ask.nxt.ai') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ message })
        })
        .then(res => res.json())
        .then(data => {
            addMessage('ai', 'NXT AI', data.reply || 'No response received.');
        })
        .catch(() => {
            addMessage('ai', 'NXT AI', 'Server response nahi mila.');
        })
        .finally(() => {
            sendBtn.disabled = false;
            sendBtn.classList.remove('is-loading');
        });
    }

    sendBtn.addEventListener('click', sendMessage);

    input.addEventListener('keydown', function(e){
        if(e.key === 'Enter') sendMessage();
    });
});
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {

    const lazyBackgrounds = document.querySelectorAll(".lazy-bg");

    const observer = new IntersectionObserver((entries, obs) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {

                const el = entry.target;
                const bg = el.dataset.bg;

                el.style.backgroundImage = `url('${bg}')`;

                obs.unobserve(el);
            }
        });

    });

    lazyBackgrounds.forEach(el => observer.observe(el));

});
</script>