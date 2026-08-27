// ==========================
// Footer year
// ==========================
// Guarded: a missing #year used to throw here and take the theme picker and
// hero slider down with it.
const yearEl = document.getElementById('year');
if (yearEl) yearEl.textContent = new Date().getFullYear();

// ==========================
// Skip-link target — <main> lives in each view, so it gets its id here
// rather than editing every template.
// ==========================
(function () {
  const main = document.querySelector('main');
  if (main && !main.id) {
    main.id = 'nxt-content';
    main.setAttribute('tabindex', '-1');
  }
})();

// ==========================
// Drag-to-scroll for horizontal strips (reviews, blogs, related rows).
// Touch swipes natively; this gives the same gesture to mouse users,
// so the strips need no arrow buttons.
// ==========================
document.querySelectorAll('.review-track, .nxscroll, .scroll-row').forEach(function (strip) {
  let startX = 0, startLeft = 0, dragging = false, moved = false;

  strip.addEventListener('pointerdown', function (e) {
    if (e.pointerType !== 'mouse') return;   // touch already scrolls
    dragging = true; moved = false;
    startX = e.clientX;
    startLeft = strip.scrollLeft;
    strip.style.scrollSnapType = 'none';     // snap fights mid-drag updates
    strip.style.scrollBehavior = 'auto';
    strip.style.userSelect = 'none';         // else text selection wins the drag
    e.preventDefault();
  });
  window.addEventListener('pointermove', function (e) {
    if (!dragging) return;
    const dx = e.clientX - startX;
    if (Math.abs(dx) > 4) moved = true;
    strip.scrollLeft = startLeft - dx;
  });
  window.addEventListener('pointerup', function () {
    if (!dragging) return;
    dragging = false;
    strip.style.scrollSnapType = '';
    strip.style.scrollBehavior = '';
    strip.style.userSelect = '';
  });
  // a drag must not fire the card's link on release
  strip.addEventListener('click', function (e) {
    if (moved) { e.preventDefault(); e.stopPropagation(); moved = false; }
  }, true);
  strip.style.cursor = 'grab';
});

// ==========================
// THEME CONFIG
// --------------------------
// Every theme shares one neutral slate ground and varies only the accent, so
// switching themes changes the product's mood, not its identity. Accent text
// colour is fixed dark because all six accents are light enough to need it.
// ==========================
const NXT_GROUND = {
  bgShell: 'transparent',
  textMain: '#EEF2F9',
  textSubtle: '#A6B3CA',
  cardBg: 'rgba(255,255,255,0.05)',
  cardBorder: 'rgba(255,255,255,0.09)',
  tileBg: 'rgba(255,255,255,0.07)',
  tileBorder: 'rgba(255,255,255,0.12)',
  accentOnDark: '#0A1020'
};

// Ground = deep slate, lifted by a single wide accent bloom in the top-left.
const ground = (tint) =>
  'radial-gradient(1200px 620px at 12% -8%,' + tint + ' 0%,rgba(8,14,27,0) 62%),' +
  'linear-gradient(180deg,#0B1424 0%,#080E1B 55%,#060A14 100%)';

const themeConfig = {
  default: {
    ...NXT_GROUND,
    label: 'Marigold',
    bgPage: ground('rgba(245,165,36,0.13)'),
    accent: '#F5A524',
    heroTint: 'linear-gradient(120deg,rgba(8,14,27,0.94),rgba(8,14,27,0.55))'
  },

  blue: {
    ...NXT_GROUND,
    label: 'Azure',
    bgPage: ground('rgba(76,154,255,0.15)'),
    accent: '#4C9AFF',
    heroTint: 'linear-gradient(120deg,rgba(8,14,27,0.94),rgba(12,26,52,0.55))'
  },

  green: {
    ...NXT_GROUND,
    label: 'Jade',
    bgPage: ground('rgba(53,192,138,0.14)'),
    accent: '#35C08A',
    heroTint: 'linear-gradient(120deg,rgba(8,14,27,0.94),rgba(8,32,26,0.55))'
  },

  yellow: {
    ...NXT_GROUND,
    label: 'Amber',
    bgPage: ground('rgba(255,203,71,0.14)'),
    accent: '#FFCB47',
    heroTint: 'linear-gradient(120deg,rgba(8,14,27,0.94),rgba(34,26,8,0.55))'
  },

  pink: {
    ...NXT_GROUND,
    label: 'Rose',
    bgPage: ground('rgba(255,107,157,0.14)'),
    accent: '#FF6B9D',
    heroTint: 'linear-gradient(120deg,rgba(8,14,27,0.94),rgba(40,12,28,0.55))'
  },

  orange: {
    ...NXT_GROUND,
    label: 'Ember',
    bgPage: ground('rgba(255,122,69,0.14)'),
    accent: '#FF7A45',
    heroTint: 'linear-gradient(120deg,rgba(8,14,27,0.94),rgba(42,20,10,0.55))'
  }
};

// ==========================
// THEME APPLY LOGIC
// ==========================
const root = document.documentElement;
const themeToggle = document.getElementById('themeToggle');
const themeMenu = document.getElementById('themeMenu');
const themeLabel = document.getElementById('themeLabel');
const themeOptions = document.querySelectorAll('.theme-option');

function applyTheme(name) {
  const t = themeConfig[name] || themeConfig.default;

  // background + shell
  root.style.setProperty('--bg-page', t.bgPage);
  root.style.setProperty('--bg-shell', t.bgShell);

  // text
  root.style.setProperty('--text-main', t.textMain);
  root.style.setProperty('--text-subtle', t.textSubtle);

  // cards / tiles
  root.style.setProperty('--card-bg', t.cardBg);
  root.style.setProperty('--card-border', t.cardBorder);
  root.style.setProperty('--tile-bg', t.tileBg);
  root.style.setProperty('--tile-border', t.tileBorder);

  // buttons / accents
  root.style.setProperty('--accent', t.accent);
  root.style.setProperty('--accent-on-dark', t.accentOnDark);

  // hero tint (for hero slider overlay if you use it)
  root.style.setProperty('--hero-tint', t.heroTint || 'linear-gradient(120deg,rgba(15,23,42,0.9),rgba(15,23,42,0.5))');

  // label in picker
  if (themeLabel) themeLabel.textContent = t.label;

  // active state tick
  themeOptions.forEach(btn => {
    const isActive = btn.getAttribute('data-theme-option') === name;
    btn.dataset.active = isActive ? 'true' : 'false';
    btn.setAttribute('aria-checked', String(isActive));
  });

  try {
    localStorage.setItem('nxt_theme', name);
  } catch (e) {
    // ignore
  }
}

// open / close menu
if (themeToggle && themeMenu) {
  themeToggle.addEventListener('click', (e) => {
    e.stopPropagation();
    const isOpen = themeMenu.style.display === 'block';
    themeMenu.style.display = isOpen ? 'none' : 'block';
  });

  // close on outside click
  document.addEventListener('click', (event) => {
    if (!themeToggle.contains(event.target) && !themeMenu.contains(event.target)) {
      themeMenu.style.display = 'none';
    }
  });
}

// click on theme option
themeOptions.forEach(btn => {
  btn.addEventListener('click', () => {
    const name = btn.getAttribute('data-theme-option');
    applyTheme(name);
    if (themeMenu) themeMenu.style.display = 'none';
  });
});

// Initial theme. Azure is the house colour a first-time visitor sees; a
// returning visitor keeps whatever they picked, restored from localStorage
// just below.
let initialTheme = 'blue';
try {
  const saved = localStorage.getItem('nxt_theme');
  if (saved && themeConfig[saved]) initialTheme = saved;
} catch (e) {}
applyTheme(initialTheme);

// ==========================
// HERO SLIDER
// ==========================
(function () {
  const slider = document.getElementById('heroSlider');
  const dotsContainer = document.getElementById('heroDots');
  const prevBtn = document.querySelector('.hero-arrow--prev');
  const nextBtn = document.querySelector('.hero-arrow--next');

  if (!slider || !dotsContainer) return;

  const slides = Array.from(slider.querySelectorAll('.hero-slide'));
  const dots = Array.from(dotsContainer.querySelectorAll('.hero-dot'));

  let current = 0;
  let timer = null;
  const interval = 7000; // 7 seconds

  // Autoplay is motion the visitor did not ask for: honour the OS setting.
  const stillPreferred = window.matchMedia('(prefers-reduced-motion: reduce)');

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.toggle('is-active', i === index);
      slide.setAttribute('aria-hidden', String(i !== index));
    });
    dots.forEach((dot, i) => {
      dot.classList.toggle('is-active', i === index);
      dot.setAttribute('aria-current', String(i === index));
      if (!dot.hasAttribute('tabindex') && dot.tagName !== 'BUTTON') {
        dot.setAttribute('tabindex', '0');
        dot.setAttribute('role', 'button');
        dot.setAttribute('aria-label', 'Show slide ' + (i + 1));
      }
    });
    current = index;
  }

  function nextSlide() {
    const next = (current + 1) % slides.length;
    showSlide(next);
  }

  function prevSlide() {
    const prev = (current - 1 + slides.length) % slides.length;
    showSlide(prev);
  }

  function startAuto() {
    stopAuto();
    if (stillPreferred.matches) return;
    timer = setInterval(nextSlide, interval);
  }

  function stopAuto() {
    if (timer) {
      clearInterval(timer);
      timer = null;
    }
  }

  // Dot click / keyboard
  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      showSlide(index);
      startAuto();
    });
    dot.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        showSlide(index);
        startAuto();
      }
    });
  });

  // Arrows (optional – only works if you added buttons in HTML)
  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      prevSlide();
      startAuto();
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      nextSlide();
      startAuto();
    });
  }

  // Pause autoplay on hover (desktop), on keyboard focus, and in background tabs
  slider.addEventListener('mouseenter', stopAuto);
  slider.addEventListener('mouseleave', startAuto);
  slider.addEventListener('focusin', stopAuto);
  slider.addEventListener('focusout', startAuto);
  document.addEventListener('visibilitychange', () => {
    document.hidden ? stopAuto() : startAuto();
  });
  stillPreferred.addEventListener('change', () => {
    stillPreferred.matches ? stopAuto() : startAuto();
  });

  // Init
  showSlide(0);
  startAuto();
})();
