{{--
  Long-form guide for the "IB physics tutor Lucknow" page. Byline: NXTutors
  Academic Team. No schools, societies, hospitals or people are named.

  Course facts are reworded from ib-physics-tutor-gurgaon, which cites the IB
  Diploma Programme Physics guide, first assessment 2025 (ibo.org): five themes
  A to E and their topics, with A.4, A.5, B.4, D.4 and E.2 HL only; SL 150 h /
  HL 240 h; Paper 1A multiple choice (SL 25, HL 40 questions) and Paper 1B
  data-based questions (20 marks), sat together, 36% (SL 1 h 30 min, HL 2 h);
  Paper 2 (SL 1 h 30 min, 55 marks; HL 2 h 30 min, 90 marks) 44%; IA
  scientific investigation 24 marks, 20%, about 10 hours, 3,000-word maximum,
  four criteria of 6 marks; groups of up to three with individual research
  questions and no shared raw data; data from lab work, fieldwork,
  spreadsheets, databases or simulations; no penalty for wrong MCQ answers;
  calculators and the data booklet on both papers; collaborative sciences
  project. Topic titles and the four IA criterion names (research design,
  data analysis, conclusion, evaluation) checked against the Physics guide
  text held in the scratchpad (ibphy.txt). No other dates.

  Local detail only from database/seo-content/zones/lucknow.json,
  areas/lucknow-research.json, lucknow-zone-guides.json and the Lucknow hub
  (IB taken by a smaller number of students; online helps when the right IB
  teacher lives across the city; Chinhat no metro, houses and highway
  townships; Nirala Nagar parks and wide roads, IT College station, evening
  traffic towards Hazratganj; Hazratganj underground station, flats above
  shops, limited parking, evening and weekend crowds; Krishna Nagar station
  in Baldi Khera, houses with parking; Telibagh no metro, Raebareli Road;
  Jankipuram Extension sectors still filling, map pin, online for specialist
  subjects). No request data is claimed. Area links render only for active
  Lucknow areas. Fee wording is the approved sentence. FAQs render from
  faqs/ib-physics-tutor-lucknow.php.
--}}
@php
  $libpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $libpA = function (string $slug, string $label) use ($libpSlugs) {
      return in_array($slug, $libpSlugs, true)
          ? '<a href="' . e(url('/city/lucknow/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="libpGuideTitle">
  <h2 id="libpGuideTitle">IB physics tutor in Lucknow: data skills every week, not just before the exam</h2>

  <p class="nx-guide__lede">
    IB Diploma physics is examined in a way that surprises students used to CBSE or ISC papers. A large part of the
    grade asks a student to read a graph, handle uncertainties, or reason from data they have never seen, rather than
    recall a derivation. With a smaller IB community in Lucknow, a tutor who teaches this course specifically is worth
    seeking out, even if that means some lessons online. This page, from the NXTutors Academic Team, sets out how the
    current course is assessed and what good tutoring for it looks like. It sits under our
    <a href="{{ url('/physics-home-tutor-lucknow') }}">physics home tutors in Lucknow</a> page and the
    <a href="{{ url('/ib-tutor-lucknow') }}">IB tutors in Lucknow</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#libp-themes">The five themes</a> ·
    <a href="#libp-papers">Papers and weights</a> ·
    <a href="#libp-1b">Paper 1B</a> ·
    <a href="#libp-booklet">Data booklet and calculator</a> ·
    <a href="#libp-ia">The scientific investigation</a> ·
    <a href="#libp-plan">Pacing DP1 and DP2</a> ·
    <a href="#libp-from">From CBSE or ISC physics</a> ·
    <a href="#libp-zones">Reaching you in Lucknow</a> ·
    <a href="#libp-mode">Home or online</a> ·
    <a href="#libp-demo">The demo</a> ·
    <a href="#libp-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="libp-themes">Five themes, and the topics only HL students meet</h2>
  <p>
    The course, first assessed in 2025, is organised into five themes. Standard Level is planned for 150 teaching hours
    and Higher Level for 240; the extra HL time goes partly into depth across the course and partly into five topics
    that SL students do not study.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>IB DP Physics themes, with the HL-only topic in each</caption>
    <thead>
      <tr><th scope="col">Theme</th><th scope="col">Examples of topics for all students</th><th scope="col">HL only</th></tr>
    </thead>
    <tbody>
      <tr><td>A. Space, time and motion</td><td>Kinematics; forces and momentum; work, energy and power</td><td>A.4 Rigid body mechanics; A.5 Galilean and special relativity</td></tr>
      <tr><td>B. The particulate nature of matter</td><td>Thermal energy transfers; greenhouse effect; gas laws; current and circuits</td><td>B.4 Thermodynamics</td></tr>
      <tr><td>C. Wave behaviour</td><td>Simple harmonic motion; wave model; wave phenomena; standing waves and resonance; Doppler effect</td><td>None</td></tr>
      <tr><td>D. Fields</td><td>Gravitational fields; electric and magnetic fields; motion in electromagnetic fields</td><td>D.4 Induction</td></tr>
      <tr><td>E. Nuclear and quantum physics</td><td>Structure of the atom; radioactive decay; fission; fusion and stars</td><td>E.2 Quantum physics</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For an HL student, those five topics are where a tutor often earns their fee: rotational dynamics and relativity
    are conceptually new for most students, and thermodynamics and induction reward careful, repeated practice. For
    the choice between levels, our <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">guide to IB physics SL, HL, the
    IA and the EE</a> helps.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="libp-papers">Two exam papers and an investigation</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How the final IB physics grade is made up</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">What it contains</th><th scope="col">SL</th><th scope="col">HL</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1 (1A and 1B together)</td><td>Multiple-choice questions, then data-based questions worth 20 marks</td><td>90 minutes; 25 MCQs</td><td>2 hours; 40 MCQs</td><td>36%</td></tr>
      <tr><td>Paper 2</td><td>Structured and extended questions across the syllabus</td><td>90 minutes; 55 marks</td><td>2 h 30 min; 90 marks</td><td>44%</td></tr>
      <tr><td>Scientific investigation</td><td>An individual investigation, internally marked</td><td colspan="2">24 marks at both levels</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Wrong multiple-choice answers carry no penalty, so a student should never leave one blank. More usefully, the
    multiple-choice section is a test of quick, clean reasoning: estimating, checking units and spotting which option
    is physically impossible. That is trained with short daily sets, not with a single weekly block.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="libp-1b">Paper 1B: easy to under-prepare</h2>
  <p>
    Paper 1B gives data-based questions, often drawn from an experimental context the student has not met. The marks
    go to reading a graph accurately, linearising a relationship, finding a gradient with its uncertainty, and
    explaining what a result means. These are laboratory skills tested on paper. A student strong in theory can still
    lose many of these 20 marks through rushed plotting or careless error bars.
  </p>
  <p>
    A good tutor builds Paper 1B work into ordinary sessions from DP1: one short data question each week, marked
    strictly for significant figures, units and uncertainty. By the time the student reaches past papers, the method is
    routine and the time can go into the physics.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="libp-booklet">The data booklet and the calculator are part of the course</h2>
  <p>
    Calculators and the physics data booklet are allowed on both papers. That does not make the booklet a crutch: a
    student who searches it for every formula loses minutes on each question. The aim is to know what is in it, and
    where, so it confirms rather than supplies. Tutors should make students work from the same booklet in practice,
    and should teach which relationships it does not contain, so they are learnt properly.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="libp-ia">The scientific investigation, within the rules</h2>
  <p>
    The internal assessment is a scientific investigation worth 24 marks, a fifth of the grade at both levels. The IB
    plans about ten hours for it, and the written report has a 3,000-word maximum. It is marked against four criteria
    of six marks each: research design, data analysis, conclusion and evaluation. Students may work in groups of up to
    three, but each needs their own research question and must not share raw data. Data can come from laboratory
    work, fieldwork, spreadsheets, databases or simulations, which matters for students whose school lab time is
    limited.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>What a tutor may do</h3>
  <p>
    Teach the physics behind an idea, explain uncertainty analysis and graphing in general, discuss what each criterion
    rewards, and ask questions that help the student narrow a research question.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>What a tutor must not do</h3>
  <p>
    Choose the question, design the method, process the student's data, or write or edit any part of the report. The
    student should tell their school teacher about outside help.
  </p>
    </div>
  </div>
  <p>
    The course also includes a collaborative sciences project carried out in school with students from other science
    subjects; it is not something an outside tutor supervises.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="libp-plan">Pacing IB physics tutoring across DP1 and DP2</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A typical rhythm for IB physics sessions over the two Diploma years</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">What sessions concentrate on</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Start of DP1</td><td>Graphs, units, uncertainties and command terms; mechanics alongside the school</td><td>One or two</td></tr>
      <tr><td>Rest of DP1</td><td>Keeping pace with school topics; one Paper 1B data question and a short multiple-choice set every week</td><td>One or two</td></tr>
      <tr><td>Investigation phase</td><td>The physics and the uncertainty methods the student's idea needs; no design or drafting help</td><td>As before</td></tr>
      <tr><td>DP2 to mocks</td><td>Remaining topics, HL-only topics given extra time; timed Paper 2 questions</td><td>Two</td></tr>
      <tr><td>Mocks to May</td><td>Full papers under time, marked against markschemes; an error log by theme</td><td>Two or three</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    International schools set their own calendars, so the tutor should take test weeks and internal deadlines from the
    school, not from the board-exam season that most of Lucknow follows.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="libp-from">Arriving from CBSE or ISC physics</h2>
  <p>
    A student who joins the Diploma in Lucknow from a CBSE or ICSE school will find most of the content of DP physics
    familiar. The adjustment lies elsewhere. Indian board students are used to derivations and numericals solved by formula; the IB rewards interpreting unfamiliar data, explaining reasoning in words, and
    treating uncertainty as part of every measurement. Students also meet relativity and some quantum ideas earlier
    and in more conceptual form.
  </p>
  <p>
    A few weeks at the start of DP1 on graph skills, uncertainty and the language of command terms such as "explain",
    "deduce" and "estimate" make the rest of the course easier. If the student is also considering engineering abroad
    or in India, the tutor should keep the mathematics of mechanics and fields sharp; see our
    <a href="{{ url('/ib-maths-tutor-lucknow') }}">IB maths tutors in Lucknow</a> page for the maths side.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="libp-zones">Reaching you: IB physics tutors across Lucknow</h2>
  <p>
    Specialists are few, so we check the route carefully. Notes from our zone guides:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/lucknow/zone/gomti-nagar-indira-nagar-chinhat') }}">Gomti Nagar, Indira Nagar and Chinhat</a>.</strong> {!! $libpA('chinhat', 'Chinhat') !!} has no metro, so tutors drive or ride in from Gomti Nagar or Indira Nagar; a late-afternoon or weekend slot keeps clear of highway traffic.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/mahanagar-aliganj-jankipuram') }}">Mahanagar, Aliganj and Jankipuram</a>.</strong> {!! $libpA('nirala-nagar', 'Nirala Nagar') !!} is near IT College station, so a tutor from across the city can come by metro; start slightly earlier on school days. In {!! $libpA('jankipuram-extension', 'Jankipuram Extension') !!}, send a map pin, and expect online lessons for a specialist.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/hazratganj-lalbagh-aminabad') }}">Hazratganj, Lalbagh and Aminabad</a>.</strong> {!! $libpA('hazratganj', 'Hazratganj') !!} has its own underground Red Line station and little parking, so a metro-riding tutor is the steady choice; late weekday afternoons avoid the shopping crowds.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/alambagh-ashiyana-rajajipuram') }}">Alambagh, Ashiyana and Rajajipuram</a>.</strong> {!! $libpA('krishna-nagar', 'Krishna Nagar') !!} has its own station with Singar Nagar and Transport Nagar either side, and houses where a tutor can park at the door.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/sushant-golf-city-vrindavan-yojana-telibagh') }}">Sushant Golf City, Vrindavan Yojana and Telibagh</a>.</strong> {!! $libpA('telibagh', 'Telibagh') !!} is reached by road along Raebareli Road; an online physics specialist from across the city often makes more sense than a long weekly drive.</li>
  </ul>
  <p>
    See every locality on the <a href="{{ url('/city/lucknow') }}">Lucknow home tutors page</a>, or read our
    <a href="{{ url('/blog/gomti-nagar-and-trans-gomti-tuition-guide') }}">Gomti Nagar and Trans-Gomti</a> and
    <a href="{{ url('/blog/central-and-south-lucknow-tuition-guide') }}">central and south Lucknow</a> guides.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="libp-mode">Home lessons, online lessons, or both</h2>
  <p>
    Physics gains from a tutor at the table when a student needs to see a quick demonstration with household objects,
    or when a long derivation needs watching line by line. Online lessons suit Paper 1B practice well: graphs can be
    shared on screen, simulations run live, and annotated scripts returned the same evening. One sensible split is
    one format for teaching and the other for practice. Whichever you choose, ask for a camera on the notebook so the
    tutor sees the working, not just the answer. Our guide to
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring</a> covers the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="libp-demo">Six checks in the free demo</h2>
  <ol>
    <li><strong>Does the tutor ask for the level and DP year</strong> before teaching?</li>
    <li><strong>Uncertainty.</strong> Ask how they would find the uncertainty in a gradient. The answer should be clear and practical.</li>
    <li><strong>Paper 1B.</strong> Ask how often they would set data questions; "every week" is the right answer.</li>
    <li><strong>HL topics.</strong> For HL, ask how they would introduce rigid body mechanics or special relativity.</li>
    <li><strong>The investigation.</strong> Listen for firm limits on their role.</li>
    <li><strong>Route and timing.</strong> Which road or station, and a plan for congested evenings.</li>
  </ol>
  <p>
    If the demo does not suit, the next matched tutor gives their own free demo. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more ideas.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="libp-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee and you see it before the demo; see the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our post on
    <a href="{{ url('/blog/home-tuition-fees-lucknow') }}">home tuition fees in Lucknow</a>.
  </p>
  <p>
    Tell us the level, DP year, what is difficult, your locality and your free slots. You receive two or three matched
    tutors, the first class is a <a href="{{ url('/demo-class') }}">free demo</a>, and switching tutor later is free.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified, and you can browse <a href="{{ url('/tutors') }}">tutor profiles</a>. For other sciences, see
    <a href="{{ url('/ib-igcse-chemistry-tutor-lucknow') }}">IB and IGCSE chemistry</a> and, for younger Cambridge
    students, <a href="{{ url('/igcse-physics-tutor-lucknow') }}">IGCSE physics</a> tutors in Lucknow.
  </p>
  </section>

  </div>
</article>
