<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  @include('include.header')

  @php
    $ld = [
      '@context' => 'https://schema.org',
      '@type' => 'CollectionPage',
      'url' => $canonical,
      'name' => $metatitle,
      'inLanguage' => 'en-IN',
      'hasPart' => $authors->map(fn ($a) => ['@type' => empty($a['user_id']) ? 'Organization' : 'Person', 'name' => $a['name'], 'url' => $a['author_url']])->all(),
    ];
  @endphp
  <script type="application/ld+json">{!! json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
</head>

<body class="page">
<div class="shell">
<main class="main">
  <div class="container nx-subject">

    <nav class="nx-crumbs" aria-label="Breadcrumb">
      <a href="{{ url('/') }}">Home</a> <span aria-hidden="true">›</span>
      <span aria-current="page">Authors</span>
    </nav>

    <section class="nx-sec">
      <div class="nx-sec__head">
        <h1 class="nx-sec__title">The tutors who write our guides</h1>
      </div>
      <p class="nx-sec__sub">Every NXTutors guide is written or reviewed by a named tutor who teaches that subject and board, and every syllabus and exam fact is checked against the board's own documents.</p>
    </section>

    <section class="nx-sec" aria-label="Authors">
      <div class="nx-grid">
        @foreach($authors as $a)
          <article class="nx-card nx-author">
            <div class="nx-author__top">
              <img src="{{ $a['image'] ? \App\Support\Thumb::url($a['image'], 160) : asset('frount/assets/images/tutor1.jpg') }}" alt="{{ $a['name'] }}" width="64" height="64" loading="lazy" decoding="async">
              <div>
                <h2 class="nx-card__title"><a href="{{ $a['author_url'] }}">{{ $a['name'] }}</a></h2>
                <span class="nx-card__meta">{{ $a['role'] }}</span>
              </div>
            </div>
            <p class="nx-card__meta">{{ \Illuminate\Support\Str::limit($a['bio'] ?? '', 160) }}</p>
            <a class="nx-sec__action" href="{{ $a['author_url'] }}">{{ $a['pages'] }} guides by {{ strtok($a['name'], ' ') }} →</a>
          </article>
        @endforeach
      </div>
    </section>

  </div>
</main>

@include('include.footer')
</div>
</body>
</html>
