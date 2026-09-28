@php use Illuminate\Support\Str; @endphp
@foreach($teachers as $t)
  @php
    $avatar = $t->avatar ?? '';
    $img = ($avatar && str_starts_with($avatar,'http'))
        ? $avatar
        : ($avatar ? \App\Support\TutorPhoto::url($avatar)
                   : asset('frount/assets/images/avatar-fallback.webp'));

    // Subject / board labels — up to three, from the tutor's first course.
    $chips = [];
    if (!empty($t->courses) && $t->courses->count()) {
      $c = $t->courses->first();
      if ($c->board?->cat_title)         $chips[] = $c->board->cat_title;
      if ($c->classCategory?->cat_title) $chips[] = $c->classCategory->cat_title;
      if ($c->category?->cat_title)      $chips[] = $c->category->cat_title;
    }
    $chips = array_slice(array_values(array_unique(array_filter($chips))), 0, 3);

    $rating  = number_format((float)($t->rating_avg ?? 0), 1);
    $reviews = (int)($t->reviews_count ?? 0);

    // Opens WhatsApp with a Ref (App\Support\Wa): the exact tutor and this
    // page (its URL and place) reach Lead Intake and the desk.
    $waLink = \App\Support\Wa::tutor($t->user_id, 'card', isset($page) ? ['city' => $page->city ?? null, 'area' => $page->location ?? null] : []);

    $encodedId = rtrim(strtr(base64_encode($t->user_id . '-nxt'), '+/', '-_'), '=');
    $profileUrl = route('tutor.newshow', [
        'city' => Str::slug((string) $t->city) ?: 'india',
        'user_id' => $encodedId,
        'name' => Str::slug((string) $t->name) ?: 'tutor',
    ]);
  @endphp

  @include('partials.tutor-card', [
    't' => $t, 'img' => $img, 'chips' => $chips,
    'rating' => $rating, 'reviews' => $reviews,
    'address' => $t->address ?? '', 'city' => $t->city ?? '',
    'waLink' => $waLink, 'profileUrl' => $profileUrl, 'compare' => null,
  ])
@endforeach
