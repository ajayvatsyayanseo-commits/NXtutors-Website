 @include('include.userheader')

 <div class="right_col" role="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/')}}/user/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Change Password</li>
        </ol>
      </nav>
    </div> 
  <div class="col-lg-12" >
 	<div class="col-lg-6" >
   @if (session('success'))
            <div id="success-message" class="alert alert-success">
                {{ session('success') }}
            </div>
   @endif
    <form name="user_info" action="{{ route('user.change-password.update') }}" id="user_info" method="post">
        @csrf
        
        <div class="form-group col-lg-12 mb-4">
          <label for="name"> New Password</label>
          <input type="password" name="newpassword" class="form-control" id="newpassword" placeholder="Enter new password" >
          @error('newpassword')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group col-lg-12 mb-4">
          <label for="name"> Confirm Password</label>
          <input type="text" name="cpassword" class="form-control" id="cpassword" placeholder="Enter confirm password" >
          @error('cpassword')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        
        <!-- Submit Button -->
        <input type="hidden" name="id" id="id" value="{{ $user->id}}">
         <input type="hidden" name="form_type" value="change_password">
        <button type="submit" class="btn btn-primary">
          <i class="fa fa-paper-plane"></i> Save
        </button>
        </div>
      </form>  
</div>
</div>
</div>
  @include('include.userfooter')

  <script>
document.getElementById('user_info').addEventListener('submit', function(event) {
    const newPassword = document.getElementById('newpassword').value;
    const confirmPassword = document.getElementById('cpassword').value;

    if (newPassword !== confirmPassword) {
        event.preventDefault();
        alert('New password and confirm password do not match.');
    }
});
</script>