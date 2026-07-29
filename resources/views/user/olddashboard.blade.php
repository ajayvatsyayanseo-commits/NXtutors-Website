 @include('include.header')
<link rel="stylesheet" href="{{ asset('frount/assets') }}/css/newstyle.css">


    <div class="row">


							<div class="myaccount-sidebar col-lg-2 ">
                              @include('include.userleftsidebar')
     </div>
     <div class="myaccount-form col-lg-9 ">
			<h3>Dashboard</h3>

			<div class="myaccount_dashbord" style="background:url({{ asset('frount/assets') }}/images/bg/1.jpg) no-repeat;">
                                       <div class="myaccount_content">
                                    	<samp class='fa fa-book'></samp> 
                                        <h2>  {{ $totalorder}}</h2>
                                       </div>
                                        <a href="#"><h4>Total  Order</h4></a>
                                        
                                    </div>
                                    <div class="myaccount_dashbord" style="background:url({{ asset('frount/assets') }}/images/bg/2.jpg) no-repeat;">
                                       
                                        
                                        <div class="myaccount_content">
                                    	<samp class='fa fa-book'></samp> 
                                        <h2> {{ $completeorder}}</h2>
                                       </div>
                                        <a href="#"><h4>Complete Order</h4></a>
                                 
                                    </div>
                                </div></div>
 @include('include.footer')
