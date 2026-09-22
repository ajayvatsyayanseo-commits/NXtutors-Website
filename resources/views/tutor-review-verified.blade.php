@include('include.header')
<style>
.rvv{padding:clamp(40px,8vw,110px) 16px;}
.rvv__card{max-width:560px;margin:auto;text-align:center;padding:clamp(24px,4vw,40px);border-radius:24px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);}
.rvv__card h1{color:#fff;font-size:clamp(24px,4vw,34px);margin:0 0 12px;}
.rvv__card p{color:#cbd5e1;line-height:1.7;margin:0 0 18px;}
.rvv__card a{color:#38bdf8;font-weight:700;text-decoration:none;}
</style>
<section class="rvv">
  <div class="rvv__card">
    @if($state === 'verified')
      <h1>Email confirmed ✓</h1>
      <p>Thank you. Your review{{ $teacher ? ' of '.$teacher->name : '' }} is now with our team and will be published once it has been checked.</p>
    @elseif($state === 'expired')
      <h1>This link has expired</h1>
      <p>Confirmation links work for {{ (int) config('reviews.verify_link_hours') }} hours. Please submit your review again and use the new link.</p>
    @else
      <h1>This link is not valid</h1>
      <p>It may already have been used. If you have confirmed your review before, there is nothing more to do.</p>
    @endif
    @if($publicUrl)
      <a href="{{ $publicUrl }}">Go to {{ $teacher->name }}'s profile →</a>
    @else
      <a href="{{ url('/') }}">Go to NXTutors →</a>
    @endif
  </div>
</section>
@include('include.footer')
