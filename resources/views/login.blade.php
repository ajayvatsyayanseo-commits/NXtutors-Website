 @include('include.header')
<style>
    .auth-section{
    padding: clamp(35px, 6vw, 80px) 16px;
}

.auth-container{
    max-width:1100px;
    margin:auto;
    display:grid;
    grid-template-columns: minmax(0, 1fr) minmax(360px, 460px);
    gap: clamp(22px, 4vw, 40px);
    align-items:center;
}

.auth-left h1{
    color:#fff;
    font-size: clamp(32px, 5vw, 52px);
    line-height:1.1;
    margin-bottom:16px;
}

.auth-left p{
    color:#cbd5e1;
    line-height:1.7;
    margin-bottom:22px;
    font-size: clamp(14px, 1.6vw, 16px);
}

.auth-left ul{
    padding:0;
    margin:0;
    list-style:none;
}

.auth-left li{
    color:#fff;
    margin-bottom:10px;
    font-size:15px;
}

.auth-card{
    width:100%;
    padding: clamp(22px, 4vw, 35px);
    border-radius:24px;
    backdrop-filter:blur(18px);
    background:rgba(255,255,255,.06);
    border:1px solid rgba(255,255,255,.12);
    box-shadow:0 20px 50px rgba(0,0,0,.25);
}

.auth-card h2{
    color:#fff;
    margin-bottom:24px;
    text-align:center;
    font-size: clamp(24px, 3vw, 32px);
}

.auth-field{
    margin-bottom:16px;
}

.auth-field label{
    display:block;
    color:#cbd5e1;
    margin-bottom:8px;
    font-size:14px;
}

.auth-field input{
    width:100%;
    height:52px;
    border:none;
    outline:none;
    border-radius:14px;
    padding:0 15px;
    background:rgba(255,255,255,.08);
    color:#fff;
    font-size:15px;
}

.auth-field input::placeholder{
    color:#94a3b8;
}

.auth-btn{
    width:100%;
    height:54px;
    border:none;
    border-radius:14px;
    background:#fbbf24;
    color:#111827;
    font-weight:700;
    cursor:pointer;
    font-size:16px;
}

.auth-links{
    display:flex;
    justify-content:space-between;
    gap:12px;
    margin-top:18px;
    flex-wrap:wrap;
}

.auth-links a{
    color:#38bdf8;
    text-decoration:none;
    font-size:14px;
}

/* Tablet */
@media(max-width: 992px){
    .auth-container{
        grid-template-columns:1fr;
        max-width:680px;
    }

    .auth-left{
        text-align:center;
    }

    .auth-left ul{
        display:grid;
        grid-template-columns:1fr 1fr;
        gap:10px;
    }

    .auth-left li{
        margin-bottom:0;
    }
}

/* Mobile */
@media(max-width: 576px){
    .auth-section{
        padding:28px 12px;
    }

    .auth-card{
        border-radius:20px;
        padding:22px 16px;
    }

    .auth-left ul{
        grid-template-columns:1fr;
    }

    .auth-field input,
    .auth-btn{
        height:48px;
    }

    .auth-links{
        flex-direction:column;
        align-items:center;
    }
}

.whatsapp-signup-btn{
    width:100%;
    display:flex;
    align-items:center;
    justify-content:center;
    gap:10px;
    height:54px;
    margin-top:12px;
    border-radius:14px;
    background:#25D366;
    color:#fff;
    text-decoration:none;
    font-weight:700;
    font-size:16px;
    transition:.3s;
}

.whatsapp-signup-btn:hover{
    background:#1ebe5d;
    color:#fff;
}

.whatsapp-signup-btn i{
    font-size:22px;
}

@media(max-width:576px){
    .whatsapp-signup-btn{
        height:48px;
        font-size:15px;
    }
}
</style>
 <!-- BREADCRUMB STARTS HERE -->
   <section class="auth-section">
    <div class="auth-container">

        <div class="auth-left">
            <h1>Welcome Back 👋</h1>
            <p>
                Login to access your dashboard, manage tutors,
                track classes and continue your learning journey.
            </p>

            <ul>
                <li>✔ Find Verified Tutors</li>
                <li>✔ Book Demo Classes</li>
                <li>✔ Manage Learning Progress</li>
                <li>✔ Secure Student Dashboard</li>
            </ul>
        </div>

        <div class="auth-card">

            <h2>Login Account</h2>

            <div class="loadergif" style="display:none"><img src="{{ asset('public/frount/assets') }}/images/loading.gif" class="loadinggif" /></div> 
            <div id="msgHolderresister"></div>

            <form class="login_form" name="login_form" id="login_form" method="post">

                <div class="auth-field">
                    <label>Email Address</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Enter your email">
                </div>

                <div class="auth-field">
                    <label>Password</label>
                    <input
                        type="password"
                        name="pass"
                        id="pass"
                        placeholder="Enter password">
                </div>
                <input type="hidden" name="process_login" value="1">
                <button type="submit" class="auth-btn">
                    Login Now
                </button>

                <div class="auth-links">
               <!--      <a href="{{ route('register') }}">
                        Create Account
                    </a> -->

                    <a href="{{ route('forget-password') }}">
                        Forgot Password?
                    </a>
                </div>

            </form>

            <form class="otp_form" name="otp_form" id="otp_form" method="post" style="display: none;"> 
                <div class="auth-field">
                    <input type="text" name="otp" id="otp" placeholder="Enter OTP" required /> 
                </div> 
               
                    <input type="hidden" name="verifyotp" value="1"> 
                    <button type="submit" name="submit" class="auth-btn"> Submit </button> 
              
            </form>

            <div style="margin-top:15px;">
    <a href="https://wa.me/917836034313?text=Hey,%20I%20want%20to%20signup"
       target="_blank"
       class="whatsapp-signup-btn">
        <i class="fa-brands fa-whatsapp"></i>
        Signup on WhatsApp
    </a>
</div>

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

    $("#login_form").validate({
        rules: {      
            email: {
                required: true,
                email: true
            },
            pass: {
                required: true
            }
        },
        messages: {
            email: {
                required: "Please enter your email address.",
                email: "Enter a valid email."
            },
            pass: {
                required: "Please enter your password."
            }
        },
        submitHandler: function(form) {
            var formData = $("#login_form").serialize();
            $(".loadergif").show();
            $.ajax({
                type: "POST",
                url: "{{ route('login') }}",  
                data: formData,
                cache: false,
                success: function(response) {
                    $(".loadergif").hide(); 

                    var message = response.message || 'An unexpected error occurred.';
                    var error = response.error || 'An error occurred during the request.';
                    
                    if (response.success) {
                        $("#msgHolderresister").html('<div class="alert alert-success">' + message + '</div>');
                        
                        if (response.message === 'Login successful. Redirecting to dashboard.') {
                          //  window.location.href = "{{ route('user.dashboard') }}";  
                            if (response.redirect) {
                            // Redirect to the provided URL
                            window.location.href = response.redirect;
                        } else {
                            // Fallback redirect if no redirect URL is provided
                            window.location.href = "{{ route('user.dashboard') }}";  
                        }
                        } else {
                            $(".login_form").hide();
                            $(".otp_form").show();
                        }
                    } else {
                        $("#msgHolderresister").html('<div class="alert alert-danger">' + error + '</div>');
                    }
                },
                error: function(xhr, status, error) {
                    $(".loadergif").hide();  
                    var errorMsg = "An error occurred. Please try again.";
                    if (xhr.responseJSON && xhr.responseJSON.error) {
                        errorMsg = xhr.responseJSON.error;
                    } else if (xhr.statusText) {
                        errorMsg = xhr.statusText;
                    }
                    $("#msgHolderresister").html('<div class="alert alert-danger">' + errorMsg + '</div>');
                }
            });
        }
    });

    $("#otp_form").validate({
        rules: {      
            otp: {
                required: true,
                remote: {
                    url: "{{ route('checkOTP') }}",
                    type: "post",
                    data: {
                        otp: function() {
                            return $("#otp").val();
                        }
                    },
                    dataFilter: function(response) {
                        var data = JSON.parse(response);
                        return data.exists ? true : "\"Please enter a valid OTP.\"";
                    }
                }
            }
        },
        messages: {
            otp: {
                required: "Please enter your OTP."
            }
        },
        submitHandler: function(form) {
            var otpData = $("#otp_form").serialize();
            $(".loadergif").show();
            $.ajax({
                type: "POST",
                url: "{{ route('verifyOtp') }}",  
                data: otpData,
                cache: false,
                success: function(response) {
                    $(".loadergif").hide();
                    var message = response.message || 'OTP verification successful.';
                    $("#msgHolderresister").html('<div class="alert alert-success">' + message + '</div>');
                    $(".login_form").show();
                    $(".otp_form").hide();
                },
                error: function(xhr, status, error) {
                    $(".loadergif").hide();  
                    var errorMsg = "An error occurred during OTP verification. Please try again.";
                    if (xhr.responseJSON && xhr.responseJSON.error) {
                        errorMsg = xhr.responseJSON.error;
                    } else if (xhr.statusText) {
                        errorMsg = xhr.statusText;
                    }
                    $("#msgHolderresister").html('<div class="alert alert-danger">' + errorMsg + '</div>');
                }
            });
        }
    });
});

</script>