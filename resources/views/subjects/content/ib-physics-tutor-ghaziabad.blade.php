{{--
  Long-form guide for the "IB physics tutor Ghaziabad" page. Byline: NXTutors
  Academic Team. No schools, societies or people are named.

  Course facts are reworded from ib-physics-tutor-mumbai and
  ib-physics-tutor-gurgaon, which cite the IB Diploma Programme Physics guide,
  first assessment 2025 (ibo.org): five themes A to E and their topics, with
  A.4 rigid body mechanics, A.5 Galilean and special relativity, B.4
  thermodynamics, D.4 induction and E.2 quantum physics HL only; SL 150 h /
  HL 240 h; Paper 1A multiple choice (SL 25, HL 40 questions) and Paper 1B
  data-based questions (20 marks), sat together, 36% (SL 1 h 30 min, HL 2 h);
  Paper 2 (SL 1 h 30 min, 55 marks; HL 2 h 30 min, 90 marks) 44%; IA
  scientific investigation 24 marks, 20%, about 10 hours, 3,000-word maximum,
  four criteria of 6 marks (research design, data analysis, conclusion,
  evaluation); groups of up to three with individual research questions and
  no shared raw data; data from lab work, fieldwork, spreadsheets, databases
  or simulations; no penalty for wrong MCQ answers; calculators and the data
  booklet on both papers; collaborative sciences project. No other dates.

  IB presence only as the Ghaziabad hub states it ("the IB and Cambridge IGCSE
  serve a smaller group"; specialists fewer, online helps). Local detail only
  from database/seo-content/areas/ghaziabad-research.json,
  ghaziabad-zone-guides.json and zones/ghaziabad.json (Nyay Khand 3 between
  Vaishali and Noida Electronic City stations, Dr Sushila Naiyar Marg busy at
  office hours; Gyan Khand 3 near Vasundhara Sectors 14 and 15, Vaishali
  station; Vaishali Sector 9 apartment complexes, Vaishali station then
  e-rickshaw along Madan Mohan Malviya Marg; Vasundhara Sector 4 apartments,
  Mohan Nagar or Vaishali; Vasundhara Sector 15 apartments, Vaishali station;
  Mohan Nagar station one of the busiest in Ghaziabad, GT Road and the market
  crowded at shift and office hours). Area links render only for active
  Ghaziabad areas. Fee wording is the approved sentence. FAQs render from
  faqs/ib-physics-tutor-ghaziabad.php.
--}}
@php
  $ipgzSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ipgzA = function (string $slug, string $label) use ($ipgzSlugs) {
      return in_array($slug, $ipgzSlugs, true)
          ? '<a href="' . e(url('/city/ghaziabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="ipgzGuideTitle">
  <h2 id="ipgzGuideTitle">IB physics tutor in Ghaziabad: the 2025 course, data questions and an investigation the student owns</h2>

  <p class="nx-guide__lede">
    IB Diploma physics changed shape for students examined from 2025: the old core and options are gone, every student
    now studies five themes, and a new data-based section sits inside Paper 1. A tutor who learnt the subject on the
    previous guide, or who mainly teaches Class 12 board physics, can miss those changes. Since IB families are a
    smaller group in Ghaziabad than board families, the specialist who fits may live in Noida or East Delhi, so this
    page also covers how tutors get to each part of the city and when online lessons make more sense. It is written by
    the NXTutors Academic Team and sits under our <a href="{{ url('/physics-home-tutor-ghaziabad') }}">physics home
    tutors in Ghaziabad</a> page and the <a href="{{ url('/ib-tutor-ghaziabad') }}">IB tutors in Ghaziabad</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ipgz-themes">Themes A to E</a> ·
    <a href="#ipgz-assess">Papers and weights</a> ·
    <a href="#ipgz-level">SL or HL</a> ·
    <a href="#ipgz-1b">Paper 1B skills</a> ·
    <a href="#ipgz-p2">Paper 2 answers</a> ·
    <a href="#ipgz-ia">The investigation</a> ·
    <a href="#ipgz-from">Coming from another board</a> ·
    <a href="#ipgz-years">DP1 and DP2</a> ·
    <a href="#ipgz-travel">Tutors and travel</a> ·
    <a href="#ipgz-demo">The demo</a> ·
    <a href="#ipgz-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ipgz-themes">What the current guide asks students to learn</h2>
  <p>
    Teaching time is 240 hours at HL and 150 at SL. Both levels cover all five themes; HL students meet five extra
    topics and go further within several shared ones.
  </p>
  <ul>
    <li><strong>Theme A, space, time and motion:</strong> how things move, the forces and momentum behind the motion, and energy, work and power. HL adds the mechanics of rotating rigid bodies and both Galilean and special relativity.</li>
    <li><strong>Theme B, the particulate nature of matter:</strong> heat transfer, the greenhouse effect, the gas laws, and electric current in circuits. HL adds thermodynamics.</li>
    <li><strong>Theme C, wave behaviour:</strong> oscillations in simple harmonic motion, the wave model and its phenomena, resonance and standing waves, and the Doppler effect. There is no HL-only topic here, but HL students go deeper.</li>
    <li><strong>Theme D, fields:</strong> gravity, electric and magnetic fields, and how charged particles move through electromagnetic fields. HL adds electromagnetic induction.</li>
    <li><strong>Theme E, nuclear and quantum physics:</strong> the structure of the atom, radioactivity, fission, and fusion in stars. HL adds quantum physics.</li>
  </ul>
  <p>
    Even where SL and HL share a topic heading, the content is not identical: an HL student's treatment of
    oscillations or of gravitational fields includes understandings an SL student never meets. A tutor must know which statements in each shared topic are marked as
    additional higher level, or an HL student will be under-prepared without anyone noticing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipgz-assess">How the grade is built</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>DP Physics assessment at each level</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">HL</th><th scope="col">SL</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1A, multiple choice</td><td>40 questions</td><td>25 questions</td><td rowspan="2">Paper 1 as a whole: 36%, sat in one sitting of two hours (HL) or ninety minutes (SL)</td></tr>
      <tr><td>Paper 1B, data-based questions</td><td>20 marks</td><td>20 marks</td></tr>
      <tr><td>Paper 2, short and extended answers</td><td>150 minutes, 90 marks</td><td>90 minutes, 55 marks</td><td>44%</td></tr>
      <tr><td>Scientific investigation (internal)</td><td colspan="2">Marked out of 24 at both levels</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Wrong answers in Paper 1A cost nothing, so a student should never leave one blank. A calculator and a clean data
    booklet are allowed in both papers. The booklet saves memorising equations; it does not tell a student which one
    applies, and that judgement is exactly what the questions test.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipgz-level">SL or HL physics?</h2>
  <p>
    Students heading towards engineering, physics or a neighbouring degree, and who are comfortable with sustained
    algebra, usually take HL; they carry five more topics and face a Paper 2 that is close to twice as long. SL makes
    sense when physics is the student's required science rather than a main interest, or when biology or chemistry is
    their HL science. Nobody should think of SL as a shortcut, since every theme is still on the syllabus. The maths
    course matters as well: an HL physics student taking AI at SL may need a tutor's help with calculus and vectors,
    something our
    <a href="{{ url('/ib-maths-tutor-ghaziabad') }}">IB maths tutor in Ghaziabad</a> page discusses.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipgz-1b">Paper 1B: reasoning about an experiment you have never seen</h2>
  <p>
    Paper 1B gives the student an unfamiliar set-up or data set and asks them to make sense of it. It rewards habits
    that can only be built over time:
  </p>
  <ul>
    <li><strong>Describe before calculating.</strong> Name what is on each axis, the units and the trend, then decide what the gradient and the intercept stand for physically.</li>
    <li><strong>Straighten the curve.</strong> Choose the quantities for each axis so that theory predicts a straight-line graph.</li>
    <li><strong>Handle uncertainty properly.</strong> Absolute, fractional and percentage uncertainty; error bars; the steepest and shallowest lines through them.</li>
    <li><strong>Use the precise word.</strong> Random or systematic, precise or accurate; markschemes credit the exact term.</li>
    <li><strong>Suggest an improvement that fits.</strong> Something specific to that method, never just "repeat the readings".</li>
  </ul>
  <p>
    A single data question at the end of every session, kept up through DP1, does more than a burst of practice before
    mocks. These skills are explored further in our
    <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">guide to IB physics levels, the IA and the EE</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipgz-p2">Paper 2: where full marks slip away</h2>
  <p>
    Expect a Paper 2 question to open with a number to find, ask for an explanation next, and finish by carrying the
    same idea into an unfamiliar setting, sometimes crossing from one theme into another, say from fields into energy. Marks drain away when a
    number appears without its equation and substitution, when an "explain" stops after one sentence, and when topics
    were revised in separate boxes. The cure is a loop: attempt, mark against the markscheme, rewrite. Two or three
    questions rewritten properly each week teach more than a pile of new ones that nobody checks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipgz-ia">The scientific investigation, and the line a tutor must not cross</h2>
  <p>
    SL and HL students do the same internal assessment, in a format shared with biology and chemistry. Over roughly
    ten hours of class time the student poses a research question, gathers numerical data, analyses it and reports in
    3,000 words at most. The 24 marks are split equally across research design, data analysis, conclusion and
    evaluation. The data need not come from a bench experiment: fieldwork, a spreadsheet model, a published database
    or a simulation are all allowed. Up to three students can work together, provided each has a distinct research
    question and their own raw data. A collaborative sciences project runs separately.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Fair help</h3>
  <p>Walking through what each criterion rewards; asking whether an idea can be done with school equipment and contains enough physics; teaching graphing, uncertainty and the underlying theory long before the investigation starts.</p>
    </div>
    <div class="nx-guide__card">
  <h3>Off limits</h3>
  <p>Setting the research question, planning the procedure, handling the data, or drafting or correcting any part of the write-up. Breaking this breaches the IB's academic-integrity rules; the school's supervising teacher confirms the work is the student's own.</p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipgz-from">Starting DP physics from CBSE, ICSE, the UP Board or IGCSE</h2>
  <p>
    Students from Indian boards often arrive strong on derivations and numerical problems but less practised at
    interpreting unfamiliar data and writing explanations the IB way. IGCSE students know the experimental vocabulary
    but meet a much steeper mathematical demand, especially at HL. MYP students handle open tasks well and may need
    help with timed, dense papers. A few sessions before DP1, on vectors, graphs, uncertainties and the algebra that
    mechanics needs, make the first term smoother. Students choosing between IB and a Class 11 board course should
    compare the <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11 physics</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipgz-years">How tutoring time is spread over DP1 and DP2</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A common pattern for IB physics tuition</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Main work</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Before or early in DP1</td><td>Vectors, graphs, uncertainties; mechanics groundwork</td><td>One or two</td></tr>
      <tr><td>DP1</td><td>School topics consolidated; one data question each session; Paper 2 rewrites</td><td>One or two</td></tr>
      <tr><td>Investigation window</td><td>Skills only: criteria, uncertainty, graphing; no hands on the report</td><td>As before</td></tr>
      <tr><td>DP2 to mocks</td><td>HL-only topics secured; mixed-theme questions</td><td>Two</td></tr>
      <tr><td>Mocks to May</td><td>Timed papers, markscheme marking, an error log by theme</td><td>Two or three</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipgz-travel">Getting an IB physics tutor to your door</h2>
  <p>
    Our zone research describes routes like these:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/indirapuram') }}">Indirapuram</a>.</strong> {!! $ipgzA('indirapuram-nyay-khand-3', 'Nyay Khand 3') !!} has both Vaishali and Noida Electronic City within reach, with an e-rickshaw for the last stretch; Dr Sushila Naiyar Marg is the road that slows in office hours. {!! $ipgzA('indirapuram-gyan-khand-3', 'Gyan Khand 3') !!} looks towards Vasundhara, with Vaishali station the closest.</li>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/vaishali-kaushambi') }}">Vaishali and Kaushambi</a>.</strong> {!! $ipgzA('vaishali-sector-9', 'Vaishali Sector 9') !!} is mostly apartment complexes; metro tutors leave the train at Vaishali and take an e-rickshaw along Madan Mohan Malviya Marg.</li>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/vasundhara') }}">Vasundhara</a>.</strong> In {!! $ipgzA('vasundhara-sector-4', 'Sector 4') !!} many families live in apartment buildings, so tell security the tutor's name and time; tutors come via Mohan Nagar or Vaishali. {!! $ipgzA('vasundhara-sector-15', 'Sector 15') !!} is nearest Vaishali, and late-evening or weekend slots keep classes steady.</li>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/sahibabad-rajendra-nagar') }}">Sahibabad and Rajendra Nagar</a>.</strong> {!! $ipgzA('mohan-nagar', 'Mohan Nagar') !!} station is one of the busiest in Ghaziabad and an easy arrival point, but GT Road and the market crowd at shift and office hours, so afternoon or weekend lessons hold more reliably.</li>
  </ul>
  <p>
    Other zones, including <a href="{{ url('/city/ghaziabad/zone/raj-nagar-extension-nh-9-corridor') }}">Raj Nagar
    Extension and NH-9</a>, are on the <a href="{{ url('/city/ghaziabad') }}">Ghaziabad home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipgz-mode">Home or online for IB physics</h2>
  <p>
    Derivations, free-body diagrams and graph work are easiest to coach at the table. Data questions and markscheme
    review work well online, with the student's page under a camera. Because HL physics specialists are few, many
    Ghaziabad families keep a weekend home session and move a weekday one online when evening traffic on NH-9 or GT
    Road would eat into the lesson. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online
    comparison</a> sets out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipgz-demo">Questions for the IB physics demo</h2>
  <ol>
    <li>Which version of the guide do you teach from, and which topics are HL only?</li>
    <li>How would you prepare my child for Paper 1B?</li>
    <li>Can you show me how you handle uncertainties and error bars on a graph?</li>
    <li>How do you mark a Paper 2 answer, and what happens after it is marked?</li>
    <li>What will you do, and not do, during the investigation?</li>
    <li>How will you get here, and what is the plan on a jammed evening?</li>
  </ol>
  <p>
    If the answers are vague, ask us for the next matched tutor; their demo is free too. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipgz-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own fees, and each is on the profile before you book. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our post on
    <a href="{{ url('/blog/home-tuition-fees-ghaziabad') }}">home tuition fees in Ghaziabad</a>.
  </p>
  <p>
    Send us the level, DP year, exam session, your maths course, what is going wrong, and your khand, sector or
    society with free times. Two or three matched tutors come back; the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>, and a later switch costs nothing. Every tutor who signs up passes
    an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before the profile is marked Verified, and
    <a href="{{ url('/tutors') }}">tutor profiles</a> are open to browse. For other international-track science, see
    <a href="{{ url('/igcse-physics-tutor-ghaziabad') }}">IGCSE physics</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-ghaziabad') }}">IB and IGCSE chemistry</a> tutors in Ghaziabad.
  </p>
  </section>

  </div>
</article>
