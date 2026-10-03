{{--
  Exam page: "TG EAPCET tutor Hyderabad" (key ts-eapcet- because families
  still search "TS EAPCET"; the page names the test as its official website
  does, TG EAPCET). Engineering (E) and Agriculture & Pharmacy (AP) streams.
  Author: nxtutors (NXTutors Academic Team). No school, college, coaching,
  society or people names (the conducting university is described, not
  named). No candidate numbers, no results, no cut-offs.

  Official sources (TG EAPCET website eapcet.tgche.ac.in; read 2 Oct 2026):
  - Home page: "Telangana Engineering, Agriculture & Pharmacy (Veterinary
    etc.,) Common Entrance Test", conducted through CBT by a state technological
    university on behalf of the Telangana Council of Higher Education (TGCHE);
    the prerequisite for admission to professional courses in university and
    private colleges in Telangana for 2026-27; mock test, syllabus, instruction
    booklet and FAQ links.
  - TGEAPCET/Doc2026/Detailed Notification-2026.pdf: courses (B.E./B.Tech and
    allied B.Tech courses, B.Pharmacy, Pharm-D, B.Sc. (Hons.) Agriculture and
    Horticulture, B.V.Sc. & A.H., B.F.Sc., B.Sc. Nursing); eligibility (Indian
    nationality, PIO or OCI; local/non-local status under the 1974 admissions
    order; Intermediate with the specified optionals; at least 45% (40%
    reserved) in MPC/BiPC subjects taken together; 16 years by 31 December for
    engineering and pharmacy, no upper age limit; MPC students apply in the E
    stream, BiPC students in the AP stream; B.Tech Biotechnology for BiPC with
    the TGBIE bridge course in Mathematics); multiple sessions, one session per
    candidate, normalisation using session mean + SD and the top 0.1%;
    ranking purely on normalised TG EAPCET marks; B.Arch through NATA; 2026
    test windows in early May, AP stream before E stream.
  - TGEAPCET/Doc2026/05 I Booklet - E - 2026.pdf and 06 I Booklet - AP -
    2026.pdf: 3 hours, 160 objective questions of one mark each; E: 80
    Mathematics, 40 Physics, 40 Chemistry; AP: 80 Biology (Botany 40, Zoology
    40), 40 Physics, 40 Chemistry; no negative marking; question paper shown on
    screen bilingual English-Telugu or English-Urdu, English version final;
    qualifying mark 25% of the maximum (normalised), none for SC/ST; E-stream
    ties broken by normalised Mathematics marks, then Physics, then age;
    arrive at least 90 minutes before the test; Mark for Review behaviour;
    Hyderabad test zones list centre locations including Hafeezpet,
    Kukatpally, Bachupally, Nacharam, Boduppal, Nagole and LB Nagar.
  - TGEAPCET/Doc2026/Syllabus-E.pdf and Syllabus-AP.pdf: syllabus in tune
    with the TGBIE Intermediate syllabus from 2024-25 (first year) and 2025-26
    (second year), for current and previous batches; topics not exhaustive;
    Mathematics units Algebra, Trigonometry, Vector Algebra, Probability,
    Coordinate Geometry, Calculus; 30 Physics units from Physical World to
    Communication Systems; Chemistry units from Atomic Structure to organic
    compounds containing nitrogen; model questions in multi-statement,
    assertion-reason, ordering and List I / List II matching formats.
  Intermediate facts from tgbie.cgg.gov.in as cited in
  telangana-board-tutor-hyderabad. Local detail only from areas/hyderabad-
  research.json, hyderabad-zone-guides.json and zones/hyderabad.json. Fee
  wording is the approved sentence. FAQs render from
  faqs/ts-eapcet-tutor-hyderabad.php.
--}}
@php
  $tgeSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $tgeA = function (string $slug, string $label) use ($tgeSlugs) {
      return in_array($slug, $tgeSlugs, true)
          ? '<a href="' . e(url('/city/hyderabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="tgeGuideTitle">
  <h2 id="tgeGuideTitle">TG EAPCET tutors in Hyderabad: the Engineering and AP papers, and how to prepare beside Intermediate</h2>

  <p class="nx-guide__lede">
    TG EAPCET, the Telangana Engineering, Agriculture and Pharmacy Common Entrance Test, is the state's own entrance
    for engineering, pharmacy, agriculture, veterinary and related degrees. Many families still type "TS EAPCET" when
    they search for it, and older material uses that name; the official website now calls it TG EAPCET. It is a
    three-hour computer-based test of 160 one-mark multiple-choice questions with no negative marking, set in an
    Engineering stream and an Agriculture and Pharmacy stream, and its syllabus is written to match the state's
    Intermediate course. Below: what the 2026 notification, instruction booklets and syllabus actually say, where the
    test overlaps with Intermediate and the national entrances, and a two-year plan a home tutor in Hyderabad can
    follow. A new notification is issued each year, so read the current one on eapcet.tgche.ac.in before
    relying on any detail.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#tge-who">Who it is for</a> ·
    <a href="#tge-paper">The two papers</a> ·
    <a href="#tge-syllabus">Syllabus</a> ·
    <a href="#tge-questions">Question formats</a> ·
    <a href="#tge-rank">Sessions and ranks</a> ·
    <a href="#tge-inter">Board and national tests</a> ·
    <a href="#tge-plan">Two-year plan</a> ·
    <a href="#tge-zones">Reaching your home</a> ·
    <a href="#tge-demo">Demo checklist</a> ·
    <a href="#tge-fees">Cost and next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="tge-who">Who sits TG EAPCET, and for which courses?</h2>
  <p>
    The test is conducted by a state technological university on behalf of the Telangana Council of Higher Education,
    and the 2026 notification lists two groups of courses:
  </p>
  <ul>
    <li><strong>Engineering (E) stream:</strong> B.E. and B.Tech, including specialised B.Tech courses such as agricultural engineering, dairy technology, food technology, biomedical and pharmaceutical engineering, plus B.Pharmacy and Pharm-D seats for MPC students. Intermediate students with mathematics, physics and chemistry apply here.</li>
    <li><strong>Agriculture and Pharmacy (AP) stream:</strong> B.Sc. (Hons.) Agriculture and Horticulture, B.V.Sc. and Animal Husbandry, B.F.Sc., B.Pharmacy, Pharm-D and some allied B.Tech seats for students with biology, physics and chemistry, the group the notification calls BiPC.</li>
  </ul>
  <p>
    Eligibility has three parts that families new to Hyderabad should read carefully. A candidate must be an Indian
    national, a Person of Indian Origin or an OCI card holder; must meet the local or non-local status rules of the
    state's 1974 admissions order; and must have passed or be appearing in Intermediate or an equivalent Class 12 with
    the right optional subjects, with at least 45% in those subjects taken together (40% for reserved categories). For
    engineering and pharmacy, the candidate must be 16 by 31 December of the admission year, with no upper age limit.
    CBSE, ISC and other-board students can be eligible through the "equivalent examination" route, but residence rules
    decide much, so check them in the notification first. Architecture is not part of this test; the notification
    sends B.Arch applicants to NATA.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tge-paper">How the two streams' papers are built</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>TG EAPCET 2026 question papers, from the instruction booklets</caption>
    <thead>
      <tr><th scope="col">Stream</th><th scope="col">Questions by subject</th><th scope="col">Total</th><th scope="col">Time</th></tr>
    </thead>
    <tbody>
      <tr><td>Engineering (E)</td><td>Mathematics 80, Physics 40, Chemistry 40</td><td>160 questions, 160 marks</td><td>3 hours</td></tr>
      <tr><td>Agriculture and Pharmacy (AP)</td><td>Biology 80 (Botany 40, Zoology 40), Physics 40, Chemistry 40</td><td>160 questions, 160 marks</td><td>3 hours</td></tr>
    </tbody>
  </table>
  </div>
  <ul>
    <li><strong>One mark each, no penalty.</strong> Every question is multiple choice with four options and carries one mark, and there is no negative mark for a wrong answer. A blank earns nothing, so no question should be left unanswered when time runs out.</li>
    <li><strong>Move freely between subjects.</strong> Subjects appear as sections on the screen and a candidate can switch between them at any time, so the order of attack is a choice to practise, not something the test imposes. An answer saved and marked for review still counts.</li>
    <li><strong>Language on screen.</strong> The paper is shown bilingually, either English with Telugu or English with Urdu, chosen by the candidate whatever their medium of study. If a translation is ambiguous, the English version is final.</li>
    <li><strong>A qualifying line.</strong> To be ranked, a candidate needs 25% of the maximum marks after normalisation; no minimum applies to SC and ST candidates.</li>
  </ul>
  <p>
    The arithmetic matters more than it looks. One hundred and sixty questions in 180 minutes leaves just over a
    minute per question on average. In the Engineering paper, half the questions, and half the marks, are maths; in
    the AP paper, half are biology. A student who is strong in physics but slow in maths is therefore at a real
    disadvantage in the E stream, and time spent improving maths speed usually pays back more than any other change.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tge-syllabus">The syllabus follows Intermediate, both years</h2>
  <p>
    The official syllabus says it is in tune with the Telangana Board of Intermediate Education syllabus adopted for
    the first year from 2024-25 and for the second year from 2025-26, that it applies to current and previous
    Intermediate batches, and that the topics listed are not exhaustive. In outline:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Main units in the TG EAPCET 2026 syllabus</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Units as the syllabus groups them</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics (E)</td><td>Algebra (functions, induction, matrices, complex numbers, De Moivre's theorem, quadratics, theory of equations, permutations and combinations, binomial theorem, partial fractions); Trigonometry; Vector Algebra; Probability; Coordinate Geometry, from the straight line and circles through conics to three-dimensional geometry; Calculus</td></tr>
      <tr><td>Physics (both streams)</td><td>Thirty units, from physical world, units and measurement and mechanics through thermodynamics, waves and optics to electricity, magnetism, modern physics, semiconductor electronics and communication systems</td></tr>
      <tr><td>Chemistry (both streams)</td><td>Atomic structure, periodicity, bonding, states of matter, stoichiometry, thermodynamics and equilibrium, then solid state, solutions, electrochemistry and kinetics, metallurgy, and organic chemistry through to compounds containing nitrogen</td></tr>
      <tr><td>Biology (AP)</td><td>Botany and Zoology, as in the Intermediate courses, with 40 questions from each</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Because the syllabus is tied to Intermediate, a student whose Intermediate year has been weak in one chapter will
    meet that chapter again here. A CBSE or ISC student should lay the official list beside their own syllabus,
    chapter by chapter, and mark anything their school course treats lightly or leaves out; those gaps are the first
    job for a tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tge-questions">Question formats in the official model questions</h2>
  <p>
    The model questions published with the 2026 syllabus are not all straightforward "find the value" items. They
    include:
  </p>
  <ul>
    <li><strong>Multi-statement items:</strong> two or three statements, and the candidate decides which are true.</li>
    <li><strong>Assertion and reason:</strong> decide whether each is true and whether the reason explains the assertion.</li>
    <li><strong>Ordering:</strong> arrange several results in ascending order.</li>
    <li><strong>Matching:</strong> pair items from List I with List II.</li>
  </ul>
  <p>
    Each of these hides several small questions inside one, so they take longer than they look and punish shaky
    concepts more than slow arithmetic. A tutor should add a few of each type to every chapter test, not save them for
    the final mock.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tge-rank">Sessions, normalisation and how ranks are worked out</h2>
  <p>
    The test runs over several sessions on the same syllabus and pattern, and each candidate sits only one of them.
    Because papers differ between sessions, marks are normalised using each session's average and spread, and the
    average of its top 0.1% of candidates, compared with the same figures across all sessions. The notification says
    the adjustment is expected to be marginal.
  </p>
  <p>
    Ranks are then allotted purely on normalised TG EAPCET marks. In the Engineering stream, a tie is broken first by
    normalised maths marks, then physics, then by date of birth, with the older candidate ranked higher. Two practical
    lessons follow: maths is decisive twice over in the E stream, and there is no point trying to guess which session
    is "easier". A rank is valid only for admissions in that academic year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tge-inter">How TG EAPCET relates to Intermediate, JEE Main and NEET</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Same subjects, different demands</caption>
    <thead>
      <tr><th scope="col"></th><th scope="col">Intermediate (TGBIE)</th><th scope="col">TG EAPCET</th><th scope="col">JEE Main / NEET</th></tr>
    </thead>
    <tbody>
      <tr><td>Who sets it</td><td>The state's intermediate board</td><td>Conducted on behalf of TGCHE</td><td>NTA</td></tr>
      <tr><td>Answer style</td><td>Written theory, practicals and, from 2026-27 in the first year, internal assessment</td><td>Multiple choice on screen, one mark each, no negative marking</td><td>Set and marked by NTA under its own published rules</td></tr>
      <tr><td>Syllabus base</td><td>State Intermediate textbooks</td><td>In tune with the state Intermediate syllabus</td><td>NTA's published syllabus</td></tr>
      <tr><td>What it decides</td><td>The Intermediate result</td><td>State admissions to the listed courses</td><td>National engineering or medical admissions</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    <strong>With Intermediate.</strong> For an MPC or BiPC student the content largely overlaps, which is the great
    advantage of this test, since a chapter learned once is examined twice. What changes is the skill. Board papers reward complete
    written working, and the new first-year internal assessment rewards steady work across the year; the entrance
    rewards fast, accurate choices. Our <a href="{{ url('/telangana-board-tutor-hyderabad') }}">Telangana Board tutors
    in Hyderabad</a> page covers the board side, including the 2026-27 changes.
  </p>
  <p>
    <strong>With JEE and NEET.</strong> A student preparing seriously for JEE Main is usually well placed for the E
    stream, and a NEET student for the AP stream, provided the state syllabus is checked against what they have
    studied. The reverse is not true: preparation aimed only at this test will meet harder questions and different
    marking in the national papers. See <a href="{{ url('/jee-home-tutor-hyderabad') }}">JEE home tutors in
    Hyderabad</a> and <a href="{{ url('/neet-home-tutor-hyderabad') }}">NEET home tutors in Hyderabad</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tge-plan">How a home tutor plans TG EAPCET preparation</h2>
  <ol>
    <li><strong>First year: learn for both.</strong> Teach each Intermediate chapter for understanding, then close it with fifteen minutes of timed one-mark questions, including at least one assertion-reason and one matching item.</li>
    <li><strong>First year, alongside the new internal assessment:</strong> unit tests and the maths activity record are worth marks of their own; keep them on schedule so entrance practice does not crowd them out.</li>
    <li><strong>Second year, first half: one syllabus, two styles.</strong> A written board-style set and an MCQ set from the same chapters each week, so that neither style goes cold while the other is practised.</li>
    <li><strong>Before the board practicals and theory papers:</strong> protect the Intermediate result first, keeping short daily MCQ sets so speed is not lost.</li>
    <li><strong>The final weeks: full three-hour mocks on screen.</strong> Use the official mock test, decide the order of subjects in advance, and review each mock for time spent per section, not just for wrong answers.</li>
  </ol>
  <p>
    The topic-wise posts on <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics</a> and
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE chemistry</a> overlap heavily with the E
    stream. For a tutor in one subject only, start from our Hyderabad
    <a href="{{ url('/maths-home-tutor-hyderabad') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-hyderabad') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-hyderabad') }}">chemistry</a> or
    <a href="{{ url('/biology-home-tutor-hyderabad') }}">biology</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tge-zones">Which tutors can reach you, area by area</h2>
  <p>
    An Intermediate student's day is long already, so the tutor should be the one travelling, on a route they can
    repeat every week. The 2026
    instruction booklets list Hyderabad test-centre locations around areas including Hafeezpet, Kukatpally, Bachupally,
    Nacharam, Boduppal, Nagole and LB Nagar; candidates opt for a test zone when they apply, so check the current list.
    For weekly tutoring, our area research notes:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/hyderabad/zone/kukatpally-miyapur-nizampet') }}">Kukatpally, Miyapur and Nizampet</a>:</strong> in {!! $tgeA('nizampet', 'Nizampet') !!}, a tutor coming by metro gets off on the Red Line and takes an auto or bus along Nizampet Road, which is congested at school and office hours, so leave a buffer.</li>
    <li><strong><a href="{{ url('/city/hyderabad/zone/chandanagar-lingampally-tellapur') }}">Chandanagar, Lingampally and Tellapur</a>:</strong> {!! $tgeA('hafeezpet', 'Hafeezpet') !!} has its own MMTS station, with Miyapur the nearest metro, so tutors can come by train and a short auto.</li>
    <li><strong><a href="{{ url('/city/hyderabad/zone/uppal-habsiguda-nacharam') }}">Uppal, Habsiguda and Nacharam</a>:</strong> for {!! $tgeA('nacharam', 'Nacharam') !!}, Habsiguda on the Blue Line is the nearest metro stop, and Moula Ali and Malkajgiri stations suit tutors coming from the north.</li>
    <li><strong><a href="{{ url('/city/hyderabad/zone/dilsukhnagar-lb-nagar-vanasthalipuram') }}">Dilsukhnagar, LB Nagar and Vanasthalipuram</a>:</strong> {!! $tgeA('lb-nagar', 'LB Nagar') !!} is the Red Line's southern terminus, so a tutor from Ameerpet or Kukatpally rides straight down; in {!! $tgeA('malakpet', 'Malakpet') !!}, the Red Line station and an MMTS stop make arriving by rail more reliable than driving through Nalgonda X Roads.</li>
    <li><strong><a href="{{ url('/city/hyderabad/zone/sainikpuri-alwal-trimulgherry') }}">Sainikpuri, Alwal and Trimulgherry</a>:</strong> {!! $tgeA('trimulgherry', 'Trimulgherry') !!} is reached mainly by road, with Parade Ground the nearest metro interchange; colonies near the cantonment may check visitors at the gate.</li>
  </ul>
  <p>
    Gated towers in the <a href="{{ url('/city/hyderabad/zone/gachibowli-kondapur-madhapur') }}">Gachibowli, Kondapur and
    Madhapur</a> and <a href="{{ url('/city/hyderabad/zone/manikonda-narsingi-kokapet') }}">Manikonda, Narsingi and
    Kokapet</a> zones need the tutor registered at the gate; the
    <a href="{{ url('/city/hyderabad/zone/ameerpet-begumpet-punjagutta') }}">Ameerpet, Begumpet and Punjagutta</a> zone
    has the city's main metro interchange; and in
    <a href="{{ url('/city/hyderabad/zone/mehdipatnam-tolichowki-attapur') }}">Mehdipatnam, Tolichowki and Attapur</a>
    there is no metro, so tutors come by bus or two-wheeler. When junior-college tests pile up, moving one session a
    week online with the same tutor saves the travel without breaking the plan; we compare the two modes in
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tge-demo">Six checks for the TG EAPCET demo</h2>
  <ol>
    <li><strong>This year's booklet.</strong> Ask how many questions each subject has and whether wrong answers cost marks. Hesitation here suggests the tutor is teaching from memory of an older test.</li>
    <li><strong>A mini-mock.</strong> Ten mixed questions in roughly ten minutes, one of them assertion-reason; the useful part is how the tutor goes back over the ones that took longest.</li>
    <li><strong>Stream fit.</strong> The E stream is half maths and the AP stream half biology; the tutor's plan should reflect that.</li>
    <li><strong>Board balance.</strong> Ask how Intermediate theory, practicals and internal assessment will stay on track alongside MCQ work.</li>
    <li><strong>Language.</strong> If your child reads the Telugu or Urdu text beside the English, ask the tutor to explain a few key terms in both.</li>
    <li><strong>Travel.</strong> Ask which metro line or MMTS station they will use, and agree now what happens if they cannot come.</li>
  </ol>
  <p>
    You get two or three matched tutors, each with their fee visible before you book, and the opening class is a free
    demo; changing tutor later costs nothing. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before the profile is marked Verified. For more demo questions,
    see our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">checklist for parents</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tge-fees">What it costs, and how to begin</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and the post on
    <a href="{{ url('/blog/home-tuition-fees-hyderabad') }}">Hyderabad tuition fees</a> explain what moves the figure.
  </p>
  <p>
    Tell us the year of Intermediate or Class 12, the board, the stream (E, AP or both), the medium, your colony and
    nearest station, and the hours that suit; then book the <a href="{{ url('/demo-class') }}">free demo class</a>.
    Profiles are open to browse on <a href="{{ url('/tutors') }}">our tutors list</a>, all localities are on the
    <a href="{{ url('/city/hyderabad') }}">Hyderabad page</a>, and tutors looking for students can try
    <a href="{{ url('/tuition-jobs/hyderabad') }}">Hyderabad tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
