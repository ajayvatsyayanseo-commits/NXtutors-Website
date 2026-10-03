{{--
  Board hub: "Gujarat Board (GSEB) SSC & HSC tutor Ahmedabad". Author: nxtutors
  (NXTutors Academic Team). No school, college, coaching, society or people
  names. No exam dates, results or candidate numbers.

  Official sources (all read 2 Oct 2026; gseb.org and the board's own e-service
  site, which gseb.org links as "Board Website"):
  - https://www.gseb.org/ (portal of the Gujarat Secondary and Higher Secondary
    Education Board, Gandhinagar): separate links for SSC (Standard 10), HSC
    General Stream and HSC Science (Standard 12); purak (supplementary)
    registration for each; gunchakasani (marks verification) for each, and for
    HSC Science also avlokan / OMR copy; "SSC Internal & Practical Marks Entry";
    HSC Science school practical marks entry and practical exam hall ticket;
    GSOS (Gujarat State Open School) registration for SSC and HSC General;
    subject-wise question bank for Std 9 to 12 (questionbank.gseb.org, school
    login by index number); result.gseb.org.
  - https://www.gsebeservice.com/ (linked from gseb.org as "Board Website"):
    Question Papers (Std 9, 10, 12 General, 12 Science); "Model Paper & Pari
    roop"; Re-checking; Equivalency Certificate; Migration Certificate.
  - Board press note 29-08-2025 and circular 28-08-2025 (gsebeservice.com/
    assets/news/...): question-paper designs (pariroop) for 2025-26 for Std 10
    Mathematics (Standard), Mathematics (Basic), Social Science, English (Second
    Language), Science; Std 12 General: Economics, Organisation of Commerce and
    Management, Statistics, Psychology, Geography, Philosophy, English (SL);
    Std 12 Science: Mathematics, Chemistry, Physics, Biology, English (SL).
    Attached designs read: Std 10 Mathematics (Standard) (12) and (Basic) (18),
    Science (11), Social Science (10), English SL (16): 3 hours, 80 marks,
    Sections A-D = 24 one-mark objective (compulsory) + 9 of 13 two-mark (18)
    + 6 of 9 three-mark (18) + 5 of 8 four-mark (20) for maths; Standard maths
    objective weighting Knowledge 34%, Understanding 31%, Application 25%,
    higher-order 10%. Std 12 Mathematics (050) and Physics (054), Science
    stream: 3 hours, 100 marks; Part A 50 one-mark MCQs (maths note: Part A 1
    hour, Part B 2 hours); Part B 50 marks = 8 of 12 two-mark, 6 of 9
    three-mark, 4 of 6 four-mark; physics weighting K 12, U 30, A 32, HOTS 26;
    maths K 20, U 30, A 26, HOTS 24; chapter weights may vary, unit weights
    should not.
  - GUJCET 2026 press note 08-11-2025 (board): Std 12 Science physics,
    chemistry, biology and maths taught from NCERT textbooks in board schools
    from June 2019; GUJCET for Group A, B and AB students.
  - Result press note 02-05-2026: Std 12 Science, General, Vocational and
    Uttar Buniyadi streams, GUJCET and Sanskrit medium results on gseb.org by
    seat number; circular on verification, name correction and re-appearance
    issued after results.
  Local detail only from the Ahmedabad hub view (GSEB in Gujarati, English and
  other media; four kinds of examination; Uttarayan in mid-January),
  zones/ahmedabad.json and ahmedabad-zone-guides.json and
  ahmedabad-research.json. No claim about where GSEB families live. Fee
  wording is the approved sentence. FAQs render from
  faqs/gujarat-board-tutor-ahmedabad.php.
--}}
@php
  $gjbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gjbA = function (string $slug, string $label) use ($gjbSlugs) {
      return in_array($slug, $gjbSlugs, true)
          ? '<a href="' . e(url('/city/ahmedabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="gjbGuideTitle">
  <h2 id="gjbGuideTitle">Gujarat Board tutors in Ahmedabad: SSC in Standard 10, HSC Science or General in Standard 12</h2>

  <p class="nx-guide__lede">
    GSEB, the Gujarat Secondary and Higher Secondary Education Board in Gandhinagar, sets the SSC examination at the
    end of Standard 10 and two separate HSC examinations at the end of Standard 12, one for the Science stream and one
    for the General stream. Its papers have a distinctive build. Class 10 papers open with 24 compulsory one-mark
    objective items, and HSC Science papers begin with 50 multiple-choice questions answered on an OMR sheet before
    any written work starts. This guide sets out what the board publishes about those papers for the current
    academic year, how the streams divide in Standards 11 and 12, how GSEB differs from CBSE and ICSE in daily
    tuition, and how a home tutor in Ahmedabad can plan from Standard 9 to the HSC. Every paper detail below comes
    from gseb.org or the board's own e-service site; the board revises its designs, so check there before you rely
    on any number.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gjb-board">The board</a> ·
    <a href="#gjb-ssc">Standard 10 papers</a> ·
    <a href="#gjb-basic">Standard or Basic maths</a> ·
    <a href="#gjb-medium">Medium</a> ·
    <a href="#gjb-streams">Streams after SSC</a> ·
    <a href="#gjb-hsc">HSC Science papers</a> ·
    <a href="#gjb-after">After the result</a> ·
    <a href="#gjb-other">Versus CBSE and ICSE</a> ·
    <a href="#gjb-plan">A tutor's plan</a> ·
    <a href="#gjb-zones">Zones</a> ·
    <a href="#gjb-demo">The demo</a> ·
    <a href="#gjb-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gjb-board">What GSEB runs, and where families find it online</h2>
  <p>
    The board's portal at gseb.org is less a brochure than a switchboard. It carries separate links for the SSC
    (Standard 10), the HSC General Stream and the HSC Science stream, each with its own exam registration, hall
    ticket, result, supplementary ("purak") examination and marks-verification ("gunchakasani") service. Its result
    notices also name Vocational and Uttar Buniyadi streams at Standard 12, and a Sanskrit-medium result, so the
    board covers more than the two familiar HSC routes. Students outside regular school can register through GSOS,
    the Gujarat State Open School, for the Standard 10 and Standard 12 General examinations.
  </p>
  <p>
    Two resources on the portal matter most to a tutor. The first is the subject-wise question bank for Standards 9
    to 12, which schools download with their board index number; ask your child's school whether it shares it. The
    second is the set of question papers and model papers on the board's e-service site, listed separately for
    Standard 9, Standard 10, Standard 12 General and Standard 12 Science. A tutor planning from these, rather than
    from a guidebook, is working to the examiner's own shape.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gjb-ssc">How the board builds a Standard 10 paper</h2>
  <p>
    For the 2025-26 academic year the board circulated a question-paper design, its <em>pariroop</em>, for each
    main subject together with a sample paper. The core Standard 10 papers share one skeleton: three hours, 80
    marks, four sections.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Standard 10 maths paper design, 2025-26, as the board published it</caption>
    <thead>
      <tr><th scope="col">Section</th><th scope="col">Question type</th><th scope="col">Choice</th><th scope="col">Marks</th></tr>
    </thead>
    <tbody>
      <tr><td>A</td><td>One-mark objective items: multiple choice, true or false, fill in the blank, one-sentence answers, matching</td><td>All 24 compulsory</td><td>24</td></tr>
      <tr><td>B</td><td>Two-mark short answers</td><td>Any 9 of 13</td><td>18</td></tr>
      <tr><td>C</td><td>Three-mark short answers</td><td>Any 6 of 9</td><td>18</td></tr>
      <tr><td>D</td><td>Four-mark long answers</td><td>Any 5 of 8</td><td>20</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Science (subject 11) and Social Science (subject 10) are also three-hour, 80-mark papers that open with 24
    one-mark objective questions; the social science design adds word limits for the longer answers and a map
    question. English as a second language (subject 16) is built differently, with reading passages, grammar items
    and writing tasks.
  </p>
  <p>
    The design also shows what the board is testing. In Standard maths, about a third of the marks are for knowledge,
    just under a third for understanding, a quarter for application and a tenth for higher-order thinking. Section A
    can be won with steady revision; the four-mark questions in Section D, where a student picks five of eight, are
    where a tutor's practice with full written working pays off. Schools also enter internal and practical marks
    on the board's portal during the year, so those are worth keeping up. Our
    <a href="{{ url('/maths-home-tutor-ahmedabad') }}">maths home tutors in Ahmedabad</a> and
    <a href="{{ url('/science-home-tutor-ahmedabad') }}">science home tutors in Ahmedabad</a> pages go deeper into
    each subject.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gjb-basic">Mathematics Standard or Mathematics Basic?</h2>
  <p>
    GSEB offers two maths papers at Standard 10: Mathematics (Standard), subject 12, and Mathematics (Basic),
    subject 18. Both use the same four-section, 80-mark frame, so the difference lies in depth rather than
    format. Families often treat the choice as a formality and only discover later that it matters for Standard
    11. Before the school asks for the decision, talk it through with the class teacher, and if your child is
    leaning towards the Science stream with maths, confirm with the school what it requires. A tutor can help by
    giving an honest view, from a few weeks of work, of whether the Standard paper is within reach.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gjb-medium">Gujarati medium, English medium and the right terms</h2>
  <p>
    Schools on the Gujarat board teach in Gujarati, English and other media, and the board's own documents are
    written mainly in Gujarati. That has three effects on tuition in Ahmedabad.
  </p>
  <ul>
    <li><strong>Answers in the textbook's words.</strong> A Gujarati-medium student writes <em>ganit</em> and <em>vigyan</em> answers using the textbook's Gujarati terms. A tutor may explain an idea in whichever language works, but written practice must end in the words the examiner will read.</li>
    <li><strong>Switching medium later.</strong> Many students move to English-medium material in Standard 11 or for national entrances. A tutor who can bridge both sets of terms for a term or two saves a lot of confusion.</li>
    <li><strong>Entrance papers in three languages.</strong> The board's own engineering and pharmacy entrance, GUJCET, is offered in Gujarati, English and Hindi, so a student can stay in their medium for it. See our <a href="{{ url('/gujcet-tutor-ahmedabad') }}">GUJCET tutors in Ahmedabad</a> page.</li>
  </ul>
  <p>
    The language papers themselves are easy to neglect. If English as a second language is the weak paper, ask for a
    tutor who teaches the board's reading and grammar sections, not general conversation; our
    <a href="{{ url('/english-home-tutor-ahmedabad') }}">English home tutors in Ahmedabad</a> page covers this.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gjb-streams">Streams after the SSC</h2>
  <p>
    After Standard 10, most GSEB students choose between the Science stream and the General stream, which the board
    examines as two separate HSC examinations. Within Science, the board groups students as Group A (with
    mathematics), Group B (with biology) and Group AB (with both); that grouping later decides which GUJCET papers
    they sit.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Standard 12 subjects named in the board's 2025-26 paper designs</caption>
    <thead>
      <tr><th scope="col">Stream</th><th scope="col">Subjects listed</th><th scope="col">What a tutor is usually asked for</th></tr>
    </thead>
    <tbody>
      <tr><td>Science</td><td>Mathematics, Physics, Chemistry, Biology, English (second language)</td><td>Physics and maths for Group A; chemistry and biology for Group B; GUJCET alongside</td></tr>
      <tr><td>General</td><td>Economics, Organisation of Commerce and Management, Statistics, Psychology, Geography, Philosophy, English (second language)</td><td>Economics, statistics and commerce subjects for commerce students; the humanities subjects for arts students</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    That list covers only the subjects the board named in one circular, so treat it as a sample; the full subject
    list for each stream is on the board's site. For the General stream, our
    <a href="{{ url('/economics-home-tutor-ahmedabad') }}">economics</a> and
    <a href="{{ url('/accountancy-home-tutor-ahmedabad') }}">accountancy</a> pages for Ahmedabad will help, and our
    guide to <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a> sets out the
    trade-offs at the end of Standard 10.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gjb-hsc">How an HSC Science paper is put together</h2>
  <p>
    The board says that since June 2019 its schools teach Standard 12 physics, chemistry, biology and mathematics from
    NCERT textbooks. The paper built on them is very much GSEB's own, though.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Standard 12 Science: Mathematics (050) and Physics (054), 2025-26 design</caption>
    <thead>
      <tr><th scope="col">Part</th><th scope="col">What it contains</th><th scope="col">Marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Part A</td><td>50 multiple-choice questions of one mark each, answered on an OMR sheet; in the maths design, one hour</td><td>50</td></tr>
      <tr><td>Part B, Section A</td><td>Two-mark short answers: any 8 of 12</td><td>16</td></tr>
      <tr><td>Part B, Section B</td><td>Three-mark short answers: any 6 of 9</td><td>18</td></tr>
      <tr><td>Part B, Section C</td><td>Four-mark long answers: any 4 of 6</td><td>16</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The whole paper is three hours and 100 marks, and the maths design gives Part B two hours. Two numbers from the
    physics design deserve attention: only 12 of the 100 marks are set for pure recall, while 32 are for application
    and 26 for higher-order thinking. A student who learns derivations by heart and stops there is aiming at a small
    slice of the paper. The board also notes that chapter-wise marks can shift from the sample, but unit-wise marks
    should not, which is a useful guide for a revision timetable.
  </p>
  <p>
    Science students also sit a practical examination, for which the board issues its own hall ticket, with marks
    entered by schools and centres. The practical record and viva preparation should not be left to the final
    month. For subject help see our <a href="{{ url('/physics-home-tutor-ahmedabad') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-ahmedabad') }}">chemistry</a> and
    <a href="{{ url('/biology-home-tutor-ahmedabad') }}">biology</a> home tutor pages for Ahmedabad.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gjb-after">After the result: verification, OMR copies and the supplementary exam</h2>
  <p>
    Results are published on gseb.org and looked up by seat number. After that the board opens online applications
    for gunchakasani, its marks-verification service, for each examination, and for HSC Science also for a copy of
    the OMR sheet from Part A. A supplementary examination follows for SSC, HSC General and HSC Science students,
    with its own registration, hall ticket and verification round. The board issues a circular each year on
    verification, name corrections and re-appearing, so read the current one rather than last year's.
  </p>
  <p>
    For a tutor, the practical point is that a supplementary attempt is short notice. If your child may need one,
    keep the same tutor engaged through the result period instead of stopping the day the main exam ends.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gjb-other">How GSEB tuition differs from CBSE and ICSE tuition</h2>
  <ul>
    <li><strong>An objective opening.</strong> Every core Standard 10 paper starts with 24 compulsory one-mark items, and HSC Science starts with 50 OMR questions. CBSE and ICSE papers also have objective items, but GSEB students need to practise speed and OMR accuracy as a skill in its own right.</li>
    <li><strong>Choice inside sections.</strong> In both the Standard 10 and HSC designs, every written section offers more questions than the student must answer. Teaching a student to choose quickly and well is part of the job.</li>
    <li><strong>Medium.</strong> Gujarati-medium students write in Gujarati terms throughout; CBSE and ICSE students in Ahmedabad almost always write in English.</li>
    <li><strong>Shared books in Standard 12.</strong> Because Standard 12 science uses NCERT textbooks, a GSEB science student and a CBSE one study much of the same content, though the papers are set differently.</li>
    <li><strong>Open schooling.</strong> GSOS gives students outside regular school a route to the Standard 10 and Standard 12 General examinations.</li>
  </ul>
  <p>
    For other boards in the city, see our <a href="{{ url('/cbse-home-tutor-ahmedabad') }}">CBSE</a>,
    <a href="{{ url('/icse-home-tutor-ahmedabad') }}">ICSE and ISC</a>, <a href="{{ url('/ib-tutor-ahmedabad') }}">IB</a>
    and <a href="{{ url('/igcse-tutor-ahmedabad') }}">IGCSE</a> pages for Ahmedabad.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gjb-plan">A tutor's plan from Standard 9 to the HSC</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Where tuition time goes on the Gujarat board</caption>
    <thead>
      <tr><th scope="col">Standard</th><th scope="col">Focus</th><th scope="col">Usual rhythm</th></tr>
    </thead>
    <tbody>
      <tr><td>9</td><td>Algebra and geometry foundations, science diagrams, writing short answers to length; first use of the board's question bank</td><td>Two sessions a week</td></tr>
      <tr><td>10 (SSC)</td><td>Section A objective drills, four-mark answer practice, the Standard or Basic maths decision, timed three-hour papers in the second half of the year</td><td>Two or three a week</td></tr>
      <tr><td>11</td><td>The jump in physics and maths, or in accountancy and economics; settling a stream group (A, B or AB) and an entrance plan</td><td>One per hard subject</td></tr>
      <tr><td>12 (HSC)</td><td>OMR practice for Part A, Part B written answers, practicals, and GUJCET, JEE or NEET work kept in step with the board</td><td>Two per core subject in the final months</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Ahmedabad's year has one local fixture worth planning around: Uttarayan, the kite festival in mid-January, falls
    in the heaviest revision stretch. Fix extra sessions either side of it rather than expecting a normal week.
    Science students heading for engineering or pharmacy should read our <a href="{{ url('/gujcet-tutor-ahmedabad') }}">GUJCET</a>
    page with this one; for national entrances see <a href="{{ url('/jee-home-tutor-ahmedabad') }}">JEE</a> and
    <a href="{{ url('/neet-home-tutor-ahmedabad') }}">NEET</a> home tutors in Ahmedabad.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gjb-zones">Getting a Gujarat Board tutor to your home, zone by zone</h2>
  <p>
    A weekly tutor must be able to repeat the trip without strain, so we match on travel before anything else. From
    our zone notes:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/navrangpura-paldi-ellisbridge') }}">Navrangpura, Paldi and Ellisbridge</a>:</strong> {!! $gjbA('vasna', 'Vasna') !!} sits at the southern end of the Red Line, at APMC, so tutors from the north of the west bank can ride straight down.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/satellite-vastrapur-bodakdev') }}">Satellite, Vastrapur and Bodakdev</a>:</strong> {!! $gjbA('jodhpur', 'Jodhpur') !!} has no station; a BRTS route from the Shivranjani junction helps some tutors, and the rest come by two-wheeler.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/prahlad-nagar-bopal-shela') }}">Prahlad Nagar, Bopal and Shela</a>:</strong> no metro serves the corridor, so a tutor who already lives there is the reliable choice.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/naranpura-gota-chandkheda') }}">Naranpura, Gota and Chandkheda</a>:</strong> {!! $gjbA('ghatlodia', 'Ghatlodia') !!} has no station; tutors ride the Blue Line to Gurukul Road or Thaltej and finish by auto, or come by two-wheeler.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/maninagar-isanpur-kankaria') }}">Maninagar, Isanpur and Kankaria</a>:</strong> {!! $gjbA('isanpur', 'Isanpur') !!} is served by Maninagar and Vatva railway stations, and its low-rise blocks rarely hold a tutor up at the gate.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/nikol-naroda-bapunagar') }}">Nikol, Naroda and Bapunagar</a>:</strong> {!! $gjbA('odhav', 'Odhav') !!} is reached along Odhav Road from the Amraiwadi metro stations; avoid industrial shift-change times.</li>
    <li><strong><a href="{{ url('/city/ahmedabad/zone/shahibaug-asarwa-meghaninagar') }}">Shahibaug, Asarwa and Meghaninagar</a>:</strong> {!! $gjbA('meghaninagar', 'Meghaninagar') !!} has no metro stop; Asarva railway station and an auto, or a two-wheeler, bring tutors in.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/west-ahmedabad-tuition-guide') }}">West Ahmedabad</a> and
    <a href="{{ url('/blog/east-ahmedabad-tuition-guide') }}">East Ahmedabad</a> tuition guides go into each zone in
    more detail, and every locality is listed on our <a href="{{ url('/city/ahmedabad') }}">Ahmedabad tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gjb-mode">Home, online or a mix for GSEB subjects?</h2>
  <p>
    For Standard 10, a tutor at the table can watch a geometry construction or a labelled science diagram take shape
    and correct it before the habit sets, which suits the board's written sections. OMR practice and timed Section A
    drills, on the other hand, run perfectly well online. In Standards 11 and 12, when school, practicals and perhaps
    coaching fill the day, one home session plus a shorter online one each week is often the arrangement that
    survives. Our comparison of <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring</a>
    weighs the options.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gjb-demo">What to ask at a Gujarat Board demo</h2>
  <ol>
    <li><strong>Which papers have you taught?</strong> SSC, HSC Science or HSC General, and which subjects. A strong HSC physics tutor is not automatically the right SSC science tutor.</li>
    <li><strong>Can you work in my child's medium?</strong> Ask for one answer written out in the textbook's own terms.</li>
    <li><strong>Show me the current design.</strong> A tutor who knows this year's <em>pariroop</em> can tell you how many questions each section has and how much choice there is.</li>
    <li><strong>How will you train the objective part?</strong> For HSC Science, ask how Part A OMR practice fits into the week.</li>
    <li><strong>Practicals and internal marks.</strong> Records and projects should be guided, never written for the student.</li>
    <li><strong>The route.</strong> Which station or road, and what happens in Uttarayan week or on an exam-season Saturday.</li>
  </ol>
  <p>
    We send two or three matched tutors and show each fee before the demo; the first class is free and switching
    tutor later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>
    before their profile is marked Verified. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class
    checklist</a> has more questions to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gjb-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. The
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our post on
    <a href="{{ url('/blog/home-tuition-fees-ahmedabad') }}">home tuition fees in Ahmedabad</a> explain what moves
    the figure.
  </p>
  <p>
    Tell us the standard, the stream and group, the medium, your locality and nearest crossroads or station, and the
    slots that suit you; the first class is a <a href="{{ url('/demo-class') }}">free demo</a>. You can also browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>, or, if you teach Gujarat Board subjects, see
    <a href="{{ url('/tuition-jobs/ahmedabad') }}">tuition jobs in Ahmedabad</a>.
  </p>
  </section>

  </div>
</article>
