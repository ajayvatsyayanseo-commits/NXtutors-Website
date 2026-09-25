/*
 * NX HUB behaviour. Small and optional: without it every guide simply shows
 * in full and every tab panel is visible.
 *  - Folds long city guides after the first screens, with "Read the full
 *    guide"; any contents link or #hash opens it first.
 *  - Highlights the contents link for the section in view.
 */
(function () {
  function init() {
    document.querySelectorAll('.nx-guide').forEach(function (guide) {
      var body = guide.querySelector('.nx-guide__body');
      var toc = guide.querySelector('.nx-guide__toc');
      if (!body) return;

      var unfold = function () {
        body.classList.remove('is-folded');
        var b = guide.querySelector('.nx-guide__unfold');
        if (b) b.remove();
      };

      var hashInside = location.hash && body.querySelector(location.hash.replace(/[^#\w-]/g, ''));
      if (body.scrollHeight > 1700 && !hashInside) {
        body.classList.add('is-folded');
        var wrap = document.createElement('div');
        wrap.className = 'nx-guide__unfold';
        var btn = document.createElement('button');
        btn.type = 'button';
        btn.textContent = 'Read the full guide';
        btn.addEventListener('click', unfold);
        wrap.appendChild(btn);
        body.insertAdjacentElement('afterend', wrap);
      }

      if (!toc) return;
      var links = Array.prototype.slice.call(toc.querySelectorAll('a[href^="#"]'));
      links.forEach(function (a) { a.addEventListener('click', unfold); });

      if (!('IntersectionObserver' in window)) return;
      var byId = {};
      links.forEach(function (a) { byId[a.getAttribute('href').slice(1)] = a; });
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
          if (!e.isIntersecting) return;
          var a = byId[e.target.id];
          if (!a) return;
          links.forEach(function (l) { l.classList.remove('is-active'); });
          a.classList.add('is-active');
          if (toc.scrollWidth > toc.clientWidth) {
            toc.scrollTo({ left: a.offsetLeft - 16, behavior: 'smooth' });
          }
        });
      }, { rootMargin: '-30% 0px -60% 0px' });
      Object.keys(byId).forEach(function (id) {
        var sec = document.getElementById(id);
        if (sec) io.observe(sec);
      });
    });
  }
  // Blog posts: regroup the editor's HTML for reading. Nothing is removed;
  // elements are only moved into wrappers.
  function enhanceArticle(art) {
    var isLabelled = function (el) {
      if (el.tagName !== 'P') return false;
      var first = el.firstElementChild;
      var text = el.textContent.trim();
      return !!first && first.tagName === 'STRONG' && text.indexOf(first.textContent.trim()) === 0
        && text.length < 260 && text.length > first.textContent.trim().length + 3;
    };
    var isShortLine = function (el) {
      var text = el.textContent.trim();
      return el.tagName === 'P' && !el.querySelector('img,iframe,table,a') && text.length > 0
        && text.length < 110 && !/:$/.test(text);
    };
    var groupRuns = function (test, min, make) {
      var run = [];
      var flush = function () { if (run.length >= min) make(run); run = []; };
      Array.prototype.slice.call(art.children).forEach(function (k) { if (test(k)) run.push(k); else flush(); });
      flush();
    };

    groupRuns(isLabelled, 3, function (run) {
      var box = document.createElement('div'); box.className = 'nx-tiles';
      run[0].parentNode.insertBefore(box, run[0]);
      run.forEach(function (p) { p.classList.add('nx-tile'); box.appendChild(p); });
    });
    groupRuns(isShortLine, 3, function (run) {
      var ul = document.createElement('ul'); ul.className = 'nx-checklist';
      run[0].parentNode.insertBefore(ul, run[0]);
      run.forEach(function (p) {
        var li = document.createElement('li');
        while (p.firstChild) li.appendChild(p.firstChild);
        p.parentNode.removeChild(p); ul.appendChild(li);
      });
    });

    // H3 sub-sections (two or more in a row, each short) become cards.
    var groups = [], cur = null;
    Array.prototype.slice.call(art.children).forEach(function (k) {
      if (k.tagName === 'H3') { cur = { h: k, rest: [] }; groups.push(cur); return; }
      if (k.tagName === 'H2' || k.tagName === 'H1') { cur = null; groups.push(null); return; }
      if (cur) cur.rest.push(k);
    });
    var runs = [], r = [];
    groups.forEach(function (g) {
      if (g && g.rest.length <= 4) { r.push(g); return; }
      if (r.length >= 2) runs.push(r);
      r = [];
    });
    if (r.length >= 2) runs.push(r);
    runs.forEach(function (run) {
      var wrap = document.createElement('div'); wrap.className = 'nx-subcards';
      run[0].h.parentNode.insertBefore(wrap, run[0].h);
      run.forEach(function (g) {
        var card = document.createElement('div'); card.className = 'nx-subcard';
        card.appendChild(g.h);
        g.rest.forEach(function (e) { card.appendChild(e); });
        wrap.appendChild(card);
      });
    });

    // Contents bar from the H2s.
    var h2s = art.querySelectorAll('h2');
    if (h2s.length >= 3) {
      var nav = document.createElement('nav');
      nav.className = 'nx-article__toc';
      nav.setAttribute('aria-label', 'In this guide');
      Array.prototype.forEach.call(h2s, function (h, i) {
        if (!h.id) h.id = 'section-' + (i + 1);
        var a = document.createElement('a');
        a.href = '#' + h.id;
        a.textContent = h.textContent.replace(/^\s*chapter\s+\d+\s*[:.–-]\s*/i, '').trim();
        nav.appendChild(a);
      });
      art.insertBefore(nav, art.firstChild);
    }
  }

  // Home FAQ: on phones show five questions, then a "Show all" button.
  function foldFaq() {
    if (!window.matchMedia || !window.matchMedia('(max-width: 719px)').matches) return;
    document.querySelectorAll('.faq-grid').forEach(function (grid) {
      var total = grid.querySelectorAll('.faq-item').length;
      if (total <= 6) return;
      grid.classList.add('nx-faq-folded');
      var wrap = document.createElement('div'); wrap.className = 'nx-faq-more nx-more';
      var btn = document.createElement('button'); btn.type = 'button';
      btn.style.cssText = 'cursor:pointer;padding:9px 16px;border-radius:999px;border:1px solid rgba(255,255,255,.16);background:none;color:inherit;font-weight:700';
      btn.textContent = 'Show all ' + total + ' questions';
      btn.addEventListener('click', function () { grid.classList.remove('nx-faq-folded'); wrap.remove(); });
      wrap.appendChild(btn);
      grid.insertAdjacentElement('afterend', wrap);
    });
  }

  var start = function () {
    init();
    foldFaq();
    document.querySelectorAll('.nx-article').forEach(enhanceArticle);
  };
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', start);
  else start();
})();
