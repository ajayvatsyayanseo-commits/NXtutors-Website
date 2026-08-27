<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $metatitle ?: ($page->main_title ?? 'Privacy Policy') . ' | NXTutors' }}</title>
    <meta name="title" content="{{ $metatitle ?: ($page->main_title ?? 'Privacy Policy') . ' | NXTutors' }}">
    <meta name="keywords" content="{{ $metakey }}">
    <meta name="description" content="{{ $metadesc ?: 'How NXTutors collects, uses and protects the personal information of students, parents and tutors, and how to request access to or deletion of your data.' }}">
    @include('include.header')
</head>
<body class="page">

@include('partials.legal-styles')

<main class="shell">

  <section class="page-hero">
    <div class="page-hero__row">
      <h1 class="page-hero__title">{{ $page->main_title ?? $page->title ?? 'Privacy Policy' }}</h1>

      <nav class="page-hero__crumbs" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a>
        <span class="page-hero__sep" aria-hidden="true">›</span>
        <span aria-current="page">{{ $page->main_title ?? 'Privacy Policy' }}</span>
      </nav>
    </div>
  </section>

  @include('partials.legal-doc', ['page' => $page])

</main>

@include('include.footer')
</body>
</html>
