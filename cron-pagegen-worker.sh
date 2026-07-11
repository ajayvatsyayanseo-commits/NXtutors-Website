#!/usr/bin/env bash
set -euo pipefail

# Deprecated: use deployment/supervisor instead. This wrapper is finite so an
# accidental legacy cron entry cannot create a permanent duplicate worker.
: "${APP_ROOT:?APP_ROOT must point to the Laravel application root}"
PHP_BIN="${PHP_BIN:-$(command -v php)}"
LOCK_FILE="${QUEUE_LOCK_FILE:-/tmp/nxtutors-pagegen-worker.lock}"

if [[ ! -f "$APP_ROOT/artisan" ]]; then
  echo "artisan not found under APP_ROOT=$APP_ROOT" >&2
  exit 1
fi

cd "$APP_ROOT"
exec 9>"$LOCK_FILE"
flock -n 9 || exit 0

exec "$PHP_BIN" artisan queue:work \
  --queue="${QUEUE_NAMES:-pagegen}" \
  --sleep="${QUEUE_SLEEP:-3}" \
  --tries="${QUEUE_TRIES:-3}" \
  --timeout="${QUEUE_TIMEOUT:-240}" \
  --max-jobs="${QUEUE_MAX_JOBS:-25}" \
  --stop-when-empty
