{{--
  Long-form guide for the Leh city page (included by city/show.blade.php when a
  file named after the city slug exists). Written for Leh parents choosing a home
  tutor: every figure is either live from the database or a published NXTutors
  policy; local facts come only from the cited research in
  database/seo-content/areas/leh-research.json, and the board description comes
  only from its top-level "board_facts" (CBSE's own SARAS affiliation list and
  regional-office page). No school, college, institute, hospital, society,
  developer or person is named. Kept strictly practical and educational: no
  politics, no security matters, no tourism; landmarks are used only to find a
  home, and winter appears only as timing advice.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $lehAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $lehA = function (string $slug, string $label) use ($lehAreaSlugs) {
      return in_array($slug, $lehAreaSlugs, true)
          ? '<a href="' . e(url('/city/leh/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $lehTutors = (int) ($hubCounts['tutors'] ?? 0);
  $lehAreas = $allAreas->count();
@endphp

<article class="nx-guide leh-guide" aria-labelledby="lehGuideTitle">
  <h2 id="lehGuideTitle">Home tuition in Leh: a parent's guide to the town and its Indus valley villages</h2>

  <p class="nx-guide__lede leh-lede">
    Leh is a small town by any measure, and much of daily life for
    families runs between the town and a string of villages along the Indus River rather than across a big urban grid.
    The bazaar and the old town sit at the centre, with Housing Colony, Changspa and Sankar around them;
    Choglamsar, Spituk, Saboo and Phyang lie to the south and west; and across or along the river are Stok, Chuchot,
    Shey and Thiksey. So when a Leh parent looks for a tutor, the honest questions are simple ones. Does anyone
    teaching nearby already pass your village? Can your house be found without a street number? And how will lessons
    carry on through the long, cold winter, when an online hour often does the work a visit did in summer?
  </p>
  <nav class="nx-guide__toc leh-toc" aria-label="In this guide">
    <strong>Inside this guide:</strong>
    <a href="#leh-match">Asking for a tutor</a> ·
    <a href="#leh-zones">Town and villages</a> ·
    <a href="#leh-boards">Boards</a> ·
    <a href="#leh-mode">Home, online or both</a> ·
    <a href="#leh-classes">Class by class</a> ·
    <a href="#leh-subjects">Subjects</a> ·
    <a href="#leh-entrance">JEE and NEET</a> ·
    <a href="#leh-fees">Fees</a> ·
    <a href="#leh-demo">The demo lesson</a> ·
    <a href="#leh-year">Planning the year</a> ·
    <a href="#leh-begin">Getting going</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="leh-match">What happens when a Leh family asks for a tutor?</h2>
  <p>
    You send one request. It should say which class your child is in and which board the school follows, which
    subjects need help, the village or colony you live in together with a landmark a newcomer would recognise, the
    hours your child is free after school, and whether you want lessons at home, online or a mix. A rough monthly
    budget helps too. We come back with two or three tutors who fit what you described. Each tutor's fee is visible to
    you before any lesson takes place, and the first class with the tutor you pick is a free demo.
  </p>
  <p>Four things shape a good Leh shortlist more than anything else:</p>
  <ul>
    <li><strong>Which side of the valley.</strong> Town, the Choglamsar and Spituk side, or the villages across and up the Indus: a tutor who already teaches on your side can hold a weekly slot far more reliably.</li>
    <li><strong>Directions, not numbers.</strong> Many homes are known by house name, lane or cluster rather than a number, so the landmark you give matters as much as the locality.</li>
    <li><strong>The board and the class.</strong> Schools here are largely CBSE-affiliated, but Class 7 help and Class 12 Physics are different jobs, so both are matched.</li>
    <li><strong>A winter plan.</strong> Say up front whether you would like the same tutor to move online in the coldest months.</li>
  </ul>
  <p>
    Use the demo as a normal lesson on whatever chapter your child is doing this week. If it does not click, another
    tutor from the shortlist can try instead, and switching tutor at any later stage is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="leh-zones">The town and its villages, in three zones</h2>
  <p>
    @if($lehTutors > 0)
      Our Leh list currently holds {{ number_format($lehTutors) }} tutor profiles,
    @else
      Our Leh list is still small and grows as tutors join,
    @endif
    and @if($lehAreas > 0){{ number_format($lehAreas) }} Leh localities @else each Leh locality we cover @endif
    have a page of their own. On those pages, tutors living in the locality appear first, then the rest of its zone,
    then the wider Leh area, and online tutors after that. We should be plain about scale: several of the places below
    are villages next to the town rather than town neighbourhoods, and the pool of home tutors is far smaller than in a
    large city. Where nobody suitable lives close by, an online tutor is the realistic answer, and we would rather say
    so than promise a visit that cannot be kept.
  </p>
  <p>
    The three groups are our own planning zones, not official divisions:
    <a href="#leh-town">Leh Town Centre</a>, <a href="#leh-west">Choglamsar, Spituk and the west</a>, and
    <a href="#leh-east">the Indus valley to the south and east</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="leh-town">Leh Town Centre: bazaar, old town and the hillside villages beside them</h3>
  <p>
    {!! $lehA('main-bazaar-old-town', 'Main Bazaar and the old town') !!} form the commercial centre. Behind the bazaar
    the old town climbs the slope towards the palace, and the stretch called Manikhang, between the bazaar and the old
    Stalam path, is marked by four large stupas. Family homes here share space with shops, a district library and
    government offices. {!! $lehA('housing-colony', 'Housing Colony') !!} is a residential colony with its own main
    market and a community hall that most families use as meeting points; a government degree college and a
    CBSE-affiliated government school also have their address here.
  </p>
  <p>
    On the town's edges, {!! $lehA('changspa', 'Changspa') !!} (also spelt Chanspa, with Sheldan named in some
    addresses) is a hillside of homes, lanes and fields rising towards the white stupa on the hilltop facing the
    palace, and {!! $lehA('sankar', 'Sankar') !!}, listed in census records as Sankar Yourtung, is a quiet village
    of houses and fields just north-west of town, around a small monastery.
  </p>
  <p>
    Practically, this is the zone with the shortest hops between homes, so a tutor based in town can often fit two or
    three families into one evening. Old-town lanes are narrow and the last part is usually on foot; Changspa and
    Sankar are uphill, so tutors come by two-wheeler or car and need to know where to stop. The bazaar is at its
    busiest in the summer months, which makes early-morning or later-evening slots easier to hold there.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="leh-west">Choglamsar, Spituk and the west: a census town, a road junction and long villages</h3>
  <p>
    {!! $lehA('choglamsar', 'Choglamsar') !!}, also written Chuglamsar, is the largest place in this zone: a census
    town on the bank of the Indus. It is where the Leh–Manali Highway, part of
    NH3, leaves the Indus valley and turns north for Leh, and offices such as the electricity division and a
    polytechnic sit beside homes and horticultural nurseries. {!! $lehA('spituk', 'Spituk') !!}, another census town,
    lies south-west of town and is mostly family houses.
  </p>
  <p>
    {!! $lehA('saboo', 'Saboo') !!}, which shares a postal area with Choglamsar and includes Saboothang, is a village of
    homes and fields. Further west, {!! $lehA('phyang', 'Phyang') !!} is one of the largest inhabited villages in
    Ladakh, stretched along a south-facing valley in eight clusters: Phulungs, Phyang, Tsakma, Changmachan, Gaon,
    Thangnak, Chusgo and Mankhang. Its government high school is CBSE-affiliated.
  </p>
  <p>
    What makes this zone workable for home lessons is its road pattern. Two circular roads link Choglamsar with Leh,
    one through Spituk and one through Saboo, so a tutor can plan a loop rather than going back through the bazaar.
    Phyang is the exception: it sits on its own to the west, families should name their cluster, and weekend or
    late-afternoon slots, or online lessons, are more common there. The highway is busiest in summer, so avoid the
    heaviest hours.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="leh-east">The Indus valley to the south and east: Stok, Chuchot, Shey and Thiksey</h3>
  <p>
    Across the river, {!! $lehA('stok', 'Stok') !!} lies on the southern bank of the Indus in Chushot tehsil,
    below the Stok Chu valley and around its palace. {!! $lehA('chuchot', 'Chuchot') !!} is
    really three villages: Chuchot Gongma on the riverbank, Chuchot Yokma, and Chuchot Shamma along the Hemis road.
    Since 2019 a suspension bridge over the Indus has joined Choglamsar to Chuchot Yokma and Stok, so tutors living in
    Choglamsar can cross directly instead of going round by road.
  </p>
  <p>
    Upriver to the east, {!! $lehA('shey', 'Shey') !!} is a village of traditional houses among fields on the road
    towards Hemis, and {!! $lehA('thiksey', 'Thiksey') !!} is the
    headquarters of its own block and tehsil, so its offices serve the villages around it. Government high schools in
    Stok, Thiksey and Chuchot appear on CBSE's affiliation list.
  </p>
  <p>
    Homes here are spread out and reached at the doorstep, usually with room to park, so the route is the main thing to
    settle. A tutor who already teaches in Shey or Choglamsar can sometimes add Thiksey or Stok on the same trip.
    Weekend slots suit tutors travelling from town, and a weekday online hour fills the gaps, particularly in winter.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="leh-boards">Which boards do Leh students follow?</h2>
  <p>
    For Leh, the board to plan around is CBSE. We say that on the basis of CBSE's own affiliation list, not
    guesswork, and we keep the claim to what that list shows.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>CBSE, the board on CBSE's own list</h3>
  <p>
    CBSE's SARAS affiliation list has a separate entry for Ladakh, listing affiliated schools in Leh and Kargil
    districts. Most of the Leh district schools on it are government high and higher secondary schools, including ones
    in Leh town, Housing Colony, Stok, Phyang, Thiksey and Chuchot, with private schools alongside. The list shows
    affiliation at secondary and senior secondary level; it does not set out the pattern for primary and middle
    classes, so ask your school. CBSE's regional office at Mohali covers the UT of Ladakh. Work from NCERT books and
    CBSE sample papers. See <a href="{{ url('/cbse-home-tutor-leh') }}">CBSE home tutors in Leh</a>.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    A family moving to Leh mid-course from a CISCE school, or keeping a child on ICSE or ISC, will usually find that
    support online. The syllabi are broad and English includes set texts, so a tutor's job is to plan revision rounds
    early and keep project deadlines in view.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and Cambridge IGCSE</h3>
  <p>
    These are almost always taught online from Leh. A tutor can explain and advise on IB coursework such as the
    Internal Assessment, but never write it; IGCSE students gain most from timed past papers checked against the
    official mark schemes.
  </p>
      </div>
    </div>
  <p>
    Ladakh's School Education Department manages the government schools in both districts. For anything about your
    own child's exams, rely on the school and on cbse.gov.in rather than on any tutor's memory.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="leh-mode">Home, online or both: what works in Leh?</h2>
  <p>
    In a town this size, the online option is no poor substitute; for many families it is the thing that makes regular
    tuition possible at all. Still, a tutor at the table has real advantages for younger children and for anyone whose
    written working needs watching line by line. The practical way to decide:
  </p>
  <ul>
    <li><strong>A tutor on your side of the valley exists:</strong> keep most lessons at home and agree in advance which ones move online.</li>
    <li><strong>You live in a far cluster of Phyang, Thiksey or Chuchot:</strong> a weekend home lesson plus one or two online hours on weekdays is a common shape.</li>
    <li><strong>The subject is specialist:</strong> Class 12 Physics or Maths at speed, ISC, IB or IGCSE, or entrance work is usually easier to arrange online from a tutor anywhere in India.</li>
    <li><strong>It is the coldest stretch of the year:</strong> winters run from late November to early March, so plan a midday home slot or switch that period online with the same tutor.</li>
  </ul>
  <p>
    For online lessons, a laptop or tablet, a pen-tablet or a phone propped over the notebook, and a quiet room are
    enough. See <a href="{{ url('/online-tutor-leh') }}">online tutors for Leh</a> and our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">comparison of home and online tutoring</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="leh-classes">What should a tutor work on at each stage?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Up to Class 8</h3>
  <p>
    Reading with understanding, written English and solid number sense come first. A child who learns in English but
    speaks another language at home often needs patient work on how to write an answer, not just on content. Gaps in
    fractions or tables are cheap to close now and expensive later.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    The board year is where most Leh families first ask for help, usually in Maths and Science. Starting in Class 9,
    when algebra and science chapters step up, gives a tutor time to rebuild basics. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 Maths preparation plan</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 Science notes</a> follow the CBSE chapters.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    Senior secondary is where a single generalist tutor tends to run out of road. Physics, Chemistry and Maths each
    reward a subject specialist, and that specialist may well be online. For Class 12, see our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Physics strategies</a> and
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Organic and Inorganic Chemistry guide</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="leh-subjects">Which subjects can you find a tutor for?</h2>
  <p>
    Maths and Science lead requests from the middle classes, and Science splits into Physics, Chemistry and Biology in
    Classes 11 and 12. Tutors also cover English, Hindi, Social Science, Computer Science and commerce subjects, and
    for young children one tutor often takes every subject. Leh has its own pages for
    <a href="{{ url('/maths-home-tutor-leh') }}">maths</a>,
    <a href="{{ url('/science-home-tutor-leh') }}">science</a>,
    <a href="{{ url('/physics-home-tutor-leh') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-leh') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-leh') }}">biology</a> and
    <a href="{{ url('/english-home-tutor-leh') }}">English</a> tutors.
  </p>
  <p>
    A few habits help in every subject. In Maths, trace a weak score back to the one topic, often from a year or two
    earlier, that is holding the rest up. In Physics, insist the idea is clear before the formula is used. In Biology,
    NCERT wording matters, so diagrams and definitions are practised exactly. In English, regular writing with
    feedback beats grammar drills; our <a href="{{ url('/blog/spoken-english-for-students') }}">spoken English
    guide</a> has ideas for practice at home.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="leh-entrance">Can a tutor support JEE or NEET preparation from Leh?</h2>
  <p>
    Yes, provided the tutor's role is defined. Many students preparing from Leh study through online courses and
    self-study, and a tutor is most useful as the person who keeps that work honest:
  </p>
  <ul>
    <li><strong>Board and entrance together.</strong> The NCERT chapters of Classes 11 and 12 are the base for the CBSE paper and for both entrance exams.</li>
    <li><strong>Mistakes before new chapters.</strong> Each week, go through what went wrong in the last test first.</li>
    <li><strong>Hours where they hurt.</strong> Put extra time into the weakest subject instead of spreading it evenly.</li>
    <li><strong>Online for the hard end.</strong> JEE Advanced-level problems and NEET Biology revision are where an online specialist earns their fee.</li>
  </ul>
  <p>
    NTA conducts JEE Main in two sessions early in the year, and those who qualify can sit JEE Advanced; NEET UG is held
    once a year, and Biology carries half its marks, which is why NCERT Biology deserves close reading. Take dates only
    from each year's official bulletin. Useful reading: our
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE Maths</a> and
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE Physics</a> topic plans, the
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NCERT-first approach to NEET Biology</a>, and
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching or home tutor for JEE</a>,
    written for Gurugram but general in its advice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="leh-fees">How much does a tutor charge in Leh?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor
    sets their own fee, and what moves it is fairly predictable:
  </p>
  <ul>
    <li><strong>Class level.</strong> Senior secondary teaching usually costs more than help in the junior classes.</li>
    <li><strong>Purpose.</strong> Entrance preparation sits above school-level support in the same subject.</li>
    <li><strong>Travel.</strong> A tutor coming from town to an outlying village may account for the journey; one in your own village may not.</li>
    <li><strong>Mode and length.</strong> Online hours save the tutor's travel, and fewer, longer sessions can go further than many short ones.</li>
  </ul>
  <p>
    You see the fee of every tutor on your shortlist before the demo, and nobody above the budget you gave is put
    forward. The <a href="{{ url('/pricing-guide') }}">pricing guide</a> sets out fees by class and subject, and
    <a href="{{ url('/blog/home-tuition-fees-leh') }}">home tuition fees in Leh</a> lists the questions to ask before
    you agree a fee.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="leh-demo">How do you judge a tutor at the free demo?</h2>
  <p>A profile gets a tutor through the door; the demo is where you decide. During it, notice whether the tutor:</p>
  <ol>
    <li>asks about school tests and any online course before teaching anything;</li>
    <li>finds out what your child already knows rather than starting from page one;</li>
    <li>explains in a way your child can follow and repeat back;</li>
    <li>knows how CBSE frames questions for this class, without guesswork;</li>
    <li>has your child writing and solving, not just listening;</li>
    <li>can commit to the same slot through the winter, at home or online.</li>
  </ol>
  <p>
    Before the demo, send the house name, the lane or cluster, a landmark and a map pin; we ask a parent to be at home
    for the demo, and lessons go well in a shared room. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo checklist for parents</a> and
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">guide to choosing a board and stream</a> go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="leh-year">How should tuition fit around the Leh year?</h2>
  <p>
    School calendars differ, so check yours, but the weather sets a clear rhythm for tutoring here:
  </p>
  <ul>
    <li><strong>Spring, as the cold eases:</strong> a sensible time to start, with room to close last year's gaps before the pace picks up.</li>
    <li><strong>Summer:</strong> the easiest months for home visits; the bazaar and highway are busier, so fix slots outside the heaviest hours.</li>
    <li><strong>Autumn:</strong> settle the routine for the board year and agree the winter plan before it arrives.</li>
    <li><strong>Winter, late November to early March:</strong> many families take the long winter break as a chance for steady online work, or shift home lessons to the warmest part of the day.</li>
    <li><strong>Exam season:</strong> full CBSE papers under timed conditions, then JEE Main, JEE Advanced and NEET UG for those taking them.</li>
  </ul>
  <p>Take exam dates from official notices only. An early start helps most, but a late start spent on past papers is still worth making.</p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="leh-begin">How do you get started with a tutor in Leh?</h2>
  <p>
    Tell us the class, board, subjects, your village or colony with a landmark, and when your child is free. You will
    get two or three names, try one in a free demo and decide afterwards. Choose your locality below, browse
    <a href="{{ url('/tutors') }}">tutor profiles</a> or book a <a href="{{ url('/demo-class') }}">free demo
    class</a>; if no nearby tutor fits yet, an online tutor can start straight away. Tutors who join go through an ID
    check, explained on <a href="{{ url('/how-we-verify-tutors') }}">how we check tutors</a>.
  </p>
  <p>
    The <a href="{{ url('/blog/leh-home-tuition-guide') }}">Leh home tuition guide</a> walks through every locality,
    from the old town and Changspa to Phyang, Stok and Thiksey.
  </p>
  <p class="leh-note">
    Other cities in the north: home tutors in <a href="{{ url('/city/srinagar') }}">Srinagar</a>,
    <a href="{{ url('/city/jammu') }}">Jammu</a>, <a href="{{ url('/city/chandigarh') }}">Chandigarh</a>,
    <a href="{{ url('/city/delhi') }}">Delhi</a> and <a href="{{ url('/city') }}">all cities</a>.
  </p>
  <p class="leh-note">
    Teaching in Leh? See <a href="{{ url('/tuition-jobs/leh') }}">tuition jobs in Leh</a> and the localities where
    families are asking.
  </p>
  </section>

  </div>
</article>
