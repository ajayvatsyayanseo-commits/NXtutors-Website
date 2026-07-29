 <div class="myaccount_single_sidebar">
                                <div class="myaccount_top"> 

                                   @if($user->avatar=='')
                                   <img src="{{ asset('admin/assets') }}/img/profile-img.jpg" />
                                   @else

                                   <img src="{{ asset('storage/user') }}/{{ $user->avatar}}" />
                                   @endif
                                </div>
                                 <h3>Welcome {{ $user->name}}</h3>
                                 <div class="myaccount_li">
                                        <ul>
                                           	<li><a href="{{ route('user.dashboard') }}"><i class="fa fa-home"></i> Dashboard</a></li>

                                                 <li><a href="{{ route('user.profile') }}"><i class="fa fa-home"></i> Profile</a></li>
                                                 <li><a href="{{ route('user.order')}}"><i class="fa fa-home"></i> Order</a></li>
                                                 <li><a href="#"><i class="fa fa-home"></i> Notification</a></li>
                                        </ul>

								 </div>
          					 </div>