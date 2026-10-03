{{--
  Long-form guide for the Raipur city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for Raipur parents
  choosing a home tutor: every figure is either live from the database or a
  published NXTutors policy, local facts come only from the cited research in
  database/seo-content/areas/raipur-research.json, and no school, college,
  coaching institute, society, developer, hospital or mall is named. Nava
  Raipur is mentioned only as the planned capital city nearby.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $rprAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $rprA = function (string $slug, string $label) use ($rprAreaSlugs) {
      return in_array($slug, $rprAreaSlugs, true)
          ? '<a href="' . e(url('/city/raipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $rprTutors = (int) ($hubCounts['tutors'] ?? 0);
  $rprAreas = $allAreas->count();
@endphp

<article class="nx-guide rpr-guide" aria-labelledby="rprGuideTitle">
  <h2 id="rprGuideTitle">Home tuition in Raipur: a family guide from Kota to Kamal Vihar</h2>

  <p class="nx-guide__lede rpr-lede">
    Raipur has grown outwards from an old core around the railway station and the Pandri markets. To the east, the
    colonies of Shankar Nagar and Telibandha give way to new plots along Vidhan Sabha Road; to the south, Ring Road
    junctions lead to the planned sectors off Dhamtari Road; to the west, the Great Eastern Road and the highway towards
    Bhilai carry the city to Tatibandh and Kabir Nagar. Beyond the eastern edge lies Nava Raipur, the planned capital
    city nearby. For a parent, that spread matters more than any map: a tutor who lives on your side of the city, and
    who is free at the hour your child is, is the tutor who will still be coming in February.
  </p>
  <nav class="nx-guide__toc rpr-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#rpr-how">How matching works</a> ·
    <a href="#rpr-zones">Four zones</a> ·
    <a href="#rpr-boards">Boards</a> ·
    <a href="#rpr-classes">Classes</a> ·
    <a href="#rpr-subjects">Subjects</a> ·
    <a href="#rpr-jee-neet">JEE &amp; NEET</a> ·
    <a href="#rpr-mode">Home or online</a> ·
    <a href="#rpr-fees">Fees</a> ·
    <a href="#rpr-choose">The demo class</a> ·
    <a href="#rpr-calendar">The school year</a> ·
    <a href="#rpr-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="rpr-how">How NXTutors puts a Raipur family in touch with a tutor</h2>
  <p>
    Everything begins with one request, and the more exact it is, the better the shortlist. Tell us the class and
    board, which subjects are hurting, the colony plus something recognisable near your gate, the windows left after
    school and coaching, home or online or a blend, and roughly what you can spend each month. Two or three matched
    tutors are then proposed. Their fees are visible to you up front, before any visit is arranged, and the first class
    with your chosen tutor costs nothing. Four Raipur questions decide who makes that list:
  </p>
  <ul>
    <li><strong>Your side of the city.</strong> A tutor already teaching in the next colony keeps coming through the monsoon and the exam months; one who has to cross from Tatibandh to Saddu often drops off.</li>
    <li><strong>The real free hour.</strong> Many Raipur teenagers fit a coaching batch into the afternoon, which pushes tuition to dawn or late evening. We only propose people who can actually come then.</li>
    <li><strong>Board and medium.</strong> CGBSE, CBSE, ICSE and ISC, IB and IGCSE all prepare students differently, and one child may think most easily in Hindi, another in English, a third in both.</li>
    <li><strong>How the tutor gets in.</strong> An independent house means the tutor rings the bell; an apartment complex means a guard and a visitor register, which is worth sorting out before the demo.</li>
  </ul>
  <p>
    Treat that free first class as an ordinary session on this week's chapter. Not the right fit? We line up the next
    tutor on the list, and a change of tutor further down the road is free as well.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpr-zones">Raipur in four zones</h2>
  <p>
    @if($rprTutors > 0)
      The tutors shown for Raipur are drawn from {{ number_format($rprTutors) }} tutor profiles,
    @else
      The tutors shown for Raipur are drawn from our tutor profiles,
    @endif
    and @if($rprAreas > 0){{ number_format($rprAreas) }} Raipur localities @else every Raipur locality we cover @endif
    have their own page. On those pages the order is: people living in that locality, then the rest of its zone, then
    the wider city, then teachers who work online. When we plan home visits we think of Raipur as four zones:
    <a href="#rpr-central">Central Raipur</a>, around the station and the old markets;
    <a href="#rpr-east">East Raipur</a>, from Shankar Nagar to the Vidhan Sabha Road side;
    <a href="#rpr-south">South Raipur</a>, along the Ring Road and Dhamtari Road; and
    <a href="#rpr-west">West Raipur</a>, on the Great Eastern Road and the Bhilai highway. These groups are our own
    working map, not municipal wards.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="rpr-central">Central Raipur: the station, the markets and the colonies between them</h3>
  <p>
    {!! $rprA('samta-colony', 'Samta Colony') !!} sits in the middle of the city, run by the Raipur Municipal
    Corporation and bordered by Choubey Colony, Amanaka, Bajrang Nagar, Gokul Nagar and Amapara, with banks, temples
    and a Jain mandir inside the neighbourhood. {!! $rprA('gudhiyari', 'Gudhiyari') !!}, beside Shrinagar, Gokul Nagar
    and Ramnagar, is mostly flats with its own busy shopping streets. {!! $rprA('devendra-nagar', 'Devendra Nagar') !!}
    lies between Pandri and Fafadih in numbered sectors, and is largely independent houses and builder floors.
    {!! $rprA('pandri', 'Pandri') !!} is known for its commercial streets and for the city bus stand that closed when the
    new inter-state terminal at Bhatagaon opened in November 2021; its homes are mostly houses, with some apartments.
    {!! $rprA('fafadih', 'Fafadih') !!} is centred on the chowk where the six-lane expressway towards Nava Raipur begins,
    with flats, plots and offices side by side.
  </p>
  <p>
    Raipur Junction, opened in 1888 on the Howrah-Nagpur-Mumbai line, is the reference point for this whole zone and is
    close to every locality in it, which suits tutors who come in by train. BRTS buses linking the station with Nava
    Raipur pass through this side of the city. Because the zone is central, families here can usually choose from tutors
    living on almost any side of Raipur. The catch is the evening: roads towards the station and the market streets of
    Pandri fill up after work, so lock in a slot early, or pick a tutor from your own sector.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="rpr-east">East Raipur: Shankar Nagar, the lake and the Vidhan Sabha Road plots</h3>
  <p>
    {!! $rprA('shankar-nagar', 'Shankar Nagar') !!} is one of the city's well-known residential areas, surrounded by
    Telibandha, Avanti Vihar, VIP Colony, Jivan Vihar and Khamardih, with apartment buildings, builder floors, villas and
    houses; residents say autos and cabs are easy to find. {!! $rprA('avanti-vihar', 'Avanti Vihar') !!}, just off VIP
    Road, is usually treated as part of the same area. {!! $rprA('telibandha', 'Telibandha') !!} takes its name from the
    village around Telibandha Lake, built in 1835 and now a lakeside promenade on Gaurav Path that locals call Marine
    Drive. Further north-east, {!! $rprA('mowa', 'Mowa') !!}, once counted as a census town, sits beside Vidhan Sabha Road
    with {!! $rprA('daldal-seoni', 'Daldal Seoni') !!} next to it, and {!! $rprA('saddu', 'Saddu') !!}, near Ama Seoni
    and Parsulidih, is still filling up, mostly plots on which families build their own houses.
  </p>
  <p>
    The old narrow-gauge line through Telibandha has closed and its route became the expressway, so this zone moves by
    road: two-wheeler, car or auto. One trap for a first visit: Avanti Vihar off VIP Road and Avani Vihar near Mowa are
    different places, so always send the full address. Apartment complexes in Shankar Nagar and Daldal Seoni keep visitor
    registers; plotted homes in Saddu need a map pin. The lakefront gets crowded in the evening and at weekends, and
    Vidhan Sabha Road is steady at office hours, so set lesson times with that in mind.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="rpr-south">South Raipur: Ring Road junctions and planned sectors</h3>
  <p>
    {!! $rprA('new-rajendra-nagar', 'New Rajendra Nagar') !!}, next to Shailendra Nagar, Tagore Nagar and Priyadarshini
    Nagar, sits where NH-30 meets the Telibandha ring road stretch of NH-53, with the Katora Talab and Rajendra Nagar
    markets close by. {!! $rprA('pachpedi-naka', 'Pachpedi Naka') !!} is the junction of Dhamtari Road and the Ring Road,
    with homes and shopfronts around it. {!! $rprA('amlidih', 'Amlidih') !!} is mostly independent houses and plots on
    wide new roads, with Amlidih Main Road heading towards the airport, and
    {!! $rprA('mahaveer-nagar', 'Mahaveer Nagar') !!}, near Vishal Nagar, mixes villas, apartments and plots.
    {!! $rprA('bhatagaon', 'Bhatagaon') !!}, beside Kathadih, Kandul and Professor Colony, holds the city's inter-state
    bus terminal on 25 acres. {!! $rprA('kamal-vihar', 'Kamal Vihar') !!}, also known as Kaushalya Mata Vihar, is a
    planned township laid out in numbered sectors, with plotted houses, row houses and apartment blocks.
  </p>
  <p>
    Planned layouts make this zone easy to navigate once a tutor has the sector, block and plot number, and the bus
    terminal at Bhatagaon is a landmark everyone knows. Most homes in Amlidih and Mahaveer Nagar are houses, so arrival is
    at the door; apartment blocks will ask the tutor's name at the gate. Pachpedi Naka carries heavy traffic, including
    goods vehicles, and roads near the bus terminal get busy as long-distance buses come and go. A tutor living on your
    side of the Ring Road is worth more here than one who is slightly cheaper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="rpr-west">West Raipur: the Great Eastern Road and the Bhilai side</h3>
  <p>
    {!! $rprA('kota', 'Kota') !!} lies along the Great Eastern Road, next to Amanaka, Samta Colony and Kota Colony, joined
    to its neighbours by Gudhiyari Road, Kota Road and Hirapur Road; it is mostly apartments, with houses, plots and
    builder floors, and the Hirapur vegetable market nearby. {!! $rprA('tatibandh', 'Tatibandh') !!} is centred on the
    chowk where NH-53 meets Ring Road No. 2; a flyover there has been completed, and the expressway to Bilaspur starts
    here. {!! $rprA('sarona', 'Sarona') !!}, near Amanaka and Tatibandh, has wide roads, parks and its own small railway
    station. {!! $rprA('kabir-nagar', 'Kabir Nagar') !!} is a large planned housing colony near the Raipur-Bhilai-Durg
    highway, built in phases, with independent houses and multi-storey blocks of smaller flats.
  </p>
  <p>
    West Raipur is the zone where local trains are genuinely useful: Sarona and Saraswati Nagar stations serve this side
    alongside Raipur Junction, so a tutor can ride a train and finish by auto. The highway, by contrast, carries heavy
    vehicles all day, and crossing it at Tatibandh or the Great Eastern Road at Kota eats into a lesson. Kabir Nagar's
    block and house numbers make first visits simple; in Tatibandh's apartment complexes, ask the gate whether a tutor
    who comes every week can have a standing pass.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpr-glance">The four zones at a glance</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Central Raipur</h3>
  <p>
    Houses, builder floors and flats around Raipur Junction. Arrival is mostly at the door. Widest choice of tutors;
    agree an early or late slot to stay clear of station and market traffic.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>East Raipur</h3>
  <p>
    Apartments and villas in Shankar Nagar and Avanti Vihar, plots in Saddu. Road travel only. Check the exact address
    (Avanti Vihar or Avani Vihar) and register the tutor at complex gates.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>South Raipur</h3>
  <p>
    Numbered sectors, plotted houses and newer apartment blocks off the Ring Road. Send sector and plot numbers. A tutor
    who lives on your side of Pachpedi Naka keeps lessons on time.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>West Raipur</h3>
  <p>
    Apartments in Kota and Tatibandh, a planned colony in Kabir Nagar. Local trains stop at Sarona. Match someone living
    on your side of the highway and ask about a regular visitor pass.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpr-boards">CGBSE, CBSE or ICSE: which board is your child on?</h2>
  <p>
    Four kinds of syllabus run side by side in Raipur classrooms: the Chhattisgarh state board, CBSE, CISCE's ICSE and
    ISC, and, for fewer students, IB or Cambridge IGCSE. Strength in one does not transfer neatly to another, which is
    why a Raipur request is matched on board and class together.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Chhattisgarh Board of Secondary Education (CGBSE)</h3>
  <p>
    Known in Hindi as Chhattisgarh Madhyamik Shiksha Mandal, the state board conducts the High School (Class 10) and
    Higher Secondary (Class 12) examinations, and its official site, cgbse.nic.in, publishes their admit cards, results
    and notices. A good CGBSE tutor teaches from the board's own prescribed books, practises on its papers and switches
    into Hindi whenever the student needs it. Read exam patterns and dates on that site, not on forwarded messages.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    NCERT books are the backbone of every CBSE paper, and more questions now test whether a concept can be used in an
    unfamiliar setting. That helps a student who also has an entrance exam in view. The weak spot is usually written
    presentation: after a year of option-ticking, full board answers with every step shown need regular practice.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    CISCE sets ICSE at Class 10 and ISC at Class 12. Both mean lengthy written papers, a broad syllabus and prescribed
    English literature. Covering everything with time left for revision is the real challenge, so the tutor should map
    the year chapter by chapter and keep an eye on projects and practicals.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and IGCSE</h3>
  <p>
    IB Diploma and IGCSE students in Raipur, frequently from families who relocated for work, tend to need an online
    specialist. IB grades include coursework, where a tutor can advise on an Internal Assessment or Extended Essay but
    the writing stays the student's own; IGCSE is won through timed past papers marked the way Cambridge marks them.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpr-classes">What a tutor should work on at each stage</h2>
  <ul>
    <li><strong>Primary and middle school (Classes 1 to 8).</strong> Reading without stumbling, quick and accurate arithmetic, and copies that are complete. Plenty of Raipur children speak Chhattisgarhi or Hindi at home and learn in English at school; a short spell of reading aloud each session pays back more than another worksheet. Foundation courses for entrance exams can wait until Class 8 maths is truly in place.</li>
    <li><strong>The board run-up (Classes 9 and 10).</strong> Maths and Science get noticeably harder in Class 9, the same year many students join a batch. A tutor keeps school chapters moving so Class 10 is revision, not catch-up. Our <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 Maths preparation plan</a> and <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 Science notes</a> are built chapter by chapter on NCERT.</li>
    <li><strong>Senior school (Classes 11 and 12).</strong> Class 11 is the steepest climb and holds a large share of the entrance syllabus; whatever is skipped there resurfaces in Class 12. One specialist per tough subject is the safer plan. For the board year, see our posts on <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 Physics</a> and <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra</a>.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpr-subjects">Subjects Raipur tutors teach</h2>
  <p>
    The science-and-maths group (Mathematics, Physics, Chemistry, Biology) makes up most Raipur requests from Class 9.
    Tutors listed on NXTutors cover English, Hindi, Sanskrit, Social Science, Computer Science, Accountancy, Economics and
    Business Studies as well, and plenty handle every subject for younger children. Dedicated Raipur pages:
    <a href="{{ url('/maths-home-tutor-raipur') }}">maths</a>,
    <a href="{{ url('/science-home-tutor-raipur') }}">science</a>,
    <a href="{{ url('/physics-home-tutor-raipur') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-raipur') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-raipur') }}">biology</a> and
    <a href="{{ url('/english-home-tutor-raipur') }}">English</a> home tutors, plus board pages for
    <a href="{{ url('/cbse-home-tutor-raipur') }}">CBSE</a>, <a href="{{ url('/icse-home-tutor-raipur') }}">ICSE</a>
    and the <a href="{{ url('/chhattisgarh-board-tutor-raipur') }}">Chhattisgarh board</a>.
  </p>
  <p>
    A few principles hold whatever the subject. Maths repair starts wherever the first crack appeared, which may be a
    topic from an earlier year. Physics sticks when the student can explain why a result holds, not just quote it.
    Chemistry splits three ways, with calculation in Physical, mechanisms in Organic and attentive memory work in
    Inorganic; our <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Class 12 Chemistry post</a>
    takes the last two in turn. For a student moving from Hindi-medium to English-medium textbooks, the tutor should
    pair each new term with its Hindi meaning for a few weeks and then wean the student off it, and our
    <a href="{{ url('/blog/spoken-english-for-students') }}">spoken English guide</a> adds daily speaking practice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpr-jee-neet">Home tuition alongside JEE or NEET coaching in Raipur</h2>
  <p>
    For entrance aspirants in Raipur the tutor's role is normally to support a coaching course, not to stand in for one.
    Some parents consider moving a fifteen-year-old to a coaching town; others prefer local coaching with a tutor at
    home. The second route works when the tutor is given specific jobs:
  </p>
  <ol>
    <li><strong>Doubt clearing every week.</strong> Take the batch's problem sheets and the newest test, and settle each half-solved question before the next chapter starts.</li>
    <li><strong>Joint revision.</strong> NCERT for Class 12 underpins the board exam and the entrance syllabus alike, so a single revision calendar can cover both.</li>
    <li><strong>Targeted hours.</strong> Put the extra time into whichever subject is costing the most marks rather than dividing it evenly.</li>
    <li><strong>A slot that does not move.</strong> Before school, after the batch, or a Sunday block; settle it at the start.</li>
  </ol>
  <p>
    JEE Main, run by NTA, has two sessions in the first half of the year, and candidates who clear it can attempt JEE
    Advanced. NEET UG comes once a year and Biology is half of the paper, which is why NCERT Biology is read line by line.
    Treat only the current official information bulletin as a source for dates. See our Raipur pages for
    <a href="{{ url('/jee-home-tutor-raipur') }}">JEE</a> and <a href="{{ url('/neet-home-tutor-raipur') }}">NEET</a>
    home tutors, and hand your tutor our chapter plans for
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">Maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">Physics</a> and
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">Chemistry</a> for JEE, and
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NCERT-led NEET Biology</a>. The trade-offs between a batch and
    one-to-one help are laid out in <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">our JEE
    coaching versus home tutor piece</a>; it was written about Gurugram, yet the logic applies in Raipur too.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpr-mode">Home lessons or online in Raipur?</h2>
  <p>
    Lessons in person tend to work better for small children, for students whose attention wanders on a laptop, and for
    numerical subjects where you want to watch the pen move. Lessons on a screen bring in specialists from other cities,
    which matters for IB, IGCSE, ISC electives and harder entrance material, and an
    <a href="{{ url('/online-tutor-raipur') }}">online tutor for Raipur students</a> can begin without any travel. Local
    conditions also play a part:
  </p>
  <ul>
    <li><strong>No metro, so roads decide.</strong> Most tutors ride a two-wheeler or take an auto, which makes the tutor's own locality the main thing to check.</li>
    <li><strong>Local trains in the west.</strong> Sarona and Saraswati Nagar stations, besides Raipur Junction, let some tutors reach West Raipur by rail.</li>
    <li><strong>The expressway and BRTS.</strong> The expressway from Fafadih and the BRTS buses make trips between the centre and the eastern side easier.</li>
    <li><strong>Summer heat and heavy rain.</strong> On the hottest afternoons and the wettest monsoon days, an online class fixed in advance saves the week.</li>
  </ul>
  <p>
    A common mix is two or three visits a week and a brief online check-in before a test, all with one tutor. For a fuller
    weighing-up, read <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor versus online tutor</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpr-fees">Home tutor fees in Raipur</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors fix
    their own rates. When two Raipur quotes differ, the reason is usually one of these:
  </p>
  <ul>
    <li><strong>Level.</strong> A Class 4 lesson and a Class 12 lesson are priced differently.</li>
    <li><strong>Purpose.</strong> Coaching-level problem solving for JEE or NEET costs more than help with school homework in the same subject.</li>
    <li><strong>Travel.</strong> Someone riding across from Tatibandh to Mowa may price in the journey; a neighbour in your zone seldom does.</li>
    <li><strong>Frequency.</strong> With a set monthly sum, two longer sessions can achieve more than four rushed ones.</li>
  </ul>
  <p>
    Put the money behind the subject that is actually slipping; a single capable tutor there tends to beat four cheaper
    ones. You see every shortlisted rate before a demo is booked, and nobody priced beyond the monthly figure you gave appears on
    the list. For class-by-class figures, open the <a href="{{ url('/pricing-guide') }}">pricing guide</a>; for Raipur
    specifically, read <a href="{{ url('/blog/home-tuition-fees-raipur') }}">home tuition fees in Raipur</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpr-choose">What to watch for in the free demo</h2>
  <p>
    The profile is why a tutor was suggested; the demo is how you decide. Tutors go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> on joining, but the teaching itself only shows in the room.
    Six signs worth noting:
  </p>
  <ol>
    <li><strong>Curiosity first.</strong> The tutor wanted to know the school timetable, the coaching load and the next test before deciding what to teach.</li>
    <li><strong>A diagnostic.</strong> A few quick questions found your child's level, rather than a lecture from the opening page of the chapter.</li>
    <li><strong>The right medium.</strong> Your child understood without strain, in Hindi, English or a blend.</li>
    <li><strong>Board awareness.</strong> The tutor described this year's paper for your board accurately and admitted what they would check.</li>
    <li><strong>Pen on paper.</strong> Your child did most of the solving; the tutor guided.</li>
    <li><strong>Reliability.</strong> The proposed slot is one the tutor can reach every week from home.</li>
  </ol>
  <p>
    Before the demo, pass the tutor's name to the gate if you live in a complex, or share the sector, lane, landmark and
    map pin if you live in a house. Hold the class where family members pass by, with an adult in the home. For a
    printable list, see the <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a>, and
    if a stream decision is coming up, our <a href="{{ url('/blog/how-to-choose-boardstream') }}">board and stream
    guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpr-calendar">Fitting tuition into the Raipur school year</h2>
  <p>
    CBSE begins its academic session in April, while state-board schools work to the Chhattisgarh calendar, so take your
    school's own dates. Roughly, a Raipur exam year moves through these phases:
  </p>
  <ul>
    <li><strong>April to June.</strong> Fresh textbooks and a long summer break, the ideal window to fix last year's weak chapters. Raipur afternoons are very hot, so schedule mornings or evenings.</li>
    <li><strong>July to September.</strong> The settled teaching months. Keep a weekly rhythm through the rains and agree an online fallback for days when travel is hard.</li>
    <li><strong>October and November.</strong> Dussehra and Diwali break the routine; lighten those weeks deliberately and add hours before and after.</li>
    <li><strong>December to February.</strong> Close the syllabus, sit full-length papers and pre-boards, and look for exam notices on cgbse.nic.in or your own board's site.</li>
    <li><strong>March to May.</strong> Boards finish, then the second JEE Main session, JEE Advanced and NEET UG.</li>
  </ul>
  <p>
    Every date should come from an official notice. An April start allows a full cycle of teaching and revision; joining
    in the autumn still pays off, with the weight shifted towards timed papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpr-start">Getting started in Raipur</h2>
  <p>
    Tell us the class, board and subjects, your colony and a nearby landmark, and the time windows left after school and
    coaching. Two or three suggested tutors come back; book a free demo with the one you like and make up your mind after
    it. You can start from your locality in the list on this page, look through <a href="{{ url('/tutors') }}">every
    tutor profile</a>, or go straight to a <a href="{{ url('/demo-class') }}">free demo class</a>. Where no home tutor is
    near you yet, an online tutor from another city can take the first lesson this week.
  </p>
  <p>
    For a street-level view of each zone, read our
    <a href="{{ url('/blog/raipur-home-tuition-guide') }}">Raipur home tuition guide</a>, which covers every locality
    from Samta Colony and Shankar Nagar to Kamal Vihar and Kabir Nagar.
  </p>
  <p class="rpr-note">
    Nearby cities with their own pages: <a href="{{ url('/city/nagpur') }}">Nagpur</a>,
    <a href="{{ url('/city/bhopal') }}">Bhopal</a> and <a href="{{ url('/city/ranchi') }}">Ranchi</a>; the full list is
    under <a href="{{ url('/city') }}">all cities</a>.
  </p>
  <p class="rpr-note">
    Tutors looking for students can see <a href="{{ url('/tuition-jobs/raipur') }}">tuition jobs in Raipur</a>, with
    the localities that parents' requests come from.
  </p>
  </section>

  </div>
</article>
