{{--
  State-board hub: "JKBOSE tutor Jammu" (Jammu and Kashmir Board of School
  Education: Class 10 Secondary School Examination, Class 11 Higher Secondary
  Part I, Class 12 Higher Secondary Part II). Author: nxtutors (NXTutors
  Academic Team). Capitals phase 2 writer (subjects-b), 3 Oct 2026.
  Purely educational and practical. No school, college, coaching, hospital,
  society or people names. No exam dates beyond what official document titles
  say, no results, toppers, or candidate or school counts. Sentences kept
  distinct from jkbose-tutor-srinagar (which leads on model papers and the
  Kashmir Division); this page leads on the board's syllabus documents and
  the Jammu Division's summer and winter zones.

  Official source: the board's website, jkbose.jk.gov.in.
  Pages and documents read 3 Oct 2026:
  - https://jkbose.jk.gov.in/introduction.html : established under the Jammu
    and Kashmir State Board of School Education Act, 1975; functions include
    conducting secondary and higher secondary public examinations, prescribing
    courses, syllabi and textbooks, printing and supplying textbooks, the State
    Open School, affiliation of private schools.
  - https://jkbose.jk.gov.in/ContactUs.html : JKBOSE, Rehari Colony, Jammu
    180005; JKBOSE, New Campus, Bemina, Srinagar 190010.
  - https://jkbose.jk.gov.in/ (home) : results, examination and date-sheet
    lists split into Jammu Division and Kashmir Division; examination forms,
    re-evaluation and photocopy of answer scripts for Classes 10, 11, 12;
    Class 9 registration; JKSOS (State Open School).
  - https://jkbose.jk.gov.in/Syllabus-for-10th-class.html -> "Updated Syllabus
    of Class X (10th) for the Academic Session 2026-27 (for Summer Zone Areas of
    Jammu Division) and Academic Session 2025-26 (for Kashmir Division/Winter
    Zone Areas of Jammu Division/UT of Ladakh)", uploaded 08/06/2026,
    pdf/Syllabi Class 10th 2026 (reedited).pdf :
      five compulsory subjects: General English, Urdu or Hindi, Mathematics,
      Social Science (History, Political Science, Geography, Economics, Disaster
      Management and Road Safety Education), Science (Physics, Chemistry,
      Biology); one optional language (Urdu, Kashmiri, Arabic, Persian, Hindi,
      Dogri, Sanskrit, Bhoti, Punjabi); optional vocational subject or Computer
      Science; each main subject 100 = 80 board + 20 internal; internal =
      periodic assessment 10 (pen and paper 5, multiple assessment 5),
      portfolio 5, subject enrichment 5; internal grades A 14-20, B 7-13,
      C below 7. Mathematics: 3 hours; units number systems 6, algebra 20,
      coordinate geometry 6, geometry 15, trigonometry 12, mensuration 10,
      statistics and probability 11; question design remembering/understanding
      43 marks (54%), applying 19 (24%), analysing/evaluating/creating 18 (22%);
      maths internal includes lab practical 5. Science: one 80-mark, 3-hour paper
      in three sections, physics 26, chemistry 26, biology 28; across the paper
      3 x 5, 9 x 3, 10 x 2, 18 x 1; prescribed textbook: A Textbook of Science
      for Class X published by J&K Board of School Education. English textbook:
      Tulip Series Book X.
  - https://jkbose.jk.gov.in/Syllabus-for-12th-class.html -> pdf/Syllabi Class
    12th 2026 organised.pdf (2026-27 for Summer Zone areas of Jammu Division;
    2025-26 for Kashmir Division and Winter Zone areas): faculties of Science,
    Home Science, Commerce, Humanities; science: General English, Physics,
    Chemistry compulsory + two subjects from groups IV-VIII, not more than one
    per group (IV Mathematics / Applied Mathematics; V Biology / Statistics /
    Geography; VI Geology, Biotechnology, Microbiology, Biochemistry; VII
    Computer Science, Information Practices and others; VIII vocational);
    commerce: General English, Business Studies, Accountancy compulsory + two
    from groups IV-VII; humanities: General English + four from groups II-IX.
    Pass: 33% General English, 36% in each of the other four subjects; where
    there is a practical, 36% in theory and practical separately. Physics,
    Chemistry, Biology: 70 theory + 10 internal + 20 practical. Mathematics:
    80 theory + 20 internal (periodic tests, best two of three, 10; activities
    from the NCERT lab manual, 10; tentative months July-August, November,
    December-January). Accountancy 80 + 5 internal + 15 practical; Business
    Studies 80 + 20. Chemistry textbook: NCERT. Biology: Botany 35 + Zoology 35.
  - https://jkbose.jk.gov.in/DateSheets10thJmu.html and DateSheets12thJmu.html:
    "Datesheet of Class 10th (SSE) Annual Regular 2026 Jammu Divison(SZ)
    Session FEB-MAR"; "Date sheet for HSP-II (Class 12th) Annual Regular, 2026
    of Jammu Division (Summer Zone)"; Oct-Nov sessions for Kashmir Division and
    winter areas of Jammu Division; older notices use "Soft Zone" and "Hard
    Zone".
  - https://jkbose.jk.gov.in/Examination10thJmu.html -> pdf/Setting of question
    papers.pdf (31-12-2025): question papers for re-appear/failure candidates
    of the old course are set from the new syllabi in vogue for regular
    students of 2024-25 and 2025-26.
  - https://jkbose.jk.gov.in/textbookclass10.html : Class 10 textbooks include
    Mathematics Part A and Part B, Science, English, Hindi, Urdu, Dogri,
    Punjabi, Kashmiri, History, Geography, Economics, Democratic Politics II.
  - https://jkbose.jk.gov.in/ModelTestPapers.html : model test papers for
    Classes 9-12, Botany and Zoology listed separately.
  Which zone a Jammu school belongs to is NOT stated here; families are told to
  ask the school. Local detail only from
  database/seo-content/areas/jammu-research.json. Fee wording is the approved
  sentence. FAQs render from faqs/jkbose-tutor-jammu.php. Area links render
  only for active areas.
--}}
@php
  $jkbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jkbA = function (string $slug, string $label) use ($jkbSlugs) {
      return in_array($slug, $jkbSlugs, true)
          ? '<a href="' . e(url('/city/jammu/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="jkbGuideTitle">
  <h2 id="jkbGuideTitle">JKBOSE tutors in Jammu: the syllabus, the zones and the marks that come from school</h2>

  <p class="nx-guide__lede">
    The Jammu and Kashmir Board of School Education, JKBOSE for short, sets the public examinations for state-board
    students across the union territory. For a Jammu family it is worth reading the board's own syllabus documents
    rather than relying on what other parents remember, because three things in them change how tuition should be
    planned: the board examines Class 11 as well as Classes 10 and 12, a fifth of each main Class 10 subject is marked
    in school, and the Jammu Division runs on two calendars, a summer zone and a winter zone. This page sets out what
    the current syllabus files say about subjects, marks and paper design, what the board's site offers for free, how
    a tutor should plan from Class 9 to Class 12, and how to find one who can reach your part of Jammu.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#jkb-board">The board</a> ·
    <a href="#jkb-zones">Summer and winter zones</a> ·
    <a href="#jkb-ten">Class 10 subjects</a> ·
    <a href="#jkb-internal">The 20 school marks</a> ·
    <a href="#jkb-maths">Maths and science design</a> ·
    <a href="#jkb-senior">Classes 11 and 12</a> ·
    <a href="#jkb-pass">Pass rules</a> ·
    <a href="#jkb-site">Using the website</a> ·
    <a href="#jkb-plan">Year plan</a> ·
    <a href="#jkb-where">Localities</a> ·
    <a href="#jkb-demo">Demo</a> ·
    <a href="#jkb-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jkb-board">The board and its Jammu office</h2>
  <p>
    JKBOSE was set up under the Jammu and Kashmir State Board of School Education Act of 1975. Its own introduction
    describes a wide brief: it runs the secondary and higher secondary public examinations, prescribes the courses and
    syllabi, prepares textbooks and supplies them to schools, affiliates private schools, and runs an open school for
    learners outside regular schooling. The board's contact page gives two addresses, one in
    {!! $jkbA('rehari-colony', 'Rehari Colony') !!}, Jammu, and one in Srinagar. Its website splits examinations, date
    sheets and results into a Jammu Division list and a Kashmir Division list, and a Jammu family should use the first.
  </p>
  <p>
    The three public examinations carry formal names that appear on forms and date sheets: the Secondary School
    Examination for Class 10, Higher Secondary Part I for Class 11 and Higher Secondary Part II for Class 12. Board
    registration happens in Class 9. Treat Class 11 as a real exam year; it is the one families most often
    underrate.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jkb-zones">Summer zone and winter zone: which calendar is yours?</h2>
  <p>
    The board publishes its syllabus files with the session they apply to, and the Jammu Division appears on two
    timetables. The Class 10 syllabus uploaded in June 2026, for example, is titled for the 2026-27 academic session in
    the summer-zone areas of the Jammu Division, and for the 2025-26 session in the Kashmir Division, the winter-zone
    areas of the Jammu Division and Ladakh. The date sheets follow the same split: a February–March session appears for
    the Jammu Division's summer zone, and an October–November session for the Kashmir Division and the winter areas of
    the Jammu Division. Older notices on the site use the terms soft zone and hard zone for a similar division.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What the zone changes for a Jammu JKBOSE student, as shown in the board's document titles</caption>
    <thead>
      <tr><th scope="col">Item</th><th scope="col">Summer-zone areas of the Jammu Division</th><th scope="col">Winter-zone areas of the Jammu Division</th></tr>
    </thead>
    <tbody>
      <tr><td>Session named in the June 2026 syllabus files</td><td>2026-27</td><td>2025-26, with the Kashmir Division and Ladakh</td></tr>
      <tr><td>Annual regular session in the date-sheet titles</td><td>February–March (Class 10, 2026)</td><td>October–November</td></tr>
      <tr><td>What the tutor does</td><td>Plans the year to finish by winter, then revises</td><td>Plans for an autumn exam and a different revision season</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    We do not assume which zone your child's school is in. Ask the school, then open that zone's date sheet on the
    board's site, and have the tutor plan revision backwards from it. A tutor who raises the
    question unprompted understands how this board works.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jkb-ten">Class 10: the five compulsory subjects and the options</h2>
  <p>
    The Class 10 scheme of studies requires every candidate to pass five compulsory subjects: General English; Urdu or
    Hindi; Mathematics; Social Science, which spans history, geography, economics, civic topics, and disaster
    management with road safety education; and Science, taught as physics, chemistry and biology. Beyond these, a
    student may take one additional language, from a list that includes Dogri, Punjabi, Sanskrit, Kashmiri and Urdu or
    Hindi (whichever was not taken as compulsory), and one optional subject such as a vocational course. The
    syllabus also lists Computer Science for all students, assessed internally.
  </p>
  <p>
    The board writes many of its own books. For Class 10 it lists a two-part Mathematics book (Part A and Part B), a
    Science textbook published by the board, English, social science volumes and books for each language. A tutor should work
    from the book on your child's desk; practice from other sources is useful only once it has been mapped onto that
    book's chapters.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jkb-internal">The 20 marks that come from school</h2>
  <p>
    Every main Class 10 subject is out of 100: 80 for the board paper and 20 for internal assessment run by the school.
    The syllabus spells out how those 20 are built, and a tutor can protect most of them simply by keeping work
    organised.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>JKBOSE Class 10 internal assessment, from the board's syllabus</caption>
    <thead>
      <tr><th scope="col">Part</th><th scope="col">Marks</th><th scope="col">How a tutor helps</th></tr>
    </thead>
    <tbody>
      <tr><td>Periodic assessment: pen-and-paper tests</td><td>5</td><td>Short-answer practice before each school test, using the unit-wise syllabus</td></tr>
      <tr><td>Periodic assessment: multiple assessment (quizzes, oral tests, concept maps and similar)</td><td>5</td><td>Oral explanation of ideas, not only written answers</td></tr>
      <tr><td>Portfolio</td><td>5</td><td>Worksheets, projects and models kept neat, complete and dated</td></tr>
      <tr><td>Subject enrichment (lab practical in maths and science)</td><td>5</td><td>Activities done properly and recorded, not copied at the end</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The board grades the internal part as A (14 to 20), B (7 to 13) or C (below 7, marked "to improve"). Test notebooks
    are kept by the school and shown to students and parents, so ask to see them; they tell a tutor more than any
    report card.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jkb-maths">How the Class 10 maths and science papers are designed</h2>
  <p>
    Both are three-hour board papers of 80 marks. The syllabus gives the weight of each unit, which tells a tutor where
    the time should go.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>JKBOSE Class 10 mathematics: marks by unit</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Algebra</td><td>20</td></tr>
      <tr><td>Geometry</td><td>15</td></tr>
      <tr><td>Trigonometry</td><td>12</td></tr>
      <tr><td>Statistics and probability</td><td>11</td></tr>
      <tr><td>Mensuration</td><td>10</td></tr>
      <tr><td>Number systems</td><td>6</td></tr>
      <tr><td>Coordinate geometry</td><td>6</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The maths question design is also stated: about 54% of the marks test remembering and understanding, about 24%
    applying, and about 22% analysing, evaluating and creating. A student who knows every standard result but freezes
    on an unfamiliar question can still lose a fifth of the paper, so a tutor should set a few unseen problems every
    week rather than only textbook exercises.
  </p>
  <p>
    The science paper has three sections: physics for 26 marks, chemistry for 26 and biology for 28. Across the paper
    the board lists three five-mark long answers, nine three-mark short answers, ten two-mark answers and eighteen
    one-mark multiple-choice questions. That spread rewards breadth: eighteen quick questions can come from anywhere in
    the book. Our <a href="{{ url('/maths-home-tutor-jammu') }}">maths</a> and
    <a href="{{ url('/science-home-tutor-jammu') }}">science</a> pages for Jammu go deeper into each subject, and the
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths</a> page covers the topics themselves.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jkb-senior">Classes 11 and 12: faculties, subject groups and marks</h2>
  <p>
    At the higher secondary stage the board organises subjects into four faculties, Science, Commerce, Humanities and
    Home Science, each with numbered subject groups. The group rules decide which combinations are allowed, so check
    them before choosing a tutor.
  </p>
  <ul>
    <li><strong>Science.</strong> General English, Physics and Chemistry are compulsory. The student adds two more subjects from different groups: for example Mathematics or Applied Mathematics from one group, and Biology, Statistics or Geography from another, or a subject such as Computer Science, Biotechnology or Geology.</li>
    <li><strong>Commerce.</strong> General English, Business Studies and Accountancy are compulsory, plus two more from different groups, such as Economics or Entrepreneurship, and Business Mathematics.</li>
    <li><strong>Humanities.</strong> General English plus four subjects, no more than one from each group.</li>
  </ul>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How some Class 12 subjects are marked under the 2026-27 syllabus (out of 100)</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Theory</th><th scope="col">Internal</th><th scope="col">Practical</th></tr>
    </thead>
    <tbody>
      <tr><td>Physics, Chemistry, Biology</td><td>70</td><td>10</td><td>20</td></tr>
      <tr><td>Mathematics</td><td>80</td><td>20</td><td>None</td></tr>
      <tr><td>Accountancy</td><td>80</td><td>5</td><td>15</td></tr>
      <tr><td>Business Studies, Economics</td><td>80</td><td>20</td><td>None</td></tr>
      <tr><td>General English</td><td>80</td><td>20</td><td>None</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Two details stand out. Class 12 biology is split into a botany section and a zoology section of 35 marks each, so
    a student can be secure in one half and shaky in the other. And the mathematics internal marks come from periodic tests,
    with the higher two of three counting, plus activities from the NCERT lab manual; the syllabus lists tentative months
    for the three tests, so a tutor can plan revision around them. Subject help for the senior classes is on our Jammu
    <a href="{{ url('/physics-home-tutor-jammu') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-jammu') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-jammu') }}">biology</a> and <a href="{{ url('/english-home-tutor-jammu') }}">English</a> pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jkb-pass">Pass rules and what they mean for revision</h2>
  <p>
    Under the board's standing rules for Class 12, a candidate needs 33% in General English and 36% in each of the other
    four subjects. Where a subject has a practical, 36% is needed in theory and in the practical separately, as well as
    in the total. In practice that means a student strong in theory can still fail a science subject by neglecting the
    practical record, and the reverse. Plan both.
  </p>
  <p>
    Repeat candidates should note one recent notice. In December 2025 the board said that question papers for
    re-appear and failure candidates of the old course would be set from the new syllabi in use for regular students.
    A student repeating a subject should therefore prepare from the current syllabus file, not last year's notes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jkb-site">Using the board's website well</h2>
  <p>
    Most of what a JKBOSE tutor needs is free on jkbose.jk.gov.in. A short checklist for parents:
  </p>
  <ol>
    <li><strong>Syllabus.</strong> Download the file for your child's class and zone; check the session year in its title.</li>
    <li><strong>Textbooks.</strong> The board posts its textbooks class by class, useful when a school copy goes missing.</li>
    <li><strong>Model test papers.</strong> Available for Classes 9 to 12, with Botany and Zoology listed separately at the senior level.</li>
    <li><strong>Question bank.</strong> Item banks for practice before the board papers.</li>
    <li><strong>Date sheets.</strong> Under the Jammu Division heading, for your zone.</li>
    <li><strong>After results.</strong> Forms for photocopies of answer scripts and for re-evaluation, for Classes 10, 11 and 12.</li>
  </ol>
  <p>
    The board's pages are on jkbose.jk.gov.in. Families in the Kashmir Division can read our
    <a href="{{ url('/jkbose-tutor-srinagar') }}">JKBOSE tutors in Srinagar</a> page, which walks through the board's
    model papers in detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jkb-plan">Year by year: what JKBOSE tuition should focus on</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Where the hours go in each board year</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Priority</th><th scope="col">Typical rhythm</th></tr>
    </thead>
    <tbody>
      <tr><td>9</td><td>Board registration year: algebra and geometry foundations, science vocabulary, the portfolio habit</td><td>Two sessions a week</td></tr>
      <tr><td>10</td><td>Unit weights guide the hours; unseen maths problems weekly; internal work kept current; full papers once the syllabus is done</td><td>Two or three a week</td></tr>
      <tr><td>11</td><td>A board exam year: stream subjects from the first month, practicals recorded as they happen</td><td>One or two per main subject</td></tr>
      <tr><td>12</td><td>Theory and practical both above the pass line; maths periodic tests planned for; entrance work alongside where it fits</td><td>Two per core subject in the run-up</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Science students heading for engineering or medical entrance exams usually run that preparation alongside
    the board; see our
    <a href="{{ url('/jee-home-tutor-jammu') }}">JEE</a> and <a href="{{ url('/neet-home-tutor-jammu') }}">NEET</a> home
    tutor pages for Jammu. If your child may move to another board, the <a href="{{ url('/cbse-home-tutor-jammu') }}">CBSE</a>
    and <a href="{{ url('/icse-home-tutor-jammu') }}">ICSE and ISC</a> pages explain what changes, and our article on
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">how to choose a board and stream</a> helps with the decision.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jkb-where">Finding a tutor who can reach your part of Jammu</h2>
  <p>
    A weekly tutor makes the same journey for a whole year, so we start with tutors who live near you, then your zone,
    then the wider city, with online as the back-up. Notes from our locality research:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Jammu localities and what helps a tutor arrive on time</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">What helps</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $jkbA('old-city', 'Old City') !!}</td><td>Older houses along narrow lanes; a precise lane landmark, and a time fixed away from the evening market crowd</td></tr>
      <tr><td>{!! $jkbA('rehari-colony', 'Rehari Colony') !!}</td><td>Two municipal wards, north and south; Rehari Chowk and Rehari Chungi are the landmarks to give</td></tr>
      <tr><td>{!! $jkbA('bakshi-nagar', 'Bakshi Nagar') !!}</td><td>Tutors from Rehari, Talab Tillo or the old city reach it easily; a fixed weekday slot works well</td></tr>
      <tr><td>{!! $jkbA('talab-tillo', 'Talab Tillo') !!}</td><td>Mini-buses, autos and cabs are easy to find; plan the start time with margin around the busy chowk</td></tr>
      <tr><td>{!! $jkbA('janipur', 'Janipur') !!}</td><td>A tutor on a two-wheeler copes more easily with Janipur Road and tight lane parking</td></tr>
      <tr><td>{!! $jkbA('bathindi', 'Bathindi') !!}</td><td>Newer flats on the eastern side; buildings may ask visitors to sign in, so share the tutor's name in advance</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The zone pages cover each part of the city:
    <a href="{{ url('/city/jammu/zone/rail-head-new-city') }}">Rail Head and New City</a>,
    <a href="{{ url('/city/jammu/zone/trikuta-channi') }}">Trikuta and Channi</a>,
    <a href="{{ url('/city/jammu/zone/kunjwani-sainik-colony') }}">Kunjwani and Sainik Colony</a>,
    <a href="{{ url('/city/jammu/zone/old-city-sidhra') }}">Old City and Sidhra</a> and
    <a href="{{ url('/city/jammu/zone/janipur-akhnoor-road') }}">Janipur and Akhnoor Road</a>. Every locality is on the
    <a href="{{ url('/city/jammu') }}">Jammu home tutors</a> page, and the
    <a href="{{ url('/blog/jammu-home-tuition-guide') }}">Jammu home tuition guide</a> describes timing in each zone.
    In the hot months and on short winter evenings, an online session keeps the week on track; our
    <a href="{{ url('/online-tutor-jammu') }}">online tutors for Jammu</a> page explains how.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jkb-demo">What to ask a JKBOSE tutor at the free demo</h2>
  <ol>
    <li><strong>"Which zone's syllabus file are you teaching from?"</strong> The answer should match your school's session.</li>
    <li><strong>"Which units carry the most marks in this subject?"</strong> A tutor who knows the weights plans the hours well.</li>
    <li><strong>"How will you help with the internal 20 marks?"</strong> Listen for the portfolio, tests and practical record.</li>
    <li><strong>"What changes in Class 11?"</strong> It is a board exam year; the plan should start in the first month.</li>
    <li><strong>"Which book will you use?"</strong> It should be the board textbook your child's school uses.</li>
    <li><strong>"Where do you travel from, and at what time?"</strong> Ask how the slot changes between summer and winter.</li>
  </ol>
  <p>
    You receive two or three matched tutors, each with a visible fee, and the first lesson costs nothing. If the fit is
    wrong, another demo follows, and changing tutor at any later point is also free. Every tutor who joins passes an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before the profile is shown. More checks are in the
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jkb-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Fees are set by tutors themselves and appear on the shortlist before any demo. For what to ask about session length
    and weekly hours, read the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our
    <a href="{{ url('/blog/home-tuition-fees-jammu') }}">Jammu home tuition fees</a> article.
  </p>
  <p>
    To begin, share your child's class and stream, the subjects that need help, the school's zone if you know it, and
    your colony with a nearby chowk or morh. The first class is a <a href="{{ url('/demo-class') }}">free demo</a>, and you can browse
    <a href="{{ url('/tutors') }}">tutor profiles</a> in the meantime. Teachers who know the JKBOSE books can find
    requests on <a href="{{ url('/tuition-jobs/jammu') }}">Jammu tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
