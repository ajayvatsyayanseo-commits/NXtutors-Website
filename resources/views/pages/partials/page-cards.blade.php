 @foreach($pages as $p)
        <a class="gen-card" href="{{ route('pages.show', $p->slug) }}">
          <div class="gen-card__top">
            <h3 class="gen-card__title">{{ $p->title }}</h3>
            <div class="gen-card__meta">{{ $p->city }} • {{ $p->location }}</div>
          </div>

          <div class="gen-card__bottom">
            <span class="gen-card__date">{{ $p->created_at?->format('d M Y') }}</span>
            <span class="gen-card__cta">
              View Page <span class="gen-card__arrow">→</span>
            </span>
          </div>
        </a>
      @endforeach