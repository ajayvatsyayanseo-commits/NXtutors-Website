{{--
  Board hub for "ICSE home tutor Lucknow" (CISCE: ICSE Class 10, ISC Class
  12). Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths),
  Aaditya Kashyap (role: CBSE and ICSE science) and Ajay Vatsyayan (role: IB,
  IGCSE and ISC maths). No anecdotes, years or results are claimed for any of
  them. No schools are named.

  Board facts restate only what icse-home-tutor-gurgaon states, which cites
  cisce.org (read 1 Oct 2026): ICSE Regulations (Group I compulsory, Group II
  two or three subjects, 80/20; Group III one applied subject, 50/50), ICSE
  Mathematics (3 h, 80 marks + 20 internal from at least two assignments,
  marked independently by the teacher and an external examiner; includes
  commercial mathematics), ICSE Physics, Chemistry, Biology (2 h, 80 + 20
  practical IA each), Analysis of Pupil Performance reports, ISC Regulations
  (English + three to five electives, max six; practicals compulsory; no
  Class XII subject not studied in XI; no change after 15 September of Class
  XI; promotion 35% in four subjects incl. English, 75% attendance; grades
  1-9; four passes incl. English plus SUPW and Community Service; Physics not
  with Engineering Science), ISC Mathematics 860 (80 theory + 20 project).
  No exam dates.

  Local detail only from the city hub (lucknow.blade.php: "CISCE's ICSE and
  ISC have a strong, long-standing presence in the city"; ICSE/ISC card:
  tutors who know ICSE and ISC well are easier to find here than in many
  cities; UP Board/UPMSP; Red Line; Blue Line under construction),
  database/seo-content/zones/lucknow.json and areas/lucknow-research.json /
  -zone-guides.json. No share of CISCE schools is claimed. Fee wording is the
  approved sentence. FAQs render from faqs/icse-home-tutor-lucknow.php. Area
  links render only when that Lucknow area page exists and is active.
--}}
@php
  $lkAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $lkA = function (string $slug, string $label) use ($lkAreaSlugs) {
      return in_array($slug, $lkAreaSlugs, true)
          ? '<a href="' . e(url('/city/lucknow/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide icl-guide" aria-labelledby="iclGuideTitle">
  <h2 id="iclGuideTitle">ICSE and ISC home tutors in Lucknow, a city where CISCE runs deep</h2>

  <p class="nx-guide__lede">
    CISCE's ICSE and ISC have a strong, long-standing presence in Lucknow, and for families that is good news: tutors
    who know these exams well are easier to find here than in many cities. The challenge shifts from finding someone
    to choosing well, because a tutor's comfort with CISCE's long written answers, three science papers and ISC subject
    rules varies a great deal. This page explains how the council examines at Class 10 and Class 12, where Lucknow
    students most often want help, how tutors reach each of the five zones, and a demo checklist built for CISCE. It is
    written by Abhinandan Tiwary (Class 10 CBSE and ICSE maths) and Aaditya Kashyap (CBSE and ICSE science), with Ajay
    Vatsyayan (IB, IGCSE and ISC maths) on ISC. The board itself is explained at length in our
    <a href="{{ url('/icse-home-tutor-gurgaon') }}">ICSE and ISC guide</a>.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#icl-city">CISCE in Lucknow</a> ·
    <a href="#icl-up">Compared with UP Board</a> ·
    <a href="#icl-icse">ICSE papers</a> ·
    <a href="#icl-isc">ISC choices</a> ·
    <a href="#icl-risks">Risks by class</a> ·
    <a href="#icl-session">A good session</a> ·
    <a href="#icl-after">After Class 10</a> ·
    <a href="#icl-subjects">Subjects</a> ·
    <a href="#icl-zones">Zones</a> ·
    <a href="#icl-mode">Home or online</a> ·
    <a href="#icl-demo">Demo</a> ·
    <a href="#icl-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="icl-city">What CISCE's presence means for Lucknow families</h2>
  <p>
    The <a href="{{ url('/city/lucknow') }}">Lucknow tutors page</a> describes the city's mix: CBSE widely followed,
    CISCE strong and long-established, many UP Board families, and a smaller IB and Cambridge group. We do not attach
    numbers to these. The useful consequence is that an ICSE or ISC request in Lucknow is more likely to find a good
    match in the first or second ring of our search, those living in or already travelling to your locality, rather
    than relying on the whole city or online.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icl-up">ICSE compared with the UP Board, in general</h2>
  <p>
    The UP Board, run by UPMSP, conducts High School at Class 10 and Intermediate at Class 12; much of its syllabus
    follows NCERT, its question papers are its own, and schools teach in Hindi or English. ICSE asks a Class 10
    student to sit more separate papers, includes prescribed literature in English, and rewards long, organised
    written answers in every subject. A student who changes between the two usually knows enough content and needs
    help with the style: what an ICSE examiner expects to see on the page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icl-icse">ICSE at Class 10: how the papers are built</h2>
  <ul>
    <li><strong>Group I, compulsory:</strong> English, a second language, and History, Civics and Geography; 80% from the paper, 20% internal.</li>
    <li><strong>Group II, two or three subjects:</strong> such as Mathematics, Science, Economics, Commercial Studies, a modern foreign or classical language, or Environmental Science; again 80% and 20%.</li>
    <li><strong>Group III, one subject:</strong> an applied subject such as Computer Applications, Commercial Applications, Art or Robotics and AI; half the marks from the paper and half internal.</li>
    <li><strong>Mathematics:</strong> a three-hour, 80-mark paper with 20 internal marks from at least two assignments, each marked by the subject teacher and separately by an external examiner. Commercial mathematics, such as banking and shares, sits alongside algebra, geometry, trigonometry and statistics.</li>
    <li><strong>Science:</strong> three papers, Physics, Chemistry and Biology, each two hours and 80 marks, each with 20 internal marks for practical work.</li>
  </ul>
  <p>
    After each exam CISCE releases an Analysis of Pupil Performance for every subject, setting out the common errors
    and what the examiners wanted. It is the most useful free document a CISCE tutor can bring to lessons.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icl-isc">ISC at Class 12: choices that cannot be undone</h2>
  <p>
    English is compulsory at ISC, with three to five electives and no more than six subjects in total. The regulations
    then close several doors early. A subject cannot be changed after 15 September of the Class 11 year, and no
    subject can be taken in Class 12 unless it was studied in Class 11. Some pairs are not allowed, such as Physics
    with Engineering Science. Promotion to Class 12 needs 35% in four subjects including English, on the cumulative
    result, plus 75% attendance. Practical papers are compulsory where they exist. Grades run from 1 to 9, and the pass
    certificate needs four subject passes including English, plus Socially Useful Productive Work and Community
    Service. ISC Mathematics has an 80-mark, three-hour theory paper and 20 marks of project work in each year; our
    <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page covers it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icl-risks">The main risk in each CISCE year</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Classes 6 to 12 on CISCE: what goes wrong and what fixes it</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Typical risk</th><th scope="col">What a tutor does</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>Short, careless answers become a habit</td><td>Insists on full sentences, labelled diagrams and every maths step</td></tr>
      <tr><td>9</td><td>Too many subjects, too little revision</td><td>Rotates subjects weekly; starts specimen questions early</td></tr>
      <tr><td>10</td><td>One weak science paper drags the result</td><td>Targets the weakest paper; timed practice paper by paper</td></tr>
      <tr><td>11</td><td>Wrong elective, noticed too late</td><td>Checks progress before mid-September; closes the ICSE-to-ISC jump</td></tr>
      <tr><td>12</td><td>Projects and practicals squeezed by theory</td><td>Keeps a timeline for project work and the practical record</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icl-session">What a CISCE session should spend its time on</h2>
  <p>
    Since ICSE marks reward what is written, a good session is half writing. The tutor starts with the student's own
    attempt at a few questions from last time and marks them line by line: missing steps, units, labels, and in
    English or history, sentences that say little. New teaching follows from the textbook, then straight into
    specimen-paper questions on the same topic, ending with one answer written in full against the clock. For ISC
    sciences, some sessions should cover the practical: recording observations, choosing a graph and writing a
    conclusion an examiner can credit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icl-after">After ICSE: staying with CISCE or changing board</h2>
  <p>
    At the end of Class 10 a Lucknow student has three common routes: ISC with CISCE, a CBSE school for Class 11, or
    the UP Board's Intermediate. Staying with CISCE keeps the answer style familiar, though every ISC subject goes
    much deeper than its ICSE version, and the subject rules above apply from the first term. Moving to CBSE means
    NCERT textbooks, CBSE sample papers and a different theory and practical split; the maths and science content
    carries over well. Moving to the UP Board means the board's own papers and, possibly, a change of medium. Whichever
    route, settle the Class 11 subjects with care before term starts. Our
    <a href="{{ url('/cbse-home-tutor-lucknow') }}">CBSE home tutors in Lucknow</a> page covers the CBSE side, and the
    <a href="{{ url('/class-11-home-tutor-gurgaon') }}">Class 11 home tutors</a> page looks at that first senior year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icl-subjects">CISCE subjects Lucknow families ask about</h2>
  <p>
    At ICSE, maths and the three sciences lead, with English language and literature close behind and History, Civics
    and Geography after. At ISC, science students ask for maths, physics, chemistry and biology, and commerce students
    for accounts, commerce and economics.
  </p>
  <ul>
    <li><a href="{{ url('/maths-home-tutor-lucknow') }}">Maths home tutors in Lucknow</a> for ICSE and ISC</li>
    <li><a href="{{ url('/science-home-tutor-lucknow') }}">Science home tutors</a> covering the three ICSE papers</li>
    <li>ISC electives: <a href="{{ url('/physics-home-tutor-lucknow') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-lucknow') }}">chemistry</a>, <a href="{{ url('/biology-home-tutor-lucknow') }}">biology</a></li>
    <li><a href="{{ url('/english-home-tutor-lucknow') }}">English home tutors in Lucknow</a> for both ICSE English papers and ISC English</li>
    <li>With ISC science: <a href="{{ url('/jee-home-tutor-lucknow') }}">JEE</a> and <a href="{{ url('/neet-home-tutor-lucknow') }}">NEET</a> tutors</li>
  </ul>
  <p>
    The <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> goes through both maths
    papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icl-zones">ICSE tutors across Lucknow's zones</h2>
  <ul>
    <li><strong><a href="{{ url('/city/lucknow/zone/gomti-nagar-indira-nagar-chinhat') }}">Gomti Nagar, Indira Nagar and Chinhat</a>.</strong> Deeper into {!! $lkA('gomti-nagar', 'Gomti Nagar') !!} there is no station, so tutors come by car or two-wheeler; Shaheed Path is busy at office hours.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/mahanagar-aliganj-jankipuram') }}">Mahanagar, Aliganj and Jankipuram</a>.</strong> {!! $lkA('mahanagar', 'Mahanagar') !!} and {!! $lkA('nirala-nagar', 'Nirala Nagar') !!} are within reach of Badshahnagar, IT College and Vishwavidyalaya stations, so tutors can ride in and finish by auto.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/hazratganj-lalbagh-aminabad') }}">Hazratganj, Lalbagh and Aminabad</a>.</strong> {!! $lkA('hazratganj', 'Hazratganj') !!} has an underground Red Line station; parking is scarce, so a tutor who rides the metro is the steadiest choice.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/alambagh-ashiyana-rajajipuram') }}">Alambagh, Ashiyana and Rajajipuram</a>.</strong> For {!! $lkA('ashiyana', 'Ashiyana') !!}, Krishna Nagar station and a short auto ride work well; avoid the Kanpur Road peak.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/sushant-golf-city-vrindavan-yojana-telibagh') }}">Sushant Golf City, Vrindavan Yojana and Telibagh</a>.</strong> {!! $lkA('telibagh', 'Telibagh') !!} is mostly independent houses; with no metro, pick an after-school slot that starts a little later than the Raebareli Road rush.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icl-mode">Home lessons or online for ICSE and ISC</h2>
  <p>
    For the ICSE years, home lessons are the natural choice where a CISCE tutor lives within reach, because what needs
    correcting is on the paper in front of you. For ISC electives, the right specialist may live on the far side of the
    Gomti or beyond the Red Line, and then an online session saves a long cross-town trip. Many families keep a weekly
    home lesson and add a shorter online session with the same tutor. Read the
    <a href="{{ url('/blog/gomti-nagar-and-trans-gomti-tuition-guide') }}">Gomti Nagar and Trans-Gomti guide</a> and
    the <a href="{{ url('/blog/central-and-south-lucknow-tuition-guide') }}">central and south Lucknow guide</a> for
    timing advice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icl-demo">A CISCE demo checklist</h2>
  <ol>
    <li><strong>Method marks.</strong> In maths, does the tutor insist on each step and the final form of the answer?</li>
    <li><strong>Examiner reports.</strong> Can they tell you what the latest Analysis of Pupil Performance said for your child's subject?</li>
    <li><strong>Breadth in science.</strong> Ask for a physics numerical and a biology diagram in the same demo.</li>
    <li><strong>Written English.</strong> Do they correct expression as well as content?</li>
    <li><strong>ISC rules.</strong> For Class 11, can they explain the September subject deadline and the promotion rule without notes?</li>
  </ol>
  <p>
    The shortlist shows two or three tutors with fees before the demo, and switching tutor later is free. Tutors who
    join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icl-fees">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For CISCE students the
    class, number of papers, how close the exam is and the tutor's travel set the fee. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-lucknow') }}">Lucknow
    tuition fees</a>.
  </p>
  <p>
    Tell us ICSE or ISC, the class, subjects, your khand, sector or block, and free slots. The first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. See <a href="{{ url('/tutors') }}">tutor profiles</a>; CISCE
    teachers can find <a href="{{ url('/tuition-jobs/lucknow') }}">tuition jobs in Lucknow</a>.
  </p>
  </section>

  </div>
</article>
