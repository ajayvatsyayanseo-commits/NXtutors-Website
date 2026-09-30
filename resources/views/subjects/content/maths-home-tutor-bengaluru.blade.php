{{--
  Long-form guide for the "maths home tutor Bengaluru" subject page (authors in
  config: Ajay Vatsyayan for IB, IGCSE and ISC maths; Abhinandan Tiwary for
  Class 10 CBSE and ICSE maths; role statements only, no anecdotes). Local
  facts come only from database/seo-content/areas/bengaluru-research.json
  (zone_facts and area "about" texts, each with sources). Exam facts reuse the
  checked statements in database/seo-content/blog: cbse-class-10-maths-preparation
  (unit marks, section layout, Standard/Basic skill split, no calculators,
  pi = 22/7), cbse-class-10-board-year-plan-gurgaon (80 + 20, two Class 10
  exams), cbse-class-12-maths-calculusalgebra (38 questions, calculus 35),
  icse-isc-maths-gurgaon-guide (ICSE 80 + 20; ISC single 2027/2028 paper,
  seven units, project marking), -ib-math-aaai-slhl (AA/AI, teaching hours,
  paper weights, exploration) and jee-preparation-gurgaon-coaching-or-home-tutor
  (JEE Main 2026 pattern). The Karnataka board (KSEAB: SSLC, PUC) is described
  in general terms only, with no exam pattern. Pink and Blue Lines are
  described only as under construction / not yet open. No school, society,
  mall or people's names, no distances or travel times, only the allowed fee
  sentence.

  Area links render only when that Bengaluru area page exists and is active.
--}}
@php
  $blAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $blA = function (string $slug, string $label) use ($blAreaSlugs) {
      return in_array($slug, $blAreaSlugs, true)
          ? '<a href="' . e(url('/city/bengaluru/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide blm-guide" aria-labelledby="blmGuideTitle">
  <h2 id="blmGuideTitle">Maths home tutor in Bengaluru: match the syllabus first, then the metro line</h2>

  <p class="nx-guide__lede">
    Bengaluru families sit almost every school syllabus the country offers, from the Karnataka SSLC to IB
    Analysis and Approaches, often within one apartment block. A maths tutor who is strong in one of them can be
    lost in another. The other half of the problem is getting across town: the Yellow Line opened only in August 2025,
    and the Blue and Pink Lines are still being built. NXTutors deals with both. Share your child's syllabus and
    your locality, and we come back with two or three maths tutors who suit both, every fee listed in advance. The
    first lesson with whichever tutor you choose is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#blm-code">Syllabus first</a> ·
    <a href="#blm-state">SSLC and PUC</a> ·
    <a href="#blm-sslc10">CBSE Class 10</a> ·
    <a href="#blm-cisce">ICSE and ISC</a> ·
    <a href="#blm-intl">IB and IGCSE</a> ·
    <a href="#blm-senior">Class 12 and JEE</a> ·
    <a href="#blm-lines">Metro lines</a> ·
    <a href="#blm-local">Six neighbourhoods</a> ·
    <a href="#blm-month">The first month</a> ·
    <a href="#blm-fees">Fees</a> ·
    <a href="#blm-brief">Your request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="blm-code">Why do we ask for the syllabus before the class?</h2>
  <p>
    The Class 10 maths paper of one board and the Class 10 maths paper of another reward different habits, so
    "Class 9 maths" tells us little on its own. On this page, Abhinandan Tiwary is responsible for the CBSE and ICSE
    Class 10 advice, and Ajay Vatsyayan for the ISC, IB and IGCSE advice. Before anything else, check which of
    these your child is on:
  </p>
  <ul>
    <li><strong>CBSE.</strong> NCERT books; in Class 10 a choice between Mathematics Standard (041) and Basic (241).</li>
    <li><strong>ICSE and ISC.</strong> CISCE sets the syllabus; each school picks its own textbooks within it.</li>
    <li><strong>Karnataka state board.</strong> SSLC at the end of Class 10, then the two-year Pre-University Course.</li>
    <li><strong>IB Diploma.</strong> Analysis and Approaches or Applications and Interpretation, each at SL or HL.</li>
    <li><strong>Cambridge IGCSE.</strong> A Core tier and an Extended tier, chosen by the school with the family.</li>
  </ul>
  <p>
    Ask a new tutor which of these they have taught in the last two years, and for which class. A clear answer is
    worth more than a long list of boards.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blm-state">What about Karnataka SSLC and PUC maths?</h2>
  <p>
    Many Bengaluru children study under the Karnataka state board. Its Class 10 examination is the SSLC, and Classes
    11 and 12 are taught as the first and second years of the Pre-University Course, often in a separate PU college.
    Both examinations are conducted by the Karnataka School Examination and Assessment Board, which posts its
    notices and timetables on kseab.karnataka.gov.in. We keep this page general, so read the board's own
    notices for the current paper design rather than relying on older guides. When you ask us for a tutor, say
    "SSLC" or "second PUC" in so many words; we then look for someone who has taught that course, because a plan
    built for CBSE does not carry across unchanged.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blm-sslc10">How is the CBSE Class 10 maths paper built?</h2>
  <p>
    The board paper is worth 80 marks over three hours, and the school awards the remaining 20. The design is the
    same as last session, so recent sample papers are still the right material. Standard and Basic share one layout:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 maths, 2026-27: the five sections and what a tutor should check in each</caption>
    <thead>
      <tr><th scope="col">Section</th><th scope="col">Questions</th><th scope="col">Marks</th><th scope="col">Check in tuition</th></tr>
    </thead>
    <tbody>
      <tr><td>A</td><td>20 one-mark items: 18 multiple-choice, 2 assertion–reason</td><td>20</td><td>Speed without careless sign errors</td></tr>
      <tr><td>B</td><td>5 short answers</td><td>2 each</td><td>Two clean steps, nothing skipped</td></tr>
      <tr><td>C</td><td>6 answers</td><td>3 each</td><td>Proofs with a reason on every line</td></tr>
      <tr><td>D</td><td>4 long answers</td><td>5 each</td><td>Word problems set up as equations first</td></tr>
      <tr><td>E</td><td>3 case studies</td><td>4 each</td><td>Reading the passage before touching numbers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    By unit, algebra is worth 20, geometry 15, trigonometry 12, statistics and probability 11, mensuration 10, and
    real numbers and coordinate geometry 6 apiece. There are no calculators, and π is 22/7 unless stated. The two
    levels differ in the kind of thinking tested: roughly 54% of Standard marks are for remembering and understanding,
    against about 75% in Basic. Children who may choose maths in Class 11 are usually better off on Standard; settle
    it with the school before the registration deadline.
  </p>
  <p>
    Since 2026 there is a compulsory main board exam and a second, optional one in which a student can try to raise
    the score in up to three subjects, maths among them. Dates for 2027 are not yet out; watch cbse.gov.in. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a> goes chapter by
    chapter, the <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year plan</a> lays out
    the months, and the <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page covers matching.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blm-cisce">ICSE and ISC maths: what has changed?</h2>
  <p>
    ICSE Class 10 maths is a single three-hour paper of 80 marks, with 20 for internal work, and CISCE schools expect
    each step of working to be shown neatly. In ISC Class 12, the paper for the 2027 and 2028 examinations lists
    seven units in one 80-mark paper. The old option between Section B and Section C has gone, so vectors,
    three-dimensional geometry, linear programming and probability are now for everyone. Calculus alone carries 35.
    Project work adds 20: two projects, each out of 10, split as format 1, content 4, findings 2 and viva 3. Many
    revision books still follow the old layout, so check the exam year printed on the cover. The
    <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> and the
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blm-intl">IB and IGCSE: which decisions come first?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Early decisions for IB Diploma and Cambridge IGCSE maths, and what a tutor should bring to each</caption>
    <thead>
      <tr><th scope="col">Decision</th><th scope="col">What the course says</th><th scope="col">Where a tutor helps</th></tr>
    </thead>
    <tbody>
      <tr><td>AA or AI</td><td>AA is algebra, functions, calculus and proof, with one paper sat without a calculator; AI is modelling and statistics, with a graphic display calculator in every paper</td><td>Looking honestly at the student's algebra before the choice is locked</td></tr>
      <tr><td>SL or HL</td><td>150 recommended teaching hours at SL, 240 at HL; SL has two papers at 40% each, HL two at 30% and a third at 20%</td><td>Pacing: HL needs regular extra problem work from the first term</td></tr>
      <tr><td>The exploration</td><td>20% at both levels, and it must be the student's own work</td><td>Explaining the criteria and questioning a draft, never writing it</td></tr>
      <tr><td>IGCSE tier</td><td>Core allows grades up to C; Extended runs A* to G</td><td>Advising on the tier early, with the school</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Read the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA or AI guide</a> for the detail, and the
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">guide to moving from CBSE to IB or IGCSE</a>
    if your child is changing board.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blm-senior">How does a tutor balance Class 12 maths with JEE Main?</h2>
  <p>
    The CBSE Class 12 paper asks 38 compulsory questions for 80 marks, and calculus accounts for 35 of those marks,
    so calculus should take the biggest slice of the week from the start of the session. In JEE Main 2026, Paper 1
    had 75 questions for 300 marks; 25 were maths, 20 multiple-choice and 5 numerical-answer, with +4 for a right
    answer and −1 for a wrong one. Check jeemain.nta.nic.in before relying on any pattern for the next session.
  </p>
  <p>
    For a student already in coaching, the useful split is simple: the first part of the session clears the problems
    the coaching sheet left unsolved, and the last part is one full board-style answer, marked. Neither target is
    dropped for a month. Families on the state board should ask the same of a second PUC tutor. See the
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a>, the
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths topic-wise guide</a> and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blm-lines">Which metro line gives your tutor the easiest trip?</h2>
  <p>
    Bengaluru's metro is growing in stages, and a tutor who can ride one line to a station near you is much easier
    to schedule every week. Tutors in every zone are listed on our <a href="{{ url('/city/bengaluru') }}">Bengaluru
    page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Namma Metro lines and the tutoring zones they serve, as of October 2026</caption>
    <thead>
      <tr><th scope="col">Line</th><th scope="col">Status</th><th scope="col">Zones it helps</th></tr>
    </thead>
    <tbody>
      <tr><td>Purple</td><td>Open from Whitefield (Kadugodi) in the east to Challaghatta in the west</td><td>Whitefield and KR Puram, Indiranagar, Ulsoor, Vijayanagar, RR Nagar and Kengeri</td></tr>
      <tr><td>Green</td><td>Open from the Tumkur Road suburbs through the centre and south along Kanakapura Road</td><td>Malleshwaram and Rajajinagar, Jayanagar, JP Nagar, Banashankari</td></tr>
      <tr><td>Yellow</td><td>Open since August 2025, parallel to Hosur Road towards Bommasandra</td><td>BTM Layout, Silk Board and HSR side, Bommanahalli, Electronic City</td></tr>
      <tr><td>Blue</td><td>Under construction along the Outer Ring Road and on to the airport; no section open</td><td>Later: HSR, Bellandur, Marathahalli, Hennur side, Hebbal, Yelahanka</td></tr>
      <tr><td>Pink</td><td>Under construction, including the Bannerghatta Road stretch and the underground section near Frazer Town; not yet open</td><td>Later: Bannerghatta Road, Arekere, Cooke Town and Frazer Town</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Until the Blue and Pink Lines run, families along the Outer Ring Road and in the north-east usually fare better with a
    tutor who already lives in the same belt.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blm-local">What does a weekly maths slot look like in six neighbourhoods?</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>South-east and south</h3>
      <p>
        {!! $blA('koramangala', 'Koramangala') !!} has eight numbered blocks, with the Inner Ring Road between blocks
        1 to 4 and 5 to 8. The inner cross roads are mostly houses, so the tutor comes to the door; apartment
        buildings ask for a name at the gate. An early-evening or weekend-morning slot is easier than the Hosur Road
        rush. {!! $blA('jayanagar', 'Jayanagar') !!}, founded in 1948, has had South End Circle and Jayanagar stations
        on the Green Line since June 2017, and most homes are independent houses on tree-lined blocks.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Hosur Road and the east</h3>
      <p>
        {!! $blA('electronic-city', 'Electronic City') !!}, set up in 1978 as an industrial township, is now ringed by
        large gated communities; register the tutor at the gate. Yellow Line stations here opened in August 2025, and
        the elevated expressway from Silk Board helps tutors on the road. {!! $blA('indiranagar', 'Indiranagar') !!}
        has had two Purple Line stations since 2011, so a metro tutor has only a short last stretch; a session that
        starts before the evening crowd on 100 Feet Road is easier to keep.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Far east and north-west</h3>
      <p>
        {!! $blA('whitefield', 'Whitefield') !!} has had the Purple Line since March 2023, ending at the Whitefield
        (Kadugodi) terminus. Gated communities want the tutor's details with security before the first class, and
        weekday slots run more smoothly away from office shift changes. {!! $blA('malleshwaram', 'Malleshwaram') !!}, laid
        out in 1889 on a grid of crosses and mains, is mostly houses and small buildings with no society gate, and
        three Green Line stations bring tutors in from Rajajinagar and beyond.
      </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blm-month">What should the first month with a new maths tutor include?</h2>
  <ol>
    <li><strong>Week 1: a diagnosis.</strong> One short paper from the last completed chapters, marked in front of your child, with every lost mark sorted into concept, method or carelessness.</li>
    <li><strong>Week 2: a written plan.</strong> Which chapters come first, how many sessions each, and when the first timed practice will be.</li>
    <li><strong>Week 3: an error log.</strong> Each wrong answer copied out, corrected and tried again a few days later.</li>
    <li><strong>Week 4: a timed section.</strong> One section of a sample or specimen paper done against the clock and marked the way the board marks it.</li>
  </ol>
  <p>
    If a month passes without these, tell us. We set up a demo with the next tutor on your shortlist, and a change of
    tutor is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blm-mix">Is online maths ever the better choice in Bengaluru?</h2>
  <p>
    Home lessons let a tutor watch every line being written, and for most children that is the point. Two cases
    change the picture. Specialists in IB HL, ISC or IGCSE Extended are fewer than CBSE tutors, and the nearest may
    live across the city; one online session with the specialist plus one home session with a nearby tutor covers
    both. And on coaching evenings, an online hour spares a late trip for everyone. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> article weighs it up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blm-fees">How much does a maths home tutor in Bengaluru charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    rates, and the figure usually tracks the syllabus and class, the tutor's experience with that paper, the journey
    to your zone at your chosen hour and the number of weekly sessions. You see every shortlisted fee before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blm-brief">What goes into a good request?</h2>
  <p>
    Five things: the class, the syllabus by its exact name (for example "CBSE Standard", "second PUC" or "IB AA
    HL"), your neighbourhood with its block, phase, stage or sector, the days and hours you can offer, and your
    budget. We send two or three maths tutors with their fees, and you choose one for a free demo class. If nobody
    suitable can reach your part of Bengaluru at that hour, we suggest online or split-week lessons. NXTutors is
    based in Sector 66, Gurugram, and teaches online across India; the national
    <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page explains how matching works everywhere.
  </p>
  <p>
    Maths teachers living in Bengaluru who want students nearby can see open requests on the
    <a href="{{ url('/tuition-jobs/bengaluru') }}">Bengaluru tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
