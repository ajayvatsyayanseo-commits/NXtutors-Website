{{--
  Ghaziabad board page for "IB tutor Ghaziabad". Author: Ajay Vatsyayan (role:
  IB, IGCSE and ISC maths). No anecdotes, years or results are claimed for him.
  No schools, societies, developers or people are named.

  Board facts reworded from the Gurgaon IB hub (ib-tutor-gurgaon), which cites
  (fetched 1 Oct 2026; ibo.org text read from search extracts and IB PDFs):
  - IB Extended essay subject brief, first assessment 2027 (ibo.org PDF):
    DP for ages 16-19, six academic areas around a core, normally three (not
    more than four) HL subjects, 240 h HL / 150 h SL; EE 4,000-word upper
    limit, three reflection sessions ending in a viva voce, 500-word
    reflective statement; EE + TOK award up to three points.
  - ibo.org/programmes/diploma-programme/curriculum/dp-core/theory-of-knowledge/
    : TOK exhibition (three objects, internally assessed and moderated) and a
    1,600-word essay on one of six prescribed titles.
  - ibo.org/programmes/primary-years-programme/: ages 3-12, six
    transdisciplinary themes, the exhibition in the final year.
  - ibo.org/programmes/middle-years-programme/: ages 11-16, five years (schools
    may run shorter versions), eight subject groups, personal project of about
    25 hours, eAssessment optional except the personal project; two-hour
    on-screen exams in some subject groups.
  - DP subject grades 1-7, maximum 45, 24-point threshold among the passing
    conditions, IA in every subject (ibo.org DP assessment pages).
  No exam dates are given on this page. The city's board mix and UP Board
  (UPMSP) wording only as the Ghaziabad hub view states it ("the IB and
  Cambridge IGCSE serve a smaller group"); nothing here says where IB families
  live. Local detail only from database/seo-content/areas/ghaziabad-research.json,
  ghaziabad-zone-guides.json, zones/ghaziabad.json and the hub. Fee wording is
  the approved NXTutors sentence. FAQs: faqs/ib-tutor-ghaziabad.php. Area links
  render only for active Ghaziabad areas.
--}}
@php
  $ibgzSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ibgz = function (string $slug, string $label) use ($ibgzSlugs) {
      return in_array($slug, $ibgzSlugs, true)
          ? '<a href="' . e(url('/city/ghaziabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ibgz-guide" aria-labelledby="ibgzGuideTitle">
  <h2 id="ibgzGuideTitle">IB tutors in Ghaziabad: matching the programme, the subject and the level, then the commute</h2>

  <p class="nx-guide__lede">
    IB families are a smaller group in Ghaziabad than CBSE or ICSE families, and that shapes everything about finding
    a tutor. There are fewer specialists for any one Diploma subject at Higher Level, so the right person may live in
    Noida, East Delhi or across the Hindon, and how they travel to you becomes part of the decision. This page sets out
    what each IB programme asks of a student, how it differs from the CBSE, ICSE and UP Board routes most local schools
    follow, which subjects families ask for, where a tutor's help ends on the coursework, and how home and online
    lessons combine across the city. It is written by Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths on NXTutors.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ibz-local">IB in the city</a> ·
    <a href="#ibz-other">Compared with Indian boards</a> ·
    <a href="#ibz-programmes">PYP, MYP, DP</a> ·
    <a href="#ibz-dp">Inside the Diploma</a> ·
    <a href="#ibz-core">Coursework limits</a> ·
    <a href="#ibz-asks">What families ask for</a> ·
    <a href="#ibz-lesson">Lesson pattern</a> ·
    <a href="#ibz-routes">Tutor routes</a> ·
    <a href="#ibz-mix">Home and online</a> ·
    <a href="#ibz-test">Testing a tutor</a> ·
    <a href="#ibz-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ibz-local">The IB in Ghaziabad's school mix</h2>
  <p>
    Our <a href="{{ url('/city/ghaziabad') }}">Ghaziabad city guide</a> describes CBSE as the most common board, ICSE
    and ISC as having a steady following, UP Board schools as important in a city in Uttar Pradesh, and the IB and
    Cambridge IGCSE as serving a smaller group. For an IB parent, that means two things. First, be exact in your
    request: "IB" alone tells a tutor very little, while "MYP Year 4 sciences" or "DP2 Chemistry HL" tells them
    whether they can help. Second, expect online or hybrid lessons to play a bigger part than they would for a CBSE
    student, simply because the pool of specialists is smaller.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibz-other">How the IB differs from CBSE, ICSE and the UP Board</h2>
  <p>
    The Indian boards end each stage in a set of board papers. CBSE builds from NCERT books and sample papers, ICSE
    spreads marks across many separate papers, and the UP Board, run by UPMSP, sets its own papers in Hindi or English
    medium. The IB works differently: in the Diploma every subject has a teacher-marked internal assessment that the
    IB moderates, and the Primary and Middle Years programmes judge work against published criteria rather than a
    single percentage. Command terms such as "evaluate" or "justify" carry precise meanings.
  </p>
  <p>
    A student joining the IB from an Indian board usually knows plenty of content and still has to learn this way
    of being assessed. A tutor's first job is often explaining what a criterion or markscheme actually rewards. Our
    guide to <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching from CBSE to IB or
    IGCSE</a> covers the move in detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibz-programmes">PYP, MYP and DP: three different jobs for a tutor</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The IB programmes and what tutoring means in each</caption>
    <thead>
      <tr><th scope="col">Programme and ages</th><th scope="col">How it is assessed</th><th scope="col">What a tutor is for</th><th scope="col">What a tutor is not for</th></tr>
    </thead>
    <tbody>
      <tr><td>PYP, 3 to 12</td><td>Units of inquiry under six transdisciplinary themes; an exhibition in the last year; no external exams</td><td>Reading stamina, writing a clear paragraph, number sense</td><td>Turning inquiry into drill worksheets</td></tr>
      <tr><td>MYP, 11 to 16 (five years, sometimes fewer)</td><td>Criteria in eight subject groups; a personal project of about 25 hours; on-screen exams only if the school opts in</td><td>Maths and science fluency, writing to criteria, planning long tasks</td><td>Producing the personal project</td></tr>
      <tr><td>DP, 16 to 19 (two years)</td><td>Six subjects graded 1 to 7, an internal assessment in each, final exams, plus EE, TOK and CAS</td><td>HL maths and sciences, economics, exam technique, the theory behind an IA</td><td>Choosing topics or editing drafts</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For younger children the PYP needs a patient generalist more than a subject expert. In the MYP, the last two
    years are where maths fluency starts to decide which Diploma subjects and levels are realistic, so that is when
    families most often look for help.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibz-dp">Inside the Diploma: subjects, levels and points</h2>
  <p>
    A Diploma student takes six subjects across the IB's academic areas, usually three at Higher Level and never more
    than four. The IB recommends 240 teaching hours for each HL subject and 150 for each SL subject, which is why an
    HL science or maths course feels so much heavier. Every subject is graded from 1 to 7; the Extended Essay and
    Theory of Knowledge add up to three more points, giving a maximum of 45. A total of at least 24 is one of the
    conditions for the diploma, alongside others.
  </p>
  <p>
    In practice, the load peaks when internal assessments, the Extended Essay and TOK work overlap with ongoing
    teaching, and again before school mocks that feed predicted grades. A tutor helps most by keeping the subject
    content moving through those crowded months. For maths specifically, read our
    <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">AA versus AI, SL and HL guide</a> and the national
    <a href="{{ url('/ib-maths-tutor') }}">IB maths tutor</a> page; physics students can start with the
    <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL/HL, IA and EE guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibz-core">The IA, Extended Essay and TOK: where a tutor's role ends</h2>
  <ul>
    <li><strong>Extended Essay:</strong> independent research in one subject or across two, at most 4,000 words, guided by a school supervisor through three reflection sessions, the last a short viva voce, with a 500-word reflective statement.</li>
    <li><strong>Theory of Knowledge:</strong> an exhibition built on three objects, marked in school and moderated by the IB, and a 1,600-word essay on one of six prescribed titles.</li>
    <li><strong>Internal assessment:</strong> a different task in each subject, such as the maths exploration or a science investigation, marked against published criteria.</li>
  </ul>
  <p>
    All of it must be the student's own. A tutor may teach the chemistry or economics behind a chosen question,
    explain what each criterion rewards and push a student to sharpen a research question. A tutor may not choose the
    topic, write or edit any draft, or carry out the analysis. If anyone offers to "polish" an IA, decline: the viva
    exists partly to test whether the student understands their own work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibz-asks">What IB families usually ask a tutor for</h2>
  <p>
    In the Diploma, the most common requests are maths (Analysis and Approaches or Applications and Interpretation)
    and the sciences, especially at HL, followed by economics and the essay subjects. In the MYP, it is maths and
    sciences in the final two years. Ghaziabad subject pages help where the tutor also teaches IB:
    <a href="{{ url('/maths-home-tutor-ghaziabad') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-ghaziabad') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-ghaziabad') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-ghaziabad') }}">biology</a> and
    <a href="{{ url('/english-home-tutor-ghaziabad') }}">English</a>. Say the subject and level exactly, because an
    Economics HL tutor is not automatically right for Business Management SL. Our
    <a href="{{ url('/ib-tutor-gurgaon') }}">IB tutors in Gurgaon</a> page and the
    <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">parent's guide to IB and IGCSE tutoring</a>
    explain the programmes at greater length.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibz-lesson">A Diploma lesson that earns its fee</h2>
  <p>
    A strong DP lesson starts from evidence: the latest school test, the markscheme codes on it, or a homework
    problem that went wrong. The tutor names the gap, teaches it with one or two worked examples, then sets past-paper
    questions on the same idea under time. Marking happens together against the official markscheme, so your child
    learns why a method mark was given or withheld, and the command term in each question is read aloud before
    anyone starts writing. The lesson closes with a short written note of what comes next, tied to the school's
    calendar of tests and coursework deadlines.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibz-routes">How IB tutors reach different parts of Ghaziabad</h2>
  <p>
    Because the right specialist may live well outside your neighbourhood, the route in matters as much as the
    distance. {!! $ibgz('vaishali-sector-1', 'Vaishali Sector 1') !!} sits on the Delhi–UP border with both Vaishali
    and Kaushambi stations within easy reach, so a tutor from Delhi or Noida can arrive by metro. In
    {!! $ibgz('indirapuram-gyan-khand-1', 'Gyan Khand 1') !!}, Vaishali is the usual station and an e-rickshaw covers
    the rest along Kaveri Marg; after-school slots that start a little later are easier for a visiting tutor to keep.
    {!! $ibgz('vasundhara-sector-1', 'Vasundhara Sector 1') !!}, a low-rise sector at the northern end of the township,
    looks to the Red Line around Mohan Nagar and to the Sahibabad Namo Bharat station.
  </p>
  <p>
    {!! $ibgz('ramprastha', 'Ramprastha') !!} has wide roads and independent houses but no station of its own; tutors
    connect through Anand Vihar railway station, Dilshad Garden on the Red Line or Kaushambi on the Blue Line, then an
    auto. In the old city, {!! $ibgz('nehru-nagar', 'Nehru Nagar') !!} is close to Ghaziabad Junction and most homes
    open onto the street, though its commercial lanes congest. {!! $ibgz('vijay-nagar', 'Vijay Nagar') !!}, along NH-9
    and the expressway, mixes plotted older sectors with newer apartment blocks that ask for a name at the gate. The
    <a href="{{ url('/city/ghaziabad/zone/surya-nagar-ramprastha') }}">Surya Nagar and Ramprastha</a> and
    <a href="{{ url('/city/ghaziabad/zone/vaishali-kaushambi') }}">Vaishali and Kaushambi</a> zone pages, and our
    <a href="{{ url('/blog/vaishali-vasundhara-sahibabad-tuition-guide') }}">Vaishali, Vasundhara and Sahibabad
    guide</a>, give more local timing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibz-mix">Home, online or hybrid for IB</h2>
  <p>
    For PYP children and for MYP students who need someone to sit beside them while they organise a long task, home
    lessons suit them most. For a single DP subject at HL, online lessons can open up a much wider set of tutors who
    teach that exact course. Many IB families settle on a hybrid: one home session at the weekend and one online
    session on a weekday with the same tutor. Online maths and science only work if the tutor sees your child's
    working as it happens, on a writing tablet, a shared whiteboard or a camera over the page. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online</a> post sets out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibz-test">Testing an IB tutor in the free demo</h2>
  <ol>
    <li><strong>Programme and level first.</strong> Ask which IB programme, subject and level they have taught most recently.</li>
    <li><strong>A real marked paper.</strong> Hand over a school test; a DP tutor should read the markscheme codes and name the lost method marks quickly.</li>
    <li><strong>Command terms.</strong> Ask what "show that", "hence" or "evaluate" require. Vague answers are a warning.</li>
    <li><strong>Syllabus version.</strong> IB courses and the Extended Essay guidance are revised on a cycle; ask which version applies to your child's exam session.</li>
    <li><strong>The coursework line.</strong> You want to hear "I teach the subject and the criteria; the work is yours".</li>
    <li><strong>A plan.</strong> By the end, the tutor should outline the next month or so against the school calendar.</li>
  </ol>
  <p>
    Each request brings two or three matched tutors, each fee is shown before the demo, and switching later is free.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibz-fees">IB tutoring fees and first steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    The programme, the level, the number of subjects and how far the tutor travels at your slot all shift the fee.
    The <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-ghaziabad') }}">tuition fees in Ghaziabad</a> help with a budget.
  </p>
  <p>
    Send us the programme, year, subject and level, your locality or society and the times that work. The first class
    with the tutor you choose is a <a href="{{ url('/demo-class') }}">free demo</a>, and
    <a href="{{ url('/tutors') }}">tutor profiles</a> are open to browse. For other boards here, see
    <a href="{{ url('/cbse-home-tutor-ghaziabad') }}">CBSE</a>, <a href="{{ url('/icse-home-tutor-ghaziabad') }}">ICSE and
    ISC</a> and <a href="{{ url('/igcse-tutor-ghaziabad') }}">IGCSE</a> tutors in Ghaziabad. IB teachers can find
    students through <a href="{{ url('/tuition-jobs/ghaziabad') }}">Ghaziabad tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
