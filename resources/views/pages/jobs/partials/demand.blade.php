{{-- Live demand (App\Support\AreaDemand): only when it returned rows (three or more real requests). Expects $requests, $label. --}}
@if(!empty($requests['rows']))
  <section class="nx-sec" aria-labelledby="reqTitle">
    <div class="nx-sec__head"><h2 class="nx-sec__title" id="reqTitle">Recent requests from families in {{ $label }}</h2></div>
    <div class="nxj-demand">
      <table>
        <caption>Anonymised: the month, class, board and subject only.</caption>
        <thead><tr><th scope="col">Month</th><th scope="col">What the family asked for</th></tr></thead>
        <tbody>
          @foreach($requests['rows'] as $r)<tr><td>{{ $r['month'] }}</td><td>{{ $r['what'] }}</td></tr>@endforeach
        </tbody>
      </table>
    </div>
  </section>
@endif
