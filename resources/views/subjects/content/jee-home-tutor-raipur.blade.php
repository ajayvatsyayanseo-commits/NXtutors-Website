{{--
  Raipur page for JEE home tutors. The exam in full is on the national hub
  (/jee-home-tutor); this page is about JEE tuition in a Raipur week: the
  afternoon coaching batch, the four zones, CGBSE / CBSE / CISCE students,
  Hindi and English, and Class 11, Class 12 and repeat-year plans.
  Author: nxtutors (NXTutors Academic Team). Page writer, 3 Oct 2026.

  Exam facts only as stated on the national page and the Patna page, which cite
  (fetched 1 Oct 2026):
  - NTA, JEE (Main) 2026 Information Bulletin (jeemain.nta.nic.in): Paper 1 CBT,
    3 hours, maths/physics/chemistry, 20 MCQ + 5 numerical each, 75 questions,
    300 marks, +4/-1 in both sections; two sessions; 13 languages; no age limit;
    Advanced eligibility by rank among Paper 1 candidates.
  - JEE (Advanced) 2026 Information Brochure (jeeadv.ac.in): two compulsory
    three-hour papers; English and Hindi; at most two attempts in consecutive years.
  CGBSE facts from cgbse.nic.in (read 3 Oct 2026):
  - https://cgbse.nic.in/Documents/2026/adhyapan_yojana_2026_27.pdf : science
    faculty = Physics (201), Chemistry (202) and Biology or Maths, the other as
    an extra subject; Physics and Chemistry 70 + 30, Maths 80 + 20.
  - https://cgbse.nic.in/Blueprint/2026/12th/204.pdf : calculus 36 of 80 marks.
  - https://cgbse.nic.in/Blueprint/2026/12th/201.pdf : magnetism, EMI and AC 19,
    electrostatics and current 16, optics 14 of 70.
  - https://cgbse.nic.in/ : notice "20 percentile cut-off marks 2024, 2025, 2026 (JEE)".
  Local detail only from database/seo-content/areas/raipur-research.json,
  raipur-zone-guides.json and the Raipur hub (afternoon coaching batches,
  no metro, local trains at Sarona and Saraswati Nagar, expressway and BRTS
  towards Nava Raipur, hot afternoons, monsoon, Dussehra and Diwali).
  No schools, colleges, coaching institutes or people named. Area links render
  only for active Raipur areas.
--}}
@php
  $rjeSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $rjeA = function (string $slug, string $label) use ($rjeSlugs) {
      return in_array($slug, $rjeSlugs, true)
          ? '<a href="' . e(url('/city/raipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="rjeGuideTitle">
  <h2 id="rjeGuideTitle">JEE home tutor in Raipur: one clear job next to the batch</h2>

  <p class="nx-guide__lede">
    Most Raipur students who aim at JEE carry three loads at once: school, an afternoon coaching batch, and a board
    examination at the end of Class 12. A home tutor is worth paying for only when the tutor takes something off that
    pile instead of adding another lecture to it. This page is about finding that job: which subject to hand over,
    when a tutor can actually come, how CG Board, CBSE and ICSE students each close the gap to the NTA syllabus, which
    tutors can reach your side of Raipur, and how the plan changes between Class 11, Class 12 and a drop year. The
    exam itself is covered on our national <a href="{{ url('/jee-home-tutor') }}">JEE home tutor</a> page.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#rje-exam">The exam</a> ·
    <a href="#rje-roles">The tutor's job</a> ·
    <a href="#rje-week">A Raipur week</a> ·
    <a href="#rje-boards">CGBSE, CBSE, ICSE</a> ·
    <a href="#rje-lang">Paper language</a> ·
    <a href="#rje-where">Localities</a> ·
    <a href="#rje-mode">Home or online</a> ·
    <a href="#rje-stages">Stages</a> ·
    <a href="#rje-tests">Test review</a> ·
    <a href="#rje-demo">Demo</a> ·
    <a href="#rje-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="rje-exam">The exam in a paragraph</h2>
  <p>
    The NTA runs JEE (Main). In 2026, Paper 1 was a three-hour computer-based test of 75 questions worth 300 marks:
    25 each in mathematics, physics and chemistry, made up of 20 multiple-choice and 5 numerical-answer questions per
    subject. Correct answers earned four marks and wrong ones cost a mark in both kinds. There were two sessions. The strongest
    Paper 1 candidates by rank qualified for JEE (Advanced), whose 2026 brochure set two compulsory three-hour papers in
    English and Hindi. Confirm every detail on jeemain.nta.nic.in and jeeadv.ac.in each year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rje-roles">Which job should the Raipur tutor take?</h2>
  <p>
    Pick one of these, or at most two. A tutor asked to "help with JEE" in general tends to drift into re-teaching
    what the batch already taught.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>The backlog clearer</h3>
  <p>
    Every unsolved sheet problem and every wrong answer from the latest batch test, worked through before the batch
    moves on. Suits students who attend coaching but fall behind on practice.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>The weak-subject specialist</h3>
  <p>
    Concentrated hours on the one subject that keeps dragging the total down, usually physics or mathematics. Suits students
    whose test scores are uneven across the three subjects.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>The board-and-entrance planner</h3>
  <p>
    One revision calendar that serves the Class 12 board paper and the JEE syllabus together, with a switch to written
    answers before the board. Most useful in Class 12.
  </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rje-week">A workable week for a Raipur JEE student</h2>
  <p>
    Coaching batches commonly take the afternoon, which leaves early mornings, late evenings and weekends for the tutor.
    The pattern below is an example, not a rule.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>An example JEE week in Raipur with one home tutor</caption>
    <thead>
      <tr><th scope="col">Slot</th><th scope="col">Work</th><th scope="col">Why it suits Raipur</th></tr>
    </thead>
    <tbody>
      <tr><td>Two early mornings</td><td>A 60 to 75 minute session at home in the weak subject</td><td>Before school and before the heat; roads are quiet</td></tr>
      <tr><td>One late evening after the batch</td><td>Thirty minutes online on that day's sheet</td><td>Doubts are fresh and the tutor does not ride across town after dark</td></tr>
      <tr><td>Sunday morning</td><td>A full timed paper</td><td>A clear three-hour block with no batch or school</td></tr>
      <tr><td>Sunday afternoon or Monday evening</td><td>Question-by-question review of that paper</td><td>Online works well with a shared screen</td></tr>
      <tr><td>Heavy-rain days, Dussehra and Diwali weeks</td><td>Pre-agreed online sessions</td><td>The week's work survives travel trouble and festival crowds</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Our <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching or home tutor for JEE</a>
    piece was written for Gurugram, but its argument about dividing the work between batch and tutor applies in Raipur.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rje-boards">From CG Board, CBSE or ICSE to the NTA syllabus</h2>
  <p>
    The NTA syllabus is built on NCERT content. How much extra the tutor must add depends on which board the student
    writes in Class 12.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Board course and JEE: what the Raipur tutor adds</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">What the board paper rewards</th><th scope="col">What the tutor adds for JEE</th></tr>
    </thead>
    <tbody>
      <tr><td>Chhattisgarh Board (CGBSE)</td><td>The 2026-27 blueprints weight Class 12 maths heavily towards calculus, 36 of 80 marks, and physics towards electromagnetism and optics</td><td>Speed on objective and numerical questions, Class 11 topics the board paper does not revisit, and negative-marking discipline</td></tr>
      <tr><td>CBSE</td><td>NCERT as the textbook; written board answers with full steps</td><td>Problem depth beyond NCERT exercises; a planned return to written answers before the board</td></tr>
      <tr><td>ICSE and ISC</td><td>A wide syllabus and long written papers</td><td>An early map of ISC chapter order against the NTA units, so school and coaching do not drift apart</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Two CG Board details are useful for JEE families. In the science faculty, a student takes physics and chemistry
    with either mathematics or biology, and the board's plan allows the other as an extra subject, which matters if
    your child has not ruled out medicine. And the board has posted a notice of "20 percentile cut-off marks" for JEE
    purposes on cgbse.nic.in; read it with the current official JEE information if board standing affects your plans.
    More on the board is on our <a href="{{ url('/chhattisgarh-board-tutor-raipur') }}">Chhattisgarh Board tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rje-lang">Hindi, English or a mix?</h2>
  <p>
    Plenty of Raipur students learn science partly in Hindi. The 2026 JEE Main bulletin listed thirteen languages and
    the Advanced brochure offered English and Hindi, so a Hindi-medium student is not shut out, but the choice should
    be made in Class 11 and practised from then on. Ask for a tutor who can give each technical term in both languages
    at first and then let the student settle on one. Check the language list again in the current bulletin.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rje-where">Which tutors can reach your part of Raipur?</h2>
  <p>
    With no metro, almost every tutor travels by road, so a tutor from your own zone is the one most likely to last a
    full year of early mornings.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Raipur localities for JEE tuition at home</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">How tutors usually come</th><th scope="col">Tip</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $rjeA('kota', 'Kota') !!}</td><td>From Samta Colony, Gudhiyari or Tatibandh by two-wheeler</td><td>Stay on your side of the Great Eastern Road for the evening online slot as well</td></tr>
      <tr><td>{!! $rjeA('tatibandh', 'Tatibandh') !!}</td><td>From Kabir Nagar, Hirapur or Sarona; local trains stop at Sarona</td><td>Apartment gates register visitors; ask about a standing pass</td></tr>
      <tr><td>{!! $rjeA('sarona', 'Sarona') !!}</td><td>By local train and a short auto ride, or from Amanaka</td><td>Fix the slot outside the evening rush on the highway side</td></tr>
      <tr><td>{!! $rjeA('pachpedi-naka', 'Pachpedi Naka') !!}</td><td>From the city centre, Telibandha or the Dhamtari Road colonies</td><td>Prefer a tutor on your side of the Ring Road junction</td></tr>
      <tr><td>{!! $rjeA('new-rajendra-nagar', 'New Rajendra Nagar') !!}</td><td>From Telibandha, Amlidih and Shankar Nagar along the arterial roads</td><td>Avoid office-hour build-up at the junctions</td></tr>
      <tr><td>{!! $rjeA('kamal-vihar', 'Kamal Vihar') !!}</td><td>From Amlidih, Pachpedi Naka and the Dhamtari Road side</td><td>Send sector, block and plot number; the township is still filling up, so online helps for advanced work</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Zone guides: <a href="{{ url('/city/raipur/zone/central-raipur') }}">Central</a>,
    <a href="{{ url('/city/raipur/zone/east-raipur') }}">East</a>,
    <a href="{{ url('/city/raipur/zone/south-raipur') }}">South</a> and
    <a href="{{ url('/city/raipur/zone/west-raipur') }}">West Raipur</a>. All localities are on the
    <a href="{{ url('/city/raipur') }}">Raipur page</a>, and the <a href="{{ url('/blog/raipur-home-tuition-guide') }}">Raipur
    home tuition guide</a> covers each zone street by street.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rje-mode">At home or online, subject by subject</h2>
  <ul>
    <li><strong>Physics at home</strong> when the student stalls at setting up a problem; the tutor needs to watch the diagram and the first equation being written.</li>
    <li><strong>Mathematics at home, reviews online.</strong> Long working belongs on paper in front of the tutor; going through a timed paper works well on a shared screen.</li>
    <li><strong>Chemistry often online.</strong> Organic and inorganic recall suits short, frequent online checks; bring physical chemistry numericals home if they lag.</li>
    <li><strong>Advanced-level problems online.</strong> A specialist teaching from another city is often a better use of money than the nearest available tutor.</li>
  </ul>
  <p>
    Our <a href="{{ url('/online-tutor-raipur') }}">online tutors for Raipur</a> page and the general
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a> comparison go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rje-stages">Class 11, Class 12 and a drop year</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How the Raipur tutor's focus shifts</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Main work</th><th scope="col">Watch out for</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 11</td><td>Mechanics, the basics of calculus, mole concept and chemical bonding; an error notebook from week one</td><td>Losing Class 11 to the novelty of the batch; it is hard to win back in Class 12</td></tr>
      <tr><td>Class 12</td><td>New chapters, Class 11 revision passes, full papers before the first session</td><td>Board practicals and written answers squeezed out; schedule them in the tutor's plan</td></tr>
      <tr><td>Drop year</td><td>Diagnose last year's papers, rebuild the weakest chapters, many timed papers</td><td>Attempt rules: in 2026 Main had no age limit and Advanced allowed two attempts in consecutive years</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For a drop year, daytime sessions open up a much wider choice of tutors, since most of them teach school students
    in the evenings. Topic plans to hand the tutor: <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">physics</a> and
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">chemistry</a>, plus the
    <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rje-tests">What a good test review looks like</h2>
  <p>
    After each timed paper the tutor should sort every lost mark into one of four bins: did not know the concept, knew
    it but chose the wrong method, made a calculation slip, or ran out of time. The bins point to different fixes, and
    after three or four papers a pattern usually appears. Because a wrong answer costs a mark, the tutor should also
    agree a rule for when to leave a question, then check after each paper that the student followed it. A student who
    stops guessing on doubtful questions can gain marks without learning a single new chapter.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rje-demo">Five checks at the JEE demo</h2>
  <ol>
    <li>Did the tutor ask about the board, the batch timetable and the last test score before teaching?</li>
    <li>Given a few unsolved batch questions, did they find where the student went wrong and let the student finish?</li>
    <li>Was the explanation easy to follow in your child's language, Hindi, English or both?</li>
    <li>Could they say how negative marking should change your child's attempt plan?</li>
    <li>Can they reach your locality at the same early or late hour every week?</li>
  </ol>
  <p>
    If not, we arrange another demo, and switching later is free. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rje-fees">JEE tutor fees in Raipur and how to begin</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee, which you see before the demo. One tutor for the weakest subject, plus short online
    reviews, usually costs less than three separate subject tutors. See the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and <a href="{{ url('/blog/home-tuition-fees-raipur') }}">home tuition fees in Raipur</a>.
  </p>
  <p>
    Send the class, board, target exam, weak subject, batch timings and your locality with a landmark. You get two or
    three matched tutors and book a <a href="{{ url('/demo-class') }}">free demo class</a>. Tutors who join go through
    an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>, and you can look through
    <a href="{{ url('/tutors') }}">tutor profiles</a>. Board-side help: <a href="{{ url('/maths-home-tutor-raipur') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-raipur') }}">physics</a> and <a href="{{ url('/chemistry-home-tutor-raipur') }}">chemistry</a>
    tutors in Raipur. For medicine, see <a href="{{ url('/neet-home-tutor-raipur') }}">NEET home tutors in Raipur</a>.
    Teachers can browse <a href="{{ url('/tuition-jobs/raipur') }}">Raipur tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
