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

  <meta name="google-site-verification" content="6YPIp5C3YKMj872HZZnphViStBtyWOrah5hikhJIz2M"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="{{ asset('frount/assets') }}/css/styles.css" />

  <link rel="stylesheet" href="{{ asset('frount/assets') }}/css/newstyle.css" />
  <link rel="stylesheet" href="{{ asset('frount/assets') }}/css/newhome.css" />
<link rel="icon" href="{{ asset('storage/logos/' . $setting->logo) }}">
</head>
<body class="page">
  <div class="shell">
  <header class="topbar">
  <div class="topbar-left">
    <a href="{{ url('/') }}" style="text-decoration: none; color: #fff;">
    <!-- <div class="badge">NXT</div>
    <span class="logo-text">Nxtutors</span> -->
    <img src="{{ asset('storage/logos/' . $setting->logo) }}" style="width: 60px;
    border-radius: 50%" alt="logo" />
  </a>
  </div>
<style>
  /* ================= HEADER — NEW DESIGN ================= */
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap');

  .topbar {
    display: flex;
    align-items: center;
    gap: 6px;
    padding: 10px 18px;
    font-family: 'Inter', sans-serif;
    position: relative;
    flex-wrap: nowrap;
  }

  /* Logo area */
  .topbar-left {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 2px;
    flex-shrink: 0;
    margin-right: 10px;
  }
  .topbar-left a {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-decoration: none;
  }
  .topbar-logo-label {
    font-size: 11px;
    color: rgba(255,255,255,0.75);
    letter-spacing: 0.5px;
    margin-top: 3px;
    display: flex;
    align-items: center;
    gap: 3px;
  }
  .topbar-logo-label::after {
    content: '▲';
    font-size: 8px;
    color: rgba(255,255,255,0.5);
  }

  /* Right side nav */
  .topbar-right {
    display: flex;
    align-items: center;
    gap: 6px;
    flex-wrap: nowrap;
    flex: 1;
  }

  /* Divider after Home */
  .nav-divider {
    width: 1px;
    height: 22px;
    background: rgba(255,255,255,0.18);
    flex-shrink: 0;
    margin: 0 2px;
  }

  /* Base pill button */
  .location-btn {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 7px 15px;
    border-radius: 50px;
    border: 1px solid rgba(255,255,255,0.12);
    background: rgba(255,255,255,0.06);
    color: #fff;
    font-size: 13.5px;
    font-weight: 500;
    cursor: pointer;
    text-decoration: none;
    transition: background .2s, border-color .2s;
    white-space: nowrap;
    font-family: 'Inter', sans-serif;
  }
  .location-btn:hover {
    background: rgba(255,255,255,0.13);
    border-color: rgba(255,255,255,0.25);
    color: #fff;
  }

  /* Dot indicator for Home / active items */
  .nav-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #e75480;
    flex-shrink: 0;
    display: inline-block;
  }

  /* City icon */
  .nav-icon {
    font-size: 13px;
    opacity: 0.8;
  }

  /* Location dropdown button */
  #locationBtn {
    gap: 6px;
  }
  .caret {
    font-size: 10px;
    opacity: 0.7;
    margin-left: 2px;
  }

  /* Theme picker */
  .theme-picker { position: relative; }
  .theme-toggle {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 7px 15px;
    border-radius: 50px;
    border: 1px solid rgba(255,255,255,0.12);
    background: rgba(255,255,255,0.06);
    color: #fff;
    font-size: 13.5px;
    font-weight: 500;
    cursor: pointer;
    transition: background .2s;
    font-family: 'Inter', sans-serif;
    white-space: nowrap;
  }
  .theme-toggle:hover { background: rgba(255,255,255,0.13); }
  .theme-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #e75480;
    display: inline-block;
    flex-shrink: 0;
  }
  .theme-label { font-weight: 500; }

  .theme-menu {
    display: none;
    position: absolute;
    top: calc(100% + 8px);
    left: 0;
    background: #2a1030;
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 14px;
    padding: 8px;
    min-width: 160px;
    z-index: 9999;
    box-shadow: 0 8px 32px rgba(0,0,0,0.45);
  }
  .theme-menu.open { display: block; }
  .theme-option {
    display: flex;
    align-items: center;
    gap: 8px;
    width: 100%;
    padding: 8px 10px;
    background: none;
    border: none;
    color: #fff;
    font-size: 13px;
    border-radius: 8px;
    cursor: pointer;
    font-family: 'Inter', sans-serif;
    transition: background .2s;
  }
  .theme-option:hover { background: rgba(255,255,255,0.1); }
  .theme-option-dot {
    width: 10px; height: 10px;
    border-radius: 50%;
    flex-shrink: 0;
  }
  .theme-option-dot--default { background: #888; }
  .theme-option-dot--blue    { background: #4a9fff; }
  .theme-option-dot--green   { background: #4caf50; }
  .theme-option-dot--yellow  { background: #ffcc00; }
  .theme-option-dot--pink    { background: #e75480; }
  .theme-option-dot--orange  { background: #ff7043; }
  .theme-option-check { margin-left: auto; font-size: 12px; opacity: 0; }
  .theme-option.selected .theme-option-check { opacity: 1; }

  /* CTA buttons row */
  .cta-buttons {
    display: flex;
    align-items: center;
    gap: 6px;
    flex-wrap: nowrap;
  }

  /* WhatsApp CTA — pink solid */
  .btn-accent.topbar-whatsapp {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 8px 16px;
    border-radius: 50px;
    background: linear-gradient(135deg, #e75480 0%, #c0407a 100%);
    color: #fff;
    font-size: 13.5px;
    font-weight: 600;
    border: none;
    cursor: pointer;
    text-decoration: none;
    white-space: nowrap;
    transition: filter .2s, transform .15s;
    box-shadow: 0 2px 12px rgba(231,84,128,0.35);
    font-family: 'Inter', sans-serif;
  }
  .btn-accent.topbar-whatsapp:hover {
    filter: brightness(1.1);
    transform: translateY(-1px);
  }
  .dot-online {
    width: 8px; height: 8px;
    border-radius: 50%;
    background: #fff;
    flex-shrink: 0;
    box-shadow: 0 0 6px rgba(255,255,255,0.6);
    animation: pulse-dot 1.8s ease-in-out infinite;
  }
  @keyframes pulse-dot {
    0%,100% { opacity:1; transform:scale(1); }
    50%      { opacity:.6; transform:scale(1.3); }
  }

  /* Ghost button — outlined pill */
  .btn-ghost.topbar-partner {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 7px 15px;
    border-radius: 50px;
    border: 1px solid rgba(255,255,255,0.22);
    background: rgba(255,255,255,0.06);
    color: #fff;
    font-size: 13.5px;
    font-weight: 500;
    cursor: pointer;
    text-decoration: none;
    white-space: nowrap;
    transition: background .2s, border-color .2s;
    font-family: 'Inter', sans-serif;
  }
  .btn-ghost.topbar-partner:hover {
    background: rgba(255,255,255,0.13);
    border-color: rgba(255,255,255,0.35);
  }

  /* Login button */
  .location-btn.login-btn {
    gap: 6px;
  }

  /* ===== HAMBURGER BUTTON ===== */
  .mobile-menu-btn {
    display: none;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 5px;
    width: 40px;
    height: 40px;
    background: rgba(255,255,255,0.07);
    border: 1px solid rgba(255,255,255,0.14);
    border-radius: 10px;
    cursor: pointer;
    padding: 0;
    transition: background .2s;
    flex-shrink: 0;
  }
  .mobile-menu-btn:hover { background: rgba(255,255,255,0.14); }
  .mobile-menu-btn span {
    display: block;
    width: 20px;
    height: 2px;
    background: #fff;
    border-radius: 2px;
    transition: transform .3s, opacity .3s;
  }
  .mobile-menu-btn.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
  .mobile-menu-btn.open span:nth-child(2) { opacity: 0; }
  .mobile-menu-btn.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

  /* ===== RESPONSIVE ===== */
  @media (max-width: 1100px) {
    .topbar { gap: 4px; }
    .location-btn, .theme-toggle { padding: 6px 11px; font-size: 12.5px; }
    .btn-accent.topbar-whatsapp, .btn-ghost.topbar-partner { padding: 7px 12px; font-size: 12.5px; }
  }

  @media (max-width: 991px) {
    .topbar {
      display: grid;
      grid-template-columns: 1fr auto;
      align-items: center;
      gap: 0;
      padding: 10px 16px;
      flex-wrap: wrap;
    }
    .topbar-left { justify-self: start; }
    .mobile-menu-btn { display: flex; justify-self: end; }

    .topbar-right {
      display: none;
      grid-column: 1 / -1;
      width: 100%;
      margin-top: 14px;
      flex-direction: column;
      align-items: stretch;
      gap: 8px;
    }
    .topbar-right.active { display: flex; animation: menuFade .3s ease; }

    .nav-divider { display: none; }

    .location-btn,
    #locationBtn,
    .theme-toggle,
    .btn-accent.topbar-whatsapp,
    .btn-ghost.topbar-partner {
      width: 100%;
      justify-content: center;
      min-height: 46px;
      border-radius: 12px;
    }

    .cta-buttons {
      width: 100%;
      flex-direction: column;
      gap: 8px;
    }

    .theme-menu {
      position: static;
      border-radius: 12px;
      margin-top: 4px;
      width: 100%;
      box-shadow: none;
    }
  }

  @media (max-width: 480px) {
    .topbar { padding: 8px 12px; }
  }

  @keyframes menuFade {
    from { opacity: 0; transform: translateY(-8px); }
    to   { opacity: 1; transform: translateY(0); }
  }
</style>
  <button class="mobile-menu-btn" id="mobileMenuBtn" type="button" aria-label="Toggle menu" aria-expanded="false">
    <span></span>
    <span></span>
    <span></span>
  </button>

  <div class="topbar-right" id="topbarMenu">
    <a class="location-btn" href="{{ url('/') }}">
      <span class="nav-dot"></span> Home
    </a>
    <span class="nav-divider"></span>
    <a class="location-btn" href="{{ url('/') }}/city">
      <span class="nav-icon">📍</span> City
    </a>
 
    <button class="location-btn" id="locationBtn" type="button">
      <span id="userLocation">Detecting location...</span>
      <span class="caret">▼</span>
    </button>

    
    <div class="theme-picker">
      <button id="themeToggle" class="theme-toggle">
        <span class="theme-dot"></span>
        <span id="themeLabel" class="theme-label">Default</span>
        <span class="caret">▾</span>
      </button>

      <div id="themeMenu" class="theme-menu">
        <button class="theme-option" data-theme-option="default">
          <span class="theme-option-dot theme-option-dot--default"></span>
          <span>Default</span>
          <span class="theme-option-check">✓</span>
        </button>

        <button class="theme-option" data-theme-option="blue">
          <span class="theme-option-dot theme-option-dot--blue"></span>
          <span>Blue</span>
          <span class="theme-option-check">✓</span>
        </button>

        <button class="theme-option" data-theme-option="green">
          <span class="theme-option-dot theme-option-dot--green"></span>
          <span>Green</span>
          <span class="theme-option-check">✓</span>
        </button>

        <button class="theme-option" data-theme-option="yellow">
          <span class="theme-option-dot theme-option-dot--yellow"></span>
          <span>Yellow</span>
          <span class="theme-option-check">✓</span>
        </button>

        <button class="theme-option" data-theme-option="pink">
          <span class="theme-option-dot theme-option-dot--pink"></span>
          <span>Pink</span>
          <span class="theme-option-check">✓</span>
        </button>

        <button class="theme-option" data-theme-option="orange">
          <span class="theme-option-dot theme-option-dot--orange"></span>
          <span>Orange</span>
          <span class="theme-option-check">✓</span>
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

   @if (!session()->has('userid'))
    <a href="{{ url('/login') }}" class="location-btn login-btn">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16" style="flex-shrink:0"><path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/><path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/></svg>
      Login
    </a>
                @else
                @php $role = session('join_as'); @endphp
                @if ($role === 'student')
                 <a href="{{ route('user.dashboard') }}" class="location-btn"  >
              Dashboard
        </a>
        <a href="{{ route('logout') }}"class="location-btn">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
        </a>
        @elseif ($role === 'teacher')
        <a href="{{ route('teacher.dashboard') }}" class="location-btn"  >
              Dashboard
        </a>
        <a href="{{ route('logout') }}" class="location-btn"  >
              Logout
        </a>
 
    
     @endif

      @endif
</div>

  </div>
</header>
 
<!-- Book demo class modal -->
<div id="demoModal" class="nx-modal">
  <div class="nx-modal__backdrop" data-modal-close></div>

  <div class="nx-modal__card nx-modal__card--wide">
    <button class="nx-modal__close" type="button" data-modal-close>&times;</button>

    <div class="nx-modal__content nx-modal__content--split">
      <div class="nx-modal__left">
        <p class="nx-modal__eyebrow">{{ $locationText ?? 'Sector 30, Gurugram' }}</p>
        <h2 class="nx-modal__title">Book a demo class</h2>
        <p class="nx-modal__subtitle">
          Try one session with a top home tutor.
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
<div id="tutorModal" class="nx-modal">
  <div class="nx-modal__backdrop" data-modal-close></div>

  <div class="nx-modal__card">
    <button class="nx-modal__close" type="button" data-modal-close>&times;</button>

    <div class="nx-modal__content">
      <div class="nx-modal__logo">
        <!-- Replace with your actual logo image -->
        <span class="nx-logo-circle">N</span>
      </div>
      <h2 class="nx-modal__title nx-modal__title--center">
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
            menu.classList.toggle("active");
            this.classList.toggle("open");
        });

        window.addEventListener("resize", function () {
            if (window.innerWidth > 991) {
                menu.classList.remove("active");
                menuBtn.classList.remove("open");
            }
        });
    }

    /* ---- Theme dropdown ---- */
    const themeToggle = document.getElementById("themeToggle");
    const themeMenu   = document.getElementById("themeMenu");

    if (themeToggle && themeMenu) {
        themeToggle.addEventListener("click", function (e) {
            e.stopPropagation();
            themeMenu.classList.toggle("open");
        });
        document.addEventListener("click", function () {
            themeMenu.classList.remove("open");
        });
        themeMenu.addEventListener("click", function (e) {
            e.stopPropagation();
        });
    }

});
</script>