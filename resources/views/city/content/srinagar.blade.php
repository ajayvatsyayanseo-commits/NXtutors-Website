{{--
  Long-form guide for the Srinagar city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for Srinagar parents
  arranging a home or online tutor. It is deliberately practical and
  educational: no politics, no tourism, and winter appears only as timing
  advice. Every figure is either live from the database or a published
  NXTutors policy; local facts come only from the cited research in
  database/seo-content/areas/srinagar-research.json; the JKBOSE description
  comes from the board's own site (https://jkbose.jk.gov.in/). No school,
  college, university, institute, hospital, place of worship, mall, society,
  developer or person is named.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $sxrAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $sxrA = function (string $slug, string $label) use ($sxrAreaSlugs) {
      return in_array($slug, $sxrAreaSlugs, true)
          ? '<a href="' . e(url('/city/srinagar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $sxrTutors = (int) ($hubCounts['tutors'] ?? 0);
  $sxrAreas = $allAreas->count();
@endphp

<article class="nx-guide sxr-guide" aria-labelledby="sxrGuideTitle">
  <h2 id="sxrGuideTitle">Home tuition in Srinagar: a parent's guide from Hazratbal to Nowgam</h2>

  <p class="nx-guide__lede sxr-lede">
    Srinagar grew along water. The Jhelum loops through the middle of the city, the commercial centre at Lal Chowk sits
    on its bank, the planned colonies of the Civil Lines line the river, the older quarters of the north run between
    the lakes, and newer housing has spread south and south-west towards Nowgam, Hyderpora and the airport side. Most
    families live in a house of their own on a colony lane rather than in a tower block, which makes a home tutor's
    visit simple to arrange. Two things shape tuition here more than in most Indian cities: the long winter break,
    when days are short and cold, and the way an address is given, usually as a small colony or mohalla inside a
    larger locality. Plan for both and a regular weekly tutor is very workable.
  </p>
  <nav class="nx-guide__toc sxr-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#sxr-how">How matching works</a> ·
    <a href="#sxr-zones">The five zones</a> ·
    <a href="#sxr-boards">Boards</a> ·
    <a href="#sxr-classes">Classes</a> ·
    <a href="#sxr-subjects">Subjects</a> ·
    <a href="#sxr-jee-neet">JEE &amp; NEET</a> ·
    <a href="#sxr-mode">Home or online</a> ·
    <a href="#sxr-fees">Fees</a> ·
    <a href="#sxr-choose">The demo class</a> ·
    <a href="#sxr-calendar">The school year</a> ·
    <a href="#sxr-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="sxr-how">How are Srinagar families matched with a tutor?</h2>
  <p>
    You fill in one request and the shortlist is built from it. Put down the student's class and board, the subjects
    that need work, the colony and a nearby landmark, the hours after school that are actually free, and whether you
    would like lessons at home, online or partly each. Add a rough monthly figure you are comfortable with. We then
    suggest two or three tutors whose fees you can read before meeting any of them. The first lesson with the one you
    pick is a free demo, and if the match does not suit your child, switching to another tutor later costs nothing.
    In Srinagar, four details make the biggest difference to who appears on that shortlist:
  </p>
  <ul>
    <li><strong>The exact colony, not just the locality.</strong> People in Rajbagh, Sonwar, Bemina or Hazratbal usually live in a named part such as Kursoo Rajbagh, Indira Nagar or Naseem Bagh. Giving that name lets us suggest a tutor who already knows the lanes.</li>
    <li><strong>Which bank and which side.</strong> A tutor who lives south of the centre in Natipora or Sanat Nagar will reach Barzulla more easily than Soura; one from Lal Bazar is the natural fit for Zadibal or Nowshera.</li>
    <li><strong>The board and the language of study.</strong> JKBOSE, CBSE, ICSE and ISC, and the international boards each have their own papers. Many children read their textbooks in English but think through a problem more comfortably in the language spoken at home, and a tutor who can move between them helps.</li>
    <li><strong>Winter plans.</strong> Tell us early whether lessons should continue through the long winter break, and whether some of those weeks could be online. It changes which tutors make sense.</li>
  </ul>
  <p>
    Keep the demo ordinary: use it for whatever chapter the class is on this week. A tutor who is good on a normal day
    is the one you want for the next ten months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sxr-zones">Srinagar, zone by zone</h2>
  <p>
    @if($sxrTutors > 0)
      Tutors shown for Srinagar are drawn from {{ number_format($sxrTutors) }} tutor profiles,
    @else
      Tutors shown for Srinagar are drawn from our tutor profiles,
    @endif
    and @if($sxrAreas > 0){{ number_format($sxrAreas) }} Srinagar localities @else each Srinagar locality we list @endif
    have a page of their own. On a locality page, tutors living in that locality come first, then tutors from the
    same zone, then those elsewhere in the city, and then online tutors from across India. We group the city into five
    zones for planning home visits, starting at the centre and moving west, south and then north:
    <a href="#sxr-civil">Civil Lines</a>, <a href="#sxr-karan">Karan Nagar and Bemina</a>,
    <a href="#sxr-airport">Airport Road</a>, <a href="#sxr-natipora">Natipora and Nowgam</a> and
    <a href="#sxr-north">North City</a>. These groups are ours; they are not municipal wards or postal divisions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="sxr-civil">Civil Lines: the riverside centre around Lal Chowk</h3>
  <p>
    {!! $sxrA('lal-chowk', 'Lal Chowk') !!} has been the city's main shopping and business district since the early
    twentieth century, stretching along both sides of Residency Road, with a clock tower, the ghanta ghar, put up on
    its roundabout in 1980. Families live in the lanes and older houses behind the shopfronts. Beside it,
    {!! $sxrA('jawahar-nagar', 'Jawahar Nagar') !!} is one of the city's two government-planned residential zones:
    wide roads, parks and houses on equal-sized plots along the Jhelum. {!! $sxrA('rajbagh', 'Rajbagh') !!}, also on
    the river, is a set of smaller parts that families give as their address, including Pathan Bagh, Kursoo Rajbagh,
    Rajbagh Extension and Aramwari. {!! $sxrA('sonwar', 'Sonwar') !!}, or Sonwar Bagh, runs parallel to the river below
    the Takht-i-Sulaiman hill and takes in Palpora, Banumsora and Indira Nagar, which was once a lake
    and keeps only a small stretch of water today.
  </p>
  <p>
    For tuition, the centre is easy to reach from almost anywhere, but the main roads are crowded when schools open
    and close and again when offices and shops empty out. Late afternoon slots after the school rush, or a tutor who
    lives in the next colony, keep the week steady. Homes in Jawahar Nagar and the inner Sonwar colonies are
    independent houses where a tutor parks outside and walks to the door. In Rajbagh, give the part of the locality
    and a landmark; the name Rajbagh alone covers too much ground.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="sxr-karan">Karan Nagar and Bemina: older planned colonies and the western housing belt</h3>
  <p>
    {!! $sxrA('karan-nagar', 'Karan Nagar') !!} is the second of the two planned residential zones, and one of its
    parts was declared the first civil colony by the princely state government in 1942. It has Aali Kadal to the
    south, Batamaloo to the west, Safa Kadal to the north and Nawabazar to the east, and a large institutional campus makes
    its daytime roads busier than a quiet colony's. {!! $sxrA('batamaloo', 'Batamaloo') !!}, further west, was long
    known for the city's main bus stand, which has since moved to Qamarwari; shops and workshops still line its
    roads, with homes in the lanes behind. {!! $sxrA('bemina', 'Bemina') !!}, recorded in older sources as
    Abhimanyupur, is now a group of planned colonies on
    the bypass, among them Boatman Colony and MIG Colony.
  </p>
  <p>
    The four-lane city bypass runs past Bemina towards Tengpora, Hyderpora and Sanat Nagar, so a tutor living along
    that road can reach western homes quickly outside peak hours. Bemina's colony lanes allow doorstep arrival and
    easy parking; in Karan Nagar and Batamaloo, a lane name and a landmark save time. Mid-afternoon or later evening
    slots avoid the heaviest market and bypass traffic. A tutor from one of the three localities can usually cover
    the other two.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="sxr-airport">Airport Road: Hyderpora, Peerbagh and the southern colonies</h3>
  <p>
    {!! $sxrA('hyderpora', 'Hyderpora') !!} has grown from a village on the city's edge into a busy suburb of
    independent houses and plots, and it is known locally for its many coaching centres. Sanat Nagar, Barzulla and
    Rambagh are close by. {!! $sxrA('peerbagh', 'Peerbagh') !!} sits next to it on the way towards Humhama, built
    around a planned cooperative colony and neighbouring ones such as Alfazal Colony and Ibrahim Colony.
    {!! $sxrA('sanat-nagar', 'Sanat Nagar') !!} has its own post office, which also serves nearby
    {!! $sxrA('rawalpora', 'Rawalpora') !!}; around them lie Chanapora, Parray Pora, Mini Colony and Baghat. The
    airport itself is just beyond the city, in Budgam district, so the main road on this side carries steady through
    traffic.
  </p>
  <p>
    The bypass passes through Sanat Nagar and Hyderpora between Pantha Chowk and Bemina, and a small bridge beside the
    railway bridge over the Doodhganga links Rawalpora with Bagh-e-Mehtab, a handy shortcut for tutors coming from the
    Nowgam side. Almost every home is a house in a colony lane, so a tutor comes straight to the door. Students here
    often attend coaching already; a one-to-one tutor is most useful when given a narrow job, such as clearing the
    week's coaching doubts in one subject.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="sxr-natipora">Natipora and Nowgam: the flyover and the railway station</h3>
  <p>
    {!! $sxrA('natipora', 'Natipora') !!} lies between the city centre and Nowgam, mostly family houses in lanes off
    the main road. {!! $sxrA('barzulla', 'Barzulla') !!} is close to Rambagh and Hyderpora, with shops and offices on
    the road and homes on either side of it. {!! $sxrA('nowgam', 'Nowgam') !!} is where Srinagar railway station stands:
    opened in 2008 on the Jammu–Baramulla line between Pampore and Budgam, it has had through trains from Jammu since
    June 2025. {!! $sxrA('bagh-e-mehtab', 'Bagh-e-Mehtab') !!}, on the banks of the Doodhganga, was an orchard before
    it was built up and is now a government housing colony and several private colonies, with Chanapora and Nowgam as
    neighbours.
  </p>
  <p>
    The flyover from the city centre to Rambagh and on to Alochi Bagh has ramps at Gogji Bagh, Rambagh, Natipora and
    Barzulla; the Natipora ramp opened in 2018 and the Rambagh to Alochi Bagh stretch in May 2019. For a tutor coming
    from Lal Chowk or Jawahar Nagar, it is the quick way south over the ground-level roads. A tutor from Budgam or
    Pampore can take the train to the station and a short auto ride on. The roads below the flyover are busy at
    office and school hours, so evening lessons are the common choice here.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="sxr-north">North City: old quarters between the lakes</h3>
  <p>
    {!! $sxrA('nowshera', 'Nowshera') !!}, whose Persian name means new city, was laid out in the fifteenth century
    with a canal, the Nallah Mar, linking Dal Lake with Anchar Lake. {!! $sxrA('zadibal', 'Zadibal') !!} lies on the
    eastern bank of Khushal Sar lake, with older houses in close lanes. {!! $sxrA('lal-bazar', 'Lal Bazar') !!} is a
    cluster of neighbourhoods such as Mughal Street, Broadway Street, Rose Lane and Bagwanpora.
    {!! $sxrA('soura', 'Soura') !!} sits east of Anchar Lake near the southern end of the 90 Feet Road, with a large
    institutional campus among its homes. {!! $sxrA('buchpora', 'Buchpora') !!}, on the eastern side of Anchar Lake along
    the road towards Leh, has turned from farmland into residential colonies. {!! $sxrA('hazratbal', 'Hazratbal') !!},
    on the north-western shore of Dal Lake, includes Naseem Bagh, Mallabagh, Zakura, Batpora, Ishber, Habak and
    Tailbal, and has university and engineering campuses nearby.
  </p>
  <p>
    This is the zone where the type of house matters most. In the old lanes of Zadibal and Nowshera a car may not
    reach the door, so tutors park on the main road and walk the last stretch; in Buchpora's newer colonies and the
    Hazratbal neighbourhoods, arrival is at the gate. Because many university students and teachers live around
    Hazratbal, families often find senior-class subject tutors close by. Roads near the institutional campus and the
    lakefront fill up at times, so ask the tutor which route they use before fixing the slot.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sxr-boards">Which boards do Srinagar tutors teach?</h2>
  <p>
    Most Srinagar students are on the Jammu and Kashmir board or CBSE, with others on CISCE's ICSE and ISC and a few on
    IB or Cambridge IGCSE. We match the board and the class together, because a tutor who knows one board's paper
    well can still be the wrong choice for another.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Jammu and Kashmir Board of School Education (JKBOSE)</h3>
  <p>
    JKBOSE conducts the Secondary School Examination for Class 10 and the Higher Secondary examinations for Class 11
    (Part I) and Class 12 (Part II), with separate Kashmir and Jammu divisions. Its official website publishes the
    syllabus, model test papers, a question bank, textbooks, date sheets, circulars and results. A tutor should teach
    from those materials and the prescribed books, and every date should be read from the board's own notices, not
    from forwarded messages. Our <a href="{{ url('/jkbose-tutor-srinagar') }}">JKBOSE tutors in Srinagar</a> page goes
    further.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    CBSE builds its papers on the NCERT books and increasingly asks students to apply an idea in an unfamiliar
    question. That same NCERT base supports JEE and NEET, so careful chapter work pays twice. Watch the writing: a
    student who has done months of objective practice often needs help setting out full, stepped answers again.
    See our <a href="{{ url('/cbse-home-tutor-srinagar') }}">CBSE home tutors in Srinagar</a>.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    ICSE (Class 10) and ISC (Class 12) set long answer papers across a broad syllabus, with English literature texts
    and project work in several subjects. Coverage is the challenge, so the tutor should plan revision in rounds and
    set timed writing well before the papers. Our <a href="{{ url('/icse-home-tutor-srinagar') }}">ICSE home tutors in
    Srinagar</a> page explains more.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and IGCSE</h3>
  <p>
    For the IB Diploma or Cambridge IGCSE, the right specialist is usually found online. IB counts coursework
    alongside the final exams, and a tutor may guide an Internal Assessment or Extended Essay but must never write it;
    IGCSE responds to regular past-paper practice marked against the official schemes.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sxr-classes">What should tuition cover at each stage?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Classes 1 to 8</h3>
  <p>
    Young children need confident reading, sound number sense and the habit of finishing written work. Many Srinagar
    children speak one language at home and study in another, so a short spell of reading aloud and talking through
    the meaning in each lesson does more than another worksheet. If you are thinking about an entrance foundation
    course, first make sure Class 6 to 8 maths is truly solid.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    Class 9 is where algebra, geometry and science chapters begin to stack up, and gaps left here follow the student
    into the Class 10 board year. The tutor's task is to keep pace with school and to protect the board year from a
    late scramble, especially when the winter break falls in the middle of it. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 Maths preparation plan</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 Science notes</a> follow the NCERT chapters and
    help students on other boards too.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    The jump from Class 10 to 11 is the steepest in school, and most of the entrance syllabus sits in Class 11. A
    student who falls behind in Class 11 Physics or Maths rarely catches up later, so one specialist for each hard
    subject is worth more than a general tutor for all. Our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 Physics strategies</a> and
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a> help in
    the board year.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sxr-subjects">Which subjects can a Srinagar tutor take on?</h2>
  <p>
    Maths, Physics, Chemistry and Biology are the subjects most Srinagar parents ask about from Class 9 onward, and
    English is close behind. Tutors on NXTutors also teach Hindi, Social Science, Computer Science,
    Accountancy, Economics and Business Studies, and many take every subject for primary children. Srinagar has its
    own pages for <a href="{{ url('/maths-home-tutor-srinagar') }}">maths home tutors</a>,
    <a href="{{ url('/science-home-tutor-srinagar') }}">science home tutors</a>,
    <a href="{{ url('/physics-home-tutor-srinagar') }}">physics home tutors</a>,
    <a href="{{ url('/chemistry-home-tutor-srinagar') }}">chemistry home tutors</a>,
    <a href="{{ url('/biology-home-tutor-srinagar') }}">biology home tutors</a> and
    <a href="{{ url('/english-home-tutor-srinagar') }}">English home tutors</a>.
  </p>
  <p>
    In Maths, a good tutor goes back to where the confusion began, even if that was two years ago. In Physics, the
    student should be able to explain why a formula applies before using it. Chemistry asks for three different kinds
    of study at once: calculation in Physical, patterns in Organic and careful memory work in Inorganic, which our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Class 12 Organic and Inorganic Chemistry
    guide</a> sets out. For English, the aim is a student who can write a clear answer in their own words; our
    <a href="{{ url('/blog/spoken-english-for-students') }}">spoken English guide for students</a> adds speaking practice
    that can be done at home.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sxr-jee-neet">Can a tutor in Srinagar help with JEE or NEET?</h2>
  <p>
    Yes. Many Srinagar students who aim at engineering or medicine prepare from home, often with a local coaching
    batch, and a tutor helps most with a clearly defined role beside it:
  </p>
  <ul>
    <li><strong>Doubts cleared every week.</strong> Go through the latest coaching sheet or test and settle each question the student could not finish, before the next topic arrives.</li>
    <li><strong>Board and entrance in one plan.</strong> Class 11 and 12 NCERT chapters sit under both the board papers and the entrance syllabus, so one revision plan can serve both.</li>
    <li><strong>Time on the weakest subject.</strong> Extra hours in the subject that loses the most marks usually help more than equal time on all three.</li>
    <li><strong>Winter used well.</strong> The long winter break is a natural block for intensive work; with online lessons it can become the most productive part of the year rather than a pause.</li>
  </ul>
  <p>
    NTA conducts JEE Main in two sessions during the first half of the year, and students who qualify can attempt JEE
    Advanced. NEET UG takes place once a year, and Biology carries half of its marks, which is why NCERT Biology needs
    close, line-by-line study. Take every date from that year's official bulletin. Our
    <a href="{{ url('/jee-home-tutor-srinagar') }}">JEE home tutor</a> and
    <a href="{{ url('/neet-home-tutor-srinagar') }}">NEET home tutor</a> pages for Srinagar go into detail, and the
    topic plans for <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE Maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE Physics</a> and
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE Chemistry</a>, along with the
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NCERT-first approach to NEET Biology</a>, are useful to share
    with the tutor. Our article on
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching versus a home tutor for JEE</a>
    was written for Gurugram, but the trade-offs it weighs apply equally here.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sxr-mode">Should lessons be at home or online in Srinagar?</h2>
  <p>
    Home lessons suit younger children, students who lose focus on a screen, and subjects where watching the student
    write is the point, such as Maths and Physics numericals. Online lessons open up specialists from anywhere in
    India, which matters for IB, IGCSE, ISC electives and the hardest entrance problems. In Srinagar, a few local
    factors push many families to use both:
  </p>
  <ul>
    <li><strong>The winter break.</strong> When schools close for the long winter holiday and daylight is short, an online lesson in the warm part of the day keeps the routine without anyone travelling in the cold.</li>
    <li><strong>Houses, not towers.</strong> Most homes are on colony lanes, so a home tutor arrives at the door with no gate formalities; in the old lanes of the north, allow time to walk in from the main road.</li>
    <li><strong>Cross-city distances.</strong> A family in Buchpora and a tutor in Bagh-e-Mehtab are on opposite sides of the city; a mix of one home visit and one online session can make an out-of-zone specialist workable.</li>
    <li><strong>Specialist subjects.</strong> For a rarer elective or a particular board, the nearest strong tutor may be in another city, and online is the practical answer.</li>
  </ul>
  <p>
    A common pattern is two home lessons a week through term and more online sessions in winter, with the same tutor
    throughout. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor comparison</a>
    covers the trade-offs, and our <a href="{{ url('/online-tutor-srinagar') }}">online tutors for Srinagar</a> page
    explains how remote lessons are set up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sxr-fees">What does a home tutor cost in Srinagar?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor
    decides their own fee. When you compare the fees on a shortlist, it helps to know what tends to move them:
  </p>
  <ul>
    <li><strong>The level.</strong> Lessons for primary and middle classes generally sit lower than lessons for the senior classes.</li>
    <li><strong>The target.</strong> Teaching aimed at an entrance test is priced above school-level help in the same subject.</li>
    <li><strong>The travel.</strong> A tutor crossing the city may count the journey in the fee; one from your own zone usually does not.</li>
    <li><strong>The format.</strong> Online weeks and home weeks may be priced differently, so ask how the tutor handles the winter switch.</li>
  </ul>
  <p>
    Spend where the difficulty lies: one capable tutor for the hardest subject usually achieves more than lighter help
    in several. Every shortlisted fee is visible before the demo, and we do not suggest tutors above the amount you
    gave. The <a href="{{ url('/pricing-guide') }}">pricing guide</a> lists fees by class and subject, and our post on
    <a href="{{ url('/blog/home-tuition-fees-srinagar') }}">home tuition fees in Srinagar</a> looks at the questions to
    ask locally.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sxr-choose">What should you watch for in the demo class?</h2>
  <p>A good profile earns a place on the shortlist; the demo tells you whether the tutor should keep it. Notice whether the tutor:</p>
  <ol>
    <li><strong>Asked about the whole week.</strong> School hours, coaching, upcoming tests and winter plans, before suggesting any timetable.</li>
    <li><strong>Found the starting point.</strong> A few quick questions to see what your child already knows, rather than beginning the chapter from the top.</li>
    <li><strong>Was easy to follow.</strong> Your child understood the explanation, in English or in the language they think in.</li>
    <li><strong>Knew the board.</strong> They could describe how your board's paper is set this year, and where they would check if unsure.</li>
    <li><strong>Got your child working.</strong> Your child solved problems during the hour rather than only watching.</li>
    <li><strong>Can hold the slot.</strong> They can come at that hour every week from where they live, and have a plan for the cold months.</li>
  </ol>
  <p>
    Send the colony name, a landmark and a map pin before the demo, and say where a two-wheeler or car can be left if
    your lane is narrow. Hold lessons in a shared room with an adult at home. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> and our guide to
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a> go into more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sxr-calendar">How does the winter shape the tuition year?</h2>
  <p>
    Session and exam dates in Srinagar differ between JKBOSE, CBSE and CISCE schools, and between schools, so take
    them from your school and from each board's own notices. What every family plans around is the same: a long
    winter break with short, cold days. A year with a tutor tends to fall into four parts:
  </p>
  <ul>
    <li><strong>The start of the session:</strong> new books and new teachers; use the first weeks to find and repair gaps from the previous class.</li>
    <li><strong>Through the main term:</strong> regular home lessons after school, with afternoon or early evening slots chosen to avoid the school and office rush in your zone.</li>
    <li><strong>The long winter break:</strong> bring lessons forward into daylight, move some or all of them online, and use the free weeks for revision blocks, past papers or entrance practice.</li>
    <li><strong>Before board papers and entrance tests:</strong> full papers under timed conditions, with the tutor marking them against the board's own model papers and schemes.</li>
  </ul>
  <p>
    The earlier in the session tuition starts, the more of it can go on understanding rather than catching up. A
    late start still helps, with more of the time spent on papers and exam technique.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sxr-start">How do you get started in Srinagar?</h2>
  <p>
    Send the class, board, subjects, colony and landmark, and the hours your child is free, plus whether winter
    lessons should be online. We suggest two or three tutors; you choose one for a free demo and decide after it.
    Pick your locality from the list on this page, browse <a href="{{ url('/tutors') }}">all tutors</a> or book a
    <a href="{{ url('/demo-class') }}">free demo class</a>. If no home tutor is close enough yet, an online tutor from
    elsewhere in India can begin straight away.
  </p>
  <p>
    Planning for your own part of the city? Our
    <a href="{{ url('/blog/srinagar-home-tuition-guide') }}">Srinagar home tuition guide</a> covers all five zones,
    from Hazratbal and Soura to Nowgam and Peerbagh, with every locality linked.
  </p>
  <p class="sxr-note">
    Looking beyond Srinagar? See home tutors in <a href="{{ url('/city/jammu') }}">Jammu</a>,
    <a href="{{ url('/city/chandigarh') }}">Chandigarh</a> and <a href="{{ url('/city/delhi') }}">Delhi</a>, or
    <a href="{{ url('/city') }}">cities across India</a>.
  </p>
  <p class="sxr-note">
    Teaching in Srinagar? See <a href="{{ url('/tuition-jobs/srinagar') }}">home tuition jobs in Srinagar</a> and the
    localities where families are asking for tutors.
  </p>
  </section>

  </div>
</article>
