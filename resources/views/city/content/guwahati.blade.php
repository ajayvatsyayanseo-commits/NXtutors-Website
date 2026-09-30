{{--
  Long-form guide for the Guwahati city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for parents choosing a
  home tutor in Guwahati: every figure is either live from the database or a
  published NXTutors policy, local facts come from the cited research in
  database/seo-content/areas/guwahati-research.json, and no school, college,
  university, society, developer, hospital or mall is named. Guwahati has no
  metro in operation; it is mentioned only as proposed. Highway numbers are
  left out because sources disagree.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $gwAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gwA = function (string $slug, string $label) use ($gwAreaSlugs) {
      return in_array($slug, $gwAreaSlugs, true)
          ? '<a href="' . e(url('/city/guwahati/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $gwTutors = (int) ($hubCounts['tutors'] ?? 0);
  $gwAreas = $allAreas->count();
@endphp

<article class="nx-guide gw-guide" aria-labelledby="gwGuideTitle">
  <h2 id="gwGuideTitle">Home tuition in Guwahati: a family guide from Pan Bazar to Basistha</h2>

  <p class="nx-guide__lede gw-lede">
    Guwahati is a long city pressed between the Brahmaputra and the hills. The old bazaars sit on the south bank of the
    river, around the main railway station. From there GS Road, the road to Shillong, carries the city south past
    Ganeshguri to the capital complex at Dispur, then on through Beltola and Six Mile to Khanapara, near the Meghalaya
    border. West lie the railway town of Maligaon and the junction at Jalukbari, and across the water North Guwahati is
    slowly being drawn into the city. No metro runs here yet, so buses, autos and two-wheelers decide which tutors can
    reach your door, and when.
  </p>
  <nav class="nx-guide__toc gw-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gw-how">How matching works</a> ·
    <a href="#gw-zones">Five zones</a> ·
    <a href="#gw-boards">State board, CBSE, ICSE</a> ·
    <a href="#gw-classes">Class by class</a> ·
    <a href="#gw-subjects">Subjects</a> ·
    <a href="#gw-jee-neet">JEE &amp; NEET</a> ·
    <a href="#gw-mode">Home or online</a> ·
    <a href="#gw-fees">Fees</a> ·
    <a href="#gw-choose">The demo class</a> ·
    <a href="#gw-calendar">The school year</a> ·
    <a href="#gw-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gw-how">How does NXTutors pair a Guwahati family with a tutor?</h2>
  <p>
    Start with a single request. Say which class your child is in and which board the school follows, list the
    subjects, name your locality along with a tiniali, chariali or lane landmark, and mention the evenings or weekend
    slots that are free. Add whether you want lessons at home, online or a mix of both. We come back with two or three
    matched tutors, and each one's fee is shown to you before any lesson is booked. The first class with the tutor you
    pick is a free demo, and moving to a different tutor later costs nothing. For Guwahati we weigh four things first:
  </p>
  <ul>
    <li><strong>Which stretch of the city you are on.</strong> The old bazaars, the Zoo Road side, GS Road, the far south and the western corridor each draw on a different set of tutors, so we begin close to your end.</li>
    <li><strong>Which bank of the river.</strong> A North Guwahati home needs a tutor who already lives or teaches on the north bank, or an online one; a daily river crossing is hard to sustain.</li>
    <li><strong>House or apartment building.</strong> Older houses on family plots are a knock at the door, while multistorey buildings usually want a visitor's name at the gate before the first class.</li>
    <li><strong>The exact paper.</strong> Class and board are matched together, because a Class 10 state board student and a Class 12 CBSE student aiming at engineering need different people.</li>
  </ul>
  <p>
    The demo is a normal lesson on the chapter your child is doing at school that week, which shows far more about a
    tutor than any profile can.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gw-zones">Guwahati, zone by zone</h2>
  <p>
    @if($gwTutors > 0)
      The tutors listed on this page come from {{ number_format($gwTutors) }} tutor profiles,
    @else
      The tutors listed on this page come from our tutor profiles,
    @endif
    and @if($gwAreas > 0){{ number_format($gwAreas) }} Guwahati localities @else each Guwahati locality @endif
    have their own page. Each locality page shows tutors from that neighbourhood first, then those elsewhere in the
    same zone, then the rest of the city, then tutors who teach online. To plan home visits we divide Guwahati into five
    zones, starting at the river and moving south, then west and across the water:
    <a href="#gw-old">Old City &amp; Riverfront</a>, <a href="#gw-zoo">Chandmari &amp; Zoo Road</a>,
    <a href="#gw-gs">GS Road &amp; Dispur</a>, <a href="#gw-beltola">Beltola &amp; Khanapara</a> and
    <a href="#gw-west">Maligaon, Jalukbari &amp; North Guwahati</a>. The grouping is ours and does not follow ward
    boundaries.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="gw-old">Old City &amp; Riverfront: the bazaars around the station</h3>
  <p>
    Old Guwahati grew up as a string of bazaars on the south bank, each with its own trade.
    {!! $gwA('pan-bazar', 'Pan Bazar') !!}, whose name means the betel-leaf market, is known for its bookshops, printing
    presses and wholesale medicine trade, with the Dighalipukhuri tank and the Kachari Ghat river jetty close by.
    {!! $gwA('paltan-bazaar', 'Paltan Bazaar') !!} is the transport hub: Guwahati railway station, the busiest in the
    city, stands here with the state transport bus terminal at its rear. {!! $gwA('uzan-bazar', 'Uzan Bazar') !!}, one
    of the oldest settlements, runs beside the river and holds the historic Rajbari compound and a riverfront park, and
    {!! $gwA('ulubari', 'Ulubari') !!}, between Paltan Bazaar and Bhangagarh, is where GS Road begins its run south
    under the Ulubari flyover.
  </p>
  <p>
    Homes here are flats above or behind the market streets, older houses in the lanes, and low-rise and mid-rise
    apartment buildings towards Ulubari and Rehabari. This is the easiest part of the city to reach by public
    transport, so tutors from almost anywhere can come by bus or train. The catch is the crowd: the station area and
    the market streets are busy through the working day, so give a precise lane landmark and floor, and prefer an early
    morning, a later evening or a weekend slot.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="gw-zoo">Chandmari &amp; Zoo Road: the student belt east of the centre</h3>
  <p>
    {!! $gwA('chandmari', 'Chandmari') !!} is one of Guwahati's oldest localities, home to the city's radio centre and
    to many schools and coaching classes, and its playground has held a Bohag Bihu celebration every year since 1961.
    Milanpur, Krishnanagar, Bamunimaidam and Bhaskar Nagar are among the neighbourhoods around it.
    {!! $gwA('zoo-road', 'Zoo Road') !!} starts at Chandmari and runs to Ganeshguri, named for the state zoo and
    botanical garden beside it, with the VIP Road linking it to the eastern side of the city.
    {!! $gwA('lachit-nagar', 'Lachit Nagar') !!}, near Zoo Tiniali and South Sarania, joins GS Road to the Zoo Road side,
    and {!! $gwA('bhangagarh', 'Bhangagarh') !!} is a busy market locality on GS Road that also draws a steady stream
    of visitors to its health-care district through the day.
  </p>
  <p>
    Housing mixes older independent houses, builder floors, often three-bedroom, and multistorey apartments along
    Zoo Road, with many flats rented by students and small families. Because the four localities sit between two main
    roads, a tutor already teaching in one can often add a class in the next. Coaching runs through the evening here,
    so a fixed weekday slot agreed in advance protects home lessons; in narrow Lachit Nagar lanes, say where a
    two-wheeler can be parked.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="gw-gs">GS Road &amp; Dispur: the capital and its southern sub-centre</h3>
  <p>
    Dispur became the capital of Assam in 1973, when the seat of government moved from Shillong, and the city's
    southern sub-centre grew up around its capital complex. {!! $gwA('dispur', 'Dispur') !!} holds the Secretariat and
    the Legislative Assembly, with both the Assam Trunk Road and GS Road passing through and the Bharalu river flowing
    across it. {!! $gwA('ganeshguri', 'Ganeshguri') !!}, named after Lord Ganesh, is the commercial heart of this side,
    where Zoo Road ends and the tea auction centre sits close by. {!! $gwA('rukminigaon', 'Rukminigaon') !!} is a
    residential locality just off GS Road, {!! $gwA('hatigaon', 'Hatigaon') !!} takes its name from the elephants of the
    old Beltola rulers, and {!! $gwA('kahilipara', 'Kahilipara') !!} places ordinary lanes beside the state education
    department offices and other government compounds.
  </p>
  <p>
    Most families live in apartment buildings with two- and three-bedroom flats, with builder floors and independent
    houses in the older lanes and a few larger villas around Kahilipara. Buses from every direction pass through
    Ganeshguri, so this zone draws tutors from both the centre and the south. Office opening and closing hours around
    the capital complex and the evening rush on GS Road are the two times to avoid, and most apartment gates will ask
    for the visitor's name and flat number.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="gw-beltola">Beltola &amp; Khanapara: the far south towards Meghalaya</h3>
  <p>
    {!! $gwA('beltola', 'Beltola') !!} was once a small kingdom that lasted until 1947, and it has grown fast since the
    1980s, now reaching the national highway at the southern edge of the city. Its twice-weekly Beltola Bazar, a fruit
    and vegetable market with roots in the late medieval period, still meets in the middle of the locality.
    {!! $gwA('survey', 'Survey') !!}, often called Survey Beltola, has lanes such as Ajanta Path running off the main
    road. {!! $gwA('six-mile', 'Six Mile') !!} sits on GS Road, with its flyover up to the national highway and Jayanagar
    Road into the neighbouring lanes. {!! $gwA('khanapara', 'Khanapara') !!}, in the far south, is a hub for regional
    road transport and has an indoor stadium and a regional science centre, and {!! $gwA('basistha', 'Basistha') !!},
    at the southern edge beside the Garbhanga forest, is known for its temple and ashram on the Basistha river.
  </p>
  <p>
    Homes range from multistorey apartments and large complexes to traditional houses and plots in quieter lanes. Six
    Mile and Khanapara have an alternative rail point at Narangi, but most tutors arrive by city bus or auto along GS
    Road or the highway. Keep class times clear of market days near Beltola Bazar and of the heavier regional traffic
    around Khanapara, and share a tower and flat number for the bigger complexes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="gw-west">Maligaon, Jalukbari &amp; North Guwahati: the railway west and the north bank</h3>
  <p>
    {!! $gwA('maligaon', 'Maligaon') !!}, below the Nilachal hill, is the headquarters of the Northeast Frontier
    Railway, and Kamakhya Junction, the city's second-largest station, is here; the locality is also known for its
    Durga Puja celebrations. {!! $gwA('adabari', 'Adabari') !!}, between Maligaon and Jalukbari, centres on Adabari
    Tiniali, where the Pandu Port Road meets the Assam Trunk Road, and on a bus depot serving towns across lower Assam.
    {!! $gwA('jalukbari', 'Jalukbari') !!}, on the river, is where the western corridor divides between the road to the
    airport and the road north over the Saraighat bridges, and a large higher-education campus gives it a big student
    population.
  </p>
  <p>
    Across the Brahmaputra, {!! $gwA('north-guwahati', 'North Guwahati') !!}, site of the ancient city of Durjaya, is
    being gradually incorporated into the city limits. Three bridges now cross the river: the rail-cum-road Saraighat
    bridge of 1962, the New Saraighat bridge beside it from 2017, and the six-lane bridge to North Guwahati, opened in
    February 2026. On the south bank, apartment gates are the norm and Kamakhya Junction brings tutors in from both
    directions. On the north bank, houses and plots are spread out, so ask for a tutor who lives on that side and keep
    online classes for specialist subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gw-boards">State board, CBSE or ICSE: which board does your child study?</h2>
  <p>
    Guwahati families are spread across three systems, and a good tutor for one is not automatically a good tutor for
    another. Families following the IB or Cambridge IGCSE usually find their specialist online, since those tutors are
    spread across India.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Assam's state board: SEBA and AHSEC</h3>
  <p>
    For years the Class 10 examination in Assam was run by SEBA, the Board of Secondary Education, Assam, and the
    Classes 11 and 12 higher secondary course by AHSEC, the Assam Higher Secondary Education Council. The state has
    since brought the two together under a single state school education board, so notices may carry the new name.
    Either way, a state board student needs a tutor who works from the prescribed textbooks and knows the medium of
    instruction the school uses. Take syllabus, timetable and paper pattern only from the board's official notices.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    CBSE papers are written around the NCERT textbooks, and many questions now test whether a student can apply an idea
    rather than recall it, through case-based passages and assertion–reason items. A tutor for a CBSE child should work
    outwards from the NCERT chapter, practise with the board's own sample papers and marking schemes, and insist that
    every step of working is written down.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    CISCE conducts the ICSE after Class 10 and the ISC after Class 12. Both reward full written answers over a wide
    syllabus, and English includes set literature texts. For most students the difficulty is volume, not any one
    chapter, so the tutor's work is a revision loop that keeps coming back to earlier topics, regular timed answers and
    steady care over project and internal assessment work.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gw-classes">What should the tutor concentrate on at each stage?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Classes 1 to 8</h3>
  <p>
    The younger years are about habits: reading with understanding, quick number sense, fractions, the first steps into
    algebra, and neat, complete work in the exercise book. One or two unhurried sessions a week with a tutor at the
    table usually do more at this age than long daily classes.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    Class 9 is where Maths and Science suddenly get harder, and any gap left there returns in the board year. Finish each
    chapter with a short test, then turn to full papers once winter arrives. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 Maths preparation plan</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 Science notes</a> suggest an order of work.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    In the higher secondary years a subject specialist beats an all-rounder. Science students most often struggle with
    Physics and Maths, commerce students with Accountancy. Class 11 lays the foundation; our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 Physics strategies</a> and
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a> help in the
    final year.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gw-subjects">Which subjects do Guwahati tutors teach?</h2>
  <p>
    Tutors on NXTutors take Mathematics, Physics, Chemistry, Biology, English, Computer Science, Accountancy, Economics,
    Business Studies and Hindi, and many cover every subject for primary classes; mention Assamese in the request if
    your child needs it. Guwahati has its own pages for
    <a href="{{ url('/maths-home-tutor-guwahati') }}">maths home tutors in Guwahati</a>,
    <a href="{{ url('/science-home-tutor-guwahati') }}">science tutors</a>,
    <a href="{{ url('/physics-home-tutor-guwahati') }}">physics tutors</a> and
    <a href="{{ url('/chemistry-home-tutor-guwahati') }}">chemistry tutors</a>. Senior Chemistry needs a word of its own:
    the numerical Physical part, the mechanism-led Organic part and the fact-heavy Inorganic part each need a different
    way of studying, as our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Organic and Inorganic Chemistry guide</a>
    explains.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gw-jee-neet">Can a home tutor help with JEE or NEET in Guwahati?</h2>
  <p>
    Yes, as a partner to coaching rather than a replacement for it. Chandmari and the GS Road side are full of evening
    coaching, and a home tutor earns a place next to it in three ways:
  </p>
  <ul>
    <li><strong>Working through what is left over.</strong> Each week the tutor takes the coaching sheets that were not finished and the test questions that went wrong.</li>
    <li><strong>Keeping the board exam in sight.</strong> Class 12 NCERT content underlies both the school-leaving paper and the entrance tests, so a single revision plan can serve the two.</li>
    <li><strong>Lifting the weakest subject.</strong> Concentrated hours on the subject pulling the total down achieve more than time spread evenly.</li>
  </ul>
  <p>
    NTA holds JEE Main in two sessions in the first half of the year, and candidates who qualify can sit JEE Advanced.
    NEET UG is held once a year and Biology carries half its marks, so the NCERT Biology books repay close reading. Take
    dates only from that year's official information bulletin. Our topic plans for
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE Maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE Physics</a>,
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE Chemistry</a> and
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET Biology, NCERT first</a> go further. When coaching
    finishes late, a short online doubt session can stand in for a home visit that evening.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gw-mode">Should lessons be at home or online in Guwahati?</h2>
  <p>
    A tutor at the table suits younger children and any subject where the working matters as much as the answer, such as
    Maths or Chemistry numericals. Online lessons open up tutors across India, which matters most for ICSE literature,
    IB and IGCSE, and senior specialist papers. Guwahati's shape tips the balance in a few ways:
  </p>
  <ul>
    <li><strong>No metro yet.</strong> A Guwahati Metro has been proposed, with four corridors planned in its first phase, but none is running, so every home visit is by road and a tutor from your own zone is easier to keep for a full year.</li>
    <li><strong>One long spine.</strong> GS Road links the centre with Dispur, Beltola and Six Mile, so homes near it can draw on tutors all along the road, while lanes further off may need a tutor who lives close.</li>
    <li><strong>The river.</strong> Three bridges now cross the Brahmaputra, but a north-bank home still does better with a tutor from that side, or with online lessons for specialist subjects.</li>
    <li><strong>Festival and event days.</strong> Bihu at the Chandmari playground, Durga Puja in Maligaon, market days at Beltola Bazar and stadium events in Ulubari slow the roads nearby; those evenings are good ones to switch to online.</li>
  </ul>
  <p>
    Many families keep one tutor for both: a weekly home lesson and a shorter online session for doubts. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">comparison of home and online tutoring</a> sets out the
    trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gw-fees">How much does a home tutor cost in Guwahati?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Every tutor
    sets their own fee, and three things usually move it:
  </p>
  <ul>
    <li><strong>Stage and board.</strong> Primary classes generally cost less than higher secondary or entrance-level work.</li>
    <li><strong>How specialised the teaching is.</strong> JEE Advanced problem solving and IB Higher Level sit at the upper end of the range.</li>
    <li><strong>The journey.</strong> A tutor coming from the far end of GS Road or from across the river may allow for the trip; one from your own zone usually does not.</li>
  </ul>
  <p>
    You see every shortlisted fee before the demo, and nobody above your stated budget is suggested. The
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> breaks fees down by class and subject, and our local post on
    <a href="{{ url('/blog/home-tuition-fees-guwahati') }}">home tuition fees in Guwahati</a> turns the range into a
    household budget.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gw-choose">What should you look for at the demo class?</h2>
  <p>A profile puts a tutor on your list; the demo decides whether they stay on it. Watch for five things:</p>
  <ol>
    <li><strong>Questions before teaching.</strong> Did the tutor find out what your child already knows?</li>
    <li><strong>Who held the pen.</strong> Was your child solving problems, or mostly watching?</li>
    <li><strong>Knowledge of the board.</strong> Could the tutor explain how your board sets this year's paper?</li>
    <li><strong>A plan for the month.</strong> What comes next, and how will you see progress?</li>
    <li><strong>A route that holds.</strong> Which road or bus, at what hour, every week, including in the monsoon?</li>
  </ol>
  <p>
    For an apartment building, give the tutor's name and your flat number to the guard before the demo; for a house,
    share the lane, a landmark such as the nearest tiniali, and a map pin. Keep lessons in a shared room with an adult at
    home. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> and
    guide to <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a> may help.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gw-calendar">When in the school year should tuition start?</h2>
  <p>Schools here follow different boards, but a board year usually falls into five stretches:</p>
  <ul>
    <li><strong>April and May:</strong> the CBSE session opens in April, with new books and time to mend last year's gaps; Bohag Bihu in mid-April is a natural pause.</li>
    <li><strong>June to September:</strong> regular weekly teaching alongside school and chapter tests through the rainy months, when an online fallback for wet evenings is worth agreeing.</li>
    <li><strong>October and November:</strong> Durga Puja and the festive weeks break the routine, so plan revision around them.</li>
    <li><strong>December to March:</strong> syllabus completion, pre-boards and sample papers, then the board papers; the first JEE Main session usually falls here too.</li>
    <li><strong>April onwards for seniors:</strong> the second JEE Main session, then JEE Advanced and NEET UG.</li>
  </ul>
  <p>
    State board and school calendars differ, so confirm every date from official notices. A spring start gives a full
    year; a winter start still pays, with the weight moved to papers and exam technique.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gw-start">How do you get started in Guwahati?</h2>
  <p>
    Tell us the class, board and subjects, your locality and nearest landmark, and the times that suit you. We send two
    or three matched tutors; you pick one for a free demo class and decide afterwards. Choose your locality from the
    zones above, browse <a href="{{ url('/tutors') }}">all tutors</a> or go straight to a
    <a href="{{ url('/demo-class') }}">free demo class</a>. Where no home tutor lives near enough yet, an online tutor
    from anywhere in India can begin straight away.
  </p>
  <p>
    Want the whole city on one page? Our <a href="{{ url('/blog/guwahati-tuition-guide') }}">Guwahati tuition guide</a>
    walks through all five zones and links every locality.
  </p>
  <p class="gw-note">
    Looking beyond Assam? See home tutors in <a href="{{ url('/city/kolkata') }}">Kolkata</a> and
    <a href="{{ url('/city/patna') }}">Patna</a>, or <a href="{{ url('/city') }}">cities across India</a>.
  </p>
  <p class="gw-note">
    Teaching in Guwahati? See <a href="{{ url('/tuition-jobs/guwahati') }}">home tuition jobs in Guwahati</a> and the
    localities where families are asking for tutors.
  </p>
  </section>

  </div>
</article>
