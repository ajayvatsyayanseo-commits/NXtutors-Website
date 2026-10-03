{{--
  Long-form guide for the Gangtok city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for Gangtok parents
  arranging a home or online tutor. Practical and educational only: no
  politics, no tourism, and weather appears only as timing advice. Every
  figure is either live from the database or a published NXTutors policy.
  Local facts come only from database/seo-content/areas/gangtok-research.json
  (area "about" text, zone_facts, board_facts). Board wording follows
  board_facts: schools follow CBSE or CISCE (ICSE/ISC); families are sent to
  cbse.gov.in and cisce.org; no state board is named. The city development
  plan cited in the research is an older document (c. 2006), so its points
  are phrased as "the city development plan describes ...".
  No school, college, institute, hospital, place of worship, society,
  developer or person is named.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $gtkAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gtkA = function (string $slug, string $label) use ($gtkAreaSlugs) {
      return in_array($slug, $gtkAreaSlugs, true)
          ? '<a href="' . e(url('/city/gangtok/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $gtkTutors = (int) ($hubCounts['tutors'] ?? 0);
  $gtkAreas = $allAreas->count();
@endphp

<article class="nx-guide gtk-guide" aria-labelledby="gtkGuideTitle">
  <h2 id="gtkGuideTitle">Home tuition in Gangtok: planning a tutor from Tibet Road to Ranipool</h2>

  <p class="nx-guide__lede gtk-lede">
    Gangtok is built high on a ridge in the eastern Himalaya, and it has grown as a linear city
    along its arterial roads, above all the national highway that used to be numbered 31A and is now NH 10. That
    shape decides how home tuition works. A tutor's journey follows one long road with branches climbing the slopes
    on either side, so a teacher who lives on the same stretch as your family is worth far more than one who lives
    across town. There is no railway or metro inside the city: tutors travel by shared taxi, on two wheels or on
    foot, and many homes are reached by steps above or below the road. This guide covers the four parts of
    Gangtok we group neighbourhoods into, the boards local schools follow, and how to set up lessons that survive a
    wet evening.
  </p>
  <nav class="nx-guide__toc gtk-toc" aria-label="In this guide">
    <strong>On this page:</strong>
    <a href="#gtk-how">How matching works</a> ·
    <a href="#gtk-zones">Gangtok's four zones</a> ·
    <a href="#gtk-boards">CBSE and CISCE</a> ·
    <a href="#gtk-classes">By class</a> ·
    <a href="#gtk-subjects">Subjects</a> ·
    <a href="#gtk-jee-neet">JEE and NEET</a> ·
    <a href="#gtk-mode">Home, online or both</a> ·
    <a href="#gtk-fees">Fees</a> ·
    <a href="#gtk-choose">The demo class</a> ·
    <a href="#gtk-calendar">School year</a> ·
    <a href="#gtk-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gtk-how">What happens after a Gangtok parent sends a request?</h2>
  <p>
    You tell us about your child once: the class and board, the subjects or chapters that need help, your
    neighbourhood and municipal ward, a landmark the tutor can find from the road, the days you can manage, and
    whether lessons should be at home, online or a mix. A budget helps too. We reply with two or three suited
    tutors, and you can see what each one charges before anyone visits. The first class with your chosen tutor is
    a free demo, and if the arrangement stops working later, changing tutor costs nothing. In Gangtok, four
    details shape a good shortlist more than anything else:
  </p>
  <ul>
    <li><strong>Your stretch of road.</strong> Because the city runs along the highway and the Indira Bypass, saying which road your home is on, and near which junction, tells us which tutors can reach you without crossing the centre.</li>
    <li><strong>Above or below the road.</strong> Mention the floor, the building name, and whether the entrance is at road level or down a flight of steps. A tutor who knows this arrives on time for the first lesson.</li>
    <li><strong>The exam ahead.</strong> A child in Class 10 or Class 12 needs someone who has prepared students for that year's board paper, whether CBSE or ICSE/ISC.</li>
    <li><strong>A rain plan.</strong> Decide at the start whether a lesson moves online during heavy monsoon rain, so that weeks of work are not lost to the weather.</li>
  </ul>
  <p>
    For the demo, ask the tutor to work on whatever your child is studying in school that week. A real chapter
    and a real homework sheet show you how they explain, correct and pace far better than a prepared lesson.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtk-zones">Gangtok in four zones</h2>
  <p>
    @if($gtkTutors > 0)
      Our Gangtok matches come from {{ number_format($gtkTutors) }} tutor profiles,
    @else
      Our Gangtok matches come from the tutor profiles on NXTutors,
    @endif
    and @if($gtkAreas > 0){{ number_format($gtkAreas) }} Gangtok neighbourhoods @else each Gangtok neighbourhood we cover @endif
    have a page of their own. Each neighbourhood page lists tutors who live there first, then tutors from the
    rest of its zone, then those elsewhere in Gangtok, and finally online tutors from across India. The municipal
    corporation divides the city into 19 wards; to plan home visits we group neighbourhoods into four zones:
    <a href="#gtk-central">Central Gangtok and Tibet Road</a>, <a href="#gtk-south">Deorali, Tadong and Ranipool</a>,
    <a href="#gtk-east">Syari, Chandmari and Tathangchen</a> and <a href="#gtk-bypass">Sichey, Burtuk and
    Bojoghari</a>. These zones are our own travel groups, not official boundaries.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="gtk-central">Central Gangtok and Tibet Road: the core wards</h3>
  <p>
    The city development plan describes MG Marg, Tibet Road and Kazi Road as Gangtok's core business district.
    {!! $gtkA('tibet-road', 'Tibet Road') !!}, just off MG Marg, takes its name from the old mule route that carried
    goods to Tibet, and the plan calls it the city's second most important commercial centre and one of its most
    densely built areas. {!! $gtkA('development-area', 'Development Area') !!} is a long-settled ward where homes sit
    among offices, banks, clinics and hostels, mostly in reinforced-concrete buildings of four or five storeys with
    a few older wooden houses. {!! $gtkA('arithang', 'Arithang') !!}, split into the Arithang-I and Arithang-II wards,
    is a residential suburb right next to the core where many families rent. {!! $gtkA('pani-house', 'Pani House') !!}
    lies along the highway on a steep slope and is mainly residential, with homes both above and below the road.
  </p>
  <p>
    For tuition, the centre offers the widest choice of tutors, because almost every route in the city passes
    through it. The catch is the evening: shoppers and office traffic fill the central roads, and parking near the
    market is scarce, so most tutors walk the last stretch from a taxi point. Fix a weekday slot well in advance,
    and on Tibet Road give a shop or junction as a landmark, since many families live above or behind shops. In
    Arithang and Pani House, the useful detail is the flight of steps that leads to your door.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="gtk-south">Deorali, Tadong and Ranipool: along the national highway</h3>
  <p>
    The city development plan traces Gangtok's main direction of growth south and south-west along the highway,
    from Selep towards Ranipool, and names Deorali, Tadong and Ranipool as the fringe areas where most new building
    is happening. {!! $gtkA('deorali', 'Deorali') !!} is described as a fast-growing commercial and institutional
    hub, with offices, banks, clinics and schools alongside homes; its junction is one of the busiest traffic points
    in the city and the way into Syari. {!! $gtkA('tadong', 'Tadong') !!} has Upper and Lower parts, and Upper Tadong
    is a census town within the municipal corporation, with the Tadong, Tadong 6th Mile and Daragaon-Lumsey wards
    nearby. {!! $gtkA('ranipool', 'Ranipool') !!}, on the bank of the Ranikhola, is a junction town where NH 10 meets
    NH 717A and roads split towards Gangtok, Singtam and Pakyong.
  </p>
  <p>
    Shared taxis run up and down this corridor all day, which makes it straightforward for a tutor who lives on
    the highway. Homes range from flats above shops to houses on the lanes behind, so always give the floor and
    the side of the road. The Deorali junction and the Daragaon bazaar stretch are the points to plan around: a
    class that starts after the evening peak, or a tutor from the same stretch, keeps the routine steady.
    Ranipool families who want a senior science or maths specialist often add online sessions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="gtk-east">Syari, Chandmari and Tathangchen: the eastern slope</h3>
  <p>
    On the eastern side of the ridge, the city development plan describes a line of settlements growing from
    Chandmari to Syari, and it lists Syari, Tathangchen and Chandmari among the areas near the Indira Bypass able to
    take some of the city's growth. {!! $gtkA('syari', 'Syari') !!} is mainly residential, with a large share of
    housing for state and central government staff and relatively few shops; Upper Syari forms part of the
    Deorali-Upper Syari ward. {!! $gtkA('chandmari', 'Chandmari') !!} is a ward of houses and residential buildings
    on the slope, many reached by steps or footpaths from the road. {!! $gtkA('tathangchen', 'Tathangchen') !!} is
    mixed in use but mostly homes, with schools, a teacher-training institute and government offices among them.
  </p>
  <p>
    Families in government housing colonies should share the block and quarter number, as the tutor may need to
    give a name at the entrance or call on arrival. Traffic into Syari comes through Deorali junction, so evening
    lessons run most smoothly with a tutor who already lives in Syari, Chandmari or Deorali. Tathangchen and Chandmari sit
    close enough for one tutor to cover both, which widens the choice for families on either side.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="gtk-bypass">Sichey, Burtuk and Bojoghari: the Indira Bypass side</h3>
  <p>
    {!! $gtkA('sichey', 'Sichey') !!} runs across Upper, Middle and Lower Sichey, and the Indira Bypass passes
    through the middle section; the municipal corporation has separate Upper Sichey and Lower Sichey wards. The
    city development plan describes Upper Sichey as predominantly residential, with the football stadium, the
    district courts and district offices nearby. {!! $gtkA('burtuk', 'Burtuk') !!} is a ward next to Sichey, and the
    plan counted it among suburbs that were growing around the city. {!! $gtkA('bojoghari', 'Bojoghari') !!} forms
    part of the Bojoghari-2nd Mile ward and is another of the areas near the bypass that the plan expected to
    absorb new homes.
  </p>
  <p>
    The bypass is the thread that ties this zone together, and it links across to Chandmari and the centre. A
    tutor who already teaches along it, in Sichey or Burtuk, is usually the practical choice for two or three
    visits a week. Office-hour traffic on the bypass is heaviest, so choose a slot outside the rush. Homes climb the
    slopes, so give a landmark and a phone number before the first class, and keep an online session in reserve
    for very wet days.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtk-boards">Which boards do Gangtok schools follow?</h2>
  <p>
    Schools in Gangtok follow CBSE or CISCE (ICSE/ISC). Some are run by the state government and others by private
    and religious organisations, and the main languages of teaching are English and Nepali. When you send a
    request, give the exact board and class; a tutor who knows one syllabus well is not automatically the right
    person for another.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    CBSE schools in Sikkim fall under the CBSE Regional Office in Guwahati, which also covers the other
    north-eastern states. NCERT textbooks are the starting point for CBSE papers, and the same books underpin
    the JEE and NEET syllabi, so careful chapter work helps twice. For sample papers, syllabus and notices, use
    <a href="https://www.cbse.gov.in/" rel="noopener">cbse.gov.in</a>; for help at home, see
    <a href="{{ url('/cbse-home-tutor-gangtok') }}">CBSE home tutors in Gangtok</a>.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CISCE: ICSE and ISC</h3>
  <p>
    ICSE (Class 10) and ISC (Class 12) papers expect long, well-organised written answers across a wide syllabus,
    including English literature and languages. A tutor should plan revision in rounds rather than one rush at
    the end. The council's own site, <a href="https://cisce.org/" rel="noopener">cisce.org</a>, carries the
    regulations, syllabus and exam notices.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB, IGCSE and other courses</h3>
  <p>
    Families following an international curriculum usually find the right specialist online, since such tutors
    are spread thinly across India. For coursework, a tutor may guide and question, but the submitted work has to
    remain the student's own.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtk-classes">What should tuition focus on at each stage?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Classes 1 to 8</h3>
  <p>
    Early help is about reading fluently, writing clearly and getting arithmetic both fast and right. Two or three
    short sessions a week usually work better than a single long one, and a tutor who checks the school diary
    each visit keeps homework from piling up.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    Class 9 is where topics start to build on one another, and gaps left there come back in the Class 10 board
    year. Ask the tutor to keep pace with school and to plan revision before the exams. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation plan</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> follow the NCERT chapters.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    The step up to Class 11 surprises most students. Spend tutoring time on the subject that is hurting most
    instead of a little on everything. For the final year, read our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a> and the
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtk-subjects">Which subjects can a Gangtok tutor help with?</h2>
  <p>
    From Class 9 upwards, most requests are for Maths and Science, which split into Physics, Chemistry and
    Biology in the senior classes, with English close behind. Tutors on NXTutors also teach Social Science,
    Economics, Accountancy, Business Studies and Computer Science, and in the junior classes one teacher often
    covers every subject. Gangtok has its own pages for
    <a href="{{ url('/maths-home-tutor-gangtok') }}">maths home tutors</a>,
    <a href="{{ url('/science-home-tutor-gangtok') }}">science tuition at home</a>,
    <a href="{{ url('/physics-home-tutor-gangtok') }}">physics tutors</a>,
    <a href="{{ url('/chemistry-home-tutor-gangtok') }}">chemistry tutors</a>,
    <a href="{{ url('/biology-home-tutor-gangtok') }}">biology tutors</a> and
    <a href="{{ url('/english-home-tutor-gangtok') }}">English tutors</a>.
  </p>
  <p>
    What good help looks like differs by subject. In maths, the tutor traces a wrong answer back to the step, or
    the earlier topic, where it went astray. In physics, the student should name the law before reaching for a
    formula. Chemistry needs numericals, reactions and facts handled as separate skills, an approach our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">organic and inorganic chemistry
    guide</a> follows. Biology rewards labelled diagrams and precise terms. In English, the aim is answers in the
    student's own words, and our <a href="{{ url('/blog/spoken-english-for-students') }}">spoken English
    guide</a> has exercises for confidence in speaking.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtk-jee-neet">Can home tuition support JEE or NEET from Gangtok?</h2>
  <p>
    Yes, when the tutor has a clearly defined job. Choose one: sorting out the problems a student could not
    finish in the week's practice, combining board revision and entrance questions in one weekly plan, or adding
    time to the weakest subject. The NCERT books for Classes 11 and 12 serve both the school exams and the entrance
    syllabus, so one plan can cover both.
  </p>
  <p>
    NTA conducts JEE Main in two sessions, and those who qualify can sit JEE Advanced; NEET UG is held once a year
    and Biology carries half its marks. Check every date in the official information bulletin for the year. Many
    Gangtok students combine a nearby tutor for weekly practice with an online specialist for the hardest topics;
    our <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths topic plan</a> and
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NCERT-first NEET biology guide</a> are useful places to
    begin.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtk-mode">Home tutor, online tutor or both?</h2>
  <p>
    A tutor in the room suits younger children, students who drift on a screen, and subjects where every line of
    working needs watching. Online lessons bring in specialists from any city. In Gangtok, several local
    conditions make a mix sensible:
  </p>
  <ul>
    <li><strong>Monsoon evenings.</strong> Heavy rain slows travel on the hill roads; moving that evening's class online keeps the week on track.</li>
    <li><strong>Stepped access.</strong> When a home is a climb from the road, a tutor from the same ward settles into the routine fastest.</li>
    <li><strong>Long journeys along the ridge.</strong> A pairing between Ranipool and the bypass side can work as one home visit and one online class each week.</li>
    <li><strong>Specialist needs.</strong> For an unusual elective, an IB or IGCSE course or advanced entrance work, the right teacher may be in another city.</li>
  </ul>
  <p>
    Many families keep one tutor for both: at home in dry weeks and online when needed. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online tutoring comparison</a> covers the
    trade-offs, and <a href="{{ url('/online-tutor-gangtok') }}">online tutoring for Gangtok students</a> explains
    how screen lessons run.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtk-fees">What do home tutors in Gangtok charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each
    tutor sets their own fee. When two quotes on your shortlist differ, ask:
  </p>
  <ul>
    <li><strong>Which class and goal does the fee assume?</strong> School support for junior classes is usually priced below senior board or entrance work.</li>
    <li><strong>How far will the tutor travel?</strong> A tutor coming from another part of the ridge may factor in the journey; one from your ward often will not.</li>
    <li><strong>Are online lessons charged the same?</strong> Settle how rain-day sessions on screen are billed.</li>
    <li><strong>How long is each session?</strong> Compare total teaching hours, not the number of visits.</li>
  </ul>
  <p>
    You see each fee on the shortlist before any demo, and we keep suggestions within your budget. The
    <a href="{{ url('/pricing-guide') }}">NXTutors pricing guide</a> sets out rates by class and subject, and
    <a href="{{ url('/blog/home-tuition-fees-gangtok') }}">our Gangtok fees article</a> covers the questions worth
    asking locally.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtk-choose">What should you watch for in the free demo?</h2>
  <p>A profile earns a place on the shortlist; the demo decides the rest. While it runs, notice whether the tutor:</p>
  <ol>
    <li><strong>Asks first.</strong> About school tests, the textbook, the timetable and what happens on rain days.</li>
    <li><strong>Checks the starting point.</strong> With a few quick questions before teaching anything new.</li>
    <li><strong>Explains so it sticks.</strong> Your child should be able to repeat the idea in their own words afterwards.</li>
    <li><strong>Knows the board.</strong> Can describe the CBSE or ICSE/ISC paper and points you to the board's site for details.</li>
    <li><strong>Gets your child working.</strong> Most of the hour should be your child solving, not listening.</li>
    <li><strong>Can keep the slot.</strong> Is the journey to your stretch of road realistic every week, at that hour?</li>
  </ol>
  <p>
    Before the visit, send your ward, landmark and a map pin, and hold lessons in a shared room with an adult at
    home. Tutors who join go through an ID check; <a href="{{ url('/how-we-verify-tutors') }}">how we check
    tutors</a> explains what that involves. See also our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> and
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtk-calendar">How does tuition fit the school year in Gangtok?</h2>
  <p>
    Each school sets its own term dates, and CBSE and CISCE publish their own exam notices, so confirm dates with
    the school and on cbse.gov.in or cisce.org rather than relying on a tutor's memory. Most tuition years fall into
    four phases:
  </p>
  <ul>
    <li><strong>New session:</strong> fresh books and teachers; find and fix the gaps carried over from last year.</li>
    <li><strong>Monsoon months:</strong> protect the weekly routine by switching the wettest evenings online rather than cancelling.</li>
    <li><strong>Middle of the year:</strong> steady chapter work with short tests set by the tutor.</li>
    <li><strong>Before the exams:</strong> full timed papers, checked against sample and past papers from the board.</li>
  </ul>
  <p>
    In winter, cold mornings and early dark can move lessons earlier in the evening; agree the change before the
    season turns. An early start leaves room for understanding; a late start can still help if it concentrates on
    past papers and answer writing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtk-start">How do you get started?</h2>
  <p>
    Send the class, board, subjects, ward, landmark and free hours. You receive two or three tutors to consider,
    try one in a free demo, and decide after that. Start with your neighbourhood from the list on this page, browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>, or <a href="{{ url('/demo-class') }}">book a free demo
    class</a>. If no home tutor is close enough yet, an online tutor can begin straight away.
  </p>
  <p>
    The <a href="{{ url('/blog/gangtok-home-tuition-guide') }}">Gangtok home tuition guide</a> goes neighbourhood by
    neighbourhood through all four zones, from Development Area and Arithang to Tadong, Syari and Sichey.
  </p>
  <p class="gtk-note">
    Beyond Gangtok, NXTutors also lists tutors in <a href="{{ url('/city/guwahati') }}">Guwahati</a>,
    <a href="{{ url('/city/kolkata') }}">Kolkata</a>, <a href="{{ url('/city/delhi') }}">Delhi</a> and
    <a href="{{ url('/city') }}">many other cities</a>.
  </p>
  <p class="gtk-note">
    Teachers living in Gangtok can browse <a href="{{ url('/tuition-jobs/gangtok') }}">home tuition jobs in
    Gangtok</a> and see which neighbourhoods families are asking about.
  </p>
  </section>

  </div>
</article>
