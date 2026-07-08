@extends('super.layouts.app')
@section('title', 'Home City Management')

@section('content')



    <div class="pagetitle">
      <h1>Add City</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('super.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item">City</li>
          <li class="breadcrumb-item active">Add</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
         
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">General Form Elements</h5> -->

              <!-- General Form Elements -->
              <a style="float: right; margin-top: -50px" href="{{ route('super.city.index') }}" class="btn btn-primary">Back</a>
             <form action="{{ route('super.city.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3 mt-5">
                <label for="name">City Name</label>
                <input type="text" name="city_name" id="city_name" class="form-control" value="{{ old('city_name') }}">
                @error('city_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

             <div class="form-group mb-3 mt-5">
                <label for="name">City Description</label>
                <input type="text" name="city_desc" id="city_desc" class="form-control" value="{{ old('city_desc') }}">
                @error('city_desc')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
 
            <div class="form-group mb-3">
                <label for="logo">City Image</label>
                <input type="file" name="avatar" id="avatar" class="form-control">
                <img src="#" alt="Image Preview" class="img-preview" style="max-width: 100px; height: 100px; display: none;">
                @error('avatar')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3 ">
                <label for="name">Meta Tittle</label>
                <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ old('meta_title') }}">
                @error('meta_title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3 ">
                <label for="name">Meta Key</label>
                <input type="text" name="meta_key" id="meta_key" class="form-control" value="{{ old('meta_key') }}">
                @error('meta_key')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3 ">
                <label for="name">Meta Description </label>
                <textarea name="meta_desc" id="meta_desc" class="form-control">{{ old('meta_desc')}}</textarea>
                @error('author')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="logo"> Status</label>
                <select name="status" id="status" class="form-control">
                	<option value="">Select</option>
                	<option value="t">Active</option>
                	<option value="f">Pending</option>
                </select>
                @error('status')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
             </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

            </div>
          </div>

        </div>

        
      </div>
    </section>

@endsection