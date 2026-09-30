{{--
  Long-form guide for the "maths home tutor Delhi" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Local facts come only from
  database/seo-content/areas/delhi-research.json (zone_facts and area "about"
  texts, each with sources). Exam facts reuse the checked statements in
  database/seo-content/blog: cbse-class-10-maths-preparation (unit marks,
  section layout, Standard/Basic skill split, no calculators, pi = 22/7),
  cbse-class-10-board-year-plan-gurgaon (80 + 20, two Class 10 exams),
  cbse-class-12-maths-calculusalgebra (38 questions, calculus 35),
  icse-isc-maths-gurgaon-guide (ICSE 80 + 20; ISC single 2027/2028 paper,
  seven units, project marking), -ib-math-aaai-slhl (AA/AI, teaching hours,
  paper weights, exploration) and jee-preparation-gurgaon-coaching-or-home-tutor
  (JEE Main 2026 pattern). No state board is described. No school, society,
  mall or people's names (zone labels are shortened to avoid them), no
  distances or travel times, only the allowed fee sentence.

  Area links render only when that Delhi area page exists and is active.
--}}
@php
  $dlAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $dlA = function (string $slug, string $label) use ($dlAreaSlugs) {
      return in_array($slug, $dlAreaSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide dlm-guide" aria-labelledby="dlmGuideTitle">
  <h2 id="dlmGuideTitle">Maths home tutor in Delhi: name the paper, then find the metro line that reaches you</h2>

  <p class="nx-guide__lede">
    In a city the size of Delhi, the hard part is finding the right maths tutor. One who is excellent for CBSE
    Class 10 may never have opened an ISC or IB syllabus, and a tutor who lives across the Yamuna may struggle to reach Dwarka twice a week. NXTutors narrows the field on
    both counts. Tell us the course your child sits and where you live; we reply with two or three maths tutors who
    fit, each with their fee shown up front, and the first class with the one you pick is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#dlm-course">Which course</a> ·
    <a href="#dlm-ten">Class 10 in numbers</a> ·
    <a href="#dlm-intl">ISC and IB</a> ·
    <a href="#dlm-twelve">Class 12 with JEE</a> ·
    <a href="#dlm-zones">Twelve zones</a> ·
    <a href="#dlm-six">Six localities</a> ·
    <a href="#dlm-signs">Six-week check</a> ·
    <a href="#dlm-split">A split week</a> ·
    <a href="#dlm-fees">Fees</a> ·
    <a href="#dlm-ask">What to send us</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="dlm-course">Which maths course is actually on your child's timetable?</h2>
  <p>
    Ajay Vatsyayan writes the IB, IGCSE and ISC maths guidance on this page, and Abhinandan Tiwary writes the CBSE
    and ICSE Class 10 guidance. In Delhi the same street can hold a CBSE family, an ICSE family and an IB family, so
    the course name is the first thing we ask for, ahead of the class number.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths courses Delhi families ask us about, who sets each one, and the question to put to a new tutor</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Set by</th><th scope="col">Shape of the final assessment</th><th scope="col">Ask the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 10 Mathematics Standard (041) or Basic (241)</td><td>CBSE</td><td>Three-hour paper out of 80, plus 20 from the school</td><td>Which sample paper do you set first, and when?</td></tr>
      <tr><td>ICSE Class 10 Mathematics</td><td>CISCE</td><td>One three-hour paper of 80, with 20 internal marks</td><td>How do you mark presentation of working?</td></tr>
      <tr><td>Class 12 Mathematics</td><td>CBSE</td><td>38 compulsory questions for 80, plus 20 internal</td><td>How much of each week goes to calculus?</td></tr>
      <tr><td>ISC Mathematics (860), Class 12</td><td>CISCE</td><td>80-mark theory paper and 20 for project work</td><td>Have you taught the 2027 single-paper syllabus?</td></tr>
      <tr><td>IB Diploma: Analysis and Approaches, or Applications and Interpretation</td><td>IB</td><td>Two papers at SL, three at HL, plus the exploration</td><td>How will you advise on the exploration without writing it?</td></tr>
      <tr><td>Cambridge IGCSE</td><td>Cambridge</td><td>Core or Extended tier</td><td>Which tier do you recommend for my child, and why?</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlm-ten">Class 10 CBSE maths: where do the 80 board marks sit?</h2>
  <p>
    The 2026-27 curriculum spreads the 80 theory marks across 14 NCERT chapters in seven units. The question paper
    design has not changed for this session, so recent sample papers remain the right practice material.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 maths, 2026-27: marks by unit and what a tutor should drill in each</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Weekly drill</th></tr>
    </thead>
    <tbody>
      <tr><td>Algebra (polynomials, linear equations, quadratics, AP)</td><td>20</td><td>Two word problems turned into equations, then solved</td></tr>
      <tr><td>Geometry (triangles, circles)</td><td>15</td><td>One proof written with every reason stated</td></tr>
      <tr><td>Trigonometry, with heights and distances</td><td>12</td><td>A figure drawn before any ratio is written</td></tr>
      <tr><td>Statistics and probability</td><td>11</td><td>A grouped-data table completed without a slip</td></tr>
      <tr><td>Mensuration</td><td>10</td><td>A combined-solid question with units on each line</td></tr>
      <tr><td>Real numbers; coordinate geometry</td><td>6 each</td><td>Quick mixed questions at the start of a session</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Both levels use the same five-section layout: Section A has 20 one-mark items (18 multiple-choice and 2
    assertion–reason), B has five two-mark answers, C six three-mark answers, D four five-mark answers, and E three
    case studies of four marks each. Calculators are not allowed, and π is taken as 22/7 unless a question says
    otherwise. Where the levels differ is the thinking asked for: in Standard, about 54% of marks test remembering and
    understanding, while in Basic that share is about 75%. A child who may want maths in Class 11 should usually sit
    Standard; confirm with the school before registration closes.
  </p>
  <p>
    From 2026, Class 10 has a compulsory main exam and an optional second sitting to improve up to three subjects,
    maths included. The 2027 dates have not been announced, so check cbse.gov.in. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">CBSE Class 10 maths preparation guide</a> works
    through all 14 chapters, the <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year
    planner</a> sets out the months, and ICSE families can turn to the
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a>. The
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page explains how we match for this year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlm-intl">ISC and IB maths: what should families check before term starts?</h2>
  <h3>ISC Class 12</h3>
  <p>
    Older ISC papers let candidates choose between Section B and Section C. For the 2027 and 2028 examinations,
    CISCE lists seven units in one 80-mark paper with no such option, so vectors, three-dimensional geometry, linear
    programming and probability now reach every candidate. Calculus carries 35 marks. The other 20 come from two
    projects, each marked out of 10: format 1, content 4, findings 2 and viva 3.
    The
    <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> sets out a two-year plan.
  </p>
  <h3>IB Diploma</h3>
  <p>
    Analysis and Approaches leans on algebra, functions, calculus and proof, and one of its papers is sat without a
    calculator. Applications and Interpretation leans on modelling and statistics, and every paper needs a graphic
    display calculator. The IB recommends 150 teaching hours at SL and 240 at HL. SL has two papers worth 40% each;
    HL has two worth 30% each and a third worth 20%. At both levels the exploration counts for the remaining 20% and
    must be the student's own work: a tutor can explain the criteria and question a draft, but not write it.
    Our <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA or AI guide</a> covers the choice in depth.
  </p>
  <p>
    Cambridge IGCSE students sit either the Core or the Extended tier. Core caps the grade at C, while Extended runs
    from A* to G, so the tier is worth settling with the school early. Families weighing a move between boards can read our
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">guide to switching from CBSE to IB or IGCSE</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlm-twelve">Can one tutor carry Class 12 CBSE maths and JEE Main together?</h2>
  <p>
    Often, yes, if the plan is written down. The CBSE Class 12 paper has 38 compulsory questions for 80 marks, and
    calculus alone accounts for 35 of them, so it deserves the largest share of every week from April.
  </p>
  <p>
    JEE Main 2026 Paper 1 had 75 questions for 300 marks. Maths made up 25 of those: 20 multiple-choice and 5 with a
    numerical answer, scored +4 for a correct response and −1 for a wrong one. Check jeemain.nta.nic.in before
    planning around the next session. A tutor working with a coaching student can take the week's unsolved sheet
    questions, then close with one board-style long answer, so neither target slips. Read the
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a>, the
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths topic-wise guide</a> and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlm-zones">How do Delhi's twelve zones change the search for a maths tutor?</h2>
  <p>
    We group the city's localities into twelve zones. The practical question is always the same: which metro line
    runs near you, and do homes sit behind a society gate or open straight onto the street? Browse tutors by locality
    on our <a href="{{ url('/city/delhi') }}">Delhi page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Delhi's twelve tutoring zones by direction, with the rail lines and housing that shape a weekly maths slot</caption>
    <thead>
      <tr><th scope="col">Direction</th><th scope="col">Zones</th><th scope="col">Rail lines most tutors use</th><th scope="col">Homes you mostly find</th></tr>
    </thead>
    <tbody>
      <tr><td>South</td><td>GK and Defence Colony; Saket and Hauz Khas; Kalkaji and Sarita Vihar; Jangpura and the colonies beside it</td><td>Violet, Yellow, Magenta and Pink Lines</td><td>Plotted colonies rebuilt as builder floors, with DDA flats and apartment complexes</td></tr>
      <tr><td>South-west</td><td>Dwarka; Vasant Kunj, Vasant Vihar and Palam</td><td>Blue, Magenta and Airport Express Lines</td><td>Group housing societies, DDA flats and pockets within sectors</td></tr>
      <tr><td>West and central</td><td>Rajouri Garden and Punjabi Bagh; Karol Bagh</td><td>Blue, Green and Pink Lines</td><td>Bungalow plots, builder floors and DDA pockets</td></tr>
      <tr><td>North and north-west</td><td>Rohini; Pitampura and Model Town</td><td>Red, Yellow, Magenta and Pink Lines</td><td>DDA flats, cooperative societies and older plotted homes</td></tr>
      <tr><td>East</td><td>Mayur Vihar and Patparganj; Preet Vihar and Shahdara</td><td>Blue, Pink and Red Lines</td><td>Cooperative societies, DDA pockets and plotted blocks</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Since 8 March 2026 the Pink Line has run as a complete ring, and the same day the Magenta Line opened its stretch
    from Deepali Chowk to Majlis Park. Some cross-city trips in the north and east are simpler as a result.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlm-six">What does a weekly maths slot look like in six Delhi localities?</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>Two southern colonies</h3>
      <p>
        {!! $dlA('greater-kailash-2', 'Greater Kailash 2') !!} is laid out in lettered blocks, almost all independent
        houses and builder floors. Greater Kailash station
        on the Magenta Line serves it directly. Block guards usually ask visitors to sign in, so share the floor number
        and the tutor's name before the first class. {!! $dlA('saket', 'Saket') !!}, developed by the DDA, runs from
        Block A to Block N and mixes row houses, low-rise DDA flats and taller apartments, with two Yellow Line
        stations close by.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>West: a sector and a bungalow colony</h3>
      <p>
        {!! $dlA('dwarka-sector-12', 'Dwarka Sector 12') !!} has its own Blue Line station and is ringed by Sectors 4,
        5, 6, 9, 10, 11, 13 and 14, so a tutor from almost anywhere on the Blue Line can reach it without a car. Most
        homes are in DDA flats or cooperative societies with a guard; ask for the tutor to be noted as a regular
        visitor. {!! $dlA('punjabi-bagh', 'Punjabi Bagh') !!}, renamed in 1960, is split into East and West by the Ring
        Road. Its large plots mean doorstep visits, and it helps to choose a tutor on your side of the road, or one who
        comes by the Green or Pink Line.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>North and east</h3>
      <p>
        {!! $dlA('rohini-sector-9', 'Rohini Sector 9') !!} is mostly two- and three-bedroom DDA flats and RWA-run
        cooperative societies, with the Red Line station once called Rohini West the nearest stop. Society gates want a
        name and flat number; DDA blocks are more open. {!! $dlA('mayur-vihar-phase-1', 'Mayur Vihar Phase 1') !!},
        developed by the DDA from the early 1980s, is arranged in numbered pockets. Its station is a Blue and Pink Line
        interchange, and most tutors finish the trip on foot or by e-rickshaw.
      </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlm-signs">After six weeks, how can you tell that maths tuition is working?</h2>
  <p>
    Test marks move slowly. These signs show up sooner:
  </p>
  <ul>
    <li><strong>Working gets longer, not shorter.</strong> Steps once done in the head now appear on paper, where method marks are given.</li>
    <li><strong>Mistakes have names.</strong> The tutor can tell you whether errors are sign slips, misread questions or gaps in a chapter, and has a fix for each.</li>
    <li><strong>A mistake notebook exists.</strong> Every wrong question is copied, corrected and retried a week later.</li>
    <li><strong>You have seen a timed paper.</strong> At least one section of a sample paper, marked the way the board marks it.</li>
  </ul>
  <p>
    If two or more of these are missing, say so. We arrange a demo with the next tutor on your list, and changing
    tutor costs nothing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlm-split">When is a split week of home and online maths the sensible choice?</h2>
  <p>
    A tutor at the table sees each line as it is written, but two situations make a split week worth considering:
  </p>
  <ol>
    <li><strong>A specialist on the far side of the city.</strong> IB HL, ISC and IGCSE Extended teachers are fewer than CBSE ones. One online session with the specialist and one home session with a nearby tutor covers both needs.</li>
    <li><strong>Coaching that ends late.</strong> On coaching days an online hour avoids a journey at the end of the evening.</li>
  </ol>
  <p>
    The <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> article sets out the
    trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlm-fees">What does a maths home tutor in Delhi charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Every tutor names their
    own fee. It moves with the course and level, how long the tutor has taught that course, the trip to your zone at
    the hour you want and how many sessions you book each week. You see each shortlisted fee before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlm-ask">What should you send us to get matched?</h2>
  <p>
    Five details are enough: the class, the course by its exact name, your
    locality and block or pocket, the days and hours you can offer, and a budget. We come back with two or three
    matched maths tutors and their fees, and you pick one for a free demo class. If no one suitable can reach your
    part of Delhi at that hour, we suggest online or split-week sessions instead. NXTutors also teaches online across
    India from its office in Sector 66, Gurugram, and the national
    <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page explains how we work in other cities.
  </p>
  <p>
    Maths teachers who live in Delhi and want students close to home can browse open requests on the
    <a href="{{ url('/tuition-jobs/delhi') }}">Delhi tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
