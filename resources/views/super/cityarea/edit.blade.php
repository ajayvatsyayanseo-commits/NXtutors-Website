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
      <h1>City Area Update </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('super.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item">City Area</li>
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
              <a style="float: right; margin-top: -50px" href="{{ route('super.cityarea.index') }}" class="btn btn-primary">Back</a>
             <form action="{{ route('super.cityarea.update', $page->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') 

             <div class="row">
                <div class="form-group mb-3 mt-5 col-lg-6">
                  <label for="city_id">City Name</label>
                  <select name="city_id" id="city_id" class="form-control">
                    <option value="">Select</option>
                    @foreach($city as $rowc)
                      <option value="{{ $rowc->id }}" @if($page->city_id==$rowc->id) selected @endif>{{ $rowc->city_name }}</option>
                    @endforeach
                  </select>
                  @error('city_id')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group mb-3 mt-5 col-lg-6">
                  <label for="name">Area Name</label>
                  <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $page->name) }}">
                  @error('name')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group mb-3 mt-5 col-lg-12">
                  <label for="name">Main Title</label>
                  <input type="text" name="main_title" id="main_title" class="form-control" value="{{ old('main_title', $page->main_title) }}">
                  @error('name')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group mb-3 mt-5 col-lg-6">
                  <label for="areapid">Parent City Area Name</label>
                  <select name="areapid" id="areapid" class="form-control">
                    <option value="0">Select</option>
                    @foreach($maincityarea as $rowac)
                      <option value="{{ $rowac->id }}" @if($page->areapid==$rowac->id) selected @endif>{{ $rowac->name }}</option>
                    @endforeach
                  </select>
                  @error('areapid')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group mb-3 mt-5 col-lg-6">
                  <label for="pincode">Area Pincode</label>
                  <input type="number" name="pincode" id="pincode" class="form-control" value="{{ old('pincode', $page->pincode) }}">
                  @error('pincode')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group mb-3 mt-5 col-lg-12">
                  <label for="area_desc">Area Short Description</label>
                  <textarea name="short_desc" id="short_desc" class="form-control ckeditor">{{ old('short_desc' , $page->short_desc) }}</textarea>
                  @error('short_desc')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group mb-3 mt-5 col-lg-12">
                  <label for="area_desc">Area Description</label>
                  <textarea name="area_desc" id="area_desc" class="form-control ckeditor">{{ old('area_desc' , $page->area_desc) }}</textarea>
                  @error('area_desc')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group mb-3 mt-5 col-lg-12">
                  <label for="area_desc">Area Subjects Covered Description</label>
                  <textarea name="subjects_covered_desc" id="subjects_covered_desc" class="form-control ckeditor">{{ old('subjects_covered_desc' , $page->subjects_covered_desc) }}</textarea>
                  @error('subjects_covered_desc')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group mb-3 mt-5 col-lg-12">
                  <label for="teacher_approch">Teaching Approach Description</label>
                  <textarea name="teacher_approch" id="teacher_approch" class="form-control ckeditor">{{ old('teacher_approch' , $page->teacher_approch) }}</textarea>
                  @error('teacher_approch')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group mb-3 mt-5 col-lg-12">
                  <label for="area_desc">Area Tutor Types</label>
                  <textarea name="tutor_types" id="tutor_types" class="form-control ckeditor">{{ old('tutor_types' , $page->tutor_types) }}</textarea>
                  @error('tutor_types')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group mb-3 mt-5 col-lg-12">
                  <label for="area_desc">Area Pricing & Packages</label>
                  <textarea name="package" id="package" class="form-control ckeditor">{{ old('package' , $page->package) }}</textarea>
                  @error('package')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group mb-3 mt-5 col-lg-12">
                  <label for="why_choose">Why Choose Description</label>
                  <textarea name="why_choose" id="why_choose" class="form-control ckeditor">{{ old('why_choose' , $page->why_choose) }}</textarea>
                  @error('why_choose')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group mb-3 mt-5 col-lg-12">
                  <label for="area_map">Area Map</label>
                  <textarea name="area_map" id="area_map" class="form-control ckeditor">{{ old('area_map' , $page->area_map) }}</textarea>
                  @error('area_map')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <h3>Reviews</h3>
              <div id="review-variant-container">
                @php $b=1; @endphp
                @foreach($page->review as $rowcc)

                  <div class="row review-variant-wrapper">
                    <div class="form-group col-lg-6">
                        <label for="question">User Name</label>
                         <input type="text" name="username[]"  class="form-control" value="{{ $rowcc->username}}"> 
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="question">Rating</label>
                         <input type="text" name="rating[]"  class="form-control" value="{{ $rowcc->rating}}"> 
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="question">Location</label>
                         <input type="text" name="location[]"  class="form-control" value="{{ $rowcc->location}}"> 
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="question">Rating Status</label>
                         <select name="review_status[]" id="review_status" class="form-control">
                            <option value="f" @if($rowcc->review_status=='f') selected @endif >Pending</option>
                            <option value="t" @if($rowcc->review_status=='t') selected @endif>Active</option>
                         </select>
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="message">Message</label>
                         <textarea name="message[]"  class="form-control" >{{ $rowcc->message}}</textarea> 
                    </div>
                    <div class="form-group col-lg-12">
                        <input type="hidden" name="city_area_review_id[]" value="{{ $rowcc->id }}">
                    <a data-id="{{ $rowcc->id }}" onclick="removereview(this)"  class="btn btn-danger remove-review {{ $b == 1 ? 'first-remove' : '' }}">X</a>
                  </div>
                </div>
                  @php $b++; @endphp
                @endforeach
                 
              </div>
              <button type="button" id="add-more-review" class="btn btn-primary mt-3">Add More</button>

             
              <!-- <h3>Course & Subject</h3>
              <div id="variant-container">
                @php $a=1; @endphp
                @foreach($page->courses as $rowcc)
                <div class="row variant-wrapper">
                  <div class="form-group col-lg-6">
                    <label>Main Course</label>
                    <select class="form-control cat_id" name="cat_id[]">
                      <option value="0">Select Course</option>
                      @foreach($categories as $rowss)
                      <option value="{{ $rowss->id }}"@if($rowcc->cat_id==$rowss->id) selected @endif>{{ $rowss->cat_title }}</option>
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
                      @foreach($rowcc->boards as $board)
        <option value="{{ $board->id }}" @if($rowcc->pid == $board->id) selected @endif>
            {{ $board->cat_title }}
            @endforeach
                    </select>
                    @error('pid')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Class Name</label>
                    <select class="form-control cid" name="cid[]">
                      <option value="0">Select</option>
                      @foreach($rowcc->classes as $class)
                        <option value="{{ $class->id }}" @if($rowcc->cid == $class->id) selected @endif>
                            {{ $class->cat_title }}
                        </option>
                    @endforeach
                    </select>
                    @error('cid')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Subject Name</label>
                    <div class="sub_id">
                        @foreach($rowcc->subjects as $subject)
            <div class="checkbox-item">
                <label>
                    <input 
                        type="checkbox" 
                        name="sub_id[{{ $loop->parent->index ?? 0 }}][]" 
                        value="{{ $subject->id }}" 
                        checked>
                    {{ $subject->title }}
                </label>
            </div>
        @endforeach
                    </div>
                  </div>

                  <div class="form-group col-lg-12">
                    <input type="hidden" name="city_course_id[]" value="{{ $rowcc->id }}">
                    <a data-id="{{ $rowcc->id }}" onclick="removecourse(this)"  class="btn btn-danger remove-image {{ $a == 1 ? 'first-remove' : '' }}">Remove</a>
                  </div>
                </div>
                @php $a++; @endphp
                @endforeach
              </div>

              <button type="button" id="add-more" class="btn btn-primary mt-3">Add More</button> -->


              <h3>FAQs Question</h3>
              <div id="faqs-variant-container">
                @php $b=1; @endphp
                @foreach($page->faqs as $rowcc)

                  <div class="row faqs-variant-wrapper">
                    <div class="form-group col-lg-12">
                        <label for="question">FAQs Question</label>
                         <input type="text" name="question[]"  class="form-control" value="{{ $rowcc->question}}"> 
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="answer">FAQs Answer</label>
                         <textarea name="answer[]"  class="form-control" >{{ $rowcc->answer}}</textarea> 
                    </div>
                    <div class="form-group col-lg-12">
                        <input type="hidden" name="city_faqs_id[]" value="{{ $rowcc->id }}">
                    <a data-id="{{ $rowcc->id }}" onclick="removefaqs(this)"  class="btn btn-danger remove-image {{ $b == 1 ? 'first-remove' : '' }}">X</a>
                  </div>
                </div>
                  @php $b++; @endphp
                @endforeach
                 
              </div>
              <button type="button" id="add-more-faqs" class="btn btn-primary mt-3">Add More</button>
              

            <div class="form-group mb-3 ">
                <label for="name">Meta Tittle</label>
                <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ old('meta_title', $page->meta_title) }}">
                @error('meta_title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
          

            <div class="form-group mb-3 ">
                <label for="name">Meta Description </label>
                <textarea name="meta_desc" id="meta_desc" class="form-control">{{ old('meta_desc', $page->meta_desc )}}</textarea>
                @error('author')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3 mt-5 col-lg-12">
                  <label for="page_schema">Page Schema</label>
                  <textarea name="page_schema" id="page_schema" class="form-control ckeditor">{{ old('page_schema' , $page->page_schema) }}</textarea>
                  @error('page_schema')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

            <div class="form-group mb-3">
                <label for="logo"> Status</label>
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
@push('scripts')
<script>
  // Add more variant handler
  $('#add-more-review').click(function () {
    var newVariantreview = `
      <div class="row review-variant-wrapper">
                <div class="form-group col-lg-6">
                        <label for="question">User Name</label>
                         <input type="text" name="username[]"  class="form-control" class="form-control" value=""> 
                  </div>
                   <div class="form-group col-lg-6">
                        <label for="question">Rating</label>
                         <input type="text" name="rating[]"  class="form-control" value=""> 
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
    `;
    $('#review-variant-container').append(newVariantreview);
  });

  // Remove variant handler
  function removereview(elem) {
    // Get the image ID from the data-id attribute
    var id = $(elem).data("id");

    // Set up CSRF token for the AJAX request
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

 
    if (confirm('Are you sure you want to delete this review?')) {
        $.ajax({
            type: "DELETE",  
          url: "{{ url('/')}}/cityreview/" + id,   
            data: {
                _method: 'DELETE',   
                id: id
            },
            success: function(response) {
                // Handle success
                if (response.success) {
                    alert(response.message);  
 
                    $(elem).closest('.review-variant-wrapper').remove();  
                } else {
                    alert(response.message);  
                }
            },
            error: function(xhr, status, error) {
                // Handle error
                alert('An error occurred while deleting the review.');
                console.error('Error:', error);
            }
        });
    }
}
</script>

<script>
  // Add more variant handler
  $('#add-more').click(function () {
    var newVariant = `
      <div class="row variant-wrapper">
        <div class="form-group col-lg-6">
          <label>Main Course</label>
          <select class="form-control cat_id" name="cat_id[]">
            <option value="0">Select Course</option>
            @foreach($categories as $rows)
            <option value="{{ $rows->id }}">{{ $rows->cat_title }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group col-lg-6">
          <label>Board Name</label>
          <select class="form-control pid" name="pid[]">
            <option value="0">Select</option>
          </select>
        </div>
        <div class="form-group col-lg-6">
          <label>Class Name</label>
          <select class="form-control cid" name="cid[]">
            <option value="0">Select</option>
          </select>
        </div>
        <div class="form-group col-lg-6">
          <label>Subject Name</label>
          <div class="sub_id"></div>
        </div>
        <div class="form-group col-lg-12">
          <button type="button" class="btn btn-danger remove-image mt-3">X</button>
        </div>
      </div>
    `;
    $('#variant-container').append(newVariant);
  });

  // Remove variant handler
  function removecourse(elem) {
    // Get the image ID from the data-id attribute
    var id = $(elem).data("id");

    // Set up CSRF token for the AJAX request
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

 
    if (confirm('Are you sure you want to delete this course?')) {
        $.ajax({
            type: "DELETE",  
          url: "{{ url('/')}}/citycourse/" + id,   
            data: {
                _method: 'DELETE',   
                id: id
            },
            success: function(response) {
                // Handle success
                if (response.success) {
                    alert(response.message);  
 
                    $(elem).closest('.variant-wrapper').remove();  
                } else {
                    alert(response.message);  
                }
            },
            error: function(xhr, status, error) {
                // Handle error
                alert('An error occurred while deleting the image.');
                console.error('Error:', error);
            }
        });
    }
}
</script>

<script>
  // Add more variant handler
  $('#add-more-faqs').click(function () {
    var newVariantfaqs = `
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
    `;
    $('#faqs-variant-container').append(newVariantfaqs);
  });

  // Remove variant handler
  function removefaqs(elem) {
    // Get the image ID from the data-id attribute
    var id = $(elem).data("id");

    // Set up CSRF token for the AJAX request
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

 
    if (confirm('Are you sure you want to delete this faqs?')) {
        $.ajax({
            type: "DELETE",  
          url: "{{ url('/')}}/cityfaqs/" + id,   
            data: {
                _method: 'DELETE',   
                id: id
            },
            success: function(response) {
                // Handle success
                if (response.success) {
                    alert(response.message);  
 
                    $(elem).closest('.faqs-variant-wrapper').remove();  
                } else {
                    alert(response.message);  
                }
            },
            error: function(xhr, status, error) {
                // Handle error
                alert('An error occurred while deleting the faqs.');
                console.error('Error:', error);
            }
        });
    }
}
</script>


<script>
$(document).on('change', '.pid', function () {
    var $wrapper = $(this).closest('.variant-wrapper');
    var catId = $(this).val();
    var $cid = $wrapper.find('.cid');
    var $sub_id = $wrapper.find('.sub_id'); // This is now your checkbox container

    if (catId != "0") {
        $.ajax({
            url: '{{ url('/') }}/get-parent-categories/' + catId,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                // Reset category dropdown
                $cid.empty().append('<option value="0">Select</option>');
                
                // Populate child categories
                $.each(data.child_categories, function (index, category) {
                    $cid.append('<option value="' + category.id + '">' + category.cat_title + '</option>');
                });

                // Reset and build checkbox dropdown
                var checkboxHTML = `
                    <div class="checkbox-dropdown-wrapper">
                        <div class="checkbox-dropdown-toggle">Select Subjects</div>
                        <div class="checkbox-dropdown-menu">
                            <div class="checkbox-item">
                                <label>
                                    <input type="checkbox" class="select-all-subjects"> <strong>Select All</strong>
                                </label>
                            </div>
                `;
                var blockIndex = $('.variant-wrapper').index($wrapper);
                $.each(data.products, function (index, product) {
                    checkboxHTML += `
                        <div class="checkbox-item">
                            <label>
                                <input type="checkbox" class="subject-checkbox" name="sub_id[${blockIndex}][]" value="${product.id}">
                                ${product.title}
                            </label>
                        </div>
                    `;
                });

                checkboxHTML += `</div></div>`;

                $sub_id.html(checkboxHTML); // Insert into container

                // Toggle dropdown on click
                $wrapper.find('.checkbox-dropdown-toggle').on('click', function () {
                    $(this).siblings('.checkbox-dropdown-menu').toggle();
                });

                // Select All functionality
                $wrapper.find('.select-all-subjects').on('change', function () {
                    $(this).closest('.checkbox-dropdown-menu').find('.subject-checkbox')
                        .prop('checked', $(this).prop('checked'));
                });

                // Close dropdown if clicked outside
                $(document).on('click', function (e) {
                    if (!$(e.target).closest('.checkbox-dropdown-wrapper').length) {
                        $('.checkbox-dropdown-menu').hide();
                    }
                });

            }
        });
    } else {
        $cid.empty().append('<option value="0">Select</option>');
        $sub_id.empty(); // Clear checkboxes
    }
});
</script>



 <script>
   $(document).on('change', '.cid', function () {
    var $wrapper = $(this).closest('.variant-wrapper');
    var ccatId = $(this).val();
   

    var $sub_id = $wrapper.find('.sub_id');

    if (ccatId != "0") {
        $.ajax({
            url: '{{ url('/') }}/get-products-by-class/' + ccatId,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                
                $sub_id.empty().append('<option value="0">Select </option>');

                // $.each(data.products, function (index, product) {
                //     $sub_id.append('<option value="' + product.id + '">' + product.title + '</option>');
                // });
           let checkboxHTML = `
                    <div class="checkbox-dropdown-wrapper">
                        <div class="checkbox-dropdown-toggle">Select Subjects</div>
                        <div class="checkbox-dropdown-menu">
                            <div class="checkbox-item">
                                <label>
                                    <input type="checkbox" class="select-all-subjects"> <strong>Select All</strong>
                                </label>
                            </div>
                `;

                var blockIndex = $('.variant-wrapper').index($wrapper);
                $.each(data.products, function (index, product) {
                    checkboxHTML += `
                        <div class="checkbox-item">
                            <label>
                                <input type="checkbox" class="subject-checkbox" name="sub_id[${blockIndex}][]" value="${product.id}">
                                ${product.title}
                            </label>
                        </div>
                    `;
                });

                checkboxHTML += `</div></div>`;

                $sub_id.html(checkboxHTML);

                // Toggle dropdown visibility
                $wrapper.find('.checkbox-dropdown-toggle').on('click', function () {
                    $(this).siblings('.checkbox-dropdown-menu').toggle();
                });

                // Select All functionality
                $wrapper.find('.select-all-subjects').on('change', function () {
                    $(this).closest('.checkbox-dropdown-menu').find('.subject-checkbox')
                        .prop('checked', $(this).prop('checked'));
                });

                // Close dropdown on outside click
                $(document).on('click', function (e) {
                    if (!$(e.target).closest('.checkbox-dropdown-wrapper').length) {
                        $('.checkbox-dropdown-menu').hide();
                    }
                });
            }
        });
    } else {
 
        $sub_id.empty().append('<option value="0">Select </option>');
    }
});

</script>

 <script>
   $(document).on('change', '.cat_id', function () {
    var $wrapper = $(this).closest('.variant-wrapper');
    var parentId = $(this).val();

    var $pid = $wrapper.find('.pid');
    var $cid = $wrapper.find('.cid');
    var $sub_id = $wrapper.find('.sub_id');

    if (parentId != "0") {
        $.ajax({
            url: '{{ url('/') }}/get-child-categories/' + parentId,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                $pid.empty().append('<option value="0">Select </option>');
                $cid.empty().append('<option value="0">Select </option>');
                $sub_id.empty().append('<option value="0">Select </option>');

                $.each(data.child_categories, function (index, category) {
                    $pid.append('<option value="' + category.id + '">' + category.cat_title + '</option>');
                });

                // $.each(data.products, function (index, product) {
                //     $sub_id.append('<option value="' + product.id + '">' + product.title + '</option>');
                // });

          let checkboxHTML = `
                    <div class="checkbox-dropdown-wrapper">
                        <div class="checkbox-dropdown-toggle">Select Subjects</div>
                        <div class="checkbox-dropdown-menu">
                            <div class="checkbox-item">
                                <label>
                                    <input type="checkbox" class="select-all-subjects"> <strong>Select All</strong>
                                </label>
                            </div>
                `;

                var blockIndex = $('.variant-wrapper').index($wrapper);
                $.each(data.products, function (index, product) {
                    checkboxHTML += `
                        <div class="checkbox-item">
                            <label>
                                <input type="checkbox" class="subject-checkbox" name="sub_id[${blockIndex}][]" value="${product.id}">
                                ${product.title}
                            </label>
                        </div>
                    `;
                });

                checkboxHTML += `</div></div>`;

                $sub_id.html(checkboxHTML);

                // Toggle dropdown visibility
                $wrapper.find('.checkbox-dropdown-toggle').on('click', function () {
                    $(this).siblings('.checkbox-dropdown-menu').toggle();
                });

                // Select All functionality
                $wrapper.find('.select-all-subjects').on('change', function () {
                    $(this).closest('.checkbox-dropdown-menu').find('.subject-checkbox')
                        .prop('checked', $(this).prop('checked'));
                });

                // Close dropdown on outside click
                $(document).on('click', function (e) {
                    if (!$(e.target).closest('.checkbox-dropdown-wrapper').length) {
                        $('.checkbox-dropdown-menu').hide();
                    }
                });
            }
        });
    } else {
        $pid.empty().append('<option value="0">Select </option>');
        $cid.empty().append('<option value="0">Select </option>');
        $sub_id.empty().append('<option value="0">Select </option>');
    }
});

</script>

@endpush
