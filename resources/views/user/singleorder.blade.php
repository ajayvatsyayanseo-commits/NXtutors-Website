 @include('include.header')
<link rel="stylesheet" href="{{ asset('public/frount/assets') }}/css/newstyle.css">


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
                                    
        <div class="account-title">
                                        <h2>Order Information</h2>
                                    </div>
                                
                                  <div class="row">
                                   
                                <div class="form-group col-lg-3">
                                    <label class="myaccount_lable" for="Name"> Order Id</label>
                                  
                                 <input type="text" class="form-control"  readonly  name="order_id" id="order_id"  placeholder="Order Id" value="{{ $order->order_id}}">
                      
                                </div>
                                <div class="form-group col-lg-3">
                                    <label class="myaccount_lable" for="Name"> Order Date</label>
                                  
                                 <input type="date" class="form-control" readonly   name="date" id="date"   value="{{ $order->date}}">
                      
                                </div>
                                <div class="form-group col-lg-3">
                                    <label class="myaccount_lable" for="Name"> Order Otp</label>
                                  
                                 <input type="text" class="form-control" readonly   name="otp" id="otp"   value="{{ $order->otp}}">
                      
                                </div>

                                <div class="form-group col-lg-3">
                                    <label class="myaccount_lable" for="Name"> Company Name</label>
                                  
                                 <input type="text" class="form-control" readonly   name="copmany" id="copmany"   value="{{ $order->copmany}}">
                      
                                </div>

                                <div class="form-group col-lg-3">
                                    <label class="myaccount_lable" for="Name"> First Name</label>
                                  
                                 <input type="text" class="form-control" readonly   name="fname" id="fname"   value="{{ $order->fname}}">
                      
                                </div>
                                <div class="form-group col-lg-3">
                                    <label class="myaccount_lable" for="Name"> Last Name</label>
                                  
                                 <input type="text" class="form-control" readonly   name="lname" id="lname"   value="{{ $order->lname}}">
                      
                                </div>

                                
                                  
                                  <!-- Text input-->
                                
                                <div class="form-group col-lg-3">
                                    <label class="myaccount_lable" for="Email"> Email Address</label>
                                  
                                        <input type="text" class="form-control" readonly   name="email" id="email"   placeholder="E-mail" value="{{ $order->email}}">
 
                                </div>
                                <!-- Text input-->
                                <div class="form-group col-lg-3">
                                    <label class="myaccount_lable"  for="Phone">Phone</label>
                             
                                        <input type="text" class="form-control"  readonly name="phone" id="phone" onKeyPress="return onlyNumberKey(event)" maxlength="10" placeholder="Phone" value="{{ $user->phone}}" />
                                 @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                                </div>
                                </div>
                           
                                
                                <div class="account-title"><h2>  Address</h2></div>
                                <div class="row">
                                <div class="form-group col-lg-3">
                                    <label class="myaccount_lable" for="Name"> Town / City</label>
                                    
                                        <input class="form-control" readonly  type="text" name="city" id="city" placeholder="City" value="{{ $order->city}}"  >

                                      
                                      
                                </div>
                          
                                
                                <div class="form-group col-lg-3">
                                    <label class="myaccount_lable"  for="Email">Country / Region</label>
                                  
                                    <input type="text" class="form-control"  readonly  name="region" id="region" placeholder="District" value="{{ $order->region}}"   >
                                    
                                </div>
                                <!-- Text input-->
                                
                                 
                                <div class="form-group col-lg-3">
                                    <label class="myaccount_lable" for="Name"> State</label>
                                    
                                        <input class="form-control" type="text"  name="state" id="state" placeholder="State" value="{{ $order->state}}"  > 

                                </div>
                         
                                <!-- Text input-->
                                
                                <div class="form-group col-lg-3">
                                    <label class="myaccount_lable" for="Email">Zip Code</label>
                                 
                                        <input type="text" class="form-control"  readonly  name="zip" id="zip"   onKeyPress="return onlyNumberKey(event)" maxlength="6" value="{{ $order->zip}}" >
                                         
                                </div>
                                <!-- Text input-->
                              
                                <!-- Textarea -->
                                <div class="form-group col-lg-12">
                                    <label class="myaccount_lable" for="textarea">Street Address</label>
                                   
                                        <textarea  class="form-control"  readonly id="street_address" name="street_address"  placeholder="Address" > {{ $order->street_address}}  </textarea>
                                         
                                      
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="myaccount_lable" for="textarea">Order Notes</label>
                                   
                                        <textarea  class="form-control" readonly  id="note" name="note"  placeholder="Order Notes" > {{ $order->note}}  </textarea>
                                         
                                      
                                </div>
                                 </div>
                                <div class="account-title"><h2>  Item Information </h2></div> 

                                <table class="table" width="100%" border="1">
                <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Item Name</th>
                    <th>Item Image</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total($)</th>
                  </tr>
                </thead>
                <tbody>
                    @php $i=1; @endphp
                    @php $total = 0; @endphp
                    @foreach($order->orderitem as $row)
                     @php
                        $total += $row->price * $row->qty;
                    @endphp
                    <tr>
                        <td>{{ $i}}</td>
                        
                        <td>{{ $row->productname->title }}</td>
                        <td> <img src="{{ asset('public/storage/product_image') }}/{{ $row->productname->avatar}}" width="100" height="100"   alt="feature image"></td>
                        <td>{{ $row->price}}</td>
                        <td>{{ $row->qty}}</td>
                        <td>{{ $row->qty * $row->price}}</td>
                    </tr>
                     @php $i++; @endphp

                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Sub Total</td>
                        <td>${{ number_format($total, 2) }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Shipping</td>
                        <td>$5.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total</td>
                        <td>${{ number_format($total + 5, 2) }}</td>
                    </tr>
                </tbody>
            </table>

            <button id="printButton" class="btn btn-primary">Print</button>
            <a href="{{ route('user.order')}}" class="btn btn-primary">Back</a>
                                <!-- Button -->
                             

	 </div>


<div id="invoiceholder" style="display: none;">
         <div id="headerimage"></div>
         <div id="invoice" class="effect2">
            <div id="invoice-top">
            <div class="logo">
            <img src="{{ asset('public/storage/logos/' . $setting->logo) }}" class="img">
          </div>  
            <!--End Info-->
               <div class="title">
                  <h1>Invoice #{{ $order->order_id}}</h1>
               </div>
               <!--End Title-->
            </div>
            <!--End InvoiceTop-->
            <div id="invoice-mid">
               <div class="col-sm-6">
                  <div class="info">
                     <h2>Billed to:</h2>
                     <p>Name:{{ $order->fname}} {{ $order->lname}}</br>
                       Add.:{{ $order->street_address}}, {{ $order->city}}, {{ $order->state}}, {{ $order->region}}, {{ $order->zip}}<br> 
                        Mob:{{ $order->phone}}</br>
                        Email:{{ $order->email}}</br>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="logo">
                     <div class="info">
                     <h2>Shipping form</h2>
                      <p>{{ $setting->name}}, {{ $setting->address}}</p>
                        <p> {{ $setting->email}}   </br>
                           {{ $setting->phone}} 
                        </p>
                     </div>
                  </div>
               </div>
              
            </div>
            <!--End Invoice Mid-->
            <div id="invoice-bot">
               <div id="table">
                  <table>
                     <tr class="tabletitle">
                        <td class="Hours">
                           <h2>S.No.</h2>
                        </td>
                        
                        <td class="Hours">
                           <h2>Item Name</h2>
                        </td>
                        <td class="Hours">
                           <h2>Item Image</h2>
                        </td>
                        <td class="Hours">
                           <h2>Price</h2>
                        </td>
                        <td class="Rate">
                           <h2>Qty.</h2>
                        </td>
                        
                        <td class="subtotal">
                           <h2>Sub total</h2>
                        </td>
                     </tr>
                     @php $i=1; @endphp
                    @php $total = 0; @endphp
                    @foreach($order->orderitem as $row)
                     @php
                        $total += $row->price * $row->qty;
                    @endphp
                     <tr class="service">
                     <td class="tableitem">
                           <p class="itemtext">{{ $i}}</p>
                        </td>
                        <td class="tableitem">
                           <p class="itemtext">{{ $row->productname->title }}</p>
                        </td>
                        <td class="tableitem">
                           <img src="{{ asset('public/storage/product_image') }}/{{ $row->productname->avatar}}" width="100" height="100"   alt="feature image">
                        </td>
                        <td class="tableitem">
                           <p class="itemtext">${{ $row->price}}</p>
                        </td>
                        <td class="tableitem">
                           <p class="itemtext">${{ $row->qty}}</p>
                        </td>
                        <td class="tableitem">
                           <p class="itemtext">${{ $row->price * $row->qty }}</p>
                        </td>
                     </tr>
                     @php $i++; @endphp

                    @endforeach
                      
                     <tr class="tabletitle">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="Rate">
                           <h2>Sub Total</h2>
                        </td>
                        <td class="payment">
                           <h2>${{ number_format($total, 2) }}</h2>
                        </td>
                     </tr>
                     <tr class="tabletitle">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="Rate">
                           <h2>Shipping</h2>
                        </td>
                        <td class="payment">
                           <h2>$5.00</h2>
                        </td>
                     </tr>
                     <tr class="tabletitle">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="Rate">
                           <h2>  Total</h2>
                        </td>
                        <td class="payment">
                           <h2>${{ number_format($total+5, 2) }}</h2>
                        </td>
                     </tr>
                  </table>
               </div>
               <!--End Table-->
               
            </div>
            <!--End InvoiceBot-->
         </div>
         <!--End Invoice-->
      </div>
      <!-- End Invoice Holder-->
 @include('include.footer')
<script type="text/javascript">
    
    $(document).ready(function () {
    $('#printButton').on('click', function () {
        var divContents = $('#invoiceholder').html();
        var printWindow = window.open('', '', 'height=600,width=800');
        
        // Link to the external CSS file
        var cssLink = '<link rel="stylesheet" type="text/css" href="{{ asset('public/frount/assets') }}/css/print.css">';
        
        printWindow.document.write('<html><head><title>{{ $setting->name}}</title>');
        printWindow.document.write(cssLink); // Include the CSS file
        printWindow.document.write('</head><body >');
        printWindow.document.write(divContents);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    });
});
</script>