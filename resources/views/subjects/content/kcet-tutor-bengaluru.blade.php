{{--
  Exam page: "KCET tutor Bengaluru" (Karnataka CET / UGCET, PCM and PCB).
  Author: nxtutors (NXTutors Academic Team). No school, college, coaching,
  society or people names. No candidate numbers, ranks, cut-offs or dates
  beyond what the current official bulletin states (and none of those are
  repeated here). Written by the city authority page writer, 2 Oct 2026.

  Official source: Karnataka Examinations Authority (KEA). kea.kar.nic.in
  did not respond on 2 Oct 2026; KEA's portal at
  cetonline.karnataka.gov.in/kea/ (titled "KEA - Karnataka Examinations
  Authority", which the bulletin itself names as the KEA website) was used.
  - cetonline.karnataka.gov.in/keawebentry456/ugcet2026/
    information_bulletin_1_ugcet_2026_17012026english.pdf (UGCET-2026
    Information Bulletin-1, 16/17-01-2026), read 2 Oct 2026:
    CET conducted by KEA, Bangalore; Karnataka qualifying-exam candidates
    write CET in a centre in the district where they studied 2nd PUC / 12th;
    test on two days in four sessions, Physics and Chemistry on day one,
    Mathematics and Biology on day two; each paper 60 marks, 80 minutes,
    multiple choice, four options, one mark each, no choice of questions, no
    negative marking, no marks for multiple answers; question paper versions;
    OMR sheets, blue or black ballpoint pen; first ten minutes for the top
    portion of the OMR sheet, next 70 minutes for shading 60 answers.
    Subjects by course: Engineering/Technology PCM; Farm Science PCMB;
    B.V.Sc & AH, Naturopathy & Yoga and B.Sc (Nursing) PCB; B.Pharm, 2nd year
    B.Pharm, Pharm-D PCM or PCB; Medical/Dental/AYUSH through NEET (UGNEET)
    and Architecture through NATA, but candidates must register with KEA;
    BPT, B.Sc Allied Health Sciences, BPO and D.Pharm selection on PU marks
    with KEA registration. Engineering eligibility: pass 2nd PUC/12th with
    English as a language, Physics and Mathematics compulsory with Chemistry
    / Bio-Technology / Biology / Electronics / Computer Science, aggregate 45%
    in the optional subjects (40% for SC, ST, Category-I and OBC); substitution
    for Chemistry for eligibility only. Engineering rank list from PCM marks
    in CET and the qualifying examination in equal proportions; farm science
    from PCMB in CET and QE in equal proportions; B.V.Sc & AH on CET PCB only;
    B.Pharm and Pharm-D on CET PCM or PCB, whichever is higher. Syllabus:
    subject experts of the Department of School Education (Pre-University)
    reviewed the PCMB syllabus of 1st and 2nd PUC and the CET-2026 syllabus
    was published on the KEA website. Name on the SSLC marks card must match
    other documents. Kannada Language Test for Horanadu and Gadinadu
    Kannadiga candidates claiming government seats, minimum 12 of 50.
  - cetonline.karnataka.gov.in/kea/ugcet2026 (UGCET-2026 page): key answers
    by subject and a revised key, result links, Kannada language test marks,
    online seat allotment brochure, mock and real allotment rounds,
    cut-off rank and cut-off analyser pages (no figures used).
  - PU and board material from pue.karnataka.gov.in and
    dpue-exam.karnataka.gov.in (II PUC student corner: MCQ sets for science
    students for the entrance exam; II PUC blueprints and model papers;
    Jnana Taranga classes for CET and NEET), as cited in
    karnataka-board-tutor-bengaluru.
  Local detail only from areas/bengaluru-research.json, bengaluru-zone-
  guides.json and the Bengaluru hub view. Area links render only for active
  Bengaluru areas. Fee wording is the approved sentence. FAQs render from
  faqs/kcet-tutor-bengaluru.php.
--}}
@php
  $kcSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $kcA = function (string $slug, string $label) use ($kcSlugs) {
      return in_array($slug, $kcSlugs, true)
          ? '<a href="' . e(url('/city/bengaluru/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="kcGuideTitle">
  <h2 id="kcGuideTitle">KCET tutors in Bengaluru: four 60-mark papers, a rank shared with II PUC, and how to prepare</h2>

  <p class="nx-guide__lede">
    KCET, which the Karnataka Examinations Authority (KEA) calls the Common Entrance Test or UGCET, is the state's own
    route into engineering, farm science, pharmacy, veterinary and several other degrees. It is a pen-and-OMR test of
    four separate papers, physics, chemistry, mathematics and biology, each with 60 one-mark questions and no negative
    marking. What makes it unusual is how ranks are built: for engineering, KEA combines CET marks with the physics,
    chemistry and maths marks from II PUC or Class 12 in equal shares. This page explains the test as KEA's 2026
    information bulletin describes it, how the rank rule changes what a home tutor should do in the two PU years, and
    how to find a tutor in Bengaluru who can keep board answers, CET speed and perhaps JEE or NEET moving together.
    KEA issues a new bulletin for each year's test, so confirm every rule against the latest one on its website.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kc-courses">Courses and subjects</a> ·
    <a href="#kc-paper">The papers</a> ·
    <a href="#kc-rank">How ranks are made</a> ·
    <a href="#kc-syllabus">Syllabus</a> ·
    <a href="#kc-compare">PUC, JEE and NEET</a> ·
    <a href="#kc-boards">CBSE and ICSE students</a> ·
    <a href="#kc-plan">Two-year plan</a> ·
    <a href="#kc-leaks">Where marks leak</a> ·
    <a href="#kc-zones">Zones and travel</a> ·
    <a href="#kc-demo">The demo</a> ·
    <a href="#kc-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kc-courses">Which courses use the CET, and which subjects to sit</h2>
  <p>
    One application to KEA covers many professional courses, but the subjects a student must write depend on the
    course. The 2026 bulletin sets it out like this:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CET subjects by course in KEA's 2026 bulletin</caption>
    <thead>
      <tr><th scope="col">Course group</th><th scope="col">CET papers to write</th></tr>
    </thead>
    <tbody>
      <tr><td>Engineering and technology (B.E./B.Tech)</td><td>Physics, Chemistry, Mathematics</td></tr>
      <tr><td>Farm science (agriculture, sericulture, horticulture and related degrees)</td><td>Physics, Chemistry, Mathematics, Biology</td></tr>
      <tr><td>Veterinary science, naturopathy and yoga, B.Sc nursing</td><td>Physics, Chemistry, Biology</td></tr>
      <tr><td>B.Pharm and Pharm-D</td><td>PCM or PCB</td></tr>
      <tr><td>Medical, dental and AYUSH</td><td>None at KEA: admission uses NEET, but students must still register with KEA</td></tr>
      <tr><td>Architecture</td><td>None at KEA: NATA scores are used, again with KEA registration</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A few allied health and diploma-level courses select on PU marks alone, yet still need the KEA application. The
    practical lesson for families is simple: a student heading for NEET must still register with KEA to take part in its counselling, and a student
    unsure between engineering and biology-based courses can sit all four papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kc-paper">How each CET paper works</h2>
  <p>
    The test runs over two days in four sessions: physics and chemistry on the first day, mathematics and biology on
    the second. Students whose qualifying examination is in Karnataka write it at a centre in the district where they studied II PUC or Class 12.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Each CET paper, per KEA's 2026 bulletin</caption>
    <thead>
      <tr><th scope="col">Feature</th><th scope="col">Rule</th></tr>
    </thead>
    <tbody>
      <tr><td>Questions and marks</td><td>60 multiple-choice questions, one mark each, 60 marks; every question to be attempted, no choice</td></tr>
      <tr><td>Time</td><td>80 minutes: the first ten for filling in the upper part of the OMR sheet, then 70 minutes for answers</td></tr>
      <tr><td>Wrong answers</td><td>No negative marking; shading more than one option scores nothing</td></tr>
      <tr><td>Answer sheet</td><td>OMR sheet shaded with a blue or black ballpoint pen; the question booklet's version code must be written and shaded correctly</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Some quick arithmetic shapes the coaching. Seventy minutes for 60 questions is a little over a minute each, in
    every subject, including mathematics, where each question still carries a single mark. A student who writes
    beautiful step-by-step II PUC answers can run out of time here unless speed is practised separately. Because
    nothing is deducted for a wrong answer, no circle should be left empty at the end, and because the OMR sheet is
    machine-read, a stray mark or a wrongly shaded version code is a real risk. KEA hosts a specimen OMR sheet on its
    site; a tutor should have students practise on printed copies of it, not just on screen tests.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kc-rank">How ranks are made, and why II PUC marks count</h2>
  <p>
    This is the part of KCET most families underestimate. KEA does not rank engineering candidates on the CET alone.
  </p>
  <ul>
    <li><strong>Engineering:</strong> the rank list uses physics, chemistry and maths marks from both the CET and the qualifying examination, taken in equal proportions.</li>
    <li><strong>Farm science:</strong> the same idea with all four subjects, PCMB, from the CET and the qualifying examination in equal proportions.</li>
    <li><strong>Veterinary science:</strong> ranked on CET physics, chemistry and biology only.</li>
    <li><strong>B.Pharm and Pharm-D:</strong> ranked on CET PCM or PCB marks, whichever is higher.</li>
  </ul>
  <p>
    There is also an eligibility floor for engineering: a pass in II PUC or Class 12 with English as one of the
    languages, physics and maths as compulsory subjects alongside chemistry or another listed science, and at least
    45% in aggregate in those optional subjects (40% for SC, ST, Category-I and OBC candidates). In plain terms, a
    weak board result costs a student twice: once in eligibility and again in half the rank. A KCET tutor who
    ignores the II PUC paper is not doing the job. Our <a href="{{ url('/karnataka-board-tutor-bengaluru') }}">Karnataka
    Board tutors in Bengaluru</a> page covers how II PUC papers are built.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kc-syllabus">What the syllabus covers</h2>
  <p>
    KEA's bulletin says the CET syllabus was settled after subject experts from the Department of School Education
    (Pre-University) reviewed the physics, chemistry, maths and biology syllabus taught in I PUC and II PUC, and the
    resulting CET syllabus is published on KEA's site. Two consequences for planning:
  </p>
  <ol>
    <li><strong>I PUC is examinable.</strong> Chapters that never appear in the II PUC board paper can still appear in the CET, so a student who treats I PUC as a rest year pays for it later.</li>
    <li><strong>The source is the PU syllabus.</strong> State board students are studying the right content already; the gap is usually speed and multiple-choice technique. CBSE and ISC students should compare the published CET syllabus with their own books chapter by chapter.</li>
  </ol>
  <p>
    The board itself now publishes sets of multiple-choice questions for I and II PUC science students preparing for
    the entrance test, and the PU department runs recorded classes for CET and NEET. A good tutor will fold these free
    official resources into the plan rather than replacing them with a thick private question bank.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kc-compare">How KCET sits beside II PUC, JEE and NEET</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Same subjects, different demands</caption>
    <thead>
      <tr><th scope="col"></th><th scope="col">II PUC (KSEAB)</th><th scope="col">KCET (KEA)</th><th scope="col">JEE Main / NEET (NTA)</th></tr>
    </thead>
    <tbody>
      <tr><td>Answer style</td><td>Written answers, derivations, diagrams, numericals with working; practicals and a record</td><td>Multiple choice on an OMR sheet, one mark each, no negative marking</td><td>Objective questions under NTA's own pattern and marking rules</td></tr>
      <tr><td>Content base</td><td>PU textbooks and the board's blueprint</td><td>PU syllabus for I and II PUC as reviewed for the CET</td><td>NTA's published syllabus</td></tr>
      <tr><td>What it decides</td><td>The PU result, and half the engineering CET rank</td><td>State engineering, farm science, pharmacy and other admissions</td><td>National engineering or medical admissions</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For most science students in Bengaluru the realistic plan is one set of chapters taught deeply, then practised in
    three styles: written board answers, quick one-mark CET questions, and, for those also aiming at national tests,
    harder <a href="{{ url('/jee-home-tutor-bengaluru') }}">JEE</a> or <a href="{{ url('/neet-home-tutor-bengaluru') }}">NEET</a>
    problems. Students preparing seriously for JEE or NEET often find CET questions manageable once they have
    practised the pace; the reverse does not hold.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kc-boards">CBSE, ICSE and ISC students taking KCET</h2>
  <p>
    The CET is not only for state board students. The bulletin treats II PUC and Class 12 alike as the
    qualifying examination, so CBSE and ISC marks feed the rank in the same way. What changes is the preparation:
    those students should check the CET syllabus against their own course, practise OMR shading, and remember that
    their Class 12 board marks still carry half the engineering rank. Documents matter too: the bulletin asks
    candidates to make sure the name on the SSLC or Class 10 marks card matches every other certificate, and it sets
    out a separate Kannada language test for some candidates claiming government seats under particular clauses.
    Read the eligibility clauses that apply to your child on KEA's site. See our
    <a href="{{ url('/cbse-home-tutor-bengaluru') }}">CBSE</a> and <a href="{{ url('/icse-home-tutor-bengaluru') }}">ICSE
    and ISC</a> pages for Bengaluru for the board side.
  </p>
  </section>


  <section class="nx-guide__sec">
  <h2 id="kc-plan">Two PU years, planned around one rank</h2>
  <ol>
    <li><strong>I PUC: understand first, then add the clock.</strong> Each chapter is taught for meaning and closed with ten one-mark questions under time. The tutor keeps a running list of I PUC chapters to bring back during II PUC.</li>
    <li><strong>II PUC, first term: one chapter, three formats.</strong> A written set in the board's style, a timed CET set and, for students who need it, a handful of JEE or NEET problems on the same topic every week.</li>
    <li><strong>Run-up to the board exam: II PUC comes first.</strong> Blueprint-length papers, the practical record and viva take priority; CET drills shrink to twenty minutes a session but never stop.</li>
    <li><strong>Between the board exam and the CET: full papers on paper.</strong> Sixty questions, ten minutes of particulars, seventy of answers, version code shaded every time; afterwards, a log of minutes spent per question as well as errors.</li>
    <li><strong>Mock days that copy the real ones.</strong> Physics with chemistry on one day, maths with biology on the next, at the same times of day if possible.</li>
  </ol>
  <p>
    Our topic guides for <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics</a>,
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE chemistry</a> and
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET biology</a> overlap heavily with CET chapters. If one
    subject is the weak link, a specialist from our <a href="{{ url('/maths-home-tutor-bengaluru') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-bengaluru') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-bengaluru') }}">chemistry</a> or
    <a href="{{ url('/biology-home-tutor-bengaluru') }}">biology</a> pages for Bengaluru can work alongside.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kc-leaks">Where CET marks quietly leak</h2>
  <p>
    Most lost marks in an objective test are not about knowledge. A tutor reviewing a mock paper should sort every
    lost mark into one of these piles, because each has a different fix:
  </p>
  <ul>
    <li><strong>Time spent on one question.</strong> At just over a minute a question, a three-minute struggle costs two other answers. The fix is a rule: mark it, move on, come back.</li>
    <li><strong>Board habits in the wrong place.</strong> Writing a full derivation for a one-mark question is right in II PUC and wrong in the CET. Students need to recognise which paper they are in.</li>
    <li><strong>OMR errors.</strong> A wrong version code, two circles shaded, or a stray pen mark can each cost marks with nothing to show for the work. Printed practice sheets build the habit.</li>
    <li><strong>I PUC gaps.</strong> Chapters last seen a year ago appear in the paper; the tutor's revisit list exists for exactly this.</li>
    <li><strong>Blanks at the end.</strong> With no negative marking, an empty circle is the only certain zero.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kc-zones">Which tutors can reach which part of the city</h2>
  <p>
    A PU science student's week is already full of college hours and travel, so we look for a tutor whose own journey
    is short and repeatable. Notes from our area research:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/bengaluru/zone/vijayanagar-rr-nagar-kengeri') }}">Vijayanagar, RR Nagar and Kengeri</a>:</strong> {!! $kcA('kengeri', 'Kengeri') !!} has several Purple Line stations and a railway station beside the metro, so tutors from Vijayanagar or RR Nagar can skip most of the Mysore Road traffic.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/btm-bannerghatta-road-electronic-city') }}">BTM, Bannerghatta Road and Electronic City</a>:</strong> {!! $kcA('bommanahalli', 'Bommanahalli') !!} got its own Yellow Line station in August 2025; tutors from BTM, HSR or Begur ride in and take a short auto, which beats Hosur Road in the evening.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/malleshwaram-rajajinagar-yeshwanthpur') }}">Malleshwaram, Rajajinagar and Yeshwanthpur</a>:</strong> {!! $kcA('yeshwanthpur', 'Yeshwanthpur') !!}'s Green Line station faces the railway junction on Tumkur Road; a slightly later weekday slot misses the worst of the peak.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/hebbal-rt-nagar-yelahanka') }}">Hebbal, RT Nagar and Yelahanka</a>:</strong> {!! $kcA('hebbal', 'Hebbal') !!} has no metro yet, and airport and office traffic funnels through the flyover, so a tutor living on your side of it is the reliable choice.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/frazer-town-richmond-town-ulsoor') }}">Frazer Town, Richmond Town and Ulsoor</a>:</strong> {!! $kcA('cooke-town', 'Cooke Town') !!} waits for the Pink Line's Pottery Town station, so tutors come by road or by Purple Line and auto; an early slot helps.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/whitefield-marathahalli-kr-puram') }}">Whitefield, Marathahalli and KR Puram</a>:</strong> {!! $kcA('mahadevapura', 'Mahadevapura') !!} is served by Singayyanapalya station on the Purple Line; most families live in societies that register visitors, and some ask for photo ID on the first visit.</li>
  </ul>
  <p>
    <a href="{{ url('/city/bengaluru/zone/koramangala-hsr-bellandur') }}">Koramangala, HSR and Bellandur</a>,
    <a href="{{ url('/city/bengaluru/zone/jayanagar-jp-nagar-banashankari') }}">Jayanagar, JP Nagar and Banashankari</a>,
    <a href="{{ url('/city/bengaluru/zone/indiranagar-old-airport-road') }}">Indiranagar and Old Airport Road</a> and
    <a href="{{ url('/city/bengaluru/zone/hennur-kalyan-nagar-banaswadi') }}">Hennur, Kalyan Nagar and Banaswadi</a> each
    have a zone page too. On evenings when college overruns, moving that day's session online with the same tutor is
    better than cancelling it; the guide to <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online and offline
    tutoring</a> explains the trade-off.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kc-demo">Six questions for a KCET demo</h2>
  <ol>
    <li><strong>Does the tutor know this year's rules?</strong> Questions per paper, minutes, and how the engineering rank blends CET and board marks. A vague answer tells you a lot.</li>
    <li><strong>Can they run a mini-mock?</strong> Ten questions in roughly twelve minutes, followed by a review of the slowest ones rather than only the wrong ones.</li>
    <li><strong>How will the board paper be protected?</strong> Listen for a plan for II PUC written answers and the practical record, not only MCQs.</li>
    <li><strong>What changes for PCM, PCB or both?</strong> And, if JEE or NEET is in the picture, where that extra work sits in the week.</li>
    <li><strong>Will there be printed OMR practice?</strong> Screen quizzes alone do not train shading.</li>
    <li><strong>What is the journey?</strong> The route, the time it takes, and what happens on a day it fails.</li>
  </ol>
  <p>
    You receive two or three matched profiles, each with the tutor's fee visible before you book; the demo costs
    nothing, and so does changing tutor later. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live. For a longer list, see the
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">parents' demo checklist</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kc-fees">Fees, and what to send us</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. The
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our note on
    <a href="{{ url('/blog/home-tuition-fees-bengaluru') }}">home tuition fees in Bengaluru</a> explain what moves the figure.
  </p>
  <p>
    Send the PU year, board, CET subjects (PCM, PCB or all four), whether JEE or NEET is also planned, your locality
    and the hours you have free, and book the <a href="{{ url('/demo-class') }}">free demo class</a>. You can look
    through <a href="{{ url('/tutors') }}">tutor profiles</a> first or start from the
    <a href="{{ url('/city/bengaluru') }}">Bengaluru tutors page</a>; tutors can find openings under
    <a href="{{ url('/tuition-jobs/bengaluru') }}">tuition jobs in Bengaluru</a>.
  </p>
  </section>

  </div>
</article>
