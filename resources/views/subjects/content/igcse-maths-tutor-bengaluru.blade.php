{{--
  Long-form guide for the "IGCSE maths tutor Bengaluru" page. Author: Ajay
  Vatsyayan (role: IB, IGCSE and ISC maths). No anecdotes, years or results are
  claimed for him. No schools, societies or other people are named. Written by
  the city authority page writer, 2 Oct 2026.

  Syllabus facts are reworded from igcse-maths-tutor-gurgaon, which cites the
  Cambridge IGCSE Mathematics 0580 syllabus for exams in 2025, 2026 and 2027
  (version 3) and the 0606 Additional Mathematics syllabus for 2025-2027
  (cambridgeinternational.org): Core Papers 1 (no calculator) and 3
  (calculator), 1 h 30 min, 80 marks each; Extended Papers 2 (no calculator)
  and 4 (calculator), 2 h, 100 marks each; each paper 50%; Core grades C-G,
  Extended A*-E; scientific calculator, graphical/algebraic not permitted;
  June and November series, March series available to schools in India; nine
  topics, not in teaching order; about 130 guided learning hours; 2025
  content changes; command words; three significant figures, angles to one
  decimal place, calculator pi or 3.142, no premature rounding; M, A and B
  marks; examiner reports; 0606 two papers of 2 h and 80 marks, Paper 1
  without and Paper 2 with a calculator, grades A*-E. Karnataka SSLC maths
  paper shape from the KSEAB 2026-27 blueprint (as cited in
  karnataka-board-tutor-bengaluru). No other dates.

  Local detail only from database/seo-content/areas/bengaluru-research.json
  and bengaluru-zone-guides.json (Kanakapura Road: Green Line extension,
  gated societies, NICE Road junction busy at office hours, online for far
  pockets; Domlur: no station, Indiranagar plus auto or bus terminus, flyover
  junction at office hours; Hennur: no metro, Blue Line stations planned,
  tutors from Hennur, Kalyan Nagar or Kothanur, gate pre-registration;
  Bellandur: gated communities, no metro, tutors by road from HSR, Sarjapur
  Road or Marathahalli, ORR peaks; Malleshwaram: houses, three Green Line
  stations, busy market roads in the evening; Vijayanagar: houses, Purple Line
  stations and a bus terminal near Attiguppe) and the Bengaluru hub (online
  widens IGCSE choice). Area links render only for active Bengaluru areas.
  Fee wording is the approved sentence. FAQs render from
  faqs/igcse-maths-tutor-bengaluru.php.
--}}
@php
  $igmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $igmA = function (string $slug, string $label) use ($igmSlugs) {
      return in_array($slug, $igmSlugs, true)
          ? '<a href="' . e(url('/city/bengaluru/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="igmGuideTitle">
  <h2 id="igmGuideTitle">IGCSE maths tutor in Bengaluru: Cambridge 0580, the tier decision, and marks without a calculator</h2>

  <p class="nx-guide__lede">
    Cambridge IGCSE Mathematics looks friendly from a distance: familiar algebra, geometry and statistics, a calculator
    on half the papers. Up close, two rules shape everything a tutor does. The tier your child is entered for sets the
    highest grade they can reach, and half the marks are earned with no calculator at all. Add exacting accuracy rules
    and a syllabus refreshed for exams from 2025, and the gap between a general maths tutor and a Cambridge specialist
    becomes clear. This page is written by Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths on NXTutors. It covers
    the 0580 papers, the tier call, the non-calculator half, Additional Mathematics, the move from other boards, a
    two-year rhythm and how tutors travel across Bengaluru. It sits under our
    <a href="{{ url('/maths-home-tutor-bengaluru') }}">maths home tutors in Bengaluru</a> page and the
    <a href="{{ url('/igcse-tutor-bengaluru') }}">IGCSE tutors in Bengaluru</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#igm-confirm">What to confirm</a> ·
    <a href="#igm-papers">The four papers</a> ·
    <a href="#igm-tier">Core or Extended</a> ·
    <a href="#igm-nocalc">The non-calculator half</a> ·
    <a href="#igm-accuracy">Accuracy and command words</a> ·
    <a href="#igm-0606">Additional Mathematics</a> ·
    <a href="#igm-switch">Joining from SSLC, CBSE or ICSE</a> ·
    <a href="#igm-years">Grades 9 and 10</a> ·
    <a href="#igm-hour">A good session</a> ·
    <a href="#igm-zones">Travel by zone</a> ·
    <a href="#igm-mode">Home or online</a> ·
    <a href="#igm-demo">The demo</a> ·
    <a href="#igm-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="igm-confirm">Confirm three things with the school first</h2>
  <ul>
    <li><strong>The syllabus code.</strong> Cambridge IGCSE Mathematics is 0580; Additional Mathematics is 0606. Some schools use another exam board's IGCSE, which has different papers, so check the code on the school's subject list. Our comparison of <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge and Edexcel IGCSE</a> explains the difference.</li>
    <li><strong>The tier.</strong> Core or Extended; it is usually settled in Grade 9 or early Grade 10, and a tutor's advice can help that conversation.</li>
    <li><strong>The exam series.</strong> Cambridge runs June and November series, and a March series is available to schools in India. The series sets the timetable for the whole plan.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-papers">Two papers per candidate, chosen by tier</h2>
  <p>
    Every 0580 candidate sits a pair of papers, one without a calculator and one with, each worth half the grade.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Mathematics 0580 (exams 2025 to 2027)</caption>
    <thead>
      <tr><th scope="col">Tier</th><th scope="col">No calculator</th><th scope="col">With calculator</th><th scope="col">Grades available</th></tr>
    </thead>
    <tbody>
      <tr><td>Core</td><td>Paper 1, 1 h 30 min, 80 marks</td><td>Paper 3, 1 h 30 min, 80 marks</td><td>C down to G</td></tr>
      <tr><td>Extended</td><td>Paper 2, 2 h, 100 marks</td><td>Paper 4, 2 h, 100 marks</td><td>A* down to E</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Cambridge allows a scientific calculator on the calculator papers; graphical and algebraic calculators are not
    permitted. The syllabus is organised into nine topic areas, which Cambridge notes are not a teaching order, and is
    designed around roughly 130 guided learning hours.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-tier">Core or Extended: a ceiling, not a label</h2>
  <p>
    The tier is the most consequential decision in IGCSE maths. A Core candidate cannot score above a C however well
    they do; an Extended candidate can reach A* but needs enough marks to secure at least an E. For a student who wants
    to take maths further, in the IB Diploma, A levels or a PU science combination, Extended is usually the target,
    and Additional Mathematics may follow.
  </p>
  <p>
    A tutor's role here is evidence, not pressure. After a few weeks of Extended-level work marked against the mark
    scheme, a tutor can tell the family and the school whether the gap is closing. Where it is not, a confident C on
    Core may serve a student better than a shaky Extended entry, and the tutor should say so.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-nocalc">Half the grade, no calculator</h2>
  <p>
    Paper 1 or Paper 2 carries half the marks, and it punishes students who have leaned on the calculator since Grade
    7. The skills it tests are basic but unforgiving:
  </p>
  <ul>
    <li>Fractions, decimals and percentages converted and combined by hand.</li>
    <li>Standard form and powers, including negative and fractional indices.</li>
    <li>Estimation by rounding to one significant figure before calculating.</li>
    <li>Exact work with surds and with π left in the answer where asked.</li>
    <li>Long multiplication and division done neatly enough to be marked.</li>
  </ul>
  <p>
    A good tutor opens every session with a short non-calculator warm-up, five or six questions in as many minutes,
    whatever the topic of the day. Over two years that habit is worth more than any last-minute revision course.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-accuracy">Accuracy rules and command words</h2>
  <p>
    Cambridge spells out how answers should be given: non-exact answers to three significant figures, angles to one
    decimal place, and π taken from the calculator or as 3.142, with no rounding in the middle of a calculation.
    Marking separates method marks (M), accuracy marks (A) and independent marks (B), which is why a correct method with
    a slip still earns credit and a bare answer often does not. Command words such as "calculate", "show that",
    "explain" and "sketch" each expect a particular response. A tutor should read examiner reports with the student
    and keep a running list of the student's own avoidable errors.
  </p>
  <p>
    The syllabus for exams from 2025 brought content changes, so revision books and worksheets printed for earlier
    exams can mislead. Check that practice material matches the current syllabus before relying on it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-0606">Additional Mathematics 0606</h2>
  <p>
    Some schools offer 0606 to strong Extended students. It has two papers of two hours and 80 marks each, the first
    without a calculator and the second with one, graded A* to E. It moves further into functions, calculus,
    trigonometry and algebraic techniques, and it is a useful bridge to IB AA, A level maths or a PU maths course.
    A tutor for 0606 needs genuine fluency at that level, not just 0580 experience, so ask about it directly.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-switch">Joining a Cambridge class from SSLC, CBSE or ICSE</h2>
  <p>
    A student who switches boards at Grade 9 arrives with gaps that depend on the route. A student from the
    Karnataka state board knows a structured paper of short and long answers, but has rarely been asked to explain
    reasoning in words. A CBSE student brings quick NCERT methods and needs practice with Cambridge's wording and the
    non-calculator rules. An ICSE student usually lays out working well and needs to adjust to the topic order and the
    accuracy conventions. All three may find some topics, such as sets, function notation or transformations,
    newer than the rest.
  </p>
  <p>
    A short bridging block of six to eight sessions, built around past-paper questions sorted by topic, usually
    settles the first term. Our <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">guide to switching
    from CBSE to IB or IGCSE</a> sets out a fuller plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-years">How tutoring time is spent across Grades 9 and 10</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A typical two-year IGCSE maths rhythm</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">Focus</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>First weeks of Grade 9</td><td>Diagnose gaps; algebra and number fluency; start the daily non-calculator habit</td><td>One</td></tr>
      <tr><td>Rest of Grade 9</td><td>Keep pace with school; topic questions from past papers; first evidence for the tier decision</td><td>One, sometimes two</td></tr>
      <tr><td>Grade 10, first half</td><td>Extended-only topics; first complete paper pairs under time</td><td>Two</td></tr>
      <tr><td>Mocks to the exam series</td><td>Timed pairs marked with the mark scheme; every lost mark redone a week later</td><td>Two or three</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-hour">What an hour with a Cambridge maths tutor should contain</h2>
  <p>
    A well-run session has a shape the student comes to expect, which matters as much as the content:
  </p>
  <ol>
    <li><strong>Five minutes without a calculator.</strong> Mixed number work, done in the notebook, checked at once.</li>
    <li><strong>Twenty minutes on this week's school topic.</strong> The idea first, then two or three Cambridge-worded questions, not textbook drills.</li>
    <li><strong>Twenty minutes of past-paper questions.</strong> Chosen by topic, timed, and marked by the tutor with the mark scheme beside them.</li>
    <li><strong>Ten minutes on the error log.</strong> Every mark lost that week is written down with its cause: misread command word, early rounding, missing working or a gap in the topic.</li>
    <li><strong>A short written task to finish before the next visit,</strong> which the tutor actually marks.</li>
  </ol>
  <p>
    If sessions drift into the tutor solving homework while the student watches, raise it early.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-zones">Getting an IGCSE maths tutor to your door</h2>
  <ul>
    <li><strong><a href="{{ url('/city/bengaluru/zone/jayanagar-jp-nagar-banashankari') }}">Jayanagar, JP Nagar and Banashankari</a>:</strong> along {!! $igmA('kanakapura-road', 'Kanakapura Road') !!}, the Green Line extension lets tutors from Jayanagar or Banashankari ride in and walk; most homes are gated, so register the tutor, and consider online for the farthest pockets.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/indiranagar-old-airport-road') }}">Indiranagar and Old Airport Road</a>:</strong> {!! $igmA('domlur', 'Domlur') !!} has no station; tutors take the Purple Line to Indiranagar and an auto, or a bus to the Domlur terminus, and a mid-afternoon slot avoids the flyover rush.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/hennur-kalyan-nagar-banaswadi') }}">Hennur, Kalyan Nagar and Banaswadi</a>:</strong> {!! $igmA('hennur', 'Hennur') !!} waits for the Blue Line, so a tutor who already lives in Hennur, Kalyan Nagar or Kothanur keeps weekday lessons regular.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/koramangala-hsr-bellandur') }}">Koramangala, HSR and Bellandur</a>:</strong> in {!! $igmA('bellandur', 'Bellandur') !!}, tutors arrive by road from HSR Layout, Sarjapur Road or Marathahalli; book after the evening ORR peak or at weekends.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/malleshwaram-rajajinagar-yeshwanthpur') }}">Malleshwaram, Rajajinagar and Yeshwanthpur</a>:</strong> {!! $igmA('malleshwaram', 'Malleshwaram') !!} has three Green Line stations nearby and mostly doorstep visits; the market roads fill in the evening, so start a little earlier.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/vijayanagar-rr-nagar-kengeri') }}">Vijayanagar, RR Nagar and Kengeri</a>:</strong> {!! $igmA('vijayanagar', 'Vijayanagar') !!} has Purple Line stations at Vijayanagar, Attiguppe and Hosahalli, with a bus terminal by Attiguppe, so most tutors simply walk up to the door.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-mode">Home or online for IGCSE maths</h2>
  <p>
    The non-calculator paper is where a tutor at the table pays off most: every line of long division, every fraction
    step is visible. Online works well for past-paper review and for Extended topics once habits are set, provided the
    working is on a document camera. Many families keep one home session for written work and add an online slot for
    paper review, especially where metro lines are still under construction. See our comparison of
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-demo">What a strong IGCSE maths demo looks like</h2>
  <ol>
    <li><strong>The tutor asks for the code, tier and series</strong> before opening a book.</li>
    <li><strong>A non-calculator check</strong> appears within the first ten minutes.</li>
    <li><strong>Marking uses M, A and B marks</strong> on a real past-paper question, not a tick or a cross.</li>
    <li><strong>Accuracy rules come up unprompted:</strong> three significant figures, angles to one decimal place.</li>
    <li><strong>An honest view on the tier</strong> once the tutor has seen some of your child's work.</li>
    <li><strong>A realistic route</strong> to your home, and an agreed online fallback.</li>
  </ol>
  <p>
    If any of these is missing, tell us and we will arrange the next matched tutor's free demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igm-fees">What it costs and how to start</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their own
    fee, shown on the profile; our note on <a href="{{ url('/blog/home-tuition-fees-bengaluru') }}">home tuition fees in
    Bengaluru</a> and the <a href="{{ url('/pricing-guide') }}">pricing guide</a> explain what moves it.
  </p>
  <p>
    Send the code, tier, series, grade, your locality and free slots. We come back with two or three matched tutors,
    the first lesson is a <a href="{{ url('/demo-class') }}">free demo</a>, and switching later is free. Tutors who join
    go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live; you can also
    look through <a href="{{ url('/tutors') }}">tutor profiles</a> yourself. For the sciences, see
    <a href="{{ url('/igcse-physics-tutor-bengaluru') }}">IGCSE physics</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-bengaluru') }}">IB and IGCSE chemistry</a> tutors in Bengaluru, and for
    the Diploma afterwards, <a href="{{ url('/ib-maths-tutor-bengaluru') }}">IB maths tutors in Bengaluru</a>.
  </p>
  </section>

  </div>
</article>
