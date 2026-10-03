{{--
  Board page for "ICSE home tutor Jammu" (CISCE: ICSE Class 10, ISC Class 12).
  Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths), Aaditya
  Kashyap (role: CBSE and ICSE science) and Ajay Vatsyayan (role: IB, IGCSE
  and ISC maths). No anecdotes, years or results are claimed. No schools,
  coaching institutes or people are named. Capitals phase 2 writer
  (subjects-b), 3 Oct 2026.

  CISCE facts only as the Gurgaon board hub (icse-home-tutor-gurgaon) states
  them, which cites cisce.org (read 1 Oct 2026): ICSE Regulations 2027 (Group
  I compulsory, Group II two or three subjects, 80/20; Group III one subject,
  50/50); ICSE Mathematics one 3-hour 80-mark paper + 20 internal from at
  least two assignments marked by teacher and external examiner; ICSE
  Physics, Chemistry, Biology separate 2-hour 80-mark papers + 20 practical
  internal; Analysis of Pupil Performance reports; ISC Regulations (English +
  three to five electives, at most six; no change after 15 September of
  Class XI; XII subject must be studied in XI; promotion 35% in four subjects
  incl. English and 75% attendance; practicals compulsory; Physics not with
  Engineering Science; grades 1-9; pass certificate four subjects incl.
  English + SUPW and Community Service); ISC Mathematics 80 theory + 20
  project.
  JKBOSE comparison from jkbose.jk.gov.in, read 3 Oct 2026: Class 11 is examined by the board (Higher
  Secondary Part I); Class 12 science faculty with Physics and Chemistry
  compulsory, Physics/Chemistry/Biology 70 theory + 30, Mathematics 80 + 20
  (pdf/Syllabi Class 12th 2026 organised.pdf).
  Jammu's board mix only as the /city/jammu hub states it (no shares). Local
  detail only from database/seo-content/areas/jammu-research.json. Flyovers
  under construction without dates. Fee wording is the approved sentence.
  Area links render only for active Jammu areas.
--}}
@php
  $jicSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jicA = function (string $slug, string $label) use ($jicSlugs) {
      return in_array($slug, $jicSlugs, true)
          ? '<a href="' . e(url('/city/jammu/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp


<article class="nx-guide" aria-labelledby="jicGuideTitle">
  <h2 id="jicGuideTitle">ICSE and ISC home tutors in Jammu: many papers, long answers and electives chosen early</h2>

  <p class="nx-guide__lede">
    Our Jammu tutors page lists ICSE and ISC among the boards local families study under, next to JKBOSE and CBSE.
    The council behind them, CISCE, is demanding in a particular way: a Class 10 candidate writes a long row of separate
    papers, almost all in English prose, and the ISC years that follow cut the number of subjects but push each one
    much further, with practical work and projects that carry real marks. A Jammu tutor for this route needs to be
    good at three things at once: covering a wide syllabus without letting it go stale, training answers that are
    complete but not padded, and helping the family make subject choices on time. This page explains how the CISCE
    route is built, the maths and science papers, the ISC rules, how ICSE compares with the union territory's own
    board, how tutors reach each part of Jammu, and what to look for at a free demo. Abhinandan Tiwary writes on ICSE
    maths, Aaditya Kashyap on the sciences and Ajay Vatsyayan on ISC maths.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#jic-groups">Class 10 structure</a> ·
    <a href="#jic-papers">Maths and science</a> ·
    <a href="#jic-english">English and the second language</a> ·
    <a href="#jic-rounds">Keeping chapters fresh</a> ·
    <a href="#jic-isc">ISC rules</a> ·
    <a href="#jic-compare">After Class 10</a> ·
    <a href="#jic-years">Year by year</a> ·
    <a href="#jic-areas">Localities</a> ·
    <a href="#jic-mode">Home or online</a> ·
    <a href="#jic-demo">Demo</a> ·
    <a href="#jic-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jic-groups">How an ICSE Class 10 timetable is put together</h2>
  <p>
    The CISCE regulations sort ICSE subjects into three groups, and the split between final paper and internal marks
    differs between them.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The three ICSE groups as the regulations set them out</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">Who takes it</th><th scope="col">Examples</th><th scope="col">Paper and internal split</th></tr>
    </thead>
    <tbody>
      <tr><td>I</td><td>Compulsory for all</td><td>English; a second language; History, Civics and Geography</td><td>80 and 20</td></tr>
      <tr><td>II</td><td>Two or three subjects</td><td>Mathematics, Science, Economics, Commercial Studies, Environmental Science, a modern foreign or classical language</td><td>80 and 20</td></tr>
      <tr><td>III</td><td>One subject</td><td>Computer Applications, Economic Applications, Commercial Applications, Art, Physical Education, Robotics and AI</td><td>50 and 50</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Group III deserves a plan of its own. Because half its marks are earned through the year, a child who leaves that
    project work to the last term often discovers that the internal half was decided months earlier. A tutor can help
    simply by putting its deadlines on the same calendar as the written papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jic-papers">Maths and the three sciences</h2>
  <p>
    ICSE mathematics is one paper of three hours and 80 marks. The other 20 come from assignments, at least two of
    them, which the school's teacher and an external examiner mark independently. Alongside algebra, geometry,
    trigonometry and statistics the syllabus includes commercial topics such as banking and shares, and examiners look
    for each line of working, not only the result.
  </p>
  <p>
    Science is not one subject in ICSE. Physics, chemistry and biology each have a separate two-hour paper worth 80
    marks, with 20 internal marks for practical work in each. That has a practical consequence for tutoring: a child
    can be comfortable in biology and lost in physics, and a single tutor stretched across all three may not fix the
    weak one. Ask at the start whether the tutor will cover the three, or whether one paper needs a specialist.
  </p>
  <p>
    CISCE's subject-by-subject Analysis of Pupil Performance, released after each exam season, records the mistakes
    examiners saw most often. Used beside the specimen papers, it lets a tutor teach to how the council actually marks.
    Our <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> covers both maths papers
    topic by topic.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jic-english">English and the second language</h2>
  <p>
    English is compulsory in both ICSE and ISC, and in practice it is the language of every other answer too. A child
    who understands physics but writes three thin lines where the question needed a reasoned paragraph will lose marks
    across the timetable, not just in the English paper. In Jammu, where many children are comfortable explaining an
    idea aloud in Hindi first, a tutor can allow that in discussion and then insist the written answer is full, clear
    English. Our <a href="{{ url('/english-home-tutor-jammu') }}">English home tutors in Jammu</a> page goes into set
    texts and long-answer writing. The second language in Group I is also a full paper with internal marks, so it
    should not be the subject that gets whatever time is left over.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jic-rounds">Keeping early chapters fresh across two years</h2>
  <p>
    The ICSE syllabus runs over Classes 9 and 10, and the commonest problem is not difficulty but fading: by the final
    term, chapters from Class 9 are half forgotten. A workable routine for a Jammu student:
  </p>
  <ul>
    <li><strong>Return visits.</strong> Once a fortnight or so, one session reopens an older chapter in each paper with a short test.</li>
    <li><strong>Timed writing early.</strong> Long answers against the clock from Class 9 onward, because writing speed improves slowly.</li>
    <li><strong>One project calendar.</strong> Internal tasks for every subject on a single list with dates, reviewed at the start of each month.</li>
  </ul>
  <p>
    A productive hour usually begins by marking the student's own attempts, takes up one new idea, and closes with a
    single answer written in exam conditions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jic-isc">The ISC rules that most often surprise families</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ISC regulations worth knowing before Class 11 begins</caption>
    <thead>
      <tr><th scope="col">Rule</th><th scope="col">What the regulations say</th><th scope="col">What to do</th></tr>
    </thead>
    <tbody>
      <tr><td>Number of subjects</td><td>English plus three to five electives, six subjects at most</td><td>Choose electives you can sustain with practicals and projects</td></tr>
      <tr><td>Changing subjects</td><td>Not allowed after 15 September of the Class 11 registration year; a Class 12 subject must have been studied in Class 11</td><td>Settle the combination in the first weeks of Class 11</td></tr>
      <tr><td>Promotion to Class 12</td><td>35% in four subjects including English, and 75% attendance</td><td>Keep English and attendance as safe as the science subjects</td></tr>
      <tr><td>Practicals</td><td>Compulsory where a subject has one; Physics cannot be paired with Engineering Science</td><td>Keep the practical file current all year</td></tr>
      <tr><td>Certificate</td><td>Grades 1 to 9; four subjects including English, plus Socially Useful Productive Work and Community Service</td><td>Do not leave the non-exam components to the end</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    ISC Mathematics carries 80 marks for a three-hour theory paper and 20 for project work in each of the two years.
    The <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page explains how a tutor handles both parts.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jic-compare">Staying with ISC, or moving to CBSE or JKBOSE?</h2>
  <p>
    Jammu students finishing ICSE generally have three roads, and each asks something different of a tutor.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Three routes after ICSE Class 10 for a Jammu student</caption>
    <thead>
      <tr><th scope="col">Route</th><th scope="col">What is new</th><th scope="col">Tutor's first task</th></tr>
    </thead>
    <tbody>
      <tr><td>ISC</td><td>The familiar answer style, but each elective far deeper; more practical and project work</td><td>Help pick electives before the September deadline and start Class 11 maths and physics at a steady pace</td></tr>
      <tr><td>CBSE</td><td>NCERT textbooks, yearly sample papers, shorter answers tied closely to the book</td><td>A few weeks on NCERT phrasing and CBSE's case-based questions</td></tr>
      <tr><td>JKBOSE</td><td>A board examination at the end of Class 11 as well as Class 12; science faculty with physics and chemistry compulsory; physics, chemistry and biology marked 70 theory and 30 practical, maths 80 and 20</td><td>Treat Class 11 as an exam year from the first month and practise from the board's own model papers on its website</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Whichever road you choose, the summer after the Class 10 papers is a good window for a short bridge: the new
    board's opening chapters and its question style, without the pressure of school. Because ISC subjects lock in
    September, decide before term is far along. Our Jammu <a href="{{ url('/cbse-home-tutor-jammu') }}">CBSE</a> and
    <a href="{{ url('/jkbose-tutor-jammu') }}">JKBOSE</a> pages describe those boards, and the
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11 stream choice</a> article helps with subject
    combinations.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jic-years">From Class 6 to ISC: where tuition helps most</h2>
  <ul>
    <li><strong>Classes 6 to 8.</strong> School examinations only. The habits that pay later are full-sentence answers, written steps in maths and correct scientific words.</li>
    <li><strong>Class 9.</strong> The two-year ICSE syllabus starts. Begin return visits to old chapters now, and draw and label diagrams every week.</li>
    <li><strong>Class 10.</strong> All the papers plus internal marks. Specimen papers and the examiners' analysis, paper by paper, under time.</li>
    <li><strong>Class 11.</strong> Electives settled before September; the promotion rules met; the step up from ICSE handled in the first term.</li>
    <li><strong>Class 12.</strong> ISC theory in depth, with practical and project deadlines kept.</li>
  </ul>
  <p>
    Subject pages for Jammu: <a href="{{ url('/maths-home-tutor-jammu') }}">maths</a>,
    <a href="{{ url('/science-home-tutor-jammu') }}">science</a> for the three ICSE papers, and
    <a href="{{ url('/physics-home-tutor-jammu') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-jammu') }}">chemistry</a>
    and <a href="{{ url('/biology-home-tutor-jammu') }}">biology</a> for ISC. Students preparing for entrance exams from
    Class 11 can see <a href="{{ url('/jee-home-tutor-jammu') }}">JEE</a> and <a href="{{ url('/neet-home-tutor-jammu') }}">NEET</a>
    home tutors in Jammu.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jic-areas">How ICSE tutors reach each part of Jammu</h2>
  <ul>
    <li><strong>{!! $jicA('greater-kailash', 'Greater Kailash') !!}:</strong> apartment buildings may keep a visitor register at the gate, so pass on the tutor's name; Greater Kailash Chowk gets busy, so fix a time away from the evening peak.</li>
    <li><strong>{!! $jicA('kunjwani', 'Kunjwani') !!}:</strong> homes off the highway are easiest by two-wheeler. The Kunjwani to Satwari flyover is still being completed, so allow for highway traffic at peak hours for now.</li>
    <li><strong>{!! $jicA('sidhra', 'Sidhra') !!}:</strong> on the north-eastern edge, reached by the bypass from the south or over the bridge from the old city. Good specialists may live across the city, so online sessions are worth considering for one paper.</li>
    <li><strong>{!! $jicA('rehari-colony', 'Rehari Colony') !!}:</strong> tutors from the old city, Bakshi Nagar and Janipur can arrive without crossing the river; give the lane name with Rehari Chowk or Rehari Chungi.</li>
    <li><strong>{!! $jicA('bakshi-nagar', 'Bakshi Nagar') !!}:</strong> Akhnoor Road gives a straight route from the Talab Tillo side; share a lane landmark and a phone number for the first visit.</li>
    <li><strong>{!! $jicA('paloura', 'Paloura') !!}:</strong> newer plotted lanes can be hard to find, so send a map pin before the demo and avoid the evening rush on Sarwal Road.</li>
  </ul>
  <p>
    Zone pages: <a href="{{ url('/city/jammu/zone/rail-head-new-city') }}">Rail Head and New City</a>,
    <a href="{{ url('/city/jammu/zone/trikuta-channi') }}">Trikuta and Channi</a>,
    <a href="{{ url('/city/jammu/zone/kunjwani-sainik-colony') }}">Kunjwani and Sainik Colony</a>,
    <a href="{{ url('/city/jammu/zone/old-city-sidhra') }}">Old City and Sidhra</a> and
    <a href="{{ url('/city/jammu/zone/janipur-akhnoor-road') }}">Janipur and Akhnoor Road</a>. Every locality is listed on
    the <a href="{{ url('/city/jammu') }}">Jammu home tutors</a> page, and the
    <a href="{{ url('/blog/jammu-home-tuition-guide') }}">Jammu home tuition guide</a> covers timing zone by zone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jic-mode">Home or online for ICSE in Jammu?</h2>
  <p>
    Up to Class 10, maths and the three science papers are usually worth a tutor's trip, because CISCE marking turns on
    individual written lines and those are easiest to correct side by side. The screen earns its place elsewhere: an
    ISC elective or literature specialist who lives far from you, quick revision checks in the fortnight before the
    papers, and days when heat or an early winter dusk makes travel a poor trade. For maths or science on screen, the
    tutor must be able to see the page as it is written, through a stylus tablet, a shared board or a camera above the
    notebook. See <a href="{{ url('/online-tutor-jammu') }}">online tutors for Jammu</a> for the setup.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jic-demo">Five checks at an ICSE or ISC demo</h2>
  <ol>
    <li>Ask which specimen paper, and which year's examiners' analysis, the tutor teaches from.</li>
    <li>Set one maths question and see whether the tutor insists on every step, the units and the final form.</li>
    <li>In the same hour, ask for a short physics numerical and a labelled biology diagram, to see range across the science papers.</li>
    <li>Notice whether the tutor improves the English of a written answer as well as its content.</li>
    <li>For Class 10 or 11, ask how they would advise on ISC electives before the September deadline.</li>
  </ol>
  <p>
    If it is not the right fit, we arrange the next demo; switching is free. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more ideas.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jic-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee, and you see it before the demo. The <a href="{{ url('/pricing-guide') }}">pricing guide</a>
    and <a href="{{ url('/blog/home-tuition-fees-jammu') }}">home tuition fees in Jammu</a> list the questions to ask about
    hours and sessions.
  </p>
  <p>
    Send the class, the ICSE or ISC subjects, school timings and your colony with a landmark. We reply with two or three
    matched tutors, and the first class is a <a href="{{ url('/demo-class') }}">free demo</a>. Tutors who join go through
    an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>, and <a href="{{ url('/tutors') }}">tutor profiles</a> are
    open to browse. Our <a href="{{ url('/icse-home-tutor-gurgaon') }}">ICSE board hub</a> explains the council in more
    depth, and teachers can find requests on <a href="{{ url('/tuition-jobs/jammu') }}">Jammu tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
