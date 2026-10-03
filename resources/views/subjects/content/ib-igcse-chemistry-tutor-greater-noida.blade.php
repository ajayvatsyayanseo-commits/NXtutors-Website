{{--
  Long-form guide for the "IB and IGCSE chemistry tutor Greater Noida" page.
  Byline: NXTutors Academic Team. No schools, societies, developers or people
  are named.

  Course facts are reworded from ib-igcse-chemistry-tutor-gurgaon, which cites
  the IB DP Chemistry guide, first assessment 2025 (ibo.org: Structure and
  Reactivity framework, SL 150 h / HL 240 h; Paper 1A multiple choice SL 30 /
  HL 40 questions; Paper 1B data-based and experimental questions SL 25 / HL 35
  marks; Paper 1 36%, 1 h 30 min SL / 2 h HL; Paper 2 SL 1 h 30 min 50 marks,
  HL 2 h 30 min 90 marks, 44%; IA scientific investigation 24 marks, 20%,
  3,000-word maximum, four criteria of 6 marks; data booklet; no penalty for
  wrong MCQ answers) and the Cambridge IGCSE Chemistry 0620 syllabus for 2026,
  2027 and 2028 (version 2, August 2026, no substantial changes affecting
  teaching; cambridgeinternational.org): Core Papers 1 + 3, Extended Papers 2
  + 4, Paper 5 or 6 practical; MCQ 40 questions 45 min 30%; theory 80 marks
  1 h 15 min 50%; practical 40 marks 20%; Core C-G, Extended A*-G; AO
  weightings 50/30/20; twelve topics; qualitative analysis notes supplied in
  Papers 5 and 6. No other dates.

  Local detail only from database/seo-content/zones/greater-noida.json,
  areas/greater-noida-research.json, greater-noida-zone-guides.json and the
  Greater Noida hub (IB/IGCSE a smaller group, specialist tutors fewer, online
  widens the choice; Sector 3 societies and plotted streets, still filling in,
  thinner public transport; Gaur City 2 township towers, tutors already in
  neighbouring towers, chowk traffic; Sector P-4 the Builders Area, group
  housing with gate passes, Knowledge Park II / Pari Chowk stations; Beta 2
  plotted, no gates, good transport and safe at night, many student tenants;
  Chi 3 plots plus a few societies, Pari Chowk / Knowledge Park II stations,
  buses and shared autos thin; Sector 36 privately owned houses, quiet roads,
  two-wheeler tutors). No request data is claimed. Fee wording is the approved
  sentence. FAQs render from faqs/ib-igcse-chemistry-tutor-greater-noida.php.
  Area links render only for active areas.
--}}
@php
  $chgSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $chgA = function (string $slug, string $label) use ($chgSlugs) {
      return in_array($slug, $chgSlugs, true)
          ? '<a href="' . e(url('/city/greater-noida/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="chgGuideTitle">
  <h2 id="chgGuideTitle">IB and IGCSE chemistry tutors in Greater Noida: one subject, two very different exams</h2>

  <p class="nx-guide__lede">
    Chemistry trips up IGCSE and IB students for quite different reasons.
    IGCSE students lose marks on the mole, on equations and on the precise wording of practical answers. IB students
    meet a course organised around structure and reactivity rather than chapters, plus a paper that asks them to
    reason about experiments they have not done. Because Cambridge and IB families are a smaller group in Greater
    Noida, the right tutor may teach part of the week online. Below, the NXTutors Academic Team compares the two courses, explains the practical side of each and maps how a tutor gets to you. Other boards are covered on our
    <a href="{{ url('/chemistry-home-tutor-greater-noida') }}">chemistry home tutors in Greater Noida</a> page.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#chg-compare">The two courses side by side</a> ·
    <a href="#chg-igcse">IGCSE 0620 papers</a> ·
    <a href="#chg-mole">The mole</a> ·
    <a href="#chg-ib">IB Chemistry</a> ·
    <a href="#chg-ia">The IB IA</a> ·
    <a href="#chg-bridge">From IGCSE to IB</a> ·
    <a href="#chg-hour">An hour of chemistry</a> ·
    <a href="#chg-zones">Which zones need planning</a> ·
    <a href="#chg-mode">Table or screen</a> ·
    <a href="#chg-plan">Planning the year</a> ·
    <a href="#chg-demo">At the demo</a> ·
    <a href="#chg-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="chg-compare">IGCSE and IB chemistry side by side</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Chemistry 0620 and IB DP Chemistry compared</caption>
    <thead>
      <tr><th scope="col">Feature</th><th scope="col">IGCSE 0620 (2026–2028)</th><th scope="col">IB DP Chemistry (first assessed 2025)</th></tr>
    </thead>
    <tbody>
      <tr><td>Levels</td><td>Core (grades C–G) or Extended (A*–G)</td><td>SL (150 hours) or HL (240 hours)</td></tr>
      <tr><td>Organisation</td><td>Twelve topics</td><td>A Structure and Reactivity framework</td></tr>
      <tr><td>Multiple choice</td><td>40 questions in 45 minutes, 30%</td><td>Paper 1A: 30 questions at SL, 40 at HL</td></tr>
      <tr><td>Data and practical</td><td>Paper 5 practical test or Paper 6 alternative, 40 marks, 20%</td><td>Paper 1B data and experimental questions; internal assessment 20%</td></tr>
      <tr><td>Written theory</td><td>80 marks in 1 h 15 min, 50%</td><td>Paper 2: 50 marks at SL, 90 at HL, 44%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A tutor strong in one course is not automatically right for the other. IGCSE tutoring is about accuracy and exam
    technique on a fixed syllabus; IB tutoring adds deeper theory, data reasoning and guidance on an independent
    investigation. Tell us which course and level when you ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chg-igcse">How the IGCSE 0620 papers work</h2>
  <p>
    Version 2 of the 0620 syllabus for 2026 to 2028 brings no substantial changes for teaching, Cambridge says. Core
    candidates sit Papers 1 and 3; Extended candidates sit Papers 2 and 4; and every candidate also sits Paper 5 or
    Paper 6, chosen by the school. The assessment objectives weigh knowledge at about half, handling information and
    problem-solving at about three-tenths and experimental skills at a fifth.
  </p>
  <p>
    For Papers 5 and 6, Cambridge supplies notes for qualitative analysis, the tests for ions and gases, in the paper
    itself. That does not make the topic easy: students still need to know how to carry out each test, describe what
    they would see and draw a conclusion. A tutor should practise these as complete written answers, not as a list to
    memorise.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chg-mole">The mole: the skill both courses depend on</h2>
  <p>
    Whether a student sits IGCSE or the IB, chemical calculations decide a large share of the marks. A tutor should
    check, early, that the student can:
  </p>
  <ul>
    <li>Move between mass, moles and number of particles without hesitation.</li>
    <li>Use a balanced equation to find reacting quantities and the limiting reactant.</li>
    <li>Work with concentrations and titration results, including units.</li>
    <li>Handle gas volumes and percentage yield.</li>
    <li>Set out every step, so method marks are kept even when the final number is wrong.</li>
  </ul>
  <p>
    Weakness here shows up in almost every topic later, from energetics to equilibrium, so it is worth fixing first.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chg-ib">IB Chemistry: structure, reactivity and the papers</h2>
  <p>
    The current IB guide organises chemistry around two linked ideas: the structure of matter and how it reacts.
    Students are expected to connect topics rather than treat them one by one, and exam questions often draw on both.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What each IB chemistry component asks, Standard and Higher Level</caption>
    <thead>
      <tr><th scope="col">Part of the grade</th><th scope="col">Contents</th><th scope="col">Standard Level</th><th scope="col">Higher Level</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1, worth 36%</td><td>1A multiple choice, then 1B questions on data and experiments</td><td>One and a half hours: 30 questions, then 25 marks</td><td>Two hours: 40 questions, then 35 marks</td></tr>
      <tr><td>Paper 2, worth 44%</td><td>Written questions across the course</td><td>One and a half hours, 50 marks</td><td>Two and a half hours, 90 marks</td></tr>
      <tr><td>Internal assessment, worth 20%</td><td>The student's own scientific investigation, four criteria</td><td>Marked out of 24</td><td>Marked out of 24</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The data booklet is provided, and wrong multiple-choice answers carry no penalty. Paper 1B is where students used to
    recall-based chemistry struggle, because it asks them to interpret results and reason about methods. A tutor should
    set short data and experimental questions regularly from the first term of DP1.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chg-ia">The IB internal assessment</h2>
  <p>
    A fifth of the IB chemistry grade comes from one investigation the student designs and writes up, at most 3,000
    words long and marked out of 24, six for each of four criteria. Outside help has firm limits. Allowed: teaching the
    chemistry the idea rests on, rehearsing data processing and uncertainties with unrelated examples, and walking
    through what the criteria reward. Off limits: picking the research question, shaping the method, handling the
    student's own data, or drafting and correcting the write-up. Schools expect students to declare outside tutoring,
    and doing so protects the student under IB academic-integrity policy.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chg-bridge">Moving from IGCSE to IB chemistry</h2>
  <p>
    IGCSE Extended chemistry is a good base for the Diploma, but the step is real. Calculations become longer, bonding
    and structure are treated in more depth, and students must explain trends rather than state them. Students from
    CBSE or the UP Board usually bring strong recall and numerical practice but need help with data questions and
    written reasoning. A few weeks before DP1 spent on the mole, bonding and energetics, marked the IB way, makes the
    first term easier. Our <a href="{{ url('/ib-tutor-greater-noida') }}">IB tutors in Greater Noida</a> and
    <a href="{{ url('/igcse-tutor-greater-noida') }}">IGCSE tutors in Greater Noida</a> hubs cover the other subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chg-hour">An hour of chemistry tutoring, step by step</h2>
  <p>
    For an IGCSE student, an hour might open with five balanced equations and two mole conversions written from
    scratch, move into the school's current topic through past-paper questions, and finish with one qualitative
    analysis answer written in full: the test, what is seen, what it shows. For an IB student, the opening is a short
    set of Paper 1A questions, the middle a Paper 2 question that links structure to reactivity, and the end a
    Paper 1B-style task on a set of experimental results. In both cases the tutor ends by noting the two or three
    errors that recurred, and the next session starts from them. Parents should expect to see that list grow shorter
    over a term.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chg-zones">Which zones are easy for a chemistry tutor, and which need planning</h2>
  <ul>
    <li><strong><a href="{{ url('/city/greater-noida/zone/greater-noida-west') }}">Greater Noida West</a>.</strong> {!! $chgA('sector-3', 'Sector 3') !!} mixes societies with plotted streets and is still filling in, so public transport is thinner; tutors come by bike or car from neighbouring sectors. In {!! $chgA('gaur-city-2', 'Gaur City 2') !!}, towers are close together and a tutor already teaching in the township can often add a student the same evening.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/alpha-delta-pari-chowk') }}">Alpha–Delta and Pari Chowk</a>.</strong> {!! $chgA('sector-p-4', 'Sector P-4') !!}, the Builders Area, is group housing with gate passes; Knowledge Park II and Pari Chowk are the nearest stations. {!! $chgA('beta-2', 'Beta 2') !!} is plotted, with no gates and good transport, and residents describe it as safe at night, so later slots are workable.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/omega-chi-phi') }}">Omega, Chi and Phi</a>.</strong> {!! $chgA('chi-3', 'Chi 3') !!} has plotted lanes and a few apartment blocks. Buses and shared autos are thin, so tutors mostly ride in or take the metro to Pari Chowk and an e-rickshaw.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/pi-sigma-sectors-36-37') }}">Pi, Sigma and Sectors 36–37</a>.</strong> {!! $chgA('sector-36', 'Sector 36') !!} is privately owned houses on quiet roads; a tutor on a two-wheeler from the nearby sectors is the practical choice for weekday evenings.</li>
  </ul>
  <p>
    Sessions in <a href="{{ url('/city/greater-noida/zone/zeta-eta') }}">Zeta and Eta</a> or
    <a href="{{ url('/city/greater-noida/zone/omicron-mu-xu') }}">Omicron, Mu and Xu</a> usually mean a tutor with a two-wheeler;
    the <a href="{{ url('/city/greater-noida') }}">Greater Noida home tutors page</a> lists every locality.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chg-mode">Home or online for chemistry</h2>
  <p>
    Chemistry tutoring does not involve experiments at home; practical work belongs in the school laboratory. What a
    home session does well is watch a long calculation being set out and correct it line by line. Online sessions
    work well for data questions, molecular structures shown on screen and past-paper review, as long as the tutor
    can see the student's page. With fewer IB and Cambridge specialists in the city, one home session and one online
    session with the same tutor is a common pattern. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online comparison</a> sets out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chg-plan">Planning a chemistry year</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Typical focus by stage for each course</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">IGCSE 0620</th><th scope="col">IB DP Chemistry</th></tr>
    </thead>
    <tbody>
      <tr><td>Start</td><td>Atomic structure, bonding and the mole; equations balanced by habit</td><td>The mole and bonding at depth; first data questions</td></tr>
      <tr><td>Middle</td><td>Keeping pace with school; qualitative analysis as written answers</td><td>Energetics, kinetics, equilibrium; regular Paper 1B practice</td></tr>
      <tr><td>Investigation period</td><td>Practical-paper skills: tables, graphs, evaluation</td><td>Chemistry behind the IA idea; criteria explained; no drafting</td></tr>
      <tr><td>Run-up to mocks and finals</td><td>Timed papers for the tier and practical paper</td><td>Full timed IB papers, then the recurring errors reworked</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    One or two sessions a week is usual through the year, rising to two or three before the exams.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chg-demo">What to check in the demo</h2>
  <ol>
    <li><strong>Course and level.</strong> The tutor should ask IGCSE or IB, tier or level, before teaching anything.</li>
    <li><strong>A mole question.</strong> Ask them to set one and mark your child's working.</li>
    <li><strong>Practical answers.</strong> For IGCSE, ask how they prepare for Paper 5 or 6; for IB, how they approach Paper 1B.</li>
    <li><strong>The IA boundary.</strong> Ask what help with the investigation looks like; the answer should stop short of the student's own decisions.</li>
    <li><strong>The journey.</strong> Which station or road, and what happens on a jammed evening.</li>
  </ol>
  <p>
    If the first tutor is not right, ask and the next one on the shortlist gives a free demo too. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">parents' demo checklist</a> has further questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chg-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    IB HL chemistry usually costs more than IGCSE Core, and travel adds to any figure. Tutors set their own fees,
    visible before you pick a demo; read the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our note on
    <a href="{{ url('/blog/home-tuition-fees-greater-noida') }}">home tuition fees in Greater Noida</a> for the reasons.
  </p>
  <p>
    Give us the course, tier or level, school year, the topics causing trouble, your sector or society and the times
    you are free. We return two or three matched names; book a <a href="{{ url('/demo-class') }}">free demo</a> with
    whichever you prefer, and swap later at no cost. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profiles are marked Verified. Explore
    <a href="{{ url('/tutors') }}">tutor profiles</a>, or open our <a href="{{ url('/ib-physics-tutor-greater-noida') }}">IB
    physics</a> and <a href="{{ url('/igcse-physics-tutor-greater-noida') }}">IGCSE physics</a> pages for Greater
    Noida, and the <a href="{{ url('/neet-home-tutor-greater-noida') }}">NEET</a> page for students also preparing for
    medical entrance.
  </p>
  </section>

  </div>
</article>
