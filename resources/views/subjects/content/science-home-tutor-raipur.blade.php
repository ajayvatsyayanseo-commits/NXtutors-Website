{{--
  Long-form guide for the "science home tutor Raipur" page (Classes 6 to 10,
  CBSE, ICSE and the Chhattisgarh board in general terms). Byline in config:
  Aaditya Kashyap; role statement only, no anecdotes. Local facts come only
  from database/seo-content/areas/raipur-research.json (zone_facts and area
  "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog/cbse-class-10-science-notes (80 + 20, 39
  questions by type, 30/25/25 split, unit marks, internal 5/5/5/5) and
  cbse-class-10-board-year-plan-gurgaon (two Class 10 exams), plus the
  50/30/20 competency split, school-assessed topics, 14 listed experiments,
  Class 9 Exploration unit marks, Curiosity for Classes 6 and 7, and ICSE
  three-paper science as already stated on the Delhi, Faridabad and Patna
  science pages.
  State board: Chhattisgarh Board of Secondary Education, office in Raipur,
  conducts the High School (Class 10) examination -- per https://cgbse.nic.in/
  (fetched 3 Oct 2026). No CGBSE exam pattern is stated.
  No school, college, society or people's names, no distances or travel
  times, only the allowed fee sentence.

  Area links render only when that Raipur area page exists and is active.
--}}
@php
  $rpsSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $rpsA = function (string $slug, string $label) use ($rpsSlugs) {
      return in_array($slug, $rpsSlugs, true)
          ? '<a href="' . e(url('/city/raipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide rps-guide" aria-labelledby="rpsGuideTitle">
  <h2 id="rpsGuideTitle">Science home tutor in Raipur, Classes 6 to 10: your school's textbook, a steady weekday slot, and answers shaped for the examiner</h2>

  <p class="nx-guide__lede">
    A Class 6 science lesson is mostly looking and describing; by Class 10 the same subject has split into physics,
    chemistry and biology, each asking for numericals, balanced equations or labelled drawings. In Raipur, children meet that shift through different
    books: NCERT for CBSE, the texts each ICSE school picks, or the books prescribed for the Chhattisgarh board. The tutor you want teaches from the copy your child brings home, turns up
    on the agreed afternoon week after week, and trains board-style writing from the middle-school years onward. We
    send a shortlist of two or three such science teachers, with fees shown ahead of any meeting, and the opening
    session is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#rps-stages">Class by class</a> ·
    <a href="#rps-cg">Chhattisgarh board</a> ·
    <a href="#rps-marks">Class 10 marks</a> ·
    <a href="#rps-paper">The 39 questions</a> ·
    <a href="#rps-inschool">School-marked topics</a> ·
    <a href="#rps-nine">Class 9 book</a> ·
    <a href="#rps-icse">ICSE</a> ·
    <a href="#rps-habits">Five habits</a> ·
    <a href="#rps-homes">Six localities</a> ·
    <a href="#rps-fee">Fees</a> ·
    <a href="#rps-ask">How to ask</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="rps-stages">How does the tutor's job change from Class 6 to Class 10?</h2>
  <p>
    The CBSE and ICSE notes below are written by Aaditya Kashyap. Put simply, what you need from a science tutor
    shifts every year or two, and so does the sign that it is working:
  </p>
  <dl>
    <dt><strong>Classes 6 and 7</strong></dt>
    <dd>Activities fill the pages, whether the book is NCERT's <em>Curiosity</em> or a school's own choice. After each one, the child should be able to write what happened in a proper sentence and draw it with labels. Check: does your child now use the proper scientific word?</dd>
    <dt><strong>Class 8</strong></dt>
    <dd>Physics, chemistry and biology begin to separate, and the first numericals and word equations appear. Check: is there a unit after every number?</dd>
    <dt><strong>Class 9</strong></dt>
    <dd>Difficulty jumps: graphs of motion, how matter behaves and cell structure all land within a few months of each other. Check: are weak spots repaired within the month, not left for the exam?</dd>
    <dt><strong>Class 10</strong></dt>
    <dd>Teaching points at the board exam and how it is marked. Check: has a full section been attempted against the clock, at the desk, without notes?</dd>
  </dl>
  <p>
    Until Class 10, a single tutor for all three sciences is usually the sensible choice. One person sees the whole
    picture and can tell when a physics numerical is failing because of the arithmetic rather than the physics. Matching is described on the national
    <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page; for younger children see
    <a href="{{ url('/science-home-tutor/class-6') }}">science tuition in Class 6</a> and
    <a href="{{ url('/science-home-tutor/class-8') }}">science tuition in Class 8</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rps-cg">Science for a student on the Chhattisgarh board</h2>
  <p>
    The Chhattisgarh Board of Secondary Education, whose office is in Raipur, conducts the state's High School
    examination at the end of Class 10. It publishes its own syllabus and scheme of marking and can change them
    between sessions, so this page does not describe its science paper. Before a plan is drawn up, the tutor and
    family should read the current version on cgbse.nic.in.
  </p>
  <p>
    Matching a tutor does not depend on the pattern. Three questions settle it: is the teaching in Hindi, English or both, matching the
    language of your child's answer sheet; are exercises drawn from the prescribed book and from question papers the
    board publishes; and do drawings and equations get drilled every week? Three yeses make a sound choice for a CGBSE
    student.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rps-marks">CBSE Class 10 science: which units carry the 80 board marks?</h2>
  <p>
    The board exam lasts three hours and is marked out of 80. The school adds 20 more, made up of four equal parts of
    5: periodic tests, multiple assessment, the portfolio, and subject enrichment through practical work. By subject,
    biology holds 30 of the 80, and chemistry and physics hold 25 each.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Five Class 10 units in the 2026-27 CBSE curriculum, ranked by board weight, with one routine per unit</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">What it covers</th><th scope="col">Weekly habit</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical Substances</td><td>25</td><td>Chemical reactions, acid–base–salt chemistry, metals versus non-metals, and carbon and its compounds</td><td>Balance and name five equations from memory</td></tr>
      <tr><td>World of Living</td><td>25</td><td>Life processes, control and coordination, reproduction, heredity</td><td>Draw one labelled diagram without looking</td></tr>
      <tr><td>Effects of Current</td><td>13</td><td>Circuits, resistance, the magnetic effect of current</td><td>Two numericals, units written on every line</td></tr>
      <tr><td>Natural Phenomena</td><td>12</td><td>Light, the human eye and the colourful world</td><td>One ray diagram with arrows on each ray</td></tr>
      <tr><td>Our Environment</td><td>5</td><td>A short chapter</td><td>A quick revision now and then, so it is never skipped</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Looked at by thinking skill, half the paper rewards knowledge and understanding, three-tenths rewards application,
    and the last fifth asks for analysis and evaluation. The
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> take each chapter in turn,
    and our <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page shows how a board year
    is planned.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rps-paper">How should a child prepare for each type among the 39 questions?</h2>
  <p>
    There are 39 questions on the 2026-27 CBSE sample paper. The first block holds twenty items at one mark each,
    some with four options and some pairing an assertion with a reason. After that the paper offers six short answers worth two marks, seven worth three, three source- or case-based
    questions worth four, and three long answers worth five. Each block needs its own kind of practice. One-mark items
    reward fast, exact recall. A short answer should contain as many separate points as it has marks. In a case-based
    question the passage or data must be read before anything is written. For five marks, plan a drawing or equation and
    then four or five separate points. For practice, nothing beats the sample papers and marking schemes CBSE posts on
    cbseacademic.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rps-inschool">Which topics are left to the school, and what about the second exam?</h2>
  <p>
    In 2026-27 three areas stay off the board paper and go to school assessment: how motors, generators and
    electromagnetic induction work; evolution; and the way the periodic table orders the elements. Skipping them would
    be a mistake, because internal marks use them and Class 11 builds on them; simply leave them out of board revision.
    A list of 14 experiments in the curriculum feeds board questions too, so the practical notebook is revision
    material.
  </p>
  <p>
    All Class 10 students write the main board exam. Those who are eligible may sit an optional second exam to improve
    up to three subjects, and science is one of them. No 2027 dates have been announced; keep an eye on cbse.gov.in
    and treat the main sitting as the one that counts. The
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year plan</a> sets out the months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rps-nine">Why might Class 9 notes from an older sibling not fit?</h2>
  <p>
    For 2026-27, CBSE's Class 9 course follows NCERT's new book, <em>Exploration</em>. The year-end exam keeps the 80 plus 20
    split, and its four units weigh in as follows: matter and its behaviour at 27, the living world at 25, the unit on
    motion, force, work and sound at 23, and Earth as a system at 5. Hand-me-down notes were written for the older
    book, whose order differs, so the tutor's plan should start from the new chapters. See the
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rps-icse">What is different about ICSE science?</h2>
  <p>
    For ICSE Class 10, CISCE does not set one science paper. Physics, Chemistry and Biology are examined apart, and
    internal marks attach to each one. Schools choose their textbooks within the CISCE syllabus, so a tutor has to
    teach from the books your child actually carries and practise from CISCE specimen papers rather than following an
    NCERT plan. ICSE marks go to exact definitions and fully worked numericals. Some families only want help with the
    weakest of the three, usually from Class 9. ICSE science tutors are fewer than CBSE ones in most cities, so ask
    early and consider online lessons if no one nearby is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rps-habits">Five habits that win science marks on every board</h2>
  <ol>
    <li><strong>Arrows on light rays.</strong> Mirror and lens diagrams with arrows on every ray and virtual rays shown dotted.</li>
    <li><strong>Standard circuit symbols.</strong> Ammeter in series, voltmeter in parallel, every component drawn the textbook way.</li>
    <li><strong>Labelled body systems.</strong> The heart, the digestive tract and the nephron, labelled and correctly spelt.</li>
    <li><strong>Balanced equations.</strong> With state symbols whenever a question asks for them.</li>
    <li><strong>Heredity crosses in full.</strong> The whole cross shown, not just the final ratio.</li>
  </ol>
  <p>
    At the free demo, have the tutor take the chapter currently running at school, and see whether any of these
    five turns up unasked. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">parents' checklist for
    demo classes</a> adds more. A tutor who does not suit is replaced by another demo from the shortlist, and a later
    change is free too.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rps-homes">After-school science in six Raipur localities</h2>
  <p>
    Younger students are taught in the gap after school and before the evening meal, so what counts is a
    tutor whose journey is short and the same every week. Six localities in the centre and east of the city show what to
    arrange; the <a href="{{ url('/city/raipur') }}">Raipur page</a> covers the rest, including the south and west.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Raipur localities: the homes a science tutor visits and what to arrange for an after-school slot</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Homes</th><th scope="col">Arrange in advance</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $rpsA('gudhiyari', 'Gudhiyari') !!}</td><td>Mainly flats of two and four bedrooms, near Raipur Junction, with busy local shopping streets</td><td>Tell the guard or caretaker the tutor's name; choose a slot before the station roads fill</td></tr>
      <tr><td>{!! $rpsA('pandri', 'Pandri') !!}</td><td>Mostly independent houses, then apartments and plots, beside busy market streets</td><td>A precise landmark rather than the market's name; avoid festival evenings</td></tr>
      <tr><td>{!! $rpsA('samta-colony', 'Samta Colony') !!}</td><td>A central colony of houses and some flats, near the main market</td><td>A fixed weekly time; building name and floor if you live in a flat</td></tr>
      <tr><td>{!! $rpsA('avanti-vihar', 'Avanti Vihar') !!}</td><td>Two- and three-bedroom apartments and villas just off VIP Road</td><td>The full address, since Avani Vihar near Mowa is a different place</td></tr>
      <tr><td>{!! $rpsA('mowa', 'Mowa') !!}</td><td>Apartments, villas, independent houses and plots on the north-eastern side</td><td>Gate registration in gated colonies; a slot outside office-hour traffic on Vidhan Sabha Road</td></tr>
      <tr><td>{!! $rpsA('daldal-seoni', 'Daldal Seoni') !!}</td><td>Newer apartment buildings with two-bedroom flats, plus plots and houses</td><td>The tutor's name with security before the first visit; a tutor from Mowa or Avani Vihar</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rps-fee">Science tuition fees in Raipur</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors fix their own
    rates. In this age band, Class 10 board preparation is normally priced above help in Classes 6 to 8; travel to your
    colony and lessons per week shift the figure as well. Fees are visible before the demo, and the
    <a href="{{ url('/blog/home-tuition-fees-raipur') }}">Raipur home tuition fees</a> article explains them further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rps-ask">How to ask for a science shortlist</h2>
  <p>
    Tell us the class, the board, whichever of physics, chemistry or biology is weakest, the locality and a
    landmark, and the free afternoons. A list of two or three science tutors comes back, each with a fee; pick one to
    meet at the free demo. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their
    profile goes live. Should no good fit be able to travel to you then, we propose online lessons or a mix.
    The NXTutors office is in Sector 66, Gurugram; online classes reach every state. For maths, see the
    <a href="{{ url('/maths-home-tutor-raipur') }}">maths home tutor in Raipur</a> page; for the senior years, the
    <a href="{{ url('/biology-home-tutor-raipur') }}">biology</a> and
    <a href="{{ url('/chemistry-home-tutor-raipur') }}">chemistry</a> pages, and the
    <a href="{{ url('/blog/raipur-home-tuition-guide') }}">Raipur home tuition guide</a> for the city as a whole.
  </p>
  <p>
    Teach science and live in Raipur? Families' requests are posted on the
    <a href="{{ url('/tuition-jobs/raipur') }}">Raipur tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
