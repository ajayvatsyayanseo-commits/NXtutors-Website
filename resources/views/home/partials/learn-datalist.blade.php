{{-- Suggestions for the hero search box, from config/learning_areas.php. --}}
<datalist id="nxLearnList">
  @foreach(\App\Support\LearningAreas::suggestions() as $sug)
    <option value="{{ $sug }}"></option>
  @endforeach
</datalist>
