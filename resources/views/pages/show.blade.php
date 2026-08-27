<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{{ $page->meta_title ?? $page->title }}</title>
  <meta name="description" content="{{ $page->meta_description }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- ✅ SEO SAFE SCALE: Noindex + Canonical --}}
  @php
    // payload me store() se aapka seo controls aata hai
    $payload = is_array($page->payload) ? $page->payload : [];

    $indexFlag = (string) data_get($payload, 'index_flag', 'Index');        // Index | Noindex | Skip

    $isNoindex = ($indexFlag === 'Noindex');

    // $canonicalUrl and $isNoindex both come from GeneratedPageController::show().
    // The canonical is worked out there — it has to decide whether this page's
    // canonical_target is a route the app can actually serve — so don't
    // recompute it here. Two copies of that rule is how one of them goes stale.
    $canonicalUrl = $canonicalUrl ?? url()->current();
  @endphp

  <meta name="robots" content="{{ $isNoindex ? 'noindex,follow' : 'index,follow' }}">

  {{-- Optional OG --}}
  <meta property="og:url" content="{{ $canonicalUrl }}">
  <meta property="og:title" content="{{ $page->meta_title ?? $page->title }}">
  <meta property="og:description" content="{{ $page->meta_description }}">

  @include('include.header')

  {{-- ============================= --}}
  {{-- ✅ JSON-LD SCHEMAS (FIXED) --}}
  {{-- ============================= --}}
  @php
    /**
     * schemas may be:
     * - null
     * - JSON string (recommended)
     * - array (legacy)
     */
    $schemas = [];

    if (is_string($page->schemas)) {
        $decoded = json_decode($page->schemas, true);
        if (is_array($decoded)) {
            $schemas = $decoded;
        }
    } elseif (is_array($page->schemas)) {
        $schemas = $page->schemas;
    }
  @endphp

  @foreach($schemas as $schemaJson)
    <script type="application/ld+json">{!! $schemaJson !!}</script>
  @endforeach
</head>
<link rel="stylesheet" href="{{ asset('frount/assets/css/genpage-premium.css') }}?v={{ @filemtime(base_path('public/frount/assets/css/genpage-premium.css')) ?: ($nxtAssetV ?? 1) }}">

 

<body class="page">
  <div class="shell">

    <main class="main">
      <section class="genp-wrap">
        <div class="genp-frame">

          {{-- ============================= --}}
          {{-- TOP META --}}
          {{-- ============================= --}}
          <div class="genp-top">
            <div class="genp-breadcrumb">
              <a href="/" class="genp-link">Home</a>
              <span class="genp-sep">›</span>
              <a href="/page" class="genp-link">Pages</a>
              <span class="genp-sep">›</span>
              <span class="genp-current">{{ $page->title }}</span>
            </div>

            <div class="genp-meta">
              <span class="genp-pill">{{ $page->city }} • {{ $page->location }}</span>

              @if($page->service_mode)
                <span class="genp-pill genp-pill--muted">
                  {{ ucfirst($page->service_mode) }}
                </span>
              @endif

              @if($page->is_premium)
                <span class="genp-pill genp-pill--gold">Premium Zone</span>
              @endif
            </div>
          </div>

          {{-- ============================= --}}
          {{-- STRUCTURED SECTIONS --}}
          {{-- ============================= --}}
          @php
            $sections   = is_array($page->sections) ? $page->sections : [];
            $faqs       = is_array($page->faqs) ? $page->faqs : [];
            $interlinks = is_array($page->interlinks) ? $page->interlinks : [];
          @endphp

          @if(!empty($sections))

            {{-- ================= HERO ================= --}}
            <section class="nxsec nxhero">
              <div class="nxhero__left">
                <h1 class="nxh1">
                  {{ data_get($sections,'hero.headline', $page->title) }}
                </h1>

                <p class="nxlead">
                  {{ data_get($sections,'hero.subheadline', $page->meta_description) }}
                </p>

                @php $high = data_get($sections,'hero.highlights', []); @endphp
                @if(is_array($high) && count($high))
                  <div class="nxchips">
                    @foreach(array_slice($high, 0, 6) as $h)
                      <span class="nxchip">{{ $h }}</span>
                    @endforeach
                  </div>
                @endif

                <div class="nxcta-row">
                  <a class="nxbtn btn-accent" href="#demoModal" data-modal-target="demoModal">
                    Book a Demo
                  </a>
                  <a class="nxbtn btn-accent nxbtn--ghost" href="#tutorModal" data-modal-target="tutorModal">
                    Chat on WhatsApp
                  </a>
                </div>
              </div>

              <div class="nxhero__right">
                <div class="nxcard nxcard--glass">
                  <div class="nxcard__title">Quick Match</div>
                  <div class="nxcard__text">
                    Tell us your requirement — we’ll share verified tutors in
                    <b>{{ $page->city }}</b>.
                  </div>
                  <ul class="nxcard__list">
                    <li>Verified tutors</li>
                    <li>Personalized learning</li>
                    <li>Flexible {{ ucfirst($page->service_mode ?? 'home') }} sessions</li>
                  </ul>
                </div>
              </div>
            </section>
<section class="nxsec">
  <div class="nxsplit">
    {{-- SUBJECTS CONTENT --}}
    @php $subc = data_get($sections,'subjects_content'); @endphp
    @if(is_array($subc) && !empty($subc))
      <div class="nxpanel">
        <div class="nxsec__head">
          <h2 class="nxh2">{{ data_get($subc,'title','What You’ll Learn') }}</h2>
          @if(data_get($subc,'intro')) <p class="nxlead">{{ data_get($subc,'intro') }}</p> @endif
        </div>

        @php $bul = (array) data_get($subc,'bullets',[]); @endphp
        @if(count($bul))
          <div class="nxlist">
            @foreach($bul as $b)
              <div class="nxlist__item">{{ $b }}</div>
            @endforeach
          </div>
        @endif
      </div>
    @endif

    {{-- SYLLABUS CONTENT --}}
    @php $sy = data_get($sections,'syllabus_content'); @endphp
    @if(is_array($sy) && !empty($sy))
      <div class="nxpanel">
        <div class="nxsec__head">
          <h2 class="nxh2">{{ data_get($sy,'title','Syllabus & Topic Plan') }}</h2>
          @if(data_get($sy,'note')) <p class="nxlead">{{ data_get($sy,'note') }}</p> @endif
        </div>

        @php $topics = (array) data_get($sy,'topics',[]); @endphp
        @if(count($topics))
          <div class="nxlist">
            @foreach($topics as $t)
              <div class="nxlist__item">{{ $t }}</div>
            @endforeach
          </div>
        @endif
      </div>
    @endif
    {{-- ================= NXTUTORS TOOLS ================= --}}
@php $tools = data_get($sections,'nxtutors_tools'); @endphp
@if(is_array($tools) && !empty($tools))
<div class="nxpanel">
  <div class="nxsec__head">
    <h2 class="nxh2">{{ data_get($tools,'title','NXTutors Tools & Process') }}</h2>
  </div>
  @php $bul = (array) data_get($tools,'bullets',[]); @endphp
  @if(count($bul))
    <div class="nxlist">
      @foreach($bul as $b)
        <div class="nxlist__item">{{ $b }}</div>
      @endforeach
    </div>
  @endif
  </div>
    @endif
    @php $wn = data_get($sections,'whats_new'); @endphp
@if(is_array($wn) && !empty($wn))
<div class="nxpanel">
  <div class="nxsec__head">
    <h2 class="nxh2">{{ data_get($wn,'title',"What’s New in {$page->location}") }}</h2>
  </div>
  @php $bul = (array) data_get($wn,'bullets',[]); @endphp
  @if(count($bul))
    <div class="nxlist">
      @foreach($bul as $b)
        <div class="nxlist__item">{{ $b }}</div>
      @endforeach
    </div>
  @endif
  </div>
    @endif
  </div>
</section>

 

{{-- ================= HOME VS ONLINE ================= --}}
@php $hvo = data_get($sections,'home_vs_online'); @endphp
@if(is_array($hvo) && !empty($hvo))
<section class="nxsec">
  <div class="nxsec__head">
    <h2 class="nxh2">{{ data_get($hvo,'title','Home Tutor vs Online Tutor') }}</h2>
    <p class="nxlead">Choose the right mode for {{ $page->location }}, {{ $page->city }}.</p>
  </div>

  <div class="nxtwo-grid">
    <div class="nxbox">
      <h3 class="nxh3" style="margin:0 0 10px;">Home Tutoring</h3>
      <div class="nxlist">
        @foreach((array)data_get($hvo,'home_points',[]) as $p)
          <div class="nxlist__item">{{ $p }}</div>
        @endforeach
      </div>
    </div>

    <div class="nxbox">
      <h3 class="nxh3" style="margin:0 0 10px;">Online Tutoring</h3>
      <div class="nxlist">
        @foreach((array)data_get($hvo,'online_points',[]) as $p)
          <div class="nxlist__item">{{ $p }}</div>
        @endforeach
      </div>
    </div>
  </div>

  @if(data_get($hvo,'best_for'))
    <p class="nxlead" style="margin-top:12px;">
      <strong>Best for:</strong> {{ data_get($hvo,'best_for') }}
    </p>
  @endif
</section>
@endif

 


            {{-- ================= WHY CHOOSE ================= --}}
            <section class="nxsec">
              <div class="nxsec__head">
                <h2 class="nxh2">
                  {{ data_get($sections,'why_choose.title','Why Parents Choose NXTutors') }}
                </h2>
              </div>

              <div class="nxgrid">
                @foreach((array)data_get($sections,'why_choose.points', []) as $p)
                  <div class="nxcard nxcard--soft">
                    <div class="nxcard__text">{{ $p }}</div>
                  </div>
                @endforeach
              </div>
            </section>
 
 @php
  $localSchools = is_array($page->local_schools) ? array_values($page->local_schools) : [];
  $localInstitutes = is_array($page->local_institutes) ? array_values($page->local_institutes) : [];
@endphp

@if(count($localSchools) || count($localInstitutes))
<section class="nxsec">
  <div class="nxsec__head">
    <h2 class="nxh2">Nearby Schools & Learning Hubs</h2>
    <p class="nxlead">Top local references around {{ $page->location }}, {{ $page->city }}</p>
  </div>

  <div class="nxtwo-grid">

    @if(count($localSchools))
      <div class="nxbox">
        <h3 class="nxh3" style="margin:0 0 10px;">Top Schools Nearby</h3>
        <div class="nxmini-grid" id="nxSchoolsGrid"></div>
      </div>
    @endif

    @if(count($localInstitutes))
      <div class="nxbox">
        <h3 class="nxh3" style="margin:0 0 10px;">Top Coaching Institutes Nearby</h3>
        <div class="nxmini-grid" id="nxInstitutesGrid"></div>
      </div>
    @endif

  </div>
 
  <script>
    window.NX_LOCAL_SCHOOLS = @json($localSchools);
    window.NX_LOCAL_INSTITUTES = @json($localInstitutes);
  </script>
</section>
@endif

@php $ps = data_get($sections,'premium_schools_fit'); @endphp
@if(is_array($ps))
<section class="nxsec">
  <div class="nxsec__head">
    <h2 class="nxh2">{{ data_get($ps,'title','Premium Schools Fit') }}</h2>
    <p class="nxlead">{{ data_get($ps,'note','') }}</p>
  </div>

  <div class="nxschoolfit__grid">
    @foreach((array) data_get($ps,'schools',[]) as $sc)
      @php
        $name = (string) data_get($sc,'name','Premium School');
        $board = (string) data_get($sc,'board','');
        $reason = (string) data_get($sc,'fit_reason','');
      @endphp

      <div class="nxschoolfit__card">
        <div class="nxschoolfit__name">{{ $name }}</div>

        <div class="nxschoolfit__meta">
          {{ $board ?: (count((array)$page->boards) ? implode(' • ', array_slice((array)$page->boards,0,3)) : 'CBSE • ICSE • IB') }}
        </div>

        <div class="nxschoolfit__reason">{{ $reason }}</div>
      </div>
    @endforeach
  </div>
</section>
@endif



            {{-- ================= SERVICES ================= --}}
            <section class="nxsec">
                <div class="nxsplit">
                   <div class="nxpanel">
              <div class="nxsec__head">
                <h2 class="nxh2">
                  {{ data_get($sections,'services.title','Services Offered') }}
                </h2>
              </div>



              <div class="nxlist">
                @foreach((array)data_get($sections,'services.items', []) as $it)
                  <div class="nxlist__item">{{ $it }}</div>
                @endforeach
              </div>
            </div>
             <div class="nxpanel">
               @if(count($faqs))
            
                <div class="nxsec__head">
                  <h2 class="nxh2">FAQs</h2>
                </div>

                <div class="nxfaq">
                  @foreach($faqs as $i => $f)
                    <details class="nxfaq__item" @if($i===0) open @endif>
                      <summary class="nxfaq__q">{{ $f['q'] ?? '' }}</summary>
                      <div class="nxfaq__a">{{ $f['a'] ?? '' }}</div>
                    </details>
                  @endforeach
                </div>
             
            @endif
             </div>
          </div>
            </section>

           @php
  $localReviews = is_array($page->local_reviews) ? $page->local_reviews : [];

  // helper (paste once in file)
  if(!function_exists('reviewImgUrl')){
    function reviewImgUrl($img){
      if(!$img) return asset('storage/reviews/student-1.jpg');
      if(str_starts_with($img,'http')) return $img;
      return asset('storage/reviews/'.$img);
    }
  }
@endphp

@if(count($localReviews))
<section class="nxsec">
  <div class="nxsec__head">
    <h2 class="nxh2">Parents Reviews in {{ $page->location }}, {{ $page->city }}</h2>
    <p class="nxlead">Recent experiences shared by parents & students (4★–5★)</p>
  </div>

  <div class="nxreview-wrap">
    <button class="nxreview-arrow nxreview-arrow--prev" type="button" aria-label="Previous">‹</button>
    <button class="nxreview-arrow nxreview-arrow--next" type="button" aria-label="Next">›</button>

    <div class="nxreview-track" id="reviewTrack">
      @foreach($localReviews as $r)
        <article class="nxreview-card">
          <div class="nxreview-top">
            <!-- <img class="nxreview-avatar"
                 src="{{ reviewImgUrl($r['image'] ?? null) }}"
                 alt="{{ $r['name'] ?? 'Parent' }}"
                 onerror="this.src='{{ asset('frount/assets/images/tutor1.jpg') }}'"> -->

            <div class="nxreview-meta">
              <div class="nxreview-name">{{ $r['name'] ?? 'Parent' }}</div>
              <div class="nxreview-sub">
  @php
    $rating = round((float)($r['rating'] ?? 5), 1); // 4.8, 4.2
    $full   = (int) floor($rating);
    $empty  = 5 - $full;
    $count  = $r['count'] ?? null; // 46
  @endphp

  <span class="nxstars">
    @for($i = 0; $i < $full; $i++) ★ @endfor
    @for($i = 0; $i < $empty; $i++) ☆ @endfor
  </span>

  <span class="nxrating-text">
    {{ number_format($rating, 1) }}
    @if($count) ({{ $count }}) @endif
  </span>

  <span>•</span>
  <span>{{ $r['date'] ?? '' }}</span>
</div>

              @if(!empty($r['location']))
                <div class="nxreview-loc">{{ $r['location'] }}</div>
              @endif
            </div>
          </div>

          <p class="nxreview-text">{{ $r['review'] ?? '' }}</p>
        </article>
      @endforeach
    </div>
<div class="nxreview-dots" id="reviewDots"></div>
    
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const track = document.getElementById('reviewTrack');
  const prev = document.querySelector('.nxreview-arrow--prev');
  const next = document.querySelector('.nxreview-arrow--next');
  if(!track) return;

  const cards = Array.from(track.querySelectorAll('.nxreview-card'));
  if(!cards.length) return;

  const gap = 14; // same as CSS gap
  const step = () => (cards[0]?.offsetWidth || 360) + gap;

  function clamp(n, min, max){
    return Math.max(min, Math.min(n, max));
  }

  function getIndex(){
    return clamp(
      Math.round(track.scrollLeft / step()),
      0,
      cards.length - 1
    );
  }

  function scrollToIndex(i){
    track.scrollTo({
      left: i * step(),
      behavior: 'smooth'
    });
  }

  // ======================
  // ARROWS
  // ======================
  prev?.addEventListener('click', () => {
    scrollToIndex(getIndex() - 1);
    resetAuto();
  });

  next?.addEventListener('click', () => {
    scrollToIndex(getIndex() + 1);
    resetAuto();
  });

  // ======================
  // AUTO PLAY
  // ======================
  let timer = null;
  const interval = 4000; // 4 seconds

  function startAuto(){
    stopAuto();
    timer = setInterval(() => {
      const idx = getIndex();
      const nextIdx = (idx + 1) % cards.length;
      scrollToIndex(nextIdx);
    }, interval);
  }

  function stopAuto(){
    if(timer){
      clearInterval(timer);
      timer = null;
    }
  }

  function resetAuto(){
    stopAuto();
    startAuto();
  }

  // ======================
  // UX BEHAVIOR
  // ======================

  // Pause on hover (desktop)
  track.addEventListener('mouseenter', stopAuto);
  track.addEventListener('mouseleave', startAuto);

  // Reset autoplay after manual scroll/swipe
  let scrollT = null;
  track.addEventListener('scroll', () => {
    clearTimeout(scrollT);
    scrollT = setTimeout(resetAuto, 300);
  });

  // Pause when tab hidden
  document.addEventListener('visibilitychange', () => {
    document.hidden ? stopAuto() : startAuto();
  });

  // Init
  startAuto();
});
</script>


@endif



            {{-- ================= TUTORS (DB) ================= --}}
@if(isset($teachers) && $teachers->count())
<section class="nxsec">
  <div class="nxsec__head">
    <h2 class="nxh2">Top Tutors in {{ $page->location }}, {{ $page->city }}</h2>
    <p class="nxlead">Sorted by reviews & rating</p>
  </div>

  <div class="nxgrid" id="teachersGrid">
    @include('pages.partials.teacher-cards', ['teachers' => $teachers])
  </div>

  <div style="margin-top:16px;text-align:center;">
    <button
      id="loadMoreTeachers"
      class="nxbtn  btn-accent"
      data-offset="4"
      data-url="{{ route('genpage.teachers', $page->slug) }}"
    >
      Load More
    </button>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const btn = document.getElementById('loadMoreTeachers');
  const grid = document.getElementById('teachersGrid');
  if (!btn || !grid) return;

  let loading = false;

  btn.addEventListener('click', async () => {
    if (loading) return;
    loading = true;

    const url = btn.getAttribute('data-url');
    let offset = parseInt(btn.getAttribute('data-offset') || '0', 10);

    btn.disabled = true;
    btn.textContent = 'Loading...';

    try {
      const res = await fetch(url + '?offset=' + offset, {
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
      });
      const html = await res.text();

      if (!html || html.trim().length === 0) {
        btn.textContent = 'No more tutors';
        btn.style.opacity = '0.7';
        return;
      }

      grid.insertAdjacentHTML('beforeend', html);
      offset += 4;
      btn.setAttribute('data-offset', offset);
      btn.textContent = 'Load More';
      btn.disabled = false;

      // If less than 4 cards returned, disable
      const tmp = document.createElement('div');
      tmp.innerHTML = html.trim();
      if (tmp.querySelectorAll('.nxcard').length < 6) {
        btn.textContent = 'No more tutors';
        btn.disabled = true;
        btn.style.opacity = '0.7';
      }

    } catch (e) {
      console.error(e);
      btn.textContent = 'Try again';
      btn.disabled = false;
    } finally {
      loading = false;
    }
  });
});
</script>
@endif


@if(isset($relatedPages) && $relatedPages->count())
<section class="nxsec nxrel">
  <div class="nxsec__head nxrel__head">
    <div>
      <h2 class="nxh2">Related Tutor Pages</h2>
      <p class="nxlead">Explore more areas & subjects near {{ $page->city }}</p>
    </div>

    <div class="nxrel__controls">
      <button class="nxrel__btn" type="button" data-rel-prev aria-label="Scroll left">‹</button>
      <button class="nxrel__btn" type="button" data-rel-next aria-label="Scroll right">›</button>
    </div>
  </div>

  <div class="nxrel__track" id="nxRelTrack">
    @foreach($relatedPages as $rp)
      <a class="nxrel__card" href="{{ route('pages.show', $rp->slug) }}">
        <div class="nxrel__top">
          <div class="nxrel__title">{{ $rp->title }}</div>
          <span class="nxrel__chip">View</span>
        </div>
        <div class="nxrel__meta">{{ $rp->city }} • {{ $rp->location }}</div>
      </a>
    @endforeach
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const track = document.getElementById('nxRelTrack');
  if(!track) return;

  const prev = document.querySelector('[data-rel-prev]');
  const next = document.querySelector('[data-rel-next]');

  const step = () => {
    const card = track.querySelector('.nxrel__card');
    const gap = 12;
    return (card ? card.getBoundingClientRect().width : 320) + gap;
  };

  prev?.addEventListener('click', () => track.scrollBy({ left: -step(), behavior: 'smooth' }));
  next?.addEventListener('click', () => track.scrollBy({ left:  step(), behavior: 'smooth' }));
});
</script>
@endif
{{-- ================= BLOGS (DB) ================= --}}
@if(isset($blogs) && $blogs->count())
<section class="nxsec">
  <div class="nxsec__head">
    <h2 class="nxh2">Blog & Advice</h2>
<p class="nxlead">
  Useful guides for parents and students in
  <strong>{{ $page->location }}, {{ $page->city }}</strong>.
  Read tips on choosing the right tutor, exam planning and subject-wise improvement.
</p>
  </div>

  <div class="bloggrid" id="blogsGrid">
    @include('pages.partials.blog-cards', ['blogs' => $blogs])
  </div>

  <div style="margin-top:16px;text-align:center;">
    <button id="loadMoreBlogs"
            class="nxbtn  btn-accent"
            data-offset="6"
            data-url="{{ route('genpage.blogs', $page->slug) }}">
      Load More Blogs
    </button>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const btn = document.getElementById('loadMoreBlogs');
  const grid = document.getElementById('blogsGrid');
  if (!btn || !grid) return;

  let loading = false;

  btn.addEventListener('click', async function () {
    if (loading) return;
    loading = true;

    const url = btn.getAttribute('data-url');
    let offset = parseInt(btn.getAttribute('data-offset') || '0', 10);

    btn.disabled = true;
    btn.textContent = 'Loading...';

    try {
      const res = await fetch(url + '?offset=' + offset, {
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
      });
      const html = await res.text();

      if (!html || html.trim().length === 0) {
        btn.textContent = 'No more blogs';
        btn.style.opacity = '0.7';
        return;
      }

      grid.insertAdjacentHTML('beforeend', html);
      offset += 6;
      btn.setAttribute('data-offset', offset);

      btn.textContent = 'Load More Blogs';
      btn.disabled = false;

      // if less than 6 returned -> disable
      const tmp = document.createElement('div');
      tmp.innerHTML = html.trim();
      if (tmp.querySelectorAll('.blogcard').length < 6) {
        btn.textContent = 'No more blogs';
        btn.disabled = true;
        btn.style.opacity = '0.7';
      }

    } catch (e) {
      console.error(e);
      btn.textContent = 'Try again';
      btn.disabled = false;
    } finally {
      loading = false;
    }
  });
});
</script>
@endif


{{-- ================= MAP ================= --}}
@if(!empty($mapQuery))
  <div class="map-wrap" style="margin-top:14px;border-radius:16px;overflow:hidden;border:1px solid rgba(255,255,255,.12)">
    <iframe
  src="{{ $mapEmbedUrl }}"
  width="100%"
  height="360"
  style="border:0;border-radius:16px"
  loading="lazy"
  referrerpolicy="no-referrer-when-downgrade">
</iframe>
  </div>
@endif



            {{-- ================= FAQ ================= --}}
            

            {{-- ================= FINAL CTA ================= --}}
            <section class="nxsec">
              <div class="nxcta">
                <div class="nxcta__left">
                  <h2 class="nxh2">
                    {{ data_get($sections,'cta.headline',"Get the right tutor in {$page->location}, {$page->city}") }}
                  </h2>
                  <p class="nxlead">
                    {{ data_get($sections,'cta.microcopy','Share your requirement and get matched fast.') }}
                  </p>
                </div>

                <div class="nxcta__right">
                  <a class="nxbtn btn-accent  w-100 mb-2" href="#">
                    {{ data_get($sections,'cta.primary_button_text','Book a Demo on WhatsApp') }}
                  </a>
                  <a class="nxbtn btn-accent nxbtn--ghost w-100" href="#tutorModal" data-modal-target="tutorModal">
                    Become a Tutor Partner
                  </a>
                </div>
              </div>
            </section>

          @else
            {{-- FALLBACK (old HTML pages) --}}
            <article class="genp-content">
              {!! $page->html !!}
            </article>
          @endif

        </div>
      </section>
    </main>

    @include('include.footer')
<script>
document.addEventListener('DOMContentLoaded', function () {

  const schools = Array.isArray(window.NX_LOCAL_SCHOOLS) ? window.NX_LOCAL_SCHOOLS : [];
  const institutes = Array.isArray(window.NX_LOCAL_INSTITUTES) ? window.NX_LOCAL_INSTITUTES : [];

  const schoolsGrid = document.getElementById("nxSchoolsGrid");
  const institutesGrid = document.getElementById("nxInstitutesGrid");

  const TAKE = 2;
  const INTERVAL_MS = 5000;

  let sIndex = 0;
  let iIndex = 0;

  function esc(str) {
    return String(str ?? "")
      .replaceAll("&", "&amp;")
      .replaceAll("<", "&lt;")
      .replaceAll(">", "&gt;")
      .replaceAll('"', "&quot;")
      .replaceAll("'", "&#039;");
  }

  function getPair(arr, start, take) {
    const n = arr.length;
    if (!n) return [];
    if (n <= take) return arr;

    const out = [];
    for (let k = 0; k < take; k++) {
      out.push(arr[(start + k) % n]);
    }
    return out;
  }

  function renderSchools() {
    if (!schoolsGrid || !schools.length) return;

    const pair = getPair(schools, sIndex, TAKE);

    schoolsGrid.innerHTML = pair.map(s => `
      <div class="nxmini-card">
        <div class="nxmini-title">${esc(s.name)}</div>
        <div class="nxmini-sub">${esc(s.area)}</div>
        <span class="nxpill">${esc(s.type || "School")}</span>
      </div>
    `).join("");

    sIndex = (sIndex + TAKE) % schools.length;
  }

  function renderInstitutes() {
    if (!institutesGrid || !institutes.length) return;

    const pair = getPair(institutes, iIndex, TAKE);

    institutesGrid.innerHTML = pair.map(i => `
      <div class="nxmini-card">
        <div class="nxmini-title">${esc(i.name)}</div>
        <div class="nxmini-sub">${esc(i.area)}</div>
        <span class="nxpill nxpill--soft">${esc(i.specialty || "Coaching")}</span>
      </div>
    `).join("");

    iIndex = (iIndex + TAKE) % institutes.length;
  }

  // First render
  renderSchools();
  renderInstitutes();

  // Rotate every 5 seconds
  setInterval(() => {
    renderSchools();
    renderInstitutes();
  }, INTERVAL_MS);

});
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const wrap = document.getElementById('nxRelWrap');
  if(!wrap) return;

  const prev = document.querySelector('[data-rel-prev]');
  const next = document.querySelector('[data-rel-next]');

  const step = () => (wrap.querySelector('.nxrel-card')?.offsetWidth || 300) + 12;

  prev?.addEventListener('click', () => wrap.scrollBy({ left: -step(), behavior:'smooth' }));
  next?.addEventListener('click', () => wrap.scrollBy({ left:  step(), behavior:'smooth' }));
});
</script>

  </div>
</body>
</html>
