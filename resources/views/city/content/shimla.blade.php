{{--
  Long-form guide for the Shimla city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for Shimla parents
  choosing a home tutor: every figure is either live from the database or a
  published NXTutors policy; local facts come only from the cited research in
  database/seo-content/areas/shimla-research.json; the HPBOSE description comes
  from the board's own site (https://hpbose.org/). No school, college,
  university, institute, society, developer, hospital or mall is named.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $smlAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $smlA = function (string $slug, string $label) use ($smlAreaSlugs) {
      return in_array($slug, $smlAreaSlugs, true)
          ? '<a href="' . e(url('/city/shimla/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $smlTutors = (int) ($hubCounts['tutors'] ?? 0);
  $smlAreas = $allAreas->count();
@endphp

<article class="nx-guide sml-guide" aria-labelledby="smlGuideTitle">
  <h2 id="smlGuideTitle">Home tuition in Shimla: a parent's guide from the Ridge to New Shimla</h2>

  <p class="nx-guide__lede sml-lede">
    Shimla is spread along ridges and slopes rather than across a plain, so a home that looks close on a map can sit
    a long climb above or below its neighbour. The old centre gathers around the Ridge and the Mall Road, where cars
    are not allowed; Sanjauli and Dhalli run east along the highway; the government offices of Chhota Shimla lead
    south to the planned sectors of New Shimla and Panthaghati; and Boileauganj opens the western side towards Summer
    Hill, Totu and the bus terminal at Tutikandi. For a parent choosing a tutor, three things count more than
    anything else here: which side of the hill you live on, whether the last stretch to your door is on foot, and how
    the season changes the hours a tutor can travel.
  </p>
  <nav class="nx-guide__toc sml-toc" aria-label="In this guide">
    <strong>On this page:</strong>
    <a href="#sml-how">The shortlist</a> ·
    <a href="#sml-zones">Four zones</a> ·
    <a href="#sml-boards">Boards</a> ·
    <a href="#sml-classes">Stages</a> ·
    <a href="#sml-subjects">Subjects</a> ·
    <a href="#sml-jee-neet">JEE and NEET</a> ·
    <a href="#sml-mode">At home or online</a> ·
    <a href="#sml-fees">Fees</a> ·
    <a href="#sml-choose">The free demo</a> ·
    <a href="#sml-calendar">Through the year</a> ·
    <a href="#sml-start">Next step</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="sml-how">How is a Shimla tutor shortlist put together?</h2>
  <p>
    One request starts it. Note the student's class and board, the subjects that are slipping, your locality with a
    landmark a stranger could find, the hours left after school, and whether you would like lessons in person, on a
    screen or both, along with a rough monthly budget. We reply with two or three tutors who fit. You see what each
    of them charges before anyone visits, and your chosen tutor's opening lesson is a free demo. In Shimla the
    shortlist usually turns on these points:
  </p>
  <ul>
    <li><strong>Your side of the city.</strong> A tutor who already teaches on your ridge, east, south or west, can keep a weekly slot far more easily than one who must cross the centre.</li>
    <li><strong>The last stretch.</strong> Many homes are reached by a lane or a flight of steps below the road. Say so in the request; it helps us suggest tutors who are happy to walk it.</li>
    <li><strong>Board and class together.</strong> HPBOSE, CBSE, ICSE and ISC, and IB or IGCSE each need different preparation, so a tutor is matched to both.</li>
    <li><strong>Building or house.</strong> A newer apartment block may keep a visitor register at the gate; an older house means a doorbell and a clear landmark.</li>
  </ul>
  <p>
    Treat the demo like any ordinary lesson on this week's chapter. If it does not feel right, another
    tutor from the list can come instead, and changing tutor at any later point costs nothing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sml-zones">Shimla in four zones</h2>
  <p>
    @if($smlTutors > 0)
      The Shimla tutor list currently counts {{ number_format($smlTutors) }} tutor profiles,
    @else
      The Shimla tutor list grows as tutors join,
    @endif
    and @if($smlAreas > 0){{ number_format($smlAreas) }} Shimla localities @else every Shimla locality we cover @endif
    have their own page. On a locality page, the tutors who live there come first, the rest of the zone next,
    the wider city after that and online tutors last. Our four zones for home lessons are:
    <a href="#sml-centre">the Ridge, Lakkar Bazar and Jakhu</a>, <a href="#sml-east">Sanjauli and Dhalli</a>,
    <a href="#sml-south">Chhota Shimla, Kasumpti and New Shimla</a>, and
    <a href="#sml-west">Boileauganj, Summer Hill and Totu</a>. They are planning groups of our own, not municipal
    wards, although each area named below is a ward or part of one in the Shimla Municipal Corporation.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="sml-centre">The Ridge, Lakkar Bazar and Jakhu: the walking heart of the city</h3>
  <p>
    The Ridge is the broad open space at the centre of Shimla, running alongside the Mall Road and meeting it at
    Scandal Point. At its eastern end it leads into {!! $smlA('lakkar-bazar', 'Lakkar Bazar') !!}, the old market known
    for wooden crafts, where homes are older hillside buildings above and behind the shops. Above it rises
    {!! $smlA('jakhu', 'Jakhu') !!}, named after Jakhu Hill, the highest peak in the city, with homes on the steep
    slopes below the forested summit. {!! $smlA('bharari', 'Bharari') !!}, ward number one of the municipal corporation,
    sits close to the Mall Road and mixes newer apartment buildings with older houses.
  </p>
  <p>
    Vehicles other than emergency ones are kept off the Mall Road, and Lower Bazaar below it is also a no-vehicle
    zone, so a tutor living in the central wards often simply walks to the lesson. One coming from further away
    usually leaves the scooter or taxi lower down and finishes on foot. The Jakhu ropeway, opened in 2017, links a
    point near the centre with the summit, but family homes are reached by hill roads and footpaths. The market
    lanes are busiest in the evening and in the holiday season, so an afternoon or early-evening slot holds better.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="sml-east">Sanjauli and Dhalli: the populous eastern suburbs on the highway</h3>
  <p>
    {!! $smlA('sanjauli', 'Sanjauli') !!} is the main suburb of Shimla and one of its most crowded parts. It sits
    below Jakhu Hill and takes in Sanjauli Bazaar, Engine Ghar, Chalaunthi, Dhingu Dhar and the Housing Board Colony,
    with flats, builder floors and independent houses around the busy Chowk. Further east,
    {!! $smlA('dhalli', 'Dhalli') !!} is the easternmost point of the main city, set among deodars on the ridge towards
    Kufri and Mashobra; it joined the corporation in 2006-07, is now split into Upper and Lower Dhalli wards, and holds
    a large apple market. {!! $smlA('bhattakufar', 'Bhattakufar') !!} lies among the eastern wards next to Sanjauli,
    Dhalli and Malyana.
  </p>
  <p>
    The Shimla-Dhalli bypass on National Highway 5 runs through Sanjauli, a tunnel joins it to Dhalli, and Circular
    Road ties the suburb back to the rest of the city. That makes this the easiest zone for a tutor on a two-wheeler,
    but the Chowk and the bypass fill up at office and school hours, and the apple trading months bring extra trucks
    to the highway. A tutor who lives on this side is the simplest match; for a specialist subject from the western
    side, online lessons save the cross-city trip.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="sml-south">Chhota Shimla, Kasumpti and New Shimla: offices and the planned south-east</h3>
  <p>
    {!! $smlA('chhota-shimla', 'Chhota Shimla') !!} holds the state Secretariat and the headquarters of several state
    departments, alongside older homes and walking paths; the Combermere Bridge here was the first pucca bridge in
    Shimla. From it, roads lead to {!! $smlA('kasumpti', 'Kasumpti') !!}, which also names the assembly seat for much
    of this side, and to {!! $smlA('vikasnagar', 'Vikasnagar') !!} and {!! $smlA('khalini', 'Khalini') !!}, hillside
    residential wards beside New Shimla. {!! $smlA('new-shimla', 'New Shimla') !!} is the city's most modern planned
    area, developed mainly by the state housing and urban development authority from the 1980s and laid out in phases
    and numbered sectors. {!! $smlA('panthaghati', 'Panthaghati') !!}, on National Highway 5, is the first part of the
    city reached from Junga and Chail and has apartments, government housing, builder floors and houses.
  </p>
  <p>
    With six neighbouring wards, this is the zone with the widest pool of nearby tutors, and a tutor from Kasumpti or
    Khalini can reach New Shimla or Panthaghati without touching the centre. Sector, block and flat numbers make New
    Shimla homes easy to find; gated apartment projects in Panthaghati want the tutor's name at the gate first. Office
    traffic around the Secretariat peaks at the start and end of the working day, so late-afternoon or evening lessons
    tend to begin on time.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="sml-west">Boileauganj, Summer Hill and Totu: the western side with the railway and bus terminal</h3>
  <p>
    {!! $smlA('boileauganj', 'Boileauganj') !!} is the junction that links central Shimla with Summer Hill and Totu and
    carries traffic towards Mandi and Dharamshala on National Highways 5 and 205, with shops at the crossing and homes
    on the slopes around it. {!! $smlA('summer-hill', 'Summer Hill') !!}, also called Potter's Hill, is a quiet
    residential suburb among pines and deodars with a university campus. {!! $smlA('totu', 'Totu') !!}, which joined
    the corporation in 2006-07, sits lower than the centre near the Jutogh cantonment, and
    {!! $smlA('tutikandi', 'Tutikandi') !!}, on National Highway 5, is home to the city's Inter State Bus Terminal.
  </p>
  <p>
    This is the only side of the city with suburban rail. The Kalka-Shimla Railway, opened in 1903, has stations at
    Summer Hill and at Jutogh, which serves Totu, before its Shimla terminus, so a tutor living along the line can
    sometimes come by train; most use local buses or two-wheelers through Boileauganj. Homes near the cantonment may
    have their own entry rules, and Totu is one of the foggiest parts of Shimla in the monsoon, so build in some margin
    on those days.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sml-boards">Which boards do Shimla tutors prepare students for?</h2>
  <p>
    Shimla classrooms follow the state board, CBSE, or CISCE's ICSE and ISC, with a few families on IB or Cambridge
    IGCSE. Someone excellent with one syllabus may be a poor fit for another, so board and class are paired in every
    match.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Himachal Pradesh Board of School Education (HPBOSE)</h3>
  <p>
    HPBOSE, headquartered at Dharamshala, holds Himachal's Matric (Class 10) and Plus Two (Class 12) examinations and
    puts date sheets, admit cards and results on its official website. Lessons for an HPBOSE candidate should stay
    with the prescribed books and the board's own question papers. Formats can shift between years, so rely on the
    board's site alone. More on our
    <a href="{{ url('/himachal-board-tutor-shimla') }}">Himachal board tutors in Shimla</a> page.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    The NCERT books are the base of every CBSE paper, and a rising number of questions ask students to apply a
    concept to a situation they have not met before. Good tutoring pairs textbook exercises with fresh problems and
    full written steps. See <a href="{{ url('/cbse-home-tutor-shimla') }}">CBSE home tutors in Shimla</a>.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    The Class 10 ICSE and Class 12 ISC syllabi are wide, the papers long, and English carries prescribed literature.
    Marks slip mostly when revision runs short, so the tutor should map the year in revision rounds and watch each
    subject's practical and project deadlines.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and IGCSE</h3>
  <p>
    Specialists for the IB Diploma and Cambridge IGCSE are usually reached online. In IB, coursework counts alongside
    the final exams; a tutor can advise on an Internal Assessment or Extended Essay, never write one. IGCSE students
    gain most from timed past papers marked against the official schemes.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sml-classes">What does a tutor work on at each stage?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Primary and middle school</h3>
  <p>
    Fluent reading, sound arithmetic and neat answers are the job up to Class 8. A short read-aloud in each
    lesson helps a child who speaks Hindi at home and studies in English, and weak tables or fractions are far cheaper
    to fix now than in Class 9.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Matric and Class 10</h3>
  <p>
    Most Shimla families first ask for steady Maths and Science help ahead of the Class 10 board year; beginning in
    Class 9, when algebra and science chapters get harder, works better. We have a
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 Maths plan</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Science notes</a> chapter by chapter.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Plus One and Plus Two</h3>
  <p>
    Class 11 is the steepest climb, and ground lost in Plus One Physics or Maths seldom comes back in Plus Two. A
    separate specialist for each hard subject usually pays off. For the final year, read our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 Physics strategies</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sml-subjects">Which subjects can a Shimla tutor take on?</h2>
  <p>
    Requests from Class 6 onwards are led by Maths and Science, which divide into Physics, Chemistry and Biology for
    Plus One and Plus Two. Tutors here also take English, Hindi, Social Science, Computer Science and the commerce
    subjects, and many handle every subject for small children. Shimla pages exist for
    <a href="{{ url('/maths-home-tutor-shimla') }}">maths</a>,
    <a href="{{ url('/science-home-tutor-shimla') }}">science</a>,
    <a href="{{ url('/physics-home-tutor-shimla') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-shimla') }}">chemistry</a> and
    <a href="{{ url('/english-home-tutor-shimla') }}">English</a> home tutors.
  </p>
  <p>
    In Maths, a low score usually traces back to one topic, sometimes from an earlier class, and that is where to
    begin. Physics rewards understanding the idea before the formula. Chemistry splits into numerical, reaction and
    memory work, as our <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Organic and Inorganic
    Chemistry guide</a> explains, and for confident speaking at home there is our
    <a href="{{ url('/blog/spoken-english-for-students') }}">spoken English guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sml-jee-neet">Can a home tutor help a Shimla student with JEE or NEET?</h2>
  <p>
    It can, provided the tutor has a defined task. Shimla students preparing for entrance exams may combine a coaching
    course, self-study and online material; the tutor's role is to hold that together:
  </p>
  <ul>
    <li><strong>One plan, two goals.</strong> NCERT chapters in Classes 11 and 12 serve the board paper and the entrance syllabus alike.</li>
    <li><strong>A weekly sweep.</strong> Clear the errors from the latest test before the next chapters arrive.</li>
    <li><strong>The weakest subject first.</strong> Concentrated hours there beat a thin spread over three.</li>
    <li><strong>Local plus online.</strong> A nearby tutor for routine lessons and an online specialist for the hardest problems suits a hill city well.</li>
  </ul>
  <p>
    JEE Main is conducted by NTA in two sessions early in the year, with JEE Advanced open to those who qualify; NEET
    UG comes once a year, and half of its marks are Biology, so NCERT Biology deserves word-by-word reading. Dates
    belong to each year's official bulletin. Share our
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE Maths</a> and
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE Physics</a> topic plans and the
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NCERT-first NEET Biology</a> approach with your tutor; our
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching versus home tutor</a> piece,
    though set in Gurugram, applies just as well.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sml-mode">Should Shimla lessons be at home or online?</h2>
  <p>
    Sitting beside a tutor helps young children, easily distracted students and anyone whose written working needs
    watching. Online opens up specialists across India for IB, IGCSE, ISC electives and harder entrance work. Here,
    the terrain weighs in too:
  </p>
  <ul>
    <li><strong>Steps and footpaths.</strong> If the final stretch is on foot, a tutor from your own ridge is much easier to keep.</li>
    <li><strong>The car-free centre.</strong> Near the Mall Road and Lower Bazaar, tutors walk in, so tutors from the central wards suit central homes.</li>
    <li><strong>How tutors travel.</strong> Buses from the Tutikandi terminal, the Kalka-Shimla line through Summer Hill and Jutogh, and National Highway 5 through Sanjauli and Panthaghati carry most of them.</li>
    <li><strong>Snow, rain and fog.</strong> Allow extra time on heavy days, or move that week's lesson online with the same tutor.</li>
  </ul>
  <p>
    A common pattern is two or three home lessons a week, with an agreement that bad-weather days go online. See
    <a href="{{ url('/online-tutor-shimla') }}">online tutors for Shimla</a> and our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online comparison</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sml-fees">What does a home tutor cost in Shimla?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors fix
    their own rates, and the main levers are:
  </p>
  <ul>
    <li><strong>Stage.</strong> Junior classes generally cost less than Plus One and Plus Two.</li>
    <li><strong>Target.</strong> Entrance preparation is charged above school help in the same subject.</li>
    <li><strong>Journey.</strong> A tutor crossing the city, or climbing a long last stretch, may factor that in; a neighbour often will not.</li>
    <li><strong>Lesson length.</strong> Fewer, longer sessions can stretch the same spend further than many short ones.</li>
  </ul>
  <p>
    Spend on the subject that hurts most rather than spreading thin help across several. You see each shortlisted
    tutor's fee before the demo, and nobody above your stated limit is proposed. Our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> lists fees by class and subject, and
    <a href="{{ url('/blog/home-tuition-fees-shimla') }}">home tuition fees in Shimla</a> covers what to ask a tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sml-choose">What should you look for in the free demo?</h2>
  <p>A good profile earns the visit; the demo decides. Check that the tutor:</p>
  <ol>
    <li>asks about school, tests and any coaching before planning;</li>
    <li>tests what your child knows instead of starting the chapter cold;</li>
    <li>explains in a way your child follows, in English, Hindi or both;</li>
    <li>knows how your board sets this year's paper, without guessing;</li>
    <li>gets your child solving, not just listening;</li>
    <li>can manage the same hour every week, in winter too.</li>
  </ol>
  <p>
    Tell a building's guard the tutor's name ahead of the demo; for a house below the road, send the landmark, the
    steps or lane, and a map pin. Hold lessons in a common room while an adult is home. Read our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo checklist</a> and
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">board and stream guide</a> for more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sml-calendar">How should tuition fit the Shimla year?</h2>
  <p>Calendars differ by board and school, so check yours. For tutoring, a hill-city year tends to run like this:</p>
  <ul>
    <li><strong>Spring:</strong> new session, new books; a natural start, with time to close old gaps.</li>
    <li><strong>Monsoon:</strong> regular weekly lessons, with online pre-agreed for the wettest or foggiest days.</li>
    <li><strong>Autumn:</strong> settled weather and festivals; lighter weeks around Dussehra and Diwali, hours made up either side.</li>
    <li><strong>Winter:</strong> short days and snow; bring lessons earlier in the afternoon and keep online ready.</li>
    <li><strong>Exam season:</strong> full papers before the HPBOSE, CBSE or CISCE boards, then JEE Main, JEE Advanced and NEET UG.</li>
  </ul>
  <p>Check exam dates on official notices only. Starting early helps most, but a late start spent on papers still counts.</p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sml-start">How do you start with a tutor in Shimla?</h2>
  <p>
    Tell us the class, board, subjects, locality with a landmark, and the after-school hours that suit you. You get
    two or three names, try one in a free demo, and decide then. Pick your locality below, look through
    <a href="{{ url('/tutors') }}">tutor profiles</a> or request a <a href="{{ url('/demo-class') }}">free demo
    class</a>; where nobody nearby fits yet, an online tutor can begin at once. Tutors who join go through an ID check:
    see <a href="{{ url('/how-we-verify-tutors') }}">how we check tutors</a>.
  </p>
  <p>
    The <a href="{{ url('/blog/shimla-home-tuition-guide') }}">Shimla home tuition guide</a> covers every locality,
    from Lakkar Bazar and Sanjauli to New Shimla and Totu.
  </p>
  <p class="sml-note">
    Elsewhere: home tutors in <a href="{{ url('/city/chandigarh') }}">Chandigarh</a>,
    <a href="{{ url('/city/dehradun') }}">Dehradun</a>, <a href="{{ url('/city/delhi') }}">Delhi</a> and
    <a href="{{ url('/city') }}">other cities</a>.
  </p>
  <p class="sml-note">
    Tutors: see <a href="{{ url('/tuition-jobs/shimla') }}">tuition jobs in Shimla</a> and where families are looking.
  </p>
  </section>

  </div>
</article>
