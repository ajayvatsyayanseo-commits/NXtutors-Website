{{--
  Long-form guide for the Chennai city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for parents choosing a
  home tutor in Chennai, not for search engines: every figure here is either
  live from the database or a published NXTutors policy, local facts come from
  the cited research in database/seo-content/areas/chennai-research.json, and
  no school, college, society, developer, hospital or mall is named. Metro
  Phase 2 lines (Purple, Yellow, Red) are described only as under construction.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $chAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $chA = function (string $slug, string $label) use ($chAreaSlugs) {
      return in_array($slug, $chAreaSlugs, true)
          ? '<a href="' . e(url('/city/chennai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $chTutors = (int) ($hubCounts['tutors'] ?? 0);
  $chAreas = $allAreas->count();
@endphp

<article class="nx-guide ch-guide" aria-labelledby="chGuideTitle">
  <h2 id="chGuideTitle">Home tuition in Chennai: a parent's guide from Mylapore to Kelambakkam</h2>

  <p class="nx-guide__lede ch-lede">
    Chennai stretches along the Bay of Bengal, and a tutor's route across it depends on which of its rail systems runs
    near your street. Mylapore's temple streets and the railway colonies of Royapuram and Perambur are among its oldest
    quarters; south of the Adyar River lie the housing-board layouts of Besant Nagar and the leafy nagars of Adyar;
    to the west sit the grids of Anna Nagar, Ashok Nagar and KK Nagar. Down the coast, the OMR carries the IT corridor towards Kelambakkam,
    while Tambaram and Avadi have become city corporations of their own at the southern and western edges. Suburban
    trains, the MRTS and two metro lines already knit these parts together, and three more metro lines are being built.
  </p>
  <nav class="nx-guide__toc ch-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ch-how">How matching works</a> ·
    <a href="#ch-zones">The eight zones</a> ·
    <a href="#ch-boards">Boards</a> ·
    <a href="#ch-classes">Classes</a> ·
    <a href="#ch-subjects">Subjects</a> ·
    <a href="#ch-jee-neet">JEE &amp; NEET</a> ·
    <a href="#ch-mode">Home or online</a> ·
    <a href="#ch-fees">Fees</a> ·
    <a href="#ch-choose">The demo class</a> ·
    <a href="#ch-calendar">The school year</a> ·
    <a href="#ch-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ch-how">How does NXTutors match a Chennai family with a tutor?</h2>
  <p>
    It starts with a single request. Tell us the class and board, the subjects, your locality with its nagar, street or
    complex, the weekdays you can keep free, a budget, and whether you want lessons at home, online or a mix of the two.
    We come back with two or three tutors who fit that brief, each with a fee you can see before anything is booked, and
    the opening lesson with the one you pick is a free demo. For Chennai, four questions carry the most weight:
  </p>
  <ul>
    <li><strong>Which rail line serves your home?</strong> A tutor who can ride the Blue or Green metro line, the MRTS or a suburban train to a station near you keeps time far better than one crossing town by road, so we begin from your nearest station.</li>
    <li><strong>House, small block or gated campus?</strong> Independent houses in Adyar or Anna Nagar mean a knock at the door; a small apartment building means a word with the watchman; the large gated communities on the OMR often want the visitor registered and confirmed by a resident.</li>
    <li><strong>Inside the corridor or beyond it?</strong> Homes along the OMR and in the far south, where rail has not yet arrived, are matched first with tutors who already live or teach along that stretch.</li>
    <li><strong>Which paper, at which level?</strong> We match class and board together, because a Class 7 State Board learner and an IB Chemistry HL candidate need very different teachers.</li>
  </ul>
  <p>
    Treat the demo as a normal lesson on whatever chapter school is covering this week. If it does not click, we line up
    the next tutor on your list, and changing tutor later on is also free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ch-zones">Chennai, zone by zone</h2>
  <p>
    @if($chTutors > 0)
      The tutors shown for Chennai come from {{ number_format($chTutors) }} tutor profiles,
    @else
      The tutors shown for Chennai come from our tutor profiles,
    @endif
    and @if($chAreas > 0){{ number_format($chAreas) }} localities @else every locality we cover @endif
    have a page of their own, listing tutors in that locality first, then others from the same zone, then those who
    teach online. For planning home lessons we split the city into eight zones, starting on the southern coast and
    ending in the north: <a href="#ch-adyar">Adyar, Besant Nagar and Mylapore</a>, <a href="#ch-tnagar">T Nagar,
    Nungambakkam and Kodambakkam</a>, <a href="#ch-velachery">Velachery, Guindy and Tambaram</a>,
    <a href="#ch-omr">OMR and ECR</a>, <a href="#ch-annanagar">Anna Nagar, Kilpauk and Aminjikarai</a>,
    <a href="#ch-vadapalani">Vadapalani, KK Nagar and Porur</a>, <a href="#ch-ambattur">Mogappair, Ambattur and
    Avadi</a> and <a href="#ch-north">Perambur, Kolathur and North Chennai</a>. The groupings are ours alone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="ch-adyar">Adyar, Besant Nagar and Mylapore: the old temple town and the southern bank</h3>
  <p>
    {!! $chA('mylapore', 'Mylapore') !!} is among the city's oldest neighbourhoods, with settlement records reaching back
    to the first century BCE; life there turns around the temple, its tank and the market streets, where old houses on
    tight lanes stand beside apartment blocks on broader avenues. {!! $chA('alwarpet', 'Alwarpet') !!}, north of the
    river, grew out of late eighteenth-century garden estates into streets of flats with offices along the main roads.
    Across the water, {!! $chA('adyar', 'Adyar') !!}, part of the city since 1948, is a cluster of named nagars with
    independent houses and low-rise blocks. {!! $chA('besant-nagar', 'Besant Nagar') !!} was laid out by the Tamil Nadu
    Housing Board from the early 1970s into the early 1980s on regular numbered streets beside the beach, and
    {!! $chA('thiruvanmiyur', 'Thiruvanmiyur') !!} grew around an ancient Shiva temple where the East Coast Road begins.
  </p>
  <p>
    The MRTS is the zone's rail spine. It opened from Chennai Beach to Chepauk on 16 November 1995, reached Thirumayilai
    on 19 October 1997, and was carried to Thiruvanmiyur on 26 January 2004 with stops including Mandaveli, Kotturpuram,
    Kasturba Nagar and Indira Nagar. Teynampet, on the Blue Line since 25 May 2018, serves Alwarpet. The Purple and
    Yellow metro lines are under construction here, with Thirumayilai planned as an interchange. Houses mean a doorbell,
    small blocks a watchman; near the Mylapore tank, festival days are better avoided, and beach evenings in Besant
    Nagar crowd up at weekends.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="ch-tnagar">T Nagar, Nungambakkam and Kodambakkam: bazaars, film streets and the South Line</h3>
  <p>
    {!! $chA('t-nagar', 'T Nagar') !!} was planned in 1923–25 on the bed of the drained Long Tank, with streets
    radiating from a central park; shops have outnumbered houses since the 1950s, but quieter residential pockets remain
    away from the bazaar streets. {!! $chA('nungambakkam', 'Nungambakkam') !!}, once garden estates, now puts offices and
    restaurants along its High Road with flats and a few houses behind. {!! $chA('kodambakkam', 'Kodambakkam') !!},
    home of the Tamil film industry, got one of the city's first flyovers in 1967, and its bungalows are steadily
    giving way to apartment buildings. {!! $chA('west-mambalam', 'West Mambalam') !!} is dense and market-led, having
    grown after its station opened in 1911, and {!! $chA('saidapet', 'Saidapet') !!}, on the Adyar River, was the seat
    of the old Chingleput district from 1859 to 1968 and mixes old streets with newer gated complexes.
  </p>
  <p>
    The South Line of the suburban railway, opened in 1931, stops at Nungambakkam, Kodambakkam, Mambalam and Saidapet.
    The Blue Line added AG–DMS, Teynampet, Nandanam and Saidapet on 25 May 2018 and Thousand Lights on 10 February
    2019, while Ashok Nagar and Vadapalani on the Green Line sit just to the west. The Yellow Line is under construction
    through Nandanam and Kodambakkam. Narrow streets in West Mambalam make parking a car hard, so tutors
    here often come on foot from the station or by two-wheeler; shopping weekends and festival seasons in T Nagar are
    worth avoiding.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="ch-velachery">Velachery, Guindy and Tambaram: the southern suburbs along GST Road</h3>
  <p>
    {!! $chA('guindy', 'Guindy') !!} is a transport hinge: at Kathipara junction the road from the city centre, the
    Mount–Poonamallee Road, the Inner Ring Road, 100 Feet Road and GST Road all meet, and homes sit in pockets between an
    industrial estate, a national park and institutional campuses. {!! $chA('velachery', 'Velachery') !!} grew fast from
    the late twentieth century into apartment complexes beside houses, with {!! $chA('madipakkam', 'Madipakkam') !!} and
    its lake to the west and {!! $chA('pallikaranai', 'Pallikaranai') !!}, beside its protected marsh, to the south.
    {!! $chA('nanganallur', 'Nanganallur') !!}, near the airport, is known for its many temples;
    {!! $chA('medavakkam', 'Medavakkam') !!} is a fast-growing hub for newer layouts; and down GST Road,
    {!! $chA('chromepet', 'Chromepet') !!}, named after a chrome leather company set up in 1912, and
    {!! $chA('tambaram', 'Tambaram') !!}, a city corporation since 3 November 2021, are established suburbs of houses,
    plotted layouts and newer complexes.
  </p>
  <p>
    Rail comes three ways. Little Mount, Guindy, Alandur, Nanganallur Road, Meenambakkam and Chennai Airport opened on
    the Blue Line on 21 September 2016, and St Thomas Mount joined the Green Line on 14 October 2016. The MRTS reached
    Velachery on 19 November 2007 and, from 14 March 2026, runs on through Puzhuthivakkam and Adambakkam to St Thomas
    Mount. Suburban trains run the length of GST Road to Tambaram, one of the area's four main terminals. Medavakkam and
    Pallikaranai have no station yet, and the Red Line towards Sholinganallur is still being built, so tutors there
    come by road; plan around the office rush at Vijayanagar and on GST Road.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="ch-omr">OMR and ECR: the IT corridor and the coast road</h3>
  <p>
    Two parallel roads run south from Thiruvanmiyur. The OMR, which starts at Madhya Kailash and was declared State
    Highway 49A on 29 October 2008, is lined with IT offices. {!! $chA('perungudi', 'Perungudi') !!} changed from a small
    village into a busy mix of offices and homes; {!! $chA('thoraipakkam', 'Thoraipakkam') !!}, on the eastern edge of the
    Pallikaranai marsh, is mostly flats in multi-storey buildings and gated communities; and
    {!! $chA('sholinganallur', 'Sholinganallur') !!}, annexed in 2011 as ward 200, the city's last, combines a housing-board
    township with large gated campuses. Further out, {!! $chA('navalur', 'Navalur') !!} was a village until around 2010,
    and {!! $chA('kelambakkam', 'Kelambakkam') !!}, still a village panchayat, is marked by the metropolitan authority as
    a growth node. Along the East Coast Road, {!! $chA('neelankarai', 'Neelankarai') !!}, the "blue shore", is bungalows,
    villas and row houses by the sea, parallel to Thoraipakkam.
  </p>
  <p>
    Perungudi has had an MRTS station since 19 November 2007, but most of the corridor has no rail yet. The Purple Line is
    under construction along the OMR through Perungudi, Thoraipakkam, Sholinganallur, Navallur and Siruseri, and the Red
    Line will end at Sholinganallur to meet it; neither is open. The Pallavaram–Thoraipakkam Radial Road links the OMR
    with GST Road. Gated communities here often want resident approval for a visitor, so add the tutor as a regular
    guest, and set lessons after the evening office rush has passed.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="ch-annanagar">Anna Nagar, Kilpauk and Aminjikarai: the avenue grid and the old high road</h3>
  <p>
    {!! $chA('anna-nagar', 'Anna Nagar') !!} was laid out by the Tamil Nadu Housing Board in the early 1970s after the
    1968 trade fair held on the site: numbered avenues run in a grid, even numbers east to west and odd numbers north to
    south, with plots, flats and wide parks. {!! $chA('anna-nagar-west', 'Anna Nagar West') !!} continues the grid and
    holds one of the city's largest bus terminals on the Inner Ring Road. {!! $chA('shenoy-nagar', 'Shenoy Nagar') !!}
    was first planned for middle-income families; {!! $chA('kilpauk', 'Kilpauk') !!}, a cantonment before independence,
    mixes big institutional campuses with houses and flats; {!! $chA('aminjikarai', 'Aminjikarai') !!} is a set of
    colonies beside a busy commercial belt; {!! $chA('arumbakkam', 'Arumbakkam') !!} grew mangoes until around 1960;
    and {!! $chA('purasawalkam', 'Purasawalkam') !!}, granted to the East India Company in 1693, is old lanes and busy
    markets along a ridge-top high road.
  </p>
  <p>
    Poonamallee High Road, built in the 1850s as the Grand Western Trunk Road, threads the zone from Kilpauk to
    Koyambedu. Arumbakkam, Koyambedu and CMBT opened on the Green Line on 29 June 2015, and in May 2017 the underground
    section from Thirumangalam eastward added Anna Nagar Tower, Anna Nagar East, Shenoy Nagar and stations serving
    Kilpauk and Aminjikarai. A Red Line station at Anna Nagar West is under construction. The avenue numbers make homes
    easy to find, and near the 2nd Avenue shops or Purasawalkam's markets a tutor arriving by metro beats one looking
    for parking.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="ch-vadapalani">Vadapalani, KK Nagar and Porur: housing-board sectors out to Arcot Road</h3>
  <p>
    {!! $chA('vadapalani', 'Vadapalani') !!}, named North Palani after its late nineteenth-century Murugan temple, is
    one of the most densely built parts of the city, with flats and older houses beside film studios and a big bus
    terminus on Arcot Road. {!! $chA('ashok-nagar', 'Ashok Nagar') !!}, founded in 1964 and known for its lion-topped
    pillar, and {!! $chA('kk-nagar', 'KK Nagar') !!}, a 1970s grid of rectangular sectors each with a park near the
    middle, share their housing-board history and their easy numbered addresses. West along Arcot Road,
    {!! $chA('virugambakkam', 'Virugambakkam') !!} was paddy fields until the 1970s and joined the city in 1973,
    {!! $chA('valasaravakkam', 'Valasaravakkam') !!} was its own municipality until October 2011, and
    {!! $chA('porur', 'Porur') !!}, a town panchayat from 1977, has seen the Mount-Poonamallee Road stretch become an IT
    corridor.
  </p>
  <p>
    Vadapalani and Ashok Nagar opened on 29 June 2015 as part of the first Green Line section, from Koyambedu to Alandur,
    and the Inner Ring Road links Koyambedu, Vadapalani and Kathipara. The Yellow Line westward from Vadapalani, with
    stations at Virugambakkam South, Alwarthirunagar, Valasaravakkam and Porur Junction, is still under construction, so
    homes beyond Vadapalani are reached by bus or by metro plus an auto. Porur Junction, where three main roads meet, is
    busiest at office hours; late afternoons and weekends are easier there.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="ch-ambattur">Mogappair, Ambattur and Avadi: the western belt on the Arakkonam line</h3>
  <p>
    {!! $chA('mogappair', 'Mogappair') !!}, in two halves, East and West, grew out of a village on the state highway
    between Ambattur and Anna Nagar, and mixes flats with older plotted homes. {!! $chA('ambattur', 'Ambattur') !!} grew
    after the Second World War as part of the city's auto belt; its industrial estate, commissioned in 1964, is
    described as one of the biggest small-scale estates in South Asia, and established colonies of houses and flats
    surround it. {!! $chA('avadi', 'Avadi') !!}, a large western suburb, became Tamil Nadu's 15th municipal corporation in
    2019 and is known for its defence manufacturing and research establishments, with housing-board estates, plotted
    layouts and apartment projects.
  </p>
  <p>
    The suburban line from Chennai Central to Arakkonam is the backbone, with stations at Pattaravakkam, Ambattur,
    Thirumullaivoyal, Annanur and Avadi; its first stretch was electrified on 29 November 1979, and the
    Villivakkam–Avadi section followed on 2 October 1986. Mogappair relies on Thirumangalam and Koyambedu on the Green
    Line, or on buses. The Chennai-Tiruvallur High Road runs through Ambattur and Avadi, and the Outer Ring Road passes
    western Avadi. Defence areas and gated estates may need entry details in advance, so share them with the tutor
    before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="ch-north">Perambur, Kolathur and North Chennai: where the railway began</h3>
  <p>
    North Chennai holds the city's railway history. {!! $chA('royapuram', 'Royapuram') !!}, by the sea, has the station
    that opened in June 1856 as South India's first terminus, with the oldest surviving station buildings on Indian
    Railways, and its old lanes run near a busy fishing harbour. {!! $chA('perambur', 'Perambur') !!}, where the Madras
    Railway set up its workshops in 1856, has the city's second oldest station and a dense mix of market streets and
    houses. {!! $chA('tondiarpet', 'Tondiarpet') !!}, near the coast, combines trading and small factories with
    residential streets. {!! $chA('villivakkam', 'Villivakkam') !!} is densely built on both sides of the railway,
    linked by a road subway, and {!! $chA('kolathur', 'Kolathur') !!}, one of the older housing colonies in the city, is
    known for its ornamental fish trade.
  </p>
  <p>
    Washermanpet opened on the Blue Line on 10 February 2019, and the northern extension, including a Tondiarpet
    station, followed on 14 February 2021. Perambur and Villivakkam are on the suburban line towards Avadi and Arakkonam,
    and Tondiarpet also has a station on the line towards Gummidipoondi. Red Line stations at Kolathur Junction and
    Villivakkam are under construction. The northern arm of the Inner Ring Road runs from Padi towards Madhavaram.
    Parking near the markets and harbour is tight, so rail or an auto works better, and a slightly earlier evening slot
    beats the rush on the market roads.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ch-boards">Which boards do Chennai tutors teach?</h2>
  <p>
    Chennai families study under four broad kinds of board; ask for a tutor who knows yours well.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Tamil Nadu State Board</h3>
  <p>
    A large share of the city's children study under the Tamil Nadu State Board, with a public examination at the end
    of Class 10 and the higher secondary course across Classes 11 and 12. A good tutor works straight from the state
    textbooks, follows the school's own term tests, and plans revision around the timetable the board announces. Take
    the exam scheme and dates only from the board's official notices, never from forwarded messages.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    CBSE papers rest on the NCERT textbooks, and many questions now test whether a student can apply an idea, through
    case-based passages and assertion–reason items, rather than recall it. Tutors who do well here teach the chapter
    first, then work through the board's sample papers and marking scheme, and insist on written steps so that method
    marks are collected.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    The CISCE board sets ICSE in Class 10 and ISC in Class 12. Both expect long written answers across a wide syllabus,
    with set literature texts in English, so the usual difficulty is breadth. The fix is a revision loop that revisits
    every chapter, frequent timed answers, and care over each subject's project and internal work.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and IGCSE</h3>
  <p>
    The IB Diploma mixes final exams with internally assessed coursework, and its two Mathematics courses, Analysis and
    Approaches or Applications and Interpretation, each come at Standard or Higher Level. A tutor may discuss an IA or
    Extended Essay but must not write it. For Cambridge IGCSE, success comes from command words, the correct tier and
    past papers marked against the official scheme.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ch-classes">What should tuition focus on at each stage?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Classes 1 to 8</h3>
  <p>
    The early years are about habits: reading with understanding, quick mental sums, fractions and decimals, the first
    steps into algebra, and neat written work. A tutor beside the child once or twice a week usually suits this age
    better than a screen.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    Maths and Science take a clear step up in Class 9, and the board year leans on it, so any gap left then returns in
    Class 10. A workable rhythm is teach, test, then full papers from the winter. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 Maths preparation plan</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 Science notes</a> are written for CBSE, but the
    habits carry across boards.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    Senior classes reward a specialist over a generalist. Physics and Maths trip up the most science students, and
    Accountancy the most commerce students, and much of Class 12 builds on Class 11. See
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">strategies for Class 12 Physics</a> and
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ch-subjects">Which subjects can a Chennai tutor cover?</h2>
  <p>
    Tutors on NXTutors teach Mathematics, Physics, Chemistry, Biology, English, Computer Science, Accountancy,
    Economics and Business Studies, among others, and many take every subject for primary classes; if you need a
    language such as Tamil or Hindi, say so in your request. Chennai has its own pages for
    <a href="{{ url('/maths-home-tutor-chennai') }}">maths home tutors</a>,
    <a href="{{ url('/science-home-tutor-chennai') }}">science home tutors</a>,
    <a href="{{ url('/physics-home-tutor-chennai') }}">physics home tutors</a> and
    <a href="{{ url('/chemistry-home-tutor-chennai') }}">chemistry home tutors</a>. Chemistry in Class 12 is really three
    subjects, numerical Physical, reaction-based Organic and memory-heavy Inorganic; our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">guide to Class 12 Organic and Inorganic
    Chemistry</a> takes each in turn.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ch-jee-neet">Can a home tutor help with JEE or NEET in Chennai?</h2>
  <p>A tutor works well alongside a coaching programme, not instead of one. Three jobs are where the hours count:</p>
  <ul>
    <li><strong>Clearing the pile.</strong> Each week, go through the coaching sheets left undone and every test question marked wrong.</li>
    <li><strong>One revision for two goals.</strong> NCERT content for Class 12 sits under both the board paper and the entrance exam, so a single plan can serve both.</li>
    <li><strong>The weakest subject first.</strong> Extra hours on the subject pulling the total down do more than equal time for all three.</li>
  </ul>
  <p>
    NTA holds JEE Main in two sessions in the first half of the year, and qualifiers may sit JEE Advanced. NEET UG is
    held once a year, with Biology worth half the paper, which makes a close reading of the NCERT Biology books
    essential. Confirm every date in that year's official bulletin. Our subject guides cover
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE Maths topic by topic</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE Physics</a>,
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE Chemistry</a> and
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET Biology built on NCERT</a>. Our comparison of
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching and a home tutor for JEE</a> was
    written for Gurugram, but its reasoning holds in Chennai.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ch-mode">Home or online tuition in Chennai?</h2>
  <p>
    Younger children, and any subject where the working matters as much as the answer, such as Maths or numerical
    Chemistry, usually do better with a tutor at the table. Online lessons reach tutors across India, which helps most
    with IB, IGCSE and senior specialist papers. In Chennai, the rail map decides much of the rest:
  </p>
  <ul>
    <li><strong>The suburban lines.</strong> Trains on the South Line to Tambaram and on the western line to Avadi and Arakkonam put a large pool of tutors within reach of homes near those stations.</li>
    <li><strong>The MRTS.</strong> From Chennai Beach through Mylapore and Velachery, and since 14 March 2026 on to St Thomas Mount, where it meets the metro, it ties the coast to the rest of the rail network.</li>
    <li><strong>Two metro lines.</strong> The Blue Line runs from the north through the centre to the airport, and the Green Line from the centre through Anna Nagar and Koyambedu to St Thomas Mount, meeting at Alandur.</li>
    <li><strong>Lines still being built.</strong> The Purple, Yellow and Red lines are under construction, so for now the OMR, Porur and Medavakkam depend on road travel, and online lessons fill gaps there.</li>
  </ul>
  <p>
    Many families settle on one home lesson a week plus a short online session for doubts, with the same tutor for both.
    Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">comparison of home and online tutors</a> sets out the
    trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ch-fees">How much does a home tutor cost in Chennai?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor
    sets their own fee, and three things usually shift it:
  </p>
  <ul>
    <li><strong>Class and board.</strong> Primary lessons generally cost less than senior-school, IB or IGCSE teaching.</li>
    <li><strong>How specialised the work is.</strong> JEE Advanced problem solving, IB Higher Level and IA or Extended Essay guidance command the highest fees.</li>
    <li><strong>The journey.</strong> A tutor coming from the far side of the city by road may build that into the fee; one who walks from the next street rarely does.</li>
  </ul>
  <p>
    Every shortlisted fee is shown before the demo, and we do not suggest tutors above the budget you give. The
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> breaks fees down by class and subject, and our post on
    <a href="{{ url('/blog/home-tuition-fees-chennai') }}">home tuition fees in Chennai</a> covers the city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ch-choose">How do you judge a tutor at the demo class?</h2>
  <p>A profile earns a tutor a place on your list; the demo shows whether they should keep it. Look for five things:</p>
  <ol>
    <li><strong>Questions before teaching.</strong> Did the tutor check what your child already understands?</li>
    <li><strong>Who held the pen.</strong> Was your child working through problems, or mainly listening?</li>
    <li><strong>Knowledge of your board.</strong> Can the tutor explain how your board's paper is set this year?</li>
    <li><strong>A plan for the month.</strong> What will be covered, and how will you know it is working?</li>
    <li><strong>A route that lasts.</strong> Which station or road, and which time slot, can they keep every week?</li>
  </ol>
  <p>
    For a gated complex, give the tutor's name to security or add it to the visitor app before the demo; for a house,
    send the door number, the street, a landmark and a map pin. Keep lessons in a shared room with an adult at home. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> and the guide to
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a> may help.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ch-calendar">When should tuition begin in the school year?</h2>
  <p>
    Chennai's schools do not all keep one calendar. The CBSE session opens in April, and Tamil Nadu State Board schools
    follow the academic calendar that the state announces each year. A board year usually moves through these stages:
  </p>
  <ul>
    <li><strong>The start of the session:</strong> the cleanest moment to begin, with new books and time to repair last year's gaps.</li>
    <li><strong>The first term:</strong> steady weekly lessons alongside school, with chapter tests and the first term examinations.</li>
    <li><strong>The middle months:</strong> finishing the syllabus, with revision or pre-board examinations in many schools towards the end.</li>
    <li><strong>The board season:</strong> sample and past papers, then the board examinations; the first JEE Main session usually falls early in the year.</li>
    <li><strong>April and May:</strong> the second JEE Main session, then JEE Advanced and NEET UG, while IB and Cambridge students sit their May papers.</li>
  </ul>
  <p>
    Take every date from official notices. Starting at the beginning of the session gives a full year; a late start
    still helps, with the time spent on papers and exam technique.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ch-start">How do you get started in Chennai?</h2>
  <p>
    Send us the class, board and subjects, your locality with its street or complex, and the times that work. We reply
    with two or three matched tutors; you pick one for a free demo class and decide after it. Choose your locality from
    the list above, browse <a href="{{ url('/tutors') }}">all tutors</a> or book a
    <a href="{{ url('/demo-class') }}">free demo class</a> straight away. Where no home tutor is close enough yet, an
    online tutor from elsewhere in India can begin at once.
  </p>
  <p>
    Focused on one part of the city? Our local guides cover
    <a href="{{ url('/blog/south-chennai-tuition-guide') }}">South Chennai</a>,
    <a href="{{ url('/blog/omr-and-ecr-tuition-guide') }}">the OMR and ECR</a> and
    <a href="{{ url('/blog/west-and-north-chennai-tuition-guide') }}">West and North Chennai</a>.
  </p>
  <p class="ch-note">
    Looking beyond Chennai? See home tutors in <a href="{{ url('/city/coimbatore') }}">Coimbatore</a>,
    <a href="{{ url('/city/bengaluru') }}">Bengaluru</a> and <a href="{{ url('/city/hyderabad') }}">Hyderabad</a>, or
    browse <a href="{{ url('/city') }}">cities across India</a>.
  </p>
  <p class="ch-note">
    Teaching in Chennai? See <a href="{{ url('/tuition-jobs/chennai') }}">home tuition jobs in Chennai</a> and the
    localities where families are asking for tutors.
  </p>
  </section>

  </div>
</article>
