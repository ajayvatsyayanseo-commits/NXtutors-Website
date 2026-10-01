{{--
  Mumbai page for JEE home tutors (maths, physics, chemistry). The exam itself is
  covered on the national hub (/jee-home-tutor); this page is about running JEE
  tuition across Mumbai, Thane and Navi Mumbai: junior college plus coaching, the
  rail lines tutors travel on, home versus online by subject, and Class 11, Class 12
  and repeat-year plans for HSC, CBSE and ISC students.

  Exam facts (brief recap, reworded) from the NTA JEE (Main) 2026 Information
  Bulletin (jeemain.nta.nic.in: Paper 1 computer-based, maths/physics/chemistry,
  75 questions, 300 marks, 3 hours, +4/-1, two sessions, ties broken by maths
  first; no age limit, Class XII passed in the two previous years accepted) and the
  JEE (Advanced) 2026 Information Brochure (jeeadv.ac.in: two compulsory 3-hour
  papers, at most two attempts in consecutive years). MHT CET is named only because
  the Mumbai city hub names it (State CET Cell); no pattern or dates given.
  Local detail only from database/seo-content/areas/mumbai-research.json,
  mumbai-zone-guides.json, database/seo-content/zones/mumbai.json and the Mumbai
  city hub view. No schools, colleges, coaching institutes or societies named.
  Area links render only for active Mumbai areas. Fee wording is the approved sentence.
  FAQs render from faqs/jee-home-tutor-mumbai.php.
--}}
@php
  $jmbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jmbA = function (string $slug, string $label) use ($jmbSlugs) {
      return in_array($slug, $jmbSlugs, true)
          ? '<a href="' . e(url('/city/mumbai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="jmbGuideTitle">
  <h2 id="jmbGuideTitle">JEE home tutor in Mumbai: junior college, coaching and the local train, in one week</h2>

  <p class="nx-guide__lede">
    A Mumbai JEE aspirant often runs three timetables at once: junior college or senior school, a coaching batch that
    may be two stations away, and the trains that link them. A home tutor only helps if their slot survives that week,
    including the monsoon. This page is about making that happen across Mumbai, Thane and Navi Mumbai: where a tutor
    fits around coaching, which line a good maths, physics or chemistry tutor is likely to live on, when online works
    better, and how plans differ for an HSC student, a CBSE or ISC student, and a student taking a repeat year. The
    exam in full, with the syllabus and the choice between one tutor and three, is on our national
    <a href="{{ url('/jee-home-tutor') }}">JEE home tutor</a> page.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#jmb-exams">The entrance tests</a> ·
    <a href="#jmb-week">Fitting around coaching</a> ·
    <a href="#jmb-lines">Lines and zones</a> ·
    <a href="#jmb-mode">Home or online, by subject</a> ·
    <a href="#jmb-plans">Class 11, 12 and repeat year</a> ·
    <a href="#jmb-demo">The demo</a> ·
    <a href="#jmb-fees">Fees and starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jmb-exams">Which entrance tests a Mumbai science student usually weighs</h2>
  <p>
    JEE (Main) is set by the National Testing Agency. In the 2026 bulletin, Paper 1 was a three-hour test on a
    computer with 75 questions, 25 each in mathematics, physics and chemistry, for 300 marks; a right answer earned
    four and a wrong one cost a mark. It ran in two sessions, and students who did well enough could go on to
    JEE (Advanced), which the IITs conduct as two compulsory papers of three hours each on one day.
  </p>
  <p>
    Many Maharashtra students also sit the state's own entrance test, the MHT CET, conducted by the State CET Cell.
    We do not describe its pattern here; read the CET Cell's official notice for the current year. For JEE, read the
    current bulletin on jeemain.nta.nic.in and the brochure on jeeadv.ac.in before you plan around any detail, because
    both are reissued every year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmb-week">Where a tutor fits when coaching already takes the evenings</h2>
  <p>
    Coaching normally gets first claim on the week, and school or junior college takes the mornings. A tutor's job
    is the work coaching cannot do in a batch: the questions left unsolved on the sheet, the errors from the last test,
    and the chapter the student never quite understood. That work needs a regular slot, and in Mumbai the slot is set
    as much by the trains and the roads as by the student.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Slots that usually hold for a Mumbai JEE student in coaching</caption>
    <thead>
      <tr><th scope="col">When</th><th scope="col">What to use it for</th><th scope="col">Mumbai reason</th></tr>
    </thead>
    <tbody>
      <tr><td>Non-coaching weekday, late afternoon</td><td>Main home session, 90 minutes</td><td>Ahead of the office crowds at the big interchanges and on the link roads</td></tr>
      <tr><td>Coaching day, after the batch ends</td><td>Online doubt session, 30 to 45 minutes</td><td>No second journey after a long day; the doubts are still fresh</td></tr>
      <tr><td>Weekend morning</td><td>Test review or a long problem session</td><td>Trains are less crowded and roads near business districts are quieter</td></tr>
      <tr><td>Heavy-rain day in the monsoon</td><td>The planned session, moved online</td><td>Agreed in advance, so the week is not lost</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The city hub's advice on the monsoon applies twice over to JEE students, whose weekly rhythm matters more than any
    single lesson: settle the online fallback with the tutor in the first week, not in July.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmb-lines">Which line your tutor lives on, zone by zone</h2>
  <p>
    Senior maths, physics and chemistry specialists are fewer than school-level tutors, so the useful question is
    which tutors can reach you on one line, at your hour. We check that before distance. Locality pages for all of
    these are on the <a href="{{ url('/city/mumbai') }}">Mumbai home tuition</a> page.
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/mumbai/zone/worli-dadar-central-mumbai') }}">Worli, Dadar and Central Mumbai</a>.</strong> Dadar sits on both main lines and Matunga has a station on all three, so a tutor for {!! $jmbA('dadar', 'Dadar') !!} can come from the western or the central suburbs. Avoid starting a session as office crowds pass through Dadar station.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/andheri-jogeshwari') }}">Andheri and Jogeshwari</a>.</strong> The metro lines meet here. In {!! $jmbA('andheri-east', 'Andheri East') !!}, Line 3 at Marol Naka and Line 1 at Chakala bring tutors in without the road; the Andheri-Kurla Road at office hours is the thing to avoid.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/kandivali-borivali-dahisar') }}">Kandivali, Borivali and Dahisar</a>.</strong> Borivali is a terminus for slow and fast trains, which widens the pool for {!! $jmbA('borivali-east', 'Borivali East') !!}; Line 7 runs along the highway on that side. Link Road and the highway slow down at school closing time.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/chembur-ghatkopar-powai') }}">Chembur, Ghatkopar and Powai</a>.</strong> {!! $jmbA('powai', 'Powai') !!} has no station; tutors come to Kanjurmarg and take an auto, or drive along the link road, which is among the busiest at office hours. Ghatkopar is the end of Line 1, so a tutor from Andheri can cross directly.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/thane') }}">Thane</a>.</strong> The Ghodbunder Road townships, {!! $jmbA('kolshet-road', 'Kolshet Road') !!} among them, have no station yet. A tutor from your own stretch of the corridor keeps a weekly slot far better than one crossing from the station side; weekend or mid-afternoon times are steadier.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/navi-mumbai') }}">Navi Mumbai</a>.</strong> In {!! $jmbA('vashi', 'Vashi') !!} and the other nodes, the Harbour and Trans-Harbour lines and the Navi Mumbai metro decide who can come. Look first at tutors from your own or the next node, and plan evening sessions a little after the office rush.</li>
  </ul>
  <p>
    For more on each side of the city, see our guides to the
    <a href="{{ url('/blog/mumbai-central-suburbs-tuition-guide') }}">central suburbs</a>, the
    <a href="{{ url('/blog/mumbai-western-suburbs-tuition-guide') }}">western suburbs</a> and
    <a href="{{ url('/blog/thane-and-navi-mumbai-tuition-guide') }}">Thane and Navi Mumbai</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmb-mode">Home or online: the three subjects are not the same</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How Mumbai families often split JEE tuition by subject</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Usually at home</th><th scope="col">Usually online</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics</td><td>Long problem sessions where the tutor watches each line of working, especially calculus and coordinate geometry in Class 11</td><td>Quick checks of a few stuck problems from the coaching sheet</td></tr>
      <tr><td>Physics</td><td>Rebuilding a concept with diagrams, then timed numericals under supervision</td><td>Reviewing a test question by question with a shared screen</td></tr>
      <tr><td>Chemistry</td><td>Physical chemistry numericals and organic mechanisms written out by hand</td><td>Inorganic recall and short reaction quizzes</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A common Mumbai arrangement is one home session a week with the same tutor taking a second, shorter session online,
    which saves a second trip through the evening rush. If the specialist your child needs lives on another line,
    online-first with an occasional weekend visit is better than settling for whoever is closest. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor versus online tutor</a> piece weighs it up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmb-plans">Class 11, Class 12 and a repeat year, from an HSC, CBSE or ISC start</h2>
  <p>
    Many Mumbai students move to a junior college after Class 10 and study for the HSC, taught from the Maharashtra
    State Board's own textbooks. The NTA syllabus sits close to the NCERT books instead, so the chapter order and the
    depth of some topics will not match term for term. That is not a reason to worry; it is a reason to map it. In the
    first month, a tutor should list the NTA units against the junior college's term plan and mark which ones need
    extra time because the school reaches them late or treats them lightly.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What the tutor concentrates on at each stage</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">HSC student</th><th scope="col">CBSE or ISC student</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 11</td><td>Unit map against the state textbook; foundations (motion, basic calculus, mole concept) secured early; practicals and journal kept up</td><td>NCERT exercises finished, then problem depth; ISC students also keep long-form board answers going</td></tr>
      <tr><td>Class 12</td><td>Board papers in the state's own style before the HSC, entrance practice protected after it; MHT CET preparation if the family has chosen it</td><td>Full-length JEE papers well before the first session, board-style writing before pre-boards</td></tr>
      <tr><td>Repeat year</td><td colspan="2">Start from last year's test papers, rebuild the chapters that cost the most marks, then many full papers. Check the current bulletin and brochure on eligibility and attempts first.</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Mumbai runs on more than one calendar: CBSE's session opens in April, many State Board schools reopen in June, and
    junior colleges keep their own term dates. Tell us which applies so the tutor's plan starts in step with it. For
    board-side help in the same subjects, see our <a href="{{ url('/maths-home-tutor-mumbai') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-mumbai') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-mumbai') }}">chemistry</a> home tutor pages for Mumbai, and the subject-level
    detail on the <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> page and our
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths</a> and
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE chemistry</a> guides.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmb-demo">What to check in a Mumbai JEE demo</h2>
  <p>
    You receive two or three matched tutors and the first class with your chosen one is a free demo. Make it count:
  </p>
  <ul>
    <li><strong>Bring real material.</strong> Three questions your child could not solve from the latest coaching sheet or test, not a textbook chapter.</li>
    <li><strong>Watch the student work.</strong> A good JEE tutor makes the student attempt first and then corrects the reasoning, rather than solving everything on the board.</li>
    <li><strong>Ask about the board.</strong> Can they say how the HSC, CBSE or ISC paper differs from JEE on today's topic?</li>
    <li><strong>Agree the logistics.</strong> Which station they come from, the online fallback for rain days, and a fixed weekly slot around the coaching days.</li>
    <li><strong>Ask for a written plan.</strong> Next month's chapters, how often, and how progress will be measured.</li>
  </ul>
  <p>
    Before the demo, give the tutor's name to the watchman or visitor app and share the wing and flat number. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more questions to ask. If it
    is not the right fit, the next tutor is lined up and switching later is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jmb-fees">JEE tutor fees in Mumbai and how to start</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee and you see it before the demo. In Mumbai the journey matters too: a tutor crossing
    from one line to another at peak hours may quote more for home than for online. The
    <a href="{{ url('/blog/home-tuition-fees-mumbai') }}">Mumbai home tuition fees</a> guide and our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> explain the rest.
  </p>
  <p>
    To start, send the class and board, the target (JEE Main, Main and Advanced, or JEE alongside MHT CET), the subjects,
    coaching days, your locality and nearest station, and the times that work. Book a
    <a href="{{ url('/demo-class') }}">free demo class</a> or browse <a href="{{ url('/tutors') }}">tutor profiles</a>.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live.
    If medicine is the goal instead, read the <a href="{{ url('/neet-home-tutor-mumbai') }}">NEET home tutor in Mumbai</a>
    page; teachers looking for students can see <a href="{{ url('/tuition-jobs/mumbai') }}">Mumbai tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
