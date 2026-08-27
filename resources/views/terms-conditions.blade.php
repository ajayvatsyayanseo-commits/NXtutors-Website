<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $metatitle ?: ($page->main_title ?? 'Terms & Conditions') . ' | NXTutors' }}</title>
    <meta name="title" content="{{ $metatitle ?: ($page->main_title ?? 'Terms & Conditions') . ' | NXTutors' }}">
    <meta name="keywords" content="{{ $metakey }}">
    <meta name="description" content="{{ $metadesc ?: 'The terms governing use of NXTutors online and home tuition services — registration, tutor matching, payments and refunds, scheduling, conduct and intellectual property.' }}">
    @include('include.header')
</head>
<body class="page">

@include('partials.legal-styles')

<main class="shell">

  <section class="page-hero">
    <div class="page-hero__row">
      <h1 class="page-hero__title">{{ $page->main_title ?? $page->title ?? 'Terms & Conditions' }}</h1>

      <nav class="page-hero__crumbs" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a>
        <span class="page-hero__sep" aria-hidden="true">›</span>
        <span aria-current="page">{{ $page->main_title ?? 'Terms & Conditions' }}</span>
      </nav>
    </div>
  </section>

  @include('partials.legal-doc', ['page' => $page])

</main>

@include('include.footer')
</body>
</html>
