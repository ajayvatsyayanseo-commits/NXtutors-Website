 @include('include.header')


    <!--breadcrumb section start-->
    <div class="breadcrumb-section pt-40 pb-40" data-background="{{ asset('frount/assets') }}/images/shapes/breadcrumb-bg.jpg">
        <div class="container">
            <p class="breadcrumb-text fw-light mb-0"><a href="{{ url('/')}}">Home</a> / <span class="primary-text-color">Checkout</span></p>
        </div>
    </div>
    <!--breadcrumb section end-->
    <div id="msgHolderresister"></div>
    <!--checkout section start-->
    <section class="checkout-section bg-white ptb-120">
        <div class="container">

             <!-- <div class="checkout-coupon-box checkout-toggle-form mt-32">
                <p class="mb-0 primary-text-color">Have a coupon? <a href="#" class="form-toggle-btn primary-text-color">Click here to enter your code</a></p>
                <form class="checkout-coupon-form toggle-form">
                    <input type="text" class="theme-input" placeholder="Coupon">
                    <button type="submit" class="template-btn primary-btn">Apply Voucher</button>
                </form>
            </div> -->

            <form class="checkout-form mt-80" name="checkout_form" id="checkout_form" method="post">
                <div class="row g-4">
                    <div class="col-xl-6">
                        <h3 class="mb-4 fw-normal">Billing & Shipping</h3>
                        <div class="row g-4">
                            
                            <div class="col-sm-6">
                                <div class="input-field">
                                    <label for="fname">First Name*</label>
                                    <input type="text" name="fname" id="fname" class="theme-input bg-transparent"  > 
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-field">
                                    <label for="lname">Last Name</label>
                                    <input type="text" name="lname" id="lname" class="theme-input bg-transparent"  > 
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="input-field">
                                    <label for="copmany">Company Name(Optional)</label>
                                    <input type="text" name="copmany" id="copmany"  class="theme-input bg-transparent"  > 
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-field">
                                    <label for="country">Country / Region*</label>
                                    <input type="text" name="region" id="region" placeholder="United States (US)" class="theme-input bg-transparent"  > 
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-field">
                                    <label for="street">Street Address*</label>
                                    <input type="text"  name="street_address" id="street_address" placeholder="House number and street number" class="theme-input bg-transparent" > 
                                   
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-field">
                                    <label for="city">Town / City*</label>
                                    <input type="text" name="city" class="theme-input bg-transparent" id="city"> 
                                </div>
                            </div>
    
                            <div class="col-12">
                                <div class="input-field">
                                    <label>Sate*</label>
                                   <input type="text" name="state" class="theme-input bg-transparent" id="state"> 
                                </div>
                            </div>
    
                            <div class="col-12">
                                <div class="input-field">
                                    <label for="zip">Zip Code*</label>
                                    <input type="text" name="zip"  class="theme-input bg-transparent" id="zip"> 
                                </div>
                            </div>
    
                            <div class="col-12">
                                <div class="input-field">
                                    <label for="phone">Phone*</label>
                                    <input type="text" name="phone" class="theme-input bg-transparent" id="phone"> 
                                </div>
                            </div>
    						<div class="col-12">
                                <div class="input-field">
                                    <label for="email">Email Address*</label>
                                    <input type="email" name="email" class="theme-input bg-transparent" id="email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-field">
                                    <label for="note">Order Notes*</label>
                                    <textarea class="theme-input bg-transparent" name="note" rows="5" id="note"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <h3 class="mb-4">Your Order</h3>
                        <div class="order-table table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Products</th>
                                    <th>Price</th>
                                </tr>
                                @php $total = 0; @endphp
			                    @foreach($cartlist as $row)

			                    @php
			                        $total += $row->productname->sale_price * $row->qty;
			                    @endphp
                                
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-4 product-box">
                                            <div class="feature-image light-bg">
                                                <a href="{{url('/')}}/product/{{ $row->productname->slug }}"><img src="{{ asset('storage/product_image') }}/{{ $row->productname->avatar}}" class="img-fluid" alt="product"></a>
                                            </div>
                                            <div>
                                                <span class="fs-sm text-uppercase secondary-text-color d-block">{{ $row->productname->mainCategory->cat_title}}</span>
                                                <a href="{{url('/')}}/product/{{ $row->productname->slug }}" class="product-title h6 mt-2 d-block">{{ $row->productname->title }}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="primary-text-color-color fw-medium pp-price">${{ $row->productname->sale_price*$row->qty }}</span>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td>
                                        <span class="primary-text-color fw-medium pp-price">Subtotal</span>
                                    </td>
                                    <td>
                                        <span class="primary-text-color fw-medium pp-price">${{ number_format($total, 2) }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="primary-text-color fw-medium pp-price">Shipping</span>
                                    </td>
                                    <td>
                                        <span class="primary-text-color fw-medium pp-price">$5.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="primary-text-color fw-medium pp-price">Total Price</span>
                                    </td>
                                    <td>
                                        <span class="secondary-text-color fw-meidum pp-price">${{ number_format($total + 5, 2) }}</span>
                                    </td>
                                </tr>
                                <tr class="border-0">
                                    <td colspan="2" class="border-0">
                                        <div class="checkout-payment-methods">
                                            
                                            <label>
                                                <input type="radio" name="payment_method" id="payment_method" value="Cash">
                                                <span class="radio">Cash On Delivery</span>
                                                <span class="description mb-0 fw-light fs-sm text-color">Cash Upon Delivery</span>
                                            </label>
                                            <!-- <label>
                                                <input type="radio" name="payment_method" id="payment_method">
                                                <span class="radio">Paypal</span>
                                            </label> -->
                                            
                                            <p class="mt-32 text-color fw-light fs-sm">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                            <label class="d-flex align-items-center gap-2"><input type="checkbox" name="terms" id="terms" value="1"><span class="text-color fw-light fs-sm checkbox"> I have read and agree terms and conditions *</span></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-0">
                                    <td colspan="2" class="border-0">
                                    	<input type="hidden" name="totle" value="{{ number_format($total + 5, 2) }}">
                                        <button type="submit" class="template-btn primary-btn w-100 text-uppercase fw-normal"><span>Place Order</span></button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!--checkout section end-->



  @include('include.footer')

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    // Setup CSRF token for AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Form validation
    $("#checkout_form").validate({
        rules: {      
            fname: {
                required: true
            },
            email: {
                required: true,
                email: true,
            },
            phone: {
                required: true,
                minlength: 10,
            },
            region: {
                required: true
            },
            street_address: {
                required: true,
            },
            city: {
                required: true
            },
            state: {
                required: true,
            },
            zip: {
                required: true
            },
            payment_method: {
                required: true,
            },
            terms: {
                required: true
            }
        },
        messages: {
            fname: {
                required: "Please enter your name."
            },
            email: {
                required: "Please enter your email address.",
                email: "Enter a valid email."
            },
            phone: {
                required: "Please enter your mobile number.",
                minlength: "Mobile number must contain at least 10 characters."
            },
            region: {
                required: "Please enter your country name."
            },
            street_address: {
                required: "Please enter your street address.",
            },
            city: {
                required: "Please enter your city name."
            },
            state: {
                required: "Please enter your state address.",
            },
            zip: {
                required: "Please enter your postal zip code.",
            },
            payment_method: {
                required: "Please choose a payment method."
            },
            terms: {
                required: "Please accept the terms and conditions."
            }
        },
        submitHandler: function(form) {
            // Serialize form data and submit via AJAX
            var str = $("#checkout_form").serialize();
            $(".loadergif").show();
            
            $.ajax({
                type: "POST",
                url: "{{ route('user.checkout') }}",  
                data: str,
                cache: false,
                success: function(response) {
                    $(".loadergif").hide();
                    $("#msgHolderresister").html(response.message);
                    
                    // Redirect to success page after delay
                    setTimeout(function() {
                        window.location = "{{ route('user.success') }}";
                        $("#msgHolderresister").hide('slow');
                    }, 3000);
                },
                error: function() {
                    $(".loadergif").hide();
                    alert('There was an error during checkout. Please try again.');
                }
            });
        }
    });
});
</script>
