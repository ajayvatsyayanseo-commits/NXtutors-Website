# AWS Cost and Production Safety Code Audit

Date: 2026-07-11  
Branch: `fix/aws-cost-production-safety`  
Scope: application code and repository configuration only. No production access, AWS Cost Explorer data, CloudPanel process list, database mutation, or deployment was performed.

## Executive summary

The repository contains several confirmed mechanisms that can multiply compute, database, storage, and third-party API usage. The highest-risk combination is three independent worker-launch scripts plus a scheduler-launched queue worker, while the database queue's default `retry_after` (90 seconds) is shorter than the configured worker timeouts (120-300 seconds). Long OpenAI calls can therefore be released back to the queue while still running and processed a second time.

The page generator also performs a network-bound OpenAI request inside a database transaction. Spreadsheet imports are loaded fully into memory, can dispatch an unlimited number of expensive jobs, and mark imports complete before their jobs finish. Missing or invalid files are returned to `pending`, creating a once-per-minute retry and logging loop.

Repository-local artifacts support the storage-growth concern: ignored local files currently include about 13 MB of `storage/logs/laravel.log`, about 23 MB of `storage/storage/logs/pagegen-cron-worker.log`, ten worker logs of roughly 4-6 MB each, and many generated avatars around 1.5 MB each. These local sizes do not prove production volume, but they confirm the code paths generate unbounded files.

## Confirmed findings

### 1. Multiple overlapping worker launch mechanisms

- Severity: **critical**
- Evidence:
  - `cron-pagegen-workers-10.sh:4-35` uses a hard-coded application path, clears configuration/cache, and starts ten persistent workers.
  - `cron-queue-workers.sh:3-22` independently starts ten more workers for `pagegen,default`.
  - `cron-pagegen-worker.sh:2-10` independently starts another persistent worker.
  - `routes/console.php:26-28` starts `queue:work` from the Scheduler every minute.
- Status: **confirmed** in code. Whether every script is installed in CloudPanel cron is not known.
- Cost impact:
  - EC2 CPU: up to 21 shell-managed workers plus scheduler-launched workers can compete for CPU and memory.
  - RDS/database: every database-queue worker polls the `jobs` table and can execute duplicate work.
  - EBS/CloudWatch: each shell worker appends to an unrotated log.
  - third-party API/NAT: duplicate jobs repeat OpenAI and other outbound requests.
  - queue duplication: process detection patterns differ, so one launcher does not reliably recognize workers launched by another.
- Safest fix: remove `queue:work` from the Scheduler; use one Scheduler cron and a conservative Supervisor-managed worker fleet. Keep legacy scripts only as finite, locked, explicitly deprecated wrappers during transition.
- Production risk: **high if rollout order is wrong**. Supervisor must be installed/configured and verified before old CloudPanel worker cron entries are disabled. Otherwise queued work will stop temporarily.

### 2. Queue visibility timeout is shorter than worker timeout

- Severity: **critical**
- Evidence:
  - `config/queue.php:44-49` defaults database `retry_after` to 90 seconds.
  - `cron-pagegen-workers-10.sh:28-35` uses `--timeout=120`.
  - `cron-queue-workers.sh:15-22`, `cron-pagegen-worker.sh:7-10`, and `routes/console.php:26` use `--timeout=300`.
  - `app/Services/OpenAiTeacherGenerator.php:222-226` and `:253-257` allow 180-second HTTP calls and retries; tutor generation performs several such calls.
- Status: **confirmed**.
- Cost impact: a reserved database job can become visible before its first worker exits, producing duplicate OpenAI calls, writes, images, logs, CPU work, and data transfer.
- Safest fix: define one environment-driven queue contract where `retry_after` is greater than the maximum worker timeout; bound individual HTTP timeouts/retries and add job uniqueness/atomic row claims.
- Production risk: **medium**. Changing only `retry_after` is backward compatible; worker timeout changes require coordinated Supervisor configuration.

### 3. Non-atomic row claiming permits duplicate generation

- Severity: **critical**
- Evidence:
  - `app/Jobs/PageGen/GenerateFromImportRow.php:24-36` reads status, checks it, then updates it in separate operations.
  - `app/Console/Commands/TutorProcessImports.php:17-29` selects pending rows, marks them processing, then dispatches.
  - `app/Console/Commands/ProcessPageGenJobs.php:22-34` selects pending records, then updates each record later.
  - None of these jobs implements `ShouldBeUnique`, `WithoutOverlapping`, a unique ID, bounded backoff, or a stale-record recovery policy.
- Status: **confirmed**.
- Cost impact: concurrent workers can claim the same logical item, repeating database writes, generated pages/profiles/reviews/images, OpenAI calls, and queue work.
- Safest fix: use a conditional update (`WHERE id = ? AND status IN (...)`) as a short atomic claim, return when zero rows are affected, and add queue uniqueness/overlap middleware as a second layer. Do not hold a transaction during generation.
- Production risk: **medium**. Existing status values can support this without a schema change, but failed/retry semantics require tests.

### 4. OpenAI call occurs inside a database transaction

- Severity: **critical**
- Evidence:
  - `app/Services/PageGen/CreateGeneratedPage.php:81-203` opens `DB::transaction`; the OpenAI generation call occurs at `:127` inside it.
  - `app/Console/Commands/ProcessPageGenJobs.php:34-45` also wraps generator work in a transaction.
- Status: **confirmed**.
- Cost impact:
  - RDS: connections and transaction state remain open during network waits; locks/undo history can grow and concurrency falls.
  - EC2: workers remain occupied while holding database resources.
  - API/queue duplication: timeout or deadlock retries can repeat expensive generation.
- Safest fix: perform duplicate pre-checks and external generation outside transactions; use a short transaction only for final persistence and a final duplicate check.
- Production risk: **medium-high** because generated-page deduplication behavior must remain unchanged. Characterization and retry tests are required before release.

### 5. Imports are unbounded and fully materialized in memory

- Severity: **high**
- Evidence:
  - `app/Console/Commands/PagegenProcessImports.php:43-48` loads an entire workbook and calls `toArray`.
  - `:70-123` has an unlimited default (`--limit=0`) and dispatches one expensive job per row in one run.
  - `app/Services/TutorExcelImporter.php:14-18` also loads the whole workbook and calls `toArray`.
  - `app/Http/Controllers/SuperAdmin/PagegenImportController.php:18-20` allows a 20 MB workbook without a row limit.
- Status: **confirmed**.
- Cost impact: high PHP memory/CPU, large bursts of database inserts and queue jobs, and uncontrolled OpenAI/API demand.
- Safest fix: preflight worksheet row count, reject above an environment-driven maximum, read in bounded chunks, and dispatch only a configured batch per scheduler run.
- Production risk: **low-medium**. Limits may reject previously accepted oversized files, so defaults and UI errors must be documented.

### 6. Missing/invalid imports retry forever and imports finish too early

- Severity: **high**
- Evidence:
  - `app/Console/Commands/PagegenProcessImports.php:31-38` changes a missing file back to `pending`.
  - `:43-53` changes an unreadable workbook back to `pending`.
  - `:127-128` marks the import `done` immediately after dispatch, before generated rows complete.
- Status: **confirmed**.
- Cost impact: scheduler/database/log churn every minute for permanent failures; inaccurate state encourages re-upload/re-dispatch and hides partial failure.
- Safest fix: mark permanent file/validation failures `failed`; keep dispatched imports `processing`; derive completion from row terminal states in a bounded finalization pass.
- Production risk: **medium** because import status display expectations must be preserved.

### 7. Tutor generation is monolithic and retry-unsafe

- Severity: **high**
- Evidence:
  - `app/Services/OpenAiTeacherGenerator.php:15-31` builds profile, reviews, and avatar in one call chain.
  - `:197-230` permits chat retries and includes the full response body in exceptions.
  - `:239-305` generates and writes an avatar before the job's database transaction.
  - `app/Jobs/GenerateTutorFromImportRow.php:57-68` performs all AI operations before inserting the tutor, 30 reviews, and subject/board combinations at `:120-196`.
  - The job has no uniqueness, timeout, backoff, or `failed()` policy (`:21-27`).
- Status: **confirmed**.
- Cost impact: a retry can repeat approximately five logical AI calls, image generation/data transfer, image storage, and all writes. A DB failure after image creation leaves orphan media.
- Safest fix: first add row-level uniqueness and atomic claiming without changing business output. Splitting profile/reviews/image into chained jobs needs additional durable state and is deferred because this audit is prohibited from changing the database.
- Production risk: **medium** for claim/uniqueness; **high** for a full job split without a staged schema rollout.

### 8. External API failures can leak large provider responses into logs

- Severity: **high**
- Evidence:
  - `app/Services/OpenAiTeacherGenerator.php:228-230` adds the complete response body to an exception.
  - `:267-275` logs complete image response bodies/JSON, potentially including base64 image output.
  - `app/Services/OpenAiPageGenerator.php:464-489` uses a 180-second request and throws the complete response body.
  - `app/Http/Controllers/RegisterController.php:272-283` logs complete image failure bodies/JSON.
- Status: **confirmed**.
- Cost impact: fast EBS/log growth, possible CloudWatch ingestion cost, secret/prompt/data exposure, and duplicated exception logging.
- Safest fix: log provider, status, correlation ID, and a short sanitized error code/message only. Never log authorization headers, full prompts/responses, or base64.
- Production risk: **low**; only diagnostic detail changes.

### 9. Logging and worker output have no production-safe default rotation

- Severity: **high**
- Evidence:
  - `config/logging.php:46-61` makes `stack -> single` and `debug` the defaults.
  - Worker scripts append forever to `storage/logs/*.log`.
  - Local ignored files include about 13 MB Laravel log, about 23 MB pagegen worker log, and ten multi-megabyte queue logs.
- Status: code behavior **confirmed**; production file sizes **unknown**.
- Cost impact: EBS growth and snapshots; CloudWatch ingestion if logs are shipped; extra I/O and disk-full outage risk.
- Safest fix: daily logs with environment-driven retention and warning level in production; Supervisor rotation for worker stdout/stderr; read-only storage audit command by default.
- Production risk: **low**. Debug visibility is reduced intentionally in production.

### 10. Generated image storage can grow without lifecycle control

- Severity: **high**
- Evidence:
  - `app/Services/OpenAiTeacherGenerator.php:283-302` writes 1024x1024 PNG files directly under public storage with unique timestamp/random names.
  - Local generated avatars are commonly about 1.5 MB each.
  - There is no repository cleanup/audit command or reference-aware retention policy.
- Status: **confirmed**.
- Cost impact: EBS and snapshot growth, outbound transfer for large images, and orphan files after failed jobs.
- Safest fix: add a read-only-by-default storage audit; avoid automated media deletion; later add reference-aware cleanup and image optimization after production data review.
- Production risk: **low** for audit; **high** for deletion, therefore deletion is not automatic.

### 11. Repeated database work inside import loops

- Severity: **medium**
- Evidence: `app/Console/Commands/PagegenProcessImports.php:99-101` fetches premium schools for every row; `:211-270` performs one or two similar database queries per input row.
- Status: **confirmed**.
- Cost impact: RDS query volume scales linearly with import size before generation starts.
- Safest fix: cache premium-school lookup pools within the command run by normalized city/board key and keep batch size bounded.
- Production risk: **low** if cache scope is only the process and output ordering is preserved.

### 12. Public/API rate limits are partially hard-coded and pincode responses are not cached

- Severity: **medium**
- Evidence:
  - `app/Providers/AppServiceProvider.php:41-59` defines fixed limits rather than environment-driven limits.
  - `app/Http/Controllers/PincodeController.php:13-50` validates six digits and uses bounded HTTP timeouts, but every allowed request calls the provider.
  - `routes/web.php:51-56`, `:95`, and `:161-174` already apply useful public throttles from prior hardening work.
- Status: **confirmed**.
- Cost impact: repeated legitimate/bot lookups can still generate provider and NAT/data-transfer traffic; fixed limits cannot be tuned without code deployment.
- Safest fix: environment-driven named limiters and short-lived caching of successful pincode lookups; do not throttle normal SEO GET pages or static assets.
- Production risk: **low** with conservative defaults.

### 13. Import upload files are placed in a publicly addressable path

- Severity: **medium**
- Evidence: `app/Http/Controllers/SuperAdmin/PagegenImportController.php:28-40` writes spreadsheets under `public/storage/pagegen/imports`.
- Status: **confirmed**.
- Cost/security impact: direct downloads increase data transfer; guessed/leaked paths can expose import data; files accumulate without lifecycle management.
- Safest fix: use the private filesystem for new imports and retain backward-compatible path resolution for existing records. This requires careful production path verification and is deferred from the first low-risk release.
- Production risk: **medium-high** because existing database paths and queued imports must continue to resolve.

### 14. Deployment path is configurable but lacks complete server preflight/release rollback

- Severity: **medium**
- Evidence:
  - `.github/workflows/deploy-cloudpanel.yml:30-65` correctly rejects a `DEPLOY_PATH` ending in `/public` and uses variables rather than a hard-coded host/path.
  - The deployment copies directly into one mutable directory and runs post-deploy commands there; it does not use release directories/current symlink or verify disk space, server `.env`, PHP version, writable paths, and health before activation.
  - The workflow uses `rsync --delete-delay`; excludes protect `.env`, logs, framework state, `public/storage`, and uploads, but rollback is not atomic.
- Status: **confirmed** for workflow behavior; actual CloudPanel document root/application root is **unverified**.
- Cost/reliability impact: a failed in-place deploy can cause retries, worker churn, cache rebuild load, and downtime. A wrong document root can expose source files.
- Safest fix: add non-destructive preflight/postflight checks now; document a release-directory strategy for a later approved migration. Do not move production files automatically.
- Production risk: **low** for validation; **high** for changing live directory layout, so layout movement is manual/deferred.

## Suspected or infrastructure-dependent risks

### A. Actual AWS service cost driver

- Severity: **critical until verified**
- Status: **suspected**, not provable from repository code.
- Verify in AWS Cost Explorer by service, usage type, region, and daily granularity. Specifically inspect EC2 instance hours/type, EBS volume/snapshots, RDS instance/storage/I/O, NAT Gateway bytes/hours, CloudWatch Logs ingestion/storage, data transfer, load balancers, WAF, S3, and CloudFront.
- The reported 91% drop when traffic stopped strongly suggests traffic-triggered compute/database/data transfer or API work, but does not identify one AWS line item.

### B. Bot or abusive traffic concentration

- Severity: **high until verified**
- Status: **suspected**.
- Verify CloudPanel/Nginx access logs for top IPs, URLs, user agents, status codes, bytes sent, request rates, expensive POST/API endpoints, and uncached generated pages. Application code alone cannot establish whether bots drive the bill.

### C. Production worker and cron count

- Severity: **critical until verified**
- Status: launch mechanisms are confirmed; installation/running process count is **unknown**.
- Verify CloudPanel cron entries and `ps` output before changing anything. Supervisor may not be installed.

### D. Database table size, indexes, duplicate records, and stuck rows

- Severity: **high until verified**
- Status: **unknown** without read-only production queries.
- The repository lacks migrations for the `pagegen_imports` and `pagegen_import_rows` tables used by the application, so production schema cannot be inferred reliably.
- No migration or unique/index change will be created in this branch. A read-only duplicate/health audit must precede any future database proposal.

## Database change boundary

This remediation will not create, alter, migrate, delete, or backfill database schema/data. Atomic claims will use existing status and timestamp columns. Recommended status indexes, nullable processing timestamps, durable idempotency keys, and unique constraints are intentionally deferred until the production schema and duplicate population are audited read-only and an administrator approves a separate expand-and-contract rollout.

## Safe implementation sequence

1. Add tests that characterize scheduler entries, atomic claims, duplicate deliveries, stale recovery rules, log sanitization, throttling, and read-only audit commands.
2. Remove scheduler-launched workers and add conservative Supervisor examples plus exact rollout/rollback steps.
3. Add application-level atomic claims, queue uniqueness, bounded retries/timeouts, and stale recovery using existing columns only.
4. Move external calls outside database transactions while preserving final duplicate checks and URLs.
5. Bound import rows/batches and make permanent file errors terminal.
6. Add sanitized API failure handling, pincode caching, environment-driven rate limits/caps, daily logging, cost health check, and read-only storage audit.
7. Add deployment preflight/postflight validation without moving production files or running migrations.
8. Run the complete local validation suite and review the diff. Do not push, deploy, or merge.

