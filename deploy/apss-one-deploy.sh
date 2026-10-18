#!/usr/bin/env bash
# One-pull APSS demo rollout. No global service changes.
set -euo pipefail
umask 077
ROOT=/var/www/apss.axon.com.sg
REPO=https://github.com/amitaxonsg/apssone.git
CV=/tmp/apss-cv-install.phar
test "$(realpath "$ROOT")" = "$ROOT"
test -f "$ROOT/wp-config.php"
test -f "$CV"
test -f "$ROOT/wp-content/uploads/civicrm/civicrm.settings.php"
test "$(runuser -u www-data -- wp config get DB_NAME --path="$ROOT")" = apss_one
test "$(mysql -N -e "SELECT COUNT(*) FROM information_schema.tables WHERE table_schema='apss_civicrm'")" -ge 150
TMP="$(mktemp -d /tmp/apss-rollout.XXXXXX)"
trap 'rm -rf "$TMP"' EXIT
git clone --depth 1 "$REPO" "$TMP/repo"
SRC="$TMP/repo/wordpress/wp-content/plugins/apss-one-demo"
php -l "$SRC/apss-one-demo.php"
php -l "$SRC/templates/fullwidth.php"
php -l "$TMP/repo/scripts/seed-demo-memberships.php"
BACK=/root/apss-backups
install -d -m 700 "$BACK"
STAMP="$(date -u +%Y%m%dT%H%M%SZ)"
mariadb-dump --single-transaction apss_civicrm > "$BACK/apss-civicrm-$STAMP.sql"
test -s "$BACK/apss-civicrm-$STAMP.sql"
tar -czf "$BACK/apss-one-plugin-$STAMP.tar.gz" -C "$ROOT/wp-content/plugins" apss-one-demo
echo "Backup complete; validating synthetic members..."
cd "$ROOT"
# Membership fixture aborts if any existing record does not match; it does not touch other contacts.
install -m 644 "$TMP/repo/scripts/seed-demo-memberships.php" /tmp/apss-seed-$STAMP.php
runuser -u www-data -- php "$CV" php:eval "require '/tmp/apss-seed-$STAMP.php';"
rm -f "/tmp/apss-seed-$STAMP.php"
cp -a "$SRC/." "$ROOT/wp-content/plugins/apss-one-demo/"
chown -R www-data:www-data "$ROOT/wp-content/plugins/apss-one-demo"
runuser -u www-data -- wp cache flush --path="$ROOT"
curl --fail --silent --show-error --output /dev/null "https://apss.axon.com.sg/"
echo "APSS-only rollout complete. Backups in $BACK"
