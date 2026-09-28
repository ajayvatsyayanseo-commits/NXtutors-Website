<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  @php $metatitle = 'Find Tutors - NXTutors'; @endphp
  @php $metadesc = 'Find verified tutors near you.'; @endphp
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
          : ($avatar ? \App\Support\TutorPhoto::url($avatar)
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
      <input type="text" name="subject" placeholder="Subject, e.g. Maths, IELTS" value="{{ request('subject') }}">
      <input type="text" name="city" placeholder="City" value="{{ request('city') }}">
      <input type="text" name="area" placeholder="Sector or area" value="{{ request('area') }}">
      <select name="mode" aria-label="Home or online">
        <option value="">Home or online</option>
        <option value="home" @selected(request('mode')==='home')>Home tutor</option>
        <option value="online" @selected(request('mode')==='online')>Online</option>
      </select>
      <button class="nxbtn btn-accent" type="submit">Search</button>

      {{-- Professional search: collapsed until a parent wants it. --}}
      <details class="nx-more nx-filters" @if(request()->hasAny(['board','class','gender','max_fee','min_exp','min_rating','q'])) open @endif>
        <summary><span class="nx-more__closed">More filters</span><span class="nx-more__open">Fewer filters</span></summary>
        <div class="nx-filters__grid">
          <select name="board" aria-label="Board">
            <option value="">Any board</option>
            @foreach(['CBSE','ICSE','ISC','IB','IGCSE','State Board'] as $b)<option value="{{ $b }}" @selected(request('board')===$b)>{{ $b }}</option>@endforeach
          </select>
          <select name="class" aria-label="Class">
            <option value="">Any class</option>
            @foreach(array_merge(['LKG','UKG'], array_map(fn ($n) => 'Class '.$n, range(1, 12))) as $cl)<option value="{{ $cl }}" @selected(request('class')===$cl)>{{ $cl }}</option>@endforeach
          </select>
          <select name="gender" aria-label="Tutor gender">
            <option value="">Any tutor</option>
            <option value="female" @selected(request('gender')==='female')>Female tutor</option>
            <option value="male" @selected(request('gender')==='male')>Male tutor</option>
          </select>
          <input type="number" name="max_fee" min="100" step="100" placeholder="Max fee ₹/hour" value="{{ request('max_fee') }}">
          <select name="min_exp" aria-label="Experience">
            <option value="">Any experience</option>
            @foreach([2,5,10] as $y)<option value="{{ $y }}" @selected((string) request('min_exp')===(string) $y)>{{ $y }}+ years</option>@endforeach
          </select>
          <select name="min_rating" aria-label="Rating">
            <option value="">Any rating</option>
            @foreach(['4','4.5'] as $r)<option value="{{ $r }}" @selected((string) request('min_rating')===$r)>{{ $r }}★ and above</option>@endforeach
          </select>
          <input type="text" name="q" placeholder="Tutor name" value="{{ request('q') }}">
        </div>
      </details>
    </form>

    <div class="grid-3" id="tutorsGrid">
      @if(isset($filtered) && $filtered !== null)
        @if(count($filtered))
          @include('subjects.partials.tutor-cards', ['cards' => $filtered])
        @else
          <p style="grid-column:1/-1">No tutor matches all of these filters yet. Try fewer filters, or <a href="{{ url('/demo-class') }}">tell us what you need</a> and we will find one.</p>
        @endif
      @else
        @include('tutor.partials.cards', ['teachers'=>$teachers])
      @endif
    </div>

    @if(!isset($filtered) || $filtered === null || count($filtered) >= 9)
    <div style="margin-top:16px;text-align:center;">
      <button id="loadMoreTutors"
              class="nxbtn btn-accent"
              data-offset="9"
              data-url="{{ route('tutors.load') }}">
        Load More
      </button>
    </div>
    @endif
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
