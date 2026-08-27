@foreach($reviews as $r)
  @php
    $avatar = $r->parent_avatar ?? '';
    $pimg = ($avatar && str_starts_with($avatar,'http'))
      ? $avatar
      : ($avatar ? asset('storage/user/'.$avatar) : asset('frount/assets/images/parent1.jpg'));

    $rating = number_format((float)($r->rating ?? 0), 1);
    $stars  = max(0, min(5, (int) round((float)($r->rating ?? 0))));
    $name = $r->parent_name ?: 'Parent';
    $text = trim((string)($r->review ?? ''));
    if ($text === '') $text = 'Great experience with the tutor.';

    // Initials stand in for a photo — a real face we don't have reads worse
    // than a clean monogram.
    $initials = collect(preg_split('/\s+/', trim($name)))
      ->filter()->take(2)
      ->map(fn ($w) => mb_strtoupper(mb_substr($w, 0, 1)))
      ->implode('');
    if ($initials === '') $initials = 'P';

    $caption = trim('Parent' . ($r->teacher_name ? ' · tutored by ' . $r->teacher_name : ''));
  @endphp

  <article class="card card--review review-slide">
    <div class="review-stars" role="img" aria-label="{{ $rating }} out of 5">
      @for($s = 1; $s <= 5; $s++)
        <span class="review-star{{ $s <= $stars ? '' : ' is-empty' }}" aria-hidden="true">★</span>
      @endfor
    </div>

    <blockquote class="review-quote">{{ \Illuminate\Support\Str::limit($text, 190) }}</blockquote>

    <footer class="review-by">
      <span class="review-avatar" aria-hidden="true">{{ $initials }}</span>
      <span class="review-who">
        <span class="review-name">{{ $name }}</span>
        <span class="review-role">{{ $caption }}</span>
      </span>
    </footer>
  </article>
@endforeach
