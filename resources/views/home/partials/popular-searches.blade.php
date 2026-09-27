{{-- One tap runs the hero search (handler in home.blade.php: [data-hero-search]). --}}
@php $nxPopular = \App\Support\LearningAreas::popular(); @endphp
@if(count($nxPopular))
  <ul class="nxh__popular" aria-label="Popular searches">
    <li class="nxh__popular-label">Popular:</li>
    @foreach($nxPopular as $pp)
      <li><button type="button" data-hero-search="{{ $pp['search'] }}">{{ $pp['label'] }}</button></li>
    @endforeach
  </ul>
@endif
