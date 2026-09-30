{{--
  Long-form guide for the "maths home tutor Pune" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Local facts come only from
  database/seo-content/areas/pune-research.json (zone_facts and area "about"
  texts, each with sources). Exam facts reuse the checked statements already
  used on the Delhi maths page, taken from database/seo-content/blog:
  cbse-class-10-maths-preparation, cbse-class-10-board-year-plan-gurgaon,
  cbse-class-12-maths-calculusalgebra, icse-isc-maths-gurgaon-guide,
  -ib-math-aaai-slhl and jee-preparation-gurgaon-coaching-or-home-tutor.
  The Maharashtra State Board is described in general terms only (SSC and
  HSC, no exam pattern). Metro Line 3 is described as under construction and
  not open. No school, society, developer, mall or people's names, no roads
  named after people, no distances or travel times, only the allowed fee
  sentence.

  Area links render only when that Pune area page exists and is active.
--}}
@php
  $pnAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pnA = function (string $slug, string $label) use ($pnAreaSlugs) {
      return in_array($slug, $pnAreaSlugs, true)
          ? '<a href="' . e(url('/city/pune/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide pnm-guide" aria-labelledby="pnmGuideTitle">
  <h2 id="pnmGuideTitle">Maths home tutor in Pune: settle the syllabus, then the side of the river</h2>

  <p class="nx-guide__lede">
    Pune has grown outwards in every direction, from the old city along the Mutha to Pimpri-Chinchwad in the
    north-west and Kharadi and Hadapsar in the east. A maths tutor who suits your child has to clear two separate
    tests: they must know the exact course, whether that is the Maharashtra SSC, CBSE, ICSE, ISC, IB or IGCSE, and they
    must be able to reach your part of the city at the same hour every week. Tell NXTutors both, and we send back two
    or three maths tutors who pass, with each tutor's fee on the page before you meet. The first class with the one
    you pick is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pnm-zones">Seven zones</a> ·
    <a href="#pnm-homes">Six neighbourhoods</a> ·
    <a href="#pnm-course">Choosing the course</a> ·
    <a href="#pnm-ten">Class 10 CBSE</a> ·
    <a href="#pnm-cisce">ICSE and ISC</a> ·
    <a href="#pnm-ib">IB and IGCSE</a> ·
    <a href="#pnm-jee">Class 12 and JEE</a> ·
    <a href="#pnm-week">Splitting the week</a> ·
    <a href="#pnm-fees">Fees</a> ·
    <a href="#pnm-shortlist">Your shortlist</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pnm-zones">How do Pune's seven zones affect a weekly maths class?</h2>
  <p>
    We sort Pune and Pimpri-Chinchwad into seven zones. Two questions separate them for a tutor: is there a working
    metro or suburban station close to the home, and does the family live in a gated society, an older bungalow lane
    or a planned sector? Find tutors locality by locality on our <a href="{{ url('/city/pune') }}">Pune page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Pune's tutoring zones, the rail links a maths tutor can use today, and the homes they usually visit</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Rail today</th><th scope="col">Typical homes</th></tr>
    </thead>
    <tbody>
      <tr><td>Kothrud, Karve Nagar and Deccan</td><td>Aqua Line from Vanaz through Anand Nagar and Paud Phata to Deccan Gymkhana</td><td>Apartment societies, redeveloped blocks and older bungalows near Deccan</td></tr>
      <tr><td>Aundh, Baner and Pashan</td><td>None open yet; Metro Line 3 is being built through Balewadi, Baner and Aundh</td><td>Gated societies and high-rise complexes, with some independent houses</td></tr>
      <tr><td>Wakad, Hinjewadi and Pimpri-Chinchwad</td><td>Purple Line from PCMC Bhavan; suburban trains at Pimpri, Chinchwad and Akurdi</td><td>Townships and societies, plus houses in the Pradhikaran sectors</td></tr>
      <tr><td>Viman Nagar, Kalyani Nagar and Kharadi</td><td>Aqua Line at Yerwada, Kalyani Nagar and Ramwadi</td><td>Gated societies and apartment towers near the office belt</td></tr>
      <tr><td>Koregaon Park, Camp and Wanowrie</td><td>Aqua Line at Bund Garden and Pune Railway Station</td><td>Bungalows in old lanes, cantonment housing and apartments</td></tr>
      <tr><td>Hadapsar, Kondhwa and NIBM</td><td>No metro; local trains at Hadapsar towards Daund</td><td>Large townships, gated societies and some villas</td></tr>
      <tr><td>Katraj, Bibwewadi and Sinhagad Road</td><td>Purple Line ends at Swargate; the Katraj extension is under construction</td><td>Independent houses, builder floors and apartment complexes</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Line 3, from Maan near Hinjewadi to Shivajinagar, had not opened to passengers when this page was written, so in
    the western IT suburbs most tutors still arrive by two-wheeler.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnm-homes">What does a maths visit involve in six Pune neighbourhoods?</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>West: an Aqua Line suburb and a university-road neighbourhood</h3>
      <p>
        In {!! $pnA('kothrud', 'Kothrud') !!} most families live in societies, many of them rebuilt as taller blocks.
        Vanaz, Anand Nagar and Paud Phata stations have run since March 2022, so a tutor from Deccan can ride in and
        walk the last part. Register the tutor at the gate once, and avoid the evening rush on Paud Road.
        {!! $pnA('aundh', 'Aundh') !!} runs along University Road to the Mula bridge, with societies, villas and
        independent houses. Stations are planned at Aundh and Sakal Nagar on Line 3, but for now tutors from Baner,
        Pashan or Pimple Nilakh come by road.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>North-west and east: two society belts</h3>
      <p>
        {!! $pnA('wakad', 'Wakad') !!} belongs to Pimpri-Chinchwad and is almost entirely apartment complexes near
        the Hinjewadi IT park. The bypass runs through it, and office traffic slows the roads near it, so early evening
        or a weekend morning is easier to hold. {!! $pnA('viman-nagar', 'Viman Nagar') !!} lies just south of the
        airport; Ramwadi, the eastern end of the Aqua Line, stands on Nagar Road beside it. Societies log the tutor at
        the gate, and a class that starts before the Nagar Road peak, or after it, runs more smoothly.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>East and south-east: old lanes and a highway suburb</h3>
      <p>
        {!! $pnA('koregaon-park', 'Koregaon Park') !!} was laid out in the early 1920s. Its numbered lanes mix older
        bungalows, where the tutor comes to the gate, with newer apartments that keep a visitor log. Bund Garden is the
        closest metro stop. {!! $pnA('hadapsar', 'Hadapsar') !!} sits on Solapur Road and ranges from the old village
        to large townships. There is no metro, so tutors come by two-wheeler, bus or auto; send the tutor's name and
        flat details to the gate before the demo.
      </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnm-course">Which maths course is your child actually following?</h2>
  <p>
    The IB, IGCSE and ISC guidance on this page is written by Ajay Vatsyayan; the CBSE and ICSE Class 10 guidance is
    written by Abhinandan Tiwary. Pune families spread across more boards than most cities, so we ask for the course
    name before the class number.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths courses Pune students take, the body behind each, and a first check for any tutor</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Body</th><th scope="col">First check for the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>SSC (Class 10) and HSC (Class 12)</td><td>Maharashtra State Board of Secondary and Higher Secondary Education</td><td>Teaches from the state's prescribed textbooks and the board's own papers</td></tr>
      <tr><td>Class 10 Mathematics, Standard or Basic</td><td>CBSE</td><td>Uses the current sample paper, not only older guides</td></tr>
      <tr><td>Class 12 Mathematics</td><td>CBSE</td><td>Plans calculus as the core of the year</td></tr>
      <tr><td>ICSE Class 10 and ISC Class 12</td><td>CISCE</td><td>Works from the school's own textbook and the right exam-year syllabus</td></tr>
      <tr><td>Analysis and Approaches, or Applications and Interpretation</td><td>IB Diploma</td><td>Can explain the exploration criteria without drafting any part</td></tr>
      <tr><td>IGCSE Mathematics</td><td>Cambridge</td><td>Gives a reasoned view on Core against Extended</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For SSC and HSC students we stay general: the state board publishes its syllabus, timetables and any change to
    its papers on its official website, and a tutor should read the notice there instead of assuming a CBSE layout.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnm-ten">How is the CBSE Class 10 maths paper built for 2026-27?</h2>
  <p>
    The board paper is worth 80 marks over three hours, and the school awards the other 20. The 80 are spread over
    seven units and 14 NCERT chapters, and the paper's design is unchanged from last session:
  </p>
  <ul>
    <li><strong>Algebra, 20 marks:</strong> polynomials, pairs of linear equations, quadratics and arithmetic progressions. The biggest unit, so word problems belong in every week.</li>
    <li><strong>Geometry, 15:</strong> triangles and circles, where each step of a proof needs its reason.</li>
    <li><strong>Trigonometry, 12:</strong> including heights and distances; draw the figure first.</li>
    <li><strong>Statistics and probability, 11:</strong> grouped data rewards a neat, complete table.</li>
    <li><strong>Mensuration, 10:</strong> combined solids, with units written on each line.</li>
    <li><strong>Real numbers and coordinate geometry, 6 each:</strong> good material for a quick warm-up.</li>
  </ul>
  <p>
    Standard and Basic share one layout. Section A carries 20 one-mark items, 18 multiple-choice and 2
    assertion–reason; Section B five questions of two marks; C six of three; D four of five; and E three case studies
    of four. No calculator is allowed, and π is 22/7 unless the question states otherwise. The difference lies in the
    thinking tested: about 54% of Standard marks go to remembering and understanding, against about 75% in Basic.
    Anyone who might take maths after Class 10 should normally choose Standard, after checking with the school.
  </p>
  <p>
    From 2026 there is a compulsory main board exam and an optional second one to raise marks in up to three
    subjects, maths among them; 2027 dates are not yet out, so watch cbse.gov.in. Read the
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 CBSE maths preparation guide</a>, the
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">month-by-month board-year plan</a> and the
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnm-cisce">What should ICSE and ISC families confirm?</h2>
  <p>
    ICSE Class 10 maths is one three-hour paper of 80 marks with 20 internal marks. CISCE leaves the choice of
    textbook to each school, so a tutor has to teach from your child's book and the council's specimen papers, and
    should mark the layout of working as strictly as the content. The
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> goes chapter by chapter.
  </p>
  <p>
    ISC Class 12 has changed. For the 2027 and 2028 examinations the 80-mark paper lists seven units with no option
    between Sections B and C, so every candidate now meets vectors, three-dimensional geometry, linear programming and
    probability. Calculus is worth 35 of those marks. Two projects bring the other 20, each scored out of 10: 1 for
    format, 4 for content, 2 for findings and 3 for the viva. A revision book written for the old layout can mislead,
    so ask which exam year the tutor plans from. Our
    <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> sets out both years.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnm-ib">How do IB and IGCSE maths differ from the Indian boards?</h2>
  <p>
    In the IB Diploma, Analysis and Approaches is built on algebra, functions, calculus and proof, and one paper is
    taken without a calculator. Applications and Interpretation centres on modelling and statistics, and every paper
    uses a graphic display calculator. Recommended teaching time is 150 hours at SL and 240 at HL. At SL two papers
    count 40% each; at HL two count 30% each and a third counts 20%. The remaining 20% at either level is the
    exploration, which must be your child's work alone: a tutor may explain the criteria and question a draft, never
    write it. See the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">AA or AI guide</a> and our
    <a href="{{ url('/ib-maths-tutor') }}">IB maths tutor</a> page.
  </p>
  <p>
    Cambridge IGCSE candidates enter either Core, which tops out at grade C, or Extended, graded A* to G, so agree the
    tier with the school early. The <a href="{{ url('/igcse-maths-tutor') }}">IGCSE maths tutor</a> page covers
    this, and families considering a change of board can read about
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">moving from CBSE to IB or IGCSE</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnm-jee">Can the Class 12 board and JEE Main share one maths tutor?</h2>
  <p>
    Yes, provided the week is planned on paper. The CBSE Class 12 maths paper has 38 compulsory questions for 80
    marks, and calculus accounts for 35 of them, so it should take the largest block of time from April onwards.
  </p>
  <p>
    In 2026, JEE Main Paper 1 had 75 questions worth 300 marks. Maths supplied 25: 20 multiple-choice and 5 with a
    numerical answer, each scored +4 when right and −1 when wrong. Confirm the next session's pattern on
    jeemain.nta.nic.in. For a student at coaching, a sensible session takes the problems left unsolved from the
    week's sheet and ends with one full board-style answer, so the written paper is not neglected. The
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a>, the
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">topic-wise JEE maths guide</a> and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnm-week">How should a week of maths tuition be divided?</h2>
  <p>
    A tutor who only follows the school's chapter of the week leaves exam practice to the last month. For two
    sessions a week, a steadier split looks like this:
  </p>
  <ol>
    <li><strong>First session: the current chapter.</strong> New ideas taught with worked examples, then a short set your child solves alone while the tutor watches the working.</li>
    <li><strong>Second session: mixed practice.</strong> Questions from older chapters in the board's format, timed, with marks given the way the board gives them.</li>
    <li><strong>Between sessions: the error log.</strong> Each wrong answer copied, corrected and tried again the next week.</li>
  </ol>
  <p>
    Where the right specialist lives on the far side of the city, say in Kharadi when you are in Kothrud, one
    online session with that specialist and one home session with a nearby tutor can cover both needs. The
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> article lays out the
    trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnm-fees">How much does a maths home tutor in Pune charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    rates, which tend to follow the course and level, the tutor's experience with that course, the journey to your
    zone at the chosen hour and the number of weekly sessions. Every shortlisted fee is on screen before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnm-shortlist">What do we need from you to build a shortlist?</h2>
  <p>
    Send the class, the full course name, your neighbourhood with the society or lane, the days and times you can
    offer, and a budget. We reply with two or three maths tutors and their fees; you choose one for the free demo, and
    moving to another tutor later costs nothing. If nobody suitable can travel to you at that hour, we suggest online
    or mixed sessions. NXTutors works from Sector 66, Gurugram, and teaches online across India; the national
    <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page describes how matching works elsewhere.
  </p>
  <p>
    Maths teachers based in Pune who want students near home can see open requests on the
    <a href="{{ url('/tuition-jobs/pune') }}">Pune tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
