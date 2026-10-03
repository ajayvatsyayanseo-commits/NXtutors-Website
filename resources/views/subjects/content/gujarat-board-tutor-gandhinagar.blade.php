{{--
  Board hub: "Gujarat Board (GSEB) SSC & HSC tutor Gandhinagar". Author: nxtutors
  (NXTutors Academic Team). Written by the subjects-b writer, capitals wave,
  3 Oct 2026. Kept distinct from gujarat-board-tutor-ahmedabad: this page leads
  on the board's 2026-27 calendar, the new Standard 10 subject frame, the HPC
  pilot and GUJCET's paper structure, and only recaps the paper designs.
  No school, college, coaching, society or people names. No candidate numbers.

  Official sources (all read 3 Oct 2026):
  - https://www.gseb.org/ : portal titled "Gujarat Secondary and Higher
    Secondary Education Board, Gandhinagar"; links to the board website
    (gsebeservice.com), school and teacher registration, GSOS registration for
    SSC (Standard 10) and HSC General (Standard 12), new school and new class
    applications, subject-wise question bank for Standards 9 to 12
    (questionbank.gseb.org), annual inspection report 2025-26, School Result
    Record (sr.gseb.org) and Result (result.gseb.org).
  - https://www.gsebeservice.com/Web/contact : board address "Sector 10B, Near
    Old Sachivalay, Gandhinagar-382010".
  - https://www.gsebeservice.com/Web/quePaper (question papers for Std 9, 10,
    12 General, 12 Science) and /Web/blueprint ("Model Paper & Pari roop",
    Std 10 and 12).
  - Circular 27-07-2026, Std 10 weekly period allocation
    (gsebeservice.com/assets/news/પરિપત્ર ધોરણ ૧૦ તાસ ફાળવણી.pdf): from
    2026-27, under NEP-2020, NCF-2023 and SCFSE, the three-language formula in
    Std 10, with the vocational subject added as an eighth subject instead of
    sitting in the third-language option. 45 periods a week: first language
    (medium of the school: Gujarati, Hindi, English, Marathi, Urdu, Sindhi,
    Tamil, Telugu, Odia) 6; second language (English in non-English-medium
    schools, Gujarati in non-Gujarati-medium schools) 7 (6 with vocational);
    third language (Hindi, Sanskrit, Persian, Arabic, Sindhi, Urdu) 6 (5);
    Mathematics (Basic/Standard) 7; Science 7; Social Science 6; group-2
    subjects such as yoga-health-PE, drawing, computer, music 5 (4);
    vocational 0 (3); one period for the head of school.
  - Circular 17-06-2026 (ધો-૧૦ માં મૂકબધિર વિદ્યાર્થીઓ માટે વિષય પસંદગી
    બાબત.pdf): from 2026-27 deaf students in Std 10 may be exempted from
    Science and take a group-2 optional or a vocational subject instead; seven
    subjects in total remain compulsory.
  - School activity calendar 2026-27, circular 02-05-2026 (શાળાકીય પ્રવૃત્તિ
    કેલેન્ડર ૨૦૨૬-૨૭.pdf): first term 8 Jun to 4 Nov 2026; Diwali vacation 5 to
    25 Nov 2026; second term 26 Nov 2026 to 2 May 2027; summer vacation 3 May to
    6 Jun 2027. First test (Std 9-12) late Oct to early Nov 2026 on the
    June-September syllabus; preliminary/second test mid to late Jan 2027 (full
    syllabus for Std 10 and 12; Std 9 and 11: June-December syllabus, 30% from
    June-September and 70% from October-December); school-level theory and
    practical tests in board subjects early Feb 2027; Std 12 Science practical
    examination 5 to 13 Feb 2027; SSC/HSC board examinations 25 Feb to 17 Mar
    2027; Std 9 and 11 annual examinations in April 2027; dates may change if
    the government changes them.
  - Press note 28-07-2026 (Press Note For HPC.pdf): digital Holistic Progress
    Card piloted from 2026-27 in 10% of government, grant-in-aid and
    non-grant secondary and higher secondary schools in each district;
    self-assessment, peer, parent and teacher assessment.
  - Press note 06-08-2025 (અખબારી યાદી- ધોરણ-9 થી 12ના કેટલાક વિષયોના ...pdf):
    computer studies syllabus for Std 9-12 revised; month-wise syllabus plans
    and paper designs revised from 2025-26; Std 12 economics textbook adds a
    chapter on natural farming.
  - Press note 29-08-2025 and the 2025-26 paper designs (as summarised and
    cited on gujarat-board-tutor-ahmedabad): Std 10 core papers 3 h, 80 marks,
    24 compulsory one-mark items then sections with internal choice; Std 12
    Science maths and physics 3 h, 100 marks, Part A 50 one-mark MCQs on OMR.
  - GUJCET press notes 08-11-2025 and 15-12-2025: GUJCET held by the board for
    Group A, B and AB students of HSC Science, for admission to degree
    engineering and degree/diploma pharmacy; syllabus the board's NCERT-based
    Std 12 Science syllabus (NCERT textbooks in board schools from June 2019);
    physics and chemistry one combined paper of 80 MCQs, 80 marks, 120
    minutes; biology and mathematics separate papers of 40 MCQs, 40 marks, 60
    minutes each; OMR; Gujarati, English and Hindi; registration on gseb.org
    and gujcet.gseb.org. News list also shows GUJCET provisional and final
    answer keys and an OMR-copy application.
  - Result press note 02-05-2026: results on gseb.org by seat number, and also
    by sending the seat number to the board's WhatsApp number.
  - News list on gsebeservice.com: BISAG educational broadcasts for Std 9-12
    students (monthly notices); Talent Search Test for Std 9; gunchakasani
    (marks verification), avlokan and OMR copy for HSC Science; purak
    (supplementary) registration and hall tickets for SSC, HSC General and
    HSC Science.
  Local detail only from database/seo-content/areas/gandhinagar-research.json
  (zone_facts and the areas' "about"). No claim about where GSEB families
  live. Fee wording is the approved sentence. FAQs render from
  faqs/gujarat-board-tutor-gandhinagar.php. Area links render only for active
  Gandhinagar areas.
--}}
@php
  $gngSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gngA = function (string $slug, string $label) use ($gngSlugs) {
      return in_array($slug, $gngSlugs, true)
          ? '<a href="' . e(url('/city/gandhinagar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="gngGuideTitle">
  <h2 id="gngGuideTitle">GSEB tutors in Gandhinagar: Standard 9 to the HSC, planned around the board's own calendar</h2>

  <p class="nx-guide__lede">
    The Gujarat Secondary and Higher Secondary Education Board has its office in Gandhinagar itself: its contact page
    gives the address as Sector 10B, near the Old Sachivalaya. For a family here, though, the board is mostly a set of
    documents rather than a building. It publishes the school year's term dates and exam windows, the weekly period
    count for every Standard 10 subject, the paper designs, the question bank and, at the end, the results. A good
    home tutor plans from those documents. This page walks through what the board has issued for the 2026-27 year,
    what changes in Standard 10, how the HSC streams and GUJCET fit together, and how a tutor reaches your sector or
    locality. Every board detail below was read on gseb.org or the board's e-service site, gsebeservice.com; both
    are updated through the year, so confirm anything important there.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gng-portal">The two sites</a> ·
    <a href="#gng-year">The 2026-27 year</a> ·
    <a href="#gng-std10">Standard 10 from 2026-27</a> ·
    <a href="#gng-papers">Paper designs</a> ·
    <a href="#gng-hpc">Progress card pilot</a> ·
    <a href="#gng-hsc">HSC streams</a> ·
    <a href="#gng-gujcet">GUJCET</a> ·
    <a href="#gng-results">Results</a> ·
    <a href="#gng-where">Localities</a> ·
    <a href="#gng-week">A tutor's week</a> ·
    <a href="#gng-demo">The demo</a> ·
    <a href="#gng-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gng-portal">gseb.org and gsebeservice.com: what each one is for</h2>
  <p>
    The board runs two front doors. <strong>gseb.org</strong> is the service portal: results, the School Result
    Record, registration for the Gujarat State Open School (GSOS) at Standard 10 and Standard 12 General, school and
    teacher registration, and a link to a subject-wise question bank for Standards 9 to 12 that schools download
    with their own login. <strong>gsebeservice.com</strong>, which gseb.org links as the board website, holds the
    paperwork a tutor needs: past question papers for Standard 9, Standard 10, Standard 12 General and Standard 12
    Science, a "Model Paper &amp; Pari roop" section for Standards 10 and 12, the circulars, and a long news list of
    press notes in Gujarati.
  </p>
  <p>
    That news list is worth a parent's ten minutes once a month. It is where the board announces revised syllabus
    plans, registration windows, answer keys and post-result procedures. It also carries monthly notices of
    educational programmes for Standards 9 to 12 broadcast through BISAG, which a student can use as extra
    revision. A tutor who reads the list regularly will rarely be caught out by a change.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gng-year">How the 2026-27 school year is laid out</h2>
  <p>
    In May 2026 the board sent schools an activity calendar for the year. It splits the year into two terms around
    the Diwali vacation and fixes common windows for school tests and the board examinations.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>GSEB school activity calendar 2026-27, as the board issued it</caption>
    <thead>
      <tr><th scope="col">When</th><th scope="col">What happens</th><th scope="col">What it means for tuition</th></tr>
    </thead>
    <tbody>
      <tr><td>8 June to 4 November 2026</td><td>First term</td><td>New chapters; build the habit of weekly written practice early</td></tr>
      <tr><td>Late October to early November 2026</td><td>First test, Standards 9 to 12, on the June to September syllabus</td><td>The first real check of the year; review every lost mark with the tutor</td></tr>
      <tr><td>5 to 25 November 2026</td><td>Diwali vacation</td><td>Three weeks with no school: a good time for a gap-filling block, agreed in advance</td></tr>
      <tr><td>26 November 2026 to 2 May 2027</td><td>Second term</td><td>The heavy stretch for Standards 10 and 12</td></tr>
      <tr><td>Mid to late January 2027</td><td>Preliminary or second test</td><td>Standards 10 and 12 on the full syllabus; Standards 9 and 11 on June to December work, weighted 30% to the first months and 70% to October to December</td></tr>
      <tr><td>Early February 2027</td><td>School-level theory and practical tests in board subjects; Standard 12 Science practical examination soon after</td><td>Practical files and viva preparation must be ready before this</td></tr>
      <tr><td>Late February to mid-March 2027</td><td>SSC and HSC board examinations</td><td>Full timed papers through January and February</td></tr>
      <tr><td>April 2027</td><td>Annual examinations for Standards 9 and 11</td><td>These students are still in exam mode after the board candidates finish</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The board notes that dates can change if the government changes them, so treat the table as the plan, not a
    promise. The useful point for tuition is the shape: a Standard 10 or 12 student has roughly two months between
    the end of the Diwali break and the preliminary test, and a few weeks between that test and the board papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gng-std10">Standard 10 from 2026-27: three languages and an eighth subject</h2>
  <p>
    A July 2026 circular changes the shape of Standard 10. From this academic year the board applies the
    three-language formula in Standard 10, and the vocational subject becomes an eighth subject instead of being one
    option for the third-language slot. The circular sets a 45-period school week, subject by subject.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Standard 10 weekly periods in an ordinary GSEB school, 2026-27</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Without a vocational subject</th><th scope="col">With a vocational subject</th></tr>
    </thead>
    <tbody>
      <tr><td>First language (the school's medium, such as Gujarati, Hindi or English)</td><td>6</td><td>6</td></tr>
      <tr><td>Second language (English in schools of other media; Gujarati in non-Gujarati-medium schools)</td><td>7</td><td>6</td></tr>
      <tr><td>Third language (Hindi, Sanskrit, Persian, Arabic, Sindhi or Urdu)</td><td>6</td><td>5</td></tr>
      <tr><td>Mathematics (Basic or Standard)</td><td>7</td><td>7</td></tr>
      <tr><td>Science</td><td>7</td><td>7</td></tr>
      <tr><td>Social Science</td><td>6</td><td>6</td></tr>
      <tr><td>Group-2 subjects: yoga, health and physical education, drawing, computer, music and similar</td><td>5</td><td>4</td></tr>
      <tr><td>Vocational subject</td><td>0</td><td>3</td></tr>
      <tr><td>Period arranged by the head of school</td><td>1</td><td>1</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Two practical consequences follow. First, maths and science keep seven periods each, the same as the second
    language, so a student who struggles in either has no extra school time to fall back on; any extra help has to
    come outside school hours. Second, the third language now sits beside the other two for every student, and a weak
    language paper can pull an otherwise good result down. The same circular keeps Mathematics Basic and Mathematics
    Standard as two separate papers; ask the school what it needs before the choice is made, especially if your
    child hopes to take maths in Standard 11.
  </p>
  <p>
    A separate June 2026 circular lets a deaf student in Standard 10 replace Science with a group-2 or vocational
    subject from this year, while still taking seven subjects in all. If that applies to your child, mention it when
    you ask for a tutor, so the subject list is right from the first session.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gng-papers">The paper designs, in short</h2>
  <p>
    The board publishes a <em>pariroop</em>, a question-paper design, for each main subject, together with a
    month-wise plan of the syllabus. For the 2025-26 papers, the core Standard 10 subjects were three-hour, 80-mark
    papers that open with 24 compulsory one-mark objective items and then move to two-, three- and four-mark
    questions with a choice inside each section. In Standard 12 Science, the maths and physics papers were three
    hours and 100 marks, starting with 50 one-mark multiple-choice questions on an OMR sheet before the written
    part. Our <a href="{{ url('/gujarat-board-tutor-ahmedabad') }}">Gujarat Board tutors in Ahmedabad</a> page sets
    these designs out section by section; check the Model Paper &amp; Pari roop page for the current year's
    version before relying on any number.
  </p>
  <p>
    The board also revises plans when a syllabus changes. A 2025 press note, for instance, recorded a revised
    computer studies syllabus for Standards 9 to 12 and a new chapter on natural farming in the Standard 12
    economics textbook, with the month-wise plans and paper designs updated to match. A tutor working from an
    old guidebook can miss changes like these.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gng-hpc">The Holistic Progress Card pilot</h2>
  <p>
    From 2026-27 the board is piloting a digital Holistic Progress Card in a tenth of the government, grant-in-aid and
    non-grant secondary and higher secondary schools in each district. The card adds self-assessment, assessment by
    classmates, by parents and by teachers to the usual marks. If your child's school is in the pilot, a tutor can
    help in a quiet way: by keeping a short record of what was practised each week and where the student improved,
    which makes a parent's part of the card easier to fill honestly. A tutor should never fill in or write any part
    of it for the student.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gng-hsc">Choosing an HSC stream and group</h2>
  <p>
    After the SSC, a GSEB student moves into the Science stream or the General stream, and the board runs a separate
    HSC examination for each. Its result notices also cover Vocational and Uttar Buniyadi streams. Inside Science,
    students fall into Group A (with mathematics), Group B (with biology) or Group AB (with both); the group decides
    which GUJCET papers they sit later.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What tuition usually covers in each HSC route</caption>
    <thead>
      <tr><th scope="col">Route</th><th scope="col">Tutor's core work</th><th scope="col">Pages that go deeper</th></tr>
    </thead>
    <tbody>
      <tr><td>Science, Group A</td><td>Maths and physics written answers, OMR speed for Part A, GUJCET or JEE alongside</td><td><a href="{{ url('/jee-home-tutor-gandhinagar') }}">JEE tutors in Gandhinagar</a></td></tr>
      <tr><td>Science, Group B</td><td>Biology and chemistry, practical records, GUJCET biology or NEET</td><td><a href="{{ url('/neet-home-tutor-gandhinagar') }}">NEET tutors in Gandhinagar</a></td></tr>
      <tr><td>Science, Group AB</td><td>All four sciences; a tight weekly timetable matters most here</td><td>Both of the above</td></tr>
      <tr><td>General stream</td><td>Economics, statistics, commerce subjects or humanities subjects, with long written answers</td><td>Our <a href="{{ url('/blog/how-to-choose-boardstream') }}">board and stream guide</a></td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Standard 11 ends with a school annual examination rather than a board paper, but it is where the stream is
    either settled or lost. A tutor who
    notices in the first test that a Group A student is struggling with the jump in physics gives the family time to
    act before Standard 12 begins.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gng-gujcet">GUJCET: the board's own entrance test</h2>
  <p>
    GSEB also holds GUJCET, the Gujarat Common Entrance Test, for Group A, B and AB students of the HSC Science stream
    who want admission to degree engineering or to diploma and degree pharmacy. The board's 2026 notes set its
    syllabus as the board's NCERT-based Standard 12 Science syllabus; the board says its schools have taught Standard
    12 physics, chemistry, biology and maths from NCERT textbooks since June 2019.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>GUJCET 2026 paper structure, from the board's press note</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">Questions and marks</th><th scope="col">Time</th></tr>
    </thead>
    <tbody>
      <tr><td>Physics and chemistry (one combined paper)</td><td>40 + 40 multiple-choice questions, 80 marks</td><td>120 minutes</td></tr>
      <tr><td>Biology</td><td>40 multiple-choice questions, 40 marks</td><td>60 minutes</td></tr>
      <tr><td>Mathematics</td><td>40 multiple-choice questions, 40 marks</td><td>60 minutes</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Answers go on OMR sheets, and the papers were offered in Gujarati, English and Hindi. Registration runs through
    gseb.org and gujcet.gseb.org, and the board later posts provisional and final answer keys and accepts requests for
    a copy of the OMR sheet. Because the syllabus is the Standard 12 board syllabus, GUJCET practice fits naturally
    into HSC revision rather than competing with it. For a dedicated plan, see our
    <a href="{{ url('/gujcet-tutor-ahmedabad') }}">GUJCET tutors</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gng-results">After the board papers: results, checks and purak</h2>
  <ul>
    <li><strong>Results:</strong> published on gseb.org and found by seat number. In 2026 the board also let students get their result by sending the seat number to its WhatsApp line.</li>
    <li><strong>Marks verification (gunchakasani):</strong> an online application for each examination; HSC Science students can also ask to see the answer book (avlokan) and a copy of the OMR sheet.</li>
    <li><strong>Supplementary (purak) examination:</strong> separate registration and hall tickets for SSC, HSC General and HSC Science, followed by its own verification round.</li>
    <li><strong>Open schooling:</strong> GSOS registration for Standard 10 and Standard 12 General is listed on gseb.org for students outside regular school.</li>
  </ul>
  <p>
    If a resit is possible, keep the tutor engaged through the result weeks. The purak papers come quickly, and a tutor
    who already knows the student's weak chapters saves the family a fresh start.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gng-where">How GSEB tutors reach your part of Gandhinagar</h2>
  <p>
    Gandhinagar's sectors were laid out on a grid, with letter roads crossing number roads, while the former villages
    on its southern side have grown into apartment localities since joining the municipal corporation in 2020. A
    tutor's route depends on which of the two you live in.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six localities and what helps a weekly tutor arrive on time</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Usual route</th><th scope="col">Tip for the family</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $gngA('vavol', 'Vavol') !!}</td><td>Two-wheeler or car along K Road or the Uvarsad–Vavol Road; no metro station in the locality</td><td>Share the tower, flat number and a gate phone number before the demo</td></tr>
      <tr><td>{!! $gngA('kudasan', 'Kudasan') !!}</td><td>Yellow Line to Sector-1, then an auto or two-wheeler</td><td>Plotted houses allow doorstep arrival; for flats, tell the guard in advance</td></tr>
      <tr><td>{!! $gngA('sargasan', 'Sargasan') !!}</td><td>Infocity station on the Yellow Line, or by road near SG Highway</td><td>Pick an after-school slot clear of office-hour highway traffic</td></tr>
      <tr><td>{!! $gngA('randesan', 'Randesan') !!}</td><td>Its own Yellow Line station, between Dholakuva Circle and Raysan</td><td>Fix evening classes outside the SH-71 rush</td></tr>
      <tr><td>{!! $gngA('koba', 'Koba') !!}</td><td>Koba Circle, Juna Koba or Koba Gaam stations, then a short walk or auto</td><td>Tutors can come from either city; agree the station in advance</td></tr>
      <tr><td>{!! $gngA('adalaj', 'Adalaj') !!}</td><td>Tapovan Circle station, then an auto, or by road via the highway interchange</td><td>Late afternoon or weekend slots avoid highway peaks</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The zone pages cover the rest of the city:
    <a href="{{ url('/city/gandhinagar/zone/sectors-16-30-pethapur') }}">Sectors 16–30 and Pethapur</a>,
    <a href="{{ url('/city/gandhinagar/zone/sectors-1-8-infocity') }}">Sectors 1–8 and Infocity</a>,
    <a href="{{ url('/city/gandhinagar/zone/kudasan-sargasan') }}">Kudasan and Sargasan</a> and
    <a href="{{ url('/city/gandhinagar/zone/koba-raysan-gift-city') }}">Koba, Raysan and GIFT City</a>. Every
    locality is listed on our <a href="{{ url('/city/gandhinagar') }}">Gandhinagar home tutors</a> page, and our
    <a href="{{ url('/blog/gandhinagar-home-tuition-guide') }}">Gandhinagar home tuition guide</a> covers each zone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gng-week">What a GSEB tutor's week looks like at each standard</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Tuition focus by standard, set against the 2026-27 calendar</caption>
    <thead>
      <tr><th scope="col">Standard</th><th scope="col">Before Diwali</th><th scope="col">After Diwali</th></tr>
    </thead>
    <tbody>
      <tr><td>9</td><td>Foundations in algebra, geometry and science diagrams; first written answers to length</td><td>Prepare for the January test, where 70% of the weight is on October to December chapters</td></tr>
      <tr><td>10 (SSC)</td><td>Objective items in short daily bursts; the Basic or Standard maths decision; third-language basics</td><td>Full three-hour papers before the preliminary; then board-paper practice to late February</td></tr>
      <tr><td>11</td><td>The step up in physics and maths, or in economics and accounts; settle the group</td><td>Keep pace for the April annual examination; start GUJCET or JEE/NEET planning</td></tr>
      <tr><td>12 (HSC)</td><td>Cover the syllabus once; OMR drills for Part A; practical records</td><td>Practicals in early February, board papers from late February, GUJCET work folded in</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Subject pages for the city go further: <a href="{{ url('/maths-home-tutor-gandhinagar') }}">maths</a>,
    <a href="{{ url('/science-home-tutor-gandhinagar') }}">science</a>,
    <a href="{{ url('/physics-home-tutor-gandhinagar') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-gandhinagar') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-gandhinagar') }}">biology</a> and
    <a href="{{ url('/english-home-tutor-gandhinagar') }}">English</a>. If your child's school follows another board,
    see our <a href="{{ url('/cbse-home-tutor-gandhinagar') }}">CBSE</a> and
    <a href="{{ url('/icse-home-tutor-gandhinagar') }}">ICSE and ISC</a> pages for Gandhinagar.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gng-mode">Home visits, online sessions, or both?</h2>
  <p>
    Written answers, geometry constructions and labelled diagrams are easier to correct across a table, so in
    Standards 9 and 10 it is worth keeping at least one home session a week. Objective-item drills, OMR practice and
    GUJCET timing work translate well to a screen, and an online session also helps where no tutor for a particular
    subject lives near you. Our <a href="{{ url('/online-tutor-gandhinagar') }}">online tutors for Gandhinagar</a>
    page explains how a mixed week works.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gng-demo">Questions to put to a GSEB tutor at the demo</h2>
  <ol>
    <li><strong>Which papers have you taught recently?</strong> SSC, HSC Science or HSC General, and in which subjects.</li>
    <li><strong>Do you know what changed this year?</strong> A tutor following the board should know about the three-language Standard 10 and the current paper design.</li>
    <li><strong>Can you teach in my child's medium?</strong> Ask for one answer written in the textbook's own terms.</li>
    <li><strong>How will you use the calendar?</strong> Listen for a plan around the first test, the Diwali break and the January preliminary.</li>
    <li><strong>What about practicals and projects?</strong> They should be guided, never written for the student.</li>
    <li><strong>How will you get here each week?</strong> Station, road and a fallback for exam-season Saturdays.</li>
  </ol>
  <p>
    We send two or three matched tutors and show each fee before the demo. The first class is free, and switching
    tutor later is free too. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>
    before their profile is marked Verified. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class
    checklist</a> adds more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gng-fees">Fees and how to begin</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their
    own fee. The <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our post on
    <a href="{{ url('/blog/home-tuition-fees-gandhinagar') }}">home tuition fees in Gandhinagar</a> explain what
    affects it.
  </p>
  <p>
    Tell us the standard, stream and group, the medium, the subjects, your sector or locality with the nearest circle
    or station, and the slots that suit you. The first class is a <a href="{{ url('/demo-class') }}">free demo</a>.
    You can also browse <a href="{{ url('/tutors') }}">tutor profiles</a>, and teachers of GSEB subjects can find
    requests on <a href="{{ url('/tuition-jobs/gandhinagar') }}">Gandhinagar tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
