# NXT AI — Architecture

How a chat request flows, what the agent may and may not do, how data and
privacy are governed, and where to extend the system. Namespace `App\NxtAi\`
under `app/NxtAi/`.

---

## 1. Request flow

```
Browser
  │  POST /nxt-ai/chat   (or legacy alias POST /ask-nxt-ai)
  │  { message, conversation_id? }  + CSRF token (web middleware)
  ▼
ChatController@chat
  ├─ feature enabled?           (config nxt-ai.enabled → 503 if off)
  ├─ ChatRequest                validate message + conversation_id
  ├─ layered rate limit         per-minute burst + per-day cap (429 if over)
  ├─ ConversationService        resolve/create owner-scoped conversation (403 on IDOR)
  │                             + build compact history + last-tutor ref hints
  └─ NxtAiAgent.run(message, history, ToolContext)
        │
        ▼  bounded loop (max_tool_rounds)
     OpenAI Responses API  (ResponsesClient, store=false)
        │  model returns text OR function_call(s)
        ▼  for each tool call
     ToolRegistry.execute(name, args, context)   ← allowlist; unknown = fail
        │
        ▼
     Tools/*  ──▶  Services (TutorSearch / SiteContent / DemoBooking / Conversation)
        │              │
        │              ▼
        │           MySQL  (register, teacher_review, demo_leads, nxt_ai_*)
        │              │  ranked by TutorRanker (Laravel, not the model)
        ▼              ▼
     ToolResult { data(for model), blocks[], quick_replies[] }
        │
        ▼  loop until model answers with text or budget exhausted
     AgentResult { reply, blocks[], quick_replies[], usage }
        │
        ▼
ChatController  ──▶  record assistant message  ──▶  JSON response contract
```

```mermaid
flowchart TD
    B[Browser] -->|POST /nxt-ai/chat + CSRF| C[ChatController@chat]
    C -->|enabled? validate? rate-limit?| G{Guards pass}
    G -->|no| ERR[JSON error 422/403/429/503]
    G -->|yes| CV[ConversationService<br/>resolve owner-scoped + history]
    CV --> A[NxtAiAgent bounded loop]
    A -->|instructions + input + tool defs| O[OpenAI Responses API<br/>ResponsesClient store=false]
    O -->|function_call| TR[ToolRegistry allowlist]
    O -->|final text| RESULT[AgentResult]
    TR --> T[Tools]
    T --> S[Services]
    S --> DB[(MySQL<br/>register / teacher_review<br/>demo_leads / nxt_ai_*)]
    S --> RK[TutorRanker<br/>deterministic order]
    RK --> BLK[UI blocks]
    T -->|ToolResult data + blocks| A
    A --> RESULT
    RESULT --> C
    C --> JSON[JSON: success, reply, blocks, quick_replies, sources, meta]
    JSON --> B
```

---

## 2. The agent loop (`Agent/NxtAiAgent.php`)

1. Build `instructions` from `SystemPrompt::build()` and `tools` from
   `ToolRegistry::definitions()`.
2. `input = history + user message`.
3. Loop up to `nxt-ai.max_tool_rounds` (default 4):
   - Call `OpenAiChat::respond(instructions, input, tools, maxOutputTokens)`.
   - On a thrown `NxtAiException` (e.g. missing key) → safe error, HTTP 503,
     `error_type=not_configured`.
   - On a non-ok turn (OpenAI HTTP error) → friendly message, HTTP 503,
     `error_type=openai_<status>`.
   - **No tool calls** → return the model's text (or a safe fallback) + all
     blocks gathered so far. Done.
   - **Tool calls present** → append the model's own output items, execute each
     call through `ToolRegistry`, append a `function_call_output` per call, and
     accumulate `blocks` + `quick_replies`. Continue the loop.
4. **Budget exhausted** → return the gathered blocks with a safe fallback reply.
   The loop never runs unbounded and never surfaces internal errors.

`parallel_tool_calls` is `false` and `tool_choice` is `auto`.

---

## 3. Tool boundaries — what OpenAI may / may not do

**May:**
- Decide *which* allow-listed tool to call and with what arguments.
- Phrase the natural-language reply (English or Hinglish).
- Reference tutors by the `index` / `ref` returned by prior tool results.

**May not:**
- Call anything not registered in `ToolRegistry` (there is no `run_sql`,
  `read_table`, or generic DB tool — they do not exist).
- Decide tutor order or match scores — `TutorRanker` does, deterministically.
- Emit private tutor fields — only `PublicTutorFieldMapper`'s allowlist leaves
  the server.
- Invent tutors, fees, ratings, availability, qualifications or policies — the
  prompt forbids it and every factual claim must come from a tool result.
- Treat retrieved content / tool output as instructions — it is data.
- Mark a booking as done without a successful `confirm_demo_booking`.

Every tool validates its own arguments; `ToolRegistry::execute` catches any
throwable and returns `ToolResult::fail(...)` rather than leaking an error.

---

## 4. Database access rules

- **Tutors:** only `register` rows with `join_as='teacher' AND status='t'`
  (`TutorSearchService::baseQuery`). Business key is the string `user_id`.
- **Parameter-bound queries only** — no string interpolation into SQL. A bounded
  candidate pool (`CANDIDATE_POOL = 80`) is fetched, mapped to public arrays,
  then content-filtered and ranked in PHP.
- **Ratings** are a sub-join on `teacher_review` (`status='t'`), aggregated to
  `AVG(rating)` + `COUNT(*)`, joined collation-safe on MySQL
  (`COLLATE utf8mb4_unicode_ci`), plain on other drivers.
- **Two course schemas** (`teacher_courses` string-based,
  `teacher_course_managment` id-based) are both handled by
  `PublicTutorFieldMapper::capabilities`.
- **Subject/board/class/mode filtering** is applied in PHP on the public arrays
  (simpler + safer than dynamic SQL across two schemas). Location and gender are
  filtered in SQL.
- **Legacy tables have no Laravel migrations** — they exist from the SQL dump.
  Only `nxt_ai_conversations`, `nxt_ai_messages`, `nxt_ai_actions` are created by
  this module's migrations.

---

## 5. Privacy rules

- OpenAI API key is server-side only (`config('services.openai.key')`); it never
  reaches the browser.
- `store=false` on every Responses API call → OpenAI does not persist content.
- Conversation content is stored **only** in the app's own owner-scoped DB
  (`nxt_ai_messages`), which is required for memory and rendering history.
- `log_content=false` (default) → raw user/assistant text and OpenAI error
  bodies are redacted in logs; only failure *type*, counts, latency and token
  totals are logged.
- **Public-field allowlist:** `PublicTutorFieldMapper` builds a fresh array of
  known-public fields. `PRIVATE_COLUMNS` (`email, phone, password, c_password,
  otp, otp_status, dob, document_type, document_number, frount_image,
  back_image`) can never appear in output, even if the model changes.

---

## 6. Conversation & ownership flow (`ConversationService`)

- **Identity:** logged-in site users are keyed by session `userid`; guests by a
  SHA-256 of the session id (falling back to IP).
- **Ownership (no IDOR):** `resolve()` looks up the conversation by `uid`
  (a ULID). `assertOwner()` requires the logged-in `user_id` to match, or — for
  guests — `hash_equals` of the stored `guest_session_hash`. A mismatch throws
  `AuthorizationException` → HTTP 403. An unknown `uid` silently starts a fresh
  conversation.
- **Compact history:** the last `history_messages` (default 12) user/assistant
  turns become Responses API input items. An extra assistant "hint" line lists
  the last-shown tutors as `1) Name ref=…; 2) …` so follow-ups like "compare the
  first and third" resolve to real refs.
- **Retention:** guest conversations older than `guest_retention_days`
  (default 14) are removed by `nxt-ai:cleanup`; messages/actions cascade via FK.

---

## 7. Booking confirmation flow

```
prepare_demo_booking (tool)
  ├─ validate name + 10-digit phone (tool-side)
  ├─ resolve optional tutor_ref → tutor name/city (never trust unresolved ref)
  └─ DemoBookingService::prepare
        └─ INSERT nxt_ai_actions { status=prepared, payload,
             confirmation_token_hash = sha256(token),
             confirmation_expires_at = now + confirmation_ttl (900s),
             idempotency_key = sha256(conversation_id | payload) }
        returns plaintext token (to the model, not the user) + masked summary
        block { type: booking_confirmation }  ← "reply confirm"

confirm_demo_booking (tool)   [only after the parent explicitly confirms]
  └─ DemoBookingService::confirm(conversation, token)
        ├─ find action by conversation_id + sha256(token)
        ├─ already confirmed?  → return same reference (idempotent, no re-insert)
        ├─ not confirmable / expired? → friendly failure
        └─ DB::transaction:
              ├─ lockForUpdate the action row (serialize concurrent confirms)
              ├─ INSERT demo_leads (App\Models\DemoLead, source_page='nxt-ai')
              └─ mark action confirmed, executed_at, result_reference = lead id
        returns block { type: booking_success, reference }
```

The `demo_leads` write happens in **exactly one place** and only after explicit
confirmation. It is transactional, row-locked and idempotent.

---

## 8. UI block contract

Blocks are built entirely by Laravel and returned in `blocks[]`. The model never
fabricates them. Block types:

| Type                  | Built by                         | Fields |
|-----------------------|----------------------------------|--------|
| `tutor_cards`         | `SearchTutorsTool`, `GetTutorDetailsTool` | `title`, `items[]` (see card fields below) |
| `tutor_comparison`    | `CompareTutorsTool`              | `title`, `fields[]` (which columns to compare: `subjects, boards, classes, teaching_modes, experience_label, rating, review_count, fee_label, city`), `items[]` |
| `website_information`  | `SearchSiteContentTool`, `GetPricingInfoTool`, `GetDemoClassInfoTool` | `title`, `items[]` each `{ title, type, snippet, url }` |
| `booking_confirmation` | `PrepareDemoBookingTool`         | `title`, `summary{}` (masked phone; only non-empty keys) |
| `booking_success`     | `ConfirmDemoBookingTool`         | `title`, `message`, `reference` |
| `no_results`          | `SearchTutorsTool`               | `title`, `message`, `suggestion` (one relaxation hint) |

**`tutor_cards` item fields** (from `TutorCardMapper`; empty/unknown fields are
omitted, never shown as fake "N/A"): `ref`, `name`, `image_url`, `profile_url`,
`match_score`, and when present `city`, `area`, `subjects[]`, `classes[]`,
`boards[]`, `teaching_modes[]`, `fee_label`, `rating`, `review_count`, `gender`,
`education`, `match_reasons[]`, `experience_label`.

**Top-level JSON response:**

```json
{
  "success": true,
  "conversation_id": "<ULID>",
  "message_id": "<id>",
  "reply": "…",
  "blocks": [ … ],
  "quick_replies": [ "Compare these tutors", … ],
  "sources": [ { "title": "…", "url": "/tutors" } ],
  "meta": { "request_id": "<uuid>", "has_more": false }
}
```

`sources[]` is derived from `website_information` block items that carry a URL.
HTTP status codes: `200` ok, `422` validation, `403` ownership, `429` rate
limit, `503` OpenAI error / feature disabled / not configured. Error responses
use `{ success:false, conversation_id, reply, blocks:[], quick_replies:[], meta:{request_id:null} }`.

---

## 9. Extension points

- **Add a tool.** Implement `Contracts\Tool` (`name`, `description`,
  `parameters` JSON-Schema, `handle`), then add the class to
  `NxtAiServiceProvider::TOOLS`. It is now in the allowlist and offered to the
  model. Validate args inside `handle` and return a `ToolResult` (data for the
  model + optional `blocks`/`quickReplies`).
- **Swap the knowledge base to a full-text table.** Replace the `nxt-ai.knowledge`
  / `nxt-ai.pricing` config source inside `SiteContentService` with a
  `nxt_ai_documents` table + `php artisan nxt-ai:sync-content`. The three site
  tools' contracts stay identical, so nothing else changes.
- **Add embeddings / semantic retrieval.** Introduce an embeddings-backed store
  behind the same `SiteContentService` search method; the tool interface and
  `website_information` block are unaffected.
- **Change the model or limits** via `config/nxt-ai.php` / env only — the model
  id is never hardcoded in code.
