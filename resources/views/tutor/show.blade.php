<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  {{-- ✅ Meta (old format friendly) --}}
  <title>{{ $tutor->name }} | NXTutors</title>
  <meta name="description" content="View profile of {{ $tutor->name }} - verified home tutor in {{ $tutor->city }}.">
  <link rel="canonical" href="{{ $canonical }}">

  {{-- OG --}}
  <meta property="og:title" content="{{ $tutor->name }} | NXTutors">
  <meta property="og:description" content="Verified tutor in {{ $tutor->city }}.">
  <meta property="og:type" content="profile">
  <meta property="og:url" content="{{ $canonical }}">
  <meta property="og:image" content="{{ $img }}">
@php use Illuminate\Support\Str; @endphp
@php
  $canonical = $canonical ?? url()->current();

  $img = !empty($tutor->avatar)
    ? (str_starts_with($tutor->avatar,'http') ? $tutor->avatar : asset('storage/user/'.$tutor->avatar))
    : asset('frount/assets/images/tutor1.jpg');

  // ✅ WhatsApp Number (change once, use everywhere)
  $waNumber = preg_replace('/[^0-9]/', '', $setting->phone);// ✅ put your real number (without +)

  $city    = trim((string)($tutor->city ?? ''));
  $state   = trim((string)($tutor->state ?? ''));
  $area    = trim((string)($tutor->address ?? ''));
  $country = 'IN';

  // ✅ courses fallback
  $courses = $tutor->effective_courses ?? $tutor->courses;

  // ✅ knowsAbout from both tables
  $knowsAbout = [];
  if (!empty($courses) && $courses->count()) {
    foreach ($courses as $c) {
      if ($c instanceof \App\Models\Teacher_course) {
        if (!empty($c->board?->cat_title))         $knowsAbout[] = $c->board->cat_title;
        if (!empty($c->classCategory?->cat_title)) $knowsAbout[] = $c->classCategory->cat_title;
        if (!empty($c->category?->cat_title))      $knowsAbout[] = $c->category->cat_title;
      } else {
        if (!empty($c->board))   $knowsAbout[] = $c->board;
        if (!empty($c->for_class)) $knowsAbout[] = $c->for_class;
        if (!empty($c->subject)) $knowsAbout[] = $c->subject;
      }
    }
  }
  $knowsAbout = array_values(array_unique(array_filter($knowsAbout)));

  // ✅ teaching mode (best effort)
  $teachingMode = $tutor->class_type ?? null;
  if (!$teachingMode && !empty($courses) && $courses->count()) {
    $first = $courses->first();
    if ($first instanceof \App\Models\Teacher_courses) $teachingMode = $first->class_type ?? null;
  }
  $teachingMode = $teachingMode ?: 'Home';

  // ✅ subjects taught (best effort)
  $subjectsTaught = $subjectsOffered ?? [];
  $subjectsTaught = array_values(array_filter(array_unique($subjectsTaught)));
  $subjectsTaught = array_slice($subjectsTaught, 0, 12);

  // ✅ JSON-LD: ProfilePage
  $schemaWebPage = [
    "@context" => "https://schema.org",
    "@type"    => "ProfilePage",
    "@id"      => $canonical."#profilepage",
    "url"      => $canonical,
    "name"     => ($tutor->name ?? 'Tutor') . ($city ? " | Home Tutor in $city" : " | Tutor Profile"),
    "description" => "View verified tutor profile".($city ? " in $city" : "").". Book a demo class and chat on WhatsApp with NXTutors.",
    "inLanguage"  => "en-IN",
    "isPartOf" => [
      "@type" => "WebSite",
      "@id"   => url('/')."#website",
      "name"  => "NXTutors",
      "url"   => url('/')
    ],
    "primaryImageOfPage" => [
      "@type" => "ImageObject",
      "url"   => $img
    ],
  ];

  // ✅ JSON-LD: Breadcrumb
  $schemaBreadcrumb = [
    "@context" => "https://schema.org",
    "@type"    => "BreadcrumbList",
    "@id"      => $canonical."#breadcrumbs",
    "itemListElement" => [
      ["@type"=>"ListItem","position"=>1,"name"=>"Home","item"=>url('/')],
      ["@type"=>"ListItem","position"=>2,"name"=>"Tutors","item"=>url('/page')],
      ["@type"=>"ListItem","position"=>3,"name"=>$tutor->name ?? 'Tutor',"item"=>$canonical],
    ]
  ];

  // ✅ JSON-LD: Tutor (Person)
  $schemaPerson = [
    "@context" => "https://schema.org",
    "@type"    => "Person",
    "@id"      => $canonical."#tutor",
    "name"     => $tutor->name ?? 'Tutor',
    "url"      => $canonical,
    "image"    => $img,
    "jobTitle" => "Tutor",
    "description" => "Verified tutor".($city ? " in $city" : "")." for school students. Book demo and get personalised guidance via NXTutors.",
    "address" => array_filter([
      "@type" => "PostalAddress",
      "streetAddress"    => $area ?: null,
      "addressLocality"  => $city ?: null,
      "addressRegion"    => $state ?: null,
      "addressCountry"   => $country
    ], fn($v) => !is_null($v)),
    "worksFor" => [
      "@type" => "Organization",
      "@id"   => url('/')."#org",
      "name"  => "NXTutors",
      "url"   => url('/')
    ],
  ];

  if (!empty($knowsAbout)) $schemaPerson["knowsAbout"] = $knowsAbout;

  // ✅ AggregateRating Schema
  $schemaAggregate = null;
  if (!empty($avgRating) && !empty($reviewCount)) {
    $schemaAggregate = [
      "@context" => "https://schema.org",
      "@type" => "AggregateRating",
      "@id"   => $canonical."#aggregaterating",
      "ratingValue" => $avgRating,
      "reviewCount" => $reviewCount,
      "bestRating"  => 5
    ];
  }

  // ✅ Review Schema array (limit 10)
  $schemaReviews = [];
  if (!empty($reviews) && $reviews->count()) {
    foreach ($reviews as $rv) {
      $schemaReviews[] = array_filter([
        "@type" => "Review",
        "author" => [
          "@type" => "Person",
          "name" => $rv->name ?? 'Parent'
        ],
        "reviewBody" => $rv->message ?? '',
        "reviewRating" => [
          "@type" => "Rating",
          "ratingValue" => $rv->rating ?? 5,
          "bestRating"  => 5
        ],
        "datePublished" => !empty($rv->date) ? $rv->date : null
      ], fn($v)=>$v!==null);
    }
  }

  // ✅ Service Schema (teaching mode)
  $schemaService = [
    "@context" => "https://schema.org",
    "@type"    => "Service",
    "@id"      => $canonical."#tutoringservice",
    "name"     => ($teachingMode ?: "Home")." Tutoring".($city ? " in $city" : ""),
    "serviceType" => "Tutoring",
    "provider" => [
      "@type" => "Person",
      "@id"   => $canonical."#tutor",
      "name"  => $tutor->name ?? 'Tutor'
    ],
    "areaServed" => [
      "@type" => "Place",
      "name"  => $city ?: "India"
    ],
    "brand" => [
      "@type" => "Brand",
      "name"  => "NXTutors"
    ],
    "url" => $canonical
  ];

  // ✅ Dynamic long content tokens
  $qual = trim((string)($tutor->education ?? ''));
  $deg  = trim((string)($tutor->degree ?? ''));
  $exp  = trim((string)($tutor->experience ?? ''));
  $classFor = trim((string)($tutor->for_class ?? ''));

  // best effort boards/classes from courses
  $boardList = [];
  $classList = [];
  if (!empty($courses) && $courses->count()) {
    foreach ($courses as $c) {
      if ($c instanceof \App\Models\Teacher_course) {
        if (!empty($c->board?->cat_title)) $boardList[] = $c->board->cat_title;
        if (!empty($c->classCategory?->cat_title)) $classList[] = $c->classCategory->cat_title;
      } else {
        if (!empty($c->board)) $boardList[] = $c->board;
        if (!empty($c->for_class)) $classList[] = $c->for_class;
      }
    }
  }
  $boardList = array_values(array_unique(array_filter($boardList)));
  $classList = array_values(array_unique(array_filter($classList)));
  $boardStr  = $boardList ? implode(', ', array_slice($boardList,0,3)) : 'CBSE';
  $classStr  = $classList ? implode(', ', array_slice($classList,0,3)) : ($classFor ?: 'Classes');

@endphp

<script type="application/ld+json">{!! json_encode($schemaWebPage, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
<script type="application/ld+json">{!! json_encode($schemaBreadcrumb, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
<script type="application/ld+json">{!! json_encode($schemaPerson, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
<script type="application/ld+json">{!! json_encode($schemaService, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>

@if($schemaAggregate)
  <script type="application/ld+json">{!! json_encode($schemaAggregate, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
@endif

 
  @include('include.header')

<style>
  :root{
    --nx-bg:#0b1220;
    --nx-card:rgba(255,255,255,.06);
    --nx-border:rgba(148,163,184,.22);
    --nx-text:#e5e7eb;
    --nx-muted:rgba(226,232,240,.72);
    --nx-accent:#22c55e;
    --nx-accent2:#38bdf8;
    --nx-shadow: 0 20px 60px rgba(0,0,0,.35);
  }

  body.page{
    background: radial-gradient(900px 500px at 20% 10%, rgba(56,189,248,.15), transparent 60%),
                radial-gradient(800px 500px at 80% 0%, rgba(34,197,94,.12), transparent 55%),
                var(--nx-bg);
    color:var(--nx-text);
  }
#aboutTutor {
  scroll-margin-top: 120px; /* header height ke hisaab se 100-140 adjust */
}

html {
  scroll-behavior: smooth;
}
  .shell{max-width:1100px;margin:0 auto;padding:18px 14px 92px;}
  .nxsec{margin:18px 0 22px;}
  .nxsec__head{margin:0 0 12px;}
  .nxh1{font-size:28px;line-height:1.15;font-weight:800;letter-spacing:-.02em;}
  .nxh2{font-size:18px;font-weight:800;margin:0;}
  .nxlead{font-size:14px;color:var(--nx-muted);margin:6px 0 0;}

  .nxcard{
    background: linear-gradient(180deg, rgba(255,255,255,.08), rgba(255,255,255,.04));
    border:1px solid var(--nx-border);
    border-radius:18px;
    box-shadow: var(--nx-shadow);
    backdrop-filter: blur(10px);
  }
  .nxcard--soft{box-shadow:0 12px 30px rgba(0,0,0,.28);}

  .nxclamp-4{
  display:-webkit-box;
  -webkit-line-clamp:4;
  -webkit-box-orient:vertical;
  overflow:hidden;
}

/* Read more link */
.nxreadmore{
  display:inline-block;
  margin-top:8px;
  font-weight:800;
  color: rgba(56,189,248,.95);
  text-decoration:none;
}
.nxreadmore:hover{ text-decoration:underline; }

/* Make hero cards equal height on desktop */
@media(min-width:981px){
  .nxheroRow{ align-items:stretch; }
  .nxheroRow > article,
  .nxheroRow > aside{ height:100%; }
}

  .nxgrid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:14px;}
  @media(max-width:980px){.nxgrid{grid-template-columns:repeat(2,minmax(0,1fr));}}
  @media(max-width:640px){.nxgrid{grid-template-columns:1fr;}}

  .nxchip{
    display:inline-flex;align-items:center;gap:6px;
    padding:6px 10px;border-radius:999px;
    border:1px solid var(--nx-border);
    background:rgba(15,23,42,.35);
    color:rgba(226,232,240,.9);
    font-size:12px;font-weight:600;
  }
  .nxchip--ok{border-color:rgba(34,197,94,.45);background:rgba(34,197,94,.12);}

  .nxbtn{
    display:inline-flex;align-items:center;justify-content:center;
    padding:10px 14px;border-radius:12px;font-weight:800;
    border:1px solid var(--nx-border);text-decoration:none;color:var(--nx-text);
    background: rgba(255,255,255,.06);
    transition: transform .15s ease, background .15s ease, border-color .15s ease;
  }
  .nxbtn:hover{transform: translateY(-1px);background: rgba(255,255,255,.10);border-color:rgba(148,163,184,.35);}
  .nxbtn--accent{background: linear-gradient(90deg, rgba(34,197,94,.95), rgba(56,189,248,.85)); border-color:transparent; color:#07131a;}
  .nxbtn--accent:hover{background: linear-gradient(90deg, rgba(34,197,94,1), rgba(56,189,248,1));}

  .nxsplit{display:grid;grid-template-columns: 1.35fr .65fr; gap:14px;}
  @media(max-width:980px){.nxsplit{grid-template-columns:1fr;}}

  .nxstat{display:flex;gap:10px;flex-wrap:wrap;margin-top:12px}
  .nxstat .nxchip{font-size:12px}

  .nxdivider{height:1px;background:rgba(148,163,184,.18);margin:14px 0;}
  .nxmuted{color:var(--nx-muted);}
  .nxk{font-weight:800;color:rgba(226,232,240,.92);}

  /* ✅ Sticky CTA for mobile */
  .nxsticky{
    position:fixed;left:0;right:0;bottom:0;
    padding:10px 12px;background:rgba(2,6,23,.72);
    border-top:1px solid rgba(148,163,184,.22);
    backdrop-filter: blur(12px);
    display:none;gap:10px;justify-content:center;
    z-index:999;
  }
  .nxsticky a{flex:1;max-width:240px;}
  @media(max-width:700px){.nxsticky{display:flex;}}

  /* ✅ Review Summary Card */
  .nxsummary{cursor:pointer;}
  .nxsummary__grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:10px;margin-top:12px;}
  .nxmini{padding:12px;border:1px solid rgba(148,163,184,.18);border-radius:14px;background: rgba(15,23,42,.22);}
  .nxmini__t{font-weight:800;font-size:13px;opacity:.9}
  .nxmini__v{font-weight:900;font-size:22px;margin-top:6px}

  /* ✅ Horizontal scroll cards */
  .nxscroll{overflow:auto;-webkit-overflow-scrolling:touch;scroll-snap-type:x mandatory;display:flex;gap:12px;padding:2px;}
  .nxscroll__card{flex:0 0 340px;max-width:340px;scroll-snap-align:start;padding:14px;}
  @media(max-width:640px){.nxscroll__card{flex-basis:82vw;max-width:82vw;}}

  /* ✅ Bottom sheet */
  .nxsheet__backdrop{position:fixed;inset:0;background:rgba(0,0,0,.55);display:none;z-index:2000;}
  .nxsheet{position:fixed;left:0;right:0;bottom:0;transform:translateY(100%);transition:transform .22s ease;z-index:2001;max-height:86vh;overflow:auto;border-top-left-radius:18px;border-top-right-radius:18px;}
  .nxsheet--open{transform:translateY(0);}
  .nxsheet__backdrop--open{display:block;}
  .nxsheet__head{display:flex;align-items:center;justify-content:space-between;gap:10px;padding:14px 16px;border-bottom:1px solid rgba(148,163,184,.18);}
  .nxclose{border:1px solid rgba(148,163,184,.22);background:rgba(255,255,255,.06);color:var(--nx-text);border-radius:12px;padding:8px 10px;cursor:pointer;font-weight:800;}

  .nxbar{height:10px;border-radius:999px;background:rgba(148,163,184,.18);overflow:hidden;}
  .nxbar > span{display:block;height:100%;background:rgba(56,189,248,.75);}

  /* ✅ More Tutors: horizontal scroll + mobile 2x2 */
  .nxtutorstrip{overflow:auto;-webkit-overflow-scrolling:touch;scroll-snap-type:x mandatory;}
  .nxtutorstrip__grid{display:grid;grid-auto-flow:column;grid-auto-columns:320px;gap:12px;padding:2px;}
  .nxtutorstrip__item{scroll-snap-align:start;}
  @media(max-width:640px){
    .nxtutorstrip__grid{grid-auto-columns:44vw;grid-template-rows:repeat(2, auto);}
  }

  /* ✅ Accordion */
  details.nxacc{border:1px solid rgba(148,163,184,.18);border-radius:14px;background:rgba(15,23,42,.22);padding:10px 12px;}
  details.nxacc + details.nxacc{margin-top:10px;}
  details.nxacc summary{cursor:pointer;font-weight:900;list-style:none;}
  details.nxacc summary::-webkit-details-marker{display:none;}
  .nxacc__body{margin-top:10px;color:rgba(226,232,240,.82);font-size:14px;line-height:1.7;}
</style>
 <link rel="stylesheet" href="{{ asset('frount/assets') }}/css/home.css" />
</head>

<body class="page">
<div class="shell">

  <main class="main">

    {{-- ✅ 1) Tutor Hero Card --}}
    <section class="nxsec">
      <div class="nxsplit  nxheroRow">
        <article class="nxcard" style="padding:18px;">
          <div style="display:flex;gap:16px;align-items:center;flex-wrap:wrap;">
            <img src="{{ $img }}" alt="{{ $tutor->name }}" width="120" height="120"
                style="border-radius:18px;object-fit:cover;border:1px solid rgba(148,163,184,.35);flex:0 0 auto;"   
                 onerror="this.src='{{ asset('frount/assets/images/tutor1.jpg') }}'">

            <div style="flex:1;min-width:240px;">
              <h1 class="nxh1" style="margin:0 0 6px;">{{ $tutor->name }}</h1>

              <div class="nxlead" style="margin:0;">
                <span class="nxmuted">{{ $tutor->address ?? '' }}</span>
                @if(!empty($tutor->city)) <span class="nxmuted"> • {{ $tutor->city }}</span> @endif
                @if(!empty($tutor->state)) <span class="nxmuted">, {{ $tutor->state }}</span> @endif
              </div>

              <div class="nxstat">
                <span class="nxchip nxchip--ok">✅ Verified</span>
                <span class="nxchip">{{ $chip }}</span>

                @if(!empty($tutor->experience))
                  <span class="nxchip">⭐ {{ $tutor->experience }} yrs exp</span>
                @endif

                @if(!empty($tutor->budget))
                  <span class="nxchip"> {{ $tutor->budget }}/class</span>
                @endif

                <span class="nxchip">Mode: {{ $teachingMode }}</span>
              </div>

              <div class="nxdivider"></div>

              <div class="nxlead nxclamp-4" style="margin:0;">
  {{ $tutor->profile_desc ?? $tutor->pro_desc ?? 'Experienced tutor providing personalised learning plans, regular tests and progress updates.' }}
</div>

<a class="nxreadmore" href="#aboutTutor" onclick="scrollToAbout(event)">
  Read full profile ↓
</a>
            </div>
          </div>
        </article>

        <aside class="nxcard" style="padding:18px;">
          <div class="nxh2">Book a Demo</div>
          <p class="nxlead">Get a callback within 10 minutes.</p>

          <div style="margin-top:12px;display:flex;flex-direction:column;gap:10px;">
            <a class="nxbtn nxbtn--accent" href="#demoModal" data-modal-target="demoModal">Book Demo</a>

            {{-- ✅ WhatsApp CTA (required) --}}
            <a class="nxbtn" target="_blank"
               href="https://wa.me/{{ $waNumber }}?text={{ urlencode('Hi, I want to book a demo with '.$tutor->name.' in '.$tutor->city) }}">
              Chat on WhatsApp
            </a>
          </div>

          <div class="nxdivider"></div>

          <div class="nxlead" style="margin:0;">
            <div>✅ Background verified</div>
            <div>✅ Free demo guidance</div>
            <div>✅ Regular progress tracking</div>
          </div>
        </aside>
      </div>
    </section>


    <section class="section" id="nxAskAISection">
  <div class="nxg-chat-card nxg-glass">

    <div class="nxg-chat-top">
      <h4>Ask NXT AI</h4>
      <p>Ask about tutor fit, fees, timing, demo class etc.</p>
    </div>

    <!-- PRE-DEFINED Q&A -->
    <div class="nxg-chat-box" id="nxAskAiThread">

      <div class="nxg-msg ai">
        <small>NXT AI</small>
        Ask anything about tutors 🙂
      </div>

      <div class="nxg-msg user">
        <small>Parent</small>
        Who is best tutor?
      </div>

      <div class="nxg-msg ai">
        <small>NXT AI</small>
        Best tutor depends on subject fit, experience and availability.
      </div>

      <div class="nxg-msg user">
        <small>Parent</small>
        What are fees?
      </div>

      <div class="nxg-msg ai">
        <small>NXT AI</small>
        Fees usually range between ₹800–₹2500 depending on class and subject.
      </div>

      <div class="nxg-msg user">
        <small>Parent</small>
        Demo class available?
      </div>

      <div class="nxg-msg ai">
        <small>NXT AI</small>
        Yes 👍 You can book a demo class before finalizing tutor.
      </div>

      <div class="nxg-msg user">
        <small>Parent</small>
        Online or home tutor?
      </div>

      <div class="nxg-msg ai">
        <small>NXT AI</small>
        Both options are available — online & home tutors.
      </div>

    </div>

    <!-- INPUT -->
    <div class="nxg-chat-input">
      <input type="text" id="nxAskAiInput" placeholder="Ask anything..." />
      <button id="nxAskAiSend">Send</button>
    </div>

  </div>
</section>

   <section class="nxsec" id="aboutTutor" style="padding-top:20px;">
  <div class="nxsec__head">
    <h2 class="nxh2">About {{ $tutor->name }}</h2>
  </div>

  <div class="nxcard nxcard--soft" style="padding:20px;">
    {!! $aboutHtml ?? '<p>'.$tutor->profile_desc.'</p>' !!}
  </div>
</section>


    {{-- ✅ 2) Teaching Details (courses + coursess fallback) --}}
    <section class="nxsec">
      <div class="nxsec__head">
        <h2 class="nxh2">Teaching Details</h2>
        <p class="nxlead">Boards, classes and subjects taught</p>
      </div>

      <div class="nxgrid">
        @if(!empty($courses) && $courses->count())
          @foreach($courses as $course)
            <div class="nxcard nxcard--soft" style="padding:16px;">
              <div class="nxk" style="font-size:15px;">
                @if($course instanceof \App\Models\Teacher_course)
                  {{ $course->category?->cat_title ?? 'Course' }}
                @else
                  {{ $course->subject ?? 'Subject' }}
                @endif
              </div>

              <div class="nxlead" style="margin-top:10px;">
                <div>Board:
                  <b>
                    @if($course instanceof \App\Models\Teacher_course)
                      {{ $course->board?->cat_title ?? '—' }}
                    @else
                      {{ $course->board ?? '—' }}
                    @endif
                  </b>
                </div>

                <div>Class:
                  <b>
                    @if($course instanceof \App\Models\Teacher_course)
                      {{ $course->classCategory?->cat_title ?? '—' }}
                    @else
                      {{ $course->for_class ?? ($tutor->for_class ?? '—') }}
                    @endif
                  </b>
                </div>

                <div>Mode:
                  <b>
                    @if($course instanceof \App\Models\Teacher_course)
                      {{ $tutor->class_type ?? 'Home' }}
                    @else
                      {{ $course->class_type ?? 'Home' }}
                    @endif
                  </b>
                </div>
              </div>

              {{-- subjects chips --}}
              <div style="margin-top:10px;display:flex;gap:8px;flex-wrap:wrap;">
                @if($course instanceof \App\Models\Teacher_course)
                  @php $subs = $course->subjects ?? collect(); @endphp
                  @if($subs && $subs->count())
                    @foreach($subs->take(8) as $s)
                      <span class="nxchip">{{ $s->title ?? 'Subject' }}</span>
                    @endforeach
                  @endif
                @else
                  @if(!empty($course->subject))
                    <span class="nxchip">{{ $course->subject }}</span>
                  @endif
                @endif
              </div>
            </div>
          @endforeach
        @else
          <div class="nxcard nxcard--soft" style="padding:16px;">
            <div class="nxlead">Courses not added yet.</div>
          </div>
        @endif
      </div>
    </section>

    {{-- ✅ 3) ONE Review Summary Card (no scattered cards) --}}
    @php
      $r = [
        'Expertise'     => $ratingCards['Expertise'] ?? null,
        'Patience'      => $ratingCards['Patience'] ?? null,
        'Reliability'   => $ratingCards['Reliability'] ?? null,
        'Communication' => $ratingCards['Communication'] ?? null,
      ];
    @endphp

    <section class="nxsec">
      <div class="nxsec__head">
        <h2 class="nxh2">Tutor Reviews</h2>
        <p class="nxlead">
          @if(!empty($avgRating)) Overall ⭐ {{ $avgRating }}/5 @endif
          @if(!empty($reviewCount)) • {{ $reviewCount }} verified reviews @endif
        </p>
      </div>

      <div class="nxcard nxcard--soft nxsummary" id="openReviewSheet" style="padding:16px;">
        <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:12px;">
          <div>
            <div class="nxk">⭐ Review Summary</div>
            <div class="nxlead" style="margin-top:6px;">Tap to see detailed ratings & parent reviews</div>
          </div>
          <span class="nxchip nxchip--ok">Verified Reviews</span>
        </div>

        <div class="nxsummary__grid">
          @foreach($r as $label => $val)
            <div class="nxmini">
              <div class="nxmini__t">{{ $label }}</div>
              <div class="nxmini__v">
                {{ $val ? $val : '—' }}
                @if($val)<span style="font-size:14px;opacity:.7;">/5</span>@endif
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>

    {{-- ✅ Bottom Sheet (ratings + parent reviews horizontal) --}}
    <div class="nxsheet__backdrop" id="reviewBackdrop"></div>

    <div class="nxcard nxsheet" id="reviewSheet" style="padding:0;">
      <div class="nxsheet__head">
        <div>
          <div class="nxk">⭐ {{ $tutor->name }} Reviews</div>
          <div class="nxlead" style="margin:4px 0 0;">
            @if(!empty($avgRating)) Overall {{ $avgRating }}/5 @endif
            @if(!empty($reviewCount)) • {{ $reviewCount }} reviews @endif
          </div>
        </div>
        <button class="nxclose" id="closeReviewSheet">Close</button>
      </div>

      <div style="padding:14px 16px;">
        <div class="nxk">Category Ratings</div>

        <div style="margin-top:10px;display:grid;gap:12px;">
          @foreach($r as $label => $val)
            @php $pct = $val ? max(0, min(100, ($val/5)*100)) : 0; @endphp
            <div>
              <div style="display:flex;justify-content:space-between;gap:10px;">
                <div class="nxk" style="font-size:13px;">{{ $label }}</div>
                <div class="nxmuted" style="font-weight:800;">{{ $val ? $val.'/5' : '' }}</div>
              </div>
              <div class="nxbar" style="margin-top:8px;"><span style="width:{{ $pct }}%"></span></div>
            </div>
          @endforeach
        </div>

        <div class="nxdivider"></div>

        <div style="display:flex;justify-content:space-between;align-items:center;gap:10px;">
          <div class="nxk">Parents Reviews</div>
          <span class="nxchip nxchip--ok">✅ Verified</span>
        </div>

        @if(!empty($reviews) && $reviews->count())
          <div class="nxscroll" style="margin-top:12px;">
            @foreach($reviews as $rev)
              <div class="nxcard nxcard--soft nxscroll__card">
                <div style="display:flex;justify-content:space-between;gap:10px;align-items:flex-start;">
                  <div class="nxk">{{ $rev->name ?? 'Parent' }}</div>
                  @if(!empty($rev->rating)) <span class="nxchip">⭐ {{ $rev->rating }}/5</span> @endif
                </div>

                <div class="nxlead" style="margin-top:10px;">{{ $rev->message ?? '' }}</div>

                <div class="nxdivider"></div>

                <div class="nxmuted" style="font-size:12px;">
                  @if(!empty($rev->date)) {{ $rev->date }} @endif
                  @if(!empty($tutor->for_class)) • Class: {{ $tutor->for_class }} @endif
                </div>
              </div>
            @endforeach
          </div>
        @else
          <div class="nxlead" style="margin-top:10px;">No reviews available yet.</div>
        @endif
      </div>
    </div>

    {{-- ✅ 4) Long-form Content (Target 2200–2600 words) --}}
    <section class="nxsec">
      <div class="nxsec__head">
        <h2 class="nxh2">About {{ $tutor->name }} – {{ $boardStr }} Tutor in {{ $area ?: $city }}</h2>
        <p class="nxlead">Personalised learning plan, weekly progress updates and exam-focused preparation</p>
      </div>

      <div class="nxcard nxcard--soft" style="padding:16px;">
        <div class="nxlead" style="line-height:1.8;">
          <p>
            {{ $tutor->name }} is a verified tutor in {{ $area ?: $city }} who focuses on concept clarity, regular practice,
            and confident exam preparation for {{ $classStr }}. Parents looking for a trusted {{ $boardStr }} tutor often
            need three things: consistent teaching, measurable progress, and a learning plan that fits the student’s pace.
            This is exactly what {{ $tutor->name }} aims to deliver through structured lessons, smart homework, and weekly revisions.
          </p>
          <p>
            In every class, topics are broken down into simple steps so students can understand “why” a formula works, not just memorize it.
            For students who feel stuck or anxious in exams, the first goal is to rebuild confidence using small wins: quick quizzes,
            doubt-solving sessions, and targeted practice worksheets. Over time, this approach improves speed, accuracy, and marks.
          </p>
          <p>
            If you want a tutor who can guide your child with discipline while still keeping learning friendly and comfortable, you can book a demo
            with {{ $tutor->name }}. The demo helps us understand the student’s current level and create a realistic learning plan.
          </p>
        </div>
      </div>
    </section>

    <section class="nxsec">
      <div class="nxsec__head">
        <h2 class="nxh2">Teaching Expertise & Methodology</h2>
        <p class="nxlead">Clear explanations, revision cycles, and exam-oriented practice</p>
      </div>

      <div class="nxcard nxcard--soft" style="padding:16px;">
        <div class="nxlead" style="line-height:1.8;">
          <p>
            {{ $tutor->name }} follows a step-by-step teaching style: concept explanation → examples → guided practice → independent homework → revision.
            This ensures students understand the topic and can solve questions on their own. The tutoring plan is adapted based on the student’s class level,
            syllabus, and exam schedule.
          </p>
          <p>
            Weekly progress checks are done using short tests. Mistakes are analyzed to identify weak areas such as calculation errors, missing concepts,
            or poor time management. Then, the next week’s lessons focus on improving those exact points.
          </p>
          <p>
            For board exams, special focus is given to important questions, chapter-weightage, and proper answer-writing format. For competitive or advanced
            preparation, higher-order questions and mixed practice sets are included.
          </p>
        </div>
      </div>
    </section>

    <section class="nxsec">
      <div class="nxsec__head">
        <h2 class="nxh2">Subjects & Syllabus Covered</h2>
        <p class="nxlead">Chapter-wise details (accordion for better UX)</p>
      </div>

      <div class="nxcard nxcard--soft" style="padding:16px;">
        <details class="nxacc" open>
          <summary>Core Subjects Covered</summary>
          <div class="nxacc__body">
            @if(!empty($subjectsTaught))
              <p><b>Subjects:</b> {{ implode(', ', $subjectsTaught) }}</p>
            @else
              <p>Subjects are customised based on the student’s syllabus and learning goals.</p>
            @endif
            <p>For each subject, the plan includes NCERT/board-aligned learning, worksheets, revision notes, and chapter-wise tests.</p>
          </div>
        </details>

        <details class="nxacc">
          <summary>Chapter-wise Preparation Approach</summary>
          <div class="nxacc__body">
            <p>
              Each chapter is covered in 3 cycles: (1) Concept clarity, (2) Practice (easy → moderate → exam-level), (3) Revision + test.
              Doubts are cleared in every session so the student does not carry confusion into the next topic.
            </p>
            <p>
              If the student is behind schedule, fast-track planning is done using priority chapters and high-weightage topics first, then remaining
              chapters are covered in a structured timeline.
            </p>
          </div>
        </details>

        <details class="nxacc">
          <summary>Worksheets, Tests & Notes</summary>
          <div class="nxacc__body">
            <p>
              Students receive practice sets, important questions, and revision sheets. Weekly tests improve speed and reduce exam anxiety.
              Parents can also request monthly performance updates.
            </p>
          </div>
        </details>
      </div>
    </section>

    <section class="nxsec">
      <div class="nxsec__head">
        <h2 class="nxh2">Home Tutor vs Online Tutor by {{ $tutor->name }}</h2>
        <p class="nxlead">Choose the best mode for your child’s learning style</p>
      </div>

      <div class="nxcard nxcard--soft" style="padding:16px;">
        <div class="nxlead" style="line-height:1.8;">
          <p>
            Home tutoring is ideal if your child needs more focus, personal discipline, and a distraction-free learning environment. It helps especially
            for younger classes and students who need consistent supervision and regular practice.
          </p>
          <p>
            Online tutoring is best for flexible schedules, quick doubt sessions, and students who are comfortable learning on screen. It also helps
            if you want to continue with the same tutor while traveling or changing location.
          </p>
        </div>
      </div>
    </section>

    <section class="nxsec">
      <div class="nxsec__head">
        <h2 class="nxh2">Qualifications & Experience</h2>
        <p class="nxlead">Academic background, teaching experience, and strengths</p>
      </div>

      <div class="nxcard nxcard--soft" style="padding:16px;">
        <div class="nxlead" style="line-height:1.8;">
          <p>
            <b>Qualification:</b> {{ $qual ?: 'Qualified and experienced tutor' }} @if($deg) ({{ $deg }}) @endif
          </p>
          <p>
            <b>Experience:</b> {{ $exp ?: 'Experienced in teaching school students with exam-focused learning plans.' }}
          </p>
          <p>
            {{ $tutor->name }} focuses on concept clarity, consistent practice, and building confidence with regular assessments and revision cycles.
          </p>
        </div>
      </div>
    </section>

    <section class="nxsec">
      <div class="nxsec__head">
        <h2 class="nxh2">Why Parents Choose {{ $tutor->name }}</h2>
        <p class="nxlead">Verified profile, progress tracking and personalised teaching</p>
      </div>

      <div class="nxcard nxcard--soft" style="padding:16px;">
        <div class="nxlead" style="line-height:1.8;">
          <ul style="margin:0;padding-left:18px;">
            <li>Personalised learning plan based on student’s current level</li>
            <li>Regular chapter tests and improvement tracking</li>
            <li>Exam-oriented practice with important questions</li>
            <li>Friendly teaching style with doubt clearing</li>
            <li>Verified tutor profile with parent reviews</li>
          </ul>
        </div>
      </div>
    </section>

    {{-- ✅ 5) Pricing / Mode --}}
    <section class="nxsec">
      <div class="nxsec__head">
        <h2 class="nxh2">Pricing & Mode</h2>
        <p class="nxlead">Transparent fee range and flexible classes</p>
      </div>

      <div class="nxgrid">
        <div class="nxcard nxcard--soft" style="padding:16px;">
          <div class="nxk">💰 Hourly Rates</div>
          <div style="margin-top:10px;font-size:34px;font-weight:900;">
            @if($hourlyMin)
              ₹{{ $hourlyMin }}
              @if($hourlyMax) <span style="opacity:.7;font-size:20px;">to</span> ₹{{ $hourlyMax }} @endif
              <span style="opacity:.7;font-size:16px;"> / hour</span>
            @else
              <span style="opacity:.8;font-size:18px;">Not specified</span>
            @endif
          </div>
          <div class="nxlead" style="margin-top:8px;">Final fee depends on class & location</div>
        </div>

        <div class="nxcard nxcard--soft" style="padding:16px;">
          <div class="nxk">📚 Subjects Offered</div>
          <div style="margin-top:10px;display:flex;gap:8px;flex-wrap:wrap;">
            @if(!empty($subjectsOffered))
              @foreach($subjectsOffered as $sub)
                <span class="nxchip">{{ $sub }}</span>
              @endforeach
            @else
              <span class="nxchip">Subjects not added yet</span>
            @endif
          </div>
        </div>
      </div>
    </section>

    {{-- ✅ 6) More Tutors (Horizontal + mobile 2x2) --}}
    @if(isset($relatedTutors) && $relatedTutors->count())
      <section class="nxsec">
        <div class="nxsec__head">
          <h2 class="nxh2">More tutors in {{ $tutor->city }}</h2>
          <!-- <p class="nxlead">Horizontal scroll (no vertical infinite list)</p> -->
        </div>

        <div class="nxtutorstrip">
          <div class="nxtutorstrip__grid">
            @foreach($relatedTutors as $rt)
              @php
                $a = $rt->avatar ?? '';
                $rtImg = $a && str_starts_with($a,'http')
                  ? $a
                  : ($a ? asset('storage/user/'.$a) : asset('frount/assets/images/tutor1.jpg'));

                   $encodedId = rtrim(strtr(base64_encode($rt->user_id . '-nxt'), '+/', '-_'), '=');
            
            $profileLink = route('tutor.newshow', [
    'city' => Str::slug($rt->city),
    'user_id' => $encodedId,
    'name' => Str::slug($rt->name),
]);
              @endphp

              <div class="nxcard nxcard--soft nxtutorstrip__item" style="padding:14px;">
                <div style="display:flex;gap:12px;align-items:center;">
                  <img src="{{ $rtImg }}" width="54" height="54"
                       style="border-radius:12px;object-fit:cover;border:1px solid rgba(148,163,184,.35);"
                       onerror="this.src='{{ asset('frount/assets/images/tutor1.jpg') }}'">
                  <div>
                    <div class="nxk">{{ $rt->name }}</div>
                    <div class="nxmuted" style="font-size:12px;">{{ $rt->address ?? '' }}</div>
                  </div>
                </div>

                <div style="margin-top:12px;">
                  <a class="nxbtn" href="{{ $profileLink }}">
                    View Profile
                  </a>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </section>
    @endif

    {{-- ✅ 7) Blog & Advice (Horizontal scroll) --}}
    @if(isset($latestBlogs) && $latestBlogs->count())
      <section class="nxsec">
        <div class="nxsec__head">
          <h2 class="nxh2">Blog & Advice</h2>
          <!-- <p class="nxlead">Horizontal scroll (compact height)</p> -->
        </div>

        <div class="nxscroll">
          @foreach($latestBlogs as $b)
            @php
              $thumb = !empty($b->avatar)
                ? (str_starts_with($b->avatar,'http') ? $b->avatar : asset('storage/blog/'.$b->avatar))
                : asset('frount/assets/images/blog2.jpg');
            @endphp

            <a href="{{ route('blog.show', $b->slug) }}" class="nxcard nxcard--soft nxscroll__card" style="text-decoration:none;color:inherit;">
              <div style="height:140px;overflow:hidden;border-radius:14px;border:1px solid rgba(148,163,184,.18);">
                <img src="{{ $thumb }}" alt="{{ $b->title }}" style="width:100%;height:100%;object-fit:cover;">
              </div>
              <div style="margin-top:10px;">
                <div class="nxk" style="font-size:14px;">{{ $b->title }}</div>
                <div class="nxmuted" style="margin-top:6px;font-size:12px;">Read more →</div>
              </div>
            </a>
          @endforeach
        </div>
      </section>
    @endif

  </main>

  @include('include.footer')

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('nxAskAiInput');
    const sendBtn = document.getElementById('nxAskAiSend');
    const thread = document.getElementById('nxAskAiThread');

    function addMessage(type, name, text) {
        const msg = document.createElement('div');
        msg.className = 'nxg-msg ' + type;
        msg.innerHTML = '<small>' + name + '</small>' + escapeHtml(text);
        thread.appendChild(msg);
        thread.scrollTop = thread.scrollHeight;
    }

    function escapeHtml(text) {
        const div = document.createElement('div');
        div.innerText = text;
        return div.innerHTML;
    }

    function sendMessage() {
        const message = input.value.trim();
        if (!message) return;

        addMessage('user', 'Parent', message);
        input.value = '';

        sendBtn.disabled = true;
        sendBtn.innerText = 'Thinking...';

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
            sendBtn.innerText = 'Send';
        });
    }

    sendBtn.addEventListener('click', sendMessage);

    input.addEventListener('keydown', function(e){
        if(e.key === 'Enter') sendMessage();
    });
});
</script>

  {{-- ✅ Sticky CTA --}}
  <div class="nxsticky">
    <a class="nxbtn nxbtn--accent" href="#demoModal" data-modal-target="demoModal">Book Demo</a>
    <a class="nxbtn" target="_blank"
       href="https://wa.me/{{ $waNumber }}?text={{ urlencode('Hi, I want to book a demo with '.$tutor->name.' in '.$tutor->city) }}">
      WhatsApp
    </a>
  </div>

  {{-- ✅ JS: Bottom Sheet --}}
  <script>
  (function(){
    const openBtn = document.getElementById('openReviewSheet');
    const sheet   = document.getElementById('reviewSheet');
    const back    = document.getElementById('reviewBackdrop');
    const closeBtn= document.getElementById('closeReviewSheet');

    function openSheet(){
      back.classList.add('nxsheet__backdrop--open');
      sheet.classList.add('nxsheet--open');
      document.body.style.overflow = 'hidden';
    }
    function closeSheet(){
      back.classList.remove('nxsheet__backdrop--open');
      sheet.classList.remove('nxsheet--open');
      document.body.style.overflow = '';
    }

    if(openBtn) openBtn.addEventListener('click', openSheet);
    if(closeBtn) closeBtn.addEventListener('click', closeSheet);
    if(back) back.addEventListener('click', closeSheet);
  })();
  </script>

  <script>
function scrollToAbout(e){
    e.preventDefault();
    const el = document.getElementById('aboutTutor');
    if(!el) return;

    const yOffset = -110; // header height adjust
    const y = el.getBoundingClientRect().top + window.pageYOffset + yOffset;

    window.scrollTo({
        top: y,
        behavior: 'smooth'
    });
}
</script>




</div>
</body>
</html>
