{{--
  Board page for "IB tutor Pune" (PYP, MYP, DP) across Pune and
  Pimpri-Chinchwad. Author: Ajay Vatsyayan (role: IB, IGCSE and ISC maths). No
  anecdotes, years or results are claimed for him. No schools or societies are
  named.

  IB facts are reworded from the Gurgaon board hub (ib-tutor-gurgaon), which
  cites ibo.org pages and IB PDFs (read 1 Oct 2026): PYP ages 3-12, six
  transdisciplinary themes, exhibition in the final year; MYP ages 11-16, five
  years, eight subject groups, criteria-based marking, personal project of about
  25 hours, optional on-screen exams of two hours in some subjects; DP ages
  16-19, six subjects, three (at most four) HL, 240 h HL / 150 h SL, grades
  1-7, EE + TOK up to three points, 45 maximum, at least 24 points among the
  passing conditions, IA in every subject moderated by the IB; EE (first
  assessment 2027) 4,000-word limit, three reflection sessions ending in a viva
  voce, 500-word reflective statement; TOK exhibition of three objects and a
  1,600-word essay on one of six prescribed titles; maths AA/AI at SL/HL,
  revised course first taught August 2027. No exam dates.
  Local detail only from the Pune city hub view ("a smaller group of Pune
  students take the IB Diploma or Cambridge IGCSE"; international schools keep
  their own dates; online opens up tutors for IB), zones/pune.json (Koregaon
  Park, Camp & Wanowrie: home tutor plus online specialist is a common pattern
  for IB or IGCSE; Viman Nagar zone: online suits IB, IGCSE or senior science
  specialists), pune-research.json (Viman Nagar, Koregaon Park, Magarpatta:
  specialist subjects online) and pune-zone-guides.json. Area links render only
  for active Pune areas. Fee wording is the approved sentence.
  FAQs render from faqs/ib-tutor-pune.php.
--}}
@php
  $ibpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ibpA = function (string $slug, string $label) use ($ibpSlugs) {
      return in_array($slug, $ibpSlugs, true)
          ? '<a href="' . e(url('/city/pune/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="ibpGuideTitle">
  <h2 id="ibpGuideTitle">IB tutors in Pune: matching the programme, the level and the part of the city</h2>

  <p class="nx-guide__lede">
    A smaller group of Pune students take the IB, which means its specialists are spread more thinly than CBSE or
    State Board tutors. For an IB family that changes the order of the search. First pin down exactly what help is
    needed: which programme, which year, which subject and at what level. Then work out whether that person can come
    home, teach online, or do a bit of both. This page explains the three IB programmes, how IB assessment differs from
    the board exams most Pune neighbours sit, where IB students usually want support, and how home and online tuition
    work out across the city's zones. It is written by Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths on
    NXTutors.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ibp-which">Which programme?</a> ·
    <a href="#ibp-boards">IB and the boards</a> ·
    <a href="#ibp-choices">Diploma choices</a> ·
    <a href="#ibp-assess">IA, EE and TOK</a> ·
    <a href="#ibp-younger">MYP and PYP</a> ·
    <a href="#ibp-subjects">Subjects</a> ·
    <a href="#ibp-zones">Pune zone by zone</a> ·
    <a href="#ibp-demo">The demo</a> ·
    <a href="#ibp-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ibp-which">Which IB programme is your child in?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The IB's three programmes, as the IB describes them</caption>
    <thead>
      <tr><th scope="col">Programme</th><th scope="col">Ages</th><th scope="col">How progress is judged</th><th scope="col">What tutoring usually means</th></tr>
    </thead>
    <tbody>
      <tr><td>Primary Years (PYP)</td><td>3–12</td><td>Units of inquiry under six transdisciplinary themes; a final-year exhibition; no external exams</td><td>Number facts, reading, writing a clear paragraph</td></tr>
      <tr><td>Middle Years (MYP)</td><td>11–16</td><td>Published criteria in eight subject groups; a personal project; on-screen exams only if the school opts in</td><td>Maths and science content; writing to criteria; managing long tasks</td></tr>
      <tr><td>Diploma (DP)</td><td>16–19</td><td>Six subjects graded 1–7, coursework in each, final exams, plus EE, TOK and CAS</td><td>HL maths and sciences; planning coursework within the rules</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Schools may run one, two or all three programmes, and the years they do not cover may follow another board. So
    "IB" on its own tells a tutor very little; "MYP year 4 sciences" or "DP1 Physics SL" tells them what they need.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibp-boards">How IB work is judged, compared with SSC, HSC or CBSE</h2>
  <p>
    Most Pune students sit board examinations: the Maharashtra State Board's SSC and HSC, or CBSE. In general, those
    routes lead to a public exam built on prescribed textbooks. The IB works differently in three ways that matter
    for tuition:
  </p>
  <ul>
    <li><strong>Criteria, not chapters.</strong> MYP tasks and DP coursework are judged against published criteria and markbands, so a student must know what each level of a criterion looks like.</li>
    <li><strong>Coursework counts.</strong> Every DP subject has an internally assessed part, marked by the teacher and moderated by the IB, with its own school deadline.</li>
    <li><strong>Command terms.</strong> Words like "evaluate", "justify" or "show that" each ask for a particular kind of answer, and markschemes reward exactly that.</li>
  </ul>
  <p>
    A student arriving from a board school usually knows the content and finds the written reasoning hard. Our guide
    to <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching into the IB or IGCSE</a> has a
    bridging plan that works from a State Board start too.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibp-choices">Diploma choices and where HL bites</h2>
  <p>
    A Diploma student studies six subjects from the IB's academic areas, normally with three at Higher Level and never
    more than four. HL subjects carry a recommended 240 teaching hours against 150 at Standard Level, and that gap is
    where most requests for help come from: HL maths, physics, chemistry and economics in particular. Grades run from
    1 to 7 per subject; the Extended Essay and Theory of Knowledge together are worth up to three more points, so 45
    is the ceiling, and reaching 24 points is one of several conditions for being awarded the diploma.
  </p>
  <p>
    In maths, students take Analysis and Approaches or Applications and Interpretation, each at SL or HL. The IB is
    revising its maths courses, with first teaching from August 2027, so the tutor must know which version applies to
    your child. Our <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">AA versus AI guide</a> explains the choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibp-assess">IA, EE and TOK: what help is allowed</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The coursework pieces and a tutor's proper role</caption>
    <thead>
      <tr><th scope="col">Piece</th><th scope="col">What the IB sets</th><th scope="col">A tutor may</th><th scope="col">A tutor may not</th></tr>
    </thead>
    <tbody>
      <tr><td>Internal assessment</td><td>An exploration, investigation or other task in each subject, marked to criteria</td><td>Teach the underlying subject; explain the criteria</td><td>Pick the topic, write sections, run the analysis</td></tr>
      <tr><td>Extended Essay</td><td>Independent research up to 4,000 words; three reflection sessions with the school supervisor, the last a viva voce; a 500-word reflection (from 2027 assessment)</td><td>Teach the subject behind the question; ask sharpening questions</td><td>Edit drafts or suggest wording</td></tr>
      <tr><td>Theory of Knowledge</td><td>An exhibition of three objects and a 1,600-word essay on one of six prescribed titles</td><td>Discuss ideas and how the assessment works</td><td>Draft any part of the essay</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The line exists to protect your child. The supervisor checks that the student understands their own essay in the
    viva, and work that was "polished" by someone else can put the whole diploma at risk.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibp-younger">MYP and PYP: quieter, but worth getting right</h2>
  <p>
    The MYP lasts five years, from about age 11, though schools may run a shorter version. Students work across eight
    subject groups, and in the final year everyone completes a personal project of roughly 25 hours. Help in the
    MYP is most useful in two places: maths and science content in the last two years, which shapes Diploma
    choices, and writing to criteria, which means reading the task sheet before any teaching starts.
  </p>
  <p>
    In the PYP there are no external exams. A tutor's value is in secure basics, such as times tables, place value,
    reading stamina and writing, and in helping a child from a textbook-based school get used to open questions,
    rather than in worksheets that turn inquiry into drill.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibp-subjects">Subjects and where to start</h2>
  <ul>
    <li><strong>Maths:</strong> <a href="{{ url('/ib-maths-tutor') }}">IB maths tutors</a>, or IB-experienced tutors among <a href="{{ url('/maths-home-tutor-pune') }}">maths home tutors in Pune</a>.</li>
    <li><strong>Physics, chemistry, biology:</strong> <a href="{{ url('/physics-home-tutor-pune') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-pune') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-pune') }}">biology</a> home tutors in Pune; say SL or HL. The <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics guide</a> covers the investigation.</li>
    <li><strong>English and language courses:</strong> <a href="{{ url('/english-home-tutor-pune') }}">English home tutors in Pune</a>; name the course.</li>
    <li><strong>Economics, business management, MYP subjects:</strong> matched on request.</li>
  </ul>
  <p>
    The <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">parent's guide to IB and IGCSE tutoring</a>
    compares the two systems and applies to any city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibp-zones">Home or online, across Pune's zones</h2>
  <p>
    Our zone notes describe a pattern that suits IB families well: a home tutor for most of the week, plus an online
    specialist for the subject that needs one. How easy the home part is depends on where you live.
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/pune/zone/koregaon-park-camp-wanowrie') }}">Koregaon Park, Camp and Wanowrie</a>:</strong> Bund Garden station on the Aqua Line serves {!! $ibpA('koregaon-park', 'Koregaon Park') !!}; weekday after-school slots avoid the night-time restaurant traffic.</li>
    <li><strong><a href="{{ url('/city/pune/zone/viman-nagar-kalyani-nagar-kharadi') }}">Viman Nagar, Kalyani Nagar and Kharadi</a>:</strong> Ramwadi station sits beside {!! $ibpA('viman-nagar', 'Viman Nagar') !!}, putting it on one line with Vanaz; Nagar Road is slow at the end of the working day.</li>
    <li><strong><a href="{{ url('/city/pune/zone/hadapsar-kondhwa-nibm') }}">Hadapsar, Kondhwa and NIBM</a>:</strong> no metro, so in {!! $ibpA('magarpatta', 'Magarpatta') !!} a local tutor plus online sessions for the specialist subject is often the realistic plan; send cluster, tower and flat to the gate.</li>
    <li><strong><a href="{{ url('/city/pune/zone/aundh-baner-pashan') }}">Aundh, Baner and Pashan</a>:</strong> no working metro yet; in {!! $ibpA('balewadi', 'Balewadi') !!}, look for a tutor from Baner or nearby on a two-wheeler.</li>
    <li><strong><a href="{{ url('/city/pune/zone/kothrud-karve-nagar-deccan') }}">Kothrud, Karve Nagar and Deccan</a>:</strong> the best metro coverage in the city; {!! $ibpA('deccan-gymkhana', 'Deccan Gymkhana') !!} station brings tutors from both lines via District Court.</li>
    <li><strong><a href="{{ url('/city/pune/zone/wakad-hinjewadi-pimpri-chinchwad') }}">Wakad, Hinjewadi and Pimpri-Chinchwad</a>:</strong> {!! $ibpA('hinjewadi', 'Hinjewadi') !!} depends on the road, so early-evening or weekend slots hold best.</li>
    <li><strong><a href="{{ url('/city/pune/zone/katraj-bibwewadi-sinhagad-road') }}">Katraj, Bibwewadi and Sinhagad Road</a>:</strong> tutors ride to Swargate and finish by bus or auto.</li>
  </ul>
  <p>
    For online IB maths and sciences, insist that the tutor sees the working live, through a writing tablet, a shared
    whiteboard or a camera over the notebook, and that your child uses their own approved calculator.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibp-dp-year">Shaping the two Diploma years</h2>
  <p>
    The first months of DP1 are the cheapest time to get help: the jump from Grade 10 shows up in the first HL unit
    tests, and gaps in algebra or basic chemistry are still small. From the middle of DP1 into early DP2, internal
    assessments, Extended Essay research and TOK tasks overlap with normal teaching, and content quietly gets dropped;
    a tutor's written plan, kept beside the school's deadline sheet, stops that. Before the school mocks that feed
    predicted grades, the work becomes timed papers marked against official markschemes, with errors logged by
    topic. In the final exam season, revision should stay narrow, aimed at the weakest papers rather than new
    material. Tell the tutor at the start which of these stages your child is in, because the right session looks
    quite different in each.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibp-demo">What the free demo should show you</h2>
  <ol>
    <li><strong>Fluency with markschemes.</strong> Hand over a marked school test; a tutor who knows the course spots the lost method marks quickly.</li>
    <li><strong>The current syllabus.</strong> Ask which version your child's exam session follows.</li>
    <li><strong>Command terms.</strong> Ask what "evaluate" requires compared with "describe".</li>
    <li><strong>A clear coursework boundary.</strong> The tutor should say plainly that the writing stays your child's.</li>
    <li><strong>A plan from the school calendar.</strong> International schools keep their own dates, so the next six weeks should be mapped to yours.</li>
  </ol>
  <p>
    You get two or three matched tutors, see each fee before the demo, and switching tutor later is free. Tutors who
    join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibp-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. In Pune, the programme,
    level and the ride to your zone matter most; see the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-pune') }}">home tuition fees in Pune</a>.
  </p>
  <p>
    Tell us the programme, year, subject and level, your locality and slots; the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. For a longer explanation of how the IB is organised, see our
    <a href="{{ url('/ib-tutor-gurgaon') }}">IB guide for Gurgaon</a>. Browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>, every locality on the <a href="{{ url('/city/pune') }}">Pune tutors page</a>, or
    <a href="{{ url('/tuition-jobs/pune') }}">tuition jobs in Pune</a> if you teach the IB.
  </p>
  </section>

  </div>
</article>
