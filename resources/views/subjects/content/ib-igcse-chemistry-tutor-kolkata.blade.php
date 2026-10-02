{{--
  Long-form guide for the "IB and IGCSE chemistry tutor Kolkata" page. Byline:
  NXTutors Academic Team. No schools, societies or people are named.

  Course facts are reworded from ib-igcse-chemistry-tutor-gurgaon /
  ib-igcse-chemistry-tutor-mumbai, which cite the IB DP Chemistry guide, first
  assessment 2025 (ibo.org: Structure and Reactivity framework, SL 150 h / HL
  240 h; Paper 1A multiple choice SL 30 / HL 40 questions; Paper 1B data-based
  and experimental questions SL 25 / HL 35 marks; Paper 1 36%, 1 h 30 min SL /
  2 h HL; Paper 2 SL 1 h 30 min 50 marks, HL 2 h 30 min 90 marks, 44%; IA
  scientific investigation 24 marks, 20%, 3,000-word maximum, four criteria of
  6 marks; data booklet; no penalty for wrong MCQ answers) and the Cambridge
  IGCSE Chemistry 0620 syllabus for 2026, 2027 and 2028 (version 2, August
  2026, no substantial changes affecting teaching; cambridgeinternational.org):
  Core Papers 1 + 3, Extended Papers 2 + 4, Paper 5 or 6 practical; MCQ 40
  questions 45 min 30%; theory 80 marks 1 h 15 min 50%; practical 40 marks
  20%; Core C-G, Extended A*-G; AO weightings 50/30/20; twelve topics (states
  of matter; atoms, elements and compounds; stoichiometry; electrochemistry;
  chemical energetics; chemical reactions; acids, bases and salts; the
  Periodic Table; metals; chemistry of the environment; organic chemistry;
  experimental techniques and chemical analysis); qualitative analysis notes
  supplied in Papers 5 and 6. No other dates.

  Onward routes: wbchse.wb.gov.in (equivalent boards list includes Cambridge
  IGCSE; FAQ: no calculator in any semester exam; question pattern: Class XI
  chemistry MCQ semester = some basic concepts, structure of atom,
  periodicity, chemical bonding, states of matter, s-block, some p-block
  elements; theory 70 per class). WBJEE bulletin 2026 (wbjeeb.nic.in):
  chemistry 40 questions / 50 marks; syllabus includes identification of acid
  and basic radicals. All read 2 Oct 2026. Kolkata context only from the city
  hub view (a smaller group follow IB or Cambridge; ICSE/ISC long following;
  senior chemistry as calculation, mechanisms and recall; autumn Puja
  holidays), zones/kolkata.json and kolkata-zone-guides.json. Area links render
  only for active Kolkata areas. Fee wording is the approved sentence. FAQs
  render from faqs/ib-igcse-chemistry-tutor-kolkata.php.
--}}
@php
  $kibcSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $kibcA = function (string $slug, string $label) use ($kibcSlugs) {
      return in_array($slug, $kibcSlugs, true)
          ? '<a href="' . e(url('/city/kolkata/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="kibcGuideTitle">
  <h2 id="kibcGuideTitle">IB and IGCSE chemistry tutors in Kolkata: from the mole in Year 10 to structure and reactivity in the Diploma</h2>

  <p class="nx-guide__lede">
    Chemistry is the subject where an international-board student's earlier years most clearly shape the later
    ones. A student who leaves Cambridge IGCSE confident with moles, equations and practical write-ups starts the IB
    Diploma with a real advantage; one who scraped through those topics usually meets them again in DP1, harder. In
    Kolkata, where IB and Cambridge families are a smaller group than ICSE or CBSE ones, a single tutor who teaches
    both courses can carry a student across that join. This page explains how each course is examined, which skills
    carry over, how tutors may help with the IB investigation, and how lessons can reach you, from Ballygunge to
    Santragachi. It sits under our <a href="{{ url('/chemistry-home-tutor-kolkata') }}">chemistry home tutors in
    Kolkata</a> page.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kibc-two">Two courses side by side</a> ·
    <a href="#kibc-igcse">IGCSE 0620</a> ·
    <a href="#kibc-mole">The mole, worked</a> ·
    <a href="#kibc-ib">IB Diploma Chemistry</a> ·
    <a href="#kibc-ia">The IB investigation</a> ·
    <a href="#kibc-next">Other routes after IGCSE</a> ·
    <a href="#kibc-zones">Zones and travel</a> ·
    <a href="#kibc-mode">Home or online</a> ·
    <a href="#kibc-demo">The demo</a> ·
    <a href="#kibc-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kibc-two">Two courses side by side</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Chemistry 0620 and IB DP Chemistry at a glance</caption>
    <thead>
      <tr><th scope="col"></th><th scope="col">IGCSE Chemistry 0620</th><th scope="col">IB DP Chemistry</th></tr>
    </thead>
    <tbody>
      <tr><td>Levels</td><td>Core (grades C to G) or Extended (A* to G)</td><td>SL (150 hours) or HL (240 hours)</td></tr>
      <tr><td>Multiple choice</td><td>40 questions in 45 minutes, 30%</td><td>Paper 1A: 30 questions at SL, 40 at HL, no penalty for wrong answers</td></tr>
      <tr><td>Written theory</td><td>80 marks in 1 h 15 min, 50%</td><td>Paper 2: 50 marks at SL (1 h 30 min), 90 at HL (2 h 30 min), 44%</td></tr>
      <tr><td>Practical and data skills</td><td>Paper 5 practical test or Paper 6 written alternative, 40 marks, 20%</td><td>Paper 1B data and experimental questions (25 marks SL, 35 HL), sat with 1A for 36%; internal investigation 20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The pattern is similar, which is good news: both reward clean calculation, precise description and confidence
    with experimental data. The difference is depth, and in the IB, an investigation the student designs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibc-igcse">IGCSE Chemistry 0620: twelve topics, three kinds of skill</h2>
  <p>
    The current syllabus runs for exams in 2026, 2027 and 2028, and Cambridge notes no substantial changes that affect
    teaching. Assessment objectives are weighted about half to knowledge with understanding, three tenths to handling
    information and solving problems, and a fifth to experimental skills. It helps to group the twelve topics by the
    kind of thinking they ask for, not just by chapter:
  </p>
  <ul>
    <li><strong>Calculation:</strong> stoichiometry, chemical energetics, and the quantitative side of electrochemistry and reactions. These need daily practice and a consistent layout.</li>
    <li><strong>Explanation and patterns:</strong> states of matter; atoms, elements and compounds; the Periodic Table; metals; acids, bases and salts; chemistry of the environment. These need precise words and well-drawn diagrams.</li>
    <li><strong>Reactions and the lab:</strong> chemical reactions, organic chemistry, and experimental techniques and chemical analysis. These need equations written correctly every time and tests for ions and gases known well enough to answer theory questions without notes.</li>
  </ul>
  <p>
    In the practical papers, by contrast, notes for qualitative analysis are supplied, so the skill tested there is
    using them, observing and recording carefully, not reciting a table. A tutor can practise Paper 6 fully at home and the recording side of
    Paper 5 too.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibc-mole">The mole, worked once properly</h2>
  <p>
    Every later calculation leans on this. Take a typical question: what mass of carbon dioxide forms when 10.0 g of
    calcium carbonate is heated until it fully decomposes? A clear method has four lines:
  </p>
  <ol>
    <li>Equation: CaCO<sub>3</sub> → CaO + CO<sub>2</sub>.</li>
    <li>Moles of calcium carbonate: 10.0 ÷ 100 = 0.100 mol (relative formula mass 100).</li>
    <li>Ratio from the equation: 1 mol CaCO<sub>3</sub> gives 1 mol CO<sub>2</sub>, so 0.100 mol CO<sub>2</sub>.</li>
    <li>Mass: 0.100 × 44 = 4.40 g.</li>
  </ol>
  <p>
    Students who lay out every mole question this way, equation, moles, ratio, answer with unit, rarely lose marks
    to muddle, and the same four lines reappear at IB level with limiting reagents, yields and titrations added. Our
    Kolkata hub describes senior chemistry as three skills at once: calculation, mechanisms and recall. The mole is
    where the first of those is built.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibc-ib">IB Diploma Chemistry: structure and reactivity</h2>
  <p>
    The guide first assessed in 2025 organises the course around two big ideas, structure and reactivity, rather than
    a list of separate chapters. Students are expected to connect them: why a structure leads to a property, and why a
    property leads to a reaction. The IB data booklet is available in the examinations, so recall of constants
    matters less than knowing how to use them.
  </p>
  <ul>
    <li><strong>Paper 1A</strong> is multiple choice with no penalty for wrong answers, so every item should be attempted.</li>
    <li><strong>Paper 1B</strong> gives data and experimental contexts; it rewards students who have analysed real results, not only read about them.</li>
    <li><strong>Paper 2</strong> asks for short and extended answers, and at HL its 90 marks across two and a half hours demand stamina as well as knowledge.</li>
  </ul>
  <p>
    For students arriving from ICSE or a state board rather than IGCSE, the bridging work is similar: a few weeks on
    moles, bonding and equations, with answers marked the IB way, before or early in DP1. See also our
    <a href="{{ url('/ib-tutor-kolkata') }}">IB tutors in Kolkata</a> hub.
  </p>
  <p>
    Choosing SL or HL is usually settled with the school and with university plans in mind; medicine, chemical
    engineering and the chemical sciences often look for HL. HL's extra ninety teaching hours show up most in
    Paper 2, so an HL student benefits from long written practice from the first term of DP1 rather than only in the
    run-up to mocks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibc-ia">The IB scientific investigation</h2>
  <p>
    The internal assessment is a scientific investigation worth 24 marks and a fifth of the grade, written up in no
    more than 3,000 words and marked on four criteria of six marks each. The student chooses the question and does the
    work.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>A tutor may</h3>
  <p>
    Teach the chemistry behind the student's idea; explain uncertainties, graphing and evaluation; walk through what
    each criterion rewards; ask questions that help the student sharpen a question of their own.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>A tutor must not</h3>
  <p>
    Choose the question; design the method; process the data; write, rewrite or edit the report. These breach the
    IB's academic-integrity rules. The student should tell their teacher about any outside tutoring.
  </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibc-next">Other routes after IGCSE chemistry in Kolkata</h2>
  <p>
    Not every IGCSE student goes on to the IB. The state's Council of Higher Secondary Education lists the Cambridge
    IGCSE among the boards it treats as equivalent, and ISC has a long following in the city.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What changes for chemistry on each route</caption>
    <thead>
      <tr><th scope="col">Route</th><th scope="col">What is different</th><th scope="col">What a tutor bridges</th></tr>
    </thead>
    <tbody>
      <tr><td>West Bengal Higher Secondary</td><td>Class 11 opens with a 35-mark multiple-choice semester on basic concepts, atomic structure, periodicity, bonding, states of matter and s- and p-block elements; no calculator in any semester</td><td>Speed with one-mark questions; arithmetic by hand</td></tr>
      <tr><td>ISC</td><td>Longer written answers than Cambridge asks for</td><td>Answer length and layout</td></tr>
      <tr><td>CBSE</td><td>NCERT textbooks, the base for national entrance tests</td><td>NCERT wording and its order of topics</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Students who later sit the state engineering entrance should know that its chemistry syllabus includes
    identifying common acid and basic radicals, a salt-analysis skill that Cambridge's qualitative analysis work
    prepares for well; see <a href="{{ url('/wbjee-tutor-kolkata') }}">WBJEE tutors in Kolkata</a> and our
    <a href="{{ url('/west-bengal-board-tutor-kolkata') }}">West Bengal board tutors</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibc-zones">How chemistry tutors reach you, zone by zone</h2>
  <p>
    We match on course and level first, then on a journey that can be repeated every week. Notes from our zone guides:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/kolkata/zone/ballygunge-gariahat-alipore') }}">Ballygunge, Gariahat and Alipore</a>:</strong> {!! $kibcA('ballygunge', 'Ballygunge') !!} pairs mansions from the 1930s and 1940s with newer apartment blocks; Ballygunge Junction serves the suburban lines, and weekend evenings near Gariahat are worth avoiding.</li>
    <li>{!! $kibcA('bhowanipore', 'Bhowanipore') !!}, just south of the Maidan, mixes older buildings with shops and offices; Netaji Bhavan or Jatin Das Park are the Blue Line stops to name.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/tollygunge-jadavpur-garia') }}">Tollygunge, Jadavpur and Garia</a>:</strong> {!! $kibcA('jadavpur', 'Jadavpur') !!} is a busy mixed area around the 8B bus terminus; weekend mornings are calmer than college and office hours.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/salt-lake') }}">Salt Lake</a>:</strong> {!! $kibcA('salt-lake-sector-2', 'Sector II') !!} has Karunamoyee station beside the bus terminal; houses open onto the street, so tell the tutor which bell to ring.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/lake-town-dum-dum-baguiati') }}">Lake Town, Dum Dum and Baguiati</a>:</strong> {!! $kibcA('kestopur', 'Kestopur') !!}, linked to Salt Lake by a bridge opened in 2022, is easiest to find with an exact landmark off VIP Road.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/howrah') }}">Howrah</a>:</strong> {!! $kibcA('santragachi', 'Santragachi') !!}, known for its railway junction and a lake that draws migratory birds in winter, is mostly gated complexes; share gate rules before the demo.</li>
  </ul>
  <p>
    See every neighbourhood on the <a href="{{ url('/city/kolkata') }}">Kolkata home tutors page</a>, or our local
    guides to <a href="{{ url('/blog/south-kolkata-tuition-guide') }}">South Kolkata</a> and
    <a href="{{ url('/blog/north-kolkata-and-howrah-tuition-guide') }}">North Kolkata and Howrah</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibc-mode">Home or online for IB and IGCSE chemistry?</h2>
  <p>
    Calculations and equation writing benefit from a tutor who sees the page as it is written, which is easiest at
    home or with a camera over the notebook. Data questions, past-paper marking and IA criteria discussions work well
    online. Because the right IB or Cambridge specialist may live across the city, an online tutor is often the
    better choice over a nearer one who does not know the course. Around the Puja holidays, when routines break
    for weeks, a short online block of past-paper questions keeps the momentum that a long gap would lose. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring comparison</a> covers the choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibc-demo">What to check in a chemistry demo</h2>
  <ol>
    <li><strong>Course and level.</strong> 0620 Core or Extended, or IB SL or HL, and which practical paper.</li>
    <li><strong>A mole problem.</strong> Does the tutor insist on the equation, moles, ratio and units every time?</li>
    <li><strong>Data.</strong> Ask them to teach a short Paper 1B or Paper 6 question.</li>
    <li><strong>The IA line.</strong> Listen for "I teach the chemistry; the question and the writing are yours".</li>
    <li><strong>What comes next.</strong> Do they ask about the board after IGCSE?</li>
    <li><strong>The route.</strong> Which line or road, and what changes in Puja week.</li>
  </ol>
  <p>
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes
    live. If the first demo does not fit, the next matched tutor gets their own.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibc-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    The <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-kolkata') }}">home tuition fees in Kolkata</a> explain more, and every
    tutor's fee is shown before the demo.
  </p>
  <p>
    Send the course, level, year group, exam series or session, your neighbourhood and the evenings that work. You
    receive two or three matched tutors, the first class is a <a href="{{ url('/demo-class') }}">free demo</a>, and
    switching later is free. You can also browse <a href="{{ url('/tutors') }}">tutor profiles</a>, or see
    <a href="{{ url('/ib-physics-tutor-kolkata') }}">IB physics</a> and
    <a href="{{ url('/igcse-physics-tutor-kolkata') }}">IGCSE physics</a> tutors in Kolkata.
  </p>
  </section>

  </div>
</article>
