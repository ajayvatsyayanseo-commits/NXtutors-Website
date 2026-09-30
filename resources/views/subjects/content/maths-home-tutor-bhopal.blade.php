{{--
  Long-form guide for the "maths home tutor Bhopal" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Local facts come only from
  database/seo-content/areas/bhopal-research.json (zone_facts and area "about"
  texts, each with sources). Exam facts reuse the checked statements in
  database/seo-content/blog: cbse-class-10-maths-preparation (unit marks,
  section layout, Standard/Basic skill split, no calculators, pi = 22/7),
  cbse-class-10-board-year-plan-gurgaon (80 + 20, two Class 10 exams),
  cbse-class-12-maths-calculusalgebra (38 questions, calculus 35),
  icse-isc-maths-gurgaon-guide (ICSE 80 + 20; ISC single 2027/2028 paper,
  seven units, project marking), -ib-math-aaai-slhl (AA/AI, teaching hours,
  paper weights, exploration) and jee-preparation-gurgaon-coaching-or-home-tutor
  (JEE Main 2026 pattern). The MP Board (Board of Secondary Education, Madhya
  Pradesh) is named and described in general terms only, with no exam
  pattern. No school, hospital, society, mall or people's names (metro
  terminus and stations described without institution names), no distances
  or travel times, only the allowed fee sentence.

  Area links render only when that Bhopal area page exists and is active.
--}}
@php
  $bpAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $bpA = function (string $slug, string $label) use ($bpAreaSlugs) {
      return in_array($slug, $bpAreaSlugs, true)
          ? '<a href="' . e(url('/city/bhopal/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide bhm-guide" aria-labelledby="bhmGuideTitle">
  <h2 id="bhmGuideTitle">Maths home tutor in Bhopal: settle the board and the medium, then look at which side of the lakes you live on</h2>

  <p class="nx-guide__lede">
    Maths tuition in Bhopal starts with a question many families skip: which paper will your child actually write?
    The MP Board, CBSE, ICSE, ISC, IB and IGCSE run side by side here, and a tutor strong on one may be unfamiliar with
    the next. Geography matters too: a Kolar Road home and a BHEL township quarter draw on different pools of nearby
    tutors. NXTutors weighs both and sends two or three maths tutors, each with a visible fee. The opening lesson with
    the one you prefer costs nothing.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#bhm-intake">Three questions</a> ·
    <a href="#bhm-papers">Papers side by side</a> ·
    <a href="#bhm-mp">MP Board families</a> ·
    <a href="#bhm-x">CBSE Class 10</a> ·
    <a href="#bhm-senior">ISC, IB, IGCSE</a> ·
    <a href="#bhm-jee">Class 12 and JEE</a> ·
    <a href="#bhm-city">Five parts of the city</a> ·
    <a href="#bhm-local">Six localities</a> ·
    <a href="#bhm-weeks">Weeks one to four</a> ·
    <a href="#bhm-mix">Home or online</a> ·
    <a href="#bhm-fees">Fees</a> ·
    <a href="#bhm-send">Your request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="bhm-intake">What three questions come before any Bhopal maths tutor is suggested?</h2>
  <p>
    Guidance here on IB, IGCSE and ISC maths is the responsibility of Ajay Vatsyayan. Guidance on Class 10 maths for
    CBSE and ICSE is the responsibility of Abhinandan Tiwary. Whatever the course, the shortlist depends on three
    answers from you:
  </p>
  <ol>
    <li><strong>The board and the exact course.</strong> "Class 10 maths" is not enough; CBSE Standard, CBSE Basic, ICSE and the MP Board paper are different targets.</li>
    <li><strong>The language of instruction.</strong> If your child learns or thinks through maths in Hindi, tell us, and we look for a tutor who explains comfortably in both.</li>
    <li><strong>The locality and a landmark.</strong> A sector in Arera Colony, a quarter number in the BHEL township or a lane landmark in the old city tells a tutor whether a weekly visit is realistic.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bhm-papers">How do the maths papers taught in Bhopal compare?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths courses Bhopal families bring to us, the body behind each, and a warning sign to watch for during the demo</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Examining body</th><th scope="col">What the final assessment looks like</th><th scope="col">Warning sign in a demo</th></tr>
    </thead>
    <tbody>
      <tr><td>MP Board, Class 10 or Class 12 maths</td><td>Board of Secondary Education, Madhya Pradesh</td><td>Set by the board itself; confirm details on its official website each year</td><td>The tutor plans from CBSE sample papers without checking the MP Board syllabus</td></tr>
      <tr><td>CBSE Class 10, Standard or Basic</td><td>CBSE</td><td>80-mark written paper of three hours, 20 marks from school</td><td>No mention of the section-wise layout</td></tr>
      <tr><td>ICSE Class 10</td><td>CISCE</td><td>Three-hour written paper for 80, internal assessment for 20</td><td>Answers accepted without the steps written out</td></tr>
      <tr><td>CBSE Class 12</td><td>CBSE</td><td>80 marks across 38 questions, all compulsory, plus 20 internal</td><td>Calculus left for the winter</td></tr>
      <tr><td>ISC Class 12</td><td>CISCE</td><td>Theory paper of 80, projects for 20</td><td>Revision book printed for the older two-section paper</td></tr>
      <tr><td>IB Diploma, AA or AI, SL or HL</td><td>IB</td><td>Timed papers plus an individual exploration</td><td>Offers to draft the exploration for the student</td></tr>
      <tr><td>Cambridge IGCSE</td><td>Cambridge</td><td>Core or Extended entry</td><td>No view on which tier suits your child</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bhm-mp">What should MP Board families ask for in a maths tutor?</h2>
  <p>
    The Board of Secondary Education, Madhya Pradesh conducts the state's Class 10 and Class 12 examinations and
    publishes its own syllabus, schedules and papers. We keep our advice about it general, because details can change
    between sessions and belong on the board's own website, not in a coaching leaflet. Ask the tutor which textbook
    they will teach from and check it matches the one on your child's desk. Ask how they will use the board's recent
    question papers. And if the exam will be written in Hindi, the tutor's worked solutions should be in Hindi too.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bhm-x">For CBSE Class 10 maths, which units deserve the most weekly time?</h2>
  <p>
    Seven units, built from 14 NCERT chapters, share the 80 board marks in 2026-27. Ranked by weight, with the kind of
    practice each rewards:
  </p>
  <ul>
    <li><strong>Algebra, 20 marks.</strong> Word problems turned into equations win most of these.</li>
    <li><strong>Geometry, 15 marks.</strong> A proof loses marks when a reason is missing.</li>
    <li><strong>Trigonometry, 12 marks.</strong> Heights and distances begin with a clean figure.</li>
    <li><strong>Statistics and probability, 11 marks.</strong> Grouped data done column by column.</li>
    <li><strong>Mensuration, 10 marks.</strong> Combined solids, with units kept on each line.</li>
    <li><strong>Real numbers and coordinate geometry, 6 marks each.</strong> Quick items for a warm-up.</li>
  </ul>
  <p>
    The paper has five sections. Section A holds 20 one-mark questions, of which 18 are multiple-choice and 2 are
    assertion–reason. Section B has five questions of two marks, Section C six of three, Section D four of five, and
    Section E three case-based questions of four marks each. No calculator is permitted, and unless a question states
    otherwise π is 22/7. Standard and Basic share chapters and layout, but roughly 54% of Standard marks test recall
    and understanding against roughly 75% in Basic. Children who might take maths after Class 10 should usually sit
    Standard.
  </p>
  <p>
    CBSE now holds a compulsory main Class 10 exam and a second, optional one in which a student can try to improve
    up to three subjects, maths among them. Dates for 2027 are not yet out; watch cbse.gov.in. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a> goes chapter by
    chapter, the <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">Class 10 board-year plan</a>
    lays out the months, the <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a>
    covers the CISCE route, and the <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page
    explains how we match for that year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bhm-senior">ISC, IB and IGCSE maths: what should be checked in the first week?</h2>
  <h3>ISC Class 12</h3>
  <p>
    The ISC paper for the 2027 and 2028 examinations has seven units in a single 80-mark paper. The old choice between
    Section B and Section C has gone, so every candidate now meets vectors, three-dimensional geometry, linear
    programming and probability. Calculus is worth 35 marks. Two projects make up the other 20, and each is marked out
    of 10: 1 for format, 4 for content, 2 for findings and 3 for the viva. Ask the tutor which exam year their notes
    were written for. The <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> has a
    two-year plan.
  </p>
  <h3>IB Diploma and IGCSE</h3>
  <p>
    IB Analysis and Approaches is built on algebra, functions, calculus and proof, and one paper is taken without a
    calculator. Applications and Interpretation is built on modelling and statistics, with a graphic display calculator
    in every paper. The IB suggests 150 teaching hours for SL and 240 for HL. At SL, two papers carry 40% each; at HL,
    two papers carry 30% each and a third 20%. The exploration supplies the last 20% at either level and has to be the
    student's own: a tutor may explain the criteria and challenge a draft, never write it. IGCSE Core tops out at
    grade C; Extended covers A* to G. Read our
    <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA or AI guide</a>, the
    <a href="{{ url('/ib-maths-tutor') }}">IB maths tutor</a> and
    <a href="{{ url('/igcse-maths-tutor') }}">IGCSE maths tutor</a> pages, and our note on
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching from CBSE to IB or IGCSE</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bhm-jee">Class 12 maths and JEE coaching: can one tutor serve both?</h2>
  <p>
    Many senior students attend coaching, and MP Nagar's main roads hold a number of coaching centres. A home tutor
    then fills gaps rather than repeating lectures. For the CBSE board paper, calculus carries 35 of the 80 marks across 38 compulsory questions, so it should get the biggest slice
    of every week from April onwards.
  </p>
  <p>
    In JEE Main 2026, Paper 1 had 75 questions for 300 marks. Maths took 25 of them, 20 multiple-choice and 5 with a
    numerical answer, marked +4 when right and −1 when wrong. Confirm the pattern on jeemain.nta.nic.in before the next
    session. Each week, take the coaching sheet questions your child could not solve, then one board-style long
    answer. Useful reading: the
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a>, the
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths topic list</a>, our comparison of
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching and a home tutor for JEE</a>
    and the <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bhm-city">How do Bhopal's five tutoring zones shape a weekly maths visit?</h2>
  <p>
    We group the city into five zones. Two things decide how smooth a tutor's journey will be: your type of housing,
    and whether the metro's Orange Line, open to passengers since December 2025, runs near you. Browse every locality
    on our
    <a href="{{ url('/city/bhopal') }}">Bhopal page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Bhopal's five tutoring zones: the kind of homes in each, and what shapes the tutor's trip</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Typical homes</th><th scope="col">What shapes the trip</th></tr>
    </thead>
    <tbody>
      <tr><td>Arera Colony, Shahpura and Kolar Road</td><td>Bungalows, housing board colonies, and gated projects along Kolar Road</td><td>No metro on Kolar Road; most tutors ride a two-wheeler</td></tr>
      <tr><td>MP Nagar, TT Nagar and Shivaji Nagar</td><td>Government quarters, flats and older houses</td><td>An Orange Line station at MP Nagar; tight parking near the market</td></tr>
      <tr><td>Hoshangabad Road, Misrod and Katara Hills</td><td>Gated townships, apartment towers and plotted colonies</td><td>The BRTS corridor is gone, so buses share the road; gate registration is common</td></tr>
      <tr><td>BHEL, Awadhpuri and Ayodhya Bypass</td><td>Township quarters in numbered sectors, independent houses and newer apartments</td><td>Shift-change traffic and widening work on the bypass</td></tr>
      <tr><td>Old City, Lalghati and Bairagarh</td><td>Family houses in narrow lanes, hillside homes and colonies near the Upper Lake</td><td>Tutors park at the lane mouth and walk in; market evenings are crowded</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bhm-local">What changes for a maths tutor in six Bhopal localities?</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>South: planned sectors and a long corridor</h3>
      <p>
        {!! $bpA('arera-colony', 'Arera Colony') !!} is laid out in sectors E-1 to E-8. The older ones are streets of
        bungalows, while E-6 and E-7 were built as housing board colonies, so a tutor usually walks straight to the door;
        a few lanes have a gate where the guard asks for the house number. {!! $bpA('kolar-road', 'Kolar Road') !!} runs south as a residential corridor of plotted
        colonies and newer gated projects. Register the tutor at the gate in a gated project, and plan around the
        evening build-up on the main road.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Centre and south-east</h3>
      <p>
        {!! $bpA('mp-nagar', 'MP Nagar') !!}, short for Maharana Pratap Nagar, is the city's main office district, with
        flats and older houses on its residential streets. A tutor can take the Orange Line to MP Nagar station and walk
        or take an auto for the last stretch; after the office rush, or on a weekend morning, is the easiest time.
        {!! $bpA('hoshangabad-road', 'Hoshangabad Road') !!}, also called Narmadapuram Road, mixes older colonies with
        gated townships. Tutors from the same stretch of the corridor are the simplest to schedule.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>East and north</h3>
      <p>
        {!! $bpA('piplani', 'Piplani') !!} is part of the BHEL township, where company quarters sit in sectors identified
        by number rather than street name. Give the sector, quarter number and a landmark when you book, and avoid the
        start and end of factory shifts. In the {!! $bpA('old-city', 'Old City') !!}, north of the Upper Lake, homes sit in
        dense lanes around the bazaars, often above or behind shops. Tutors come by scooter and walk the final part, so
        an afternoon slot beats the busy market evening.
      </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bhm-weeks">What should weeks one to four with a new maths tutor look like?</h2>
  <ol>
    <li><strong>Week one: diagnosis.</strong> The tutor reads the last two tests and names the pattern behind lost marks.</li>
    <li><strong>Week two: a written plan.</strong> Chapter order, sessions a week, and the date of the first timed section.</li>
    <li><strong>Week three: an error log.</strong> Every wrong answer is copied into one notebook with the correction, and retried later.</li>
    <li><strong>Week four: a timed section.</strong> One section of a recent paper from the right board, marked the way that board marks it.</li>
  </ol>
  <p>
    No plan and no timed work by week four? Tell us: we arrange a demo with another tutor, and switching is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bhm-mix">Home, online or a mixture?</h2>
  <p>
    Sitting beside a student lets a tutor catch a wrong sign as it is written, so most families start at home. Online
    sessions earn a place when the IB HL or ISC specialist you need lives across the city, or when coaching finishes
    late. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> article weighs the
    options.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bhm-fees">How much does a maths home tutor in Bhopal charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets a rate
    that reflects the course and class, their experience with it, the trip to your zone at your preferred time and the
    number of weekly sessions. The fee for every tutor on your shortlist is in front of you before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bhm-send">What should your request to us include?</h2>
  <p>
    Send the class, the board and course name, the medium of instruction, your locality with a sector, block or lane
    landmark, the days and times that suit you, and a rough budget. You receive two or three matched maths tutors with
    their fees and pick one for a free demo. If no suitable tutor can travel to you at that hour, we propose online or
    mixed sessions. NXTutors also teaches online across India from its office in Sector 66, Gurugram; the national
    <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page shows how we work elsewhere.
  </p>
  <p>
    Maths teachers based in Bhopal who would like students close to home can see current requests on the
    <a href="{{ url('/tuition-jobs/bhopal') }}">Bhopal tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
