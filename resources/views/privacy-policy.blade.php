<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $metatitle }}</title>
    <meta name="title" content="{{ $metatitle }}">
    <meta name="keywords" content="{{ $metakey }}">
    <meta name="description" content="{{ $metadesc }}">
    @include('include.header')
</head>
<body>



<main class="main">
  <style>
.page-hero{
  position: relative;
  overflow: hidden;
  background: linear-gradient(135deg, #1f5f99 0%, #2f6da7 100%);
  min-height: 220px;
  display: flex;
  align-items: center;
}

.page-hero::before,
.page-hero::after{
  content: "";
  position: absolute;
  inset: 0;
  pointer-events: none;
}

.page-hero::before{
  background:
    radial-gradient(circle at 15% 100%, rgba(255,255,255,.16) 0, rgba(255,255,255,0) 28%),
    radial-gradient(circle at 85% 0%, rgba(255,255,255,.12) 0, rgba(255,255,255,0) 32%);
}

.page-hero::after{
  background-image:
    repeating-radial-gradient(
      circle at 12% 110%,
      rgba(255,255,255,.16) 0 2px,
      transparent 2px 14px
    ),
    repeating-radial-gradient(
      circle at 88% -10%,
      rgba(255,255,255,.14) 0 2px,
      transparent 2px 14px
    );
  opacity: .55;
}

.page-hero .container{
  position: relative;
  z-index: 2;
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 24px;
}

.page-hero__row{
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 20px;
  min-height: 220px;
}

.page-hero__title{
  margin: 0;
  color: #fff;
  font-size: 56px;
  line-height: 1.1;
  font-weight: 800;
  letter-spacing: -.02em;
}

.page-hero__crumbs{
  display: flex;
  align-items: center;
  gap: 10px;
  flex-wrap: wrap;
  color: rgba(255,255,255,.95);
  font-size: 18px;
  font-weight: 500;
}

.page-hero__crumbs a{
  color: #fff;
  text-decoration: none;
}

.page-hero__crumbs a:hover{
  text-decoration: underline;
}

.page-hero__sep{
  opacity: .9;
  font-size: 24px;
  line-height: 1;
}

@media (max-width: 768px){
  .page-hero{
    min-height: 170px;
  }

  .page-hero__row{
    min-height: 170px;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    gap: 12px;
  }

  .page-hero__title{
    font-size: 38px;
  }

  .page-hero__crumbs{
    font-size: 15px;
  }
}
</style>

<section class="page-hero">
  <div class="container">
    <div class="page-hero__row">
      <h1 class="page-hero__title">{{ $page->title }}</h1>

      <nav class="page-hero__crumbs" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a>
        <span class="page-hero__sep">›</span>
        <span>{{ $page->main_title }}</span>
      </nav>
    </div>
  </div>
</section>
    <section class="gen-wrap">
        <h1>{{ $page->main_title }}</h1>

        @if(!empty($page->avatar))
            <img src="{{ asset('public/storage/page/' . $page->avatar) }}" alt="{{ $page->main_title }}">
        @endif

        <div>
            {!! $page->content !!}
        </div>
    </section>
</main>

@include('include.footer')
</body>
</html>