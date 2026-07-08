@extends('super.layouts.app')
@section('title', 'Home City Area Management')

@section('content')
<style>
/* Review / FAQ block container */
.review-variant-wrapper,
.faqs-variant-wrapper {
    position: relative;
    border: 1px solid #dee2e6;
    border-radius: 6px;
    padding: 15px;
    margin-top: 15px;
    background: #fff;
}

/* ❌ Remove button */
.remove-review,
.remove-faqs {
    position: absolute;
    top: 8px;
    right: 8px;
    width: 28px;
    height: 28px;
    padding: 0;
    border-radius: 50%;
    background-color: #dc3545;
    color: #fff;
    border: none;
    font-size: 16px;
    line-height: 28px;
    text-align: center;
    cursor: pointer;
    transition: all 0.2s ease-in-out;
}

/* Hover effect */
.remove-review:hover,
.remove-faqs:hover {
    background-color: #bb2d3b;
    transform: scale(1.1);
}
</style>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Add City Area</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('super.dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">City Area</li>
        <li class="breadcrumb-item active">Add</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
  	<a style="float: right; margin-top: -50px" href="{{ route('super.cityarea.index') }}" class="btn btn-primary">Back</a>
    <form action="{{ route('super.cityarea.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
    <div class="row">
                <div class="form-group mb-3 mt-5 col-lg-6">
                  <label for="city_id">City Name</label>
                  <select name="city_id" id="city_id" class="form-control">
                    <option value="">Select</option>
                    @foreach($city as $rowc)
                      <option value="{{ $rowc->id }}">{{ $rowc->city_name }}</option>
                    @endforeach
                  </select>
                  @error('city_id')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group mb-3 mt-5 col-lg-6">
                  <label for="name">Area Name</label>
                  <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                  @error('name')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group mb-3 mt-5 col-lg-12">
                  <label for="name">Main Title</label>
                  <input type="text" name="main_title" id="main_title" class="form-control" value="{{ old('main_title' ) }}">
                  @error('name')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group mb-3 mt-5 col-lg-6">
                  <label for="areapid">Parent City Area Name</label>
                  <select name="areapid" id="areapid" class="form-control">
                    <option value="0">Select</option>
                    @foreach($maincityarea as $rowac)
                      <option value="{{ $rowac->id }}">{{ $rowac->name }}</option>
                    @endforeach
                  </select>
                  @error('areapid')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group mb-3 mt-5 col-lg-6">
                  <label for="pincode">Area Pincode</label>
                  <input type="number" name="pincode" id="pincode" class="form-control" value="{{ old('pincode') }}">
                  @error('pincode')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group mb-3 mt-5 col-lg-12">
                  <label for="area_desc">Area Short Description</label>
                  <textarea name="short_desc" id="short_desc" class="form-control ckeditor">{{ old('short_desc') }}</textarea>
                  @error('short_desc')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group mb-3 mt-5 col-lg-12">
                  <label for="area_desc">Area Description</label>
                  <textarea name="area_desc" id="area_desc" class="form-control ckeditor">{{ old('area_desc') }}</textarea>
                  @error('area_desc')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                 <div class="form-group mb-3 mt-5 col-lg-12">
                  <label for="area_desc">Area Subjects Covered Description</label>
                  <textarea name="subjects_covered_desc" id="subjects_covered_desc" class="form-control ckeditor">{{ old('subjects_covered_desc') }}</textarea>
                  @error('subjects_covered_desc')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group mb-3 mt-5 col-lg-12">
                  <label for="teacher_approch">Teaching Approach Description</label>
                  <textarea name="teacher_approch" id="teacher_approch" class="form-control ckeditor">{{ old('teacher_approch') }}</textarea>
                  @error('teacher_approch')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group mb-3 mt-5 col-lg-12">
                  <label for="area_desc">Area Tutor Types</label>
                  <textarea name="tutor_types" id="tutor_types" class="form-control ckeditor">{{ old('tutor_types') }}</textarea>
                  @error('tutor_types')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group mb-3 mt-5 col-lg-12">
                  <label for="area_desc">Area Pricing & Packages</label>
                  <textarea name="package" id="package" class="form-control ckeditor">{{ old('package') }}</textarea>
                  @error('package')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                 
                <div class="form-group mb-3 mt-5 col-lg-12">
                  <label for="why_choose">Why Choose Description</label>
                  <textarea name="why_choose" id="why_choose" class="form-control ckeditor">{{ old('why_choose') }}</textarea>
                  @error('why_choose')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group mb-3 mt-5 col-lg-12">
                  <label for="area_map">Area Map</label>
                  <textarea name="area_map" id="area_map" class="form-control ckeditor">{{ old('area_map') }}</textarea>
                  @error('area_map')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <h3>Reviews</h3>
              <div id="review-variant-container">
                <div class="row review-variant-wrapper">
                <div class="form-group col-lg-6">
                        <label for="question">User Name</label>
                         <input type="text" name="username[]"  class="form-control" class="form-control" value=""> 
                  </div>
                    <div class="form-group col-lg-6">
                        <label for="question">Rating</label>
                         <input type="number" name="rating[]"  class="form-control" value=""> 
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="question">Location</label>
                         <input type="text" name="location[]"  class="form-control" value=""> 
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="question">Rating Status</label>
                         <select name="review_status[]" id="review_status" class="form-control">
                            <option value="f" >Pending</option>
                            <option value="t" >Active</option>
                         </select>
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="message">Message</label>
                         <textarea name="message[]"  class="form-control"></textarea> 
                    </div>
                    <div class="form-group col-lg-12">
                    <button type="button" class="btn btn-danger remove-review mt-3 remove-image">X</button>
                  </div>
       
                </div>

              </div>
              <button type="button" id="add-more-review" class="btn btn-primary mt-3">Add More</button>
              <!-- <h3>Course & Subject</h3>
              <div id="variant-container">
                <div class="row variant-wrapper">
                  <div class="form-group col-lg-6">
                    <label>Main Course</label>
                    <select class="form-control cat_id" name="cat_id[]">
                      <option value="0">Select Course</option>
                      @foreach($categories as $rowss)
                      <option value="{{ $rowss->id }}">{{ $rowss->cat_title }}</option>
                      @endforeach
                    </select>
                    @error('cat_id')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Board Name</label>
                    <select class="form-control pid" name="pid[]">
                      <option value="0">Select</option>
                    </select>
                    @error('pid')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Class Name</label>
                    <select class="form-control cid" name="cid[]">
                      <option value="0">Select</option>
                    </select>
                    @error('cid')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Subject Name</label>
                    <div class="sub_id"></div>
                  </div>

                  <div class="form-group col-lg-12">
                    <button type="button" class="btn btn-danger remove-image mt-3">Remove</button>
                  </div>
                </div>
              </div>

              <button type="button" id="add-more" class="btn btn-primary mt-3">Add More</button> -->


              <h3>FAQs Question</h3>
              <div id="faqs-variant-container">
                  <div class="row faqs-variant-wrapper">
                    <div class="form-group col-lg-12">
                        <label for="question">FAQs Question</label>
                         <input type="text" name="question[]"  class="form-control" value=""> 
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="answer">FAQs Answer</label>
                         <textarea name="answer[]"  class="form-control" ></textarea> 
                    </div>
                    <div class="form-group col-lg-12">
                    <button type="button" class="btn btn-danger remove-faqs mt-3">X</button>
                  </div>
                  </div>
              </div>
              <button type="button" id="add-more-faqs" class="btn btn-primary mt-3">Add More</button>
              <div class="form-group mt-4">
                <label for="meta_title">Meta Title</label>
                <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ old('meta_title') }}">
                @error('meta_title')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group mb-3">
                <label for="meta_desc">Meta Description</label>
                <textarea name="meta_desc" id="meta_desc" class="form-control">{{ old('meta_desc') }}</textarea>
                @error('meta_desc')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group mb-3 mt-5 col-lg-12">
                  <label for="page_schema">Page Schema</label>
                  <textarea name="page_schema" id="page_schema" class="form-control ckeditor">{{ old('page_schema') }}</textarea>
                  @error('page_schema')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

              <div class="form-group mb-3">
                <label for="status">Status</label>
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
</main>
 @endsection
@push('scripts')
<script>
$(document).ready(function () {

  // =========================
  // ✅ ADD MORE REVIEW
  // =========================
  $('#add-more-review').on('click', function () {

    let html = `
      <div class="row review-variant-wrapper mt-3 border rounded p-2">
        <div class="form-group col-lg-6">
          <label>User Name</label>
          <input type="text" name="username[]" class="form-control" value="">
        </div>

        <div class="form-group col-lg-6">
          <label>Rating</label>
          <input type="number" name="rating[]" class="form-control" value="">
        </div>

        <div class="form-group col-lg-6">
          <label>Location</label>
          <input type="text" name="location[]" class="form-control" value="">
        </div>

        <div class="form-group col-lg-6">
          <label>Rating Status</label>
          <select name="review_status[]" class="form-control">
            <option value="f">Pending</option>
            <option value="t">Active</option>
          </select>
        </div>

        <div class="form-group col-lg-12">
          <label>Message</label>
          <textarea name="message[]" class="form-control"></textarea>
        </div>

        <div class="form-group col-lg-12">
          <button type="button" class="btn btn-danger remove-review mt-2">X</button>
        </div>
      </div>
    `;

    $('#review-variant-container').append(html);
  });

  // ✅ REMOVE REVIEW
  $(document).on('click', '.remove-review', function () {
    $(this).closest('.review-variant-wrapper').remove();
  });


  // =========================
  // ✅ ADD MORE FAQS
  // =========================
  $('#add-more-faqs').on('click', function () {

    let html = `
      <div class="row faqs-variant-wrapper mt-3 border rounded p-2">
        <div class="form-group col-lg-12">
          <label>FAQs Question</label>
          <input type="text" name="question[]" class="form-control" value="">
        </div>

        <div class="form-group col-lg-12">
          <label>FAQs Answer</label>
          <textarea name="answer[]" class="form-control"></textarea>
        </div>

        <div class="form-group col-lg-12">
          <button type="button" class="btn btn-danger remove-faqs mt-2">X</button>
        </div>
      </div>
    `;

    $('#faqs-variant-container').append(html);
  });

  // ✅ REMOVE FAQS
  $(document).on('click', '.remove-faqs', function () {
    $(this).closest('.faqs-variant-wrapper').remove();
  });

});
</script>
@endpush
