{{--
  Long-form guide for the "maths home tutor Aizawl" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Page writer (capitals wave 2, subjects), 3 Oct 2026.
  Local facts come only from database/seo-content/areas/aizawl-research.json
  (zone_facts and area "about" texts, each with sources).
  MBSE facts only from mbse.edu.in (read 3 Oct 2026):
  - https://www.mbse.edu.in/question-design-and-scheme-of-examination-secondary-schools/
    -> http://www.mbse.edu.in/mbseadmin/pdf/HSLC%20Scheme%202019.pdf : Scheme of
    Examinations and Question Design for the HSLC Examination w.e.f. 2019.
    Class X Mathematics: 1 paper, 3 hours, 80 marks; 44 questions (24
    objective x1, 10 short answer I x2, 7 short answer II x3, 3 long answer
    x5); content: Arithmetic 8, Algebra 18, Sets 3, Geometry 15, Coordinate
    Geometry 8, Trigonometry 10, Mensuration 10, Statistics 8; objectives
    knowledge 30%, understanding 30%, application 30%, HOTS 10%; difficulty
    easy 30 / average 50 / difficult 20; internal choice in 2 three-mark
    questions and 1 five-mark question. General: Class IX promotional exam
    conducted by schools; internal assessment up to 20 marks; pass needs 33%
    in each theory paper and in the aggregate, and separate passes in
    internal and external assessment.
  - https://www.mbse.edu.in/wp-content/uploads/2025/12/HS-Textbook-List-2026-2027.pdf :
    Classes IX-X textbooks for 2026-27; Mathematics 10 "Learning Maths",
    a bilingual textbook for Class 10.
  - https://www.mbse.edu.in/wp-content/uploads/2026/02/Standardized-Assessment-Framework-And-Competency-Based-Question-Bank-2025.pdf :
    Class 10 competency-based item bank (notice of 10 Nov 2025); maths
    section has 46 multiple-choice and 49 constructed-response items, with
    marking schemes.
  - https://www.mbse.edu.in/wp-content/uploads/2024/08/HSS-Scheme-of-Examination-Question-Design-wef-2025.pdf :
    HSSLC from 2025. Mathematics Class XI and XII: 3 hours, 80 marks, 32
    questions (16 x1, 4 x2, 8 x4, 4 x6). Class XII units: Relations and
    Functions 8, Algebra 10, Calculus 34, Vectors and 3-D Geometry 14, Linear
    Programming 6, Probability 8. Class XI: Sets and Functions 23, Algebra 25,
    Coordinate Geometry 12, Calculus 8, Statistics and Probability 12.
    Internal choice in three 4-mark and two 6-mark questions.
  - https://www.mbse.edu.in/wp-content/uploads/2025/12/HSS-Textbook-List-2026-2027-1.pdf :
    Class XI and XII maths list includes NCERT Mathematics (Part I and II
    for Class XII).
  - https://www.mbse.edu.in/previous-years-question-papers-hslc/ and
    -hsslc/ : past papers HSLC 2021-2025; HSSLC 2021-2025 by stream.
  CBSE / CISCE / IB / JEE facts reuse the checked statements in
  database/seo-content/blog: cbse-class-10-maths-preparation,
  cbse-class-10-board-year-plan-gurgaon, cbse-class-12-maths-calculusalgebra,
  icse-isc-maths-gurgaon-guide, -ib-math-aaai-slhl and
  jee-preparation-gurgaon-coaching-or-home-tutor. The remark that Sets is not
  among CBSE's Class 10 units compares the two official unit lists.
  No school, college, university, hospital, stadium, coaching institute,
  society or people's names (except the page authors), no distances or
  travel times, only the allowed fee sentence. Weather is timing advice only.

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

<article class="nx-guide azm-guide" aria-labelledby="azmGuideTitle">
  <h2 id="azmGuideTitle">Maths home tutor in Aizawl: begin with the paper, then plan the hillside visit</h2>

  <p class="nx-guide__lede">
    Ask three Aizawl parents which maths their Class 10 child is studying and you may hear three answers. One child
    writes the Mizoram Board of School Education's HSLC paper from a bilingual textbook; a neighbour prepares for
    CBSE from NCERT; a cousin follows ICSE or an international course. Each paper weighs topics differently, so the
    right tutor for one can be the wrong one for another. The city then sets its own practical test: homes stacked
    on steep slopes, stairs from the road, and heavy rain for much of the year. Tell NXTutors the course and your
    locality; we reply with two or three maths tutors who suit both, each fee shown up front, and the first lesson
    with your chosen tutor is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#azm-paper">Which paper</a> ·
    <a href="#azm-hslc">MBSE HSLC maths</a> ·
    <a href="#azm-cbse">CBSE Class 10</a> ·
    <a href="#azm-senior">Senior maths</a> ·
    <a href="#azm-hour">The weekly hour</a> ·
    <a href="#azm-places">Six localities</a> ·
    <a href="#azm-rain">Rainy months</a> ·
    <a href="#azm-demo">The demo</a> ·
    <a href="#azm-fees">Fees</a> ·
    <a href="#azm-start">Starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="azm-paper">Which maths paper will your child sit?</h2>
  <p>
    Two named authors shape the exam guidance here: Ajay Vatsyayan for IB, IGCSE and ISC mathematics, and Abhinandan
    Tiwary for CBSE and ICSE maths in Class 10. The board details for Mizoram are taken straight from
    the documents the board posts on mbse.edu.in. Before we suggest anyone, we ask which body sets the paper,
    because that one answer decides the textbook, the layout of working and the past papers worth the time.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths courses an Aizawl family may need a tutor for, with the official material behind each</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Set by</th><th scope="col">Material to work from</th><th scope="col">Ask the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>HSLC (Class 10), state board</td><td>Mizoram Board of School Education (MBSE)</td><td>The prescribed bilingual maths textbook, the board's question design, past HSLC papers and its Class 10 item bank</td><td>Have you taught the Sets questions and the three five-mark answers?</td></tr>
      <tr><td>HSSLC (Class 12), state board</td><td>MBSE</td><td>NCERT Mathematics Part I and II, which appear on the board's list, plus past HSSLC science papers</td><td>How will the year be split between calculus and everything else?</td></tr>
      <tr><td>CBSE Class 10 and 12</td><td>CBSE</td><td>NCERT textbooks plus the board's sample papers and schemes</td><td>Which sample paper will we start with?</td></tr>
      <tr><td>ICSE and ISC</td><td>CISCE</td><td>School textbooks and CISCE specimen papers</td><td>Have you taught the syllabus for my child's exam year?</td></tr>
      <tr><td>IB Diploma or Cambridge IGCSE</td><td>IBO or Cambridge</td><td>Subject guides and past papers via the school</td><td>Which course or tier have you taught most recently?</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azm-hslc">MBSE HSLC maths: how the 80 marks are built</h2>
  <p>
    The Mizoram Board of School Education conducts the High School Leaving Certificate (HSLC) examination at the end
    of Class 10; Class 9 promotion exams are run by the schools themselves. The question design posted on the
    board's website, in force from 2019, sets one three-hour maths paper of 80 marks with 44 compulsory questions.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>HSLC Class 10 mathematics: marks by topic in the board's question design</caption>
    <thead>
      <tr><th scope="col">Topic</th><th scope="col">Marks</th><th scope="col">What a tutor should watch</th></tr>
    </thead>
    <tbody>
      <tr><td>Algebra</td><td>18</td><td>Factorising, quadratic equations and word problems set up from the sentence</td></tr>
      <tr><td>Geometry</td><td>15</td><td>Proofs written as reasons, and constructions drawn cleanly</td></tr>
      <tr><td>Trigonometry</td><td>10</td><td>Identities, standard values and heights-and-distances figures</td></tr>
      <tr><td>Mensuration</td><td>10</td><td>Units carried to the last line, and the right formula named first</td></tr>
      <tr><td>Arithmetic</td><td>8</td><td>Careful working with numbers and percentages</td></tr>
      <tr><td>Coordinate geometry</td><td>8</td><td>Distance and section formulae with a labelled sketch</td></tr>
      <tr><td>Statistics</td><td>8</td><td>Tables set out in full before the mean, median or mode</td></tr>
      <tr><td>Sets</td><td>3</td><td>A short topic, but one that is not among CBSE's Class 10 units, so tutors from that board may skip it</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    By size, 24 objective questions carry one mark each, ten short answers two, seven three, and three long answers
    five. There is no overall choice, but two three-mark questions and one five-mark question have an internal
    option. The setter aims for 30% knowledge, 30% understanding, 30% application and 10% higher-order thinking.
    Schools also award up to 20 internal-assessment marks per subject, which must be passed separately from the
    board paper.
  </p>
  <p>
    Three free resources help: the bilingual Class 10 maths textbook on the 2026-27 list, HSLC papers from 2021 to
    2025 on the previous-years page, and the Class 10 competency-based item bank of November 2025, whose maths
    section has 46 multiple-choice and 49 written-response questions with marking schemes. Documents are revised from time to time, so check mbse.edu.in for the latest; the
    <a href="{{ url('/mizoram-board-tutor-aizawl') }}">Mizoram Board tutor in Aizawl</a> page deals with every other subject.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azm-cbse">CBSE Class 10 maths: units, sections and two exam sittings</h2>
  <p>
    CBSE has kept last session's design for 2026-27: fourteen NCERT chapters grouped into seven units, 80 marks on
    the board paper and 20 more from school. Algebra (20) and geometry (15) are the heavyweights. Trigonometry is
    worth 12, statistics and probability together 11, and mensuration 10; real numbers and coordinate geometry bring
    6 marks each.
  </p>
  <ul>
    <li><strong>Section A:</strong> twenty single-mark items, of which two are assertion–reason and eighteen are multiple choice.</li>
    <li><strong>Sections B, C and D:</strong> five answers worth two marks, six worth three and four worth five.</li>
    <li><strong>Section E:</strong> three case studies at four marks apiece.</li>
    <li><strong>Exam-day rules:</strong> calculators are not allowed, and π is 22/7 unless a question states another value.</li>
  </ul>
  <p>
    Basic and Standard share chapters, not depth. Roughly 54% of the Standard paper rewards remembering and
    understanding, compared with about 75% of Basic, so a child who may take maths in Class 11 should stay on
    Standard. From 2026 there is one compulsory main board exam, plus an optional second sitting in which a student
    can try to raise up to three subjects, maths included; cbse.gov.in will carry the 2027 dates. Chapter-by-chapter
    help is in our <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a>
    and <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year plan</a>; the
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page describes how we choose tutors.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azm-senior">Classes 11 and 12: state board, CBSE, entrance or diploma</h2>
  <p>
    The MBSE Higher Secondary School Leaving Certificate (HSSLC) maths paper has followed a new design since 2025.
    For Class 11 and Class 12 alike it runs three hours for 80 marks across 32 questions: sixteen one-mark objective
    items, four two-mark answers, eight four-mark answers and four six-mark long answers. Calculus takes 34 of the
    Class 12 marks; vectors and three-dimensional geometry follow with 14, algebra with 10, relations and functions
    and probability with 8 each, and linear programming with 6. In Class 11 the weight sits elsewhere: algebra 25,
    sets and functions 23. NCERT's Mathematics books are among the titles on the board's Class 12 list, so NCERT
    exercises make a sound core.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Other Class 11 and 12 maths routes an Aizawl student may be on</caption>
    <thead>
      <tr><th scope="col">Route</th><th scope="col">Key facts</th><th scope="col">Read next</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Class 12</td><td>All 38 questions compulsory, 80 marks; calculus carries 35</td><td><a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Calculus and algebra guide</a></td></tr>
      <tr><td>JEE Main</td><td>2026 Paper 1: 75 questions, 300 marks; maths had 25 (20 MCQ, 5 numerical), +4 right, −1 wrong; NTA confirms the pattern yearly</td><td><a href="{{ url('/blog/jee-maths-topicwise-prep') }}">Topic-wise JEE maths</a>, <a href="{{ url('/jee-home-tutor') }}">JEE home tutor</a></td></tr>
      <tr><td>ISC</td><td>From the 2027 exam: one 80-mark paper over seven units, no choice between the old Sections B and C; calculus 35; two projects 20</td><td><a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a></td></tr>
      <tr><td>IB Diploma</td><td>Analysis and Approaches or Applications and Interpretation; 150 hours at SL, 240 at HL; exploration 20%</td><td><a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA and AI</a></td></tr>
      <tr><td>IGCSE</td><td>Core is capped at grade C; Extended spans A* to G</td><td>Ask the school which tier</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    On both Indian boards calculus is the centre of Class 12, so early work on limits and derivatives pays back many
    times. An entrance candidate needs two habits kept apart: full written working for the board, fast objective
    practice for the entrance. ISC, IB and IGCSE specialists are scarcer, so name the course at the outset.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azm-hour">What one maths hour at home should contain</h2>
  <p>
    How many sessions you book matters less than what each one produces. A productive hour usually has five parts:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Five parts of a productive maths lesson, and the reason for each</caption>
    <thead>
      <tr><th scope="col">Part</th><th scope="col">What happens</th><th scope="col">Why it earns its place</th></tr>
    </thead>
    <tbody>
      <tr><td>Recall</td><td>A handful of questions from last week, done without the notebook</td><td>Shows what actually stayed</td></tr>
      <tr><td>One error, examined</td><td>Your child finds the faulty line in a wrong school answer before the tutor explains</td><td>Builds the habit of checking</td></tr>
      <tr><td>New idea</td><td>Taught briefly and tied to the chapter the school is on</td><td>Keeps tuition and school in step</td></tr>
      <tr><td>Timed set</td><td>One-mark objective items in the HSLC or HSSLC style, or assertion–reason for CBSE</td><td>Trains speed in the paper's own format</td></tr>
      <tr><td>One full answer</td><td>A long answer written out and marked against an official scheme</td><td>Layout rehearsed weekly rather than crammed at the end</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azm-places">Six Aizawl localities: what to agree before the first maths class</h2>
  <p>
    Across Aizawl, homes are mostly multi-storey buildings on the hillside, so a family's floor may sit above or below
    the road, and deep valleys separate one locality from the next. The tutor who looks nearest on a map is not
    always the easiest to schedule; the one on your side of the valley usually is. Compare tutors by area on our
    <a href="{{ url('/city/aizawl') }}">Aizawl page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Aizawl localities across the four parts of the city: homes, likely tutors, and one thing to settle</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Homes</th><th scope="col">Tutors most easily matched</th><th scope="col">Settle first</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $azA('durtlang', 'Durtlang') !!}</td><td>Multi-storey buildings on the city's highest ridge, at 1,384 metres</td><td>Those living in Bawngkawn or Chaltlang</td><td>House name, floor and a landmark; extra time in heavy rain</td></tr>
      <tr><td>{!! $azA('zemabawk', 'Zemabawk') !!}</td><td>Residential lanes beside government rental blocks and institutional land</td><td>Tutors from Zemabawk, Thuampui or Bawngkawn</td><td>The block name, and whether the building records visitors</td></tr>
      <tr><td>{!! $azA('zarkawt', 'Zarkawt') !!}</td><td>Central buildings close to the main roads and state offices</td><td>Tutors from Chanmari, Dawrpui, Khatla or Ramhlun</td><td>A start time clear of the morning and evening rush</td></tr>
      <tr><td>{!! $azA('tuikual', 'Tuikual') !!}</td><td>Hillside buildings in Tuikual North and South, beside Dinthar</td><td>Tutors on the same side of the valley, in Vaivakawn or Dawrpui Vengthar</td><td>The route, confirmed by the tutor before the demo</td></tr>
      <tr><td>{!! $azA('khatla', 'Khatla') !!}</td><td>Buildings set into the slopes, reached by steps from the road</td><td>Tutors in Khatla, Bungkawn, Maubawk or Lawipu</td><td>An evening slot a tutor from the same cluster can keep</td></tr>
      <tr><td>{!! $azA('kulikawn', 'Kulikawn') !!}</td><td>Buildings on steep slopes, with valleys between localities</td><td>Tutors from Tlangnuam, Saikhamakawn or Thakthing</td><td>Which entrance and floor, and a phone number for the first visit</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The zone pages for <a href="{{ url('/city/aizawl/zone/durtlang-chaltlang-bawngkawn') }}">Durtlang, Chaltlang and
    Bawngkawn</a> and <a href="{{ url('/city/aizawl/zone/khatla-mission-veng-kulikawn') }}">Khatla, Mission Veng and
    Kulikawn</a> add timing advice, and the <a href="{{ url('/blog/aizawl-home-tuition-guide') }}">Aizawl home tuition
    guide</a> covers every zone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azm-rain">The rainy months: keep the lesson, change the room</h2>
  <p>
    Heavy rain is common between April and October, and on the worst evenings a hillside trip is not worth making.
    Settle in advance that such lessons go online, same tutor, same hour. Maths only works on a screen if the tutor
    can follow the working, so point a second phone at the exercise book or use a shared whiteboard. See the
    <a href="{{ url('/online-tutor-aizawl') }}">online tutor for Aizawl</a> page for the set-up, and our article on
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutoring</a> for the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azm-demo">At the free demo: four signs of a good fit</h2>
  <p>
    Hand the tutor the chapter your child's class is on right now, then watch for:
  </p>
  <ol>
    <li><strong>Diagnosis first.</strong> The tutor asks questions to find the starting point before explaining anything.</li>
    <li><strong>Mistakes sorted.</strong> Careless arithmetic, a misunderstood question and a missing concept are treated as three different problems.</li>
    <li><strong>Creditable working.</strong> Geometry reasons and full steps for HSLC; the steps CBSE's scheme rewards for CBSE.</li>
    <li><strong>A two-week plan.</strong> By the end you know the next topics and the homework set.</li>
  </ol>
  <p>
    Not the right person? Another tutor from your shortlist gives a demo, and a change later is free. More checks are
    in the <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azm-fees">What does a maths home tutor in Aizawl charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor names a rate.
    It tends to rise with the class and course, the tutor's record on that paper, the climb to your home at your
    chosen hour and the number of weekly lessons. All fees are on the shortlist before any demo; see the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-aizawl') }}">Aizawl home tuition fees</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azm-start">How to ask for maths tutors in Aizawl</h2>
  <p>
    Write to us with the class; the exact course (MBSE HSLC or HSSLC, CBSE Standard or Basic, ICSE, ISC, IB or
    IGCSE); your locality, building, floor and a landmark; the days and hours that work; and a budget. Two or three
    maths tutors come back with their fees, and you pick one for the free demo. Where no suitable tutor can reach you
    at that time, we propose online or mixed lessons. Our office is in Sector 66, Gurugram, and our tutors teach
    online in every state; the national <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page shows the
    wider service. You can also <a href="{{ url('/tutors') }}">look through tutor profiles</a> or
    <a href="{{ url('/demo-class') }}">request a demo class</a> now. For the sciences, see the
    <a href="{{ url('/science-home-tutor-aizawl') }}">science</a> and
    <a href="{{ url('/physics-home-tutor-aizawl') }}">physics</a> pages for Aizawl.
  </p>
  <p>
    Maths teachers based in Aizawl who would like local students can see live requests on
    <a href="{{ url('/tuition-jobs/aizawl') }}">Aizawl tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
