@extends('super.layouts.app')
@section('title', 'Settings')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Site Setting</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('super.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item">Setting</li>
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
             <form action="{{ route('super.settings.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3 mt-5">
                <label for="name">Website Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $setting->name) }}">
            </div>

            <div class="form-group mb-3">
                <label for="email">Contact Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $setting->email) }}">
            </div>

            <div class="form-group mb-3">
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $setting->phone) }}">
            </div>

            <div class="form-group mb-3">
                <label for="address">Address</label>
                <textarea name="address" id="address" class="form-control">{{ old('address', $setting->address) }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="offer_text">Offer Content</label>
                <textarea name="offer_text" id="offer_text" class="form-control">{{ old('offer_text', $setting->offer_text) }}</textarea>
            </div>

           <!--  <div class="form-group mb-3">
                <label for="facebook">Facebook URL</label>
                <input type="url" name="facebook" id="facebook" class="form-control" value="{{ old('facebook', $setting->facebook) }}">
            </div>

            <div class="form-group mb-3">
                <label for="twitter">Twitter URL</label>
                <input type="url" name="twitter" id="twitter" class="form-control" value="{{ old('twitter', $setting->twitter) }}">
            </div>

            <div class="form-group mb-3">
                <label for="instagram">Instagram URL</label>
                <input type="url" name="instagram" id="instagram" class="form-control" value="{{ old('instagram', $setting->instagram) }}">
            </div> -->
            <div class="form-group mb-3">
                <label for="logo">Logo</label>
                @if ($setting->logo)
                    <img src="{{ asset('storage/logos/' . $setting->logo) }}" alt="Logo" width="100" height="100">
                @endif
                <input type="file" name="logo" id="logo" class="form-control">
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