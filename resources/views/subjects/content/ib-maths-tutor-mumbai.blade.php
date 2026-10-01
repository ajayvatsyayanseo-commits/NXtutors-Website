{{--
  Long-form guide for the "IB maths tutor Mumbai" page. Author: Ajay Vatsyayan
  (role: IB, IGCSE and ISC maths). No anecdotes, years or results are claimed
  for him. No schools, societies or other people are named.

  Course and assessment facts are reworded from ib-maths-tutor-gurgaon, which
  cites the IB Diploma Programme subject briefs for Mathematics: analysis and
  approaches and Mathematics: applications and interpretation and the IB's
  published curriculum update for the revised courses (ibo.org): two courses,
  each at SL or HL; 150 h SL / 240 h HL; SL Papers 1 and 2 (40% each, 1 h 30
  min each), HL Papers 1, 2 (30% each, 2 h each) and 3 (20%, two extended
  problem-solving questions with a GDC); exploration 20% at both levels,
  teacher-marked and IB-moderated, roughly 12 to 20 pages; AA Paper 1 without
  a calculator, AI uses the GDC on all papers; revised courses first taught
  August 2027 and first examined May 2029 (AA Papers 1 and 2 to 100 marks from
  110, Paper 3 to 50 marks from 55 and one hour; exploration kept, shared SL/HL
  criteria, 80/20 split kept); MYP maths four criteria. No other dates.

  Local detail only from database/seo-content/zones/mumbai.json (Line 3 to
  Cuffe Parade; Bandra, Khar Road and Santacruz on Western and Harbour lines;
  Juhu has no station, D N Nagar metro; Powai reached from Kanjurmarg by auto or
  via the link road; Ghodbunder Road has no suburban station and Metro 4/4A are
  under construction; South Mumbai families often find IB/IGCSE science help
  online), mumbai-research.json and the city hub (international schools keep
  their own terms; monsoon online fallback). The four-cluster sentence reports
  what public tuition listings show (plan/mumbai-competitors.md section 4), not
  NXTutors request data. Area links render only for active Mumbai areas. Fee
  wording is the approved sentence. FAQs render from faqs/ib-maths-tutor-mumbai.php.
--}}
@php
  $ibxSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ibxA = function (string $slug, string $label) use ($ibxSlugs) {
      return in_array($slug, $ibxSlugs, true)
          ? '<a href="' . e(url('/city/mumbai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="ibxGuideTitle">
  <h2 id="ibxGuideTitle">IB maths tutor in Mumbai: the right course version, the right tutor, a journey that holds</h2>

  <p class="nx-guide__lede">
    An IB Diploma maths request in Mumbai usually arrives as one line, "my daughter needs help with IB maths", and
    hides four separate questions. Is she on Analysis and Approaches or Applications and Interpretation? Standard or
    Higher Level? Which exam session, given that the IB is revising both courses? And can a tutor who teaches that exact
    combination reach a flat in Breach Candy, Juhu or Powai on a Tuesday evening in July? This page takes those
    questions one at a time. It is written by Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths on NXTutors, and it
    sits under our <a href="{{ url('/maths-home-tutor-mumbai') }}">maths home tutors in Mumbai</a> page and the
    <a href="{{ url('/ib-tutor-mumbai') }}">IB tutors in Mumbai</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ibx-four">Four courses</a> ·
    <a href="#ibx-papers">Papers by level</a> ·
    <a href="#ibx-version">Current or revised?</a> ·
    <a href="#ibx-ia">The exploration</a> ·
    <a href="#ibx-arrive">Arriving from SSC, ICSE or IGCSE</a> ·
    <a href="#ibx-zones">Where and how tutors travel</a> ·
    <a href="#ibx-mode">Home or online for IB maths</a> ·
    <a href="#ibx-year">A DP year in Mumbai</a> ·
    <a href="#ibx-demo">Demo checklist</a> ·
    <a href="#ibx-fees">Fees and starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ibx-four">One subject, four courses</h2>
  <p>
    Every Diploma student takes exactly one maths course. The IB offers two, and each can be studied at Standard Level
    or Higher Level, which gives four distinct routes. They share a core of number and algebra, functions, geometry and
    trigonometry, statistics and probability, and calculus, but they treat that core differently.
  </p>
  <ul>
    <li><strong>Analysis and Approaches (AA)</strong> is the algebraic route. It values exact answers, symbolic manipulation, proof and calculus done by hand, and one of its papers bans the calculator altogether. Students thinking about engineering, physics, mathematics or maths-heavy economics often choose it.</li>
    <li><strong>Applications and Interpretation (AI)</strong> is built around modelling and data. The graphic display calculator is in use on every paper, and questions tend to open with a real situation that the student has to turn into mathematics. It suits future social scientists, designers, biologists and business students, and at HL it is every bit as demanding as AA.</li>
  </ul>
  <p>
    A tutor who is strong on AA HL proof is not automatically the right person for AI SL statistics, and the reverse is
    also true. That is why we match on the course and level together, never on "IB maths" alone. If the choice is still
    open, our <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">AA, AI, SL and HL guide</a> lays out the trade-offs, and
    the national <a href="{{ url('/ib-maths-tutor') }}">IB maths tutor</a> page covers the subject in more depth.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibx-papers">How the papers are split between SL and HL</h2>
  <p>
    The IB plans 150 teaching hours for SL and 240 for HL. On the courses being examined now, an SL student sits two
    written papers and an HL student sits three, and at both levels the internally assessed exploration supplies the
    last fifth of the grade.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Current IB DP maths assessment, read by level</caption>
    <thead>
      <tr><th scope="col">Level</th><th scope="col">Written papers</th><th scope="col">Length of each</th><th scope="col">Share of grade</th></tr>
    </thead>
    <tbody>
      <tr><td>SL (AA or AI)</td><td>Paper 1 and Paper 2</td><td>One and a half hours</td><td>40% + 40%, exploration 20%</td></tr>
      <tr><td>HL (AA or AI)</td><td>Papers 1 and 2</td><td>Two hours</td><td>30% + 30%</td></tr>
      <tr><td>HL only</td><td>Paper 3: two extended problem-solving questions, GDC allowed</td><td>See note below</td><td>20%, exploration a further 20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    On AA, Paper 1 is the non-calculator paper; on AI, the GDC is allowed throughout. Paper 3 is the HL component that
    unsettles students most, because each question climbs in steps from familiar ground to a result the student has
    never seen. The habit it rewards is carrying an earlier answer into a later part without losing nerve, and the
    only real preparation is working through old Paper 3 questions from the first year of the Diploma, not in the last
    month before the exam.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibx-version">Current course or revised course? Check the exam session</h2>
  <p>
    The IB has published a revised version of both maths courses, taught from August 2027 and examined for the first
    time in May 2029. AA and AI both continue, SL and HL both continue, and the IB presents the change as a refinement.
    For AA, the published changes include shorter papers (Papers 1 and 2 move from 110 marks to 100, and Paper 3 from 55
    marks to 50 with one hour allowed), the exploration staying as the internal assessment with one shared set of
    criteria for SL and HL, and the 80 percent exam, 20 percent exploration balance unchanged.
  </p>
  <p>
    In practice: a student who began DP1 in August 2026 is on the current course and sits it in May 2028; a student who
    begins in August 2027 or later is on the revised one. When you send us a request, include the exam session. A tutor
    preparing your child from the wrong set of past papers wastes weeks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibx-ia">The mathematical exploration, and the line a tutor does not cross</h2>
  <p>
    The exploration is the student's own written investigation of a mathematical question they care about, roughly 12
    to 20 pages in the IB's guidance. The school marks it against published criteria (how clearly it is presented and
    communicated, personal engagement, reflection, and the use and accuracy of the mathematics) and the IB moderates the
    marks. Because it is worth a fifth of the grade at both levels, a careful exploration can move a student up a grade.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Fair help</h3>
  <p>
    Teaching mathematics the idea needs, even beyond the syllabus. Asking questions that help the student narrow a broad
    interest into a workable question. Walking through what each criterion rewards using the IB's own examples. Telling
    the student, in general terms, that an argument is unclear so they can fix it themselves.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Not allowed</h3>
  <p>
    Picking the topic. Writing, dictating or rewording any sentence. Doing the calculations, plotting the graphs or
    building the models. Line-editing a draft. A tutor who does any of this puts the diploma at risk under the IB's
    academic-integrity rules, and the student should tell their teacher about outside tutoring.
  </p>
    </div>
  </div>
  <p>
    Mumbai is full of questions a student could genuinely own: the timetable spacing on a suburban line, how monsoon
    rainfall varies year to year, the curve of a cable-stayed bridge, the queueing at a station footbridge. A modest
    question worked through thoroughly with the student's own mathematics usually scores better than an impressive one
    they cannot finish.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibx-arrive">Arriving in DP maths from SSC, ICSE, CBSE, IGCSE or the MYP</h2>
  <p>
    Mumbai's Diploma classrooms mix students from many routes, and each brings a different gap. Students from the State
    Board or CBSE are often quick with standard methods but new to questions that give little guidance and to the
    weight the IB places on written reasoning. ICSE students usually lay out working well and need more practice with
    the GDC and modelling. IGCSE Extended students meet familiar algebra but at a much faster pace. MYP students, whose
    maths was judged on four criteria (knowing and understanding, investigating patterns, communicating, and applying
    maths in real-life contexts), are comfortable with open tasks but can be caught out by timed, dense papers.
  </p>
  <p>
    The fix is the same shape for all of them: four to six weeks before DP1, or in its first term, spent on algebraic
    fluency, functions and trigonometry, with exam-style questions marked the IB way. For students switching boards, our
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">guide to switching from CBSE to IB or IGCSE</a>
    sets out a bridging plan that applies just as well to State Board and ICSE students. Students coming from Cambridge
    should also see the <a href="{{ url('/igcse-maths-tutor-mumbai') }}">IGCSE maths tutor in Mumbai</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibx-zones">Where IB maths tutors are needed in Mumbai, and how they get there</h2>
  <p>
    IB families live all over Mumbai, so the journey matters more than the postcode. Here is how a tutor reaches each zone:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/mumbai/zone/south-mumbai') }}">South Mumbai</a>.</strong> Tutors almost always come in from the north. Line 3 now runs underground to Cuffe Parade, so a tutor from Dadar or the airport side can reach {!! $ibxA('malabar-hill', 'Malabar Hill') !!} with a short taxi up the hill at the end. Our zone notes record that many families here end up finding IB or IGCSE science help online.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/worli-dadar-central-mumbai') }}">Worli, Dadar and Central Mumbai</a>.</strong> Few areas are better connected by rail. In {!! $ibxA('prabhadevi', 'Prabhadevi') !!} a tutor can come by Line 3 or the Western line; plan around the Tuesday temple crowds.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/bandra-khar-santacruz') }}">Bandra, Khar and Santacruz</a>.</strong> Every suburb here has a station on both the Western and Harbour lines. In {!! $ibxA('bandra-west', 'Bandra West') !!}, Hill Road and Linking Road slow in the evening, so an earlier slot helps.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/vile-parle-juhu') }}">Vile Parle and Juhu</a>.</strong> {!! $ibxA('juhu', 'Juhu') !!} has no station of its own; tutors finish by auto from Vile Parle or Santacruz, or use the D N Nagar metro for the northern side.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/chembur-ghatkopar-powai') }}">Chembur, Ghatkopar and Powai</a>.</strong> {!! $ibxA('powai', 'Powai') !!} has no station either. Tutors ride to Kanjurmarg and take an auto, or drive the link road, which is among the city's slowest at office hours.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/thane') }}">Thane</a>.</strong> Along {!! $ibxA('kolshet-road', 'Kolshet Road') !!} and the rest of the Ghodbunder corridor there is no suburban station yet and the new metro lines are still being built, so a tutor from the same stretch usually beats a stronger one crossing from the station side.</li>
  </ul>
  <p>
    <a href="{{ url('/city/mumbai/zone/andheri-jogeshwari') }}">Andheri and Jogeshwari</a> and
    <a href="{{ url('/city/mumbai/zone/navi-mumbai') }}">Navi Mumbai</a> have their own tutor pools and metro links; see
    every locality on the <a href="{{ url('/city/mumbai') }}">Mumbai home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibx-mode">Home or online: what changes for IB maths specifically</h2>
  <p>
    The specialist pool for AA HL or AI HL is small in any city, so the honest choice in Mumbai is rarely "home or
    online" and more often "which mix". Three things decide it for maths:
  </p>
  <ol>
    <li><strong>Handwritten algebra.</strong> AA students need someone who watches every line of non-calculator working. At home that is natural; online it works only if the notebook is on a second camera, not held up to the screen.</li>
    <li><strong>The GDC.</strong> AI students and HL Paper 3 practice need the tutor to see the calculator. A calculator emulator shared on screen, or a phone camera over the keypad, makes online GDC teaching workable.</li>
    <li><strong>The week itself.</strong> In the monsoon months a weekday home visit across the tracks can collapse; families who keep one weekend home session and move weekday sessions online rarely lose a week.</li>
  </ol>
  <p>
    Our <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online versus offline tutoring guide</a> weighs the two
    more generally.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibx-year">A DP maths year planned around a Mumbai calendar</h2>
  <p>
    International schools in Mumbai keep their own terms, which rarely match the board-exam season your neighbours are
    planning around. The tutor's plan therefore starts from the school's dates, not from a generic calendar.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How sessions are used through the Diploma</caption>
    <thead>
      <tr><th scope="col">Phase</th><th scope="col">What sessions are for</th><th scope="col">Usual rhythm</th></tr>
    </thead>
    <tbody>
      <tr><td>Before DP1 or its first weeks</td><td>Algebra, functions and trigonometry repair; GDC set-up for AI</td><td>A short block, two a week</td></tr>
      <tr><td>DP1 teaching terms</td><td>Keeping pace with school; topic tests marked IB-style; early Paper 3 problems for HL</td><td>One or two a week</td></tr>
      <tr><td>Exploration window</td><td>Teaching the mathematics the student's idea needs; criteria explained; no drafting</td><td>Unchanged, with one extra if needed</td></tr>
      <tr><td>Monsoon months</td><td>Same content, more sessions moved online</td><td>Weekend home, weekday online</td></tr>
      <tr><td>Run-up to mocks and finals</td><td>Full timed papers by type, markscheme marking, error log by topic</td><td>Two or three a week</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibx-demo">Seven things to check in an IB maths demo</h2>
  <ol>
    <li><strong>Course and level.</strong> The tutor should ask AA or AI, SL or HL, and the exam session before teaching anything.</li>
    <li><strong>Command terms.</strong> Ask what "hence", "hence or otherwise", "show that" and "write down" demand. A tutor who knows the IB answers without hesitating.</li>
    <li><strong>Markscheme marking.</strong> Hand over a marked school test. A good tutor separates method marks, accuracy marks and follow-through, and shows where marks leaked.</li>
    <li><strong>Calculator balance.</strong> For AA, does the tutor insist on non-calculator practice? For AI, can they drive the GDC quickly?</li>
    <li><strong>Paper 3 (HL).</strong> Ask how they would introduce it to a DP1 student.</li>
    <li><strong>The exploration line.</strong> Listen for "I teach the mathematics; the writing and the choices are yours".</li>
    <li><strong>The journey.</strong> Ask which line they take to you and how they would handle a monsoon week.</li>
  </ol>
  <p>
    If the demo misses on these, tell us; the next matched tutor gets their own free demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibx-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    For IB maths in Mumbai, the course and level, the tutor's journey and how many sessions you book each week shape the
    figure. Each tutor sets their own fee and you see it before the demo. The
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our post on
    <a href="{{ url('/blog/home-tuition-fees-mumbai') }}">home tuition fees in Mumbai</a> explain the factors.
  </p>
  <p>
    Send us the course, level, exam session, DP year, what is going wrong, your station or locality and the slots you
    can offer. We come back with two or three matched tutors, you choose one for a
    <a href="{{ url('/demo-class') }}">free demo class</a>, and switching tutor later is free. Tutors who join go through
    an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live. You can also browse
    <a href="{{ url('/tutors') }}">tutor profiles</a> first. For the sciences, see
    <a href="{{ url('/ib-physics-tutor-mumbai') }}">IB physics</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-mumbai') }}">IB and IGCSE chemistry</a> tutors in Mumbai.
  </p>
  </section>

  </div>
</article>
