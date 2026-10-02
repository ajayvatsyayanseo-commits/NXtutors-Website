{{-- "Why tutors choose NXTutors": true differentiators only (JobsPage::WHY or hub.json "why"). Expects $why. --}}
<section class="nx-sec" aria-labelledby="whyTitle">
  <div class="nx-sec__head"><h2 class="nx-sec__title" id="whyTitle">Why tutors choose NXTutors</h2></div>
  <p class="nx-sec__sub">What is different from a directory listing or a tuition bureau.</p>
  <ul class="nxj-why">
    @foreach($why as $w)
      <li class="nxj-why__card">
        <svg class="nxj-why__icon" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12.5l4.2 4.2L19 7"/></svg>
        <div>@if($w['title'] !== '')<h3>{{ $w['title'] }}</h3>@endif<p>{{ \App\Support\JobsContent::rich($w['text']) }}</p></div>
      </li>
    @endforeach
  </ul>
</section>
