@extends('super.layouts.app')
@section('title','Super Admin Login')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-4">
    <div class="card shadow-sm border-0">
      <div class="card-body p-4">
        <h4 class="mb-1">Super Admin</h4>
        <p class="text-muted mb-3">Login to manage all access.</p>

        @if($errors->any())
          <div class="alert alert-danger">
            {{ $errors->first() }}
          </div>
        @endif

        <form method="POST" action="{{ route('super.login.post') }}">
          @csrf
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember">
              <label class="form-check-label" for="remember">Remember</label>
            </div>
          </div>
          <button class="btn btn-dark w-100">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
