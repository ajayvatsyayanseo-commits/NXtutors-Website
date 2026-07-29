<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Blogs - NXTutors</title>
  <meta name="description" content="Latest blogs and guides by NXTutors">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    /* ====== Page container ====== */
.container{
  max-width:1100px;
  margin:auto;
  padding:18px;
}

.page-head{
  margin-bottom:14px;
}

.title{
  color:#fff;
  font-size:34px;
  font-weight:800;
  margin:0 0 12px 0;
  letter-spacing:.2px;
}

/* ====== Filter Bar ====== */
.filterbar{
  display:flex;
  gap:10px;
  flex-wrap:wrap;
  align-items:center;
  margin-top:8px;
}

.filterbar input,
.filterbar select{
  background:rgba(255,255,255,0.06);
  border:1px solid rgba(255,255,255,0.12);
  color:#fff;
  padding:10px 12px;
  border-radius:12px;
  min-width:220px;
  outline:none;
  transition:.2s ease;
}

.filterbar input::placeholder{
  color:rgba(255,255,255,0.55);
}

.filterbar input:focus,
.filterbar select:focus{
  border-color:rgba(255,199,74,0.65);
  box-shadow:0 0 0 4px rgba(255,199,74,0.12);
}

/* button already exists in your project */
.btn-accent{
  border-radius:999px;
  padding:9px 16px;
  font-weight:700;
}

/* ====== Grid ====== */
.grid-3{
  display:grid;
  grid-template-columns:repeat(3, 1fr);
  gap:14px;
  margin-top:16px;
}

@media(max-width: 980px){
  .grid-3{ grid-template-columns:repeat(2, 1fr); }
  .filterbar input{ min-width:200px; }
}

@media(max-width: 580px){
  .grid-3{ grid-template-columns:1fr; }
  .filterbar input, .filterbar select{ min-width:100%; }
  .btn-accent{ width:auto; }
}

/* ====== Blog Card ====== */
.blog-card{
  display:block;
  text-decoration:none;
  color:#fff;
  border-radius:16px;
  overflow:hidden;
  border:1px solid rgba(255,255,255,0.12);
  background:linear-gradient(180deg, rgba(255,255,255,0.06), rgba(255,255,255,0.03));
  transition:.25s ease;
}

.blog-card:hover{
  transform:translateY(-4px);
  box-shadow:0 14px 35px rgba(0,0,0,.45);
  border-color:rgba(255,255,255,0.22);
}

/* image */
.blog-thumb{
  width:100%;
  height:190px;
  object-fit:cover;
  display:block;
  background:#0b1220;
}

/* body */
.blog-body{
  padding:14px 14px 16px;
}

.blog-title{
  margin:0;
  font-size:15px;
  font-weight:800;
  line-height:1.25;
  color:#fff;
  display:-webkit-box;
  -webkit-line-clamp:2;
  -webkit-box-orient:vertical;
  overflow:hidden;
}

.blog-desc{
  margin:8px 0 0 0;
  font-size:13px;
  line-height:1.5;
  color:rgba(255,255,255,0.72);
  display:-webkit-box;
  -webkit-line-clamp:3;
  -webkit-box-orient:vertical;
  overflow:hidden;
}

/* read more */
.blog-read{
  display:inline-flex;
  align-items:center;
  gap:6px;
  margin-top:10px;
  font-size:13px;
  font-weight:700;
  color:rgba(255,199,74,0.95); /* accent-ish */
  opacity:.95;
}
.blog-card:hover .blog-read{
  opacity:1;
}

/* ====== Load More Button Area ====== */
.center{
  text-align:center;
}
.mt-3{
  margin-top:16px;
}

.btn-outline{
  background:transparent;
  border:1px solid rgba(255,255,255,0.22);
  color:#fff;
  padding:10px 18px;
  border-radius:999px;
  font-weight:700;
  transition:.2s ease;
}

.btn-outline:hover{
  background:rgba(255,255,255,0.08);
  border-color:rgba(255,255,255,0.35);
}

  </style>
  @include('include.header')

  {{-- ✅ Breadcrumb + ItemList Schema --}}
  @php
    $baseUrl = url('/');
    $pageUrl = url()->current();

    $breadcrumb = [
      "@context" => "https://schema.org",
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        ["@type"=>"ListItem","position"=>1,"name"=>"Home","item"=>$baseUrl],
        ["@type"=>"ListItem","position"=>2,"name"=>"Blog","item"=>$pageUrl],
      ],
    ];

    $items = [];
    $pos = 1;

    foreach($blogs as $b){
      $postUrl = url('/blog/'.$b->slug);

      // ✅ your DB uses avatar, not image
      $img = !empty($b->avatar)
        ? (str_starts_with($b->avatar,'http') ? $b->avatar : asset('storage/blog/'.$b->avatar))
        : asset('frount/assets/images/og-default.jpg');

      $plain = trim(preg_replace('/\s+/', ' ', strip_tags($b->short_desc ?? $b->bdesc ?? '')));
      $desc  = \Illuminate\Support\Str::limit($plain, 160);

      $post = [
        "@type" => "BlogPosting",
        "headline" => $b->title,
        "url" => $postUrl,
        "image" => [$img],
        "description" => $desc,
        "author" => [
          "@type" => "Organization",
          "name" => "NXTutors",
          "url" => $baseUrl,
        ],
        "publisher" => [
          "@type" => "Organization",
          "name" => "NXTutors",
          "logo" => [
            "@type" => "ImageObject",
            "url" => asset('frount/assets/images/logo1.png'),
          ],
        ],
      ];

      // ✅ if you have $b->date column like single blog
      if(!empty($b->date)){
        $post["datePublished"] = $b->date;
        $post["dateModified"]  = $b->date;
      }

      $items[] = [
        "@type" => "ListItem",
        "position" => $pos++,
        "url" => $postUrl,
        "item" => $post,
      ];
    }

    $blogListSchema = [
      "@context" => "https://schema.org",
      "@type" => "ItemList",
      "name" => "Blog List",
      "numberOfItems" => count($items),
      "itemListElement" => $items,
    ];
  @endphp

  <script type="application/ld+json">{!! json_encode($breadcrumb, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
  <script type="application/ld+json">{!! json_encode($blogListSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
</head>

<body class="page">
<div class="shell">
<main class="main">

  <section class="nxsec">
    <div class="nxsec__head">
      <h1 class="nxh1">Blogs</h1>

      <form id="blogFilter" class="filterbar">
        <input type="text" name="q" placeholder="Search blogs..." value="{{ request('q') }}">
        <input type="text" name="category" placeholder="Category slug" value="{{ request('category') }}">
        <button class="nxbtn btn-accent" type="submit">Search</button>
      </form>
    </div>

    <div class="bloggrid" id="blogsGrid">
      @include('blog.partials.cards', ['blogs' => $blogs])
    </div>

    <div style="margin-top:16px;text-align:center;">
      <button id="loadMoreBlogs"
              class="nxbtn btn-accent"
              data-offset="9"
              data-url="{{ route('blog.load') }}">
        Load More
      </button>
    </div>
  </section>

</main>

@include('include.footer')
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const btn  = document.getElementById('loadMoreBlogs');
  const grid = document.getElementById('blogsGrid');
  const form = document.getElementById('blogFilter');
  if (!btn || !grid) return;

  let loading = false;

  function qsFromForm(){
    if(!form) return '';
    const params = new URLSearchParams(new FormData(form)).toString();
    return params ? ('&' + params) : '';
  }

  // ✅ Search submit -> reset grid + offset
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
        btn.textContent = 'No more blogs';
        btn.style.opacity = '0.7';
        return;
      }

      grid.insertAdjacentHTML('beforeend', html);

      // ✅ count cards returned
      const tmp = document.createElement('div');
      tmp.innerHTML = html.trim();
      const count = tmp.querySelectorAll('.blog-card, .blogcard').length;

      offset += count;
      btn.setAttribute('data-offset', offset);

      btn.textContent = 'Load More';
      btn.disabled = false;

      if (count < 6) {
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

</body>
</html>
