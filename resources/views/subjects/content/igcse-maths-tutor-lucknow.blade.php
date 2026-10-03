{{--
  Long-form guide for the "IGCSE maths tutor Lucknow" page. Author: Ajay
  Vatsyayan (role: IB, IGCSE and ISC maths). No anecdotes, years or results are
  claimed for him. No schools, societies or other people are named.

  Syllabus facts are reworded from igcse-maths-tutor-gurgaon, which cites the
  Cambridge IGCSE Mathematics 0580 syllabus for exams in 2025, 2026 and 2027
  and the 0606 Additional Mathematics syllabus for 2025-2027
  (cambridgeinternational.org): Core Papers 1 (no calculator) and 3
  (calculator), 1 h 30 min, 80 marks each; Extended Papers 2 (no calculator)
  and 4 (calculator), 2 h, 100 marks each; each paper 50%; Core grades C-G,
  Extended A*-E; scientific calculator, graphical/algebraic not permitted;
  June and November series, March series available to schools in India; nine
  topics, not in teaching order; about 130 guided learning hours; command
  words; three significant figures, angles to one decimal place, calculator pi
  or 3.142, no premature rounding; M, A and B marks; examiner reports; 0606
  two papers of 2 h and 80 marks, Paper 1 without and Paper 2 with a
  calculator, grades A*-E. Pearson Edexcel mentioned only by name, as in the
  igcse-tutor-lucknow hub. No other dates.

  Local detail only from database/seo-content/zones/lucknow.json,
  areas/lucknow-research.json, lucknow-zone-guides.json and the Lucknow hub
  (a smaller number of students take IB or Cambridge IGCSE; CBSE widely
  followed, ICSE/ISC strong; Indira Nagar Red Line stations, houses open onto
  the street, evening market roads; Nishatganj near IT College station,
  route to Gomti Nagar busy at office hours; Vikas Nagar numbered sectors,
  Ring Road traffic, tutor from Aliganj, Jankipuram or Kapoorthala; Rajendra
  Nagar mid-rise flats near Charbagh, sign-in, traffic at train and office
  times; LDA Colony lettered sectors, Krishna Nagar station, Kanpur Road peaks;
  Vrindavan Yojana numbered sectors, no metro, Raebareli Road busy at school
  and office times). No request data is claimed. Area links render only for
  active Lucknow areas. Fee wording is the approved sentence. FAQs render from
  faqs/igcse-maths-tutor-lucknow.php.
--}}
@php
  $ligmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ligmA = function (string $slug, string $label) use ($ligmSlugs) {
      return in_array($slug, $ligmSlugs, true)
          ? '<a href="' . e(url('/city/lucknow/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="ligmGuideTitle">
  <h2 id="ligmGuideTitle">IGCSE maths tutor in Lucknow: the tier, the two papers and the rounding rules</h2>

  <p class="nx-guide__lede">
    IGCSE students are a small group in Lucknow, which is a city of CBSE, ISC and UP Board classrooms, and that has a
    consequence: a maths tutor who is excellent for a CBSE Class 10 student may never have opened a Cambridge mark
    scheme. IGCSE maths rewards particular habits, from the way an answer is rounded to the way working is shown on a
    paper with no calculator. This guide by Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths on NXTutors, explains
    what those habits are and how to find a tutor who has them. It sits under our
    <a href="{{ url('/maths-home-tutor-lucknow') }}">maths home tutors in Lucknow</a> page and the
    <a href="{{ url('/igcse-tutor-lucknow') }}">IGCSE tutors in Lucknow</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ligm-code">Which syllabus</a> ·
    <a href="#ligm-tier">Core or Extended</a> ·
    <a href="#ligm-calc">The calculator split</a> ·
    <a href="#ligm-acc">Accuracy rules</a> ·
    <a href="#ligm-topics">Nine topics</a> ·
    <a href="#ligm-week">A weekly session</a> ·
    <a href="#ligm-add">Additional Maths</a> ·
    <a href="#ligm-series">Exam series</a> ·
    <a href="#ligm-next">After IGCSE</a> ·
    <a href="#ligm-zones">Reaching you</a> ·
    <a href="#ligm-demo">The demo</a> ·
    <a href="#ligm-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ligm-code">Start with the syllabus code on the timetable</h2>
  <p>
    "IGCSE maths" can mean Cambridge Mathematics 0580, Cambridge Additional Mathematics 0606, or a Pearson Edexcel
    specification, depending on the school. The papers, grade scales and calculator rules differ, so ask the school or
    look at your child's exam entry and send us the code. This page describes Cambridge 0580 and 0606. If your child is
    on Edexcel, say so; our post comparing
    <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge and Edexcel IGCSE</a> sets out the
    differences, and the national <a href="{{ url('/igcse-maths-tutor') }}">IGCSE maths tutor</a> page goes into the
    content.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ligm-tier">Core or Extended: a choice with a ceiling</h2>
  <p>
    Every 0580 candidate is entered for one of two tiers, and the tier fixes the highest grade available.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Mathematics 0580: the two tiers</caption>
    <thead>
      <tr><th scope="col"></th><th scope="col">Core</th><th scope="col">Extended</th></tr>
    </thead>
    <tbody>
      <tr><td>Papers</td><td>Paper 1 (no calculator) and Paper 3 (calculator)</td><td>Paper 2 (no calculator) and Paper 4 (calculator)</td></tr>
      <tr><td>Length and marks</td><td>One and a half hours and 80 marks each</td><td>Two hours and 100 marks each</td></tr>
      <tr><td>Weighting</td><td>Each paper is half the grade</td><td>Each paper is half the grade</td></tr>
      <tr><td>Grades available</td><td>C to G</td><td>A* to E</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A student entered for Core cannot earn above a C however well they do, so the entry decision matters for any child
    who might later want IB HL maths, ISC maths or a science-heavy Class 11. The school makes the entry. A tutor's job before that point is to give an honest view: if a student is close to Extended
    standard, a term of focused work on algebra and functions can change the school's decision; if not, a strong Core
    grade is worth more than a weak Extended one.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ligm-calc">Half the grade without a calculator</h2>
  <p>
    On both tiers, one paper bans calculators and the other allows a scientific one; graphical and algebraic
    calculators are not permitted at all. Since each paper is worth half, a student who leans on the calculator gives
    away a large part of the grade before they start.
  </p>
  <ul>
    <li><strong>Fractions and surds by hand.</strong> Weekly short drills, not a revision cram, build the speed this paper needs.</li>
    <li><strong>Estimation as a check.</strong> Rounding each number to one figure and estimating catches the slips that cost a whole answer.</li>
    <li><strong>Calculator paper discipline.</strong> On the other paper, students should know their own model well: memory, fractions and the statistics mode.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ligm-acc">The accuracy rules that quietly take marks away</h2>
  <p>
    The syllabus states its accuracy conventions, and examiners apply them. Unless a question says otherwise, answers
    that are not exact go to three significant figures, angles in degrees to one decimal place, and π is the
    calculator's value or 3.142. Rounding too early in a multi-step problem pushes the final figure out of range, so
    the full value should be carried until the end.
  </p>
  <p>
    The mark scheme separates method (M) marks, accuracy (A) marks that depend on the method, and independent (B)
    marks. A wrong final answer with clear working can still earn most of the marks; a right answer with no working on
    a "show" question may earn little. A good tutor marks practice papers with those codes so a student learns where
    each mark is won. Cambridge's examiner reports, published after each series, describe common errors question by
    question, and a tutor should use the latest one as a checklist.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ligm-topics">Nine topic areas, not a teaching order</h2>
  <p>
    The 0580 syllabus is grouped into nine topic areas: number; algebra and graphs; coordinate geometry; geometry;
    mensuration; trigonometry; transformations and vectors; probability; and statistics. Cambridge notes that the
    order is not a teaching order, and it plans for about 130 guided learning hours. Schools in Lucknow sequence the
    course in their own way, so the tutor should follow the school's scheme of work and fill gaps from earlier topics
    rather than run a parallel course. The command words that start each question, such as "calculate", "show that"
    and "sketch", are defined in the syllabus and tell the student how much working the examiner expects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ligm-week">How a weekly IGCSE maths session should run</h2>
  <p>
    An hour with a tutor goes further when it follows a set shape. The pattern below suits most Extended students in
    Grade 10; Core students and Grade 9 students spend longer on the first two parts.
  </p>
  <ol>
    <li><strong>Ten minutes of non-calculator warm-up.</strong> Fractions, negative numbers, indices or simple algebra, done by hand and checked at once.</li>
    <li><strong>Twenty minutes on the school's current topic.</strong> The tutor follows the class rather than racing ahead, and fills any gap from an earlier topic that the new work depends on.</li>
    <li><strong>Twenty minutes of past-paper questions on that topic,</strong> marked with M, A and B codes so the student sees which marks were won and lost.</li>
    <li><strong>Ten minutes on the error log.</strong> Every lost mark goes into a notebook by topic, with the correct method beside it; before a test, the log becomes the revision list.</li>
  </ol>
  <p>
    Homework between sessions should be short and regular: a handful of mixed questions most days does more than one
    long sheet at the weekend. In the months before the exam series, the shape changes to full papers under time,
    alternating the calculator and non-calculator paper, with the following session spent on the mistakes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ligm-add">Additional Mathematics 0606, briefly</h2>
  <p>
    Some schools offer 0606 to strong students as a second maths subject. It has two papers of two hours and 80 marks
    each, the first without a calculator and the second with one, graded A* to E. It moves into calculus, functions
    and further algebra, which makes it a useful bridge to IB AA HL or ISC maths. It is worth taking only when the
    student is comfortable with Extended 0580; adding it to a student already struggling dilutes both.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ligm-series">June, November or March: plan backwards from the series</h2>
  <p>
    Cambridge runs exam series in June and November, and schools in India can also use a March series. Each school
    chooses its series. The tutor's plan starts
    from that date: full coverage of the syllabus, then a phase of past papers under time, then targeted repair from
    the error log. When a student retakes in a later series, the work focuses on the papers rather than on reteaching
    the whole course.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ligm-next">What comes after IGCSE for Lucknow students</h2>
  <p>
    After Grade 10 a Lucknow IGCSE student may stay for the IB Diploma, move to an ISC school, or join a CBSE or UP
    Board Class 11. Each path asks something different of the maths. IB students should know whether they lean to AA or
    AI before DP1 begins; see our <a href="{{ url('/ib-maths-tutor-lucknow') }}">IB maths tutors in Lucknow</a> page.
    Those moving to ISC meet a long, written theory paper and project work; see the
    <a href="{{ url('/icse-maths-tutor-lucknow') }}">ICSE and ISC maths tutors in Lucknow</a> page. A move to CBSE
    brings NCERT textbooks and a new paper format; the <a href="{{ url('/cbse-home-tutor-lucknow') }}">CBSE tutors in
    Lucknow</a> page explains it. A tutor can run a short bridging block in the summer whichever way the child goes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ligm-zones">IGCSE maths tutors across Lucknow</h2>
  <p>
    Because Cambridge specialists are fewer, we look first for a tutor who can make the trip easily every week:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/lucknow/zone/gomti-nagar-indira-nagar-chinhat') }}">Gomti Nagar, Indira Nagar and Chinhat</a>.</strong> {!! $ligmA('indira-nagar', 'Indira Nagar') !!} has four Red Line stations, so a tutor from the centre can come by metro; most homes open on the street, but market roads crowd in the evening.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/mahanagar-aliganj-jankipuram') }}">Mahanagar, Aliganj and Jankipuram</a>.</strong> {!! $ligmA('nishatganj', 'Nishatganj') !!} is close to IT College station, though the road towards Gomti Nagar is busy at office hours. In {!! $ligmA('vikas-nagar', 'Vikas Nagar') !!}, Ring Road traffic makes a tutor living in Aliganj, Jankipuram or Kapoorthala the practical choice.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/hazratganj-lalbagh-aminabad') }}">Hazratganj, Lalbagh and Aminabad</a>.</strong> {!! $ligmA('rajendra-nagar', 'Rajendra Nagar') !!} is mostly mid-rise flats close to Charbagh; tutors take the metro and an auto, and should avoid the rush at train and office times.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/alambagh-ashiyana-rajajipuram') }}">Alambagh, Ashiyana and Rajajipuram</a>.</strong> {!! $ligmA('lda-colony', 'LDA Colony') !!} is laid out in lettered sectors served by Krishna Nagar station; Kanpur Road peaks in the morning and evening.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/sushant-golf-city-vrindavan-yojana-telibagh') }}">Sushant Golf City, Vrindavan Yojana and Telibagh</a>.</strong> {!! $ligmA('vrindavan-yojana', 'Vrindavan Yojana') !!} has no metro, so tutors come along Raebareli Road or Shaheed Path; one living in the township or Telibagh is easiest to keep.</li>
  </ul>
  <p>
    If the right Cambridge tutor lives too far for a weekly visit, online lessons with a camera on the notebook work
    well for maths; our guide to <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring</a>
    weighs it up. All localities are on the <a href="{{ url('/city/lucknow') }}">Lucknow home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ligm-demo">Six things to watch in an IGCSE maths demo</h2>
  <ol>
    <li><strong>The code and tier.</strong> The tutor should ask for both before teaching.</li>
    <li><strong>A non-calculator question solved by hand,</strong> with the working laid out as the examiner wants.</li>
    <li><strong>Rounding.</strong> Ask what three significant figures means for 0.004567; the answer should be immediate.</li>
    <li><strong>M, A and B marks.</strong> Hand over a marked school test and see whether the tutor explains where marks were lost.</li>
    <li><strong>Past papers and examiner reports.</strong> Ask which series they would use and how.</li>
    <li><strong>The journey.</strong> Which station or road, and a plan for evenings when it jams.</li>
  </ol>
  <p>
    If the demo is not right, the next matched tutor gives their own free demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ligm-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    For IGCSE maths in Lucknow, the tier, the exam series and the tutor's travel affect the figure. Each tutor sets
    their own fee, shown before the demo; see the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-lucknow') }}">home tuition fees in Lucknow</a>.
  </p>
  <p>
    Send the syllabus code, tier, exam series, grade, a sentence on the difficulty, your locality and your free slots.
    We share two or three matched tutors, the first class is a <a href="{{ url('/demo-class') }}">free demo</a>, and
    switching tutor later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID
    check</a> before their profile is marked Verified; you can also browse <a href="{{ url('/tutors') }}">tutor profiles</a>.
    For the sciences, see <a href="{{ url('/igcse-physics-tutor-lucknow') }}">IGCSE physics</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-lucknow') }}">IB and IGCSE chemistry</a> tutors in Lucknow.
  </p>
  </section>

  </div>
</article>
