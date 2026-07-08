 @include('include.teacherheader')

 <div class="right_col" role="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/')}}/teacher/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Student Enquiry List</li>
        </ol>
      </nav>
    </div> 
  <div class="col-lg-12" >
 	  <div class="row">
      <h3>Student Enquiry List</h3>
            
            <!--  
            <div class="cart-table-wrapper table-responsive">
                <table class="table datatable">
                <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Date Of Register</th>
                    <th> Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @php $i=1; @endphp
                    @foreach($student as $row)
                     <td>{{ $i }}</td>
                    <td>@if($row->date!=''){{ date('d F Y', strtotime($row->date))}}@endif</td>
                    <td>{{ $row->name}}</td>
                     <td> @php
        $email = $row->email;
        $emailParts = explode('@', $email);
        $namePart = $emailParts[0];
        $domainPart = isset($emailParts[1]) ? $emailParts[1] : '';
        $maskedEmail = substr($namePart, 0, 2) . str_repeat('*', max(0, strlen($namePart) - 4)) . substr($namePart, -2) . '@' . $domainPart;
    @endphp
    {{ $maskedEmail }}</td>
                    <td>@php
        $phone = $row->phone;
        $maskedPhone = substr($phone, 0, 2) . str_repeat('*', max(0, strlen($phone) - 4)) . substr($phone, -2);
    @endphp
    {{ $maskedPhone }}</td>
                   
                  
                    <td> {{ $row->address}} </td>
                     
                       
                  </tr>
                    @php $i++; @endphp
                    @endforeach
                </table>
            </div>
  -->
    <style>
    .profile-circle {
      width: 50px;
      height: 50px;
      background-color: #0d6efd;
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      font-size: 20px;
    }
    .card-detail label {
      font-weight: 500;
      color: #555;
      margin-bottom: 2px;
    }
    .card-detail .value {
      margin-bottom: 10px;
    }
  </style>

  <div class="container my-4">
@foreach($students as $student)
  <div class="card shadow-sm p-3 mb-4">
    <div class="d-flex align-items-center mb-3">
      <div class="profile-circle me-3">{{ strtoupper(substr($student->name, 0, 1)) }}</div>
      <div>
        <h5 class="mb-0">{{ ucfirst($student->name) }}</h5>
        <small class="text-muted">5 days ago</small>
      </div>
    </div>

    <div class="row card-detail">
        <div class="col-md-6">
        <label>Budget</label>
        <div class="value">{{ $student->budget }} Rs. Per Hours</div>
      </div>
      <div class="col-md-6">
        <label>Phone</label>
        <div class="value">@php
        $phone = $row->phone;
        $maskedPhone = substr($phone, 0, 2) . str_repeat('*', max(0, strlen($phone) - 4)) . substr($phone, -2);
    @endphp
    {{ $maskedPhone }}</div>
      </div>
      <div class="col-md-6">
        <label>Email</label>
        <div class="value">@php
        $email = $student->email;
        $emailParts = explode('@', $email);
        $namePart = $emailParts[0];
        $domainPart = isset($emailParts[1]) ? $emailParts[1] : '';
        $maskedEmail = substr($namePart, 0, 2) . str_repeat('*', max(0, strlen($namePart) - 4)) . substr($namePart, -2) . '@' . $domainPart;
    @endphp
    {{ $maskedEmail }}</div>
      </div>
      <div class="col-md-6">
        <label>Address</label>
        <div class="value">{{ $student->city }}, {{ $student->pincode}}</div>
      </div>
      <div class="col-md-6">
        <label>Class Type</label>
        <div class="value">{{ ucfirst($student->for_class)}}</div>
      </div>
      <hr>
    @php $a = 1; @endphp

@foreach($student->course as $course)
  <div class="row mb-3 p-3 border rounded bg-light">
    <div class="col-12">
      <h6 class="mb-3">
  <span class="badge bg-primary">{{ $a }}</span> Course Information
</h6>
    </div>

    <div class="col-md-6">
      <label>Main Course</label>
      <div class="value">{{ $course->category?->cat_title ?? 'N/A' }}</div>
    </div>

    <div class="col-md-6">
      <label>Board</label>
      <div class="value">{{ $course->board?->cat_title ?? 'N/A' }}</div>
    </div>

    <div class="col-md-6">
      <label>Class Name</label>
      <div class="value">{{ $course->classCategory?->cat_title ?? 'N/A' }}</div>
    </div>

    <div class="col-md-6">
      <label>Subject Name</label>
      <div class="value">
        {{ $course->subjects->pluck('title')->implode(', ') ?? 'N/A' }}
      </div>
    </div>
  </div>

  @php $a++; @endphp
@endforeach
    </div>
  </div>
@endforeach
</div>

            
        </div>
</div>
</div>
  @include('include.teacherfooter')

 