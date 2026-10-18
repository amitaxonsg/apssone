# APSS One — RFQ / Quotation Presentation

**Purpose:** Private quotation reference for Asia Professional Speakers Singapore (APSS), using WordPress solely as a presentation website.

Website: https://apss.axon.com.sg  
Production app architecture: **not selected**; any future custom platform, Xero Cloud integration and Groq-assisted automation are proposed, not delivered.

## Current frontend
- WordPress shortcode: `[apss_one_demo]`
- Dual branding: APSS and Axon 1Pro official image URL supplied by project owner
- Six proposal sections: Executive Summary; RFP Requirements; Proposed Solutions; AI & Automation; Integrations; Implementation & Quotation
- Why Axon: documented APSS service history at least since 2011; continued domain-provider/support relationship in 2026
- Feature cards identify production workflows as Coming Soon
- Quote View/Download displayed as pending and intentionally not clickable until a verified signed file is provided

## Technical reality
- WordPress is the presentation CMS only.
- CiviCRM was removed from APSS runtime and its DB dropped on Oct 19, 2026. Backups retained privately for rollback.
- Do not run scripts in `deploy/` to install/seed CiviCRM. Historical scripts may remain in git history.
- No real APSS member data, payment gateway, Xero synchronisation or Groq AI access is enabled on the RFQ reference.
- No API keys or confidential RFP attachment should be committed to this public repository.

## Deployment
Only update `/var/www/apss.axon.com.sg/wp-content/plugins/apss-one-demo`, using a local backup and syntax checks. Keep APSS site isolation; leave CSL and all other virtual hosts untouched.

## Document priority
Formal quote PDF + Appendix A pricing and the 221-item requirement response are pending. Do not imply they are available until uploaded and verified.

## Source support for Why Axon
Gmail correspondence on December 9, 2011 confirms APSS domain email-forwarder support; records from 2016–2019 show website/hosting/ExCo technical assistance; August 2026 correspondence records Axon's continuing domain-provider and support relationship.
