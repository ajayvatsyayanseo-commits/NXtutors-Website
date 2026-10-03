@extends('legal.layout')
@php $E = $legal['entity_name']; @endphp

@section('summary')
<ul>
  <li>NXTutors is a platform that introduces parents and students to <strong>independent tutors</strong>. Tutors are not our employees, and the tuition arrangement is between the family and the tutor.</li>
  <li>For a tutor request we aim to suggest two or three matched tutors. You see each tutor's fee before the demo, the first class is a free demo, and switching tutor later costs nothing on NXTutors.</li>
  <li>Tutors who join go through an ID check. It confirms identity only. It is <strong>not</strong> a police or background check, so please follow the <a href="{{ url('/safeguarding-policy') }}">safety habits</a>.</li>
  <li>Paid plans are explained on <a href="{{ url('/pricing') }}">/pricing</a> and refunded only as set out in the <a href="{{ url('/refund-policy') }}">Refund Policy</a>.</li>
  <li>Our liability is limited as far as Indian law allows. Your rights under the Consumer Protection Act, 2019 are not affected.</li>
  <li>Indian law applies, and the courts at Gurugram, Haryana have jurisdiction, subject to your right to approach a Consumer Commission.</li>
</ul>
@endsection

@section('content')
<section>
  <h2 id="about">1. About these terms</h2>
  <p>These Terms of Use ("Terms") are a binding agreement between you and {{ $E }} ("NXTutors", "we", "us", "our"), whose office is at {{ $legal['address'] }}@if($legal['cin']) (CIN {{ $legal['cin'] }}@if($legal['gstin']), GSTIN {{ $legal['gstin'] }}@endif)@endif. They govern your use of the website www.nxtutors.com, the NXT AI assistant, our WhatsApp service, user dashboards and any related service we offer (together, the "Platform").</p>
  <p>By opening an account, sending a tutor request, booking a demo, buying a plan or otherwise using the Platform, you accept these Terms. If you do not agree, please do not use the Platform.</p>
  <p>The following documents form part of these Terms: the <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>, <a href="{{ url('/refund-policy') }}">Refund and Cancellation Policy</a>, <a href="{{ url('/cookie-policy') }}">Cookie Policy</a>, <a href="{{ url('/community-guidelines') }}">Community Guidelines</a>, <a href="{{ url('/safeguarding-policy') }}">Child Safety and Safeguarding Policy</a>, <a href="{{ url('/disclaimer') }}">Disclaimer</a> and <a href="{{ url('/grievance-redressal') }}">Grievance Redressal</a> page. Tutors also accept the <a href="{{ url('/tutor-terms') }}">Tutor Terms</a>, which prevail over these Terms for anything specific to tutors.</p>
  <p>This document is an electronic record under the Information Technology Act, 2000 and the rules made under it, and is published as required by rule 3(1) of the Information Technology (Intermediary Guidelines and Digital Media Ethics Code) Rules, 2021. It does not need a physical or digital signature.</p>
</section>

<section>
  <h2 id="definitions">2. Words we use</h2>
  <ul>
    <li><strong>Parent</strong>: a parent or legal guardian who looks for a tutor for a student, or an adult student looking for a tutor for themselves.</li>
    <li><strong>Student</strong>: the learner who receives tuition. A student under 18 is a child.</li>
    <li><strong>Tutor</strong>: an independent individual who lists a profile on the Platform to offer tuition.</li>
    <li><strong>User</strong>: anyone who uses the Platform, including parents, students, tutors and visitors.</li>
    <li><strong>Request</strong>: the details a parent gives us to find a tutor (class, board, subject, area, mode, timings, budget and notes).</li>
    <li><strong>Demo class</strong>: the first class with a matched tutor, which is free for the parent.</li>
    <li><strong>Plan</strong>: a subscription for parents, students or tutors listed on <a href="{{ url('/pricing') }}">/pricing</a>, which may include AI credits, tutor contacts or lead views.</li>
    <li><strong>Content</strong>: anything a User adds to the Platform, such as profile details, photos, messages, reviews and documents.</li>
  </ul>
</section>

<section>
  <h2 id="our-role">3. What NXTutors is, and what it is not</h2>
  <p>NXTutors is an online platform and an intermediary within the meaning of section 2(1)(w) of the Information Technology Act, 2000. We help parents find tutors, show tutor profiles, pass requests to suitable tutors and provide tools such as NXT AI and the dashboards.</p>
  <ul>
    <li><strong>Tutors are independent.</strong> Tutors are not our employees, agents, partners or contractors for teaching. They decide their own fees, methods, materials and availability, and they are solely responsible for the classes they teach and for their conduct.</li>
    <li><strong>The tuition contract is between the parent and the tutor.</strong> Unless a page clearly says that a class or package is sold by NXTutors, we are not a party to the tuition arrangement, we do not teach the classes and we do not supervise them.</li>
    <li><strong>We do not guarantee availability.</strong> We aim to suggest two or three tutors for each request, but whether a suitable tutor is available depends on the subject, the area and the timing. We do not promise a response time.</li>
    <li><strong>We do not guarantee results.</strong> Marks, ranks, admissions and progress depend on the student, the tutor and many other factors. See the <a href="{{ url('/disclaimer') }}">Disclaimer</a>.</li>
  </ul>
</section>

<section>
  <h2 id="accounts">4. Who can use the Platform, and accounts</h2>
  <ul>
    <li>You must be 18 or older and able to make a binding contract under the Indian Contract Act, 1872 to open an account, send a request, buy a plan or register as a tutor.</li>
    <li>A student under 18 may use the Platform only through, or with the permission and supervision of, a parent or legal guardian. Where we keep a child's learning records, we first ask a parent or guardian for verifiable consent, as explained in the <a href="{{ url('/privacy-policy') }}#children">Privacy Policy</a>. The parent or guardian is responsible for the child's use of the Platform.</li>
    <li>You must give true, current and complete information and keep it up to date. One person may hold only one account of each type.</li>
    <li>You are responsible for keeping your password and one-time codes secret and for everything done through your account. Tell us at once if you think your account has been misused.</li>
    <li>We may ask you to confirm your phone number, email address or identity at any time, and may refuse or close an account that we cannot verify.</li>
  </ul>
</section>

<section>
  <h2 id="matching">5. Tutor requests, matching and the free demo</h2>
  <ul>
    <li>When you send a request, we look for suitable tutors and aim to suggest two or three of them. We may share the details of your request with the tutors we consider suitable, as explained in the <a href="{{ url('/privacy-policy') }}#sharing">Privacy Policy</a>.</li>
    <li>You see each suggested tutor's fee before the demo. The tutor sets that fee, and it may differ between tutors, classes and modes.</li>
    <li>The first class with a matched tutor is a free demo for the parent. After the demo, you decide whether to continue, and you agree the schedule and fee directly with the tutor.</li>
    <li>If a tutor is not right for you, you may ask us for another match at any time. NXTutors does not charge for switching tutor. Fees already agreed with or paid to a tutor for classes taken are a matter between you and the tutor.</li>
    <li>Tutors who join go through an ID check: they confirm their phone or email with a one-time code and upload a government photo ID that our team reviews before the profile is marked Verified. Real tutors who pass carry a Verified badge. The check confirms identity only. It is not a police verification, a criminal background check or an assessment of teaching. See <a href="{{ url('/how-we-verify-tutors') }}">How we verify tutors</a>.</li>
    <li><strong>How tutors are ordered.</strong> Suggested tutors are ordered mainly by how well they fit the request (subject, class, board, location and mode), then by reviews, experience and how complete the profile is. Real tutors always come before sample profiles. On some listing pages, a tutor's paid plan can increase how prominently the profile is shown, as described on <a href="{{ url('/pricing') }}">/pricing</a>.</li>
    <li>Some pages show sample profiles to illustrate what a tutor profile looks like. They are labelled "Sample profile", never carry the Verified badge and cannot be booked.</li>
  </ul>
</section>

<section>
  <h2 id="fees">6. Fees, plans and payments</h2>
  <ul>
    <li><strong>Tuition fees.</strong> Tutors set their own fees. Unless a page clearly says that you are buying a class package from NXTutors, tuition fees are paid by the parent to the tutor on the terms they agree, and NXTutors does not collect, hold or refund them. We recommend paying for classes monthly or after they are taken, and not paying large sums in advance.</li>
    <li><strong>Plans.</strong> Some features are available only on a paid plan for parents, students or tutors. The price, length, credits, limits and features of each plan are shown on <a href="{{ url('/pricing') }}">/pricing</a> and at checkout, and the description shown when you pay is the one that applies to your purchase.</li>
    <li><strong>Payment.</strong> Payments are processed by our payment gateway, {{ $legal['payment_gateway'] }}, under its own terms. We do not see or store your full card, UPI PIN or net-banking credentials.</li>
    <li><strong>Plan period and credits.</strong> A plan runs for the period shown (for most plans, 30 days) from activation. Unused credits, contacts and lead views end with the plan and do not carry over. Plans do not renew automatically at present; if we ever offer automatic renewal, we will ask for your express consent first and remind you before each renewal.</li>
    <li><strong>Changing plan.</strong> If you buy a new plan while one is active, the new plan replaces the current one from the date of payment, with its own period and limits.</li>
    <li><strong>Price changes.</strong> We may change plan prices and features for future purchases. A change never affects a plan you have already paid for.</li>
    <li><strong>Taxes.</strong> Prices include or add applicable taxes as shown at checkout.</li>
    <li><strong>Refunds.</strong> Refunds and cancellations are governed by the <a href="{{ url('/refund-policy') }}">Refund and Cancellation Policy</a>.</li>
  </ul>
</section>

<section>
  <h2 id="your-responsibilities">7. Your responsibilities</h2>
  <p>You agree to use the Platform lawfully and in line with the <a href="{{ url('/community-guidelines') }}">Community Guidelines</a>. In particular, you will not:</p>
  <ul>
    <li>give false information, impersonate anyone, or create an account for someone else without their authority;</li>
    <li>harass, threaten, abuse or discriminate against any User, or behave inappropriately towards a child;</li>
    <li>post or send anything unlawful or anything listed in rule 3(1)(b) of the Intermediary Guidelines, which are set out in the Community Guidelines;</li>
    <li>collect, copy, scrape or sell other Users' details or tutor listings, or use them for any purpose other than the tuition request they relate to;</li>
    <li>use the Platform to recruit tutors or families for another tuition agency or platform;</li>
    <li>interfere with the Platform's security, test it for vulnerabilities without our written permission, overload it, or use bots or automated tools to access it;</li>
    <li>misuse NXT AI, including trying to make it produce harmful content or using it to do graded work dishonestly.</li>
  </ul>
  <p>Parents remain responsible for the safety and supervision of their children during tuition. Please read the <a href="{{ url('/safeguarding-policy') }}">Child Safety and Safeguarding Policy</a>.</p>
</section>

<section>
  <h2 id="content-licence">8. Your content and the licence you give us</h2>
  <p>You keep ownership of the Content you add. You give NXTutors a non-exclusive, worldwide, royalty-free, transferable licence, with the right to sub-license to our service providers, to host, store, copy, adapt for format, display, publish and distribute your Content to operate, improve and promote the Platform. The licence lasts while your Content is on the Platform and for a reasonable period afterwards for backups, legal records and disputes. For reviews and public tutor profiles, it includes showing them, or short extracts with attribution, on our website and in our marketing.</p>
  <p>You confirm that you have the right to share your Content and that it is true and lawful. We may review, edit for format, refuse, hide or remove Content that breaks these Terms or the law, or that we reasonably consider unsafe, and we will act on lawful orders and valid complaints as required by law. We do not check every item of Content before it is shown and are not responsible for Content posted by Users.</p>
  <p>If you send us ideas or suggestions, we may use them freely without paying you.</p>
</section>

<section>
  <h2 id="our-ip">9. Our content and intellectual property</h2>
  <p>The NXTutors name and logo, the design, text, guides, software, databases and other material on the Platform (other than User Content) belong to NXTutors or its licensors and are protected by Indian and international law. We give you a limited, personal, non-exclusive, non-transferable and revocable licence to use the Platform for its intended purpose. You may not copy, republish, frame, sell or create derivative works from it, or extract data from it, without our written permission.</p>
</section>

<section>
  <h2 id="ai-and-messaging">10. NXT AI, WhatsApp and messages</h2>
  <ul>
    <li>NXT AI is an automated assistant. Its answers can be incomplete or wrong, and it is not a teacher, an exam board or a counsellor. Check important information with a tutor or the official source. See the <a href="{{ url('/disclaimer') }}#nxt-ai">Disclaimer</a>.</li>
    <li>Do not share sensitive personal information, such as health details, ID numbers or passwords, in NXT AI or chat messages.</li>
    <li>AI features may be limited by daily limits or plan credits, and we may change those limits.</li>
    <li>When you contact us on WhatsApp, WhatsApp's own terms and privacy policy also apply.</li>
    <li>By sending a request or creating an account, you ask us to contact you by phone, WhatsApp, SMS or email about that request or account. We send promotional messages only with your consent, and you can opt out at any time.</li>
  </ul>
</section>

<section>
  <h2 id="reviews">11. Reviews and ratings</h2>
  <p>Reviews must be honest and based on your own experience with the tutor. You must not post a review in exchange for money or a favour, review yourself, or post a review to harm a competitor. Reviews are checked by our team before they are published, and we may decline or remove a review that breaks these rules. Reviews are the opinion of the person who wrote them, not of NXTutors.</p>
</section>

<section>
  <h2 id="third-parties">12. Third-party services and links</h2>
  <p>The Platform uses and links to services we do not control, such as the payment gateway, WhatsApp, maps and exam-board websites. Their terms apply to your use of them, and we are not responsible for their content, availability or practices.</p>
</section>

<section>
  <h2 id="disclaimers">13. Disclaimers</h2>
  <p>To the extent the law allows, the Platform is provided "as is" and "as available". We do not promise that it will be uninterrupted, error-free or free of harmful code, or that any tutor, request or result will meet your expectations. We do not warrant the accuracy of Content provided by Users, including tutor qualifications, experience and fees, beyond the specific checks described on the Platform.</p>
</section>

<section>
  <h2 id="liability">14. Limitation of liability</h2>
  <p>To the extent permitted by law:</p>
  <ul>
    <li>NXTutors is not liable for the acts, omissions, statements, teaching or conduct of any tutor, parent, student or other User, for anything that happens during or because of a class, or for payments made directly between Users;</li>
    <li>NXTutors is not liable for any indirect, incidental, special or consequential loss, or for loss of profit, income, opportunity, goodwill or data, even if it was foreseeable;</li>
    <li>NXTutors' total liability to you for all claims connected with the Platform is limited to the greater of (a) the total amount you paid to NXTutors in the 12 months before the event that gave rise to the claim, and (b) ₹1,000.</li>
  </ul>
  <p>Nothing in these Terms limits or excludes liability for fraud, for wilful misconduct or gross negligence, or any liability or right that cannot be limited or excluded under Indian law, including your rights as a consumer under the Consumer Protection Act, 2019.</p>
</section>

<section>
  <h2 id="indemnity">15. Indemnity</h2>
  <p>You agree to indemnify NXTutors and its directors, employees and agents against any claim, loss, penalty or reasonable legal cost brought by a third party or an authority, to the extent it arises from your breach of these Terms or the law, your Content, or your dealings with another User.</p>
</section>

<section>
  <h2 id="suspension">16. Suspension and closing an account</h2>
  <ul>
    <li>We may warn you, restrict features, hide your Content or profile, suspend or close your account if we reasonably believe that you have broken these Terms or the law, that your use puts a child or another User at risk, that you have given false information, or that we are required to by law or a lawful order.</li>
    <li>Where it is safe and lawful to do so, we will tell you the reason and give you a chance to respond. We may act immediately, without prior notice, where there is a risk to safety, a suspected fraud or a legal requirement.</li>
    <li>You may close your account at any time from your dashboard or by writing to us.</li>
    <li>If we close an account because of a serious or repeated breach, any unused part of a paid plan is not refunded, except where the law requires a refund. If we close an account for any other reason, we refund the unused part of a paid plan on a pro-rata basis.</li>
    <li>You can challenge a decision through <a href="{{ url('/grievance-redressal') }}">Grievance Redressal</a>.</li>
    <li>Sections that by their nature should continue, including sections 8, 9 and 13 to 22, continue after your account closes.</li>
  </ul>
</section>

<section>
  <h2 id="privacy">17. Privacy</h2>
  <p>Our <a href="{{ url('/privacy-policy') }}">Privacy Policy</a> explains what personal data we collect, why, who we share it with and your rights under the Digital Personal Data Protection Act, 2023.</p>
</section>

<section>
  <h2 id="changes">18. Changes to the Platform and these Terms</h2>
  <p>We may change, add or withdraw features of the Platform. We may update these Terms from time to time. If a change materially affects your rights, we will tell you on the Platform or by email at least 7 days before it applies, unless a shorter time is needed for legal or safety reasons. The updated Terms apply from the date shown at the top. If you continue to use the Platform after that date, you accept the updated Terms; if you do not agree, you may close your account. A change never applies retrospectively to a plan already paid for.</p>
</section>

<section>
  <h2 id="force-majeure">19. Events beyond our control</h2>
  <p>We are not responsible for a delay or failure caused by events beyond our reasonable control, such as natural disasters, epidemics, government action, strikes, internet or power failures, or failures of third-party services.</p>
</section>

<section>
  <h2 id="law-and-disputes">20. Governing law and disputes</h2>
  <p>These Terms are governed by the laws of India. If you have a complaint, please first raise it through <a href="{{ url('/grievance-redressal') }}">Grievance Redressal</a> so that we can try to resolve it. Subject to the next sentence, the courts at {{ $legal['jurisdiction'] }} have exclusive jurisdiction over any dispute arising from these Terms or the Platform. Nothing in these Terms takes away your right as a consumer to file a complaint before a Consumer Commission under the Consumer Protection Act, 2019, including where you live or work.</p>
</section>

<section>
  <h2 id="general">21. General</h2>
  <ul>
    <li>These Terms and the documents they refer to are the whole agreement between you and NXTutors about the Platform.</li>
    <li>If any part of these Terms is found invalid or unenforceable, the rest stays in force, and the invalid part is read in the narrowest way that makes it lawful.</li>
    <li>If we do not enforce a right at once, we do not give it up.</li>
    <li>We may transfer our rights and duties under these Terms as part of a reorganisation, merger or sale of our business, and will tell you if this happens. You may not transfer yours.</li>
    <li>We may send notices to the email address or phone number on your account, or show them on the Platform. You may send notices to {{ $legal['email'] }}.</li>
    <li>These Terms are written in English. If we provide a translation, the English text prevails if they differ.</li>
  </ul>
</section>

<section>
  <h2 id="contact">22. Contact and grievances</h2>
  <p>{{ $E }}, {{ $legal['address'] }}. Email <a href="mailto:{{ $legal['email'] }}">{{ $legal['email'] }}</a>, phone {{ $legal['phone'] }}. Complaints go to our Grievance Officer as set out on the <a href="{{ url('/grievance-redressal') }}">Grievance Redressal</a> page.</p>
</section>
@endsection
