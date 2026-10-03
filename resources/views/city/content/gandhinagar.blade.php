{{--
  Long-form guide for the Gandhinagar city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for families in the
  capital who are choosing a home tutor. Figures are either live from the
  database or published NXTutors policy; local facts come only from the cited
  research in database/seo-content/areas/gandhinagar-research.json; board facts
  come from the board's own site (gseb.org). No school, college, university,
  coaching institute, society, developer, hospital, mall or person is named.

  Area links render only when that area page exists and is active, so renaming
  or switching off an area in Super Admin cannot leave a broken link here.
--}}
@php
  $gnrAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gnrA = function (string $slug, string $label) use ($gnrAreaSlugs) {
      return in_array($slug, $gnrAreaSlugs, true)
          ? '<a href="' . e(url('/city/gandhinagar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $gnrTutors = (int) ($hubCounts['tutors'] ?? 0);
  $gnrAreas = $allAreas->count();
@endphp

<article class="nx-guide gnr-guide" aria-labelledby="gnrGuideTitle">
  <h2 id="gnrGuideTitle">Home tuition in Gandhinagar: a parent's guide from the numbered sectors to GIFT City</h2>

  <p class="nx-guide__lede gnr-lede">
    Gandhinagar was drawn on paper before it was built. Gujarat's capital was established on 16 March 1960 and laid
    out through that decade as thirty numbered sectors around the central government complex, crossed by lettered
    roads and numbered roads whose junctions give the city its odd, useful names, such as CH-1 and JA-1. Since June 2020
    the municipal corporation has also taken in Pethapur and a ring of former villages, Kudasan, Sargasan, Randesan,
    Raysan, Koba and Vavol among them, which have filled with apartment towers, and on the Sabarmati to the south
    stands GIFT City, a business district with homes in high-rise blocks. A tutor search here starts with one
    practical question: is the family inside the old grid, or in the newer belt between the sectors and Ahmedabad?
  </p>
  <nav class="nx-guide__toc gnr-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gnr-how">How matching works</a> ·
    <a href="#gnr-zones">The four zones</a> ·
    <a href="#gnr-boards">Boards</a> ·
    <a href="#gnr-classes">Classes</a> ·
    <a href="#gnr-subjects">Subjects</a> ·
    <a href="#gnr-jee-neet">JEE &amp; NEET</a> ·
    <a href="#gnr-mode">Home or online</a> ·
    <a href="#gnr-fees">Fees</a> ·
    <a href="#gnr-choose">The demo class</a> ·
    <a href="#gnr-calendar">The school year</a> ·
    <a href="#gnr-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gnr-how">How does NXTutors find a tutor for a Gandhinagar family?</h2>
  <p>
    You fill in one request: your child's class and board, the subjects causing trouble, the sector or locality you
    live in, the hours left free after school, whether lessons should be at home, online or both, and what you can
    spend each month. We reply with two or three tutors who fit. Their fees are on show before anyone visits, and the
    first lesson with the tutor you pick is a free demo. In Gandhinagar four details do most of the sorting:
  </p>
  <ul>
    <li><strong>Grid address or new locality?</strong> Inside the sectors an address reads as sector, block letter and plot, so a tutor who knows the grid finds it at once. In Kudasan, Raysan or Vavol it is a tower and flat number behind a gate, and the tutor needs a name left with the guard.</li>
    <li><strong>Which side of the city does the tutor live on?</strong> Someone from Sector 22 can reach Sector 30 easily; for Koba or GIFT City a tutor from Randesan or Raysan, or one who rides the metro, tends to last longer.</li>
    <li><strong>Which board and which medium?</strong> GSEB students may study in Gujarati or English, and CBSE, ICSE, ISC, IB and IGCSE each ask for different preparation, so board and medium are matched together.</li>
    <li><strong>When are the parents home?</strong> If you work office hours in the secretariat area or at Infocity, say so, because it decides whether an adult can be in for an after-school lesson.</li>
  </ul>
  <p>
    Use the demo as a normal lesson on the chapter your child is doing that week. If it does not click, try the next
    tutor on the shortlist. Changing tutor at any later point is free too.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnr-zones">Gandhinagar, zone by zone</h2>
  <p>
    @if($gnrTutors > 0)
      The tutors listed for Gandhinagar are drawn from {{ number_format($gnrTutors) }} tutor profiles,
    @else
      The tutors listed for Gandhinagar are drawn from our tutor profiles,
    @endif
    and @if($gnrAreas > 0){{ number_format($gnrAreas) }} Gandhinagar sectors and localities @else every Gandhinagar sector and locality we cover @endif
    have their own page. Each page lists tutors who live there first, then tutors from the same zone, then the rest of
    the city, then online tutors. For planning home visits we group the city into four zones, moving from the
    capital's core towards Ahmedabad: <a href="#gnr-core">Sectors 16–30 and Pethapur</a>,
    <a href="#gnr-infocity">Sectors 1–8 and Infocity</a>, <a href="#gnr-kudasan">Kudasan and Sargasan</a> and
    <a href="#gnr-gift">Koba, Raysan and GIFT City</a>. The groups are ours, drawn for travel, and do not match
    municipal wards.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="gnr-core">Sectors 16–30 and Pethapur: the government heart and the old town</h3>
  <p>
    {!! $gnrA('sectors-16-22-23', 'Sectors 16, 22 and 23') !!} form a central block: Sector 16 holds many state
    government offices, while 22 and 23 are mostly flats and independent houses on the planned sector roads.
    {!! $gnrA('sector-21', 'Sector 21') !!} next door combines homes with the city's well-known shopping area of
    clothing showrooms, restaurants and a cinema, and most families live on the quieter internal roads behind it.
    {!! $gnrA('sectors-25-26', 'Sectors 25 and 26') !!} share a municipal ward with the area of Randheja village;
    Sector 26 contains the state industrial estate and Sector 25 is mainly residential.
    {!! $gnrA('sector-30', 'Sector 30') !!} is known for state government quarters laid out in numbered blocks, with
    private houses and apartment buildings beside them. Further out, {!! $gnrA('pethapur', 'Pethapur') !!} is older
    than the capital itself: it was the seat of a small princely state, part of its land became the site of the new
    city, the town was known for carving printing blocks, and it stayed a separate municipality until June 2020.
  </p>
  <p>
    This is the zone the newest stretch of the Yellow Line serves. The section from Sachivalaya to Mahatma Mandir
    opened on 11 January 2026 with five stations: Akshardham, which serves Sectors 10B and 18 and the Sector 21
    market; Juna Sachivalaya; Sector-16, which serves Sectors 16, 22 and 23; Sector-24; and Mahatma Mandir, where the
    line ends beside the state convention centre in Sector 13C. Gandhinagar Capital railway station, in Sector 14,
    has a redeveloped building inaugurated in July 2021. Sector 30 and Pethapur have no station, so tutors there ride or drive
    in. Office hours load the roads around the secretariat and the industrial estate, which makes late afternoon or
    weekends the easier slot.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="gnr-infocity">Sectors 1–8 and Infocity: the first sectors and the IT district</h3>
  <p>
    {!! $gnrA('sectors-2-3', 'Sectors 2 and 3') !!} are settled residential sectors split into lettered blocks such
    as Sector 2C, mostly independent and duplex houses with government and private homes side by side; they share a
    ward with Infocity and part of Kudasan. {!! $gnrA('sectors-6-7-8', 'Sectors 6, 7 and 8') !!} are three adjoining
    sectors of the original grid, each with its own shopping and community centre, as every sector was planned to
    have. {!! $gnrA('infocity', 'Infocity') !!} is Gandhinagar's main IT office area, and many of the people who
    work there live in the sectors and villages around it. {!! $gnrA('vavol', 'Vavol') !!}, a former village joined
    to the city in 2020, has turned into an apartment area with bungalow schemes beside the old core, and sits close to
    Sectors 4 and 5.
  </p>
  <p>
    The metro reached this side first. The Yellow Line from Motera Stadium in Ahmedabad to Sector-1 opened on
    16 September 2024, with stations at Sector-1, Infocity and Dholakuva Circle among others, and Sector-10A and
    Sachivalaya followed on 27 April 2025. In the grid sectors a junction name and a block and plot number guide a
    tutor straight to the door; in Vavol, where there is no station, homes are mostly gated towers, so pass the
    tower, flat and a phone number to the gate. Office traffic towards Infocity peaks at the start and end of the
    working day.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="gnr-kudasan">Kudasan and Sargasan: the apartment belt along the highway</h3>
  <p>
    {!! $gnrA('kudasan', 'Kudasan') !!}, {!! $gnrA('sargasan', 'Sargasan') !!} and
    {!! $gnrA('randesan', 'Randesan') !!} were villages until 18 June 2020, when they were merged into the municipal
    corporation along with Raysan, Koba and parts of Dholakuva, Uvarsad and Indroda. Town planning schemes of the
    Gandhinagar Urban Development Authority have since laid new roads and plots across them. Kudasan mixes
    independent houses, plotted developments and flats, with flats making up most of the newer building. Sargasan
    lies beside Infocity and Sector 3 and is mainly two- and three-bedroom apartments. Randesan, along the
    Ahmedabad–Gandhinagar Road, has drawn many IT staff and is mostly three-bedroom flats with some bungalow colonies.
  </p>
  <p>
    Randesan and Dholakuva Circle stations opened on 16 September 2024, and Infocity station is the usual stop for
    Sargasan; from Kudasan most people take the metro at Sector-1 and finish by auto or two-wheeler. Since most
    lessons here are in gated societies, the tutor's name should reach the guard before the first visit. The highway
    approaches are busiest at office hours, so a slot just after school, fixed in advance, keeps the week steady.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="gnr-gift">Koba, Raysan and GIFT City: towards the Sabarmati and Ahmedabad</h3>
  <p>
    {!! $gnrA('raysan', 'Raysan') !!} was a village on the edge until June 2020 and has since filled with multi-storey
    apartment buildings, villas, row houses and plots. {!! $gnrA('koba', 'Koba') !!} sits between the two cities, with
    homes from two-bedroom flats up to five-bedroom apartments and independent houses.
    {!! $gnrA('gift-city', 'GIFT City') !!} is a planned business and finance district on the bank of the Sabarmati;
    roughly a fifth of its planned built-up space is residential, and homes are flats in high-rise towers, many of
    twenty-five storeys or more. {!! $gnrA('adalaj', 'Adalaj') !!}, a census town since 2001 and known for its carved
    stepwell of 1499, grew around the cloverleaf where the Sarkhej–Gandhinagar Highway meets State Highway 41, with
    bungalow schemes along the highway and newer apartment projects.
  </p>
  <p>
    Three Yellow Line stations carry Koba's name: Koba Circle, opened in April 2025, and Juna Koba and Koba Gaam,
    opened in September 2025. Raysan has its own station, and one stop on, the Violet Line branch to GIFT City begins;
    that branch opened to the public on 17 September 2024, and its extension towards Shahpur is approved but not open.
    Adalaj has no station of its own; Tapovan Circle on the Yellow Line is the usual stop. GIFT City towers register
    visitors with building security, so send the tower and flat in advance, and expect heavy office traffic morning
    and evening.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnr-boards">Which boards do Gandhinagar tutors teach?</h2>
  <p>
    Students in the capital study under the Gujarat board, CBSE or CISCE, and some follow IB or Cambridge IGCSE. A
    tutor who teaches one board well is not automatically right for another, so we ask about board, class and medium
    together.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>GSEB (Gujarat Secondary and Higher Secondary Education Board)</h3>
  <p>
    The Gujarat Secondary and Higher Secondary Education Board, which is itself based in Gandhinagar, runs the
    state's Standard 10 (SSC) and Standard 12 (HSC) examinations. Its schools teach in Gujarati, English and other
    media, so a tutor should use the textbook's own terms in the language your child writes the paper in. Patterns,
    timetables and results change from year to year: read them only on <a href="https://www.gseb.org/" rel="nofollow noopener">gseb.org</a>,
    and see our <a href="{{ url('/gujarat-board-tutor-gandhinagar') }}">Gujarat board tutors in Gandhinagar</a> page.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    A CBSE paper grows out of the NCERT textbook, and more of its questions now check whether a student can use an
    idea in a setting the book never showed. A tutor earns their fee by working the board's sample papers against
    its marking scheme and insisting on written steps. See the
    <a href="{{ url('/cbse-home-tutor-gandhinagar') }}">CBSE home tutors in Gandhinagar</a> page.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    CISCE's ICSE (Class 10) and ISC (Class 12) cover a broad syllabus with long written answers and set literature
    in English. Students rarely struggle with any one chapter; they struggle to revise all of them in time. Plan
    revision in cycles, practise timed answers and keep project work moving. More on the
    <a href="{{ url('/icse-home-tutor-gandhinagar') }}">ICSE home tutors in Gandhinagar</a> page.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and IGCSE</h3>
  <p>
    IB Diploma marks come partly from coursework assessed in school, and a tutor may talk through an Internal
    Assessment or Extended Essay but must never write it. Cambridge IGCSE rewards reading command words with care and
    marking past papers against the official scheme. Families who relocate for work often find the nearest
    specialist online.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnr-classes">What does a tutor need to do at each stage?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Classes 1 to 8</h3>
  <p>
    Young learners need to read with meaning, add and multiply without fear, and keep a tidy notebook. Many children
    in the capital speak Gujarati or Hindi at home and learn in English, or the other way round, so a little reading
    aloud in the school's language each lesson is worth more than an extra worksheet. One tutor for all subjects is
    usually enough at this age.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    Maths and Science step up sharply in Class 9, and any shaky chapter returns in the Standard 10 or Class 10 board
    year. Aim to finish the syllabus and chapter tests by early winter and spend the rest on full papers. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 Maths preparation plan</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 Science notes</a> follow the NCERT order.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    Class 11 brings the steepest climb, and much of what entrance exams test is taught in that year. Choose one
    specialist for each hard subject instead of one person for all. Our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 Physics strategies</a> and
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a> help in
    the board year.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnr-subjects">Which subjects can a Gandhinagar tutor take on?</h2>
  <p>
    Tutors on NXTutors teach Mathematics, Science, Physics, Chemistry, Biology and English from the early classes to
    Class 12, and also Hindi, Sanskrit, Social Science, Computer Science, Accountancy, Economics
    and Business Studies; if you need Gujarati, say so in the request so we search for it on purpose. Gandhinagar has
    its own pages for
    <a href="{{ url('/maths-home-tutor-gandhinagar') }}">maths</a>,
    <a href="{{ url('/science-home-tutor-gandhinagar') }}">science</a>,
    <a href="{{ url('/physics-home-tutor-gandhinagar') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-gandhinagar') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-gandhinagar') }}">biology</a> and
    <a href="{{ url('/english-home-tutor-gandhinagar') }}">English</a> home tutors.
  </p>
  <p>
    A few habits make each subject easier to teach. In Maths, trace a weak topic back to the class where it first
    went wrong, even if that is two years earlier. In Physics, start from the idea and let the formula follow. Senior
    Chemistry behaves like three subjects, with numericals in physical, mechanisms in organic and careful memory work in
    inorganic, as our <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Class 12 organic and
    inorganic chemistry guide</a> sets out. A student switching from Gujarati-medium to English-medium books needs a
    tutor who gives technical words in both languages at first and drops the translation as confidence grows; our
    <a href="{{ url('/blog/spoken-english-for-students') }}">spoken English guide for students</a> adds practice
    for home.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnr-jee-neet">Can a home tutor help with JEE or NEET in Gandhinagar?</h2>
  <p>
    Yes, when the tutor's job is defined around the coaching rather than competing with it. Between school, a
    coaching batch and the journey home, an entrance student in the capital has little spare time, so a tutor is
    worth the hours only with a clear brief:
  </p>
  <ul>
    <li><strong>Close the week's gaps.</strong> Sit with the coaching module and the latest test, and finish every question that was skipped or got wrong.</li>
    <li><strong>Plan boards and entrance together.</strong> NCERT for Classes 11 and 12 supports the board paper and much of the entrance syllabus, so a single revision plan can cover both.</li>
    <li><strong>Spend time where marks leak.</strong> Extra hours on the one subject that drags the total down return more than equal hours for all three.</li>
    <li><strong>Use the metro hour.</strong> For a student who commutes on the Yellow Line, a short online doubt session on reaching home can replace a late visit.</li>
  </ul>
  <p>
    NTA conducts JEE Main in two sessions in the first half of the year, and those who qualify can sit JEE Advanced.
    NEET UG is held once a year, and Biology carries half of its marks, so the NCERT Biology books deserve slow, careful
    reading. Take dates only from that year's official information bulletin. Gandhinagar's
    <a href="{{ url('/jee-home-tutor-gandhinagar') }}">JEE home tutors</a> and
    <a href="{{ url('/neet-home-tutor-gandhinagar') }}">NEET home tutors</a> pages go further, and our topic plans for
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE Maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE Physics</a>,
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE Chemistry</a> and
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET Biology from NCERT</a> are worth sharing with the
    tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnr-mode">Home or online tuition in Gandhinagar?</h2>
  <p>
    A tutor in the room suits younger children, students who wander off on a screen, and subjects
    where the written working matters, such as Maths and Physics numericals. Online lessons reach teachers anywhere in
    India, which helps most with IB, IGCSE, ISC electives and harder entrance problems. Four local facts shape the
    choice in the capital:
  </p>
  <ul>
    <li><strong>One line through the sectors.</strong> The Yellow Line now runs from Ahmedabad through Koba, Raysan, Randesan and Infocity into the sectors and ends at Mahatma Mandir, so a tutor living near a station can cover a long stretch of the city without a vehicle.</li>
    <li><strong>A branch for GIFT City.</strong> The Violet Line links GIFT City with the Yellow Line, which widens the pool of tutors who can reach its towers.</li>
    <li><strong>Gaps in the network.</strong> Sector 30, Pethapur, Vavol and Adalaj have no station, so home tutors there mostly come from the next sector or village, and online lessons fill the rest.</li>
    <li><strong>Summer and monsoon.</strong> Gujarat's hottest afternoons and heaviest rain days are easier with an online lesson agreed in advance, so the week is not lost.</li>
  </ul>
  <p>
    A common pattern is two home lessons a week with a short online session before tests, all with one tutor. See
    <a href="{{ url('/online-tutor-gandhinagar') }}">online tutors for Gandhinagar</a> and our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online tutor comparison</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnr-fees">What does a home tutor cost in Gandhinagar?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor
    decides their own rate, and the differences usually come down to:
  </p>
  <ul>
    <li><strong>Stage of school.</strong> Lessons for the early classes usually cost less than senior-school teaching.</li>
    <li><strong>Depth of the work.</strong> Entrance problem solving, IB Higher Level and coursework guidance take more preparation than school-level revision.</li>
    <li><strong>The trip.</strong> A tutor crossing from the sectors to GIFT City, or out to Adalaj, may count the ride; one from your own zone rarely does.</li>
    <li><strong>How hours are arranged.</strong> On a fixed budget, fewer and longer lessons often achieve more than many short ones.</li>
  </ul>
  <p>
    Put the money where the difficulty is. Every shortlisted fee is visible before the demo, and no tutor above your
    budget is suggested. Our <a href="{{ url('/pricing-guide') }}">pricing guide</a> lists fees by class and subject,
    and <a href="{{ url('/blog/home-tuition-fees-gandhinagar') }}">home tuition fees in Gandhinagar</a> covers the
    questions to ask locally.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnr-choose">What should you look for in the demo class?</h2>
  <p>The profile gets a tutor onto the list; the demo decides whether they stay. Notice these six things:</p>
  <ol>
    <li><strong>Questions first.</strong> Did the tutor ask about school, coaching and the next test before teaching?</li>
    <li><strong>A short diagnosis.</strong> Did they find out what your child already knows rather than starting at the top of the chapter?</li>
    <li><strong>The right medium.</strong> Did the explanation land, whether it ran in Gujarati, Hindi, English or a mix?</li>
    <li><strong>Board awareness.</strong> Could they describe how your board's paper is set without guessing?</li>
    <li><strong>Your child's pen moving.</strong> Was most of the hour spent solving, not watching?</li>
    <li><strong>A slot they can keep.</strong> Can they reach your sector or tower at that time each week?</li>
  </ol>
  <p>
    For a gated tower, leave the tutor's name with security before the demo; for a house in the grid, send the
    sector, block, plot number and a map pin. Keep lessons in a shared room with an adult at home. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> and guide to
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a> go into more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnr-calendar">When should tuition start in the school year?</h2>
  <p>
    CBSE's session opens in April; GSEB and CISCE schools publish their own calendars, so check yours. For a board or
    entrance student the year tends to run like this:
  </p>
  <ul>
    <li><strong>April to June:</strong> new books and the long summer break, a good stretch for repairing last year's gaps; keep lessons in the morning or evening, away from the midday heat.</li>
    <li><strong>July to September:</strong> regular weekly lessons through the monsoon, with online lessons agreed for the wettest days.</li>
    <li><strong>October to November:</strong> Navratri evenings and the Diwali holidays change routines, so fix the timings for those weeks early and make up hours either side.</li>
    <li><strong>December to February:</strong> finish the syllabus, sit pre-boards and full papers, and plan around Uttarayan in mid-January; check gseb.org or your board's notices for exam dates.</li>
    <li><strong>March to May:</strong> board papers, then the second JEE Main session, JEE Advanced and NEET UG.</li>
  </ul>
  <p>
    Confirm every date from official notices. Starting in April gives a full year; joining later still helps, with
    more of the time given to papers and exam technique.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnr-start">How do you get started in Gandhinagar?</h2>
  <p>
    Tell us the class, board and medium, the subjects, your sector or locality with a block or tower, and the hours
    that fit around school and coaching. We suggest two or three tutors; you pick one for a free demo and decide
    afterwards. Choose your area from the list on this page, browse <a href="{{ url('/tutors') }}">all tutors</a> or
    book a <a href="{{ url('/demo-class') }}">free demo class</a>. Where no home tutor is near enough yet, an online
    tutor from elsewhere in India can start right away.
  </p>
  <p>
    For a walk through all four zones, from Sector 21 and Pethapur to Koba and GIFT City, read our
    <a href="{{ url('/blog/gandhinagar-home-tuition-guide') }}">Gandhinagar home tuition guide</a>.
  </p>
  <p class="gnr-note">
    Elsewhere in Gujarat, see home tutors in <a href="{{ url('/city/ahmedabad') }}">Ahmedabad</a> and
    <a href="{{ url('/city/surat') }}">Surat</a>, or browse <a href="{{ url('/city') }}">cities across India</a>.
  </p>
  <p class="gnr-note">
    Teaching in Gandhinagar? See <a href="{{ url('/tuition-jobs/gandhinagar') }}">home tuition jobs in
    Gandhinagar</a> and the sectors where families are asking for tutors.
  </p>
  </section>

  </div>
</article>
