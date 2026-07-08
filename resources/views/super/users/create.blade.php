@extends('super.layouts.app')
@section('title','Create User')

@section('content')
<h3 class="mb-3">Create User</h3>

<div class="card border-0 shadow-sm">
  <div class="card-body">
    @if($errors->any())
      <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ route('super.users.store') }}">
      @csrf
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Name</label>
          <input name="name" class="form-control" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Role</label>
          <select name="role" class="form-select" required>
            @foreach($roles as $role)
              <option value="{{ $role }}">{{ $role }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="mt-3">
        <button class="btn btn-dark">Create</button>
        <a href="{{ route('super.users.index') }}" class="btn btn-outline-secondary">Back</a>
      </div>
    </form>
  </div>
</div>
@endsection
