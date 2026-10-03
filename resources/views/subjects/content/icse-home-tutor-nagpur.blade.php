{{--
  Board page for "ICSE home tutor Nagpur" (CISCE: ICSE Class 10, ISC Class 12).
  Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths), Aaditya
  Kashyap (role: CBSE and ICSE science) and Ajay Vatsyayan (role: IB, IGCSE and
  ISC maths). No anecdotes, years or results are claimed for any of them. No
  schools or societies are named.

  Board facts are reworded from the Gurgaon board hub (icse-home-tutor-gurgaon),
  which cites cisce.org (read 1 Oct 2026): ICSE Regulations (Group I
  compulsory; Group II two or three subjects; both 80% external / 20%
  internal; Group III one subject, 50/50), ICSE Mathematics (3-hour 80-mark
  paper + 20 internal from at least two assignments marked by the teacher and an
  external examiner), ICSE Physics, Chemistry and Biology (each a 2-hour 80-mark
  paper + 20 practical internal), Analysis of Pupil Performance reports, ISC
  Regulations (English + three to five electives, up to six subjects; no change
  after 15 September of Class XI; Class XII subjects must be studied in XI;
  promotion 35% in four subjects incl. English and 75% attendance; grades 1-9;
  practicals compulsory; pass certificate needs SUPW and Community Service) and
  ISC Mathematics (80 theory + 20 project). No exam dates.
  Local detail only from the Nagpur city hub view (ICSE and ISC reward complete
  written answers across a wide syllabus, set literature in English; students
  divide mainly between the State Board and national boards; April to June a
  clean start for CBSE and ICSE students), nagpur-zone-guides.json (East zone:
  name the board, State Board, CBSE or ICSE), nagpur-research.json and
  zones/nagpur.json. Area links render only for active Nagpur areas. Fee wording
  is the approved sentence. FAQs render from faqs/icse-home-tutor-nagpur.php.
--}}
@php
  $icnSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $icnA = function (string $slug, string $label) use ($icnSlugs) {
      return in_array($slug, $icnSlugs, true)
          ? '<a href="' . e(url('/city/nagpur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="icnGuideTitle">
  <h2 id="icnGuideTitle">ICSE and ISC home tutors in Nagpur: complete answers, every chapter, and a tutor who can reach you</h2>

  <p class="nx-guide__lede">
    Most Nagpur students study under the Maharashtra State Board or one of the national boards, so an ICSE family is
    often looking for a narrower kind of tutor than the neighbours are. That matters, because CISCE, the council that
    runs the ICSE in Class 10 and the ISC in Class 12, marks in a particular way: complete written answers, every step
    of working, a wide syllabus revised all the way through, and set literature in English. A tutor who is excellent
    for SSC students can need time to adjust. This page covers how ICSE and ISC are put together, where tuition helps
    most, how CISCE compares with the State Board, and how tutors reach each zone of the city. Abhinandan Tiwary
    (Class 10 CBSE and ICSE maths) and Aaditya Kashyap (CBSE and ICSE science) wrote it, with Ajay Vatsyayan (IB, IGCSE
    and ISC maths) on ISC.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#icn-state">ICSE beside SSC</a> ·
    <a href="#icn-groups">Subject groups</a> ·
    <a href="#icn-papers">The papers</a> ·
    <a href="#icn-writing">English and long answers</a> ·
    <a href="#icn-stages">Stages</a> ·
    <a href="#icn-isc">ISC and after Class 10</a> ·
    <a href="#icn-subjects">Subjects</a> ·
    <a href="#icn-zones">Zones</a> ·
    <a href="#icn-demo">The demo</a> ·
    <a href="#icn-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="icn-state">How ICSE differs from the SSC route</h2>
  <p>
    In general terms, the State Board's SSC is one examination at the end of Class 10 built on the state's textbooks,
    and state-board students in Nagpur study in more than one medium. ICSE spreads marks across a larger number of
    separate papers, builds internal assessment into every subject, and expects longer written answers in most of
    them, with set literature in English. Both reward practice; they
    reward different practice. A tutor who usually teaches SSC may know the maths and science perfectly well and still
    need to learn ICSE's papers, its specimen questions and the way its examiners give method marks. Ask, rather than
    assume, and for any State Board detail rely on the board's official notices.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icn-groups">Three groups of subjects</h2>
  <p>
    CISCE's regulations sort ICSE subjects into three groups:
  </p>
  <ul>
    <li><strong>Group I, compulsory:</strong> English, a second language, and History, Civics and Geography. 80% of the marks come from the paper and 20% from internal assessment.</li>
    <li><strong>Group II, two or three subjects:</strong> for example Mathematics, Science, Economics, Commercial Studies, a modern foreign or classical language, or Environmental Science, on the same 80 and 20 split.</li>
    <li><strong>Group III, one subject:</strong> an applied subject such as Computer Applications or Physical Education, assessed half by paper and half internally.</li>
  </ul>
  <p>
    Group III is where steady project work over the year pays off. Groups I and II are decided mostly in the exam hall,
    which is why timed written practice matters so much.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icn-papers">The maths and science papers</h2>
  <p>
    Maths is one three-hour paper worth 80 marks, plus 20 internal marks from at least two assignments, each marked by
    the subject teacher and separately by an external examiner. Commercial mathematics, including banking and shares,
    sits in the syllabus alongside algebra, geometry and trigonometry, and every step must be shown.
  </p>
  <p>
    Science is three subjects in practice: Physics, Chemistry and Biology each have their own two-hour, 80-mark paper
    and 20 internal marks for practical work. A science tutor therefore needs to be confident in all three, or you
    need a plan for the weakest. CISCE also publishes an Analysis of Pupil Performance for each subject after the
    exams, listing the mistakes examiners met most often; together with the specimen papers, it is the best guide to
    how answers are marked.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icn-writing">English, set literature and the long-answer subjects</h2>
  <p>
    For many ICSE students the subjects that need the most time are not maths or science but English, with its
    prescribed literature, and History, Civics and Geography, where answers are long and must be organised.
    These reward a tutor who reads and corrects writing every week: a clear opening sentence, points in a sensible
    order, quotations or facts used to support them, and nothing padded. For a student moving from a regional-medium
    school into ICSE, this is usually the steepest part of the change, and an
    <a href="{{ url('/english-home-tutor-nagpur') }}">English home tutor in Nagpur</a> can help with both the
    language and the literature.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icn-stages">The CISCE route, stage by stage</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What each stage asks of an ICSE or ISC student</caption>
    <thead>
      <tr><th scope="col">Classes</th><th scope="col">What counts</th><th scope="col">Best use of a tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>6–8</td><td>School exams and projects</td><td>Habits: full working, labelled diagrams, writing at length</td></tr>
      <tr><td>9</td><td>The two-year ICSE syllabus begins</td><td>Keeping every subject moving from the first term</td></tr>
      <tr><td>10</td><td>ICSE papers and internal assessment</td><td>Specimen papers, examiner reports, a weekly timed paper</td></tr>
      <tr><td>11</td><td>School exams; the ISC promotion rule</td><td>Bridging to ISC depth early; choosing electives carefully</td></tr>
      <tr><td>12</td><td>ISC theory, practical exams and project work</td><td>Depth in the electives; practical and project deadlines</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icn-week">A week of ICSE tuition that works</h2>
  <p>
    With so many papers, a sensible weekly plan rotates rather than repeats. One session can go to maths every week,
    because method builds steadily, while a second rotates through physics, chemistry and biology, and every other
    week a written answer in English or history is set and marked. Each session should begin with the student's own
    attempt at a few questions from last time, marked before anything new is taught, and end with one answer written
    under a time limit. A short list of chapters with the date each was last revised, kept by the tutor and shared
    with you, is the simplest way to make sure nothing from Class 9 is forgotten by the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icn-isc">ISC, and the choices after Class 10</h2>
  <p>
    In ISC, English is compulsory and students add three, four or five electives, with six subjects at most. The
    regulations lock choices early: no change of subject after 15 September of the Class 11 registration year, and
    only subjects studied in Class 11 can be taken in Class 12. Promotion needs 35% in four subjects including
    English and 75% attendance. Where a subject has a practical paper, the practical must be taken. Results are graded
    1 to 9, and the pass certificate also needs Socially Useful Productive Work and Community Service. ISC Mathematics
    has an 80-mark theory paper and 20 marks of project work in each year; see our
    <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page.
  </p>
  <p>
    Not every ICSE student continues to ISC. Some move to the State Board for the HSC, with its own textbooks and past
    papers; others move to CBSE and its NCERT books. The maths and science carry over in every case, but give the
    first weeks of tuition to the new textbooks and the new paper style.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icn-subjects">Subjects and our Nagpur pages</h2>
  <ul>
    <li><strong>ICSE and ISC maths:</strong> <a href="{{ url('/maths-home-tutor-nagpur') }}">maths home tutors in Nagpur</a>; the <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> covers the paper.</li>
    <li><strong>ICSE sciences:</strong> <a href="{{ url('/science-home-tutor-nagpur') }}">science home tutors in Nagpur</a>.</li>
    <li><strong>ISC physics, chemistry and biology:</strong> <a href="{{ url('/physics-home-tutor-nagpur') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-nagpur') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-nagpur') }}">biology</a> specialists.</li>
    <li><strong>ISC science with entrance exams:</strong> <a href="{{ url('/jee-home-tutor-nagpur') }}">JEE</a> or <a href="{{ url('/neet-home-tutor-nagpur') }}">NEET</a> home tutors in Nagpur.</li>
    <li><strong>History, Civics and Geography, Commercial Studies, Accounts, Economics:</strong> matched on request.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icn-zones">Reaching an ICSE tutor across Nagpur</h2>
  <p>
    Because ICSE specialists are fewer, the metro map widens or narrows your choice. In
    <a href="{{ url('/city/nagpur/zone/central-west-nagpur') }}">Central West Nagpur</a>, a tutor can reach
    {!! $icnA('ramdaspeth', 'Ramdaspeth') !!} from several stations near the Sitabuldi interchange, so even a specialist
    from another part of the city is practical; parking near the markets is the main snag. Along
    <a href="{{ url('/city/nagpur/zone/wardha-road') }}">Wardha Road</a>, the Orange Line stations serve
    {!! $icnA('somalwada', 'Somalwada') !!} and, via Jaiprakash Nagar, {!! $icnA('khamla', 'Khamla') !!}; apartment
    gates keep visitor registers, so send the tutor's name and days in advance.
  </p>
  <p>
    On <a href="{{ url('/city/nagpur/zone/hingna-road-and-ring-road') }}">Hingna Road and Ring Road</a>, newer
    buildings in {!! $icnA('jaitala', 'Jaitala') !!} may keep a visitor register, and plotted layouts look alike from
    the main road, so share the lane and plot number. In <a href="{{ url('/city/nagpur/zone/north-nagpur') }}">North
    Nagpur</a>, most of {!! $icnA('mankapur', 'Mankapur') !!} is some way from a station, so favour a tutor with a
    two-wheeler or one living in the north. <a href="{{ url('/city/nagpur/zone/east-and-south-east-nagpur') }}">East
    and South-East Nagpur</a> needs the same thinking: {!! $icnA('manewada', 'Manewada') !!} has no metro, so look
    first at tutors from the south-east, and name the board clearly when you ask.
  </p>
  <p>
    Where the right ICSE or ISC specialist lives too far for weekly visits, a weekend home session plus an online
    session midweek keeps the same tutor without the journey. For online work, the tutor must see written answers
    as they are written. Our <a href="{{ url('/blog/nagpur-tuition-guide') }}">Nagpur tuition guide</a> has more on
    timing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icn-demo">Questions for the free demo</h2>
  <ol>
    <li><strong>Which ICSE papers have you taught recently?</strong> Listen for specifics, not "all boards".</li>
    <li><strong>Can you mark this?</strong> Give a school test and see whether steps, units and wording get corrected.</li>
    <li><strong>Do you use the examiner reports?</strong> The Analysis of Pupil Performance and specimen papers are the best guides.</li>
    <li><strong>How will every chapter be revised?</strong> Ask for a rota that brings Class 9 topics back in Class 10.</li>
    <li><strong>For ISC,</strong> how do you support project work and practical files while the student does the writing?</li>
  </ol>
  <p>
    You get two or three matched tutors, see each fee before the demo, and switching tutor later is free. Tutors who
    join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. April
    to June, before the term gathers pace, is the cleanest time to start.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icn-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. The class, the number of
    papers and the tutor's journey to your road move the figure. See the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and <a href="{{ url('/blog/home-tuition-fees-nagpur') }}">home tuition fees in Nagpur</a>.
  </p>
  <p>
    Tell us ICSE or ISC, the class, subjects, locality and slots; the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. For a longer explanation of how CISCE runs both examinations, see
    our <a href="{{ url('/icse-home-tutor-gurgaon') }}">ICSE and ISC guide for Gurgaon</a>, and if your child is on
    CBSE instead, our <a href="{{ url('/cbse-home-tutor-nagpur') }}">CBSE home tutors in Nagpur</a> page. Browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>, all areas on the <a href="{{ url('/city/nagpur') }}">Nagpur tutors
    page</a>, or <a href="{{ url('/tuition-jobs/nagpur') }}">tuition jobs in Nagpur</a>.
  </p>
  </section>

  </div>
</article>
