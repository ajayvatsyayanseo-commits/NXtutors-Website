{{--
  Gandhinagar page for JEE home tutors (subjects-b writer, capitals wave,
  3 Oct 2026). The exam itself is on the national hub (/jee-home-tutor); this
  page is about JEE tuition in a Gandhinagar week: three tests from one set of
  chapters (the HSC or CBSE Class 12 paper, GUJCET and JEE Main), the GSEB
  2026-27 calendar, Group A and AB timetables, metro-line travel and plans by
  stage.

  Exam facts only as stated on the national page, which cites (fetched 1 Oct 2026):
  - NTA, JEE (Main) 2026 Information Bulletin (jeemain.nta.nic.in): Paper 1 CBT,
    3 hours, maths/physics/chemistry, 20 MCQ + 5 numerical each, 75 questions,
    300 marks, +4/-1; two sessions (January and April 2026); 13 languages; no
    age limit; Advanced eligibility by rank among Paper 1 candidates.
  - JEE (Advanced) 2026 Information Brochure (jeeadv.ac.in): two compulsory
    three-hour papers; English and Hindi; at most two attempts in consecutive
    years.
  GSEB and GUJCET facts from the board (read 3 Oct 2026):
  - GUJCET press note 08-11-2025 (gsebeservice.com/assets/news/, "ગુજકેટ
    ૨૦૨૬ની પરીક્ષાની તારીખ પ્રસિધ્ધ કરવા બાબત અખબારી યાદી.pdf") and press note
    15-12-2025 (Press Note for GUJCET Registration-2026.pdf): GUJCET held by
    GSEB for Group A, B and AB students of HSC Science for degree engineering
    and degree/diploma pharmacy; syllabus = the board's NCERT-based Std 12
    Science syllabus; NCERT textbooks in board schools for Std 12 physics,
    chemistry, biology, maths from June 2019; physics + chemistry one paper,
    80 MCQs, 80 marks, 120 minutes; maths 40 MCQs, 40 marks, 60 minutes;
    OMR; Gujarati, English, Hindi; registration on gseb.org / gujcet.gseb.org.
  - GSEB school activity calendar 2026-27 (circular 02-05-2026, "શાળાકીય
    પ્રવૃત્તિ કેલેન્ડર ૨૦૨૬-૨૭.pdf"): Diwali vacation 5-25 Nov 2026; preliminary
    test for Std 12 on the full syllabus in mid to late January 2027; Std 12
    Science practical exam in early February; SSC/HSC exams late February to
    mid-March 2027; Std 11 annual exam in April 2027.
  - 2025-26 HSC Science maths and physics design (as cited on
    gujarat-board-tutor-ahmedabad): Part A 50 one-mark MCQs on OMR, Part B
    written, 100 marks.
  Local detail only from database/seo-content/areas/gandhinagar-research.json
  (zone_facts and areas' "about"): Yellow Line stations at Sector-1,
  Infocity, Randesan, Raysan and three Koba stations; Violet Line branch to
  GIFT City (extension towards Shahpur approved, not open); GIFT City towers
  with controlled entry and office-hour traffic; SH-71; Vavol with no metro
  station. University-named stations are not named. No schools, colleges,
  coaching institutes or people named. Area links render only for active
  Gandhinagar areas. Fee wording is the approved sentence. FAQs render from
  faqs/jee-home-tutor-gandhinagar.php.
--}}
@php
  $gnjSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gnjA = function (string $slug, string $label) use ($gnjSlugs) {
      return in_array($slug, $gnjSlugs, true)
          ? '<a href="' . e(url('/city/gandhinagar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="gnjGuideTitle">
  <h2 id="gnjGuideTitle">JEE home tutor in Gandhinagar: three tests, one set of chapters, and a week that holds together</h2>

  <p class="nx-guide__lede">
    A science student in Gandhinagar who wants engineering usually faces three papers built on the same Standard 12
    chapters: the school-leaving board paper, GUJCET, which the Gujarat board itself conducts, and JEE Main, with JEE
    Advanced for those who qualify. Each one rewards something different. The board paper rewards complete written
    working, GUJCET rewards fast and accurate multiple-choice answers on an OMR sheet, and JEE rewards depth, speed
    and judgement under negative marking. A home tutor is most useful when one weekly plan serves all three, instead of
    three plans fighting for the same evenings. This page sets out how that plan works for GSEB and CBSE students
    here, which slots survive the school year, how tutors travel along the metro lines to your locality, and what to
    test at the demo. For the exam itself, the national <a href="{{ url('/jee-home-tutor') }}">JEE home tutor</a> page
    goes into much more detail.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gnj-three">Three papers</a> ·
    <a href="#gnj-gujcet">GUJCET beside JEE</a> ·
    <a href="#gnj-groups">Group A or AB</a> ·
    <a href="#gnj-calendar">The school calendar</a> ·
    <a href="#gnj-session">A session</a> ·
    <a href="#gnj-travel">Getting here</a> ·
    <a href="#gnj-format">Home or online</a> ·
    <a href="#gnj-stages">By stage</a> ·
    <a href="#gnj-demo">Demo</a> ·
    <a href="#gnj-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gnj-three">The three papers a Gandhinagar engineering aspirant prepares for</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Same chapters, three kinds of paper</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">How it is set (from the official documents)</th><th scope="col">What it rewards</th></tr>
    </thead>
    <tbody>
      <tr><td>GSEB HSC Science maths and physics</td><td>2025-26 design: three hours, 100 marks; 50 one-mark MCQs on OMR, then written answers with a choice in each section</td><td>Complete steps, standard derivations, neat diagrams, and a quick, clean objective opening</td></tr>
      <tr><td>GUJCET</td><td>Physics and chemistry together: 80 MCQs in 120 minutes; maths alone: 40 MCQs in 60 minutes; OMR answer sheets</td><td>Speed on direct, syllabus-bound questions from the Standard 12 board syllabus</td></tr>
      <tr><td>JEE Main Paper 1</td><td>2026 bulletin: three hours on screen, 75 questions, 300 marks; 20 MCQs and 5 numerical answers per subject; four marks for a right answer, one lost for a wrong one</td><td>Depth across Standards 11 and 12, accuracy, and knowing which question to leave</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    CBSE students in Gandhinagar sit their own Class 12 board paper in place of the HSC; how GUJCET applies to them
    is set out in the board's information booklet for each year, so read it before planning. Take JEE rules from
    jeemain.nta.nic.in and jeeadv.ac.in, and GUJCET rules from gseb.org: all three change from year to year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnj-gujcet">How GUJCET practice fits beside JEE work</h2>
  <p>
    The board's 2026 note set GUJCET's syllabus as its NCERT-based Standard 12 Science syllabus, and says board
    schools have taught Standard 12 physics, chemistry and maths from NCERT books since June 2019. That has a
    practical consequence. The chapters overlap heavily with JEE's, but JEE goes further: it draws on Standard 11 as well and asks
    harder, multi-step questions. A student who prepares seriously for JEE is, chapter by chapter,
    covering GUJCET's ground; what they may lack is GUJCET's rhythm.
  </p>
  <ul>
    <li><strong>Pace:</strong> the combined physics and chemistry paper allows about a minute and a half per question, so long derivation-style thinking has to give way to quick recognition.</li>
    <li><strong>OMR habits:</strong> filling bubbles cleanly and in order is a skill; practise it on printed sheets, not only on a screen.</li>
    <li><strong>Separate maths paper:</strong> maths stands alone in an hour, so a student strong in maths cannot lean on it inside a combined paper.</li>
  </ul>
  <p>
    A tutor can fold this in cheaply: one timed GUJCET-style set every fortnight from the January preliminary onwards,
    reviewed in the next session. For a plan built around GUJCET alone, see our
    <a href="{{ url('/gujcet-tutor-ahmedabad') }}">GUJCET tutors</a> page, and for the board side, our
    <a href="{{ url('/gujarat-board-tutor-gandhinagar') }}">Gujarat Board tutors in Gandhinagar</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnj-groups">Group A or Group AB: what the choice does to the timetable</h2>
  <p>
    GSEB science students sit in Group A (with maths), Group B (with biology) or Group AB (with both). A Group A
    student preparing for JEE has three subjects to balance. A Group AB student has four, and keeps the option of
    pharmacy or a medical route alongside engineering. That flexibility costs time, and the tutor's first job is to
    say honestly where it is costing marks.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How a weekly tuition plan shifts with the group</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">Typical tutor load</th><th scope="col">Watch for</th></tr>
    </thead>
    <tbody>
      <tr><td>A</td><td>Two maths sessions and one physics session a week; chemistry online in short bursts</td><td>Chemistry left to the end because it feels easier</td></tr>
      <tr><td>AB</td><td>Maths and physics as above, plus a short biology check each week</td><td>Biology crowding out JEE problem practice in Standard 12</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnj-calendar">Fitting JEE around the GSEB year</h2>
  <p>
    The board's 2026-27 school calendar gives a JEE student some fixed points to plan around. Diwali vacation runs
    through most of November, three weeks with no school that suit a block of JEE problem practice. The Standard 12
    preliminary test, on the full syllabus, falls in mid to late January; the science practical examination follows
    in early February, and the HSC papers run from late February to mid-March. In 2026, JEE Main had a January and an
    April session. Put together, January is crowded, and the weeks after the board papers are the clearest run at
    April.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A Standard 12 JEE year on the GSEB calendar</caption>
    <thead>
      <tr><th scope="col">Stretch</th><th scope="col">Main focus</th><th scope="col">Tutor's role</th></tr>
    </thead>
    <tbody>
      <tr><td>June to October</td><td>New Standard 12 chapters; Standard 11 revision on weekends</td><td>Teach each chapter once, then set both JEE and board-style questions on it</td></tr>
      <tr><td>November (Diwali break)</td><td>Long problem sets and a first full JEE paper</td><td>Daytime sessions while school is closed</td></tr>
      <tr><td>December to January</td><td>JEE first session; preliminary test</td><td>Keep board writing alive; do not drop it for mocks</td></tr>
      <tr><td>February to mid-March</td><td>Practicals and HSC papers</td><td>Board answers only, plus a GUJCET set or two</td></tr>
      <tr><td>Mid-March onward</td><td>JEE second session, Advanced if qualified</td><td>Daily timed papers and close review</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Dates are the board's and NTA's, not ours, and both can change; check gseb.org and the current JEE bulletin each
    term.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnj-session">Inside a 90-minute JEE session</h2>
  <ol>
    <li><strong>Ten minutes on last week's error log:</strong> each mistake marked as concept, calculation or misreading.</li>
    <li><strong>Forty minutes on one weak topic:</strong> the tutor teaches only what the errors show is missing, then the student solves.</li>
    <li><strong>Twenty-five minutes timed:</strong> a short mixed set under exam conditions, JEE pattern or GUJCET pattern depending on the month.</li>
    <li><strong>Fifteen minutes of board writing:</strong> one long answer written out in full, checked against the board's style.</li>
  </ol>
  <p>
    Topic-by-topic plans for <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">physics</a> and
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">chemistry</a> help with sequencing, and our
    <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> page goes deeper into problem-setting.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnj-travel">How JEE tutors reach your locality</h2>
  <p>
    The Yellow Line links Gandhinagar's sectors with Ahmedabad, and a Violet Line branch runs to GIFT City, so many
    tutors travel by metro and finish by auto or on foot. Where no station is near, a tutor who lives close by is
    the steadier choice.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six localities and the usual way in</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Way in</th><th scope="col">Slot advice</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $gnjA('raysan', 'Raysan') !!}</td><td>Raysan station on the Yellow Line; the next stop is where the GIFT City branch begins</td><td>After the evening rush towards GIFT City and Ahmedabad, or at weekends</td></tr>
      <tr><td>{!! $gnjA('gift-city', 'GIFT City') !!}</td><td>GIFT City station on the Violet Line branch</td><td>Register the tutor with tower security; avoid the start and end of office hours</td></tr>
      <tr><td>{!! $gnjA('koba', 'Koba') !!}</td><td>Koba Circle, Juna Koba or Koba Gaam stations</td><td>Work around SH-71's early and late peaks</td></tr>
      <tr><td>{!! $gnjA('sargasan', 'Sargasan') !!}</td><td>Infocity station, then a short auto ride</td><td>After school, before highway traffic builds</td></tr>
      <tr><td>{!! $gnjA('randesan', 'Randesan') !!}</td><td>Randesan's own Yellow Line station</td><td>Evening classes fixed outside the SH-71 rush</td></tr>
      <tr><td>{!! $gnjA('vavol', 'Vavol') !!}</td><td>Two-wheeler or car; no station in the locality</td><td>A tutor from nearby sectors or Sargasan is easiest to keep</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Zone pages: <a href="{{ url('/city/gandhinagar/zone/koba-raysan-gift-city') }}">Koba, Raysan and GIFT City</a>,
    <a href="{{ url('/city/gandhinagar/zone/kudasan-sargasan') }}">Kudasan and Sargasan</a>,
    <a href="{{ url('/city/gandhinagar/zone/sectors-1-8-infocity') }}">Sectors 1–8 and Infocity</a> and
    <a href="{{ url('/city/gandhinagar/zone/sectors-16-30-pethapur') }}">Sectors 16–30 and Pethapur</a>. Every
    locality is on the <a href="{{ url('/city/gandhinagar') }}">Gandhinagar home tutors</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnj-format">Which subject at home, which online?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A split that works for many JEE students</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Format</th><th scope="col">Reason</th></tr>
    </thead>
    <tbody>
      <tr><td>Physics</td><td>Home</td><td>The tutor needs to watch the free-body diagram or circuit being drawn, where most errors start</td></tr>
      <tr><td>Maths</td><td>Home for new chapters; online for test reviews</td><td>Long working on paper, then quick screen-shared corrections</td></tr>
      <tr><td>Chemistry</td><td>Mostly online</td><td>Frequent short recall checks for organic and inorganic; a home session if physical chemistry numericals lag</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For JEE Advanced-level problems, a specialist teaching online from another city can be a better fit than the
    nearest tutor. Our <a href="{{ url('/online-tutor-gandhinagar') }}">online tutors for Gandhinagar</a> page explains
    how a mixed week runs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnj-stages">Standard 11, Standard 12 and a repeat year</h2>
  <ul>
    <li><strong>Standard 11:</strong> mechanics, calculus foundations and the mole concept, with an error log from the first month. The year ends in a school annual examination in April, so JEE work cannot crowd out school marks entirely.</li>
    <li><strong>Standard 12:</strong> the calendar above, with Standard 11 chapters revised on weekends. GUJCET practice starts after the preliminary test.</li>
    <li><strong>Repeat year:</strong> diagnose last year's papers question by question, rebuild weak chapters, then sit many timed papers. Daytime slots widen the choice of tutor and avoid evening traffic.</li>
  </ul>
  <p>
    Before choosing a repeat year, read the eligibility rules: in 2026 JEE Main had no age limit, and JEE Advanced
    allowed at most two attempts in consecutive years. Subject pages for the city:
    <a href="{{ url('/maths-home-tutor-gandhinagar') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-gandhinagar') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-gandhinagar') }}">chemistry</a>. CBSE students should also see our
    <a href="{{ url('/cbse-home-tutor-gandhinagar') }}">CBSE tutors in Gandhinagar</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnj-demo">What to test in the JEE demo</h2>
  <ol>
    <li>Did the tutor ask about the board, the group, school hours and any coaching before planning?</li>
    <li>Given a problem your child could not solve, did they find the exact step that failed and let the student finish it?</li>
    <li>Can they explain how one chapter is examined in the board paper, in GUJCET and in JEE?</li>
    <li>Did they raise negative marking, and when to skip a question?</li>
    <li>Can they reach you at the same time every week, by a route that does not depend on peak-hour roads?</li>
  </ol>
  <p>
    If the match is wrong, we arrange the next demo, and switching is free. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> lists more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnj-fees">JEE tutor fees in Gandhinagar and how to start</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee, and you see it before the demo. See the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and <a href="{{ url('/blog/home-tuition-fees-gandhinagar') }}">home tuition fees in Gandhinagar</a>.
  </p>
  <p>
    Send the standard, board and group, target exams, subjects, school and coaching hours, and your locality with
    the nearest station or circle. We suggest two or three matched tutors and you book a
    <a href="{{ url('/demo-class') }}">free demo class</a>. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>; you can also browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>. For the medical route, see <a href="{{ url('/neet-home-tutor-gandhinagar') }}">NEET home tutors in
    Gandhinagar</a>; teachers can find requests on <a href="{{ url('/tuition-jobs/gandhinagar') }}">Gandhinagar
    tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
