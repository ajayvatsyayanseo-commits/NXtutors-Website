{{--
  Lucknow page for JEE home tutors. Byline: NXTutors Academic Team.
  The exam lives on the national hub (/jee-home-tutor); this page covers JEE
  tuition in Lucknow: the Gomti and the Red Line as the city's two dividing
  facts, five zones, a tutor's role beside coaching, UP Board students and the
  medium, one tutor or several, stage plans, an example week, the demo and fees.

  Exam facts reworded from the national page, which cites (fetched 1 Oct 2026):
  - NTA JEE (Main) 2026 Information Bulletin (jeemain.nta.nic.in): Paper 1 CBT,
    3 hours, maths/physics/chemistry, 20 MCQ + 5 numerical each, 75 questions,
    300 marks, +4/-1; two sessions (January and April 2026), better score counts;
    no age limit; Class XII passed in 2024 or 2025 or appearing in 2026; ties by
    maths, then physics, then chemistry.
  - NTA JEE (Main) 2026 syllabus: 14 / 20 / 20 units; in physics the first ten
    units are Class 11 topics and the next nine Class 12.
  - JEE (Advanced) 2026 Information Brochure (jeeadv.ac.in): two compulsory
    3-hour papers; at most two attempts in two consecutive years.
  Local detail only from lucknow-research.json, lucknow-zone-guides.json,
  zones/lucknow.json and the city hub (UP Board: much of the syllabus follows
  NCERT, own question paper, Hindi or English medium). The hub does not call
  Lucknow a coaching hub, and this page does not either. No institutes, schools,
  colleges or people named. Area links render only for active Lucknow areas.
  FAQs render from faqs/jee-home-tutor-lucknow.php.
--}}
@php
  $lkAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $lkA = function (string $slug, string $label) use ($lkAreaSlugs) {
      return in_array($slug, $lkAreaSlugs, true)
          ? '<a href="' . e(url('/city/lucknow/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="jlkGuideTitle">
  <h2 id="jlkGuideTitle">JEE home tutors in Lucknow: maths, physics and chemistry on either side of the Gomti</h2>

  <p class="nx-guide__lede">
    Two facts shape JEE tuition in Lucknow more than any other: the river and the metro. The Gomti divides the
    Trans-Gomti colonies from the old centre and the Kanpur Road side, and the Red Line runs from Munshi Pulia through
    Hazratganj and Charbagh to the airport, while large parts of the city, from Gomti Nagar Extension to Sushant Golf
    City, have no station at all. Where your home sits against those two lines decides which maths, physics and
    chemistry tutors can reach you every week. This page sets out how Lucknow families arrange JEE support around
    school and coaching, zone by zone, with notes for UP Board students and plans for Class 11, Class 12 and a repeat
    year. The exam in full is on our national <a href="{{ url('/jee-home-tutor') }}">JEE home tutor</a> guide. Written
    by the NXTutors Academic Team.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#jlk-exam">The exam</a> ·
    <a href="#jlk-role">Beside coaching</a> ·
    <a href="#jlk-map">River and metro</a> ·
    <a href="#jlk-zones">Zones</a> ·
    <a href="#jlk-mode">Home or online</a> ·
    <a href="#jlk-up">UP Board and medium</a> ·
    <a href="#jlk-stages">By stage</a> ·
    <a href="#jlk-week">Example week</a> ·
    <a href="#jlk-demo">Demo</a> ·
    <a href="#jlk-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jlk-exam">The exams behind the plan</h2>
  <p>
    The NTA's 2026 bulletin sets JEE (Main) Paper 1 as a three-hour test on computer with 75 questions across
    mathematics, physics and chemistry, 300 marks in all. In each subject, twenty questions offer four options and five
    ask for a number to be entered; in both kinds a wrong answer costs one mark. The year had two sessions, January and
    April, and the higher score stands. If totals tie, mathematics is compared first. JEE (Advanced), run by the IITs,
    has two compulsory three-hour papers and allows at most two attempts in consecutive years. Plans should rest on the
    current documents at jeemain.nta.nic.in and jeeadv.ac.in.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jlk-role">What a home tutor adds next to coaching</h2>
  <p>
    Where a Lucknow JEE student is also in a coaching programme, the tutor should work beside it rather than in
    competition with it. Three uses of the hours pay off most:
  </p>
  <ul>
    <li><strong>Clearing the week's backlog.</strong> Coaching problems left unsolved and test questions that went wrong, taken one by one from the step where the student got stuck.</li>
    <li><strong>One revision for two exams.</strong> The Class 11 and 12 NCERT content sits under both the board papers and the entrance tests, so one revision cycle can serve both.</li>
    <li><strong>The weakest subject first.</strong> Extra hours on the subject pulling the total down do more than equal time for all three.</li>
  </ul>
  <p>
    A student preparing without coaching needs more from the tutor: a written plan from the NTA syllabus, full-length
    timed papers arranged separately, and a fixed routine. Our <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching
    or home tutor</a> article, written for Gurugram, compares the routes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jlk-map">The river, the Red Line and who can reach you</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How a Lucknow JEE family's location shapes the tutor search</caption>
    <thead>
      <tr><th scope="col">Where you live</th><th scope="col">Who can usually reach you weekly</th><th scope="col">What to plan for</th></tr>
    </thead>
    <tbody>
      <tr><td>Near a Red Line station (Indira Nagar, Hazratganj, Lalbagh, Alambagh, Krishna Nagar)</td><td>Tutors from anywhere along the line, riding in and walking or taking an auto</td><td>The widest choice of specialists in the city</td></tr>
      <tr><td>North of the river, away from the stations (Aliganj, Vikas Nagar, Jankipuram)</td><td>Tutors who live north of the Gomti</td><td>Ring Road and Sitapur Road slow cross-town trips in the evening</td></tr>
      <tr><td>Gomti Nagar Extension and Chinhat</td><td>Tutors from the same sectors or older Gomti Nagar</td><td>Shaheed Path and Faizabad Road busy at office hours</td></tr>
      <tr><td>Shaheed Path townships (Sushant Golf City, Vrindavan Yojana)</td><td>Mostly tutors living in or near the townships</td><td>Online for a specialist who lives across the city</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jlk-zones">Zone notes for JEE tuition</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3><a href="{{ url('/city/lucknow/zone/gomti-nagar-indira-nagar-chinhat') }}">Gomti Nagar, Indira Nagar &amp; Chinhat</a></h3>
      <p>
        In {!! $lkA('gomti-nagar-extension', 'Gomti Nagar Extension') !!}, towers and authority flats are still filling
        up and there is no station. Ask the gate for a standing pass in the first week so a regular tutor is not stopped
        at every visit, and favour a tutor from the same sectors for early-evening slots.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3><a href="{{ url('/city/lucknow/zone/mahanagar-aliganj-jankipuram') }}">Mahanagar, Aliganj &amp; Jankipuram</a></h3>
      <p>
        {!! $lkA('kapoorthala', 'Kapoorthala') !!} is close to IT College station, so a tutor can arrive by metro and
        skip the market-road parking. In {!! $lkA('vikas-nagar', 'Vikas Nagar') !!}, give the sector number, and choose a
        tutor living in Aliganj, Jankipuram or Kapoorthala rather than one crossing the Ring Road each evening.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3><a href="{{ url('/city/lucknow/zone/hazratganj-lalbagh-aminabad') }}">Hazratganj, Lalbagh &amp; Aminabad</a></h3>
      <p>
        Around {!! $lkA('hazratganj', 'Hazratganj') !!}, most homes are flats above or behind shops, often without a
        lift or guard. Send the floor number and a landmark; a tutor who rides the Red Line is the steadiest choice
        where car parking is scarce.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3><a href="{{ url('/city/lucknow/zone/alambagh-ashiyana-rajajipuram') }}">Alambagh, Ashiyana &amp; Rajajipuram</a></h3>
      <p>
        {!! $lkA('krishna-nagar', 'Krishna Nagar') !!} has its own station, which also serves LDA Colony and Ashiyana,
        so the tutor pool here is wider than in most of the city. Kanpur Road is heavy at office hours in both
        directions: set the lesson to avoid it rather than cross it.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3><a href="{{ url('/city/lucknow/zone/sushant-golf-city-vrindavan-yojana-telibagh') }}">Sushant Golf City, Vrindavan Yojana &amp; Telibagh</a></h3>
      <p>
        In {!! $lkA('sushant-golf-city', 'Sushant Golf City') !!}, gated towers expect visitor registration and often an
        entry pass for a regular teacher. The nearest station is Transport Nagar, so JEE specialists from Gomti Nagar or
        Aliganj usually teach online, with a local tutor for weekly home work.
      </p>
    </div>
  </div>
  <p>
    The <a href="{{ url('/city/lucknow') }}">Lucknow page</a> lists every locality, and the
    <a href="{{ url('/blog/central-and-south-lucknow-tuition-guide') }}">central and south Lucknow guide</a> covers travel in more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jlk-mode">Home or online for each subject</h2>
  <p>
    In mathematics and physics, a tutor at the table sees each line of working, which is where most JEE marks are
    lost: a sign error in integration, a missing force in a diagram. Those sessions earn the journey. Chemistry splits:
    physical chemistry numericals at home, inorganic and organic recall online in short bursts. Test analysis runs well
    on a shared screen. A common Lucknow pattern is one long home session a week from a tutor on your side of the river
    and one or two online slots from a specialist wherever they live. Since JEE is a computer-based test, regular
    on-screen practice is useful in any mode.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jlk-up">UP Board students, the medium and the JEE syllabus</h2>
  <p>
    Lucknow students come to JEE from CBSE, from CISCE schools taking the ISC, and from UP Board schools, with smaller
    numbers in international programmes. Much of the UP Board syllabus follows NCERT, but the question paper is the
    board's own, and schools may teach in Hindi or English. JEE follows neither a board nor a medium; the NTA publishes
    its own unit list for each subject.
  </p>
  <ul>
    <li><strong>Gap check in Class 11.</strong> The tutor lays the school's chapter list beside the NTA units and marks anything taught late or lightly, so JEE practice does not run ahead of school.</li>
    <li><strong>Hindi-medium students.</strong> Ask for a tutor who can explain in Hindi and move the student towards whichever language they will use in the exam, giving terms in both until that is settled. Check the bulletin for the languages offered.</li>
    <li><strong>ISC students.</strong> The overlap is large but chapter order differs; plan JEE tests around what school has covered.</li>
    <li><strong>Board pattern.</strong> Take UP Board rules and dates only from the board's official site.</li>
  </ul>
  <p>
    For school-side help, see our Lucknow <a href="{{ url('/maths-home-tutor-lucknow') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-lucknow') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-lucknow') }}">chemistry</a> tutor pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jlk-stages">Class 11, Class 12 and a repeat year</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A Lucknow JEE plan by stage</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">What matters most</th><th scope="col">Typical tutor time</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 11</td><td>Foundations that Class 12 leans on: vectors, rotation basics, limits and derivatives, mole concept; an error log from month one</td><td>Two to four sessions a week across subjects</td></tr>
      <tr><td>Class 12</td><td>New chapters, Class 11 revision, full timed papers before the January session, board writing before pre-boards</td><td>Three to five</td></tr>
      <tr><td>Repeat year</td><td>Diagnosis of last year's papers, rebuilds of the costliest chapters, many full papers</td><td>Three to six, often in the daytime</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    In physics, the NTA list puts the first ten units in Class 11 and the next nine in Class 12, which is why gaps in
    Class 11 show up all through the second year. For a repeat year, the 2026 bulletin had no age limit for Main and
    accepted the two previous years' Class XII passes, while JEE (Advanced) caps attempts at two in consecutive years.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jlk-week">An example: a Class 12 student in Aliganj</h2>
  <p>
    Illustrative only: a student living north of the river, with coaching in the centre on three evenings and a gap in
    physics. A plan that respects the Ring Road:
  </p>
  <ul>
    <li><strong>Tuesday, at home, 90 minutes before the evening rush:</strong> physics with a tutor who lives in Aliganj or Jankipuram; stuck questions first, then one concept rebuilt.</li>
    <li><strong>Thursday, online, 40 minutes after coaching:</strong> doubts from that day's sheet.</li>
    <li><strong>Saturday:</strong> a full JEE Main paper under timing.</li>
    <li><strong>Sunday, online:</strong> review of every wrong, skipped and slow question, and targets for the week.</li>
  </ul>
  <p>
    Topic support: <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics topic by topic</a>,
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths</a> and the
    <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jlk-demo">Checking a JEE tutor at the free demo</h2>
  <ol>
    <li>Bring three unsolved problems from the student's own sheet or test.</li>
    <li>Watch for a diagnosis before an explanation, and for the student doing the solving.</li>
    <li>Ask for a faster second route to one answer.</li>
    <li>Ask how negative marking on numerical-answer questions should change the attempt plan.</li>
    <li>For a UP Board student, ask about the medium and the gap list.</li>
    <li>Ask how the tutor will travel to you at that hour, and what happens on days the roads are bad.</li>
  </ol>
  <p>
    We send two or three matched tutors; the first class is free and switching later costs nothing. Tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. You can also browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jlk-fees">JEE tutor fees in Lucknow</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own fee, visible before the demo. See the <a href="{{ url('/blog/home-tuition-fees-lucknow') }}">Lucknow
    fees guide</a> and our <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  <p>
    Tell us the class, board and medium, target, subjects, coaching days and locality, then book a
    <a href="{{ url('/demo-class') }}">free demo class</a>. For medical entrance, read the
    <a href="{{ url('/neet-home-tutor-lucknow') }}">NEET home tutor in Lucknow</a> page. Teachers can see open requests
    on <a href="{{ url('/tuition-jobs/lucknow') }}">Lucknow tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
