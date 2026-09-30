{{--
  Long-form guide for the "science home tutor Bengaluru" page (Classes 6 to 10,
  CBSE and ICSE, with the Karnataka SSLC described in general terms only).
  Byline in config: Aaditya Kashyap; role statement only, no anecdotes. Local
  facts come only from database/seo-content/areas/bengaluru-research.json
  (zone_facts and area "about" texts). Exam facts reuse the checked statements
  in database/seo-content/blog/cbse-class-10-science-notes (80 + 20, 39
  questions by type, 30/25/25 strands, unit marks, internal 5/5/5/5) and
  cbse-class-10-board-year-plan-gurgaon (two Class 10 exams), plus the
  50/30/20 competency split, formative-only topics, 14 listed experiments,
  Class 9 Exploration unit marks, Curiosity for Classes 6 and 7, and ICSE
  three-paper science as already stated on the Delhi, Faridabad and Ghaziabad
  science pages. No state-board exam pattern. Pink and Blue Lines only as
  under construction. No school, society, mall or people's names, no distances
  or travel times, only the allowed fee sentence.

  Area links render only when that Bengaluru area page exists and is active.
--}}
@php
  $blAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $blA = function (string $slug, string $label) use ($blAreaSlugs) {
      return in_array($slug, $blAreaSlugs, true)
          ? '<a href="' . e(url('/city/bengaluru/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide bls-guide" aria-labelledby="blsGuideTitle">
  <h2 id="blsGuideTitle">Science home tutor in Bengaluru for Classes 6 to 10: the right book, the right habits, a slot that holds</h2>

  <p class="nx-guide__lede">
    Science in the middle-school years is where a child learns to look carefully, write precisely and show working,
    and those three habits carry straight into the Class 10 board paper. In Bengaluru the first question is which
    book your child is using: NCERT for CBSE, a school-chosen text for ICSE, or the Karnataka state syllabus for the
    SSLC. The second is who can reach your door after school. NXTutors answers both with a shortlist of two or three
    science tutors. Their fees are visible before you meet anyone, and the opening class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#bls-books">Book by class</a> ·
    <a href="#bls-units">Class 10 units</a> ·
    <a href="#bls-types">Question types</a> ·
    <a href="#bls-school">School-assessed topics</a> ·
    <a href="#bls-nine">Class 9</a> ·
    <a href="#bls-boards">ICSE and SSLC</a> ·
    <a href="#bls-where">Six neighbourhoods</a> ·
    <a href="#bls-week">A normal week</a> ·
    <a href="#bls-demo">At the demo</a> ·
    <a href="#bls-fees">Fees</a> ·
    <a href="#bls-go">Getting going</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="bls-books">What should a science tutor teach from, class by class?</h2>
  <p>
    Aaditya Kashyap writes the CBSE and ICSE science guidance here. A tutor for a younger child is useful only when the
    lesson follows the book on the desk, so start there:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Science in Classes 6 to 10: the book in use and where a Bengaluru tutor should put the effort</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Book or course</th><th scope="col">Where tuition earns its keep</th></tr>
    </thead>
    <tbody>
      <tr><td>6 and 7</td><td>NCERT <em>Curiosity</em> (CBSE), built around activities</td><td>Turning each activity into one exact sentence and a labelled sketch</td></tr>
      <tr><td>8</td><td>Physics, chemistry and biology begin to separate</td><td>Units after every number; word equations written out in full</td></tr>
      <tr><td>9</td><td>NCERT <em>Exploration</em>, the new CBSE book this session</td><td>Motion graphs, particles of matter and the cell, taught from the new chapters</td></tr>
      <tr><td>10</td><td>The board year: CBSE, ICSE or Karnataka SSLC</td><td>Answers shaped to the marks on offer, with timed practice</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Up to Class 10, one tutor for all three strands usually works well. That tutor can spot when a physics numerical
    fails because of weak algebra, not weak physics. Our national
    <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page sets out the approach, and the
    <a href="{{ url('/science-home-tutor/class-8') }}">Class 8 science tutor</a> page covers the middle years.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bls-units">Where do the 80 marks sit in CBSE Class 10 science?</h2>
  <p>
    Three hours, 80 board marks, and 20 more from the school, split into four equal parts: periodic assessment,
    multiple assessment, the portfolio, and subject enrichment through practical work. By unit:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science theory, 2026-27: unit marks and a habit to practise in each</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Habit to build</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical Substances</td><td>25</td><td>Balanced equations, with state symbols whenever the question asks</td></tr>
      <tr><td>World of Living</td><td>25</td><td>Labelled diagrams and the exact biological term</td></tr>
      <tr><td>Effects of Current</td><td>13</td><td>Circuit diagrams, then formula, substitution and unit</td></tr>
      <tr><td>Natural Phenomena</td><td>12</td><td>Ray diagrams with an arrow on every ray</td></tr>
      <tr><td>Our Environment</td><td>5</td><td>Short, specific points rather than general statements</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Seen by strand, biology carries 30 marks, and chemistry and physics 25 each. Seen by skill, half the paper is
    knowledge and understanding, 30% is application, and 20% asks for analysis and evaluation. A tutor who only
    dictates notes is preparing for half the paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bls-types">What kinds of question does the Class 10 paper ask?</h2>
  <p>
    The 2026-27 sample paper has 39 questions. Twenty are worth one mark each, multiple-choice and assertion–reason
    together. Six short answers carry two marks and seven carry three. Three case- or source-based questions are worth
    four marks each, and three long answers five each. The practical point for tuition is to match the answer to the
    marks: three distinct correct points for a three-mark question, and a diagram or equation plus four or five points
    for a five-mark one. Our <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> work
    through each chapter, and the <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page
    shows how a tutor plans the year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bls-school">Which topics are marked only by the school this year?</h2>
  <p>
    For 2026-27 three areas stay out of the board paper and are assessed in school: the electric motor,
    electromagnetic induction and the generator; evolution; and the periodic classification of elements. They still
    count for internal marks and return in Class 11, so a tutor teaches them, but board-revision weeks belong to the
    examined chapters. The curriculum also lists 14 experiments, and board questions are built on them, which makes
    the practical file part of revision.
  </p>
  <p>
    Every Class 10 student sits the main CBSE exam. A later optional exam allows eligible students to improve up to
    three subjects, science included. Dates for 2027 are not published, so follow cbse.gov.in and treat the main exam
    as the one that counts. The <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">Class 10 board-year
    planner</a> maps the months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bls-nine">Why start Class 9 science from the new chapters?</h2>
  <p>
    This session's Class 9 students use NCERT's new <em>Exploration</em> book, which the 2026-27 CBSE curriculum
    follows. The yearly exam is still 80 marks with 20 internal. Matter: its nature and behaviour carries 27, World of
    living 25, Motion, force, work and sound 23, and Earth as a system 5. Hand-me-down notes follow the old book, so a
    plan should be built from the new chapter list. In the lab, students make onion-peel and cheek-cell slides,
    separate mixtures and plot motion graphs; a tutor who explains why each set-up works makes the theory questions
    easier. See the <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bls-boards">What if your child is on ICSE or the Karnataka SSLC?</h2>
  <h3>ICSE</h3>
  <p>
    CISCE examines ICSE Class 10 science as three papers, Physics, Chemistry and Biology, each with internal
    assessment beside the theory. Schools choose textbooks within the CISCE syllabus, so a tutor must work from those
    books and from CISCE specimen papers rather than NCERT. Marks usually slip through loose definitions and
    half-finished numericals. Some families add help only in the weakest of the three from Class 9. ICSE science
    tutors are fewer than CBSE ones, so ask early.
  </p>
  <h3>Karnataka SSLC</h3>
  <p>
    Students on the state board take the SSLC examination at the end of Class 10, conducted by the Karnataka School
    Examination and Assessment Board. We keep this advice general: the board sets its own syllabus and paper design
    and posts notices on kseab.karnataka.gov.in. Ask a prospective tutor whether they have taught state-syllabus
    science recently and which textbooks they follow, and do not assume that a CBSE revision plan transfers unchanged.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bls-where">How does an after-school science slot work in six Bengaluru neighbourhoods?</h2>
  <p>
    For a child in Classes 6 to 10 the lesson usually sits between school and dinner, so a short, predictable trip for
    the tutor matters most. These six neighbourhoods show the range; tutors in every zone are on our
    <a href="{{ url('/city/bengaluru') }}">Bengaluru page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>After-school science tuition in six Bengaluru neighbourhoods: homes, transport and what to arrange</caption>
    <thead>
      <tr><th scope="col">Neighbourhood</th><th scope="col">Homes</th><th scope="col">Getting there</th><th scope="col">Arrange in advance</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $blA('hsr-layout', 'HSR Layout') !!}</td><td>Seven sectors on a grid: houses, builder floors and apartment communities</td><td>Central Silk Board on the Yellow Line, then an auto; a Blue Line station is under construction</td><td>Gate registration in apartment blocks; houses are doorstep visits</td></tr>
      <tr><td>{!! $blA('basavanagudi', 'Basavanagudi') !!}</td><td>Older independent houses with gardens and low-rise flats</td><td>Green Line stations nearby, open since June 2017</td><td>Little to arrange; evening parking near the market streets is limited, so metro suits tutors</td></tr>
      <tr><td>{!! $blA('cv-raman-nagar', 'CV Raman Nagar') !!}</td><td>A research staff township, houses, older blocks and gated communities</td><td>Baiyappanahalli on the Purple Line, then an auto</td><td>Register the tutor at the township or society gate before the first class</td></tr>
      <tr><td>{!! $blA('kalyan-nagar', 'Kalyan Nagar') !!}</td><td>Independent houses and builder floors on colony streets, newer apartment blocks</td><td>No metro yet; a Blue Line station is being built. Tutors come by bus, two-wheeler or cab</td><td>A slot straight after school, ahead of Outer Ring Road office traffic</td></tr>
      <tr><td>{!! $blA('rajajinagar', 'Rajajinagar') !!}</td><td>Houses on the original plots and apartment buildings that replaced many</td><td>Green Line stations on Chord Road</td><td>A front door or a building gate; allow for Chord Road at peak hours</td></tr>
      <tr><td>{!! $blA('cooke-town', 'Cooke Town') !!}</td><td>Houses, low-rise flats and some gated apartments on quiet lanes</td><td>By road, or Purple Line and an auto; the Pink Line's Pottery Town station is under construction</td><td>An early slot, before evening traffic towards the main roads</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bls-week">What does a normal week of science tuition look like?</h2>
  <p>
    For most children in Classes 6 to 8, one or two sessions a week are enough, following the school's current
    chapter. Class 9 and 10 students usually need two, sometimes three near exams. Inside a session, a pattern that
    works for many families:
  </p>
  <ol>
    <li><strong>Ten quick questions</strong> from last week's chapter, answered from memory.</li>
    <li><strong>The school's current chapter</strong>, taught through reasons rather than lists.</li>
    <li><strong>One diagram and one numerical</strong>, drawn or set out the way an examiner expects.</li>
    <li><strong>One written answer</strong> sized to its marks and checked on the spot.</li>
  </ol>
  <p>
    From November of the board year, the tutor should switch to full timed papers, with one strand reviewed in depth
    each week, and a short notebook of repeated mistakes for the last month.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bls-demo">What should you watch for in the free demo?</h2>
  <ul>
    <li><strong>Exact words.</strong> Does the tutor insist on "oesophagus" rather than "food pipe", and "alveoli" rather than "air sacs"?</li>
    <li><strong>Equations and state symbols.</strong> Are reactions balanced, with (s), (aq) and (g) when asked for?</li>
    <li><strong>Diagrams.</strong> Are rays given arrows and virtual rays drawn dotted?</li>
    <li><strong>Heredity.</strong> Is a cross shown in full before a ratio is written?</li>
    <li><strong>Your child talking.</strong> Does the tutor ask questions, or only explain?</li>
  </ul>
  <p>
    Ask for an ordinary lesson on the current chapter rather than a show piece. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> adds more. If
    the match is wrong, we set up a demo with another tutor from your list, and switching later is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bls-fees">What does a science home tutor in Bengaluru cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their
    own rate. Within Classes 6 to 10, the board year normally costs more than middle-school support, and the trip to
    your neighbourhood and the number of weekly sessions shape the figure too. All fees appear before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bls-go">How do you get going?</h2>
  <p>
    Send the class and board, the strand that is slipping, your neighbourhood with its block, stage, phase or
    sector, and the afternoons that suit you. We reply with two or three science tutors and their fees, and you pick
    one for a free demo class. If nobody suitable can travel at that hour, we suggest online or mixed lessons.
    NXTutors is based in Sector 66, Gurugram, and teaches online across India.
  </p>
  <p>
    Science teachers who live in Bengaluru can browse open student requests on the
    <a href="{{ url('/tuition-jobs/bengaluru') }}">Bengaluru tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
