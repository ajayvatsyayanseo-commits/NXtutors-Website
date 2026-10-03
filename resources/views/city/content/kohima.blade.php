{{--
  Long-form guide for the Kohima city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for Kohima parents
  arranging a home or online tutor. Deliberately practical and educational:
  no politics, no history beyond the city's name, no tourism, and the monsoon
  appears only as timing advice. Every figure is either live from the
  database or a published NXTutors policy; local facts come only from the
  cited research in database/seo-content/areas/kohima-research.json; the NBSE
  description comes from the board's own site (https://nbsenl.edu.in/).
  No school, college, institute, hospital, place of worship, society,
  developer or person is named.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $khmAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $khmA = function (string $slug, string $label) use ($khmAreaSlugs) {
      return in_array($slug, $khmAreaSlugs, true)
          ? '<a href="' . e(url('/city/kohima/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $khmTutors = (int) ($hubCounts['tutors'] ?? 0);
  $khmAreas = $allAreas->count();
@endphp

<article class="nx-guide khm-guide" aria-labelledby="khmGuideTitle">
  <h2 id="khmGuideTitle">Home tuition in Kohima: a parent's guide from Kohima Village to Lerie</h2>

  <p class="nx-guide__lede khm-lede">
    Kohima is a hill capital, and that single fact explains most of what a parent needs to know before booking a
    tutor. Homes sit above and below the road on stepped paths, addresses are given as a ward and a landmark rather
    than a house number on a grid, and buses and taxis do the work that trains do elsewhere, because the city has no
    railway station of its own. The town is organised into municipal wards, from Peraciezie in the north to the
    Chandmari wards, PR Hill and Lerie in the south, with Kohima Village on the high ground to the north-east. A tutor
    who lives two wards away can usually keep a weekly slot; one who must cross the centre at the evening rush often
    cannot. Plan around that and regular tuition works well here.
  </p>
  <nav class="nx-guide__toc khm-toc" aria-label="In this guide">
    <strong>On this page:</strong>
    <a href="#khm-how">Getting matched</a> ·
    <a href="#khm-zones">Four zones of Kohima</a> ·
    <a href="#khm-boards">NBSE, CBSE and others</a> ·
    <a href="#khm-classes">School stages</a> ·
    <a href="#khm-subjects">Subjects asked for</a> ·
    <a href="#khm-jee-neet">Entrance exams</a> ·
    <a href="#khm-mode">At home or on screen</a> ·
    <a href="#khm-fees">Tuition fees</a> ·
    <a href="#khm-choose">Judging the demo</a> ·
    <a href="#khm-calendar">Through the year</a> ·
    <a href="#khm-start">First step</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="khm-how">How does a Kohima family get matched with a tutor?</h2>
  <p>
    Everything begins with one request. Share the class, the board (NBSE, CBSE or another), the subjects your child finds
    hardest, the ward you live in and a landmark near the house, the evenings that are genuinely free, and whether
    lessons should happen at home, online or as a mix. Mention a monthly budget too. From that, two or three tutors are
    suggested, each with a fee you can read before meeting them. Your first lesson with the one you prefer is a free
    demo, and moving to another tutor later is free as well. For Kohima, the
    shortlist depends most on these points:
  </p>
  <ul>
    <li><strong>The ward and the part of it.</strong> Many wards are split into upper and lower sections, such as Upper and Lower Naga Bazaar or Upper, Middle and Lower Midland. Naming the section tells us which tutors live within easy reach.</li>
    <li><strong>Where the house sits on the slope.</strong> Say whether the home is above or below the road, where a taxi can stop, and where a scooter can be left. It saves the tutor a search on the first evening.</li>
    <li><strong>The board and the exam year.</strong> A Class 10 student facing the HSLC and a Class 12 student facing the HSSLC need tutors who have taught those papers; a CBSE student needs someone who follows the NCERT books closely.</li>
    <li><strong>The monsoon plan.</strong> Rain is heaviest from June to September. Agree early whether a lesson moves online on a very wet evening, so the week's work does not simply drop.</li>
  </ul>
  <p>
    Treat the demo as a normal lesson on whatever the class is studying this week. How a tutor deals with an ordinary
    homework question tells you more than any polished sample lesson.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="khm-zones">Kohima, zone by zone</h2>
  <p>
    @if($khmTutors > 0)
      Kohima suggestions are drawn from {{ number_format($khmTutors) }} tutor profiles,
    @else
      Kohima suggestions are drawn from our tutor profiles,
    @endif
    and @if($khmAreas > 0){{ number_format($khmAreas) }} Kohima neighbourhoods @else every Kohima neighbourhood we list @endif
    have their own page. On each neighbourhood page, tutors living there appear first, then tutors from the same zone,
    then the rest of the city, and then online tutors from anywhere in India. For planning home visits we group the
    wards into four zones, from north to south:
    <a href="#khm-north">North Kohima and Kohima Village</a>, <a href="#khm-main">Main Town and Midland</a>,
    <a href="#khm-chandmari">Chandmari and PR Hill</a> and <a href="#khm-lerie">Lerie and Agri Farm</a>. The groups are
    ours, made for travel planning; they are not official divisions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="khm-north">North Kohima and Kohima Village: the original settlement and the northern wards</h3>
  <p>
    {!! $khmA('kohima-village', 'Kohima Village') !!}, also called Kewhira and in older usage Bara Basti, is the
    settlement that gave the capital its name. It has its own village council rather than being a municipal ward, and
    the 2011 census counted 15,734 people living there. {!! $khmA('kitsubozou', 'Kitsübozou') !!}, a ward incorporated in
    1970, lies right beside it. {!! $khmA('peraciezie', 'Peraciezie') !!} is Ward No. 1 of the municipal council, towards
    the northern end of the town. {!! $khmA('bayavu-hill', 'Bayavü Hill') !!} has upper and lower parts,
    and the Nagaland Board of School Education has its head office at Upper Bayavü Hill.
    {!! $khmA('naga-bazaar', 'Naga Bazaar') !!}, split into Upper and Lower Naga Bazaar, links these northern
    neighbourhoods with the town centre.
  </p>
  <p>
    Several of these wards have neighbourhood schools, so younger children here often study close to home and evening
    slots are easy to fit after school. Houses are spread over the hillside, and in Kohima Village especially, the
    nearest point a taxi can reach matters as much as the house itself. A tutor from Kitsübozou can cover the village
    without trouble, and one from Naga Bazaar can reach Peraciezie or Bayavü Hill. A tutor coming up from the southern
    wards has to pass through the busy centre, which is why later slots suit them better.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="khm-main">Main Town and Midland: the central wards</h3>
  <p>
    {!! $khmA('daklane', 'Daklane') !!} (Ward No. 7) and {!! $khmA('new-market', 'New Market') !!} (Ward No. 8) form the
    middle of the town, the stretch that most routes across Kohima pass through. Daklane sits between Naga Bazaar and
    New Market, with Kitsübozou a climb to the east. New Market is among the most familiar addresses for taxi drivers.
    {!! $khmA('midland', 'Midland') !!}, south of New Market, was incorporated in 1970 and has three parts: Upper,
    Middle and Lower Midland. {!! $khmA('officers-hill', "Officers' Hill") !!}, officially Thegabakha, is on the western
    side of the centre, between Midland and the PR Hill and Merhülietsa side.
  </p>
  <p>
    Central homes are the easiest for tutors to reach from almost anywhere, and families here often have the widest
    choice. The trade-off is timing: roads around the market fill when offices open and close, and parking on the
    central roads can be tight. A session that begins after the evening peak, or a tutor who lives in the next ward,
    keeps the routine steady. In Midland, name your part of the ward; on Officers' Hill, say where a two-wheeler can
    be left and which steps lead to the door.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="khm-chandmari">Chandmari and PR Hill: the southern side of the centre</h3>
  <p>
    {!! $khmA('upper-chandmari', 'Upper Chandmari') !!} (Ward No. 12) and
    {!! $khmA('lower-chandmari', 'Lower Chandmari') !!} (Ward No. 13) are separate wards with similar names, which
    makes them easy to confuse when giving directions. Upper Chandmari has neighbourhood schools up to higher
    secondary level, so many students there study to Class 12 near home. {!! $khmA('pr-hill', 'PR Hill') !!}, short for
    P.R. Hill, shares Ward No. 19 with Lower PR Hill and one adjoining neighbourhood, and the Capital Cultural Centre
    there is a handy reference point for any taxi.
  </p>
  <p>
    For a home tutor, this zone is compact: someone living in one of the Chandmari wards, PR Hill or Midland can
    usually reach the others for a weekly visit. The first message to a new tutor should say clearly "Upper" or
    "Lower" Chandmari and give a landmark, plus the stop where a taxi can drop off. Board-year students here tend to
    add sessions from the winter months onward, so a timetable fixed early in the session is easier to extend later.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="khm-lerie">Lerie and Agri Farm: the southern and western edge</h3>
  <p>
    {!! $khmA('lerie', 'Lerie') !!} is at the southern end of the town, grouped in the ward list with New Ministers'
    Hill and New Reserve; the Kohima Botanical Garden in New Ministers' Hill is the well-known landmark on this side.
    {!! $khmA('agri-farm', 'Agri Farm') !!} (Ward No. 17) also covers Upper Mediezie, known locally as Upper Agri,
    and the Electrical and Forest neighbourhoods. {!! $khmA('merhulietsa', 'Merhülietsa') !!} (Ward No. 18) takes in
    Lower Mediezie, or Lower Agri, and sits on the western side next to Agri Farm and Officers' Hill.
  </p>
  <p>
    This is the zone where the tutor's home address matters most. A tutor from Agri Farm, PR Hill or the Chandmari
    wards is the natural fit for weekly visits; one from the northern wards would cross the whole town, so weekend
    sessions or later evenings suit that arrangement better. If you live in one of the smaller neighbourhoods inside a
    ward, give both names, for example Upper Agri as well as Agri Farm. Hillside paths can be steep, so say where the
    road ends.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="khm-boards">Which boards do Kohima tutors teach?</h2>
  <p>
    A Kohima student may be studying for the Nagaland Board of School Education, CBSE, CISCE or an international
    board, depending on the school. Tell us both the board and the class: knowing one board's papers inside out does
    not make a tutor right for a different board in the same year.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Nagaland Board of School Education (NBSE)</h3>
  <p>
    NBSE runs two public examinations, the HSLC (High School Leaving Certificate) and the HSSLC (Higher Secondary
    School Leaving Certificate), and its office is at Upper Bayavü Hill here in Kohima. On its official website the
    board posts its curriculum and syllabus, a question bank, the academic calendar, exam routines, notifications,
    circulars and results. Ask any NBSE tutor to work from those papers and the prescribed textbooks, and check dates
    only against the board's own notices. The page on
    <a href="{{ url('/nagaland-board-tutor-kohima') }}">NBSE tutors for Kohima students</a> has more.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    For CBSE, the NCERT textbook is the base of almost every question, and more papers now reward applying a concept
    to a new situation. Because JEE and NEET draw on the same NCERT content, solid textbook work pays off twice. Read
    more on <a href="{{ url('/cbse-home-tutor-kohima') }}">CBSE tutoring at home in Kohima</a>.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CISCE and international boards</h3>
  <p>
    Where a school follows ICSE or ISC, papers are long and written, and the syllabus is broad, so plan revision in
    several passes. IB and Cambridge IGCSE students usually find the matching specialist online; for IB coursework, a
    tutor can advise, but the work must stay the student's own.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="khm-classes">What matters most in each school stage?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Primary and middle school</h3>
  <p>
    Up to Class 8, the work is reading with understanding, quick and accurate arithmetic, and neat, complete homework.
    Shorter home sessions spread over the week tend to stick better than one long sitting. If an entrance foundation
    course is on your mind, make sure fractions, ratios and basic algebra are secure first.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Class 9 and Class 10</h3>
  <p>
    In Class 9, chapters start depending on earlier ones, and a weak base shows up in the HSLC or the CBSE Class 10
    year. Ask the tutor to stay level with the school's teaching and to leave revision time before the papers. Two
    free resources follow the NCERT chapters and help NBSE students as well: a
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths study plan</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">chapter notes for Class 10 science</a>.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Class 11 and Class 12</h3>
  <p>
    Moving into Class 11 is the biggest jump a student faces. For the HSSLC or CBSE Class 12, put the tutor's hours on
    the subject causing the most trouble rather than spreading them thin. Students in the final year can use our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics revision approach</a> and the
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">calculus and algebra notes for Class 12</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="khm-subjects">Which subjects do Kohima parents ask about?</h2>
  <p>
    Once a child reaches Class 9, the requests are mostly for Maths, Science, Physics and Chemistry, followed by
    English. NXTutors tutors also cover subjects such as Social Science, Economics, Accountancy, Business Studies and
    Computer Science, and for the younger classes one tutor often handles everything. Kohima pages exist for
    <a href="{{ url('/maths-home-tutor-kohima') }}">maths tuition at home</a>,
    <a href="{{ url('/science-home-tutor-kohima') }}">science tuition</a>,
    <a href="{{ url('/physics-home-tutor-kohima') }}">physics tutors</a>,
    <a href="{{ url('/chemistry-home-tutor-kohima') }}">chemistry tutors</a> and
    <a href="{{ url('/english-home-tutor-kohima') }}">English tutors</a>.
  </p>
  <p>
    What to expect from each: a maths tutor who finds the root of an error, even years back; a physics tutor who makes
    the student state the principle before plugging in numbers; a chemistry tutor who treats calculation, reaction
    patterns and recall as three separate skills, as our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">organic and inorganic chemistry guide</a>
    does. For English, aim for answers written in the child's own words, and try the exercises in our
    <a href="{{ url('/blog/spoken-english-for-students') }}">spoken English practice guide</a>. Electives like
    Accountancy or Computer Science are often simpler to find online.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="khm-jee-neet">Is home tuition useful for JEE or NEET in Kohima?</h2>
  <p>
    It can be, if the tutor's role is narrow. Pick one: clearing the questions left over from each week's practice,
    running board revision and entrance problems as one timetable, or adding hours to the weakest subject. The Class 11
    and 12 NCERT books feed both the school exams and the entrance syllabus, which keeps one plan workable.
  </p>
  <p>
    JEE Main is held by NTA in two sessions early in the year, with JEE Advanced open to those who qualify. NEET UG
    happens once a year, and half of its marks come from Biology. Dates change, so read them in the official bulletin
    each year. Many Kohima families pair a local tutor for weekly work with an online specialist for the hardest
    problems; the <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">topic-wise JEE maths plan</a> and the
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET biology guide built on NCERT</a> are good starting points
    to share.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="khm-mode">Should Kohima lessons be at home or online?</h2>
  <p>
    A tutor at the table works well for young learners, for anyone who loses focus on a laptop, and for subjects where
    the tutor must see each line of working. Online classes open the door to specialists across India. Local
    conditions push many Kohima families towards a mix:
  </p>
  <ul>
    <li><strong>Wet evenings.</strong> Between June and September, heavy rain slows every journey; moving that night's lesson online saves the week.</li>
    <li><strong>Homes on the slope.</strong> Where the house is a climb from the road, a tutor who already lives in the ward settles into the routine quickly.</li>
    <li><strong>End-to-end matches.</strong> Lerie and Peraciezie are at opposite ends of town; one home visit plus one online lesson keeps such a pairing going.</li>
    <li><strong>Rare subjects and boards.</strong> For an uncommon elective or an IB or IGCSE course, the right tutor may live in another city.</li>
  </ul>
  <p>
    Plenty of families keep the same tutor for home visits during term and online sessions as needed. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">comparison of home and online tutoring</a> sets out the
    trade-offs, and the <a href="{{ url('/online-tutor-kohima') }}">Kohima online tutoring</a> page explains how lessons
    run on screen.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="khm-fees">How are tuition fees set in Kohima?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors fix
    their own rates, so when two shortlisted fees differ, these questions usually explain why:
  </p>
  <ul>
    <li><strong>What level and target?</strong> Junior classes and school-level help are usually quoted lower than senior or entrance work.</li>
    <li><strong>Where does the tutor start from?</strong> Someone coming from another zone may build the journey into the rate; a neighbour often will not.</li>
    <li><strong>Does an online lesson cost the same?</strong> Check how rain-week sessions held online are charged.</li>
    <li><strong>How many hours per visit?</strong> Compare like with like: total hours, not just visits.</li>
  </ul>
  <p>
    Fees are shown on the shortlist before any demo, and we keep suggestions within the budget you set. For rates by
    class and subject, open the <a href="{{ url('/pricing-guide') }}">NXTutors pricing guide</a>; for a local view, read
    <a href="{{ url('/blog/home-tuition-fees-kohima') }}">what to ask about tuition fees in Kohima</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="khm-choose">How can you judge a tutor during the free demo?</h2>
  <p>A profile gets a tutor onto your list; the demo shows whether they belong there. During the hour, watch for:</p>
  <ol>
    <li><strong>Questions before plans.</strong> Did they ask about the school timetable, upcoming tests and what happens on rainy days?</li>
    <li><strong>A quick diagnosis.</strong> Did they test what your child already knows before teaching?</li>
    <li><strong>Clarity.</strong> Could your child explain the idea back afterwards?</li>
    <li><strong>Board knowledge.</strong> Could they describe the NBSE or CBSE paper and say where they would confirm details?</li>
    <li><strong>Practice in the room.</strong> Did your child spend most of the hour solving, not watching?</li>
    <li><strong>A slot they can keep.</strong> Can they reach your ward at that time every week?</li>
  </ol>
  <p>
    Share the ward, landmark and a map pin ahead of the visit, and keep lessons in a common room with an adult at home.
    Tutors who join go through an ID check, and <a href="{{ url('/how-we-verify-tutors') }}">our tutor check page</a>
    explains what it covers. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">parents' checklist for a
    demo class</a> and the <a href="{{ url('/blog/how-to-choose-boardstream') }}">guide to picking a board and
    stream</a> add more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="khm-calendar">How should tuition fit the Kohima school year?</h2>
  <p>
    NBSE, CBSE and CISCE schools keep their own session and exam dates, so rely on your school and on each board's
    official notices; NBSE puts its academic calendar and exam routine on its website. A typical tuition year runs in
    four stages:
  </p>
  <ul>
    <li><strong>Opening weeks:</strong> new textbooks and teachers; spot last year's gaps and close them.</li>
    <li><strong>The rainy months:</strong> hold the weekly rhythm and switch the wettest evenings online instead of cancelling.</li>
    <li><strong>Mid-session:</strong> chapter-by-chapter work with short tests from the tutor.</li>
    <li><strong>Run-up to the papers:</strong> full timed papers, marked against the board's question bank and past papers.</li>
  </ul>
  <p>
    Starting early leaves room for real understanding; starting late still pays, with the time weighted towards past
    papers and answer-writing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="khm-start">What is the first step for a Kohima family?</h2>
  <p>
    Send us the class, board, subjects, ward, landmark and free hours. You receive two or three suggested tutors, try
    one in a free demo and only then decide. Start from your neighbourhood in the list on this page, look through
    <a href="{{ url('/tutors') }}">tutor profiles</a>, or <a href="{{ url('/demo-class') }}">ask for a free demo</a>.
    Where no home tutor lives near enough yet, an online tutor can start right away.
  </p>
  <p>
    Our <a href="{{ url('/blog/kohima-home-tuition-guide') }}">ward-by-ward Kohima tuition guide</a> walks through all
    four zones, from Kohima Village and Peraciezie down to Agri Farm and Lerie, linking each neighbourhood.
  </p>
  <p class="khm-note">
    Outside Kohima, NXTutors also lists tutors for <a href="{{ url('/city/guwahati') }}">Guwahati</a>,
    <a href="{{ url('/city/kolkata') }}">Kolkata</a>, <a href="{{ url('/city/delhi') }}">Delhi</a> and
    <a href="{{ url('/city') }}">other Indian cities</a>.
  </p>
  <p class="khm-note">
    Tutors based in Kohima can find <a href="{{ url('/tuition-jobs/kohima') }}">tuition jobs in Kohima</a>, with the
    neighbourhoods where parents are currently looking.
  </p>
  </section>

  </div>
</article>
