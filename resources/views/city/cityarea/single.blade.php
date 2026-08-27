<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{{ $area->meta_title ?? ($area->main_title.' - NXTutors') }}</title>
  <meta name="description" content="{{ $area->meta_desc ?? \Illuminate\Support\Str::limit(strip_tags($area->short_desc ?? $area->area_desc ?? ''), 160) }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @include('include.header')
@php use Illuminate\Support\Str; @endphp
  @php
    $baseUrl = url('/');
    $pageUrl = url()->current();

    $city = $area->city;
    $cityUrl = !empty($city?->slug) ? url('/city/'.$city->slug) : url('/city');

    $cityImg = $city?->avatar
      ? asset('storage/city/'.$city->avatar)
      : asset('frount/assets/images/og-default.jpg');

    // -------- Breadcrumb schema ----------
    $breadcrumb = [
      "@context" => "https://schema.org",
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        ["@type"=>"ListItem","position"=>1,"name"=>"Home","item"=>$baseUrl],
        ["@type"=>"ListItem","position"=>2,"name"=>"Cities","item"=>url('/city')],
        ["@type"=>"ListItem","position"=>3,"name"=>$city?->city_name ?? "City","item"=>$cityUrl],
        ["@type"=>"ListItem","position"=>4,"name"=>$area->main_title ?? $area->name,"item"=>$pageUrl],
      ],
    ];

    // -------- Place schema ----------
    $placeSchema = [
      "@context" => "https://schema.org",
      "@type" => "Place",
      "name" => ($area->main_title ?? $area->name),
      "url" => $pageUrl,
      "image" => $cityImg,
      "description" => $area->meta_desc ?? strip_tags($area->short_desc ?? ''),
      "address" => [
        "@type" => "PostalAddress",
        "addressLocality" => $city?->city_name ?? "",
        "postalCode" => $area->pincode ?? "",
        "addressCountry" => "IN",
      ],
    ];

    // -------- Aggregate rating + Reviews schema (only if active reviews) ----------
    $activeReviews = $area->review->where('review_status','t');
    $avg = (float)($area->average_rating ?? 0);
    $countReviews = (int)($activeReviews->count());

    if($countReviews > 0 && $avg > 0){
      $placeSchema["aggregateRating"] = [
        "@type" => "AggregateRating",
        "ratingValue" => number_format($avg, 1, '.', ''),
        "reviewCount" => $countReviews
      ];

      // Put few reviews in schema (Google best practice)
      $placeSchema["review"] = $activeReviews->take(10)->map(function($r) use ($city){
        return [
          "@type" => "Review",
          "author" => ["@type"=>"Person","name"=>$r->username ?? "User"],
          "reviewRating" => ["@type"=>"Rating","ratingValue" => (string)($r->rating ?? 5), "bestRating"=>"5"],
          "reviewBody" => \Illuminate\Support\Str::limit(strip_tags($r->message ?? ''), 240),
          "datePublished" => !empty($r->date) ? $r->date : null,
        ];
      })->filter()->values()->all();
    }

    // -------- FAQ schema ----------
    $faqs = $area->faqs ?? collect();
    $faqSchema = null;

    if($faqs->count()){
      $faqSchema = [
        "@context" => "https://schema.org",
        "@type" => "FAQPage",
        "mainEntity" => $faqs->take(50)->map(function($f){
          return [
            "@type" => "Question",
            "name" => strip_tags($f->question ?? ''),
            "acceptedAnswer" => [
              "@type" => "Answer",
              "text" => trim(strip_tags($f->answer ?? ''))
            ]
          ];
        })->values()->all()
      ];
    }
  @endphp

  <script type="application/ld+json">{!! json_encode($breadcrumb, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
  <script type="application/ld+json">{!! json_encode($placeSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
  @if($faqSchema)
    <script type="application/ld+json">{!! json_encode($faqSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
  @endif
   <link rel="stylesheet" href="{{ asset('frount/assets') }}/css/city-area.css?v={{ $nxtAssetV ?? 1 }}" />
</head>

<body class="page">
<div class="shell">
<main class="main">
  <div class="container">

    {{-- HERO --}}
    <section class="cardx hero">
      <div class="hero-img">
        <img src="{{ $cityImg }}" alt="{{ $city?->city_name ?? 'City' }}">
      </div>

      <div class="hero-body">
        <div class="crumb">
          <a href="{{ url('/') }}">Home</a> <span>›</span>
          <a href="{{ url('/city') }}">Cities</a> <span>›</span>
          <a href="{{ $cityUrl }}">{{ $city?->city_name ?? 'City' }}</a> <span>›</span>
          <span>{{ $area->main_title ?? $area->name }}</span>
        </div>

        <h1 class="hero-title">{{ $area->main_title ?? $area->name }}</h1>

        <p class="hero-sub">
          {!! $area->short_desc ? \Illuminate\Support\Str::limit(strip_tags($area->short_desc), 190) : 'Find verified tutors near you with flexible timing, experienced teachers, and a free demo class.' !!}
        </p>

        <div class="hero-badges">
          @if(!empty($area->pincode))
            <div class="badge">📍 Pincode: <strong>{{ $area->pincode }}</strong></div>
          @endif
          <div class="badge">⭐ Rating: <strong>{{ number_format((float)($area->average_rating ?? 0), 1) }}/5</strong></div>
          <div class="badge">🗣 Reviews: <strong>{{ (int)($area->review?->where('review_status','t')->count() ?? 0) }}</strong></div>
          <div class="badge">✅ Verified Tutors</div>
        </div>

        <div class="hero-cta">
          <a class="btnx primary" href="#tutors">View Tutors</a>
          <a class="btnx" href="#faqs">FAQs</a>
        </div>
      </div>
    </section>

      <section class="cardx block section" id="tutors">
  <h2 class="h2"><span></span>
    @if(($tutorScope ?? 'area') === 'area')
      Tutors Available in {{ $area->main_title ?? $area->name }}
    @else
      No tutors found in this area — Showing tutors in {{ $city->city_name }}
    @endif
  </h2>

  <div class="tutors-grid">
    @php $a=1; @endphp
    @forelse($tutors as $t)
    @if($a<=6)
      @php
        $avatar = $t->avatar ?? '';
        $img = ($avatar && str_starts_with($avatar,'http'))
            ? $avatar
            : ($avatar ? asset('storage/user/'.$avatar)
                      : asset('frount/assets/images/tutor1.jpg'));

        // ✅ Chip text from courses (fallback verified tutor)
        $chip = 'Verified Tutor';
        if (!empty($t->courses) && $t->courses->count()) {
          $c = $t->courses->first();
          $parts = [];
          // Teacher_course me board/category relations ho to ye work karega
          if ($c->board?->cat_title) $parts[] = $c->board->cat_title;
          if ($c->category?->cat_title) $parts[] = $c->category->cat_title;
          if ($parts) $chip = implode(' • ', array_slice($parts,0,2));
        }

        // ✅ rating + reviews (Register->reviews relation)
        $reviewsCount = (int) ($t->reviews?->count() ?? 0);
        $avgRating = (float) ($t->reviews?->avg('rating') ?? 0);
        $rating = number_format($avgRating, 1);

        // ✅ WhatsApp link (number apna set kar lena)
        $waText = "Hi, I want to connect with tutor {$t->name} (UserID: {$t->user_id}).";
        $waText .= " Area: " . ($area->main_title ?? $area->name) . ", " . ($city->city_name ?? '');
        $waNumber = preg_replace('/[^0-9]/', '', $setting->phone);

      $waLink = "https://wa.me/" . $waNumber . "?text=" . urlencode($waText);
 
    $citySlug = Str::slug($t->city ?? $city->name ?? request()->segment(2) ?? 'city');

     $encodedId = rtrim(strtr(base64_encode($t->user_id . '-nxt'), '+/', '-_'), '=');

    $profileLink = route('tutor.newshow', [
        'city' => $citySlug,
        'user_id' => $encodedId,
        'name' => Str::slug($t->name ?? 'tutor'),
    ]);
 
      @endphp

      <div class="tutor-card">
        <div class="tutor-top">
          <div class="tutor-avatar">
            <img src="{{ $img }}" alt="{{ $t->name }}"
                onerror="this.src='{{ asset('frount/assets/images/tutor1.jpg') }}'">
            <span class="badge-verified">✔</span>
          </div>

          <div class="tutor-info">
            <h3 class="tutor-name">{{ $t->name }}</h3>

            <div class="tutor-rating">
              ⭐ {{ $rating }}
              <span>({{ $reviewsCount }} reviews)</span>
            </div>

            <span class="tutor-chip">{{ $chip }}</span>
          </div>
        </div>

        <div class="tutor-location">
          📍 {{ \Illuminate\Support\Str::limit($t->address ?? ($t->city ?? ''), 70) }}
        </div>

        <div class="tutor-actions">
          <a href="{{ $waLink }}" target="_blank" class="btn-accent" rel="nofollow noopener">
            WhatsApp
          </a>

          <a href="{{ $profileLink }}" class="btn-outline">
            View Profile
          </a>
        </div>
      </div>
      @endif
       @php $a++; @endphp
    @empty
      <div class="empty">No tutors available right now.</div>
    @endforelse
  </div>
</section>


    {{-- MAIN GRID --}}
    <section class="grid2 section">

      {{-- LEFT --}}
      <div class="cardx block">

        @if(!empty($area->area_desc))
          <h2 class="h2"><span></span>About this Area</h2>
          <div class="content">{!! $area->area_desc !!}</div>
        @endif

        @if(!empty($area->subjects_covered_desc))
          <div style="margin-top:16px"></div>
          <h2 class="h2"><span></span>Subjects Covered</h2>
          <div class="content">{!! $area->subjects_covered_desc !!}</div>
        @endif

        @if(!empty($area->teacher_approch))
          <div style="margin-top:16px"></div>
          <h2 class="h2"><span></span>Teaching Approach</h2>
          <div class="content">{!! $area->teacher_approch !!}</div>
        @endif

        @if(!empty($area->tutor_types))
          <div style="margin-top:16px"></div>
          <h2 class="h2"><span></span>Tutor Types</h2>
          <div class="content">{!! $area->tutor_types !!}</div>
        @endif

        @if(!empty($area->package))
          <div style="margin-top:16px"></div>
          <h2 class="h2"><span></span>Pricing & Packages</h2>
          <div class="content">{!! $area->package !!}</div>
        @endif

        @if(!empty($area->why_choose))
          <div style="margin-top:16px"></div>
          <h2 class="h2"><span></span>Why Choose NXTutors</h2>
          <div class="content">{!! $area->why_choose !!}</div>
        @endif

        
      </div>

      {{-- RIGHT --}}
      <aside class="sticky">
        <div class="cardx cta">
          <h2 class="h2"><span></span>Book Free Demo</h2>
          <p>Tell us your class, subject & preferred timing. We’ll connect you with a verified tutor.</p>
          <a class="btnx primary" href="{{ url('/contact') }}">Get a Call Back</a>
          <a class="btnx" href="{{ url('/tutors') }}">Explore Tutors</a>
        </div>
        @if(!empty($area->area_map))
          <div style="margin-top:16px"></div>
          <h2 class="h2"><span></span>Area Map</h2>
          <div class="content">  @php $rawHtml = html_entity_decode($area->area_map); @endphp
               {!! $rawHtml !!}  </div>
        @endif
      </aside>

    </section>


    
  
    {{-- REVIEWS --}}
    <section class="cardx block section" id="reviews">
      <h2 class="h2"><span></span>What Students Say</h2>

      @php $reviews = $area->review?->where('review_status','t') ?? collect(); @endphp

      @if($reviews->count())
        <div class="slider-wrap">
          <div class="slider" id="reviewSlider">
            @foreach($reviews as $r)
              <div class="review">
                <div class="review-top">
                  <div>
                    <p class="review-name">{{ $r->username ?? 'User' }}</p>
                    <div class="review-loc">{{ $r->location ?? ($city?->city_name ?? '') }}</div>
                  </div>
                  <div class="stars" aria-label="Rating {{ $r->rating }}/5">
                    {!! str_repeat('★', (int)($r->rating ?? 5)) !!}{!! str_repeat('☆', 5 - (int)($r->rating ?? 5)) !!}
                  </div>
                </div>
                <div class="review-msg">{!! \Illuminate\Support\Str::limit(strip_tags($r->message ?? ''), 260) !!}</div>
              </div>
            @endforeach
          </div>

          <div class="slider-nav">
            <button class="navbtn" type="button" id="revPrev">‹</button>
            <button class="navbtn" type="button" id="revNext">›</button>
          </div>
        </div>
      @else
        <div class="empty">No reviews yet. Be the first to share your experience.</div>
      @endif
    </section>

    {{-- FAQS --}}
    <section class="cardx block section" id="faqs">
      <h2 class="h2"><span></span>FAQs</h2>

      @php $faqs = $area->faqs ?? collect(); @endphp

      @if($faqs->count())
        <div id="faqWrap">
          @foreach($faqs as $i => $f)
            <div class="faq {{ $i===0 ? 'open' : '' }}">
              <button class="faq-btn" type="button">
                <div class="faq-q">{{ $f->question }}</div>
                <div class="faq-icon">{{ $i===0 ? '−' : '+' }}</div>
              </button>
              <div class="faq-a">
                <div class="faq-a-inner">{!! $f->answer !!}</div>
              </div>
            </div>
          @endforeach
        </div>
      @else
        <div class="empty">No FAQs available for this area right now.</div>
      @endif
    </section>




    {{-- RELATED AREAS --}}
@if(isset($relatedAreas) && $relatedAreas->count())
<section class="cardx block section" id="related-areas">
  <h2 class="h2"><span></span>Related Areas in {{ $area->city?->city_name }}</h2>

  <div class="rel-grid">
    @foreach($relatedAreas as $ra)
      <a class="rel-card"
         href="{{ url('/') }}/city/{{ $area->city?->slug }}/{{ $ra->slug }}">
        <div class="rel-title">{{ $ra->main_title ?? $ra->name }}</div>

        @if(!empty($ra->pincode))
          <div class="rel-meta">📍 Pincode: {{ $ra->pincode }}</div>
        @endif

        @if(!empty($ra->short_desc))
          <div class="rel-desc">
            {{ \Illuminate\Support\Str::limit(strip_tags($ra->short_desc), 110) }}
          </div>
        @else
          <div class="rel-desc">Explore tutors & subjects in this area.</div>
        @endif

        <div class="rel-btn">View Tutors →</div>
      </a>
    @endforeach
  </div>
</section>
@endif


  

  </div>
</main>

@include('include.footer')
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

  // =========================
  // Reviews slider arrows
  // =========================
  const slider = document.getElementById('reviewSlider');
  const prev = document.getElementById('revPrev');
  const next = document.getElementById('revNext');

  function scrollByCard(dir){
    if(!slider) return;
    const card = slider.querySelector('.review');
    const w = card ? (card.getBoundingClientRect().width + 12) : 340;
    slider.scrollBy({ left: dir * w, behavior: 'smooth' });
  }

  prev?.addEventListener('click', ()=> scrollByCard(-1));
  next?.addEventListener('click', ()=> scrollByCard(1));

  // =========================
  // FAQ accordion (first open)
  // =========================
  const faqs = document.querySelectorAll('#faqWrap .faq');

  faqs.forEach((box, idx) => {
    const btn = box.querySelector('.faq-btn');
    const icon = box.querySelector('.faq-icon');

    // Ensure first open height
    if(idx === 0){
      box.classList.add('open');
      if(icon) icon.textContent = '−';
    }

    btn?.addEventListener('click', () => {
      // close others
      faqs.forEach((b) => {
        if(b !== box){
          b.classList.remove('open');
          const ic = b.querySelector('.faq-icon');
          if(ic) ic.textContent = '+';
        }
      });

      // toggle current
      const willOpen = !box.classList.contains('open');
      box.classList.toggle('open', willOpen);
      if(icon) icon.textContent = willOpen ? '−' : '+';
    });
  });

});
</script>

</body>
</html>
