@extends('super.layouts.app')
@section('title','Teacher Reviews')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h3 class="mb-0">Teacher Reviews</h3>
</div>

<div class="card border-0 shadow-sm">
  <div class="card-body">
    @if (session('success'))
      <div id="success-message" class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <h5 class="card-title mb-4">Review List</h5>

    <div class="table-responsive">
      <table class="table table-striped mb-0 ">
        <thead>
          <tr>
            <th>Sr. No.</th>
            <th>Date</th>
            <th>Student Name</th>
            <th>Teacher Name</th>
            <th>Rating</th>
            <th>Message</th>
          </tr>
        </thead>
        <tbody>
          @php $i=1; @endphp
          @foreach ($pages as $index => $row)
          <tr>
            <td>{{ $i; }}</td>
            <td>@if($row->date){{ \Carbon\Carbon::parse($row->date)->format('d F Y') }}@endif</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->user->name ?? 'N/A' }}</td>
            <td>
              <span class="badge bg-warning text-dark">{{ $row->rating }}/5</span>
            </td>
            <td>{{ Str::limit($row->message, 50) }}</td>
          </tr>
          @php $i++; @endphp
          @endforeach
        </tbody>
      </table>
    </div>

 
  </div>
</div>
@endsection
