 @include('include.header')
<link rel="stylesheet" href="{{ asset('frount/assets') }}/css/newstyle.css">


    <div class="row">


	 <div class="myaccount-sidebar col-lg-2 ">
       @include('include.userleftsidebar')
     </div>
     <div class="myaccount-form col-lg-9 ">
	 
                @if (session('success'))
            <div id="success-message" class="alert alert-success">
                {{ session('success') }}
            </div>
         @endif
                                <form method="post"  action="{{ route('user.profile.update') }}" name="editprofile_form" id="editprofile_form" enctype="multipart/form-data">
                                    @csrf
        
                                    <div class="account-title">
                                        <h2>Personal Information</h2>
                                    </div>
                                
                                  <div class="row">
                                  
                                
                                <div class="form-group col-lg-12">
                                    <label class="myaccount_lable" for="Name"><i class="fa fa-user"></i>Name</label>
                                  
                                 <input type="text" class="form-control"   name="name" id="name"  placeholder="Name" value="{{ $user->name}}">
                      @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                              
                                </div>
                                 
                                 
                                  <!-- Text input-->
                                
                                <div class="form-group col-lg-6">
                                    <label class="myaccount_lable" for="Email"><i class="fa fa-envelope"></i>Email Address</label>
                                  
                                        <input type="text" class="form-control"   name="email" id="email"   placeholder="E-mail" value="{{ $user->email}}">

                                        @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                                   
                                </div>
                                <!-- Text input-->
                                <div class="form-group col-lg-6">
                                    <label class="myaccount_lable"  for="Phone"><i class="fa fa-mobile"></i>Phone</label>
                             
                                        <input type="text" class="form-control"  name="phone" id="phone" onKeyPress="return onlyNumberKey(event)" maxlength="10" placeholder="Phone" value="{{ $user->phone}}" />
                                 @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                                </div>
                                </div>
                           
                                
                                <div class="account-title"><h2>Permanenet Address</h2></div>
                                <div class="row">
                                <div class="form-group col-lg-6">
                                    <label class="myaccount_lable" for="Name"><i class="fa fa-map-marker"></i>City/Village</label>
                                    
                                        <input class="form-control"  type="text" name="city" id="city" placeholder="City" value="{{ $user->city}}"  >

                                        @error('city')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                                      
                                </div>
                         
                                <!-- Text input-->
                                
                                <div class="form-group col-lg-6">
                                    <label class="myaccount_lable" for="Email"><i class="fa fa-map-marker"></i>District</label>
                                  
                                        <input type="text" class="form-control"   name="district" id="district" placeholder="District" value="{{ $user->district}}"   >
                                   @error('district')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                                </div>
                                <!-- Text input-->
                                
                                 
                                <div class="form-group col-lg-6">
                                    <label class="myaccount_lable" for="Name"><i class="fa fa-map-marker"></i>State</label>
                                    
                                        <input class="form-control" type="text"  name="state" id="state" placeholder="State" value="{{ $user->state}}"  > 
                                        @error('state')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                                      
                                </div>
                         
                                <!-- Text input-->
                                
                                <div class="form-group col-lg-6">
                                    <label class="myaccount_lable" for="Email"><i class="fa fa-map-marker"></i>Pin Code</label>
                                 
                                        <input type="text" class="form-control"   name="pincode" id="pincode" placeholder="Pin Code" onKeyPress="return onlyNumberKey(event)" maxlength="6" value="{{ $user->pincode}}" >
                                        @error('pincode')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                                   
                                </div>
                                <!-- Text input-->
                                </div>
                                <!-- Textarea -->
                                <div class="form-group col-lg-12">
                                    <label class="myaccount_lable" for="textarea"><i class="fa fa-map-marker"></i>Address</label>
                                   
                                        <textarea  class="form-control"  id="address" name="address"  placeholder="Address" > {{ $user->address}}  </textarea>
                                        @error('address')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                                      
                                </div>
                                <div class="account-title"><h2>Profile Image</h2></div>
                                <div class="form-group col-lg-12">
                                    
                                     <input type="file" class="form-control_file"  name="avatar" id="avatar"  >
                                     
                                    @if($user->avatar=='')
                                   <img id="blah" class="profile_image" src="{{ asset('admin/assets') }}/img/profile-img.jpg" />
                                   @else

                                   <img  id="blah" class="profile_image" src="{{ asset('storage/user') }}/{{ $user->avatar}}" />
                                   @endif
                     
                                    
                                </div>
                                
                                
                                
                                
                                 <div class="form-group">
                                      <input type="hidden" name="id" id="id" value="{{ $user->id}}">
                                        <button class="btn btn-primary py-2 px-4" type="submit" name="submit">
                                            Save Changes
                                        </button>
                                   
                                </div>
                                <!-- Button -->
                                </form>

	 </div>
 @include('include.footer')
