{{-- Hero search results from the ranked tutor search (HomeController::teachers). --}}
@if(!empty($counts))
  @php
    $cm = $counts['mode'];
    $fewHome = $cm !== 'online' && $counts['home'] < 3 && $counts['online'] > 0;
  @endphp
  <div class="nx-modebar" style="grid-column:1/-1">
    <button type="button" class="nx-modebar__opt @if($cm === 'home') is-on @endif" data-mode-set="home">
      Home · {{ $counts['home'] }} {{ $counts['home'] === 1 ? 'tutor' : 'tutors' }} near {{ $counts['area'] }}
    </button>
    <button type="button" class="nx-modebar__opt @if($cm === 'online') is-on @endif" data-mode-set="online">
      Online · {{ $counts['online'] }} {{ $counts['online'] === 1 ? 'tutor' : 'tutors' }}
    </button>
    @if($fewHome)
      <p class="nx-modebar__note">
        Only {{ $counts['home'] }} home {{ $counts['home'] === 1 ? 'tutor' : 'tutors' }} near {{ $counts['area'] }} so far.
        {{ $counts['online'] }} online {{ $counts['online'] === 1 ? 'tutor teaches' : 'tutors teach' }} this —
        <button type="button" class="nx-linkbtn" data-mode-set="online">show online tutors</button>.
      </p>
    @endif
  </div>
@endif
@if(!empty($relaxed))
  <p class="nx-search-note" style="grid-column:1/-1;margin:0 0 8px;color:var(--nxt-text-dim)">
    No {{ $relaxed }} tutor matches exactly yet — here are verified tutors near you. Tell us more in a free demo request and we will find one.
  </p>
@endif
@include('subjects.partials.tutor-cards', ['cards' => $cards])
