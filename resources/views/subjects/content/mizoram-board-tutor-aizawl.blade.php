{{--
  Board hub: "Mizoram Board tutor Aizawl" (Mizoram Board of School Education,
  MBSE, Aizawl: HSLC at the end of Class 10, HSSLC at the end of Class 12).
  Author: nxtutors (NXTutors Academic Team). Page writer (capitals wave 2,
  subjects), 3 Oct 2026. No school, college, university, hospital, stadium,
  coaching, society or people's names (board office-holders are not named).
  No results, pass rates, candidate or school counts.

  Official sources (all on mbse.edu.in; read 3 Oct 2026):
  - https://www.mbse.edu.in/ : menus for syllabus, question design and scheme
    of examination, textbook lists, affiliated schools by district,
    examination routines, previous years' question papers (HSLC, HSSLC),
    notifications; online portal www.mbseonline.com.
  - https://www.mbse.edu.in/aboutus/ : Chairman (whole-time officer) and
    Secretary; three branches (General, Academic, Examination); a Regional
    Office set up in December 2007 for the three southern districts,
    Lunglei, Lawngtlai and Saiha.
  - http://www.mbse.edu.in/mbseadmin/pdf/HSLC%20Scheme%202019.pdf (linked from
    /question-design-and-scheme-of-examination-secondary-schools/): HSLC
    scheme w.e.f. 2019. Class IX promotional exam conducted by schools; the
    Board conducts the external exam at the end of Class X. Work Experience,
    Art Education and Physical and Health Education graded by schools on a
    five-point scale (A-E). Internal assessment up to 20 marks per
    non-graded subject. Papers: Language I and II 80 each, Mathematics 80,
    Science 70 + 10 practical, Social Science 80, one additional subject
    (Commercial Studies, Home Science, Introductory Information Technology,
    Civics and Economics, IT/ITeS, Healthcare). Pass: 33% in each theory and
    practical paper and in the aggregate; separate pass in internal and
    external assessment. Divisions: Distinction 75%+, First 60-75, Second
    50-60, Third 33-50; "Letter" for 80%+ in a subject; compartmental exam
    for a candidate failing one of the five external subjects. Languages in
    lieu of Mizo include Hindi, Bengali, Manipuri, Nepali and Alternative
    English. Social Science Class X design covers History 24, Geography 27 (map work
    5), Political Science 12, Economics 12 and Disaster Management 5.
  - https://www.mbse.edu.in/wp-content/uploads/2024/08/HSS-Scheme-of-Examination-Question-Design-wef-2025.pdf :
    notice of 31 May 2024: HSSLC 2025 onwards. Language I (English or Hindi)
    and Language II, three electives, an optional additional elective, each
    80 marks with 26 to pass; subjects with practicals 70 + 10; General
    Studies, Work Experience and Physical and Health Education assessed
    internally; pass rules and divisions as for HSLC (with at least a D grade
    in internally assessed subjects). Electives listed include English, Mizo,
    Political Science, History, Sociology, Education, Psychology, Computer
    Science, Home Science, Geography, Economics, Public Administration,
    Mathematics, Physics, Chemistry, Biology, Geology, Business Studies,
    Accountancy, Business Mathematics, Hindi, Bengali, Nepali.
  - https://www.mbse.edu.in/wp-content/uploads/2026/10/HSSLC-2027-EXAM-NOTICE-FORMS.pdf :
    HSSLC (Arts, Science and Commerce) 2027 during February/March 2027,
    dates to be notified; applications online at www.mbseonline.com from
    5 October 2026; forms in Aizawl District at the MBSE Office, Chaltlang.
  - https://www.mbse.edu.in/wp-content/uploads/2026/09/IES-1st-Submission-HS-NOTICE-2026.pdf
    and IES-1st-Submission-HSS-Notice-2026.pdf : schools submit internal
    evaluation (IES) marks online; first submission for high schools covers
    CT1, CT2 and 1st Term marks.
  - https://www.mbse.edu.in/wp-content/uploads/2025/12/HS-Textbook-List-2026-2027.pdf
    and https://www.mbse.edu.in/wp-content/uploads/2025/12/HSS-Textbook-List-2026-2027-1.pdf :
    prescribed books for 2026-27 (bilingual maths and science textbooks for
    Classes 9-10; NCERT titles among the Class 11-12 lists).
  - https://www.mbse.edu.in/mbseadmin/pdf/HS-Curriculum.pdf : medium of
    instruction in general English (section 14.5).
  - https://www.mbse.edu.in/wp-content/uploads/2026/02/Standardized-Assessment-Framework-And-Competency-Based-Question-Bank-2025.pdf :
    Class 10 competency-based item bank, notice of 10 November 2025: 357
    questions in English, Mizo, Science, Mathematics and Social Science,
    with marking schemes.
  - https://www.mbse.edu.in/previous-years-question-papers-hslc/ and
    https://www.mbse.edu.in/previous-years-question-papers-hsslc/ : HSLC
    2021-2025; HSSLC Arts, Science and Commerce 2021-2025.
  Local facts only from database/seo-content/areas/aizawl-research.json.
  Only the allowed fee sentence. Weather is timing advice only.

  Area links render only when that Aizawl area page exists and is active.
--}}
@php
  $azAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $azA = function (string $slug, string $label) use ($azAreaSlugs) {
      return in_array($slug, $azAreaSlugs, true)
          ? '<a href="' . e(url('/city/aizawl/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide azmb-guide" aria-labelledby="azmbGuideTitle">
  <h2 id="azmbGuideTitle">Mizoram Board (MBSE) tutors in Aizawl: HSLC in Class 10, HSSLC in Class 12</h2>

  <p class="nx-guide__lede">
    The Mizoram Board of School Education, based in Aizawl, sets the High School Leaving Certificate (HSLC) papers
    at the end of Class 10 and the Higher Secondary School Leaving Certificate (HSSLC) papers at the end of Class 12.
    It also publishes most of what a tutor needs: question designs that state the marks for every topic, textbook
    lists, past papers and a Class 10 item bank. A good MBSE tutor works from those documents rather than a guide
    written for another board, and keeps an eye on the internal marks schools collect through the year. Tell us the
    class and subjects, and we put forward two or three such tutors in Aizawl, with fees visible before you choose and
    a free first lesson.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#azmb-board">The board</a> ·
    <a href="#azmb-hslc">HSLC</a> ·
    <a href="#azmb-internal">Internal marks</a> ·
    <a href="#azmb-hsslc">HSSLC</a> ·
    <a href="#azmb-files">Free material</a> ·
    <a href="#azmb-cbse">MBSE and CBSE</a> ·
    <a href="#azmb-years">Year by year</a> ·
    <a href="#azmb-places">Localities</a> ·
    <a href="#azmb-demo">Demo questions</a> ·
    <a href="#azmb-fees">Cost and request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="azmb-board">The Mizoram board in brief</h2>
  <p>
    According to its website, mbse.edu.in, the board is led by a whole-time Chairman and run day to day by a
    Secretary, with three branches: General, Academic and Examination. A regional office, opened in December 2007,
    serves the three southern districts of Lunglei, Lawngtlai and Saiha. The board prescribes syllabi and textbooks,
    affiliates high schools and higher secondary schools district by district, and conducts the HSLC and HSSLC
    examinations, with applications and schools' internal marks handled through its online portal. In Aizawl
    District, printed application forms for the HSSLC are issued from the MBSE office at Chaltlang. Routines, results
    and notices are the board's to publish, so rely on its website for them; what follows simply summarises the
    board's own published documents.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azmb-hslc">HSLC: what a Class 10 student writes</h2>
  <p>
    Under the scheme the board publishes, Class 9 promotion exams are set by the schools, and the board examines at
    the end of Class 10. Five subjects go to the external examination, and three more are graded by the school.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>MBSE HSLC subjects and paper shapes, from the board's scheme of examinations</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Board paper</th><th scope="col">What a tutor should drill</th></tr>
    </thead>
    <tbody>
      <tr><td>Language I and Language II (Mizo and English; Hindi, Bengali, Manipuri, Nepali or Alternative English may replace Mizo)</td><td>80 marks each, three hours</td><td>For English: the set texts, a 50-word and a 150–200 word composition, and grammar items</td></tr>
      <tr><td>Mathematics</td><td>80 marks, three hours, 44 questions</td><td>Algebra (18) and geometry (15) first; the short Sets topic not forgotten</td></tr>
      <tr><td>Science</td><td>70-mark theory paper in physics, chemistry and biology sections, plus a 10-mark school practical</td><td>Diagrams, equations and the practical record</td></tr>
      <tr><td>Social Science</td><td>80 marks, three hours, across history, geography, political science, economics and disaster management, with 5 marks of map work</td><td>Map work and answers to length</td></tr>
      <tr><td>One additional subject</td><td>For example commercial studies, home science, information technology, or civics and economics</td><td>As the school offers</td></tr>
      <tr><td>Work experience, art education, physical and health education</td><td>Graded A to E by the school</td><td>Regular participation</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    To pass, a student needs at least 33% in each theory paper, in each practical, and in the aggregate, and must
    pass the internal and external parts of a subject separately. Divisions run from Third (33%) through Second (50%)
    and First (60%) to Distinction (75%), and 80% or more in a subject earns a "Letter". A candidate who fails one of
    the five external subjects may take a compartmental exam in it, subject to the board's conditions. Subject detail
    is on our Aizawl pages for <a href="{{ url('/maths-home-tutor-aizawl') }}">maths</a>,
    <a href="{{ url('/science-home-tutor-aizawl') }}">science</a> and
    <a href="{{ url('/english-home-tutor-aizawl') }}">English</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azmb-internal">Internal marks count from the first class test</h2>
  <p>
    Every non-graded HSLC subject carries up to 20 internal-assessment marks based on the student's record through
    the year, and they must be passed in their own right. The board's notices show how this works in practice:
    schools enter internal evaluation marks on the board's portal, and for high schools the first submission covers
    two class tests and the first-term examination. In other words, a careless class test in the first term is not a
    practice run; it is part of the record. A tutor who starts in the first term can make those tests count, which is
    one reason we suggest beginning well before the board season.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azmb-hsslc">HSSLC: streams, electives and practical marks</h2>
  <p>
    The HSSLC is offered in Arts, Science and Commerce. The board's scheme, in force for the 2025 examinations
    onwards, asks each candidate for a first language (English or Hindi), a second language or an elective in its
    place, and three electives, with an optional additional elective; each paper is worth 80 marks and needs 26 to
    pass. Subjects with practical work split 70 for theory and 10 for the practical. General studies, work experience
    and physical and health education are assessed by the school. The board has announced that the 2027 HSSLC
    examinations will be held in February and March 2027, with exact dates to follow on its website.
  </p>
  <ul>
    <li><strong>Science:</strong> physics, chemistry, biology, mathematics and geology are among the electives. Our <a href="{{ url('/physics-home-tutor-aizawl') }}">physics</a> and <a href="{{ url('/chemistry-home-tutor-aizawl') }}">chemistry</a> pages set out their unit marks and practicals.</li>
    <li><strong>Commerce:</strong> accountancy, business studies, business mathematics and economics.</li>
    <li><strong>Arts:</strong> history, geography, political science, sociology, psychology, education, public administration and others, with languages including English, Mizo, Hindi, Bengali and Nepali.</li>
  </ul>
  <p>
    Schools decide which subject combinations they offer, so check with yours. Our article on
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a> helps with the decision.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azmb-files">Free material on the board's website</h2>
  <dl>
    <dt><strong>Question design and scheme of examinations</strong></dt>
    <dd>For HSLC and HSSLC: marks by unit, numbers of questions of each size, internal choices and pass rules. It is the single most useful document for planning a year.</dd>
    <dt><strong>Syllabus and textbook lists</strong></dt>
    <dd>The higher secondary syllabus and the 2026-27 textbook lists for Classes 9–10 and 11–12. The maths and science textbooks for Classes 9 and 10 are bilingual, while the board's curriculum gives English as the general medium of instruction.</dd>
    <dt><strong>Previous years' question papers</strong></dt>
    <dd>HSLC papers from 2021 to 2025, and HSSLC papers for Arts, Science and Commerce over the same years.</dd>
    <dt><strong>Class 10 competency-based item bank</strong></dt>
    <dd>Issued in November 2025: 357 questions across English, Mizo, science, mathematics and social science, each written answer with a marking scheme and acceptable alternatives.</dd>
  </dl>
  <p>
    Lessons built on these files, with an eye on the notifications page for any revision, are what an MBSE student
    needs. A guidebook written for some other board is a poor substitute.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azmb-cbse">How MBSE compares with CBSE in practice</h2>
  <ul>
    <li><strong>Class 10 books differ.</strong> MBSE prescribes its own list, including bilingual maths and science textbooks and the Essential English series; CBSE uses NCERT.</li>
    <li><strong>Class 10 papers differ.</strong> HSLC science is a 70-mark theory paper with a 10-mark practical; HSLC maths includes a short Sets topic.</li>
    <li><strong>Class 12 overlaps more.</strong> NCERT titles appear on the board's Class 11–12 lists, and the Class 12 chemistry chapters carry the same marks on both boards.</li>
    <li><strong>Practical weight differs.</strong> HSSLC science practicals are worth 10 marks; CBSE's are worth 30.</li>
  </ul>
  <p>
    If you are weighing the two boards, the <a href="{{ url('/cbse-home-tutor-aizawl') }}">CBSE home tutor in
    Aizawl</a> page sets out the CBSE side.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azmb-years">Year by year: how tuition time should shift from Class 9 to Class 12</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Where an MBSE student's tuition hours earn most, class by class</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Priority for the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 9</td><td>Repair weak maths and science before the school's own promotion exam, and practise answers of the right length</td></tr>
      <tr><td>Class 10 (HSLC)</td><td>Treat every class test and term exam as internal marks; time past HSLC papers and item-bank questions; keep the science record current</td></tr>
      <tr><td>Class 11</td><td>Settle the new stream subjects early: physics, chemistry and maths for science, accountancy for commerce</td></tr>
      <tr><td>Class 12 (HSSLC)</td><td>Revise in proportion to the unit marks in the question design, rehearse the practical viva, and fit any entrance work around the board</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azmb-places">How MBSE tutors reach six Aizawl localities</h2>
  <p>
    Aizawl's homes are mostly multi-storey buildings on steep slopes, often entered from the road with stairs up or
    down to the flat, and heavy rain slows every trip between April and October. Six localities illustrate what to
    arrange; the full list of areas is on our <a href="{{ url('/city/aizawl') }}">Aizawl page</a>.
  </p>
  <ul>
    <li><strong>{!! $azA('chaltlang', 'Chaltlang') !!}</strong> (Durtlang, Chaltlang and Bawngkawn): home to the academic wing of the state Directorate of School Education and to the MBSE office where HSSLC forms are issued. Tutors from Bawngkawn, Durtlang and Ramhlun are close; give the floor and a landmark.</li>
    <li><strong>{!! $azA('zemabawk', 'Zemabawk') !!}</strong> (same zone): residential lanes beside rental housing blocks and institutional land. Give the block name; larger buildings may note visitors.</li>
    <li><strong>{!! $azA('zarkawt', 'Zarkawt') !!}</strong> (Chanmari, Zarkawt and Dawrpui): the site of the first high school in the Mizo hills, opened in 1944, and of education offices on McDonald Hill. Central roads crowd at office hours, so time the lesson around them.</li>
    <li><strong>{!! $azA('luangmual', 'Luangmual') !!}</strong> (Tuikual, Vaivakawn and Luangmual): a residential locality whose ward stretches to the outer localities. Tutors in Chawnpui, Zonuam, Vaivakawn or Tanhril are the practical match; agree where the tutor parks.</li>
    <li><strong>{!! $azA('khatla', 'Khatla') !!}</strong> (Khatla, Mission Veng and Kulikawn): one cluster with Bungkawn, Maubawk and Lawipu, so a tutor from within it can keep a regular weekday time.</li>
    <li><strong>{!! $azA('kulikawn', 'Kulikawn') !!}</strong> (same zone): steep slopes and valleys between localities; the likeliest tutors live in Tlangnuam, Saikhamakawn or Thakthing. Say which entrance and floor to use.</li>
  </ul>
  <p>
    Zone pages with more timing advice:
    <a href="{{ url('/city/aizawl/zone/durtlang-chaltlang-bawngkawn') }}">Durtlang, Chaltlang and Bawngkawn</a>,
    <a href="{{ url('/city/aizawl/zone/chanmari-zarkawt-dawrpui') }}">Chanmari, Zarkawt and Dawrpui</a>,
    <a href="{{ url('/city/aizawl/zone/tuikual-vaivakawn-luangmual') }}">Tuikual, Vaivakawn and Luangmual</a> and
    <a href="{{ url('/city/aizawl/zone/khatla-mission-veng-kulikawn') }}">Khatla, Mission Veng and Kulikawn</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azmb-mode">At home, on screen, or a mix?</h2>
  <p>
    In Classes 9 and 10 a tutor at the table normally helps more, above all in maths and science, where the working
    has to be seen. A screen lesson is a dependable fallback on the wettest evenings, and a genuine choice for Class
    12 electives where a specialist may not live nearby, such as geology or business mathematics. A weekly visit
    plus an online session is a common pattern; the <a href="{{ url('/online-tutor-aizawl') }}">online tutor for
    Aizawl</a> page covers the equipment and routine.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azmb-demo">What to ask an MBSE tutor at the demo</h2>
  <ul>
    <li>Which book on the board's prescribed list do you teach this subject from?</li>
    <li>Show me how you plan a term from the question design and the past HSLC or HSSLC papers.</li>
    <li>What will you do about class tests and term exams, since they feed the internal marks?</li>
    <li>How often will you look over the practical record?</li>
    <li>Can you hold one fixed weekly time from April to October, switching online on the worst days?</li>
  </ul>
  <p>
    Unhappy with the answers? The next tutor on your shortlist gives a demo instead, and a later change costs
    nothing. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has further
    pointers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azmb-fees">Cost, and how to request tutors</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors fix their own
    fees, and you see each one on the shortlist ahead of the demo; the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and the
    <a href="{{ url('/blog/home-tuition-fees-aizawl') }}">Aizawl home tuition fees</a> article give the detail.
  </p>
  <p>
    Tell us the class and subjects, the building, floor and nearest landmark, and the hours you can offer. Two or
    three suitable tutors come back, and you choose one for a <a href="{{ url('/demo-class') }}">free demo class</a>.
    Every tutor who joins passes an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. To look around first,
    <a href="{{ url('/tutors') }}">browse tutor profiles</a> or open the
    <a href="{{ url('/blog/aizawl-home-tuition-guide') }}">Aizawl home tuition guide</a>. Teachers familiar with the
    MBSE syllabus can find students through <a href="{{ url('/tuition-jobs/aizawl') }}">Aizawl tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
