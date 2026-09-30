{{--
  Long-form guide for the Pune city page (included by city/show.blade.php
  when a file named after the city slug exists). It covers Pune and
  Pimpri-Chinchwad together. Every figure is either live from the database or a
  published NXTutors policy, local facts come from the cited research in
  database/seo-content/areas/pune-research.json, and no school, college,
  society, township developer, hospital or mall is named.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $pnAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pnA = function (string $slug, string $label) use ($pnAreaSlugs) {
      return in_array($slug, $pnAreaSlugs, true)
          ? '<a href="' . e(url('/city/pune/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $pnTutors = (int) ($hubCounts['tutors'] ?? 0);
  $pnAreas = $allAreas->count();
@endphp

<article class="nx-guide pn-guide" aria-labelledby="pnGuideTitle">
  <h2 id="pnGuideTitle">Home tuition in Pune and Pimpri-Chinchwad: a parent's guide from Nigdi to Katraj</h2>

  <p class="nx-guide__lede pn-lede">
    Pune is really two cities that grew towards each other. One is the old Pune of the peths, Deccan and the
    cantonment, built along the Mula and Mutha rivers. The other is Pimpri-Chinchwad to the north-west, an industrial
    town with its own municipal corporation since 1982. Around both, villages such as Baner, Wakad, Kharadi and Wagholi
    have become suburbs of towers and gated societies within a generation, pulled outwards by the IT offices at
    Hinjewadi and along Nagar Road. For a family choosing a home tutor, what matters is
    which bank of the river you live on, how near a metro station is, and when your main road's office traffic eases.
  </p>
  <nav class="nx-guide__toc pn-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pn-how">How matching works</a> ·
    <a href="#pn-zones">The seven zones</a> ·
    <a href="#pn-boards">Boards</a> ·
    <a href="#pn-classes">Classes</a> ·
    <a href="#pn-subjects">Subjects</a> ·
    <a href="#pn-jee-neet">JEE &amp; NEET</a> ·
    <a href="#pn-mode">Home or online</a> ·
    <a href="#pn-fees">Fees</a> ·
    <a href="#pn-choose">The demo class</a> ·
    <a href="#pn-calendar">The school year</a> ·
    <a href="#pn-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pn-how">How does NXTutors find a tutor for a Pune family?</h2>
  <p>
    Send one request with the class and board, the subjects, your locality and society, the free weekdays, home or
    online, and a budget. You get two or three tutors chosen for it, each with a fee shown up front, and the first
    class with the one you pick is a free demo. In Pune, four things shape the shortlist:
  </p>
  <ul>
    <li><strong>Pune side or Pimpri-Chinchwad side?</strong> We look first at tutors already teaching on your side of the Mula.</li>
    <li><strong>Is a station close enough?</strong> The Purple Line (PCMC to Swargate) and the Aqua Line (Vanaz to Ramwadi) cross at District Court. A home within an auto ride of either can draw on tutors from much further away.</li>
    <li><strong>Township, society or doorstep?</strong> In Magarpatta, Hinjewadi or Wakad the tutor needs a gate entry and a tower number; in the older lanes of Erandwane, Camp or Bibwewadi they usually ring at the door.</li>
    <li><strong>Which paper, precisely?</strong> A State Board SSC student and an IB Diploma student need different people, so board and class are matched together.</li>
  </ul>
  <p>
    The demo is an ordinary lesson on this week's chapter. If the fit is wrong, another tutor is set up, and changing
    tutor later is free as well.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn-zones">Pune, zone by zone</h2>
  <p>
    @if($pnTutors > 0)
      The tutors shown on this page come from {{ number_format($pnTutors) }} tutor profiles,
    @else
      The tutors shown on this page come from our tutor profiles,
    @endif
    and @if($pnAreas > 0){{ number_format($pnAreas) }} Pune and Pimpri-Chinchwad localities @else every locality we cover @endif
    have a page of their own, listing tutors in that locality first, then the rest of its zone, then online tutors.
    We split the metropolitan area into seven zones, west first and then clockwise:
    <a href="#pn-kothrud">Kothrud, Karve Nagar and Deccan</a>, <a href="#pn-aundh">Aundh, Baner and Pashan</a>,
    <a href="#pn-wakad">Wakad, Hinjewadi and Pimpri-Chinchwad</a>, <a href="#pn-viman">Viman Nagar, Kalyani Nagar and
    Kharadi</a>, <a href="#pn-koregaon">Koregaon Park, Camp and Wanowrie</a>, <a href="#pn-hadapsar">Hadapsar, Kondhwa
    and NIBM</a> and <a href="#pn-katraj">Katraj, Bibwewadi and Sinhagad Road</a>. The groupings are ours, not
    ward boundaries.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="pn-kothrud">Kothrud, Karve Nagar and Deccan: the settled west bank of the Mutha</h3>
  <p>
    {!! $pnA('kothrud', 'Kothrud') !!} lies between the Vetal Tekdi hills and the Mutha, a suburb of apartment
    buildings and housing societies where many older blocks have been redeveloped into taller ones; Paud Road runs west
    through it from Paud Phata. {!! $pnA('karve-nagar', 'Karve Nagar') !!}, once known as Hingne, has quiet lanes of
    flats and builder floors off the main road to Warje. {!! $pnA('erandwane', 'Erandwane') !!} takes in Prabhat Road
    and keeps older bungalows on tree-lined lanes among its apartments.
    {!! $pnA('deccan-gymkhana', 'Deccan Gymkhana') !!}, named after the sports club at its centre, mixes bungalows and
    newer blocks with cafés and bookshops. {!! $pnA('shivajinagar', 'Shivajinagar') !!}, once the village of
    Bhamburde, holds the district courts, government offices and theatres beside residential lanes, and
    {!! $pnA('model-colony', 'Model Colony') !!} is a planned mid-century pocket within it, with wide internal roads and
    plenty of trees. {!! $pnA('warje', 'Warje') !!} was a farming village until about 1970, joined the city in 2001 and
    is now mostly gated complexes along the river.
  </p>
  <p>
    For a travelling tutor this is the easiest zone in the city. The Aqua Line's first stretch opened on 6 March 2022
    from Vanaz through Anand Nagar and Paud Phata, a station called Ideal Colony until December 2025, and on 1 August
    2023 the line was carried on through Deccan Gymkhana to District Court. Shivaji Nagar station on the Purple Line
    opened that same day. Karve Nagar and
    Warje have no station, so tutors either finish from Vanaz by auto or ride a two-wheeler from Kothrud. Bungalows in
    Erandwane and Model Colony mean a knock on the door; the newer complexes of Kothrud and Warje keep a gate register.
    Evening classes go better clear of the Paud Road rush.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="pn-aundh">Aundh, Baner and Pashan: towers along the western bypass</h3>
  <p>
    The Katraj–Dehu Road bypass, part of the Mumbai–Bengaluru highway, strings together suburbs that were villages
    within living memory. {!! $pnA('aundh', 'Aundh') !!} grew into an upmarket residential area from the mid-1990s,
    stretching along University Road to the bridge over the Mula. {!! $pnA('baner', 'Baner') !!}, farmland until the IT boom of the 2000s,
    now pairs large office buildings with high-rise societies below Baner Hill. {!! $pnA('balewadi', 'Balewadi') !!}
    joined the municipal corporation in 1997 along with twenty-two other villages; its High Street area and a sports
    complex that hosted the 1994 National Games sit among gated towers. {!! $pnA('pashan', 'Pashan') !!}, whose name
    comes from the word for stone, has a lake on the Ramnadi stream known for migratory birds. {!! $pnA('sus', 'Sus') !!} sits in a valley between hills and grew quickly once the city limits
    widened in the late 1990s, and {!! $pnA('bavdhan', 'Bavdhan') !!}, made up of Budruk and Khurd, lies beside the
    busy Chandani Chowk junction.
  </p>
  <p>
    No metro station in this zone was open to passengers at the time of writing. Line 3, an elevated line from Maan
    near Hinjewadi to Shivajinagar, is being built with stations planned at Balewadi High Street, Balewadi Phata, Baner
    Gaon, Baner Pashan Link Road and Aundh. Its first section, Maan to Balewadi, has safety approval, but the line had not opened to passengers at the
    time of writing, and the Aqua Line's extension from Vanaz towards Chandani Chowk is still under construction. So tutors here travel
    by road, most often on a two-wheeler from the next suburb along. Almost every family lives behind a society gate,
    and Baner Road and University Road slow right down at the end of the office day.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="pn-wakad">Wakad, Hinjewadi and Pimpri-Chinchwad: the IT park and the industrial town</h3>
  <p>
    North of the Mula this page takes in Pimpri-Chinchwad and the IT suburbs on its southern edge.
    {!! $pnA('hinjewadi', 'Hinjewadi') !!}, also spelt Hinjawadi, is defined by its large IT park, developed in three
    phases, with apartment townships and gated societies around it. {!! $pnA('wakad', 'Wakad') !!}, next door, has
    become a large area of apartment complexes home to many IT families. {!! $pnA('pimple-saudagar', 'Pimple Saudagar') !!}
    mixes established and newer societies, and {!! $pnA('pimple-nilakh', 'Pimple Nilakh') !!} sits on the north bank of
    the river, facing Baner and Aundh. {!! $pnA('pimpri', 'Pimpri') !!}, where industrial growth began in 1954, still
    keeps factories, markets and homes side by side. {!! $pnA('chinchwad', 'Chinchwad') !!}, on the Pavana river, runs
    from an old village core to newer townships, and {!! $pnA('nigdi', 'Nigdi') !!} is largely Pradhikaran, the planned
    numbered sectors laid out by the new-town development authority that has its headquarters there.
  </p>
  <p>
    The Purple Line's first section opened on 6 March 2022 from PCMC Bhavan to Phugewadi and reached Swargate on
    29 September 2024, so Pimpri now has a direct metro run to Shivajinagar and the old city. An extension north
    through Chinchwad and Akurdi to Nigdi and Bhakti Shakti is under construction, and Line 3's planned stops in
    Hinjewadi and at Wakad Chowk were not open to passengers at the time of writing. Suburban trains on the
    Pune–Lonavala line call at Pimpri, Chinchwad and Akurdi. Traffic
    bound for Hinjewadi makes office hours slow near the bypass, so early-evening or weekend slots are the easiest to keep. Row
    houses in the Nigdi sectors are doorstep visits; the townships everywhere else want a gate entry first.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="pn-viman">Viman Nagar, Kalyani Nagar and Kharadi: the Nagar Road corridor</h3>
  <p>
    East Pune, north of the river, grew along the road to Ahmednagar. {!! $pnA('viman-nagar', 'Viman Nagar') !!},
    whose name means airport town in Marathi and which was once known as Dunkirk Lines, lies just south of the airport
    at Lohegaon and mixes societies and a few row-house pockets with offices and restaurants.
    {!! $pnA('kalyani-nagar', 'Kalyani Nagar') !!}, across the Mula-Mutha from Koregaon Park, was once almost wholly
    residential and now adds offices along its main roads. {!! $pnA('yerawada', 'Yerawada') !!} is large and densely
    built, with homes grouped in separate pockets between bigger campuses.
    {!! $pnA('vadgaon-sheri', 'Vadgaon Sheri') !!} lies between Nagar Road and the river, and its central part is now
    widely called New Kalyani Nagar. {!! $pnA('kharadi', 'Kharadi') !!} was a riverside village until IT offices began
    arriving around 2005, and {!! $pnA('wagholi', 'Wagholi') !!}, on the highway at the north-eastern edge, was added
    to the municipal corporation in 2021.
  </p>
  <p>
    The Aqua Line's eastern section opened on 6 March 2024 with stations at Bund Garden, Kalyani Nagar and Ramwadi, the
    elevated terminus beside Viman Nagar; Yerwada station followed on 21 August 2024 after its entry and exit points
    were revised. A tutor anywhere between Vanaz and Ramwadi reaches these three in one ride. Kharadi and Wagholi have no station yet; an extension from Ramwadi towards Wagholi has central government
    approval, but it is not yet built. Nagar Road, which begins at Yerawada, is the spine, and Airport Road
    branches off it; both fill up at the start and end of the working day, so begin classes after that wave. Large
    societies may limit visitor parking, which is worth settling before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="pn-koregaon">Koregaon Park, Camp and Wanowrie: the cantonment and its bungalow lanes</h3>
  <p>
    {!! $pnA('camp', 'Camp') !!} is the everyday name for
    the Pune Cantonment, established in 1817 to house troops, planned over the villages of Mali, Munjeri, Wanowrie and
    Ghorpuri, and still run by its cantonment board rather than the municipal corporation. Homes range from apartments to older villas and builder floors.
    {!! $pnA('koregaon-park', 'Koregaon Park') !!} was laid out in the early 1920s on Ghorpuri land as Koregaon Road
    Estate, and the numbered lanes between North Main Road and South Main Road still hold British-era bungalows under
    old trees beside newer apartment buildings. {!! $pnA('wanowrie', 'Wanowrie') !!}, one of those four cantonment
    villages, is now a settled residential area towards Hadapsar, and {!! $pnA('salunke-vihar', 'Salunke Vihar') !!},
    also written Salunkhe Vihar, is a quieter pocket where many retired defence personnel have made their homes.
  </p>
  <p>
    Bund Garden station on the Aqua Line, open since 6 March 2024, serves Koregaon Park, and the Pune Railway Station
    metro stop, open since 1 August 2023, serves the Camp side along with Pune Junction itself. Wanowrie and Salunke
    Vihar have no station nearby, so tutors come by two-wheeler, bus or auto. Access rules vary more here than anywhere
    else in Pune: a bungalow means a gate and easy parking in the lane, an apartment building keeps a visitor log, and
    army areas have entry rules of their own that should be confirmed before the first visit. Shopping crowds in Camp
    peak on weekend evenings and restaurants fill lanes six and seven of Koregaon Park at night, so weekday
    after-school slots are usually smoother.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="pn-hadapsar">Hadapsar, Kondhwa and NIBM: townships of the south-east</h3>
  <p>
    {!! $pnA('hadapsar', 'Hadapsar') !!}, on Solapur
    Road, part of National Highway 65, was the site of the Battle of Poona on 25 October 1802 and grew fast after 1990
    as industry and then IT offices arrived; homes range from the old village and Gadital to large gated townships.
    {!! $pnA('magarpatta', 'Magarpatta') !!}, a 182-hectare gated township inside Hadapsar developed through land
    pooling from 2000, has apartment clusters, a few villa clusters and about a third of its area under green cover.
    {!! $pnA('kondhwa', 'Kondhwa') !!}, made up of Kondhwa Budruk and Kondhwa Khurd, holds everything from older
    cooperative societies to high-rise townships with clubhouses and quiet rows of villas.
    {!! $pnA('nibm-road', 'NIBM Road') !!} takes its name from the main road between Kondhwa and Wanowrie, and {!! $pnA('undri', 'Undri') !!}, beyond it, is
    newer and quieter, with mid-segment societies.
  </p>
  <p>
    There is no metro in this zone. Hadapsar railway station runs local trains towards Daund, and the Gadital bus station links Hadapsar with city and state buses; for Kondhwa and NIBM
    Road the nearest metro stop is Swargate, at the southern end of the Purple Line. Most tutors arrive on a
    two-wheeler, so the strongest match usually lives in the zone. Magarpatta and the other
    townships control entry, so send the tutor's name, cluster and tower to the gate before the demo. NIBM Road and
    Katraj to Kondhwa Road carry heavy school and office traffic, and a slot just after the school rush tends to work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="pn-katraj">Katraj, Bibwewadi and Sinhagad Road: south Pune towards the hills</h3>
  <p>
    South Pune climbs from Swargate towards the ghats. {!! $pnA('katraj', 'Katraj') !!} lies at the foot of the Katraj
    Ghat on Satara Road, National Highway 48, and is known for its Peshwa-era lake, which once supplied water to the
    city, and the zoo park beside it; independent houses, cooperative societies and newer complexes ring the old
    village. {!! $pnA('bibwewadi', 'Bibwewadi') !!} is an established area off Satara Road, near Market Yard, of
    independent houses, builder floors and flats. {!! $pnA('dhankawadi', 'Dhankawadi') !!} was a small village until it
    joined the city in 1995 and has been built up since 2000. {!! $pnA('sinhagad-road', 'Sinhagad Road') !!}
    names both the long road that leaves the city near Sarasbaug and ends at Atkarwadi at the base of Sinhagad fort,
    and the string of neighbourhoods along it, from Vitthalwadi and Anand Nagar to Vadgaon Budruk and Dhayari.
  </p>
  <p>
    Since 29 September 2024 the Purple Line has run underground to Swargate. An underground extension south to Katraj, approved in August 2024 but not yet built, has planned stations at Market Yard, Bibwewadi, Padmavati, Balaji Nagar and Katraj. Until then, tutors
    ride to Swargate and finish by auto, or come by two-wheeler. Sinhagad Road has no
    metro, though a long flyover now carries traffic over its busiest stretch. Houses and builder floors mean the tutor
    comes straight up; complexes keep a visitor book. Satara Road and Sinhagad Road are heavy at school and office
    hours, so fix a start time either side of the rush.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn-boards">Which boards do Pune tutors teach?</h2>
  <p>
    One Pune building can hold students of all four systems below, and we treat each as a separate skill.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Maharashtra State Board (SSC and HSC)</h3>
  <p>
    The Maharashtra State Board of Secondary and Higher Secondary Education holds the SSC examination at the end of
    Class 10 and the HSC examination at the end of Class 12, and many students across Pune and Pimpri-Chinchwad sit
    them. Classes 11 and 12 are usually spent in a junior college. We look for tutors who teach
    from the state's prescribed textbooks and know the board's own question papers, and we take any detail of pattern
    or timetable only from the board's official website.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    CBSE schools are common across the city and its IT suburbs. Their papers grow out of the NCERT textbooks, and a
    good share of questions asks the student to apply an idea to a case or an unfamiliar setting. The right tutor finishes the NCERT
    exercises, then works through CBSE's sample papers and marking schemes, insisting on full working.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    CISCE runs the ICSE at Class 10 and the ISC at Class 12. Both cover a wide syllabus and reward precise, well-written
    long answers, and English includes prescribed literature. The tutor's real job is pacing: every chapter
    revisited before the board year, timed writing, and an eye on project work.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and Cambridge IGCSE</h3>
  <p>
    A smaller group of Pune students take the IB Diploma or Cambridge IGCSE. IB Mathematics comes as Analysis and
    Approaches or Applications and Interpretation, each at Standard or Higher Level, and every IB subject has
    internally assessed work that a tutor may talk through but must never write. For IGCSE, the tier and the command
    words decide how an answer is built.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn-classes">What should tuition focus on at each stage?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Classes 1 to 8</h3>
  <p>
    The goal in these years is habit as much as syllabus: reading carefully, quick mental sums, confidence with
    fractions and early algebra, and neat written work. One or two lessons a week with a patient tutor at the dining
    table usually does more than daily drilling.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    Whether the exam at the end is the SSC, CBSE or ICSE, Class 10 leans heavily on what was learned in Class 9, so
    gaps are cheapest to fix a year early. A workable board-year rhythm is chapter, test, correction, then complete
    papers from winter. Our <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 Maths plan</a>,
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 Science notes</a> and
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 Maths guide</a> lay out the approach.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    In junior college or senior school each subject turns specialist, and one tutor per subject usually beats a single
    all-rounder. See our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 Physics strategies</a> and the guide to
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">calculus and algebra in Class 12</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn-subjects">Which subjects can a Pune tutor cover?</h2>
  <p>
    Tutors on NXTutors teach Mathematics, Physics, Chemistry, Biology, English, Computer Science, Accountancy,
    Economics, Business Studies, Hindi and Marathi, and many take every subject for primary children. Families who
    have moved to Pune from other states can also ask for help with Marathi reading and writing. Pune has dedicated pages for
    <a href="{{ url('/maths-home-tutor-pune') }}">maths home tutors</a>,
    <a href="{{ url('/science-home-tutor-pune') }}">science home tutors</a>,
    <a href="{{ url('/physics-home-tutor-pune') }}">physics home tutors</a> and
    <a href="{{ url('/chemistry-home-tutor-pune') }}">chemistry home tutors</a>. Senior Chemistry is really three
    subjects, numerical Physical, mechanism-driven Organic and memory-heavy Inorganic, which our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Class 12 Organic and Inorganic Chemistry
    guide</a> separates out.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn-jee-neet">Can a home tutor help with JEE, NEET or MHT-CET in Pune?</h2>
  <p>
    Yes, alongside a coaching class rather than instead of one. A tutor earns their fee in three ways:
  </p>
  <ul>
    <li><strong>Clearing the pile.</strong> One sitting a week to go through unsolved coaching sheets and every wrong answer from the last test.</li>
    <li><strong>One revision for two exams.</strong> The Class 12 NCERT books underpin both the board papers and the entrance tests, so a single plan can serve both.</li>
    <li><strong>Lifting the weakest subject.</strong> Extra hours go where marks are being lost, not spread evenly.</li>
  </ul>
  <p>
    NTA conducts JEE Main in two sessions in the first half of the year, and qualifiers can go on to JEE Advanced. NEET
    UG is held once a year, with Biology carrying half its marks, so the NCERT Biology books repay slow reading.
    Maharashtra also has its own state entrance test, MHT-CET, which many State Board students take; use only the State
    CET Cell's notices for its syllabus and dates, and NTA's bulletin for JEE and NEET. For subject plans, see
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE Maths topic by topic</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE Physics</a>,
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE Chemistry</a> and
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET Biology, NCERT first</a>. Our look at
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching versus a home tutor for JEE</a>
    was written for Gurugram, but the trade-offs hold in Pune.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn-mode">Home or online tuition in Pune?</h2>
  <p>
    A tutor in the room helps younger children and subjects where the working counts, such as Maths and Chemistry
    numericals; online lessons open up tutors across India for IB, IGCSE and specialist papers. Pune's geography
    settles much of the balance:
  </p>
  <ul>
    <li><strong>Two metro lines, one crossing.</strong> The Purple and Aqua lines meet at District Court, so a family near any station can reach tutors along both corridors, from Pimpri to Swargate and from Vanaz to Ramwadi.</li>
    <li><strong>Line 3 is not yet running.</strong> The Hinjewadi–Shivajinagar line had not opened to passengers at the time of writing, so the western IT suburbs still rely on road travel and nearby tutors.</li>
    <li><strong>Rivers and bridges.</strong> The Mula and Mula-Mutha divide the metropolitan area, so a tutor from your own bank is often steadier.</li>
    <li><strong>The monsoon.</strong> On the heaviest rain days an online lesson keeps the week's rhythm; agree that fallback with the tutor at the start of June.</li>
  </ul>
  <p>
    Many families pair a weekly home lesson with a short online doubt session. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">comparison of home and online tutors</a> sets out when each
    works better.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn-fees">How much does a home tutor cost in Pune?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor
    sets their own fee, and in Pune three things usually explain the difference between two quotes:
  </p>
  <ul>
    <li><strong>The class and the board.</strong> Primary lessons tend to cost less than junior college, IB or IGCSE work.</li>
    <li><strong>How specialised the teaching is.</strong> JEE Advanced problem solving, IB Higher Level and guidance on internal assessment sit at the top.</li>
    <li><strong>The distance travelled.</strong> A tutor coming from Pimpri-Chinchwad to Kondhwa, or across the river at rush hour, may build that into the fee; one from your own zone usually does not.</li>
  </ul>
  <p>
    Every shortlisted fee is visible before the demo, and nobody above your budget is suggested. The
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> breaks fees down by class and subject, and our post on
    <a href="{{ url('/blog/home-tuition-fees-pune') }}">home tuition fees in Pune</a> looks at the local picture.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn-choose">What should you watch for in the demo class?</h2>
  <p>A profile earns a tutor a place on your list; the first lesson decides whether they keep it. Watch for five things:</p>
  <ol>
    <li><strong>Questions before teaching.</strong> Did the tutor check what your child already knows before starting?</li>
    <li><strong>Who did the work.</strong> Was the student solving and writing, or mostly listening?</li>
    <li><strong>Knowledge of the paper.</strong> Could the tutor explain how your board's exam is set this year, SSC, CBSE, ICSE or IB?</li>
    <li><strong>A plan for the month.</strong> What will be covered, and how will you see whether it is working?</li>
    <li><strong>A route that lasts.</strong> Which road or station, and does that time still work in the monsoon and at exam time?</li>
  </ol>
  <p>
    For a gated society, give the guard the tutor's name, tower and flat before the demo; for a house, share a map
    pin. Keep lessons in a shared room with
    an adult at home. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for
    parents</a> and guide to <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a>
    may help.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn-calendar">When in the school year should tuition start?</h2>
  <p>
    CBSE's session opens in April, many State Board schools begin in June, and international schools keep their own
    dates. A board year usually runs like this:
  </p>
  <ul>
    <li><strong>April to June:</strong> the easiest start, with new books and the summer break to close old gaps.</li>
    <li><strong>June to September:</strong> the rains and the first term; steady lessons and chapter tests.</li>
    <li><strong>October to December:</strong> the Diwali break, finishing the syllabus, and preliminary or pre-board exams in many schools.</li>
    <li><strong>January to March:</strong> sample papers, then board exams; the first JEE Main session usually falls here as well.</li>
    <li><strong>April to May:</strong> the second JEE Main session, then JEE Advanced, NEET UG and MHT-CET, while IB and Cambridge candidates sit their May papers.</li>
  </ul>
  <p>
    Check every date against that year's official notice. A winter start still pays, with the weight on papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn-start">How do you get started in Pune?</h2>
  <p>
    Send the class, board, subjects, locality and times that suit you; we come back with two or three matched tutors
    and you pick one for a free demo class. Choose your locality from
    the zones above, browse <a href="{{ url('/tutors') }}">all tutors</a> or book a
    <a href="{{ url('/demo-class') }}">free demo class</a> directly. If no home tutor is close enough to you yet, an
    online tutor from anywhere in India can start at once.
  </p>
  <p>
    Planning for one side of the city? Our local guides cover
    <a href="{{ url('/blog/west-pune-tuition-guide') }}">west Pune and Pimpri-Chinchwad</a>,
    <a href="{{ url('/blog/east-pune-tuition-guide') }}">east Pune</a> and
    <a href="{{ url('/blog/south-pune-tuition-guide') }}">south Pune</a>.
  </p>
  <p class="pn-note">
    Elsewhere in Maharashtra, see home tutors in <a href="{{ url('/city/mumbai') }}">Mumbai</a> and
    <a href="{{ url('/city/nagpur') }}">Nagpur</a>, or browse <a href="{{ url('/city') }}">cities across India</a>.
  </p>
  <p class="pn-note">
    Teaching in Pune? See <a href="{{ url('/tuition-jobs/pune') }}">home tuition jobs in Pune</a> and the localities
    where families are asking for tutors.
  </p>
  </section>

  </div>
</article>
