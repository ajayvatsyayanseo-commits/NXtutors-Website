{{--
  Hero search results from the ranked tutor search (HomeController::teachers).
  The bar counts verified tutors only; sample profiles follow them, labelled.
--}}
@if(!empty($counts))
  @php
    $cm = $counts['mode'];
    $plural = fn ($n) => $n === 1 ? 'verified tutor' : 'verified tutors';
  @endphp
  <div class="nx-modebar" style="grid-column:1/-1">
    <button type="button" class="nx-modebar__opt @if($cm === 'home') is-on @endif" data-mode-set="home">
      Home · {{ $counts['home'] }} {{ $plural($counts['home']) }} in {{ $counts['area'] }}
    </button>
    <button type="button" class="nx-modebar__opt @if($cm === 'online') is-on @endif" data-mode-set="online">
      Online · {{ $counts['online'] }} {{ $plural($counts['online']) }}
    </button>
    <p class="nx-modebar__note">
      @if(($counts['widened'] ?? null) === 'state')
        Few verified tutors in {{ $counts['area'] }} yet, so we have included others in the state.
      @elseif(($counts['widened'] ?? null) === 'country')
        Few verified tutors near you yet, so we have included online tutors from across India.
      @endif
      {{ config('tutors.match_promise') }} —
      <button type="button" class="nx-linkbtn" data-modal-target="demoModal">get matched</button>.
    </p>
  </div>
@endif
@if(!empty($relaxed))
  <p class="nx-search-note" style="grid-column:1/-1;margin:0 0 8px;color:var(--nxt-text-dim)">
    No {{ $relaxed }} tutor matches exactly yet. {{ config('tutors.match_promise') }} —
    <button type="button" class="nx-linkbtn" data-modal-target="demoModal">tell us what you need</button>.
  </p>
@endif
@include('subjects.partials.tutor-cards', ['cards' => $cards])
