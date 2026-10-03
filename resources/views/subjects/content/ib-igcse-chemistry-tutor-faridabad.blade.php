{{--
  Long-form guide for the "IB and IGCSE chemistry tutor Faridabad" page.
  Byline: NXTutors Academic Team. No schools, societies or people are named;
  no school counts.

  Course facts are reworded from ib-igcse-chemistry-tutor-mumbai /
  ib-igcse-chemistry-tutor-gurgaon, which cite the IB DP Chemistry guide, first
  assessment 2025 (ibo.org: Structure and Reactivity framework, Structure 1-3
  and Reactivity 1-3; SL 150 h / HL 240 h; Paper 1A multiple choice SL 30 / HL
  40 questions; Paper 1B data-based and experimental questions SL 25 / HL 35
  marks; Paper 1 36%, 1 h 30 min SL / 2 h HL; Paper 2 SL 1 h 30 min 50 marks,
  HL 2 h 30 min 90 marks, 44%; IA scientific investigation 24 marks, 20%,
  3,000-word maximum, four criteria of 6 marks; data booklet and calculator in
  both papers; no penalty for wrong MCQ answers) and the Cambridge IGCSE
  Chemistry 0620 syllabus for 2026, 2027 and 2028 (cambridgeinternational.org):
  Core Papers 1 + 3, Extended Papers 2 + 4, Paper 5 or 6 practical; MCQ 40
  questions 45 min 30%; theory 80 marks 1 h 15 min 50%; practical 40 marks 20%;
  Core C-G, Extended A*-G; AO weightings 50/30/20; twelve topics (states of
  matter; atoms, elements and compounds; stoichiometry; electrochemistry;
  chemical energetics; chemical reactions; acids, bases and salts; the
  Periodic Table; metals; chemistry of the environment; organic chemistry;
  experimental techniques and chemical analysis); qualitative analysis notes
  supplied in Papers 5 and 6. No other dates. The worked mole example uses the
  molar gas volume and relative formula mass as general chemistry, not a
  syllabus claim.

  Board mix only as the Faridabad hub view states it (a smaller group study for
  the IB or Cambridge IGCSE; online widens the pool for IB, IGCSE and senior
  specialist subjects). No claim about where IB/IGCSE families live. Local
  detail only from database/seo-content/areas/faridabad-research.json,
  faridabad-zone-guides.json and zones/faridabad.json (Sector 16 market and
  parking tight in the evening, Old Faridabad station; Sector 19 next to
  Badkhal Mor, builder floors, share the floor number; Sector 21 pockets 21A,
  21B, 21D, 21D further from stations, two-wheeler handier; Sector 46 green,
  auto or own vehicle from Sector 28 station; Sector 76 societies, Sihi or
  Escorts Mujesar then auto across the canal; Sector 84 lettered blocks with
  block markets, Kheri Road). Area links render only for active Faridabad
  areas. Fee wording is the approved sentence.
  FAQs: faqs/ib-igcse-chemistry-tutor-faridabad.php.
--}}
@php
  $fchSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $fchA = function (string $slug, string $label) use ($fchSlugs) {
      return in_array($slug, $fchSlugs, true)
          ? '<a href="' . e(url('/city/faridabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="fchGuideTitle">
  <h2 id="fchGuideTitle">IB and IGCSE chemistry tutors in Faridabad: one subject, two very different exams</h2>

  <p class="nx-guide__lede">
    Chemistry runs through both the Cambridge and the IB routes, and the two programmes ask for different things. IGCSE Chemistry 0620 rewards accurate recall, clear equations and a feel for
    practical work; IB Diploma Chemistry reorganises the subject around structure and reactivity, adds data-based
    questions and asks for an independent investigation. Because both are studied by a smaller group in Faridabad than
    CBSE or ICSE chemistry, the tutor who fits may be across Mathura Road, on the other side of the canal, or online.
    This page from the NXTutors Academic Team covers what each candidate sits, the mole method that links the two
    courses, practical preparation, the IB framework and investigation rules, and how tutors reach your sector. It
    sits under our <a href="{{ url('/chemistry-home-tutor-faridabad') }}">chemistry home tutors in Faridabad</a> page.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#fch-0620">IGCSE 0620 papers</a> ·
    <a href="#fch-topics">The twelve topics</a> ·
    <a href="#fch-mole">The mole method</a> ·
    <a href="#fch-prac">Practical papers</a> ·
    <a href="#fch-dp">DP Chemistry</a> ·
    <a href="#fch-dpexam">DP assessment</a> ·
    <a href="#fch-ia">The investigation</a> ·
    <a href="#fch-bridge">From IGCSE to the DP</a> ·
    <a href="#fch-session">A session</a> ·
    <a href="#fch-reach">Reaching you</a> ·
    <a href="#fch-mode">Home or online</a> ·
    <a href="#fch-demo">The demo</a> ·
    <a href="#fch-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="fch-0620">IGCSE Chemistry 0620: what a candidate sits</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Chemistry 0620, syllabus for 2026 to 2028</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">Core</th><th scope="col">Extended</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple choice, 40 questions in 45 minutes</td><td>Paper 1</td><td>Paper 2</td><td>30%</td></tr>
      <tr><td>Theory, 80 marks in 1 hour 15 minutes</td><td>Paper 3</td><td>Paper 4</td><td>50%</td></tr>
      <tr><td>Practical skills, 40 marks</td><td colspan="2">Paper 5 (practical test) or Paper 6 (Alternative to Practical)</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Core grades run from C to G and Extended from A* to G, so the tier choice limits the highest grade in the same way as
    in the other Cambridge sciences. The assessment objectives are weighted 50% knowledge and understanding, 30%
    handling information and problem solving, and 20% experimental skills.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fch-topics">The twelve 0620 topics, grouped for revision</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A revision grouping of the 0620 syllabus</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">Syllabus topics</th><th scope="col">Where marks usually go</th></tr>
    </thead>
    <tbody>
      <tr><td>Building blocks</td><td>States of matter; atoms, elements and compounds; stoichiometry</td><td>Dot-and-cross diagrams; moles and concentrations on Extended</td></tr>
      <tr><td>Reactions and energy</td><td>Electrochemistry; chemical energetics; chemical reactions</td><td>Electrolysis products and half-equations; reaction-pathway diagrams; rates and equilibrium</td></tr>
      <tr><td>Patterns and the world</td><td>Acids, bases and salts; the Periodic Table; metals; chemistry of the environment</td><td>Choosing a method to prepare a salt; ionic equations; extraction and reactivity</td></tr>
      <tr><td>Organic and analysis</td><td>Organic chemistry; experimental techniques and chemical analysis</td><td>Names and reaction types; chromatography and Rf; tests for ions and gases</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fch-mole">The mole method, from Grade 9 to the Diploma</h2>
  <p>
    Stoichiometry is where strong students drop marks most often, and where tuition pays back fastest, because the
    method never changes between IGCSE and IB. A worked example shows it. How much calcium carbonate is needed to
    produce 1.2 dm³ of carbon dioxide at room temperature and pressure, taking one mole of gas as 24 dm³ and the
    relative formula mass of CaCO<sub>3</sub> as 100?
  </p>
  <ol>
    <li><strong>Equation first.</strong> CaCO<sub>3</sub> + 2HCl → CaCl<sub>2</sub> + H<sub>2</sub>O + CO<sub>2</sub>; the ratio of CaCO<sub>3</sub> to CO<sub>2</sub> is 1 : 1.</li>
    <li><strong>Into moles.</strong> 1.2 ÷ 24 = 0.050 mol of CO<sub>2</sub>.</li>
    <li><strong>Use the ratio.</strong> 0.050 mol of CaCO<sub>3</sub> is needed.</li>
    <li><strong>Out of moles.</strong> 0.050 × 100 = 5.0 g.</li>
    <li><strong>Sense check.</strong> Units, significant figures matching the data, and a size that is reasonable for a school experiment.</li>
  </ol>
  <p>
    A student who sets out every calculation in these five steps from the first term finds yield, purity and
    titration questions routine by Grade 10, and arrives in DP Chemistry with exactly the base the course assumes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fch-prac">Preparing for Paper 5 or 6 without a home lab</h2>
  <p>
    Both practical papers test the same skills in the same contexts; Paper 6 does so on paper. Qualitative analysis
    notes are printed in both papers, so students need not memorise every test, but they must use the notes quickly
    and describe what they see in the expected words: "white precipitate", "effervescence", "gas relights a glowing
    splint". Chemicals belong in the school lab, not at home, so a tutor works through real past practical questions,
    sketches apparatus with the student, practises reading burettes and thermometers from diagrams, and drills the
    planning question until variables, controls and safety points come out in order.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fch-dp">DP Chemistry: structure and reactivity</h2>
  <p>
    The IB course first assessed in 2025 is built on two strands, with a recommended 150 hours at SL and 240 at HL.
    Structure 1 covers models of the particulate nature of matter, Structure 2 bonding and structure, and Structure 3
    the classification of matter, including the periodic table and functional groups. Reactivity 1 asks what drives
    reactions, Reactivity 2 how much, how fast and how far they go, and Reactivity 3 the mechanisms of change, from
    proton and electron transfer to electron sharing.
  </p>
  <p>
    Students used to separate physical, organic and inorganic chapters can find this layout confusing. A good tutor
    draws the links explicitly, for instance connecting functional groups in Structure 3 to the reaction types in
    Reactivity 3, so the course reads as one subject.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fch-dpexam">How DP Chemistry is examined</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>DP Chemistry components, SL and HL</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL</th><th scope="col">HL</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1A multiple choice and Paper 1B data and experimental questions</td><td>30 MCQs; 1B 25 marks; 1 hour 30 minutes</td><td>40 MCQs; 1B 35 marks; 2 hours</td><td>36%</td></tr>
      <tr><td>Paper 2</td><td>50 marks, 1 hour 30 minutes</td><td>90 marks, 2 hours 30 minutes</td><td>44%</td></tr>
      <tr><td>Scientific investigation</td><td colspan="2">24 marks at both levels</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Students use the data booklet and a calculator in both papers, and an incorrect multiple-choice answer costs
    nothing. Paper 2 marks leak through unbalanced equations, missing state symbols, careless curly arrows and trends
    stated without a reason, all of which a tutor can fix by marking against the markscheme every week.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fch-ia">The IB investigation: help that stays within the rules</h2>
  <p>
    The investigation is the same at both levels: the student frames a research question, gathers and analyses
    quantitative data, and writes a report of up to 3,000 words, judged on research design, data analysis, conclusion
    and evaluation, each out of 6. Narrow questions, with one independent variable and enough data points to show a
    trend with uncertainties, tend to work well.
  </p>
  <ul>
    <li><strong>Allowed:</strong> explaining the criteria; helping the student judge whether an idea is safe and feasible with school equipment; teaching the chemistry and the uncertainty methods behind it.</li>
    <li><strong>Not allowed:</strong> choosing the question, designing the procedure, processing the data, or writing or editing the report. The IB's academic-integrity rules apply and the school supervisor authenticates the work.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fch-bridge">From IGCSE to the DP, and choosing the level</h2>
  <p>
    An Extended IGCSE student with secure moles, bonding and organic basics is well prepared for DP Chemistry. A Core
    candidate, or one moving from CBSE, ICSE or the Haryana board, should spend the first weeks of DP1 on quantitative
    chemistry and the new framework. HL is the natural choice for students aiming at medicine, chemical engineering or
    pure chemistry, and it needs strong maths. Students on Cambridge or IB maths can see our
    <a href="{{ url('/igcse-maths-tutor-faridabad') }}">IGCSE maths</a> and
    <a href="{{ url('/ib-maths-tutor-faridabad') }}">IB maths</a> tutors in Faridabad; the
    <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">IB and IGCSE parents' guide</a> covers the
    programmes more broadly.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fch-session">What an hour of chemistry tuition should contain</h2>
  <p>
    Parents often ask what actually happens in a session. For a Cambridge or IB chemistry student, a productive hour
    usually has the same four parts, whatever the topic of the week:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A sixty-minute chemistry session, IGCSE or DP</caption>
    <thead>
      <tr><th scope="col">Minutes</th><th scope="col">Activity</th><th scope="col">Why it matters</th></tr>
    </thead>
    <tbody>
      <tr><td>First 10</td><td>Quick recall: three equations to balance, two ions to test for, one definition</td><td>Keeps old topics alive without a separate revision block</td></tr>
      <tr><td>Next 25</td><td>The current school topic, taught or re-taught from the student's own notes</td><td>Keeps tuition in step with the class</td></tr>
      <tr><td>Next 15</td><td>One exam-style question answered on paper, then marked against the official scheme</td><td>Shows where marks are lost, not just whether the idea is understood</td></tr>
      <tr><td>Last 10</td><td>Rewrite of the weakest answer, and a short task for the week</td><td>Turns the correction into a habit</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For DP students in the weeks before the investigation, the middle block moves to uncertainty methods and graphing
    practice on made-up data, never on the student's own investigation data. Ask the tutor at the demo how they would
    split an hour; a clear answer is a good sign.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fch-reach">How chemistry tutors reach your part of Faridabad</h2>
  <ul>
    <li><strong><a href="{{ url('/city/faridabad/zone/central-sectors-mathura-road') }}">Central sectors</a>:</strong> {!! $fchA('sector-16', 'Sector 16') !!} has a busy market where evening parking is tight, so tutors come by two-wheeler or by metro to Old Faridabad; {!! $fchA('sector-19', 'Sector 19') !!} sits right next to Badkhal Mor station, and builder floors mean sharing the floor number in advance; in the {!! $fchA('sector-21', 'Sector 21') !!} pockets, 21D is further from the stations, so a two-wheeler helps.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/surajkund-sainik-colony') }}">Surajkund and Sainik Colony</a>:</strong> {!! $fchA('sector-46', 'Sector 46') !!} is green and quiet; the metro does not reach the door, so tutors finish by auto from Sector 28 station or come by their own vehicle.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/greater-faridabad-sectors-75-80') }}">Greater Faridabad, 75 to 80</a>:</strong> {!! $fchA('sector-76', 'Sector 76') !!} is mostly society flats with some plots; tutors use Sihi or Escorts Mujesar and cross the canal by auto, so share gate-entry details early.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/greater-faridabad-sectors-81-89') }}">Greater Faridabad, 81 to 89</a>:</strong> {!! $fchA('sector-84', 'Sector 84') !!} is laid out in lettered blocks with block markets; give the block and house number, and expect Kheri Road to be slow in the evening.</li>
  </ul>
  <p>
    <a href="{{ url('/city/faridabad/zone/nit-old-faridabad') }}">NIT and Old Faridabad</a>,
    <a href="{{ url('/city/faridabad/zone/sectors-28-31-37') }}">Sectors 28 to 31 and 37</a> and
    <a href="{{ url('/city/faridabad/zone/ballabhgarh-southern-sectors') }}">Ballabhgarh</a> are all on the Violet Line.
    The <a href="{{ url('/blog/nit-and-central-faridabad-tuition-guide') }}">central Faridabad guide</a> has timing
    tips for Mathura Road.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fch-mode">Home or online for IB and IGCSE chemistry?</h2>
  <p>
    Equations, mechanisms and calculations work well online if the student writes on paper under a camera. Online
    lessons also widen the choice of specialists, which matters for IB HL chemistry. Home sessions help most with
    practical-paper preparation and with younger IGCSE students who need someone checking every line of a mole
    calculation. Many families use one of each per week, which also covers evenings when the canal crossings are
    jammed. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online article</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fch-demo">What to check in the chemistry demo</h2>
  <ol>
    <li><strong>Course and level.</strong> 0620 Core or Extended, or DP SL or HL, should be the tutor's first question.</li>
    <li><strong>A mole problem.</strong> Ask the tutor to teach one; listen for the same clear steps every time.</li>
    <li><strong>Practical vocabulary.</strong> For IGCSE, ask how they prepare students for Paper 5 or 6 without a lab.</li>
    <li><strong>The IB framework.</strong> For DP students, ask how Structure and Reactivity connect.</li>
    <li><strong>The investigation line.</strong> The tutor should describe the limits the same way the IB does.</li>
    <li><strong>The route.</strong> Which station or road, and a back-up for a blocked evening.</li>
  </ol>
  <p>
    You get two or three matched tutors with fees shown before the demo; the first class is free and switching later
    is free. Tutors who join complete an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fch-fees">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our <a href="{{ url('/blog/home-tuition-fees-faridabad') }}">Faridabad
    fees post</a>.
  </p>
  <p>
    Send the course, tier or level, grade or DP year, your sector and possible slots, and book the
    <a href="{{ url('/demo-class') }}">free demo class</a>, or browse <a href="{{ url('/tutors') }}">tutor profiles</a>.
    Physics students can see <a href="{{ url('/igcse-physics-tutor-faridabad') }}">IGCSE physics</a> and
    <a href="{{ url('/ib-physics-tutor-faridabad') }}">IB physics</a> tutors in Faridabad.
  </p>
  </section>

  </div>
</article>
