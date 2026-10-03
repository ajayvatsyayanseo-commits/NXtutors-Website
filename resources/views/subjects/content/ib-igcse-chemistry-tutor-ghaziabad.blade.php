{{--
  Long-form guide for the "IB and IGCSE chemistry tutor Ghaziabad" page.
  Byline: NXTutors Academic Team. No schools, societies or people are named.

  Course facts are reworded from ib-igcse-chemistry-tutor-mumbai and
  ib-igcse-chemistry-tutor-gurgaon, which cite the IB DP Chemistry guide,
  first assessment 2025 (ibo.org: Structure and Reactivity framework, SL 150 h
  / HL 240 h; Paper 1A multiple choice SL 30 / HL 40 questions; Paper 1B
  data-based and experimental questions SL 25 / HL 35 marks; Paper 1 36%,
  1 h 30 min SL / 2 h HL; Paper 2 SL 1 h 30 min 50 marks, HL 2 h 30 min 90
  marks, 44%; IA scientific investigation 24 marks, 20%, 3,000-word maximum,
  four criteria of 6 marks; data booklet; no penalty for wrong MCQ answers)
  and the Cambridge IGCSE Chemistry 0620 syllabus for 2026, 2027 and 2028
  (version 2, August 2026, no substantial changes affecting teaching;
  cambridgeinternational.org): Core Papers 1 + 3, Extended Papers 2 + 4, Paper
  5 or 6 practical; MCQ 40 questions 45 min 30%; theory 80 marks 1 h 15 min
  50%; practical 40 marks 20%; Core C-G, Extended A*-G; assessment objectives
  50/30/20; twelve topics; qualitative analysis notes supplied in Papers 5 and
  6. No other dates.

  IB and IGCSE presence only as the Ghaziabad hub states it ("the IB and
  Cambridge IGCSE serve a smaller group"; specialists fewer, online helps).
  Local detail only from database/seo-content/areas/ghaziabad-research.json,
  ghaziabad-zone-guides.json and zones/ghaziabad.json (Gyan Khand 4 houses,
  floors and complexes, Vaishali and Noida Electronic City, rush-hour arterial
  roads; Nyay Khand 2 mixed pocket on Kala Pathar Road, busy at office and
  school-return times; Shakti Khand 2 Noida Electronic City nearest, CISF Road
  heavy at peak; Vasundhara Sector 5 nearest Mohan Nagar, not walkable;
  Shalimar Garden Extension via Raj Bagh station and Wazirabad Road; Nandgram
  near Hindon River and Shaheed Sthal Red Line stations and the Ghaziabad and
  Guldhar Namo Bharat stations, narrow lanes). Area links render only for
  active Ghaziabad areas. Fee wording is the approved sentence. FAQs render
  from faqs/ib-igcse-chemistry-tutor-ghaziabad.php.
--}}
@php
  $chgzSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $chgzA = function (string $slug, string $label) use ($chgzSlugs) {
      return in_array($slug, $chgzSlugs, true)
          ? '<a href="' . e(url('/city/ghaziabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="chgzGuideTitle">
  <h2 id="chgzGuideTitle">IB and IGCSE chemistry tutor in Ghaziabad: from Cambridge 0620 to DP Chemistry at SL or HL</h2>

  <p class="nx-guide__lede">
    Many students on the international track take chemistry twice: first as Cambridge IGCSE 0620 in Grades 9 and 10,
    then as IB Diploma Chemistry at Standard or Higher Level. The two courses share a foundation (the mole, bonding,
    energetics, organic reactions) but are organised and examined very differently, and a tutor needs to know both to
    carry a student smoothly from one to the other. As the IB and IGCSE serve a smaller group of Ghaziabad families,
    the right chemistry specialist may be a metro ride away, so this page also covers travel and online lessons. It is
    written by the NXTutors Academic Team and sits under our
    <a href="{{ url('/chemistry-home-tutor-ghaziabad') }}">chemistry home tutors in Ghaziabad</a> page; the
    <a href="{{ url('/ib-tutor-ghaziabad') }}">IB</a> and <a href="{{ url('/igcse-tutor-ghaziabad') }}">IGCSE</a> hubs
    for the city cover the boards as a whole.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#chgz-0620">IGCSE 0620 papers</a> ·
    <a href="#chgz-topics">The twelve topics</a> ·
    <a href="#chgz-mole">Mole calculations</a> ·
    <a href="#chgz-lab">Practical paper</a> ·
    <a href="#chgz-dp">DP Chemistry framework</a> ·
    <a href="#chgz-dpexam">DP assessment</a> ·
    <a href="#chgz-ia">The investigation</a> ·
    <a href="#chgz-bridge">From 0620 to the DP</a> ·
    <a href="#chgz-travel">Tutors and travel</a> ·
    <a href="#chgz-demo">The demo</a> ·
    <a href="#chgz-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="chgz-0620">Cambridge IGCSE Chemistry 0620: the three components</h2>
  <p>
    Cambridge put out a second version of the syllabus for the 2026 to 2028 series in August 2026, stating that
    nothing in it substantially alters teaching. A candidate's grade is assembled from three pieces:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>0620 assessment for both tiers</caption>
    <thead>
      <tr><th scope="col">Piece</th><th scope="col">Core</th><th scope="col">Extended</th><th scope="col">Format</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple choice</td><td>Paper 1</td><td>Paper 2</td><td>40 questions, 45 minutes</td><td>30%</td></tr>
      <tr><td>Theory</td><td>Paper 3</td><td>Paper 4</td><td>80 marks of short-answer and structured questions, 1 hour 15 minutes</td><td>50%</td></tr>
      <tr><td>Practical</td><td colspan="2">Paper 5 (Practical Test, 1 h 15 min) or Paper 6 (Alternative to Practical, 1 h), as the school decides</td><td>40 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Core opens grades C to G and Extended A* to G; a student expected to achieve C or higher belongs on Extended.
    Knowledge with understanding carries half the weight across the qualification, handling information and
    problem-solving 30 percent, and experimental skills the last 20.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chgz-topics">The twelve topics, grouped for revision</h2>
  <p>
    Cambridge lists twelve topics. Grouping them makes a revision plan easier to follow:
  </p>
  <ul>
    <li><strong>Building blocks:</strong> states of matter; atoms, elements and compounds; stoichiometry. Watch for weak dot-and-cross diagrams and, on Extended, shaky work with moles, concentrations and gas volumes.</li>
    <li><strong>Energy and change:</strong> electrochemistry; chemical energetics; chemical reactions. Electrolysis products and half-equations, energy-level diagrams, and rates and equilibrium cause the most trouble.</li>
    <li><strong>Families of substances:</strong> acids, bases and salts; the Periodic Table; metals; chemistry of the environment. Choosing the right method to make a salt, writing ionic equations, and linking reactivity to extraction are the usual weak spots.</li>
    <li><strong>Carbon and the laboratory:</strong> organic chemistry; experimental techniques and chemical analysis. Naming compounds, recognising reaction types, chromatography and Rf values, and the tests for ions and gases.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chgz-mole">Mole calculations: one method from Grade 9 to the DP</h2>
  <p>
    Ask Extended candidates where Paper 4 went wrong and the answer is very often a moles question. The good news is
    that the same short routine solves almost all of them, so tutoring pays off quickly here. We teach five moves in a
    fixed order: get a balanced equation, because the ratio comes from it; change the quantity you are given (a mass,
    a solution's volume and concentration, or a volume of gas) into moles, sorting out units first; use the ratio;
    change the answer back into what was asked; and finally ask whether the units, the number of significant figures
    and the size of the result make sense.
  </p>
  <p>
    A student who drills that routine from Grade 9 handles percentage yield, purity and titrations calmly in Grade 10,
    and arrives in the Diploma with the footing its chemistry takes for granted.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chgz-lab">Getting ready for Paper 5 or Paper 6 without chemicals at home</h2>
  <p>
    Paper 5 is done at the bench and Paper 6 on paper, but Cambridge assesses the same skills in each. Qualitative
    analysis notes are printed inside both papers. That spares students from learning every ion test by heart; it
    does not spare them from finding the right line fast and writing down what they see in the words examiners look
    for. Worth practising: measuring masses, volumes, temperatures and times to sensible precision; burette readings
    and deciding which titres are concordant; describing colour changes, precipitates and gases; planning an
    experiment with its variables, controls, equipment and safety points; and picking out an anomalous result.
  </p>
  <p>
    None of that needs chemicals at home, and nobody should try experiments on a kitchen counter in a Vasundhara flat.
    Past practical questions, apparatus drawn together, and observation words used until they come naturally are what
    a tutor adds.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chgz-dp">DP Chemistry: structure and reactivity</h2>
  <p>
    Since the 2025 exams, the IB has arranged the whole subject under two linked ideas. HL is planned for 240 teaching
    hours and SL for 150. <strong>Structure</strong> runs from models of particles (the nuclear atom, electron
    configuration, amounts in moles, ideal gases) through ionic, covalent and metallic bonding to materials, and then
    to classifying matter by the periodic table and by functional group. <strong>Reactivity</strong> asks three
    questions in turn: what makes a reaction go, answered with enthalpy and energy cycles plus entropy and
    spontaneity for HL; how far and how quickly it goes; and by what mechanism, whether protons, electrons or electron
    pairs are transferred or shared.
  </p>
  <p>
    A student brought up on "physical, organic, inorganic" chapters may feel lost in this arrangement at first. It
    helps when the tutor keeps naming the links, such as the line from functional groups on the Structure side to
    reaction types on the Reactivity side, until the course reads as a single story.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chgz-dpexam">How DP Chemistry is examined</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>IB DP Chemistry assessment</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL</th><th scope="col">HL</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1A: multiple choice</td><td>30 questions</td><td>40 questions</td><td rowspan="2">36%, one sitting: 90 minutes (SL), two hours (HL)</td></tr>
      <tr><td>Paper 1B: data-based and experimental questions</td><td>25 marks</td><td>35 marks</td></tr>
      <tr><td>Paper 2: short and extended answers</td><td>50 marks, 90 minutes</td><td>90 marks, 150 minutes</td><td>44%</td></tr>
      <tr><td>Scientific investigation</td><td colspan="2">24 marks at both levels</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Students have the data booklet and a calculator in both papers, and a wrong multiple-choice answer costs nothing.
    Paper 1B asks students to interpret an unfamiliar titration curve, rate graph or table of enthalpy data, calculate
    with uncertainties and suggest improvements. Paper 2 punishes small carelessness: an equation that does not balance,
    state symbols left off, curly arrows drawn from the wrong place, a trend named but never explained. At HL nearly
    every topic goes deeper, and the longer Paper 2 is as much a test of stamina as of knowledge, so timed practice
    matters.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chgz-ia">The DP investigation: helpful support and its limits</h2>
  <p>
    The internal assessment is identical at both levels. The student asks a question of their own, gathers and
    analyses numerical data, and writes it up in no more than 3,000 words; four criteria (how the investigation was
    designed, how the data were analysed, the conclusion, and the evaluation) carry 6 marks each. The chemistry
    investigations that do well are usually tightly focused: a single variable changed, a single outcome measured,
    and readings enough to show a trend with its uncertainty.
  </p>
  <ul>
    <li><strong>Within the rules:</strong> going through the criteria; helping the student check that an idea is safe and can be done with what the school lab has; teaching the underlying chemistry; and, long before the investigation starts, teaching how uncertainties combine, how to graph and how to discuss errors.</li>
    <li><strong>Outside the rules:</strong> deciding the question, planning the method, working on the data, or drafting or editing the write-up. Doing any of these breaches IB academic-integrity rules, and the school's supervising teacher signs off the work as the student's.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chgz-bridge">Moving from 0620 to the Diploma, and choosing the level</h2>
  <p>
    A secure Extended grade in moles is a sound start, yet the Diploma covers amounts of substance at a much quicker
    pace. Bonding no longer stops at dot-and-cross: molecular shape, polarity and the forces between molecules all
    follow. Uncertainty in data, barely touched at IGCSE, runs through the whole course. HL is the natural choice for
    future doctors, chemists and chemical engineers who like calculation; SL fits a student who needs a science but
    whose main subjects are elsewhere. Some bridging work in the holiday before DP1 takes the edge off the first
    term. If your child is leaving Cambridge for a Class 11 board course, the national <a href="{{ url('/chemistry-home-tutor/class-11') }}">Class 11
    chemistry</a> page is the better guide.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A typical chemistry tutoring rhythm on the international track</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Sessions</th></tr>
    </thead>
    <tbody>
      <tr><td>Grade 9 (IGCSE)</td><td>One a week</td></tr>
      <tr><td>Grade 10 (IGCSE), with practical-paper preparation</td><td>One or two a week</td></tr>
      <tr><td>Holiday before the Diploma</td><td>A few bridging sessions</td></tr>
      <tr><td>DP1</td><td>One or two a week</td></tr>
      <tr><td>Investigation window</td><td>Two or three sessions in all, on skills only</td></tr>
      <tr><td>DP2</td><td>Two a week at HL; one or two at SL</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chgz-travel">How chemistry tutors reach different parts of Ghaziabad</h2>
  <p>
    From our zone research:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/indirapuram') }}">Indirapuram</a>.</strong> {!! $chgzA('indirapuram-gyan-khand-4', 'Gyan Khand 4') !!} mixes houses, builder floors and complexes, reached from Vaishali or Noida Electronic City by e-rickshaw; the arterial roads jam at rush hour. {!! $chgzA('indirapuram-nyay-khand-2', 'Nyay Khand 2') !!} sits on Kala Pathar Road, which is busy at office and school-return times, so a slot just after the peak saves waiting. In {!! $chgzA('indirapuram-shakti-khand-2', 'Shakti Khand 2') !!}, Noida Electronic City is the closest station and CISF Road is heavy at peak hours.</li>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/vasundhara') }}">Vasundhara</a>.</strong> {!! $chgzA('vasundhara-sector-5', 'Sector 5') !!} is nearest Mohan Nagar on the Red Line, but not within walking distance, so tutors take an e-rickshaw or come by scooter.</li>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/sahibabad-rajendra-nagar') }}">Sahibabad and Rajendra Nagar</a>.</strong> {!! $chgzA('shalimar-garden-extension', 'Shalimar Garden Extension') !!} is mostly independent floors; tutors usually come to Raj Bagh on the Red Line and take an auto along Wazirabad Road, which slows at school and evening rush hours.</li>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/raj-nagar-kavi-nagar-old-ghaziabad') }}">Raj Nagar, Kavi Nagar and Old Ghaziabad</a>.</strong> {!! $chgzA('nandgram', 'Nandgram') !!} is near the Hindon River and Shaheed Sthal Red Line stations and within reach of the Ghaziabad and Guldhar Namo Bharat stations; the inner lanes are narrow at peak hours, so early-evening or weekend lessons are easier to keep.</li>
  </ul>
  <p>
    Every locality is on the <a href="{{ url('/city/ghaziabad') }}">Ghaziabad home tutors page</a>. Mole work, mechanisms
    and practical-paper drawings go well at the table; Paper 1B data questions and markscheme review work well online.
    When the only HL chemistry specialist lives across the city, one home and one online session a week is a common
    arrangement. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online guide</a> covers the
    trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chgz-demo">Six things to notice during a chemistry demo</h2>
  <ol>
    <li>Before teaching, does the tutor establish 0620 or DP, tier or level, and the series or session?</li>
    <li>Can they show a mole calculation laid out in clear steps, with units?</li>
    <li>For IGCSE, do they know whether your school uses Paper 5 or Paper 6, and how each is marked?</li>
    <li>For the DP, can they explain how the Structure and Reactivity headings connect?</li>
    <li>Are they clear about what they will and will not do for the investigation?</li>
    <li>Is their route to you realistic on a weekday evening?</li>
  </ol>
  <p>
    The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> adds general questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chgz-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Fees are set by tutors themselves and appear on every profile ahead of booking; the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our article on
    <a href="{{ url('/blog/home-tuition-fees-ghaziabad') }}">home tuition fees in Ghaziabad</a> explain what moves them.
  </p>
  <p>
    Send the course and code, the tier or level, the exam series or session, a recent test, your khand, sector or
    colony and free times. You will get two or three matched tutors; the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>, and you can change tutor later at no cost. Each tutor clears an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> on joining, before the profile is marked Verified, and
    <a href="{{ url('/tutors') }}">tutor profiles</a> are open to browse. For the other sciences, see
    <a href="{{ url('/ib-physics-tutor-ghaziabad') }}">IB physics</a> and
    <a href="{{ url('/igcse-physics-tutor-ghaziabad') }}">IGCSE physics</a> tutors in Ghaziabad.
  </p>
  </section>

  </div>
</article>
