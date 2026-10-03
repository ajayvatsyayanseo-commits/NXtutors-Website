{{-- Horizontal bar list: $title, $data (label => count). Plain CSS, no chart library. --}}
@php($max = max(1, ...array_values($data ?: [0])))
<div class="enq-chart">
  <div class="fw-semibold small mb-2">{{ $title }}</div>
  @forelse($data as $label => $n)
    <div class="enq-bar" title="{{ $label }}: {{ $n }}">
      <span class="enq-bar__label text-truncate">{{ $label }}</span>
      <span class="enq-bar__track"><span class="enq-bar__fill" style="width: {{ round($n * 100 / $max) }}%"></span></span>
      <span class="enq-bar__n">{{ $n }}</span>
    </div>
  @empty
    <div class="text-muted small">No data for this range.</div>
  @endforelse
</div>
