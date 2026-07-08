@extends('super.layouts.app')
@section('title','Premium Schools')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <div>
    <h3 class="mb-0">Premium Schools</h3>
    <small class="text-muted">Create / edit / import / delete</small>
  </div>
  <div class="d-flex gap-2">
    <a class="btn btn-outline-secondary" href="{{ route('super.premium-schools.importForm') }}">Import Excel</a>
    <a class="btn btn-dark" href="{{ route('super.premium-schools.create') }}">Add School</a>
  </div>
</div>
 

<form class="card p-3 mb-3" method="GET">
  <div class="row g-2">
    <div class="col-md-4">
      <input class="form-control" name="search" value="{{ request('search') }}" placeholder="Search school/city/area/board">
    </div>
    <div class="col-md-3">
      <select class="form-select" name="city">
        <option value="">All Cities</option>
        @foreach($cities as $c)
          <option value="{{ $c }}" @selected(request('city')===$c)>{{ $c }}</option>
        @endforeach
      </select>
    </div>
    <div class="col-md-3">
      <select class="form-select" name="board_category">
        <option value="">All Boards</option>
        @foreach($boards as $b)
          <option value="{{ $b }}" @selected(request('board_category')===$b)>{{ $b }}</option>
        @endforeach
      </select>
    </div>
    <div class="col-md-2">
      <select class="form-select" name="premium_tier">
        <option value="">Tier</option>
        @foreach($tiers as $t)
          <option value="{{ $t }}" @selected(request('premium_tier')===$t)>{{ $t }}</option>
        @endforeach
      </select>
    </div>
    <div class="col-md-12 d-flex gap-2">
      <button class="btn btn-primary">Filter</button>
      <a class="btn btn-outline-secondary" href="{{ route('super.premium-schools.index') }}">Reset</a>
    </div>
  </div>
</form>

<div class="card">
  <div class="table-responsive">
    <table class="table table-hover align-middle mb-0 datatable">
      <thead class="table-light">
        <tr>
          <th>#</th>
          <th>City</th>
          <th>Area</th>
          <th>School</th>
          <th>Board</th>
          <th>Board Cat</th>
          <th>Tier</th>
          <th class="text-end">Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse($schools as $i => $s)
          <tr>
            <td>{{   $i +1 }}</td>
            <td>{{ $s->city }}</td>
            <td>{{ $s->area }}</td>
            <td class="fw-semibold">{{ $s->school_name }}</td>
            <td>{{ $s->board }}</td>
            <td><span class="badge bg-secondary">{{ $s->board_category }}</span></td>
            <td><span class="badge bg-warning text-dark">{{ $s->premium_tier }}</span></td>
            <td class="text-end">
              <a class="btn btn-sm btn-outline-dark" href="{{ route('super.premium-schools.edit', $s->id) }}">Edit</a>

              <form class="d-inline" method="POST" action="{{ route('super.premium-schools.destroy', $s->id) }}"
                    onsubmit="return confirm('Delete this school?')">
                @csrf @method('DELETE')
                <button class="btn btn-sm btn-outline-danger">Delete</button>
              </form>
            </td>
          </tr>
        @empty
          <tr><td colspan="8" class="text-center py-4 text-muted">No records</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>

 
@endsection
