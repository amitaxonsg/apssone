# APSS One — status and RFP delivery

Verified October 19, 2026: WordPress 7.1.3, CiviCRM 6.19.1, MariaDB 10.11, PHP-FPM 8.3 isolated pool, APSS SSL; v0.6.0 homepage working.
CiviCRM: org ID 1, WP administrator ID 2; Associate type 1 (S$350), Professional type 2 (S$390).
Synthetic individuals: Alex Tan ID 3, Sarah Lim ID 4, Daniel Wong ID 5, Priya Nair ID 6.

## This rollout
- Seed ONLY those four synthetic membership records after exact contact/type validation.
- Show a read-only CiviCRM-backed members demonstration; do not expose member emails.
- Preserve quotation reference marketing homepage, speaker examples, Xero Cloud plan, and Coming Soon flags.

## Remaining for RFP completion
- Full item-by-item 221 requirement response Y/P/O/N.
- Appendix A fixed SGD prices and three-year TCO.
- Delivery schedule, acceptance tests, UAT, data migration, owner access and security.
- Full dynamic speaker profile edit and eligibility sync; courses/CPD/assessor/mentoring; events; community; ExCo; payments; Xero API; Groq API. All remain pending and must not be falsely marked delivered.
- Password-protect the demo before distributing URL externally. No live member data without APSS authorization.

## Deploy
From Bitvise: `bash /tmp/apss-one-deploy.sh` after downloading from repository and reviewing it. This is a user-executed deployment, **not** already executed.
