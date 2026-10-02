{{--
  Long-form guide for the "ICSE maths tutor Lucknow" page. Authors: Abhinandan
  Tiwary (role: Class 10 CBSE and ICSE maths) and Ajay Vatsyayan (role: IB,
  IGCSE and ISC maths, for the ISC section). No anecdotes, years or results are
  claimed for either. No schools, societies or other people are named.

  CISCE facts are reworded from icse-maths-tutor-gurgaon, which cites the CISCE
  ICSE Mathematics syllabus (80 theory + 20 internal assessment; Class 10
  units: commercial mathematics with GST, banking/recurring deposits, shares
  and dividends; algebra with linear inequations, quadratics, ratio and
  proportion, factor and remainder theorems, matrices, AP and GP; coordinate
  geometry with reflection, section and mid-point formulae, equation of a
  line; geometry with similarity, loci, circles, constructions; mensuration;
  trigonometry; statistics and probability) and the ICSE 2026 Mathematics
  specimen paper (Section A compulsory, 40 marks, including multiple-choice
  items; Section B any four questions, 40 marks; essential working required;
  rough work on the same sheet), and the CISCE ISC Mathematics syllabus 2027
  and 2028 (from the 2027 exam, seven compulsory units and no Section B/C
  choice; 80 theory + 20 project; ISC Applied Mathematics a separate
  subject). Internal assessment of at least two assignments marked 10 by the
  teacher and 10 by an external examiner, and log/trig tables, as stated in
  maths-home-tutor-lucknow (from icse-isc-maths-gurgaon-guide). Schools choose
  their own textbooks from publishers following the CISCE syllabus. No other
  dates.

  Local detail only from database/seo-content/zones/lucknow.json,
  areas/lucknow-research.json, lucknow-zone-guides.json and the Lucknow hub
  (CBSE widely followed; CISCE's ICSE and ISC have a strong, long-standing
  presence, so ICSE/ISC tutors are easier to find than in many cities;
  Gomti Nagar Extension numbered sectors on Shaheed Path, gated societies,
  entry pass; Aliganj lettered sectors A to N, Badshahnagar station, sector
  letter and house number; Jankipuram lettered sectors, no metro, tutors from
  Jankipuram, Aliganj or Vikas Nagar; Lalbagh Sachivalaya station, no lift or
  guard in older buildings; Alambagh two Red Line stations, gated communities
  keep a register, Kanpur Road rush hour; Ashiyana houses on sector lanes,
  Krishna Nagar and Singar Nagar stations). No request data is claimed. Area
  links render only for active Lucknow areas. Fee wording is the approved
  sentence. FAQs render from faqs/icse-maths-tutor-lucknow.php.
--}}
@php
  $licmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $licmA = function (string $slug, string $label) use ($licmSlugs) {
      return in_array($slug, $licmSlugs, true)
          ? '<a href="' . e(url('/city/lucknow/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="licmGuideTitle">
  <h2 id="licmGuideTitle">ICSE maths tutor in Lucknow: from the middle years to the ISC paper</h2>

  <p class="nx-guide__lede">
    CISCE's ICSE and ISC have a strong, long-standing presence in Lucknow, which makes CISCE maths tutors easier to find, but it also raises the bar:
    the question is not whether a tutor has taught ICSE, but whether they teach it the way the council marks it. The
    Class 10 sections of this page are written by Abhinandan Tiwary, who teaches Class 10 CBSE and ICSE maths on
    NXTutors, and the ISC section by Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths. For the subject across all
    boards, see our <a href="{{ url('/maths-home-tutor-lucknow') }}">maths home tutors in Lucknow</a> page; for every
    CISCE subject, the <a href="{{ url('/icse-home-tutor-lucknow') }}">ICSE and ISC tutors in Lucknow</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#licm-stages">Three stages</a> ·
    <a href="#licm-middle">Classes 6 to 8</a> ·
    <a href="#licm-paper">The Class 10 paper</a> ·
    <a href="#licm-comm">Commercial maths</a> ·
    <a href="#licm-work">Working and presentation</a> ·
    <a href="#licm-ia">The 20 internal marks</a> ·
    <a href="#licm-year">A Class 10 year</a> ·
    <a href="#licm-isc">Into ISC</a> ·
    <a href="#licm-zones">Tutors by zone</a> ·
    <a href="#licm-demo">The demo</a> ·
    <a href="#licm-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="licm-stages">Three stages of CISCE maths, three different jobs for a tutor</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What a CISCE maths tutor concentrates on at each stage</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">What the school is building</th><th scope="col">Where a tutor adds most</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 6 to 8</td><td>Arithmetic, early algebra and geometry from the school's chosen textbook</td><td>Number sense, neat step-by-step layout, and catching confusions before they harden</td></tr>
      <tr><td>Classes 9 and 10 (ICSE)</td><td>The full ICSE syllabus, including commercial mathematics, matrices and constructions</td><td>Section B question choice, presentation, and steady practice on the topics that recur</td></tr>
      <tr><td>Classes 11 and 12 (ISC)</td><td>Calculus, algebra, vectors, three-dimensional geometry and probability on a single theory paper</td><td>Method selection, long written solutions, and a project the student owns</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    One tutor can sometimes cover all three, but the skills differ enough that we match by stage. A tutor excellent at
    Class 8 foundations may not be the right person for ISC calculus, and the reverse is just as true.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="licm-middle">Classes 6 to 8: work from the child's own textbook</h2>
  <p>
    CISCE sets the syllabus, but schools choose their own textbooks from publishers that follow it. Two Lucknow
    children in the same class may therefore carry quite different books. A good middle-school tutor teaches from the
    book the school uses, follows its exercise numbering, and adds practice only where the child needs more of it.
  </p>
  <p>
    The goals in these years are modest and important: fluency with fractions, decimals and percentages, confidence
    with negative numbers and simple equations, and the habit of writing each step on its own line. ICSE Class 10
    papers reward that habit, and a child who learns it at eleven does not have to unlearn messy working at fifteen.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="licm-paper">How the ICSE Class 10 maths paper is laid out</h2>
  <p>
    The written paper carries 80 marks and the school's internal assessment 20. The council's specimen paper divides the
    80 into two halves that test different things.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Section A: 40 marks, all compulsory</h3>
  <p>
    Short questions across the syllabus, multiple-choice items among them. Nothing can be skipped, so a weak topic
    anywhere costs marks here. Speed and accuracy matter more than depth.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Section B: 40 marks, any four questions</h3>
  <p>
    Longer, multi-part questions from which the student picks four. Choosing well is a skill: a question that looks
    easy in part (a) may hide a hard construction in part (c).
  </p>
    </div>
  </div>
  <p>
    A tutor should teach both halves separately. For Section A, short timed sets that mix chapters. For Section B, full
    questions, plus practice in reading all the options in the first minutes and committing to four that the student
    can finish.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="licm-comm">Commercial mathematics: the topic CBSE-trained tutors often miss</h2>
  <p>
    The ICSE Class 10 syllabus includes a unit with no CBSE counterpart: goods and services tax, banking with recurring
    deposits, and shares and dividends. These questions are mostly arithmetic, but the vocabulary is exact, and a
    student who confuses face value with market value, or the rate of dividend with the return on investment, loses
    marks on an otherwise simple question.
  </p>
  <p>
    Ask any tutor at the demo to explain the difference between a share's face value and its market value, and to work
    through a recurring-deposit maturity question. A hesitant answer is worth noting.
    The rest of the Class 10 syllabus covers algebra (linear inequations, quadratics, ratio and proportion, the factor
    and remainder theorems, matrices, arithmetic and geometric progressions), coordinate geometry (reflection, the
    section and mid-point formulae, the equation of a line), geometry (similarity, loci, circles, constructions),
    mensuration, trigonometry, and statistics and probability. Our
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> covers each unit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="licm-work">Working shown, marks earned</h2>
  <p>
    The specimen paper is plain about it: essential working must be shown, and rough work is done on the same sheet as
    the answer, not on a separate page. A correct final line without its steps may lose marks. In practice, a tutor
    should:
  </p>
  <ul>
    <li><strong>Insist on one step per line</strong> in algebra and trigonometry, with the reason written for every geometry statement.</li>
    <li><strong>Keep construction marks visible.</strong> Arcs and loci are evidence of method.</li>
    <li><strong>Practise with the tables</strong> where questions may need logarithmic or trigonometric tables.</li>
    <li><strong>Mark homework like an examiner,</strong> giving credit for method separately from the answer, so the student sees where marks come from.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="licm-ia">The 20 internal marks</h2>
  <p>
    Internal assessment in ICSE maths is based on at least two assignments, with 10 marks from the subject teacher and
    10 from an external examiner. These marks are a fifth of the subject, and they are within easy reach for a student
    who works steadily. A tutor can help a student plan an assignment, check that the mathematics is right and keep
    the timeline, but the work itself must be the student's own.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="licm-year">A Class 10 year with an ICSE maths tutor</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How ICSE Class 10 maths tutoring can be paced through the school year</caption>
    <thead>
      <tr><th scope="col">Part of the year</th><th scope="col">Teaching focus</th><th scope="col">Exam practice</th></tr>
    </thead>
    <tbody>
      <tr><td>Start of the session</td><td>Gaps from Class 9 in algebra and geometry; commercial mathematics as the school reaches it</td><td>Short Section A style sets, two a week</td></tr>
      <tr><td>Middle of the session</td><td>Matrices, progressions, coordinate geometry, similarity, loci and constructions with the school</td><td>One full Section B question per session; assignment work kept on schedule</td></tr>
      <tr><td>Before the pre-boards</td><td>Mensuration, trigonometry, statistics and probability finished; weak units revisited</td><td>Specimen paper and older papers under time, marked for method</td></tr>
      <tr><td>Pre-boards to the exam</td><td>Only the topics the error log flags</td><td>Full papers, practice in choosing four Section B questions, presentation checked</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Two sessions a week usually covers this, rising to three in the last stretch if the pre-boards show gaps. The tutor
    should take the school's own test dates as fixed points and plan around them.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="licm-isc">Into ISC: one paper, seven units, no option to skip</h2>
  <p>
    In Classes 11 and 12, ISC Mathematics is examined through a theory paper of 80 marks and project work worth 20. From
    the 2027 examination the council's syllabus lists seven compulsory units in a single paper, with no choice between
    alternative sections, so every candidate must be ready on every unit. ISC Applied Mathematics is a separate subject;
    a student takes one or the other.
  </p>
  <p>
    The jump from ICSE is mostly about length. ISC solutions run over many lines, calculus becomes central, and the
    student must choose a method before writing anything. The unit-wise marks and the examiners' notes on common errors
    are set out on our maths page for Lucknow, linked above, and the
    <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> gives a plan for both years.
    For senior-level teaching, see the national <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page.
    Students weighing a move to the IB after Class 10 can read our
    <a href="{{ url('/ib-maths-tutor-lucknow') }}">IB maths tutors in Lucknow</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="licm-zones">ICSE maths tutors in each zone of Lucknow</h2>
  <p>
    A regular tutor is only as good as their attendance. What our zone notes say about reaching you:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/lucknow/zone/gomti-nagar-indira-nagar-chinhat') }}">Gomti Nagar, Indira Nagar and Chinhat</a>.</strong> {!! $licmA('gomti-nagar-extension', 'Gomti Nagar Extension') !!} has numbered sectors along Shaheed Path and many gated societies; ask the gate for a standing entry pass in the first week.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/mahanagar-aliganj-jankipuram') }}">Mahanagar, Aliganj and Jankipuram</a>.</strong> {!! $licmA('aliganj', 'Aliganj') !!} runs in lettered sectors; a sector letter and house number find the door, and Badshahnagar is the nearest station. {!! $licmA('jankipuram', 'Jankipuram') !!} has no metro, so a tutor living there, in Aliganj or in Vikas Nagar is easiest for evening classes.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/hazratganj-lalbagh-aminabad') }}">Hazratganj, Lalbagh and Aminabad</a>.</strong> {!! $licmA('lalbagh', 'Lalbagh') !!} has Sachivalaya station within it; older buildings may have no lift or guard, so send the floor and a landmark.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/alambagh-ashiyana-rajajipuram') }}">Alambagh, Ashiyana and Rajajipuram</a>.</strong> {!! $licmA('alambagh', 'Alambagh') !!} has two Red Line stations, and its gated communities keep a visitor register. {!! $licmA('ashiyana', 'Ashiyana') !!} is mostly houses on sector lanes near Krishna Nagar station, with easy parking.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/sushant-golf-city-vrindavan-yojana-telibagh') }}">Sushant Golf City, Vrindavan Yojana and Telibagh</a>.</strong> No station serves this belt, so tutors come by road; for ISC, an online class can bring in a specialist from across the city.</li>
  </ul>
  <p>
    Every locality is listed on the <a href="{{ url('/city/lucknow') }}">Lucknow home tutors page</a>, and our guides to
    <a href="{{ url('/blog/gomti-nagar-and-trans-gomti-tuition-guide') }}">Gomti Nagar and Trans-Gomti</a> and
    <a href="{{ url('/blog/central-and-south-lucknow-tuition-guide') }}">central and south Lucknow</a> go into each
    zone. For geometry and constructions, a tutor at the table is hard to beat; for ISC revision, online sessions with
    a camera on the notebook work well.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="licm-demo">Six questions for an ICSE maths demo</h2>
  <ol>
    <li><strong>"Which class and which textbook have you taught from?"</strong> Experience with the school's book saves time.</li>
    <li><strong>"Explain face value and market value of a share."</strong> A quick check of commercial maths.</li>
    <li><strong>"How would you help my child choose four questions in Section B?"</strong></li>
    <li><strong>"How do you mark homework?"</strong> Look for method and answer marked separately.</li>
    <li><strong>"What will you do and not do for the assignments?"</strong> Guidance, yes; writing them, no.</li>
    <li><strong>"Which route will you take?"</strong> A clear answer predicts regular attendance.</li>
  </ol>
  <p>
    The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more to try.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="licm-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Middle-school ICSE maths generally costs less than ISC. Each tutor sets their own fee and you see it before the
    demo; see the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our post on
    <a href="{{ url('/blog/home-tuition-fees-lucknow') }}">home tuition fees in Lucknow</a>.
  </p>
  <p>
    Send the class, the textbook, what is going wrong, your locality with its sector or khand, and your free slots.
    You will see two or three matched tutors, the first class is a <a href="{{ url('/demo-class') }}">free demo</a>, and
    switching tutor later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID
    check</a> before their profile goes live, and you can browse <a href="{{ url('/tutors') }}">tutor profiles</a>.
    For Cambridge students, see <a href="{{ url('/igcse-maths-tutor-lucknow') }}">IGCSE maths tutors in Lucknow</a>.
  </p>
  </section>

  </div>
</article>
