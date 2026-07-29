<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{{ $city->meta_title ?? ($city->city_name.' - NXTutors') }}</title>
  <meta name="description" content="{{ $city->meta_desc ?? ('Find verified tutors in '.$city->city_name.'. Explore areas and book a tutor.') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @include('include.header')

  @php
    $baseUrl = url('/');
    $pageUrl = url()->current();
    $cityImg = $city->avatar
      ? asset('storage/city/'.$city->avatar)
      : asset('frount/assets/images/og-default.jpg');

    $breadcrumb = [
      "@context" => "https://schema.org",
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        ["@type"=>"ListItem","position"=>1,"name"=>"Home","item"=>$baseUrl],
        ["@type"=>"ListItem","position"=>2,"name"=>"Cities","item"=>url('/city')],
        ["@type"=>"ListItem","position"=>3,"name"=>$city->city_name,"item"=>$pageUrl],
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
  </style>
</head>

<body class="page">
<div class="shell">
<main class="main">
  <div class="container">

    <div class="hero">
      <img src="{{ $cityImg }}" alt="{{ $city->city_name }}">
      <div>
        <h1>{{ $city->city_name }}</h1>
        <p>
          {{ $city->city_desc  }}
        </p>
        <span class="chip">Explore Areas</span>
      </div>
    </div>

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
