{{--
  Board page "IB tutor Chennai" (PYP, MYP, DP). Author: Ajay Vatsyayan (role:
  IB, IGCSE and ISC maths). No anecdotes, years or results are claimed for
  him. No schools, societies or people are named.

  IB facts are only those stated in ib-tutor-gurgaon, which cites ibo.org
  pages and IB PDFs (read 1 Oct 2026): PYP 3-12, six transdisciplinary
  themes, exhibition; MYP 11-16, five years (shorter versions allowed),
  eight subject groups, personal project about 25 hours, optional two-hour
  on-screen exams; DP 16-19, six subjects, normally three (max four) HL,
  240 h / 150 h, grades 1-7, EE + TOK up to three points, maximum 45,
  24 points among passing conditions, IA in every subject; EE (first
  assessment 2027): 4,000 words, three reflection sessions ending in a viva
  voce, 500-word reflective statement; TOK exhibition of three objects and
  a 1,600-word essay on one of six prescribed titles; maths revision, first
  teaching August 2027.
  The Chennai city hub names IB and IGCSE among the city's four broad kinds
  of board, so this page exists; chennai-zone-guides.json (OMR & ECR)
  suggests online tutors for IB where no home tutor fits. Local detail only
  from database/seo-content/areas/chennai-research.json,
  chennai-zone-guides.json, zones/chennai.json and the Chennai city hub. Fee
  wording is the approved NXTutors sentence. FAQs render from
  faqs/ib-tutor-chennai.php. Area links render only when that Chennai area
  page exists and is active.
--}}
@php
  $ibchSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ibchA = function (string $slug, string $label) use ($ibchSlugs) {
      return in_array($slug, $ibchSlugs, true)
          ? '<a href="' . e(url('/city/chennai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ibch-guide" aria-labelledby="ibchGuideTitle">
  <h2 id="ibchGuideTitle">IB tutors in Chennai: what your child needs at seven, at thirteen and at seventeen</h2>

  <p class="nx-guide__lede">
    The Chennai city hub lists the IB, with Cambridge IGCSE, as one of the four broad kinds of board families in the
    city study under, beside the Tamil Nadu State Board, CBSE and CISCE. The IB itself is three programmes for three
    age groups, and the help a child needs changes completely between them. This page is organised by age: what the
    Primary Years, Middle Years and Diploma programmes ask, where a tutor genuinely helps, the rules on coursework,
    which subjects Chennai families raise, and how home and online lessons work across the city's zones. The author
    is Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths on NXTutors.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ibch-city">The IB in Chennai</a> ·
    <a href="#ibch-state">IB and the State Board</a> ·
    <a href="#ibch-young">Ages 3 to 12</a> ·
    <a href="#ibch-middle">Ages 11 to 16</a> ·
    <a href="#ibch-dp">Ages 16 to 19</a> ·
    <a href="#ibch-core">Coursework rules</a> ·
    <a href="#ibch-subjects">Subjects</a> ·
    <a href="#ibch-zones">Zones</a> ·
    <a href="#ibch-demo">Demo checklist</a> ·
    <a href="#ibch-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ibch-city">The IB in Chennai</h2>
  <p>
    We have no reliable figure for the number of IB students in Chennai and give none. What our own zone guides say
    is useful, though: along the OMR and ECR, where gated communities line an IT corridor with little rail, families
    who need an IB or other specialist paper and cannot find a fitting home tutor nearby are advised to consider an
    online tutor from elsewhere in India. That reflects the wider truth about IB tutoring in a large city: a Higher
    Level specialist in your exact subject is rarely next door, so the plan should include online options from the
    first conversation.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibch-state">How the IB differs from the State Board, broadly</h2>
  <p>
    Tamil Nadu's State Board runs a public examination at the end of Class 10 and the higher secondary course after it,
    from state textbooks, with schemes and dates in its official notices. The IB departs from that model throughout. In
    the younger programmes there are no chapter-based board exams; learning is judged through inquiry and criteria. In
    the Diploma, teachers mark coursework that the IB moderates, alongside final exams. Children moving across usually
    manage the content and find the format hard: open questions, command terms and written reasoning in every subject.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibch-young">Ages 3 to 12: the Primary Years Programme</h2>
  <p>
    The IB describes the PYP as a framework for children from 3 to 12, organised by six transdisciplinary
    themes, with learning carried through inquiry units rather than textbook chapters. The final year includes the exhibition, a collaborative inquiry the school community
    celebrates. With no external exams, a PYP tutor is not drilling for a test. The useful work is secure number facts
    and place value, reading for longer, writing a clear paragraph, and helping a child arriving from a textbook-based
    school get comfortable with questions that have several good answers. Worksheets that turn inquiry into drill
    miss the point.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibch-middle">Ages 11 to 16: the Middle Years Programme</h2>
  <p>
    The MYP runs for five years, from 11 to 16, though schools may offer shorter versions. Students study eight subject
    groups, from language and literature to design, and are marked against published criteria with levels rather than
    percentages. Final-year students each complete a personal project, which the IB sizes at roughly 25 hours, and
    a school can choose to enter its students for on-screen examinations, two hours long, in certain groups.
  </p>
  <p>
    Help is most useful in two places: maths and science content in the final two years, when algebra fluency starts to
    shape Diploma choices, and writing to the criteria. A good MYP tutor reads the task sheet and criteria before
    teaching, then shows the student what the top band actually asks for.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibch-dp">Ages 16 to 19: the Diploma Programme</h2>
  <p>
    Over two years, a Diploma student studies six subjects from the IB's academic areas, normally three at Higher
    Level and never more than four. The IB recommends 240 teaching hours per HL subject and 150 per SL subject. Grades
    run 1 to 7; the Extended Essay and TOK can together add three points, for a maximum of 45, and 24 points is one of
    the passing conditions. Each subject has internal assessment.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Programme by programme: where a Chennai family is likely to need help</caption>
    <thead>
      <tr><th scope="col">Programme</th><th scope="col">Assessment</th><th scope="col">Most common tutoring need</th></tr>
    </thead>
    <tbody>
      <tr><td>PYP (3–12)</td><td>Inquiry units; final-year exhibition; no external exams</td><td>Reading, writing and number confidence</td></tr>
      <tr><td>MYP (11–16)</td><td>Criteria in eight groups; personal project; optional on-screen exams</td><td>Maths and sciences in the last two years; writing to criteria</td></tr>
      <tr><td>DP year 1</td><td>Unit tests; IA and EE planning begins</td><td>Closing gaps from Grade 10 or a previous board, especially in HL maths and sciences</td></tr>
      <tr><td>DP year 2</td><td>Coursework deadlines, mocks, final exams</td><td>Timed papers against markschemes; revising weak papers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A revised IB maths curriculum begins teaching in August 2027. Ask any maths tutor which version applies to your
    child's exam session; the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA vs AI guide</a> covers the
    current courses.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibch-move">Joining the IB from another board</h2>
  <p>
    Students often enter the Diploma from CBSE, ICSE, the State Board or IGCSE. Each brings strengths and gaps. Students
    from Indian boards usually arrive with solid hand calculation and content knowledge but little practice with
    command terms, open-ended investigations or a graphic calculator. Students from IGCSE are used to command words but
    may find HL maths and sciences a sharp step up. The first six to eight weeks of DP1 are the best time for a tutor to
    close those specific gaps, before internal assessment and Extended Essay work start to crowd the calendar. Our
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">guide to moving from CBSE to IB or IGCSE</a> has
    a bridging plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibch-core">IA, EE and TOK: the tutor's boundaries</h2>
  <p>
    The Extended Essay is independent research of up to 4,000 words, guided by a school supervisor. Under the 2027
    brief, supervisor and student meet for three reflection sessions, ending with a brief viva voce, and the student
    adds a reflective statement of up to 500 words. In TOK, the exhibition presents three objects, and the essay, of
    1,600 words, answers one of the six titles the IB sets for that session.
  </p>
  <p>
    The work must be the student's own. A tutor may teach the subject behind a topic, unpack the criteria and
    question a loose research question. A tutor may not choose the topic, write or edit text, or carry out the
    analysis. Anyone offering to "tidy up" a draft is putting the diploma at risk.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibch-subjects">IB subjects and where to look</h2>
  <ul>
    <li>Mathematics, Analysis and Approaches or Applications and Interpretation: <a href="{{ url('/ib-maths-tutor') }}">online IB maths tutors</a>, or <a href="{{ url('/maths-home-tutor-chennai') }}">maths tutors in Chennai</a> for MYP.</li>
    <li>Physics, chemistry, biology: <a href="{{ url('/physics-home-tutor-chennai') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-chennai') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-chennai') }}">biology</a> tutors in Chennai; the <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics guide</a> covers SL, HL, the IA and EE.</li>
    <li>Language A: <a href="{{ url('/english-home-tutor-chennai') }}">English tutors in Chennai</a>.</li>
    <li>Economics, business management and other Diploma subjects: tell us the course and level and we search for a match.</li>
  </ul>
  <p>
    Our longer reference on <a href="{{ url('/ib-tutor-gurgaon') }}">PYP, MYP and Diploma requirements</a>, the <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">IB and IGCSE parent's guide</a>,
    and <a href="{{ url('/igcse-tutor-chennai') }}">IGCSE tutors in Chennai</a> for students coming from Cambridge
    courses.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibch-zones">Reaching Chennai's zones</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Home lessons with an IB tutor, zone by zone</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Practical notes</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/chennai/zone/adyar-besant-nagar-mylapore') }}">Adyar, Besant Nagar and Mylapore</a>, e.g. {!! $ibchA('besant-nagar', 'Besant Nagar') !!} or {!! $ibchA('alwarpet', 'Alwarpet') !!}</td><td>MRTS to Thiruvanmiyur for Besant Nagar, then an auto; Teynampet on the Blue Line for Alwarpet. Weekday or morning slots beat beach weekends</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/t-nagar-nungambakkam-kodambakkam') }}">T Nagar, Nungambakkam and Kodambakkam</a></td><td>South Line trains bring tutors from as far as Tambaram</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/velachery-guindy-tambaram') }}">Velachery, Guindy and Tambaram</a></td><td>MRTS, Blue Line and suburban trains; avoid the Kathipara rush</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/omr-ecr') }}">OMR and ECR</a>, e.g. {!! $ibchA('sholinganallur', 'Sholinganallur') !!} or {!! $ibchA('neelankarai', 'Neelankarai') !!}</td><td>Road only beyond Perungudi; lessons after the evening office rush or at weekends, with online for doubts</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/anna-nagar-kilpauk-aminjikarai') }}">Anna Nagar, Kilpauk and Aminjikarai</a>, e.g. {!! $ibchA('shenoy-nagar', 'Shenoy Nagar') !!}</td><td>Green Line stations within a short walk of most streets</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/vadapalani-kk-nagar-porur') }}">Vadapalani, KK Nagar and Porur</a>, e.g. {!! $ibchA('porur', 'Porur') !!}</td><td>No working metro west of Vadapalani; a tutor living along Arcot Road or in Porur</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/mogappair-ambattur-avadi') }}">Mogappair, Ambattur and Avadi</a></td><td>Local trains to Ambattur or Avadi, then a short auto</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/perambur-kolathur-north-chennai') }}">Perambur, Kolathur and North Chennai</a></td><td>Train, metro or auto; parking near markets is tight</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For a Diploma HL subject, choose the specialist first and then decide on home, online or a weekly mix. With online maths
    or physics, the tutor should watch each line of working as it is written, on a tablet or a camera over the page,
    and calculate on the same model your child takes into the exam. Every area appears on the <a href="{{ url('/city/chennai') }}">Chennai home tuition page</a>, and the
    <a href="{{ url('/blog/south-chennai-tuition-guide') }}">south Chennai guide</a> covers the coast and the OMR.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibch-demo">Six checks at the IB demo</h2>
  <ol>
    <li>Give the tutor a marked test and ask what the markscheme annotations mean for your child.</li>
    <li>Check they know the current subject guide and the session your child will sit.</li>
    <li>Ask them to explain a command term your child keeps misreading.</li>
    <li>For MYP, see whether they want the criteria and task sheet before teaching.</li>
    <li>Ask exactly how they help with an IA or EE; the writing must stay with your child.</li>
    <li>Ask for the next month in outline, tied to school deadlines.</li>
  </ol>
  <p>
    There are two or three tutors on your shortlist, with fees shown up front and a free switch if needed later. Tutors
    who sign up go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profiles are marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibch-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. The programme, level,
    number of subjects and the journey at your slot shape an IB fee. The
    <a href="{{ url('/blog/home-tuition-fees-chennai') }}">Chennai fees guide</a> and our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> explain more.
  </p>
  <p>
    Tell us the programme, year, subject and level, your area and the slots that work, and book a
    <a href="{{ url('/demo-class') }}">free demo class</a>. You can browse <a href="{{ url('/tutors') }}">tutor
    profiles</a> meanwhile; IB teachers in Chennai can see requests on <a href="{{ url('/tuition-jobs/chennai') }}">Chennai
    tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
