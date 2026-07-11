@foreach($reviews as $r)
  @php
    $avatar = $r->parent_avatar ?? '';
    $pimg = ($avatar && str_starts_with($avatar,'http'))
      ? $avatar
      : ($avatar ? asset('public/storage/user/'.$avatar) : asset('public/frount/assets/images/parent1.jpg'));

    $rating = number_format((float)($r->rating ?? 0), 1);
    $name = $r->parent_name ? $r->parent_name.' — Parent' : 'Parent';
    $text = trim((string)($r->review ?? ''));
    if ($text === '') $text = 'Great experience with the tutor.';
  @endphp

  <article class="card card--review review-slide">
    <div class="card-header card-header--review">
      <img src="{{ $pimg }}"
           alt="Parent"
           class="avatar"
           loading="lazy"
           onerror="this.src='{{ asset('public/frount/assets/images/parent1.jpg') }}'"/>

      <div>
        <div class="card-title">{{ $name }}</div>
        <div class="card-text">“{{ \Illuminate\Support\Str::limit($text, 120) }}”</div>
        <div class="tutor-meta">
          Tutor: {{ $r->teacher_name ?? 'Tutor' }}
        </div>
      </div>
    </div>

    <div class="rating rating--big">★ {{ $rating }}</div>
  </article>
@endforeach