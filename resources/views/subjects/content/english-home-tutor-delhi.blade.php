{{--
  Long-form guide for the "English home tutor Delhi" page. Byline: NXTutors
  Academic Team. No schools, societies, developers, markets or people are named.
  Local detail comes only from database/seo-content/areas/delhi-research.json,
  delhi-zone-guides.json, database/seo-content/zones/delhi.json and the Delhi
  city hub view (board mix: CBSE for most students, ICSE/ISC with a sizeable
  following, a smaller IB/IGCSE group). No state board is described.

  Official exam facts, reused from the national english-home-tutor page
  (fetched 1 Oct 2026):
  - CBSE English Language and Literature (184), Class X 2026-27, cbseacademic.nic.in
    (web_material/CurriculumMain27/SecPart1/English_LL_SecP1_2026-27.pdf):
    80 marks = reading 20, writing and grammar 20 (grammar 10, formal letter 5,
    analytical paragraph 5), literature 40; internal 20 incl. listening and speaking 5.
  - CBSE English Core (301), XI-XII 2026-27, cbseacademic.nic.in
    (web_material/CurriculumMain27/SecPart2/English_core_SecP2_2026-27.pdf):
    XII reading 22, creative writing 18, literature 40 (Flamingo, Vistas);
    internal 20 = listening 5, speaking 5, project 10.
  - CISCE ICSE English, exam year 2028 (cisce.org/wp-content/uploads/2026/01/2.-English.pdf):
    two 2-hour 80-mark papers, 20 internal each; composition 300-350 words,
    unseen passage about 500 words with summary.
  - CISCE ISC English 801 (cisce.org/wp-content/uploads/2025/04/2.-ISC-English-XI-XII_2025.pdf):
    two 3-hour 80-mark papers plus 20 project each; composition 400-450 words.
  - Cambridge IGCSE 0500 and 0510, 2027-2029 syllabuses (cambridgeinternational.org).
  - IB Language A: language and literature (ibo.org): Paper 1 unseen
    non-literary analysis, Paper 2 comparative essay, 15-minute individual oral,
    HL essay.
  Fee wording is the approved NXTutors sentence.
  FAQs render from faqs/english-home-tutor-delhi.php.
  Area links render only when that Delhi area page exists and is active.
--}}
@php
  $enDlSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $enDl = function (string $slug, string $label) use ($enDlSlugs) {
      return in_array($slug, $enDlSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="enDlGuideTitle">
  <h2 id="enDlGuideTitle">English tuition in Delhi: match the paper first, then the metro line</h2>

  <p class="nx-guide__lede">
    English help for a Delhi student usually means one of a few jobs: a Class 10 student losing marks
    on the letter and the analytical paragraph, a Class 12 student whose literature answers have stopped scoring, an
    ICSE child facing two long English papers, an IB or IGCSE student who has to analyse texts they have never seen,
    or a young child who is still guessing at words. Each calls for a different tutor. The second question in a city
    this large is travel: a good tutor in Rohini is of little use to a family in Mayur Vihar at six in the evening.
    NXTutors sends two or three English tutors who fit both the paper and your part of Delhi, with each fee shown up
    front, and the first class with the tutor you choose is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#endl-asks">What families ask for</a> ·
    <a href="#endl-boards">Boards in Delhi</a> ·
    <a href="#endl-cbse">Inside the CBSE papers</a> ·
    <a href="#endl-zones">Reaching your zone</a> ·
    <a href="#endl-mode">Home or online</a> ·
    <a href="#endl-demo">The demo</a> ·
    <a href="#endl-fees">Fees</a> ·
    <a href="#endl-next">Next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="endl-asks">Which kind of English tutor does your child need?</h2>
  <p>
    "English tuition" covers jobs as different as teaching phonics and coaching an argumentative essay. Before we look
    at profiles, we pin down the job. The table sets out the common requests and the tutor
    each one needs.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Delhi English requests and the tutor each needs</caption>
    <thead>
      <tr><th scope="col">The request</th><th scope="col">What the tutor actually does</th><th scope="col">Look for</th></tr>
    </thead>
    <tbody>
      <tr><td>Young child not yet reading fluently</td><td>Letter sounds, blending, reading aloud daily, short writing</td><td>Patience, short lively sessions, a home tutor rather than a screen</td></tr>
      <tr><td>Classes 6 to 8, weak grammar and writing</td><td>Grammar taught through the child's own paragraphs; letters and stories planned before writing</td><td>A tutor who marks writing every week and sets redrafts</td></tr>
      <tr><td>CBSE Class 10</td><td>Unseen passages under time, formal letter, analytical paragraph, literature answers in the word limit</td><td>Knows the 80-mark paper section by section</td></tr>
      <tr><td>CBSE Class 11 and 12</td><td>Longer creative writing, literature that links themes across chapters, the project</td><td>Senior-school experience; comfortable with close reading</td></tr>
      <tr><td>ICSE or ISC</td><td>Two separate papers, long compositions, prescribed literature texts</td><td>Recent CISCE teaching; drills timed writing</td></tr>
      <tr><td>IGCSE or IB</td><td>Analysis of unseen texts, coursework feedback, oral practice</td><td>Has taught that exact course; never writes coursework</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Spoken confidence is a separate goal that some families add on top of school English. Our
    <a href="{{ url('/blog/spoken-english-for-students') }}">spoken English guide for students</a> explains what helps
    and what does not.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="endl-boards">How do the boards Delhi students sit examine English?</h2>
  <p>
    CBSE is the board most Delhi students sit, CISCE's ICSE and ISC have a sizeable following, and a smaller group study
    for the IB or Cambridge IGCSE. English is examined very differently across them, so a tutor fluent in one can be
    lost in another.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>English across the boards taught in Delhi</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">How English is examined</th><th scope="col">Where tutoring helps most</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Class 10 (English Language and Literature)</td><td>One 80-mark paper: reading 20, writing and grammar 20, literature 40; 20 marks internal</td><td>Formats, timing, literature answers</td></tr>
      <tr><td>CBSE Classes 11 and 12 (English Core)</td><td>80-mark paper plus 20 internal marks for listening, speaking and a project; Class 12 drops grammar</td><td>Creative writing and theme-based literature answers</td></tr>
      <tr><td>ICSE Class 10</td><td>Language and Literature as two 2-hour, 80-mark papers, each with 20 internal marks</td><td>Compositions, summary, grammar accuracy</td></tr>
      <tr><td>ISC Classes 11 and 12</td><td>Two 3-hour, 80-mark papers with project work; a 400 to 450 word composition from six topics</td><td>Planning long answers under the clock</td></tr>
      <tr><td>Cambridge IGCSE</td><td>First Language English (0500) or English as a Second Language (0510), graded A* to G</td><td>Knowing which entry your child has; analysis versus accuracy</td></tr>
      <tr><td>IB Language A: Language and Literature</td><td>Unseen non-literary analysis, a comparative essay, a 15-minute individual oral, and an essay at HL</td><td>Analytical writing and oral practice</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For the full breakdown of every board, read our national
    <a href="{{ url('/english-home-tutor') }}">English home tutor guide</a>. For ICSE question-by-question notes, see
    <a href="{{ url('/blog/icse-class-10-english-papers') }}">ICSE Class 10 English papers</a>, and for the senior
    CISCE papers, our <a href="{{ url('/blog/isc-class-12-english-literaturelanguage') }}">ISC Class 12 English
    guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="endl-cbse">Inside the CBSE English papers: where Delhi students drop marks</h2>
  <p>
    Because CBSE dominates in Delhi, the CBSE papers are where most of our English requests begin. In Class 10, the
    reading section carries 20 marks across two unseen passages, one discursive and one factual with data. Writing and
    grammar carry another 20: ten for grammar, five for a formal letter and five for an analytical paragraph built on
    a chart, map or graph. Literature, from First Flight and Footprints without Feet, is half the paper at 40 marks.
  </p>
  <p>
    The usual pattern in marked scripts is easy to recognise. Students read the chapters but write literature answers that
    run long, miss the point asked or quote nothing from the text. The analytical paragraph loses marks when a student
    describes every number instead of picking out the trend. Letters lose easy marks on format. None of this needs a
    new textbook; it needs a tutor who sets a short task each week, marks it against the board's expectations and has
    the student rewrite it.
  </p>
  <p>
    In Class 12, English Core drops grammar. Reading carries 22 marks, creative writing 18 and literature 40, from
    Flamingo and Vistas, and the school awards 20 for listening, speaking and a project. The jump from Class 10 is in
    the literature: answers now connect ideas across a chapter or across texts. A tutor who asks "why did the writer
    do that?" in every session prepares a student for that shift far better than one who dictates notes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="endl-zones">How an English tutor reaches your part of Delhi</h2>
  <p>
    We work across twelve Delhi zones, and the practical question in each is the last stretch: which station the tutor
    uses and whether a guard needs their name first. Open any zone on our <a href="{{ url('/city/delhi') }}">Delhi
    page</a> to see the tutors nearest to it.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>South Delhi colonies</h3>
  <p>
    In the <a href="{{ url('/city/delhi/zone/gk-defence-colony-lajpat-nagar') }}">GK, Defence Colony and Lajpat Nagar</a>
    zone, most plots are now builder floors, so tell the tutor which bell to ring. {!! $enDl('lajpat-nagar', 'Lajpat Nagar') !!}
    is a Violet and Pink Line interchange. Further south, {!! $enDl('malviya-nagar', 'Malviya Nagar') !!} sits on the
    Yellow Line, and in <a href="{{ url('/city/delhi/zone/kalkaji-cr-park-sarita-vihar') }}">Kalkaji and CR Park</a>,
    {!! $enDl('kalkaji', 'Kalkaji') !!} is served by Kalkaji Mandir on the Violet and Magenta Lines; pockets there keep
    visitor registers.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Dwarka and West Delhi</h3>
  <p>
    <a href="{{ url('/city/delhi/zone/dwarka') }}">Dwarka</a> is mostly cooperative group housing, so register the
    tutor as a regular visitor in the first week; {!! $enDl('dwarka-sector-11', 'Dwarka Sector 11') !!} has its own
    Blue Line station. In {!! $enDl('janakpuri', 'Janakpuri') !!}, where the Blue and Magenta Lines meet at Janakpuri
    West, plotted blocks are doorbell visits and DDA pockets log visitors at the gate.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>North and North West</h3>
  <p>
    In <a href="{{ url('/city/delhi/zone/rohini') }}">Rohini</a>, block names repeat across sectors, so give the
    sector, pocket and flat together. {!! $enDl('rohini-sector-13', 'Rohini Sector 13') !!} leans to CGHS societies that
    register visitors. The Pitampura and Model Town zone mixes quiet enclave floors with the student-heavy roads near
    North Campus, where afternoon slots run better than evening ones.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>East Delhi across the Yamuna</h3>
  <p>
    For Mayur Vihar, Patparganj, Laxmi Nagar and Preet Vihar, we begin with tutors already teaching on the
    trans-Yamuna side, because crossing the river at peak hour is where lessons start late. Society gates in Patparganj
    and IP Extension log every visitor; DDA pockets usually let a tutor walk straight up.
  </p>
      </div>
    </div>
  <p>
    Neighbourhood guides go further: see <a href="{{ url('/blog/south-delhi-tuition-guide') }}">South Delhi</a>,
    <a href="{{ url('/blog/dwarka-and-west-delhi-tuition-guide') }}">Dwarka and West Delhi</a>,
    <a href="{{ url('/blog/rohini-and-north-delhi-tuition-guide') }}">Rohini and North Delhi</a> and
    <a href="{{ url('/blog/east-delhi-tuition-guide') }}">East Delhi</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="endl-mode">Home or online English lessons in Delhi?</h2>
  <p>
    English suits online teaching better than most subjects for older students: an essay can be shared, marked and
    rewritten on screen, and an IB or IGCSE specialist may be easier to find online because the right person can live
    anywhere in the city. Early reading is the exception. A child learning to read needs an adult beside them who can
    see where the finger is on the page and hear every word, so for the youngest learners we look for a tutor who can
    come home.
  </p>
  <ul>
    <li><strong>Up to about Class 2:</strong> home lessons, short and frequent.</li>
    <li><strong>Classes 3 to 8:</strong> either works, if written work is photographed or typed into a shared document each week.</li>
    <li><strong>Board classes, ISC, IGCSE and IB:</strong> online or hybrid often widens the choice; one home session a week plus one online works well when the specialist lives across town.</li>
  </ul>
  <p>
    Whichever you choose, agree before the first class how writing will be handed in, so feedback reaches your child
    before the next session rather than after it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="endl-demo">What to check in the free English demo</h2>
  <p>
    The demo is a normal lesson. Keep a marked school test or a recent composition ready, and afterwards ask yourself:
  </p>
  <ol>
    <li>Did the tutor read your child's own writing before teaching anything?</li>
    <li>Did they pick two or three priorities instead of correcting every line?</li>
    <li>Did your child write or speak for a good part of the hour, rather than only listen?</li>
    <li>Could the tutor say how your child's board marks the letter, composition or literature answer?</li>
    <li>For IGCSE, did they ask whether the entry is First Language or Second Language?</li>
    <li>Did they ask what your child reads outside school and suggest something next?</li>
  </ol>
  <p>
    If the fit is wrong, tell us and we arrange a demo with the next tutor on the shortlist. Switching later is free
    too.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="endl-fees">What does an English tutor cost in Delhi?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    fees. For English, primary lessons generally sit lower than senior-school, IB or IGCSE work, and travel at your slot
    also moves the figure. You see each shortlisted tutor's fee before the demo; our
    <a href="{{ url('/blog/home-tuition-fees-delhi') }}">Delhi home tuition fees guide</a> has more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="endl-next">Next steps</h2>
  <p>
    Send us the class and board, what worries you most (reading, writing, grammar, literature or speaking), your colony
    with its block or pocket, the nearest metro station, free days and a budget. We reply with two or three matched
    tutors; tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. Families who also need maths or science help can see our
    <a href="{{ url('/maths-home-tutor-delhi') }}">maths tutors in Delhi</a> and
    <a href="{{ url('/science-home-tutor-delhi') }}">science tutors in Delhi</a>.
  </p>
  <p>
    English teachers who want to take students in Delhi can find open requests on the
    <a href="{{ url('/tuition-jobs/delhi') }}">Delhi tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
