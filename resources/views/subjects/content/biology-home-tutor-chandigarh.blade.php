{{--
  Long-form guide for the "biology home tutor Chandigarh" page (tricity:
  Chandigarh sectors, Manimajra, Mohali, Panchkula and Zirakpur). Byline:
  NXTutors Academic Team. No schools, colleges, institutes, hospitals or people
  are named.

  Local facts come only from database/seo-content/areas/chandigarh-research.json,
  chandigarh-zone-guides.json, database/seo-content/zones/chandigarh.json and the
  city hub view (zones, housing, bus terminals, no metro, Airport Road,
  PSEB/BSEH by state line, described in general terms only).

  Official exam facts, reused from the national biology-home-tutor page
  (fetched 1 Oct 2026):
  - CBSE Biology (044), XI-XII 2026-27, cbseacademic.nic.in
    (web_material/CurriculumMain27/SecPart2/Biology_SecP2_2026-27.pdf): theory
    3 h 70 + practical 30; XII units Reproduction 16, Genetics and Evolution 20,
    Biology and Human Welfare 12, Biotechnology 12, Ecology 10; XI Human
    Physiology 18, Diversity 15, Cell 15, Plant Physiology 12, Structural
    Organisation 10.
  - CISCE ISC Biology (863), cisce.org/wp-content/uploads/2025/04/18.-ISC-Biology.pdf:
    theory 3 h 70; practical 15; project 10; practical file 5.
  - NTA NEET (UG) 2026 Information Bulletin (neet.nta.nic.in): 180 questions,
    180 minutes, biology 90 of them (botany and zoology), 720 marks, +4/-1;
    syllabus notified by NMC; 2027 bulletin not yet released.
  - Cambridge IGCSE Biology 0610 (2026-2028), cambridgeinternational.org:
    Core C-G / Extended A*-G; Paper 5 practical or Paper 6 alternative, 20%.
  - IB DP Biology, ibo.org: SL 150 h, HL 240 h; exams 80%, scientific
    investigation 20%.
  Fee wording is the approved NXTutors sentence.
  FAQs render from faqs/biology-home-tutor-chandigarh.php.
  Area links render only when that Chandigarh area page exists and is active.
--}}
@php
  $cgAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cgA = function (string $slug, string $label) use ($cgAreaSlugs) {
      return in_array($slug, $cgAreaSlugs, true)
          ? '<a href="' . e(url('/city/chandigarh/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="cbiGuideTitle">
  <h2 id="cbiGuideTitle">Biology tuition in Chandigarh, Mohali and Panchkula: Classes 11–12, NEET and the international courses</h2>

  <p class="nx-guide__lede">
    Biology is the subject where the tricity's many boards matter least in content and most in style. A Class 12
    student in Sector 38, a Mohali student on the Punjab board and an IB candidate in Panchkula all meet genetics,
    reproduction and ecology, yet each is marked in a different way, and a NEET aspirant is marked differently again.
    NXTutors matches the board, the class and the exam first, then your sector or phase, and sends two or three
    biology tutors with their fees on screen. The first class with the one you choose is a free demo. This page is by
    the NXTutors Academic Team; the national <a href="{{ url('/biology-home-tutor') }}">biology home tutor guide</a>
    covers the subject in full.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cbi-boards">Senior biology by board</a> ·
    <a href="#cbi-state">State boards</a> ·
    <a href="#cbi-neet">NEET</a> ·
    <a href="#cbi-intl">IGCSE and IB</a> ·
    <a href="#cbi-zones">Reaching each zone</a> ·
    <a href="#cbi-six">Six addresses</a> ·
    <a href="#cbi-mode">Home or online</a> ·
    <a href="#cbi-demo">The demo</a> ·
    <a href="#cbi-fees">Fees</a> ·
    <a href="#cbi-next">Next step</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cbi-boards">How is Class 11–12 biology examined on each tricity board?</h2>
  <p>
    Below Class 10, biology usually lives inside science, and our
    <a href="{{ url('/science-home-tutor-chandigarh') }}">science tutors in Chandigarh</a> page covers those years.
    From Class 11 it is a subject of its own, with theory and practical marks. Here is how the senior papers compare.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Senior biology in the tricity: assessment by board and what the tutor must plan for</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Assessment</th><th scope="col">What the tutor must plan for</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Biology (044)</td><td>Three-hour theory paper of 70 and a practical of 30 in each year; in Class 12, Genetics and Evolution carries 20 of the 70</td><td>Inheritance problems every week; practical record and investigatory project kept current</td></tr>
      <tr><td>ISC Biology (863)</td><td>Class 12 theory of 70 over three hours, a practical of 15, project work 10 and a practical file 5</td><td>Answers with named structures and labelled diagrams; project work spread across the year</td></tr>
      <tr><td>PSEB or BSEH</td><td>The state board's own senior secondary biology course, textbooks and question paper</td><td>The prescribed book, the board's recent papers and its practical rules</td></tr>
      <tr><td>Cambridge IGCSE 0610</td><td>Core or Extended; a practical test or the alternative-to-practical paper is worth 20%</td><td>Tier choice early; method, table and graph questions without apparatus</td></tr>
      <tr><td>IB Diploma Biology</td><td>SL or HL; exams 80%, a scientific investigation 20%</td><td>Links across the four themes; data questions; guidance on the investigation, never ghost-writing</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    In CBSE Class 11, Human Physiology is the heaviest unit at 18 marks, and Diversity of Living Organisms and Cell
    carry 15 each. Those Class 11 chapters return in NEET, so they deserve a proper revision cycle before Class 12
    begins.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbi-state">Biology under the Punjab and Haryana boards</h2>
  <p>
    The state line runs through the tricity. On the Mohali side, including Zirakpur, some families study under the
    Punjab School Education Board; in Panchkula, the Board of School Education Haryana is the state option. We keep
    our advice on both general. Each board publishes its own senior secondary syllabus, books and exam notices, on
    pseb.ac.in and bseh.org.in, and a biology tutor should work from the book in your child's bag and the board's
    own past papers. The habits that earn marks carry across: exact terms, neat labelled diagrams, processes written
    in order. Tell us the board and the medium of instruction when you ask, so we can look for someone who has
    taught that course before.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbi-neet">How should a tricity student combine board biology with NEET?</h2>
  <p>
    NEET (UG) is conducted by the National Testing Agency. Its 2026 information bulletin set 180 compulsory questions
    in 180 minutes, and 90 of them were biology, split between botany and zoology, out of a total of 720 marks. Each
    correct answer earned four marks and each wrong one cost a mark. Biology was also the first subject used to break
    ties. The National Medical Commission notifies the syllabus, and the 2027 bulletin had not been released when we
    wrote this, so check neet.nta.nic.in before relying on any detail.
  </p>
  <p>
    Students who already attend coaching usually want a home tutor for what a large class cannot give: someone who checks
    NCERT recall line by line, goes through every mock to find the chapters leaking marks, and keeps board answers
    and practical records on track at the same time. Say in your request how many hours coaching already takes, so
    the tutor fills the gaps instead of repeating the classroom. See our
    <a href="{{ url('/neet-home-tutor') }}">NEET home tutor</a> page, the
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NCERT-first NEET biology guide</a> and our article on
    <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">coaching, a home tutor or both</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbi-intl">IGCSE and IB biology in the tricity</h2>
  <p>
    International-school students are fewer, so a specialist may live across the tricity from you. For Cambridge
    IGCSE Biology 0610, settle the tier early, because Core stops at grade C while Extended runs from A* to G, and
    practise the alternative-to-practical questions: describing a method, reading a scale, drawing a results table.
    Our <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge and Edexcel IGCSE comparison</a>
    explains how the Edexcel course differs.
  </p>
  <p>
    IB Biology is built on four themes, taught at SL over a recommended 150 hours or at HL over 240. A tutor helps by
    making the links between themes explicit and by rehearsing data-based questions. For the scientific
    investigation, the tutor may question the research question and method; the writing stays the student's own.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbi-zones">How do biology tutors reach each zone?</h2>
  <p>
    Without a metro, the tricity runs on scooters, cars, city buses and autos. When a senior biology lesson runs
    past an hour, an evening slot that begins before the office return is worth protecting.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Getting a biology tutor to your door in each tricity zone</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Typical route in</th><th scope="col">A practical tip</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/chandigarh/zone/chandigarh-sectors-1-30') }}">Chandigarh Sectors 1–30</a></td><td>Along the Margs, or by bus to Sector 17 and an auto onward</td><td>Most homes open onto the street; parking near the Sector 22 market is the only snag</td></tr>
      <tr><td><a href="{{ url('/city/chandigarh/zone/chandigarh-sectors-31-56-manimajra') }}">Sectors 31–56 &amp; Manimajra</a></td><td>Via Dakshin Marg or the Sector 43 bus terminal; Housing Board Chowk for the east</td><td>Sector 40 and 46 families can draw tutors from Mohali or Zirakpur</td></tr>
      <tr><td><a href="{{ url('/city/chandigarh/zone/mohali') }}">Mohali</a></td><td>Across the Chandigarh border from the southern sectors, or along Airport Road</td><td>Aerocity has fewer resident tutors so far; look to the phases or Zirakpur</td></tr>
      <tr><td><a href="{{ url('/city/chandigarh/zone/panchkula-zirakpur') }}">Panchkula &amp; Zirakpur</a></td><td>Madhya Marg or the Zirakpur–Panchkula highway</td><td>A tutor from your own side of Housing Board Chowk keeps the slot steady</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbi-six">Six tricity addresses, and how a biology visit works in each</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>Chandigarh, north and south</h3>
      <p>
        {!! $cgA('sector-11', 'Sector 11') !!} mixes builder floors and houses with a sizeable college campus built
        in the 1960s; for a builder floor, give the floor and the bell to ring.
        {!! $cgA('sector-38', 'Sector 38') !!} combines houses with housing-board flats in the denser second phase,
        next to Sector 38 West, which has its own market; send the exact pocket, as the two are easy to confuse.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Two Mohali addresses</h3>
      <p>
        {!! $cgA('mohali-sector-70', 'Mohali Sector 70') !!} mixes apartment complexes with houses and builder floors
        next to Phase 7; complexes register visitors, houses do not. {!! $cgA('aerocity-mohali', 'Aerocity') !!} is a
        plotted township beside the airport on wide Airport Road, and fewer tutors live inside it yet, so a NEET
        student there often pairs a tutor from the phases with online tests.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Two Panchkula sectors</h3>
      <p>
        {!! $cgA('panchkula-sector-15', 'Panchkula Sector 15') !!} is a self-contained sector of mostly independent
        houses with a full market, and autos are easy to find, so tutors reach it without fuss.
        {!! $cgA('panchkula-sector-8', 'Panchkula Sector 8') !!} is plotted, with houses and builder floors of three
        to five bedrooms; the tutor comes straight to the door.
      </p>
    </div>
  </div>
  <p>
    For more on each side of the tricity, read the
    <a href="{{ url('/blog/chandigarh-sectors-tuition-guide') }}">Chandigarh sectors guide</a> and the
    <a href="{{ url('/blog/mohali-and-panchkula-tuition-guide') }}">Mohali and Panchkula guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbi-mode">Home or online biology tuition in the tricity?</h2>
  <p>
    Home lessons suit students who lose focus on a screen and families who want the tutor to see the practical file,
    the project and the diagram notebook on paper. Online suits mock-test analysis, NEET question practice and
    specialist IB or IGCSE help, since a diagram drawn on a tablet is as clear as one on paper. Many families settle
    on one home lesson a week plus an online session for tests. If a tutor would have to cross the whole tricity at
    rush hour, online is often the better choice for that day.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbi-demo">A checklist for the biology demo</h2>
  <p>
    Ask for the demo on a chapter your child finds hard this month, and watch for these:
  </p>
  <ul>
    <li>The tutor finds out what your child already knows before explaining anything new.</li>
    <li>Your child draws and labels a diagram, rather than watching the tutor draw one.</li>
    <li>The tutor knows the exact course: the CBSE unit weights, the ISC project and practical, your state board's book, the NEET pattern, the IGCSE tier or the IB investigation.</li>
    <li>An answer is written and corrected for terms and order, not just for facts.</li>
    <li>You leave with a plan for the coming weeks, including when older chapters will be revised.</li>
  </ul>
  <p>
    If it does not click, we arrange a demo with the next tutor on the shortlist, and switching later costs nothing.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes
    live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbi-fees">How much does a biology tutor charge in Chandigarh?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Senior biology and NEET
    work generally sits in that upper part. Each tutor sets a rate, and it moves with the course, the tutor's
    experience of that paper, travel across the tricity and the lessons per week. Every fee is visible before the
    demo; the <a href="{{ url('/blog/home-tuition-fees-chandigarh') }}">tricity fees guide</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbi-next">What we need to find your biology tutor</h2>
  <p>
    Send the class, the board or exam, the chapters that worry you, your sector or phase with house or flat details,
    the evenings you can manage, any coaching hours, home or online, and a budget. We shortlist two or three biology
    tutors, you choose one for the free demo, and a later change of tutor is free. See tutors by sector on the
    <a href="{{ url('/city/chandigarh') }}">Chandigarh page</a>.
  </p>
  <p>
    Students taking the full science stream can also look at our
    <a href="{{ url('/chemistry-home-tutor-chandigarh') }}">chemistry</a> and
    <a href="{{ url('/physics-home-tutor-chandigarh') }}">physics</a> tutors in Chandigarh; those still choosing a
    stream may find our <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11 stream choice guide</a>
    useful. Biology teachers who live in the tricity can see open requests on the
    <a href="{{ url('/tuition-jobs/chandigarh') }}">Chandigarh tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
