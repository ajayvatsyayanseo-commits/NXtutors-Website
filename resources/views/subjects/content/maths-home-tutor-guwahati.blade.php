{{--
  Long-form guide for the "maths home tutor Guwahati" subject page (authors in
  config: Ajay Vatsyayan for IB/IGCSE/ISC maths and Abhinandan Tiwary for
  Class 10 CBSE/ICSE maths; role statements only, no anecdotes). Local facts
  come only from database/seo-content/areas/guwahati-research.json
  (zone_facts and area "about" texts). Exam facts reuse the checked
  statements in database/seo-content/blog (cbse-class-10-maths-preparation,
  cbse-class-10-board-year-plan-gurgaon, cbse-class-12-maths-calculusalgebra,
  icse-isc-maths-gurgaon-guide, -ib-math-aaai-slhl,
  jee-preparation-gurgaon-coaching-or-home-tutor). The Assam state board is
  described generally only: HSLC (Class 10) and Higher Secondary under the
  board once known as SEBA and AHSEC; site.sebaonline.org now carries the
  name Assam State School Education Board (ASSEB) Division-I. No exam pattern
  is stated for it. No school, society, hospital or people's names (other than
  the page authors), no distances or travel times, only the allowed fee
  sentence. Guwahati has no metro in operation (zone_facts).

  Area links render only when that Guwahati area page exists and is active.
--}}
@php
  $ghAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ghA = function (string $slug, string $label) use ($ghAreaSlugs) {
      return in_array($slug, $ghAreaSlugs, true)
          ? '<a href="' . e(url('/city/guwahati/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ghm-guide" aria-labelledby="ghmGuideTitle">
  <h2 id="ghmGuideTitle">Maths home tutor in Guwahati: begin with the board, then with the road your home sits on</h2>

  <p class="nx-guide__lede">
    A Guwahati child's maths could be heading for an HSLC paper, a CBSE Standard or Basic paper, an ICSE or ISC
    paper, or an IB or IGCSE course, and a tutor strong in one may be a stranger to another. The city adds a second question: can the tutor reach Beltola, Chandmari or Maligaon at the hour your
    child is free, when buses and autos do most of the carrying? Give NXTutors the course and the locality, and a
    shortlist of two or three suitable maths tutors comes back. Each fee is visible before you meet anyone, and the
    opening class with the tutor you pick costs nothing.
  </p>

  <nav class="nx-guide__toc" aria-label="Sections of this page">
    <strong>Sections:</strong>
    <a href="#ghm-board">Whose paper</a> ·
    <a href="#ghm-state">State board families</a> ·
    <a href="#ghm-ten">CBSE Class 10</a> ·
    <a href="#ghm-cisce">ICSE and ISC</a> ·
    <a href="#ghm-intl">IB and IGCSE</a> ·
    <a href="#ghm-jee">Class 12 and JEE</a> ·
    <a href="#ghm-zones">Five parts of the city</a> ·
    <a href="#ghm-local">Six localities</a> ·
    <a href="#ghm-month">The first month</a> ·
    <a href="#ghm-fees">Fees</a> ·
    <a href="#ghm-send">Your request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ghm-board">Which board sets your child's maths paper?</h2>
  <p>
    On this page, Ajay Vatsyayan is responsible for the IB, IGCSE and ISC maths sections, and Abhinandan Tiwary for
    Class 10 maths under CBSE and ICSE. Before any talk of chapters, the first question is whose exam it is.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths courses Guwahati families bring to us, the classes they cover, and the first thing to agree with a tutor</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Classes</th><th scope="col">Examining body</th><th scope="col">Settle this first</th></tr>
    </thead>
    <tbody>
      <tr><td>HSLC (Class 10) and Higher Secondary (Classes 11–12)</td><td>9 to 12</td><td>Assam state board (formerly SEBA and AHSEC)</td><td>Lessons from the prescribed textbook, in the language your child answers in</td></tr>
      <tr><td>Mathematics Standard (041) or Basic (241)</td><td>10</td><td>CBSE</td><td>Which level the school has registered your child for</td></tr>
      <tr><td>ICSE Mathematics</td><td>10</td><td>CISCE</td><td>How working and presentation will be checked every week</td></tr>
      <tr><td>Mathematics, Class 12</td><td>11 and 12</td><td>CBSE</td><td>How the weeks will be shared between calculus and the rest</td></tr>
      <tr><td>ISC Mathematics (860)</td><td>11 and 12</td><td>CISCE</td><td>Which exam year the tutor plans for</td></tr>
      <tr><td>IB Diploma AA or AI; Cambridge IGCSE</td><td>11 and 12; 9 and 10</td><td>IB; Cambridge</td><td>SL or HL, Core or Extended, and how coursework will be handled</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghm-state">What should a state board family ask of a maths tutor?</h2>
  <p>
    Assam's state board conducts the HSLC examination after Class 10 and the Higher Secondary course in Classes 11
    and 12, long run under the names SEBA and AHSEC; its official website now carries the name Assam State School
    Education Board. The board fixes its own syllabus, books and paper pattern and may revise them, so we leave the
    paper's details to its official notices. Three questions settle most matches: will the tutor work from the
    book the school issues rather than a guidebook, teach comfortably in the medium your child writes in, and set
    practice from the board's own model and past papers?
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghm-ten">CBSE Class 10 maths: how is the 80-mark paper built?</h2>
  <p>
    The 2026-27 CBSE curriculum spreads 14 NCERT chapters across seven units, and the paper design carries over
    unchanged. From heaviest to lightest:
  </p>
  <ul>
    <li><strong>Algebra, 20 marks:</strong> polynomials, linear pairs, quadratics and progressions.</li>
    <li><strong>Geometry, 15:</strong> triangles and circles, with a reason on every proof line.</li>
    <li><strong>Trigonometry, 12:</strong> identities, then heights and distances from a clean figure.</li>
    <li><strong>Statistics and probability, 11;</strong> <strong>mensuration, 10;</strong> <strong>real numbers and coordinate geometry, 6 apiece.</strong></li>
  </ul>
  <p>
    Standard and Basic share one five-part layout: 20 one-mark items in Part A (18 multiple-choice, 2
    assertion–reason), five two-mark answers in B, six three-mark answers in C, four five-mark answers in D and
    three four-mark case studies in E. Calculators stay out of the hall, and π counts as 22/7 unless a question
    states otherwise. What separates the levels is the thinking asked for: close to 54% of Standard marks, but
    around 75% of Basic marks, test remembering and understanding. A child who may want maths in Class 11 is
    usually better served by Standard, so confirm the level before the school's registration closes.
  </p>
  <p>
    Since 2026 every Class 10 candidate sits a compulsory main exam, and a later, optional sitting lets a student
    raise the marks in as many as three subjects, maths included. No 2027 schedule has been published yet, so keep an
    eye on cbse.gov.in. Our <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">chapter-by-chapter Class 10
    maths guide</a> and the <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page cover the
    board year in detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghm-cisce">What changes for ICSE and ISC maths students?</h2>
  <p>
    ICSE Class 10 maths is a single 80-mark paper, and the school adds 20 internal marks. Marks slip away through untidy
    working, so every line belongs on paper; see our
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">guide to ICSE Class 10 maths</a>.
  </p>
  <p>
    ISC Class 12 has been reshaped for the 2027 and 2028 examinations: seven units in one 80-mark paper, with no
    option any more to pick Section B or Section C. Every candidate therefore meets vectors, 3D geometry, linear
    programming and probability, and calculus alone is worth 35 marks. Two projects of 10 marks each provide the
    remaining 20, assessed on format (1), content (4), findings (2) and viva (3). Old-layout revision books mislead; our
    <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">two-year ICSE and ISC plan</a> sets it out.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghm-intl">IB and IGCSE maths: what needs deciding early?</h2>
  <p>
    IB Analysis and Approaches leans on algebra, functions, calculus and proof, with one paper sat without a
    calculator; Applications and Interpretation leans on modelling and statistics and expects a graphic display
    calculator throughout. The IB suggests 150 teaching hours for SL, 240 for HL. SL has two papers at 40% each; HL
    has two at 30% and a third at 20%. The exploration supplies the last 20% at both levels and must be the
    student's own: a tutor can explain the criteria and question a draft, never write it. Read our
    <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">comparison of IB maths AA and AI</a>.
  </p>
  <p>
    Cambridge IGCSE students sit Core, capped at grade C, or Extended, graded A* to G; agree the tier with the school
    early. Tutors
    for these courses are scarcer than CBSE tutors, so in Guwahati an online specialist is often the practical route.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghm-jee">Class 12 maths and JEE Main: one tutor or two?</h2>
  <p>
    One is often enough if the weekly plan is written down. The CBSE Class 12 paper asks 38 compulsory questions
    worth 80, and calculus alone is 35 of them, so it earns the largest slice of each week from April. JEE Main 2026
    Paper 1 set 75 questions worth 300 marks in all. Maths had 25: 20 multiple-choice and 5 numerical-answer, with +4
    for a correct response and −1 for a wrong one. Confirm the next session's pattern on jeemain.nta.nic.in. For a
    student at coaching, start each session with the coaching sheet's leftover problems and close it with one
    board-style long answer. More in the
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">calculus and algebra guide for Class 12</a>,
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths by topic</a> and on the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghm-zones">How do Guwahati's five parts shape a weekly maths slot?</h2>
  <p>
    Guwahati has no metro in operation, so tutors travel by city bus, auto, two-wheeler or car.
    The road you live on, and its busy hours, is what to plan around. Browse tutors by locality on our
    <a href="{{ url('/city/guwahati') }}">Guwahati page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Guwahati's five tutoring zones: the corridor tutors use, the homes you mostly find, and the timing to watch</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Corridor tutors use</th><th scope="col">Homes</th><th scope="col">Timing to watch</th></tr>
    </thead>
    <tbody>
      <tr><td>Old City &amp; Riverfront</td><td>AT Road and GS Road; Guwahati station at Paltan Bazaar</td><td>Flats above and behind market streets, older houses in lanes</td><td>Office and market hours on the main streets</td></tr>
      <tr><td>Chandmari &amp; Zoo Road</td><td>Zoo Road from Chandmari to Ganeshguri; VIP Road eastward</td><td>Apartments, builder floors, older houses</td><td>Evening coaching crowds and the Zoo Road peak</td></tr>
      <tr><td>GS Road &amp; Dispur</td><td>GS Road buses; AT Road through Dispur</td><td>Apartment buildings with gates, some houses</td><td>Office opening and closing around the capital complex</td></tr>
      <tr><td>Beltola &amp; Khanapara</td><td>GS Road and the national highway at the southern edge</td><td>Apartments and traditional houses</td><td>Market days near Beltola Bazar; regional traffic at Khanapara</td></tr>
      <tr><td>Maligaon, Jalukbari &amp; North Guwahati</td><td>Kamakhya Junction, the Adabari bus depot, three river bridges</td><td>Apartments; houses and plots on the north bank</td><td>The junctions at Jalukbari and Adabari</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghm-local">What does the first visit look like in six localities?</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>The old centre and the Zoo Road side</h3>
      <p>
        In {!! $ghA('pan-bazar', 'Pan Bazar') !!}, on the Brahmaputra's south bank, most homes are flats over or
        behind shops, with older houses in the lanes. Give the tutor a lane landmark and your floor, and choose an
        early or later slot, because office and market hours fill the main streets.
        {!! $ghA('zoo-road', 'Zoo Road') !!} is lined with multistorey apartments whose gates often log visitors.
        Buses and autos run its length, so tutors from Chandmari, Ganeshguri or Ulubari take classes here easily.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Around the capital complex</h3>
      <p>
        {!! $ghA('dispur', 'Dispur') !!}, Assam's capital since 1973, is mostly apartment buildings whose gates want
        a visitor's name and flat number, so hand both to the tutor before the demo, and avoid the hours when
        government offices open and close. In {!! $ghA('hatigaon', 'Hatigaon') !!}, with its two- and three-bedroom
        flats and some houses, tutors arrive by bus or auto from Ganeshguri, Beltola or GS Road; aim just before or
        after the evening rush.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>South and west</h3>
      <p>
        {!! $ghA('beltola', 'Beltola') !!} mixes apartment buildings with traditional houses, where a tutor walks
        straight up to the door; near Beltola Bazar, keep lessons clear of market hours.
        {!! $ghA('maligaon', 'Maligaon') !!}, below Nilachal hill and home to the Northeast Frontier Railway
        headquarters, is simple for tutors from Adabari, Jalukbari and Pandu via Kamakhya Junction but a long
        cross-city ride from GS Road, so an online specialist can fill gaps.
      </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghm-month">What should the first month of maths tuition produce?</h2>
  <ol>
    <li><strong>A written diagnosis:</strong> chapters listed as secure or shaky, in that order.</li>
    <li><strong>A corrections page:</strong> wrong questions copied, solved again, dated and retried a fortnight later.</li>
    <li><strong>Working on paper:</strong> skipped steps now written, since method marks depend on them.</li>
    <li><strong>One timed section:</strong> part of a sample paper done against the clock and marked to the board's scheme.</li>
  </ol>
  <p>
    If these are missing, tell us: we arrange a demo with the next tutor on your shortlist, and switching costs
    nothing. Weighing an online specialist against a nearby tutor? Read
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghm-fees">What does a maths home tutor in Guwahati charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors fix their own
    rates, which move with the course and class, their experience of that course, the trip across Guwahati at the
    hour you want and how many lessons a week you book. Every shortlisted fee can be compared ahead of the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghm-send">What should your request to us include?</h2>
  <p>
    Five details: the class; the course by its full name (HSLC, Higher Secondary, CBSE Standard or Basic, ICSE,
    ISC, IB or IGCSE); your locality plus a landmark; the days and times that suit; and a budget. Two or three
    matched maths tutors follow with their fees, and you pick one for a free demo class. If no suitable tutor can
    travel to you at that time, we propose online lessons or a blend. NXTutors works from Sector 66, Gurugram, and
    teaches online across India; the national <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page
    explains how.
  </p>
  <p>
    Maths teachers living in Guwahati who want students close to home can look through current requests on the
    <a href="{{ url('/tuition-jobs/guwahati') }}">Guwahati tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
