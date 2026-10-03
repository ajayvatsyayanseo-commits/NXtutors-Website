{{--
  Board page for "IB tutor Greater Noida". Author: Ajay Vatsyayan (role: IB,
  IGCSE and ISC maths). No anecdotes, years or results are claimed for him.
  No schools, coaching institutes, societies, developers or people are named.

  Board facts reworded from the Gurgaon board hub (ib-tutor-gurgaon), which
  cites (ibo.org pages, search extracts and IB PDFs, read 1 Oct 2026):
  - IB Extended essay subject brief (ibo.org PDF): DP for ages 16-19, six
    academic areas around a core, normally three (not more than four) HL
    subjects, 240 h HL / 150 h SL; EE 4,000-word upper limit, three
    reflection sessions ending in a 10-15 minute viva voce, 500-word
    reflective statement; EE + TOK award up to three points.
  - ibo.org/programmes/diploma-programme/curriculum/dp-core/theory-of-knowledge/
    : TOK exhibition (three objects, internally assessed and moderated) and a
    1,600-word essay on one of six prescribed titles.
  - ibo.org/programmes/primary-years-programme/ and the PYP brochure: ages 3-12,
    six transdisciplinary themes, the exhibition in the final year.
  - ibo.org/programmes/middle-years-programme/ and MYP curriculum pages: ages
    11-16, five years (schools may run shorter versions), eight subject
    groups, personal project of about 25 hours, eAssessment optional except
    the personal project; two-hour on-screen exams in some subject groups.
  - DP subject grades 1-7, maximum 45, 24-point threshold among the passing
    conditions, internal assessment in every subject (ibo.org DP assessment).
  No exam dates or revision dates are stated on this page.
  State board and CBSE described only in general terms, as the Greater Noida
  hub does (UPMSP is the state board).
  Local detail only from database/seo-content/areas/greater-noida-research.json,
  greater-noida-zone-guides.json, zones/greater-noida.json and the Greater
  Noida hub view (which says IB/IGCSE families are a smaller group and
  these tutors are fewer, so online widens the choice). No claim that IB
  families live in any one area. Fee wording is the approved NXTutors
  sentence. FAQs render from faqs/ib-tutor-greater-noida.php. Area links
  render only for active Greater Noida areas.
--}}
@php
  $bgnSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $bgnA = function (string $slug, string $label) use ($bgnSlugs) {
      return in_array($slug, $bgnSlugs, true)
          ? '<a href="' . e(url('/city/greater-noida/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide bgn-guide" aria-labelledby="bgnGuideTitle">
  <h2 id="bgnGuideTitle">IB tutors in Greater Noida: PYP, MYP and Diploma help, at home or online</h2>

  <p class="nx-guide__lede">
    IB families are a smaller group in Greater Noida than CBSE or ICSE families, and that shapes how tutoring works
    here. The right person for Physics HL or an MYP maths unit may not live in your sector, so the questions are
    which programme and level your child needs, what a tutor may and may not do with coursework, and when to combine
    home and online classes. This page is by Ajay Vatsyayan; his own teaching is IB, IGCSE and ISC maths.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#bgn-mix">IB in Greater Noida</a> ·
    <a href="#bgn-diff">Coming from CBSE or the UP Board</a> ·
    <a href="#bgn-programmes">PYP, MYP and DP</a> ·
    <a href="#bgn-dp">How the Diploma is scored</a> ·
    <a href="#bgn-core">EE, TOK and IA</a> ·
    <a href="#bgn-subjects">Subjects</a> ·
    <a href="#bgn-session">A good session</a> ·
    <a href="#bgn-zones">Reaching each zone</a> ·
    <a href="#bgn-mode">Home, online or both</a> ·
    <a href="#bgn-demo">Demo checklist</a> ·
    <a href="#bgn-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="bgn-mix">Where the IB sits among Greater Noida's boards</h2>
  <p>
    Most students in Greater Noida study CBSE, a sizeable number are on ICSE and ISC, and the state board, UPMSP, is in
    the mix because the city is in Uttar Pradesh. The IB and Cambridge IGCSE serve a smaller group. Tutors who know a
    specific IB course well are correspondingly fewer, which is why we ask for the programme, year, subject and level
    with every request, and why online sessions often widen the choice. For other boards, see our
    <a href="{{ url('/cbse-home-tutor-greater-noida') }}">CBSE</a>, <a href="{{ url('/icse-home-tutor-greater-noida') }}">ICSE
    and ISC</a> and <a href="{{ url('/igcse-tutor-greater-noida') }}">IGCSE</a> pages for Greater Noida.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bgn-diff">Coming to the IB from CBSE or the UP Board</h2>
  <p>
    CBSE and the UP Board are both built around set textbooks and a final written paper, and a student's grade mostly
    reflects how well that paper goes. The IB works differently. Teachers mark coursework against published criteria,
    every Diploma subject has an internally assessed component, and exam questions use command terms such as
    "explain", "evaluate" or "show that" with precise meanings. A student moving across often knows plenty of content
    and still struggles with open-ended tasks and writing to criteria. A tutor who has taught that move spends the
    early weeks on how work is judged, not on re-teaching chapters. A bridging plan is set out in
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">moving from CBSE to IB or IGCSE</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bgn-programmes">The three programmes, and what a tutor does in each</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>IB programmes by age, assessment and the kind of tutor that fits</caption>
    <thead>
      <tr><th scope="col">Programme</th><th scope="col">Ages, as the IB states them</th><th scope="col">How work is judged</th><th scope="col">The tutor you want</th></tr>
    </thead>
    <tbody>
      <tr><td>PYP</td><td>Roughly 3 to 12</td><td>No external exams; inquiry units organised under six transdisciplinary themes, and a final-year exhibition</td><td>A generalist who makes reading, writing and number confident without turning inquiry into drill</td></tr>
      <tr><td>MYP</td><td>Roughly 11 to 16; a five-year design, though a school may shorten it</td><td>Eight subject groups marked against criteria; a personal project of around 25 hours; on-screen exams if the school chooses them</td><td>A maths or science teacher who reads task sheets and criteria with the student</td></tr>
      <tr><td>Diploma</td><td>Roughly 16 to 19; two years</td><td>Final exams and coursework in six subjects, each given a 1–7 grade, plus the core</td><td>A subject specialist at the right level, SL or HL</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Not every IB school runs every programme; some years may follow a different board altogether.
    In the MYP, the last two years matter most for tutoring, because algebra and science fluency at that point shapes
    the Diploma subjects a student can realistically choose.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bgn-dp">How the Diploma is built and scored</h2>
  <p>
    Six subjects make up the Diploma. Three of them are normally studied at Higher Level (four is the ceiling) and
    the others at Standard Level. The IB plans 240 teaching hours for an HL course and 150 for SL, which
    is why an HL subject that slips early is hard to recover. Subjects are graded on a 1–7 scale, so 42 points
    come from subjects; up to three more come from the core (Extended Essay plus Theory of Knowledge), for 45 in all. Reaching 24
    points is one of several conditions for the award, not the only one.
  </p>
  <p>
    Every subject includes internal assessment, marked by the school's teacher and moderated by the IB, with deadlines
    set in the school calendar. In practice, the heavy months are the middle of DP1 into DP2, when IA drafts, EE
    research and TOK tasks overlap with ordinary teaching. A tutor's most useful contribution then is keeping subject
    content moving so it does not quietly fall behind.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bgn-core">EE, TOK and IA: where tutoring help has to stop</h2>
  <ul>
    <li><strong>Extended Essay:</strong> the student's own research question, written up in no more than 4,000 words, either within a single subject or as an interdisciplinary piece. A supervisor at school meets the student for three recorded reflection sessions, ending with a brief viva voce, and the student adds a 500-word reflective statement.</li>
    <li><strong>Theory of Knowledge:</strong> two parts. The exhibition links three chosen objects to a prompt and is teacher-marked, then moderated; the essay, capped at 1,600 words, answers one of six titles the IB sets per session.</li>
    <li><strong>Internal assessment:</strong> a different task in each subject, such as the maths exploration or a science investigation, judged against published criteria.</li>
  </ul>
  <p>
    Everything submitted has to be the student's. Legitimate help means teaching the chemistry, maths or economics a
    topic rests on, unpacking the criteria, and pushing the student to make a vague question precise. Picking the
    topic, drafting or editing paragraphs and running the data analysis are off limits; draft feedback is the
    supervisor's job, within IB limits. Anyone offering to "polish" coursework is risking your child's diploma.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bgn-subjects">The IB subjects families ask about</h2>
  <p>
    In the Diploma, requests centre on maths (Analysis and Approaches or Applications and Interpretation, at SL or HL)
    and the sciences, especially at Higher Level, followed by economics and essay subjects. MYP families usually want
    maths and science in the final two years; PYP families want reading, writing and number fluency.
  </p>
  <ul>
    <li><strong>Maths:</strong> the <a href="{{ url('/ib-maths-tutor') }}">IB maths tutor</a> page covers AA and AI; for local home classes, see <a href="{{ url('/maths-home-tutor-greater-noida') }}">maths home tutors in Greater Noida</a>. The <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA vs AI guide</a> helps with course choice.</li>
    <li><strong>Sciences:</strong> <a href="{{ url('/physics-home-tutor-greater-noida') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-greater-noida') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-greater-noida') }}">biology</a> tutors in Greater Noida, matched to IB on request; read the <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL/HL, IA and EE guide</a>.</li>
    <li><strong>English and the languages:</strong> <a href="{{ url('/english-home-tutor-greater-noida') }}">English home tutors in Greater Noida</a>; tell us the course and level.</li>
    <li><strong>Economics, business management and others:</strong> matched on request with the exact subject and level.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">IB and IGCSE tutoring guide for parents</a>
    compares the systems, and our <a href="{{ url('/ib-tutor-gurgaon') }}">IB tutor guide for Gurgaon</a> explains each
    programme in more depth.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bgn-session">What a useful IB session looks like</h2>
  <p>
    With a Diploma student, begin with recent marked work from school, whether a test or a problem set. The tutor reads it against the markscheme, names the two or three errors that cost the most and teaches
    those, then sets similar questions under time, phrased with the same command terms. Calculator work happens on the
    student's own approved calculator. For an MYP student, the tutor reads the current task sheet and its criteria
    first, then teaches the maths or science the task needs. Either way, the parent should get a short note on what
    was covered and what comes next.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bgn-zones">Getting an IB tutor to each part of Greater Noida</h2>
  <p>
    IB specialists are spread thinly, so the route matters more than it does for CBSE. These notes apply wherever in the city your child's school is.
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/greater-noida/zone/greater-noida-west') }}">Greater Noida West</a>:</strong> {!! $bgnA('techzone-4', 'Techzone 4') !!} is a dense tower belt around Ek Murti Chowk; with no working metro station nearby, a specialist coming from further away usually drives, so a weekend home session plus weekday online is the common pattern.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/alpha-delta-pari-chowk') }}">Alpha–Delta and Pari Chowk</a>:</strong> {!! $bgnA('gamma-1', 'Gamma 1') !!} is close to ALPHA 1 station, so a tutor from Noida can come by metro and e-rickshaw; ask them to avoid Jagat Farm's evening rush.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/pi-sigma-sectors-36-37') }}">Pi, Sigma and Sectors 36–37</a>:</strong> {!! $bgnA('sector-36', 'Sector 36') !!} has independent houses on wide, quiet roads, so the tutor comes straight to the door; a metro rider uses DELTA 1 and an auto.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/omega-chi-phi') }}">Omega, Chi and Phi</a>:</strong> {!! $bgnA('phi-2', 'Phi 2') !!} is ready societies near Pari Chowk station, with cabs and autos easy to find; register the tutor at the gate first.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/zeta-eta') }}">Zeta and Eta</a>:</strong> {!! $bgnA('zeta-2', 'Zeta 2') !!} is mostly society flats, reached from GNIDA Office station with an auto for the last stretch; the local pool is small, so pairing online classes with any nearby tutor is often sensible.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/omicron-mu-xu') }}">Omicron, Mu and Xu</a>:</strong> {!! $bgnA('xu-1', 'Xu 1') !!} is almost all houses with no gate, but autos rarely come inside, so a tutor with a two-wheeler is the dependable choice.</li>
  </ul>
  <p>
    Sector-by-sector listings are on our <a href="{{ url('/city/greater-noida') }}">Greater Noida tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bgn-mode">Home, online or both?</h2>
  <p>
    Home tuition is ideal for PYP and younger MYP students, and for anyone who works better with someone at the table.
    For a single Diploma subject at HL, online widens the field to tutors who teach that exact course, and many
    families settle on a hybrid: one home session at the weekend, one online on a weekday, with the same person.
    Online maths and science only work if the tutor can see written working live, through a tablet, a shared
    whiteboard or a camera over the notebook. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus
    online comparison</a> covers the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bgn-demo">A demo checklist for IB parents</h2>
  <ol>
    <li><strong>A marked school test.</strong> A tutor who knows the Diploma should read the markscheme annotations and say quickly where marks went.</li>
    <li><strong>Syllabus version.</strong> IB courses are revised on a cycle; ask which version your child's exam session follows.</li>
    <li><strong>Command terms.</strong> Ask what "hence" or "evaluate" demand in an answer.</li>
    <li><strong>Coursework boundaries.</strong> Ask what they would and would not do on an IA; listen for "you write it, I explain the criteria."</li>
    <li><strong>Calculator.</strong> They should work on your child's approved model.</li>
    <li><strong>A plan.</strong> By the end, expect an outline of the next few weeks tied to school deadlines.</li>
  </ol>
  <p>
    Two or three matched tutors come with each request, fees are visible before the demo, and switching later costs
    nothing. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. See also our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bgn-fees">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For IB the programme,
    level, number of subjects and travel time all move the fee. See the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and <a href="{{ url('/blog/home-tuition-fees-greater-noida') }}">home tuition fees in Greater Noida</a>.
  </p>
  <p>
    Send the programme and year with the subject and level ("MYP 5 maths" or "DP2 Chemistry SL"), plus your sector,
    block or society and free hours. Two or three tutors come back on a shortlist, and the opening class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a>, or if
    you teach IB subjects, see <a href="{{ url('/tuition-jobs/greater-noida') }}">tuition jobs in Greater Noida</a>.
  </p>
  </section>

  </div>
</article>
