{{--
  Board hub for "IB tutor Gurgaon" / "IB home tutors" / "IB tutors near me".
  Author: Ajay Vatsyayan (role: IB, IGCSE and ISC maths). No anecdotes,
  years or results are claimed for him. No schools are named.

  Official sources (fetched 1 Oct 2026; ibo.org HTML pages sit behind a bot
  check, so their text was read from ibo.org search extracts and IB PDFs):
  - IB Extended essay subject brief, first assessment 2027 (ibo.org PDF):
    DP for ages 16–19, six academic areas around a core, normally three (not
    more than four) HL subjects, 240 h HL / 150 h SL; EE 4,000-word upper
    limit, three reflection sessions ending in a 10–15 minute viva voce,
    500-word reflective statement; EE + TOK award up to three points.
  - ibo.org/programmes/diploma-programme/curriculum/dp-core/theory-of-knowledge/
    : TOK assessed by an exhibition (three objects, internally assessed and
    moderated) and a 1,600-word essay on one of six prescribed titles.
  - ibo.org/programmes/primary-years-programme/ and the PYP brochure: ages 3–12,
    six transdisciplinary themes, the exhibition in the final year.
  - ibo.org/programmes/middle-years-programme/ and MYP curriculum pages: ages
    11–16, five years (schools may run shorter versions), eight subject
    groups, personal project of about 25 hours, eAssessment optional except
    the personal project; two-hour on-screen exams in some subject groups.
  - DP subject grades 1–7, maximum 45, 24-point threshold among the passing
    conditions, and IA in every subject: as already verified for
    blog/ib-igcse-tutoring-gurgaon-parents-guide (ibo.org DP assessment pages).
  - IB maths course revision (first teaching Aug 2027, first exams May 2029):
    see ib-maths-tutor-gurgaon (IB curriculum update pages).
  Local detail only from config/zone_guides.php (Gurugram). Fee wording is
  the approved NXTutors sentence. FAQs render from faqs/ib-tutor-gurgaon.php.
  Area links render only when the Gurugram area page exists and is active.
--}}
@php
  $ggAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ggA = function (string $slug, string $label) use ($ggAreaSlugs) {
      return in_array($slug, $ggAreaSlugs, true)
          ? '<a href="' . e(url('/city/gurugram/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ibh-guide" aria-labelledby="ibhGuideTitle">
  <h2 id="ibhGuideTitle">IB tutors in Gurgaon: from PYP to the Diploma, subject by subject</h2>

  <p class="nx-guide__lede">
    "IB tutor" means very different things at age seven and at age seventeen. A Primary Years child needs someone who
    can make reading and number work feel easy; a Diploma student in HL maths or physics needs a subject specialist who
    knows the markbands, the command terms and the rules around coursework. This page is the starting point for IB
    families in Gurugram: how each IB programme is built, where students usually ask for help, how to pick the right
    subject page, what to test in the free demo, and when home or online tuition makes more sense in your part of the
    city. Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths on NXTutors, wrote it.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ibh-stages">The three programmes</a> ·
    <a href="#ibh-pyp">PYP</a> ·
    <a href="#ibh-myp">MYP</a> ·
    <a href="#ibh-dp">The Diploma</a> ·
    <a href="#ibh-core">IA, EE and TOK</a> ·
    <a href="#ibh-subjects">Pick a subject</a> ·
    <a href="#ibh-demo">Judging a tutor at the demo</a> ·
    <a href="#ibh-mode">Home or online in Gurugram</a> ·
    <a href="#ibh-start">Fees and next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ibh-stages">How the IB is organised: PYP, MYP and DP</h2>
  <p>
    The International Baccalaureate runs separate programmes for different ages. A school may offer one, two or all
    three, and the years it does not cover may follow another board. So the first
    question for any tutor is not "IB?" but "which programme, which year, which subject and which level?".
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The IB programmes a Gurugram family is likely to meet</caption>
    <thead>
      <tr><th scope="col">Programme</th><th scope="col">Ages (as the IB describes)</th><th scope="col">How learning is judged</th><th scope="col">Where a tutor usually fits</th></tr>
    </thead>
    <tbody>
      <tr><td>Primary Years (PYP)</td><td>3 to 12</td><td>Inquiry units across six transdisciplinary themes; no external exams; an exhibition in the final year</td><td>Reading, writing and number fluency; confidence with open-ended tasks</td></tr>
      <tr><td>Middle Years (MYP)</td><td>11 to 16, a five-year programme</td><td>Criteria-based tasks in eight subject groups; a personal project; optional IB on-screen exams chosen by the school</td><td>Maths and sciences, writing against criteria, organising long tasks</td></tr>
      <tr><td>Diploma (DP)</td><td>16 to 19, two years</td><td>Six subjects graded 1 to 7, internal assessment in every subject, final exams, plus the EE, TOK and CAS</td><td>HL maths and sciences, economics, essay subjects, planning the IA and EE within the rules</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibh-pyp">The Primary Years Programme: what help looks like</h2>
  <p>
    The IB describes the PYP as a framework for children aged 3 to 12, organised around six transdisciplinary themes
    and taught through units of inquiry rather than chapter-by-chapter textbooks. In the final year, students take on
    the PYP exhibition, a collaborative inquiry into a real-life issue that the whole school community celebrates.
  </p>
  <p>
    Because there are no board papers, a PYP tutor is not preparing anyone for an exam. The useful work is quieter:
    making sure times tables, place value and fractions are secure; building reading stamina and the habit of writing
    a clear paragraph; and helping a child who has moved from a textbook-based school get used to questions with more
    than one acceptable answer. A tutor who turns inquiry units into worksheets of drill misses the point. For this age
    group, our <a href="{{ url('/primary-home-tutor-gurgaon') }}">primary home tutors in Gurgaon</a> page explains how we
    match.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibh-myp">The Middle Years Programme: criteria, projects and on-screen exams</h2>
  <p>
    The MYP is a five-year programme for ages 11 to 16, though schools may run shorter versions. Students study eight
    subject groups: language and literature, language acquisition, individuals and societies, sciences, mathematics,
    arts, physical and health education, and design. Work is marked against published criteria in each subject, each
    with its own levels, rather than as a single percentage.
  </p>
  <p>
    In the final year every MYP student completes the personal project, which the IB describes as a long-term,
    independent piece of about 25 hours, submitted and moderated through eAssessment. Schools may also enter students
    for IB on-screen examinations of two hours in some subject groups, including mathematics and sciences; whether your
    child sits them is the school's choice.
  </p>
  <p>
    MYP students most often need help in two places. The first is maths and science content, especially in the last
    two years, when the gap between a student who is fluent in algebra and one who is not starts to matter for the
    Diploma choices ahead. The second is writing to the criteria: explaining a method, evaluating an experiment or
    justifying a design choice in words. A good MYP tutor reads the task sheet and the criteria with the student
    before any teaching begins.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibh-dp">The Diploma Programme: six subjects, three levels of pressure</h2>
  <p>
    The Diploma is a two-year pre-university course. Students take six subjects drawn from the IB's academic areas:
    two languages, a humanities or social science, an experimental science, mathematics and an arts subject, or a
    second subject from another area in place of the arts. Normally three subjects, and never more than four, are
    taken at Higher Level. The IB recommends 240 teaching hours for an HL subject and 150 for SL.
  </p>
  <p>
    Each subject is graded from 1 to 7. The Extended Essay and Theory of Knowledge together add up to three more
    points, which is where the maximum of 45 comes from, and the IB's passing conditions include at least 24 points
    alongside other requirements. Every subject also has an internally assessed component, marked by the teacher and
    moderated by the IB, with its own deadline in the school calendar.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Where DP students usually feel the pressure</caption>
    <thead>
      <tr><th scope="col">Point in the course</th><th scope="col">What happens</th><th scope="col">What a tutor can usefully do</th></tr>
    </thead>
    <tbody>
      <tr><td>Start of DP1</td><td>The step up from Grade 10, new vocabulary, first unit tests at HL</td><td>Fill algebra and science gaps early; set up a weekly past-paper habit</td></tr>
      <tr><td>Middle of DP1 to early DP2</td><td>IA work, EE research and TOK tasks overlap with ongoing teaching</td><td>Teach the subject behind the chosen topic; keep a written plan so content is not dropped</td></tr>
      <tr><td>Before predicted grades</td><td>School mocks decide the grades sent to universities</td><td>Timed papers marked against official markschemes, error logs by topic</td></tr>
      <tr><td>Final exam session</td><td>Papers in every subject within a few weeks</td><td>Short, focused revision on the weakest papers, not new content</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibh-core">IA, Extended Essay and TOK: what a tutor may and may not do</h2>
  <p>
    Parents ask about the core more than anything else, because it is where good intentions can turn into an academic
    integrity problem. The IB's own descriptions set the frame:
  </p>
  <ul>
    <li><strong>Extended Essay.</strong> An externally assessed piece of independent research, either in one subject or combining two, with an upper limit of 4,000 words. It is guided by a supervisor at school. Under the version first assessed in 2027, there are three formal reflection sessions with that supervisor, the last being a short viva voce, and the student writes a 500-word reflective statement.</li>
    <li><strong>Theory of Knowledge.</strong> Assessed through an exhibition of three objects, marked by the teacher and moderated by the IB, and a 1,600-word essay on one of six titles the IB prescribes for each exam session.</li>
    <li><strong>Internal assessment.</strong> A written exploration in maths, an investigation in the sciences, and different formats in other subjects, all marked against published criteria.</li>
  </ul>
  <p>
    The work must be the student's own. A tutor can teach the physics, chemistry, economics or maths that sits behind
    a chosen topic, explain what each criterion rewards, and ask the questions that make a student sharpen a research
    question. A tutor should not pick the topic, write or edit any part of a draft, or run the analysis. The
    supervisor gives feedback on drafts, within limits the IB sets, and the viva voce exists partly to check that the
    student understands their own essay. Any tutor who offers to "polish" an IA or EE is putting your child's diploma at
    risk.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibh-subjects">Pick a subject: our IB pages for Gurgaon</h2>
  <p>
    IB families usually start with one Diploma subject, often at HL. Each of these pages goes into
    that subject's papers and internal assessment in detail:
  </p>
  <ul>
    <li><strong>Maths (AA or AI, SL or HL).</strong> The course choice, the exploration and the revised courses from 2027. See <a href="{{ url('/ib-maths-tutor-gurgaon') }}">IB maths tutors in Gurgaon</a>, or the <a href="{{ url('/ib-maths-tutor') }}">IB maths tutor</a> page if you prefer online classes.</li>
    <li><strong>Physics.</strong> Data-based questions, the investigation and the step up at HL: <a href="{{ url('/ib-physics-tutor-gurgaon') }}">IB physics tutors in Gurgaon</a>.</li>
    <li><strong>Chemistry.</strong> Stoichiometry, organic mechanisms at HL and the scientific investigation: <a href="{{ url('/ib-igcse-chemistry-tutor-gurgaon') }}">IB and IGCSE chemistry tutors in Gurgaon</a>.</li>
    <li><strong>Biology, economics, business management and the languages.</strong> We match these on request. Tell us the exact subject and level, because a tutor for Economics HL is not automatically right for Business Management SL.</li>
    <li><strong>MYP maths and sciences.</strong> Usually a tutor from the maths or science pages above who has taught MYP criteria; say which MYP year your child is in.</li>
  </ul>
  <p>
    For the wider picture, our <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">parent's guide to
    IB and IGCSE tutoring in Gurgaon</a> compares the two systems, and the
    <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA vs AI guide</a> and
    <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL/HL, IA and EE guide</a> go deeper into those
    subjects. Moving into the Diploma from CBSE or IGCSE? Read
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching from CBSE to IB or IGCSE</a> first.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibh-demo">How to judge an IB tutor at the free demo</h2>
  <p>
    A friendly first class tells you little. Bring something real from school and watch what the tutor does with it.
  </p>
  <ol>
    <li><strong>Hand over a marked test.</strong> A tutor who knows the Diploma will read the markscheme codes, spot where method marks were lost and say what to practise, within minutes.</li>
    <li><strong>Ask about the syllabus version.</strong> IB courses are revised on a cycle; maths changes from August 2027, and the EE brief changed for 2027 assessment. A current tutor knows which version your child's exam session uses.</li>
    <li><strong>Test the command terms.</strong> Ask what "hence", "show that" or "evaluate" require. Vague answers are a warning sign.</li>
    <li><strong>Check calculator habits.</strong> For maths and sciences, the tutor should work on your child's approved GDC or calculator, not their own phone.</li>
    <li><strong>Ask where the line is on the IA.</strong> Listen for "I teach the concepts and the criteria; the writing is yours". Anything else, walk away.</li>
    <li><strong>Ask for a plan.</strong> By the end of the demo you should hear the next four to six weeks in outline, tied to your child's school calendar.</li>
  </ol>
  <p>
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes
    live. You get two or three matched tutors, see each one's fee before the demo, and switching tutor later is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibh-mode">IB home tutors near you, or online?</h2>
  <p>
    Many families along Golf Course Road and Golf Course Extension Road have children in IB and IGCSE schools, mostly
    living in gated high-rise societies, and a growing number of Sohna Road families ask for IB tutors too. Home
    tuition works well when a tutor who knows your child's exact course lives within a short drive, for example around
    {!! $ggA('dlf-phase-5', 'DLF Phase 5') !!}, {!! $ggA('sector-54', 'Sector 54') !!},
    {!! $ggA('sector-57', 'Sector 57') !!} or {!! $ggA('sector-58', 'Sector 58') !!} on the Golf Course side, or
    {!! $ggA('nirvana-country', 'Nirvana Country') !!} and {!! $ggA('sector-50', 'Sector 50') !!} off Sohna Road.
    Evening office traffic on these roads is heavy, so a slot before five or after half past seven is easier to keep.
  </p>
  <p>
    Specialists for a single HL subject are fewer in any one area. In New Gurugram sectors such as
    {!! $ggA('sector-82', 'Sector 82') !!} and {!! $ggA('sector-86', 'Sector 86') !!}, or along the Dwarka Expressway
    in {!! $ggA('sector-37d', 'Sector 37D') !!}, online or hybrid classes widen the choice considerably: a weekend home
    session plus a weekday online session with the same tutor. For maths and physics online, the tutor must see written
    working live, through a writing tablet, a shared whiteboard or a camera over the notebook. Our
    <a href="{{ url('/online-tutor-gurgaon') }}">online tutoring for Gurgaon</a> page covers the setup, and the
    <a href="{{ url('/blog/gurgaon-golf-course-road-dlf-tuition-guide') }}">Golf Course Road and DLF guide</a> and
    <a href="{{ url('/blog/gurgaon-golf-course-extension-spr-tuition-guide') }}">Golf Course Extension and SPR guide</a>
    add local timing and gate-entry tips.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibh-start">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For IB the fee also
    moves with the programme, the level, how many subjects you need and the tutor's travel at your slot. Our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-gurgaon') }}">home tuition fees in Gurgaon</a> post help with budgeting.
  </p>
  <p>
    To start, tell us the programme, year, subject and level (for example "DP1, Physics HL"), your sector or society
    and the slots that work. We shortlist two or three tutors and the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. You can also browse <a href="{{ url('/tutors') }}">tutor
    profiles</a> or all areas on our page of <a href="{{ url('/city/gurugram') }}">home tutors in Gurgaon</a>.
  </p>
  </section>

  </div>
</article>
