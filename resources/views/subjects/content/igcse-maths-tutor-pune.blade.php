{{--
  Long-form guide for the "IGCSE maths tutor Pune" page. Author: Ajay
  Vatsyayan (role: IB, IGCSE and ISC maths). No anecdotes, years or results are
  claimed for him. No schools, societies or other people are named.

  Syllabus facts are reworded from igcse-maths-tutor-gurgaon, which cites the
  Cambridge IGCSE Mathematics 0580 syllabus for exams in 2025, 2026 and 2027
  (version 3) and the 0606 Additional Mathematics syllabus for 2025-2027
  (cambridgeinternational.org): Core Papers 1 (no calculator) and 3
  (calculator), 1 h 30 min, 80 marks each; Extended Papers 2 (no calculator)
  and 4 (calculator), 2 h, 100 marks each; each paper 50%; Core grades C-G,
  Extended A*-E; scientific calculator, graphical/algebraic not permitted;
  answers on the question paper, working required; June and November series,
  March series available to schools in India; nine topic areas, not in
  teaching order; about 130 guided learning hours; 2025 content changes (Core
  gained inequalities and recall of squares, cubes and roots, lost vector
  operations and data collection; Extended gained surds, domain and range,
  exact trigonometric values and more graph forms, lost linear programming,
  proper subsets, congruence criteria, box-and-whisker plots and data
  collection); command words; three significant figures, angles to one
  decimal place, calculator pi or 3.142, no premature rounding; M, A and B
  marks; examiner reports; 0606 two papers of 2 h and 80 marks, Paper 1
  without and Paper 2 with a calculator, grades A*-E. No other dates.

  Local detail only from database/seo-content/zones/pune.json,
  areas/pune-research.json, pune-zone-guides.json and the Pune hub view
  (Warje: Vanaz nearest metro, gated complexes, highway junction at peak;
  Bavdhan: Vanaz nearest, Chandani Chowk slow at peak, tutors from Kothrud,
  Pashan or Warje; Pimple Nilakh: no metro, bridge crossings slow, tutors from
  Aundh, Baner, Wakad or Pimple Saudagar; Yerawada: Yerwada Aqua Line station,
  independent houses and apartment registers; Salunke Vihar: Swargate nearest,
  independent homes and societies; Undri: no metro, tutors from Kondhwa, NIBM
  Road or Hadapsar; hub: IGCSE tier and command words; Viman Nagar and KP
  zones: online specialists for IB/IGCSE). Area links render only for active
  Pune areas. Fee wording is the approved sentence. FAQs render from
  faqs/igcse-maths-tutor-pune.php.
--}}
@php
  $pigmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pigmA = function (string $slug, string $label) use ($pigmSlugs) {
      return in_array($slug, $pigmSlugs, true)
          ? '<a href="' . e(url('/city/pune/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="pigmGuideTitle">
  <h2 id="pigmGuideTitle">IGCSE maths tutors in Pune: Cambridge 0580 from the first Grade 9 lesson to the final series</h2>

  <p class="nx-guide__lede">
    Cambridge IGCSE Mathematics rewards a student who is exact, quick without a calculator and careful with working,
    and it punishes one who is entered at the wrong tier. Those are the three things I look at first when a Pune family
    asks for help, whether the child has just moved from a State Board, CBSE or ICSE school or is a Grade 10 student
    whose mock marks have slipped. I teach IB, IGCSE and ISC maths on NXTutors. This page explains how the 0580
    syllabus is examined for the 2025 to 2027 series, what a tutor should be doing each term, and how we find someone
    who can reach your part of Pune or teach online. The board as a whole is covered on our
    <a href="{{ url('/igcse-tutor-pune') }}">IGCSE tutors in Pune</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pigm-tier">Core or Extended</a> ·
    <a href="#pigm-topics">The nine topic areas</a> ·
    <a href="#pigm-changes">2025 changes</a> ·
    <a href="#pigm-hand">Working by hand</a> ·
    <a href="#pigm-marks">How marks are given</a> ·
    <a href="#pigm-0606">Additional Maths</a> ·
    <a href="#pigm-series">Choosing a series</a> ·
    <a href="#pigm-new">New to Cambridge</a> ·
    <a href="#pigm-zones">Tutors by zone</a> ·
    <a href="#pigm-demo">The demo</a> ·
    <a href="#pigm-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pigm-tier">Core or Extended: the decision that caps the grade</h2>
  <p>
    Every 0580 candidate takes two papers worth half the grade each: one with no calculator allowed and one where a
    scientific calculator is required. Graphical and algebraic calculators are not permitted, answers are written on
    the question paper, and working must be shown.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The two tiers of Cambridge IGCSE Mathematics 0580</caption>
    <thead>
      <tr><th scope="col"></th><th scope="col">Core</th><th scope="col">Extended</th></tr>
    </thead>
    <tbody>
      <tr><td>Without a calculator</td><td>Paper 1, 80 marks, 1 h 30 min</td><td>Paper 2, 100 marks, 2 h</td></tr>
      <tr><td>With a calculator</td><td>Paper 3, 80 marks, 1 h 30 min</td><td>Paper 4, 100 marks, 2 h</td></tr>
      <tr><td>Grades available</td><td>C to G</td><td>A* to E</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A Core candidate cannot score above a C, however strong the papers. That matters for any student who wants an A,
    plans IB Analysis and Approaches or A Level maths, or is heading for a science stream. Schools usually set groups in
    Grade 9 and confirm entries on Grade 10 mock results, so a family that believes its child belongs in Extended
    should raise it early and use the months before the mocks to cover the Extended content. Our
    <a href="{{ url('/blog/igcse-coreextended-maths') }}">Core and Extended maths guide</a> covers the choice in detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pigm-topics">The nine topic areas, and where marks usually leak</h2>
  <p>
    The syllabus is written in nine areas, which Cambridge does not put in a teaching order, and is designed around
    roughly 130 guided learning hours. Schools in Pune will sequence them differently, so a tutor should follow the
    school and keep a running list of what is still to come.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>0580 topic areas with a common weak point in each</caption>
    <thead>
      <tr><th scope="col">Topic area</th><th scope="col">Where students often drop marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Number</td><td>Bounds, standard form and fraction arithmetic without a calculator</td></tr>
      <tr><td>Algebra and graphs</td><td>Rearranging formulae, factorising quadratics, reading gradients from a sketch</td></tr>
      <tr><td>Coordinate geometry</td><td>Equation of a line through two points; perpendicular gradients on Extended</td></tr>
      <tr><td>Geometry</td><td>Circle theorems stated with the correct reason</td></tr>
      <tr><td>Mensuration</td><td>Units of area and volume; arc length and sector area</td></tr>
      <tr><td>Trigonometry</td><td>Choosing between sine and cosine rules; bearings</td></tr>
      <tr><td>Transformations and vectors</td><td>Describing a transformation fully, with every required detail</td></tr>
      <tr><td>Probability</td><td>Tree diagrams without replacement</td></tr>
      <tr><td>Statistics</td><td>Estimating a mean from grouped data; reading cumulative frequency</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pigm-changes">What changed from 2025, and why older books need care</h2>
  <p>
    The syllabus for the 2025 to 2027 series moved several topics. On Core, inequalities and the recall of certain
    squares, cubes and roots came in, while vector operations and data collection went out. On Extended, surds,
    domain and range, exact trigonometric values, the same recall requirement and more types of graph came in, while
    linear programming, proper subsets, congruence criteria, box-and-whisker plots and data collection went out.
    Books and past papers bought from older students are still useful, but a tutor has to skip what has gone and find
    fresh practice for what is new.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pigm-hand">Half the grade by hand</h2>
  <p>
    Because one of the two papers forbids a calculator, a student who has leaned on one since primary school starts
    the course at a disadvantage. In my sessions the first few minutes are always calculator-free: estimating by
    rounding to one significant figure, dividing by a fraction, simplifying indices, and on Extended, rationalising
    surds and recalling exact values of sine, cosine and tangent for the standard angles. None of this is difficult,
    but done every week for a term it changes how a student approaches the whole non-calculator paper, and it frees
    time for the longer questions at the end.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pigm-marks">How marks are given, and how to keep them</h2>
  <p>
    Cambridge mark schemes award method marks (M), accuracy marks (A) and independent marks (B), and the examiner
    reports written after each series list the mistakes candidates made most. Unless a question says otherwise,
    non-exact answers go to three significant figures, angles to one decimal place, π is the calculator value or 3.142,
    and nothing should be rounded before the last line. "Exact" means leave a surd or π in the answer.
  </p>
  <ul>
    <li><strong>"Show that"</strong> supplies the answer, so every mark is for the method.</li>
    <li><strong>"Write down"</strong> signals a quick mark with little or no working.</li>
    <li><strong>"Calculate" or "work out"</strong> wants the method on the page, so that a slip still earns something.</li>
    <li><strong>"Sketch"</strong> means the shape and key features labelled; <strong>"plot"</strong> means accurate points.</li>
  </ul>
  <p>
    A tutor who marks practice papers in this M, A and B way, and reads the examiner reports, teaches more in an hour
    than one who ticks final answers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pigm-0606">Additional Mathematics 0606</h2>
  <p>
    Some schools also enter strong students for Additional Mathematics. It goes beyond Extended into further
    functions, logarithms and an introduction to calculus, and is examined in two papers of two hours and 80 marks
    each, the first without a calculator and the second with one, graded A* to E. It is a good bridge to IB AA HL or A
    Level maths, but only for a student already secure on Extended, and ideally with the same tutor for both courses.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pigm-series">June, November or March: planning back from the series</h2>
  <p>
    Cambridge runs June and November series, and schools in India can also enter candidates in March. The tutor's plan
    starts from your child's series and the school's own term dates, which in international schools rarely match the
    State Board and CBSE calendar that neighbours are following. Roughly: one session a week through Grade 9, following
    school topics and building the calculator-free habit; one or two in the first half of Grade 10, closing gaps
    before the mocks; and two in the final months, with full papers in the correct tier timed and marked the Cambridge
    way.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pigm-new">New to Cambridge from SSC, CBSE or ICSE</h2>
  <p>
    Students who join an IGCSE school from another board usually find the arithmetic familiar and much of the algebra
    too. The unfamiliar parts are set notation and Venn diagrams, transformations and vectors, function notation and
    inverse functions on Extended, and, more than any topic, the style: short prompts, little guidance and accuracy
    rules applied on every calculator question. ICSE students, used to setting out working, tend to adapt fastest;
    State Board and CBSE students often need extra time on multi-step questions with no hints. A tutor should begin
    with an audit of Cambridge topics the student has never met. If your child will move on to the IB Diploma after Grade 10,
    the <a href="{{ url('/ib-maths-tutor-pune') }}">IB maths tutors in Pune</a> page explains that next stage; our comparison of
    <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge and Edexcel IGCSE</a> helps if your school uses
    the other board.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pigm-zones">Reaching IGCSE maths students across Pune</h2>
  <p>
    The zone notes below come from our research on each locality. Where the journey is long, the guides suggest a
    nearby tutor for most of the week and an online specialist where needed.
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/pune/zone/kothrud-karve-nagar-deccan') }}">Kothrud, Karve Nagar and Deccan</a>.</strong> {!! $pigmA('warje', 'Warje') !!} is mostly gated complexes with Vanaz the nearest metro; avoid the busiest hours at the highway junction.</li>
    <li><strong><a href="{{ url('/city/pune/zone/aundh-baner-pashan') }}">Aundh, Baner and Pashan</a>.</strong> For {!! $pigmA('bavdhan', 'Bavdhan') !!}, tutors usually ride in from Kothrud, Pashan or Warje, and Chandani Chowk is slow at peak hours.</li>
    <li><strong><a href="{{ url('/city/pune/zone/wakad-hinjewadi-pimpri-chinchwad') }}">Wakad, Hinjewadi and Pimpri-Chinchwad</a>.</strong> {!! $pigmA('pimple-nilakh', 'Pimple Nilakh') !!} has no station; tutors come from Aundh, Baner, Wakad or Pimple Saudagar, and the bridges slow down at office hours.</li>
    <li><strong><a href="{{ url('/city/pune/zone/viman-nagar-kalyani-nagar-kharadi') }}">Viman Nagar, Kalyani Nagar and Kharadi</a>.</strong> {!! $pigmA('yerawada', 'Yerawada') !!} has its own Aqua Line station, so tutors from Deccan or Shivajinagar can come by metro.</li>
    <li><strong><a href="{{ url('/city/pune/zone/koregaon-park-camp-wanowrie') }}">Koregaon Park, Camp and Wanowrie</a>.</strong> {!! $pigmA('salunke-vihar', 'Salunke Vihar') !!} has no metro nearby, so most tutors come by two-wheeler, bus or auto.</li>
    <li><strong><a href="{{ url('/city/pune/zone/hadapsar-kondhwa-nibm') }}">Hadapsar, Kondhwa and NIBM</a>.</strong> In {!! $pigmA('undri', 'Undri') !!}, give clear directions to the gate and tower, since many tutors will come from Kondhwa, NIBM Road or Hadapsar.</li>
  </ul>
  <p>
    Online IGCSE maths works if the tutor can see the working: a second camera on the notebook rather than a page held
    up to the screen. Our guide to <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring</a>
    compares the two.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pigm-demo">What to look for in the IGCSE maths demo</h2>
  <ol>
    <li><strong>Syllabus code and tier.</strong> The tutor should ask whether it is 0580 Core or Extended, or 0606, before starting.</li>
    <li><strong>A calculator-free warm-up.</strong> Do they test the student's arithmetic by hand?</li>
    <li><strong>Marking.</strong> Hand over a marked school paper and ask the tutor to separate M, A and B marks.</li>
    <li><strong>Command words.</strong> Ask what "show that" requires.</li>
    <li><strong>The changed topics.</strong> Ask which topics came in or went out from 2025.</li>
    <li><strong>A plan to the series.</strong> What happens between now and the mocks?</li>
  </ol>
  <p>
    If the fit is wrong, tell us; the next matched tutor gets their own free demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pigm-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee, shown before the demo; see the <a href="{{ url('/pricing-guide') }}">pricing guide</a>
    and <a href="{{ url('/blog/home-tuition-fees-pune') }}">home tuition fees in Pune</a>.
  </p>
  <p>
    Send us the syllabus code, tier, series, grade, your area and free slots. We match two or three tutors, you choose
    one for a <a href="{{ url('/demo-class') }}">free demo class</a>, and switching tutor later is free. Tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live. Browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>, or see <a href="{{ url('/igcse-physics-tutor-pune') }}">IGCSE physics</a>
    and <a href="{{ url('/ib-igcse-chemistry-tutor-pune') }}">IB and IGCSE chemistry</a> tutors in Pune and our
    <a href="{{ url('/maths-home-tutor-pune') }}">maths home tutors in Pune</a> page.
  </p>
  </section>

  </div>
</article>
