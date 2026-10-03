{{--
  Long-form guide for the Gurugram city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for parents choosing a
  home tutor in Gurugram (Gurgaon), not for search engines. Every figure is
  live from the database or a published NXTutors policy; local detail comes
  from config/zone_guides.php, database/seo-content/zones/gurugram.json and the
  Gurgaon guide posts. No school, society, developer or person is named.

  Area and zone links render only when that page exists and is live, so
  renaming or disabling an area in Super Admin, or a zone dropping below the
  ZonePages gate, cannot leave a broken link here. Subject, board and class
  pages are linked through $ggP, which checks the page's guide view exists.
--}}
@php
  $ggAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ggA = function (string $slug, string $label) use ($ggAreaSlugs) {
      return in_array($slug, $ggAreaSlugs, true)
          ? '<a href="' . e(url('/city/gurugram/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  // Zone pages (/city/gurugram/zone/{slug}) that pass the ZonePages gate.
  $ggZ = function (string $zone, string $label) {
      return \App\Support\ZonePages::isLive('gurugram', $zone)
          ? '<a href="' . e(\App\Support\ZonePages::url('gurugram', $zone)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $ggZoneAreas = fn (string $zone) => \App\Support\Zones::areasIn('gurugram', $zone)->count();
  // Gurgaon subject / board / class pages (config/subject_pages.php).
  $ggLive = \App\Support\SubjectLinks::live();
  $ggP = function (string $key, string $label) use ($ggLive) {
      return isset($ggLive[$key])
          ? '<a href="' . e(url('/' . $key)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $ggB = fn (string $slug, string $label) => '<a href="' . e(url('/blog/' . $slug)) . '">' . e($label) . '</a>';
  $ggTutors = (int) ($hubCounts['tutors'] ?? 0);
  $ggAreas = $allAreas->count();
@endphp

<article class="nx-guide gg-guide" aria-labelledby="ggGuideTitle">
  <h2 id="ggGuideTitle">Home tuition in Gurgaon (Gurugram): a complete guide for parents</h2>

  <p class="nx-guide__lede gg-lede">
    For a home tutor, Gurugram is several cities at once. The DLF phases and Sushant Lok are lanes of independent
    floors where the tutor rings the bell; Golf Course Road and its Extension are gated towers where the tutor waits
    at the gate for approval; Old Gurugram is plotted sectors where many tutors already live; and the newer sectors
    along the Southern Peripheral Road, in New Gurugram and on Dwarka Expressway are still filling up, with longer
    drives between societies. NXTutors is based in Sector 66, Gurugram, and this guide sets out how home tuition in
    Gurgaon works zone by zone: how we match a tutor, what each board asks of a student, what changes from class to
    class, how fees work, and how to judge a tutor before you commit.
  </p>

  <nav class="nx-guide__toc gg-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gg-how">How matching works</a> ·
    <a href="#gg-where">The nine zones</a> ·
    <a href="#gg-boards">Boards</a> ·
    <a href="#gg-classes">Class by class</a> ·
    <a href="#gg-jee-neet">JEE &amp; NEET</a> ·
    <a href="#gg-subjects">Subjects</a> ·
    <a href="#gg-mode">Home or online</a> ·
    <a href="#gg-fees">Fees</a> ·
    <a href="#gg-choose">The demo class</a> ·
    <a href="#gg-switch">Moving or switching boards</a> ·
    <a href="#gg-parents">Working parents</a> ·
    <a href="#gg-progress">Tracking progress</a> ·
    <a href="#gg-safety">Safety</a> ·
    <a href="#gg-calendar">The school year</a> ·
    <a href="#gg-tutors">For tutors</a> ·
    <a href="#gg-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gg-how">How does NXTutors match a home tutor in Gurgaon?</h2>
  <p>
    Most tutor directories hand you a long list and leave the sorting to you. We do the opposite. You tell us the
    student's class, board and subjects, your sector or society, the days and times that work, whether you want home
    or online sessions, and a budget. We then shortlist two or three tutors who fit all of it, not just the subject,
    and you see each tutor's fee before the first class.
  </p>
  <p>Five things decide whether a Gurugram shortlist works in practice:</p>
  <ul>
    <li><strong>Board and level, matched as a pair.</strong> A tutor who is excellent at CBSE Class 12 Physics is not automatically the right person for IB Physics at Higher Level, where the internal assessment carries real weight. We match on the board and level the student is sitting, not on the subject name alone.</li>
    <li><strong>The road between you, not the kilometres.</strong> A tutor ten minutes away along Golf Course Road can be forty minutes away in the evening office rush, and crossing Sohna Road at school-bus time is slow whatever the map says. We look at where the tutor sets out from at the time of your slot.</li>
    <li><strong>A slot the tutor can actually keep.</strong> Early-evening slots fill first everywhere in the city. If your preferred time is crowded, we say so and suggest tutors with a genuine opening, rather than one who will start cancelling in week three.</li>
    <li><strong>Your budget.</strong> Tutors set their own fees. We only shortlist tutors inside the range you give us, and each fee is on the shortlist before you book anything.</li>
    <li><strong>The way in.</strong> A tower with a visitor app, a township with several gates and a floor with no parking each need a different first visit. We pass on what the tutor needs to know so the demo does not start late at the gate.</li>
  </ul>
  <p>
    You then book a <strong>free demo class</strong> with the tutor you prefer. The demo is a normal lesson on the
    student's current topic, at home or online, so you see the tutor's actual teaching rather than a sales pitch. If it
    is not right, tell us and we set up the next tutor on the shortlist. Switching tutor later is free, and there is no
    long contract to get out of.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gg-where">Home tutors in Gurgaon, zone by zone</h2>
  <p>
    @if($ggTutors > 0)
      The tutor lists on this page draw on {{ number_format($ggTutors) }} tutor profiles in Gurugram,
    @else
      The tutor lists on this page draw on our Gurugram tutor profiles,
    @endif
    and @if($ggAreas > 0){{ number_format($ggAreas) }} sectors, societies and neighbourhoods @else each sector and society @endif
    have pages of their own. Every area page lists tutors in that locality first, then tutors who travel there, then
    tutors elsewhere in its zone and the city, and finally online tutors, with a label on each card saying why it is
    shown and sample profiles marked as such. For planning home lessons we group the city into nine zones, each with
    its own housing, traffic and board mix:
    {!! $ggZ('Golf Course Road', 'Golf Course Road and the DLF phases') !!},
    {!! $ggZ('MG Road & Cyber City', 'MG Road and Cyber City') !!},
    {!! $ggZ('Central Gurugram', 'Central Gurugram') !!},
    {!! $ggZ('Golf Course Extension Road', 'Golf Course Extension Road') !!},
    {!! $ggZ('Sohna Road', 'Sohna Road') !!},
    {!! $ggZ('Southern Peripheral Road', 'the Southern Peripheral Road') !!},
    {!! $ggZ('New Gurugram', 'New Gurugram') !!},
    {!! $ggZ('Dwarka Expressway', 'Dwarka Expressway') !!} and
    {!! $ggZ('Old Gurugram', 'Old Gurugram') !!}.
    The groupings are ours, drawn by sector and locality as families here describe them, not official boundaries.
  </p>

  <h3 id="gg-zone-gcr">Golf Course Road and the DLF phases</h3>
  <p>
    This zone has two kinds of home. The first is the DLF phases, from {!! $ggA('dlf-phase-1', 'DLF Phase 1') !!}
    through {!! $ggA('dlf-phase-2', 'Phase 2') !!}, {!! $ggA('dlf-phase-3', 'Phase 3') !!} and
    {!! $ggA('dlf-phase-4', 'Phase 4') !!} to {!! $ggA('dlf-phase-5', 'Phase 5') !!}, with
    {!! $ggA('sushant-lok-phase-1', 'Sushant Lok 1') !!} and Wazirabad close by, where most families live in
    independent floors on residential lanes: the tutor walks straight to the door but may struggle to park, so a
    two-wheeler often suits. The second is the run of gated towers on and just off the road itself, in
    {!! $ggA('sector-42-', 'Sector 42') !!}, {!! $ggA('sector-43', 'Sector 43') !!}, {!! $ggA('sector-53', 'Sector 53') !!}
    and {!! $ggA('sector-54', 'Sector 54') !!}, with {!! $ggA('sector-27', 'Sector 27') !!}, {!! $ggA('sector-28', 'Sector 28') !!},
    {!! $ggA('sector-52', 'Sector 52') !!} and {!! $ggA('ardee-city', 'Ardee City') !!} also in the zone, where parking is
    easy once inside but the tutor must be approved at the gate first.
  </p>
  <p>
    Requests from here are unusually specific: a parent is as likely to ask for IB Maths Analysis and Approaches at
    Higher Level, an IB Physics internal assessment plan or IGCSE Chemistry structured questions as for general Class 8
    Maths, and CBSE and ICSE families add board-year Maths and Science. Office traffic along the road and around the
    Rapid Metro builds from about six, so a class soon after the school bus drops your child home, or one that starts
    once the rush has eased, is far easier to keep. Because homes in the phases are close together, many tutors teach
    two or three students in the same phase on one evening.
    @if($ggZoneAreas('Golf Course Road') > 0) The zone page lists all {{ $ggZoneAreas('Golf Course Road') }} areas in it. @endif
    Read more in our {!! $ggB('gurgaon-golf-course-road-dlf-tuition-guide', 'guide to home tuition on Golf Course Road and in DLF') !!}.
  </p>

  <h3 id="gg-zone-mg">MG Road and Cyber City</h3>
  <p>
    Families in {!! $ggA('sector-24-', 'Sector 24') !!}, Sectors 25, 26 and 29, Sikanderpur, Nathupur, the Udyog Vihar
    side and the homes around Cyber City and {!! $ggA('mg-road-', 'MG Road') !!} live closer to the city's busiest
    office district than anyone else in Gurugram. Housing sits in pockets between office blocks. The Yellow Line stops
    along MG Road and the Rapid Metro serves Cyber City, which helps a tutor who travels by train, but the roads fill
    up twice a day, in both directions.
  </p>
  <p>
    That rhythm shapes the arrangement. A tutor who lives in the DLF phases, Sikanderpur or a neighbouring sector, or
    who is already teaching another child nearby that evening, tends to be the most punctual. Many parents here work
    in the same offices and get home late, so a common pattern is online classes on weekdays with the same tutor and
    a longer home session at the weekend when a parent is in. For board-year students, hold the weekday slot steady:
    rescheduling at short notice is hard when every road is busy at the same hour. See the
    {!! $ggZ('MG Road & Cyber City', 'MG Road and Cyber City zone page') !!} for every area and the tutors who cover it.
  </p>

  <h3 id="gg-zone-central">Central Gurugram: South City 1, Sushant Lok 2 and 3</h3>
  <p>
    Central Gurugram spans Sectors 30 to 33, 38 to 41 and 44 to 46, with {!! $ggA('south-city-1', 'South City 1') !!},
    {!! $ggA('sushant-lok-phase-2', 'Sushant Lok 2') !!} and {!! $ggA('sushant-lok-phase-3', 'Sushant Lok 3') !!},
    Kanhai and Jharsa, and the pockets around Millennium City Centre metro station. Much of it is HUDA plotted housing,
    such as the builder floors and independent houses of {!! $ggA('sector-40', 'Sector 40') !!}, next to mid-rise
    apartments in {!! $ggA('sector-39', 'Sector 39') !!}, older societies and rented homes; {!! $ggA('sector-31', 'Sector 31') !!},
    {!! $ggA('sector-38', 'Sector 38') !!}, {!! $ggA('sector-41', 'Sector 41') !!} and {!! $ggA('sector-44', 'Sector 44') !!}
    each have their own page.
  </p>
  <p>
    Its position is its advantage. Tutors from the DLF side, Sohna Road and Golf Course Extension Road can all reach
    these sectors without crossing the whole city, and the Yellow Line terminus lets a metro-riding tutor finish with a
    short auto ride. That bigger pool matters most in Classes 11 and 12, when a separate specialist for Physics,
    Chemistry or Maths often serves a student better than one tutor for everything. CBSE and ICSE make up most of the
    requests we see from these sectors. In houses and builder floors, agree where the class will sit: a quiet table in
    a common room, not a bedroom. More on the {!! $ggZ('Central Gurugram', 'Central Gurugram zone page') !!} and in our
    {!! $ggB('gurgaon-sohna-road-south-city-tuition-guide', 'Sohna Road and South City guide') !!}.
  </p>

  <h3 id="gg-zone-gcer">Golf Course Extension Road: Sectors 55 to 66</h3>
  <p>
    {!! $ggA('-golf-course-extn', 'Golf Course Extension Road') !!} runs from {!! $ggA('sector-55', 'Sector 55') !!},
    {!! $ggA('sector-56', '56') !!} and {!! $ggA('sector-57', '57') !!} at the northern end, past
    {!! $ggA('sector-58', 'Sector 58') !!}, {!! $ggA('sector-60', '60') !!}, {!! $ggA('sector-61', '61') !!} and
    {!! $ggA('-sector-62', '62') !!}, on to {!! $ggA('-sector-63', 'Sector 63') !!}, {!! $ggA('sector-65-', '65') !!} and
    {!! $ggA('-sector-66', '66') !!}, with a band of {!! $ggA('huda-plots', 'HUDA plots') !!} in between. Most families
    live in large gated societies, many built in recent years, where visitor apps, guard calls and a long walk from
    the gate to the tower are part of every arrival; some societies stop visitor entry after a set evening hour, which
    quietly decides the latest home slot you can book. NXTutors' own office is in Sector 66, on this road, so it is
    the zone we know most closely.
  </p>
  <p>
    Families here ask for CBSE, IB and IGCSE across all classes. Children often travel some way to school, so give them
    a break after the bus before the tutor arrives. Specialist requests, such as IB Maths at Higher Level or IGCSE
    Additional Maths, are where a tutor from further away earns the trip, often as weekend home sessions with online
    classes in between. Tutors living on this road or in the Sohna Road sectors reach most societies comfortably. See
    the {!! $ggZ('Golf Course Extension Road', 'Golf Course Extension Road zone page') !!} and our
    {!! $ggB('gurgaon-golf-course-extension-spr-tuition-guide', 'Golf Course Extension Road and SPR guide') !!}.
  </p>

  <h3 id="gg-zone-sohna">Sohna Road and South City 2</h3>
  <p>
    The Sohna Road zone covers Sectors 47 to 51 and 67 to 72, including {!! $ggA('south-city-2', 'South City 2') !!},
    Badshahpur and the large townships off the road such as {!! $ggA('nirvana-country', 'Nirvana Country') !!} and
    {!! $ggA('malibu-towne', 'Malibu Towne') !!}, where gated high-rise societies, villa and floor enclaves and plotted
    homes sit side by side. {!! $ggA('sector-47', 'Sector 47') !!}, {!! $ggA('sector-48', 'Sector 48') !!},
    {!! $ggA('sector-49-', 'Sector 49') !!}, {!! $ggA('sector-50', 'Sector 50') !!}, {!! $ggA('sector-67', 'Sector 67') !!},
    {!! $ggA('sector-69', 'Sector 69') !!} and {!! $ggA('sector-70', 'Sector 70') !!} each have their own page. Each kind of
    home needs a different first visit: a township guard who rings you, a society app that needs pre-approval, or a
    floor where parking is the only question. Townships with several gates should tell the tutor which one is nearest.
  </p>
  <p>
    One question decides most weekday arrangements: which side of Sohna Road does the tutor start from? The road is
    slow at school and office hours, and a tutor who has to cross it at the wrong moment will struggle to arrive on
    time, so it is often worth waiting a day or two for one on your side. Board years drive demand here, from Class 10
    Maths and Science to Class 12 Physics, Chemistry and Maths, plus JEE or NEET foundation from Class 9, usually
    alongside coaching. Weekend mornings are a good slot: the road is quieter and students are fresher. See the
    {!! $ggZ('Sohna Road', 'Sohna Road zone page') !!}.
  </p>

  <h3 id="gg-zone-spr">Southern Peripheral Road: Sectors 73 to 80</h3>
  <p>
    The Southern Peripheral Road belt, {!! $ggA('sector-73-', 'Sector 73') !!}, {!! $ggA('sector-74-', '74') !!},
    {!! $ggA('sector-76', '76') !!}, {!! $ggA('-sector-77', '77') !!}, {!! $ggA('sector-78-', '78') !!},
    {!! $ggA('sector-79', '79') !!} and the sectors between them, is a band of newer high-rise societies between Sohna
    Road, Golf Course Extension Road and New Gurugram. Some societies are long finished; others are still growing,
    with construction continuing around completed towers. Distances between societies are longer than in the older
    city, and young families with children on many different boards make up much of the population.
  </p>
  <p>
    The tutors who reach SPR most comfortably live on Golf Course Extension Road or in the Sohna Road sectors. Because
    fewer tutors live inside the belt, reliability counts for more than a perfect profile: a tutor who already teaches
    another child in your society will keep turning up through exam season. For Classes 11 and 12 many families settle
    on a hybrid plan, a home session each week for new topics and written work, and online classes for doubts and
    tests. Check how long the tutor's drive actually is at your slot time, not the distance on the map. The
    {!! $ggZ('Southern Peripheral Road', 'Southern Peripheral Road zone page') !!} lists every society page in the belt.
  </p>

  <h3 id="gg-zone-new">New Gurugram: Sectors 81 to 95</h3>
  <p>
    New Gurugram, off NH-48, covers {!! $ggA('-sector-81', 'Sector 81') !!}, {!! $ggA('sector-82', '82') !!},
    {!! $ggA('sector-83-', '83') !!}, {!! $ggA('sector-84-', '84') !!}, {!! $ggA('sector-85-', '85') !!},
    {!! $ggA('sector-86', '86') !!}, {!! $ggA('sector-88', '88') !!}, {!! $ggA('sector-89-', '89') !!},
    {!! $ggA('sector-90', '90') !!}, {!! $ggA('sector-92-', '92') !!} and {!! $ggA('-sector-93-', '93') !!}, and is made up
    largely of newer gated societies spread across a wide area. Drives between one society and the next are longer
    than anywhere in the older city, and in several sectors finished towers stand beside plots still under
    construction. Families come from many cities and school systems, so a single society can hold CBSE, ICSE, IB and
    IGCSE students of every age.
  </p>
  <p>
    Tutor supply is thinner here than in the central sectors, so the right person may live across the city. Two habits
    help: keep one regular slot, since a tutor coming a long way builds the rest of the week around your class, and be
    open to weekend mornings, when roads are quieter and tutors have fewer bookings. Where the nearest specialist is too
    far for weekday visits, online and hybrid classes let you choose on teaching quality rather than distance. More on
    the {!! $ggZ('New Gurugram', 'New Gurugram zone page') !!} and in our
    {!! $ggB('new-gurgaon-dwarka-expressway-tuition-guide', 'New Gurgaon and Dwarka Expressway guide') !!}.
  </p>

  <h3 id="gg-zone-dxp">Dwarka Expressway</h3>
  <p>
    The Dwarka Expressway zone runs from Sectors 34 to 37, including {!! $ggA('-sector-37c', 'Sector 37C') !!} and
    {!! $ggA('sector-37d', '37D') !!}, out along the expressway through Sectors 99 to 115, among them
    {!! $ggA('sector-99a', 'Sector 99A') !!}, {!! $ggA('sector-102-', '102') !!}, {!! $ggA('sector-103', '103') !!},
    {!! $ggA('sector-104-', '104') !!}, {!! $ggA('sector-106', '106') !!}, {!! $ggA('sector-108', '108') !!},
    {!! $ggA('sector-109-', '109') !!}, {!! $ggA('sector-110a', '110A') !!}, {!! $ggA('sector-112', '112') !!} and
    {!! $ggA('sector-113-', '113') !!}. It is mostly high-rise societies, many handed over recently, with Palam Vihar
    and the older sectors close by. Families often arrive from Delhi or another city part-way through a school year,
    so the first request is frequently about catching up with a new school or a new board.
  </p>
  <p>
    A move like that shows up as gaps: a Class 9 student arriving from a state board into CBSE may find the pace and the
    competency-based questions unfamiliar, and a younger child may have met topics in a different order. A tutor who
    has handled that kind of switch finds the missing chapters quickly, usually teaching at home first and then moving
    to a hybrid rhythm. Tutors living along the expressway or in Palam Vihar reach many societies; an IB or IGCSE
    specialist may be easier to find online. An online demo first, then a home demo, is a quick way to test two tutors
    in a week. See the {!! $ggZ('Dwarka Expressway', 'Dwarka Expressway zone page') !!}.
  </p>

  <h3 id="gg-zone-old">Old Gurugram and Palam Vihar: Sectors 1 to 23</h3>
  <p>
    Old Gurugram is the city's settled core: {!! $ggA('sector-4', 'Sector 4') !!}, {!! $ggA('sector-5', '5') !!},
    {!! $ggA('sector-7', '7') !!}, {!! $ggA('sector-9', '9') !!}, {!! $ggA('sector-10', '10') !!},
    {!! $ggA('sector-10a', '10A') !!}, {!! $ggA('sector-12', '12') !!}, {!! $ggA('sector-14', '14') !!},
    {!! $ggA('sector-15', '15') !!}, {!! $ggA('sector-17', '17') !!}, {!! $ggA('sector-21', '21') !!},
    {!! $ggA('sector-22', '22') !!}, {!! $ggA('sector-23', '23') !!} and {!! $ggA('sector-23a', '23A') !!}, with
    {!! $ggA('palam-vihar', 'Palam Vihar') !!}, Shivaji Nagar, New Colony, Laxman Vihar, Krishna Colony and the lanes
    around Sadar Bazar. Homes are mostly HUDA plots with independent houses and builder floors, plus Housing Board flats
    in the Basai Road cluster and apartments among the shops of Sector 21. Gurgaon railway station is close to Sectors 4
    and 7, and IFFCO Chowk on the Yellow Line is near Sectors 14, 15 and 17, although most tutors still arrive by road.
  </p>
  <p>
    Tutors are plentiful here, many of them teaching board classes in the same few sectors, and short trips between
    houses make two or three visits a week easy to hold. CBSE leads, ICSE follows, and Hindi, Sanskrit and Accountancy
    tutors, harder to find in the newer sectors, are easier to find here. Parents often ask one tutor to teach two
    siblings one after the other on the same visit, which works well up to Class 10. With plenty of local tutors,
    compare two demos before you decide. See the {!! $ggZ('Old Gurugram', 'Old Gurugram zone page') !!} and our
    {!! $ggB('old-gurgaon-palam-vihar-tuition-guide', 'Old Gurgaon and Palam Vihar guide') !!}.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gg-boards">Which boards do Gurgaon tutors teach?</h2>
  <p>
    Gurugram's schools follow four main curricula, and each asks different things of a student. We match tutors to
    the board, because experience with one does not always carry over to another. In most zones CBSE and ICSE lead the
    requests we see; on Golf Course Road and the Extension Road, IB and IGCSE make up a large share.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    CBSE rewards a close reading of the NCERT textbooks: board papers draw heavily on NCERT examples and in-text
    questions, and CBSE's 2026-27 curriculum puts about half of the Class 10 board questions in competency-based forms
    such as case-based, source-based and data-interpretation items. A good CBSE tutor works from NCERT first, then from
    previous years' papers and the board's sample papers, and trains the student to write answers in the step-by-step
    form the marking scheme credits. CBSE introduced two board examinations for Class 10 from 2026, the second optional
    for students who want to improve their performance, which changes how some families plan the final months. Our
    {!! $ggP('cbse-home-tutor-gurgaon', 'CBSE home tutors in Gurgaon') !!} page covers Classes 6 to 12, and the
    {!! $ggB('cbse-class-10-board-year-plan-gurgaon', 'CBSE Class 10 board-year plan for Gurgaon') !!} maps the year month by month. Families on the Haryana state board (HBSE, Bhiwani) can use the
    {!! $ggP('haryana-board-tutor-gurgaon', 'Haryana Board (HBSE) tutors in Gurgaon') !!} page for Classes 10 and 12.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    ICSE (Class 10) and ISC (Class 12), set by CISCE, cover more content per subject than CBSE and expect longer, more
    precise written answers, especially in English Language, English Literature, History and the sciences. Students
    often need help with the volume: planning revision so nothing is left unread, and practising timed answers. A
    tutor should know the prescribed Literature texts and the internal assessment requirements for each subject. See
    {!! $ggP('icse-home-tutor-gurgaon', 'ICSE and ISC home tutors in Gurgaon') !!},
    {!! $ggP('icse-maths-tutor-gurgaon', 'ICSE and ISC maths tutors') !!} and our
    {!! $ggB('icse-isc-maths-gurgaon-guide', 'guide to ICSE and ISC maths in Gurgaon') !!}.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB (PYP, MYP and Diploma)</h3>
  <p>
    Several Gurugram schools run the IB Diploma Programme, and some also offer the Primary and Middle Years Programmes.
    IB grades depend on internal assessments as well as final exams, and the core (Theory of Knowledge, the Extended
    Essay and CAS) runs through both Diploma years. In Maths the student must be on the right course, Analysis and
    Approaches or Applications and Interpretation, at SL or HL. We look for tutors who have taught the current syllabus
    and can guide an IA or Extended Essay without writing it for the student, which IB academic-integrity rules forbid.
    Start with {!! $ggP('ib-tutor-gurgaon', 'IB tutors in Gurgaon') !!},
    {!! $ggP('ib-maths-tutor-gurgaon', 'IB Maths tutors') !!}, {!! $ggP('ib-physics-tutor-gurgaon', 'IB Physics tutors') !!}
    or {!! $ggP('ib-igcse-chemistry-tutor-gurgaon', 'IB and IGCSE Chemistry tutors') !!}.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Cambridge and Edexcel IGCSE</h3>
  <p>
    IGCSE students in Gurugram usually sit their exams in Class 10, and some continue to AS and A Levels or into the
    IB. These papers reward exam technique: the command words, the difference between Core and Extended papers, and
    how marks are awarded in structured questions. Past papers and mark schemes from the same exam series are central,
    and a good tutor builds lessons around them early in the course. See
    {!! $ggP('igcse-tutor-gurgaon', 'IGCSE tutors in Gurgaon') !!}, {!! $ggP('igcse-maths-tutor-gurgaon', 'IGCSE Maths tutors') !!},
    {!! $ggP('igcse-physics-tutor-gurgaon', 'IGCSE Physics tutors') !!}, and our comparison of
    {!! $ggB('cambridge-vs-edexcel-igcse-gurgaon', 'Cambridge and Edexcel IGCSE') !!}.
  </p>
      </div>
    </div>
  <p>
    For families weighing the international boards, our
    {!! $ggB('ib-igcse-tutoring-gurgaon-parents-guide', 'parent\'s guide to IB and IGCSE tutoring in Gurgaon') !!} explains how
    to judge a tutor for these syllabuses.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gg-classes">What should a tutor focus on, class by class?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Nursery, KG and Classes 1 to 5</h3>
  <p>
    In the early years the aim is reading, number sense and good habits, not marks. A patient tutor who keeps sessions
    short, works with the school's reading scheme and lets the child do the talking matters more than a long list of
    qualifications. See {!! $ggP('nursery-kg-home-tutor-gurgaon', 'nursery and KG home tutors in Gurgaon') !!} and
    {!! $ggP('primary-home-tutor-gurgaon', 'home tutors for Classes 1 to 5') !!}; many families at this stage also ask for
    {!! $ggP('female-home-tutor-gurgaon', 'a female home tutor') !!}.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 6 to 8: foundations</h3>
  <p>
    The concepts that trip students up later, fractions and ratios, negative numbers, the start of algebra, reading a
    science diagram carefully, are all laid down here. One or two sessions a week with a tutor who finds the gaps and
    fills them is usually enough. For students heading towards JEE or NEET, this is also when a light foundation in
    problem-solving pays off, without the pressure of a coaching schedule. See
    {!! $ggP('class-6-8-home-tutor-gurgaon', 'home tutors for Classes 6, 7 and 8 in Gurgaon') !!}.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10: the first board years</h3>
  <p>
    Class 9 is when many Gurugram families first look for a tutor, because the jump in Maths and Science is steep and
    much of the Class 10 paper builds on it. A good plan covers Class 9 properly, then moves in Class 10 to a cycle of
    teaching, chapter tests and full-length papers from about November. Two to three sessions a week per core subject
    is typical in Class 10. See {!! $ggP('class-9-home-tutor-gurgaon', 'Class 9 home tutors in Gurgaon') !!} and
    {!! $ggP('class-10-home-tutor-gurgaon', 'Class 10 home tutors in Gurgaon') !!}.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12: streams and specialists</h3>
  <p>
    After Class 10 the subjects deepen sharply. In science, Physics and Maths in Class 11 are the most common reasons
    families ask us for help; in commerce, Accountancy and Economics. Class 11 matters more than many students expect,
    because Class 12 and the entrance exams build directly on it. We often suggest a separate specialist per subject at
    this stage. See {!! $ggP('class-11-home-tutor-gurgaon', 'Class 11 home tutors in Gurgaon') !!},
    {!! $ggP('class-12-home-tutor-gurgaon', 'Class 12 home tutors in Gurgaon') !!} and our guide to
    {!! $ggB('class-11-stream-choice-gurgaon', 'choosing a Class 11 stream') !!}.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gg-jee-neet">Can a home tutor help with JEE or NEET in Gurgaon?</h2>
  <p>
    Yes, usually as a partner to coaching rather than a replacement. Most JEE and NEET aspirants in Gurugram attend a
    coaching institute, and a one-to-one tutor adds most in three places:
  </p>
  <ul>
    <li><strong>Doubt clearing.</strong> Coaching batches move fast and large classes leave little time for individual questions. A tutor who works through the student's own coaching sheets and marked tests closes those gaps every week.</li>
    <li><strong>Board and entrance together.</strong> Class 12 students must score well in their boards and in the entrance exam. Because much of the NCERT content is common to both, one revision plan can serve the two.</li>
    <li><strong>One weak subject.</strong> Many students are strong in two subjects and struggling in the third, often Physics or Organic Chemistry. Focused hours on that subject can move a score more than extra hours spread across all three.</li>
  </ul>
  <p>
    The National Testing Agency conducts JEE (Main); in 2026 it was held in two sessions, in January and April, and it
    is also the qualifying test for JEE (Advanced). NEET (UG) is held once a year, and Biology carries half of its 720
    marks, so the NCERT Biology books need close reading. Patterns and dates are set afresh each year, so take them only
    from the current information bulletin. See {!! $ggP('jee-home-tutor-gurgaon', 'JEE home tutors in Gurgaon') !!} and
    {!! $ggP('neet-home-tutor-gurgaon', 'NEET home tutors in Gurgaon') !!}, and our guides to
    {!! $ggB('jee-preparation-gurgaon-coaching-or-home-tutor', 'JEE coaching or a home tutor') !!} and
    {!! $ggB('neet-preparation-gurgaon-coaching-or-home-tutor', 'NEET coaching or a home tutor') !!}. Younger students
    aiming at olympiads can start with our {!! $ggB('olympiad-preparation-gurgaon-imo-nso-rmo', 'olympiad preparation guide') !!}.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gg-subjects">Which subjects can a Gurgaon home tutor cover?</h2>
  <p>
    Tutors on NXTutors in Gurugram teach Mathematics, Physics, Chemistry, Biology, English, Computer Science,
    Accountancy, Economics and Business Studies, as well as Hindi and Sanskrit, and many take all subjects for primary
    classes. For each subject we look for tutors who have taught it at the student's level and board, which is why a
    profile lists specific classes and boards rather than a single subject. Gurgaon has its own page for each of the
    main subjects:
  </p>
  <ul>
    <li><strong>{!! $ggP('maths-home-tutor-gurgaon', 'Maths home tutors in Gurgaon') !!}.</strong> Maths is where one-to-one help changes results fastest: it is cumulative, so one shaky chapter (trigonometry in Class 10, calculus in Class 12) drags down everything after it.</li>
    <li><strong>{!! $ggP('science-home-tutor-gurgaon', 'Science home tutors in Gurgaon') !!}.</strong> Up to Class 10, one tutor usually covers Physics, Chemistry and Biology together, working from NCERT or the ICSE texts.</li>
    <li><strong>{!! $ggP('physics-home-tutor-gurgaon', 'Physics home tutors in Gurgaon') !!}.</strong> Physics needs a tutor who makes the student reason from first principles rather than memorise formula lists.</li>
    <li><strong>{!! $ggP('chemistry-home-tutor-gurgaon', 'Chemistry home tutors in Gurgaon') !!}.</strong> Chemistry splits into three parts that need different handling: Physical is numerical, Organic is mechanisms and patterns, and Inorganic is largely NCERT-based recall.</li>
    <li><strong>{!! $ggP('biology-home-tutor-gurgaon', 'Biology tutors in Gurgaon') !!}.</strong> Diagrams, precise terms and line-by-line NCERT reading, for boards and for NEET.</li>
    <li><strong>{!! $ggP('english-home-tutor-gurgaon', 'English home tutors in Gurgaon') !!}.</strong> Most often for ICSE and IB Literature, and for structured writing in the senior classes.</li>
    <li><strong>{!! $ggP('accountancy-home-tutor-gurgaon', 'Accountancy home tutors in Gurgaon') !!}</strong> and <strong>{!! $ggP('economics-home-tutor-gurgaon', 'Economics tutors in Gurgaon') !!}.</strong> The two core commerce subjects in Classes 11 and 12; the {!! $ggP('commerce-home-tutor-gurgaon', 'commerce home tutors in Gurgaon') !!} page covers the whole stream.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gg-mode">Home tuition or online tuition in Gurgaon?</h2>
  <p>
    Both work, and many Gurugram families use a mix. Home tuition suits younger students, students who find it hard to
    concentrate on a screen, and subjects where writing out working by hand matters, such as Maths and Chemistry
    numericals. Online tuition widens the choice of tutor (useful for IB Higher Level subjects, where specialists are
    few), removes travel time on congested roads, and makes late-evening or weekend-morning sessions easier. How the
    balance falls depends on the zone:
  </p>
  <ul>
    <li><strong>DLF phases, Old Gurugram and Central Gurugram:</strong> many tutors live close by, so home classes two or three times a week are easy to hold.</li>
    <li><strong>MG Road and Cyber City:</strong> weekday online classes with a weekend home session often suit parents who work late in the office district.</li>
    <li><strong>Golf Course Extension Road and Sohna Road:</strong> home classes before the society's visitor cut-off, with later doubt sessions online.</li>
    <li><strong>SPR, New Gurugram and Dwarka Expressway:</strong> hybrid plans, a weekly home visit plus online classes, keep a strong tutor practical where few live nearby.</li>
  </ul>
  <p>
    For online lessons, use a laptop or tablet rather than a phone, with a pen tablet or a camera angled at the
    notebook so the tutor can follow working. We can arrange home, online or hybrid tuition with the same tutor; see
    {!! $ggP('online-tutor-gurgaon', 'online tutors for Gurgaon students') !!}, and for children with long school-bus
    rides, our guide to a {!! $ggB('study-routine-long-commute-gurgaon', 'study routine around a long commute') !!}.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gg-fees">How much does a home tutor cost in Gurgaon?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set
    their own fees, and a few things tend to move a quote:
  </p>
  <ul>
    <li><strong>Class and board.</strong> Junior classes usually cost less than senior ones, and IB and IGCSE tutors who know the paper styles and internal assessments are fewer.</li>
    <li><strong>Specialist level.</strong> JEE Advanced-level Maths and Physics, IB HL subjects and IA or Extended Essay guidance sit at the upper end of the range, or above it.</li>
    <li><strong>Experience.</strong> A tutor with many board years behind them and a clear method usually charges more than someone newer, who may be very good for junior classes.</li>
    <li><strong>Travel and zone.</strong> A tutor's working time includes the drive. One crossing the city at peak hour may price that in; one from your own sector often will not.</li>
    <li><strong>Frequency.</strong> Some tutors quote differently for three or more sessions a week or a monthly arrangement; ask.</li>
  </ul>
  <p>
    You see each shortlisted tutor's fee before the demo, and nobody above your budget is suggested. Our
    {!! $ggB('home-tuition-fees-gurgaon', 'guide to home tuition fees in Gurgaon') !!} explains how to turn an hourly rate
    into a monthly figure and how to judge value, and the <a href="{{ url('/pricing-guide') }}">pricing guide</a> breaks
    fees down by class and subject.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gg-choose">How do you judge a tutor at the demo class?</h2>
  <p>A profile gets a tutor onto your list; the demo decides whether they stay. During and after it, ask yourself:</p>
  <ol>
    <li><strong>Did the tutor find out what the student already knows</strong> before starting to teach? A good first lesson begins with questions, not a lecture.</li>
    <li><strong>Did the student do most of the problem-solving</strong>, or mostly listen? Learning happens when the student works.</li>
    <li><strong>Can the tutor explain the same idea two ways?</strong> Ask them to re-explain something the student found hard.</li>
    <li><strong>Do they know the board's exam pattern?</strong> Ask how they would prepare the student for this year's paper.</li>
    <li><strong>Did they suggest a plan</strong>: what to cover in the next month, and how progress will be checked?</li>
    <li><strong>Will the commute hold?</strong> Ask where they will set out from on your class days, and at what time.</li>
    <li><strong>How did the student feel afterwards?</strong> Comfort with the tutor matters more than any qualification, particularly for younger children.</li>
  </ol>
  <p>
    Share a recent test or marked paper so the demo is on real work. If several answers are no, tell us and we set up a
    demo with the next tutor on the shortlist. Our {!! $ggB('choose-home-tutor-gurgaon-safety-checklist', 'checklist for choosing a home tutor in Gurgaon') !!},
    the <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> and
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">how to choose a board and stream</a> go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gg-switch">Moving to Gurgaon or switching boards</h2>
  <p>
    Many Gurugram families have moved for work, from other Indian cities or from abroad, and a mid-year move often
    means a change of board as well. The most common switches, and what helps with each:
  </p>
  <ul>
    <li><strong>From a state board or a CBSE school elsewhere into a Gurugram CBSE school.</strong> The syllabus is similar, but the pace and the share of competency-based questions may be higher. A few weeks of targeted work on the chapters the new school has already finished is usually enough.</li>
    <li><strong>From CBSE into IB or IGCSE.</strong> The hardest switch. The content is often familiar, but the assessment is not: extended written answers, investigations and, in the IB, internal assessments that count towards the final grade. A tutor who has taught both systems bridges the gap fastest, starting with how answers are marked. Our guide to {!! $ggB('switching-cbse-to-ib-or-igcse-gurgaon', 'switching from CBSE to IB or IGCSE') !!} goes through it.</li>
    <li><strong>From an international school abroad into an Indian board.</strong> Students often find the volume of content and the emphasis on exact textbook answers unfamiliar, and may need Hindi or a second language at the school's level. Here we usually suggest a subject tutor plus a separate language tutor.</li>
    <li><strong>Mid-year transfers in Class 9 or Class 11.</strong> These are the years where a missed term costs most, because Class 10 and Class 12 build directly on them. Tell us the old and new board or school so the shortlist fits the switch.</li>
  </ul>
  <p>
    Our {!! $ggB('moving-to-gurgaon-school-and-tutoring-guide', 'guide to moving to Gurgaon') !!} covers schools and tutoring
    for families arriving mid-year, and students planning university abroad can follow our
    {!! $ggB('study-abroad-from-gurgaon-sat-ap-ib-timeline', 'SAT, AP and IB timeline') !!}.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gg-parents">Tuition that fits around working parents</h2>
  <p>
    In many Gurugram households both parents work long hours, and school, coaching and activities already fill the
    child's week. Tuition only helps if it fits:
  </p>
  <ul>
    <li><strong>Fix the slot, then protect it.</strong> Two regular sessions a week at the same time get more done than four irregular ones; tutors plan better and students arrive ready.</li>
    <li><strong>Use weekend mornings.</strong> They are easier to fill with strong tutors than weekday evenings, the roads are quieter, and students are fresher.</li>
    <li><strong>Ask for a short written update.</strong> A two-line note after each session (what was covered, what homework was set, anything to watch) keeps parents informed without being home for every class.</li>
    <li><strong>Keep coaching and tuition from overlapping.</strong> Share the coaching timetable and test calendar with the tutor so sessions support coaching rather than repeat it.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gg-progress">How is progress tracked?</h2>
  <ol>
    <li><strong>A starting point.</strong> In the first two or three sessions the tutor works out which chapters are secure, which are shaky and which were never really learned. That becomes the plan.</li>
    <li><strong>Regular short tests.</strong> A chapter test every two to four weeks, marked the way the board marks, shows whether understanding is improving rather than just homework getting done.</li>
    <li><strong>School results in context.</strong> Unit tests and term exams are the clearest outside measure; a quick review with the tutor after each one keeps the plan honest.</li>
  </ol>
  <p>
    If after six to eight weeks you see no progress on any of these, talk to the tutor first, then to us. Sometimes the
    plan needs to change; sometimes a different tutor will do better. Either is normal, and switching is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gg-safety">Safety at home lessons</h2>
  <p>
    Tutors who join NXTutors go through an ID check: they confirm their phone or email with a one-time code and upload a
    government photo ID that our team reviews before the profile is marked Verified. It is not a police or background check, so
    <a href="{{ url('/how-we-verify-tutors') }}">read how we check tutors</a>, meet the tutor at the free demo, and follow
    the simple habits most Gurugram families already use: schedule sessions when an adult is at home, hold them in a
    shared room rather than a bedroom, and register the tutor on your society's visitor app or with the gate so entry
    is logged. In a plotted colony with no guard, share the house number and a map pin before the demo. If anything
    about a tutor's conduct concerns you, tell us straight away.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gg-calendar">Planning around the Gurugram school year</h2>
  <p>CBSE's session opens in April, and a board-exam year usually unfolds in five stretches:</p>
  <ul>
    <li><strong>April to June:</strong> the easiest time to start with a tutor. The new syllabus is just beginning, and the summer break gives time to fix gaps from last year.</li>
    <li><strong>July to September:</strong> steady teaching alongside school, with chapter tests; first-term exams fall around September in many schools.</li>
    <li><strong>October to December:</strong> finish the syllabus. Pre-board exams in many schools run from December into January.</li>
    <li><strong>January to March:</strong> full-length papers, revision and the board exams themselves; the first JEE (Main) session also falls here.</li>
    <li><strong>April to May:</strong> the second JEE (Main) session, then JEE (Advanced) and NEET (UG), while IB and Cambridge candidates sit their May examinations.</li>
  </ul>
  <p>
    Confirm every date from official notices. Starting in April or May gives a tutor a full year to work with; starting
    in November still helps, but the focus shifts from understanding to exam practice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gg-tutors">Are you a tutor in Gurgaon?</h2>
  <p>
    Families in every zone are asking for tutors, and the newer sectors on the Southern Peripheral Road, in New
    Gurugram and along Dwarka Expressway have the fewest tutors living nearby. See
    <a href="{{ url('/tuition-jobs/gurugram') }}">home tuition jobs in Gurgaon</a> for the areas where families need
    tutors now, and add the sectors you travel to so you appear on those area pages once your profile is approved.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gg-start">Getting started</h2>
  <p>
    Tell us the student's class, board and subjects, your sector or society, and the slots that suit you. We come back
    with two or three matched tutors, each with the fee shown; you choose one for a free demo class, and you decide
    after that. Start by picking your area in the list above or your zone page, browsing
    <a href="{{ url('/tutors') }}">all tutors</a>, or booking a <a href="{{ url('/demo-class') }}">free demo class</a>.
    Where no home tutor is near enough yet, an online tutor can start straight away.
  </p>
  <p class="gg-note">
    Looking outside Gurugram? We also have home tutors in <a href="{{ url('/city/delhi') }}">Delhi</a>,
    <a href="{{ url('/city/faridabad') }}">Faridabad</a> and <a href="{{ url('/city/noida') }}">Noida</a>, the
    <a href="{{ url('/city/delhi-ncr') }}">Delhi NCR</a> hub, and <a href="{{ url('/city') }}">cities across India</a>.
  </p>
  </section>

  </div>
</article>
