@extends('super.layouts.app')
@section('title', 'Home City Area Management')

@section('content')

 <main id="main" class="main">

    <div class="pagetitle">
      <h1>Home City Area Managment</h1>
       
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('super.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">City Area </li>
          
        </ol>

      </nav>

    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
        	
          <div class="card">
            <div class="card-body">
            	 
              <h5 class="card-title">City Area List</h5>
 
        	 <a style="float: right; margin-top: -50px" href="{{ route('super.cityarea.create') }}" class="btn btn-primary">Add </a>  
              
              

              <!-- Table with stripped rows -->
              <table class="table table-striped w-100 datatable">
                <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>City Name</th>
                    <th>Area Name</th>
                    <th>Parent Area</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	@php $i=1; @endphp
                	 @foreach ($pages as $row)
                  <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $row->city->city_name}}</td>
                     <td>{{ $row->name}}</td>
                    <td> @if($row->parentArea)
        {{ $row->parentArea->name }}
    @else
        No parent
    @endif</td>

 
                    <td>@if($row->status=='t') Active @else Pendind @endif</td>
                    <td>
                    	<a href="{{ route('super.cityarea.edit', $row->id) }}"><i class="bi bi-pencil"></i></a> | 
                    	<form action="{{ route('super.cityarea.destroy', $row->id) }}" method="POST" style="display: inline;">   
				        @csrf
                        @method('DELETE')
                        <button type="submit" style="border:none; background:none;   cursor:pointer;" onclick="return confirm('Are you sure to destroy this city?')"> <i class="bi bi-trash"></i></button>
                      </form>
                    </td>
                  </tr>
                  @php $i++; @endphp
                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->



@endsection