{{--
  Long-form guide for the Noida city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for parents choosing a
  home tutor in Noida, not for search engines: every figure here is either
  live from the database or a published NXTutors policy, local facts come from
  the cited research in database/seo-content/areas/noida-research.json, and no
  school is named.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $ggAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ggA = function (string $slug, string $label) use ($ggAreaSlugs) {
      return in_array($slug, $ggAreaSlugs, true)
          ? '<a href="' . e(url('/city/noida/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $ggTutors = (int) ($hubCounts['tutors'] ?? 0);
  $ggAreas = $allAreas->count();
@endphp

<article class="nx-guide nz-guide" aria-labelledby="nzGuideTitle">
  <h2 id="nzGuideTitle">Home tuition in Noida: a sector-by-sector guide for parents</h2>

  <p class="nx-guide__lede nz-lede">
    Noida is laid out in numbered sectors, and the sector you live in shapes almost everything about home tuition:
    whether the tutor walks up to your front door or signs in at a society gate, whether they can come by metro, and
    which roads they will be stuck on at six in the evening. A Class 10 student in a plotted house near the Sector 18
    market, an IB student in a tower off the Noida Expressway and a Class 7 student in a new society near the Greater
    Noida West border all need different arrangements. This guide explains how NXTutors matches tutors in Noida, how
    each part of the city works for home classes, what each board asks of a student, what tuition costs and how to get
    started.
  </p>
  <nav class="nx-guide__toc nz-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#nz-how">How matching works</a> ·
    <a href="#nz-zones">Noida zone by zone</a> ·
    <a href="#nz-boards">Boards</a> ·
    <a href="#nz-classes">Class by class</a> ·
    <a href="#nz-subjects">Subjects</a> ·
    <a href="#nz-jee-neet">JEE &amp; NEET</a> ·
    <a href="#nz-mode">Home or online</a> ·
    <a href="#nz-fees">Fees</a> ·
    <a href="#nz-choose">Choosing a tutor</a> ·
    <a href="#nz-safety">Safety at home</a> ·
    <a href="#nz-calendar">The school year</a> ·
    <a href="#nz-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="nz-how">How NXTutors matches a home tutor in Noida</h2>
  <p>
    You tell us the student's class, board and subjects, your sector or society, the days and times that suit you,
    whether you want home, online or a mix of both, and a budget range. We come back with two or three tutors who fit
    all of it, not just the subject. You see each tutor's fee before the first class, and the first class is a free
    demo.
  </p>
  <p>In Noida, the shortlist turns on four things:</p>
  <ul>
    <li><strong>Board and level.</strong> A tutor who teaches CBSE Class 12 Chemistry well is not automatically the right person for IB Chemistry or ICSE Class 10. We match on the board and class the student is actually sitting.</li>
    <li><strong>The route, not the map.</strong> Two sectors that look close can be far apart at peak hour if the route crosses a busy junction or the expressway. We look at where the tutor starts from, and whether a metro line links the two of you.</li>
    <li><strong>A slot the tutor can keep.</strong> Weekday evenings are the most requested time everywhere. If your slot is crowded, we would rather suggest a tutor with a real opening, or a weekend session, than one who will struggle to arrive on time.</li>
    <li><strong>Your budget.</strong> We shortlist within the range you give us, and each tutor's fee is on the table before the demo.</li>
  </ul>
  <p>
    The demo is an ordinary lesson on the student's current topic. If the fit is not right, tell us and we suggest
    another tutor; switching tutor later is free too.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="nz-zones">Noida zone by zone</h2>
  <p>
    @if($ggTutors > 0)
      This page lists {{ number_format($ggTutors) }} tutor profiles
    @else
      This page lists our tutors
    @endif
    for Noida, and @if($ggAreas > 0){{ number_format($ggAreas) }} sectors @else each sector @endif
    have their own page showing the tutors nearest to them, from tutors in that sector to tutors in the same zone and
    online tutors. The full list is further up this page. For home tuition, it helps to think of Noida in six zones,
    each with its own housing, roads and metro:
    <a href="#nz-old">Old Noida</a>, <a href="#nz-central">Central Noida</a>,
    <a href="#nz-62">the Sector 62 belt</a>, <a href="#nz-70">Sectors 70 to 82</a>,
    <a href="#nz-expressway">the Noida Expressway</a> and <a href="#nz-extension">the sectors near Noida Extension</a>.
    The boundaries are approximate; they follow how the city is lived in rather than any official map.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="nz-old">Old Noida: the first sectors, from the DND to Sector 18</h3>
  <p>
    Noida was set up in 1976 and planned as numbered sectors on a grid, and the oldest of them sit at the Delhi end of
    the city. Many were built as houses on Noida Authority plots allotted in the 1980s, so this zone is mostly
    independent houses and builder floors rather than towers: {!! $ggA('sector-15', 'Sector 15') !!} is plotted houses,
    floors and low-rise flats, while {!! $ggA('sector-15a', 'Sector 15A') !!}, where the DND Flyway lands, is low-density
    bungalows and villas. {!! $ggA('sector-14', 'Sector 14') !!}, {!! $ggA('sector-12', 'Sector 12') !!},
    {!! $ggA('sector-19', 'Sector 19') !!} and {!! $ggA('sector-27', 'Sector 27') !!} follow the same pattern, while
    much of {!! $ggA('sector-21', 'Sector 21') !!} is one RWA-run colony of flats, and
    {!! $ggA('sector-28', 'Sector 28') !!} mixes gated societies with houses.
  </p>
  <p>
    This is an easy zone to reach without a car. Blue Line stations at Noida Sector 15, 16 and 18 and Botanical
    Garden, where it meets the Magenta Line, let a tutor walk in from the metro to many homes. In houses and floors there is no gate pass to arrange,
    though parking on older lanes and near busy markets can take a few minutes. The one thing to plan around is
    evening traffic towards the Delhi exits: tailbacks between the Mahamaya Flyover and the DND, worst at the Film City
    Flyover, are a daily pattern. A tutor coming from across the city is best booked before that rush, or chosen from
    the neighbouring sectors.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="nz-central">Central Noida: Sectors 34 to 53 and the Botanical Garden</h3>
  <p>
    Central Noida runs from the Botanical Garden and Noida City Centre through the plotted sectors along Captain
    Shashi Kant Marg and Dadri Main Road. Much of it is plotted Noida Authority housing: in
    {!! $ggA('sector-50', 'Sector 50') !!}, Blocks A to E hold around a thousand houses on plots and Block F is group
    housing, and {!! $ggA('sector-51', 'Sector 51') !!} has more than a thousand houses across Blocks A to F.
    {!! $ggA('sector-34', 'Sector 34') !!} mixes plotted blocks with a block of apartments and societies, and
    {!! $ggA('sector-39', 'Sector 39') !!}, home to Noida City Centre station, is mostly independent houses. Several
    sectors also contain urban villages, such as Morna in Sector 35, Sadarpur in Sector 45 and Baraula in
    {!! $ggA('sector-49', 'Sector 49') !!}.
  </p>
  <p>
    This is the best-connected zone for tutors who use the metro. Blue Line stations include Noida Sector 34,
    Noida City Centre, Golf Course and Noida Sector 52, and the Aqua Line starts at Noida Sector 51, linked to
    {!! $ggA('sector-52', 'Sector 52') !!} station by a walkway. A tutor living anywhere along either line can reach much
    of this zone without driving. Residents do report peak-hour congestion on Dadri Main Road and Amrapali Road, so a
    tutor who drives in from outside the zone will prefer a slot before the evening rush. In the plotted blocks the
    tutor comes to your door; in the group-housing blocks, add them to the visitor list once.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="nz-62">The Sector 62 belt: Sectors 55, 56, 61 and 62</h3>
  <p>
    {!! $ggA('sector-62', 'Sector 62') !!} lies along NH-9 and is best known for offices, IT employers and
    institutions, but it also has a large residential side, kept separate from the commercial blocks and made up
    mainly of cooperative group housing societies with two- and three-bedroom flats.
    {!! $ggA('sector-61', 'Sector 61') !!} mixes group housing with independent floors and houses.
    {!! $ggA('sector-55', 'Sector 55') !!} is largely plotted, with independent houses along Khora Road and Noida 22
    Main Road, and {!! $ggA('sector-56', 'Sector 56') !!} has Janta and LIG flats allotted by the Noida Authority
    alongside independent houses.
  </p>
  <p>
    The Blue Line extension serves the belt with stations at Noida Sector 61, Sector 59, Sector 62 and Noida
    Electronic City, and Noida Sector 52 connects to the Aqua Line. Office traffic is the main thing to plan around:
    residents report congestion on NH-9 at peak hours, near the office belts and around the metro stations, and heavy
    peak-hour traffic and parking problems in Sector 61. A tutor who lives within the belt, or one who comes by metro
    and finishes the trip on foot or by auto, is usually the most punctual. In Sectors 55 and 56 the nearest stations
    are outside the sector, so most tutors arrive by two-wheeler, auto or cab.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="nz-70">Sectors 70 to 82: the Aqua Line towers</h3>
  <p>
    This zone has two quite different halves. Sectors 74 to 79 are mainly high-rise gated group-housing societies;
    {!! $ggA('sector-76', 'Sector 76') !!}, for example, was divided into large plots allotted to builders, and
    {!! $ggA('sector-74', 'Sector 74') !!} and {!! $ggA('sector-78', 'Sector 78') !!} are almost all towers. Sectors 70
    to 73 are lower-rise, with builder floors, independent houses and smaller societies:
    {!! $ggA('sector-71', 'Sector 71') !!} mixes apartments, floors, houses and older Janta flats, and much of
    {!! $ggA('sector-73', 'Sector 73') !!} is Sarfabad village. {!! $ggA('sector-82', 'Sector 82') !!}, on Dadri Main
    Road, is an older sector organised in pockets, with housing from EWS flats to HIG duplexes.
  </p>
  <p>
    The Aqua Line runs through the zone with stations at Noida Sector 50, Sector 76 and Sector 101, and NSEZ serves
    Sector 82, so a tutor who lives along the line can ride in and walk to your tower. Vikas Marg is the main road of
    the belt, and residents report heavy congestion on it during office peak hours, along with bottlenecks at the
    Sector 71/51 intersection and at the junction near Noida Sector 101 station. In the towers, the gate is the first
    thing to plan: register the tutor with security and your block before the first class, and a steady weekly slot
    keeps later visits quick.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="nz-expressway">The Noida Expressway: Sectors 92 to 168</h3>
  <p>
    The Noida–Greater Noida Expressway starts at the Mahamaya Flyover and runs to Pari Chowk in Greater Noida, and the
    sectors along it are mostly high-rise gated societies from many developers, with two- to four-bedroom flats across
    affordable, mid and premium segments. {!! $ggA('sector-93a', 'Sector 93A') !!} is one of the more established
    tower sectors, {!! $ggA('sector-100', 'Sector 100') !!} is group housing known for its greenery, and
    {!! $ggA('sector-137', 'Sector 137') !!}, {!! $ggA('sector-143', 'Sector 143') !!} and
    {!! $ggA('sector-168', 'Sector 168') !!} have gated societies with offices and business parks close by. Not every
    sector is towers: some near the start of the belt, such as 92, 99 and 108, are largely plotted with independent
    houses, and {!! $ggA('sector-104', 'Sector 104') !!} mixes apartments, floors and houses. Occupancy varies by
    project in parts of {!! $ggA('sector-128', 'Sector 128') !!} to 134 and in
    {!! $ggA('sector-150', 'Sector 150') !!}, where registrations for many flats only reopened after a Supreme Court
    order in November 2025.
  </p>
  <p>
    Traffic decides home tuition here. The expressway carries heavy peak-hour traffic, with slow-moving traffic
    reported in both directions in the evening, and residents of Sector 137 also mention monsoon waterlogging. A tutor
    from a neighbouring sector who can reach you on local roads is worth waiting a day for. The Aqua Line helps: much
    of it runs along the expressway, with stations including Noida Sector 137 and Sectors 142 to 148, so a tutor living
    on the line can often come by metro and take a short auto ride. For specialist subjects, a hybrid plan, with one
    home session a week and online classes in between, often makes a strong tutor from further away practical.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="nz-extension">Near Noida Extension: Sectors 115 to 122</h3>
  <p>
    The sectors towards the Greater Noida West border mix large gated societies with plotted sectors and old villages.
    Sectors 119 to 121 are mainly gated group housing: {!! $ggA('sector-121', 'Sector 121') !!} has a single society of
    about 2,600 flats, and {!! $ggA('sector-119', 'Sector 119') !!} and {!! $ggA('sector-120', 'Sector 120') !!} are
    apartment societies, some still being completed. {!! $ggA('sector-116', 'Sector 116') !!} and
    {!! $ggA('sector-122', 'Sector 122') !!} are plotted Noida Authority sectors of independent houses and builder
    floors, with many Sector 116 plots still unbuilt. {!! $ggA('sector-115', 'Sector 115') !!} is centred on the old
    Sorkha village and the Harit Upvan urban forest, beside Sector 76.
  </p>
  <p>
    Getting here can be slow. Gaur Chowk, the junction towards Noida Extension, carries heavy daily traffic while an
    underpass is built, and residents mention stray cattle on the roads. The nearest metro for Sectors 115 and 116 is
    Noida Sector 76 on the Aqua Line, and an Aqua Line extension with stations including Sectors 122 and 123 has been
    approved but is not yet running. The practical answer is a tutor who already teaches in the same cluster of
    sectors, and in the big societies that can work well: many families live a short walk apart, so a tutor can see
    several students on one trip. Where the local choice is thin, online classes widen it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="nz-boards">Tutoring for each board in Noida</h2>
  <p>
    Noida's schools follow several curricula. CBSE is the most common, ICSE is widely taught, and some schools offer
    the IB or Cambridge IGCSE. Because Noida is in Uttar Pradesh, there are also schools affiliated to the state
    board, UPMSP. A tutor's experience with one board does not always carry over to another, so we match on the board.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    Most Noida students are in CBSE schools. CBSE papers draw closely on the NCERT textbooks, and competency-based
    questions (case-based, assertion–reason and source-based items) make up a large part of each paper. A good CBSE
    tutor works from NCERT first, then from the board's sample papers and previous years' papers, and trains the
    student to set out answers in the steps the marking scheme rewards. CBSE now also gives Class 10 students a
    second board exam later in the year to improve their scores, which changes how some families plan the final term.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    ICSE (Class 10) and ISC (Class 12), set by CISCE, cover more content per subject than CBSE and expect longer,
    more precise written answers, especially in English Language and Literature, History and the sciences. Students
    usually need help with the volume: planning revision so nothing is left unread, and practising answers against the
    clock. An ICSE tutor should know the prescribed Literature texts and the internal assessment (project) work for
    each subject.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and Cambridge IGCSE</h3>
  <p>
    In the IB Diploma, grades depend on internal assessments as well as final exams, and in Maths the student must be
    on the right course: Analysis and Approaches or Applications and Interpretation, at SL or HL. A tutor can guide an
    IA or Extended Essay but must not write it, which IB academic-integrity rules forbid. Cambridge IGCSE rewards exam
    technique: command words, Core versus Extended papers, and practice with past papers and mark schemes. Specialists
    are fewer, so online or hybrid tuition often widens the choice.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>UP Board</h3>
  <p>
    Students in UP Board (UPMSP) schools sit the state's own High School and Intermediate exams. Much of the content
    overlaps with the NCERT-based curriculum, but the paper pattern and the medium of instruction can differ, so tell
    us the board and the medium when you ask for a tutor, and we look for someone who teaches that combination.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="nz-classes">What tuition looks like class by class</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Classes 1 to 8: foundations</h3>
  <p>
    Up to Class 8 the aim is understanding and habits, not marks: fluent reading, number sense, fractions and the
    start of algebra, careful reading of a science diagram. Gaps left now show up in Class 9. Home sessions suit
    younger children best, and one or two sessions a week with a patient tutor is usually enough.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10: the first board years</h3>
  <p>
    Class 9 is when many families first look for a tutor, because the jump in Maths and Science is steep and the
    Class 10 boards are a year away. A good plan covers the Class 9 syllabus properly, since much of Class 10 builds on
    it, then moves in Class 10 to a cycle of teaching, chapter tests and full papers in the final months. See our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">CBSE Class 10 Maths preparation guide</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 Science notes</a>.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12: streams and specialisation</h3>
  <p>
    After Class 10 the subjects deepen sharply. In science, Physics and Maths in Class 11 are where most students
    first struggle; in commerce, Accountancy and Economics. Class 11 matters more than students expect, because
    Class 12 builds directly on it and a large part of the JEE and NEET syllabi comes from it. At this stage a separate
    specialist per subject usually works better than one tutor for everything. Our guides to
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 Physics</a> and
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 Maths</a> go further.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="nz-subjects">Subjects our Noida tutors teach</h2>
  <p>
    We match tutors for Mathematics, Physics, Chemistry and Biology, English, Computer Science, the commerce subjects
    (Accountancy, Economics and Business Studies), Hindi and Sanskrit, and all-subject support for younger children.
    A tutor's profile lists the classes and boards they teach, not just the subject, because teaching Class 8 Science
    and ISC Chemistry are different jobs.
  </p>
  <p>
    <strong>Maths</strong> is where one-to-one help changes results fastest: it is cumulative, so one shaky chapter
    drags down everything after it. <strong>Physics</strong> needs a tutor who makes the student reason from first
    principles. <strong>Chemistry</strong> has three parts that need different handling: Physical is numerical, Organic
    is about mechanisms, and Inorganic is largely NCERT-based (see our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Class 12 Chemistry guide</a>).
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="nz-jee-neet">JEE and NEET preparation alongside school</h2>
  <p>
    Most JEE and NEET aspirants attend a coaching institute. Home tutoring works best alongside coaching, not instead
    of it, in three situations:
  </p>
  <ul>
    <li><strong>Doubt clearing.</strong> A tutor who works through the student's own coaching sheets and marked tests each week closes the gaps a fast batch leaves open.</li>
    <li><strong>Boards and entrance together.</strong> A tutor can plan Class 12 so board and entrance preparation support each other, since much of the NCERT content is common to both.</li>
    <li><strong>One weak subject.</strong> Many students are strong in two subjects and struggling in the third. Focused sessions on that subject alone often move the overall score more than extra hours in all three.</li>
  </ul>
  <p>
    JEE Main, conducted by NTA, is held in two sessions in the early part of the year, and candidates who qualify can
    sit JEE Advanced. NEET UG, also conducted by NTA, is held once a year, and Biology carries half of its marks, so a
    tutor who works closely through the NCERT Biology textbooks is worth more than any extra question bank. Always
    check the current year's dates in the official information bulletin. For subject-by-subject plans, read our
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE Maths topic-wise guide</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE Physics guide</a>,
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE Chemistry guide</a> and
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NCERT-first NEET Biology guide</a>. Our general guide on
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">choosing between coaching and a home
    tutor for JEE</a> applies to Noida families just as well.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="nz-mode">Home tuition or online tuition in Noida?</h2>
  <p>
    Both work. Home tuition suits younger students and subjects where hand-written working matters, such as Maths and
    Chemistry numericals. Online tuition widens the choice of tutor, which matters for IB, IGCSE and senior specialist
    subjects, and removes the commute.
  </p>
  <p>Three things about Noida tip the balance:</p>
  <ul>
    <li><strong>The metro.</strong> The Blue Line runs from the Delhi border through Old and Central Noida to Noida Electronic City, and the Aqua Line runs from Sector 51 through the Sectors 70 to 82 belt and along the expressway towards Greater Noida, with the two linked at Sector 51 and Sector 52. A tutor who lives near either line can reach many sectors without driving, which widens your choice for home classes.</li>
    <li><strong>Expressway and junction traffic.</strong> The expressway, Vikas Marg, NH-9 near the office belts and the approaches to the DND and Gaur Chowk all slow down at peak hours. If the best tutor for your subject would cross one of these in the evening, a hybrid plan often beats a late, rushed home class.</li>
    <li><strong>Gated societies.</strong> In the tower sectors, every visit starts at the gate. Registering the tutor once and keeping a fixed slot makes home tuition smooth; changing the time every week does not.</li>
  </ul>
  <p>
    A common pattern is one home session a week, for the relationship and hand-written practice, plus one or two
    online sessions for doubt clearing and tests. We can arrange home, online or hybrid tuition with the same tutor.
    Our comparison of <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutors</a> sets out the
    trade-offs in more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="nz-fees">What home tuition costs in Noida</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set
    their own fee. Where a tutor sits in that range depends on:
  </p>
  <ul>
    <li><strong>Class and board.</strong> Senior classes and international boards cost more than primary and middle-school tuition.</li>
    <li><strong>Specialisation.</strong> Entrance-level Maths and Physics, IB Higher Level subjects and IA or Extended Essay guidance are specialist work.</li>
    <li><strong>Travel.</strong> A tutor crossing the expressway or a busy junction at peak hour may price that in; a tutor from a neighbouring sector often will not.</li>
  </ul>
  <p>
    You see each shortlisted tutor's fee before the demo, and we only shortlist tutors inside the budget you give us.
    For more detail by class and subject, see our <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="nz-choose">How to choose the right tutor</h2>
  <p>A demo class tells you more than any profile. During and after it, ask yourself:</p>
  <ol>
    <li><strong>Did the tutor find out what the student already knows</strong> before teaching? A good first lesson starts with questions.</li>
    <li><strong>Did the student do most of the problem-solving</strong>, or mostly listen?</li>
    <li><strong>Do they know the board's current exam pattern?</strong> Ask how they would prepare for this year's paper.</li>
    <li><strong>Did they suggest a plan</strong> for the next month, and how progress will be checked?</li>
    <li><strong>Can they keep the slot?</strong> Ask where they will be coming from and how they travel at that hour.</li>
  </ol>
  <p>
    If several answers are no, tell us and we arrange a demo with the next tutor on the shortlist. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> and guide on
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a> may also help.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="nz-safety">Safety at home: simple habits that work</h2>
  <p>
    Whichever tutor you choose, a few habits keep home sessions safe and focused. Schedule sessions when an adult is at
    home, hold the class in a common room rather than a bedroom, and in a gated society register the tutor with
    security or the visitor app so every entry is logged. If anything about a tutor's conduct concerns you, stop the
    sessions and contact us.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="nz-calendar">Planning around the Noida school year</h2>
  <p>
    CBSE schools start their session in April, and most Noida schools follow a similar year. A rough year for a
    board-exam student looks like this:
  </p>
  <ul>
    <li><strong>April to June:</strong> the best time to start with a tutor. The new syllabus is just beginning, and the summer break gives time to fix gaps from the previous year.</li>
    <li><strong>July to September:</strong> steady teaching alongside school, with chapter tests. Many schools hold their first-term exams around September.</li>
    <li><strong>October to December:</strong> finish the syllabus. Many schools hold pre-board exams around the turn of the year.</li>
    <li><strong>January to March:</strong> full papers, revision and the board exams themselves. JEE Main's first session usually falls early in the year.</li>
    <li><strong>April to May:</strong> JEE Main's second session, JEE Advanced and NEET UG usually follow, alongside the May exam session for IB and Cambridge students.</li>
  </ul>
  <p>
    Exact dates change every year, so check the official notices. Starting in April or May gives a tutor a full year;
    starting in November still helps, but the focus shifts to exam practice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="nz-start">Getting started</h2>
  <p>
    Tell us the student's class, board and subjects, your sector or society, and the slots that suit you. We come
    back with two or three matched tutors, you choose one for a free demo class, and you decide after that. Start by
    picking your sector in the list above, browsing <a href="{{ url('/tutors') }}">all tutors</a>, or booking a
    <a href="{{ url('/demo-class') }}">free demo class</a>. If no home tutor is close enough yet, online tutoring is
    available across India, and a hybrid plan lets you start now.
  </p>
  <p class="nz-note">
    Looking elsewhere in the region? See home tutors in <a href="{{ url('/city/delhi-ncr') }}">Delhi NCR</a> and
    <a href="{{ url('/city/gurugram') }}">Gurugram</a>, or <a href="{{ url('/city') }}">cities across India</a>.
  </p>
  <p class="nz-note">
    Are you a tutor? See <a href="{{ url('/tuition-jobs/noida') }}">home tuition jobs in Noida</a> and the sectors
    where families need tutors now.
  </p>
  </section>

  </div>
</article>
