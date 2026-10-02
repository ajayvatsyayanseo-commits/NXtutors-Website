{{--
  Long-form guide for the "ICSE maths tutor Jaipur" page. Authors: Abhinandan
  Tiwary (role: Class 10 CBSE and ICSE maths) and Ajay Vatsyayan (role: IB,
  IGCSE and ISC maths, for the ISC section). No anecdotes, years or results are
  claimed for either. No schools, coaching institutes, societies or other
  people are named.

  CISCE facts are reworded from icse-maths-tutor-gurgaon / icse-maths-tutor-
  mumbai, which cite the CISCE ICSE Mathematics syllabus (80 theory + 20
  internal assessment; Class 10 units: commercial mathematics with GST,
  banking (recurring deposits), shares and dividends; algebra with linear
  inequations, quadratics, ratio and proportion, factor and remainder
  theorems, matrices, AP and GP; coordinate geometry with reflection, section
  and mid-point formulae, equation of a line; geometry with similarity, loci,
  circles, constructions; mensuration; trigonometry; statistics and
  probability), the ICSE 2026 Mathematics specimen paper (Section A
  compulsory, 40 marks, including multiple-choice items; Section B any four
  questions, 40 marks; essential working required; rough work on the same
  sheet), and the CISCE ISC Mathematics syllabus 2027 and 2028 (from the 2027
  exam, seven compulsory units and no Section B/C choice; 80 theory + 20
  project; ISC Applied Mathematics a separate subject). Schools choose their
  own textbooks from publishers following the CISCE syllabus.

  RBSE comparison from rajeduboard.rajasthan.gov.in, Class 10 syllabus
  2026-27 (10_2027.pdf, read 2 Oct 2026): one paper of 3 h 15 min, 80 + 20
  sessional; chapters: real numbers, polynomials, pair of linear equations,
  quadratic equations, AP, triangles, circles, coordinate geometry (distance
  and section formulae), trigonometry and heights and distances, areas
  related to circles, surface areas and volumes, statistics, probability;
  NCERT textbook prescribed. Class 12 syllabus 2026-27 (12_2027.pdf):
  Mathematics (15) one paper, 3 h 15 min, 80 + 20 sessional.

  Local detail only from database/seo-content/zones/jaipur.json,
  areas/jaipur-research.json, areas/jaipur-zone-guides.json and the city hub
  (ICSE and ISC one of four broad systems; coaching city). Area links render
  only for active Jaipur areas. Fee wording is the approved sentence. FAQs
  render from faqs/icse-maths-tutor-jaipur.php.
--}}
@php
  $icmjSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $icmjA = function (string $slug, string $label) use ($icmjSlugs) {
      return in_array($slug, $icmjSlugs, true)
          ? '<a href="' . e(url('/city/jaipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="icmjGuideTitle">
  <h2 id="icmjGuideTitle">ICSE maths tutors in Jaipur: Classes 6 to 10, the CISCE paper, and ISC after it</h2>

  <p class="nx-guide__lede">
    Both CBSE and the Rajasthan Board teach Class 10 maths from the NCERT book, so a Jaipur tutor who mainly teaches
    those boards knows NCERT chapters inside out. ICSE mathematics shares a lot with those books, but it also examines whole areas they never touch, and it
    marks the written method with unusual care. That is why an ICSE family should ask for an ICSE maths tutor, not a
    maths tutor willing to try ICSE. Abhinandan Tiwary, who teaches Class 10 CBSE and ICSE maths on NXTutors, wrote
    this guide; Ajay Vatsyayan, whose NXTutors subjects are IB, IGCSE and ISC maths, wrote the ISC part. For the wider
    picture, see <a href="{{ url('/maths-home-tutor-jaipur') }}">maths home tutors in Jaipur</a> and our
    <a href="{{ url('/icse-home-tutor-jaipur') }}">ICSE and ISC hub for Jaipur</a>.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#icmj-extra">What ICSE adds</a> ·
    <a href="#icmj-paper">The Class 10 paper</a> ·
    <a href="#icmj-early">Classes 6 to 9</a> ·
    <a href="#icmj-units">Class 10 unit by unit</a> ·
    <a href="#icmj-method">Setting out</a> ·
    <a href="#icmj-year">The Class 10 year</a> ·
    <a href="#icmj-switch">Switching at Class 11</a> ·
    <a href="#icmj-isc">ISC maths</a> ·
    <a href="#icmj-zones">Tutors by zone</a> ·
    <a href="#icmj-mode">Home or online</a> ·
    <a href="#icmj-demo">The demo</a> ·
    <a href="#icmj-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="icmj-extra">What ICSE maths adds to the NCERT chapters</h2>
  <p>
    The Rajasthan Board's own Class 10 syllabus is a useful yardstick, since it lists the NCERT chapters one by one:
    real numbers, polynomials, linear equations, quadratics, arithmetic progressions, triangles, circles, coordinate
    geometry, trigonometry, mensuration, statistics and probability. ICSE Class 10 covers most of that and then goes
    further.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ICSE Class 10 mathematics beside the NCERT-based syllabus</caption>
    <thead>
      <tr><th scope="col">Area</th><th scope="col">Shared with NCERT-based boards</th><th scope="col">ICSE only</th></tr>
    </thead>
    <tbody>
      <tr><td>Commercial mathematics</td><td>—</td><td>Goods and Services Tax; banking through recurring deposits; shares and dividend</td></tr>
      <tr><td>Algebra</td><td>Quadratic equations, arithmetic progressions</td><td>Linear inequations, factor and remainder theorems, matrices, geometric progressions, ratio and proportion as a unit</td></tr>
      <tr><td>Coordinate geometry</td><td>Section and mid-point formulae</td><td>Reflection in the axes and in lines; equation of a line</td></tr>
      <tr><td>Geometry</td><td>Similarity, circle theorems</td><td>Loci; constructions examined in the board paper</td></tr>
      <tr><td>Mensuration, trigonometry, statistics</td><td>Most of the content</td><td>Ogives and the readings taken from them</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    CISCE also prescribes no single book. Schools choose from publishers whose books follow its syllabus, which makes
    the syllabus itself the reference. A good tutor asks which publisher your school uses, follows its order, and checks
    every chapter against the CISCE list. For a broader comparison of boards, read our
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">board and stream guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icmj-paper">How the Class 10 board paper is built</h2>
  <p>
    The written paper carries 80 marks; the remaining 20 come from internal assessment during the year. CISCE's 2026
    specimen paper shows how the 80 are arranged:
  </p>
  <ul>
    <li><strong>Section A, 40 marks, compulsory.</strong> Short questions, including multiple-choice items, drawn from every part of the syllabus.</li>
    <li><strong>Section B, 40 marks.</strong> Longer questions in several parts, of which the student attempts any four.</li>
    <li><strong>Working.</strong> Omitting essential working loses marks, and rough work goes on the same sheet as the answer.</li>
  </ul>
  <p>
    Section A makes it impossible to skip a chapter. Section B rewards a student who can pick four questions in the
    first few minutes and stick with them. Both are trainable, but only with ICSE past papers and the specimen paper;
    NCERT exercises help with a few topics and not at all with the paper's style.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icmj-early">Classes 6 to 9: building the habits Class 10 assumes</h2>
  <p>
    The early ICSE years cover number work, fractions, ratio, percentages, simple and compound interest, beginning
    algebra, geometry and mensuration. What a tutor should really be building is the habit behind each: percentages done
    quickly (the raw material of GST and dividends later), brackets expanded without slips, and a reason written beside
    every geometry step. One session a week that reads the child's written work is usually enough; our
    <a href="{{ url('/maths-home-tutor/class-8') }}">Class 8 maths</a> page covers that stage.
  </p>
  <p>
    Class 9 is the jump. In one year the student meets logarithms and indices, harder expansions and factorising,
    pairs of simultaneous equations, interest compounded over several years, congruent triangles, Pythagoras, the
    mid-point theorem, circle properties, and first steps in trigonometry and coordinate geometry. Logarithms and reasoned proofs are where students usually stall, and Class 10 leaves little time to
    repair them. See our <a href="{{ url('/maths-home-tutor/class-9') }}">Class 9 maths</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icmj-units">Class 10, unit by unit: where marks are usually lost</h2>
  <ol>
    <li><strong>Commercial mathematics.</strong> GST bills with input and output tax; recurring deposit interest; shares bought at a premium or discount. The usual error is using face value where market value belongs. Once fluent, these questions are dependable marks, so start early.</li>
    <li><strong>Algebra.</strong> Solution sets of inequations left off the number line; matrices multiplied in the wrong order; the factor theorem used without stating the factor.</li>
    <li><strong>Coordinate geometry.</strong> Reflections taken in the wrong axis; slopes of perpendicular lines muddled.</li>
    <li><strong>Geometry.</strong> Statements without reasons; loci drawn without the defining condition stated; construction lines rubbed out.</li>
    <li><strong>Mensuration.</strong> Radius and diameter swapped; units dropped in melting-and-recasting problems.</li>
    <li><strong>Trigonometry.</strong> Identity proofs that skip a line; heights-and-distances diagrams too small to read.</li>
    <li><strong>Statistics and probability.</strong> Ogives plotted on the wrong boundaries, which then spoils the median and quartile readings.</li>
  </ol>
  <p>
    Our <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> goes chapter by chapter.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icmj-method">Setting out the answer: the ICSE habit worth most</h2>
  <p>
    I ask every ICSE student to write each answer in the same order: the formula, then the substitution, then the
    working, then the answer with units and, for word problems, a sentence. Geometry adds a bracketed reason after
    each statement. Rough work stays in the margin of the same page, because CISCE asks for it there. None of this is
    clever mathematics; it is how method marks survive an arithmetic slip, and how a reason earns the mark that a
    correct but bare angle would not. Correcting layout every session is slow at first, and it is the most valuable
    thing a home tutor does for an ICSE student.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icmj-year">Pacing the Class 10 year</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A typical ICSE Class 10 maths plan in Jaipur</caption>
    <thead>
      <tr><th scope="col">Stretch</th><th scope="col">Main work</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>First term</td><td>Tax, banking and shares, then algebra, in step with school; Class 9 weak spots repaired</td><td>Two</td></tr>
      <tr><td>Mid-year break</td><td>A head start on geometry and coordinate geometry; first Section B questions</td><td>Two or three, some online</td></tr>
      <tr><td>Second half of the year</td><td>Trigonometry, mensuration and statistics; syllabus finished; internal assessment work</td><td>Two</td></tr>
      <tr><td>From pre-boards to the final paper</td><td>Complete specimen-style papers, choosing four Section B questions against the clock; mistakes reworked</td><td>Three</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Late starters gain most by making the tax, banking and shares questions safe first, then the Section B topics that
    recur most often, and only then filling remaining gaps.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icmj-switch">Switching boards at Class 11 in Jaipur</h2>
  <p>
    Class 10 is a common exit point: some students continue with CISCE into ISC, others join a CBSE or RBSE school. A student
    moving to an NCERT-based board finds commercial mathematics and matrices disappear, but must get used to NCERT
    books and that board's questions; the RBSE Class 12 paper, for example, is one paper of 3 hours 15 minutes for 80
    marks plus 20 sessional. A student coming into ICSE from those boards in Class 8 or 9 needs commercial mathematics,
    loci and reflection, plus the habit of writing every step. A tutor familiar with both syllabuses can draw up the
    list of missing topics and work through it within a few weeks. See also our <a href="{{ url('/rajasthan-board-tutor-jaipur') }}">RBSE tutors in Jaipur</a> and
    <a href="{{ url('/cbse-home-tutor-jaipur') }}">CBSE home tutors in Jaipur</a> pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icmj-isc">ISC maths in Classes 11 and 12</h2>
  <p>
    Staying with CISCE means ISC maths, a clear step up. In Class 12 the theory paper is worth 80 and project work 20.
    The old option of Section B or Section C ends with the 2027 examination; from then all candidates study one common
    set of seven units, running from relations and functions, algebra and calculus to vectors, three-dimensional
    geometry, linear programming and probability. ISC Applied Mathematics remains a different subject for students who
    want applied, commerce-flavoured maths.
  </p>
  <p>
    Class 11 lays the ground, especially functions, limits and the first calculus, and it is easy to coast through.
    In a coaching city like Jaipur, an ISC science student may also be preparing for JEE, which a tutor can plan around; see
    our <a href="{{ url('/jee-home-tutor-jaipur') }}">JEE home tutors in Jaipur</a> page and the national
    <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> guide.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icmj-zones">ICSE maths tutors by zone</h2>
  <ul>
    <li><strong><a href="{{ url('/city/jaipur/zone/c-scheme-bani-park-vidhyadhar-nagar') }}">C-Scheme, Bani Park and Vidhyadhar Nagar</a>.</strong> {!! $icmjA('bani-park', 'Bani Park') !!} is mostly independent houses near the railway station, with Pink Line stops at Sindhi Camp and the station; roads towards the bus stand fill in the evening. {!! $icmjA('vidhyadhar-nagar', 'Vidhyadhar Nagar') !!} is laid out in numbered sectors off a central spine, so a sector and plot number is all a new tutor needs.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/raja-park-jawahar-nagar-bapu-nagar') }}">Raja Park, Jawahar Nagar and Bapu Nagar</a>.</strong> In {!! $icmjA('raja-park', 'Raja Park') !!} the market road and the lanes behind it behave differently; suggest where the tutor can leave a two-wheeler.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/vaishali-nagar-west-jaipur') }}">Vaishali Nagar and West Jaipur</a>.</strong> {!! $icmjA('shyam-nagar', 'Shyam Nagar') !!} has two Pink Line stations on New Sanganer Road, Shyam Nagar and Vivek Vihar, so tutors can arrive by metro.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/mansarovar-sanganer') }}">Mansarovar and Sanganer</a>.</strong> {!! $icmjA('gopalpura-bypass', 'Gopalpura Bypass') !!} is crowded with students heading to coaching through the day, so late-evening or weekend slots are easier.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/malviya-nagar-jagatpura-tonk-road') }}">Malviya Nagar, Jagatpura and Tonk Road</a>.</strong> Along {!! $icmjA('tonk-road', 'Tonk Road') !!}, ask for a tutor on your side of the road; crossing it at peak hours is slow.</li>
  </ul>
  <p>
    The <a href="{{ url('/blog/central-and-north-jaipur-tuition-guide') }}">central and north Jaipur guide</a> covers
    travel further, and every locality is on the <a href="{{ url('/city/jaipur') }}">Jaipur home tutors</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icmj-mode">Home or online for ICSE maths</h2>
  <p>
    Because ICSE marks the layout, a tutor sitting beside the student, correcting lines as they are written, is worth a
    great deal in this subject. Online sessions can match it if a camera looks down on the notebook and the student
    writes each step first and explains it afterwards. In Class 10, one home session and one online session a week is a common mix, with the online
    slot useful when evening traffic makes a second trip across the city impractical.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icmj-demo">A checklist for the ICSE maths demo</h2>
  <ol>
    <li>Hand the tutor a dividend question and ask them to talk it through; face value, market value and rate of dividend should come out cleanly.</li>
    <li>Notice whether they fix how your child sets out the work, or only mark answers right or wrong.</li>
    <li>Ask how, in full mock papers, they train your child to pick four Section B questions quickly.</li>
    <li>Check they follow your school's book and chapter order.</li>
    <li>For Class 10, ask for a plan to the pre-boards that includes internal assessment work.</li>
    <li>For ISC, check they know that from 2027 all seven units are compulsory and there is no section choice.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icmj-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Younger classes generally cost less than Class 10 board preparation or ISC, and the journey and the number of
    weekly sessions also count. Each tutor's figure is on the profile before the demo; the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-jaipur') }}">home
    tuition fees in Jaipur</a> explain more.
  </p>
  <p>
    Send the class, the troublesome chapters, your colony with its sector and the times that suit. Two or three ICSE
    maths tutors come back to you; one gives a <a href="{{ url('/demo-class') }}">free demo class</a>, and a later
    change of tutor is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>.
    Prefer to look first? Browse <a href="{{ url('/tutors') }}">tutor profiles</a> or the <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10
    maths</a> page for a cross-board view.
  </p>
  </section>

  </div>
</article>
