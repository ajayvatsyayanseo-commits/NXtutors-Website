{{--
  Long-form guide for the "Class 11 home tutor Hyderabad" page (Intermediate
  first year under TGBIE, CBSE Class 11, ISC, IB DP Year 1), covering
  Hyderabad and Secunderabad. Authors: Ajay Vatsyayan (IB, IGCSE and ISC maths)
  with the NXTutors Academic Team. Role statements only. No schools, junior
  colleges or coaching institutes named. Kept distinct from
  class-11-home-tutor-mumbai and -gurgaon.

  Official sources (fetched 2 Oct 2026):
  - Telangana Board of Intermediate Education, https://tgbienew.cgg.gov.in/aboutUs.do
    (established to regulate and supervise Intermediate education and specify
    courses of study) and https://tgbienew.cgg.gov.in/home.do (subjects
    Mathematics IA and IB in the first year, IIA and IIB in the second;
    Physics, Chemistry, Botany, Zoology; MEC, CEC and ACE commerce groups;
    first- and second-year theory hall tickets).
  - TGBIE, Intermediate First Year Validation Rules and Guidelines & FAQs
    (w.e.f. 2026-27), https://tgbienew.cgg.gov.in//scannedPhotos/Circulars/Validation_Rules_N_FAQs_(2026).pdf :
    MPC Mathematics IA and IB each 60 theory + 15 internal assessment (best two
    of four unit tests, a record of at least ten mathematical activities,
    activity-based problem solving and viva in January/February); first three
    unit tests by end of November 2026; Physics, Chemistry, Botany and Zoology
    first-year practicals a 15-mark, two-hour external examination, ordinarily
    in the first week of February; MEC Mathematics 80 + 20; theory and
    internal assessment passed separately; English 80 theory + 20 practical.
  - TGBIE Annual Academic Calendar 2026-27 (circular dated 28-03-2026, marked
    tentative), https://tgbienew.cgg.gov.in/scannedPhotos/Circulars/Academic_Calendar_for_the_Academic_Year_2026-27.pdf :
    colleges reopened 1 June 2026; half-yearly exams 03-10-2026 to 09-10-2026;
    Dussehra holidays 10-21 Oct 2026; Sankranthi 13-17 Jan 2027; pre-finals
    18-23 Jan 2027; IPE practicals last week of January 2027; IPE theory last
    week of February 2027.
  - TG EAPCET, https://eapcet.tgche.ac.in/ (About Us and 2026 detailed
    notification PDF): conducted by JNTUH on behalf of TGCHE; computer-based;
    renamed from TS EAMCET from 2024; E stream for MPC, AP stream for BiPC;
    45% (40% reserved categories) in the group subjects at 10+2; multiple
    sessions with normalisation; 2026 ranks based purely on normalised
    EAPCET marks.
  - CBSE Senior Secondary Curriculum 2026-27 (cbseacademic.nic.in), ISC
    Regulations (cisce.org), IB Diploma (ibo.org), JEE (Main) and NEET (UG)
    2026 shapes (nta.ac.in) as stated on class-11-home-tutor-mumbai.
  Local detail only from the Hyderabad city hub view,
  database/seo-content/zones/hyderabad.json,
  database/seo-content/areas/hyderabad-research.json and
  hyderabad-zone-guides.json. Fee range is the approved sentence.
  FAQs: faqs/class-11-home-tutor-hyderabad.php.

  Area links render only when that Hyderabad area page exists and is active.
--}}
@php
  $hyElSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $hyElA = function (string $slug, string $label) use ($hyElSlugs) {
      return in_array($slug, $hyElSlugs, true)
          ? '<a href="' . e(url('/city/hyderabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="hyElGuideTitle">
  <h2 id="hyElGuideTitle">Class 11 home tutors in Hyderabad: Intermediate first year, CBSE, ISC and IB</h2>

  <p class="nx-guide__lede">
    For most state board students in Hyderabad, Class 11 is not called Class 11 at all. It is Inter first year: a
    junior college, a group such as MPC or BiPC, and, unlike CBSE or ISC, a public examination at the end of the year
    set by the Telangana Board of Intermediate Education. From 2026-27 that first year also carries new internal
    assessment and practical rules. CBSE, ISC and IB students stay on in school, but meet a steep jump of their own.
    This guide, by Ajay Vatsyayan, who writes on ISC and IB maths, with the NXTutors Academic Team, explains the
    first-year rules, how the entrance tests line up, which subjects need help in each group, and how to find a
    tutor who can reach your part of the city.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#hyel-inter">Inter first year</a> ·
    <a href="#hyel-new">The 2026-27 changes</a> ·
    <a href="#hyel-boards">Other boards</a> ·
    <a href="#hyel-tests">Entrance tests</a> ·
    <a href="#hyel-groups">Subjects by group</a> ·
    <a href="#hyel-year">The college year</a> ·
    <a href="#hyel-zones">Travel by zone</a> ·
    <a href="#hyel-mode">Home or online</a> ·
    <a href="#hyel-demo">The demo</a> ·
    <a href="#hyel-fees">Fees</a> ·
    <a href="#hyel-where">Where we match</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="hyel-inter">How does Intermediate first year work?</h2>
  <p>
    The Telangana Board of Intermediate Education (TGBIE), at Vidya Bhavan in Nampally, regulates the two-year
    Intermediate course and sets its courses of study. Students take a group: MPC (mathematics, physics, chemistry),
    BiPC (botany, zoology, physics, chemistry), or commerce groups such as MEC, CEC and ACE, alongside English and a
    second language. In MPC, first-year maths is two separate papers, Mathematics IA and IB, which become IIA and IIB in
    the second year. The board issues hall tickets for first-year theory papers as well as second-year ones, so the
    first year ends in a board examination, not a college test.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hyel-new">What changes in the first year from 2026-27?</h2>
  <p>
    TGBIE's validation rules for the revised first-year subjects, in force from 2026-27, add assessed work during the
    year. The parts a tutor needs to know:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Inter first year assessment from 2026-27, as set out in TGBIE's validation rules</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Theory</th><th scope="col">Assessed in college</th><th scope="col">What it asks of the student</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics IA and IB (MPC)</td><td>60 marks each</td><td>15 marks each: best two of four unit tests, an activities record, and an activity-based problem-solving and viva round</td><td>At least ten maths activities across the year; the first three unit tests by the end of November 2026</td></tr>
      <tr><td>Physics, Chemistry, Botany, Zoology</td><td>Written paper</td><td>A 15-mark, two-hour practical examination run by external examiners, ordinarily in the first week of February</td><td>Regular lab work and a certified record book</td></tr>
      <tr><td>Mathematics (MEC)</td><td>80 marks</td><td>20 marks of internal assessment</td><td>Unit tests and activities, as in MPC</td></tr>
      <tr><td>English</td><td>80 marks</td><td>20 marks of practical assessment in communicative English</td><td>Speaking and listening tasks plus a record book</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Theory and internal assessment are passed separately, so strong theory cannot cover a missed activity record. A
    tutor should keep an eye on the unit-test calendar and the record, and help the student prepare for the viva by
    explaining the reasoning aloud. Our <a href="{{ url('/telangana-board-tutor-hyderabad') }}">Telangana board
    tutors in Hyderabad</a> page covers the state syllabus across classes; confirm every detail on the TGBIE website.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hyel-boards">How does Class 11 look on CBSE, ISC and IB?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 11 outside the state board in Hyderabad</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Shape of the course</th><th scope="col">Rule worth knowing</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE</td><td>Classes 11 and 12 are one course of at least five subjects; the Class 11 exam is the school's</td><td>Mathematics (041) and Applied Mathematics (241) cannot be combined; maths is 80 + 20, physics and chemistry 70 theory + 30 practical</td></tr>
      <tr><td>ISC</td><td>English plus three to five electives, six subjects at most</td><td>No subject change after 15 September of Class 11; 35% to pass each subject</td></tr>
      <tr><td>IB Diploma, Year 1</td><td>Six subjects, three or four at Higher Level, plus TOK, the Extended Essay and CAS</td><td>CAS runs for at least 18 months</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    See <a href="{{ url('/cbse-home-tutor-hyderabad') }}">CBSE</a>, <a href="{{ url('/icse-home-tutor-hyderabad') }}">ICSE
    and ISC</a> and <a href="{{ url('/ib-tutor-hyderabad') }}">IB</a> tutors in Hyderabad, and the national
    <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hyel-tests">Which entrance tests should a Class 11 student keep in view?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Three entrance routes for Hyderabad science students</caption>
    <thead>
      <tr><th scope="col">Test</th><th scope="col">Run by</th><th scope="col">Shape, from the 2026 documents</th></tr>
    </thead>
    <tbody>
      <tr><td>TG EAPCET</td><td>JNTU Hyderabad, on behalf of the Telangana Council of Higher Education</td><td>Computer-based, in several sessions with normalised marks; Engineering stream for MPC students, Agriculture and Pharmacy stream for BiPC; 45% (40% for reserved categories) needed in the group subjects; 2026 ranks came from EAPCET marks alone</td></tr>
      <tr><td>JEE (Main)</td><td>National Testing Agency</td><td>Two sessions; 75 questions, 300 marks, three hours; four marks for a right answer and one off for a wrong one</td></tr>
      <tr><td>NEET (UG)</td><td>National Testing Agency</td><td>One pen-and-paper exam; 180 questions, 720 marks, 180 minutes; biology is half the paper</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    TG EAPCET, known as TS EAMCET before 2024, also asks candidates to meet Telangana's local or non-local status
    rules. Read the current notification on eapcet.tgche.ac.in, and NTA's bulletins for JEE and NEET. More on each:
    <a href="{{ url('/ts-eapcet-tutor-hyderabad') }}">TS EAPCET tutors</a>,
    <a href="{{ url('/jee-home-tutor-hyderabad') }}">JEE home tutors</a> and
    <a href="{{ url('/neet-home-tutor-hyderabad') }}">NEET home tutors</a> in Hyderabad.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hyel-groups">Which subjects need a tutor in each group?</h2>
  <ul>
    <li><strong>MPC:</strong> maths first, because IA and IB run side by side and each now has its own internal marks; then physics, where vectors and motion trip up most students. See <a href="{{ url('/maths-home-tutor-hyderabad') }}">maths</a> and <a href="{{ url('/physics-home-tutor-hyderabad') }}">physics</a> tutors in Hyderabad, and the national <a href="{{ url('/maths-home-tutor/class-11') }}">Class 11 maths</a> guide.</li>
    <li><strong>BiPC:</strong> physics numericals and chemistry calculations usually need more help than botany and zoology. Try <a href="{{ url('/chemistry-home-tutor-hyderabad') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-hyderabad') }}">biology</a> tutors.</li>
    <li><strong>MEC, CEC and ACE:</strong> accountancy and, in MEC, maths are the usual requests. Our <a href="{{ url('/commerce-home-tutor-hyderabad') }}">commerce home tutors in Hyderabad</a> page covers the commerce groups.</li>
  </ul>
  <p>
    One or two subject tutors is the practical limit alongside college and coaching; beyond that, the student loses
    the self-study hours where marks are actually made.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hyel-year">How does the first year run in a junior college?</h2>
  <p>
    TGBIE's tentative calendar for 2026-27 gives the outline: colleges reopened on 1 June 2026, half-yearly exams
    run from 3 to 9 October, the Dussehra break follows from 10 to 21 October, Sankranthi holidays fall in mid-January,
    pre-finals are set for 18 to 23 January 2027, practicals for the last week of January and theory papers for the
    last week of February. A tutor's plan can follow it closely:
  </p>
  <ol>
    <li><strong>June to September:</strong> repair Class 10 algebra and ratios, then keep pace with the new chapters and the first unit tests.</li>
    <li><strong>October:</strong> use the half-yearly papers to find weak chapters, and the Dussehra break to fix them.</li>
    <li><strong>November:</strong> finish the first three unit tests and keep the activity record up to date.</li>
    <li><strong>December and January:</strong> full papers, practical records and viva preparation before the pre-finals.</li>
    <li><strong>February:</strong> past-paper revision only, ahead of the theory exams.</li>
  </ol>
  <p>
    CBSE, ISC and IB students follow their school's calendar; <a href="{{ url('/class-12-home-tutor-hyderabad') }}">Class
    12 tutors in Hyderabad</a> carries the plan into the final year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hyel-zones">How do tutors reach Class 11 students in each zone?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Routes and slot advice for senior lessons in six zones</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Typical route</th><th scope="col">Slot advice</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/hyderabad/zone/gachibowli-kondapur-madhapur') }}">Gachibowli, Kondapur &amp; Madhapur</a></td><td>Blue Line to HITEC City or Raidurg, then auto or cab</td><td>End before offices empty, or use a weekend morning</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/manikonda-narsingi-kokapet') }}">Manikonda, Narsingi &amp; Kokapet</a></td><td>By road over the Outer Ring Road; Raidurg the nearest station</td><td>Mix home and online for specialist subjects</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/banjara-hills-jubilee-hills-somajiguda') }}">Banjara Hills, Jubilee Hills &amp; Somajiguda</a></td><td>Jubilee Hills Check Post or Road No. 5 on the Blue Line, then an auto up the numbered roads</td><td>Before the Road No. 36 evening traffic</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/khairatabad-himayatnagar-abids') }}">Khairatabad, Himayatnagar &amp; Abids</a></td><td>Narayanguda or Chikkadpally on the Green Line</td><td>Start ahead of the evening rush on the main roads</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/uppal-habsiguda-nacharam') }}">Uppal, Habsiguda &amp; Nacharam</a></td><td>Habsiguda, Tarnaka or NGRI on the Blue Line</td><td>After the school and office peak on the main road</td></tr>
      <tr><td><a href="{{ url('/city/hyderabad/zone/mehdipatnam-tolichowki-attapur') }}">Mehdipatnam, Tolichowki &amp; Attapur</a></td><td>Bus or two-wheeler; no metro in the zone</td><td>Send an exact map pin for the wider colonies</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hyel-mode">Home or online for Class 11?</h2>
  <p>
    Senior students usually cope well online, and it is often the only workable option on coaching days or when the
    right specialist, for IB Higher Level maths or ISC physics, lives across Hussain Sagar. Home lessons suit students
    who need someone beside them through long problem sets. A common pattern is two online sessions in the week and a
    longer one at home at the weekend, with the tutor watching the working live through a tablet or a camera over the
    page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hyel-demo">How do you judge a Class 11 tutor at the demo?</h2>
  <ol>
    <li>Ask how they handle Maths IA and IB together, or the CBSE, ISC or IB equivalent.</li>
    <li>Ask what they know of the 2026-27 internal assessment and practical rules.</li>
    <li>Give them a problem from the latest unit test and watch whether your child does the thinking.</li>
    <li>Ask how they would split time between the board paper and EAPCET, JEE or NEET practice.</li>
  </ol>
  <p>
    The first class is a free demo, switching later is free, and tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hyel-fees">What does a Class 11 home tutor cost in Hyderabad?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    The subject, the board, entrance-level work and travel at your hour shape each quote, and every fee is visible
    before the demo. See the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-hyderabad') }}">home tuition fees in Hyderabad</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hyel-where">Where we match Class 11 tutors in Hyderabad</h2>
  <p>
    {!! $hyElA('gachibowli', 'Gachibowli') !!} has no station of its own, so tutors ride to Raidurg and take an auto,
    then register at the gate of the tower. {!! $hyElA('kokapet', 'Kokapet') !!}, much of it a planned layout with wide
    roads, is reached mainly over the Outer Ring Road. In {!! $hyElA('jubilee-hills', 'Jubilee Hills') !!}, houses on
    the hill slopes are a doorstep visit, while newer apartments ask for the visitor's name.
  </p>
  <p>
    {!! $hyElA('himayatnagar', 'Himayatnagar') !!}, on the south-eastern side of Hussain Sagar, is close to the Green
    Line at Narayanguda. {!! $hyElA('habsiguda', 'Habsiguda') !!} has its own Blue Line station, with Tarnaka and NGRI
    on either side. {!! $hyElA('rajendranagar', 'Rajendranagar') !!}'s colonies, such as Budwel and Kismatpur, are
    spread out, so an exact pin helps the tutor find you.
  </p>
  <p>
    Tell us the board or group, subjects, entrance plans, college hours and coaching days. We suggest two or three
    tutors with fees shown. <a href="{{ url('/demo-class') }}">Book a free demo</a>, browse
    <a href="{{ url('/tutors') }}">tutor profiles</a> or see <a href="{{ url('/city/hyderabad') }}">home tutors in
    Hyderabad</a>. Before this year, <a href="{{ url('/class-10-home-tutor-hyderabad') }}">Class 10 tutors</a> cover
    the SSC and board year.
  </p>
  </section>

  </div>
</article>
