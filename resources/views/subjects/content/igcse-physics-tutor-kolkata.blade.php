{{--
  Long-form guide for the "IGCSE physics tutor Kolkata" page. Byline: NXTutors
  Academic Team. No schools, societies or people are named.

  Syllabus facts are reworded from igcse-physics-tutor-gurgaon / igcse-
  physics-tutor-mumbai, which cite the Cambridge IGCSE Physics 0625 syllabus
  for 2026, 2027 and 2028 (version 2, December 2025, no significant changes
  affecting teaching; cambridgeinternational.org): Paper 1 (Core) / Paper 2
  (Extended) multiple choice, 40 questions, 45 min, 30%; Paper 3 (Core) /
  Paper 4 (Extended) theory, 80 marks, 1 h 15 min, 50%; Paper 5 Practical Test
  (1 h 15 min) or Paper 6 Alternative to Practical (1 h), 40 marks, 20%, chosen
  by the school, same skills and contexts; AO weightings 50/30/20;
  calculators in all parts; Core C-G, Extended A*-G; candidates expected to
  reach C or above entered for Extended; six topics (motion, forces and
  energy; thermal physics; waves; electricity and magnetism; nuclear physics;
  space physics); "recall and use" equations; practical skills listed in the
  syllabus; command words in the syllabus. June, November and (India) March
  series as stated in igcse-tutor-mumbai and igcse-maths-tutor-gurgaon. No
  other dates.

  Onward routes: wbchse.wb.gov.in (equivalent boards list includes Cambridge
  IGCSE; semester FAQ: no calculator in any semester exam; Sem I/III MCQ;
  question pattern: Class XI physics MCQ semester covers measurement,
  kinematics, laws of motion, work-energy-power, rigid bodies) and the WBJEE
  2026 bulletin (wbjeeb.nic.in: physics 40 questions, 30 + 5 one/two-mark
  single-answer items with negative marking, 5 multi-correct), read 2 Oct 2026. Kolkata context only from the city hub view (a smaller group follow
  IB or Cambridge IGCSE; ICSE/ISC long following; autumn Puja holidays; online
  widens IGCSE choice), zones/kolkata.json and kolkata-zone-guides.json. Area
  links render only for active Kolkata areas. Fee wording is the approved
  sentence. FAQs render from faqs/igcse-physics-tutor-kolkata.php.
--}}
@php
  $kigpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $kigpA = function (string $slug, string $label) use ($kigpSlugs) {
      return in_array($slug, $kigpSlugs, true)
          ? '<a href="' . e(url('/city/kolkata/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="kigpGuideTitle">
  <h2 id="kigpGuideTitle">IGCSE physics tutors in Kolkata: the right tier, the practical paper and a clean handover to Class 11</h2>

  <p class="nx-guide__lede">
    Cambridge IGCSE Physics (0625) rewards students who can apply a short list of ideas precisely: read a graph,
    recall and use an equation, describe an experiment in the right words. In Kolkata, where Cambridge is followed by
    a smaller group of families than ICSE or CBSE, the practical questions are less about finding any physics tutor
    and more about finding one who knows the Cambridge papers, the difference between Core and Extended, and your
    school's choice of practical paper. This page sets those out, then explains where students go after IGCSE and how
    a tutor can reach you, from Lake Gardens to Salkia. It sits under our
    <a href="{{ url('/physics-home-tutor-kolkata') }}">physics home tutors in Kolkata</a> page and the
    <a href="{{ url('/igcse-tutor-kolkata') }}">IGCSE tutors in Kolkata</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kigp-papers">Three papers</a> ·
    <a href="#kigp-tier">Core or Extended</a> ·
    <a href="#kigp-practical">Paper 5 or Paper 6</a> ·
    <a href="#kigp-topics">Six topics</a> ·
    <a href="#kigp-examples">Two examples</a> ·
    <a href="#kigp-next">After IGCSE</a> ·
    <a href="#kigp-plan">A two-year plan</a> ·
    <a href="#kigp-zones">Zones and travel</a> ·
    <a href="#kigp-mode">Home or online</a> ·
    <a href="#kigp-demo">The demo</a> ·
    <a href="#kigp-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kigp-papers">Every candidate sits three papers</h2>
  <p>
    The current syllabus covers exams in 2026, 2027 and 2028, and Cambridge's latest version notes no significant
    changes that affect teaching. Each candidate takes a multiple-choice paper, a theory paper and a practical paper.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Physics 0625 components</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">Core</th><th scope="col">Extended</th><th scope="col">Share</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple choice: 40 questions, 45 minutes</td><td>Paper 1</td><td>Paper 2</td><td>30%</td></tr>
      <tr><td>Theory: 80 marks, 1 hour 15 minutes</td><td>Paper 3</td><td>Paper 4</td><td>50%</td></tr>
      <tr><td>Practical: 40 marks, either Paper 5 (1 h 15 min) or Paper 6 (1 h)</td><td colspan="2">Same practical paper for both tiers</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Calculators may be used in every part. Cambridge weights the assessment objectives at roughly half for knowledge
    with understanding, about a third for handling information and solving problems, and a fifth for experimental
    skills. That last fifth is easy to neglect, and the practical paper is where it is tested.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kigp-tier">Core or Extended: what the tier decides</h2>
  <p>
    Core candidates can reach grades C to G; Extended candidates A* to G. Cambridge advises entering for Extended any
    student expected to reach grade C or above. Extended adds the Supplement content in every topic, so an Extended
    student needs more than a Core student taught faster: the extra outcomes must be taught and tested explicitly.
  </p>
  <p>
    If your child's school has not yet fixed the tier, a few weeks with a tutor working through Extended-style
    questions often shows which way to go. Ask the tutor for a written list of Supplement outcomes and tick them off
    as they are covered.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kigp-practical">Paper 5 or Paper 6: the practical choice your school makes</h2>
  <p>
    Schools choose between Paper 5, a practical test in a laboratory, and Paper 6, an Alternative to Practical sat as
    a written paper. Cambridge says both test the same skills in the same contexts. For a home tutor that has three
    consequences:
  </p>
  <ul>
    <li><strong>Find out which one.</strong> The school knows; ask early so practice matches.</li>
    <li><strong>Paper 6 is a paper-and-pen skill.</strong> Reading scales, tabulating results with units, plotting and describing a fair method can all be practised at a table at home.</li>
    <li><strong>Paper 5 still needs paper work.</strong> The laboratory time belongs to school, but recording, graphing and evaluating can be rehearsed with a tutor using past practical papers.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kigp-topics">The six topics and where students slip</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>0625 topic areas and common weak points</caption>
    <thead>
      <tr><th scope="col">Topic</th><th scope="col">Where marks usually go</th></tr>
    </thead>
    <tbody>
      <tr><td>Motion, forces and energy</td><td>Reading speed-time graphs; momentum on Extended; pressure in liquids</td></tr>
      <tr><td>Thermal physics</td><td>Particle explanations in precise words; specific heat capacity calculations</td></tr>
      <tr><td>Waves</td><td>Ray diagrams for lenses; refraction and critical angle</td></tr>
      <tr><td>Electricity and magnetism</td><td>Potential dividers; induction and transformers</td></tr>
      <tr><td>Nuclear physics</td><td>Half-life from data; balancing decay equations</td></tr>
      <tr><td>Space physics</td><td>Often squeezed out at the end of the school scheme, then lost in the exam</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Cambridge marks many equations as ones to "recall and use", so the student must remember them, not just apply
    them from a sheet. The syllabus also publishes its command words; "describe", "explain" and "state" ask for
    different things, and a tutor should mark answers against those meanings.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kigp-examples">Two short examples of what an examiner looks for</h2>
  <p>
    <strong>A calculation.</strong> Suppose a question asks how much energy is needed to warm 0.50 kg of water by
    20 °C, given a specific heat capacity of 4200 J/(kg °C). A full-mark answer writes the equation first
    (energy = mass × specific heat capacity × temperature change), substitutes with units (0.50 × 4200 × 20), and gives
    the result with its unit: 42 000 J. A student who writes only "42 000" risks losing the marks if the arithmetic
    slips, because there is no method to credit. A tutor's job is to make that three-line layout automatic.
  </p>
  <p>
    <strong>An explanation.</strong> Asked why a metal spoon in hot tea feels hot at the handle, a weak answer says
    "heat travels up the spoon". A stronger one names the process, conduction, and describes it with the particle
    model: particles at the hot end vibrate more, pass energy to neighbouring particles, and in a metal free electrons
    carry energy along quickly. The question's command word decides how much of that is needed, which is why a tutor
    should mark against Cambridge's own definitions of "state", "describe" and "explain".
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kigp-next">After IGCSE: ISC, Higher Secondary, CBSE or the IB</h2>
  <p>
    The state's Council of Higher Secondary Education lists the Cambridge IGCSE among the boards it treats as
    equivalent, so Kolkata students leaving IGCSE have several options for Class 11. Each changes how physics is
    tested:
  </p>
  <ul>
    <li><strong>West Bengal Higher Secondary.</strong> Class 11 physics is split into a multiple-choice semester (measurement, kinematics, laws of motion, work and energy, rigid bodies) and a written one. No calculator is allowed in any semester exam, which is the biggest adjustment for a Cambridge student. See our <a href="{{ url('/west-bengal-board-tutor-kolkata') }}">West Bengal board tutors in Kolkata</a> page.</li>
    <li><strong>ISC.</strong> ISC has a long following in Kolkata; expect longer written answers and derivations than Cambridge asks for.</li>
    <li><strong>CBSE.</strong> NCERT books, with numerical problems from the first chapters of Class 11.</li>
    <li><strong>IB Diploma.</strong> Extended IGCSE physics is a good base; see <a href="{{ url('/ib-physics-tutor-kolkata') }}">IB physics tutors in Kolkata</a>.</li>
  </ul>
  <p>
    A tutor who knows the next step can use the last term of IGCSE to start bridging, for example by doing some
    arithmetic without a calculator if Higher Secondary is next, or longer derivations if ISC is. Students who plan to
    sit an engineering entrance later should also know that the state's WBJEE gives physics 40 one- and two-mark
    questions with negative marking on most of them; see <a href="{{ url('/wbjee-tutor-kolkata') }}">WBJEE tutors in
    Kolkata</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kigp-plan">A two-year plan for IGCSE physics</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How tutoring time is usually used</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Focus</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>First year, first term</td><td>Motion, forces and energy; graph reading; units</td><td>One</td></tr>
      <tr><td>First year, rest</td><td>Thermal physics and waves with topic questions; first practical-paper questions</td><td>One</td></tr>
      <tr><td>Puja holidays</td><td>A revision block or online sessions rather than a gap</td><td>As agreed</td></tr>
      <tr><td>Second year, first half</td><td>Electricity and magnetism, nuclear and space physics; Supplement checklist for Extended</td><td>One or two</td></tr>
      <tr><td>Final months</td><td>Timed papers in the right tier; one practical paper a week; weak-topic repair</td><td>Two</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Cambridge runs June and November series, with a March series available to schools in India; an earlier series
    moves every row of this table forward, so tell the tutor which one your child will sit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kigp-zones">How IGCSE physics tutors reach you</h2>
  <p>
    We match on syllabus and tier first, then on the journey. Notes from our zone guides:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/kolkata/zone/ballygunge-gariahat-alipore') }}">Ballygunge, Gariahat and Alipore</a>:</strong> {!! $kigpA('lake-gardens', 'Lake Gardens') !!} lies just south of the Rabindra Sarobar lake, with its own suburban station and Rabindra Sarobar on the Blue Line.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/tollygunge-jadavpur-garia') }}">Tollygunge, Jadavpur and Garia</a>:</strong> {!! $kigpA('garia', 'Garia') !!}, on the banks of the Adi Ganga, is served by Kavi Nazrul on the Blue Line and by Garia station; evenings on the main road are slow.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/behala-new-alipore') }}">Behala and New Alipore</a>:</strong> {!! $kigpA('thakurpukur', 'Thakurpukur') !!}, once part of the Barisha estate, is densely built along market streets; name the Purple Line stop so the tutor can plan the auto ride.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/north-kolkata') }}">North Kolkata</a>:</strong> {!! $kigpA('sinthee', 'Sinthee') !!}, around Sinthee More on BT Road, is mostly flats; Dum Dum station is the nearest metro.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/new-town-rajarhat') }}">New Town and Rajarhat</a>:</strong> {!! $kigpA('new-town-action-area-3', 'Action Area III') !!} is mostly two- and three-bedroom flats in complexes and sub-townships; give the desk the tutor's name, tower and flat before the first class.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/howrah') }}">Howrah</a>:</strong> {!! $kigpA('salkia', 'Salkia') !!} mixes medium-sized apartment buildings with older houses around busy market streets; a tutor already working on the Howrah side is often the most reliable choice.</li>
  </ul>
  <p>
    Every locality is on the <a href="{{ url('/city/kolkata') }}">Kolkata home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kigp-mode">Home or online for IGCSE physics?</h2>
  <p>
    Multiple-choice practice, theory marking and Paper 6 work all transfer well online, provided the tutor can see
    diagrams and graphs through a camera over the page. Home sessions suit younger students in their first IGCSE year
    and anyone who needs help organising notes. Because Cambridge families are a smaller group in Kolkata, the right
    specialist may live across the city, and online lets you choose that tutor rather than the nearest one. In the
    Puja weeks, when lanes fill and routines break, two or three online sessions keep the topic sequence moving
    without asking anyone to cross the city. Our
    <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online versus offline tutoring guide</a> weighs it up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kigp-demo">Questions for an IGCSE physics demo</h2>
  <ol>
    <li><strong>Tier and practical paper.</strong> Does the tutor ask Core or Extended, and Paper 5 or 6?</li>
    <li><strong>Supplement content.</strong> Can they show what Extended adds in the topic your child is on?</li>
    <li><strong>Command words.</strong> Ask how "describe" differs from "explain" in a mark scheme.</li>
    <li><strong>A practical question.</strong> Ask them to teach one Paper 6 item on tabulating and graphing.</li>
    <li><strong>What comes next.</strong> Do they ask about Class 11 plans?</li>
    <li><strong>The route.</strong> Which line or road, and the plan for Puja week.</li>
  </ol>
  <p>
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified, and our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more ideas.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kigp-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee and you see it before the demo; the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and <a href="{{ url('/blog/home-tuition-fees-kolkata') }}">home tuition fees in Kolkata</a> explain more.
  </p>
  <p>
    Send the tier, the practical paper, the exam series, your neighbourhood and the evenings that work. You receive two
    or three matched tutors, the first class is a <a href="{{ url('/demo-class') }}">free demo</a>, and switching later
    is free. Browse <a href="{{ url('/tutors') }}">tutor profiles</a> any time, or see
    <a href="{{ url('/igcse-maths-tutor-kolkata') }}">IGCSE maths</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-kolkata') }}">IB and IGCSE chemistry</a> tutors in Kolkata.
  </p>
  </section>

  </div>
</article>
