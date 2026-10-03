{{--
  Long-form guide for the "chemistry home tutor Imphal" page (Classes 11 and
  12: COHSEM, CBSE, ISC/IB/IGCSE in general, with NEET and JEE alongside).
  Byline in config: NXTutors Academic Team. Page writer (capitals wave 2,
  subjects), 3 Oct 2026. Local facts come only from
  database/seo-content/areas/imphal-research.json.
  COHSEM facts, read 3 Oct 2026 on cohsem.nic.in:
  - https://cohsem.nic.in/docs/subjects/27_Chemistry.pdf : Class XI and XII
    chemistry, one 70-mark theory paper of 3 hours plus a 30-mark practical;
    NCERT Chemistry Part I and Part II prescribed; "a minimum of 4 marks must
    be allotted to each unit". Class XI content groups: units 1-4 (basic
    concepts, structure of atom, periodicity, bonding) 28; units 5-7
    (thermodynamics, equilibrium, redox) 24; units 8-9 (organic basic
    principles, hydrocarbons) 18. Class XII: solutions, electrochemistry and
    chemical kinetics 25; d- and f-block and coordination compounds 15;
    haloalkanes and haloarenes, alcohols phenols ethers, aldehydes ketones
    carboxylic acids, amines and biomolecules 30. Question design: 36
    questions; essay/long answer 3 (15), SA-I 6 (18), SA-II 10 (20), VSA 7 (7),
    MCQ 10 (10); no sections; internal option in essay questions and three
    SA-I including the case-study question; two assertion-reason MCQs;
    difficulty 35/50/15. Practical (XI and XII): volumetric analysis 8,
    salt analysis 8, content-based experiment 5, project 5, class record 2,
    viva 2. XII volumetric: molarity of KMnO4 against oxalic acid or ferrous
    ammonium sulphate, standard solutions weighed by students. XII salt
    analysis: one cation and one anion; insoluble salts excluded.
  - https://cohsem.nic.in/academic_calender.html and
    https://cohsem.nic.in/docs/Notice/GradingSystem.pdf (relative grading from
    2027).
  Other exam facts reuse the checked statements in database/seo-content/blog:
  cbse-class-12-chemistry-organicinorganic (70 + 30, 33 questions in five
  sections, physical 23, inorganic 14, organic 33),
  neet-preparation-gurgaon-coaching-or-home-tutor (NEET UG 2026: 180
  questions, 45 chemistry, 720 marks) and
  jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026). No coaching
  institute, school, college, society or people's names, no distances or
  travel times, only the allowed fee sentence. Weather is timing advice only.

  Area links render only when that Imphal area page exists and is active.
--}}
@php
  $ipcSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ipcA = function (string $slug, string $label) use ($ipcSlugs) {
      return in_array($slug, $ipcSlugs, true)
          ? '<a href="' . e(url('/city/imphal/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ipc-guide" aria-labelledby="ipcGuideTitle">
  <h2 id="ipcGuideTitle">Chemistry home tutor in Imphal: organic carries 30 of the council's 70 marks, and the practical carries another 30</h2>

  <p class="nx-guide__lede">
    Chemistry splits into three different subjects once Class 11 begins. Physical chemistry is numerical and leans on
    maths; inorganic chemistry is about patterns and exceptions; organic chemistry is a language of reactions that has to
    be learned in order. A student can be strong in one branch and lost in another, and a school timetable rarely leaves
    room to go back. In Imphal, chemistry is examined by the Council of Higher Secondary Education, Manipur at the end of
    both Class XI and Class XII, or by CBSE. NXTutors suggests two or three chemistry tutors for your child's board and
    entrance plan, shows their fees up front, and arranges a free first lesson.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ipc-split">How the marks split</a> ·
    <a href="#ipc-eleven">Class XI</a> ·
    <a href="#ipc-branches">Branch by branch</a> ·
    <a href="#ipc-paper">The paper</a> ·
    <a href="#ipc-lab">The practical</a> ·
    <a href="#ipc-year">The year</a> ·
    <a href="#ipc-entrance">NEET and JEE</a> ·
    <a href="#ipc-other">Other boards</a> ·
    <a href="#ipc-where">Localities</a> ·
    <a href="#ipc-fees">Fees</a> ·
    <a href="#ipc-shortlist">Shortlist</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ipc-split">How does Class XII chemistry divide on the council and on CBSE?</h2>
  <p>
    Both papers are 70 marks of theory with 30 marks of practical, and both use NCERT books; the council prescribes NCERT
    Chemistry Part I and Part II. The weighting by branch is close but not identical:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class XII chemistry theory marks by branch: COHSEM course structure beside CBSE 2026-27</caption>
    <thead>
      <tr><th scope="col">Branch (chapters)</th><th scope="col">COHSEM</th><th scope="col">CBSE</th></tr>
    </thead>
    <tbody>
      <tr><td>Physical (solutions, electrochemistry, chemical kinetics)</td><td>25</td><td>23</td></tr>
      <tr><td>Inorganic (d- and f-block elements, coordination compounds)</td><td>15</td><td>14</td></tr>
      <tr><td>Organic (haloalkanes and haloarenes to biomolecules)</td><td>30</td><td>33</td></tr>
      <tr><td>Practical</td><td>30</td><td>30</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The council's course structure adds that every unit must carry at least four marks, so no chapter can be skipped
    safely. Organic chemistry is the largest branch on both boards, and it is also the branch where a student who falls
    behind in October often struggles to catch up alone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipc-eleven">Why is Class XI the right year to fix chemistry?</h2>
  <p>
    Because the council examines Class XI publicly, and because Class XI holds the foundations of all three branches. In
    the council's Class XI course, the first four units (basic concepts, structure of the atom, periodicity and chemical
    bonding) carry 28 marks; thermodynamics, equilibrium and redox reactions 24; and the introduction to organic
    chemistry with hydrocarbons 18.
  </p>
  <p>
    Mole calculations, bonding and equilibrium come back in nearly every Class XII chapter and in every entrance paper. A
    tutor who catches a weak mole concept or a shaky idea of hybridisation in Class XI saves months later. It is also the
    easier year to put things right: fewer chapters are in play, and the board year has not yet started.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipc-branches">What should a home tutor do in each branch?</h2>
  <dl>
    <dt><strong>Physical chemistry</strong></dt>
    <dd>Numericals with units in every line: molarity and colligative properties in solutions, cell potentials and conductance in electrochemistry, rate laws and half-lives in kinetics. The tutor's job is a steady supply of graded problems and quick correction of the algebra.</dd>
    <dt><strong>Inorganic chemistry</strong></dt>
    <dd>Trends first, exceptions second. For coordination compounds, naming and isomerism need regular short practice; for the d- and f-block, a one-page summary built by the student, not copied from a guidebook.</dd>
    <dt><strong>Organic chemistry</strong></dt>
    <dd>Reactions grouped by what they do, with a conversion chart that grows chapter by chapter. Name reactions, reagents and conditions are drilled with short daily recall, and multi-step conversions are practised once the chart is solid.</dd>
  </dl>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipc-paper">What does the council's chemistry paper look like?</h2>
  <p>
    Chemistry follows the same 36-question design as the council's other science papers, with no sections. Read it from
    the bottom up: ten multiple-choice items, two framed as assertion and reason, and seven very short answers make 17
    quick marks; ten SA-II questions bring 20 and six SA-I questions 18, among them a case study; three essay-type answers
    close the paper with 15. Options are offered inside the essays and inside three of the SA-I items. The council
    pitches 35% of the marks as difficult, half as average and only 15% as easy.
  </p>
  <p>
    With 35% of marks set at the difficult level, a student who only revises definitions cannot do well. Reasoning
    questions ("explain why") and conversions are where the difficult marks usually sit, and they are exactly what a
    tutor can practise one-to-one.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipc-lab">How much of the 30-mark practical can be prepared at home?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>COHSEM chemistry practical examination, Classes XI and XII</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">Marks</th><th scope="col">What a tutor can do at home</th></tr>
    </thead>
    <tbody>
      <tr><td>Volumetric analysis</td><td>8</td><td>Practise the calculation; in Class XII, KMnO<sub>4</sub> against oxalic acid or ferrous ammonium sulphate, with the standard solution weighed by the student</td></tr>
      <tr><td>Salt analysis</td><td>8</td><td>Drill the order of tests and the inference for each cation and anion</td></tr>
      <tr><td>Content-based experiment</td><td>5</td><td>Explain the principle and the expected observations</td></tr>
      <tr><td>Project</td><td>5</td><td>Help choose a manageable topic and structure the report</td></tr>
      <tr><td>Class record</td><td>2</td><td>Check that every experiment is written up</td></tr>
      <tr><td>Viva</td><td>2</td><td>Rehearse "why" questions about each experiment</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The lab work itself happens at school, but the project, record and viva, 9 of the 30 marks, and the understanding
    behind every experiment are things a tutor can strengthen at home.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipc-year">How should chemistry tuition fit the council's calendar?</h2>
  <p>
    The council's academic calendar starts regular Class XII teaching in the last week of May and runs it to the last week
    of January, with the Higher Secondary examination in February and March. Schools may set term tests in late August
    and late October and a pre-final in the first week of January. For chemistry, that suggests a simple order: physical
    chemistry numericals and the early organic chapters before the August test; coordination compounds and the later
    organic chapters before October; then from November, whole papers to the 36-question design, salt-analysis drills
    for the practical and the project written up well before the pre-final. On rainy evenings, keep the session online
    rather than losing the week. A notification of 21 May 2026 adds that relative grading will apply to council
    examinations from 2027, with details still to be published on cohsem.nic.in.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipc-entrance">How do NEET and JEE change the plan?</h2>
  <p>
    NEET UG 2026 had 180 multiple-choice questions for 720 marks, 45 of them in chemistry. JEE Main 2026 Paper 1 had 25
    chemistry questions, twenty multiple choice and five numerical. Both papers penalise wrong answers, so accuracy
    matters as much as coverage. Because the council teaches from NCERT books, board revision and entrance revision start
    from the same chapters.
  </p>
  <p>
    The tutor's job in an entrance year is to keep the board answers complete while adding timed objective sets on each
    finished chapter. Our <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">NEET
    preparation</a> guide and <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">CBSE Class 12
    organic and inorganic chemistry</a> guide go deeper, and <a href="{{ url('/chemistry-home-tutor/class-12') }}">chemistry
    tutors for Class 12</a> explains how we match for the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipc-other">What about CBSE, ISC or an international course?</h2>
  <p>
    CBSE's Class 12 chemistry paper has 33 compulsory questions in five sections, A to E, so its practice papers look
    different from the council's 36-question design even where the chapters match. For ISC, IB or IGCSE chemistry, the
    syllabus and assessment differ more, and a specialist may need to teach online if none lives near you. Tell us the
    board at the start so the shortlist fits.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipc-where">What does your locality change for an evening chemistry lesson?</h2>
  <ul>
    <li>{!! $ipcA('uripok', 'Uripok') !!}: many named leikais on the western side; tutors already teaching in Iroishemba, Langol or Lamphel can usually add a visit. In the monsoon, agree an online backup for heavy-rain days.</li>
    <li>{!! $ipcA('langol', 'Langol') !!}: several separate neighbourhoods share the name, so say which part. Online lessons are a sensible choice for a senior-secondary specialist who lives further off.</li>
    <li>{!! $ipcA('sagolband', 'Sagolband') !!}: central, with many lanes; give the leikai, lane and a landmark. Tutors from across the city centre can reach it, but the evening rush near Paona Bazar is worth avoiding.</li>
    <li>{!! $ipcA('kwakeithel', 'Kwakeithel') !!}: on the southern-central belt beside Keishampat and Sagolband. Give a phone number so the tutor can call from the main road on the first visit.</li>
    <li>{!! $ipcA('khurai', 'Khurai') !!}: a large Imphal East area of many leikais. A tutor from the eastern side at an early-evening hour is more practical than a river crossing at the busiest time.</li>
  </ul>
  <p>
    See the <a href="{{ url('/city/imphal') }}">Imphal page</a> for every locality, or the zone pages for
    <a href="{{ url('/city/imphal/zone/sagolband-keishampat-singjamei') }}">Sagolband, Keishampat and Singjamei</a> and
    <a href="{{ url('/city/imphal/zone/wangkhei-khurai-porompat') }}">Wangkhei, Khurai and Porompat</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipc-fees">What does a chemistry home tutor in Imphal cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Chemistry tutors choose
    their own rate, which depends on the board, the entrance plan and the travel involved, and each rate is on the
    shortlist before you book a demo. The <a href="{{ url('/blog/home-tuition-fees-imphal') }}">Imphal fee guide</a>
    and the <a href="{{ url('/pricing-guide') }}">pricing guide</a> suggest what to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipc-shortlist">What should you send us for a chemistry shortlist?</h2>
  <p>
    The class, the board, the branch that worries you, any entrance exam, your locality and leikai, and the evenings that
    suit. Two or three chemistry tutors come back with their fees; your first lesson is a free demo, and if the fit is
    wrong you can switch at no cost. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID
    check</a>. Related pages: the national <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a> page,
    <a href="{{ url('/physics-home-tutor-imphal') }}">physics tutors in Imphal</a>, the
    <a href="{{ url('/manipur-board-tutor-imphal') }}">Manipur Board</a> page and the
    <a href="{{ url('/blog/imphal-home-tuition-guide') }}">Imphal home tuition guide</a>. Chemistry teachers can find
    requests on <a href="{{ url('/tuition-jobs/imphal') }}">Imphal tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
