{{--
  Long-form guide for the "science home tutor Dehradun" page (Classes 6 to 10,
  CBSE, ICSE and the Uttarakhand board in general terms). Byline in config:
  Aaditya Kashyap; role statement only, no anecdotes. Local facts come only
  from database/seo-content/areas/dehradun-research.json (zone_facts and area
  "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog/cbse-class-10-science-notes (80 + 20, 39
  questions by type, 30/25/25 sections, unit marks, internal 5/5/5/5) and
  cbse-class-10-board-year-plan-gurgaon (two Class 10 exams), plus the
  50/30/20 competency split, formative-only topics, 14 listed experiments,
  Class 9 Exploration unit marks, Curiosity for Classes 6 and 7, and ICSE
  three-paper science as already stated on the Delhi, Faridabad and Patna
  science pages. Uttarakhand Board of School Education: name, Ramnagar
  (Nainital) office, High School examination, syllabus and question banks
  from https://ubse.uk.gov.in/ (fetched 3 Oct 2026); no pattern given.
  No school, college, society or people's names, no distances or travel
  times, only the allowed fee sentence.

  Area links render only when that Dehradun area page exists and is active.
--}}
@php
  $ddAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ddA = function (string $slug, string $label) use ($ddAreaSlugs) {
      return in_array($slug, $ddAreaSlugs, true)
          ? '<a href="' . e(url('/city/dehradun/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide dds-guide" aria-labelledby="ddsGuideTitle">
  <h2 id="ddsGuideTitle">Science home tutor in Dehradun, Classes 6 to 10: a single tutor across physics, chemistry and biology, at an hour that survives rain and winter</h2>

  <p class="nx-guide__lede">
    Over five school years, a child's science book changes character. Class 6 is mostly looking and noticing; by
    Class 10 the same subject has split into three, each demanding numericals, equations or labelled figures. Dehradun children
    meet that shift through different textbooks: NCERT for CBSE schools, the books each ICSE school selects, or the
    prescribed texts of the Uttarakhand board. A good science tutor teaches from whichever book is on your child's
    desk, arrives at the same hour after school whether it is a monsoon afternoon or a cold winter evening, and
    builds careful written answers well before the board year. NXTutors sends you two or three such tutors, shows each
    fee first, and makes the opening class a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#dds-stage">Stage by stage</a> ·
    <a href="#dds-ubse">Uttarakhand board</a> ·
    <a href="#dds-ten">Class 10 paper</a> ·
    <a href="#dds-school">Marked in school</a> ·
    <a href="#dds-nine">Class 9 book</a> ·
    <a href="#dds-icse">ICSE science</a> ·
    <a href="#dds-habits">Habits to drill</a> ·
    <a href="#dds-areas">Six localities</a> ·
    <a href="#dds-fees">Fees</a> ·
    <a href="#dds-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="dds-stage">How does a science tutor's job change from Class 6 to Class 10?</h2>
  <p>
    Aaditya Kashyap writes the CBSE and ICSE guidance on this page. The short version is that the tutor moves from
    explaining the world to training exam answers, and the stages below show where that shift happens.
  </p>
  <dl>
    <dt><strong>Classes 6 and 7</strong></dt>
    <dd>NCERT's <em>Curiosity</em> books, or your school's own text, are built on activities. The tutor's work is to turn each activity into one accurate sentence and a neat sketch, and to swap everyday words for the scientific ones.</dd>
    <dt><strong>Class 8</strong></dt>
    <dd>The three sciences begin to separate, numericals arrive and chemistry introduces word equations. Watch for whether a unit follows every number your child writes.</dd>
    <dt><strong>Class 9</strong></dt>
    <dd>The steepest climb: motion graphs, the structure of matter and the cell land in the same months. Gaps should be closed in the month they appear, not saved for the summer.</dd>
    <dt><strong>Class 10</strong></dt>
    <dd>Every chapter is now aimed at the board paper and how it is marked. By the second term your child should have written at least one section under exam conditions.</dd>
  </dl>
  <p>
    Until Class 10, one tutor for all three strands usually works better than three, because a single person can see
    whether a failed numerical is an arithmetic problem or a concept problem. How we approach science nationally is on
    the <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page, while the
    <a href="{{ url('/science-home-tutor/class-6') }}">Class 6</a> and
    <a href="{{ url('/science-home-tutor/class-8') }}">Class 8</a> science tutor pages cover the middle years.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dds-ubse">Your child studies science on the Uttarakhand board: what should the tutor bring?</h2>
  <p>
    The Uttarakhand Board of School Education, whose office is at Ramnagar in Nainital district, conducts the
    state's High School examination at Class 10. It publishes its own syllabus, along with question banks and model
    answer sheets, on ubse.uk.gov.in. We do not set out a UBSE science paper here, since the board fixes and revises
    its own scheme; the website is the place to confirm what applies this year.
  </p>
  <p>
    Three questions decide the match. Can the tutor teach in the language your child answers in, Hindi or English?
    Will practice come from the prescribed book and the board's own question banks rather than from another board's
    guide? And will diagrams and balanced equations get the same weekly drill they would for any other syllabus? A
    tutor who says yes to all three suits a UBSE student well. For board-specific help beyond science, the
    <a href="{{ url('/uttarakhand-board-tutor-dehradun') }}">Uttarakhand board tutor in Dehradun</a> page has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dds-ten">CBSE Class 10 science: how is the paper built?</h2>
  <p>
    Candidates write for three hours for 80 marks. The remaining 20 are internal and divide into four equal parts:
    periodic tests, multiple assessment, the portfolio, and subject enrichment through practical work. Across the
    board paper, biology is worth 30 marks while physics and chemistry hold 25 apiece.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What each Class 10 science unit is worth on the 2026-27 CBSE paper, and a routine for each</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Weekly practice</th></tr>
    </thead>
    <tbody>
      <tr><td>World of Living (heredity, reproduction, life processes, control and coordination)</td><td>25</td><td>One labelled diagram redrawn from memory</td></tr>
      <tr><td>Chemical Substances (carbon compounds, metals and non-metals, acids, bases and salts, chemical reactions)</td><td>25</td><td>Balancing and naming, a few equations every session</td></tr>
      <tr><td>Effects of Current (electric circuits and resistance, then magnetism from current)</td><td>13</td><td>Every numerical line ends with its unit</td></tr>
      <tr><td>Natural Phenomena (light, the eye and colour)</td><td>12</td><td>Ray diagrams, an arrowhead on each ray</td></tr>
      <tr><td>Our Environment</td><td>5</td><td>A quick revision pass; easy marks if not skipped</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The 2026-27 sample paper has 39 questions. Twenty one-mark items come first, a mix of multiple-choice and
    assertion–reason; then six two-mark answers, seven three-mark answers, three four-mark questions built on a case
    or a source, and three five-mark long answers. By skill, half the marks test knowledge and understanding, 30%
    application and 20% analysis and evaluation. Each type wants a different drill: fast recall for the one-mark block,
    as many separate points as there are marks for short answers, reading the passage before the question in the case
    items, and a diagram or equation plus four or five clear points in a long answer. CBSE puts sample papers and
    marking schemes on cbseacademic before the exam, and those make the most reliable practice. See our
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science notes</a> and the
    <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dds-school">Topics the board leaves to the school, and the two-exam system</h2>
  <p>
    Three pieces of the 2026-27 syllabus are tested inside school only. One is the physics of generators and motors
    together with electromagnetic induction; the second is evolution; the third is how the periodic table orders the
    elements. Because they feed internal marks and Class 11 picks them up again, they deserve real teaching, even
    though board revision time belongs to the chapters on the paper. The curriculum also lists 14 experiments, and board questions draw on
    them, so the practical file belongs in revision too.
  </p>
  <p>
    All Class 10 students sit a compulsory main exam; eligible students may take a second, optional sitting to improve
    up to three subjects, science among them. The 2027 dates are not yet out, so follow cbse.gov.in and prepare as if
    the main exam were the only attempt. Our <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">Class 10 board-year
    plan</a> takes the calendar month by month.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dds-nine">Class 9 now uses a different NCERT book</h2>
  <p>
    The Class 9 textbook for 2026-27 is NCERT's <em>Exploration</em>. Marks keep the familiar 80 plus 20 shape, shared
    across four units: Matter, its nature and behaviour (27), World of living (25), Motion, force, work and sound (23)
    and Earth as a system (5). A sibling's old notebook follows the previous textbook's chapters, so it is a poor
    guide this year; the tutor's plan should start from <em>Exploration</em> itself. Our
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page goes further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dds-icse">What changes when the school follows ICSE?</h2>
  <p>
    At ICSE Class 10, CISCE examines science as three separate papers, Physics, Chemistry and Biology, each with its
    own internal assessment. Schools pick their textbooks within the CISCE syllabus, so the tutor works from your
    child's books and from CISCE specimen papers rather than an NCERT plan. Exact definitions and complete numericals
    win ICSE marks. Plenty of ICSE families want support in just one of those papers, usually starting in Class 9. ICSE science tutors
    are scarcer, so put the board in your first message; an online option widens the field. The
    <a href="{{ url('/icse-home-tutor-dehradun') }}">ICSE home tutor in Dehradun</a> page covers the board as a whole.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dds-habits">Five habits a science tutor should make automatic</h2>
  <p>
    Careful children collect marks in diagrams and equations, and hurried ones lose them there. Whatever the board, a
    tutor should come back to these until they need no reminder:
  </p>
  <ol>
    <li><strong>Ray diagrams</strong> for mirrors and lenses, arrows on each ray and virtual rays shown dotted.</li>
    <li><strong>Circuit diagrams</strong> in standard symbols, ammeter in series and voltmeter in parallel.</li>
    <li><strong>Life-process diagrams</strong> such as the heart, the digestive system and the nephron, labels spelled correctly.</li>
    <li><strong>Balanced equations</strong>, with state symbols whenever the question asks for them.</li>
    <li><strong>Heredity crosses</strong> written out in full, never just a ratio.</li>
  </ol>
  <p>
    At the free demo, ask the tutor to teach the current school chapter and notice whether these habits appear without
    prompting. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a>
    adds more. If the first tutor does not suit, your next demo is with another tutor on the shortlist, and a later
    switch is free as well.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dds-areas">Six Dehradun localities: planning the after-school science lesson</h2>
  <p>
    For Classes 6 to 10, the lesson usually sits between the end of school and dinner, so a short, predictable trip
    for the tutor matters more than anything else. Here is what to arrange in six localities on the northern, eastern
    and south-eastern sides of the city. Browse tutors by locality on the <a href="{{ url('/city/dehradun') }}">Dehradun
    page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>Up the valley towards Mussoorie</h3>
      <p>
        {!! $ddA('jakhan', 'Jakhan') !!} lies on the upper part of Rajpur Road, with independent houses, villas and
        apartments; tutors from Kishanpur or the Canal Road side reach it without crossing the busy centre.
        {!! $ddA('rajpur', 'Rajpur') !!}, the old settlement at the upper end of the road, has many houses set back from the
        main road, so send a map pin before the first visit. {!! $ddA('malsi', 'Malsi') !!}, known for its deer park,
        is mostly newer gated complexes: register the tutor at the gate and ask whether a regular pass can follow the
        demo. Evenings turn cold early up here in winter, so many families move science a little earlier.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>East along Raipur Road</h3>
      <p>
        {!! $ddA('raipur-road', 'Raipur Road') !!} runs east from the Sahastradhara crossing through colonies of
        plots, flats and independent houses. Families further out may find fewer tutors living close by, so a tutor
        from Dalanwala, Karanpur or Sahastradhara Road, with a slot outside the evening rush at the crossing, is often
        the practical match. Say whether you live in a house or a flat, and share a colony landmark.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>South-east, off Haridwar Road</h3>
      <p>
        {!! $ddA('nehru-colony', 'Nehru Colony') !!}, near Fuwara Chowk, has markets close at hand and a mix of houses
        and flats; a two-wheeler suits the market lanes, and an exact lane landmark saves the first visit.
        {!! $ddA('jogiwala', 'Jogiwala') !!} sits at a busy chowk joining the Haridwar highway and the ring road, which
        lets tutors from Nehru Colony or Mohkampur arrive without going through the centre; keep the slot clear of office
        hours at the chowk.
      </p>
    </div>
  </div>
  <p>
    On heavy-rain days in the monsoon, switching that day's lesson online with the same tutor keeps the week on track.
    More detail on these neighbourhoods is in the
    <a href="{{ url('/blog/dehradun-home-tuition-guide') }}">Dehradun home tuition guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dds-fees">How much does a science home tutor in Dehradun charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors fix their own
    fees. Expect Class 10 board preparation to be priced above help in Classes 6 to 8; the journey to your home and how
    many lessons you take each week shift the figure too. Fees are on the shortlist before any demo, and our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> goes through what drives them.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dds-start">What happens once you send a request?</h2>
  <p>
    Share the class and board, which of the three sciences troubles your child, a landmark near home, and the weekday
    afternoons you can offer. We reply with two or three science tutors and their fees, and you choose one for a free demo
    class. If nobody suitable can reach you at that hour, we propose an online or part-online plan. NXTutors runs from
    Sector 66, Gurugram, and teaches online throughout India. For Class 11 and 12, see our
    <a href="{{ url('/physics-home-tutor-dehradun') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-dehradun') }}">chemistry</a> and
    <a href="{{ url('/biology-home-tutor-dehradun') }}">biology</a> tutor pages for Dehradun.
  </p>
  <p>
    If you teach science and live in Dehradun, current student requests are listed on the
    <a href="{{ url('/tuition-jobs/dehradun') }}">Dehradun tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
