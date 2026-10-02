{{-- Sticky apply bar, phones only (hidden from 900px): marigold = the action, green = WhatsApp. Plus the hero tilt script. Expects $jobs. --}}
<div class="nxj-applybar" role="region" aria-label="Apply as a tutor">
  <a class="nxj-btn nxj-btn--act" href="{{ url('/become-a-tutor') }}" data-modal-target="tutorModal">Apply as a tutor</a>
  <a class="nxj-btn nxj-btn--wa" href="{{ \App\Support\JobsPage::applyWa($jobs['place'] ?? null) }}" target="_blank" rel="nofollow noopener">WhatsApp</a>
</div>
<script>
/* Hero depth: a small tilt toward the pointer and a slow parallax on scroll.
   Off for reduced motion and for touch screens; CSS alone draws the static depth. */
(function () {
  var art = document.querySelector('[data-nxj-tilt]');
  if (!art || !window.matchMedia || !window.requestAnimationFrame) return;
  if (matchMedia('(prefers-reduced-motion: reduce)').matches || !matchMedia('(hover: hover) and (pointer: fine)').matches) return;
  var hero = art.closest('.nxj-hero') || art, rx = 0, ry = 0, raf = 0;
  function paint() {
    raf = 0;
    art.style.setProperty('--rx', rx.toFixed(2) + 'deg');
    art.style.setProperty('--ry', ry.toFixed(2) + 'deg');
    art.style.setProperty('--py', (Math.min(window.scrollY || 0, 600) * -0.06).toFixed(1) + 'px');
  }
  function queue() { if (!raf) raf = requestAnimationFrame(paint); }
  hero.addEventListener('pointermove', function (e) {
    var r = hero.getBoundingClientRect();
    ry = ((e.clientX - r.left) / r.width - 0.5) * 10;
    rx = -((e.clientY - r.top) / r.height - 0.5) * 8;
    queue();
  });
  hero.addEventListener('pointerleave', function () { rx = 0; ry = 0; queue(); });
  window.addEventListener('scroll', queue, { passive: true });
  art.classList.add('is-live');
})();
</script>
