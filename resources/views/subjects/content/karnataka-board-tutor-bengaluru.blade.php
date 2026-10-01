{{--
  Board hub: "Karnataka Board SSLC & PUC tutor Bengaluru". Author: nxtutors
  (NXTutors Academic Team). No school, college, coaching, society or people
  names. No exam dates, results, pass percentages or candidate numbers.
  Written by the city authority page writer, 2 Oct 2026.

  Official sources (all read 2 Oct 2026):
  - kseab.karnataka.gov.in/new-page/About KSEAB/en: the Karnataka Secondary
    Education Examination Board came into existence in 1966 and was renamed
    Karnataka School Examination and Assessment Board in 2022; conducts the
    Class 10 and Class 12 examinations of affiliated schools and junior
    colleges; headquarters in Bangalore; divisional offices in Bangalore,
    Belgaum, Kalaburagi and Mysore, the Bangalore divisional office sitting in
    the head office at Malleshwaram; separate directorates for the 10th and
    12th examination wings; online registration, admission tickets and
    results; migration certificate, marks card verification, duplicate marks
    cards, photocopy, retotalling and revaluation offered online (Pragathi-10);
    marks sheets on DigiLocker. (The page's candidate numbers are not used.)
  - kseab.karnataka.gov.in English home page, Notification (SSLC), Time table
    (SSLC), PUC Timetable and FAQ pages: notices for "SSLC Exam-1" and
    "SSLC Exam-2" (2026), "II PUC Exam-1" and "II PUC Exam-2" (2026), and
    Exam-3 in 2024 and 2025; guidelines for registration of eligible
    candidates for SSLC 2026 Exam-2; repeater and private candidate
    registration; State Level SSLC Preparatory Examination time tables and an
    SSLC mid-term (SA-1) time table for 2025-26.
  - kseeb.karnataka.gov.in/KOSMIG/ (SSLC student corner): 2026-27 circulars,
    subject-wise blueprint for the final examination, model question papers
    and model answers, exhaustive question bank, textbooks, 2026 Exam-1 and
    Exam-2 question papers, centum (full-mark) answer papers.
  - kseab.karnataka.gov.in/587/sslc-2026-27-final-examination-subject-wise-
    blueprint: Mathematics (81EK) 80 marks, 38 questions (16 one-mark, 8
    two-mark, 9 three-mark, 4 four-mark, 1 five-mark), 14 chapters from Real
    Numbers to Probability, internal choices at 2, 3, 4 and 5 marks; Science
    (83) 80 marks, 38 questions in the same mix, 13 chapters from Chemical
    Reactions and Equations to Our Environment; Social Science (85EK) with
    internal choices and an open choice only on the map question; First
    Language Kannada (01K) 45 questions, 100 marks.
  - dpue-exam.karnataka.gov.in/kseabdpueqpue/StudentCorner2026 (II PUC
    student corner): 2026-27 subject-wise blueprints, model question papers,
    exhaustive question bank, practical exam scheme of evaluation, 2026 board
    papers with model answers, MCQ sets for science students for the entrance
    exam (I and II PUC); DigiLocker marks card only for students who passed.
    2027 blueprints: Mathematics (35) 80 marks, Parts A to E, 13 chapters
    (Relations and Functions to Probability), Part E 6- and 4-mark questions;
    Physics (33) 70 marks, Parts A to D, 14 chapters; Chemistry (34) 70 marks,
    10 units. Model papers: Mathematics 3 hours, 80 marks, Part A 15 MCQ and 5
    fill-in-the-blanks, graph sheet for linear programming; Physics 3 hours,
    70 marks, 45 questions, first answer only counted in Part A, no marks for
    answers lacking a needed diagram or for numerical answers without formula
    and working; Chemistry 3 hours, 70 marks, Part E problems, log tables and a
    simple calculator allowed, scientific calculator not allowed. Physics
    practical scheme: 2 hours, 30 marks (experiment 20, class attendance 5,
    practical record 5).
  - pue.karnataka.gov.in (Department of School Education (Pre-University)):
    textbooks page (I and II PUC books in Kannada-medium and English-medium
    versions; revised Physics, Chemistry, Mathematics, Biology, Accountancy,
    Business Studies and Economics books 2023; books adopted from NCERT from
    2024-25 for Computer Science, Psychology and Home Science in I PUC); model
    question paper list of I and II PUC subjects (languages Kannada, English,
    Hindi, Tamil, Telugu, Marathi, Urdu, Sanskrit, Arabic, French; History,
    Economics, Logic, Geography, Hindustani Music, Business Studies,
    Sociology, Political Science, Accountancy, Statistics, Psychology,
    Physics, Chemistry, Mathematics, Biology, Geology, Electronics, Computer
    Science, Education, Home Science, Basic Maths); split-up syllabus
    circular for 2026-27; Jnana Taranga classes for CET and NEET.
  - KCET ranking rule from the KEA UGCET-2026 Information Bulletin-1
    (cetonline.karnataka.gov.in/kea), as cited in kcet-tutor-bengaluru.
  Local detail only from areas/bengaluru-research.json, bengaluru-zone-
  guides.json and the Bengaluru hub view. Area links render only for active
  Bengaluru areas. Fee wording is the approved sentence. FAQs render from
  faqs/karnataka-board-tutor-bengaluru.php.
--}}
@php
  $kbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $kbA = function (string $slug, string $label) use ($kbSlugs) {
      return in_array($slug, $kbSlugs, true)
          ? '<a href="' . e(url('/city/bengaluru/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="kbGuideTitle">
  <h2 id="kbGuideTitle">Karnataka Board tutors in Bengaluru: SSLC in Class 10, then I and II PUC</h2>

  <p class="nx-guide__lede">
    A Karnataka state board student sits two public examinations: the SSLC at the end of Class 10 and the II PUC at
    the end of the second pre-university year. Both are now run by the Karnataka School Examination and Assessment
    Board, whose head office stands in Malleshwaram, so a Bengaluru family is dealing with a board that is literally
    down the road. This page sets out what the board and the pre-university department publish about those papers:
    how an SSLC maths or science paper is built, which subjects the PUC offers, how II PUC science papers are marked,
    and what changes when CET is part of the plan. It then turns to the practical side, which is finding a tutor who
    teaches from the state books, can reach your part of the city each week and keeps board answers sharp while
    entrance practice starts. Board rules change from year to year, so treat the figures below as the current
    published version and check the board's own site before you plan around them.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kb-who">Who runs what</a> ·
    <a href="#kb-sslc">SSLC papers</a> ·
    <a href="#kb-medium">Medium and languages</a> ·
    <a href="#kb-exams">Exam-1, Exam-2 and practice papers</a> ·
    <a href="#kb-puc">PUC subjects</a> ·
    <a href="#kb-ii">II PUC papers</a> ·
    <a href="#kb-other">Versus CBSE and ICSE</a> ·
    <a href="#kb-plan">A tutor's plan</a> ·
    <a href="#kb-zones">Zones and travel</a> ·
    <a href="#kb-demo">The demo</a> ·
    <a href="#kb-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kb-who">The board, the PU department and who does what</h2>
  <p>
    The examining body began in 1966 as the Karnataka Secondary Education Examination Board and took its present name,
    Karnataka School Examination and Assessment Board (KSEAB), in 2022. It conducts the Class 10 and Class 12
    examinations for affiliated schools and pre-university colleges, with separate directorates for the two, and works
    through divisional offices in Bangalore, Belgaum, Kalaburagi and Mysore. The Bangalore divisional office shares the
    head office building in Malleshwaram.
  </p>
  <p>
    Teaching in Classes 11 and 12 belongs to a second body, the Department of School Education (Pre-University). It
    recognises the PU colleges, publishes the PUC textbooks, sets a split-up syllabus for the year and puts model
    papers and a question bank on its site. In short: the department shapes what is taught in the two PU years, and
    the board sets and marks the II PUC paper. A tutor needs both websites bookmarked, along with the board's SSLC
    student corner for Class 10.
  </p>
  <p>
    After a result, the board offers retotalling, revaluation and a photocopy or scanned copy of the answer script,
    applied for online, and its marks cards can be downloaded through DigiLocker; for II PUC, the board notes this
    works only for students who passed.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kb-sslc">How an SSLC maths or science paper is built</h2>
  <p>
    For the 2026-27 examination the board has published a chapter-wise blueprint for every SSLC subject. Mathematics
    and Science share one shape: an 80-mark written paper of 38 questions, weighted towards short answers but with a
    real block of longer ones.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>SSLC 2026-27 blueprints for maths and science</caption>
    <thead>
      <tr><th scope="col">Question type</th><th scope="col">How many</th><th scope="col">Marks</th><th scope="col">Internal choice</th></tr>
    </thead>
    <tbody>
      <tr><td>One mark</td><td>16</td><td>16</td><td>None</td></tr>
      <tr><td>Two marks</td><td>8</td><td>16</td><td>Two extra questions to choose from</td></tr>
      <tr><td>Three marks</td><td>9</td><td>27</td><td>Four extra questions</td></tr>
      <tr><td>Four marks</td><td>4</td><td>16</td><td>Two extra questions</td></tr>
      <tr><td>Five marks</td><td>1</td><td>5</td><td>One extra question</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The maths blueprint spreads those marks over 14 chapters, from Real Numbers and Polynomials through Triangles,
    Coordinate Geometry and Trigonometry to Statistics and Probability. Triangles, Arithmetic Progressions and Pair of
    Linear Equations each carry eight or nine marks, while Some Applications of Trigonometry is a single four-mark
    question. Science covers 13 chapters, from Chemical Reactions and Equations to Our Environment, with Carbon and its
    Compounds, Life Processes, Light and Electricity at eight marks each; How do Organisms Reproduce carries the one
    five-mark question.
  </p>
  <p>
    Two things follow for tuition. First, a student cannot skip chapters and hope the choices rescue them, because the
    one-mark section has no choice at all. Second, the four- and five-mark questions decide the highest grades, and they
    reward a complete, well-labelled answer more than speed. Social Science follows a similar pattern of internal
    choices, except that the map question has an open choice. Our <a href="{{ url('/maths-home-tutor-bengaluru') }}">maths
    home tutors in Bengaluru</a> and <a href="{{ url('/science-home-tutor-bengaluru') }}">science home tutors in
    Bengaluru</a> pages cover the subjects themselves.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kb-medium">Medium, first language and the language papers</h2>
  <p>
    The state board teaches and examines in more than one medium, and the pre-university textbooks are printed in
    Kannada-medium and English-medium versions for subjects such as physics, chemistry, maths, accountancy and
    business studies. The first-language paper is a bigger paper than the rest: the 2026-27 blueprint for First
    Language Kannada sets 45 questions for 100 marks. Three practical points:
  </p>
  <ul>
    <li><strong>Terms in the right language.</strong> A student who writes physics in Kannada needs the technical words from the Kannada-medium book. Explanation can happen in either language; written practice should match the paper the student will sit.</li>
    <li><strong>Language papers count.</strong> Kannada, English or Hindi marks can pull an SSLC total down, and in PUC both languages sit beside the optional subjects. Ask for a tutor who teaches the board's language paper, not general conversation. Our <a href="{{ url('/english-home-tutor-bengaluru') }}">English home tutors in Bengaluru</a> page covers the English side.</li>
    <li><strong>Families new to Karnataka.</strong> Children who join from another state can find the first or second language the steepest part of the move, so plan for it in the first term rather than the last.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kb-exams">Exam-1, Exam-2 and the board's own practice papers</h2>
  <p>
    The board's notices now number its main sittings. For 2026 they refer to SSLC Exam-1 and Exam-2 and to II PUC
    Exam-1 and Exam-2, and the 2024 and 2025 notices also list an Exam-3. Separate guidelines explain which candidates
    are eligible to register for Exam-2, and there are registration routes for repeaters and private candidates. Read
    the current guidelines on the board's site before treating a second sitting as a plan; a tutor should never assume
    the rules are the same as last year's.
  </p>
  <p>
    The more useful news for tuition is how much practice material the board publishes itself:
  </p>
  <ul>
    <li><strong>For SSLC:</strong> subject-wise blueprints, model question papers with model answers, an exhaustive question bank, the previous year's question papers and, notably, full-mark answer papers from real candidates. The board also issues time tables for state-level preparatory examinations and a mid-term examination during the year.</li>
    <li><strong>For II PUC:</strong> subject-wise blueprints and model papers for the coming year, a question bank, the practical scheme of evaluation, last year's board papers with model answers, and sets of multiple-choice questions for science students preparing for the entrance test.</li>
  </ul>
  <p>
    A tutor who works from these documents, rather than from a guidebook's guess at the pattern, is the first thing to
    look for.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kb-puc">PUC subjects and streams in Classes 11 and 12</h2>
  <p>
    After the SSLC, most state board students move to a PU college for I PUC and II PUC. Students take two languages
    alongside a combination of optional subjects; the department's model paper list shows what is on offer. It does
    not label streams, but the subjects fall into the familiar groups:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Subjects on the PU department's model paper list, grouped by stream</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">Subjects tutors are most often asked for</th><th scope="col">Others on the list</th></tr>
    </thead>
    <tbody>
      <tr><td>Science</td><td>Physics, Chemistry, Mathematics, Biology</td><td>Computer Science, Electronics, Geology, Home Science</td></tr>
      <tr><td>Commerce</td><td>Accountancy, Business Studies, Economics, Statistics</td><td>Basic Maths</td></tr>
      <tr><td>Arts</td><td>History, Political Science, Economics, Sociology</td><td>Geography, Psychology, Logic, Education, Hindustani Music</td></tr>
      <tr><td>Languages</td><td>Kannada, English, Hindi</td><td>Sanskrit, Tamil, Telugu, Marathi, Urdu, Arabic, French, Optional Kannada</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The department revised its physics, chemistry, maths, biology, accountancy, business studies and economics books in
    2023, and from 2024-25 it adopted NCERT books for computer science, psychology and home science in I PUC. The
    chapter names on the 2027 II PUC maths and physics blueprints follow the NCERT Class 12 sequence, which is why a
    good CBSE-trained subject tutor can often teach PUC content, provided they switch to the board's paper style.
    For subject help, see our <a href="{{ url('/physics-home-tutor-bengaluru') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-bengaluru') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-bengaluru') }}">biology</a>,
    <a href="{{ url('/accountancy-home-tutor-bengaluru') }}">accountancy</a> and
    <a href="{{ url('/economics-home-tutor-bengaluru') }}">economics</a> pages for Bengaluru, and the
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">guide to choosing a board and stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kb-ii">How II PUC science and maths papers are marked</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>II PUC papers as the 2026-27 blueprints and model papers describe them</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Theory paper</th><th scope="col">What stands out</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics (35)</td><td>80 marks, 3 hours, Parts A to E</td><td>Part A: 15 multiple-choice and 5 fill-in-the-blank items; Part E holds the 6- and 4-mark questions; linear programming is answered on graph sheet</td></tr>
      <tr><td>Physics (33)</td><td>70 marks, 3 hours, Parts A to D</td><td>Answers without a needed diagram, and numericals without the formula and working, earn nothing; practical exam of 30 marks over 2 hours</td></tr>
      <tr><td>Chemistry (34)</td><td>70 marks, 3 hours, Parts A to E</td><td>A separate part of numerical problems; log tables and a simple calculator allowed, scientific calculator not</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    In physics, the practical marks split three ways: 20 for performing the experiment (principle, formula, diagram,
    observation table, set-up, readings, calculation and a result with units), 5 for class attendance and 5 for the
    practical record. In the Part A objective items, only the first answer written is counted, so crossing out and
    rewriting costs the mark. These are the kinds of rules a PU tutor should drill early, because they are cheap marks
    to lose.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kb-other">How SSLC and PUC compare with CBSE and ICSE in practice</h2>
  <ul>
    <li><strong>Same chapters, different paper.</strong> SSLC maths and science chapter titles match the NCERT Class 10 books, so CBSE notes look familiar, but the 38-question, 80-mark structure with four-mark questions needs its own timed practice.</li>
    <li><strong>Two bodies after Class 10.</strong> PU colleges follow the department's split-up syllabus and the board's blueprint; CBSE and ISC students usually stay with one school and one board.</li>
    <li><strong>CET weighting.</strong> For engineering seats through KEA, PCM marks from the qualifying examination count equally with the CET, so II PUC marks matter beyond the result itself.</li>
    <li><strong>Moving in from another board.</strong> Families switching to PUC after CBSE or ICSE Class 10 should confirm eligibility with the college; the department issues eligibility certificates for this.</li>
  </ul>
  <p>
    If your child is on another board, see our <a href="{{ url('/cbse-home-tutor-bengaluru') }}">CBSE</a>,
    <a href="{{ url('/icse-home-tutor-bengaluru') }}">ICSE and ISC</a>, <a href="{{ url('/ib-tutor-bengaluru') }}">IB</a>
    and <a href="{{ url('/igcse-tutor-bengaluru') }}">IGCSE</a> pages for Bengaluru.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kb-plan">A state board tuition plan from Class 9 to II PUC</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What the tutor concentrates on, year by year</caption>
    <thead>
      <tr><th scope="col">Year</th><th scope="col">Priorities</th><th scope="col">Usual rhythm</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 9</td><td>Build maths and science from the state books; first and second language writing; neat, labelled answers</td><td>Two sessions a week</td></tr>
      <tr><td>Class 10 (SSLC)</td><td>Chapter-wise practice against the blueprint; the board's model papers and question bank; preparatory exams reviewed question by question</td><td>Two or three a week</td></tr>
      <tr><td>I PUC</td><td>Settling into new subjects; strong basics in the chapters that feed II PUC and CET; the college's own tests</td><td>One per subject, often two</td></tr>
      <tr><td>II PUC</td><td>Blueprint-led full papers, the practical record, and for science students a plan that also covers CET, JEE or NEET</td><td>Two per core subject in the final months</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Science students aiming at engineering or farm science in Karnataka should read our
    <a href="{{ url('/kcet-tutor-bengaluru') }}">KCET tutors in Bengaluru</a> page; for national entrances see
    <a href="{{ url('/jee-home-tutor-bengaluru') }}">JEE</a> and <a href="{{ url('/neet-home-tutor-bengaluru') }}">NEET</a>
    home tutors in Bengaluru. For Class 10 maths, the <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10
    maths preparation guide</a> is written for CBSE but most of its chapter advice transfers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kb-zones">Where state board tutors can reach you</h2>
  <p>
    A weekly tutor has to make the same journey for a year, so we match along metro lines and within zones first.
    From our area notes:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/bengaluru/zone/malleshwaram-rajajinagar-yeshwanthpur') }}">Malleshwaram, Rajajinagar and Yeshwanthpur</a>:</strong> {!! $kbA('mahalakshmi-layout', 'Mahalakshmi Layout') !!} has its own Green Line station on Chord Road, and most homes are houses on layout plots, so the tutor rings the bell rather than signing a register.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/vijayanagar-rr-nagar-kengeri') }}">Vijayanagar, RR Nagar and Kengeri</a>:</strong> {!! $kbA('nagarbhavi', 'Nagarbhavi') !!} is plotted BDA layouts with easy two-wheeler parking; tutors without a vehicle ride the Purple Line to Vijayanagar or Attiguppe and finish by auto.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/jayanagar-jp-nagar-banashankari') }}">Jayanagar, JP Nagar and Banashankari</a>:</strong> {!! $kbA('banashankari', 'Banashankari') !!} has six stages; the inner ones are an easy walk from the Green Line, while the outer stages are better reached by road, so share the stage number.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/btm-bannerghatta-road-electronic-city') }}">BTM, Bannerghatta Road and Electronic City</a>:</strong> in {!! $kbA('begur', 'Begur') !!}, tutors take the Yellow Line to a Hosur Road station and then an auto; apartment complexes register visitors, while houses are a doorstep visit.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/hennur-kalyan-nagar-banaswadi') }}">Hennur, Kalyan Nagar and Banaswadi</a>:</strong> there is no metro here yet, and {!! $kbA('hrbr-layout', 'HRBR Layout') !!}'s numbered blocks make houses easy to find, so a tutor who already lives nearby is the practical choice.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/whitefield-marathahalli-kr-puram') }}">Whitefield, Marathahalli and KR Puram</a>:</strong> {!! $kbA('kr-puram', 'KR Puram') !!} is on the Purple Line, so a tutor from Indiranagar or CV Raman Nagar can come straight through by train.</li>
  </ul>
  <p>
    The other zones, <a href="{{ url('/city/bengaluru/zone/koramangala-hsr-bellandur') }}">Koramangala, HSR and Bellandur</a>,
    <a href="{{ url('/city/bengaluru/zone/indiranagar-old-airport-road') }}">Indiranagar and Old Airport Road</a>,
    <a href="{{ url('/city/bengaluru/zone/hebbal-rt-nagar-yelahanka') }}">Hebbal, RT Nagar and Yelahanka</a> and
    <a href="{{ url('/city/bengaluru/zone/frazer-town-richmond-town-ulsoor') }}">Frazer Town, Richmond Town and Ulsoor</a>,
    have their own notes, and our guides to <a href="{{ url('/blog/south-bengaluru-tuition-guide') }}">south</a>,
    <a href="{{ url('/blog/east-bengaluru-tuition-guide') }}">east</a>,
    <a href="{{ url('/blog/north-bengaluru-tuition-guide') }}">north</a> and
    <a href="{{ url('/blog/west-and-central-bengaluru-tuition-guide') }}">west and central</a> Bengaluru go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kb-mode">Home tuition, online, or both?</h2>
  <p>
    For SSLC maths and science, a tutor at the table can watch a construction, a ray diagram or a chemical equation
    being written and correct it at once, which is exactly what the longer blueprint questions reward. In PU years,
    when a student spends long hours at college and perhaps at coaching, one home session and one shorter online
    session a week is often easier to keep, especially where the metro has not arrived yet. Our comparison of
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring</a> covers the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kb-demo">Questions to ask at a Karnataka Board demo</h2>
  <ol>
    <li><strong>Which papers have you taught lately?</strong> SSLC, PUC science, commerce or arts: a strong II PUC physics tutor is not automatically the right SSLC science tutor.</li>
    <li><strong>Can you work in my child's medium?</strong> Ask to see an answer written with the textbook's own terms.</li>
    <li><strong>Show me the blueprint.</strong> A good tutor knows which chapters carry the four- and five-mark questions this year.</li>
    <li><strong>Teach one board question.</strong> Pick a three-mark item from the board's model paper and watch how the answer is set out.</li>
    <li><strong>What about practicals and the record?</strong> They should be guided, never written for the student.</li>
    <li><strong>How will CET fit in?</strong> For PU science, ask how board answers and MCQ practice will share the week.</li>
  </ol>
  <p>
    We send two or three matched tutors and show each fee before the demo; the first class is free and switching
    tutor later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>
    before their profile goes live. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class
    checklist</a> has more to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kb-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-bengaluru') }}">home
    tuition fees in Bengaluru</a>.
  </p>
  <p>
    Tell us the class, the medium, the PU combination if there is one, your area and the slots that work; the first
    class is a <a href="{{ url('/demo-class') }}">free demo</a>. You can also browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>, see every locality on our <a href="{{ url('/city/bengaluru') }}">Bengaluru tutors page</a>, or, if you
    teach state board subjects, look at <a href="{{ url('/tuition-jobs/bengaluru') }}">tuition jobs in Bengaluru</a>.
  </p>
  </section>

  </div>
</article>
