{{--
  /parent/account (App\Http\Controllers\Parent\ParentHomeController).
  "Save details" is the screen's one marigold button; "Save password" is
  secondary, because most parents will never set one and use WhatsApp instead.
--}}
@php $nxtParentCss = true; @endphp
@include('include.header')
<section class="nxp" id="nxt-content">
  <div class="nxp__wrap">
    <header class="nxp__head nxp__head--left">
      <p class="nxp__eyebrow"><a class="nxp__link" href="{{ route('parent.home') }}">← Your family</a></p>
      <h1 class="nxp__title">Your account</h1>
    </header>

    @if(session('status'))
      <p class="nxp__alert nxp__alert--ok" role="status">{{ session('status') }}</p>
    @endif

    <div class="nxp__card">
      <h2>Your details</h2>
      <p class="nxp__lead">Your email is optional. Add it to log in with email and a password as well as WhatsApp.</p>
      <form method="POST" action="{{ route('parent.account.update') }}" novalidate>
        @csrf
        <div class="nxp__field">
          <label for="nxp-name">Name</label>
          <input class="nxp__input @error('name') nxp__is-invalid @enderror" id="nxp-name" name="name" type="text"
                 autocomplete="name" value="{{ old('name', $parent->name) }}" required>
          @error('name')<span class="nxp__err">{{ $message }}</span>@enderror
        </div>
        <div class="nxp__field">
          <label for="nxp-email">Email <span style="font-weight:500;color:var(--nxt-text-faint)">(optional)</span></label>
          <input class="nxp__input @error('email') nxp__is-invalid @enderror" id="nxp-email" name="email" type="email"
                 autocomplete="email" placeholder="you@example.com" value="{{ old('email', $parent->email) }}">
          @error('email')<span class="nxp__err">{{ $message }}</span>@enderror
        </div>
        <div class="nxp__field">
          <label for="nxp-phone">Mobile number</label>
          <input class="nxp__input" id="nxp-phone" type="text" value="+91 {{ $parent->prettyPhone() }}" readonly>
          <small>To change it, message us on WhatsApp from your new number.</small>
        </div>
        <button type="submit" class="nxp__btn nxp__btn--action">Save details</button>
      </form>
    </div>

    <div class="nxp__card">
      <h2>{{ $parent->password ? 'Change password' : 'Set a password' }}</h2>
      <p class="nxp__lead">Optional. You can always log in with a code on WhatsApp instead.</p>
      <form method="POST" action="{{ route('parent.account.password') }}" novalidate>
        @csrf
        <div class="nxp__field">
          <label for="nxp-password">New password</label>
          <input class="nxp__input @error('password') nxp__is-invalid @enderror" id="nxp-password" name="password"
                 type="password" autocomplete="new-password" minlength="8" required>
          @error('password')<span class="nxp__err">{{ $message }}</span>@else<small>At least 8 characters.</small>@enderror
        </div>
        <div class="nxp__field">
          <label for="nxp-password2">Type it again</label>
          <input class="nxp__input" id="nxp-password2" name="password_confirmation" type="password"
                 autocomplete="new-password" minlength="8" required>
        </div>
        <button type="submit" class="nxp__btn nxp__btn--ghost">Save password</button>
      </form>
    </div>

    <div class="nxp__bar">
      <a class="nxp__link" href="{{ route('parent.home') }}">Back to your family</a>
      <form method="POST" action="{{ route('parent.logout') }}">
        @csrf
        <button type="submit" class="nxp__btn nxp__btn--ghost nxp__btn--inline">Log out</button>
      </form>
    </div>
  </div>
</section>
@include('include.footer')
