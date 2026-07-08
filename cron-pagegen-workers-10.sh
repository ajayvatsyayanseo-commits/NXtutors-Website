#!/usr/bin/env bash
set -euo pipefail

APP_DIR="/home/nxtutorsin/htdocs/nxtutors.in/public"
PHP_BIN="$(command -v php)"

cd "$APP_DIR"

# ✅ Prevent overlapping cron runs
LOCK_FILE="/tmp/nx_pagegen_workers.lock"
exec 9>"$LOCK_FILE"
if ! flock -n 9; then
  exit 0
fi

# ✅ Ensure cache ok
$PHP_BIN artisan config:clear >/dev/null 2>&1 || true
$PHP_BIN artisan cache:clear  >/dev/null 2>&1 || true

# ✅ Start 10 workers if not already running
WORKERS=10

for i in $(seq 1 $WORKERS); do
  if pgrep -f "artisan queue:work.*--name=nxw$i" >/dev/null 2>&1; then
    continue
  fi

  nohup $PHP_BIN artisan queue:work \
    --queue=default \
    --sleep=1 \
    --tries=3 \
    --timeout=120 \
    --max-time=3500 \
    --name="nxw$i" \
    >> storage/logs/queue-worker-$i.log 2>&1 &
done

exit 0