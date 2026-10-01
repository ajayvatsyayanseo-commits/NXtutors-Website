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
    ['How does NXTutors AI tutor matching work?', 'Our AI evaluates subject expertise, board alignment, class/exam needs, location feasibility, availability overlap, budget and reliability signals to recommend 2–3 high-fit tutors instead of long random lists.'],
    ['Do you provide home tutors and online tutors across India?', 'Yes. NXTutors supports home tutoring, online tutoring, institute mentoring and hybrid learning across India based on tutor availability and feasibility.'],
    ['Which classes and boards are supported?', 'We support Classes 6–12 across CBSE, ICSE, IB, ISC and IGCSE boards, including foundation support and board exam preparation.'],
    ['Do you support JEE and NEET preparation?', 'Yes. We match students with specialised JEE/NEET mentors for Physics, Chemistry, Maths and Biology based on goals, level and schedule.'],
    ['Are tutors verified on NXTutors?', 'Yes. Tutors who join confirm their phone or email with a one-time code and upload a government photo ID, which our team reviews before the profile goes live; tutors who pass carry a Verified badge. Profiles marked Sample profile are examples, not bookable tutors. The free demo class lets you judge the teaching yourself.'],
    ['How does the trial/demo class work?', 'A demo is a normal session to evaluate teaching style and student comfort. After the demo, you can continue with the same tutor or request a different match.'],
    ['What are the typical fees for tutors?', 'Fees depend on class, subject and experience. In most cases, tutoring ranges from ₹800 to ₹2500 per hour. We shortlist tutors aligned to your budget range.'],
    ['Can I change the tutor after hiring?', 'Yes. If the match is not working, we help you switch quickly by recommending alternate verified tutors with better fit.'],
    ['How quickly can I get matched with a tutor?', 'Typically you receive 2–3 recommendations within a short time after sharing your requirement — class, subjects, board, location, schedule and budget.'],
    ['What details should I share to get the best match?', 'Share class/grade, board, subjects, location (city or pincode), preferred days and time slots, mode (home or online) and budget. The more precise the input, the better the match.'],
    ['Do tutors give homework, tests and progress updates?', 'Many tutors follow structured plans with homework, periodic tests and feedback. You can also request weekly progress updates while finalising the tutor.'],
    ['How does NXTutors use AI?', 'AI shortlists two or three verified tutors for your subject, board and area; NXT AI answers questions about fees, timings and demo classes at any hour; and TutorTwin, our AI tutor on WhatsApp, helps with homework between classes. Verified teachers do the teaching, and the free demo class decides the match.'],
    ['Is TutorTwin a real teacher?', 'No. TutorTwin is an AI tutor on WhatsApp and never pretends to be a person. It can make mistakes, so check important answers. On a HumanAI plan a real teacher also reads the chat and replies, and those messages are marked as theirs.'],
    ['Which cities do you currently support?', 'NXTutors supports tutor matching across India. Availability depends on the tutor network in each area, and online tutoring is available nationwide.'],
  ];

  $nxtSchema = [
    '@context' => 'https://schema.org',
    '@graph' => [
      [
        '@type' => 'EducationalOrganization',
        '@id' => $nxtHome . '#organization',
        'name' => 'NXTutors',
        'url' => $nxtHome,
        'logo' => asset('uploads/logo/newlogo-512.png'),
        'description' => 'NXTutors is an AI-powered tutor matching platform that connects parents and students with ID-verified home and online tutors for CBSE, ICSE, IB, ISC and IGCSE, Classes 6–12.',
        'areaServed' => ['@type' => 'Country', 'name' => 'India'],
        'address' => [
          '@type' => 'PostalAddress',
          'streetAddress' => $setting->address ?? '',
          // The office (Sector 66); split out so Google can place it.
          'addressLocality' => 'Gurugram',
          'addressRegion' => 'Haryana',
          'postalCode' => '122101',
          'addressCountry' => 'IN',
        ],
        // "+9178360 34313" as stored; schema wants one clean international number.
        'telephone' => ($nxtTel = preg_replace('/\D+/', '', (string) ($setting->phone ?? ''))) !== '' ? '+' . $nxtTel : '',
        'email' => $setting->email ?? '',
        // The Google Business Profile ("Nxtutors Edtech - Home Tutors", Sector 66),
        // so Google ties the listing and this site together.
        'sameAs' => ['https://www.google.com/search?kgmid=/g/11z1lm_3_m'],
        'hasMap' => 'https://www.google.com/maps/search/?api=1&query=NXTutors+Edtech+Sector+66+Gurugram',
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
      {{-- Fixed, not the banner row: that held "Gurugram · Home online",
           which contradicts a pan-India headline. --}}
      Across India · Home &amp; online
    </p>

    {{-- Deliberately not $hero->title. The banner row currently holds
         "Top home tutors in" — a fragment meant to be completed by a detected
         city, which renders as a broken sentence at H1 size. The badge above
         still carries the admin's locality copy. Wire the title back here once
         that column holds a complete headline. --}}
    {{-- The H1 names what the page is for: verified home tutors across India's
         cities and online tutoring everywhere. "Better learning, brighter
         futures" matched no search at all. City-level wording belongs on the
         /city pages, not here. --}}
    <h1 class="nxh__title" id="nxhTitle">
      Home tutors across India,
      <span class="nxh__title-line">online wherever you are</span>
    </h1>

    <p class="nxh__sub">
      Home and online tutors for school subjects, boards and entrance
      exams. Tell us what you want to learn and your locality — we return two
      or three real matches, not a directory to sift through.
    </p>

    {{-- Two fields, because two is what the matcher accepts: `search` is
         OR-matched across subject/board/profile, `place` narrows with AND.
         A third "Mode" control would look right and filter nothing. --}}
    <div class="nxh__search">
      <div class="nxh__field">
        <label class="nxh__label" for="heroSearchInput">What do you want to learn?</label>
        <div class="nxh__control">
          <input
            type="text"
            id="heroSearchInput"
            class="nxh__input"
            placeholder="e.g. Class 10 Maths, IB Physics, JEE"
            autocomplete="off"
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

    {{-- Home and online follow different matching rules (see TutorSearchService):
         home = tutors who can reach your area; online = the best fit anywhere. --}}
    <div class="nxh__modes" role="radiogroup" aria-label="Tutor mode">
      <button type="button" role="radio" class="nxh__mode" data-hero-mode="either" aria-checked="true">Either</button>
      <button type="button" role="radio" class="nxh__mode" data-hero-mode="home" aria-checked="false">Home tutor</button>
      <button type="button" role="radio" class="nxh__mode" data-hero-mode="online" aria-checked="false">Online</button>
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

    @include('home.partials.popular-searches')

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

    {{-- TutorTwin, the WhatsApp AI tutor: one line, under the search it must not compete with. --}}
    @include('partials.tutortwin-strip', ['placement' => 'home_hero'])
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
  font-size: 12px;
  font-weight: 700;
  letter-spacing: .07em;
  text-transform: uppercase;
  color: #5B6472; /* 6.1:1 on the white search box (was #8A93A2, 3.1:1) */
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
  font-size: 12px;
  font-weight: 600;
  letter-spacing: .01em;
  color: rgba(255,255,255,.72);
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
    font-size: 12px;
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
  body.page .nxh__stat-label{ font-size: 12px; }
  body.page .nxh__sweep{ height: 44px; }
}

@media (prefers-reduced-motion: reduce){
  body.page .nxh__go{ transition: none; }
  body.page .nxh__go:hover{ transform: none; }
}
</style>


{{-- Tutors first: NXTutors is a tutor directory before anything else. --}}
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

{{-- Replaces nine thin /category tiles (most had 0–1 courses). --}}
@include('home.partials.explore')

{{-- How it works: three illustrated steps (replaces the duplicate "How NXTutors finds the right tutor"). --}}
@include('home.partials.how-it-works')

{{-- TutorTwin: help between classes, after the parent has seen tutors and how matching works. --}}
@include('home.partials.tutortwin')



@include('home.partials.ask-ai')
 
      
 




      {{-- Only when there are real reviews: an empty "What parents say" hurts trust more than none. --}}
      @if(($reviews ?? collect())->count())
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
      @endif

      @include('home.partials.guides')

      {{-- Parent's guide: the tutor checklist as a three-stage timeline. --}}
      @include('home.partials.parent-guide')



      {{-- Cities: the metro cards and the state directory under two tabs. --}}
      <section class="section" aria-labelledby="homeCitiesTitle">
        <div class="section-head">
          <h2 class="section-title" id="homeCitiesTitle">Home tutors across India</h2>
        </div>
        <div class="nx-tabs nx-home-cities">
          <div class="nx-tabs__bar" role="tablist">
            <input class="nx-tabs__radio" type="radio" name="homeCities" id="homeCities-top" checked>
            <label class="nx-tabs__tab" for="homeCities-top" role="tab">Top cities</label>
            <input class="nx-tabs__radio" type="radio" name="homeCities" id="homeCities-state">
            <label class="nx-tabs__tab" for="homeCities-state" role="tab">By state</label>
          </div>
          <div class="nx-tabs__panels">
            <div class="nx-tabs__panel" role="tabpanel">@include('home.partials.top-cities')</div>
            <div class="nx-tabs__panel" role="tabpanel">@include('home.partials.cities-served')</div>
          </div>
        </div>
      </section>

      @include('home.partials.about-seo')

      {{-- How NXTutors uses AI, and where people take over (claim: "AI-first tutoring, with real teachers"). --}}
      @include('home.partials.ai-first')

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
        <summary>How does NXTutors AI tutor matching work?</summary>
        <p>
          Our AI evaluates subject expertise, board alignment, class/exam needs, location feasibility,
          availability overlap, budget and reliability signals to recommend 2–3 high-fit tutors instead
          of long random lists.
        </p>
      </details>

      <details class="faq-item">
        <summary>Do you provide home tutors and online tutors across India?</summary>
        <p>
          Yes. NXTutors supports home tutoring, online tutoring, institute mentoring and hybrid learning
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
        <summary>Are tutors verified on NXTutors?</summary>
        <p>
          Yes. Tutors who join confirm their phone or email with a one-time code and upload a government photo ID,
          which our team reviews before the profile goes live; tutors who pass carry a Verified badge. Profiles
          marked Sample profile are examples, not bookable tutors. The free demo class lets you judge the teaching
          yourself. <a href="{{ url('/how-we-verify-tutors') }}">How we verify tutors</a>.
        </p>
      </details>

      <details class="faq-item">
        <summary>How does the trial/demo class work?</summary>
        <p>
          A demo is a normal session to evaluate teaching style and student comfort. After the demo, you can
          continue with the same tutor or request a different match.
        </p>
      </details>

      <details class="faq-item">
        <summary>How does NXTutors use AI?</summary>
        <p>
          AI shortlists two or three verified tutors for your subject, board and area; NXT AI answers questions about fees, timings and demo classes at any hour; and TutorTwin, our AI tutor on WhatsApp, helps with homework between classes. Verified teachers do the teaching, and the free demo class decides the match.
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
          NXTutors supports tutor matching across India. Availability depends on tutor network in each area, and
          online tutoring is available nationwide.
        </p>
      </details>

      <details class="faq-item">
        <summary>Is TutorTwin a real teacher?</summary>
        <p>
          No. TutorTwin is an AI tutor on WhatsApp and never pretends to be a person. It can make mistakes, so check important answers. On a HumanAI plan a real teacher also reads the chat and replies, and those messages are marked as theirs.
        </p>
      </details>
    </div>
  </div>
</section>

      {{-- Closing call to action: the amber primary is the page's one main action. --}}
      <section class="section">
        <div class="nx-sec nx-cta-band" aria-label="Book a demo">
          <div>
            <h2 class="nx-sec__title">Try a tutor before you decide</h2>
            <p class="nx-sec__sub">Tell us the subject, class and your area. We share two or three matched tutors, and the first class is a free demo. No card, no commitment.</p>
          </div>
          <div class="nx-cta-row">
            <a class="nx-cta nx-cta--primary" href="#" data-modal-target="demoModal">Book a free demo class</a>
            <a class="nx-cta nx-cta--ghost" href="tel:+917836034313">Call us</a>
          </div>
        </div>
      </section>

    </main>

  @include('include.footer')
  <script src="{{ asset('frount/assets/js/nx-suggest.js') }}?v={{ $nxtAssetV ?? 1 }}" defer></script>
 
 {{-- Chart.js only draws the tutor-comparison chart, opened on demand. --}}
 <script src="https://cdn.jsdelivr.net/npm/chart.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2" defer></script>
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

    // Superseded by the NXT AI client in home/partials/ask-ai.blade.php,
    // which claims the widget at parse time. Two clients on one input
    // means double sends and a chat that ignores tutor cards.
    if (window.__nxtAiOwned) return;

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

{{-- Compare script: public/frount/assets/js/nx-compare.js, loaded with the Ask AI partial. --}}

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
                place: ($('#heroSearchArea').val() || '').trim() || storedPlace(),
                sid: window.nxSearchSid ? window.nxSearchSid() : '',
                mode: window.nxHeroMode || '',
                offset: offset,
                limit: 8 // two full rows of four on desktop, four rows of two on a phone
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

    // The visitor's saved or detected place (footer location script): used
    // when the Location field is empty, and to personalise the first list.
    function storedPlace() {
        try {
            var area = localStorage.getItem('nx_area') || '', city = localStorage.getItem('nx_city') || '';
            return [area, city].filter(Boolean).join(' ');
        } catch (e) { return ''; }
    }
    function personalise() {
        var place = storedPlace();
        if (!place || heroQuery()) return;
        $('#heroSearchArea').attr('placeholder', 'Near ' + place);
        loadTeachers('', 0, false);
    }
    personalise();
    document.addEventListener('nx:location', personalise);

    // Results land in "Suggested for your child"; take the parent there.
    function showResults() {
        const el = document.getElementById('suggestedTeachersSection');
        if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    $('#heroSearchBtn').on('click', function () {
        loadTeachers(heroQuery(), 0, false);
        showResults();
    });

    // Home / Online / Either: remembered on this device; changing it re-runs
    // the current search. The results bar's "Home · N / Online · M" buttons
    // use the same switch.
    function setMode(m, rerun) {
        window.nxHeroMode = (m === 'home' || m === 'online') ? m : '';
        try { localStorage.setItem('nx_mode', m); } catch (e) {}
        $('[data-hero-mode]').each(function () {
            $(this).attr('aria-checked', $(this).data('hero-mode') === (m || 'either') ? 'true' : 'false');
        });
        if (rerun && (heroQuery() || ($('#heroSearchArea').val() || '').trim())) {
            loadTeachers(heroQuery(), 0, false);
        }
    }
    try { setMode(localStorage.getItem('nx_mode') || 'either', false); } catch (e) { setMode('either', false); }
    $(document).on('click', '[data-hero-mode]', function () { setMode($(this).data('hero-mode'), true); });
    $(document).on('click', '[data-mode-set]', function () { setMode($(this).data('mode-set'), true); });

    // Popular-search chips and "find a tutor" chips in Explore fill the
    // search box and run the same search.
    $(document).on('click', '[data-hero-search]', function (e) {
        e.preventDefault();
        $('#heroSearchInput').val($(this).data('hero-search'));
        loadTeachers(heroQuery(), 0, false);
        showResults();
    });

    $('#heroSearchInput, #heroSearchArea').on('keypress', function (e) {
        if (e.which === 13) {
            e.preventDefault();
            loadTeachers(heroQuery(), 0, false);
            showResults();
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
    // Superseded by the NXT AI client in home/partials/ask-ai.blade.php,
    // which claims the widget at parse time. Two clients on one input
    // means double sends and a chat that ignores tutor cards.
    if (window.__nxtAiOwned) return;

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