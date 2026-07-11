# AWS Cost Verification

Code changes do not prove that the AWS bill is fixed. Use AWS billing data and production logs to establish the actual driver.

## AWS Cost Explorer

Compare at least 30 days before and after the traffic interruption using daily granularity:

1. Group by **Service**.
2. For the largest service, group by **Usage type** and **Region**.
3. Inspect EC2 instance hours/type, EBS volumes/snapshots, RDS instance/storage/I/O, NAT Gateway hours/bytes, CloudWatch Logs ingestion/storage, load balancer hours/LCUs, and data transfer.
4. Compare request-serving days to the domain-offline period.
5. Check for Savings Plans/Reserved Instance coverage changes before attributing all change to code.

## Application verification

```bash
cd /home/SITE_USER/htdocs/www.example.com
/usr/bin/php8.2 artisan app:cost-health-check
/usr/bin/php8.2 artisan app:storage-audit
/usr/bin/php8.2 artisan app:audit-generation-duplicates
/usr/bin/php8.2 artisan schedule:list
/usr/bin/php8.2 artisan queue:failed
ps -eo pid,ppid,etime,%cpu,%mem,cmd | grep '[a]rtisan queue:'
sudo supervisorctl status
df -h
du -sh storage storage/logs public/storage 2>/dev/null
```

`app:recover-stale-processing` is read-only by default. Review its output and active process ownership before considering `--apply`.

## Nginx traffic analysis

Locate the CloudPanel site access log first; do not assume one path. Useful fields are client IP, timestamp, method, URI/query, status, bytes sent, referer, user agent, request time, upstream response time, and forwarded IP after trusted-proxy configuration.

Examples after setting `ACCESS_LOG` to the verified path:

```bash
ACCESS_LOG=/path/to/verified/access.log

# Top requested URLs
awk '{print $7}' "$ACCESS_LOG" | sort | uniq -c | sort -nr | head -50

# Top client IPs
awk '{print $1}' "$ACCESS_LOG" | sort | uniq -c | sort -nr | head -50

# Status-code distribution
awk '{print $9}' "$ACCESS_LOG" | sort | uniq -c | sort -nr

# Top user agents for a standard combined log format
awk -F'"' '{print $6}' "$ACCESS_LOG" | sort | uniq -c | sort -nr | head -50

# Expensive application endpoints
grep -E 'ask-nxt-ai|get-pincode-details|page-generator|import-excel|subscription/pay|cashfree/webhook' "$ACCESS_LOG" | tail -200
```

Adjust field numbers to the actual Nginx log format. Never block an IP or user agent solely from one sample; confirm forwarded-IP trust and legitimate traffic first.

## Success criteria

- Expected worker count is stable and no cron launches workers.
- Oldest pending queue age remains bounded.
- Duplicate audit does not increase after retries/restarts.
- Logs and generated media growth are understood and bounded.
- External API call count respects configured caps.
- AWS daily cost by service/usage type confirms improvement.

Infrastructure items such as NAT Gateway, RDS sizing, EC2 family, EBS type, CloudWatch retention, WAF, CloudFront, or Redis require separate administrator review. None is created or assumed by this repository.
