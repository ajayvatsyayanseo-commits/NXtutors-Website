@extends('super.layouts.app')
@section('title', 'Home City Management')

@section('content')

<main id="main" class="main">

  <div class="pagetitle mb-3">
    <h1 class="mb-1">Home City Management</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('super.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">City</li>
      </ol>
    </nav>
  </div>



  <div class="card border-0 shadow-sm">
    <div class="card-body">

      <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="card-title mb-0">City List</h5>
        <a href="{{ route('super.city.create') }}" class="btn btn-dark">Add City</a>
      </div>

      <div class="table-responsive">
        <table id="cityTable" class="table table-striped w-100 datatable">
          <thead>
            <tr>
              <th>Sr. No.</th>
              <th>City Name</th>
              <th>Image</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            @php $i = 1; @endphp

            @forelse ($pages as $row)
              <tr>
                <td>{{ $i }}</td>
                <td>{{ Str::limit($row->city_name, 40) }}</td>

                <td>
                  @if($row->avatar)
                    <img src="{{ asset('storage/city/' . $row->avatar) }}"
                         alt="City"
                         class="rounded"
                         style="width: 50px; height: 50px; object-fit: cover;">
                  @else
                    <span class="text-muted">No Image</span>
                  @endif
                </td>

                <td>
                  <span class="badge {{ $row->status == 't' ? 'bg-success' : 'bg-warning' }}">
                    {{ $row->status == 't' ? 'Active' : 'Pending' }}
                  </span>
                </td>

                <td>
                  <div class="btn-group" role="group">
                    <a href="{{ route('super.city.edit', $row->id) }}"
                       class="btn btn-sm btn-outline-primary"
                       title="Edit">
                      <i class="bi bi-pencil"></i>
                    </a>

                    <form action="{{ route('super.city.destroy', $row->id) }}"
                          method="POST"
                          style="display:inline;"
                          onsubmit="return confirm('Are you sure to delete this city?')">
                      @csrf
                      @method('DELETE')
                      <button type="submit"
                              class="btn btn-sm btn-outline-danger"
                              title="Delete">
                        <i class="bi bi-trash"></i>
                      </button>
                    </form>
                  </div>
                </td>
              </tr>
              @php $i++; @endphp

            @empty
              <tr>
                <td colspan="5" class="text-center py-4">No cities found</td>
              </tr>
            @endforelse

          </tbody>
        </table>
      </div>

    </div>
  </div>

</main>
@endsection

