@php use Illuminate\Support\Str; @endphp
@foreach($teachers as $t)
  @php
    $avatar = $t->avatar ?? '';
    $img = ($avatar && str_starts_with($avatar,'http'))
        ? $avatar
        : ($avatar ? asset('storage/user/'.$avatar)
                   : asset('frount/assets/images/tutor1.jpg'));

    // Subject / board labels — up to three, from the tutor's first course.
    $chips = [];
    if (!empty($t->courses) && $t->courses->count()) {
      $c = $t->courses->first();
      if ($c->board?->cat_title)         $chips[] = $c->board->cat_title;
      if ($c->classCategory?->cat_title) $chips[] = $c->classCategory->cat_title;
      if ($c->category?->cat_title)      $chips[] = $c->category->cat_title;
    }
    $chips = array_slice(array_values(array_unique(array_filter($chips))), 0, 3);

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

  @include('partials.tutor-card', [
    't' => $t, 'img' => $img, 'chips' => $chips,
    'rating' => $rating, 'reviews' => $reviews,
    'address' => $t->address ?? '', 'city' => $t->city ?? '',
    'waLink' => $waLink, 'profileUrl' => $profileUrl, 'compare' => null,
  ])
@endforeach
