{{--
  Long-form guide for the "IB physics tutor Ahmedabad" page. Byline: NXTutors
  Academic Team. No schools, societies or people are named.

  Course facts are reworded from ib-physics-tutor-gurgaon / ib-physics-tutor-
  mumbai, which cite the IB Diploma Programme Physics guide, first assessment
  2025 (ibo.org): five themes A to E and their topics, with A.4 rigid body
  mechanics, A.5 Galilean and special relativity, B.4 thermodynamics, D.4
  induction and E.2 quantum physics HL only; SL 150 h / HL 240 h; Paper 1A
  multiple choice (SL 25, HL 40 questions) and Paper 1B data-based questions
  (20 marks), sat together, 36% (SL 1 h 30 min, HL 2 h); Paper 2 (SL 1 h 30
  min, 55 marks; HL 2 h 30 min, 90 marks) 44%; IA scientific investigation 24
  marks, 20%, about 10 hours, 3,000-word maximum, four criteria of 6 marks;
  groups of up to three with individual research questions and no shared raw
  data; data from lab work, fieldwork, spreadsheets, databases or
  simulations; no penalty for wrong MCQ answers; calculators and the data
  booklet on both papers; collaborative sciences project. GSEB facts (Std 10
  Science paper 80 marks opening with 24 one-mark objective items) from
  gujarat-board-tutor-ahmedabad, which cites gseb.org. No other dates.

  Local detail only from zones/ahmedabad.json, ahmedabad-zone-guides.json and
  ahmedabad-research.json (Thaltej at the Blue Line's western end, plotted
  homes with parking; Prahlad Nagar no metro, phone confirmation at gates;
  Kankaria East underground station, lake crowds on Sundays and in the
  December carnival; Ghatlodia no metro, Blue Line to Gurukul Road or Thaltej;
  Odhav Road to the Amraiwadi stations, industrial shift traffic; Vasna APMC
  Red Line terminus) and the Ahmedabad hub view (online opens up teachers for
  IB; Uttarayan in mid-January). No claim about where IB families live. Area
  links render only for active Ahmedabad areas. Fee wording is the approved
  sentence. FAQs render from faqs/ib-physics-tutor-ahmedabad.php.
--}}
@php
  $aibpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $aibpA = function (string $slug, string $label) use ($aibpSlugs) {
      return in_array($slug, $aibpSlugs, true)
          ? '<a href="' . e(url('/city/ahmedabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="aibpGuideTitle">
  <h2 id="aibpGuideTitle">IB physics tutor in Ahmedabad: themes, data questions and an investigation the student owns</h2>

  <p class="nx-guide__lede">
    Diploma Physics changed shape with the guide first assessed in 2025: five themes studied by everyone, a paper of
    data-based questions alongside the multiple choice, and a single scientific investigation worth a fifth of the
    grade. For a family in Ahmedabad the practical questions follow quickly. Is your child at SL or HL? Where are the
    marks leaking: recall, data handling or long answers? And can a tutor who knows this course reach a flat in
    Thaltej or Prahlad Nagar every week, or is part of the work better done online? This guide answers those in turn.
    It sits under our <a href="{{ url('/physics-home-tutor-ahmedabad') }}">physics home tutors in Ahmedabad</a> page
    and the <a href="{{ url('/ib-tutor-ahmedabad') }}">IB tutors in Ahmedabad</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#aibp-themes">Five themes</a> ·
    <a href="#aibp-papers">Papers and weightings</a> ·
    <a href="#aibp-level">SL or HL</a> ·
    <a href="#aibp-data">Paper 1B and uncertainty</a> ·
    <a href="#aibp-p2">Paper 2 answers</a> ·
    <a href="#aibp-ia">The investigation</a> ·
    <a href="#aibp-bridge">From GSEB, CBSE or IGCSE</a> ·
    <a href="#aibp-plan">Two years</a> ·
    <a href="#aibp-map">Tutors by zone</a> ·
    <a href="#aibp-mode">Home or online</a> ·
    <a href="#aibp-demo">The demo</a> ·
    <a href="#aibp-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="aibp-themes">What the course covers: five themes, some topics HL only</h2>
  <p>
    There are no options any more; every student studies the same five themes. SL is planned for 150 hours and HL for
    240, and the extra HL time goes into five whole topics plus deeper treatment of several shared ones.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>IB DP Physics themes and the topics reserved for HL</caption>
    <thead>
      <tr><th scope="col">Theme</th><th scope="col">HL-only topic</th><th scope="col">A tutor's watch-point</th></tr>
    </thead>
    <tbody>
      <tr><td>A. Space, time and motion</td><td>Rigid body mechanics; Galilean and special relativity</td><td>Free-body diagrams drawn carelessly; momentum signs</td></tr>
      <tr><td>B. The particulate nature of matter</td><td>Thermodynamics</td><td>Gas law units; internal resistance in circuits</td></tr>
      <tr><td>C. Wave behaviour</td><td>None as a separate topic</td><td>Phase and path difference in interference questions</td></tr>
      <tr><td>D. Fields</td><td>Induction</td><td>Field and potential confused; direction rules</td></tr>
      <tr><td>E. Nuclear and quantum physics</td><td>Quantum physics</td><td>Energy unit conversions; decay equations</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Theme C is the one to watch at HL: although it has no HL-only topic, shared topics such as simple harmonic motion
    carry additional higher-level understandings. A tutor needs to know exactly which statements in the guide are HL
    additions, or an HL student will be under-prepared without realising it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aibp-papers">The papers, their timing and what each is worth</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>DP Physics assessment, first examined 2025</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL</th><th scope="col">HL</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1A (multiple choice) + 1B (data-based, 20 marks), one sitting</td><td>25 MCQs; 1 h 30 min in all</td><td>40 MCQs; 2 h in all</td><td>36%</td></tr>
      <tr><td>Paper 2 (short and extended response)</td><td>55 marks, 1 h 30 min</td><td>90 marks, 2 h 30 min</td><td>44%</td></tr>
      <tr><td>Scientific investigation (internal)</td><td>24 marks</td><td>24 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    There is no penalty for a wrong multiple-choice answer, so a blank is simply a lost mark. Calculators are allowed
    in both papers, and students have the physics data booklet. The booklet supplies equations; it does not tell the
    student which one fits a situation or what each symbol means in context, which is where most errors start.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aibp-level">SL or HL: a decision worth revisiting in DP1</h2>
  <p>
    Students who need physics for engineering or physical-science degrees usually take HL; check the entry
    requirements of the universities your child is considering. The workload difference is real: ninety extra hours,
    five more topics and a longer, heavier Paper 2. A useful test in the first term of DP1 is whether the student can
    handle the HL mechanics and fields material without falling behind in their other HL subjects. A tutor can give an
    honest reading after a few weeks, while a change of level is still easy to arrange with the school.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aibp-data">Paper 1B: data, graphs and uncertainty every week</h2>
  <p>
    Paper 1B gives students unfamiliar data, often from an experiment, and asks them to interpret it: plot or read a
    graph, find a gradient, linearise a relationship, judge uncertainties. These skills cannot be crammed in the last
    month. The most effective tutors build a small data task into every session:
  </p>
  <ul>
    <li>reading a gradient and intercept and stating units;</li>
    <li>propagating absolute and percentage uncertainties through a calculation;</li>
    <li>drawing and using error bars and lines of maximum and minimum gradient;</li>
    <li>choosing what to plot to turn a curve into a straight line;</li>
    <li>writing one clear sentence that evaluates the method.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">guide to IB physics SL, HL and the IA</a> goes deeper into
    these skills.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aibp-p2">Paper 2: answers that earn every available mark</h2>
  <p>
    Paper 2 rewards the student who makes reasoning visible. Typical losses come from a correct number with no
    equation shown, a missing unit or wrong significant figures, an explanation that names a principle without
    applying it, and a "describe" answer written as if it were "explain". A tutor should mark practice answers
    against IB markschemes, then have the student rewrite the weakest answer in full. Doing that once a week for a
    term changes a student's Paper 2 more than any number of extra topics.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aibp-ia">The scientific investigation: where help must stop</h2>
  <p>
    The investigation is about ten hours of work, written up in no more than 3,000 words and marked on four criteria
    of six marks each. Students may work in groups of up to three, but each must have their own research question and
    must not share raw data; data may come from the lab, fieldwork, spreadsheets, databases or simulations.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>A tutor can</h3>
  <p>
    Teach the physics behind a possible question; explain uncertainty, graphing and evaluation in general; go through
    what each criterion rewards; ask questions that help the student sharpen their own idea.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>A tutor must not</h3>
  <p>
    Choose the question, design the method, collect or process the data, write or edit the report. The school
    supervises the work, and the student should declare outside tutoring to their teacher.
  </p>
    </div>
  </div>
  <p>
    Ahmedabad itself can suggest a question a student could own, for instance using a phone's sensors to study how a
    metro train accelerates between two stations, or how far a kite string sags under different tensions. The investigation still
    has to be the student's, start to finish.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aibp-bridge">Arriving in DP Physics from GSEB, CBSE or IGCSE</h2>
  <p>
    Gujarat board students arrive from a Standard 10 science paper of 80 marks that opens with 24 one-mark objective
    items, and CBSE students from an NCERT-based course. Both are usually fluent with formulae and numericals but
    less practised at uncertainty, graphical analysis and extended written explanation, and students from Gujarati
    medium may need a few weeks with physics terms in English. IGCSE Physics students know practical skills well but
    meet a much steeper mathematical level, especially in fields. A short bridge, four to six weeks of mechanics,
    graphs and uncertainty, smooths DP1 for all of them. If your child is still in Grade 9 or 10, see our
    <a href="{{ url('/igcse-physics-tutor-ahmedabad') }}">IGCSE physics tutor in Ahmedabad</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aibp-plan">Where the tutoring hours go across DP1 and DP2</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A common pattern for IB physics tuition</caption>
    <thead>
      <tr><th scope="col">Stretch</th><th scope="col">Sessions are spent on</th><th scope="col">Rhythm</th></tr>
    </thead>
    <tbody>
      <tr><td>Opening weeks of DP1</td><td>Mechanics, vectors, graphs and uncertainty; physics vocabulary in English where needed</td><td>Two a week for a short block</td></tr>
      <tr><td>Rest of DP1</td><td>Following the school's theme order; a data task every session; HL extras flagged</td><td>One, or two at HL</td></tr>
      <tr><td>Investigation period</td><td>Physics and data skills behind the student's own question; criteria explained</td><td>Unchanged</td></tr>
      <tr><td>DP2 to mocks</td><td>Fields and nuclear physics consolidated; timed Paper 1 and Paper 2 sets</td><td>Two a week</td></tr>
      <tr><td>Final weeks</td><td>Full papers marked to the markscheme; error log by theme</td><td>Two or three a week</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    IB schools in Ahmedabad keep their own terms, so the tutor plans from the school's calendar and test dates rather
    than the board-exam season around them.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aibp-map">IB physics tutors across Ahmedabad: who can reach you</h2>
  <ul>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/satellite-vastrapur-bodakdev') }}">Satellite, Vastrapur and Bodakdev</a>:</strong> {!! $aibpA('thaltej', 'Thaltej') !!} is at the western end of the Blue Line, so a tutor anywhere on that line rides straight through; plotted homes often have parking at the door.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/prahlad-nagar-bopal-shela') }}">Prahlad Nagar, Bopal and Shela</a>:</strong> {!! $aibpA('prahlad-nagar', 'Prahlad Nagar') !!} has no metro; tutors come by road, and gated societies often confirm visitors by phone.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/maninagar-isanpur-kankaria') }}">Maninagar, Isanpur and Kankaria</a>:</strong> {!! $aibpA('kankaria', 'Kankaria') !!} has the underground Kankaria East station; avoid Sunday slots near the lake and the December carnival weeks.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/naranpura-gota-chandkheda') }}">Naranpura, Gota and Chandkheda</a>:</strong> {!! $aibpA('ghatlodia', 'Ghatlodia') !!} has no station; tutors use Gurukul Road or Thaltej on the Blue Line and an auto.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/nikol-naroda-bapunagar') }}">Nikol, Naroda and Bapunagar</a>:</strong> {!! $aibpA('odhav', 'Odhav') !!} is reached along Odhav Road from the Amraiwadi stations; set lessons away from factory shift changes.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/navrangpura-paldi-ellisbridge') }}">Navrangpura, Paldi and Ellisbridge</a>:</strong> {!! $aibpA('vasna', 'Vasna') !!} is the Red Line's southern terminus at APMC, convenient for tutors from the north of the west bank.</li>
  </ul>
  <p>
    The <a href="{{ url('/city/ahmedabad/zone/shahibaug-asarwa-meghaninagar') }}">Shahibaug, Asarwa and
    Meghaninagar</a> zone and all other localities are on our <a href="{{ url('/city/ahmedabad') }}">Ahmedabad home
    tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aibp-mode">Home or online for IB physics</h2>
  <p>
    Our Ahmedabad hub notes that online lessons open up teachers across India, which matters most for IB. For physics,
    Paper 1B data work and markscheme review run very well online with a shared screen, and an HL specialist who
    lives across the river can teach that way without the trip. Home lessons help most with diagram-heavy topics and
    when a student needs someone beside them to watch working. Many families mix the two, adding an extra online
    session in Uttarayan week or before mocks. Compare the options in our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aibp-demo">Questions for the IB physics demo</h2>
  <ol>
    <li><strong>Which guide do you teach from?</strong> The answer should be the current themes, not the old core-and-options course.</li>
    <li><strong>What is HL only?</strong> The tutor should name the HL topics and the extra understandings in shared ones.</li>
    <li><strong>Show a Paper 1B approach.</strong> Ask for one data question worked through, with uncertainties.</li>
    <li><strong>Mark a Paper 2 answer.</strong> Ask what the markscheme would credit and what it would not.</li>
    <li><strong>Where does IA help stop?</strong> Listen for a clear line, as above.</li>
    <li><strong>How will you get here?</strong> Road or metro, and the online fallback.</li>
  </ol>
  <p>
    The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> covers more general
    points.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="aibp-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    HL physics, longer trips and more weekly sessions push a fee higher; each tutor posts their own rate, visible before
    you book. Read the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-ahmedabad') }}">home tuition fees in Ahmedabad</a> for context.
  </p>
  <p>
    Let us know the level, DP year, exam session, the trouble spots, your locality and good times. Two or three matched
    tutors come back to you; the first lesson is a <a href="{{ url('/demo-class') }}">free demo</a> and a later switch
    costs nothing. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before
    their profile goes live. See <a href="{{ url('/tutors') }}">tutor profiles</a>, and for related subjects,
    <a href="{{ url('/ib-maths-tutor-ahmedabad') }}">IB maths</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-ahmedabad') }}">IB and IGCSE chemistry</a> tutors in Ahmedabad.
  </p>
  </section>

  </div>
</article>
