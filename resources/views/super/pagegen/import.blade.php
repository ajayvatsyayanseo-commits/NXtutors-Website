@extends('super.layouts.app')
@section('title','Bulk Page Generator')

@section('content')
<div class="card shadow-sm border-0">
  <div class="card-body">
    <h4 class="mb-3">Upload Excel for Bulk Page Generation</h4>

    <form method="POST" action="{{ route('super.pagegen.import.store') }}"
          enctype="multipart/form-data">
      @csrf

      <div class="mb-3">
        <label class="form-label">Excel File (.xlsx)</label>
        <input type="file" name="file" class="form-control" required accept=".xlsx">
        <small class="text-muted">
          Each row = 1 page. Cron will auto-generate pages.
        </small>
      </div>

      <button class="btn btn-dark">Upload & Queue</button>
    </form>
  </div>
</div>
@endsection