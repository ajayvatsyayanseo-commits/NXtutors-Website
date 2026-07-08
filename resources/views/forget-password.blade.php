 @include('include.header')
 <style>
.forgot-section{
    padding:clamp(32px,6vw,80px) 16px;
}

.forgot-container{
    max-width:1100px;
    margin:auto;
    display:grid;
    grid-template-columns:minmax(0,1fr) minmax(340px,460px);
    gap:clamp(24px,4vw,44px);
    align-items:center;
}

.forgot-left h1{
    color:#fff;
    font-size:clamp(32px,5vw,52px);
    line-height:1.1;
    margin-bottom:16px;
}

.forgot-left p{
    color:#cbd5e1;
    line-height:1.7;
    font-size:15px;
    max-width:560px;
}

.forgot-points{
    margin:24px 0 0;
    padding:0;
    list-style:none;
    display:grid;
    gap:12px;
}

.forgot-points li{
    color:#fff;
    font-size:15px;
}

.forgot-card{
    width:100%;
    padding:clamp(22px,4vw,36px);
    border-radius:26px;
    background:rgba(255,255,255,.07);
    border:1px solid rgba(255,255,255,.14);
    box-shadow:0 24px 70px rgba(0,0,0,.28);
    backdrop-filter:blur(18px);
}

.forgot-card h2{
    color:#fff;
    text-align:center;
    font-size:clamp(24px,3vw,32px);
    margin-bottom:10px;
}

.forgot-card p{
    color:#cbd5e1;
    text-align:center;
    font-size:14px;
    margin-bottom:24px;
}

.forgot-card input{
    width:100%;
    height:52px;
    border:none;
    outline:none;
    border-radius:14px;
    padding:0 15px;
    background:rgba(255,255,255,.09);
    color:#fff;
    font-size:15px;
}

.forgot-card input::placeholder{
    color:#94a3b8;
}

.forgot-card input:focus{
    box-shadow:0 0 0 2px rgba(56,189,248,.35);
}

.forgot-card .tl-7-def-btn{
    width:100%;
    height:54px;
    border:none;
    border-radius:14px;
    background:#fbbf24;
    color:#111827;
    font-weight:800;
    font-size:16px;
}

.forgot-login-link{
    display:flex;
    justify-content:center;
    margin-top:16px;
}

.forgot-login-link a{
    color:#38bdf8;
    text-decoration:none;
    font-weight:600;
}

#msgHolderresister{
    margin-bottom:14px;
}

.loadergif{
    text-align:center;
    margin-bottom:14px;
}

.loadinggif{
    max-width:42px;
}

/* Tablet */
@media(max-width:992px){
    .forgot-container{
        grid-template-columns:1fr;
        max-width:680px;
    }

    .forgot-left{
        text-align:center;
    }

    .forgot-left p{
        margin:auto;
    }

    .forgot-points{
        grid-template-columns:1fr 1fr;
    }
}

/* Mobile */
@media(max-width:576px){
    .forgot-section{
        padding:28px 12px;
    }

    .forgot-card{
        border-radius:20px;
        padding:22px 16px;
    }

    .forgot-points{
        grid-template-columns:1fr;
    }

    .forgot-card input,
    .forgot-card .tl-7-def-btn{
        height:48px;
    }
}
</style>

<section class="forgot-section">
    <div class="forgot-container">

        <div class="forgot-left">
            <h1>Recover Your Password 🔐</h1>
            <p>
                Enter your registered email address. We will verify your OTP and help you create a new password securely.
            </p>

            <ul class="forgot-points">
                <li>✔ OTP verification</li>
                <li>✔ Secure password reset</li>
                <li>✔ Fast account recovery</li>
                <li>✔ Protected student dashboard</li>
            </ul>
        </div>

        <div class="forgot-card">
            <h2>Recover Password</h2>
            <p>Reset your password in a few simple steps.</p>

            <div class="loadergif" style="display:none">
                <img src="{{ asset('public/frount/assets') }}/images/loading.gif" class="loadinggif" />
            </div>

            <div id="msgHolderresister"></div>

            <form class="tl-7-contact-form forget_form"
      name="forget_form"
      id="forget_form"
      method="post"
      action="{{ route('forget') }}">
    @csrf
                <div class="row gy-4">

                    <div class="col-12 col-xxs-12 newemail">
                        <input type="text" name="email" id="email" placeholder="Your Email Address" required />
                    </div>

                    <div class="col-12 col-xxs-12 otpdata" style="display:none;">
                        <input type="text" name="otp" id="otp" placeholder="Enter OTP" />
                    </div>

                    <div class="col-12 col-xxs-12 newpasswords" style="display:none;">
                        <input type="password" name="newpassword" id="newpassword" placeholder="New Password" />
                    </div>

                    <div class="col-12 col-xxs-12 newpasswords" style="display:none;">
                        <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" />
                    </div>

                    <div class="col-12">
                        <input type="hidden" name="step" id="step" value="1">
                        <button type="submit" class="tl-7-def-btn">Submit</button>
                    </div>

                    <div class="col-12 forgot-login-link">
                        <a href="{{ route('login') }}">Back to Login</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
</section>
  @include('include.footer')

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#forget_form").validate({
        submitHandler: function(form) {
            $("#msgHolderresister").html('');
            const step = parseInt($("#step").val());

            // Step-wise frontend validation
            if (step === 1 && !$("#email").val()) {
                $("#msgHolderresister").html('<div class="alert alert-danger">Please enter your email address.</div>');
                return false;
            }

            if (step === 2 && !$("#otp").val()) {
                $("#msgHolderresister").html('<div class="alert alert-danger">Please enter the OTP sent to your email.</div>');
                return false;
            }

            if (step === 3) {
                const newPass = $("#newpassword").val();
                const confirmPass = $("#confirmpassword").val();

                if (!newPass || !confirmPass) {
                    $("#msgHolderresister").html('<div class="alert alert-danger">Please enter and confirm your new password.</div>');
                    return false;
                }

                if (newPass !== confirmPass) {
                    $("#msgHolderresister").html('<div class="alert alert-danger">Passwords do not match.</div>');
                    return false;
                }
            }

            // AJAX call
            var formData = $("#forget_form").serialize();
            $(".loadergif").show();
            $(".tl-7-def-btn").prop("disabled", true);

            $.ajax({
                type: "POST",
                url: "{{ route('forget') }}",
                data: formData,
                cache: false,
                success: function(response) {
                    $(".loadergif").hide();
                    $(".tl-7-def-btn").prop("disabled", false);

                    if (response.success) {
                        $("#msgHolderresister").html('<div class="alert alert-success">' + response.message + '</div>');

                        if (step === 1) {
                            $(".newemail").hide();
                            $(".otpdata").show();
                            $("#step").val(2);
                        } else if (step === 2) {
                            $(".otpdata").hide();
                            $(".newpasswords").show();
                            $("#step").val(3);
                        } else if (step === 3) {
                            window.location.href = "{{ route('login') }}";
                        }

                    } else {
                        $("#msgHolderresister").html('<div class="alert alert-danger">' + response.error + '</div>');
                    }
                },
                error: function(xhr) {
                    $(".loadergif").hide();
                    $(".tl-7-def-btn").prop("disabled", false);

                    let errorMsg = "An error occurred. Please try again.";
                    if (xhr.responseJSON && xhr.responseJSON.error) {
                        errorMsg = xhr.responseJSON.error;
                    }
                   // alert(errorMsg);
                    $("#msgHolderresister").html('<div class="alert alert-danger">' + errorMsg + '</div>');
                }
            });
        }
    });
});
</script>
