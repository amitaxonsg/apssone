# Domain-only deployment runbook — NOT executed

Target: AXON GERMAN 161.97.137.234; domain: apss.axon.com.sg.
Do **not** modify Faith Develop, other sites, or global server configuration; no NGINX installation.

Current known state from operator's October 19 listing:
- /var/www/apss.axon.com.sg was not present in the supplied directory listing
- ZIP uploaded by operator at /root/APSS-One-repository-ready.zip
- DNS reportedly configured; HTTPS and vhost remain unverified

## Before any writes
- Confirm which existing web-server control panel/configuration manages per-site virtual hosts.
- Inspect domain DNS, current vhost mapping and listening services.
- Inspect PHP version/extensions, database service, disk/RAM and existing backups.
- Agree on domain-specific document root, user and database.
- Avoid broad /var/www permissions changes.

## When ready, after validation
- Create only a dedicated APSS domain-specific web root, OS ownership, vhost and certificate through the EXISTING tooling.
- Install a tested WordPress + CiviCRM pair and isolated database.
- Deploy wordpress/wp-content/plugins/apss-one-demo, activate and publish [apss_one_demo].
- Block indexing and protect preview with staging authentication; use synthetic members only.
- Configure optional GROQ_API_KEY in protected server secret storage, never public HTML or Git.
- Verify mobile, links, event and member workflow, PHP errors and isolated backups.

This file is a runbook, not an automated installer.
