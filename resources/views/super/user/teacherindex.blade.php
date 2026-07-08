@extends('super.layouts.app')
@section('title','Teachers')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h3 class="mb-0">Teachers</h3>
  <a href="{{ route('super.teacher.create') }}" class="btn btn-primary">+ Add Teacher</a>

  <a href="{{ route('super.teacher.generate') }}" class="btn btn-primary">Generate Teacher</a>

   <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#excelImportModal">
      Import Excel
    </button>

</div>

<div class="card border-0 shadow-sm">
  <div class="card-body">


    <div class="table-responsive">
      <table class="table table-striped w-100 datatable">
        <thead>
          <tr>
            <th>Sr. No.</th>
            <th>Date Of Register</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @php $i=1; @endphp
          @foreach ($pages as $index => $row)
          <tr>
            <td>{{ $i; }}</td>
            <td>@if($row->date){{ \Carbon\Carbon::parse($row->date)->format('d F Y') }}@endif</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->phone }}</td>
            <td>{{ $row->status == 't' ? 'Active' : 'Pending' }}</td>
            <td>
              <a href="{{ route('super.teacher.edit', $row->id) }}"><i class="bi bi-pencil"></i></a> |
              <form action="{{ route('super.teacher.destroy', $row->id) }}"
                    method="POST"
                    style="display:inline"
                    onsubmit="return confirm('Are you sure to destroy this teacher?')">
                @csrf
                @method('DELETE')
                <button type="submit" style="border:none;background:none;cursor:pointer;">
                  <i class="bi bi-trash"></i>
                </button>
              </form>
            </td>
          </tr>
          @php $i++; @endphp 
          @endforeach
        </tbody>
      </table>
    </div>

   
  </div>
</div>

<!-- Excel Import Modal -->
<div class="modal fade" id="excelImportModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Import Teachers from Excel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form action="{{ route('super.teacher.import.excel') }}" 
            method="POST" 
            enctype="multipart/form-data">
        @csrf

        <div class="modal-body">
          <input type="file" name="file" class="form-control" accept=".xlsx,.xls" required>

          <div class="small text-muted mt-3">
            Required headers:<br>
            Tutor_Name, Profile_Slug, Local_Address, Landmark, Sector, Pincode,
            Teaching_Subjects, Expertise, Teaching_Mode, Highest_Education,
            Qualification_Details, Experience_Years, Is_Enabled
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-success">Upload & Queue</button>
        </div>
      </form>

    </div>
  </div>
</div>

@endsection
