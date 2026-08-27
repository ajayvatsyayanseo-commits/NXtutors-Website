# NXT AI — Deployment (cPanel / shared hosting)

Deploying the NXT AI module on standard cPanel-style hosting. **No AWS, Redis,
Supervisor, Docker or queue worker is required** — NXT AI runs entirely inside
the existing Laravel app and calls OpenAI directly over HTTPS.

Paths below assume the Laravel root is the parent of the public web docroot
(`.../Nxtutors Website/public`), i.e. the folder containing `artisan`,
`composer.json` and `app/`. Run all `php artisan` / `composer` commands from
that Laravel root.

---

## 1. Required PHP extensions

- `curl` — OpenAI HTTPS calls (`ResponsesClient` uses cURL with forced IPv4).
- `pdo_mysql` — database access.
- `mbstring` — multibyte-safe text handling.
- `openssl` — TLS for the OpenAI endpoint and Laravel encryption.

PHP 8.2+ (the app targets Laravel 12). Check in cPanel → "Select PHP Version"
(or MultiPHP Manager) and enable the extensions there.

---

## 2. Required environment variables

Set these in the production `.env`. NXT AI reuses the app-wide `OPENAI_API_KEY`.

**Must set:**

```env
OPENAI_API_KEY=sk-...        # server-side only; never exposed to the browser
NXT_AI_ENABLED=true          # master switch (set false to disable, no deploy)
```

**Commonly tuned (defaults shown; all optional — code has safe fallbacks):**

```env
NXT_AI_MODEL=gpt-5-mini            # falls back to OPENAI_MODEL if unset
NXT_AI_MAX_TOOL_ROUNDS=4
NXT_AI_MAX_OUTPUT_TOKENS=700
NXT_AI_CONNECT_TIMEOUT=10
NXT_AI_REQUEST_TIMEOUT=60
NXT_AI_MAX_RESULTS=6
NXT_AI_DAILY_LIMIT=400
NXT_AI_LOG_CONTENT=false           # keep raw chat content out of logs
NXT_AI_HISTORY_MESSAGES=12
NXT_AI_GUEST_RETENTION_DAYS=14
NXT_AI_MESSAGE_MAX_CHARS=1500
NXT_AI_RATE_PER_MINUTE=12
NXT_AI_RATE_GUEST_PER_DAY=60
NXT_AI_RATE_USER_PER_DAY=300
NXT_AI_CONFIRMATION_TTL=900
```

`NXT_AI_FUNCTION_URL` (the old Lambda) is no longer used by the app — keep it
only if you may roll back to the Lambda (see §8).

---

## 3. Deploy commands (safe, in order)

From the Laravel root:

```bash
# 1. Install production dependencies
composer install --no-dev --optimize-autoloader

# 2. Create the three nxt_ai_* tables (idempotent; --force for non-interactive)
php artisan migrate --force

# 3. Front-end assets — only if other assets changed (see note below)
npm run build

# 4. Cache config/routes/views for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

**Note on `npm run build`:** the public home page loads the AI chat CSS with a
plain `asset()` link, **not** Vite. That stylesheet lives at
`public/frount/assets/css/home.css` (i.e. `public/public/frount/assets/css/home.css`
from the Laravel root). It needs **no build step**. Run `npm run build` only if
you changed other Vite-managed assets.

**After any config/route/env change**, refresh the caches with the clear +
re-cache pair:

```bash
php artisan config:clear && php artisan config:cache
php artisan route:clear  && php artisan route:cache
php artisan view:clear   && php artisan view:cache
```

If a deploy behaves oddly, clearing all four is always safe:
`php artisan optimize:clear`.

---

## 4. Storage permissions

Laravel must be able to write logs and caches:

```bash
chmod -R 775 storage bootstrap/cache
```

Ensure `storage/` and `bootstrap/cache/` are owned by the web user (cPanel
usually handles ownership; only permissions typically need attention).
`nxt-ai:diagnose` reports whether storage is writable.

---

## 5. Outbound network requirement

The server must allow **outbound HTTPS (port 443) to `api.openai.com`**. Many
shared hosts allow this by default; some restrict outbound connections. If OpenAI
calls fail with connection errors while the key is valid, ask the host to allow
outbound 443 to `api.openai.com`. The client forces IPv4, which also avoids
hosts with broken IPv6 egress.

---

## 6. Cron — daily cleanup

Add a cPanel cron job to expire stale guest conversations
(`nxt_ai_conversations` with no user, past retention; messages/actions cascade):

```
0 3 * * *  cd /home/<user>/path-to-laravel-root && /usr/local/bin/php artisan nxt-ai:cleanup >/dev/null 2>&1
```

Adjust the PHP binary path and project path to your account. `--days=N` can
override the configured retention.

---

## 7. Health check

```bash
php artisan nxt-ai:diagnose
```

Prints a table (no secrets) confirming: feature enabled, OpenAI key present,
model, cURL available, DB connected, and that `register`, `teacher_review`,
`demo_leads` and the three `nxt_ai_*` tables exist, chat route registered,
storage writable, tools registered, knowledge docs loaded. Exit code is non-zero
if the OpenAI key is missing, the DB is down, or a required `nxt_ai_*` table is
absent.

> The legacy tables (`register`, `teacher_review`, `demo_leads`, course tables)
> have **no** Laravel migrations — they come from the SQL dump and must already
> exist in the database. If `diagnose` reports them MISSING, import the dump.

Smoke-test the endpoint after deploy — see `NXT_AI_MANUAL_TESTS.md`.

---

## 8. Disable safely / rollback

- **Disable without a deploy:** set `NXT_AI_ENABLED=false` in `.env`, then
  `php artisan config:clear && php artisan config:cache`. The chat endpoint then
  returns a friendly 503 "unavailable" and never calls OpenAI.
- **Rollback to the old Lambda:** point the legacy `ask.nxt.ai` route back at the
  Lambda proxy (`NXT_AI_FUNCTION_URL`) as it was before this module, and disable
  NXT AI as above. The primary `/nxt-ai/chat` route can stay disabled via the
  master switch.
- **Kill switch scope:** the master switch stops all OpenAI usage instantly; no
  code change or redeploy is needed to turn the feature off.
