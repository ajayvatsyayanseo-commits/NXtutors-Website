<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $setting->name}}</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/user') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"   />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/user') }}/css/style.css">
  </head>
<body>

    <body class="nav-md">

<div class="container body">
  <div class="main_container">
    <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
          <a href="{{ url('/')}}" class="site_title"><i class="fa fa-dashboard"></i> <span>{{ $user->name}}</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
          <div class="profile_pic">
            @if($user->avatar=='')
            <img src="{{ asset('public/frount/assets/images/tutor1.jpg') }} " alt="..." class="img-circle profile_img">
            @else
            <img src="{{ asset('public/frount/assets/images/tutor1.jpg') }}" class="img-circle profile_img" />
            @endif
          </div>
          <div class="profile_info">
            <span>Welcome,</span>
            <h2>{{ $user->name}}</h2>
          </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
             <ul class="nav side-menu">
              <li><a href="{{ url('/')}}/user/dashboard"><i class="fa fa-home"></i> Dashboard</a>
                 
              </li>

               <li><a href="{{ url('/')}}/user/my-plan"><i class="fa fa-home"></i> My Plan</a>
                 
              </li>
              <li><a href="javascript:void(0)"><i class="fa fa-user"></i>Profile <span class="fa fa-chevron-down"></span>
                <ul class="nav child_menu">
                  <li><a href="{{ route('user.profile') }}">Profile</a></li>
                
                  <li><a href="{{ url('/')}}/user/change-password">Change Password</a></li>
                  
                </ul>
              </li>
              <li><a href="javascript:void(0)"><i class="fa fa-message"></i>Message <span class="fa fa-chevron-down"></span>
                <ul class="nav child_menu">
                  <li><a href="javascript:void(0)">Message List</a></li> 
                </ul>
              </li>
              <li><a href="javascript:void(0)"><i class="fa fa-message"></i>Enquiry Managment <span class="fa fa-chevron-down"></span>
                <ul class="nav child_menu">
                  <li><a href="{{ url('/enquiry_teacher') }}">Enquiry for Teacher</a></li> 
                </ul>
              </li>
              <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </div>
           

        </div>
        <!-- /sidebar menu -->
 
      </div>
    </div>

    <!-- top navigation -->
    <div class="top_nav">
      <div class="nav_menu">
        <nav>
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>

          <ul class="nav navbar-nav navbar-right">
            <li class="">
              <a href="{{ route('user.profile') }}" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                @if($user->avatar=='')
                <img src="{{ asset('public/frount/assets/images/tutor1.jpg') }}" />
                @else
                <img src="{{ asset('public/storage/user') }}/{{ $user->avatar}}" />
                @endif {{ $user->name}}
                <span class=" fa fa-angle-down"></span>
              </a>
              <ul class="dropdown-menu dropdown-usermenu pull-right">
                <li><a href="{{ route('user.profile') }}"> Profile</a></li>
                 
                <li><a href="javascript:void()">Help</a></li>
                <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
              </ul>
            </li>

            <li role="presentation" class="dropdown">
              <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-envelope"></i>
                <span class="badge bg-green">6</span>
              </a>
              <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                <li>
                  <a>
                    <span class="image">@if($user->avatar=='')
                                   <img src="{{ asset('public/admin/assets') }}/img/profile-img.jpg" />
                                   @else

                                   <img src="{{ asset('public/storage/user') }}/{{ $user->avatar}}" />
                                   @endif</span>
                    <span>
                          <span>{{ $user->name}}</span>
                    <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                  </a>
                </li>
                <li>
                  <a>
                    <span class="image">@if($user->avatar=='')
                                   <img src="{{ asset('public/admin/assets') }}/img/profile-img.jpg" />
                                   @else

                                   <img src="{{ asset('public/storage/user') }}/{{ $user->avatar}}" />
                                   @endif</span>
                    <span>
                          <span>{{ $user->name}}</span>
                    <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                  </a>
                </li>
                <li>
                  <a>
                    <span class="image">@if($user->avatar=='')
                                   <img src="{{ asset('public/admin/assets') }}/img/profile-img.jpg" />
                                   @else

                                   <img src="{{ asset('public/storage/user') }}/{{ $user->avatar}}" />
                                   @endif</span>
                    <span>
                          <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                  </a>
                </li>
                <li>
                  <a>
                    <span class="image">@if($user->avatar=='')
                <img src="{{ asset('public/admin/assets') }}/img/profile-img.jpg" />
                @else
                <img src="{{ asset('public/storage/user') }}/{{ $user->avatar}}" />
                @endif</span>
                    <span>
                          <span>{{ $user->name}}</span>
                    <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                  </a>
                </li>
                <li>
                  <div class="text-center">
                    <a>
                      <strong>See All Alerts</strong>
                      <i class="fa fa-angle-right"></i>
                    </a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- /top navigation -->