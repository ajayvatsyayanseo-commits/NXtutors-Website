   <title>{{ $metatitle }}</title>
  <meta charset="UTF-8" />
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WYQKGZVSL0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WYQKGZVSL0');
</script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17946393705"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-17946393705');
</script>
 <meta name="title" content="{{ $metatitle }}">
 
    <meta name="description" content="{{ $metadesc }}">

  {{--
    Canonical for every page on the site, emitted here because this include is
    the one thing every template has in common. The homepage, /city/*,
    /category/* and /course/* had no canonical at all, which leaves Google to
    guess which of the URL variants that reach a page is the real one.

    Templates that know better set $canonical (blog, tutor) or $canonicalUrl
    (generated /p/ pages) before including this file and it is used as-is;
    everything else self-references. Those templates must NOT emit their own
    <link rel="canonical"> as well — two canonical tags on one page make Google
    ignore both.
  --}}
  <link rel="canonical" href="{{ $canonical ?? $canonicalUrl ?? url()->current() }}">

  <meta name="google-site-verification" content="6YPIp5C3YKMj872HZZnphViStBtyWOrah5hikhJIz2M"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#080E1B">

  {{-- Design system type: Bricolage Grotesque (display) + Manrope (body).
       Replaces the render-blocking @import that previously sat inside a
       <style> block in this file. --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,500..800&family=Manrope:wght@400..800&display=swap">

  {{-- Cache buster: front-end CSS/JS are hand-edited (no build step), so a
       stale copy would otherwise mix old chrome with new pages. Keyed on the
       design system's mtime, which changes on every deploy that touches it. --}}
  @php
    $nxtAssetV = @filemtime(base_path('public/frount/assets/css/nxt-ds.css')) ?: '1';
  @endphp

  <link rel="stylesheet" href="{{ asset('frount/assets') }}/css/styles.css?v={{ $nxtAssetV }}" />

  <link rel="stylesheet" href="{{ asset('frount/assets') }}/css/newstyle.css?v={{ $nxtAssetV }}" />
  <link rel="stylesheet" href="{{ asset('frount/assets') }}/css/newhome.css?v={{ $nxtAssetV }}" />

  {{-- Design system — must stay last so its `body.page` rules win over the
       per-page <style> blocks that ship inside individual views. --}}
  <link rel="stylesheet" href="{{ asset('frount/assets') }}/css/nxt-ds.css?v={{ $nxtAssetV }}" />
<link rel="icon" href="{{ asset('uploads/logo/newlogo.png') }}">
</head>
<body class="page">
  <a class="nxt-skip" href="#nxt-content">Skip to main content</a>
  <header class="topbar">
  <div class="topbar-left">
    <a href="{{ url('/') }}" aria-label="NXTutors — home">
    <img src="{{ asset('uploads/logo/newlogo.png') }}"
         width="42" height="42" alt="" />
    <span class="logo-text">NXTutors</span>
    <span class="logo-mark" aria-hidden="true"></span>
  </a>
  </div>
  <button class="mobile-menu-btn" id="mobileMenuBtn" type="button" aria-label="Toggle menu" aria-expanded="false">
    <span></span>
    <span></span>
    <span></span>
  </button>

  <div class="topbar-right" id="topbarMenu">
    <a class="location-btn" href="{{ url('/') }}">Home</a>
    <a class="location-btn" href="{{ url('/') }}/tutors">Find tutors</a>

    <span class="nav-divider" aria-hidden="true"></span>

    <button class="location-btn nxt-location-btn" id="locationBtn" type="button"
            aria-haspopup="dialog" aria-label="Change your location">
      <span id="userLocation">Detecting location...</span>
      <span class="caret" aria-hidden="true">▼</span>
    </button>


    <div class="theme-picker">
      <button id="themeToggle" class="theme-toggle" type="button"
              aria-haspopup="true" aria-expanded="false" aria-controls="themeMenu">
        <span class="theme-dot" aria-hidden="true"></span>
        <span class="nxt-sr-only">Colour theme:</span>
        <span id="themeLabel" class="theme-label">Default</span>
        <span class="caret" aria-hidden="true">▾</span>
      </button>

      <div id="themeMenu" class="theme-menu" role="menu" aria-label="Colour theme">
        <button type="button" role="menuitemradio" aria-checked="false" class="theme-option" data-theme-option="default">
          <span class="theme-option-dot theme-option-dot--default"></span>
          <span>Default</span>
          <span class="theme-option-check" aria-hidden="true">✓</span>
        </button>

        <button type="button" role="menuitemradio" aria-checked="false" class="theme-option" data-theme-option="blue">
          <span class="theme-option-dot theme-option-dot--blue"></span>
          <span>Blue</span>
          <span class="theme-option-check" aria-hidden="true">✓</span>
        </button>

        <button type="button" role="menuitemradio" aria-checked="false" class="theme-option" data-theme-option="green">
          <span class="theme-option-dot theme-option-dot--green"></span>
          <span>Green</span>
          <span class="theme-option-check" aria-hidden="true">✓</span>
        </button>

        <button type="button" role="menuitemradio" aria-checked="false" class="theme-option" data-theme-option="yellow">
          <span class="theme-option-dot theme-option-dot--yellow"></span>
          <span>Yellow</span>
          <span class="theme-option-check" aria-hidden="true">✓</span>
        </button>

        <button type="button" role="menuitemradio" aria-checked="false" class="theme-option" data-theme-option="pink">
          <span class="theme-option-dot theme-option-dot--pink"></span>
          <span>Pink</span>
          <span class="theme-option-check" aria-hidden="true">✓</span>
        </button>

        <button type="button" role="menuitemradio" aria-checked="false" class="theme-option" data-theme-option="orange">
          <span class="theme-option-dot theme-option-dot--orange"></span>
          <span>Orange</span>
          <span class="theme-option-check" aria-hidden="true">✓</span>
        </button>
      </div>
    </div>

     <div class="cta-buttons">
  <a class="btn btn-accent topbar-whatsapp"
     href="#"
     data-modal-target="demoModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="white" style="flex-shrink:0;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
    <span>Chat on WhatsApp</span>
  </a>

  <a class="btn btn-ghost topbar-partner"
     href="#"
     data-modal-target="tutorModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16" style="flex-shrink:0"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.029 10 8 10c-2.03 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/></svg>
    New Tutor Partner
  </a>

  {{-- Account: one icon, one menu. Signed out it offers the two ways in;
       signed in it offers the two ways on. --}}
  <div class="nxt-account">
    <button type="button" class="nxt-account__btn" id="accountToggle"
            aria-haspopup="true" aria-expanded="false" aria-controls="accountMenu"
            aria-label="{{ session()->has('userid') ? 'Your account' : 'Log in or sign up' }}">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
           stroke-width="1.7" stroke-linecap="round" aria-hidden="true">
        <circle cx="12" cy="12" r="9"/><circle cx="12" cy="10" r="3"/>
        <path d="M6.2 18.4a6.2 6.2 0 0 1 11.6 0"/>
      </svg>
    </button>

    <div class="nxt-account__menu" id="accountMenu" role="menu" aria-label="Account">
      @if (!session()->has('userid'))
        <a class="nxt-account__item" role="menuitem" href="{{ url('/login') }}">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/><path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/></svg>
          Login
        </a>
      @else
        @php $role = session('join_as'); @endphp
        @if ($role === 'student')
          <a class="nxt-account__item" role="menuitem" href="{{ route('user.dashboard') }}">Dashboard</a>
        @elseif ($role === 'teacher')
          <a class="nxt-account__item" role="menuitem" href="{{ route('teacher.dashboard') }}">Dashboard</a>
        @endif
        <a class="nxt-account__item" role="menuitem" href="{{ route('logout') }}">Log out</a>
      @endif
    </div>
  </div>
</div>

  </div>
</header>
  <div class="shell">
 
<!-- Book demo class modal -->
<div id="demoModal" class="nx-modal" role="dialog" aria-modal="true"
     aria-labelledby="demoModalTitle" aria-hidden="true">
  <div class="nx-modal__backdrop" data-modal-close></div>

  <div class="nx-modal__card nx-modal__card--wide">
    <button class="nx-modal__close" type="button" data-modal-close aria-label="Close">&times;</button>

    <div class="nx-modal__content nx-modal__content--split">
      <div class="nx-modal__left">
        <p class="nx-modal__eyebrow">{{ $locationText ?? 'Sector 30, Gurugram' }}</p>
        <h2 class="nx-modal__title" id="demoModalTitle">Book a demo class</h2>
        <p class="nx-modal__subtitle">
          One free session with a verified home tutor. No card, no commitment.
        </p>
      </div>

      <div class="nx-modal__right">
        <form class="nx-form" id="demoForm">
          <div class="nx-form__row">
            <label class="nx-field">
              <span class="nx-field__label">Your name</span>
              <input type="text" name="name" class="nx-field__input" placeholder="Name">
            </label>
          </div>

          <div class="nx-form__row nx-form__row--split">
            <label class="nx-field">
              <span class="nx-field__label">Phone number</span>
              <div class="nx-field__phone">
                <span class="nx-field__code">+91</span>
                <input type="tel" name="phone" class="nx-field__input nx-field__input--phone" placeholder="Phone">
              </div>
            </label>
          </div>

          <div class="nx-form__row">
            <label class="nx-field">
              <span class="nx-field__label">Service</span>
              <select name="service" class="nx-field__input">
                <option value="Home Tutoring">Home Tutoring</option>
                <option value="Online Tutoring">Online Tutoring</option>
                <option value="Doubt Session">Doubt Session</option>
              </select>
            </label>
          </div>

          <div class="nx-form__row">
  <span class="nx-field__label">Board</span>
  <input type="text" id="boardInput" class="nx-field__input" placeholder="Type board and press Enter">
  <div class="nx-tag-box" id="boardTags"></div>
  <input type="hidden" name="boards" id="selectedBoards">
</div>

<div class="nx-form__row">
  <span class="nx-field__label">Class</span>
  <input type="text" id="classInput" class="nx-field__input" placeholder="Type class and press Enter">
  <div class="nx-tag-box" id="classTags"></div>
  <input type="hidden" name="classes" id="selectedClasses">
</div>

<div class="nx-form__row">
  <span class="nx-field__label">Subject</span>
  <input type="text" id="subjectInput" class="nx-field__input" placeholder="Type subject and press Enter">
  <div class="nx-tag-box" id="subjectTags"></div>
  <input type="hidden" name="subjects" id="selectedSubjects">
</div>

 

          <div class="nx-form__row nx-form__row--split">
            <label class="nx-field">
              <span class="nx-field__label">Preferred time</span>
              <select name="preferred_time" class="nx-field__input">
                <option value="">Select time</option>
                <option value="Morning">Morning</option>
                <option value="Afternoon">Afternoon</option>
                <option value="Evening">Evening</option>
              </select>
            </label>

            <label class="nx-field">
              <span class="nx-field__label">Mode</span>
              <select name="mode" class="nx-field__input">
                <option value="Home">Home</option>
                <option value="Online">Online</option>
              </select>
            </label>
          </div>

          <div class="nx-form__row">
            <label class="nx-field">
              <span class="nx-field__label">Message</span>
              <textarea name="message" class="nx-field__input nx-field__textarea" placeholder="Anything we should know?"></textarea>
            </label>
          </div>

          <div class="nx-form__actions">
            <button type="submit" class="nx-btn nx-btn--whatsapp" id="demoSubmitBtn">
              Book demo on WhatsApp
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Become tutor partner modal -->
<div id="tutorModal" class="nx-modal" role="dialog" aria-modal="true"
     aria-labelledby="tutorModalTitle" aria-hidden="true">
  <div class="nx-modal__backdrop" data-modal-close></div>

  <div class="nx-modal__card">
    <button class="nx-modal__close" type="button" data-modal-close aria-label="Close">&times;</button>

    <div class="nx-modal__content">
      <div class="nx-modal__logo">
        <span class="nx-logo-circle" aria-hidden="true">N</span>
      </div>
      <h2 class="nx-modal__title nx-modal__title--center" id="tutorModalTitle">
        Become a tutor partner
      </h2>

      <form class="nx-form" id="tutorForm">
        <div class="nx-form__row">
          <label class="nx-field">
            <span class="nx-field__label">Your name</span>
            <input type="text" class="nx-field__input" placeholder="Name" />
          </label>
        </div>

        <div class="nx-form__row nx-form__row--split">
          <label class="nx-field">
            <span class="nx-field__label">Subjects</span>
            <input type="text" class="nx-field__input"
                   placeholder="List subjects you can teach" />
          </label>

          <label class="nx-field">
            <span class="nx-field__label">Classes</span>
            <input type="text" class="nx-field__input"
                   placeholder="Select grade levels" />
          </label>
        </div>

        <div class="nx-form__row nx-form__row--split">
          <label class="nx-field">
            <span class="nx-field__label">Experience</span>
            <input type="text" class="nx-field__input"
                   placeholder="Years taught" />
          </label>

          <label class="nx-field">
            <span class="nx-field__label">Location</span>
            <input type="text" class="nx-field__input"
                   placeholder="Base of operation" />
          </label>
        </div>

        <div class="nx-form__row nx-form__row--split">
          <label class="nx-field">
            <span class="nx-field__label">Preferred mode</span>
            <select class="nx-field__input">
              <option>In person</option>
              <option>Online</option>
              <option>Hybrid</option>
            </select>
          </label>

          <label class="nx-field">
            <span class="nx-field__label">Hourly rate</span>
            <input type="text" class="nx-field__input"
                   placeholder="Proposed range (INR)" />
          </label>
        </div>

        <div class="nx-form__row nx-form__row--split">
          <label class="nx-field">
            <span class="nx-field__label">Days taught</span>
            <input type="text" class="nx-field__input"
                   placeholder="Select availability" />
          </label>

          <label class="nx-field">
            <span class="nx-field__label">WhatsApp number</span>
            <div class="nx-field__phone">
              <span class="nx-field__code">+91</span>
              <input type="tel" class="nx-field__input" placeholder="Phone" />
            </div>
          </label>
        </div>

        <div class="nx-form__row nx-form__row--inline">
          <label class="nx-checkbox">
            <input type="checkbox" />
            <span>I agree to Nxtutors <a href="#">terms</a></span>
          </label>
        </div>

        <div class="nx-form__actions">
          <button type="submit" class="nx-btn nx-btn--apply">
            Apply on WhatsApp
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

 

    <link
  rel="stylesheet"
  href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  function setupTagInput(inputId, tagsId, hiddenId) {
    const input = document.getElementById(inputId);
    const tagsBox = document.getElementById(tagsId);
    const hidden = document.getElementById(hiddenId);

    if (!input || !tagsBox || !hidden) return;

    let values = [];

    function renderTags() {
      tagsBox.innerHTML = '';

      values.forEach(function (value, index) {
        const tag = document.createElement('span');
        tag.className = 'nx-tag';
        tag.innerHTML = value + ' <button type="button" data-index="' + index + '">&times;</button>';
        tagsBox.appendChild(tag);
      });

      hidden.value = values.join(', ');
    }

    input.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' || e.key === ',') {
        e.preventDefault();

        const value = input.value.trim();

        if (value !== '' && !values.includes(value)) {
          values.push(value);
          input.value = '';
          renderTags();
        }
      }
    });

    tagsBox.addEventListener('click', function (e) {
      if (e.target.tagName === 'BUTTON') {
        values.splice(parseInt(e.target.dataset.index), 1);
        renderTags();
      }
    });
  }

  setupTagInput('boardInput', 'boardTags', 'selectedBoards');
  setupTagInput('classInput', 'classTags', 'selectedClasses');
  setupTagInput('subjectInput', 'subjectTags', 'selectedSubjects');
});
</script>


<script>
document.addEventListener("DOMContentLoaded", function () {

    /* ---- Mobile hamburger ---- */
    const menuBtn = document.getElementById("mobileMenuBtn");
    const menu    = document.getElementById("topbarMenu");

    if (menuBtn && menu) {
        menuBtn.addEventListener("click", function () {
            const open = menu.classList.toggle("active");
            this.classList.toggle("open", open);
            this.setAttribute("aria-expanded", String(open));
            this.setAttribute("aria-label", open ? "Close menu" : "Open menu");
        });

        window.addEventListener("resize", function () {
            if (window.innerWidth > 991) {
                menu.classList.remove("active");
                menuBtn.classList.remove("open");
                menuBtn.setAttribute("aria-expanded", "false");
                menuBtn.setAttribute("aria-label", "Open menu");
            }
        });
    }

    /* ---- Theme dropdown ---- */
    const themeToggle = document.getElementById("themeToggle");
    const themeMenu   = document.getElementById("themeMenu");

    if (themeToggle && themeMenu) {
        themeToggle.addEventListener("click", function (e) {
            e.stopPropagation();
            const open = themeMenu.classList.toggle("open");
            themeToggle.setAttribute("aria-expanded", String(open));
        });
        document.addEventListener("click", function () {
            themeMenu.classList.remove("open");
            themeToggle.setAttribute("aria-expanded", "false");
        });
        themeToggle.addEventListener("keydown", function (e) {
            if (e.key === "Escape") {
                themeMenu.classList.remove("open");
                themeMenu.style.display = "none";
                themeToggle.setAttribute("aria-expanded", "false");
            }
        });
    }

    /* ---- Account menu ---- */
    const acctToggle = document.getElementById("accountToggle");
    const acctMenu   = document.getElementById("accountMenu");

    if (acctToggle && acctMenu) {
        const closeAcct = function () {
            acctMenu.classList.remove("open");
            acctToggle.setAttribute("aria-expanded", "false");
        };
        acctToggle.addEventListener("click", function (e) {
            e.stopPropagation();
            const open = acctMenu.classList.toggle("open");
            acctToggle.setAttribute("aria-expanded", String(open));
            if (open) { const f = acctMenu.querySelector("a"); if (f) f.focus(); }
        });
        acctMenu.addEventListener("click", function (e) { e.stopPropagation(); });
        document.addEventListener("click", closeAcct);
        document.addEventListener("keydown", function (e) {
            if (e.key === "Escape" && acctMenu.classList.contains("open")) {
                closeAcct();
                acctToggle.focus();
            }
        });
        themeMenu.addEventListener("click", function (e) {
            e.stopPropagation();
        });
    }

});
</script>