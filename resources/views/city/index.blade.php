<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Find City - NXTutors</title>
  <meta name="description" content="Find cities where NXTutors is available.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @include('include.header')

  @php
    $baseUrl = url('/');
    $pageUrl = url()->current();

    $breadcrumb = [
      "@context" => "https://schema.org",
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        ["@type"=>"ListItem","position"=>1,"name"=>"Home","item"=>$baseUrl],
        ["@type"=>"ListItem","position"=>2,"name"=>"Cities","item"=>$pageUrl],
      ],
    ];

    $items = [];
    $pos = 1;

    foreach($city as $c){
      $img = $c->avatar
        ? asset('public/storage/city/'.$c->avatar)
        : asset('public/frount/assets/images/og-default.jpg');

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
      "name" => "City List",
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
    <h1 class="title">Find City</h1>

    {{-- ✅ Filter (Front-end only search) --}}
    <div class="filterbar">
      <input type="text" id="citySearch" placeholder="Search city name...">
    </div>

    <div class="grid-3" id="cityGrid">
      @foreach($city as $c)
        @php
          $img = $c->avatar ? asset('public/storage/city/'.$c->avatar) : asset('public/frount/assets/images/og-default.jpg');
          $cityUrl = !empty($c->slug) ? url('/city/'.$c->slug) : url('/city/'.$c->id);
        @endphp

        <div class="city-card" data-name="{{ strtolower($c->city_name) }}">
          <img class="city-img" src="{{ $img }}" alt="{{ $c->city_name }}">

          <div class="city-name">{{ $c->city_name }}</div>

          @if(!empty($c->city_desc))
            <div class="city-desc">{{ (strip_tags($c->city_desc)) }}</div>
          @else
            <div class="city-desc">Explore local tutors and areas in {{ $c->city_name }}.</div>
          @endif

          <div class="city-actions">
            <a class="btn-outline" href="{{ $cityUrl }}">View Areas</a>
            
          </div>
        </div>
      @endforeach
    </div>

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
  });
});
</script>

</body>
</html>
