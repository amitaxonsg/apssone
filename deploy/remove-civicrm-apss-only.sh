#!/usr/bin/env bash
# Removes APSS CiviCRM only. Preserves WordPress, APSS One proposal plugin, SSL and vhost.
set -euo pipefail
umask 077
ROOT=/var/www/apss.axon.com.sg
BACK=/root/apss-backups
CIVI_PLUGIN="$ROOT/wp-content/plugins/civicrm"
CIVI_UPLOAD="$ROOT/wp-content/uploads/civicrm"
test "$(realpath "$ROOT")" = "$ROOT"
test -f "$ROOT/wp-config.php"
test "$(runuser -u www-data -- wp config get DB_NAME --path="$ROOT")" = apss_one
test -f "$ROOT/wp-content/plugins/apss-one-demo/apss-one-demo.php"
test -d "$CIVI_PLUGIN"
test -f "$CIVI_UPLOAD/civicrm.settings.php"
DBS="$(mysql -N -e "SELECT SCHEMA_NAME FROM information_schema.SCHEMATA WHERE SCHEMA_NAME='apss_civicrm'")"
test "$DBS" = apss_civicrm
mkdir -p "$BACK";chmod 700 "$BACK"
STAMP="$(date -u +%Y%m%dT%H%M%SZ)"
echo "Backing up APSS WordPress and CiviCRM before removal..."
mariadb-dump --single-transaction apss_one > "$BACK/apss-wordpress-pre-civi-removal-$STAMP.sql"
mariadb-dump --single-transaction apss_civicrm > "$BACK/apss-civicrm-removal-$STAMP.sql"
tar -czf "$BACK/apss-civicrm-files-removal-$STAMP.tar.gz" -C "$ROOT/wp-content" plugins/civicrm uploads/civicrm
test -s "$BACK/apss-wordpress-pre-civi-removal-$STAMP.sql"
test -s "$BACK/apss-civicrm-removal-$STAMP.sql"
test -s "$BACK/apss-civicrm-files-removal-$STAMP.tar.gz"
echo "Backups verified under $BACK"
echo "Deactivating APSS CiviCRM..."
runuser -u www-data -- wp plugin deactivate civicrm --path="$ROOT"
echo "Moving APSS-only CiviCRM files out of webroot..."
mv "$CIVI_PLUGIN" "$BACK/apss-civicrm-plugin-removed-$STAMP"
mv "$CIVI_UPLOAD" "$BACK/apss-civicrm-uploads-removed-$STAMP"
echo "Dropping ONLY apss_civicrm and its dedicated local database user..."
mysql <<'SQL'
DROP DATABASE `apss_civicrm`;
DROP USER IF EXISTS 'apss_civicrm_user'@'localhost';
SQL
runuser -u www-data -- wp cache flush --path="$ROOT"
echo "Checking APSS quotation site:"
curl --fail --silent --show-error -o /dev/null -w 'HTTP %{http_code}\n' https://apss.axon.com.sg/
echo "CiviCRM removed from APSS runtime. APSS WordPress and RFQ plugin remain."
echo "Archived backup and moved copies are retained in $BACK for rollback; review retention later."
echo "Shared MariaDB timezone reference tables are UNCHANGED."
