{{--
  Long-form guide for the "maths home tutor Gurgaon" subject page. Written for
  Gurugram parents choosing a maths tutor. Every NXTutors fact here is a
  published policy (two or three matched tutors, free demo class, free
  switching, ID-verified tutors, office in Sector 66). Schools are named only as
  examples of schools whose students ask us for help, never as partners; each
  was checked against the school's own website for the boards it offers.

  Area links render only when that Gurugram area page exists and is active, so
  renaming or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $ggAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ggA = function (string $slug, string $label) use ($ggAreaSlugs) {
      return in_array($slug, $ggAreaSlugs, true)
          ? '<a href="' . e(url('/city/gurugram/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide mh-guide" aria-labelledby="mhGuideTitle">
  <h2 id="mhGuideTitle">Maths home tutor in Gurgaon (Gurugram): a guide for parents</h2>

  <p class="nx-guide__lede">
    Maths is the subject Gurugram parents ask us about more than any other, and for good reason. It is cumulative, so a
    shaky chapter in Class 8 turns into a lost term in Class 10; it is examined very differently by CBSE, ICSE, the IB
    and Cambridge; and in a city where many families move between cities, countries and boards, it is the subject where
    a change of school hurts most. NXTutors is based in Sector 66, Gurugram. This guide explains how maths home tuition
    works across the city: which tutors suit which board and class, how travel and traffic shape the timetable, what
    it costs, and how to tell in one demo class whether a maths tutor is right for your child.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#mh-how">How matching works</a> ·
    <a href="#mh-where">Where our tutors teach</a> ·
    <a href="#mh-boards">Maths by board</a> ·
    <a href="#mh-schools">Schools families come from</a> ·
    <a href="#mh-classes">Class by class</a> ·
    <a href="#mh-jee">JEE maths</a> ·
    <a href="#mh-switch">Switching boards</a> ·
    <a href="#mh-mode">Home or online</a> ·
    <a href="#mh-fees">Fees</a> ·
    <a href="#mh-choose">Choosing a tutor</a> ·
    <a href="#mh-safety">Safety</a> ·
    <a href="#mh-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="mh-how">How we match a maths home tutor in Gurugram</h2>
  <p>
    You tell us the student's class, board and school year, the maths topics that are causing trouble, your sector or
    society, the days and times that work, whether you want home or online sessions, and a budget range. We then
    shortlist two or three maths tutors who fit all of it. A strong maths tutor is not automatically the right maths
    tutor: someone who has spent ten years on CBSE Class 12 calculus may not be the best person for IB Maths Analysis and
    Approaches HL, and a JEE specialist may be too fast for a Class 7 student who has lost confidence with fractions.
  </p>
  <p>The shortlist weighs the things that decide whether maths tuition actually works:</p>
  <ul>
    <li><strong>Board and course.</strong> CBSE Standard or Basic, ICSE, ISC, IB AA or AI at SL or HL, IGCSE Core or Extended. The syllabus, the exam style and the way working is marked differ, so we match on the exact course.</li>
    <li><strong>Class band.</strong> Some tutors are at their best rebuilding foundations in Classes 6 to 8; others are strongest with board-year pressure or with Class 11 and 12 calculus. We ask tutors which levels they teach most and match accordingly.</li>
    <li><strong>The road between you.</strong> In Gurugram, travel time matters more than kilometres. We look at where the tutor starts from and the time of your slot, not just the sector.</li>
    <li><strong>Slot overlap.</strong> Weekday evenings between 5 pm and 8 pm are the most requested maths slots in the city. If your slot is crowded, we tell you and suggest tutors with a real opening.</li>
    <li><strong>Budget.</strong> We shortlist only inside the range you give us, and you see each tutor's fee before the demo.</li>
  </ul>
  <p>
    You then book a <strong>free demo class</strong> with the tutor you prefer. It is a normal maths lesson on whatever
    your child is studying that week, so you see how the tutor actually teaches. If it is not right, tell us and we set
    up the next tutor. Switching is free. Every tutor is ID-verified before being shortlisted to a family.
  </p>
  <p>
    On this page, Ajay Vatsyayan writes about IB, IGCSE and ISC maths, and Abhinandan Tiwary about Class 10 CBSE and
    ICSE maths. For the general picture of maths tuition beyond Gurugram, see our
    <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mh-where">Where our maths tutors teach in Gurugram</h2>
  <p>
    Gurugram splits into zones with their own school mix and their own traffic patterns, and both shape the kind of
    maths tutor a family needs. You can browse tutors near you on our <a href="{{ url('/city/gurugram') }}">Gurugram
    page</a>, where each sector and society has its own listing.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>DLF Phases 1 to 5 and MG Road</h3>
  <p>
    Families in {!! $ggA('dlf-phase-1', 'DLF Phase 1') !!}, {!! $ggA('dlf-phase-2', 'Phase 2') !!},
    {!! $ggA('dlf-phase-3', 'Phase 3') !!}, {!! $ggA('dlf-phase-4', 'Phase 4') !!} and
    {!! $ggA('dlf-phase-5', 'Phase 5') !!} send their children to a wide mix of CBSE, ICSE, IB and Cambridge schools, so
    maths requests here range from Class 10 CBSE board preparation to IB HL papers. Because homes are close together,
    tutors often teach several students in one phase on the same evening, which makes early-evening slots easier to find.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Golf Course Road and Golf Course Extension Road</h3>
  <p>
    The high-rise societies along Golf Course Road and {!! $ggA('-golf-course-extn', 'Golf Course Extension Road') !!}
    have a high share of IB and IGCSE students. Requests here are often narrow and specific: help with an IB maths
    internal assessment, Paper 3 practice for HL, or moving from IGCSE Core to Extended. Many societies limit visitor
    entry after a set hour, so we confirm gate timings when we fix the slot. Our office is on this stretch, in Sector 66.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Sohna Road, South City and Sushant Lok</h3>
  <p>
    Around {!! $ggA('south-city-2', 'South City 2') !!}, {!! $ggA('sushant-lok-phase-i', 'Sushant Lok Phase I') !!},
    {!! $ggA('nirvana-country', 'Nirvana Country') !!}, {!! $ggA('ardee-city', 'Ardee City') !!} and
    {!! $ggA('vatika-city-sector-49-gurugram', 'Vatika City') !!}, most requests are for CBSE and ICSE maths in Classes 9
    to 12, and for JEE maths alongside coaching. Sohna Road is slow in the evening, so a tutor on your side of the road is
    usually worth waiting a day for. Sectors such as {!! $ggA('sector-43', 'Sector 43') !!},
    {!! $ggA('sector-56', 'Sector 56') !!} and {!! $ggA('sector-57', 'Sector 57') !!} sit between this zone and Golf
    Course Road and draw tutors from both.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>New Gurugram: Sectors 76 to 95 and Dwarka Expressway</h3>
  <p>
    In newer societies such as {!! $ggA('m3m-urbana-residences-sector-67-gurugram', 'M3M Urbana') !!},
    {!! $ggA('emaar-palm-drive', 'Emaar Palm Drive') !!} and {!! $ggA('emaar-palm-hills', 'Emaar Palm Hills') !!}, and the
    sectors off NH-48 and Dwarka Expressway, many families moved in recently and the number of maths tutors living nearby
    is still catching up. Weekend mornings are easier to fill than weekday evenings here, and a hybrid plan (one home
    visit a week plus online sessions) often gets a stronger tutor than insisting on all home visits.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Old Gurgaon and Palam Vihar</h3>
  <p>
    The older city, including {!! $ggA('palam-vihar', 'Palam Vihar') !!} and colonies such as
    {!! $ggA('greenwood-city', 'Greenwood City') !!} nearer the centre, has many long-standing maths tutors who have
    taught CBSE board classes for years. Demand is strongest for CBSE Class 9 to 12 maths and for steady, no-frills
    practice through NCERT and previous years' papers.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mh-boards">Maths by board in Gurugram schools</h2>
  <p>
    Gurugram students sit four main kinds of maths exam. The mathematics overlaps a great deal; what differs is the
    order topics come in, the depth, the question style and how marks are given. That is why we match maths tutors by
    board first.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>CBSE: NCERT first, then papers</h3>
  <p>
    CBSE maths is built on the NCERT textbooks. Board papers lean on NCERT examples and exercises, and competency-based
    items (case studies and assertion–reason questions) now make up a real share of the paper. In Class 10, students
    choose Mathematics Standard or Basic; Standard is the one to take if the student may want maths in Class 11. CBSE
    has also introduced a second Class 10 board exam window, intended for students who want to improve their scores.
    The details of which subjects and how many a student may reappear in are set by CBSE circulars, so check the
    current one with your school before planning around it. Abhinandan Tiwary leads our Class 10 CBSE maths guidance;
    see also our <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">CBSE Class 10 maths preparation guide</a>.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC: length and precision</h3>
  <p>
    ICSE Class 10 maths covers more ground than CBSE at the same level, including topics such as commercial mathematics
    (GST, banking, shares and dividends) and matrices, and it rewards fully shown working. Students often struggle less
    with difficulty than with volume and speed. ISC maths in Classes 11 and 12 is split into a compulsory section and
    optional sections, and schools choose which options to teach, so a tutor must know the exact combination the student
    is sitting. Abhinandan Tiwary leads on ICSE Class 10 and Ajay Vatsyayan on ISC. Read more in our
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a>.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB: AA or AI, SL or HL, plus the IA</h3>
  <p>
    IB Diploma students take either Mathematics: Analysis and Approaches (AA), which is algebraic and calculus-heavy, or
    Mathematics: Applications and Interpretation (AI), which leans towards statistics, modelling and technology, each at
    Standard or Higher Level. HL students sit an additional paper of extended problem-solving. Every student also writes
    a mathematical exploration, the internal assessment, which a tutor may guide but must never write, under IB
    academic-integrity rules. Many IB students in Gurugram came through IB MYP or IGCSE and need help adjusting to DP
    pace. Ajay Vatsyayan leads our IB maths work; see our
    <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB Maths AA/AI SL/HL guide</a>.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Cambridge IGCSE: Core or Extended</h3>
  <p>
    IGCSE Mathematics is offered at two tiers. Core covers a narrower syllabus and limits the top grade available;
    Extended covers the full syllabus and opens every grade. The tier decision is usually made by the school in Grade 9 or
    10, and moving from Core to Extended late is possible but needs focused work on the Extended-only topics. The current
    Cambridge syllabus also tests students both with and without a calculator, so mental and written arithmetic matter
    again. Ajay Vatsyayan leads our IGCSE maths guidance; see our
    <a href="{{ url('/blog/igcse-coreextended-maths') }}">IGCSE Core and Extended maths guide</a>.
  </p>
      </div>
    </div>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How maths tuition differs by board</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">What students usually need help with</th><th scope="col">What to look for in a tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE</td><td>NCERT exercises, competency-based questions, step marking, time in the paper</td><td>Works from NCERT and sample papers; marks tests the way CBSE marks</td></tr>
      <tr><td>ICSE / ISC</td><td>Syllabus volume, commercial maths, full working, ISC optional sections</td><td>Knows the CISCE syllabus and the student's ISC section choices</td></tr>
      <tr><td>IB DP</td><td>Course level (AA/AI, SL/HL), Paper 3 for HL, the internal assessment</td><td>Has taught the current IB maths courses; guides the IA without writing it</td></tr>
      <tr><td>Cambridge IGCSE</td><td>Core versus Extended, command words, non-calculator questions</td><td>Builds lessons around past papers and mark schemes</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mh-schools">Gurugram schools our maths students come from</h2>
  <p>
    Parents often ask whether a tutor "knows" their child's school. What matters is the board and course, but it helps to
    know the kinds of schools families come to us from. The schools below are examples of Gurugram-area schools whose
    students' families ask us for maths help. NXTutors has no partnership or affiliation with any of them, and naming a
    school here says nothing about the school itself. Boards listed are as stated on each school's own website.
  </p>
  <ul>
    <li><strong>CBSE.</strong> Families whose children attend schools such as Delhi Public School, Sector 45; Amity International School, Sector 46; Lotus Valley International School; Heritage Xperiential Learning School; Shiv Nadar School Gurgaon; and Suncity School ask us for CBSE maths help, most often for Classes 9, 10 and 12.</li>
    <li><strong>ICSE and ISC.</strong> Families from schools such as The Shri Ram School, Aravali (ICSE and ISC) and Scottish High International School (ICSE) ask us for ICSE Class 10 maths and ISC Classes 11 and 12.</li>
    <li><strong>IB.</strong> Families from schools such as Pathways World School, Aravali; Pathways School Gurgaon; Lancers International School; GD Goenka World School; Scottish High International School; The Shri Ram School, Aravali (IB Diploma); and Shiv Nadar School Gurgaon ask us for IB maths support, from MYP through AA and AI at SL and HL.</li>
    <li><strong>Cambridge IGCSE.</strong> Families from schools such as Lancers International School, GD Goenka World School, Scottish High International School and Suncity School ask us for IGCSE Mathematics, Core and Extended.</li>
  </ul>
  <p>
    Several of these schools run more than one board, and a student's school can change board at Grade 9 or Grade 11.
    Tell us the exact course your child is sitting, not just the school name, and we match on that.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mh-classes">Maths tuition class by class</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Classes 6 to 8: foundations</h3>
  <p>
    The ideas that decide how Class 10 goes are laid down here: fractions and ratios, negative numbers, the first steps
    in algebra, and reading a word problem carefully. The aim is understanding and confidence, not marks. One or two
    sessions a week with a patient tutor who finds the gaps is usually enough. For students with an eye on JEE later,
    this is a good time for light problem-solving practice without coaching pressure.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10: the board years</h3>
  <p>
    Class 9 is when many Gurugram families first look for a maths home tutor, because the jump in algebra, geometry and
    trigonometry is steep and much of the Class 10 paper builds on Class 9. A good plan finishes the Class 9 syllabus
    properly, then in Class 10 cycles through teaching, chapter tests and, from late in the year, full papers under time.
    Two or three sessions a week is typical in Class 10. See our
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page for more.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12: calculus and beyond</h3>
  <p>
    Class 11 maths is where many strong Class 10 students struggle for the first time: functions, limits, sequences,
    and the start of calculus arrive together. Class 12 builds directly on it, with calculus, matrices and determinants,
    vectors, three-dimensional geometry and probability. Our
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">CBSE Class 12 calculus and algebra guide</a> covers
    the board side in detail. Students who take Physics too often benefit from a separate
    <a href="{{ url('/science-home-tutor') }}">science tutor</a> so that each subject gets full attention.
  </p>
      </div>
    </div>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Typical maths tuition plans by class</caption>
    <thead>
      <tr><th scope="col">Class band</th><th scope="col">Main goal</th><th scope="col">Typical sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 6 to 8</td><td>Close gaps, build confidence and number sense</td><td>1 to 2</td></tr>
      <tr><td>Class 9</td><td>Secure algebra, geometry and the base for Class 10</td><td>2</td></tr>
      <tr><td>Class 10</td><td>Board syllabus, chapter tests, timed papers</td><td>2 to 3</td></tr>
      <tr><td>Classes 11 and 12</td><td>Calculus, board and entrance preparation</td><td>2 to 3</td></tr>
      <tr><td>IB DP / IGCSE</td><td>Course-specific papers, IA guidance (IB)</td><td>1 to 3, depending on level</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mh-jee">JEE maths with a home tutor</h2>
  <p>
    Most JEE aspirants in Gurugram attend a coaching institute. A maths home tutor works best alongside coaching, not
    instead of it:
  </p>
  <ul>
    <li><strong>Doubt clearing on coaching material.</strong> Coaching batches move fast. A tutor who works through the student's own sheets and marked tests each week closes gaps before they pile up.</li>
    <li><strong>Board and entrance together.</strong> Class 12 students need a good board score and a good entrance score. Most of the maths is common to both, and a tutor can plan the year so the two support each other.</li>
    <li><strong>Weak chapters.</strong> Many students are comfortable with algebra but lose marks in coordinate geometry, or the reverse. Targeted one-to-one work on two or three chapters often helps more than extra hours on everything.</li>
  </ul>
  <p>
    Not every good board maths tutor is a JEE maths tutor. When you ask us for JEE support, we shortlist tutors who
    regularly teach JEE-level problems. Our <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths topic-wise
    preparation guide</a> explains how to split the syllabus.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mh-switch">Maths for students switching boards or moving to Gurugram</h2>
  <p>
    Gurugram has many families who move for work, from other Indian cities or from abroad, and a move often brings a
    change of board. Maths is the subject where this bites hardest, because topics come in a different order and a
    student can arrive having missed a chapter the new class treats as known. The common cases:
  </p>
  <ul>
    <li><strong>CBSE or a state board into ICSE.</strong> Expect to fill in ICSE-specific topics such as commercial mathematics, and to adjust to longer papers with full working expected.</li>
    <li><strong>CBSE or ICSE into IB or IGCSE.</strong> The mathematics is often familiar, but the questions are not: more interpretation, more multi-step problems, and in the IB an internal assessment that counts towards the final grade. A tutor who has taught both systems can bridge this quickly by starting with how answers are marked.</li>
    <li><strong>IGCSE into IB Diploma.</strong> A common move at Grade 11. The main decision is AA or AI and SL or HL; an Extended IGCSE student is generally better placed for AA than a Core student. We suggest a few sessions before the choice is final.</li>
    <li><strong>International school abroad into CBSE.</strong> Students often find the pace and the emphasis on exact NCERT methods unfamiliar. A few weeks on the chapters the new class has already covered usually settles it.</li>
    <li><strong>Mid-year moves in Class 9 or 11.</strong> These are the years where a missed term costs most, because Class 10 and 12 build on them. We look for tutors who can start within the week.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mh-mode">Home or online maths tuition in Gurugram traffic?</h2>
  <p>
    Both work, and many Gurugram families use a mix. Home tuition suits younger students and students who drift on a
    screen, and in maths it has a real advantage: the tutor can watch the student write out working and correct a
    habit on the spot. Online tuition widens the choice (useful for IB HL or JEE maths, where specialists are fewer),
    removes travel time on roads such as Sohna Road and Golf Course Extension Road at peak hours, and makes late-evening
    or weekend-morning sessions easier. A shared digital whiteboard and a phone camera pointed at the notebook cover
    most of what a maths lesson needs.
  </p>
  <p>
    A pattern that works well in Gurugram: one home session a week for hand-written practice and the relationship,
    plus one or two online sessions for doubts and tests. We can arrange home, online or hybrid tuition with the same
    tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mh-fees">What a maths home tutor costs in Gurugram</h2>
  <p>
    Across NXTutors, most sessions fall between <strong>₹800 and ₹2,500 an hour</strong>. Where a Gurugram maths tutor
    sits in that range depends on:
  </p>
  <ul>
    <li><strong>Class and board.</strong> Classes 11 and 12, IB and IGCSE maths sit towards the upper end; middle-school maths towards the lower end.</li>
    <li><strong>Level of maths.</strong> IB HL, JEE Advanced-level problems and IA guidance command higher fees than general homework help.</li>
    <li><strong>Experience.</strong> Tutors with long board-class experience and strong reviews from families charge more.</li>
    <li><strong>Travel.</strong> A tutor crossing the city in peak traffic prices that in; a tutor in your own sector or society often does not. Online sessions can cost less for the same tutor.</li>
    <li><strong>Frequency.</strong> Many tutors offer a lower hourly rate for three or more sessions a week, or a monthly arrangement.</li>
  </ul>
  <p>
    You see each shortlisted tutor's fee before the demo. For a fuller breakdown, see our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mh-choose">Choosing the best maths home tutor in Gurgaon</h2>
  <p>
    "Best" in maths tuition means best for this student, on this course, this year. A demo class tells you more than
    any profile. During and after it, check:
  </p>
  <ol>
    <li><strong>Did the tutor diagnose before teaching?</strong> A good first maths lesson starts with a few questions to find what the student can and cannot do.</li>
    <li><strong>Did your child do most of the problem-solving?</strong> In maths, learning happens with the pencil moving, not while listening.</li>
    <li><strong>Can the tutor explain one idea two ways?</strong> Ask them to re-explain something your child found hard, differently.</li>
    <li><strong>Do they know the exact course?</strong> Ask how CBSE step marking works, what ICSE expects in working, or how the IB internal assessment is marked, whichever applies.</li>
    <li><strong>Did they correct written working, not just answers?</strong> Most lost marks in maths are lost in presentation and small slips.</li>
    <li><strong>Did they propose a plan?</strong> Which chapters in the next month, and how progress will be tested.</li>
    <li><strong>How did your child feel afterwards?</strong> Comfort with the tutor matters, especially for students who are anxious about maths.</li>
  </ol>
  <p>
    If several answers are no, tell us and we set up a demo with the next tutor on the shortlist, at no charge. You can
    also browse <a href="{{ url('/tutors') }}">all tutors</a> yourself.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mh-safety">Safety for home tuition in Gurugram societies</h2>
  <p>
    Every tutor on NXTutors goes through identity verification before being shortlisted, and we keep tracking reviews
    and reliability afterwards. For home sessions, most Gurugram families follow a few simple practices, and we
    recommend them:
  </p>
  <ul>
    <li><strong>Register the tutor on your society's visitor app.</strong> Most gated societies in Gurugram use a visitor-management app; pre-approving the tutor logs every entry and saves waiting at the gate.</li>
    <li><strong>Have an adult at home.</strong> Especially for younger students, schedule sessions when a parent or trusted adult is in.</li>
    <li><strong>Use a common area.</strong> A dining table works better for maths than a bedroom anyway: space for notebooks and good light.</li>
    <li><strong>Tell us about any concern.</strong> If anything about a tutor's conduct worries you, contact us directly and we act on it the same day.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="mh-start">Getting started with a maths tutor in Gurugram</h2>
  <p>
    Tell us your child's class, board and exact maths course, your sector or society, and the slots that suit you. We
    come back with two or three matched maths tutors, you choose one for a free demo class, and you decide after that.
    Book a <a href="{{ url('/demo-class') }}">free demo class</a>, browse <a href="{{ url('/tutors') }}">tutors</a>, or
    start from our <a href="{{ url('/city/gurugram') }}">Gurugram page</a>.
  </p>
  <p>
    Looking outside Gurugram? We also match maths tutors in <a href="{{ url('/city') }}">cities across India</a>.
  </p>
  </section>

  </div>
</article>
