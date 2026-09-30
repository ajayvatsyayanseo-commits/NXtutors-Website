{{--
  Long-form guide for the Indore city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for Indore parents
  choosing a home tutor: every figure is either live from the database or a
  published NXTutors policy, local facts come from the cited research in
  database/seo-content/areas/indore-research.json, and no school, college,
  coaching institute, society, developer, hospital or mall is named.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $inAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $inA = function (string $slug, string $label) use ($inAreaSlugs) {
      return in_array($slug, $inAreaSlugs, true)
          ? '<a href="' . e(url('/city/indore/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $inTutors = (int) ($hubCounts['tutors'] ?? 0);
  $inAreas = $allAreas->count();
@endphp

<article class="nx-guide in-guide" aria-labelledby="inGuideTitle">
  <h2 id="inGuideTitle">Home tuition in Indore: a parent's guide from Vijay Nagar to Rau</h2>

  <p class="nx-guide__lede in-lede">
    Indore is laid out less by old neighbourhood than by scheme number. The Indore Development Authority planned much of
    the east of the city as numbered schemes, so a family in Vijay Nagar may give its address as Scheme 54 or Scheme 78,
    with a sector and a plot. AB Road cuts through the middle from Rau in the south-west, past Bhawarkua and Palasia, to
    Vijay Nagar and Dewas Naka in the north-east, and a six-lane Ring Road loops round the eastern side. Many homes are
    independent houses on plots, while apartment towers and gated townships keep rising in Nipania, Mahalaxmi Nagar
    and along the Super Corridor. Add the city's reputation as a coaching centre for engineering and medical entrance exams, and a tutor
    here is usually judged on two things at once: whether they can reach your door on a busy evening, and whether they
    can work alongside a coaching timetable rather than against it.
  </p>
  <nav class="nx-guide__toc in-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#in-how">How matching works</a> ·
    <a href="#in-zones">The four zones</a> ·
    <a href="#in-boards">Boards</a> ·
    <a href="#in-classes">Classes</a> ·
    <a href="#in-subjects">Subjects</a> ·
    <a href="#in-jee-neet">JEE, NEET and coaching</a> ·
    <a href="#in-mode">Home or online</a> ·
    <a href="#in-fees">Fees</a> ·
    <a href="#in-choose">The demo class</a> ·
    <a href="#in-calendar">The school year</a> ·
    <a href="#in-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="in-how">How does NXTutors find a tutor for an Indore family?</h2>
  <p>
    You fill in a single request with the student's class and board, the subjects, your locality with its scheme,
    sector or colony, the free days and hours around school and coaching, whether you want lessons at home, online or
    a mix, and a budget. In return you get two or three tutors who fit that brief, each with a fee shown before anything
    is booked. The first lesson with the one you choose is a free demo. In Indore, four questions do most of the
    sorting:
  </p>
  <ul>
    <li><strong>Which side of the Ring Road are you on?</strong> East Indore, from Nipania to Kanadia Road, is easiest for tutors who already work along the Ring Road; the older centre and the south-west lean on AB Road instead.</li>
    <li><strong>Plot or tower?</strong> In an IDA sector of independent houses the tutor rings the bell; in a gated township or apartment tower the guard needs a name on the register first.</li>
    <li><strong>Is there a coaching timetable?</strong> Many Indore students in Classes 9 to 12 already attend coaching, so the tutor's slot has to fit around it, not clash with it.</li>
    <li><strong>What exactly is being taught?</strong> Board, class and medium are matched together. MP Board Class 10 Science in Hindi medium and CBSE Class 12 Physics for a JEE aspirant call for different tutors.</li>
  </ul>
  <p>
    The demo is an ordinary lesson on whatever the student is studying that week. If it is not a good fit, the next
    tutor on the shortlist is arranged, and changing tutor later is free as well.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="in-zones">Indore, zone by zone</h2>
  <p>
    @if($inTutors > 0)
      The Indore tutor list on this page draws on {{ number_format($inTutors) }} tutor profiles,
    @else
      The Indore tutor list on this page draws on our tutor profiles,
    @endif
    and @if($inAreas > 0){{ number_format($inAreas) }} localities @else each locality @endif
    have a page of their own, where tutors from that locality come first, then others from the same zone, then the
    rest of the city and online tutors. For planning home lessons we split Indore into four zones, starting in the
    north-east and working south-west along AB Road:
    <a href="#in-vijay">Vijay Nagar and AB Road</a>, <a href="#in-palasia">Palasia and Central Indore</a>,
    <a href="#in-ring">Nipania, Bicholi and the Ring Road</a> and <a href="#in-south">Bhawarkua, Rajendra Nagar and
    Rau</a>. These groupings are our own and do not follow ward boundaries.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="in-vijay">Vijay Nagar and AB Road: IDA schemes on the new metro</h3>
  <p>
    {!! $inA('vijay-nagar', 'Vijay Nagar') !!} is the large IDA-planned suburb in the east of the city, bounded by MR-9,
    MR-10 and the Eastern Ring Road, with AB Road running through it. It grew quickly from the late 1990s and is now as
    much a commercial hub as a place to live. Around it lie the numbered schemes.
    {!! $inA('scheme-54', 'Scheme 54') !!} shares Vijay Nagar's postcode, holds Meghdoot Garden and much of the area's
    shops and offices, and mixes plotted houses with apartment buildings. {!! $inA('scheme-74', 'Scheme 74') !!},
    including 74-C, is quieter, with parks and independent houses on sector roads.
    {!! $inA('scheme-78', 'Scheme 78') !!} runs in sectors and slices, with the Aranya Nagar pocket inside it and the
    Dewas Naka side of AB Road to the north, while {!! $inA('scheme-114', 'Scheme 114') !!} is a newer mix of
    apartments and plots near MR-11. {!! $inA('sukhliya', 'Sukhliya') !!}, rural until the 1990s, is now a patchwork
    of colonies such as Heera Nagar, Nyay Nagar and Kabir Khedi, with MR-10 and the Airport Road passing through.
    Out on the {!! $inA('super-corridor', 'Super Corridor') !!}, the planned road linking AB Road with the Ujjain road
    and the airport, gated townships and row houses sit beside large IT campuses.
  </p>
  <p>
    This is the zone the Yellow Line serves. Its first five stations, along the Super Corridor, opened on 31 May 2025,
    and on 6 September 2026 regular service began on the second stretch, eleven stations from Super Corridor 2 to
    Malviya Nagar Chauraha, including MR 10 Road, ISBT, Hira Nagar, Bapat Chauraha, Meghdoot Garden and Vijay Nagar
    Chauraha. A tutor living anywhere along it can now ride in and finish on foot or by auto. Plotted sectors are
    doorstep visits; townships register the tutor at the gate once. The squares around Vijay Nagar fill up in the
    evening shopping hours, so a class that starts a little before the rush holds its time better.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="in-palasia">Palasia and Central Indore: the old centre along AB Road</h3>
  <p>
    AB Road divides {!! $inA('old-palasia', 'Old Palasia') !!} from {!! $inA('new-palasia', 'New Palasia') !!}, and
    together they form one of the densest parts of the city, with houses, villas and apartment buildings among clinics,
    offices and a well-known food street. The wider Palasia area is also an education hub, full of coaching institutes.
    {!! $inA('race-course-road', 'Race Course Road') !!}, near South Tukoganj, keeps older kothis next to builder floors.
    South of the centre, {!! $inA('manorama-ganj', 'Manorama Ganj') !!} is green and quiet, and
    {!! $inA('geeta-bhawan', 'Geeta Bhawan') !!}, named after its temple, combines IDA flats, cooperative housing
    societies and a few hundred private houses around Geeta Bhawan Square. {!! $inA('lig-colony', 'LIG Colony') !!},
    an IDA colony in lettered sectors, sits on AB Road between Palasia and Vijay Nagar. On the Kanadia Road side,
    {!! $inA('saket-nagar', 'Saket Nagar') !!} and {!! $inA('tilak-nagar', 'Tilak Nagar') !!} are settled mid-income
    localities of apartments, houses and plots, with the Eastern Ring Road close by.
  </p>
  <p>
    No metro station is open in this zone yet. The Yellow Line is planned to continue from Malviya Nagar Chauraha
    through Bengali Square, Patrakar Colony and an underground station at Palasia Square towards the railway station,
    but until those stations open, tutors come by city bus, auto or two-wheeler. Indore's BRTS lanes, which once ran
    down AB Road from 2013, have since been dismantled after a Madhya Pradesh High Court order in February 2025, so do
    not plan around them. Parking near Palasia and Geeta Bhawan squares is tight in the evening; an after-school slot
    or a later one avoids it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="in-ring">Nipania, Bicholi and the Ring Road: towers and new plots in the east</h3>
  <p>
    The six-lane Ring Road, built by the IDA, is the spine of this zone, with junctions at Mahalaxmi, Malviya Nagar,
    Khajrana Ganesh Temple, Bengali Square and World Cup Square. {!! $inA('nipania', 'Nipania') !!} is growing fast,
    with apartment societies and gated projects alongside builder floors and plots, and
    {!! $inA('mahalaxmi-nagar', 'Mahalaxmi Nagar') !!}, next to the Eastern Ring Road, has become a cluster of
    high-rise buildings since the 2000s. {!! $inA('khajrana', 'Khajrana') !!} is older, known for its Ganesh temple,
    with tight lanes and houses beside newer colonies such as Ganeshpuri. Further south,
    {!! $inA('scheme-94', 'Scheme 94') !!} and {!! $inA('scheme-140', 'Scheme 140') !!} are IDA layouts of houses,
    plots and apartments, {!! $inA('pipliyahana', 'Pipliyahana') !!} is a developing area of planned layouts round its
    Ring Road junction, and {!! $inA('kanadia-road', 'Kanadia Road') !!} runs out from Bengali Square past business
    parks and apartment blocks. {!! $inA('bicholi-mardana', 'Bicholi Mardana') !!}, at the eastern edge near the
    bypass, is where many families have moved for plots and houses away from the centre.
  </p>
  <p>
    Malviya Nagar Chauraha has been the eastern end of the working Yellow Line since September 2026, so Mahalaxmi
    Nagar and Nipania families can draw on tutors who come by metro and finish by auto. Mumtaj Bag Colony, Khajrana
    Square, Bengali Square and Patrakar Colony are approved stations that are not yet open. Until then the Ring Road,
    with flyovers at Bengali Square, World Cup Square and Teen Imli Square, carries most tutors in. Its junctions crowd
    at office closing time, and the temple junction at Khajrana is busy on festival days, so weekday slots either side
    of the peak are easier to keep. In Bicholi Mardana fewer tutors live locally, so expect someone from Pipliyahana or Vijay
    Nagar.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="in-south">Bhawarkua, Rajendra Nagar and Rau: the student belt and the south-west</h3>
  <p>
    {!! $inA('bhawarkua', 'Bhawarkua') !!}, also written Bhanwarkuan, sits on AB Road and the Ujjain to Khandwa road
    and has hosted university campuses since the 1950s. Today it is a student hub of coaching institutes, hostels and
    rented rooms, with more than fifteen sectors of family houses behind the main road.
    {!! $inA('navlakha', 'Navlakha') !!}, next door, takes its name from its temple and is known for the bus stand
    where many long-distance services begin, and {!! $inA('sapna-sangeeta', 'Sapna Sangeeta Road') !!} is a shopping
    street with apartments, builder floors and plots behind it. {!! $inA('sudama-nagar', 'Sudama Nagar') !!}, in the
    west, is mostly independent houses, linked by Annapurna Road to {!! $inA('rajendra-nagar', 'Rajendra Nagar') !!},
    a green sector-plan locality that took shape from the 1960s. Beyond it, {!! $inA('bijalpur', 'Bijalpur') !!} has
    grown from farmland into mid-income apartments and houses around Bijalpur Square. {!! $inA('rau', 'Rau') !!} is a
    nagar panchayat of its own on AB Road towards Mhow, where the Pithampur road branches off, and
    {!! $inA('silicon-city', 'Silicon City') !!} is its newer residential quarter of apartments and plotted pockets.
  </p>
  <p>
    This zone runs on rail and road rather than metro. Rajendra Nagar and Rau stations are on the Akola to Ratlam line,
    Saifee Nagar is the nearest halt for Bhawarkua, and city buses run along AB Road all day. Most homes here are
    houses, so the tutor comes to the door; newer projects in Rau and Silicon City keep a gate register. Bhawarkua is
    crowded most of the day with students, and AB Road towards Rau is heavier at school and office closing times, so
    early evening or a later slot is usually steadier. Fewer tutors live in Rau itself; many travel out from Rajendra
    Nagar.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="in-boards">Which boards do Indore tutors teach?</h2>
  <p>
    Indore families study under several boards: CBSE schools across the city, the state's MP Board, CISCE schools teaching ICSE and ISC, and a smaller group following the IB or Cambridge IGCSE. We match
    on board first, because the same chapter is examined very differently from one to the next.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    CBSE papers rest on the NCERT textbooks, and a growing share of each paper tests whether a student can apply an
    idea: case-based passages, assertion and reason, questions in unfamiliar settings. A good CBSE tutor starts from the
    NCERT text, works through the board's sample papers and marking schemes, and insists on full working so that step
    marks are never lost.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>MP Board</h3>
  <p>
    The Board of Secondary Education, Madhya Pradesh, conducts the state's Class 10 and Class 12 examinations, and
    many Indore students take them, in Hindi or English medium. Ask for a tutor who teaches in the student's medium,
    uses the board's own textbooks and past papers, and can explain terms in both languages where needed. Take exam
    rules and dates only from the board's official notices.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    CISCE sets ICSE in Class 10 and ISC in Class 12. Both reward long, well-organised written answers across a wide
    syllabus, and English includes set literature texts. Breadth is the usual difficulty, so the tutor's task is to
    keep every chapter in rotation, set timed answers often, and keep internal assessment and project work on track.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and IGCSE</h3>
  <p>
    IB Diploma Mathematics is taught as Analysis and Approaches or Applications and Interpretation, each at Standard or
    Higher Level, and internally assessed work counts towards the grade. A tutor may discuss an Internal Assessment or
    Extended Essay but must not write it. For Cambridge IGCSE, command words, the correct tier and marking against past
    schemes matter most.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="in-classes">What does a tutor focus on at each stage?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Classes 1 to 8</h3>
  <p>
    In the younger years the tutor is building routines: reading with understanding, quick mental sums, fractions and
    early algebra, and neat notebooks. One tutor for all subjects, once or twice a week at home, usually suits this age.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    Maths and Science jump in difficulty in Class 9, and Class 10 builds directly on it, so weak Class 9 topics catch up
    with a student in the board year. Work chapter by chapter, test each one, then move to full papers from the winter.
    Our <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 Maths preparation plan</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 Science notes</a> set out the sequence.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    Senior classes need subject specialists. Physics and Maths trouble science students most, Accountancy troubles
    commerce students, and Class 11 carries the foundations for everything after it. See our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 Physics strategies</a> and
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="in-subjects">Which subjects can an Indore tutor cover?</h2>
  <p>
    Tutors on NXTutors teach Mathematics, Physics, Chemistry, Biology, English, Computer Science, Accountancy,
    Economics, Business Studies, Hindi and Sanskrit, and many take every subject for primary children. Indore has its
    own pages for <a href="{{ url('/maths-home-tutor-indore') }}">maths home tutors</a>,
    <a href="{{ url('/science-home-tutor-indore') }}">science home tutors</a>,
    <a href="{{ url('/physics-home-tutor-indore') }}">physics home tutors</a> and
    <a href="{{ url('/chemistry-home-tutor-indore') }}">chemistry home tutors</a>. Chemistry in Class 12 splits into
    numerical physical chemistry, reaction-based organic chemistry and memory-heavy inorganic chemistry, which our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">organic and inorganic chemistry guide</a>
    takes apart. For MP Board students, a tutor who can move between Hindi and English terms is often worth asking for.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="in-jee-neet">How does a home tutor fit around JEE or NEET coaching in Indore?</h2>
  <p>
    Indore is a major coaching centre, with institutes clustered around Palasia and Bhawarkua. Most JEE and NEET aspirants here already attend coaching, so a home
    tutor is rarely a replacement. The useful role is the gap coaching leaves:
  </p>
  <ul>
    <li><strong>Clearing the doubt pile.</strong> Big batches move fast. A weekly session to go through the week's sheet, the questions got wrong in the last test, and anything skipped keeps the backlog from growing.</li>
    <li><strong>Holding the board exam in view.</strong> Coaching timetables often push school work aside. Class 12 NCERT content underpins both the boards and the entrance papers, so a tutor can plan one revision cycle that serves both.</li>
    <li><strong>Working on one subject.</strong> If Chemistry or Physics is dragging the total down, concentrated hours on that one subject do more than an even split.</li>
    <li><strong>Protecting the timetable.</strong> With school, coaching and travel, the week is full. A tutor at home, or online late in the evening, saves one more journey.</li>
  </ul>
  <p>
    NTA holds JEE Main in two sessions in the first half of the year, and those who qualify can sit JEE Advanced. NEET
    UG is held once a year, and Biology carries half its marks, so the NCERT Biology books need close reading. Take all
    dates from that year's official information bulletin. For subject plans, see
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE Maths topic by topic</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE Physics preparation</a>,
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE Chemistry across its three parts</a> and
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET Biology, NCERT first</a>. Our article on
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching versus a home tutor for
    JEE</a> was written for Gurugram, but the reasoning carries over to Indore.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="in-mode">Home or online tuition in Indore?</h2>
  <p>
    A tutor sitting beside the student helps most with younger children and with subjects where the working counts,
    such as Maths and Chemistry numericals. Online lessons widen the choice to tutors across India, which is useful for
    IB, IGCSE and senior specialist work. In Indore, a few local facts tip the balance:
  </p>
  <ul>
    <li><strong>The metro covers the north-east only.</strong> Sixteen Yellow Line stations are in service, from the Super Corridor to Malviya Nagar Chauraha. Palasia, Bengali Square, Khajrana and the railway station are planned but not open, so the centre and south still rely on road.</li>
    <li><strong>The Ring Road links the east.</strong> For Nipania, Khajrana, Pipliyahana and Kanadia Road, a tutor who already works along the Ring Road is easier to keep week after week.</li>
    <li><strong>AB Road links the rest.</strong> From Rau to Dewas Naka it passes most of the city; a tutor on your stretch of it is a practical choice for south and central homes.</li>
    <li><strong>Coaching fills the evening.</strong> For students who come home late from coaching, a short online session for doubts often fits where a home visit cannot.</li>
  </ul>
  <p>
    Many families settle on one weekly home lesson and one shorter online session with the same tutor. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">comparison of home and online tutors</a> goes through the
    trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="in-fees">How much does a home tutor cost in Indore?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets
    their own fee, and in Indore these are the things that usually move it:
  </p>
  <ul>
    <li><strong>Class and board.</strong> Primary lessons generally cost less than senior-school, IB or IGCSE teaching.</li>
    <li><strong>Exam depth.</strong> JEE Advanced problem solving, IB Higher Level and support for IA or Extended Essay work sit at the higher end.</li>
    <li><strong>The journey.</strong> A tutor crossing from the south-west to Nipania, or to a township on the Super Corridor, may factor the trip in; one from your own scheme or colony usually will not.</li>
    <li><strong>Frequency and length.</strong> Longer sessions or several a week change the monthly total, so compare like with like.</li>
  </ul>
  <p>
    You see every shortlisted tutor's fee before the demo, and no one above your budget is put forward. The
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> breaks fees down by class and subject, and our post on
    <a href="{{ url('/blog/home-tuition-fees-indore') }}">home tuition fees in Indore</a> covers the city in more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="in-choose">What should you look for at the demo class?</h2>
  <p>A profile earns a place on the shortlist; the demo tells you whether to keep the tutor. Watch for five things:</p>
  <ol>
    <li><strong>Finding the starting point.</strong> Did the tutor check what the student already knows before explaining anything?</li>
    <li><strong>Who does the work.</strong> Was the student writing and solving, or mostly listening?</li>
    <li><strong>Knowing the paper.</strong> Could the tutor say how your board, CBSE, MP Board or CISCE, sets this year's paper?</li>
    <li><strong>A plan you can check.</strong> What will the next month cover, and how will you know it is working?</li>
    <li><strong>A slot that survives.</strong> Does the timing fit around coaching, and can the tutor keep it on busy evenings?</li>
  </ol>
  <p>
    For a gated township or apartment tower, give the tutor's name to the guard or visitor app before the demo; for a
    house in an IDA sector, share the scheme, sector, plot number and a map pin. Keep lessons in a shared room with an
    adult at home. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for
    parents</a> and guide to <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a>
    may help with the decision.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="in-calendar">When is the right time to start tuition?</h2>
  <p>CBSE's session begins in April. Check your own school's calendar, especially for MP Board and ICSE schools. A board year usually runs like this:</p>
  <ul>
    <li><strong>April to June:</strong> new books and the summer break make this the easiest start, with time to close last year's gaps.</li>
    <li><strong>July to September:</strong> regular weekly lessons alongside school, with chapter tests and, in many schools, the first term exams.</li>
    <li><strong>October to December:</strong> the syllabus is finished, and many schools hold pre-boards around the new year.</li>
    <li><strong>January to March:</strong> board exams follow a run of sample papers, and the first JEE Main session usually falls here.</li>
    <li><strong>April to May:</strong> the second JEE Main session, then JEE Advanced and NEET UG; IB and Cambridge candidates sit their May papers.</li>
  </ul>
  <p>
    Confirm every date from the official notices. Starting in spring gives a whole year to work with, but a winter
    start is still worthwhile if the focus moves to papers and exam technique.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="in-start">How do you get started in Indore?</h2>
  <p>
    Send us the class, board, subjects, your locality with its scheme or colony, and the times that work around school
    and coaching. We come back with two or three matched tutors; pick one for a free demo class and decide after it.
    Choose your locality from the list above, browse <a href="{{ url('/tutors') }}">all tutors</a>, or book a
    <a href="{{ url('/demo-class') }}">free demo class</a> directly. Where no home tutor is close enough yet, an online
    tutor from anywhere in India can begin straight away.
  </p>
  <p>
    Looking at one side of the city? Our local guides cover
    <a href="{{ url('/blog/vijay-nagar-and-east-indore-tuition-guide') }}">Vijay Nagar and East Indore</a> and
    <a href="{{ url('/blog/central-and-south-indore-tuition-guide') }}">Central and South Indore</a>.
  </p>
  <p class="in-note">
    Elsewhere in Madhya Pradesh, see home tutors in <a href="{{ url('/city/bhopal') }}">Bhopal</a>, or browse
    <a href="{{ url('/city') }}">cities across India</a>.
  </p>
  <p class="in-note">
    Teaching in Indore? See <a href="{{ url('/tuition-jobs/indore') }}">home tuition jobs in Indore</a> and the
    localities where families are asking for tutors.
  </p>
  </section>

  </div>
</article>
