{{--
  Long-form guide for the Agartala city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for Agartala parents
  arranging a home or online tutor. Practical and educational only: no
  tourism, no history beyond what helps a tutor find a house, and palaces or
  places of worship appear only as landmarks. Every figure is either live from
  the database or a published NXTutors policy; local facts come only from the
  cited research in database/seo-content/areas/agartala-research.json; the
  TBSE description comes from the board's own site (https://tbse.tripura.gov.in/).
  No school, college, institute, hospital, society, developer or person is named.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $agtAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $agtA = function (string $slug, string $label) use ($agtAreaSlugs) {
      return in_array($slug, $agtAreaSlugs, true)
          ? '<a href="' . e(url('/city/agartala/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $agtTutors = (int) ($hubCounts['tutors'] ?? 0);
  $agtAreas = $allAreas->count();
@endphp

<article class="nx-guide agt-guide" aria-labelledby="agtGuideTitle">
  <h2 id="agtGuideTitle">Home tuition in Agartala: a ward-by-ward guide for parents, from Kunjaban to Badharghat</h2>

  <p class="nx-guide__lede agt-lede">
    Agartala is a capital set on the plains of the Haora River, with low hills only on its northern edge,
    and most of its neighbourhoods go by the names of municipal wards. That keeps home tuition fairly simple
    to organise. The real questions are which ward the tutor lives in, which
    chowmuhani or landmark leads to your lane, and whether the lesson hour clashes with a market evening or the
    office rush towards the centre. Get those three right and a weekly routine holds for the whole school year,
    whether your child follows the Tripura Board, CBSE or another board.
  </p>
  <nav class="nx-guide__toc agt-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#agt-how">Matching</a> ·
    <a href="#agt-zones">Four zones</a> ·
    <a href="#agt-boards">Boards</a> ·
    <a href="#agt-classes">Classes</a> ·
    <a href="#agt-subjects">Subjects</a> ·
    <a href="#agt-jee-neet">JEE &amp; NEET</a> ·
    <a href="#agt-mode">Home or online</a> ·
    <a href="#agt-fees">Fees</a> ·
    <a href="#agt-choose">Demo class</a> ·
    <a href="#agt-calendar">Year plan</a> ·
    <a href="#agt-start">Start</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="agt-how">How are Agartala families matched with a tutor?</h2>
  <p>
    You fill in a single request. Name the class and board (TBSE, CBSE or something else), the subject that worries
    you most, your ward and a nearby landmark, the evenings your child is actually free, a monthly amount you are
    comfortable spending, and whether you want lessons at home, online or a mix of both. From that we put forward two
    or three tutors, each with the fee shown on the profile before you meet. Your chosen tutor's first lesson is a
    free demo, and if the fit is wrong later, moving to another tutor costs nothing. In Agartala these details shape
    the shortlist more than anything else:
  </p>
  <ul>
    <li><strong>The exact ward.</strong> Several localities spread over two or three municipal wards, such as Shibnagar and Paschim Shibnagar, or Town, Paschim and Purba Pratapgarh. Naming the right one points us to tutors who really live nearby.</li>
    <li><strong>A chowmuhani or landmark.</strong> Directions here run from crossings and well-known buildings rather than house numbers. One clear reference saves a lost first evening.</li>
    <li><strong>The board and the exam ahead.</strong> A Madhyamik candidate, a Higher Secondary student and a CBSE Class 12 student each need someone familiar with that particular paper.</li>
    <li><strong>The busy days near you.</strong> Market days, festival fairs and immersion processions affect some wards; tell the tutor which ones touch your lane.</li>
  </ul>
  <p>
    Ask the tutor to teach the demo from what your child is doing in school this week. An ordinary chapter shows
    their method far better than a lesson prepared to impress.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agt-zones">Agartala in four zones</h2>
  <p>
    @if($agtTutors > 0)
      Suggestions for Agartala are drawn from {{ number_format($agtTutors) }} tutor profiles,
    @else
      Suggestions for Agartala are drawn from our tutor profiles,
    @endif
    and @if($agtAreas > 0){{ number_format($agtAreas) }} Agartala localities @else each Agartala locality we cover @endif
    have a page of their own. A locality page shows tutors living in that locality first, then tutors elsewhere in the
    same zone, then the rest of the city, and finally online tutors from across India. Our four groups follow the
    municipal corporation's own North, Central, East and South zones, so the names will be familiar:
    <a href="#agt-north">North Agartala</a>, <a href="#agt-central">Central Agartala</a>,
    <a href="#agt-east">East Agartala</a> and <a href="#agt-south">South Agartala</a>. One adjustment: Pratapgarh
    stretches across a Central ward and two South wards, and we list it with the south.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="agt-north">North Agartala: the hillock wards</h3>
  <p>
    This is where the city climbs from the plains into low hills. {!! $agtA('kunjaban', 'Kunjaban') !!} sits on a
    green hillock topped by the 1917 palace that is being turned into a cultural museum, and the corporation's North
    zone office is at Kumari Tilla inside the locality. {!! $agtA('indranagar', 'Indranagar') !!} is known across the
    city for its Kali temple, whose three-day fair at Diwali fills the surrounding roads; Dhaleswar and Banamalipur are
    close on its other side. {!! $agtA('abhoynagar', 'Abhoynagar') !!}, also written Abhaynagar, has a shrine dating
    from the late nineteenth century and hosts a large annual spring festival. Chanmari, Nandannagar and Radhanagar are
    the other North zone wards.
  </p>
  <p>
    For tuition, the three northern localities feed each other well: a tutor in Indranagar can cover Abhoynagar, and
    one in Kunjaban can reach both. Tutors from central Krishnanagar or Banamalipur are the next ring. Homes on the
    hill roads of Kunjaban are easier to find with a landmark on the slope, so send one with the phone number before
    the demo. Around the Diwali fair and the spring festival, keep that week flexible or teach it online.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="agt-central">Central Agartala: the old core and the markets</h3>
  <p>
    {!! $agtA('krishnanagar', 'Krishnanagar') !!} lies almost at the middle of the city and is one of its most densely populated
    parts, with Ujjayanta Palace, now the state museum, on its western edge, a weekly market on Tuesdays and Fridays,
    and the state transport terminus close by. {!! $agtA('ramnagar', 'Ramnagar') !!}, to the north-west, is among the
    earliest planned neighbourhoods in Tripura, laid out as a grid and split into about twelve numbered divisions.
    {!! $agtA('banamalipur', 'Banamalipur') !!} forms a ward together with Dimsagar, between the centre and the eastern
    wards. {!! $agtA('joynagar', 'Joynagar') !!}, listed as Jaynagar in the ward list, is both homes and trade, beside
    Battala Bazaar, one of the largest markets in the state. {!! $agtA('melarmath', 'Melarmath') !!} sits on the city's
    first flyover, opened in 2019, which links Police Lines in the south with Fire Brigade Chowmuhani.
  </p>
  <p>
    Central homes draw tutors from every direction, so families here usually see the widest choice. What needs care is
    the hour, not the distance. Market evenings in Krishnanagar and the bustle around Battala Bazaar make late
    afternoon a poor time to arrive, and office closing time slows the roads into the centre. In Ramnagar, the
    division number alone gets a tutor most of the way. In Joynagar, give a lane landmark rather than the market, and
    plan for the Durga Puja immersion days.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="agt-east">East Agartala: settled residential wards and a second station</h3>
  <p>
    {!! $agtA('dhaleswar', 'Dhaleswar') !!}, also spelt Dhaleshwar, is a settled residential locality with several
    schools; the corporation's East zone office is at Ashram Chowmuhani within it, and Math Chowmuhani is the other
    familiar crossing. {!! $agtA('shibnagar', 'Shibnagar') !!} covers two wards, Shibnagar and Paschim Shibnagar, and a
    historic mosque there is a well-known reference point. {!! $agtA('jogendranagar', 'Jogendranagar') !!} is one of the
    larger residential areas of the city, spread over Jogendranagar, Uttar Jogendranagar and Purba Jogendranagar, with
    Aralia alongside, and it has its own railway station on the Lumding to Sabroom line. Kashipur-Khayerpur is the
    remaining East zone ward.
  </p>
  <p>
    Because Dhaleswar sits between Banamalipur and Shibnagar, a tutor living anywhere along that line can cover the
    whole zone in a week. School opening and closing hours add traffic on Dhaleswar's local roads, so late afternoon or
    early evening suits better than straight after school. In Jogendranagar, say which of the three wards you are in
    and give a reference near Station Road; a tutor living near the main station can also use the passenger trains.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="agt-south">South Agartala: the railway side and the flyover link</h3>
  <p>
    {!! $agtA('badharghat', 'Badharghat') !!}, also written Badarghat, forms the Bhattapukur-Badarghat and Dakkhin
    Badarghat wards, and Agartala railway station, opened in 2008 and rebuilt for broad gauge in 2016, is listed here.
    The corporation's South zone office stands near the TV Centre. {!! $agtA('arundhutinagar', 'Arundhutinagar') !!}
    covers two South zone wards; the city's oldest church, from the 1930s, is the landmark most people know.
    {!! $agtA('pratapgarh', 'Pratapgarh') !!} runs from Town Pratapgarh near Melarmath down to Paschim and Purba
    Pratapgarh in the south. Bardowali, Siddhi Ashram and Rajlaxminagar complete the South zone.
  </p>
  <p>
    The flyover that starts at Police Lines helps tutors here: crossing between the south and the centre is now
    straightforward, so a South zone family can look at tutors in Melarmath or Krishnanagar as well as those nearby.
    Near the station, train times bring extra traffic, so leave a margin in the schedule. In Arundhutinagar and
    Pratapgarh, always name the ward or part, because each name covers more than one ward.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agt-boards">Which boards do Agartala students follow?</h2>
  <p>
    Schools in Agartala follow the Tripura Board, CBSE, CISCE or, less often, an international board. We match the
    board along with the class, because experience with one board's papers does not automatically transfer to
    another.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Tripura Board of Secondary Education (TBSE)</h3>
  <p>
    TBSE conducts the Madhyamik examination at the end of Class 10 and the Higher Secondary (+2 stage) examination at
    the end of Class 12. Its official website publishes the syllabus for Classes IX to XII, model question papers, the
    academic calendar, notifications, circulars and results. A good tutor works from that syllabus and the model
    papers, and takes every date from the board's notices rather than from hearsay. Our
    <a href="{{ url('/tripura-board-tutor-agartala') }}">Tripura Board tutors in Agartala</a> page explains more.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    CBSE examinations rest on the NCERT books and increasingly test whether a student can use a concept in an
    unfamiliar question. Since JEE and NEET draw on the same NCERT chapters, steady work here pays twice. See
    <a href="{{ url('/cbse-home-tutor-agartala') }}">CBSE home tutors in Agartala</a>.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE, ISC, IB and IGCSE</h3>
  <p>
    CISCE papers are long and the syllabus broad, so revision has to come round more than once. For IB or Cambridge
    IGCSE, a specialist is usually easier to find online; a tutor can coach IB coursework but should never write it.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agt-classes">What should a tutor work on at each stage?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Primary and middle school</h3>
  <p>
    Reading with ease, confident number work and finishing homework independently matter most. Short lessons two or
    three times a week beat a single long one. Before any entrance foundation course, make sure Class 6 to 8 maths is
    really secure.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    Weak spots in Class 9 algebra, geometry and science come back in the Madhyamik or CBSE Class 10 year. The tutor's
    job is to stay level with school and stop the board year turning into a scramble. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 Maths preparation plan</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 Science notes</a> follow NCERT chapters and help
    on other boards too.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    The jump into Class 11 surprises most students. For the Higher Secondary or CBSE Class 12 papers, one strong tutor
    for the toughest subject usually beats a general tutor for everything. Try our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 Physics strategies</a> and
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">calculus and algebra guide</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agt-subjects">Which subjects do Agartala parents ask about?</h2>
  <p>
    From Class 9 onwards the requests are mostly for Maths, Science, Physics and Chemistry, with English not far
    behind. Tutors on NXTutors also take Social Science, Computer Science, Accountancy, Economics and Business Studies,
    and many teach every subject to younger children. Agartala has dedicated pages for
    <a href="{{ url('/maths-home-tutor-agartala') }}">maths home tutors</a>,
    <a href="{{ url('/science-home-tutor-agartala') }}">science home tutors</a>,
    <a href="{{ url('/physics-home-tutor-agartala') }}">physics home tutors</a>,
    <a href="{{ url('/chemistry-home-tutor-agartala') }}">chemistry home tutors</a> and
    <a href="{{ url('/english-home-tutor-agartala') }}">English home tutors</a>.
  </p>
  <p>
    A Maths tutor worth keeping finds the earlier topic where a mistake started, even two classes back. In Physics, a
    student should explain why an equation applies before plugging numbers in. Chemistry blends numericals, trends and
    recall, which our <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Organic and Inorganic
    Chemistry guide</a> sorts out. English improves when the student writes answers in their own words, and our
    <a href="{{ url('/blog/spoken-english-for-students') }}">spoken English guide</a> adds speaking practice at home.
    Subjects such as Accountancy or Computer Science at senior level are often simpler to cover online.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agt-jee-neet">Can an Agartala tutor support JEE or NEET?</h2>
  <p>
    Yes, if the role is clear. Most families want one of three things: someone to clear the doubts from each week's
    practice, someone to fold board chapters and entrance questions into one timetable, or extra time on the subject
    costing the most marks. The Class 11 and 12 NCERT chapters underpin both the board papers and the entrance
    syllabus, so one revision plan can serve both.
  </p>
  <p>
    NTA holds JEE Main in two sessions early in the year, and qualifiers can then attempt JEE Advanced. NEET UG is held
    once a year, with Biology carrying half the marks. Always confirm dates in that year's official bulletin. The
    strongest entrance specialists are often online, so pairing a local home tutor with an online one is common. Pass
    on our <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">topic-wise JEE Maths plan</a> and the
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NCERT-first plan for NEET Biology</a> to whichever tutor you
    pick.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agt-mode">Home lessons or online in Agartala?</h2>
  <p>
    Home lessons suit young children, for students who lose focus on a screen, and for Maths and Physics
    numericals where the tutor needs to see each line. Online lessons open up specialists anywhere in India. Several
    Agartala realities push families towards a blend:
  </p>
  <ul>
    <li><strong>Festival and market days.</strong> The Diwali fair in Indranagar, the immersion days in Joynagar and market evenings in Krishnanagar are good weeks to switch a lesson online.</li>
    <li><strong>The monsoon.</strong> On heavy-rain evenings, allow extra travel time or move that class to a screen instead of cancelling it.</li>
    <li><strong>Opposite ends of the city.</strong> A family in Arundhutinagar and a tutor in Abhoynagar can manage one home visit plus one online session a week.</li>
    <li><strong>Rarer subjects.</strong> For an uncommon elective or an international board, the right tutor may live in another state.</li>
  </ul>
  <p>
    Many families settle on one or two home visits a week with the same tutor teaching online when needed. Compare the
    options in our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor guide</a>, and see
    <a href="{{ url('/online-tutor-agartala') }}">online tutors for Agartala</a> for how remote classes run.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agt-fees">How much does home tuition cost in Agartala?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set
    their own fees, so when you compare a shortlist, these questions help:
  </p>
  <ul>
    <li><strong>What level is being taught?</strong> Primary and school-level support usually costs less than senior classes or entrance work.</li>
    <li><strong>Where does the tutor live?</strong> Travelling in from another zone may be reflected in the fee; a tutor from the next ward often does not add anything.</li>
    <li><strong>Are online lessons charged differently?</strong> Check how a festival week taught online is billed.</li>
    <li><strong>How many hours are you buying?</strong> Compare total teaching hours, not the number of visits.</li>
  </ul>
  <p>
    You see every shortlisted fee before the demo, and we do not suggest tutors priced above the amount you gave us.
    The <a href="{{ url('/pricing-guide') }}">pricing guide</a> sets out fees by class and subject, and our post on
    <a href="{{ url('/blog/home-tuition-fees-agartala') }}">home tuition fees in Agartala</a> lists the local questions
    worth asking.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agt-choose">What should you watch for in the demo class?</h2>
  <p>A profile gets a tutor onto the shortlist; the demo shows whether they belong there. Watch whether the tutor:</p>
  <ol>
    <li><strong>Asked before planning.</strong> About school timings, coming tests and the busy days near your home.</li>
    <li><strong>Found the starting level.</strong> With a few quick questions rather than assumptions.</li>
    <li><strong>Made the idea clear.</strong> Your child could explain it back afterwards.</li>
    <li><strong>Knew the board.</strong> They could say how the Madhyamik, Higher Secondary or CBSE paper is set and where to check.</li>
    <li><strong>Got your child working.</strong> Problems were solved during the hour, not just watched.</li>
    <li><strong>Can keep the slot.</strong> They can reach your ward at that time every week.</li>
  </ol>
  <p>
    Share the ward, landmark and a map pin before the demo, and keep lessons in a common room with an adult at home.
    Tutors who join go through an ID check; <a href="{{ url('/how-we-verify-tutors') }}">how we check tutors</a>
    explains what that involves. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class
    checklist</a> and the guide to <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and
    stream</a> cover more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agt-calendar">How should tuition fit the school year?</h2>
  <p>
    TBSE, CBSE and CISCE schools keep different calendars, so take dates from your school and the board's own notices;
    TBSE posts its academic calendar on its website. A tuition year usually falls into four stretches:
  </p>
  <ul>
    <li><strong>Start of the session:</strong> new books and teachers; spot and repair what last year left weak.</li>
    <li><strong>Monsoon months:</strong> hold the weekly routine, moving very wet evenings online.</li>
    <li><strong>Festival season:</strong> plan around the Puja and Diwali weeks so the syllabus does not stall.</li>
    <li><strong>Run-up to the board papers:</strong> timed full papers checked against the board's model papers and past papers.</li>
  </ul>
  <p>
    Starting early means time goes on understanding instead of catching up. A late start is still worth it, with more
    weight on practice papers and exam technique.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agt-start">How do you begin in Agartala?</h2>
  <p>
    Send us the class, board, subjects, ward, landmark and your child's free hours. We suggest two or three tutors;
    you choose one for a free demo and decide afterwards. Pick your locality from the list on this page, look through
    <a href="{{ url('/tutors') }}">all tutors</a> or book a <a href="{{ url('/demo-class') }}">free demo class</a>. If
    no home tutor is near enough yet, an online tutor can start straight away.
  </p>
  <p>
    For more on each ward, our <a href="{{ url('/blog/agartala-home-tuition-guide') }}">Agartala home tuition
    guide</a> walks through all four zones, from Kunjaban and Abhoynagar to Jogendranagar and Badharghat, with every
    locality linked.
  </p>
  <p class="agt-note">
    Outside Agartala? See home tutors in <a href="{{ url('/city/guwahati') }}">Guwahati</a>,
    <a href="{{ url('/city/kolkata') }}">Kolkata</a> and <a href="{{ url('/city/delhi') }}">Delhi</a>, or browse
    <a href="{{ url('/city') }}">cities across India</a>.
  </p>
  <p class="agt-note">
    Tutor in Agartala? See <a href="{{ url('/tuition-jobs/agartala') }}">home tuition jobs in Agartala</a> and the
    localities where families are looking for tutors.
  </p>
  </section>

  </div>
</article>
