@extends('legal.layout')
@php $E = $legal['entity_name']; @endphp

@section('summary')
<ul>
  <li>Two essential cookies keep you signed in and protect forms. The site cannot work without them.</li>
  <li>Your browser also stores a few small settings, such as your chosen location and theme. They stay on your device.</li>
  <li>Google Analytics measures how the site is used, and Google Ads tells us which ads lead to requests.</li>
  <li>You can block or delete analytics and advertising cookies at any time without losing access to the site.</li>
</ul>
@endsection

@section('content')
<section>
  <h2 id="what">1. What cookies are</h2>
  <p>Cookies are small text files a website places in your browser. Browser storage (local storage and session storage) works in a similar way but is not sent to our server with every request. This policy explains what {{ $E }} ("NXTutors") uses on www.nxtutors.com and why. It forms part of our <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>.</p>
</section>

<section>
  <h2 id="essential">2. Essential cookies</h2>
  <table class="nxlegal-table">
    <thead><tr><th>Name</th><th>Purpose</th><th>Duration</th></tr></thead>
    <tbody>
      <tr><td>nxtutors-session</td><td>Keeps your session and sign-in working as you move between pages</td><td>2 hours after your last activity</td></tr>
      <tr><td>XSRF-TOKEN</td><td>Protects forms against cross-site request forgery</td><td>2 hours</td></tr>
    </tbody>
  </table>
  <p>Our content-delivery and security provider may also set a short-lived cookie to tell people from automated bots. These cookies are needed for the site to work and to keep it secure, so they cannot be switched off on the site.</p>
</section>

<section>
  <h2 id="storage">3. Settings stored in your browser</h2>
  <table class="nxlegal-table">
    <thead><tr><th>Name</th><th>Purpose</th><th>Kept until</th></tr></thead>
    <tbody>
      <tr><td>nx_city, nx_area, nx_pin, nx_lat, nx_lon</td><td>The location you chose, so tutors near you are shown</td><td>You clear it or change location</td></tr>
      <tr><td>nx_mode</td><td>Whether you are looking for home or online tuition</td><td>You clear it</td></tr>
      <tr><td>nxt_theme</td><td>Light or dark display</td><td>You clear it</td></tr>
      <tr><td>nx_compare_tutors</td><td>Tutors you added to Compare</td><td>You clear it</td></tr>
      <tr><td>nx_sid</td><td>A random identifier that groups your site searches, so we can improve search suggestions without knowing who you are</td><td>You clear it</td></tr>
      <tr><td>nx_sugg2, nx_ai_conv:…</td><td>Search suggestions and your current NXT AI conversation during this visit</td><td>You close the tab</td></tr>
    </tbody>
  </table>
</section>

<section>
  <h2 id="analytics">4. Analytics and advertising</h2>
  <ul>
    <li><strong>Google Analytics 4</strong> (cookies such as _ga and _ga_*, normally kept for up to 2 years) tells us how many people visit, which pages they use and where they came from. We use it to improve the site.</li>
    <li><strong>Google Ads</strong> (cookies such as _gcl_au, normally kept for about 90 days, and cookies on Google's own domains) tells us which ads led to a visit or a request, and may be used to show NXTutors ads to adults who visited the site.</li>
  </ul>
  <p>Google processes this data under its own privacy policy, and may process it outside India. Our advertising is aimed at parents and tutors, and we do not use a child's personal data for targeted advertising or behavioural monitoring.</p>
</section>

<section>
  <h2 id="choices">5. Your choices</h2>
  <ul>
    <li>You can block or delete cookies and browser storage in your browser settings. Blocking essential cookies will stop sign-in and forms from working.</li>
    <li>You can opt out of Google Analytics with Google's browser add-on, and control ad personalisation in your Google account's ad settings.</li>
    <li>You can withdraw any consent you gave for analytics or advertising cookies at any time, as easily as you gave it.</li>
  </ul>
</section>

<section>
  <h2 id="changes">6. Changes and contact</h2>
  <p>We update this policy when we add or remove a cookie. Questions: <a href="mailto:{{ $legal['privacy_email'] }}">{{ $legal['privacy_email'] }}</a>.</p>
</section>
@endsection
