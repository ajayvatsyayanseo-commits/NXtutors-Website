<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  @php $metatitle = $blog->meta_title ?: $blog->title; @endphp
  @php $nxtOwnOg = true; @endphp
  @php $metadesc = $blog->meta_desc ?: ''; @endphp

  {{-- OG --}}
  <meta property="og:title" content="{{ $blog->meta_title ?: $blog->title }}">
  <meta property="og:description" content="{{ $blog->meta_desc ?: '' }}">
  <meta property="og:type" content="article">
  <meta property="og:url" content="{{ $canonical }}">
  @if(!empty($blog->avatar))
    <meta property="og:image" content="{{ str_starts_with($blog->avatar,'http') ? $blog->avatar : asset('storage/blog/'.$blog->avatar) }}">
  @endif

  {{-- ✅ JSON-LD Schema --}}
  @php
    $img = !empty($blog->avatar)
      ? (str_starts_with($blog->avatar,'http') ? $blog->avatar : asset('storage/blog/'.$blog->avatar))
      : asset('frount/assets/images/blog1.jpg');

    $published = !empty($blog->date) ? $blog->date : null;

    // bdesc se text extract (safe)
    $plain = trim(preg_replace('/\s+/', ' ', strip_tags($blog->bdesc ?? '')));
    $excerpt = \Illuminate\Support\Str::limit($plain, 180);

    $siteName = 'NXTutors';
    $authorName = !empty($blog->author) ? $blog->author : $siteName;

    $blogPosting = [
      "@context" => "https://schema.org",
      "@type" => "BlogPosting",
      "headline" => $blog->title,
      "description" => $blog->meta_desc ?: $excerpt,
      "image" => [$img],
      "mainEntityOfPage" => [
        "@type" => "WebPage",
        "@id" => $canonical
      ],
      "author" => [
        "@type" => "Person",
        "name" => $authorName
      ],
      "publisher" => [
        "@type" => "Organization",
        "name" => $siteName,
        "logo" => [
          "@type" => "ImageObject",
          "url" => asset('frount/assets/images/logo1.png')
        ]
      ],
    ];

    // Date format safe: agar aapka blog->date already "2025-01-01" jaisa hai to ok.
    // Agar "Jan 1, 2025" jaisa hai, then schema me as-is rahega (Google still accepts often).
    if ($published) {
      $blogPosting["datePublished"] = $published;
      $blogPosting["dateModified"]  = $published;
    }

    $breadcrumb = [
      "@context" => "https://schema.org",
      "@type" => "BreadcrumbList",
      "itemListElement" => [
        [
          "@type" => "ListItem",
          "position" => 1,
          "name" => "Home",
          "item" => url('/')
        ],
        [
          "@type" => "ListItem",
          "position" => 2,
          "name" => "Blog",
          "item" => url('/blog')
        ],
        [
          "@type" => "ListItem",
          "position" => 3,
          "name" => $blog->title,
          "item" => $canonical
        ],
      ]
    ];
  @endphp

  <script type="application/ld+json">{!! json_encode($blogPosting, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
  <script type="application/ld+json">{!! json_encode($breadcrumb, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>

  @include('include.header')
</head>

<body class="page">
<div class="shell">

  <main class="main">

    {{-- ✅ TOP BAR + BREADCRUMB --}}
    <section class="nxsec">
      <div class="genp-top">
        <div class="genp-breadcrumb">
          <a href="{{ url('/') }}" class="genp-link">Home</a>
          <span class="genp-sep">›</span>
          <a href="{{ url('/blog') }}" class="genp-link">Blog</a>
          <span class="genp-sep">›</span>
          <span class="genp-current">{{ $blog->title }}</span>
        </div>

        <div class="genp-meta">
          @if(!empty($authorName))
            <span class="genp-pill">{{ $authorName }}</span>
          @endif
          @if(!empty($blog->date))
            <span class="genp-pill genp-pill--muted">{{ $blog->date }}</span>
          @endif
          <span class="genp-pill genp-pill--gold">Blog</span>
        </div>
      </div>

      {{-- ✅ MODERN HERO CARD --}}
      <article class="nxcard nxcard--soft" style="padding:0;overflow:hidden;">
        <div style="position:relative;">
          <div style="width:100%;height:360px;overflow:hidden;">
            <img src="{{ $img }}" alt="{{ $blog->title }}"
                 style="width:100%;height:100%;object-fit:cover;display:block;">
          </div>

          {{-- overlay gradient --}}
          <div style="position:absolute;inset:0;background:linear-gradient(180deg,rgba(2,6,23,.10),rgba(2,6,23,.85));"></div>

          {{-- title overlay --}}
          <div style="position:absolute;left:18px;right:18px;bottom:16px;z-index:2;">
            <h1 class="nxh1" style="margin:0 0 8px;line-height:1.15;">
              {{ $blog->title }}
            </h1>
            <div style="display:flex;gap:10px;flex-wrap:wrap;opacity:.9;">
              <span class="chip chip--soft">{{ $authorName }}</span>
              @if(!empty($blog->date))
                <span class="chip chip--soft">{{ $blog->date }}</span>
              @endif
              <span class="chip chip--soft">5–7 min read</span>
            </div>
          </div>
        </div>

        {{-- ✅ BODY + SIDEBAR LAYOUT --}}
        <div style="padding:18px;">
          <div class="nx-article-layout">
            {{-- LEFT: Content --}}
            <div>
              <div class="genp-content" style="padding-top:6px;">
                {!! $blog->bdesc !!}
              </div>

              {{-- ✅ Prev/Next Buttons --}}
              <div style="display:flex;gap:12px;flex-wrap:wrap;margin-top:18px;">
                @if($prev)
                  <a class="btn btn-ghost" href="{{ route('blog.show', trim($prev->slug)) }}">
                    ← {{ \Illuminate\Support\Str::limit($prev->title, 42) }}
                  </a>
                @endif

                @if($next)
                  <a class="btn btn-accent" href="{{ route('blog.show', trim($next->slug)) }}">
                    {{ \Illuminate\Support\Str::limit($next->title, 42) }} →
                  </a>
                @endif
              </div>
            </div>

            {{-- RIGHT: Sticky Sidebar --}}
            <aside class="nx-article-aside">
              <div class="nxcard nxcard--soft" style="padding:14px;">
                <div style="font-weight:650;margin-bottom:6px;">Need help finding a tutor?</div>
                <div style="opacity:.85;font-size:13px;line-height:1.55;">
                  Share class, board, location and subject — we’ll suggest verified tutors.
                </div>

                <div style="margin-top:12px;display:flex;flex-direction:column;gap:10px;">
                  <a class="btn btn-accent btn-full" href="#" data-modal-target="demoModal">Book Demo on WhatsApp</a>
                  <a class="btn btn-ghost btn-full" href="{{ url('/city') }}">Find tutors in your city</a>
                </div>
              </div>

              @if(isset($related) && $related->count())
                <div class="nxcard nxcard--soft" style="padding:14px;margin-top:12px;">
                  <div style="font-weight:650;margin-bottom:10px;">More Reads</div>
                  <div style="display:flex;flex-direction:column;gap:10px;">
                    @foreach($related->take(4) as $r)
                      <a href="{{ route('blog.show', trim($r->slug)) }}"
                         style="text-decoration:none;color:inherit;border:1px solid rgba(255,255,255,0.12);border-radius:14px;padding:10px;background:rgba(255,255,255,0.06);">
                        <div style="font-weight:650;font-size:13px;">
                          {{ \Illuminate\Support\Str::limit($r->title, 64) }}
                        </div>
                      </a>
                    @endforeach
                  </div>
                </div>
              @endif
            </aside>
          </div>
        </div>
      </article>
    </section>

    {{-- The home page's suggested tutors and Ask NXT AI, tuned to this guide. --}}
    @include('partials.page-assist', [
      'assistTeachers' => $pageTeachers ?? collect(),
      'assistTitle' => 'Want a tutor for this?',
      'assistSub' => 'Verified tutors, sorted by reviews and rating',
      'aiPage' => ['type' => 'blog', 'topic' => (string) $blog->title],
    ])

    {{-- ✅ RELATED GRID (Full) --}}
    @if(isset($related) && $related->count())
      <section class="nxsec">
        <div class="nxsec__head">
          <h2 class="nxh2">Related Blogs</h2>
          <p class="nxlead">More helpful reads for you</p>
        </div>

        <div class="grid grid--blog">
          @foreach($related as $b)
            @php
              $thumb = !empty($b->avatar)
                ? (str_starts_with($b->avatar,'http') ? $b->avatar : asset('storage/blog/'.$b->avatar))
                : asset('frount/assets/images/blog2.jpg');
            @endphp

            <a href="{{ route('blog.show', trim($b->slug)) }}" class="blog-card" style="text-decoration:none;color:inherit;">
              <div class="blog-thumb">
                <img src="{{ $thumb }}" alt="{{ $b->title }}">
              </div>
              <div class="blog-body">
                <div class="blog-kicker">Blog</div>
                <h3 class="blog-title">{{ $b->title }}</h3>
                <div class="blog-meta">Read more</div>
              </div>
            </a>
          @endforeach
        </div>
      </section>
    @endif

    {{-- Where to go next: a local guide links to its area and city pages;
         any guide links to the rest of its topic and to the tutor directory.
         This is what ties the blog into the city → area structure. --}}
    @php
      $postTopic = \App\Support\BlogTopics::of((string) $blog->slug);
      $postLocality = $postTopic === 'city' ? \App\Support\BlogTopics::localityOf((string) $blog->slug) : null;
      $postArea = $postLocality ? \App\Support\CityHub::areaFor('gurugram', str_replace('-', ' ', $postLocality)) : null;
      $relatedSlugs = isset($related) ? $related->pluck('slug')->map(fn ($s) => trim($s))->all() : [];
      $sameTopic = \Illuminate\Support\Facades\DB::table('blog_managment')
        ->where('status', 't')->where('id', '!=', $blog->id)->whereNotNull('slug')->where('slug', '!=', '')
        ->orderByDesc('id')->get(['title', 'slug'])
        ->filter(fn ($b) => \App\Support\BlogTopics::of($b->slug) === $postTopic
            && ($postLocality === null || \App\Support\BlogTopics::localityOf($b->slug) === $postLocality)
            && ! in_array(trim($b->slug), $relatedSlugs, true))
        ->take(8);
    @endphp
    <section class="nxsec blog-next" aria-labelledby="blogNextTitle">
      <h2 class="nxh2" id="blogNextTitle">
        {{ $postArea ? 'More for families in '.$postArea->name : 'More '.\App\Support\BlogTopics::TOPICS[$postTopic].' guides' }}
      </h2>
      @if($sameTopic->count())
        <ul class="blog-next__list">
          @foreach($sameTopic as $b)
            <li><a href="{{ url('/blog/'.trim($b->slug)) }}">{{ $b->title }}</a></li>
          @endforeach
        </ul>
      @endif
      <p class="blog-next__up">
        @if($postArea)
          <a href="{{ url('/city/gurugram/'.$postArea->slug) }}">Home tutors in {{ $postArea->name }}</a> ·
          <a href="{{ url('/city/gurugram') }}">Home tutors across Gurugram</a> ·
        @else
          <a href="{{ url('/blog') }}#topic-{{ $postTopic }}">All {{ \App\Support\BlogTopics::TOPICS[$postTopic] }} guides</a> ·
        @endif
        <a href="{{ url('/city') }}">Find a home tutor in your city</a>
      </p>
      <style>
        .blog-next__list{list-style:none;margin:10px 0 0;padding:0;columns:2 280px;column-gap:24px}
        .blog-next__list li{break-inside:avoid;padding:4px 0;font-size:14px;line-height:1.4}
        .blog-next a{color:#c9d6ff}
        .blog-next__up{margin-top:12px;line-height:1.8}
      </style>
    </section>

  </main>

  @include('include.footer')

</div>

{{-- Article + sidebar: two columns with room, one column without. The old
     fix targeted .nxcard[style*=grid-template-columns], but the grid lives on
     a child div — the selector never matched, so phones got two crushed
     columns of one word per line. --}}
<style>
.nx-article-layout{
  display:grid;
  grid-template-columns:minmax(0,1.6fr) minmax(0,1fr);
  gap:16px;
  align-items:start;
}
.nx-article-aside{ position:sticky; top:80px; }

@media (max-width: 900px){
  .nx-article-layout{ grid-template-columns:minmax(0,1fr); }
  .nx-article-aside{ position:static; }
}
</style>

</body>
</html>
