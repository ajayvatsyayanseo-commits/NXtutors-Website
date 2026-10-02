{{--
  Storyboard "How you get tuition work": six numbered panels, sketch-style
  art from partials/jobs-art/step-{n} (when the illustrator's file exists),
  captions as real text. Sideways scroll-snap on phones, 3 × 2 on desktop.
  The page's HowTo schema mirrors these panels and is emitted only when this
  partial renders. Expects: $panels (JobsPage::story()), $storyTitle (optional).
--}}
<section class="nx-sec nxj-story" id="how-it-works" aria-labelledby="storyTitle">
  <div class="nx-sec__head"><h2 class="nx-sec__title" id="storyTitle">{{ $storyTitle ?? 'How you get tuition work on NXTutors' }}</h2></div>
  <p class="nx-sec__sub">Six steps from applying to your first class. <span class="nxj-story__hint">Swipe to see each step.</span></p>
  <div class="nxj-story__scroller" tabindex="0" role="region" aria-label="Six steps, scrolls sideways on small screens">
    <ol class="nxj-story__list">
      @foreach($panels as $p)
        <li class="nxj-panel" id="step-{{ $p['n'] }}">
          <div class="nxj-panel__art">
            @if(view()->exists('partials.jobs-art.step-' . $p['n']))
              @includeIf('partials.jobs-art.step-' . $p['n'])
            @else
              <svg class="nxj-art-fallback" viewBox="0 0 320 240" width="320" height="240" aria-hidden="true"><rect x="40" y="50" width="240" height="140" rx="18" fill="currentColor" opacity=".07"/><text x="160" y="142" text-anchor="middle" font-size="64" font-weight="800" fill="currentColor" opacity=".22">{{ $p['n'] }}</text></svg>
            @endif
          </div>
          <span class="nxj-panel__n" aria-hidden="true">{{ $p['n'] }}</span>
          <h3 class="nxj-panel__title">{{ $p['title'] }}</h3>
          <p class="nxj-panel__text">{{ \App\Support\JobsContent::rich($p['text']) }}</p>
        </li>
      @endforeach
    </ol>
  </div>
</section>
