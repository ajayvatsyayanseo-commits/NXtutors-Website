{{--
  Board page for "CBSE home tutor Shillong". Authors: Abhinandan Tiwary (role:
  Class 10 CBSE and ICSE maths) and Aaditya Kashyap (role: CBSE and ICSE
  science). No anecdotes, years or results are claimed. No schools, colleges,
  universities, coaching institutes, hospitals, societies or people are
  named; no distances or travel times; no defence or tourism references.
  Page writer (capitals wave 2, subjects), 3 Oct 2026.

  CBSE facts as the Gurgaon and Dehradun board pages state them, citing
  cbseacademic.nic.in / cbse.gov.in (read 1 Oct 2026): Curriculum 2026-27
  Secondary (80 + 20 in major subjects, 33% pass, about half
  competency-focused questions, Class IX common paper + optional Advanced
  paper of 25 marks / 1 hour outside the aggregate, 50%+ noted; Basic/Standard
  maths ending after the 2026-27 Class X batch; third language assessed in
  school); Notification 14.02.2026 on two Class X board exams (first
  compulsory, improve up to three subjects); Curriculum 2026-27 Senior
  Secondary (Physics, Chemistry, Biology 70 + 30; Mathematics or Applied
  Mathematics, Accountancy, Economics, Business Studies 80 + 20).

  MBOSE comparison only from www.mbose.in (read 3 Oct 2026):
  SSLC maths and science sample papers 2024-25
  (https://www.mbose.in/public/media_file/1782119605.pdf,
  https://www.mbose.in/public/media_file/1782119640.pdf: 80 theory, pass 24;
  20 internal, pass 6; step minimums in maths, word limits in science);
  Notification No. 40 (https://www.mbose.in/public/media_file/1782119473.pdf:
  CBSE question pattern for Class XI-XII subjects using CBSE syllabus and NCERT
  books, HSSLC from 2026); SSLC programme 2026-27 with papers 4-16 Dec 2026
  (https://www.mbose.in/public/notice/17893801860.pdf).
  Local detail only from database/seo-content/areas/shillong-research.json.
  Fee wording is the approved sentence. Area links render only for active
  Shillong areas.
--}}
@php
  $slbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $slbA = function (string $slug, string $label) use ($slbSlugs) {
      return in_array($slug, $slbSlugs, true)
          ? '<a href="' . e(url('/city/shillong/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide slb-guide" aria-labelledby="slbGuideTitle">
  <h2 id="slbGuideTitle">CBSE home tutors in Shillong: the NCERT years done carefully, beside a state board on a different clock</h2>

  <p class="nx-guide__lede">
    In Shillong, CBSE runs side by side with the state's own Meghalaya Board of School Education, and the two boards
    have grown closer in some ways and stayed apart in others. Both use NCERT textbooks for core subjects,
    and since the 2026 HSSLC, MBOSE sets Class 11 and 12 papers in those subjects to the CBSE question pattern. Yet
    Class 10 still differs in calendar, paper design and internal rules. A CBSE tutor needs to know exactly what CBSE
    expects in 2026-27, class by class, without carrying over habits from the other board. Below we cover the CBSE
    stages, the practical differences from MBOSE, a tuition week that fits around school and coaching, and the checks
    worth making at the free demo. Our named authors here write on Class 10 maths for CBSE and ICSE (Abhinandan
    Tiwary) and on CBSE and ICSE science (Aaditya Kashyap).
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#slb-stages">Stage by stage</a> ·
    <a href="#slb-910">Classes 9 and 10</a> ·
    <a href="#slb-1112">Classes 11 and 12</a> ·
    <a href="#slb-mbose">CBSE beside MBOSE</a> ·
    <a href="#slb-week">A weekly plan</a> ·
    <a href="#slb-mode">Home or online</a> ·
    <a href="#slb-local">Five localities</a> ·
    <a href="#slb-demo">The demo</a> ·
    <a href="#slb-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="slb-stages">What a CBSE tutor should concentrate on, stage by stage</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE from Class 6 to Class 12 for a Shillong student: who assesses, the usual sticking point, and the tutor's job</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Who assesses</th><th scope="col">Usual sticking point</th><th scope="col">Tutor's job</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>The school</td><td>Fractions, negative numbers, first algebra; reading a science chapter for meaning</td><td>Firm basics and the habit of showing every step</td></tr>
      <tr><td>9</td><td>The school, on 80-mark papers plus 20 internal</td><td>Maths and science widen at the same time</td><td>Steady chapter tests and a sensible call on the Advanced papers</td></tr>
      <tr><td>10</td><td>CBSE, 80 in the board paper and 20 in school</td><td>Application questions and tidy presentation</td><td>Sample papers marked against the official scheme</td></tr>
      <tr><td>11</td><td>The school</td><td>The jump in physics, chemistry and maths</td><td>A secure base before the board year</td></tr>
      <tr><td>12</td><td>CBSE, theory plus practical or internal marks</td><td>Revising everything while entrance work competes</td><td>One plan for the board and any entrance exam</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    CBSE's Class 10 pass mark is 33% per subject. Difficulties that surface in Class 9 usually began with weak
    fractions or early algebra a couple of years before, which is why tuition in Classes 6 to 8 is most useful as
    repair rather than acceleration.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slb-910">Classes 9 and 10 under the 2026-27 curriculum</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE changes for Classes 9 and 10 in 2026-27, and what each means for tuition</caption>
    <thead>
      <tr><th scope="col">Change</th><th scope="col">What CBSE says</th><th scope="col">What it means at home</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 9 papers</td><td>All students write the same 80-mark paper in maths and in science</td><td>No easier track; gaps from Class 8 must close early</td></tr>
      <tr><td>Advanced option</td><td>An extra one-hour, 25-mark paper of higher-order questions in maths and/or science; not counted in the aggregate; 50% or above is recorded</td><td>Worth it only for a student who is already comfortable in the subject</td></tr>
      <tr><td>Class 10 maths levels</td><td>The Basic and Standard split ends after the 2026-27 Class 10 batch</td><td>This year's Class 10 should still confirm its level with the school</td></tr>
      <tr><td>Class 10 board exams</td><td>A compulsory first exam; an optional second for passed students to raise up to three subjects among science, maths, social science and languages</td><td>Treat the first sitting as the one that counts</td></tr>
      <tr><td>Question style</td><td>Roughly half of each secondary paper is competency-based: cases, sources, data, unfamiliar settings</td><td>Practise applying ideas, not only recalling them</td></tr>
      <tr><td>Third language</td><td>Compulsory and school-assessed, with no board paper</td><td>Keep it ticking over through the year rather than cramming it at the end</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For chapter-level help, read our <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">guide to Class 10
    maths</a>, the <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE science notes for Class 10</a> and
    the month-by-month <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year plan</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slb-1112">Classes 11 and 12: how marks divide</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE senior secondary marks in common subjects, 2026-27</caption>
    <thead>
      <tr><th scope="col">Subjects</th><th scope="col">Theory</th><th scope="col">Practical or internal</th></tr>
    </thead>
    <tbody>
      <tr><td>Physics, Chemistry, Biology</td><td>70</td><td>30 practical</td></tr>
      <tr><td>Mathematics or Applied Mathematics (one only)</td><td>80</td><td>20 internal</td></tr>
      <tr><td>Accountancy, Economics, Business Studies</td><td>80</td><td>20 internal</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Nearly a third of each science subject is practical, which makes the lab file and viva as much a tutor's business
    as the theory chapters. CBSE adjusts its question design slightly every session through the sample paper, so
    ask which year's sample the tutor works from. Further reading: <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics</a>,
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">organic and inorganic chemistry</a> and
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">calculus and algebra</a>, and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slb-mbose">CBSE beside MBOSE: what a tutor must keep separate</h2>
  <p>
    A family may have children on different boards, and students sometimes move from one to the other. The overlap is real
    but not complete, and a tutor who teaches both should know where the lines fall.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Points to check when a tutor teaches both CBSE and MBOSE students, or a student switches</caption>
    <thead>
      <tr><th scope="col">Point</th><th scope="col">CBSE</th><th scope="col">MBOSE</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 10 calendar</td><td>Dates announced on cbse.gov.in; two Class 10 exams</td><td>SSLC 2026-27 papers programmed from 4 to 16 December 2026</td></tr>
      <tr><td>Class 10 maths answers</td><td>Five sections, including case studies</td><td>Four sections; written answers must show a minimum number of steps</td></tr>
      <tr><td>Class 10 science answers</td><td>39 questions, including case-based items</td><td>Short answers held to word limits; choice within sections</td></tr>
      <tr><td>Pass marks</td><td>33% in a subject</td><td>24 of 80 in theory and 6 of 20 internal, per the sample papers</td></tr>
      <tr><td>Classes 11 and 12</td><td>CBSE pattern</td><td>CBSE question pattern for NCERT-based subjects from the 2026 HSSLC</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The practical lesson: in Class 10, use each board's own sample papers and never assume one board's rules, such as
    CBSE's second exam, apply to the other. In Classes 11 and 12 the papers look much more alike, so a strong CBSE
    tutor can often serve an HSSLC student too, provided they also use the MBOSE sample papers. For the state board in
    detail, see <a href="{{ url('/meghalaya-board-tutor-shillong') }}">MBOSE tutors in Shillong</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slb-week">A weekly plan that keeps board marks safe</h2>
  <p>
    When a senior student is also aiming at JEE or NEET, entrance practice quietly takes over the evenings. Three
    fixtures keep the board subjects alive in even the busiest week:
  </p>
  <ol>
    <li><strong>One long answer per core subject.</strong> Written against the clock and marked line by line with the CBSE scheme, because multiple-choice drills do not teach a student to lay out a derivation.</li>
    <li><strong>One look at the lab file or project.</strong> Readings complete, diagrams labelled, a few viva questions asked aloud.</li>
    <li><strong>One NCERT chapter revisited.</strong> The weakest one that week, since board questions are drawn from the textbook's own text and exercises.</li>
  </ol>
  <p>
    For entrance preparation, see the national <a href="{{ url('/jee-home-tutor') }}">JEE</a> and
    <a href="{{ url('/neet-home-tutor') }}">NEET</a> home tutor pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slb-mode">Home or online for CBSE in Shillong?</h2>
  <p>
    Up to Class 8, children learn more with an adult beside them who can see each line they write. From Class 9 the
    picture is mixed: maths and science still benefit from a visit, while English, social science and quick revision
    checks transfer well to a screen. A screen also covers the evenings the hills make awkward, such as cold winter
    nights or days of heavy monsoon rain. A common pattern is one visit plus one online lesson each week; the
    <a href="{{ url('/online-tutor-shillong') }}">online tutors for Shillong</a> page explains the set-up. Subject pages
    for the city: <a href="{{ url('/maths-home-tutor-shillong') }}">maths</a>,
    <a href="{{ url('/science-home-tutor-shillong') }}">science</a>,
    <a href="{{ url('/physics-home-tutor-shillong') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-shillong') }}">chemistry</a> and
    <a href="{{ url('/english-home-tutor-shillong') }}">English</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slb-local">How CBSE tutors reach five Shillong localities</h2>
  <p>
    With no railway in the city, tutors come by shared taxi, city bus or their own vehicle. Five examples of what to
    arrange:
  </p>
  <ul>
    <li><strong>{!! $slbA('mawprem', 'Mawprem') !!}</strong> (Police Bazar and Jaiaw zone): homes are reached from hill roads and connecting lanes, so say Upper or Lower Mawprem and name a church, shop or bus stop. Tutors already teaching in the central wards are close.</li>
    <li><strong>{!! $slbA('mawkhar', 'Mawkhar') !!}</strong>: one of the oldest parts of the city, beside the Iewduh (Bara Bazar) market and the Jhalupara bus stand. Market roads are busy in the day, so late afternoon or evening works better; for a flat above shops, share the floor and a phone number.</li>
    <li><strong>{!! $slbA('lawsohtun', 'Lawsohtun') !!}</strong> (Laban and Upper Shillong zone): a quieter residential pocket by Laban, Lumparing and Rilbong, often reached by sloping lanes. Shared taxis on the Laban routes help tutors without a vehicle.</li>
    <li><strong>{!! $slbA('madanrting', 'Madanrting') !!}</strong> (Laitumkhrah and Rynjah zone): on the edge of the city along the main road out, with stops at Mawblei and Madanrting. Tutors who already teach in Nongthymmai or Rynjah are the natural match; new lanes may not show on maps.</li>
    <li><strong>{!! $slbA('nongmynsong', 'Nongmynsong') !!}</strong> (Mawlai and Pynthorumkhrah zone): formerly Lalchand Basti, between Pynthorumkhrah and Rynjah, with the Nongmynsong and Umkdait stops on the main road. Mention any steps down from the road.</li>
  </ul>
  <p>
    Zone pages: <a href="{{ url('/city/shillong/zone/police-bazar-jaiaw') }}">Police Bazar and Jaiaw</a>,
    <a href="{{ url('/city/shillong/zone/laban-upper-shillong') }}">Laban and Upper Shillong</a>,
    <a href="{{ url('/city/shillong/zone/laitumkhrah-rynjah') }}">Laitumkhrah and Rynjah</a> and
    <a href="{{ url('/city/shillong/zone/mawlai-pynthorumkhrah') }}">Mawlai and Pynthorumkhrah</a>. Every locality is on
    the <a href="{{ url('/city/shillong') }}">Shillong home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slb-demo">What to check at the free demo</h2>
  <ol>
    <li><strong>The current documents.</strong> Can the tutor name this session's changes, such as the Class 9 Advanced paper or the two Class 10 exams?</li>
    <li><strong>Marking, not just teaching.</strong> Ask the tutor to mark one of your child's recent answers against the CBSE scheme.</li>
    <li><strong>Practical work.</strong> For Classes 11 and 12, how will the file and viva be checked through the year?</li>
    <li><strong>Board clarity.</strong> If the tutor also teaches MBOSE students, are they clear which rules belong to which board?</li>
  </ol>
  <p>
    Your shortlist has two or three tutors, each fee shown. The opening class is a free demo, and switching tutor at
    any later point is free as well. Tutors who join NXTutors go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before the profile is marked Verified. More questions are in the
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slb-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own rates; the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and the
    <a href="{{ url('/blog/home-tuition-fees-shillong') }}">home tuition fees in Shillong</a> article explain what moves
    them.
  </p>
  <p>
    Send the class, subjects, school timings and your locality with a landmark, then book the
    <a href="{{ url('/demo-class') }}">free demo class</a>, or look through <a href="{{ url('/tutors') }}">tutor
    profiles</a> first. Teachers of CBSE subjects can find openings on
    <a href="{{ url('/tuition-jobs/shillong') }}">Shillong tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
