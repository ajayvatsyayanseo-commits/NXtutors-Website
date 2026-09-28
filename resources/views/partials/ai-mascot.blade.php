{{--
  "Nix", the NXT AI mascot: a small anime-style study robot in a graduation
  cap. It is the face of every AI feature (NXT AI chat, AI matching,
  TutorTwin), drawn in the AI colour (indigo to violet) so a parent learns
  "this is the AI" at a glance. Drawn inline: sharp at any size, no request.

  Expects (all optional):
    $size   width in px (default 120)
    $label  alt text; when given the drawing is announced as an image,
            otherwise it is decorative and hidden from screen readers
    $wave   true to raise one arm in a wave
--}}
@php
  $mid = 'nm'.substr(md5(uniqid('', true)), 0, 6);
  $mSize = (int) ($size ?? 120);
  $mLabel = $label ?? null;
@endphp
<svg class="nx-mascot" width="{{ $mSize }}" height="{{ (int) round($mSize * 1.1) }}" viewBox="0 0 200 220"
  @if($mLabel) role="img" aria-label="{{ $mLabel }}" @else aria-hidden="true" @endif focusable="false">
  @if($mLabel)<title>{{ $mLabel }}</title>@endif
  <defs>
    <linearGradient id="{{ $mid }}b" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#818CF8"/><stop offset="1" stop-color="#7C3AED"/></linearGradient>
    <radialGradient id="{{ $mid }}g" cx=".5" cy=".5" r=".5"><stop offset="0" stop-color="#8B5CF6" stop-opacity=".55"/><stop offset="1" stop-color="#8B5CF6" stop-opacity="0"/></radialGradient>
    <radialGradient id="{{ $mid }}e" cx=".4" cy=".35" r=".7"><stop offset="0" stop-color="#E0F2FE"/><stop offset=".45" stop-color="#7DD3FC"/><stop offset="1" stop-color="#2563EB"/></radialGradient>
  </defs>
  <circle cx="100" cy="112" r="96" fill="url(#{{ $mid }}g)"/>
  {{-- antenna with a spark --}}
  <path d="M100 38 V20" stroke="#E0E7FF" stroke-width="4" stroke-linecap="round"/>
  <path d="M100 6 l4 9 9 4 -9 4 -4 9 -4 -9 -9 -4 9 -4 z" fill="#FBBF24"/>
  {{-- body and arms --}}
  <g stroke="#E0E7FF" stroke-width="3" stroke-linejoin="round" stroke-linecap="round">
    <rect x="66" y="146" width="68" height="56" rx="24" fill="url(#{{ $mid }}b)"/>
    @if($wave ?? false)
      <path d="M134 162 Q160 150 164 124" fill="none"/>
      <circle cx="165" cy="118" r="9" fill="url(#{{ $mid }}b)"/>
    @else
      <path d="M134 164 Q152 172 150 188" fill="none"/>
    @endif
    <path d="M66 164 Q48 172 50 188" fill="none"/>
    {{-- head --}}
    <rect x="34" y="42" width="132" height="110" rx="50" fill="url(#{{ $mid }}b)"/>
  </g>
  {{-- face screen --}}
  <rect x="50" y="64" width="100" height="70" rx="32" fill="#0B1026"/>
  {{-- big anime eyes with highlights --}}
  <ellipse cx="80" cy="98" rx="13" ry="16" fill="url(#{{ $mid }}e)"/>
  <ellipse cx="120" cy="98" rx="13" ry="16" fill="url(#{{ $mid }}e)"/>
  <circle cx="75" cy="91" r="4.5" fill="#fff"/><circle cx="115" cy="91" r="4.5" fill="#fff"/>
  <circle cx="84" cy="105" r="2" fill="#fff" opacity=".8"/><circle cx="124" cy="105" r="2" fill="#fff" opacity=".8"/>
  <ellipse cx="64" cy="118" rx="7" ry="4" fill="#F472B6" opacity=".55"/><ellipse cx="136" cy="118" rx="7" ry="4" fill="#F472B6" opacity=".55"/>
  <path d="M93 120 Q100 126 107 120" stroke="#E0E7FF" stroke-width="3" fill="none" stroke-linecap="round"/>
  {{-- graduation cap --}}
  <g stroke="#E0E7FF" stroke-width="2.5" stroke-linejoin="round">
    <path d="M52 40 L104 22 L156 40 L104 58 Z" fill="#1E1B4B"/>
    <path d="M76 48 V60 Q104 72 132 60 V48" fill="#1E1B4B"/>
  </g>
  <path d="M150 42 Q156 58 152 70" stroke="#FBBF24" stroke-width="3" fill="none" stroke-linecap="round"/>
  <circle cx="152" cy="73" r="4.5" fill="#FBBF24"/>
  {{-- chest badge --}}
  <rect x="84" y="164" width="32" height="20" rx="10" fill="#0B1026"/>
  <text x="100" y="178" text-anchor="middle" font-family="Manrope,system-ui,sans-serif" font-size="12" font-weight="800" fill="#A5B4FC">AI</text>
</svg>
