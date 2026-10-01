{{--
  Board hub for "ICSE home tutor Delhi" (CISCE: ICSE Class 10 and ISC Class
  12). Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths), Aaditya
  Kashyap (role: CBSE and ICSE science) and Ajay Vatsyayan (role: IB, IGCSE and
  ISC maths). No anecdotes, years or results are claimed for any of them. No
  schools, coaching institutes, societies or people are named.

  Board facts are reworded from the Gurgaon ICSE hub (icse-home-tutor-gurgaon),
  which cites these official sources (cisce.org, read 1 Oct 2026):
  - ICSE Regulations, Year 2027: Group I compulsory (English, a second
    language, History, Civics & Geography), Group II two or three (Mathematics,
    Science, Economics, Commercial Studies, a modern foreign or classical
    language, Environmental Science), 80% external / 20% internal; Group III
    one subject (Computer Applications, Economic Applications, Commercial
    Applications, Art, Physical Education, Robotics and AI and others),
    50% / 50%.
  - ICSE Mathematics (51), Year 2027 syllabus: one 3-hour paper of 80 marks
    plus 20 marks internal assessment; at least two assignments, assessed by
    the subject teacher and an external examiner.
  - ICSE Science (52) Physics, Chemistry, Biology, Year 2028 syllabuses: each
    one 2-hour paper of 80 marks plus 20 marks internal assessment of practical
    work.
  - ICSE Analysis of Pupil Performance (CISCE publishes these subject by
    subject).
  - ISC Regulations: English compulsory with three, four or five electives, no
    more than six subjects; practical papers compulsory where they exist; no
    Class XII subject not studied in Class XI; no change of subject after a
    fixed cut-off in the Class XI year; promotion to XII needs 35% in four
    subjects including English and 75% attendance; grades 1 to 9; pass
    certificate needs four or more subjects including English, plus SUPW and
    Community Service; Physics cannot be combined with Engineering Science.
  - ISC Mathematics (860), Year 2027: Paper I theory, 3 hours, 80 marks, and
    Paper II project work, 20 marks, in Class XI and Class XII.
  Delhi detail only from the Delhi city hub view (CBSE for most students,
  ICSE/ISC sizeable, a smaller IB/IGCSE group; no state board described),
  database/seo-content/areas/delhi-research.json and delhi-zone-guides.json.
  No board is said to concentrate in any area. Fee wording is the approved
  NXTutors sentence. FAQs render from faqs/icse-home-tutor-delhi.php. Area links
  render only for active Delhi areas.
--}}
@php
  $icdSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $icdA = function (string $slug, string $label) use ($icdSlugs) {
      return in_array($slug, $icdSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide icd-guide" aria-labelledby="icdGuideTitle">
  <h2 id="icdGuideTitle">ICSE and ISC home tutors in Delhi: writing, method and the CISCE years</h2>

  <p class="nx-guide__lede">
    Parents who choose an ICSE school in Delhi usually know what they are signing up for: more papers, more writing and
    examiners who want to see every step. What they often want from a tutor is someone who teaches in that style
    rather than in the shorter, objective style many tutors are used to. This guide covers how CISCE structures the
    ICSE and ISC years, the subjects Delhi families most often need help with, what a CISCE-style lesson looks like, how
    to test a tutor in the free demo, and how tutors travel to homes in different parts of the city. Abhinandan Tiwary
    (Class 10 CBSE and ICSE maths) and Aaditya Kashyap (CBSE and ICSE science) wrote the ICSE sections; Ajay Vatsyayan
    (IB, IGCSE and ISC maths) wrote the ISC sections.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#icd-delhi">ICSE in Delhi</a> ·
    <a href="#icd-ladder">Class by class</a> ·
    <a href="#icd-groups">The three groups</a> ·
    <a href="#icd-papers">Maths and science papers</a> ·
    <a href="#icd-isc">ISC rules</a> ·
    <a href="#icd-subjects">Subjects</a> ·
    <a href="#icd-lesson">A CISCE-style lesson</a> ·
    <a href="#icd-travel">Travel across Delhi</a> ·
    <a href="#icd-mode">Home or online</a> ·
    <a href="#icd-demo">The demo</a> ·
    <a href="#icd-fees">Fees and next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="icd-delhi">ICSE and ISC in Delhi's school mix</h2>
  <p>
    As our <a href="{{ url('/city/delhi') }}">Delhi tutors page</a> describes it, CBSE is the board most Delhi students
    sit, while CISCE's ICSE and ISC have a sizeable following and a smaller group take the IB or IGCSE. That middle
    position matters when you look for a tutor. Plenty of tutors teach maths or science "for all boards", but fewer have
    worked closely with CISCE specimen papers and examiner reports, and fewer still with ISC electives. It is worth
    asking for a CISCE specialist by name rather than accepting a general subject tutor.
  </p>
  <p>
    Children who join an ICSE school in Delhi after studying under a state board elsewhere, or under CBSE, tend to feel
    the difference in two places: the volume of writing across subjects, and the number of separate papers. Content
    gaps are usually smaller than the gap in habits, so a tutor should start with the way answers are laid out.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icd-ladder">The CISCE route, class by class</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>From Class 6 to Class 12 under CISCE: what counts and what usually surprises families</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">What counts</th><th scope="col">What tends to surprise families</th><th scope="col">Where a tutor earns their fee</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>The school's own exams and projects</td><td>How much writing is expected even in science</td><td>Ratio, fractions and early algebra; full-sentence answers; labelled diagrams</td></tr>
      <tr><td>9</td><td>School exams, while CISCE's two-year syllabus for Classes 9 and 10 begins</td><td>The jump in the number of subjects to keep moving at once</td><td>A weekly rotation so no paper is neglected; working shown from day one</td></tr>
      <tr><td>10</td><td>ICSE papers plus internal assessment (80 and 20 in most subjects, 50 and 50 in Group III)</td><td>Three separate science papers</td><td>Specimen papers and examiner reports, paper by paper, under time</td></tr>
      <tr><td>11</td><td>School exams; promotion needs 35% in four subjects including English</td><td>The depth of ISC electives after ICSE</td><td>Securing the new electives early; helping with subject choice before the cut-off</td></tr>
      <tr><td>12</td><td>ISC theory papers, practicals and project work</td><td>How much the practical and project components carry</td><td>Depth in each elective and steady progress on practical and project work</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icd-groups">The three ICSE subject groups</h2>
  <p>
    CISCE's regulations sort ICSE subjects into three groups, and the group tells you how a subject's mark is made up.
    <strong>Group I</strong> is compulsory for everyone: English, a second language, and History, Civics and Geography.
    <strong>Group II</strong> is a choice of two or three from Mathematics, Science, Economics, Commercial Studies, a
    modern foreign or classical language, and Environmental Science. In both groups, 80% of the mark comes from the
    final paper and 20% from internal assessment. <strong>Group III</strong> is a single subject, chosen from applied
    options such as Computer Applications, Economic Applications, Commercial Applications, Art, Physical Education or
    Robotics and AI, and here the split is even: half from the exam, half from internal work.
  </p>
  <p>
    The tutoring lesson is that Groups I and II are decided mostly on exam day, so timed practice matters, while a
    Group III subject is decided across the year, so steady project work matters.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icd-papers">How the ICSE maths and science papers are built</h2>
  <p>
    ICSE Mathematics is a single three-hour paper of 80 marks plus 20 internal marks. Those internal marks come
    from at least two assignments, each assessed by the subject teacher and separately by an external examiner. The
    syllabus carries commercial topics, such as banking and shares, alongside algebra, geometry, trigonometry and
    statistics, and the examiners award marks for method.
  </p>
  <p>
    ICSE Science is examined as three subjects. Physics, Chemistry and Biology each have their own two-hour paper of 80
    marks and 20 marks of internal assessment based on practical work. A child can be confident in physics numericals
    and still be weak at chemical equations or biology diagrams, so either the science tutor covers all three
    comfortably or the family plans separately for the weakest.
  </p>
  <p>
    After each exam season CISCE publishes an Analysis of Pupil Performance for each subject, describing the errors
    examiners saw and the answers they wanted. A tutor who reads these is teaching to the way the board actually marks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icd-isc">ISC in Classes 11 and 12: rules worth knowing early</h2>
  <p>
    In ISC, English is compulsory and the student adds three, four or five electives, with six subjects at most. The
    regulations contain a few rules that families learn about too late:
  </p>
  <ul>
    <li>Subjects are fixed after a cut-off early in the Class 11 year, and nothing can be taken in Class 12 that was not studied in Class 11.</li>
    <li>Moving up to Class 12 requires at least 35% in four subjects including English, plus 75% attendance.</li>
    <li>Where a subject has a practical paper, the practical is compulsory.</li>
    <li>Certain pairings are barred, for example Physics with Engineering Science.</li>
    <li>Results are graded 1 to 9; a pass certificate needs four or more subjects including English, and a pass in Socially Useful Productive Work and Community Service.</li>
  </ul>
  <p>
    ISC Mathematics has an 80-mark, three-hour theory paper and 20 marks of project work, in Class 11 and in Class 12.
    Our <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page goes into the papers, and the
    <a href="{{ url('/icse-home-tutor-gurgaon') }}">ICSE and ISC guide for Gurgaon</a> explains the board in more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icd-subjects">Which ICSE and ISC subjects Delhi parents ask about</h2>
  <p>
    For ICSE, maths and the three sciences come first, because method marks build week by week. English and History,
    Civics and Geography follow, since both depend on long, well-organised written answers. At ISC the requests narrow
    to electives: maths, physics, chemistry and biology on the science side; accounts, commerce and economics on the
    commerce side; and English literature for students who find the set texts heavy.
  </p>
  <ul>
    <li><strong>Maths:</strong> <a href="{{ url('/maths-home-tutor-delhi') }}">maths home tutors in Delhi</a>, the <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> and, for Class 12, the <a href="{{ url('/isc-maths-tutor') }}">ISC maths</a> page.</li>
    <li><strong>Physics, chemistry and biology:</strong> <a href="{{ url('/science-home-tutor-delhi') }}">science tutors</a> for ICSE, or <a href="{{ url('/physics-home-tutor-delhi') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-delhi') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-delhi') }}">biology</a> tutors in Delhi for a single paper or an ISC elective.</li>
    <li><strong>English:</strong> <a href="{{ url('/english-home-tutor-delhi') }}">English home tutors in Delhi</a>; see also <a href="{{ url('/blog/icse-class-10-english-papers') }}">the ICSE English papers</a> and <a href="{{ url('/blog/isc-class-12-english-literaturelanguage') }}">ISC English language and literature</a>.</li>
    <li><strong>Entrance exams with ISC:</strong> <a href="{{ url('/jee-home-tutor-delhi') }}">JEE</a> and <a href="{{ url('/neet-home-tutor-delhi') }}">NEET</a> tutors in Delhi.</li>
    <li><strong>History, Civics and Geography, Commercial Studies, Accounts, Economics:</strong> matched on request; tell us the class and the set texts or chapters.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icd-lesson">What a CISCE-style lesson looks like</h2>
  <p>
    The core of a good ICSE or ISC lesson is marking, not talking. The student begins by writing out answers to two or
    three questions from last week, and the tutor goes through them line by line, looking for skipped steps, missing
    units, unlabelled diagrams and unclear sentences. Then comes one new topic, taught from the textbook and tested
    immediately with a specimen-paper question. The lesson closes with one question answered in full against the
    clock. For ISC sciences, some lessons should be given over to practical skills: recording observations, choosing
    and drawing the right graph, and writing a conclusion an examiner can credit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icd-travel">How tutors travel to ICSE families across Delhi</h2>
  <p>
    ICSE specialists are fewer than CBSE tutors, so the nearest one may live further away. Planning the route makes
    the difference between a lesson that happens every week and one that is often cancelled. Some examples:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Getting a tutor to the door: six Delhi examples</caption>
    <thead>
      <tr><th scope="col">Colony and zone</th><th scope="col">How a tutor usually arrives</th><th scope="col">What to arrange</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $icdA('pitampura', 'Pitampura') !!}, <a href="{{ url('/city/delhi/zone/pitampura-model-town-north-campus') }}">Pitampura and Model Town</a></td><td>Red Line via Kohat Enclave or Netaji Subhash Place, or the Magenta Line on the Outer Ring Road side</td><td>Afternoon slots, before the commercial district fills in the evening</td></tr>
      <tr><td>{!! $icdA('karol-bagh', 'Karol Bagh') !!}, <a href="{{ url('/city/delhi/zone/karol-bagh-patel-nagar-rajinder-nagar') }}">Karol Bagh and Patel Nagar</a></td><td>Blue Line, then a short walk; parking is scarce</td><td>Weekday lessons; send the exact floor and a landmark</td></tr>
      <tr><td>{!! $icdA('kalkaji', 'Kalkaji') !!}, <a href="{{ url('/city/delhi/zone/kalkaji-cr-park-sarita-vihar') }}">Kalkaji and CR Park</a></td><td>Violet or Magenta Line to Kalkaji Mandir, then an e-rickshaw</td><td>The tutor's name at the pocket gate; morning or online in festival weeks</td></tr>
      <tr><td>{!! $icdA('lajpat-nagar', 'Lajpat Nagar') !!}, <a href="{{ url('/city/delhi/zone/gk-defence-colony-lajpat-nagar') }}">GK and Lajpat Nagar</a></td><td>Violet or Pink Line to Lajpat Nagar, or Moolchand</td><td>A word with the block guard; avoid market-evening parking</td></tr>
      <tr><td>{!! $icdA('vikaspuri', 'Vikaspuri') !!}, <a href="{{ url('/city/delhi/zone/janakpuri-rajouri-garden-punjabi-bagh') }}">Janakpuri and West Delhi</a></td><td>Blue Line along Najafgarh Road; builder floors need only the floor and a landmark</td><td>Keep clear of the Outer Ring Road evening rush</td></tr>
      <tr><td>{!! $icdA('preet-vihar', 'Preet Vihar') !!}, <a href="{{ url('/city/delhi/zone/laxmi-nagar-preet-vihar-shahdara') }}">Laxmi Nagar and Preet Vihar</a></td><td>Blue Line along Vikas Marg</td><td>Name to the RWA guard where blocks are gated; start before the office rush</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The <a href="{{ url('/blog/south-delhi-tuition-guide') }}">South Delhi</a> and
    <a href="{{ url('/blog/east-delhi-tuition-guide') }}">East Delhi</a> tuition guides add colony-level timing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icd-mode">Home or online for ICSE and ISC</h2>
  <p>
    Because CISCE marks reward written presentation, a home tutor who sits beside the notebook has a real advantage in
    Classes 6 to 10. Online classes suit an ISC elective where the right specialist lives across the Yamuna or
    at the other end of a metro line, and for short mid-week checks between home lessons. A blend with the same tutor,
    one home lesson and one online, is common. Whichever you choose, the tutor must see the student's handwriting live.
    The <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online comparison</a> sets out the
    trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icd-demo">Testing an ICSE or ISC tutor in the demo</h2>
  <ol>
    <li><strong>Examiner reports.</strong> Ask whether they use CISCE's Analysis of Pupil Performance, and for which subjects.</li>
    <li><strong>Method marks.</strong> Give a maths question your child got "nearly right" and see whether the tutor finds the missing step.</li>
    <li><strong>Range across sciences.</strong> Ask for a short physics explanation and then a biology diagram.</li>
    <li><strong>Writing correction.</strong> In English or history, see whether they correct expression as well as facts.</li>
    <li><strong>ISC components.</strong> Ask how they support project work and the practical file without doing either.</li>
  </ol>
  <p>
    You get two or three matched tutors, see each fee before the demo, and can switch tutor later at no cost. Tutors
    who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icd-fees">ICSE and ISC tuition fees in Delhi</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    The class, number of papers, how near the exam is and the tutor's journey decide the figure. See the
    <a href="{{ url('/blog/home-tuition-fees-delhi') }}">Delhi fees guide</a> and the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  <p>
    Tell us ICSE or ISC, the class, subjects, your colony with block or pocket, the nearest station and your free
    slots. We shortlist two or three tutors and the first class is a <a href="{{ url('/demo-class') }}">free demo</a>.
    Browse <a href="{{ url('/tutors') }}">tutor profiles</a>, or compare with our Delhi
    <a href="{{ url('/cbse-home-tutor-delhi') }}">CBSE</a>, <a href="{{ url('/ib-tutor-delhi') }}">IB</a> and
    <a href="{{ url('/igcse-tutor-delhi') }}">IGCSE</a> pages. Tutors can find open requests on
    <a href="{{ url('/tuition-jobs/delhi') }}">Delhi tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
