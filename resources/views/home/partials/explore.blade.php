{{--
  "Find a tutor for…": the five learning areas as tabs (config/learning_areas.php).
  Items with their own guide page are cards that link there; the rest are chips
  that run the hero search for that subject. Items nobody teaches are left out
  (App\Support\LearningAreas).
--}}
@php $nxAreas = \App\Support\LearningAreas::areas(); @endphp
@if(count($nxAreas))
<section class="section nx-explore" aria-labelledby="exploreTitle">
  <div class="section-head">
    <h2 class="section-title" id="exploreTitle">Find a tutor for any subject, exam or skill</h2>
  </div>

  <div class="nx-tabs">
    <div class="nx-tabs__bar" role="tablist">
      @foreach($nxAreas as $key => $area)
        <input class="nx-tabs__radio" type="radio" name="exploreArea" id="explore-{{ $key }}" @if($loop->first) checked @endif>
        <label class="nx-tabs__tab" for="explore-{{ $key }}" role="tab">{{ $area['label'] }}</label>
      @endforeach
    </div>
    <div class="nx-tabs__panels">
      @foreach($nxAreas as $key => $area)
        @php
          $withPage = array_values(array_filter($area['items'], fn ($i) => $i['url']));
          $noPage = array_values(array_filter($area['items'], fn ($i) => ! $i['url']));
        @endphp
        <div class="nx-tabs__panel" role="tabpanel">
          <h3 class="nx-tabs__panel-title">{{ $area['label'] }}</h3>
          @if(count($withPage))
            <div class="nx-explore__grid">
              @foreach($withPage as $it)
                <a class="nx-card" href="{{ $it['url'] }}">
                  <span class="nx-card__kicker">Tutors &amp; guide</span>
                  <span class="nx-card__title">{{ $it['label'] }}</span>
                  <span class="nx-card__meta">See tutors →</span>
                </a>
              @endforeach
            </div>
          @endif
          @if(count($noPage))
            <p class="nx-explore__more">{{ count($withPage) ? 'Also find a tutor for' : 'Find a tutor for' }}</p>
            <ul class="nx-chips">
              @foreach($noPage as $it)
                <li><button type="button" class="nx-chip" data-hero-search="{{ $it['search'] }}">{{ $it['label'] }}</button></li>
              @endforeach
            </ul>
          @endif
        </div>
      @endforeach
    </div>
  </div>
</section>
@endif
