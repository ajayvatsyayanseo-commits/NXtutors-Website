{{-- Hero search results from the ranked tutor search (HomeController::teachers). --}}
@if(!empty($relaxed))
  <p class="nx-search-note" style="grid-column:1/-1;margin:0 0 8px;color:var(--nxt-text-dim)">
    No {{ $relaxed }} tutor matches exactly yet — here are verified tutors near you. Tell us more in a free demo request and we will find one.
  </p>
@endif
@include('subjects.partials.tutor-cards', ['cards' => $cards])
