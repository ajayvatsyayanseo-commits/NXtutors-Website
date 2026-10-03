{{--
  Long-form guide for the "IB maths tutor Pune" page. Author: Ajay Vatsyayan
  (role: IB, IGCSE and ISC maths). No anecdotes, years or results are claimed
  for him. No schools, societies or other people are named.

  Course and assessment facts are reworded from ib-maths-tutor-gurgaon, which
  cites the IB Diploma Programme subject briefs for Mathematics: analysis and
  approaches and Mathematics: applications and interpretation and the IB's
  published curriculum update for the revised courses (ibo.org): two courses,
  each at SL or HL; 150 h SL / 240 h HL; SL Papers 1 and 2 (40% each, 1 h 30
  min each), HL Papers 1 and 2 (30% each, 2 h each) and Paper 3 (20%, two
  extended problem-solving questions with a GDC); exploration 20% at both
  levels, teacher-marked and IB-moderated, roughly 12 to 20 pages, criteria
  on presentation, communication, personal engagement, reflection and use of
  mathematics; AA Paper 1 without a calculator, AI uses the GDC on all papers;
  revised courses first taught August 2027 and first examined May 2029 (AA
  Papers 1 and 2 to 100 marks from 110, Paper 3 to 50 marks from 55 and one
  hour; exploration kept with shared SL/HL criteria; 80/20 split kept); MYP
  maths four criteria. No other dates.

  Local detail only from database/seo-content/zones/pune.json,
  areas/pune-research.json, pune-zone-guides.json and the Pune hub view
  (Erandwane: SNDT College and Paud Phata Aqua Line stations at its edge, older
  bungalows and narrow lanes; Balewadi: Line 3 under construction, tutors from
  Baner, Wakad or Aundh by road; Hinjewadi: office-hour traffic, township gates,
  online practical for specialist senior subjects; Kharadi: no metro, Ramwadi
  nearest, visitor parking limits; Koregaon Park: Bund Garden station, IB/IGCSE
  families mix home visits and online; NIBM Road: no metro, Mandai/Swargate
  nearest; Viman Nagar zone: online tutors suit IB/IGCSE specialists; KP zone:
  home tutor plus online specialist a common pattern for IB/IGCSE; hub: IB
  Mathematics AA/AI at SL/HL, IA never written by the tutor). Station names
  that contain institution names are not repeated on the page. Area links
  render only for active Pune areas. Fee wording is the approved sentence.
  FAQs render from faqs/ib-maths-tutor-pune.php.
--}}
@php
  $pibmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pibmA = function (string $slug, string $label) use ($pibmSlugs) {
      return in_array($slug, $pibmSlugs, true)
          ? '<a href="' . e(url('/city/pune/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="pibmGuideTitle">
  <h2 id="pibmGuideTitle">IB maths tutors in Pune: course, level, exam session, then the commute</h2>

  <p class="nx-guide__lede">
    Pune is a wide city, divided by the Mula and Mula-Mutha rivers and only partly served by the metro, and the number of tutors who teach
    each version of DP maths well is small in any city. So a good match depends on two things done in the right order: first pin down exactly which course the student is on, then find
    the nearest tutor who teaches it, at home where the journey holds and online where it does not. I teach IB, IGCSE
    and ISC maths on NXTutors, and this page explains how I would want any IB maths request in Pune to be handled. It
    sits under our <a href="{{ url('/maths-home-tutor-pune') }}">maths home tutors in Pune</a> page and the
    <a href="{{ url('/ib-tutor-pune') }}">IB tutors in Pune</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pibm-request">A complete request</a> ·
    <a href="#pibm-aaai">AA and AI compared</a> ·
    <a href="#pibm-assess">How it is graded</a> ·
    <a href="#pibm-2027">The revised courses</a> ·
    <a href="#pibm-p3">HL Paper 3</a> ·
    <a href="#pibm-explore">The exploration</a> ·
    <a href="#pibm-from">Coming from another board</a> ·
    <a href="#pibm-zones">Pune zones</a> ·
    <a href="#pibm-week">A typical week</a> ·
    <a href="#pibm-demo">The demo</a> ·
    <a href="#pibm-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pibm-request">What a complete IB maths request looks like</h2>
  <p>
    "IB maths, Grade 11" is not enough to match on. These six details decide who we send:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The details that change the match</caption>
    <thead>
      <tr><th scope="col">Detail</th><th scope="col">Why it matters</th></tr>
    </thead>
    <tbody>
      <tr><td>Course: Analysis and Approaches (AA) or Applications and Interpretation (AI)</td><td>Different papers, different calculator rules, different strengths in a tutor</td></tr>
      <tr><td>Level: SL or HL</td><td>HL adds a third paper and 90 more teaching hours</td></tr>
      <tr><td>Exam session</td><td>Tells us whether the student is on the current course or the revised one</td></tr>
      <tr><td>DP1 or DP2, and the school's term dates</td><td>Sets the pace and when the exploration falls due</td></tr>
      <tr><td>What is going wrong</td><td>Non-calculator algebra, GDC use, Paper 3, test marks or the exploration need different people</td></tr>
      <tr><td>Your zone and free slots</td><td>Decides whether home, online or a mix is realistic</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pibm-aaai">AA and AI side by side</h2>
  <p>
    Both courses cover number and algebra, functions, geometry and trigonometry, statistics and probability, and
    calculus. What differs is the angle of attack.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How the two DP maths courses feel to a student</caption>
    <thead>
      <tr><th scope="col"></th><th scope="col">Analysis and Approaches</th><th scope="col">Applications and Interpretation</th></tr>
    </thead>
    <tbody>
      <tr><td>Calculator</td><td>Paper 1 is taken without one</td><td>The graphic display calculator is used on every paper</td></tr>
      <tr><td>Style</td><td>Exact answers, algebraic manipulation, proof, hand calculus</td><td>Modelling real situations, data, technology-led problem solving</td></tr>
      <tr><td>Typical next step</td><td>Engineering, physics, maths, quantitative economics</td><td>Social sciences, biology, business, design</td></tr>
      <tr><td>What to look for in a tutor</td><td>Patient, line-by-line correction of written algebra</td><td>Speed on the GDC and a feel for turning words into models</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    AI at HL is demanding in its own way, so neither course is the "easy" one. If the choice is still open, our
    <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">AA, AI, SL and HL guide</a> sets out the trade-offs, and the national
    <a href="{{ url('/ib-maths-tutor') }}">IB maths tutor</a> page goes deeper into each course.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pibm-assess">How the grade is built on the current courses</h2>
  <p>
    The IB plans 150 teaching hours at SL and 240 at HL. An SL student sits Paper 1 and Paper 2, an hour and a half
    each, worth 40% of the grade apiece. An HL student sits the same two papers at two hours each, worth 30% apiece,
    plus Paper 3, worth 20%. At both levels the exploration, the student's own written investigation, makes up the
    final 20%. In other words, a fifth of an SL grade and two fifths of an HL grade sit outside the two standard papers,
    which is why a tutor who only drills past Paper 1 and Paper 2 questions leaves a lot on the table.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pibm-2027">The revised courses: which version is your child on?</h2>
  <p>
    The IB has published revised versions of both courses, taught from August 2027 and examined for the first time in
    May 2029. Both courses and both levels continue. For AA the changes include Papers 1 and 2 dropping from 110 to
    100 marks, Paper 3 dropping from 55 to 50 marks with an hour allowed, one shared set of exploration criteria for
    SL and HL, and the same 80:20 split between exams and the exploration. A student who started DP1 in August 2026
    sits the current course in May 2028; one who starts in August 2027 or later is on the revised course. Tell us the
    session, because practising from the wrong set of past papers wastes weeks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pibm-p3">Paper 3 and the gap between SL and HL</h2>
  <p>
    Paper 3 is two long problem-solving questions, with the GDC allowed. Each one opens on familiar ground and then
    leads the student, part by part, towards a result they have not seen before. Students rarely fail it for lack of
    knowledge; they fail it because they abandon a question when part (c) looks strange, or because they cannot use an
    answer from part (b) with confidence. The cure is exposure early: one Paper 3 question every two or three weeks
    from the first term of DP1, worked slowly with the tutor, and timed only in DP2. An SL student who is thinking of
    moving up, or an HL student thinking of moving down, should have that conversation with the school early in DP1,
    and the tutor can give an honest view based on how the student copes with these questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pibm-explore">The exploration: what I will and will not do</h2>
  <p>
    The exploration is roughly 12 to 20 pages of the student's own mathematics on a question they care about, marked
    by the school against criteria on presentation, communication, personal engagement, reflection and the use of
    mathematics, then moderated by the IB. Help from a tutor is legitimate up to a clear line.
  </p>
  <ul>
    <li><strong>I will</strong> teach any mathematics the student's idea needs, even beyond the syllabus; ask questions that help a broad interest become a workable question; explain what each criterion rewards using the IB's published examples; and say in general terms when an argument is hard to follow.</li>
    <li><strong>I will not</strong> choose the topic, write or reword any sentence, carry out calculations, draw graphs, build models or edit drafts line by line. Any of that endangers the diploma under the IB's academic-integrity rules, and the student should tell their teacher that they have an outside tutor.</li>
  </ul>
  <p>
    Pune itself offers questions a student could genuinely own, such as the spacing of trains on a metro line, the
    rise of monsoon rainfall through a season, or the traffic pattern at a busy junction on the way to school. The best
    explorations are usually modest questions pursued thoroughly.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pibm-from">Arriving in the Diploma from SSC, CBSE, ICSE, IGCSE or the MYP</h2>
  <p>
    DP classrooms in Pune draw students from every system, and each brings a typical gap. State Board and CBSE
    students are often quick with standard methods but unused to unguided, multi-step questions and to explaining
    their reasoning in words. ICSE students set out working neatly and need time with the GDC and modelling. IGCSE
    Extended students know much of the algebra but meet it at a faster pace. MYP students, assessed on four criteria
    including investigating patterns and communicating, are at home with open tasks but can struggle with long timed
    papers. A short bridging block before or early in DP1, on algebra, functions and trigonometry with questions marked
    the IB way, settles most of these. Our guide to
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching from CBSE to IB or IGCSE</a> sets out such a
    plan, and students coming from Cambridge should also read the
    <a href="{{ url('/igcse-maths-tutor-pune') }}">IGCSE maths tutors in Pune</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pibm-zones">Pune zones: who can reach you, and when online is the better answer</h2>
  <p>
    Our zone guides for Pune say plainly that families wanting an IB or IGCSE specialist often combine a home tutor with
    online sessions. Here is how the travel looks in different parts of the city:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/pune/zone/kothrud-karve-nagar-deccan') }}">Kothrud, Karve Nagar and Deccan</a>.</strong> {!! $pibmA('erandwane', 'Erandwane') !!} has two Aqua Line stations at its edge, so a tutor anywhere on the Vanaz–Ramwadi line can come by metro; on the narrow bungalow lanes, a tutor on a two-wheeler is often easier.</li>
    <li><strong><a href="{{ url('/city/pune/zone/aundh-baner-pashan') }}">Aundh, Baner and Pashan</a>.</strong> Line 3 is still being built through {!! $pibmA('balewadi', 'Balewadi') !!}, so tutors from Baner, Wakad or Aundh come by road, and evening traffic from the Hinjewadi side shapes the slot.</li>
    <li><strong><a href="{{ url('/city/pune/zone/wakad-hinjewadi-pimpri-chinchwad') }}">Wakad, Hinjewadi and Pimpri-Chinchwad</a>.</strong> Office-hour roads around {!! $pibmA('hinjewadi', 'Hinjewadi') !!} are some of the slowest in Pune; a tutor from the same township, or online on the heaviest days, keeps the week intact.</li>
    <li><strong><a href="{{ url('/city/pune/zone/viman-nagar-kalyani-nagar-kharadi') }}">Viman Nagar, Kalyani Nagar and Kharadi</a>.</strong> {!! $pibmA('kharadi', 'Kharadi') !!} has no station, Ramwadi being the nearest, and large societies may limit visitor parking, so settle the gate pass before the demo.</li>
    <li><strong><a href="{{ url('/city/pune/zone/koregaon-park-camp-wanowrie') }}">Koregaon Park, Camp and Wanowrie</a>.</strong> {!! $pibmA('koregaon-park', 'Koregaon Park') !!} is served by Bund Garden station; weekday after-school slots avoid the evening restaurant traffic in the lanes.</li>
    <li><strong><a href="{{ url('/city/pune/zone/hadapsar-kondhwa-nibm') }}">Hadapsar, Kondhwa and NIBM</a>.</strong> With no metro near {!! $pibmA('nibm-road', 'NIBM Road') !!}, a tutor living in the south-east belt is the reliable choice, and a slot just after the school rush is easiest.</li>
  </ul>
  <p>
    For <a href="{{ url('/city/pune/zone/katraj-bibwewadi-sinhagad-road') }}">Katraj, Bibwewadi and Sinhagad Road</a> and
    every other locality, see our <a href="{{ url('/city/pune') }}">Pune tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pibm-week">What a typical week looks like</h2>
  <p>
    Through most of DP1, one session a week is enough for an SL student keeping pace, and two for an HL student or one
    who is behind. I start each session with ten minutes of work without a calculator for AA students, or of GDC
    fluency for AI students, then take the week's school topic and finish with one exam-style question marked against
    the markscheme. In the exploration window the content changes but the time does not. Before mocks and the May
    papers, most students move to two or three sessions of full timed papers by type. For online sessions, AA work
    needs a second camera on the notebook and AI work needs the calculator visible; our
    <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online versus offline tutoring guide</a> discusses the set-up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pibm-demo">Six questions for the IB maths demo</h2>
  <ol>
    <li><strong>Did the tutor ask for course, level and session first?</strong> If not, the match is guesswork.</li>
    <li><strong>"Show that" versus "hence".</strong> Ask what each command term demands; an experienced IB tutor answers at once.</li>
    <li><strong>Marking.</strong> Give the tutor a marked school test and ask them to point out method, accuracy and follow-through marks.</li>
    <li><strong>The calculator question.</strong> For AA, how will non-calculator practice be kept up? For AI, how quickly can they work the GDC?</li>
    <li><strong>Paper 3 for HL.</strong> When would they start it, and how?</li>
    <li><strong>The exploration line.</strong> The answer you want is close to "the mathematics I can teach; the choices and the writing are the student's".</li>
  </ol>
  <p>
    If the demo misses on these, tell us; the next matched tutor gets a free demo of their own.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pibm-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee and you see it before the demo. The <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and our post on <a href="{{ url('/blog/home-tuition-fees-pune') }}">home tuition fees in Pune</a> explain what
    moves the figure.
  </p>
  <p>
    Send us the six details above and book a <a href="{{ url('/demo-class') }}">free demo class</a> with one of the two or
    three tutors we match; switching tutor later is free. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified, and you can browse
    <a href="{{ url('/tutors') }}">tutor profiles</a> first. For the sciences, see
    <a href="{{ url('/ib-physics-tutor-pune') }}">IB physics</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-pune') }}">IB and IGCSE chemistry</a> tutors in Pune.
  </p>
  </section>

  </div>
</article>
