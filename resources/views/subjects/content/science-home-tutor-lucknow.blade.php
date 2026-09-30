{{--
  Long-form guide for the "science home tutor Lucknow" page (Classes 6 to 10,
  CBSE, ICSE, UP Board described generally, IGCSE). Byline in config: Aaditya
  Kashyap; role statement only, no anecdotes. Local facts come only from
  database/seo-content/areas/lucknow-research.json (zone_facts and area
  "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog/cbse-class-10-science-notes (80 + 20, units and
  chapters, sections by subject with their own case and long questions,
  internal choice in about a third, 39 questions by type, 50/30/20
  competencies, formative-only topics, boxed text, pH and sunrise/sunset
  exclusions, formulae used not derived, Sources of Energy and Natural
  Resources outside the course, sample-paper examples, two exams with the
  better score counting and internal assessment once) and
  cbse-class-10-board-year-plan-gurgaon, plus the 14 listed experiments,
  internal 5/5/5/5, Class 9 Exploration unit marks, Curiosity for Classes 6 and
  7 and ICSE three-paper science as already stated on the Delhi page. The UP
  Board is described in general terms only. No school, society or people's
  names, no distances or travel times, only the allowed fee sentence.

  Area links render only when that Lucknow area page exists and is active.
--}}
@php
  $lkAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $lkA = function (string $slug, string $label) use ($lkAreaSlugs) {
      return in_array($slug, $lkAreaSlugs, true)
          ? '<a href="' . e(url('/city/lucknow/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide lks-guide" aria-labelledby="lksGuideTitle">
  <h2 id="lksGuideTitle">Science home tutor in Lucknow, Classes 6 to 10: match the textbook, then the strand, then the afternoon</h2>

  <p class="nx-guide__lede">
    Science tuition for a Lucknow child in Classes 6 to 10 has three things to get right. The tutor must teach from
    the books your child's board prescribes, whether CBSE, ICSE, the UP Board or IGCSE. They must be able to spot
    which of biology, chemistry and physics is quietly pulling marks down. And they must reach your home at the same
    hour each week, between school and homework. NXTutors puts forward two or three science tutors who fit on all
    three counts. Each fee is on the shortlist before you meet anyone, and the opening lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#lks-books">Board and books</a> ·
    <a href="#lks-icse">ICSE science</a> ·
    <a href="#lks-strands">Three strands, 80 marks</a> ·
    <a href="#lks-questions">Question types</a> ·
    <a href="#lks-out">Left out of the paper</a> ·
    <a href="#lks-nine">Class 9</a> ·
    <a href="#lks-younger">Classes 6 to 8</a> ·
    <a href="#lks-slots">Six neighbourhoods</a> ·
    <a href="#lks-demo">At the demo</a> ·
    <a href="#lks-cost">Fees</a> ·
    <a href="#lks-first">First steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="lks-books">Is your child on CBSE, ICSE, the UP Board or IGCSE science?</h2>
  <p>
    Aaditya Kashyap writes the CBSE and ICSE science guidance on this page. The first thing we ask a Lucknow family
    is the board, because it fixes the textbooks, the shape of the Class 10 exam and the kind of answer that earns
    marks.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>CBSE</h3>
      <p>NCERT books throughout. Class 10 ends in one 80-mark science paper split into biology, chemistry and physics sections, with 20 marks assessed by the school.</p>
    </div>
    <div class="nx-guide__card">
      <h3>ICSE</h3>
      <p>CISCE sets the syllabus and each school picks its textbooks within it. Class 10 science is examined as three papers: Physics, Chemistry and Biology.</p>
    </div>
    <div class="nx-guide__card">
      <h3>UP Board and IGCSE</h3>
      <p>Uttar Pradesh Madhyamik Shiksha Parishad conducts the High School exam; the tutor works from the prescribed books and upmsp.edu.in. IGCSE science is tiered, Core or Extended.</p>
    </div>
  </div>
  <p>
    The national <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page explains how we match in
    every city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lks-icse">How is ICSE science examined, and what should an ICSE tutor do differently?</h2>
  <p>
    ICSE is a familiar choice in Lucknow, and its science works differently from CBSE's. CISCE examines Physics,
    Chemistry and Biology as separate Class 10 papers, and each carries internal assessment of its own. Since
    schools choose their own textbooks inside the CISCE syllabus, a tutor must plan from the book on your child's
    desk and practise with CISCE specimen papers, not with an NCERT-based scheme.
  </p>
  <p>
    Three separate papers also mean three separate risks. A child can be comfortable in biology and still drop
    marks every term in chemistry, so a sensible tutor keeps a running tally by subject and puts the extra time
    where the tally is weakest. ICSE answers reward exact definitions and complete numerical working; half an
    answer that is "nearly right" is where marks usually go. If no ICSE-experienced science tutor can reach your
    locality at a workable hour, online lessons open up the rest of the city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lks-strands">CBSE Class 10: how do the 80 board marks divide between the three sciences?</h2>
  <p>
    The 2026-27 curriculum has 13 chapters in the board paper across five units, plus 20 internal marks for a
    total of 100. In the sample paper each science sits in its own section with its own case-based question and its
    own five-mark question, so a tutor can plan revision strand by strand:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science, 2026-27: the board marks by strand, the units behind them and the habit that protects them</caption>
    <thead>
      <tr><th scope="col">Strand and section</th><th scope="col">Units</th><th scope="col">Marks</th><th scope="col">Habit that protects the marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Biology, Section A</td><td>World of Living (25); Our Environment (5)</td><td>30</td><td>Labelled diagrams and the exact term, every time</td></tr>
      <tr><td>Chemistry, Section B</td><td>Chemical Substances: Nature and Behaviour</td><td>25</td><td>Balanced equations with state symbols, observations named</td></tr>
      <tr><td>Physics, Section C</td><td>Effects of Current (13); Natural Phenomena (12)</td><td>25</td><td>Formula, substitution with units, answer; arrows on every ray</td></tr>
      <tr><td>School-assessed</td><td>Periodic, multiple and portfolio assessment, plus practical work</td><td>20</td><td>A practical file kept up to date through the year</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The internal 20 splits into four parts of 5 marks each. For the chapter-by-chapter reactions, diagrams and
    formulae, use our <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science notes</a>,
    and the <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page shows how the board
    year is planned.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lks-questions">What sort of questions does the paper ask?</h2>
  <p>
    Thirty-nine questions in three hours. Twenty are worth a mark each, a mix of multiple-choice and
    assertion–reason; six carry 2 marks and seven carry 3; three case- or source-based questions carry 4; and three
    long answers carry 5. About a third of the paper offers internal choice. By competency, half the marks test
    knowledge and understanding, 30% test application and 20% ask the student to analyse, evaluate or create.
  </p>
  <p>
    That last share is why reading alone falls short. The 2026-27 sample paper asked about lime water in four
    set-ups left in sunlight, a mustard flower with its anthers removed and a door lock worked by a solenoid. None
    appears word for word in NCERT, yet each can be answered from NCERT ideas. A tutor should bring one such
    unfamiliar situation to every session and let your child reason it out aloud before writing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lks-out">Which Class 10 topics stay out of the board paper this year?</h2>
  <ul>
    <li><strong>Assessed only in school:</strong> the periodic classification of elements; evolution (heredity itself stays in the board syllabus); and the electric motor, electromagnetic induction and the generator.</li>
    <li><strong>Not in the course at all:</strong> Sources of Energy, and Management of Natural Resources.</li>
    <li><strong>Smaller exclusions:</strong> boxed text in the NCERT book is not examined, pH needs no logarithm definition, the colour of the sun at sunrise and sunset is left out, and mirror and lens formulae are used rather than derived.</li>
  </ul>
  <p>
    The curriculum also lists 14 experiments, and board questions are built on them, so the practical file doubles
    as revision. Class 10 now has two board exams: a compulsory one from mid-February and an optional one in May
    for improving up to three subjects, science included, with the better score counting and internal assessment
    done once. The 2027 dates will come in CBSE's date sheet on cbse.gov.in. Treat February as the real attempt;
    the <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> lays out the months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lks-nine">What changes in Class 9 science this session?</h2>
  <p>
    CBSE's 2026-27 curriculum for Class 9 follows NCERT's new textbook, <em>Exploration</em>. The yearly exam is
    still 80 marks with 20 internal, spread over four units: Matter, its nature and behaviour, 27; World of living,
    25; Motion, force, work and sound, 23; and Earth as a system, 5. Guides and notes written for the previous book
    will not line up with the new chapters, so the tutor should plan from <em>Exploration</em> itself. The
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lks-younger">What should science tuition look like in Classes 6 to 8?</h2>
  <p>
    In Classes 6 and 7, NCERT's <em>Curiosity</em> books are built around activities. Tuition at this age is less
    about notes and more about talk: what did you see, what word describes it, can you draw it with labels? By Class
    8 the three strands start to separate and simple numericals appear, so units should become automatic. One
    tutor for all of science is normally right until Class 10, with the benefit that the same person notices when a
    physics sum fails on arithmetic rather than on the idea. Two sessions a week suit most middle-school children;
    see the <a href="{{ url('/science-home-tutor/class-7') }}">Class 7</a> and
    <a href="{{ url('/science-home-tutor/class-8') }}">Class 8</a> science tutor pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lks-slots">Where in Lucknow do you live, and what does that mean for the lesson time?</h2>
  <p>
    For a younger child the lesson usually sits between school and dinner, so the tutor's route matters as much as
    the tutor. Six neighbourhoods from four of our five Lucknow zones show the range; compare tutors near you on the
    <a href="{{ url('/city/lucknow') }}">Lucknow page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>After-school science tuition in six Lucknow neighbourhoods: homes, the nearest rail link and what to agree first</caption>
    <thead>
      <tr><th scope="col">Neighbourhood</th><th scope="col">Homes</th><th scope="col">How tutors arrive</th><th scope="col">Worth agreeing first</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $lkA('indira-nagar', 'Indira Nagar') !!}</td><td>A housing board colony grown from four blocks to 25; mostly houses and builder floors</td><td>Four Red Line stations inside the colony, Munshi Pulia at the northern end</td><td>No society gate; allow for crowded market roads near Bhootnath and Lekhraj in the evening</td></tr>
      <tr><td>{!! $lkA('vikas-nagar', 'Vikas Nagar') !!}</td><td>Independent houses in numbered sectors between Kalyanpur and Aliganj</td><td>By road; the nearest stations are outside the locality</td><td>A tutor from Aliganj or Jankipuram avoids the Ring Road at the evening rush</td></tr>
      <tr><td>{!! $lkA('lalbagh', 'Lalbagh') !!}</td><td>Flats in older buildings and above shops, next to Hazratganj</td><td>Sachivalaya underground station is in Lalbagh itself</td><td>Share the floor and a landmark, as some buildings have no lift or guard; afternoons are calmer</td></tr>
      <tr><td>{!! $lkA('ashiyana', 'Ashiyana') !!}</td><td>Mostly independent houses in the LDA Kanpur Road scheme sectors</td><td>Krishna Nagar or Singar Nagar station, then an auto</td><td>Parking outside is easy; watch the roads towards Kanpur Road in the evening</td></tr>
      <tr><td>{!! $lkA('krishna-nagar', 'Krishna Nagar') !!}</td><td>Houses first, then villas and a few apartments</td><td>Its own Red Line station, open since September 2017</td><td>Rarely a gate to clear; leave a little margin on busy connecting roads</td></tr>
      <tr><td>{!! $lkA('telibagh', 'Telibagh') !!}</td><td>A quiet neighbourhood of houses on Raebareli Road</td><td>By two-wheeler, car or auto; Transport Nagar is the nearest station</td><td>Start a little later to miss school and office traffic on Raebareli Road</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lks-demo">Five questions to answer for yourself during the free science demo</h2>
  <p>
    Ask the tutor to teach whatever chapter the class is on, then watch for these:
  </p>
  <ol>
    <li><strong>Does the tutor open the right book?</strong> NCERT for CBSE, your school's chosen text for ICSE, the prescribed book for the UP Board.</li>
    <li><strong>Do precise words get insisted on?</strong> "Alveoli", not "air sacs"; "precipitate", not "powder".</li>
    <li><strong>Is a diagram drawn and labelled,</strong> with arrows on rays and on the direction of current?</li>
    <li><strong>Does the tutor match points to marks,</strong> three clear points for a three-mark answer?</li>
    <li><strong>Is there a question your child has not seen,</strong> reasoned through before it is written?</li>
  </ol>
  <p>
    Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more. If the fit
    is wrong, we book a demo with another tutor from your shortlist, and a change of tutor later is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lks-cost">What does a science home tutor in Lucknow charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For science in Classes
    6 to 10, each tutor names their own rate; Class 10 board preparation generally sits above middle-school
    support, and the route to your neighbourhood and the number of weekly lessons also count. You see every fee
    before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lks-first">What are the first steps?</h2>
  <p>
    Tell us the class, the board, which of the three sciences worries you most, your neighbourhood with its sector
    or block, and the afternoons that suit. You receive two or three matched science tutors with their fees and
    choose one for a free demo class. If nobody suitable can come at that hour, we suggest online or mixed lessons.
    NXTutors operates from Sector 66, Gurugram, and teaches online anywhere in India.
  </p>
  <p>
    Science teachers who live in Lucknow can browse open student requests on the
    <a href="{{ url('/tuition-jobs/lucknow') }}">Lucknow tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
