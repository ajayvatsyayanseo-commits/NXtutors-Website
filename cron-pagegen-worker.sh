#!/bin/bash
APP_DIR="/home/nxtutorsin/htdocs/nxtutors.in"

cd "$APP_DIR" || exit 1

# Start queue worker if not running (pagegen + default)
pgrep -f "artisan queue:work --queue=pagegen,default" >/dev/null 2>&1
if [ $? -ne 0 ]; then
  nohup php artisan queue:work --queue=pagegen,default --tries=3 --sleep=1 --timeout=300 \
    >> storage/logs/pagegen-cron-worker.log 2>&1 &
fi
