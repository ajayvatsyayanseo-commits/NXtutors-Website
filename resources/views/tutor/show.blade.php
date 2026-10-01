<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  {{-- Title, description and Open Graph are emitted by include.header from
       $metatitle / $metadesc / $ogImage / $ogType, set below once $img and the
       subjects are known. --}}
@php use Illuminate\Support\Str; @endphp
@php
  $canonical = $canonical ?? url()->current();

  $img = !empty($tutor->avatar)
    ? (str_starts_with($tutor->avatar,'http') ? $tutor->avatar : \App\Support\TutorPhoto::url($tutor->avatar))
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

  // Title and description. "Name | NXTutors" said nothing a searcher types;
  // the subject and city are what "maths tutor in gurgaon" actually matches.
  $metaCity  = $city !== '' ? ucwords(strtolower($city)) : '';
  // A real subject ("Mathematics"), never a category label such as
  // "Academic (Class I–XII)": the same filter the tutor cards use.
  $isSubj = fn ($v) => is_string($v) && trim($v) !== '' && ! preg_match('/academic|class|\(|\bboth\b|online|home/i', $v);
  $metaCaps = $tutor instanceof \App\Models\Register ? app(\App\NxtAi\Support\PublicTutorFieldMapper::class)->capabilities($tutor) : [];
  // Named authors (config/nx_authors.php) carry their subject there too.
  $metaAuthor = collect(config('nx_authors', []))->first(fn ($a) => (string) ($a['user_id'] ?? '') !== '' && (string) $a['user_id'] === (string) $tutor->user_id);
  $metaSubj = collect($metaCaps['subjects'] ?? [])->merge($subjectsTaught)->merge($metaAuthor['subjects'] ?? [])->first($isSubj) ?? '';
  $metaRole  = trim($metaSubj . ' Home Tutor');
  $metatitle = $tutor->name . ' – ' . $metaRole . ($metaCity !== '' ? ' in ' . $metaCity : '') . ' | NXTutors';
  $metadesc  = 'Profile of ' . $tutor->name . (empty($tutor->is_sample) ? ', a verified ' : ', a sample profile of a ') . strtolower($metaRole)
             . ($metaCity !== '' ? ' in ' . $metaCity : '')
             . '. See subjects, boards, experience and fees, and book a free demo class on NXTutors.';
  $ogImage   = $img;
  $ogType    = 'profile';

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

  // Areas the tutor travels to for home classes, grouped by zone
  // (config/zones.php). When they reach every zone of the city, the page
  // says so ("all over Gurugram") instead of implying only the listed names.
  $travelAreas = array_values(array_filter(array_map('trim', explode(',', (string) ($tutor->travel_areas ?? '')))));
  $homeCity = \App\Support\Zones::cityOf((string) ($tutor->city ?? '')) ?: (string) ($tutor->city ?? '');
  $travelByZone = [];
  foreach ($travelAreas as $ta) {
    $travelByZone[\App\Support\Zones::of($homeCity, $ta) ?? 'Other areas'][] = $ta;
  }
  $cityZones = array_keys(config('zones.' . $homeCity, []));
  $coversWholeCity = $cityZones && ! array_diff($cityZones, array_keys($travelByZone));

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
    "areaServed" => $travelAreas
      ? array_merge(
          [["@type" => "City", "name" => $homeCity ?: ($city ?: "India")]],
          array_map(fn ($a) => ["@type" => "Place", "name" => $a . ($homeCity ? ", $homeCity" : "")], $travelAreas)
        )
      : [
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

  // Experience is stored as "8", "8 years", "8 Years", "12+"… The chip adds
  // its own unit, so it takes the number only; the long form gets a unit
  // when the tutor typed a bare number.
  $expYears = preg_match('/\d+(?:\.\d+)?\+?/', $exp, $expMatch) ? $expMatch[0] : '';
  $expText  = ($expYears !== '' && $exp === $expYears) ? $exp.' years' : $exp;

  // The About text is plain text from the tutor's profile form. Blank lines
  // separate blocks; a block whose lines all start with "•" or "-" is a list;
  // a short single line is a heading; anything else is a paragraph. Every
  // piece is escaped, because this is tutor input rendered on a public page.
  $aboutText = trim(str_replace("\r", '', (string)($tutor->profile_desc ?? '')));
  // A tutor who has written a full bio does not need the templated blocks
  // ("About X – Board Tutor in Area", methodology, home vs online, why parents
  // choose): they only repeat it, and repeated boilerplate reads as thin content.
  $richBio = mb_strlen(trim(strip_tags(((string) ($tutor->profile ?? '')).' '.((string) ($tutor->profile_desc ?? ''))))) >= 600;
  $aboutHtml = null;
  if ($aboutText !== '') {
    $aboutHtml = '';
    foreach (preg_split('/\n\s*\n/', $aboutText) as $block) {
      $lines = array_values(array_filter(array_map('trim', explode("\n", $block)), 'strlen'));
      if (!$lines) continue;
      $isList = count(array_filter($lines, fn ($l) => preg_match('/^[•\-]\s*/u', $l))) === count($lines);
      if ($isList) {
        $aboutHtml .= '<ul class="nxabout__list">';
        foreach ($lines as $l) $aboutHtml .= '<li>'.e(preg_replace('/^[•\-]\s*/u', '', $l)).'</li>';
        $aboutHtml .= '</ul>';
      } elseif (count($lines) === 1 && mb_strlen($lines[0]) <= 80 && !preg_match('/[.!?]$/u', $lines[0])) {
        $aboutHtml .= '<h3 class="nxabout__h">'.e(rtrim($lines[0], ':')).'</h3>';
      } else {
        $aboutHtml .= '<p>'.implode('<br>', array_map('e', $lines)).'</p>';
      }
    }
  }

  // The short line under the name: the tutor's own 160-character summary when
  // they wrote one, otherwise the start of the About text.
  $summaryText = trim((string)($tutor->pro_desc ?? ''))
    ?: Str::limit(preg_replace('/\s+/u', ' ', $aboutText), 240)
    ?: 'Experienced tutor providing personalised learning plans, regular tests and progress updates.';

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

  /* About text, built from the tutor's plain-text profile */
  .nxabout{line-height:1.8;font-size:15px;}
  .nxabout p{margin:0 0 12px;}
  /* About 70 characters a line: at full card width it ran ~135, and the eye
     lost its place going back to the start of each line. */
  body.page .nxcard--soft .nxabout p,body.page .nxcard--soft .nxabout__list,body.page .nxcard--soft .nxabout__h,
  body.page .nxabout p,body.page .nxabout__list{max-width:62ch;} /* outranks .nxcard--soft p{max-width:none} */
  .nxabout__h{font-size:16px;font-weight:800;margin:18px 0 8px;}
  .nxabout__h:first-child{margin-top:0;}
  .nxabout__list{margin:0 0 12px;padding-left:20px;}
  .nxabout__list li{margin:4px 0;}

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
  /* On a laptop the booking stays one click away as a floating pill. */
  @media(min-width:701px){
    .nxsticky{display:flex;left:auto;right:24px;bottom:24px;padding:8px;border:1px solid rgba(148,163,184,.28);border-radius:999px;box-shadow:0 18px 40px rgba(2,6,23,.55);}
    .nxsticky a{flex:0 0 auto;max-width:none;padding-inline:18px;}
  }

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

  /* Review cards */
  .nxrv__head{display:flex;gap:10px;align-items:center;}
  .nxrv__avatar{width:44px;height:44px;border-radius:50%;object-fit:cover;flex:0 0 auto;border:1px solid rgba(148,163,184,.25);}
  .nxrv__avatar--initials{display:grid;place-items:center;background:rgba(56,189,248,.16);color:#7dd3fc;font-weight:900;font-size:15px;}
  .nxrv__verified{font-size:11px;font-weight:800;color:#34d399;margin-top:2px;}
  .nxrv__tags{display:flex;flex-wrap:wrap;gap:6px;align-items:center;}
  .nxrv__tag{font-size:12px;font-weight:700;padding:4px 10px;border-radius:999px;border:1px solid rgba(148,163,184,.25);background:rgba(255,255,255,.05);}
  .nxrv__tag b{margin-left:4px;opacity:.75;}
  .nxrv__scores{display:flex;flex-wrap:wrap;gap:4px 12px;margin-top:10px;font-size:12px;opacity:.85;}

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
 <link rel="stylesheet" href="{{ asset('frount/assets') }}/css/home.css?v={{ $nxtAssetV ?? 1 }}" />
</head>

<body class="page">
<div class="shell">

  <main class="main">

    {{-- A model profile is shown for what it is (config/tutors.php). --}}
    @php $isSampleProfile = ! empty($tutor->is_sample); @endphp
    @if($isSampleProfile)
      <section class="nxsec">
        <div class="nx-sample-note">
          <strong>This is a sample profile.</strong>
          It shows the kind of tutor we match. {{ config('tutors.match_promise') }}.
          <a href="#" class="nx-cta nx-cta--primary" data-modal-target="demoModal">Get a verified tutor</a>
        </div>
      </section>
    @endif

    {{-- ✅ 1) Tutor Hero Card --}}
    <section class="nxsec">
      <div class="nxsplit  nxheroRow">
        <article class="nxcard" style="padding:18px;">
          <div style="display:flex;gap:22px;align-items:flex-start;flex-wrap:wrap;">
            <div class="nxhero-photo">
              {{-- 190px portrait: a 240/480 thumb, not the full upload. $img itself stays the og/schema image. --}}
              @php $heroSrcset = \App\Support\Thumb::srcset2x($img, 240); @endphp
              <img src="{{ \App\Support\Thumb::url($img, 240) }}"@if($heroSrcset !== '') srcset="{{ $heroSrcset }}"@endif alt="{{ $tutor->name }}" width="190" height="230" decoding="async"
                   onerror="if (this.srcset) { this.removeAttribute('srcset'); this.src = {{ json_encode($img, JSON_UNESCAPED_SLASHES) }}; } else { this.onerror = null; this.src = {{ json_encode(asset('frount/assets/images/tutor1.jpg'), JSON_UNESCAPED_SLASHES) }}; }">
              @if($isSampleProfile)
                <span class="badge-sample">Sample profile</span>
              @else
              <span class="badge-verified">
                <svg width="11" height="11" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true"><path d="M6.5 11.3 3.4 8.2l1.1-1.1 2 2 4.9-4.9 1.1 1.1z"/></svg>
                Verified
              </span>
              @endif
            </div>

            <div style="flex:1;min-width:240px;">
              <h1 class="nxh1" style="margin:0 0 6px;">{{ $tutor->name }}</h1>

              <div class="nxlead" style="margin:0;">
                <span class="nxmuted">{{ $tutor->address ?? '' }}</span>
                @if(!empty($tutor->city)) <span class="nxmuted"> • {{ $tutor->city }}</span> @endif
                @if(!empty($tutor->state)) <span class="nxmuted">, {{ $tutor->state }}</span> @endif
              </div>

              <div class="nxstat">
                @unless($isSampleProfile)<span class="nxchip nxchip--ok">✅ Verified</span>@endunless
                <span class="nxchip">{{ $chip }}</span>

                @if($expYears !== '')
                  <span class="nxchip">⭐ {{ $expYears }} yrs exp</span>
                @endif

                @if($hourlyMin)
                  <span class="nxchip">💰 ₹{{ number_format($hourlyMin) }}@if($hourlyMax)–₹{{ number_format($hourlyMax) }}@endif/hour</span>
                @elseif(!empty($tutor->budget))
                  <span class="nxchip"> {{ $tutor->budget }}/class</span>
                @endif

                <span class="nxchip">Mode: {{ $teachingMode }}</span>
              </div>

              <div class="nxdivider"></div>

              <div class="nxlead nxclamp-4" style="margin:0;">
  {{ $summaryText }}
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
            <a class="nxbtn" target="_blank" rel="nofollow noopener"
               href="{{ \App\Support\Wa::tutor($tutor->user_id, 'profile') }}">
              Chat on WhatsApp
            </a>

            {{-- The chat below already knows this tutor (kbTutor). --}}
            <a class="nxbtn nxbtn--ghost" href="#nxAskAISection" data-ask-ai>
              Ask AI about {{ \Illuminate\Support\Str::before(trim($tutor->name), ' ') ?: $tutor->name }}
            </a>
          </div>

          <div class="nxdivider"></div>

          <div class="nxlead" style="margin:0;">
            @unless($isSampleProfile)<div>✅ Background verified</div>@endunless
            <div>✅ Free demo guidance</div>
            <div>✅ Regular progress tracking</div>
          </div>
        </aside>
      </div>
    </section>


    {{-- Quick facts and jump links: the five things a parent checks first, in
         one row, then a way to jump to each part of a long profile. --}}
    @php
      $qfBoards = array_values(array_filter($knowsAbout ?? [], fn ($k) => preg_match('/^(CBSE|ICSE|ISC|IB|IGCSE|State)/i', (string) $k)));
      $qfMode = strtolower((string) $teachingMode) === 'both' ? 'Home & online' : ucfirst((string) $teachingMode);
      $qfFee = $hourlyMin ? '₹'.number_format($hourlyMin).($hourlyMax ? '–₹'.number_format($hourlyMax) : '').'/hr' : (!empty($tutor->budget) ? (str_contains($tutor->budget, '₹') ? $tutor->budget : '₹'.$tutor->budget) : null);
      $qfAreas = !empty($coversWholeCity) ? 'All over '.$homeCity : (!empty($travelAreas) ? count($travelAreas).' areas in '.$homeCity : ($homeCity ?: null));
      $qf = array_filter([
        'Experience' => $expYears !== '' ? rtrim($expYears, '+').'+ years' : null,
        'Boards' => $qfBoards ? implode(' · ', array_slice(array_unique($qfBoards), 0, 4)) : null,
        'Fee' => $isSampleProfile ? null : $qfFee,
        'Mode' => $qfMode ?: null,
        'Home classes' => $qfAreas,
      ]);
    @endphp
    <section class="nxsec nxqf-wrap" aria-label="Quick facts">
      @if($qf)
        <dl class="nxqf">
          @foreach($qf as $qfLabel => $qfValue)
            <div><dt>{{ $qfLabel }}</dt><dd>{{ $qfValue }}</dd></div>
          @endforeach
        </dl>
      @endif
      <nav class="nxjump" aria-label="On this profile">
        <a href="#aboutTutor">About</a>
        <a href="#teaching">What {{ \Illuminate\Support\Str::before(trim($tutor->name), ' ') }} teaches</a>
        @if(!empty($travelAreas))<a href="#areasServed">Areas</a>@endif
        <a href="#pricing">Fees &amp; mode</a>
        <a href="#reviews">Reviews</a>
        <a href="#nxAskAISection">Ask AI</a>
      </nav>
    </section>

    {{-- The assistant panel is about THIS tutor here: their facts fill the
         side panel and every chat question carries their context. --}}
    @include('home.partials.ask-ai', ['kbTutor' => $tutor])

   <section class="nxsec" id="aboutTutor" style="padding-top:20px;">
  <div class="nxsec__head">
    <h2 class="nxh2">About {{ $tutor->name }}</h2>
  </div>

  <div class="nxcard nxcard--soft" style="padding:20px;">
    <div class="nxabout">{!! $aboutHtml ?? '<p>'.e($summaryText).'</p>' !!}</div>
  </div>
</section>


    {{-- ✅ 2) Teaching Details (courses + coursess fallback) --}}
    <section class="nxsec" id="teaching">
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

              @php
                // Only facts that exist: a missing board or class is left out, never "—".
                $tdBoard = $course instanceof \App\Models\Teacher_course ? ($course->board?->cat_title ?? null) : ($course->board ?? null);
                $tdClass = $course instanceof \App\Models\Teacher_course ? ($course->classCategory?->cat_title ?? null) : ($course->for_class ?? ($tutor->for_class ?? null));
              @endphp
              <div class="nxlead" style="margin-top:10px;">
                @if(is_scalar($tdBoard) && trim((string) $tdBoard) !== '')
                  <div>Board: <b>{{ $tdBoard }}</b></div>
                @endif
                @if(is_scalar($tdClass) && trim((string) $tdClass) !== '')
                  <div>Class: <b>{{ $tdClass }}</b></div>
                @endif

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

    <section class="nxsec" id="reviews">
      <div class="nxsec__head">
        <h2 class="nxh2">Tutor Reviews</h2>
        <p class="nxlead">
          @if(!empty($avgRating)) Overall ⭐ {{ $avgRating }}/5 @endif
          @if(!empty($reviewCount)) • {{ $reviewCount }} verified reviews @endif
        </p>
      </div>

      @if(empty($reviewCount))
        <div class="nxcard nxcard--soft nxrv-empty">
          <div class="nxk">No reviews yet</div>
          <p class="nxlead" style="margin:6px 0 0;">{{ \Illuminate\Support\Str::before(trim($tutor->name), ' ') }} is new to reviews on NXTutors. The free demo class is the best way to judge: meet the tutor before you decide.</p>
          <a class="nxbtn nxbtn--accent nxrv-empty__cta" href="#demoModal" data-modal-target="demoModal">Book a free demo class</a>
        </div>
      @else
      <div class="nxcard nxcard--soft nxsummary" id="openReviewSheet" style="padding:16px;">
        <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:12px;">
          <div>
            <div class="nxk">⭐ Review Summary</div>
            <div class="nxlead" style="margin-top:6px;">Tap to see detailed ratings & parent reviews</div>
          </div>
          <span class="nxchip nxchip--ok">Verified Reviews</span>
        </div>

        <div class="nxsummary__grid">
          @foreach(array_filter($r) as $label => $val)
            <div class="nxmini">
              <div class="nxmini__t">{{ $label }}</div>
              <div class="nxmini__v">
                {{ $val ? $val : '—' }}
                @if($val)<span style="font-size:14px;opacity:.7;">/5</span>@endif
              </div>
            </div>
          @endforeach
        </div>

        @if(!empty($topTags))
          <div class="nxrv__tags" style="margin-top:14px;">
            <span class="nxmuted" style="font-size:12px;font-weight:800;">Families mention most:</span>
            @foreach($topTags as $tagLabel => $tagCount)
              <span class="nxrv__tag">{{ $tagLabel }} <b>{{ $tagCount }}</b></span>
            @endforeach
          </div>
        @endif
      </div>
      @endif

      <div style="margin-top:12px;">
        <a class="nxreadmore" href="{{ route('teacher', $tutor->user_id) }}" rel="nofollow">
          Taught by {{ $tutor->name }}? Write a review →
        </a>
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
          @unless($isSampleProfile)<span class="nxchip nxchip--ok">✅ Verified</span>@endunless
        </div>

        @if(!empty($reviews) && $reviews->count())
          <div class="nxscroll" style="margin-top:12px;">
            @foreach($reviews as $rev)
              <article class="nxcard nxcard--soft nxscroll__card">
                <div class="nxrv__head">
                  @if($rev->photoUrl())
                    <img class="nxrv__avatar" src="{{ \App\Support\Thumb::url($rev->photoUrl(), 96) }}" alt="{{ $rev->name }}" loading="lazy" decoding="async" width="44" height="44">
                  @else
                    <span class="nxrv__avatar nxrv__avatar--initials" aria-hidden="true">{{ $rev->initials() }}</span>
                  @endif
                  <div style="flex:1;min-width:0;">
                    <div class="nxk">{{ $rev->name ?? 'Parent' }}</div>
                    @if($rev->isEmailVerified())
                      <div class="nxrv__verified">✓ Verified email</div>
                    @endif
                  </div>
                  @if(!empty($rev->rating)) <span class="nxchip">⭐ {{ $rev->rating }}/5</span> @endif
                </div>

                @if($rev->contextLine())
                  <div class="nxmuted" style="font-size:12px;margin-top:8px;">{{ $rev->contextLine() }}</div>
                @endif

                <div class="nxlead" style="margin-top:10px;white-space:pre-line;">{{ $rev->message ?? '' }}</div>

                @if($rev->tagLabels())
                  <div class="nxrv__tags" style="margin-top:10px;">
                    @foreach($rev->tagLabels() as $tagLabel)
                      <span class="nxrv__tag">{{ $tagLabel }}</span>
                    @endforeach
                  </div>
                @endif

                @if($rev->expertise || $rev->patience || $rev->reliability || $rev->communication)
                  <div class="nxrv__scores">
                    @foreach(\App\Support\ReviewOptions::SCORES as $scoreField => $scoreLabel)
                      @if($rev->{$scoreField})
                        <span>{{ $scoreLabel }} <b>{{ (float) $rev->{$scoreField} }}</b></span>
                      @endif
                    @endforeach
                  </div>
                @endif

                <div class="nxdivider"></div>

                <div class="nxmuted" style="font-size:12px;">
                  @if(!empty($rev->date)) {{ rescue(fn () => \Illuminate\Support\Carbon::parse($rev->date)->format('M Y'), $rev->date, false) }} @endif
                  @if($rev->duration) • Studied {{ \Illuminate\Support\Str::lower(\App\Support\ReviewOptions::label(\App\Support\ReviewOptions::DURATIONS, $rev->duration) ?? '') }} @endif
                </div>
              </article>
            @endforeach
          </div>
        @else
          <div class="nxlead" style="margin-top:10px;">No reviews available yet.</div>
        @endif

        <a class="nxreadmore" style="margin-top:14px;" href="{{ route('teacher', $tutor->user_id) }}" rel="nofollow">
          Write a review for {{ $tutor->name }} →
        </a>
      </div>
    </div>

    {{-- ✅ 4) Long-form Content (Target 2200–2600 words) --}}
    @unless($richBio)
    <section class="nxsec">
      <div class="nxsec__head">
        <h2 class="nxh2">About {{ $tutor->name }} – {{ $boardStr }} Tutor in {{ $area ?: $city }}</h2>
        <p class="nxlead">Personalised learning plan, weekly progress updates and exam-focused preparation</p>
      </div>

      <div class="nxcard nxcard--soft" style="padding:16px;">
        <div class="nxlead" style="line-height:1.8;">
          <p>
            {{ $tutor->name }} is {{ $isSampleProfile ? 'a sample profile of a tutor' : 'a verified tutor' }} in {{ $area ?: $city }} who focuses on concept clarity, regular practice,
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
    @endunless

    @unless($richBio)
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
    @endunless

    <section class="nxsec">
      <div class="nxsec__head">
        <h2 class="nxh2">Subjects & Syllabus Covered</h2>
        <p class="nxlead">How each subject and chapter is planned, practised and tested</p>
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

    @unless($richBio)
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
    @endunless

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
            <b>Experience:</b> {{ $expText ?: 'Experienced in teaching school students with exam-focused learning plans.' }}
          </p>
          <p>
            {{ $tutor->name }} focuses on concept clarity, consistent practice, and building confidence with regular assessments and revision cycles.
          </p>
        </div>
      </div>
    </section>

    @unless($richBio)
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
    @endunless

    @if($travelAreas)
    <section class="nxsec" id="areasServed">
      <div class="nxsec__head">
        <h2 class="nxh2">Home classes {{ $coversWholeCity ? 'all over' : 'in' }} {{ $homeCity }}</h2>
        <p class="nxlead">
          @if($coversWholeCity)
            {{ $tutor->name }} travels for home classes across every part of {{ $homeCity }}, including these areas. Online classes are available anywhere.
          @else
            Areas {{ $tutor->name }} travels to for home classes. Online classes are available anywhere.
          @endif
        </p>
      </div>

      <div class="nxgrid">
        @foreach($travelByZone as $zone => $places)
          <div class="nxcard nxcard--soft" style="padding:16px;">
            <div class="nxk">📍 {{ $zone }}</div>
            <div style="margin-top:10px;display:flex;gap:8px;flex-wrap:wrap;">
              @foreach($places as $p)
                <span class="nxchip">{{ $p }}</span>
              @endforeach
            </div>
          </div>
        @endforeach
      </div>
    </section>
    @endif

    {{-- ✅ 5) Pricing / Mode --}}
    <section class="nxsec" id="pricing">
      <div class="nxsec__head">
        <h2 class="nxh2">Pricing & Mode</h2>
        <p class="nxlead">Transparent fee range and flexible classes</p>
      </div>

      <div class="nxgrid">
        <div class="nxcard nxcard--soft" style="padding:16px;">
          <div class="nxk">💰 Hourly Rates</div>
          <div style="margin-top:10px;font-size:34px;font-weight:900;">
            @if($hourlyMin)
              ₹{{ number_format($hourlyMin) }}
              @if($hourlyMax) <span style="opacity:.7;font-size:20px;">to</span> ₹{{ number_format($hourlyMax) }} @endif
              <span style="opacity:.7;font-size:16px;"> / hour</span>
            @elseif(!empty($tutor->budget))
              {{-- The header chip already states this figure; repeat it here
                   instead of contradicting it with "Not specified". --}}
              {{ str_contains($tutor->budget, '₹') ? $tutor->budget : '₹'.$tutor->budget }}
              <span style="opacity:.7;font-size:16px;"> / class</span>
            @else
              <span style="opacity:.8;font-size:18px;">Shared after the demo class</span>
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
          <a class="btn btn-ghost btn-small" href="{{ route('tutors.index') }}">View all tutors →</a>
        </div>

        {{-- The same record card every other tutor surface uses. --}}
        <div class="suggested-grid">
          @foreach($relatedTutors as $rt)
            @php
              $a = $rt->avatar ?? '';
              $rtImg = $a && str_starts_with($a,'http')
                ? $a
                : ($a ? \App\Support\TutorPhoto::url($a) : asset('frount/assets/images/tutor1.jpg'));

              $rtChips = [];
              if (!empty($rt->courses) && $rt->courses->count()) {
                $c = $rt->courses->first();
                if ($c->board?->cat_title)         $rtChips[] = $c->board->cat_title;
                if ($c->classCategory?->cat_title) $rtChips[] = $c->classCategory->cat_title;
                if ($c->category?->cat_title)      $rtChips[] = $c->category->cat_title;
              }
              $rtChips = array_slice(array_values(array_unique(array_filter($rtChips))), 0, 3);

              $encodedId = rtrim(strtr(base64_encode($rt->user_id . '-nxt'), '+/', '-_'), '=');

              $profileLink = route('tutor.newshow', [
                  'city' => Str::slug((string) $rt->city) ?: 'india',
                  'user_id' => $encodedId,
                  'name' => Str::slug((string) $rt->name) ?: 'tutor',
              ]);

              $rtWa = \App\Support\Wa::tutor($rt->user_id, 'related');
            @endphp

            @include('partials.tutor-card', [
              't' => $rt, 'img' => $rtImg, 'chips' => $rtChips,
              'rating' => number_format((float)($rt->rating_avg ?? 0), 1),
              'reviews' => (int)($rt->reviews_count ?? 0),
              'address' => $rt->address ?? '', 'city' => $rt->city ?? '',
              'waLink' => $rtWa, 'profileUrl' => $profileLink, 'compare' => null,
            ])
          @endforeach
        </div>
      </section>
    @endif

    {{-- ✅ 7) Blog & Advice (Horizontal scroll) --}}
    @if(isset($latestBlogs) && $latestBlogs->count())
      <section class="nxsec">
        <div class="nxsec__head">
          <h2 class="nxh2">Blog & Advice</h2>
          <a class="btn btn-ghost btn-small" href="{{ route('blog.index') }}">View all blogs</a>
          <!-- <p class="nxlead">Horizontal scroll (compact height)</p> -->
        </div>

        <div class="nxscroll">
          @foreach($latestBlogs as $b)
            @php
              $thumb = !empty($b->avatar)
                ? (str_starts_with($b->avatar,'http') ? $b->avatar : asset('storage/blog/'.$b->avatar))
                : asset('frount/assets/images/blog2.jpg');
            @endphp

            <a href="{{ route('blog.show', trim($b->slug)) }}" class="nxcard nxcard--soft nxscroll__card" style="text-decoration:none;color:inherit;">
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
    // Superseded by the NXT AI client in home/partials/ask-ai.blade.php,
    // which claims the widget at parse time. Two clients on one input
    // means double sends and a chat that ignores tutor cards.
    if (window.__nxtAiOwned) return;

    const input = document.getElementById('nxAskAiInput');
    const sendBtn = document.getElementById('nxAskAiSend');
    const thread = document.getElementById('nxAskAiThread');

    function addMessage(type, name, text) {
        const isAi = type === 'ai';
        const time = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
        const wrap = document.createElement('div');
        wrap.className = 'nxg-msg ' + type;

        const av = document.createElement('span');
        av.className = 'nxg-av';
        av.textContent = isAi ? '🤖' : '🧑';

        const nm = document.createElement('span');
        nm.className = 'nxg-name';
        nm.textContent = isAi ? 'NXT AI' : 'You';

        if (isAi) {
            const head = document.createElement('div');
            head.className = 'nxg-head';
            const ts = document.createElement('span');
            ts.className = 'nxg-time';
            ts.textContent = time;
            head.appendChild(av);
            head.appendChild(nm);
            head.appendChild(ts);

            const body = document.createElement('div');
            body.className = 'nxg-text';
            body.textContent = text;

            const react = document.createElement('div');
            react.className = 'nxg-react';
            react.innerHTML = '<button type="button" aria-label="Helpful">👍</button><button type="button" aria-label="Not helpful">👎</button>';

            wrap.appendChild(head);
            wrap.appendChild(body);
            wrap.appendChild(react);
        } else {
            const bubble = document.createElement('div');
            bubble.className = 'nxg-bubble';
            const body = document.createElement('span');
            body.className = 'nxg-text';
            body.textContent = text;
            const ts = document.createElement('span');
            ts.className = 'nxg-time';
            ts.textContent = time + ' ✓';
            bubble.appendChild(body);
            bubble.appendChild(ts);

            wrap.appendChild(av);
            wrap.appendChild(nm);
            wrap.appendChild(bubble);
        }

        thread.appendChild(wrap);
        thread.scrollTop = thread.scrollHeight;
    }

    document.addEventListener('click', function (e) {
        const btn = e.target.closest('.nxg-react button');
        if (!btn) return;
        btn.parentNode.querySelectorAll('button').forEach(b => { if (b !== btn) b.classList.remove('is-on'); });
        btn.classList.toggle('is-on');
    });

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

  {{-- ✅ Sticky CTA --}}
  <div class="nxsticky">
    <a class="nxbtn nxbtn--accent" href="#demoModal" data-modal-target="demoModal">Book Demo</a>
    <a class="nxbtn" target="_blank"
       href="{{ \App\Support\Wa::tutor($tutor->user_id, 'profile') }}">
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
