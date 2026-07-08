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
  <link rel="stylesheet" href="{{ asset('public/frount/assets') }}/css/styles.css" />

  <link rel="stylesheet" href="{{ asset('public/frount/assets') }}/css/newstyle.css" />
  <link rel="stylesheet" href="{{ asset('public/frount/assets') }}/css/newhome.css" />
<link rel="icon" href="{{ asset('public/storage/logos/' . $setting->logo) }}">
</head>
<body class="page">
  <div class="shell">
  <header class="topbar">
  <div class="topbar-left">
    <a href="{{ url('/')}}" style="text-decoration: none; color: #fff;"  >
    <!-- <div class="badge">NXT</div>
    <span class="logo-text">Nxtutors</span> -->
    <img src="{{ asset('public/storage/logos/' . $setting->logo) }}" style="width: 70px;
    border-radius: 50%" alt="logo" />
  </a>
  </div>
<style>
   /* ================= HEADER ================= */

.topbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:20px;
    position:relative;
}

.topbar-left{
    display:flex;
    align-items:center;
}

.topbar-right{
    display:flex;
    align-items:center;
    gap:12px;
    flex-wrap:wrap;
}

.mobile-menu-btn{
    display:none;
    width:42px;
    height:42px;
    background:none;
    border:none;
    color:#fff;
    font-size:28px;
    cursor:pointer;
    justify-content:center;
    align-items:center;
    transition:.3s;
}

.mobile-menu-btn:hover{
    opacity:.8;
}

/* ================= MOBILE ================= */

@media (max-width:991px){

.topbar{
    display:grid;
    grid-template-columns:1fr auto;
    align-items:center;
    gap:15px;
}

.topbar-left{
    justify-self:start;
}

.mobile-menu-btn{
    display:flex;
    justify-self:end;
}

.topbar-right{
    display:none;
    grid-column:1/-1;
    width:100%;
    margin-top:20px;
    flex-direction:column;
    gap:12px;
    animation:menuFade .35s ease;
}

.topbar-right.active{
    display:flex;
}

.location-btn,
#locationBtn,
.theme-picker,
.theme-toggle,
.btn,
.topbar-whatsapp,
.topbar-partner{
    width:100%;
}

.location-btn,
.theme-toggle,
.btn{
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:48px;
}

.cta-buttons{
    width:100%;
    display:flex;
    flex-direction:column;
    gap:12px;
}

.theme-picker{
    position:relative;
}

.theme-menu{
    position:static;
    width:100%;
}

}

@keyframes menuFade{

from{
    opacity:0;
    transform:translateY(-10px);
}

to{
    opacity:1;
    transform:translateY(0);
}

}
</style>
  <button class="mobile-menu-btn" id="mobileMenuBtn">
        ☰
    </button>

  <div class="topbar-right" id="topbarMenu">
    <a class="location-btn"  href="{{ url('/')}}">Home</a>

    <a class="location-btn"  href="{{ url('/')}}/city">City</a>
 
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
    <span class="dot-online"></span>
    <span>Chat on WhatsApp</span>
  </a>

  <a class="btn btn-ghost topbar-partner"
     href="#"
     data-modal-target="tutorModal">
    New Tutor Partner
  </a>

   @if (!session()->has('userid'))
              <a href="{{ url('/login') }}" class="location-btn">Login</a>
               
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

    const menuBtn = document.getElementById("mobileMenuBtn");
    const menu = document.getElementById("topbarMenu");

    if (!menuBtn || !menu) return;

    menuBtn.addEventListener("click", function () {

        menu.classList.toggle("active");

        if (menu.classList.contains("active")) {
            this.innerHTML = "✕";
        } else {
            this.innerHTML = "☰";
        }

    });

    // Desktop par resize hone par menu reset
    window.addEventListener("resize", function () {

        if (window.innerWidth > 991) {

            menu.classList.remove("active");
            menuBtn.innerHTML = "☰";

        }

    });

});
</script>