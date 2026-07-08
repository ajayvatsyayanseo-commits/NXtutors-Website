@extends('super.layouts.app')
@section('title','Edit Teacher')

<style>
/* ===================== FORM UI FIX (ALL INPUTS) ===================== */
/* ===================== FORM UI FIX (ALL INPUTS) ===================== */
/* NOTE: checkbox/radio excluded so tick works properly */
.main input:not([type="checkbox"]):not([type="radio"]),
.main select,
.main textarea {
    border: 1px solid #d7dce1;
    border-radius: 8px;
    font-size: 14px;
    padding: 10px 12px;
    box-sizing: border-box;
    background: #fff;
}

/* height only for normal inputs/selects (not file/checkbox/radio) */
.main input:not([type="file"]):not([type="checkbox"]):not([type="radio"]),
.main select {
    height: 44px;
}

/* textarea */
.main textarea {
    min-height: 90px;
    height: auto !important;
}

/* file input */
.main input[type="file"]{
    height: auto !important;
    padding: 6px 10px;
}

/* labels */
.main label {
    font-weight: 600;
    margin-bottom: 6px;
    display: inline-block;
}

/* ✅ checkbox/radio fix (important for subjects tick) */
.main input[type="checkbox"],
.main input[type="radio"]{
    width: 16px;
    height: 16px !important;
    padding: 0 !important;
    margin: 0;
    border-radius: 3px;
    border: 1px solid #adb5bd;
    accent-color: #0d6efd; /* optional */
    vertical-align: middle;
}

/* ===================== COURSE CARD ===================== */
.variant-wrapper {
    background: #fff !important;
    border: 1px solid #e6e8eb !important;
    border-radius: 12px !important;
    padding: 16px !important;
    margin-bottom: 18px !important;
    position: relative;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

/* ===================== REMOVE BUTTON ===================== */
.remove-image {
    position: absolute !important;
    top: 12px;
    right: 12px;
    width: 34px !important;
    height: 34px !important;
    border-radius: 8px; /* better look */
    padding: 0 !important;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    line-height: 1;
}

/* ===================== SUBJECT DROPDOWN ===================== */
.checkbox-dropdown-wrapper {
    position: relative;
    width: 100%;
}

.checkbox-dropdown-toggle {
    height: 44px;
    border: 1px solid #d7dce1;
    border-radius: 8px;
    padding: 10px 12px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    background: #fff;
}

.checkbox-dropdown-toggle .count-badge {
    background: #6c757d;
    color: #fff;
    font-size: 12px;
    padding: 4px 8px;
    border-radius: 999px;
}

.checkbox-dropdown-menu {
    position: absolute;
    top: calc(100% + 6px);
    left: 0;
    width: 100%;
    max-height: 240px;
    overflow-y: auto;
    background: #fff;
    border: 1px solid #d7dce1;
    border-radius: 10px;
    display: none;
    z-index: 9999;
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
}

.checkbox-item {
    padding: 10px 12px;
    border-bottom: 1px solid #f0f2f5;
}
.checkbox-item:last-child { border-bottom: none; }

.checkbox-item label {
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 0;
}

/* ===================== MOBILE ===================== */
@media (max-width: 767px) {
    .variant-wrapper { padding: 12px !important; }
}

</style>

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Teacher</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('super.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Teacher</li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                @if (session('success'))
                    <div id="success-message" class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card">
                    <div class="card-body">

                        <a style="float:right;margin-top:-50px" href="{{ route('super.teacher.index') }}" class="btn btn-primary">Back</a>

                        <form method="POST" action="{{ route('super.teacher.update',$page->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            @php
                                $statuses = ['t' => 'Active', 'f' => 'Pending'];
                                $userTypes = ['Individual' => 'For an Individual', 'Institute' => 'For an Institute'];
                            @endphp

                            <div class="row mt-3">

                                <div class="col-md-6 mb-3">
                                    <label>User Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name',$page->name) }}">
                                    @error('name')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Email Address</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email',$page->email) }}">
                                    @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Mobile Number</label>
                                    <input type="text" name="phone" class="form-control" value="{{ old('phone',$page->phone) }}">
                                    @error('phone')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Date of Birth</label>
                                    <input type="date" name="dob" class="form-control" value="{{ old('dob',$page->dob) }}">
                                    @error('dob')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>User Type</label>
                                    <select name="user_type" class="form-control">
                                        <option value="">Select</option>
                                        @foreach($userTypes as $key => $label)
                                            <option value="{{ $key }}" {{ old('user_type',$page->user_type)==$key?'selected':'' }}>
                                                {{ $label }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('user_type')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Pin Code</label>
                                    <input type="text" name="pincode" class="form-control" value="{{ old('pincode',$page->pincode) }}">
                                    @error('pincode')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>State Name</label>
                                    <input type="text" name="state" class="form-control" value="{{ old('state',$page->state) }}">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>District Name</label>
                                    <input type="text" name="district" class="form-control" value="{{ old('district',$page->district) }}">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>City Name</label>
                                    <input type="text" name="city" class="form-control" value="{{ old('city',$page->city) }}">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label>Address</label>
                                    <textarea name="address" class="form-control">{{ old('address',$page->address) }}</textarea>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>User Image</label>
                                    <input type="file" name="avatar" id="avatar" class="form-control">
                                    @if($page && $page->avatar)
                                        <img src="{{ asset('public/storage/user/'.$page->avatar) }}" id="blah" style="max-width:100px;height:100px;margin-top:8px;">
                                    @else
                                        <img src="javascript:void(0)" id="blah" style="max-width:100px;height:100px;margin-top:8px;display:none;">
                                    @endif
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Degree Image</label>
                                    <input type="file" name="degree" id="degree" class="form-control">
                                    @if($page && $page->degree)
                                        <img src="{{ asset('public/storage/user/'.$page->degree) }}" id="blah1" style="max-width:100px;height:100px;margin-top:8px;">
                                    @else
                                        <img src="javascript:void(0)" id="blah1" style="max-width:100px;height:100px;margin-top:8px;display:none;">
                                    @endif
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Highest Qualification</label>
                                    <input type="text" name="education" class="form-control" value="{{ old('education',$page->education) }}">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Other Qualification</label>
                                    <input type="text" name="other_education" class="form-control" value="{{ old('other_education',$page->other_education) }}">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label>Experience</label>
                                    <input type="text" name="experience" class="form-control" value="{{ old('experience',$page->experience) }}">
                                </div>

                            </div>

                            <hr>
                            <h4 class="mt-2">Courses & Subjects</h4>

                            @if($totalcourse > 0)
                                @foreach($course as $index => $rowc)
                                    <div class="variant-wrapper" data-block-index="{{ $index }}">

                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label>Main Course</label>
                                                <select class="form-control cat_id" name="cat_id[]">
                                                    <option value="0">Select</option>
                                                    @foreach($categories as $cat)
                                                        <option value="{{ $cat->id }}" @selected($rowc->cat_id==$cat->id)>
                                                            {{ $cat->cat_title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-4 mb-3">
                                                <label>Board</label>
                                                <select class="form-control pid" name="pid[]">
                                                    <option value="0">Select</option>
                                                    @foreach($rowc->boards as $b)
                                                        <option value="{{ $b->id }}" @selected($rowc->pid==$b->id)>{{ $b->cat_title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-4 mb-3">
                                                <label>Class</label>
                                                <select class="form-control cid" name="cid[]">
                                                    <option value="0">Select</option>
                                                    @foreach($rowc->classes as $c)
                                                        <option value="{{ $c->id }}" @selected($rowc->cid==$c->id)>{{ $c->cat_title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-12">
                                                <label>Subjects</label>
                                                <div class="sub_id"></div>
                                            </div>
                                        </div>

                                        <input type="hidden" name="teacher_course_id[]" value="{{ $rowc->id }}">
                                        <input type="hidden" class="preselected-subjects"
                                               value='@json($rowc->subjects->pluck("product_id")->toArray())'>

                                        <button type="button" class="btn btn-danger remove-image"
                                                data-id="{{ $rowc->id }}"
                                                onclick="removecourse(this)">×</button>
                                    </div>
                                @endforeach
                            @endif

                            <button type="button" class="btn btn-outline-primary add-more mt-2">+ Add Course</button>

                             <div class="row mt-4">
                                <div class="col-md-6 mb-3">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="">Select</option>
                                        @foreach($statuses as $key => $label)
                                            <option value="{{ $key }}" {{ old('status',$page->status)==$key?'selected':'' }}>
                                                {{ $label }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-primary" type="submit">Update Teacher</button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
@endsection


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <script>
    $('.add-more').click(function () {
    let blockIndex = $('.variant-wrapper').length;

    $('.variant-wrapper:last').before(`
        <div class="row variant-wrapper mb-4 p-3 border rounded bg-light" data-index="${blockIndex}">
            <input type="hidden" name="teacher_course_id[]" value="">
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
                <select class="form-control pid" name="pid[]"></select>
            </div>
            <div class="form-group col-lg-6">
                <label>Class Name</label>
                <select class="form-control cid" name="cid[]"></select>
            </div>
            <div class="form-group col-lg-6">
                <label for="sub_id"><i class="fa fa-city"></i> Subject Name</label>
                <div class="sub_id"></div>
            </div>
            <a class="btn btn-danger remove-image first-remove">x</a>
        </div>
    `);
});


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
          url: "{{ url('/')}}/teachercourse/" + id,   
            data: {
                _method: 'DELETE',   
                id: id
            },
            success: function(response) {
                // Handle success
                if (response.success) {
                    alert(response.message);  
 
                    $(elem).closest('.image-wrapper').remove();  
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
<script>
    document.getElementById('avatar').addEventListener('change', function(event) {
        const [file] = event.target.files;
        if (file) {
            document.getElementById('blah').src = URL.createObjectURL(file);
        }
    });
</script>

<script>
    document.getElementById('degree').addEventListener('change', function(event) {
        const [file] = event.target.files;
        const img = document.getElementById('blah1');
        if (file) {
            img.src = URL.createObjectURL(file);
            img.style.display = 'block';
        }
    });
</script>
<script>
    document.getElementById('frount_image').addEventListener('change', function(event) {
        const [file] = event.target.files;
        const img = document.getElementById('blah2');
        if (file) {
            img.src = URL.createObjectURL(file);
            img.style.display = 'block';
        }
    });
</script>
<script>
    document.getElementById('back_image').addEventListener('change', function(event) {
        const [file] = event.target.files;
        const img = document.getElementById('blah3');
        if (file) {
            img.src = URL.createObjectURL(file);
            img.style.display = 'block';
        }
    });
</script>
