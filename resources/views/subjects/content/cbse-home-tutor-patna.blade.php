{{--
  Board page for "CBSE home tutor Patna". Authors: Abhinandan Tiwary (role:
  Class 10 CBSE and ICSE maths) and Aaditya Kashyap (role: CBSE and ICSE
  science). No anecdotes, years or results are claimed. No schools, coaching
  institutes or people are named.

  Board facts only as the Gurgaon board hub (cbse-home-tutor-gurgaon) states
  them, which cites cbseacademic.nic.in / cbse.gov.in (read 1 Oct 2026):
  Curriculum 2026-27 Secondary (80 + 20 in major subjects, 33% pass, about
  half competency-focused questions, Class IX common paper + optional
  Advanced 25 marks / 1 hour, not in aggregate, 50%+ noted; Basic/Standard
  discontinued except the 2026-27 Class X batch; R3 internally assessed);
  Notification 14.02.2026 on two Class X board exams (first compulsory,
  improve up to three of science, maths, social science, languages);
  Curriculum 2026-27 Senior Secondary (Physics 042, Chemistry 043, Biology
  044 at 70 + 30; Mathematics 041 / Applied Mathematics 241, one only,
  Accountancy 055, Economics 030, Business Studies 054 at 80 + 20).
  Bihar School Examination Board described generally only, as on the
  /city/patna hub; Patna's board mix only as the hub states it (no shares).
  Local detail only from patna-research.json, patna-zone-guides.json,
  zones/patna.json and the hub. Fee wording is the approved sentence. Area
  links render only for active Patna areas.
--}}
@php
  $pcbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pcbA = function (string $slug, string $label) use ($pcbSlugs) {
      return in_array($slug, $pcbSlugs, true)
          ? '<a href="' . e(url('/city/patna/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="pcbGuideTitle">
  <h2 id="pcbGuideTitle">CBSE home tutors in Patna: board marks alongside the entrance plan</h2>

  <p class="nx-guide__lede">
    Many CBSE students in Patna are doing two things at once: a board course built on NCERT, and in the senior classes,
    a JEE or NEET plan with a coaching batch. A home tutor earns their place by protecting the first while the second
    takes the evenings. This page sets out what CBSE asks for from Class 6 to Class 12, the 2026-27 changes in Classes
    9 and 10, how CBSE differs from the Bihar board, which subjects Patna parents usually ask about, how tutors reach
    each side of the city, and how to judge a CBSE tutor in the free demo. Class 10 maths notes come from Abhinandan
    Tiwary and science notes from Aaditya Kashyap.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pcb-boards">CBSE and BSEB</a> ·
    <a href="#pcb-stages">Stage by stage</a> ·
    <a href="#pcb-910">Classes 9 and 10 now</a> ·
    <a href="#pcb-senior">Classes 11 and 12</a> ·
    <a href="#pcb-coaching">Board and coaching together</a> ·
    <a href="#pcb-week">A sensible week</a> ·
    <a href="#pcb-mode">Home or online</a> ·
    <a href="#pcb-subjects">Subject pages</a> ·
    <a href="#pcb-zones">Tutors across Patna</a> ·
    <a href="#pcb-demo">The demo</a> ·
    <a href="#pcb-fees">Fees and starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pcb-boards">CBSE, the Bihar board and the rest: what changes for a tutor?</h2>
  <p>
    Our <a href="{{ url('/city/patna') }}">Patna tutors page</a> lists the boards Patna students sit: the Bihar School
    Examination Board, CBSE, CISCE's ICSE and ISC, and a smaller number on IB or Cambridge IGCSE. We do not have
    figures for each and do not guess them. Language is the other variable: some students are most at ease in Hindi,
    some in English, many in a mix, so say which suits your child.
  </p>
  <p>
    In general terms, BSEB conducts the state's matric exam at Class 10 and the intermediate exam at Class 12, from its
    own prescribed textbooks and model papers. CBSE builds every paper on the NCERT books and releases sample papers
    and marking schemes on cbseacademic.nic.in each year. A tutor who has mostly taught BSEB students will know the
    content but may not drill CBSE's competency questions or its stepwise marking. A child moving between the two
    should spend the first weeks on the new board's textbook language and answer format.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pcb-stages">What CBSE asks for at each stage</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE for a Patna student, Class 6 to Class 12</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Who examines</th><th scope="col">Where children struggle</th><th scope="col">What tuition should target</th></tr>
    </thead>
    <tbody>
      <tr><td>6, 7, 8</td><td>The school</td><td>Fractions and negative numbers; reading a science text closely</td><td>Foundations and the habit of writing working</td></tr>
      <tr><td>9</td><td>School, 80-mark annual paper plus 20 internal</td><td>Maths and science widen together</td><td>Chapter tests; a view on the Advanced option</td></tr>
      <tr><td>10</td><td>CBSE board, 80 plus 20 school-assessed</td><td>Application questions; presentation</td><td>Sample papers, marked to the official scheme</td></tr>
      <tr><td>11</td><td>School</td><td>The jump in physics, chemistry and maths, often while coaching starts</td><td>A firm base before the board year</td></tr>
      <tr><td>12</td><td>CBSE board, theory plus practical or internal</td><td>Whole-syllabus revision competing with entrance tests</td><td>One plan that serves both</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A subject needs at least 33% to pass at Class 10. In the middle years, gaps in fractions and early algebra are the
    usual cause of "sudden" Class 9 trouble, so a tutor at that age is worth more for repair than for racing ahead.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pcb-910">Classes 9 and 10 under the 2026-27 curriculum</h2>
  <p>
    Class 9 students all take one common maths paper and one common science paper of 80 marks. Each may also choose an
    Advanced paper in one, both or neither subject: 25 marks in an hour, made up wholly of higher-order questions on
    extra content. Advanced marks sit outside the aggregate, and a score of 50% or above is noted on the marksheet. The
    Basic and Standard maths split is being phased out, with the 2026-27 Class 10 batch completing the older scheme.
    Pick Advanced only where your child already finds the subject comfortable.
  </p>
  <p>
    Class 10 now has two board exams. Everyone sits the first. A student who passes can return for the second to raise
    marks in up to three of science, maths, social science and the languages. Prepare for the first as the main event.
    Around half of each secondary paper is competency-based: case and source passages, data, situations and
    applications. A third language is also compulsory in the transition years, assessed by the school without a board
    paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pcb-senior">Classes 11 and 12: theory, practicals and internal marks</h2>
  <ul>
    <li><strong>Physics (042), Chemistry (043), Biology (044):</strong> 70 for the theory paper, 30 for practical work.</li>
    <li><strong>Mathematics (041) or Applied Mathematics (241), one of the two:</strong> 80 theory, 20 internal.</li>
    <li><strong>Accountancy (055), Economics (030), Business Studies (054):</strong> 80 theory, 20 internal.</li>
  </ul>
  <p>
    The Class 12 board paper covers the full Class 12 syllabus, and CBSE says senior papers will lean further towards
    real-life application. The paper design arrives each year with the sample paper, so a tutor should be using the
    current one. Our <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a>,
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">organic and inorganic chemistry guide</a> and
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">calculus and algebra guide</a> help with the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pcb-coaching">Board marks next to a coaching batch</h2>
  <p>
    The Patna hub puts it plainly: careful NCERT work serves both the board and the entrance exam, and the gap entrance
    students usually show is in writing full, stepwise board answers after months of objective practice. A CBSE home
    tutor alongside coaching should therefore do three things. Keep a running list of NCERT chapters the coaching has
    covered quickly, and return to them for board-style questions. Set at least one fully written answer every session,
    marked for steps, units and diagrams. And watch the practical file and internal work, which coaching ignores. If
    your child needs entrance help too, see <a href="{{ url('/jee-home-tutor-patna') }}">JEE home tutors in Patna</a>
    and <a href="{{ url('/neet-home-tutor-patna') }}">NEET home tutors in Patna</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pcb-week">What a sensible CBSE week looks like</h2>
  <p>
    For a Class 9 or 10 student, two sessions a week of about an hour each usually do more than one long weekend
    sitting. The first session of the week repairs whatever went wrong in school tests, starting from the NCERT
    explanation and moving to exemplar and competency questions on the same idea. The second is for writing: board-style
    answers produced in full, then marked line by line for steps, units, labelled diagrams and neat presentation. If
    your child thinks in Hindi but writes the paper in English, the tutor can explain in Hindi and insist the written
    answer is in clear English; that small rule, kept every week, saves marks in the board paper. Ask for a one-page monthly note
    of chapters done, test scores and errors that keep coming back.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pcb-mode">Home or online for CBSE in Patna?</h2>
  <p>
    Home works well for younger children, for anyone who drifts on a screen, and for the subjects where a tutor needs to
    see each line of working: maths, physics numericals, chemistry equations, accountancy formats. Online is the better
    tool for a short doubt session on a coaching day, for a senior subject whose right tutor lives on the far side of the
    city, and for days when heat, rain or a festival makes travel unreasonable. Most families end up with the same
    tutor doing both; our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online comparison</a> lays
    out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pcb-subjects">Which subjects, and which pages?</h2>
  <p>
    Maths and science are the main requests up to Class 10. From Class 11, physics, chemistry, maths and biology lead
    for science students, accountancy and economics for commerce, and English for anyone whose answers are thin.
  </p>
  <ul>
    <li><a href="{{ url('/maths-home-tutor-patna') }}">Maths home tutors in Patna</a>; board-year maths at <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10</a> and <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12</a>.</li>
    <li><a href="{{ url('/science-home-tutor-patna') }}">Science tutors in Patna</a>, with <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a>.</li>
    <li><a href="{{ url('/physics-home-tutor-patna') }}">Physics</a>, <a href="{{ url('/chemistry-home-tutor-patna') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-patna') }}">biology</a> tutors for the senior classes.</li>
    <li><a href="{{ url('/english-home-tutor-patna') }}">English tutors in Patna</a> for writing and literature.</li>
  </ul>
  <p>
    Our <a href="{{ url('/cbse-home-tutor-gurgaon') }}">CBSE board hub</a> explains the board in more depth, and
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation</a> sets out a workable order
    for the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pcb-zones">How tutors get to your side of Patna</h2>
  <ul>
    <li><strong><a href="{{ url('/city/patna/zone/boring-road-patliputra') }}">Boring Road and Patliputra</a>:</strong> most homes sit in colonies behind {!! $pcbA('boring-road', 'Boring Road') !!}, so give the colony and lane, not just the road. In {!! $pcbA('patliputra-colony', 'Patliputra Colony') !!}, a tutor from the same colony avoids the evening crossing altogether.</li>
    <li><strong><a href="{{ url('/city/patna/zone/kankarbagh-rajendra-nagar') }}">Kankarbagh and Rajendra Nagar</a>:</strong> a tutor living near Bhootnath or Malahi Pakri can reach {!! $pcbA('kankarbagh', 'Kankarbagh') !!} by metro. Avoid the hours when coaching batches change over on the market roads.</li>
    <li><strong><a href="{{ url('/city/patna/zone/bailey-road-danapur') }}">Bailey Road and Danapur</a>:</strong> choose a tutor from your own stretch of {!! $pcbA('bailey-road', 'Bailey Road') !!} and keep sessions outside office hours.</li>
    <li><strong><a href="{{ url('/city/patna/zone/gandhi-maidan-ashok-rajpath-old-patna') }}">Gandhi Maidan and Old Patna</a>:</strong> near {!! $pcbA('bankipur', 'Bankipur') !!}, stay clear of college opening and closing times on Ashok Rajpath, and go online on big event days at the Maidan.</li>
    <li><strong><a href="{{ url('/city/patna/zone/anisabad-gardanibagh-phulwari') }}">Anisabad and Phulwari</a>:</strong> pick a tutor on your side of the {!! $pcbA('anisabad', 'Anisabad') !!} roundabout; crossing it at peak is the slowest part of most trips.</li>
  </ul>
  <p>
    On the hottest afternoons, the heaviest monsoon days and around Chhath, a planned online session keeps the week
    intact. Read our <a href="{{ url('/blog/north-and-west-patna-tuition-guide') }}">north and west Patna guide</a> and
    <a href="{{ url('/blog/south-and-old-patna-tuition-guide') }}">south and old Patna guide</a> for local timing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pcb-demo">Five questions for a CBSE tutor at the demo</h2>
  <ol>
    <li><strong>"Which sample paper are you using?"</strong> It should be this year's, from the CBSE academic site.</li>
    <li><strong>"Show me a case-based question."</strong> Watch whether they teach how to read it.</li>
    <li><strong>"How does this answer differ from a BSEB answer?"</strong> Useful if the tutor teaches both boards.</li>
    <li><strong>"How will you fit around coaching?"</strong> Days, times and what happens in test weeks.</li>
    <li><strong>"What will I see each month?"</strong> A record of chapters, test marks and repeated mistakes.</li>
  </ol>
  <p>
    Two or three matched tutors, every fee visible beforehand, a free first class and a free switch later if needed.
    Tutors who join complete an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before going live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pcb-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. In Patna, the class, the
    number of subjects, sessions per week and the tutor's route decide where a fee lands; see the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-patna') }}">home
    tuition fees in Patna</a>.
  </p>
  <p>
    Share the class, subjects, colony, preferred language and free slots, and book a
    <a href="{{ url('/demo-class') }}">free demo</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a>, or if you
    teach CBSE, look at <a href="{{ url('/tuition-jobs/patna') }}">tuition jobs in Patna</a>.
  </p>
  </section>

  </div>
</article>
