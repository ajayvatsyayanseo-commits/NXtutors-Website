{{--
  Long-form guide for the "IB and IGCSE chemistry tutor Delhi" page. Byline:
  NXTutors Academic Team. No schools, societies or people are named.

  Course facts are reworded from ib-igcse-chemistry-tutor-mumbai and
  ib-igcse-chemistry-tutor-gurgaon, which cite the IB DP Chemistry guide,
  first assessment 2025
  (https://www.ibo.org/programmes/diploma-programme/curriculum/sciences/chemistry/):
  Structure and Reactivity framework, SL 150 h / HL 240 h; Paper 1A multiple
  choice SL 30 / HL 40 questions; Paper 1B data-based and experimental
  questions SL 25 / HL 35 marks; Paper 1 36%, 1 h 30 min SL / 2 h HL; Paper 2
  SL 1 h 30 min 50 marks, HL 2 h 30 min 90 marks, 44%; IA scientific
  investigation 24 marks, 20%, 3,000-word maximum, four criteria of 6 marks;
  data booklet; no penalty for wrong MCQ answers) and the Cambridge IGCSE
  Chemistry 0620 syllabus for 2026, 2027 and 2028 (version 2, August 2026, no
  substantial changes affecting teaching;
  https://www.cambridgeinternational.org/programmes-and-qualifications/cambridge-igcse-chemistry-0620/):
  Core Papers 1 + 3, Extended Papers 2 + 4, Paper 5 or 6 practical; MCQ 40
  questions 45 min 30%; theory 80 marks 1 h 15 min 50%; practical 40 marks
  20%; Core C-G, Extended A*-G; AO weightings 50/30/20; twelve topics;
  qualitative analysis notes supplied in Papers 5 and 6.
  Edexcel facts are reworded from igcse-tutor-delhi, which cites the Pearson
  Edexcel International GCSE Chemistry (4CH1) specification
  (https://qualifications.pearson.com/): untiered, two written papers, no
  separate practical exam. No other dates.
  The calcium carbonate example is standard stoichiometry (CaCO3 = 100 g/mol,
  CO2 = 44 g/mol), used only to illustrate layout.

  Delhi detail only from the Delhi city hub view (CBSE for most students, a
  smaller IB/IGCSE group; online opens up tutors for IB and IGCSE; Yamuna
  crossing; summer break), database/seo-content/zones/delhi.json and
  database/seo-content/areas/delhi-research.json (Dabri: Dabri Mor -
  Janakpuri South on the Magenta Line, floors in plotted lanes, Dabri Mor and
  Pankha Road busy at office hours, online for specialist subjects; Dwarka
  Sector 14: own Blue Line station, guarded DDA pockets, busy stretch near the
  metro in the evening, online for specialist subjects; Hari Nagar: no station
  inside, Subhash Nagar/Tilak Nagar Blue Line and Mayapuri Pink Line, Jail
  Road evenings; West Patel Nagar: Patel Nagar and Shadipur stations, builder
  floors, Patel Road evening peak; Kamla Nagar: Vishwavidyalaya Yellow Line
  and Pul Bangash Red Line, market crowds, block and roundabout; Surajmal
  Vihar: Karkarduma Blue/Pink interchange, RWA gates in some blocks,
  late-afternoon slots). No board is said to concentrate in any area. Area
  links render only for active Delhi areas. Fee wording is the approved
  sentence. FAQs render from faqs/ib-igcse-chemistry-tutor-delhi.php.
--}}
@php
  $dchSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $dchA = function (string $slug, string $label) use ($dchSlugs) {
      return in_array($slug, $dchSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="dchGuideTitle">
  <h2 id="dchGuideTitle">IB and IGCSE chemistry tutor in Delhi: one subject, two exam systems, a single tutor across both</h2>

  <p class="nx-guide__lede">
    A Delhi student on the international route usually takes chemistry twice over: a Cambridge or Edexcel IGCSE course
    in Grades 9 and 10, and then IB Diploma Chemistry at Standard or Higher Level. Much of the chemistry carries forward,
    yet the way it is marked changes sharply. IGCSE pays for exact recall, careful arithmetic and the right practical
    vocabulary. The Diploma regroups everything under two strands, structure and reactivity, sets unfamiliar data on
    paper, and requires a personal investigation. A tutor fluent in both systems keeps the student moving forward instead
    of rebuilding from scratch at the start of Grade 11. This NXTutors Academic Team guide walks through the two courses,
    their practical demands, the limits on IA help, and how tuition is arranged across Delhi. See also
    <a href="{{ url('/chemistry-home-tutor-delhi') }}">chemistry home tutors in Delhi</a> and our Delhi
    <a href="{{ url('/ib-tutor-delhi') }}">IB</a> and <a href="{{ url('/igcse-tutor-delhi') }}">IGCSE</a> hubs.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#dch-which">Name the course</a> ·
    <a href="#dch-0620">0620 components</a> ·
    <a href="#dch-topics">Topic clusters</a> ·
    <a href="#dch-mole">Worked mole example</a> ·
    <a href="#dch-lab">Practical paper</a> ·
    <a href="#dch-dp">The DP strands</a> ·
    <a href="#dch-dpassess">DP papers</a> ·
    <a href="#dch-ia">IA limits</a> ·
    <a href="#dch-bridge">Into the DP</a> ·
    <a href="#dch-travel">Six routes</a> ·
    <a href="#dch-mode">Mixing home and online</a> ·
    <a href="#dch-demo">Demo</a> ·
    <a href="#dch-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="dch-which">Name the course before anything else</h2>
  <ul>
    <li><strong>Cambridge IGCSE Chemistry 0620.</strong> Core or Extended tier, with one practical paper chosen by the school.</li>
    <li><strong>Pearson Edexcel International GCSE Chemistry 4CH1.</strong> Untiered, two written papers, no separate practical exam. Practise from Edexcel's own papers and mark schemes.</li>
    <li><strong>IB Diploma Chemistry.</strong> Standard or Higher Level, on the course first assessed in 2025.</li>
  </ul>
  <p>
    Past papers and mark schemes from one system mislead students in another. Once we know the course and the tier or
    level, we look for a tutor whose students sit exactly that.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dch-0620">Cambridge 0620: the three components</h2>
  <p>
    Cambridge republished the 0620 syllabus for 2026 to 2028 as version 2 in August 2026 and says the update brings no
    substantial change to teaching.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Components of IGCSE Chemistry 0620</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">Paper numbers</th><th scope="col">Format</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Objective test</td><td>1 (Core), 2 (Extended)</td><td>40 multiple-choice items, three-quarters of an hour</td><td>30%</td></tr>
      <tr><td>Written theory</td><td>3 (Core), 4 (Extended)</td><td>80 marks, seventy-five minutes</td><td>50%</td></tr>
      <tr><td>Practical, one only</td><td>5 (hands-on, seventy-five minutes) or 6 (written alternative, one hour)</td><td>40 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Grades on Core stop at C (the range is C to G); Extended runs from A* to G, which is why a likely C-or-better student
    should be entered for Extended. The assessment objectives give 50 percent to knowledge and understanding, 30 to
    using information and solving problems, and 20 to experimental skills.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dch-topics">Twelve syllabus topics, grouped for revision</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>0620 topics in four revision groups</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">Topics</th><th scope="col">Where students stumble</th></tr>
    </thead>
    <tbody>
      <tr><td>Building blocks</td><td>States of matter; atoms, elements, compounds; stoichiometry</td><td>Bonding diagrams; Extended mole work with solutions and gases</td></tr>
      <tr><td>Energy and change</td><td>Electrochemistry; energetics; chemical reactions</td><td>Electrolysis products; half-equations; rates and reversible reactions</td></tr>
      <tr><td>Patterns</td><td>Acids, bases, salts; Periodic Table; metals; environment</td><td>Salt-preparation choice; ionic equations; extraction by reactivity</td></tr>
      <tr><td>Organic and analysis</td><td>Organic chemistry; experimental techniques and analysis</td><td>Naming; reaction types; Rf values; ion and gas tests</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dch-mole">A worked mole example, laid out for full marks</h2>
  <p>
    Extended candidates who are otherwise strong most often drop marks on Paper 4 calculations, and this is the area
    where a few weeks of tutoring show results soonest. Try this: heating 10 g of calcium carbonate until it has fully
    decomposed, what mass of carbon dioxide is given off?
  </p>
  <ol>
    <li><strong>Balanced equation:</strong> CaCO₃ → CaO + CO₂. The ratio of CaCO₃ to CO₂ is 1 : 1.</li>
    <li><strong>Moles of what you know:</strong> molar mass of CaCO₃ is 100 g/mol, so 10 g is 0.10 mol.</li>
    <li><strong>Apply the ratio:</strong> 0.10 mol of CO₂ forms.</li>
    <li><strong>Convert to what is asked:</strong> 0.10 mol × 44 g/mol = 4.4 g of CO₂.</li>
    <li><strong>Sense-check:</strong> less mass than the starting solid, which makes sense because calcium oxide is left behind.</li>
  </ol>
  <p>
    The same five steps handle percentage yield, purity and titration questions later, and they are precisely the habit
    the Diploma course assumes on its first day.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dch-lab">Getting ready for Paper 5 or 6 without chemicals at home</h2>
  <p>
    The hands-on and written practical papers test one shared set of skills. Both include printed notes for qualitative
    analysis, so students look tests up rather than memorise them; what earns marks is using those notes fast and
    describing results in the expected terms. Practise reading burettes and judging when titres agree closely enough;
    recording masses, volumes, temperatures and times to a sensible precision; naming colours, precipitates and gases;
    planning an experiment with its variables, controls and hazards; and spotting a reading that does not fit. None of
    this needs reagents at home, and none should be attempted there. A tutor works through genuine practical questions,
    sketches the apparatus with the student, and drills the vocabulary until it is automatic.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dch-dp">The Diploma course: two strands, six parts</h2>
  <p>
    The IB's chemistry course, assessed from 2025, recommends 150 hours of teaching at SL and 240 at HL and arranges the
    content as follows.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>DP Chemistry framework, summarised</caption>
    <thead>
      <tr><th scope="col">Part</th><th scope="col">What it deals with</th></tr>
    </thead>
    <tbody>
      <tr><td>Structure 1</td><td>Particles: the nuclear atom, electron configurations, the mole, ideal gases</td></tr>
      <tr><td>Structure 2</td><td>Bonding: ionic, covalent and metallic models, leading on to materials</td></tr>
      <tr><td>Structure 3</td><td>Classifying matter: periodicity and functional groups</td></tr>
      <tr><td>Reactivity 1</td><td>Energy: enthalpy and energy cycles; entropy and spontaneity at HL</td></tr>
      <tr><td>Reactivity 2</td><td>Amount, rate and extent of reaction</td></tr>
      <tr><td>Reactivity 3</td><td>Mechanisms: proton transfer, electron transfer, and two kinds of electron sharing</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Students who learned chemistry as separate physical, organic and inorganic blocks
    can feel lost in this map. A good tutor keeps linking the parts, for example tracing a functional group
    from Structure 3 to the reaction it undergoes in Reactivity 3.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dch-dpassess">DP Chemistry papers and weights</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>DP Chemistry assessment by level</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL</th><th scope="col">HL</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1A, multiple choice</td><td>30 items</td><td>40 items</td><td rowspan="2">36%; 90 minutes at SL, 120 at HL for both parts</td></tr>
      <tr><td>Paper 1B, data and experimental work</td><td>25 marks</td><td>35 marks</td></tr>
      <tr><td>Paper 2</td><td>50 marks in 90 minutes</td><td>90 marks in 150 minutes</td><td>44%</td></tr>
      <tr><td>Internal assessment</td><td colspan="2">One investigation, 24 marks at both levels</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Both papers allow a calculator and the data booklet, and Paper 1A has no negative marking, so every item should be
    answered. Paper 1B presents something like a titration curve, a rate graph or enthalpy data the student has not met,
    and expects calculations carried with uncertainties plus a realistic improvement. Paper 2 marks leak through small
    lapses: an equation left unbalanced, state symbols forgotten, a curly arrow pointing from the wrong place, or a trend
    named with no explanation. The long HL Paper 2 also needs full-length timed practice, simply to build stamina.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dch-ia">The IA: what a tutor can and cannot touch</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>The task</h3>
  <p>
    Identical at SL and HL. A student-chosen research question, numerical data gathered and analysed, and a report of
    3,000 words or fewer, scored out of 24 on four 6-mark criteria (design, analysis, conclusion, evaluation). Tight
    questions, with a single variable changed and plenty of data points, usually succeed.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Permitted help</h3>
  <p>
    Explaining the criteria; asking whether an idea is safe and workable with school apparatus; teaching the underlying
    chemistry; and building uncertainty and graphing skills well ahead of time.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Off limits</h3>
  <p>
    Selecting the question, planning the method, working the data, or drafting or correcting the report. Those breach
    IB academic-integrity rules, and the school supervisor must be able to confirm the work as the student's own.
  </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dch-bridge">Moving into DP Chemistry, and picking SL or HL</h2>
  <p>
    A strong Extended grade gives a sound base, but the Diploma covers amounts of substance at speed, extends bonding to
    molecular shape, polarity and intermolecular forces, and puts data and uncertainty at the centre. CBSE is the board
    most Delhi students sit, and those arriving from CBSE Class 10 science generally need extra work on written
    explanation and data questions. HL is a good fit for students eyeing medicine, chemistry or chemical engineering who
    calculate comfortably; SL fits those who need a science alongside other priorities. A handful of sessions over the
    summer break before DP1 makes the first term far easier. If your child is instead leaving IGCSE for a Class 11 board
    course, our <a href="{{ url('/chemistry-home-tutor/class-11') }}">Class 11 chemistry tutor</a> page is the better
    guide.
  </p>
  <p>
    As a rough guide to frequency: one session a week through IGCSE Grade 9, one or two in Grade 10 once practical-paper
    work starts, a short bridging block before DP1, one or two through DP1, a handful of skills-only sessions around the
    IA, and two a week at HL (one or two at SL) in the final year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dch-travel">Six Delhi routes for a chemistry tutor</h2>
  <p>
    Tutors who teach IB or IGCSE chemistry are thinner on the ground than CBSE chemistry tutors, so the journey shapes
    the match.
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/delhi/zone/vasant-kunj-vasant-vihar-palam') }}">Vasant Kunj, Vasant Vihar and Palam</a>.</strong> {!! $dchA('dabri', 'Dabri') !!} is served by Dabri Mor - Janakpuri South on the Magenta Line; floors open onto plotted lanes, and Dabri Mor and Pankha Road are slow at office hours.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/dwarka') }}">Dwarka</a>.</strong> {!! $dchA('dwarka-sector-14', 'Dwarka Sector 14') !!} has its own Blue Line station; DDA pockets have guarded entries, so register a regular tutor once.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/janakpuri-rajouri-garden-punjabi-bagh') }}">Janakpuri, Rajouri Garden and Punjabi Bagh</a>.</strong> {!! $dchA('hari-nagar', 'Hari Nagar') !!} has no station inside, but Subhash Nagar and Tilak Nagar on the Blue Line and Mayapuri on the Pink are close; Jail Road is busy in the evening.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/karol-bagh-patel-nagar-rajinder-nagar') }}">Karol Bagh, Patel Nagar and Rajinder Nagar</a>.</strong> {!! $dchA('west-patel-nagar', 'West Patel Nagar') !!} has two Blue Line stations within reach, Patel Nagar and Shadipur; homes are builder floors, so share the floor and a landmark.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/pitampura-model-town-north-campus') }}">Pitampura, Model Town and North Campus</a>.</strong> {!! $dchA('kamla-nagar', 'Kamla Nagar') !!} is reached from Vishwavidyalaya on the Yellow Line or Pul Bangash on the Red; the market draws evening crowds, so tell the tutor your block and nearest roundabout.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/laxmi-nagar-preet-vihar-shahdara') }}">Laxmi Nagar, Preet Vihar and Shahdara</a>.</strong> {!! $dchA('surajmal-vihar', 'Surajmal Vihar') !!} is close to the Karkarduma interchange of the Blue and Pink Lines; late-afternoon slots avoid the main-road rush.</li>
  </ul>
  <p>
    The <a href="{{ url('/blog/dwarka-and-west-delhi-tuition-guide') }}">Dwarka and West Delhi</a> and
    <a href="{{ url('/blog/rohini-and-north-delhi-tuition-guide') }}">Rohini and North Delhi</a> guides go deeper on
    travel, and the <a href="{{ url('/city/delhi') }}">Delhi home tutors page</a> lists every locality.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dch-mode">Mixing home and online sessions</h2>
  <p>
    Drawing mechanisms and molecular structures, and talking through practical apparatus, work most smoothly side by side at a
    table. Data questions, scheme-based marking and IA conversations work just as well on screen, and going online lets
    you choose a specialist from anywhere rather than only nearby. Pairing a weekly home visit with a weekly video
    session, keeping one tutor for both, holds up well, and particularly suits families on the opposite side of the
    Yamuna from their tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dch-demo">Six checks in the chemistry demo</h2>
  <ol>
    <li>Before teaching, did the tutor pin down the course: 0620 with tier and practical paper, 4CH1, or DP at SL or HL?</li>
    <li>For DP students, do they teach by structure and reactivity rather than the old chapter blocks?</li>
    <li>Are official mark schemes part of every week's work, not only mock season?</li>
    <li>Have them lay out a mole calculation; is it a layout your child could follow?</li>
    <li>Without being asked, do they mention the IA help they will refuse?</li>
    <li>What is their metro route to you, and the fallback when they cannot travel?</li>
  </ol>
  <p>
    Unconvinced after the demo? Tell us, and another matched tutor offers a free demo of their own.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dch-fees">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Every tutor prices their own sessions, and the fee is on the profile before you book a demo. Read the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> or the <a href="{{ url('/blog/home-tuition-fees-delhi') }}">Delhi
    tuition fees</a> post for what pushes it up or down.
  </p>
  <p>
    Let us know the course, the grade or DP year, the topics that worry you, your colony or nearest station and when
    you are free. Two or three matched tutors come back; one gives a <a href="{{ url('/demo-class') }}">free demo
    class</a>, and changing tutor later is free. Every tutor who joins completes an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. In the meantime you can look through
    <a href="{{ url('/tutors') }}">tutor profiles</a>, read the national
    <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a> guide, or open our Delhi pages on
    <a href="{{ url('/ib-physics-tutor-delhi') }}">IB physics</a> and
    <a href="{{ url('/igcse-physics-tutor-delhi') }}">IGCSE physics</a>.
  </p>
  </section>

  </div>
</article>
