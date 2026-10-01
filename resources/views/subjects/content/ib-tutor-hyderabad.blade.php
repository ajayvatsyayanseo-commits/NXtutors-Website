{{--
  Board page "IB tutor Hyderabad" (PYP, MYP, DP). Author: Ajay Vatsyayan
  (role: IB, IGCSE and ISC maths). No anecdotes, years or results are claimed
  for him. No schools, societies or people are named.

  IB facts are only those stated in ib-tutor-gurgaon, which cites ibo.org
  pages and IB PDFs (read 1 Oct 2026): PYP 3-12, six transdisciplinary
  themes, exhibition; MYP 11-16, five years (shorter versions allowed), eight
  subject groups, personal project about 25 hours, optional two-hour
  on-screen exams; DP 16-19, six subjects, normally three (max four) HL,
  240 h / 150 h, grades 1-7, EE + TOK up to three points, maximum 45,
  24 points among passing conditions, IA in every subject; EE brief first
  assessed 2027 (4,000 words, three reflection sessions ending in a viva
  voce, 500-word reflective statement); TOK exhibition (three objects) and
  1,600-word essay on one of six prescribed titles; IB maths revision, first
  teaching August 2027.
  The Hyderabad city hub names IB and Cambridge IGCSE in the city's
  international schools, and zones/hyderabad.json mentions IB and IGCSE
  requests in the Gachibowli, Kokapet and Banjara Hills zones, so this page
  exists. Local detail only from database/seo-content/areas/
  hyderabad-research.json, hyderabad-zone-guides.json, zones/hyderabad.json
  and the Hyderabad city hub. Fee wording is the approved NXTutors sentence.
  FAQs render from faqs/ib-tutor-hyderabad.php. Area links render only when
  that Hyderabad area page exists and is active.
--}}
@php
  $ibhySlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ibhyA = function (string $slug, string $label) use ($ibhySlugs) {
      return in_array($slug, $ibhySlugs, true)
          ? '<a href="' . e(url('/city/hyderabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ibhy-guide" aria-labelledby="ibhyGuideTitle">
  <h2 id="ibhyGuideTitle">IB tutors in Hyderabad: Primary Years to the Diploma, with a tutor who can actually reach you</h2>

  <p class="nx-guide__lede">
    The Hyderabad city hub places the IB in the city's international schools, next to Cambridge IGCSE, while other
    families follow the Telangana state board, CBSE or ICSE. Our zone notes mention IB and IGCSE matching along the
    western IT corridor and in the Banjara Hills and Jubilee Hills area, and IB needs vary enormously: help for a Grade 3 child
    getting used to inquiry learning, an MYP student whose criteria marks have dipped, or a DP2 student with Chemistry
    HL papers ahead. Ajay Vatsyayan, an IB, IGCSE and ISC maths teacher on NXTutors, wrote this guide to how the
    programmes work, what tutors may do with coursework, which subjects come up, and how home and online lessons
    balance out across Hyderabad's zones.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ibhy-city">The IB in Hyderabad</a> ·
    <a href="#ibhy-contrast">IB and the state route</a> ·
    <a href="#ibhy-brief">Before you ask</a> ·
    <a href="#ibhy-programmes">PYP and MYP</a> ·
    <a href="#ibhy-diploma">The Diploma</a> ·
    <a href="#ibhy-integrity">Coursework limits</a> ·
    <a href="#ibhy-subjects">Subjects</a> ·
    <a href="#ibhy-zones">Zones</a> ·
    <a href="#ibhy-demo">Demo checklist</a> ·
    <a href="#ibhy-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ibhy-city">The IB in Hyderabad's school mix</h2>
  <p>
    We have no reliable count of IB students in the city, so we give none. Our notes for three zones, Gachibowli,
    Kondapur and Madhapur; Manikonda, Narsingi and Kokapet; and Banjara Hills, Jubilee Hills and Somajiguda, mention
    matching students up to IB and IGCSE, and the Gachibowli notes add that for senior IB or IGCSE sciences an online
    tutor from elsewhere in India widens the choice considerably. That is the honest picture: subject specialists for a particular HL course
    are few in any one zone, so we combine nearby tutors with online options from the start.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibhy-contrast">How the IB differs from SSC and Intermediate</h2>
  <p>
    Telangana's state route runs through the SSC after Class 10 and a two-year Intermediate course in groups such as
    MPC and BiPC, under separate state boards and from state textbooks. The IB is built on different assumptions. In
    the PYP and MYP there are no chapter-based board exams; students are judged on inquiry and criteria. In the DP,
    teachers mark internal assessment that the IB then moderates, alongside final exams. A child moving between the two
    systems usually copes with the content and struggles with the form: open-ended tasks, command terms, and written
    reasoning in maths and science.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibhy-brief">Four answers to have ready before you ask</h2>
  <ol>
    <li><strong>Programme and year</strong>, for example PYP Grade 4, MYP Year 4 or DP1.</li>
    <li><strong>Subject and level</strong> for the Diploma: "Economics HL" and "Business Management SL" need different tutors.</li>
    <li><strong>What the school has flagged</strong>: a criterion, a unit test, an upcoming IA deadline.</li>
    <li><strong>Where and when</strong>: your colony or tower, and slots that avoid the office rush on your side of the city.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibhy-programmes">PYP and MYP: what help looks like</h2>
  <p>
    The PYP, for ages 3 to 12, is organised around six transdisciplinary themes and taught through units of inquiry; in
    the final year students carry out the exhibition. There are no external exams, so a tutor's value lies in fluency
    with numbers, reading stamina and confident writing, and in helping a child used to textbooks accept that some
    questions have more than one good answer.
  </p>
  <p>
    The MYP covers ages 11 to 16 over five years, though schools may run shorter versions. Its eight subject groups are
    assessed against published criteria, the final year includes a personal project of about 25 hours, and schools may
    choose two-hour on-screen exams in some groups. Help is most useful in maths and the sciences in the last two years,
    and in writing to the criteria: explaining a method, evaluating results, justifying a choice.
  </p>
  <p>
    The personal project deserves a word of its own. The IB describes it as a long-term, independent piece, so a
    tutor should keep to the same principle as with Diploma coursework: they may help a student plan their time, understand what the criteria
    ask for and reflect on progress, but the idea, the product and the report must be the student's. Families who start
    this conversation in MYP find the Diploma core far less daunting later.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibhy-diploma">The Diploma, year by year</h2>
  <p>
    DP students take six subjects, normally three at Higher Level (four at most), with 240 recommended teaching hours
    at HL and 150 at SL. Grades run from 1 to 7 per subject; the EE and TOK together can add three points, so 45 is the
    top score, and 24 points is among the conditions for passing. Every subject has internal assessment.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The two Diploma years and what a tutor should be doing</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">What is happening</th><th scope="col">Tutor's role</th></tr>
    </thead>
    <tbody>
      <tr><td>DP1, first term</td><td>The jump from Grade 10 or from another board; first HL tests</td><td>Close algebra and science gaps quickly; start a weekly past-paper habit</td></tr>
      <tr><td>DP1 into DP2</td><td>IA, EE and TOK work overlaps normal teaching</td><td>Teach the subject under the chosen topic; keep a written plan so content is not lost</td></tr>
      <tr><td>Mocks</td><td>Results feed predicted grades for university applications</td><td>Timed papers against official markschemes; an error log by topic</td></tr>
      <tr><td>Final session</td><td>Exams in every subject over a few weeks</td><td>Focused revision of the weakest papers only</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    IB maths is being revised, with first teaching from August 2027. A tutor should know which version your child's
    exam session uses; the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA vs AI guide</a> explains the
    current courses.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibhy-integrity">What a tutor may and may not do with coursework</h2>
  <p>
    The Extended Essay is independent research with an upper limit of 4,000 words, supervised by the school. For
    essays assessed from 2027 there are three reflection sessions with the supervisor, the last a short viva voce, plus
    a 500-word reflective statement. TOK is assessed through an exhibition built on three objects and a 1,600-word
    essay on one of six prescribed titles. The internal assessments vary by subject: an exploration in maths, an
    investigation in the sciences.
  </p>
  <p>
    A tutor can teach the economics, biology or maths a topic depends on, make clear what each criterion rewards and
    challenge a vague research question. A tutor cannot pick the topic, write or rewrite any of it, or do the
    analysis. Walk away from anyone offering to "improve" a draft.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibhy-subjects">Subjects and where to go next</h2>
  <ul>
    <li>Maths AA or AI, SL or HL: <a href="{{ url('/ib-maths-tutor') }}">IB maths tutors</a> and <a href="{{ url('/maths-home-tutor-hyderabad') }}">maths tutors in Hyderabad</a>.</li>
    <li>Sciences: <a href="{{ url('/physics-home-tutor-hyderabad') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-hyderabad') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-hyderabad') }}">biology</a> tutors in Hyderabad; the <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL/HL, IA and EE guide</a> goes further.</li>
    <li>Language A: <a href="{{ url('/english-home-tutor-hyderabad') }}">English tutors in Hyderabad</a>.</li>
    <li>Economics, business management and other subjects: matched on request, with the exact level.</li>
  </ul>
  <p>
    For the IB in more depth, see our reference page on <a href="{{ url('/ib-tutor-gurgaon') }}">how the IB programmes
    work</a>, the <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">IB and IGCSE parent's guide</a>, and
    <a href="{{ url('/igcse-tutor-hyderabad') }}">IGCSE tutors in Hyderabad</a> for the grades before the Diploma.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibhy-zones">Home tuition across Hyderabad's zones</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Making a visiting IB tutor practical, by zone</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">What to plan for</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/hyderabad/zone/gachibowli-kondapur-madhapur') }}">Gachibowli, Kondapur and Madhapur</a>, e.g. {!! $ibhyA('gachibowli', 'Gachibowli') !!}</td><td>No station inside; Raidurg suits Gachibowli. End lessons before offices empty, or move to a weekend morning</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/manikonda-narsingi-kokapet') }}">Manikonda, Narsingi and Kokapet</a>, e.g. {!! $ibhyA('kokapet', 'Kokapet') !!}</td><td>Road only, via the ORR; a tutor already teaching in the Financial District is steadiest</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/chandanagar-lingampally-tellapur') }}">Chandanagar, Lingampally and Tellapur</a>, e.g. {!! $ibhyA('tellapur', 'Tellapur') !!}</td><td>Long journeys from the city; weekend slots or a home-plus-online mix hold up better</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/banjara-hills-jubilee-hills-somajiguda') }}">Banjara Hills, Jubilee Hills and Somajiguda</a>, e.g. {!! $ibhyA('jubilee-hills', 'Jubilee Hills') !!}</td><td>Heavy office traffic on the main roads; weekday lessons before the evening rush</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/ameerpet-begumpet-punjagutta') }}">Ameerpet, Begumpet and Punjagutta</a>, e.g. {!! $ibhyA('begumpet', 'Begumpet') !!}</td><td>The metro interchange widens the choice of tutor considerably</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/kukatpally-miyapur-nizampet') }}">Kukatpally, Miyapur and Nizampet</a></td><td>Red Line access; start before the highway's evening peak</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/khairatabad-himayatnagar-abids') }}">Khairatabad, Himayatnagar and Abids</a></td><td>Afternoon or early-evening lessons on weekdays</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/secunderabad-marredpally-tarnaka') }}">Secunderabad, Marredpally and Tarnaka</a></td><td>A slot just outside office hours around the station</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/sainikpuri-alwal-trimulgherry') }}">Sainikpuri, Alwal and Trimulgherry</a>, e.g. {!! $ibhyA('alwal', 'Alwal') !!}</td><td>Limited rail; a tutor from the northern colonies, or online</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/uppal-habsiguda-nacharam') }}">Uppal, Habsiguda and Nacharam</a></td><td>Blue Line from the west, after the rush at Uppal X Roads</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/dilsukhnagar-lb-nagar-vanasthalipuram') }}">Dilsukhnagar, LB Nagar and Vanasthalipuram</a></td><td>A tutor arriving by metro is usually more punctual</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/mehdipatnam-tolichowki-attapur') }}">Mehdipatnam, Tolichowki and Attapur</a></td><td>No metro; online when a specialist cannot travel</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For DP subjects, a sensible order is to settle on the right specialist first and then split lessons between
    home and online. Online maths and science need the tutor to see handwritten working live and to use your child's approved
    calculator. All areas are on the <a href="{{ url('/city/hyderabad') }}">Hyderabad home tuition page</a>; the
    <a href="{{ url('/blog/west-hyderabad-tuition-guide') }}">west Hyderabad guide</a> covers the IT corridor's timing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibhy-demo">Testing an IB tutor in the demo</h2>
  <ol>
    <li>Bring a marked unit test: a strong DP tutor can read the markscheme notation and explain lost marks within minutes.</li>
    <li>Ask which subject guide and exam session they are teaching to.</li>
    <li>Ask them to explain "hence" and "show that" in a maths question, or "evaluate" in a science one.</li>
    <li>For MYP, see whether they ask for the task sheet and criteria first.</li>
    <li>Ask directly where their line is on IA and EE help; the only right answer keeps the writing with your child.</li>
    <li>Ask for a four-to-six-week outline tied to the school calendar.</li>
  </ol>
  <p>
    You get a shortlist of two or three, every fee shown ahead of the demo, and a free switch if it stops working.
    New tutors pass an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profiles are shown.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibhy-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For the IB, the
    programme, level, subject count and travel at your slot shape the fee. Our
    <a href="{{ url('/blog/home-tuition-fees-hyderabad') }}">Hyderabad fees guide</a> and
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> explain more.
  </p>
  <p>
    Send the four answers above and book the <a href="{{ url('/demo-class') }}">free demo class</a>, or look through
    <a href="{{ url('/tutors') }}">tutor profiles</a> first. IB teachers in the city can find requests on
    <a href="{{ url('/tuition-jobs/hyderabad') }}">Hyderabad tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
