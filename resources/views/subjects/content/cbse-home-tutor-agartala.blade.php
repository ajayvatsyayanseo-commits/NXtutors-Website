{{--
  Board page for "CBSE home tutor Agartala". Authors: Abhinandan Tiwary (role:
  Class 10 CBSE and ICSE maths) and Aaditya Kashyap (role: CBSE and ICSE
  science). No anecdotes, years or results are claimed. No schools, coaching
  institutes or people are named. Page writer, capitals wave 2 (subjects),
  3 Oct 2026.

  CBSE facts only as the Gurgaon, Patna and Raipur board pages state them,
  citing cbseacademic.nic.in / cbse.gov.in (read 1 Oct 2026): Curriculum
  2026-27 Secondary (80 + 20 in major subjects, 33% pass, about half
  competency-focused questions, Class IX common paper + optional Advanced
  25 marks / 1 hour, not in aggregate, 50%+ noted; Basic/Standard
  discontinued except the 2026-27 Class X batch; third language assessed
  internally in the transition years); notification of 14.02.2026 on two
  Class X board exams (first compulsory, improve up to three of science,
  maths, social science, languages); Curriculum 2026-27 Senior Secondary
  (Physics 042, Chemistry 043, Biology 044 at 70 + 30; Mathematics 041 /
  Applied Mathematics 241, one only; Accountancy 055, Economics 030, Business
  Studies 054 at 80 + 20).
  TBSE comparison facts only from tbse.tripura.gov.in (read 3 Oct 2026):
  https://tbse.tripura.gov.in/sites/default/files/MATHEMATICS_1.pdf,
  .../SCIENCE_1.pdf, .../ENGLISH_1.pdf (Class X: 80 + 20 internal; maths at
  Basic and Standard), the home page notices (Madhyamik and H.S. (+2 Stage)
  examinations; Bachhar Bachao examination; model question papers) and
  .../TBSE_Notification_Syllabus_18_08_2026_20260818_0001.pdf (2025-26
  syllabi in force for 2026-27).
  Local detail only from database/seo-content/areas/agartala-research.json.
  Fee wording is the approved sentence. Area links render only for active
  Agartala areas.
--}}
@php
  $agbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $agbA = function (string $slug, string $label) use ($agbSlugs) {
      return in_array($slug, $agbSlugs, true)
          ? '<a href="' . e(url('/city/agartala/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide agb-guide" aria-labelledby="agbGuideTitle">
  <h2 id="agbGuideTitle">CBSE home tutors in Agartala: NCERT taught thoroughly, Class 6 to the Class 12 board</h2>

  <p class="nx-guide__lede">
    In Agartala, CBSE schools sit alongside schools on the Tripura board and a smaller number following CISCE or an
    international course, and many local tutors teach more than one board. That is useful, but a CBSE student needs a
    tutor who works from NCERT books and from CBSE's own curriculum, sample papers and marking schemes, which change
    from year to year. This page sets out what CBSE asks at each stage, what is new in 2026-27, how CBSE papers differ
    from TBSE papers, and how tutors reach your part of the city. The maths guidance reflects the role of Abhinandan
    Tiwary, who teaches Class 10 maths on CBSE and ICSE; the science guidance reflects Aaditya Kashyap's role teaching
    science on the same two boards.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#agb-two">CBSE and TBSE</a> ·
    <a href="#agb-stages">Stage by stage</a> ·
    <a href="#agb-new">2026-27 changes</a> ·
    <a href="#agb-senior">Senior subjects</a> ·
    <a href="#agb-coaching">Coaching and boards</a> ·
    <a href="#agb-hour">A tutoring hour</a> ·
    <a href="#agb-move">Changing board</a> ·
    <a href="#agb-places">Localities</a> ·
    <a href="#agb-mode">Home or online</a> ·
    <a href="#agb-demo">Demo questions</a> ·
    <a href="#agb-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="agb-two">CBSE and the Tripura board: what a tutor must keep apart</h2>
  <p>
    At Class 10 the two boards look alike on the surface: both set 80-mark papers in maths, science and English with
    20 marks of internal assessment, and the TBSE maths units even carry the same marks as CBSE's. The differences
    sit in the details a tutor practises against.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 10 on CBSE and on the Tripura board, from each board's current documents</caption>
    <thead>
      <tr><th scope="col">Point</th><th scope="col">CBSE</th><th scope="col">TBSE (Madhyamik)</th></tr>
    </thead>
    <tbody>
      <tr><td>Maths levels</td><td>Basic and Standard for the 2026-27 Class 10 batch only, then withdrawn</td><td>Basic and Standard in the current syllabus</td></tr>
      <tr><td>A second attempt</td><td>An optional second board exam to improve up to three of science, maths, social science and the languages</td><td>A Bachhar Bachao examination for Madhyamik candidates; the board's notices give the rules</td></tr>
      <tr><td>Practice material</td><td>NCERT books, CBSE sample papers and marking schemes</td><td>The board's syllabus with blueprints, its model question papers and the prescribed books</td></tr>
      <tr><td>Question style</td><td>About half of each paper tests competencies through cases and data</td><td>Question types and counts set out chapter by chapter in the blueprint</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Ask the tutor which board's documents they will mark against. If your child is on the state board, our
    <a href="{{ url('/tripura-board-tutor-agartala') }}">Tripura Board tutor</a> page is the right one.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agb-stages">What CBSE expects from Class 6 to Class 12</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE stage by stage for an Agartala student: who assesses, where children slip, and the tutor's focus</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Assessed by</th><th scope="col">Where children slip</th><th scope="col">Tutor's focus</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>The school</td><td>Fractions and decimals; reading science text carefully</td><td>Sound basics and the habit of showing working</td></tr>
      <tr><td>9</td><td>The school, on a common paper</td><td>Maths and science both step up together</td><td>Chapter tests; a decision on the Advanced paper</td></tr>
      <tr><td>10</td><td>CBSE: 80 marks plus 20 internal</td><td>Competency questions; answer presentation</td><td>Sample papers marked to the official scheme</td></tr>
      <tr><td>11</td><td>The school</td><td>Senior physics, chemistry and maths arriving at a much faster pace</td><td>A secure base before the board year</td></tr>
      <tr><td>12</td><td>CBSE: theory with practical or internal marks</td><td>Whole-syllabus revision competing with entrance preparation</td><td>One calendar that serves both</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Children who think in another language at home sometimes lose marks in maths and science because they misread an
    English question. A short habit in each session, reading a question aloud and then restating it in their own
    words, often fixes mistakes that look careless.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agb-new">What is new for CBSE Classes 9 and 10 in 2026-27?</h2>
  <p>
    In Class 9, maths and science are examined on one common paper for everyone. Besides that, CBSE offers an
    optional Advanced paper, which a student can take in one subject, in both or not at all. It lasts one hour, carries
    25 marks of higher-order questions on extra content, and sits outside the aggregate; a result of 50% or above is
    noted on the marksheet. It suits a child who already finds the subject comfortable, not one still catching up.
  </p>
  <p>
    For Class 10, two things matter this year. The 2026-27 batch is the final one offered a choice of Basic or
    Standard maths. And the board exam now comes twice: everyone sits the first, while the second is an optional
    attempt for a student who has passed to raise marks in up to three of science, maths, social science and the
    languages. A sensible family treats the first sitting as the real one. About half of each secondary
    paper checks competencies through case passages and data, so practice cannot stop at the NCERT exercises. The
    passing mark is 33% in a subject, and a third language, compulsory in these transition years, is assessed by the
    school. Our <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> follow the NCERT chapters.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agb-senior">How are Class 11 and 12 subjects marked?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How the 100 marks split in CBSE senior subjects under the 2026-27 curriculum, and what that means for tuition</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">Split of 100</th><th scope="col">What it means for tuition</th></tr>
    </thead>
    <tbody>
      <tr><td>Sciences: physics, chemistry, biology</td><td>Theory 70; practical 30</td><td>Lab records and viva need steady attention through the year</td></tr>
      <tr><td>Mathematics, or Applied Mathematics instead</td><td>Theory 80; internal 20</td><td>Only one of the two can be taken; long written answers carry the year</td></tr>
      <tr><td>Commerce: accountancy, economics, business studies</td><td>Theory 80; internal 20</td><td>Formats and presentation matter as much as content</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The Class 12 paper tests the whole Class 12 syllabus. The design of the questions is set out in that year's sample
    paper, which should be on the tutor's desk from the first month. Further reading: <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class
    12 physics strategies</a>, <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">organic and
    inorganic chemistry</a>, <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">calculus and algebra</a>,
    and <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agb-coaching">Keeping board marks safe beside entrance coaching</h2>
  <p>
    Students in Classes 11 and 12 who prepare for JEE or NEET often attend a coaching batch. Entrance syllabi lean on
    NCERT, so a CBSE student has less to reconcile than most, but the board still wants things a batch rarely teaches:
    full written answers with every step, labelled diagrams and a complete practical file. Three habits help:
  </p>
  <ul>
    <li><strong>A single revision calendar</strong> that marks which chapters need entrance depth and which need board writing.</li>
    <li><strong>A weekly written block</strong> from the start of Class 12, longer before the pre-boards.</li>
    <li><strong>Practical files kept current,</strong> since 30 of each science's 100 marks sit outside the theory paper.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agb-hour">What a useful CBSE tutoring hour contains</h2>
  <ol>
    <li><strong>Recall first:</strong> a short, book-closed check on last week's chapter.</li>
    <li><strong>The week's difficulty:</strong> the exercise questions your child got wrong, then one or two competency-style questions on the same idea.</li>
    <li><strong>One board-style answer,</strong> written in full and marked against the official scheme.</li>
    <li><strong>The plan for the week:</strong> what to read, what to solve and what to bring next time.</li>
  </ol>
  <p>
    If your child spends the hour copying while the tutor explains, the session is building the wrong skill for a
    CBSE paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agb-move">Moving between TBSE and CBSE</h2>
  <p>
    When an Agartala student changes between the Tripura board and CBSE, often at Class 9 or Class 11, the chapters
    overlap a great deal, so the move is less daunting than it looks. What changes is the paper: a CBSE student moving
    to TBSE needs to learn the board's blueprints and model papers, and a TBSE student moving to CBSE needs practice on
    competency-based questions and, in English, the analytical paragraph on a chart or graph. A change of medium, for
    example from Bengali to English, also needs a few weeks of paired technical terms. A tutor in the first term can
    handle all three.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agb-places">How CBSE tutors reach your part of Agartala</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Five Agartala localities for CBSE home tuition, with the detail to arrange before the first visit</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Zone</th><th scope="col">Before the first visit</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $agbA('abhoynagar', 'Abhoynagar') !!}</td><td>North</td><td>A lane landmark; tutors from Kunjaban, Indranagar and Banamalipur are nearest</td></tr>
      <tr><td>{!! $agbA('banamalipur', 'Banamalipur') !!}</td><td>Central</td><td>Say whether it is a house with doorstep arrival or a flat with a building gate</td></tr>
      <tr><td>{!! $agbA('joynagar', 'Joynagar') !!}</td><td>Central</td><td>A landmark in your lane rather than at the bazaar; move classes online on Durga Puja immersion days</td></tr>
      <tr><td>{!! $agbA('dhaleswar', 'Dhaleswar') !!}</td><td>East</td><td>Ashram Chowmuhani or Math Chowmuhani as the landmark; avoid school opening and closing hours</td></tr>
      <tr><td>{!! $agbA('pratapgarh', 'Pratapgarh') !!}</td><td>South</td><td>Town, Paschim or Purba Pratapgarh, as the parts are spread across two zones</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Zone guides cover <a href="{{ url('/city/agartala/zone/north-agartala') }}">North</a>,
    <a href="{{ url('/city/agartala/zone/central-agartala') }}">Central</a>,
    <a href="{{ url('/city/agartala/zone/east-agartala') }}">East</a> and
    <a href="{{ url('/city/agartala/zone/south-agartala') }}">South Agartala</a>; every locality is on the
    <a href="{{ url('/city/agartala') }}">Agartala page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agb-mode">Home or online for a CBSE student in Agartala?</h2>
  <p>
    For younger children, and for maths and science up to Class 10, a tutor at the table can see each step as it is
    written, which is hard to match on a screen. Online earns its place for brief revision before tests, for senior
    electives and when the teacher you want is on the far side of Agartala. With no metro and most tutors on
    two-wheelers or autos, heavy monsoon days are the obvious ones to switch to the screen, agreed in advance. See <a href="{{ url('/online-tutor-agartala') }}">online tutors for
    Agartala</a> and the <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online comparison</a>.
  </p>
  <p>
    Subject pages for Agartala: <a href="{{ url('/maths-home-tutor-agartala') }}">maths</a>,
    <a href="{{ url('/science-home-tutor-agartala') }}">science</a>,
    <a href="{{ url('/physics-home-tutor-agartala') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-agartala') }}">chemistry</a> and
    <a href="{{ url('/english-home-tutor-agartala') }}">English</a>. Tutors on NXTutors also teach social science,
    biology, computer science and the commerce subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agb-demo">Five questions for a CBSE tutor at the demo</h2>
  <ol>
    <li>Have you seen this session's sample papers, and will you mark my child's answers by CBSE's scheme?</li>
    <li>Where will practice for case-based and data questions come from, beyond the NCERT exercises?</li>
    <li>Is the Class 9 Advanced paper worth it for my child?</li>
    <li>Where in the week does written board practice go, given school tests and any coaching?</li>
    <li>Is our locality on your regular route at the hour we need?</li>
  </ol>
  <p>
    Not convinced after the demo? Tell us and the next tutor on the list is booked; a later switch costs nothing. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agb-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. The rate is each tutor's
    own, and it is on your shortlist before any demo. The <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    our <a href="{{ url('/blog/home-tuition-fees-agartala') }}">Agartala fees guide</a> list what to ask.
  </p>
  <p>
    To begin, tell us the class, the subjects, when school ends, any coaching hours, and your locality with a nearby
    landmark. Two or three matched tutors come back to you, and you pick one for a
    <a href="{{ url('/demo-class') }}">free demo class</a>. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>, and you can browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>. The <a href="{{ url('/blog/agartala-home-tuition-guide') }}">Agartala home tuition guide</a> covers the
    city as a whole, and teachers can find students on <a href="{{ url('/tuition-jobs/agartala') }}">Agartala tuition
    jobs</a>.
  </p>
  </section>

  </div>
</article>
