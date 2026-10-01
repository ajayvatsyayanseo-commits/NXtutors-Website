{{--
  Long-form guide for the "IB and IGCSE chemistry tutor Hyderabad" page.
  Byline: NXTutors Academic Team. No schools, societies or people are named.

  Course facts are reworded from ib-igcse-chemistry-tutor-gurgaon and
  ib-igcse-chemistry-tutor-mumbai, which cite the IB DP Chemistry guide,
  first assessment 2025 (ibo.org: Structure and Reactivity framework, SL
  150 h / HL 240 h; Paper 1A multiple choice SL 30 / HL 40 questions; Paper
  1B data-based and experimental questions SL 25 / HL 35 marks; Paper 1 36%,
  1 h 30 min SL / 2 h HL; Paper 2 SL 1 h 30 min 50 marks, HL 2 h 30 min 90
  marks, 44%; IA scientific investigation 24 marks, 20%, 3,000-word maximum,
  four criteria of 6 marks; data booklet; no penalty for wrong MCQ answers)
  and the Cambridge IGCSE Chemistry 0620 syllabus for 2026, 2027 and 2028
  (version 2, August 2026, no substantial changes affecting teaching;
  cambridgeinternational.org): Core Papers 1 + 3, Extended Papers 2 + 4,
  Paper 5 or 6 practical; MCQ 40 questions 45 min 30%; theory 80 marks
  1 h 15 min 50%; practical 40 marks 20%; Core C-G, Extended A*-G; AO
  weightings 50/30/20; twelve topics; qualitative analysis notes supplied in
  Papers 5 and 6. No other dates.

  Telangana facts from tgbienew.cgg.gov.in (TGBIE circular of 01-10-2026:
  first-year Chemistry 60 theory + 15-mark external practical; validation
  rules: chemistry practical judged on reactions, colour changes, equations,
  calculations and inferences) and bse.telangana.gov.in (G.O.Ms.No.15 of
  2018: Telugu compulsory to Class X in every school), as cited in
  telangana-board-tutor-hyderabad. Local detail only from areas/hyderabad-
  research.json, hyderabad-zone-guides.json and zones/hyderabad.json. Area
  links render only for active Hyderabad areas. Fee wording is the approved
  sentence. FAQs render from faqs/ib-igcse-chemistry-tutor-hyderabad.php.
--}}
@php
  $hchSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $hchA = function (string $slug, string $label) use ($hchSlugs) {
      return in_array($slug, $hchSlugs, true)
          ? '<a href="' . e(url('/city/hyderabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="hchGuideTitle">
  <h2 id="hchGuideTitle">Chemistry tutors for Hyderabad's international schools: IGCSE 0620, then IB DP</h2>

  <p class="nx-guide__lede">
    A Hyderabad student in an international school usually meets chemistry twice as an exam subject: Cambridge
    IGCSE 0620 at the end of Grade 10, then, for Diploma students, IB Chemistry at SL or HL two years later. These
    share a backbone, especially the mole, bonding and organic reactions, but they examine it differently, and
    a tutor who knows both can make the step between them much smoother. This page sets out each course as Cambridge's
    and the IB's current documents describe it, the skills that carry from one to the other, and how we find a tutor
    who can reach your part of Hyderabad. Other boards are covered on
    <a href="{{ url('/chemistry-home-tutor-hyderabad') }}">chemistry home tutors in Hyderabad</a>; for other subjects,
    see the city's <a href="{{ url('/ib-tutor-hyderabad') }}">IB</a> and <a href="{{ url('/igcse-tutor-hyderabad') }}">IGCSE</a>
    tutor pages.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#hch-0620">What 0620 candidates sit</a> ·
    <a href="#hch-topics">Content in four blocks</a> ·
    <a href="#hch-lab">Practical skills</a> ·
    <a href="#hch-mole">The mole, start to finish</a> ·
    <a href="#hch-dp">DP Chemistry framework</a> ·
    <a href="#hch-dpexam">DP assessment</a> ·
    <a href="#hch-ia">The IA</a> ·
    <a href="#hch-routes">Other routes after Grade 10</a> ·
    <a href="#hch-zones">Tutors by zone</a> ·
    <a href="#hch-demo">Demo</a> ·
    <a href="#hch-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="hch-0620">Cambridge IGCSE Chemistry 0620: the three papers</h2>
  <p>
    Cambridge describes its 2026 to 2028 syllabus as having no substantial changes that affect teaching, which means
    papers from the last few series are still useful. Every candidate takes three components:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>0620 components by tier</caption>
    <thead>
      <tr><th scope="col">What it tests</th><th scope="col">Core</th><th scope="col">Extended</th><th scope="col">Format</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Breadth and recall at speed</td><td>Paper 1</td><td>Paper 2</td><td>40 multiple-choice questions, 45 minutes</td><td>30%</td></tr>
      <tr><td>Understanding and application</td><td>Paper 3</td><td>Paper 4</td><td>80 marks of structured questions, 1 hour 15 minutes</td><td>50%</td></tr>
      <tr><td>Experimental skills</td><td colspan="2">Paper 5 (practical test) or Paper 6 (written alternative), chosen by the school</td><td>40 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A Core entry can earn C to G; an Extended entry can earn anything from A* down to G. The assessment objectives are weighted 50% to knowledge
    and understanding, 30% to handling information and solving problems, and 20% to experimental skills, so half the
    grade depends on applying chemistry, not just remembering it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hch-topics">Twelve syllabus topics, revised as four blocks</h2>
  <p>
    The syllabus has twelve numbered topics. For revision planning we suggest four blocks:
  </p>
  <ul>
    <li><strong>Block one, particles and amounts:</strong> the states of matter, then atoms, elements and compounds, then stoichiometry.</li>
    <li><strong>Block two, change:</strong> electrochemistry, chemical energetics, and chemical reactions with their rates and equilibria.</li>
    <li><strong>Block three, patterns:</strong> acids, bases and salts; the Periodic Table; metals; and the environment.</li>
    <li><strong>Block four, carbon and the lab:</strong> organic chemistry, plus experimental techniques and chemical analysis.</li>
  </ul>
  <p>
    Stoichiometry and electrochemistry deserve extra time from a tutor, because the calculations and
    half-equations build on each other. Salt preparation questions also reward a clear sequence of steps: choosing the
    method, then the reagents, then the separation and drying.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hch-lab">Preparing for the practical component at home</h2>
  <p>
    Papers 5 and 6 test the same skills, and the qualitative analysis notes for identifying ions and gases are
    supplied in the paper, so students should practise using them rather than memorising them. A home tutor can cover:
  </p>
  <ul>
    <li>reading a method and naming the apparatus and safety precautions it needs;</li>
    <li>recording observations precisely ("white precipitate", not "it went cloudy");</li>
    <li>using the supplied notes to deduce an ion or gas from a set of observations;</li>
    <li>planning a simple investigation with a fair test and a results table;</li>
    <li>chromatography and Rf values, titration readings, and the errors typical of each.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hch-mole">The mole, from Grade 9 to DP2</h2>
  <p>
    If one idea links the two courses, it is the mole. At IGCSE it appears as reacting masses, concentrations and,
    for Extended candidates, gas volumes; in the Diploma it underpins energetics, equilibrium and acid-base work. A
    student who is shaky with moles in Grade 10 will be shaky through most of DP Chemistry. A tutor should therefore
    treat mole calculations as a skill to be practised briefly every week, not a chapter to be finished: three short
    problems at the start of each session, mixed across types, until they are routine.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hch-dp">DP Chemistry as two linked strands</h2>
  <p>
    Since the guide first examined in 2025, IB Chemistry is no longer a list of chapters but two strands, Structure
    and Reactivity, each in three parts. Teaching time is 150 hours at SL and 240 at HL.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The six parts of the course, with a tutor's angle on each</caption>
    <thead>
      <tr><th scope="col">Part</th><th scope="col">Content in brief</th><th scope="col">Tutor's angle</th></tr>
    </thead>
    <tbody>
      <tr><td>Structure 1</td><td>Models of matter: atomic structure, electron configurations, amounts of substance, gases</td><td>Mole fluency carried over from IGCSE</td></tr>
      <tr><td>Structure 2</td><td>Ionic, covalent and metallic bonding, and the materials they produce</td><td>Linking bonding type to properties every time</td></tr>
      <tr><td>Structure 3</td><td>Classifying matter: periodic trends and organic functional groups</td><td>Naming and trend questions practised little and often</td></tr>
      <tr><td>Reactivity 1</td><td>Energy: enthalpy and energy cycles, with entropy and spontaneity added at HL</td><td>Cycle diagrams drawn before any arithmetic</td></tr>
      <tr><td>Reactivity 2</td><td>Amount, rate and extent of change</td><td>Equilibrium reasoning in words as well as numbers</td></tr>
      <tr><td>Reactivity 3</td><td>Mechanisms grouped by what is transferred or shared: protons, electrons, electron pairs</td><td>Curly arrows checked line by line</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The framework rewards students who connect ideas: an acid-base question may draw on bonding, equilibrium and
    energetics at once. A tutor should regularly ask "which structure idea explains this reaction?" rather than
    teaching each topic in isolation.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hch-dpexam">Exam papers and internal assessment in the DP</h2>
  <ul>
    <li><strong>Paper 1, 36%:</strong> a multiple-choice section, 1A, of 30 questions at SL or 40 at HL, followed by 1B, which sets data and experiment questions worth 25 marks at SL or 35 at HL; both are sat in one session in 1 hour 30 minutes at SL or 2 hours at HL. Wrong multiple-choice answers carry no penalty.</li>
    <li><strong>Paper 2, 44%:</strong> short and extended questions, 50 marks in 1 hour 30 minutes at SL, 90 marks in 2 hours 30 minutes at HL.</li>
    <li><strong>Internal assessment, 20%:</strong> the student's own scientific investigation, scored out of 24 across four equally weighted criteria, with a 3,000-word ceiling on the report.</li>
  </ul>
  <p>
    Candidates have the chemistry data booklet in the exam room, so students should learn to find values in it quickly rather
    than memorising them. Paper 1B is the component that most separates students who have done practical work
    thoughtfully from those who have only read about it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hch-ia">The IB investigation: a tutor's limits</h2>
  <p>
    A tutor may teach the chemistry and the data-analysis techniques the student needs, explain the four criteria and
    ask questions that help the student check whether their idea is safe and possible in the time available. The
    question, the method, the data handling and every word of the report have to be the student's; a tutor who
    supplies any of them breaches the IB's academic-integrity rules. Students should tell their chemistry teacher about any outside
    help.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hch-routes">After 0620: DP, Intermediate or ISC</h2>
  <p>
    Not every Hyderabad student who sits IGCSE continues to the Diploma. Some join the state's Intermediate course, often
    BiPC or MPC, and some move to ISC or CBSE. For Intermediate, chemistry has new first-year textbooks from 2026-27,
    with 60 theory marks and a 15-mark external practical in the first year, judged on reactions, colour changes,
    equations, calculations and inferences; our <a href="{{ url('/telangana-board-tutor-hyderabad') }}">Telangana Board
    tutors</a> page explains the scheme. Students aiming at the state entrance should read our
    <a href="{{ url('/ts-eapcet-tutor-hyderabad') }}">TG EAPCET tutors</a> page, and those heading for medicine our
    <a href="{{ url('/neet-home-tutor-hyderabad') }}">NEET home tutors in Hyderabad</a> page.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A common weekly pattern from Grade 9 to the end of the Diploma</caption>
    <thead>
      <tr><th scope="col">Year</th><th scope="col">How often</th><th scope="col">Emphasis</th></tr>
    </thead>
    <tbody>
      <tr><td>IGCSE Grade 9</td><td>One</td><td>Particles, bonding, first mole problems</td></tr>
      <tr><td>IGCSE Grade 10</td><td>One or two</td><td>Electrochemistry, organic chemistry, practical-paper questions, timed papers</td></tr>
      <tr><td>Summer before DP1</td><td>A short bridging block</td><td>Moles, bonding and equations to DP standard</td></tr>
      <tr><td>DP1</td><td>One or two</td><td>Structure and reactivity topics in school order; weekly Paper 1B-style questions</td></tr>
      <tr><td>DP2</td><td>Usually two for HL; SL students often manage with one</td><td>Remaining topics, then full papers against markschemes</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hch-zones">IB and IGCSE chemistry tutors by zone</h2>
  <p>
    Notes from our area research on how tutors reach each part of Hyderabad:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/hyderabad/zone/gachibowli-kondapur-madhapur') }}">Gachibowli, Kondapur and Madhapur</a>:</strong> {!! $hchA('kondapur', 'Kondapur') !!} has no station inside it; tutors use HITEC City on the Blue Line or Hafeezpet on the MMTS, then an auto, and gated societies register them at the gate.</li>
    <li><strong><a href="{{ url('/city/hyderabad/zone/banjara-hills-jubilee-hills-somajiguda') }}">Banjara Hills, Jubilee Hills and Somajiguda</a>:</strong> {!! $hchA('banjara-hills', 'Banjara Hills') !!} is reached from Punjagutta on the Red Line or Jubilee Hills Check Post on the Blue Line, with an auto up the numbered roads.</li>
    <li><strong><a href="{{ url('/city/hyderabad/zone/khairatabad-himayatnagar-abids') }}">Khairatabad, Himayatnagar and Abids</a>:</strong> {!! $hchA('himayatnagar', 'Himayatnagar') !!} is close to Narayanguda and Chikkadpally on the Green Line; slots that start before the evening rush are easier.</li>
    <li><strong><a href="{{ url('/city/hyderabad/zone/secunderabad-marredpally-tarnaka') }}">Secunderabad, Marredpally and Tarnaka</a>:</strong> {!! $hchA('tarnaka', 'Tarnaka') !!} has its own Blue Line station, and parking near the main road is scarce, so a tutor arriving by metro is simpler.</li>
    <li><strong><a href="{{ url('/city/hyderabad/zone/uppal-habsiguda-nacharam') }}">Uppal, Habsiguda and Nacharam</a>:</strong> {!! $hchA('boduppal', 'Boduppal') !!} is mostly independent houses; tutors come by Blue Line to Uppal or Nagole and an auto, and online lessons fill the gap when a specialist cannot travel this far east.</li>
    <li><strong><a href="{{ url('/city/hyderabad/zone/dilsukhnagar-lb-nagar-vanasthalipuram') }}">Dilsukhnagar, LB Nagar and Vanasthalipuram</a>:</strong> {!! $hchA('dilsukhnagar', 'Dilsukhnagar') !!} has its own Red Line station; the main road is very busy, so early-evening or weekend slots are easier to keep.</li>
  </ul>
  <p>
    Every locality is listed on our <a href="{{ url('/city/hyderabad') }}">Hyderabad tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hch-mode">Home or online for chemistry</h2>
  <p>
    Mole calculations, equations and mechanism arrows are easiest to correct when the tutor can see the page as it is
    written, which favours home sessions. Online works well for Paper 1 practice, data-booklet drills and reviewing
    marked papers, and it widens the choice of IB HL specialists, who are few in any city. Families in the eastern and
    outer western colonies often combine the two. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home
    versus online tutoring</a> post sets out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hch-demo">Five checks during the chemistry demo</h2>
  <ol>
    <li><strong>Course details first.</strong> A good tutor asks about tier and practical paper for 0620, or level and DP year for the IB, before teaching.</li>
    <li><strong>A mole problem.</strong> Ask the tutor to teach one at your child's level and see whether the method is clear enough to reuse.</li>
    <li><strong>Practical thinking.</strong> For IGCSE, a Paper 6 question; for the DP, a Paper 1B-style data question.</li>
    <li><strong>The IA line.</strong> The tutor should say clearly that the question, method and report are the student's.</li>
    <li><strong>Getting here.</strong> Which station or road, and the plan for a heavy-traffic week.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hch-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor's fee is shown before the demo; our <a href="{{ url('/pricing-guide') }}">pricing guide</a> and the
    <a href="{{ url('/blog/home-tuition-fees-hyderabad') }}">Hyderabad fees</a> post explain what moves it.
  </p>
  <p>
    Tell us the course and level, the grade, any IA deadline, your locality and free hours. You receive two or three
    matched tutors and book a <a href="{{ url('/demo-class') }}">free demo</a> with the one you prefer; a later change
    costs nothing, and tutors who join pass an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> first. On the same track, see
    <a href="{{ url('/ib-physics-tutor-hyderabad') }}">IB physics</a> and
    <a href="{{ url('/igcse-physics-tutor-hyderabad') }}">IGCSE physics</a> tutors in Hyderabad, or browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>.
  </p>
  </section>

  </div>
</article>
