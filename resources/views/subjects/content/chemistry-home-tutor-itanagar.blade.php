{{--
  Long-form guide for the "chemistry home tutor Itanagar" page, Classes 11 and 12
  with NEET and JEE (state-capital wave 2, compact depth, subjects writer,
  3 Oct 2026). Byline in config: NXTutors Academic Team.

  Board position: CBSE's affiliation overview lists the government schools of
  Arunachal Pradesh among CBSE-affiliated schools
  (https://saras.cbse.gov.in/saras/attach/CHAPTER_1_CBSE_AN_OVERVIEW.pdf, read
  3 Oct 2026). No state board is named or described.

  Exam facts reuse checked statements in database/seo-content/blog:
  cbse-class-12-chemistry-organicinorganic (70 + 30, 33 questions, chapter marks,
  branch totals 33/23/14, removed and school-assessed topics, practical scheme
  8/8/6/4/4 and the permanganate titration, no calculator or log table, recall
  share), neet-preparation-gurgaon-coaching-or-home-tutor and
  jee-preparation-gurgaon-coaching-or-home-tutor (2026 patterns, +4/-1), and the
  IB chemistry structure/reactivity themes as stated on the Delhi and Patna
  chemistry pages.

  Local facts only from database/seo-content/areas/itanagar-research.json. No
  school, college, institute, society or people's names, no distances or travel
  times, only the allowed fee sentence. Area links render only for active areas.
--}}
@php
  $itcSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $itcA = function (string $slug, string $label) use ($itcSlugs) {
      return in_array($slug, $itcSlugs, true)
          ? '<a href="' . e(url('/city/itanagar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide itc-guide" aria-labelledby="itcGuideTitle">
  <h2 id="itcGuideTitle">Chemistry home tutor in Itanagar: three branches, one board paper and an entrance test to keep in step</h2>

  <p class="nx-guide__lede">
    Chemistry asks a senior student to switch modes every few days: arithmetic-heavy physical chemistry, reaction
    routes in organic, and exact statements in inorganic. In the Itanagar capital region, where CBSE lists the state's
    government schools among its affiliated schools, much Class 11 and 12 chemistry is taught from NCERT and examined
    by CBSE, and some students also have NEET or JEE in view. A home tutor's job is to keep all three
    branches moving at once and to turn understanding into answers that score. NXTutors puts forward two or three
    chemistry tutors who fit your child's course and can reach your part of the capital. You see each fee before
    choosing, and the first lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#itc-exams">Three exams</a> ·
    <a href="#itc-chapters">Chapter marks</a> ·
    <a href="#itc-cut">Dropped topics</a> ·
    <a href="#itc-branches">Branch by branch</a> ·
    <a href="#itc-lab">The practical</a> ·
    <a href="#itc-eleven">Start in Class 11</a> ·
    <a href="#itc-courses">Other courses</a> ·
    <a href="#itc-areas">Five localities</a> ·
    <a href="#itc-fee">Fees</a> ·
    <a href="#itc-send">What to send</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="itc-exams">What does each exam want from chemistry?</h2>
  <p>
    A Class 12 student may be sitting two or three chemistry tests in the same year, and they do not reward the same
    thing.
  </p>
  <ul>
    <li><strong>CBSE Class 12 chemistry (043):</strong> a three-hour, 70-mark theory paper of 33 compulsory questions and a 30-mark practical. It rewards written reasons, balanced equations and tidy numericals. No calculator or log table is allowed.</li>
    <li><strong>NEET (UG), as set in 2026:</strong> chemistry was 45 of the 180 questions and 180 of the 720 marks, on paper, with four marks for a right answer and one taken off for a wrong one. It rewards quick, exact recall of NCERT.</li>
    <li><strong>JEE Main 2026 Paper 1:</strong> chemistry was a third of the 75 questions, twenty with options and five with a numerical answer, marked the same way. It rewards mechanisms and multi-step physical problems.</li>
  </ul>
  <p>
    NTA sets the pattern afresh each year, so check the latest bulletin. Our guides to
    <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">important NEET chemistry chapters</a> and
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE chemistry by branch</a> go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itc-chapters">Which Class 12 chapters carry the most board marks?</h2>
  <p>
    CBSE fixes chemistry marks chapter by chapter, which makes a tutor's plan easy to check. With the 2026-27 design the
    same as last session, the ten theory chapters line up like this:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 chemistry, 2026-27: chapters grouped by branch, their marks and the drill each needs</caption>
    <thead>
      <tr><th scope="col">Branch (total)</th><th scope="col">Chapter and marks</th><th scope="col">Drill that pays</th></tr>
    </thead>
    <tbody>
      <tr><td rowspan="3">Physical (23)</td><td>Electrochemistry, 9</td><td>Cell and conductance numericals with units shown</td></tr>
      <tr><td>Solutions, 7</td><td>Colligative-property problems worked to the end</td></tr>
      <tr><td>Chemical Kinetics, 7</td><td>Rate law, order and half-life questions</td></tr>
      <tr><td rowspan="5">Organic (33)</td><td>Aldehydes, Ketones and Carboxylic Acids, 8</td><td>Named reactions written as conversion chains</td></tr>
      <tr><td>Biomolecules, 7</td><td>Short definitions and structures</td></tr>
      <tr><td>Haloalkanes and Haloarenes, 6</td><td>Substitution against elimination, step by step</td></tr>
      <tr><td>Alcohols, Phenols and Ethers, 6</td><td>Distinguishing tests and preparation routes</td></tr>
      <tr><td>Amines, 6</td><td>Comparing basicity and writing conversions</td></tr>
      <tr><td rowspan="2">Inorganic (14)</td><td>The d- and f-Block Elements, 7</td><td>One clear reason for each trend</td></tr>
      <tr><td>Coordination Compounds, 7</td><td>Naming, isomerism and bonding sketches</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The paper has five lettered sections with a few internal choices, and around two-fifths of it tests recall and
    understanding; the rest asks the student to apply, analyse or evaluate. See our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Class 12 organic and inorganic chemistry
    guide</a> and the <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itc-cut">Which topics have left the board paper, and which still matter for entrance tests?</h2>
  <p>
    Two areas are gone from Class 12 for 2026-27: the solid state, and Groups 15 to 18 of the p-block. Four more are
    still taught but marked only by the school, never on the board paper: surface chemistry, the isolation of elements,
    polymers, and chemistry in everyday life.
  </p>
  <p>
    A student preparing for NEET or JEE should not treat that list as permission to skip. NTA publishes the entrance
    syllabus separately, and material the board has dropped, parts of the p-block among it, can still be examined
    there. Use the board list for board revision only, and the official entrance syllabus for everything else.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itc-branches">How should a home tutor treat each branch?</h2>
  <dl>
    <dt><strong>Physical chemistry: slow down</strong></dt>
    <dd>Students often know the formula and still lose the mark on a unit or a power of ten. The tutor should watch a problem solved line by line, not just check the final number.</dd>
    <dt><strong>Organic chemistry: build a map</strong></dt>
    <dd>One sheet linking each functional group to the next, alcohols to carbonyls to acids to amines, redrawn from memory each week and compared with NCERT. Conversion questions then become routes rather than facts to cram.</dd>
    <dt><strong>Inorganic chemistry: exact wording</strong></dt>
    <dd>NEET in particular rewards the precise NCERT line. Short quizzes straight from the textbook, with the reason behind each trend, work better than long notes.</dd>
  </dl>
  <p>
    End each session with two "give reasons" questions in board style, marked before the tutor leaves, so the board
    paper keeps pace with entrance work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itc-lab">The 30 practical marks</h2>
  <p>
    Titration and salt analysis are worth 8 marks each; an experiment linked to theory content earns 6; the project
    earns 4; and the record and viva together earn the last 4. This session's titration uses a potassium permanganate
    solution against oxalic acid or Mohr's salt, and each student weighs out and makes up that standard solution
    personally. A tutor at home cannot provide glassware, but can rehearse the molarity calculation for the weighed
    sample, a neat burette-reading table, the logic of salt analysis from preliminary to confirmatory tests, a project
    the student can genuinely complete, and viva questions such as why no separate indicator is needed with
    permanganate.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itc-eleven">Why start in Class 11?</h2>
  <p>
    Class 12 chemistry sits on Class 11. The mole concept, equilibrium and the first organic chapters return in
    solutions, electrochemistry and every conversion question, and a weak foundation costs marks a year later in both
    the board paper and the entrance tests. A term spent making those ideas secure is usually cheaper than repairing
    them under board-year pressure. See the <a href="{{ url('/chemistry-home-tutor/class-11') }}">Class 11 chemistry
    tutor</a> page and, for NEET, the <a href="{{ url('/chemistry-home-tutor/neet') }}">NEET chemistry tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itc-courses">ISC, IB or IGCSE chemistry</h2>
  <p>
    For ISC, CISCE pairs the theory paper with practical and project work and expects explanations beyond a single
    line. The IB Diploma course runs at SL and HL under two themes, structure and reactivity, and only the student may
    shape the scientific investigation. Cambridge IGCSE science comes in Core and Extended tiers; our
    <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge and Edexcel IGCSE comparison</a> explains
    the differences. Tutors for these courses are scarce in the capital, so ask early and expect an online specialist
    to be part of the answer.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itc-areas">Chemistry tuition in five localities of the capital</h2>
  <p>
    The <a href="{{ url('/city/itanagar') }}">Itanagar home tutors page</a> has every locality. These five show what
    changes from one part of the highway to another.
  </p>
  <ul>
    <li><strong>{!! $itcA('ganga-market', 'Ganga Market') !!}:</strong> flats above shops on the highway and quarters in the sectors behind. A tutor without a vehicle can come by shared taxi or auto to the market and walk into the sector. Market traffic builds in the evening, so an earlier slot is easier.</li>
    <li><strong>{!! $itcA('niti-vihar', 'Niti Vihar') !!}:</strong> a quiet, mostly residential part of central Itanagar with official compounds whose gates take a visitor's name. Tell the guard in advance; parking is easier than in the market sectors.</li>
    <li><strong>{!! $itcA('barapani', 'Barapani') !!}:</strong> the western entry to Naharlagun, with a market, offices and housing together, so a tutor can reach most homes on foot from the shared-taxi stop. Weekend or earlier slots avoid the evening market stretch.</li>
    <li><strong>{!! $itcA('nirjuli', 'Nirjuli') !!}:</strong> staff quarters on a large technical campus, government housing and private houses near the highway. Campus gates register visitors, and tutors based in Naharlagun often cover Nirjuli the same afternoon.</li>
    <li><strong>{!! $itcA('chimpu', 'Chimpu') !!}:</strong> the northern entry to the city, with much of the land in official campuses and staff quarters. Share the tutor's details with the gate before the first class, and avoid office hours on the highway.</li>
  </ul>
  <p>
    In the weeks before pre-boards, if rain makes a route unreliable, moving one weekly visit online protects the
    revision plan. The <a href="{{ url('/city/itanagar/zone/itanagar-north-chimpu-ganga') }}">Itanagar North</a> zone
    page and the <a href="{{ url('/blog/itanagar-home-tuition-guide') }}">Itanagar home tuition guide</a> add more on
    timing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itc-fee">What does a chemistry home tutor in Itanagar cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor names their
    own rate, which tends to follow the exam targeted, their record with it, the journey to your locality and the
    sessions per week. All fees are shown before the demo; the
    <a href="{{ url('/blog/home-tuition-fees-itanagar') }}">home tuition fees in Itanagar</a> guide lists the questions
    worth asking.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itc-send">What to send us</h2>
  <p>
    The class, the board, the main exam, the branch that is losing marks, your locality and a landmark, whether the
    home is inside an official colony, and the evenings that are free. We send two or three chemistry tutors with
    their fees, and you choose one for the free demo. If the first is not right, a second demo follows, and a later
    change of tutor is free. When no one suitable can travel to you, we suggest an online or part-online plan. Tutors
    who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live.
    The national <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a> page shows how we match elsewhere,
    and <a href="{{ url('/biology-home-tutor-itanagar') }}">biology</a> and
    <a href="{{ url('/physics-home-tutor-itanagar') }}">physics</a> tutors in Itanagar cover the rest of the stream.
  </p>
  <p>
    Chemistry teachers who live in the capital region can browse open requests on
    <a href="{{ url('/tuition-jobs/itanagar') }}">Itanagar tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
