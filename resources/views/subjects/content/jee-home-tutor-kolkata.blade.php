{{--
  Kolkata page for JEE home tutors. The exam as a whole is covered on the
  national hub (/jee-home-tutor); this page is about running JEE tuition in a
  Kolkata week: coaching days, the Metro lines, the ISC / CBSE / Higher
  Secondary mix, and plans for Class 11, Class 12 and a repeat year.

  Exam facts only as stated on the national page, which cites (fetched 1 Oct 2026):
  - NTA, JEE (Main) 2026 Information Bulletin (jeemain.nta.nic.in): Paper 1 CBT,
    maths/physics/chemistry, 20 MCQ + 5 numerical per subject, 75 questions,
    300 marks, +4/-1 in both sections, 3 hours, two sessions (January and April
    2026), better NTA score counts; ties broken by maths, then physics, then
    chemistry; Class XII passed in 2024 or 2025 or appearing in 2026.
  - JEE (Advanced) 2026 Information Brochure (jeeadv.ac.in): two compulsory
    three-hour papers, each with physics, chemistry and maths; at most two
    attempts in consecutive years.
  West Bengal boards (WBBSE, WBCHSE) described generally only, as on the Kolkata
  city hub. Local detail only from database/seo-content/areas/kolkata-research.json,
  kolkata-zone-guides.json, zones/kolkata.json and the /city/kolkata hub. No
  schools, colleges, coaching institutes or people named. Area links render only
  for active Kolkata areas.
--}}
@php
  $kjeSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $kjeA = function (string $slug, string $label) use ($kjeSlugs) {
      return in_array($slug, $kjeSlugs, true)
          ? '<a href="' . e(url('/city/kolkata/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="kjeGuideTitle">
  <h2 id="kjeGuideTitle">JEE home tutor in Kolkata: coaching days, Metro lines and a board that may not be CBSE</h2>

  <p class="nx-guide__lede">
    A Kolkata JEE aspirant rarely has a simple week. There is school, often an ISC or Higher Secondary course rather
    than CBSE, a coaching batch on three or four evenings, a commute that may cross the river, and the Puja holidays
    breaking the rhythm every autumn. A home tutor is only useful if the sessions survive all of that. This page is about
    making them survive: which slots work on which side of the city, which subject to keep at home and which to move
    online, how the state and CISCE syllabuses line up with the NTA list, and what a Class 11, Class 12 or repeat-year plan
    looks like here. For the full exam pattern and the one-tutor-or-three question, read the national
    <a href="{{ url('/jee-home-tutor') }}">JEE home tutor</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kje-exams">The exams, briefly</a> ·
    <a href="#kje-week">Around coaching</a> ·
    <a href="#kje-where">Six neighbourhoods</a> ·
    <a href="#kje-mode">Home or online, by subject</a> ·
    <a href="#kje-boards">ISC, CBSE, Higher Secondary</a> ·
    <a href="#kje-stages">Class 11, 12, repeat year</a> ·
    <a href="#kje-demo">The demo</a> ·
    <a href="#kje-fees">Fees and starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kje-exams">What are JEE Main and JEE Advanced, in two minutes?</h2>
  <p>
    The National Testing Agency runs JEE (Main). In its 2026 bulletin, Paper 1 was a three-hour computer-based test with
    25 questions in each of mathematics, physics and chemistry: 20 multiple-choice and 5 where the answer is typed as a
    number. That makes 75 questions and 300 marks, with four marks for a right answer and one deducted for a wrong one in
    both kinds of question. There were two sessions, in January and April, and the better score counted. JEE (Advanced),
    set by the IITs for candidates who qualify through Main, had two compulsory three-hour papers, each with all three
    subjects, and a limit of two attempts in consecutive years.
  </p>
  <p>
    One detail matters for planning: when totals tie, the NTA looks at the maths score first. Each year's rules are
    published afresh, so read the current bulletin on jeemain.nta.nic.in and the brochure on jeeadv.ac.in before you fix
    anything around a date.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kje-week">When can a tutor fit into a Kolkata coaching week?</h2>
  <p>
    Coaching usually claims the late afternoons and evenings. The tutor gets what is left, and in Kolkata the leftover
    hours are shaped by office peaks on the main roads, college hours around crossings such as the 8B junction in
    Jadavpur, and the festive weeks. Fix the coaching timetable first, then choose the tutor slot, then keep it the same
    every week.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Slots that tend to hold for Kolkata JEE students</caption>
    <thead>
      <tr><th scope="col">Slot</th><th scope="col">Use it for</th><th scope="col">Why it works in Kolkata</th></tr>
    </thead>
    <tbody>
      <tr><td>Non-coaching weekday, straight after school</td><td>The main 90-minute teaching session at home</td><td>Ahead of the evening rush on Diamond Harbour Road, the bypass and VIP Road</td></tr>
      <tr><td>Coaching days, after the batch ends</td><td>A 30 to 45 minute online doubt session</td><td>No travel for anyone; the day's sheet is still fresh</td></tr>
      <tr><td>Saturday or Sunday morning</td><td>Full mock paper, then analysis with the tutor</td><td>The calmest roads of the week, especially in the south</td></tr>
      <tr><td>Durga Puja and the weeks before it</td><td>Online sessions only, shorter and more frequent</td><td>Crowded lanes in North Kolkata and around the Gariahat crossing make home visits unreliable</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The comparison in our guide to <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">JEE coaching
    or a home tutor</a> was written for another city, but the logic carries over: count door-to-door time at the real
    class hour, and give the tutor a defined job (the doubt list and the test review) rather than a second lecture.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kje-where">Which tutors can reach you? Six neighbourhoods, six different answers</h2>
  <p>
    Distance on a map means little here. What matters is whether a tutor can ride one Metro line to a stop near you, or
    has to drive across the city at peak hour. Six neighbourhoods from six of our Kolkata zones show the range.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How JEE tutors usually reach six Kolkata neighbourhoods</caption>
    <thead>
      <tr><th scope="col">Neighbourhood</th><th scope="col">How tutors arrive</th><th scope="col">What to plan for</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $kjeA('bhowanipore', 'Bhowanipore') !!}</td><td>Blue Line to Netaji Bhavan or Jatin Das Park, so tutors from the north and the south both reach it</td><td>Wide choice of specialists; name the floor and bell in older houses</td></tr>
      <tr><td>{!! $kjeA('jadavpur', 'Jadavpur') !!}</td><td>Sealdah South trains or the Blue Line further west, then a short ride</td><td>Avoid college and office hours at the 8B crossing; weekend mornings are calmest</td></tr>
      <tr><td>{!! $kjeA('behala', 'Behala') !!}</td><td>Purple Line stops along Diamond Harbour Road, then an auto</td><td>Tell the tutor which stop; a driving tutor should aim for the afternoon</td></tr>
      <tr><td>{!! $kjeA('salt-lake-sector-1', 'Salt Lake Sector I') !!}</td><td>Green Line through the township, or by road from the bypass</td><td>Give block letter and house number; office traffic heads to Sector V</td></tr>
      <tr><td>{!! $kjeA('new-town-action-area-2', 'New Town Action Area II') !!}</td><td>Bus, app cab or two-wheeler; the Orange Line stations here are still being built</td><td>Few local physics and maths specialists; leave the tutor's name at the complex desk</td></tr>
      <tr><td>{!! $kjeA('shibpur', 'Shibpur') !!}, Howrah</td><td>Green Line under the river to Howrah, or a tutor already on the west bank</td><td>An exact lane landmark in the old core; allow time on the Kona Expressway</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Each zone has its own guide with housing, travel and timing notes:
    <a href="{{ url('/city/kolkata/zone/ballygunge-gariahat-alipore') }}">Ballygunge, Gariahat and Alipore</a>,
    <a href="{{ url('/city/kolkata/zone/tollygunge-jadavpur-garia') }}">Tollygunge, Jadavpur and Garia</a>,
    <a href="{{ url('/city/kolkata/zone/behala-new-alipore') }}">Behala and New Alipore</a>,
    <a href="{{ url('/city/kolkata/zone/kasba-em-bypass-south') }}">Kasba and EM Bypass South</a>,
    <a href="{{ url('/city/kolkata/zone/salt-lake') }}">Salt Lake</a>,
    <a href="{{ url('/city/kolkata/zone/new-town-rajarhat') }}">New Town and Rajarhat</a>,
    <a href="{{ url('/city/kolkata/zone/lake-town-dum-dum-baguiati') }}">Lake Town, Dum Dum and Baguiati</a>,
    <a href="{{ url('/city/kolkata/zone/north-kolkata') }}">North Kolkata</a> and
    <a href="{{ url('/city/kolkata/zone/howrah') }}">Howrah</a>. The <a href="{{ url('/city/kolkata') }}">Kolkata tuition page</a>
    lists every locality we cover.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kje-mode">Which JEE subject should be at home, and which online?</h2>
  <p>
    The three subjects do not need the same format, and splitting them sensibly saves both travel and money.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A practical home and online split for JEE in Kolkata</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Suggested format</th><th scope="col">Reason</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics</td><td>Home, once or twice a week</td><td>Long written working; the tutor needs to see every line of algebra and calculus</td></tr>
      <tr><td>Physics</td><td>Home for new concepts, online for doubt clearing</td><td>Diagrams and free-body sketches are easier side by side; quick doubts are not worth a trip</td></tr>
      <tr><td>Chemistry</td><td>Mostly online</td><td>Inorganic recall checks and organic reaction maps work well on a shared screen; physical numericals can move home if they lag</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Where the Metro does not yet reach, as in parts of New Town and Baguiati, the balance tips further online. A strong
    online specialist beats a nearby generalist for Advanced-level problems. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> comparison lays out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kje-boards">ISC, CBSE or Higher Secondary: where is the gap to the JEE syllabus?</h2>
  <p>
    The NTA syllabus follows NCERT content closely. A CBSE student therefore starts with the closest match, while ISC and
    West Bengal board students need a map of what their school covers, when, and how deeply.
  </p>
  <ul>
    <li><strong>ISC students.</strong> CISCE has a long following in Kolkata, and the overlap with JEE is large, but chapter order differs and ISC rewards long written answers. A tutor should list which NTA units the school will reach in which term, so that coaching and school are not teaching the same chapter months apart.</li>
    <li><strong>Higher Secondary students.</strong> The West Bengal Council of Higher Secondary Education sets its own syllabus, textbooks and question style. We describe it only in general terms; ask the tutor to work from the council's latest notices and to add objective, timed practice that a written state paper does not demand.</li>
    <li><strong>Language.</strong> State-board schools teach in Bengali, English and other media. If your child has learnt science in Bengali, agree early which language they will sit the paper in, check the language list in the current bulletin, and ask for a tutor who can move between both sets of technical terms.</li>
    <li><strong>CBSE students.</strong> The match is closest, but the gap is often in writing: board answers need full steps after months of multiple-choice practice. Plan a switch to written answers before pre-boards.</li>
  </ul>
  <p>
    Our Kolkata <a href="{{ url('/maths-home-tutor-kolkata') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-kolkata') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-kolkata') }}">chemistry</a> pages cover the board side of each subject.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kje-stages">Plans for Class 11, Class 12 and a repeat year in Kolkata</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What the tutor concentrates on at each stage</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Main job</th><th scope="col">Kolkata-specific point</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 11</td><td>Secure mechanics, basic calculus, mole concept and atomic structure; start an error log</td><td>Use the April-to-June stretch, before the monsoon and Puja breaks, to set the weekly routine</td></tr>
      <tr><td>Class 12</td><td>Finish new chapters, keep Class 11 alive, move to full timed papers before the January session</td><td>ISC and Higher Secondary students need written-answer weeks before pre-boards; protect them in the plan</td></tr>
      <tr><td>Repeat year</td><td>Diagnose last year's tests, rebuild the costliest chapters, sit many full papers</td><td>Daytime is free, so weekday home sessions at off-peak hours open up tutors who would not travel in the evening</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For a repeat year, check eligibility before anything else. The 2026 bulletin had no age limit for Main and accepted
    students who passed Class XII in the two previous years, while Advanced allowed two attempts in consecutive years.
    The rules are restated each year. The national page has subject-wise detail for
    <a href="{{ url('/maths-home-tutor/class-11') }}">Class 11 maths</a> and the
    <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> session format.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kje-demo">What should a Kolkata family check in the JEE demo?</h2>
  <ol>
    <li><strong>Bring three unsolved questions</strong> from the coaching sheet or the last test. Watch whether the tutor asks what was tried before explaining.</li>
    <li><strong>See who holds the pen.</strong> The student should do most of the solving, with hints.</li>
    <li><strong>Ask about the board.</strong> Can the tutor say how ISC, CBSE or the Higher Secondary course orders the chapters this year?</li>
    <li><strong>Ask about negative marking</strong> in the numerical questions. The answer should change how the student guesses.</li>
    <li><strong>Ask about the route.</strong> Which line or road, which stop, and will the same slot work in the Puja weeks?</li>
    <li><strong>Ask for a month's plan</strong>: chapters, sessions a week, and how progress will be measured.</li>
  </ol>
  <p>
    If the demo does not convince you, we arrange the next tutor on the shortlist; switching is free. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more, and you can browse
    <a href="{{ url('/tutors') }}">tutor profiles</a> yourself.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kje-fees">JEE tutor fees in Kolkata and how to start</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own fee and you see each one before the demo. A tutor crossing the river at peak hour may price that
    in. The <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our post on
    <a href="{{ url('/blog/home-tuition-fees-kolkata') }}">home tuition fees in Kolkata</a> give the detail.
  </p>
  <p>
    Send the class, board, target (Main, or Main and Advanced), subjects, coaching days and your neighbourhood with its
    block, para or tower. We send two or three matched tutors, and you book a
    <a href="{{ url('/demo-class') }}">free demo class</a>. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. Students aiming at medicine
    can read the <a href="{{ url('/neet-home-tutor-kolkata') }}">NEET home tutor in Kolkata</a> page, and teachers can see open
    requests on <a href="{{ url('/tuition-jobs/kolkata') }}">Kolkata tuition jobs</a>. Our topic plans for
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">physics</a> and
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">chemistry</a> are worth sharing with the tutor.
  </p>
  </section>

  </div>
</article>
