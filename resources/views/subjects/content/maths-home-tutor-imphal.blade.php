{{--
  Long-form guide for the "maths home tutor Imphal" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Page writer (capitals wave 2, subjects), 3 Oct 2026. Local facts
  come only from database/seo-content/areas/imphal-research.json (zone_facts
  and area "about" texts, each with sources).

  Manipur board facts, read 3 Oct 2026 on the bodies' own sites:
  - https://bosem.in/ : Board of Secondary Education, Manipur; results of the
    High School Leaving Certificate (HSLC) Examination 2026 and of the HSLC
    compartmental/special examination 2026; online migration certificate. No
    paper pattern is published there, so none is given for HSLC maths.
  - https://cohsem.nic.in/aboutus.html : Council of Higher Secondary
    Education, Manipur, set up in 1992 under the Manipur Higher Secondary
    Education Act, 1992; took over the +2 courses; conducts both the Class XI
    examination and the Higher Secondary (Class XII) examination.
  - https://cohsem.nic.in/docs/questionDesign/Mth.pdf : design of question
    paper, Mathematics, Classes XI and XII: 80 marks, 3 hours, 34 questions
    (6 essay/long answer = 30 marks; SA-I 3 = 12; SA-II 4 = 12; SA-III 5 = 10;
    VSA 6 = 6; MCQ 10 = 10); no sections; internal option in one SA-I (case
    study), two SA-II, one SA-III and three long answers; two MCQs
    assertion-reason; difficulty 30/50/20. Class XI content marks: sets,
    relations and functions 10; trigonometric functions 13; complex numbers
    and linear inequalities 8; permutations and combinations with binomial
    theorem 10; sequence and series 7; straight lines 6; circle, conics and
    introduction to 3D 6; limits and derivatives 8; statistics and
    probability 12. Class XII: relations and functions 4; inverse trig 4;
    matrices 5; determinants 5; continuity and differentiability 8;
    applications of derivatives 8; integrals 10; applications of integrals 3;
    differential equations 6; vectors 7; 3D geometry 7; linear programming 5;
    probability 8. Internal assessment 20: periodic tests 10 (two highest of
    three averaged) and mathematics activities 10 (any ten from the NCERT lab
    manual: record 5, year-end activity test 3, viva 2).
  - https://cohsem.nic.in/docs/Notice/Modification_of_Question_Design2026.pdf
    (notification 29 June 2026): 20-mark internal assessment for
    non-practical subjects from session 2026-27, Classes XI and XII.
  - https://cohsem.nic.in/docs/Notice/GradingSystem.pdf (notification 21 May
    2026): relative grading in the Class XI and Class XII examinations from
    2027; modalities to be notified separately.
  - https://cohsem.nic.in/academic_calender.html : regular classes from the
    first week of July (XI) and the last week of May (XII) until the last week
    of January; school term tests in late August and late October, pre-final
    in the first week of January; Class XI and Higher Secondary examinations
    in February-March; HS results in the third week of May.
  CBSE and entrance facts reuse the checked statements in
  database/seo-content/blog: cbse-class-10-maths-preparation (38 questions,
  five sections, 80 + 20), cbse-class-10-board-year-plan-gurgaon (two Class 10
  exams), cbse-class-12-maths-calculusalgebra (calculus 35) and
  jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern).
  Purely practical and educational; weather only as timing advice. No school,
  college, coaching institute, hospital, society or people's names; no
  distances or travel times; only the allowed fee sentence.

  Area links render only when that Imphal area page exists and is active.
--}}
@php
  $ipmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ipmA = function (string $slug, string $label) use ($ipmSlugs) {
      return in_array($slug, $ipmSlugs, true)
          ? '<a href="' . e(url('/city/imphal/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ipm-guide" aria-labelledby="ipmGuideTitle">
  <h2 id="ipmGuideTitle">Maths home tutor in Imphal: two public exams after Class 10, a 34-question council paper and a tutor who can find your leikai</h2>

  <p class="nx-guide__lede">
    Maths in Imphal runs through more public examinations than most families expect. Class 10 ends with the High
    School Leaving Certificate examination of the Board of Secondary Education, Manipur, or with the CBSE board.
    After that, a student in a council school sits a Class XI examination set by the Council of Higher Secondary
    Education, Manipur, and then the Higher Secondary examination in Class XII. Each paper rewards a slightly
    different habit, and from 2026-27 the council has added internal assessment and announced relative grading.
    Share the class, the board and your leikai with NXTutors; a shortlist of two or three maths tutors comes back, each
    with a fee you can read before choosing, and the opening lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ipm-who">Who writes this</a> ·
    <a href="#ipm-ten">Class 10</a> ·
    <a href="#ipm-eleven">Class XI paper</a> ·
    <a href="#ipm-twelve">Class XII paper</a> ·
    <a href="#ipm-internal">Internal marks</a> ·
    <a href="#ipm-jee">JEE alongside</a> ·
    <a href="#ipm-year">The council year</a> ·
    <a href="#ipm-leikai">Six localities</a> ·
    <a href="#ipm-demo">The demo</a> ·
    <a href="#ipm-fees">Fees</a> ·
    <a href="#ipm-next">Next step</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ipm-who">Whose advice is this, and what do we ask before matching?</h2>
  <p>
    This page carries two maths bylines: Ajay Vatsyayan, who teaches IB, IGCSE and ISC mathematics, and Abhinandan
    Tiwary, who teaches Class 10 maths for CBSE and ICSE. Everything said here about the Manipur bodies comes from their
    own websites, bosem.in and cohsem.nic.in, and the current document on those sites always wins over this summary.
  </p>
  <p>
    The first thing we ask an Imphal family is who sets the next paper. For Class 10 the usual answers are the Board of
    Secondary Education, Manipur (often shortened to BOSEM) and CBSE. For Classes 11 and 12 it is usually the council
    (COHSEM) or CBSE, and some families choose ISC or an international course instead. That one answer decides the
    practice papers, the month the revision starts and which tutor on our list is the right fit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipm-ten">What should a Class 10 maths tutor do for HSLC or CBSE?</h2>
  <p>
    The board's website is mainly a results and certificates portal: it carries the 2026 HSLC results, the results of
    the compartmental and special examination, and online migration certificates. It does not publish a maths paper
    design that we could read, so we will not describe the HSLC maths paper here. Ask the school for the current
    question pattern and the sample papers it is using, and give them to the tutor at the first visit.
  </p>
  <p>
    CBSE is easier to describe because its curriculum is public. Its Class 10 maths paper is 3 hours long, with 38
    compulsory questions in five sections, A to E, for 80 marks; the school awards the remaining 20. CBSE also offers
    Class 10 students a second board sitting to improve up to three subjects, maths included. Whichever board your
    child sits, the tutor's work in Class 10 looks much the same:
  </p>
  <ul>
    <li><strong>Find the leaks early.</strong> A marked school test tells a tutor more in ten lines than a month of guessing; most lost marks are arithmetic, misreading or one concept that never settled.</li>
    <li><strong>Write proofs and word problems in full.</strong> These are habits, built over months, and they carry marks on every board.</li>
    <li><strong>Practise from the right paper.</strong> HSLC families use the school's and the board's material; CBSE families use the sample papers on cbseacademic.nic.in.</li>
  </ul>
  <p>
    For CBSE detail, read the chapter-wise <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths
    preparation guide</a> and the <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year
    planner</a>; for how a Class 10 match works, see <a href="{{ url('/maths-home-tutor/class-10') }}">maths tutors for
    Class 10</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipm-eleven">Why does Class XI maths matter so much under the council?</h2>
  <p>
    In many states Class 11 is a school examination. Under COHSEM it is a council examination, held in February and
    March like the Higher Secondary paper, so a weak Class 11 year shows up on a public marksheet. The council's
    question design for Class XI maths sets 34 questions for 80 marks in three hours, and the marks per topic are
    published:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>COHSEM Class XI mathematics: marks per topic in the council's question design, and what a tutor should watch</caption>
    <thead>
      <tr><th scope="col">Topic</th><th scope="col">Marks</th><th scope="col">Watch for</th></tr>
    </thead>
    <tbody>
      <tr><td>Trigonometric functions</td><td>13</td><td>Identities learned as patterns rather than memorised lists; general solutions written in full</td></tr>
      <tr><td>Statistics and probability</td><td>12</td><td>Sample spaces written out before any probability is calculated</td></tr>
      <tr><td>Sets, relations and functions</td><td>10</td><td>Notation used precisely from the first week</td></tr>
      <tr><td>Permutations, combinations and binomial theorem</td><td>10</td><td>Deciding whether order matters before choosing a formula</td></tr>
      <tr><td>Complex numbers and linear inequalities</td><td>8</td><td>Graphs of inequalities shaded and labelled</td></tr>
      <tr><td>Limits and derivatives</td><td>8</td><td>The first calculus chapter, and the base for most of Class XII</td></tr>
      <tr><td>Sequence and series</td><td>7</td><td>Telling an arithmetic from a geometric question quickly</td></tr>
      <tr><td>Straight lines</td><td>6</td><td>Forms of a line converted without slips</td></tr>
      <tr><td>Circle, conic sections and an introduction to 3D</td><td>6</td><td>Standard equations recognised on sight</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Trigonometry and probability together carry 25 marks, nearly a third of the paper. A tutor who starts Class XI by
    fixing algebra and trigonometric identities is not wasting time; most later chapters lean on both.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipm-twelve">How is the Higher Secondary (Class XII) maths paper built?</h2>
  <p>
    The Class XII design keeps the same shape: 34 questions, 80 marks, three hours and no separate sections. What
    changes is the content, and calculus dominates it. Continuity and differentiability (8), applications of
    derivatives (8), integrals (10), applications of integrals (3) and differential equations (6) add up to 35 of the 80
    marks.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>COHSEM Class XII mathematics: the 80 marks by form of question</caption>
    <thead>
      <tr><th scope="col">Form of question</th><th scope="col">How many</th><th scope="col">Marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Essay or long answer</td><td>6</td><td>30</td></tr>
      <tr><td>Short answer I (one of them a case study)</td><td>3</td><td>12</td></tr>
      <tr><td>Short answer II</td><td>4</td><td>12</td></tr>
      <tr><td>Short answer III</td><td>5</td><td>10</td></tr>
      <tr><td>Very short answer</td><td>6</td><td>6</td></tr>
      <tr><td>Multiple choice (two of them assertion-reason)</td><td>10</td><td>10</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Six long answers make up 30 marks, and internal choice appears in three of them, one SA-I, two SA-II and one
    SA-III question. The rest of the paper spreads across
    vectors and three-dimensional geometry (7 each), probability (8), matrices and determinants (5 each), linear
    programming (5), and relations, functions and inverse trigonometry (4 each). The design also fixes the balance of
    difficulty at 30% difficult, 50% average and 20% easy, so a student who aims only at the easy questions cannot pass
    comfortably.
  </p>
  <p>
    So: fully worked calculus answers every week from the start of Class XII, with vectors and probability kept warm.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipm-internal">What changed in 2026-27: internal marks and relative grading</h2>
  <p>
    By a notification of 29 June 2026, the council introduced 20 marks of internal assessment for non-practical
    subjects in Classes XI and XII from the 2026-27 session, and maths is one of them. The maths design splits those
    marks in two:
  </p>
  <ul>
    <li><strong>Periodic tests, 10 marks.</strong> The school holds three pen-and-paper tests through the year, and the average of the two highest counts.</li>
    <li><strong>Mathematics activities, 10 marks.</strong> The student completes any ten activities from the NCERT laboratory manual for the class and keeps a record (5 marks), sits a year-end activity test (3) and a viva (2).</li>
  </ul>
  <p>
    A tutor can help with both: treating each periodic test as a small board paper, and checking that the activity
    record is complete and that your child can explain each activity aloud before the viva. Separately, a notification
    of 21 May 2026 says relative grading will be introduced in the Class XI and Higher Secondary examinations from 2027,
    with details to be notified later. Until those details appear on cohsem.nic.in, we would not plan around guesses.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipm-jee">How should Class XII maths and JEE share the week?</h2>
  <p>
    Some Imphal science students prepare for JEE alongside the council or CBSE paper. CBSE's Class 12 maths paper is
    also out of 80 with calculus worth 35, so on either board the same chapters settle the result. In JEE Main 2026,
    Paper 1 had 75 questions worth 300 marks; maths had 25 of them, twenty of the multiple-choice kind and five needing a
    numerical value, with four marks gained for each right answer and one lost for each wrong one. For later years, go
    by what NTA posts on jeemain.nta.nic.in.
  </p>
  <p>
    The two kinds of work pull in opposite directions. Board answers are written out step by step; entrance practice is
    against the clock, then each error is traced back. Keeping them on separate days stops one habit spoiling the other.
    Further reading: <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">calculus and algebra for Class
    12</a>, <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths, topic by topic</a> and
    <a href="{{ url('/maths-home-tutor/class-12') }}">maths tutors for Class 12</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipm-year">How should maths tuition follow the council's year?</h2>
  <p>
    The council's academic calendar puts the start of regular Class XII classes in the last week of May and Class XI in
    the first week of July, with teaching continuing until the last week of January and both examinations in February
    and March. Schools may hold term tests in late August and late October and a pre-final in the first week of January.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A maths tuition rhythm for a council student in Imphal, built on the COHSEM academic calendar</caption>
    <thead>
      <tr><th scope="col">Months</th><th scope="col">Visits</th><th scope="col">Focus</th></tr>
    </thead>
    <tbody>
      <tr><td>Late May to August</td><td>Two a week after school</td><td>Keep pace with class; calculus or trigonometry foundations; first periodic test</td></tr>
      <tr><td>September to October</td><td>Two a week, with an online slot ready for heavy-rain evenings</td><td>Finish the long-answer chapters; second term test; activity record checked</td></tr>
      <tr><td>November to early January</td><td>Two or three a week</td><td>Full 34-question papers to the council design; pre-final review</td></tr>
      <tr><td>Late January to the examination</td><td>Short, frequent sessions</td><td>Past papers from the council's site, timing and layout</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    CBSE dates come from cbse.gov.in instead, and a tutor teaching both boards needs two separate calendars. When to
    move a lesson online rather than cancel it is covered in
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tuition</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipm-leikai">What should a maths tutor know about your part of Imphal?</h2>
  <p>
    Most Imphal localities are made up of many leikais, each with its own name, and most tutors travel by two-wheeler or
    auto. A precise address, a landmark and a phone number for the first visit matter more than anything else. Six
    localities from all three parts of the city show what to share; the <a href="{{ url('/city/imphal') }}">Imphal
    page</a> lists every area we cover.
  </p>
  <dl>
    <dt><strong>Uripok, Thangmeiband and Lamphel</strong></dt>
    <dd>{!! $ipmA('uripok', 'Uripok') !!}: a long-settled area of named leikais and pockets such as Naoremthong and Khwai Brahmapur. Give the leikai and a nearby landmark; tutors already teaching in Langol or Lamphel can usually add a home here.</dd>
    <dd>{!! $ipmA('thangmeiband', 'Thangmeiband') !!}: a large, central area of named leikais that takes in part of Thangal Bazar. Roads towards the market are busiest late in the afternoon, so a fixed early-evening slot is easier to keep.</dd>
    <dt><strong>Sagolband, Keishampat and Singjamei</strong></dt>
    <dd>{!! $ipmA('sagolband', 'Sagolband') !!}: many leikais and lanes, from Sagolband Tera to Old Lambulane. Share the leikai, the lane name and a landmark, and avoid the evening rush near Paona Bazar.</dd>
    <dd>{!! $ipmA('singjamei', 'Singjamei') !!}: forms one natural catchment with Chingamakha, so a tutor from either side can visit regularly. Several leikai names sound alike, so spell yours out.</dd>
    <dt><strong>Wangkhei, Khurai and Porompat</strong></dt>
    <dd>{!! $ipmA('wangkhei', 'Wangkhei') !!}: east of the Imphal River. Tutors from across the river use the central bridges, which get busy late in the afternoon; tutors from Khurai or Chingmeirong are often the easier match.</dd>
    <dd>{!! $ipmA('khurai', 'Khurai') !!}: a large area of many leikais in Imphal East. An early-evening slot with a tutor from the eastern side usually works better than a crossing at rush hour.</dd>
  </dl>
  <p>
    The three zone pages, <a href="{{ url('/city/imphal/zone/uripok-thangmeiband-lamphel') }}">Uripok, Thangmeiband
    and Lamphel</a>, <a href="{{ url('/city/imphal/zone/sagolband-keishampat-singjamei') }}">Sagolband, Keishampat and
    Singjamei</a> and <a href="{{ url('/city/imphal/zone/wangkhei-khurai-porompat') }}">Wangkhei, Khurai and
    Porompat</a>, cover the rest.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipm-demo">What should you look for in the free demo?</h2>
  <p>
    Keep a recently marked school or periodic test ready, and ask that the demo cover this week's chapter. Watch for:
  </p>
  <ol>
    <li><strong>Diagnosis first.</strong> The tutor reads the marked paper, or sets a short problem, before explaining anything new.</li>
    <li><strong>Named reasons for lost marks.</strong> Each mistake is put down to arithmetic, careless reading or a concept that needs re-teaching.</li>
    <li><strong>The right paper design.</strong> For a council student, the tutor knows the paper has six five-mark long answers and practises to that shape; for CBSE, the five sections.</li>
    <li><strong>A task before the next visit.</strong> Homework is set, and you know when it will be checked.</li>
  </ol>
  <p>
    Not the right fit? A second tutor from your shortlist can take the next demo, and changing tutor later is free. For
    a fuller list of signs, see our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">checklist for demo
    classes</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipm-fees">What does a maths home tutor in Imphal charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    rates; class, board, experience with the council or CBSE paper, the ride to your leikai and visits per week all
    play a part, and the shortlist shows each rate up front. See the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and <a href="{{ url('/blog/home-tuition-fees-imphal') }}">Imphal tuition fees</a> for questions worth
    asking.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipm-next">What should you send us for a maths shortlist?</h2>
  <p>
    Send the class and board (HSLC, council or CBSE), your locality and leikai with a landmark, the free afternoons and
    a rough budget. We reply with two or three maths tutors and their rates; you pick one for the free demo. Tutors who
    join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before a profile is published. Where
    no suitable tutor can reach your leikai at your hour, lessons can run online instead. NXTutors is run from Sector
    66, Gurugram. More: <a href="{{ url('/maths-home-tutor') }}">maths tutoring across India</a>, the
    <a href="{{ url('/blog/imphal-home-tuition-guide') }}">Imphal home tuition guide</a>, the
    <a href="{{ url('/manipur-board-tutor-imphal') }}">Manipur Board (BOSEM and COHSEM) page</a> and
    <a href="{{ url('/tutors') }}">tutor profiles</a>.
  </p>
  <p>
    Teach maths in Imphal? Requests from nearby families appear on
    <a href="{{ url('/tuition-jobs/imphal') }}">Imphal tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
