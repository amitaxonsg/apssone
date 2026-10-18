<?php
/**
 * Plugin Name: APSS One RFQ Proposal
 * Description: Private APSS One digital transformation RFQ and quotation reference.
 * Version: 1.2.0
 * Requires PHP: 8.1
 */
if (!defined('ABSPATH')) exit;
add_action('wp_enqueue_scripts', function () {
  wp_register_style('apss-one-proposal', plugins_url('assets/demo.css', __FILE__), [], '1.2.0');
});
add_shortcode('apss_one_demo', function () {
  wp_enqueue_style('apss-one-proposal');
  $modules = [
    ['Membership & Member Journey','Central record, applications, approval, AM/PM/CSP eligibility, renewal rules and seven-stage growth journey.','Proposed custom member records, application forms, renewal workflows, approval queues and member self-service.','AI-assisted onboarding and renewal prompts'],
    ['Speaker Directory & Profiles','Searchable public speakers, biographies, credentials, expertise and active membership controls.','Profile editor, verified listing rules, category filters, enquiry routing and member-controlled public visibility.','AI speaker-to-buyer matching'],
    ['Communities & SIGs','Private groups, posts, resources, announcements, moderation and digest notifications.','APSS-managed group spaces linked to member eligibility, leadership and access controls.','AI summarisation of approved group resources'],
    ['Events & Registration','Member meetings, RSVP, tickets, check-in, presenters and attendance counting.','Templates, pricing, free RSVP, registrations, attendance and progression evidence.','Event planning and reminder suggestions'],
    ['Convention & Awards','Multi-day Convention passes, competitions, nominations, scoring and sponsors.','Custom convention pages and ticket workflows, submissions, judging and reports.','Draft communications and schedules'],
    ['Professional Development','Four assessed Core Modules, 26 electives, materials, rubrics, resits and progress.','Custom learning catalogue, assessment workflow, content access, recorded evidence and progress tracking.','Relevant learning recommendations'],
    ['CPD, CSP & Mentoring','Points, certificates, eligibility, mentor allocation, meetings and learning reports.','CPD ledger, reviewer permissions, qualification criteria, mentor cycles and certificates.','Mentoring and progression suggestions'],
    ['Communications','Segmented newsletters, consent, automated notifications and templates.','Central communication preferences, reusable messages, campaign workflows and deliverability integration.','AI-assisted drafts with human approval'],
    ['Payments & Xero Cloud','Invoices, membership and event fees, refunds, reconciliation and financial exports.','Unified transactional records and proposed secure Xero Cloud sync with mapping and audit logs.','Exception detection and finance summaries'],
    ['Public Website','APSS-branded content, articles, SEO, programme pages and speaker listings.','WordPress content management with modern layouts and integration to future application services.','Editorial drafts and content discovery'],
    ['ExCo & Governance','Committee permissions, nominations, handovers, approvals, task history and secure documents.','Role-aware workflow console, approval queues and governance repository links.','Summaries and action tracking'],
    ['Reports & Analytics','Membership growth, renewal rate, event attendance, PD progress, finances and exports.','Unified dashboard with filtered operational reports and authorised exports.','Natural-language report assistance']
  ];
  $appendix_details = require plugin_dir_path(__FILE__) . "includes/appendix-details.php";
  ob_start(); ?>
  <div class="apss-rfq" id="rfq-top">
    <div class="rfq-utility"><span>CONFIDENTIAL · INVITED APSS REVIEWERS</span><span>APSS RFP 2026/01 · Proposal reference</span></div>
    <header class="rfq-header">
      <div class="rfq-brand"><img src="<?php echo esc_url('https://www.asiaspeakers.org/wp-content/uploads/2020/06/logo_2-1.png'); ?>" alt="APSS logo" /><span class="rfq-separator">×</span><img class="rfq-axon-logo" src="<?php echo esc_url('https://1prohost.com/assets/axon-1pro-logos-B9lV4mEm.png'); ?>" alt="Axon 1Pro logo" /></div>
      <nav aria-label="Proposal sections"><a href="#executive">Overview</a><a href="#requirements">Requirements</a><a href="#solutions">Solutions</a><a href="#ai">AI</a><a href="#integrations">Integrations</a><a href="#quotation">Quotation</a></nav>
    </header>
    <section class="rfq-hero" id="executive">
      <div class="rfq-overline">A DIGITAL TRANSFORMATION PROPOSAL FOR ASIA PROFESSIONAL SPEAKERS SINGAPORE</div>
      <h1>APSS One<span>One connected association.<br />Built around its people.</span></h1>
      <p>Axon 1Pro's proposal for a unified membership, professional development, events, community and administration experience — designed around APSS's unique processes, governance and long-term ownership.</p>
      <div class="rfq-buttons"><a href="#solutions" class="rfq-btn-primary">Explore proposed solutions ↗</a><a href="#quotation" class="rfq-btn-secondary">View quotation status →</a></div>
      <div class="rfq-fine">Concept and scope reference · Not a completed production platform · Commercial quotation pending approval</div>
    </section>
    <section class="rfq-section">
      <div class="rfq-head"><span class="rfq-eyebrow">01 / EXECUTIVE SUMMARY</span><h2>One member journey. Fewer disconnected systems.</h2><p>APSS currently operates across multiple tools and separate member records. We recommend a future-ready APSS-owned solution with one identity, centralised member data and clear workflows that volunteers can operate.</p></div>
      <div class="rfq-stat-grid"><div><b>One</b><span>Member identity and record</span></div><div><b>Three</b><span>Lead pillars: Membership, PD, Events</span></div><div><b>221</b><span>RFP requirements to address</span></div><div><b>APSS-owned</b><span>Data, hosting and key accounts</span></div></div>
      <div class="rfq-note">The final architecture is subject to discovery and approval. WordPress powers this quotation website; it is not being presented as the complete application engine.</div>
    </section>
    <section class="rfq-section alt" id="requirements">
      <div class="rfq-head"><span class="rfq-eyebrow">02 / RFP REQUIREMENTS</span><h2>We understand what APSS needs.</h2><p>The APSS One specification describes 221 requirements: 138 Must, 68 Should and 15 Could, spanning functional modules, security, privacy and migration. Our detailed item-by-item compliance response will accompany the formal quotation.</p></div>
      <div class="rfq-pillars"><article><strong>Membership Services</strong><p>Member lifecycle, onboarding, renewals, professional levels and growth tracking.</p></article><article><strong>Professional Development</strong><p>Core Modules, electives, assessments, CPD, mentoring and certification progression.</p></article><article><strong>Events & Community</strong><p>Meetings, SIGs, groups, ticketing, Convention and participation evidence.</p></article></div>
      <div class="rfq-note">The complete RFP response, Appendix A pricing schedule and acceptance criteria will determine final commitments; this site summarises our direction.</div>
    </section>
    <section class="rfq-section" id="solutions">
      <div class="rfq-head"><span class="rfq-eyebrow">03 / OUR PROPOSED SOLUTIONS</span><h2>Designed module by module.</h2><p>Every card connects an APSS requirement to a proposed implementation and an optional AI enhancement. Expand each module for the intended workflow. All production modules are <strong>Coming Soon</strong> and subject to approved project scope.</p></div>
      <div class="rfq-module-grid">
      <?php foreach($modules as $index=>$m): ?>
        <details class="rfq-module"><summary><span class="rfq-index"><?php echo esc_html(sprintf('%02d',$index+1)); ?></span><span class="rfq-coming">Coming Soon</span><h3><?php echo esc_html($m[0]); ?></h3><p><?php echo esc_html($m[1]); ?></p><span class="rfq-expand">Read proposed workflow ↗</span></summary><div class="rfq-module-body"><b>Proposed solution</b><p><?php echo esc_html($m[2]); ?></p><b>AI opportunity</b><p><?php echo esc_html($m[3]); ?></p></div></details>
      <?php endforeach; ?>
      </div>
    </section>
    <section class="rfq-section rfq-ai" id="ai">
      <div class="rfq-head"><span class="rfq-eyebrow">04 / AI & AUTOMATION</span><h2>AI as an assistant, not a replacement for oversight.</h2><p>Using a cost-controlled language-model API such as Groq, we can propose speaker discovery, membership guidance, document search, communications drafting and authorised administration reports.</p></div>
      <div class="rfq-pillars"><article><strong>Speaker Match</strong><p>Find speakers from approved public directory attributes and explain their relevance.</p></article><article><strong>Member Concierge</strong><p>Guide onboarding, renewals, programme discovery and commonly asked questions.</p></article><article><strong>ExCo Copilot</strong><p>Draft reports, meeting summaries and action lists from permitted information.</p></article></div>
      <div class="rfq-note">Optional Phase 2. No Groq API connection, autonomous sending or access to actual APSS member records is enabled on this reference website. Permission boundaries and PDPA review are mandatory.</div>
    </section>
    <section class="rfq-section alt" id="integrations">
      <div class="rfq-head"><span class="rfq-eyebrow">05 / CONNECTED SYSTEMS</span><h2>Keep the tools APSS needs. Connect the information.</h2><p>APSS intends to retain Xero, Google Workspace and Zoom. Our proposal connects them securely to the member and operational records, rather than requiring another disconnected process.</p></div>
      <div class="rfq-integrations"><article><strong>Xero Cloud</strong><p>Proposed invoice, payment and refund synchronisation with accounting mappings and reconciliation.</p></article><article><strong>Google Workspace</strong><p>Governance document links, access controls and optional authorised Google sign-in.</p></article><article><strong>Zoom</strong><p>Session links and potential attendance integration subject to API feasibility.</p></article><article><strong>Payment & Communications</strong><p>Preferred gateway, transactional emails, notifications and consent management.</p></article></div>
    </section>
    <section class="rfq-section" id="why-axon">
      <div class="rfq-head"><span class="rfq-eyebrow">WHY AXON 1PRO</span><h2>A relationship with APSS dating back to at least 2011.</h2><p>We understand APSS beyond the requirements document. Our historical correspondence records ongoing assistance with APSS technology, email and website management, and domain services across successive committees and administrators.</p></div>
      <div class="rfq-timeline"><div><b>2011</b><p>Recorded support for APSS domain email forwarding and technical assistance to its team.</p></div><div><b>2016–2019</b><p>Website hosting, ExCo page updates, speaker-directory support, technical troubleshooting and proposals.</p></div><div><b>2026</b><p>Continuing APSS domain-provider relationship, support enquiries from Irene and an AI-powered platform recommendation.</p></div></div>
      <div class="rfq-note">These milestones are grounded in Axon's historical email correspondence. They establish documented support since at least 2011, not uninterrupted website hosting throughout that period.</div>
    </section>
    <section class="rfq-section alt" id="feature-matrix">
      <div class="rfq-head"><span class="rfq-eyebrow">FEATURE MATRIX & APPENDIX</span><h2>Requirements, solutions and detailed explanations.</h2><p>Select a recommended solution to open its corresponding appendix. Every module is proposed as <strong>custom development</strong> for an APSS-owned application on a dedicated VPS. Prices remain blank for the formal quotation.</p></div>
      <div class="rfq-matrix-wrap"><table class="rfq-matrix"><thead><tr><th>Module / Feature</th><th>APSS requirement</th><th>Recommended solution / Appendix</th><th>Development cost (SGD)</th></tr></thead><tbody>
      <?php foreach($modules as $i=>$m): $code=sprintf('A%02d',$i+1); ?>
      <tr><td><strong><?php echo esc_html($m[0]); ?></strong></td><td><?php echo esc_html($m[1]); ?></td><td><a href="#appendix-<?php echo esc_attr($code); ?>">Custom development — <?php echo esc_html($code); ?> ↗</a></td><td><span class="rfq-cost-empty" aria-label="Cost to be completed">&nbsp;</span></td></tr>
      <?php endforeach; ?>
      <tr><td><strong>Dedicated VPS Hosting</strong></td><td>APSS-owned infrastructure, storage, backups, security and continuity.</td><td><a href="#appendix-VPS">Dedicated VPS infrastructure — VPS ↗</a></td><td><span class="rfq-cost-empty">&nbsp;</span></td></tr>
      <tr><td><strong>AI API Usage</strong></td><td>Optional AI speaker matching, member support and assisted operations.</td><td><a href="#appendix-AI">Groq / OpenAI usage model — AI ↗</a></td><td><span class="rfq-cost-empty">&nbsp;</span></td></tr>
      </tbody></table></div>
      <div class="rfq-note">The matrix is a conceptual module summary, not yet the complete 221-item compliance response. Cost cells have deliberately been left blank.</div><div class="rfq-gap-audit"><h3>Additional compulsory project-wide requirements</h3><p>The module summaries above do not replace separate commitments for security and PDPA, migration from the six existing tools, single sign-on, APSS account and source/data ownership, volunteer usability, 2,000-member/10,000-contact capacity, testing/UAT, training, support response times, warranty, backups, restoration, three-year total cost and Appendix A. These must be priced and addressed explicitly before submitting the quotation.</p></div>
    </section>
    <section class="rfq-section" id="appendices">
      <div class="rfq-head"><span class="rfq-eyebrow">TECHNICAL APPENDICES</span><h2>How the proposed solution will work.</h2><p>Each appendix explains the expected workflow, implementation approach and AI opportunity. These modules would be developed specifically for APSS rather than installed as a legacy CRM.</p></div>
      <div class="rfq-appendix-list">
      <?php foreach($modules as $i=>$m): $code=sprintf('A%02d',$i+1); ?>
      <article class="rfq-appendix" id="appendix-<?php echo esc_attr($code); ?>"><div class="rfq-appendix-head"><span>APPENDIX <?php echo esc_html($code); ?></span><a href="#feature-matrix">↑ Return to matrix</a></div><h3><?php echo esc_html($m[0]); ?></h3><h4>APSS requirement</h4><p><?php echo esc_html($m[1]); ?></p><h4>Our recommended custom development</h4><p><?php echo esc_html($m[2]); ?></p><h4>How the module will work in everyday use</h4><ul class="rfq-plain-list"><?php foreach(($appendix_details[$i][1] ?? []) as $step): ?><li><?php echo esc_html($step); ?></li><?php endforeach; ?></ul><h4>How AI could help APSS</h4><p><?php echo esc_html($appendix_details[$i][2][0] ?? $m[3]); ?></p><p class="rfq-rfp-ref">RFP coverage: <?php echo esc_html($appendix_details[$i][0] ?? 'Scope mapping pending'); ?> · Proposal summary, not full item-level compliance.</p><div class="rfq-appendix-foot">Delivery: Proposed · Detailed acceptance criteria and SGD cost to be confirmed</div></article>
      <?php endforeach; ?>
      <article class="rfq-appendix" id="appendix-VPS"><div class="rfq-appendix-head"><span>APPENDIX VPS</span><a href="#feature-matrix">↑ Return to matrix</a></div><h3>Dedicated APSS-owned VPS and Hosting</h3><p>We recommend a dedicated virtual private server for the production application, with APSS retaining ownership of hosting, domain and critical accounts. Scope includes environment setup, HTTPS, database, secured storage, scheduled backups, restore testing, monitoring, software updates and documented disaster recovery.</p><p>Server capacity and region will be sized during discovery based on member activity, media and file storage, events, uptime targets and privacy requirements. Video storage and email delivery may require separate providers.</p><div class="rfq-appendix-foot">One-time VPS setup: SGD ______ · VPS monthly: SGD ______ · Backup/storage monthly: SGD ______ · Maintenance monthly: SGD ______</div></article>
      <article class="rfq-appendix" id="appendix-AI"><div class="rfq-appendix-head"><span>APPENDIX AI</span><a href="#feature-matrix">↑ Return to matrix</a></div><h3>AI Model and API Operating Costs</h3><p>Optional Groq and OpenAI API services may power speaker matching, approved knowledge retrieval, administrative drafting and guided enquiries. We propose server-side credentials, role limits, redaction where appropriate, usage metering, cost ceilings, approval gates and an APSS-controlled provider configuration.</p><p>Costs are usage-based and depend on selected models, token consumption, request volumes, document retrieval and optional speech/other services. Actual model prices should be entered at quotation finalisation.</p><div class="rfq-appendix-foot">Groq API monthly estimate: SGD ______ · OpenAI API monthly estimate: SGD ______ · AI integration/setup: SGD ______</div></article>
      </div>
    </section>
    <section class="rfq-section rfq-quote" id="quotation">
      <div class="rfq-head"><span class="rfq-eyebrow">06 / IMPLEMENTATION & QUOTATION</span><h2>A transparent, phased investment.</h2><p>The formal commercial submission will set out discovery, design, development, migration, security, testing, support, recurring services and optional AI enhancements, including a three-year total cost.</p></div>
      <div class="rfq-quote-actions"><div><b>View / Download Quote</b><p>Quotation PDF and complete Appendix A will be linked here after the approved document is uploaded.</p></div><span class="rfq-unavailable">Document pending · Not available yet</span></div>
      <div class="rfq-stage-grid"><div><strong>Discover & design</strong><p>Requirements mapping, workflows, data and architecture.</p></div><div><strong>Develop & integrate</strong><p>Priority modules and approved systems integrations.</p></div><div><strong>Test & migrate</strong><p>UAT, reconciliation, training and operational handover.</p></div><div><strong>Support & evolve</strong><p>Warranty, ongoing maintenance and optional AI roadmap.</p></div></div>
    </section>
    <footer class="rfq-footer"><div class="rfq-footer-brand">APSS One <span>×</span> Axon 1Pro</div><p>Confidential proposal reference · Prepared for APSS evaluation · Scope and pricing subject to the formal signed submission.</p><p>© <?php echo esc_html(date('Y')); ?> Axon 1Pro Solutions</p></footer>
  </div>
  <?php return ob_get_clean();
});
add_filter('template_include', function($template) {
  if(is_admin() || !is_singular('page')) return $template;
  $page=get_queried_object();
  if(!$page || $page->post_name!=='apss-one' || !has_shortcode((string)$page->post_content,'apss_one_demo')) return $template;
  $custom=plugin_dir_path(__FILE__).'templates/fullwidth.php';
  return is_readable($custom)?$custom:$template;
},99);
