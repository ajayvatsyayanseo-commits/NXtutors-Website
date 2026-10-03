{{--
  Long-form guide for the "Class 12 home tutor Pune" page (HSC, CBSE, ISC and
  IB DP Year 2, with MHT-CET, JEE, NEET and CUET), covering Pune and
  Pimpri-Chinchwad. Authors: Ajay Vatsyayan with the NXTutors Academic Team.
  Role statements only. No schools, junior colleges or coaching institutes
  named. HSC-first; structure follows class-12-home-tutor-mumbai with no
  sentences reused.

  Official sources:
  - Maharashtra State Board, https://www.mahahsscboard.in/rules.pdf (read
    2 Oct 2026): HSC conducted by the divisional board on behalf of the State
    Board at the end of the second year of junior college; head office in
    Pune. https://www.mahahsscboard.in/ Evaluation page PDFs and FAQs (as read
    1 Oct 2026 for maharashtra-board-tutor-mumbai): "Physics (54) Std XII":
    theory 70 marks, 3 hours, Sections A-D (MCQ and very short answers; short
    answers of two and three marks with internal choice; four-mark long
    answers), log tables allowed, calculators not; practical 30 marks, at
    least 75% of handbook experiments; "Biology (56) Std XII": same question
    types; "Mathematics & Statistics (40) Std XII": 80 marks, 3 hours, four
    sections; "Book Keeping and Accountancy (50)": board written 80 + 20;
    practical and internal marks entered by junior colleges on the board
    portal; main and supplementary examinations each year; marks
    verification, photocopy and revaluation after results (board FAQs).
  - State CET Cell, Maharashtra, MHT-CET 2026 Information Brochure (updated
    11 Apr 2026) and syllabus PDF, https://cetcell.mahacet.org/ (as read
    1 Oct 2026 for mht-cet-tutor-mumbai): CBT; 180 minutes, first 90 minutes
    Physics and Chemistry, then 90 minutes Mathematics or Biology; no negative
    marking; about 80% Std XII; two attempts in 2026, best Total percentile
    counts; percentile is not percentage; Maharashtra State candidature must
    take MHT-CET for B.E./B.Tech and B.Pharm/Pharm.D.
  - CBSE Class 12 maths 80 + 20; physics and chemistry 70 + 30
    (https://cbseacademic.nic.in/).
  - CISCE ISC Mathematics (860), https://cisce.org/ : 80-mark paper + 20
    project; calculus 35 of the 80; project viva by a visiting examiner.
  - IB DP, https://www.ibo.org/ : maximum 45 points, 24 points among the pass
    criteria; EE and TOK together up to 3 points; maths exploration 20%.
  - JEE (Main) 2026 bulletin (https://jeemain.nta.nic.in): Class 12
    performance condition, 75% aggregate (65% SC/ST/PwD) or top 20 percentile
    of the board; JEE (Advanced) 2026 open to the top 2,50,000 JEE (Main)
    candidates (https://jeeadv.ac.in); NEET (UG) one exam
    (https://neet.nta.nic.in); CUET (UG) by NTA (https://cuet.nta.nic.in).
  Local detail and the school-year stretches only from the Pune city hub view,
  database/seo-content/zones/pune.json, pune-zone-guides.json and
  database/seo-content/areas/pune-research.json. Fee range is the approved
  sentence. FAQs: faqs/class-12-home-tutor-pune.php.
  Area links render only when that Pune area page exists and is active.
--}}
@php
  $pn12Slugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pn12 = function (string $slug, string $label) use ($pn12Slugs) {
      return in_array($slug, $pn12Slugs, true)
          ? '<a href="' . e(url('/city/pune/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="pn12GuideTitle">
  <h2 id="pn12GuideTitle">Class 12 home tutors in Pune: HSC papers, MHT-CET and the national tests in one year</h2>

  <p class="nx-guide__lede">
    The final school year asks a Pune student to do two things at once: write board papers that reward complete,
    well-set-out answers, and sit entrance tests that reward speed and judgement. For a State Board science student
    that usually means the HSC and MHT-CET, often with JEE or NEET as well; for CBSE, ISC and IB students it means
    their own finals alongside the same national tests. This guide, by Ajay Vatsyayan, who writes on IB, IGCSE and ISC
    maths, with the NXTutors Academic Team, explains what each final-year paper looks like, why board marks still
    matter, how the year fits together, and how a home tutor can work alongside college and coaching rather than
    competing with them.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pn12-hsc">HSC papers</a> ·
    <a href="#pn12-boards">Other boards</a> ·
    <a href="#pn12-cet">MHT-CET</a> ·
    <a href="#pn12-marks">Why board marks count</a> ·
    <a href="#pn12-cal">The calendar</a> ·
    <a href="#pn12-spec">Specialists and coaching</a> ·
    <a href="#pn12-last">The last six weeks</a> ·
    <a href="#pn12-zones">Travel by zone</a> ·
    <a href="#pn12-mode">Home or online</a> ·
    <a href="#pn12-demo">The demo</a> ·
    <a href="#pn12-fees">Fees</a> ·
    <a href="#pn12-where">Localities</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pn12-hsc">What do the HSC science papers look like?</h2>
  <p>
    The HSC is conducted at the end of the second year of junior college by the divisional boards on behalf of the
    Maharashtra State Board, headquartered in Pune, with a main and a supplementary examination each year. The board's
    published evaluation schemes are specific, and a tutor should teach to them:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Std XII science papers, from the board's evaluation schemes</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Theory</th><th scope="col">Other marks</th><th scope="col">Tutor's emphasis</th></tr>
    </thead>
    <tbody>
      <tr><td>Physics (54)</td><td>70 marks, three hours, Sections A to D, from one-mark objective items to four-mark long answers with internal choice; log tables allowed, calculators not</td><td>Practical exam of 30 marks; at least three-quarters of the handbook experiments done</td><td>Numericals by log table, derivations written in full, a complete journal</td></tr>
      <tr><td>Biology (56)</td><td>Same family of question types, from objective items to long answers</td><td>Check the current scheme on mahahsscboard.in</td><td>Labelled diagrams and precise terms</td></tr>
      <tr><td>Mathematics &amp; Statistics (40)</td><td>80 marks, three hours, four sections</td><td>Check the current scheme on mahahsscboard.in</td><td>Every step shown; timing across four sections</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Practical and internal marks are entered by the junior college on the board's portal, so a missing journal or
    experiment costs marks that no amount of theory can recover. Our
    <a href="{{ url('/maharashtra-board-tutor-pune') }}">Maharashtra Board tutors in Pune</a> page covers HSC commerce
    and arts as well.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn12-boards">What does the final year ask on CBSE, ISC and IB?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Final-year structure outside the State Board</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Key facts</th><th scope="col">Where tutoring helps</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE</td><td>Maths 80 + 20; physics and chemistry 70 theory + 30 practical</td><td>NCERT exercises in full, then sample papers and marking schemes</td></tr>
      <tr><td>ISC Mathematics (860)</td><td>An 80-mark paper plus a 20-mark project with a viva by a visiting examiner; calculus carries 35 of the 80 marks</td><td>Calculus depth and full written working</td></tr>
      <tr><td>IB Diploma, second year</td><td>Up to 45 points; 24 points is one of the pass criteria; Extended Essay and TOK together add up to 3 points; the maths exploration is 20% of the maths grade</td><td>HL problem solving; explaining criteria without writing any part of the internal work</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    See our <a href="{{ url('/cbse-home-tutor-pune') }}">CBSE</a>, <a href="{{ url('/icse-home-tutor-pune') }}">ICSE and
    ISC</a> and <a href="{{ url('/ib-tutor-pune') }}">IB tutor</a> pages for Pune, and our guide to
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn12-cet">How does MHT-CET fit into Class 12?</h2>
  <p>
    MHT-CET is conducted by the State CET Cell, Maharashtra. In its 2026 form it was a computer-based test of 180
    minutes: the first 90 minutes cover physics and chemistry, after which that section is submitted and the next 90
    minutes cover maths (PCM group) or biology (PCB group). There is no negative marking. About 80% of questions come
    from the Std XII syllabus. In 2026 candidates had two attempts, and the better total percentile counted; the CET
    Cell also points out that a percentile is not a percentage. For Maharashtra State candidature, MHT-CET is required
    for engineering and pharmacy admission.
  </p>
  <p>
    For a tutor this means the Class 12 chapters do double duty: taught properly once for the HSC, then drilled at
    speed for the CET. Our <a href="{{ url('/mht-cet-tutor-pune') }}">MHT-CET tutors in Pune</a> page sets out the test
    in detail; always confirm the current brochure on cetcell.mahacet.org.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn12-marks">Why do board marks still matter when a test decides admission?</h2>
  <p>
    Because several admission routes set a board-marks condition. For JEE (Main) 2026, admission to many central
    institutes required 75% in Class 12 (65% for SC, ST and PwD candidates) or a place in the top 20 percentile of the
    student's board. JEE (Advanced) 2026 was open to the top 2,50,000 JEE (Main) candidates. NEET (UG) is a single
    exam, and CUET (UG), also conducted by NTA, serves Central and participating universities for commerce and
    humanities students. A student who neglects the board paper for the entrance test can lose an admission they had
    earned on the test. Our <a href="{{ url('/jee-home-tutor-pune') }}">JEE</a> and
    <a href="{{ url('/neet-home-tutor-pune') }}">NEET home tutors in Pune</a> pages explain each route.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn12-cal">How does the Class 12 year fit together?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The final year, stretch by stretch</caption>
    <thead>
      <tr><th scope="col">Stretch</th><th scope="col">Board work</th><th scope="col">Entrance work</th></tr>
    </thead>
    <tbody>
      <tr><td>Start of session to the monsoon</td><td>New Std XII chapters, journals begun</td><td>Class 11 revision for weak chapters</td></tr>
      <tr><td>Monsoon to Diwali</td><td>Syllabus nearly finished; practicals complete</td><td>Chapter-wise timed tests</td></tr>
      <tr><td>Diwali to December</td><td>Preliminary exams; full board-style papers</td><td>Mixed mock tests begin</td></tr>
      <tr><td>January to March</td><td>Practical exams and board papers; nothing new</td><td>First JEE Main session for those taking it</td></tr>
      <tr><td>April to May</td><td>Results awaited</td><td>Second JEE Main session, JEE Advanced, NEET, MHT-CET</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Dates move each year; take them only from the official notices.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn12-spec">One specialist per subject, working with coaching</h2>
  <p>
    In Class 12 an all-subject tutor rarely has the depth for both the board paper and the entrance test. One
    specialist for the weakest subject, sometimes two, is the usual pattern. If your child attends coaching, the home
    tutor's job changes: clear the backlog of unsolved coaching sheets, go through every wrong answer from the last
    mock, and convert entrance-style understanding into board-style written answers. That needs a tutor who is happy to
    work from someone else's material. See <a href="{{ url('/maths-home-tutor-pune') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-pune') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-pune') }}">chemistry</a> and
    <a href="{{ url('/biology-home-tutor-pune') }}">biology</a> tutors in Pune, and for commerce, our
    <a href="{{ url('/commerce-home-tutor-pune') }}">commerce home tutors</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn12-last">The last six weeks before the board papers</h2>
  <p>
    This is when a good tutor stops teaching and starts managing. A sound pattern for the final stretch:
  </p>
  <ul>
    <li><strong>One full paper every few days</strong> in each main subject, written in the real time limit, then marked against the board's style.</li>
    <li><strong>The mistakes notebook as the revision syllabus:</strong> every error from the preliminary exams and mocks, reworked until it is right twice.</li>
    <li><strong>Journals and practical files checked</strong> before the practical exams, since those marks are entered by the college.</li>
    <li><strong>Short entrance drills</strong> on alternate days, so MHT-CET or JEE speed does not fade while board writing takes priority.</li>
    <li><strong>Sleep protected.</strong> Late-night sessions in the final fortnight cost more than they gain.</li>
  </ul>
  <p>
    After results, the board offers verification of marks, photocopies of answer books and revaluation; take the
    process and deadlines only from mahahsscboard.in.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn12-zones">How tutors reach Class 12 students in each zone</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Routes and timing for final-year sessions in Pune</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Route</th><th scope="col">Timing</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/pune/zone/kothrud-karve-nagar-deccan') }}">Kothrud, Karve Nagar &amp; Deccan</a></td><td>Vanaz or Anand Nagar on the Aqua Line</td><td>Late evening after coaching, once Paud Road clears</td></tr>
      <tr><td><a href="{{ url('/city/pune/zone/aundh-baner-pashan') }}">Aundh, Baner &amp; Pashan</a></td><td>Two-wheeler from Baner, Bavdhan or Aundh</td><td>Weekend mornings for long problem sessions</td></tr>
      <tr><td><a href="{{ url('/city/pune/zone/wakad-hinjewadi-pimpri-chinchwad') }}">Wakad, Hinjewadi &amp; Pimpri-Chinchwad</a></td><td>Suburban train to Akurdi for Nigdi; Purple Line for Pimpri</td><td>Weekday evenings on the rail side</td></tr>
      <tr><td><a href="{{ url('/city/pune/zone/viman-nagar-kalyani-nagar-kharadi') }}">Viman Nagar, Kalyani Nagar &amp; Kharadi</a></td><td>Kalyani Nagar station on the Aqua Line</td><td>After Nagar Road's office traffic</td></tr>
      <tr><td><a href="{{ url('/city/pune/zone/koregaon-park-camp-wanowrie') }}">Koregaon Park, Camp &amp; Wanowrie</a></td><td>Bund Garden; Pune Railway Station for Camp</td><td>Weekday afternoons and early evenings</td></tr>
      <tr><td><a href="{{ url('/city/pune/zone/hadapsar-kondhwa-nibm') }}">Hadapsar, Kondhwa &amp; NIBM</a></td><td>Tutor from within the zone, by two-wheeler</td><td>Avoid township shift-change hours</td></tr>
      <tr><td><a href="{{ url('/city/pune/zone/katraj-bibwewadi-sinhagad-road') }}">Katraj, Bibwewadi &amp; Sinhagad Road</a></td><td>Swargate, then bus or auto</td><td>Online on the heaviest rain days</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn12-mode">Home or online in the final year?</h2>
  <p>
    Online makes most sense in Class 12: it saves travel in a year with no spare hours, and it lets a student work with
    the right specialist wherever they live. Home sessions are still worth keeping for long weekend problem sessions
    and for students who need someone beside them to stay on task. Before the board exams, an online doubt session
    the evening before each paper can be more useful than another full lesson. See our
    <a href="{{ url('/online-tutor-pune') }}">online tutors for Pune students</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn12-demo">Questions for a Class 12 demo</h2>
  <ol>
    <li>"How do you split time between the HSC paper and MHT-CET, or between the board and JEE or NEET?"</li>
    <li>"Here is my child's last mock. Where are the marks going?"</li>
    <li>"Can you show the same idea as a board answer and as a timed entrance question?"</li>
    <li>"How will you work with the coaching material, not against it?"</li>
    <li>"What will we have finished by the preliminary exams?"</li>
  </ol>
  <p>
    The first lesson with the tutor you choose is a free demo, and switching later is free. Tutors who join go through
    an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn12-fees">What does a Class 12 home tutor cost in Pune?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Final-year quotes depend on the subject, the board, how much entrance work is included and the journey at your
    slot. Every shortlisted fee is shown before the demo; see the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-pune') }}">home tuition fees in Pune</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pn12-where">Where we match Class 12 tutors in Pune</h2>
  <p>
    {!! $pn12('kothrud', 'Kothrud') !!}, below the Vetal Tekdi hills, has two Aqua Line stations, so tutors from across
    the metro network can reach it with one change at most. {!! $pn12('pashan', 'Pashan') !!} keeps apartment buildings
    beside large campuses and relies on road travel. {!! $pn12('nigdi', 'Nigdi') !!}, the planned Pradhikaran sectors,
    is close to Akurdi railway station and the Bhakti Shakti bus terminal.
  </p>
  <p>
    {!! $pn12('kalyani-nagar', 'Kalyani Nagar') !!}, across the river from Koregaon Park, has its own Aqua Line
    station. In {!! $pn12('magarpatta', 'Magarpatta') !!}, a planned township with about a third of its area under
    green cover, the tutor needs your cluster and tower at the gate. And in {!! $pn12('katraj', 'Katraj') !!}, below
    the ghat, a planned metro extension is not yet built, so tutors finish the trip from Swargate by road.
  </p>
  <p>
    If your child is a year earlier, see <a href="{{ url('/class-11-home-tutor-pune') }}">Class 11 tutors in Pune</a>.
    Send us the board, stream, subjects, entrance tests, locality and free hours; we come back with two or three tutors
    and their fees. <a href="{{ url('/demo-class') }}">Book a free demo</a>, browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>, or open our page of
    <a href="{{ url('/city/pune') }}">home tutors in Pune</a>.
  </p>
  </section>

  </div>
</article>
