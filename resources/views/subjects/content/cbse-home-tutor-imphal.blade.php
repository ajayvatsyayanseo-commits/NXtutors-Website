{{--
  Board page for "CBSE home tutor Imphal". Authors: Abhinandan Tiwary (role:
  Class 10 CBSE and ICSE maths) and Aaditya Kashyap (role: CBSE and ICSE
  science). No anecdotes, years or results are claimed. No schools, coaching
  institutes or people are named. Page writer (capitals wave 2, subjects),
  3 Oct 2026.

  CBSE facts only as the Gurgaon board hub (cbse-home-tutor-gurgaon) states
  them, which cites cbseacademic.nic.in / cbse.gov.in (read 1 Oct 2026):
  Curriculum 2026-27 Secondary (80 + 20 in major subjects, 33% pass; Class 9
  annual school exam of 80 + 20; optional Advanced maths and science in
  Class 9 from 2026-27; Standard/Basic maths split being discontinued except
  the 2026-27 Class 10 batch); two Class 10 board exams (first compulsory,
  improve up to three subjects); Class 11 exams set by the school, Class 12 by
  CBSE; Curriculum 2026-27 Senior Secondary (Physics 042, Chemistry 043,
  Biology 044 at 70 + 30; Mathematics 041 / Applied Mathematics 241 at
  80 + 20). Subject-paper detail reuses database/seo-content/blog
  (cbse-class-10-maths-preparation, cbse-class-10-science-notes,
  cbse-class-12-physics-strategies, cbse-class-12-chemistry-organicinorganic,
  cbse-class-12-maths-calculusalgebra).
  Manipur facts from the official sites (read 3 Oct 2026):
  - https://cohsem.nic.in/Curriculum_Syllabus_for_Classes_XI_XII.html :
    students from boards other than BOSEM need the council's Eligibility
    Certificate before Class XI admission in a council-recognised institution.
  - https://cohsem.nic.in/aboutus.html : COHSEM conducts the Class XI and
    Higher Secondary examinations.
  - https://cohsem.nic.in/docs/questionDesign/Mth.pdf and
    docs/subjects/41_Physics.pdf, 27_Chemistry.pdf, 24_Biology.pdf : council
    maths 80 + 20 internal; physics, chemistry and biology 70 + 30 practical,
    NCERT textbooks.
  - https://bosem.in/ : BOSEM conducts the HSLC examination (described
    generally only).
  Imphal's board mix is not quantified. Local detail only from
  database/seo-content/areas/imphal-research.json. Fee wording is the
  approved sentence. Area links render only for active areas.
--}}
@php
  $ipbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ipbA = function (string $slug, string $label) use ($ipbSlugs) {
      return in_array($slug, $ipbSlugs, true)
          ? '<a href="' . e(url('/city/imphal/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ipb-guide" aria-labelledby="ipbGuideTitle">
  <h2 id="ipbGuideTitle">CBSE home tutors in Imphal: one national curriculum, two Class 10 sittings and a council next door</h2>

  <p class="nx-guide__lede">
    A CBSE family in Imphal lives with two systems side by side. The child's own board publishes its curriculum, sample
    papers and marking schemes nationally, while neighbours and cousins may be preparing for the HSLC examination of the
    Board of Secondary Education, Manipur, or the council's Class XI and XII papers. Advice passed between families can
    mix the two. This page sets out what CBSE asks for from Class 6 to Class 12, where a home tutor helps most, and what
    to watch if your child moves between CBSE and a council school. Tell us the class, subjects and your locality, and we
    suggest two or three CBSE tutors, with fees shown before a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ipb-stages">Stage by stage</a> ·
    <a href="#ipb-nine">Class 9</a> ·
    <a href="#ipb-ten">Class 10</a> ·
    <a href="#ipb-senior">Classes 11–12</a> ·
    <a href="#ipb-switch">Switching boards</a> ·
    <a href="#ipb-week">A CBSE week</a> ·
    <a href="#ipb-subjects">Subject pages</a> ·
    <a href="#ipb-where">Localities</a> ·
    <a href="#ipb-demo">Demo questions</a> ·
    <a href="#ipb-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ipb-stages">Who sets the exam at each CBSE stage?</h2>
  <p>
    This page carries two bylines: Abhinandan Tiwary, who teaches Class 10 maths for CBSE and ICSE, and Aaditya Kashyap,
    who teaches CBSE and ICSE science. Knowing who sets the paper tells a tutor how much the board's own sample papers
    matter at each stage.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE from Class 6 to Class 12: who examines, and the usual tutoring need</caption>
    <thead>
      <tr><th scope="col">Classes</th><th scope="col">Exam set by</th><th scope="col">Where a tutor helps</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>The school</td><td>Maths foundations, science concepts, reading and writing habits</td></tr>
      <tr><td>9</td><td>The school (80-mark annual exam plus 20 internal)</td><td>Maths and science; whether to take the optional Advanced papers</td></tr>
      <tr><td>10</td><td>CBSE (80-mark board paper) plus 20 school-assessed</td><td>Maths, science and an all-subject plan for the two sittings</td></tr>
      <tr><td>11</td><td>The school</td><td>Stream subjects, while the gap from Class 10 is still small</td></tr>
      <tr><td>12</td><td>CBSE (theory plus practical or internal marks)</td><td>Physics, chemistry, maths, biology, commerce subjects</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Note the contrast with the council: a COHSEM student sits a council-set examination in Class XI, while a CBSE student's
    Class 11 examination is set by the school. That does not make Class 11 less important on CBSE; it decides how ready a
    student is for Class 12.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipb-nine">What changed in Class 9 from 2026-27?</h2>
  <p>
    CBSE's 2026-27 secondary curriculum adds an optional Advanced level in Class 9 maths and science, in addition to the
    common course, and the old Standard and Basic split in maths is being discontinued, although the 2026-27 Class 10 batch
    continues under the earlier scheme. For a family, the practical question is whether the Advanced papers suit the
    child. A tutor can help decide by looking at how comfortably the child handles the regular course by the middle of the
    year, rather than by ambition alone. Class 9 is also the right time to settle weak arithmetic, algebra and chemical
    formulae, because Class 10 leaves little room to go back.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipb-ten">How does the Class 10 board year work now?</h2>
  <p>
    In major subjects, the Class 10 result combines an 80-mark board paper with 20 marks of internal assessment, and a
    student needs at least 33% to pass a subject. CBSE now holds two Class 10 board examinations: the first is compulsory,
    and an optional second sitting lets a student improve up to three subjects. For a tutor, that changes the shape of the
    year. The plan should aim at the first sitting as if it were the only one, and then use the second, if needed, for the
    one or two subjects that fell short.
  </p>
  <ul>
    <li><strong>Maths:</strong> 38 compulsory questions in five sections, A to E, in three hours. See the <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation</a> guide.</li>
    <li><strong>Science:</strong> 39 questions, with biology 30, chemistry 25 and physics 25 of the 80 marks. See the <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a>.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipb-senior">How are Classes 11 and 12 marked on CBSE?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 marks in common subjects (2026-27 curriculum) beside the council's figures where published</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">CBSE</th><th scope="col">COHSEM</th></tr>
    </thead>
    <tbody>
      <tr><td>Physics</td><td>70 theory + 30 practical</td><td>70 theory + 30 practical</td></tr>
      <tr><td>Chemistry</td><td>70 + 30 practical</td><td>70 + 30 practical</td></tr>
      <tr><td>Biology</td><td>70 + 30 practical</td><td>70 + 30 practical</td></tr>
      <tr><td>Mathematics (or Applied Mathematics on CBSE)</td><td>80 + 20 internal</td><td>80 + 20 internal (from 2026-27)</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The totals look alike, but the papers do not: CBSE's Class 12 physics and chemistry papers have 33 questions in five
    sections, while the council's have 36 questions without sections. A tutor who teaches both must keep separate practice
    sets. CBSE students choose either Mathematics or Applied Mathematics, not both. Our guides to
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics</a>,
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Class 12 chemistry</a> and
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 maths</a> go chapter by chapter.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipb-switch">What if your child moves between CBSE and a council school?</h2>
  <p>
    Some students finish Class 10 on CBSE and join Class XI in a council-recognised school or college, and some go the
    other way. The council's rules say students from any board other than the Board of Secondary Education, Manipur must
    obtain the council's Eligibility Certificate before Class XI admission; the form is on cohsem.nic.in, and admission
    without it is treated as invalid. Start that paperwork early.
  </p>
  <p>
    Academically, the move is manageable because both systems teach maths and science from NCERT books at this level. The
    adjustments are the paper designs, the council's own English books, and the fact that Class XI becomes a public
    examination. A tutor who knows both can make the switch in the first term: start with the council's paper design for
    each subject, read the council's English anthology early, and treat the first periodic test as a rehearsal for the
    Class XI examination. Going the other way, from a council school to CBSE, the main changes are the five-section
    papers and CBSE's own sample papers. The
    <a href="{{ url('/manipur-board-tutor-imphal') }}">Manipur Board tutor</a> page explains BOSEM and COHSEM in more
    detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipb-week">What does a sensible CBSE tuition week look like?</h2>
  <p>
    For a Class 10 student, two visits a week in maths and one or two in science usually cover the board year without
    crowding out school work. Each visit should include something marked: a section of a sample paper, a set of case-based
    questions or a written explanation. For Classes 11 and 12, plan subject by subject, and an evening
    online session can be added before tests. A separate tutor for each senior subject often makes sense, since each
    paper has its own design and practical or internal work. For the wettest weeks of the year, settle beforehand that a visit may become an online session on a
    heavy-rain day instead of being lost.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipb-subjects">Which subject pages should you read next?</h2>
  <p>
    Each Imphal subject page covers CBSE alongside the council: <a href="{{ url('/maths-home-tutor-imphal') }}">maths</a>,
    <a href="{{ url('/science-home-tutor-imphal') }}">science</a> for Classes 6 to 10,
    <a href="{{ url('/physics-home-tutor-imphal') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-imphal') }}">chemistry</a> and
    <a href="{{ url('/english-home-tutor-imphal') }}">English</a>. For lessons from a tutor anywhere in India, see
    <a href="{{ url('/online-tutor-imphal') }}">online tutors for Imphal</a>. The
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths</a> and
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths</a> pages explain how we match for the board years,
    and the <a href="{{ url('/cbse-home-tutor-gurgaon') }}">Gurugram CBSE page</a> has more on competency-based questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipb-where">How do tutors reach your side of Imphal?</h2>
  <p>
    Most tutors travel by two-wheeler or auto, and Imphal's leikai names matter for a first visit. Five localities, from
    all three parts of the city:
  </p>
  <ul>
    <li>{!! $ipbA('thangmeiband', 'Thangmeiband') !!}: a large central area of many leikais; tutors from Uripok, Langol and Lamphel can reach it, ideally before the late-afternoon market traffic.</li>
    <li>{!! $ipbA('keishampat', 'Keishampat') !!}: a compact cluster with Kwakeithel and Sagolband next door; similar leikai names make a landmark essential.</li>
    <li>{!! $ipbA('sagolband', 'Sagolband') !!}: central, with many named lanes; give the leikai, the lane and a landmark.</li>
    <li>{!! $ipbA('porompat', 'Porompat') !!}: the Imphal East district headquarters; lessons that start once offices close usually begin on time.</li>
    <li>{!! $ipbA('wangkhei', 'Wangkhei') !!}: east of the river, with tutors from Khurai and Chingmeirong close by.</li>
  </ul>
  <p>
    The <a href="{{ url('/city/imphal') }}">Imphal page</a> lists every locality, and the zone pages for
    <a href="{{ url('/city/imphal/zone/uripok-thangmeiband-lamphel') }}">Uripok, Thangmeiband and Lamphel</a>,
    <a href="{{ url('/city/imphal/zone/sagolband-keishampat-singjamei') }}">Sagolband, Keishampat and Singjamei</a> and
    <a href="{{ url('/city/imphal/zone/wangkhei-khurai-porompat') }}">Wangkhei, Khurai and Porompat</a> add detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipb-demo">Which questions should you ask a CBSE tutor at the demo?</h2>
  <ol>
    <li>Which sample paper and marking scheme will you use this year, and where do they come from?</li>
    <li>How would you plan for the first Class 10 sitting, and when would the second be worth taking?</li>
    <li>How will you handle case-based and assertion-reason questions?</li>
    <li>For Classes 11 and 12: how will you prepare the practical or internal marks?</li>
    <li>Have you taught students moving to or from a council school?</li>
  </ol>
  <p>
    The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> adds more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipb-fees">What do CBSE tutors in Imphal charge, and how do you start?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Rates are set by each tutor
    and shown on the shortlist before any demo; the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and the
    <a href="{{ url('/blog/home-tuition-fees-imphal') }}">Imphal fee guide</a> help you compare.
  </p>
  <p>
    Send the class, subjects, your locality and leikai, and the afternoons that suit. Two or three CBSE tutors come back;
    the first class is a free demo, and switching later is free. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a>
    or <a href="{{ url('/demo-class') }}">book a demo class</a>; teachers can see requests on
    <a href="{{ url('/tuition-jobs/imphal') }}">Imphal tuition jobs</a>, and the
    <a href="{{ url('/blog/imphal-home-tuition-guide') }}">Imphal home tuition guide</a> walks through the city.
  </p>
  </section>

  </div>
</article>
