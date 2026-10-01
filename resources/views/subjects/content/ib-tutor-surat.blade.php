{{--
  Board page for "IB tutor Surat" (PYP, MYP, DP). Author: Ajay Vatsyayan (role:
  IB, IGCSE and ISC maths). No anecdotes, years or results are claimed for him.
  No schools or societies are named.

  IB facts are reworded from the Gurgaon board hub (ib-tutor-gurgaon), which
  cites ibo.org pages and IB PDFs (read 1 Oct 2026): PYP ages 3-12, six
  transdisciplinary themes, exhibition; MYP ages 11-16, five years, eight
  subject groups, personal project of about 25 hours, optional two-hour
  on-screen exams; DP ages 16-19, six subjects, three (max four) HL,
  240 h HL / 150 h SL, grades 1-7, EE + TOK up to three points, maximum 45,
  24 points among passing conditions, IA in every subject moderated by the IB;
  EE (first assessment 2027) 4,000-word limit, three reflection sessions ending
  in a viva voce, 500-word reflective statement; TOK exhibition of three
  objects and a 1,600-word essay on one of six prescribed titles; maths AA/AI
  at SL/HL, revised course first taught August 2027. No exam dates.
  Local detail only from the Surat city hub view (requests under four boards;
  IB Diploma combines final papers with internal assessment; a tutor may talk
  through an IA or EE but never writes it; online widens the choice to tutors
  across India for IB), zones/surat.json and surat-zone-guides.json (Adajan:
  nearby home tutor plus online specialist for senior subjects; Amroli and Mota
  Varachha: nearby tutor plus online specialist for senior papers). No claim is
  made about where IB families live. Area links render only for active Surat
  areas. Fee wording is the approved sentence. FAQs render from faqs/ib-tutor-surat.php.
--}}
@php
  $ibsSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ibsA = function (string $slug, string $label) use ($ibsSlugs) {
      return in_array($slug, $ibsSlugs, true)
          ? '<a href="' . e(url('/city/surat/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="ibsGuideTitle">
  <h2 id="ibsGuideTitle">IB tutors in Surat: the right course knowledge, on either bank of the Tapi or online</h2>

  <p class="nx-guide__lede">
    The IB is one of four boards Surat families ask us about, and it is the one where general subject knowledge
    counts for least on its own. Diploma results combine final papers with internally assessed work, coursework comes
    with firm rules about who writes what, and every answer is judged against published criteria or markschemes. So
    the first job is to describe exactly what your child is studying; the second is to decide whether the best tutor
    for that course can come home, teach online, or do both. This page covers the IB's three programmes, how its
    assessment differs from GSEB and CBSE, the coursework rules, where tutoring helps most at each stage, and how home
    and online tuition work across Surat. It is written by Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths on
    NXTutors.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ibs-course">Describe the course</a> ·
    <a href="#ibs-progs">Programme by programme</a> ·
    <a href="#ibs-numbers">Diploma in numbers</a> ·
    <a href="#ibs-boards">IB, GSEB and CBSE</a> ·
    <a href="#ibs-core">The core and the rules</a> ·
    <a href="#ibs-stages">Stage by stage</a> ·
    <a href="#ibs-subjects">Subjects</a> ·
    <a href="#ibs-zones">Across Surat</a> ·
    <a href="#ibs-demo">The demo</a> ·
    <a href="#ibs-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ibs-course">Describe the course, not just the board</h2>
  <p>
    "IB tutor" covers a seven-year-old in a primary inquiry unit and an eighteen-year-old in Chemistry HL. A useful
    request names the programme, the year, the subject or course, and, in the Diploma, the level. "DP1, Maths
    Applications and Interpretation SL" or "MYP 4 sciences" lets us look for tutors who have taught exactly that,
    rather than tutors who are simply good at a subject.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibs-progs">Programme by programme</h2>
  <p>
    <strong>Primary Years (ages 3 to 12).</strong> Children learn through units of inquiry organised around six
    transdisciplinary themes and finish with an exhibition in the last year. There are no external exams. A tutor's
    value lies in fluent arithmetic, confident reading and clear writing, and in helping a child who arrived from a
    textbook-led school get used to open-ended tasks.
  </p>
  <p>
    <strong>Middle Years (ages 11 to 16).</strong> A five-year programme, which some schools shorten, spanning eight
    subject groups and marked against published criteria with levels. In the final year every student completes a
    personal project of around 25 hours, and schools may enter students for two-hour on-screen exams in some subjects.
    Tutoring is most useful for maths and science content in the later years and for writing that meets the criteria.
  </p>
  <p>
    <strong>Diploma (ages 16 to 19).</strong> Two years, six subjects, internally assessed work in each, final exams,
    and the core of the Extended Essay, Theory of Knowledge and CAS.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibs-numbers">The Diploma in numbers</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Key Diploma figures, as the IB sets them</caption>
    <thead>
      <tr><th scope="col">Item</th><th scope="col">Figure</th><th scope="col">Why it matters for tuition</th></tr>
    </thead>
    <tbody>
      <tr><td>Subjects</td><td>Six, across the IB's academic areas</td><td>Help is usually needed in one or two, not all</td></tr>
      <tr><td>Higher Level</td><td>Normally three, at most four</td><td>HL subjects generate most requests</td></tr>
      <tr><td>Recommended teaching hours</td><td>240 for HL, 150 for SL</td><td>HL goes deeper and faster; early gaps grow</td></tr>
      <tr><td>Subject grades</td><td>1 to 7</td><td>Markschemes reward method and command terms</td></tr>
      <tr><td>Extended Essay and TOK</td><td>Up to three points together</td><td>The core can lift or limit the total</td></tr>
      <tr><td>Maximum and threshold</td><td>45; at least 24 among the passing conditions</td><td>Targets should be set per subject</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Maths comes as Analysis and Approaches or Applications and Interpretation, each at SL or HL, and the IB's revised
    maths courses start teaching in August 2027. See our <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">AA vs AI
    guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibs-boards">How the IB differs from GSEB and CBSE</h2>
  <p>
    Many Surat students study under GSEB, in Gujarati, English or another medium, and many others under CBSE. In
    general, both build to a public board examination from prescribed textbooks. The IB instead judges much of a
    student's work against criteria, includes coursework in every Diploma subject, and phrases questions with command
    terms that expect a particular kind of answer. A student moving in from a board school usually has the content and
    finds the written reasoning, the open questions and the coursework deadlines unfamiliar. If your child studied in
    Gujarati medium earlier, academic English will need attention too. Our guide to
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching from CBSE to IB or IGCSE</a> has a
    bridging plan that also suits GSEB students.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibs-core">The core, and the rules around coursework</h2>
  <p>
    The Extended Essay is independent research with a ceiling of 4,000 words, guided by a supervisor at school. For
    essays assessed from 2027, the student has three formal reflection sessions with the supervisor, ending with a
    short viva voce, and writes a 500-word reflective statement. Theory of Knowledge is assessed through an exhibition
    of three objects and a 1,600-word essay on one of six titles the IB prescribes for each session. Every subject's
    internal assessment is marked by the teacher and moderated by the IB.
  </p>
  <p>
    A tutor may talk through an IA or EE, but never writes it. In practice that means teaching the subject behind
    the topic, explaining what each criterion rewards, and asking questions that sharpen the student's own thinking.
    Choosing the topic, drafting, editing or doing the analysis are off limits, and the viva is there partly to check
    that the work is the student's own.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibs-stages">Where tutoring helps, stage by stage</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>From the PYP to the end of the Diploma</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">What tends to be hard</th><th scope="col">What a tutor should do first</th></tr>
    </thead>
    <tbody>
      <tr><td>PYP</td><td>Number facts, reading stamina, open tasks</td><td>Short, regular practice that keeps inquiry intact</td></tr>
      <tr><td>Early MYP</td><td>Writing to criteria; organising long tasks</td><td>Read the task sheet and criteria together</td></tr>
      <tr><td>MYP 4 and 5</td><td>Algebra and science depth before the Diploma; the personal project timeline</td><td>Close gaps that would limit Diploma choices</td></tr>
      <tr><td>DP1</td><td>The jump to HL in the first unit tests</td><td>Fix foundations; start past questions by topic</td></tr>
      <tr><td>Late DP1 to DP2</td><td>IA, EE and TOK overlapping with teaching; mocks for predicted grades</td><td>A written plan around school deadlines; timed papers against markschemes</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibs-week">What a sensible IB tutoring week looks like</h2>
  <p>
    For a Diploma student, one focused session a week per difficult HL subject is a common starting point, with a
    second session added in the weeks before mocks or when an internal assessment deadline is close. Each session
    should mix three things: repair of whatever went wrong in the last school test, teaching of the next topic ahead
    of or alongside the class, and a few past-paper questions marked against the official markscheme so the student
    sees where method marks come from. Keep one shared sheet of school deadlines for the IA, the Extended Essay and
    TOK, and check it at the start of each session, so that a coursework date never arrives as a surprise in the
    same week as a unit test.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibs-subjects">Subjects and where to look</h2>
  <ul>
    <li><strong>Maths:</strong> <a href="{{ url('/ib-maths-tutor') }}">IB maths tutors</a>, or IB-experienced tutors among <a href="{{ url('/maths-home-tutor-surat') }}">maths home tutors in Surat</a>.</li>
    <li><strong>Physics:</strong> <a href="{{ url('/physics-home-tutor-surat') }}">physics home tutors in Surat</a>, with the <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics guide</a> on SL, HL, the IA and EE.</li>
    <li><strong>Chemistry and biology:</strong> <a href="{{ url('/chemistry-home-tutor-surat') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-surat') }}">biology</a> home tutors in Surat.</li>
    <li><strong>English and other language courses:</strong> <a href="{{ url('/english-home-tutor-surat') }}">English home tutors in Surat</a>.</li>
    <li><strong>Economics, business management and MYP subjects:</strong> matched on request.</li>
  </ul>
  <p>
    The <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">parent's guide to IB and IGCSE tutoring</a>
    compares the two international routes in detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibs-zones">Home, online or both, across Surat</h2>
  <p>
    Online lessons widen the choice to IB tutors across India, and our zone notes describe Surat families pairing a
    nearby home tutor with an online specialist for senior subjects. The metro is still under construction, so the
    home part depends on roads, bridges and buses.
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/surat/zone/adajan-pal-rander') }}">Adajan, Pal and Rander</a>:</strong> crossing the Tapi at office hours is the slow part, so in {!! $ibsA('palanpur', 'Palanpur') !!} look first at tutors living west of the river.</li>
    <li><strong><a href="{{ url('/city/surat/zone/central-surat-athwa-ghod-dod-road') }}">Central Surat, Athwa and Ghod Dod Road</a>:</strong> central, so tutors from Adajan, Piplod and City Light can reach {!! $ibsA('ghod-dod-road', 'Ghod Dod Road') !!} without much extra travel; start straight after school.</li>
    <li><strong><a href="{{ url('/city/surat/zone/piplod-vesu-dumas-road') }}">Piplod, Vesu and Dumas Road</a>:</strong> gated societies in {!! $ibsA('city-light', 'City Light') !!} and along {!! $ibsA('dumas-road', 'Dumas Road') !!}; ask security for a standing entry after the demo, and avoid weekend-evening peaks.</li>
    <li><strong><a href="{{ url('/city/surat/zone/udhna-althan-pandesara') }}">Udhna, Althan and Pandesara</a>:</strong> rail and bus serve {!! $ibsA('udhna', 'Udhna') !!} well; set lessons after shift traffic.</li>
    <li><strong><a href="{{ url('/city/surat/zone/katargam-varachha-sarthana') }}">Katargam, Varachha and Sarthana</a>:</strong> newer societies in {!! $ibsA('sarthana', 'Sarthana') !!} note visitors at the gate; on the northern edge, a local tutor plus an online HL specialist is common.</li>
  </ul>
  <p>
    Online maths and sciences only work if the tutor sees the working live and your child uses their own approved
    calculator. Navratri and the Diwali holidays change evenings across Gujarat, so agree those weeks in advance.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibs-demo">What a good demo looks like</h2>
  <ol>
    <li>The tutor reads a marked school test and explains where marks were lost, using the markscheme's logic.</li>
    <li>They know which syllabus version your child's exam session follows.</li>
    <li>They can say what "evaluate", "justify" or "show that" requires.</li>
    <li>They state plainly that coursework writing stays your child's.</li>
    <li>They sketch the next six weeks against your school's own calendar.</li>
  </ol>
  <p>
    The shortlist has two or three tutors, each fee shows before the demo, and you can change tutor later at no cost.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes
    live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibs-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. The programme, level and
    whether the tutor must cross the river shape the figure; see the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and <a href="{{ url('/blog/home-tuition-fees-surat') }}">home tuition fees in Surat</a>.
  </p>
  <p>
    Describe the course as above, add your locality and the evenings that suit you, and we arrange a
    <a href="{{ url('/demo-class') }}">free demo</a> as the first class. For a fuller tour of the IB's programmes, read
    our <a href="{{ url('/ib-tutor-gurgaon') }}">IB guide for Gurgaon</a>. Browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>, every area on the <a href="{{ url('/city/surat') }}">Surat tutors page</a>, or
    <a href="{{ url('/tuition-jobs/surat') }}">tuition jobs in Surat</a> if you teach the IB.
  </p>
  </section>

  </div>
</article>
