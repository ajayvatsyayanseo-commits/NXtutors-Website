{{--
  /parent/login: two ways in on one screen (App\Http\Controllers\Parent\ParentAuthController).
  The tabs are radios, so switching works without JavaScript; the code field
  appears once WhatsApp has been opened (or straight away without JavaScript).
  One marigold button is visible at a time: the panel that is not chosen is hidden.
--}}
@php $nxtParentCss = true; @endphp
@include('include.header')
@php
  $codeOpen = session('code_sent') || $errors->has('code') || old('code');
  $onEmail = $method === 'email';
@endphp
<section class="nxp" id="nxt-content">
  <div class="nxp__wrap">
    <header class="nxp__head">
      <p class="nxp__eyebrow">For parents</p>
      <h1 class="nxp__title">Family login</h1>
      <p class="nxp__sub">Your children's NXtutors account, in one place.</p>
    </header>

    <div class="nxp__card">
      @if(session('status'))
        <p class="nxp__alert nxp__alert--ok" role="status">{{ session('status') }}</p>
      @endif

      <input class="nxp__radio" type="radio" name="nxp-method" id="nxp-m-wa" @checked(! $onEmail)>
      <input class="nxp__radio" type="radio" name="nxp-method" id="nxp-m-email" @checked($onEmail)>
      <div class="nxp__tabs" role="presentation">
        <label class="nxp__tab" for="nxp-m-wa">Log in with WhatsApp</label>
        <label class="nxp__tab" for="nxp-m-email">Log in with email</label>
      </div>

      {{-- (a) WhatsApp code --}}
      <div class="nxp__panel nxp__panel--wa">
        <form method="POST" action="{{ route('parent.login.code') }}" novalidate>
          @csrf
          <input type="hidden" name="method" value="whatsapp">
          @if($errors->has('phone'))
            <p class="nxp__alert nxp__alert--error" role="alert">{{ $errors->first('phone') }}</p>
          @endif

          <div class="nxp__field">
            <label for="nxp-phone">Your mobile number</label>
            <div class="nxp__phone">
              <span aria-hidden="true">+91</span>
              <input class="nxp__input" id="nxp-phone" name="phone" type="tel" inputmode="numeric"
                     autocomplete="tel-national" placeholder="98765 43210" maxlength="16"
                     value="{{ old('phone') }}" required>
            </div>
            <small>The number your family account is registered with.</small>
          </div>

          <ol class="nxp__steps">
            <li>Tap the button below. WhatsApp opens with the message ready.</li>
            <li>Send it from this number. Your 6-digit code arrives in the chat.</li>
            <li>Come back here and type the code.</li>
          </ol>

          <a class="nxp__btn nxp__btn--wa" id="nxp-wa" href="{{ $waUrl }}" target="_blank" rel="noopener">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.47 14.38c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.16-.17.2-.35.22-.64.07-.3-.15-1.26-.46-2.39-1.47-.88-.79-1.48-1.76-1.65-2.06-.17-.3-.02-.46.13-.6.13-.14.3-.35.45-.52.15-.18.2-.3.3-.5.1-.2.05-.37-.03-.52-.07-.15-.67-1.61-.92-2.2-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.04 1.02-1.04 2.48s1.07 2.88 1.21 3.07c.15.2 2.1 3.2 5.08 4.49.71.31 1.26.49 1.7.63.71.23 1.36.2 1.87.12.57-.09 1.76-.72 2-1.41.25-.7.25-1.29.18-1.41-.08-.13-.27-.2-.57-.35M12.05 21.79h-.01a9.87 9.87 0 0 1-5.03-1.38l-.36-.21-3.74.98 1-3.65-.24-.37a9.86 9.86 0 0 1-1.51-5.26c0-5.45 4.44-9.88 9.89-9.88 2.64 0 5.12 1.03 6.99 2.9a9.83 9.83 0 0 1 2.89 6.99c0 5.45-4.44 9.88-9.88 9.88m8.41-18.3A11.82 11.82 0 0 0 12.05 0C5.5 0 .16 5.34.16 11.89c0 2.1.55 4.14 1.59 5.95L.06 24l6.3-1.65a11.88 11.88 0 0 0 5.69 1.45h.01c6.55 0 11.89-5.34 11.89-11.89 0-3.18-1.24-6.17-3.49-8.41"/></svg>
            Get my code on WhatsApp
          </a>
          <button type="button" class="nxp__have-code" id="nxp-have-code" @if($codeOpen) hidden @endif>I already have a code</button>

          <div class="nxp__code {{ $codeOpen ? '' : 'is-hidden' }}" id="nxp-code-box">
            @if($errors->has('code'))
              <p class="nxp__alert nxp__alert--error" role="alert">{{ $errors->first('code') }}</p>
            @endif
            <div class="nxp__field">
              <label for="nxp-code">6-digit code from WhatsApp</label>
              <input class="nxp__input nxp__code-input @error('code') nxp__is-invalid @enderror" id="nxp-code" name="code"
                     type="text" inputmode="numeric" autocomplete="one-time-code" pattern="[0-9]*"
                     maxlength="6" placeholder="••••••" required>
            </div>
            <button type="submit" class="nxp__btn nxp__btn--action">Log in</button>
          </div>
        </form>
      </div>

      {{-- (b) Email and password --}}
      <div class="nxp__panel nxp__panel--email">
        <form method="POST" action="{{ route('parent.login.email') }}" novalidate>
          @csrf
          <input type="hidden" name="method" value="email">
          @if($errors->has('email') || $errors->has('password'))
            <p class="nxp__alert nxp__alert--error" role="alert">{{ $errors->first('email') ?: $errors->first('password') }}</p>
          @endif
          <div class="nxp__field">
            <label for="nxp-email">Email</label>
            <input class="nxp__input" id="nxp-email" name="email" type="email" autocomplete="email"
                   placeholder="you@example.com" value="{{ old('email') }}" required>
          </div>
          <div class="nxp__field">
            <label for="nxp-password">Password</label>
            <input class="nxp__input" id="nxp-password" name="password" type="password"
                   autocomplete="current-password" required>
          </div>
          <button type="submit" class="nxp__btn nxp__btn--action">Log in</button>
          <p class="nxp__alt"><label class="nxp__link" for="nxp-m-wa">Forgot password? Log in with WhatsApp instead</label></p>
        </form>
      </div>
    </div>

    <p class="nxp__foot">No family account yet? If your child studies with NXtutors, message us on WhatsApp and our team will set it up.</p>
  </div>
</section>
<noscript><style>body.page .nxp__code.is-hidden{display:block}body.page .nxp__have-code{display:none}</style></noscript>
<script>
  (function () {
    var box = document.getElementById('nxp-code-box');
    var more = document.getElementById('nxp-have-code');
    function reveal() {
      if (!box) return;
      box.classList.remove('is-hidden');
      if (more) more.hidden = true;
      var input = document.getElementById('nxp-code');
      if (input) setTimeout(function () { input.focus(); }, 50);
    }
    var wa = document.getElementById('nxp-wa');
    if (wa) wa.addEventListener('click', reveal);
    if (more) more.addEventListener('click', reveal);
  })();
</script>
@include('include.footer')
