/*
 * Ask NXT AI: predicted questions while typing ("fee" → "What do maths tutors
 * in Gurugram charge?"). Built in the browser from question templates, the
 * page's own context (window.nxgPageContext) and the search dictionary
 * (/search/suggest.json, cached), so predicting costs nothing. Picking one
 * sends it; common questions like fees are then answered without the model
 * (App\NxtAi\Support\LocalAnswer).
 */
(function () {
  'use strict';

  var dict = null, list = null, current = [], active = -1;

  function el() { return document.getElementById('nxAskAiInput'); }
  function norm(s) { return (s || '').toLowerCase().replace(/[^a-z0-9\s]/g, ' ').replace(/\s+/g, ' ').trim(); }

  function load() {
    if (dict) return;
    try {
      var c = JSON.parse(sessionStorage.getItem('nx_sugg') || 'null');
      if (c && c.items) { dict = c; return; }
    } catch (e) {}
    fetch('/search/suggest.json', { credentials: 'same-origin' }).then(function (r) { return r.json(); }).then(function (d) {
      dict = d;
      try { sessionStorage.setItem('nx_sugg', JSON.stringify(d)); } catch (e) {}
    }).catch(function () {});
  }

  function ctx() {
    var c = window.nxgPageContext || {};
    return { subject: c.subject || '', place: c.area || c.city || '', cls: c['class'] || '' };
  }

  // A subject named in what was typed, else the page's own subject.
  function subjectIn(q) {
    if (dict) {
      var best = null;
      dict.items.forEach(function (i) {
        [i.l].concat(i.a || []).forEach(function (t) {
          var k = norm(t);
          var hit = (' ' + q + ' ').indexOf(' ' + k) >= 0 ||
            q.split(' ').some(function (w) { return w.length >= 3 && k.indexOf(w) === 0; });
          if (k.length > 2 && hit && (!best || k.length > best.k.length)) best = { k: k, s: i.s };
        });
      });
      if (best) return best.s;
    }
    return ctx().subject;
  }

  var GENERAL = [
    'What are the tutor fees?',
    'How does the free demo work?',
    'Can classes be at home or online?',
    'What timings are available?',
    'Can I change the tutor later?',
    'Book a free demo class',
    'Find a tutor near me',
    'How do you verify tutors?'
  ];

  function predict(raw) {
    var q = norm(raw);
    if (q.length < 2) return [];
    var s = subjectIn(q), c = ctx(), p = c.place;
    var board = (q.match(/\b(cbse|icse|isc|igcse|ib)\b/) || [])[1];
    var sub = s ? (board && !/^(ib|igcse|isc|icse|cbse)\b/i.test(s) ? board.toUpperCase() + ' ' : '') + s.replace(/^Mathematics$/, 'Maths') : '';
    var out = [];
    function add(t) { if (t && out.indexOf(t) < 0) out.push(t); }

    if (/\b(fee|fees|cost|charge|price|rate|how much|kitna)/.test(q)) {
      if (sub) add('What do ' + sub.toLowerCase() + ' tutors' + (p ? ' in ' + p : '') + ' charge?');
      add('What are the tutor fees?');
    }
    if (/\b(demo|trial)/.test(q)) {
      add('How does the free demo work?');
      add('Book a free demo' + (sub ? ' for ' + sub : ' class'));
    }
    if (/\b(find|need|want|tutor|teacher|near|looking)/.test(q) || sub) {
      add('Find ' + (sub && /^(a|e|i|o|u|ib|igcse|isc|icse)/i.test(sub) ? 'an ' : 'a ') + (sub ? sub + ' ' : '') + 'home tutor' + (c.cls ? ' for ' + c.cls : '') + (p ? ' in ' + p : ' near me'));
      add('Find an online ' + (sub ? sub + ' ' : '') + 'tutor');
    }
    if (/\b(online|home|offline)/.test(q)) add('Can ' + (sub ? sub.toLowerCase() + ' ' : '') + 'classes be at home or online?');
    if (/\b(time|timing|slot|weekend|evening)/.test(q)) add('What timings are available?');
    if (/\b(change|switch|replace)/.test(q)) add('Can I change the tutor later?');
    if (/\b(verif|safe|trust|background)/.test(q)) add('How do you verify tutors?');
    if (sub && !/\b(fee|demo)/.test(q)) {
      add('What do ' + sub.toLowerCase() + ' tutors' + (p ? ' in ' + p : '') + ' charge?');
      add('Book a free demo for ' + sub);
    }
    // Plain prefix match on the common questions.
    GENERAL.forEach(function (g) { if (norm(g).indexOf(q) === 0 || (' ' + norm(g)).indexOf(' ' + q) >= 0) add(g); });

    return out.slice(0, 5);
  }

  function ensureList(input) {
    if (list && list.isConnected) return list;
    list = document.createElement('ul');
    list.className = 'nx-sugg nx-sugg--chat';
    list.setAttribute('role', 'listbox');
    list.id = 'nxChatSugg';
    list.hidden = true;
    var box = input.closest('.nxg-chat-input') || input.parentNode;
    box.style.position = 'relative';
    box.appendChild(list);
    list.addEventListener('mousedown', function (e) {
      var li = e.target.closest('li[data-i]');
      if (li) { e.preventDefault(); choose(+li.getAttribute('data-i')); }
    });
    return list;
  }

  function render(input, items) {
    ensureList(input);
    current = items; active = -1;
    list.innerHTML = '';
    items.forEach(function (t, i) {
      var li = document.createElement('li');
      li.className = 'nx-sugg__item'; li.setAttribute('role', 'option'); li.setAttribute('data-i', i);
      li.textContent = t;
      list.appendChild(li);
    });
    list.hidden = !items.length;
  }

  function close() { if (list) list.hidden = true; current = []; }

  function choose(i) {
    var input = el(), send = document.getElementById('nxAskAiSend');
    if (!input || !current[i]) return;
    input.value = current[i];
    close();
    if (send) send.click();
  }

  document.addEventListener('focusin', function (e) { if (e.target && e.target.id === 'nxAskAiInput') load(); });

  var timer;
  document.addEventListener('input', function (e) {
    if (!e.target || e.target.id !== 'nxAskAiInput') return;
    var input = e.target;
    clearTimeout(timer);
    timer = setTimeout(function () { render(input, predict(input.value)); }, 60);
  });

  // Capture phase, so a picked prediction is sent before the chat's own Enter handler runs.
  document.addEventListener('keydown', function (e) {
    if (!e.target || e.target.id !== 'nxAskAiInput' || !list || list.hidden) return;
    if (e.key === 'ArrowDown' || e.key === 'ArrowUp') {
      e.preventDefault();
      active = (active + (e.key === 'ArrowDown' ? 1 : -1) + current.length) % current.length;
      Array.prototype.forEach.call(list.children, function (li, i) { li.classList.toggle('is-active', i === active); });
    } else if (e.key === 'Escape') {
      close();
    } else if (e.key === 'Enter') {
      if (active >= 0) { e.preventDefault(); e.stopImmediatePropagation(); choose(active); } else { close(); }
    }
  }, true);

  document.addEventListener('focusout', function (e) {
    if (e.target && e.target.id === 'nxAskAiInput') setTimeout(close, 120);
  });

  window.nxChatSuggest = { predict: predict };
})();
