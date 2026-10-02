{{--
  Women tutors (the pink role, nx-roles.css): only the controls the product
  really has and the habits in /safeguarding-policy. No escorts, insurance or
  "safe" promises, and nothing here calls anyone verified.
  Expects: $women (JobsPage::women()), $onWomenPage (bool, optional).
--}}
@php $onWomenPage = $onWomenPage ?? false; $womenHref = \App\Support\JobsPage::womenLink(); @endphp
<section class="nx-sec nxj-women" id="women-tutors" aria-labelledby="womenTitle">
  <div class="nxj-women__text">
    <p class="nxj-women__kicker">Women tutors welcome</p>
    <h2 class="nx-sec__title" id="womenTitle">For women tutors: you set the terms</h2>
    <p>{{ \App\Support\JobsContent::rich($women['intro']) }}</p>
    <ul class="nxj-women__list">
      @foreach($women['points'] as $pt)<li>{{ \App\Support\JobsContent::rich($pt) }}</li>@endforeach
    </ul>
    <p class="nxj-women__more">Read the <a href="{{ url('/safeguarding-policy') }}">safeguarding policy</a> and <a href="{{ url('/how-we-verify-tutors') }}">how the ID check works</a>.</p>
    <div class="nxj-ctas">
      @if($onWomenPage || str_starts_with($womenHref, '#'))
        <a class="nxj-btn nxj-btn--pink" href="{{ url('/become-a-tutor') }}" data-modal-target="tutorModal">Apply as a woman tutor</a>
      @else
        <a class="nxj-btn nxj-btn--pink" href="{{ $womenHref }}">Apply as a woman tutor</a>
      @endif
    </div>
  </div>
  <div class="nxj-women__art">
    @if(view()->exists('partials.jobs-art.women'))
      @includeIf('partials.jobs-art.women')
    @else
      <svg class="nxj-art-fallback" viewBox="0 0 320 240" width="320" height="240" aria-hidden="true"><circle cx="160" cy="96" r="44" fill="none" stroke="currentColor" stroke-width="3" opacity=".4"/><path d="M84 214c10-42 42-64 76-64s66 22 76 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" opacity=".4"/></svg>
    @endif
  </div>
</section>
