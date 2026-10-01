{{--
  Long-form guide for the "IB physics tutor Mumbai" page. Byline: NXTutors
  Academic Team. No schools, societies or people are named.

  Course facts are reworded from ib-physics-tutor-gurgaon, which cites the IB
  Diploma Programme Physics guide, first assessment 2025 (ibo.org): five themes
  A to E and their topics, with A.4, A.5, B.4, D.4 and E.2 HL only; SL 150 h /
  HL 240 h; Paper 1A multiple choice (SL 25, HL 40 questions) and Paper 1B
  data-based questions (20 marks), sat together, 36% (SL 1 h 30 min, HL 2 h);
  Paper 2 (SL 1 h 30 min, 55 marks; HL 2 h 30 min, 90 marks) 44%; IA
  scientific investigation 24 marks, 20%, about 10 hours, 3,000-word maximum,
  four criteria of 6 marks; groups of up to three with individual research
  questions and no shared raw data; data from lab work, fieldwork,
  spreadsheets, databases or simulations; no penalty for wrong MCQ answers;
  calculators and the data booklet on both papers; collaborative sciences
  project. No other dates.

  Local detail only from database/seo-content/zones/mumbai.json (South Mumbai
  reached from the north, Mumbai Central beside Tardeo, taxis on the seafront;
  Lower Parel towers with strict visitor systems; Santacruz West redevelopment
  and gate desks, Western and Harbour lines; Line 1 from Versova to Ghatkopar;
  Kanjurmarg on the Central line, Powai reached from it; Ghodbunder Road
  corridor with no suburban station and Metro 4/4A under construction, planned
  Manpada station; South Mumbai families often find IB/IGCSE science help
  online) and the city hub (international schools keep their own terms;
  monsoon). The listing sentence reports public tuition listings
  (plan/mumbai-competitors.md section 4), not NXTutors request data. Area links
  render only for active Mumbai areas. Fee wording is the approved sentence.
  FAQs render from faqs/ib-physics-tutor-mumbai.php.
--}}
@php
  $ipxSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ipxA = function (string $slug, string $label) use ($ipxSlugs) {
      return in_array($slug, $ipxSlugs, true)
          ? '<a href="' . e(url('/city/mumbai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="ipxGuideTitle">
  <h2 id="ipxGuideTitle">IB physics tutor in Mumbai: DP Physics SL and HL, Paper 1B and the investigation</h2>

  <p class="nx-guide__lede">
    DP Physics is the IB subject where Mumbai students most often discover that knowing the content is not enough. A
    student who scored well in SSC, ICSE, CBSE or IGCSE physics can still stumble on a dataset they have never seen, an
    "explain" question that wants three linked steps, or an investigation they have to design themselves. The course
    first examined in 2025 leans hard on exactly those skills. This page sets out the SL and HL course, the papers, how
    a tutor should build data and uncertainty skills, the internal assessment and its limits, and how IB physics tuition
    runs across Mumbai, Thane and Navi Mumbai. It sits under our
    <a href="{{ url('/physics-home-tutor-mumbai') }}">physics home tutors in Mumbai</a> page and the
    <a href="{{ url('/ib-tutor-mumbai') }}">IB tutors in Mumbai</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ipx-themes">Five themes</a> ·
    <a href="#ipx-exam">The exam components</a> ·
    <a href="#ipx-level">SL or HL</a> ·
    <a href="#ipx-data">Data and uncertainty</a> ·
    <a href="#ipx-long">Paper 2 answers</a> ·
    <a href="#ipx-ia">The investigation</a> ·
    <a href="#ipx-rhythm">Two-year rhythm</a> ·
    <a href="#ipx-route">Arriving from another board</a> ·
    <a href="#ipx-travel">Tutors by zone</a> ·
    <a href="#ipx-mode">Home or online</a> ·
    <a href="#ipx-demo">Demo checklist</a> ·
    <a href="#ipx-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ipx-themes">The course in five themes</h2>
  <p>
    The current guide replaces the old core-plus-options structure with five themes that every student studies. SL is
    planned for 150 teaching hours and HL for 240. Some topics belong to everyone, some shared topics carry extra
    higher-level understandings, and five topics are HL only.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>IB DP Physics themes, with the HL-only topics marked</caption>
    <thead>
      <tr><th scope="col">Theme</th><th scope="col">Studied by all</th><th scope="col">HL only</th></tr>
    </thead>
    <tbody>
      <tr><td>A. Space, time and motion</td><td>Kinematics; forces and momentum; work, energy and power</td><td>Rigid body mechanics; Galilean and special relativity</td></tr>
      <tr><td>B. The particulate nature of matter</td><td>Thermal energy transfers; greenhouse effect; gas laws; current and circuits</td><td>Thermodynamics</td></tr>
      <tr><td>C. Wave behaviour</td><td>Simple harmonic motion; wave model; wave phenomena; standing waves and resonance; Doppler effect</td><td>None, though shared topics go further at HL</td></tr>
      <tr><td>D. Fields</td><td>Gravitational fields; electric and magnetic fields; motion in electromagnetic fields</td><td>Induction</td></tr>
      <tr><td>E. Nuclear and quantum physics</td><td>Structure of the atom; radioactive decay; fission; fusion and stars</td><td>Quantum physics</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The middle column hides a trap: an HL student's simple harmonic motion or gravitational fields goes further than an
    SL student's. A tutor has to know which understandings in each shared topic are additional higher level.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipx-exam">The exam components and their weight</h2>
  <ul>
    <li><strong>Paper 1 (36% of the grade).</strong> Two parts sat back to back. Paper 1A is multiple choice: 25 questions at SL, 40 at HL. Paper 1B carries 20 marks of data-based questions at both levels. SL students have one and a half hours in total, HL students two.</li>
    <li><strong>Paper 2 (44%).</strong> Short-answer and extended-response questions: 55 marks in one and a half hours at SL, 90 marks in two and a half hours at HL.</li>
    <li><strong>Internal assessment (20%).</strong> One scientific investigation, marked out of 24 at both levels.</li>
  </ul>
  <p>
    Wrong multiple-choice answers cost nothing, so no item should be left blank. Calculators are allowed in both papers
    and students work with a clean copy of the physics data booklet. The booklet removes the need to memorise formulae
    but not the need to choose the right one, and that choice is precisely what the questions probe.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipx-level">Choosing SL or HL physics</h2>
  <p>
    HL suits students looking at engineering, physics or related degrees who are comfortable with algebra and long
    chains of reasoning; it adds rigid bodies, relativity, thermodynamics, induction and quantum physics, and a much
    heavier Paper 2. SL suits students who need a group 4 science but whose priorities lie elsewhere, or who take
    another science at HL. SL still covers all five themes, so it is not a light option. The maths course matters too:
    an HL physicist on AI SL maths may need extra calculus support, which the
    <a href="{{ url('/ib-maths-tutor-mumbai') }}">IB maths tutor in Mumbai</a> page discusses.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipx-data">Building data and uncertainty skills for Paper 1B</h2>
  <p>
    Paper 1B hands the student an experiment or a dataset they have never met and asks them to reason about it. The
    skills it tests are learnable, but only through regular practice:
  </p>
  <ol>
    <li><strong>Read the graph before calculating.</strong> Name the axes, units and trend, then decide what the gradient and intercept mean physically.</li>
    <li><strong>Linearise.</strong> Choose what to plot against what so that the expected relationship becomes a straight line.</li>
    <li><strong>Carry uncertainties.</strong> Absolute, fractional and percentage uncertainties, error bars, and the steepest and shallowest gradient lines.</li>
    <li><strong>Use the exact word.</strong> Random versus systematic error, precision versus accuracy. Markschemes reward the precise term.</li>
    <li><strong>Suggest a real improvement.</strong> Specific to the method in front of the student, not "repeat the experiment".</li>
  </ol>
  <p>
    Ten minutes of one data question at the end of each session, kept up through DP1, builds more of this than a cram
    before mocks. Our <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL/HL, IA and EE guide</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipx-long">Writing Paper 2 answers that collect every mark</h2>
  <p>
    A typical Paper 2 question opens with a calculation, moves to an explanation and finishes by applying the same idea
    somewhere less familiar, sometimes crossing from one theme into another. Marks drain away when numbers appear
    without the equation and substitution, when an "explain" answer stops after one sentence, and when a student has
    revised topics in separate boxes and cannot follow a question from fields into energy. The fix is a routine: attempt
    the question, mark it against the markscheme, then rewrite it. Two or three rewritten answers each week teach more
    than a stack of fresh questions that nobody marks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipx-ia">The scientific investigation, and what a tutor may do</h2>
  <p>
    The internal assessment is identical at SL and HL and shares its format with biology and chemistry. The student
    poses their own research question and answers it with quantitative data they gather and analyse, in about 10 hours
    of class time, writing a report of no more than 3,000 words. It is marked on four criteria of 6 marks each:
    research design, data analysis, conclusion and evaluation. Data may come from a lab, fieldwork, a spreadsheet model,
    a database or a simulation. Students may work in groups of up to three, but each needs an individual research
    question and cannot present the same raw data as anyone else.
  </p>
  <p>
    Simulations and databases are worth a thought in Mumbai, where a monsoon week can disrupt school lab time, but the
    choice is the student's and the school's. A tutor may explain the criteria, help the student test whether an idea is
    feasible and rich enough in physics, and teach uncertainty analysis and graphing. A tutor may not choose the
    question, design the method, process the data, or write or edit the report. The IB's academic-integrity rules apply
    and the school supervisor authenticates the work. Schools also run the collaborative sciences project, an
    interdisciplinary task separate from the investigation.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipx-rhythm">How tutoring time is spread across the two years</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A typical DP Physics tutoring rhythm</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Focus</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Start of DP1</td><td>Kinematics with graphs, vectors, the uncertainty toolkit</td><td>One or two</td></tr>
      <tr><td>Rest of DP1</td><td>Themes A to C in step with school; a Paper 1B-style question every week</td><td>One (SL) or two (HL)</td></tr>
      <tr><td>Investigation window</td><td>Criteria, feasibility, analysis skills; the report untouched</td><td>Two or three sessions in all</td></tr>
      <tr><td>DP2</td><td>Fields, nuclear and quantum physics; then timed Paper 1 and 2 practice against markschemes</td><td>Two, more before mocks</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipx-route">Arriving in DP Physics from another board</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What changes, by previous course</caption>
    <thead>
      <tr><th scope="col">Coming from</th><th scope="col">Usually strong on</th><th scope="col">Usually new</th></tr>
    </thead>
    <tbody>
      <tr><td>SSC or CBSE Class 10</td><td>Numericals and standard derivations</td><td>Data-based questions, extended explanations, designing an investigation</td></tr>
      <tr><td>ICSE Class 10</td><td>Careful written working</td><td>Uncertainty work and the IB's open question style</td></tr>
      <tr><td>IGCSE Physics</td><td>Mechanics, waves and electricity content</td><td>More algebra, fields as a unifying idea, routine uncertainties</td></tr>
      <tr><td>IB MYP</td><td>Criteria-based inquiry</td><td>Speed and fluency in exam-style calculation</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A short block of sessions before DP1, on graphs, vectors and uncertainties, makes the first term manageable.
    Students coming from Cambridge may find the <a href="{{ url('/igcse-physics-tutor-mumbai') }}">IGCSE physics tutor in
    Mumbai</a> page useful for what they already know.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipx-travel">IB physics tutors by zone</h2>
  <p>
    Experienced IB physics tutors are a small group wherever you live, so we plan around routes:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/mumbai/zone/south-mumbai') }}">South Mumbai</a>.</strong> For {!! $ipxA('breach-candy', 'Breach Candy') !!}, tutors come from the north; Mumbai Central is close, then a taxi along the seafront. Our zone notes record that many families here find IB science help online.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/worli-dadar-central-mumbai') }}">Worli, Dadar and Central Mumbai</a>.</strong> Towers on former mill land in {!! $ipxA('lower-parel', 'Lower Parel') !!} run strict visitor systems; send the tutor's details to the desk before the demo.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/bandra-khar-santacruz') }}">Bandra, Khar and Santacruz</a>.</strong> {!! $ipxA('santacruz-west', 'Santacruz West') !!} is on both the Western and Harbour lines; redevelopment means more gate desks.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/andheri-jogeshwari') }}">Andheri and Jogeshwari</a>.</strong> {!! $ipxA('versova', 'Versova') !!} is where Line 1 begins, so a tutor from Ghatkopar can ride straight across.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/chembur-ghatkopar-powai') }}">Chembur, Ghatkopar and Powai</a>.</strong> {!! $ipxA('kanjurmarg', 'Kanjurmarg') !!} has its own Central line station and is also how most tutors reach Powai.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/thane') }}">Thane</a>.</strong> {!! $ipxA('manpada', 'Manpada') !!} is on the Ghodbunder corridor, where the metro is still being built; a tutor from the same stretch, plus online sessions, usually works.</li>
  </ul>
  <p>
    See every locality on the <a href="{{ url('/city/mumbai') }}">Mumbai home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipx-mode">Home or online for IB physics</h2>
  <p>
    Online sessions suit much of IB physics: Paper 1B data practice, markscheme marking and investigation discussions
    all work on a shared screen, and online opens up IB-experienced tutors beyond your zone. Home sessions help with long
    Paper 2 problem-solving and with students who concentrate better with someone beside them. Since international
    schools keep their own terms and the monsoon makes weekday crossings unreliable, many families settle on one
    weekend home session and one or two online sessions with the same tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipx-demo">Questions to put to a tutor in the IB physics demo</h2>
  <ol>
    <li>Can they name the five themes and say which topics are HL only? A tutor who talks about "options" is using the old course.</li>
    <li>Ask them to show how they would draw the steepest and shallowest gradient lines through error bars.</li>
    <li>Ask what they will and will not do for the investigation. The answer should come without prompting.</li>
    <li>Do they mark with IB markschemes and make your child rewrite lost-mark answers?</li>
    <li>Do they know which understandings in shared topics are additional higher level?</li>
    <li>Which line do they travel on, and what is the plan for a monsoon week?</li>
  </ol>
  <p>
    If the demo misses on these, tell us and the next matched tutor gets a free demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipx-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee and you see it before the demo; see the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and <a href="{{ url('/blog/home-tuition-fees-mumbai') }}">home tuition fees in Mumbai</a>.
  </p>
  <p>
    Tell us SL or HL, DP year, where the difficulty lies (content, Paper 1B, Paper 2, the investigation), your station or
    locality and your slots. We shortlist two or three matched tutors, you choose one for a
    <a href="{{ url('/demo-class') }}">free demo class</a>, and switching later is free. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a>,
    the national <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> guide, or
    <a href="{{ url('/ib-igcse-chemistry-tutor-mumbai') }}">IB and IGCSE chemistry tutors in Mumbai</a>.
  </p>
  </section>

  </div>
</article>
