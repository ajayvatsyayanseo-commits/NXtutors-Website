{{--
  Long-form guide for the "maths home tutor Indore" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Local facts come only from
  database/seo-content/areas/indore-research.json (zone_facts and area "about"
  texts, each with sources). Exam facts reuse the checked statements in
  database/seo-content/blog: cbse-class-10-maths-preparation (unit marks,
  section layout, Standard/Basic skill split, no calculators, pi = 22/7),
  cbse-class-10-board-year-plan-gurgaon (80 + 20, two Class 10 exams),
  cbse-class-12-maths-calculusalgebra (38 questions, calculus 35),
  icse-isc-maths-gurgaon-guide (ISC single 2027/2028 paper, seven units,
  project marking), -ib-math-aaai-slhl (AA/AI, teaching hours, paper weights,
  exploration) and jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main
  2026 pattern, two sessions, better score counts). The MP Board is named and
  described in general terms only, with no exam pattern. No school, institute,
  society, mall or people's names, no distances or travel times, only the
  allowed fee sentence.

  Area links render only when that Indore area page exists and is active.
--}}
@php
  $inAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $inA = function (string $slug, string $label) use ($inAreaSlugs) {
      return in_array($slug, $inAreaSlugs, true)
          ? '<a href="' . e(url('/city/indore/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide idm-guide" aria-labelledby="idmGuideTitle">
  <h2 id="idmGuideTitle">Maths home tutor in Indore: pin down the board first, then the part of town</h2>

  <p class="nx-guide__lede">
    Indore families meet maths in many forms. One child writes the MP Board paper, a neighbour sits CBSE, a cousin
    follows ICSE or the IB, and an older sibling juggles Class 12 with JEE classes in Palasia. A tutor who suits one
    of these students can be a poor fit for the next. NXTutors asks for the course and your locality, then sends two
    or three maths tutors who teach that course and can reach you at a workable hour. Their fees are on the
    shortlist, and the first lesson with the tutor you choose is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#idm-four">Four answers we need</a> ·
    <a href="#idm-boards">Boards side by side</a> ·
    <a href="#idm-cbse">CBSE Class 10</a> ·
    <a href="#idm-cisce">ICSE and ISC</a> ·
    <a href="#idm-global">IB and IGCSE</a> ·
    <a href="#idm-coach">Beside JEE coaching</a> ·
    <a href="#idm-map">Six neighbourhoods</a> ·
    <a href="#idm-month">The first month</a> ·
    <a href="#idm-fees">Fees</a> ·
    <a href="#idm-next">Next step</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="idm-four">What four answers help us find the right maths tutor in Indore?</h2>
  <p>
    Ajay Vatsyayan is responsible for the IB, IGCSE and ISC maths advice on this page. Abhinandan Tiwary is
    responsible for the Class 10 CBSE and ICSE advice. Before either kind of tutor is suggested, we ask four things:
  </p>
  <ol>
    <li><strong>The board and paper, by name.</strong> "Class 10 maths" could mean CBSE Standard, CBSE Basic, ICSE or the state board, and each is taught differently.</li>
    <li><strong>The class and the goal.</strong> Keeping pace with school, lifting a weak score, or school plus an entrance exam.</li>
    <li><strong>Your locality.</strong> Vijay Nagar, the Palasia belt, the Ring Road colonies and the Bhawarkua side each draw on a different pool of tutors.</li>
    <li><strong>Fixed commitments.</strong> School hours, any coaching batch and the evenings already taken, so the slot we propose is one your child can actually keep.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="idm-boards">Which boards do Indore students take, and what should the tutor bring?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths courses taught in Indore homes and what a tutor should have ready for the first session</caption>
    <thead>
      <tr><th scope="col">Board or course</th><th scope="col">Who examines it</th><th scope="col">Ready for session one</th></tr>
    </thead>
    <tbody>
      <tr><td>MP Board, Classes 10 and 12</td><td>Board of Secondary Education, Madhya Pradesh</td><td>The prescribed textbook and the board's own recent papers</td></tr>
      <tr><td>CBSE Class 10, Standard or Basic</td><td>CBSE</td><td>The current sample paper and its marking scheme</td></tr>
      <tr><td>CBSE Class 12</td><td>CBSE</td><td>A calculus plan that starts in the first term</td></tr>
      <tr><td>ICSE Class 10 and ISC Class 12</td><td>CISCE</td><td>Specimen papers for your child's exam year</td></tr>
      <tr><td>IB Diploma, AA or AI, SL or HL</td><td>International Baccalaureate</td><td>A view on the exploration timeline</td></tr>
      <tr><td>Cambridge IGCSE, Core or Extended</td><td>Cambridge</td><td>A tier recommendation with reasons</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For the MP Board we keep our advice general. The board sets its own syllabus, timetable and papers and announces
    changes on its official website, so a tutor should teach from the book your child's school uses and take every
    exam detail from the board's notices rather than from a guidebook.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="idm-cbse">How is CBSE Class 10 maths marked for 2026-27?</h2>
  <p>
    The board paper is worth 80, and the school adds 20 internal marks. Those 80 marks come from 14 NCERT chapters
    grouped into seven units, and the paper design is the same as last session, so recent sample papers are sound
    practice. Algebra is the heaviest unit at 20 marks. Geometry follows at 15, trigonometry at 12, statistics and
    probability at 11 and mensuration at 10, while real numbers and coordinate geometry bring 6 marks apiece.
  </p>
  <p>
    Standard and Basic share the same five sections. Section A has 20 questions of one mark, 18 of them
    multiple-choice and 2 assertion–reason. Section B asks five questions of two marks, Section C six of three,
    Section D four of five, and Section E three case studies of four marks each. No calculator is permitted, and π is
    22/7 unless the question states another value. The difference lies in the thinking required: roughly 54% of
    Standard marks test recall and understanding, against about 75% in Basic. A student who might choose maths in
    Class 11 is usually better placed in Standard; the school confirms the choice before registration.
  </p>
  <p>
    Since 2026 Class 10 students sit a compulsory main exam and may take an optional second exam to improve up to three
    subjects, maths among them. Dates for 2027 are not out yet, so watch cbse.gov.in. The
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a> goes through the
    chapters one by one, the <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year plan</a>
    lays out the months, and the <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page
    explains how we match for that year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="idm-cisce">What changes for ICSE and ISC maths students?</h2>
  <p>
    ICSE Class 10 families should look for a tutor who marks the working as closely as the answer, and the
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> covers that year. In ISC
    Class 12, the paper for the 2027 and 2028 examinations is a single 80-mark paper across seven units. The old choice
    between Section B and Section C has gone, which means every candidate now answers on vectors, three-dimensional
    geometry, linear programming and probability. Calculus is worth 35 of the 80. Project work supplies the other 20:
    two projects of 10 marks, each split into format 1, content 4, findings 2 and viva 3. A tutor still working from a
    revision book written for the older layout will leave gaps. The
    <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> offers a two-year plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="idm-global">How do IB and IGCSE maths differ from the Indian boards?</h2>
  <p>
    The IB Diploma offers two courses. Analysis and Approaches is built on algebra, functions, calculus and proof, and
    includes a paper without a calculator. Applications and Interpretation is built on modelling and statistics, and a
    graphic display calculator is used in every paper. Recommended teaching time is 150 hours at SL and 240 at HL. At SL
    two papers carry 40% each; at HL, two papers carry 30% each and a third paper 20%. The exploration supplies the
    final 20% at both levels. It must be written by the student, so a tutor's role is to explain the criteria and
    challenge a draft, never to write sections of it. See the
    <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA or AI guide</a> for the choice between courses.
  </p>
  <p>
    Cambridge IGCSE has two tiers. Core stops at grade C; Extended covers A* to G. Deciding the tier with the school
    early prevents a late scramble. Families thinking of moving a child from CBSE can read about
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching to IB or IGCSE</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="idm-coach">How does a maths tutor work alongside JEE coaching in Indore?</h2>
  <p>
    Coaching institutes cluster around Palasia and Bhawarkua, and plenty of Class 11 and 12 students in the city spend
    several evenings a week in a batch. A home tutor should not repeat that batch. The useful job is different:
  </p>
  <ul>
    <li><strong>Clear the backlog.</strong> The student keeps a list of sheet problems that could not be started, noting where each one stalled, and the tutor works from that list.</li>
    <li><strong>Protect the board paper.</strong> CBSE Class 12 maths has 38 compulsory questions for 80 marks, with calculus alone worth 35, and it rewards complete written steps that timed entrance practice does not train.</li>
    <li><strong>Read the test, not the rank.</strong> After each coaching test, sort every lost mark: unknown concept, wrong method, arithmetic slip, misread question or time running out. Each needs a different fix.</li>
  </ul>
  <p>
    For reference, JEE Main 2026 Paper 1 was a computer-based test of 75 questions and 300 marks, held in two sessions
    in January and April, with the better score counting. Maths supplied 25 questions, 20 multiple-choice and 5 with a
    numerical answer, scored +4 for a right answer and −1 for a wrong one. NTA publishes each year's rules afresh at
    jeemain.nta.nic.in. Further reading: <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching,
    a home tutor or both</a>, the <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths topic guide</a>,
    the <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a> and
    the <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="idm-map">What does a maths visit look like in six Indore neighbourhoods?</h2>
  <p>
    We group Indore into four zones: Vijay Nagar and AB Road, Palasia and the centre, Nipania with Bicholi and the
    Ring Road, and Bhawarkua with Rajendra Nagar and Rau. The table picks six localities across them. Tutors in every
    locality are listed on the <a href="{{ url('/city/indore') }}">Indore page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths tuition in six Indore localities: the housing, how tutors travel in, and a timing tip</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Homes</th><th scope="col">Getting there</th><th scope="col">Timing tip</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $inA('vijay-nagar', 'Vijay Nagar') !!}</td><td>IDA flats, plotted houses and newer apartment societies</td><td>Vijay Nagar Chauraha on the Yellow Line, in regular service since September 2026, then a walk or an auto</td><td>Begin before the evening shopping crowd reaches AB Road</td></tr>
      <tr><td>{!! $inA('scheme-74', 'Scheme No. 74') !!}</td><td>Independent houses on planned sector roads, a few apartments</td><td>Metro through Vijay Nagar, then an auto; doorstep visits and easier parking</td><td>A slot just after school suits most families</td></tr>
      <tr><td>{!! $inA('lig-colony', 'LIG Colony') !!}</td><td>IDA houses and flats in lettered sectors, some later societies</td><td>City bus, auto or two-wheeler along AB Road; the metro extension towards Palasia is not open yet</td><td>AB Road peaks in the evening, so start soon after school</td></tr>
      <tr><td>{!! $inA('nipania', 'Nipania') !!}</td><td>Gated societies, builder floors and plots</td><td>Malviya Nagar Chauraha is the nearest station, followed by an auto</td><td>Register the tutor at the gate once and weekly visits run smoothly</td></tr>
      <tr><td>{!! $inA('kanadia-road', 'Kanadia Road') !!}</td><td>Apartments, independent houses and plots</td><td>Auto, city bus or two-wheeler; Bengali Square is a planned but unopened station</td><td>Traffic gathers at Bengali Square later in the evening</td></tr>
      <tr><td>{!! $inA('rajendra-nagar', 'Rajendra Nagar') !!}</td><td>Houses and builder-built apartments in sectors</td><td>Rajendra Nagar station on the Akola to Ratlam line, or buses along AB Road</td><td>A slightly later evening avoids school and office closing times</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    When the tutor who teaches your exact course lives on the far side of the city, one online lesson a week with that
    specialist and one home lesson with a closer tutor can cover both needs. The
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a> article weighs the two.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="idm-month">What should the first month of maths tuition produce?</h2>
  <p>
    Marks respond slowly, but a month is enough to see whether the arrangement is sound. Look for these by week four:
  </p>
  <ol>
    <li><strong>Week one: a diagnosis.</strong> The tutor has read recent school tests and can say which chapters and which kinds of error cost the most.</li>
    <li><strong>Week two: a written plan.</strong> The chapters for the term are listed in order, with the school calendar and any coaching schedule taken into account.</li>
    <li><strong>Week three: an error log.</strong> Wrong answers are copied into a separate notebook, corrected, and attempted again a week later.</li>
    <li><strong>Week four: timed work.</strong> At least one section of a sample or specimen paper done against the clock and marked the way the board marks it.</li>
  </ol>
  <p>
    If two of these are missing, tell us. We line up a demo with the next tutor on the shortlist, and switching tutor
    is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="idm-fees">How much does a maths home tutor in Indore charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    rates. What moves a rate is the course and class, the tutor's experience with that course, the journey to your
    zone at the hour you want and the number of lessons a week. Every fee on the shortlist is visible before you book
    the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="idm-next">How do you ask for a shortlist?</h2>
  <p>
    Send the class, the board and paper by name, your locality and scheme or sector number, the days and times that
    are free, and a budget. We return two or three matched maths tutors with their fees, and you choose one for a
    free demo class. If nobody suitable can reach your part of Indore at that time, we suggest online lessons or a
    mixed week instead. NXTutors works from Sector 66, Gurugram, and teaches online across India; the national
    <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page explains our approach in other cities.
  </p>
  <p>
    Maths teachers living in Indore who want students near home can see open requests on the
    <a href="{{ url('/tuition-jobs/indore') }}">Indore tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
