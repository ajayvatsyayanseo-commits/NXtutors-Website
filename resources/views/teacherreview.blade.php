@include('include.header')

<style>
.review-page{
  padding:clamp(32px,6vw,80px) 16px;
}

.review-wrap{
  max-width:1100px;
  margin:auto;
  display:grid;
  grid-template-columns:minmax(0,1fr) minmax(340px,480px);
  gap:clamp(24px,4vw,44px);
  align-items:center;
}

.review-left h1{
  color:#fff;
  font-size:clamp(32px,5vw,54px);
  line-height:1.1;
  margin-bottom:16px;
}

.review-left p{
  color:#cbd5e1;
  line-height:1.7;
  max-width:560px;
}

.review-points{
  margin:24px 0 0;
  padding:0;
  list-style:none;
  display:grid;
  gap:12px;
}

.review-points li{
  color:#fff;
  font-size:15px;
}

.review-card{
  padding:clamp(22px,4vw,36px);
  border-radius:28px;
  background:rgba(255,255,255,.07);
  border:1px solid rgba(255,255,255,.14);
  box-shadow:0 24px 70px rgba(0,0,0,.28);
  backdrop-filter:blur(18px);
}

.review-card h2{
  color:#fff;
  text-align:center;
  font-size:clamp(24px,3vw,32px);
  margin-bottom:8px;
}

.review-sub{
  color:#cbd5e1;
  text-align:center;
  font-size:14px;
  margin-bottom:24px;
}

.review-card label{
  color:#cbd5e1;
  font-size:14px;
  margin-bottom:8px;
  display:block;
}

.review-card input,
.review-card textarea{
  width:100%;
  border:0;
  outline:0;
  border-radius:16px;
  background:rgba(255,255,255,.09);
  color:#fff;
  padding:14px 16px;
  font-size:15px;
}

.review-card textarea{
  min-height:120px;
  resize:vertical;
}

.review-card input::placeholder,
.review-card textarea::placeholder{
  color:#94a3b8;
}

.review-card input:focus,
.review-card textarea:focus{
  box-shadow:0 0 0 2px rgba(56,189,248,.35);
}

.star-rating{
  direction:rtl;
  display:inline-flex;
  font-size:34px;
  gap:8px;
}

.star-rating input{
  display:none;
}

.star-rating label{
  cursor:pointer;
  color:rgba(255,255,255,.22);
  transition:.2s ease;
}

.star-rating label::before{
  content:'★';
}

.star-rating input:checked ~ label,
.star-rating label:hover,
.star-rating label:hover ~ label{
  color:#fbbf24;
  transform:scale(1.08);
}

#rating-value{
  color:#fbbf24 !important;
  font-weight:600;
}

.review-btn{
  width:100%;
  height:54px;
  border:0;
  border-radius:16px;
  background:#fbbf24;
  color:#111827;
  font-weight:800;
  font-size:16px;
  cursor:pointer;
}

#msgHolderfeedback{
  margin-bottom:14px;
}

.loadergif{
  text-align:center;
  margin-bottom:14px;
}

.loadinggif{
  max-width:42px;
}

@media(max-width:992px){
  .review-wrap{
    grid-template-columns:1fr;
    max-width:680px;
  }

  .review-left{
    text-align:center;
  }

  .review-left p{
    margin:auto;
  }

  .review-points{
    grid-template-columns:1fr 1fr;
  }
}

@media(max-width:576px){
  .review-page{
    padding:28px 12px;
  }

  .review-card{
    border-radius:22px;
    padding:22px 16px;
  }

  .review-points{
    grid-template-columns:1fr;
  }

  .star-rating{
    font-size:30px;
  }

  .review-btn{
    height:48px;
  }
}
</style>

<section class="review-page">
  <div class="review-wrap">

    <div class="review-left">
      <h1>Share Your Tutor Experience ⭐</h1>
      <p>
        Your feedback helps other parents choose the right tutor and helps us improve tutor quality.
      </p>

      <ul class="review-points">
        <li>✔ Rate teaching quality</li>
        <li>✔ Help other parents</li>
        <li>✔ Improve tutor ranking</li>
        <li>✔ Verified review system</li>
      </ul>
    </div>

    <div class="review-card">
      <h2>Teacher Review</h2>
      <p class="review-sub">
        Send your honest feedback for {{ $teacher->name ?? 'this tutor' }}.
      </p>

      <div class="loadergif" style="display:none">
        <img src="{{ asset('public/frount/assets') }}/images/loading.gif" class="loadinggif" />
      </div>

      <div id="msgHolderfeedback"></div>

      <form name="feedback_form" id="feedback_form" method="POST">
        @csrf

        <div class="row g-3 g-md-4">
          <div class="col-12">
            <label>Name</label>
            <input type="text" name="name" id="name" placeholder="Your Name" />
          </div>

          <div class="col-12 text-center">
            <label>Rating</label>

            <div class="star-rating">
              <input type="radio" id="star5" name="rating" value="5" />
              <label for="star5" title="5 stars"></label>

              <input type="radio" id="star4" name="rating" value="4" />
              <label for="star4" title="4 stars"></label>

              <input type="radio" id="star3" name="rating" value="3" />
              <label for="star3" title="3 stars"></label>

              <input type="radio" id="star2" name="rating" value="2" />
              <label for="star2" title="2 stars"></label>

              <input type="radio" id="star1" name="rating" value="1" />
              <label for="star1" title="1 star"></label>
            </div>

            <small id="rating-value" class="d-block mt-1"></small>
          </div>

          <div class="col-12  " style="margin-bottom: 10px;">
            <label>Message</label>
            <textarea name="message" id="message" placeholder="Write your experience..."></textarea>
          </div>

          <div class="col-12">
            <input type="hidden" name="user_id" value="{{ $teacher->user_id ?? '' }}">
            <input type="hidden" name="process-feedback" value="1">

            <button type="submit" class="review-btn">
              Submit Review
            </button>
          </div>
        </div>
      </form>
    </div>

  </div>
</section>

@include('include.footer')

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

<script>
$(document).ready(function () {
  $('input[name="rating"]').on('change', function () {
    $('#rating-value').text('You rated: ' + $(this).val() + ' star(s)');
  });

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $("#feedback_form").validate({
    rules: {
      name: { required: true },
      rating: { required: true },
      message: { required: true }
    },
    messages: {
      name: { required: "Please enter your name." },
      rating: { required: "Please select a star rating." },
      message: { required: "Please enter your message." }
    },
    submitHandler: function () {
      $(".loadergif").show();

      $.ajax({
        type: "POST",
        url: "{{ route('feedback') }}",
        data: $("#feedback_form").serialize(),
        cache: false,
        success: function (response) {
          $(".loadergif").hide();

          $("#msgHolderfeedback").html(
            '<div class="alert alert-success">' + (response.message || 'Review submitted successfully.') + '</div>'
          );

          $("#feedback_form")[0].reset();
          $("#rating-value").text('');

          setTimeout(function () {
            $("#msgHolderfeedback").hide('slow');
          }, 2500);
        },
        error: function(xhr){
          $(".loadergif").hide();

          let errorMsg = "Something went wrong. Please try again.";
          if(xhr.responseJSON && xhr.responseJSON.message){
            errorMsg = xhr.responseJSON.message;
          }

          $("#msgHolderfeedback").html(
            '<div class="alert alert-danger">' + errorMsg + '</div>'
          );
        }
      });
    }
  });
});
</script>