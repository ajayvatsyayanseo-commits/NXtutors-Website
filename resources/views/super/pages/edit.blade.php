@extends('super.layouts.app')
@section('title', 'CMS Management')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('super.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item">Page</li>
          <li class="breadcrumb-item active">Update</li>
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
              <a style="float: right; margin-top: -50px" href="{{ route('super.page.index') }}" class="btn btn-primary">Back</a>
             <form action="{{ route('super.page.update', $page->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') 
            <div class="form-group mb-3 mt-5">
                <label for="name">Page Name</label>
                <input type="text" name="title" id="title" class="form-control" value="{{   $page->title  }}">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3  ">
                <label for="name">Page Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $page->slug) }}">
                @error('slug')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="email">Main Title</label>
                <input type="text" name="main_title" id="main_title" class="form-control" value="{{ old('main_title', $page->main_title) }}">
                @error('main_title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
 

            <div class="form-group mb-3">
                <label for="address">Page Content</label>
                <textarea name="content" id="content" class="form-control ckeditor">{{ old('content', $page->content) }}</textarea>
                @error('content')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
             <div class="form-group mb-3">
                
                    <label for="meta_title"> Meta Tittle</label>
                    <input type="text" name="meta_title" id="meta_title" class="form-control"  value="{{ old('meta_title', $page->meta_title)}}">
            </div>
           <div class="form-group mb-3">
                <label for="facebook">Meta Keywords</label>
                <input type="text" name="meta_keywords" id="meta_keywords" class="form-control" value="{{ old('meta_keywords',  $page->meta_keywords) }}">
            </div>

            <div class="form-group mb-3">
                <label for="twitter">Meta Description</label>
                <textarea name="meta_description" id="meta_description" class="form-control">{{ old('meta_description',  $page->meta_description) }}</textarea>
            </div>
 
            <div class="form-group mb-3">
                <label for="logo">Page Image</label>
                
                <input type="file" name="avatar" id="avatar" class="form-control">
                @if($page->avatar)
                <img src="{{ asset('storage/avatars/' . $page->avatar) }}" alt="Image Preview" class="img-preview" style="max-width: 100px; height: 100px;">
                @endif
                @error('avatar')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="logo">Page Status</label>
                <select name="status" id="status" class="form-control">
                	<option  value="">Select</option>
                	<option value="t" @if($page->status=='t') selected @endif>Active</option>
                	<option value="f"@if($page->status=='f') selected @endif>Pending</option>
                </select>
                @error('status')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
             </div>

            <button type="submit" class="btn btn-primary">Save Settings</button>
        </form>

            </div>
          </div>

        </div>

        
      </div>
    </section>

</main> 
 @endsection
