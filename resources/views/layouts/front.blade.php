<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  @php
    $metatitle = $__env->yieldContent('title', 'NXTutors');
    $metadesc = $__env->yieldContent('meta_desc', '');
  @endphp
  @include('include.header')
  @stack('head')
</head>
<body class="page">
<div class="shell">
  <main class="main">
    @yield('content')
  </main>
  @include('include.footer')
</div>
@stack('scripts')
</body>
</html>
