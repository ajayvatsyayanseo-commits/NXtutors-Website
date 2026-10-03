{{--
  Board page for "ICSE home tutor Srinagar" (CISCE: ICSE Class 10, ISC Class 12).
  Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths), Aaditya
  Kashyap (role: CBSE and ICSE science) and Ajay Vatsyayan (role: IB, IGCSE
  and ISC maths). No anecdotes, years or results are claimed. No schools,
  coaching institutes or people are named.

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
  JKBOSE facts only from jkbose.jk.gov.in (read 3 Oct 2026): own textbooks,
  Class 11 board examination, Botany and Zoology separate +2 papers.
  Srinagar's board mix is not quantified. Local detail only from
  database/seo-content/areas/srinagar-research.json. Fee wording is the
  approved sentence. Area links render only for active areas.
--}}
@php
  $sriSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $sriA = function (string $slug, string $label) use ($sriSlugs) {
      return in_array($slug, $sriSlugs, true)
          ? '<a href="' . e(url('/city/srinagar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="sriGuideTitle">
  <h2 id="sriGuideTitle">ICSE and ISC home tutors in Srinagar: many papers, long answers, steady pace</h2>

  <p class="nx-guide__lede">
    The Council for the Indian School Certificate Examinations runs two examinations: ICSE at the end of Class 10 and
    ISC at the end of Class 12. Its papers are long and written, its English includes set literature, and Class 10
    brings more separate papers than most families expect. In Srinagar, where the long winter break interrupts the
    school year and daylight is short for weeks, the risk is a syllabus that slips quietly behind. This page explains
    how the CISCE subjects are grouped, how the maths and science papers work, the ISC rules that catch students out,
    how to keep a wide syllabus moving through winter, and how tutors reach six localities. Abhinandan Tiwary writes on
    ICSE maths, Aaditya Kashyap on the sciences and Ajay Vatsyayan on ISC maths.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#sri-groups">Subject groups</a> ·
    <a href="#sri-papers">Maths and science</a> ·
    <a href="#sri-winter">Coverage through winter</a> ·
    <a href="#sri-english">English</a> ·
    <a href="#sri-isc">ISC rules</a> ·
    <a href="#sri-years">Class 6 to 12</a> ·
    <a href="#sri-other">Other boards</a> ·
    <a href="#sri-where">Localities</a> ·
    <a href="#sri-mode">Home or online</a> ·
    <a href="#sri-demo">Demo</a> ·
    <a href="#sri-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="sri-groups">Three groups of ICSE subjects</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How the ICSE Class 10 subjects are grouped under the CISCE regulations</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">What it contains</th><th scope="col">Examination : internal</th></tr>
    </thead>
    <tbody>
      <tr><td>I (compulsory)</td><td>English, a second language, and History, Civics and Geography</td><td>80 : 20</td></tr>
      <tr><td>II (two or three)</td><td>Choices such as Mathematics, Science, Economics, Commercial Studies, a modern foreign or classical language, Environmental Science</td><td>80 : 20</td></tr>
      <tr><td>III (one)</td><td>An applied subject, for example Computer Applications, Economic Applications, Commercial Applications, Art, Physical Education, or Robotics and AI</td><td>50 : 50</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Half the marks in the Group III subject come from internal work, so it rewards a student who keeps projects moving
    all year. In a city with a long winter break, that means finishing project work before the break, not planning to
    do it during the cold weeks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sri-papers">ICSE maths and the three science papers</h2>
  <ul>
    <li><strong>Mathematics:</strong> one three-hour paper of 80 marks, plus 20 internal marks from at least two assignments, each marked separately by the school teacher and an external examiner. Commercial topics such as banking and shares sit alongside algebra, geometry, trigonometry and statistics, and full working is expected throughout.</li>
    <li><strong>Physics, Chemistry and Biology:</strong> three separate two-hour papers of 80 marks, each with 20 marks for practical work assessed internally. A strong result in one does not carry the others.</li>
  </ul>
  <p>
    After each examination season CISCE publishes a subject-wise Analysis of Pupil Performance showing where
    candidates dropped marks. A tutor who uses it alongside the specimen papers is preparing your child for the way the
    council actually marks. Our <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a>,
    written for another city, explains the marking habits in more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sri-winter">Keeping a wide syllabus moving through a Srinagar winter</h2>
  <p>
    ICSE's difficulty is volume: many papers, each demanding written answers. The danger is not one hard chapter but
    a dozen chapters that were half-learned and never revisited. A tutor's real job is a revision cycle, and Srinagar's
    calendar shapes how that cycle runs.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A revision cycle for an ICSE Class 10 student in Srinagar</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">What the tutor does</th></tr>
    </thead>
    <tbody>
      <tr><td>Term weeks</td><td>New chapters taught in school are consolidated within the week; one older chapter revisited every session</td></tr>
      <tr><td>Before the winter break</td><td>Group III project and practical records brought up to date; a list of weak chapters agreed</td></tr>
      <tr><td>Winter break</td><td>Late-morning home sessions or online lessons on the weak list; timed written answers twice a week</td></tr>
      <tr><td>After the break</td><td>Specimen papers in full, marked against the council's analysis of common errors</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    In maths the cycle means every step written, every commercial maths formula practised with real numbers, and
    geometry constructions done by hand. In the sciences it means three separate revision tracks, so that biology
    diagrams, chemistry equations and physics numericals each get their own time rather than competing for one slot.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sri-english">English: the compulsory subject that decides more than it seems</h2>
  <p>
    English sits in Group I, so every ICSE candidate takes it, and in ISC it is the one compulsory subject that every
    promotion and pass rule names. It also carries set literature, which means reading texts closely and writing
    about them, not only grammar and composition. Two habits make the biggest difference. First, regular timed
    writing: an essay, a letter or a literature answer each week, marked for structure as well as language. Second,
    close reading of the set texts with short notes on character, theme and key passages, kept up through the year
    rather than crammed before the exam. A tutor who reads your child's written work line by line and returns it with
    specific corrections is worth more here than one who talks through the texts. Our
    <a href="{{ url('/english-home-tutor-srinagar') }}">English home tutors in Srinagar</a> page goes into the subject.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sri-isc">ISC in Classes 11 and 12: the rules that catch students out</h2>
  <ul>
    <li>English is compulsory, with three to five electives and no more than six subjects in all.</li>
    <li>Subjects cannot be changed after 15 September of the Class 11 registration year, and a Class 12 subject must have been studied in Class 11.</li>
    <li>Promotion to Class 12 needs 35% in four subjects, English among them, and 75% attendance.</li>
    <li>Practical examinations are compulsory where a subject has them, and Physics may not be combined with Engineering Science.</li>
    <li>Results are graded 1 to 9; a pass certificate needs four subjects including English, plus Socially Useful Productive Work and Community Service.</li>
  </ul>
  <p>
    The attendance and promotion rules mean Class 11 cannot be treated lightly, which Srinagar families who know the
    state board's Class 11 examination will recognise. ISC Mathematics has an 80-mark, three-hour theory paper and 20
    marks of project work in each year; the <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page goes
    into it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sri-years">The CISCE route from Class 6 to Class 12</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ICSE and ISC years for a Srinagar student</caption>
    <thead>
      <tr><th scope="col">Classes</th><th scope="col">Main need</th><th scope="col">Tuition rhythm</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>English writing, arithmetic fluency, the habit of full working</td><td>One or two sessions a week</td></tr>
      <tr><td>9</td><td>Choosing Group II and III subjects well; the first long written answers</td><td>Two a week, more for the weakest subject</td></tr>
      <tr><td>10</td><td>Coverage across many papers; internal work finished early; specimen papers</td><td>Two or three a week</td></tr>
      <tr><td>11</td><td>Electives fixed before the September cut-off; attendance and promotion rules</td><td>One per elective</td></tr>
      <tr><td>12</td><td>Practicals, projects and the theory papers; entrance preparation alongside for some</td><td>Two per core subject before the exams</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Science students aiming at engineering or medicine should also read our
    <a href="{{ url('/jee-home-tutor-srinagar') }}">JEE</a> and <a href="{{ url('/neet-home-tutor-srinagar') }}">NEET</a>
    pages for Srinagar, and the guide to <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and
    stream</a> helps at the Class 10 turning point.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sri-other">ICSE beside CBSE and JKBOSE</h2>
  <p>
    A student who changes board after Class 10 faces a different first term. Moving from ICSE to CBSE means NCERT wording and
    competency-style questions; moving to the state board means its own textbooks and a board examination in Class 11
    itself, Higher Secondary Part I. Biology there is examined as separate Botany and Zoology papers. A tutor can
    bridge either move if they start from the new board's own books. See our
    <a href="{{ url('/cbse-home-tutor-srinagar') }}">CBSE</a> and <a href="{{ url('/jkbose-tutor-srinagar') }}">JKBOSE</a>
    pages for Srinagar.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sri-where">How ICSE tutors reach six Srinagar localities</h2>
  <ul>
    <li><strong>{!! $sriA('nowshera', 'Nowshera') !!}:</strong> laid out in the fifteenth century, with traditional houses in old lanes and newer homes on wider roads; tutors usually park and walk the last stretch.</li>
    <li><strong>{!! $sriA('zadibal', 'Zadibal') !!}:</strong> on the eastern banks of Khushal Sar, with close lanes; late afternoon and evening sessions suit most families.</li>
    <li><strong>{!! $sriA('lal-bazar', 'Lal Bazar') !!}:</strong> addresses such as Mughal Street, Broadway Street or Sikh Bagh; lively at school times, easier once students are home.</li>
    <li><strong>{!! $sriA('hazratbal', 'Hazratbal') !!}:</strong> a higher-education area, so tutors for senior subjects often live nearby; name your neighbourhood, such as Habak or Tailbal.</li>
    <li><strong>{!! $sriA('rawalpora', 'Rawalpora') !!}:</strong> houses in colony lanes; families usually fix mid-afternoon or after the evening rush.</li>
    <li><strong>{!! $sriA('bagh-e-mehtab', 'Bagh-e-Mehtab') !!}:</strong> a residential suburb on the Doodhganga; houses in colonies make for doorstep arrival and easy parking.</li>
  </ul>
  <p>
    Zones: <a href="{{ url('/city/srinagar/zone/north-city') }}">North City</a>,
    <a href="{{ url('/city/srinagar/zone/airport-road') }}">Airport Road</a>,
    <a href="{{ url('/city/srinagar/zone/natipora-nowgam') }}">Natipora and Nowgam</a>,
    <a href="{{ url('/city/srinagar/zone/civil-lines') }}">Civil Lines</a> and
    <a href="{{ url('/city/srinagar/zone/karan-nagar-bemina') }}">Karan Nagar and Bemina</a>. Every locality is on the
    <a href="{{ url('/city/srinagar') }}">Srinagar home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sri-mode">Home or online for ICSE in Srinagar?</h2>
  <p>
    Long written answers are easiest to improve with a tutor reading over the student's shoulder, so maths and English
    writing usually go well at home. Revision of the three sciences, especially in the short-day weeks of December and
    January, can move online without much loss. For a single ISC elective with few local specialists, online is often
    the practical choice. See <a href="{{ url('/online-tutor-srinagar') }}">online tutors for Srinagar</a> and the
    <a href="{{ url('/english-home-tutor-srinagar') }}">English home tutors in Srinagar</a> page for the literature
    papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sri-demo">Checking a tutor against the CISCE style</h2>
  <ol>
    <li>Ask the tutor to mark a written answer your child has already done. Do they mark it the way the council would, step by step?</li>
    <li>Do they know the Analysis of Pupil Performance and the current specimen papers?</li>
    <li>How will they keep earlier chapters alive while new ones arrive?</li>
    <li>For ISC: do they know the subject-change cut-off and the promotion rules?</li>
    <li>What is the plan for the winter break?</li>
  </ol>
  <p>
    You get two or three matched tutors, with fees shown before the demo; the first class is free and switching later
    is free. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sri-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Every tutor sets their own fee, shown before you book. See the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and <a href="{{ url('/blog/home-tuition-fees-srinagar') }}">home tuition fees in Srinagar</a>.
  </p>
  <p>
    Send the class, the subjects that worry you, your locality with a landmark and your winter plans, then book a
    <a href="{{ url('/demo-class') }}">free demo class</a>. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>; browse <a href="{{ url('/tutors') }}">tutor profiles</a>
    too. For the subjects themselves, see Srinagar <a href="{{ url('/maths-home-tutor-srinagar') }}">maths</a> and
    <a href="{{ url('/science-home-tutor-srinagar') }}">science</a> tutors; teachers can find
    <a href="{{ url('/tuition-jobs/srinagar') }}">tuition jobs in Srinagar</a>.
  </p>
  </section>

  </div>
</article>
