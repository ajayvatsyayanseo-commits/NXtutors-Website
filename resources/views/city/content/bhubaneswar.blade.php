{{--
  Long-form guide for the Bhubaneswar city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for Bhubaneswar parents
  choosing a home tutor: every figure here is either live from the database or a
  published NXTutors policy, local facts come from the cited research in
  database/seo-content/areas/bhubaneswar-research.json, and no school, college,
  university, hospital, mall, housing project or developer is named.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $bbsAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $bbsA = function (string $slug, string $label) use ($bbsAreaSlugs) {
      return in_array($slug, $bbsAreaSlugs, true)
          ? '<a href="' . e(url('/city/bhubaneswar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $bbsTutors = (int) ($hubCounts['tutors'] ?? 0);
  $bbsAreas = $allAreas->count();
@endphp

<article class="nx-guide bbs-guide" aria-labelledby="bbsGuideTitle">
  <h2 id="bbsGuideTitle">Home tuition in Bhubaneswar: a parent's guide from Patia to Patrapada</h2>

  <p class="nx-guide__lede bbs-lede">
    Bhubaneswar is three towns layered on one another. In the south is the temple town around the Lingaraja temple
    and the Bindusagar tank, far older than anything else here. North of it lies the planned capital, founded in 1948
    and laid out in numbered units, each meant to have its own school, shopping centre, dispensary and play areas.
    Around both, colonies developed by the Bhubaneswar Development Authority and former villages have filled in
    the land towards Patia in the north and Khandagiri and Patrapada in the south-west. No metro runs in
    Bhubaneswar, so tutors reach homes by two-wheeler, car, auto or city bus, and which part of the city you live in
    decides who can come regularly.
  </p>
  <nav class="nx-guide__toc bbs-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#bbs-how">Matching</a> ·
    <a href="#bbs-zones">Five zones</a> ·
    <a href="#bbs-boards">Exam boards</a> ·
    <a href="#bbs-classes">By stage</a> ·
    <a href="#bbs-subjects">Subjects</a> ·
    <a href="#bbs-jee-neet">Entrance exams</a> ·
    <a href="#bbs-mode">Home vs online</a> ·
    <a href="#bbs-fees">Fees</a> ·
    <a href="#bbs-choose">Demo checklist</a> ·
    <a href="#bbs-calendar">Year planner</a> ·
    <a href="#bbs-start">First steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="bbs-how">How does NXTutors find a tutor for a Bhubaneswar family?</h2>
  <p>
    You tell us what the student needs in one request: class, board, the subjects causing trouble, your locality and
    the nearest square or landmark, the hours left after school, and whether you want lessons at your home, online
    or a mix, with a monthly figure you are comfortable with. Our reply names two or three suitable tutors, each
    with their fee shown before you meet. The first lesson with the one you choose is a free demo, and if the match
    stops working later, moving to another tutor costs nothing. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live. For this city we sort
    the shortlist by four things:
  </p>
  <ul>
    <li><strong>Your side of the railway and the highway.</strong> The main railway line and National Highway 16 both cut through the city, so a tutor already teaching on your side of them is the one most likely to arrive on time every week.</li>
    <li><strong>Unit, colony or complex?</strong> In the old planned units and the colony lanes a tutor rings the bell; in newer apartment complexes the gate wants a name and a flat number first.</li>
    <li><strong>Board and medium together.</strong> A student on the Odisha board who studies in Odia needs different help from a CBSE or ICSE student reading the same subject in English.</li>
    <li><strong>The real free hour.</strong> Once school, any coaching and travel are counted, we suggest only tutors who can take the slot that is actually left.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bbs-zones">Bhubaneswar, zone by zone</h2>
  <p>
    @if($bbsTutors > 0)
      The tutors you see for Bhubaneswar are drawn from {{ number_format($bbsTutors) }} tutor profiles,
    @else
      The tutors you see for Bhubaneswar are drawn from our tutor profiles,
    @endif
    and @if($bbsAreas > 0){{ number_format($bbsAreas) }} Bhubaneswar localities @else every Bhubaneswar locality @endif
    have their own page. Each such page shows tutors from the locality itself before those from the rest of its zone,
    then the wider city, then online teachers. For home lessons we work with five zones, starting in the north and
    going round to the south-west:
    <a href="#bbs-north">Patia and Chandrasekharpur</a>, <a href="#bbs-central">Saheed Nagar and Rasulgarh</a>,
    <a href="#bbs-west">Nayapalli and Jaydev Vihar</a>, <a href="#bbs-south">Old Town and Bapuji Nagar</a> and
    <a href="#bbs-sw">Khandagiri and Patrapada</a>. The groupings are ours, drawn for travel, and are not ward
    boundaries.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="bbs-north">North Bhubaneswar: Patia, Chandrasekharpur and the Infocity side</h3>
  <p>
    {!! $bbsA('patia', 'Patia') !!} and {!! $bbsA('chandrasekharpur', 'Chandrasekharpur') !!}, like Mancheswar further
    east, were villages among forest and farmland until the city spread northwards over them. Patia now mixes
    apartment complexes with independent houses, villas and plots still being built on, with large education and IT
    campuses close by. Chandrasekharpur is a family of smaller colonies, among them Damana, Infocity, Niladri Vihar,
    Rail Vihar, Nalco Nagar and Gajapati Nagar, where low-rise flats and builder floors stand beside houses on plots.
    {!! $bbsA('sailashree-vihar', 'Sailashree Vihar') !!} is one of the newer planned colonies here, laid out on a grid of
    numbered plots with flats of two to four bedrooms among the houses.
  </p>
  <p>
    Nandankanan Road is the spine of the zone and leads north towards the zoological park in the Chandaka forest,
    opened in 1960. Patia has a small station on the Howrah-Chennai main line, and Bhubaneswar New, opened in July
    2018 between Mancheswar and Barang, serves the northern edge, so a tutor can come part of the way by train and
    finish by auto. Most still ride in. Nandankanan Road is slowest when offices and colleges open and close; a
    weekday slot away from those hours, with a tutor from the same colonies, is the one that lasts.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="bbs-central">Central and East Bhubaneswar: Saheed Nagar, Rasulgarh and the Cuttack-Puri road</h3>
  <p>
    {!! $bbsA('saheed-nagar', 'Saheed Nagar') !!} was planned around 1960 as the tenth unit of the capital and is now
    known mainly for the shops along Janpath, with homes in the inner lanes. Just south,
    {!! $bbsA('satya-nagar', 'Satya Nagar') !!} was farmland before the city reached it and today is mostly flats.
    {!! $bbsA('kharavela-nagar', 'Kharavela Nagar') !!}, Unit 3 of the 1948 plan, keeps the original mix of homes,
    markets and offices. Across the railway, {!! $bbsA('rasulgarh', 'Rasulgarh') !!} centres on its square on the road
    between Cuttack and Puri, {!! $bbsA('mancheswar', 'Mancheswar') !!} holds the industrial estate along National
    Highway 16 with residential colonies around it, and {!! $bbsA('laxmisagar', 'Laxmisagar') !!} lies on the same main
    road between the Rasulgarh and Kalpana squares, mostly in flats of one to three bedrooms.
  </p>
  <p>
    This zone has more stations than any other. Vani Vihar station sits in Saheed Nagar, and local people use it to
    cross between Saheed Nagar and Rasulgarh; Mancheswar station has five platforms and the East Coast Railway's
    carriage repair workshop; and the main Bhubaneswar station is close to Kharavela Nagar and Laxmisagar. Janpath and
    the Cuttack-Puri road are crowded in the evening, so give a lane landmark rather than a shop name, and in
    Mancheswar point the tutor to the colony, not the factory gate.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="bbs-west">West Bhubaneswar: Nayapalli, Jaydev Vihar and Baramunda</h3>
  <p>
    {!! $bbsA('nayapalli', 'Nayapalli') !!} is a large colony developed by the Bhubaneswar Development Authority beyond
    the original units, with flats, houses, builder floors and some open plots. Ekamra Kanan, the botanical garden
    created there in 1985 and the city's largest park, is the obvious landmark, and the city stadium is nearby.
    {!! $bbsA('jaydev-vihar', 'Jaydev Vihar') !!} mixes homes with hotels and offices around its square;
    {!! $bbsA('acharya-vihar', 'Acharya Vihar') !!} sits inside the area of the 1968 master plan, with houses on colony
    lanes and some flats; {!! $bbsA('irc-village', 'IRC Village') !!} began as cottages built for delegates to the Indian
    Roads Congress session of 1982 and stayed on as a planned locality; and {!! $bbsA('baramunda', 'Baramunda') !!}, on
    the western side, is mostly two- and three-bedroom flats.
  </p>
  <p>
    Baramunda's bus terminal, opened in March 2024, is the largest in Odisha, and city bus routes make the locality
    easy to reach without a vehicle. National Highway 16 runs along the eastern side of the zone, and Bhubaneswar and
    Vani Vihar are the nearest stations for most homes. So many colonies sit side by side here that a tutor from the
    next colony is usually available. Leave some margin around the highway and the park gates in the evening and on
    holidays, and around the terminal when long-distance buses come and go.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="bbs-south">South Bhubaneswar: Old Town, Bapuji Nagar and the airport side</h3>
  <p>
    {!! $bbsA('old-town', 'Old Town') !!} is the original Bhubaneswar. The Lingaraja temple, in its present form from
    the late eleventh century, and the Bindusagar tank are surrounded by neighbourhoods that grew out of old villages,
    with older houses in narrow lanes and newer flats between them. {!! $bbsA('samantarapur', 'Samantarapur') !!}, once a
    village, is now Ward 59 of the municipal corporation, with flats and plots replacing village homes.
    {!! $bbsA('bapuji-nagar', 'Bapuji Nagar') !!} is Unit 1 of the planned capital, reached by Janpath, Rajpath and Udyan
    Marg and known for its Unit 1 market. {!! $bbsA('pokhariput', 'Pokhariput') !!}, on the southern fringe near the
    airport, combines older plotted homes with newer two- and three-bedroom buildings.
  </p>
  <p>
    Bhubaneswar station at Master Canteen, opened in 1896 and now the headquarters station of the East Coast Railway,
    is next to Bapuji Nagar, and Lingaraj Temple Road station on Ekamra Marg serves the temple side. In the inner lanes
    of Old Town a two-wheeler or e-rickshaw beats a car, and most homes open straight onto the lane. The Lingaraja
    temple's Rukuna Ratha Yatra, held on Ashokashtami, and other temple festivals bring large crowds, so check the
    festival calendar when you fix the weekly timetable.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="bbs-sw">South-West Bhubaneswar: Khandagiri, Jagamara and Patrapada</h3>
  <p>
    {!! $bbsA('khandagiri', 'Khandagiri') !!} takes its name from the hill that, with Udayagiri beside it, holds rock-cut
    caves from the second or first century BCE. Around it the city's newer western side has grown quickly out of
    planned colonies, unplanned colonies and villages. {!! $bbsA('jagamara', 'Jagamara') !!}, between Khandagiri and the
    airport side, has flats, villas, plots and builder floors. {!! $bbsA('kalinga-nagar', 'Kalinga Nagar') !!} is mostly
    builder floors and multi-storey buildings, with a public park developed by the Bhubaneswar Development Authority in
    its K-8 sector. {!! $bbsA('patrapada', 'Patrapada') !!}, along National Highway 16, has grown around a large medical
    campus, with new apartment complexes, plots and some villas.
  </p>
  <p>
    Khandagiri Square is a major stop on the city bus network and a bus depot stands nearby, so tutors without a
    vehicle can reach the older part of the zone. Patrapada is different: much of the housing is new, gates are staffed,
    and a two-wheeler or car is the practical way in. Share the complex, tower and flat number and register the tutor
    in advance. The square is also busy on weekends when visitors come to the caves, which makes weekday evenings the
    easier slot.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bbs-boards">Which boards do Bhubaneswar tutors teach?</h2>
  <p>
    Four systems run side by side in the city: the two Odisha state boards, CBSE, the CISCE pair of ICSE and ISC, and
    a smaller group of IB and Cambridge IGCSE students. Each marks differently and expects different habits, so we
    pair a tutor with the board and the class at once rather than with the subject alone.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>BSE Odisha and CHSE Odisha</h3>
  <p>
    Odisha splits school examinations between two bodies. The Board of Secondary Education, Odisha holds the Class 10
    examination; the Council of Higher Secondary Education, Odisha looks after Classes 11 and 12. Someone teaching a
    state-board student ought to work from the prescribed textbooks and the boards' own sample and previous papers,
    and be able to explain in Odia as easily as in English. Patterns and timetables belong to the official websites
    of the two boards, nowhere else. Our <a href="{{ url('/odisha-board-tutor-bhubaneswar') }}">Odisha board tutor
    page</a> goes into more detail.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    NCERT textbooks are the ground every CBSE paper stands on, and questions increasingly test whether a student can
    carry a concept into an unfamiliar problem. For a teenager with JEE or NEET in view that is good news, because the
    same chapters feed both. What usually needs work is presentation: a complete, step-by-step written answer. The
    <a href="{{ url('/cbse-home-tutor-bhubaneswar') }}">CBSE home tutor page for Bhubaneswar</a> has more.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    CISCE examines a wide syllabus through long written papers, with prescribed English literature at both levels:
    ICSE after Class 10 and ISC after Class 12. Coverage is the risk, so revision should come round more than once,
    with timed answers and the internal project work kept up to date. See the
    <a href="{{ url('/icse-home-tutor-bhubaneswar') }}">ICSE home tutor page</a>.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and IGCSE</h3>
  <p>
    These students are fewer, so their specialist is frequently someone teaching online from another city. Coursework
    counts in the IB alongside the final papers; a tutor may advise on an Internal Assessment or the Extended Essay,
    but the student writes it. IGCSE marks reward repeated past-paper work checked against the official scheme. Start
    with our <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">guide to IB Maths AA and AI</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bbs-classes">What should a tutor work on at each stage?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table bbs-table">
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Where a tutor earns their fee</th><th scope="col">Reading to share</th></tr>
    </thead>
    <tbody>
      <tr>
        <td>Classes 1 to 8</td>
        <td>Fluent reading, sure arithmetic and finished written work. Many children speak Odia at home and learn in English, so reading aloud and talking through each lesson matters. Get school maths to Class 8 solid before any entrance foundation programme.</td>
        <td>The school's own books and notebooks</td>
      </tr>
      <tr>
        <td>Classes 9 and 10</td>
        <td>Class 9 is where Maths and Science get harder, and the Class 10 board paper arrives a year later. Keep school chapters moving on time and start practising full written answers early.</td>
        <td><a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 Maths preparation</a>, <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 Science notes</a></td>
      </tr>
      <tr>
        <td>Classes 11 and 12</td>
        <td>Class 11 brings the biggest rise in difficulty, and a Physics or Maths gap left there rarely closes in Class 12. A separate specialist for each hard subject usually pays off.</td>
        <td><a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra</a>, <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 Physics</a></td>
      </tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bbs-subjects">Which subjects can a Bhubaneswar tutor cover?</h2>
  <p>
    Requests here start with Maths and Science, then Physics, Chemistry and Biology once a student reaches Class 9.
    Teachers on NXTutors also take English, Odia, Hindi, Sanskrit, Social Science, Computer Science, Accountancy,
    Economics and Business Studies, and plenty handle every subject for younger children. The city has dedicated
    pages for <a href="{{ url('/maths-home-tutor-bhubaneswar') }}">maths</a>,
    <a href="{{ url('/science-home-tutor-bhubaneswar') }}">science</a>,
    <a href="{{ url('/physics-home-tutor-bhubaneswar') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-bhubaneswar') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-bhubaneswar') }}">biology</a> and
    <a href="{{ url('/english-home-tutor-bhubaneswar') }}">English</a> home tutors.
  </p>
  <p>
    A Maths tutor should trace a problem back to the chapter where it began, however far back that is. Physics goes
    better when the student can explain why before reaching for an equation. Chemistry needs numerical practice,
    reaction logic and memory work at the same time; our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Organic and Inorganic Chemistry guide</a>
    shows how to split them. For a student moving from Odia-medium study to English textbooks, a tutor who gives key
    terms in both languages for the first months makes the change far gentler, and our
    <a href="{{ url('/blog/spoken-english-for-students') }}">spoken English guide</a> helps with practice at home.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bbs-jee-neet">Can a home tutor help with JEE or NEET in Bhubaneswar?</h2>
  <p>
    It can, provided the tutor is not simply a second coaching class. Most entrance aspirants in the city already
    follow a batch or an online course; the home tutor's value is in the jobs a batch cannot do:
  </p>
  <ol>
    <li><strong>Unfinished questions.</strong> Each week, take the batch's sheets and the newest test and settle every doubt before the next chapter starts.</li>
    <li><strong>Board and entrance in one plan.</strong> The NCERT chapters of Classes 11 and 12 serve the board paper and the entrance paper, so schedule them once, not twice.</li>
    <li><strong>The weak subject.</strong> Spend the extra hours where marks drain away, not evenly across every subject.</li>
    <li><strong>A protected slot.</strong> Agree at the start on a time that coaching never touches, whether dawn, late evening or Sunday.</li>
  </ol>
  <p>
    JEE Main is conducted by NTA in two sessions during the first half of the year; qualifiers may then attempt JEE
    Advanced. NEET UG comes once a year, and because Biology is half of it, the NCERT Biology books deserve reading line
    by line. Rely only on the current official bulletin for dates. The city's
    <a href="{{ url('/jee-home-tutor-bhubaneswar') }}">JEE</a> and <a href="{{ url('/neet-home-tutor-bhubaneswar') }}">NEET</a>
    home tutor pages go further, as do our topic plans for <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE
    Maths</a>, <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE Physics</a>,
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE Chemistry</a> and
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET Biology</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bbs-mode">Home or online tuition in Bhubaneswar?</h2>
  <p>
    Lessons at the table work well for small children, for students whose attention slips on a screen, and for
    subjects where you need to watch the working on paper. Online lessons open the door to teachers anywhere in India,
    the deciding factor for IB, IGCSE, ISC electives and hard entrance problems. Some Bhubaneswar specifics:
  </p>
  <ul>
    <li><strong>Everything is by road.</strong> With no metro in the city, a tutor's home and yours need to be reasonably close for weekly visits to last.</li>
    <li><strong>Pockets with good transport.</strong> City buses through Baramunda and Khandagiri Square, and the local stations from Patia to Lingaraj Temple Road, let tutors without a vehicle reach many homes.</li>
    <li><strong>The outer edges.</strong> Patrapada and the newer plots around Patia lean on personal vehicles, so a distant specialist may suit better online.</li>
    <li><strong>Weather and festivals.</strong> Summer afternoons, heavy monsoon evenings and large festival days are when a pre-agreed online lesson saves the week.</li>
  </ul>
  <p>
    A common pattern is two or three visits a week plus a brief online check-in before tests, with the same tutor
    throughout. See the <a href="{{ url('/online-tutor-bhubaneswar') }}">online tutor page for Bhubaneswar</a> and our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">comparison of home and online tutoring</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bbs-fees">What does a home tutor cost in Bhubaneswar?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
  </p>
  <p>
    Tutors set their own rates, and the differences you will see on a shortlist usually come from four sources: the
    student's class (younger classes generally cost less), the aim (entrance preparation is priced above school
    support), the journey (a tutor riding across the city may add for it, a neighbour seldom does) and the pattern of
    lessons (longer, less frequent sessions tend to give more teaching for the same monthly spend). If money is tight,
    concentrate it: a strong tutor in the one subject that is slipping does more than modest help in several.
  </p>
  <p>
    Every fee on your shortlist is visible before the demo, and tutors above the amount you give us are left off. The
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> sets out fees by class and subject, and
    <a href="{{ url('/blog/home-tuition-fees-bhubaneswar') }}">home tuition fees in Bhubaneswar</a> covers the city
    itself.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bbs-choose">What should you watch for in the demo class?</h2>
  <p>A good profile only earns the first hour. During it, notice whether the tutor:</p>
  <ol>
    <li>asked about the school timetable, coaching and upcoming tests before planning the lesson;</li>
    <li>checked what your child already understood instead of starting the chapter from its opening line;</li>
    <li>spoke in a way your child followed, in Odia, English or a blend;</li>
    <li>knew how your board sets this year's paper, with no vague answers;</li>
    <li>had your child working through problems, not just listening;</li>
    <li>can genuinely reach your home at that hour each week.</li>
  </ol>
  <p>
    Before the demo, send a complex guard the tutor's name, or send a house address with the nearest square or temple
    and a pinned location. Keep lessons in a common room while an adult is at home. For more, read our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> and
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">how to choose a board and stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bbs-calendar">When in the year should tuition start?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table bbs-table">
    <thead>
      <tr><th scope="col">Months</th><th scope="col">What to plan for</th></tr>
    </thead>
    <tbody>
      <tr><td>April to June</td><td>The CBSE session opens in April. Use the summer break to mend old gaps, and keep lessons to mornings or evenings in the heat.</td></tr>
      <tr><td>July to September</td><td>Regular weekly lessons through the monsoon, with an online lesson agreed in advance for the heaviest rain.</td></tr>
      <tr><td>October to November</td><td>Durga Puja and Diwali break the rhythm; lighten those weeks and add hours before and after.</td></tr>
      <tr><td>December to February</td><td>Complete the syllabus, switch to whole papers and pre-boards, and watch each board's notices for exam dates.</td></tr>
      <tr><td>March to May</td><td>Board papers finish; the second JEE Main session, JEE Advanced and NEET UG follow.</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    BSE Odisha and CHSE Odisha publish their own calendars, which need not match CBSE's, so state-board families should
    check those directly. An April start gives the whole year to work with; joining later still pays, with the time
    shifted towards papers and exam technique.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bbs-start">How do you get started in Bhubaneswar?</h2>
  <p>
    Tell us the class, the board, the subjects, your locality and a square or landmark near it, and the times your
    child is really free. You will get two or three tutor suggestions; book a free demo with one and make up your mind
    after it. Pick your locality from those listed here, look through <a href="{{ url('/tutors') }}">all tutors</a>, or
    go straight to a <a href="{{ url('/demo-class') }}">free demo class</a>. Where no home tutor lives near you yet,
    an online tutor based anywhere in India can begin at once.
  </p>
  <p>
    For a locality-by-locality walk through all five zones, read our
    <a href="{{ url('/blog/bhubaneswar-home-tuition-guide') }}">Bhubaneswar home tuition guide</a>.
  </p>
  <p class="bbs-note">
    Looking beyond Bhubaneswar? See home tutors in <a href="{{ url('/city/kolkata') }}">Kolkata</a>,
    <a href="{{ url('/city/tata') }}">Jamshedpur</a>, <a href="{{ url('/city/ranchi') }}">Ranchi</a> and
    <a href="{{ url('/city/patna') }}">Patna</a>, or <a href="{{ url('/city') }}">cities across India</a>.
  </p>
  <p class="bbs-note">
    Teaching in Bhubaneswar? See <a href="{{ url('/tuition-jobs/bhubaneswar') }}">home tuition jobs in Bhubaneswar</a>
    and the localities where families are asking for tutors.
  </p>
  </section>

  </div>
</article>
