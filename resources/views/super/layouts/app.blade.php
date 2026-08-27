<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title','Super Admin')</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link href="{{ asset('super') }}/simple-datatables/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css">
</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('super.dashboard') }}">NXTutors Super Admin</a>

    @auth
      <a class="navbar-brand" href="{{ route('super.settings') }}">Setting</a>
    @endauth

    @auth
      <form method="POST" action="{{ route('super.logout') }}">
        @csrf
        <button class="btn btn-outline-light btn-sm">Logout</button>
      </form>
    @endauth
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    @auth
      <aside class="col-md-2 bg-white border-end min-vh-100 p-3">
        <div class="fw-bold mb-2">Menu</div>
        <div class="list-group">
          <a class="list-group-item list-group-item-action" href="{{ route('super.dashboard') }}">Dashboard</a>
          <a class="list-group-item list-group-item-action" href="{{ route('super.users.index') }}">Users</a>
          <a class="list-group-item list-group-item-action" href="{{ route('super.blog.index') }}">Blog</a>

          <a class="list-group-item list-group-item-action" href="{{ route('super.banner.index') }}">Banner</a>
          <a class="list-group-item list-group-item-action" href="{{ route('super.category.index') }}">Category</a>
          <a class="list-group-item list-group-item-action" href="{{ route('super.city.index') }}">City List</a>

          <a class="list-group-item list-group-item-action" href="{{ route('super.page.index') }}">CMS Pages List</a>
          <a class="list-group-item list-group-item-action" href="{{ route('super.cityarea.index') }}">City Area List</a>
          <a class="list-group-item list-group-item-action" href="{{ route('super.teacher.index') }}">Teacher</a>
          <a class="list-group-item list-group-item-action" href="{{ route('super.teacher.review') }}">Teacher Review</a>
          <a class="list-group-item list-group-item-action" href="{{ route('super.user.index') }}">Student</a>

           <a class="list-group-item list-group-item-action" href="{{ route('super.premium-schools.index') }}">Premium Schools</a>

           <a class="list-group-item list-group-item-action" href="{{ route('super.plans.index') }}">Subscription Plan</a>
          <a class="list-group-item list-group-item-action" href="{{ route('super.pagegen.index') }}">Page Generator</a>
        </div>
      </aside>
    @endauth

    <main class="@auth col-md-10 @else col-12 @endauth p-4">
      @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif

      @yield('content')
    </main>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.ckeditor').forEach(el => {
      ClassicEditor.create(el).catch(console.error);
    });
  });

  function onlyNumberKey(evt) {
    var ASCIICode = (evt.which) ? evt.which : evt.keyCode;
    if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) return false;
    return true;
  }
</script>

<script>
  $(function () {

    // If blogsTable exists then init
    if ($('#blogsTable').length) {
      $('#blogsTable').DataTable({
        pageLength: 10,
        lengthMenu: [10, 25, 50, 100],
        ordering: true,
        searching: true,
        responsive: true,
        columnDefs: [{ orderable: false, targets: [4, 6] }]
      });
    }

    // Generic datatable init
    if ($('.datatable').length) {
      $('.datatable').DataTable({
        pageLength: 10,
        lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        ordering: true,
        searching: true,
        responsive: true,
        language: {
          search: "Search:",
          lengthMenu: "Show _MENU_ entries",
          info: "Showing _START_ to _END_ of _TOTAL_ entries",
          paginate: { first: "First", last: "Last", next: "Next", previous: "Previous" }
        }
      });
    }

  });
</script>

{{-- ✅ MOST IMPORTANT LINE: page scripts (Add More etc.) will load here --}}
@stack('scripts')

</body>
</html>
