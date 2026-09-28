{{--
  Cover drawings for the home "Guides" topics: one hand-drawn scene per topic,
  in three layers (a soft back panel, the objects, a floor shadow) so each card
  has depth. Decorative (the card's heading names the topic), so hidden from
  screen readers. Colours: each topic keeps one calm tint of its own.

  Expects: $topic one of boards, entrance, choose, abroad, skills.
--}}
<svg class="nxgd-cover" viewBox="0 0 320 160" aria-hidden="true" focusable="false" preserveAspectRatio="xMidYMid slice">
  <g class="nxgd-cover__back">
    <circle cx="262" cy="30" r="58" fill="var(--gd-a)" opacity=".22"/>
    <circle cx="40" cy="150" r="46" fill="var(--gd-b)" opacity=".16"/>
    <path d="M0 128 Q80 108 160 124 T320 116 V160 H0 Z" fill="var(--gd-a)" opacity=".12"/>
  </g>
  <ellipse class="nxgd-cover__shadow" cx="160" cy="142" rx="96" ry="8" fill="#000" opacity=".28"/>
  <g class="nxgd-cover__front" stroke="#EEF2F9" stroke-width="2.2" stroke-linejoin="round" stroke-linecap="round">
  @switch($topic)
    @case('boards')
      {{-- a stack of board books, one open --}}
      <rect x="92" y="112" width="136" height="22" rx="4" fill="#0E7490"/>
      <rect x="100" y="92" width="122" height="20" rx="4" fill="#BE185D"/>
      <rect x="88" y="72" width="130" height="20" rx="4" fill="#B45309"/>
      <path d="M100 72 Q130 40 162 58 Q194 40 226 70 L226 72 Q194 54 162 70 Q130 54 100 72 Z" fill="#F8F5EC"/>
      <path d="M162 58 V70" />
      <g stroke="none" font-family="Manrope,system-ui,sans-serif" font-weight="800" font-size="11" fill="#fff">
        <text x="108" y="127">CBSE</text><text x="150" y="107">ICSE</text><text x="104" y="87">IB · IGCSE</text>
      </g>
      <path d="M244 44 l4 9 9 4 -9 4 -4 9 -4-9 -9-4 9-4z" fill="#FBBF24" stroke="none"/>
      @break
    @case('entrance')
      {{-- an atom for JEE, a stethoscope for NEET, a target --}}
      <g fill="none" stroke="#FBBF24" stroke-width="3">
        <ellipse cx="120" cy="82" rx="46" ry="16"/>
        <ellipse cx="120" cy="82" rx="46" ry="16" transform="rotate(60 120 82)"/>
        <ellipse cx="120" cy="82" rx="46" ry="16" transform="rotate(-60 120 82)"/>
      </g>
      <circle cx="120" cy="82" r="8" fill="#F97316"/>
      <path d="M196 50 Q196 96 222 96 Q248 96 248 50" fill="none" stroke="#F472B6" stroke-width="4"/>
      <path d="M222 96 V116 Q222 132 206 132" fill="none" stroke="#F472B6" stroke-width="4"/>
      <circle cx="202" cy="132" r="9" fill="#BE185D"/>
      <circle cx="196" cy="48" r="4" fill="#EEF2F9"/><circle cx="248" cy="48" r="4" fill="#EEF2F9"/>
      @break
    @case('choose')
      {{-- a parent and a tutor with a checklist between them --}}
      <circle cx="104" cy="66" r="18" fill="#F4C7A1"/>
      <path d="M86 58 Q92 42 110 46 Q122 50 122 62 Q110 54 98 58 Z" fill="#3F2A1E"/>
      <path d="M72 134 Q74 94 104 90 Q134 94 136 134 Z" fill="#15803D"/>
      <circle cx="216" cy="64" r="18" fill="#E8B48A"/>
      <path d="M198 62 Q198 42 216 42 Q234 42 234 62 Q226 50 216 52 Q206 50 198 62 Z" fill="#1E2233"/>
      <path d="M184 134 Q186 94 216 90 Q246 94 248 134 Z" fill="#B45309"/>
      <rect x="142" y="70" width="38" height="52" rx="5" fill="#F8F5EC"/>
      <g stroke="#16A34A" stroke-width="3" fill="none"><path d="M149 84 l4 4 7-8"/><path d="M149 100 l4 4 7-8"/></g>
      <path d="M166 86 H174 M166 102 H174" stroke="#94A3B8"/>
      @break
    @case('abroad')
      {{-- a globe, a paper plane on a dashed route, a passport --}}
      <circle cx="132" cy="80" r="42" fill="#0369A1"/>
      <path d="M100 66 Q116 58 126 70 Q134 82 150 74 Q164 66 170 80 M104 98 Q118 92 130 104 Q142 114 160 104" fill="none" stroke="#7DD3FC" stroke-width="3"/>
      <path d="M90 80 H174 M132 38 Q112 80 132 122 Q152 80 132 38" fill="none" stroke="#BAE6FD" opacity=".7"/>
      <path d="M176 60 Q214 30 250 44" fill="none" stroke="#EEF2F9" stroke-dasharray="4 6"/>
      <path d="M248 34 L276 46 L248 56 L254 46 Z" fill="#F8FAFC"/>
      <rect x="206" y="84" width="40" height="52" rx="5" fill="#9F1239"/>
      <circle cx="226" cy="104" r="9" fill="none" stroke="#FDE68A" stroke-width="2.4"/>
      @break
    @default
      {{-- study skills: a notebook with a glowing idea above it --}}
      <path d="M96 96 L160 86 L224 96 L224 134 L160 124 L96 134 Z" fill="#F8F5EC"/>
      <path d="M160 86 V124"/>
      <path d="M108 106 H146 M108 116 H140 M174 106 H212 M174 116 H204" stroke="#94A3B8"/>
      <circle cx="160" cy="46" r="20" fill="#FBBF24"/>
      <path d="M152 66 H168 M154 72 H166" stroke="#FBBF24" stroke-width="3"/>
      <g stroke="#FDE68A" stroke-width="2.4"><path d="M160 14 V20 M132 26 l5 4 M188 26 l-5 4 M126 48 h6 M188 48 h6"/></g>
      <path d="M236 60 l3 7 7 3 -7 3 -3 7 -3-7 -7-3 7-3z" fill="#F472B6" stroke="none"/>
  @endswitch
  </g>
</svg>
