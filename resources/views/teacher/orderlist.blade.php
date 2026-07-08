 @include('include.header')
<link rel="stylesheet" href="{{ asset('public/frount/assets') }}/css/newstyle.css">


     <div class="row">


							<div class="myaccount-sidebar col-lg-2 ">
                              @include('include.userleftsidebar')
     </div>
     <div class="myaccount-form col-lg-9 ">
			<h3>Order List</h3>
            @if($totalorder==0)
            <div class="alert alert-warning text-center">No Order Avalible</div>
            @else
<div class="cart-table-wrapper table-responsive">
                <table class="cart-table table">
                    <tr>
                        <th>Sr No.</th>
                        <th class="text-uppercase">Order Date</th>
                        <th class="text-uppercase">Order Id</th>
                        <th>Total Amount($)</th>
                        <th>Order Status</th>
                        <th>Payment Status</th>
                        <th>Action</th>
                    </tr>
                    @php $i=1; @endphp
                    @foreach($orderlist as $row)
                    <tr>
                        <td>{{ $i;}}</td>
                             
                        <td> {{ date('d F Y', strtotime($row->date))}}</td>
                        <td>{{ $row->order_id}}</td>
                        <td>
                            {{ $row->totle}} 
                        </td>
                        <td>
                            @if($row->order_status=='t') <a href="#" class="btn btn-success"> Complate </a> @else <a href="#" class="btn btn-danger"> Pending </a>@endif 
                        </td>
                        <td>
                            @if($row->payment_status=='t') <a href="#" class="btn btn-success"> Complate </a> @else <a href="#" class="btn btn-danger"> Pending </a>@endif 
                        </td>
                        <td><a href="{{ route('user.order.view', $row->id) }}"  > <i class="fa-regular fa-eye"></i> </a></td>
                    </tr>
                    @php $i++; @endphp
                    @endforeach
                </table>
            </div>


            @endif
 </div>
</div>
 @include('include.footer')
