{{--
  Delhi page for NEET home tutors. The exam, NMC syllabus and NCERT-first method
  live on the national hub (/neet-home-tutor); this page is about running NEET
  tuition in Delhi: biology checks versus physics sessions around coaching,
  how tutors reach each side of the city, the CBSE/ISC/IB mix and stage plans.

  Exam facts (recap only, reworded from the national and Gurugram NEET pages,
  which cite the NTA NEET (UG) 2026 Information Bulletin, neet.nta.nic.in):
  180 compulsory questions in 180 minutes (physics 45, chemistry 45, biology 90
  across botany and zoology), 720 marks, +4/-1, pen and paper in a single
  shift in 2026 (2 pm to 5 pm); English, Hindi bilingual or English plus a
  regional language, 13 in all; minimum age 17 by 31 December, no upper limit;
  biology then chemistry then physics break ties; qualifying subjects Physics,
  Chemistry, Biology/Biotechnology and English; Indian School Certificate listed
  among equivalent Class 12 exams. Syllabus notified by the NMC (physics 20,
  chemistry 20, biology 10 units).
  Local detail only from database/seo-content/areas/delhi-zone-guides.json,
  delhi-research.json, config/zones.php ('Delhi') and the Delhi hub view. No
  schools, coaching institutes, colleges, hospitals or people named. Area links
  render only for active Delhi areas. FAQs: faqs/neet-home-tutor-delhi.php.
--}}
@php
  $ndlSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ndl = function (string $slug, string $label) use ($ndlSlugs) {
      return in_array($slug, $ndlSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="ndlGuideTitle">
  <h2 id="ndlGuideTitle">NEET home tutor in Delhi: biology recall, physics depth and a timetable built on the metro map</h2>

  <p class="nx-guide__lede">
    For a Delhi NEET aspirant, half the paper is biology and most of the stress is physics. Biology needs short checks
    several times a week against the NCERT text; physics needs a slower, longer hour with a tutor reading every step.
    Those two rhythms have to fit between school, coaching and a city where a tutor's journey depends on which metro
    line they live on. This page shows how Delhi families arrange that: a weekly pattern that works around coaching,
    what to expect from tutors in each part of the city, how the plan differs for CBSE, ISC and IB students, and how
    to test a tutor in one free class. The national <a href="{{ url('/neet-home-tutor') }}">NEET home tutor</a> guide covers
    the exam and the syllabus in full.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ndl-brief">NEET in brief</a> ·
    <a href="#ndl-rhythm">A week around coaching</a> ·
    <a href="#ndl-sides">Four sides of Delhi</a> ·
    <a href="#ndl-split">Home or online</a> ·
    <a href="#ndl-boards">Stages and boards</a> ·
    <a href="#ndl-start">When to start</a> ·
    <a href="#ndl-mock">Mocks at home</a> ·
    <a href="#ndl-demo">The demo</a> ·
    <a href="#ndl-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ndl-brief">NEET (UG) in a few lines</h2>
  <p>
    In the NTA's 2026 bulletin, NEET (UG) was one pen-and-paper sitting of three hours: 180 questions, all compulsory,
    with 90 in biology (botany and zoology), 45 in chemistry and 45 in physics, for 720 marks. A right answer earned four
    marks and a wrong one cost a mark. Biology is also the first subject used to separate equal scores. The National
    Medical Commission notifies the syllabus. Because mode, timing and pattern are confirmed afresh each year, read the
    current bulletin on neet.nta.nic.in before fixing any part of a plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ndl-rhythm">Building a NEET week around Delhi coaching</h2>
  <p>
    Most families start by asking for a tutor "two days a week, at home". In Delhi that often means a tutor making two
    rush-hour journeys for work that half the time did not need them in the room. Splitting the work by kind is more
    efficient.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>An illustrative week for a Class 12 student with coaching on Monday, Wednesday and Friday</caption>
    <thead>
      <tr><th scope="col">Day</th><th scope="col">Tutor work</th><th scope="col">Why this slot</th></tr>
    </thead>
    <tbody>
      <tr><td>Monday, after coaching</td><td>Online, 30 minutes: biology recall on the chapter coaching covered, including NCERT diagrams and tables</td><td>No travel; the chapter is fresh</td></tr>
      <tr><td>Tuesday, late afternoon</td><td>At home, 90 minutes: physics, starting from the questions the student could not finish</td><td>A tutor on the metro arrives ahead of the evening crowd</td></tr>
      <tr><td>Thursday, after school</td><td>Online, 40 minutes: inorganic or organic chemistry recall, or a short physics follow-up</td><td>Keeps the home session for the hardest subject</td></tr>
      <tr><td>Saturday afternoon</td><td>Full mock on paper, alone</td><td>Trains concentration for an afternoon exam</td></tr>
      <tr><td>Sunday</td><td>Review with the tutor, online or at home</td><td>Every wrong and blank answer sorted by cause before the next week starts</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The detail changes from house to house, but the principle holds: the tutor travels only when the work needs them in
    the room, usually for physics. Biology lives on short, frequent checks, and those need nothing more than a screen
    and the NCERT book open on the desk. Our guide to <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET biology
    with an NCERT-first approach</a> explains what those checks should test.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ndl-sides">Finding a NEET tutor on each side of Delhi</h2>
  <p>
    The zones below come from our Delhi research. A physics tutor who lives on your line or in your zone is worth
    waiting a few days for; for biology checks, distance does not matter. Browse colonies from the
    <a href="{{ url('/city/delhi') }}">Delhi page</a>.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>South Delhi</h3>
  <p>
    In <a href="{{ url('/city/delhi/zone/gk-defence-colony-lajpat-nagar') }}">GK, Defence Colony and Lajpat Nagar</a>,
    including {!! $ndl('greater-kailash-1', 'Greater Kailash 1') !!}, builder floors often have a bell per floor, so say
    which one to ring. <a href="{{ url('/city/delhi/zone/saket-malviya-nagar-hauz-khas') }}">Saket, Malviya Nagar and Hauz Khas</a>
    sits on the Yellow Line; in {!! $ndl('sheikh-sarai', 'Sheikh Sarai') !!} and Saket's DDA blocks, give the guard the
    block letter. <a href="{{ url('/city/delhi/zone/kalkaji-cr-park-sarita-vihar') }}">Kalkaji, CR Park and Sarita Vihar</a>
    pockets keep visitor registers; <a href="{{ url('/city/delhi/zone/lodhi-colony-jangpura-nizamuddin') }}">Lodhi Colony,
    Jangpura and Nizamuddin</a> suits tutors arriving by Violet or Pink Line, away from Mathura Road's evening queue.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>South West and West Delhi</h3>
  <p>
    <a href="{{ url('/city/delhi/zone/dwarka') }}">Dwarka</a> societies, such as those in {!! $ndl('dwarka-sector-19', 'Sector 19') !!},
    check visitors on every visit, so register the tutor in the first week. In
    <a href="{{ url('/city/delhi/zone/vasant-kunj-vasant-vihar-palam') }}">Vasant Kunj, Vasant Vihar and Palam</a>,
    {!! $ndl('r-k-puram', 'R K Puram') !!} is a Magenta Line stop while Vasant Kunj has none, so agree the auto leg.
    <a href="{{ url('/city/delhi/zone/janakpuri-rajouri-garden-punjabi-bagh') }}">Janakpuri, Rajouri Garden and Punjabi Bagh</a>
    has four metro lines, which makes a strong physics tutor from elsewhere in the city realistic.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>North and Central Delhi</h3>
  <p>
    In <a href="{{ url('/city/delhi/zone/rohini') }}">Rohini</a>, give sector, pocket and block together; DDA pockets
    such as those in {!! $ndl('rohini-sector-15', 'Sector 15') !!} are usually a straight walk to the door, while the
    CGHS societies in Sectors 9, 13 and 16 register visitors at the gate. <a href="{{ url('/city/delhi/zone/pitampura-model-town-north-campus') }}">Pitampura, Model
    Town and North Campus</a> works better in the afternoon than at the evening peak.
    <a href="{{ url('/city/delhi/zone/karol-bagh-patel-nagar-rajinder-nagar') }}">Karol Bagh, Patel Nagar and Rajinder
    Nagar</a> has busy lanes late into the evening, so weekday slots or online sessions are easier.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>East Delhi</h3>
  <p>
    In <a href="{{ url('/city/delhi/zone/mayur-vihar-patparganj-ip-extension') }}">Mayur Vihar, Patparganj and IP
    Extension</a>, {!! $ndl('mayur-vihar-phase-3', 'Mayur Vihar Phase 3') !!} has no station of its own, so a tutor who
    lives in the phase is easiest. <a href="{{ url('/city/delhi/zone/laxmi-nagar-preet-vihar-shahdara') }}">Laxmi Nagar,
    Preet Vihar and Shahdara</a> homes are mostly separate buildings with scarce parking; a tutor who comes by metro
    and e-rickshaw, before Vikas Marg's office-hour slowdown, keeps to time.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ndl-split">Which NEET subjects to take at home and which online</h2>
  <ul>
    <li><strong>Biology: mainly online.</strong> Recall checks of 30 to 45 minutes, two or three times a week, with the tutor asking for exact NCERT wording, labelled diagrams drawn from memory and examples from the tables. A home session now and then helps check the notebook.</li>
    <li><strong>Physics: mainly at home.</strong> Mechanics, electrostatics and optics need the tutor watching the student set up a problem. Ninety minutes once or twice a week, at a slot clear of the zone's peak.</li>
    <li><strong>Chemistry: split.</strong> Physical chemistry numericals at home if physics is already strong; inorganic facts and organic named reactions online in short bursts.</li>
  </ul>
  <p>
    The <a href="{{ url('/physics-home-tutor/neet') }}">NEET physics tutor</a> and <a href="{{ url('/chemistry-home-tutor/neet') }}">NEET
    chemistry tutor</a> pages describe each subject's sessions in more detail, and our guides to
    <a href="{{ url('/blog/-neet-physics-highyield') }}">high-yield NEET physics</a> and
    <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">important NEET chemistry chapters</a> help set priorities.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ndl-boards">Class 11, Class 12 and a repeat year, for CBSE, ISC and IB students</h2>
  <p>
    Most Delhi students reach NEET from CBSE, where school teaching follows NCERT and the gap is mainly speed and
    precision. ISC students, a sizeable group in Delhi, sit an exam the bulletin lists among the equivalent Class 12
    qualifications, but NEET questions follow NCERT wording and figures, so they need the NCERT biology and chemistry
    books alongside their own. The smaller IB and IGCSE group should check the bulletin's qualifying rules and ask for a
    unit-by-unit comparison with the NMC syllabus early.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Stage plans for Delhi NEET students</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Main job</th><th scope="col">Board-specific note</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 11</td><td>Secure the first five biology units and mechanics; start an error log; keep Physics, Chemistry, Biology and English as subjects</td><td>ISC and IB: map school chapters to NCERT in the first fortnight</td></tr>
      <tr><td>Class 12</td><td>Finish the second-year units, revise Class 11 every week, move to full mocks; written answers before pre-boards</td><td>CBSE: practical record kept current; ISC: long-answer practice kept separate from MCQ work</td></tr>
      <tr><td>Repeat year</td><td>Diagnose last year's mocks, rebuild weak chapters, two full papers a week in the final months</td><td>The 2026 bulletin set a minimum age of 17 and no upper limit; confirm the current rules</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For school-side help, see our Delhi <a href="{{ url('/biology-home-tutor-delhi') }}">biology</a>,
    <a href="{{ url('/physics-home-tutor-delhi') }}">physics</a> and <a href="{{ url('/chemistry-home-tutor-delhi') }}">chemistry</a>
    tutor pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ndl-start">When Delhi families usually bring in a tutor</h2>
  <ul>
    <li><strong>Between Class 10 results and the start of Class 11,</strong> to settle the subject choice and begin the Class 11 NCERT biology book before coaching speeds up.</li>
    <li><strong>A term into Class 11,</strong> when school, coaching and the commute together first feel heavy and one subject starts slipping.</li>
    <li><strong>After the first few Class 12 mocks,</strong> once the pattern of lost marks points clearly at physics, at chemistry recall or at careless biology errors.</li>
    <li><strong>At the start of a repeat year,</strong> when the student is free in the daytime and a tutor can travel off-peak.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ndl-mock">Sitting mocks the way the exam runs</h2>
  <p>
    The 2026 paper was written by hand in an afternoon slot, from 2 pm to 5 pm, yet many students practise on a screen
    in the morning. At home, sit a weekend mock at the exam's hours, mark answers in a separate grid, keep the phone in
    another room, and score four for right and minus one for wrong. Photograph the answer sheet for the tutor, who then
    spends the review session on the causes of lost marks rather than watching the paper being written.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ndl-demo">Testing a NEET tutor in the free demo</h2>
  <ul>
    <li>For biology, ask the tutor to quiz the student on a chapter read the night before. Do they test the exact NCERT lines and diagrams, or only the gist?</li>
    <li>For physics, bring two coaching questions the student could not solve and see whether the tutor diagnoses before explaining.</li>
    <li>Ask what they would do with the last mock paper. A useful answer starts with "show me the paper", not the score.</li>
    <li>Ask how they will reach you: line, station and last leg, and the online fallback for days when travel fails.</li>
  </ul>
  <p>
    Not convinced? We set up the next demo, and switching later is free. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>; you can also look through <a href="{{ url('/tutors') }}">tutor profiles</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ndl-fees">NEET tutor fees in Delhi and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own fees and you see them before the demo; online biology checks usually bring the monthly total
    down. The <a href="{{ url('/blog/home-tuition-fees-delhi') }}">Delhi fees guide</a> and the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> go further.
  </p>
  <p>
    Tell us the class, board, which NEET subjects need help, coaching days, your colony and nearest station. We send
    two or three matched tutors and you book a <a href="{{ url('/demo-class') }}">free demo class</a>. For engineering
    entrance, see <a href="{{ url('/jee-home-tutor-delhi') }}">JEE home tutors in Delhi</a>; teachers can find requests on
    <a href="{{ url('/tuition-jobs/delhi') }}">Delhi tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
