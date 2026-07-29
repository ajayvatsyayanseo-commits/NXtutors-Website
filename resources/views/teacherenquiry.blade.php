 @include('include.header')

 <style type="text/css">
     .user-type-option {
  display: inline-block;
  margin-right: 20px;
  font-size: 16px;
  cursor: pointer;
}

.user-type-option input[type="radio"] {
  margin-right: 8px;
}

.gtss {
    display: flex;
    align-items: center;
        padding-left: 20px;
    border: solid 1px #ccc;
}

.gtss input {
    width: 15px;
    margin-right: 10px;
}
.remove-image {
    float: right;
    position: relative;
    bottom: 190px;
    border-radius: 50%;
        width: auto;
    left: 95%;

}
.checkbox-dropdown-wrapper {
    position: relative;
    width: 100%;
}

.checkbox-dropdown-toggle {
    padding: 10px;
    border: 1px solid #ccc;
    background: #f9f9f9;
    cursor: pointer;
    border-radius: 4px;
}

.checkbox-dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    max-height: 200px;
    overflow-y: auto;
    border: 1px solid #ccc;
    background: white;
    display: none;
    z-index: 999;
    border-radius: 4px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.checkbox-item .select-all-subjects, .subject-checkbox {
       padding: 8px 10px !important;
    border-bottom: 1px solid #eee !important;
    width: 16px !important;
    height: 14px !important;
}
.add-more {
        width: auto;
    margin-top: -25px;
    margin-bottom: 20px;
}

@media (max-width:767.98px){ 
.remove-image {
    position: relative;
    width: auto;
    /* right: 6px; */
    bottom: 300px;
     border-radius: 50%;
     left: 93%;
}
.remove-image.first-remove {
    bottom: 256px;
}
}

 </style>
 <!-- BREADCRUMB STARTS HERE -->
    <div class="tl-breadcrumb tl-breadcrumb-4 pt-120 pb-120">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-md-6">
            <div class="banner-txt">
              <h1 class="tl-breadcrumb-title">Enquiry For Teacher</h1>
            </div>
          </div>

          <div class="col-md-6">
            <ul class="tl-breadcrumb-nav d-flex">
              <li><a href="{{ url('/')}}">Home</a></li>
              <li class="current-page">
                <span class="dvdr"><i class="icofont-simple-right"></i></span>
                <span>Enquiry For Teacher</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- BREADCRUMB ENDS HERE -->
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <section class="tl-7-contact">
      <div class="container">
        <div
          class="row gy-4 gy-md-5 justify-content-between align-items-center"
        >
          <div class="col-lg-9">
            <div class="loadergif" style="display:none"><img src="{{ asset('frount/assets') }}/images/loading.gif" class="loadinggif"  /></div>
            <div id="msgHolderresister"></div>
            <h2 class="tl-8-section-title">Enquiry For Teacher</h2>

            <form class="tl-7-contact-form register_form" name="register_form" id="register_form" method="post">
                
                <div  class="row gy-4 mt-5"  >
                  <div class="col-md-6">
                        <div class="gtss">
                        <input type="radio" name="for_class" value="offline"> 
                        <span>For Offline Class</span>
                     </div>
                     </div>
                     <div class="col-md-6">
                        <div class="gtss">
                        <input type="radio" name="for_class" value="online">
                        <span>For  Online Class</span> 
                        </div>
                        </div>
                     </div>
                     
                    
                    <div  class="row gy-4 mt-5"  >
                    <div class="col-6 col-xxs-6">
                        <label for="phone">Name </label>
                      <input type="text" name="name" id="name" placeholder="Your Name" required />
                    </div>
                    <div class="col-6 col-xxs-6">
                        <label for="phone">Budget</label>
                        <select name="budget" id="budget" >
                            <option value="0">Select</option>
                            <option value="300-400">300-400 Rs. Per Hours</option>
                            <option value="400-700">400-700 Rs. Per Hours</option>
                            <option value="500-1000">500-1000 Rs. Per Hours</option>
                            <option value="800-1200">800-1200 Rs. Per Hours</option>
                            <option value="1000-1500">1000-1500 Rs. Per Hours</option>
                           
                        </select>
                    </div>
                    <div class="col-6 col-xxs-12">
                        <label for="phone">Phone Number</label>
                      <input type="text"  id="phone" name="phone" onkeypress="return onlyNumberKey(event)" maxlength="13" placeholder="Your Mobile" required />
                    </div>
                    <div class="col-6 col-xxs-12">
                        <label for="phone">Email</label>
                      <input type="text" name="email" id="email" placeholder="Your Email Address" required />
                    </div>
                    <div class="col-6 col-xxs-12">
                        <label for="phone">PIN Code</label>
                      <input type="text" name="pincode" id="pincode" placeholder="PIN Code" required/>
                      
                        <select id="areaDropdown" style="width: 100%; display: none;"></select>
                    </div>

                    <div class="col-6 col-xxs-12">
                        <label for="phone">State</label>
                      <input type="text" name="state" id="state" placeholder="State" readonly/>
                    </div>

                     <div class="col-6 col-xxs-12 mb-15">
                        <label for="phone">District</label>
                      <input type="text" name="district" id="district" placeholder="District" readonly />
                    </div>

                    <div class="col-6 col-xxs-12 mb-15">
                        <label for="phone">City/Area</label>
                      <input type="text" name="city" id="city" placeholder="City/Area" readonly />
                    </div>
                   
    
       <div class="row variant-wrapper">
       <div class="col-lg-6 mb-15">
          <label for="phone">Main Course </label>
          <select class="cat_id" name="cat_id[]"  id="cat_id">
              <option value="0"> Select Course</option>
              @foreach($categories as $rowss)
              <option value="{{ $rowss->id}}" >{{ $rowss->cat_title}}</option>
              @endforeach
          </select>
          @error('cat_id')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="col-lg-6 mb-15">
          <label for="phone">Board Name </label>
          <select class="pid" name="pid[]"  id="pid">
              <option value="0">Select</option>
                
          </select>
          @error('pid')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="col-lg-6 mb-15">
          <label for="phone">Class Name </label>
          <select class="cid" name="cid[]"  id="cid">
            <option value="0">Select</option>
    
          </select>
          @error('cid')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        
        <div class="col-lg-6 mb-15">
    <label for="sub_id">Subject Name</label>
    <div class="sub_id">
       
        @error('sub_id')
            <div class="text-danger">{{ $message }}</div>
          @enderror
    </div>
</div>
        <a href="javascript:void()" class="btn btn-danger remove-image">x</a>
    </div>


 
    <a href="javascript:void(0)" class="btn btn-primary add-more variant-wrapper" style="width:auto;">Add More</a>
        </div>            
                    <div class="col">
                        @if(session()->has('userid'))
  <input type="hidden" name="user_id" value="{{ session('userid') }}">
@endif
                      <input type="hidden" name="processuser" value="1">
                      <button type="submit" class="tl-7-def-btn">
                        Submit
                      </button>
                    </div>
                </div>
            </form>
          <form class="tl-7-contact-form otp_form" name="otp_form" id="otp_form" method="post" style="display: none;">
              <div class="col-12 col-xxs-12">
                  <input type="text" name="eotp" id="eotp" placeholder="Enter OTP" required />
                </div>
                <div class="col">
                  <input type="hidden" name="verifyotp" value="1"> 
                  <button type="submit" name="submit" class="tl-7-def-btn mt-4">
                    Submit
                  </button>
                </div>

            </form>
          </div>
      </div>
  </div>
  </div>
</section>
 
  @include('include.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

<script>
 
    $('.add-more').click(function () {
    $('.variant-wrapper:last').before(`
        <div class="row variant-wrapper">
            <div class="form-group col-lg-6 mb-15">
                <label>Main Course</label>
                <select class="form-control cat_id" name="cat_id[]">
                    <option value="0">Select Course</option>
                    @foreach($categories as $rows)
                        <option value="{{ $rows->id }}">{{ $rows->cat_title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-lg-6 mb-15">
                <label>Board Name</label>
                <select class="form-control pid" name="pid[]"></select>
            </div>
            <div class="form-group col-lg-6 mb-15">
                <label>Class Name</label>
                <select class="form-control cid" name="cid[]"></select>
            </div>
            <div class="form-group col-lg-6 mb-15">
              <label for="sub_id">  Subject Name</label>
              <div class="sub_id"></div>
            </div>
            <a class="btn btn-danger remove-image first-remove">x</a>
        </div>
    `);
});
</script>
<script>
$(document).on('change', '.pid', function () {
    var $wrapper = $(this).closest('.variant-wrapper');
    var catId = $(this).val();
    var $cid = $wrapper.find('.cid');
    var $sub_id = $wrapper.find('.sub_id'); // This is now your checkbox container

    if (catId != "0") {
        $.ajax({
            url: '{{ url('/') }}/get-parent-categories/' + catId,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                // Reset category dropdown
                $cid.empty().append('<option value="0">Select</option>');
                
                // Populate child categories
                $.each(data.child_categories, function (index, category) {
                    $cid.append('<option value="' + category.id + '">' + category.cat_title + '</option>');
                });

                // Reset and build checkbox dropdown
                var checkboxHTML = `
                    <div class="checkbox-dropdown-wrapper">
                        <div class="checkbox-dropdown-toggle">Select Subjects</div>
                        <div class="checkbox-dropdown-menu">
                            <div class="checkbox-item">
                                <label>
                                    <input type="checkbox" class="select-all-subjects"> <strong>Select All</strong>
                                </label>
                            </div>
                `;
                var blockIndex = $('.variant-wrapper').index($wrapper);
                $.each(data.products, function (index, product) {
                    checkboxHTML += `
                        <div class="checkbox-item">
                            <label>
                                <input type="checkbox" class="subject-checkbox" name="sub_id[${blockIndex}][]" value="${product.id}">
                                ${product.title}
                            </label>
                        </div>
                    `;
                });

                checkboxHTML += `</div></div>`;

                $sub_id.html(checkboxHTML); // Insert into container

                // Toggle dropdown on click
                $wrapper.find('.checkbox-dropdown-toggle').on('click', function () {
                    $(this).siblings('.checkbox-dropdown-menu').toggle();
                });

                // Select All functionality
                $wrapper.find('.select-all-subjects').on('change', function () {
                    $(this).closest('.checkbox-dropdown-menu').find('.subject-checkbox')
                        .prop('checked', $(this).prop('checked'));
                });

                // Close dropdown if clicked outside
                $(document).on('click', function (e) {
                    if (!$(e.target).closest('.checkbox-dropdown-wrapper').length) {
                        $('.checkbox-dropdown-menu').hide();
                    }
                });

            }
        });
    } else {
        $cid.empty().append('<option value="0">Select</option>');
        $sub_id.empty(); // Clear checkboxes
    }
});
</script>



 <script>
   $(document).on('change', '.cid', function () {
    var $wrapper = $(this).closest('.variant-wrapper');
    var ccatId = $(this).val();
   

    var $sub_id = $wrapper.find('.sub_id');

    if (ccatId != "0") {
        $.ajax({
            url: '{{ url('/') }}/get-products-by-class/' + ccatId,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                
                $sub_id.empty().append('<option value="0">Select </option>');

                // $.each(data.products, function (index, product) {
                //     $sub_id.append('<option value="' + product.id + '">' + product.title + '</option>');
                // });
           let checkboxHTML = `
                    <div class="checkbox-dropdown-wrapper">
                        <div class="checkbox-dropdown-toggle">Select Subjects</div>
                        <div class="checkbox-dropdown-menu">
                            <div class="checkbox-item">
                                <label>
                                    <input type="checkbox" class="select-all-subjects"> <strong>Select All</strong>
                                </label>
                            </div>
                `;

                var blockIndex = $('.variant-wrapper').index($wrapper);
                $.each(data.products, function (index, product) {
                    checkboxHTML += `
                        <div class="checkbox-item">
                            <label>
                                <input type="checkbox" class="subject-checkbox" name="sub_id[${blockIndex}][]" value="${product.id}">
                                ${product.title}
                            </label>
                        </div>
                    `;
                });

                checkboxHTML += `</div></div>`;

                $sub_id.html(checkboxHTML);

                // Toggle dropdown visibility
                $wrapper.find('.checkbox-dropdown-toggle').on('click', function () {
                    $(this).siblings('.checkbox-dropdown-menu').toggle();
                });

                // Select All functionality
                $wrapper.find('.select-all-subjects').on('change', function () {
                    $(this).closest('.checkbox-dropdown-menu').find('.subject-checkbox')
                        .prop('checked', $(this).prop('checked'));
                });

                // Close dropdown on outside click
                $(document).on('click', function (e) {
                    if (!$(e.target).closest('.checkbox-dropdown-wrapper').length) {
                        $('.checkbox-dropdown-menu').hide();
                    }
                });
            }
        });
    } else {
 
        $sub_id.empty().append('<option value="0">Select </option>');
    }
});

</script>

 <script>
   $(document).on('change', '.cat_id', function () {
    var $wrapper = $(this).closest('.variant-wrapper');
    var parentId = $(this).val();

    var $pid = $wrapper.find('.pid');
    var $cid = $wrapper.find('.cid');
    var $sub_id = $wrapper.find('.sub_id');

    if (parentId != "0") {
        $.ajax({
            url: '{{ url('/') }}/get-child-categories/' + parentId,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                $pid.empty().append('<option value="0">Select </option>');
                $cid.empty().append('<option value="0">Select </option>');
                $sub_id.empty().append('<option value="0">Select </option>');

                $.each(data.child_categories, function (index, category) {
                    $pid.append('<option value="' + category.id + '">' + category.cat_title + '</option>');
                });

                // $.each(data.products, function (index, product) {
                //     $sub_id.append('<option value="' + product.id + '">' + product.title + '</option>');
                // });

          let checkboxHTML = `
                    <div class="checkbox-dropdown-wrapper">
                        <div class="checkbox-dropdown-toggle">Select Subjects</div>
                        <div class="checkbox-dropdown-menu">
                            <div class="checkbox-item">
                                <label>
                                    <input type="checkbox" class="select-all-subjects"> <strong>Select All</strong>
                                </label>
                            </div>
                `;

                var blockIndex = $('.variant-wrapper').index($wrapper);
                $.each(data.products, function (index, product) {
                    checkboxHTML += `
                        <div class="checkbox-item">
                            <label>
                                <input type="checkbox" class="subject-checkbox" name="sub_id[${blockIndex}][]" value="${product.id}">
                                ${product.title}
                            </label>
                        </div>
                    `;
                });

                checkboxHTML += `</div></div>`;

                $sub_id.html(checkboxHTML);

                // Toggle dropdown visibility
                $wrapper.find('.checkbox-dropdown-toggle').on('click', function () {
                    $(this).siblings('.checkbox-dropdown-menu').toggle();
                });

                // Select All functionality
                $wrapper.find('.select-all-subjects').on('change', function () {
                    $(this).closest('.checkbox-dropdown-menu').find('.subject-checkbox')
                        .prop('checked', $(this).prop('checked'));
                });

                // Close dropdown on outside click
                $(document).on('click', function (e) {
                    if (!$(e.target).closest('.checkbox-dropdown-wrapper').length) {
                        $('.checkbox-dropdown-menu').hide();
                    }
                });
            }
        });
    } else {
        $pid.empty().append('<option value="0">Select </option>');
        $cid.empty().append('<option value="0">Select </option>');
        $sub_id.empty().append('<option value="0">Select </option>');
    }
});

</script>
<script>

$(document).ready(function () {
  let timer;

  $('#pincode').on('input', function () {
    const pincode = $(this).val().trim();
    clearTimeout(timer); // Clear previous timer

    if ($.isNumeric(pincode)) {
      timer = setTimeout(function () {
        // $.ajax({
        //   url: `https://api.postalpincode.in/pincode/${pincode}`,
        //   method: 'GET',
        $.ajax({
    url: "{{ url('/')}}/get-pincode-details",
    method: "POST",
    data: { pincode: pincode },
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
   success: function (response) {
          
            if (response[0].Status === "Success") {
              const data = response[0].PostOffice[0];
              $('#state').val(data.State);
              $('#district').val(data.District);

              // Populate Area dropdown with name and pincode
              const areas = response[0].PostOffice.map(p => 
                `<option value="${p.Name}" data-pincode="${p.Pincode}">${p.Pincode} (${p.Name})</option>`
              );
              $('#areaDropdown').html(areas.join('')).show().select2({
                placeholder: 'Select Area',
                allowClear: true
              });

              // Reset city field when new data loads
              $('#city').val('');
            } else {
              $('#state, #district, #city').val('');
              $('#areaDropdown').html('').hide();
            }
          },
          error: function () {
            $('#state, #district, #city').val('');
            $('#areaDropdown').html('').hide();
          }
        });
      }, 500);
    } else {
      $('#state, #district, #city').val('');
      $('#areaDropdown').html('').hide();
    }
  });

  // Set city field when area is selected
  $('#areaDropdown').on('change', function () {
    const selectedArea = $(this).val();
    $('#city').val(selectedArea || '');
  });
});
</script>

<script type="text/javascript">
$(document).ready(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#register_form").validate({
        rules: {      
            name: {
                required: true
            },
            email: {
                required: true,
                email: true,
               
            },
            phone: {
                required: true,
                minlength: 10,
                
            },
            pass: {
                required: true
            },
            cpass_id: {
                required: true,
                equalTo: "#pass"
            },
            terms: {
                required: true
            }
        },
        messages: {
            name: {
                required: "Please enter your name."
            },
            email: {
                required: "Please enter your email address.",
                email: "Enter a valid email."
            },
            phone: {
                required: "Please enter your mobile number.",
                minlength: "Mobile number must contain at least 10 characters."
            },
            pass: {
                required: "Please enter your password."
            },
            cpass_id: {
                required: "Please repeat your password.",
                equalTo: "Enter the same password."
            },
            terms: {
                required: "Please accept the terms and conditions."
            }
        },
        submitHandler: function(form) {
            var str = $("#register_form").serialize();
            $(".loadergif").show();
            $.ajax({
                type: "POST",
                url: "{{ route('enquiryregister') }}",  
                data: str,
                cache: false,
                success: function(response) {
                    $(".loadergif").hide();
                    $("#msgHolderresister").html(response.message);
                    $(".register_form").hide();
                    $(".otp_form").show();

                    
                },
                 
            });
        }
    });
});
</script>

<script type="text/javascript">
$(document).ready(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#otp_form").validate({
        rules: {      
            
            eotp: {
                required: true,
                remote: {
                    url: "{{ route('echeckOTP') }}",  // Make sure this route is defined in your web.php
                    type: "post",
                    data: {
                        eotp: function() {
                            return $("#eotp").val();
                        }
                    },
                    dataFilter: function(response) {
                        var data = JSON.parse(response);
                        return data.exists ? true : "\"Please enter a valid OTP.\"";
                    }
                }
            }
       
           
        },
        messages: {
            
            eotp: {
                required: "Please enter your otp.",
                 
            },
             
        },
        submitHandler: function(form) {
            var str = $("#otp_form").serialize();
            $(".loadergif").show();
            $.ajax({
                type: "POST",
                url: "{{ route('everifyOtp') }}",  
                data: str,
                cache: false,
                success: function(response) {
                    $(".loadergif").hide();
                    $("#msgHolderresister").html(response.message);
                    $(".register_form").show();
                    $(".otp_form").hide();
                },
                 
            });
        }
    });
});
</script>

 
