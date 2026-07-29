@php use Illuminate\Support\Str; @endphp
@foreach($teachers as $t)
  @php
    $avatar = $t->avatar ?? '';
    $img = ($avatar && str_starts_with($avatar,'http'))
        ? $avatar
        : ($avatar ? asset('storage/user/'.$avatar)
                   : asset('frount/assets/images/tutor1.jpg'));

    // chip/subject
    $chip = 'Verified Tutor';
    if (!empty($t->courses) && $t->courses->count()) {
      $c = $t->courses->first();
      $parts = [];
      if ($c->board?->cat_title) $parts[] = $c->board->cat_title;
      if ($c->category?->cat_title) $parts[] = $c->category->cat_title;
      if ($parts) $chip = implode(' • ', array_slice($parts,0,2));
    }

    $ratingss  = number_format((float)($t->rating_avg ?? 0), 1);
    $reviewsss = (int)($t->reviews_count ?? 0);

    $rating  = number_format((float)($t->rating_avg ?? 0), 1);
    $reviews = (int)($t->reviews_count ?? 0);

    $waText = "Hi, I want to connect with tutor {$t->name} (UserID: {$t->user_id}).";
  $waNumber = preg_replace('/[^0-9]/', '', $setting->phone);

$waLink = "https://wa.me/" . $waNumber . "?text=" . urlencode($waText);

 $encodedId = rtrim(strtr(base64_encode($t->user_id . '-nxt'), '+/', '-_'), '=');

$profileUrl = route('tutor.newshow', [
    'city' => Str::slug($t->city ?: 'city'),
    'user_id' => $encodedId,
    'name' => Str::slug($t->name ?: 'tutor'),
]);


   // $profileUrl = !empty($t->slug) ? route('tutor.show', $t->slug) : url('/tutor/'.$t->user_id);
  @endphp

  <div class="tutor-card">
    <div class="tutor-top">
      <div class="tutor-avatar">
        <img src="{{ $img }}" alt="{{ $t->name }}"
             onerror="this.src='{{ asset('frount/assets/images/tutor1.jpg') }}'">
        <span class="badge-verified">✔</span>
      </div>

      <div style="flex:1;">
        <h3 class="tutor-name">{{ $t->name }}</h3>
        <div class="tutor-rating">⭐ {{ $rating }} <span style="opacity:.7;">({{ $reviews }} reviews)</span></div>
        <span class="tutor-chip">{{ $chip }}</span>
      </div>
    </div>

    <div class="tutor-location">📍 {{ \Illuminate\Support\Str::limit($t->address ?? '', 70) }}</div>

    <div class="tutor-actions">
      <a class="nxbtn btn-accent" style="flex:1;text-align:center;" href="{{ $waLink }}" target="_blank" rel="nofollow noopener">
        WhatsApp
      </a>
      <a class="btn-outline" href="{{ $profileUrl }}">
        View Profile
      </a>
    </div>
  </div>
@endforeach
