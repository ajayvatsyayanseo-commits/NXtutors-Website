<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    @php $metatitle = $metatitle ?: ($page->main_title ?? 'Privacy Policy') . ' | NXTutors'; @endphp
    <meta name="keywords" content="{{ $metakey }}">
    @php $metadesc = $metadesc ?: 'How NXTutors collects, uses and protects the personal information of students, parents and tutors, and how to request access to or deletion of your data.'; @endphp
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

  {{-- Added 30 Sep 2026 with the area-page request summaries (App\Support\AreaDemand). --}}
  <section class="legal-note" id="anonymised-requests">
    <h2>Anonymised request summaries</h2>
    <p>To help families see what others nearby look for, our area pages may show short summaries of recent tutor requests: the month, the class, the board and the subject only (for example, "Oct 2026 · Class 10 · CBSE · Maths"). We never show a name, phone number, email address, school, housing society or exact date, and we show these summaries only where there are enough requests that no family can be identified. To ask us to leave your request out, write to support@nxtutors.com.</p>
  </section>

</main>

@include('include.footer')
</body>
</html>
