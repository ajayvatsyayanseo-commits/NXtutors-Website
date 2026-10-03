{{--
  Board hub: "Haryana Board (HBSE) Class 10 & 12 tutor Faridabad".
  Author: nxtutors (NXTutors Academic Team). No school, college, coaching,
  society or people names. No candidate counts, results or exam dates beyond
  the board's current date-sheet page.

  Official sources (all on bseh.org.in, read 2 Oct 2026):
  - https://bseh.org.in/history : Board of School Education Haryana, Bhiwani,
    set up in 1969 under Haryana Act No. 11 of 1969, headquarters first at
    Chandigarh, moved to Bhiwani in January 1981; first matriculation (Class 10)
    exam 1970; Class 12 under the 10+2 pattern from 1987; 10+2 vocational from
    1990; Haryana Open School set up 1994; semester system from 2006-07;
    relative grading and CCE in the board classes.
  - https://bseh.org.in/objectives : timely syllabi and textbooks, re-checking
    and re-evaluation, school-based assessment through CCE.
  - https://bseh.org.in/faqs : 30 days from the result to apply for re-checking;
    a student who failed one subject in the matric exam may take Science or
    Commerce in Class 11 if that subject is cleared within the immediate next
    two chances; Computer Science can be taken as an elective in any
    Senior Secondary stream; Hindi and English named as the two compulsory
    languages (Q12); Haryana Open School certificates treated at par.
  - https://bseh.org.in/academicfinal and /student-corner-base : Academic Cell
    publishes "Question Papers Design & Syllabus" per session (2026-27 page:
    https://bseh.org.in/question-paper-design-202627), model papers with
    stepwise marking schemes, competency-based item booklets, practice papers
    and a teacher/student guide for competency-based assessment.
  - https://bseh.org.in/syllabusclass12thforsession2026 : Class 12 subject list
    (Hindi Core/Elective, English Core/Elective/Special, Math, Accountancy,
    Biology, Biotechnology, Business Study, Chemistry, Computer Science,
    Economics, Entrepreneurship, Fine Arts, Geography, History, Home Science,
    Defence Studies, Philosophy, Physical Education, Physics, Political
    Science, Psychology, Public Admin, Sanskrit, Sociology, Urdu, Agriculture,
    Punjabi, music and dance subjects).
  - https://bseh.org.in/class-10th-model-paper-stepwise-marking-scheme202627 :
    Class 10 model papers incl. Mathematics Standard and Mathematics Basic,
    Science, Social Science, English, Hindi, Sanskrit, Punjabi, Urdu, skill
    and arts subjects. PDFs read:
    /uploads/files/52b3ebbe11bcb4b4198d1bb071974fb8.pdf (Maths Standard 2026-27:
    3 hours, 80 marks, 38 questions, Sections A-E: A 20 one-mark items, Q1-18
    MCQ / one-word / fill in the blank / true-false, Q19-20 assertion-reason;
    B five 2-mark; C six 3-mark; D four 5-mark; E three 4-mark case studies;
    internal choice in some questions); /930502aaad7e5ea09005a510248480a8.pdf
    (Maths Basic: 3 hours, 80 marks, 38 questions, same section layout);
    /35af21eae60ca3bee733e0ed2a03892f.pdf (Science sample paper 2026-27,
    41 questions, instructions in Hindi and English, assertion-reason items);
    /8894deda57456471dc79c8c102d76633.pdf (English: 3 hours, 80 marks,
    Reading 20, Grammar 10, Writing 10, Literature 40).
  - https://bseh.org.in/class-12th-model-paper-stepwise-marking-scheme-202627 :
    /ae9d7beb32f069e6ea32b7b3ed3b0744.pdf (Maths, "Hindi and English Medium":
    3 hours, 80 marks, 38 questions; A 20 one-mark = 12 MCQ, 3 one-word,
    3 fill-in, 2 assertion-reason; B five 2-mark; C six 3-mark incl. one HOTS /
    competency-based; D four 5-mark; E three 4-mark case-based; graph paper
    attached); /b0f4ac54c93d8799188c975487845a9a.pdf (Physics: 3 hours, 70 marks,
    35 questions; A 18 x 1, B 7 x 2, C 5 x 3, D 2 case studies x 4, E 3 x 5);
    /f36812211035f976d39a11f820ed794b.pdf (Chemistry: 3 hours, 70 marks,
    35 questions, same five-section shape); /af9b62b5f69f6752e79197f659d3d7dd.pdf
    (Accountancy: 3 hours, 60 marks, 30 questions, Part A compulsory, Part B
    either Analysis of Financial Statements or Computerised Accounting);
    /0a9c5e14f5f36b53456bfbf565f4a989.pdf (Economics 2026-27: 3 hours, 80 marks,
    Part A microeconomics, Part B macroeconomics);
    /00adfaa5d56d2928dd93699846ff5cbb.pdf (Business Studies: 3 hours, 80 marks,
    35 questions; 3-mark answers 50-75 words, 4-mark about 150, 6-mark about 200).
  - https://bseh.org.in/uploads/files/b47165ee86e9d61491688c10f674b127.pdf
    (Student and parent handbook on competency-based assessment: NEP 2020;
    competency-based questions use real-life or unfamiliar contexts and add to,
    rather than replace, existing good questions).
  - https://bseh.org.in/datesheetall : date sheets for Secondary and Senior
    Secondary (Academic/Open) October 2026 exams for re-appear, compartment,
    improvement and additional candidates.
  - https://bseh.org.in/nsqf : NSQF skill-subject syllabus, model papers and
    marking schemes for Classes 9-12, session 2026-27.
  Board mix wording only as the Faridabad hub view states it (most students
  CBSE; HBSE conducts Haryana's Class 10 and 12 exams; schools may teach in
  Hindi or English). No claim about where HBSE families live. Local detail
  only from database/seo-content/areas/faridabad-research.json,
  faridabad-zone-guides.json, zones/faridabad.json and the Faridabad hub.
  Fee wording is the approved sentence. FAQs: faqs/haryana-board-tutor-faridabad.php.
  Area links render only for active Faridabad areas.
--}}
@php
  $hbfSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $hbfA = function (string $slug, string $label) use ($hbfSlugs) {
      return in_array($slug, $hbfSlugs, true)
          ? '<a href="' . e(url('/city/faridabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="hbfGuideTitle">
  <h2 id="hbfGuideTitle">Haryana Board tutors in Faridabad: Secondary in Class 10, Senior Secondary in Class 12</h2>

  <p class="nx-guide__lede">
    Faridabad sits inside Haryana, so alongside the CBSE schools that most local students attend there is a state
    board with its own papers: the Board of School Education Haryana, run from Bhiwani and usually shortened to HBSE
    or BSEH. Its Class 10 exam is called the Secondary examination and its Class 12 exam the Senior Secondary, and
    both are printed for Hindi-medium and English-medium candidates alike. A tutor who has prepared CBSE students is
    not automatically ready for these papers, because the section layout, the model papers and even the language of
    the question can differ. This page explains what the board publishes, how its Class 10 and Class 12 papers are
    built, which streams and subjects are open after Class 10, and how to find a tutor who can reach your sector and
    teach in your child's medium. Every fact about the board below comes from bseh.org.in; recheck the current
    session there before you plan around it.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#hbf-board">About the board</a> ·
    <a href="#hbf-ten">Class 10 papers</a> ·
    <a href="#hbf-medium">Hindi or English medium</a> ·
    <a href="#hbf-streams">Class 11 streams</a> ·
    <a href="#hbf-twelve">Class 12 papers</a> ·
    <a href="#hbf-competency">Competency questions</a> ·
    <a href="#hbf-cbse">HBSE beside CBSE</a> ·
    <a href="#hbf-plan">A four-year plan</a> ·
    <a href="#hbf-reach">Tutors across Faridabad</a> ·
    <a href="#hbf-demo">The demo</a> ·
    <a href="#hbf-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="hbf-board">What is the Haryana board, and what does it publish?</h2>
  <p>
    According to its own history page, the Board of School Education Haryana was created in 1969 under a state act,
    began at Chandigarh and moved its headquarters to Bhiwani in January 1981. It held its first Class 10
    (matriculation) examination in 1970 and its first Class 12 examination under the 10+2 pattern in 1987, and in
    1994 it opened Haryana Open School for learners outside regular schooling. The board also describes itself as an
    early adopter of the semester system and of continuous and comprehensive evaluation in the board classes.
  </p>
  <p>
    For a family in Faridabad, the useful part of the website is the Academic Cell. Each session it posts a
    "Question Papers Design &amp; Syllabus" page for Classes 11 and 12, a set of model papers with stepwise marking
    schemes for Classes 9, 10, 11 and 12, practice papers, booklets of competency-based questions and a guide on the
    new style of assessment written for students and parents. A tutor who knows this page and prints from it, rather
    than from guidebooks of uncertain date, is already working the way the board expects. Results, re-checking
    forms and date sheets are on the same site; the board's FAQ says students have 30 days from the result to apply
    for re-checking of an answer book.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbf-ten">How are the Class 10 (Secondary) papers built?</h2>
  <p>
    The model papers for the 2026-27 session show a consistent pattern across the main subjects: a three-hour paper,
    a printed count of pages and questions that the candidate must check before starting, and a mix of one-mark
    objective items and longer written answers.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 10 model papers on bseh.org.in, 2026-27 session</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Paper</th><th scope="col">How the marks are laid out</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics (Standard or Basic)</td><td>3 hours, 80 marks, 38 questions</td><td>Section A: 20 one-mark items (multiple choice, one-word, fill in the blank, true or false, and two assertion-reason questions). B: five 2-mark. C: six 3-mark. D: four 5-mark. E: three 4-mark case studies</td></tr>
      <tr><td>Science</td><td>Sample paper of 41 questions</td><td>Objective items, assertion-reason questions and written answers across physics, chemistry and biology chapters; instructions printed in Hindi and English</td></tr>
      <tr><td>English</td><td>3 hours, 80 marks</td><td>Reading 20, Grammar 10, Writing 10 and Literature 40</td></tr>
      <tr><td>Hindi, Social Science, Sanskrit, Punjabi, Urdu</td><td>Model paper and marking scheme on the board's site</td><td>Check the current file for the layout of each</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Two levels of maths appear on the list, Mathematics Standard and Mathematics Basic, each with its own model paper
    and marking scheme. Both share the five-section shape above, so the difference is in the questions, not the
    format. Ask the school which one your child is entered for before a tutor starts, because the practice material
    is different. Our <a href="{{ url('/maths-home-tutor-faridabad') }}">maths home tutors in Faridabad</a> and
    <a href="{{ url('/science-home-tutor-faridabad') }}">science home tutors in Faridabad</a> pages go deeper into
    the subjects themselves.
  </p>
  <p>
    The phrase "stepwise marking scheme" matters more than it looks. The board publishes how marks are split between
    the steps of an answer, so a student who writes only the final line of a 5-mark sum gives away most of it. A good
    HBSE tutor marks every homework answer against those step marks, not just right or wrong.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbf-medium">Hindi medium, English medium and the two compulsory languages</h2>
  <p>
    The board's Class 12 model papers for maths, physics and chemistry are headed "Hindi and English Medium", and the
    Class 10 maths and science papers print their instructions in both languages. Hindi and English are also the two
    compulsory languages the board refers to in its FAQ. For tuition this has three consequences:
  </p>
  <ul>
    <li><strong>Technical words.</strong> A Hindi-medium student writes science and maths answers with the Hindi terms used in class. The tutor can explain in either language, but written practice should use the words the examiner expects.</li>
    <li><strong>Switching medium.</strong> Students who move from a Hindi-medium school to an English-medium one in Class 9 or 11 often understand the idea but cannot write it fluently. A bilingual tutor for the first term eases that move.</li>
    <li><strong>The language papers themselves.</strong> English carries 40 marks for literature alone in Class 10. If the language papers are the weak spot, our <a href="{{ url('/english-home-tutor-faridabad') }}">English home tutors in Faridabad</a> page covers what to look for.</li>
  </ul>
  <p>
    When you ask us for a tutor, say which medium your child writes the paper in. It changes the shortlist more than
    any other single detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbf-streams">Which streams and subjects open up in Classes 11 and 12?</h2>
  <p>
    The board's Senior Secondary syllabus list for the current session is long. Grouped the way schools usually offer
    them, it looks like this:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Senior Secondary subjects on the board's syllabus page, grouped by stream</caption>
    <thead>
      <tr><th scope="col">Stream</th><th scope="col">Core subjects families ask tutors for</th><th scope="col">Other subjects on the list</th></tr>
    </thead>
    <tbody>
      <tr><td>Science</td><td>Physics, Chemistry, Mathematics, Biology</td><td>Biotechnology, Computer Science, Physical Education</td></tr>
      <tr><td>Commerce</td><td>Accountancy, Business Study, Economics</td><td>Entrepreneurship, Mathematics, Computer Science</td></tr>
      <tr><td>Arts / Humanities</td><td>History, Political Science, Geography, Economics, Psychology, Sociology</td><td>Philosophy, Public Administration, Defence Studies, Home Science, Fine Arts, music and dance subjects</td></tr>
      <tr><td>Languages</td><td>Hindi (Core or Elective), English (Core, Elective or Special)</td><td>Sanskrit, Punjabi, Urdu</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The board's FAQ adds two rules worth knowing. Computer Science can be taken as an elective in any Senior Secondary
    stream. And a student who failed one subject in the Class 10 exam can still take Science or Commerce in Class 11,
    provided that subject is cleared within the next two chances. Skill subjects under the NSQF scheme also have their
    own syllabus and model papers for Classes 9 to 12. For help choosing, read our guide to
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">choosing a Class 11 stream</a>; it was written for
    Gurugram but the decision is the same in Faridabad.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbf-twelve">What do the Class 12 (Senior Secondary) papers look like?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Selected Class 12 model papers, 2026-27</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Time and marks</th><th scope="col">Structure</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics</td><td>3 hours, 80 marks</td><td>38 questions in five sections: 20 one-mark items (12 MCQ, 3 one-word, 3 fill-in, 2 assertion-reason), five 2-mark, six 3-mark including one HOTS or competency question, four 5-mark and three 4-mark case-based questions; graph paper is attached to the answer book</td></tr>
      <tr><td>Physics</td><td>3 hours, 70 marks</td><td>35 questions: 18 objective, seven 2-mark, five 3-mark, two 4-mark case studies and three 5-mark long answers</td></tr>
      <tr><td>Chemistry</td><td>3 hours, 70 marks</td><td>35 questions in the same five-section shape as physics, with internal choice in parts of Sections B to E</td></tr>
      <tr><td>Accountancy</td><td>3 hours, 60 marks</td><td>30 questions; Part A for everyone, then Part B as either Analysis of Financial Statements or Computerised Accounting</td></tr>
      <tr><td>Economics</td><td>3 hours, 80 marks</td><td>Part A microeconomics and Part B macroeconomics</td></tr>
      <tr><td>Business Studies</td><td>3 hours, 80 marks</td><td>35 questions, with suggested lengths: about 50 to 75 words for 3 marks, 150 for 4 and 200 for 6</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Physics and chemistry are 70-mark theory papers and accountancy a 60-mark one, so ask the school how practical,
    project or internal marks are added in the current session; the syllabus file for each subject on the board's
    site sets it out. The word guidance in business studies is a gift for a tutor: it tells the student exactly how
    long a 4-mark answer should be, and the tutor should time and count it in practice.
  </p>
  <p>
    Subject help in Faridabad: <a href="{{ url('/physics-home-tutor-faridabad') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-faridabad') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-faridabad') }}">biology</a>,
    <a href="{{ url('/accountancy-home-tutor-faridabad') }}">accountancy</a> and
    <a href="{{ url('/economics-home-tutor-faridabad') }}">economics</a>, and for the whole commerce stream, our
    <a href="{{ url('/commerce-home-tutor-faridabad') }}">commerce home tutors in Faridabad</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbf-competency">What are the board's competency-based questions?</h2>
  <p>
    The board has published a handbook for students and parents on its move towards competency-based assessment, tied
    to the National Education Policy 2020. Its message is simple: alongside the familiar questions, papers will carry
    items that test whether a student understands an idea well enough to use it in a real-life or unfamiliar setting.
    The handbook is clear that these questions add to the existing kinds rather than replace them all. The Class 12
    maths model paper already marks one 3-mark question as HOTS or competency based, and the case-study sections in
    maths and science work the same way.
  </p>
  <p>
    What this means for tuition: a student who has learnt the textbook's solved examples by heart will meet questions
    that look unfamiliar. A tutor should spend part of each week on the board's competency-based item booklets and on
    case-study questions, asking "why does this work?" rather than "what is the formula?".
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbf-cbse">How does HBSE tuition differ from CBSE tuition?</h2>
  <p>
    Many Faridabad families compare an HBSE school with a CBSE one, or move between them at Class 9 or Class 11. The
    differences that change a tutor's work are practical ones:
  </p>
  <ul>
    <li><strong>Practice material.</strong> HBSE students should practise from the board's own model papers, marking schemes and competency booklets. CBSE sample papers are useful extra practice but are not the paper your child will sit.</li>
    <li><strong>Medium.</strong> HBSE papers are set for Hindi-medium and English-medium candidates; a CBSE tutor who teaches only in English may not suit a Hindi-medium student.</li>
    <li><strong>Second chances.</strong> The board's date-sheet page lists separate sittings for re-appear, compartment and improvement candidates, so a weak result in one subject has a defined route back. Read the current notice on bseh.org.in for eligibility.</li>
    <li><strong>Open schooling.</strong> Haryana Open School, run by the same board, is another route for students who leave regular school; the board's FAQ says its certificates are treated at par with the regular ones.</li>
  </ul>
  <p>
    Other boards in Faridabad have their own pages: <a href="{{ url('/cbse-home-tutor-faridabad') }}">CBSE</a>,
    <a href="{{ url('/icse-home-tutor-faridabad') }}">ICSE and ISC</a>, <a href="{{ url('/ib-tutor-faridabad') }}">IB</a>
    and <a href="{{ url('/igcse-tutor-faridabad') }}">IGCSE</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbf-plan">A tutor's plan from Class 9 to Class 12</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How HBSE tuition is usually paced</caption>
    <thead>
      <tr><th scope="col">Year</th><th scope="col">Where the tutor puts the time</th><th scope="col">Usual rhythm</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 9</td><td>Maths and science foundations; written answers in the medium of the paper; the Class 9 model paper to set the format early</td><td>Two sessions a week</td></tr>
      <tr><td>Class 10</td><td>Standard or Basic maths practised to the five-section layout; science assertion-reason and case items; English literature; timed three-hour papers from the model set</td><td>Two or three a week</td></tr>
      <tr><td>Class 11</td><td>The new stream subjects from the first month: physics and maths, or accountancy and economics; school unit tests</td><td>One per subject, sometimes two</td></tr>
      <tr><td>Class 12</td><td>Full model papers with stepwise marking, practical work as the school sets it, competency questions, and for science students a plan that also fits JEE or NEET</td><td>Two per core subject before the exam</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Science students with an entrance exam in view can read our <a href="{{ url('/jee-home-tutor-faridabad') }}">JEE
    home tutors in Faridabad</a> and <a href="{{ url('/neet-home-tutor-faridabad') }}">NEET home tutors in
    Faridabad</a> pages, which explain how board and entrance preparation share the week.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbf-reach">How Haryana board tutors reach each part of Faridabad</h2>
  <p>
    A tutor who teaches HBSE in your child's medium has to be able to make the journey every week, so we match on
    distance first. Notes from our Faridabad zone guides:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/faridabad/zone/nit-old-faridabad') }}">NIT and Old Faridabad</a>:</strong> in {!! $hbfA('dabua-colony', 'Dabua Colony') !!}, lanes look alike on a first visit, so send the block and a landmark such as the sabzi mandi; Neelam Chowk Ajronda is a nearer metro stop, with an auto after it.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/central-sectors-mathura-road') }}">Central sectors on Mathura Road</a>:</strong> much of {!! $hbfA('sector-10', 'Sector 10') !!} is the Housing Board Colony in lettered blocks and pockets, so give both with the house number; {!! $hbfA('sector-7', 'Sector 7') !!} is a plotted sector served by Sihi and Escorts Mujesar stations.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/sectors-28-31-37') }}">Sectors 28 to 31 and 37</a>:</strong> part of {!! $hbfA('sector-30', 'Sector 30') !!} is the Police Lines, with flats and floors around it; the Sector 28 and Mewla Maharajpur stops are closest, and late-afternoon slots avoid the office-hour roads.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/ballabhgarh-southern-sectors') }}">Ballabhgarh and the southern sectors</a>:</strong> {!! $hbfA('adarsh-nagar-ballabhgarh', 'Adarsh Nagar') !!} is old-town Ballabhgarh, where a tutor on a two-wheeler manages the lanes better than one in a car; {!! $hbfA('sector-56', 'Sector 56') !!} on the Ballabhgarh–Sohna Road is mostly plotted, with the Raja Nahar Singh metro station as the usual link.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/surajkund-sainik-colony') }}">Surajkund and Sainik Colony</a>:</strong> no metro climbs towards the hills, so agree the last leg, auto or two-wheeler, before the first class.</li>
    <li><strong>Greater Faridabad, <a href="{{ url('/city/faridabad/zone/greater-faridabad-sectors-75-80') }}">Sectors 75 to 80</a> and <a href="{{ url('/city/faridabad/zone/greater-faridabad-sectors-81-89') }}">81 to 89</a>:</strong> the Violet Line stays on the old-city side of the Agra canal, and almost every home is in a society, so register the tutor at the gate.</li>
  </ul>
  <p>
    Our area guides go further: <a href="{{ url('/blog/nit-and-central-faridabad-tuition-guide') }}">NIT and
    central Faridabad</a>, <a href="{{ url('/blog/ballabhgarh-and-surajkund-tuition-guide') }}">Ballabhgarh and
    Surajkund</a> and <a href="{{ url('/blog/greater-faridabad-neharpar-tuition-guide') }}">Greater Faridabad
    (Neharpar)</a>. Every sector is listed on the <a href="{{ url('/city/faridabad') }}">Faridabad home tutors</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbf-mode">Should HBSE lessons be at home or online?</h2>
  <p>
    For Class 9 and 10 maths and science, a tutor at the table can watch each step being written and correct it
    against the stepwise scheme as it happens, which is the habit these papers reward. For Hindi-medium students, an
    explanation across the table in the same language also tends to land faster. In Classes 11 and 12, when school,
    practicals and perhaps entrance coaching fill the week, one home session plus one shorter online session is often
    easier to keep, and online is the natural fallback when the canal crossings or Mathura Road are jammed. Our
    comparison of <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring</a> covers the
    trade-offs in general.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbf-demo">What to ask at a Haryana board demo</h2>
  <ol>
    <li><strong>Which HBSE papers have you taught recently?</strong> Class 10 Standard or Basic maths, Class 12 science or commerce: they are different jobs.</li>
    <li><strong>Can you teach and correct in my child's medium?</strong> Ask to see one answer written with the textbook's Hindi or English terms.</li>
    <li><strong>Mark one answer for me.</strong> Give the tutor a school test; a good one marks it step by step, as the board's marking scheme does.</li>
    <li><strong>Show me a competency or case-study question.</strong> The tutor should teach it from the board's own booklet, not only from a guide.</li>
    <li><strong>How will practical and project work be handled?</strong> Guided, never written for the student.</li>
    <li><strong>What is your route?</strong> Which station or road, and what happens on a day the canal crossing is blocked?</li>
  </ol>
  <p>
    We send two or three matched tutors and show each fee before the demo; the first class is free, and switching
    tutor later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>
    before their profile is marked Verified. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class
    checklist</a> has more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hbf-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their
    own fee and you see it on the profile. Read the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-faridabad') }}">home tuition fees in Faridabad</a> for what moves the figure.
  </p>
  <p>
    Tell us the class, the stream, the medium, the subjects, your sector or colony and the slots that suit you, and
    book the <a href="{{ url('/demo-class') }}">free demo class</a>. You can also browse
    <a href="{{ url('/tutors') }}">tutor profiles</a> first. If you teach Haryana board subjects yourself, see
    <a href="{{ url('/tuition-jobs/faridabad') }}">tuition jobs in Faridabad</a>.
  </p>
  </section>

  </div>
</article>
