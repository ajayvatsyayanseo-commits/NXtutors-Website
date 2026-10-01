{{--
  Long-form guide for the "Class 12 home tutor Delhi" page (CBSE first, with
  ISC, IB DP Year 2 and the JEE, NEET and CUET routes). Authors: Ajay
  Vatsyayan with the NXTutors Academic Team. Role statements only. No schools,
  colleges or coaching institutes named. Kept distinct from
  class-12-home-tutor-gurgaon and class-12-home-tutor-mumbai.

  Official sources (as cited on the verified Gurgaon Class 12 page and the
  Delhi board and exam pages, 1 Oct 2026):
  - CBSE Senior Secondary Curriculum 2026-27, Part 2 (cbseacademic.nic.in):
    Class XII board exam covers the entire Class XII syllabus; maths 80 + 20;
    physics, chemistry and biology 70 theory + 30 practical; accountancy,
    business studies and economics 80 + 20.
  - ISC Mathematics (860), cisce.org: 80-mark theory paper + 20 marks project
    work; seven compulsory units and no Section B/C for 2027 and 2028;
    calculus 35 of 80; project viva by a visiting examiner
    (icse-isc-maths-gurgaon-guide.html).
  - IB DP (ibo.org): subjects graded 1 to 7, EE and TOK up to 3 points, 45
    maximum, 24 points among the pass criteria; maths exploration 20%; new
    extended essay first assessed May 2027, up to 4,000 words with a 500-word
    reflective statement.
  - JEE (Main) 2026 bulletin (jeemain.nta.nic.in): two sessions; Paper 1 75
    questions, 300 marks; Class 12 performance condition 75% aggregate (65%
    SC/ST/PwD) or top 20 percentile of the board. JEE (Advanced) 2026
    (jeeadv.ac.in): open to the first 2,50,000 successful JEE (Main) Paper 1
    candidates; at most two attempts in two consecutive years.
  - NEET (UG) 2026 bulletin (neet.nta.nic.in): 180 questions, 180 minutes,
    720 marks, pen and paper; qualifying subjects Physics, Chemistry,
    Biology/Biotechnology and English (as cited on neet-home-tutor-delhi). CUET (UG) by NTA for Central and participating
    universities (cuet.nta.nic.in).
  No Delhi state board is described. The school-year stretches are from the
  Delhi city hub view. Local detail only from the hub view,
  database/seo-content/zones/delhi.json, database/seo-content/areas/delhi-research.json
  and delhi-zone-guides.json. Fee range is the approved sentence.
  FAQs: faqs/class-12-home-tutor-delhi.php.

  Area links render only when that Delhi area page exists and is active.
--}}
@php
  $d12Slugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $d12A = function (string $slug, string $label) use ($d12Slugs) {
      return in_array($slug, $d12Slugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="d12GuideTitle">
  <h2 id="d12GuideTitle">Class 12 home tutors in Delhi: board papers and entrance tests in one crowded year</h2>

  <p class="nx-guide__lede">
    Class 12 is the year two calendars collide. The board exam, CBSE for most Delhi students, arrives in the first
    months of the year, and so does the first JEE (Main) session; the second session, JEE (Advanced), NEET (UG) and
    CUET follow in spring. Meanwhile practical files, projects and pre-boards all want attention. Ajay Vatsyayan, who
    writes on IB, IGCSE and ISC maths and senior-school maths for NXTutors, and our Academic Team set out what the final
    year asks for on each board, why board marks still matter when an entrance test decides admission, how to lay the
    months out, and how a home tutor can work beside coaching rather than against it.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#d12-boards">Final-year boards</a> ·
    <a href="#d12-marks">Why marks matter</a> ·
    <a href="#d12-year">The year</a> ·
    <a href="#d12-spec">Specialists</a> ·
    <a href="#d12-coach">With coaching</a> ·
    <a href="#d12-last">Final weeks</a> ·
    <a href="#d12-zones">Reaching you</a> ·
    <a href="#d12-mode">Home or online</a> ·
    <a href="#d12-demo">The demo</a> ·
    <a href="#d12-fees">Fees</a> ·
    <a href="#d12-where">Where we match</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="d12-boards">What does the last school year demand on each board?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>CBSE Class 12</h3>
  <p>
    The board examines the whole Class 12 syllabus. Maths is 80 marks of theory plus 20 internal; physics, chemistry
    and biology are 70 theory plus 30 practical; accountancy, business studies and economics are 80 plus 20. Practical
    files and projects are marks in the bank, so finish them before winter. See <a href="{{ url('/cbse-home-tutor-delhi') }}">CBSE
    tutors in Delhi</a>.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ISC Class 12</h3>
  <p>
    ISC Mathematics (860) is an 80-mark theory paper plus 20 marks of project work, with a viva by a visiting
    examiner. For 2027 and 2028 the paper has seven compulsory units and no Sections B or C, and calculus carries 35
    of the 80 marks. See <a href="{{ url('/icse-home-tutor-delhi') }}">ICSE and ISC tutors in Delhi</a>.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB Diploma, Year 2</h3>
  <p>
    Subjects are scored from 1 to 7, with up to three more points from the extended essay and Theory of Knowledge
    combined, so 45 is the ceiling; 24 points is among the pass conditions. The maths exploration is worth 20%. Under the revised extended essay, examined for
    the first time in May 2027, allows up to 4,000 words plus a 500-word reflective statement. A tutor may discuss
    internal work, but must never write any of it. See <a href="{{ url('/ib-tutor-delhi') }}">IB tutors in Delhi</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d12-marks">If an entrance test decides admission, why do board marks matter?</h2>
  <p>
    Two reasons, both from official rules. The JEE (Main) 2026 bulletin sets a Class 12 condition: 75% aggregate, or
    65% for SC, ST and PwD candidates, or a place in the top 20 percentile of the board. JEE (Advanced) is open only to
    the first 2,50,000 successful JEE (Main) candidates, and allows at most two attempts in consecutive years, so a
    weak board result can close a door that a good rank opened. And NEET (UG) lists qualifying Class 12 subjects,
    physics, chemistry, biology or biotechnology and English, that must be passed, so the board paper in each one has
    to be secured as well.
  </p>
  <p>
    The practical lesson: plan board revision and entrance practice together, not one after the other. NCERT
    content underpins the board papers and a large part of JEE and NEET, so a single revision cycle can serve both.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d12-year">How does the Class 12 year fit together in Delhi?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The Class 12 year, from April to the entrance tests</caption>
    <thead>
      <tr><th scope="col">Stretch</th><th scope="col">Board work</th><th scope="col">Entrance work</th></tr>
    </thead>
    <tbody>
      <tr><td>April to June</td><td>Start Class 12 chapters early; plan practicals and projects</td><td>Revise Class 11 topics that Class 12 builds on</td></tr>
      <tr><td>July to September</td><td>Steady teaching, chapter tests, first-term exams in many schools</td><td>Weekly mixed-topic tests</td></tr>
      <tr><td>October to December</td><td>Finish the syllabus; complete files; pre-boards around the turn of the year</td><td>Full-length mock tests begin</td></tr>
      <tr><td>January to March</td><td>Board exams after a run of sample papers</td><td>The first JEE (Main) session usually lands here</td></tr>
      <tr><td>April to May</td><td>Board work is done</td><td>The second JEE (Main) session, then JEE (Advanced) and NEET (UG); IB and Cambridge candidates sit May papers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Confirm every date from the official notice for that year. CUET (UG), conducted by the NTA for central and
    participating universities, is announced in its own bulletin; our
    <a href="{{ url('/blog/cuet-preparation-2025-complete-ug-subject-strategies-syllabus-tips-pyqs-and-checklist') }}">CUET
    preparation guide</a> covers the subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d12-spec">One specialist per subject</h2>
  <p>
    By the final year each subject is deep enough to need its own expert. Class 12 chemistry alone behaves like three
    subjects: numerical physical chemistry, reaction-heavy organic and fact-dense inorganic. Physics needs both
    derivations and problem speed; maths moves through calculus, vectors, three-dimensional geometry and probability.
    A tutor who is excellent in one subject and adequate in another will cost marks in the second. Our Class 12 guides
    on <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">physics</a>,
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">organic and inorganic chemistry</a> and
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">calculus and algebra</a> show what each subject asks.
    For ISC physics, see our <a href="{{ url('/blog/isc-class-12-physics-tips') }}">ISC Class 12 physics tips</a>.
  </p>
  <p>
    Subject pages for Delhi: <a href="{{ url('/maths-home-tutor-delhi') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-delhi') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-delhi') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-delhi') }}">biology</a>, <a href="{{ url('/accountancy-home-tutor-delhi') }}">accountancy</a>
    and <a href="{{ url('/economics-home-tutor-delhi') }}">economics</a>, with
    <a href="{{ url('/commerce-home-tutor-delhi') }}">commerce tutors in Delhi</a> covering the stream as a whole.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d12-coach">Home tuition beside coaching</h2>
  <p>
    Yes, as a partner rather than a second lecturer. The useful jobs for a home tutor in a coaching year are:
  </p>
  <ul>
    <li><strong>Clearing the backlog:</strong> a weekly pass through unfinished sheets and wrong answers from coaching tests.</li>
    <li><strong>Keeping the board on track:</strong> board-style written answers, practical files and sample papers, which coaching often leaves aside.</li>
    <li><strong>Rescuing the weakest subject:</strong> concentrated hours on the subject dragging the total down.</li>
    <li><strong>Late-evening doubts:</strong> a short online session when coaching ends late and a metro ride home leaves no energy for travel.</li>
  </ul>
  <p>
    See <a href="{{ url('/jee-home-tutor-delhi') }}">JEE home tutors in Delhi</a> and
    <a href="{{ url('/neet-home-tutor-delhi') }}">NEET home tutors in Delhi</a> for how this works for each exam.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d12-last">The last eight weeks before the board exam</h2>
  <p>
    By the time the date sheet is out, new teaching should be over. The final weeks work well when the tutor's role
    narrows to three things:
  </p>
  <ol>
    <li><strong>Timed papers with strict marking.</strong> One full CBSE sample paper or past paper per subject each week, marked against the official scheme, with every lost mark traced to a cause.</li>
    <li><strong>The error log, not the textbook.</strong> Revision comes from the student's own record of mistakes, the derivations they keep forgetting and the reactions they mix up.</li>
    <li><strong>A day-by-day plan around the date sheet.</strong> The gaps between papers decide how much time each subject gets; the tutor should help set that plan once and then keep to it.</li>
  </ol>
  <p>
    Students sitting the first JEE (Main) session in the same months should keep one short daily slot of mixed
    entrance problems, so that speed does not fade while board answers take priority.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d12-zones">Getting a final-year tutor to you, zone by zone</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Routes and timing for Class 12 sessions in six Delhi zones</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Route in</th><th scope="col">Timing</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/delhi/zone/saket-malviya-nagar-hauz-khas') }}">Saket, Malviya Nagar &amp; Hauz Khas</a></td><td>Qutub Minar on the Yellow Line for Mehrauli; an e-rickshaw for the lanes</td><td>Share a landmark; old-village addresses are hard to find first time</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/vasant-kunj-vasant-vihar-palam') }}">Vasant Kunj, Vasant Vihar &amp; Palam</a></td><td>Palam on the Magenta Line</td><td>Market roads are crowded in the evening; fix a time outside the peak</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/dwarka') }}">Dwarka</a></td><td>Blue Line to Sector 21 or 8; Airport Express to Sector 25 for the southern sectors</td><td>Arrange standing gate permission; some gates confirm every visit</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/karol-bagh-patel-nagar-rajinder-nagar') }}">Karol Bagh, Patel Nagar &amp; Rajinder Nagar</a></td><td>Patel Nagar or Shadipur on the Blue Line</td><td>Patel Road is busy at the evening peak</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/pitampura-model-town-north-campus') }}">Pitampura, Model Town &amp; North Campus</a></td><td>Vishwavidyalaya on the Yellow Line or Pul Bangash on the Red Line</td><td>Afternoon slots avoid the evening market crowd</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/laxmi-nagar-preet-vihar-shahdara') }}">Laxmi Nagar, Preet Vihar &amp; Shahdara</a></td><td>Red Line to Dilshad Garden or Jhilmil</td><td>GT Road is busiest at office hours; book before the evening peak</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d12-mode">Home or online in the final year?</h2>
  <p>
    Final-year students usually manage online lessons well, and online gives access to IB Higher Level, ISC or
    JEE (Advanced)-level specialists wherever they live. Home lessons still help a student who needs someone at the
    table to keep a long problem session going, or who has had enough of screens after coaching. Many final-year
    plans in a city of long metro rides end up hybrid: one home session a week in the hardest subject and online
    sessions for the rest, with online doubt-clearing in the weeks before each exam.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d12-demo">What to ask at a Class 12 demo</h2>
  <p>
    You pay nothing for the first lesson with a shortlisted tutor. In the final year, put these to them:
  </p>
  <ol>
    <li><strong>"Which papers is my child sitting, and how are they marked?"</strong> Board, practical, project, and any entrance test.</li>
    <li><strong>"What would you do in the next eight weeks?"</strong> Expect specific chapters and test dates.</li>
    <li><strong>"How will you fit with coaching?"</strong> The answer should be about gaps and the board, not repetition.</li>
    <li><strong>"Can you take this question from last week's test?"</strong> Watch how the tutor teaches the method, not just the answer.</li>
  </ol>
  <p>
    If the demo does not convince you, another shortlisted tutor can take one, and changing tutor later is free. Tutors
    who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d12-fees">Class 12 tuition fees in Delhi</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    In the final year, the subject, board, entrance level and the tutor's travel at your hour shape each quote, and
    each fee is visible on your shortlist before the demo. See our <a href="{{ url('/pricing-guide') }}">pricing guide</a>
    and the <a href="{{ url('/blog/home-tuition-fees-delhi') }}">Delhi fees article</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d12-where">Localities where we match Class 12 tutors</h2>
  <p>
    {!! $d12A('mehrauli', 'Mehrauli') !!}, one of Delhi's oldest continuously inhabited settlements, has narrow lanes
    near Qutub Minar station, so a landmark matters more than a house number. {!! $d12A('palam', 'Palam') !!} is mostly
    houses and floors, reached from its Magenta Line station. {!! $d12A('dwarka-sector-23', 'Dwarka Sector 23') !!},
    towards the airport, is reached from the Sector 21 or Sector 8 stations, with the Airport Express at Sector 25
    also within reach.
  </p>
  <p>
    {!! $d12A('west-patel-nagar', 'West Patel Nagar') !!} is builder floors served by two Blue Line stations.
    {!! $d12A('kamla-nagar', 'Kamla Nagar') !!}, laid out in the 1950s around three roundabouts, is easier on foot from
    the metro than by car. {!! $d12A('dilshad-garden', 'Dilshad Garden') !!} is a DDA colony of blocks and pockets with
    two Red Line stations.
  </p>
  <p>
    For the year before, see <a href="{{ url('/class-11-home-tutor-delhi') }}">Class 11 tutors in Delhi</a>, and the
    national <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths</a> page. Send the board, subjects, entrance
    plans, coaching days, your colony or sector and free hours; two or three matched tutors come back with fees.
    <a href="{{ url('/demo-class') }}">Ask for a free demo</a>, see <a href="{{ url('/tutors') }}">tutor profiles</a> or
    the <a href="{{ url('/city/delhi') }}">Delhi city page</a>. Senior-subject teachers can see
    <a href="{{ url('/tuition-jobs/delhi') }}">Delhi tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
