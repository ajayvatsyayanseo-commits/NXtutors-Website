# AWS Production Remediation

## Release boundary

This branch changes application process safety and cost controls. It does not migrate or mutate the production database, move the live application directory, install AWS services, or deploy itself.

No migration files are included. `RUN_MIGRATIONS` is intentionally not part of the deployment workflow. Any future index, unique constraint, or processing-state columns require a separate read-only production schema/duplicate audit and an approved expand-and-contract release.

## Implemented safeguards

- Scheduler no longer starts queue workers.
- Legacy worker scripts are finite, locked, environment-driven, and deprecated.
- Database/Redis queue `retry_after` defaults to 660 seconds, above both documented worker timeouts.
- Page and tutor import rows use conditional atomic claims plus queue uniqueness/overlap locks.
- Stale processing recovery is read-only unless `--apply` is explicitly supplied.
- Page-generation OpenAI calls run outside database transactions.
- Workbook row/file limits and bounded dispatch batches are environment-driven.
- Missing, invalid, empty, or oversized imports become failed instead of retrying every minute.
- OpenAI generation has bounded timeouts/retries, daily caps, and temporary circuit suppression.
- Pincode lookups are validated, throttled, cached, and circuit protected.
- Provider logs exclude response bodies, prompts, authorization values, and base64 images.
- Daily logging and Supervisor log rotation have bounded retention.
- `app:cost-health-check`, `app:storage-audit`, and `app:audit-generation-duplicates` are read-only.

Tutor generation remains one monolithic queued job because safely splitting profile, reviews, image, and persistence requires additional durable state. The first release instead applies atomic claim, unique delivery, bounded retries, timeout alignment, and a daily cap without changing its business output.

## Deployment checklist

1. Review `docs/aws-cost-code-audit.md` and this document.
2. Confirm no pending production migrations will be run.
3. Back up `.env`, application files, user uploads, and database.
4. Confirm CloudPanel CLI and FPM both use PHP 8.2.
5. Confirm `DEPLOY_PATH` contains `artisan`; Nginx document root is `DEPLOY_PATH/public`.
6. Add the environment values documented in `.env.example` and `DEPLOYMENT.md`.
7. Configure Supervisor before disabling old worker cron entries.
8. Run the pre-merge validation commands.
9. Trigger the GitHub workflow manually for the first release.
10. Verify `/up`, homepage, login, forms, admin imports, payment verification, queue depth, logs, and worker count.

## Exact safe server command order

```bash
cd /home/SITE_USER/htdocs/www.example.com
/usr/bin/php8.2 artisan down --retry=60
/usr/bin/php8.2 artisan optimize:clear
/usr/bin/php8.2 artisan storage:link
/usr/bin/php8.2 artisan config:cache
/usr/bin/php8.2 artisan view:cache
/usr/bin/php8.2 artisan route:cache
/usr/bin/php8.2 artisan queue:restart
/usr/bin/php8.2 artisan up
/usr/bin/php8.2 artisan about
/usr/bin/php8.2 artisan app:cost-health-check
```

No `migrate`, `cache:clear`, `config:clear`, or worker-launch command belongs in cron.

## Rollback checklist

1. Put the app in maintenance mode.
2. Stop the new Supervisor workers to prevent mixed-code processing.
3. Restore the previous code release while preserving `.env`, `storage`, `public/storage`, and uploads.
4. Run `optimize:clear`, `config:cache`, `view:cache`, and the previously supported route-cache command.
5. Start the previous single approved worker mechanism.
6. Run `queue:restart`, bring the app up, and verify `/up` and core URLs.
7. Do not restore a database backup for this branch because this branch contains no schema migration. Restore data only under a separately approved incident procedure.

## Post-deployment monitoring checklist

- Worker count remains exactly as configured.
- `jobs` and `failed_jobs` do not grow continuously.
- No active processing row exceeds the configured stale threshold.
- OpenAI daily budget errors are not occurring under normal approved workload.
- Laravel and Supervisor logs rotate and disk use remains stable.
- Nginx top URLs/IPs/user agents do not show abusive request concentration.
- AWS Cost Explorer daily service/usage-type trend declines or identifies a non-code driver.

## Deferred database recommendations

After read-only production inspection, consider non-unique status/updated-time indexes for queue/import tables. Before any unique constraint, run `php artisan app:audit-generation-duplicates`, reconcile duplicates manually, estimate table lock/rebuild time, and use a separate reviewed migration. No constraint should be added from this branch.
