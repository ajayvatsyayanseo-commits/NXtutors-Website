<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  @php
    $metatitle = 'Home Tutors in India: Cities We Serve, by State | NXTutors';
    $metadesc = 'Verified home tutors in ' . $city->count() . ' Indian cities, grouped by state: Delhi NCR, Gurugram, Mumbai, Bengaluru, Kolkata and more. Online tutoring everywhere in India.';
  @endphp
  @include('include.header')

  @php
    $baseUrl = url('/');
    $pageUrl = url()->current();

    $breadcrumb = [
      "@context" => "https://schema.org",
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        ["@type"=>"ListItem","position"=>1,"name"=>"Home","item"=>$baseUrl],
        ["@type"=>"ListItem","position"=>2,"name"=>"India","item"=>$pageUrl],
      ],
    ];

    $items = [];
    $pos = 1;

    foreach($city as $c){
      $img = $c->avatar
        ? asset('storage/city/'.$c->avatar)
        : asset('storage/Hero/heroimage-1280.webp');

      $cityUrl = !empty($c->slug) ? url('/city/'.$c->slug) : url('/city/'.$c->id);

      $items[] = [
        "@type" => "ListItem",
        "position" => $pos++,
        "item" => [
          "@type" => "Place",
          "name" => $c->city_name,
          "url"  => $cityUrl,
          "image"=> $img
        ]
      ];
    }

    $cityListSchema = [
      "@context" => "https://schema.org",
      "@type" => "ItemList",
      "name" => "Cities where NXTutors has home tutors",
      "numberOfItems" => count($items),
      "itemListElement" => $items,
    ];
  @endphp

  <script type="application/ld+json">{!! json_encode($breadcrumb, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
  <script type="application/ld+json">{!! json_encode($cityListSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>

  <style>
    .container{max-width:1100px;margin:auto;padding:18px;}
    .title{color:#fff;font-size:34px;font-weight:800;margin:0 0 12px 0}

    .filterbar{display:flex;gap:10px;flex-wrap:wrap;align-items:center;margin-top:8px}
    .filterbar input{
      background:rgba(255,255,255,0.06);
      border:1px solid rgba(255,255,255,0.12);
      color:#fff;
      padding:20px 15px;
      border-radius:12px;
       width:100%;
      outline:none;
    }
    .filterbar input::placeholder{color:rgba(255,255,255,0.55)}
    @media(max-width:580px){.filterbar input{min-width:100%}}

    .grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-top:16px}
    @media(max-width:980px){.grid-3{grid-template-columns:repeat(2,1fr)}}
    @media(max-width:580px){.grid-3{grid-template-columns:1fr}}

    /* ✅ City card */
    .city-card{
      background:linear-gradient(180deg, rgba(255,255,255,0.06), rgba(255,255,255,0.03));
      border:1px solid rgba(255,255,255,0.12);
      border-radius:16px;
      padding:14px;
      transition:.25s ease;
      color:#fff;
    }
    .city-card:hover{
      transform:translateY(-4px);
      box-shadow:0 14px 35px rgba(0,0,0,.45);
      border-color:rgba(255,255,255,0.22);
    }
    .city-img{
      width:100%;
      height:170px;
      /*object-fit:cover;*/
      border-radius:14px;
      border:1px solid rgba(255,255,255,0.12);
      display:block;
    }
    .city-name{
      margin:12px 0 4px 0;
      font-size:16px;
      font-weight:900;
      color:#fff;
    }
    .city-desc{
      font-size:13px;
      opacity:.8;
      min-height:34px;
    }
    .city-actions{display:flex;gap:10px;margin-top:12px}
    .city-name a{color:#fff;text-decoration:none}
    .crumbs{font-size:13px;opacity:.75;margin-bottom:8px;color:#fff}
    .crumbs a{color:#c9d6ff}
    .lede{color:#fff;opacity:.85;max-width:820px;line-height:1.6;margin:0 0 14px}
    .state-jump{list-style:none;display:flex;flex-wrap:wrap;gap:8px;margin:0 0 10px;padding:0}
    .state-jump a{display:inline-block;padding:6px 12px;border-radius:999px;border:1px solid rgba(255,255,255,.18);color:#c9d6ff;font-size:13px;text-decoration:none}
    .state-block{margin-top:28px;scroll-margin-top:90px}
    .state-h{color:#fff;font-size:22px;font-weight:900;margin:0}
    .btn-outline{
      background:transparent;border:1px solid rgba(255,255,255,0.22);color:#fff;
      padding:10px 16px;border-radius:999px;font-weight:800;text-align:center;flex:1;
    }
    .btn-outline:hover{background:rgba(255,255,255,0.08);border-color:rgba(255,255,255,0.35)}
  </style>
</head>

<body class="page">
<div class="shell">
<main class="main">
  <div class="container">
    {{-- India → state → city. Each state is an anchored section so the home
         page and city pages can link to /city#<state>; no separate state URLs. --}}
    @php
      $geoCounts = \App\Support\Geo::counts();
      $geoStates = \App\Support\Geo::groupByState($city->filter(fn ($c) => !empty($c->slug)));
    @endphp

    <nav class="crumbs" aria-label="Breadcrumb"><a href="{{ url('/') }}">Home</a> › <span>India</span></nav>
    <h1 class="title">Home Tutors in India: Cities We Serve</h1>
    <p class="lede">
      NXTutors matches families with verified home tutors in {{ $city->count() }} cities across
      {{ count(array_diff(array_keys($geoStates), [\App\Support\Geo::OTHER_STATE])) }} states and union territories,
      and with online tutors anywhere in India. Choose your state and city to see local tutors, the areas they cover,
      subjects, boards and fees. Every family gets a free demo class before committing.
    </p>

    <ul class="state-jump">
      @foreach($geoStates as $state => $list)
        <li><a href="#{{ \App\Support\Geo::stateSlug($state) }}">{{ $state }}</a></li>
      @endforeach
    </ul>

    {{-- ✅ Filter (Front-end only search) --}}
    <div class="filterbar">
      <input type="text" id="citySearch" placeholder="Search city name...">
    </div>

    @foreach($geoStates as $state => $list)
      <section class="state-block" id="{{ \App\Support\Geo::stateSlug($state) }}">
        <h2 class="state-h">Home tutors in {{ $state }}</h2>
        <div class="grid-3">
          @foreach($list as $c)
            @php
              $n = $geoCounts[$c->slug] ?? ['tutors' => 0, 'areas' => 0, 'pages' => 0];
              $aka = \App\Support\Geo::akaOf($c->slug);
              $cityUrl = url('/city/'.$c->slug);
            @endphp
            <div class="city-card" data-name="{{ strtolower($c->city_name.' '.$aka.' '.$state) }}">
              <h3 class="city-name"><a href="{{ $cityUrl }}">Home tutors in {{ $c->city_name }}</a></h3>
              <div class="city-desc">
                {{ $state }}@if($aka) · also known as {{ $aka }}@endif
                @if($n['tutors'] > 0 || $n['areas'] > 0)
                  <br><strong>
                    @if($n['tutors'] > 0){{ number_format($n['tutors']) }} verified tutors @endif
                    @if($n['tutors'] > 0 && $n['areas'] > 0) · @endif
                    @if($n['areas'] > 0){{ number_format($n['areas']) }} areas covered @endif
                  </strong>
                @else
                  <br>Home tutors on request, online tutoring available now.
                @endif
              </div>
              <div class="city-actions">
                <a class="btn-outline" href="{{ $cityUrl }}">Tutors in {{ $c->city_name }}</a>
              </div>
            </div>
          @endforeach
        </div>
      </section>
    @endforeach

  </div>
</main>

@include('include.footer')
</div>

<script>
document.addEventListener('DOMContentLoaded', function(){
  const input = document.getElementById('citySearch');
  const cards = document.querySelectorAll('.city-card');

  input.addEventListener('input', function(){
    const q = (input.value || '').toLowerCase().trim();
    cards.forEach(card => {
      const name = card.getAttribute('data-name') || '';
      card.style.display = name.includes(q) ? '' : 'none';
    });
    document.querySelectorAll('.state-block').forEach(block => {
      const any = [...block.querySelectorAll('.city-card')].some(c => c.style.display !== 'none');
      block.style.display = any ? '' : 'none';
    });
  });
});
</script>

</body>
</html>
