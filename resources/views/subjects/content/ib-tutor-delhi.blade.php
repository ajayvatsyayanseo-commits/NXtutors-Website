{{--
  Board hub for "IB tutor Delhi" (PYP, MYP and Diploma). Author: Ajay
  Vatsyayan (role: IB, IGCSE and ISC maths). No anecdotes, years or results are
  claimed for him. No schools, coaching institutes, societies or people are
  named.

  Board facts are reworded from the Gurgaon IB hub (ib-tutor-gurgaon), which
  cites these official sources (ibo.org pages, search extracts and IB PDFs,
  read 1 Oct 2026):
  - IB Extended essay subject brief, first assessment 2027 (ibo.org PDF): DP
    for ages 16-19, six academic areas around a core, normally three (not more
    than four) HL subjects, 240 h HL / 150 h SL; EE 4,000-word upper limit,
    three reflection sessions ending in a short viva voce, 500-word reflective
    statement; EE + TOK award up to three points.
  - ibo.org DP core, theory-of-knowledge: TOK assessed by an exhibition (three
    objects, internally assessed and moderated) and a 1,600-word essay on one
    of six prescribed titles.
  - ibo.org/programmes/primary-years-programme/ and the PYP brochure: ages
    3-12, six transdisciplinary themes, the exhibition in the final year.
  - ibo.org/programmes/middle-years-programme/: ages 11-16, five years
    (schools may run shorter versions), eight subject groups, personal project
    of about 25 hours, eAssessment optional except the personal project;
    two-hour on-screen exams in some subject groups.
  - DP subject grades 1-7, maximum 45, 24-point threshold among the passing
    conditions, IA in every subject (ibo.org DP assessment pages).
  - IB maths course revision, first teaching 2027 (IB curriculum update pages,
    as cited on ib-maths-tutor-gurgaon).
  Delhi detail only from the Delhi city hub view (CBSE for most students,
  ICSE/ISC sizeable, a smaller IB/IGCSE group; DP maths as AA or AI at SL or
  HL; tutors may discuss but never write an IA or EE; no state board
  described), database/seo-content/areas/delhi-research.json and
  delhi-zone-guides.json. No board is said to concentrate in any area. Fee
  wording is the approved NXTutors sentence. FAQs render from
  faqs/ib-tutor-delhi.php. Area links render only for active Delhi areas.
--}}
@php
  $ibdSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ibdA = function (string $slug, string $label) use ($ibdSlugs) {
      return in_array($slug, $ibdSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ibd-guide" aria-labelledby="ibdGuideTitle">
  <h2 id="ibdGuideTitle">IB tutors in Delhi: matching the programme, the subject and the level</h2>

  <p class="nx-guide__lede">
    IB families in Delhi are a smaller group than CBSE or ICSE families, which shapes the search for a tutor in two
    ways. The right specialist for, say, Chemistry HL may not live near you, and a tutor who says "I teach IB" may
    mean the Primary Years, the Diploma or anything in between. This guide sorts that out: what each IB programme
    asks of a student, how the Diploma is graded, where the rules on coursework draw the line for tutors, which
    subjects Delhi families most often ask about, how to test a tutor in the free demo, and how to make home or hybrid
    lessons work across the city. It is written by Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths on NXTutors.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ibd-delhi">IB in Delhi</a> ·
    <a href="#ibd-programmes">The programmes</a> ·
    <a href="#ibd-early">PYP and MYP help</a> ·
    <a href="#ibd-diploma">How the Diploma is graded</a> ·
    <a href="#ibd-core">Coursework rules</a> ·
    <a href="#ibd-subjects">Subjects</a> ·
    <a href="#ibd-session">A DP session</a> ·
    <a href="#ibd-travel">Reaching your home</a> ·
    <a href="#ibd-demo">The demo</a> ·
    <a href="#ibd-fees">Fees and next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ibd-delhi">Where the IB fits in Delhi</h2>
  <p>
    Our <a href="{{ url('/city/delhi') }}">Delhi tutors page</a> sums up the mix: most students sit CBSE, ICSE and ISC
    have a sizeable following, and a smaller group study for the IB or Cambridge IGCSE. It also sets out the two
    points every IB parent should hold on to. The Diploma blends final exams with internally assessed work, and its
    mathematics runs as two courses, Analysis and Approaches or Applications and Interpretation, each at Standard or
    Higher Level. And a tutor may discuss an Internal Assessment or Extended Essay with a student but must never write
    any part of it.
  </p>
  <p>
    Many IB students in Delhi joined from CBSE or ICSE, and some families have moved from a state board elsewhere in
    India. The shift is less about knowing more and more about working differently: open tasks marked against
    published criteria, command terms that decide what an answer must contain, and long pieces of independent work.
    Our guide to <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching from CBSE to IB or
    IGCSE</a> has a bridging plan that applies in Delhi as well.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibd-programmes">Three IB programmes, three different tutoring jobs</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>PYP, MYP and DP: what is assessed and what to tell a tutor</caption>
    <thead>
      <tr><th scope="col">Programme</th><th scope="col">Ages, as the IB states them</th><th scope="col">What is assessed</th><th scope="col">Tell the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>Primary Years (PYP)</td><td>3 to 12</td><td>Units of inquiry across six transdisciplinary themes; a final-year exhibition; no external exams</td><td>The grade, and whether reading, writing or number is the worry</td></tr>
      <tr><td>Middle Years (MYP)</td><td>11 to 16, over five years (some schools run fewer)</td><td>Criteria-based tasks in eight subject groups; a personal project; on-screen exams only if the school enters students</td><td>The MYP year, the subject, and a recent task sheet with its criteria</td></tr>
      <tr><td>Diploma (DP)</td><td>16 to 19, over two years</td><td>Six subjects graded 1 to 7, internal assessment in each, final exams, plus the core</td><td>DP1 or DP2, each subject with its level, and any IA or EE deadline</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A school may run one, two or all three programmes and follow another board in the other years, so "IB" on a
    request form is only the start. Give us the programme, year, subject and level together.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibd-early">PYP and MYP: what useful help looks like</h2>
  <p>
    <strong>PYP.</strong> The IB frames the PYP around six transdisciplinary themes, taught through inquiry rather than
    a textbook sequence, and in the final year students carry out an exhibition on a real-world issue. There is no
    board exam to prepare for, so a PYP tutor's value is in fluency: number facts and place value that are automatic,
    reading stamina, and the confidence to write a clear paragraph in response to an open question. Drilling
    worksheets against inquiry units is the wrong approach.
  </p>
  <p>
    <strong>MYP.</strong> The MYP spreads across eight subject groups, from language and literature to design, and each
    is marked against published criteria with their own levels. In the final year every student completes a personal
    project of around 25 hours, which is submitted and moderated through eAssessment. Some schools also enter students
    for two-hour IB on-screen exams in subject groups such as mathematics and the sciences. The two common needs are
    maths and science content in the last two years, which sets up Diploma choices, and writing that meets the
    criteria: explaining a method, evaluating results, justifying a decision. A good MYP tutor reads the criteria with
    the student before teaching anything.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibd-diploma">How the Diploma is built and graded</h2>
  <p>
    The Diploma takes two years. A student chooses six subjects from the IB's academic areas, usually two languages, an
    individuals and societies subject, a science, mathematics and either an arts subject or a second choice from another
    area. Three subjects, occasionally four, are taken at Higher Level. The IB recommends 240 teaching hours for HL and
    150 for SL, which is why a weak HL subject cannot be caught up in a few weeks.
  </p>
  <p>
    Each subject is graded from 1 to 7. The Extended Essay and Theory of Knowledge together are worth up to three more
    points, giving a maximum of 45, and 24 points is among the IB's conditions for passing. Every subject also has an
    internal assessment, marked by the school and moderated by the IB. The maths courses are being revised for first
    teaching in 2027, so a tutor must know which version your child's cohort follows.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibd-core">IA, Extended Essay and TOK: the line a tutor must not cross</h2>
  <ul>
    <li><strong>Extended Essay:</strong> independent research of up to 4,000 words, in one subject or across two, guided by a school supervisor. Under the version first assessed in 2027 there are three reflection sessions with the supervisor, the last a short viva voce, and a 500-word reflective statement.</li>
    <li><strong>Theory of Knowledge:</strong> an exhibition built on three objects, marked by the teacher and moderated by the IB, and a 1,600-word essay on one of six titles the IB sets for each session.</li>
    <li><strong>Internal assessment:</strong> a mathematical exploration, a scientific investigation and other formats by subject, all marked against published criteria.</li>
  </ul>
  <p>
    A tutor can teach the subject knowledge behind a topic, explain what each criterion is looking for and ask the
    questions that sharpen a research question. A tutor must not choose the topic, write or edit drafts, or run the
    analysis. The viva exists partly to confirm the work is the student's own. Walk away from anyone who offers to
    "improve" an IA or EE draft.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibd-subjects">Which IB subjects Delhi families ask about</h2>
  <p>
    Diploma maths, in either course and especially at HL, is the most common request, followed by physics, chemistry
    and biology, then economics and the essay subjects. MYP families usually ask for maths and sciences in the last two
    years. PYP requests are mostly about reading, writing and number.
  </p>
  <ul>
    <li><strong>Maths AA or AI:</strong> the <a href="{{ url('/ib-maths-tutor') }}">IB maths tutor</a> page and the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">guide to choosing AA or AI at SL or HL</a>; for home lessons, <a href="{{ url('/maths-home-tutor-delhi') }}">maths home tutors in Delhi</a>.</li>
    <li><strong>Physics:</strong> the <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL and HL, IA and EE guide</a> and <a href="{{ url('/physics-home-tutor-delhi') }}">physics home tutors in Delhi</a>.</li>
    <li><strong>Chemistry and biology:</strong> <a href="{{ url('/chemistry-home-tutor-delhi') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-delhi') }}">biology</a> home tutors in Delhi, matched to the IB course on request.</li>
    <li><strong>Economics, business management, English and other languages:</strong> matched on request; give the exact subject and level, since a tutor for one HL subject is not automatically right for a neighbouring SL one.</li>
  </ul>
  <p>
    For the wider picture, read the <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">parent's guide
    to IB and IGCSE tutoring</a> and our more detailed <a href="{{ url('/ib-tutor-gurgaon') }}">IB tutors in Gurgaon</a>
    guide, which goes further into each programme.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibd-session">A productive Diploma session</h2>
  <p>
    Start from something the school has marked: a unit test, a homework set or a past-paper question. The tutor works
    out where the marks went, using the markscheme's language, and picks the one gap that matters most. The middle of
    the session rebuilds that idea with worked examples in the style of real papers and the right command terms. The
    last part is a fresh question done under time and marked together. Every few weeks, the tutor should map the
    school calendar, including IA and EE deadlines, so content teaching does not stall when coursework peaks in DP1 and
    early DP2. In the months before predicted grades, sessions shift to timed papers and an error log by topic.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibd-travel">IB home tutors across Delhi: routes and timing</h2>
  <p>
    IB students live all over Delhi, and a tutor for a particular HL subject may be some distance away, so route and
    slot matter more than for CBSE. Some examples of how lessons are arranged:
  </p>
  <ul>
    <li>{!! $ibdA('vasant-vihar', 'Vasant Vihar') !!} (<a href="{{ url('/city/delhi/zone/vasant-kunj-vasant-vihar-palam') }}">Vasant Kunj, Vasant Vihar and Palam</a>): the Magenta Line has a Vasant Vihar station; houses often have a guard or staff at the door, so share the tutor's name in advance.</li>
    <li>{!! $ibdA('greater-kailash-1', 'Greater Kailash 1') !!} (<a href="{{ url('/city/delhi/zone/gk-defence-colony-lajpat-nagar') }}">GK, Defence Colony and Lajpat Nagar</a>): Greater Kailash station on the Magenta Line; floors often have separate bells, so say which one.</li>
    <li>{!! $ibdA('panchsheel-park', 'Panchsheel Park') !!} (<a href="{{ url('/city/delhi/zone/saket-malviya-nagar-hauz-khas') }}">Saket, Malviya Nagar and Hauz Khas</a>): its own Magenta Line stop; avoid the Outer Ring Road junctions at office hours.</li>
    <li>{!! $ibdA('nizamuddin-east', 'Nizamuddin East') !!} (<a href="{{ url('/city/delhi/zone/lodhi-colony-jangpura-nizamuddin') }}">Lodhi Colony, Jangpura and Nizamuddin</a>): tell the RWA gate a tutor is expected; the Pink Line to Hazrat Nizamuddin brings East Delhi tutors in one ride.</li>
    <li>{!! $ibdA('punjabi-bagh', 'Punjabi Bagh') !!} (<a href="{{ url('/city/delhi/zone/janakpuri-rajouri-garden-punjabi-bagh') }}">Janakpuri, Rajouri Garden and Punjabi Bagh</a>): choose a tutor from your side of the Ring Road, or one on the Green or Pink Line.</li>
    <li>{!! $ibdA('civil-lines', 'Civil Lines') !!} (<a href="{{ url('/city/delhi/zone/pitampura-model-town-north-campus') }}">Pitampura, Model Town and North Campus</a>): the Yellow Line serves it; let the gatekeeper know before the first lesson.</li>
  </ul>
  <p>
    When the right specialist lives across the city, a hybrid plan works well: one home lesson at the weekend and one
    online session mid-week with the same tutor. Online maths and sciences need the tutor to see working as it is
    written, on a tablet, shared board or a camera over the page. Compare the two formats in our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online tutor</a> article, and see the
    <a href="{{ url('/blog/south-delhi-tuition-guide') }}">South Delhi</a> and
    <a href="{{ url('/blog/rohini-and-north-delhi-tuition-guide') }}">North Delhi</a> guides for local timing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibd-demo">What to test in an IB demo</h2>
  <ol>
    <li><strong>A marked school paper.</strong> A Diploma tutor should read the markscheme annotations and say what to practise within minutes.</li>
    <li><strong>The course version.</strong> Ask which maths syllabus and which EE guidance apply to your child's cohort.</li>
    <li><strong>Command terms.</strong> Ask what "show that", "hence" or "evaluate" demand.</li>
    <li><strong>The calculator.</strong> The tutor should work on the student's approved calculator, not a phone.</li>
    <li><strong>The coursework line.</strong> The right answer is "I teach the concepts and criteria; the writing is yours".</li>
    <li><strong>A plan.</strong> Expect an outline of the next four to six weeks, tied to school deadlines.</li>
  </ol>
  <p>
    You receive two or three matched tutors, see each fee before the demo, and can switch later for free. Tutors who
    join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibd-fees">IB tutor fees in Delhi and how to start</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    The programme, level, number of subjects and the tutor's travel at your slot move the fee. The
    <a href="{{ url('/blog/home-tuition-fees-delhi') }}">Delhi fees guide</a> and our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> help with budgeting.
  </p>
  <p>
    Send the programme, year, subject and level (for example "DP2, Chemistry HL"), your colony with its block, the
    nearest station and your free slots. We shortlist two or three tutors and the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a>, or see
    our Delhi <a href="{{ url('/igcse-tutor-delhi') }}">IGCSE</a>, <a href="{{ url('/cbse-home-tutor-delhi') }}">CBSE</a>
    and <a href="{{ url('/icse-home-tutor-delhi') }}">ICSE</a> pages. Tutors can find open requests on
    <a href="{{ url('/tuition-jobs/delhi') }}">Delhi tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
