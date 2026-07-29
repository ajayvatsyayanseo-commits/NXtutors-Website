 @include('include.header')

<div class="breadcrumb-section pt-40 pb-40" data-background="{{ asset('frount/assets') }}/images/shapes/breadcrumb-bg.jpg">
        <div class="container">
            <p class="breadcrumb-text fw-light mb-0"><a href="{{ url('/')}}">Home</a> / <span class="primary-text-color">Thanks </span></p>
        </div>
    </div>


     <section class="checkout-section bg-white ptb-120">
        <div class="container">
        		<div class="col-lg-8" style="margin: auto;">
        		 <img src="{{ asset('frount/assets') }}/images/order_success.gif" alt="not found" class="img-fluid w-100">

        		 <a href="{{ url('/')}}/shop" class="template-btn primary-btn text-uppercase mt-5"><span>Continue shopping</span></a>
        		</div>
        </div>
    </section>
  @include('include.footer')