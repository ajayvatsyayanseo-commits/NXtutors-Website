{{--
  Long-form guide for the "chemistry home tutor Gandhinagar" page (Classes 11
  and 12: GSEB HSC Science in general terms, CBSE, ISC, IB, IGCSE; NEET and
  JEE). Byline in config: NXTutors Academic Team. Local facts come only from
  database/seo-content/areas/gandhinagar-research.json (zone_facts and area
  "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog: cbse-class-12-chemistry-organicinorganic
  (chapter marks, branch totals 33/23/14, five sections, no calculators or
  log tables, recall share, deleted and school-assessed topics, practical
  scheme 8/8/6/4/4, permanganate titration against oxalic acid or Mohr's salt
  with the standard solution weighed by the student),
  neet-preparation-gurgaon-coaching-or-home-tutor (NEET UG 2026 pattern),
  jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern) and
  cambridge-vs-edexcel-igcse-gurgaon (Cambridge science tiers). IB chemistry
  themes as already stated on the Patna and Delhi pages. GSEB: only what
  https://www.gseb.org/ and https://www.gsebeservice.com/ show (read 3 Oct
  2026); no GSEB or GUJCET pattern is given. No coaching institute, school,
  college, society or people's names, no distances or travel times, only the
  allowed fee sentence.

  Area links render only when that Gandhinagar area page exists and is active.
--}}
@php
  $gncSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gncA = function (string $slug, string $label) use ($gncSlugs) {
      return in_array($slug, $gncSlugs, true)
          ? '<a href="' . e(url('/city/gandhinagar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide gnc-guide" aria-labelledby="gncGuideTitle">
  <h2 id="gncGuideTitle">Chemistry home tutor in Gandhinagar: three branches, three habits, and one steady session a week</h2>

  <p class="nx-guide__lede">
    Chemistry asks for three different kinds of thinking. Physical chemistry is careful numerical work, organic
    chemistry is a map of reactions, and inorganic chemistry is exact recall with a reason behind every trend. A Class
    11 or 12 student in Gandhinagar may be writing it for GSEB HSC Science, CBSE, ISC or the IB, and often for NEET or
    JEE in the same year. A home chemistry tutor helps most by knowing which paper matters first and giving each
    branch the habit it needs. For each request NXTutors shortlists two or three chemistry tutors who know the course and can get to your sector
    or locality; their fees are on the list before you meet anyone, and the opening lesson costs nothing.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gnc-exams">Chemistry in each exam</a> ·
    <a href="#gnc-gseb">HSC Science</a> ·
    <a href="#gnc-weight">CBSE chapters by branch</a> ·
    <a href="#gnc-gone">Removed topics</a> ·
    <a href="#gnc-habits">Three habits</a> ·
    <a href="#gnc-lab">Practical exam</a> ·
    <a href="#gnc-base">Class 11</a> ·
    <a href="#gnc-demo">The demo</a> ·
    <a href="#gnc-other">ISC, IB, IGCSE</a> ·
    <a href="#gnc-local">Six localities</a> ·
    <a href="#gnc-fees">Fees</a> ·
    <a href="#gnc-go">Getting matched</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gnc-exams">How does each exam count chemistry?</h2>
  <ul>
    <li><strong>CBSE Class 12 (043):</strong> 33 compulsory questions worth 70 in a paper of three hours, then 30 more from the practical. Marks go to reasoned explanations, equations that balance and tidy calculations.</li>
    <li><strong>NEET (UG), as held in 2026:</strong> 45 of the 180 questions, worth 180 of 720 marks, answered on paper. It rewards fast, exact recall of NCERT statements.</li>
    <li><strong>JEE Main, Paper 1 as set in 2026:</strong> one-third of the 75 questions, that is 25, with 5 of them needing a numerical answer and the rest multiple-choice. It rewards mechanisms and multi-step physical chemistry.</li>
    <li><strong>GSEB HSC Science:</strong> set by the Gujarat board, which publishes its own papers and question-paper designs.</li>
  </ul>
  <p>
    In both NTA exams in 2026 a correct answer earned four marks and a wrong one cost one. NTA issues the pattern
    afresh each year, so read the latest bulletin. Our guide to the
    <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">NEET chemistry chapters that matter most</a> and the
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">physical, organic and inorganic JEE plan</a>
    help with priorities, and <a href="{{ url('/chemistry-home-tutor/neet') }}">chemistry tutors for NEET</a>
    explains how we match for the medical entrance.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnc-gseb">What should a GSEB HSC Science student look for?</h2>
  <p>
    The Gujarat Secondary and Higher Secondary Education Board has its seat in Gandhinagar and conducts the HSC
    examination for the Science stream at the end of Standard 12. On gsebeservice.com it posts past question papers
    for Standard 12 Science and its notices on question-paper design, and gseb.org links a subject-wise question bank
    for Standards 9 to 12. We give no GSEB chemistry pattern here because the board revises its design; take it from
    the latest notice.
  </p>
  <p>
    Ask for a tutor who teaches from the board's textbook in your child's medium, sets practice from the board's own
    papers, and insists on balanced equations and named reagents in every answer. If GUJCET is part of the plan, its
    rules should come only from the board's official notices. Our
    <a href="{{ url('/gujarat-board-tutor-gandhinagar') }}">Gujarat Board tutor page for Gandhinagar</a> has more on
    SSC and HSC.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnc-weight">How are the CBSE Class 12 chemistry marks shared out?</h2>
  <p>
    CBSE gives every chemistry chapter its own number of marks, and the 2026-27 design is the same as
    last session's. Here are the ten theory chapters under their branches, smallest first:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 chemistry, 2026-27: chapters and marks grouped by branch</caption>
    <thead>
      <tr><th scope="col">Branch</th><th scope="col">Total</th><th scope="col">Chapters (marks)</th></tr>
    </thead>
    <tbody>
      <tr><td>Organic</td><td>33</td><td>Amines, 6 marks; Alcohols, Phenols and Ethers, 6 marks; Haloalkanes and Haloarenes, 6 marks; Biomolecules, 7 marks; Aldehydes, Ketones and Carboxylic Acids, 8 marks</td></tr>
      <tr><td>Physical</td><td>23</td><td>Chemical Kinetics, 7 marks; Solutions, 7 marks; Electrochemistry, 9 marks</td></tr>
      <tr><td>Inorganic</td><td>14</td><td>Coordination Compounds, 7 marks; d- and f-Block Elements, 7 marks</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    No other chapter outweighs electrochemistry. Candidates face five sections, labelled A to E, over three hours;
    internal choice appears in only a handful of questions, and the hall allows no calculator and no log table. About
    two-fifths of the marks reward remembering and understanding, and the remainder need application, analysis or
    evaluation. For chapter-level notes, read
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">our Class 12 chemistry guide</a>; the
    <a href="{{ url('/chemistry-home-tutor/class-12') }}">chemistry tutor for Class 12</a> page plans the board
    year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnc-gone">What has been removed, and what is only marked in school?</h2>
  <p>
    Two blocks have left the 2026-27 Class 12 course entirely, namely the p-block groups numbered 15 to 18 and the
    chapter on solids. A further four sit in the school's hands: they are taught, and the school marks them, but the
    board paper never asks about polymers, everyday-life chemistry, surface chemistry or how elements are extracted.
    NTA publishes the NEET and JEE syllabi on its own, and dropped board material, including some p-block content, may
    still be tested there. So a board-only cut list is for the board paper; for entrance work, read the NTA syllabus
    first.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnc-habits">What habit should a tutor build in each branch?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>One habit per branch, how a tutor builds it, and how a parent can tell it is working</caption>
    <thead>
      <tr><th scope="col">Branch</th><th scope="col">Habit</th><th scope="col">How the tutor builds it</th><th scope="col">Sign of progress</th></tr>
    </thead>
    <tbody>
      <tr><td>Physical</td><td>Units and powers of ten on every line</td><td>Watches one or two numericals solved in full, without interrupting until the end</td><td>Fewer answers right in method but wrong in size</td></tr>
      <tr><td>Organic</td><td>A single reaction map</td><td>Functional groups joined on one sheet, redrawn from memory weekly and checked against NCERT</td><td>Conversion questions answered as routes, not guesses</td></tr>
      <tr><td>Inorganic</td><td>Exact lines with a reason</td><td>Short oral quizzes straight from the textbook, always asking why a trend runs that way</td><td>Trend questions answered in one clear sentence</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    If your child also attends an entrance class, the home session should follow that week's chapter rather than run
    ahead of it, and end with two board-style "give reasons" questions marked before the tutor leaves. That way the
    board paper never falls behind.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnc-lab">How much of the 30-mark practical can be prepared at home?</h2>
  <p>
    A good deal. The scheme gives 8 marks to the titration, 8 to salt analysis, 6 to a content-based experiment, 4 to
    the project, and 4 to the record and viva together. In this session students titrate potassium permanganate with
    either oxalic acid or Mohr's salt, and each one has to weigh out and make the standard solution alone. At the
    kitchen table, with no burette in sight, a tutor can still practise:
  </p>
  <ul>
    <li>the molarity calculation from the weighed mass;</li>
    <li>a neat burette-reading table that leads to the result;</li>
    <li>salt analysis as a chain of reasoning: what each early test rules out, and which test confirms the ion;</li>
    <li>a project topic the student can genuinely manage;</li>
    <li>likely viva questions: for example, what tells you the end point when permanganate acts as its own indicator?</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnc-base">Why fix Class 11 chemistry first?</h2>
  <p>
    Almost every Class 12 chapter leans on something from Class 11: moles and concentration for solutions,
    equilibrium for electrochemistry, and the first organic chapters for every conversion. Weak spots there resurface
    in both the board and entrance papers. Fixing them while Class 11 is still running takes less time and money than
    a rescue in Class 12. More on the <a href="{{ url('/chemistry-home-tutor/class-11') }}">chemistry tutor for Class
    11</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnc-demo">What should you look for in the free chemistry demo?</h2>
  <p>
    Bring your child's latest test or a page of coaching notes, and ask the tutor to start from it. In one class you
    should see four things: a quick check of what your child already knows; at least one numerical or conversion
    worked by your child, not by the tutor; an explanation of why an answer lost marks, in the language of the board
    paper; and a clear plan for the next few weeks, with homework the tutor will mark. Not convinced? Ask
    for a demo with another tutor from the list. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> adds more
    questions to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnc-other">ISC, IB and IGCSE chemistry</h2>
  <p>
    <strong>ISC:</strong> besides the written paper, CISCE marks practical work and a project, and examiners look for
    reasoning that goes past a one-line textbook answer. <strong>IB Diploma:</strong> SL or HL, with the content
    arranged under the twin themes of structure and of reactivity; the student alone shapes the scientific
    investigation, so a tutor can question but not write. <strong>Cambridge IGCSE:</strong> Core or Extended tier
    papers, compared with Edexcel in our <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">IGCSE board
    comparison</a>. Specialists for these three are fewer than for CBSE or GSEB, so ask early, and consider
    an online specialist paired with a local tutor who marks written work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnc-local">How does your sector shape an evening chemistry class?</h2>
  <p>
    Six localities from different parts of the grid show the practical differences. Our
    <a href="{{ url('/city/gandhinagar') }}">Gandhinagar page</a> covers the rest.
  </p>
  <dl>
    <dt><strong>{!! $gncA('sector-21', 'Sector 21') !!}</strong></dt>
    <dd>Independent houses behind a shopping area of showrooms, restaurants and a cinema. Akshardham station was planned to serve the market. The shops get busy in the evening, so a fixed weekday hour and an approach by the quieter internal roads help.</dd>
    <dt><strong>{!! $gncA('sectors-16-22-23', 'Sectors 16, 22 and 23') !!}</strong></dt>
    <dd>Government offices in 16, flats and houses in 22 and 23, and Sector-16 station since January 2026. In a flat, expect the tutor to sign in at the entrance; give the block letter and house number.</dd>
    <dt><strong>{!! $gncA('sectors-25-26', 'Sectors 25 and 26') !!}</strong></dt>
    <dd>Homes in 25 and the state industrial estate in 26, with Sector-24 station next door. Estate working hours make the roads busier, so early evening or weekends suit.</dd>
    <dt><strong>{!! $gncA('sectors-6-7-8', 'Sectors 6, 7 and 8') !!}</strong></dt>
    <dd>Original-grid sectors of independent houses. A junction name such as JA-1 with block and plot number guides the tutor, and parking at the gate is easy.</dd>
    <dt><strong>{!! $gncA('sectors-2-3', 'Sectors 2 and 3') !!}</strong></dt>
    <dd>Independent and duplex houses in lettered blocks such as 2C, close to Sector-1 and Infocity stations. Choose a slot outside the office rush towards Infocity.</dd>
    <dt><strong>{!! $gncA('infocity', 'Infocity') !!}</strong></dt>
    <dd>The IT office district, with homes around it in nearby sectors and former villages. Apartment buildings register the tutor's name at the gate; late afternoon or weekend slots run more smoothly than office hours.</dd>
  </dl>
  <p>
    Close to the pre-boards, if a route turns unreliable, switch one weekly visit to an online lesson so the
    revision plan holds.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnc-fees">What does a chemistry home tutor in Gandhinagar cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Rates are the tutor's
    own. A JEE Advanced or IB HL focus pushes them up, as does long experience with that paper; an evening journey
    across the grid and extra weekly sessions add to the total, while an online hour may be quoted lower. You see all
    of it on the shortlist, before any demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gnc-go">How do you start?</h2>
  <p>
    Write to us with your child's class, board and medium, the exam that matters most, the branch where marks leak,
    the evenings already taken by an entrance class, your sector and block (or locality and a landmark) and the
    evenings that are free. A shortlist of two or three chemistry tutors comes back with each fee, and you pick one
    for the free demo; a mismatch simply means a demo with the next name, and a later change of tutor is free too.
    When nobody on the list can travel to you, we propose lessons online or a mix of the two. Our office is in
    Sector 66, Gurugram, and online classes run all over India; the national
    <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a> page explains our matching, and the
    <a href="{{ url('/physics-home-tutor-gandhinagar') }}">physics home tutor in Gandhinagar</a> page covers the
    sister subject.
  </p>
  <p>
    If you teach chemistry and live in Gandhinagar, current student requests are listed on the
    <a href="{{ url('/tuition-jobs/gandhinagar') }}">Gandhinagar tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
