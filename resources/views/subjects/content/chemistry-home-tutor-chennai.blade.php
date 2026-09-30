{{--
  Long-form guide for the "chemistry home tutor Chennai" page (Classes 11 and
  12, the Tamil Nadu State Board described generally, NEET and JEE,
  ISC/IB/IGCSE). Byline in config: NXTutors Academic Team. Local facts come
  only from database/seo-content/areas/chennai-research.json (zone_facts and
  area "about" texts); Metro Phase II is described only as under construction.
  Exam facts reuse the checked statements in database/seo-content/blog:
  cbse-class-12-chemistry-organicinorganic (043 theory 70 marks, 33
  questions, chapter marks, recall share, deleted and school-assessed topics,
  practical scheme and titration), -neet-chemistry-important-chapters- and
  neet-preparation-gurgaon-coaching-or-home-tutor (NEET UG 2026 pattern),
  jee-chemistry-physicalorganicinorganic (JEE Main 2026 chemistry sections)
  and cambridge-vs-edexcel-igcse-gurgaon (IGCSE tiers); IB chemistry themes as
  already stated on the Delhi chemistry page. No state exam pattern is given.
  No school, college, hospital, society or people's names, no distances or
  travel times, only the allowed fee sentence.

  Area links render only when that Chennai area page exists and is active.
--}}
@php
  $chAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $chA = function (string $slug, string $label) use ($chAreaSlugs) {
      return in_array($slug, $chAreaSlugs, true)
          ? '<a href="' . e(url('/city/chennai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide chc-guide" aria-labelledby="chcGuideTitle">
  <h2 id="chcGuideTitle">Chemistry home tutor in Chennai: organic chemistry, reaction by reaction, from a tutor who can reach your door</h2>

  <p class="nx-guide__lede">
    Senior chemistry is three subjects under one name. Physical chemistry is mostly numericals, inorganic chemistry is
    trends and exceptions, and organic chemistry is a web of reactions that only holds together with regular
    practice. A Chennai student may meet all three for the Tamil Nadu State Board, CBSE or ISC, and again for NEET or
    JEE. NXTutors puts forward two or three chemistry tutors who teach your child's course and can travel to your
    neighbourhood after school or coaching. Each fee is visible before you meet, and the opening lesson is a free
    demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#chc-weights">Chapter weights</a> ·
    <a href="#chc-trim">What has been trimmed</a> ·
    <a href="#chc-state">State Board chemistry</a> ·
    <a href="#chc-tests">NEET and JEE</a> ·
    <a href="#chc-bench">The practical exam</a> ·
    <a href="#chc-areas">Six neighbourhoods</a> ·
    <a href="#chc-other">ISC, IB and IGCSE</a> ·
    <a href="#chc-week">A fortnight's plan</a> ·
    <a href="#chc-fees">Fees</a> ·
    <a href="#chc-begin">Getting a shortlist</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="chc-weights">How much is each Class 12 chapter worth in CBSE chemistry?</h2>
  <p>
    CBSE chemistry is unusual in giving marks chapter by chapter. The theory paper (043) is out of 70, runs three
    hours and has 33 compulsory questions across Sections A to E, with internal choice in some. Neither calculators
    nor log tables may be used, and the 2026-27 sample paper keeps last year's design.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 chemistry theory, 2026-27: marks per chapter, heaviest first, with the kind of work each rewards</caption>
    <thead>
      <tr><th scope="col">Chapter</th><th scope="col">Branch</th><th scope="col">Marks</th><th scope="col">What it rewards</th></tr>
    </thead>
    <tbody>
      <tr><td>Electrochemistry</td><td>Physical</td><td>9</td><td>Numericals with units and signs handled carefully</td></tr>
      <tr><td>Aldehydes, Ketones and Carboxylic Acids</td><td>Organic</td><td>8</td><td>Conversions and named reactions written in full</td></tr>
      <tr><td>Solutions; Chemical Kinetics</td><td>Physical</td><td>7 each</td><td>Formula choice, graphs and rate calculations</td></tr>
      <tr><td>The d- and f-Block Elements; Coordination Compounds</td><td>Inorganic</td><td>7 each</td><td>Trends explained with reasons, naming and isomerism</td></tr>
      <tr><td>Biomolecules</td><td>Organic</td><td>7</td><td>Precise definitions and structures</td></tr>
      <tr><td>Haloalkanes and Haloarenes; Alcohols, Phenols and Ethers; Amines</td><td>Organic</td><td>6 each</td><td>Mechanisms and tests that tell compounds apart</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Added up, organic chemistry holds 33 marks, physical 23 and inorganic 14, so organic conversions need a place in
    every week from the start of the session. Roughly 40% of the paper tests remembering and understanding; the other
    60% asks a student to apply, analyse or evaluate. Our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">guide to Class 12 organic and inorganic
    chemistry</a> takes the chapters one at a time, and the
    <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry tutor</a> page explains how we match for
    the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chc-trim">Which topics are gone from the CBSE board paper, and which only look gone?</h2>
  <p>
    Hand-me-down notes are a common trap. For 2026-27, the solid state and Groups 15 to 18 of the p-block are out of
    the Class 12 syllabus altogether. Four further topics remain on the syllabus but are assessed by the school, not
    on the board paper: polymers, chemistry in everyday life, surface chemistry, and the isolation of elements from
    their ores.
  </p>
  <p>
    That trimming applies only to the board. NTA publishes the NEET and JEE Main syllabi separately, and material the
    board has dropped, p-block chemistry among it, may still appear there. An entrance student should check the
    official syllabus before crossing anything off. Class 12 also rests on Class 11 foundations such as the mole
    concept, equilibrium and the first organic chapters; the
    <a href="{{ url('/chemistry-home-tutor/class-11') }}">Class 11 chemistry tutor</a> page covers that year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chc-state">What should State Board chemistry students expect from a tutor?</h2>
  <p>
    The Tamil Nadu State Board sets its own higher secondary chemistry syllabus and textbooks, and the Class 12
    public examination is run by the state. We leave the paper's design to the board, which publishes it on its
    official site. A good State Board chemistry tutor teaches from the book your child's school has issued, drills
    the board's model and past papers, and for a student also aiming at NEET or JEE lays the state chapter list
    beside NTA's so that any gap is planned for in Class 11, not discovered in a mock test.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chc-tests">How does chemistry count in NEET and JEE Main?</h2>
  <ul>
    <li><strong>NEET (UG) 2026:</strong> one pen-and-paper exam of 180 questions and 720 marks. Chemistry supplied 45 questions and 180 marks, a quarter of the total.</li>
    <li><strong>JEE (Main) 2026 Paper 1:</strong> chemistry made up 25 of the 75 questions, twenty multiple-choice in Section A and five numerical-value in Section B.</li>
    <li><strong>Scoring:</strong> both exams gave four marks for a correct answer and took one away for a wrong one. NTA fixes each year's pattern anew, so read the current bulletin.</li>
  </ul>
  <p>
    NEET chemistry rewards fast, exact recall of NCERT statements, especially in inorganic and organic chapters, so
    tutors quiz straight from the textbook. JEE goes further, with step-by-step mechanisms and physical chemistry
    problems in several stages. In both, a chapter should reach board standard before entrance questions on it start,
    ideally in the same week. Useful reading: the
    <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">NEET chemistry chapters worth most attention</a>,
    our <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE chemistry guide by branch</a>, a
    comparison of <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">NEET coaching and a home
    tutor</a>, and the <a href="{{ url('/chemistry-home-tutor/neet') }}">NEET chemistry tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chc-bench">What happens in the chemistry practical exam, and how can a tutor help?</h2>
  <p>
    The 30 practical marks break down as 8 for volumetric analysis (titration), 8 for salt analysis, 6 for a
    content-based experiment, 4 for the project and 4 for the record and viva together. The 2026-27 titration uses
    potassium permanganate against a standard solution of oxalic acid or Mohr's salt (ferrous ammonium sulphate),
    which students weigh out and prepare themselves.
  </p>
  <p>
    Reagents stay in the school laboratory, yet a good deal of preparation needs only paper. A tutor can rehearse the
    molarity calculation for the weighed solution, a tidy format for burette readings and the final result, the
    sequence of preliminary and confirmatory tests in salt analysis with a reason for each step, a project topic the
    student can manage alone, and likely viva questions, such as why permanganate needs no separate indicator.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chc-areas">Does your part of Chennai change how chemistry tuition works?</h2>
  <p>
    Chemistry is written practice, usually done late in the day. These six neighbourhoods, drawn from six of our
    eight zones, show how the arrangements vary. Every locality is listed on our
    <a href="{{ url('/city/chennai') }}">Chennai page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Evening chemistry lessons in six Chennai neighbourhoods: how tutors arrive and what the family can arrange</caption>
    <thead>
      <tr><th scope="col">Neighbourhood</th><th scope="col">How tutors usually arrive</th><th scope="col">At the door</th><th scope="col">Timing tip</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $chA('besant-nagar', 'Besant Nagar') !!}</td><td>MRTS to Adyar or Thiruvanmiyur, then an auto; many city bus routes</td><td>Houses on numbered streets of a planned layout; two-wheeler parking is easy</td><td>Weekdays suit better than weekend evenings near the beach</td></tr>
      <tr><td>{!! $chA('kodambakkam', 'Kodambakkam') !!}</td><td>Suburban train to Kodambakkam, or the Green Line next door</td><td>Doorstep at older houses; a name at the gate in apartment buildings</td><td>Earlier slots avoid evening traffic on the flyover</td></tr>
      <tr><td>{!! $chA('chromepet', 'Chromepet') !!}</td><td>Suburban line, then a walk or auto from the station</td><td>Houses at the doorstep; watchman or register in apartment blocks</td><td>Times just outside the GST Road rush</td></tr>
      <tr><td>{!! $chA('kilpauk', 'Kilpauk') !!}</td><td>Green Line, then a short walk or auto</td><td>Flats sign tutors in at the gate; houses are straight to the door</td><td>Avoid driving along Poonamallee High Road at peak</td></tr>
      <tr><td>{!! $chA('avadi', 'Avadi') !!}</td><td>Local train to the Avadi suburban terminal, then an auto</td><td>Housing-board homes and plotted layouts; some estates want entry details in advance</td><td>Share the address and a contact number before the first class</td></tr>
      <tr><td>{!! $chA('kolathur', 'Kolathur') !!}</td><td>Bus or train via Villivakkam; a Line 5 station is under construction</td><td>Independent houses at the door; flats may need a gate entry</td><td>A slightly later start clears the Red Hills Road rush</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    If the route looks shaky in the pre-board months, two home lessons and one online lesson a week keep the plan on
    track.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chc-other">Are ISC, IB and IGCSE chemistry tutors available in Chennai?</h2>
  <p>
    Yes, though fewer than CBSE or State Board chemistry tutors, so an early request helps. For ISC, CISCE sets a
    theory paper alongside practical and project work, and answers should explain more than a single NCERT-style
    line. The IB Diploma course, at SL or HL, is organised around two themes, structure and reactivity; the
    scientific investigation belongs to the student, and a tutor may question the plan but must not add to it.
    Cambridge IGCSE sciences are tiered, Core or Extended, and students who move to Class 11 on another board
    usually need early work on moles, atomic structure and basic organic chemistry. Our
    <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge or Edexcel IGCSE</a> comparison explains
    the tiers. When no specialist can travel to you, pair an online specialist with a nearby tutor who checks written
    answers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chc-week">What does a sensible fortnight of chemistry tuition look like?</h2>
  <p>
    With two sessions a week, four sessions make a useful cycle:
  </p>
  <ol>
    <li><strong>Session one, physical.</strong> The current school chapter taught through numericals, with units written on every line.</li>
    <li><strong>Session two, organic.</strong> New reactions added to a single reaction map, then three conversions attempted from memory.</li>
    <li><strong>Session three, inorganic.</strong> Trends explained from the underlying reason, followed by board-style "give reasons" answers marked on the spot.</li>
    <li><strong>Session four, mixed.</strong> One timed section of a sample paper, marked against CBSE's scheme or the relevant board's model answers, with every lost mark explained.</li>
  </ol>
  <p>
    Entrance students swap part of each session for timed multiple-choice questions on the same chapter. On days
    without a lesson, redrawing the reaction map from memory and checking it against the textbook is the most useful
    ten-line habit a student can build.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chc-fees">What do chemistry home tutors in Chennai charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Rates belong to the
    tutors. They move with the exam in view, the tutor's track record with it, the evening journey to your
    neighbourhood and the number of lessons a week, and an online lesson from the same tutor may cost less. Every
    fee on your shortlist is visible before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chc-begin">How do you get a shortlist of chemistry tutors?</h2>
  <p>
    Tell us the class, the board, the exam that matters most, the branch where marks slip away, your locality with a
    nearby station, and the evenings that are free. Two or three matched chemistry tutors come back with their fees,
    and you pick one for a free demo class. If the match is wrong, we set up another demo, and moving to a different
    tutor later is free. Where nobody suitable can reach you, we suggest online or blended lessons. NXTutors is based
    in Sector 66, Gurugram, and teaches online everywhere in India. The national
    <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a> page describes our work in other cities, and
    the <a href="{{ url('/physics-home-tutor-chennai') }}">physics home tutor page for Chennai</a> covers the other half
    of most science timetables.
  </p>
  <p>
    Chemistry teachers who live in Chennai and want students nearby can browse open requests on the
    <a href="{{ url('/tuition-jobs/chennai') }}">Chennai tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
