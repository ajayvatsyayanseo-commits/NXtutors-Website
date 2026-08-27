@php
  // Fall back to the footer's published details when the settings row is missing,
  // so the page never renders an empty address block.
  $nxPhone   = $setting->phone   ?? '+91 78360 34313';
  $nxEmail   = $setting->email   ?? 'support@nxtutors.com';
  $nxAddress = $setting->address ?? 'BLK-2/49, NXTUTORS EDTECH PVT LTD, M3M Cosmopolitan, off Golf Course Extension Road, Sector 66, Gurugram, Haryana 122101';
  $nxPhoneDigits = preg_replace('/[^0-9]/', '', $nxPhone);
  $nxPhoneTel    = preg_replace('/[^0-9+]/', '', $nxPhone);
  $nxWa = 'https://wa.me/'.$nxPhoneDigits.'?text='.rawurlencode('Hi NXTutors, I would like to know more about home tuition.');
@endphp
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $metatitle ?: 'Contact NXTutors | Home & Online Tuition in Gurugram' }}</title>
    <meta name="title" content="{{ $metatitle ?: 'Contact NXTutors | Home & Online Tuition in Gurugram' }}">
    <meta name="keywords" content="{{ $metakey }}">
    <meta name="description" content="{{ $metadesc ?: 'Talk to NXTutors about home and online tutoring for CBSE, ICSE, IB and IGCSE. Call, WhatsApp or email us, or book a free demo class. Office in Sector 66, Gurugram.' }}">
    @include('include.header')
</head>
<body class="page">

<style>
/* ------------------------------------------------------------------
   Contact page. Scoped to .nxct so it cannot leak into other views.
   Built on the design-system tokens (--nxt-*) rather than the old
   light-theme card styles, which were written for a white page and
   rendered as dark-on-dark here.
   ------------------------------------------------------------------ */
body.page .nxct{ padding-block: var(--nxt-s6) var(--nxt-s7, 40px); }

body.page .nxct-lede{
  max-width: 62ch;
  margin: 0 0 var(--nxt-s6);
  color: var(--nxt-text-dim);
  font-size: var(--nxt-t-body);
  line-height: 1.65;
}

/* ---- Contact method cards ---- */
body.page .nxct-methods{
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: var(--nxt-s4);
  margin-bottom: var(--nxt-s6);
  padding: 0;
  list-style: none;
}

body.page .nxct-method{
  display: flex;
  gap: var(--nxt-s3);
  align-items: flex-start;
  padding: var(--nxt-s4);
  border: 1px solid var(--nxt-line);
  border-radius: var(--nxt-r-md, 14px);
  background: var(--nxt-surface);
  transition: border-color .16s ease, background .16s ease, transform .16s ease;
}

body.page .nxct-method:hover{
  border-color: var(--nxt-accent-line);
  background: var(--nxt-surface-2);
  transform: translateY(-2px);
}

body.page .nxct-method__icon{
  display: grid;
  place-items: center;
  flex: 0 0 auto;
  width: 40px;
  height: 40px;
  border-radius: 999px;
  border: 1px solid var(--nxt-accent-line);
  background: var(--nxt-accent-soft);
  color: var(--nxt-accent);
}

body.page .nxct-method__label{
  margin: 0 0 2px;
  font-size: var(--nxt-t-micro);
  font-weight: 700;
  letter-spacing: .12em;
  text-transform: uppercase;
  color: var(--nxt-text-faint);
}

body.page .nxct-method__value{
  margin: 0;
  font-size: var(--nxt-t-body);
  font-weight: 600;
  color: var(--nxt-text);
  line-height: 1.45;
  overflow-wrap: anywhere;
}

body.page .nxct-method__value a{ color: inherit; text-decoration: none; }
body.page .nxct-method__value a:hover{ color: var(--nxt-accent); }
body.page .nxct-method__note{
  margin: 4px 0 0;
  font-size: var(--nxt-t-xs);
  color: var(--nxt-text-dim);
}

/* ---- Two-column shell ---- */
body.page .nxct-grid{
  display: grid;
  grid-template-columns: minmax(0, 1fr);
  gap: var(--nxt-s5);
  align-items: start;
}

@media (min-width: 992px){
  body.page .nxct-grid{ grid-template-columns: minmax(0, 1.05fr) minmax(0, .95fr); gap: var(--nxt-s6); }
}

/* ---- Form ---- */
body.page .nxct-card{
  padding: var(--nxt-s5);
  border: 1px solid var(--nxt-line);
  border-radius: var(--nxt-r-lg, 18px);
  background: var(--nxt-surface);
}

body.page .nxct-card__title{
  margin: 0 0 4px;
  font-size: var(--nxt-t-h3);
  font-weight: 700;
  color: var(--nxt-text);
}

body.page .nxct-card__sub{
  margin: 0 0 var(--nxt-s4);
  font-size: var(--nxt-t-sm);
  color: var(--nxt-text-dim);
}

body.page .nxct-form{ display: grid; gap: var(--nxt-s3); }

@media (min-width: 560px){
  body.page .nxct-form__row{ display: grid; grid-template-columns: 1fr 1fr; gap: var(--nxt-s3); }
}

body.page .nxct-field{ display: grid; gap: 6px; }

body.page .nxct-field label{
  font-size: var(--nxt-t-micro);
  font-weight: 700;
  letter-spacing: .1em;
  text-transform: uppercase;
  color: var(--nxt-text-faint);
}

/* The design system styles inputs by attribute, so match on the attribute
   here too — a plain class selector loses to it. */
body.page .nxct-form input[type="text"],
body.page .nxct-form input[type="email"],
body.page .nxct-form input[type="tel"],
body.page .nxct-form textarea{
  width: 100%;
  min-width: 0;
  padding: 12px 14px;
  border: 1px solid var(--nxt-line-strong);
  border-radius: var(--nxt-r-sm, 10px);
  background: rgba(8, 14, 27, .5);
  color: var(--nxt-text);
  font-family: inherit;
  font-size: var(--nxt-t-body);
  line-height: 1.4;
  outline: 0;
  transition: border-color .16s ease, box-shadow .16s ease, background .16s ease;
}

body.page .nxct-form input::placeholder,
body.page .nxct-form textarea::placeholder{ color: var(--nxt-text-faint); opacity: 1; }

body.page .nxct-form input:focus,
body.page .nxct-form textarea:focus{
  border-color: var(--nxt-accent);
  background: rgba(8, 14, 27, .72);
  box-shadow: 0 0 0 3px var(--nxt-accent-soft);
}

body.page .nxct-form textarea{ min-height: 132px; resize: vertical; }

body.page .nxct-form .nxbtn{ justify-self: start; min-height: 46px; padding-inline: 26px; }

@media (max-width: 559px){
  body.page .nxct-form .nxbtn{ justify-self: stretch; width: 100%; }
}

body.page .nxct-consent{
  margin: 0;
  font-size: var(--nxt-t-xs);
  color: var(--nxt-text-faint);
  line-height: 1.55;
}

body.page .nxct-consent a{ color: var(--nxt-text-dim); }

/* ---- Alerts / errors ---- */
body.page .nxct-alert{
  display: flex;
  gap: 10px;
  align-items: flex-start;
  margin-bottom: var(--nxt-s4);
  padding: 12px 14px;
  border: 1px solid rgba(74, 222, 128, .3);
  border-radius: var(--nxt-r-sm, 10px);
  background: rgba(74, 222, 128, .1);
  color: #86EFAC;
  font-size: var(--nxt-t-sm);
}

body.page .nxct-error{
  margin: 0;
  font-size: var(--nxt-t-xs);
  color: #FCA5A5;
}

/* ---- Map ---- */
body.page .nxct-map{
  overflow: hidden;
  border: 1px solid var(--nxt-line);
  border-radius: var(--nxt-r-lg, 18px);
  background: var(--nxt-surface);
  line-height: 0;
}

body.page .nxct-map iframe{
  display: block;
  width: 100%;
  height: 340px;
  border: 0;
}

@media (min-width: 992px){
  body.page .nxct-map iframe{ height: 420px; }
}

body.page .nxct-map__foot{
  display: flex;
  flex-wrap: wrap;
  gap: var(--nxt-s3);
  align-items: center;
  justify-content: space-between;
  padding: var(--nxt-s4);
  border-top: 1px solid var(--nxt-line);
  line-height: 1.5;
}

body.page .nxct-map__addr{
  margin: 0;
  font-size: var(--nxt-t-sm);
  color: var(--nxt-text-dim);
  max-width: 46ch;
}

/* ---- "What happens next" ---- */
body.page .nxct-steps{
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
  gap: var(--nxt-s4);
  margin: var(--nxt-s6) 0 0;
  padding: 0;
  list-style: none;
  counter-reset: nxct;
}

body.page .nxct-step{
  padding: var(--nxt-s4);
  border: 1px solid var(--nxt-line);
  border-radius: var(--nxt-r-md, 14px);
  background: var(--nxt-surface);
  counter-increment: nxct;
}

body.page .nxct-step::before{
  content: "0" counter(nxct);
  display: block;
  margin-bottom: 8px;
  font-size: var(--nxt-t-sm);
  font-weight: 800;
  color: var(--nxt-accent);
  letter-spacing: .04em;
}

body.page .nxct-step h3{
  margin: 0 0 4px;
  font-size: var(--nxt-t-h4);
  font-weight: 700;
  color: var(--nxt-text);
}

body.page .nxct-step p{
  margin: 0;
  font-size: var(--nxt-t-sm);
  line-height: 1.6;
  color: var(--nxt-text-dim);
}

/* ---- Quick answers ---- */
body.page .nxct-faq{ margin-top: var(--nxt-s6); }

body.page .nxct-faq__item{
  padding: var(--nxt-s4) 0;
  border-top: 1px solid var(--nxt-line);
}

body.page .nxct-faq__item:last-child{ border-bottom: 1px solid var(--nxt-line); }

body.page .nxct-faq__q{
  margin: 0 0 6px;
  font-size: var(--nxt-t-h4);
  font-weight: 700;
  color: var(--nxt-text);
}

body.page .nxct-faq__a{
  margin: 0;
  max-width: 76ch;
  font-size: var(--nxt-t-sm);
  line-height: 1.65;
  color: var(--nxt-text-dim);
}
</style>

<main class="shell">

  <section class="page-hero">
    <div class="page-hero__row">
      <h1 class="page-hero__title">Contact NXTutors</h1>

      <nav class="page-hero__crumbs" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a>
        <span class="page-hero__sep" aria-hidden="true">›</span>
        <span aria-current="page">Contact Us</span>
      </nav>
    </div>
  </section>

  <section class="nxct">

    <p class="nxct-lede">
      Tell us the class, board and subject your child needs help with, and where you are.
      We reply with two or three verified tutors who actually match — not a directory to
      sift through. Every match starts with a free demo class, and there is no card and no
      commitment until you are happy with the tutor.
    </p>

    <ul class="nxct-methods">
      <li class="nxct-method">
        <span class="nxct-method__icon" aria-hidden="true">
          <svg width="17" height="17" viewBox="0 0 16 16" fill="currentColor"><path d="M3.65 1.5A1.6 1.6 0 0 1 5.9 2l1 1.5a1.6 1.6 0 0 1-.2 2l-.6.6a.4.4 0 0 0-.06.5A9.7 9.7 0 0 0 9.4 9.96a.4.4 0 0 0 .5-.06l.6-.6a1.6 1.6 0 0 1 2-.2l1.5 1a1.6 1.6 0 0 1 .5 2.25l-.9 1.3a1.7 1.7 0 0 1-1.9.63C8.5 13.2 2.8 7.5 1.72 4.3a1.7 1.7 0 0 1 .63-1.9z"/></svg>
        </span>
        <div>
          <p class="nxct-method__label">Call us</p>
          <p class="nxct-method__value"><a href="tel:{{ $nxPhoneTel }}">{{ $nxPhone }}</a></p>
          <p class="nxct-method__note">Mon–Sat, 9:00 AM – 8:00 PM IST</p>
        </div>
      </li>

      <li class="nxct-method">
        <span class="nxct-method__icon" aria-hidden="true">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M17.47 14.38c-.3-.15-1.76-.87-2.03-.97-.28-.1-.48-.15-.68.15s-.76.96-.94 1.16c-.17.2-.34.22-.64.08s-1.26-.47-2.39-1.48c-.89-.79-1.48-1.76-1.66-2.06s-.02-.46.13-.6c.14-.14.3-.35.45-.52s.2-.3.3-.5s.05-.37-.03-.52c-.07-.15-.66-1.61-.91-2.2c-.25-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.8.37s-1.03 1.02-1.03 2.48c0 1.46 1.06 2.87 1.21 3.07c.15.2 2.1 3.2 5.08 4.49c.71.3 1.26.49 1.69.62c.71.23 1.36.2 1.87.12c.57-.09 1.76-.72 2-1.42c.25-.69.25-1.29.18-1.41c-.08-.13-.28-.2-.58-.35M12.05 21.8h-.01a9.9 9.9 0 0 1-5.03-1.38l-.36-.22l-3.74.99l1-3.65l-.24-.38A9.86 9.86 0 0 1 2.16 12c0-5.45 4.44-9.89 9.89-9.89c2.64 0 5.12 1.03 6.99 2.9a9.83 9.83 0 0 1 2.89 6.99c0 5.45-4.44 9.89-9.88 9.89"/></svg>
        </span>
        <div>
          <p class="nxct-method__label">WhatsApp</p>
          <p class="nxct-method__value"><a href="{{ $nxWa }}" target="_blank" rel="nofollow noopener">Message us</a></p>
          <p class="nxct-method__note">Fastest reply — usually within a few hours</p>
        </div>
      </li>

      <li class="nxct-method">
        <span class="nxct-method__icon" aria-hidden="true">
          <svg width="17" height="17" viewBox="0 0 16 16" fill="currentColor"><path d="M2 3h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1m.4 1.4L8 8.3l5.6-3.9zM2 11.9l4.3-3.2L2 5.7zm12 0V5.7L9.7 8.7z"/></svg>
        </span>
        <div>
          <p class="nxct-method__label">Email</p>
          <p class="nxct-method__value"><a href="mailto:{{ $nxEmail }}">{{ $nxEmail }}</a></p>
          <p class="nxct-method__note">For detailed queries and invoices</p>
        </div>
      </li>

      <li class="nxct-method">
        <span class="nxct-method__icon" aria-hidden="true">
          <svg width="17" height="17" viewBox="0 0 16 16" fill="currentColor"><path d="M8 1a5 5 0 0 0-5 5c0 3.6 4.4 8.6 4.6 8.8a.5.5 0 0 0 .8 0C8.6 14.6 13 9.6 13 6a5 5 0 0 0-5-5m0 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4"/></svg>
        </span>
        <div>
          <p class="nxct-method__label">Visit our office</p>
          <p class="nxct-method__value">Sector 66, Gurugram</p>
          <p class="nxct-method__note">{{ $nxAddress }}</p>
        </div>
      </li>
    </ul>

    <div class="nxct-grid">

      <div class="nxct-card">
        <h2 class="nxct-card__title">Send us a message</h2>
        <p class="nxct-card__sub">Fill this in and we will get back to you with tutor options for your requirement.</p>

        @if (session('success'))
          <div id="success-message" class="nxct-alert" role="status">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" style="flex:0 0 auto;margin-top:2px;"><path d="M6.4 12.1 2.7 8.4l1.3-1.3 2.4 2.4 5.6-5.6 1.3 1.3z"/></svg>
            <span>{{ session('success') }}</span>
          </div>
        @endif

        <form method="post" action="{{ route('enquiry') }}" class="nxct-form">
          @csrf

          <div class="nxct-field">
            <label for="name">Your name</label>
            <input type="text" name="name" id="name" required placeholder="e.g. Anjali Sharma" autocomplete="name">
            @error('name') <p class="nxct-error">{{ $message }}</p> @enderror
          </div>

          <div class="nxct-form__row">
            <div class="nxct-field">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" required placeholder="you@example.com" autocomplete="email">
              @error('email') <p class="nxct-error">{{ $message }}</p> @enderror
            </div>

            <div class="nxct-field">
              <label for="phone">Mobile number</label>
              <input type="tel" name="phone" id="phone" required placeholder="10-digit mobile" autocomplete="tel" inputmode="numeric">
              @error('phone') <p class="nxct-error">{{ $message }}</p> @enderror
            </div>
          </div>

          <div class="nxct-field">
            <label for="message">How can we help?</label>
            <textarea name="message" id="message" placeholder="Class, board and subject — e.g. Class 10 CBSE Maths, home tuition in Sector 56, weekday evenings."></textarea>
            @error('message') <p class="nxct-error">{{ $message }}</p> @enderror
          </div>

          <button type="submit" class="nxbtn nxbtn--accent">Send message</button>

          <p class="nxct-consent">
            By sending this you agree to be contacted about your enquiry. We never share your
            details with anyone outside NXTutors — see our
            <a href="{{ url('/privacy-policy') }}">privacy policy</a>.
          </p>
        </form>
      </div>

      <div class="nxct-map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3509.573934801124!2d77.0597153!3d28.401934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d228c92bd9dc5%3A0x3f7d62a1f2b90a00!2sM3M%20Cosmopolitan!5e0!3m2!1sen!2sin!4v1758969902295!5m2!1sen!2sin"
          title="NXTutors office location, M3M Cosmopolitan, Sector 66, Gurugram"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>

        <div class="nxct-map__foot">
          <p class="nxct-map__addr">{{ $nxAddress }}</p>
          <a class="nxbtn" target="_blank" rel="noopener"
             href="https://www.google.com/maps/dir/?api=1&destination={{ rawurlencode('M3M Cosmopolitan, Sector 66, Gurugram, Haryana 122101') }}">Get directions</a>
        </div>
      </div>

    </div>

    <ol class="nxct-steps">
      <li class="nxct-step">
        <h3>You tell us the requirement</h3>
        <p>Class, board, subjects and your locality — plus whether you want the tutor at home or online.</p>
      </li>
      <li class="nxct-step">
        <h3>We shortlist two or three tutors</h3>
        <p>Matched on subject and board experience, distance from you, availability and budget. Every tutor is ID-verified.</p>
      </li>
      <li class="nxct-step">
        <h3>You take a free demo class</h3>
        <p>Meet the tutor and see the teaching style before paying anything. Change tutor at any point if the fit is not right.</p>
      </li>
    </ol>

    <div class="nxct-faq">
      <h2 class="nxct-card__title" style="margin-bottom:var(--nxt-s3);">Quick answers</h2>

      <div class="nxct-faq__item">
        <h3 class="nxct-faq__q">How quickly will you get back to me?</h3>
        <p class="nxct-faq__a">WhatsApp is fastest and usually gets a reply within a few working hours. Calls are answered Monday to Saturday, 9:00 AM to 8:00 PM IST. Email enquiries are answered within one working day.</p>
      </div>

      <div class="nxct-faq__item">
        <h3 class="nxct-faq__q">Which boards and classes do you cover?</h3>
        <p class="nxct-faq__a">CBSE, ICSE, ISC, IB and IGCSE across Classes 1 to 12, plus entrance preparation for JEE, NEET and the SAT. If you need a subject you cannot see listed, ask — we will tell you honestly whether we have a suitable tutor.</p>
      </div>

      <div class="nxct-faq__item">
        <h3 class="nxct-faq__q">What does tuition cost?</h3>
        <p class="nxct-faq__a">Typical fees run ₹800–2,500 per hour depending on board, class level, subject and whether sessions are at home or online. Our <a href="{{ url('/pricing-guide') }}">pricing guide</a> explains what moves the number, and there is no charge for the demo class.</p>
      </div>

      <div class="nxct-faq__item">
        <h3 class="nxct-faq__q">Do you teach outside Gurugram?</h3>
        <p class="nxct-faq__a">Yes. Our office is in Sector 66, Gurugram, and home tuition is strongest across Gurugram and Delhi NCR, but we match online tutors across India — <a href="{{ url('/city') }}">see the cities we cover</a>.</p>
      </div>

      <div class="nxct-faq__item">
        <h3 class="nxct-faq__q">Can I change the tutor later?</h3>
        <p class="nxct-faq__a">Yes. If the teaching style is not working for your child, tell us and we will shortlist a replacement. You are never locked into one tutor.</p>
      </div>
    </div>

  </section>
</main>

<script type="application/ld+json">
{!! json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'ContactPage',
  'url' => url()->current(),
  'name' => 'Contact NXTutors',
  'mainEntity' => [
    '@type' => 'EducationalOrganization',
    'name' => 'NXTutors',
    'url' => url('/'),
    'email' => $nxEmail,
    'telephone' => $nxPhoneTel,
    'address' => [
      '@type' => 'PostalAddress',
      'streetAddress' => 'M3M Cosmopolitan, Golf Course Extension Road, Sector 66',
      'addressLocality' => 'Gurugram',
      'addressRegion' => 'Haryana',
      'postalCode' => '122101',
      'addressCountry' => 'IN',
    ],
    'contactPoint' => [
      '@type' => 'ContactPoint',
      'telephone' => $nxPhoneTel,
      'email' => $nxEmail,
      'contactType' => 'customer service',
      'areaServed' => 'IN',
      'availableLanguage' => ['en', 'hi'],
    ],
  ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>

@include('include.footer')
</body>
</html>
