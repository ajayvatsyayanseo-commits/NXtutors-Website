{{--
  /parent: "Your family" (App\Http\Controllers\Parent\ParentHomeController::home).
  Phase 1 shows who is linked; classes, attendance and progress come in Phase 2.
  No marigold here: nothing on this screen is the one thing to do yet.
--}}
@php $nxtParentCss = true; @endphp
@include('include.header')
<section class="nxp" id="nxt-content">
  <div class="nxp__wrap nxp__wrap--wide">
    <header class="nxp__head nxp__head--left">
      <p class="nxp__eyebrow">Your family</p>
      <h1 class="nxp__title">Hello, {{ $parent->firstName() }}</h1>
      <p class="nxp__sub">
        @if($children->count() === 1)
          Here is the child linked to your account.
        @elseif($children->count() > 1)
          Here are the {{ $children->count() }} children linked to your account.
        @else
          Welcome to your family account.
        @endif
      </p>
    </header>

    @if(session('status'))
      <p class="nxp__alert nxp__alert--ok" role="status">{{ session('status') }}</p>
    @endif

    @if($children->isEmpty())
      <p class="nxp__empty">No children are linked yet. Our team links them for you: message us on WhatsApp if someone is missing, and we will add them.</p>
    @else
      <div class="nxp__kids">
        @foreach($children as $child)
          <article class="nxp__kid">
            <span class="nxp__avatar" aria-hidden="true">{{ mb_strtoupper(mb_substr($child->child_name, 0, 1)) }}</span>
            <div>
              <h2>{{ $child->child_name }}</h2>
              @if($child->classLine() !== '')<p>{{ $child->classLine() }}</p>@endif
            </div>
            @if($child->is_primary && $children->count() > 1)<span class="nxp__tag">Main contact</span>@endif
          </article>
        @endforeach
      </div>
    @endif

    <div class="nxp__soon">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true" style="flex:0 0 auto;margin-top:2px"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
      <span><b>Coming soon.</b> Dashboard with classes, attendance and progress is coming soon.</span>
    </div>

    <div class="nxp__bar">
      <a class="nxp__link" href="{{ route('parent.account') }}">Account settings</a>
      <form method="POST" action="{{ route('parent.logout') }}">
        @csrf
        <button type="submit" class="nxp__btn nxp__btn--ghost nxp__btn--inline">Log out</button>
      </form>
    </div>
  </div>
</section>
@include('include.footer')
