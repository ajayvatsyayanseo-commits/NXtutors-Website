{{--
  Long-form guide for the "science home tutor Agartala" page (Classes 6 to 10;
  TBSE, CBSE and ICSE). Byline in config: Aaditya Kashyap; role statement only
  (CBSE and ICSE science), no anecdotes. Page writer, capitals wave 2
  (subjects), 3 Oct 2026.

  Local facts only from database/seo-content/areas/agartala-research.json.
  Tripura board facts only from tbse.tripura.gov.in (read 3 Oct 2026):
  - https://tbse.tripura.gov.in/sites/default/files/SCIENCE_1.pdf : Class X
    Science syllabus 2024-25: 80 marks + 20 internal assessment; Biology 30,
    Physics 25, Chemistry 25; separate blueprints for the half-yearly
    examination and for the pre-board / board final examination; question
    types MCQ (1), VSA (1), SA (2), LA (3, 4, 5 marks); physics units Natural
    Phenomena (light; the human eye) and Effects of Current (electricity;
    magnetic effects); chemistry: chemical reactions and equations; acids,
    bases and salts; metals and non-metals; carbon and its compounds; biology:
    life processes; control and coordination; how organisms reproduce;
    heredity and evolution; our environment.
  - https://tbse.tripura.gov.in/sites/default/files/TBSE_Notification_Syllabus_18_08_2026_20260818_0001.pdf :
    2025-26 syllabi for Classes IX-XII remain in force for 2026-27.
  - https://tbse.tripura.gov.in/ : Madhyamik (Secondary) examination; notice on
    permission for appearing at the pre-board examination.
  CBSE and ICSE facts reuse the checked statements already on the Patna and
  Raipur science pages (database/seo-content/blog/cbse-class-10-science-notes:
  39 questions by type; cbse-class-10-board-year-plan-gurgaon: two Class 10
  exams; 2026-27 school-assessed topics; Class 9 common paper and optional
  Advanced paper; ICSE science as three papers).
  No school, college, society or people's names (except the author), no
  distances or travel times, only the allowed fee sentence.
  Area links render only when that Agartala area page exists and is active.
--}}
@php
  $agsSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $agsA = function (string $slug, string $label) use ($agsSlugs) {
      return in_array($slug, $agsSlugs, true)
          ? '<a href="' . e(url('/city/agartala/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ags-guide" aria-labelledby="agsGuideTitle">
  <h2 id="agsGuideTitle">Science home tutor in Agartala: three subjects in one book, taught the way your board marks them</h2>

  <p class="nx-guide__lede">
    Up to Class 10, science is biology, chemistry and physics bound into one textbook, and a child can be strong in one
    and quietly lost in another. In Agartala the paper at the end may be the Tripura board's Madhyamik, a CBSE board
    exam or an ICSE paper, and each splits its marks differently. NXTutors sends two or three science tutors matched to
    your child's class, board and locality. You see their fees first, and the opening lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ags-stages">Class by class</a> ·
    <a href="#ags-tbse">TBSE Class X</a> ·
    <a href="#ags-chapters">Chapter map</a> ·
    <a href="#ags-cbse">CBSE Class 10</a> ·
    <a href="#ags-nine">Class 9</a> ·
    <a href="#ags-icse">ICSE</a> ·
    <a href="#ags-habits">Habits</a> ·
    <a href="#ags-places">Localities</a> ·
    <a href="#ags-fees">Fees</a> ·
    <a href="#ags-ask">Your request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ags-stages">What should a science tutor do at each stage?</h2>
  <p>
    The CBSE and ICSE notes on this page are written by Aaditya Kashyap, who teaches science on those boards. The
    tutor's job changes a good deal between Class 6 and Class 10:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Science tuition from Class 6 to Class 10: the aim at each stage and what a parent should see</caption>
    <thead>
      <tr><th scope="col">Classes</th><th scope="col">Main aim</th><th scope="col">What you should see</th></tr>
    </thead>
    <tbody>
      <tr><td>6 and 7</td><td>Curiosity and careful reading</td><td>Simple activities at the table, new words explained, short written answers</td></tr>
      <tr><td>8</td><td>Ideas that return later: cells, force, materials</td><td>Labelled diagrams and a vocabulary notebook</td></tr>
      <tr><td>9</td><td>The step up in physics and chemistry</td><td>Numericals with units; equations balanced by habit</td></tr>
      <tr><td>10</td><td>The board paper</td><td>Blueprint-based practice, timed answers, marked against the board's scheme</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    National detail for each year is on the <a href="{{ url('/science-home-tutor/class-6') }}">Class 6</a>,
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9</a> and
    <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ags-tbse">How does the Tripura board mark Class X science?</h2>
  <p>
    The Tripura Board of Secondary Education's Class X science syllabus sets an 80-mark written paper and 20 marks of
    internal assessment. Within the 80, biology carries 30, physics 25 and chemistry 25. The board has kept the 2025-26
    syllabi in force for 2026-27, so the copy on <a href="https://tbse.tripura.gov.in/" rel="noopener">tbse.tripura.gov.in</a>
    is the one to work from.
  </p>
  <p>
    Two features of the TBSE document are worth a tutor's attention. First, it gives separate blueprints for the
    half-yearly examination and for the pre-board and board final examination, so a student knows which chapters
    each exam draws on and how many questions of each type to expect. Second, each blueprint lists questions by mark
    value, from one-mark multiple-choice and very short answers up to long answers of three, four and five marks. A
    tutor who builds practice papers from that blueprint, rather than from a guidebook, prepares a child for the
    paper that will actually be set. Our <a href="{{ url('/tripura-board-tutor-agartala') }}">Tripura Board tutor
    page</a> covers the Madhyamik year across subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ags-chapters">Class X science chapter by chapter: where children lose marks</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>TBSE Class X science chapters by strand, with the habit a tutor should build in each</caption>
    <thead>
      <tr><th scope="col">Strand (marks)</th><th scope="col">Chapters</th><th scope="col">Habit to build</th></tr>
    </thead>
    <tbody>
      <tr><td>Biology (30)</td><td>Life processes; control and coordination; how organisms reproduce; heredity and evolution; our environment</td><td>Diagrams drawn and labelled from memory; processes written as ordered steps</td></tr>
      <tr><td>Chemistry (25)</td><td>Chemical reactions and equations; acids, bases and salts; metals and non-metals; carbon and its compounds</td><td>Balanced equations every time; naming carbon compounds by their functional group</td></tr>
      <tr><td>Physics (25)</td><td>Light, reflection and refraction; the human eye and the colourful world; electricity; magnetic effects of current</td><td>Sign conventions in mirror and lens problems; circuit diagrams before calculation</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A CBSE family will recognise these chapter names, which helps when a child changes board in Class 9 or 10. Even
    so, a Madhyamik candidate should practise from the TBSE blueprint, model papers and the textbook prescribed by the
    school.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ags-cbse">How is the CBSE Class 10 science paper built?</h2>
  <p>
    The 2026-27 CBSE sample paper has 39 questions for 80 marks. It opens with twenty one-mark items, some
    multiple-choice and some assertion–reason, then six two-mark answers, seven three-mark answers, three case-based
    questions of four marks and three long answers of five. The school adds 20 internal marks. Each question type needs
    its own practice: one-mark items reward exact recall, a short answer needs as many points as it has marks, and a
    case question must be read through before anything is written.
  </p>
  <p>
    In 2026-27, three areas are assessed by the school rather than on the board paper: how motors, generators and
    electromagnetic induction work; evolution; and how the periodic table orders the elements. They still matter for
    Class 11. Class 10 students sit one compulsory board exam and may take a second to improve up to three subjects,
    science included. Our <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> go
    chapter by chapter, and <a href="{{ url('/cbse-home-tutor-agartala') }}">CBSE home tutors in Agartala</a> covers
    the board as a whole.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ags-nine">Why Class 9 deserves a tutor's attention</h2>
  <p>
    Class 9 is where science stops being mostly descriptive. There are more equations to handle, more formulae to
    write correctly and more detailed diagrams to label, and the habits formed that year carry straight into the
    board paper. A child who coasts through Class 9 usually pays for it in Class 10.
  </p>
  <p>
    In CBSE schools, every Class 9 student sits a common science paper, and may also opt for a one-hour, 25-mark
    Advanced paper of higher-order questions; those marks stay out of the aggregate. Choose it only if your child
    already finds science easy. On the Tripura board, Class IX is also the year of board registration, done through
    the school, so it is a good moment to settle the school's subject choices and a steady weekly routine. A short test
    at the end of each chapter, marked by the tutor and kept in a folder, gives you and the school a clear record of
    which topics need another look before Class X begins.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ags-icse">What about ICSE science?</h2>
  <p>
    ICSE examines physics, chemistry and biology as three separate papers, each with its own practical work. A tutor
    has to keep three sets of definitions, diagrams and numericals moving at once, and many ICSE families split the
    subjects between two tutors, one for physics and chemistry and one for biology. ICSE specialists are fewer in
    Agartala than TBSE or CBSE teachers, so an <a href="{{ url('/online-tutor-agartala') }}">online tutor</a> can be
    the practical answer for one of the three.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ags-habits">Five habits a good science tutor builds</h2>
  <ol>
    <li><strong>Read the question twice.</strong> Most "silly" errors in science are reading errors: a missed "not", a unit in centimetres, a question about a plant rather than an animal.</li>
    <li><strong>Draw first.</strong> A labelled diagram earns marks and also organises the answer that follows it.</li>
    <li><strong>Units from line one.</strong> In physics and chemistry numericals, a missing unit loses marks that the working had earned.</li>
    <li><strong>Equations balanced, always.</strong> Unbalanced equations cost marks in every chemistry chapter.</li>
    <li><strong>Mark-sized answers.</strong> A three-mark answer should make three separate, clear points.</li>
  </ol>
  <p>
    A typical home session puts those habits to work in a fixed order. It starts with quick recall on last week's
    chapter, with the book closed. Next comes the chapter the school is on, taught with a diagram or a small
    demonstration where one helps. Then the child writes one board-style answer, which the tutor marks against the
    board's scheme, and the session closes with a short, checkable homework set. Before the half-yearly and pre-board
    exams, the middle part gives way to timed papers built from the blueprint.
  </p>
  <p>
    If your child is heading for science in Class 11, the same tutor can begin the bridge to
    <a href="{{ url('/physics-home-tutor-agartala') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-agartala') }}">chemistry</a> in the last months of Class 10.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ags-places">Science tuition in five Agartala localities</h2>
  <p>
    Tutors in Agartala mostly come by two-wheeler, auto or city bus. A tutor from your own zone is usually the easiest
    to keep on a fixed weekly slot. Every locality is on the <a href="{{ url('/city/agartala') }}">Agartala page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Five Agartala localities: where nearby tutors come from, and one tip for the first science lesson</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Zone</th><th scope="col">Nearby tutor pool</th><th scope="col">First-visit tip</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $agsA('indranagar', 'Indranagar') !!}</td><td>North</td><td>Abhoynagar, Kunjaban, Dhaleswar, Banamalipur</td><td>Use the temple as a lane landmark; plan around the Diwali fair days</td></tr>
      <tr><td>{!! $agsA('banamalipur', 'Banamalipur') !!}</td><td>Central</td><td>Krishnanagar, Dhaleswar, Indranagar</td><td>Say whether it is a house or a flat with a building gate</td></tr>
      <tr><td>{!! $agsA('joynagar', 'Joynagar') !!}</td><td>Central</td><td>Ramnagar, Krishnanagar, Melarmath</td><td>Give a lane landmark rather than the busy bazaar; avoid the evening rush</td></tr>
      <tr><td>{!! $agsA('jogendranagar', 'Jogendranagar') !!}</td><td>East</td><td>Shibnagar, Dhaleswar, the central wards</td><td>Name your Jogendranagar ward and a landmark near Station Road</td></tr>
      <tr><td>{!! $agsA('arundhutinagar', 'Arundhutinagar') !!}</td><td>South</td><td>Badharghat, Pratapgarh and other southern wards</td><td>Say which part you live in, since the locality spans two wards</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Zone guides: <a href="{{ url('/city/agartala/zone/north-agartala') }}">North</a>,
    <a href="{{ url('/city/agartala/zone/central-agartala') }}">Central</a>,
    <a href="{{ url('/city/agartala/zone/east-agartala') }}">East</a> and
    <a href="{{ url('/city/agartala/zone/south-agartala') }}">South Agartala</a>. In the monsoon or on festival days,
    an online session agreed in advance keeps the week on track; the
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online comparison</a> sets out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ags-fees">What does a science tutor cost in Agartala?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    fees, and each one is shown before the demo. Class, board, the tutor's experience and the trip to your ward all
    affect it. See the <a href="{{ url('/blog/home-tuition-fees-agartala') }}">Agartala home tuition fees guide</a>
    and the <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ags-ask">How to ask for a science tutor</h2>
  <p>
    Tell us the class, the board (TBSE, CBSE or ICSE), which of the three sciences worries you most, your locality with a
    landmark, and the days that suit. We send two or three matched tutors with their fees, and you pick one for a
    <a href="{{ url('/demo-class') }}">free demo class</a>. If the fit is wrong, we arrange another demo, and switching
    later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>; you can also
    browse <a href="{{ url('/tutors') }}">tutor profiles</a>. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> helps you judge the first
    lesson, the national <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page shows how we match
    elsewhere, and the <a href="{{ url('/blog/agartala-home-tuition-guide') }}">Agartala home tuition guide</a> covers
    the city. Science teachers in Agartala can find students on
    <a href="{{ url('/tuition-jobs/agartala') }}">Agartala tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
