{{--
  Long-form guide for the Puducherry city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for families in
  Puducherry town choosing a tutor, not for search engines: every figure here is
  either live from the database or a published NXTutors policy, local facts come
  from the cited research in database/seo-content/areas/puducherry-research.json
  (areas, zone_facts and board_facts), and no school, college, university,
  society, developer, hospital or mall is named. Covers the Puducherry town area
  only, not Karaikal, Mahe or Yanam.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $pdyAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pdyA = function (string $slug, string $label) use ($pdyAreaSlugs) {
      return in_array($slug, $pdyAreaSlugs, true)
          ? '<a href="' . e(url('/city/puducherry/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $pdyTutors = (int) ($hubCounts['tutors'] ?? 0);
  $pdyAreas = $allAreas->count();
@endphp

<article class="nx-guide pdy-guide" aria-labelledby="pdyGuideTitle">
  <h2 id="pdyGuideTitle">Home tuition in Puducherry: a family guide from Kalapet to Veerampattinam</h2>

  <p class="nx-guide__lede pdy-lede">
    Puducherry (many people still say Pondicherry) is a compact coastal town with an unusual shape. Its old core, the
    Boulevard Town, is a grid split by a canal into the former French Quarter by the sea and the Tamil Quarter inland.
    Around it the town grew in two municipalities: Pondicherry Municipality, which joined the old communes of
    Pondicherry and Mudaliarpet, and Oulgaret Municipality to the north and west, home to Lawspet, Reddiarpalayam and
    Saram. Further out, Ariyankuppam and Villianur keep the feel of separate towns, and Kalapet sits on its own along the
    East Coast Road. For a parent, the practical question is simple: which of these pieces does a tutor already live in,
    and which road do they take to reach your door?
  </p>
  <nav class="nx-guide__toc pdy-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pdy-how">How matching works</a> ·
    <a href="#pdy-zones">The four zones</a> ·
    <a href="#pdy-boards">Boards</a> ·
    <a href="#pdy-classes">Classes</a> ·
    <a href="#pdy-subjects">Subjects</a> ·
    <a href="#pdy-jee-neet">JEE &amp; NEET</a> ·
    <a href="#pdy-mode">Home or online</a> ·
    <a href="#pdy-fees">Fees</a> ·
    <a href="#pdy-choose">The demo class</a> ·
    <a href="#pdy-calendar">The school year</a> ·
    <a href="#pdy-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pdy-how">How does NXTutors find a tutor for a Puducherry family?</h2>
  <p>
    Everything begins with a short form. Note your child's class and the syllabus the school uses this year, the
    subjects causing trouble, your street or colony with something nearby that a stranger could find, the free hours
    once school ends, a monthly budget, and whether a teacher should come to the house, teach on a screen or mix the
    two. From that we name two or three suitable tutors. Their fees are on show from the start, so nothing is a surprise
    when they arrive, and the opening lesson with your chosen tutor costs nothing. Here, four questions shape that
    shortlist:
  </p>
  <ul>
    <li><strong>Which side of the canal or the bus stand?</strong> The town is small enough that many tutors cross it, but a teacher who lives in your own municipality or commune is the one most likely to keep coming every week.</li>
    <li><strong>Which syllabus is the school on now?</strong> Government schools have moved to CBSE, while some private schools still use the state-board SSLC and +2 syllabus. A tutor needs to know which books are on the desk before the first lesson.</li>
    <li><strong>Tamil, English or both?</strong> Plenty of children read their textbooks in English and think through a hard idea in Tamil. Say which mix works at home so we can suggest tutors who teach that way.</li>
    <li><strong>Doorstep, gate or campus?</strong> Most homes here open straight onto the street, but apartment blocks, government housing and campus residences each have their own way of letting a visitor in.</li>
  </ul>
  <p>
    Ask for that free first lesson on whatever chapter is open in class right now, so you see real teaching. A poor fit
    simply means we line up the next name on the shortlist, and swapping to a different tutor months later carries no
    charge either.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdy-zones">Puducherry, zone by zone</h2>
  <p>
    @if($pdyTutors > 0)
      The tutors you see for Puducherry come from {{ number_format($pdyTutors) }} tutor profiles,
    @else
      The tutors you see for Puducherry come from our tutor profiles,
    @endif
    and @if($pdyAreas > 0){{ number_format($pdyAreas) }} Puducherry localities @else every Puducherry locality we list @endif
    have their own page. On every one of them, the order is: tutors who live right there, those living elsewhere in
    its zone, others from across Puducherry, and finally online teachers. To plan home visits we treat the town as four
    zones, beginning in the old centre and then working south, north and west:
    <a href="#pdy-heritage">Heritage Town</a>, <a href="#pdy-mudaliarpet">Mudaliarpet and Ariyankuppam</a>,
    <a href="#pdy-lawspet">Lawspet and the East Coast Road</a> and
    <a href="#pdy-villianur">Reddiarpalayam and Villianur</a>. We drew these groups around how people travel; a zone
    is not a ward or a constituency, even when it borrows a familiar name.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="pdy-heritage">Heritage Town: the old grid between the sea and the canal</h3>
  <p>
    The colonial town was laid out as a grid and divided by a canal into a French Quarter and an Indian, or Tamil,
    Quarter, and French street names still survive on many corners. About 1,200 of its buildings have been identified
    as heritage buildings, roughly 300 on the French side and about 900 on the Tamil side.
    {!! $pdyA('white-town', 'White Town') !!}, the old French Quarter, is the seaward half, running down to Rock Beach,
    also called Promenade Beach, the town's main seafront on the Bay of Bengal; its homes are mostly independent houses
    and heritage buildings among guest houses, cafés and offices. {!! $pdyA('tamil-quarter', 'The Tamil Quarter') !!},
    west of the canal, mixes traditional street-facing houses with the busiest shopping streets and the central
    market. North of both lies {!! $pdyA('muthialpet', 'Muthialpet') !!}, an assembly constituency made up of seven
    municipal wards, with a market complex more than a century old, a clock tower and the fishing hamlet of
    Vaithikuppam on its shore.
  </p>
  <p>
    Puducherry railway station, on South Boulevard, is the end of the branch line from Villupuram built in 1879, and
    the main bus stand is close to the old town as well, so tutors without a vehicle can still reach this zone. Arrival
    is usually simple: a house with its own street door, a quick phone call, and the tutor is in. What changes the
    plan is the crowd. The seafront and heritage streets fill with visitors in the evenings and at weekends, and the
    shopping streets are packed on festival days, so weekday slots on a two-wheeler are the easiest to keep.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="pdy-mudaliarpet">Mudaliarpet and Ariyankuppam: south along the Cuddalore road</h3>
  <p>
    {!! $pdyA('mudaliarpet', 'Mudaliarpet') !!} was once a commune of its own; under the Pondicherry Municipalities
    Act of 1973 it was merged with the Pondicherry commune into today's Pondicherry Municipality, which has 33 wards and
    still runs a local office here. Older houses sit beside apartment buildings, some of them tall, along the Cuddalore
    Main Road. {!! $pdyA('nellithope', 'Nellithope and Anna Nagar') !!}, two municipal wards with a municipal office at
    Nellithope, lie close to the bus stand. Across the Sankaraparani river,
    {!! $pdyA('ariyankuppam', 'Ariyankuppam') !!} is a town, commune and constituency with streets laid out in a grid,
    and Arikamedu, the site excavated in the 1940s that shows ancient trade with Rome, lies just outside it.
    {!! $pdyA('manavely', 'Manavely') !!}, a census town in the same commune, became a constituency of its own after
    delimitation; {!! $pdyA('veerampattinam', 'Veerampattinam') !!} is the largest coastal village in the Puducherry
    region; and {!! $pdyA('thavalakuppam', 'Thavalakuppam') !!} sits further out on the old NH-45A, where plotted
    roads branch off the highway.
  </p>
  <p>
    Buses on the Cuddalore road, and local routes towards Veerampattinam, Bahour and Madukarai, run through this zone,
    which helps tutors who do not ride. Apartment buildings in Mudaliarpet may ask a visitor to sign in; plotted homes
    further south usually have their own gate. The fifth Friday of the Aadi car festival at Veerampattinam is a public
    holiday declared by the Government of Puducherry, and roads near the village are crowded through the festival
    weeks, so plan those Fridays as online lessons or rest days.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="pdy-lawspet">Lawspet and the East Coast Road: Oulgaret's northern side</h3>
  <p>
    Oulgaret, also written Uzhavarkarai, started as a commune under a French decree of 1880 and became a
    municipality in 1994; it is made of eight revenue villages, including Kalapet, Karuvadikuppam, Reddiarpalayam,
    Saram and Thattanchavady, and has 42 wards. {!! $pdyA('lawspet', 'Lawspet') !!} was thinly settled until about
    1990, when government residences and private buildings spread across it, and it is now one of the most densely
    populated parts of the town and is known for its many educational institutions; the airport is here too.
    {!! $pdyA('karuvadikuppam', 'Karuvadikuppam') !!}, counted among Lawspet's main areas, has a main road of temples,
    shops and showrooms that runs on into Muthialpet. {!! $pdyA('kamaraj-nagar', 'Kamaraj Nagar') !!} is a settled
    residential constituency whose segments include Brindavanam, Krishna Nagar, Rainbow Nagar and Venkata Nagar.
    {!! $pdyA('kalapet', 'Kalapet') !!}, annexed by the French in 1703, is the northernmost enclave of the district,
    surrounded on three sides by Viluppuram district with the sea on the fourth.
  </p>
  <p>
    The East Coast Road, which links Puducherry with Chennai to the north and Cuddalore to the south, passes through
    Lawspet and on to Kalapet, so a tutor living along it can serve both. Visits vary more here than anywhere else in
    the town: government housing campuses and apartment blocks may check visitors at the gate, colony houses allow
    doorstep arrival, and campus residences in Kalapet set their own entry rules. Airport Road and College Road are
    busiest when schools and colleges open and close, so a slot away from those hours holds better.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="pdy-villianur">Reddiarpalayam and Villianur: the western side towards Villupuram</h3>
  <p>
    {!! $pdyA('reddiarpalayam', 'Reddiarpalayam') !!} was a separate assembly constituency from 1974 until 2006 and is
    largely residential, with many government employees and professionals living in houses and plots around Pon Nagar,
    Jawahar Nagar and Kavery Nagar. {!! $pdyA('saram', 'Saram') !!}, also an Oulgaret revenue village and ward, is a
    calm residential pocket close to the main bus stand. {!! $pdyA('thattanchavady', 'Thattanchavady') !!} gives its
    name to an assembly constituency and is known for plotted land and builder-floor homes. At the western edge,
    {!! $pdyA('villianur', 'Villianur') !!} is a commune panchayat and the headquarters of Villianur taluk on the banks
    of the Sankaraparani; at the 2001 census it was the third-largest town in the district. The government has
    proposed upgrading the Villianur and Ariyankuppam commune panchayats into municipalities.
  </p>
  <p>
    Villianur station, in the Sulthanpet area, is on the same broad-gauge line that ends at Puducherry station, and
    NH-45A carries road traffic towards Villupuram, so tutors coming from the town can travel by train, bus or
    two-wheeler. Homes are mostly houses and plots with their own door or gate; a landmark near a temple, the station or
    a bus stop is the most useful thing to send before the first visit. Temple festival days bring crowds into
    Villianur's centre, and office hours slow the main roads into town, so an evening tutor from the same side of
    the town is usually the steadiest match.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdy-boards">Which syllabus do Puducherry schools follow?</h2>
  <p>
    Puducherry has no school board of its own, and the picture has shifted recently, so confirm your child's syllabus
    with the school before you brief a tutor. Families here mostly deal with CBSE, the state-board SSLC and +2
    syllabus in some private schools, CISCE's ICSE and ISC, and, for a smaller group, IB or Cambridge IGCSE.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>The move to CBSE in government schools</h3>
  <p>
    In April and May 2024 the Directorate of School Education ran orientation programmes for heads of schools,
    inspecting officers and teachers on a smooth swap from the state syllabus to the CBSE syllabus. Its result pages
    list Class 10 results as SSLC up to 2024 and as CBSE 10 from 2025, and Class 12 results as +2 up to 2024 and as
    CBSE 12 from 2025. A student who began on the state syllabus and now sits CBSE may need help with the new
    textbooks and the style of the questions.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>State-board SSLC and +2 in private schools</h3>
  <p>
    Some private schools still follow the state-board syllabus: from 2026 the Directorate also publishes separate
    state-board SSLC and +2 result analyses for private schools in the Puducherry and Karaikal regions. A tutor for
    these students should teach from the prescribed textbooks and that board's own past papers; for exam formats and
    dates, rely only on the official notices the school passes on.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    CBSE papers are built on the NCERT books, and more of each paper now asks students to apply an idea rather than
    repeat it. For the many students who are new to CBSE, the first job is getting comfortable with NCERT's
    in-text questions and exercises; the second is writing full, step-by-step answers that earn method marks.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE, ISC, IB and IGCSE</h3>
  <p>
    ICSE and ISC set long written papers over a wide syllabus, so revision has to come round more than once. IB and
    IGCSE families, often recently moved to Puducherry, usually find the right specialist online. With IB coursework a
    tutor may comment on drafts and planning, while the student does all the writing; IGCSE preparation leans on past
    papers and mark schemes.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdy-classes">What should tutoring focus on at each stage?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Primary and middle school (Classes 1 to 8)</h3>
  <p>
    Reading with confidence, number sense and tidy written work matter more than racing ahead. Many children here speak
    Tamil at home and study in English, so a few minutes of reading aloud and explaining a sum in their own words does
    more than another worksheet. If the school has just changed syllabus, check the new book's order of topics early.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    Maths and Science step up sharply in Class 9, and a gap left there shows up in the Class 10 board year. A tutor
    should cover the school syllabus in order, add regular written tests, and know whether the student is on CBSE or
    the state-board SSLC. Two free resources to hand a tutor: our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 Maths plan</a> and our chapter-wise
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 Science notes</a>.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    Class 11 brings a big rise in difficulty, and the stream decides where it lands. Science students need depth in Physics and
    Maths; Commerce students often want steady help with Accountancy. Pick one specialist per hard subject rather than
    one tutor for everything. For the level a senior Maths paper reaches, read our
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">notes on Class 12 calculus and algebra</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdy-subjects">Which subjects do Puducherry tutors teach?</h2>
  <p>
    Most requests start with Maths, Science, Physics, Chemistry and Biology from Class 8 onwards, with English close
    behind. Beyond those, tutors on NXTutors teach Tamil, Computer Science, Social Science, and the Commerce trio of
    Accountancy, Business Studies and Economics, while plenty handle every subject for the younger classes. Dedicated
    Puducherry pages cover
    <a href="{{ url('/maths-home-tutor-puducherry') }}">maths</a>,
    <a href="{{ url('/science-home-tutor-puducherry') }}">science</a>,
    <a href="{{ url('/physics-home-tutor-puducherry') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-puducherry') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-puducherry') }}">biology</a>,
    <a href="{{ url('/english-home-tutor-puducherry') }}">English</a> and
    <a href="{{ url('/accountancy-home-tutor-puducherry') }}">accountancy</a> tutors, plus
    <a href="{{ url('/cbse-home-tutor-puducherry') }}">CBSE</a> and
    <a href="{{ url('/icse-home-tutor-puducherry') }}">ICSE</a> tutors.
  </p>
  <p>
    A few habits make the hour count. In Maths, trace a mistake back to the class where the idea first went wrong.
    In Physics, explain the situation in words before writing any formula. Chemistry needs numericals, reaction
    patterns and careful reading of the textbook all at once; see how we split
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Organic and Inorganic Chemistry for Class
    12</a>. For a student moving from Tamil-medium study into English-medium books, ask for a tutor who gives each
    technical word in both languages at first and then lets the English take over. Daily conversation practice from our
    <a href="{{ url('/blog/spoken-english-for-students') }}">spoken English tips for students</a> helps alongside.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdy-jee-neet">Is a home tutor useful for JEE or NEET aspirants in Puducherry?</h2>
  <p>
    Yes. Most aspirants here combine school, some form of coaching or a test series, and a tutor who fills the gaps.
    A home tutor earns their place with a clear role:
  </p>
  <ul>
    <li><strong>Close the week's loose ends.</strong> Take the questions the student got wrong or skipped in the latest test and make sure each one is understood before new chapters pile on.</li>
    <li><strong>Keep board and entrance on one track.</strong> Class 11 and 12 NCERT underpins both, which matters doubly for students who have only recently moved to CBSE.</li>
    <li><strong>Put the hours where the marks drop.</strong> Most students have one subject pulling the score down; that is where the tutor's time should go.</li>
    <li><strong>Agree a slot that survives the year.</strong> Early morning, late evening or a weekend block, fixed once and protected.</li>
  </ul>
  <p>
    For the facts: JEE Main is run by NTA as two sessions in the first months of the year, and a qualifying score opens
    the door to JEE Advanced. NEET UG comes once each year with Biology worth half the paper, which is why every line of
    the NCERT Biology books matters. Exam dates belong to each year's official bulletin and nowhere else. See the
    Puducherry pages for
    <a href="{{ url('/jee-home-tutor-puducherry') }}">JEE tutors</a> and
    <a href="{{ url('/neet-home-tutor-puducherry') }}">NEET tutors</a>. Chapter-by-chapter plans you can pass to a
    tutor: <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">Maths for JEE</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">Physics for JEE</a>,
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">Chemistry for JEE</a> and
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET Biology starting from NCERT</a>. If you are weighing a
    coaching centre against one-to-one help, our <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">JEE
    coaching versus home tutor</a> piece uses Gurugram examples, yet the reasoning carries over.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdy-mode">Home visits or online classes: which suits Puducherry?</h2>
  <p>
    Having the teacher in the room pays off for small children, for teenagers who drift when a screen is involved,
    and for subjects where a pencil and the page are where mistakes get caught. Online lessons open up teachers from across India, which is often the
    only way to find a specialist for IB, IGCSE, ISC electives or advanced entrance problems in a town this size. Local
    conditions tip the balance:
  </p>
  <ul>
    <li><strong>A small town, two municipalities.</strong> Many trips are short, so a tutor from the next ward is often possible; ask for one who already lives in Pondicherry or Oulgaret Municipality, whichever is yours.</li>
    <li><strong>Outlying places.</strong> Kalapet up the East Coast Road and Thavalakuppam and Veerampattinam to the south have a smaller pool nearby, so online help widens the choice.</li>
    <li><strong>Buses and trains.</strong> Bus routes on the Cuddalore road and the East Coast Road, and trains between Villianur and Puducherry stations, let tutors without a vehicle reach many homes.</li>
    <li><strong>Rain and festivals.</strong> When the year-end rains are at their worst, or a big festival closes the roads, switching that one session to a screen saves the week.</li>
  </ul>
  <p>
    Plenty of families end up with a mix: the tutor visits on set weekdays and adds a brief video session in the run-up
    to a test. Browse <a href="{{ url('/online-tutor-puducherry') }}">online tutors for Puducherry</a>, or read
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">how home and online tutoring compare</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdy-fees">How are home tutor fees set in Puducherry?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor
    decides their own rate, which usually reflects:
  </p>
  <ul>
    <li><strong>Class.</strong> A primary child's hour is normally priced below a Class 11 or 12 hour.</li>
    <li><strong>Target.</strong> Competitive-exam problem solving costs more than keeping up with school work.</li>
    <li><strong>Distance.</strong> Someone riding over from the far side of town may add for it, unlike a neighbour.</li>
    <li><strong>Schedule.</strong> Two long sessions a week often stretch a set budget further than four short ones.</li>
  </ul>
  <p>
    Before you say yes, find out how many hours each week the tutor recommends, what happens to a lesson that gets
    missed, and how you will hear about progress. Spend first on the subject that worries you most rather than spreading
    the budget thin. You see each shortlisted tutor's rate ahead of the demo, and anyone priced over your limit is left
    off. Our <a href="{{ url('/pricing-guide') }}">pricing guide</a> lists typical rates for each class and subject,
    while <a href="{{ url('/blog/home-tuition-fees-puducherry') }}">home tuition fees in Puducherry</a> goes through
    the local questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdy-choose">How can you tell at the demo whether a tutor will work out?</h2>
  <p>A good profile only earns the visit. During the free lesson, notice these six things:</p>
  <ol>
    <li><strong>Curiosity first.</strong> Before explaining anything, did they ask what the school is covering and when the next test falls?</li>
    <li><strong>Diagnosis.</strong> Did a few quick questions reveal where your child actually stands?</li>
    <li><strong>Clarity.</strong> Whether in English, Tamil or both, did your child follow without strain?</li>
    <li><strong>Syllabus awareness.</strong> Are they sure whether the book this year is CBSE or state board, and do they teach to it?</li>
    <li><strong>Active practice.</strong> Was your child writing and solving for much of the hour?</li>
    <li><strong>Reliability.</strong> Is the weekly time realistic given where the tutor is based?</li>
  </ol>
  <p>
    Flats and campus homes: pass the tutor's name to whoever watches the entrance in advance. Old-town houses and colony
    lanes: share the street, a nearby landmark and a location pin. Have lessons in a common room of the house, with a
    grown-up around. More pointers sit in our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">parents'
    checklist for the demo class</a> and in <a href="{{ url('/blog/how-to-choose-boardstream') }}">how to pick a board
    and stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdy-calendar">How does the school year shape tuition here?</h2>
  <p>The CBSE year opens in April. Seen from a Puducherry home, an exam year breaks into roughly five parts:</p>
  <ul>
    <li><strong>April to June:</strong> fresh textbooks plus the long holiday, ideal for repairing weak foundations, above all for students only lately switched to CBSE books.</li>
    <li><strong>July to September:</strong> a regular weekly rhythm, paced by the school's unit tests.</li>
    <li><strong>October to December:</strong> the heaviest rain on this coast usually comes late in the year, so agree in advance which lessons switch online on a wet day.</li>
    <li><strong>January and February:</strong> after the Pongal break in mid-January, timed full papers and pre-boards take over; watch the board's notices for the exam timetable.</li>
    <li><strong>March to May:</strong> boards wrap up, then JEE Main's later session, JEE Advanced and NEET UG arrive in turn.</li>
  </ul>
  <p>
    Rely on official notices for every date. An April start leaves room for the full syllabus; joining mid-year is
    still worthwhile, just weighted towards practice papers and answer-writing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdy-start">How do you get started in Puducherry?</h2>
  <p>
    Share the class, syllabus and subjects, where you live and when your child is free. A shortlist of two or three
    tutors follows; one of them gives a free demo, and only then do you commit. Open your locality's page from the list
    here, look through <a href="{{ url('/tutors') }}">the tutor directory</a>, or go straight to a
    <a href="{{ url('/demo-class') }}">free demo booking</a>. Where nobody lives near enough to visit yet, a teacher
    online can begin without waiting.
  </p>
  <p>
    Our <a href="{{ url('/blog/puducherry-home-tuition-guide') }}">Puducherry home tuition guide</a> walks through
    every locality in all four zones, from White Town and Muthialpet to Kalapet, Ariyankuppam and Villianur.
  </p>
  <p class="pdy-note">
    Moving or comparing? We also list home tutors in <a href="{{ url('/city/chennai') }}">Chennai</a>,
    <a href="{{ url('/city/coimbatore') }}">Coimbatore</a> and <a href="{{ url('/city/bengaluru') }}">Bengaluru</a>,
    or browse <a href="{{ url('/city') }}">every city we cover</a>.
  </p>
  <p class="pdy-note">
    Are you a tutor in Puducherry? <a href="{{ url('/tuition-jobs/puducherry') }}">Puducherry home tuition jobs</a>
    shows which parts of town families are asking about.
  </p>
  </section>

  </div>
</article>
