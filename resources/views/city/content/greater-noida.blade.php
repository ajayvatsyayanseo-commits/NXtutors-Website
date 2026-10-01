{{--
  Long-form guide for the Greater Noida city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for parents choosing a
  home tutor in Greater Noida, not for search engines: every figure here is
  either live from the database or a published NXTutors policy, local facts come
  from the cited research in database/seo-content/areas/greater-noida-research.json,
  and no school, society or developer is named.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $ggAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ggA = function (string $slug, string $label) use ($ggAreaSlugs) {
      return in_array($slug, $ggAreaSlugs, true)
          ? '<a href="' . e(url('/city/greater-noida/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $ggTutors = (int) ($hubCounts['tutors'] ?? 0);
  $ggAreas = $allAreas->count();
@endphp

<article class="nx-guide gn-guide" aria-labelledby="gnGuideTitle">
  <h2 id="gnGuideTitle">Home tuition in Greater Noida: a guide for parents, from Noida Extension to the Greek-letter sectors</h2>

  <p class="nx-guide__lede gn-lede">
    Greater Noida is really two places that share a name. Greater Noida West, which most people still call Noida
    Extension, is a belt of high-rise societies where almost every family lives behind a gate. The older city to the
    south-east is laid out in sectors named after Greek letters, Alpha, Beta, Gamma and onwards, and most of those are
    plotted: independent houses and builder floors on authority plots, where a tutor rings the doorbell. Which of the
    two you live in changes how a tutor reaches you and which slots they can keep. This guide covers how NXTutors
    matches tutors here, each part of the city, boards, subjects, fees and the free demo class.
  </p>
  <nav class="nx-guide__toc gn-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gn-how">How matching works</a> ·
    <a href="#gn-zones">Zone by zone</a> ·
    <a href="#gn-boards">Boards</a> ·
    <a href="#gn-classes">Classes</a> ·
    <a href="#gn-subjects">Subjects</a> ·
    <a href="#gn-jee-neet">JEE &amp; NEET</a> ·
    <a href="#gn-mode">Home or online</a> ·
    <a href="#gn-fees">Fees</a> ·
    <a href="#gn-choose">Choosing a tutor</a> ·
    <a href="#gn-calendar">The school year</a> ·
    <a href="#gn-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gn-how">How does NXTutors find a home tutor in Greater Noida?</h2>
  <p>
    You send us one request: the student's class and board, the subjects, your sector or society, the days and times
    you have in mind, whether you want lessons at home, online or both, and roughly what you want to spend. From that we
    put together a shortlist of two or three tutors. Each tutor's fee is shown before anything is booked, and the first
    class with the tutor you pick is a free demo.
  </p>
  <p>
    Greater Noida is spread out and its two halves work differently, so a few questions carry extra weight:
  </p>
  <ul>
    <li><strong>Which side of the city are you on?</strong> A tutor who teaches every evening in the Noida Extension towers may never travel to the Omicron or Xu sectors. We start with tutors who already work on your side.</li>
    <li><strong>How will the tutor get there?</strong> The Aqua Line serves the older sectors around Pari Chowk, Alpha and Delta, but there is no working metro station in Greater Noida West, and inside several plotted sectors autos and buses are scarce. We ask how each tutor travels, because a tutor with a two-wheeler can reach homes that a tutor relying on public transport cannot.</li>
    <li><strong>What is the student sitting?</strong> We match on board and class together. CBSE Class 9 Science and ISC Physics are different jobs.</li>
    <li><strong>What fits the budget?</strong> Only tutors inside the range you give us go on the shortlist.</li>
  </ul>
  <p>
    The demo is a real lesson on the current topic. If it does not click, we line up the next tutor, and switching
    tutor later is free too.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gn-zones">Greater Noida zone by zone</h2>
  <p>
    @if($ggTutors > 0)
      This page draws on {{ number_format($ggTutors) }} tutor profiles
    @else
      This page draws on our tutor profiles
    @endif
    for Greater Noida, and @if($ggAreas > 0){{ number_format($ggAreas) }} sectors and localities @else each sector and locality @endif
    have a page of their own, listing the nearest tutors first: those in the sector, then those in the same zone, then
    online tutors. You can pick your sector from the list further up. For planning home classes we group the city into
    six zones: <a href="#gn-west">Greater Noida West</a>, <a href="#gn-alpha">Alpha–Delta and Pari Chowk</a>,
    <a href="#gn-pi">Pi, Sigma and Sectors 36–37</a>, <a href="#gn-omega">Omega, Chi and Phi</a>,
    <a href="#gn-zeta">Zeta and Eta</a> and <a href="#gn-omicron">Omicron, Mu and Xu</a>. The lines between them are
    our own and approximate, drawn around housing type and the routes tutors actually use.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="gn-west">Greater Noida West: the Noida Extension tower belt</h3>
  <p>
    Greater Noida West sits inside the Greater Noida authority's notified area but feels like a separate city. It
    takes in Sectors 1, 2, 3, 4, 10, 12, 16B and 16C, Techzone and Knowledge Park 5, along with old villages such as
    Shahberi, Bisrakh, Patwari and Haibatpur, and it is reached from Noida Sector 121 by a road across the Hindon.
    Housing is overwhelmingly high-rise societies. {!! $ggA('sector-16c', 'Sector 16C') !!} is almost entirely
    apartment towers, {!! $ggA('techzone-4', 'Techzone 4') !!} has become one of the densest apartment belts despite
    its name, and {!! $ggA('sector-10', 'Sector 10') !!} and {!! $ggA('sector-12', 'Sector 12') !!} are mostly three-
    and four-bedroom flats. {!! $ggA('sector-4', 'Sector 4') !!} is where much of daily life meets, with a large mall and
    plenty of shops around Gaur Chowk. The exceptions are village pockets such as {!! $ggA('shahberi', 'Shahberi') !!}, known
    for its furniture market, where builder floors are common, and newer sectors such as
    {!! $ggA('sector-3', 'Sector 3') !!} and {!! $ggA('sector-2', 'Sector 2') !!}, still filling in.
  </p>
  <p>
    Density is the big advantage: a tutor already teaching one student in a township can often take another on the
    same evening, which makes weekday slots easier to find. The drawbacks are the gate and the roads. Nearly every visit starts at a society entrance, so the tutor
    needs approval on the visitor app or register before the first class. There is no working metro station in the
    belt; the nearest is Noida Sector 51 on the Aqua Line, and a planned extension ending in Sector 4 near Kisan Chowk
    is still only a plan. Gaur Chowk, also called Char Murti or Kisan Chowk, is the busiest crossroad in Noida
    Extension, with an underpass tendered for it, and Ek Murti Chowk is also being reshaped. Evening classes near
    either junction need slack built in.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="gn-alpha">Alpha–Delta and Pari Chowk: the original plotted core</h3>
  <p>
    Greater Noida's sectors take their names from the Greek alphabet, and Alpha, Beta and Gamma are the oldest. This
    zone is that first core plus the Delta sectors and the plotted sectors around Pari Chowk, where the
    Noida–Greater Noida Expressway ends. It is house country: {!! $ggA('alpha-1', 'Alpha 1') !!} is laid out in blocks
    A to E of houses and builder floors with a busy commercial strip, {!! $ggA('beta-1', 'Beta 1') !!} is mostly
    two- and three-bedroom independent houses, and {!! $ggA('beta-2', 'Beta 2') !!}, which residents call the heart of
    Greater Noida, is fully occupied with houses and floors, many let to college students.
    {!! $ggA('gamma-1', 'Gamma 1') !!} holds Jagat Farm, one of the city's busiest markets, and
    {!! $ggA('gamma-2', 'Gamma 2') !!}, {!! $ggA('delta-1', 'Delta 1') !!} and {!! $ggA('delta-2', 'Delta 2') !!} are
    settled sectors of houses on authority plots. {!! $ggA('sector-p-4', 'Sector P-4') !!}, listed as the Builders Area,
    is the exception, with group-housing towers.
  </p>
  <p>
    For a tutor this is the easiest part of Greater Noida to reach. The Aqua Line runs through it, with stations at
    Pari Chowk, ALPHA 1 (in Alpha 1), DELTA 1 (in Delta 1) and GNIDA Office, and residents rate autos and
    e-rickshaws well, so a tutor can ride the metro from Noida and finish by e-rickshaw. In the plotted sectors there
    is no gate to clear. The slow spots are Pari Chowk at peak hours and the evening crowds around Jagat Farm; a tutor
    from the Alpha, Beta, Gamma or Delta sectors avoids both.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="gn-pi">Pi, Sigma and Sectors 36–37: plots, villas and newer societies</h3>
  <p>
    South of the core, towards Kasna, the sectors open out. {!! $ggA('sector-36', 'Sector 36') !!}, in the Rho zone
    near Pari Chowk, is mainly privately owned independent houses on wide roads, and plots make up the great majority
    of what is listed for sale in {!! $ggA('sector-37', 'Sector 37') !!}. {!! $ggA('swarn-nagri', 'Swarn Nagri') !!}
    mixes houses, builder floors and villas with a few apartment blocks, and residents speak well of its parks and
    lighting. The Sigma sectors are more varied still: {!! $ggA('sigma-2', 'Sigma 2') !!} is residential plots in gated
    colonies where families build their own homes, {!! $ggA('sigma-1', 'Sigma 1') !!} is still largely plots, and
    {!! $ggA('sigma-3', 'Sigma 3') !!} now has premium towers going up among its villas. The Pi sectors lean the other
    way, with apartment societies making up most homes in {!! $ggA('pi-1', 'Pi 1') !!} and
    {!! $ggA('pi-2', 'Pi 2') !!} alongside villa enclaves and plotted colonies.
  </p>
  <p>
    In a plotted street the tutor comes to the door; in the Pi societies and the new Sigma 3 projects, add them to the
    visitor list first.
    Metro access is less direct than in the core. DELTA 1 is the usual station, with ALPHA 1, Pari Chowk and GNIDA
    Office serving some pockets, and the last leg is by auto or e-rickshaw. The Surajpur–Kasna road slows down at
    busy hours, and parking is tight in parts of Sector 37, so a tutor on a two-wheeler
    from Pi, Sigma or Kasna is usually the easiest to schedule. In newer streets, send a map pin before the first visit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="gn-omega">Omega, Chi and Phi: the Pari Chowk and Yamuna Expressway side</h3>
  <p>
    This zone lies south-west of Pari Chowk, where both the Noida–Greater Noida Expressway and the Yamuna Expressway
    meet, and it mixes housing types more than any other. {!! $ggA('omega-1', 'Omega 1') !!}, which also holds the
    Yamuna Expressway authority's head office, is largely gated communities with bungalows, villas and flats.
    {!! $ggA('omega-2', 'Omega 2') !!} sits right beside Pari Chowk and is mostly a large integrated township.
    {!! $ggA('chi-2', 'Chi 2') !!} is gated group housing, including a large township built for Army families, and
    {!! $ggA('chi-5', 'Chi 5') !!}, on the Noida Sector 150 border, is high-rise societies.
    {!! $ggA('chi-3', 'Chi 3') !!} and {!! $ggA('phi-3', 'Phi 3') !!} are mostly independent houses on authority
    plots, and {!! $ggA('phi-2', 'Phi 2') !!} is mid-sized ready-to-move societies, one of the more affordable
    addresses in the belt.
  </p>
  <p>
    Pari Chowk and Knowledge Park II are the Aqua Line stations this zone uses, and Omega 2 is one of the easiest
    sectors for a tutor coming by metro. Deeper into the Chi and Phi sectors, residents say buses and shared autos are
    thin, so tutors mostly arrive by two-wheeler, or by metro and e-rickshaw. Most trips in and out pass through Pari
    Chowk, which jams at office hours, so a fixed, slightly earlier evening slot is the safer choice. Phi 3 residents
    note that some roads go quiet after dark, and many families there prefer daytime or early-evening classes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="gn-zeta">Zeta and Eta: the quieter north-east</h3>
  <p>
    Beyond the Delta sectors, the Zeta and Eta sectors are greener, more open and further from the main junctions.
    {!! $ggA('zeta-1', 'Zeta 1') !!} has wide internal roads and neat blocks, with society flats making up most homes
    but villas, houses and builder floors also found. {!! $ggA('zeta-2', 'Zeta 2') !!} is mostly ready apartments in
    societies, with villages such as Tilapta, Gulistanpur and Thapkhera nearby. {!! $ggA('eta-1', 'Eta 1') !!} is the
    plotted one of the group, with many families in houses built on authority plots, while
    {!! $ggA('eta-2', 'Eta 2') !!} is an emerging sector of newer group-housing societies, some of them near Depot
    station at the end of the Aqua Line.
  </p>
  <p>
    Residents like the low traffic and clean streets; public transport is limited and markets are not on the
    doorstep, and in Eta 2, where construction is still going on, the last stretch from the station to some societies
    needs an auto. GNIDA Office, in Knowledge Park IV, is the usual metro stop, with Depot and DELTA 1 for some
    pockets, and Boraki and Dadri railway stations also serve the area. In practice, families here lean on tutors who
    live in Zeta, Eta or Delta, and on online classes for specialist subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="gn-omicron">Omicron, Mu and Xu: plotted, calm and two-wheeler territory</h3>
  <p>
    Towards the Surajpur and Ecotech side of the city, the Omicron, Mu and Xu sectors are mostly independent houses on
    authority plots, and several are among the more affordable parts of Greater Noida. {!! $ggA('omicron-1', 'Omicron 1') !!}
    is the exception, with high-rise societies making up most homes. {!! $ggA('omicron-1a', 'Omicron 1A') !!} is a leafy
    sector of houses and villas with a block of authority flats, {!! $ggA('omicron-2', 'Omicron 2') !!} is almost all
    independent houses around plenty of parks, and {!! $ggA('omicron-3', 'Omicron 3') !!} mixes societies with plotted
    houses. {!! $ggA('mu-2', 'Mu 2') !!} is known for flats built under the authority's own housing scheme, and
    {!! $ggA('mu-1', 'Mu 1') !!}, {!! $ggA('xu-1', 'Xu 1') !!} and {!! $ggA('xu-2', 'Xu 2') !!} are houses almost
    throughout, with some plots in Xu 1 still unbuilt.
  </p>
  <p>
    Once the tutor arrives, most homes need no gate pass. Getting there is the question. GNIDA Office is the nearest
    Aqua Line stop for most of the zone, public transport inside Omicron 1A, Xu 1 and Xu 2 is limited, and connecting
    roads towards Pari Chowk get congested at peak hours. Mu 1 and Mu 2 fare better, with markets and autos easier to
    find. The usual answer is a tutor with a two-wheeler from the Omicron, Mu, Xu or Sigma sectors; ask about travel
    at the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gn-boards">Which boards do Greater Noida tutors teach?</h2>
  <p>
    Greater Noida families follow the boards common across the NCR: CBSE most widely, ICSE and ISC, and the IB or
    Cambridge IGCSE for a smaller group. Greater Noida is in Uttar Pradesh, so the state board, UPMSP, is in the mix
    too. We ask for the board with every request, because a tutor's strengths rarely transfer cleanly between them.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    CBSE papers are built on the NCERT textbooks, and a large share of every paper is competency-based: case studies,
    assertion–reason items and questions that test application rather than recall. Look for a tutor who teaches from
    NCERT first, uses the board's sample papers and shows how to set out answers so each step earns marks.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    CISCE's ICSE (Class 10) and ISC (Class 12) syllabi are broad and the answers are long. English Literature, History
    and the three sciences all reward precise, well-organised writing. A good tutor covers the full syllabus
    without gaps, times written answers, and knows the prescribed texts and project work.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and IGCSE</h3>
  <p>
    IB Diploma grades mix final exams with internal assessments, and IB Maths has two courses, Analysis and Approaches
    and Applications and Interpretation, each at SL or HL. Tutors may guide an IA or Extended Essay but may not write
    it. Cambridge IGCSE turns on exam technique: command words, Core or Extended tier, past papers. These tutors are
    fewer in number, so online sessions often widen the choice.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>UP Board</h3>
  <p>
    UPMSP students sit the state's High School and Intermediate exams. The content overlaps a good deal with the
    NCERT-based syllabus, but paper patterns and the medium of instruction can differ. Tell us both the board and the
    medium, Hindi or English, and we look for a tutor who teaches that exact combination.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gn-classes">What does a student need at each stage?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Primary and middle school</h3>
  <p>
    Before Class 9 the goal is secure basics and good habits: reading with understanding, confident arithmetic,
    fractions and early algebra, and the patience to work a problem through. Home sessions suit younger children
    best.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    Maths and Science step up sharply in Class 9, which is why so many families start looking then. Much of Class 10 builds on
    Class 9, so treat it as a foundation year. In Class 10 the rhythm becomes teaching,
    chapter tests, then full papers. Our <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">CBSE Class 10
    Maths guide</a> and <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 Science notes</a> set out a
    plan.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    Senior school rewards specialists. In science, Class 11 Physics and Maths are the usual stumbling blocks; in
    commerce, Accountancy and Economics. Much of the Class 12 syllabus, and of JEE and NEET, rests on Class 11, so it is
    the wrong year to coast. See our guides to <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12
    Physics</a> and <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 Maths</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gn-subjects">Which subjects can we match?</h2>
  <p>
    We match tutors for Mathematics, Physics, Chemistry, Biology, English, Computer Science, Accountancy, Economics,
    Business Studies, Hindi and Sanskrit, plus all-subject help for younger children. Each profile shows the classes
    and boards a tutor teaches, so you can see whether someone who lists Chemistry teaches it at Class 8 or Class 12.
  </p>
  <p>
    <strong>Maths</strong> builds chapter on chapter, so a weak topic left alone keeps costing marks later.
    <strong>Physics</strong> needs someone who teaches the reasoning behind a formula, not just the formula.
    <strong>Chemistry</strong> is three subjects in one, numerical Physical, mechanism-based Organic and largely
    NCERT-driven Inorganic, and our <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Class 12
    Chemistry guide</a> covers how to split the work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gn-jee-neet">Can a home tutor help with JEE or NEET?</h2>
  <p>
    Yes, as a partner to coaching rather than a replacement. Most JEE and NEET aspirants attend a coaching institute,
    and a tutor adds most value in three ways:
  </p>
  <ul>
    <li><strong>Working through the coaching material.</strong> The tutor takes the student's own sheets and test papers each week and clears what the batch moved past too quickly.</li>
    <li><strong>Joining up boards and entrance.</strong> In Class 12 a good tutor plans the year so board revision and entrance practice feed each other, since much of the NCERT content serves both.</li>
    <li><strong>Rescuing one subject.</strong> A student strong in two subjects and weak in the third often gains more from focused work on that one subject than from extra hours in all three.</li>
  </ul>
  <p>
    Both exams are run by NTA. JEE Main has two sessions early in the year, and those who qualify can go on to JEE
    Advanced. NEET UG is held once a year, with Biology carrying half the marks, so close work on the NCERT Biology
    textbooks matters more than extra question banks. Check dates in the current year's official information bulletin.
    For subject plans, see our <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE Maths topic-wise guide</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE Physics guide</a>,
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE Chemistry guide</a> and
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NCERT-first NEET Biology guide</a>. Our piece on
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching versus a home tutor for
    JEE</a> was written for Gurugram but the reasoning applies here unchanged.
  </p>
  <p>
    Around coaching hours, travel matters: in the Alpha–Delta core a tutor on the Aqua Line can often manage a late
    slot, while in Greater Noida West or the Xu sectors online sessions are usually the more realistic fit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gn-mode">Should you choose home or online tuition in Greater Noida?</h2>
  <p>
    Both work. Home tuition is best for younger children and for subjects where the tutor needs to see hand-written
    working, such as Maths and Chemistry numericals. Online tuition widens the choice of tutor, which matters most for
    IB, IGCSE and senior specialist subjects. In Greater Noida, four local factors decide the mix:
  </p>
  <ul>
    <li><strong>The Aqua Line.</strong> Opened on 25 January 2019, it runs from Noida Sector 51 to Depot, and its Greater Noida stops are Knowledge Park II, Pari Chowk, ALPHA 1, DELTA 1, GNIDA Office and Depot. Near one of these, a tutor from anywhere along the line, or from the Blue Line via the Sector 51–52 skywalk, can reach you without a car.</li>
    <li><strong>Pari Chowk.</strong> The Noida–Greater Noida Expressway ends here and the Yamuna Expressway begins here, so the junction takes traffic from several directions and backs up at office hours.</li>
    <li><strong>The Noida–Greater Noida Expressway.</strong> A tutor based in Noida will usually come in along it. For the older sectors that is a practical route outside the rush; at peak hours, a tutor from inside Greater Noida is often more punctual.</li>
    <li><strong>Gaur Chowk.</strong> In Greater Noida West, Gaur Chowk and Ek Murti Chowk are the pinch points, and with no metro in the belt, tutors come by bike, car or shared auto. A tutor from the neighbouring towers matters most here.</li>
  </ul>
  <p>
    A common pattern is one home session a week plus one or two online sessions for doubts and tests, with the same
    tutor. Our comparison of
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutors</a> goes into the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gn-fees">How much does a home tutor cost in Greater Noida?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor
    sets their own fee, and where it lands depends on a few things:
  </p>
  <ul>
    <li><strong>Level and board.</strong> Primary and middle-school tuition costs less than senior classes and the international boards.</li>
    <li><strong>Specialist work.</strong> Entrance-level Physics and Maths, IB Higher Level subjects and IA or Extended Essay guidance sit at the top of the range.</li>
    <li><strong>The trip.</strong> A tutor who must cross Pari Chowk or Gaur Chowk at peak hour may factor that into the fee; one from your own zone usually will not.</li>
  </ul>
  <p>
    Every tutor on your shortlist shows their fee before the demo, and nobody outside your stated budget is put
    forward. For a breakdown by class and subject, see our <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gn-choose">How do you judge a tutor at the demo?</h2>
  <p>A profile gets a tutor onto your shortlist; the demo is where you decide. Watch for these:</p>
  <ol>
    <li><strong>Diagnosis first.</strong> Did the tutor ask questions to find out where the student stands before starting to teach?</li>
    <li><strong>Student doing the work.</strong> Was your child solving problems for most of the session, or mainly listening?</li>
    <li><strong>Board awareness.</strong> Could the tutor explain how this year's paper is set for your board, and how they would prepare for it?</li>
    <li><strong>A plan.</strong> Did they suggest what the next few weeks should cover and how progress will be checked?</li>
    <li><strong>A realistic journey.</strong> Ask where they will come from, how they travel, and whether that works at your hour.</li>
  </ol>
  <p>
    In a society, put the tutor on the visitor app before the demo; in a plotted sector, send a map pin and say where
    to park. Keep lessons in a shared room with an adult at home. If a demo does not work out, we arrange the next. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo
    class checklist</a> and guide to <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and
    stream</a> may help.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gn-calendar">When is the best time to start?</h2>
  <p>
    Most schools in Greater Noida begin the academic session in April, as CBSE schools do. For a student heading into
    board exams, the year tends to run like this:
  </p>
  <ul>
    <li><strong>April to June:</strong> the ideal start. The new syllabus is just opening, and the summer break leaves room to fix last year's gaps.</li>
    <li><strong>July to September:</strong> steady teaching alongside school, with chapter tests; many schools hold first-term exams around September.</li>
    <li><strong>October to December:</strong> completing the syllabus, with pre-boards in many schools around the turn of the year.</li>
    <li><strong>January to March:</strong> full papers, revision and the board exams; JEE Main's first session usually falls early in the year.</li>
    <li><strong>April to May:</strong> JEE Main's second session, JEE Advanced and NEET UG usually follow, alongside the May exam session for IB and Cambridge students.</li>
  </ul>
  <p>
    Dates move each year, so rely on the official notices. Starting in spring gives a tutor the full year; starting in
    winter still helps, with the focus on papers and exam technique.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gn-start">How do you get started?</h2>
  <p>
    Send us the student's class, board and subjects, your sector or society and the times that suit you. We reply with
    two or three matched tutors, you choose one for a free demo class, and you decide after that. Start from your
    sector in the list above, browse <a href="{{ url('/tutors') }}">all tutors</a>, or book a
    <a href="{{ url('/demo-class') }}">free demo class</a>. If no home tutor lives close enough to your sector yet,
    online tutoring is available across India, and a hybrid plan lets you begin straight away.
  </p>
  <p class="gn-note">
    Looking at nearby cities? See home tutors in <a href="{{ url('/city/noida') }}">Noida</a>,
    <a href="{{ url('/city/delhi-ncr') }}">Delhi NCR</a> and <a href="{{ url('/city/gurugram') }}">Gurugram</a>, or
    browse <a href="{{ url('/city') }}">cities across India</a>.
  </p>
  <p class="gn-note">
    Are you a tutor? See <a href="{{ url('/tuition-jobs/greater-noida') }}">home tuition jobs in Greater Noida</a> and
    the sectors where families are asking for tutors.
  </p>
  </section>

  </div>
</article>
