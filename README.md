# APSS One — MVP foundation

Client concept demo for Asia Professional Speakers Singapore (APSS). Built with WordPress, planned CiviCRM integration, and custom modules.

**Demo domain (planned):** https://apss.axon.com.sg
**Server:** AXON GERMAN (161.97.137.234), not Faith Develop.

## Current state
- WordPress shortcode concept dashboard: `[apss_one_demo]`
- Branding references the APSS supplied logo URL
- No live member data, checkout, CiviCRM connection or Groq integration in this source package
- CiviCRM must be installed and tested separately

## Folder
`wordpress/wp-content/plugins/apss-one-demo/` — WordPress demo plugin.
`docs/` — RFP fit, Groq design and MVP acceptance.
`deploy/` — domain-isolated installation notes.

## Installation boundary
Only `apss.axon.com.sg` and a dedicated database. No changes to server-wide settings, other virtual hosts or other websites. No NGINX installation.

## Important
Do not publish APSS's confidential RFP, personal member records or API keys in this public repository. Use synthetic members for the demo.
