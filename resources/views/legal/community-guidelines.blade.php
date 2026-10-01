@extends('legal.layout')
@php $E = $legal['entity_name']; @endphp

@section('summary')
<ul>
  <li>Be respectful, honest and safe, especially around children.</li>
  <li>Profiles, requests and reviews must be true and your own.</li>
  <li>Use other people's contact details only for the tuition they relate to.</li>
  <li>Do not post anything unlawful, including the content listed in section 4.</li>
  <li>Breaking these rules can lead to content removal, suspension or permanent removal.</li>
</ul>
@endsection

@section('content')
<section>
  <h2 id="purpose">1. Why these guidelines exist</h2>
  <p>NXTutors, run by {{ $E }}, brings families and tutors together, often for children's education at home. These guidelines describe the behaviour we expect from everyone, and the content that is not allowed. They form part of the <a href="{{ url('/terms-conditions') }}">Terms of Use</a> and are our rules and regulations under rule 3(1) of the Information Technology (Intermediary Guidelines and Digital Media Ethics Code) Rules, 2021. We remind users of them at least once a year.</p>
</section>

<section>
  <h2 id="respect">2. Respect and safety</h2>
  <ul>
    <li>Treat tutors, parents, students and our team with courtesy. No harassment, threats, abuse, stalking or discrimination based on religion, caste, gender, disability or any other characteristic.</li>
    <li>Follow the <a href="{{ url('/safeguarding-policy') }}">Child Safety and Safeguarding Policy</a>. Any behaviour that puts a child at risk leads to immediate removal and may be reported to the authorities.</li>
    <li>Do not send unwanted messages, repeated calls or messages late at night.</li>
  </ul>
</section>

<section>
  <h2 id="honesty">3. Honesty</h2>
  <ul>
    <li>Profiles, requests and documents must be true. Do not impersonate anyone, use another person's photo or ID, or create fake or duplicate accounts.</li>
    <li>Reviews must reflect your own real experience. No paid, swapped or fake reviews, and no reviews of yourself or a competitor.</li>
    <li>Tutors must not ask for payment for the free demo, and must charge the fee shown to the family.</li>
    <li>Do not pass off AI-generated or copied material as your own work where that is not allowed.</li>
  </ul>
</section>

<section>
  <h2 id="prohibited-content">4. Content that is not allowed</h2>
  <p>You must not host, display, upload, change, publish, send, store, update or share any information that:</p>
  <ol>
    <li>belongs to another person and to which you have no right;</li>
    <li>is obscene, pornographic or paedophilic, invades another person's privacy (including bodily privacy), insults or harasses on the basis of gender, is racially or ethnically objectionable, relates to or encourages money laundering or gambling, or promotes enmity between groups on the grounds of religion or caste with the intent to incite violence;</li>
    <li>is harmful to a child;</li>
    <li>infringes any patent, trademark, copyright or other proprietary right;</li>
    <li>deceives or misleads anyone about where a message came from, or knowingly and intentionally communicates misinformation or information that is patently false and untrue or misleading;</li>
    <li>impersonates another person;</li>
    <li>threatens the unity, integrity, defence, security or sovereignty of India, friendly relations with foreign states or public order, incites any cognisable offence, prevents the investigation of any offence or insults another nation;</li>
    <li>contains a software virus or any other code, file or program designed to interrupt, destroy or limit the functionality of any computer resource;</li>
    <li>is synthetically generated or altered (such as a deepfake) to show a real person saying or doing something they did not, or is not labelled as AI-generated where the law requires a label;</li>
    <li>violates any law for the time being in force.</li>
  </ol>
</section>

<section>
  <h2 id="data">5. Other people's data</h2>
  <ul>
    <li>Use contact details you receive through NXTutors only for the tuition request or class they relate to.</li>
    <li>Do not copy, scrape, collect, share or sell user details, tutor listings or leads, and do not add people to marketing lists.</li>
    <li>Do not record classes or share photos of a student without the parent's consent.</li>
  </ul>
</section>

<section>
  <h2 id="platform">6. Using the Platform fairly</h2>
  <ul>
    <li>Do not use bots, scrapers or automated tools, or try to get around limits, credits or security.</li>
    <li>Do not use NXTutors to recruit families or tutors for another agency or platform.</li>
    <li>Do not try to make NXT AI produce harmful, unlawful or misleading content.</li>
  </ul>
</section>

<section>
  <h2 id="reporting">7. Reporting a breach</h2>
  <p>To report a profile, review, message or behaviour, write to <a href="mailto:{{ $legal['grievance_email'] }}">{{ $legal['grievance_email'] }}</a> or follow the <a href="{{ url('/grievance-redressal') }}">Grievance Redressal</a> process. For a child at risk, see the <a href="{{ url('/safeguarding-policy') }}#report">safeguarding reporting steps</a>.</p>
</section>

<section>
  <h2 id="enforcement">8. What happens if the rules are broken</h2>
  <p>Depending on how serious and how repeated the breach is, we may remove content, give a warning, limit features, pause leads, remove the Verified badge, suspend the account or remove it permanently, and may block the person from registering again. Where the law requires, we keep relevant information and report it to the authorities. You can ask for a decision to be reviewed through <a href="{{ url('/grievance-redressal') }}">Grievance Redressal</a>.</p>
</section>
@endsection
