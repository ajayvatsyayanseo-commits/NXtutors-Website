@extends('super.layouts.app')
@section('title','Users')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h3 class="mb-0">Users</h3>
  <a href="{{ route('super.users.create') }}" class="btn btn-primary">+ Create User</a>
</div>

<div class="card border-0 shadow-sm">
  <div class="table-responsive">
    <table class="table table-striped mb-0">
      <thead>
        <tr>
          <th>#</th><th>Name</th><th>Email</th><th>Role</th><th>Created</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $u)
        <tr>
          <td>{{ $u->id }}</td>
          <td>{{ $u->name }}</td>
          <td>{{ $u->email }}</td>
          <td>{{ $u->getRoleNames()->first() }}</td>
          <td>{{ $u->created_at?->format('d M Y') }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<div class="mt-3">
  {{ $users->links() }}
</div>
@endsection
