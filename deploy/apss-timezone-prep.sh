#!/usr/bin/env bash
# APSS One Phase 2: shared MariaDB timezone reference preparation.
# Explicitly authorised exception to domain-only changes. Run manually as root.
set -euo pipefail
umask 077
BACKUP_DIR="/root/apss-backups"
mkdir -p "$BACKUP_DIR"
chmod 700 "$BACKUP_DIR"
STAMP="$(date -u +%Y%m%dT%H%M%SZ)"
BACKUP="$BACKUP_DIR/mariadb-timezones-before-apss-$STAMP.sql"
test -f /usr/share/zoneinfo/Asia/Singapore || { echo "STOP: timezone source missing"; exit 1; }
command -v mariadb-tzinfo-to-sql >/dev/null || { echo "STOP: loader missing"; exit 1; }
mysql -N -e 'SELECT 1' >/dev/null || { echo "STOP: MariaDB access failed"; exit 1; }
COUNT="$(mysql -N -e 'SELECT COUNT(*) FROM mysql.time_zone_name')"
if [ "$COUNT" != "0" ]; then echo "STOP: timezone tables are no longer empty. Review existing data first."; exit 1; fi
mariadb-dump --no-create-db --add-drop-table mysql time_zone time_zone_name time_zone_transition time_zone_transition_type time_zone_leap_second > "$BACKUP"
test -s "$BACKUP" || { echo "STOP: backup failed"; exit 1; }
echo "Timezone backup saved: $BACKUP"
echo "Loading system timezone reference data into shared mysql system tables..."
mariadb-tzinfo-to-sql /usr/share/zoneinfo | mysql mysql
echo "Current timezone names:"
mysql -N -e "SELECT COUNT(*) FROM mysql.time_zone_name"
echo "Conversion test:"
mysql -N -e "SELECT CONVERT_TZ('2026-10-19 12:00:00','UTC','Asia/Singapore')"
echo "Shared reference update completed. No MariaDB restart performed."
