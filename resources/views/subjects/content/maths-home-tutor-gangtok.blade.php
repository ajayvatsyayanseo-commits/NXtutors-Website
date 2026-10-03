{{--
  Long-form guide for the "maths home tutor Gangtok" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Page writer (capitals wave 2, subjects), 3 Oct 2026.
  Local facts come only from database/seo-content/areas/gangtok-research.json
  (zone_facts, area "about" texts and board_facts, each with sources).
  Boards: board_facts only. Gangtok's schools follow CBSE or CISCE
  (en.wikipedia.org/wiki/Gangtok); CBSE schools in Sikkim come under the
  CBSE Regional Office, Guwahati (https://cbse.gov.in/cbsenew/RO.html).
  No state board is named.
  CBSE / CISCE / IB / JEE facts reuse the checked statements in
  database/seo-content/blog: cbse-class-10-maths-preparation,
  cbse-class-10-board-year-plan-gurgaon (two Class 10 exams),
  cbse-class-12-maths-calculusalgebra (38 questions, calculus 35),
  icse-isc-maths-gurgaon-guide (ICSE 2027 syllabus: one three-hour paper of
  80 + 20 internal from at least two assignments; 2025 paper Section A 40
  compulsory, Section B any four; topics found difficult; ISC single paper
  for 2027, calculus 35, two projects 20), -ib-math-aaai-slhl and
  jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern).
  No school, college, coaching institute, society or people's names (except
  the page authors), no roads named after people, no distances or travel
  times, only the allowed fee sentence. Weather is timing advice only.

  Area links render only when that Gangtok area page exists and is active.
--}}
@php
  $gkAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gkA = function (string $slug, string $label) use ($gkAreaSlugs) {
      return in_array($slug, $gkAreaSlugs, true)
          ? '<a href="' . e(url('/city/gangtok/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide gtkm-guide" aria-labelledby="gtkmGuideTitle">
  <h2 id="gtkmGuideTitle">Maths home tutor in Gangtok: the right paper, the right slope, the right hour</h2>

  <p class="nx-guide__lede">
    In Gangtok, the maths question a parent faces is rarely "which board?" in the way it is elsewhere. Schools in the
    city follow CBSE or CISCE, so most children are writing either an NCERT-based CBSE paper or an ICSE and later ISC
    paper. What changes from home to home is the hill: a flat four floors up from the road, a house down a flight of
    steps, a colony with a gate, a lane the taxi cannot enter. A maths tutor has to suit both the paper and the
    climb. Tell NXTutors your child's class, board and locality, and we suggest two or three maths tutors. You see
    their fees before anyone visits, and the first class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gtkm-paper">CBSE or CISCE</a> ·
    <a href="#gtkm-cbse10">CBSE Class 10</a> ·
    <a href="#gtkm-icse">ICSE Class 10</a> ·
    <a href="#gtkm-senior">Classes 11 and 12</a> ·
    <a href="#gtkm-week">A maths week</a> ·
    <a href="#gtkm-local">Four localities</a> ·
    <a href="#gtkm-rain">Wet evenings</a> ·
    <a href="#gtkm-demo">The demo</a> ·
    <a href="#gtkm-fees">Fees</a> ·
    <a href="#gtkm-ask">How to ask</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gtkm-paper">CBSE or CISCE: how the board shapes a Gangtok maths tutor's work</h2>
  <p>
    Two named authors stand behind the exam notes here. Ajay Vatsyayan writes about IB, IGCSE and ISC mathematics;
    Abhinandan Tiwary writes about Class 10 maths for CBSE and ICSE. Our first question to any family is the board,
    because it fixes the textbook, how working is laid out, and which papers are worth practising. CBSE schools in
    Sikkim come under the board's Regional Office in Guwahati, which also serves the other north-eastern states; the
    syllabus and sample papers are the same national documents every CBSE school uses.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The maths courses a Gangtok child is likely to be on, what the tutor should bring, and one question to put to them</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Set by</th><th scope="col">What the tutor should bring</th><th scope="col">Ask the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Classes 9 and 10</td><td>CBSE</td><td>NCERT chapters, the current sample paper and its marking scheme</td><td>Which part of the 80 marks do children here lose most often?</td></tr>
      <tr><td>CBSE Classes 11 and 12</td><td>CBSE</td><td>NCERT, exemplar problems and recent board papers</td><td>How early will calculus start?</td></tr>
      <tr><td>ICSE Classes 9 and 10</td><td>CISCE</td><td>The school's chosen books, specimen papers, CISCE's own analysis of past papers</td><td>How do you train Section B choices?</td></tr>
      <tr><td>ISC Classes 11 and 12</td><td>CISCE</td><td>The syllabus for the child's exam year and the project guidelines</td><td>Have you taught the single-paper format?</td></tr>
      <tr><td>IB or Cambridge IGCSE (families who move in with these)</td><td>IB; Cambridge</td><td>Course guides and past papers through the school</td><td>Can you teach this online if nobody nearby can?</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtkm-cbse10">How are the 80 board marks spread in CBSE Class 10 maths?</h2>
  <p>
    The 2026-27 design repeats the previous session's. Fourteen NCERT chapters sit in seven units, and the school
    awards a further 20 marks through internal assessment.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 maths, 2026-27: unit marks in the board paper and where a tutor's time goes</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Where a tutor spends the time</th></tr>
    </thead>
    <tbody>
      <tr><td>Algebra</td><td>20</td><td>Quadratics and arithmetic progressions written out in full, every week</td></tr>
      <tr><td>Geometry</td><td>15</td><td>Proofs of the triangle and circle theorems, with each reason stated</td></tr>
      <tr><td>Trigonometry</td><td>12</td><td>Identities, then height-and-distance figures drawn before any working</td></tr>
      <tr><td>Statistics and probability</td><td>11</td><td>Grouped-data tables set out cleanly, with formulas named</td></tr>
      <tr><td>Mensuration</td><td>10</td><td>Combined solids, units carried through to the last line</td></tr>
      <tr><td>Real numbers; coordinate geometry</td><td>6 each</td><td>Short, reliable marks that should never be dropped</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The paper opens with 20 one-mark items (18 multiple choice and 2 assertion–reason), then five two-mark answers, six
    three-mark answers, four five-mark answers and three four-mark case studies. No calculator is allowed. Standard
    and Basic share chapters but not depth, and the 2026-27 Class 10 batch is the last on that split; keep Standard if
    Class 11 maths is a possibility. From 2026 every Class 10 student sits a compulsory main exam, and an optional
    second sitting lets them try to improve up to three subjects, maths among them; dates for 2027 will appear on
    cbse.gov.in. Our <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a>,
    the <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year plan</a> and the
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtkm-icse">ICSE Class 10 maths: a wider syllabus, judged on the working</h2>
  <p>
    For the 2027 examination, CISCE's syllabus lists one paper of three hours carrying 80 marks, with 20 more from
    internal assessment built on at least two assignments the teacher sets. In the 2025 paper, as CISCE's own analysis
    reported it, Section A (40 marks) was compulsory and candidates chose four questions from Section B (another 40).
    That choice is a skill in itself: a tutor should have your child pick and abandon questions under time, not only
    solve them.
  </p>
  <p>
    The topics ICSE students most often find hard include GST, recurring deposits, shares, inequations on a number
    line, quadratic equations, matrix multiplication, terms and sums of progressions, equations of a line, similar
    triangles, loci and circle constructions, heights and distances, and reading an ogive. Several are commercial
    arithmetic that has no CBSE equivalent, so a tutor who has taught only CBSE needs to show they know them. The
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> covers how examiners judge
    the steps.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtkm-senior">After Class 10: board maths, entrance maths, or a course from elsewhere</h2>
  <dl>
    <dt><strong>CBSE Class 12</strong></dt>
    <dd>38 compulsory questions for 80 marks, of which calculus alone is worth 35. A tutor should begin calculus early in the session and return to it every week; our <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">calculus and algebra guide</a> lists what keeps coming back.</dd>
    <dt><strong>ISC</strong></dt>
    <dd>From the 2027 exam, a single 80-mark paper over seven units with no choice between the former Sections B and C, so vectors, three-dimensional geometry, linear programming and probability are compulsory for all. Calculus carries 35, and two projects add 20. The <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> explains the change.</dd>
    <dt><strong>JEE Main</strong></dt>
    <dd>In 2026, Paper 1 had 75 questions for 300 marks; maths supplied 25, twenty with options and five needing a numerical answer, at +4 for a right answer and −1 for a wrong one. NTA publishes the pattern afresh each year. See the <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">topic-wise JEE maths guide</a>.</dd>
    <dt><strong>IB and IGCSE</strong></dt>
    <dd>For a family arriving with an international course, IB maths comes as Analysis and Approaches or Applications and Interpretation at SL or HL, with an exploration worth 20%; IGCSE Core caps the grade at C while Extended runs to A*. Specialists are likely to be online; the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA and AI guide</a> helps you brief one.</dd>
  </dl>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtkm-week">What should a fortnight of maths tuition produce?</h2>
  <p>
    Whatever the board, judge tuition by what is on paper at the end of two weeks, not by hours booked. With two
    sessions a week, a sound pattern gives each session a different job:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Two weekly maths sessions with different jobs, and the evidence a parent should be able to see</caption>
    <thead>
      <tr><th scope="col">Session</th><th scope="col">Its job</th><th scope="col">What you should see afterwards</th></tr>
    </thead>
    <tbody>
      <tr><td>First of the week</td><td>Repair: the school test or homework that went wrong, worked again from the first line</td><td>Corrections in the notebook, each with a one-line note of the mistake</td></tr>
      <tr><td>Second of the week</td><td>Exam writing: a short timed set in the board's own format, then one long answer marked against a scheme</td><td>A dated set with a score and the marks lost per question</td></tr>
      <tr><td>Every second week</td><td>Retrieval: ten mixed questions from older chapters, no notes</td><td>A list of chapters that need another visit</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A child who keeps that record in one notebook can show it to any tutor, which also makes a change of tutor
    painless if it is ever needed.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtkm-local">Four Gangtok localities: settling the visit before the first class</h2>
  <p>
    Gangtok has grown along its main roads, and its homes climb the slopes on either side, so the last part of a
    tutor's journey is often on foot. There is no railway or metro; tutors come by shared taxi, two-wheeler or on
    foot. These four localities, one from each part of the city, show what to arrange. Every locality is listed on
    our <a href="{{ url('/city/gangtok') }}">Gangtok page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Four Gangtok localities: the homes, what the tutor needs to know, and a timing tip</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Homes</th><th scope="col">Tell the tutor</th><th scope="col">Timing</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $gkA('development-area', 'Development Area') !!}</td><td>Flats in four- and five-storey concrete buildings among offices and banks, with some older wooden houses</td><td>The building name, the floor, and whether the entrance is at road level or down steps</td><td>Central roads are busy in the evening, so fix one slot with a margin</td></tr>
      <tr><td>{!! $gkA('tadong', 'Tadong') !!}</td><td>Flats in buildings on the highway and houses on the slopes behind them</td><td>Upper or Lower Tadong, and the path from the highway</td><td>The Daragaon bazaar stretch slows evenings; a tutor from Tadong or Deorali is the easiest fit</td></tr>
      <tr><td>{!! $gkA('syari', 'Syari') !!}</td><td>Government staff housing colonies and residential buildings, with few shops</td><td>Block and quarter number, and whether the colony entrance asks visitors' names</td><td>Traffic enters through Deorali junction, so a tutor already in Syari saves the evening</td></tr>
      <tr><td>{!! $gkA('sichey', 'Sichey') !!}</td><td>Flats and houses across Upper, Middle and Lower Sichey, with the bypass running through the middle</td><td>Which Sichey, the floor, or the steps from the road</td><td>Avoid office hours on the bypass; a weekday slot after the rush works well</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The zone pages for <a href="{{ url('/city/gangtok/zone/deorali-tadong-ranipool') }}">Deorali, Tadong and
    Ranipool</a> and <a href="{{ url('/city/gangtok/zone/sichey-burtuk-bojoghari') }}">Sichey, Burtuk and
    Bojoghari</a> add more on timing, and the <a href="{{ url('/blog/gangtok-home-tuition-guide') }}">Gangtok home
    tuition guide</a> walks through every part of the city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtkm-rain">Heavy rain and the online backup</h2>
  <p>
    In the monsoon, a downpour can make a hillside visit slow for an evening or two. Settle the rule in the first
    week: on those days the class runs online at the normal time with the same tutor. Maths survives the switch only if
    the tutor can see the working as it happens, so prop a second phone above the notebook or use a shared whiteboard.
    The <a href="{{ url('/online-tutor-gangtok') }}">online tutor for Gangtok</a> page explains the set-up, and
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> compares the two formats.
    Online is also the realistic route to an ISC, IB or IGCSE specialist when nobody suitable lives within reach.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtkm-demo">Judging the free demo in one hour</h2>
  <p>
    Ask the tutor to teach the chapter your child's class is on this week, and keep an eye on four things:
  </p>
  <ul>
    <li><strong>A check before a lecture.</strong> A good tutor asks two or three questions to find the level before explaining anything.</li>
    <li><strong>Mistakes given names.</strong> A sign error, a misread question and a missing method each need a different fix; listen for the tutor saying which is which.</li>
    <li><strong>Board-shaped working.</strong> For CBSE, the steps the marking scheme credits; for ICSE, working that shows every stage, since the method earns marks.</li>
    <li><strong>A next step.</strong> You should leave with homework and a plan for the coming fortnight.</li>
  </ul>
  <p>
    If the fit is wrong, say so and we arrange a demo with the next tutor on your shortlist; switching tutor later is
    free too. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has further
    questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtkm-fees">What does a maths home tutor in Gangtok charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets a rate.
    What moves it is the class and course, the tutor's experience with that paper, the trip up or down to your home at
    the hour you choose, and the number of sessions a week. The <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and our <a href="{{ url('/blog/home-tuition-fees-gangtok') }}">Gangtok home tuition fees</a> article
    list the questions worth asking, and every fee on your shortlist is visible before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtkm-ask">How to ask for maths tutors in Gangtok</h2>
  <p>
    Send us the class; the board and course (CBSE Standard or Basic, ICSE, ISC, or an international course); your
    locality with a landmark and how the home is reached from the road; the days and times you can offer; and a
    budget. We return two or three matched maths tutors with their fees, and you choose one for a free demo. When no
    suitable tutor can reach you at that hour, we suggest an online or mixed plan instead. NXTutors is based in Sector
    66, Gurugram, and teaches online across India. You can also
    <a href="{{ url('/tutors') }}">browse tutor profiles</a>, <a href="{{ url('/demo-class') }}">book a free demo
    class</a>, or read the national <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page. For science,
    see the Gangtok <a href="{{ url('/science-home-tutor-gangtok') }}">science</a> and
    <a href="{{ url('/physics-home-tutor-gangtok') }}">physics</a> tutor pages, and the
    <a href="{{ url('/cbse-home-tutor-gangtok') }}">CBSE home tutor in Gangtok</a> page covers the board as a whole.
  </p>
  <p>
    Maths teachers living in Gangtok who want students close to home can see open requests on the
    <a href="{{ url('/tuition-jobs/gangtok') }}">Gangtok tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
