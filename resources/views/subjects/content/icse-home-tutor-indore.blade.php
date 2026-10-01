{{--
  Board hub for "ICSE home tutor Indore" (CISCE: ICSE Class 10, ISC Class 12).
  Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths), Aaditya
  Kashyap (role: CBSE and ICSE science) and Ajay Vatsyayan (role: IB, IGCSE
  and ISC maths). No anecdotes, years or results are claimed for any of them.
  No schools are named.

  Board facts restate only what icse-home-tutor-gurgaon states, which cites
  cisce.org (read 1 Oct 2026): ICSE Regulations (Group I compulsory: English,
  a second language, History Civics & Geography; Group II two or three
  subjects; both 80/20; Group III one applied subject, 50/50), ICSE
  Mathematics (one 3-hour 80-mark paper + 20 internal from at least two
  assignments, marked independently by the teacher and an external examiner),
  ICSE Physics, Chemistry, Biology (each 2 h, 80 + 20 practical IA), the
  Analysis of Pupil Performance, ISC Regulations (English + three to five
  electives, up to six; practical exams compulsory; no Class XII subject not
  studied in XI; no change after 15 September of Class XI; promotion 35% in
  four subjects incl. English and 75% attendance; grades 1-9; SUPW and
  Community Service), ISC Mathematics 860 (80 theory + 20 project). No exam
  dates.

  Local detail only from the city hub (indore.blade.php: CISCE schools
  teaching ICSE and ISC among CBSE, MP Board and a smaller IB/IGCSE group;
  ICSE/ISC card: breadth is the usual difficulty), database/seo-content/
  zones/indore.json and areas/indore-research.json / -zone-guides.json. No
  share of CISCE schools is claimed. Fee wording is the approved sentence.
  FAQs render from faqs/icse-home-tutor-indore.php. Area links render only
  when that Indore area page exists and is active.
--}}
@php
  $inAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $inA = function (string $slug, string $label) use ($inAreaSlugs) {
      return in_array($slug, $inAreaSlugs, true)
          ? '<a href="' . e(url('/city/indore/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ici-guide" aria-labelledby="iciGuideTitle">
  <h2 id="iciGuideTitle">ICSE and ISC home tutors in Indore: keeping every paper in rotation</h2>

  <p class="nx-guide__lede">
    Ask an Indore ICSE parent what is hard about the board and the answer is rarely a single chapter. It is breadth:
    many separate papers, long written answers, set texts in English and internal work running all year. ISC narrows
    the subject list in Classes 11 and 12 but deepens every subject and adds strict rules on choices. This page sets
    out how CISCE examines, a revision rotation that suits ICSE, the ISC rules that families most need to know, which
    subjects Indore students usually want help with, and how tutors reach the city's four zones. It is written by
    Abhinandan Tiwary (Class 10 CBSE and ICSE maths) and Aaditya Kashyap (CBSE and ICSE science), with Ajay Vatsyayan
    (IB, IGCSE and ISC maths) on ISC. For the board in more depth, read our
    <a href="{{ url('/icse-home-tutor-gurgaon') }}">ICSE and ISC guide</a>.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ici-where">CISCE in Indore</a> ·
    <a href="#ici-mp">ICSE and MP Board</a> ·
    <a href="#ici-papers">The papers</a> ·
    <a href="#ici-rotation">A revision rotation</a> ·
    <a href="#ici-isc">ISC checklist</a> ·
    <a href="#ici-years">Year by year</a> ·
    <a href="#ici-hour">The tutor's hour</a> ·
    <a href="#ici-next">After Class 10</a> ·
    <a href="#ici-subj">Subjects</a> ·
    <a href="#ici-zones">Zones</a> ·
    <a href="#ici-mode">Home or online</a> ·
    <a href="#ici-demo">Demo</a> ·
    <a href="#ici-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ici-where">CISCE's place among Indore's boards</h2>
  <p>
    The <a href="{{ url('/city/indore') }}">Indore tutors page</a> lists CBSE schools across the city, the state's MP
    Board, CISCE schools teaching ICSE and ISC, and a smaller group following the IB or Cambridge. We do not estimate
    how many students follow each. Because a CISCE match is a narrower search than a general one, an ICSE or ISC family should state the
    board in the first line of the request; our shortlist then looks for tutors who have taught CISCE recently.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ici-mp">ICSE and the MP Board, compared in general terms</h2>
  <p>
    The Board of Secondary Education, Madhya Pradesh runs the state's Class 10 and Class 12 exams with its own books
    and papers, in Hindi or English medium, and announces its own rules. ICSE asks a Class 10 student to sit more
    separate papers, includes prescribed English literature, and expects every answer to be complete and well
    organised. A student who moves into a CISCE school usually knows enough of the content and needs most help with
    the volume and style of writing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ici-papers">What the ICSE papers ask for</h2>
  <p>
    CISCE groups ICSE subjects in three. Group I, compulsory for all, is English, a second language, and History,
    Civics and Geography. Group II adds two or three subjects such as Mathematics, Science, Economics or Commercial
    Studies. Both groups are marked 80% on the final paper and 20% internally. Group III is a single applied subject,
    such as Computer Applications, marked half and half.
  </p>
  <dl>
    <dt><strong>Mathematics</strong></dt>
    <dd>A three-hour, 80-mark paper plus 20 internal marks from two or more assignments, each marked by the subject teacher and separately by an external examiner. Method is rewarded throughout, so the working must be complete.</dd>
    <dt><strong>Physics, Chemistry and Biology</strong></dt>
    <dd>Three separate two-hour papers of 80 marks, each with 20 internal marks for practical work. Physics rewards numericals with units and clear diagrams, Chemistry exact equations and observations, Biology labelled diagrams and well-ordered explanations.</dd>
    <dt><strong>Examiner feedback</strong></dt>
    <dd>CISCE's Analysis of Pupil Performance, published for each subject after the exams, lists common errors and what examiners wanted. A tutor should use it alongside specimen papers.</dd>
  </dl>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ici-rotation">A revision rotation that suits ICSE's breadth</h2>
  <p>
    Because the difficulty is range, the most useful thing an ICSE tutor can build in Class 10 is a rotation, so no
    paper goes untouched for weeks. One workable pattern over a six-week cycle:
  </p>
  <ol>
    <li><strong>Weeks 1 and 2:</strong> maths topics from the current school unit, plus one older maths chapter each week, written out in full.</li>
    <li><strong>Weeks 3 and 4:</strong> the three sciences in turn, one specimen question per paper each session, with diagrams and units checked.</li>
    <li><strong>Week 5:</strong> English and History, Civics and Geography: one timed long answer each, corrected for structure and content.</li>
    <li><strong>Week 6:</strong> a mixed test across subjects, then a review of the error log to set the next cycle's priorities.</li>
  </ol>
  <p>
    The cycle bends to the school calendar, but the principle holds: every paper comes round again before it fades.
    Group III project work and internal assignments sit alongside, with deadlines in the tutor's notes. In the months
    before the exam, shorten the cycle to three weeks and replace teaching with timed specimen papers, one per
    session, each marked against the published scheme.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ici-isc">An ISC checklist for Class 11 families</h2>
  <ul>
    <li>English is compulsory; add three to five electives, up to six subjects in all.</li>
    <li>Subject changes are not allowed after 15 September of the Class 11 year.</li>
    <li>A Class 12 subject must have been studied in Class 11.</li>
    <li>Promotion needs 35% in four subjects including English, and 75% attendance.</li>
    <li>Practical papers are compulsory in subjects that have them.</li>
    <li>Grades run 1 to 9; the certificate also needs SUPW and Community Service.</li>
    <li>ISC Mathematics: an 80-mark, three-hour theory paper and 20 marks of project work, in each year. See <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutors</a>.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ici-years">Classes 6 to 12 on CISCE</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What a tutor should prioritise each year</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Examined by</th><th scope="col">Priority</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>School</td><td>Full written answers; stepwise maths; science terms</td></tr>
      <tr><td>9</td><td>School, as the ICSE syllabus begins</td><td>Start the rotation; specimen questions from the first term</td></tr>
      <tr><td>10</td><td>CISCE papers plus internal marks</td><td>Timed papers one subject at a time; examiner reports</td></tr>
      <tr><td>11</td><td>School; promotion rules apply</td><td>Elective choice before mid-September; the ISC step up</td></tr>
      <tr><td>12</td><td>CISCE theory, practicals and projects</td><td>Depth per elective; practical record; full papers</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ici-hour">How a CISCE tutor should use the hour</h2>
  <p>
    The written page is where ICSE marks are won, so the tutor's hour should produce writing, not only explanation.
    A sound pattern: ten minutes on the student's attempt at last session's questions, marked aloud line by line; half
    an hour teaching or repairing the current topic from the textbook, then testing it at once with specimen-paper
    questions; and the last stretch on one answer written in full against the clock, followed by a short note of what
    to fix. In science weeks the tutor alternates papers rather than staying with the student's favourite, and in ISC
    years some sessions go to the practical file: tables of readings, the right graph, a conclusion that answers the
    aim. Parents can ask for the tutor's log every month; it should show the rotation working across subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ici-next">After Class 10: ISC, CBSE or the MP Board</h2>
  <p>
    Indore students leaving ICSE commonly weigh three routes. ISC keeps CISCE's answer style but goes much deeper in
    each subject, with the subject rules above applying from the first term. CBSE means NCERT books, CBSE sample papers
    and different theory and practical splits, while most maths and science content carries over. The MP Board means
    its own books and papers, possibly in a different medium. Whichever route, settle the Class 11 subjects before
    term begins. Our <a href="{{ url('/cbse-home-tutor-indore') }}">CBSE home tutors in Indore</a> page covers the CBSE
    side.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ici-subj">ICSE and ISC subjects Indore families ask about</h2>
  <ul>
    <li><a href="{{ url('/maths-home-tutor-indore') }}">Maths home tutors in Indore</a>, for ICSE and ISC maths</li>
    <li><a href="{{ url('/science-home-tutor-indore') }}">Science home tutors</a> for the three ICSE science papers</li>
    <li>ISC <a href="{{ url('/physics-home-tutor-indore') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-indore') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-indore') }}">biology</a></li>
    <li><a href="{{ url('/english-home-tutor-indore') }}">English home tutors in Indore</a> for language and literature</li>
    <li>With ISC science: <a href="{{ url('/jee-home-tutor-indore') }}">JEE</a> or <a href="{{ url('/neet-home-tutor-indore') }}">NEET</a> tutors</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> covers both maths papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ici-zones">How CISCE tutors reach Indore's zones</h2>
  <ul>
    <li><strong><a href="{{ url('/city/indore/zone/vijay-nagar-ab-road') }}">Vijay Nagar and AB Road</a>.</strong> {!! $inA('scheme-74', 'Scheme 74') !!} is near Yellow Line stations such as Meghdoot Garden, so a tutor on the metro can finish by auto. Give scheme, sector and plot.</li>
    <li><strong><a href="{{ url('/city/indore/zone/palasia-central-indore') }}">Palasia and Central Indore</a>.</strong> In {!! $inA('old-palasia', 'Old Palasia') !!} and green {!! $inA('manorama-ganj', 'Manorama Ganj') !!}, tutors come by auto or two-wheeler; evening parking near the squares is tight.</li>
    <li><strong><a href="{{ url('/city/indore/zone/nipania-bicholi-ring-road') }}">Nipania, Bicholi and Ring Road</a>.</strong> For {!! $inA('pipliyahana', 'Pipliyahana') !!}, a tutor who already works along the Ring Road is easiest to keep.</li>
    <li><strong><a href="{{ url('/city/indore/zone/bhawarkua-rajendra-nagar-rau') }}">Bhawarkua, Rajendra Nagar and Rau</a>.</strong> {!! $inA('sudama-nagar', 'Sudama Nagar') !!} is calm and largely family houses; {!! $inA('navlakha', 'Navlakha') !!} has its bus stand, so autos are close at hand.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ici-mode">Home or online for ICSE and ISC</h2>
  <p>
    ICSE work is won on the page, so home lessons are the first choice wherever a CISCE tutor lives within reach. For
    ISC electives the right specialist may live across the city; with the metro limited to the north-east and the
    centre and south on the road, an online session for the harder topics avoids long crossings of AB Road or the
    Ring Road. Many families use one home lesson and one online session with the same tutor. See the
    <a href="{{ url('/blog/central-and-south-indore-tuition-guide') }}">central and south Indore guide</a> and the
    <a href="{{ url('/blog/vijay-nagar-and-east-indore-tuition-guide') }}">Vijay Nagar and east Indore guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ici-demo">Testing a CISCE tutor in the demo</h2>
  <ol>
    <li>Watch whether they accept a maths answer without full working. They should not.</li>
    <li>Ask what the latest Analysis of Pupil Performance says about your child's subject.</li>
    <li>Ask for a short chemistry equation and a biology diagram in one sitting.</li>
    <li>See whether they correct the wording of answers as well as the facts.</li>
    <li>For ISC, ask how they guide project work and the practical file without writing them.</li>
  </ol>
  <p>
    The shortlist has two or three tutors with fees shown before the demo, and switching later is free. Tutors who join
    go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ici-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For ICSE and ISC the class,
    number of papers, time to the exam and the tutor's travel set the fee. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-indore') }}">Indore
    tuition fees</a>.
  </p>
  <p>
    Tell us ICSE or ISC, the class, subjects, your scheme or colony and free slots; the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a>; CISCE
    teachers can see <a href="{{ url('/tuition-jobs/indore') }}">tuition jobs in Indore</a>.
  </p>
  </section>

  </div>
</article>
