{{--
  Board hub: "UP Board tutor Lucknow" (UPMSP High School and Intermediate).
  Author: nxtutors (NXTutors Academic Team). No school, college, coaching,
  hospital, society or people names. No exam dates, results or candidate or
  school counts. No state entrance-exam page exists for Lucknow, so Class 12
  science links go to the JEE and NEET pages. The page does not describe
  Lucknow as the state capital (no official page read for this wave says so).

  Official sources (all upmsp.edu.in, read 2 Oct 2026; Hindi pages and PDFs
  read and translated by the writer):
  - /AboutUs.aspx: board set up in 1921 at Prayagraj by an act of the United
    Provinces Legislative Council, first examination 1923, 10+2 from the start
    (High School after ten years, Intermediate after the +2 stage); head office
    Prayagraj; regional offices set up at Meerut, Varanasi, Bareilly and
    Prayagraj; functions: recognise schools, prescribe courses and textbooks,
    conduct the two examinations, grant equivalence; Director of Education is
    ex-officio chairman; curriculum, examination, result, recognition and
    finance committees plus subject committees.
  - /Instruction.aspx (instructions for the 2027 examinations and session
    2026-27): online advance registration of Classes 9 and 11 through the
    school is compulsory; institutional details are prepared by the principal
    from school records; private candidates submit a form with certificates at
    a forwarding centre; partial corrections (missing photo, subjects, date of
    birth) follow the board's schedule, but online name correction is not
    allowed; schools may
    download a photo checklist as often as they like before the last date, and
    the board advises giving it to students to check their own details; no
    change after final submission, and unsubmitted data means unregistered
    students; eligible categories for institutional and private High School and
    Intermediate candidates (own-school registrants, once-failed regular
    students, credit-system students, students registered at another UPMSP
    school, students who passed Class 9 / Class 11 from another board
    established by law or failed that board's equivalent exam, extra subjects
    after passing, ITI pass-outs taking Hindi for equivalence, and others);
    applications forwarded from two or more schools are all cancelled; on a
    change of school after Class 9 / 11 registration the first school must
    delete the online registration or admission elsewhere may not be possible;
    correspondence-course (patrachar) Intermediate private candidates must
    forward their form through the district's designated registration-centre
    school, listed by the board, or the form is treated as cancelled; one-year
    and two-year correspondence courses; examination fee table for 2027
    (High School institutional Rs 500 + Rs 1 mark-sheet fee; private Rs 700 +
    1.50 + 5 forwarding = Rs 706.50; Intermediate institutional Rs 600 + 1;
    private Rs 800 + 1.50 + 5 = Rs 806.50; credit-system and additional-subject
    rows lower).
  - Home page student menu: syllabus, monthly syllabus, model papers, question
    bank, formative assessment, books, career guidance for agriculture, arts,
    commerce and science groups; results and scholarship portals.
  - /Board_ModelPaper.aspx lists: Class 10 model papers include Home Science,
    Drawing, Agriculture, Computer, Health Care, Disaster Management, Solar
    System Repair and NCC; Class 12 include Psychology, Education, Tarkshastra
    (logic), music, two drawing papers, Sociology, Computer, wood craft
    (Kashth Shilp), book craft (Granth Shilp), tailoring (Silai Shilp), Ranjan
    Kala, Physics, Chemistry, Biology, Lekhashastra (accountancy) and NCC.
  - /Board_AcademicCalendar.aspx (monthly syllabus): files by subject for
    Classes 9-12 including Sindhi, Marathi, Nepali, Punjabi, Urdu, Arabic,
    Farsi, Anthropology, Sainya Vigyan (military science), Nrityakala (dance)
    and Vyavsaay Adhyayan (business studies).
  - /Board_QuestionBank.aspx: Class 9 question banks by subject code (901
    Hindi, 917 English, 928 Maths, 931 Science, 932 Social Science, 935
    Commerce, 937 Agriculture, 941 Computer and others).
  - ModelPaper/class12/131-Math.pdf (session 2026-27): 100 marks, 3 h 15 min,
    first 15 minutes for reading, nine compulsory questions, each states how
    many parts to attempt; part marks rise from one-mark multiple-choice items
    to eight-mark questions; set in Hindi.
  - Syllabus/Class10/928-Maths-Class-10.pdf and 931-Science-Class-10.pdf
    (2026-27): High School subjects carry 30 marks of internal assessment or
    practical work beside the 70-mark paper; ModelPaper/class10/928-Math.pdf
    and 931-Science.pdf open with one-mark multiple-choice questions.
  - Career guidance PDFs (science and commerce groups): the board's notice
    that families should take a career counsellor's advice before admission
    to any institution or course named, and that the board does not verify how
    any institution or course is run.
  Local detail only from database/seo-content/zones/lucknow.json,
  areas/lucknow-research.json, lucknow-zone-guides.json and the Lucknow hub
  (CBSE widely followed; ICSE/ISC strong and long-standing; smaller IB and
  IGCSE numbers; many families in UP Board schools; UP Board taught in Hindi
  or English, so board and medium are matched together). Fee wording is the
  approved sentence. FAQs render from faqs/up-board-tutor-lucknow.php. Area
  links render only for active areas.
--}}
@php
  $lubSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $lubA = function (string $slug, string $label) use ($lubSlugs) {
      return in_array($slug, $lubSlugs, true)
          ? '<a href="' . e(url('/city/lucknow/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="lubGuideTitle">
  <h2 id="lubGuideTitle">UP Board tutors in Lucknow: registration, eligibility and the paper, in that order</h2>

  <p class="nx-guide__lede">
    Plenty of Lucknow children study in schools recognised by the Madhyamik Shiksha Parishad, the body most people
    simply call the UP Board, and the city's classrooms teach it in Hindi or in English. Most guidance on the board
    starts and ends with the exam paper. This page starts earlier, with the paperwork the board fixes in Classes 9 and
    11, the rules on who may sit High School and Intermediate, and what happens if a child changes school or arrives
    from CBSE or ICSE. Those rules decide whether the exam happens at all; a tutor then helps with the rest. Every rule
    below comes from the board's own website, upmsp.edu.in, read for the 2026-27 session; it is revised every year,
    so check it again for your child's year.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#lub-body">The board itself</a> ·
    <a href="#lub-reg">Registration years</a> ·
    <a href="#lub-who">Who may sit the exams</a> ·
    <a href="#lub-move">Changing school or board</a> ·
    <a href="#lub-private">Private and correspondence study</a> ·
    <a href="#lub-paper">The Intermediate maths paper</a> ·
    <a href="#lub-subjects">Less common subjects</a> ·
    <a href="#lub-medium">Medium of teaching</a> ·
    <a href="#lub-career">Career guidance</a> ·
    <a href="#lub-zones">Tutors by zone</a> ·
    <a href="#lub-demo">The demo</a> ·
    <a href="#lub-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="lub-body">A short note on the board before anything else</h2>
  <p>
    An act of the old United Provinces legislature created the board at Prayagraj in 1921, and it ran its first
    examinations in 1923. It has kept the same two public examinations since: High School, taken after ten years of
    school, and Intermediate, taken two years later. Its head office remains in Prayagraj, with regional offices that
    share the work. The state's Director of Education chairs the board, and separate committees look after curriculum,
    examinations, results, recognition of schools and finance, with further committees for each subject.
  </p>
  <p>
    Why should a Lucknow parent care about the committee structure? Because it explains where change comes from. The
    syllabus, the model papers and the rules for candidates are all set centrally and published on one website, and
    they are revised session by session. A tutor who works from last year's photocopied guide is working from a
    document the board may already have replaced.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lub-reg">Classes 9 and 11: the years the board registers your child</h2>
  <p>
    The board does not wait for Class 10 to learn who its candidates are. For the 2026-27 session its instructions make
    online advance registration compulsory for every Class 9 and Class 11 student in a recognised school, and the
    school, not the family, uploads the details from its own records. Several points in those instructions matter to
    parents more than to anyone else:
  </p>
  <ul>
    <li><strong>The name cannot be corrected online.</strong> The board's instructions bar online changes to a student's name, so a spelling mistake caught late becomes a much bigger problem than one caught in Class 9.</li>
    <li><strong>There is a checklist, and you can ask to see it.</strong> Before the last date the school may download a checklist with each student's photograph as often as it likes, and the board recommends giving it to students so they can check their own details.</li>
    <li><strong>Final submission is final.</strong> Once the principal submits the data, the school can no longer amend it, and data that is never submitted leaves the student unregistered.</li>
    <li><strong>Subjects are part of the record.</strong> The subject list goes into the registration, and later corrections to subjects or other details follow the board's own timetable, so settle the Class 11 group early.</li>
  </ul>
  <p>
    A home tutor has no role in the registration itself. What a tutor can do in these two years is protect the subject
    choice: if a Class 11 student is unsure between the science and commerce groups, a few weeks of honest teaching in
    both before the record closes is cheaper than a change later. Our guide to
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a> sets out the questions to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lub-who">Who may sit High School and Intermediate</h2>
  <p>
    The instructions for the 2027 examinations list who may appear, separately for students entered by a school
    (institutional) and for private candidates. In plain terms:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Main categories of candidate in the board's instructions for the 2027 examinations</caption>
    <thead>
      <tr><th scope="col">Route</th><th scope="col">High School (Class 10)</th><th scope="col">Intermediate (Class 12)</th></tr>
    </thead>
    <tbody>
      <tr><td>Through a school, the usual case</td><td>A regular Class 10 student who passed Class 9 after advance registration at the same school</td><td>A regular Class 12 student who passed Class 11 after advance registration at the same school</td></tr>
      <tr><td>Through a school, other cases</td><td>Students who failed the board's institutional exam once; credit-system students; students registered in Class 9 at another recognised school; students who passed Class 9 under another board established by law</td><td>Students who failed once; students registered in Class 11 at another recognised school; students who passed Class 11 under another lawful board, or failed its equivalent exam</td></tr>
      <tr><td>As a private candidate</td><td>Students who failed High School; credit-system students; those who passed Class 9 here or under another lawful board; those adding subjects after passing; ITI pass-outs taking Hindi for equivalence</td><td>Students who failed Intermediate; those who passed Class 11 here or under another lawful board and joined a one-year correspondence course; two-year correspondence students; those adding a subject after passing</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The categories are summarised here; the board's own list has more detail and a few further groups. Read it in
    full if your child's case is unusual, and confirm with the school before the forms go in.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lub-move">Changing school, or arriving from CBSE or ICSE</h2>
  <p>
    Families move across Lucknow, and children change school. The board's rules make two practical points about this.
    First, if a registered Class 9 or Class 11 student moves to another school for Class 10 or 12, the first school's
    principal must delete the old online registration; until that happens, admission to the new school may not go
    through. Second, an examination form forwarded from two or more schools, with the fact hidden, leads to every one
    of that student's applications being cancelled. A clean handover between the two schools is worth chasing in person.
  </p>
  <p>
    A child coming from CBSE or ICSE can enter the board after passing Class 9 or Class 11 under that board, as the
    table above shows, but the academic change is larger than the paperwork. Four things deserve attention in the
    first term:
  </p>
  <ol>
    <li><strong>The words on the paper.</strong> Technical terms may now be read and written in Hindi; a student who learnt "coefficient" or "displacement" only in English needs the paired vocabulary early.</li>
    <li><strong>A longer sitting.</strong> The board's papers run three hours and fifteen minutes, the first fifteen for reading, and students used to a three-hour paper should practise using that quarter hour.</li>
    <li><strong>Objective questions.</strong> Papers open with one-mark multiple-choice items, which reward speed and care rather than long answers.</li>
    <li><strong>School marks.</strong> High School subjects carry a share of marks awarded in school, so the projects and practicals the new school sets cannot be skipped while the student catches up.</li>
  </ol>
  <p>
    For the boards a student may be leaving, see our <a href="{{ url('/cbse-home-tutor-lucknow') }}">CBSE</a> and
    <a href="{{ url('/icse-home-tutor-lucknow') }}">ICSE and ISC</a> pages for Lucknow.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lub-private">Private candidates and correspondence study</h2>
  <p>
    The board examines private candidates at both levels. Instead of a school uploading their details, a private
    candidate fills in a set form, attaches the certificates that prove eligibility and hands it, with the fee, to the
    principal or forwarding officer of a designated forwarding centre. For Intermediate, the board's correspondence
    institute runs one-year and two-year courses, and a candidate registered on one must send the examination form
    through the registration-centre school fixed for their district; a form routed through any other school is treated
    as cancelled. The board publishes the list of these centre schools.
  </p>
  <p>
    The board's instructions also list its examination fees for school and private candidates; check the current
    figures on upmsp.edu.in before the form is filled. Private and
    correspondence students are often the ones who gain most from a regular tutor, because no classroom keeps them to a
    timetable. For them we suggest a fixed weekly plan built on the board's monthly syllabus, and a mock paper every
    few weeks under the full timing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lub-paper">Inside the Intermediate maths model paper</h2>
  <p>
    The 2026-27 model paper for Class 12 mathematics (subject code 131) is a useful example of how the board sets a
    senior paper. It carries 100 marks, with no practical component, and runs for three hours and fifteen minutes, the
    first fifteen kept for reading. There are nine questions and all of them are compulsory, but each states how many
    of its parts must be answered. The marks per part climb steadily: one-mark multiple-choice and very short items
    first, then two-mark and five-mark parts, and finally long questions worth eight marks a part, on topics such as a
    system of three linear equations or an area found by integration.
  </p>
  <p>
    Three habits follow from that layout. Use the reading time to decide which parts to attempt in each question,
    because choosing badly costs more than any single slip. Do not sink twenty minutes into a one-mark item. And keep
    the eight-mark methods drilled until they are automatic, since the last questions carry the paper. The model paper
    we read is set in Hindi, so practice should use the same terms. The <a href="{{ url('/maths-home-tutor-lucknow') }}">maths
    home tutors in Lucknow</a> page covers the subject across boards, and science students can see the
    <a href="{{ url('/physics-home-tutor-lucknow') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-lucknow') }}">chemistry</a> and
    <a href="{{ url('/biology-home-tutor-lucknow') }}">biology</a> pages; younger students the
    <a href="{{ url('/science-home-tutor-lucknow') }}">science</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lub-subjects">Subjects most families never hear about</h2>
  <p>
    The board's subject range is far wider than the science, commerce and arts staples. Its model papers for Class 10
    include health care, disaster management, solar system repair and NCC alongside home science, drawing, agriculture
    and computer. At Class 12 the list adds logic (tarkshastra), wood craft, book craft, tailoring, ranjan kala,
    two kinds of drawing, music, psychology and education, and the monthly syllabus has files for anthropology,
    military science and dance. Language papers run well beyond Hindi, English and Sanskrit to Urdu, Arabic, Farsi,
    Punjabi, Sindhi, Marathi and Nepali.
  </p>
  <p>
    We are honest about where tutors help. For core academic subjects, home tuition fits well: Hindi and English,
    maths, the sciences, accountancy (lekhashastra in the board's list), business studies, economics, history,
    geography and civics. For craft, music and vocational papers the school's own practical teaching matters most. For
    the commerce subjects see our <a href="{{ url('/accountancy-home-tutor-lucknow') }}">accountancy</a> and
    <a href="{{ url('/economics-home-tutor-lucknow') }}">economics</a> pages, and for the language paper the
    <a href="{{ url('/english-home-tutor-lucknow') }}">English home tutors in Lucknow</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lub-medium">Hindi medium, English medium: tell us which</h2>
  <p>
    UP Board schools in Lucknow teach in Hindi or in English, and the same chapter can feel like a different subject
    across that line. The model papers we read on the board's site are set in Hindi. So when you ask for a tutor, give
    us three things together: the board, the class and the medium in which your child writes answers. A tutor may
    explain a concept in whichever language the child follows most easily, but written practice must use the terms the
    paper uses.  A tutor who suits your child in every other way can still be the wrong match if the medium is wrong.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lub-career">The board's career guidance, read with care</h2>
  <p>
    The board publishes career guidance for each of its four Intermediate groups: agriculture, arts, commerce and
    science. The documents list courses, eligibility and entrance tests for many careers, and they are a good place for
    a Class 10 student to start thinking. They also carry a notice that families should take a career counsellor's
    advice before seeking admission anywhere, and that the board does not check how any institution or course listed is
    run. We would say the same of any list. For Class 12 science students preparing for national entrance exams
    alongside the board, see <a href="{{ url('/jee-home-tutor-lucknow') }}">JEE</a> and
    <a href="{{ url('/neet-home-tutor-lucknow') }}">NEET</a> home tutors in Lucknow.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lub-zones">UP Board tutors across Lucknow's five zones</h2>
  <p>
    Weekly tuition only works if the tutor's journey is easy to repeat. Our zone notes describe each part of the city:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/lucknow/zone/gomti-nagar-indira-nagar-chinhat') }}">Gomti Nagar, Indira Nagar and Chinhat</a>.</strong> {!! $lubA('chinhat', 'Chinhat') !!} sits where Shaheed Path meets Faizabad Road and has no metro station, so tutors come by road from Gomti Nagar or Indira Nagar; houses mean a doorstep visit, while highway townships register visitors at the gate.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/mahanagar-aliganj-jankipuram') }}">Mahanagar, Aliganj and Jankipuram</a>.</strong> In {!! $lubA('jankipuram-extension', 'Jankipuram Extension') !!} some sectors are still filling up, so send a map pin; a tutor from Jankipuram or Aliganj suits school subjects, with online classes for anything specialist.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/hazratganj-lalbagh-aminabad') }}">Hazratganj, Lalbagh and Aminabad</a>.</strong> {!! $lubA('chowk', 'Chowk') !!} has narrow market lanes and no station yet, so tutors come by two-wheeler or auto. In {!! $lubA('aminabad', 'Aminabad') !!}, Sachivalaya is the working Red Line stop until the approved Blue Line arrives; weekend mornings dodge the market crowds.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/alambagh-ashiyana-rajajipuram') }}">Alambagh, Ashiyana and Rajajipuram</a>.</strong> {!! $lubA('sarojini-nagar', 'Sarojini Nagar') !!} is on the airport side of Kanpur Road, served by Amausi and Transport Nagar stations; the highway is slow at office hours, so fix a weekend or early-evening slot.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/sushant-golf-city-vrindavan-yojana-telibagh') }}">Sushant Golf City, Vrindavan Yojana and Telibagh</a>.</strong> {!! $lubA('telibagh', 'Telibagh') !!} is mostly houses on Raebareli Road with no metro, so tutors drive or ride in; after-school slots that start a little later avoid the road's busy hours.</li>
  </ul>
  <p>
    Our zone guides for <a href="{{ url('/blog/gomti-nagar-and-trans-gomti-tuition-guide') }}">Gomti Nagar and
    Trans-Gomti</a> and for <a href="{{ url('/blog/central-and-south-lucknow-tuition-guide') }}">central and south
    Lucknow</a> go further, and every locality is listed on the
    <a href="{{ url('/city/lucknow') }}">Lucknow home tutors page</a>. Where no suitable tutor lives close, a mix of one
    home visit and one online class a week is often the steadier plan; our comparison of
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring</a> explains the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lub-demo">Five questions for a UP Board tutor at the demo</h2>
  <ol>
    <li><strong>"Which class and group have you taught on this board, and in which medium?"</strong> Hindi-medium Intermediate chemistry and English-medium High School maths are different jobs.</li>
    <li><strong>"Show me where this year's model paper is different from last year's."</strong> A tutor who has opened the current files can answer quickly.</li>
    <li><strong>"How will you use the fifteen minutes of reading time?"</strong> Listen for a plan to choose parts and order questions.</li>
    <li><strong>"What will you do about school marks and practicals?"</strong> The right answer is supervision and checking; never writing the work.</li>
    <li><strong>"Which route will you take, and what happens on a jammed evening?"</strong> A clear answer here predicts whether classes stay regular.</li>
  </ol>
  <p>
    We send two or three matched tutors and show each fee before you book; the first class is a free demo and switching
    tutor later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a>
    has more questions to try.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lub-fees">Tuition fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee. The <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our post on
    <a href="{{ url('/blog/home-tuition-fees-lucknow') }}">home tuition fees in Lucknow</a> explain what moves the
    figure.
  </p>
  <p>
    Send us the class, the Intermediate group if relevant, the medium, whether your child is a school or private
    candidate, your locality with its sector, khand or block, and the times that suit you. The first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. You can also browse <a href="{{ url('/tutors') }}">tutor
    profiles</a> first. If you teach UP Board subjects yourself, see <a href="{{ url('/tuition-jobs/lucknow') }}">tuition
    jobs in Lucknow</a>.
  </p>
  </section>

  </div>
</article>
