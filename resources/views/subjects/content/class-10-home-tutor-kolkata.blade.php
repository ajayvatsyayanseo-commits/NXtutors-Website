{{--
  Long-form guide for "Class 10 home tutor Kolkata" (Madhyamik first, then
  CBSE, ICSE and IGCSE), covering Kolkata, Salt Lake, New Town and Howrah.
  Authors: Abhinandan Tiwary (Class 10 CBSE and ICSE maths) and Aaditya Kashyap
  (CBSE and ICSE science). Role statements only. City authority wave, written
  2 Oct 2026. Structure follows class-10-home-tutor-mumbai; no sentences reused.

  Official sources:
  - West Bengal Board of Secondary Education, wbbse.wb.gov.in (read 2 Oct 2026):
    * About Us > Profile: came into being in 1951 under the West Bengal
      Secondary Education Act of 1950 as the Board of Secondary Education;
      renamed WBBSE from January 1964 under the WBBSE Act of 1963; publishes
      some Class IX-X textbooks and approves private books for the secondary
      level. (Candidate and school counts on that page are NOT used.)
    * Main Objectives: conducts the secondary examination, "better known as
      Madhyamik Pariksha", after Class X, the first public examination in a
      student's life.
    * Home page: links to the MP Examination Routine, MP (S.E.) Result, Post
      Publication Review / Scrutiny, Academic Calendar; notice list includes
      convenors for Madhyamik Pariksha (Secondary Examination) 2027.
    * Annual Academic Calendar of 2026 (Notification D.S.(Aca)/940/A/25/6,
      29.12.2025): Class X subjects as for IX (first and second language,
      Mathematics (Ganit Prakash), Physical Science, Life Science, History,
      Geography, each "& Environment", optional elective); internal formative
      evaluation in IX-X; summative evaluations normally in the first week of
      April, August and December; school hours 10.40 to 16.30; para 3.17
      restates Kolkata Gazette Notification 214/SE of 08.03.2018, rule 4(6):
      "No teacher shall engage himself in any sort of private tuition for
      personal gain."
    No Madhyamik paper pattern, marks or dates are stated; families are sent to
    the board's routine and notices.
  - CBSE (as stated on cbse-home-tutor-kolkata, citing cbseacademic.nic.in
    Secondary Curriculum 2026-27 and the CBSE notification of 14.02.2026):
    80 + 20 in major subjects; 33% to pass; about half the questions
    competency-focused; Standard / Basic maths continues only for the 2026-27
    Class X batch; two board examinations in Class X, the first compulsory, the
    second to improve in up to three of science, maths, social science and
    languages.
  - CISCE (as stated on icse-home-tutor-kolkata, cisce.org): ICSE Mathematics
    one 3-hour paper of 80 marks + 20 internal; Physics, Chemistry and Biology
    separate 2-hour papers of 80 marks + 20 internal practical assessment.
  - Cambridge IGCSE 0580 (2025-2027): Core grades C-G, Extended A*-E; Edexcel
    4MA1 Foundation 5-1, Higher 9-4 (as on class-10-home-tutor-mumbai).
  Local detail only from database/seo-content/zones/kolkata.json,
  database/seo-content/areas/kolkata-research.json, kolkata-zone-guides.json and
  the /city/kolkata hub. No school or people names; no request-data claims. Fee
  range is the approved sentence. FAQs: faqs/class-10-home-tutor-kolkata.php.
  Area links render only when that Kolkata area page exists and is active.
--}}
@php
  $tnKoSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $tnKoA = function (string $slug, string $label) use ($tnKoSlugs) {
      return in_array($slug, $tnKoSlugs, true)
          ? '<a href="' . e(url('/city/kolkata/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="tnKoGuideTitle">
  <h2 id="tnKoGuideTitle">Class 10 home tutors in Kolkata: Madhyamik, CBSE, ICSE and IGCSE, each with its own plan</h2>

  <p class="nx-guide__lede">
    In a Kolkata family, "Class 10" can mean four quite different exams. For many students it is the Madhyamik, the West
    Bengal board's secondary examination. Others sit the CBSE board papers, the ICSE, or Cambridge or Edexcel IGCSE.
    The subjects look similar on a timetable, but the books, medium, marking and calendar differ, and a tutor who is
    excellent for one may be the wrong person for another. Abhinandan Tiwary (Class 10 maths for CBSE and ICSE) and
    Aaditya Kashyap (science for CBSE and ICSE) set out below what each route asks of a student, the subjects where
    outside help pays off, a sensible pace for the board year, and the questions that expose a weak tutor at the free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#tnko-mp">The Madhyamik year</a> ·
    <a href="#tnko-boards">CBSE, ICSE, IGCSE</a> ·
    <a href="#tnko-subjects">Where tutors help</a> ·
    <a href="#tnko-year">Pacing the year</a> ·
    <a href="#tnko-last">The last eight weeks</a> ·
    <a href="#tnko-zones">Travel by zone</a> ·
    <a href="#tnko-mode">Home or online</a> ·
    <a href="#tnko-demo">The demo</a> ·
    <a href="#tnko-fees">Fees</a> ·
    <a href="#tnko-where">Where we match</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="tnko-mp">What does the Madhyamik year ask of a student?</h2>
  <p>
    The Madhyamik Pariksha is conducted by the West Bengal Board of Secondary Education after Class 10. The board began
    in 1951 as the Board of Secondary Education and took its present name in 1964; it calls the Madhyamik the first
    public examination in a student's life. Its 2026 academic calendar lists the Class 10 subjects as a first and second
    language, Mathematics, Physical Science, Life Science, History and Geography, each paired with environment, plus an
    optional elective. Through the year, schools run internal formative evaluation and summative evaluations, normally
    in the first week of April, August and December.
  </p>
  <p>For a tutor, the practical points are these:</p>
  <ul>
    <li><strong>The board's books first.</strong> The board publishes or approves the secondary textbooks, so every exercise in the prescribed book should be finished before any guide book.</li>
    <li><strong>The official routine, not hearsay.</strong> Exam dates and the routine appear on wbbse.wb.gov.in; we do not repeat them here, and neither should a tutor's notes from earlier years.</li>
    <li><strong>The medium.</strong> Answers are written in the medium the child studies in, so the tutor must be fluent in it, Bengali, English or another.</li>
    <li><strong>Two science subjects.</strong> Physical Science and Life Science are separate, and a weak one cannot be hidden behind a strong one.</li>
    <li><strong>The next step.</strong> After Madhyamik comes the Higher Secondary course and a stream choice, so a sensible target matters early.</li>
  </ul>
  <p>
    One rule shapes who can tutor a Madhyamik student. The board's 2026 calendar restates a 2018 state notification
    that teachers in schools under the board must not take private tuition for personal gain. In practice, the home
    tutor should be someone other than your child's own schoolteacher. For the state board across all classes, see our
    <a href="{{ url('/west-bengal-board-tutor-kolkata') }}">West Bengal board tutors in Kolkata</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnko-boards">CBSE, ICSE or IGCSE: what differs in the Class 10 paper?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The three non-state routes side by side</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Papers and internal marks</th><th scope="col">Choices and calendar</th><th scope="col">Common trap</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE</td><td>Major subjects: 80-mark paper plus 20 internal; 33% to pass; about half the questions competency-focused</td><td>Standard or Basic maths continues for the 2026-27 Class X batch; two board exams, the first compulsory, the second to improve up to three of science, maths, social science and languages</td><td>Case-based questions answered from memory</td></tr>
      <tr><td>ICSE</td><td>Maths: a single paper of three hours for 80 marks, with 20 internal; physics, chemistry and biology: separate 2-hour, 80-mark papers plus 20 for practical work</td><td>Session begins in April</td><td>Working left out; diagrams unlabelled</td></tr>
      <tr><td>Cambridge IGCSE maths (0580)</td><td>Fully examined</td><td>Two tiers: Core, graded C to G, and Extended, graded A* to E</td><td>Entering the wrong tier</td></tr>
      <tr><td>Edexcel International GCSE maths</td><td>Fully examined</td><td>Foundation tier graded 5 down to 1, Higher tier 9 down to 4</td><td>Entering the wrong tier</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    More detail sits on our <a href="{{ url('/cbse-home-tutor-kolkata') }}">CBSE</a>,
    <a href="{{ url('/icse-home-tutor-kolkata') }}">ICSE</a> and <a href="{{ url('/igcse-tutor-kolkata') }}">IGCSE</a>
    pages for Kolkata; ICSE families should also read our <a href="{{ url('/blog/icse-class-10-maths-boards') }}">article
    on ICSE Class 10 maths</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnko-subjects">Where does a Class 10 tutor make the biggest difference?</h2>
  <ul>
    <li><strong>Maths:</strong> the most common choice on every board, because marks go on steps. A tutor helps most when Class 9 algebra or geometry is shaky. See <a href="{{ url('/maths-home-tutor-kolkata') }}">maths home tutors in Kolkata</a> and our <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">chapter plan for CBSE Class 10 maths</a>.</li>
    <li><strong>Physical science:</strong> numericals, equations and laws stated precisely; on the state board it stands as a subject of its own. Our <a href="{{ url('/physics-home-tutor-kolkata') }}">physics</a> and <a href="{{ url('/chemistry-home-tutor-kolkata') }}">chemistry</a> pages for Kolkata go deeper.</li>
    <li><strong>Life science or biology:</strong> diagrams, processes and exact terms; often needs less time than physical science but steady revision.</li>
    <li><strong>English and the first language:</strong> answer formats, letters and compositions; a few targeted sessions can lift marks noticeably.</li>
    <li><strong>History and geography:</strong> a structure for long answers and map practice, usually without regular tuition.</li>
  </ul>
  <p>
    If two science subjects and maths all need help, consider two tutors, one for maths and physical science and one
    for life science, rather than stretching one person across everything. Our
    <a href="{{ url('/science-home-tutor-kolkata') }}">science home tutors in Kolkata</a> page explains the split.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnko-year">How should the Class 10 year be paced?</h2>
  <p>
    CBSE and ICSE schools in Kolkata start the session in April; state-board schools run to a calendar year, with the
    first summative normally in early April and the last in early December. Whatever the start, a sound board year has
    four parts:
  </p>
  <ol>
    <li><strong>Foundation:</strong> gather each subject's syllabus and paper pattern, fix Class 9 gaps and move a chapter or two ahead of school.</li>
    <li><strong>Steady weeks:</strong> one chapter test a week per main subject, a mistakes notebook, and complete school notebooks for internal assessment.</li>
    <li><strong>Through the Puja holidays:</strong> the autumn break is long enough to lose the thread, so keep one or two sessions a week, online if family travel makes home visits impossible.</li>
    <li><strong>Full papers:</strong> timed papers in exam conditions from the pre-board or test-exam season, checked against model answers.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnko-last">The last eight weeks before the board papers</h2>
  <ul>
    <li>No new chapters; revise from the mistakes notebook and the textbook exercises.</li>
    <li>One full paper every few days per main subject, followed by a review session with the tutor.</li>
    <li>Short daily practice of diagrams, maps and formulae, five to ten minutes each.</li>
    <li>Sleep and meals on a schedule; late-night cramming costs more marks than it gains.</li>
    <li>Check the official routine on the board's site and plan the revision order from it.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnko-zones">Getting a board-year tutor to your door in six zones</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Routes and timing for board-year tuition in six Kolkata zones</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Station or line to give the tutor</th><th scope="col">When to book</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/kolkata/zone/tollygunge-jadavpur-garia') }}">Tollygunge, Jadavpur &amp; Garia</a></td><td>Gitanjali on the Blue Line for Naktala, Masterda Surya Sen for Bansdroni</td><td>A tutor on the metro beats the evening traffic to Garia</td></tr>
      <tr><td><a href="{{ url('/city/kolkata/zone/behala-new-alipore') }}">Behala &amp; New Alipore</a></td><td>Purple Line from Majerhat to Joka along Diamond Harbour Road</td><td>Weekday afternoon or weekend morning for tutors coming by road</td></tr>
      <tr><td><a href="{{ url('/city/kolkata/zone/north-kolkata') }}">North Kolkata</a></td><td>Girish Park on the Blue Line or Sealdah on the Green Line for Maniktala</td><td>After the office and school rush at the crossings</td></tr>
      <tr><td><a href="{{ url('/city/kolkata/zone/kasba-em-bypass-south') }}">Kasba &amp; EM Bypass South</a></td><td>Satyajit Ray and Jyotirindra Nandi on the Orange Line, or Jadavpur station</td><td>The bypass is heavy in the evening peak</td></tr>
      <tr><td><a href="{{ url('/city/kolkata/zone/salt-lake') }}">Salt Lake</a></td><td>Salt Lake Stadium or Karunamoyee on the Green Line</td><td>Quiet inner streets suit evening lessons after the rush</td></tr>
      <tr><td><a href="{{ url('/city/kolkata/zone/lake-town-dum-dum-baguiati') }}">Lake Town, Dum Dum &amp; Baguiati</a></td><td>Dum Dum on the Blue Line, the suburban junction, or the Yellow Line</td><td>Jessore Road carries airport traffic at office hours</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnko-mode">Home or online for the board year?</h2>
  <p>
    For maths and physical science, a tutor beside the notebook is hard to beat. Online widens the choice when the
    right ICSE or IGCSE specialist, or a Bengali-medium science tutor, lives on the far side of the city or across the
    river, and it keeps lessons going during the Puja break and on exam-week evenings when travel wastes time. A
    common pattern is one home session for maths at the weekend and one online midweek for a second subject, with the
    tutor seeing the working through a tablet or phone camera.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnko-demo">Questions that test a tutor at the Class 10 demo</h2>
  <ol>
    <li><strong>Board knowledge:</strong> for Madhyamik, where the tutor checks the routine and which books they follow; for CBSE, how the internal 20 and the optional second exam fit in; for ICSE, how working is marked; for IGCSE, the tier.</li>
    <li><strong>A recent test:</strong> hand it over and ask which mistakes cost the most marks.</li>
    <li><strong>A fresh question:</strong> pick one from the textbook the tutor has not prepared and see whether your child understands it afterwards.</li>
    <li><strong>A plan:</strong> ask for dates for full papers between now and the board exam.</li>
  </ol>
  <p>
    You pay nothing for the demo, and moving to another tutor later costs nothing either. Everyone who joins as a
    tutor goes through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> first. See the
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> for more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnko-fees">Fees for Class 10 tuition in Kolkata</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    In the board year the quote depends on which exam, how many subjects, how much board-year teaching the tutor has
    done, the distance at your hour and how often you want sessions. Every tutor names a fee, and it is on your
    shortlist before the demo. Read
    <a href="{{ url('/blog/home-tuition-fees-kolkata') }}">home tuition fees in Kolkata</a> and our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnko-where">Where we match Class 10 tutors in Kolkata</h2>
  <p>
    {!! $tnKoA('naktala', 'Naktala') !!} sits beside Tolly's Nullah with Gitanjali as its nearest metro stop, and most
    homes are houses where the tutor goes straight to the door. {!! $tnKoA('behala', 'Behala') !!}, one of the city's
    oldest and largest residential areas, is served by the Purple Line along Diamond Harbour Road, from Joka up to Majerhat, so
    most homes are a short auto ride from a station. In {!! $tnKoA('maniktala', 'Maniktala') !!}, visits are usually to a flat in a
    mid-size building, and an evening slot after the crossing clears works well.
  </p>
  <p>
    {!! $tnKoA('santoshpur', 'Santoshpur') !!} has had Orange Line stations on the bypass side since March 2024, as well
    as Jadavpur and Baghajatin on the suburban lines. In {!! $tnKoA('salt-lake-sector-3', 'Salt Lake Sector III') !!},
    houses have their own gates and the tutor rings the bell; give the block letter and house number.
    {!! $tnKoA('dum-dum', 'Dum Dum') !!} is one of the easiest parts of the city to reach by train or metro, which widens
    the pool of board-year tutors.
  </p>
  <p>
    The year before is covered on <a href="{{ url('/class-9-home-tutor-kolkata') }}">Class 9 tuition in Kolkata</a>,
    and the Higher Secondary, ISC and CBSE senior years on <a href="{{ url('/class-11-home-tutor-kolkata') }}">Class 11
    home tutors in Kolkata</a>. Send us the board, medium, subjects, your para or block and the hours that work, and
    two or three suitable tutors come back with their fees. You can <a href="{{ url('/demo-class') }}">book the free
    demo</a> now, look through <a href="{{ url('/tutors') }}">tutors</a>, or find your neighbourhood on the
    <a href="{{ url('/city/kolkata') }}">Kolkata home tutors</a> page.
  </p>
  </section>

  </div>
</article>
