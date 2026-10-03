{{--
  State-board hub: "Manipur Board tutor Imphal" (Board of Secondary
  Education, Manipur for Class 10; Council of Higher Secondary Education,
  Manipur for Classes 11 and 12). Author: nxtutors (NXTutors Academic Team).
  Page writer (capitals wave 2, subjects), 3 Oct 2026. No school, college,
  university, coaching, hospital, society or people names. No exam dates
  beyond the councils' own standing calendar, no results, no candidate or
  school counts. Purely educational and practical; weather only as timing
  advice.

  Official sources, read 3 Oct 2026:
  - https://bosem.in/ (title "Home::BSEM, Manipur"): Board of Secondary
    Education, Manipur; links to results of the High School Leaving
    Certificate (H.S.L.C.) Examination 2026 and the HSLC Examination -
    Compartmental/Special 2026 (result.bosem.in); Online Migration Certificate
    (migration.bosem.in). The site publishes no syllabus or paper design that
    could be read, so BOSEM is described generally and families are sent to
    the board and the school.
  - https://cohsem.nic.in/aboutus.html : Council of Higher Secondary
    Education, Manipur, established in 1992 under the Manipur Higher Secondary
    Education Act, 1992; took over the +2 courses earlier run as the HSSLC
    course and as a pre-university course; first public examination: Higher
    Secondary Examination, 1993; jurisdiction: all government, aided and
    private institutions with +2 courses in Manipur; functions: curriculum
    development, textbooks, evaluation and examination reform, conduct of the
    Class XI and Higher Secondary examinations.
  - https://cohsem.nic.in/exams.html : 52 subjects in the Arts, Science and
    Commerce groups (including English, many modern Indian languages,
    Alternative English, elective languages, Mathematics, Statistics,
    Computer Science, Physics, Chemistry, Biology, Biotechnology, Accountancy,
    Business Studies, Economics, Thang-Ta, Agriculture) and a Vocational stream
    of 15 trades.
  - https://cohsem.nic.in/Curriculum_Syllabus_for_Classes_XI_XII.html :
    Class XI admission for those who pass the BOSEM HSLC or an equivalent
    examination recognised by the council; Eligibility Certificate needed for
    students from other boards before admission; enrolment and registration
    through one institution only (double registration penalised).
  - https://cohsem.nic.in/academic_calender.html : last date of admission
    (XI last week of June; XII last week of May); regular classes from the
    first week of July (XI) / last week of May (XII) to the last week of
    January; school-based term tests last week of August (50/35), last week of
    October (50/35), pre-final first week of January (100/70); Class XI and
    Higher Secondary examinations February-March; HS results third week of
    May; improvement examination within June.
  - https://cohsem.nic.in/docs/Notice/Modification_of_Question_Design2026.pdf
    (29 June 2026): 20-mark internal assessment for non-practical subjects
    from 2026-27 in Classes XI and XII; GENERAL_GUIDELINES_FOR_ALLOTMENT_OF_
    20_MARKS_INTERNAL_ASSESSMENT.pdf: periodic tests 10 (average of the two
    highest of three) + activities/project 10.
  - https://cohsem.nic.in/docs/Notice/GradingSystem.pdf (21 May 2026):
    relative grading in Class XI and Higher Secondary examinations from 2027;
    modalities to be notified separately.
  - https://cohsem.nic.in/docs/questionDesign/Mth.pdf, E.pdf and
    docs/subjects/41_Physics.pdf, 27_Chemistry.pdf, 24_Biology.pdf : maths
    80 + 20, 34 questions; English 80 + 20, 40 questions in Class XII, the
    council's own anthology and supplementary reader; physics, chemistry and
    biology 70 + 30 practical with NCERT textbooks; designs use essay/long
    answer, SA-I/II/III, VSA and MCQ forms with two assertion-reason MCQs.
  - https://cohsem.nic.in/question.html, PreviousQuestions.html, Class-XI.html
    and Class-XII.html : question
    designs and previous question papers posted on the site.
  Local facts only from database/seo-content/areas/imphal-research.json.
  Fee wording is the approved sentence. FAQs render from
  faqs/manipur-board-tutor-imphal.php. Area links render only for active
  areas.
--}}
@php
  $ipxSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ipxA = function (string $slug, string $label) use ($ipxSlugs) {
      return in_array($slug, $ipxSlugs, true)
          ? '<a href="' . e(url('/city/imphal/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ipx-guide" aria-labelledby="ipxGuideTitle">
  <h2 id="ipxGuideTitle">Manipur Board tutors in Imphal: BOSEM for the HSLC, COHSEM for Classes XI and XII</h2>

  <p class="nx-guide__lede">
    "Manipur Board" means two bodies, not one. The Board of Secondary Education, Manipur (BOSEM) conducts the High
    School Leaving Certificate (HSLC) examination at the end of Class 10. The Council of Higher Secondary Education,
    Manipur (COHSEM) runs the +2 years and conducts two public examinations: the Class XI examination and the Higher
    Secondary examination in Class XII. A tutor for a Manipur Board student should know which body sets the next paper,
    where that body publishes its rules, and what changed this year. NXTutors matches families in Imphal with tutors for
    both stages, at home or online, with fees shown before a free first lesson.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ipx-who">Who does what</a> ·
    <a href="#ipx-hslc">The HSLC year</a> ·
    <a href="#ipx-move">Into Class XI</a> ·
    <a href="#ipx-streams">Streams and subjects</a> ·
    <a href="#ipx-papers">How papers are built</a> ·
    <a href="#ipx-new">2026-27 changes</a> ·
    <a href="#ipx-calendar">The council year</a> ·
    <a href="#ipx-plan">A tutor's plan</a> ·
    <a href="#ipx-where">Localities</a> ·
    <a href="#ipx-demo">The demo</a> ·
    <a href="#ipx-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ipx-who">BOSEM and COHSEM: who does what?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The two Manipur bodies a school student meets, and where each publishes its information</caption>
    <thead>
      <tr><th scope="col">Point</th><th scope="col">BOSEM</th><th scope="col">COHSEM</th></tr>
    </thead>
    <tbody>
      <tr><td>Stage</td><td>Class 10</td><td>Classes XI and XII</td></tr>
      <tr><td>Public examination</td><td>HSLC, plus a compartmental/special HSLC examination</td><td>Class XI examination and the Higher Secondary (Class XII) examination</td></tr>
      <tr><td>Official site</td><td>bosem.in</td><td>cohsem.nic.in</td></tr>
      <tr><td>What the site carries</td><td>Results, and online migration certificates</td><td>Notices, syllabi, question designs, previous papers, academic calendar, forms</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The council was set up in 1992 under the Manipur Higher Secondary Education Act, 1992, and held its first public
    examination, the Higher Secondary Examination, in 1993. It took over the +2 courses that had earlier been run
    separately, and its jurisdiction covers every government, aided and private institution with +2 classes in the
    state. Its functions include curriculum development, textbooks, evaluation and the conduct of both examinations.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipx-hslc">What should a tutor do in the HSLC year?</h2>
  <p>
    The board's website is a portal for results and certificates: it lists the 2026 HSLC results, the results of the
    2026 compartmental/special examination and an online migration certificate service. It does not publish a syllabus or
    paper design that we could read. So we do not describe the HSLC papers here, and neither should a tutor guess them.
    Ask the school for the current syllabus, the question pattern and the sample or previous papers it uses, and treat
    those as the plan.
  </p>
  <p>
    Within that, a good HSLC tutor does three things. First, finds the weak subjects early, using the school's own tests.
    Second, builds written answers that match the length and layout the school expects, subject by subject. Third, keeps
    an eye on Class XI: maths and science chapters skipped or rushed in Class 10 return in the council's Class XI papers.
    If your child may move to another board after Class 10, note that the board issues migration certificates online.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipx-move">How does a student move into Class XI under the council?</h2>
  <p>
    A student who passes the HSLC, or an equivalent examination the council recognises, can be admitted to Class XI in a
    council-recognised school or college. Students from any other board, including CBSE, must obtain the council's
    Eligibility Certificate before admission; admission without it is invalid. Every student then enrols and registers
    with the council through one institution only, and the council penalises registration in more than one. The council's
    calendar puts the last date of Class XI admission in the last week of June, so these steps belong in early summer.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipx-streams">Which streams and subjects does the council offer?</h2>
  <p>
    The council lists 52 subjects in three academic groups, Arts, Science and Commerce, and a separate Vocational stream
    of 15 trades. Alongside English and a long list of modern Indian languages, the list includes Alternative English
    and elective languages, Mathematics, Statistics, Computer Science, Physics, Chemistry, Biology, Biotechnology,
    Accountancy, Business Studies, Economics, Geography, Psychology, Agriculture and Thang-Ta. For tutoring, the
    practical points are:
  </p>
  <ul>
    <li><strong>Science:</strong> physics, chemistry and biology are each a 70-mark theory paper plus a 30-mark practical, taught from NCERT books. See <a href="{{ url('/physics-home-tutor-imphal') }}">physics</a> and <a href="{{ url('/chemistry-home-tutor-imphal') }}">chemistry</a> in Imphal.</li>
    <li><strong>Maths:</strong> 80 marks written plus 20 internal; the Class XII paper gives 35 marks to calculus. See <a href="{{ url('/maths-home-tutor-imphal') }}">maths in Imphal</a>.</li>
    <li><strong>English:</strong> the council's own anthology and supplementary reader, not NCERT; 80 written plus 20 internal. See <a href="{{ url('/english-home-tutor-imphal') }}">English in Imphal</a>.</li>
    <li><strong>Commerce and Arts:</strong> check the council's syllabus page for each subject's paper; our <a href="{{ url('/blog/how-to-choose-boardstream') }}">board and stream guide</a> helps with the choice.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipx-papers">How are council papers built?</h2>
  <p>
    Each subject has a published "design of question paper". The designs share a vocabulary: essay or long-answer
    questions, three grades of short answer (SA-I, SA-II and SA-III), very short answers and multiple-choice questions,
    two of which are assertion-reason items. Each design also states which questions carry internal choice and how the
    marks divide between difficult, average and easy questions. Three examples from the council's own files:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Three COHSEM Class XII question designs in brief</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Written marks and questions</th><th scope="col">Other marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics</td><td>80 marks, 34 questions, no sections; six long answers carry 30</td><td>20 internal: periodic tests and maths activities</td></tr>
      <tr><td>Physics</td><td>70 marks, 36 questions, no sections; optics carries 15</td><td>30 practical: experiments, project, record, viva</td></tr>
      <tr><td>English</td><td>80 marks, 40 questions in sections A, B and C (reading 18, writing 26, literature 36)</td><td>20 internal: periodic tests, project, viva</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A tutor should download the current design for every subject being taught and plan practice to it. The council's
    site also posts previous question papers, which are the closest thing to a mock examination.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipx-new">What changed for 2026-27 and 2027?</h2>
  <ul>
    <li><strong>Internal assessment for non-practical subjects.</strong> A notification of 29 June 2026 introduced 20 internal marks for non-practical subjects in Classes XI and XII from 2026-27. The council's general guideline gives 10 marks to periodic tests (the average of the two highest of three) and 10 to activities or project work, recorded by the school.</li>
    <li><strong>Relative grading.</strong> A notification of 21 May 2026 says relative grading will be introduced in the Class XI and Higher Secondary examinations from 2027, with details to be notified separately.</li>
  </ul>
  <p>
    For families, the first change matters now: periodic tests and project work through the year count towards the final
    result. The second needs no action yet; follow the notices page on cohsem.nic.in rather than second-hand summaries.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipx-calendar">How does the council's year run?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The COHSEM academic calendar in outline (from the council's academic calendar page)</caption>
    <thead>
      <tr><th scope="col">When</th><th scope="col">Class XI</th><th scope="col">Class XII</th></tr>
    </thead>
    <tbody>
      <tr><td>Regular classes begin</td><td>First week of July</td><td>Last week of May</td></tr>
      <tr><td>School term tests</td><td colspan="2">Last week of August and last week of October; pre-final in the first week of January</td></tr>
      <tr><td>Regular classes end</td><td colspan="2">Last week of January</td></tr>
      <tr><td>Examination</td><td>February–March</td><td>February–March</td></tr>
      <tr><td>Results</td><td>Within May</td><td>Third week of May</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Exact dates for any year come from the council's notices, not from this outline. An improvement examination is
    also held within June for Higher Secondary students.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipx-plan">What does a sensible tutor's plan look like from Class 9 to Class XII?</h2>
  <ol>
    <li><strong>Class 9:</strong> settle arithmetic, algebra, grammar and reading habits; these carry every later paper.</li>
    <li><strong>Class 10 (HSLC):</strong> work from the school's pattern and papers; strengthen maths and science chapters that return in Class XI.</li>
    <li><strong>Class XI:</strong> treat it as a public-examination year; download each subject's council design; keep the practical record and periodic tests in order.</li>
    <li><strong>Class XII:</strong> full papers to the council design from November, previous papers in January, and a separate plan for JEE or NEET if needed.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipx-where">Where do Manipur Board tutors travel from?</h2>
  <p>
    Most tutors in Imphal travel by two-wheeler or auto, and leikai names matter. Six localities across the three zones:
  </p>
  <ul>
    <li>{!! $ipxA('langol', 'Langol') !!} and {!! $ipxA('uripok', 'Uripok') !!}: on the western side, close to each other and to Lamphel; a tutor already teaching nearby can often add a visit. Say which leikai you are in.</li>
    <li>{!! $ipxA('kwakeithel', 'Kwakeithel') !!} and {!! $ipxA('singjamei', 'Singjamei') !!}: on the southern-central belt with Keishampat and Chingamakha; give the leikai, mapal or lane and a landmark.</li>
    <li>{!! $ipxA('khurai', 'Khurai') !!} and {!! $ipxA('chingmeirong', 'Chingmeirong') !!}: in Imphal East; a tutor from the eastern side avoids a late-afternoon river crossing. For Chingmeirong, say Nongchup or Nongpok.</li>
  </ul>
  <p>
    Senior subjects such as physics, chemistry or accountancy may need a specialist from across the city; online lessons
    with that specialist, or a mix of home and online, solve that. See the <a href="{{ url('/city/imphal') }}">Imphal
    page</a>, the zone pages for <a href="{{ url('/city/imphal/zone/uripok-thangmeiband-lamphel') }}">Uripok,
    Thangmeiband and Lamphel</a>, <a href="{{ url('/city/imphal/zone/sagolband-keishampat-singjamei') }}">Sagolband,
    Keishampat and Singjamei</a> and <a href="{{ url('/city/imphal/zone/wangkhei-khurai-porompat') }}">Wangkhei, Khurai
    and Porompat</a>, and <a href="{{ url('/online-tutor-imphal') }}">online tutors for Imphal</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipx-demo">What should you ask a Manipur Board tutor at the demo?</h2>
  <ol>
    <li>For Class 10: what pattern and papers are you using, and did they come from the school or the board?</li>
    <li>For Classes XI and XII: have you read this year's council design for the subject, and how many long answers does it have?</li>
    <li>How will you help with the 20 internal marks or the 30-mark practical?</li>
    <li>Will you use the council's previous question papers, and when?</li>
  </ol>
  <p>
    Compare answers across the tutors on your shortlist; another tutor can take a second demo, and switching later is
    free. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo checklist</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipx-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets a rate and
    you see it before the demo; the <a href="{{ url('/blog/home-tuition-fees-imphal') }}">Imphal fee guide</a> lists
    questions to ask. Send the class, the body (BOSEM or COHSEM), the subjects, your locality and leikai, and free
    afternoons; two or three tutors come back, and the first lesson is a free demo. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. CBSE families should read
    <a href="{{ url('/cbse-home-tutor-imphal') }}">CBSE tutors in Imphal</a>; the
    <a href="{{ url('/blog/imphal-home-tuition-guide') }}">Imphal home tuition guide</a> covers the city, and teachers
    can find requests on <a href="{{ url('/tuition-jobs/imphal') }}">Imphal tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
