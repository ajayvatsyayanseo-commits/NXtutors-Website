# CloudPanel Worker Setup

This cutover is manual. Do not disable existing workers until Supervisor is installed, configured, and observed processing a test job. The application itself does not install Supervisor.

## Intended process model

- One Laravel Scheduler cron entry.
- One `pagegen` Supervisor worker.
- One conservative `default` worker for tutor and normal queued work.
- No `queue:work` command in Laravel Scheduler.
- No cron entry for any `cron-*-worker*.sh` file.

The legacy shell scripts remain only as deprecated, finite, locked wrappers. They must not be used for permanent workers.

## Values to verify

```bash
APP_ROOT=/home/SITE_USER/htdocs/www.example.com
PHP_BINARY=/usr/bin/php8.2
SITE_USER=SITE_USER
```

`APP_ROOT` is the directory containing `artisan`, `app/`, `vendor/`, and `.env`. CloudPanel's Nginx document root must be `$APP_ROOT/public`.

## Safe cutover order

1. Record current processes and cron entries:

```bash
ps -eo pid,ppid,etime,cmd | grep '[a]rtisan queue:'
crontab -l
sudo supervisorctl status || true
```

2. Install Supervisor only if it is not already installed, using the server's supported package manager.
3. Copy the two examples from `deployment/supervisor/` to Supervisor's configuration directory.
4. Replace `__APP_ROOT__`, `__PHP_BINARY__`, and `__SITE_USER__`. Do not leave placeholders.
5. Keep `numprocs=1` for both programs during the first production week.
6. Ensure `.env` contains `DB_QUEUE_RETRY_AFTER=660`, `PAGEGEN_WORKER_TIMEOUT=240`, and `TUTOR_WORKER_TIMEOUT=600`.
7. Load Supervisor:

```bash
sudo supervisorctl reread
sudo supervisorctl update
sudo supervisorctl start nxtutors-pagegen:*
sudo supervisorctl start nxtutors-tutor:*
sudo supervisorctl status
```

8. Dispatch one approved low-cost test job and verify exactly one worker claims it.
9. Disable every CloudPanel cron entry that invokes any of:

```text
cron-pagegen-workers-10.sh
cron-queue-workers.sh
cron-pagegen-worker.sh
php artisan queue:work
php artisan queue:listen
```

10. Add or retain exactly one site-user Scheduler cron:

```cron
* * * * * cd /home/SITE_USER/htdocs/www.example.com && /usr/bin/php8.2 artisan schedule:run >> /dev/null 2>&1
```

11. Verify for at least 15 minutes:

```bash
watch -n 5 "ps -eo pid,ppid,etime,cmd | grep '[a]rtisan queue:'"
/usr/bin/php8.2 artisan schedule:list
/usr/bin/php8.2 artisan app:cost-health-check
sudo supervisorctl status
```

Expected worker count is two when both examples are enabled. If tutor generation is disabled, omit the tutor worker and leave `TUTOR_QUEUE=default`; normal default-queue work still needs an approved worker.

## Graceful restart

After deployment:

```bash
cd /home/SITE_USER/htdocs/www.example.com
/usr/bin/php8.2 artisan queue:restart
sudo supervisorctl status
```

## Worker rollback

1. Stop the new Supervisor programs.
2. Re-enable exactly one previously recorded worker mechanism, not all old scripts.
3. Confirm process count and queue movement.
4. Investigate before increasing worker count.

```bash
sudo supervisorctl stop nxtutors-pagegen:*
sudo supervisorctl stop nxtutors-tutor:*
ps -eo pid,ppid,etime,cmd | grep '[a]rtisan queue:'
```
