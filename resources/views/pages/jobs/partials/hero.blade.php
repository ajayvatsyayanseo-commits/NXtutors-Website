{{--
  Glass hero (nx-jobs.css .nxj-hero): a translucent card over a soft gradient
  mesh, the illustration tilted in 3D beside it (the script in applybar.blade.php moves it).
  Expects: $h1, $lede (string or HtmlString), $kicker (optional), $jobs.
  Wording rule: "Now taking on … tutors"; no employment, vacancy or no-cost wording (spec §3).
--}}
@php
  $heroPlace = $jobs['place'] ?? null;
  $womenHref = \App\Support\JobsPage::womenLink();
@endphp
<section class="nxj-hero" aria-labelledby="jobsH1">
  <div class="nxj-hero__mesh" aria-hidden="true"></div>
  <div class="nxj-hero__card">
    <p class="nxj-hero__promise">{{ \App\Support\JobsPage::PROMISE }}@if(!empty($kicker)) <span class="nxj-hero__where">· {{ $kicker }}</span>@endif</p>
    <h1 class="nxj-hero__title" id="jobsH1">{{ $h1 }}</h1>
    <p class="nxj-hero__lede">{{ $lede }}</p>
    <ul class="nxj-modes" aria-label="Ways to teach">
      <li>Home</li>
      <li>Online</li>
      <li>Hybrid</li>
      <li class="nxj-modes__pink"><a href="{{ $womenHref }}">Women tutors welcome</a></li>
    </ul>
    <div class="nxj-ctas">
      <a class="nxj-btn nxj-btn--act" href="{{ url('/become-a-tutor') }}" data-modal-target="tutorModal">Apply as a tutor</a>
      @if(!empty($jobs['story']))<a class="nxj-btn nxj-btn--ghost" href="#how-it-works">How it works</a>@endif
      <a class="nxj-btn nxj-btn--wa" href="{{ \App\Support\JobsPage::applyWa($heroPlace) }}" target="_blank" rel="nofollow noopener">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12.05 2a9.9 9.9 0 0 0-8.5 14.9L2 22l5.3-1.4A9.9 9.9 0 1 0 12.05 2m5.8 14.1c-.25.7-1.43 1.33-2 1.4-.5.08-1.16.11-1.87-.12-.43-.13-.98-.32-1.69-.62-2.98-1.29-4.92-4.29-5.07-4.49-.15-.2-1.21-1.61-1.21-3.07s.77-2.18 1.04-2.48c.27-.3.6-.37.8-.37h.57c.18 0 .43-.07.67.51.25.6.84 2.05.91 2.2.08.15.12.32.03.52-.1.2-.15.32-.3.5-.15.17-.31.39-.45.52-.15.15-.3.31-.13.6.17.3.77 1.27 1.65 2.05 1.13 1 2.09 1.32 2.38 1.47.3.15.47.12.64-.07.18-.2.74-.86.94-1.16.2-.3.39-.25.66-.15.27.1 1.72.81 2.01.96.3.15.5.22.57.35.07.12.07.7-.18 1.4"/></svg>
        WhatsApp
      </a>
    </div>
    <p class="nxj-hero__meta">Already teaching with us? <a href="{{ url('/login') }}">Log in</a> to update your areas and hours.</p>
  </div>
  <div class="nxj-hero__stage">
    <div class="nxj-hero__art" data-nxj-tilt>
      <span class="nxj-hero__plate" aria-hidden="true"></span>
      @if(view()->exists('partials.jobs-art.hero'))
        @includeIf('partials.jobs-art.hero')
      @else
        <svg class="nxj-art-fallback" viewBox="0 0 400 300" width="400" height="300" aria-hidden="true">
          <rect x="70" y="60" width="260" height="180" rx="22" fill="currentColor" opacity=".08"/>
          <rect x="100" y="92" width="150" height="12" rx="6" fill="currentColor" opacity=".25"/>
          <rect x="100" y="118" width="200" height="10" rx="5" fill="currentColor" opacity=".16"/>
          <rect x="100" y="138" width="170" height="10" rx="5" fill="currentColor" opacity=".16"/>
          <circle cx="300" cy="200" r="26" fill="none" stroke="currentColor" stroke-width="3" opacity=".35"/>
          <path d="M288 200l9 9 16-18" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" opacity=".55"/>
        </svg>
      @endif
    </div>
  </div>
</section>
