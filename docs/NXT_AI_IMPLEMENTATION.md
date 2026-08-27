# NXT AI — Implementation Log

A living record of what was built, why, and what is left. NXT AI is an in-app
OpenAI tool-calling agent that helps parents find and compare tutors and answer
questions about NXTutors. It **replaces** the old AWS Lambda proxy
(`NXT_AI_FUNCTION_URL`) with an in-app Laravel + OpenAI Responses API
implementation — no external function, same origin, CSRF-protected.

---

## 1. Baseline discovered

- **Stack:** Laravel 12 / PHP 8.2. Web docroot is the `public/` subfolder of the
  Laravel root (`.../Nxtutors Website/public`). App root is the parent of that.
- **Existing OpenAI pattern reused:** the app already had an OpenAI integration
  (`OpenAiPageGenerator`) using `Http::withToken`, explicit timeouts, forced
  IPv4 (`CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4`) and a bounded retry. The new
  `App\NxtAi\OpenAI\ResponsesClient` mirrors that pattern rather than inventing a
  new HTTP convention. API key comes from `config('services.openai.key')`
  (`OPENAI_API_KEY`).
- **Old route replaced:** `POST /ask-nxt-ai` (route name `ask.nxt.ai`) used to
  forward to the Lambda at `NXT_AI_FUNCTION_URL`. It now points at
  `App\NxtAi\Http\Controllers\ChatController@chat` — same controller as the new
  primary route — so existing front-end callers keep working while gaining
  `blocks`. `NXT_AI_FUNCTION_URL` is now unused (kept in `.env.example` only for
  rollback reference).
- **Real tutor schema (already in the DB, defined by the SQL dump, NO Laravel
  migrations):**
  - `register` — tutors are rows with `join_as='teacher'` AND `status='t'`.
    Business key is the string `user_id` (not the numeric PK). Tutor Eloquent
    model is `App\Models\Register`.
  - `teacher_review` — rating rows (`status='t'`), aggregated to avg + count.
  - Two course schemas coexist: `teacher_courses` (string-based columns) and
    `teacher_course_managment` (id-based, joined to category/board/class tables).
    `PublicTutorFieldMapper` reads whichever the tutor uses.
  - `demo_leads` — existing lead table; confirmed demo bookings are written here
    via `App\Models\DemoLead`.
- **Rate-limit primitive available:** a `public-api` named limiter already exists
  in `AppServiceProvider` (30/min by IP, from `config('cost-safety...')`). NXT AI
  routes reuse it and add their own layered per-user limits on top.

---

## 2. Implementation checklist (all done)

- [x] Module namespace `App\NxtAi\` at `app/NxtAi/`.
- [x] Constrained agent loop (`Agent/NxtAiAgent.php`) — bounded by
      `max_tool_rounds`, fails safe on OpenAI/tool errors.
- [x] Contracts: `Contracts/Tool.php`, `Contracts/OpenAiChat.php`.
- [x] DTOs: `TutorSearchCriteria`, `ToolResult`, `AgentResult`.
- [x] OpenAI layer: real `ResponsesClient` (POST `/v1/responses`, `store=false`,
      IPv4, bounded retry on 429/5xx only), `FakeOpenAiChat` (tests),
      `OpenAiResponseParser`, `OpenAiTurn`.
- [x] System prompt (`Prompts/SystemPrompt.php`) — scope, injection resistance,
      safety refusals, Hinglish, "tools for facts / never invent".
- [x] Deterministic ranker (`Ranking/TutorRanker.php`) — weighted match,
      Bayesian rating, stable tie-breaks.
- [x] Services: `TutorSearchService`, `ConversationService`, `SiteContentService`,
      `DemoBookingService`.
- [x] Support: `CityNormalizer`, `SubjectNormalizer`, `ClassNormalizer`,
      `PublicTutorFieldMapper` (allowlist), `TutorCardMapper`, `ToolRegistry`,
      `ToolContext`.
- [x] Eight allow-listed tools (see registry list below).
- [x] HTTP: `ChatController`, `ChatRequest` (validation).
- [x] Service provider (`Providers/NxtAiServiceProvider.php`), registered in
      `bootstrap/providers.php`.
- [x] Routes: `POST /nxt-ai/chat` (primary) + `POST /ask-nxt-ai` (alias).
- [x] Console commands: `nxt-ai:diagnose`, `nxt-ai:cleanup`.
- [x] Migrations + models: `nxt_ai_conversations`, `nxt_ai_messages`,
      `nxt_ai_actions`.
- [x] Config `config/nxt-ai.php` + env vars in `.env.example`.

**Tool allowlist** (order as registered in `NxtAiServiceProvider::TOOLS`):
`search_tutors`, `get_tutor_details`, `compare_tutors`, `search_site_content`,
`get_pricing_info`, `get_demo_class_info`, `prepare_demo_booking`,
`confirm_demo_booking`. If a name is not in `ToolRegistry`, it cannot run.

---

## 3. Key decisions

- **Config-driven knowledge base (v1), not a full-text table.** The website
  knowledge base lives as an array in `config/nxt-ai.php` (`knowledge`,
  `pricing`). `search_site_content` / `get_pricing_info` / `get_demo_class_info`
  read it via `SiteContentService`. Chosen because the corpus is small, factual,
  and easy to keep in sync without a scraper or migration.
  **Upgrade path (documented in the config file):** replace the array with a
  `nxt_ai_documents` full-text table + a `php artisan nxt-ai:sync-content`
  command, **without changing the tool contracts**. See ARCHITECTURE §
  "Extension points".
- **Subject is a hard filter.** A Hindi tutor must never be returned for a Maths
  query. Subject is enforced in `TutorSearchService::applyContentFilters`, not
  merely weighted. Location and gender are also hard filters (in SQL); budget,
  experience and rating are hard exclusions when supplied.
- **Bayesian (confidence-adjusted) rating.** `TutorRanker` uses a prior
  (`PRIOR_MEAN=4.0`, `PRIOR_COUNT=5`) so a single 5★ review does not outrank a
  tutor with many strong reviews. Rating confidence is also a tie-break.
- **Profile URL / ref = base64 token scheme.** `PublicTutorFieldMapper`
  encodes `"{user_id}-nxt"` as URL-safe base64 (`publicToken`) — the same scheme
  the site's `tutor.newshow` route uses. This opaque `ref` is what the model
  passes back for "compare the first and third"; the raw `user_id` is never
  exposed and the token is validated + decoded server-side (`decodeRef`).
- **Driver-aware collation.** `register` and `teacher_review` carry different
  default collations on MySQL, so the rating sub-join adds an explicit
  `COLLATE utf8mb4_unicode_ci`. On sqlite (tests) the COLLATE is omitted. Guarded
  by `DB::connection()->getDriverName() === 'mysql'`.
- **Ranking owned by Laravel, never the model.** OpenAI chooses which tool to
  call and phrases the reply; result order and match scores come from
  `TutorRanker`. The prompt explicitly forbids inventing tutors, fees or order.
- **`store=false` on OpenAI.** Conversation content is not persisted on OpenAI's
  side. It is stored only in the app's own owner-scoped tables (needed for memory
  and the UI). `log_content=false` keeps raw content out of application logs.
- **Writes require explicit confirmation.** `prepare_demo_booking` only stages an
  `nxt_ai_actions` row with a hashed confirmation token + TTL + idempotency key.
  The `demo_leads` insert happens only in `confirm_demo_booking` →
  `DemoBookingService::confirm`, inside a DB transaction with a row lock,
  idempotent on repeat confirms.
- **Backward-compatible alias.** `/ask-nxt-ai` reuses the exact controller so the
  old `{success, reply}` shape still holds, now enriched with `blocks`.

---

## 4. Commands run / used during build

```bash
# From the Laravel root (parent of the web docroot)
php artisan nxt-ai:diagnose          # health check (no secrets printed)
php artisan migrate                  # create the three nxt_ai_* tables
php artisan route:list | grep nxt-ai # verify routes registered
```

`nxt-ai:diagnose` checks: feature enabled, OpenAI key present, model, cURL
available, DB connection, existence of `register` / `teacher_review` /
`demo_leads` / the three `nxt_ai_*` tables, chat route registered, storage
writable, tools registered count, knowledge doc count.

---

## 5. Remaining follow-ups

- [ ] **Set `OPENAI_API_KEY`** in the production `.env` (reused from the app-wide
      OpenAI key; nothing NXT-AI-specific needed). Verify with
      `php artisan nxt-ai:diagnose`.
- [ ] **Run migrations on the production MySQL** so the three `nxt_ai_*` tables
      exist: `php artisan migrate --force`. The legacy tables (`register`,
      `teacher_review`, `demo_leads`, course tables) have **no** Laravel
      migrations — they must already be present from the SQL dump.
- [ ] **(Optional) `nxt_ai_documents` full-text upgrade** when the knowledge base
      outgrows the config array — swap the source behind the existing tool
      contracts.
- [ ] **(Optional) queue for content sync** if/when the KB moves to a table and
      wants scheduled refresh. Not needed for v1 (config-driven, no scraping).
- [ ] Schedule `php artisan nxt-ai:cleanup` daily (guest-conversation retention).
      See the cPanel deployment doc.
