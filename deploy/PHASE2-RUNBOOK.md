# APSS One — controlled Phase 2 installation

**Status:** Script prepared in GitHub, not executed on AXON GERMAN.

## Boundaries
- Application: `/var/www/apss.axon.com.sg`.
- Separate DB: `apss_civicrm`. Do not alter WordPress `apss_one` except through the official CiviCRM WordPress installer.
- No changes to CSL/other site files or vhosts.
- The timezone-table operation below is a *specifically authorised exception*: it updates **shared MariaDB system tables**, not APSS-only data.
- No password/credential output or Git commits of secrets.
- The APSS proposal site stays intact and clearly labels incomplete features.

## 1. Shared timezone-table change (authorised)
Follow `deploy/apss-timezone-prep.sh`. It backs up MariaDB timezone tables before populating them. Confirm service impacts and run during a quiet period. This is a shared DB operation, even though it does not touch other application databases.

## 2. CiviCRM prerequisites
- Verify a fresh backup of `apss_one`, APSS webroot and NGINX vhost; keep outside webroot, e.g. `/root/apss-backups` with restrictive permissions.
- Check official CiviCRM download and release compatibility (WordPress, PHP 8.3, MariaDB 10.11). Do not hardcode unverified version.
- Confirm APSS dedicated PHP-FPM pool and HTTPS both work.
- Confirm the official installer can write its settings under APSS-only uploads.
- Create an `apss_civicrm` DB and a restricted user after checking no pre-existing same-name resources. Credentials must be obtained securely, not echoed to logs.
- Download the **official WordPress archive** from https://civicrm.org/download, verify publisher-provided checksum if available, and unpack ONLY within APSS WordPress plugins directory. Do not activate using unverified scripts.
- Sign in to APSS WordPress as administrator and use Settings → CiviCRM Installer; select the dedicated CiviCRM DB (not the WordPress DB).
- Confirm CiviCRM installer prerequisites and synchronise WordPress users.
- Smoke-test APSS One homepage and WP login.

Reference: https://docs.civicrm.org/installation/en/latest/wordpress/

## 3. APSS configuration (synthetic demonstration)
1. Associate Member (S$350), Professional Member (S$390); track CSP as credential/designation (fee controlled by APSS).
2. Create 5-10 synthetic contacts and demo memberships, and test renewal reminders in sandbox mode, without sending email to real people.
3. Create synthetic event tickets/attendance and profile eligibility; keep payment provider sandbox only.
4. Create custom speaker profiles (WordPress frontend linked to CiviCRM contacts) in subsequent module.
5. Implement custom learning, CPD, mentors, community, Convention and ExCo separately against individually accepted RFP items.
6. Xero Cloud remains proposed: OAuth, mapping, duplicate protection, error queues, reconciliation and test tenant.
7. Groq remains proposed: server-side secret, public-profile-only search first, limited permissions and request caps.

## 4. Before sharing the quotation site
APSS RFP is confidential. Restrict by APSS-specific HTTP authentication or equivalent at domain/vhost level while allowing `/.well-known/acme-challenge/` for renewals. Test public access restrictions.
