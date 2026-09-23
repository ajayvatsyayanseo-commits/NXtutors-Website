@include('include.header')
<style>
.pc{padding:clamp(40px,8vw,110px) 16px;}
.pc__card{max-width:560px;margin:auto;padding:clamp(24px,4vw,40px);border-radius:24px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.14);}
.pc__card h1{color:#fff;font-size:clamp(24px,4vw,32px);margin:0 0 12px;text-align:center;}
.pc__card p{color:#cbd5e1;line-height:1.7;margin:0 0 18px;}
.pc__notice{background:rgba(255,255,255,.06);border-radius:14px;padding:14px 16px;color:#e2e8f0;}
.pc__roles{display:flex;gap:10px;flex-wrap:wrap;margin:0 0 16px;}
.pc__roles label{flex:1 1 140px;display:flex;gap:8px;align-items:center;padding:12px 14px;border-radius:12px;border:1px solid rgba(255,255,255,.2);color:#fff;cursor:pointer;}
.pc__adult{display:flex;gap:10px;align-items:flex-start;color:#e2e8f0;margin:0 0 20px;line-height:1.5;}
.pc__btn{width:100%;padding:14px;border:0;border-radius:12px;background:#38bdf8;color:#0f172a;font-weight:700;font-size:16px;cursor:pointer;}
.pc__err{color:#fca5a5;margin:0 0 12px;}
.pc__card a{color:#38bdf8;font-weight:700;text-decoration:none;}
</style>
<section class="pc">
  <div class="pc__card">
    @if($state === 'ask')
      <h1>Confirm for {{ $childName ?? 'your child' }}</h1>
      <p>{{ $childName ?? 'Your child' }} has joined NXTutors. Because they are under 18, we need a parent or legal guardian to agree before we keep their learning records.</p>
      <p class="pc__notice">{{ $notice }}</p>

      @if($errors->any())
        @foreach($errors->all() as $error)
          <p class="pc__err">{{ $error }}</p>
        @endforeach
      @endif

      <form method="POST" action="{{ route('consent.confirm', [$id, $token]) }}">
        @csrf
        <p style="margin-bottom:8px;color:#fff;font-weight:600;">I am their:</p>
        <div class="pc__roles">
          <label><input type="radio" name="role" value="mother" @checked(old('role') === 'mother')> Mother</label>
          <label><input type="radio" name="role" value="father" @checked(old('role') === 'father')> Father</label>
          <label><input type="radio" name="role" value="guardian" @checked(old('role') === 'guardian')> Legal guardian</label>
        </div>
        <label class="pc__adult">
          <input type="checkbox" name="adult" value="1" @checked(old('adult'))>
          <span>I am 18 or older, I am this student's parent or legal guardian, and I agree to the above.</span>
        </label>
        <button type="submit" class="pc__btn">Confirm</button>
      </form>
    @elseif($state === 'done')
      <h1>Thank you ✓</h1>
      <p style="text-align:center;">Your consent is recorded. You can withdraw it at any time from the account, or by messaging us on WhatsApp.</p>
      <p style="text-align:center;"><a href="{{ url('/') }}">Go to NXTutors →</a></p>
    @else
      <h1>This link is not valid</h1>
      <p style="text-align:center;">It may have expired, or it has already been used. If you already confirmed, there is nothing more to do. Otherwise, message us on WhatsApp and we will send a new link.</p>
      <p style="text-align:center;"><a href="{{ url('/') }}">Go to NXTutors →</a></p>
    @endif
  </div>
</section>
@include('include.footer')
