#!/usr/bin/env bash
set -euo pipefail

# Deprecated compatibility wrapper. Use Supervisor for persistent workers.
: "${APP_ROOT:?APP_ROOT must point to the Laravel application root}"
PHP_BIN="${PHP_BIN:-$(command -v php)}"
LOCK_FILE="${QUEUE_LOCK_FILE:-/tmp/nxtutors-legacy-queue-worker.lock}"

if [[ ! -f "$APP_ROOT/artisan" ]]; then
  echo "artisan not found under APP_ROOT=$APP_ROOT" >&2
  exit 1
fi

cd "$APP_ROOT"
exec 9>"$LOCK_FILE"
flock -n 9 || exit 0

exec "$PHP_BIN" artisan queue:work \
  --queue="${QUEUE_NAMES:-pagegen,default}" \
  --sleep="${QUEUE_SLEEP:-3}" \
  --tries="${QUEUE_TRIES:-3}" \
  --timeout="${QUEUE_TIMEOUT:-600}" \
  --max-jobs="${QUEUE_MAX_JOBS:-10}" \
  --stop-when-empty
