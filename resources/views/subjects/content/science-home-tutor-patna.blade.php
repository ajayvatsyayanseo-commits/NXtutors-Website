{{--
  Long-form guide for the "science home tutor Patna" page (Classes 6 to 10,
  CBSE, ICSE and the Bihar board in general terms). Byline in config: Aaditya
  Kashyap; role statement only, no anecdotes. Local facts come only from
  database/seo-content/areas/patna-research.json (zone_facts and area "about"
  texts). Exam facts reuse the checked statements in
  database/seo-content/blog/cbse-class-10-science-notes (80 + 20, 39
  questions by type, 30/25/25 sections, unit marks, internal 5/5/5/5) and
  cbse-class-10-board-year-plan-gurgaon (two Class 10 exams), plus the
  50/30/20 competency split, formative-only topics, 14 listed experiments,
  Class 9 Exploration unit marks, Curiosity for Classes 6 and 7, and ICSE
  three-paper science as already stated on the Delhi and Faridabad science
  pages. The Bihar School Examination Board is described in general terms
  only. No school, college, society or people's names, no distances or
  travel times, only the allowed fee sentence.

  Area links render only when that Patna area page exists and is active.
--}}
@php
  $ptAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ptA = function (string $slug, string $label) use ($ptAreaSlugs) {
      return in_array($slug, $ptAreaSlugs, true)
          ? '<a href="' . e(url('/city/patna/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide pts-guide" aria-labelledby="ptsGuideTitle">
  <h2 id="ptsGuideTitle">Science home tutor in Patna, Classes 6 to 10: the right textbook, a steady afternoon slot, and answers written the way examiners mark them</h2>

  <p class="nx-guide__lede">
    From Class 6 to Class 10, school science turns from a subject of observations into three subjects with numericals,
    equations and diagrams. Children in Patna meet that change through different books: CBSE and NCERT, the ICSE
    texts chosen by each school, or the Bihar board's prescribed books. A science tutor has to teach from the book on
    your child's table, reach your home at the same hour after school, and build careful answer-writing long before the
    board year. NXTutors shortlists two or three science tutors who can do that, shows you each one's fee in advance,
    and makes the first class a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pts-years">Year by year</a> ·
    <a href="#pts-bseb">Bihar board science</a> ·
    <a href="#pts-units">Class 10 units</a> ·
    <a href="#pts-questions">Question types</a> ·
    <a href="#pts-school">School-assessed topics</a> ·
    <a href="#pts-nine">Class 9</a> ·
    <a href="#pts-icse">ICSE</a> ·
    <a href="#pts-where">Six localities</a> ·
    <a href="#pts-diagrams">Diagrams to drill</a> ·
    <a href="#pts-cost">Fees</a> ·
    <a href="#pts-next">Next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pts-years">What does a science tutor need to do in each class from 6 to 10?</h2>
  <p>
    The CBSE and ICSE sections of this guide come from Aaditya Kashyap. What a tutor is for shifts as a child moves
    up, and the table below sets out each stage.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Science tuition from Class 6 to Class 10: the tutor's main job each year and a quick check for parents</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Tutor's main job</th><th scope="col">Quick check for parents</th></tr>
    </thead>
    <tbody>
      <tr><td>6 and 7</td><td>Turn each activity in NCERT's <em>Curiosity</em> books, or your school's own text, into a clear sentence and a labelled sketch</td><td>Does your child use the scientific word, not an everyday one?</td></tr>
      <tr><td>8</td><td>Separate physics, chemistry and biology, and introduce numericals and word equations</td><td>Is a unit written after every number?</td></tr>
      <tr><td>9</td><td>Handle a steeper book with motion graphs, matter and the cell arriving together</td><td>Are gaps being fixed within the same month?</td></tr>
      <tr><td>10</td><td>Aim every chapter at the board paper and its marking</td><td>Has your child written a timed section under exam rules?</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Up to Class 10, one tutor for all three sciences usually works well, because one person sees the whole picture:
    if a physics numerical keeps going wrong, they can tell whether the arithmetic or the idea is to blame. Our national
    <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page explains the approach, and the
    <a href="{{ url('/science-home-tutor/class-6') }}">Class 6 science tutor</a> and
    <a href="{{ url('/science-home-tutor/class-8') }}">Class 8 science tutor</a> pages cover the earlier years.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pts-bseb">What if your child studies science on the Bihar board?</h2>
  <p>
    The Bihar School Examination Board, headquartered in Patna, conducts the state's Class 10 (Matric) examination
    and sets its own syllabus and marking scheme, which it updates from time to time. We do not describe its science
    paper here; parents and tutors should take the current details from the board's official website.
  </p>
  <p>
    For matching, three questions matter more than any pattern. Does the tutor teach in the language your child
    answers in, Hindi or English? Will practice come from the prescribed textbook and from papers the board itself
    releases? And will diagrams and equations be drilled with the same care as for any other board? A tutor who can
    say yes to all three is a sound choice, whichever board your child's school follows.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pts-units">How are the 80 CBSE Class 10 science marks divided?</h2>
  <p>
    The written board paper runs for three hours and carries 80 marks. Another 20 come from the school, split
    equally, 5 apiece, between periodic tests, multiple assessment, the portfolio and practical-based subject enrichment.
    Biology accounts for 30 of the board's 80, with chemistry and physics on 25 apiece. Unit by unit:
  </p>
  <ul>
    <li><strong>Chemical Substances, 25 marks:</strong> equations, acids, bases and salts, metals and non-metals, carbon compounds. Balancing and naming need weekly practice.</li>
    <li><strong>World of Living, 25 marks:</strong> life processes, control and coordination, reproduction, heredity. Labelled diagrams earn a large share here.</li>
    <li><strong>Effects of Current, 13 marks:</strong> circuits, resistance and the magnetic effect. Numericals with units on every line.</li>
    <li><strong>Natural Phenomena, 12 marks:</strong> light, the eye and the colourful world. Ray diagrams with arrows, always.</li>
    <li><strong>Our Environment, 5 marks:</strong> short and quick to secure if it is revised, not skipped.</li>
  </ul>
  <p>
    By thinking skill, half the paper tests knowledge and understanding, 30% tests application and 20% asks for
    analysis and evaluation. The <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science
    notes</a> work through each chapter, and our <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science
    tutor</a> page shows how a board year is planned.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pts-questions">What kinds of question does the Class 10 science paper ask?</h2>
  <p>
    The 2026-27 CBSE sample paper sets 39 questions in all. The first twenty carry a single mark, some multiple-choice
    and some assertion–reason. After them come six two-mark short answers, seven three-mark answers, three
    four-mark questions built on a case or source, and three long answers at five marks. Each type calls for its own drill: quick recall
    for the one-mark block, exactly as many distinct points as the marks for short answers, careful reading of the
    passage or data first in case-based items, and a diagram or equation with four or five clear points for a long
    answer. CBSE publishes sample papers and marking schemes on cbseacademic before the exam, and those are the most
    dependable practice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pts-school">Which topics does the school assess instead of the board, and how many exams are there?</h2>
  <p>
    In 2026-27 the board paper leaves out three areas, which the school marks instead: the electric motor,
    electromagnetic induction and the generator; evolution; and how elements are arranged in the periodic table. They still
    count towards internal marks and come back in Class 11, so they should be taught properly, just not given
    board-revision weeks. The curriculum also lists 14 experiments, and board questions draw on them, which makes the
    practical file part of revision.
  </p>
  <p>
    Every Class 10 student sits the compulsory main exam. Eligible students may then take a second, optional sitting to
    raise their result in as many as three subjects, science included. The 2027 dates are not yet announced, so follow cbse.gov.in and
    prepare as if the main exam is the only chance. The
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> maps the months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pts-nine">What is new in Class 9 science?</h2>
  <p>
    CBSE's 2026-27 curriculum follows NCERT's new Class 9 book, <em>Exploration</em>. The yearly exam is still worth
    80 with 20 internal, shared by four units. The largest is Matter, its nature and behaviour, at 27; World of living has
    25; Motion, force, work and sound has 23; and the smallest, Earth as a system, has 5. Notes passed down from an older sibling follow the earlier
    book, so a tutor should plan from the new chapters. See our
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pts-icse">How does ICSE science differ for a tutor?</h2>
  <p>
    At ICSE Class 10, science is not one paper but three: CISCE sets Physics, Chemistry and Biology separately,
    and each carries internal assessment of its own. Schools choose their own textbooks within the CISCE syllabus, so the tutor must work from the
    books your child has and from CISCE specimen papers rather than an NCERT plan. Precise definitions and complete
    numericals are where ICSE marks are won. Some families only need help with one of the three papers, usually from
    Class 9. ICSE-experienced science tutors are harder to find, so ask early; online lessons widen the choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pts-where">Where in Patna do you live, and how does that shape the after-school slot?</h2>
  <p>
    For a child in Classes 6 to 10, the lesson usually falls between school and dinner, so a short and predictable
    trip matters most. Six localities from different parts of the city show what to arrange. Browse tutors by locality
    on our <a href="{{ url('/city/patna') }}">Patna page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>Beside Boring Road</h3>
      <p>
        {!! $ptA('sri-krishna-puri', 'Sri Krishna Puri') !!} and North Sri Krishna Puri are long-established colonies
        along Boring Road. The northern part is mostly flats of two and three bedrooms, while older houses remain in the
        inner lanes. For a flat, pass on the building name, floor and a number for the guard; for a house, a lane
        landmark. {!! $ptA('shivpuri', 'Shivpuri') !!} runs from near Boring Road down towards Patel Nagar; mention
        the temple at its entrance or Shiv Market as a landmark, and avoid the Thursday temple crowd when fixing a day.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>West, along Bailey Road</h3>
      <p>
        {!! $ptA('raja-bazar', 'Raja Bazar') !!} sits in the middle of the Bailey Road belt, with small complexes of two-
        and three-bedroom flats. Tutors from Shastri Nagar, Rukanpura and Patliputra Colony can often reach it easily;
        tell the guard the tutor's name before the demo. {!! $ptA('khagaul', 'Khagaul') !!}, next to Danapur, has its own
        municipal council, and Danapur railway station stands within it. Say whether you live in a house or a flat, and
        leave some margin, as roads near the station are busiest at train times.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>East-central and south-west</h3>
      <p>
        {!! $ptA('rajendra-nagar', 'Rajendra Nagar') !!} is a planned colony divided by numbered roads, so the road
        number and house or building name are all a tutor needs. Rajendra Nagar Terminal is its station; the nearest
        open metro stop today is Malahi Pakri in Kankarbagh. {!! $ptA('anisabad', 'Anisabad') !!} grew around a busy
        roundabout and mixes flats of one to four bedrooms with plotted homes. A tutor who lives in Anisabad or on the
        Phulwari side keeps an after-school slot most reliably.
      </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pts-diagrams">Which diagrams and equations should a science tutor drill until they are automatic?</h2>
  <p>
    Diagrams and equations are where careful children gain marks and hurried ones lose them. A tutor should return to
    these again and again, whatever the board:
  </p>
  <ol>
    <li><strong>Ray diagrams</strong> for mirrors and lenses, with arrows on every ray and virtual rays dotted.</li>
    <li><strong>Circuit diagrams</strong> using standard symbols, with the ammeter in series and the voltmeter in parallel.</li>
    <li><strong>Life-process diagrams</strong> such as the human heart, the digestive system and the nephron, with labels spelled correctly.</li>
    <li><strong>Balanced chemical equations</strong>, with state symbols wherever the question asks for them.</li>
    <li><strong>Crosses in heredity</strong>, shown in full rather than as a bare ratio.</li>
  </ol>
  <p>
    At the free demo, ask the tutor to teach the current chapter and notice whether these habits come up unprompted.
    The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> suggests
    more to look for. Should the first tutor not suit, your next demo is with someone else from the shortlist, and a
    switch later on is free too.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pts-cost">How much does a science home tutor in Patna cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their own
    fee. Within Classes 6 to 10, board-year teaching tends to cost more than support in the middle years, while the
    journey to your locality and how many lessons you book each week also play a part. All fees are visible before the
    demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pts-next">What happens after you contact us?</h2>
  <p>
    Tell us the class and board, the strand that troubles your child most, your locality with a landmark, and the
    afternoons that suit you. We send a shortlist of two or three science tutors with their fees, and you pick
    one to meet at a free demo class. When nobody suitable can travel to you at that hour, an online or part-online
    plan is the alternative. NXTutors works out of Sector 66, Gurugram, and teaches online in every part of India.
  </p>
  <p>
    Science teachers who live in Patna and would like students nearby can see open requests on the
    <a href="{{ url('/tuition-jobs/patna') }}">Patna tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
