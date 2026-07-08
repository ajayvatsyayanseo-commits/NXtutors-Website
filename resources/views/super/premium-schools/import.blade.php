@extends('super.layouts.app')
@section('title','Import Premium Schools')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h3 class="mb-0">Import Premium Schools</h3>
  <a class="btn btn-outline-secondary" href="{{ route('super.premium-schools.index') }}">Back</a>
</div>

@if($errors->any())
  <div class="alert alert-danger">{{ $errors->first() }}</div>
@endif

<div class="card p-3">
  <div class="mb-2 text-muted">
    Excel headings must be:
    <code>city, area__micro_zone, school_name, board, board_category, premium_tier, notes</code>
  </div>

  <form method="POST" action="{{ route('super.premium-schools.import') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <input type="file" name="file" class="form-control" required>
    </div>
    <button class="btn btn-dark">Import</button>
  </form>
</div>
@endsection
