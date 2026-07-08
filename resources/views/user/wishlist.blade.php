 @include('include.header')

 <!--breadcrumb section start-->
    <div class="breadcrumb-section pt-40 pb-40" data-background="{{ asset('public/frount/assets') }}/images/shapes/breadcrumb-bg.jpg">
        <div class="container">
            <p class="breadcrumb-text fw-light mb-0"><a href="{{ url('/')}}">Home</a> / <span class="primary-text-color">Wishlist</span></p>
        </div>
    </div>
<div class="ptb-120 bg-white">
        <div class="container">
            @if($totalwish==0)
            <div class="alert alert-warning text-center">No Item avlible in wistlist</div>
            @else
            <div class="wishlist-table table-responsive">
                <table class="table">
                    <tr>
                        <th class="text-uppercase">Product Name</th>
                        <th class="text-uppercase">Price</th>
                        <th class="text-uppercase">Stock Status</th>
                    </tr>
                    @foreach($wishlist as $row)
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
                            <div class="stock-status d-flex align-items-center justify-content-between">
                                <span>@if($row->productname->qty ==0)Out of stock @else In stock @endif</span>
                                <button type="button"  onclick="addtocart(this.id)" id="{{ $row->product_id }}" class="template-btn primary-btn text-uppercase fs-sm"><span>Add to Cart</span></button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    
                </table>
            </div>

            @endif
           <a href="{{ url('/')}}/shop" class="template-btn primary-btn text-uppercase mt-5"><span>Continue shopping</span></a>             
       </div>
    </div>
 @include('include.footer')
