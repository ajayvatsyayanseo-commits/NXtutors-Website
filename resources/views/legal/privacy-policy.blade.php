@extends('legal.layout')
@php
  $E = $legal['entity_name'];
  $privacyWho = $legal['privacy_contact'] ?: ($legal['grievance_officer'] ?: 'our Grievance Officer');
@endphp

@section('summary')
<ul>
  <li>We collect what we need to find a tutor, run accounts and plans, keep the Platform safe and meet the law. We do not sell personal data.</li>
  <li>Your request details are shared with the tutors we match you with. A tutor sees the student's name and your note only after opening your request.</li>
  <li>Tutor ID documents are seen only by our review team. They are never shown on a profile.</li>
  <li>We ask a parent or guardian for verifiable consent before we keep a child's learning records, and we do not use a child's data for targeted advertising.</li>
  <li>You can ask to see, correct or erase your data, withdraw consent, nominate someone, or complain. Write to <a href="mailto:{{ $legal['privacy_email'] }}">{{ $legal['privacy_email'] }}</a>.</li>
</ul>
@endsection

@section('content')
<section>
  <h2 id="who-we-are">1. Who we are and what this policy covers</h2>
  <p>{{ $E }} ("NXTutors", "we", "us") runs www.nxtutors.com, the NXT AI assistant, our WhatsApp service and user dashboards (the "Platform"). For the personal data described here, we are the Data Fiduciary under the Digital Personal Data Protection Act, 2023 ("DPDP Act"). This policy also meets the requirements of the Information Technology Act, 2000 and the Information Technology (Reasonable Security Practices and Procedures and Sensitive Personal Data or Information) Rules, 2011.</p>
  <p>It covers parents, students, tutors and visitors. Office: {{ $legal['address'] }}. Contact for data questions: {{ $privacyWho }}, <a href="mailto:{{ $legal['privacy_email'] }}">{{ $legal['privacy_email'] }}</a>.</p>
</section>

<section>
  <h2 id="data-we-collect">2. Personal data we collect</h2>
  <h3>From parents and students</h3>
  <ul>
    <li><strong>Contact and account details</strong>: name, phone number, email address, password (stored only in hashed form) and the one-time codes used to confirm them.</li>
    <li><strong>Tutor request details</strong>: the student's class, board, subjects, the student's first name if you give it, city, locality or pincode, home or online mode, preferred timings, start date, budget and any note you write.</li>
    <li><strong>Location</strong>: the area, city or pincode you type or pick on the map, or your device location if you choose "Use current location".</li>
    <li><strong>Learning records</strong>: where a family uses the dashboard, attendance, topics covered, progress and class schedules, kept only with a parent's consent for a child.</li>
    <li><strong>Messages</strong>: what you send us on WhatsApp, through forms or in NXT AI chats, and replies between you and tutors on the Platform.</li>
    <li><strong>Reviews</strong> you write: your name, email address, role, ratings and comments.</li>
    <li><strong>Payments</strong>: the plan bought, amount, order and transaction references and payment status. Card, UPI and bank details are handled by our payment gateway, not by us.</li>
  </ul>
  <h3>From tutors</h3>
  <ul>
    <li>Name, phone number, email address, password (hashed), photo, gender if given, qualifications, experience, subjects, classes, boards, areas served, fees, availability and profile text.</li>
    <li><strong>ID check</strong>: the type and number of a government photo ID and images of its front and back. This is used only to confirm identity and to stop one ID being used for more than one account.</li>
    <li>Plan purchases, lead views, replies, quotes and the reviews other users write about you.</li>
  </ul>
  <h3>Collected automatically</h3>
  <ul>
    <li>IP address, device and browser type, pages viewed, the page you came from, campaign tags in the link, and the date and time of visits.</li>
    <li>Cookies and browser storage, described in the <a href="{{ url('/cookie-policy') }}">Cookie Policy</a>, including Google Analytics and Google Ads tags.</li>
    <li>Searches typed into the site search and which suggestion was picked, linked to a random browser identifier rather than to your name.</li>
    <li>When you tap a WhatsApp button, a short reference code that records the page, the tutor or comparison you were looking at and any chat with NXT AI, so that we do not have to ask you again.</li>
  </ul>
</section>

<section>
  <h2 id="purposes">3. Why we use it, and on what basis</h2>
  <table class="nxlegal-table">
    <thead><tr><th>Purpose</th><th>Basis under the DPDP Act</th></tr></thead>
    <tbody>
      <tr><td>Finding and suggesting tutors for your request, sharing it with matched tutors, arranging the free demo and switching tutor</td><td>Consent you give when you send the request; data you provide voluntarily for this purpose (section 7(a))</td></tr>
      <tr><td>Creating and securing accounts, confirming phone and email, logging in</td><td>Consent; voluntarily provided data</td></tr>
      <tr><td>Tutor ID check, Verified badge, preventing duplicate or fake profiles</td><td>Consent given when the tutor uploads the ID</td></tr>
      <tr><td>Selling and running plans, processing payments, invoices and refunds</td><td>Consent; voluntarily provided data; compliance with tax and accounting law (section 7(c) and (d))</td></tr>
      <tr><td>Answering questions in NXT AI and WhatsApp</td><td>Consent given when you start the chat</td></tr>
      <tr><td>Learning records for a child on the dashboard</td><td>Verifiable consent of a parent or guardian (section 9)</td></tr>
      <tr><td>Publishing tutor profiles and moderated reviews</td><td>Consent of the tutor or reviewer</td></tr>
      <tr><td>Keeping the Platform safe: preventing fraud, abuse and harm to children, enforcing our terms</td><td>Consent; compliance with law; legitimate uses permitted by section 7</td></tr>
      <tr><td>Measuring and improving the Platform; advertising to adults</td><td>Consent, which you can withdraw (see the <a href="{{ url('/cookie-policy') }}">Cookie Policy</a>)</td></tr>
      <tr><td>Service messages about your request, account or plan</td><td>Consent given with the request or account</td></tr>
      <tr><td>Promotional messages</td><td>Only with your separate consent; you can opt out at any time</td></tr>
      <tr><td>Meeting legal duties, answering lawful requests, handling disputes</td><td>Compliance with law and court orders (section 7)</td></tr>
    </tbody>
  </table>
  <p>We do not use your personal data for a purpose that is not compatible with these purposes without telling you and, where needed, asking for your consent.</p>
</section>

<section>
  <h2 id="sharing">4. Who we share it with</h2>
  <ul>
    <li><strong>Matched tutors.</strong> When we match a tutor to your request, the tutor sees the class, board, subject, mode, city, locality, preferred timings and budget. If the tutor opens the request, they also see the student's first name, your note and the start date. A tutor you choose to continue with will receive the contact details needed to arrange classes.</li>
    <li><strong>Parents.</strong> Tutor profiles show the tutor's name, photo, subjects, areas, experience, fee and reviews. A tutor's ID document, ID number, phone number and email address are not shown on the profile.</li>
    <li><strong>Everyone who visits the site.</strong> Tutor profiles and published reviews are public. Our area pages may show short summaries of recent requests, described in section 5.</li>
    <li><strong>Service providers</strong> who process data for us under contract and only on our instructions, including web hosting and content delivery, email delivery, WhatsApp messaging (Meta), our payment gateway ({{ $legal['payment_gateway'] }}), Google (Analytics, Ads and fonts), OpenAI (which generates NXT AI's replies) and OpenStreetMap's location search.</li>
    <li><strong>Authorities</strong>, when Indian law, a court or a government agency lawfully requires it, or when needed to protect the safety of a child or any person.</li>
    <li><strong>A buyer or successor</strong>, if our business is merged, sold or restructured, under the same protections as this policy.</li>
  </ul>
  <p>We do not sell personal data and we do not rent it to anyone.</p>
</section>

<section>
  <h2 id="anonymised-requests">5. Anonymised request summaries</h2>
  <p>To help families see what others nearby look for, our area pages may show short summaries of recent tutor requests: the month, the class, the board and the subject only (for example, "Oct 2026 · Class 10 · CBSE · Maths"). We never show a name, phone number, email address, school, housing society or exact date, and we show these summaries only where there are enough requests that no family can be identified. To ask us to leave your request out, write to <a href="mailto:{{ $legal['privacy_email'] }}">{{ $legal['privacy_email'] }}</a>.</p>
</section>

<section>
  <h2 id="children">6. Children</h2>
  <ul>
    <li>Accounts, requests and plans are meant for adults: parents, guardians, adult students and tutors.</li>
    <li>When a student under 18 is involved, we process their data for tuition and learning records only with the verifiable consent of a parent or legal guardian. For example, before we keep a child's attendance, topics and progress, we send the parent a confirmation link where they confirm that they are the parent or guardian and that they are 18 or older.</li>
    <li>A parent or guardian can withdraw that consent at any time from the account or by messaging us, and can exercise the child's rights on the child's behalf.</li>
    <li>We do not use a child's personal data for behavioural monitoring or targeted advertising, and we do not process it in a way likely to harm the child's well-being.</li>
    <li>If you think we hold a child's data without proper consent, write to us and we will act on it.</li>
  </ul>
</section>

<section>
  <h2 id="retention">7. How long we keep it</h2>
  <ul>
    <li><strong>Accounts and profiles</strong>: while the account is open. After you close your account, we erase or anonymise the data within 90 days, except as listed below.</li>
    <li><strong>Tutor ID documents</strong>: while the tutor account is open, and erased within 90 days after it closes, unless needed for a pending complaint, an investigation or a legal requirement.</li>
    <li><strong>Tutor requests and messages</strong>: for as long as needed to serve the request and handle any complaint about it, normally not more than 3 years after your last activity.</li>
    <li><strong>NXT AI chats by visitors who are not signed in</strong>: removed after 14 days.</li>
    <li><strong>WhatsApp reference codes</strong>: expire after 30 days.</li>
    <li><strong>Payment and invoice records</strong>: for the period required by tax and company law, which is currently up to 8 years.</li>
    <li><strong>Security and access logs</strong>: at least one year, as required by law.</li>
  </ul>
  <p>Where the law requires us to keep data longer, or where it is needed for a legal claim, we keep it only for that purpose.</p>
</section>

<section>
  <h2 id="security">8. How we protect it</h2>
  <p>We use reasonable security practices, including encrypted connections (HTTPS), hashed passwords, access limited to staff who need it, review of uploaded ID documents by our team only, pseudonymised phone numbers in our automated assistants, and limits on what is written to logs. No system is completely secure. If a personal data breach happens, we will inform affected users and the Data Protection Board of India as the law requires, and the Indian Computer Emergency Response Team where applicable.</p>
</section>

<section>
  <h2 id="cross-border">9. Processing outside India</h2>
  <p>Some service providers, such as Google, Meta (WhatsApp), OpenAI and our content-delivery provider, may process data outside India. We transfer personal data abroad only as permitted by section 16 of the DPDP Act, and never to a country that the Government of India has restricted.</p>
</section>

<section>
  <h2 id="your-rights">10. Your rights</h2>
  <p>Under the DPDP Act you have the right to:</p>
  <ul>
    <li>get a summary of the personal data we process about you and the processing activities, and the identities of those we have shared it with;</li>
    <li>have inaccurate or incomplete data corrected, completed or updated;</li>
    <li>have your data erased when it is no longer needed for the purpose for which it was collected, unless the law requires us to keep it;</li>
    <li>withdraw your consent at any time, as easily as you gave it. Withdrawal does not affect processing already done, and we may then be unable to provide the service that depended on it;</li>
    <li>nominate another person to exercise your rights if you die or become unable to do so;</li>
    <li>have your grievance addressed by us, and, after that, complain to the Data Protection Board of India.</li>
  </ul>
  <p>To use a right, write to <a href="mailto:{{ $legal['privacy_email'] }}">{{ $legal['privacy_email'] }}</a> from the email or phone number on your account. We may need to confirm your identity. We aim to respond within 30 days and, in any case, within the time allowed by law. You must not file a false or frivolous complaint or impersonate anyone when making a request.</p>
  <p>If you prefer, you can manage your consent through a Consent Manager registered with the Data Protection Board, once that service is available.</p>
</section>

<section>
  <h2 id="marketing">11. Messages and calls</h2>
  <p>We contact you about your request, demo, account or plan by phone, WhatsApp, SMS or email. We send promotional messages only with your consent. You can stop them at any time by replying STOP on WhatsApp, using the unsubscribe link in an email or writing to us.</p>
</section>

<section>
  <h2 id="language">12. Language</h2>
  <p>This policy is in English. If you would like it in Hindi or another language listed in the Eighth Schedule to the Constitution, write to us and we will provide it.</p>
</section>

<section>
  <h2 id="changes">13. Changes to this policy</h2>
  <p>We may update this policy. The date at the top shows when it last changed. If a change is significant, we will tell you on the Platform or by email before it applies and, where the law requires, ask for your consent again.</p>
</section>

<section>
  <h2 id="contact">14. Contact and grievances</h2>
  <p>Questions or complaints about personal data: {{ $privacyWho }}, {{ $E }}, {{ $legal['address'] }}, <a href="mailto:{{ $legal['privacy_email'] }}">{{ $legal['privacy_email'] }}</a>. See <a href="{{ url('/grievance-redressal') }}">Grievance Redressal</a> for how complaints are handled and the timelines.</p>
</section>
@endsection
