{{--
  Board page for "CBSE home tutor Dehradun". Authors: Abhinandan Tiwary (role:
  Class 10 CBSE and ICSE maths) and Aaditya Kashyap (role: CBSE and ICSE
  science). No anecdotes, years or results are claimed. No schools, coaching
  institutes, campuses, factories or people are named. Page writer (capitals
  phase 2), 3 Oct 2026.

  CBSE facts only as the Gurgaon board hub (cbse-home-tutor-gurgaon) states
  them, which cites cbseacademic.nic.in / cbse.gov.in (read 1 Oct 2026):
  Curriculum 2026-27 Secondary (80 + 20 in major subjects, 33% pass, about
  half competency-focused questions, Class IX common paper + optional
  Advanced 25 marks / 1 hour, not in aggregate, 50%+ noted; Basic/Standard
  discontinued except the 2026-27 Class X batch; R3 internally assessed);
  Notification 14.02.2026 on two Class X board exams (first compulsory,
  improve up to three of science, maths, social science, languages);
  Curriculum 2026-27 Senior Secondary (Physics 042, Chemistry 043, Biology
  044 at 70 + 30; Mathematics 041 / Applied Mathematics 241, one only,
  Accountancy 055, Economics 030, Business Studies 054 at 80 + 20).
  Uttarakhand board comparison only from ubse.uk.gov.in: HS Mathematics and
  HS Science 2026-27 syllabus files (80 theory + 20 internal assessment, NCERT
  prescribed books), linked from
  https://ubse.uk.gov.in/document-category/syllabus-high-school/ (see
  uttarakhand-board-tutor-dehradun for full URLs). The Dehradun hub names
  UBSE, CBSE, ICSE/ISC and IB/IGCSE; no shares or board-by-area claims.
  Local detail only from database/seo-content/areas/dehradun-research.json.
  Fee wording is the approved sentence. Area links render only for active
  Dehradun areas.
--}}
@php
  $dcbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $dcbA = function (string $slug, string $label) use ($dcbSlugs) {
      return in_array($slug, $dcbSlugs, true)
          ? '<a href="' . e(url('/city/dehradun/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="dcbGuideTitle">
  <h2 id="dcbGuideTitle">CBSE home tutors in Dehradun: NCERT done properly, papers written well</h2>

  <p class="nx-guide__lede">
    CBSE is one of several boards Dehradun children study under, alongside the Uttarakhand board, ICSE and ISC, and a
    smaller group on IB or IGCSE. What a CBSE tutor needs to do changes a great deal between Class 7 and Class 12, and
    the board itself has changed its rules for the middle years. This page sets out what CBSE asks for at each stage
    under the 2026-27 curriculum, how the board differs from the state board many neighbours follow, how a weekly plan
    can sit beside school and coaching, how tutors reach each part of the valley, and what to check in the free demo.
    It is written with our maths and science authors' roles in mind: Class 10 CBSE and ICSE maths, and CBSE and ICSE
    science.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#dcb-ladder">Class by class</a> ·
    <a href="#dcb-910">Classes 9 and 10</a> ·
    <a href="#dcb-senior">Classes 11 and 12</a> ·
    <a href="#dcb-ubse">CBSE or UBSE</a> ·
    <a href="#dcb-plan">A weekly plan</a> ·
    <a href="#dcb-mode">Home or online</a> ·
    <a href="#dcb-subj">Subjects</a> ·
    <a href="#dcb-where">Localities</a> ·
    <a href="#dcb-demo">The demo</a> ·
    <a href="#dcb-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="dcb-ladder">What a CBSE tutor should focus on, class by class</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE from Class 6 to Class 12 for a Dehradun student</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Assessed by</th><th scope="col">Usual difficulty</th><th scope="col">Tutor's priority</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>The school</td><td>Fractions, integers and the first algebra; reading a science chapter for meaning</td><td>Secure basics and the habit of showing working</td></tr>
      <tr><td>9</td><td>The school: 80-mark annual papers plus 20 internal</td><td>Maths and science both widen at once</td><td>Regular chapter tests, and a decision on the Advanced papers</td></tr>
      <tr><td>10</td><td>CBSE board: 80 in the paper, 20 assessed in school</td><td>Application-style questions and neat presentation</td><td>Sample papers marked against the official scheme</td></tr>
      <tr><td>11</td><td>The school</td><td>A steep jump in physics, chemistry and maths</td><td>A firm base before the board year begins</td></tr>
      <tr><td>12</td><td>CBSE board: theory plus practical or internal marks</td><td>Revising the full syllabus while entrance work competes for time</td><td>One plan that serves the board and any entrance exam</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    At Class 10 a subject needs at least 33% to pass. Trouble that seems to appear suddenly in Class 9 usually began
    with weak fractions or early algebra in Class 7 or 8, so tuition in the middle years pays off most as repair work
    rather than racing ahead.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcb-910">Classes 9 and 10 under the 2026-27 curriculum</h2>
  <ul>
    <li><strong>A common paper in Class 9.</strong> Every student takes one 80-mark maths paper and one 80-mark science paper.</li>
    <li><strong>An optional Advanced paper.</strong> A student can add an Advanced paper in maths, science, both or neither: 25 marks, one hour, entirely higher-order questions on extra content. It does not count in the aggregate, and a score of 50% or more is recorded on the marksheet. Choose it only where your child is already comfortable.</li>
    <li><strong>Basic and Standard maths are ending.</strong> The 2026-27 Class 10 batch is the last to finish under the older split.</li>
    <li><strong>Two Class 10 board exams.</strong> The first is compulsory. A student who passes may sit the second to improve marks in up to three of science, maths, social science and the languages. Treat the first as the real exam.</li>
    <li><strong>Competency questions.</strong> About half of each secondary paper tests whether a student can use ideas: cases, sources, data and unfamiliar situations.</li>
    <li><strong>A third language.</strong> It is compulsory in the transition years and assessed by the school, without a board paper.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation plan</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> follow the NCERT chapters, and
    the <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page covers the national picture.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcb-senior">Classes 11 and 12: how the marks are split</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Senior secondary marks for common subjects, CBSE 2026-27</caption>
    <thead>
      <tr><th scope="col">Subject (code)</th><th scope="col">Theory</th><th scope="col">Practical or internal</th></tr>
    </thead>
    <tbody>
      <tr><td>Physics (042), Chemistry (043), Biology (044)</td><td>70</td><td>30 practical</td></tr>
      <tr><td>Mathematics (041) or Applied Mathematics (241), only one</td><td>80</td><td>20 internal</td></tr>
      <tr><td>Accountancy (055), Economics (030), Business Studies (054)</td><td>80</td><td>20 internal</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    In science, 30 marks rest on practical work, so a tutor should check the practical file and the viva preparation as
    seriously as the theory. The Class 12 paper covers the whole Class 12 syllabus, and the design changes a little each
    year with the sample paper, which any tutor should be using. Our guides to
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics</a>,
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">organic and inorganic chemistry</a> and
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">calculus and algebra</a> help with the board year,
    as does the <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcb-ubse">CBSE or the Uttarakhand board: what changes for a tutor?</h2>
  <p>
    Dehradun families sometimes move between CBSE and the Uttarakhand Board of School Education, or have one child in
    each. The overlap is larger than many expect. The state board's own 2026-27 High School syllabus files for
    mathematics and science prescribe the NCERT textbooks and split each subject into an 80-mark paper and 20 marks of
    internal assessment, which is close to CBSE's structure. The differences lie in the paper designs, the internal
    assessment rules and the language of the paper.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Points to check when a student moves between CBSE and UBSE</caption>
    <thead>
      <tr><th scope="col">Point</th><th scope="col">What to do</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper design</td><td>Use each board's own sample papers; question types and section layouts are not the same</td></tr>
      <tr><td>Internal marks</td><td>Read the school's scheme for projects, practicals and unit tests under the new board</td></tr>
      <tr><td>Language</td><td>The state board's 2026 High School science sample paper is printed in Hindi and English; learn the terms in the language the school uses</td></tr>
      <tr><td>Class 10 rules</td><td>CBSE's two-exam system and Advanced papers are CBSE rules only; do not assume they apply under UBSE</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For state-board detail, see <a href="{{ url('/uttarakhand-board-tutor-dehradun') }}">Uttarakhand board tutors in
    Dehradun</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcb-plan">A weekly plan that protects board marks</h2>
  <p>
    Many Class 11 and 12 students in Dehradun also prepare for JEE or NEET, and the entrance work tends to swallow the
    board subjects. A sensible CBSE week keeps three things in it however busy the term gets:
  </p>
  <ol>
    <li><strong>One written session.</strong> A full board-style answer in each core subject, timed, then marked against the CBSE scheme. Objective practice alone leaves students unable to present steps.</li>
    <li><strong>One practical or project check.</strong> The file, the observations, the viva questions. Thirty marks in each science are too many to leave to the last week.</li>
    <li><strong>One short review of weak NCERT chapters.</strong> Board questions grow from NCERT text and exercises, so a student who has skipped them is exposed whatever their mock scores say.</li>
  </ol>
  <p>
    If entrance preparation is part of the plan, see <a href="{{ url('/jee-home-tutor-dehradun') }}">JEE</a> and
    <a href="{{ url('/neet-home-tutor-dehradun') }}">NEET</a> home tutors in Dehradun.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcb-mode">Home or online for CBSE in Dehradun?</h2>
  <p>
    Below Class 9, a tutor at the table is nearly always better; young students need someone watching the pencil.
    From Class 9 upward, maths and science still gain most from home sessions, while English, social science and
    revision checks work well online. Online also covers the evenings the valley makes difficult: dark, cold winter
    nights and heavy-rain days in the monsoon. Many families settle on one home visit and one online session a week.
    The <a href="{{ url('/online-tutor-dehradun') }}">online tutors for Dehradun</a> page explains the set-up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcb-subj">Which subject pages to read next</h2>
  <ul>
    <li><a href="{{ url('/maths-home-tutor-dehradun') }}">Maths home tutors in Dehradun</a>, Class 6 to 12.</li>
    <li><a href="{{ url('/science-home-tutor-dehradun') }}">Science home tutors in Dehradun</a> for school science before the subjects split.</li>
    <li><a href="{{ url('/physics-home-tutor-dehradun') }}">Physics</a>, <a href="{{ url('/chemistry-home-tutor-dehradun') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-dehradun') }}">biology</a> for Classes 11 and 12.</li>
    <li><a href="{{ url('/english-home-tutor-dehradun') }}">English home tutors in Dehradun</a> for language and literature papers.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcb-where">How CBSE tutors reach six Dehradun localities</h2>
  <ul>
    <li><strong>{!! $dcbA('indira-nagar', 'Indira Nagar') !!}</strong> (Vasant Vihar and Chakrata Road zone): mostly independent houses, so the tutor arrives at the door; tutors from Vasant Vihar, Ballupur and GMS Road are close.</li>
    <li><strong>{!! $dcbA('ballupur', 'Ballupur') !!}</strong>: the chowk is busy at office hours, so an evening slot after the peak starts more reliably. Share the building and floor for a flat.</li>
    <li><strong>{!! $dcbA('prem-nagar', 'Prem Nagar') !!}</strong>: on the western edge along Chakrata Road; a tutor living nearby is far easier to keep than one coming out from the centre.</li>
    <li><strong>{!! $dcbA('patel-nagar', 'Patel Nagar') !!}</strong> (Saharanpur Road and Clement Town zone): builder floors are common, so give the floor number; avoid shift-change times near the industrial area.</li>
    <li><strong>{!! $dcbA('majra', 'Majra') !!}</strong>: close to Saharanpur Road and the ISBT; a weekday slot outside the evening rush suits a tutor from Majra, Turner Road or GMS Road.</li>
    <li><strong>{!! $dcbA('clement-town', 'Clement Town') !!}</strong>: a cantonment with its own visitor arrangements; check them and send the tutor the details before the first class. Winter evenings suit an earlier slot.</li>
  </ul>
  <p>
    Families on the east and north of the city can read the zone pages for
    <a href="{{ url('/city/dehradun/zone/rajpur-road-dalanwala') }}">Rajpur Road and Dalanwala</a>,
    <a href="{{ url('/city/dehradun/zone/sahastradhara-raipur') }}">Sahastradhara and Raipur</a> and
    <a href="{{ url('/city/dehradun/zone/haridwar-road') }}">Haridwar Road</a>; the west and south are covered by
    <a href="{{ url('/city/dehradun/zone/vasant-vihar-chakrata-road') }}">Vasant Vihar and Chakrata Road</a> and
    <a href="{{ url('/city/dehradun/zone/saharanpur-road-clement-town') }}">Saharanpur Road and Clement Town</a>. Every
    locality is on the <a href="{{ url('/city/dehradun') }}">Dehradun home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcb-demo">Five questions for a CBSE tutor at the demo</h2>
  <ol>
    <li>Which CBSE classes have you taught recently, and did that include the new Class 9 and 10 rules?</li>
    <li>Can you show me how a board answer in this chapter would be marked, step by step?</li>
    <li>How do you handle competency questions, the ones built on a case or a set of data?</li>
    <li>What will you check in the practical file or project, and when?</li>
    <li>Which day and time can you keep every week, including in winter?</li>
  </ol>
  <p>
    If the answers do not convince you, ask for another demo; switching tutor later is free. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> lists more checks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcb-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Every tutor sets their own fee, and it is shown before the demo. Read the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-dehradun') }}">home tuition fees in Dehradun</a> for more detail.
  </p>
  <p>
    Send the class, subjects, school timings and your locality with a landmark. We reply with two or three matched
    tutors, and the first class is a <a href="{{ url('/demo-class') }}">free demo</a>. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>; you can also browse <a href="{{ url('/tutors') }}">tutor
    profiles</a> or read the <a href="{{ url('/blog/dehradun-home-tuition-guide') }}">Dehradun home tuition guide</a>.
    CBSE teachers can look at <a href="{{ url('/tuition-jobs/dehradun') }}">Dehradun tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
