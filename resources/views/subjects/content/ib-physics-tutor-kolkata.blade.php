{{--
  Long-form guide for the "IB physics tutor Kolkata" page. Byline: NXTutors
  Academic Team. No schools, societies or people are named.

  Course facts are reworded from ib-physics-tutor-gurgaon / ib-physics-tutor-
  mumbai, which cite the IB Diploma Programme Physics guide, first assessment
  2025 (ibo.org): five themes A to E (A Space, time and motion; B The
  particulate nature of matter; C Wave behaviour; D Fields; E Nuclear and
  quantum physics) with A.4 rigid body mechanics, A.5 relativity, B.4
  thermodynamics, D.4 induction and E.2 quantum physics HL only, and
  additional higher-level understandings in shared topics; SL 150 h / HL 240 h;
  Paper 1A multiple choice (SL 25, HL 40 questions) and Paper 1B data-based
  questions (20 marks), sat together, 36% (SL 1 h 30 min, HL 2 h); Paper 2 (SL
  1 h 30 min, 55 marks; HL 2 h 30 min, 90 marks) 44%; IA scientific
  investigation 24 marks, 20%, about 10 hours, 3,000-word maximum, four
  criteria of 6 marks; groups of up to three with individual research
  questions and no shared raw data; data from lab work, fieldwork,
  spreadsheets, databases or simulations; no penalty for wrong MCQ answers;
  calculators and the data booklet on both papers; collaborative sciences
  project. No other dates.

  Madhyamik "Physical Science" as a combined subject: wbbse.wb.gov.in 2026
  academic calendar and Madhyamik 2027 routine (read 2 Oct 2026). Kolkata
  context only from the city hub view (a smaller group follow IB or Cambridge;
  ICSE/ISC long following; IB May papers; autumn Puja holidays; online widens
  IB choice), zones/kolkata.json and kolkata-zone-guides.json. Area links
  render only for active Kolkata areas. Fee wording is the approved sentence.
  FAQs render from faqs/ib-physics-tutor-kolkata.php.
--}}
@php
  $kibpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $kibpA = function (string $slug, string $label) use ($kibpSlugs) {
      return in_array($slug, $kibpSlugs, true)
          ? '<a href="' . e(url('/city/kolkata/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="kibpGuideTitle">
  <h2 id="kibpGuideTitle">IB physics tutors in Kolkata: themes, data questions and an investigation the student owns</h2>

  <p class="nx-guide__lede">
    IB Diploma Physics changed shape with the guide first assessed in 2025. The old core and options are gone;
    every student now works through five themes, the first paper mixes multiple choice with data-based questions,
    and the internal assessment is a single scientific investigation worth a fifth of the grade. In Kolkata, where
    the IB is followed by a smaller group of families than ICSE or CBSE, finding a tutor who knows the current course
    and can reach your neighbourhood takes some care. This page explains what the course asks at SL and HL, where
    students lose marks, how tutors may help with the investigation, and how lessons can be arranged across the city.
    It sits under our <a href="{{ url('/physics-home-tutor-kolkata') }}">physics home tutors in Kolkata</a> page and
    the <a href="{{ url('/ib-tutor-kolkata') }}">IB tutors in Kolkata</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kibp-themes">The five themes</a> ·
    <a href="#kibp-papers">Papers and weights</a> ·
    <a href="#kibp-data">Paper 1B and data skills</a> ·
    <a href="#kibp-ia">The investigation</a> ·
    <a href="#kibp-from">Arriving from ICSE or Madhyamik</a> ·
    <a href="#kibp-year">A DP year</a> ·
    <a href="#kibp-zones">Zones and travel</a> ·
    <a href="#kibp-mode">Home or online</a> ·
    <a href="#kibp-demo">The demo</a> ·
    <a href="#kibp-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kibp-themes">Five themes, and what Higher Level adds</h2>
  <p>
    The IB plans 150 hours of teaching at SL and 240 at HL. Both levels study all five themes: A, space, time and
    motion; B, the particulate nature of matter; C, wave behaviour; D, fields; and E, nuclear and quantum physics.
    HL students take five extra topics and go further inside the shared ones.
  </p>
  <ul>
    <li><strong>HL-only topics:</strong> rigid body mechanics and relativity in Theme A, thermodynamics in Theme B, induction in Theme D, and quantum physics in Theme E.</li>
    <li><strong>Shared topics with HL depth:</strong> simple harmonic motion, gravitational fields and several others carry additional higher-level understandings, so an SL worksheet is not enough for an HL student even on a "shared" chapter.</li>
    <li><strong>Theme C at HL:</strong> no separate HL-only topic, but the shared wave topics are taken further.</li>
  </ul>
  <p>
    A tutor who still talks about "core and options" is working from the old course. Ask which themes and topics
    they would cover in DP1, and expect a clear answer.
  </p>
  <p>
    Choosing between SL and HL is a decision for the student and the school, usually made with university plans in
    mind: courses in engineering or the physical sciences often look for HL physics, while many other routes are
    well served by SL. SL still covers all five themes and is not a light option. If your child is undecided at the
    start of DP1, a tutor can show, through a few weeks of HL-depth problems, whether the extra topics feel
    manageable before the choice is fixed.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibp-papers">How the grade is made up</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>IB DP Physics assessment, first assessment 2025</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL</th><th scope="col">HL</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1A (multiple choice) + Paper 1B (data-based, 20 marks), sat together</td><td>25 MCQs; 1 h 30 min in all</td><td>40 MCQs; 2 h in all</td><td>36%</td></tr>
      <tr><td>Paper 2 (short and extended answers)</td><td>1 h 30 min, 55 marks</td><td>2 h 30 min, 90 marks</td><td>44%</td></tr>
      <tr><td>Internal assessment: scientific investigation</td><td>24 marks</td><td>24 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Wrong answers in Paper 1A cost nothing, so every question should be answered. Calculators and the physics data
    booklet are allowed on both papers, which means memorising formulae matters less than knowing which one applies
    and what each symbol means. Paper 2 is where HL students' extra topics are tested hardest, with long questions
    that move from one theme into another.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibp-data">Paper 1B and the data skills that run through the course</h2>
  <p>
    Paper 1B gives students experimental data and asks them to work with it: read a graph, linearise a relationship,
    estimate an uncertainty, judge whether a conclusion follows. These skills are tested on paper, not only in the
    laboratory, so a tutor should build them every week rather than leave them for the investigation. Useful habits:
  </p>
  <ul>
    <li><strong>Uncertainty at every measurement.</strong> Absolute, fractional and percentage, carried through calculations.</li>
    <li><strong>Graphs that mean something.</strong> Choosing what to plot so the line is straight, then reading the gradient and intercept physically.</li>
    <li><strong>Units and significant figures.</strong> Consistent with the data given, never more precise than it allows.</li>
    <li><strong>Words for evaluation.</strong> Saying why a result is or is not reliable in one or two clear sentences.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL, HL and IA guide</a> goes into these in
    more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibp-ia">The scientific investigation: the student's work, the tutor's limits</h2>
  <p>
    The internal assessment is one investigation of about ten hours, written up in no more than 3,000 words and
    marked on four criteria of six marks each. Students may work in groups of up to three, but each must have their
    own research question, and raw data cannot be shared between them. Data may come from laboratory work,
    fieldwork, spreadsheets, databases or simulations. Schools also run a collaborative sciences project, which is
    separate from the graded investigation.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>What a tutor may do</h3>
  <p>
    Teach the physics behind the student's idea; explain how uncertainties and graphs are handled; walk through what
    each criterion rewards; ask questions that help the student narrow a broad interest into a researchable question.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>What a tutor must not do</h3>
  <p>
    Choose the question; design the method; collect, process or analyse the data; write or edit any part of the
    report. Breaking these rules risks the student's diploma, and the student should tell their teacher about outside
    tutoring.
  </p>
    </div>
  </div>
  <p>
    Kolkata offers plenty of starting points a student could genuinely own, from the swing of a ceiling fan's blades
    to the cooling of a cup of tea or the pitch of a conch shell. A tutor can explain the physics of any of them; the
    choosing and the doing stay with the student.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibp-from">Arriving in DP physics from ICSE, Madhyamik, CBSE or IGCSE</h2>
  <p>
    Students reach the Diploma from several boards, and each brings a different gap:
  </p>
  <ul>
    <li><strong>ICSE.</strong> ICSE has a long following in Kolkata, and its students arrive used to careful written answers. The usual gap is data handling and uncertainties at the depth Paper 1B expects.</li>
    <li><strong>Madhyamik.</strong> Students studied physics and chemistry together as Physical Science and wrote in their medium of instruction. They need the IB's English command terms and more practice with experimental data.</li>
    <li><strong>CBSE.</strong> Quick with numerical problems from NCERT; less used to open, multi-step explanations.</li>
    <li><strong>IGCSE.</strong> Familiar with practical-skills papers and command words; the jump is in mathematical depth, especially at HL.</li>
  </ul>
  <p>
    A few weeks before or early in DP1, spent on algebra, vectors, graphs and uncertainties, helps every one of these
    groups. If maths itself is the weak point, our <a href="{{ url('/ib-maths-tutor-kolkata') }}">IB maths tutors in
    Kolkata</a> page explains how maths support can run alongside.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibp-year">A DP physics year with Kolkata's calendar in mind</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How sessions are usually spent</caption>
    <thead>
      <tr><th scope="col">Phase</th><th scope="col">Focus</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>First weeks of DP1</td><td>Maths for physics: algebra, vectors, graphs, uncertainties</td><td>Two for a short block</td></tr>
      <tr><td>DP1</td><td>Themes in step with school; one Paper 1B-style data question every week</td><td>One (SL) or two (HL)</td></tr>
      <tr><td>Puja holidays</td><td>A planned revision block, online if travel is difficult</td><td>As agreed</td></tr>
      <tr><td>Investigation window</td><td>Teaching the physics the student's question needs; criteria explained; no drafting</td><td>Unchanged</td></tr>
      <tr><td>Mocks to May</td><td>Timed Paper 1 and Paper 2 practice, markscheme marking, error log by theme</td><td>Two or three</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibp-zones">How IB physics tutors reach each part of Kolkata</h2>
  <p>
    The IB physics pool is small, so we match on level and course knowledge first, then on a journey that will hold.
    Notes from our zone guides:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/kolkata/zone/ballygunge-gariahat-alipore') }}">Ballygunge, Gariahat and Alipore</a>:</strong> {!! $kibpA('dhakuria', 'Dhakuria') !!} is a denser area of family houses with its own suburban station; keep clear of the Gariahat crossing on weekend evenings.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/tollygunge-jadavpur-garia') }}">Tollygunge, Jadavpur and Garia</a>:</strong> {!! $kibpA('tollygunge', 'Tollygunge') !!}, home of the Bengali film industry, has Mahanayak Uttam Kumar on the Blue Line and a station on the Budge Budge line.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/kasba-em-bypass-south') }}">Kasba and the southern bypass</a>:</strong> {!! $kibpA('kasba', 'Kasba') !!} mixes inner paras of older buildings with newer complexes; the Orange Line runs along the bypass, and the evening rush is the time to avoid.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/new-town-rajarhat') }}">New Town and Rajarhat</a>:</strong> {!! $kibpA('new-town-action-area-1', 'Action Area I') !!}, near Biswa Bangla Gate, mixes plotted blocks with complexes; with no metro yet, tutors come by road or change at Salt Lake Sector V.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/lake-town-dum-dum-baguiati') }}">Lake Town, Dum Dum and Baguiati</a>:</strong> {!! $kibpA('dum-dum', 'Dum Dum') !!} is one of the city's main transit hubs, on the Blue and Yellow Lines and the suburban railway, which widens the pool of tutors who can come.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/north-kolkata') }}">North Kolkata</a>:</strong> {!! $kibpA('maniktala', 'Maniktala') !!}, a separate municipality until 1923, is easiest from Sealdah on the Green Line.</li>
  </ul>
  <p>
    See every locality on the <a href="{{ url('/city/kolkata') }}">Kolkata home tutors page</a>, and our guide to
    <a href="{{ url('/blog/salt-lake-and-new-town-tuition-guide') }}">Salt Lake and New Town</a> for the eastern side.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibp-mode">Home or online for IB physics?</h2>
  <p>
    The Kolkata hub notes that online lessons matter most for IB and other specialist senior papers, and IB physics
    HL is a clear example. Theory, data questions and markscheme marking all work well online with a shared screen
    and a camera over the notebook. Home sessions help most for students who need someone beside them to slow down
    and set out a long Paper 2 answer. Practical work itself belongs in the school laboratory, not at home. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring comparison</a> covers the choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibp-demo">What to check in an IB physics demo</h2>
  <ol>
    <li><strong>The current course.</strong> Can the tutor name the five themes and the HL-only topics?</li>
    <li><strong>A data question.</strong> Ask them to teach one Paper 1B-style item on uncertainties.</li>
    <li><strong>Marking.</strong> Hand over a marked school test and ask where marks were lost.</li>
    <li><strong>The investigation line.</strong> Listen for "I teach the physics; the question, the data and the writing are yours".</li>
    <li><strong>Maths support.</strong> How will they handle gaps in algebra or graphs?</li>
    <li><strong>The route.</strong> Which line or road, and what happens in Puja week?</li>
  </ol>
  <p>
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes
    live. If the demo does not fit, the next matched tutor gets their own free demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kibp-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    The <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-kolkata') }}">home tuition fees in Kolkata</a> explain what moves the
    figure, and each tutor's own fee is visible before the demo.
  </p>
  <p>
    Send the level, DP year, exam session, the theme that is hardest, your neighbourhood and the evenings that work.
    You receive two or three matched tutors, choose one for a <a href="{{ url('/demo-class') }}">free demo class</a>,
    and can switch later at no cost. Browse <a href="{{ url('/tutors') }}">tutor profiles</a> first if you prefer. For
    other sciences, see <a href="{{ url('/igcse-physics-tutor-kolkata') }}">IGCSE physics</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-kolkata') }}">IB and IGCSE chemistry</a> tutors in Kolkata.
  </p>
  </section>

  </div>
</article>
