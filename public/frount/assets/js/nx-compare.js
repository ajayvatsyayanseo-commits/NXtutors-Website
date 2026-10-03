/*
 * Compare tutors (the "Compare" button on every tutor card) and the AI
 * comparison shown in the Ask NXT AI panel (#compareSection, in
 * home/partials/ask-ai.blade.php). Moved out of home.blade.php so the
 * Compare button works on subject, city and search pages too.
 * Needs Chart.js for the comparison chart (loaded with the Ask AI partial).
 */
document.addEventListener('DOMContentLoaded', function () {
  (function () {
    const KEY = "nx_compare_tutors";

    const grid = document.getElementById("compareGrid");
    const title = document.getElementById("compareTitle");
    const hint = document.getElementById("compareHint");
    const compareSection = document.getElementById("compareSection");
    const compareLoadingWrap = document.getElementById("compareLoadingWrap");
    const compareResultsMount = document.getElementById("compareResultsMount");
    const loadingTextEl = document.getElementById("nxCompareLoadingText");
    const progressBarEl = document.getElementById("nxCompareProgressBar");
    const progressTextEl = document.getElementById("nxCompareProgressText");

    if (!grid) return;

    const defaultUrl = grid.dataset.defaultUrl || "";
    const aiUrlBase = grid.dataset.aiUrl || "";
    const waHandoffUrl = grid.dataset.waUrl || "";

    let compareProgressTimer = null;
    let compareResizeObserver = null;

    function wait(ms) {
      return new Promise(resolve => setTimeout(resolve, ms));
    }

    function loadSelected() {
      try {
        const parsed = JSON.parse(localStorage.getItem(KEY) || "[]");
        return Array.isArray(parsed) ? parsed : [];
      } catch (e) {
        return [];
      }
    }

    function saveSelected(list) {
      localStorage.setItem(KEY, JSON.stringify(Array.isArray(list) ? list : []));
    }

    function removeById(list, id) {
      return list.filter(x => String(x.id).trim() !== String(id).trim());
    }

    function esc(str) {
      return String(str ?? "")
        .replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#039;");
    }

    function getMatchLabel(score) {
      if (score >= 90) return "Excellent Match";
      if (score >= 80) return "Strong Match";
      if (score >= 70) return "Good Match";
      if (score >= 60) return "Worth Demo";
      return "Needs Validation";
    }

    function normalizeTutor(t) {
      const rawScore = parseInt(t.score, 10) || 0;
      const displayScore = rawScore < 70 ? Math.min(100, rawScore + 12) : rawScore;
      const b = t.breakdown || {};

      return {
        ...t,
        _displayScore: displayScore,
        _subject: Math.max(0, Math.min(100, parseInt(b["Subject Fit"] ?? b["Subject"] ?? 82, 10) || 82)),
        _experience: Math.max(0, Math.min(100, parseInt(b["Experience"] ?? 78, 10) || 78)),
        _reviews: Math.max(0, Math.min(100, parseInt(b["Reviews"] ?? b["Rating"] ?? 80, 10) || 80)),
        _location: Math.max(0, Math.min(100, parseInt(b["Location"] ?? 74, 10) || 74)),
        _budget: Math.max(0, Math.min(100, parseInt(b["Budget"] ?? 72, 10) || 72)),
        _availability: Math.max(0, Math.min(100, parseInt(b["Availability"] ?? 76, 10) || 76))
      };
    }

    function getChatReply(q, winner, tutors) {
      const text = (q || "").toLowerCase();
      const second = tutors[1] || null;

      if (text.includes("budget")) {
        if (second && second._budget > winner._budget) {
          return `${second.name} looks slightly safer on budget, but ${winner.name} remains the stronger overall choice because of better combined fit across subject, experience and availability.`;
        }
        return `${winner.name} is still ahead overall. Budget fit is acceptable, but the final decision should still be validated through a demo class.`;
      }

      if (text.includes("science")) {
        return `${winner.name} is the current overall leader, but for a Science-first decision you should compare subject fit and teaching clarity in the demo. Subject-specific comfort can change the final ranking.`;
      }

      if (text.includes("math")) {
        return `${winner.name} is currently strongest for Maths-led requirements because the overall fit, subject compatibility and consistency indicators are higher.`;
      }

      if (text.includes("timing") || text.includes("evening") || text.includes("availability")) {
        return `${winner.name} appears stronger for schedule matching. If timing flexibility matters more than total score, the second option can remain a practical backup.`;
      }

      if (text.includes("fees") || text.includes("price")) {
        return `${winner.name} stays ahead on overall value. If pure price is your first filter, compare budget fit with demo outcome before finalising.`;
      }

      if (text.includes("why")) {
        return `${winner.name} ranks first because the combined score across subject fit, experience, reviews and availability is stronger than the rest. Use a demo to validate teaching style before booking long-term sessions.`;
      }

      return `${winner.name} is still the best overall choice based on current AI comparison. You can ask about budget, timing, subject fit, board fit or demo suitability for a sharper recommendation.`;
    }

    function startFakeCompareProgress() {
      if (!progressBarEl || !progressTextEl || !loadingTextEl) return;

      let progress = 0;

      const steps = [
        { at: 8, title: "Reading tutor profiles...", text: "Analyzing selected tutor profiles and base information" },
        { at: 18, title: "Checking subject fit...", text: "Comparing class, board and subject compatibility" },
        { at: 32, title: "Analyzing experience...", text: "Reviewing relevant teaching experience and expertise" },
        { at: 48, title: "Checking reviews and trust signals...", text: "Evaluating parent feedback, reliability and score patterns" },
        { at: 64, title: "Matching budget and location...", text: "Comparing budget fit, travel convenience and locality match" },
        { at: 80, title: "Checking availability...", text: "Finding the best overlap for preferred timing and session flow" },
        { at: 92, title: "Generating AI recommendation...", text: "Preparing the final tutor ranking and recommendation summary" }
      ];

      progressBarEl.style.width = "0%";
      progressTextEl.textContent = "Preparing comparison...";
      loadingTextEl.textContent = "Checking subject fit, experience, rating, location, budget and availability";

      if (compareProgressTimer) clearInterval(compareProgressTimer);

      compareProgressTimer = setInterval(() => {
        progress += Math.random() * 3.2;
        if (progress > 95) progress = 95;

        progressBarEl.style.width = progress.toFixed(0) + "%";

        let currentTitle = "NXTutors AI is comparing tutors...";
        let currentText = "Preparing comparison...";

        steps.forEach(step => {
          if (progress >= step.at) {
            currentTitle = step.title;
            currentText = step.text;
          }
        });

        loadingTextEl.textContent = currentTitle;
        progressTextEl.textContent = currentText;
      }, 900);
    }

    function stopFakeCompareProgress(success = true) {
      if (compareProgressTimer) {
        clearInterval(compareProgressTimer);
        compareProgressTimer = null;
      }

      if (progressBarEl) progressBarEl.style.width = success ? "100%" : "0%";
      if (progressTextEl) progressTextEl.textContent = success ? "Comparison ready" : "Comparison failed";
    }

    function renderAiLoading() {
      if (compareLoadingWrap) compareLoadingWrap.style.display = "block";
      if (compareResultsMount) compareResultsMount.innerHTML = "";
      startFakeCompareProgress();

      if (compareSection) {
        compareSection.scrollIntoView({ behavior: "smooth", block: "start" });
      }
    }

    async function loadDefaults() {
      const pin = localStorage.getItem("nx_pin") || "";
      const city = localStorage.getItem("nx_city") || "";

      if (compareLoadingWrap) compareLoadingWrap.style.display = "none";
      if (compareResultsMount) compareResultsMount.innerHTML = "";

      if (!defaultUrl) {
        grid.innerHTML = `<div style="padding:12px;color:#94a3b8;">Default compare URL missing.</div>`;
        return;
      }

      try {
        const qs = new URLSearchParams({ pincode: pin, city: city });
        const res = await fetch(defaultUrl + "?" + qs.toString(), {
          headers: { "X-Requested-With": "XMLHttpRequest" }
        });

        const html = await res.text();
        grid.innerHTML = html;

        if (title) title.textContent = "Compare tutors (suggested near you)";
        if (hint) hint.textContent = "Tip: Click Compare on any tutor card to add here.";

        updateCompareButtons();
      } catch (e) {
        grid.innerHTML = `<div style="padding:12px;color:#dc2626;">Unable to load suggested tutors.</div>`;
      }
    }

    function buildGlassCompareUI(tutors, selectedList, recommendationReason = "") {
      if (!tutors || !tutors.length) return "";

      const winner = tutors[0];
      const top3 = tutors.slice(0, 3);
      const rankedTutors = tutors;
      const second = tutors[1] || null;
      const third = tutors[2] || null;

      const winnerMeta =
        selectedList.find(x => String(x.id) === String(winner._compareId || winner.id)) || {};

      function avatarLetter(name) {
        return (name || "T").trim().charAt(0).toUpperCase();
      }
 

      function scoreLine(label, value, cls = "blue") {
        const safe = Math.max(0, Math.min(100, parseInt(value, 10) || 0));
        return `
          <div class="nxg-score-row">
            <div class="nxg-score-meta">
              <span>${esc(label)}</span>
              <b>${safe}</b>
            </div>
            <div class="nxg-line ${cls}">
              <i style="width:${safe}%"></i>
            </div>
          </div>
        `;
      }

      const leftCards = rankedTutors.map((t, idx) => `
        <div class="nxg-mini-card">
          <div class="nxg-mini-head">
            <div class="nxg-avatar ${colorClass(idx)}">${avatarLetter(t.name)}</div>
            <div>
              <strong>${esc(t.name)}</strong>
              <span>${esc(getMatchLabel(t._displayScore))}</span>
            </div>
          </div>

          <div class="nxg-mini-score-row">
            <div class="nxg-mini-score">${esc(t._displayScore)}/100</div>
            <button type="button" class="nxg-remove-btn js-compare-remove" data-id="${esc(t._compareId || t.id)}">Remove</button>
          </div>

          <div class="nxg-mini-bar ${colorClass(idx)}">
            <i style="width:${t._displayScore}%"></i>
          </div>
        </div>
      `).join("");

      const compareHead = top3.map((t, idx) => `
        <div class="nxg-tutor-chip">
          <div class="nxg-avatar ${colorClass(idx)}">${avatarLetter(t.name)}</div>
          <div>
            <strong>${esc(t.name)}</strong>
            <span>${esc(getMatchLabel(t._displayScore))}</span>
          </div>
          <small>${esc(t._displayScore)}</small>
        </div>
      `).join("");

      const metrics = [
        { key: "_subject", label: "Subject fit" },
        { key: "_experience", label: "Experience" },
        { key: "_reviews", label: "Reviews" },
        { key: "_budget", label: "Budget fit" },
        { key: "_availability", label: "Availability" }
      ];

      const compareRows = metrics.map(metric => `
        <div class="nxg-compare-row">
          <div class="nxg-metric">${esc(metric.label)}</div>
          ${top3.map((t, idx) => `
            <div class="nxg-metric-box">
              <b>${esc(t[metric.key])}</b>
              <div class="nxg-line ${colorClass(idx)}">
                <i style="width:${t[metric.key]}%"></i>
              </div>
            </div>
          `).join("")}
        </div>
      `).join("");


      /* The three tags under the headline used to read "2-3 tutors only",
         "No clipped columns" and "Demo-first decision" - notes about how the
         component was built, shown to a parent choosing a tutor. These say
         what the winner is actually strong at, taken from the same scores the
         table below plots, and fall back to the honest generic line only when
         nothing scores highly. */
      const strengthLabels = {
        _subject: "Teaches the subject you need",
        _experience: "Most classroom experience",
        _reviews: "Best parent reviews",
        _budget: "Best fit for your budget",
        _availability: "Most flexible timings"
      };
      const winnerStrengths = Object.keys(strengthLabels)
        .map(k => ({ k, v: Number(winner[k]) || 0 }))
        .sort((a, b) => b.v - a.v)
        .filter(x => x.v >= 60)
        .slice(0, 3)
        .map(x => strengthLabels[x.k]);
      const heroTags = (winnerStrengths.length ? winnerStrengths : ["Free demo class"])
        .map(t => `<span>${esc(t)}</span>`).join("");

      // How clear the win is, so the copy can be honest about a close call.
      const winMargin = second ? (Number(winner._displayScore) - Number(second._displayScore)) : null;
      const marginNote = winMargin === null
        ? "Book a free demo class to confirm the fit before you commit."
        : winMargin >= 10
          ? `A clear lead of ${winMargin} points over ${esc(second.name)} across the signals below.`
          : winMargin > 0
            // A 1-9 point gap is inside the noise of any scoring model, so say so.
            ? `Just ${winMargin} point${winMargin === 1 ? "" : "s"} ahead of ${esc(second.name)} - too close to call on scores alone, so let the demo class decide.`
            // Identical scores are common with two similar tutors; "0 points ahead" read as a bug.
            : `Level with ${esc(second.name)} on every signal we can measure. Book a demo with both and pick the one your child responds to.`;

      const aiFirstQuestion = `Who is best for my child among ${top3.map(t => t.name).join(", ")}?`;
      const aiReply = `${winner.name} ranks first overall because subject fit, experience and availability are strongest. ${second ? `${second.name} is a good backup option` : ""}${winner._budget < 75 ? ", especially if budget is flexible." : "."}`;

      return `
        <div class="nxg-wrap" id="nxgCompareWrap">
          <div class="nxg-orb nxg-orb--1"></div>
          <div class="nxg-orb nxg-orb--2"></div>
          <div class="nxg-orb nxg-orb--3"></div>

          <div class="nxg-topbar">
            <div>
              <h2>NXTutors — Compare + Ask AI</h2>
              <p>Smart tutor comparison powered by subject fit, teaching strength, budget comfort and schedule alignment.</p>
            </div>
          </div>

          <div class="nxg-shell">
            <div class="nxg-main">
              <div class="nxg-hero nxg-glass">
                <div class="nxg-hero__content">
                  <span class="nxg-pill">AI Comparison</span>
                  <h3>${esc(winner.name)} is the best overall choice</h3>
                  <p>${esc(recommendationReason || "Best balance of subject fit, experience, reviews, budget and availability.")}</p>

                  <div class="nxg-tags">${heroTags}</div>
                  <p class="nxg-hero__margin">${marginNote}</p>
                </div>

                <div class="nxg-scorecard">
                  <label>Best overall</label>
                  <div class="nxg-scorecard__value">${esc(winner._displayScore)} <small>/100</small></div>
                  <span class="nxg-scorecard__pill">AI Top Pick</span>
                </div>
              </div>

              <div class="nxg-grid">
                <div class="nxg-panel nxg-glass nxg-selected-panel">
                <div class="nxg-selected-top">
                  <div class="nxg-selected-chart">
                    <h4>How close the match is</h4>
                    <p>Overall score out of 100 for each shortlisted tutor. A wide gap means one is a
                       clear fit; a narrow one means the demo class is the real decider.</p>

                    <div class="nxg-pie-wrap">
                      <canvas id="nxComparePieChart"></canvas>
                    </div>
                  </div>

    <div class="nxg-selected-list-wrap">
      <h4>Your shortlist</h4>
<p>Ranked best-fit first. Book a free demo with any of them - there is no charge and no commitment.</p>

      <div class="nxg-mini-list nxg-mini-list-scroll ${rankedTutors.length > 3 ? 'has-scroll' : ''}">
        ${leftCards}
      </div>
    </div>
  </div>
</div>

                <div class="nxg-panel nxg-glass">
                  <h4>Why ${esc(winner.name)} ranks first</h4>
                  <p>Every tutor scored on the five things that decide whether tuition works: whether they
                     teach your subject, how long they have taught it, what other parents said, how the fee
                     compares, and whether their timings suit you.</p>

                  <div class="nxg-head-row">
                    <div class="nxg-head-row__title">Signals</div>
                    ${compareHead}
                  </div>

                  <div class="nxg-rows">
                    ${compareRows}
                  </div>

                  <div class="nxg-footer-tags">
                    <span class="green">Scores are a guide</span>
                    <span>They rank fit on paper, not how your child gets on with the tutor</span>
                    <span class="gold">Next step</span>
                    <span>Book a free demo with your top two and let the lesson decide</span>
                  </div>
                </div>

                 
              </div>
            </div>

          </div>
        </div>
      `;
    }

    let nxComparePieChart = null;

function renderComparePieChart(tutors) {
  const canvas = document.getElementById("nxComparePieChart");
  if (!canvas || typeof Chart === "undefined") return;

  if (nxComparePieChart) {
    nxComparePieChart.destroy();
  }

  // Rank order, one accent: leader in the theme accent, the rest neutral.
  const accent = getComputedStyle(document.documentElement).getPropertyValue("--accent").trim() || "#F5A524";
  const colors = [accent, "rgba(255,255,255,.34)", "rgba(255,255,255,.22)", "rgba(255,255,255,.16)", "rgba(255,255,255,.12)"];

  nxComparePieChart = new Chart(canvas, {
    type: "doughnut",
    data: {
      labels: tutors.map(t => t.name),
      datasets: [{
        data: tutors.map(t => t._displayScore),
        backgroundColor: tutors.map((_, i) => colors[i % colors.length]),
        borderWidth: 0
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      cutout: "62%",
      plugins: {
        legend: {
          // A donut of two grey-and-blue arcs is unreadable without hovering,
          // which is not an option on a phone. Name each slice with its score.
          display: true,
          position: "bottom",
          labels: {
            color: "rgba(255,255,255,.72)",
            boxWidth: 10,
            boxHeight: 10,
            usePointStyle: true,
            pointStyle: "circle",
            padding: 14,
            font: { size: 12 },
            generateLabels(chart) {
              const d = chart.data;
              return d.labels.map((label, i) => ({
                text: `${label} — ${d.datasets[0].data[i]}/100`,
                fillStyle: d.datasets[0].backgroundColor[i],
                strokeStyle: d.datasets[0].backgroundColor[i],
                index: i
              }));
            }
          }
        },
        tooltip: {
          callbacks: {
            label: function(ctx) {
              return `${ctx.label}: ${ctx.raw}/100`;
            }
          }
        }
      }
    }
  });
}

    function colorClass(index){
  return ["gold", "blue", "pink", "blue", "gold"][index % 5] || "blue";
}

    function applyCompareLayoutMode() {
      const wrap = document.getElementById("nxgCompareWrap");
      if (!wrap) return;

      const width = wrap.clientWidth;

      wrap.classList.remove("nxg-mode-compact", "nxg-mode-single");

      if (width <= 900) {
        wrap.classList.add("nxg-mode-single");
      } else if (width <= 1250) {
        wrap.classList.add("nxg-mode-compact");
      }
    }

    function wireAskAI(tutors) {
    // Superseded by the NXT AI client in home/partials/ask-ai.blade.php,
    // which claims the widget at parse time. Two clients on one input
    // means double sends and a chat that ignores tutor cards.
    if (window.__nxtAiOwned) return;
      const input = document.getElementById("nxAskAiInput");
      const send = document.getElementById("nxAskAiSend");
      const chatBox = document.getElementById("nxAskAiThread");
      const promptBtns = document.querySelectorAll(".nx-ask-chip");
      const budgetBtn = document.querySelector(".nx-ask-budget");

      if (!input || !send || !chatBox || !tutors || !tutors.length) return;

      const winner = tutors[0];

      function addBubble(text, type) {
        window.nxgAppendMsg(chatBox, text, type);
      }

      function submitAsk(q) {
        const value = (q || input.value || "").trim();
        if (!value) return;

        addBubble(value, "user");
        input.value = "";

        setTimeout(() => {
          addBubble(getChatReply(value, winner, tutors), "ai");
        }, 500);
      }

      send.addEventListener("click", function () {
        submitAsk();
      });

      input.addEventListener("keydown", function (e) {
        if (e.key === "Enter") {
          e.preventDefault();
          submitAsk();
        }
      });

      promptBtns.forEach(btn => {
        btn.addEventListener("click", function () {
          const q = this.getAttribute("data-question") || "";
          input.value = q;
          submitAsk(q);
        });
      });

      if (budgetBtn) {
        budgetBtn.addEventListener("click", function () {
          submitAsk("Compare only budget between selected tutors");
        });
      }
    }

    async function renderAiCompare(list) {
      const ids = list.map(x => x.id).join(",");
      if (!ids || !aiUrlBase) return;

      renderAiLoading();

      const city = localStorage.getItem("nx_city") || "";
      const pincode = localStorage.getItem("nx_pin") || "";

      const qs = new URLSearchParams({ ids, city, pincode });
      const url = aiUrlBase + "?" + qs.toString();

      const MIN_LOADER_TIME = 5000;
      const startTime = Date.now();

      let response, data;

      try {
        [response] = await Promise.all([
          fetch(url, {
            headers: { "X-Requested-With": "XMLHttpRequest" }
          }),
          wait(MIN_LOADER_TIME)
        ]);

        data = await response.json();
      } catch (e) {
        const elapsed = Date.now() - startTime;
        if (elapsed < MIN_LOADER_TIME) {
          await wait(MIN_LOADER_TIME - elapsed);
        }

        stopFakeCompareProgress(false);

        if (compareLoadingWrap) compareLoadingWrap.style.display = "none";
        if (grid) grid.style.display = "none"; 
        if (compareResultsMount) {
          compareResultsMount.innerHTML = `
            <div style="padding:16px;background:#fff;border:1px solid #fee2e2;color:#dc2626;border-radius:16px;">
              AI compare failed. Try again.
            </div>
          `;
        }
        return;
      }

      if (!data || !data.ok || !Array.isArray(data.tutors) || !data.tutors.length) {
        stopFakeCompareProgress(false);

        if (compareLoadingWrap) compareLoadingWrap.style.display = "none";
        if (compareResultsMount) {
          compareResultsMount.innerHTML = `
            <div style="padding:16px;background:#fff;border:1px solid #e5e7eb;color:#334155;border-radius:16px;">
              No tutors available for comparison.
            </div>
          `;
        }
        return;
      }

      stopFakeCompareProgress(true);
      await wait(500);

      const tutors = data.tutors
        .map(normalizeTutor)
        .map((t, index) => {
          const matched =
            list.find(x => String(x.id) === String(t.id)) ||
            list.find(x => (x.name || "").trim().toLowerCase() === (t.name || "").trim().toLowerCase()) ||
            list[index] ||
            {};

          return {
            ...t,
            _compareId: matched.id || t.id || "",
            _wa: matched.wa || "#",
            _profile: matched.profile || "#",
            img: matched.thumb || matched.img || t.img || "",
            rating: matched.rating || t.rating || "0.0",
            reviews: matched.reviews || t.reviews || "0"
          };
        })
        .sort((a, b) => b._displayScore - a._displayScore);

      const winner = tutors[0];

      const uiHtml = buildGlassCompareUI(
        tutors,
        list,
        (data.recommendation && data.recommendation.reason) || "Best balance of subject fit, reviews, budget and location."
      );

      if (compareLoadingWrap) compareLoadingWrap.style.display = "none";
      if (compareResultsMount) {
        compareResultsMount.innerHTML = uiHtml;
      }

      if (compareResultsMount) {
        compareResultsMount.insertAdjacentHTML("afterbegin", compareActionsHtml(tutors));
        wireCompareActions(tutors);
      }

      applyCompareLayoutMode();
      wireAskAI(tutors);
      renderComparePieChart(tutors);

      const wrap = document.getElementById("nxgCompareWrap");
      if (compareResizeObserver) {
        compareResizeObserver.disconnect();
        compareResizeObserver = null;
      }

      if (wrap && typeof ResizeObserver !== "undefined") {
        compareResizeObserver = new ResizeObserver(() => applyCompareLayoutMode());
        compareResizeObserver.observe(wrap);
      }

      if (title) title.textContent = "AI Compare Results";
      if (hint) hint.textContent = `Top Recommendation: ${winner.name} (${winner._displayScore}/100)`;

      setTimeout(() => {
        if (compareResultsMount) {
          //compareResultsMount.scrollIntoView({ behavior: "smooth", block: "start" });
        }
      }, 120);
    }

    // What a parent can do with a comparison: book the top tutor, ask the
    // AI about these tutors, or hand the whole comparison to our team on
    // WhatsApp. The WhatsApp buttons carry a Ref (POST /wa/handoff), so Lead
    // Intake knows who was compared and does not ask again.
    function compareActionsHtml(tutors) {
      const winner = tutors[0] || {};
      const first = (winner.name || "the top tutor").split(" ")[0];
      return `
        <div class="nxg-cmp-actions" role="group" aria-label="Next steps">
          <button type="button" class="nxg-cmp-act nxg-cmp-act--wa" data-act="book">
            Book a free demo with ${esc(first)} on WhatsApp
          </button>
          <button type="button" class="nxg-cmp-act" data-act="ask">Ask AI about these tutors</button>
          <button type="button" class="nxg-cmp-act" data-act="help">Help me choose on WhatsApp</button>
          ${winner._profile && winner._profile !== "#" ? `<a class="nxg-cmp-act" href="${esc(winner._profile)}">View ${esc(first)}'s profile</a>` : ""}
        </div>`;
    }

    function wireCompareActions(tutors) {
      const bar = compareResultsMount && compareResultsMount.querySelector(".nxg-cmp-actions");
      if (!bar) return;
      const ids = tutors.map(t => String(t._compareId || t.id || "")).filter(Boolean);

      bar.addEventListener("click", async (e) => {
        const btn = e.target.closest("[data-act]");
        if (!btn) return;
        const act = btn.dataset.act;

        if (act === "ask") {
          if (typeof window.nxgAskAboutCompare === "function") {
            window.nxgAskAboutCompare(tutors.map(t => t.name).filter(Boolean));
          } else {
            const box = document.getElementById("nxAskAiInput");
            if (box) { box.value = "Which of these tutors is best for my child?"; box.focus(); }
          }
          return;
        }

        // Open the tab inside the click, then point it at WhatsApp.
        const win = window.open("", "_blank");
        let url = (tutors[0] && tutors[0]._wa) || "#";
        try {
          const csrf = (document.querySelector('meta[name="csrf-token"]') || {}).content || "";
          const r = await fetch(waHandoffUrl, {
            method: "POST",
            headers: { "Content-Type": "application/json", "Accept": "application/json", "X-CSRF-TOKEN": csrf, "X-Requested-With": "XMLHttpRequest" },
            body: JSON.stringify({
              kind: "compare",
              tutor_ids: ids,
              pick_id: act === "book" ? ids[0] : null,
              from: location.pathname + location.search,
              page_title: document.title,
              known: window.nxgPageContext ? {
                subjects: window.nxgPageContext.subject ? [window.nxgPageContext.subject] : [],
                board: window.nxgPageContext.board || null,
                student_class: window.nxgPageContext.class || null,
                city: window.nxgPageContext.city || null,
                locality: window.nxgPageContext.area || null
              } : {}
            })
          });
          const d = r.ok ? await r.json() : null;
          if (d && d.url) url = d.url;
        } catch (err) { /* falls back to the tutor's own WhatsApp button */ }

        if (url === "#") { if (win) win.close(); return; }
        if (win && !win.closed) win.location.href = url; else window.location.href = url;
      });
    }

    function updateCompareButtons() {
      document.querySelectorAll(".js-compare-toggle").forEach(btn => {
        const id = btn.dataset.id;
        const selected = loadSelected().some(x => String(x.id) === String(id));
        btn.classList.toggle("is-selected", selected);
        btn.textContent = selected ? "Compared ✓" : "Compare";
      });
    }

   
   async function refreshCompare() {
      let list = loadSelected();

      // >3 could only come from stale storage; clamp before anything reads it,
      // otherwise the tray never renders and every card click just alerts.
      if (list.length > 3) {
        list = list.slice(0, 3);
        saveSelected(list);
      }

      if (grid) grid.style.display = list.length ? "none" : "block";
      if (compareLoadingWrap) compareLoadingWrap.style.display = "none";

      if (!list.length && compareResultsMount) compareResultsMount.innerHTML = "";

      showCompareTray(list);
      updateCompareButtons();
    }

    // One dock for every state: stacked faces, the count, and the single action
    // that uses them. "×" empties the basket.
    //
    // It hangs off <body>, NOT off #compareResultsMount: that mount lives in
    // .nxg-compare-slot, which nxt-ds.css collapses to display:none while no
    // real comparison is showing — a tray rendered in there is invisible no
    // matter how it is positioned, so picks piled up unseen until the
    // "up to 3 tutors" alert was the only sign anything had been selected.
    function showCompareTray(list) {
      let dock = document.getElementById("cmpDock");

      if (!list.length) {
        if (dock) dock.remove();
        return;
      }

      if (!dock) {
        dock = document.createElement("div");
        dock.id = "cmpDock";
        dock.className = "cmp-dock";
        document.body.appendChild(dock);
      }

      const ready = list.length >= 2;

      dock.innerHTML = `
        <div class="cmp-dock-faces">
          ${list.map(t => `
            <img class="cmp-dock-face" src="${esc(t.img || "")}" alt="${esc(t.name || "")}"
              onerror="this.style.visibility='hidden'">
          `).join("")}
        </div>
        <div class="cmp-dock-text">
          <strong>${list.length} Tutor${list.length > 1 ? "s" : ""} Selected</strong>
          ${ready ? `<span>Then ask our AI which one fits your child</span>` : `<span>Select 1 more to compare</span>`}
        </div>
        <button type="button" class="cmp-dock-go" ${ready ? "" : "disabled"}>Compare</button>
        <button type="button" class="cmp-dock-clear" aria-label="Clear selection">&times;</button>
      `;

      const goBtn = dock.querySelector(".cmp-dock-go");
      if (goBtn && ready) goBtn.addEventListener("click", () => renderAiCompare(list));

      dock.querySelector(".cmp-dock-clear").addEventListener("click", async () => {
        saveSelected([]);
        await refreshCompare();
      });
    }
    document.addEventListener("click", async (e) => {
      const btn = e.target.closest(".js-compare-toggle");
      if (btn) {
        const list = loadSelected();
        const id = btn.dataset.id;
        const already = list.some(x => String(x.id) === String(id));

        if (already) {
          saveSelected(removeById(list, id));
          await refreshCompare();
          return;
        }

        // if (list.length >= 3) {
        //   alert("You can compare up to 3 tutors at a time");
        //   return;
        // }
        if (list.length >= 3) {
          alert("You can compare up to 3 tutors at a time.");
          return;
        }

        list.push({
          id: btn.dataset.id || "",
          name: btn.dataset.name || "",
          img: btn.dataset.img || "",
          rating: btn.dataset.rating || "0.0",
          reviews: btn.dataset.reviews || "0",
          exp: btn.dataset.exp || "",
          edu: btn.dataset.edu || "",
          budget: btn.dataset.budget || "",
          chip: btn.dataset.chip || "",
          city: btn.dataset.city || "",
          pincode: btn.dataset.pincode || "",
          wa: btn.dataset.wa || "#",
          profile: btn.dataset.profile || "#"
        });

        saveSelected(list);
        await refreshCompare();
        return;
      }

      const rm = e.target.closest(".js-compare-remove");
      if (rm) {
        const id = rm.dataset.id;
        const list = loadSelected();
        saveSelected(removeById(list, id));
        await refreshCompare();
      }
    });

    refreshCompare();
  })();
});
