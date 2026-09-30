{{--
  Long-form guide for the "science home tutor Kochi" page (Classes 6 to 10,
  CBSE, ICSE and the Kerala State syllabus described generally). Byline in
  config: Aaditya Kashyap; role statement only, no anecdotes. Local facts come
  only from database/seo-content/areas/kochi-research.json (zone_facts and area
  "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog/cbse-class-10-science-notes (80 + 20, 39 questions
  by type, 30/25/25 sections, unit marks, internal 5/5/5/5) and
  cbse-class-10-board-year-plan-gurgaon (two Class 10 exams), plus the
  50/30/20 competency split, formative-only topics, 14 listed experiments,
  Class 9 Exploration unit marks, Curiosity for Classes 6 and 7, and ICSE
  three-paper science as already stated on the Delhi and Faridabad science
  pages. No Kerala exam pattern is given. No school, society, hospital or
  people's names, no distances or travel times, only the allowed fee sentence.

  Area links render only when that Kochi area page exists and is active.
--}}
@php
  $kcAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $kcA = function (string $slug, string $label) use ($kcAreaSlugs) {
      return in_array($slug, $kcAreaSlugs, true)
          ? '<a href="' . e(url('/city/kochi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide kcs-guide" aria-labelledby="kcsGuideTitle">
  <h2 id="kcsGuideTitle">Science home tutor in Kochi, Classes 6 to 10: the right textbook, the right words, and a slot before dinner</h2>

  <p class="nx-guide__lede">
    Science tuition for a younger child in Kochi has three jobs. It has to follow the book the school actually uses,
    whether that is NCERT, a CISCE-listed text or the Kerala State textbook. It has to build the exact vocabulary,
    labelled diagrams and units that examiners reward. And it has to happen at a steady after-school hour, which in
    a city of junctions, bridges and backwaters depends on where the tutor lives. NXTutors sends two or three
    science tutors who meet all three tests, with their fees shown up front. The first class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kcs-book">Which book</a> ·
    <a href="#kcs-years">Year by year</a> ·
    <a href="#kcs-ten">CBSE Class 10</a> ·
    <a href="#kcs-school">School-assessed topics</a> ·
    <a href="#kcs-nine">Class 9</a> ·
    <a href="#kcs-near">Six neighbourhoods</a> ·
    <a href="#kcs-lesson">A good lesson</a> ·
    <a href="#kcs-fees">Fees</a> ·
    <a href="#kcs-go">Next step</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kcs-book">CBSE, ICSE or the Kerala State syllabus: which book is the tutor teaching from?</h2>
  <p>
    Aaditya Kashyap writes the CBSE and ICSE science guidance on this page. The first thing we confirm for any
    Kochi family is the syllabus, because a lesson planned from the wrong book wastes the hour.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Science syllabuses in Kochi for Classes 6 to 10, their books and what to check with a tutor</caption>
    <thead>
      <tr><th scope="col">Syllabus</th><th scope="col">Books</th><th scope="col">Check with the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE</td><td>NCERT: <em>Curiosity</em> in Classes 6 and 7, <em>Exploration</em> in Class 9</td><td>Do you plan from the current sample paper and marking scheme?</td></tr>
      <tr><td>ICSE</td><td>Books chosen by the school within the CISCE syllabus; Physics, Chemistry and Biology are separate papers in Class 10</td><td>Have you taught from our school's books and CISCE specimen papers?</td></tr>
      <tr><td>Kerala State syllabus</td><td>SCERT Kerala textbooks, leading to the SSLC exam in Class 10</td><td>Do you use the state book and the board's own past papers, rather than NCERT?</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For the state syllabus we do not reproduce the SSLC paper design; the Kerala Board of Public Examinations
    publishes it, and it is worth reading on the board's site each year. ICSE-trained science tutors are fewer than
    CBSE ones, so ICSE families should ask early and keep online lessons in mind.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kcs-years">What should science tuition change from Class 6 to Class 10?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What a science tutor should concentrate on at each stage</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">What is new</th><th scope="col">Tutor's focus</th></tr>
    </thead>
    <tbody>
      <tr><td>6 and 7</td><td>Activity-led chapters</td><td>Turning each activity into a correct sentence and a labelled sketch</td></tr>
      <tr><td>8</td><td>Physics, chemistry and biology start to separate; first numericals</td><td>Units on every answer, word equations, careful reading</td></tr>
      <tr><td>9</td><td>A heavier book: motion, matter and the cell arrive together</td><td>Catching gaps before they widen, graphs drawn by hand</td></tr>
      <tr><td>10</td><td>The board exam</td><td>Answers matched to marks, timed sections, the practical file</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Up to Class 10 one tutor for all three sciences is usually right, and there is a hidden benefit: the same person
    notices when a physics question is lost to weak arithmetic rather than to physics. The
    <a href="{{ url('/science-home-tutor/class-8') }}">Class 8 science tutor</a> page covers the middle years, and
    the national <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page explains how we match everywhere.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kcs-ten">How are marks shared out in the CBSE Class 10 science paper?</h2>
  <p>
    The three-hour board paper carries 80 marks and the school adds 20, split into four blocks of 5: periodic
    assessment, multiple assessment, portfolio and practical enrichment. By unit, the 80 marks fall like this:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science, 2026-27: theory marks by unit and where tutoring time usually goes</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Where time goes</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical Substances</td><td>25</td><td>Balanced equations, acids and bases, carbon compounds</td></tr>
      <tr><td>World of Living</td><td>25</td><td>Labelled diagrams and exact biological terms</td></tr>
      <tr><td>Effects of Current</td><td>13</td><td>Circuit numericals with units on every line</td></tr>
      <tr><td>Natural Phenomena</td><td>12</td><td>Ray diagrams with arrows and correct sign use</td></tr>
      <tr><td>Our Environment</td><td>5</td><td>Short, precise written answers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Seen by strand, biology is worth 30 marks and chemistry and physics 25 each. The 2026-27 sample paper has 39
    questions: twenty of one mark (including assertion–reason), six of two, seven of three, three case- or
    source-based questions of four, and three long answers of five. Half the paper tests knowledge and
    understanding, 30% application and 20% analysis and evaluation, so learning answers by heart covers only part
    of it. See our <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science notes</a> and the
    <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kcs-school">Which Class 10 topics are marked only by the school?</h2>
  <p>
    In 2026-27, three areas stay out of the board paper and are assessed in school: electromagnetic induction with
    the generator and electric motor, evolution, and the periodic classification of elements. They still count for
    internal marks and reappear in Class 11, so a tutor teaches them, just not in the board-revision weeks. The
    curriculum also lists 14 experiments that board questions draw on, which makes the practical file a revision
    tool. Every candidate sits the main exam; an optional later exam lets students improve up to three subjects,
    science included. The 2027 dates are not yet published, so follow cbse.gov.in, and see the
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> for the months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kcs-nine">What is different about Class 9 CBSE science now?</h2>
  <p>
    The 2026-27 curriculum follows NCERT's new <em>Exploration</em> book, so notes passed down from an older sibling
    no longer match. The yearly exam stays at 80 marks with 20 internal. Matter: its nature and behaviour carries 27,
    World of living 25, Motion, force, work and sound 23, and Earth as a system 5. A tutor who works through the
    new chapters in order, and explains why each school practical is set up the way it is, makes the theory
    questions far easier. The <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kcs-near">How does a science tutor reach six different Kochi neighbourhoods?</h2>
  <p>
    Younger children need the same hour every week, so the trip matters more than it does for a senior student. These
    six localities, from north Ernakulam to West Kochi, show the range; compare tutors in any area on our
    <a href="{{ url('/city/kochi') }}">Kochi page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>After-school science tuition in six Kochi localities: homes, the way in and what to arrange</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Homes</th><th scope="col">Way in and what to arrange</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $kcA('pachalam', 'Pachalam') !!}</td><td>Housing colonies and older independent houses on narrow roads</td><td>The railway overbridge, open since 2015, brings tutors in from Kaloor and Palarivattom; agree parking before the first class, or suggest a two-wheeler.</td></tr>
      <tr><td>{!! $kcA('elamakkara', 'Elamakkara') !!}</td><td>Independent homes and small apartment buildings on quiet streets</td><td>Changampuzha Park on the Blue Line, then an auto; doorstep visits suit early morning and weekend slots.</td></tr>
      <tr><td>{!! $kcA('thrikkakara', 'Thrikkakara') !!}</td><td>Houses on plots around the temple, newer apartment buildings</td><td>No single transit point; many tutors ride in. During the temple festival, move the class earlier or online.</td></tr>
      <tr><td>{!! $kcA('vennala', 'Vennala') !!}</td><td>Older houses alongside newer apartments and villa projects</td><td>By road from Vyttila or Palarivattom; houses have easy parking, complexes register visitors. Avoid Vyttila junction at rush hour.</td></tr>
      <tr><td>{!! $kcA('tripunithura', 'Tripunithura') !!}</td><td>Old family houses in the town centre, apartments on the main roads</td><td>Three Blue Line stations, including Thrippunithura Terminal; crowded old town during the temple festival.</td></tr>
      <tr><td>{!! $kcA('palluruthy', 'Palluruthy') !!}</td><td>Independent homes and villas in neighbourhood lanes</td><td>No metro in West Kochi; tutors cross the bridges via Thoppumpady, so a slot after the peak is easier to keep.</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A pattern runs through the table. Where a regular class would mean crossing the backwater, a bridge approach or
    a crowded junction twice a week, a tutor who lives on the same side of it is usually the steadier choice for a
    child in Classes 6 to 10. If nobody suitable lives close, a water metro route or a Blue Line station near both
    homes can do the same job, and one online lesson in a busy week keeps the routine unbroken.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kcs-lesson">What does a good science lesson at home look like?</h2>
  <p>
    Use the free demo to watch for these five things during an ordinary lesson on the current chapter:
  </p>
  <ul>
    <li><strong>The textbook word, not the everyday one.</strong> "Alveoli", "oesophagus", "displacement reaction": vague terms lose marks.</li>
    <li><strong>Diagrams drawn, not described.</strong> Labels on every part, and arrows on every ray.</li>
    <li><strong>State symbols where asked.</strong> (s), (l), (g) and (aq) in balanced equations earn marks of their own.</li>
    <li><strong>Points counted against marks.</strong> Three separate points for a three-mark answer; a diagram or equation plus four or five points for a five-mark one.</li>
    <li><strong>A mistakes page.</strong> Every wrong answer copied, corrected and tried again the next week.</li>
  </ul>
  <p>
    The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> adds more. If the first
    tutor is not right, we book a demo with another from your shortlist, and changing tutor later is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kcs-fees">What does a science home tutor in Kochi cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For Classes 6 to 10,
    the board year normally costs more than the middle-school years. Each tutor sets their own fee, which also
    reflects the trip to your neighbourhood and the number of weekly lessons; you see it before the demo. More on
    <a href="{{ url('/blog/home-tuition-fees-kochi') }}">home tuition fees in Kochi</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kcs-go">What happens after you ask for a science tutor?</h2>
  <p>
    Tell us the class and syllabus, which part of science is slipping, your locality and nearest junction, and the
    afternoons that suit you. We send two or three matched science tutors with their fees, and you pick one for a
    free demo. If no suitable tutor can reach you at that time, we suggest online lessons or a mix. NXTutors works
    from Sector 66, Gurugram, and teaches online across India. Older students can move on to our
    <a href="{{ url('/physics-home-tutor-kochi') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-kochi') }}">chemistry</a> tutor pages for Kochi.
  </p>
  <p>
    Science teachers living in Kochi can find students nearby on the
    <a href="{{ url('/tuition-jobs/kochi') }}">Kochi tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
