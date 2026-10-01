{{--
  Long-form guide for the "IB physics tutor Delhi" page. Byline: NXTutors
  Academic Team. No schools, societies or people are named.

  Course facts are reworded from ib-physics-tutor-mumbai and
  ib-physics-tutor-gurgaon, which cite the IB Diploma Programme Physics guide,
  first assessment 2025
  (https://www.ibo.org/programmes/diploma-programme/curriculum/sciences/physics/):
  five themes A to E and their topics, with A.4, A.5, B.4, D.4 and E.2 HL only;
  SL 150 h / HL 240 h; Paper 1A multiple choice (SL 25, HL 40 questions) and
  Paper 1B data-based questions (20 marks), sat together, 36% (SL 1 h 30 min,
  HL 2 h); Paper 2 (SL 1 h 30 min, 55 marks; HL 2 h 30 min, 90 marks) 44%; IA
  scientific investigation 24 marks, 20%, about 10 hours, 3,000-word maximum,
  four criteria of 6 marks (research design, data analysis, conclusion,
  evaluation); groups of up to three with individual research questions and
  no shared raw data; data from lab work, fieldwork, spreadsheets, databases
  or simulations; no penalty for wrong MCQ answers; calculators and the data
  booklet on both papers; collaborative sciences project. No other dates.
  The pendulum example is standard physics (T = 2 pi sqrt(L/g)), used only to
  illustrate linearising and uncertainty handling.

  Delhi detail only from the Delhi city hub view (CBSE for most students, a
  smaller IB/IGCSE group; online opens up tutors for IB; Yamuna crossing;
  interchanges), database/seo-content/zones/delhi.json (Vasant Kunj zone: IB
  or IGCSE specialist may be easier to find online) and
  database/seo-content/areas/delhi-research.json (Sainik Farm: Saket and Qutub
  Minar stations then auto or cab, private gates and staff, guards check
  visitors, Mehrauli-Badarpur Road evening peak; Palam: Magenta Line station,
  doorstep visits, narrow lanes, market roads crowded in the evening, online
  for specialist subjects; Dwarka Sector 13: own Blue Line station, societies
  within walking distance, gate registers and standing permission; Tilak
  Nagar: Blue Line station, crowded market lanes, metro plus e-rickshaw;
  GTB Nagar: Yellow Line station in the heart of the area, earlier evening
  slots; Nirman Vihar: own Blue Line station on Vikas Marg, peak traffic,
  two-wheeler parking). No board is said to concentrate in any area. Area
  links render only for active Delhi areas. Fee wording is the approved
  sentence. FAQs render from faqs/ib-physics-tutor-delhi.php.
--}}
@php
  $dipSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $dipA = function (string $slug, string $label) use ($dipSlugs) {
      return in_array($slug, $dipSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="dipGuideTitle">
  <h2 id="dipGuideTitle">IB physics tutor in Delhi: data, uncertainty and long answers, at SL or HL</h2>

  <p class="nx-guide__lede">
    Most Delhi students meet physics through CBSE, where a well-practised numerical earns its marks. DP Physics asks for
    more than that. Students are handed experiments they have never seen and asked what the graph means, they write
    explanations that need three connected steps, and they design an investigation of their own. The course first
    examined in 2025 puts weight on exactly those skills. This page, from the NXTutors Academic Team, sets out the
    themes, the papers, how uncertainty work should be taught, what a tutor may do for the internal assessment, and how
    IB physics tuition is arranged across Delhi. Its parent pages are
    <a href="{{ url('/physics-home-tutor-delhi') }}">physics home tutors in Delhi</a> and the Delhi
    <a href="{{ url('/ib-tutor-delhi') }}">IB hub</a>.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#dip-themes">The five themes</a> ·
    <a href="#dip-papers">Papers and weights</a> ·
    <a href="#dip-level">SL or HL</a> ·
    <a href="#dip-example">A worked data example</a> ·
    <a href="#dip-paper2">Paper 2 technique</a> ·
    <a href="#dip-ia">The investigation</a> ·
    <a href="#dip-cbse">From CBSE, ICSE or IGCSE</a> ·
    <a href="#dip-plan">The two years</a> ·
    <a href="#dip-travel">Tutors by zone</a> ·
    <a href="#dip-mode">Home or online</a> ·
    <a href="#dip-demo">Demo questions</a> ·
    <a href="#dip-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="dip-themes">The five themes, and the five topics only HL students study</h2>
  <p>
    The current guide drops the old core-and-options design. Everyone studies five themes; SL is planned for 150 hours
    and HL for 240. Within shared topics, HL students also meet additional higher-level understandings, so "the same
    topic" is not always the same depth.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>DP Physics themes with HL-only topics</caption>
    <thead>
      <tr><th scope="col">Theme</th><th scope="col">In plain terms, everyone studies</th><th scope="col">Added for HL</th></tr>
    </thead>
    <tbody>
      <tr><td>A: space, time and motion</td><td>Describing motion, then forces, momentum, and energy and power</td><td>A.4 rigid bodies; A.5 relativity, Galilean and special</td></tr>
      <tr><td>B: particulate nature of matter</td><td>Heat transfer, the greenhouse effect, gases, and electric circuits</td><td>B.4 thermodynamics</td></tr>
      <tr><td>C: wave behaviour</td><td>Oscillations, waves and their behaviour, resonance, the Doppler effect</td><td>No separate topic, but deeper HL content</td></tr>
      <tr><td>D: fields</td><td>Gravity, electric and magnetic fields, and charged particles moving in them</td><td>D.4 induction</td></tr>
      <tr><td>E: nuclear and quantum physics</td><td>The atom, decay, fission, and fusion in stars</td><td>E.2 quantum physics</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dip-papers">Two papers and an investigation: how the grade is built</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>DP Physics assessment, first examined 2025</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL</th><th scope="col">HL</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1A: multiple choice</td><td>25 questions</td><td>40 questions</td><td rowspan="2">36%, sat together: 1 h 30 min SL, 2 h HL</td></tr>
      <tr><td>Paper 1B: data-based questions</td><td>20 marks</td><td>20 marks</td></tr>
      <tr><td>Paper 2: short and extended answers</td><td>55 marks, 1 h 30 min</td><td>90 marks, 2 h 30 min</td><td>44%</td></tr>
      <tr><td>Scientific investigation (IA)</td><td>24 marks</td><td>24 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Wrong answers in Paper 1A cost nothing, so nothing should be left blank. Calculators and a clean physics data booklet
    are allowed on both papers. The booklet saves memorising equations, but choosing the right one under time pressure is
    exactly what many questions are testing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dip-level">SL or HL physics?</h2>
  <p>
    HL makes sense for a student aiming at engineering or a physics-based degree who enjoys algebra and extended
    arguments; on top of the five HL-only topics it brings a much longer Paper 2. SL suits a student taking physics as
    their experimental science while their main subjects lie elsewhere. SL still covers all five themes and is not a soft option. Watch the
    maths pairing too: an HL physicist taking AI SL maths may need extra help with calculus and vectors, a point our
    <a href="{{ url('/ib-maths-tutor-delhi') }}">IB maths tutor in Delhi</a> page discusses.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dip-example">A worked data example: what Paper 1B practice looks like</h2>
  <p>
    Paper 1B gives students an unfamiliar experiment and asks them to reason about it. Here is the kind of five-minute
    exercise a tutor should run at the end of most sessions, using a simple pendulum.
  </p>
  <ol>
    <li><strong>Find the straight line.</strong> The period is T = 2π√(L/g), so plotting T against L gives a curve. Squaring both sides gives T² = (4π²/g)L: plot T² on the y-axis against L and the line should pass through the origin.</li>
    <li><strong>Read the gradient physically.</strong> The gradient equals 4π²/g, so g = 4π² ÷ gradient. A student should say this before touching a calculator.</li>
    <li><strong>Carry the uncertainty.</strong> If the period has a 2% uncertainty, T² carries 4%, because squaring doubles the percentage uncertainty. Error bars on the T² values should reflect that.</li>
    <li><strong>Draw the extreme lines.</strong> Steepest and shallowest lines through the error bars give a range for the gradient, and so for g.</li>
    <li><strong>Evaluate honestly.</strong> A line that misses the origin suggests a systematic error, such as measuring length to the top of the bob rather than its centre. "Repeat the readings" is not an improvement; timing many oscillations and dividing is.</li>
  </ol>
  <p>
    Ten minutes like this, every week through DP1, does more for Paper 1B than any pre-mock cramming. More examples are in the
    <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL/HL, IA and EE guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dip-paper2">Paper 2: collecting every mark in a long answer</h2>
  <p>
    Long Paper 2 questions tend to climb: a number to calculate, a reason to give, then the same idea in a context the
    student has not seen, occasionally linking two themes. The marks that go missing are predictable. Answers with no
    equation written down; one-line replies to "explain"; and, most often, revision done chapter by chapter, so the
    student freezes when a question about fields turns into a question about energy. The cure is a loop: attempt, mark against the IB markscheme,
    rewrite. Two or three rewritten answers a week teach more than a pile of new questions nobody checks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dip-ia">The scientific investigation: help with skills, never with the work</h2>
  <p>
    SL and HL students do an identical IA, built on the template biology and chemistry also use. Over roughly 10 hours
    of class time, the student poses a research question, gathers or sources numerical data, analyses it and writes it
    up within 3,000 words. Marking uses four criteria worth 6 each, covering design, analysis, the conclusion and the
    evaluation. The data may be collected in the lab or the field, or drawn from a simulation, a database or a
    spreadsheet model. Groups of up to three are allowed, yet every member needs a separate research question and their
    own raw data.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>A tutor may</h3>
  <p>
    Explain the four criteria, help the student judge whether an idea is feasible and has enough physics in it, and
    teach graphing, linearising and uncertainty analysis well before the IA window opens.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>A tutor may not</h3>
  <p>
    Pick the research question, plan the procedure, crunch the data, or draft or correct the write-up. Doing so
    breaches the IB's academic-integrity rules; the student's supervisor at school signs off the work as their own.
  </p>
    </div>
  </div>
  <p>
    The collaborative sciences project that schools also run is a different, interdisciplinary exercise and does not
    count towards the IA.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dip-cbse">Arriving in DP Physics from CBSE, ICSE, IGCSE or the MYP</h2>
  <p>
    CBSE is the board most Delhi students sit, so many DP classes include students who studied CBSE Class 10 science.
    They are usually quick with numericals and standard derivations, but data-based questions, written explanations and
    designing an investigation are new. ICSE students bring careful working and need uncertainty work and the IB's open
    questions. IGCSE Extended students know much of the mechanics, waves and electricity, yet meet more algebra and
    fields as a unifying idea. MYP students are at home with inquiry and need speed in exam calculation. In every case a
    short block on graphs, vectors and uncertainties before DP1, ideally in the summer break, makes the first term
    calmer. Cambridge students can also look at the <a href="{{ url('/igcse-physics-tutor-delhi') }}">IGCSE physics
    tutor in Delhi</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dip-plan">How tutoring time spreads over DP1 and DP2</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A typical DP Physics tutoring plan</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Focus</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Before or at the start of DP1</td><td>Graphs, vectors, the uncertainty toolkit, kinematics</td><td>One or two</td></tr>
      <tr><td>Through DP1</td><td>Mechanics, matter and waves in step with school; one data question weekly</td><td>One at SL, two at HL</td></tr>
      <tr><td>IA window</td><td>Criteria, feasibility, analysis skills only</td><td>Two or three sessions in total</td></tr>
      <tr><td>Second year</td><td>Fields and the nuclear and quantum theme; then full timed papers, marked</td><td>Two, more before mocks</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dip-travel">IB physics tutors across Delhi: six routes</h2>
  <p>
    Tutors experienced in DP Physics are a small group, so we look at the journey before the postcode.
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/delhi/zone/saket-malviya-nagar-hauz-khas') }}">Saket, Malviya Nagar and Hauz Khas</a>.</strong> {!! $dipA('sainik-farm', 'Sainik Farm') !!} needs an auto or cab from Saket or Qutub Minar on the Yellow Line. Houses have private gates and staff, so send the tutor's name and exact lane beforehand.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/vasant-kunj-vasant-vihar-palam') }}">Vasant Kunj, Vasant Vihar and Palam</a>.</strong> {!! $dipA('palam', 'Palam') !!} has a Magenta Line station, and most homes are doorstep visits along narrow lanes. Our zone notes add that an IB specialist may be easier to find online for this part of the city.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/dwarka') }}">Dwarka</a>.</strong> {!! $dipA('dwarka-sector-13', 'Dwarka Sector 13') !!} has its own Blue Line station, and many societies are a walk from it; set up standing permission at the gate for a regular tutor.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/janakpuri-rajouri-garden-punjabi-bagh') }}">Janakpuri, Rajouri Garden and Punjabi Bagh</a>.</strong> {!! $dipA('tilak-nagar', 'Tilak Nagar') !!} is on the Blue Line; market lanes are crowded in the evening, so metro plus a short e-rickshaw ride beats driving.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/pitampura-model-town-north-campus') }}">Pitampura, Model Town and North Campus</a>.</strong> {!! $dipA('gtb-nagar', 'GTB Nagar') !!} has a Yellow Line station within walking distance of most homes; earlier evening slots avoid the worst traffic.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/laxmi-nagar-preet-vihar-shahdara') }}">Laxmi Nagar, Preet Vihar and Shahdara</a>.</strong> {!! $dipA('nirman-vihar', 'Nirman Vihar') !!} has a Blue Line station on Vikas Marg, so a metro tutor walks to the house; slots before the evening rush suit most families.</li>
  </ul>
  <p>
    A tutor who has to cross the Yamuna at rush hour will struggle to keep a fixed weekday slot; one from your own side,
    or online sessions, usually holds better. Every locality is on the <a href="{{ url('/city/delhi') }}">Delhi home tutors
    page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dip-mode">Home or online for IB physics</h2>
  <p>
    A shared screen handles a great deal of IB physics: data questions, marking against the markscheme and talking
    through an IA idea. It also lets you choose from IB-experienced tutors anywhere, not only those near your colony.
    In-person sessions earn their place for long, multi-step Paper 2 problems and for students who concentrate better
    with a tutor at the table. Many families
    combine one home session with one or two online sessions, all with the same tutor. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online comparison</a> sets out the general
    trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dip-demo">Questions to ask in the IB physics demo</h2>
  <ol>
    <li>Can the tutor name the five themes and the HL-only topics? Talk of "options" means they are teaching the old course.</li>
    <li>Ask them to show steepest and shallowest gradient lines on a graph with error bars.</li>
    <li>Ask about the IA. A good tutor states, unprompted, the help they will refuse to give.</li>
    <li>Is the IB markscheme their marking tool, and do they make the student redo lost-mark answers?</li>
    <li>Do they know which parts of shared topics are additional higher level?</li>
    <li>Which metro line brings them to you, and what is the plan on weeks they cannot travel?</li>
  </ol>
  <p>
    Not convinced after the demo? Say so, and we line up the next matched tutor for another free demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dip-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor fixes their own fee, which you see before the demo. The <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and our <a href="{{ url('/blog/home-tuition-fees-delhi') }}">home tuition fees in Delhi</a> post explain
    what moves it.
  </p>
  <p>
    Your request should give the level and DP year, the sticking point (a theme, the data questions, long answers or
    the IA), your colony or nearest station, and the times you are free. Two or three matched tutors come back; one of
    them takes a <a href="{{ url('/demo-class') }}">free demo class</a>, and moving to a different tutor later is free.
    Every tutor who joins clears an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> first. Meanwhile, look at
    <a href="{{ url('/tutors') }}">tutor profiles</a>, read the national
    <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> guide, or see our page on
    <a href="{{ url('/ib-igcse-chemistry-tutor-delhi') }}">IB and IGCSE chemistry tuition in Delhi</a>.
  </p>
  </section>

  </div>
</article>
