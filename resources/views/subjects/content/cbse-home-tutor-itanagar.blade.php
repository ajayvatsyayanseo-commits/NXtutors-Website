{{--
  Main board page for "CBSE home tutor Itanagar" (state-capital wave 2, compact
  depth, subjects writer, 3 Oct 2026). Arunachal Pradesh: no state-board page in this
  release and no state board is named. Authors: Abhinandan Tiwary (role: Class 10
  CBSE and ICSE maths) and Aaditya Kashyap (role: CBSE and ICSE science); no
  anecdotes, years or results claimed.

  Board fact (research file board_facts, re-read 3 Oct 2026): CBSE's "CBSE
  Affiliation: An Overview" (https://saras.cbse.gov.in/saras/attach/CHAPTER_1_CBSE_AN_OVERVIEW.pdf)
  says CBSE "grants affiliation to the schools for conduct of Class X and XII
  Examination" and lists among its affiliated schools the "Government schools of
  Delhi, Chandigarh, Sikkim, Arunachal Pradesh and Andaman and Nicobar Islands,
  Ladakh (UT)" alongside private independent schools. No shares or counts are
  claimed for the capital.

  CBSE facts only as the Gurgaon board hub (cbse-home-tutor-gurgaon) states them,
  citing cbseacademic.nic.in / cbse.gov.in: Curriculum 2026-27 Secondary (80 + 20,
  33% pass, about half competency-focused questions, Class IX common paper +
  optional Advanced 25 marks / 1 hour outside the aggregate, 50%+ noted;
  Basic/Standard ending with the 2026-27 Class X batch; third language internally
  assessed); two Class X board exams from 2026; Curriculum 2026-27 Senior
  Secondary (Physics 042, Chemistry 043, Biology 044 at 70 + 30; Mathematics 041 /
  Applied Mathematics 241 at 80 + 20; Accountancy 055, Economics 030, Business
  Studies 054 at 80 + 20).
  Local detail only from itanagar-research.json. No schools, colleges, people or
  places of worship named. Fee wording is the approved sentence.
--}}
@php
  $itcbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $itcbA = function (string $slug, string $label) use ($itcbSlugs) {
      return in_array($slug, $itcbSlugs, true)
          ? '<a href="' . e(url('/city/itanagar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide itcb-guide" aria-labelledby="itcbGuideTitle">
  <h2 id="itcbGuideTitle">CBSE home tutors in Itanagar: the board the capital's government schools are affiliated to</h2>

  <p class="nx-guide__lede">
    In many cities the first thing a family settles is which board to follow. In the Itanagar capital region the
    starting point is clearer. CBSE's own overview of affiliation names the government schools of
    Arunachal Pradesh among the schools affiliated to it, so a child in a government school here writes CBSE's
    Class 10 and Class 12 board exams, and private schools can hold CBSE affiliation too. This page is about getting
    the most from that board: how its papers are built and marked, which rules are new for the 2026-27 secondary classes,
    how senior subjects split their marks, and how tutors reach homes from Chimpu to Nirjuli. Abhinandan Tiwary
    contributes the Class 10 maths guidance and Aaditya Kashyap the science guidance.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#itcb-source">What CBSE says</a> ·
    <a href="#itcb-ncert">Learning the CBSE way</a> ·
    <a href="#itcb-classes">Stage by stage</a> ·
    <a href="#itcb-secondary">The secondary years</a> ·
    <a href="#itcb-senior">Senior subjects</a> ·
    <a href="#itcb-subjects">Subject pages</a> ·
    <a href="#itcb-other">Other boards</a> ·
    <a href="#itcb-homes">Six localities</a> ·
    <a href="#itcb-questions">Questions for the demo</a> ·
    <a href="#itcb-begin">Fees and first steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="itcb-source">What does CBSE's own document say about Arunachal Pradesh?</h2>
  <p>
    CBSE describes itself as an examination-conducting body under the Ministry of Education that grants affiliation to
    schools for the conduct of the Class X and XII examinations. In its overview of affiliation, it lists the kinds of
    school affiliated to it, and the government schools of Arunachal Pradesh are named in that list, together with
    private independent schools and several national school systems.
  </p>
  <p>
    Two practical points follow. First, if your child attends a government school in Itanagar, Naharlagun or the
    nearby towns, the Class 10 and 12 exams are CBSE's, and the books are NCERT's. Second, the document does not say
    which board every private school follows, so if your child is in a private school, confirm the affiliation with the
    school before briefing a tutor. The <a href="{{ url('/city/itanagar') }}">Itanagar home tutors page</a> explains how
    we match across the capital region.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itcb-ncert">What does "learning the CBSE way" mean in practice?</h2>
  <p>
    An NCERT chapter usually builds an idea from an activity or a solved example and then expects the student to
    carry it into an unfamiliar situation. CBSE papers follow the same thinking: in the secondary classes about half of each paper is
    competency-based, built around cases, data, sources and everyday situations. A child who has prepared by learning
    set answers can find these questions unsettling. A tutor's routine for each new chapter should look something like
    this:
  </p>
  <ol>
    <li>Go through the chapter side by side, highlighting each definition, each solved example and each summary box.</li>
    <li>Have every textbook question, inside and at the end of the chapter, answered on paper rather than orally.</li>
    <li>Follow up with exemplar items and two or three case-style questions built on the same concept.</li>
    <li>Mark the answers with the official scheme beside them, so the child can see which step earns which mark.</li>
  </ol>
  <p>
    Sample papers and marking schemes come out each year on cbseacademic.nic.in; a tutor should always work from the
    current set rather than an old guidebook.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itcb-classes">What does each stage of CBSE ask of a student?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE from Class 6 to Class 12: who assesses each year, where students stumble, and where a tutor helps</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Who assesses</th><th scope="col">Where students stumble</th><th scope="col">Where a tutor helps</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>School exams only</td><td>Negative numbers, fractions, careful reading in science</td><td>Mending foundations before anything is at stake</td></tr>
      <tr><td>9</td><td>School exams: 80 written, 20 internal</td><td>Maths and science both get harder in the same year</td><td>Regular chapter tests and advice on the optional Advanced papers</td></tr>
      <tr><td>10</td><td>CBSE board: 80 written, 20 from school</td><td>Applying ideas; laying answers out for step marks</td><td>This year's sample papers, checked against the scheme</td></tr>
      <tr><td>11</td><td>School exams only</td><td>The step up in physics, chemistry, maths or accountancy</td><td>Firm foundations ahead of Class 12</td></tr>
      <tr><td>12</td><td>CBSE board: theory plus practical or internal</td><td>Board revision competing with entrance preparation</td><td>A single timetable covering both</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    To pass Class 10 a student needs 33% in each subject. When a child suddenly struggles in Class 9, the cause is
    often a gap from Class 6 or 7, so in the middle years a tutor who goes back to fix it does more good than one who
    races forward.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itcb-secondary">What is new in Classes 9 and 10 for 2026-27?</h2>
  <ul>
    <li><strong>One maths and one science paper for everyone in Class 9.</strong> Both are 80-mark papers, identical for the whole class.</li>
    <li><strong>An extra, optional Advanced level.</strong> Alongside the common papers, students can sit Advanced maths, Advanced science, both or none. Each is a one-hour, 25-mark paper of higher-order questions. It does not count in the aggregate; a result of 50% or above is recorded on the marksheet.</li>
    <li><strong>The end of Basic and Standard.</strong> Students in Class 10 in 2026-27 are the final group to pick one of the two maths levels.</li>
    <li><strong>A second board sitting in Class 10.</strong> Everyone takes the first exam. A student who has passed can return for the second to raise the score in as many as three subjects from science, maths, social science and languages.</li>
    <li><strong>A third language.</strong> Required during the transition years, with marks given by the school rather than a board exam.</li>
  </ul>
  <p>
    Plan as though the first sitting decides everything, and think of the second only as a way to rescue one weak
    subject. In Class 9, secure the common paper before adding an Advanced one. Our
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> and
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a> help with the order
    of work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itcb-senior">How do the senior subjects split their marks?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Theory and practical or internal marks for common senior CBSE subjects, 2026-27</caption>
    <thead>
      <tr><th scope="col">Subjects (codes)</th><th scope="col">Theory marks</th><th scope="col">Other marks</th></tr>
    </thead>
    <tbody>
      <tr><td>The three sciences: 042, 043, 044</td><td>70</td><td>30, practical</td></tr>
      <tr><td>Mathematics 041, or else Applied Mathematics 241</td><td>80</td><td>20, internal</td></tr>
      <tr><td>Commerce: Accountancy 055, Economics 030, Business Studies 054</td><td>80</td><td>20, internal</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Everything taught in Class 12 can appear in the board paper, and CBSE has signalled that senior papers will test
    application more and more. Each year's design arrives with the sample paper, so a tutor should check it before
    planning revision. Students who also face entrance exams can use the national
    <a href="{{ url('/jee-home-tutor') }}">JEE</a> and <a href="{{ url('/neet-home-tutor') }}">NEET</a> tutor pages,
    and our guides to <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics</a>,
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Class 12 chemistry</a> and
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">calculus and algebra</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itcb-subjects">Subject pages for the capital region</h2>
  <ul>
    <li>Maths: <a href="{{ url('/maths-home-tutor-itanagar') }}">home tutors in Itanagar</a>, plus our national board-year pages for <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths</a> and <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths</a>.</li>
    <li>Middle-school and Class 10 science: <a href="{{ url('/science-home-tutor-itanagar') }}">science tutors in Itanagar</a>, with the <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science notes</a>.</li>
    <li>Senior sciences: <a href="{{ url('/physics-home-tutor-itanagar') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-itanagar') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-itanagar') }}">biology</a> tutors in the capital.</li>
    <li><a href="{{ url('/english-home-tutor-itanagar') }}">English tutors in Itanagar</a> for reading, writing and literature.</li>
    <li><a href="{{ url('/online-tutor-itanagar') }}">Online tutors for Itanagar</a> when the right teacher lives elsewhere.</li>
  </ul>
  <p>
    The <a href="{{ url('/cbse-home-tutor-gurgaon') }}">CBSE board guide</a> goes deeper into the board itself.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itcb-other">What if your child's school follows a different board?</h2>
  <p>
    A private school may follow another board, such as CISCE's ICSE and ISC, or offer an international course. Tell us
    the board in your first message. Tutors for these courses are fewer in the capital region than CBSE tutors, so we
    may suggest an online specialist. A child moving into a CBSE school from another board, often at Class 9 or 11,
    benefits from a short bridge in the holidays before the new class: the first NCERT chapters, the way CBSE frames its
    questions, and some answers written out and marked in full.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itcb-homes">How do tutors reach six localities of the capital region?</h2>
  <ul>
    <li><strong>{!! $itcbA('chimpu', 'Chimpu') !!}:</strong> the northern entry to the city; much of it is official campus and staff quarters, so share the tutor's name with the gate before the first class.</li>
    <li><strong>{!! $itcbA('niti-vihar', 'Niti Vihar') !!}:</strong> a quiet residential area of quarters and bungalows on winding hill roads; a fixed weekly slot works well, with an online class ready for heavy rain.</li>
    <li><strong>{!! $itcbA('c-sector-itanagar', 'C-Sector') !!}:</strong> officers' colonies and houses climbing above Gandhi Market; parking is tight near the market, so a two-wheeler or shared taxi is easier.</li>
    <li><strong>{!! $itcbA('barapani', 'Barapani') !!}:</strong> the western entry to Naharlagun, where a tutor can walk to most homes from the market; avoid the evening market stretch.</li>
    <li><strong>{!! $itcbA('naharlagun', 'Naharlagun') !!}:</strong> the capital region's second town, with quarters, houses and buildings around the daily market; E Sector and G Extension are up link roads, often reached by auto.</li>
    <li><strong>{!! $itcbA('nirjuli', 'Nirjuli') !!}:</strong> staff housing on a large technical campus and private houses near the highway; campus gates register visitors.</li>
  </ul>
  <p>
    Zone pages:
    <a href="{{ url('/city/itanagar/zone/itanagar-north-chimpu-ganga') }}">Itanagar North (Chimpu and Ganga)</a>,
    <a href="{{ url('/city/itanagar/zone/central-itanagar') }}">Central Itanagar</a>,
    <a href="{{ url('/city/itanagar/zone/naharlagun-papu-nallah') }}">Naharlagun and Papu Nallah</a> and
    <a href="{{ url('/city/itanagar/zone/nirjuli-banderdewa-doimukh') }}">Nirjuli, Banderdewa and Doimukh</a>. The
    <a href="{{ url('/blog/itanagar-home-tuition-guide') }}">Itanagar home tuition guide</a> suggests good lesson times for each.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itcb-questions">Five questions to put to a CBSE tutor at the demo</h2>
  <ol>
    <li><strong>"Whose practice papers do you use?"</strong> Listen for CBSE's current sample papers rather than a commercial guide.</li>
    <li><strong>"Can you take my child through one case-study question now?"</strong> A good tutor teaches how to read the case before solving it.</li>
    <li><strong>"Where would this answer lose marks?"</strong> Hand over a marked school answer and see whether the tutor spots missing steps, units or labels.</li>
    <li><strong>"How will you find gaps from earlier years?"</strong> Expect a concrete method, such as a short diagnostic test.</li>
    <li><strong>"How will you report progress?"</strong> A monthly note of chapters finished, scores and recurring mistakes is reasonable.</li>
  </ol>
  <p>
    Each request brings two or three matched tutors with their fees listed in advance; the opening class is free, and
    changing tutor afterwards is free as well. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>
    before their profile goes live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itcb-begin">Fees and first steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    For a CBSE student in the capital, the class, the number of subjects, the sessions each week and the tutor's journey
    settle where a fee lands. Read the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-itanagar') }}">home tuition fees in Itanagar</a>.
  </p>
  <p>
    Share the class, the subjects, your locality with a landmark, whether you live in an official colony, and your
    free slots, and then request a <a href="{{ url('/demo-class') }}">free demo class</a>. Or look through
    <a href="{{ url('/tutors') }}">tutor profiles</a>. If you teach CBSE subjects in the capital region, see
    <a href="{{ url('/tuition-jobs/itanagar') }}">tuition jobs in Itanagar</a>.
  </p>
  </section>

  </div>
</article>
