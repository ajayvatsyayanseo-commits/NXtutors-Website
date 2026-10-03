{{--
  Board hub: "Uttarakhand Board tutor Dehradun" (Uttarakhand Board of School
  Education, UBSE, Ramnagar: High School Class 10 and Intermediate Class 12).
  Author: nxtutors (NXTutors Academic Team). Page writer (capitals phase 2),
  3 Oct 2026. No school, college, coaching, hospital, campus, factory, society
  or people names. No exam dates, results, toppers or candidate counts.

  Official sources (all published on ubse.uk.gov.in or linked from it to the
  site's document store cdnbbsr.s3waas.gov.in; read 3 Oct 2026):
  - https://ubse.uk.gov.in/about-department/introduction/ : regional office of
    the UP board set up at Ramnagar (Nainital) for the Uttarakhand region on
    9 Feb 1996, first conducted exams for Garhwal and Kumaon divisions in 1999;
    Uttaranchal formed 9 Nov 2000; Uttaranchal Education Board established by
    order of 22 Sep 2001; Council of Examinations 2002; Uttaranchal School
    Education Act 2006 (22 Apr 2006); Uttarakhand School Education Council
    constituted by Government Order dated 11 Dec 2008.
  - https://ubse.uk.gov.in/contact-us/ : Uttarakhand Board of School Education,
    Ramnagar (Nainital).
  - https://ubse.uk.gov.in/ (menus): syllabus (High School, Inter), paper
    design (High School; 11th, 12th), sample question papers (High School,
    Inter), question banks (High School, Inter), project work and internal
    assessment, board exam practical/IA guidelines, improvement exam, scrutiny,
    model answer sheet 2026.
  - HS Mathematics 2026-27 (syllabus-high-school):
    https://cdnbbsr.s3waas.gov.in/s32dbf21633f03afcf882eaf10e4b5caca/uploads/2026/04/20260402425130477.pdf
    Class IX and X: 100 = 80 theory (3 h) + 20 internal assessment
    (two activities 10, one project 5, continuous assessment by unit test 5;
    Class X: three unit tests and a pre-board, best unit test converted to 5).
    Class X units: number systems 6, algebra 20, coordinate geometry 6,
    geometry 15, trigonometry 12, mensuration 10, statistics and probability 11.
    Class IX units: number systems 10, algebra 20, coordinate geometry 4,
    geometry 27, mensuration 13, statistics 6. Prescribed: NCERT textbooks,
    NCERT lab manual and exemplar problems.
  - HS Science 2026-27:
    https://cdnbbsr.s3waas.gov.in/s32dbf21633f03afcf882eaf10e4b5caca/uploads/2026/04/202604021259186267.pdf
    Class X: 80 theory (3 h) + 20 internal (physics, chemistry, biology
    practical 3 each, sessional work 3, viva 3, unit test 5); units: chemical
    substances 25, world of living 25, natural phenomena 12, effects of current
    13, natural resources 5; NCERT textbooks, lab manuals and exemplars.
  - High School Science Sample Question Paper, Set A 2026:
    https://cdnbbsr.s3waas.gov.in/s32dbf21633f03afcf882eaf10e4b5caca/uploads/2025/11/20251111522475529.pdf
    3 hours, 80 marks, 27 compulsory questions, Hindi and English; Q1 ten
    one-mark MCQs, Q2 two assertion-reason parts, Q3-6 one mark, Q7-12 two,
    Q13-20 three, Q21-26 four, Q27 case study 4 (1+1+2); options written in
    the answer book; internal choice in a few questions.
  - Design of Question Paper, Class 12 (other than languages), paper-design-11th-12th:
    https://cdnbbsr.s3waas.gov.in/s32dbf21633f03afcf882eaf10e4b5caca/uploads/2025/10/2025100982887270.pdf
    Physics, Chemistry, Biology: one 3-hour theory paper of 70 marks; ten
    one-mark MCQs (two assertion-reason), four other one-mark objective items,
    ten 2-mark, eight 3-mark, three 4-mark questions (one case or source
    based); difficulty easy 50%, moderate 30%, difficult 20%. Mathematics: 80
    marks, 3 hours; ten one-mark MCQs (two assertion-reason), six other
    objective, five 2-mark, six 4-mark and six 5-mark questions (one 5-mark
    case or source based).
  - Inter Sample Question Paper 129 Physics Set 1:
    https://cdnbbsr.s3waas.gov.in/s32dbf21633f03afcf882eaf10e4b5caca/uploads/2025/11/202511191367130538.pdf
    26 compulsory questions, 3 hours, 70 marks, Hindi and English; Q26 case or
    source based.
  - Practical Class 12th (session 2025-26), project-work-and-internal-assessment:
    https://cdnbbsr.s3waas.gov.in/s32dbf21633f03afcf882eaf10e4b5caca/uploads/2025/10/20251006550215804.pdf
    Physics, Chemistry, Biology practical 30 marks, minimum 10; physics: two
    experiments 8, one activity 4, viva 3 (external); practical record 5,
    demonstration record and viva 5, unit test 5 (internal).
  - Internal Assessment and Project Class 11th, 12th (2025-26):
    https://cdnbbsr.s3waas.gov.in/s32dbf21633f03afcf882eaf10e4b5caca/uploads/2025/10/202510061206873339.pdf
    Mathematics (Inter): 20 internal, minimum 7 (activities, record, year-end
    activity, viva, unit test 5); English: listening 4, speaking 4, project 7,
    unit test 5.
  Language: sample papers read (HS science, Inter physics) are printed in Hindi
  and English. Local detail only from database/seo-content/areas/dehradun-research.json.
  The Dehradun hub names UBSE, CBSE, ICSE/ISC and IB/IGCSE; no shares or
  board-by-area claims. Fee wording is the approved sentence. FAQs render from
  faqs/uttarakhand-board-tutor-dehradun.php. Area links render only for active areas.
--}}
@php
  $dubSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $dubA = function (string $slug, string $label) use ($dubSlugs) {
      return in_array($slug, $dubSlugs, true)
          ? '<a href="' . e(url('/city/dehradun/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="dubGuideTitle">
  <h2 id="dubGuideTitle">Uttarakhand board (UBSE) tutors in Dehradun: Class 10 High School and Class 12 Intermediate</h2>

  <p class="nx-guide__lede">
    Dehradun is the capital of Uttarakhand, and many of its children study under the state's own board, the
    Uttarakhand Board of School Education, known as UBSE and based at Ramnagar in Nainital district. It conducts two
    public examinations: High School at the end of Class 10 and Intermediate at the end of Class 12. The board's
    syllabus files now follow the NCERT textbooks closely, so the chapters look familiar to anyone who knows CBSE, but
    its question papers, internal assessment rules and bilingual papers have their own pattern. Below we summarise
    the board's published documents on those papers, explain how a Dehradun home tutor should work with them, and
    list the questions worth asking at a demo. Every paper and marks detail here is taken from ubse.uk.gov.in; the
    board reissues its schemes, so look at its site again at the start of your child's exam year.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#dub-board">The board</a> ·
    <a href="#dub-hs">High School marks</a> ·
    <a href="#dub-sample">The sample paper</a> ·
    <a href="#dub-inter">Intermediate papers</a> ·
    <a href="#dub-prac">Practicals and internal marks</a> ·
    <a href="#dub-lang">Language</a> ·
    <a href="#dub-files">Board resources</a> ·
    <a href="#dub-cbse">Versus CBSE</a> ·
    <a href="#dub-plan">Class 9 to 12</a> ·
    <a href="#dub-where">Localities</a> ·
    <a href="#dub-demo">The demo</a> ·
    <a href="#dub-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="dub-board">The Uttarakhand board in brief</h2>
  <p>
    The board's own introduction traces it back to a regional office of the Uttar Pradesh secondary board, set up at
    Ramnagar in 1996 for the Uttarakhand region, which first held examinations for the Garhwal and Kumaon divisions in
    1999. After the new state was formed in November 2000, a state education board was established in 2001 and a
    council of examinations in 2002. The Uttaranchal School Education Act followed in 2006, and the Uttarakhand School
    Education Council was constituted by government order in December 2008. The office is still at Ramnagar.
  </p>
  <p>
    For a family in Dehradun, the practical points are simpler. Class 10 ends in the High School examination and
    Class 12 in the Intermediate examination. In both, part of every subject's marks is earned in school through
    projects, practicals, activities and unit tests, and the rest comes from the written board paper. A tutor cannot
    award the school marks, but can make sure the work behind them is done properly and on time.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dub-hs">How High School maths and science marks are built (2026-27)</h2>
  <p>
    The board's 2026-27 syllabus files for Class 9 and Class 10 give mathematics and science the same frame: a
    three-hour written paper of 80 marks and 20 marks of internal assessment. The internal part is broken down in detail.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 10 mathematics and science under the UBSE 2026-27 syllabus</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Written paper</th><th scope="col">Internal 20 marks</th><th scope="col">Unit weights in the paper</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics</td><td>80 marks, 3 hours</td><td>Two activities 10, one project 5, unit tests 5</td><td>Algebra 20, geometry 15, trigonometry 12, statistics and probability 11, mensuration 10, number systems 6, coordinate geometry 6</td></tr>
      <tr><td>Science</td><td>80 marks, 3 hours</td><td>Physics, chemistry and biology practicals 3 each, sessional work 3, viva 3, unit tests 5</td><td>Chemical substances 25, world of living 25, effects of current 13, natural phenomena 12, natural resources 5</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Two details matter for planning. First, the unit-test component: in Class 10 the school holds three unit tests and a
    pre-board examination, and the highest unit-test score is converted to the five marks. Every unit test therefore counts, and
    a tutor should prepare for them as seriously as for the board paper. Second, the unit weights: algebra alone is a
    quarter of the maths paper, and in science the chemistry and biology units together are worth more than half. In
    Class 9 the maths weights are different, with geometry the largest unit at 27 marks. Prescribed books are the NCERT
    textbooks, laboratory manuals and exemplar problems. Our <a href="{{ url('/maths-home-tutor-dehradun') }}">maths</a>
    and <a href="{{ url('/science-home-tutor-dehradun') }}">science</a> home tutor pages for Dehradun go deeper into each
    subject.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dub-sample">What the 2026 High School science sample paper shows</h2>
  <p>
    The board publishes sample question papers, often in two sets, for the main High School subjects. The 2026 science
    paper (Set A) is a useful map of what a student will face:
  </p>
  <ul>
    <li><strong>Length.</strong> Three hours, 80 marks and 27 questions, all compulsory, with an internal choice in a few of them.</li>
    <li><strong>Objective start.</strong> Question 1 has ten one-mark multiple-choice parts, and question 2 has two assertion-and-reason parts. The student writes the correct option in the answer book.</li>
    <li><strong>Building up.</strong> Questions 3 to 6 carry one mark, 7 to 12 two marks, 13 to 20 three marks and 21 to 26 four marks.</li>
    <li><strong>A case study.</strong> Question 27 is a four-mark case-based question, split one, one and two.</li>
    <li><strong>Two languages.</strong> Every instruction and question is printed in Hindi and English.</li>
  </ul>
  <p>
    The lesson for a tutor is balance. Roughly a fifth of the paper is objective, but most marks sit in two-, three- and
    four-mark written answers, where diagrams, units and clear steps decide the score. Practising the sample paper in
    full, at three hours, and marking it strictly is the single most useful thing a Class 10 student can do after the
    syllabus is finished.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dub-inter">Intermediate papers: the board's question-paper design</h2>
  <p>
    For Class 12, the board publishes a design of question paper for each subject, showing marks by unit, by type of
    question and by difficulty. The science subjects share one shape, and mathematics has its own.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 12 theory papers in the UBSE question-paper design</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Paper</th><th scope="col">How the marks fall</th></tr>
    </thead>
    <tbody>
      <tr><td>Physics, Chemistry, Biology</td><td>70 marks, 3 hours, 26 questions</td><td>Ten one-mark multiple-choice items (two of them assertion and reason) and four other one-mark objective items; ten 2-mark, eight 3-mark and three 4-mark questions, one of the 4-mark questions case or source based</td></tr>
      <tr><td>Mathematics</td><td>80 marks, 3 hours</td><td>Ten one-mark multiple-choice items (two assertion and reason) and six other objective items; five 2-mark, six 4-mark and six 5-mark questions, one 5-mark question case or source based</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The design also sets the difficulty mix for the science papers: half the marks easy, 30% moderate and 20%
    difficult. Read plainly, a well-prepared student should secure the easy half without strain, and the tutor's
    real work is the moderate and difficult 50%, which usually means multi-step numericals in physics and chemistry
    and application questions in biology. The board's physics sample paper for Intermediate follows this pattern,
    with question 26 as the case-based item. For subject help, see the Dehradun
    <a href="{{ url('/physics-home-tutor-dehradun') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-dehradun') }}">chemistry</a> and
    <a href="{{ url('/biology-home-tutor-dehradun') }}">biology</a> pages, and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page for the national picture.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dub-prac">Practicals and internal marks in Classes 11 and 12</h2>
  <p>
    The board's practical scheme for the 2025-26 session gives physics, chemistry and biology a 30-mark practical
    examination with a separate minimum of 10. In physics, the external examiner marks two experiments, one activity and
    a viva; the school's internal examiner marks the practical record, a record of demonstration experiments with its
    viva, and a unit-test component. Intermediate mathematics has 20 internal marks with a minimum of 7, built from
    activities through the year, their record, a year-end activity, a viva and unit tests. English has listening and
    speaking skills, a project and a unit-test component.
  </p>
  <p>
    The point for families is that a weak practical file or a missed activity record costs marks that the theory paper
    cannot replace, and each component has its own minimum. A tutor should check the record book and the viva questions
    every few weeks, guide the student through the method, and leave the writing to the student. Check the current
    session's scheme on the board's site, since these documents are reissued each year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dub-lang">Hindi, English and the language of practice</h2>
  <p>
    Both sample papers we read on the board's site, High School science and Intermediate physics, print every question
    in Hindi and in English. The prescribed maths and science books are the NCERT textbooks, which exist in both
    languages. Many Dehradun students study in English at school but think through problems in Hindi, or the other way
    round. Two practical points follow:
  </p>
  <ul>
    <li><strong>Practise in the answer language.</strong> Explanations can switch between Hindi and English freely, but every written answer in practice should use the words your child will put on the board answer sheet.</li>
    <li><strong>Treat Hindi and English as real subjects.</strong> Both are examined by the board, with internal marks for listening, speaking and a project. If one is weak, look for a tutor of that specific paper; the <a href="{{ url('/english-home-tutor-dehradun') }}">English home tutors in Dehradun</a> page explains the English side.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dub-files">Free material on the board's own site</h2>
  <p>
    Before any guidebook, a tutor for this board should be using what the board itself releases. On ubse.uk.gov.in
    you will find:
  </p>
  <ul>
    <li><strong>Syllabus files</strong> for High School and Intermediate, with unit weights and internal assessment breakdowns, one file per subject.</li>
    <li><strong>Paper designs</strong> for Classes 9 and 10 and for Classes 11 and 12, showing question types and difficulty.</li>
    <li><strong>Sample question papers</strong> for High School and Intermediate subjects, often in two sets.</li>
    <li><strong>Question banks</strong> arranged unit by unit, for example in High School mathematics, science and social science.</li>
    <li><strong>Model answer sheets</strong> for 2026 in several Class 12 subjects, including physics and mathematics.</li>
    <li><strong>Practical and internal assessment guidelines</strong>, plus notices on improvement examinations and scrutiny.</li>
  </ul>
  <p>
    At the demo, ask the tutor which of these documents they have opened for your child's subject this session. A
    vague answer is a warning sign.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dub-cbse">How the Uttarakhand board compares with CBSE in practice</h2>
  <p>
    Families in Dehradun often weigh the state board against CBSE, or move between them at Class 11. In High School
    maths and science the structures are now close: both prescribe NCERT books and split each subject into an 80-mark
    paper and 20 internal marks, and in Class 12 science both use a 70-mark theory paper beside a 30-mark practical.
    The differences that matter for tuition are in the detail:
  </p>
  <ul>
    <li><strong>The board's own paper design.</strong> Question numbering, the mix of one-, two-, three- and four-mark items and the case-based question follow UBSE's design, so practise with UBSE sample papers.</li>
    <li><strong>Bilingual papers.</strong> Questions appear in Hindi and English, which helps some students and slows others.</li>
    <li><strong>Unit tests in the internal marks.</strong> Five of the 20 internal marks come from unit tests, so school tests through the year carry weight.</li>
    <li><strong>Different rules on extra exams.</strong> CBSE's Class 10 rules, such as its two board exams, are CBSE rules. For UBSE, read the board's own improvement examination notices.</li>
  </ul>
  <p>
    If your child is on another board, see our <a href="{{ url('/cbse-home-tutor-dehradun') }}">CBSE</a> and
    <a href="{{ url('/icse-home-tutor-dehradun') }}">ICSE and ISC</a> pages for Dehradun.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dub-plan">Four years on the state board: where tuition time goes</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>UBSE tuition from Class 9 to Class 12</caption>
    <thead>
      <tr><th scope="col">Year</th><th scope="col">Main work with the tutor</th><th scope="col">Sessions per week, typically</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 9</td><td>Geometry, which is the heaviest Class 9 maths unit, plus algebra; the first activity and project; preparing for each unit test</td><td>Two</td></tr>
      <tr><td>Class 10, High School</td><td>Revision ordered by unit weight; both sets of sample papers sat in full; practicals and sessional work completed in good time</td><td>Two to three</td></tr>
      <tr><td>Class 11</td><td>The new stream's subjects; in science, a solid start on mechanics and calculus</td><td>One or two per subject</td></tr>
      <tr><td>Class 12, Intermediate</td><td>Practice shaped by the question-paper design; full timed papers; practical record and viva; entrance work for some</td><td>Two per main subject in the final months</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Students heading for engineering or medical entrances run that preparation alongside the board: see
    <a href="{{ url('/jee-home-tutor-dehradun') }}">JEE</a> and <a href="{{ url('/neet-home-tutor-dehradun') }}">NEET</a>
    home tutors in Dehradun. For choosing a stream after Class 10, read
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">how to choose a board and stream</a> and our
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11 stream choice</a> guide; the second was written
    for another city but its questions apply anywhere.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dub-where">How tutors reach six Dehradun localities</h2>
  <p>
    The tutor who lasts is the one for whom your home is an easy weekly trip, so shortlists start in your locality and
    widen to the zone, the city and finally online. Six examples:
  </p>
  <ul>
    <li><strong>{!! $dubA('prem-nagar', 'Prem Nagar') !!}</strong>: on the western edge, reached by Chakrata Road, which is heavy at office hours. A tutor living in or near Prem Nagar is the arrangement that lasts; families inside defence areas should check how visitors are admitted.</li>
    <li><strong>{!! $dubA('kanwali', 'Kanwali') !!}</strong>: tutors from GMS Road, Vasant Vihar or Patel Nagar reach it without going through the centre. In a gated township, ask about a regular pass after the demo.</li>
    <li><strong>{!! $dubA('ballupur', 'Ballupur') !!}</strong>: built around a busy chowk; a slot after the evening peak starts more reliably. The Metro Neo stop here is only proposed.</li>
    <li><strong>{!! $dubA('patel-nagar', 'Patel Nagar') !!}</strong>: mostly builder floors and houses; give the floor number, and avoid shift-change hours near the industrial area.</li>
    <li><strong>{!! $dubA('majra', 'Majra') !!}</strong>: close to Saharanpur Road and the ISBT, with many three-bedroom flats in complexes; register the tutor at the gate.</li>
    <li><strong>{!! $dubA('turner-road', 'Turner Road') !!}</strong>: mostly independent houses near the ISBT; bypass construction on this side may change routes for a time.</li>
  </ul>
  <p>
    Zone pages: <a href="{{ url('/city/dehradun/zone/rajpur-road-dalanwala') }}">Rajpur Road and Dalanwala</a>,
    <a href="{{ url('/city/dehradun/zone/sahastradhara-raipur') }}">Sahastradhara and Raipur</a>,
    <a href="{{ url('/city/dehradun/zone/haridwar-road') }}">Haridwar Road</a>,
    <a href="{{ url('/city/dehradun/zone/vasant-vihar-chakrata-road') }}">Vasant Vihar and Chakrata Road</a> and
    <a href="{{ url('/city/dehradun/zone/saharanpur-road-clement-town') }}">Saharanpur Road and Clement Town</a>. Every
    locality is on the <a href="{{ url('/city/dehradun') }}">Dehradun home tutors page</a>, and the
    <a href="{{ url('/blog/dehradun-home-tuition-guide') }}">Dehradun home tuition guide</a> covers each zone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dub-mode">Home tuition, online, or both?</h2>
  <p>
    In Classes 9 and 10, sitting beside the student lets a tutor catch a wrong step in a geometry proof, a ray diagram
    or a chemical equation the moment it is written. By Intermediate, with practicals and sometimes coaching in the
    week, many families switch to a mix: a visit for the hardest subject and an online slot for the rest. On cold
    winter evenings and heavy monsoon days, the online slot keeps the week intact. See
    <a href="{{ url('/online-tutor-dehradun') }}">online tutors for Dehradun</a> and our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a> comparison.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dub-demo">Questions to ask at an Uttarakhand board demo</h2>
  <ol>
    <li><strong>Experience on this board.</strong> Which UBSE classes and subjects has the tutor taught? Class 10 maths and Class 12 chemistry call for different strengths.</li>
    <li><strong>Current documents.</strong> Can the tutor show the unit weights in this session's syllabus file and explain the paper design?</li>
    <li><strong>Practice material.</strong> Will your child sit the board's sample papers in full and work through the unit-wise question banks?</li>
    <li><strong>Language.</strong> Will written practice be in the language your child answers in?</li>
    <li><strong>School marks.</strong> How will the tutor keep practicals, projects and unit tests on schedule, while leaving the work itself to the student?</li>
    <li><strong>Travel.</strong> Which road will the tutor take, and what is the plan for a cold or rain-soaked evening?</li>
  </ol>
  <p>
    You receive two or three matched tutors with their fees listed up front. The first class costs nothing, and if you
    change tutor later that costs nothing either. Every tutor who registers passes an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile appears. For further questions, use
    the <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dub-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors decide their own rates; the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our article on
    <a href="{{ url('/blog/home-tuition-fees-dehradun') }}">home tuition fees in Dehradun</a> explain what moves them.
  </p>
  <p>
    To begin, send the class, the stream if your child is in Class 11 or 12, the answer language, your locality with a
    nearby landmark and your free evenings, then book the <a href="{{ url('/demo-class') }}">free demo class</a>. You
    are welcome to look through <a href="{{ url('/tutors') }}">tutor profiles</a> first. Teachers of Uttarakhand board
    subjects can find openings on <a href="{{ url('/tuition-jobs/dehradun') }}">Dehradun tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
