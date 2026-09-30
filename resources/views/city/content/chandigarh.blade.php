{{--
  Long-form guide for the Chandigarh city page (included by city/show.blade.php
  when a file named after the city slug exists). It covers the tricity:
  Chandigarh, Mohali and Panchkula, with Zirakpur. Figures are either live from
  the database or published NXTutors policy; local facts come from the cited
  research in database/seo-content/areas/chandigarh-research.json. No school,
  college, society, developer, hospital, mall or person is named.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $cgAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cgA = function (string $slug, string $label) use ($cgAreaSlugs) {
      return in_array($slug, $cgAreaSlugs, true)
          ? '<a href="' . e(url('/city/chandigarh/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $cgTutors = (int) ($hubCounts['tutors'] ?? 0);
  $cgAreas = $allAreas->count();
@endphp

<article class="nx-guide cg-guide" aria-labelledby="cgGuideTitle">
  <h2 id="cgGuideTitle">Home tuition across the tricity: Chandigarh, Mohali, Panchkula and Zirakpur</h2>

  <p class="nx-guide__lede cg-lede">
    Chandigarh was drawn on paper before a single house went up, as a grid of numbered neighbourhood units called
    sectors, and Mohali and Panchkula copied the idea on either side. That makes addresses easy: a house number, a sector
    and a block letter tell a tutor almost everything. What the grid hides is that one urban area answers to a Union Territory,
    Punjab and Haryana at once, so the sector you live in can decide the school board, the roads a tutor uses and
    the mix of houses, housing-board flats and gated societies around you. There is no metro yet, so every home
    lesson rides on a scooter, a car, a city bus or an auto.
  </p>
  <nav class="nx-guide__toc cg-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cg-how">How matching works</a> ·
    <a href="#cg-zones">The four zones</a> ·
    <a href="#cg-boards">Boards</a> ·
    <a href="#cg-classes">Classes</a> ·
    <a href="#cg-subjects">Subjects</a> ·
    <a href="#cg-jee-neet">JEE &amp; NEET</a> ·
    <a href="#cg-mode">Home or online</a> ·
    <a href="#cg-fees">Fees</a> ·
    <a href="#cg-choose">The demo class</a> ·
    <a href="#cg-calendar">The school year</a> ·
    <a href="#cg-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cg-how">How does NXTutors find a tutor for a tricity family?</h2>
  <p>
    You fill in one request: the student's class and board, the subjects, your sector or phase (with its block or
    house number), the free evenings or weekend slots, whether you want lessons at home, online or a mix, and a
    budget. From that we put forward two or three tutors who fit. Every profile shows the tutor's fee before you
    book anything, and the first lesson with whichever tutor you choose is a free demo. In the tricity, four things
    shape that shortlist more than anywhere else:
  </p>
  <ul>
    <li><strong>Which side of the border?</strong> A family in Mohali, Panchkula or Chandigarh proper may sit a few sectors from each other yet study under different boards, so we match the board before the postcode.</li>
    <li><strong>Which road will the tutor use?</strong> With no metro, the question is whether a tutor comes along Madhya Marg, Dakshin Marg, Airport Road or the highway through Zirakpur, and at what hour.</li>
    <li><strong>House, flat or society?</strong> The first-phase sectors are mostly plotted houses with their own gate; the southern sectors add housing-board flats; Sector 49, Panchkula Sector 20 and much of Zirakpur are gated societies with a guard.</li>
    <li><strong>What exactly is the goal?</strong> A Class 7 learner needing steady homework help and a Class 12 student balancing boards with JEE need very different people, even in the same street.</li>
  </ul>
  <p>
    The demo is an ordinary lesson on whatever chapter is current at school. If the fit is wrong, we line up the next
    tutor on your list, and changing tutor later costs nothing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cg-zones">The tricity in four zones</h2>
  <p>
    @if($cgTutors > 0)
      The tutors shown on this page come from {{ number_format($cgTutors) }} tutor profiles,
    @else
      The tutors shown on this page come from our tutor profiles,
    @endif
    and @if($cgAreas > 0){{ number_format($cgAreas) }} sectors, phases and towns @else each sector, phase and town @endif
    in the tricity can carry a page of its own. Each of those pages puts tutors in that locality first, then tutors
    from the rest of its zone, then online tutors. For planning home lessons we split the tricity into four zones,
    moving roughly from the older north of Chandigarh to its outer towns:
    <a href="#cg-north">Chandigarh Sectors 1–30</a>, <a href="#cg-south">Chandigarh Sectors 31–56 &amp;
    Manimajra</a>, <a href="#cg-mohali">Mohali</a> and <a href="#cg-panchkula">Panchkula &amp; Zirakpur</a>. These
    groupings are ours and follow how tutors travel, not municipal or state lines.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="cg-north">Chandigarh Sectors 1–30: the first-phase grid of plotted homes</h3>
  <p>
    Sectors 1 to 30 were built in the city's first phase as low-rise plotted neighbourhoods, with Sector 17 as the
    central business district. Sector 1 holds the Capitol Complex, declared a UNESCO World Heritage Site in July 2016,
    and Sukhna Lake, made in 1958 by damming the Sukhna Choe. {!! $cgA('sector-22', 'Sector 22') !!} was the first
    sector to be developed and is still among the busiest, with a long street market beside its main market.
    Along the top row, {!! $cgA('sector-8', 'Sector 8') !!} is an older sector of houses and low-rise blocks around a
    busy market, {!! $cgA('sector-9', 'Sector 9') !!} has bungalows and government residences on wide, tree-lined
    streets, and {!! $cgA('sector-10', 'Sector 10') !!} runs from one-kanal homes to duplexes beside the Leisure
    Valley green belt and the Government Museum and Art Gallery.
  </p>
  <p>
    To the west, {!! $cgA('sector-11', 'Sector 11') !!} mixes builder floors and houses around two government
    college campuses, and {!! $cgA('sector-15', 'Sector 15') !!}, beside the large university campus in Sector 14,
    has paying-guest homes among the family houses, so postgraduate students and researchers who tutor often live
    within walking distance. {!! $cgA('sector-16', 'Sector 16') !!} holds the Rose Garden and the cricket stadium on
    Jan Marg; {!! $cgA('sector-18', 'Sector 18') !!} is a quiet sector of houses next to Sector 17 and its bus
    terminal; {!! $cgA('sector-19', 'Sector 19') !!} pairs houses with housing-board flats around Sadar Bazaar in
    19-C; {!! $cgA('sector-21', 'Sector 21') !!} is closely built in blocks A to D along Dakshin Marg; and
    {!! $cgA('sector-27', 'Sector 27') !!}, on the eastern side, suits tutors coming in from Panchkula or Manimajra.
  </p>
  <p>
    Almost every visit here is a doorbell rather than a gate register, though builder floors need the floor and the
    right bell spelled out. The Chandigarh Transport Undertaking's inter-state bus terminal in Sector 17 puts
    Sectors 16, 18, 21 and 22 within an easy bus ride. Madhya Marg fills in the office rush, so an evening lesson
    that starts before the return traffic is easier to keep.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="cg-south">Chandigarh Sectors 31–56 &amp; Manimajra: flats, housing-board blocks and an old town</h3>
  <p>
    The second phase changed the pattern. Sectors 31 to 47 were built with four-storey apartments for government
    employees, at nearly four times the density of the northern sectors, and Chandigarh Housing Board blocks are
    spread across Sectors 38 to 41, 44 to 47, 51, 52 and 55. {!! $cgA('sector-33', 'Sector 33') !!}, near the old
    village of Burail, is mostly houses and floors around the Terraced Garden of 1979, home to the annual
    chrysanthemum show. {!! $cgA('sector-35', 'Sector 35') !!} wraps quiet residential pockets round one of south
    Chandigarh's busiest markets, and {!! $cgA('sector-36', 'Sector 36') !!} centres on the Garden of Fragrance, laid
    out in 1998 in concentric circles.
  </p>
  <p>
    {!! $cgA('sector-38', 'Sector 38') !!} mixes houses with housing-board flats, while Sector 38 West is a separate
    pocket with its own market. {!! $cgA('sector-40', 'Sector 40') !!} is mid-budget flats and houses, known for the
    Sunday second-hand bike market in 40-C. {!! $cgA('sector-44', 'Sector 44') !!} runs in sub-sectors 44-A, 44-C
    and 44-D, from one-room flats to larger units, right beside the Sector 43 bus terminal.
    {!! $cgA('sector-46', 'Sector 46') !!} is one of the few southern sectors where independent houses come up
    regularly. {!! $cgA('sector-49', 'Sector 49') !!} belongs to the belt of Sectors 48 to 51 where cooperative group
    housing societies brought apartment living to the city.
  </p>
  <p>
    {!! $cgA('manimajra', 'Manimajra') !!}, an old town from the early sixteenth century with its fort still
    standing, stayed outside the grid until the Administration notified it as Sector 13 in February 2020; the
    original plan had skipped that number. It mixes old-town lanes with planned complexes, an IT park and a large
    motor market, and sits at Housing Board Chowk, where the Panchkula commute meets Madhya Marg. Chandigarh
    Junction, on the Delhi–Ambala–Kalka line opened in 1891, is on this side. Housing-board blocks rarely have
    staffed gates, the societies of Sector 49 do, and Manimajra's lanes make parking the thing to agree first.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="cg-mohali">Mohali: phases, sectors and Aerocity on the Punjab side</h3>
  <p>
    Mohali, officially Sahibzada Ajit Singh Nagar, grew from an industrial estate begun in 1967, and the township's
    foundation stone was laid on 1 November 1975. It extends Chandigarh's grid, but its first eleven sectors are
    known as phases: Phase 7 is Sector 61 and Phase 8 is Sector 62. It became a separate district, carved out of
    Rupnagar, in 2006, and the Greater Mohali master plan now runs up to Sector 128, with IT City in Sectors 82,
    82A and 83A.
  </p>
  <p>
    {!! $cgA('mohali-phase-3b2', 'Phase 3B2') !!} is houses and villas round its own market and gurdwara, and
    {!! $cgA('mohali-phase-5', 'Phase 5') !!}, also numbered Sector 59, is largely independent houses of varied sizes.
    {!! $cgA('mohali-phase-7', 'Phase 7') !!}, on Sarovar Path, borders Chandigarh's Sector 52 and has one of Mohali's
    main markets, so tutors from Chandigarh's southern sectors reach it easily. {!! $cgA('mohali-phase-10', 'Phase 10') !!},
    or Sector 64, has many three-bedroom flats beside Phase 9, which holds the cricket and hockey stadiums.
    {!! $cgA('mohali-sector-70', 'Sector 70') !!} mixes apartment complexes with LIG, MIG and HIG houses and around
    ten parks, beside the villages of Mattaur and Sohana. {!! $cgA('aerocity-mohali', 'Aerocity') !!}, planned
    beside the international airport, is a newer township of plots and houses along Airport Road.
  </p>
  <p>
    The early phases are doorstep visits; apartment complexes in Phase 10 and Sector 70 want a name at the gate.
    SAS Nagar Mohali station lies on the direct Chandigarh–Ludhiana line, completed in April 2013, and National
    Highway 5 runs through Kharar and Mohali into Chandigarh. Aerocity has fewer tutors living inside it yet, so
    families there often draw on the phases, Zirakpur or Chandigarh, or go online for a specialist.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="cg-panchkula">Panchkula &amp; Zirakpur: Haryana's sector city and the southern gateway</h3>
  <p>
    Haryana planned Panchkula in the 1970s on a sector system much like Chandigarh's, so addresses read the same way.
    {!! $cgA('panchkula-sector-8', 'Sector 8') !!} is plotted houses and builder floors, many with three to five
    bedrooms, near the Himalayan Expressway and Budhanpur Road. {!! $cgA('panchkula-sector-15', 'Sector 15') !!} is
    self-contained, with a full market whose tuition centres mean plenty of teachers already work nearby.
    {!! $cgA('mansa-devi-complex-panchkula', 'Mansa Devi Complex') !!}, or MDC, spreads over Sectors 4, 5 and 6
    and takes its name from the Mata Mansa Devi temple, whose Navratra crowds are worth planning lessons around.
    Further north, Chandimandir Cantonment is the headquarters of the Army's Western Command.
  </p>
  <p>
    Towards the south, {!! $cgA('panchkula-sector-20', 'Sector 20') !!} is one of Panchkula's main apartment
    sectors, built up with group housing and cooperative societies, and {!! $cgA('panchkula-sector-21', 'Sector 21') !!}
    mixes houses, flats and plots; Peer Muchalla in Zirakpur adjoins both. {!! $cgA('zirakpur', 'Zirakpur') !!}
    itself falls in Mohali district, on the Punjab side, and grew from villages such as Baltana and Dhakoli into a
    town of gated societies at the junction of the highways to Shimla, Ambala and Patiala; it is often called the
    gateway to Chandigarh from Delhi.
  </p>
  <p>
    National Highway 5 enters Haryana at Zirakpur and runs on through Panchkula, Pinjore and Kalka, and the
    redeveloped Chandigarh Junction has a station building on the Panchkula side too. Society gates dominate Sector
    20 and Zirakpur, so register the tutor once at the start. The highway and Housing Board Chowk carry heavy
    commuter traffic, which makes a tutor from your own side of the chowk the steadier choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cg-boards">Which boards do tricity tutors teach?</h2>
  <p>
    Tricity families study under up to five boards, and a tutor fluent in one is not automatically at ease in
    another, so the board is the first thing we match. CBSE, CISCE and the international programmes are national or
    global; the two state boards follow the state line.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    CBSE papers rest on the NCERT textbooks, and a good share of each paper now tests whether a student can apply
    an idea: case-based passages, assertion–reason items and familiar concepts placed in new settings. The tutor to
    look for works through the NCERT chapter first, then the board's sample papers and marking schemes, and insists
    on written steps so method marks are banked.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    CISCE sets the ICSE at Class 10 and the ISC at Class 12. Both expect long written answers over a wide syllabus,
    with prescribed literature in English. The usual difficulty is keeping every chapter fresh rather than any single
    hard topic, so a tutor should run a repeating revision cycle and timed writing, and keep an eye on project work.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and IGCSE</h3>
  <p>
    The IB Diploma mixes final exams with internal assessment, and its Mathematics comes as Analysis and Approaches or
    Applications and Interpretation, each at Standard or Higher Level. A tutor may discuss an Internal Assessment or
    Extended Essay but must not write it. Cambridge IGCSE rewards command words, the right tier and past papers
    marked against the official scheme.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Punjab School Education Board</h3>
  <p>
    On the Mohali side, including Zirakpur, some families study under the Punjab School Education Board. Its
    textbooks and papers are its own, so a tutor should work from the board's prescribed books and past papers
    rather than assume CBSE material fits, and should check the current syllabus on the board's website.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Board of School Education Haryana</h3>
  <p>
    In Panchkula, the Board of School Education Haryana is the state option. The same rule applies: teach from the
    board's own books, practise its past papers, and confirm the scheme each year on its official site. A tutor who
    knows both this board and CBSE helps a family that changes schools across the Panchkula–Chandigarh line.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cg-classes">What should tuition cover at each stage?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Classes 1 to 8</h3>
  <p>
    The primary and middle years are about habits: reading with understanding, quick number work, fractions and
    decimals, the first taste of algebra, and neat, complete answers. One or two lessons a week with a tutor beside
    the child is usually enough, and a tutor from the next sector or phase keeps that routine easy.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    Maths and Science jump in difficulty in Class 9, and the Class 10 board year builds directly on it, so gaps
    carried forward surface at the worst moment. Teach Class 9 fully, then in Class 10 move from chapters to tests
    to full papers in the second half of the year. See our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 Maths preparation plan</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 Science notes</a>.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    After Class 10 the stream decides the tuition. Science students most often need Physics and Maths, commerce
    students Accountancy and Economics, and a separate specialist per subject usually works better than one
    all-rounder. Our <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 Physics strategies</a>
    and <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a> go
    further.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cg-subjects">Which subjects can a tricity tutor take on?</h2>
  <p>
    Tutors on NXTutors cover Mathematics, Physics, Chemistry, Biology, English, Computer Science, Accountancy,
    Economics, Business Studies and Hindi, and many handle every subject for the primary classes. The tricity has
    dedicated pages for <a href="{{ url('/maths-home-tutor-chandigarh') }}">maths home tutors in Chandigarh</a>,
    <a href="{{ url('/science-home-tutor-chandigarh') }}">science home tutors</a>,
    <a href="{{ url('/physics-home-tutor-chandigarh') }}">physics home tutors</a> and
    <a href="{{ url('/chemistry-home-tutor-chandigarh') }}">chemistry home tutors</a>, each with local tutors and
    board-by-board detail. Class 12 Chemistry deserves a word: its physical, organic and inorganic parts reward
    different habits, as our <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">organic and
    inorganic Chemistry guide</a> explains. For older students applying overseas, online tutors also prepare
    <a href="{{ url('/blog/ielts-writing-preparation-2025') }}">IELTS Writing</a>,
    <a href="{{ url('/blog/ielts-speaking-preparation') }}">IELTS Speaking</a> and the
    <a href="{{ url('/blog/sat-math-modules--dsat') }}">digital SAT Maths modules</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cg-jee-neet">Can a home tutor support JEE or NEET preparation here?</h2>
  <p>
    Yes, working next to a coaching programme rather than instead of it. The hours a tutor adds pay off in three
    ways:
  </p>
  <ul>
    <li><strong>Clearing the coaching pile.</strong> Each week the tutor goes through unsolved sheet problems and every question the student got wrong in the last test.</li>
    <li><strong>One revision for two exams.</strong> NCERT content from Classes 11 and 12 feeds both the board papers and the entrance tests, so a single plan serves both.</li>
    <li><strong>Lifting the weak subject.</strong> Time aimed at the subject that pulls the total down does more than the same hours spread evenly across three.</li>
  </ul>
  <p>
    NTA runs JEE Main in two sessions in the first half of the year, and qualifiers can sit JEE Advanced; NEET UG
    is held once a year, with Biology carrying half the marks, so close reading of the NCERT Biology books is the
    core of preparation. Take every date from that year's official bulletin. Our topic plans cover
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE Maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE Physics</a>,
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE Chemistry</a> and
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET Biology, starting from NCERT</a>. When coaching runs
    late into the evening, a short online session for doubts often fits better than a home visit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cg-mode">Should lessons be at home or online in the tricity?</h2>
  <p>
    A tutor at the table suits younger children and any subject where the written working counts as much as the
    answer, such as Maths or Chemistry numericals. Online lessons reach tutors across India, which matters most for
    IB, IGCSE and senior specialist papers. In the tricity, travel settles much of the choice:
  </p>
  <ul>
    <li><strong>No metro yet.</strong> The tricity has no metro in operation; the revived Chandigarh Metro, cleared in July 2024, is planned for a first phase between 2027 and 2034. Until then tutors come by road.</li>
    <li><strong>Two commuter corridors.</strong> Madhya Marg carries most of the morning traffic between Panchkula and Chandigarh, through Housing Board Chowk, and the highway through Zirakpur carries the southern flow. Evening slots set just before the return rush are the ones that last.</li>
    <li><strong>Bus terminals as meeting points.</strong> The inter-state bus terminals in Sectors 17 and 43 put the sectors around them within reach of tutors who travel by bus, with an auto for the last stretch.</li>
    <li><strong>Local calendars.</strong> Match days near the stadiums in Sector 16 and Mohali's Phase 9, and Navratra near the Mansa Devi temple, are good weeks to switch a lesson online.</li>
  </ul>
  <p>
    Many families settle on a weekly home lesson plus a short online doubt session with the same tutor. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">comparison of home and online tutors</a> and the piece
    on <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online versus offline tutoring</a> weigh the two.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cg-fees">What does a home tutor cost in the tricity?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their
    own fee, and three things usually move it:
  </p>
  <ul>
    <li><strong>The class and the board.</strong> Primary lessons tend to cost less than senior classes, and IB or IGCSE work sits higher.</li>
    <li><strong>How specialised the help is.</strong> JEE Advanced problem work, IB Higher Level and support around coursework sit at the top.</li>
    <li><strong>The journey.</strong> A tutor crossing from Panchkula to Mohali, or through Housing Board Chowk at rush hour, may build that in; one from your own sector or phase usually does not.</li>
  </ul>
  <p>
    You see every shortlisted fee before the demo, and we do not suggest tutors above the budget you give. The
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> breaks fees down by class and subject, and our
    <a href="{{ url('/blog/home-tuition-fees-chandigarh') }}">guide to home tuition fees in Chandigarh</a> looks at
    the tricity in more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cg-choose">What should you watch for in the demo class?</h2>
  <p>A profile earns a tutor a place on your list; the demo shows whether they belong there. Watch five things:</p>
  <ol>
    <li><strong>Did they test before teaching?</strong> A good tutor finds out what the student already knows before explaining anything.</li>
    <li><strong>Who held the pen?</strong> Your child should spend most of the lesson solving and answering, not watching.</li>
    <li><strong>Do they know your board?</strong> Ask how this year's paper is set. The answer for the Punjab or Haryana board should not be the CBSE answer.</li>
    <li><strong>Is there a plan?</strong> What will the next four weeks cover, and how will you see progress?</li>
    <li><strong>Does the journey work?</strong> Which road, what time, and what happens on a match day or festival evening?</li>
  </ol>
  <p>
    For a gated society in Sector 49, Panchkula Sector 20 or Zirakpur, give the guard the tutor's name or add it to
    the visitor app before the demo. For a house or builder floor, send the sector, block, house number, floor and a
    map pin. Keep lessons in a shared room with an adult at home. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> and the guide
    to <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a> go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cg-calendar">When in the school year should tuition start?</h2>
  <p>CBSE's academic session begins in April, and a board year tends to fall into five parts:</p>
  <ul>
    <li><strong>April to June:</strong> new books and the summer break, the easiest time to begin and to mend last year's gaps.</li>
    <li><strong>July to September:</strong> regular weekly lessons beside school, chapter tests, and first-term exams in many schools.</li>
    <li><strong>October to December:</strong> finishing the syllabus, with pre-board exams in many schools near the new year.</li>
    <li><strong>January to March:</strong> board exams after a run of sample papers; the first JEE Main session usually falls here as well.</li>
    <li><strong>April to May:</strong> the second JEE Main session, then JEE Advanced and NEET UG, while IB and Cambridge students sit their May papers.</li>
  </ul>
  <p>
    State boards publish their own calendars, so Punjab and Haryana board families should check the board's notices.
    A spring start gives a tutor the whole year; a winter start still helps, with the weight on papers and timing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cg-start">How do you get started in the tricity?</h2>
  <p>
    Send us the class, the board, the subjects, your sector or phase with its block, and the slots that suit you. We
    come back with two or three matched tutors; you pick one for a free demo and decide afterwards. Choose your
    locality from the zones above, browse <a href="{{ url('/tutors') }}">all tutors</a> or book a
    <a href="{{ url('/demo-class') }}">free demo class</a>. If no home tutor is close enough yet, an online tutor
    from elsewhere in India can begin right away.
  </p>
  <p>
    Planning for one part of the tricity? Our local guides cover
    <a href="{{ url('/blog/chandigarh-sectors-tuition-guide') }}">Chandigarh's sectors</a> and
    <a href="{{ url('/blog/mohali-and-panchkula-tuition-guide') }}">Mohali and Panchkula</a>.
  </p>
  <p class="cg-note">
    Looking elsewhere? See home tutors in <a href="{{ url('/city/delhi') }}">Delhi</a>,
    <a href="{{ url('/city/gurugram') }}">Gurugram</a> and <a href="{{ url('/city/faridabad') }}">Faridabad</a>,
    the <a href="{{ url('/city/delhi-ncr') }}">Delhi NCR</a> hub, or <a href="{{ url('/city') }}">cities across
    India</a>.
  </p>
  <p class="cg-note">
    Teaching in the tricity? See <a href="{{ url('/tuition-jobs/chandigarh') }}">home tuition jobs in
    Chandigarh</a> and the sectors where families are asking for tutors.
  </p>
  </section>

  </div>
</article>
