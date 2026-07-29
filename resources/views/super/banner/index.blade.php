@extends('super.layouts.app')
@section('title', 'Banner Management')

@section('content')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Home Banner Managment</h1>
       
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('super.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Banner</li>
          
        </ol>

      </nav>

    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
        	
          <div class="card">
            <div class="card-body">
            	 
              <h5 class="card-title">Banner List</h5>
 
        	 <a style="float: right; margin-top: -50px" href="{{ route('super.banner.create') }}" class="btn btn-primary">Add </a>  
              
              

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Banner Main Tittle</th>
                    <th>Banner Sub Tittle</th>
                    
                    <th> Image</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	@php $i=1; @endphp
                	 @foreach ($pages as $row)
                  <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $row->title}}</td>

                    <td>{{ $row->sub_title}}</td>
                   
                    <td> @if($row->avatar)
                        <img src="{{ asset('storage/banner/' . $row->avatar) }}" alt="Avatar" style="width: 50px; height: 50px;">
                    @else
                        No Image
                    @endif</td>
                    <td>@if($row->status=='t') Active @else Pendind @endif</td>
                    <td>
                    	<a href="{{ route('super.banner.edit', $row->id) }}"><i class="bi bi-pencil"></i></a> | 
                    	<form action="{{ route('super.banner.destroy', $row->id) }}" method="POST" style="display: inline;">   
				        @csrf
                        @method('DELETE')
                        <button type="submit" style="border:none; background:none;   cursor:pointer;" onclick="return confirm('Are you sure to destroy this banner?')"> <i class="bi bi-trash"></i></button>
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