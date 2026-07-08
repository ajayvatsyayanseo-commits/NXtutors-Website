// ==========================
// Footer year
// ==========================
document.getElementById('year').textContent = new Date().getFullYear();

// ==========================
// FULL THEME CONFIG
// ==========================
const themeConfig = {
  default: {
    label: 'Default',
    bgPage: 'radial-gradient(circle at top left,#FDE3FF 0,#B5C8FF 40%,#0A1024 100%)',
    bgShell: 'rgba(10,16,36,0.80)',
    textMain: '#ffffff',
    textSubtle: '#C6CCFF',
    cardBg: 'rgba(255,255,255,0.08)',
    cardBorder: 'rgba(255,255,255,0.18)',
    tileBg: 'rgba(255,255,255,0.10)',
    tileBorder: 'rgba(255,255,255,0.22)',
    accent: '#FFB23C',
    accentOnDark: '#111827',
    heroTint: 'linear-gradient(120deg,rgba(10,16,36,0.95),rgba(10,16,36,0.6))'
  },

  blue: {
    label: 'Blue',
    bgPage: 'linear-gradient(200deg,#1e3a8a,#0f172a)',
    bgShell: 'rgba(15,23,42,0.85)',
    textMain: '#E2E8F0',
    textSubtle: '#94A3B8',
    cardBg: 'rgba(255,255,255,0.05)',
    cardBorder: 'rgba(255,255,255,0.12)',
    tileBg: 'rgba(255,255,255,0.08)',
    tileBorder: 'rgba(255,255,255,0.15)',
    accent: '#3B82F6',
    accentOnDark: '#ffffff',
    heroTint: 'linear-gradient(130deg,rgba(30,64,175,0.95),rgba(15,23,42,0.7))'
  },

  green: {
    label: 'Green',
    bgPage: 'linear-gradient(200deg,#064e3b,#0f172a)',
    bgShell: 'rgba(6,78,59,0.85)',
    textMain: '#E7FFEF',
    textSubtle: '#A7F3D0',
    cardBg: 'rgba(255,255,255,0.08)',
    cardBorder: 'rgba(255,255,255,0.18)',
    tileBg: 'rgba(255,255,255,0.12)',
    tileBorder: 'rgba(255,255,255,0.22)',
    accent: '#22C55E',
    accentOnDark: '#0F172A',
    heroTint: 'linear-gradient(130deg,rgba(6,95,70,0.95),rgba(15,23,42,0.7))'
  },

  yellow: {
    label: 'Yellow',
    bgPage: 'linear-gradient(210deg,#facc15,#0f172a)',
    bgShell: 'rgba(113,63,18,0.9)',
    textMain: '#FEFCE8',
    textSubtle: '#FEF08A',
    cardBg: 'rgba(0,0,0,0.35)',
    cardBorder: 'rgba(250,204,21,0.45)',
    tileBg: 'rgba(0,0,0,0.30)',
    tileBorder: 'rgba(250,204,21,0.40)',
    accent: '#FACC15',
    accentOnDark: '#0F172A',
    heroTint: 'linear-gradient(130deg,rgba(180,83,9,0.95),rgba(15,23,42,0.7))'
  },

  pink: {
    label: 'Pink',
    bgPage: 'linear-gradient(180deg,#4b0f31,#150314)',
    bgShell: 'rgba(75,15,49,0.85)',
    textMain: '#FFE4F0',
    textSubtle: '#F9A8D4',
    cardBg: 'rgba(255,255,255,0.08)',
    cardBorder: 'rgba(255,255,255,0.18)',
    tileBg: 'rgba(255,255,255,0.12)',
    tileBorder: 'rgba(255,255,255,0.22)',
    accent: '#EC4899',
    accentOnDark: '#0F172A',
    heroTint: 'linear-gradient(130deg,rgba(157,23,77,0.95),rgba(15,23,42,0.7))'
  },

  orange: {
    label: 'Orange',
    bgPage: 'linear-gradient(200deg,#7c2d12,#0f172a)',
    bgShell: 'rgba(124,45,18,0.85)',
    textMain: '#FFECE1',
    textSubtle: '#FED7AA',
    cardBg: 'rgba(255,255,255,0.10)',
    cardBorder: 'rgba(255,255,255,0.22)',
    tileBg: 'rgba(255,255,255,0.12)',
    tileBorder: 'rgba(255,255,255,0.26)',
    accent: '#FB923C',
    accentOnDark: '#111827',
    heroTint: 'linear-gradient(130deg,rgba(180,83,9,0.95),rgba(15,23,42,0.7))'
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
    btn.dataset.active = btn.getAttribute('data-theme-option') === name ? 'true' : 'false';
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

// Initial theme
let initialTheme = 'default';
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

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.toggle('is-active', i === index);
    });
    dots.forEach((dot, i) => {
      dot.classList.toggle('is-active', i === index);
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
    timer = setInterval(nextSlide, interval);
  }

  function stopAuto() {
    if (timer) {
      clearInterval(timer);
      timer = null;
    }
  }

  // Dot click
  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      showSlide(index);
      startAuto();
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

  // Pause autoplay on hover (desktop)
  slider.addEventListener('mouseenter', stopAuto);
  slider.addEventListener('mouseleave', startAuto);

  // Init
  showSlide(0);
  startAuto();
})();
