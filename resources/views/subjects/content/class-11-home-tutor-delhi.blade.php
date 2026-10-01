{{--
  Long-form guide for the "Class 11 home tutor Delhi" page (the first year of
  senior secondary, after the stream choice). Authors: Ajay Vatsyayan (IB, IGCSE
  and ISC maths; Class 11-12 maths) with the NXTutors Academic Team. Role
  statements only. No schools, colleges or coaching institutes named. Kept
  distinct from class-11-home-tutor-gurgaon and class-11-home-tutor-mumbai.

  Official sources (as verified on the Gurgaon Class 11 page and the Delhi
  board hubs, 1 Oct 2026):
  - CBSE Senior Secondary Curriculum 2026-27, Part 2
    (cbseacademic.nic.in/web_material/CurriculumMain27/SecPart2/Curriculum_SecP2_2026-27.pdf):
    XI-XII composite course; take in XI only subjects to continue in XII;
    minimum five subjects; Mathematics (041) and Applied Mathematics (241) not
    together; maths 80 + 20; physics, chemistry and biology 70 theory + 30
    practical; accountancy, business studies and economics 80 + 20; the Board
    examines Class XII on the entire Class XII syllabus.
  - CISCE ISC Regulations (cisce.org/wp-content/uploads/2025/04/2.-ISC-Regulations_25.pdf):
    English plus three to five electives, not more than six subjects; no change
    after 15 September of the Class XI registration year; no Class XII subject
    not studied in Class XI; promotion to Class XII needs 35% in four subjects
    including English and 75% attendance; pass mark 35%.
  - IB Diploma (ibo.org/programmes/diploma-programme/): ages 16 to 19; six
    subject groups and the core (TOK, CAS, extended essay); three or four
    subjects at higher level; extended essay 4,000 words; CAS for at least
    18 months.
  - Cambridge International AS & A Level (cambridgeinternational.org): AS
    typically one year, A Level typically two; A Level graded A* to E.
  - JEE (Main) and NEET (UG) conducted by the NTA (jeemain.nta.nic.in,
    neet.nta.nic.in); JEE (Main) 2026 bulletin: Class 12 performance condition
    75% aggregate (65% SC, ST and PwD) or top 20 percentile of the board; NEET
    (UG) biology 90 of 180 questions (as cited on neet-home-tutor-delhi).
    CUET (UG) by NTA (cuet.nta.nic.in).
  No Delhi state board is described; board mix from the Delhi city hub view.
  Local detail only from the hub view, database/seo-content/zones/delhi.json,
  database/seo-content/areas/delhi-research.json and delhi-zone-guides.json.
  Fee range is the approved sentence. FAQs: faqs/class-11-home-tutor-delhi.php.

  Area links render only when that Delhi area page exists and is active.
--}}
@php
  $d11Slugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $d11A = function (string $slug, string $label) use ($d11Slugs) {
      return in_array($slug, $d11Slugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="d11GuideTitle">
  <h2 id="d11GuideTitle">Class 11 home tutors in Delhi: a new stream, harder subjects and the entrance tests ahead</h2>

  <p class="nx-guide__lede">
    The jump from Class 10 to Class 11 is the steepest in school. A student who scored well in the board exam can
    find, within weeks, that physics numericals, organic chemistry, calculus or double-entry accounts do not yield to
    the old routine. Coaching for JEE, NEET or CUET can crowd the year further, and in Delhi so can the metro trip
    between school, classes and home. Ajay Vatsyayan, who writes on IB, IGCSE and ISC maths and senior-school maths
    for NXTutors, and our Academic Team explain what Class 11 looks like on each board, how the three entrance routes
    compare, where tuition helps in each stream, and how to plan the first term so the year does not slip away.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#d11-jump">The jump</a> ·
    <a href="#d11-boards">Boards</a> ·
    <a href="#d11-tests">Entrance tests</a> ·
    <a href="#d11-streams">Streams</a> ·
    <a href="#d11-maths">Which maths</a> ·
    <a href="#d11-term">First term</a> ·
    <a href="#d11-zones">Reaching you</a> ·
    <a href="#d11-mode">Home or online</a> ·
    <a href="#d11-demo">The demo</a> ·
    <a href="#d11-fees">Fees</a> ·
    <a href="#d11-where">Where we match</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="d11-jump">Why is Class 11 harder than Class 10?</h2>
  <p>
    It is not only more content. Each subject changes character:
  </p>
  <ul>
    <li><strong>Physics</strong> moves from describing to deriving; vectors and calculus appear inside mechanics within the first few chapters.</li>
    <li><strong>Chemistry</strong> splits into physical, organic and inorganic, each needing a different way of studying.</li>
    <li><strong>Maths</strong> brings sets, functions, trigonometry and limits, and expects proofs and reasoning, not just steps.</li>
    <li><strong>Accountancy and economics</strong> are new to most commerce students and build week on week.</li>
  </ul>
  <p>
    Class 11 is also examined by the school on most boards, so it can feel less urgent than Class 10. That is a trap:
    Class 11 topics are part of the JEE and NEET syllabuses and the base for every Class 12 chapter. The national
    <a href="{{ url('/maths-home-tutor/class-11') }}">Class 11 maths</a> page lists the chapters in order.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d11-boards">Class 11, board by board</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 11 on the boards Delhi students follow</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Structure</th><th scope="col">Rules and marks worth knowing</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE</td><td>Classes 11 and 12 form one course; at least five subjects; the school examines Class 11</td><td>Maths 80 + 20; physics, chemistry and biology 70 theory + 30 practical; accountancy, business studies and economics 80 + 20; Mathematics and Applied Mathematics cannot be taken together</td></tr>
      <tr><td>ISC (CISCE)</td><td>Compulsory English with three, four or five electives; six subjects at most</td><td>No change of subjects after 15 September of Class 11; promotion to Class 12 needs 35% in four subjects including English and 75% attendance</td></tr>
      <tr><td>IB Diploma</td><td>Six subject groups plus the core: Theory of Knowledge, CAS and the extended essay</td><td>Three or four subjects at Higher Level; a 4,000-word extended essay; CAS runs for at least 18 months</td></tr>
      <tr><td>Cambridge AS &amp; A Level</td><td>AS typically in one year, A Level over two</td><td>A Level graded A* to E</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    CBSE is the board most Delhi students sit, ISC has a sizeable following and IB and Cambridge a smaller group, as our
    <a href="{{ url('/city/delhi') }}">Delhi tutors page</a> notes. See our <a href="{{ url('/cbse-home-tutor-delhi') }}">CBSE</a>,
    <a href="{{ url('/icse-home-tutor-delhi') }}">ICSE and ISC</a> and <a href="{{ url('/ib-tutor-delhi') }}">IB</a>
    pages for Delhi.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d11-tests">How do JEE, NEET and CUET differ for a Class 11 student?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Three entrance routes, as described by the NTA</caption>
    <thead>
      <tr><th scope="col">Test</th><th scope="col">For</th><th scope="col">What it means in Class 11</th></tr>
    </thead>
    <tbody>
      <tr><td>JEE (Main)</td><td>Engineering; conducted by the NTA in two sessions, with JEE (Advanced) after it for those who qualify</td><td>Class 11 topics are in the syllabus; the 2026 bulletin also sets a Class 12 condition of 75% aggregate (65% for SC, ST and PwD) or the top 20 percentile of the board</td></tr>
      <tr><td>NEET (UG)</td><td>Medicine; conducted by the NTA once a year</td><td>Biology is 90 of the 180 questions, so NCERT biology from Class 11 needs close reading from day one</td></tr>
      <tr><td>CUET (UG)</td><td>Admission to central and participating universities; conducted by the NTA</td><td>Domain subjects follow the Class 12 syllabus, so Class 11 is about building the base</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Take dates and eligibility only from that year's official bulletin. Our <a href="{{ url('/jee-home-tutor-delhi') }}">JEE
    home tutors in Delhi</a> and <a href="{{ url('/neet-home-tutor-delhi') }}">NEET home tutors in Delhi</a> pages explain
    how home tuition fits around coaching.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d11-streams">Stream by stream: where tuition helps</h2>
  <ul>
    <li><strong>PCM:</strong> maths and physics are where most students first fall behind; chemistry follows, usually in organic. See <a href="{{ url('/maths-home-tutor-delhi') }}">maths</a>, <a href="{{ url('/physics-home-tutor-delhi') }}">physics</a> and <a href="{{ url('/chemistry-home-tutor-delhi') }}">chemistry</a> tutors in Delhi.</li>
    <li><strong>PCB:</strong> biology needs reading and recall, physics needs problem practice, and the two compete for time. See <a href="{{ url('/biology-home-tutor-delhi') }}">biology tutors in Delhi</a>.</li>
    <li><strong>Commerce:</strong> accountancy is the usual pressure point, with economics and either maths or applied maths alongside. See <a href="{{ url('/commerce-home-tutor-delhi') }}">commerce home tutors in Delhi</a>.</li>
    <li><strong>Humanities:</strong> tutoring is usually for one subject, such as economics or English, or for writing practice.</li>
  </ul>
  <p>
    From Class 11 a specialist for each difficult subject beats one all-rounder. A student with two weak subjects is
    usually better served by two tutors for fewer hours each than by one tutor for many. Our guide to
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a> helps if the stream itself is
    still in doubt.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d11-maths">Mathematics or Applied Mathematics?</h2>
  <p>
    CBSE offers two maths courses at senior secondary level, Mathematics (041) and Applied Mathematics (241), and a
    student may take only one of them. The choice is made at the start of Class 11 and is hard to undo, because the
    two years form a single course. Mathematics is the usual choice for science students, and JEE tests mathematics in depth; Applied
    Mathematics is often chosen in commerce and humanities. Before deciding, check two things: which course the
    university programmes your child is considering ask for, and which one the school actually offers in the stream.
  </p>
  <p>
    A tutor can help in either case, but should know which one the student is on: the chapters, the style of
    question and the weight given to application differ. Ask at the demo, and expect a tutor who teaches Applied
    Mathematics to use the student's own textbook rather than adapting Mathematics material.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d11-term">The first ten weeks, planned</h2>
  <ol>
    <li><strong>Weeks 1 to 4:</strong> repair the Class 10 base the new subjects stand on, such as algebra, trigonometric ratios, mole concept or basic accounting terms.</li>
    <li><strong>Weeks 5 to 10:</strong> keep pace with school, with one tutor session a week per hard subject and a written problem set between sessions.</li>
    <li><strong>Before the first unit test:</strong> a timed practice paper and a list of weak chapters.</li>
    <li><strong>Through the term:</strong> keep practical files and project work current; in CBSE the practical share in science is 30 marks.</li>
    <li><strong>If there is coaching:</strong> the home tutor works on school-paper style and on the backlog from coaching sheets, not on repeating the same lecture.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d11-zones">Reaching Class 11 students across Delhi</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Routes and slots for senior-secondary sessions in six Delhi zones</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Route</th><th scope="col">Slot advice</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/delhi/zone/kalkaji-cr-park-sarita-vihar') }}">Kalkaji, CR Park &amp; Sarita Vihar</a></td><td>Nehru Enclave on the Magenta Line or Nehru Place on the Violet Line</td><td>Office-district roads are busy on weekday evenings; weekends are easier by car</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/dwarka') }}">Dwarka</a></td><td>Blue Line sector stations; Sector 13 is a walk from many societies</td><td>Arrange standing gate permission for a regular tutor</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/janakpuri-rajouri-garden-punjabi-bagh') }}">Janakpuri, Rajouri Garden &amp; Punjabi Bagh</a></td><td>Subhash Nagar or Tagore Garden on the Blue Line</td><td>Najafgarh Road is heavy in the evening; metro-friendly slots run better</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/karol-bagh-patel-nagar-rajinder-nagar') }}">Karol Bagh, Patel Nagar &amp; Rajinder Nagar</a></td><td>Rajendra Place or Karol Bagh on the Blue Line</td><td>Weekdays beat shopping-heavy weekends; send the exact floor</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/pitampura-model-town-north-campus') }}">Pitampura, Model Town &amp; North Campus</a></td><td>GTB Nagar on the Yellow Line</td><td>Student crowds fill main roads in the evening; give the easiest lane in</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/mayur-vihar-patparganj-ip-extension') }}">Mayur Vihar, Patparganj &amp; IP Extension</a></td><td>Pink Line to Mandawali–West Vinod Nagar or IP Extension</td><td>Evening market hours are busiest; an earlier slot is safer</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Our <a href="{{ url('/blog/rohini-and-north-delhi-tuition-guide') }}">Rohini and North Delhi</a> and
    <a href="{{ url('/blog/dwarka-and-west-delhi-tuition-guide') }}">Dwarka and West Delhi</a> guides have more on travel.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d11-mode">Home or online tuition for Class 11?</h2>
  <p>
    Senior students adapt to online lessons more easily than younger ones, and online opens up specialists for ISC,
    IB Higher Level or JEE-level problem solving who may live far from your colony. Home still suits a student who
    needs structure, or who loses focus at a screen after a full day of school and coaching. A practical Delhi pattern
    is one home session a week for the hardest subject and online sessions for the rest, so nobody spends the evening
    crossing the Yamuna or changing lines at rush hour.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d11-demo">Judging a Class 11 tutor at the free demo</h2>
  <p>
    You pay nothing for the first lesson with a shortlisted tutor. Ask the student, not just the parent, to judge it, and look for:
  </p>
  <ul>
    <li>a question or two to find out what the student remembers from Class 10 before starting;</li>
    <li>clear use of the board's syllabus, and for JEE or NEET aspirants, an honest view of how the tutor fits with coaching;</li>
    <li>the student solving problems during the hour, not watching a lecture;</li>
    <li>a written plan for the term, with tests.</li>
  </ul>
  <p>
    If it does not work, the next tutor on your shortlist can take a demo, and switching later costs nothing. Every tutor
    who joins completes an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before the profile is published.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d11-fees">Class 11 tuition fees in Delhi</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    For Class 11, the subject, the board, any entrance focus, the tutor's experience and travel at your hour set the
    quote. You see every fee on the shortlist before the demo. For budgeting, read our <a href="{{ url('/pricing-guide') }}">pricing guide</a>
    or the <a href="{{ url('/blog/home-tuition-fees-delhi') }}">Delhi tuition fees article</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d11-where">Where we match Class 11 tutors in Delhi</h2>
  <p>
    {!! $d11A('nehru-enclave', 'Nehru Enclave') !!}, beside Nehru Place, is mostly DDA and cooperative apartment blocks
    with gate registers; its Magenta Line station opened in May 2018. {!! $d11A('dwarka-sector-13', 'Dwarka Sector 13') !!}
    has its own Blue Line station, and many societies are within walking distance of it.
    {!! $d11A('subhash-nagar', 'Subhash Nagar') !!} sits on Najafgarh Road with a Blue Line station right on it.
  </p>
  <p>
    {!! $d11A('new-rajinder-nagar', 'New Rajinder Nagar') !!}, between Shankar Road and the Ridge, has quieter streets and
    parks than the coaching lanes across the road. {!! $d11A('gtb-nagar', 'GTB Nagar') !!}, beside North Campus, is
    within walking distance of its Yellow Line station for most homes. {!! $d11A('mandawali', 'Mandawali') !!} is dense
    lanes of builder floors near its Pink Line station.
  </p>
  <p>
    Coming from Class 10? See <a href="{{ url('/class-10-home-tutor-delhi') }}">Class 10 tutors in Delhi</a>; for the
    final year, <a href="{{ url('/class-12-home-tutor-delhi') }}">Class 12 tutors in Delhi</a>. Tell us the stream,
    board, subjects, coaching days, your colony or sector and the hours that suit you; two or three matched tutors
    come back with their fees. <a href="{{ url('/demo-class') }}">Ask for the free demo</a>, look through <a href="{{ url('/tutors') }}">tutor
    profiles</a> or open the <a href="{{ url('/city/delhi') }}">Delhi home tutors page</a>. Senior-school teachers can
    find students through <a href="{{ url('/tuition-jobs/delhi') }}">Delhi tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
