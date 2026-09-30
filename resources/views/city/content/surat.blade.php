{{--
  Long-form guide for the Surat city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for parents choosing a
  home tutor in Surat, not for search engines: every figure here is either
  live from the database or a published NXTutors policy, local facts come from
  the cited research in database/seo-content/areas/surat-research.json, and
  no school, college, society, developer, hospital or mall is named. The metro
  is described as under construction with no opening date.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $srAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $srA = function (string $slug, string $label) use ($srAreaSlugs) {
      return in_array($slug, $srAreaSlugs, true)
          ? '<a href="' . e(url('/city/surat/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $srTutors = (int) ($hubCounts['tutors'] ?? 0);
  $srAreas = $allAreas->count();
@endphp

<article class="nx-guide sr-guide" aria-labelledby="srGuideTitle">
  <h2 id="srGuideTitle">Home tuition in Surat: a parent's guide from Jahangirpura to Sarthana</h2>

  <p class="nx-guide__lede sr-lede">
    Surat is a river city first. The Tapi splits it into a western bank of newer apartment societies around Adajan,
    Pal and Rander, and a southern and eastern side that holds the old centre, the Ghod Dod Road shopping belt, the
    gated towers of Vesu, the industrial south around Udhna and the diamond neighbourhoods of Katargam and Varachha.
    Sitilink buses and the bridges tie it together while the metro is still being built. For a family looking for a
    tutor, the practical questions are simple: which bank you live on, whether your building has a gate desk, and
    which roads fill up at the hour you want a lesson.
  </p>
  <nav class="nx-guide__toc sr-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#sr-how">How matching works</a> ·
    <a href="#sr-zones">The five zones</a> ·
    <a href="#sr-boards">Boards</a> ·
    <a href="#sr-classes">Classes</a> ·
    <a href="#sr-subjects">Subjects</a> ·
    <a href="#sr-jee-neet">JEE &amp; NEET</a> ·
    <a href="#sr-mode">Home or online</a> ·
    <a href="#sr-fees">Fees</a> ·
    <a href="#sr-choose">The demo class</a> ·
    <a href="#sr-calendar">The school year</a> ·
    <a href="#sr-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="sr-how">How does NXTutors find a tutor for a Surat family?</h2>
  <p>
    You fill in one request: the class and board, the medium of instruction, the subjects, your locality and nearest
    junction or bus stop, the weekdays that are free, and whether you want lessons at home, online or a mix. We come
    back with two or three tutors who fit, each with their fee shown before anything is booked, and the first lesson
    with the one you choose is a free demo. In Surat, four details do most of the sorting:
  </p>
  <ul>
    <li><strong>This bank of the Tapi or the other?</strong> A tutor who lives on your side of the river avoids the bridge approaches at office hours, so we look there first.</li>
    <li><strong>Gate desk or house lane?</strong> Societies in Vesu, Pal or Palanpur note every visitor; in the old lanes of Rander or Nanpura the tutor rings the bell directly.</li>
    <li><strong>Which corridor serves you?</strong> A tutor who travels by Sitilink bus needs a home near a BRTS stop, while one on a two-wheeler can reach the inner roads.</li>
    <li><strong>Board and medium together.</strong> A Gujarati-medium GSEB Class 9 student and an IGCSE candidate need different teachers, so both are matched as one choice.</li>
  </ul>
  <p>
    The demo is a normal lesson on whatever your child is studying that week. If it is not right, we line up the next
    tutor, and changing tutor at any later point is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sr-zones">Surat, zone by zone</h2>
  <p>
    @if($srTutors > 0)
      Tutors shown for Surat come from {{ number_format($srTutors) }} tutor profiles,
    @else
      Tutors shown for Surat come from our tutor profiles,
    @endif
    and @if($srAreas > 0){{ number_format($srAreas) }} localities @else every locality we cover @endif
    have a page each. On those pages, tutors in the locality appear first, then others from the same zone, then those
    who teach online. For planning home lessons we read the city as five zones, starting on the western bank and
    moving round to the east:
    <a href="#sr-adajan">Adajan, Pal and Rander</a>, <a href="#sr-central">Central Surat, Athwa and Ghod Dod Road</a>,
    <a href="#sr-vesu">Piplod, Vesu and Dumas Road</a>, <a href="#sr-udhna">Udhna, Althan and Pandesara</a> and
    <a href="#sr-varachha">Katargam, Varachha and Sarthana</a>. These groupings are ours; the municipal corporation
    draws its own zone and ward lines.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="sr-adajan">Adajan, Pal and Rander: the western bank of the Tapi</h3>
  <p>
    West of the river sits the municipal West Zone, which holds one of the oldest settlements on the Tapi and some of its busiest
    new housing. {!! $srA('adajan', 'Adajan') !!} faces Athwa across the water; its Adajan Gam and Adajan Patiya ward
    areas mix mid-segment flats with independent homes, and a cable-stayed bridge opened in 2018 joined it to Athwa
    beside the older road crossings. {!! $srA('pal', 'Pal') !!} and {!! $srA('palanpur', 'Palanpur') !!}, further
    west, are mostly apartment societies of ready 2 and 3 BHK homes around Bhesan Road, close to Hazira Road.
    {!! $srA('rander', 'Rander') !!} is older than the port city itself: its merchants traded with Africa, the Middle
    East and Southeast Asia until trade moved to Surat in the sixteenth century, and its core of narrow lanes and
    family houses now sits among newer lift buildings. {!! $srA('jahangirpura', 'Jahangirpura') !!}, at the
    north-western edge near Variav and Dabholi, has flats and plotted homes along Hazira-Sayan Road.
  </p>
  <p>
    Buses carry much of the load on this bank. Adajan Patiya is where two Phase 2 Sitilink BRTS corridors begin, one
    to Jahangirpura and one to Pal RTO, and another runs from Pal RTO across the city; Jahangirpura also has a
    corridor from the Katargam side. The Surat Metro Green Line, from Bhesan to Saroli, is planned to stop at Bhesan,
    Palanpur Road and Adajan Gam, but it is still under construction and carries no passengers. Pal and Palanpur
    societies register a tutor at the gate on the first day, Rander's old lanes are doorstep visits with parking a
    short walk away, and the bridge approaches are what to plan around at office hours.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="sr-central">Central Surat, Athwa and Ghod Dod Road: the old centre and its shopping boulevard</h3>
  <p>
    South of the river lie the older central neighbourhoods and one of the city's main shopping streets.
    {!! $srA('nanpura', 'Nanpura') !!}, with its own ward office in the Central Zone, keeps a mix of apartments, builder
    floors and older houses near Kailash Nagar and Athwa Gate. {!! $srA('majura-gate', 'Majura Gate') !!} is a Ring
    Road junction with offices and shops and mid-segment flats around them. {!! $srA('athwa', 'Athwa') !!}, which
    takes in Athwalines and Athwa Gate, houses the South West Zone's administrative building and looks across the Tapi
    at Adajan. {!! $srA('ghod-dod-road', 'Ghod Dod Road') !!} runs from Majura Gate down to
    {!! $srA('parle-point', 'Parle Point') !!}; its name means horse racing, after races held there in the 1900s, and
    it was rebuilt in the 1980s as a retail street with a premium belt of 3 BHK apartments behind the shopfronts.
    Parle Point is a lively node of offices, cafes and restaurants with flats and a few villas around it.
  </p>
  <p>
    Tutors reach this zone easily from every side. Surat railway station, open since 1860 on the Western Railway, and Udhna
    Junction are the rail points, Sitilink buses run along the surrounding roads, and Majura Gate is planned as the
    interchange of the Red and Green metro lines, with Athwa Chopati on the Green Line; neither line is open yet.
    Nanpura's narrow lanes suit a two-wheeler or auto better than a car. On Ghod Dod Road and around Parle Point the
    evening shopping crowd sets the clock, so a slot straight after school, before the shops fill, keeps the lesson
    on time.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="sr-vesu">Piplod, Vesu and Dumas Road: gated towers towards the airport</h3>
  <p>
    The newer half of the South West Zone stretches towards the airport and the sea.
    {!! $srA('piplod', 'Piplod') !!} is upmarket, with ready apartments and villas, and Gaurav Path, the expressway
    built to link the city with its airport at Magdalla, Magdalla port and Dumas village, runs through it with a
    dedicated BRTS lane; Kargil Chowk is one of its junctions. {!! $srA('city-light', 'City Light') !!} is mid-segment
    2 and 3 BHK societies between Parle Point, Piplod and Althan, served by the Ring Road and Vesu Canal Road.
    {!! $srA('vesu', 'Vesu') !!}, one of Surat's newest expansions, is high-rise gated complexes, business parks and
    shopping centres along VIP Road, many at the luxury end, with Bhimrad next door.
    {!! $srA('dumas-road', 'Dumas Road') !!} carries a belt of mid-segment gated societies south-west towards Magdalla
    and Dumas beach on the Arabian Sea.
  </p>
  <p>
    Almost every home here is behind a society gate, so ask the guard to set up a standing visitor entry after the
    first visit. The Red Line has stations planned at VIP Road, Bhimrad, Convention Center and Dream City on this side,
    following the Vesu side rather than Dumas Road; trial runs began in March 2026, but no passenger service has
    started. Meanwhile the BRTS lane on Gaurav Path is the simplest public route in, with an auto or cab for the last
    stretch. VIP Road and Dumas Road peak at office hours and on weekend evenings, so a fixed weekday time outside
    those peaks tends to last the year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="sr-udhna">Udhna, Althan and Pandesara: the southern belt of estates and societies</h3>
  <p>
    Industrial estates and affordable to mid-budget homes share the south of the city.
    {!! $srA('althan', 'Althan') !!} and {!! $srA('bhatar', 'Bhatar') !!} form the Althan-Bhatar ward area of the South
    West Zone; Althan is mostly 2 and 3 BHK societies by city builders, and Bhatar mostly 1 and 2 BHK flats around
    Bhatar Char Rasta, between Ghod Dod Road and Althan. {!! $srA('udhna', 'Udhna') !!}, also written Udhana, stretches
    along the Surat-Navsari highway, is one of the main industrial areas and falls in the South Zone, with modest flats
    and houses among its estates. {!! $srA('pandesara', 'Pandesara') !!} grew from a small village into an industrial
    and commercial hub; today it has a housing board colony, small apartment buildings and houses, and it borders City
    Light, Althan, Sachin and Udhna.
  </p>
  <p>
    Rail and bus links are strong. Udhna Junction lies on the Delhi-Mumbai and Ahmedabad-Mumbai main lines and starts
    the line to Jalgaon, and the first Sitilink corridor, from Udhana Darwaja to Sachin GIDC Naka, has served this side
    since the network began on 26 January 2014. Metro trial runs use the elevated stretch from Dream City to Althan
    Tenement, with Althan Gam also on the Red Line, but passengers cannot ride it yet, and Pandesara is outside the
    first phase. Shift changes at the estates fill the highway and industrial roads, so set the class after them.
    Housing board blocks usually mean a doorstep visit; Althan and Bhatar societies keep a gate desk.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="sr-varachha">Katargam, Varachha and Sarthana: the diamond side of the city</h3>
  <p>
    North and east of the Tapi is the Surat of the diamond trade, where many families trace their roots to Saurashtra.
    {!! $srA('katargam', 'Katargam') !!}, a nagar panchayat in the 1970s before it joined the municipal corporation,
    now has the North Zone office, a large share of the diamond industry and the Causeway promenade on the river.
    {!! $srA('amroli', 'Amroli') !!} came into the city in 2006 along with Chhaprabhatha and Kosad and is mostly 1 and 2
    BHK flats. {!! $srA('varachha', 'Varachha') !!}, in the East Zone, is a hub of diamond cutting and polishing, with
    closely built neighbourhoods such as Matavadi and Trikamnagar. {!! $srA('mota-varachha', 'Mota Varachha') !!} has
    newer multi-storey societies near Nana Varachha and Utran; {!! $srA('sarthana', 'Sarthana') !!}, at the eastern
    edge, spans Sarthana Jakat Naka and Sarthana Gam; and {!! $srA('yogi-chowk', 'Yogi Chowk') !!} is ready flats
    around busy shopping streets near Simada Gam and Punagam.
  </p>
  <p>
    Utran, Kosad and Surat stations serve the north side, and Sitilink runs from Katargam Darwaja to Kosad and, on one
    of its first corridors, via Canal Road to Sarthana Jakat Naka. The Red Line will begin at Sarthana and pass Nature
    Park, Varachha Chopati Garden and Kapodra on its way to the centre, but it is still being built, and Katargam,
    Amroli and Mota Varachha lie outside its first phase. Diamond-unit shift times shape the roads, so an evening slot
    after the rush suits most families. In smaller buildings the tutor comes straight up; the newer Mota Varachha and
    Sarthana societies note visitors at the gate.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sr-boards">Which boards do Surat tutors teach?</h2>
  <p>
    Requests from Surat come under four boards, and the medium of instruction matters as much as the board itself, so
    the form asks for both.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>GSEB, Gujarat's state board</h3>
  <p>
    The Gujarat Secondary and Higher Secondary Education Board conducts the state's public examinations at the end of
    Class 10 and Class 12, and many Surat students study under it, in Gujarati, English or another medium. Tell us
    which, because the tutor should use the same terms as your child's textbook. Follow the board's own circulars for
    the paper pattern and timetable.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    CBSE examinations grow out of the NCERT textbooks, and more of each paper now asks students to use an idea in an
    unfamiliar setting, through case-based and assertion–reason items. Good CBSE teaching keeps the textbook at the
    centre, practises on the board's sample papers with its marking scheme beside them, and trains a student to set
    out every step.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    The CISCE council sets ICSE for Class 10 and ISC for Class 12. Answers are long and the syllabus is wide, with
    prescribed literature in English, so the usual struggle is getting through everything in time. A tutor helps by
    cycling back over earlier chapters, setting timed written answers and keeping project work on schedule.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and IGCSE</h3>
  <p>
    IB Diploma results combine final papers with internal assessment, and its Mathematics comes as Analysis and
    Approaches or Applications and Interpretation, each at Standard or Higher Level. A tutor may talk through an
    Internal Assessment or Extended Essay but never writes it. For Cambridge IGCSE, command words, the correct tier and
    marked past papers carry most of the weight.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sr-classes">What does a tutor work on at each stage?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Classes 1 to 8</h3>
  <p>
    The goal at this age is sound habits: reading with understanding, quick mental sums, fractions and early algebra,
    and neat written work. Most younger children do well with a tutor at the table once or twice a week, and a
    Gujarati-medium child moving to English textbooks often needs help with vocabulary as much as with the subject.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    Maths and Science take a sharp step up in Class 9, and whatever is left shaky shows again in the board year. A
    workable Class 10 rhythm is to teach a chapter, test it, and move to full papers in the winter months. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 Maths preparation plan</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 Science notes</a> set out that routine.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    Senior classes reward a specialist. Science students tend to find Physics and Maths hardest, and commerce students
    Accountancy. Class 11 lays the ground for everything after, so it deserves as much effort as Class 12; see our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Physics strategies for Class 12</a> and
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sr-subjects">Which subjects can Surat tutors take?</h2>
  <p>
    Tutors on NXTutors teach Mathematics, Physics, Chemistry, Biology, English, Computer Science, Accountancy,
    Economics, Business Studies, Hindi and Sanskrit, and many cover every subject for primary children. For Gujarati
    as a subject, mention it in the request so we look for a tutor who teaches it. Surat has dedicated pages for
    <a href="{{ url('/maths-home-tutor-surat') }}">maths home tutors</a>,
    <a href="{{ url('/science-home-tutor-surat') }}">science home tutors</a>,
    <a href="{{ url('/physics-home-tutor-surat') }}">physics home tutors</a> and
    <a href="{{ url('/chemistry-home-tutor-surat') }}">chemistry home tutors</a>. In Class 12, Chemistry behaves like
    three subjects in one, with numerical Physical, reaction-based Organic and memory-heavy Inorganic sections, which
    our <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">guide to Organic and Inorganic Chemistry
    in Class 12</a> takes apart.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sr-jee-neet">Can a home tutor help with JEE or NEET in Surat?</h2>
  <p>
    Yes, working alongside a coaching programme rather than instead of it. A home tutor earns their fee in three ways:
  </p>
  <ul>
    <li><strong>Clearing the pile.</strong> Each week, go through the coaching sheets left unfinished and the test questions that went wrong.</li>
    <li><strong>One NCERT plan for two goals.</strong> The Class 11 and 12 NCERT books sit under both the board papers and the entrance tests, so a single revision schedule covers both.</li>
    <li><strong>Lifting the weak subject.</strong> Extra hours on the subject pulling the total down do more than equal time for all three.</li>
  </ul>
  <p>
    JEE Main is conducted by NTA in two sessions in the first half of the year, and candidates who qualify may sit JEE
    Advanced. NEET UG is held once a year, with Biology worth half the marks, so the NCERT Biology books need careful
    reading. Use only the current official information bulletin for dates. Our topic plans for
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE Maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE Physics</a>,
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE Chemistry</a> and
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET Biology from NCERT</a> go deeper. When coaching runs
    into the evening, a short online doubt session can replace a trip across town.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sr-mode">Home or online tuition in Surat?</h2>
  <p>
    Having the tutor in the room helps young children most, and any subject where the written working counts, such as
    Maths or Chemistry numericals. Online lessons widen the choice to tutors across India, which matters for IB,
    IGCSE and senior specialist papers. Surat's layout decides much of the rest:
  </p>
  <ul>
    <li><strong>The river.</strong> Crossing the Tapi at office hours adds to every trip, so a family in Adajan or Pal usually keeps a tutor from the western bank, and one in Athwa or Piplod a tutor from the south side.</li>
    <li><strong>The bus network.</strong> Sitilink BRTS has run since January 2014, from its first corridors to Sachin GIDC Naka and Sarthana Jakat Naka to later ones on the western bank and towards Kosad, so a home near a stop opens up tutors who do not ride a two-wheeler.</li>
    <li><strong>The metro, not yet.</strong> Both Red and Green lines are under construction and not open to passengers, so today's commute should not be planned around them.</li>
    <li><strong>The shift clock.</strong> In Udhna, Pandesara, Katargam and Varachha, estate and diamond-unit shift changes decide when the roads are clear.</li>
  </ul>
  <p>
    Plenty of families combine the two: a weekly lesson at home plus a short online session for doubts, with the same
    tutor. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">comparison of home and online tutors</a> sets
    out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sr-fees">What does a home tutor cost in Surat?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor
    sets their own fee, and in practice three things move it:
  </p>
  <ul>
    <li><strong>Class and board.</strong> Primary lessons usually cost less than senior classes, IB or IGCSE.</li>
    <li><strong>How specialised the help is.</strong> JEE Advanced problem work, IB Higher Level, and Internal Assessment or Extended Essay guidance sit at the top.</li>
    <li><strong>Distance and the river.</strong> A tutor coming over a bridge at a busy hour may build that into the fee, while one from your own locality rarely does.</li>
  </ul>
  <p>
    Every fee on your shortlist is visible before the demo, and we do not suggest tutors above the budget you give. The
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> sets fees out by class and subject, and our post on
    <a href="{{ url('/blog/home-tuition-fees-surat') }}">home tuition fees in Surat</a> looks at the local picture.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sr-choose">What should you watch for in the demo class?</h2>
  <p>A profile earns a tutor a place on the shortlist; the demo shows whether they belong there. Look for five things:</p>
  <ol>
    <li><strong>Questions before teaching.</strong> Did the tutor check what your child already knows?</li>
    <li><strong>Who did the work.</strong> Was your child writing and solving, or mostly listening?</li>
    <li><strong>Knowledge of the paper.</strong> Could they say how your board's exam is set this year, and in which medium?</li>
    <li><strong>A plan for the month.</strong> What comes next, and how will you know it is working?</li>
    <li><strong>A route that holds.</strong> Which road or bus, and at what time, every week?</li>
  </ol>
  <p>
    In a gated society, give the tutor's name to the security desk or add it to the visitor app before the demo; for a
    house in the old lanes, send the house number, a nearby landmark and a map pin. Keep lessons in a shared room with
    an adult at home. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">parents' demo class
    checklist</a> and advice on <a href="{{ url('/blog/how-to-choose-boardstream') }}">picking a board and stream</a>
    may also help.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sr-calendar">When in the year should tuition start?</h2>
  <p>
    CBSE's academic year opens in April; GSEB and other schools publish their own calendars, so check your school's
    dates. Most board years move through five phases:
  </p>
  <ul>
    <li><strong>April to June:</strong> fresh books and the summer holidays, the easiest time to fix last year's weak spots.</li>
    <li><strong>July to September:</strong> steady weekly lessons next to school, with unit tests and first-term exams.</li>
    <li><strong>October to December:</strong> completing the syllabus. Navratri and the Diwali holidays change evening routines across Gujarat, so fix lesson times for those weeks well ahead.</li>
    <li><strong>January to March:</strong> preliminary exams, sample papers and then the boards; the first JEE Main session usually falls in this stretch.</li>
    <li><strong>April to May:</strong> the second JEE Main session, then JEE Advanced and NEET UG, while IB and Cambridge students sit their May papers.</li>
  </ul>
  <p>
    Check every date against the official notice. A spring start gives a full year of steady work; a winter start
    still helps, with the focus on papers and exam technique.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sr-start">How do you get started in Surat?</h2>
  <p>
    Send the class, board and medium, the subjects, your locality with the nearest junction or BRTS stop, and the times
    that suit you. We reply with two or three matched tutors; you choose one for a free demo class and decide after it.
    Pick your locality from the zones above, browse <a href="{{ url('/tutors') }}">all tutors</a> or book a
    <a href="{{ url('/demo-class') }}">free demo class</a> straight away. If no home tutor is close enough yet, an
    online tutor from anywhere in India can start at once.
  </p>
  <p>
    For a longer walk through all five zones, with the housing, transport and timing of each, read our
    <a href="{{ url('/blog/surat-tuition-guide') }}">Surat tuition guide</a>.
  </p>
  <p class="sr-note">
    Elsewhere in Gujarat, see home tutors in <a href="{{ url('/city/ahmedabad') }}">Ahmedabad</a>, or browse
    <a href="{{ url('/city') }}">cities across India</a>.
  </p>
  <p class="sr-note">
    Teaching in Surat? See <a href="{{ url('/tuition-jobs/surat') }}">home tuition jobs in Surat</a> and the
    localities where families are asking for tutors.
  </p>
  </section>

  </div>
</article>
