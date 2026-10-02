{{--
  Long-form guide for the "IB maths tutor Kolkata" page. Author: Ajay Vatsyayan
  (role: IB, IGCSE and ISC maths). No anecdotes, years or results are claimed
  for him. No schools, societies or other people are named.

  Course and assessment facts are reworded from ib-maths-tutor-gurgaon /
  ib-maths-tutor-mumbai, which cite the IB Diploma Programme subject briefs for
  Mathematics: analysis and approaches and Mathematics: applications and
  interpretation and the IB's published curriculum update (ibo.org): two
  courses, each at SL or HL; 150 h SL / 240 h HL; SL Papers 1 and 2 (40% each,
  1 h 30 min each); HL Papers 1 and 2 (30% each, 2 h each) and Paper 3 (20%,
  two extended problem-solving questions, GDC allowed); exploration 20% at
  both levels, teacher-marked and IB-moderated, roughly 12 to 20 pages; AA
  Paper 1 without a calculator, AI uses the GDC on all papers; revised
  courses first taught August 2027 and first examined May 2029 (AA Papers 1
  and 2 to 100 marks from 110, Paper 3 to 50 marks from 55 and one hour;
  exploration kept with shared SL/HL criteria; 80/20 split kept); MYP maths
  four criteria. No other dates.

  Kolkata context only from the city hub view (ICSE and ISC have a long and
  strong following; a smaller group follow IB or Cambridge; IB May papers;
  autumn Puja holidays; online widens IB choice), zones/kolkata.json and
  kolkata-zone-guides.json. WBCHSE semester facts as cited in
  west-bengal-board-tutor-kolkata (wbchse.wb.gov.in). Area links render only
  for active Kolkata areas. Fee wording is the approved sentence. FAQs render
  from faqs/ib-maths-tutor-kolkata.php.
--}}
@php
  $kibmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $kibmA = function (string $slug, string $label) use ($kibmSlugs) {
      return in_array($slug, $kibmSlugs, true)
          ? '<a href="' . e(url('/city/kolkata/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="kibmGuideTitle">
  <h2 id="kibmGuideTitle">IB maths tutors in Kolkata: matching the course, the level and the exam session before the address</h2>

  <p class="nx-guide__lede">
    In Kolkata the IB is a smaller world than ICSE or CBSE, and that changes how you look for a maths tutor. There
    are fewer specialists, they are spread across the city, and the one who suits a student on Applications and
    Interpretation at Standard Level may be quite the wrong choice for Analysis and Approaches at Higher Level. This
    page sets out what each course asks, how the papers are weighted, what the IB's coming revision means for your
    child's exam session, and how a tutor can reach you from Alipore to New Town. It is written by Ajay Vatsyayan,
    who teaches IB, IGCSE and ISC maths on NXTutors, and it belongs with our
    <a href="{{ url('/maths-home-tutor-kolkata') }}">maths home tutors in Kolkata</a> page and the
    <a href="{{ url('/ib-tutor-kolkata') }}">IB tutors in Kolkata</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kibm-courses">AA or AI, SL or HL</a> ·
    <a href="#kibm-weights">How the grade is built</a> ·
    <a href="#kibm-session">Which syllabus version</a> ·
    <a href="#kibm-ia">The exploration</a> ·
    <a href="#kibm-from">Arriving from ICSE and others</a> ·
    <a href="#kibm-terms">A Kolkata DP year</a> ·
    <a href="#kibm-zones">Zones and travel</a> ·
    <a href="#kibm-mode">Home or online</a> ·
    <a href="#kibm-demo">The demo</a> ·
    <a href="#kibm-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kibm-courses">AA or AI, SL or HL: four different jobs for a tutor</h2>
  <p>
    Every Diploma student takes one maths course, and there are two to choose from, each at two levels. Both cover
    number and algebra, functions, geometry and trigonometry, statistics and probability, and calculus. The difference
    is in what the course values.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Analysis and Approaches</h3>
  <p>
    Exact answers, algebraic manipulation, proof and calculus by hand. One paper is sat without a calculator. A tutor
    for AA spends much of the session watching handwritten algebra and correcting the line where a sign was dropped.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Applications and Interpretation</h3>
  <p>
    Modelling, statistics and real data, with the graphic display calculator allowed on every paper. A tutor for AI
    must be fluent on the GDC and good at turning a paragraph of context into an equation the student can work with.
  </p>
    </div>
  </div>
  <p>
    Higher Level adds depth and an extra paper to either course; AI HL is a demanding course in its own right, not an
    easier cousin of AA. We therefore match on the exact combination. If your child is still choosing, the
    <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">AA, AI, SL and HL guide</a> compares them, and the national
    <a href="{{ url('/ib-maths-tutor') }}">IB maths tutor</a> page goes into the subject at more length.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibm-weights">How the final grade is built</h2>
  <p>
    The IB plans 150 teaching hours at SL and 240 at HL. On the current courses, four-fifths of the grade comes from
    written examinations and one-fifth from the exploration, at both levels.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Current DP maths components and weights</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL</th><th scope="col">HL</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1</td><td>1 h 30 min, 40% (no calculator on AA)</td><td>2 h, 30% (no calculator on AA)</td></tr>
      <tr><td>Paper 2</td><td>1 h 30 min, 40%</td><td>2 h, 30%</td></tr>
      <tr><td>Paper 3</td><td>Not sat</td><td>Two extended problem-solving questions with a GDC, 20%</td></tr>
      <tr><td>Exploration</td><td>20%</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Paper 3 deserves early attention. Its questions start on familiar ground and climb, part by part, to a result the
    student has not seen before, and the marks reward using an earlier answer to unlock a later one. Students who meet
    this style only in the last term often find it unsettling; students who have done one such question a fortnight since DP1
    tend to treat it as routine.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibm-session">Which syllabus version will your child sit?</h2>
  <p>
    The IB has published revised versions of both courses. They are taught from August 2027 and examined for the
    first time in May 2029. Both courses and both levels remain, and the balance of 80 per cent examinations to 20
    per cent exploration stays. For AA, the published changes include Papers 1 and 2 dropping from 110 to 100 marks,
    Paper 3 moving from 55 to 50 marks with one hour allowed, and a single set of exploration criteria shared by SL
    and HL.
  </p>
  <p>
    The working rule is to go by the exam session. A student who entered DP1 in August 2026 sits the current course
    in May 2028. A student starting DP1 in August 2027 or later is on the revised course, and a tutor preparing them
    from older past papers needs to adjust timings and mark totals. Put the session in your request so the tutor
    prepares from the right materials from the first lesson.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibm-ia">The exploration: what a tutor may and may not do</h2>
  <p>
    The exploration is a piece of the student's own mathematics on a question they choose, roughly 12 to 20 pages in
    the IB's guidance. The school marks it against published criteria (presentation, mathematical communication,
    personal engagement, reflection, and the use of mathematics) and the IB moderates the marks. At a fifth of the
    grade, it repays care.
  </p>
  <ul>
    <li><strong>Fair help:</strong> teaching any mathematics the idea needs, even beyond the syllabus; asking questions that help the student narrow a broad interest; explaining each criterion with the IB's own examples; saying, in general terms, that a section is unclear.</li>
    <li><strong>Not allowed:</strong> choosing the topic; writing, dictating or rephrasing text; doing the calculations or building the model; editing a draft line by line. These break the IB's academic-integrity rules, and the student should tell their teacher about any outside tutoring.</li>
  </ul>
  <p>
    Kolkata offers plenty of questions a student could genuinely own: crowd flow around a Puja pandal, the spacing of
    trains on a metro line, the layout of Salt Lake's lettered blocks, or rainfall across the monsoon months. A modest
    question carried through with real mathematics usually scores better than an ambitious one left unfinished.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibm-from">Arriving in DP maths from ICSE, Madhyamik, CBSE, IGCSE or the MYP</h2>
  <p>
    ICSE and ISC have a long following in Kolkata, so a DP maths class here can include students from several
    backgrounds, each with a typical gap:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Typical starting points and what to fix first</caption>
    <thead>
      <tr><th scope="col">Came from</th><th scope="col">Usual strength</th><th scope="col">Usual gap</th></tr>
    </thead>
    <tbody>
      <tr><td>ICSE</td><td>Full, well-laid-out working</td><td>GDC use and open modelling questions</td></tr>
      <tr><td>Madhyamik or CBSE</td><td>Standard methods done quickly</td><td>Unguided multi-step questions and written reasoning</td></tr>
      <tr><td>IGCSE Extended</td><td>Familiar algebra, calculator confidence</td><td>The jump in pace and depth, non-calculator Paper 1 on AA</td></tr>
      <tr><td>MYP</td><td>Open tasks judged on four criteria: knowing and understanding, investigating patterns, communicating, applying maths in real-life contexts</td><td>Long, dense timed papers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Four to six weeks before DP1, or in its first term, spent on algebra, functions and trigonometry, with every
    exercise marked the IB way, settles most of these gaps. Our
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">guide to switching from CBSE to IB or IGCSE</a>
    lays out a bridging plan that works for ICSE and state-board students too. Students arriving from Cambridge should
    also read the <a href="{{ url('/igcse-maths-tutor-kolkata') }}">IGCSE maths tutors in Kolkata</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibm-terms">Planning a DP maths year around Kolkata's calendar</h2>
  <p>
    IB papers are sat in May, while the neighbours' board exams fall earlier in the year and the autumn Puja holidays
    break the routine for weeks. A tutor's plan should start from the school's own dates.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How sessions are used through the Diploma</caption>
    <thead>
      <tr><th scope="col">Phase</th><th scope="col">What sessions are for</th><th scope="col">Rhythm</th></tr>
    </thead>
    <tbody>
      <tr><td>Before or just after DP1 starts</td><td>Algebra and functions repair; GDC set-up for AI students</td><td>Two a week for a short block</td></tr>
      <tr><td>DP1 terms</td><td>Keeping pace with class; topic tests marked to the markscheme; first Paper 3 problems for HL</td><td>One or two a week</td></tr>
      <tr><td>Puja holidays</td><td>One structured revision block, often online, rather than a gap of several weeks</td><td>As agreed</td></tr>
      <tr><td>Exploration window</td><td>Teaching the mathematics the student's idea needs; criteria explained; no drafting</td><td>Unchanged</td></tr>
      <tr><td>Mocks to May</td><td>Timed papers by type, error log by topic, markscheme marking</td><td>Two or three a week</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibm-zones">How IB maths tutors reach each part of Kolkata</h2>
  <p>
    Because the pool is small, we look first for the right course and level, then for a journey that will hold every
    week. Notes from our zone guides:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/kolkata/zone/ballygunge-gariahat-alipore') }}">Ballygunge, Gariahat and Alipore</a>:</strong> {!! $kibmA('alipore', 'Alipore') !!} relies on Majerhat and Kidderpore on the Circular section; larger homes there often have a staffed gate, so send the tutor's name ahead.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/tollygunge-jadavpur-garia') }}">Tollygunge, Jadavpur and Garia</a>:</strong> {!! $kibmA('golf-green', 'Golf Green') !!} is low-rise flats among green spaces, with Mahanayak Uttam Kumar the nearest Blue Line stop.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/kasba-em-bypass-south') }}">Kasba and the southern bypass</a>:</strong> {!! $kibmA('mukundapur', 'Mukundapur') !!} is mostly newer complexes behind a gate, with Jyotirindra Nandi on the Orange Line close by.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/salt-lake') }}">Salt Lake</a>:</strong> {!! $kibmA('salt-lake-sector-3', 'Sector III') !!} has Bengal Chemical and Salt Lake Stadium on the Green Line; give the block letters and the nearest avenue.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/new-town-rajarhat') }}">New Town and Rajarhat</a>:</strong> {!! $kibmA('new-town-action-area-2', 'Action Area II') !!}, around Eco Park, is almost all apartment complexes; the Orange Line stations there are still being built, so a tutor living nearby or an online session is often the practical answer.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/howrah') }}">Howrah</a>:</strong> {!! $kibmA('santragachi', 'Santragachi') !!}, on the Kona Expressway, is mainly gated complexes; share the tower and flat number before the demo and allow extra time at office hours.</li>
  </ul>
  <p>
    Every neighbourhood is listed on the <a href="{{ url('/city/kolkata') }}">Kolkata home tutors page</a>, and our
    local guides cover <a href="{{ url('/blog/south-kolkata-tuition-guide') }}">South Kolkata</a> and
    <a href="{{ url('/blog/salt-lake-and-new-town-tuition-guide') }}">Salt Lake and New Town</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibm-mode">Home or online for IB maths in Kolkata?</h2>
  <p>
    The city hub notes that online lessons matter most for IB, IGCSE and specialist senior papers, and maths HL is the
    clearest case. Three questions decide the mix:
  </p>
  <ol>
    <li><strong>Can the tutor see the algebra?</strong> At home, naturally. Online, only with the notebook under a second camera, never held up to the screen.</li>
    <li><strong>Can the tutor see the calculator?</strong> For AI and Paper 3, use an emulator shared on screen or a phone filming the keypad.</li>
    <li><strong>Will the journey survive the busy weeks?</strong> In Puja season or near mocks, keeping the same tutor online beats changing to a nearer one.</li>
  </ol>
  <p>
    A workable pattern is one home session for long problem work and one online session for checking homework. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring comparison</a> covers the wider
    trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibm-demo">What to check in an IB maths demo</h2>
  <ol>
    <li><strong>Questions first.</strong> The tutor should ask the course, level, DP year and exam session before teaching.</li>
    <li><strong>Command terms.</strong> Ask what "show that", "hence" and "write down" require; the answer should come without hesitation.</li>
    <li><strong>Marking.</strong> Hand over a marked school test and ask where the method and accuracy marks were lost.</li>
    <li><strong>Calculator policy.</strong> Non-calculator drill for AA; quick, accurate GDC work for AI.</li>
    <li><strong>Paper 3.</strong> For HL, ask how they would introduce it in DP1.</li>
    <li><strong>The exploration line.</strong> Listen for "I teach the mathematics; the choices and the writing are yours".</li>
    <li><strong>The route.</strong> Which line or road, which stop, and what happens in Puja week.</li>
  </ol>
  <p>
    If the fit is wrong, the next matched tutor gets their own free demo. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibm-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    For IB maths, the level, the journey and the number of sessions a week shape the figure, and each tutor's fee is on
    their profile before the demo. The <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-kolkata') }}">home tuition fees in Kolkata</a> explain more.
  </p>
  <p>
    Send the course, level, exam session, DP year, the topic that is hurting, your neighbourhood and the free
    evenings. You receive two or three matched tutors, pick one for a <a href="{{ url('/demo-class') }}">free demo
    class</a>, and can switch later at no cost. Browse <a href="{{ url('/tutors') }}">tutor profiles</a> first if you
    like. For the sciences, see <a href="{{ url('/ib-physics-tutor-kolkata') }}">IB physics</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-kolkata') }}">IB and IGCSE chemistry</a> tutors in Kolkata.
  </p>
  </section>

  </div>
</article>
