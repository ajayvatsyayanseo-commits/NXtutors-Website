{{--
  Long-form guide for the "ICSE maths tutor Pune" page. Authors: Abhinandan
  Tiwary (role: Class 10 CBSE and ICSE maths) and Ajay Vatsyayan (role: IB,
  IGCSE and ISC maths, for the ISC section). No anecdotes, years or results are
  claimed for either. No schools, societies or other people are named.

  CISCE facts are reworded from icse-maths-tutor-gurgaon, which cites the CISCE
  ICSE Mathematics syllabus (80 theory + 20 internal assessment; Class 10
  units: commercial mathematics with GST, banking (recurring deposits) and
  shares and dividends; algebra with linear inequations, quadratic equations,
  ratio and proportion, factor and remainder theorems, matrices, AP and GP;
  coordinate geometry with reflection, section and mid-point formulae and the
  equation of a line; geometry with similarity, loci, circles and
  constructions; mensuration of cylinder, cone and sphere; trigonometry with
  identities and heights and distances; statistics and probability) and the
  ICSE 2026 Mathematics specimen paper (Section A compulsory, 40 marks,
  including multiple-choice items; Section B any four questions, 40 marks;
  essential working required, marks lost if omitted; rough work on the same
  sheet), and the CISCE ISC Mathematics syllabus 2027 and 2028 (from the 2027
  exam, seven compulsory units and no Section B/C choice; 80 theory + 20
  project; ISC Applied Mathematics a separate subject). Schools choose their
  own textbooks from publishers following the CISCE syllabus. No other dates.

  Local detail only from database/seo-content/zones/pune.json,
  areas/pune-research.json, pune-zone-guides.json and the Pune hub view
  (Karve Nagar: no metro, buses to Deccan and Swargate, tutors from Kothrud,
  Warje or Erandwane; Aundh: Line 3 not open, tutors from Baner, Pashan, Pimple
  Nilakh or Shivajinagar by two-wheeler, University Road at office hours;
  Pimple Saudagar: BRTS roads, PCMC Bhavan and Sant Tukaram Nagar Purple Line
  stations and Pimpri station nearest; Camp: Pune Railway Station metro stop,
  narrow lanes, army-area entry rules, weekday after-school slots; Kondhwa:
  no metro, Swargate nearest; Katraj: Purple Line extension under
  construction, buses from the Katraj depot; hub: ICSE pacing, project work,
  monsoon online fallback, school year starts). Area links render only for
  active Pune areas. Fee wording is the approved sentence. FAQs render from
  faqs/icse-maths-tutor-pune.php.
--}}
@php
  $picmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $picmA = function (string $slug, string $label) use ($picmSlugs) {
      return in_array($slug, $picmSlugs, true)
          ? '<a href="' . e(url('/city/pune/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="picmGuideTitle">
  <h2 id="picmGuideTitle">ICSE maths tutors in Pune: steady working from Class 6, a calm Class 10, and ISC beyond</h2>

  <p class="nx-guide__lede">
    ICSE maths is a long syllabus marked step by step, and help is usually needed at one of three points:
    a younger child whose working has become untidy, a Class 10 student who needs the whole course finished in time for
    revision, or a Class 11 student facing ISC maths. Abhinandan Tiwary, who teaches Class 10 CBSE and ICSE maths on
    NXTutors, and Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths, wrote this page together. It explains how the
    CISCE paper is put together, which habits keep marks safe, how ISC maths has changed, and how we find a tutor who
    can reach your part of Pune. For the board as a whole, see our <a href="{{ url('/icse-home-tutor-pune') }}">ICSE
    home tutors in Pune</a> page.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#picm-paper">The Class 10 paper</a> ·
    <a href="#picm-units">Unit checklist</a> ·
    <a href="#picm-working">Working that earns marks</a> ·
    <a href="#picm-early">Classes 6 to 9</a> ·
    <a href="#picm-term">A Class 10 term plan</a> ·
    <a href="#picm-switch">Changing boards in Pune</a> ·
    <a href="#picm-isc">ISC maths</a> ·
    <a href="#picm-example">A worked example</a> ·
    <a href="#picm-zones">Tutors by zone</a> ·
    <a href="#picm-demo">The demo</a> ·
    <a href="#picm-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="picm-paper">How the ICSE Class 10 maths paper is built</h2>
  <p>
    The subject carries 80 marks for the written paper and 20 for internal assessment done in school. The CISCE
    specimen paper for 2026 splits the 80 marks evenly:
  </p>
  <ul>
    <li><strong>Section A, 40 marks, compulsory.</strong> Shorter questions across the syllabus, including multiple-choice items. Nothing can be skipped, so there is no hiding a weak chapter.</li>
    <li><strong>Section B, 40 marks, a choice.</strong> The student answers any four questions. Longer, multi-part questions where the choice itself is a skill: pick quickly, then commit.</li>
  </ul>
  <p>
    The paper warns that essential working must be shown and that marks are lost if it is left out, and rough work is
    done on the same sheet as the answers. Unlike the State Board, CISCE prescribes no single textbook: each school
    picks books from publishers who follow the syllabus, so a tutor should teach from the syllabus and the school's
    own book, not from whatever book they happen to own.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="picm-units">A unit-by-unit checklist for Class 10</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 10 units and what a tutor should check in each</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Topics</th><th scope="col">Check that the student can…</th></tr>
    </thead>
    <tbody>
      <tr><td>Commercial mathematics</td><td>GST; recurring deposit accounts; shares and dividends</td><td>Tell face value from market value, and show the GST chain step by step</td></tr>
      <tr><td>Algebra</td><td>Linear inequations; quadratic equations; ratio and proportion; factor and remainder theorems; matrices; AP and GP</td><td>Write a solution set on a number line; multiply matrices in the right order</td></tr>
      <tr><td>Coordinate geometry</td><td>Reflection; section and mid-point formulae; equation of a line</td><td>Name the line of reflection correctly and find a ratio from a section point</td></tr>
      <tr><td>Geometry</td><td>Similarity; loci; circles; constructions</td><td>Give a reason for every step and leave construction arcs visible</td></tr>
      <tr><td>Mensuration</td><td>Cylinder, cone, sphere and combined solids</td><td>Keep radius and diameter apart and carry units to the end</td></tr>
      <tr><td>Trigonometry</td><td>Identities; heights and distances</td><td>Prove an identity line by line and draw a clear diagram first</td></tr>
      <tr><td>Statistics and probability</td><td>Measures of central tendency, histograms, ogives; probability</td><td>Read a median or quartile accurately off an ogive</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Commercial mathematics, matrices, loci and reflection are the units that most often catch out tutors who have
    taught only other boards, so ask about them at the demo. Our
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> covers the board year in more depth.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="picm-working">Working that earns marks</h2>
  <p>
    Because ICSE examiners award marks for steps, a correct final answer with no working can earn less than a wrong
    answer with a clear method. Four habits protect marks across every unit:
  </p>
  <ol>
    <li><strong>One idea per line.</strong> Each line of working should follow from the one above, with the reason given in geometry.</li>
    <li><strong>Rough work kept, not erased.</strong> It sits on the same sheet, and examiners can see it.</li>
    <li><strong>Units and final statements.</strong> Every mensuration and commercial answer ends with a unit or a sentence that answers the question.</li>
    <li><strong>Diagrams before calculation.</strong> Heights and distances, loci and constructions start with a labelled sketch.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="picm-early">Classes 6 to 9: building the habit before it is needed</h2>
  <p>
    In the middle years the content is manageable, so the real work is the way it is written down. A weekly session in
    Classes 6 to 8 that insists on complete working, neat fractions and labelled diagrams pays off later more than any
    amount of speed. Class 9 is the jump: algebra becomes heavier, geometry starts to need proofs, and several Class
    10 units begin, which makes it a sensible point to start a tutor; our
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths</a> page explains how the following year builds on it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="picm-term">A Class 10 plan, term by term</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How a tutor can pace the ICSE board year</caption>
    <thead>
      <tr><th scope="col">Stretch of the year</th><th scope="col">Focus</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Opening weeks</td><td>Class 9 gaps closed; commercial mathematics and algebra alongside school</td><td>Two</td></tr>
      <tr><td>Through the monsoon</td><td>Geometry, coordinate geometry and mensuration; online on the heaviest rain days</td><td>Two</td></tr>
      <tr><td>Before the half-yearly exams</td><td>Trigonometry and statistics; first full papers with Section B timed</td><td>Two</td></tr>
      <tr><td>Pre-boards to the exam</td><td>Full papers, error log by unit, internal assessment work checked but never written by the tutor</td><td>Three</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="picm-switch">Changing boards in Pune: SSC, CBSE and ICSE</h2>
  <p>
    Students sometimes move between the State Board, CBSE and CISCE when they change school or city. A student
    joining ICSE from the SSC or CBSE usually knows the arithmetic and algebra but meets commercial mathematics,
    matrices and loci for the first time, and must learn to write fuller working. A student moving from ICSE to the
    State Board for junior college meets different textbooks and paper formats; our
    <a href="{{ url('/maharashtra-board-tutor-pune') }}">Maharashtra Board tutors in Pune</a> page explains those, and the
    <a href="{{ url('/cbse-home-tutor-pune') }}">CBSE home tutors in Pune</a> page covers CBSE.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="picm-isc">ISC maths in Classes 11 and 12</h2>
  <p>
    ISC Mathematics is examined as an 80-mark paper with a 20-mark project. CISCE's syllabus for the 2027 and 2028
    examinations makes all seven units compulsory and removes the earlier choice between sections, so from the 2027
    exam no part of the syllabus can be left out; check which version applies to your child's year. Applied
    Mathematics is a separate ISC subject, not an easier version of the same paper, so tell us which one your child
    takes. ISC students who are also preparing for an entrance test should see our
    <a href="{{ url('/jee-home-tutor-pune') }}">JEE home tutors in Pune</a> page, and the
    <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> discusses the two stages together.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="picm-example">One question, set out the way ICSE examiners like it</h2>
  <p>
    Recurring deposits are a good test of whether a student writes method or just answers. Take a typical question:
    a student deposits ₹1,000 every month for 12 months in a recurring deposit account at 6% per annum simple interest.
    Find the interest and the maturity value. A complete answer runs to five short lines:
  </p>
  <ol>
    <li><strong>State what is known.</strong> P = ₹1,000, n = 12 months, r = 6% per annum.</li>
    <li><strong>Write the formula before using it.</strong> Interest = P × n(n + 1) ÷ (2 × 12) × r ÷ 100.</li>
    <li><strong>Substitute in one visible step.</strong> Interest = 1,000 × (12 × 13) ÷ 24 × 6 ÷ 100.</li>
    <li><strong>Simplify and give the unit.</strong> 1,000 × 6.5 × 0.06 = ₹390.</li>
    <li><strong>Answer the question that was asked.</strong> Amount deposited = ₹12,000, so the maturity value is ₹12,000 + ₹390 = ₹12,390.</li>
  </ol>
  <p>
    A student who writes only "₹12,390" has the right number and still risks losing marks, because the method carries
    them. A student who slips in step 4 but shows steps 1 to 3 keeps most of the credit. A tutor should insist on this
    shape for every commercial mathematics question until it becomes automatic, then apply the same habit to
    quadratic word problems, mensuration and trigonometry. Online, the same discipline works if the student's notebook
    is on a second camera, so the tutor can see each line as it is written.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="picm-zones">ICSE maths tutors across Pune's zones</h2>
  <ul>
    <li><strong><a href="{{ url('/city/pune/zone/kothrud-karve-nagar-deccan') }}">Kothrud, Karve Nagar and Deccan</a>.</strong> {!! $picmA('karve-nagar', 'Karve Nagar') !!} has no metro station of its own; families usually prefer a tutor from Kothrud, Warje or Erandwane who comes by two-wheeler.</li>
    <li><strong><a href="{{ url('/city/pune/zone/aundh-baner-pashan') }}">Aundh, Baner and Pashan</a>.</strong> In {!! $picmA('aundh', 'Aundh') !!}, tutors from Baner, Pashan, Pimple Nilakh or Shivajinagar arrive quickly by road; University Road is slow at office hours.</li>
    <li><strong><a href="{{ url('/city/pune/zone/wakad-hinjewadi-pimpri-chinchwad') }}">Wakad, Hinjewadi and Pimpri-Chinchwad</a>.</strong> {!! $picmA('pimple-saudagar', 'Pimple Saudagar') !!} sits on two BRTS roads, and the Purple Line's northern stations are a short auto ride away.</li>
    <li><strong><a href="{{ url('/city/pune/zone/koregaon-park-camp-wanowrie') }}">Koregaon Park, Camp and Wanowrie</a>.</strong> {!! $picmA('camp', 'Camp') !!} has the Pune Railway Station metro stop close by; lanes are narrow, and army areas have their own entry rules.</li>
    <li><strong><a href="{{ url('/city/pune/zone/hadapsar-kondhwa-nibm') }}">Hadapsar, Kondhwa and NIBM</a>.</strong> {!! $picmA('kondhwa', 'Kondhwa') !!} has no station; tutors from NIBM Road, Wanowrie, Undri or Salunke Vihar are close at hand.</li>
    <li><strong><a href="{{ url('/city/pune/zone/katraj-bibwewadi-sinhagad-road') }}">Katraj, Bibwewadi and Sinhagad Road</a>.</strong> {!! $picmA('katraj', 'Katraj') !!} is served by buses from its own depot while the metro extension is built; in an independent house the tutor simply rings at the door.</li>
  </ul>
  <p>
    <a href="{{ url('/city/pune/zone/viman-nagar-kalyani-nagar-kharadi') }}">Viman Nagar, Kalyani Nagar and Kharadi</a> and
    every other locality are on our <a href="{{ url('/city/pune') }}">Pune tutors page</a>. In the monsoon, an online session
    with the same tutor keeps the week; our comparison of <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and
    online tutoring</a> explains the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="picm-demo">What to ask in the ICSE maths demo</h2>
  <ol>
    <li><strong>Teach a commercial mathematics question.</strong> Shares and dividends or GST shows quickly whether the tutor knows ICSE.</li>
    <li><strong>Mark a page of working.</strong> Hand over a school test and ask where marks were lost for missing steps.</li>
    <li><strong>The Section B choice.</strong> How would the tutor train your child to choose four questions quickly?</li>
    <li><strong>The school's book.</strong> Will they work from it, alongside the syllabus?</li>
    <li><strong>ISC plans.</strong> For Class 11, ask about the compulsory units from 2027 and whether the student takes Mathematics or Applied Mathematics.</li>
  </ol>
  <p>
    We send two or three matched tutors and show each fee before the demo; the first class is free and switching tutor
    later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their
    profile goes live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="picm-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    See the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-pune') }}">home
    tuition fees in Pune</a>.
  </p>
  <p>
    Tell us the class, the school's textbook if you know it, your area and free slots, and book a
    <a href="{{ url('/demo-class') }}">free demo class</a>. You can also browse <a href="{{ url('/tutors') }}">tutor
    profiles</a> or visit our <a href="{{ url('/maths-home-tutor-pune') }}">maths home tutors in Pune</a> page.
  </p>
  </section>

  </div>
</article>
