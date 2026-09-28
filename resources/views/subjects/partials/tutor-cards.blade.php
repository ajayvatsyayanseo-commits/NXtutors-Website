{{--
  Tutor search cards (App\NxtAi TutorCardMapper arrays) rendered in the site's
  one tutor card component, so a tutor looks the same here as on the home page:
  Compare on real tutors, "Sample profile" on model ones, and how far the
  search had to go ("In Sector 56", "In Haryana") when it widened.
--}}
@php
  $searchService = app(\App\NxtAi\Services\TutorSearchService::class);
@endphp
@foreach($cards as $c)
  @php
    $t = (object) ['name' => $c['name'] ?? 'Tutor'];
    $chips = array_slice(array_values(array_unique(array_filter(array_merge(
      (array) ($c['boards'] ?? []),
      array_slice((array) ($c['subjects'] ?? []), 0, 2),
      array_slice((array) ($c['classes'] ?? []), 0, 1)
    ), fn ($x) => is_string($x) && $x !== '' && ! str_starts_with(ltrim($x), '{')))), 0, 3);
    $img = $c['image_url'] ?: asset('frount/assets/images/avatar-fallback.webp');
    $profile = $c['profile_url'] ?? url('/tutors');
    // The compare endpoints take the tutor's user id; the public ref is only
    // that id encoded (it is already in every profile URL).
    $uid = ! empty($c['ref']) ? $searchService->decodeRef((string) $c['ref']) : null;
    // Opens WhatsApp with a Ref, so Lead Intake knows exactly which tutor (App\Support\Wa).
    $waLink = \App\Support\Wa::tutor($uid, 'card', $aiPage ?? []);
    // Opens WhatsApp with a Ref, so Lead Intake knows exactly which tutor (App\Support\Wa).
    $waLink = \App\Support\Wa::tutor($uid, 'card', $aiPage ?? []);
  @endphp
  @include('partials.tutor-card', [
    't' => $t,
    'img' => $img,
    'chips' => $chips,
    'rating' => number_format((float) ($c['rating'] ?? 0), 1),
    'reviews' => (int) ($c['review_count'] ?? 0),
    'address' => (string) ($c['area'] ?? ''),
    'city' => (string) ($c['city'] ?? ''),
    'waLink' => $waLink,
    'profileUrl' => $profile,
    'sample' => ! empty($c['is_sample']),
    'placeLabel' => $c['place_label'] ?? null,
    'compare' => $uid ? [
      'id' => $uid,
      'name' => e($c['name'] ?? ''),
      'img' => $img,
      'rating' => number_format((float) ($c['rating'] ?? 0), 1),
      'reviews' => (int) ($c['review_count'] ?? 0),
      'exp' => e(isset($c['experience_years']) ? $c['experience_years'] . ' years' : ''),
      'edu' => e($c['education'] ?? ''),
      'budget' => e($c['fee_label'] ?? ''),
      'chip' => e(implode(' + ', array_slice($chips, 0, 2))),
      'city' => e($c['city'] ?? ''),
      'pincode' => '',
      'wa' => e($waLink),
      'profile' => $profile,
    ] : null,
  ])
@endforeach
