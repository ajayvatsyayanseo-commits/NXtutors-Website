{{--
  State-board hub: "JKBOSE tutor Srinagar" (Jammu and Kashmir Board of School
  Education: Class 10, Class 11 and Class 12 public examinations).
  Author: nxtutors (NXTutors Academic Team). No school, college, coaching,
  hospital, society or people names. No exam dates, results or candidate or
  school counts. Purely educational and practical; winter appears only as
  timing advice.

  Official source: the board's website. The board's live site and its own results
  links are on jkbose.jk.gov.in (NIC J&K). Pages read 3 Oct 2026:
  - https://jkbose.jk.gov.in/introduction.html : set up under the Jammu and
    Kashmir State Board of School Education Act, 1975; functions: conduct
    public examinations of secondary and higher secondary classes, publish
    results, prescribe courses, syllabi, curriculum and textbooks, print and
    supply textbooks, run the State Open School (ODL), grant affiliation to
    private secondary and higher secondary schools, run NTSE/NMMS and
    scholarships. Governing board includes Directors of School Education for
    the Jammu Division and the Kashmir Division.
  - https://jkbose.jk.gov.in/ (home): results, Examination and Date Sheet
    menus split into Jammu Division and Kashmir Division; examination names
    SSE (Class 10), HSP-I / HSE-I (Class 11), HSP-II / Higher Secondary
    (Class 12); notices refer to "SZ" (summer zone) and "Winter Zone"
    sessions; Class 9 registration (RR of 9th class candidate); online
    examination forms for Classes 10, 11 and 12; re-evaluation and photocopy
    of answer scripts for Classes 10, 11 and 12; JKSOS (open school).
  - https://jkbose.jk.gov.in/Examination.html and /DateSheets.html: separate
    Jammu Division and Kashmir Division lists for Classes 10, 11 and 12.
  - https://jkbose.jk.gov.in/RecentInitiatives.html : academic division
    addresses Rehari Colony, Jammu and Bemina Bye Pass, Srinagar; CDR wing has
    a division office at Srinagar and at Jammu; Class IX-XII syllabi revised
    in the light of NCF-2005; subjects such as Biotechnology, Information
    Practices, Computer Science, Bio-Chemistry, Functional English, Applied
    Mathematics, Entrepreneurship, Public Administration added at +2.
  - https://jkbose.jk.gov.in/syllabus.html : syllabus for Classes 9-12.
  - https://jkbose.jk.gov.in/TextBooks.html and /textbookclass10.html :
    board textbooks listed for Classes 1-12; Class 10 list includes
    Mathematics Part A and Part B, Science, English, Urdu, Hindi, Kashmiri,
    Dogri, Punjabi, Bhoti, History, Geography, Economics, Democratic Politics.
  - https://jkbose.jk.gov.in/questionbank.html : competency-based item banks
    for Class 9 and 10 (maths, science, English, social science, Hindi, Urdu)
    and chapter-wise Class 10 physics, chemistry and biology question banks.
  - https://jkbose.jk.gov.in/ModelTestPapers.html : model test papers for
    Classes 9-12 (Class 11-12 revised scheme of assessment, session 2024-25;
    Class 9-10 revised scheme from 2023-24); Class 11-12 lists include Botany
    and Zoology as separate papers, Physics, Chemistry, Mathematics, Applied
    Math, Business Math, Accountancy, Business Studies, Economics, Computer
    Science, Information Practices, Biotechnology, Bio Chemistry, Functional
    English, English Literature, Kashmiri, Urdu.
  - pdf/MTP Mathematics 10th.pdf (scanned, read as image): 3 hours, 80 marks,
    40 questions; A Q1-20 one mark; B Q21-26 two marks; C Q27-34 three marks;
    D Q35-40 four marks; no overall choice, internal choice in 2 one-mark, 2
    two-mark, 2 three-mark and 4 four-mark questions.
  - pdf/MTP Science 10th.pdf: 3 hours, 80 marks; A Q1-18 one mark (15 MCQ +
    3 assertion-reason); B Q19-28 two marks; C Q29-37 three marks; D Q38-40
    five marks.
  - pdf/MTP Mathematics 12th.pdf (scanned): 3 hours, 80 marks; A 10 x 1;
    B 10 x 2; C 8 x 4; D Q29-31 six marks each.
  - pdf/MTP Physics 12th.pdf: 3 hours, 70 marks; A 10 x 1; B 9 x 2 (20-30
    words); C 9 x 3 (50-70 words); D 3 x 5 (100-150 words); log tables
    allowed, scientific calculator not allowed.
  Which zone (summer or winter) a Srinagar school's session follows is not
  stated here; families are told to confirm with the school and the Kashmir
  Division lists. Local detail only from
  database/seo-content/areas/srinagar-research.json (areas' about +
  zone_facts). Fee wording is the approved sentence. FAQs render from
  faqs/jkbose-tutor-srinagar.php. Area links render only for active areas.
--}}
@php
  $srkSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $srkA = function (string $slug, string $label) use ($srkSlugs) {
      return in_array($slug, $srkSlugs, true)
          ? '<a href="' . e(url('/city/srinagar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="srkGuideTitle">
  <h2 id="srkGuideTitle">JKBOSE tutors in Srinagar: three board years, one plan</h2>

  <p class="nx-guide__lede">
    Most Srinagar students in state-board schools sit public examinations set by the Jammu and Kashmir Board of School
    Education, usually shortened to JKBOSE. What surprises families arriving from CBSE is that the board examines three
    years, not two: Class 10, then Class 11 as the first part of higher secondary, then Class 12. That changes how a
    home tutor should spread the work. This page explains what the board publishes, how its maths, science and physics
    papers are put together according to its own model papers, which free material on its website a tutor should
    use, and how to time tuition around Srinagar's school year and the long winter break. Everything about papers and
    marks comes from the board's site; read the current version before your child's exam year, because schemes are
    revised.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#srk-board">The board</a> ·
    <a href="#srk-division">Kashmir Division lists</a> ·
    <a href="#srk-years">Three exam years</a> ·
    <a href="#srk-ten">Class 10 papers</a> ·
    <a href="#srk-twelve">Class 12 papers</a> ·
    <a href="#srk-subjects">+2 subjects</a> ·
    <a href="#srk-free">Free material</a> ·
    <a href="#srk-cbse">Versus CBSE</a> ·
    <a href="#srk-plan">Class 9 to 12 plan</a> ·
    <a href="#srk-where">Localities</a> ·
    <a href="#srk-winter">Winter timing</a> ·
    <a href="#srk-demo">The demo</a> ·
    <a href="#srk-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="srk-board">What JKBOSE does, in the board's own words</h2>
  <p>
    The board was created by the Jammu and Kashmir State Board of School Education Act of 1975. Its introduction page
    lists the jobs it holds: conducting the public examinations of the secondary and higher secondary classes and
    publishing their results, prescribing courses, syllabi and curriculum, preparing textbooks and printing them for
    schools, granting affiliation to private secondary and higher secondary schools, and running an open school for
    learners who missed regular schooling. It also handles national schemes such as the NTSE and NMMS tests and
    several scholarships.
  </p>
  <p>
    For a parent, two of those functions matter most. First, the board writes its own textbooks, so the book on your
    child's desk may not be the one a CBSE-trained tutor knows. Second, it sets the papers your child will sit, and it
    publishes model papers that show how they are built. A tutor who has read both is worth far more than one who
    teaches from a generic guidebook. The board's academic division lists a Srinagar office on the Bemina bypass,
    which is useful to know if a school ever sends you there for a document.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srk-division">Why a Srinagar family should read the Kashmir Division lists</h2>
  <p>
    The board's website files examinations, date sheets and results under two headings, Jammu Division and Kashmir
    Division, each with its own Class 10, 11 and 12 entries. Its notices also refer to separate summer-zone and
    winter-zone sessions. The practical rule is simple: Srinagar schools fall in the Kashmir Division, so take dates
    from that list, and ask your child's school which session its examinations follow before you plan revision
    backwards from a date. A tutor who asks you this question at the first meeting is reading the board properly.
  </p>
  <p>
    Never plan around a date sheet forwarded in a group chat. Open the Kashmir Division entry on the board's own site
    and check the class and session printed on it. That one habit protects your child's revision plan from a
    wrong date.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srk-years">Class 10, Class 11 and Class 12: three public examinations</h2>
  <p>
    The board's own examination names show the structure. The Secondary School Examination closes Class 10. Higher
    Secondary Part I is the Class 11 examination, and Higher Secondary Part II is the Class 12 one. Students are
    registered with the board in Class 9, examination forms follow for Classes 10, 11 and 12, and the board offers
    photocopies of marked answer scripts and re-evaluation for all three classes.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How the three JKBOSE examination years change the tutor's job</caption>
    <thead>
      <tr><th scope="col">Year</th><th scope="col">Examination</th><th scope="col">What a tutor should plan for</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 9</td><td>Board registration; school examinations</td><td>Algebra, geometry and science basics built properly, because Class 10 reuses them at speed</td></tr>
      <tr><td>Class 10</td><td>Secondary School Examination</td><td>Full model papers under time, with every section practised, not just long answers</td></tr>
      <tr><td>Class 11</td><td>Higher Secondary Part I, set by the board</td><td>New subjects treated as a board year from the first month, not a gap year before Class 12</td></tr>
      <tr><td>Class 12</td><td>Higher Secondary Part II</td><td>Board papers first; entrance preparation alongside only where the timetable genuinely allows it</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The Class 11 row is the one families most often underestimate. In many boards Class 11 is a school-level year and
    students relax into it. Under JKBOSE it ends in a board examination of its own, so physics, chemistry, maths or
    accountancy started late in Class 11 costs marks twice: once in the Part I paper and again when Class 12 assumes
    that groundwork.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srk-ten">How the Class 10 maths and science model papers are built</h2>
  <p>
    The board's model question papers for Class 10 maths and science are both three-hour papers out of 80 marks, split
    into four sections that rise in marks per question.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 10 model question papers on jkbose.jk.gov.in</caption>
    <thead>
      <tr><th scope="col">Section</th><th scope="col">Mathematics (40 questions)</th><th scope="col">Science (40 questions)</th></tr>
    </thead>
    <tbody>
      <tr><td>A</td><td>Questions 1 to 20, one mark each</td><td>Questions 1 to 18, one mark each: 15 multiple-choice and 3 assertion-reason items</td></tr>
      <tr><td>B</td><td>Questions 21 to 26, two marks each</td><td>Questions 19 to 28, two marks each</td></tr>
      <tr><td>C</td><td>Questions 27 to 34, three marks each</td><td>Questions 29 to 37, three marks each</td></tr>
      <tr><td>D</td><td>Questions 35 to 40, four marks each</td><td>Questions 38 to 40, five marks each</td></tr>
      <tr><td>Choice</td><td>No overall choice; internal choice in two one-mark, two two-mark, two three-mark and four four-mark questions</td><td>As printed in the paper; check the current version</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Three lessons follow for tuition. A quarter of the maths paper sits in twenty one-mark questions, so quick, accurate
    recall of definitions and standard results is worth drilling, not leaving to chance. Assertion-reason items in
    science reward students who can say why a statement is true, which is a different skill from repeating it. And
    the four-mark maths questions carry internal choices, so a student should practise reading both options and
    choosing quickly. Our <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths</a> page and the
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> help with the topics themselves,
    though the paper format to practise is the board's.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srk-twelve">Class 12 maths and physics: what the model papers show</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Two Class 12 model test papers from the board's site</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Paper</th><th scope="col">Sections</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics</td><td>3 hours, 80 marks</td><td>A: ten one-mark questions. B: ten two-mark questions. C: eight four-mark questions. D: three six-mark long answers</td></tr>
      <tr><td>Physics</td><td>3 hours, 70 marks</td><td>A: ten one-mark questions. B: nine two-mark answers of 20 to 30 words. C: nine three-mark answers of 50 to 70 words. D: three five-mark answers of 100 to 150 words. Log tables allowed; a scientific calculator is not</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The physics instructions deserve attention. Word limits mean the board expects compact answers, so a tutor should
    train two-mark and three-mark responses to length, not let a student write a page for every question. The ban on
    scientific calculators means numericals are done with log tables or by hand, which students who practise only on
    phones find slow. Since the theory paper is out of 70, ask the school how the rest of the subject's marks are
    assessed and keep the practical file current. For maths, three six-mark questions decide a large part of the
    grade; calculus and integration practice with full working is where those marks come from.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srk-subjects">Subjects at the +2 stage</h2>
  <p>
    The board's model test papers for Classes 11 and 12 cover a long list of subjects. A few features stand out for
    families choosing tutors.
  </p>
  <ul>
    <li><strong>Biology is two papers.</strong> The list carries Botany and Zoology separately, so a medical-stream student may need help in one more than the other.</li>
    <li><strong>Several maths options.</strong> Mathematics sits beside Applied Mathematics and Business Mathematics. Check which one your child is actually registered for before choosing a tutor.</li>
    <li><strong>Commerce subjects.</strong> Accountancy, Business Studies and Economics have their own papers.</li>
    <li><strong>Newer subjects.</strong> The board's academic division lists additions such as Biotechnology, Bio-Chemistry, Information Practices, Computer Science, Functional English, Entrepreneurship and Public Administration.</li>
    <li><strong>Languages.</strong> English, English Literature, Urdu, Kashmiri, Hindi and other languages appear, each with its own model paper.</li>
  </ul>
  <p>
    For help in a single subject, see the Srinagar <a href="{{ url('/maths-home-tutor-srinagar') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-srinagar') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-srinagar') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-srinagar') }}">biology</a> and
    <a href="{{ url('/english-home-tutor-srinagar') }}">English</a> pages, and the guide to
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srk-free">Free material on the board's website that a tutor should use</h2>
  <p>
    Before any guidebook, a JKBOSE tutor should be working from these, all on jkbose.jk.gov.in:
  </p>
  <ul>
    <li><strong>Textbooks.</strong> Board textbooks are listed class by class from Class 1 to Class 12. For Class 10 the list includes Mathematics in two parts (A and B), Science, English, the social science books and language books such as Urdu, Hindi and Kashmiri.</li>
    <li><strong>Syllabus.</strong> Separate files for Classes 9, 10, 11 and 12.</li>
    <li><strong>Question banks.</strong> Competency-based item banks for Class 9 and Class 10 maths, science, English, social science, Hindi and Urdu, and chapter-wise Class 10 banks for physics, chemistry and biology topics.</li>
    <li><strong>Model test papers.</strong> Class 9 and 10 papers under the revised scheme of assessment, and Class 11 and 12 papers under the revised scheme for session 2024-25.</li>
    <li><strong>Date sheets and results</strong> under the Kashmir Division heading, and the forms for answer-script photocopies and re-evaluation.</li>
  </ul>
  <p>
    A quick test at the first meeting: ask the tutor which part of the Class 10 maths book your child's current chapter
    is in, and whether they have worked through the board's competency-based item bank. Hesitation tells you something.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srk-cbse">How JKBOSE study differs from CBSE in practice</h2>
  <p>
    Some Srinagar families move between a JKBOSE school and a CBSE one, often at Class 11. The board's academic
    division says its Class 9 to 12 syllabi were revised in the light of the National Curriculum Framework of 2005,
    so much of the content will look familiar to a CBSE student. The differences are in the examination and the books:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Points to check when a Srinagar student moves between JKBOSE and CBSE</caption>
    <thead>
      <tr><th scope="col">Point</th><th scope="col">JKBOSE, from the board's site</th><th scope="col">What the tutor does</th></tr>
    </thead>
    <tbody>
      <tr><td>Textbooks</td><td>The board prepares and prints its own</td><td>Teaches from the book the school uses, and maps any NCERT practice onto it</td></tr>
      <tr><td>Class 11</td><td>A board examination, Higher Secondary Part I</td><td>Treats Class 11 as a full exam year</td></tr>
      <tr><td>Calendar</td><td>Separate division lists and session notices</td><td>Plans revision from the Kashmir Division date sheet and the school's session</td></tr>
      <tr><td>Paper format</td><td>As in the board's model papers, with word limits in physics</td><td>Practises the board's format, not another board's sample papers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    If your child is on another board, our <a href="{{ url('/cbse-home-tutor-srinagar') }}">CBSE</a> and
    <a href="{{ url('/icse-home-tutor-srinagar') }}">ICSE and ISC</a> pages for Srinagar cover those papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srk-plan">A tutor's plan from Class 9 to Higher Secondary Part II</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How JKBOSE tuition usually changes from year to year</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Where sessions go</th><th scope="col">Usual rhythm</th></tr>
    </thead>
    <tbody>
      <tr><td>9</td><td>Foundations in algebra and geometry; science definitions and diagrams; the item-bank style of question introduced early</td><td>Two a week</td></tr>
      <tr><td>10</td><td>Board textbook kept up with month by month; one-mark accuracy; full three-hour model papers from the second half of the year</td><td>Two or three a week</td></tr>
      <tr><td>11</td><td>New stream subjects from week one; mechanics, calculus basics and mole concept for science students; ledgers and journal entries for commerce</td><td>One per subject, often two</td></tr>
      <tr><td>12</td><td>Board papers to length and to time; practical file; for some students, JEE or NEET alongside</td><td>Two per core subject before the exams</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Science students aiming at engineering or medicine prepare for the national entrances in parallel; see
    <a href="{{ url('/jee-home-tutor-srinagar') }}">JEE</a> and <a href="{{ url('/neet-home-tutor-srinagar') }}">NEET</a>
    home tutors in Srinagar. The national <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths</a> page
    covers the calculus that dominates the long answers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srk-where">Getting a tutor to your part of Srinagar</h2>
  <p>
    A weekly tutor has to make the same trip all year, so we look first at who can reach your lane without crossing the
    busiest roads at the busiest hours. Some notes from our locality research:
  </p>
  <ul>
    <li><strong>{!! $srkA('buchpora', 'Buchpora') !!}</strong> grew from farmland into newer colonies, so tutors usually reach the door directly; two main roads towards Ganderbal carry through traffic at peak hours, so afternoon slots suit a tutor coming from the centre.</li>
    <li><strong>{!! $srkA('zadibal', 'Zadibal') !!}</strong> and <strong>{!! $srkA('nowshera', 'Nowshera') !!}</strong> have older houses in close lanes, where a tutor often parks on the main road and walks the last stretch; give a landmark the first time.</li>
    <li><strong>{!! $srkA('nowgam', 'Nowgam') !!}</strong> has Srinagar railway station, so a tutor living towards Budgam or Pampore can come by train and take a short ride onward.</li>
    <li><strong>{!! $srkA('bagh-e-mehtab', 'Bagh-e-Mehtab') !!}</strong> sits on the Doodhganga; a small bridge beside the railway bridge gives tutors from the Rawalpora side a shortcut.</li>
    <li><strong>{!! $srkA('barzulla', 'Barzulla') !!}</strong> has a ramp of the Jehangir Chowk to Rambagh flyover, the quick way in from the Lal Chowk side.</li>
  </ul>
  <p>
    The zone pages go further: <a href="{{ url('/city/srinagar/zone/civil-lines') }}">Civil Lines</a>,
    <a href="{{ url('/city/srinagar/zone/karan-nagar-bemina') }}">Karan Nagar and Bemina</a>,
    <a href="{{ url('/city/srinagar/zone/airport-road') }}">Airport Road</a>,
    <a href="{{ url('/city/srinagar/zone/natipora-nowgam') }}">Natipora and Nowgam</a> and
    <a href="{{ url('/city/srinagar/zone/north-city') }}">North City</a>. Every locality is listed on the
    <a href="{{ url('/city/srinagar') }}">Srinagar home tutors page</a>, and our
    <a href="{{ url('/blog/srinagar-home-tuition-guide') }}">Srinagar home tuition guide</a> walks through each zone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srk-winter">Timing tuition around the Srinagar school year and the winter break</h2>
  <p>
    Srinagar's long winter break and the short days of December and January change what a sensible tuition week looks
    like. Families who plan for it keep momentum; those who stop entirely often lose a month of revision.
  </p>
  <ul>
    <li><strong>During term:</strong> after-school slots once the school-time rush on the main roads has passed; evening sessions in localities where the roads stay busy until then.</li>
    <li><strong>In the winter break:</strong> move home sessions earlier in the day while there is daylight, and switch some classes online on the coldest days rather than cancelling them.</li>
    <li><strong>Use the break deliberately:</strong> it is a good time for the next class's hardest chapters, or a full pass through the board's question bank, rather than a pause.</li>
  </ul>
  <p>
    Our <a href="{{ url('/online-tutor-srinagar') }}">online tutors for Srinagar</a> page explains how to set up
    online lessons that work, and the <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a>
    comparison sets out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srk-demo">Questions to ask at a JKBOSE demo</h2>
  <ol>
    <li><strong>Which JKBOSE classes have you taught, and in which subjects?</strong> Class 10 maths and Class 11 physics are different jobs.</li>
    <li><strong>Have you seen this year's model paper for my child's subject?</strong> Ask them to describe its sections.</li>
    <li><strong>How will you prepare for Class 11 as a board year?</strong> Listen for a plan from the first month.</li>
    <li><strong>Which textbook will you teach from?</strong> It should be the board book your child's school uses.</li>
    <li><strong>What happens in the winter break?</strong> Earlier slots, online sessions, or both, agreed in advance.</li>
    <li><strong>How will you reach us each week?</strong> Ask about the route and the time of day.</li>
  </ol>
  <p>
    We send two or three matched tutors and show each fee before the demo; the first class is free and switching tutor
    later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has
    more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srk-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee, and you see it before the demo. The
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our
    <a href="{{ url('/blog/home-tuition-fees-srinagar') }}">home tuition fees in Srinagar</a> guide explain what to
    ask about hours and sessions.
  </p>
  <p>
    Tell us the class, the subjects or stream, your locality with a landmark, and the slots that work in term and in
    the winter break; the first class is a <a href="{{ url('/demo-class') }}">free demo</a>. You can also browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>. Teachers who know the JKBOSE books can see
    <a href="{{ url('/tuition-jobs/srinagar') }}">tuition jobs in Srinagar</a>.
  </p>
  </section>

  </div>
</article>
