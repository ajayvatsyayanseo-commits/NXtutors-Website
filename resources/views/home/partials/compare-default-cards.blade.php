@php use Illuminate\Support\Str; @endphp
@foreach($teachers as $t)
  @php
    $avatar = $t->avatar ?? '';
    $img = ($avatar && str_starts_with($avatar,'http'))
      ? $avatar
      : ($avatar ? asset('public/storage/user/'.$avatar) : asset('public/frount/assets/images/tutor1.jpg'));

    $chip = 'Verified Tutor';
    if (!empty($t->courses) && $t->courses->count()) {
      $c = $t->courses->first();
      $parts = [];
      if ($c->board?->cat_title) $parts[] = $c->board->cat_title;
      if ($c->category?->cat_title) $parts[] = $c->category->cat_title;
      if (count($parts)) $chip = implode(' + ', array_slice($parts, 0, 2));
    }

    $rating  = number_format((float)($t->rating_avg ?? 0), 1);
    $reviews = (int)($t->reviews_count ?? 0);

    $waNumber = preg_replace('/[^0-9]/', '', $setting->phone);
    $waText = rawurlencode("Hi, I want to talk to tutor: {$t->name}");
    $waLink = "https://wa.me/{$waNumber}?text={$waText}";
	$profileLink = route('tutor.newshow', [
    'city' => Str::slug($t->city),
    'user_id' => $t->user_id,
    'name' => Str::slug($t->name),
]);
  @endphp

  <article class="card card--compare">
    <div class="card-header">
      <img src="{{ $img }}" alt="Tutor" class="avatar"
           onerror="this.src='{{ asset('public/frount/assets/images/tutor1.jpg') }}'" loading="lazy" decoding="async" />
      <div>
        <div class="card-title">{{ $t->name }}</div>
        <div class="card-subtitle">{{ $chip }}</div>
      </div>
    </div>

    <div class="card-meta"><span class="rating">★ {{ $rating }}</span> ({{ $reviews }} reviews)</div>

    <div class="chip-row">
      @if(!empty($t->experience)) <span class="chip">{{ $t->experience }}</span> @endif
      @if(!empty($t->education)) <span class="chip">{{ $t->education }}</span> @endif
      @if(!empty($t->budget)) <span class="chip">₹ {{ $t->budget }}</span> @endif
      @if(!empty($t->city)) <span class="chip">{{ $t->city }}</span> @endif
      @if(!empty($t->pincode)) <span class="chip">{{ $t->pincode }}</span> @endif
    </div>

    <div class="card-actions">
      <a href="{{ $profileLink }}" class="btn btn-ghost btn-small">View profile</a>
      <a href="{{ $waLink }}" class="btn btn-accent btn-small" target="_blank" rel="nofollow noopener">
        Chat on WhatsApp
      </a>
    </div>
  </article>
@endforeach