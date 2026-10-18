# Phase 2 — CiviCRM rollout (APSS-only)

Status: **planned, not installed**. Target: `/var/www/apss.axon.com.sg`.

## Confirmed
- WordPress 7.1.3 core checksum passed after filename repair.
- APSS HTTPS homepage and WP login returned 200.
- APSS One demo 0.4.0 active.
- PHP 8.3 CLI with bcmath/curl/dom/gd/intl/mbstring/mysqli/xml/zip.
- MariaDB 10.11.14.
- All live changes must be restricted to APSS domain, APSS files and an APSS-only database. No edits to global NGINX, other sites, or existing shared PHP-FPM pools.

## Before CiviCRM installation
1. Confirm APSS WordPress backups, restore path and database dump.
2. Check PHP-FPM (not only CLI) configuration: max_execution_time >= 240, max_input_time >= 120, upload/post limits >= 50M, memory >= 256M.
3. Check `fileinfo`, `pdo_mysql` and DB timezone table availability.
4. Confirm clean CiviCRM plugin absence and any previous CiviCRM settings files.
5. Confirm permissions and MariaDB ability to create an APSS-only dedicated DB/user if separate DB selected. Never print secrets in logs.
6. Verify official latest CiviCRM WordPress package checksum and supported release.
7. Use official CiviCRM WordPress installer per https://docs.civicrm.org/installation/en/latest/wordpress/.
8. Do not publicly expose installer; configure demo site access controls separately and retain ACME renewal path.
9. Post-install: run CiviCRM status checks, then create synthetic records only.

## First functional demo
- Synthetic Associate, Professional and CSP records.
- Application/approval process and renewal status.
- Record-to-profile eligibility linkage (custom, phase 3).
- Sample event registration and activity.
- No real payments, real member PII, real Xero API connection or Groq model actions without approval.

## Client quotation positioning
One branded site and membership record via WordPress + CiviCRM. APSS-specific modules are independently developed on top. Coming Soon is not completed compliance. Xero remains accounting source of truth and sync is planned/subject to integration testing.

## Documentation
Official: https://docs.civicrm.org/installation/en/latest/requirements/
