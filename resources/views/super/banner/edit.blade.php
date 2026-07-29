@extends('super.layouts.app')
@section('title', 'Banner Management')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Banner Update </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('super.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item">Banner</li>
          <li class="breadcrumb-item active">Update</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
         @if (session('success'))
            <div id="success-message" class="alert alert-success">
                {{ session('success') }}
            </div>
         @endif
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">General Form Elements</h5> -->

              <!-- General Form Elements -->
              <a style="float: right; margin-top: -50px" href="{{ route('super.banner.index') }}" class="btn btn-primary">Back</a>
             <form action="{{ route('super.banner.update', $page->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') 

             <div class="form-group mb-3 mt-5">
                <label for="name">Banner Sub Title</label>
                <input type="text" name="sub_title" id="sub_title" class="form-control" value="{{ old('sub_title', $page->sub_title) }}">
                @error('sub_title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
           <div class="form-group mb-3 mt-5">
                <label for="name">Banner Main Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $page->title) }}">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

           
            <div class="form-group mb-3">
                <label for="logo">Banner Image</label>
                
                <input type="file" name="avatar" id="avatar" class="form-control">
                @if($page->avatar)
                <img src="{{ asset('storage/banner/' . $page->avatar) }}" alt="Image Preview" class="img-preview" style="max-width: 100px; height: 100px;">
                @endif
                @error('avatar')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="logo">Banner Status</label>
                <select name="status" id="status" class="form-control">
                	<option  value="">Select</option>
                	<option value="t" @if($page->status=='t') selected @endif>Active</option>
                	<option value="f"@if($page->status=='f') selected @endif>Pending</option>
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

</main> 

 @endsection