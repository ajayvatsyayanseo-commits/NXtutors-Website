{{--
  Long-form guide for the Jammu city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for Jammu parents
  choosing a home tutor: every figure is either live from the database or a
  published NXTutors policy; local facts come only from the cited research in
  database/seo-content/areas/jammu-research.json. The JKBOSE card is written in
  general terms and sends families to the board's own site (https://jkbose.jk.gov.in/). No school, college, institute,
  society, developer, hospital or mall is named. Purely practical: no politics,
  security or tourism content, and no dates for roadworks still under way.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $jmuAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jmuA = function (string $slug, string $label) use ($jmuAreaSlugs) {
      return in_array($slug, $jmuAreaSlugs, true)
          ? '<a href="' . e(url('/city/jammu/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $jmuTutors = (int) ($hubCounts['tutors'] ?? 0);
  $jmuAreas = $allAreas->count();
@endphp

<article class="nx-guide jmu-guide" aria-labelledby="jmuGuideTitle">
  <h2 id="jmuGuideTitle">Home tuition in Jammu: a parent's guide from Janipur to Sainik Colony</h2>

  <p class="nx-guide__lede jmu-lede">
    Jammu is a city of two banks. On the right bank of the Tawi, facing the river from the north, the old city packs
    Raghunath Bazar, Purani Mandi and Pacca Danga into narrow lanes, and the foothill colonies of Janipur, Roop Nagar
    and Paloura spread out behind it. The left bank is the newer, planned half: Gandhi Nagar, Nanak Nagar and Shastri
    Nagar around Jammu Tawi railway station, the numbered sectors of Trikuta Nagar and Channi Himmat further on, and
    Greater Kailash, Sainik Colony and Kunjwani where the highway meets the city. Bridges stitch the two halves
    together, and the NH-44 bypass curves round the eastern edge from Kunjwani up to Sidhra. When you look for a tutor
    here, two things settle most of the choice: which side of the river your home is on, and which hour of the day
    your child can really give to a lesson.
  </p>
  <nav class="nx-guide__toc jmu-toc" aria-label="In this guide">
    <strong>On this page:</strong>
    <a href="#jmu-how">Your request</a> ·
    <a href="#jmu-zones">Five zones</a> ·
    <a href="#jmu-boards">Boards</a> ·
    <a href="#jmu-classes">Stages</a> ·
    <a href="#jmu-subjects">Subjects</a> ·
    <a href="#jmu-jee-neet">JEE and NEET</a> ·
    <a href="#jmu-mode">At home or online</a> ·
    <a href="#jmu-fees">Fees</a> ·
    <a href="#jmu-choose">The free demo</a> ·
    <a href="#jmu-calendar">Through the year</a> ·
    <a href="#jmu-start">Next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jmu-how">What happens after a Jammu family sends a request?</h2>
  <p>
    You fill in one short request and the matching happens on our side. Note your child's class and board, the
    subjects that are slipping, the colony you live in with a nearby chowk or morh, the days and times that are free
    after school, whether you would like lessons at home, on a screen or a little of both, and a rough monthly figure
    you are comfortable with. In reply you get two or three suggested tutors. You can see what each one charges before
    anyone comes to the house, and the first class with the tutor you pick is a free demo. In Jammu, four details do
    most of the sorting:
  </p>
  <ul>
    <li><strong>Your bank of the Tawi.</strong> A tutor who already teaches in Janipur or Rehari can keep coming to an old-city home week after week; one who must cross a bridge at rush hour may start well and then fade.</li>
    <li><strong>The real free hour.</strong> School, sport and any coaching class leave a narrow window; we only put forward tutors who can take that window, not just any evening.</li>
    <li><strong>Board and medium.</strong> JKBOSE, CBSE, ICSE or ISC, IB or IGCSE each need different preparation, and some students think most clearly in English while others want ideas explained in Hindi first.</li>
    <li><strong>Plotted house or block of flats.</strong> A house on a sector lane means the tutor rings your bell; a newer apartment building may keep a register at the gate and want the tutor's name in advance.</li>
  </ul>
  <p>
    Run the demo as a normal lesson on the chapter your child has in school that week, not a showpiece. If it does not
    click, we arrange another tutor from the shortlist, and moving to a different tutor later costs nothing either.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmu-zones">Jammu in five zones</h2>
  <p>
    @if($jmuTutors > 0)
      The tutors you see for Jammu are drawn from {{ number_format($jmuTutors) }} tutor profiles,
    @else
      The tutors you see for Jammu are drawn from our tutor profiles,
    @endif
    and @if($jmuAreas > 0){{ number_format($jmuAreas) }} Jammu localities @else every Jammu locality @endif
    have their own page. Each one lists tutors living in that locality first, then tutors elsewhere in the same zone,
    then tutors from the rest of the city, and then online tutors. For home lessons we group the city into five
    zones, starting beside the railway station and moving round to the foothills:
    <a href="#jmu-railhead">Rail Head and New City</a>, <a href="#jmu-trikuta">Trikuta and Channi</a>,
    <a href="#jmu-kunjwani">Kunjwani and Sainik Colony</a>, <a href="#jmu-old">Old City and Sidhra</a> and
    <a href="#jmu-janipur">Janipur and Akhnoor Road</a>. The groups are ours, drawn for tutor travel; they are not
    municipal wards.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="jmu-railhead">Rail Head and New City: the planned colonies around Jammu Tawi station</h3>
  <p>
    {!! $jmuA('gandhi-nagar', 'Gandhi Nagar') !!} is one of the main planned colonies of the new city on the left bank.
    Single-storey government housing sits beside private houses and a few newer flats, and its large market is one of
    the two places the city's master plan picks out for specialised shopping. Ask anyone for directions and they will
    use Gol Market Chowk or Last Morh. {!! $jmuA('nanak-nagar', 'Nanak Nagar') !!}, its neighbour, is big enough to be
    divided into three municipal wards, East, West and North; most homes are independent houses on plotted lanes, with
    builder floors and a handful of apartment buildings, and a road leads towards Preet Nagar by way
    of Khalsa Chowk. {!! $jmuA('shastri-nagar', 'Shastri Nagar') !!} is a ward of its own with a Housing Board colony;
    two-bedroom homes are the most common, and a loop road joins it, Gandhi Nagar and Nai Basti to the national
    highway.
  </p>
  <p>
    The zone is named for Jammu Tawi railway station, which lies close to all three colonies. An elevated road carries
    through traffic into Gandhi Nagar, the road via Jewel Chowk links it with the old city, and work on a further
    flyover from Satwari Chowk towards Last Morh means diversions on that stretch until it is finished. Houses on the
    inner lanes give doorstep arrival; government quarters may check visitors at a gate. The market roads are at
    their fullest in the evening, so a tutor living in one of these three colonies is the steadiest match.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="jmu-trikuta">Trikuta and Channi: numbered sectors on the eastern side</h3>
  <p>
    {!! $jmuA('trikuta-nagar', 'Trikuta Nagar') !!} is a large Jammu Development Authority colony laid out in Sectors 1
    to 9, with a Sector 5A as well; most of it is independent houses on plots, with some flats and its own shopping
    areas, so a sector and house number usually find the door. {!! $jmuA('channi-himmat', 'Channi Himmat') !!} is a
    Housing Board colony, also in numbered sectors and spread over several wards, where a road from the colony's first
    junction runs through Sectors 4 and 7 out to the NH-44 bypass at Deeli. {!! $jmuA('channi-rama', 'Channi Rama') !!},
    beside it, shares a ward with Narwal Bala; two-bedroom homes are the ones most asked for, and new building is still
    going on. {!! $jmuA('bathindi', 'Bathindi') !!}, also spelled Bhatindi, is newer again, with many fresh flats among
    the houses and Bhatindi Morh on NH-44 as its landmark.
  </p>
  <p>
    Jammu Tawi is the main station for the whole zone, and the master plan sets out a road from the station along the
    canal to the bypass by way of Trikuta Nagar, plus a link from Bhatindi Morh towards Sainik Colony through Sunjwan.
    In the newer pockets of Channi Rama a first-time visitor can lose the way, so send a map pin with a landmark.
    Bathindi's apartment buildings may ask visitors to sign in at the gate. The highway junction slows in the evening,
    so set a weekly slot with a little margin.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="jmu-kunjwani">Kunjwani and Sainik Colony: where the highway meets the south of the city</h3>
  <p>
    {!! $jmuA('sainik-colony', 'Sainik Colony') !!} is a large residential colony in the south-east, split into two
    municipal wards, Sainik Colony-1 and Sainik Colony-2. Homes are mostly independent houses on plots, with plots in
    Sainik Colony Extension still being built on, and local markets cover daily needs.
    {!! $jmuA('greater-kailash', 'Greater Kailash') !!} is a ward of its own, mixing houses with apartment buildings,
    and many homes are a short walk from shops and food outlets; its junction, Trikuta Nagar Chowk, also goes by the
    name Greater Kailash Chowk, and the master plan lists it among junctions that need a grade separator.
    {!! $jmuA('kunjwani', 'Kunjwani') !!} is the busy locality around Kunjwani Chowk, where the Pathankot and Bishnah
    roads meet the city and the bypass towards Nagrota begins; homes sit in lanes off the highway, behind showrooms and
    shops, with the Gangyal industrial estate nearby.
  </p>
  <p>
    This zone has two nearby stations, Bari Brahmana and Jammu Tawi. A four-lane flyover from Kunjwani Chowk towards
    Satwari is being completed, which should ease trips towards Gandhi Nagar once it opens, and a link road is planned
    from the Sainik Colony junction to NH-44 at Purmandal Chowk via Chowadi. Highway junctions are slowest at office
    hours, so a tutor already living in Sainik Colony or Greater Kailash keeps weekday lessons on time.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="jmu-old">Old City and Sidhra: the right bank from the bazaars to the foothills</h3>
  <p>
    The {!! $jmuA('old-city', 'Old City') !!} is the oldest part of the city,
    and its neighbourhoods, including Purani Mandi, Pacca Danga, Fattu Chowgan, Kanak Mandi and Gumat, are a web of
    narrow lanes that open into small squares; homes in the core are mostly older houses. Raghunath Bazar, Kanak Mandi
    Road and Residency Road are among the busiest streets in Jammu. {!! $jmuA('rehari-colony', 'Rehari Colony') !!},
    known simply as Rehari, has two wards, Rehari North and Rehari South, with Rehari Chowk and Rehari Chungi as its
    landmarks. {!! $jmuA('bakshi-nagar', 'Bakshi Nagar') !!}, covered by the Bakshi Nagar and Gurha Bakshi Nagar wards,
    is long-settled housing on established lanes, bordering Talab Tillo to the west. {!! $jmuA('sidhra', 'Sidhra') !!}
    lies on the Tawi at the foot of the Shivalik hills, with NH-44 running through it and new houses and apartment
    buildings going up; the master plan proposes a satellite township around Sidhra, Majeen and Rangoura.
  </p>
  <p>
    Jammu Tawi station is across the river from here. In the old city a two-wheeler and an exact lane landmark matter
    more than anything, and a few lanes are easiest on foot. A road from the Rehari bridge links Rehari with the rest
    of the old city, so tutors from Bakshi Nagar or Janipur need not cross the Tawi. Sidhra is reached over its own
    bridge from the old city or along the bypass from the southern colonies, and its apartment complexes may log
    visitors at the gate.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="jmu-janipur">Janipur and Akhnoor Road: the north and west of the right bank</h3>
  <p>
    {!! $jmuA('janipur', 'Janipur') !!} is a settled residential area in the north of the city, large enough for four
    municipal wards, with a Jammu Development Authority housing colony and a further part, New Janipur, along the
    foothills; homes are mostly independent houses on plots, with banks, showrooms and markets close by.
    {!! $jmuA('talab-tillo', 'Talab Tillo') !!}, in the west, is part home and part market, bordered by Bohri, Canal
    Road and Bakshi Nagar; Talab Tillo Chowk is its commercial hub, and the area also takes in Udheywala, Anand Nagar,
    Gol Pulli and Pakka Gharat. {!! $jmuA('paloura', 'Paloura') !!}, on the north-western side, is covered by three
    wards that carry its name, with much of its newer housing in plotted layouts and Paloura Chowk as the landmark.
    {!! $jmuA('roop-nagar', 'Roop Nagar') !!} is a planned colony with its own local shopping area, in the foothill belt
    shared with New Janipur and Bantalab.
  </p>
  <p>
    Roads tie this zone together: Janipur Road runs towards Amphalla Chowk, Sarwal Road runs from Rehari Chungi to
    Paloura Chowk, and a link road brings Akhnoor Road to Paloura Chowk. Janipur Road and Sarwal Road are often
    congested and parking in the narrow lanes is tight, so most tutors come on a two-wheeler. Minibuses and autos are
    easy to find around Talab Tillo. For the plotted parts of Paloura, a map pin saves a confused first visit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmu-boards">Which boards do Jammu tutors teach?</h2>
  <p>
    Jammu families study under the union territory's own board, under CBSE, under CISCE for ICSE and ISC, and in
    smaller numbers under IB or Cambridge IGCSE. Strength in one board does not carry over automatically to another,
    so we match board and class together rather than subject alone.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Jammu and Kashmir Board of School Education (JKBOSE)</h3>
  <p>
    JKBOSE is the school board of Jammu and Kashmir and conducts its secondary and higher secondary examinations. A
    tutor for a JKBOSE student should teach from the textbooks the board prescribes and practise with the board's own
    sample and past papers. Syllabus changes, date sheets and results are published on
    <a href="https://jkbose.jk.gov.in/" rel="noopener">jkbose.jk.gov.in</a>, so take those details from there and not from a
    tutor's memory. Our <a href="{{ url('/jkbose-tutor-jammu') }}">JKBOSE tutors in Jammu</a> page goes further.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    CBSE question papers stay close to the NCERT books while asking more and more often for an idea to be applied in a
    new setting. That suits a Jammu student who also has an entrance exam in view, since careful NCERT work feeds
    both. Where such students struggle is the written board answer: steps, units and diagrams after a long diet of
    multiple-choice practice.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    CISCE's ICSE in Class 10 and ISC in Class 12 cover a wide syllabus through long written papers, with set texts in
    English literature. The work is breadth plus precision, so a good tutor plans revision in cycles, sets timed
    answers and keeps internal assessment and project deadlines in view.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and IGCSE</h3>
  <p>
    Families on the IB Diploma or Cambridge IGCSE, often after moving from another city, usually find the nearest
    specialist online. IB counts coursework alongside exams, and a tutor may guide an Internal Assessment or Extended
    Essay but must not write it; IGCSE rewards steady past-paper work against the official mark schemes.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmu-classes">What does a tutor need to do at each stage?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Classes 1 to 8</h3>
  <p>
    In the primary and middle years the aim is confident reading, sound arithmetic and finished, legible written work.
    If the language spoken at home is not the language of the textbook, a short spell of reading aloud in each lesson
    does more than another worksheet. Before any early entrance-foundation course, check that school maths up to Class
    8 is truly secure.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    Class 9 is where Maths and Science suddenly widen, and for some students it is also the year a coaching class
    begins. A tutor's task is to keep school chapters on schedule so the Class 10 board year is not crowded. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 Maths preparation plan</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 Science notes</a> follow the NCERT chapter order.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    The jump into Class 11 is the steepest in school, and much of what entrance exams test is taught that year. Gaps
    left in Class 11 Physics or Maths are hard to repair in Class 12, which is why one specialist per hard subject
    pays off. For the board year, see our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">strategies for Class 12 Physics</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmu-subjects">Which subjects can you find a tutor for in Jammu?</h2>
  <p>
    Most requests from Jammu parents start with Maths, Physics, Chemistry or Biology, usually from Class 9 onwards.
    Tutors on NXTutors also teach English, Hindi, Social Science, Computer Science, Accountancy, Economics and
    Business Studies, and many take all subjects for younger children. Jammu has its own pages for
    <a href="{{ url('/maths-home-tutor-jammu') }}">maths</a>,
    <a href="{{ url('/science-home-tutor-jammu') }}">science</a>,
    <a href="{{ url('/physics-home-tutor-jammu') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-jammu') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-jammu') }}">biology</a> and
    <a href="{{ url('/english-home-tutor-jammu') }}">English</a> home tutors, and by board for
    <a href="{{ url('/cbse-home-tutor-jammu') }}">CBSE</a>, <a href="{{ url('/icse-home-tutor-jammu') }}">ICSE</a> and
    <a href="{{ url('/jkbose-tutor-jammu') }}">JKBOSE</a> students.
  </p>
  <p>
    In Maths, trace the problem back to where it began, even if that is a chapter from two years ago. In Physics, ask
    the tutor to argue from the principle before reaching for a formula. Chemistry splits three ways, with numericals
    in Physical, reaction patterns in Organic and careful memory work in Inorganic; our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">guide to Organic and Inorganic Chemistry in
    Class 12</a> shows how to balance them. For a child who switches into English-medium books, a tutor who explains
    technical terms in both languages at first, then gradually drops the Hindi, makes the move smoother; our
    <a href="{{ url('/blog/spoken-english-for-students') }}">spoken English guide</a> adds practice for home.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmu-jee-neet">Does a home tutor help with JEE or NEET from Jammu?</h2>
  <p>
    It can, provided the tutor has a clear job alongside whatever coaching or self-study the student already does.
    Many Jammu families would rather keep a teenager at home through Classes 11 and 12 than send them to another city,
    and that choice works well with a tutor who:
  </p>
  <ul>
    <li><strong>Clears the backlog every week.</strong> Goes through the latest test and worksheets and closes every half-solved question before new material arrives.</li>
    <li><strong>Plans boards and entrance as one.</strong> The Class 12 NCERT chapters underpin both, so a single revision plan can serve the two goals.</li>
    <li><strong>Targets the weakest subject.</strong> Hours spent where marks are being lost do more than extra time spread evenly.</li>
    <li><strong>Keeps one fixed slot.</strong> An early morning, a late evening or a weekend block, agreed once and protected.</li>
  </ul>
  <p>
    NTA holds JEE Main in two sessions in the first half of the year, and students who qualify can then attempt JEE
    Advanced. NEET UG is held once a year, and half of its marks come from Biology, so NCERT Biology needs line-by-line
    reading. Take every date from that year's official information bulletin. Our
    <a href="{{ url('/jee-home-tutor-jammu') }}">JEE home tutors in Jammu</a> and
    <a href="{{ url('/neet-home-tutor-jammu') }}">NEET home tutors in Jammu</a> pages go into more detail, and our topic
    notes for <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE Maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE Physics</a> and
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE Chemistry</a>, with our
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET Biology approach that begins with NCERT</a>, are worth
    passing to a new tutor. Our look at
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching versus a home tutor for
    JEE</a> was written for Gurugram families, yet the reasoning carries over.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmu-mode">Should lessons be at home or online in Jammu?</h2>
  <p>
    A tutor beside the student suits young children, anyone who wanders off on a screen, and subjects where the
    working on paper is what matters, such as Maths and numerical Physics. Online lessons open up specialists from
    across India, which counts most for IB, IGCSE, ISC electives and harder entrance problems. In Jammu, a few local
    facts tip the balance:
  </p>
  <ul>
    <li><strong>The river.</strong> Most crossings between the right-bank colonies and the left-bank sectors go over a bridge, so a tutor on your own bank is easier to keep for home lessons, and an online specialist fills the gap when the right person lives across the Tawi.</li>
    <li><strong>Roadworks.</strong> Flyover work towards Last Morh and Satwari brings diversions until it is complete; agree a slightly earlier start if the tutor's route passes those junctions.</li>
    <li><strong>Busy roads at fixed hours.</strong> Market streets in the old city and Gandhi Nagar fill in the evening and the highway junctions slow at office hours, so the time of a lesson matters as much as the distance.</li>
    <li><strong>Hot afternoons and short winter days.</strong> On the hottest afternoons, and when winter evenings darken early, a planned online lesson keeps the week on track.</li>
  </ul>
  <p>
    Plenty of families settle on two or three home lessons a week with a short online session before tests, all with
    one tutor. Read our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">comparison of home and online
    tutoring</a>, or see <a href="{{ url('/online-tutor-jammu') }}">online tutors for Jammu</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmu-fees">What does a home tutor cost in Jammu?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set
    their own fee, and what you are quoted tends to depend on:
  </p>
  <ul>
    <li><strong>Stage of school.</strong> Lessons for younger classes usually cost less than senior-school lessons.</li>
    <li><strong>Depth of the goal.</strong> Entrance-level work in a subject is priced above help with the school syllabus in that same subject.</li>
    <li><strong>The journey.</strong> A tutor crossing the river or the city may build the ride into the fee; one from your own colony usually does not.</li>
    <li><strong>Length and number of lessons.</strong> Fewer, longer lessons can stretch a fixed monthly sum further than many short ones.</li>
  </ul>
  <p>
    Before you agree, ask each tutor how many hours a week they think the subject needs, what a lesson length looks
    like, and how missed lessons are handled. Put the money where the difficulty is: one strong tutor for the hardest
    subject usually does more than lighter help in several. Every shortlisted fee is visible before the demo, and we
    do not suggest tutors above the monthly figure you give us. The <a href="{{ url('/pricing-guide') }}">pricing guide</a>
    breaks fees down by class and subject, and our post on
    <a href="{{ url('/blog/home-tuition-fees-jammu') }}">home tuition fees in Jammu</a> covers the local questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmu-choose">What should you watch for in the demo class?</h2>
  <p>A profile gets a tutor onto the shortlist; the free demo tells you whether to keep them. Look for:</p>
  <ol>
    <li><strong>Questions before teaching.</strong> Did the tutor ask about the school timetable, tests and any coaching before planning?</li>
    <li><strong>A short diagnosis.</strong> Did they find out what your child already knows instead of starting the chapter cold?</li>
    <li><strong>Comfortable language.</strong> Could your child follow easily, whether the explanation came in English, Hindi or both?</li>
    <li><strong>Knowledge of your board.</strong> Could they describe how this year's JKBOSE, CBSE or CISCE paper is set without guessing?</li>
    <li><strong>The student doing the work.</strong> Did your child solve problems during the hour, rather than just watch?</li>
    <li><strong>A slot that will last.</strong> Can the tutor reach you at that hour every week, from where they live, on your side of the Tawi or not?</li>
  </ol>
  <p>
    For an apartment building, give the gate the tutor's name before the demo; for a house, send the sector or lane, a
    landmark and a map pin. Keep lessons in a shared room with an adult at home. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> and our guide
    to <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a> help with the bigger
    decisions. Tutors who join NXTutors go through an ID check; <a href="{{ url('/how-we-verify-tutors') }}">here is
    how it works</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmu-calendar">When in the school year should tuition start?</h2>
  <p>
    CBSE's academic session begins in April, and JKBOSE and CISCE publish their own calendars and date sheets, so
    check the board that applies to your child. A Jammu board or entrance year usually breaks into five stretches:
  </p>
  <ul>
    <li><strong>April to June:</strong> new books, and the summer break for repairing old gaps; morning or evening lessons avoid the hottest part of the day.</li>
    <li><strong>July to September:</strong> steady weekly lessons through the rains, with an online lesson as the agreed fallback on the wettest days.</li>
    <li><strong>October to November:</strong> the festival weeks; plan lighter weeks and make the hours up either side.</li>
    <li><strong>December to February:</strong> finish the syllabus, switch to full papers and pre-boards, and keep an eye on the board's own notices.</li>
    <li><strong>March to May:</strong> board papers end, the second JEE Main session and JEE Advanced follow, and NEET UG comes round.</li>
  </ul>
  <p>
    Your school's winter and summer vacation dates can differ from these stretches, so fit the plan to the school's
    calendar and confirm exam dates only from official notices. Starting in April gives the whole year; starting
    later still helps, with more weight on full papers and exam technique.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmu-start">How do you start with a tutor in Jammu?</h2>
  <p>
    Tell us the class, board and subjects, your colony with a chowk or morh nearby, and the hours that fit around school.
    We send two or three tutors; you pick one for a free demo and decide afterwards. Open your own locality from the
    list on this page, browse <a href="{{ url('/tutors') }}">all tutors</a> or book a
    <a href="{{ url('/demo-class') }}">free demo class</a>. If no home tutor lives close enough yet, an online tutor from
    another part of India can begin right away.
  </p>
  <p>
    For a walk through every zone in more detail, read our
    <a href="{{ url('/blog/jammu-home-tuition-guide') }}">Jammu home tuition guide</a>, which links each locality page
    from Gandhi Nagar to Roop Nagar.
  </p>
  <p class="jmu-note">
    Searching in another city? We also list home tutors in <a href="{{ url('/city/srinagar') }}">Srinagar</a>,
    <a href="{{ url('/city/chandigarh') }}">Chandigarh</a> and <a href="{{ url('/city/delhi') }}">Delhi</a>, and in
    <a href="{{ url('/city') }}">cities across India</a>.
  </p>
  <p class="jmu-note">
    Teaching in Jammu? See <a href="{{ url('/tuition-jobs/jammu') }}">home tuition jobs in Jammu</a> and the localities
    where families are asking for tutors.
  </p>
  </section>

  </div>
</article>
