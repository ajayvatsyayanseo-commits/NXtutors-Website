{{--
  Long-form guide for the Dehradun city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for Dehradun parents
  choosing a home tutor: every figure is either live from the database or a
  published NXTutors policy; local facts come only from the cited research in
  database/seo-content/areas/dehradun-research.json; the Uttarakhand board
  description comes from the board's own site (https://ubse.uk.gov.in/). No
  school, college, institute, campus, factory, society, developer, hospital or
  mall is named.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $ddnAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ddnA = function (string $slug, string $label) use ($ddnAreaSlugs) {
      return in_array($slug, $ddnAreaSlugs, true)
          ? '<a href="' . e(url('/city/dehradun/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $ddnTutors = (int) ($hubCounts['tutors'] ?? 0);
  $ddnAreas = $allAreas->count();
@endphp

<article class="nx-guide ddn-guide" aria-labelledby="ddnGuideTitle">
  <h2 id="ddnGuideTitle">Home tuition in Dehradun: a parent's guide from Rajpur to Clement Town</h2>

  <p class="nx-guide__lede ddn-lede">
    Dehradun is a valley city whose layout is easy to read once you picture the Clock Tower, Ghantaghar, in the old
    centre beside Paltan Bazaar. Four major roads give the city its shape: Rajpur Road climbs from near the Clock Tower
    towards Mussoorie, Chakrata Road heads west, Saharanpur Road serves the bus terminal side in the south-west, and
    Haridwar Road leads south-east towards Doiwala. Newer housing has filled the gaps between them,
    especially along Sahastradhara Road and in the western colonies, and in 2017 seventy-two neighbouring villages
    joined the municipal corporation, taking it from sixty wards to a hundred. For a family looking for a tutor, the
    road you live on matters more than the distance on a map, and so does the season: wet monsoon afternoons and
    early winter darkness both change which lesson times are realistic.
  </p>
  <nav class="nx-guide__toc ddn-toc" aria-label="In this guide">
    <strong>Jump to:</strong>
    <a href="#ddn-how">Shortlisting</a> ·
    <a href="#ddn-zones">Zones and localities</a> ·
    <a href="#ddn-boards">Boards</a> ·
    <a href="#ddn-classes">Age groups</a> ·
    <a href="#ddn-subjects">Subject help</a> ·
    <a href="#ddn-jee-neet">Entrance exams</a> ·
    <a href="#ddn-mode">Home vs online</a> ·
    <a href="#ddn-fees">What it costs</a> ·
    <a href="#ddn-choose">Judging the demo</a> ·
    <a href="#ddn-calendar">Year planner</a> ·
    <a href="#ddn-start">First steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ddn-how">How do we shortlist tutors for a Dehradun family?</h2>
  <p>
    You send one request and we do the sorting. Tell us the class and board, which subjects are giving trouble, your
    locality and a landmark near the house, the hours your child is genuinely free, the format you prefer (in person, on a screen or a blend), and
    roughly what you want to spend each month. Expect a shortlist
    of two or three tutors in return. Each tutor's fee is on view before anyone visits, and the opening
    lesson with your pick costs nothing, because it is a free demo.
    In Dehradun the shortlist usually depends on these points:
  </p>
  <ul>
    <li><strong>Which of the main roads is yours?</strong> A tutor who already teaches along your road, whether Rajpur Road, Chakrata Road, Saharanpur Road or Haridwar Road, can reach you without cutting through the busy centre around the Clock Tower.</li>
    <li><strong>How high up the valley do you live?</strong> Homes in Rajpur, Jakhan and Malsi sit on the climb towards Mussoorie, where evenings turn cold early in winter; a tutor who lives on that side copes better with an early slot.</li>
    <li><strong>Which board, and which language works?</strong> Uttarakhand board, CBSE, ICSE and ISC, and IB or IGCSE each need different preparation, and some children follow a lesson most easily in Hindi, some in English and many in both.</li>
    <li><strong>House, builder floor or gated complex?</strong> Independent houses mean the tutor rings your bell; newer complexes on Sahastradhara Road, in Malsi or in Kanwali usually want the tutor's name at the gate first.</li>
  </ul>
  <p>
    Use the demo as a normal working lesson on whatever your child is studying that week, not a showpiece. If it does
    not feel right, a different name from your shortlist gets a turn, and swapping tutors later costs nothing either.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddn-zones">Dehradun, zone by zone</h2>
  <p>
    @if($ddnTutors > 0)
      The Dehradun listings draw on {{ number_format($ddnTutors) }} tutor profiles,
    @else
      The Dehradun listings draw on our tutor profiles,
    @endif
    and @if($ddnAreas > 0){{ number_format($ddnAreas) }} Dehradun localities @else every Dehradun locality we cover @endif
    have a page of their own. On any of them, people living right in that locality appear first, followed by
    those based elsewhere in its zone, then the wider city, then online teachers. To plan home visits we sort the
    valley into five zones built around its main roads, beginning with the climb to Mussoorie and moving clockwise:
    <a href="#ddn-rajpur">Rajpur Road and Dalanwala</a>, <a href="#ddn-sahastra">Sahastradhara and Raipur</a>,
    <a href="#ddn-haridwar">Haridwar Road</a>, <a href="#ddn-south">Saharanpur Road and Clement Town</a> and
    <a href="#ddn-west">Vasant Vihar and Chakrata Road</a>. They are planning groups of our own, not municipal wards
    or postal zones.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="ddn-rajpur">Rajpur Road and Dalanwala: the old spine climbing towards Mussoorie</h3>
  <p>
    {!! $ddnA('rajpur-road', 'Rajpur Road') !!} starts near the Clock Tower and Paltan Bazaar and runs up the valley,
    wide and lined with trees. Shops, showrooms, restaurants and hotels face the road, while old bungalows sit behind
    them and flats, villas and builder floors fill the lanes higher up. {!! $ddnA('karanpur', 'Karanpur') !!}, close
    by, is compact and lively, mostly builder floors and small apartment buildings mixed with shops, and is well known
    as a student neighbourhood, including for young people preparing for government exams.
    {!! $ddnA('dalanwala', 'Dalanwala') !!}, just east of the centre, is the opposite in feel: green, quiet lanes and
    roomy independent homes. Further up, {!! $ddnA('jakhan', 'Jakhan') !!} mixes larger family houses, villas and
    apartments and is said to be a little cooler than the city below; {!! $ddnA('rajpur', 'Rajpur') !!} is the old
    settlement at the upper end of the road, where the hills begin to rise; and {!! $ddnA('malsi', 'Malsi') !!}, on
    the Mussoorie Road side and known for its deer park, is mainly newer apartment complexes with some houses and
    villas.
  </p>
  <p>
    The Dehradun Cantonment lies on this side of the city; its board was set up in 1913 and has its office at Garhi
    Cantt, and homes inside follow the cantonment's own entry rules. Under the proposed Metro Neo, both planned
    corridors would meet at an interchange at Ghantaghar, but the detailed project report has only been submitted and
    nothing is being built, so tutors come by two-wheeler, car or auto. The lower stretch of Rajpur Road is crowded
    with evening shoppers, Karanpur's roads fill when college classes end in the afternoon, and the upper valley gets
    dark and cold early in winter, so a slightly earlier, fixed slot tends to hold up here.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="ddn-sahastra">Sahastradhara and Raipur: the north-east growth corridor</h3>
  <p>
    {!! $ddnA('sahastradhara-road', 'Sahastradhara Road') !!} heads north-east out of the city towards the
    Sahastradhara springs and has become one of Dehradun's main corridors for new homes. Apartments make up much of
    what is available to rent, alongside builder floors, houses, villas and plots, and the lower end also has an
    office park and hotels; it falls in the Dehradun East zone, postal code 248013.
    {!! $ddnA('kishanpur', 'Kishanpur') !!}, postal code 248009, sits where Sahastradhara Road leaves the Rajpur Road
    belt, between Canal Road, Govind Vihar, Rajpur and Jakhan, and its housing is mostly flats in large and small
    buildings. {!! $ddnA('raipur-road', 'Raipur Road') !!} runs east from the Sahastradhara crossing towards Raipur,
    an area long linked with defence production, past colonies of plots, flats, builder floors, villas and
    independent houses.
  </p>
  <p>
    The proposed east-west Metro Neo corridor would end at Raipur with planned stops including Upper Nathanpur and Hathikhana Chowk.
    That line is a proposal, not a construction site, so everyone travels by road. Because so much of this zone is
    gated apartment living, most first visits begin at a guard's desk: share the tutor's name and flat number before
    the demo and ask about parking a two-wheeler. Office closing time slows the lower part of Sahastradhara Road, and
    families further out towards Raipur often do better with a tutor from Dalanwala or Karanpur, or with online
    lessons for specialist subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="ddn-haridwar">Haridwar Road: from Race Course out to Doiwala</h3>
  <p>
    {!! $ddnA('race-course', 'Race Course') !!}, south-east of the centre, is long-settled housing on individual plots
    with some two- and three-bedroom flats, connected by wide roads to Haridwar Road. {!! $ddnA('nehru-colony',
    'Nehru Colony') !!}, near Fuwara Chowk, is known for its markets and older homes, with a vegetable market, banks,
    shops and coaching centres close at hand; the adjoining Dharampur side adds plots, villas and builder floors.
    {!! $ddnA('jogiwala', 'Jogiwala') !!} began as an old settled area and grew into a junction: Jogiwala Chowk links
    straight to the Haridwar highway and the ring road, with houses, villas and plots around it. Furthest out,
    {!! $ddnA('doiwala', 'Doiwala') !!} is a town in its own right on National Highway 7, a nagar palika of twenty
    wards and a tehsil of the district, which grew into a market town after its railway station opened in 1900.
  </p>
  <p>
    Rail is a real option at the outer end. Doiwala station is on the Laksar-Dehradun line between Harrawala and Kansrao, and Dehradun's airport is in Doiwala too, with a new terminal opened in 2021. Nehru Colony's market lanes are easiest by two-wheeler and busiest in the evening, Jogiwala
    Chowk is slow at office hours, and Doiwala families usually find the steadiest arrangement with a tutor who lives
    in the town or along the highway, adding online lessons for subjects where the specialist is in the city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="ddn-south">Saharanpur Road and Clement Town: the bus terminal side and the southern cantonment</h3>
  <p>
    {!! $ddnA('patel-nagar', 'Patel Nagar') !!} lies between Saharanpur Road and the city centre, known for its
    industrial area as well as its homes, which are mostly builder floors and independent houses.
    {!! $ddnA('majra', 'Majra') !!} is a developing locality close to Saharanpur Road and the ISBT, where
    three-bedroom flats are the commonest homes and the Chandrabani temple is the local landmark.
    {!! $ddnA('turner-road', 'Turner Road') !!}, also near the bus terminal, is largely independent houses with some
    flats and villas. {!! $ddnA('clement-town', 'Clement Town') !!} is a separate Category-II cantonment with its own
    board, a quieter, greener place on the southern edge of the city with a strong Tibetan Buddhist presence, including
    a monastery whose large stupa was inaugurated in 2002.
  </p>
  <p>
    This is the city's travel gateway. National Highway 307 leaves for Saharanpur, the ISBT is the main hub for
    intercity buses, and electric city buses started running in 2022. Dehradun railway station, in Govind Nagar, opened
    in 1899 as the terminus of the Laksar-Dehradun line. The proposed north-south Metro Neo corridor would run from the
    ISBT through Sewla Kalan, Lalpul, Chamanpuri and Patthari Bagh to the railway station, and a new four-lane bypass
    is being built on the Turner Road side, so some routes may change. Traffic around the bus terminal and the
    industrial area peaks at shift and office times; inside Clement Town, families should check how a visitor is
    admitted and pass those details to the tutor before the first lesson.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="ddn-west">Vasant Vihar and Chakrata Road: the western housing belt</h3>
  <p>
    {!! $ddnA('vasant-vihar', 'Vasant Vihar') !!}, postal code 248006, is a well-laid-out area with good roads in the
    middle of the western side, where two-bedroom flats are among the most sought-after homes.
    {!! $ddnA('indira-nagar', 'Indira Nagar') !!}, usually written Indra Nagar Colony, has grown quickly and is mostly
    plots and ready houses. {!! $ddnA('ballupur', 'Ballupur') !!} is built around Ballupur Chowk, one of the main
    junctions on the way west, with flats, builder floors and houses. {!! $ddnA('gms-road', 'GMS Road') !!} starts near
    that chowk and has become a shopping street as well as an address, with offices and showrooms in front and
    apartment complexes behind. {!! $ddnA('kanwali', 'Kanwali') !!}, postal code 248171, is a growing locality with
    some larger gated townships, and {!! $ddnA('prem-nagar', 'Prem Nagar') !!}, postal code 248007 on Chakrata Road,
    sits at the western edge, with many ordinary families on green, fairly quiet
    streets.
  </p>
  <p>
    The east-west Metro Neo corridor is planned to begin at Ballupur Chowk and run east through Ghantaghar to Raipur,
    but it remains a plan. For now Balliwala Chowk is the nearest main bus stop for Vasant Vihar and Kanwali, and
    shared three-wheelers work the main roads. Tutors here can move between Vasant
    Vihar, Ballupur, GMS Road and Kanwali without touching the centre. Chakrata Road is heavy at office hours, so in
    Prem Nagar a tutor who lives nearby is far easier to keep than one travelling out each evening, and families inside
    defence areas should confirm the entry procedure first.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddn-boards">Which boards do Dehradun tutors teach?</h2>
  <p>
    Dehradun families come to us with children on the state's own Uttarakhand board, on CBSE, on the CISCE pair of
    ICSE and ISC, and in smaller numbers on the IB or Cambridge IGCSE. Being strong on one board does not make a
    tutor right for another, so a request is always matched on board and class together, never on subject alone.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Uttarakhand Board of School Education (UBSE)</h3>
  <p>
    The Uttarakhand Board of School Education, Uttarakhand Vidyalayi Shiksha Parishad, is based at Ramnagar in
    Nainital district and conducts the state's High School (Class 10) and Intermediate (Class 12) examinations. Its
    official website publishes the syllabus, model and old question papers, question banks, paper designs and the
    rules for practicals and internal assessment. A tutor should work from those documents and the prescribed books,
    and take every date only from the board's own notices.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    CBSE questions grow out of the NCERT textbooks, and a rising share of every paper tests whether a student can use
    an idea in a setting they have not met before. Read closely, NCERT also underpins JEE and NEET preparation. Where students
    tend to slip is presentation: after months of multiple-choice practice, they need to relearn how to write a full,
    step-by-step board answer.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    CISCE's Class 10 exam (ICSE) and its Class 12 exam (ISC) expect long written answers over a wide syllabus, with
    prescribed literature texts in English. Success depends on coverage and exact wording, so the tutor should revise
    in several passes, set answers against the clock and keep an eye on every subject's project deadlines.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and IGCSE</h3>
  <p>
    For the IB Diploma or Cambridge IGCSE, the closest real specialist is often an online one. Coursework counts in
    the IB alongside the final papers; a tutor may advise on the Internal Assessment and Extended Essay, but the
    student writes them. IGCSE rewards regular work on past papers, marked against the official schemes.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddn-classes">What should tuition focus on for each age group?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Primary and middle school (Classes 1–8)</h3>
  <p>
    Younger children need confident reading, reliable number sense and the habit of finishing written work tidily. If
    a child speaks Hindi at home but reads English textbooks, a short spell of reading aloud and talking about the page
    is worth more than another worksheet. Make sure Class 6 to 8 maths is solid before signing up for any
    entrance foundation programme.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>The Class 9–10 years</h3>
  <p>
    Class 9 is where school Maths and Science suddenly get heavier, and it is also when many families
    begin talking about entrance preparation. A tutor's main job is to keep school chapters moving steadily so the High School or Class 10 board
    year is not crowded. Two of our NCERT-based resources help here: a
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Maths preparation plan for Class 10</a> and a set of
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Science notes for Class 10</a>.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Senior secondary (Classes 11–12)</h3>
  <p>
    No step is steeper than the move into Class 11, and much of what JEE and NEET test is first taught in that year.
    Ground lost in Class 11 Physics or Maths is very hard to win back later, so a dedicated specialist for each hard
    subject is worth it. Our <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 Physics
    strategies</a> cover the board year itself.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddn-subjects">Which subjects can a Dehradun tutor teach?</h2>
  <p>
    Most requests from Dehradun parents start with Maths, Physics, Chemistry or Biology, usually once a child reaches
    Class 9. Beyond those, tutors here teach Hindi, English, Social Science, Sanskrit, Economics, Accountancy,
    Business Studies and Computer Science. Separate Dehradun pages
    cover tutors for <a href="{{ url('/maths-home-tutor-dehradun') }}">maths</a>,
    <a href="{{ url('/science-home-tutor-dehradun') }}">science</a>,
    <a href="{{ url('/physics-home-tutor-dehradun') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-dehradun') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-dehradun') }}">biology</a> and
    <a href="{{ url('/english-home-tutor-dehradun') }}">English</a>, and by board for
    <a href="{{ url('/cbse-home-tutor-dehradun') }}">CBSE</a>, <a href="{{ url('/icse-home-tutor-dehradun') }}">ICSE</a>
    and the <a href="{{ url('/uttarakhand-board-tutor-dehradun') }}">Uttarakhand board</a>.
  </p>
  <p>
    In Maths, the useful first step is to find the point where understanding actually broke, even if it is two years
    back. In Physics, a student should be able to explain why an answer is right, not just which formula produced it.
    Chemistry asks for three different skills together, numericals in Physical, reaction logic in Organic and careful
    reading in Inorganic, as we explain in our <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Organic and Inorganic
    Chemistry guide for Class 12</a>. When a child switches from Hindi-medium lessons to English-medium books, the
    tutor should teach each technical term in both languages at first and let the Hindi fade over time; for extra
    practice at home, see our <a href="{{ url('/blog/spoken-english-for-students') }}">guide to spoken English for
    students</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddn-jee-neet">Can a home tutor support JEE or NEET preparation in Dehradun?</h2>
  <p>
    Yes. For most Dehradun teenagers the tutor works alongside a coaching course or self-study rather than replacing
    it, and the arrangement pays off when the tutor's role is clear from the start:
  </p>
  <ul>
    <li><strong>Close the loose ends every week.</strong> Go through that week's sheets and the latest test, and settle each half-understood question before new topics pile up.</li>
    <li><strong>Plan boards and entrance as one.</strong> The Class 12 NCERT books sit underneath both the board paper and the entrance syllabus, so one revision plan can serve both.</li>
    <li><strong>Spend the hours where marks leak.</strong> Concentrating on the one subject dragging the total down usually moves the score more than the same hours shared across three.</li>
    <li><strong>Keep one fixed weekly slot.</strong> Pick the hour that never clashes with classes, whether before school, after dinner or on Sunday, and protect it.</li>
  </ul>
  <p>
    JEE Main is run by NTA in two sessions during the first half of each year, and qualifying in it opens the way to
    JEE Advanced. NEET UG comes round once a year with Biology worth half of the total, so the NCERT Biology books
    deserve slow, line-by-line reading. For dates, rely only on the official information bulletin for that year. Our
    <a href="{{ url('/jee-home-tutor-dehradun') }}">JEE home tutor</a> and
    <a href="{{ url('/neet-home-tutor-dehradun') }}">NEET home tutor</a> pages for Dehradun go further. It is also worth giving
    any new tutor our chapter-wise notes on <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">Maths for JEE</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">Physics for JEE</a> and
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">Chemistry for JEE</a>, and our
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET Biology plan that puts NCERT first</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddn-mode">Should lessons be at home or online in Dehradun?</h2>
  <p>
    Having the tutor at the same table helps most with small children, with teenagers who drift off on a screen, and
    with work that lives on paper, like long Maths and Physics solutions. Going online opens the door to teachers
    from every part of the country, which is what IB and IGCSE students, ISC elective subjects and advanced entrance
    problems most often need. Dehradun adds a few local reasons to plan both:
  </p>
  <ul>
    <li><strong>No metro yet.</strong> Metro Neo is still a proposal, so every home tutor arrives by road, and one based on your side of the centre spends the least time getting to you.</li>
    <li><strong>Monsoon rain.</strong> Heavy showers can slow travel across the valley, and on the wettest days a pre-agreed switch to a screen beats a cancelled class.</li>
    <li><strong>Winter evenings.</strong> In the upper valley and along the hillside it gets dark and cold early, so many families shift lessons earlier or move one session a week online.</li>
    <li><strong>The edges of the city.</strong> In Doiwala, Prem Nagar or out towards Raipur, fewer tutors may live close by, so a mix of a local tutor and an online specialist often works.</li>
  </ul>
  <p>
    Plenty of families blend the two: a couple of visits each week plus a brief video session in the run-up to a
    test, all with one tutor. We weigh the pros and cons in our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">comparison of home and online tutoring</a>, and our <a href="{{ url('/online-tutor-dehradun') }}">online tutors for Dehradun</a> page explains
    how remote lessons run.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddn-fees">How are tutor fees set in Dehradun?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set
    their own fees, and a quote usually reflects:
  </p>
  <ul>
    <li><strong>The stage.</strong> Lessons for primary and middle-school children generally cost less than senior-secondary lessons.</li>
    <li><strong>The aim.</strong> Teaching Physics or Maths to JEE or NEET depth costs more than help with the school chapter in the same subject.</li>
    <li><strong>The journey.</strong> A tutor who must cross from the far side of the valley may build the ride into the fee, while a neighbour usually does not.</li>
    <li><strong>The rhythm.</strong> On a set monthly sum, two longer lessons tend to give more than four rushed ones.</li>
  </ul>
  <p>
    Spend on the subject that is actually hurting: a single strong tutor there tends to beat inexpensive help scattered
    over four. You see each fee on the shortlist before the demo, and nobody priced beyond the amount you gave us is
    put forward. For class-by-class and subject-by-subject figures, open our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a>; for the Dehradun view, read
    <a href="{{ url('/blog/home-tuition-fees-dehradun') }}">what home tuition costs in Dehradun</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddn-choose">How can you tell, during the free demo, whether a tutor fits?</h2>
  <p>A good profile earns a place on the list; an hour at your table settles the rest. Watch whether the tutor:</p>
  <ol>
    <li><strong>Asked about the whole week.</strong> School hours, any coaching, upcoming tests and the board, before planning anything.</li>
    <li><strong>Checked before teaching.</strong> A few quick questions to find what your child already knows, instead of starting at page one.</li>
    <li><strong>Spoke your child's language.</strong> Whether the lesson ran in Hindi, English or both, your child could follow without strain.</li>
    <li><strong>Knew the paper.</strong> They could describe how your board sets this year's paper without guessing.</li>
    <li><strong>Made your child work.</strong> Your child solved problems during the hour rather than watching someone else solve them.</li>
    <li><strong>Can keep the slot.</strong> The hour you discussed is one they can reach week after week, through monsoon and winter.</li>
  </ol>
  <p>
    Before the demo, tell a complex's security desk who is coming; for an independent house, share the lane name, a
    nearby landmark and a location pin; inside a cantonment, settle the entry procedure ahead of time. Keep lessons in
    a common room while an adult is in the house. For more, read our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">parents' checklist for the demo class</a> and the
    guide on <a href="{{ url('/blog/how-to-choose-boardstream') }}">picking a board and stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddn-calendar">How does a Dehradun school year shape tuition?</h2>
  <p>CBSE's session begins in April, and a board or entrance year in Dehradun tends to run like this:</p>
  <ul>
    <li><strong>April to June:</strong> new textbooks, and the summer holidays as the time to repair old gaps before the pace picks up.</li>
    <li><strong>July to September:</strong> the monsoon; keep weekly lessons steady and agree in advance that the wettest days move online.</li>
    <li><strong>October to November:</strong> Dussehra and Diwali; plan lighter festival weeks and recover the hours around them.</li>
    <li><strong>December to February:</strong> cold, short days; bring evening lessons forward, finish the syllabus and switch to full papers and pre-boards, checking the board's notices for exam dates.</li>
    <li><strong>March to May:</strong> the board exams wrap up, then come the second round of JEE Main, JEE Advanced and NEET UG.</li>
  </ul>
  <p>
    Treat only official notices as the source for dates. An April start buys a whole year of steady work; beginning
    later is still useful, with the weight shifting towards past papers and exam technique.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddn-start">What are the first steps for a Dehradun family?</h2>
  <p>
    Share your child's class and board, the subjects in question, where you live with a landmark, and the times left
    free after school. A shortlist of two or three follows; one of them teaches a free demo, and only then do you
    commit. Start by opening your own locality from the list here, look through <a href="{{ url('/tutors') }}">the
    full tutor directory</a> or go straight to <a href="{{ url('/demo-class') }}">booking a free demo</a>. Where no
    home tutor is close enough yet, an online teacher based anywhere in India can begin at once.
  </p>
  <p>
    Planning around your own part of the valley? Read our
    <a href="{{ url('/blog/dehradun-home-tuition-guide') }}">Dehradun home tuition guide</a>, which covers each of the
    five zones in turn, from Rajpur and Malsi to Doiwala and Clement Town, with every locality linked.
  </p>
  <p class="ddn-note">
    Searching outside the valley? We also list home tutors in <a href="{{ url('/city/chandigarh') }}">Chandigarh</a>,
    <a href="{{ url('/city/delhi') }}">Delhi</a>, <a href="{{ url('/city/noida') }}">Noida</a> and
    <a href="{{ url('/city/ghaziabad') }}">Ghaziabad</a>, and in <a href="{{ url('/city') }}">many more Indian cities</a>.
  </p>
  <p class="ddn-note">
    If you teach in the city, our page of <a href="{{ url('/tuition-jobs/dehradun') }}">tuition jobs in Dehradun</a>
    shows which neighbourhoods parents are requesting tutors in.
  </p>
  </section>

  </div>
</article>
