{{--
  Long-form guide for the "biology home tutor Delhi" page. Byline: NXTutors
  Academic Team. No schools, coaching institutes, societies, hospitals or people
  are named. Local detail comes only from database/seo-content/areas/delhi-research.json,
  delhi-zone-guides.json, database/seo-content/zones/delhi.json and the Delhi city
  hub view (CBSE for most students, ICSE/ISC sizeable, a smaller IB/IGCSE group).
  No state board is described.

  Official exam facts, reused from the national biology-home-tutor page
  (fetched 1 Oct 2026):
  - CBSE Biology (044), XI-XII 2026-27, cbseacademic.nic.in
    (web_material/CurriculumMain27/SecPart2/Biology_SecP2_2026-27.pdf): theory
    3 h 70 marks, practical 30. XII units: Reproduction 16, Genetics and
    Evolution 20, Biology and Human Welfare 12, Biotechnology 12, Ecology 10.
    XI: Diversity 15, Structural Organisation 10, Cell 15, Plant Physiology 12,
    Human Physiology 18.
  - CISCE ISC Biology (863), Class XII, cisce.org
    (wp-content/uploads/2025/04/18.-ISC-Biology.pdf): theory 70, practical 15,
    project 10, practical file 5.
  - NTA NEET (UG) 2026 Information Bulletin (neet.nta.nic.in): 180 questions in
    180 minutes, biology 90 (botany and zoology), 720 marks, +4/-1, biology
    first in tie-breaks; syllabus by NMC; 2027 bulletin not yet released.
  - Cambridge IGCSE Biology 0610 (2026-2028 syllabus, cambridgeinternational.org):
    Core or Extended, Paper 5 practical or Paper 6 alternative to practical (20%).
  - Pearson Edexcel International GCSE Biology 4BI1 (pearson.com): untiered,
    two written papers, grades 9-1.
  - IB DP Biology (first assessment 2025, ibo.org): four themes, SL 150 / HL 240
    hours, papers 80%, scientific investigation 20%.
  Fee wording is the approved NXTutors sentence.
  FAQs render from faqs/biology-home-tutor-delhi.php.
  Area links render only when that Delhi area page exists and is active.
--}}
@php
  $bioDlSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $bioDl = function (string $slug, string $label) use ($bioDlSlugs) {
      return in_array($slug, $bioDlSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="bioDlGuideTitle">
  <h2 id="bioDlGuideTitle">Biology tutors in Delhi for Classes 11 and 12, NEET, IGCSE and IB</h2>

  <p class="nx-guide__lede">
    In Delhi, a biology tutor may be asked to support a Class 11 or 12 CBSE student who is also aiming at NEET,
    an ISC student with a heavy theory paper and a practical file, or a student on IGCSE or the IB.
    What they share is volume: senior biology is a large body of exact terms, processes and diagrams, and it is tested
    through application and data as well as recall. A tutor who knows your child's course and can reach your colony
    at a steady weekday slot is worth more than a famous name across the city. NXTutors sends two or three biology
    tutors who fit both, with fees shown first, and the first class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#biodl-routes">Biology routes</a> ·
    <a href="#biodl-cbse">CBSE 11 and 12</a> ·
    <a href="#biodl-neet">NEET alongside school</a> ·
    <a href="#biodl-intl">ISC, IGCSE and IB</a> ·
    <a href="#biodl-zones">Across Delhi's zones</a> ·
    <a href="#biodl-plan">Two-year plan</a> ·
    <a href="#biodl-mode">Home or online</a> ·
    <a href="#biodl-demo">Testing a tutor</a> ·
    <a href="#biodl-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="biodl-routes">Which biology route is your child on?</h2>
  <p>
    Up to Class 10, biology sits inside science, and our <a href="{{ url('/science-home-tutor-delhi') }}">science tutors
    in Delhi</a> page covers those years. From Class 11 it becomes a subject of its own, and the route decides the
    tutor.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Biology routes for Delhi students</caption>
    <thead>
      <tr><th scope="col">Route</th><th scope="col">How it is assessed</th><th scope="col">What the tutor must be good at</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Biology (044), Classes 11 and 12</td><td>Three-hour, 70-mark theory paper and a 30-mark practical each year</td><td>NCERT depth, diagrams, case-based and assertion-reason questions</td></tr>
      <tr><td>CBSE plus NEET (UG)</td><td>School papers, then an objective test where biology is 90 of 180 questions</td><td>Line-by-line NCERT recall, mock analysis, speed</td></tr>
      <tr><td>ISC Biology (863)</td><td>70-mark theory, 15-mark practical, 10 for project work, 5 for the practical file</td><td>Detailed written answers with named structures</td></tr>
      <tr><td>Cambridge IGCSE (0610) or Edexcel (4BI1)</td><td>0610: Core or Extended plus a practical or alternative-to-practical paper; 4BI1: two untiered papers</td><td>Command words, past papers, experimental skills on paper</td></tr>
      <tr><td>IB Diploma Biology, SL or HL</td><td>Exam papers 80%, a scientific investigation 20%</td><td>Linking themes, data questions, guiding but never writing the investigation</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="biodl-cbse">CBSE biology in Classes 11 and 12: where the marks sit</h2>
  <p>
    Because CBSE is the board most Delhi students sit, the CBSE unit weights shape most of our biology plans. In
    Class 11, Human Physiology carries the most theory marks at 18, followed by Diversity of Living Organisms and Cell
    at 15 each, Plant Physiology at 12 and Structural Organisation at 10. In Class 12, Genetics and Evolution leads with
    20, then Reproduction at 16, Biology and Human Welfare and Biotechnology at 12 each, and Ecology at 10.
  </p>
  <p>
    Two things follow for a Delhi family planning tuition. First, Genetics and Evolution is where Class 12 students
    most often need one-to-one time, because inheritance problems and molecular genetics demand reasoning rather than
    memory. Second, the 30 practical marks are school-conducted and easy to protect: a student who keeps the record,
    the slides and the investigatory project up to date through the year rarely loses them. A good tutor checks the
    practical file as regularly as the theory notes.
  </p>
  <p>
    The Class 12 paper mixes multiple choice, assertion-reason, short and long answers and case-based items, with about
    half the marks on knowledge and understanding, 30% on application and 20% on analysis and evaluation. A student
    who only memorises will stall on the last group, so the tutor's job is to make them explain processes aloud and
    apply them to unfamiliar examples.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="biodl-neet">How does NEET biology fit around school in Delhi?</h2>
  <p>
    NEET (UG) is run by the National Testing Agency. Its 2026 bulletin set 180 compulsory questions in 180 minutes, of
    which 90 were biology, split between botany and zoology, for 720 marks in all, with four marks for a right answer
    and one deducted for a wrong one. Biology is also the first subject used to break ties. The syllabus is notified by
    the National Medical Commission, and the 2027 bulletin had not been released when this page was written, so check
    neet.nta.nic.in before relying on any detail.
  </p>
  <p>
    For a student who attends coaching as well as school, a home tutor adds most when they do three jobs coaching
    cannot: testing NCERT recall line by line, including diagrams and tables; sorting every mock mistake into concept,
    recall or careless error; and keeping written board answers sharp, since NEET practice trains ticking, not
    explaining. Our national <a href="{{ url('/neet-home-tutor') }}">NEET home tutor</a> page and the guide to
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET biology with an NCERT-first approach</a> go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="biodl-intl">ISC, IGCSE and IB biology in Delhi</h2>
  <p>
    ISC has a sizeable following in Delhi. Its Class 12 theory units are Reproduction (16), Genetics and Evolution
    (15), Biology and Human Welfare (14), Biotechnology (10) and Ecology (15), and answers reward exact terminology and
    labelled diagrams. The step up from ICSE is in depth, not style, so a tutor who has taught ISC recently can usually
    show a student within a few sessions how much detail a full-mark answer needs.
  </p>
  <p>
    For the smaller IGCSE and IB group, the right specialist may live anywhere in the city. Cambridge 0610 students on
    the alternative-to-practical paper must describe methods, draw results tables and plot graphs without apparatus;
    Edexcel 4BI1 students sit two untiered papers graded 9 to 1. IB students work across four themes at SL or HL and
    write a scientific investigation worth 20%, which a tutor may discuss but must never write. Our
    <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge versus Edexcel IGCSE comparison</a>
    explains the two IGCSE routes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="biodl-zones">Finding a biology tutor across Delhi's zones</h2>
  <p>
    Senior biology needs two or three sessions a week in a board year, so the commute matters more than it does for a
    weekly subject. These are the travel patterns our zone research shows; the full list is on our
    <a href="{{ url('/city/delhi') }}">Delhi page</a>.
  </p>
  <ul>
    <li><strong>Kalkaji, CR Park and Sarita Vihar.</strong> Almost every pocket keeps a visitor register, so give the guard the tutor's name and flat once. In {!! $bioDl('chittaranjan-park', 'Chittaranjan Park') !!}, move to morning or online lessons in Durga Puja week. <a href="{{ url('/city/delhi/zone/kalkaji-cr-park-sarita-vihar') }}">See the zone</a>.</li>
    <li><strong>Vasant Kunj, Vasant Vihar and Palam.</strong> The Magenta Line serves {!! $bioDl('munirka', 'Munirka') !!}, Palam and R K Puram, but Vasant Kunj has no station, so agree whether the tutor drives or takes an auto. <a href="{{ url('/city/delhi/zone/vasant-kunj-vasant-vihar-palam') }}">See the zone</a>.</li>
    <li><strong>Janakpuri, Rajouri Garden and Punjabi Bagh.</strong> Four metro lines cross this belt; in {!! $bioDl('vikaspuri', 'Vikaspuri') !!}, builder floors need only the floor number and a landmark. <a href="{{ url('/city/delhi/zone/janakpuri-rajouri-garden-punjabi-bagh') }}">See the zone</a>.</li>
    <li><strong>Pitampura, Model Town and North Campus.</strong> {!! $bioDl('ashok-vihar', 'Ashok Vihar') !!} is large, so name the phase; Keshav Puram or Shalimar Bagh stations suit it. <a href="{{ url('/city/delhi/zone/pitampura-model-town-north-campus') }}">See the zone</a>.</li>
    <li><strong>Mayur Vihar, Patparganj and IP Extension.</strong> {!! $bioDl('mayur-vihar-phase-2', 'Mayur Vihar Phase 2') !!} is DDA pockets, usually a straight walk to the flat; Phase 3 has no station of its own. <a href="{{ url('/city/delhi/zone/mayur-vihar-patparganj-ip-extension') }}">See the zone</a>.</li>
    <li><strong>Laxmi Nagar, Preet Vihar and Shahdara.</strong> Vikas Marg slows sharply at office hours, so set lessons around {!! $bioDl('laxmi-nagar', 'Laxmi Nagar') !!} before the rush. <a href="{{ url('/city/delhi/zone/laxmi-nagar-preet-vihar-shahdara') }}">See the zone</a>.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="biodl-plan">A simple two-year biology plan</h2>
  <p>
    CBSE schools usually begin the session in April, and a tutor who starts with the session has room to teach, test and
    revise. A plan that suits a CBSE student with or without NEET looks like this:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Two-year biology plan for Classes 11 and 12</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">Focus</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 11, first term</td><td>Diversity and structural organisation: classification, plant and animal tissues, labelled diagrams from memory</td></tr>
      <tr><td>Class 11, second term</td><td>Cell, plant physiology and human physiology, the heaviest unit; short recall tests every week</td></tr>
      <tr><td>Class 12, first term</td><td>Reproduction and genetics, with inheritance problems practised until they are routine</td></tr>
      <tr><td>Class 12, second term</td><td>Biotechnology, human welfare and ecology; practical file and project closed early; full timed papers</td></tr>
      <tr><td>After the boards</td><td>For NEET students, Class 11 chapters revised again with mock tests, since both years feed the paper</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="biodl-mode">Home or online biology tuition?</h2>
  <p>
    Biology works well online once a student is past Class 10: diagrams can be drawn on a shared board, NCERT pages
    put on screen and mock papers marked the same evening. What online loses is the tutor seeing the practical file
    and the student's rough work on the desk. A pattern that suits many Delhi families in a board year is one home
    session a week for written answers, diagrams and the practical record, and one or two online sessions for recall
    tests and mock analysis. For IB and IGCSE, where specialists are fewer, online often decides whether you get the
    right person at all.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="biodl-demo">How to test a biology tutor in the demo</h2>
  <ul>
    <li>Ask the tutor to teach a process your child finds confusing, such as a cycle or a pathway, and see whether your child can explain it back at the end.</li>
    <li>Watch whether they insist on labelled diagrams drawn from memory, not copied.</li>
    <li>For a NEET student, ask how they would use your child's last mock: a good tutor wants the paper, not just the score.</li>
    <li>For CBSE or ISC, ask how they handle the practical record and project through the year.</li>
    <li>For IB or IGCSE, ask which syllabus and paper they last taught, and how they practise data questions.</li>
  </ul>
  <p>
    If the answers disappoint, tell us and we arrange the next demo from your shortlist; switching tutor later is
    free as well.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="biodl-fees">What a biology tutor costs in Delhi</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    fees, and you see each one before the demo. Senior biology and NEET work usually sit in the upper part of that
    range. The <a href="{{ url('/blog/home-tuition-fees-delhi') }}">Delhi fees guide</a> explains what moves the figure.
  </p>
  <p>
    To start, send us the class, board and route (school only, or with NEET), your colony and nearest station, and the
    days that work. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. For the
    unit tables of every board, see our national <a href="{{ url('/biology-home-tutor') }}">biology home tutor
    guide</a>; for the other sciences, see <a href="{{ url('/chemistry-home-tutor-delhi') }}">chemistry</a> and
    <a href="{{ url('/physics-home-tutor-delhi') }}">physics</a> tutors in Delhi, or
    <a href="{{ url('/maths-home-tutor-delhi') }}">maths</a>. Biology teachers can find Delhi requests on the
    <a href="{{ url('/tuition-jobs/delhi') }}">Delhi tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
