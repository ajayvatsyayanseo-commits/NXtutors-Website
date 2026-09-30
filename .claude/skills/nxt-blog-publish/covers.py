"""Text-free covers for the Gurgaon cluster (same frame as covers.py)."""
import sys
from pathlib import Path
from playwright.sync_api import sync_playwright

here = Path(__file__).parent
out = Path(sys.argv[1])
S = 'stroke="#EEF2F9" stroke-width="2.4" stroke-linejoin="round" stroke-linecap="round"'

def svg(w, h, vb, body):
    return f'<svg width="{w}" height="{h}" viewBox="{vb}"><ellipse cx="170" cy="238" rx="150" ry="8" fill="#000" opacity=".3"/>{body}</svg>'

FEES = svg(520, 380, "0 0 340 250", f'''<g {S}>
<rect x="30" y="60" width="150" height="150" rx="12" fill="#1E3A5F"/><rect x="30" y="60" width="150" height="34" rx="12" fill="#B45309"/>
<g fill="#0B1424">{''.join(f'<rect x="{44+i%4*34}" y="{106+i//4*32}" width="24" height="22" rx="4"/>' for i in range(12))}</g>
<ellipse cx="260" cy="200" rx="56" ry="14" fill="#B45309"/><ellipse cx="260" cy="182" rx="56" ry="14" fill="#D97706"/>
<ellipse cx="260" cy="164" rx="56" ry="14" fill="#F59E0B"/><ellipse cx="260" cy="146" rx="56" ry="14" fill="#FBBF24"/></g>
<text x="260" y="153" text-anchor="middle" font-family="Manrope,sans-serif" font-size="20" font-weight="800" fill="#7C2D12">₹</text>
<path d="M112 136 l8 8 14 -16" stroke="#34D399" stroke-width="5" fill="none" stroke-linecap="round"/>''')

SAFETY = svg(520, 380, "0 0 340 250", f'''<g {S}>
<path d="M20 110 L80 60 L140 110 V210 H20 Z" fill="#1E3A5F"/><rect x="64" y="150" width="32" height="60" rx="3" fill="#B45309"/>
<circle cx="89" cy="182" r="3" fill="#FDE68A"/>
<path d="M240 40 L310 66 V124 Q310 180 240 212 Q170 180 170 124 V66 Z" fill="#14532D"/></g>
<path d="M208 126 l22 22 40 -46" stroke="#86EFAC" stroke-width="10" fill="none" stroke-linecap="round" stroke-linejoin="round"/>''')

JEE = svg(520, 380, "0 0 340 250", f'''<g {S} fill="none">
<ellipse cx="120" cy="125" rx="90" ry="34"/><ellipse cx="120" cy="125" rx="90" ry="34" transform="rotate(60 120 125)"/>
<ellipse cx="120" cy="125" rx="90" ry="34" transform="rotate(-60 120 125)"/></g>
<circle cx="120" cy="125" r="14" fill="#F59E0B"/>
<g {S}><rect x="220" y="60" width="100" height="150" rx="8" fill="#0B1424"/></g>
<path d="M232 190 Q260 170 270 130 T310 76" stroke="#A5B4FC" stroke-width="4" fill="none"/>
<g stroke="#334155" stroke-width="1.5">{''.join(f'<line x1="230" y1="{80+i*25}" x2="312" y2="{80+i*25}"/>' for i in range(5))}</g>''')

NEET = svg(520, 380, "0 0 340 250", f'''<g stroke-width="5" fill="none" stroke-linecap="round">
<path d="M70 30 C150 70 150 110 70 150 C-10 190 -10 210 70 230" stroke="#34D399" transform="translate(40,-10)"/>
<path d="M70 30 C-10 70 -10 110 70 150 C150 190 150 210 70 230" stroke="#60A5FA" transform="translate(40,-10)"/></g>
<g stroke="#EEF2F9" stroke-width="2.4">{''.join(f'<line x1="{85+ (0 if i%2 else 10)}" y1="{40+i*20}" x2="{135-(0 if i%2 else 10)}" y2="{40+i*20}"/>' for i in range(9))}</g>
<g {S}><path d="M230 60 V140 Q230 190 270 190 Q310 190 310 150" fill="none" stroke-width="6"/><circle cx="310" cy="140" r="16" fill="#1E3A5F"/>
<circle cx="230" cy="54" r="8" fill="#F59E0B"/></g>''')

IB = svg(520, 380, "0 0 340 250", f'''<g {S}>
<circle cx="130" cy="130" r="86" fill="#1E3A5F"/><path d="M44 130 H216 M130 44 Q80 130 130 216 M130 44 Q180 130 130 216" fill="none"/>
<ellipse cx="130" cy="130" rx="86" ry="36" fill="none"/>
<path d="M200 70 L270 44 L340 70 L270 96 Z" fill="#312E81"/><path d="M226 80 V112 Q270 132 314 112 V80" fill="#4F46E5"/>
<line x1="330" y1="74" x2="330" y2="120"/></g><circle cx="330" cy="124" r="6" fill="#F59E0B"/>''')

ISC = svg(520, 380, "0 0 340 250", f'''<g {S} fill="none">
<path d="M40 210 L140 40 L240 210 Z" fill="#1E3A5F"/><path d="M140 40 V210" stroke-dasharray="6 6"/>
<path d="M246 50 Q280 50 280 90 V170 Q280 210 246 210" stroke="#FBBF24" stroke-width="6"/>
<circle cx="140" cy="40" r="6" fill="#F59E0B"/></g>
<text x="288" y="142" font-family="Manrope,sans-serif" font-size="34" font-weight="800" fill="#A5B4FC">dx</text>''')

CBSE10 = svg(520, 380, "0 0 340 250", f'''<g {S}>
<rect x="40" y="36" width="260" height="184" rx="14" fill="#0B1424"/><rect x="40" y="36" width="260" height="36" rx="14" fill="#15803D"/></g>
{''.join(f'<rect x="{56+(i%6)*40}" y="{86+(i//6)*42}" width="30" height="30" rx="6" fill="{"#14532D" if i<9 else "#1E293B"}" stroke="#334155"/>' for i in range(18))}
{''.join(f'<path d="M{62+(i%6)*40} {101+(i//6)*42} l6 6 12 -13" stroke="#86EFAC" stroke-width="3.5" fill="none" stroke-linecap="round"/>' for i in range(9))}
<circle cx="296" cy="200" r="30" fill="#F59E0B" stroke="#EEF2F9" stroke-width="2.4"/><text x="296" y="210" text-anchor="middle" font-family="Manrope,sans-serif" font-size="26" font-weight="800" fill="#0A1020">10</text>''')

IBMATH = svg(520, 380, "0 0 340 250", f'''<g stroke="#334155" stroke-width="1.2">{''.join(f'<line x1="{30+i*28}" y1="30" x2="{30+i*28}" y2="220"/>' for i in range(11))}{''.join(f'<line x1="30" y1="{30+i*27}" x2="310" y2="{30+i*27}"/>' for i in range(8))}</g>
<g {S} fill="none"><line x1="30" y1="138" x2="310" y2="138"/><line x1="170" y1="30" x2="170" y2="220"/></g>
<path d="M40 210 C100 210 120 60 170 60 S240 200 300 200" stroke="#FBBF24" stroke-width="5" fill="none"/>
<path d="M40 50 L300 190" stroke="#A5B4FC" stroke-width="4" stroke-dasharray="10 8"/><circle cx="170" cy="60" r="7" fill="#F59E0B"/>''')

IBPHYS = svg(520, 380, "0 0 340 250", f'''<g {S}><line x1="60" y1="30" x2="180" y2="30"/><line x1="120" y1="30" x2="170" y2="170"/></g>
<circle cx="170" cy="176" r="18" fill="#F59E0B" stroke="#EEF2F9" stroke-width="2.4"/>
<path d="M120 30 L80 166" stroke="#64748B" stroke-width="2" stroke-dasharray="5 6"/>
<path d="M200 120 q15 -40 30 0 t30 0 t30 0 t30 0" stroke="#60A5FA" stroke-width="5" fill="none"/>
<path d="M200 180 q15 -20 30 0 t30 0 t30 0 t30 0" stroke="#A5B4FC" stroke-width="4" fill="none"/>''')

def skyline(buildings, extra="", ground="#1E293B"):
    b = ''.join(f'<rect x="{x}" y="{240-h-10}" width="{w}" height="{h}" rx="3" fill="{c}" stroke="#EEF2F9" stroke-width="2"/>'
                + ''.join(f'<rect x="{x+6+j%2*(w-20)}" y="{240-h+(j//2)*18}" width="8" height="8" fill="#FDE68A" opacity=".85"/>' for j in range(min(8, h//18*2)))
                for x, w, h, c in buildings)
    return svg(520, 380, "0 0 340 250", f'<rect x="0" y="228" width="340" height="6" fill="{ground}"/>{b}{extra}')

PIN = '<path d="M280 40 a22 22 0 0 1 22 22 c0 18 -22 44 -22 44 s-22 -26 -22 -44 a22 22 0 0 1 22 -22 z" fill="#F59E0B" stroke="#EEF2F9" stroke-width="2.4"/><circle cx="280" cy="62" r="8" fill="#0A1020"/>'
Z1 = skyline([(20, 40, 150, "#1E3A5F"), (70, 36, 190, "#312E81"), (116, 44, 130, "#1E3A5F"), (170, 34, 170, "#0E7490"), (214, 40, 110, "#312E81")], PIN)
Z2 = skyline([(14, 34, 120, "#1E3A5F"), (56, 34, 150, "#0E7490"), (98, 34, 175, "#312E81"), (140, 34, 150, "#0E7490"), (182, 34, 120, "#1E3A5F"), (224, 34, 95, "#312E81")],
             '<path d="M0 238 Q170 205 340 238" stroke="#FBBF24" stroke-width="4" fill="none" stroke-dasharray="14 10"/>' + PIN)
Z3 = skyline([(20, 50, 70, "#14532D"), (80, 50, 80, "#1E3A5F"), (140, 40, 150, "#312E81"), (190, 50, 70, "#14532D")],
             '<path d="M30 150 l25 -22 25 22 M90 140 l25 -22 25 22 M200 150 l25 -22 25 22" stroke="#EEF2F9" stroke-width="2.4" fill="#B45309"/>' + PIN)
Z4 = skyline([(20, 36, 140, "#1E3A5F"), (64, 36, 170, "#312E81"), (150, 36, 120, "#0E7490"), (194, 36, 90, "#1E3A5F")],
             '<g stroke="#FBBF24" stroke-width="3" fill="none"><line x1="120" y1="230" x2="120" y2="40"/><line x1="90" y1="44" x2="250" y2="44"/><line x1="120" y1="40" x2="96" y2="60"/><line x1="236" y1="44" x2="236" y2="90"/></g><rect x="226" y="90" width="20" height="14" fill="#F59E0B"/>')
Z5 = skyline([(14, 60, 70, "#7C2D12"), (80, 50, 90, "#1E3A5F"), (136, 60, 60, "#B45309"), (202, 50, 80, "#14532D"), (258, 60, 55, "#1E3A5F")],
             '<path d="M136 172 h60 v-10 h-60 z" fill="#DC2626" stroke="#EEF2F9" stroke-width="2"/>' + PIN)


MOVING = svg(520, 380, "0 0 340 250", f'''<g {S}><path d="M150 110 L210 60 L270 110 V210 H150 Z" fill="#1E3A5F"/><rect x="196" y="150" width="28" height="60" rx="3" fill="#B45309"/>
<rect x="30" y="150" width="70" height="60" rx="4" fill="#B45309"/><rect x="60" y="100" width="56" height="50" rx="4" fill="#D97706"/><line x1="30" y1="170" x2="100" y2="170"/></g>
<path d="M110 60 q40 -30 80 0" stroke="#FBBF24" stroke-width="4" fill="none" stroke-dasharray="8 8"/><path d="M186 52 l8 8 -11 3" stroke="#FBBF24" stroke-width="4" fill="none"/>''')
SWITCH = svg(520, 380, "0 0 340 250", f'''<g {S}><rect x="30" y="60" width="100" height="140" rx="8" fill="#15803D"/><rect x="210" y="60" width="100" height="140" rx="8" fill="#4F46E5"/></g>
<path d="M140 110 H200 M188 98 l12 12 -12 12" stroke="#FBBF24" stroke-width="5" fill="none" stroke-linecap="round"/><path d="M200 160 H140 M152 148 l-12 12 12 12" stroke="#A5B4FC" stroke-width="5" fill="none" stroke-linecap="round"/>''')
IGCSE2 = svg(520, 380, "0 0 340 250", f'''<g {S}><rect x="40" y="50" width="110" height="160" rx="8" fill="#0E7490"/><rect x="190" y="50" width="110" height="160" rx="8" fill="#7C3AED"/>
<line x1="60" y1="90" x2="130" y2="90"/><line x1="60" y1="110" x2="120" y2="110"/><line x1="210" y1="90" x2="280" y2="90"/><line x1="210" y1="110" x2="270" y2="110"/></g>
<text x="170" y="140" text-anchor="middle" font-family="Manrope,sans-serif" font-size="26" font-weight="800" fill="#FBBF24">vs</text>''')
STREAM = svg(520, 380, "0 0 340 250", f'''<path d="M170 230 V140 M170 140 L80 50 M170 140 V40 M170 140 L260 50" stroke="#EEF2F9" stroke-width="10" fill="none" stroke-linecap="round"/>
<circle cx="80" cy="46" r="18" fill="#60A5FA"/><circle cx="170" cy="36" r="18" fill="#FBBF24"/><circle cx="260" cy="46" r="18" fill="#34D399"/>''')
ABROAD = svg(520, 380, "0 0 340 250", f'''<g {S}><circle cx="120" cy="140" r="80" fill="#1E3A5F"/><path d="M40 140 H200 M120 60 Q80 140 120 220 M120 60 Q160 140 120 220" fill="none"/></g>
<path d="M200 80 l100 -30 -20 20 30 10 -10 10 -40 -5 -30 30 -8 -4 18 -30 -40 -2 z" fill="#FBBF24" stroke="#EEF2F9" stroke-width="2"/>
<path d="M190 100 q-40 20 -50 60" stroke="#A5B4FC" stroke-width="3" fill="none" stroke-dasharray="6 6"/>''')
MEDAL = svg(520, 380, "0 0 340 250", f'''<path d="M130 30 L170 110 L210 30" stroke="#6366F1" stroke-width="18" fill="none"/>
<circle cx="170" cy="160" r="60" fill="#F59E0B" stroke="#EEF2F9" stroke-width="3"/><circle cx="170" cy="160" r="42" fill="none" stroke="#FDE68A" stroke-width="3"/>
<text x="170" y="175" text-anchor="middle" font-family="Manrope,sans-serif" font-size="40" font-weight="800" fill="#7C2D12">π</text>''')
COMMUTE = svg(520, 380, "0 0 340 250", f'''<g {S}><rect x="20" y="110" width="190" height="90" rx="14" fill="#F59E0B"/><rect x="36" y="124" width="36" height="30" rx="4" fill="#0B1424"/><rect x="82" y="124" width="36" height="30" rx="4" fill="#0B1424"/><rect x="128" y="124" width="36" height="30" rx="4" fill="#0B1424"/>
<circle cx="60" cy="204" r="14" fill="#1E293B"/><circle cx="170" cy="204" r="14" fill="#1E293B"/><circle cx="270" cy="90" r="46" fill="#1E3A5F"/></g>
<path d="M270 60 V90 L292 104" stroke="#FBBF24" stroke-width="5" fill="none" stroke-linecap="round"/>''')
COVERS = [
    ("moving-to-gurgaon-school-and-tutoring-guide", "#0EA5E9", "#F59E0B", MOVING),
    ("switching-cbse-to-ib-or-igcse-gurgaon", "#6366F1", "#16A34A", SWITCH),
    ("cambridge-vs-edexcel-igcse-gurgaon", "#7C3AED", "#0EA5E9", IGCSE2),
    ("class-11-stream-choice-gurgaon", "#16A34A", "#6366F1", STREAM),
    ("study-abroad-from-gurgaon-sat-ap-ib-timeline", "#3B82F6", "#F59E0B", ABROAD),
    ("olympiad-preparation-gurgaon-imo-nso-rmo", "#F59E0B", "#6366F1", MEDAL),
    ("study-routine-long-commute-gurgaon", "#F59E0B", "#0EA5E9", COMMUTE),
]
CSS = """
*{box-sizing:border-box} body{margin:0;background:#000}
.cover{position:relative;width:1200px;height:630px;overflow:hidden;display:grid;grid-template-columns:520px 1fr;align-items:center;
 background:linear-gradient(160deg,#0B1424,#080E1B 60%,#060A14);margin-bottom:20px}
.bloom{position:absolute;inset:0;background:radial-gradient(55% 75% at 78% 45%,color-mix(in srgb,var(--a) 45%,transparent),transparent 70%),
 radial-gradient(40% 50% at 10% 100%,color-mix(in srgb,var(--b) 25%,transparent),transparent 70%)}
.art{position:relative;display:grid;place-items:center;height:100%}
"""
html = "<html><head><meta charset='utf-8'><link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Manrope:wght@800&display=swap'><style>" + CSS + "</style></head><body>"
for i, (slug, a, b, art) in enumerate(COVERS):
    html += f'<div class="cover" id="c{i}" style="--a:{a};--b:{b}"><div class="bloom"></div><div></div><div class="art">{art}</div></div>'
html += "</body></html>"
(here / "covers3.html").write_text(html, encoding="utf-8")

with sync_playwright() as pw:
    br = pw.chromium.launch(channel="msedge", headless=True)
    p = br.new_page(viewport={"width": 1200, "height": 700})
    p.goto((here / "covers3.html").as_uri(), wait_until="networkidle")
    p.wait_for_timeout(800)
    for i, (slug, *_ ) in enumerate(COVERS):
        p.locator(f"#c{i}").screenshot(path=str(out / f"{slug}.jpg"), type="jpeg", quality=86)
        print("wrote", slug)
    br.close()
