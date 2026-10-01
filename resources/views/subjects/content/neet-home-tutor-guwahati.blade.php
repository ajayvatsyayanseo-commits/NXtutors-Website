{{--
  Guwahati page for NEET home tutors. The exam, the NMC syllabus and NCERT-first
  tutoring are on the national hub (/neet-home-tutor); this page is about NEET
  tuition in Guwahati: online biology checks and home physics, evening coaching,
  GS Road and the river, the five zones, state board / CBSE / CISCE students and
  booklet language, biology revision through a Guwahati year, and Class 11,
  Class 12 and repeat-year plans.

  Exam facts only as stated on the national page, which cites (fetched 1 Oct 2026):
  - NTA, NEET (UG) 2026 Information Bulletin (neet.nta.nic.in): 180 compulsory
    MCQs in 180 minutes (physics 45, chemistry 45, biology 90), 720 marks, +4/-1;
    pen and paper, single day, single shift; booklets in English, Hindi
    (bilingual) or English plus a regional language (13 languages in all);
    minimum age 17 by 31 December, no upper limit; ties by biology, then
    chemistry, then physics.
  - NMC syllabus for NEET (UG) 2026: physics 20 units, chemistry 20 units,
    biology 10 units (five Class 11, five Class 12).
  Assam's state board described generally only, as on the Guwahati hub. Local
  detail only from database/seo-content/areas/guwahati-research.json,
  guwahati-zone-guides.json, zones/guwahati.json and /city/guwahati. No schools,
  colleges, hospitals, coaching institutes or people named. Area links render
  only for active Guwahati areas.
--}}
@php
  $gneSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gneA = function (string $slug, string $label) use ($gneSlugs) {
      return in_array($slug, $gneSlugs, true)
          ? '<a href="' . e(url('/city/guwahati/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="gneGuideTitle">
  <h2 id="gneGuideTitle">NEET home tutor in Guwahati: biology on screen, physics at the table, and a week that survives the rain</h2>

  <p class="nx-guide__lede">
    Guwahati NEET aspirants often juggle three things: a school course that may be the state board, CBSE or ISC, an evening
    batch on the Chandmari or GS Road side, and a city where every journey is by road and the rainy months can wash out a
    week's plans. A tutor helps when the sessions are matched to the subject. Biology, half the paper, needs short and
    frequent recall checks that work perfectly online. Physics needs a tutor beside the student, watching the working. This
    page shows how Guwahati families arrange that, which localities tutors reach easily, how state board and
    Assamese-medium students add NEET to their course, how to pace biology revision through the year, and what to look for
    in the demo. For the exam and syllabus in full, see the national
    <a href="{{ url('/neet-home-tutor') }}">NEET home tutor</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gne-exam">NEET in brief</a> ·
    <a href="#gne-split">The subject split</a> ·
    <a href="#gne-week">Around the batch</a> ·
    <a href="#gne-areas">Six localities</a> ·
    <a href="#gne-boards">State board, CBSE, ISC</a> ·
    <a href="#gne-year">Biology through the year</a> ·
    <a href="#gne-stages">Stages</a> ·
    <a href="#gne-demo">Demo</a> ·
    <a href="#gne-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gne-exam">NEET (UG) in brief</h2>
  <p>
    NEET (UG) is conducted by the NTA, with the syllabus notified by the National Medical Commission. In the 2026 bulletin it
    was one pen-and-paper sitting of 180 minutes in a single shift, with 180 compulsory multiple-choice questions: 45 in
    physics, 45 in chemistry and 90 in biology, worth 720 marks. Each correct answer earns four marks; each wrong one loses
    a mark. Equal scores are split by biology first. The NMC lists 20 units each in physics and chemistry and 10 in
    biology, five from each NCERT year. Check neet.nta.nic.in for the current bulletin before relying on any detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gne-split">Which NEET subject at home, which online?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The home and online split for NEET in Guwahati</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Where</th><th scope="col">Session shape</th><th scope="col">Why it fits Guwahati</th></tr>
    </thead>
    <tbody>
      <tr><td>Biology</td><td>Online</td><td>30 to 40 minutes, two or three times a week: closed-book recall, diagrams from memory</td><td>No road time at all, so rain and festival traffic do not matter</td></tr>
      <tr><td>Physics</td><td>Home</td><td>About 90 minutes, once or twice a week: stuck questions, one concept rebuilt, timed numericals</td><td>Worth the trip; choose a tutor from your zone</td></tr>
      <tr><td>Chemistry</td><td>Mixed</td><td>Physical numericals at home; inorganic and organic recall online</td><td>Only the part that needs watching costs travel</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Physics is often the section that holds a NEET score down. Our <a href="{{ url('/physics-home-tutor/neet') }}">NEET
    physics tutor</a> page shows a session minute by minute, and the post on
    <a href="{{ url('/blog/-neet-physics-highyield') }}">high-yield NEET physics chapters</a> helps set the order.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gne-week">Fitting the tutor around the evening batch</h2>
  <p>
    Coaching runs through the evening in Chandmari and along GS Road, so the tutor needs the hours the batch leaves free. A
    workable pattern:
  </p>
  <ul>
    <li><strong>Physics at home</strong> on a fixed weekday without coaching, after school and before the GS Road evening rush, or on a weekend morning.</li>
    <li><strong>Biology online</strong> late on batch days, on the chapter covered that evening.</li>
    <li><strong>A full paper mock</strong> at home on a weekend morning, on paper with a separate answer sheet, then a review.</li>
    <li><strong>Rainy evenings, Bihu, Durga Puja and stadium events:</strong> the home session moves online, agreed in advance as the standing back-up.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">NEET coaching or a home tutor</a> guide,
    written for another city, explains the division of work: the batch sets the pace and the tests, the tutor clears what
    is stuck and reviews each mock.
  </p>
  <p>
    Some families, particularly in the far south or on the north bank, decide the daily trip to a batch costs too much
    time and prepare with tutors alone. That can work, but the family then has to supply what the batch would have: a
    chapter plan written from the NMC syllabus at the start of the year, a separate series of full mocks taken on paper,
    and fixed study hours that do not slide. The tutor's job grows to include first teaching, not only clearing doubts, so
    expect more sessions a week. After each mock, ask the tutor to record wrong answers, blanks and time used for every
    subject; over a few weeks those numbers show whether content, speed or guessing needs the next month's attention.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gne-areas">Six Guwahati localities: tutors, routes and tips</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How NEET tutors reach six Guwahati localities</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Route for the tutor</th><th scope="col">Tip for the family</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $gneA('zoo-road', 'Zoo Road') !!}</td><td>From Chandmari or Ganeshguri, at either end of the road</td><td>Apartment buildings keep a visitor register; give the guard the tutor's name before the demo</td></tr>
      <tr><td>{!! $gneA('bhangagarh', 'Bhangagarh') !!}</td><td>Along GS Road, central for tutors from most zones</td><td>The market and the steady daytime visitor traffic slow the main road; pick a quieter hour</td></tr>
      <tr><td>{!! $gneA('pan-bazar', 'Pan Bazar') !!}</td><td>By bus or train; one of the easiest parts of the city to reach</td><td>Name the nearest tank, ghat or shop and the floor; early morning, later evening or weekend slots</td></tr>
      <tr><td>{!! $gneA('rukminigaon', 'Rukminigaon') !!}</td><td>City bus along GS Road, then a short walk or auto</td><td>Say how far you are from GS Road; share the building name and flat number</td></tr>
      <tr><td>{!! $gneA('khanapara', 'Khanapara') !!}</td><td>Along GS Road or the highway; Narangi is an alternative rail point</td><td>Allow for regional traffic; in large complexes give tower, flat and gate</td></tr>
      <tr><td>{!! $gneA('maligaon', 'Maligaon') !!}</td><td>Kamakhya Junction or a city bus towards Adabari Tiniali</td><td>Name a precise pick-up point; go online during the Durga Puja weeks</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The zone guides add housing and timing notes:
    <a href="{{ url('/city/guwahati/zone/old-city-riverfront') }}">Old City and Riverfront</a>,
    <a href="{{ url('/city/guwahati/zone/chandmari-zoo-road') }}">Chandmari and Zoo Road</a>,
    <a href="{{ url('/city/guwahati/zone/gs-road-dispur') }}">GS Road and Dispur</a>,
    <a href="{{ url('/city/guwahati/zone/beltola-khanapara') }}">Beltola and Khanapara</a> and
    <a href="{{ url('/city/guwahati/zone/maligaon-jalukbari-north-guwahati') }}">Maligaon, Jalukbari and North Guwahati</a>.
    For a North Guwahati home, ask for a physics tutor who lives on the north bank and take biology online. Every locality is
    listed on the <a href="{{ url('/city/guwahati') }}">Guwahati page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gne-boards">State board, CBSE or ISC: adding NEET to the school course</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What each school course means for NEET in Guwahati</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">What it gives</th><th scope="col">What the tutor adds</th></tr>
    </thead>
    <tbody>
      <tr><td>Assam state board, higher secondary</td><td>The board's own textbooks and written style; many schools teach in Assamese</td><td>NCERT reading mapped to the NMC units, timed MCQs, and school details only from the board's notices</td></tr>
      <tr><td>CBSE</td><td>NCERT as the school text</td><td>Closed-book recall and speed; written board answers before pre-boards</td></tr>
      <tr><td>ISC</td><td>Detailed written science and project work</td><td>NCERT wording alongside the school books; fast objective practice</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The state's secondary and higher secondary boards, long known as SEBA and AHSEC, have been brought together under one
    state school education board, so notices may carry the new name. If your child studies science in Assamese, check the
    language options in the current NEET bulletin early, choose the booklet, and practise biology terms in that language
    from Class 11. Our Guwahati <a href="{{ url('/biology-home-tutor-guwahati') }}">biology</a>,
    <a href="{{ url('/physics-home-tutor-guwahati') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-guwahati') }}">chemistry</a> pages go into each board.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gne-year">Pacing biology revision through a Guwahati year</h2>
  <p>
    Ninety biology questions over ten units mean the danger is forgetting older chapters while new ones arrive. Tie the
    revision passes to the calendar, including the breaks:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Biology revision through the year (illustrative)</caption>
    <thead>
      <tr><th scope="col">Months</th><th scope="col">Biology work</th><th scope="col">Local note</th></tr>
    </thead>
    <tbody>
      <tr><td>April and May</td><td>First reading of new chapters; recall habit set</td><td>Bohag Bihu in mid-April is a natural pause; restart the checks straight after</td></tr>
      <tr><td>June to September</td><td>Second passes with timed MCQs</td><td>Rainy months: keep biology online so wet evenings cost nothing</td></tr>
      <tr><td>October and November</td><td>Mixed-unit sets across both years</td><td>Durga Puja and the festive weeks: lighter new work, steady recall</td></tr>
      <tr><td>December onwards</td><td>Fast NCERT re-reads, full paper mocks, board answers</td><td>Pre-boards and boards; wrong mock answers traced to the exact NCERT line</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The reading method itself is in our <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NCERT-first biology guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gne-stages">Class 11, Class 12 and a repeat year</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Class 11</h3>
  <p>
    Five biology units come from this year's book, and physics mechanics carries into most of what follows. Start the
    online recall checks in April, settle a physics tutor from your zone before the rains, and keep a glossary in the
    exam language.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Class 12</h3>
  <p>
    New chapters, Class 11 revision and the board in one year. Keep the revision passes on schedule, keep physics timed,
    and plan written-answer weeks before pre-boards, whatever the board.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>A repeat year</h3>
  <p>
    The 2026 bulletin had a minimum age of 17 and no upper limit; confirm in the current one. Begin with last year's
    mocks: the subject that lost most, and whether knowledge, speed or guessing was to blame. Daytime home sessions avoid
    batch hours and the GS Road rush.
  </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gne-demo">What a good NEET demo shows</h2>
  <ul>
    <li>A biology tutor tests a chapter your child has just read and finds gaps within minutes, including diagram labels.</li>
    <li>A physics tutor asks what was tried on a stuck batch question, then guides rather than solves.</li>
    <li>The tutor knows the current pattern and how negative marking should shape the attempt.</li>
    <li>They know your board's paper, state board, CBSE or ISC, for this class.</li>
    <li>They can keep a fixed slot, with an agreed online fallback for wet and festival evenings.</li>
  </ul>
  <p>
    If not, we arrange the next demo; switching is free. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo checklist for parents</a> lists more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gne-fees">NEET tutor fees in Guwahati and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own fee and you see it before the demo. A home physics tutor plus online biology checks usually costs
    much less each month than three full home tutors. See the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-guwahati') }}">home tuition fees in Guwahati</a>.
  </p>
  <p>
    Send the class, board, exam language, the NEET subjects needing help, batch timings and your locality with a landmark.
    We send two or three matched tutors and you book a <a href="{{ url('/demo-class') }}">free demo class</a>. Tutors who
    join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. More reading:
    <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">important NEET chemistry chapters</a> and the
    <a href="{{ url('/blog/guwahati-tuition-guide') }}">Guwahati tuition guide</a>. For engineering, see the
    <a href="{{ url('/jee-home-tutor-guwahati') }}">JEE home tutor in Guwahati</a> page; teachers can see
    <a href="{{ url('/tuition-jobs/guwahati') }}">Guwahati tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
