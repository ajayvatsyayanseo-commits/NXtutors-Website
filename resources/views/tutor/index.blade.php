<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Find Tutors - NXTutors</title>
  <meta name="description" content="Find verified tutors near you.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @include('include.header')

  {{-- ✅ Tutors List Schema (Breadcrumb + ItemList) --}}
  @php
    $baseUrl = url('/');
    $pageUrl = url()->current();

    $breadcrumb = [
      "@context" => "https://schema.org",
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        ["@type"=>"ListItem","position"=>1,"name"=>"Home","item"=>$baseUrl],
        ["@type"=>"ListItem","position"=>2,"name"=>"Tutors","item"=>$pageUrl],
      ],
    ];

    $items = [];
    $pos = 1;

    foreach($teachers as $t){
      $avatar = $t->avatar ?? '';
      $img = ($avatar && str_starts_with($avatar,'http'))
          ? $avatar
          : ($avatar ? asset('storage/user/'.$avatar)
                     : asset('frount/assets/images/tutor1.jpg'));

      $profileUrl = !empty($t->slug) ? route('tutor.show', $t->slug) : url('/tutor/'.$t->user_id);

      $person = [
        "@type" => "Person",
        "name" => $t->name,
        "url" => $profileUrl,
        "image" => $img,
        "address" => [
          "@type" => "PostalAddress",
          "streetAddress" => $t->address ?? "",
          "addressLocality" => $t->city ?? "",
          "addressRegion" => $t->state ?? "",
          "addressCountry" => "IN",
        ],
      ];

      // ✅ rating add only if reviews exist
      $rating  = (float)($t->rating_avg ?? 0);
      $reviews = (int)($t->reviews_count ?? 0);
      if($reviews > 0 && $rating > 0){
        $person["aggregateRating"] = [
          "@type" => "AggregateRating",
          "ratingValue" => number_format($rating, 1, '.', ''),
          "reviewCount" => $reviews
        ];
      }

      $items[] = [
        "@type" => "ListItem",
        "position" => $pos++,
        "url" => $profileUrl,
        "item" => $person,
      ];
    }

    $tutorListSchema = [
      "@context" => "https://schema.org",
      "@type" => "ItemList",
      "name" => "Tutors List",
      "numberOfItems" => count($items),
      "itemListElement" => $items,
    ];
  @endphp

  <script type="application/ld+json">{!! json_encode($breadcrumb, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
  <script type="application/ld+json">{!! json_encode($tutorListSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>

  {{-- Tutor card, filter bar and grid are owned by the design system
       (css/nxt-ds.css). Only this page's container width lives here. --}}
  <style>
    .container{max-width:1100px;margin:auto;}
  </style>
</head>

<body class="page">
<div class="shell">
<main class="main">
  <div class="container">
    <h1 class="title">Find Tutors</h1>

    <form id="tutorFilter" class="filterbar">
      <input type="text" name="q" placeholder="Search name / area" value="{{ request('q') }}">
      <input type="text" name="city" placeholder="City" value="{{ request('city') }}">
      <input type="text" name="subject" placeholder="Subject" value="{{ request('subject') }}">

      <select name="sort">
        <option value="">Recommended</option>
        <option value="rating" @selected(request('sort')==='rating')>Top Rated</option>
      </select>

      <button class="nxbtn btn-accent" type="submit">Search</button>
    </form>

    <div class="grid-3" id="tutorsGrid">
      @include('tutor.partials.cards', ['teachers'=>$teachers])
    </div>

    <div style="margin-top:16px;text-align:center;">
      <button id="loadMoreTutors"
              class="nxbtn btn-accent"
              data-offset="9"
              data-url="{{ route('tutors.load') }}">
        Load More
      </button>
    </div>
  </div>
</main>

@include('include.footer')
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const btn  = document.getElementById('loadMoreTutors');
  const grid = document.getElementById('tutorsGrid');
  const form = document.getElementById('tutorFilter');
  if (!btn || !grid) return;

  let loading = false;

  function qsFromForm(){
    if(!form) return '';
    const params = new URLSearchParams(new FormData(form)).toString();
    return params ? ('&' + params) : '';
  }

  // Search submit -> reset
  form?.addEventListener('submit', async (e)=>{
    e.preventDefault();
    grid.innerHTML = '';
    btn.setAttribute('data-offset', '0');
    btn.disabled = false;
    btn.style.opacity = '1';
    btn.textContent = 'Loading...';
    btn.click();
  });

  btn.addEventListener('click', async () => {
    if (loading) return;
    loading = true;

    const url = btn.getAttribute('data-url');
    let offset = parseInt(btn.getAttribute('data-offset') || '0', 10);

    btn.disabled = true;
    btn.textContent = 'Loading...';

    try {
      const res = await fetch(url + '?offset=' + offset + qsFromForm(), {
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
      });
      const html = await res.text();

      if (!html || html.trim().length === 0) {
        btn.textContent = 'No more tutors';
        btn.style.opacity = '0.7';
        return;
      }

      grid.insertAdjacentHTML('beforeend', html);

      const tmp = document.createElement('div');
      tmp.innerHTML = html.trim();
      const count = tmp.querySelectorAll('.tutor-card').length;

      offset += count;
      btn.setAttribute('data-offset', offset);

      btn.textContent = 'Load More';
      btn.disabled = false;

      if (count < 6) {
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

</body>
</html>
