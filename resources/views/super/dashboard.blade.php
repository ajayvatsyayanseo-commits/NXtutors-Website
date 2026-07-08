@extends('super.layouts.app')
@section('title','Dashboard')

@section('content')
  <h3 class="mb-3">Dashboard</h3>
  <div class="row g-3">
    <div class="col-md-3">
      <div class="card border-0 shadow-sm">
        <div class="card-body">
          <div class="text-muted">Total Users</div>
          <div class="fs-3 fw-bold">{{ \App\Models\User::count() }}</div>
        </div>
      </div>
    </div>
  </div>
@endsection
