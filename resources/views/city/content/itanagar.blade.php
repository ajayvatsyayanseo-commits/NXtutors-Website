{{--
  Long-form guide for the Itanagar city page (included by city/show.blade.php
  when a file named after the city slug exists). Covers the whole capital
  region: Itanagar, Naharlagun, Nirjuli, Banderdewa and Doimukh. It is purely
  practical and educational: no politics, no tourism, and weather appears only
  as timing advice. Every figure is live from the database or a published
  NXTutors policy; local facts come only from the cited research in
  database/seo-content/areas/itanagar-research.json (areas, zone_facts and
  board_facts). The board section names no state board: per CBSE's own
  affiliation overview, Arunachal Pradesh's government schools are
  CBSE-affiliated. No school, college, university, institute, hospital, mall,
  society, developer or person is named.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $itnAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $itnA = function (string $slug, string $label) use ($itnAreaSlugs) {
      return in_array($slug, $itnAreaSlugs, true)
          ? '<a href="' . e(url('/city/itanagar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $itnTutors = (int) ($hubCounts['tutors'] ?? 0);
  $itnAreas = $allAreas->count();
@endphp

<article class="nx-guide itn-guide" aria-labelledby="itnGuideTitle">
  <h2 id="itnGuideTitle">Home tuition in Itanagar: a parent's guide from Chimpu to Banderdewa</h2>

  <p class="nx-guide__lede itn-lede">
    Arunachal Pradesh's capital is less one town than a chain of them, threaded along a single highway through the
    foothills. Itanagar starts at Chandranagar and Chimpu in the north, runs through the sectors around the Civil
    Secretariat and Zero Point, and then meets Naharlagun, with Papu Nallah in between. Beyond Naharlagun the road
    carries on to Nirjuli and to Banderdewa on the Assam border, and Doimukh lies a little apart as its own
    administrative circle. Many families live in government quarters inside official colonies; others live in
    independent houses on the slopes above and below the road. For a tutor, that means three practical questions
    come up again and again: how to get past a colony gate, how far along the highway the home is, and what to do on a
    day of heavy rain.
  </p>
  <nav class="nx-guide__toc itn-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#itn-how">Matching</a> ·
    <a href="#itn-zones">Four zones</a> ·
    <a href="#itn-boards">School boards</a> ·
    <a href="#itn-classes">By class</a> ·
    <a href="#itn-subjects">Subjects</a> ·
    <a href="#itn-jee-neet">Entrance exams</a> ·
    <a href="#itn-mode">Home, online or both</a> ·
    <a href="#itn-fees">What tutors charge</a> ·
    <a href="#itn-choose">Judging the demo</a> ·
    <a href="#itn-calendar">Calendar</a> ·
    <a href="#itn-start">First steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="itn-how">How does a family in Itanagar get matched with a tutor?</h2>
  <p>
    Everything begins with one short request. Tell us the class, the board, which subjects worry you, your sector or
    colony with a nearby landmark, the hours your child is genuinely free, and whether you would rather have lessons at
    home, online or some of each. From that we put forward two or three tutors, and
    you can see what each one charges before you meet. The opening lesson with your chosen tutor is a free demo, and
    moving to a different tutor later on is also free. In the capital region, these details shape the shortlist most:
  </p>
  <ul>
    <li><strong>Town and sector, not only "Itanagar".</strong> A home in Naharlagun's G Extension and one in Chimpu are at opposite ends of the region. Naming the sector helps us find a tutor who already travels that stretch.</li>
    <li><strong>Colony or private house.</strong> Inside an official staff colony the guard may want the tutor's name; at a private house on a hill lane the tutor walks to the door.</li>
    <li><strong>The board and the class together.</strong> Most students here are on CBSE, some on ICSE or ISC; a tutor strong on one paper is not automatically right for the other.</li>
    <li><strong>A rain plan.</strong> Say whether you are happy for a lesson to move online when the weather is bad. It widens the list.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itn-zones">The capital region, zone by zone</h2>
  <p>
    @if($itnTutors > 0)
      Lists for Itanagar draw on {{ number_format($itnTutors) }} tutor profiles,
    @else
      Lists for Itanagar draw on the tutor profiles on NXTutors,
    @endif
    and @if($itnAreas > 0){{ number_format($itnAreas) }} localities in the capital region @else each locality we cover in the capital region @endif
    have their own page. Each locality page lists tutors who live there first, then those from the same zone, then
    tutors elsewhere in the region, and finally online tutors from across India. Following the highway from north to
    south-east, we use four planning zones:
    <a href="#itn-north">Itanagar North (Chimpu &amp; Ganga)</a>, <a href="#itn-central">Central Itanagar</a>,
    <a href="#itn-naharlagun">Naharlagun &amp; Papu Nallah</a> and
    <a href="#itn-nirjuli">Nirjuli, Banderdewa &amp; Doimukh</a>. They are our own groupings for arranging visits, not
    municipal wards.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="itn-north">Itanagar North (Chimpu &amp; Ganga): where the capital begins</h3>
  <p>
    {!! $itnA('chimpu', 'Chimpu') !!} stands at the northern entry, where the Chimpu River joins the Senki. Much of its
    land is official campuses and staff quarters rather than open private housing, so plenty of homes sit inside
    government colonies. {!! $itnA('chandranagar', 'Chandranagar') !!} marks the start of the municipal area on this
    side, with a market, a colony and a forest colony above the highway and some light industry on the low ground by
    the river. {!! $itnA('vivek-vihar-itanagar', 'Vivek Vihar') !!}, between the highway and the Senki, mixes officers'
    colonies with independent houses and has a hilltop part reached by internal roads; the Jollang Road climbs from
    here. {!! $itnA('ganga-market', 'Ganga Market') !!} is one of the city's main shopping areas, with banks, a
    shared-taxi counter and an auto stand, and H, F and G Sectors and the Old Ganga Market behind it.
  </p>
  <p>
    For tuition, the zone splits into two kinds of visit. In the staff colonies, share the tutor's name with the gate
    before the first lesson. In the private houses on the slopes, the tutor simply walks up. A tutor without a vehicle
    can use the shared taxis and autos that stop at Ganga Market and walk into the sectors. Evening traffic at the
    market and office hours on the highway are the slots to avoid; a late-afternoon lesson or a weekend morning usually
    runs smoothly.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="itn-central">Central Itanagar: the Secretariat side, the markets and the ridge</h3>
  <p>
    {!! $itnA('e-sector-itanagar', 'E-Sector') !!} faces the Civil Secretariat on the highway, and offices, banks and
    government housing are packed close together around it. {!! $itnA('bank-tinali', 'Bank Tinali') !!} is a busy
    junction with several bank branches, flats above shops, older houses in the side lanes and quarters in C-II Sector
    and the Forest Colony. {!! $itnA('niti-vihar', 'Niti Vihar') !!}, up the inner road, is quieter and largely
    residential: official bungalows and staff colonies, a small market and private houses on the slopes.
    {!! $itnA('c-sector-itanagar', 'C-Sector') !!} holds officers' colonies, offices and the market area, with a daily
    market road rising from the highway, and {!! $itnA('zero-point', 'Zero Point and P-Sector') !!} is the junction at
    the eastern end of the centre. Beyond it lie A and B Sectors and the ridge with the Raj Bhawan, near the eastern
    gate of Ita Fort, a brick fort generally dated to the fourteenth or fifteenth century.
  </p>
  <p>
    Since August 2013 the city has been run by the Itanagar Municipal Corporation. Expect a gate check at official compounds and doorstep arrival
    elsewhere. Parking is tight near the markets, so tutors on two-wheelers or arriving by shared taxi have the easier
    time. The stretch in front of the Secretariat and the Bank Tinali junction are busiest when offices and schools
    close, so an early-evening or weekend slot is kinder to both sides.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="itn-naharlagun">Naharlagun &amp; Papu Nallah: the twin town and the stretch between</h3>
  <p>
    {!! $itnA('papu-nallah', 'Papu Nallah') !!}, named after the stream that runs through it, sits halfway between
    Itanagar and Naharlagun, with the Press Colony, Papu Colony and Papu Hill on the hillsides and the Yupia road
    junction at its eastern edge. {!! $itnA('barapani', 'Barapani') !!} is the western entry to Naharlagun beside the
    Pachin River, where a market, offices and housing sit together around the Deputy Commissioner's office area.
    {!! $itnA('polo-colony', 'Polo Colony') !!} is a residential hillside of government quarters and houses above the
    Lagun and Pachin rivers. {!! $itnA('naharlagun', 'Naharlagun') !!} itself, a foothill town run as part of the
    Itanagar Capital Complex and home to many government departments, spreads from A and B Sectors, Prem Nagar and the
    daily market up to E, F and G Sectors and G Extension.
  </p>
  <p>
    Naharlagun railway station, opened in April 2014, is the state's first major rail head, with trains to Guwahati
    and Delhi. Day to day, tutors travel by
    two-wheeler or shared taxi along the highway and take an auto from the daily market for the hill sectors. A tutor
    living in Naharlagun can cover Barapani, Polo Colony and Papu Nallah easily, and one from Zero Point can reach Papu
    Nallah from the other side. Through traffic between the two towns is heaviest at peak hours, so calmer slots come
    after the evening rush.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="itn-nirjuli">Nirjuli, Banderdewa &amp; Doimukh: the smaller towns towards Assam</h3>
  <p>
    {!! $itnA('nirjuli', 'Nirjuli') !!} lies beyond Naharlagun on NH-415, the road still often called by its old number,
    NH-52A, with the Par and Dikrong rivers flowing through the area. Homes here are staff quarters on a large
    technical campus that the highway divides, government colonies and private houses near the road, and the whole
    Nirjuli complex is a single municipal ward. {!! $itnA('banderdewa', 'Banderdewa') !!} sits on the Dikrong at the
    border with Assam, where NH-415 begins; it has a market area, government staff housing and independent houses.
    {!! $itnA('doimukh', 'Doimukh') !!} is a small town that forms its own subdivision and block of Papum Pare district,
    separate from the capital complex circles.
  </p>
  <p>
    These towns have fewer resident tutors than Itanagar or Naharlagun, so the realistic plan is often a tutor from
    Naharlagun for the core subject plus online lessons for the rest. A fixed weekly slot makes the trip worthwhile for
    a visiting tutor. Banderdewa is the main check gate between Arunachal Pradesh and Assam: a tutor coming in from
    outside the state may need a permit, so check the official rules first. Campus and staff colonies usually
    register visitors at the gate; private houses mean doorstep arrival.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itn-boards">Which boards do tutors in Itanagar teach?</h2>
  <p>
    Schooling in Arunachal Pradesh follows the uniform 10+2 structure. CBSE's own affiliation overview lists the
    state's government schools among the schools affiliated to it, so CBSE is the board most capital-region families
    deal with. Some private schools follow CISCE's ICSE and ISC, and a handful of families on IB or Cambridge IGCSE
    look further afield. A tutor is matched to the board and the class at once.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    CBSE runs the Class X and Class XII examinations for the schools affiliated to it. Its questions grow out of the
    NCERT books and increasingly test whether a student can apply an idea in a fresh setting. Teaching should stay
    close to those books, the board's sample papers and its marking style, with exam dates read only from CBSE's
    notices. More on our <a href="{{ url('/cbse-home-tutor-itanagar') }}">CBSE home tutors in Itanagar</a> page.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    The CISCE papers at Class 10 (ICSE) and Class 12 (ISC) reward full, precise written answers across a broad
    syllabus, plus literature in English and internal project work. Plan revision in cycles so no chapter is left to
    the last month, and practise writing against the clock.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and IGCSE</h3>
  <p>
    For these programmes, usually followed after a family transfer, the specialist will most likely teach online. In
    IB, a tutor can advise on an Internal Assessment but the student writes it; for IGCSE, regular past papers marked
    against Cambridge's schemes do most of the work.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itn-classes">What matters most at each stage of school?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Primary and middle school</h3>
  <p>
    Up to Class 8, look for reading with understanding, quick and accurate arithmetic, and homework that gets
    finished. Where a child speaks another language at home and learns in English, short spells of reading aloud and
    retelling build confidence faster than extra drills.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Class 9 and the Class 10 board</h3>
  <p>
    Gaps that open in Class 9 maths and science tend to surface in the board year, so a tutor's real job is to keep
    up with school week by week. Two of our NCERT-based guides help here: the
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 Maths study plan</a> and the
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">chapter notes for Class 10 Science</a>.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>The senior classes</h3>
  <p>
    Class 11 brings a sharp rise in difficulty, and falling behind in Physics or Maths that year is hard to undo in
    Class 12. Pick a specialist for each tough subject. For the board year, see our advice on
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">scoring in Class 12 Physics</a> and on
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itn-subjects">Which subjects can tutors cover in the capital region?</h2>
  <p>
    Most requests from Itanagar parents start with Maths and Science; Physics, Chemistry and Biology follow once
    streams divide in Class 11, and English is wanted at every level. Hindi, Social Science, Computer Science and the
    commerce subjects are taught too, and for younger children one tutor often takes the whole timetable. Itanagar
    pages by subject:
    <a href="{{ url('/maths-home-tutor-itanagar') }}">Maths</a>,
    <a href="{{ url('/science-home-tutor-itanagar') }}">Science</a>,
    <a href="{{ url('/physics-home-tutor-itanagar') }}">Physics</a>,
    <a href="{{ url('/chemistry-home-tutor-itanagar') }}">Chemistry</a>,
    <a href="{{ url('/biology-home-tutor-itanagar') }}">Biology</a> and
    <a href="{{ url('/english-home-tutor-itanagar') }}">English</a>.
  </p>
  <p>
    Good maths teaching goes back to the step where a student first got lost, even if it belongs to an earlier class.
    Physics improves when the student can say why a formula fits before using it. Chemistry mixes calculation,
    pattern-spotting and memory, as our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Organic and Inorganic Chemistry guide for
    Class 12</a> shows. In English, aim for answers written clearly in the student's own words, with
    <a href="{{ url('/blog/spoken-english-for-students') }}">speaking practice</a> done at home between lessons.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itn-jee-neet">Can a tutor in Itanagar support JEE or NEET preparation?</h2>
  <p>
    Yes. For a student preparing from home instead of moving to a coaching city, a tutor with a defined role is what
    keeps the plan honest: one weekly sitting to clear the doubts piled up since the last one, a single revision plan in
    which the Class 11 and 12 NCERT chapters serve the board and the entrance test together, and extra hours aimed at
    whichever subject is costing the most marks.
  </p>
  <p>
    JEE Main is run by NTA in two sessions in the first half of the year, and a good enough result leads to JEE
    Advanced. NEET UG comes once a year with Biology carrying half the marks, which is why the NCERT Biology text
    deserves line-by-line attention. Rely only on the current official bulletin for dates. Share our topic-wise plans
    for <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">Maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">Physics</a> and
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">Chemistry for JEE</a>, and our
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET Biology guide built on NCERT</a>, with the tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itn-mode">Home or online lessons in Itanagar?</h2>
  <p>
    A tutor in the room helps young children, students whose attention slips on a screen, and any subject where the
    written working matters as much as the answer. Online lessons open the door to specialists anywhere in the
    country, useful for international boards, ISC electives and tougher entrance work. Here, the region itself tips
    many families towards a mix:
  </p>
  <ul>
    <li><strong>A long, narrow region.</strong> With homes spread along one highway from Chimpu to Banderdewa, a tutor from your own zone is much easier to keep than one crossing the whole region.</li>
    <li><strong>Hill roads and heavy rain.</strong> On very wet days, allow extra time or move that lesson online; settle this with the tutor at the outset, not on the morning itself.</li>
    <li><strong>Smaller towns.</strong> In Nirjuli, Banderdewa and Doimukh, a home tutor for the core subject plus online lessons for the rest is often the sensible split.</li>
    <li><strong>Rarer subjects.</strong> For an unusual elective, the nearest strong tutor may live in another state, and online closes that gap.</li>
  </ul>
  <p>
    Plenty of families settle on two home visits a week, with the same tutor switching to a screen when weather or a
    crowded week intervenes. Weigh it up with our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">comparison of home and online tutoring</a>, or see how
    remote lessons work on our <a href="{{ url('/online-tutor-itanagar') }}">online tutors for Itanagar</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itn-fees">What does a home tutor cost in Itanagar?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor
    names a price of their own. When a shortlist arrives, these questions explain most of the differences:
  </p>
  <ul>
    <li><strong>Which class?</strong> Lessons for younger children usually cost less than senior-class teaching.</li>
    <li><strong>Which goal?</strong> Preparing for an entrance test is priced above everyday school support in the same subject.</li>
    <li><strong>How far?</strong> Someone travelling from another town in the region may build in the journey; a tutor from your own zone often will not.</li>
    <li><strong>Home or online?</strong> Ask whether a rainy-day online lesson is charged the same as a visit.</li>
  </ul>
  <p>
    Spend on the subject that is hardest for your child; one strong tutor there usually achieves more than thin help
    across four. Fees are shown before the demo, and nobody priced above your stated budget is put forward. Our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> breaks rates down by class and subject, and
    <a href="{{ url('/blog/home-tuition-fees-itanagar') }}">tuition fees in Itanagar: what to ask</a> looks at the local
    side.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itn-choose">How can you tell if the demo went well?</h2>
  <p>A profile only gets a tutor shortlisted. During the free first lesson, notice whether:</p>
  <ol>
    <li><strong>The tutor asked before planning.</strong> School timings, upcoming tests and any other classes came up early.</li>
    <li><strong>They tested first.</strong> A few short questions showed where your child actually stands.</li>
    <li><strong>Your child could explain it back.</strong> Understanding, not just nodding along.</li>
    <li><strong>The board was familiar.</strong> They knew how this year's CBSE or ICSE paper is set, or where to check.</li>
    <li><strong>Your child did the work.</strong> Pen moving for most of the hour, not watching.</li>
    <li><strong>The slot is realistic.</strong> Same hour each week from where they live, with an online fallback agreed.</li>
  </ol>
  <p>
    Ahead of the demo, send the sector or colony, a landmark and a map pin; in an official colony, give the gate the
    tutor's name too. Keep lessons in a shared room with an adult at home. For more, read our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">checklist for the demo class</a> and our article on
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">picking a board and a stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itn-calendar">How does tuition fit the school year?</h2>
  <p>
    CBSE's academic session begins in April, while holidays vary from school to school, so check dates with your
    school and the board. Across the capital region, a tutoring year tends to run like this:
  </p>
  <ul>
    <li><strong>Opening weeks:</strong> a fresh class and fresh books, the right moment to repair what last year left shaky.</li>
    <li><strong>Rainy months:</strong> hold the weekly rhythm, with online sessions pre-agreed for the worst days.</li>
    <li><strong>Mid-year:</strong> steady chapter work, short regular tests and a look at any projects or practicals.</li>
    <li><strong>Before the boards:</strong> complete papers under time, marked against the board's sample papers and schemes.</li>
  </ul>
  <p>
    An early start leaves room to understand rather than chase; a later one leans on past papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itn-start">How do you get started in Itanagar?</h2>
  <p>
    Tell us the class, board and subjects, your sector or colony with a landmark, when your child is free and whether
    rainy-day lessons can go online. Two or three suggested tutors come back; one free demo later, you decide. Choose
    your locality from those listed here, look through <a href="{{ url('/tutors') }}">every tutor profile</a>, or go
    straight to a <a href="{{ url('/demo-class') }}">free demo class</a>. Where no home tutor lives near enough yet,
    online lessons with a tutor elsewhere in India can begin at once.
  </p>
  <p>
    Want the detail for your part of the region? The
    <a href="{{ url('/blog/itanagar-home-tuition-guide') }}">Itanagar home tuition guide</a> walks through all four
    zones, from Chimpu and Ganga Market to Naharlagun, Nirjuli and Doimukh, linking every locality.
  </p>
  <p class="itn-note">
    Moving within the North-East or further? We also list tutors in <a href="{{ url('/city/guwahati') }}">Guwahati</a>,
    <a href="{{ url('/city/kolkata') }}">Kolkata</a> and <a href="{{ url('/city/delhi') }}">Delhi</a>, and in
    <a href="{{ url('/city') }}">other Indian cities</a>.
  </p>
  <p class="itn-note">
    Tutor based in the capital region? Browse <a href="{{ url('/tuition-jobs/itanagar') }}">tuition jobs in
    Itanagar</a> to see which localities families are asking about.
  </p>
  </section>

  </div>
</article>
