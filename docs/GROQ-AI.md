# Optional Groq AI — design notes

Groq is a hosted inference/API service, not the same as xAI Grok. No AI endpoints are implemented in this repository yet.

First demo: public, approved APSS speaker matching based on synthetic or approved directory entries and public FAQ answers.
Later: authenticated, role-limited membership lookups and admin drafting workflows.

Security:
- Never commit `GROQ_API_KEY` to GitHub or the WordPress plugin.
- Supply key through protected server configuration outside the web root.
- Default AI mode disabled until a key, rate limits and spending controls are configured.
- Keep email sends, payment changes and eligibility approvals behind explicit human authorization.
- Enforce access control server-side; never allow model output to bypass permissions.
- Do not transmit real member private data without APSS approval and PDPA/data processing review.
- Groq free tier availability and limits must be confirmed in the provider console.
