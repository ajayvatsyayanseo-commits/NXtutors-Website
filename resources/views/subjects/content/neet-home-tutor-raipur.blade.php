{{--
  Raipur page for NEET home tutors. The exam, the NMC syllabus and NCERT-first
  tutoring are on the national hub (/neet-home-tutor); this page is about NEET
  tuition in Raipur: a recall system for biology, physics at home, the
  afternoon coaching batch, the four zones, CGBSE / CBSE / CISCE students,
  Hindi or English booklets, paper mocks, and the three stages.
  Author: nxtutors (NXTutors Academic Team). Page writer, 3 Oct 2026.

  Exam facts only as stated on the national page and the Patna page, which cite
  (fetched 1 Oct 2026):
  - NTA, NEET (UG) 2026 Information Bulletin (neet.nta.nic.in): 180 compulsory
    MCQs in 180 minutes (physics 45, chemistry 45, biology 90), 720 marks, +4/-1,
    pen and paper, single shift; booklets in English, Hindi (bilingual) or
    English plus a regional language (13 in all); minimum age 17 by 31 December,
    no upper limit; ties by biology, then chemistry, then physics, then the
    proportion of incorrect to correct answers.
  - NMC syllabus for NEET (UG) 2026: biology 10 units (five Class 11, five Class 12).
  CGBSE facts from https://cgbse.nic.in/Blueprint/2026/12th/203.pdf (Biology
  70 + 30; genetics and evolution 20, reproduction 16, biotechnology 12,
  biology in human welfare 12, ecology 10) and
  https://cgbse.nic.in/Documents/2026/adhyapan_yojana_2026_27.pdf (science
  faculty: Physics, Chemistry and Biology or Maths, the other as an extra
  subject; Physics, Chemistry, Biology 70 + 30, pass 23 and 10), read 3 Oct 2026.
  Local detail only from database/seo-content/areas/raipur-research.json,
  raipur-zone-guides.json and the Raipur hub. No schools, colleges, hospitals,
  coaching institutes or people named. Area links render only for active
  Raipur areas.
--}}
@php
  $rneSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $rneA = function (string $slug, string $label) use ($rneSlugs) {
      return in_array($slug, $rneSlugs, true)
          ? '<a href="' . e(url('/city/raipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="rneGuideTitle">
  <h2 id="rneGuideTitle">NEET home tutor in Raipur: a recall routine for biology and a steady hand for physics</h2>

  <p class="nx-guide__lede">
    Half of NEET is biology, and biology rewards a student who reads NCERT carefully and is then tested on it often. The
    other half is physics and chemistry, where many Raipur students who are comfortable with biology lose the marks
    that decide their rank. A home tutor helps most when the work is split along that line: short, frequent checks
    that biology has stuck, and longer sessions where someone watches the physics being solved. This page shows how
    Raipur families arrange that around school and an afternoon batch, what CG Board, CBSE and ICSE students each need
    to add, which localities tutors reach easily, and how the plan changes from Class 11 to Class 12 and into a second
    attempt. The national <a href="{{ url('/neet-home-tutor') }}">NEET home tutor</a> page explains the exam itself.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#rne-exam">The exam</a> ·
    <a href="#rne-recall">Biology recall</a> ·
    <a href="#rne-physics">Physics</a> ·
    <a href="#rne-week">A Raipur week</a> ·
    <a href="#rne-boards">CGBSE, CBSE, ICSE</a> ·
    <a href="#rne-booklet">Booklet language</a> ·
    <a href="#rne-where">Localities</a> ·
    <a href="#rne-stages">Year by year</a> ·
    <a href="#rne-mocks">Paper mocks</a> ·
    <a href="#rne-demo">Demo</a> ·
    <a href="#rne-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="rne-exam">How NEET (UG) is set</h2>
  <p>
    Under the NTA's 2026 bulletin, NEET (UG) was a single pen-and-paper sitting of 180 minutes with 180 compulsory
    multiple-choice questions: 90 in biology, covering botany and zoology, and 45 each in physics and chemistry. At four
    marks for a right answer and one off for a wrong one, the paper totals 720. Tied scores are separated by biology
    first. The National Medical Commission's syllabus gives biology ten units, five from the Class 11 NCERT book and
    five from Class 12. Check neet.nta.nic.in before relying on any of it in a new year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rne-recall">Building a biology recall routine</h2>
  <p>
    Reading NCERT biology is something a student can do alone. Finding out whether it has stayed in the memory is
    harder to do alone, and that is the part a tutor should own. A simple routine that works online in short slots:
  </p>
  <ol>
    <li><strong>Read.</strong> The student reads the current chapter in NCERT every morning, marking lines that look examinable.</li>
    <li><strong>Write from memory.</strong> Before the tutor's session, the student writes one process out in full and draws one diagram unlabelled, then labels it from memory.</li>
    <li><strong>Check.</strong> In a 25 to 30 minute online session, the tutor asks rapid questions on the marked lines and checks the diagram.</li>
    <li><strong>Log.</strong> Every miss goes into a running list that the student revisits the following week.</li>
  </ol>
  <p>
    Three or four of those sessions a week usually do more than one long biology lecture. Our
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NCERT-first biology guide</a> gives the tutor a chapter order.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rne-physics">Why physics usually belongs at home</h2>
  <p>
    In physics, a student often knows the formula but cannot see which principle applies or how to set the problem
    up. A tutor sitting beside them can see the exact line where it goes wrong: the free-body diagram, the sign
    convention, the unit. That is difficult to spot through a camera. One or two home sessions a week of about ninety
    minutes, built around questions the batch moved past too quickly, is a sound pattern. Chemistry splits: physical
    chemistry numericals belong with the physics approach, while organic reactions and inorganic facts suit the
    biology-style recall checks. The <a href="{{ url('/physics-home-tutor/neet') }}">NEET physics tutor</a> and
    <a href="{{ url('/chemistry-home-tutor/neet') }}">NEET chemistry tutor</a> pages go into each subject.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rne-week">An example NEET week in Raipur</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>One way to fit NEET tuition around school and an afternoon batch</caption>
    <thead>
      <tr><th scope="col">Day and time</th><th scope="col">Activity</th><th scope="col">Where</th></tr>
    </thead>
    <tbody>
      <tr><td>Daily, early morning</td><td>Reading the chapter in progress from the NCERT biology book</td><td>Alone, while the day is still cool</td></tr>
      <tr><td>Three evenings after the batch</td><td>Biology recall check, 25 to 30 minutes</td><td>Online</td></tr>
      <tr><td>One or two free mornings or weekend slots</td><td>Physics: questions the batch rushed past, a concept rebuilt from the start, then numericals against the clock</td><td>At home</td></tr>
      <tr><td>One weekday</td><td>Chemistry: physical numericals or organic and inorganic recall, whichever is weaker</td><td>Home or online</td></tr>
      <tr><td>Sunday morning</td><td>Full mock on paper, followed by review</td><td>At home; review online if easier</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    On the hottest afternoons, on the wettest monsoon days and around Dussehra and Diwali, move that week's physics
    session online rather than cancel it. Agree this with the tutor at the start.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rne-boards">CG Board, CBSE or ICSE: what NEET adds to each</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>School board and NEET preparation in Raipur</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Board biology in brief</th><th scope="col">What the tutor adds</th></tr>
    </thead>
    <tbody>
      <tr><td>CGBSE</td><td>Class 12 biology is 70 theory plus 30 practical; the 2026-27 blueprint gives genetics and evolution 20 marks and reproduction 16</td><td>NCERT wording, fast multiple-choice practice and the Class 11 units the board paper does not test</td></tr>
      <tr><td>CBSE</td><td>NCERT is the school book</td><td>Speed and recall checks; full written answers kept alive for the board</td></tr>
      <tr><td>ICSE and ISC</td><td>Detailed written science over a broad syllabus</td><td>NCERT language alongside the school text; objective practice under time</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A CG Board science student takes physics and chemistry with either biology or mathematics, and the board's
    2026-27 plan allows the other as an extra subject. For NEET, biology must be the main choice. The practical part of
    each science subject has its own pass mark, so the practical file cannot be left until the last month. Our
    <a href="{{ url('/chhattisgarh-board-tutor-raipur') }}">Chhattisgarh Board tutor</a>,
    <a href="{{ url('/biology-home-tutor-raipur') }}">biology</a> and <a href="{{ url('/physics-home-tutor-raipur') }}">physics</a>
    pages for Raipur cover the board side.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rne-booklet">Which booklet language?</h2>
  <p>
    In 2026 the booklet could be English only, Hindi and English together, or English paired with a regional language.
    Many Raipur students learn biology in Hindi at school and meet the same terms in English at coaching.
    Decide early which booklet your child will use, practise in it from Class 11, and look for a tutor comfortable in
    both languages who can then hold the student to one. Confirm the options in the current bulletin.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rne-where">Six Raipur localities and how NEET tutors reach them</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Travel notes for a home physics or chemistry tutor</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Nearest tutor pool</th><th scope="col">Useful to know</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $rneA('amlidih', 'Amlidih') !!}</td><td>Telibandha, Mahaveer Nagar, New Rajendra Nagar</td><td>Mostly houses; newer layouts need a map pin for the first visit</td></tr>
      <tr><td>{!! $rneA('mahaveer-nagar', 'Mahaveer Nagar') !!}</td><td>Amlidih, New Rajendra Nagar, the VIP Road side</td><td>Share block and flat number for complexes that register visitors</td></tr>
      <tr><td>{!! $rneA('new-rajendra-nagar', 'New Rajendra Nagar') !!}</td><td>Telibandha, Pachpedi Naka, Shankar Nagar</td><td>Good choice of tutors nearby; avoid office-hour build-up at the junctions</td></tr>
      <tr><td>{!! $rneA('bhatagaon', 'Bhatagaon') !!}</td><td>Bhatagaon and the colonies around it</td><td>The bus terminal is the landmark; keep clear of long-distance bus times</td></tr>
      <tr><td>{!! $rneA('sarona', 'Sarona') !!}</td><td>Tatibandh, Kabir Nagar, Amanaka; tutors from elsewhere can use the local station</td><td>Tell security the tutor's name before the demo</td></tr>
      <tr><td>{!! $rneA('kabir-nagar', 'Kabir Nagar') !!}</td><td>Tatibandh, Hirapur, Kota, Gudhiyari</td><td>Block and house numbers make homes easy to find</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Zone guides: <a href="{{ url('/city/raipur/zone/south-raipur') }}">South Raipur</a>,
    <a href="{{ url('/city/raipur/zone/west-raipur') }}">West Raipur</a>,
    <a href="{{ url('/city/raipur/zone/central-raipur') }}">Central Raipur</a> and
    <a href="{{ url('/city/raipur/zone/east-raipur') }}">East Raipur</a>. Every locality is listed on the
    <a href="{{ url('/city/raipur') }}">Raipur page</a>. Biology recall checks need no travel at all, so an
    <a href="{{ url('/online-tutor-raipur') }}">online tutor</a> from anywhere in India can take that part.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rne-stages">The plan year by year: Class 11, Class 12, a second attempt</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Class 11</h3>
  <p>
    Half the biology units come from this year's book, so start the recall routine in the first month and build a
    glossary in the booklet language. Get mechanics secure before the monsoon. Do not let school chapters fall behind
    the batch.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Class 12</h3>
  <p>
    Plan several rounds of biology revision across the year, practise physics against the clock, and set aside written practice and practical
    work for the board, whether CGBSE or CBSE. Ease new chapters in the festival weeks and use them for revision.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>A second attempt</h3>
  <p>
    In 2026 candidates had to be at least 17, with no upper age limit; confirm in the new bulletin. Go back through
    last year's mock papers, identify the subject and the reason behind the lost marks, and use daytime home sessions, when more tutors are free.
  </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rne-mocks">Paper mocks and wrong answers</h2>
  <p>
    Because the 2026 paper was answered by hand, home mocks should copy that: a printed paper, a separate answer sheet and three hours
    without a break. In Raipur's hot months, a Sunday morning start keeps the student fresh. After every mock the tutor
    should note, for each subject, how many answers were wrong, how many were left blank, and how long the subject
    took. Wrong answers deserve the most attention, since every one loses a mark and the ratio of incorrect to correct
    answers is also one of the bulletin's tie-breakers. A clear rule for leaving doubtful questions, checked after each mock, often
    adds more than extra chapters do.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rne-first">What to hand the tutor at the first session</h2>
  <p>
    A NEET tutor works faster when the first hour is spent on evidence rather than introductions. Keep these ready:
  </p>
  <ul>
    <li>The last three batch test papers with the marked answer sheets, so the tutor can see where marks went.</li>
    <li>The batch's chapter schedule for the next two months, so home sessions run just behind it, never ahead.</li>
    <li>The school's practical list and the state of the practical file, especially for a CG Board student, where practicals carry a separate pass mark.</li>
    <li>The booklet language your child has chosen, and any glossary already started.</li>
    <li>A note of the times that are truly free each week, after school, the batch and travel.</li>
  </ul>
  <p>
    With that in hand, the tutor can propose a written plan by the second or third session, which is a good sign in
    itself.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rne-demo">What to look for in the NEET demo</h2>
  <ul>
    <li>A biology tutor quizzes your child on a freshly read chapter and spots the shaky lines within minutes of questioning.</li>
    <li>A physics tutor asks what your child tried on a stuck question before explaining anything.</li>
    <li>Both know the current pattern and can explain how negative marking should shape the attempt plan.</li>
    <li>Your child follows comfortably in the chosen booklet language.</li>
    <li>The tutor can keep the same slot every week from where they live.</li>
  </ul>
  <p>
    Not convinced? We set up another demo, and a later switch costs nothing. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">parents' demo checklist</a> is worth reading first.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rne-fees">NEET tutor fees in Raipur and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets a fee that you can see before the demo. Combining one home physics tutor with brief online biology
    checks typically comes to far less a month than hiring a separate tutor for every subject. See the <a href="{{ url('/pricing-guide') }}">pricing guide</a>
    and <a href="{{ url('/blog/home-tuition-fees-raipur') }}">home tuition fees in Raipur</a>.
  </p>
  <p>
    Tell us the class, board, booklet language, the subjects you need, when the batch meets and your colony with a
    landmark. We suggest two or three matched tutors and you book a <a href="{{ url('/demo-class') }}">free demo class</a>.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>; you can also browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>. For engineering, see <a href="{{ url('/jee-home-tutor-raipur') }}">JEE
    home tutors in Raipur</a>; for chemistry at board level, the <a href="{{ url('/chemistry-home-tutor-raipur') }}">chemistry
    home tutor</a> page. Teachers can find requests on <a href="{{ url('/tuition-jobs/raipur') }}">Raipur tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
