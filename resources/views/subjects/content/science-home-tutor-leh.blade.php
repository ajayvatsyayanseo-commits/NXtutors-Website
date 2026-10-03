{{--
  Long-form guide for the "science home tutor Leh" page, Classes 6 to 10
  (state/UT capitals wave 2, compact depth, subjects writer, 3 Oct 2026).
  Byline in config: Aaditya Kashyap (role: CBSE and ICSE science); role
  statement only, no anecdotes, years or results.

  Board position only from the "board_facts" block of
  database/seo-content/areas/leh-research.json: CBSE's affiliation list
  (https://saras.cbse.gov.in/saras/AffiliatedList/ListOfSchdirReport) has a
  separate entry for Ladakh, with government high and higher secondary schools
  across Leh district on it beside private schools; affiliation is at secondary
  and senior secondary level. No other board, switch year or school count.

  Exam facts reuse checked statements already on the site:
  cbse-class-10-science-notes (80 + 20, internal 5/5/5/5, 39 questions by type,
  biology 30 / chemistry 25 / physics 25, unit marks), the 50/30/20 thinking
  split, the three school-assessed areas, 14 listed experiments, the Class 9
  Exploration unit marks and Curiosity for Classes 6 and 7 as stated on the
  Delhi, Patna and Itanagar science pages; cbse-class-10-board-year-plan-gurgaon
  (two Class 10 exams); ICSE three-paper science as on those pages.

  Local facts only from leh-research.json. Strictly practical: no politics,
  security or tourism; landmarks only to find a home; winter only as timing
  advice. No school, college, society or people's names, no distances or travel
  times, only the allowed fee sentence. Area links render only for active areas.
--}}
@php
  $lhsSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $lhsA = function (string $slug, string $label) use ($lhsSlugs) {
      return in_array($slug, $lhsSlugs, true)
          ? '<a href="' . e(url('/city/leh/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide lhs-guide" aria-labelledby="lhsGuideTitle">
  <h2 id="lhsGuideTitle">Science home tutor in Leh for Classes 6 to 10: NCERT understood, diagrams drawn, answers marked</h2>

  <p class="nx-guide__lede">
    School science changes shape between Class 6 and Class 10. It starts as noticing and describing, and ends as
    three subjects with numericals, balanced equations and labelled diagrams, all examined in one board paper. For
    most Leh children that journey runs through NCERT books, because CBSE's affiliation list has Ladakh as its own
    entry and carries government high and higher secondary schools from across Leh district alongside private ones.
    The tutor you want teaches from those books, marks answers the way CBSE does, and can keep a weekly hour at your
    door in term time and online when winter closes in. NXTutors suggests two or three science tutors who fit, shows
    each fee before you choose, and the opening lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#lhs-years">Year by year</a> ·
    <a href="#lhs-split">Class 10 marks</a> ·
    <a href="#lhs-paper">Paper layout</a> ·
    <a href="#lhs-school">School-marked topics</a> ·
    <a href="#lhs-nine">Class 9</a> ·
    <a href="#lhs-draw">Five drills</a> ·
    <a href="#lhs-icse">ICSE</a> ·
    <a href="#lhs-places">Five localities</a> ·
    <a href="#lhs-winter">Winter</a> ·
    <a href="#lhs-fees">Fees and start</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="lhs-years">How does a science tutor's job change from year to year?</h2>
  <p>
    Aaditya Kashyap writes the CBSE and ICSE science guidance on this page. One point first: CBSE affiliation covers
    the secondary and senior secondary classes, so for Classes 6 to 8 ask the school which books it teaches from.
    Where NCERT is used, the years look like this:
  </p>
  <dl>
    <dt><strong>Classes 6 and 7</strong></dt>
    <dd>NCERT's Curiosity books are built around activities. The tutor's task is to turn each activity into a clear written sentence and a tidy sketch, and to swap everyday words for the scientific ones.</dd>
    <dt><strong>Class 8</strong></dt>
    <dd>Physics, chemistry and biology start to separate, and the first numericals and word equations appear. Units after every number become the rule.</dd>
    <dt><strong>Class 9</strong></dt>
    <dd>A heavier book, with matter, cells and motion all arriving in the same year. Doubts need clearing chapter by chapter, before they stack up.</dd>
    <dt><strong>Class 10</strong></dt>
    <dd>Every chapter aimed at the board paper. By mid-year a timed section should be written at home and marked against the official scheme.</dd>
  </dl>
  <p>
    Until the board year is over, a single science teacher is usually enough: one person sees whether a wrong
    numerical is an arithmetic slip or a misunderstood idea. See the national
    <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page and the
    <a href="{{ url('/science-home-tutor/class-6') }}">Class 6 science tutor</a> page for the first middle-school year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhs-split">Where do the Class 10 science marks come from?</h2>
  <p>
    Three hours and 80 marks make up the board paper. A further 20 come from school, five each for periodic
    tests, multiple assessment, the portfolio and subject enrichment through practicals. Biology carries 30 of the 80,
    with chemistry and physics at 25 apiece. Unit by unit:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science, 2026-27: units, board marks and what an examiner looks for</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">What the examiner looks for</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical Substances (equations, acid–base chemistry, metals, non-metals and carbon)</td><td>25</td><td>Correct formulae and equations balanced without help</td></tr>
      <tr><td>World of Living (life processes, control and coordination, reproduction, heredity)</td><td>25</td><td>Diagrams with accurate labels and the precise term</td></tr>
      <tr><td>Effects of Current (circuits, resistance, magnetic effects)</td><td>13</td><td>Numericals set out with a unit on every line</td></tr>
      <tr><td>Natural Phenomena (light, the human eye, the colourful world)</td><td>12</td><td>Ray diagrams with arrows and correct sign use</td></tr>
      <tr><td>Our Environment</td><td>5</td><td>Short, exact points; easy marks if revised</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    By thinking skill, half the paper tests knowledge and understanding, 30% asks the student to apply ideas and 20%
    to analyse and evaluate. Our <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science
    notes</a> take the chapters one at a time, and the
    <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page sets out the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhs-paper">How is the question paper laid out?</h2>
  <p>
    The 2026-27 sample paper has 39 questions. Each block calls for a different kind of practice at home:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 10 science sample paper, 2026-27: question blocks and how to practise each</caption>
    <thead>
      <tr><th scope="col">Block</th><th scope="col">Questions</th><th scope="col">How to practise</th></tr>
    </thead>
    <tbody>
      <tr><td>One-mark items: multiple-choice and assertion–reason</td><td>20</td><td>Quick recall drills, with the reason behind each answer said aloud</td></tr>
      <tr><td>Two-mark short answers</td><td>6</td><td>Exactly two separate points, not one long sentence</td></tr>
      <tr><td>Three-mark answers</td><td>7</td><td>Three points, with an equation or a small sketch where it helps</td></tr>
      <tr><td>Four-mark case or source questions</td><td>3</td><td>Read the passage or data fully before writing</td></tr>
      <tr><td>Five-mark long answers</td><td>3</td><td>A diagram or equation backed by four or five clear points</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The official sample papers and their marking schemes, posted on cbseacademic before each exam, are the
    practice material to trust. There are now two Class 10 board exams: the first is compulsory, and students who qualify may
    take a second to improve up to three subjects, science included. The 2027 dates were not out when we wrote this,
    so keep checking cbse.gov.in and prepare for the first sitting as if it were final. The
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> lays out the months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhs-school">Which topics does the school mark instead of the board?</h2>
  <p>
    For 2026-27 three areas sit outside the board paper and are assessed in school: the electric motor,
    electromagnetic induction and the generator; evolution; and how elements are arranged in the periodic table. Internal
    marks still depend on them and Class 11 builds on them, so they deserve proper teaching, just not board-revision
    time. Fourteen experiments are listed in the curriculum too, and the paper borrows from them; keep the practical
    notebook in the revision pile.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhs-nine">Why does Class 9 science need fresh notes this year?</h2>
  <p>
    Class 9 now studies from Exploration, NCERT's new textbook, under the 2026-27 curriculum. The year-end exam keeps
    the 80 + 20 shape, and its four units weigh in as follows: matter and how it behaves 27, the living world 25,
    motion, force, work and sound 23, Earth as a system 5. Notes passed down from an older cousin follow the old book, so plan
    from the new chapters instead. There is also an optional one-hour Advanced paper in science, 25 marks and not
    counted in the aggregate, sensible only for a child already at ease with the common paper. The
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhs-draw">Five drills worth repeating every few weeks</h2>
  <p>
    These are where careful students pick up marks and hurried ones drop them:
  </p>
  <ol>
    <li>Mirror and lens ray diagrams: an arrow on each ray, virtual rays dotted.</li>
    <li>Circuit symbols drawn to the standard, ammeters placed in series and voltmeters across the component.</li>
    <li>The heart, the nephron and the digestive system, drawn from memory and labelled with correct spellings.</li>
    <li>Chemical equations balanced, with state symbols wherever the question wants them.</li>
    <li>Heredity crosses written out in full rather than just quoting a ratio.</li>
  </ol>
  <p>
    During the free demo, request a lesson on this week's school chapter and notice whether these habits turn up
    unprompted. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class
    checklist</a> lists more. If the first tutor is not right, the next demo is with another tutor from your shortlist,
    and a later change is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhs-icse">What if your child is on ICSE?</h2>
  <p>
    A few Leh children study under CISCE, often after a family move. At ICSE Class 10 the sciences are examined as three
    papers, each carrying internal marks of its own, and every school picks textbooks within the CISCE syllabus. The tutor must teach from your child's actual books and the CISCE specimen papers.
    Teachers for this course are few in Leh, so an online specialist is often part of the answer.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhs-places">Science lessons in five Leh localities</h2>
  <p>
    Younger students usually have their lesson after school and before the evening meal, so a dependable trip
    matters more than anything else. The <a href="{{ url('/city/leh') }}">Leh home tutors page</a> lists every locality.
  </p>
  <ul>
    <li>{!! $lhsA('changspa', 'Changspa') !!}: a hillside village-locality of family homes, lanes and fields on the town's edge. Give the house name and the nearest lane marker; the lanes are steep, so tutors from the bazaar side usually ride or drive. Early evening is often quieter in summer.</li>
    <li>{!! $lhsA('sankar', 'Sankar') !!}: a quiet residential area just north-west of the town, among trees. House numbers are not always used, so name the monastery lane or a nearby shop as the landmark, and say where a vehicle can stop on the uphill lanes.</li>
    <li>{!! $lhsA('spituk', 'Spituk') !!}: a census town south-west of Leh, reached both from the town and from the Choglamsar side on one of the two circular roads. A main-road landmark helps on the first visit, and an earlier slot avoids the evening build-up towards town in summer.</li>
    <li>{!! $lhsA('saboo', 'Saboo') !!}: a village of homes spread across fields, on the other circular road between Choglamsar and Leh. Share the cluster name, such as Saboothang, and agree where the tutor can park.</li>
    <li>{!! $lhsA('shey', 'Shey') !!}: traditional family houses among fields in the upper Indus valley, east of Leh. Most homes have room to stop a vehicle, and a tutor already teaching in Thiksey or Choglamsar may be able to add Shey to the same trip.</li>
  </ul>
  <p>
    The zone pages for <a href="{{ url('/city/leh/zone/leh-town-centre') }}">Leh Town Centre</a> and
    <a href="{{ url('/city/leh/zone/indus-valley-south-east') }}">the Indus valley south and east</a> add more timing
    notes, as does the <a href="{{ url('/blog/leh-home-tuition-guide') }}">Leh home tuition guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhs-winter">How should science tuition run through the winter?</h2>
  <p>
    Leh's cold season stretches from late November to early March, and early mornings are very cold. Two simple
    adjustments keep the work going. In early winter, move home visits to midday, when it is warmest. During the long
    winter break, switch to online lessons with the same tutor: diagrams and equations travel well if the student
    draws on paper and holds the page up or sends a photo, and the break is the right time for Class 10 sample
    papers. The <a href="{{ url('/online-tutor-leh') }}">online tutors for Leh</a> page explains how to set this up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhs-fees">Fees, and how to start</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their own
    fee. Class 10 is usually priced a little above the middle-school years, and the journey to your village and how
    often you meet also count. Every fee is visible before the demo, and the
    <a href="{{ url('/blog/home-tuition-fees-leh') }}">Leh fees guide</a> lists questions worth asking.
  </p>
  <p>
    Tell us the class and board, the science that is slipping, your locality with a landmark, and the free
    afternoons in term and in winter. Our shortlist names two or three science tutors with their fees; the one you
    choose gives a free demo. When no one suitable can travel at your hour, the suggestion becomes an online or mixed
    plan. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. For the senior years see <a href="{{ url('/physics-home-tutor-leh') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-leh') }}">chemistry</a> and
    <a href="{{ url('/biology-home-tutor-leh') }}">biology</a> tutors in Leh, or the
    <a href="{{ url('/cbse-home-tutor-leh') }}">CBSE home tutors in Leh</a> page for all subjects. Science teachers
    living in and around Leh can find open requests on <a href="{{ url('/tuition-jobs/leh') }}">Leh tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
