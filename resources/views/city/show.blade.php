<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  @php $metatitle = $city->meta_title ?? ($city->city_name.' - NXTutors'); @endphp
  @php $metadesc = $city->meta_desc ?? ('Find verified tutors in '.$city->city_name.'. Explore areas and book a tutor.'); @endphp
  @include('include.header')

  @php
    $baseUrl = url('/');
    $pageUrl = url()->current();
    $cityImg = $city->avatar
      ? asset('storage/city/'.$city->avatar)
      : asset('storage/Hero/heroimage-1280.webp');

    $breadcrumb = [
      "@context" => "https://schema.org",
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        ["@type"=>"ListItem","position"=>1,"name"=>"Home","item"=>$baseUrl],
        ["@type"=>"ListItem","position"=>2,"name"=>"India","item"=>url('/city')],
        ["@type"=>"ListItem","position"=>3,"name"=>$hubState,"item"=>url('/city').'#'.\App\Support\Geo::stateSlug($hubState)],
        ["@type"=>"ListItem","position"=>4,"name"=>$city->city_name,"item"=>$pageUrl],
      ],
    ];

    $placeSchema = [
      "@context" => "https://schema.org",
      "@type" => "Place",
      "name" => $city->city_name,
      "url" => $pageUrl,
      "image" => $cityImg,
      "description" => $city->meta_desc ?? ("Explore tutors and local areas in ".$city->city_name),
      "address" => [
        "@type" => "PostalAddress",
        "addressLocality" => $city->city_name,
        "addressRegion" => $hubState,
        "addressCountry" => "IN",
      ],
    ];
  @endphp

  <script type="application/ld+json">{!! json_encode($breadcrumb, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
  <script type="application/ld+json">{!! json_encode($placeSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>

  <style>
    .container{max-width:1100px;margin:auto;padding:18px;}
    .hero{
      background:linear-gradient(180deg, rgba(255,255,255,0.07), rgba(255,255,255,0.02));
      border:1px solid rgba(255,255,255,0.14);
      border-radius:18px;
      padding:16px;
      display:flex;
      gap:16px;
      align-items:center;
      color:#fff;
    }
    .hero img{
      width:130px;height:130px;object-fit:cover;border-radius:16px;
      border:1px solid rgba(255,255,255,0.12);
    }
    .hero h1{margin:0;font-size:30px;font-weight:900;}
    .hero p{margin:6px 0 0 0;opacity:.85;max-width:700px}
    .chip{
      display:inline-block;margin-top:10px;
      font-size:12px;padding:6px 12px;border-radius:999px;
      background:rgba(76,141,255,0.18);color:#9fb4ff;
      border:1px solid rgba(76,141,255,0.22);
      font-weight:800;
    }

    .filterbar{display:flex;gap:10px;flex-wrap:wrap;align-items:center;margin-top:14px}
    .filterbar input{
      background:rgba(255,255,255,0.06);
      border:1px solid rgba(255,255,255,0.12);
      color:#fff;
      padding:10px 12px;
      border-radius:12px;
      width:90%;
      outline:none;
    }
    .filterbar input::placeholder{color:rgba(255,255,255,0.55)}
    .filterbar button{
      border-radius:12px;
      padding:10px 16px;
      font-weight:800;
    }

    .grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-top:16px}
    @media(max-width:980px){.grid-3{grid-template-columns:repeat(2,1fr)}}
    @media(max-width:580px){.grid-3{grid-template-columns:1fr}.filterbar input{min-width:100%}}

    .area-card{
      background:linear-gradient(180deg, rgba(255,255,255,0.06), rgba(255,255,255,0.03));
      border:1px solid rgba(255,255,255,0.12);
      border-radius:16px;
      padding:14px;
      transition:.25s ease;
      color:#fff;
    }
    .area-card:hover{
      transform:translateY(-4px);
      box-shadow:0 14px 35px rgba(0,0,0,.45);
      border-color:rgba(255,255,255,0.22);
    }
    .area-name{margin:0;font-size:16px;font-weight:900;}
    .area-meta{margin-top:6px;font-size:13px;opacity:.8}
    .area-actions{display:flex;gap:10px;margin-top:12px}
    .btn-outline{
      background:transparent;border:1px solid rgba(255,255,255,0.22);color:#fff;
      padding:10px 16px;border-radius:999px;font-weight:800;text-align:center;flex:1;
    }
    .btn-outline:hover{background:rgba(255,255,255,0.08);border-color:rgba(255,255,255,0.35)}
    /* hero stacks on phones instead of squeezing the text beside the image */
    @media(max-width:640px){
      .city-hero{flex-direction:column;align-items:flex-start}
      .city-hero img{width:88px;height:88px}
      .city-hero h1{font-size:26px}
    }
  </style>
</head>

<body class="page">
<div class="shell">
<main class="main">
  <div class="container">

    <nav class="nx-crumbs" aria-label="Breadcrumb">
      <a href="{{ url('/') }}">Home</a> <span aria-hidden="true">›</span>
      <a href="{{ url('/city') }}">India</a> <span aria-hidden="true">›</span>
      <a href="{{ url('/city') }}#{{ \App\Support\Geo::stateSlug($hubState) }}">{{ $hubState }}</a> <span aria-hidden="true">›</span>
      <span aria-current="page">{{ $city->city_name }}</span>
    </nav>

    <div class="hero city-hero">
      <img src="{{ $cityImg }}" alt="Home tutors in {{ $city->city_name }}" width="130" height="130">
      <div>
        {{-- The bare city name said nothing a parent searches for. The old
             name is added in brackets because "Gurgaon" still out-searches
             "Gurugram" several times over. --}}
        @php $cityAka = \App\Support\Geo::akaOf((string) $city->slug); @endphp
        <h1>Home &amp; Online Tutors in {{ $city->city_name }}@if($cityAka) ({{ $cityAka }})@endif</h1>
        <p>{{ $city->city_desc }}</p>
        <ul class="nx-stats">
          @if($hubCounts['tutors'] > 0)<li><strong>{{ number_format($hubCounts['tutors']) }}</strong><span>verified tutors</span></li>@endif
          @if($allAreas->count() > 0)<li><strong>{{ number_format($allAreas->count()) }}</strong><span>areas covered</span></li>@endif
          @if($hubPages->count() > 0)<li><strong>{{ number_format($hubPages->count()) }}</strong><span>subject &amp; board pages</span></li>@endif
          <li><strong>Free</strong><span>demo class</span></li>
        </ul>
      </div>
    </div>

    {{-- The home page's suggested-tutor cards and Ask NXT AI, tuned to this city. --}}
    @include('partials.page-assist', [
      'assistTeachers' => $hubTutors,
      'assistTitle' => 'Suggested home tutors in '.$city->city_name,
      'assistSub' => 'Verified tutors near you, sorted by reviews and rating',
      'aiPage' => ['type' => 'city', 'city' => $city->city_name],
    ])

    {{-- Subject pages for this city (or the national ones). --}}
    @php $citySubjects = \App\Support\SubjectLinks::forCity($city->slug); @endphp
    @if(count($citySubjects))
      <section class="nx-sec" aria-labelledby="bySubjectTitle">
        <div class="nx-sec__head"><h2 class="nx-sec__title" id="bySubjectTitle">Home tutors in {{ $city->city_name }} by subject</h2></div>
        <ul class="nx-chips nx-chips--rail">
          @foreach($citySubjects as $sp)<li><a class="nx-chip" href="{{ $sp['url'] }}">{{ $sp['label'] }}</a></li>@endforeach
        </ul>
      </section>
    @endif

    {{-- Areas: search + cards (nine, more by AJAX), then every area as a
         chip. The first chips show; the rest sit in "Show all", still in the
         HTML, because the cards' AJAX is not something search engines click. --}}
    @if($allAreas->count())
    <section class="nx-sec" aria-labelledby="allAreasTitle">
      <div class="nx-sec__head">
        <div>
          <h2 class="nx-sec__title" id="allAreasTitle">Find tutors in your area of {{ $city->city_name }}</h2>
          <p class="nx-sec__sub">{{ number_format($allAreas->count()) }} sectors and societies. Open yours for the nearest tutors, subjects and fees.</p>
        </div>
      </div>

      <div class="filterbar">
        <input type="text" id="areaSearch" placeholder="Search your sector or society…" autocomplete="off">
      </div>
      <div class="grid-3" id="areasGrid">
        @include('city.partials.area-cards', ['areas' => $areas])
      </div>
      <div style="margin-top:16px;text-align:center;">
        <button id="loadMoreAreas" class="nxbtn btn-accent"
                data-offset="{{ $areas->count() }}"
                data-url="{{ route('city.areas.load', $city->slug) }}">Load more areas</button>
      </div>

      @php
        $chipAreas = $allAreas->map(fn ($a) => ['url' => url('/city/'.$city->slug.'/'.$a->slug), 'name' => \App\Support\CityHub::cleanAreaName($a->name, $a->slug)]);
        $chipFirst = $chipAreas->take(24);
        $chipRest = $chipAreas->slice(24);
      @endphp
      <h3 class="nx-card__kicker" style="margin:var(--nxt-s6) 0 var(--nxt-s3)">All {{ number_format($allAreas->count()) }} areas A–Z</h3>
      <ul class="nx-chips">
        @foreach($chipFirst as $c)<li><a class="nx-chip" href="{{ $c['url'] }}">{{ $c['name'] }}</a></li>@endforeach
      </ul>
      @if($chipRest->count())
        <details class="nx-more">
          <summary><span class="nx-more__closed">Show all {{ number_format($allAreas->count()) }} areas</span><span class="nx-more__open">Show fewer</span></summary>
          <ul class="nx-chips">
            @foreach($chipRest as $c)<li><a class="nx-chip" href="{{ $c['url'] }}">{{ $c['name'] }}</a></li>@endforeach
          </ul>
        </details>
      @endif
    </section>
    @endif

    {{-- The city's own subject / board pages as tabs (JEE, NEET, IB …). All
         panels are in the HTML; CSS shows one at a time. With area pages
         the full lists live there, so a city shows twelve per tab plus
         "Show all"; without them this is the only path, so all are listed. --}}
    @if(count($hubTracks))
    <section class="nx-sec" aria-labelledby="popTitle">
      <div class="nx-sec__head">
        <div>
          <h2 class="nx-sec__title" id="popTitle">Popular tutor searches in {{ $city->city_name }}</h2>
          <p class="nx-sec__sub">Home tutors by board and exam — pick one to see subjects, classes and localities.</p>
        </div>
      </div>
      <div class="nx-tabs">
        <div class="nx-tabs__bar" role="tablist">
          @foreach($hubTracks as $key => $list)
            <input class="nx-tabs__radio" type="radio" name="popTracks" id="popTrack-{{ $key }}" @if($loop->first) checked @endif>
            <label class="nx-tabs__tab" for="popTrack-{{ $key }}" role="tab">{{ \App\Support\CityHub::TRACKS[$key][0] }}<small>{{ $list->count() }}</small></label>
          @endforeach
        </div>
        <div class="nx-tabs__panels">
        @foreach($hubTracks as $key => $list)
          @php $shown = $allAreas->count() ? $list->take(12) : $list->take(30); $more = $allAreas->count() ? $list->slice(12)->take(60) : $list->slice(30); @endphp
          <div class="nx-tabs__panel" role="tabpanel">
            <h3 class="nx-tabs__panel-title">{{ \App\Support\CityHub::TRACKS[$key][0] }} home tutors</h3>
            <ul class="nx-chips">
              @foreach($shown as $gp)<li><a class="nx-chip" href="{{ url('/p/'.$gp->slug) }}">{{ $gp->title }}</a></li>@endforeach
            </ul>
            @if($more->count())
              <details class="nx-more">
                <summary><span class="nx-more__closed">Show {{ number_format($more->count()) }} more</span><span class="nx-more__open">Show fewer</span></summary>
                <ul class="nx-chips">
                  @foreach($more as $gp)<li><a class="nx-chip" href="{{ url('/p/'.$gp->slug) }}">{{ $gp->title }}</a></li>@endforeach
                </ul>
              </details>
            @endif
          </div>
        @endforeach
        </div>
      </div>
    </section>
    @endif

    {{-- Long-form, city-specific guide where one has been written
         (resources/views/city/content/<slug>.blade.php). --}}
    @includeIf('city.content.' . $city->slug, ['city' => $city, 'allAreas' => $allAreas, 'hubCounts' => $hubCounts])

    @php
      $faqAreas = $allAreas->take(5)->map(fn ($a) => \App\Support\CityHub::cleanAreaName($a->name, $a->slug))->implode(', ');
      $cityFaqs = [
        ['How much does a home tutor cost in '.$city->city_name.'?',
         'Fees depend on the class, the subject and the tutor\'s experience. Across NXTutors most sessions fall between ₹800 and ₹2,500 an hour, with board-exam, IB and JEE/NEET preparation at the upper end. You see each tutor\'s fee before the demo class.'],
        ['Which areas of '.$city->city_name.' do your tutors cover?',
         $allAreas->count()
           ? 'Tutors currently cover '.$allAreas->count().' areas of '.$city->city_name.', including '.$faqAreas.'. Each area page lists the tutors nearest to it.'
           : 'We match tutors by locality and pincode anywhere in '.$city->city_name.'. If no home tutor is close enough, we arrange an online tutor instead.'],
        ['Which boards and exams do tutors in '.$city->city_name.' teach?',
         'CBSE, ICSE and ISC, IB and IGCSE for Classes 6 to 12, plus JEE and NEET preparation, at home or online.'],
        ['Is the first class free?',
         'Yes. The first session is a free demo class, so you can judge the tutor\'s teaching style before deciding. If the fit is not right, we suggest another tutor.'],
      ];
      $cityFaqLd = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => array_map(fn ($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]], $cityFaqs),
      ];
    @endphp
    <section class="nx-sec" aria-labelledby="faqTitle">
      <div class="nx-sec__head">
        <h2 class="nx-sec__title" id="faqTitle">Home tuition in {{ $city->city_name }}: common questions</h2>
      </div>
      <div class="nx-faq">
        @foreach($cityFaqs as $f)
          <details class="nx-faq__item" @if($loop->first) open @endif><summary>{{ $f[0] }}</summary><p>{{ $f[1] }}</p></details>
        @endforeach
      </div>
    </section>
    <script type="application/ld+json">{!! json_encode($cityFaqLd, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>

    @if($hubGuides->count())
    <section class="nx-sec" aria-labelledby="guideTitle">
      <div class="nx-sec__head">
        <h2 class="nx-sec__title" id="guideTitle">Guides for {{ $city->city_name }} parents and students</h2>
        <a class="nx-sec__action" href="{{ url('/blog') }}">All guides →</a>
      </div>
      <div class="nx-rail">
        @foreach($hubGuides->take(8) as $g)
          <a class="nx-card" href="{{ url('/blog/'.$g->slug) }}">
            <span class="nx-card__kicker">{{ \App\Support\BlogTopics::TOPICS[\App\Support\BlogTopics::of($g->slug)] }}</span>
            <span class="nx-card__title">{{ $g->title }}</span>
            <span class="nx-card__meta">Read the guide →</span>
          </a>
        @endforeach
      </div>
    </section>
    @endif

    <section class="nx-sec" aria-labelledby="nearTitle">
      <div class="nx-sec__head">
        <h2 class="nx-sec__title" id="nearTitle">Home tutors in other cities</h2>
        <a class="nx-sec__action" href="{{ url('/city') }}">All cities by state →</a>
      </div>
      @if($hubNearby->count())
        <h3 class="nx-card__kicker" style="margin:0 0 var(--nxt-s3)">Nearby in {{ $hubState }}{{ in_array($city->slug, ['delhi-ncr','gurugram','faridabad']) ? ' and NCR' : '' }}</h3>
        <ul class="nx-chips nx-chips--rail" style="margin-bottom:var(--nxt-s5)">
          @foreach($hubNearby as $n)<li><a class="nx-chip" href="{{ url('/city/'.$n->slug) }}">{{ $n->city_name }}</a></li>@endforeach
        </ul>
      @endif
      <h3 class="nx-card__kicker" style="margin:0 0 var(--nxt-s3)">Across India</h3>
      <ul class="nx-chips nx-chips--rail">
        @foreach($hubOthers as $n)<li><a class="nx-chip" href="{{ url('/city/'.$n->slug) }}">{{ $n->city_name }}</a></li>@endforeach
      </ul>
    </section>

  </div>

</main>

@include('include.footer')
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

  const grid = document.getElementById('areasGrid');
  const loadBtn = document.getElementById('loadMoreAreas');
  const input = document.getElementById('areaSearch');

  if (!grid || !loadBtn || !input) return;

  let loading = false;
  let timer = null;

  function queryString(offset){
    const q = (input.value || '').trim();
    const params = new URLSearchParams();
    params.set('offset', offset);
    if(q) params.set('q', q);
    return params.toString();
  }

  async function loadAreas(reset=false){
    if(loading) return;
    loading = true;

    const url = loadBtn.getAttribute('data-url');
    let offset = reset ? 0 : parseInt(loadBtn.getAttribute('data-offset') || '0', 10);

    loadBtn.disabled = true;
    loadBtn.textContent = 'Loading...';

    try{
      const res = await fetch(url + '?' + queryString(offset), {
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
      });

      const html = await res.text();

      if(reset){
        grid.innerHTML = '';
        loadBtn.setAttribute('data-offset', '0');
      }

      if(!html || html.trim().length === 0){
        loadBtn.textContent = 'No more areas';
        loadBtn.disabled = true;
        loadBtn.style.opacity = '0.7';
        return;
      }

      grid.insertAdjacentHTML('beforeend', html);

      const tmp = document.createElement('div');
      tmp.innerHTML = html.trim();
      const count = tmp.querySelectorAll('.area-card').length;

      offset += count;
      loadBtn.setAttribute('data-offset', offset);

      if(count < 9){
        loadBtn.textContent = 'No more areas';
        loadBtn.disabled = true;
        loadBtn.style.opacity = '0.7';
      }else{
        loadBtn.textContent = 'Load More';
        loadBtn.disabled = false;
        loadBtn.style.opacity = '1';
      }

    }catch(e){
      console.error(e);
      loadBtn.textContent = 'Try again';
      loadBtn.disabled = false;
    }finally{
      loading = false;
    }
  }

  // ✅ Load more button
  loadBtn.addEventListener('click', function(){
    loadAreas(false);
  });

  // ✅ Typing search (debounce)
  input.addEventListener('input', function(){
    clearTimeout(timer);

    // reset load button state on new search
    loadBtn.disabled = false;
    loadBtn.style.opacity = '1';
    loadBtn.textContent = 'Load More';

    timer = setTimeout(() => {
      loadAreas(true); // reset + load first page
    }, 350); // typing rukne ke 350ms baad search
  });

});
</script>


</body>
</html>
