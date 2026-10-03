{{--
  Long-form guide for the "IB physics tutor Pune" page. Byline: NXTutors
  Academic Team. No schools, societies or people are named.

  Course facts are reworded from ib-physics-tutor-gurgaon, which cites the IB
  Diploma Programme Physics guide, first assessment 2025 (ibo.org): five themes
  A to E and their topics, with A.4 rigid body mechanics, A.5 Galilean and
  special relativity, B.4 thermodynamics, D.4 induction and E.2 quantum physics
  HL only; SL 150 h / HL 240 h; Paper 1A multiple choice (SL 25, HL 40
  questions) and Paper 1B data-based questions (20 marks), sat together, 36%
  (SL 1 h 30 min, HL 2 h); Paper 2 (SL 1 h 30 min, 55 marks; HL 2 h 30 min, 90
  marks) 44%; IA scientific investigation 24 marks, 20%, about 10 hours,
  3,000-word maximum, four criteria of 6 marks; groups of up to three with
  individual research questions and no shared raw data; data from lab work,
  fieldwork, spreadsheets, databases or simulations; no penalty for wrong MCQ
  answers; calculators and the data booklet on both papers; collaborative
  sciences project. No other dates.

  Local detail only from database/seo-content/zones/pune.json,
  areas/pune-research.json, pune-zone-guides.json and the Pune hub view
  (Deccan Gymkhana: Aqua Line station, parking limited near main roads;
  Baner: Line 3 being built, tutors from Aundh, Balewadi, Pashan or Pimple
  Nilakh, Baner Road heavy in the evening; Wakad: Wakad Chowk station planned,
  societies register visitors, early-evening or weekend slot; Kalyani Nagar:
  own Aqua Line station; Hadapsar: no metro, local trains towards Daund,
  Gadital bus station; Bibwewadi: Swargate nearest, Katraj extension with a
  Bibwewadi station under construction; KP and Viman Nagar zones: home tutor
  plus online specialist for IB/IGCSE; hub: IB internal assessment never
  written by the tutor; monsoon online fallback). Area links render only for
  active Pune areas. Fee wording is the approved sentence. FAQs render from
  faqs/ib-physics-tutor-pune.php.
--}}
@php
  $pibpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pibpA = function (string $slug, string $label) use ($pibpSlugs) {
      return in_array($slug, $pibpSlugs, true)
          ? '<a href="' . e(url('/city/pune/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="pibpGuideTitle">
  <h2 id="pibpGuideTitle">IB physics tutors in Pune: the 2025 DP course, the data paper and the investigation</h2>

  <p class="nx-guide__lede">
    The current DP Physics guide, first examined in 2025, organises the syllabus in five themes, gives the first paper
    a section built entirely on data, and makes the internal assessment a single scientific investigation with strict
    rules on collaboration. A tutor should be teaching from that guide, not from older notes or past papers alone. This page, from the NXTutors Academic Team, explains the course as the IB's physics guide sets
    it out, what weekly tutoring should concentrate on, and how we match an IB physics tutor to a home in Pune or online.
    The wider programme is covered on our <a href="{{ url('/ib-tutor-pune') }}">IB tutors in Pune</a> hub, and the
    subject at every board on our <a href="{{ url('/physics-home-tutor-pune') }}">physics home tutors in Pune</a> page.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pibp-themes">Five themes</a> ·
    <a href="#pibp-grade">How the grade is made</a> ·
    <a href="#pibp-level">SL or HL</a> ·
    <a href="#pibp-1b">Paper 1B</a> ·
    <a href="#pibp-mcq">Paper 1A and Paper 2</a> ·
    <a href="#pibp-ia">The investigation</a> ·
    <a href="#pibp-start">Starting from another board</a> ·
    <a href="#pibp-rhythm">Two-year rhythm</a> ·
    <a href="#pibp-zones">Tutors by zone</a> ·
    <a href="#pibp-demo">The demo</a> ·
    <a href="#pibp-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pibp-themes">The five themes, and what HL adds</h2>
  <p>
    The IB plans 150 teaching hours at SL and 240 at HL. All students study the same five themes; HL students add five
    further topics on top.
  </p>
  <ul>
    <li><strong>A. Space, time and motion.</strong> Kinematics, forces and momentum, and work, energy and power for everyone; HL adds rigid body mechanics and Galilean and special relativity.</li>
    <li><strong>B. The particulate nature of matter.</strong> Thermal energy transfers, the greenhouse effect, gas laws, and current and circuits; HL adds thermodynamics.</li>
    <li><strong>C. Wave behaviour.</strong> Simple harmonic motion, the wave model, wave phenomena, standing waves and resonance, and the Doppler effect; no HL-only topic, though HL goes further in places.</li>
    <li><strong>D. Fields.</strong> Gravitational fields, electric and magnetic fields, and motion in electromagnetic fields; HL adds induction.</li>
    <li><strong>E. Nuclear and quantum physics.</strong> Atomic structure, radioactive decay, fission, and fusion and stars; HL adds quantum physics.</li>
  </ul>
  <p>
    Schools teach the themes in their own order, so the tutor should follow the school's scheme and keep a list of what
    remains, rather than starting at Theme A regardless.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pibp-grade">How the grade is made</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>DP Physics assessment, first examined in 2025</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL</th><th scope="col">HL</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1A: multiple choice</td><td>25 questions</td><td>40 questions</td><td rowspan="2">36% together; 1 h 30 min at SL, 2 h at HL</td></tr>
      <tr><td>Paper 1B: data-based questions</td><td>20 marks</td><td>20 marks</td></tr>
      <tr><td>Paper 2: short and extended answers</td><td>55 marks, 1 h 30 min</td><td>90 marks, 2 h 30 min</td><td>44%</td></tr>
      <tr><td>Internal assessment: scientific investigation</td><td>24 marks</td><td>24 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Calculators and the physics data booklet are allowed on both papers, and wrong multiple-choice answers carry no
    penalty. Students also take part in the IB's collaborative sciences project.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pibp-level">Choosing SL or HL</h2>
  <p>
    HL is the natural choice for a student heading towards engineering or physics, and SL suits one who needs a
    science but whose main interest lies elsewhere. The difference is more than the five extra topics: HL Paper 2 is an
    hour longer and carries 90 marks, and HL Paper 1A has 40 questions to SL's 25. A student who is unsure should look
    at how they cope with the algebra in Themes A and D during the first term of DP1, and talk to the school before any
    deadline for changing level. A tutor can give an honest view based on that work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pibp-1b">Paper 1B: the skill that needs practice every week</h2>
  <p>
    Paper 1B presents data from an experiment and asks the student to interpret it. It rewards skills that grow slowly,
    so they belong in every session rather than a few weeks before the exam:
  </p>
  <ol>
    <li><strong>Describe before calculating.</strong> Name the variables, units and trend in a sentence, then decide what the gradient and intercept stand for physically.</li>
    <li><strong>Straighten curves.</strong> Choose what to plot against what so that a power law or exponential becomes a line.</li>
    <li><strong>Handle uncertainty properly.</strong> Absolute, fractional and percentage uncertainties, error bars, and the steepest and shallowest gradients through them.</li>
    <li><strong>Use precise terms.</strong> Random versus systematic error, precision versus accuracy, resolution, zero error.</li>
    <li><strong>Suggest a specific improvement.</strong> Something that fits the method on the page, not a generic "repeat the readings".</li>
  </ol>
  <p>
    A useful pattern is one short data question at the end of each session, drawn from whatever theme the school is
    teaching that week.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pibp-mcq">Paper 1A and Paper 2</h2>
  <p>
    Multiple choice needs speed and judgement in equal measure: estimating an order of magnitude, checking units,
    eliminating options. Because there is no penalty for a wrong answer, no question should be left blank. Paper 2
    rewards complete, structured answers: a clear statement of the principle used, the substitution shown, units on
    the answer and, in explanations, a chain of reasoning that ends where the question asks it to. A tutor who marks
    Paper 2 practice against IB markschemes and explains exactly why a mark was missed does more good than one who
    only works through solutions. Our <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL, HL and IA guide</a>
    discusses both papers further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pibp-ia">The scientific investigation: rules and the tutor's limits</h2>
  <p>
    The investigation is worth 20% at both levels, marked out of 24 on four criteria of six marks each, and the report
    is capped at 3,000 words. The IB expects about ten hours of work. Students may work in groups of up to three, but
    each must have their own research question and they may not share raw data. Data can come from laboratory work,
    fieldwork, spreadsheets, databases or simulations, which matters for students with limited lab time.
  </p>
  <p>
    A tutor may teach the physics behind the student's idea, explain the criteria, talk through whether a method is
    feasible and practise the analysis skills on other data. A tutor must not choose the question, design the method,
    process the student's data or write or edit any part of the report. The student should tell their teacher about
    outside tutoring.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pibp-start">Starting DP Physics from SSC, CBSE, ICSE, IGCSE or the MYP</h2>
  <p>
    DP1 students can arrive from any system. Those from the State Board or CBSE usually handle numericals well
    but have done little data analysis or extended explanation. ICSE students write careful working and need practice
    with uncertainties and the IB's open questions. IGCSE students know much of the mechanics, waves and electricity
    content but need more algebra and a feel for fields. MYP students are comfortable with inquiry and need speed in
    exam-style calculation. A short bridging block on kinematics, vectors and the uncertainty toolkit closes most of
    these gaps; students coming from Cambridge can also see our
    <a href="{{ url('/igcse-physics-tutor-pune') }}">IGCSE physics tutors in Pune</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pibp-rhythm">Spreading tutoring across the two DP years</h2>
  <ul>
    <li><strong>Start of DP1.</strong> One or two sessions a week on kinematics with graphs, vectors and the uncertainty toolkit, since every later theme leans on them.</li>
    <li><strong>Rest of DP1.</strong> One session a week at SL, two at HL, following the school through its themes, each ending with a short data question in the Paper 1B style.</li>
    <li><strong>Investigation window.</strong> Two or three sessions in total on the criteria, feasibility and analysis skills, practised on other data; the report itself is never touched.</li>
    <li><strong>DP2.</strong> Fields and nuclear and quantum physics as the school reaches them, then timed Paper 1 and Paper 2 practice marked against markschemes; two sessions a week, more before the mocks.</li>
  </ul>
  <p>
    The pattern bends to the school's calendar. International schools in Pune keep their own term dates, so the tutor
    should plan from those dates and the student's mock schedule rather than from the State Board or CBSE year. A
    useful habit is a running error log by theme: every lost mark in a school test is written down with its cause, and
    the log decides what the next session covers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pibp-zones">Reaching IB physics students across Pune</h2>
  <p>
    Specialists for DP Physics are few in any city, and our Pune zone guides note that families wanting an IB specialist
    often combine a nearby home tutor with online sessions. How the travel looks:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/pune/zone/kothrud-karve-nagar-deccan') }}">Kothrud, Karve Nagar and Deccan</a>.</strong> {!! $pibpA('deccan-gymkhana', 'Deccan Gymkhana') !!} has its own Aqua Line station; parking near the main roads is limited, so metro and a short walk is simpler.</li>
    <li><strong><a href="{{ url('/city/pune/zone/aundh-baner-pashan') }}">Aundh, Baner and Pashan</a>.</strong> With Line 3 still being built through {!! $pibpA('baner', 'Baner') !!}, tutors come by road from Aundh, Balewadi, Pashan or Pimple Nilakh, and Baner Road is heavy in the evening.</li>
    <li><strong><a href="{{ url('/city/pune/zone/wakad-hinjewadi-pimpri-chinchwad') }}">Wakad, Hinjewadi and Pimpri-Chinchwad</a>.</strong> {!! $pibpA('wakad', 'Wakad') !!} societies register visitors, and traffic towards Hinjewadi slows office hours, so early evening or weekends work better.</li>
    <li><strong><a href="{{ url('/city/pune/zone/viman-nagar-kalyani-nagar-kharadi') }}">Viman Nagar, Kalyani Nagar and Kharadi</a>.</strong> {!! $pibpA('kalyani-nagar', 'Kalyani Nagar') !!} has its own Aqua Line station, so a tutor anywhere on the Vanaz–Ramwadi line can reach it directly.</li>
    <li><strong><a href="{{ url('/city/pune/zone/hadapsar-kondhwa-nibm') }}">Hadapsar, Kondhwa and NIBM</a>.</strong> {!! $pibpA('hadapsar', 'Hadapsar') !!} has no metro; local trains towards Daund and the Gadital bus station help, but most tutors ride in from nearby.</li>
    <li><strong><a href="{{ url('/city/pune/zone/katraj-bibwewadi-sinhagad-road') }}">Katraj, Bibwewadi and Sinhagad Road</a>.</strong> For {!! $pibpA('bibwewadi', 'Bibwewadi') !!}, Swargate is the nearest metro until the extension with a Bibwewadi station is built.</li>
  </ul>
  <p>
    For <a href="{{ url('/city/pune/zone/koregaon-park-camp-wanowrie') }}">Koregaon Park, Camp and Wanowrie</a> and other
    localities, see our <a href="{{ url('/city/pune') }}">Pune tutors page</a>. Online physics works well when the tutor
    can share a graph tool and see the student's working; on the heaviest monsoon days it also keeps the week intact.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pibp-demo">Questions to put to the tutor at the demo</h2>
  <ol>
    <li><strong>The 2025 course.</strong> Ask which topics are HL-only now. The answer should match the list above.</li>
    <li><strong>A Paper 1B question.</strong> Ask the tutor to walk through one with your child and watch how uncertainties are handled.</li>
    <li><strong>Markscheme marking.</strong> Bring a marked school test and ask where marks went.</li>
    <li><strong>The investigation.</strong> Listen for clear limits: teaching the physics, never doing the work.</li>
    <li><strong>A term plan.</strong> How will sessions follow the school's order of themes?</li>
  </ol>
  <p>
    We send two or three matched tutors and show each fee before the demo; the first class is free and switching tutor
    later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pibp-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    See the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-pune') }}">home
    tuition fees in Pune</a>.
  </p>
  <p>
    Tell us SL or HL, DP1 or DP2, what is going wrong, your area and free slots, and book a
    <a href="{{ url('/demo-class') }}">free demo class</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a>, or see
    <a href="{{ url('/ib-maths-tutor-pune') }}">IB maths</a> and <a href="{{ url('/ib-igcse-chemistry-tutor-pune') }}">IB and
    IGCSE chemistry</a> tutors in Pune.
  </p>
  </section>

  </div>
</article>
