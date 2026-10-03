{{--
  Long-form guide for the "maths home tutor Shillong" subject page. Authors in
  config: Ajay Vatsyayan (IB, IGCSE and ISC maths) and Abhinandan Tiwary (Class
  10 CBSE and ICSE maths); role statements only, no anecdotes. Page writer
  (capitals wave 2, subjects), 3 Oct 2026.

  Local facts only from database/seo-content/areas/shillong-research.json
  (area "about" texts and zone_facts, each with sources). No school, college,
  university, hospital, society or people's names; no distances or travel
  times; only the allowed fee sentence. No defence or tourism references.

  Meghalaya Board of School Education (MBOSE) facts, all read on www.mbose.in
  on 3 Oct 2026:
  - https://www.mbose.in/ and https://www.mbose.in/about/about-us : board
    started in 1973 with headquarters at Tura; first SSLC examination 1974;
    took over the higher secondary stage after 1996; frames syllabus for all
    classes including SSLC and HSSLC.
  - SSLC Mathematics sample paper and blueprint, 2024-25 (new course, NCERT
    textbook): https://www.mbose.in/public/media_file/1782119605.pdf
    80 theory (pass 24) + 20 internal assessment (pass 6); 55 questions in
    four sections: A 30 MCQs x 1; B attempt 6 of 9 x 2; C 6 of 9 x 3; D 4 of
    7 x 5. Indicative weightage: algebra (real numbers, polynomials, linear
    pairs, quadratics, AP) 27; coordinate geometry 5; trigonometry 9;
    geometry and mensuration (triangles, circles, areas related to circles,
    surface areas and volumes) 29; statistics and probability 10. Answers in
    at least 3, 5 and 8 steps for B, C, D; no calculators; internal assessment
    through project work, written tests or assignments.
  - Programme for SSLC Examination 2026-27, dated 14 Sep 2026:
    https://www.mbose.in/public/notice/17893801860.pdf (Mathematics/Special
    Mathematics on 16 Dec 2026, 10 am to 1 pm; may be rescheduled).
  - Calendar-year session wording ("Academic Session 2026", "End-Term of
    Academic Year 2026") in the MBOSE notice of 15 Sep 2026:
    https://www.mbose.in/public/notice/17894655420.pdf
  - Notification No. 40, 6 Nov 2024 (CBSE question pattern for Class XI-XII
    subjects that use CBSE syllabus and NCERT books; HSSLC from 2026):
    https://www.mbose.in/public/media_file/1782119473.pdf
  - Notification No. 1020, 28 Aug 2026 (new Class XII sample papers, effective
    HSSLC 2027): https://www.mbose.in/public/notice/17879049240.pdf and the
    HSSLC Mathematics sample paper
    https://www.mbose.in/public/media_file/1787905256.pdf (38 compulsory
    questions; A: 18 MCQ + 2 assertion-reason of 1 mark; B 5 x 2; C 6 x 3;
    D 4 x 5; E 3 case-study x 4). The paper's stated total is not repeated
    here because its header and section totals differ.
  CBSE, CISCE, IB and JEE facts reuse the checked statements in
  database/seo-content/blog: cbse-class-10-maths-preparation (unit marks,
  sections, no calculators), cbse-class-10-board-year-plan-gurgaon (two Class
  10 exams), cbse-class-12-maths-calculusalgebra (38 questions, calculus 35),
  icse-isc-maths-gurgaon-guide (ISC 2027/2028 single paper, projects),
  -ib-math-aaai-slhl (AA/AI, hours, weights) and
  jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026).

  Area links render only when that Shillong area page exists and is active.
--}}
@php
  $slmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $slmA = function (string $slug, string $label) use ($slmSlugs) {
      return in_array($slug, $slmSlugs, true)
          ? '<a href="' . e(url('/city/shillong/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide slm-guide" aria-labelledby="slmGuideTitle">
  <h2 id="slmGuideTitle">Maths home tutor in Shillong: start with the board's calendar, then the hill your home is on</h2>

  <p class="nx-guide__lede">
    Two Shillong parents may give different answers to the question of when their Class 10 child sits the maths
    board paper. A student on the Meghalaya Board of School Education (MBOSE) works to the board's own programme, which
    for the 2026-27 SSLC places mathematics in December 2026, while a CBSE student next door follows the CBSE
    timetable. The papers differ too, down to how many steps a full answer needs. So the first thing we ask is the board and the year of the exam. The second is where you live,
    because in a hill city of sloping lanes and shared taxis, the right tutor is the one for whom your door is an
    easy weekly trip. Tell NXTutors both, and we send two or three maths tutors who fit. Their fees are on screen
    before you meet anyone, and the first class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#slm-boards">Which paper</a> ·
    <a href="#slm-sslc">MBOSE SSLC maths</a> ·
    <a href="#slm-hsslc">HSSLC maths</a> ·
    <a href="#slm-cbse">CBSE Class 10 and 12</a> ·
    <a href="#slm-intl">ICSE, ISC, IB</a> ·
    <a href="#slm-year">Two calendars</a> ·
    <a href="#slm-local">Six localities</a> ·
    <a href="#slm-demo">The demo</a> ·
    <a href="#slm-fees">Fees</a> ·
    <a href="#slm-ask">Your request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="slm-boards">Which board sets your child's maths paper, and how does each one mark it?</h2>
  <p>
    Ajay Vatsyayan writes on IB, IGCSE and ISC mathematics here, and Abhinandan Tiwary on Class 10 maths for CBSE and
    ICSE. The examining body comes first, because it decides the textbook, the layout of a good answer and the
    practice that turns into marks.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths papers Shillong students sit, who sets them, and the one question to put to a tutor</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Set by</th><th scope="col">What the paper looks like</th><th scope="col">Ask the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>SSLC (Class 10)</td><td>MBOSE</td><td>80 theory marks in four sections plus 20 internal; answers marked by steps</td><td>Have you worked through the board's own sample paper and blueprint?</td></tr>
      <tr><td>HSSLC (Class 12) mathematics</td><td>MBOSE</td><td>Follows the CBSE question pattern since the 2026 examination; 38-question sample paper for 2027</td><td>Will you practise from the board's 2027 sample paper as well as NCERT?</td></tr>
      <tr><td>CBSE Class 10</td><td>CBSE</td><td>80-mark board paper in five sections, 20 marks in school</td><td>Which units will you spend most of the year on?</td></tr>
      <tr><td>CBSE Class 12</td><td>CBSE</td><td>38 compulsory questions for 80 marks, plus 20 internal</td><td>By when will calculus be finished?</td></tr>
      <tr><td>ICSE, ISC, IB, IGCSE</td><td>CISCE, IB, Cambridge</td><td>Each with its own paper and coursework rules</td><td>Which of these courses have you taught most recently?</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slm-sslc">MBOSE SSLC mathematics: what the board's blueprint says</h2>
  <p>
    The Meghalaya board began in 1973, with its headquarters at Tura, and held its first SSLC examination in 1974. It
    now frames the syllabus for every class up to the HSSLC. For Class 10 maths it uses the NCERT textbook, and its
    published blueprint and sample question paper are the most useful documents any tutor can bring to your table.
    The scheme has 80 marks for the written paper, with 24 needed to pass, and 20 for internal assessment, with a
    pass mark of 6. The school may award the internal marks through project work, written tests or assignments.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>SSLC mathematics theory paper in the MBOSE sample paper and blueprint (2024-25 issue)</caption>
    <thead>
      <tr><th scope="col">Section</th><th scope="col">Question type</th><th scope="col">What the student answers</th><th scope="col">Marks</th></tr>
    </thead>
    <tbody>
      <tr><td>A</td><td>Multiple choice, one mark each</td><td>All 30, marked in boxes on the answer sheet</td><td>30</td></tr>
      <tr><td>B</td><td>Very short answers, two marks each</td><td>Any 6 of 9, in at least three steps</td><td>12</td></tr>
      <tr><td>C</td><td>Short answers, three marks each</td><td>Any 6 of 9, in at least five steps</td><td>18</td></tr>
      <tr><td>D</td><td>Long answers, five marks each</td><td>Any 4 of 7, in at least eight steps</td><td>20</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The board also gives an indicative weightage by area: geometry and mensuration together (triangles, circles,
    areas related to circles, surface areas and volumes) 29 marks; algebra, which here includes real numbers,
    polynomials, linear pairs, quadratics and progressions, 27; statistics and probability 10; trigonometry 9; and
    coordinate geometry 5. The board notes that real papers may vary a little. Calculators and phones are not
    allowed.
  </p>
  <p>
    Two things follow for tuition. First, nearly two-fifths of the paper is multiple choice, and those answers count
    only when written in the right boxes, so timed practice of Section A belongs in every week of the board year.
    Second, the step requirements change how written work should look: a five-mark answer needs a visible chain of
    at least eight steps, so a tutor should mark your child's homework for missing steps, not only for wrong answers.
    The board's 2026-27 SSLC programme, issued on 14 September 2026, lists Mathematics and Special Mathematics on 16
    December 2026; the board notes that dates can be rescheduled, so check www.mbose.in. For more on board-specific
    tutoring, see our <a href="{{ url('/meghalaya-board-tutor-shillong') }}">MBOSE tutor in Shillong</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slm-hsslc">HSSLC maths in Classes 11 and 12: why CBSE practice now fits</h2>
  <p>
    A notification of November 2024 moved MBOSE Class 11 and 12 subjects that use the CBSE syllabus and NCERT
    textbooks to the CBSE question pattern, from the 2024-25 session for Class 11 and from the 2026 HSSLC examination.
    In August 2026 the board then issued fresh Class 12 sample papers that apply from the 2027 HSSLC. The mathematics
    sample has 38 compulsory questions in five sections: 18 multiple-choice and 2 assertion-reason items of one mark,
    five two-mark answers, six of three marks, four long answers of five marks and three case studies of four marks,
    with internal choice in a few questions.
  </p>
  <p>
    An HSSLC student can use CBSE-style material for drill, but should sit the board's own sample paper at least
    twice under time, as it is the clearest guide to what MBOSE examiners will set. If your
    child is also preparing for an engineering entrance, the <a href="{{ url('/maths-home-tutor/class-12') }}">Class
    12 maths tutor</a> page and the <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">topic-wise JEE maths
    guide</a> show how the two kinds of preparation share a week.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slm-cbse">CBSE Class 10 and Class 12 maths: the numbers a tutor plans around</h2>
  <p>
    In the 2026-27 CBSE Class 10 paper, units are weighted as follows: algebra 20 marks, geometry 15, trigonometry 12,
    statistics and probability 11, mensuration 10, and real numbers and coordinate geometry 6 each. The paper has five
    sections: twenty one-mark items, five two-mark, six three-mark and four five-mark questions, and three case
    studies of four marks. Calculators are not allowed and π is taken as 22/7 unless a question says otherwise. From
    2026 every Class 10 student sits one compulsory main exam, with a second, optional sitting to improve up to three
    subjects. The <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">CBSE Class 10 maths preparation
    guide</a> and the <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year plan</a> go
    chapter by chapter.
  </p>
  <p>
    CBSE Class 12 maths sets 38 compulsory questions for 80 marks, and calculus alone is worth 35, which is why it
    deserves the largest share of the week from the start of the session. JEE Main 2026 Paper 1 had 25 maths
    questions out of 75, twenty multiple-choice and five numerical, at +4 for a correct answer and −1 for a wrong one;
    check jeemain.nta.nic.in for the next pattern. See the
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a> and the
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page for the national picture.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slm-intl">ICSE, ISC and IB maths: points that change the match</h2>
  <ul>
    <li><strong>ICSE Class 10.</strong> One written paper of 80 marks, with 20 for internal work. Tutors who have taught it know how examiners read working.</li>
    <li><strong>ISC Class 12.</strong> For the 2027 and 2028 examinations CISCE sets one 80-mark paper across seven units, with no choice between the old Sections B and C. Calculus carries 35 marks and two projects add 20. The <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> explains both years.</li>
    <li><strong>IB Diploma.</strong> Analysis and Approaches leans on algebra, calculus and proof; Applications and Interpretation on modelling and statistics. Teaching time is 150 hours at SL and 240 at HL, and the exploration is 20% of the grade. See <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA and AI</a>.</li>
  </ul>
  <p>
    Name the course in your first message; when nobody suitable lives within reach, an online specialist can help.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slm-year">Two calendars in one city: how to time maths tuition</h2>
  <p>
    MBOSE notices describe the school session by calendar year, and with SSLC papers programmed for December, the
    board year for a state-board student runs to a different rhythm from a CBSE year. That changes when tuition
    should be at its most intense.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A starting shape for maths tuition across the year, by board</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">MBOSE SSLC student</th><th scope="col">CBSE Class 10 student</th></tr>
    </thead>
    <tbody>
      <tr><td>Early in the school year</td><td>Algebra and geometry chapters taught as the school reaches them; two sessions a week</td><td>Unit-by-unit work; two sessions a week</td></tr>
      <tr><td>Middle of the year</td><td>School tests and internal assessment work; first full sample paper</td><td>Chapters finished; first sample papers</td></tr>
      <tr><td>Last two months before the paper</td><td>Timed Section A drills and full papers marked for steps; up to three sessions</td><td>Timed sections and full papers marked the CBSE way</td></tr>
      <tr><td>After the paper</td><td>A start on Class 11 algebra if maths continues</td><td>Second CBSE sitting, if your child is eligible and chooses it</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Shillong's winters are cold and the monsoon is heavy, so whatever the board, agree at the start that a session
    can move online at the usual hour on a wet or dark evening rather than being missed.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slm-local">Six Shillong localities: what to sort out before the first maths class</h2>
  <p>
    Shillong has no railway, so tutors come by shared taxi, city bus or their own vehicle, and many homes are reached
    by lanes and steps rather than straight from a main road. The arrangements that make a weekly class last differ
    from one part of the city to another. Compare tutors by locality on our
    <a href="{{ url('/city/shillong') }}">Shillong page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Shillong localities across four zones: getting a tutor to the door, and one thing to agree first</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Getting the tutor to the door</th><th scope="col">Agree first</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $slmA('police-bazar', 'Police Bazar') !!}</td><td>Homes sit in the lanes off the commercial core; a flat above a shopfront needs a building name or landmark</td><td>A slot outside shop hours, when the core is less crowded</td></tr>
      <tr><td>{!! $slmA('mawprem', 'Mawprem') !!}</td><td>Say whether you are in Upper or Lower Mawprem, and give a church, shop or bus stop as a landmark</td><td>A fixed weekday evening, set early in the term</td></tr>
      <tr><td>{!! $slmA('laban', 'Laban') !!}</td><td>Name your part: Lumparing, Madan Laban, Kench's Trace or Rilbong are each known by their own names</td><td>Extra time on hill roads in heavy rain</td></tr>
      <tr><td>{!! $slmA('laitumkhrah', 'Laitumkhrah') !!}</td><td>Easy by shared taxi or bus; for a flat, share the building name and floor in advance</td><td>An evening start, after school and college traffic eases</td></tr>
      <tr><td>{!! $slmA('rynjah', 'Rynjah') !!}</td><td>Lanes go by bylane number; mention steps down from the road so the tutor can plan parking</td><td>An online session on the heaviest monsoon days</td></tr>
      <tr><td>{!! $slmA('mawlai', 'Mawlai') !!}</td><td>Mawlai has many parts; give yours and the nearest stop, such as Mawiong, Nonglum or Mawlai Pump</td><td>Whether a tutor from Jaiaw or one living in Mawlai suits your part better</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The zone pages for <a href="{{ url('/city/shillong/zone/police-bazar-jaiaw') }}">Police Bazar and Jaiaw</a> and
    <a href="{{ url('/city/shillong/zone/laitumkhrah-rynjah') }}">Laitumkhrah and Rynjah</a> add more local timing
    advice, and the <a href="{{ url('/blog/shillong-home-tuition-guide') }}">Shillong home tuition guide</a> covers
    every zone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slm-demo">What should the free demo show you?</h2>
  <p>
    Ask the tutor to teach whatever chapter the school is on this week, and watch for four things:
  </p>
  <ol>
    <li><strong>A check before teaching.</strong> The tutor finds out what your child can already do before explaining anything.</li>
    <li><strong>The kind of mistake named.</strong> An arithmetic slip, a misread question and a missing idea each need a different fix.</li>
    <li><strong>Working set out for the right board.</strong> For an MBOSE student, that means counting the steps the blueprint asks for; for CBSE, the layout its marking scheme rewards.</li>
    <li><strong>A plan for the next fortnight.</strong> You should leave knowing which topics come next and what homework will be checked.</li>
  </ol>
  <p>
    If the fit is wrong, tell us and we set up a demo with another tutor from your shortlist; changing tutor later is
    free too. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more
    questions to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slm-fees">What does a maths home tutor in Shillong charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own rates, shaped by the class and board, how long they have taught that paper, the journey to
    your locality at the hour you want, and how many sessions you book. Every shortlisted fee is shown before the
    demo. Our <a href="{{ url('/pricing-guide') }}">pricing guide</a> and the
    <a href="{{ url('/blog/home-tuition-fees-shillong') }}">Shillong home tuition fees</a> article explain what moves
    a fee and which questions to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slm-ask">How do you ask for maths tutors in Shillong?</h2>
  <p>
    Send five details: the class; the board and exam year (MBOSE SSLC or HSSLC, CBSE, ICSE, ISC or IB); your locality
    with a landmark or bus stop; the days and times you can offer; and a budget. We come back with two or three
    matched maths tutors and their fees, and you choose one for a free demo. If no suitable tutor can reach your part
    of the city at that hour, we suggest an online or mixed plan instead. NXTutors is based in Sector 66, Gurugram,
    and teaches online across India; the national <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page
    explains how we work, and you can <a href="{{ url('/tutors') }}">browse tutor profiles</a> first. Students taking
    science alongside can read the <a href="{{ url('/science-home-tutor-shillong') }}">science home tutor in
    Shillong</a> page.
  </p>
  <p>
    Maths teachers living in Shillong who want students close to home can see open requests on
    <a href="{{ url('/tuition-jobs/shillong') }}">Shillong tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
