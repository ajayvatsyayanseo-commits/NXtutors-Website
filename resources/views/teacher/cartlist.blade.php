 @include('include.header')
<div class="breadcrumb-section pt-40 pb-40" data-background="{{ asset('public/frount/assets') }}/images/shapes/breadcrumb-bg.jpg">
        <div class="container">
            <p class="breadcrumb-text fw-light mb-0"><a href="{{ url('/')}}">Home</a> / <span class="primary-text-color">Cartlist</span></p>
        </div>
    </div>
	<div class="ptb-120 bg-white">
        <div class="container">
            @if($totalcart==0)
            <div class="alert alert-warning text-center">No Item avlible in cartlist</div>
            @else
            <div class="cart-table-wrapper table-responsive">
                <table class="cart-table table">
                    <tr>
                        <th class="text-uppercase">Product Name</th>
                        <th class="text-uppercase">Price</th>
                        <th>Quantity</th>
                        <th class="text-end">Subtotal</th>
                    </tr>
                    @php $total = 0; @endphp
                    @foreach($cartlist as $row)

                    @php
                        $total += $row->productname->sale_price * $row->qty;
                    @endphp
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-4 product-box">
                                <button type="button" class="remove_product"><i class="fas fa-close"></i></button>
                                <div class="feature-image light-bg">
                                    <img src="{{ asset('public/storage/product_image') }}/{{ $row->productname->avatar}}" class="img-fluid" alt="feature image">
                                </div>
                                <div>
                                    <span class="fs-sm text-uppercase secondary-text-color d-block">{{ $row->productname->mainCategory->cat_title}}</span>
                                    <a href="{{url('/')}}/product/{{ $row->productname->slug }}" class="product-title h6 mt-2 d-block">{{ $row->productname->title }}</a>
                                </div>
                            </div>
                        </td>
                        <td>${{ $row->productname->sale_price }}</td>
                        <td>
                            <div class="quantity d-flex align-items-center">
                                <input type="text" name="qty" id="qty_{{ $row->id}}" value="{{ $row->qty}}">
                                <div class="step-btns">
                                    <button class="increment" data-id="{{ $row->id}}"><i class="fa-solid fa-plus"></i></button>
                                    <button class="decrement" data-id="{{ $row->id}}"><i class="fa-solid fa-minus"></i></button>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="primary-text-color fw-medium d-block text-end">${{ $row->productname->sale_price*$row->qty }}</span>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Sub Total</td>
                        <td  class="text-end">${{ number_format($total, 2) }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Shipping</td>
                        <td  class="text-end">$5.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Total</td>
                        <td  class="text-end">${{ number_format($total + 5, 2) }}</td>
                    </tr>
                    
                </table>
            </div>

            @endif
			 
               <a href="{{ url('/')}}/shop" class="template-btn primary-btn text-uppercase mt-5"><span>Continue shopping</span></a>

               <a href="{{ url('/')}}/user/checkout" class="template-btn primary-btn text-uppercase mt-5"><span>Proceed to checkout</span></a>                      
       </div>
    </div>
 @include('include.footer')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Function to update the quantity in the database
        function updateQuantity(id, qty) {
            $.ajax({
                url: '{{ route('user.cartlist') }}', // Your route to update the cart
                type: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'), // CSRF token
                    id: id,
                    qty: qty
                },
                success: function(response) {
                    if (response.success) {
                        console.log('Quantity updated successfully');
                        // Optionally, show a success message on the page
                    } else {
                        console.log('Failed to update quantity');
                        alert('Failed to update the quantity. Please try again.');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error updating quantity:', error);
                    alert('An error occurred while updating the quantity. Please try again.');
                }
            });
        }

        // Increment quantity
        $('.increment').on('click', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var qtyInput = $('#qty_' + id);
            var currentQty = parseInt(qtyInput.val());

            if (!isNaN(currentQty)) {
                var newQty = currentQty + 1;
                qtyInput.val(newQty);
                updateQuantity(id, newQty); // Update in database
            }
        });

        // Decrement quantity
        $('.decrement').on('click', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var qtyInput = $('#qty_' + id);
            var currentQty = parseInt(qtyInput.val());
                alert(currentQty);
            if (!isNaN(currentQty) && currentQty > 1) { // Ensure quantity doesn't go below 1
                var newQty = currentQty - 1;
                qtyInput.val(newQty);
                updateQuantity(id, newQty); // Update in database
            } else {
                alert('Quantity cannot be less than 1.');
            }
        });
    });
</script>