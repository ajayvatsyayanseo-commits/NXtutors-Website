{{--
  Long-form guide for the "chemistry home tutor Srinagar" page (Classes 11
  and 12, NEET and JEE alongside coaching, ISC/IB/IGCSE, JKBOSE in general
  terms). Byline in config: NXTutors Academic Team. Local facts come only from
  database/seo-content/areas/srinagar-research.json (zone_facts and area
  "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog: cbse-class-12-chemistry-organicinorganic
  (chapter-wise marks, branch totals 23/14/33, 33 questions in five sections,
  no calculators or log tables, recall share, topics removed and topics
  assessed only in school, practical scheme 8/8/6/4/4, KMnO4 titration
  against oxalic acid or Mohr's salt with the standard solution weighed by
  the student), neet-preparation-gurgaon-coaching-or-home-tutor (NEET UG 2026
  pattern), jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026
  pattern) and cambridge-vs-edexcel-igcse-gurgaon (Cambridge science tiers).
  IB chemistry themes as already stated on the Delhi and Patna pages.
  Jammu and Kashmir Board of School Education: name and Higher Secondary
  examinations, from https://jkbose.jk.gov.in/ (fetched 3 Oct 2026); no
  JKBOSE pattern given. Strictly practical and educational: winter only as
  timing advice. No coaching institute, school, college, hospital, society or
  people's names, no distances or travel times, only the allowed fee
  sentence.

  Area links render only when that Srinagar area page exists and is active.
--}}
@php
  $sgcSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $sgcA = function (string $slug, string $label) use ($sgcSlugs) {
      return in_array($slug, $sgcSlugs, true)
          ? '<a href="' . e(url('/city/srinagar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide sgc-guide" aria-labelledby="sgcGuideTitle">
  <h2 id="sgcGuideTitle">Chemistry home tutor in Srinagar: physical, organic and inorganic, each taught the way it is lost</h2>

  <p class="nx-guide__lede">
    Chemistry tends to go wrong in three different ways. Physical chemistry slips on units and powers of ten; organic
    chemistry turns into a pile of unconnected reactions; inorganic chemistry is lost one forgotten line at a time. A
    Srinagar student in Class 11 or 12 may be meeting all three in school, in a NEET or JEE batch, and in the board's
    own paper, each with its own expectations. A home tutor's value lies in spotting which of the three is hurting
    your child and treating that one first. NXTutors puts forward two or three chemistry tutors suited to your
    child's syllabus and able to reach your locality. You can compare their fees before any meeting, and the opening
    lesson costs nothing.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#sgc-exams">What each exam wants</a> ·
    <a href="#sgc-jk">JKBOSE</a> ·
    <a href="#sgc-weights">CBSE marks</a> ·
    <a href="#sgc-dropped">Removed topics</a> ·
    <a href="#sgc-branches">Fixing each branch</a> ·
    <a href="#sgc-practical">Practical</a> ·
    <a href="#sgc-boards">Other courses</a> ·
    <a href="#sgc-eleven">Starting in Class 11</a> ·
    <a href="#sgc-local">Localities</a> ·
    <a href="#sgc-fees">Fees</a> ·
    <a href="#sgc-request">Shortlist</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="sgc-exams">What does each chemistry exam actually want from your child?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Chemistry papers a Srinagar Class 12 student may face, how big each is, and the skill it pays for</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">Size</th><th scope="col">Pays for</th></tr>
    </thead>
    <tbody>
      <tr><td>JKBOSE Higher Secondary</td><td>Set by the Jammu and Kashmir Board of School Education; scheme on jkbose.jk.gov.in</td><td>Answers written from the prescribed textbook</td></tr>
      <tr><td>CBSE Class 12 (043)</td><td>70 theory marks over 33 compulsory questions in three hours; 30 practical marks</td><td>Reasons in words, balanced equations, tidy numericals</td></tr>
      <tr><td>NEET (UG), 2026 pattern</td><td>45 chemistry questions out of 180; 180 of the 720 marks; pen and paper</td><td>Quick, precise recall of NCERT lines</td></tr>
      <tr><td>JEE Main 2026, Paper 1</td><td>25 chemistry questions out of 75: 20 multiple choice, 5 numerical</td><td>Mechanisms and long physical-chemistry calculations</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Both NTA tests in 2026 marked +4 for a right answer and −1 for a wrong one. The pattern is announced again every
    year, so treat the current bulletin as final. For chapter lists, see
    <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">which NEET chemistry chapters matter most</a>,
    the <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE chemistry branch-by-branch guide</a>,
    and our <a href="{{ url('/chemistry-home-tutor/neet') }}">chemistry tutor for NEET</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgc-jk">Your child studies chemistry on the JKBOSE course: what to look for</h2>
  <p>
    JKBOSE runs the Higher Secondary examinations for Classes 11 and 12 and places its syllabus on its website. Since
    the board decides and revises its own scheme, this page offers no JKBOSE chemistry pattern. In a tutor, look for
    three things: teaching that starts from the book the board prescribes, regular practice on the board's own model or
    past papers, and patience in explaining a reaction in whatever words help before insisting on the textbook's terms
    in writing. A student also sitting NEET or JEE needs the tutor to add NCERT-based recall and timed objective sets as
    well.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgc-weights">How are the CBSE Class 12 chemistry marks spread?</h2>
  <p>
    Unlike most subjects, CBSE assigns chemistry marks to each chapter, so a tutor can plan the year directly from the
    list. For 2026-27 the paper's design is unchanged. Organic chapters total 33 marks, physical 23 and inorganic 14:
  </p>
  <ul>
    <li><strong>Physical, 23:</strong> Electrochemistry 9, Solutions 7, Chemical Kinetics 7. Drill: one or two numericals each session, worked aloud.</li>
    <li><strong>Inorganic, 14:</strong> d- and f-Block Elements 7, Coordination Compounds 7. Drill: trends stated with their reason; IUPAC names and isomers.</li>
    <li><strong>Organic, 33:</strong> Aldehydes, Ketones and Carboxylic Acids 8; Biomolecules 7; Haloalkanes and Haloarenes 6; Alcohols, Phenols and Ethers 6; Amines 6. Drill: conversions as chains, distinguishing tests, and mechanisms written step by step.</li>
  </ul>
  <p>
    Candidates write for three hours in five sections, with internal choice in a handful of questions; calculators and
    log tables are not permitted. Around 40% of the paper is recall and understanding, and the remaining marks need
    application, analysis or evaluation. For a full chapter walk-through, read the
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Class 12 organic and inorganic chemistry guide</a>;
    the <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry tutor</a> page shows how we plan the
    board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgc-dropped">Removed or school-marked topics: safe to skip?</h2>
  <p>
    For the board, partly. In 2026-27 the solid state and the Group 15 to 18 elements of the p-block are no longer in
    the Class 12 syllabus. Surface chemistry, extraction of metals from their ores, polymers and everyday chemistry are
    still taught, but only the school marks them.
  </p>
  <p>
    For entrance exams, not necessarily. NTA publishes its own syllabus, separate from the board's, and some of what the
    board has removed, including parts of the p-block, can still appear. Keep two lists: one for board revision and one
    taken from the official entrance syllabus.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgc-branches">How does a tutor fix each branch when coaching sets the pace?</h2>
  <p>
    The weekly home hour works well when it trails the coaching chapter by a few days and does what a full classroom
    cannot:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Typical weak point in each chemistry branch and the home-session remedy</caption>
    <thead>
      <tr><th scope="col">Branch</th><th scope="col">Typical weak point</th><th scope="col">Home-session remedy</th></tr>
    </thead>
    <tbody>
      <tr><td>Physical</td><td>Formula known, answer wrong by a unit or a factor of ten</td><td>The tutor watches a problem being solved and stops it at the first wrong line</td></tr>
      <tr><td>Organic</td><td>Reactions learnt as separate facts that blur together</td><td>A one-page map from alcohols to carbonyl compounds, acids and amines, rebuilt from memory weekly and checked with NCERT</td></tr>
      <tr><td>Inorganic</td><td>Trends half remembered, reasons missing</td><td>Rapid-fire questions from the textbook text, always with "why?" after the answer</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Finishing each lesson with a couple of board-style "give a reason" questions, corrected on the spot, keeps the
    school paper from falling behind entrance preparation.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgc-practical">What part of the 30-mark practical can be rehearsed at home?</h2>
  <p>
    A surprising amount. The split is: titration 8, salt analysis 8, an experiment linked to the theory syllabus 6,
    project 4, and record with viva 4. This year's titration uses potassium permanganate against either oxalic acid or
    Mohr's salt, and each candidate weighs out and makes up the standard solution alone.
  </p>
  <p>
    No apparatus is needed to practise the calculation of molarity from a weighed mass, to set out burette readings in a
    clean table, to rehearse the sequence of salt-analysis tests from preliminary to confirmatory, to choose a project
    the student can actually complete, or to answer common viva questions, for instance why permanganate needs no extra
    indicator. In Srinagar the long winter break, when lessons often move earlier in the day or online, is a natural
    time to finish this.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgc-boards">Tutors for ISC, IB and IGCSE chemistry</h2>
  <dl>
    <dt><strong>ISC</strong></dt>
    <dd>CISCE combines the theory paper with practical and project assessment, and it expects explanations fuller than one line.</dd>
    <dt><strong>IB Diploma</strong></dt>
    <dd>Offered at SL and HL, with the course arranged around two themes, structure and reactivity. The scientific investigation belongs to the student alone; a tutor can question, never shape it.</dd>
    <dt><strong>Cambridge IGCSE</strong></dt>
    <dd>Science is examined at Core or Extended tier. Our <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge versus Edexcel IGCSE</a> article sets out the differences.</dd>
  </dl>
  <p>
    These specialists are scarcer than CBSE or JKBOSE tutors, so mention the course at once. Where nobody suitable can
    travel, an online specialist can teach while a local tutor checks written work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgc-eleven">Why start in Class 11 rather than wait?</h2>
  <p>
    Much of Class 12 chemistry is built on Class 11 ideas. Moles, equilibrium and early organic reasoning reappear in
    solutions, electrochemistry and almost every conversion, and a weak base there shows up in both the board and the
    entrance results. Repairing it in Class 11 usually takes fewer hours, and so costs less, than a rescue in the
    board year. A quick check in the first month helps: ask your child to calculate the moles in a given mass, write an equilibrium expression and name a simple organic compound. Hesitation on any of the three shows where the early sessions should go. See the <a href="{{ url('/chemistry-home-tutor/class-11') }}">Class 11 chemistry tutor</a> page, or our
    national <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgc-local">Evening chemistry lessons in six Srinagar localities</h2>
  <p>
    Senior students often reach home late, so the tutor's route decides whether an evening slot holds. Six localities
    from the Civil Lines, the west and the south-west show what to plan; the
    <a href="{{ url('/city/srinagar') }}">Srinagar page</a> has the full list.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Srinagar localities: homes, how the tutor arrives, and a timing tip for evening chemistry</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Homes</th><th scope="col">Arrival</th><th scope="col">Timing tip</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $sgcA('jawahar-nagar', 'Jawahar Nagar') !!}</td><td>Houses on equal-sized plots in a planned area by the Jhelum</td><td>At the door, with parking on the street</td><td>Tutors from the Rambagh or Natipora side can use the Gogji Bagh flyover ramp</td></tr>
      <tr><td>{!! $sgcA('lal-chowk', 'Lal Chowk') !!}</td><td>Older homes in lanes behind the business district</td><td>On foot from the main road, using a landmark</td><td>Evening, after shops and offices quieten</td></tr>
      <tr><td>{!! $sgcA('karan-nagar', 'Karan Nagar') !!}</td><td>An older planned area whose Deewan Bagh was declared a civil colony in 1942</td><td>By lane name</td><td>Allow margin; a large institutional campus keeps daytime roads busy</td></tr>
      <tr><td>{!! $sgcA('bemina', 'Bemina') !!}</td><td>Houses in planned colonies on the bypass</td><td>At the door, room to park</td><td>Skip peak hours on the bypass</td></tr>
      <tr><td>{!! $sgcA('sanat-nagar', 'Sanat Nagar') !!}</td><td>Family houses in colony lanes, shops on the main road</td><td>Via the bypass from several sides</td><td>A tutor living in Rawalpora, Chanapora or Hyderpora keeps it steady</td></tr>
      <tr><td>{!! $sgcA('peerbagh', 'Peerbagh') !!}</td><td>Houses in residential lanes on the airport side</td><td>Through the side lanes</td><td>Avoid the morning and early-evening through traffic</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    In the weeks before pre-boards, if one route turns unreliable, switch that visit to an online session rather than
    lose it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgc-fees">How much is a chemistry home tutor in Srinagar?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. The rate is the tutor's
    own and tends to rise with the target exam and the tutor's record in preparing for it; the evening trip and how
    many sessions you book also count, and online lessons can be cheaper. All fees are on the shortlist before the
    demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgc-request">Asking for chemistry tutors</h2>
  <p>
    Share the class, the syllabus, the main exam, the branch where marks go missing, coaching days, your locality with a
    landmark and the evenings that are free. A shortlist of two or three chemistry tutors comes back with fees, and you
    choose one for the free demo. If that first tutor is wrong for your child, the next demo is with someone else on the
    list, and a later change costs nothing. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. Where no one suitable can
    travel to you, we propose online or part-online lessons. NXTutors is based in Sector 66, Gurugram, and teaches
    online throughout India; the <a href="{{ url('/physics-home-tutor-srinagar') }}">physics home tutor in Srinagar</a>
    page covers the companion subject.
  </p>
  <p>
    Chemistry teachers living in Srinagar can see open requests from families near them on the
    <a href="{{ url('/tuition-jobs/srinagar') }}">Srinagar tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
