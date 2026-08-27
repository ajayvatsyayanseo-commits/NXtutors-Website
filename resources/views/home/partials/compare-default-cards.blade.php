@php use Illuminate\Support\Str; @endphp
@foreach($teachers as $t)
  @php
    $avatar = $t->avatar ?? '';
    $img = ($avatar && str_starts_with($avatar,'http'))
      ? $avatar
      : ($avatar ? asset('storage/user/'.$avatar) : asset('frount/assets/images/avatar-fallback.webp'));

    $chips = [];
    if (!empty($t->courses) && $t->courses->count()) {
      $c = $t->courses->first();
      if ($c->board?->cat_title)         $chips[] = $c->board->cat_title;
      if ($c->classCategory?->cat_title) $chips[] = $c->classCategory->cat_title;
      if ($c->category?->cat_title)      $chips[] = $c->category->cat_title;
    }
    if (!empty($t->experience)) $chips[] = $t->experience;
    if (!empty($t->budget))     $chips[] = '₹ '.$t->budget;
    $chips = array_slice(array_values(array_unique(array_filter($chips))), 0, 3);

    $chip = $chips ? implode(' + ', array_slice($chips, 0, 2)) : 'Verified Tutor';

    $rating  = number_format((float)($t->rating_avg ?? 0), 1);
    $reviews = (int)($t->reviews_count ?? 0);

    $waNumber = preg_replace('/[^0-9]/', '', $setting->phone);
    $waText = rawurlencode("Hi, I want to talk to tutor: {$t->name}");
    $waLink = "https://wa.me/{$waNumber}?text={$waText}";
	$profileLink = route('tutor.newshow', [
    'city' => Str::slug((string) $t->city) ?: 'india',
    'user_id' => $t->user_id,
    'name' => Str::slug((string) $t->name) ?: 'tutor',
]);
  @endphp

  @include('partials.tutor-card', [
    't' => $t, 'img' => $img, 'chips' => $chips,
    'rating' => $rating, 'reviews' => $reviews,
    'address' => $t->address ?? '', 'city' => $t->city ?? '',
    'waLink' => $waLink, 'profileUrl' => $profileLink,
    'compare' => [
      'id'      => $t->user_id,
      'name'    => e($t->name),
      'img'     => $img,
      'rating'  => $rating,
      'reviews' => $reviews,
      'exp'     => e($t->experience ?? ''),
      'edu'     => e($t->education ?? ''),
      'budget'  => e($t->budget ?? ''),
      'chip'    => e($chip),
      'city'    => e($t->city ?? ''),
      'pincode' => e($t->pincode ?? ''),
      'wa'      => e($waLink),
      'profile' => e($profileLink),
    ],
  ])
@endforeach
