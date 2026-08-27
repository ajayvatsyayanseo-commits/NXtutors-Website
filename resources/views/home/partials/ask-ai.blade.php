<section class="section" id="nxAskAISection">
  <div class="nxg-ai-layout">

    <!-- ===== CHAT ===== -->
    <div class="nxg-chat-card nxg-glass">

      <div class="nxg-chat-top">
        <h4>Ask NXT AI</h4>
        <p>Ask about tutor fees, timing, demo classes, and more.</p>
      </div>

      <div class="nxg-chat-box" id="nxAskAiThread">

        <div class="nxg-msg user">
          <span class="nxg-av">🧑</span>
          <span class="nxg-name">You</span>
          <div class="nxg-bubble"><span class="nxg-text">What are fees?</span><span class="nxg-time">10:30 AM ✓</span></div>
        </div>

        <div class="nxg-msg ai">
          <div class="nxg-head"><span class="nxg-av">🤖</span><span class="nxg-name">NXT AI</span><span class="nxg-time">10:30 AM</span></div>
          <div class="nxg-text">Fees usually range between ₹800–₹2500 depending on class and subject.</div>
          <div class="nxg-react"><button type="button" aria-label="Helpful">👍</button><button type="button" aria-label="Not helpful">👎</button></div>
        </div>

        <div class="nxg-msg user">
          <span class="nxg-av">🧑</span>
          <span class="nxg-name">You</span>
          <div class="nxg-bubble"><span class="nxg-text">Demo class available?</span><span class="nxg-time">10:31 AM ✓</span></div>
        </div>

        <div class="nxg-msg ai">
          <div class="nxg-head"><span class="nxg-av">🤖</span><span class="nxg-name">NXT AI</span><span class="nxg-time">10:31 AM</span></div>
          <div class="nxg-text">Yes 👍 You can book a demo class before finalizing your tutor.</div>
          <div class="nxg-react"><button type="button" aria-label="Helpful">👍</button><button type="button" aria-label="Not helpful">👎</button></div>
        </div>

        <div class="nxg-msg user">
          <span class="nxg-av">🧑</span>
          <span class="nxg-name">You</span>
          <div class="nxg-bubble"><span class="nxg-text">What timings are available?</span><span class="nxg-time">10:32 AM ✓</span></div>
        </div>

        <div class="nxg-msg ai">
          <div class="nxg-head"><span class="nxg-av">🤖</span><span class="nxg-name">NXT AI</span><span class="nxg-time">10:32 AM</span></div>
          <div class="nxg-text">Most tutors are available in the evenings and weekends. Specific timing depends on the tutor.</div>
          <div class="nxg-react"><button type="button" aria-label="Helpful">👍</button><button type="button" aria-label="Not helpful">👎</button></div>
        </div>

      </div>

      <div class="nxg-chat-input">
        <input type="text" id="nxAskAiInput" placeholder="Ask anything..." />
        <button id="nxAskAiSend" aria-label="Send">
          <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
        </button>
      </div>

      <p class="nxg-chat-foot">NXT AI can make mistakes. Please verify important details.</p>
    </div>

    <!-- ===== KNOWLEDGE BASE ===== -->
    <aside class="nxg-results">

      <div class="nxg-results-search">
        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
        <input type="text" id="nxKbSearch" placeholder="Search fees, demo, timing…" />
        <button type="button" class="nxg-kb-clear" id="nxKbClear" aria-label="Clear">×</button>
      </div>

      <div class="nxg-results-list" id="nxKbList">
        @php
          // On a tutor profile the panel is ABOUT that tutor: their facts
          // replace the generic knowledge base, and every chat question
          // carries their context (see nxgCtx below).
          if (!empty($kbTutor)) {
            $kbSubjects = [];
            $kbCourses = $kbTutor->effective_courses ?? $kbTutor->courses ?? collect();
            foreach ($kbCourses as $c) {
              if (!empty($c->category?->cat_title)) $kbSubjects[] = $c->category->cat_title;
              elseif (!empty($c->subject))          $kbSubjects[] = $c->subject;
            }
            $kbSubjects = array_slice(array_values(array_unique(array_filter($kbSubjects))), 0, 6);

            $kb = array_values(array_filter([
              ['About ' . $kbTutor->name, 'Profile',
               trim(($kbTutor->education ? $kbTutor->education . '. ' : '') .
                    ($kbTutor->experience ? $kbTutor->experience . ' experience.' : '')) ?: 'Verified tutor on NXTutors.'],
              $kbSubjects ? ['Subjects taught', 'Subjects', implode(', ', $kbSubjects)] : null,
              !empty($kbTutor->budget)
                ? ['Fees', 'Fees', '₹' . $kbTutor->budget . ' per class. Final fee depends on class and location.']
                : ['Fees', 'Fees', 'Shared after the demo class — depends on class and location.'],
              ['Location & mode', 'Info',
               trim(($kbTutor->address ? $kbTutor->address . ', ' : '') . ($kbTutor->city ?? '')) . '. Home and online options available.'],
              ['Book a demo with ' . $kbTutor->name, 'Demo', 'One trial session to judge teaching style — continue only if it fits.'],
            ]));
          } else {
            $kb = [
              ['Tutor Fees Overview', 'Fees', 'Fees usually range between ₹800–₹2500 depending on class and subject.'],
              ['Fee Payment Policy', 'Policy', 'Payments must be made in advance. We accept UPI, cards and net banking.'],
              ['How to Book a Demo Class', 'FAQ', 'You can book a demo class before finalizing your tutor.'],
              ['Refund & Cancellation', 'Policy', 'If you cancel within 24 hours of booking, you are eligible for a refund.'],
              ['Timings & Availability', 'Info', 'Most tutors are available in the evenings and weekends.'],
            ];
          }
        @endphp
        @foreach ($kb as [$title, $tag, $desc])
          <a class="nxg-result-card" data-kb="{{ strtolower($title.' '.$tag.' '.$desc) }}">
            <span class="nxg-rc-icon">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
            </span>
            <div class="nxg-rc-body">
              <div class="nxg-rc-top"><span class="nxg-rc-title">{{ $title }}</span><span class="nxg-rc-tag">{{ $tag }}</span></div>
              <div class="nxg-rc-desc">{{ $desc }}</div>
            </div>
            <span class="nxg-rc-chevron">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </span>
          </a>
        @endforeach
        <div class="nxg-kb-empty" id="nxKbEmpty" style="display:none;">No results found.</div>
      </div>

      {{-- Compare results land in the assistant's own result panel,
           above the knowledge list. Collapsed until there is one. --}}
<div class="nxg-compare-slot" id="compareSection">
 
   <div
    id="compareGrid"
    data-default-url="{{ route('home.compareDefaults') }}"
    data-ai-url="{{ route('home.compareAi') }}" style="display:none;"
  >
    <div style="padding:12px;color:#94a3b8;">
      Select tutors to start AI comparison…
    </div>
  </div> 

  <div id="compareLoadingWrap" style="display:none;">
    <div class="nx-compare-loading">
      <div class="nx-compare-loader-ring"></div>

      <div class="nx-compare-loading-title">
        NXTutors AI is comparing tutors...
      </div>

      <div class="nx-compare-loading-sub" id="nxCompareLoadingText">
        Checking subject fit, experience, rating, location, budget and availability
      </div>

      <div class="nx-compare-progress">
        <i id="nxCompareProgressBar"></i>
      </div>

      <div class="nx-compare-progress-text" id="nxCompareProgressText">
        Preparing comparison...
      </div>
    </div>
  </div>

  <div id="compareResultsMount"></div>
</div>

      <div class="nxg-results-foot">
        <span id="nxKbCount">{{ count($kb) }} results found</span>
        <a href="#">View all</a>
      </div>
    </aside>

  </div>
</section>

<script>
// NXT AI chat client. Runs on window.load so it takes over #nxAskAiSend/#nxAskAiInput
// after any legacy handlers have bound — cloning the nodes strips those listeners,
// leaving this as the single owner. All server text is inserted via textContent
// (never innerHTML) since model output + tutor data are untrusted.
window.addEventListener('load', function () {
  if (window.__nxtAiWired) return;
  window.__nxtAiWired = true;

  var thread = document.getElementById('nxAskAiThread');
  var oldInput = document.getElementById('nxAskAiInput');
  var oldSend  = document.getElementById('nxAskAiSend');
  var kbList   = document.getElementById('nxKbList');
  var kbCount  = document.getElementById('nxKbCount');
  var kbSearch = document.getElementById('nxKbSearch');
  var kbClear  = document.getElementById('nxKbClear');
  if (!thread || !oldInput || !oldSend) return;

  // Strip legacy listeners by replacing the nodes with clones.
  var input = oldInput.cloneNode(true);
  var send  = oldSend.cloneNode(true);
  oldInput.parentNode.replaceChild(input, oldInput);
  oldSend.parentNode.replaceChild(send, oldSend);

  var endpoint = @json(route('nxt-ai.chat'));
  @php
    // Built here, not inline in @json() — Blade's directive parser trips on
    // parentheses inside string literals.
    $nxgTutorCtx = '';
    if (!empty($kbTutor)) {
      $bits = array_filter([
        $kbTutor->city ?: null,
        $kbTutor->budget
          ? (str_contains($kbTutor->budget, '₹') ? $kbTutor->budget : '₹'.$kbTutor->budget.'/class')
          : null,
        $kbTutor->experience ? $kbTutor->experience.' experience' : null,
      ]);
      $nxgTutorCtx = 'Question about tutor '.$kbTutor->name
        .' [ID '.$kbTutor->user_id.($bits ? ', '.implode(', ', $bits) : '').']: ';
    }
  @endphp
  // Set only on tutor profiles (kbTutor passed by the include).
  window.nxgTutorCtx = @json($nxgTutorCtx);
  var csrf = (document.querySelector('meta[name="csrf-token"]') || {}).content || '';
  var conversationId = null;
  var busy = false;

  function el(tag, cls, text) {
    var n = document.createElement(tag);
    if (cls) n.className = cls;
    if (text != null) n.textContent = text;
    return n;
  }

  function nearBottom() {
    return thread.scrollHeight - thread.scrollTop - thread.clientHeight < 120;
  }
  function scroll() { thread.scrollTop = thread.scrollHeight; }

  function addUser(text) {
    var w = el('div', 'nxg-msg user');
    w.appendChild(el('span', 'nxg-av', '🧑'));
    w.appendChild(el('span', 'nxg-name', 'You'));
    var b = el('div', 'nxg-bubble');
    b.appendChild(el('span', 'nxg-text', text));
    var d = new Date();
    b.appendChild(el('span', 'nxg-time', d.toLocaleTimeString([], {hour:'2-digit', minute:'2-digit'}) + ' ✓'));
    w.appendChild(b);
    thread.appendChild(w); scroll();
  }

  function addAi(text, opts) {
    opts = opts || {};
    var w = el('div', 'nxg-msg ai');
    var head = el('div', 'nxg-head');
    head.appendChild(el('span', 'nxg-av', '🤖'));
    head.appendChild(el('span', 'nxg-name', 'NXT AI'));
    head.appendChild(el('span', 'nxg-time', new Date().toLocaleTimeString([], {hour:'2-digit', minute:'2-digit'})));
    w.appendChild(head);
    var body = el('div', 'nxg-text', text);
    if (opts.muted) body.style.opacity = '.7';
    w.appendChild(body);
    if (!opts.noReact) {
      var r = el('div', 'nxg-react');
      r.innerHTML = '<button type="button" aria-label="Helpful">👍</button><button type="button" aria-label="Not helpful">👎</button>';
      w.appendChild(r);
    }
    thread.appendChild(w);
    var atBottom = nearBottom();
    if (atBottom) scroll();
    return w;
  }

  // ---- right-panel renderers (tutor cards / info) ----
  function safeHref(url) {
    if (typeof url !== 'string') return null;
    return (url.charAt(0) === '/' || url.indexOf('http://') === 0 || url.indexOf('https://') === 0) ? url : null;
  }

  function chipRow(items) {
    var row = el('div', 'nxg-rc-desc');
    row.textContent = items.filter(Boolean).join(' · ');
    return row;
  }

  function renderTutorCards(items, title) {
    if (!kbList) return;
    kbList.innerHTML = '';
    (items || []).forEach(function (t) {
      var href = safeHref(t.profile_url);
      var card = el(href ? 'a' : 'div', 'nxg-result-card');
      if (href) { card.setAttribute('href', href); card.setAttribute('target', '_blank'); card.setAttribute('rel', 'noopener'); }
      card.setAttribute('data-kb', ((t.name||'') + ' ' + (t.city||'') + ' ' + (t.subjects||[]).join(' ')).toLowerCase());

      var pic = el('span', 'nxg-rc-icon');
      if (safeHref(t.image_url)) {
        var img = document.createElement('img');
        img.src = t.image_url; img.alt = ''; img.width = 30; img.height = 30;
        img.style.borderRadius = '8px'; img.style.objectFit = 'cover';
        pic.textContent = ''; pic.appendChild(img);
      } else { pic.textContent = '👤'; }
      card.appendChild(pic);

      var body = el('div', 'nxg-rc-body');
      var top = el('div', 'nxg-rc-top');
      top.appendChild(el('span', 'nxg-rc-title', t.name || 'Tutor'));
      if (t.match_score != null) top.appendChild(el('span', 'nxg-rc-tag', t.match_score + '% match'));
      body.appendChild(top);

      body.appendChild(chipRow([
        (t.subjects||[]).slice(0,3).join(', '),
        t.city,
        t.fee_label,
        (t.rating != null ? ('★ ' + t.rating + (t.review_count ? ' (' + t.review_count + ')' : '')) : null),
        t.experience_label
      ]));

      if (t.match_reasons && t.match_reasons.length) {
        var reasons = el('div', 'nxg-rc-desc');
        reasons.style.opacity = '.8';
        reasons.textContent = '✓ ' + t.match_reasons.slice(0,3).join(' · ');
        body.appendChild(reasons);
      }
      card.appendChild(body);
      card.appendChild(el('span', 'nxg-rc-chevron', '›'));
      kbList.appendChild(card);
    });
    if (kbCount) kbCount.textContent = (items||[]).length + ((items||[]).length === 1 ? ' tutor found' : ' tutors found');
    if (kbSearch) kbSearch.value = '';
  }

  function renderInfo(items) {
    if (!kbList) return;
    kbList.innerHTML = '';
    (items || []).forEach(function (it) {
      var href = safeHref(it.url);
      var card = el(href ? 'a' : 'div', 'nxg-result-card');
      if (href) { card.setAttribute('href', href); }
      card.setAttribute('data-kb', ((it.title||'') + ' ' + (it.snippet||'')).toLowerCase());
      var icon = el('span', 'nxg-rc-icon', '📄');
      card.appendChild(icon);
      var body = el('div', 'nxg-rc-body');
      var top = el('div', 'nxg-rc-top');
      top.appendChild(el('span', 'nxg-rc-title', it.title || ''));
      if (it.type) top.appendChild(el('span', 'nxg-rc-tag', it.type));
      body.appendChild(top);
      body.appendChild(el('div', 'nxg-rc-desc', it.snippet || ''));
      card.appendChild(body);
      card.appendChild(el('span', 'nxg-rc-chevron', '›'));
      kbList.appendChild(card);
    });
    if (kbCount) kbCount.textContent = (items||[]).length + ' result' + ((items||[]).length === 1 ? '' : 's') + ' found';
  }

  function renderBooking(block, success) {
    var w = addAi(success ? (block.message || 'Your demo request is submitted.') : (block.title || 'Confirm your demo'), {noReact: true});
    if (!success && block.summary) {
      var box = el('div', 'nxg-rc-desc');
      box.style.marginTop = '8px';
      var lines = [];
      Object.keys(block.summary).forEach(function (k) { lines.push(k + ': ' + block.summary[k]); });
      box.textContent = lines.join(' · ');
      w.appendChild(box);
    }
  }

  function renderBlocks(blocks) {
    var handledRight = false;
    (blocks || []).forEach(function (b) {
      if (!b || !b.type) return;
      if (b.type === 'tutor_cards' || b.type === 'tutor_comparison') {
        renderTutorCards(b.items, b.title); handledRight = true;
      } else if (b.type === 'website_information') {
        if (!handledRight) { renderInfo(b.items); handledRight = true; }
      } else if (b.type === 'no_results') {
        var w = addAi(b.message || 'No exact matches found.', {noReact: true});
        if (b.suggestion) w.appendChild(el('div', 'nxg-rc-desc', b.suggestion));
      } else if (b.type === 'booking_confirmation') {
        renderBooking(b, false);
      } else if (b.type === 'booking_success') {
        renderBooking(b, true);
      }
    });
  }

  function renderQuickReplies(items) {
    var existing = thread.parentNode.querySelector('.nxg-quick-row');
    if (existing) existing.remove();
    if (!items || !items.length) return;
    var row = el('div', 'nxg-quick-row');
    items.slice(0, 5).forEach(function (q) {
      var chip = el('button', 'nxg-quick', q);
      chip.type = 'button';
      chip.addEventListener('click', function () { input.value = q; sendMessage(); });
      row.appendChild(chip);
    });
    // place chips just above the input row
    var inputRow = document.querySelector('.nxg-chat-input');
    if (inputRow) inputRow.parentNode.insertBefore(row, inputRow);
  }

  function typing() {
    var w = el('div', 'nxg-msg ai nxg-typing');
    var head = el('div', 'nxg-head');
    head.appendChild(el('span', 'nxg-av', '🤖'));
    head.appendChild(el('span', 'nxg-name', 'NXT AI'));
    w.appendChild(head);
    w.appendChild(el('div', 'nxg-text', 'Thinking…'));
    thread.appendChild(w); scroll();
    return w;
  }

  function sendMessage() {
    var val = (input.value || '').trim();
    if (!val || busy) return;
    busy = true;
    send.disabled = true; send.classList.add('is-loading');
    addUser(val);
    input.value = '';
    var t = typing();

    fetch(endpoint, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': csrf, 'X-Requested-With': 'XMLHttpRequest' },
      // On a tutor profile the question is about THIS tutor — context goes
      // to the AI, but the thread shows only what the user typed.
      body: JSON.stringify({ message: (window.nxgTutorCtx ? window.nxgTutorCtx + val : val), conversation_id: conversationId })
    })
    .then(function (res) { return res.json().then(function (d) { return { status: res.status, data: d }; }); })
    .then(function (r) {
      t.remove();
      var d = r.data || {};
      if (d.conversation_id) conversationId = d.conversation_id;
      addAi(d.reply || 'Sorry, I could not answer that.', {muted: !d.success});
      if (d.success) {
        renderBlocks(d.blocks);
        renderQuickReplies(d.quick_replies);
      }
    })
    .catch(function () {
      t.remove();
      addAi('Network issue — please try again.', {muted: true, noReact: true});
    })
    .finally(function () {
      busy = false;
      send.disabled = false; send.classList.remove('is-loading');
      if (nearBottom()) scroll();
    });
  }

  send.addEventListener('click', sendMessage);
  input.addEventListener('keydown', function (e) {
    if (e.key === 'Enter' && !e.shiftKey) { e.preventDefault(); sendMessage(); }
  });

  // Keep the knowledge-base search filtering whatever cards are currently shown.
  if (kbSearch && kbList) {
    var runFilter = function () {
      var q = kbSearch.value.trim().toLowerCase();
      var shown = 0;
      kbList.querySelectorAll('.nxg-result-card').forEach(function (c) {
        var hit = !q || (c.getAttribute('data-kb') || '').indexOf(q) !== -1;
        c.style.display = hit ? '' : 'none';
        if (hit) shown++;
      });
      var empty = document.getElementById('nxKbEmpty');
      if (empty) empty.style.display = shown ? 'none' : 'block';
      if (kbCount) kbCount.textContent = shown + (shown === 1 ? ' result found' : ' results found');
    };
    kbSearch.addEventListener('input', runFilter);
    if (kbClear) kbClear.addEventListener('click', function () { kbSearch.value = ''; runFilter(); kbSearch.focus(); });
  }
});
</script>
