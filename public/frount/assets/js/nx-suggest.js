/*
 * NXTutors predictive search (hero search box).
 *
 * Costs nothing per keystroke: the dictionary (/search/suggest.json: subjects
 * and skills we have tutors for, subject pages, cities and area pages, and
 * what parents pick most) is fetched once and cached; phrases are completed
 * here. Picking a page suggestion opens that page; any other suggestion fills
 * the search fields and runs the normal search.
 *
 * Score = 3·text match + 2·has a page + 1.5·tutors + 1.2·place + 0.5·popularity
 */
(function () {
  'use strict';

  var input = document.getElementById('heroSearchInput');
  if (!input) return;
  var placeInput = document.getElementById('heroSearchArea');
  var goBtn = document.getElementById('heroSearchBtn');
  var field = input.closest('.nxh__field') || input.parentNode;
  var SRC = (window.nxSuggestUrl || '/search/suggest.json');

  var dict = null, loading = null, list, open = false, active = -1, current = [];

  // ---------- session id (random, this browser only) ----------
  function sid() {
    try {
      var s = localStorage.getItem('nx_sid');
      if (!s) { s = Math.random().toString(36).slice(2) + Date.now().toString(36); localStorage.setItem('nx_sid', s); }
      return s;
    } catch (e) { return ''; }
  }
  window.nxSearchSid = sid;

  // ---------- dictionary ----------
  function load() {
    if (dict || loading) return loading;
    try {
      var cached = JSON.parse(sessionStorage.getItem('nx_sugg2') || 'null');
      if (cached && cached.items) { dict = prep(cached); return Promise.resolve(dict); }
    } catch (e) {}
    loading = fetch(SRC, { credentials: 'same-origin' }).then(function (r) { return r.json(); }).then(function (d) {
      try { sessionStorage.setItem('nx_sugg2', JSON.stringify(d)); } catch (e) {}
      dict = prep(d);
      return dict;
    }).catch(function () { loading = null; });
    return loading;
  }

  function norm(s) {
    return (s || '').toLowerCase().replace(/[^a-z0-9ऀ-ॿ\s]/g, ' ').replace(/\s+/g, ' ').trim();
  }

  // Words parents type that are not the subject.
  var BOARD = { cbse: 'CBSE', icse: 'ICSE', isc: 'ISC', ib: 'IB', igcse: 'IGCSE' };
  var SYN = { math: 'maths', mathematics: 'maths', phy: 'physics', phys: 'physics', chem: 'chemistry', bio: 'biology',
    iit: 'jee', eng: 'english', gurgaon: 'gurugram', bangalore: 'bengaluru', bombay: 'mumbai', calcutta: 'kolkata',
    madras: 'chennai', tution: 'tuition', tuter: 'tutor', teacher: 'tutor' };
  var FILL = { tutor: 1, tutors: 1, tuition: 1, classes: 1, coaching: 1, for: 1, in: 1, the: 1, best: 1, near: 1, me: 1, a: 1 };

  function prep(d) {
    var terms = [];
    (d.items || []).forEach(function (i) {
      [i.l].concat(i.a || []).forEach(function (t) { terms.push({ t: norm(t), item: i }); });
    });
    (d.places || []).forEach(function (p) {
      p.k = norm(p.l); p.ak = (p.a || []).map(norm);
    });
    (d.pages || []).forEach(function (p) { p.k = norm(p.l); });
    d.terms = terms;
    return d;
  }

  // One typo (a wrong, missing, extra or swapped letter) for words of 4+ letters.
  function near1(a, b) {
    if (a === b) return true;
    if (Math.abs(a.length - b.length) > 1 || a.length < 4) return false;
    if (a.length === b.length) {
      var d = [];
      for (var x = 0; x < a.length; x++) if (a[x] !== b[x]) d.push(x);
      if (d.length === 2 && d[1] === d[0] + 1 && a[d[0]] === b[d[1]] && a[d[1]] === b[d[0]]) return true;
    }
    var i = 0, j = 0, edits = 0;
    while (i < a.length && j < b.length) {
      if (a[i] === b[j]) { i++; j++; continue; }
      if (++edits > 1) return false;
      if (a.length > b.length) i++; else if (b.length > a.length) j++; else { i++; j++; }
    }
    return edits + (a.length - i) + (b.length - j) <= 1;
  }

  // 1 = phrase starts with the query, .8 = a word starts with it, .6 = one typo.
  function textMatch(phrase, q) {
    if (!q) return 0;
    if (phrase.indexOf(q) === 0) return 1;
    if ((' ' + phrase).indexOf(' ' + q) >= 0) return 0.8;
    var qw = q.split(' '), pw = phrase.split(' ');
    var ok = qw.every(function (w, n) {
      return pw.some(function (p) { return p.indexOf(w) === 0 || (n < qw.length - 1 || w.length >= 4) && near1(w, p.slice(0, Math.max(w.length, 4))); });
    });
    return ok ? 0.6 : 0;
  }

  function knownPlace() {
    var v = placeInput && placeInput.value.trim();
    if (v) return v;
    var loc = document.getElementById('userLocation');
    var t = loc && loc.textContent.trim();
    return t && !/detect|select|set location/i.test(t) ? t.split(',')[0].trim() : '';
  }

  // ---------- suggestions ----------
  function suggest(raw) {
    var q = norm(raw);
    if (!q || !dict) return [];
    var words = q.split(' ').map(function (w) { return SYN[w] || w; });
    var board = null, cls = null, mode = null, rest = [];
    for (var n = 0; n < words.length; n++) {
      var w = words[n];
      if (BOARD[w] && n < words.length - 1) { board = BOARD[w]; continue; }
      if ((w === 'class' || w === 'grade') && /^\d{1,2}$/.test(words[n + 1] || '')) { cls = words[++n]; continue; }
      if (/^\d{1,2}(st|nd|rd|th)$/.test(w)) { cls = parseInt(w, 10); continue; }
      if (w === 'online') { mode = 'online'; continue; }
      if (w === 'home' || w === 'offline') { mode = 'home'; continue; }
      if (FILL[w] && n < words.length - 1) continue;
      rest.push(w);
    }
    if (BOARD[words[words.length - 1]] && !rest.length) board = BOARD[words[words.length - 1]];
    var text = rest.join(' ');

    // Place typed in the query ("maths sector 56"): take the longest match at the end.
    var place = null, placeText = text;
    for (var k = rest.length; k > 0 && !place; k--) {
      var tail = rest.slice(rest.length - k).join(' ');
      if (tail.length < 3) break;
      dict.places.forEach(function (p) {
        if (!place && (p.k.indexOf(tail) === 0 || p.ak.indexOf(tail) >= 0)) { place = p; placeText = rest.slice(0, rest.length - k).join(' '); }
      });
    }
    var here = place ? place.l : knownPlace();

    var out = [];
    function add(label, score, action) {
      if (out.some(function (o) { return o.label.toLowerCase() === label.toLowerCase(); })) return;
      out.push({ label: label, score: score, action: action });
    }
    function pop(label) {
      var n = (dict.pop || {})[label.toLowerCase()] || 0;
      return Math.min(1, Math.log(1 + n) / 5);
    }

    // Subjects and skills.
    var seen = {};
    // The query without the place and mode words, board and class kept:
    // "ib m" should find "IB Maths" itself.
    var whole = words.filter(function (w) { return w !== 'online' && w !== 'home' && w !== 'offline' && !FILL[w]; }).join(' ');
    if (place) whole = whole.replace(place.k, '').trim();
    dict.terms.forEach(function (t) {
      var m = Math.max(placeText ? textMatch(t.t, placeText) : (board || cls ? 0.7 : 0), textMatch(t.t, whole));
      if (!m || seen[t.item.l]) return;
      seen[t.item.l] = 1;
      var i = t.item;
      var hasClass = /\bclass\b/i.test(i.l), hasBoard = i.g === 'boards' || i.g === 'exams';
      var subj = (board && !hasBoard ? board + ' ' : '') + i.s;
      var withCls = cls && !hasClass ? cls : null;
      var phrase = subj + (mode === 'online' ? ' online tutor' : ' home tutor') + (withCls ? ' for Class ' + withCls : '') + (here ? ' in ' + here : '');
      var s = 3 * m + 1.5 * Math.min(1, (i.n || 20) / 20) + (here ? 1.2 : 0) + 0.5 * pop(phrase);
      // Too few tutors yet: offered as a demo request the team matches.
      if (i.r) { add(i.l + ' — request a tutor, matched in 10 min', s, { request: i.s }); return; }
      // Its own page when the item itself is what was typed.
      if (i.u && !place && textMatch(t.t, whole) >= 0.8) add(i.l + ' — tutors & guide', s + 2, { url: i.u });
      add(phrase, s, { search: subj + (withCls ? ' class ' + withCls : '') + (mode ? ' ' + mode : ''), place: here });
    });

    // Subject pages ("IB Maths Tutors (AA & AI…)").
    dict.pages.forEach(function (p) {
      var m = textMatch(p.k, q);
      if (m) add(p.l, 3 * m + 2, { url: p.u });
    });

    // Places on their own ("dlf ph…", "sector 5…").
    if (!out.length || place) {
      dict.places.forEach(function (p) {
        var m = textMatch(p.k, text) || (p.ak.some(function (a) { return a.indexOf(text) === 0; }) ? 1 : 0);
        if (m && text.length >= 3) add('Home tutors in ' + p.l + (p.c ? ', ' + p.c : ''), 3 * m + 2 + 1.2, { url: p.u });
      });
    }

    out.sort(function (a, b) { return b.score - a.score; });
    return out.slice(0, 7);
  }

  // ---------- dropdown ----------
  function ensureList() {
    if (list) return list;
    list = document.createElement('ul');
    list.className = 'nx-sugg';
    list.id = 'nxSuggList';
    list.setAttribute('role', 'listbox');
    list.hidden = true;
    field.style.position = 'relative';
    field.appendChild(list);
    input.setAttribute('role', 'combobox');
    input.setAttribute('aria-autocomplete', 'list');
    input.setAttribute('aria-controls', 'nxSuggList');
    input.setAttribute('aria-expanded', 'false');
    input.removeAttribute('list');
    list.addEventListener('mousedown', function (e) {
      var li = e.target.closest('li[data-i]');
      if (li) { e.preventDefault(); choose(+li.getAttribute('data-i')); }
    });
    return list;
  }

  function render(items) {
    ensureList();
    current = items; active = -1;
    list.innerHTML = '';
    items.forEach(function (s, i) {
      var li = document.createElement('li');
      li.setAttribute('role', 'option');
      li.setAttribute('data-i', i);
      li.id = 'nxSugg-' + i;
      li.className = 'nx-sugg__item' + (s.action.url ? ' nx-sugg__item--page' : '');
      li.textContent = s.label;
      if (s.action.url) {
        var tag = document.createElement('span');
        tag.className = 'nx-sugg__tag';
        tag.textContent = 'Page';
        li.appendChild(tag);
      }
      list.appendChild(li);
    });
    open = items.length > 0;
    list.hidden = !open;
    input.setAttribute('aria-expanded', open ? 'true' : 'false');
  }

  function close() { if (list) { list.hidden = true; } open = false; input.setAttribute('aria-expanded', 'false'); }

  function move(d) {
    if (!open || !current.length) return;
    active = (active + d + current.length) % current.length;
    Array.prototype.forEach.call(list.children, function (li, i) { li.classList.toggle('is-active', i === active); });
    input.setAttribute('aria-activedescendant', 'nxSugg-' + active);
  }

  function log(pick) {
    try {
      var body = new FormData();
      body.append('k', 'pick'); body.append('sid', sid()); body.append('q', input.value); body.append('pick', pick);
      var t = document.querySelector('meta[name="csrf-token"]');
      if (t) body.append('_token', t.getAttribute('content'));
      if (navigator.sendBeacon) navigator.sendBeacon('/search/event', body);
    } catch (e) {}
  }

  function choose(i) {
    var s = current[i];
    if (!s) return;
    log(s.label);
    close();
    if (s.action.url) { window.location.href = s.action.url; return; }
    if (s.action.request) {
      // Open the demo form with the subject filled in (footer + header scripts).
      var b = document.createElement('button');
      b.type = 'button'; b.hidden = true;
      b.setAttribute('data-modal-target', 'demoModal');
      b.setAttribute('data-demo-subject', s.action.request);
      document.body.appendChild(b); b.click(); b.remove();
      return;
    }
    input.value = s.action.search;
    if (placeInput && s.action.place) placeInput.value = s.action.place;
    if (goBtn) goBtn.click();
  }

  var timer;
  input.addEventListener('focus', load);
  input.addEventListener('input', function () {
    clearTimeout(timer);
    timer = setTimeout(function () {
      var p = load();
      (p && p.then ? p : Promise.resolve()).then(function () { render(suggest(input.value)); });
    }, 60);
  });
  input.addEventListener('keydown', function (e) {
    if (e.key === 'ArrowDown') { e.preventDefault(); move(1); }
    else if (e.key === 'ArrowUp') { e.preventDefault(); move(-1); }
    else if (e.key === 'Escape') { close(); }
    else if (e.key === 'Enter' && open && active >= 0) { e.preventDefault(); e.stopImmediatePropagation(); choose(active); }
  });
  input.addEventListener('blur', function () { setTimeout(close, 120); });

  // A demo request after a search: credited to that search (no personal data).
  document.addEventListener('submit', function (e) {
    if (!e.target || e.target.id !== 'demoForm') return;
    try {
      var body = new FormData();
      body.append('k', 'demo'); body.append('sid', sid()); body.append('q', input.value);
      var t = document.querySelector('meta[name="csrf-token"]');
      if (t) body.append('_token', t.getAttribute('content'));
      if (navigator.sendBeacon) navigator.sendBeacon('/search/event', body);
    } catch (err) {}
  }, true);

  window.nxSuggest = { suggest: suggest, load: load };
})();
