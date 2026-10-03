{{--
  Long-form guide for the "maths home tutor Itanagar" page (state-capital wave 2,
  compact depth, subjects writer, 3 Oct 2026). Authors in config: Ajay Vatsyayan
  (role: IB, IGCSE and ISC maths) and Abhinandan Tiwary (role: Class 10 CBSE and
  ICSE maths); role statements only, no anecdotes, years or results.

  Board position: CBSE's own affiliation overview lists the government schools of
  Arunachal Pradesh among the schools affiliated to CBSE, which conducts the Class X
  and XII examinations for affiliated schools
  (https://saras.cbse.gov.in/saras/attach/CHAPTER_1_CBSE_AN_OVERVIEW.pdf, read
  3 Oct 2026). No state board is named or described.

  Exam facts reuse the checked statements already on the site:
  cbse-class-10-maths-preparation (unit marks, sections, Standard/Basic demand
  split, no calculator, pi 22/7), cbse-class-10-board-year-plan-gurgaon (80 + 20,
  two Class 10 exams), cbse-home-tutor-gurgaon (Class 9 Advanced paper, Basic and
  Standard ending with the 2026-27 Class X batch), cbse-class-12-maths-calculusalgebra
  (38 questions, calculus 35), jee-preparation-gurgaon-coaching-or-home-tutor
  (JEE Main 2026 pattern), icse-isc-maths-gurgaon-guide and -ib-math-aaai-slhl.

  Local facts only from database/seo-content/areas/itanagar-research.json. No
  school, college, institute, society or people's names, no distances or travel
  times, only the allowed fee sentence. Area links render only for active areas.
--}}
@php
  $itmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $itmA = function (string $slug, string $label) use ($itmSlugs) {
      return in_array($slug, $itmSlugs, true)
          ? '<a href="' . e(url('/city/itanagar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide itm-guide" aria-labelledby="itmGuideTitle">
  <h2 id="itmGuideTitle">Maths home tutor in Itanagar: one main board, two towns and a highway between them</h2>

  <p class="nx-guide__lede">
    Maths tuition in the capital region starts from a simpler place than in most state capitals. CBSE's own
    affiliation overview lists the government schools of Arunachal Pradesh among its affiliated schools, so a great many
    children in Itanagar and Naharlagun write CBSE maths papers built on NCERT books. The harder question
    is geography. The capital runs along one highway from Chimpu and Ganga Market through the sectors of central
    Itanagar to Naharlagun, Nirjuli and Banderdewa, on hill roads that slow down in heavy rain. Tell NXTutors your
    child's class and your locality, and we suggest two or three maths tutors who can reach you at a workable hour,
    with each fee visible before you meet anyone. The first class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#itm-board">The board question</a> ·
    <a href="#itm-middle">Classes 6 to 9</a> ·
    <a href="#itm-ten">CBSE Class 10</a> ·
    <a href="#itm-twelve">Class 12 and JEE</a> ·
    <a href="#itm-other">Other courses</a> ·
    <a href="#itm-route">Along the highway</a> ·
    <a href="#itm-demo">The demo</a> ·
    <a href="#itm-rain">Rain and online</a> ·
    <a href="#itm-fees">Fees</a> ·
    <a href="#itm-ask">Your request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="itm-board">Which board sets your child's maths paper in Itanagar?</h2>
  <p>
    Two authors stand behind this guide. Abhinandan Tiwary writes on Class 10 maths for CBSE and ICSE, and Ajay
    Vatsyayan writes on IB, IGCSE and ISC maths. For many families in the capital the answer to the board question is
    CBSE: the board's overview of affiliation names the government schools of Arunachal Pradesh in its list of
    affiliated schools, alongside private schools that have chosen CBSE. A smaller number of children may follow
    another course through their school, so confirm it before you brief a tutor.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths courses a family in the Itanagar capital region may meet, and the first thing to ask a tutor</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Who sets the final paper</th><th scope="col">Shape of the final assessment</th><th scope="col">First question for the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Class 10</td><td>CBSE</td><td>80 board marks plus 20 assessed by the school</td><td>Have you marked answers against a CBSE scheme?</td></tr>
      <tr><td>CBSE Class 12</td><td>CBSE</td><td>38 compulsory questions for 80, plus 20 internal</td><td>When will calculus start, and how long will it get?</td></tr>
      <tr><td>ICSE or ISC</td><td>CISCE</td><td>An 80-mark written paper with internal or project marks</td><td>Which exam year's syllabus will you teach?</td></tr>
      <tr><td>IB Diploma or IGCSE</td><td>IB; Cambridge</td><td>Timed papers plus an exploration; IGCSE Core or Extended tier</td><td>Which course or tier have you taught lately?</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itm-middle">What should a tutor do in Classes 6 to 9?</h2>
  <p>
    The middle years decide how hard Class 10 feels. Weak fractions, negative numbers and the first steps of algebra
    rarely show up as a crisis in Class 6 or 7; they show up later as a child who understands a lesson in school but
    cannot finish a two-step question alone. A tutor at this stage should spend less time racing through the next
    chapter and more time finding the old gap underneath it.
  </p>
  <ul>
    <li><strong>Classes 6 and 7:</strong> number sense, fractions, ratios and the habit of writing every step in the notebook.</li>
    <li><strong>Class 8:</strong> algebraic expressions, linear equations and the first geometry reasoning, worked slowly until they become routine.</li>
    <li><strong>Class 9:</strong> under CBSE's 2026-27 curriculum every student sits a common 80-mark maths paper, and may add an Advanced paper of 25 marks lasting one hour. It holds only higher-order questions, stays outside the aggregate, and a score of 50% or more is noted on the marksheet.</li>
  </ul>
  <p>
    Our advice on the Advanced paper is plain: secure the common paper first, then attempt Advanced only if your child
    already finds the core work comfortable. A tutor should say honestly which side of that line your child is on.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itm-ten">Where are the marks in CBSE Class 10 maths?</h2>
  <p>
    The 2026-27 Class 10 board paper spreads its 80 marks across fourteen NCERT chapters, grouped into seven units,
    with the same paper design as the previous session. A tutor's weekly plan should follow the weights, not the order
    in which the school happens to teach:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 maths, 2026-27: units by board marks and the slip an Itanagar tutor should hunt for first</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Slip to hunt for</th></tr>
    </thead>
    <tbody>
      <tr><td>Algebra (polynomials, linear pairs, quadratics, progressions)</td><td>20</td><td>Turning a word problem into the wrong equation</td></tr>
      <tr><td>Geometry (triangles, circles)</td><td>15</td><td>Proof steps written without a reason</td></tr>
      <tr><td>Trigonometry, with heights and distances</td><td>12</td><td>Picking a ratio before drawing the figure</td></tr>
      <tr><td>Statistics and probability</td><td>11</td><td>Arithmetic errors inside the frequency table</td></tr>
      <tr><td>Mensuration</td><td>10</td><td>Units lost when solids are combined</td></tr>
      <tr><td>Real numbers; coordinate geometry</td><td>6 each</td><td>Careless work on questions that should be quick marks</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The paper runs in five sections: twenty one-mark items in A (eighteen multiple-choice and two assertion–reason),
    five two-mark questions in B, six three-mark answers in C, four five-mark answers in D, and three four-mark case
    studies in E. Calculators are not allowed, and π is taken as 22/7 unless stated. Standard and Basic maths share the
    chapters but not the demand: roughly 54% of Standard marks test remembering and understanding, against about 75%
    in Basic. CBSE has said the Basic and Standard split ends with the 2026-27 Class 10 batch, so check with the school
    what applies to your child's year.
  </p>
  <p>
    Class 10 now has two board exams. The first is compulsory; a student who passes may take the second to improve up
    to three subjects, maths included. Dates for 2027 had not been announced when we wrote this, so follow
    cbse.gov.in and prepare as if the first sitting is the only one. Read the
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a>, the
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> and our
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itm-twelve">Class 12 maths and JEE: one plan or two?</h2>
  <p>
    A Class 12 student aiming at engineering faces two different examiners. The CBSE board paper asks 38 compulsory
    questions for 80 marks, and calculus alone carries 35 of them, so it deserves the largest share of every week from
    the first month. JEE Main 2026 Paper 1 had 75 questions for 300 marks; 25 were maths, twenty with options and five
    needing a numerical answer, each worth four marks when right and minus one when wrong. Check the next pattern on
    jeemain.nta.nic.in before planning.
  </p>
  <p>
    The two exams reward different habits. The board paper pays for neat, complete working; JEE pays for speed and
    for knowing which question to leave. A sensible week with a home tutor holds one session of timed objective
    problems and one session that ends with a long board answer written out in full and marked. Students who want a
    dedicated entrance tutor can see the national <a href="{{ url('/jee-home-tutor') }}">JEE home tutor</a> page. The
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a>, the
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths topic-wise plan</a> and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page go deeper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itm-other">If your child follows ICSE, ISC, IB or IGCSE</h2>
  <dl>
    <dt><strong>ICSE Class 10</strong></dt>
    <dd>One 80-mark written paper and 20 marks of internal assessment. The <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> explains how working is judged.</dd>
    <dt><strong>ISC Class 12</strong></dt>
    <dd>For the 2027 and 2028 exams CISCE sets a single 80-mark paper of seven compulsory units, with calculus worth 35, and two projects adding 20.</dd>
    <dt><strong>IB Diploma</strong></dt>
    <dd>Analysis and Approaches leans on algebra, calculus and proof; Applications and Interpretation on modelling and statistics. The exploration is 20% at both levels and must be the student's own work. See the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA or AI guide</a>.</dd>
    <dt><strong>Cambridge IGCSE</strong></dt>
    <dd>Core caps the grade at C; Extended runs from A* to G, so the tier needs settling well before entries close.</dd>
  </dl>
  <p>
    Teachers of these courses are few in a capital of this size. Name the course in your first message; if no one
    nearby fits, an online specialist is the practical answer, and the rest of the week can stay at home.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itm-route">How does a maths tutor reach six homes along the capital's highway?</h2>
  <p>
    Many homes in the capital sit inside government colonies, and most tutors travel by two-wheeler, shared taxi or
    auto. The <a href="{{ url('/city/itanagar') }}">Itanagar home tutors page</a> covers every locality; these six
    show the range.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six localities in the Itanagar capital region: the homes, the way in, and one thing to arrange</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Homes</th><th scope="col">Way in</th><th scope="col">Arrange in advance</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $itmA('chimpu', 'Chimpu') !!}</td><td>Staff quarters on official campuses, private houses on the slopes</td><td>A gate where a visitor may give a name</td><td>Share the tutor's name and time with the gate before the demo</td></tr>
      <tr><td>{!! $itmA('niti-vihar', 'Niti Vihar') !!}</td><td>Government quarters and bungalows, private houses on link roads</td><td>Quiet roads that wind up the hill; parking is easier than in the market sectors</td><td>A fixed weekly slot, with an online class ready for heavy rain</td></tr>
      <tr><td>{!! $itmA('e-sector-itanagar', 'E-Sector') !!}</td><td>Officers' colonies and houses above and below the highway</td><td>Sign-in at official colonies; doorstep at private houses</td><td>An early-evening or weekend slot, away from Secretariat office hours</td></tr>
      <tr><td>{!! $itmA('barapani', 'Barapani') !!}</td><td>Houses, quarters and colonies by the highway and the river</td><td>Shared taxi to the market, then on foot</td><td>An earlier slot, since the market stretch is busiest in the evening</td></tr>
      <tr><td>{!! $itmA('naharlagun', 'Naharlagun') !!}</td><td>Quarters, independent houses and buildings around the market</td><td>Shared taxi, then an auto from the daily market to G Extension or E Sector</td><td>A slot after the evening rush at the market junction</td></tr>
      <tr><td>{!! $itmA('nirjuli', 'Nirjuli') !!}</td><td>Institute and government staff housing, colonies and houses</td><td>Campus gates register visitors</td><td>A tutor who also teaches Naharlagun students that afternoon</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Zone pages give more local detail:
    <a href="{{ url('/city/itanagar/zone/itanagar-north-chimpu-ganga') }}">Itanagar North (Chimpu and Ganga)</a>,
    <a href="{{ url('/city/itanagar/zone/central-itanagar') }}">Central Itanagar</a>,
    <a href="{{ url('/city/itanagar/zone/naharlagun-papu-nallah') }}">Naharlagun and Papu Nallah</a> and
    <a href="{{ url('/city/itanagar/zone/nirjuli-banderdewa-doimukh') }}">Nirjuli, Banderdewa and Doimukh</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itm-demo">What should you notice in the free maths demo?</h2>
  <p>
    Ask the tutor to teach the chapter your child is doing in school this week, not a prepared show lesson. Then watch
    for five things:
  </p>
  <ol>
    <li><strong>A check before teaching.</strong> The tutor asks a few questions to find what your child already knows.</li>
    <li><strong>Errors sorted by cause.</strong> Arithmetic, misreading or a missing idea: each is fixed differently.</li>
    <li><strong>CBSE-style working.</strong> Steps laid out the way a board examiner gives step marks.</li>
    <li><strong>Your child doing the writing.</strong> More of the hour spent solving than listening.</li>
    <li><strong>A plan.</strong> You leave knowing the next three sessions and the homework that will be marked.</li>
  </ol>
  <p>
    If the fit is wrong, tell us and we set up a demo with the next tutor on your shortlist; a later change of tutor
    is free as well. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> lists
    more to look for.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itm-rain">Home, online, or both through the rainy months?</h2>
  <p>
    Sitting beside a child, a tutor sees a wrong sign the moment it is written, which matters most for younger
    students and for proofs. Online makes sense when the right specialist lives elsewhere, when a senior student's
    evenings are full, or on days of heavy monsoon rain when hill roads slow down. Many families in the capital agree
    at the start that a wet-day class moves online at the usual hour with the same tutor. The
    <a href="{{ url('/online-tutor-itanagar') }}">online tutors for Itanagar</a> page and the
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a> article cover the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itm-fees">What does a maths home tutor in Itanagar charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their own
    fee. The class, the course, the tutor's experience with it, the journey along the highway to your home and the
    number of sessions a week all play a part. You see every shortlisted fee before the demo, and the
    <a href="{{ url('/blog/home-tuition-fees-itanagar') }}">home tuition fees in Itanagar</a> guide explains what to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itm-ask">What should your request include?</h2>
  <p>
    Send the class, the board and, for Class 10, whether your child is on Standard or Basic; your locality with a
    landmark such as the nearest market or sector; whether the home is inside an official colony; the days and times
    you can offer; and the most you would like to spend per session. We come back with two or three matched maths tutors and their fees, and you choose
    one for the free demo. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>
    before their profile is marked Verified. NXTutors works from Sector 66, Gurugram, and teaches online across India; the
    national <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page shows how we match elsewhere, and the
    <a href="{{ url('/cbse-home-tutor-itanagar') }}">CBSE home tutors in Itanagar</a> page covers the other subjects.
  </p>
  <p>
    Maths teachers who live in the capital region and want students close to home can see open requests on
    <a href="{{ url('/tuition-jobs/itanagar') }}">Itanagar tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
