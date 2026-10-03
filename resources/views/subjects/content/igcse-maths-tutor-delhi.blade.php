{{--
  Long-form guide for the "IGCSE maths tutor Delhi" page. Author: Ajay
  Vatsyayan (role: IB, IGCSE and ISC maths). No anecdotes, years or results are
  claimed for him. No schools, societies or other people are named.

  Cambridge facts are reworded from igcse-maths-tutor-mumbai and
  igcse-maths-tutor-gurgaon, which cite the Cambridge IGCSE Mathematics 0580
  syllabus for exams in 2025, 2026 and 2027 (version 3) and the 0606
  Additional Mathematics syllabus for 2025-2027
  (https://www.cambridgeinternational.org/programmes-and-qualifications/cambridge-igcse-mathematics-0580/):
  Core Papers 1 (no calculator) and 3 (calculator), 1 h 30 min, 80 marks each;
  Extended Papers 2 (no calculator) and 4 (calculator), 2 h, 100 marks each;
  each paper 50%; Core grades C-G, Extended A*-E; scientific calculator,
  graphical/algebraic not permitted; June and November series, March series
  available to schools in India; nine topics, not in teaching order; about 130
  guided learning hours; 2025 content changes; three significant figures,
  angles to one decimal place, calculator pi or 3.142, no premature rounding;
  M, A and B marks; examiner reports; 0606 two papers of 2 h and 80 marks,
  Paper 1 without and Paper 2 with a calculator, grades A*-E.
  Edexcel facts are reworded from igcse-tutor-delhi, which cites the Pearson
  Edexcel International GCSE Mathematics A (4MA1) specification
  (https://qualifications.pearson.com/): Foundation and Higher tiers, grades
  9-1. No other dates.

  Delhi detail only from the Delhi city hub view (CBSE for most students,
  ICSE/ISC sizeable, a smaller IB/IGCSE group; IGCSE rewards command words, the
  right tier and past papers against the official scheme; online opens up
  tutors for IGCSE; Yamuna crossing; summer break; winter start still pays),
  database/seo-content/zones/delhi.json and
  database/seo-content/areas/delhi-research.json (East of Kailash: mixed
  floors, DDA pockets and CGHS, Kailash Colony/Nehru Place/Kalkaji Mandir
  stations, Nehru Place evening traffic; Sarvodaya Enclave: houses split into
  floors, guarded entrances, Hauz Khas interchange, quiet internal roads;
  Jasola Vihar: two lines, pocket gates, office-hour roads; Nizamuddin West:
  quiet blocks, RWA gates, crowded roads near the basti, Jangpura and JLN
  Stadium stations; Rohini Sector 3: pockets 3A-3G, Deepali Chowk Magenta
  station from March 2026, Outer Ring Road evenings; Naraina Vihar:
  underground Pink Line station, DDA blocks with guards, Ring Road evenings).
  No board is said to concentrate in any area. Area links render only for
  active Delhi areas. Fee wording is the approved sentence. FAQs render from
  faqs/igcse-maths-tutor-delhi.php.
--}}
@php
  $dgmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $dgmA = function (string $slug, string $label) use ($dgmSlugs) {
      return in_array($slug, $dgmSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="dgmGuideTitle">
  <h2 id="dgmGuideTitle">IGCSE maths tutor in Delhi: the board, the tier, and marks earned without a calculator</h2>

  <p class="nx-guide__lede">
    For a Delhi family, "IGCSE maths" can name more than one qualification.
    The child may be on Cambridge IGCSE Mathematics 0580, on Cambridge Additional Mathematics 0606 as well, or on Pearson
    Edexcel's International GCSE, which grades from 9 down to 1. Each is examined differently, and a tutor who prepares
    a student for the wrong one does real harm. Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths on NXTutors, wrote
    this page to set out how 0580 is examined for the 2025 to 2027 series, where marks go missing, how the Edexcel route
    differs, and how a tutor reaches homes across Delhi. The <a href="{{ url('/igcse-tutor-delhi') }}">IGCSE tutors in
    Delhi</a> hub covers the board as a whole.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#dgm-which">Which IGCSE?</a> ·
    <a href="#dgm-tiers">Cambridge tiers and papers</a> ·
    <a href="#dgm-edexcel">The Edexcel route</a> ·
    <a href="#dgm-content">Nine topics and the 2025 changes</a> ·
    <a href="#dgm-nocalc">The non-calculator paper</a> ·
    <a href="#dgm-marks">How marks are lost</a> ·
    <a href="#dgm-addmaths">0606</a> ·
    <a href="#dgm-cbse">Joining from CBSE or ICSE</a> ·
    <a href="#dgm-travel">Tutors by zone</a> ·
    <a href="#dgm-mode">Home or online</a> ·
    <a href="#dgm-demo">Demo checks</a> ·
    <a href="#dgm-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="dgm-which">Which IGCSE is it? Ask the school for three details</h2>
  <ul>
    <li><strong>The board and code.</strong> Cambridge 0580, Cambridge 0606, or Edexcel 4MA1. The code is on the school's subject list and on any past paper the teacher has handed out.</li>
    <li><strong>The tier.</strong> Core or Extended on Cambridge, Foundation or Higher on Edexcel. The tier decides which papers are sat and which grades are reachable.</li>
    <li><strong>The exam series.</strong> Cambridge runs June and November series, and schools in India may also use a March series. The tutor's plan is counted backwards from that date.</li>
  </ul>
  <p>
    With these three in hand, a tutor can choose the right past papers from the first session. Without them, even a good
    tutor spends weeks guessing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dgm-tiers">Cambridge 0580: two papers each, and a ceiling on Core</h2>
  <p>
    Every 0580 candidate sits a pair of papers worth half the grade each. One is sat without a calculator; for the other
    a scientific calculator is needed, and graphical or algebraic models are not permitted. Answers are written on the
    question paper, with working shown.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Mathematics 0580, 2025 to 2027 series</caption>
    <thead>
      <tr><th scope="col"></th><th scope="col">Core</th><th scope="col">Extended</th></tr>
    </thead>
    <tbody>
      <tr><th scope="row">Without a calculator</th><td>Paper 1, 80 marks, 1 h 30 min</td><td>Paper 2, 100 marks, 2 h</td></tr>
      <tr><th scope="row">With a calculator</th><td>Paper 3, 80 marks, 1 h 30 min</td><td>Paper 4, 100 marks, 2 h</td></tr>
      <tr><th scope="row">Grades available</th><td>C to G</td><td>A* to E</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The bottom row matters most. A Core candidate cannot be awarded higher than a C, however well they write. A child
    who needs an A or A*, or who plans IB Analysis and Approaches, A Level maths or a science stream in Class 11, needs an
    Extended entry. Sets are often fixed in Grade 9 and entries confirmed on Grade 10 mocks, so families should raise the
    question early and use the months before mocks for Extended-only content. Our
    <a href="{{ url('/blog/igcse-coreextended-maths') }}">Core and Extended maths guide</a> discusses the decision.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dgm-edexcel">If the school follows Edexcel instead</h2>
  <p>
    Pearson Edexcel International GCSE Mathematics A (4MA1) is tiered too, as Foundation and Higher, but it reports
    grades on a 9 to 1 scale rather than Cambridge's letters. The mathematics overlaps heavily with 0580, yet the paper
    style, the mark schemes and the past-paper bank are Pearson's own. Two consequences: practise from Edexcel papers,
    not Cambridge ones, and choose a tutor who has marked Edexcel scripts. Our
    <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge versus Edexcel comparison</a>, written for
    Gurugram, explains the wider differences. From here on, the page follows Cambridge 0580.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dgm-content">Nine topics, and what the 2025 revision changed</h2>
  <p>
    0580 is organised into nine topic areas: number; algebra and graphs; coordinate geometry; geometry; mensuration;
    trigonometry; transformations and vectors; probability; statistics. Cambridge leaves the teaching order to schools
    and plans the course around roughly 130 guided learning hours.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Content changes from the 2025 exams</caption>
    <thead>
      <tr><th scope="col">Tier</th><th scope="col">Added</th><th scope="col">Removed</th></tr>
    </thead>
    <tbody>
      <tr><td>Core</td><td>Inequalities; recall of certain squares, cubes and roots</td><td>Vector addition, subtraction and scalar multiples; data collection</td></tr>
      <tr><td>Extended</td><td>Surds; domain and range; exact trigonometric values; the recall requirement; more graph forms</td><td>Linear programming; proper subsets; congruence criteria; box-and-whisker plots; data collection</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Older guidebooks and pre-2025 past papers still help, but a tutor has to skip the removed topics and find fresh
    practice for the added ones, especially surds and exact values on Extended.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dgm-nocalc">The non-calculator paper is half the result</h2>
  <p>
    Students from schools where calculators come out early often find Paper 1 or Paper 2 the hardest part of the
    course. The fix is a small daily habit, not a heroic revision week. A sensible tutor keeps the first few minutes of
    every session calculator-free: fractions and division by a fraction, rounding each value to one significant figure to
    estimate, recurring decimals, indices, and on Extended, surds and the exact sine, cosine and tangent of the standard
    angles. Long multiplication and division done briskly save time for the long questions at the end. Kept up for a
    term, the habit moves the non-calculator mark more than anything done in the final month.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dgm-marks">Where Cambridge marks quietly go missing</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Accuracy conventions</h3>
  <p>
    Unless told otherwise, non-exact answers go to three significant figures and angles to one decimal place. Use the
    calculator's π or 3.142, and keep full values until the last line. "Exact" means a surd or a multiple of π.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Command words</h3>
  <p>
    "Show (that)" gives the answer and pays only for the method. "Write down" is a quick mark. "Work out" wants the
    steps visible. "Sketch" wants shape and key features; "plot" wants accurate points.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Mark types</h3>
  <p>
    Cambridge schemes separate method (M), accuracy (A) and independent (B) marks. A tutor who marks that way shows a
    student exactly which kind of mark slipped, and why.
  </p>
    </div>
  </div>
  <p>
    Cambridge also publishes examiner reports after each series, listing the commonest errors question by question.
    A tutor who reads them teaches the student to avoid traps before meeting them in the exam hall.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dgm-addmaths">Additional Mathematics 0606 alongside 0580</h2>
  <p>
    Some Cambridge schools enter strong Extended students for 0606 as a second maths qualification. It goes further
    into functions, logarithms and early calculus, and is examined in two papers of two hours and 80 marks each, Paper
    1 without a calculator and Paper 2 with one, graded A* to E. It is a good bridge to IB AA HL or A Level, but only once
    Extended is secure. One tutor for both is ideal, so the two courses reinforce rather than compete.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dgm-cbse">Joining a Cambridge class from CBSE or ICSE</h2>
  <p>
    With CBSE the board most Delhi children sit, many IGCSE students arrive from it partway through school, and some come
    from ICSE. Most of the arithmetic, and a good share of the algebra, carries over. New ground usually includes set notation and
    Venn diagrams, transformations and vectors, function notation and inverses on Extended, and Cambridge's shorter,
    less guided prompts. ICSE students, used to writing full working, tend to adjust fastest; CBSE students often need
    more practice with multi-step problems that do not say which method to use.
  </p>
  <p>
    The tutor's first job is a topic audit against the syllabus: list what the student has never met, teach those
    topics first, then move to Cambridge-style questions. The summer break is a sensible window; a winter start still
    pays, with the weight shifted to papers and technique. After Grade 10, many IGCSE students continue to the IB
    Diploma, which our <a href="{{ url('/ib-maths-tutor-delhi') }}">IB maths tutor in Delhi</a> page covers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dgm-travel">IGCSE maths tutors by zone: how they reach you</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Delhi zones and the usual way a tutor arrives</caption>
    <thead>
      <tr><th scope="col">Zone and locality</th><th scope="col">Usual route in</th><th scope="col">Tip for parents</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/delhi/zone/gk-defence-colony-lajpat-nagar') }}">GK, Defence Colony and Lajpat Nagar</a>: {!! $dgmA('east-of-kailash', 'East of Kailash') !!}</td><td>Kailash Colony or Nehru Place on the Violet Line, or the Kalkaji Mandir interchange, then an auto</td><td>Say whether you live in a DDA pocket, a society or a private floor; entry differs</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/saket-malviya-nagar-hauz-khas') }}">Saket, Malviya Nagar and Hauz Khas</a>: {!! $dgmA('sarvodaya-enclave', 'Sarvodaya Enclave') !!}</td><td>Hauz Khas, where the Yellow and Magenta Lines meet, then an e-rickshaw</td><td>Many houses are split into floors; send the floor and gate</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/kalkaji-cr-park-sarita-vihar') }}">Kalkaji, CR Park and Sarita Vihar</a>: {!! $dgmA('jasola-vihar', 'Jasola Vihar') !!}</td><td>Jasola Vihar Shaheen Bagh on the Magenta Line or Jasola Apollo on the Violet</td><td>Office traffic peaks at the start and end of the working day; book after it</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/lodhi-colony-jangpura-nizamuddin') }}">Lodhi Colony, Jangpura and Nizamuddin</a>: {!! $dgmA('nizamuddin-west', 'Nizamuddin West') !!}</td><td>Jangpura or Jawaharlal Nehru Stadium on the Violet Line, then a walk or auto</td><td>Give a gate landmark; roads near the old basti get crowded</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/rohini') }}">Rohini</a>: {!! $dgmA('rohini-sector-3', 'Rohini Sector 3') !!}</td><td>Deepali Chowk on the Magenta Line, opened in March 2026, or the Red Line</td><td>Quote the pocket letter, 3A to 3G, not just the sector</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/janakpuri-rajouri-garden-punjabi-bagh') }}">Janakpuri, Rajouri Garden and Punjabi Bagh</a>: {!! $dgmA('naraina-vihar', 'Naraina Vihar') !!}</td><td>The underground Naraina Vihar station on the Pink Line</td><td>Slots after the evening Ring Road rush run more smoothly</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For homes beyond the river, the <a href="{{ url('/blog/east-delhi-tuition-guide') }}">East Delhi tuition guide</a>
    explains how the Yamuna shapes tutor travel; the <a href="{{ url('/blog/rohini-and-north-delhi-tuition-guide') }}">Rohini
    and North Delhi guide</a> does the same for the north-west. Every locality is on the
    <a href="{{ url('/city/delhi') }}">Delhi home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dgm-mode">Home or online for IGCSE maths</h2>
  <p>
    A tutor sitting beside the student is the strongest defence on the calculator-free paper, because they spot a dropped sign or a cramped
    method the moment it happens. Online lessons work equally well when a phone camera looks down on the notebook and
    the student says each step aloud. The bigger advantage of online is choice: it opens up tutors anywhere who know
    0580, 0606 or 4MA1 closely, which matters when the right specialist lives across the city. A common Delhi pattern is
    one home session a week plus one online, kept with the same tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dgm-demo">Checks for the IGCSE maths demo</h2>
  <ul>
    <li>Before teaching anything, did the tutor confirm board, code, tier and exam series?</li>
    <li>Did the session include some arithmetic with the calculator put away?</li>
    <li>When your child slipped, did the tutor name the M or A mark at stake, not just the wrong figure?</li>
    <li>Did they know which topics came in or went out in 2025?</li>
    <li>Was your child writing for most of the hour, rather than watching?</li>
    <li>Did they suggest a plan up to the next mock or series?</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dgm-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    For IGCSE maths in Delhi, the tier, any 0606 work, the length of the tutor's journey and the number of sessions shape
    the figure. Tutors set their own fees, and each is visible on the profile before the demo. The
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our
    <a href="{{ url('/blog/home-tuition-fees-delhi') }}">Delhi tuition fees</a> post explain more.
  </p>
  <p>
    Share the grade, board and code, tier, series, worrying topics, your colony or metro station and a few possible
    slots. We suggest two or three matched tutors, you pick one for a <a href="{{ url('/demo-class') }}">free demo
    class</a>, and a later switch costs nothing. Tutors who join pass an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. You can also look at
    <a href="{{ url('/tutors') }}">tutor profiles</a>, our <a href="{{ url('/maths-home-tutor-delhi') }}">maths home
    tutors in Delhi</a> page for other boards, the national <a href="{{ url('/igcse-maths-tutor') }}">IGCSE maths
    tutor</a> guide, and the Cambridge science pages for <a href="{{ url('/igcse-physics-tutor-delhi') }}">IGCSE
    physics</a> and <a href="{{ url('/ib-igcse-chemistry-tutor-delhi') }}">IGCSE chemistry</a> in Delhi.
  </p>
  </section>

  </div>
</article>
