 @include('include.userheader')
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
          <li class="breadcrumb-item"><a href="{{ url('/')}}/user/dashboard">Dashboard</a></li>
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
      <form name="user_info" action="{{ route('user.profile.update') }}" id="user_info" method="post">
        @csrf
         <div class="row">
        <div class="form-group col-lg-12">
          <label for="name"><i class="fa fa-user"></i> Full Name</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Enter full name" value="{{ old('name',$user->name)}}">
          @error('name')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <!-- Email -->
        <div class="form-group col-lg-6">
          <label for="email"><i class="fa fa-envelope"></i> Email address</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{ old('email',$user->email)}}">
          @error('email')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <!-- Phone -->
        <div class="form-group col-lg-6">
          <label for="phone"><i class="fa fa-phone"></i> Phone Number</label>
          <input type="number" class="form-control" name="phone"  id="phone" value="{{ old('phone', $user->phone)}}" placeholder="Enter phone number">
          @error('phone')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <!-- Date of Birth -->
        <div class="form-group col-lg-6">
          <label for="dob"><i class="fa fa-calendar"></i> Date of Birth</label>
          <input type="date" class="form-control" name="dob" id="dob" value="@if($user->dob !=''){{ $user->dob}}@endif">
          @error('dob')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
 

        <!-- Gender -->
        <div class="form-group col-lg-6">
              <label><i class="fa fa-venus-mars"></i> Gender</label>
              <select class="form-control" name="gender" id="gender">
                  <option value="">Select</option>
                  <option value="male"{{ old('gender', $user->gender) == 'male' ? 'selected' : '' }}>Male</option>
                  <option value="female"{{ old('gender', $user->gender) == 'female' ? 'selected' : '' }}>Female</option>
                  <option value="other" {{ old('gender', $user->gender) == 'other' ? 'selected' : '' }}>Other</option>
              </select> 
              @error('gender')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
             
        </div>
        <!-- Submit Button -->
        <input type="hidden" name="id" id="id" value="{{ $user->id}}">
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
          <input type="text" name="city" class="form-control" id="city" placeholder="Enter full city" value="{{ old('city',$user->city)}}">
          @error('city')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <!-- Email -->
        <div class="form-group col-lg-6">
          <label for="email"><i class="fa fa-city"></i> District name</label>
          <input type="text" class="form-control" name="district" id="district" placeholder="Enter district" value="{{ old('district', $user->district)}}">
          @error('district')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <!-- Phone -->
        <div class="form-group col-lg-6">
          <label for="phone"><i class="fa fa-city"></i>State</label>
          <input type="text" class="form-control" name="state"  id="state" value="{{ old('state', $user->state ) }}" placeholder="Enter state">
          @error('state')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <!-- Date of Birth -->
        <div class="form-group col-lg-6">
          <label for="dob"><i class="fa fa-city"></i> Pincode</label>
          <input type="number" class="form-control" name="pincode" id="pincode" value="{{ old('pincode', $user->pincode )}}">
          @error('pincode')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group col-lg-12">
          <label for="dob"><i class="fa fa-city"></i>Address</label>
          <textarea class="form-control" id="address" name="address">{{ old('address', $user->address)}}</textarea>
          @error('address')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <!-- Gender -->
         </div>
        <!-- Submit Button -->
         <input type="hidden" name="form_type" value="address">
         <input type="hidden" name="id" id="id" value="{{ $user->id}}">
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
           @if($user->avatar=='')
              <img id="blah" class="profile_image" width="150px" height="150px" src="{{ asset('admin/assets') }}/img/profile-img.jpg" />
              @else
             <img  id="blah" class="profile_image" width="150px" height="150px"  src="{{ asset('storage/user') }}/{{ $user->avatar}}" />
             @endif
             @error('avatar')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <input type="hidden" name="form_type" value="profile_image">
         <input type="hidden" name="id" id="id" value="{{ $user->id}}">
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
    <button class="faq-question"><h5><i class="fa fa-graduation-cap"></i>Qualification   </h5> <span class="faq-icon">+</span></button>
    <div class="faq-answer">
      <!-- Go to your profile settings and upload a logo or media files under the "Gallery" section. Accepted formats include JPG, PNG, and MP4. -->
       <form method="post"  action="{{ route('teacher.profile.update') }}" name="qualification_form" id="qualification_form" enctype="multipart/form-data">
       @csrf
       <div class="form-group col-lg-12">
          <label for="phone"><i class="fa fa-city"></i>Hightest Qualification </label>
          <input type="text" class="form-control" name="education"  id="education" value="{{ old('education', $user->education) }}" placeholder="Enter hightest qualification">
           @error('education')
                    <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-lg-12">
          <label for="phone"><i class="fa fa-city"></i>Other Qualification </label>
          <input type="text" class="form-control" name="other_education"  id="other_education" value="{{ old('other_education', $user->other_education)}}" placeholder="Enter other qualification">
          @error('other_education')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
       <div class="form-group col-lg-12">
          <label for="dob"><i class="fa fa-image"></i> Degree Image</label>
          <input type="file" class="form-control" name="degree" id="degree">
           @if($user->degree!='')
              
             <img  id="blah1" class="profile_image" width="150px" height="150px"  src="{{ asset('storage/user') }}/{{ $user->degree}}" />
            @else
            <img src="javascript:void(0)" id="blah1" class="profile_image" style="display: none;">
            @endif
            @error('degree')
              <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        
        <div class="form-group col-lg-12">
        <input type="hidden" name="form_type" value="qualification_form">
         <input type="hidden" name="id" id="id" value="{{ $user->id}}">
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
              <option value="aadhar" {{ old('document_type', $user->document_type) == 'aadhar' ? 'selected' : '' }}>Aadhar Card</option>
    <option value="voter" {{ old('document_type', $user->document_type) == 'voter' ? 'selected' : '' }}>Voter ID Card</option>
    <option value="passport" {{ old('document_type', $user->document_type) == 'passport' ? 'selected' : '' }}>Passport</option>
    <option value="driving" {{ old('document_type', $user->document_type) == 'driving' ? 'selected' : '' }}>Driving Licence</option>
          </select>
          @error('document_type')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group col-lg-6">
          <label for="phone"><i class="fa fa-city"></i>Document Number </label>
          <input type="text" class="form-control" name="document_number" id="document_number" value="{{ old('document_number', $user->document_number )}}" placeholder="Document Number">
          @error('document_number')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
       <div class="form-group col-lg-6">
          <label for="dob"><i class="fa fa-image"></i>Document Frount Image</label>
          <input type="file" class="form-control" name="frount_image" id="frount_image">
           @if($user->frount_image!='')
              
             <img  id="blah2" class="profile_image" width="150px" height="150px"  src="{{ asset('storage/user') }}/{{ $user->frount_image}}" />
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
           @if($user->back_image!='')
              
             <img  id="blah3" class="profile_image" width="150px" height="150px"  src="{{ asset('storage/user') }}/{{ $user->back_image}}" />
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
         <input type="hidden" name="id" id="id" value="{{ $user->id}}">
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

  @include('include.userfooter')
 
 

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
 