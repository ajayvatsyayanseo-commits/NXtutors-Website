@extends('legal.layout')
@php $E = $legal['entity_name']; @endphp

@section('summary')
<ul>
  <li>You teach as an <strong>independent professional</strong>, not as an employee or agent of NXTutors. You set your own fee and are responsible for your classes and your taxes.</li>
  <li>Your profile must be true. You pass an ID check before it is marked Verified, and the Verified badge confirms identity only.</li>
  <li>The first class with a family we match you with is a <strong>free demo</strong>, and you charge the fee shown on your profile.</li>
  <li>Paid plans buy visibility, AI tools and lead views. They do not guarantee leads, students or income, and are refunded only as the <a href="{{ url('/refund-policy') }}">Refund Policy</a> says.</li>
  <li>Child safety comes first. Breaking the <a href="{{ url('/safeguarding-policy') }}">Safeguarding Policy</a> can mean immediate removal.</li>
  <li>Use family details only for the tuition they relate to. Never pass them on or sell them.</li>
</ul>
@endsection

@section('content')
<section>
  <h2 id="agreement">1. This agreement</h2>
  <p>These Tutor Terms are an agreement between you, as a tutor, and {{ $E }} ("NXTutors", "we", "us"). They apply in addition to the <a href="{{ url('/terms-conditions') }}">Terms of Use</a>, the <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>, the <a href="{{ url('/community-guidelines') }}">Community Guidelines</a> and the <a href="{{ url('/safeguarding-policy') }}">Child Safety and Safeguarding Policy</a>. If they conflict on a point about tutors, these Tutor Terms prevail. You accept them when you register as a tutor, buy a tutor plan or accept a lead.</p>
</section>

<section>
  <h2 id="eligibility">2. Who can register as a tutor</h2>
  <ul>
    <li>You must be at least 18, able to make a binding contract, and legally allowed to work and teach in India.</li>
    <li>You confirm that you have not been convicted of, and are not facing a charge for, any offence involving children, any sexual offence or any offence of violence or dishonesty. You must tell us at once if this changes.</li>
    <li>You may hold only one tutor account.</li>
  </ul>
</section>

<section>
  <h2 id="independent">3. Your status: an independent professional</h2>
  <ul>
    <li>You are an independent professional. Nothing in these terms makes you an employee, worker, agent, partner or franchisee of NXTutors, and you are not entitled to a salary, provident fund, ESI, gratuity, leave or any other employee benefit from us.</li>
    <li>You decide your fees, subjects, methods, materials, hours and whether to accept a family. You are free to teach outside NXTutors.</li>
    <li>You have no authority to make promises or agreements on behalf of NXTutors, and must not present yourself as our employee or representative.</li>
    <li>You are responsible for your own income tax, GST if it applies to you, travel, equipment and any registration or permission you need.</li>
  </ul>
</section>

<section>
  <h2 id="profile">4. Your profile</h2>
  <ul>
    <li>Everything on your profile must be true, current and your own: your name, a recent photo of yourself, qualifications, experience, subjects, areas, availability and fee.</li>
    <li>Do not claim results, schools, ranks or qualifications you cannot prove. We may ask for proof at any time and may hide claims you cannot support.</li>
    <li>We may edit your profile for format, clarity and safety, and may decline content that breaks our rules. If you use the AI profile builder, you are responsible for checking and accepting the text before it is published.</li>
    <li>Keep your availability and fee up to date, and pause your profile when you cannot take new students.</li>
  </ul>
</section>

<section>
  <h2 id="id-check">5. The ID check and the Verified badge</h2>
  <ul>
    <li>You confirm your phone number or email address with a one-time code and upload a government photo ID: its type, its number and photos of its front and back. Your profile may be live before this review, but the Verified badge appears on it only after our team has reviewed the ID.</li>
    <li>Each ID document number can be linked to only one tutor account.</li>
    <li>If you pass, your card and profile carry a Verified badge. The badge confirms identity only. You must never describe it as a police verification, a background check or a quality rating.</li>
    <li>We may ask you to repeat the check, or to provide further documents, such as proof of address or a police clearance certificate where you teach young children at home. We may refuse, pause or remove a profile if the check cannot be completed.</li>
    <li>Your ID document is used only for the check and to prevent duplicate or fake accounts, as described in the <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>, and is never shown on your profile.</li>
  </ul>
</section>

<section>
  <h2 id="demo-and-fees">6. The free demo and your fee</h2>
  <ul>
    <li>The first class with a family that NXTutors matches with you is a free demo. You must not charge for it or ask for any payment, deposit or registration fee for it.</li>
    <li>The fee you charge a family must be the fee shown to them before the demo, or a quote you gave them through the Platform. Any change must be agreed with the family in advance and applies only to future classes.</li>
    <li>Tuition fees are paid to you directly by the family unless the family bought a class package through NXTutors. Agree in writing how fees are paid and what happens to missed classes, and give a receipt if asked.</li>
    <li>Do not ask for large advance payments. If a family stops classes, refund any fee paid for classes not yet taught, unless you agreed something different with the family in writing.</li>
    <li>If a family asks to switch tutor, accept it professionally. Switching is free for the family.</li>
  </ul>
</section>

<section>
  <h2 id="plans">7. Plans, leads and lead views</h2>
  <ul>
    <li>Some features for tutors, including lead views, AI tools and greater visibility, are available only on paid plans. Plans, prices and limits are shown on <a href="{{ url('/pricing') }}">/pricing</a>. A plan starts when payment succeeds, runs for the period shown and does not renew automatically at present.</li>
    <li>A lead is a family's request that we match with you. Opening a lead uses one lead view, however many times you open it, and shows the student's first name and the parent's note.</li>
    <li>We do not guarantee any number of leads, replies, demos, students or income. Leads depend on demand in your subjects and areas, your profile and your responsiveness. Leads may expire if you do not respond in time.</li>
    <li>Tutors are ordered mainly by how well they fit each request, then by reviews, experience and profile completeness. A higher plan can increase how prominently your profile is shown on some listing pages, but it does not change your fit with a request.</li>
    <li>Plan payments are not refundable once the plan is activated, except as set out in the <a href="{{ url('/refund-policy') }}">Refund Policy</a>, which also explains when a lead view is returned for a fake or duplicate lead.</li>
  </ul>
</section>

<section>
  <h2 id="conduct">8. Conduct with students and families</h2>
  <ul>
    <li>Follow the <a href="{{ url('/safeguarding-policy') }}">Child Safety and Safeguarding Policy</a> at all times. In particular, for a child, communicate with the parent and not privately with the child, teach where a parent or another adult is at home or the online class can be observed, and never use physical punishment or inappropriate language.</li>
    <li>Do not record a class or take photos of a student without the parent's consent.</li>
    <li>Arrive on time, give notice of cancellations as early as you can, and behave professionally.</li>
    <li>If you learn of or suspect abuse of a child, you must report it as the Protection of Children from Sexual Offences Act, 2012 requires, and tell us.</li>
  </ul>
</section>

<section>
  <h2 id="family-data">9. Families' personal data</h2>
  <p>When you receive a family's details through NXTutors, you may use them only to respond to that request and to teach that student. You must keep them secure, not share or sell them, not add the family to marketing lists, and delete them when you no longer teach the student or the family asks. You are responsible for your own compliance with the Digital Personal Data Protection Act, 2023 for data you hold.</p>
</section>

<section>
  <h2 id="non-circumvention">10. Fair dealing and non-circumvention</h2>
  <p>While you have a tutor account, and in relation to families introduced to you through NXTutors:</p>
  <ul>
    <li>you must not pass a lead, or a family's details, to another tutor, agency or platform, or charge anyone for it;</li>
    <li>you must not use NXTutors to recruit families or tutors for another agency or platform;</li>
    <li>where a family has paid for a class package through NXTutors, you must not ask or encourage them to cancel it and pay you directly for the same classes.</li>
  </ul>
  <p>If you break the third point, you agree to pay NXTutors an introduction fee equal to the fee for one month of classes with that family at your agreed rate, which the parties accept as a genuine pre-estimate of NXTutors' loss. This does not stop you from teaching any family, including one you met through NXTutors, in any other way; it applies only to diverting a package bought through us.</p>
</section>

<section>
  <h2 id="licence">11. Licence to your profile</h2>
  <p>You give NXTutors a non-exclusive, worldwide, royalty-free licence to use your name, photo, profile, subjects, areas, fee and reviews to show you on the Platform and to promote you and NXTutors, including in search engines, social media, WhatsApp and advertising, for as long as your profile is live and for a reasonable period afterwards to remove it from materials already published. We may make your profile inactive, but you may ask us to remove it at any time.</p>
</section>

<section>
  <h2 id="ai-tools">12. AI tools for tutors</h2>
  <p>Lesson plans, worksheets, reply drafts and other material generated by our AI tools are suggestions. Check them for accuracy and suitability before you use them, and do not use them to copy material protected by someone else's copyright.</p>
</section>

<section>
  <h2 id="reviews">13. Reviews</h2>
  <p>You may invite families you have taught to review you. You must not write reviews about yourself, offer anything in exchange for a review, or pressure a family to change or remove an honest review. You can reply to a review politely through us. We may remove reviews that break the rules.</p>
</section>

<section>
  <h2 id="suspension">14. Suspension and removal</h2>
  <ul>
    <li>We may warn you, hide your profile, pause leads, remove the Verified badge, suspend or close your account if you break these terms or the law, if a complaint about you is credible, if your ID check cannot be completed, or if we must by law.</li>
    <li>Usually we act step by step: a warning, then a temporary suspension, then removal. For a risk to a child, dishonesty, a fee taken for a free demo, misuse of family data or a serious complaint, we may remove you at once without notice.</li>
    <li>If we close your account for a breach, any unused part of a plan is not refunded, except where the law requires it. You can ask us to review a decision through <a href="{{ url('/grievance-redressal') }}">Grievance Redressal</a>.</li>
  </ul>
</section>

<section>
  <h2 id="liability">15. Responsibility, liability and indemnity</h2>
  <ul>
    <li>You are solely responsible for your teaching, your conduct, the accuracy of your profile, your agreements with families and your taxes.</li>
    <li>You agree to indemnify NXTutors and its directors and employees against any claim, loss, penalty or reasonable legal cost that arises from your teaching, conduct, profile, breach of these terms, misuse of personal data or failure to pay taxes.</li>
    <li>To the extent the law allows, NXTutors is not liable to you for any loss of income, students or opportunity, or for any indirect loss, and its total liability to you is limited to the plan fees you paid to NXTutors in the 12 months before the claim. This does not limit liability that cannot be limited by law.</li>
  </ul>
</section>

<section>
  <h2 id="disputes">16. Disputes</h2>
  <p>These terms are governed by Indian law. Any dispute between you and NXTutors arising from them that is not settled through Grievance Redressal within 30 days will be referred to arbitration under the Arbitration and Conciliation Act, 1996 by a sole arbitrator appointed by mutual agreement, or failing that, as the Act provides. The seat and venue of arbitration is {{ $legal['jurisdiction'] }}, and the language is English. Subject to this, the courts at {{ $legal['jurisdiction'] }} have exclusive jurisdiction, including for urgent interim relief. This does not take away any right you have that cannot be waived under Indian law.</p>
</section>

<section>
  <h2 id="changes">17. Changes and contact</h2>
  <p>We may update these terms. If a change materially affects you, we will tell you at least 7 days before it applies, unless a shorter time is needed for legal or safety reasons, and the change will not apply to a plan already paid for. Questions: <a href="mailto:{{ $legal['email'] }}">{{ $legal['email'] }}</a>.</p>
</section>
@endsection
