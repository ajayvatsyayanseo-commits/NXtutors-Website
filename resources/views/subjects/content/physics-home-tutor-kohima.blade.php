{{--
  Long-form guide for the "physics home tutor Kohima" page (Classes 11 and 12:
  NBSE HSSLC, CBSE, ISC/IB/IGCSE; JEE and NEET physics). Byline in config:
  NXTutors Academic Team. Local facts come only from
  database/seo-content/areas/kohima-research.json (zone_facts and area "about"
  texts).

  Nagaland Board of School Education facts, read 3 Oct 2026 on nbsenl.edu.in:
  - https://nbsenl.edu.in/cms/document/51/syllabi (Blueprint of HSSLC 2026,
    Physics): 34 questions, 70 marks; 10 x 1 MCQ, 6 x 1 VSA, 6 x 2, 9 x 3,
    3 x 5; ten chapters: Electrostatics (10 marks), Current Electricity,
    Magnetic Effect of Current and Magnetism, Electromagnetic Induction &
    Alternating Current (10), Electromagnetic Waves, Optics (12), Dual Nature
    of Matter, Atoms & Nuclei, Electronic Devices, Communication System;
    internal choice in some questions.
  - https://nbsenl.edu.in/cms/document/41/syllabi (higher secondary textbooks
    2025): NCERT Physics for Classes XI and XII, a reference book and a
    laboratory manual.
  - https://nbsenl.edu.in/cms/document/14/calendars (2026 higher secondary
    calendar): internal/practical marks and grades for HSSLC 2026 submitted
    2-13 February; question papers of the HSSLC practical examination;
    HSSLC examination and Class XI promotion examination in February 2026;
    Class XI admission and classes 25-30 May 2026.
  - https://nbsenl.edu.in/ : HSSLC toppers lists by Arts, Science and
    Commerce stream.
  CBSE and entrance facts reuse the checked statements in
  database/seo-content/blog: cbse-class-12-physics-strategies (70 + 30, 33
  questions, blocks 33/18/12/7, practical 14/5/3/3/5, record minimums),
  jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern) and
  neet-preparation-gurgaon-coaching-or-home-tutor (NEET UG 2026 pattern); IB
  physics as stated on the Srinagar and Patna pages (-ib-physics-slhl-iaee).
  Purely practical and educational; weather only as timing advice. No
  coaching institute, school, college, hospital, society or people's names,
  no distances or travel times, only the allowed fee sentence.

  Area links render only when that Kohima area page exists and is active.
--}}
@php
  $kmpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $kmpA = function (string $slug, string $label) use ($kmpSlugs) {
      return in_array($slug, $kmpSlugs, true)
          ? '<a href="' . e(url('/city/kohima/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide kmp-guide" aria-labelledby="kmpGuideTitle">
  <h2 id="kmpGuideTitle">Physics home tutor in Kohima: a short Class 11, a 70-mark HSSLC paper and a tutor who checks every line of working</h2>

  <p class="nx-guide__lede">
    Senior physics in Kohima has an unusual shape. In the Nagaland board's 2026 calendar, Class 11 classes began only in
    late May and the year closed with a promotion examination the following February, so the first year of mechanics and
    vectors is shorter than students expect. Class 12 then resumed in March, heading for an HSSLC examination the next February.
    CBSE students follow their own calendar, and some in either group are also preparing for JEE or NEET. What all of
    them want from a home tutor is the same: a second pair of eyes on the working, able to spot the recurring wrong
    step. We put forward two or three physics tutors familiar with your child's paper who can get to your ward at a
    sensible time; each fee is visible beforehand, and the opening lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kmp-target">The target paper</a> ·
    <a href="#kmp-hsslc">HSSLC physics</a> ·
    <a href="#kmp-eleven">The short Class 11</a> ·
    <a href="#kmp-cbse">CBSE theory and practical</a> ·
    <a href="#kmp-entrance">JEE and NEET</a> ·
    <a href="#kmp-review">Reviewing a test</a> ·
    <a href="#kmp-other">ISC, IB, IGCSE</a> ·
    <a href="#kmp-wards">Five wards</a> ·
    <a href="#kmp-fees">Fees</a> ·
    <a href="#kmp-ask">Asking for tutors</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kmp-target">Which physics paper is your child really preparing for?</h2>
  <p>
    The chapters overlap across boards and entrance tests, but the marking does not. Settle the main target first,
    because it decides what kind of problem the tutor sets each week.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Physics papers a Kohima Class 12 student may face, how each is built, and the weekly practice it calls for</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">Shape</th><th scope="col">Weekly practice</th></tr>
    </thead>
    <tbody>
      <tr><td>NBSE HSSLC, 2026 blueprint</td><td>34 questions for 70 marks over ten chapters</td><td>Three-mark answers with a figure or derivation, written in full</td></tr>
      <tr><td>CBSE Class 12</td><td>Theory out of 70 in 33 questions, all compulsory; practical out of 30</td><td>Derivations from memory, neat figures, reading case passages</td></tr>
      <tr><td>JEE Main, Paper 1 in 2026</td><td>One subject of three: 25 questions, five needing a numerical answer, scored +4 and −1</td><td>Timed multi-concept problems, each wrong answer reviewed afterwards</td></tr>
      <tr><td>NEET (UG) in 2026</td><td>A quarter of a 180-question offline paper</td><td>Precise NCERT recall and restraint when unsure</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The entrance syllabus belongs to NTA, not to any school board, so a chapter dropped by the board may still be
    examined; read the current NTA bulletin first. Our <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics topic-wise plan</a> and
    <a href="{{ url('/blog/-neet-physics-highyield') }}">NEET physics high-yield chapters</a> set priorities, and the
    <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics</a> and
    <a href="{{ url('/physics-home-tutor/neet') }}">NEET physics</a> tutor pages explain how we choose tutors.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmp-hsslc">How is the NBSE HSSLC physics paper built?</h2>
  <p>
    The board lists NCERT Physics for Classes 11 and 12, with a reference book and a laboratory manual. Its 2026 HSSLC
    blueprint gives the theory paper 70 marks: ten one-mark multiple-choice items, six one-mark very short answers, six
    two-mark answers, nine three-mark answers and three five-mark long answers. Three chapters stand out:
  </p>
  <ul>
    <li><strong>Optics, 12 marks.</strong> The heaviest chapter. Ray diagrams drawn accurately, with sign conventions stated, are where the marks sit.</li>
    <li><strong>Electrostatics, 10 marks.</strong> Field, potential and capacitance; derivations practised until they can be written without notes.</li>
    <li><strong>Electromagnetic induction and alternating current, 10 marks.</strong> Includes a five-mark question, so one full derivation should be rehearsed until it is automatic.</li>
  </ul>
  <p>
    The other seven chapters, from current electricity and magnetism to electronic devices and a chapter on
    communication systems, are each smaller but compulsory in practice, because the one-mark and very-short questions
    are spread across the whole list. Nine three-mark questions make 27 marks, so a tutor should time and mark a set of
    them every week. Board-set practical work also counts: the 2026 calendar had schools submitting HSSLC internal and
    practical marks in February, so the laboratory manual should be kept current all year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmp-eleven">Why does Class 11 physics need to start fast?</h2>
  <p>
    Under the board's 2026 calendar, Class 11 admission and classes began in the last week of May, and the Class 11
    promotion examination was held the following February along with the HSSLC. That leaves roughly two school terms
    for vectors, kinematics, the laws of motion, work and energy, and rotation, all of which Class 12 then assumes.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A Class 11 physics plan that fits the NBSE year in Kohima</caption>
    <thead>
      <tr><th scope="col">Stretch</th><th scope="col">Focus</th><th scope="col">Why it matters later</th></tr>
    </thead>
    <tbody>
      <tr><td>June and July</td><td>Units, vectors, graphs of motion</td><td>Every later chapter is built on these</td></tr>
      <tr><td>August and September</td><td>Laws of motion, friction, circular motion</td><td>The rainy months; keep a standby online slot so no week is lost</td></tr>
      <tr><td>October to December</td><td>Work, energy, rotation, gravitation and the remaining chapters</td><td>Rotation is the chapter most often left half learnt</td></tr>
      <tr><td>Before the promotion examination</td><td>School papers under time</td><td>Class 12 classes follow straight after</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11 physics tutor</a> page explains how we plan this
    year, and our <a href="{{ url('/blog/how-to-choose-boardstream') }}">board and stream guide</a> helps before Class 11
    begins.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmp-cbse">CBSE Class 12 physics: where do the theory and practical marks go?</h2>
  <p>
    CBSE's theory paper is 70 marks across fourteen NCERT chapters, grouped in four blocks: electricity and magnetism
    33, electromagnetic waves and optics 18, modern physics 12, and semiconductor electronics 7. The 33 questions run
    from sixteen one-mark items in Section A, through two-, three- and four-mark sections including two case studies,
    to three long answers of five marks in Section E, all without a calculator.
  </p>
  <p>
    Practicals are the most predictable 30 marks in the subject. Two experiments earn 14, the viva and the record
    5 each, and an activity and the investigatory project 3 each; the record must hold at least eight experiments and
    six activities. At home, a tutor can read each write-up critically, rehearse likely errors and fire viva questions.
    Our <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a> collect the
    derivations that keep returning, and the <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics</a>
    page outlines our board-year approach.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmp-entrance">What should a home tutor add to JEE or NEET preparation?</h2>
  <p>
    A good deal, as long as the home session does something a class lecture does not. Three jobs tend to get squeezed out:
    clearing the backlog of problems left half done; keeping board answers complete, with derivations and labelled
    figures, while entrance practice runs on multiple choice; and turning test scores into a plan. Because the HSSLC
    examination falls in February, an NBSE student can put the board paper behind them and then give the following
    weeks fully to entrance practice, which is worth planning for in advance. Whether to combine coaching with a home
    tutor is discussed in our <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">JEE</a> and
    <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">NEET</a> preparation articles.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmp-review">How should a marked physics test be used?</h2>
  <p>
    Put the most recent test in front of the tutor at the free demo; a capable physics teacher should be able to read
    it and say where the marks went before teaching anything. After that, file every lost mark under one heading each week:
  </p>
  <ol>
    <li><strong>Idea missing.</strong> The student cannot say which law applies; the tutor re-teaches it with two fresh problems.</li>
    <li><strong>Set-up wrong.</strong> The right law, but the wrong figure or sign convention; draw the figure with directions before any equation.</li>
    <li><strong>Number slip.</strong> Method right, magnitude wrong; carry units through and guess the order of the answer before calculating.</li>
    <li><strong>Out of time.</strong> The last questions left blank; brief timed drills and a fixed rule for skipping.</li>
    <li><strong>Guessing cost marks.</strong> Under negative marking, answer only after eliminating two choices.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmp-other">Other courses: ISC, the IB and IGCSE</h2>
  <p>
    The IB Diploma's current physics guide, first examined in May 2025, is built on five themes; written papers carry
    80% and a student's own investigation the other 20%, with 150 recommended hours at SL and 240 at HL. ISC combines
    theory with practical work and a project, and expects reasoning beyond a single line. Cambridge IGCSE is sat at Core
    or Extended level. Specialists in these are few in any city, so online lessons are often the practical answer.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmp-wards">Can a physics tutor reach your ward after school?</h2>
  <p>
    Senior physics often lands late in the day, so the tutor's route decides whether the slot survives the term.
    Buses and taxis are the usual way around Kohima. The <a href="{{ url('/city/kohima') }}">Kohima page</a> lists
    every area.
  </p>
  <dl>
    <dt><strong>North Kohima</strong></dt>
    <dd>{!! $kmpA('bayavu-hill', 'Bayavü Hill') !!}: Upper and Lower Bayavü Hill, with the board's own office at the upper level. Lanes climb between the two, so say which level the house is on; Peraciezie and Naga Bazaar are next door.</dd>
    <dt><strong>Main Town</strong></dt>
    <dd>{!! $kmpA('new-market', 'New Market') !!}: one of the most familiar addresses for any taxi, and close to Daklane, Midland and Officers' Hill. Parking on central roads can be tight, so mention any space for a scooter, and start after the evening office rush.</dd>
    <dd>{!! $kmpA('officers-hill', "Officers' Hill") !!}: officially Thegabakha, on the western side of the centre. Hill roads here can be narrow; tell the tutor where to leave a two-wheeler and which steps lead to the house.</dd>
    <dt><strong>Chandmari and PR Hill</strong></dt>
    <dd>{!! $kmpA('pr-hill', 'PR Hill') !!}: P.R. Hill and Lower P.R. Hill, an easy name for taxi drivers. Tutors from Officers' Hill, Upper Chandmari or Agri Farm are well placed for weekly sessions.</dd>
    <dt><strong>The west</strong></dt>
    <dd>{!! $kmpA('merhulietsa', 'Merhülietsa') !!}: on the western edge, with Lower Mediezie (Lower Agri) in the same ward. A tutor from the northern wards should avoid the evening rush through the centre; hillside paths can be steep, so share the nearest road point.</dd>
  </dl>
  <p>
    If a heavy-rain evening makes the journey slow, the same tutor can teach that session online rather than cancel.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmp-fees">What does a physics home tutor in Kohima charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors fix their own
    rates. The goal (HSSLC, CBSE, JEE or NEET), the tutor's experience with it, a late journey to your ward and the
    number of weekly lessons all affect the figure, and online teaching by the same person can cost less. Fees are
    shown before the demo; see the <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmp-ask">How do you ask for physics tutors?</h2>
  <p>
    Write to us with the class, the board, the main goal (HSSLC, CBSE, JEE or NEET), the ward and a landmark, and the
    evenings on offer. Two or three physics tutors come back with fees attached; one teaches the free demo, a second
    demo with another is available if needed, and swapping later is free. Every tutor who joins passes an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before the profile is marked Verified, and when travel at your
    hour will not work we propose lessons wholly or partly online. See the national
    <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page for the wider service, and the
    <a href="{{ url('/chemistry-home-tutor-kohima') }}">chemistry home tutor in Kohima</a> page covers the companion
    subject.
  </p>
  <p>
    Physics teachers in Kohima can see requests from nearby families on the
    <a href="{{ url('/tuition-jobs/kohima') }}">Kohima tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
