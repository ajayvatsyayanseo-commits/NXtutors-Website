 @include('include.teacherheader')
 
 <div class="right_col" role="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div> 
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
 
                <div class="card-body">
                  <h5 class="card-title">Total Student  </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-user"></i>
                    </div>
                    <div class="ps-3">
                      <h6>0</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div> 
 
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
 
                <div class="card-body">
                  <h5 class="card-title">Total Enquiry</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-user"></i>
                    </div>
                    <div class="ps-3">
                      <h6>0</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div> <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
 
                <div class="card-body">
                  <h5 class="card-title">Total Reviews</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-user"></i>
                    </div>
                    <div class="ps-3">
                      <h6>0</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div> 

           
 

          </div>
        </div><!-- End Left side columns -->


      </div>
    </section>
 </div>

  @include('include.teacherfooter')