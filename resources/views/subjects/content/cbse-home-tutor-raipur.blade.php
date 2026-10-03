{{--
  Board page for "CBSE home tutor Raipur". Authors: Abhinandan Tiwary (role:
  Class 10 CBSE and ICSE maths) and Aaditya Kashyap (role: CBSE and ICSE
  science). No anecdotes, years or results are claimed. No schools, coaching
  institutes or people are named. Page writer, 3 Oct 2026.

  CBSE facts only as the Gurgaon and Patna board pages state them, which cite
  cbseacademic.nic.in / cbse.gov.in (read 1 Oct 2026): Curriculum 2026-27
  Secondary (80 + 20 in major subjects, 33% pass, about half competency-focused
  questions, Class IX common paper + optional Advanced 25 marks / 1 hour, not
  in aggregate, 50%+ noted; Basic/Standard discontinued except the 2026-27
  Class X batch; third language assessed internally in the transition years);
  Notification 14.02.2026 on two Class X board exams (first compulsory,
  improve up to three of science, maths, social science, languages);
  Curriculum 2026-27 Senior Secondary (Physics 042, Chemistry 043, Biology 044
  at 70 + 30; Mathematics 041 / Applied Mathematics 241, one only,
  Accountancy 055, Economics 030, Business Studies 054 at 80 + 20).
  CGBSE comparison facts from cgbse.nic.in (read 3 Oct 2026):
  https://cgbse.nic.in/Documents/2026/adhyapan_yojana_2026_27.pdf (Class 10
  subjects 75 + 25, pass 25 and 8, passed separately) and
  https://cgbse.nic.in/Documents/2024/SecondExam_Gazette_Notification_edit.pdf
  (second main examination). Raipur's board mix only as the hub states it (no
  shares). Local detail only from raipur-research.json, raipur-zone-guides.json
  and the hub. Fee wording is the approved sentence. Area links render only for
  active Raipur areas.
--}}
@php
  $rcbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $rcbA = function (string $slug, string $label) use ($rcbSlugs) {
      return in_array($slug, $rcbSlugs, true)
          ? '<a href="' . e(url('/city/raipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="rcbGuideTitle">
  <h2 id="rcbGuideTitle">CBSE home tutors in Raipur: NCERT done properly, from Class 6 to the Class 12 board</h2>

  <p class="nx-guide__lede">
    In Raipur, CBSE runs alongside the Chhattisgarh state board, ICSE and a smaller number of IB and IGCSE schools, and a
    family may need to compare them when a child changes school or the family moves to the city. A CBSE home tutor's work
    rests on one set of books, NCERT, and on one set of official documents: the curriculum and sample papers CBSE
    publishes every year. This page covers what CBSE expects at each stage, the 2026-27 changes in Classes 9 and 10,
    how CBSE papers differ from CG Board papers, how to protect board marks when a coaching batch takes the
    afternoons, and how tutors reach your part of the city. The approach follows the roles of our named authors:
    Abhinandan Tiwary teaches Class 10 CBSE and ICSE maths, and Aaditya Kashyap teaches CBSE and ICSE science.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#rcb-vs">CBSE and CGBSE</a> ·
    <a href="#rcb-ladder">Class by class</a> ·
    <a href="#rcb-910">Classes 9 and 10 in 2026-27</a> ·
    <a href="#rcb-senior">Classes 11 and 12</a> ·
    <a href="#rcb-batch">Board and batch</a> ·
    <a href="#rcb-session">A tutoring session</a> ·
    <a href="#rcb-switch">Switching boards</a> ·
    <a href="#rcb-where">Localities</a> ·
    <a href="#rcb-mode">Home or online</a> ·
    <a href="#rcb-subjects">Subjects</a> ·
    <a href="#rcb-demo">Demo</a> ·
    <a href="#rcb-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="rcb-vs">CBSE next to the CG Board: what a tutor must not mix up</h2>
  <p>
    Tutors in Raipur often teach both boards, which is useful but carries a risk: preparing a CBSE student for a CG
    Board paper, or the reverse. The two differ in ways that change how a student practises.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 10 under CBSE and under CGBSE, from each board's 2026-27 documents</caption>
    <thead>
      <tr><th scope="col">Point</th><th scope="col">CBSE</th><th scope="col">CGBSE</th></tr>
    </thead>
    <tbody>
      <tr><td>Main subjects</td><td>80-mark paper plus 20 internal</td><td>75-mark paper plus 25 practical or project</td></tr>
      <tr><td>Passing</td><td>33% in the subject</td><td>25 in the paper and 8 in the practical or project, each passed separately</td></tr>
      <tr><td>A second chance in the same year</td><td>A second Class 10 board exam to improve up to three of science, maths, social science and the languages</td><td>A second main examination for Class 10 and Class 12, to clear or improve subjects</td></tr>
      <tr><td>What to practise from</td><td>NCERT books and CBSE's current sample papers and marking schemes</td><td>The board's prescribed books, blueprints and model papers on cgbse.nic.in</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The practical lesson is simple: ask the tutor which board's documents they will mark against, and make sure it is
    yours. If your child is on the state board, see our <a href="{{ url('/chhattisgarh-board-tutor-raipur') }}">Chhattisgarh
    Board tutor</a> page instead.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcb-ladder">What CBSE asks at each stage</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE for a Raipur student, Class 6 to Class 12</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Assessed by</th><th scope="col">Common sticking points</th><th scope="col">Tutor's focus</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>The school</td><td>Fractions, negative numbers, reading a science paragraph closely</td><td>Repair basics; insist on written working</td></tr>
      <tr><td>9</td><td>The school: an 80-mark paper and 20 internal</td><td>Maths and science both widen at once</td><td>Regular chapter tests; decide on the Advanced paper</td></tr>
      <tr><td>10</td><td>CBSE: 80-mark paper and 20 internal</td><td>Application questions and presentation</td><td>Sample papers marked to the official scheme</td></tr>
      <tr><td>11</td><td>The school</td><td>The jump in physics, chemistry and maths, often as coaching begins</td><td>A firm base before the board year</td></tr>
      <tr><td>12</td><td>CBSE: theory plus practical or internal marks</td><td>Revising the whole syllabus while entrance tests compete for time</td><td>One plan that covers both</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Many Raipur children speak Hindi or Chhattisgarhi at home and study in English at a CBSE school. In the middle
    classes, a tutor who spends part of each session on reading a science or maths question aloud and explaining it
    back often fixes "careless" mistakes that are really comprehension gaps.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcb-910">Classes 9 and 10 in the 2026-27 curriculum</h2>
  <p>
    In Class 9 everyone sits a common 80-mark maths paper and a common science paper. A student can also opt for an
    Advanced paper in maths, science, both or neither: one hour, 25 marks, entirely higher-order questions on extra
    content. Those marks stay out of the aggregate, and 50% or more is noted on the marksheet. The old Basic and
    Standard maths split is being withdrawn, with the 2026-27 Class 10 batch the last to finish under it. Choose
    Advanced only in a subject your child already finds easy.
  </p>
  <p>
    Class 10 now has two board exams. The first is compulsory. A student who passes may return for the second to
    improve up to three of science, maths, social science and the languages; plan for the first as the one that counts.
    Around half of each secondary paper tests competencies, through case passages, data and unfamiliar situations, so
    practice should include questions that are not lifted from NCERT exercises. A third language is compulsory in the
    transition years and is assessed by the school. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> follow the NCERT chapters.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcb-senior">Classes 11 and 12: how marks are split</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Senior subjects in the CBSE 2026-27 curriculum</caption>
    <thead>
      <tr><th scope="col">Subject (code)</th><th scope="col">Theory</th><th scope="col">Practical or internal</th></tr>
    </thead>
    <tbody>
      <tr><td>Physics (042), Chemistry (043), Biology (044)</td><td>70</td><td>30, practical</td></tr>
      <tr><td>Mathematics (041) or Applied Mathematics (241), not both</td><td>80</td><td>20, internal</td></tr>
      <tr><td>Accountancy (055), Economics (030), Business Studies (054)</td><td>80</td><td>20, internal</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The Class 12 board paper covers the whole Class 12 syllabus, and CBSE says senior papers will lean further towards
    real-life application. The question design comes with each year's sample paper, which the tutor should be using.
    Useful reading for the board year: <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics
    strategies</a>, <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">organic and inorganic chemistry</a>
    and <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">calculus and algebra</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcb-batch">Protecting board marks while coaching takes the afternoon</h2>
  <p>
    Many Raipur students in Classes 11 and 12 join a JEE or NEET batch that meets in the afternoon. Because the entrance
    syllabus rests on NCERT, a CBSE student has less to bridge than most, but the board still asks for something the
    batch does not: complete written answers with each step, labelled diagrams, and practical files. Three habits keep
    both on track:
  </p>
  <ul>
    <li><strong>One combined revision calendar,</strong> marking which chapters need entrance depth and which need board writing.</li>
    <li><strong>A written-answer block</strong> every week from the start of Class 12, growing before the pre-boards.</li>
    <li><strong>Practical files on a schedule,</strong> because 30 of the 100 marks in each science sit outside the theory paper.</li>
  </ul>
  <p>
    For the entrance side, see <a href="{{ url('/jee-home-tutor-raipur') }}">JEE</a> and
    <a href="{{ url('/neet-home-tutor-raipur') }}">NEET</a> home tutors in Raipur.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcb-session">What a good CBSE tutoring hour looks like</h2>
  <ol>
    <li><strong>Ten minutes of recall</strong> on last week's chapter, without the book.</li>
    <li><strong>Thirty minutes on the week's problem:</strong> the exercise questions your child got wrong, then one or two competency-style questions on the same idea.</li>
    <li><strong>Fifteen minutes of written practice</strong> on one board-style answer, marked against the official scheme.</li>
    <li><strong>Five minutes to set the week:</strong> what to read, what to solve, what to bring next time.</li>
  </ol>
  <p>
    A tutor who spends the whole hour explaining while your child copies is teaching the wrong skill for a CBSE paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcb-switch">Switching between the CG Board and CBSE</h2>
  <p>
    When a Raipur student moves between the state board and CBSE, for example at the start of Class 9 or Class 11, the
    chapters overlap more than parents expect, but three things change at once, and a tutor in the first term can
    smooth all three:
  </p>
  <ul>
    <li><strong>The paper.</strong> A CG Board student used to a fixed nineteen-question plan and a 75-mark paper meets CBSE's 80-mark papers with competency-based passages; the reverse move brings a published blueprint and separate pass marks for practical or project work.</li>
    <li><strong>The books.</strong> CBSE works from NCERT; the CG Board uses its own prescribed books. Topics such as commercial mathematics appear in the CG Board's Class 10 maths blueprint, so check the new syllabus chapter by chapter.</li>
    <li><strong>The language.</strong> A move from Hindi to English medium, or the other way, needs a few weeks of paired technical terms.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcb-where">How CBSE tutors reach your side of Raipur</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Raipur localities for CBSE home tuition</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Zone</th><th scope="col">Before the first visit</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $rcbA('kamal-vihar', 'Kamal Vihar') !!}</td><td>South</td><td>Send sector, block and plot; mention both names, Kamal Vihar and Kaushalya Mata Vihar</td></tr>
      <tr><td>{!! $rcbA('amlidih', 'Amlidih') !!}</td><td>South</td><td>A map pin for newer plotted layouts; tutors from Telibandha and Mahaveer Nagar are close</td></tr>
      <tr><td>{!! $rcbA('mahaveer-nagar', 'Mahaveer Nagar') !!}</td><td>South</td><td>For complexes, the block and flat number go to the gate in advance</td></tr>
      <tr><td>{!! $rcbA('kota', 'Kota') !!}</td><td>West</td><td>Pick a tutor on your side of the Great Eastern Road; flats register visitors</td></tr>
      <tr><td>{!! $rcbA('tatibandh', 'Tatibandh') !!}</td><td>West</td><td>A tutor from your side of the highway keeps evening lessons on time</td></tr>
      <tr><td>{!! $rcbA('kabir-nagar', 'Kabir Nagar') !!}</td><td>West</td><td>Block and house numbers are enough; flat blocks may have a caretaker who asks names</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Zone guides cover <a href="{{ url('/city/raipur/zone/central-raipur') }}">Central</a>,
    <a href="{{ url('/city/raipur/zone/east-raipur') }}">East</a>,
    <a href="{{ url('/city/raipur/zone/south-raipur') }}">South</a> and
    <a href="{{ url('/city/raipur/zone/west-raipur') }}">West Raipur</a>; every locality is on the
    <a href="{{ url('/city/raipur') }}">Raipur page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcb-mode">Home or online for CBSE in Raipur?</h2>
  <p>
    Home sessions suit younger children and maths and science up to Class 10, where watching the working matters.
    Online suits short pre-test revision, senior electives and any subject where the right tutor lives across the city.
    Raipur has no metro and most tutors ride two-wheelers, so on the hottest afternoons and the heaviest monsoon days a
    pre-agreed online session keeps the week intact. Our <a href="{{ url('/online-tutor-raipur') }}">online tutors for
    Raipur</a> page and the <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online comparison</a> help
    you decide.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcb-subjects">Subjects and the Raipur pages for each</h2>
  <p>
    Maths and science take most CBSE requests from Class 8 onwards, with physics, chemistry and biology split out in
    the senior years. Tutors on NXTutors also teach English, Hindi, social science, computer science and the commerce
    subjects. Raipur subject pages: <a href="{{ url('/maths-home-tutor-raipur') }}">maths</a>,
    <a href="{{ url('/science-home-tutor-raipur') }}">science</a>, <a href="{{ url('/physics-home-tutor-raipur') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-raipur') }}">chemistry</a>, <a href="{{ url('/biology-home-tutor-raipur') }}">biology</a>
    and <a href="{{ url('/english-home-tutor-raipur') }}">English</a>. For the national view, see the
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> and
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcb-demo">Five questions for a CBSE tutor at the demo</h2>
  <ol>
    <li>Which of this year's CBSE sample papers and marking schemes will you use?</li>
    <li>How will you prepare my child for the competency-based questions, not just the NCERT exercises?</li>
    <li>In Class 9, would you advise the Advanced paper for my child, and why?</li>
    <li>How will you fit written board practice around the coaching batch?</li>
    <li>Can you reach our locality at the same hour every week?</li>
  </ol>
  <p>
    If the fit is wrong, we arrange another demo, and switching later is free. See the
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcb-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own fee and you see it before the demo. Read the <a href="{{ url('/pricing-guide') }}">pricing guide</a>
    and <a href="{{ url('/blog/home-tuition-fees-raipur') }}">home tuition fees in Raipur</a>.
  </p>
  <p>
    Send the class, subjects, school timings, any coaching hours and your locality with a landmark. You receive two or
    three matched tutors and book a <a href="{{ url('/demo-class') }}">free demo class</a>. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>; you can browse <a href="{{ url('/tutors') }}">tutor profiles</a>
    as well. ICSE families should see <a href="{{ url('/icse-home-tutor-raipur') }}">ICSE home tutors in Raipur</a>.
    Teachers can find students through <a href="{{ url('/tuition-jobs/raipur') }}">Raipur tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
