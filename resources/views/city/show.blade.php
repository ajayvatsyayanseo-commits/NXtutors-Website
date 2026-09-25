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
    .crumbs{font-size:13px;color:#fff;opacity:.75;margin:0 0 10px}
    .crumbs a{color:#c9d6ff}
    .stats{list-style:none;display:flex;flex-wrap:wrap;gap:8px 16px;margin:10px 0 0;padding:0;font-size:14px}
    .stats strong{color:#9fb4ff}
    .blk{margin-top:36px;color:#fff}
    .blk h2,.sub-h{font-size:22px;font-weight:900;margin:0 0 12px;color:#fff}
    .sub-h{margin-top:36px}
    .blk a{color:#c9d6ff}
    .tutor-grid{list-style:none;margin:0;padding:0;display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:12px}
    .tutor-card a{display:grid;grid-template-columns:56px 1fr;grid-template-rows:auto auto;column-gap:12px;align-items:center;padding:12px;border-radius:14px;border:1px solid rgba(255,255,255,.12);text-decoration:none;color:#fff}
    .tutor-card img{grid-row:span 2;width:56px;height:56px;border-radius:50%;object-fit:cover}
    .t-name{font-weight:800}
    .t-meta{font-size:13px;opacity:.7}
    .more{margin-top:10px}
    .track-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:18px}
    .track h3{font-size:15px;font-weight:800;margin:0 0 6px}
    .track ul,.guide-list{list-style:none;margin:0;padding:0}
    .track li,.guide-list li{padding:4px 0;font-size:14px;line-height:1.4}
    .faq{border-bottom:1px solid rgba(255,255,255,.12);padding:10px 0}
    .faq summary{cursor:pointer;font-weight:700}
    .faq p{opacity:.85;margin:8px 0 0;line-height:1.6}
    .all-areas{margin-top:36px;color:#fff}
    .all-areas h2{font-size:22px;font-weight:900;margin:0 0 6px}
    .all-areas p{opacity:.8;margin:0 0 14px;max-width:760px}
    .all-areas__list{list-style:none;margin:0;padding:0;columns:3 220px;column-gap:24px}
    .all-areas__list li{break-inside:avoid;padding:4px 0;font-size:14px}
    .all-areas__list a{color:#c9d6ff;text-decoration:none}
    .all-areas__list a:hover{text-decoration:underline}
  </style>
</head>

<body class="page">
<div class="shell">
<main class="main">
  <div class="container">

    <nav class="crumbs" aria-label="Breadcrumb">
      <a href="{{ url('/') }}">Home</a> ›
      <a href="{{ url('/city') }}">India</a> ›
      <a href="{{ url('/city') }}#{{ \App\Support\Geo::stateSlug($hubState) }}">{{ $hubState }}</a> ›
      <span>{{ $city->city_name }}</span>
    </nav>

    <div class="hero">
      <img src="{{ $cityImg }}" alt="Home tutors in {{ $city->city_name }}">
      <div>
        {{-- The bare city name said nothing a parent searches for. The old
             name is added in brackets because "Gurgaon" still out-searches
             "Gurugram" several times over. --}}
        @php $cityAka = \App\Support\Geo::akaOf((string) $city->slug); @endphp
        <h1>Home &amp; Online Tutors in {{ $city->city_name }}@if($cityAka) ({{ $cityAka }})@endif</h1>
        <p>
          {{ $city->city_desc  }}
        </p>
        <ul class="stats">
          @if($hubCounts['tutors'] > 0)<li><strong>{{ number_format($hubCounts['tutors']) }}</strong> verified tutors</li>@endif
          @if($allAreas->count() > 0)<li><strong>{{ number_format($allAreas->count()) }}</strong> areas covered</li>@endif
          @if($hubPages->count() > 0)<li><strong>{{ number_format($hubPages->count()) }}</strong> subject &amp; board pages</li>@endif
          <li>Free demo class</li>
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

    @if($allAreas->count())
    <h2 class="sub-h">Find tutors in your area of {{ $city->city_name }}</h2>
    {{-- ✅ Search + button --}}
    <div class="filterbar">
  <input type="text" id="areaSearch" placeholder="Search area name..." autocomplete="off">
</div>

    {{-- ✅ Grid --}}
    <div class="grid-3" id="areasGrid">
      @include('city.partials.area-cards', ['areas'=>$areas])
    </div>

    {{-- ✅ Load more --}}
    <div style="margin-top:16px;text-align:center;">
      <button id="loadMoreAreas"
              class="nxbtn btn-accent"
              data-offset="{{ $areas->count() }}"
              data-url="{{ route('city.areas.load', $city->slug) }}">
        Load More
      </button>
    </div>
    @endif

    {{-- Every area as a plain link: the cards above stop at nine and load
         the rest by AJAX, which search engines do not trigger. --}}
    @if(isset($allAreas) && $allAreas->count())
    <section class="all-areas" aria-labelledby="allAreasTitle">
      <h2 id="allAreasTitle">All areas we cover in {{ $city->city_name }}@if($cityAka) ({{ $cityAka }})@endif</h2>
      <p>
        Home tutors for {{ $allAreas->count() }} sectors and societies in {{ $city->city_name }}.
        Open your area to see tutors near you, subjects and fees, and book a free demo class.
      </p>
      <ul class="all-areas__list">
        @foreach($allAreas as $a)
          <li><a href="{{ url('/city/'.$city->slug.'/'.$a->slug) }}">{{ trim((string) $a->name) !== '' ? $a->name : $a->main_title }}</a></li>
        @endforeach
      </ul>
    </section>
    @endif

    {{-- The city's own generated subject / board pages, grouped by track.
         When the city has area pages those carry the full lists and this
         shows a sample; otherwise this is the only path to them, so all are listed. --}}
    @if(count($hubTracks))
    <section class="blk" aria-labelledby="popTitle">
      <h2 id="popTitle">Popular tutor searches in {{ $city->city_name }}</h2>
      <div class="track-grid">
        @foreach($hubTracks as $key => $list)
          <div class="track">
            <h3>{{ \App\Support\CityHub::TRACKS[$key][0] }} home tutors</h3>
            <ul>
              @foreach($allAreas->count() ? $list->take(10) : $list as $gp)
                <li><a href="{{ url('/p/'.$gp->slug) }}">{{ $gp->title }}</a></li>
              @endforeach
            </ul>
          </div>
        @endforeach
      </div>
    </section>
    @endif

    {{-- Long-form, city-specific guide where one has been written
         (resources/views/city/content/<slug>.blade.php). --}}
    @includeIf('city.content.' . $city->slug, ['city' => $city, 'allAreas' => $allAreas, 'hubCounts' => $hubCounts])

    @php
      $faqAreas = $allAreas->take(5)->map(fn ($a) => trim((string) $a->name) !== '' ? $a->name : $a->main_title)->implode(', ');
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
    <section class="blk" aria-labelledby="faqTitle">
      <h2 id="faqTitle">Home tuition in {{ $city->city_name }}: common questions</h2>
      @foreach($cityFaqs as $f)
        <details class="faq"><summary>{{ $f[0] }}</summary><p>{{ $f[1] }}</p></details>
      @endforeach
    </section>
    <script type="application/ld+json">{!! json_encode($cityFaqLd, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>

    <section class="blk" aria-labelledby="nearTitle">
      <h2 id="nearTitle">Home tutors in other cities</h2>
      @if($hubNearby->count())
        <p><strong>Nearby in {{ $hubState }}{{ in_array($city->slug, ['delhi-ncr','gurugram','faridabad']) ? ' and NCR' : '' }}:</strong>
          @foreach($hubNearby as $n)<a href="{{ url('/city/'.$n->slug) }}">{{ $n->city_name }}</a>@if(!$loop->last), @endif @endforeach
        </p>
      @endif
      <p><strong>Across India:</strong>
        @foreach($hubOthers as $n)<a href="{{ url('/city/'.$n->slug) }}">{{ $n->city_name }}</a>@if(!$loop->last), @endif @endforeach
        · <a href="{{ url('/city') }}">All cities by state →</a>
      </p>
    </section>

    @if($hubGuides->count())
    <section class="blk" aria-labelledby="guideTitle">
      <h2 id="guideTitle">Guides for {{ $city->city_name }} parents and students</h2>
      <ul class="guide-list">
        @foreach($hubGuides->take(12) as $g)
          <li><a href="{{ url('/blog/'.$g->slug) }}">{{ $g->title }}</a></li>
        @endforeach
      </ul>
    </section>
    @endif

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
