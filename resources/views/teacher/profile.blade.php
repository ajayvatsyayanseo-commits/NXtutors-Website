 @include('include.teacherheader')
 <style>
.faq-item {
  margin-top: 15px;
  border-bottom: 1px solid #ddd;
}

.faq-question {
  width: 100%;
  background: #f1e4e4e8;
  border: none;
  padding: 15px;
  text-align: left;
  font-size: 16px;
  cursor: pointer;
  font-weight: 600;
  outline: none;
  display: flex;
  justify-content: space-between;
  align-items: center;
  transition: background 0.3s ease;
}

.faq-question:hover {
  background: #e9ecef;
}

.faq-icon {
  font-size: 20px;
  font-weight: bold;
  transition: 0.3s ease;
}

.faq-question.active .faq-icon {
  content: "-";
}

.faq-answer {
  display: none;
  padding: 15px;
  background: #fefefe;
  font-size: 15px;
  color: #333;
}

.betterTagBlk {
    display: flex;
    background: #EAF7FB;
    padding: 15px;
    margin: 15px 30px 6px 30px;
    font-size: 14px;
    font-weight: 600;
    border-radius: 4px;
}
.remove-image {
    float: right;
    position: relative;
    bottom: 150px;
    border-radius: 50%;
        width: auto;
    left: 95%;

}

.checkbox-dropdown-wrapper {
    position: relative;
    width: 100%;
}

.checkbox-dropdown-toggle {
    padding: 10px;
    border: 1px solid #ccc;
    background: #f9f9f9;
    cursor: pointer;
    border-radius: 4px;
}

.checkbox-dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    max-height: 200px;
    overflow-y: auto;
    border: 1px solid #ccc;
    background: white;
    display: none;
    z-index: 999;
    border-radius: 4px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.checkbox-item {
    padding: 8px 10px;
    border-bottom: 1px solid #eee;
}

@media (max-width:767.98px){ 
.remove-image {
    position: relative;
    width: auto;
    /* right: 6px; */
    bottom: 300px;
     border-radius: 50%;
     left: 93%;
}
.remove-image.first-remove {
    bottom: 256px;
}
}
 </style>
 <div class="right_col" role="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/')}}/teacher/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div> 
  <div class="col-lg-12" >
  <h2>Profile Information</h2>
   @if (session('success'))
            <div id="success-message" class="alert alert-success">
                {{ session('success') }}
            </div>
   @endif
<div class="betterTagBlk">
           
          <p class="mt-2">Do you want to have a better looking profile? NX Tutor Team can help!! <a href="{{ url('/')}}" target="_self">Learn More</a></p>
</div>
  <div class="faq-item">
    <button class="faq-question"> <h5><i class="fa fa-user"></i>Personal Information</h5><span class="faq-icon">+</span></button>
    <div class="faq-answer">
      <form name="user_info" action="{{ route('teacher.profile.update') }}" id="user_info" method="post">
        @csrf
         <div class="row">
        <div class="form-group col-lg-12">
          <label for="name"><i class="fa fa-user"></i> Full Name</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Enter full name" value="{{ old('name',$teacher->name)}}">
          @error('name')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <!-- Email -->
        <div class="form-group col-lg-6">
          <label for="email"><i class="fa fa-envelope"></i> Email address</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{ old('email',$teacher->email)}}">
          @error('email')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <!-- Phone -->
        <div class="form-group col-lg-6">
          <label for="phone"><i class="fa fa-phone"></i> Phone Number</label>
          <input type="number" class="form-control" name="phone"  id="phone" value="{{ old('phone', $teacher->phone)}}" placeholder="Enter phone number">
          @error('phone')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <!-- Date of Birth -->
        <div class="form-group col-lg-6">
          <label for="dob"><i class="fa fa-calendar"></i> Date of Birth</label>
          <input type="date" class="form-control" name="dob" id="dob" value="@if($teacher->dob !=''){{ $teacher->dob}}@endif">
          @error('dob')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <!-- <div class="form-group col-lg-6">
          <label for="dob"><i class="fa fa-globe"></i> Website or Blog</label>
          <input type="text" class="form-control" id="website" name="website">
        </div> -->

        <!-- Gender -->
        <div class="form-group col-lg-6">
              <label><i class="fa fa-venus-mars"></i> Gender</label>
              <select class="form-control" name="gender" id="gender">
                  <option value="">Select</option>
                  <option value="male"{{ old('gender', $teacher->gender) == 'male' ? 'selected' : '' }}>Male</option>
                  <option value="female"{{ old('gender', $teacher->gender) == 'female' ? 'selected' : '' }}>Female</option>
                  <option value="other" {{ old('gender', $teacher->gender) == 'other' ? 'selected' : '' }}>Other</option>
              </select> 
              @error('gender')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
             <div class="form-group col-lg-6">
              <label><i class="fa fa-venus-mars"></i> Class Type</label>
              <select class="form-control" name="class_type" id="class_type">
                  <option value="">Select</option>
                  <option value="online"{{ old('online', $teacher->class_type) == 'online' ? 'selected' : '' }}>Online</option>
                  <option value="offline"{{ old('offline', $teacher->class_type) == 'offline' ? 'selected' : '' }}>Offline</option>
                  <option value="both" {{ old('both', $teacher->class_type) == 'both' ? 'selected' : '' }}>Both</option>
              </select> 
              @error('gender')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group col-lg-6">
          <label for="dob"><i class="fa fa-globe"></i>Profile Tag(Max: 60 Charaters)</label>
          <input type="text" class="form-control" id="profile" name="profile" value="{{ old('profile', $teacher->profile)}}">
        </div>
        <div class="form-group col-lg-12">
          <label for="dob"><i class="fa fa-globe"></i>Profile Description(Max:160 Charaters ))</label>
          <textarea name="pro_desc" id="pro_desc" class="form-control">{{ old('pro_desc', $teacher->pro_desc)}}</textarea>
        </div>
        <div class="form-group col-lg-12">
          <label for="dob"><i class="fa fa-globe"></i>About Teacher(Min : 800 Words )</label>
          <textarea name="profile_desc" id="profile_desc" class="form-control">{{ old('profile_desc', $teacher->profile_desc)}}</textarea>
        </div>
        </div>
        <!-- Submit Button -->
        <input type="hidden" name="id" id="id" value="{{ $teacher->id}}">
         <input type="hidden" name="form_type" value="personal">
        <button type="submit" class="btn btn-primary">
          <i class="fa fa-paper-plane"></i> Save
        </button>
        </div>
      </form>  
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question"><h5><i class="fa fa-map-marker"></i>Address </h5> <span class="faq-icon">+</span></button>
    <div class="faq-answer">
      <!-- Go to your profile settings and upload a logo or media files under the "Gallery" section. Accepted formats include JPG, PNG, and MP4. -->
      <form name="user_address" action="{{ route('teacher.profile.update') }}" id="user_address" method="post">
        @csrf
         <div class="row">
        <div class="form-group col-lg-6">
          <label for="name"><i class="fa fa-city"></i>City Name</label>
          <input type="text" name="city" class="form-control" id="city" placeholder="Enter full city" value="{{ old('city',$teacher->city)}}">
          @error('city')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <!-- Email -->
        <div class="form-group col-lg-6">
          <label for="email"><i class="fa fa-city"></i> District name</label>
          <input type="text" class="form-control" name="district" id="district" placeholder="Enter district" value="{{ old('district', $teacher->district)}}">
          @error('district')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <!-- Phone -->
        <div class="form-group col-lg-6">
          <label for="phone"><i class="fa fa-city"></i>State</label>
          <input type="text" class="form-control" name="state"  id="state" value="{{ old('state', $teacher->state ) }}" placeholder="Enter state">
          @error('state')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <!-- Date of Birth -->
        <div class="form-group col-lg-6">
          <label for="dob"><i class="fa fa-city"></i> Pincode</label>
          <input type="number" class="form-control" name="pincode" id="pincode" value="{{ old('pincode', $teacher->pincode )}}">
          @error('pincode')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group col-lg-12">
          <label for="dob"><i class="fa fa-city"></i>Address</label>
          <textarea class="form-control" id="address" name="address">{{ old('address', $teacher->address)}}</textarea>
          @error('address')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <!-- Gender -->
         </div>
        <!-- Submit Button -->
         <input type="hidden" name="form_type" value="address">
         <input type="hidden" name="id" id="id" value="{{ $teacher->id}}">
        <button type="submit" class="btn btn-primary">
         
          <i class="fa fa-paper-plane"></i> Save
        </button>
       
      </form>  
    </div>
  </div>
  <div class="faq-item">
    <button class="faq-question"><h5><i class="fa fa-image"></i>Profile Photo </h5> <span class="faq-icon">+</span></button>
    <div class="faq-answer">
       <form method="post"  action="{{ route('teacher.profile.update') }}" name="editprofile_form" id="editprofile_form" enctype="multipart/form-data">
       @csrf
       <div class="form-group col-lg-12">
          <label for="dob"><i class="fa fa-image"></i> Profile Image</label>
          <input type="file" class="form-control" name="avatar" id="avatar">
           @if($teacher && $teacher->avatar)
              <img id="blah" class="profile_image" width="150px" height="150px" src="{{ asset('admin/assets') }}/img/profile-img.jpg" />
              @else
             <img  id="blah" class="profile_image" width="150px" height="150px"  src="{{ asset('storage/user') }}/{{ $teacher->avatar}}" />
             @endif
             @error('avatar')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <input type="hidden" name="form_type" value="profile_image">
         <input type="hidden" name="id" id="id" value="{{ $teacher->id}}">
        <button type="submit" class="btn btn-primary">
         
          <i class="fa fa-paper-plane"></i> Save
        </button>
     </form>

    </div>
  </div>
  <!-- <div class="faq-item">
    <button class="faq-question"><h5><i class="fa fa-image"></i>UrbanPro Verified badge </h5> <span class="faq-icon">+</span></button>
    <div class="faq-answer">
      Go to your profile settings and upload a logo or media files under the "Gallery" section. Accepted formats include JPG, PNG, and MP4.
    </div>
  </div> -->
  <div class="faq-item">
    <button class="faq-question"><h5><i class="fa fa-graduation-cap"></i>Qualification & Experience </h5> <span class="faq-icon">+</span></button>
    <div class="faq-answer">
      <!-- Go to your profile settings and upload a logo or media files under the "Gallery" section. Accepted formats include JPG, PNG, and MP4. -->
       <form method="post"  action="{{ route('teacher.profile.update') }}" name="qualification_form" id="qualification_form" enctype="multipart/form-data">
       @csrf
       <div class="form-group col-lg-12">
          <label for="phone"><i class="fa fa-city"></i>Hightest Qualification </label>
          <input type="text" class="form-control" name="education"  id="education" value="{{ old('education', $teacher->education) }}" placeholder="Enter hightest qualification">
           @error('education')
                    <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-lg-12">
          <label for="phone"><i class="fa fa-city"></i>Other Qualification </label>
          <input type="text" class="form-control" name="other_education"  id="other_education" value="{{ old('other_education', $teacher->other_education)}}" placeholder="Enter other qualification">
          @error('other_education')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
       <div class="form-group col-lg-12">
          <label for="dob"><i class="fa fa-image"></i> Degree Image</label>
          <input type="file" class="form-control" name="degree" id="degree">
           @if($teacher->degree!='')
              
             <img  id="blah1" class="profile_image" width="150px" height="150px"  src="{{ asset('storage/user') }}/{{ $teacher->degree}}" />
            @else
            <img src="javascript:void(0)" id="blah1" class="profile_image" style="display: none;">
            @endif
            @error('degree')
              <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group col-lg-12">
          <label for="phone"><i class="fa fa-city"></i>Experience </label>
          <input type="text" class="form-control" name="experience"  id="experience" value="{{ old('experience', $teacher->experience ) }}" placeholder="Enter experience">
          @error('experience')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group col-lg-12">
        <input type="hidden" name="form_type" value="qualification_form">
         <input type="hidden" name="id" id="id" value="{{ $teacher->id}}">
        <button type="submit" class="btn btn-primary">
         
          <i class="fa fa-paper-plane"></i> Save
        </button>
      </div>
     </form>

    </div>
  </div>
  <div class="faq-item">
    <button class="faq-question"><h5><i class="fa fa-school"></i>Course & Subject </h5> <span class="faq-icon">+</span></button>
    <div class="faq-answer">
       <form method="post"  action="{{ route('teacher.profile.update') }}" name="couse_form" id="couse_form" enctype="multipart/form-data">
       @csrf

       @if($totalcourse > 0)
       @php $a=1; @endphp
       @foreach($course as $rowc)
       <div class="row variant-wrapper">
       <div class="form-group col-lg-6">
          <label for="phone"><i class="fa fa-city"></i>Main Course </label>
          <select class="form-control cat_id" name="cat_id[]"  id="cat_id">
              <option value="0"> Select Course</option>
              @foreach($categories as $rowss)
              <option value="{{ $rowss->id}}" @if($rowc->cat_id==$rowss->id) selected @endif >{{ $rowss->cat_title}}</option>
              @endforeach
          </select>
          @error('cat_id')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group col-lg-6">
          <label for="phone"><i class="fa fa-city"></i>Board Name </label>
          <select class="form-control pid" name="pid[]"  id="pid">
              <option value="0">Select</option>
                @foreach($rowc->boards as $board)
        <option value="{{ $board->id }}" @if($rowc->pid == $board->id) selected @endif>
            {{ $board->cat_title }}
        </option>
    @endforeach
          </select>
          @error('pid')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group col-lg-6">
          <label for="phone"><i class="fa fa-city"></i>Class Name </label>
          <select class="form-control cid" name="cid[]"  id="cid">
            <option value="0">Select</option>
    @foreach($rowc->classes as $class)
        <option value="{{ $class->id }}" @if($rowc->cid == $class->id) selected @endif>
            {{ $class->cat_title }}
        </option>
    @endforeach
          </select>
          @error('cid')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <!-- <div class="form-group col-lg-6">
          <label for="phone"><i class="fa fa-city"></i>Subject Name </label>
          <select class="form-control sub_id" name="sub_id[]"  id="sub_id"></select>
        </div> -->
        <div class="form-group col-lg-6">
    <label for="sub_id"><i class="fa fa-city"></i> Subject Name</label>
    <div class="sub_id">
        @foreach($rowc->subjects as $subject)
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
        @error('sub_id')
            <div class="text-danger">{{ $message }}</div>
          @enderror
    </div>
</div>
        <a data-id="{{ $rowc->id }}" onclick="removecourse(this)"  class="btn btn-danger remove-image {{ $a == 1 ? 'first-remove' : '' }}">x</a>
    </div>
    @php $a++; @endphp
    @endforeach
    @endif
    <a href="javascript:void(0)" class="btn btn-primary add-more variant-wrapper">Add More</a>
    <div class="col-lg-12">
        <input type="hidden" name="form_type" value="couse_form">
         <input type="hidden" name="id" id="id" value="{{ $teacher->id}}">
         <input type="hidden"  name="user_id" value="{{ $teacher->user_id}}">
        <button type="submit" class="btn btn-primary">
           <i class="fa fa-paper-plane"></i> Save
        </button>
      </div>
     </form>
    </div>
  </div> 
  <div class="faq-item">
    <button class="faq-question"><h5><i class="fa fa-school"></i>Document Verificatin</h5> <span class="faq-icon">+</span></button>
    <div class="faq-answer">
       <form method="post"  action="{{ route('teacher.profile.update') }}" name="document_form" id="document_form" enctype="multipart/form-data">
       @csrf
       <div class="row">
       <div class="form-group col-lg-6">
          <label for="phone"><i class="fa fa-file"></i>Document Type </label>
          <select class="form-control"  name="document_type" id="document_type">
              <option value="">Select</option>
              <option value="aadhar" {{ old('document_type', $teacher->document_type) == 'aadhar' ? 'selected' : '' }}>Aadhar Card</option>
    <option value="voter" {{ old('document_type', $teacher->document_type) == 'voter' ? 'selected' : '' }}>Voter ID Card</option>
    <option value="passport" {{ old('document_type', $teacher->document_type) == 'passport' ? 'selected' : '' }}>Passport</option>
    <option value="driving" {{ old('document_type', $teacher->document_type) == 'driving' ? 'selected' : '' }}>Driving Licence</option>
          </select>
          @error('document_type')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group col-lg-6">
          <label for="phone"><i class="fa fa-city"></i>Document Number </label>
          <input type="text" class="form-control" name="document_number" id="document_number" value="{{ old('document_number', $teacher->document_number )}}" placeholder="Document Number">
          @error('document_number')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
       <div class="form-group col-lg-6">
          <label for="dob"><i class="fa fa-image"></i>Document Frount Image</label>
          <input type="file" class="form-control" name="frount_image" id="frount_image">
           @if($teacher->frount_image!='')
              
             <img  id="blah2" class="profile_image" width="150px" height="150px"  src="{{ asset('storage/user') }}/{{ $teacher->frount_image}}" />
             @else
            <img src="javascript:void(0)" id="blah2" class="profile_image" style="display: none;">
             @endif
             @error('frount_image')
              <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group col-lg-6">
          <label for="dob"><i class="fa fa-image"></i>Document Back Image</label>
          <input type="file" class="form-control" name="back_image" id="back_image">
           @if($teacher->back_image!='')
              
             <img  id="blah3" class="profile_image" width="150px" height="150px"  src="{{ asset('storage/user') }}/{{ $teacher->back_image}}" />
             @else
            <img src="javascript:void(0)" id="blah3" class="profile_image" style="display: none;">
             @endif
            @error('back_image')
              <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
      </div>
        <div class="form-group col-lg-12">
        <input type="hidden" name="form_type" value="document_formss">
         <input type="hidden" name="id" id="id" value="{{ $teacher->id}}">
        <button type="submit" class="btn btn-primary">
         
          <i class="fa fa-paper-plane"></i> Save
        </button>
      </div>
     </form>
    </div>
  </div>
  <!-- <div class="faq-item">
    <button class="faq-question"><h5><i class="fa fa-images"></i>Gallery</h5> <span class="faq-icon">+</span></button>
    <div class="faq-answer">
      Go to your profile settings and upload a logo or media files under the "Gallery" section. Accepted formats include JPG, PNG, and MP4.
    </div>
  </div> -->
  <!-- <div class="faq-item">
        <a class="faq-question" href="javascript:void(0)"> Your Profile on IB Gram </a>
  </div> -->
</div>
     
    
  </div>

  @include('include.teacherfooter')

  <script>
    $('.add-more').click(function () {
    $('.variant-wrapper:last').before(`
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
  document.querySelectorAll('.faq-question').forEach(button => {
  button.addEventListener('click', () => {
    const answer = button.nextElementSibling;
    const isOpen = answer.style.display === 'block';

    // Close all
    document.querySelectorAll('.faq-answer').forEach(a => a.style.display = 'none');
    document.querySelectorAll('.faq-question').forEach(btn => {
      btn.classList.remove('active');
      btn.querySelector('.faq-icon').textContent = '+';
    });

    // Open if not already open
    if (!isOpen) {
      answer.style.display = 'block';
      button.classList.add('active');
      button.querySelector('.faq-icon').textContent = '−';
    }
  });
});
  </script>

  <!-- <script>
   $(document).on('change', '.pid', function () {
    var $wrapper = $(this).closest('.variant-wrapper');
    var catId = $(this).val();
    var pid = $wrapper.find('cat_id');
    var $cid = $wrapper.find('.cid');
    var $sub_id = $wrapper.find('.sub_id');

    if (catId != "0") {
        $.ajax({
            url: '{{ url('/') }}/get-parent-categories/' + catId,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                $cid.empty().append('<option value="0">Select </option>');
                $sub_id.empty().append('<option value="0">Select </option>');

                $.each(data.child_categories, function (index, category) {
                    $cid.append('<option value="' + category.id + '">' + category.cat_title + '</option>');
                });

                $.each(data.products, function (index, product) {
                    $sub_id.append('<option value="' + product.id + '">' + product.title + '</option>');
                });
            }
        });
    } else {
        $cid.empty().append('<option value="0">Select </option>');
        $sub_id.empty().append('<option value="0">Select </option>');
    }
});

</script> -->
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
 