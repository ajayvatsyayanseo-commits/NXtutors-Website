{{--
  Board hub: "Haryana Board (HBSE) tutor Gurgaon". The board's own name is the
  Board of School Education Haryana (BSEH), Bhiwani. Author: nxtutors
  (NXTutors Academic Team). No school, college, coaching, society or people
  names. No exam dates, results, pass rates or candidate numbers. No claim about
  how many Gurugram families follow the board (the hub and zone files do not
  say); only the Dwarka Expressway zone note about students arriving from a
  state board, and the Old Gurugram note that Hindi, Sanskrit and Accountancy
  tutors are easier to find there. Written separately from the Faridabad page.

  Official sources (all read 2 Oct 2026, bseh.org.in only):
  - https://bseh.org.in/history : set up in 1969 under Haryana Act No. 11 of
    1969, headquarters at Chandigarh, shifted to Bhiwani in January 1981; first
    matriculation (Class 10) exam in 1970; Class XII under the 10+2 pattern
    from 1987; 10+2 vocational exam from 1990; Haryana Open School set up 1994.
  - https://bseh.org.in/mission and /objectives : prescribing syllabi and
    textbooks, conducting exams and declaring results, re-checking and
    re-evaluation, school-based assessment.
  - https://bseh.org.in/faqs : re-checking applications within 30 days of the
    result; a student who fails one subject in the matric exam may take Science
    or Commerce in Class 11 if that subject is cleared within the next two
    chances; Computer Science can be taken as an elective in any senior
    secondary stream; admission within 20 days of migration; Haryana Open
    School certificates at par with the formal-system certificates; Hindi and
    English named as the two compulsory languages (FAQ on exemptions).
  - CBSE comparison facts (Accountancy 055: 80 theory + 20 project; Economics
    030: Class 11 statistics + microeconomics, Class 12 macroeconomics + Indian
    Economic Development) from cbseacademic.nic.in 2026-27 curriculum, as cited
    on accountancy-home-tutor-gurgaon and economics-home-tutor-gurgaon.
  - https://bseh.org.in/enrolment-branch : enrolment numbers issued to regular
    students from Class 9 to 11 through the school; students from other states
    joining a Haryana school need an enrolment return; the number stays the
    same up to Class 12.
  - https://bseh.org.in/question-paper-design-202627 ->
    /syllabusqpd10th2026 (Class 10 subject list) and
    /syllabusclass12thforsession2026 (Class 12 subject list, 36 syllabi).
    Syllabus PDFs (Google Drive links on those pages), session 2026-27:
    Class 10 Mathematics, code 009: one annual exam, 80 marks, internal 20
    (two SATs 4, half-yearly 2, pre-board 2, classroom participation (CRP) 2,
    project 5, attendance 5 on a 75%-to-95%+ scale); units Number Systems 6,
    Algebra 20, Coordinate Geometry 6, Geometry 15, Trigonometry 12,
    Mensuration 10, Statistics & Probability 11.
    Class 10 Science, code 013: 80 theory, 10 practical (two experiments of 2
    marks, activity 2, practical notebook 2, viva 2), 10 internal (SATs 2,
    half-yearly 1, pre-board 1, CRP 1, attendance 5); units 26/24/14/12/4.
    Class 12 Physics, code 850: theory 70, practical 30 (15 internal, 15
    external: two experiments 9, activity 3, viva 3); 3 hours.
    Class 12 Mathematics, code 835: 80 + 20 internal.
    Class 12 Accountancy, code 903: annual 60, practical 20 (file 4, written
    test on the project 12, viva 4), internal 20; Part A compulsory, Part B a
    choice of Analysis of Financial Statements or Computerised Accounting.
    Class 12 Economics, code 576: 80 + 20; Part A microeconomics, Part B
    macroeconomics. Class 12 Business Studies, code 900: 80 + 20; refers to the
    NCERT book. Class 12 English Core, code 501: reading 15, writing 15,
    grammar 10, Flamingo and Vistas 40; internal 20.
  - https://bseh.org.in/model-paper-stepwise-marking-scheme-classwise-202627 and
    /class-12th-model-paper-stepwise-marking-scheme-202627 (bseh.org.in/uploads
    PDFs): Physics model paper "Hindi and English Medium", 35 questions in
    sections A-E (1, 2, 3, 4-mark case study, 5 marks), calculators not
    allowed; Mathematics practice paper 2026-27, 3 hours, 80 marks, 38
    questions; Economics 576 sample paper, 3 hours, 80 marks, 34 questions,
    word limits of about 30, 60 and 130 words; Accountancy model paper, 3 hours,
    60 marks, 30 questions.
  - https://bseh.org.in/teacher-student-guide-for-comptency-based-assessment
    (teacher and student guides in English and Hindi), /academicfinal
    (competency-based item booklets, practice papers, equivalency list),
    /nsqf (NSQF skill subjects, Classes 9-12, 2026-27), /sanskrit-cell (Purva
    Madhyama, Classes 9-10, and Uttar Madhyama, Classes 11-12), /hos-new
    (Haryana Open School), /vedic-mathematics, /datesheetall (re-appear,
    compartment and improvement sittings listed; no dates used here).
  Local detail only from database/seo-content/zones/gurugram.json,
  database/seo-content/areas/gurugram-about.json (Sector 5, Sector 22) and the
  Gurugram hub view. Fee wording is the approved sentence.
  FAQs render from faqs/haryana-board-tutor-gurgaon.php.
  Area links render only when that Gurugram area page exists and is active.
--}}
@php
  $hbgSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $hbgA = function (string $slug, string $label) use ($hbgSlugs) {
      return in_array($slug, $hbgSlugs, true)
          ? '<a href="' . e(url('/city/gurugram/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="hbgGuideTitle">
  <h2 id="hbgGuideTitle">Haryana Board tutors in Gurugram: Secondary in Class 10, Senior Secondary in Class 12</h2>

  <p class="nx-guide__lede">
    Gurugram is a Haryana city, and alongside its CBSE, CISCE and international schools are schools affiliated to
    the state's own board. Parents usually type "HBSE" or "Haryana Board"; the board calls itself the Board of
    School Education Haryana (BSEH) and is based in Bhiwani. Its Class 10 and Class 12 papers come with a marking
    pattern that rewards things a CBSE-trained tutor may overlook, from attendance marks to a separate practical
    exam in accountancy. This page explains what the board publishes for the 2026-27 session, where it matches and
    where it departs from CBSE, and how a home tutor in Gurugram can plan the four years from Class 9 to Class 12.
    Every board fact here comes from bseh.org.in; please confirm it there before your child's exam year.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#hbg-board">About the board</a> ·
    <a href="#hbg-ten">Class 10 papers</a> ·
    <a href="#hbg-internal">The 20 internal marks</a> ·
    <a href="#hbg-medium">Hindi and English</a> ·
    <a href="#hbg-senior">Classes 11 and 12</a> ·
    <a href="#hbg-papers">Reading the model papers</a> ·
    <a href="#hbg-cbse">Compared with CBSE</a> ·
    <a href="#hbg-after">Re-checking and second chances</a> ·
    <a href="#hbg-plan">A four-year plan</a> ·
    <a href="#hbg-zones">Across Gurugram</a> ·
    <a href="#hbg-demo">The demo</a> ·
    <a href="#hbg-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="hbg-board">What is the Board of School Education Haryana?</h2>
  <p>
    According to its own history page, the board came into existence in 1969 under Haryana Act No. 11 of that
    year, with its headquarters first at Chandigarh and then at Bhiwani from January 1981. It held its first
    matriculation (Class 10) examination in 1970, moved to the 10+2 pattern with the Class XII examination from
    1987, added a vocational 10+2 examination in 1990 and set up the Haryana Open School in 1994. Its stated
    mission is to prescribe syllabi and textbooks and to conduct examinations and declare results fairly and on
    time.
  </p>
  <p>
    In daily terms, the board's two public examinations are the Secondary (Class 10) and the Senior Secondary
    (Class 12). Schools register their Class 9 to 11 students with the board, which issues an enrolment number that
    stays the same up to Class 12. The board's website lists affiliated schools, so if you are unsure which board a
    school follows, its list and the school office will tell you quickly.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbg-ten">What does the Class 10 (Secondary) examination cover?</h2>
  <p>
    The board's 2026-27 Class 10 syllabus page lists English, Hindi, Sanskrit, Punjabi and Urdu; Mathematics, with
    a Basic and Standard syllabus; Science; Social Science; and electives such as Computer Science, Home Science,
    Physical Education, Drawing, Music, Dance, Agriculture and Animal Husbandry. NSQF skill subjects have their own
    syllabus, model test paper and marking scheme. For the two subjects most families bring a tutor in for, the
    syllabus documents give this split:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 10 maths and science in the board's 2026-27 syllabus documents</caption>
    <thead>
      <tr><th scope="col">Subject and code</th><th scope="col">Annual paper</th><th scope="col">Other marks</th><th scope="col">Where the marks sit</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics (009)</td><td>80 marks, on the whole syllabus</td><td>20 internal</td><td>Algebra 20, Geometry 15, Trigonometry 12, Statistics and Probability 11, Mensuration 10, Number Systems 6, Coordinate Geometry 6</td></tr>
      <tr><td>Science (013)</td><td>80 marks</td><td>10 practical (two experiments, an activity, the practical notebook and a viva, 2 marks each) and 10 internal</td><td>Chemical substances 26, the living world 24, light and the eye 14, electricity and its magnetic effects 12, our environment 4</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Algebra alone is a quarter of the maths paper, and in science, chemistry and biology together make up 50 of
    the 80 marks. A tutor who knows these weightings spends the autumn term accordingly instead of giving every
    chapter equal time. Our <a href="{{ url('/class-10-home-tutor-gurgaon') }}">Class 10 home tutors in Gurgaon</a>
    page covers the board year more generally, and <a href="{{ url('/maths-home-tutor-gurgaon') }}">maths</a> and
    <a href="{{ url('/science-home-tutor-gurgaon') }}">science</a> home tutors in Gurgaon go deeper into each subject.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbg-internal">How are the 20 internal marks earned?</h2>
  <p>
    This is where the Haryana board looks least like the papers parents remember. In the 2026-27 syllabus documents
    for Class 10 maths and for Class 12 subjects such as economics, business studies and mathematics, the 20
    internal marks are built from six pieces:
  </p>
  <ul>
    <li><strong>Two SAT tests:</strong> together weighted at 4 marks.</li>
    <li><strong>The half-yearly exam:</strong> 2 marks.</li>
    <li><strong>The pre-board exam:</strong> 2 marks.</li>
    <li><strong>Classroom participation (CRP):</strong> up to 2 marks, given by the subject teacher.</li>
    <li><strong>A project:</strong> 5 marks.</li>
    <li><strong>Attendance:</strong> 5 marks on a sliding scale, from 1 mark for 75% to 80% up to all 5 for attendance above 95%.</li>
  </ul>
  <p>
    Two lessons follow for anyone arranging tuition. First, home tuition must never cost school days: an
    attendance band is worth as much as a whole project. Second, the school tests count, so a tutor should treat the
    SATs, the half-yearly and the pre-board as real targets, not rehearsals. In Class 10 science the internal share
    is smaller (10 marks, with attendance still worth 5), because a separate 10-mark practical takes the rest.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbg-medium">Hindi medium, English medium, and what that means for a tutor</h2>
  <p>
    The board prints its model papers for both media; the 2026-27 physics paper, for instance, is headed "Hindi and
    English Medium" and carries each question in both languages. Some syllabus documents are published in Hindi
    and others in English, and the board's teacher and student guides on competency-based assessment are offered
    in each language.
  </p>
  <p>
    For a family, the practical point is the answer sheet. A child who writes in Hindi needs practice with the
    Hindi technical terms printed in the textbook, even if the tutor explains a concept in English. The board's FAQ
    names Hindi and English as the two compulsory languages, and Sanskrit, Punjabi and Urdu appear on the Class 10
    language list too. Our
    <a href="{{ url('/city/gurugram/zone/old-gurugram') }}">Old Gurugram</a> zone notes say tutors for Hindi, Sanskrit
    and Accountancy are easier to find in the older sectors than in the newer ones, which matters if you need
    someone comfortable in both languages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbg-senior">Classes 11 and 12: subjects on the Senior Secondary list</h2>
  <p>
    The board's Class 12 page for 2026-27 lists 36 syllabi. They group naturally into the usual streams, and the
    board's FAQ adds that Computer Science can be taken as an elective in any of them. A selection, with the marks
    split each syllabus gives:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Selected Class 12 subjects in the board's 2026-27 syllabus documents</caption>
    <thead>
      <tr><th scope="col">Stream</th><th scope="col">Subject (code)</th><th scope="col">Marks split</th></tr>
    </thead>
    <tbody>
      <tr><td rowspan="2">Science</td><td>Physics (850)</td><td>70 theory; 30 practical, half assessed in school and half externally (two experiments, an activity, a viva)</td></tr>
      <tr><td>Mathematics (835); also Chemistry, Biology, Biotechnology</td><td>Maths: 80 theory + 20 internal</td></tr>
      <tr><td rowspan="2">Commerce</td><td>Accountancy (903)</td><td>60 theory; 20 practical (practical file, a written test on the project, a viva); 20 internal</td></tr>
      <tr><td>Business Studies (900), Economics (576), Entrepreneurship</td><td>80 theory + 20 internal</td></tr>
      <tr><td>Humanities</td><td>History, Geography, Political Science, Sociology, Psychology, Philosophy, Public Administration, Home Science, Defence Studies, Fine Arts and others</td><td>See each syllabus</td></tr>
      <tr><td>Languages</td><td>English Core (501), English Elective, Hindi Core and Elective, Sanskrit, Punjabi, Urdu</td><td>English Core: reading 15, writing 15, grammar 10, textbooks 40, internal 20</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The board's FAQ also answers a question many Class 10 families worry about: a student who fails one subject in
    the matric examination may still take Science or Commerce in Class 11, provided that subject is cleared within
    the next two chances. For subject help in the senior years, see
    <a href="{{ url('/physics-home-tutor-gurgaon') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-gurgaon') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-gurgaon') }}">biology</a>,
    <a href="{{ url('/accountancy-home-tutor-gurgaon') }}">accountancy</a> and
    <a href="{{ url('/economics-home-tutor-gurgaon') }}">economics</a> tutors in Gurgaon, and the
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11 stream choice guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbg-papers">What the 2026-27 model papers show</h2>
  <p>
    The board posts a model paper and a stepwise marking scheme for each subject in Classes 9 to 12, plus
    competency-based item booklets and older practice papers. These are the tutor's working material. Four Class 12
    examples:
  </p>
  <ul>
    <li><strong>Physics:</strong> 35 questions in five sections, from one-mark objective items to three five-mark long answers, with two four-mark case-study questions in between; calculators are not allowed.</li>
    <li><strong>Mathematics:</strong> a three-hour, 80-mark practice paper of 38 questions, including higher-order and case-based items.</li>
    <li><strong>Economics:</strong> 34 questions over three hours, split between microeconomics and macroeconomics, with suggested limits of about 30, 60 and 130 words for the three-, four- and six-mark answers.</li>
    <li><strong>Accountancy:</strong> 30 questions for 60 marks in three hours, with a compulsory part on partnership and company accounts and a choice between financial-statement analysis and computerised accounting.</li>
  </ul>
  <p>
    The stepwise marking scheme is the useful half. It shows where marks are given for a correct method even when a
    final figure slips, and a tutor who grades homework against it teaches a student to lay out working the way the
    examiner reads it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbg-cbse">Haryana Board or CBSE: what actually differs?</h2>
  <p>
    Content overlaps more than many parents expect. Several of the board's syllabi follow NCERT material: the English
    Core syllabus lists the Flamingo and Vistas readers, and the business studies syllabus points to the NCERT book
    for definitions. The differences lie in assessment and in a few subject structures:
  </p>
  <ul>
    <li><strong>Internal marks.</strong> Attendance, classroom participation and in-school tests each carry marks under the Haryana scheme; a CBSE plan built only around the final paper misses them.</li>
    <li><strong>Accountancy.</strong> The board's theory paper is 60 marks, with a 20-mark practical exam beside the internal marks; CBSE's Accountancy is 80 theory plus 20 project marks.</li>
    <li><strong>Class 12 economics.</strong> The board's paper covers microeconomics and macroeconomics together; under CBSE, microeconomics sits in Class 11 and Class 12 pairs macroeconomics with Indian Economic Development.</li>
    <li><strong>Language of the paper.</strong> Haryana Board model papers print each question in Hindi and in English, so a Hindi-medium student is not working from a translation.</li>
  </ul>
  <p>
    Switching boards needs paperwork as well as teaching. The board's enrolment branch says students arriving from
    other states into a Haryana school file an enrolment return through the school, and its FAQ asks for admission
    within 20 days of migration. Our zone notes for the
    <a href="{{ url('/city/gurugram/zone/dwarka-expressway') }}">Dwarka Expressway</a> describe families who arrive
    part-way through a year and a Class 9 student moving from a state board into CBSE; the same gap-finding work
    applies in the other direction. See also our <a href="{{ url('/cbse-home-tutor-gurgaon') }}">CBSE</a> and
    <a href="{{ url('/icse-home-tutor-gurgaon') }}">ICSE and ISC</a> pages for Gurgaon and the
    <a href="{{ url('/blog/moving-to-gurgaon-school-and-tutoring-guide') }}">moving to Gurgaon guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbg-after">Re-checking, re-appear and other routes</h2>
  <p>
    The board's FAQ gives 30 days from the result to apply for re-checking of an answer book. Its date-sheet page
    lists separate sittings for re-appear, compartment and improvement candidates, so a weak result is not always
    final; read the current notice before planning around one. Results are also linked to DigiLocker from the
    board's home page.
  </p>
  <p>
    Three other parts of the board are worth knowing. The Haryana Open School, set up in 1994, serves learners
    outside regular schooling, and the board's FAQ says its certificates are at par with the formal system. A
    Sanskrit cell publishes syllabi for Purva Madhyama (Classes 9 and 10) and Uttar Madhyama (Classes 11 and 12).
    And NSQF skill subjects run from Class 9 to Class 12 with their own papers. If your child is on one of these
    routes, tell us when you ask, because the tutor needs that syllabus rather than the general one.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbg-plan">A four-year Haryana Board plan with a home tutor</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How a tutor's focus shifts from Class 9 to the Senior Secondary exam</caption>
    <thead>
      <tr><th scope="col">Year</th><th scope="col">What the tutor works on</th><th scope="col">What to keep an eye on</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 9</td><td>Algebra and geometry foundations, science diagrams, written answers in the child's medium</td><td>Enrolment with the board happens through the school this year</td></tr>
      <tr><td>Class 10</td><td>Chapter weightings, the model paper and stepwise marking scheme, timed practice, the science practical notebook</td><td>SATs, half-yearly and pre-board marks feed the internal 20; protect attendance</td></tr>
      <tr><td>Class 11</td><td>New subjects in the chosen stream: mechanics and calculus, or accounting basics; English Core grammar and writing</td><td>Settle the stream early; Computer Science is open to every stream</td></tr>
      <tr><td>Class 12</td><td>Full papers against the marking scheme, practical files and viva preparation, project work done by the student</td><td>For science students, a separate plan for <a href="{{ url('/jee-home-tutor-gurgaon') }}">JEE</a> or <a href="{{ url('/neet-home-tutor-gurgaon') }}">NEET</a></td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Most students need two sessions a week per core subject in a board year and fewer in Class 9 or 11. Our
    <a href="{{ url('/class-9-home-tutor-gurgaon') }}">Class 9</a>,
    <a href="{{ url('/class-11-home-tutor-gurgaon') }}">Class 11</a> and
    <a href="{{ url('/class-12-home-tutor-gurgaon') }}">Class 12</a> pages for Gurgaon cover the year-by-year
    rhythm in more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbg-zones">Finding a Haryana Board tutor across Gurugram</h2>
  <p>
    A weekly tutor has to make the same trip all year, so we match by starting point as much as by subject. Notes
    from our zone guides for six sectors:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/gurugram/zone/old-gurugram') }}">Old Gurugram</a>:</strong> {!! $hbgA('sector-22', 'Sector 22') !!} is split into 22A and 22B, so give the block, not just the sector; tutors from Sector 21, 23, 23A or Palam Vihar are a short trip away. {!! $hbgA('sector-5', 'Sector 5') !!} has no metro on the doorstep, so a tutor from Sector 4, 7 or Sheetla Colony can often come straight after school hours.</li>
    <li><strong><a href="{{ url('/city/gurugram/zone/central-gurugram') }}">Central Gurugram</a>:</strong> {!! $hbgA('sector-33-', 'Sector 33') !!} sits in a zone between NH-48 and Sohna Road that tutors from several directions can reach without crossing the whole city.</li>
    <li><strong><a href="{{ url('/city/gurugram/zone/sohna-road') }}">Sohna Road</a>:</strong> in {!! $hbgA('sector-69', 'Sector 69') !!}, ask which side of the road the tutor starts from; crossing it at school or office hours costs more time than the distance suggests.</li>
    <li><strong><a href="{{ url('/city/gurugram/zone/dwarka-expressway') }}">Dwarka Expressway</a>:</strong> {!! $hbgA('sector-107-', 'Sector 107') !!} is mostly high-rise societies, many recently handed over; tutors living along the expressway or in Palam Vihar reach it most easily, and the guard may need the tutor's details before each class.</li>
    <li><strong><a href="{{ url('/city/gurugram/zone/new-gurugram') }}">New Gurugram</a>:</strong> {!! $hbgA('sector-89a-', 'Sector 89A') !!} lies in a spread-out belt where fewer tutors live close by, so one fixed weekly slot, and weekend mornings where possible, make the arrangement last.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/old-gurgaon-palam-vihar-tuition-guide') }}">Old Gurgaon and Palam Vihar</a> and
    <a href="{{ url('/blog/new-gurgaon-dwarka-expressway-tuition-guide') }}">New Gurgaon and Dwarka Expressway</a>
    guides go further, and the <a href="{{ url('/city/gurugram') }}">home tutors in Gurgaon</a> page covers every zone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbg-mode">At home, online, or a mix?</h2>
  <p>
    For Class 10 maths and science, a tutor at the table can see a construction or a ray diagram as it is drawn
    and correct the layout the marking scheme expects. In Classes 11 and 12, when school, practical files and
    perhaps coaching fill the week, one home session plus one shorter online session is often easier to keep.
    Online also widens the choice when you need a tutor who teaches in Hindi medium and none lives near your sector.
    Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online tutoring</a> article and the
    <a href="{{ url('/online-tutor-gurgaon') }}">online tutors in Gurgaon</a> page compare the two.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbg-demo">Questions to ask at a Haryana Board demo</h2>
  <ol>
    <li><strong>Which Haryana Board classes have you taught?</strong> Secondary maths and Senior Secondary physics are different jobs.</li>
    <li><strong>Can you teach in my child's medium?</strong> Ask to see an answer written with the Hindi or English terms from the textbook.</li>
    <li><strong>Mark one answer with the stepwise scheme.</strong> Bring a question your child got wrong and watch how the tutor allots marks.</li>
    <li><strong>How will you handle internal work?</strong> Projects and practical files should be guided, never written for the student.</li>
    <li><strong>What happens around school tests?</strong> A good plan lines up with the SATs, half-yearly and pre-board rather than ignoring them.</li>
    <li><strong>Where do you start from, and at what hour?</strong> In Gurugram the route decides punctuality.</li>
  </ol>
  <p>
    We send two or three matched tutors and show each fee before the demo; the first class is free and switching
    tutor later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>
    before their profile is marked Verified. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class
    checklist</a> has more questions to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbg-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee. See the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-gurgaon') }}">home tuition fees in Gurgaon</a>.
  </p>
  <p>
    Tell us the class, the stream if any, the medium your child writes in, your sector and the hours that suit, and
    book a <a href="{{ url('/demo-class') }}">free demo</a>. You can also browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>. Teachers who know the Haryana Board syllabus can find students through
    <a href="{{ url('/tuition-jobs/gurugram') }}">tuition jobs in Gurugram</a>.
  </p>
  </section>

  </div>
</article>
