{{--
  Long-form guide for the "IB and IGCSE chemistry tutor Chennai" page. Byline:
  NXTutors Academic Team. No schools, societies or people are named.

  Course facts are reworded from ib-igcse-chemistry-tutor-gurgaon (via
  ib-igcse-chemistry-tutor-mumbai), which cites the IB DP Chemistry guide,
  first assessment 2025 (ibo.org: Structure and Reactivity framework, SL 150 h
  / HL 240 h; Paper 1A multiple choice SL 30 / HL 40 questions; Paper 1B
  data-based and experimental questions SL 25 / HL 35 marks; Paper 1 36%, 1 h
  30 min SL / 2 h HL; Paper 2 SL 1 h 30 min 50 marks, HL 2 h 30 min 90 marks,
  44%; IA scientific investigation 24 marks, 20%, 3,000-word maximum, four
  criteria of 6 marks; data booklet; no penalty for wrong MCQ answers) and the
  Cambridge IGCSE Chemistry 0620 syllabus for 2026, 2027 and 2028 (version 2,
  August 2026, no substantial changes affecting teaching;
  cambridgeinternational.org): Core Papers 1 + 3, Extended Papers 2 + 4, Paper
  5 or 6 practical; MCQ 40 questions 45 min 30%; theory 80 marks 1 h 15 min
  50%; practical 40 marks 20%; Core C-G, Extended A*-G; AO weightings
  50/30/20; twelve topics; qualitative analysis notes supplied in Papers 5 and
  6. No other dates.

  Local detail only from database/seo-content/zones/chennai.json,
  chennai-research.json and chennai-zone-guides.json (Velachery: MRTS since
  2007 and the March 2026 extension to St Thomas Mount, Vijayanagar junction,
  apartment complexes register visitors; Anna Nagar: three Green Line
  stations, avenue grid; KK Nagar: numbered sectors, Ashok Nagar Green Line
  station, bus terminus; Tambaram: one of four main railway terminals,
  suburban trains to Guindy and Mambalam, GST Road at office hours;
  Royapuram: 1856 station with suburban trains, narrow lanes, limited parking;
  Perambur: three suburban stations on the Avadi and Arakkonam line, market
  roads crowded in the evening) and the city hub. Area links render only for
  active Chennai areas. Fee wording is the approved sentence. FAQs render from
  faqs/ib-igcse-chemistry-tutor-chennai.php.
--}}
@php
  $cchSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cchA = function (string $slug, string $label) use ($cchSlugs) {
      return in_array($slug, $cchSlugs, true)
          ? '<a href="' . e(url('/city/chennai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="cchGuideTitle">
  <h2 id="cchGuideTitle">IB and IGCSE chemistry tutor in Chennai: one subject, two very different exams</h2>

  <p class="nx-guide__lede">
    On Chennai's international route, chemistry tends to come in two stages. Grades 9 and 10 bring Cambridge's 0620
    syllabus; the last two school years bring the IB Diploma course, taken at SL or HL. Much of the science overlaps,
    yet the two exams want different things. Cambridge pays for exact recall, neat working and confident lab language.
    The IB regroups everything under structure and reactivity, sets unseen data in the exam, and makes each student
    design and run an investigation. A tutor fluent in both can walk a student from one to the other without starting
    again in Grade 11. Below: both courses as currently examined, the practical skills each tests, the boundary on help
    with the IB investigation, and how tutoring for these boards works across Chennai. See also
    <a href="{{ url('/chemistry-home-tutor-chennai') }}">chemistry home tutors in Chennai</a> and the city's
    <a href="{{ url('/ib-tutor-chennai') }}">IB</a> and <a href="{{ url('/igcse-tutor-chennai') }}">IGCSE</a> hubs.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cch-papers">0620 papers</a> ·
    <a href="#cch-content">The 0620 content</a> ·
    <a href="#cch-mole">A mole routine</a> ·
    <a href="#cch-lab">Practical papers</a> ·
    <a href="#cch-frame">The IB framework</a> ·
    <a href="#cch-dp">How the DP is examined</a> ·
    <a href="#cch-ia">The IA and its limits</a> ·
    <a href="#cch-bridge">From Grade 10 to DP1</a> ·
    <a href="#cch-zones">Routes to your home</a> ·
    <a href="#cch-mode">Home or online</a> ·
    <a href="#cch-demo">The demo</a> ·
    <a href="#cch-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cch-papers">Cambridge IGCSE Chemistry 0620: the three papers</h2>
  <p>
    The 0620 syllabus covering 2026 to 2028 came out as version 2 in August 2026; Cambridge describes the revision as
    making no substantial difference to teaching. Each candidate takes three components:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Chemistry 0620 components</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">Core</th><th scope="col">Extended</th><th scope="col">Length and marks</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple choice</td><td>Paper 1</td><td>Paper 2</td><td>40 questions, 45 minutes</td><td>30%</td></tr>
      <tr><td>Theory</td><td>Paper 3</td><td>Paper 4</td><td>80 marks, 75 minutes</td><td>50%</td></tr>
      <tr><td>Practical</td><td colspan="2">The school picks Paper 5, a hands-on test of 75 minutes, or Paper 6, a written alternative of 60 minutes</td><td>40 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The Core route can lead to grades C to G, the Extended route to A* to G, and anyone likely to earn a C or higher
    belongs on Extended. Cambridge weights the whole qualification at one half for knowledge and understanding, three
    tenths for handling information and solving problems, and one fifth for experimental skill.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cch-content">The twelve topics, grouped for revision</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>0620 syllabus topics in three revision blocks</caption>
    <thead>
      <tr><th scope="col">Block</th><th scope="col">Syllabus topics in it</th><th scope="col">Where marks usually go</th></tr>
    </thead>
    <tbody>
      <tr><td>Particles, amounts and analysis</td><td>Stoichiometry; atoms, elements and compounds; the states of matter; experimental techniques and chemical analysis</td><td>Dot-and-cross diagrams; on Extended, moles with solutions and gas volumes; Rf values; tests for ions and gases</td></tr>
      <tr><td>Reactions and energy</td><td>Electrochemistry; acids, bases and salts; chemical reactions; chemical energetics</td><td>Energy profile diagrams; rate and equilibrium explanations; electrolysis products; choosing how to prepare a salt</td></tr>
      <tr><td>Elements and materials</td><td>Organic chemistry; metals; chemistry of the environment; the Periodic Table</td><td>Group trends; extraction and reactivity; naming organic compounds and their reaction types</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cch-mole">A mole routine that lasts from Grade 9 to DP2</h2>
  <p>
    Able Extended candidates lose a grade on the theory paper more often through stoichiometry than anything else,
    and it is equally the topic where extra teaching shows results soonest, since a single routine handles almost
    every question:
  </p>
  <ul>
    <li><strong>Equation first.</strong> Balance it; the ratio between substances comes from here and nowhere else.</li>
    <li><strong>Into moles.</strong> Convert what you are given (a mass, a volume of gas, or a concentration with a volume) after fixing the units.</li>
    <li><strong>Across the ratio.</strong> Use the balanced equation to get moles of the substance you want.</li>
    <li><strong>Out of moles.</strong> Turn the answer into whatever form the question asks for.</li>
    <li><strong>Sense check.</strong> Are the units right, are the significant figures sensible, and is the number plausible?</li>
  </ul>
  <p>
    Drilled from the opening term, this makes percentage yield, purity and titration problems ordinary by Grade 10,
    and the DP course then builds on ground that is already solid.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cch-lab">Paper 5 or Paper 6 without chemicals at home</h2>
  <p>
    In Cambridge's view the hands-on and written practical papers assess one set of skills in one set of situations;
    the only difference is whether students do the experiment or read about it. Each paper prints notes for
    qualitative analysis, which spares students from learning every test by heart, though they still need to find the
    right line fast and describe what they see in Cambridge's terms. Worth rehearsing: precise readings of volume,
    mass, temperature and time; burette reading and when titres count as concordant; describing colour changes,
    precipitates and gas tests; planning an experiment with its variables, controls, equipment and hazards; and
    picking out results that do not fit. Since chemicals stay in the school lab, home sessions use genuine past
    practical questions, apparatus sketches and repeated practice of the observation wording.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cch-frame">IB DP Chemistry: structure and reactivity</h2>
  <p>
    Since its first assessment in 2025, the IB course has been organised around two linked strands. The IB
    recommends 150 teaching hours at SL and 240 at HL.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Structure</h3>
  <p>
    Structure 1 models matter as particles, taking in the nuclear atom, electron arrangements, the mole and the ideal
    gas. Structure 2 covers ionic, covalent and metallic bonding and how they explain materials. Structure 3 classifies
    matter using the periodic table and functional groups.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Reactivity</h3>
  <p>
    Reactivity 1 asks what drives a reaction, through enthalpy and energy cycles, adding entropy and spontaneity for
    HL. Reactivity 2 deals with the amount of change, its rate and its extent. Reactivity 3 treats mechanisms as four
    kinds of change: proton transfer, electron transfer, electron sharing and electron-pair sharing.
  </p>
    </div>
  </div>
  <p>
    A student used to separate physical, inorganic and organic chapters may feel lost at first. It helps when the
    tutor names the links aloud, for instance how a functional group met under Structure 3 predicts the reaction
    types studied under Reactivity 3.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cch-dp">How DP Chemistry is examined</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>IB DP Chemistry assessment, first assessment 2025</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL</th><th scope="col">HL</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1A, multiple choice</td><td>30 questions</td><td>40 questions</td><td rowspan="2">36% in all; 90 minutes at SL, 2 hours at HL</td></tr>
      <tr><td>Paper 1B, data and experimental work</td><td>25 marks</td><td>35 marks</td></tr>
      <tr><td>Paper 2, short and extended answers</td><td>50 marks, 90 minutes</td><td>90 marks, 150 minutes</td><td>44%</td></tr>
      <tr><td>Scientific investigation</td><td>24 marks</td><td>24 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Students have a calculator and the data booklet for both papers, and guessing on multiple choice carries no
    penalty. In Paper 1B the stimulus might be a titration curve, a rate graph or a table of enthalpy data the student
    has never seen, followed by calculations with uncertainty and suggestions for a better method. Paper 2 marks are
    usually lost on equations that do not balance, state symbols left off, curly arrows drawn to the wrong atom, and
    trends described with no explanation. HL goes deeper in most topics, and its 90-mark Paper 2 needs timed practice
    to build stamina.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cch-ia">The IB investigation: what a tutor may and may not do</h2>
  <p>
    SL and HL students complete the same internal assessment: a research question of their own, quantitative data
    they collect and analyse, and a report capped at 3,000 words. Four criteria (research design, data analysis,
    conclusion, evaluation) carry six marks each. Good chemistry IAs tend to be tightly focused: a single variable
    changed, a single outcome measured, and enough readings to reveal a trend together with its uncertainty.
  </p>
  <ul>
    <li><strong>Allowed:</strong> explaining what each criterion looks for; helping the student check that an idea is safe and possible with school equipment; teaching the underlying chemistry; and building graphing, error analysis and uncertainty skills long before the IA period.</li>
    <li><strong>Not allowed:</strong> selecting the question, planning the method, working on the data, or drafting or correcting the write-up. Under the IB's academic-integrity rules that would endanger the diploma, and the school's supervisor must confirm the work is the student's.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cch-bridge">From Grade 10 to DP1, and choosing the level</h2>
  <p>
    Good Extended mole work is a sound base, though the DP picks up speed on amounts of substance almost at once.
    Bonding grows from dot-and-cross diagrams into shapes, polarity and forces between molecules, and handling data
    with uncertainty, a minor theme at IGCSE, becomes central. Students set on medicine, chemistry or chemical
    engineering who are comfortable with numbers usually choose HL; those who need a science alongside other
    priorities often choose SL. A short bridging block in the holiday before DP1 makes the first weeks calmer. Anyone
    moving from Cambridge to an Indian board for Class 11, including the State Board's +1, will find the
    <a href="{{ url('/chemistry-home-tutor/class-11') }}">Class 11 chemistry tutor</a> page more relevant.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A typical chemistry tutoring rhythm on the international route</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Weekly sessions</th></tr>
    </thead>
    <tbody>
      <tr><td>Grade 9 (IGCSE)</td><td>One</td></tr>
      <tr><td>Grade 10, including practical-paper preparation</td><td>One, sometimes two</td></tr>
      <tr><td>Holiday before DP1</td><td>Several sessions to bridge the gap</td></tr>
      <tr><td>DP1</td><td>One, sometimes two</td></tr>
      <tr><td>Around the IA</td><td>Occasional skills sessions, nothing on the report</td></tr>
      <tr><td>DP2</td><td>HL usually two; SL one or two</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cch-zones">How chemistry tutors reach homes across Chennai</h2>
  <p>
    Specialists for the international chemistry papers are fewer than tutors for the Indian boards, so the journey
    matters:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/chennai/zone/velachery-guindy-tambaram') }}">Velachery, Guindy and Tambaram</a>.</strong> {!! $cchA('velachery', 'Velachery') !!} has had an MRTS station since 2007, and the line now runs on to St Thomas Mount; avoid lesson times that collide with the Vijayanagar junction rush. Further south, {!! $cchA('tambaram', 'Tambaram') !!} is one of the area's main railway terminals, so tutors from Chromepet or Perungalathur can come by train, with an auto for the last stretch.</li>
    <li><strong><a href="{{ url('/city/chennai/zone/anna-nagar-kilpauk-aminjikarai') }}">Anna Nagar, Kilpauk and Aminjikarai</a>.</strong> {!! $cchA('anna-nagar', 'Anna Nagar') !!} has three underground Green Line stations, and the numbered avenues make homes easy to find.</li>
    <li><strong><a href="{{ url('/city/chennai/zone/vadapalani-kk-nagar-porur') }}">Vadapalani, KK Nagar and Porur</a>.</strong> {!! $cchA('kk-nagar', 'KK Nagar') !!}'s sectors and streets are numbered, and Ashok Nagar on the Green Line is the nearest metro.</li>
    <li><strong><a href="{{ url('/city/chennai/zone/perambur-kolathur-north-chennai') }}">Perambur, Kolathur and North Chennai</a>.</strong> {!! $cchA('perambur', 'Perambur') !!} has three suburban stations on the line towards Avadi and Arakkonam; {!! $cchA('royapuram', 'Royapuram') !!}, whose 1856 station still has suburban trains, has narrow lanes and little parking, so train, bus or auto is the easier way in.</li>
  </ul>
  <p>
    All localities are on the <a href="{{ url('/city/chennai') }}">Chennai home tutors page</a>, and the
    <a href="{{ url('/blog/south-chennai-tuition-guide') }}">south Chennai</a> and
    <a href="{{ url('/blog/west-and-north-chennai-tuition-guide') }}">west and north Chennai</a> tuition guides give
    more on travel.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cch-mode">Home or online for IB and IGCSE chemistry</h2>
  <p>
    Drawing mechanisms, structures and practical apparatus is easiest side by side at a table. Data questions,
    marking against the scheme and talking through an IA idea work just as well over video, and going online opens up
    specialists from beyond your part of the city when nobody nearby knows the course. A common Chennai arrangement is
    one lesson at home and one online each week, both with the same tutor, so a slow evening on the roads never wipes
    out a week.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cch-demo">What to check in the chemistry demo</h2>
  <ol>
    <li>Before teaching, did the tutor pin down the course: 0620 at Core or Extended with Paper 5 or 6, or the DP at SL or HL?</li>
    <li>For DP students, are lessons framed in the Structure and Reactivity strands, not the old chapter list?</li>
    <li>Are official mark schemes, Cambridge or IB, used every week?</li>
    <li>Watch them lay out a mole problem: would your child be able to copy that layout?</li>
    <li>Do they set out the limits on investigation help before you raise it?</li>
    <li>What is their route to you, and what time of day can they reliably arrive?</li>
  </ol>
  <p>
    Not convinced after the demo? Let us know, and another matched tutor will give a free demo of their own.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cch-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors price their own sessions, and the figure is on the profile before any demo. The
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our <a href="{{ url('/blog/home-tuition-fees-chennai') }}">Chennai
    tuition fees</a> post explain what changes it.
  </p>
  <p>
    Write to us with the course, the grade or DP year, the topics that worry you, your locality and nearest station,
    and the hours that suit. Two or three tutors are shortlisted; one teaches a <a href="{{ url('/demo-class') }}">free
    demo class</a>, and changing later costs nothing. An <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> is
    part of joining for every tutor. You can also look at <a href="{{ url('/tutors') }}">tutor profiles</a>, our
    national <a href="{{ url('/chemistry-home-tutor') }}">chemistry</a> page, and Chennai pages for
    <a href="{{ url('/ib-physics-tutor-chennai') }}">IB physics</a> and
    <a href="{{ url('/igcse-physics-tutor-chennai') }}">IGCSE physics</a>.
  </p>
  </section>

  </div>
</article>
