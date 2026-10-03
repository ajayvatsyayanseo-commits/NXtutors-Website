{{--
  Board page for "ICSE home tutor Pune" (CISCE: ICSE Class 10, ISC Class 12)
  across Pune and Pimpri-Chinchwad. Authors: Abhinandan Tiwary (role: Class 10
  CBSE and ICSE maths), Aaditya Kashyap (role: CBSE and ICSE science) and Ajay
  Vatsyayan (role: IB, IGCSE and ISC maths). No anecdotes, years or results are
  claimed for any of them. No schools or societies are named.

  Board facts are reworded from the Gurgaon board hub (icse-home-tutor-gurgaon),
  which cites cisce.org (read 1 Oct 2026): ICSE Regulations (Group I
  compulsory, Group II two or three, 80/20; Group III one subject, 50/50), ICSE
  Mathematics (3-hour 80-mark paper + 20 internal, at least two assignments,
  teacher and external examiner), ICSE Physics, Chemistry, Biology (each a
  2-hour 80-mark paper + 20 practical internal), Analysis of Pupil Performance,
  ISC Regulations (English + three to five electives, up to six subjects;
  no change after 15 September of Class XI; Class XII subjects must have been
  studied in XI; promotion 35% in four subjects incl. English, 75% attendance;
  grades 1-9; practicals compulsory; Physics not with Engineering Science) and
  ISC Mathematics (80 theory + 20 project). No exam dates.
  Local detail only from the Pune city hub view (ICSE/ISC: wide syllabus,
  precise long answers, prescribed literature, pacing; MSBSHSE SSC/HSC and
  junior college; CBSE April and State Board June starts), pune-research.json,
  pune-zone-guides.json and zones/pune.json. Area links render only for active
  Pune areas. Fee wording is the approved sentence.
  FAQs render from faqs/icse-home-tutor-pune.php.
--}}
@php
  $icpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $icpA = function (string $slug, string $label) use ($icpSlugs) {
      return in_array($slug, $icpSlugs, true)
          ? '<a href="' . e(url('/city/pune/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="icpGuideTitle">
  <h2 id="icpGuideTitle">ICSE and ISC home tutors in Pune: a pacing problem as much as a subject problem</h2>

  <p class="nx-guide__lede">
    For most ICSE families in Pune the worry is rarely a single chapter. It is the sheer spread: many papers, long answers in almost all of them, prescribed literature in English, and project work on
    top. CISCE, which runs the ICSE at Class 10 and the ISC at Class 12, rewards students who write precisely and
    revise everything, so a good tutor keeps the whole syllabus turning, not just the subject they were hired for.
    This page explains how the two examinations are put together, how they compare with the State Board route, where
    families usually want help, and how tutors get to each part of Pune and Pimpri-Chinchwad. Abhinandan Tiwary (Class
    10 CBSE and ICSE maths) and Aaditya Kashyap (CBSE and ICSE science) wrote it; Ajay Vatsyayan (IB, IGCSE and ISC
    maths) wrote the ISC parts.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#icp-shape">The shape of ICSE</a> ·
    <a href="#icp-maths">Maths and sciences</a> ·
    <a href="#icp-pace">A pacing plan</a> ·
    <a href="#icp-session">A good lesson</a> ·
    <a href="#icp-isc">ISC</a> ·
    <a href="#icp-state">ICSE and the State Board</a> ·
    <a href="#icp-subjects">Subjects</a> ·
    <a href="#icp-zones">Getting a tutor to you</a> ·
    <a href="#icp-demo">The demo</a> ·
    <a href="#icp-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="icp-shape">The shape of an ICSE Class 10 year</h2>
  <p>
    Under CISCE's regulations, a student's subjects come from three groups, and each group has its own balance between
    the final paper and internal assessment:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ICSE groups at a glance</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">How many</th><th scope="col">Typical subjects</th><th scope="col">Weighting</th></tr>
    </thead>
    <tbody>
      <tr><td>Group I</td><td>All compulsory</td><td>English; a second language; History, Civics and Geography</td><td>80% paper, 20% internal</td></tr>
      <tr><td>Group II</td><td>Two or three</td><td>Mathematics, Science, Economics, Commercial Studies, a modern foreign or classical language, Environmental Science</td><td>80% paper, 20% internal</td></tr>
      <tr><td>Group III</td><td>One</td><td>An applied subject, for example Computer Applications or Art</td><td>Half paper, half internal</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For a tutor the lesson is simple: the Group III subject rewards consistent project work across the year, and
    everything else is mostly decided on the day of the paper, by how well the student writes under time.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icp-maths">Maths and the sciences, paper by paper</h2>
  <p>
    <strong>Mathematics</strong> is one paper of three hours carrying 80 marks. The remaining 20 marks are internal,
    from at least two assignments that both the subject teacher and an external examiner mark separately. Alongside
    algebra, geometry, trigonometry and statistics, the syllabus has commercial mathematics such as banking and
    shares. Examiners credit method, so skipped steps cost marks even when the answer is right.
  </p>
  <p>
    <strong>Science</strong> is examined as Physics, Chemistry and Biology, three papers of two hours and 80 marks
    each, and each has 20 internal marks for practical work. A child can be strong in physics numericals and weak in
    biology diagrams, or the other way round, so ask whether one tutor can genuinely teach all three.
  </p>
  <p>
    After every exam session, CISCE publishes an Analysis of Pupil Performance for each subject, describing the errors
    examiners saw most often. Used alongside specimen papers, these reports are the closest thing to a marking guide a
    tutor can bring to the table.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icp-pace">A pacing plan for Classes 9 and 10</h2>
  <p>
    Since CISCE spreads each subject's syllabus across Classes 9 and 10, a sensible tutor plans the two years as one:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Two years of ICSE, term by term</caption>
    <thead>
      <tr><th scope="col">When</th><th scope="col">Main job</th><th scope="col">Check that it is happening</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 9, first half</td><td>Full working in maths; neat diagrams and definitions in science</td><td>Tutor marks the student's own attempts every session</td></tr>
      <tr><td>Class 9, second half</td><td>First timed written answers in English and history</td><td>A written answer checked each fortnight</td></tr>
      <tr><td>Class 10, until winter</td><td>Finish content; revisit Class 9 chapters on a rota</td><td>A list of chapters with the date each was last revised</td></tr>
      <tr><td>Class 10, final months</td><td>Specimen papers, one full paper a week, examiner-report errors</td><td>Marked papers kept in a folder you can see</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icp-session">What an ICSE lesson should look like</h2>
  <p>
    Because presentation carries so many marks, writing should take up real time in every lesson. A good hour often
    opens with the student's own attempt at two or three questions from the previous topic, done before the tutor
    arrives or in the first minutes, and marked line by line: a missing step, a unit left off, an unlabelled diagram,
    a sentence that says less than the student meant. Teaching of the new topic follows, from the textbook first and
    then from specimen-paper questions. The lesson closes with a single answer written under a time limit, so that
    speed improves alongside accuracy. In ISC science, add regular time for the practical: recording observations,
    choosing and drawing the right graph and writing a conclusion an examiner can credit. A tutor who explains well
    but never reads your child's writing is missing the half of ICSE that decides the grade.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icp-isc">ISC: choices that are hard to undo</h2>
  <p>
    In Classes 11 and 12, English stays compulsory and students add between three and five electives, with a ceiling
    of six subjects. The ISC regulations close the door on late changes: no change of subject after 15 September of the
    Class 11 registration year, and no Class 12 subject that was not studied in Class 11. Some pairings are not
    permitted, Physics with Engineering Science for example. Promotion to Class 12 requires 35% in four subjects,
    English among them, and 75% attendance. Practical exams are compulsory where a subject has them, and results are
    graded 1 to 9.
  </p>
  <p>
    ISC Mathematics pairs an 80-mark theory paper of three hours with 20 marks of project work, in Class 11 and again
    in Class 12. Our <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page covers it in detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icp-state">ICSE beside the State Board, and the Class 11 crossroads</h2>
  <p>
    Many Pune students follow the Maharashtra State Board, sitting the SSC after Class 10 and the HSC after Class 12,
    usually in a junior college for the last two years. In general, the State Board works from its own prescribed
    textbooks, while ICSE spreads marks across more separate papers and leans harder on extended writing. That
    matters at the Class 11 crossroads. A student can continue to ISC and keep the familiar answer style; join a
    junior college for the HSC, where the state textbooks and the board's past papers take over; or move to CBSE and
    NCERT. Maths and science content carries across in every case, but the first month with a tutor should go on the
    new books and the new paper style. School calendars differ too: CBSE starts in April and many State Board schools
    in June, so check your new school's dates before planning tuition.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icp-subjects">Where ICSE and ISC families in Pune usually want help</h2>
  <ul>
    <li><strong>Maths, ICSE and ISC:</strong> <a href="{{ url('/maths-home-tutor-pune') }}">maths home tutors in Pune</a>, with our <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> for the papers.</li>
    <li><strong>The three sciences:</strong> <a href="{{ url('/science-home-tutor-pune') }}">science home tutors in Pune</a> up to Class 10, then <a href="{{ url('/physics-home-tutor-pune') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-pune') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-pune') }}">biology</a> specialists for ISC.</li>
    <li><strong>English and the set texts:</strong> <a href="{{ url('/english-home-tutor-pune') }}">English home tutors in Pune</a>.</li>
    <li><strong>History, Civics and Geography, Commercial Studies, Accounts, Economics:</strong> matched on request.</li>
    <li><strong>ISC science with an entrance exam:</strong> <a href="{{ url('/jee-home-tutor-pune') }}">JEE</a> or <a href="{{ url('/neet-home-tutor-pune') }}">NEET</a> home tutors in Pune.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icp-zones">Getting an ICSE tutor to your door</h2>
  <p>
    ICSE specialists are fewer than CBSE or State Board tutors, so the journey limits the choice sooner. West of the
    river, <a href="{{ url('/city/pune/zone/kothrud-karve-nagar-deccan') }}">Kothrud, Karve Nagar and Deccan</a> is
    easy: Paud Phata station serves {!! $icpA('erandwane', 'Erandwane') !!}, and District Court links the two metro
    lines. Next door, <a href="{{ url('/city/pune/zone/aundh-baner-pashan') }}">Aundh, Baner and Pashan</a> has no
    working metro yet, so a tutor for {!! $icpA('aundh', 'Aundh') !!} usually rides a two-wheeler from a neighbouring
    suburb; gated societies there want the tutor's details a day ahead.
  </p>
  <p>
    In <a href="{{ url('/city/pune/zone/wakad-hinjewadi-pimpri-chinchwad') }}">Wakad, Hinjewadi and
    Pimpri-Chinchwad</a>, townships such as those in {!! $icpA('pimple-saudagar', 'Pimple Saudagar') !!} need gate
    entry before the first lesson, and IT-corridor traffic favours early-evening or weekend slots. East of the river,
    <a href="{{ url('/city/pune/zone/viman-nagar-kalyani-nagar-kharadi') }}">Viman Nagar, Kalyani Nagar and
    Kharadi</a> sits on the Aqua Line, with a station in {!! $icpA('kalyani-nagar', 'Kalyani Nagar') !!};
    <a href="{{ url('/city/pune/zone/koregaon-park-camp-wanowrie') }}">Koregaon Park, Camp and Wanowrie</a> has the
    Pune Railway Station stop for {!! $icpA('camp', 'Camp') !!}, where army areas may have entry rules.
  </p>
  <p>
    To the south, <a href="{{ url('/city/pune/zone/hadapsar-kondhwa-nibm') }}">Hadapsar, Kondhwa and NIBM</a> has no
    metro, so a tutor living in the zone is the safest choice, and in
    <a href="{{ url('/city/pune/zone/katraj-bibwewadi-sinhagad-road') }}">Katraj, Bibwewadi and Sinhagad Road</a>,
    give the neighbourhood name as well as {!! $icpA('sinhagad-road', 'Sinhagad Road') !!}, since the road is long.
    Where the right ICSE specialist lives too far away, a weekend home lesson plus a midweek online session with the
    same tutor is a common answer; the tutor must still see written answers live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icp-demo">Using the free demo well</h2>
  <ol>
    <li><strong>Bring a marked school test.</strong> Watch whether the tutor corrects steps, units, labels and sentences, not just answers.</li>
    <li><strong>Ask about specimen papers and examiner reports.</strong> Which ones, and how do they use them?</li>
    <li><strong>Cover two sciences.</strong> Ask for a short physics problem and a biology diagram in the same demo.</li>
    <li><strong>Ask for a revision rota.</strong> How will Class 9 chapters be revisited during Class 10?</li>
    <li><strong>For ISC,</strong> ask how they support project work and practical records while the student does the writing.</li>
  </ol>
  <p>
    You get two or three matched tutors and see each fee in advance; switching later costs nothing. Tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icp-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For ICSE and ISC in Pune,
    the class, the number of papers and the tutor's ride to your zone shape the fee. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-pune') }}">home
    tuition fees in Pune</a>.
  </p>
  <p>
    Tell us ICSE or ISC, the class, subjects, locality and slots; the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. Our <a href="{{ url('/icse-home-tutor-gurgaon') }}">ICSE and ISC
    guide for Gurgaon</a> explains how the board works in more depth. See <a href="{{ url('/tutors') }}">tutor
    profiles</a>, every locality on the <a href="{{ url('/city/pune') }}">Pune tutors page</a>, or
    <a href="{{ url('/tuition-jobs/pune') }}">tuition jobs in Pune</a> if you teach ICSE.
  </p>
  </section>

  </div>
</article>
