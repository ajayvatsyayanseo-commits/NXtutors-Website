{{--
  Long-form guide for the "maths home tutor Leh" page (state/UT capitals wave 2,
  compact depth, subjects writer, 3 Oct 2026). Authors in config: Ajay Vatsyayan
  (role: IB, IGCSE and ISC maths) and Abhinandan Tiwary (role: Class 10 CBSE and
  ICSE maths); role statements only, no anecdotes, years or results.

  Board position only from the "board_facts" block of
  database/seo-content/areas/leh-research.json: CBSE's own affiliation list
  (https://saras.cbse.gov.in/saras/AffiliatedList/ListOfSchdirReport) has a
  separate entry for Ladakh, with government high and higher secondary schools
  across Leh district on it alongside private schools; CBSE's Mohali regional
  office covers the UT of Ladakh (https://www.cbse.gov.in/cbsenew/ro.html). No
  other board is named for Leh, no switch year and no school counts are given.

  Exam facts reuse checked statements already on the site:
  cbse-class-10-maths-preparation (unit marks, five sections, Standard/Basic
  demand split, no calculator, pi 22/7), cbse-class-10-board-year-plan-gurgaon
  (80 + 20, two Class 10 exams), cbse-home-tutor-gurgaon (Class 9 Advanced
  paper; Basic and Standard ending with the 2026-27 Class X batch),
  cbse-class-12-maths-calculusalgebra (38 questions, calculus 35),
  jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern),
  icse-isc-maths-gurgaon-guide and -ib-math-aaai-slhl.

  Local facts only from leh-research.json. Strictly practical: no politics,
  security, tourism; landmarks only to find a home; winter only as timing advice.
  No school, college, society or people's names, no distances or travel times,
  only the allowed fee sentence. Area links render only for active areas.
--}}
@php
  $lhmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $lhmA = function (string $slug, string $label) use ($lhmSlugs) {
      return in_array($slug, $lhmSlugs, true)
          ? '<a href="' . e(url('/city/leh/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide lhm-guide" aria-labelledby="lhmGuideTitle">
  <h2 id="lhmGuideTitle">Maths home tutor in Leh: CBSE papers, village routes and a plan that lasts through winter</h2>

  <p class="nx-guide__lede">
    A maths tutor in Leh has two jobs. The first is the syllabus: CBSE's own affiliation list carries Ladakh as a separate entry, with government high and higher
    secondary schools across Leh district on it beside private schools, so a large share of children here prepare for
    CBSE maths papers written from NCERT books. The second is the calendar. Lessons that run smoothly in September have
    to survive the long winter break, in a town whose families live as much in Indus valley villages as in the bazaar. Send NXTutors your child's class and village or locality, and we suggest
    two or three maths tutors who could keep a regular hour with you, with each fee shown before you meet. The first
    class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#lhm-board">Board and course</a> ·
    <a href="#lhm-early">Classes 6 to 9</a> ·
    <a href="#lhm-ten">The Class 10 paper</a> ·
    <a href="#lhm-senior">Classes 11, 12 and JEE</a> ·
    <a href="#lhm-other">ISC, IB, IGCSE</a> ·
    <a href="#lhm-homes">Six homes, three zones</a> ·
    <a href="#lhm-winter">Summer and winter</a> ·
    <a href="#lhm-demo">The demo</a> ·
    <a href="#lhm-fees">Fees</a> ·
    <a href="#lhm-send">Your request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="lhm-board">Which course is your child's maths written for?</h2>
  <p>
    This page is written around two author roles: Abhinandan Tiwary covers Class 10 maths for CBSE and ICSE, and Ajay
    Vatsyayan covers maths for IB, IGCSE and ISC. In Leh the starting point is usually CBSE. The board's regional
    office at Mohali lists the UT of Ladakh within its area, and its affiliation list includes government schools in
    the town and in villages such as Stok, Phyang and Thiksey. CBSE affiliation is granted at secondary and senior
    secondary level, so for the primary and middle years ask the school which books and tests it uses before you
    brief a tutor.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths courses a Leh family may be dealing with, the final assessment, and what to ask a tutor first</caption>
    <thead>
      <tr><th scope="col">Level</th><th scope="col">Final assessment</th><th scope="col">Ask the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Class 10</td><td>A board paper of 80 marks; the school adds 20</td><td>Which recent CBSE sample paper have you marked with a student?</td></tr>
      <tr><td>CBSE Class 12</td><td>80 marks over 38 compulsory questions, plus 20 internal</td><td>How many weeks will calculus get in your plan?</td></tr>
      <tr><td>ICSE or ISC (through CISCE)</td><td>An 80-mark written paper with internal or project work</td><td>Which exam year's CISCE syllabus will you follow?</td></tr>
      <tr><td>IB Diploma or Cambridge IGCSE</td><td>Timed papers; an IB exploration; IGCSE in Core or Extended tier</td><td>Which course, level or tier have you taught recently?</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhm-early">Classes 6 to 9: what should tuition fix before the board years?</h2>
  <p>
    Most Class 10 trouble began years earlier. A child unsure of fractions, signed numbers or rearranging an equation
    can follow the class and still freeze at a two-step question done alone. A good tutor here checks first, lists the gaps, then repairs them alongside the school chapter.
  </p>
  <ul>
    <li><strong>Classes 6 and 7:</strong> place value, fractions and decimals, ratio, and a notebook where every line of working is written down.</li>
    <li><strong>Class 8:</strong> algebraic expressions and simple equations, practised until a child can set up the equation from words alone.</li>
    <li><strong>Class 9:</strong> in CBSE's 2026-27 scheme all students write one common 80-mark maths paper. An optional Advanced paper sits beside it: one hour, 25 marks, only higher-order questions, outside the aggregate, with a score of 50% or more recorded on the marksheet.</li>
  </ul>
  <p>
    Treat the Advanced paper as a stretch for a child who is already comfortable, not a target for one who is still
    catching up. A tutor should give you a straight answer on which group your child is in.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhm-ten">How are the 80 marks of the CBSE Class 10 maths paper spread?</h2>
  <p>
    For 2026-27 the paper keeps last session's design. The 80 board marks come from fourteen NCERT chapters grouped
    into seven units, and a weekly plan should lean on the weights rather than on whatever chapter the school is
    teaching that month:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 maths, 2026-27: board marks per unit and a habit for a Leh tutor to build</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Habit to build</th></tr>
    </thead>
    <tbody>
      <tr><td>Algebra: polynomials, pairs of linear equations, quadratics, arithmetic progressions</td><td>20</td><td>Write the unknown and the equation in words before solving</td></tr>
      <tr><td>Geometry: triangles and circles</td><td>15</td><td>A reason beside every statement in a proof</td></tr>
      <tr><td>Trigonometry, including heights and distances</td><td>12</td><td>Draw and label the figure before choosing a ratio</td></tr>
      <tr><td>Statistics and probability</td><td>11</td><td>Check the frequency-table arithmetic column by column</td></tr>
      <tr><td>Mensuration</td><td>10</td><td>Carry the unit through every line when solids are joined</td></tr>
      <tr><td>Real numbers, and coordinate geometry</td><td>6 each</td><td>Bank these quickly and cleanly; they should cost nothing</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The paper has five sections. Section A holds twenty one-mark items, eighteen of them multiple-choice and two
    assertion–reason; B has five two-mark questions; C has six worth three marks; D has four long answers of five
    marks; and E closes with three case-study questions of four marks. No calculator is allowed, and π is 22/7 unless
    the question says otherwise. The Standard and Basic papers cover identical chapters at different depths, with roughly 54% of
    Standard marks on recall and understanding against about 75% for Basic. CBSE has said the two-level system stops
    after the 2026-27 Class 10 batch; the school can confirm what applies to your child.
  </p>
  <p>
    Class 10 also has two board exams now. Everyone sits the first; those who clear it can use the second to
    raise their marks in as many as three subjects, maths included. The 2027 dates had not been announced when this was written; watch
    cbse.gov.in and prepare as though the first exam is the only one. For a fuller plan see the
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a>, the
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> and the
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhm-senior">Classes 11 and 12: can one tutor cover the board and JEE?</h2>
  <p>
    Usually yes, if the week is split on purpose. The CBSE Class 12 paper has 38 compulsory questions worth 80 marks,
    and calculus alone accounts for 35 of them, so calculus deserves the largest block of time from the start of the
    year. Class 11 matters just as much: functions, limits and coordinate work there are the ground that Class 12
    calculus is built on, and gaps left in Class 11 are expensive to repair later.
  </p>
  <p>
    JEE Main asks something different. Its 2026 Paper 1 carried 25 maths questions among 75 in all, out of 300
    marks: twenty with options and five needing a number, at plus four for a right answer and minus one for a wrong
    one. Confirm the next pattern on jeemain.nta.nic.in before planning around it. A workable rhythm is one
    session of timed objective questions and one that ends with a full board-style answer written out and marked.
    For a separate entrance specialist, often online, see the national
    <a href="{{ url('/jee-home-tutor') }}">JEE home tutor</a> page. The
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a>, the
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths topic-by-topic plan</a> and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page go into more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhm-other">ISC, IB and IGCSE maths for Leh students</h2>
  <p>
    A few Leh children follow another course, and each needs a tutor who knows that paper:
  </p>
  <ul>
    <li><strong>ICSE Class 10:</strong> one written paper out of 80, with 20 more from internal work; examiners look hard at method. The <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> explains how.</li>
    <li><strong>ISC Class 12:</strong> for the 2027 and 2028 exams CISCE sets one 80-mark paper of seven compulsory units, calculus carrying 35, with two projects adding 20.</li>
    <li><strong>IB Diploma:</strong> AA is the more algebraic, proof-heavy route and AI the one built on modelling and statistics; at both SL and HL a written exploration, done by the student alone, makes up 20% of the grade. See the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA or AI guide</a>.</li>
    <li><strong>Cambridge IGCSE:</strong> the Core tier tops out at grade C, while Extended runs from A* to G, so settle the tier well before entries close.</li>
  </ul>
  <p>
    Teachers of these courses are hard to find in a town of Leh's size. An online specialist for the course, with a
    local tutor for school homework if needed, is often the realistic answer.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhm-homes">How does a maths tutor reach six homes across three zones?</h2>
  <p>
    In Leh, finding the house is part of the first lesson. Many homes go by a house name or a cluster rather than a
    street number, and tutors usually come by two-wheeler or car. The
    <a href="{{ url('/city/leh') }}">Leh home tutors page</a> lists every locality; these six show the range.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Leh localities: the setting, how a tutor finds the home, and a slot tip for maths</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Setting</th><th scope="col">Finding the home</th><th scope="col">Slot tip</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $lhmA('main-bazaar-old-town', 'Main Bazaar & Old Town') !!}</td><td>Homes beside shops and offices, and old-town houses up narrow lanes</td><td>The tutor walks the last stretch; send a lane landmark</td><td>Early morning or late evening in the busy summer months</td></tr>
      <tr><td>{!! $lhmA('housing-colony', 'Housing Colony') !!}</td><td>A residential colony with its own main market and community hall</td><td>Name the market or the hall as the meeting point</td><td>An evening slot that a tutor already in town can add</td></tr>
      <tr><td>{!! $lhmA('choglamsar', 'Choglamsar') !!}</td><td>A census town on the Indus with homes, offices and nurseries</td><td>Reachable by the Spituk road or the Saboo road</td><td>Avoid the busiest highway hours in summer</td></tr>
      <tr><td>{!! $lhmA('phyang', 'Phyang') !!}</td><td>A long village of eight clusters among fields</td><td>Say which cluster before the first class</td><td>Weekend or late afternoon for a tutor coming from Leh or Spituk</td></tr>
      <tr><td>{!! $lhmA('stok', 'Stok') !!}</td><td>Family houses on the southern bank of the Indus</td><td>Since 2019 a suspension bridge links it with Choglamsar</td><td>Midday in the coldest months, or online</td></tr>
      <tr><td>{!! $lhmA('thiksey', 'Thiksey') !!}</td><td>A block and tehsil headquarters with houses spread among fields</td><td>Share the cluster name and a clear landmark</td><td>Pair with a tutor who already teaches in Shey or Choglamsar</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The zone pages add more: <a href="{{ url('/city/leh/zone/leh-town-centre') }}">Leh Town Centre</a>,
    <a href="{{ url('/city/leh/zone/choglamsar-spituk-west') }}">Choglamsar, Spituk and the west</a> and
    <a href="{{ url('/city/leh/zone/indus-valley-south-east') }}">the Indus valley south and east</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhm-winter">Summer and winter: two timetables for one school year</h2>
  <p>
    Leh's winters are long and cold, running from late November into early March, and the school year has a long
    winter break inside them. Maths skills fade quickly without practice, so plan two timetables at the start
    rather than improvising in December.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A maths tuition plan for Leh across the year: home visits, online lessons and what each period is for</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">Typical arrangement</th><th scope="col">What the time is for</th></tr>
    </thead>
    <tbody>
      <tr><td>Term time, warmer months</td><td>Regular home visits, timed around the busy summer roads</td><td>Following the school chapter and fixing old gaps</td></tr>
      <tr><td>Early winter</td><td>Shorter visits at midday, when it is warmest</td><td>Finishing the syllabus and starting mixed practice</td></tr>
      <tr><td>The long winter break</td><td>Online lessons with the same tutor, or a mix of online and an occasional visit</td><td>Revision, sample papers and the next class's first chapters</td></tr>
      <tr><td>Return to school</td><td>Back to home visits</td><td>Checking what stuck and closing new gaps</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Online maths goes well when the student writes on paper and shows each step to the camera or sends a photo
    straight after. The <a href="{{ url('/online-tutor-leh') }}">online tutors for Leh</a> page and the
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a> article cover the set-up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhm-demo">What should you look for in the free maths demo?</h2>
  <p>
    Ask the tutor to teach whatever chapter your child is on at school this week, and keep the notebook open on the
    table. Five signs are worth more than a polished explanation:
  </p>
  <ol>
    <li><strong>Questions before teaching.</strong> The tutor checks what your child already knows.</li>
    <li><strong>Mistakes named by type.</strong> A slip in arithmetic, a misread question and a missing concept are treated differently.</li>
    <li><strong>Board-style steps.</strong> Working laid out so that an examiner can award step marks.</li>
    <li><strong>Pen in your child's hand.</strong> Most of the hour spent solving, not listening.</li>
    <li><strong>A short plan.</strong> You know the next few sessions and what homework will be checked.</li>
  </ol>
  <p>
    If the fit feels wrong, the next shortlisted tutor gives a demo instead, and a later change of tutor costs nothing. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhm-fees">What does a maths home tutor in Leh charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Every tutor sets their
    own fee. The class, the course, the tutor's experience with it, how far the visit takes them into the valley and
    how many sessions you want each week all play a part, and some tutors charge differently for online lessons. You
    see each shortlisted fee before the demo, and the
    <a href="{{ url('/blog/home-tuition-fees-leh') }}">home tuition fees in Leh</a> guide lists the questions to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhm-send">What should your request say?</h2>
  <p>
    Tell us the class and board, and for Class 10 whether your child is on Standard or Basic; your locality or village
    with a landmark such as a market, a community hall or the cluster name; where a vehicle can stop; the days and
    times you can offer in term and in winter; and a budget. Our reply names two or three maths tutors with their fees; you
    pick whom to meet at the free demo. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live. Our office is in
    Sector 66, Gurugram; online lessons reach every state. The national
    <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page shows how we match elsewhere, the
    <a href="{{ url('/cbse-home-tutor-leh') }}">CBSE home tutors in Leh</a> page covers the other subjects, and the
    <a href="{{ url('/blog/leh-home-tuition-guide') }}">Leh home tuition guide</a> walks through each zone.
  </p>
  <p>
    Maths teachers living in or around Leh who want students nearby can see open requests on
    <a href="{{ url('/tuition-jobs/leh') }}">Leh tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
