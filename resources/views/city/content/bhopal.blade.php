{{--
  Long-form guide for the Bhopal city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for parents choosing a
  home tutor in Bhopal, not for search engines: every figure here is either
  live from the database or a published NXTutors policy, local facts come from
  the cited research in database/seo-content/areas/bhopal-research.json, and
  no school, college, society, developer, hospital or mall is named.

  Metro: only the Orange Line priority section (opened to passengers on
  21 December 2025) is described as running; the rest of the Orange Line is
  planned and the Blue Line is under construction. The BRTS corridor has been
  removed and is never presented as current.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $bpAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $bpA = function (string $slug, string $label) use ($bpAreaSlugs) {
      return in_array($slug, $bpAreaSlugs, true)
          ? '<a href="' . e(url('/city/bhopal/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $bpTutors = (int) ($hubCounts['tutors'] ?? 0);
  $bpAreas = $allAreas->count();
@endphp

<article class="nx-guide bp-guide" aria-labelledby="bpGuideTitle">
  <h2 id="bpGuideTitle">Home tuition in Bhopal: a parent's guide from Arera Colony to Bairagarh</h2>

  <p class="nx-guide__lede bp-lede">
    Bhopal is a city arranged around water. North of the Upper Lake, a reservoir first dammed in the eleventh century,
    lie the bazaars and hillside colonies of the old nawabi town. South of it, the planned sectors of Arera Colony, the
    government quarters of TT Nagar and the offices of MP Nagar make up the middle of the city, and further out the
    Kolar Road and Hoshangabad Road corridors keep adding gated townships. To the east sits the BHEL township, still
    laid out in numbered sectors. Where you live on that map, and which road a tutor has to use to reach you, shapes
    every home-tuition arrangement here.
  </p>
  <nav class="nx-guide__toc bp-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#bp-how">How matching works</a> ·
    <a href="#bp-zones">The five zones</a> ·
    <a href="#bp-boards">Boards</a> ·
    <a href="#bp-classes">Classes</a> ·
    <a href="#bp-subjects">Subjects</a> ·
    <a href="#bp-jee-neet">JEE &amp; NEET</a> ·
    <a href="#bp-mode">Home or online</a> ·
    <a href="#bp-fees">Fees</a> ·
    <a href="#bp-choose">The demo class</a> ·
    <a href="#bp-calendar">The school year</a> ·
    <a href="#bp-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="bp-how">How does NXTutors find a tutor for a Bhopal family?</h2>
  <p>
    Everything starts from one short form: which class your child is in and under which board, the subjects causing
    trouble, your locality plus a nearby landmark, the evenings that are free, and whether lessons should happen in
    your home, on a screen, or both. In return you get two or three tutors suited to it. Each profile carries the tutor's own fee, so you know the cost
    before anyone visits, and the first lesson with the tutor you choose is a free demo. In Bhopal, four details do
    most of the work in narrowing a shortlist:
  </p>
  <ul>
    <li><strong>Which side of the lakes are you on?</strong> The old city and the colonies around Lalghati look north and west; Arera Colony, MP Nagar and the corridors beyond look south. A tutor who already works on your side is easier to keep for a full year.</li>
    <li><strong>House, quarter or gated project?</strong> An independent house means the tutor rings your bell. A government or BHEL quarter needs a block and quarter number. A township on Kolar Road or Hoshangabad Road needs the tutor's name at the gate.</li>
    <li><strong>Which road carries the trip?</strong> Hoshangabad Road, Kolar Road, Ayodhya Bypass and VIP Road all get heavy at office and shift hours, so the time you pick matters as much as the tutor.</li>
    <li><strong>Which board and which medium?</strong> An MP Board student studying in Hindi and a CBSE student aiming at JEE need different teachers, even for the same chapter.</li>
  </ul>
  <p>
    Treat the demo as an ordinary lesson on whatever your child is studying this week. If the fit is wrong, we line up
    the next tutor on the list, and changing tutor later on is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bp-zones">Bhopal, zone by zone</h2>
  <p>
    @if($bpTutors > 0)
      The tutors shown on this page come from {{ number_format($bpTutors) }} tutor profiles,
    @else
      The tutors shown on this page come from our tutor profiles,
    @endif
    and @if($bpAreas > 0){{ number_format($bpAreas) }} Bhopal localities @else every Bhopal locality we cover @endif
    have a page of their own. On each one you see tutors from that locality first, then tutors from the rest of its
    zone, then the wider city, then online tutors. To plan home lessons, Bhopal is divided here into five zones, starting
    in the south and ending across the lake:
    <a href="#bp-arera">Arera Colony, Shahpura and Kolar Road</a>, <a href="#bp-central">MP Nagar, TT Nagar and
    Shivaji Nagar</a>, <a href="#bp-hoshangabad">Hoshangabad Road, Misrod and Katara Hills</a>,
    <a href="#bp-bhel">BHEL, Awadhpuri and Ayodhya Bypass</a> and <a href="#bp-old">Old City, Lalghati and
    Bairagarh</a>. The boundaries are drawn for tutors' travel, not taken from wards or municipal maps.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="bp-arera">Arera Colony, Shahpura and Kolar Road: sectors, a lake and a long corridor</h3>
  <p>
    {!! $bpA('arera-colony', 'Arera Colony') !!} is one of the largest planned residential areas in southern Bhopal,
    set out in eight sectors from E-1 to E-8. The older ones, E-1 to E-5, are shaded streets of bungalows and
    independent houses; E-6 and E-7 were built as housing board colonies, and E-8 is a private extension, with Bittan
    Market as the everyday shopping street. Next door, {!! $bpA('shahpura', 'Shahpura') !!} wraps around Shahpura Lake
    with colonies, houses and smaller apartment buildings. Southwards, {!! $bpA('kolar-road', 'Kolar Road') !!} runs as a
    long residential spine of plotted colonies and newer gated projects, and {!! $bpA('chuna-bhatti', 'Chuna Bhatti') !!},
    at its city end, mixes villa and apartment projects with older plotted houses.
    {!! $bpA('bawadiya-kalan', 'Bawadiya Kalan') !!}, south of Shahpura, is growing fast, and a large share of its
    families live in apartments.
  </p>
  <p>
    Link Road Number 3 ties Arera Colony to Rani Kamlapati railway station, the old Habibganj station, which is also a
    stop on the metro's operating section. Kolar Road has no metro or rail stop, so tutors there ride two-wheelers or
    take autos. The practical split is simple: in Arera Colony and Shahpura most visits end at a front door, while on
    Kolar Road and in Bawadiya Kalan the gate register comes first. The link roads fill at office hours, so an early
    evening slot tends to hold.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="bp-central">MP Nagar, TT Nagar and Shivaji Nagar: offices, quarters and the metro's first stretch</h3>
  <p>
    {!! $bpA('mp-nagar', 'MP Nagar') !!}, short for Maharana Pratap Nagar, is the city's main office and commercial
    district, divided into zones, with flats and older houses on its residential streets and plenty of coaching centres
    on its main roads. {!! $bpA('tt-nagar', 'TT Nagar') !!} grew around New Market, south of the Upper Lake, largely as
    government housing; North TT Nagar now carries the smart city redevelopment on about 354 acres of government land,
    while South TT Nagar stays residential. {!! $bpA('shivaji-nagar', 'Shivaji Nagar') !!} and
    {!! $bpA('tulsi-nagar', 'Tulsi Nagar') !!} are mostly government-owned housing beside private houses and builder
    floors; the smart city plan was first proposed for them before it moved to North TT Nagar.
    {!! $bpA('jahangirabad', 'Jahangirabad') !!}, near the Lower Lake, is older, with dense lanes and busy markets.
  </p>
  <p>
    MP Nagar is one of the eight stations on the Orange Line priority section, which opened to passengers on
    21 December 2025; Board Office Square and Rani Kamlapati Station are on the same stretch. A tutor can ride in and
    finish by auto or on foot. In the quarters, addresses are block and quarter numbers, so send those with a landmark.
    Jahangirabad waits for the unopened northern part of the line, with Pul Bogda and Aishbagh as planned stations.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="bp-hoshangabad">Hoshangabad Road, Misrod and Katara Hills: the south-east growth belt</h3>
  <p>
    {!! $bpA('hoshangabad-road', 'Hoshangabad Road') !!}, now also called Narmadapuram Road, is the highway corridor that
    leaves the city towards Misrod and Mandideep. Older colonies of houses sit beside newer towers, gated townships and
    villa projects, with showrooms and offices along the frontage. {!! $bpA('misrod', 'Misrod') !!}, on the NH-46 stretch
    towards Nagpur, has become a large suburb of townships, apartments and plotted layouts.
    {!! $bpA('katara-hills', 'Katara Hills') !!} is newer still, built up through planned communities, villas and plots,
    and reached by Hoshangabad Road and 200 Feet Road. {!! $bpA('bagmugaliya', 'Bagmugaliya') !!}, between Katara Hills
    and Jatkhedi, draws families looking for relatively affordable homes in apartments, houses and plots.
  </p>
  <p>
    The bus corridor that once ran down the middle of Hoshangabad Road was ordered shut in December 2023 and has been
    taken apart in stages since January 2024, so buses now share the road with everything else. Misrod has a station
    on the Bhopal–Itarsi line, but few trains stop there, and the Orange Line's southern end lies on the city side of
    Katara Hills. Most tutors in this zone therefore travel by road, most homes sit behind a township gate, and a tutor
    living on the same stretch of the corridor is the one who arrives on time.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="bp-bhel">BHEL, Awadhpuri and Ayodhya Bypass: a company township and its neighbours</h3>
  <p>
    The BHEL township in eastern Bhopal was planned around the public-sector engineering plant and divided into
    neighbourhoods of four to five sectors each, with parks, community halls, a library, shopping centres and banks.
    {!! $bpA('piplani', 'Piplani') !!} holds the factory and its offices, and {!! $bpA('govindpura', 'Govindpura') !!}
    adds a large industrial estate of units that supply the plant, alongside township quarters and private colonies.
    {!! $bpA('indrapuri', 'Indrapuri') !!} is a colony of independent houses, known by its lettered sectors.
    {!! $bpA('awadhpuri', 'Awadhpuri') !!} is a settled mid-range area of two- and three-bedroom homes, and
    {!! $bpA('saket-nagar', 'Saket Nagar') !!}, on the southern side, is home to many retired BHEL employees.
    {!! $bpA('ayodhya-bypass', 'Ayodhya Bypass') !!} is the arterial road on the eastern edge, and the colonies along it,
    Ayodhya Nagar among them, now form a large residential belt of apartments, villas and houses.
  </p>
  <p>
    Township quarters go by sector and quarter number rather than street, so a clear address saves the first visit.
    Parking is easy, and most homes are doorstep visits. Plant shift times shape traffic, as does the widening of
    Ayodhya Bypass up to Ratnagiri Tiraha, the planned end of the metro's Blue Line, which is still being built. Saket
    Nagar is the exception: Alkapuri station on the operating Orange Line section is close by.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="bp-old">Old City, Lalghati and Bairagarh: bazaars, hills and the lakeside west</h3>
  <p>
    The {!! $bpA('old-city', 'Old City') !!} lies north of the Upper Lake and grew under Bhopal's nawabs and begums:
    narrow lanes, family houses above or behind shops, and bazaars such as Chowk Bazaar and Sarafa, with the Jama Masjid
    of 1837 at the centre and the Taj-ul-Masajid, completed in 1958, nearby. Above it,
    {!! $bpA('idgah-hills', 'Idgah Hills') !!} climbs in winding roads of houses and small buildings with views over the
    lakes. {!! $bpA('kohefiza', 'Kohefiza') !!} is a settled area of housing colonies and housing board homes near VIP
    Road, and {!! $bpA('lalghati', 'Lalghati') !!}, along the lake, adds apartments and villas.
    {!! $bpA('bairagarh', 'Bairagarh') !!}, officially Sant Hirdaram Nagar, began as one of the oldest camps for Sindhi
    families who arrived after Partition and grew into a busy market town.
  </p>
  <p>
    Bhopal Junction, on a line opened in 1884, sits close to the Nadra Bus Stand, and both are planned stations on the
    unopened northern part of the Orange Line. VIP Road, four lanes along the lake, runs to the airport near Bairagarh,
    whose station has carried the Sant Hirdaram Nagar name since 2018. In the old lanes a tutor usually parks a scooter
    where the lane narrows and walks in, so a mosque or market corner is the landmark to give. Market evenings are the
    busiest, which makes afternoon lessons easier.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bp-boards">Which boards do Bhopal tutors teach?</h2>
  <p>
    Bhopal students sit a wide range of boards: CBSE, the state's own MP Board, CISCE's ICSE and ISC, and a smaller
    number of IB and Cambridge IGCSE candidates. A request is matched on the board before anything else, because each
    one rewards a different way of writing answers.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>MP Board</h3>
  <p>
    The Board of Secondary Education, Madhya Pradesh, runs the state's Class 10 and Class 12 examinations, and many
    Bhopal students take them in Hindi or English medium. Say which medium your child studies in, choose a tutor who
    teaches in it and follows the board's own prescribed books. Check the timetable, pattern and any rule changes on the
    board's official website rather than relying on hearsay.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    CBSE question papers grow out of the NCERT textbooks, and more of each paper now asks students to use an idea in a
    fresh setting through case passages and assertion-and-reason items. Look for a tutor who works line by line from
    NCERT, sets the board's sample papers under time, and marks them against the official scheme so that no step marks
    slip away.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    CISCE examines ICSE at Class 10 and ISC at Class 12. Papers are long and written, the syllabus is broad, and English
    includes prescribed literature. The usual struggle is keeping every chapter fresh at once, so a good tutor runs a
    rolling revision plan, sets timed answers each week and keeps project and internal work moving.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and IGCSE</h3>
  <p>
    IB Diploma Mathematics comes as Analysis and Approaches or Applications and Interpretation, each at Standard or
    Higher Level, and internal assessment counts towards the final grade. A tutor may talk through an Internal
    Assessment or Extended Essay but must not write any part of it. Cambridge IGCSE rewards command words, the right
    tier and past papers marked strictly. These students often pair a local tutor with an online specialist.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bp-classes">What does a tutor need to cover at each stage?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Classes 1 to 8</h3>
  <p>
    Until Class 8, what matters is the groundwork: a child who reads a question properly, handles times tables and
    fractions without panic, meets algebra calmly and sets out working neatly. A tutor at the dining table once or twice a week usually
    does more for a young child than a longer weekly session.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    Class 9 is where Maths and Science first get properly hard, and Class 10 is built on it, so a weak Class 9
    tends to surface in the board year. Finish chapters and test them through the autumn, then move to complete papers
    in the winter. Two posts help here: <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">how to prepare for
    Class 10 Maths</a> and our <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Science notes for the Class 10
    year</a>.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    In the senior years each subject becomes its own discipline, and a specialist usually serves better than a teacher
    who covers everything. For science students the hard pair is usually Physics and Maths; for commerce students it
    is Accountancy. Read our <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">approach to Class 12
    Physics</a> and the <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra
    walkthrough</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bp-subjects">Which subjects can you find a tutor for in Bhopal?</h2>
  <p>
    The subject list runs from Mathematics and the three sciences to English, Hindi, Sanskrit, Computer Science and
    the commerce trio of Accountancy, Economics and Business Studies, and for primary children many tutors handle
    all subjects together. For the subjects
    families ask about most, Bhopal has dedicated pages for
    <a href="{{ url('/maths-home-tutor-bhopal') }}">maths home tutors</a>,
    <a href="{{ url('/science-home-tutor-bhopal') }}">science home tutors</a>,
    <a href="{{ url('/physics-home-tutor-bhopal') }}">physics home tutors</a> and
    <a href="{{ url('/chemistry-home-tutor-bhopal') }}">chemistry home tutors</a>. Hindi as a subject, and the Hindi
    terms that MP Board students meet in Science and Maths, are worth raising at the request stage. In Class 12,
    Chemistry splits into numerical physical chemistry, reaction-led organic chemistry and memory-heavy inorganic
    chemistry, as our <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">guide to Class 12 organic
    and inorganic chemistry</a> explains.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bp-jee-neet">Does a home tutor help with JEE or NEET preparation in Bhopal?</h2>
  <p>
    Yes, when the tutor works alongside coaching instead of competing with it. Coaching centres line the main roads of
    MP Nagar, and a home tutor earns a place beside them in three ways:
  </p>
  <ul>
    <li><strong>Clearing the pile.</strong> Once a week, the tutor goes through unsolved coaching sheets and the questions the student got wrong in tests.</li>
    <li><strong>One NCERT plan for two exams.</strong> The Class 11 and 12 NCERT books sit under both the board papers and the entrance tests, so a single revision cycle can serve both.</li>
    <li><strong>Lifting the weakest subject.</strong> Extra hours go to the subject pulling the total down, not spread evenly across all three.</li>
  </ul>
  <p>
    JEE Main, run by NTA, comes in two sessions early in the calendar year, and those who clear it may sit JEE
    Advanced. NEET UG happens just once a year, with half its marks from Biology, which is why the NCERT Biology texts
    deserve slow, careful reading. Dates belong to each year's official bulletin and nowhere else. Our subject plans cover
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE Maths topic by topic</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE Physics</a>,
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE Chemistry</a> and
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET Biology from NCERT</a>. Our piece on
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">whether JEE needs coaching, a home
    tutor or both</a> uses Gurugram examples, yet the same reasoning holds in Bhopal. When coaching finishes late, a short
    online doubt session is often easier than a second home visit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bp-mode">Home or online tuition in Bhopal?</h2>
  <p>
    Younger children do better with the tutor beside them, and so does any subject where the written working earns
    the marks, Maths and Chemistry numericals above all. Online lessons reach specialists anywhere in India, which matters
    most for IB, IGCSE and senior specialist papers. In Bhopal, a few local facts tilt the choice:
  </p>
  <ul>
    <li><strong>One metro section so far.</strong> Only the Orange Line priority section, eight stations between the southern end near Saket Nagar and Subhash Nagar, is running. The rest of the Orange Line is planned and the Blue Line is under construction, so for most homes a tutor still comes by road.</li>
    <li><strong>No dedicated bus lane any more.</strong> With the old corridor removed, buses on Hoshangabad Road run in mixed traffic, which makes a tutor from your own stretch more reliable.</li>
    <li><strong>Corridors, not a grid.</strong> Kolar Road, Hoshangabad Road and Ayodhya Bypass are long, and trips along them grow at office and shift hours.</li>
    <li><strong>The lakes divide the map.</strong> Crossing between the old city side and the southern colonies adds to every trip, so the tutor's side of the water is worth asking about.</li>
  </ul>
  <p>
    Plenty of families settle on one tutor for both: a weekly home lesson and a short online session midweek for
    doubts. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">comparison of home and online tutoring</a> sets
    out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bp-fees">What does a home tutor cost in Bhopal?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor
    sets their own fee. In Bhopal the fee usually moves with three things:
  </p>
  <ul>
    <li><strong>The class and the board.</strong> Primary lessons tend to cost less than senior-secondary work or IB and IGCSE papers.</li>
    <li><strong>The depth required.</strong> Entrance-level problem solving and Higher Level IB work cost the most.</li>
    <li><strong>The ride.</strong> A tutor coming from the far side of the lakes, or down a long corridor at a busy hour, may build that into the fee; a tutor from your own colony usually does not.</li>
  </ul>
  <p>
    Every fee on your shortlist is visible before the demo. For a class-by-class and subject-by-subject view, open the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a>; for Bhopal specifically, read
    <a href="{{ url('/blog/home-tuition-fees-bhopal') }}">what home tuition costs in Bhopal</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bp-choose">What should you watch for in the demo class?</h2>
  <p>A profile earns the tutor a place on your list; the demo shows whether they belong there. Watch for five things:</p>
  <ol>
    <li><strong>Questions before teaching.</strong> Did the tutor find out what your child already knows?</li>
    <li><strong>Whose pen moved.</strong> Did your child spend the hour solving, or watching the tutor solve?</li>
    <li><strong>Knowing your board.</strong> Does the tutor understand how MP Board, CBSE or CISCE marks this subject?</li>
    <li><strong>Four weeks ahead.</strong> Is there a clear outline for the coming month, and a way for you to track it?</li>
    <li><strong>A route that lasts.</strong> Which road and which time, and will that still work in the exam months?</li>
  </ol>
  <p>
    For a gated township, give the tutor's name at the gate or in the visitor app before the demo. For a government or
    BHEL quarter, share the sector, block and quarter number; for an old-city lane, a landmark and a map pin. Keep the
    lesson in a family room where a grown-up is around. Before the day, the
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">parents' checklist for demo classes</a> is worth a
    read, and if a board or stream decision is coming up, so is
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">how to choose a board and stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bp-calendar">When in the school year should tuition start?</h2>
  <p>The CBSE session opens in April; MP Board and ICSE schools follow their own calendars, so check yours. A board year tends to fall into these stretches:</p>
  <ul>
    <li><strong>Spring into summer:</strong> fresh textbooks and the long holiday give room to repair last year's weak chapters.</li>
    <li><strong>Monsoon months:</strong> regular weekly lessons keep pace with school, and half-yearly or term tests arrive in many schools.</li>
    <li><strong>Autumn:</strong> the syllabus is wrapped up, and many schools hold pre-boards near the turn of the year.</li>
    <li><strong>Winter:</strong> timed papers, then the boards themselves; JEE Main's first session normally comes in this stretch.</li>
    <li><strong>The following spring:</strong> JEE Main's second session, JEE Advanced and NEET UG, with IB and Cambridge papers in May.</li>
  </ul>
  <p>
    Treat these as a rough shape and take real dates from the boards and NTA. A spring start buys a whole year; a
    winter start is still worthwhile if the hours go on papers and technique.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bp-start">How do you get started in Bhopal?</h2>
  <p>
    Tell us the class, the board, the subjects, your locality and a landmark, and when lessons could happen. Two or
    three matched tutors come back; pick one, take the free demo, and only then decide. You can open your locality's
    page from the zones above, look through <a href="{{ url('/tutors') }}">the full tutor list</a>, or go straight to
    a <a href="{{ url('/demo-class') }}">free demo class</a>. Where no home tutor lives near enough yet, an online
    tutor based anywhere in India can take the first lesson right away.
  </p>
  <p>
    Want more on one part of the city? Our local guides cover
    <a href="{{ url('/blog/south-and-central-bhopal-tuition-guide') }}">South and Central Bhopal</a>, from Arera Colony
    and MP Nagar to Hoshangabad Road, and <a href="{{ url('/blog/bhel-and-old-bhopal-tuition-guide') }}">BHEL and Old
    Bhopal</a>, from the township sectors to Lalghati and Bairagarh.
  </p>
  <p class="bp-note">
    Elsewhere in Madhya Pradesh, see home tutors in <a href="{{ url('/city/indore') }}">Indore</a>, or browse
    <a href="{{ url('/city') }}">cities across India</a>.
  </p>
  <p class="bp-note">
    Tutoring in Bhopal yourself? <a href="{{ url('/tuition-jobs/bhopal') }}">Home tuition jobs in Bhopal</a> shows
    which localities families are requesting tutors in.
  </p>
  </section>

  </div>
</article>
