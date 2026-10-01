{{--
  Long-form guide for the "IB maths tutor Delhi" page. Author: Ajay Vatsyayan
  (role: IB, IGCSE and ISC maths). No anecdotes, years or results are claimed
  for him. No schools, societies or other people are named.

  Course and assessment facts are reworded from ib-maths-tutor-mumbai and
  ib-maths-tutor-gurgaon, which cite the IB Diploma Programme subject briefs
  for Mathematics: analysis and approaches and Mathematics: applications and
  interpretation and the IB's published curriculum update for the revised
  courses (https://www.ibo.org/programmes/diploma-programme/curriculum/mathematics/):
  two courses, each at SL or HL; 150 h SL / 240 h HL; SL Papers 1 and 2 (40%
  each, 1 h 30 min each), HL Papers 1 and 2 (30% each, 2 h each) and Paper 3
  (20%, two extended problem-solving questions, GDC allowed); exploration 20%
  at both levels, teacher-marked and IB-moderated, roughly 12 to 20 pages,
  criteria (presentation, mathematical communication, personal engagement,
  reflection, use of mathematics); AA Paper 1 without a calculator, AI uses
  the GDC on all papers; revised courses first taught August 2027 and first
  examined May 2029 (AA Papers 1 and 2 to 100 marks from 110, Paper 3 to 50
  marks from 55 and one hour; exploration kept, shared SL/HL criteria, 80/20
  split kept); MYP maths four criteria. No other dates.

  Delhi detail only from the Delhi city hub view (CBSE for most students,
  ICSE/ISC sizeable, a smaller IB/IGCSE group; online opens up tutors for IB;
  metro interchanges; March 2026 Pink ring and Magenta extension; Yamuna
  crossing lengthens trips; summer break as a clean start),
  database/seo-content/zones/delhi.json (zone travel notes; "an IB or IGCSE
  specialist may be easier to find online" for the Vasant Kunj zone) and
  database/seo-content/areas/delhi-research.json (South Extension: Pink Line,
  Lajpat Nagar interchange, Ring Road evening traffic, floors with own bells;
  Safdarjung Enclave: Bhikaji Cama Place, Green Park, R K Puram, RWA gates;
  Nehru Enclave: Magenta Line station, office district traffic, gate
  registers; Lodhi Colony: JLN Stadium and Jor Bagh, open blocks; Dwarka
  Sector 23: Sector 21 and Sector 8 stations, Yashobhoomi, society gate
  permissions, online for specialist subjects; Kohat Enclave: own Red Line
  station inside the colony, evening parking). No board is said to concentrate
  in any area. Area links render only for active Delhi areas. Fee wording is
  the approved sentence. FAQs render from faqs/ib-maths-tutor-delhi.php.
--}}
@php
  $dimSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $dimA = function (string $slug, string $label) use ($dimSlugs) {
      return in_array($slug, $dimSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="dimGuideTitle">
  <h2 id="dimGuideTitle">IB maths tutor in Delhi: pin down the course, then the metro line</h2>

  <p class="nx-guide__lede">
    In Delhi, CBSE is the board most children sit and the IB is a smaller group, which has one practical effect for
    parents: the general maths tutor down the lane has usually never marked an IB paper. A Diploma student needs
    someone who knows which of four maths routes they are on, which version of the course their exam session uses, and
    how far the internal exploration can be helped. Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths on NXTutors,
    wrote this guide. You can reach it from our <a href="{{ url('/maths-home-tutor-delhi') }}">maths home tutors in
    Delhi</a> page and the <a href="{{ url('/ib-tutor-delhi') }}">IB tutors in Delhi</a> hub, and it ends with how a
    tutor actually reaches homes from Dwarka to the trans-Yamuna colonies.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#dim-routes">AA or AI, SL or HL</a> ·
    <a href="#dim-assess">How each level is examined</a> ·
    <a href="#dim-session">Which version: the exam session decides</a> ·
    <a href="#dim-explore">The exploration</a> ·
    <a href="#dim-cbse">Coming from CBSE or ICSE</a> ·
    <a href="#dim-week">What a good session covers</a> ·
    <a href="#dim-travel">Routes across Delhi</a> ·
    <a href="#dim-split">Home, online or both</a> ·
    <a href="#dim-demo">Demo questions</a> ·
    <a href="#dim-fees">Fees and next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="dim-routes">AA or AI, SL or HL: four routes under one name</h2>
  <p>
    Every Diploma candidate studies one maths course, chosen from two, and takes it at Standard or Higher Level. Both
    courses share five content areas, from number and algebra and functions through geometry, trigonometry and
    statistics to calculus, yet the flavour differs so much that a student can thrive on one and struggle on the other.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Analysis and Approaches</h3>
  <p>
    The pure route. Algebraic manipulation, exact values, proof and calculus by hand, with one paper sat without any
    calculator. It tends to suit students heading for engineering, physics, computer science, economics with heavy
    quantitative content, or mathematics itself.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Applications and Interpretation</h3>
  <p>
    The modelling route. The graphic display calculator is used on every paper, and questions start from a situation
    or a dataset that the student must translate into mathematics. AI HL is a serious course in its own right, strong
    on statistics, networks and modelling.
  </p>
    </div>
  </div>
  <p>
    So "IB maths tuition" is never one request. A tutor who is fluent in AA HL proof can be slow with AI SL
    statistics on the GDC, and the other way round. We match on course and level together. If your child is still
    choosing, read our <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">AA, AI, SL and HL guide</a>; the national
    <a href="{{ url('/ib-maths-tutor') }}">IB maths tutor</a> page goes deeper into the subject itself.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dim-assess">How each level is examined on the current course</h2>
  <p>
    The IB recommends 150 teaching hours at SL and 240 at HL. At both levels the written exams supply 80 percent of
    the grade and the exploration the remaining 20 percent; what changes is how the exam share is cut.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Exam components of the current DP maths courses</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL</th><th scope="col">HL</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1</td><td>1 h 30 min, 40%; no calculator on AA</td><td>2 h, 30%; no calculator on AA</td></tr>
      <tr><td>Paper 2</td><td>1 h 30 min, 40%; calculator</td><td>2 h, 30%; calculator</td></tr>
      <tr><td>Paper 3</td><td>Not taken</td><td>20%: two extended problem-solving questions, GDC allowed</td></tr>
      <tr><td>Mathematical exploration</td><td>20%</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    On AI, the calculator is allowed throughout. Paper 3 is the component HL students find most unfamiliar: each
    question starts gently and builds, part by part, towards a result the student has not met before, so the skill
    being tested is following a chain of reasoning without losing confidence halfway. It cannot be crammed in a final
    month. A tutor should bring Paper 3-style problems into DP1, a few at a time, so that by mock season the format is
    ordinary.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dim-session">Current course or revised one? Let the exam session decide</h2>
  <p>
    The IB has published revised versions of both maths courses, first taught from August 2027 and first examined in
    May 2029. Nothing disappears: AA and AI both remain, each at SL and HL, and the 80/20 split between exams and
    exploration stays. For AA, the published changes include Papers 1 and 2 dropping to 100 marks (from 110), and
    Paper 3 dropping to 50 marks (from 55) in a one-hour sitting; the exploration continues as the internal assessment,
    with one set of criteria shared by SL and HL.
  </p>
  <p>
    The practical rule for a Delhi family: a student whose DP1 began in August 2026 follows the current course and is
    examined in May 2028, while anyone beginning DP1 in August 2027 or later studies the revised one. Put the exam session in
    your request. Practising from the wrong generation of past papers is a quiet way to waste a term.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dim-explore">The exploration: where tutoring helps and where it must stop</h2>
  <p>
    The exploration is a piece of the student's own mathematics, usually somewhere between 12 and 20 pages by the IB's guidance, built
    around a question they chose. The school marks it against published criteria (presentation, mathematical
    communication, personal engagement, reflection, and use of mathematics) and the IB then moderates. Worth
    a fifth of the grade, a well-run exploration is often the cheapest grade a student will ever earn.
  </p>
  <ul>
    <li><strong>Allowed.</strong> Teaching mathematics the idea needs, even if it sits outside the syllabus. Questioning the student until a wide interest becomes a workable question. Walking through the criteria with the IB's published exemplars. Saying in general terms that a section is hard to follow.</li>
    <li><strong>Not allowed.</strong> Choosing the topic, writing or rephrasing sentences, doing calculations, producing graphs, or editing drafts line by line. Any of these breaches the IB's academic-integrity rules and endangers the diploma. The student should also tell their teacher that they have outside tutoring.</li>
  </ul>
  <p>
    Delhi offers questions a student can genuinely own: how metro frequency changes across a day, how far a loop line
    shortens journeys compared with travelling through the centre, how winter and summer temperatures spread across a
    year of readings. A narrow question carried through properly beats an ambitious one left half-done.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dim-cbse">Arriving in DP maths from CBSE, ICSE, IGCSE or the MYP</h2>
  <p>
    Because most Delhi students sit CBSE, many Diploma classrooms here include students who came from it, alongside
    those from ICSE, Cambridge IGCSE and the IB's own Middle Years Programme. Each group arrives with a different gap.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What usually needs work in the first DP term</caption>
    <thead>
      <tr><th scope="col">Previous course</th><th scope="col">Usual strength</th><th scope="col">Usual gap</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Class 10</td><td>Speed with standard NCERT-style methods</td><td>Unguided multi-part questions; written reasoning; the GDC</td></tr>
      <tr><td>ICSE Class 10</td><td>Neat, complete working</td><td>Modelling, calculator technique, IB command terms</td></tr>
      <tr><td>IGCSE Extended</td><td>Familiar algebra and functions</td><td>The DP's pace and its proof-style questions on AA</td></tr>
      <tr><td>IB MYP</td><td>Open tasks judged on four criteria</td><td>Timed, dense exam papers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The repair looks similar for everyone: a short block that rebuilds algebra, functions and trigonometry, using
    past IB questions marked against the markscheme. Delhi's summer break is the natural moment for it. The
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">CBSE to IB or IGCSE switching guide</a> on our
    blog, written for Gurugram families, sets out a bridging plan that works just as well here. Students coming up from Cambridge
    should also read the <a href="{{ url('/igcse-maths-tutor-delhi') }}">IGCSE maths tutor in Delhi</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dim-week">What a good IB maths session actually covers</h2>
  <ol>
    <li><strong>A short warm-up in the student's weak spot.</strong> Non-calculator algebra for AA, a GDC routine for AI.</li>
    <li><strong>The school topic of the week,</strong> taught to the depth of the student's level rather than the textbook's average.</li>
    <li><strong>One past-paper question, marked properly.</strong> Method, accuracy and follow-through marks separated, so the student sees where marks leak.</li>
    <li><strong>A line in the error log.</strong> Which topic, which kind of mistake, and when it will be revisited.</li>
  </ol>
  <p>
    Through DP1 one or two sessions a week is usual; before mocks and the May exams, two or three. HL students often
    add the extra session earlier because of Paper 3.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dim-travel">IB maths tutors across Delhi: six routes</h2>
  <p>
    Specialist IB tutors are few in any city, so the question is less "who lives nearest" and more "whose journey
    still works on a Thursday evening". Six examples, one from each of six zones:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/delhi/zone/gk-defence-colony-lajpat-nagar') }}">GK, Defence Colony and Lajpat Nagar</a>.</strong> {!! $dimA('south-extension', 'South Extension') !!} has its own Pink Line station, with the Violet Line one stop away at Lajpat Nagar. The Ring Road outside the markets crawls in the evening, so a tutor by metro beats one by car; most floors have their own bell.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/saket-malviya-nagar-hauz-khas') }}">Saket, Malviya Nagar and Hauz Khas</a>.</strong> {!! $dimA('safdarjung-enclave', 'Safdarjung Enclave') !!} can be reached from three lines: Bhikaji Cama Place on the Pink, Green Park on the Yellow and R K Puram on the Magenta. Blocks have RWA guards, so pass the tutor's name to the gate first.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/kalkaji-cr-park-sarita-vihar') }}">Kalkaji, CR Park and Sarita Vihar</a>.</strong> {!! $dimA('nehru-enclave', 'Nehru Enclave') !!} has a Magenta Line station, with Nehru Place on the Violet Line close by. The office district fills the roads on weekday evenings; weekend slots are easier for a tutor who drives.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/lodhi-colony-jangpura-nizamuddin') }}">Lodhi Colony, Jangpura and Nizamuddin</a>.</strong> In {!! $dimA('lodhi-colony', 'Lodhi Colony') !!} the blocks are open and signposted, and a tutor walks in from Jawaharlal Nehru Stadium on the Violet Line or Jor Bagh on the Yellow.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/dwarka') }}">Dwarka</a>.</strong> {!! $dimA('dwarka-sector-23', 'Dwarka Sector 23') !!} sits towards the airport; tutors use the Blue Line at Sector 21 or Sector 8 and finish by e-rickshaw. Ask the society for standing permission so a regular tutor is not stopped at the gate every week.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/pitampura-model-town-north-campus') }}">Pitampura, Model Town and North Campus</a>.</strong> {!! $dimA('kohat-enclave', 'Kohat Enclave') !!} has a Red Line station inside the colony, so a metro tutor walks to the door while a driving one hunts for evening parking.</li>
  </ul>
  <p>
    Remember the Yamuna: crossing it adds time to any journey, so east Delhi families often do better with a tutor from
    their own side of the river or with online sessions. Every locality is listed on the
    <a href="{{ url('/city/delhi') }}">Delhi home tutors page</a>, and our
    <a href="{{ url('/blog/south-delhi-tuition-guide') }}">South Delhi tuition guide</a> goes colony by colony.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dim-split">Home, online or both: the IB maths version of the question</h2>
  <p>
    Online teaching widens the pool to tutors across the country, which matters most for small specialisms like AA HL
    or AI HL. Our Delhi zone notes say the same for families around Vasant Kunj, where an IB specialist may be easier to
    find online. Three things decide the mix:
  </p>
  <ul>
    <li><strong>Handwritten working.</strong> AA students need every line watched. At the table it is natural; online it works only with a second camera pointed down at the page.</li>
    <li><strong>The calculator.</strong> On AI, and in any HL Paper 3 work, the tutor must be able to watch the GDC. An emulator shared on screen, or a phone over the keypad, solves it.</li>
    <li><strong>The journey.</strong> Delhi's metro now links more colonies than ever, including the Pink Line ring completed in March 2026, but a tutor crossing the river or changing lines at rush hour still loses time. A weekly home session plus a short online one is a sturdy pattern.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online tutor comparison</a> weighs the two
    more generally.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dim-demo">Seven questions for the IB maths demo</h2>
  <ol>
    <li>Before teaching, did the tutor check the course, the level and the exam session?</li>
    <li>Can they explain, without notes, how "hence" differs from "hence or otherwise", and what "show that" and "write down" each expect?</li>
    <li>Given a marked school test, can they show where method and accuracy marks were lost?</li>
    <li>For AA, do they insist on regular non-calculator work? For AI, are they quick on the GDC?</li>
    <li>For HL, how would they introduce Paper 3 to a DP1 student?</li>
    <li>What will they do, and refuse to do, for the exploration?</li>
    <li>Which metro line do they use to reach you, and what happens on a week they cannot travel?</li>
  </ol>
  <p>
    If the demo falls short, tell us; the next matched tutor gets a free demo of their own. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more to look for.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dim-fees">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    In Delhi, the course and level, the tutor's route and the number of weekly sessions move the figure. Tutors set
    their fees themselves, and every fee is on the profile ahead of the demo. For the factors, read the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and the <a href="{{ url('/blog/home-tuition-fees-delhi') }}">home tuition fees in Delhi</a> post.
  </p>
  <p>
    A useful request names the course and level, the exam session, the DP year, the trouble spots, your colony or
    nearest metro station and two or three possible slots. Two or three matched tutors come back to you, one of them
    takes a <a href="{{ url('/demo-class') }}">free demo class</a>, and a later change of tutor costs nothing. Every
    tutor who joins passes an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before going live; you are
    welcome to look through <a href="{{ url('/tutors') }}">tutor profiles</a> beforehand. Science students can also use
    our pages for
    <a href="{{ url('/ib-physics-tutor-delhi') }}">IB physics</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-delhi') }}">IB and IGCSE chemistry</a> tutors in Delhi.
  </p>
  </section>

  </div>
</article>
