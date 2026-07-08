<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('title','NXTutors')</title>
  <meta name="description" content="@yield('meta_desc','')">
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
