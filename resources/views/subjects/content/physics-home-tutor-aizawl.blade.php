{{--
  Long-form guide for the "physics home tutor Aizawl" page (Classes 11 and 12:
  MBSE HSSLC, CBSE, ISC/IB/IGCSE, with JEE and NEET alongside).
  Byline in config: NXTutors Academic Team. Page writer (capitals wave 2,
  subjects), 3 Oct 2026. Local facts come only from
  database/seo-content/areas/aizawl-research.json.
  MBSE facts only from mbse.edu.in (read 3 Oct 2026):
  - https://www.mbse.edu.in/question-design-and-scheme-of-examination-sr-secondary-schools/
    -> https://www.mbse.edu.in/wp-content/uploads/2024/08/HSS-Scheme-of-Examination-Question-Design-wef-2025.pdf :
    notice of 31 May 2024, HSSLC 2025 onwards. Subjects with practicals carry
    70 theory + 10 practical; pass needs 33% in each theory and practical
    paper and the aggregate. Physics (Theory) Class XII: 70 marks, 3 hours,
    30 questions (14 objective x1, 7 short answer I x2, 6 short answer II
    x4, 3 long answer x6); units: Electrostatics 10, Current electricity 7,
    Magnetic effects of current and magnetism 9, Electromagnetic induction
    and AC 9, Electromagnetic waves 3, Optics 15, Dual nature 4, Atoms and
    nuclei 8, Electronic devices 5; numericals 18-21 marks in total; internal
    choice in three 4-mark and two 6-mark questions; objectives 50% remember
    and understand, 30% apply, 20% HOTS. Practical Class XII: 10 marks,
    2 hours, one experiment 8, viva voce 2. Class XI has the same question
    pattern.
  - https://www.mbse.edu.in/wp-content/uploads/2025/12/HSS-Textbook-List-2026-2027-1.pdf :
    Physics Part I and Part II (NCERT) on the 2026-27 list for Class XI and
    XII, with other reference titles and a practical book.
  - https://www.mbse.edu.in/previous-years-question-papers-hsslc/ : HSSLC
    Science papers 2021-2025.
  Other exam facts reuse the checked statements in database/seo-content/blog:
  cbse-class-12-physics-strategies, jee-preparation-gurgaon-coaching-or-home-tutor,
  neet-preparation-gurgaon-coaching-or-home-tutor and -ib-physics-slhl-iaee.
  No coaching institute, school, college, university, hospital, stadium,
  society or people's names, no distances or travel times, only the allowed
  fee sentence. Weather is timing advice only.

  Area links render only when that Aizawl area page exists and is active.
--}}
@php
  $azAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $azA = function (string $slug, string $label) use ($azAreaSlugs) {
      return in_array($slug, $azAreaSlugs, true)
          ? '<a href="' . e(url('/city/aizawl/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide azp-guide" aria-labelledby="azpGuideTitle">
  <h2 id="azpGuideTitle">Physics home tutor in Aizawl: from the HSSLC paper to JEE and NEET</h2>

  <p class="nx-guide__lede">
    Senior physics rarely goes wrong all at once. A student follows the lesson, nods at the derivation, and then
    stalls on the second line of a numerical at home. A good physics tutor sits beside that stall, finds the exact
    step that breaks, and repairs it before the next chapter builds on it. In Aizawl the right tutor also depends on
    the paper ahead: the Mizoram board's HSSLC, CBSE, ISC or an international course, often with JEE or NEET in view.
    NXTutors suggests two or three physics tutors who know that paper and can reach your locality on the hill. Fees
    are shown before you meet anyone, and the first lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#azp-target">The main target</a> ·
    <a href="#azp-hsslc">HSSLC physics</a> ·
    <a href="#azp-cbse">CBSE Class 12</a> ·
    <a href="#azp-lab">Practicals</a> ·
    <a href="#azp-numericals">Numericals</a> ·
    <a href="#azp-other">ISC, IB, IGCSE</a> ·
    <a href="#azp-places">Five localities</a> ·
    <a href="#azp-fees">Fees</a> ·
    <a href="#azp-ask">Asking us</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="azp-target">Board paper first, or the entrance exam?</h2>
  <p>
    Most chapters are shared, but each exam rewards a different kind of answer, so the first conversation with a
    tutor should settle which paper leads.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Four physics papers an Aizawl student in Class 11 or 12 may be preparing for</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">Shape</th><th scope="col">What it rewards</th></tr>
    </thead>
    <tbody>
      <tr><td>MBSE HSSLC (Class 12)</td><td>70-mark theory paper of 30 questions in three hours, plus a 10-mark practical</td><td>Complete written answers, with 18 to 21 theory marks set aside for numericals</td></tr>
      <tr><td>CBSE Class 12</td><td>70 marks of theory, 30 of practical work</td><td>Full derivations, neat diagrams, careful reading of case passages</td></tr>
      <tr><td>JEE Main</td><td>In 2026, physics gave 25 of 75 questions, five of them numerical-answer; +4 for right, −1 for wrong</td><td>Speed and accuracy on linked, multi-step problems</td></tr>
      <tr><td>NEET (UG)</td><td>In 2026, physics was 45 questions (180 marks) of a 720-mark pen-and-paper test, marked the same way</td><td>Exact NCERT knowledge and disciplined guessing</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For JEE Advanced 2026, only the 2,50,000 highest-ranked JEE Main candidates were eligible. NTA publishes the
    entrance syllabi itself, and they can include topics a board has trimmed, so check its latest bulletin on
    nta.ac.in. The <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics topic-wise plan</a> and the
    <a href="{{ url('/blog/-neet-physics-highyield') }}">high-yield NEET physics chapters</a> help set priorities, and
    our <a href="{{ url('/physics-home-tutor/jee') }}">JEE</a> and <a href="{{ url('/physics-home-tutor/neet') }}">NEET</a>
    physics pages explain the matching.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azp-hsslc">MBSE HSSLC physics: what the board's design sets out</h2>
  <p>
    The Mizoram Board of School Education issued its current Higher Secondary question designs for the 2025 examinations
    and later, and published them on mbse.edu.in. For Class 12 physics the theory paper is three hours and 70 marks
    over 30 questions: 14 objective questions of one mark, seven short answers of two, six of four and three long
    answers of six. Internal choices appear in three of the four-mark questions and two of the six-mark ones. Half the
    marks test remembering and understanding, 30% application and 20% higher-order thinking. NCERT's Physics Part I
    and Part II are on the board's 2026-27 book list, alongside other titles.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>MBSE Class 12 physics theory: marks by unit in the 2025 design</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Tutor's emphasis</th></tr>
    </thead>
    <tbody>
      <tr><td>Optics</td><td>15</td><td>Ray diagrams drawn to rule, sign convention used the same way every time</td></tr>
      <tr><td>Electrostatics</td><td>10</td><td>Field and potential pictured before any formula</td></tr>
      <tr><td>Magnetic effects of current and magnetism</td><td>9</td><td>Direction rules practised with the hand, not only memorised</td></tr>
      <tr><td>Electromagnetic induction and alternating current</td><td>9</td><td>Phasor sketches and the meaning of each quantity</td></tr>
      <tr><td>Atoms and nuclei</td><td>8</td><td>Short numericals on energy levels and decay, units checked</td></tr>
      <tr><td>Current electricity</td><td>7</td><td>Circuit reduction step by step, with a labelled diagram</td></tr>
      <tr><td>Electronic devices</td><td>5</td><td>Characteristic graphs and what each region shows</td></tr>
      <tr><td>Dual nature of matter</td><td>4</td><td>Photoelectric equations with the right units</td></tr>
      <tr><td>Electromagnetic waves</td><td>3</td><td>The spectrum in order, with one use for each band</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Electricity and magnetism together make up 35 of the 70 marks, and optics another 15, so a tutor who reaches
    optics only in January is leaving too little time for a fifth of the paper. The design also notes that numericals
    carry between 18 and 21 marks in total. Past HSSLC science papers from 2021 to 2025 are on the board's site, and
    our <a href="{{ url('/mizoram-board-tutor-aizawl') }}">Mizoram Board tutor in Aizawl</a> page covers every subject
    on the board.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azp-cbse">CBSE Class 12 physics: four marking blocks</h2>
  <p>
    The 2026-27 sample paper repeats last session's design. Fourteen NCERT chapters fall into four blocks:
    electricity and magnetism up to alternating current for 33 marks, optics with electromagnetic waves for 18, modern
    physics (dual nature, atoms and nuclei) for 12, and semiconductors for 7, now without transistors or logic gates.
    The paper has 33 questions: 16 of one mark, 12 multiple-choice and the rest assertion–reason; five of two marks;
    seven of three; two four-mark case-based questions; and three five-mark long answers. Only about 38% of marks
    reward recall, constants are supplied and calculators are not allowed. CBSE will publish the 2027 dates on
    cbse.gov.in. Our <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a>
    list the derivations that recur, and the <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics</a>
    page has a year plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azp-lab">Practicals on the two boards</h2>
  <p>
    The weight of practical work is one of the clearest differences between the boards, and it should change how a
    tutor spends the year.
  </p>
  <ul>
    <li><strong>MBSE:</strong> a 10-mark practical examination of two hours: one experiment, chosen from either section of the list, for 8 marks, and a viva for 2. The candidate must pass theory and practical separately, with at least 33% in each.</li>
    <li><strong>CBSE:</strong> 30 marks, of which two experiments bring 7 each, the viva 5, the record 5, and an activity and the investigatory project 3 each. The file must hold at least eight experiments and six activities, half from each section, plus the project report.</li>
  </ul>
  <p>
    No laboratory is needed at home. For an MBSE student, the tutor rehearses the aim, circuit or ray diagram,
    observation table and sources of error for each listed experiment until the student can talk through them
    aloud, which is exactly what the viva tests. For a CBSE student, the tutor reads the file entry by entry and
    holds an occasional mock viva well before the board season.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azp-numericals">Fixing numericals: the notebook method</h2>
  <p>
    Whether the target is the HSSLC paper or a JEE mock, the same weakness turns up: numericals that start well and
    collapse midway. A simple routine, kept every week, fixes most of it:
  </p>
  <ol>
    <li><strong>Keep the failed attempt.</strong> Copy the question into an errors notebook and leave the original working untouched.</li>
    <li><strong>Name the fault in one line.</strong> Wrong principle, wrong sign, lost unit, algebra slip or a misread question.</li>
    <li><strong>Redo it a few days later,</strong> starting with a sketch and marked directions, then the principle in words, then numbers with units.</li>
    <li><strong>End with a sense check:</strong> is the answer's size and sign believable?</li>
  </ol>
  <p>
    For a student who attends an entrance batch, the home tutor should not reteach the batch's chapter. The better use
    of the hour is clearing the pile of unsolved coaching problems, writing one board-style long answer that gets
    marked, and reviewing the last mock test question by question. Bring the errors notebook or two recent tests to
    the free demo and watch how quickly the tutor finds the weak step. Our articles on coaching or a home tutor for
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">JEE</a> and for
    <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">NEET</a> weigh the options.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azp-other">ISC, IB and IGCSE physics, and when to start</h2>
  <p>
    <strong>ISC</strong> pairs theory with assessed practical and project work and expects reasoning set out as a
    chain; check that the tutor knows the syllabus for your child's exam year. <strong>IB Diploma</strong> physics has
    followed a new guide since May 2025, built around five themes; exams make up 80% of the grade and a
    student-designed investigation the other 20%, with 150 teaching hours at SL and 240 at HL. Read our
    <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">guide to IB physics SL and HL</a>. <strong>IGCSE</strong> is
    entered at Core or Extended, and a student moving to an Indian board for Class 11 often needs work on vectors and
    graphs. Specialists for these courses are fewer, so name yours early. As for timing, the first term of Class 11
    is the easiest moment to fix physics, because mechanics lays down tools that return throughout Class 12; see the
    <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11 physics</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azp-places">Evening physics in five Aizawl localities</h2>
  <p>
    Senior students often reach home late, so physics drifts into the evening, and whether that slot holds depends on
    the tutor's route around the hills. Browse tutors locality by locality on our
    <a href="{{ url('/city/aizawl') }}">Aizawl page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Evening physics lessons in five Aizawl localities: homes, likely tutors and a timing note</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Homes</th><th scope="col">Nearest tutor pool</th><th scope="col">Timing note</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $azA('bawngkawn', 'Bawngkawn') !!}</td><td>Multi-storey buildings on the slopes; some entered below road level</td><td>Durtlang, Chaltlang, Ramhlun or Zemabawk</td><td>Junctions crowd at office hours; start after the evening rush</td></tr>
      <tr><td>{!! $azA('chanmari', 'Chanmari') !!}</td><td>Central hillside buildings close to institutions</td><td>Zarkawt, Dawrpui, Ramhlun or Electric Veng</td><td>Central roads are busy all day; a two-wheeler parks more easily</td></tr>
      <tr><td>{!! $azA('mission-veng', 'Mission Veng') !!}</td><td>Homes beside offices and institutions</td><td>Salem Veng, Venghnuai, Thakthing or Kulikawn</td><td>Avoid hours when large events crowd the surrounding roads</td></tr>
      <tr><td>{!! $azA('luangmual', 'Luangmual') !!}</td><td>Residential buildings on the slopes, sharing a ward with outer localities</td><td>Chawnpui, Zonuam, Vaivakawn or Tanhril</td><td>Agree where the tutor parks; extra time in heavy rain</td></tr>
      <tr><td>{!! $azA('tanhril', 'Tanhril') !!}</td><td>Family homes beside a large institutional site on the city's edge</td><td>Luangmual, Chawnpui or Zonuam</td><td>Ask how visitors are admitted to institutional housing before the demo</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    When a coaching class overruns or the rain is too heavy, swap that evening for an online hour with the same tutor;
    the <a href="{{ url('/online-tutor-aizawl') }}">online tutor for Aizawl</a> page explains how. The zone page for
    <a href="{{ url('/city/aizawl/zone/tuikual-vaivakawn-luangmual') }}">Tuikual, Vaivakawn and Luangmual</a> adds more
    on that side of the city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azp-fees">What does a physics home tutor in Aizawl charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. The rate is each tutor's
    own. Expect a tutor preparing your child for JEE or NEET to quote above one who covers only the HSSLC or CBSE
    paper; a visit late in the evening, or three visits a week rather than one, also raises the quote, and the same
    teacher may ask less for an online hour. Every fee is visible before you choose a demo; our <a href="{{ url('/blog/home-tuition-fees-aizawl') }}">Aizawl home
    tuition fees</a> article goes further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azp-ask">Asking us for physics tutors</h2>
  <p>
    Tell us the class and board, whether the board paper, JEE or NEET comes first, any coaching timetable, your
    locality with a landmark, and the evenings that are free. A shortlist of two or three physics tutors arrives with
    fees attached; pick one for a <a href="{{ url('/demo-class') }}">free demo</a>. A demo that does not convince you
    is followed by one with the next tutor on the list, and a change of tutor later is free. If no suitable tutor can
    reach your home at the hour you need, we suggest an online plan or a mix of the two. Our office is in Sector 66,
    Gurugram, and our tutors teach online in every state; see the national <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page, and pair this one with the Aizawl
    <a href="{{ url('/maths-home-tutor-aizawl') }}">maths</a> and
    <a href="{{ url('/chemistry-home-tutor-aizawl') }}">chemistry</a> pages.
  </p>
  <p>
    Physics teachers based in Aizawl can see current requests on the
    <a href="{{ url('/tuition-jobs/aizawl') }}">Aizawl tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
