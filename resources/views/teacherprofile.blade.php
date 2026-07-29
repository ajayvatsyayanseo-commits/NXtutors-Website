 @include('include.header')
<div class="tl-breadcrumb pt-120 pb-120">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-md-6">
            <div class="banner-txt">
              <h1 class="tl-breadcrumb-title">Teacher Profile</h1>
            </div>
          </div>

          <div class="col-md-6">
            <ul class="tl-breadcrumb-nav d-flex">
              <li><a href="{{ url('/')}}">Home</a></li>
              <li class="current-page">
                <span class="dvdr"><i class="icofont-simple-right"></i></span>
                <span>Teacher Profile</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>



    <!-- STAFF PROFILE START -->
    <div class="tl-staff-profile pt-120 pb-120">
      <div class="container">
        <div class="tl-staff-profile-top">
         <!--  @if($teacher->avatar=='')
          <img src="{{ asset('frount/assets') }}/images/tl-2/teacher-1.jpg" alt="staff image" />
          @else
           <img src="{{ asset('storage/user') }}/{{ $teacher->avatar}}" alt="staff image" />
           @endif -->
          @if($teacher && $teacher->avatar != '')
    <img src="{{ asset('storage/user') }}/{{ $teacher->avatar }}" alt="staff image" />
@else
    <img src="{{ asset('frount/assets/images/tl-2/teacher-1.jpg') }}" alt="staff image" />
@endif
          <div class="tl-staff-profile-txt">
            <div class="tl-staff-profile-intro">
              <div>
                <h4 class="tl-staff-profile-name">{{ ucfirst($teacher->name)}}</h4>
                <h6 class="tl-staff-profile-role">{{ ucfirst($teacher->profile)}}</h6>
              </div>
              <!-- <ul class="tl-3-footer-socials tl-staff-profile-socials">
                <li>
                  <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </li>
              </ul> -->
            </div>

            <p class="tl-staff-profile-bio">
              {{ ucfirst($teacher->profile_desc)}}
            </p>
          </div>

          <div class="tl-course-details-infos tl-staff-profile-infos">
            <div class="tl-course-details-info">
              <h5 class="tl-staff-profile-info-value">21+</h5>
              <h6 class="tl-course-details-info-name">Courses</h6>
            </div>
            <div class="tl-course-details-info">
              <h5 class="tl-staff-profile-info-value">1231+</h5>
              <h6 class="tl-course-details-info-name">Students</h6>
            </div>
            <div class="tl-course-details-info">
              <h5 class="tl-staff-profile-info-value">5/5</h5>
              <h6 class="tl-course-details-info-name">Ratings</h6>
            </div>
          </div>
        </div>
         @if($totalcourse > 0)
        <div class="tl-staff-profile-courses">
          <h3 class="tl-staff-profile-courses-title">
            All course of the instructor
          </h3>
          <div class="row g-3 g-xl-4">
     
            @foreach($course as $rowp)
            <div class="col-lg-4 col-sm-6">
              <div class="tl-1-course">
                <div class="tl-1-course-img">
                  <img
                    src="{{ asset('storage/category') }}/{{ $rowp->category->avatar}}"
                    alt="Course Image"
                  />
                  <!-- <span class="tl-1-course-price">$53.00</span> -->
                </div>

                <div class="tl-1-course-txt">
                  <!-- <span class="tl-1-course-author"
                    >By <a href="#">Brian Cumin</a></span
                  > -->
                  <h4 class="tl-1-course-title">
                    <a href="{{ url('/')}}/category/{{ $rowp->category->slug}}"
                      >{{ $rowp->category->cat_title}}</a
                    >
                  </h4>
                  <div class="tl-1-course-stats">
                    <div class="tl-1-course-stat">
                      <span class="tl-1-course-stat-icon"
                        ><i class="fa-regular fa-book-blank"></i
                      ></span>
                      <span class="tl-1-course-stat-txt">6 Lessons</span>
                    </div>

                    <div class="tl-1-course-stat">
                      <span class="tl-1-course-stat-icon"
                        ><i class="fa-regular fa-user-group"></i
                      ></span>
                      <span class="tl-1-course-stat-txt">32 Students</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
       
 
          </div>
        </div>
        @endif
      </div>
    </div>
    <!-- STAFF PROFILE END -->

     @include('include.footer')