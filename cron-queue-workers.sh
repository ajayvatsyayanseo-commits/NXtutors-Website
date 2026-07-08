#!/bin/bash

APP_DIR="/home/nxtutorsin/htdocs/nxtutors.in"
PHP_BIN="/usr/bin/php"
LOG_DIR="$APP_DIR/storage/logs"

cd "$APP_DIR" || exit 1
mkdir -p "$LOG_DIR"

# 10 workers always-on for pagegen + default queues
for i in 1 2 3 4 5 6 7 8 9 10
do
  if ! pgrep -f "artisan queue:work database --queue=pagegen,default --sleep=1 --tries=3 --timeout=300 --max-time=3600 --name=nxw$i" >/dev/null 2>&1
  then
    nohup $PHP_BIN artisan queue:work database \
      --queue=pagegen,default \
      --sleep=1 \
      --tries=3 \
      --timeout=300 \
      --max-time=3600 \
      --name=nxw$i \
      >> "$LOG_DIR/queue-worker-$i.log" 2>&1 &
  fi
done