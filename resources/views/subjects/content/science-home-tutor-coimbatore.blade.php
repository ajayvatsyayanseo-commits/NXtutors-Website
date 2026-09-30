{{--
  Long-form guide for the "science home tutor Coimbatore" page (Classes 6 to
  10, CBSE and ICSE, with the Tamil Nadu State Board described generally).
  Byline in config: Aaditya Kashyap; role statement only, no anecdotes. Local
  facts come only from database/seo-content/areas/coimbatore-research.json
  (zone_facts and area "about" texts). Exam facts reuse the checked statements
  in database/seo-content/blog/cbse-class-10-science-notes (80 + 20, 39
  questions by type, 30/25/25 sections, unit marks, internal 5/5/5/5) and
  cbse-class-10-board-year-plan-gurgaon (two Class 10 exams), plus the
  50/30/20 competency split, formative-only topics, 14 listed experiments,
  Class 9 Exploration unit marks, Curiosity for Classes 6 and 7, and ICSE
  three-paper science as already stated on the Delhi and Faridabad science
  pages. No state exam pattern is given. No school, society, mall or people's
  names, no distances or travel times, only the allowed fee sentence.

  Area links render only when that Coimbatore area page exists and is active.
--}}
@php
  $cbAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cbA = function (string $slug, string $label) use ($cbAreaSlugs) {
      return in_array($slug, $cbAreaSlugs, true)
          ? '<a href="' . e(url('/city/coimbatore/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide cbes-guide" aria-labelledby="cbesGuideTitle">
  <h2 id="cbesGuideTitle">Science home tutor in Coimbatore, Classes 6 to 10: the right textbook, the right words, the same slot each week</h2>

  <p class="nx-guide__lede">
    Science in the school years is three subjects sharing one timetable, and the marks at the end depend on small,
    repeatable things: the correct term, a labelled diagram, a unit written after every number. For a Coimbatore child
    between Class 6 and Class 10, the tutor also has to teach from the right book, since State Board, CBSE and ICSE
    families here use different ones, and has to reach your home at the same after-school hour every week. We come back with two or three science tutors who fit on all three counts. Their fees are on the shortlist, and you try one of them in a free demo lesson.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cbes-years">Year by year</a> ·
    <a href="#cbes-book">Which book</a> ·
    <a href="#cbes-units">Class 10 units</a> ·
    <a href="#cbes-questions">Question types</a> ·
    <a href="#cbes-inschool">Assessed in school</a> ·
    <a href="#cbes-nine">Class 9</a> ·
    <a href="#cbes-where">Six localities</a> ·
    <a href="#cbes-watch">What to watch</a> ·
    <a href="#cbes-fees">Fees</a> ·
    <a href="#cbes-go">Getting going</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cbes-years">How should science tuition change from one class to the next?</h2>
  <p>
    Aaditya Kashyap, who teaches CBSE and ICSE science, writes the board sections of this page. A science tutor for
    this age group should shift focus as the child moves up:
  </p>
  <ul>
    <li><strong>Class 6 and Class 7.</strong> NCERT's <em>Curiosity</em> books teach through activities. The tutor's work is to turn each activity into a clear written sentence using the proper term, plus a neat labelled sketch.</li>
    <li><strong>Class 8.</strong> Chemistry, biology and physics now read like separate books. Simple numericals and word equations appear, and a missing unit starts costing marks.</li>
    <li><strong>Class 9.</strong> The pace jumps: motion and its graphs, the particle nature of matter and the cell all arrive in one year. Gaps that open now tend to stay open.</li>
    <li><strong>Class 10.</strong> The year points at one board paper, and half its marks go to applying ideas rather than recalling them.</li>
  </ul>
  <p>
    Through Class 10, families rarely need more than one science tutor, and a single tutor has a hidden benefit: the same person notices
    when a physics numerical is failing because of weak algebra. The national
    <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page sets out how we match in every city, while the <a href="{{ url('/science-home-tutor/class-8') }}">Class 8 science tutor</a> page deals with the years before the board.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbes-book">State Board, CBSE or ICSE: why does the textbook come first?</h2>
  <p>
    The book decides what the tutor teaches, in what order and with what practice papers. Three routes are common in
    Coimbatore.
  </p>
  <p>
    <strong>Tamil Nadu State Board.</strong> The state has its own science syllabus and textbooks, and Class 10 closes
    with a public examination the state conducts. We leave that paper's design to the board, which publishes it; a
    suitable tutor teaches from the state book in your child's bag and practises with the board's model and past papers.
  </p>
  <p>
    <strong>CBSE.</strong> Every class uses NCERT, and the board paper is set out in the next section. Most science tutors in the city know this route well.
  </p>
  <p>
    <strong>ICSE.</strong> CISCE examines Class 10 science as three separate papers, Physics, Chemistry and Biology,
    each with internal assessment of its own. Schools choose their textbooks within the CISCE syllabus, so the tutor
    must plan from those titles and set practice from CISCE specimen papers. Fewer tutors in the city have taught ICSE science, so an early request helps, and some families hire help for just one of the three papers from Class 9.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbes-units">Which units carry the CBSE Class 10 science marks?</h2>
  <p>
    The theory paper is three hours long and worth 80 marks. Twenty more come from the school, 5 each for periodic assessment, multiple assessment, the portfolio and practical-based subject enrichment.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science 2026-27: the five units, their marks and a routine that fits each one</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">A routine that fits</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical Substances</td><td>25</td><td>Equations balanced from memory, then checked against the book</td></tr>
      <tr><td>World of Living</td><td>25</td><td>Diagrams drawn and labelled without looking, twice a week</td></tr>
      <tr><td>Effects of Current</td><td>13</td><td>Circuit numericals with units written on every line</td></tr>
      <tr><td>Natural Phenomena</td><td>12</td><td>Ray diagrams with arrows, drawn before any formula</td></tr>
      <tr><td>Our Environment</td><td>5</td><td>A short recall quiz at the end of the chapter</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Split by strand, biology is worth 30 marks and chemistry and physics 25 each. Measured by the skill tested, 50% of marks reward knowing and understanding, 30% applying, and 20% analysing and evaluating. For chapter help, see our <a href="{{ url('/blog/cbse-class-10-science-notes') }}">notes on CBSE Class 10 science</a>, while the <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page lays out the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbes-questions">What kinds of question does the Class 10 paper ask?</h2>
  <p>
    CBSE's 2026-27 sample paper has 39 questions. Twenty are worth one mark each, multiple-choice and assertion–reason
    items together. Six short answers carry two marks and seven carry three. Three case- or source-based questions carry
    four marks, and three long answers carry five. In practice that means a two-mark answer needs a definition and one
    example, a three-mark answer three distinct points, and a five-mark answer a diagram or equation with four or five
    points around it. Case questions reward reading the passage or data first. A tutor who marks practice answers
    against these shapes teaches exam technique without calling it that.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbes-inschool">Which Class 10 topics are marked only by the school?</h2>
  <p>
    For 2026-27 the board paper leaves out three areas that the school assesses instead: evolution; how elements are arranged in the periodic table; and the group of electromagnetic induction, the generator and the electric motor. Teach them anyway, since internal marks and Class 11 lean on them, but keep board-revision weeks for examined chapters. Fourteen experiments are named in the curriculum and some board questions are framed around them, so the practical file doubles as revision.
  </p>
  <p>
    Every student sits the compulsory main exam. Eligible students may also take a second, optional sitting to raise marks in as many as three subjects, science among them; the 2027 dates are not yet out, so follow cbse.gov.in and treat the main exam as the
    target. The <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">Class 10 board-year planner</a> maps
    the months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbes-nine">What is new in CBSE Class 9 science?</h2>
  <p>
    This session Class 9 uses <em>Exploration</em>, NCERT's new science book, and CBSE's 2026-27 curriculum is built on it. The annual exam is still out of 80, plus 20 internal. The largest unit is Matter: its nature and behaviour, at 27 marks; World of living follows at 25, then Motion, force, work and sound at 23, with Earth as a system at 5. Notes passed down from an older sibling follow the old book, so
    a plan should start from the new chapters. School practicals include preparing onion-peel and cheek-cell slides,
    separating mixtures and plotting motion graphs; a tutor who explains why each set-up works makes the matching theory
    questions much easier. More on our page about <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutors</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbes-where">How does an after-school science slot work in six Coimbatore localities?</h2>
  <p>
    A younger child's lesson normally sits between school and dinner, so a short, predictable trip for the tutor
    matters most. These six localities, from the centre to the eastern and southern sides, show how arrangements vary.
    Browse tutors by locality on our <a href="{{ url('/city/coimbatore') }}">Coimbatore page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>After-school science lessons in six Coimbatore localities: homes, how tutors arrive and what to arrange</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Homes</th><th scope="col">How tutors arrive</th><th scope="col">Worth arranging</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $cbA('race-course', 'Race Course') !!}</td><td>Apartments near the centre, many with three bedrooms, on tree-lined streets</td><td>Avinashi Road gives tutors from the eastern suburbs a direct route; Coimbatore Junction is the nearest main station</td><td>Give the tutor's name to the security desk; avoid the busy walking-track hours at dawn and dusk</td></tr>
      <tr><td>{!! $cbA('ganapathy', 'Ganapathy') !!}</td><td>Houses on narrow streets, newer apartment buildings, a few villa projects</td><td>Town buses on Sathy Road; Coimbatore North Junction by train</td><td>Share a landmark with the door number; pick a tutor on your side of Sathy Road</td></tr>
      <tr><td>{!! $cbA('kalapatti', 'Kalapatti') !!}</td><td>Mostly plots and independent houses, with apartments and villas growing</td><td>Tutors come from both the Avinashi Road and Sathy Road sides</td><td>Send a map pin before the first class, as some layouts are spread out</td></tr>
      <tr><td>{!! $cbA('sowripalayam', 'Sowripalayam') !!}</td><td>Mid-income apartment buildings alongside older houses</td><td>From Ramanathapuram or Singanallur; Pilamedu station serves this side</td><td>Tell the watchman the regular class days; start early so the lesson ends before dinner</td></tr>
      <tr><td>{!! $cbA('kuniyamuthur', 'Kuniyamuthur') !!}</td><td>Independent houses and plots, many built by the families themselves</td><td>Along Palakkad Road from Ukkadam, or from Kovaipudur and Sundarapuram</td><td>Mid-afternoon or early evening, away from the rush on Palakkad Road</td></tr>
      <tr><td>{!! $cbA('sundarapuram', 'Sundarapuram') !!}</td><td>Plots, houses built on them and ready apartments</td><td>Frequent town buses on Pollachi Road; Podanur Junction is the nearest station</td><td>Late afternoon; let an apartment guard know the class days</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbes-watch">What should you watch for during the free demo?</h2>
  <p>
    Ask the tutor to teach whatever chapter the school is on, and notice whether they insist on these five things:
  </p>
  <ol>
    <li><strong>The exact term.</strong> "Alveoli", not "air sacs in the lungs"; vague wording loses marks.</li>
    <li><strong>State symbols where asked.</strong> (s), (aq) and (g) on a balanced equation can each carry credit.</li>
    <li><strong>Arrows on rays.</strong> Unmarked rays, or virtual rays drawn as solid lines, cost marks in optics.</li>
    <li><strong>The working behind a ratio.</strong> In heredity, the cross must be shown, not just the answer.</li>
    <li><strong>Answer length that matches the marks.</strong> Three points for three marks, and no padding.</li>
  </ol>
  <p>
    The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> lists more.
    If the match is wrong, we book a demo with another shortlisted tutor, and a later change of tutor carries no charge.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbes-fees">What do science tutors in Coimbatore charge for home lessons?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    rates. Class 10 lessons are usually priced higher than those for Classes 6 to 8, and travel to your locality and lessons per week shape the figure too. All fees appear on the shortlist, ahead of the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbes-go">How do you get going?</h2>
  <p>
    Tell us your child's class and board, which science feels weakest, where you live (a landmark helps) and the afternoons your family can offer. A shortlist of two or three science tutors follows, fees included, and you pick one to try in a free demo class. Where no suitable tutor can travel at that hour, we suggest online or mixed lessons. NXTutors works from an office in Sector 66, Gurugram, and runs online lessons nationwide. For Class 11 onwards, see our
    <a href="{{ url('/chemistry-home-tutor-coimbatore') }}">chemistry home tutors in Coimbatore</a>.
  </p>
  <p>
    Science teachers living in Coimbatore who want students nearby can view open requests on the
    <a href="{{ url('/tuition-jobs/coimbatore') }}">Coimbatore tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
