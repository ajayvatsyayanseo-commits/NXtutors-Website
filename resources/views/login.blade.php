 @include('include.header')
<style>
    .auth-section{
        position:relative;
        overflow:hidden;
        min-height:calc(100vh - 120px);
        padding:clamp(48px, 7vw, 96px) 16px;
    }

    .auth-container{
        position:relative;
        z-index:1;
        max-width:1120px;
        margin:auto;
        display:grid;
        grid-template-columns:minmax(0, 1fr) minmax(360px, 460px);
        gap:clamp(26px, 5vw, 56px);
        align-items:center;
    }

    .auth-eyebrow{
        display:inline-flex;
        align-items:center;
        gap:8px;
        margin-bottom:16px;
        padding:8px 12px;
        border:1px solid rgba(255,255,255,.16);
        border-radius:999px;
        color:#fbbf24;
        background:rgba(255,255,255,.06);
        font-size:13px;
        font-weight:700;
        letter-spacing:.2px;
    }

    .auth-left h1{
        color:#fff;
        font-size:clamp(34px, 5vw, 58px);
        line-height:1.08;
        margin-bottom:18px;
    }

    .auth-left p{
        max-width:620px;
        color:#d5deec;
        line-height:1.8;
        margin-bottom:26px;
        font-size:clamp(15px, 1.6vw, 17px);
    }

    .auth-left ul{
        padding:0;
        margin:0;
        list-style:none;
        display:grid;
        grid-template-columns:repeat(2, minmax(0, 1fr));
        gap:12px;
    }

    .auth-left li{
        position:relative;
        color:#f8fafc;
        padding:14px 14px 14px 42px;
        border:1px solid rgba(255,255,255,.1);
        border-radius:14px;
        background:rgba(255,255,255,.055);
        font-size:15px;
    }

    .auth-left li::before{
        content:"";
        position:absolute;
        left:16px;
        top:17px;
        width:14px;
        height:14px;
        border-radius:50%;
        background:linear-gradient(135deg, #fbbf24, #2dd4bf);
        box-shadow:0 0 0 5px rgba(251,191,36,.1);
    }

    .auth-card{
        width:100%;
        padding:clamp(24px, 4vw, 38px);
        border-radius:22px;
        background:rgba(255,255,255,.07);
        border:1px solid rgba(255,255,255,.16);
        box-shadow:0 24px 70px rgba(0,0,0,.38);
    }

    .auth-card-header{
        margin-bottom:24px;
        text-align:center;
    }

    .auth-card h2{
        color:#fff;
        margin-bottom:8px;
        font-size:clamp(26px, 3vw, 34px);
    }

    .auth-card-header p{
        margin:0;
        color:#aebbd0;
        font-size:14px;
        line-height:1.6;
    }

    .auth-left > h1:not(.auth-title),
    .auth-left > p:not(.auth-intro),
    .auth-left > ul:not(.auth-benefits),
    .auth-card > h2,
    .auth-card > div[style="margin-top:15px;"]{
        display:none;
    }

    .auth-field{
        margin-bottom:16px;
    }

    .auth-field label{
        display:block;
        color:#dce5f2;
        margin-bottom:8px;
        font-size:14px;
        font-weight:600;
    }

    .auth-field input{
        width:100%;
        height:54px;
        border:1px solid rgba(255,255,255,.1);
        outline:none;
        border-radius:14px;
        padding:0 16px;
        background:rgba(255,255,255,.09);
        color:#fff;
        font-size:15px;
        transition:border-color .2s, box-shadow .2s, background .2s;
    }

    .auth-field input:focus{
        border-color:#fbbf24;
        background:rgba(255,255,255,.12);
        box-shadow:0 0 0 4px rgba(251,191,36,.12);
    }

    .auth-field input::placeholder{
        color:#9ca8bc;
    }

    .auth-btn{
        width:100%;
        height:54px;
        border:none;
        border-radius:14px;
        background:linear-gradient(135deg, #fbbf24, #f59e0b);
        color:#111827;
        font-weight:800;
        cursor:pointer;
        font-size:16px;
        box-shadow:0 14px 28px rgba(245,158,11,.22);
        transition:transform .2s, box-shadow .2s;
    }

    .auth-btn:hover,
    .whatsapp-signup-btn:hover{
        transform:translateY(-1px);
    }

    .auth-links{
        display:flex;
        justify-content:flex-end;
        gap:12px;
        margin-top:16px;
        flex-wrap:wrap;
    }

    .auth-links a{
        color:#38bdf8;
        text-decoration:none;
        font-size:14px;
        font-weight:600;
    }

    .auth-signup{
        margin-top:24px;
        text-align:center;
    }

    .auth-divider{
        display:flex;
        align-items:center;
        gap:14px;
        margin-bottom:18px;
        color:#f8fafc;
        font-size:14px;
        font-weight:800;
    }

    .auth-divider::before,
    .auth-divider::after{
        content:"";
        flex:1;
        height:1px;
        background:rgba(255,255,255,.16);
    }

    .auth-signup p{
        margin:0 0 14px;
        color:#f8fafc;
        font-size:15px;
        font-weight:700;
    }

    .whatsapp-signup-btn{
        width:100%;
        display:flex;
        align-items:center;
        justify-content:center;
        gap:18px;
        min-height:58px;
        border-radius:14px;
        background:linear-gradient(135deg, #25D366, #16c765);
        color:#fff;
        text-decoration:none;
        font-weight:800;
        font-size:18px;
        box-shadow:0 14px 28px rgba(37,211,102,.18);
        transition:transform .2s, background .2s, box-shadow .2s;
    }

    .whatsapp-signup-btn:hover{
        background:linear-gradient(135deg, #31e675, #19c866);
        color:#fff;
        box-shadow:0 18px 34px rgba(37,211,102,.24);
    }

    .whatsapp-signup-btn img{
        width:32px;
        height:32px;
        object-fit:contain;
        flex:0 0 auto;
    }

    @media(max-width: 992px){
        .auth-container{
            grid-template-columns:1fr;
            max-width:720px;
        }

        .auth-left{
            text-align:center;
        }

        .auth-left p{
            margin-left:auto;
            margin-right:auto;
        }
    }

    @media(max-width: 576px){
        .auth-section{
            padding:34px 12px;
        }

        .auth-card{
            border-radius:18px;
            padding:22px 16px;
        }

        .auth-left ul{
            grid-template-columns:1fr;
        }

        .auth-field input,
        .auth-btn,
        .whatsapp-signup-btn{
            min-height:50px;
            height:50px;
        }

        .auth-links{
            justify-content:center;
        }
    }
</style>
 <!-- BREADCRUMB STARTS HERE -->
   <section class="auth-section">
    <div class="auth-container">

        <div class="auth-left">
            <div class="auth-eyebrow">Verified tutor network</div>
            <h1 class="auth-title">Welcome back to NXTutors</h1>
            <p class="auth-intro">
                Sign in to manage enquiries, tutor matches, demo classes and
                your learning progress from one secure dashboard.
            </p>
            <ul class="auth-benefits">
                <li>Verified tutor profiles</li>
                <li>Demo class tracking</li>
                <li>Student dashboard access</li>
                <li>Personalized tutor matching</li>
            </ul>
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

            <div class="auth-card-header">
                <h2>Login Account</h2>
                <p>Use your registered email and password to continue.</p>
            </div>

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

            <div class="auth-signup">
                <div class="auth-divider">OR</div>
                <p>New user? Signup first then</p>
               <a href="https://wa.me/917836034313?text=Hi%20NXTutors,%20I%20would%20like%20to%20sign%20up%20for%20a%20new%20account."
                   target="_blank"
                   rel="noopener"
                   class="whatsapp-signup-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48" style="flex-shrink:0;">
                        <rect width="48" height="48" rx="10" fill="#25D366"/>
                        <path fill="#fff" d="M24 10C16.27 10 10 16.27 10 24c0 2.52.68 4.88 1.87 6.92L10 38l7.3-1.84A13.94 13.94 0 0024 38c7.73 0 14-6.27 14-14S31.73 10 24 10zm0 25.4a11.34 11.34 0 01-5.78-1.58l-.41-.25-4.27 1.02 1.05-4.15-.27-.43A11.36 11.36 0 0112.6 24C12.6 17.7 17.7 12.6 24 12.6S35.4 17.7 35.4 24 30.3 35.4 24 35.4zm6.2-8.54c-.34-.17-2-.99-2.32-1.1-.31-.11-.54-.17-.76.17-.23.34-.88 1.1-1.08 1.33-.2.23-.4.25-.73.08-.34-.17-1.43-.53-2.72-1.68-1.01-.9-1.69-2.01-1.89-2.35-.2-.34-.02-.52.15-.69.15-.15.34-.4.51-.6.17-.2.23-.34.34-.57.11-.23.06-.43-.03-.6-.08-.17-.76-1.84-1.05-2.52-.27-.66-.55-.57-.76-.58l-.65-.01c-.23 0-.59.08-.9.43-.31.34-1.18 1.16-1.18 2.83 0 1.67 1.21 3.28 1.38 3.51.17.23 2.39 3.65 5.79 5.12.81.35 1.44.56 1.93.71.81.26 1.55.22 2.13.14.65-.1 2-.82 2.29-1.61.28-.79.28-1.47.2-1.61-.09-.14-.31-.22-.65-.39z"/>
                    </svg>
                    Sign up on WhatsApp
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
