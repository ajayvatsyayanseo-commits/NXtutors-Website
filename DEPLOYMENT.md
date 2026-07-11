# NXTutors CloudPanel Deployment

## Server layout

Use PHP 8.2 for GitHub Actions, CloudPanel CLI, and CloudPanel PHP-FPM. The Composer lock file is resolved against PHP 8.2.0.

`DEPLOY_PATH` must be the Laravel application root, for example:

```text
/home/SITE_USER/htdocs/www.example.com
```

CloudPanel's document root must be the application's `public` directory:

```text
/home/SITE_USER/htdocs/www.example.com/public
```

Do not set `DEPLOY_PATH` to a path ending in `/public`. The workflow rejects that unsafe layout.

## GitHub environment secrets

Create the `production` GitHub Environment and add:

```text
CLOUDPANEL_SSH_USER
CLOUDPANEL_SSH_PRIVATE_KEY
CLOUDPANEL_SSH_PASSWORD          # fallback only; omit when a private key is configured
CLOUDPANEL_KNOWN_HOSTS
APP_KEY
DB_HOST
DB_DATABASE
DB_USERNAME
DB_PASSWORD
REDIS_PASSWORD                  # only when Redis authentication is enabled
MAIL_HOST                       # when SMTP is used
MAIL_USERNAME                   # when SMTP is used
MAIL_PASSWORD                   # when SMTP is used
OPENAI_API_KEY                  # when OpenAI features are enabled
CASHFREE_APP_ID                 # when paid plans are enabled
CASHFREE_SECRET_KEY             # when paid plans are enabled
RAPIDAPI_PINCODE_KEY            # only when a RapidAPI provider is used
NXT_AI_FUNCTION_URL             # when the website AI endpoint is enabled
```

Obtain `CLOUDPANEL_KNOWN_HOSTS` from a trusted server console or verified fingerprint. Do not blindly trust an unverified `ssh-keyscan` result.

## GitHub environment variables

Required:

```text
CLOUDPANEL_HOST
CLOUDPANEL_PORT
DEPLOY_PATH
APP_URL
DB_CONNECTION
DB_PORT
DB_CONNECT_TIMEOUT
```

Recommended application variables:

```text
CLOUDPANEL_PHP_BINARY
APP_NAME
APP_LOCALE
APP_FALLBACK_LOCALE
LOG_CHANNEL
LOG_STACK
LOG_LEVEL
LOG_DAILY_DAYS
SESSION_DRIVER
SESSION_LIFETIME
SESSION_DOMAIN
CACHE_STORE
QUEUE_CONNECTION
DB_QUEUE_RETRY_AFTER
REDIS_QUEUE_RETRY_AFTER
PAGEGEN_WORKER_TIMEOUT
TUTOR_WORKER_TIMEOUT
QUEUE_WORKER_MAX_JOBS
TUTOR_QUEUE
FILESYSTEM_DISK
REDIS_HOST
REDIS_PORT
MAIL_MAILER
MAIL_SCHEME
MAIL_PORT
MAIL_FROM_ADDRESS
MAIL_FROM_NAME
OPENAI_MODEL
OPENAI_IMAGE_MODEL
OPENAI_CONNECT_TIMEOUT
OPENAI_REQUEST_TIMEOUT
OPENAI_RETRY_TIMES
OPENAI_PAGE_DAILY_LIMIT
OPENAI_TUTOR_DAILY_LIMIT
CASHFREE_ENV
CASHFREE_API_VERSION
PINCODE_API_BASE_URL
RAPIDAPI_PINCODE_HOST
PINCODE_CONNECT_TIMEOUT
PINCODE_REQUEST_TIMEOUT
PINCODE_CACHE_SECONDS
PROVIDER_CIRCUIT_FAILURE_THRESHOLD
PROVIDER_CIRCUIT_OPEN_SECONDS
PAGEGEN_IMPORT_MAX_FILE_KB
PAGEGEN_IMPORT_MAX_ROWS
PAGEGEN_IMPORT_BATCH_SIZE
TUTOR_IMPORT_MAX_ROWS
TUTOR_IMPORT_BATCH_SIZE
PROCESSING_STALE_AFTER_MINUTES
TEMP_FILE_RETENTION_DAYS
RATE_LIMIT_PUBLIC_FORM
RATE_LIMIT_PUBLIC_API
RATE_LIMIT_PAYMENT
RATE_LIMIT_WEBHOOK
RATE_LIMIT_ADMIN_GENERATION
RATE_LIMIT_ADMIN_IMPORT
NXT_FACEBOOK
NXT_INSTAGRAM
NXT_LINKEDIN
NXT_GOOGLE_BUSINESS
VITE_APP_NAME
```

Deployment controls:

```text
CACHE_ROUTES=true
```

The workflow does not run migrations. Database changes require a separate reviewed release. Route caching is safe for this release because there are no route closures and `php artisan route:cache` passes.

## First deployment

1. Back up the production database, `.env`, uploaded files, and current application directory.
2. Confirm `php -v` for both the site user and CloudPanel PHP-FPM reports PHP 8.2.
3. Correct the CloudPanel document root to `DEPLOY_PATH/public`.
4. Add the GitHub Environment secrets and variables above.
5. Confirm `APP_KEY` is the existing production key. Never generate a replacement for an existing site.
6. Configure workers using `docs/cloudpanel-worker-setup.md` before disabling old worker cron entries.
7. Run the workflow manually once.
8. Verify the homepage, login, forms, admin area, uploads, mail, queue health, worker count, and Cashfree sandbox/production mode.
9. Review pending migrations separately; do not run them as part of this release.

## Rollback

1. Put the application in maintenance mode: `php artisan down`.
2. Stop the new Supervisor workers.
3. Restore the previous application release without replacing `.env`, `storage`, or uploaded files.
4. No database restore is expected because this release runs no migration.
5. Run `php artisan optimize:clear`, then `php artisan config:cache`, `php artisan view:cache`, and the previously supported route-cache command.
6. Restore exactly one approved worker mechanism, run `php artisan queue:restart`, and run `php artisan up`.

## Rotate an exposed API key

The previously committed RapidAPI key must be treated as compromised. Revoke or regenerate it in the RapidAPI dashboard, update the `RAPIDAPI_PINCODE_KEY` GitHub secret if the provider is still used, and review usage logs. Removing a key from Git history or source code does not invalidate it.

## Before merging

```bash
composer validate --strict
composer install --no-dev --prefer-dist --no-interaction --optimize-autoloader
composer check-platform-reqs --no-dev
php artisan about
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan route:list
php artisan test
./vendor/bin/pint --test
npm ci
npm run build
php artisan config:cache
php artisan view:cache
php artisan route:cache
php artisan route:clear
```
