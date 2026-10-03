{{--
  Board hub: "Maharashtra Board SSC & HSC tutor Pune" (Pune and Pimpri-Chinchwad).
  Author: nxtutors (NXTutors Academic Team). No school, college, coaching,
  society or people names. No exam dates, results or candidate numbers.

  Official sources (mahahsscboard.in and its document store; read 1-2 Oct 2026):
  - mahahsscboard.in/en/contactus (page data): the State Board's own office,
    listing the "Chairman, State Board, Pune" and "Secretary, State Board,
    Pune", at Bhamburda, Shivajinagar, Pune 411 004; the Pune Divisional
    Board's office at Shivaji Nagar, Pune 411 005. (The address line names a
    neighbouring institute; not repeated on the page.)
  - mahahsscboard.in Divisions data: nine divisional boards; Pune Divisional
    Board, founded 1966, covers Pune, Ahilyanagar and Solapur districts.
  - Evaluation-page PDFs, headed "Maharashtra State Board of Secondary and
    Higher Secondary Education, Pune":
    "Mathematics & Statistics (40) Std XII (Arts and Science)": chapter-wise
    marks with option (Mathematical Logic 8, Matrices 6, Trigonometric
    Functions 10, Pair of Straight Lines 6, Vectors 12, Line and Plane 10,
    Linear Programming 4 = 56; Differentiation 9, Applications of Derivatives 9,
    Indefinite Integration 10, Definite Integration 6, Application of Definite
    Integration 4, Differential Equations 8, Probability Distributions 5,
    Binomial Distribution 5 = 56; total 112); objectives knowledge 30%,
    understanding 42%, application and skill 28%; difficulty easy 30%,
    average 50%, difficult 20%; theory questions up to 15% (17 marks); paper
    format "from year 2021": 80 marks, 3 hours, Section A eight 2-mark MCQs and
    four 1-mark VSAs, Section B any 8 of 12 two-mark, Section C any 8 of 12
    three-mark, Section D any 5 of 8 four-mark; log table allowed, calculator
    not; graph paper not necessary, rough sketch expected; MCQ answer written
    with its letter, only the first attempt evaluated; each section on a new
    page.
    "Economics (49) Std XII": ten units totalling 80 (Introduction to Micro and
    Macro Economics 7, Utility Analysis 7, Demand Analysis 8, Elasticity of
    Demand 8, Supply Analysis 7, Forms of Market 7, Index Numbers 8, National
    Income 8, Public Finance in India 8, Money Market and Capital Market 8,
    Foreign Trade in India 4); objectives knowledge 15, understanding 20,
    application 30, skill 15 (of 80); board paper 80 marks, 3 hours, objective
    Q1 drawn from types such as choose the correct option, complete the
    correlation, give the economic term, find the odd word out, choose the
    wrong pair, assertion and reasoning; later questions: identify and explain
    a concept / distinguish between, agree or disagree with reasons, study a
    table, figure or passage, answer in detail; application-based test 20
    marks, 1 hour, answers on the same sheet, includes "study the situation and
    express your opinion"; college terminal 50 marks (2.5 h) and prelim 80 + 20.
    "STD IX & X MATHEMATICS (71)" and "SCIENCE (72)": two 40-mark parts each,
    20 internal marks; science papers are activity sheets.
  - mahahsscboard.in Student & Syllabus > SSC General / HSC General subject lists
    (codes 71, 72, 73; HSC 54, 55, 56, 40, 88, 50, 49, 51, 52; compulsory
    Health & Physical Education and Environment Education & Water Security).
  - mahahsscboard.in FAQs (English): revaluation needs the answer-sheet
    photocopy and a subject teacher's feedback, applied online within five
    working days; Class Improvement Scheme (passed once, next three consecutive
    examinations, not open to repeaters, all subjects); Isolated Candidate in
    subjects not yet passed, at most four; private SSC admission: at least 14
    years old and passed Std V, not directly to the board; private HSC: passed
    Std X with English and a gap of at least two years; APAAR ID needed for the
    digital marksheet though not for the exam form; sample papers under Home >
    Student Login > Sample Question Papers; "Special Students" link for
    concessions; Marathi- and English-medium school recognition.
  Local detail only from the Pune hub view, zones/pune.json,
  areas/pune-research.json and pune-zone-guides.json. Fee wording is the
  approved sentence. FAQs render from faqs/maharashtra-board-tutor-pune.php.
--}}
@php
  $pmbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pmbA = function (string $slug, string $label) use ($pmbSlugs) {
      return in_array($slug, $pmbSlugs, true)
          ? '<a href="' . e(url('/city/pune/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="pmbGuideTitle">
  <h2 id="pmbGuideTitle">Maharashtra Board tutors in Pune, the city the state board is run from</h2>

  <p class="nx-guide__lede">
    Pune is the home of the Maharashtra State Board of Secondary and Higher Secondary Education: the board's chairman
    and secretary work from its office in Shivajinagar, and its subject schemes carry "Pune" in their heading. For a
    family in Kothrud, Pimpri or Hadapsar, that changes nothing about the papers, which are the same across the state,
    but it does mean the board's own documents are the right place to start. This guide uses them to explain what the
    SSC in Standard X and the HSC in Standard XII actually ask for, looks closely at two HSC subjects that many Pune
    students take, sets out what happens after a result, and explains how we find a State Board tutor who can reach
    your part of Pune and Pimpri-Chinchwad week after week. Rules change from year to year, so confirm anything you plan
    around on mahahsscboard.in.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pmb-office">The board in Pune</a> ·
    <a href="#pmb-map">Class 9 to 12 at a glance</a> ·
    <a href="#pmb-maths">HSC Maths and Statistics</a> ·
    <a href="#pmb-eco">HSC Economics</a> ·
    <a href="#pmb-ssc">SSC habits</a> ·
    <a href="#pmb-after">After the result</a> ·
    <a href="#pmb-medium">Medium</a> ·
    <a href="#pmb-zones">Tutors by zone</a> ·
    <a href="#pmb-entrance">Board and entrance</a> ·
    <a href="#pmb-demo">The demo</a> ·
    <a href="#pmb-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pmb-office">Two board offices in one city</h2>
  <p>
    The board's contact page lists two Pune addresses. The State Board office in Shivajinagar is where the chairman
    and secretary of the whole board sit. Separately, the board runs nine divisional boards, and the Pune Divisional
    Board, founded in 1966, looks after the Pune, Ahilyanagar and Solapur districts from its own office in Shivaji Nagar.
    Pimpri-Chinchwad lies in Pune district, so every home on our <a href="{{ url('/city/pune') }}">Pune tutors page</a>
    falls under the same divisional board.
  </p>
  <p>
    In day-to-day terms, schools and junior colleges deal with the board on a family's behalf: they submit exam forms,
    enter practical and internal marks on the board's portal and hand over the printed marksheet and certificate. Parents mostly meet the board through
    its website, for sample papers, results, verification and the digital marksheet.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pmb-map">Standard IX to XII: what the board examines, and where tutoring helps</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The State Board years in one view</caption>
    <thead>
      <tr><th scope="col">Year</th><th scope="col">Exam</th><th scope="col">Main subjects</th><th scope="col">What is particular to this board</th></tr>
    </thead>
    <tbody>
      <tr><td>Standard IX</td><td>School exams, on the same scheme as Standard X</td><td>Mathematics (71), Science and Technology (72)</td><td>Both subjects split into two parts from the start</td></tr>
      <tr><td>Standard X</td><td>SSC</td><td>Maths, science, Social Sciences (73), English, Marathi, Hindi</td><td>Two 40-mark maths papers and two 40-mark science activity sheets, each with 20 internal marks</td></tr>
      <tr><td>Standard XI</td><td>Junior college exams</td><td>Physics, chemistry, biology, maths; or accountancy and economics</td><td>New subjects, a new institution, usually a new timetable</td></tr>
      <tr><td>Standard XII</td><td>HSC</td><td>Physics (54), Chemistry (55), Biology (56), Maths and Statistics (40 or 88), Accountancy (50), Economics (49)</td><td>An 80-mark or 70-mark board paper plus internal or practical marks, set out subject by subject</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Every HSC student also takes two compulsory subjects, Health and Physical Education and Environment Education and
    Water Security, alongside languages. The science version of Maths and Statistics carries code 40 and the commerce
    version code 88; they are different papers, so tell us which one your child sits.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pmb-maths">A closer look: HSC Mathematics and Statistics (40)</h2>
  <p>
    The board's scheme for the Arts and Science version is unusually detailed, and a good tutor plans the year from it.
    The written paper is 80 marks in three hours, in four sections:
  </p>
  <ul>
    <li><strong>Section A:</strong> eight multiple-choice questions of two marks each and four one-mark very short answers.</li>
    <li><strong>Section B:</strong> any eight of twelve two-mark questions.</li>
    <li><strong>Section C:</strong> any eight of twelve three-mark questions.</li>
    <li><strong>Section D:</strong> any five of eight four-mark long answers.</li>
  </ul>
  <p>
    Log tables are allowed and calculators are not. Graphs are expected as rough sketches, not on graph paper. Two
    instructions catch students every year: a multiple-choice answer must be written out together with its letter, and
    only the first attempt is marked, so crossing out and rewriting does not help; and each section has to start on a
    new page.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Marks with option, chapter by chapter, from the board's scheme</caption>
    <thead>
      <tr><th scope="col">Part I chapter</th><th scope="col">Marks</th><th scope="col">Part II chapter</th><th scope="col">Marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematical Logic</td><td>8</td><td>Differentiation</td><td>9</td></tr>
      <tr><td>Matrices</td><td>6</td><td>Applications of Derivatives</td><td>9</td></tr>
      <tr><td>Trigonometric Functions</td><td>10</td><td>Indefinite Integration</td><td>10</td></tr>
      <tr><td>Pair of Straight Lines</td><td>6</td><td>Definite Integration</td><td>6</td></tr>
      <tr><td>Vectors</td><td>12</td><td>Application of Definite Integration</td><td>4</td></tr>
      <tr><td>Line and Plane</td><td>10</td><td>Differential Equations</td><td>8</td></tr>
      <tr><td>Linear Programming</td><td>4</td><td>Probability Distributions; Binomial Distribution</td><td>5 + 5</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Each part carries 56 of the 112 marks on offer once the choices are counted. The scheme also spreads those marks
    as 30% knowledge, 42% understanding and 28% application and skill, sets about half the questions at average
    difficulty and a fifth as difficult, and limits pure theory to 15%. Read together, the numbers say that vectors,
    three-dimensional geometry and integration deserve the most hours, that a student cannot pass on remembered
    definitions, and that steady practice of two- and three-mark problems, which make up most of Sections B and C,
    is where marks are won. Our <a href="{{ url('/maths-home-tutor-pune') }}">maths home tutors in Pune</a> and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths</a> page go further into the subject.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pmb-eco">A closer look: HSC Economics (49) for commerce and arts</h2>
  <p>
    Economics shows how differently a commerce subject is examined. The board paper is 80 marks in three hours, and
    the junior college adds a 20-mark application-based test of one hour, written on the question sheet itself and
    covering the whole syllabus. During the year the college also holds a 50-mark terminal exam and an 80-mark
    preliminary exam with its own application-based test.
  </p>
  <p>
    The first question is entirely objective and mixes formats the board names in its pattern: choosing the correct
    option, completing a correlation, giving the economic term, finding the odd word out, spotting the wrong pair, and
    assertion-and-reasoning items. Later questions ask the student to identify and explain a concept from an example,
    to distinguish between two ideas, to agree or disagree with a statement and give reasons, to read a table, figure
    or passage, and to write longer answers. The application-based test ends with short situations on which the
    student has to express an opinion.
  </p>
  <p>
    The ten units range from 4 marks (foreign trade in India) to 8 marks (demand analysis, elasticity of demand, index
    numbers, national income, public finance in India, and money and capital markets). Of the 80 marks, 30 are set
    aside for application, more than for knowledge or understanding. A tutor who only dictates notes misses most of
    that; the useful work is practising the formats until the student can turn a definition into an example and an
    example into a reasoned opinion. See our <a href="{{ url('/economics-home-tutor-pune') }}">economics</a> and
    <a href="{{ url('/accountancy-home-tutor-pune') }}">accountancy</a> home tutor pages for Pune.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pmb-ssc">SSC: the habits that matter in Standard IX and X</h2>
  <p>
    The board publishes one combined scheme for Standards IX and X in maths and in science, so the habits a student
    builds in Class 9 are the ones the SSC rewards. Maths is examined as two separate 40-mark papers, Part I and
    Part II, with 20 marks of assignments and practicals marked in school. Science and Technology is two 40-mark
    activity sheets sat on different days, with experiments, a journal and projects counted internally.
  </p>
  <ul>
    <li><strong>Treat the two parts as two subjects.</strong> A student strong in algebra and weak in geometry cannot hide it, because each part is a paper of its own.</li>
    <li><strong>Write reasons, not just results.</strong> Science activity sheets ask for explanations, diagrams and completed tables as well as definitions.</li>
    <li><strong>Use the board's sample papers.</strong> They sit under Student Login on the board's site and are the closest guide to the real paper.</li>
    <li><strong>Keep internal work honest.</strong> A tutor can explain an assignment or a practical but should never write it.</li>
  </ul>
  <p>
    For subject depth, see <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths</a> and our
    <a href="{{ url('/science-home-tutor-pune') }}">science home tutors in Pune</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pmb-after">After the result: rechecking, a second attempt, and the digital marksheet</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Options the board describes in its FAQs</caption>
    <thead>
      <tr><th scope="col">Situation</th><th scope="col">What the board allows</th><th scope="col">Where a tutor can help</th></tr>
    </thead>
    <tbody>
      <tr><td>A mark looks wrong</td><td>Marks verification and a photocopy of the answer sheet; revaluation needs the photocopy plus a subject teacher's feedback, applied online within five working days</td><td>Reading the photocopy with the student to see where marks went</td></tr>
      <tr><td>Passed, but wants better marks</td><td>Class Improvement Scheme in the next three consecutive examinations, all subjects again; not open to repeaters</td><td>A full re-run of the syllabus, not one subject</td></tr>
      <tr><td>Passed some subjects earlier</td><td>Isolated Candidate in subjects not yet passed, up to four</td><td>Targeted work in those subjects only</td></tr>
      <tr><td>Studying outside school</td><td>Private SSC entry from age 14 after Standard V; private HSC entry after Standard X with English and a two-year gap; neither applied for directly to the board</td><td>A structured syllabus plan the student would otherwise get in class</td></tr>
      <tr><td>Needs the marksheet online</td><td>Digital marksheet on the board's site and DigiLocker; the exam form can go in without Aadhaar, but the digital marksheet needs an APAAR ID</td><td>None needed; set up the APAAR ID early</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Students with a disability should check the "Special Students" link on the board's website for the concessions it
    lists. If any of these routes applies, read the board's current notice before deciding; a tutor can only plan
    around the rules as they stand.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pmb-medium">Marathi or English medium, and families new to Pune</h2>
  <p>
    The board recognises both Marathi-medium and English-medium schools, and its SSC language list runs well beyond
    those two. A student answers science and maths in the technical terms of their own textbook, so a tutor who
    explains in English must still have the student practise writing in the medium of the paper. When you send a
    request, tell us the medium; it is one of the first filters we apply.
  </p>
  <p>
    Pune also has many families who moved here from other states for work. Their children often join a State Board
    school mid-way and meet Marathi as a language paper for the first time. Our city page notes that tutors here can
    help with Marathi reading and writing; ask for that alongside the core subjects if it applies, and see
    <a href="{{ url('/english-home-tutor-pune') }}">English home tutors in Pune</a> for the English paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pmb-zones">Finding a State Board tutor who can reach you, zone by zone</h2>
  <p>
    A State Board student usually wants the same tutor from Class 9 to the SSC, or through both junior-college years,
    so the route has to last. These notes come from our zone guides:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/pune/zone/kothrud-karve-nagar-deccan') }}">Kothrud, Karve Nagar and Deccan</a>:</strong> {!! $pmbA('shivajinagar', 'Shivajinagar') !!}, where both board offices are, has the strongest transit links in west Pune: the Purple Line, the District Court interchange with the Aqua Line, and suburban trains towards Lonavala.</li>
    <li><strong><a href="{{ url('/city/pune/zone/aundh-baner-pashan') }}">Aundh, Baner and Pashan</a>:</strong> no metro station here was carrying passengers when our guides were written, so a tutor in {!! $pmbA('pashan', 'Pashan') !!} usually rides in from Baner, Aundh, Bavdhan or Sus.</li>
    <li><strong><a href="{{ url('/city/pune/zone/wakad-hinjewadi-pimpri-chinchwad') }}">Wakad, Hinjewadi and Pimpri-Chinchwad</a>:</strong> {!! $pmbA('pimpri', 'Pimpri') !!} is the northern end of the Purple Line and also has a suburban station, so tutors from central Pune can arrive by metro or train.</li>
    <li><strong><a href="{{ url('/city/pune/zone/viman-nagar-kalyani-nagar-kharadi') }}">Viman Nagar, Kalyani Nagar and Kharadi</a>:</strong> in {!! $pmbA('vadgaon-sheri', 'Vadgaon Sheri') !!} most tutors come along Nagar Road, or ride the Aqua Line to Ramwadi and walk or take an auto.</li>
    <li><strong><a href="{{ url('/city/pune/zone/koregaon-park-camp-wanowrie') }}">Koregaon Park, Camp and Wanowrie</a>:</strong> {!! $pmbA('wanowrie', 'Wanowrie') !!} has no station, so tutors from east and south Pune come by two-wheeler, bus or auto; check entry rules near army areas.</li>
    <li><strong><a href="{{ url('/city/pune/zone/hadapsar-kondhwa-nibm') }}">Hadapsar, Kondhwa and NIBM</a>:</strong> no metro reaches the south-east, so a tutor already living in the belt is the steadiest choice.</li>
    <li><strong><a href="{{ url('/city/pune/zone/katraj-bibwewadi-sinhagad-road') }}">Katraj, Bibwewadi and Sinhagad Road</a>:</strong> in {!! $pmbA('dhankawadi', 'Dhankawadi') !!} the nearest metro is Swargate, so check the onward bus or auto before fixing a weekly slot.</li>
  </ul>
  <p>
    The <a href="{{ url('/blog/west-pune-tuition-guide') }}">west Pune</a>,
    <a href="{{ url('/blog/east-pune-tuition-guide') }}">east Pune</a> and
    <a href="{{ url('/blog/south-pune-tuition-guide') }}">south Pune</a> tuition guides go into each area in more detail.
    Where the travel will not work every week, one home session and one online session is a sensible mix; our comparison
    of <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring</a> explains when each suits.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pmb-entrance">Board marks and entrance tests in the same two years</h2>
  <p>
    For an HSC science student, the junior-college years carry two loads at once. The board wants written answers,
    derivations and a practical journal; the state's engineering and pharmacy entrance, MHT-CET, wants fast, accurate
    multiple-choice work on largely the same chapters. Our <a href="{{ url('/mht-cet-tutor-pune') }}">MHT-CET tutors in
    Pune</a> page explains how a tutor keeps both moving, and the <a href="{{ url('/jee-home-tutor-pune') }}">JEE</a> and
    <a href="{{ url('/neet-home-tutor-pune') }}">NEET</a> pages cover the national tests. Subject tutors are on our
    <a href="{{ url('/physics-home-tutor-pune') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-pune') }}">chemistry</a>
    and <a href="{{ url('/biology-home-tutor-pune') }}">biology</a> pages for Pune. If your child is on another board,
    see <a href="{{ url('/cbse-home-tutor-pune') }}">CBSE</a>, <a href="{{ url('/icse-home-tutor-pune') }}">ICSE and ISC</a>,
    <a href="{{ url('/ib-tutor-pune') }}">IB</a> or <a href="{{ url('/igcse-tutor-pune') }}">IGCSE</a> tutors in Pune, and
    our guide to <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pmb-demo">How to test a State Board tutor at the free demo</h2>
  <ol>
    <li><strong>Name the subject code.</strong> Ask whether the tutor teaches Maths and Statistics 40 or 88, or SSC maths Part I and Part II. A vague "I teach maths" is not enough.</li>
    <li><strong>Hand over a sample paper.</strong> Pick one question from Section C or an activity-sheet question and ask the tutor to teach it as they would in a normal session.</li>
    <li><strong>Check the rules they know.</strong> A tutor familiar with the HSC maths paper will mention the no-calculator rule, the letter-plus-answer rule for MCQs and starting each section on a new page without being asked.</li>
    <li><strong>Ask about the medium.</strong> Can they correct an answer written in your child's medium?</li>
    <li><strong>Ask for a term plan.</strong> Which chapters first, and how will the plan follow the junior college's terminal and prelim exams?</li>
    <li><strong>Settle the route.</strong> Which road or metro line, and what happens on the heaviest monsoon days?</li>
  </ol>
  <p>
    We send two or three matched tutors and show each fee before the demo; the first class is free and switching tutor
    later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> adds more
    questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pmb-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-pune') }}">home
    tuition fees in Pune</a> explain what moves the figure.
  </p>
  <p>
    Send us the standard, the subjects with their codes if you have them, the medium, your area and the free slots,
    and book a <a href="{{ url('/demo-class') }}">free demo</a>. You can also browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>, or, if you teach State Board subjects, look at <a href="{{ url('/tuition-jobs/pune') }}">tuition jobs in
    Pune</a>.
  </p>
  </section>

  </div>
</article>
