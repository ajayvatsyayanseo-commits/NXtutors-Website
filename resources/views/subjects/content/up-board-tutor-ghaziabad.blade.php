{{--
  Board hub: "UP Board tutor Ghaziabad" (UPMSP High School and Intermediate).
  Author: nxtutors (NXTutors Academic Team). No school, college, coaching,
  hospital, society or people names. No exam dates, results, candidate or
  school counts. No state entrance-exam page exists for Ghaziabad, so Class 12
  science links go to the JEE and NEET pages. Written to stay distinct from
  up-board-tutor-noida and up-board-tutor-lucknow (different documents and
  angles: regional office, English and social science papers, Class 11
  schemes, Class 12 biology, textbook and fraud notices, APAAR).

  Official sources (all upmsp.edu.in, read 2 Oct 2026; Hindi PDFs in Krutidev
  font read and translated by the writer):
  - /ContactUs.aspx: head office 9 Sarojini Naidu Marg, Prayagraj; five
    regional offices; Regional Office Meerut handles examination, results,
    duplicate certificates and mark sheets, migration, verification and
    scrutiny queries for Agra, Firozabad, Mainpuri, Etah, Mathura, Aligarh,
    Hathras, Kasganj, Bulandshahr, Ghaziabad, Gautam Buddh Nagar, Meerut,
    Bagpat, Hapur, Muzaffarnagar, Saharanpur and Shamli districts (from 1984;
    earlier years via the head office); a District Inspector of Schools (DIOS)
    is listed for Ghaziabad district.
  - /AboutUs.aspx: board set up in 1921 at Prayagraj; first examination 1923.
  - Home page: advance registration for Classes 9 and 11 (prereg), exam
    registration for Classes 10 and 12 (institutional and private);
    attendance portal for Classes 9-12; student links for syllabus, monthly
    syllabus, model papers, question bank, formative assessment, books;
    NCERT textbook and rationalised-content links; scrutiny result lists for
    Meerut, Bareilly, Prayagraj, Varanasi and Gorakhpur regions.
  - Downloads/Notification_textbooks.pdf (letter of 03-07-2026, session
    2026-27): only board-authorised textbooks, printed by authorised
    publishers at fixed prices, to be taught in institutions under the board;
    some schools found using unauthorised books and making students buy them;
    online attendance of staff and students made compulsory; Class 9 and 10
    book sets available online without extra delivery charge.
  - Downloads/Cyber_Fraud_related_04-04-26.pdf (public notice, 3 Apr 2026):
    cyber criminals may phone examinees offering marks details or higher marks
    for money, claim database access and misuse board staff names; the board
    never contacts candidates individually; do not share personal details,
    roll number or bank details; record such calls and inform the district's
    DIOS with the number, or complain on cyber helpline 1930.
  - Downloads/Notification_for_APAAR_ID.pdf (27 Aug 2026): APAAR ID is a
    12-digit permanent digital ID; certificates such as mark sheets and
    transfer certificates kept on DigiLocker; giving it at registration is not
    compulsory but the board asks parents to get it made and entered; made
    with parents' consent.
  - Syllabus/Class10/917-English-Class-10.pdf (2026-27): 70-mark paper + 30
    internal; reading 10, writing 10, grammar 15 (incl. translation of a short
    Hindi passage into English, four sentences, 4 marks), literature 35 (First
    Flight 23: prose 15, poetry 8; Footprints Without Feet 12).
  - Syllabus/Class10/932-Social-Science-Class-10.pdf: 70 written + 30 project
    work; history 20, geography 20, political science 15, economics 15.
  - Syllabus/Class10/928-Maths-Class-10.pdf and 931-Science-Class-10.pdf: 70
    written + 30 (internal with project work / practical), pass 23 + 10 = 33.
  - Syllabus/Class11/151-Physics-Class-11.pdf: 70-mark three-hour paper + 30
    practical; Part A 35 (physical world and measurement 1, kinematics 6, laws
    of motion 7, work energy power 7, rigid bodies and systems of particles 7,
    gravitation 7); Part B 35 (bulk matter 10, thermodynamics 9, ideal gases
    and kinetic theory 6, oscillations and waves 10).
  - Syllabus/Class11/131-Maths-Class-11.pdf: paper only, 100 marks, 3 h; sets
    and functions 28, algebra 35, coordinate geometry 15, calculus 10,
    statistics and probability 12.
  - Syllabus/Class12/117-English-Class-12.pdf: one 100-mark paper; reading 15,
    writing 20 (article about 150 words; letter to the editor, complaint or
    business letter), grammar 25 (incl. Hindi-to-English translation, 7-8
    sentences, 5 marks), literature 40 (Flamingo and Vistas); figures of speech
    asked in the poetry section.
  - Syllabus/Class12/153-Biology-Class-12.pdf: 70 written + 30 practical;
    reproduction 14, genetics and evolution 18, biology in human welfare 14,
    biotechnology 10, ecology 14.
  Local detail only from database/seo-content/areas/ghaziabad-research.json,
  ghaziabad-zone-guides.json, zones/ghaziabad.json and the Ghaziabad hub
  ("as the city is in Uttar Pradesh, UP Board schools matter too"; UP Board
  lessons may be in Hindi or English; tell us the medium). Nothing here says
  which parts of the city follow which board. Fee wording is the approved
  sentence. FAQs render from faqs/up-board-tutor-ghaziabad.php. Area links
  render only for active Ghaziabad areas.
--}}
@php
  $ugzSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ugzA = function (string $slug, string $label) use ($ugzSlugs) {
      return in_array($slug, $ugzSlugs, true)
          ? '<a href="' . e(url('/city/ghaziabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="ugzGuideTitle">
  <h2 id="ugzGuideTitle">UP Board tutors in Ghaziabad: the Meerut region, the papers, and a tutor who teaches to them</h2>

  <p class="nx-guide__lede">
    Ghaziabad is a district of Uttar Pradesh, so beside its CBSE, ICSE and international schools it has schools that
    answer to the state's Madhyamik Shiksha Parishad, the board most families simply call UP Board. Its two public
    examinations are High School, taken at the end of Class 10, and Intermediate, at the end of Class 12. This page is
    for parents who want a home tutor for either. It explains which office of the board deals with Ghaziabad, how the
    English, social science, maths, science and Class 11 and 12 papers are weighted in the board's own files for
    2026-27, what the board has told families about textbooks, ID numbers and fraud calls, and how tutors reach each
    part of the city. Every fact about the board comes from upmsp.edu.in. Schemes change, so check the board's site
    again in your child's exam year.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ugz-office">Board and regional office</a> ·
    <a href="#ugz-years">Registration years</a> ·
    <a href="#ugz-hs">High School subjects</a> ·
    <a href="#ugz-eng">English and translation</a> ·
    <a href="#ugz-inter">Classes 11 and 12</a> ·
    <a href="#ugz-books">Textbooks</a> ·
    <a href="#ugz-fraud">Calls promising marks</a> ·
    <a href="#ugz-medium">Medium</a> ·
    <a href="#ugz-zones">Zones and travel</a> ·
    <a href="#ugz-demo">The demo</a> ·
    <a href="#ugz-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ugz-office">Which part of the board looks after a Ghaziabad student?</h2>
  <p>
    The board itself dates from 1921 and held its first examination in 1923. Its head office is in Prayagraj, but day
    to day it works through five regional offices: Meerut, Bareilly, Prayagraj, Varanasi and Gorakhpur. The board's
    contact page puts Ghaziabad district under the <strong>Meerut regional office</strong>, together with Gautam Buddh
    Nagar, Hapur, Meerut, Bulandshahr and a dozen other districts. That office is the one to approach about
    examinations, results, duplicate mark sheets, migration, verification and scrutiny. When the board publishes
    scrutiny (re-check) results, it does so region by region, so a Ghaziabad family looks for its child under the
    Meerut list. The same page also lists a District Inspector of Schools for Ghaziabad, the district officer who comes
    up again below.
  </p>
  <p>
    None of this is a tutor's job, and no tutor should offer to "handle" anything with the board. But knowing where a
    question goes saves a lot of anxious phone calls in March and in the weeks after results.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ugz-years">Classes 9 and 11 register you; Classes 10 and 12 examine you</h2>
  <p>
    The board runs its paperwork in a two-year rhythm. A student is registered in advance through the school in Class
    9, then applies for the High School examination in Class 10; the same pattern repeats with registration in Class 11
    and the Intermediate application in Class 12. Private candidates have a separate route for Classes 10 and 12. The
    home page also carries an attendance portal for Classes 9 to 12, and a board letter for 2026-27 says online
    attendance of teachers and students is now compulsory in its schools.
  </p>
  <p>
    One newer item worth acting on is the APAAR ID. In a notice of August 2026 the board describes it as a permanent
    12-digit digital identity that keeps a student's credits and report cards in one place from school to higher
    education, with mark sheets and transfer certificates stored on DigiLocker. Entering it at registration is not
    compulsory, but the board asks every parent to have one made, with their consent, and add it to the registration
    and examination forms. Check the spelling of your child's name and the date of birth at the same time; the
    registration year is when errors are easiest to put right.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ugz-hs">High School: where the 100 marks in each subject come from</h2>
  <p>
    In the board's 2026-27 syllabus files, each of the four Class 10 subjects below has a written paper of 70 marks
    plus 30 marks earned in school, but what fills those 30 marks differs by subject. For maths and science the board also sets a minimum in
    each part: 23 in the paper and 10 in the school component, 33 in all.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 10 (High School) schemes in the board's 2026-27 syllabus files</caption>
    <thead>
      <tr><th scope="col">Subject (code)</th><th scope="col">Written paper</th><th scope="col">The other 30 marks</th><th scope="col">How the written marks are spread</th></tr>
    </thead>
    <tbody>
      <tr><td>English (917)</td><td>70</td><td>Internal assessment</td><td>Reading 10, writing 10, grammar 15, literature 35 (the main textbook 23, the supplementary reader 12)</td></tr>
      <tr><td>Social Science (932)</td><td>70</td><td>Project work</td><td>History 20, geography 20, political science 15, economics 15</td></tr>
      <tr><td>Mathematics (928)</td><td>70</td><td>Internal assessment with project work</td><td>Algebra 18, trigonometry 12, geometry, mensuration and statistics with probability 10 each, number systems and coordinate geometry 5 each</td></tr>
      <tr><td>Science (931)</td><td>70</td><td>Practical examination</td><td>Chemical substances 20, the living world 20, effects of current 13, natural phenomena 12, natural resources 5</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Two things follow for tuition. Social science is not a reading subject to be left for March: its four parts carry
    almost equal weight, so a student who is strong in history but vague on the economics chapters is giving away 15
    marks. And the school-based 30 marks are earned through the year, which means a tutor's most useful job in the
    first term is often making sure projects and practical records are done properly by the student. For subject
    tutors, see our <a href="{{ url('/maths-home-tutor-ghaziabad') }}">maths</a> and
    <a href="{{ url('/science-home-tutor-ghaziabad') }}">science</a> home tutor pages for Ghaziabad, and the national
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ugz-eng">English: grammar, letters and a translation from Hindi</h2>
  <p>
    The English paper surprises families who assume it is mostly the textbook. In Class 10, literature is half the
    paper, but reading, writing and grammar together make up the other 35 marks, and the grammar section ends with a
    short passage to translate from Hindi into English. In Class 12 the subject is a single 100-mark paper, and the
    balance shifts further towards skills.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>UP Board English, Class 10 and Class 12, from the 2026-27 syllabus files</caption>
    <thead>
      <tr><th scope="col">Section</th><th scope="col">Class 10 (70-mark paper)</th><th scope="col">Class 12 (100-mark paper)</th></tr>
    </thead>
    <tbody>
      <tr><td>Reading</td><td>10: two unseen passages</td><td>15: one long unseen passage with short and vocabulary questions</td></tr>
      <tr><td>Writing</td><td>10: a letter or application, and a paragraph, report or article of about 80 to 100 words</td><td>20: an article of about 150 words, and a letter to the editor, complaint or business letter</td></tr>
      <tr><td>Grammar</td><td>15, including a four-sentence translation from Hindi worth 4</td><td>25, including a seven- or eight-sentence translation from Hindi worth 5</td></tr>
      <tr><td>Literature</td><td>35, from First Flight and Footprints Without Feet</td><td>40, from Flamingo and Vistas; figures of speech such as simile, oxymoron and apostrophe are asked in the poetry section</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The translation item matters even in English-medium homes, because a student who thinks in English may still
    stumble over turning Hindi tenses and word order into clean English sentences. It is also cheap marks once
    practised: ten minutes a session on two or three sentences, checked for tense and articles, is enough. Our
    <a href="{{ url('/english-home-tutor-ghaziabad') }}">English home tutors in Ghaziabad</a> page covers the subject
    across boards.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ugz-inter">Intermediate: Class 11 schemes, and biology in Class 12</h2>
  <p>
    The board groups Intermediate students into agriculture, arts, commerce and science, and publishes a career
    guidance file for each group. Class 11 is a school year, but the board still sets its syllabus and weights, and
    those weights are a sensible guide to where tuition time should go.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Three science schemes from the board's 2026-27 files</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Assessment</th><th scope="col">Unit weights</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 11 Physics (151)</td><td>A three-hour paper of 70 marks, plus a 30-mark practical examination</td><td>Mechanics half: measurement 1, kinematics 6, laws of motion 7, work, energy and power 7, rigid bodies and systems of particles 7, gravitation 7. Second half: bulk matter 10, thermodynamics 9, ideal gases and kinetic theory 6, oscillations and waves 10</td></tr>
      <tr><td>Class 11 Mathematics (131)</td><td>Paper only: 100 marks in three hours</td><td>Algebra 35, sets and functions 28, statistics and probability 12, coordinate geometry 15, calculus 10</td></tr>
      <tr><td>Class 12 Biology (153)</td><td>70-mark paper plus 30 for practical work</td><td>Genetics and evolution 18, reproduction 14, biology in human welfare 14, ecology 14, biotechnology 10</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Read the maths line closely: sets, functions and algebra together are 63 of the 100 marks in Class 11, and they
    are also the ground Class 12 calculus is built on. A student who drifts through them pays twice. In Class 12
    biology, genetics and evolution is the heaviest unit and the one where a tutor's diagrams and worked crosses help
    most. Science students heading for entrance tests usually prepare in parallel; see
    <a href="{{ url('/jee-home-tutor-ghaziabad') }}">JEE</a> and
    <a href="{{ url('/neet-home-tutor-ghaziabad') }}">NEET</a> home tutors in Ghaziabad, and our
    <a href="{{ url('/physics-home-tutor-ghaziabad') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-ghaziabad') }}">chemistry</a> and
    <a href="{{ url('/biology-home-tutor-ghaziabad') }}">biology</a> pages. Commerce students should read our
    <a href="{{ url('/commerce-home-tutor-ghaziabad') }}">commerce home tutors in Ghaziabad</a> page, and the
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">board and stream guide</a> helps before Class 11.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ugz-books">Textbooks: the board's authorised list, not the bookshop's</h2>
  <p>
    In a letter of July 2026 to district officers, the board says it has learnt that some schools are teaching from
    unauthorised textbooks and making students buy them, which puts an unnecessary cost on families. Its instruction
    for 2026-27 is plain: institutions under the board should teach only from textbooks printed by its authorised
    publishers at the fixed prices, and Class 9 and 10 book sets can also be ordered online without an extra delivery
    charge. The board's site also links to NCERT's textbooks and to NCERT's notes on rationalised content.
  </p>
  <p>
    For tuition, the lesson is simple. Ask the school which books it uses, buy the authorised editions, and expect the
    tutor to teach from them, using the board's model papers and question bank for practice. Guidebooks can fill gaps,
    but they should never replace the book the paper is set from.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ugz-fraud">A call offering to raise marks is a fraud</h2>
  <p>
    The board issued a public notice in April 2026 warning that cyber criminals may phone students and parents, offer
    to share marks or raise them for money, claim access to the board's database and even use the names of board staff.
    The board says it never contacts candidates individually. Its advice: ignore such calls, messages and emails; share
    no personal details, roll number or bank details with a stranger; record the call and report it, with the caller's
    number, to your district's District Inspector of Schools, or file a complaint on the cyber helpline, 1930. For a
    Ghaziabad family that means the Ghaziabad DIOS listed on the board's contact page. Please pass this on to
    grandparents too, who often pick up the landline.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ugz-medium">Hindi medium or English medium: tell us first</h2>
  <p>
    As our Ghaziabad hub notes, UP Board lessons may be in Hindi or English, and the right tutor depends on which.
    A student who writes science answers in Hindi needs practice in the terms the paper uses, and an English-medium
    student still meets Hindi in the translation item and in the Hindi paper itself. When you send a request, give us
    the medium of the answer sheet as well as the class and subjects. If your child is changing to or from another
    board, our <a href="{{ url('/cbse-home-tutor-ghaziabad') }}">CBSE</a>,
    <a href="{{ url('/icse-home-tutor-ghaziabad') }}">ICSE and ISC</a>,
    <a href="{{ url('/ib-tutor-ghaziabad') }}">IB</a> and <a href="{{ url('/igcse-tutor-ghaziabad') }}">IGCSE</a>
    pages for the city explain those papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ugz-zones">How tutors reach each part of Ghaziabad</h2>
  <p>
    A UP Board tutor usually comes two or three times a week, so the journey has to work every time. These notes come
    from our zone research:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/indirapuram') }}">Indirapuram</a>:</strong> {!! $ugzA('indirapuram-shakti-khand-4', 'Shakti Khand 4') !!}, on the Vasundhara side of the township, has houses and builder floors as well as some society flats; a tutor from Delhi usually comes to Vaishali on the Blue Line and takes an e-rickshaw, while one from the old city can use Mohan Nagar on the Red Line.</li>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/vaishali-kaushambi') }}">Vaishali and Kaushambi</a>:</strong> {!! $ugzA('vaishali-sector-2', 'Vaishali Sector 2') !!} has both Vaishali and Kaushambi stations close by, with Anand Vihar a short hop further, so tutors who travel by metro are easy to find.</li>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/vasundhara') }}">Vasundhara</a>:</strong> in {!! $ugzA('vasundhara-sector-2', 'Sector 2') !!}, mostly builder floors with some group housing, Mohan Nagar or Vaishali plus an e-rickshaw is the usual route; {!! $ugzA('vasundhara-sector-6', 'Sector 6') !!} is nearest Mohan Nagar, where evening traffic is the thing to plan around.</li>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/sahibabad-rajendra-nagar') }}">Sahibabad and Rajendra Nagar</a>:</strong> in {!! $ugzA('lajpat-nagar-sahibabad', 'Lajpat Nagar') !!}, not the Delhi market of that name, Shyam Park station is right beside the colony and the inner lanes are narrow, so a tutor on the metro beats one in a car; across wider {!! $ugzA('sahibabad', 'Sahibabad') !!}, shift changes crowd the main roads, so late-afternoon or weekend classes hold more reliably.</li>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/raj-nagar-kavi-nagar-old-ghaziabad') }}">Raj Nagar, Kavi Nagar and Old Ghaziabad</a>:</strong> almost every home is plotted, so the tutor comes to the door; Shaheed Sthal, the Ghaziabad Namo Bharat station and Guldhar serve the edges of the zone.</li>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/raj-nagar-extension-nh-9-corridor') }}">Raj Nagar Extension and NH-9</a></strong> and <strong><a href="{{ url('/city/ghaziabad/zone/surya-nagar-ramprastha') }}">Surya Nagar and Ramprastha</a>:</strong> the first is mostly gated towers reached by road, the second a plotted pocket with no station of its own; in both, a tutor who lives close by keeps a weekday slot most reliably.</li>
  </ul>
  <p>
    Our area guides go into more detail: <a href="{{ url('/blog/indirapuram-tuition-guide') }}">Indirapuram</a>,
    <a href="{{ url('/blog/vaishali-vasundhara-sahibabad-tuition-guide') }}">Vaishali, Vasundhara and Sahibabad</a> and
    <a href="{{ url('/blog/raj-nagar-and-old-ghaziabad-tuition-guide') }}">Raj Nagar and old Ghaziabad</a>. Every locality
    is listed on the <a href="{{ url('/city/ghaziabad') }}">Ghaziabad home tutors page</a>. When a subject specialist
    cannot reach you, online lessons fill the gap; our comparison of
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring</a> helps you decide.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ugz-demo">Questions that sort a UP Board tutor from a general one</h2>
  <ol>
    <li><strong>Which classes and subjects of this board have you taught recently?</strong> Class 10 social science and Class 12 biology are different jobs.</li>
    <li><strong>Show me the unit weights for my child's subject.</strong> A tutor who has read the 2026-27 syllabus file can do this in a minute.</li>
    <li><strong>Which books will you teach from?</strong> The answer should be the authorised textbooks the school uses, with the board's model papers.</li>
    <li><strong>How will you handle the English translation and letter questions?</strong> Listen for short, regular practice, not a cram.</li>
    <li><strong>Which language will written work be in?</strong> It must match the answer sheet.</li>
    <li><strong>What route will you take to us, and what happens on a jammed evening?</strong> A clear answer here protects the whole year.</li>
  </ol>
  <p>
    We send two or three matched tutors and show each fee before the demo; the first class is free and switching tutor
    later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their
    profile goes live. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has
    more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ugz-fees">Fees and how to start</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee, and you see it before you book. The <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and our post on <a href="{{ url('/blog/home-tuition-fees-ghaziabad') }}">home tuition fees in
    Ghaziabad</a> explain what moves the figure.
  </p>
  <p>
    Send us the class, the subjects (and the group, for Classes 11 and 12), the medium of the answer sheet, your colony,
    khand or sector, and the times that suit you. The first class is a <a href="{{ url('/demo-class') }}">free demo</a>.
    You can also browse <a href="{{ url('/tutors') }}">tutor profiles</a> first, and if you teach UP Board subjects
    yourself, see <a href="{{ url('/tuition-jobs/ghaziabad') }}">tuition jobs in Ghaziabad</a>.
  </p>
  </section>

  </div>
</article>
