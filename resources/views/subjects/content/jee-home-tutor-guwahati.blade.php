{{--
  Guwahati page for JEE home tutors. The exam as a whole is on the national hub
  (/jee-home-tutor); this page is about JEE tuition in Guwahati: evening
  coaching around Chandmari and GS Road, one long road spine and the river, the
  five zones, state board / CBSE / CISCE students and Assamese medium, and
  Class 11, Class 12 and repeat-year plans.

  Exam facts only as stated on the national page, which cites (fetched 1 Oct 2026):
  - NTA, JEE (Main) 2026 Information Bulletin (jeemain.nta.nic.in): Paper 1 CBT,
    3 hours; maths, physics, chemistry, each 20 MCQ + 5 numerical; 75 questions,
    300 marks; +4/-1 in both sections; two sessions (January and April 2026);
    13 languages; Class XII passed in 2024 or 2025 or appearing in 2026; used
    for NITs, IIITs, CFTIs and state institutions and as the eligibility test
    for JEE (Advanced).
  - JEE (Advanced) 2026 Information Brochure (jeeadv.ac.in): two compulsory
    three-hour papers; English and Hindi; at most two attempts in consecutive years.
  Assam's state board (formerly SEBA and AHSEC, now brought together under one
  board) described generally only, as on the Guwahati hub. Evening coaching in
  Chandmari and on the GS Road side is stated on the hub and in the zone guides;
  no institute is named. Local detail only from
  database/seo-content/areas/guwahati-research.json, guwahati-zone-guides.json,
  zones/guwahati.json and /city/guwahati. No schools, colleges or people named.
  Area links render only for active Guwahati areas.
--}}
@php
  $gjeSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gjeA = function (string $slug, string $label) use ($gjeSlugs) {
      return in_array($slug, $gjeSlugs, true)
          ? '<a href="' . e(url('/city/guwahati/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="gjeGuideTitle">
  <h2 id="gjeGuideTitle">JEE home tutor in Guwahati: working around evening coaching, GS Road and the Brahmaputra</h2>

  <p class="nx-guide__lede">
    In Guwahati, Chandmari and the GS Road side are full of evening coaching, and many JEE aspirants spend their late
    afternoons in a batch. A home tutor earns a place beside that batch by doing what it cannot: going through one
    student's unsolved sheets and wrong test answers, lifting the weakest subject, and keeping the Class 12 board in view.
    Getting the tutor there is the other challenge. There is no metro yet, GS Road carries much of the city's traffic, and
    the river divides the north bank from the rest. This page sets out the slots that work, which tutors can reach which
    localities, how to split the subjects between home and online, what state board and Assamese-medium students should
    plan for, and how the plan changes with each year. The exam in detail is on the national
    <a href="{{ url('/jee-home-tutor') }}">JEE home tutor</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gje-exams">The exams</a> ·
    <a href="#gje-evenings">Around evening coaching</a> ·
    <a href="#gje-areas">Six localities</a> ·
    <a href="#gje-mode">Home or online</a> ·
    <a href="#gje-example">An example</a> ·
    <a href="#gje-boards">State board, CBSE, ISC</a> ·
    <a href="#gje-stages">Stages</a> ·
    <a href="#gje-demo">Demo</a> ·
    <a href="#gje-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gje-exams">What JEE Main and Advanced involve</h2>
  <p>
    JEE (Main) is the NTA's exam for B.E. and B.Tech. admission to the NITs, IIITs, other centrally funded institutions and
    participating state institutions, and it doubles as the gateway to JEE (Advanced). The 2026 bulletin set Paper 1 as a
    three-hour computer-based test: 25 questions in each of mathematics, physics and chemistry, of which 20 are multiple
    choice and 5 need a numerical answer. With 75 questions and 300 marks, a correct answer scores four and a wrong one
    costs one, in both question types. Candidates could sit two sessions and keep the better score. JEE (Advanced), set
    by the IITs, had two compulsory papers of three hours each, in English and Hindi, with at most two attempts in
    consecutive years. Before planning, read the current bulletin on jeemain.nta.nic.in and the brochure on jeeadv.ac.in.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gje-evenings">Where does a tutor fit around Guwahati's evening coaching?</h2>
  <p>
    Batches in Chandmari and along GS Road run through the evening. Office hours around the capital complex in Dispur and
    the evening rush on GS Road add to the pressure, and festivals and events at Chandmari, Maligaon, Beltola Bazar and the
    Ulubari stadium slow the roads near them. Agree the tutor slot once, around the batch, and keep it every week.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Slots that tend to work for Guwahati JEE students</caption>
    <thead>
      <tr><th scope="col">Slot</th><th scope="col">What to do in it</th><th scope="col">Why it suits Guwahati</th></tr>
    </thead>
    <tbody>
      <tr><td>A fixed non-batch weekday, after school</td><td>The main home session, about 90 minutes</td><td>Clear of the batch and, with care, of the GS Road evening rush</td></tr>
      <tr><td>Batch days, late evening</td><td>A 30 to 45 minute online doubt session</td><td>No tutor travel after dark; the day's questions are fresh</td></tr>
      <tr><td>Weekend morning</td><td>A full timed paper, then a review</td><td>Quieter roads; enough time to analyse every question</td></tr>
      <tr><td>Bihu, Durga Puja, heavy rain, event evenings</td><td>Online, agreed in advance</td><td>The week keeps its session even when the roads do not cooperate</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Our <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">JEE coaching or a home tutor</a> guide
    was written for another city, but the principle holds: the batch sets the pace, the tutor owns the doubt list and the
    test analysis.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gje-areas">Six Guwahati localities and how tutors reach them</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Where JEE tutors come from, locality by locality</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">How tutors get there</th><th scope="col">What to arrange</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $gjeA('chandmari', 'Chandmari') !!}</td><td>A tutor already teaching in a neighbouring Zoo Road locality can often add a class here</td><td>A weekday slot that does not clash with the batch; say where a two-wheeler can park</td></tr>
      <tr><td>{!! $gjeA('lachit-nagar', 'Lachit Nagar') !!}</td><td>From GS Road or the Zoo Road side, both close</td><td>Narrow lanes: name a parking spot and a landmark</td></tr>
      <tr><td>{!! $gjeA('ulubari', 'Ulubari') !!}</td><td>Easy by bus or train from most of the city</td><td>Ask for a subject specialist rather than whoever is closest; avoid stadium event evenings</td></tr>
      <tr><td>{!! $gjeA('ganeshguri', 'Ganeshguri') !!}</td><td>Buses from every direction pass through, so tutors from the centre and the south can come</td><td>Avoid office opening and closing times; share the building name and flat number</td></tr>
      <tr><td>{!! $gjeA('beltola', 'Beltola') !!}</td><td>City bus or auto along GS Road</td><td>Keep sessions away from Beltola Bazar market days</td></tr>
      <tr><td>{!! $gjeA('jalukbari', 'Jalukbari') !!}</td><td>By the western corridor; a busy junction where the roads divide</td><td>Plan around junction traffic; a large student population means some local tutors</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Zone guides: <a href="{{ url('/city/guwahati/zone/old-city-riverfront') }}">Old City and Riverfront</a>,
    <a href="{{ url('/city/guwahati/zone/chandmari-zoo-road') }}">Chandmari and Zoo Road</a>,
    <a href="{{ url('/city/guwahati/zone/gs-road-dispur') }}">GS Road and Dispur</a>,
    <a href="{{ url('/city/guwahati/zone/beltola-khanapara') }}">Beltola and Khanapara</a> and
    <a href="{{ url('/city/guwahati/zone/maligaon-jalukbari-north-guwahati') }}">Maligaon, Jalukbari and North Guwahati</a>.
    All localities are on the <a href="{{ url('/city/guwahati') }}">Guwahati page</a>, and our
    <a href="{{ url('/blog/guwahati-tuition-guide') }}">Guwahati tuition guide</a> walks through all five zones.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gje-mode">Home or online, subject by subject</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Splitting JEE subjects between home and online in Guwahati</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Default</th><th scope="col">Reason</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics</td><td>Home</td><td>Long working on paper; the tutor should watch each line</td></tr>
      <tr><td>Physics</td><td>Home for concepts, online for test reviews</td><td>Problem set-up needs the tutor beside the student; a review does not</td></tr>
      <tr><td>Chemistry</td><td>Mostly online</td><td>Recall and reaction maps work on screen; bring physical chemistry home if it lags</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Homes close to GS Road can draw on tutors all along it, while lanes further off may need someone who lives nearby.
    In North Guwahati, three bridges now cross the river, but a daily crossing is still hard to sustain: ask for a tutor
    who lives on the north bank and keep online sessions for specialist subjects. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a> comparison has the general trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gje-example">An example: a Class 12 student in the far south</h2>
  <p>
    Take an illustrative student living near Six Mile, with a batch on the Chandmari side on Monday, Wednesday and Friday
    evenings, solid in chemistry but losing marks in maths and physics. The batch already takes three evenings of travel
    up and down GS Road; a tutor travelling the same road on the other evenings would double the strain. A plan that fits:
  </p>
  <ul>
    <li><strong>Saturday morning, at home, two hours:</strong> maths with a tutor from the Beltola and Khanapara side, starting from the week's unsolved batch questions.</li>
    <li><strong>Tuesday and Thursday, online, 45 minutes each:</strong> physics with a specialist who may live anywhere in India, on the latest test's wrong and skipped questions.</li>
    <li><strong>Sunday morning:</strong> a full timed paper at home, reviewed online in the evening.</li>
  </ul>
  <p>
    One home visit a week, on quiet roads, and no session depends on the GS Road rush. A student living in Chandmari itself
    would need almost the opposite plan, since tutors there are close and short home sessions are easy to add.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gje-boards">State board, CBSE or ISC: preparing for the NTA syllabus</h2>
  <p>
    The JEE syllabus follows NCERT content. Guwahati families are spread across three systems, and each needs a different
    kind of bridge to the exam.
  </p>
  <ul>
    <li><strong>Assam's state board.</strong> The Class 12 higher secondary course was long run by AHSEC, and the state has since brought it together with the secondary board under one state school education board, so notices may carry the new name. We describe it only in general terms. The tutor should take school details from the board's official notices, map its chapters to the NTA units, and add the objective and numerical practice its papers do not demand.</li>
    <li><strong>Assamese medium.</strong> If science has been learnt in Assamese, decide early which language the student will use in the exam, check the list in the current bulletin, and ask for a tutor who can teach technical terms in both languages.</li>
    <li><strong>CBSE.</strong> The closest content match. The usual gap is the move back to full written board answers after months of objective practice.</li>
    <li><strong>ISC.</strong> Wide syllabus and long answers; volume is the hurdle. Map the school's term-by-term order against the NTA units so coaching and school do not drift apart.</li>
  </ul>
  <p>
    Board detail is on our Guwahati <a href="{{ url('/maths-home-tutor-guwahati') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-guwahati') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-guwahati') }}">chemistry</a> pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gje-stages">Class 11, Class 12 and a repeat year</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The tutor's focus by stage, with a Guwahati planning note</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Focus</th><th scope="col">Planning note</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 11</td><td>Mechanics, basic calculus, mole concept and atomic structure; an error log from the start</td><td>Set the weekly routine in April and May, before the rainy months make travel harder</td></tr>
      <tr><td>Class 12</td><td>New chapters, Class 11 revision, full papers before the first session</td><td>Plan around the Durga Puja weeks; reserve written-answer practice before pre-boards</td></tr>
      <tr><td>Repeat year</td><td>Diagnose last year's tests, rebuild costly chapters, many full papers</td><td>Daytime home sessions avoid both the batch hours and the GS Road rush</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Repeat-year eligibility is set each year: in 2026 Main accepted students who passed Class XII in the two previous years,
    and Advanced allowed two attempts in consecutive years. Subject depth: the
    <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> page and our plans for
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">maths</a>, <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">physics</a>
    and <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">chemistry</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gje-demo">How to judge a JEE tutor at the demo</h2>
  <ol>
    <li>The tutor asks what your child tried on an unsolved batch question before explaining.</li>
    <li>Your child does most of the solving, and is shown a shorter second method.</li>
    <li>The tutor can explain how negative marking on numerical questions should change the approach.</li>
    <li>They know how your board, state, CBSE or ISC, sets this year's paper.</li>
    <li>They name the road or bus they will use, and a plan for festival and rainy evenings.</li>
  </ol>
  <p>
    If it does not fit, we arrange the next demo; switching is free. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> helps you prepare.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gje-fees">JEE tutor fees in Guwahati and how to start</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own fee and you see it before the demo; one coming from the far end of GS Road or across the river may
    allow for the trip. See the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-guwahati') }}">home tuition fees in Guwahati</a>.
  </p>
  <p>
    Send the class, board, target, subjects, batch timings, and your locality with the nearest tiniali or chariali. We send
    two or three matched tutors and you book a <a href="{{ url('/demo-class') }}">free demo class</a>. Tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>; browse <a href="{{ url('/tutors') }}">tutor profiles</a>
    too. For medical entrance, see the <a href="{{ url('/neet-home-tutor-guwahati') }}">NEET home tutor in Guwahati</a> page;
    teachers can find requests on <a href="{{ url('/tuition-jobs/guwahati') }}">Guwahati tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
