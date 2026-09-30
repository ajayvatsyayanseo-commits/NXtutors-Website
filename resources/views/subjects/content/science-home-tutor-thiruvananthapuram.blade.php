{{--
  Long-form guide for the "science home tutor Thiruvananthapuram" page
  (Classes 6 to 10). Byline in config: Aaditya Kashyap; role statement only,
  no anecdotes. Local facts come only from
  database/seo-content/areas/thiruvananthapuram-research.json (zone_facts and
  area "about" texts). Exam facts reuse the checked statements already used on
  the Delhi science page (CBSE Class 10: 80 + 20 with internal 5/5/5/5, 39
  questions by type, 30/25/25 by subject, unit marks, 50/30/20 competency
  split, formative-only topics, 14 listed experiments, two Class 10 exams;
  Class 9 Exploration unit marks; Curiosity for Classes 6 and 7; ICSE three
  science papers with internal assessment). The Kerala State Board is
  described in general terms only (SSLC, SCERT textbooks); no exam pattern is
  stated for it. No school, society, hospital, campus or people's names, no
  distances or travel times, only the allowed fee sentence.

  Area links render only when that Thiruvananthapuram area page exists and is
  active.
--}}
@php
  $tvmsAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $tvmsA = function (string $slug, string $label) use ($tvmsAreaSlugs) {
      return in_array($slug, $tvmsAreaSlugs, true)
          ? '<a href="' . e(url('/city/thiruvananthapuram/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide tvms-guide" aria-labelledby="tvmsGuideTitle">
  <h2 id="tvmsGuideTitle">Science home tutor in Thiruvananthapuram for Classes 6 to 10: one teacher, three strands, and the right textbook</h2>

  <p class="nx-guide__lede">
    Science in the middle-school years is really three subjects sharing one notebook. Physics brings numbers and
    diagrams, chemistry brings equations, and biology brings a vocabulary that has to be exact. A good science tutor
    in Thiruvananthapuram keeps all three moving, teaches from the book your child's board prescribes, and turns up
    at the same after-school hour whether you live near Pattom junction or out towards Nemom. NXTutors suggests two
    or three science tutors who fit. Their fees are visible before anyone visits, and the first class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#tvms-board">Three boards</a> ·
    <a href="#tvms-years">Classes 6 to 9</a> ·
    <a href="#tvms-ten">The CBSE Class 10 paper</a> ·
    <a href="#tvms-school">Marked in school</a> ·
    <a href="#tvms-icse">ICSE science</a> ·
    <a href="#tvms-switch">Changing board</a> ·
    <a href="#tvms-where">Four neighbourhoods</a> ·
    <a href="#tvms-notebook">The notebook test</a> ·
    <a href="#tvms-fees">Fees</a> ·
    <a href="#tvms-start">Starting out</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="tvms-board">Kerala State Board, CBSE or ICSE: why does the board come first?</h2>
  <p>
    The CBSE and ICSE sections of this guide are written by Aaditya Kashyap. Science is taught in all three systems
    across the city, and the books differ more than parents expect, so the board decides who can teach your child.
  </p>
  <ul>
    <li><strong>Kerala State Board.</strong> Textbooks come from SCERT Kerala and the school years lead to the SSLC examination after Class 10. A tutor should teach from those books and the state's own model questions. We do not restate the SSLC science scheme here; check it on the official Kerala examination portals or with the school.</li>
    <li><strong>CBSE.</strong> NCERT books throughout, with one integrated science paper in Class 10.</li>
    <li><strong>ICSE.</strong> CISCE examines physics, chemistry and biology as separate papers in Class 10, and schools pick their own textbooks.</li>
  </ul>
  <p>
    The national <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page describes how we match in
    every city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvms-years">What should happen in Classes 6 to 9, before the board year?</h2>
  <p>
    CBSE students in Classes 6 and 7 use NCERT's <em>Curiosity</em> books, which are built around activities. A
    tutor's job at this stage is small but important: turn every activity into one clear sentence using the correct
    term, and one labelled sketch. By Class 8 the three strands start to separate, numericals appear, and units stop
    being optional. The <a href="{{ url('/science-home-tutor/class-8') }}">Class 8 science tutor</a> page covers that
    step.
  </p>
  <p>
    Class 9 is the year that most often catches families out. This session, CBSE's Class 9 curriculum follows NCERT's
    new <em>Exploration</em> book, with 80 marks for the yearly exam and 20 internal. The 80 divide as follows: Matter,
    its nature and behaviour, 27; World of living, 25; Motion, force, work and sound, 23; and Earth as a system, 5.
    Hand-me-down notes from an older sibling follow the previous book, so a Class 9 plan should begin from the new
    chapters. See the <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvms-ten">How are the 80 marks shared out in the CBSE Class 10 science paper?</h2>
  <p>
    The board paper runs for three hours. Read by unit, it looks like this for 2026-27:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science, 2026-27: board marks by unit and the strand each unit belongs to</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Strand</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical Substances: Nature and Behaviour</td><td>25</td><td>Chemistry</td></tr>
      <tr><td>World of Living</td><td>25</td><td>Biology</td></tr>
      <tr><td>Effects of Current</td><td>13</td><td>Physics</td></tr>
      <tr><td>Natural Phenomena</td><td>12</td><td>Physics</td></tr>
      <tr><td>Our Environment</td><td>5</td><td>Biology</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Added up by strand, biology holds 30 marks and chemistry and physics 25 each. The sample paper for the session
    has 39 questions: twenty one-markers mixing multiple-choice and assertion–reason items, six two-mark and seven
    three-mark short answers, three case- or source-based questions of four marks, and three five-mark long answers.
    Half the paper tests knowledge and understanding, 30% tests application, and 20% analysis and evaluation, so a
    tutor who only dictates notes is preparing for half the paper.
  </p>
  <p>
    From 2026 every Class 10 student sits the main exam, and an optional later exam allows eligible students to
    improve up to three subjects, science included. The 2027 dates are not yet published; follow cbse.gov.in. Our
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> go chapter by chapter, and the
    <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page sets out the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvms-school">Which parts of Class 10 science are marked by the school?</h2>
  <p>
    Twenty marks are internal, in four equal parts of 5: periodic assessment, multiple assessment, a portfolio, and
    subject enrichment through practical work. Three topics are assessed only formatively in school in 2026-27 and do
    not appear in the board paper: the generator, electromagnetic induction and the electric motor; evolution; and
    the periodic classification of elements. A tutor should still teach them, since school marks and Class 11 depend
    on them, but should not spend revision weeks there.
  </p>
  <p>
    The curriculum lists 14 experiments, and board questions are built around them. That makes the practical file a
    revision tool: a tutor who asks why each set-up works, and what would change if one step were skipped, prepares
    a student for the questions the file quietly predicts.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvms-icse">What do ICSE families need from a science tutor?</h2>
  <p>
    Because ICSE Class 10 science is three papers, each with its own internal assessment, some families look for
    help in only the weakest of the three from Class 9. Either way, the tutor must teach from the textbooks your
    school has chosen and from CISCE specimen papers; an NCERT-based plan will not line up. ICSE marks are most often
    lost on loose definitions and numericals left half set out. ICSE-experienced science tutors are fewer than CBSE
    ones, so ask early and keep online sessions in mind if nobody nearby is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvms-switch">What if your child is changing board after Class 10?</h2>
  <p>
    In a city where state, CBSE and ICSE schools sit side by side, some students switch board for Class 11. The
    science is familiar, but the way answers are expected to look is not. A student arriving in CBSE Class 11 from
    another board may know the ideas yet write them in a different order, use different terms, or skip steps that
    NCERT-style marking expects to see. A summer term with a tutor who works through the new board's Class 10
    material quickly, and marks written answers against its style, closes that gap before school pressure starts.
    Tell us the old and the new board when you ask, so the shortlist includes someone who has taught both.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvms-where">How does a science tutor reach four different Thiruvananthapuram neighbourhoods?</h2>
  <p>
    Younger children usually study between school and dinner, so a short, predictable trip matters more than
    anything else. There is no metro yet, so the tutor's bus or scooter route decides the slot. Browse every zone on
    the <a href="{{ url('/city/thiruvananthapuram') }}">Thiruvananthapuram page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>After-school science tuition in four Thiruvananthapuram neighbourhoods: homes, how tutors arrive, and what to arrange</caption>
    <thead>
      <tr><th scope="col">Neighbourhood</th><th scope="col">Homes</th><th scope="col">How tutors arrive</th><th scope="col">Worth arranging</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $tvmsA('sasthamangalam', 'Sasthamangalam') !!}</td><td>Independent houses and mostly three-bedroom flats on quiet lanes</td><td>By bus or auto from Vellayambalam, Kowdiar or Vattiyoorkavu</td><td>A time that misses the evening rush at Vellayambalam junction</td></tr>
      <tr><td>{!! $tvmsA('nalanchira', 'Nalanchira') !!}</td><td>Named residential nagars of houses, with villas and some flats</td><td>Along MC Road from Kesavadasapuram or Mannanthala</td><td>An early-evening slot once the road clears after school closing</td></tr>
      <tr><td>{!! $tvmsA('ulloor', 'Ulloor') !!}</td><td>Houses and some flats behind the main road, double-storey homes towards Akkulam</td><td>NH 66 buses, then an auto into the inner lanes</td><td>A route that avoids the busy junction at peak hours</td></tr>
      <tr><td>{!! $tvmsA('poojappura', 'Poojappura') !!}</td><td>Villas, independent houses and apartment projects with two- and three-bedroom flats</td><td>A short ride from Jagathy, Thirumala or Karamana; buses to Thampanoor</td><td>A gate sign-in for apartment projects; a slot after government office hours</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvms-notebook">How can a parent tell, from the notebook, that science tuition is working?</h2>
  <p>
    You do not need to know the chapter to check. Open the notebook once a month and look for these four signs:
  </p>
  <ol>
    <li><strong>Exact words.</strong> "Alveoli" rather than "air sacs in the lungs", "oesophagus" rather than "food pipe". Vague terms lose marks at every level.</li>
    <li><strong>Equations that balance.</strong> With state symbols where a question asks for them.</li>
    <li><strong>Finished diagrams.</strong> Arrows on every light ray, labels on every part, and heredity crosses drawn out rather than a bare ratio.</li>
    <li><strong>Answers sized to marks.</strong> Three separate points for a three-mark answer; a diagram or equation plus four or five points for five marks.</li>
  </ol>
  <p>
    During the free demo, ask for an ordinary lesson on the current chapter and notice whether the tutor insists on
    these. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> adds
    more to watch for. If the match is wrong, we set up a demo with another tutor from your shortlist, and switching
    later is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvms-fees">What does a science home tutor in Thiruvananthapuram cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor names their
    own fee. Within Classes 6 to 10, the board year usually costs more than the middle-school years, and the trip to
    your neighbourhood and the number of weekly sessions also count. You see every fee before the demo; the
    <a href="{{ url('/blog/home-tuition-fees-thiruvananthapuram') }}">Thiruvananthapuram tuition fees guide</a> goes
    into more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvms-start">How do you get started?</h2>
  <p>
    Tell us the class and board, the strand that is giving trouble, your neighbourhood and a nearby junction, and the
    afternoons that suit you. We send two or three science tutors with their fees, and you pick one for a free demo
    class. If no one suitable can travel at that time, we suggest online or mixed lessons. NXTutors works from
    Sector 66, Gurugram, and teaches online anywhere in India. For more on the city's neighbourhoods, read the
    <a href="{{ url('/blog/thiruvananthapuram-tuition-guide') }}">Thiruvananthapuram tuition guide</a>.
  </p>
  <p>
    Science teachers living in the city can look through open student requests on the
    <a href="{{ url('/tuition-jobs/thiruvananthapuram') }}">Thiruvananthapuram tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
