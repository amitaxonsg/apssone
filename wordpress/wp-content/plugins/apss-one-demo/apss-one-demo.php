<?php
/**
 * Plugin Name: APSS One RFQ Proposal
 * Description: Private APSS One digital transformation RFQ and quotation reference.
 * Version: 1.5.0
 * Requires PHP: 8.1
 */
if (!defined('ABSPATH')) exit;
add_action('wp_enqueue_scripts', function () {
  wp_register_style('apss-one-proposal', plugins_url('assets/demo.css', __FILE__), [], '1.5.0');
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
    <section class="rfq-section rfq-visual-plan" id="solution-infographic">
      <div class="rfq-head"><span class="rfq-eyebrow">OUR SOLUTION AT A GLANCE</span><h2>One connected APSS ecosystem.</h2><p>Instead of six disconnected tools, we propose one APSS-owned platform that connects people, learning, events, communications and finances through a single trusted member record.</p></div>
      <div class="rfq-diagram" role="img" aria-label="One APSS member record links Membership, Speaker Directory, Learning and CPD, Events and Community, Administration and Reporting, with controlled integrations and an optional AI assistant.">
        <div class="rfq-diagram-center"><span>APSS ONE</span><strong>One secure member record</strong><small>Single login · Member portal · ExCo administration</small></div>
        <div class="rfq-diagram-items">
        <div><b>01</b><strong>Membership</strong><small>Join · Approve · Renew</small></div>
        <div><b>02</b><strong>Speaker Directory</strong><small>Profiles · Leads · Visibility</small></div>
        <div><b>03</b><strong>Learning & CPD</strong><small>Courses · Evidence · Mentoring</small></div>
        <div><b>04</b><strong>Events & Community</strong><small>Tickets · Check-in · SIGs</small></div>
        <div><b>05</b><strong>ExCo Operations</strong><small>Approvals · Governance · Reports</small></div>
        <div><b>06</b><strong>Connected Services</strong><small>Xero · Zoom · Google · Payments</small></div>
        </div>
        <div class="rfq-diagram-base"><span>APSS-owned dedicated VPS & secure data</span><span>Optional AI Agent · Permission-controlled automation</span></div>
      </div>
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
    <section class="rfq-section rfq-agent" id="mary">
      <div class="rfq-head"><span class="rfq-eyebrow">AI-POWERED OPERATIONS · OPTIONAL ENHANCEMENT</span><h2>Meet Mary — your future APSS AI Agent.</h2><p>Imagine a virtual APSS assistant available around the clock. Members could ask Mary about courses, events and their own membership. Authorised staff could ask her to prepare reports, draft messages and coordinate routine follow-ups using connected APSS records.</p></div>
      <div class="rfq-agent-hero"><div class="rfq-agent-avatar" aria-hidden="true">M</div><div><strong>Mary</strong><span>APSS AI Agent · Proposed concept</span><p>“How may I help you with APSS today?”</p></div><span class="rfq-coming">Optional Phase 2</span></div>
      <div class="rfq-agent-grid">
        <article><h3>For members</h3><ul><li>Explain membership benefits, renewal dates and application steps.</li><li>Find upcoming events and appropriate PD classes.</li><li>Summarise a member's own learning progress after secure login.</li><li>Suggest relevant mentors, groups or opportunities based on approved information.</li></ul></article>
        <article><h3>For event organisers</h3><ul><li>Draft event descriptions, announcements and reminder emails.</li><li>Prepare registration lists and authorised attendance summaries.</li><li>Flag tasks that require a human organiser's attention.</li><li>Summarise feedback and draft follow-up communications.</li></ul></article>
        <article><h3>For APSS administration</h3><ul><li>Answer authorised questions such as “Which memberships expire next month?”</li><li>Find approved documents, policies and committee information.</li><li>Prepare renewal reminders, emails and newsletters for approval.</li><li>Draft monthly membership, events and finance reports with source references.</li></ul></article>
        <article><h3>For speaker enquiries</h3><ul><li>Understand a buyer's event topic, audience and preferred language.</li><li>Suggest relevant speakers using approved public profiles.</li><li>Explain the match and help route the enquiry.</li><li>Draft polite follow-ups without exposing private member information.</li></ul></article>
      </div>
      <div class="rfq-agent-flow"><div><span>1</span><b>Ask Mary</b><small>Natural-language question</small></div><div><span>2</span><b>Check permissions</b><small>Access approved APSS data</small></div><div><span>3</span><b>Prepare action</b><small>Answer, draft or report</small></div><div><span>4</span><b>Human approval</b><small>Send or change records only when authorised</small></div></div>
      <p class="rfq-note"><strong>Important:</strong> Mary is a proposal concept, not a deployed agent. Email sending, payment changes, membership approvals and access to private data require authenticated permissions, logs and appropriate staff approval. Groq and OpenAI API fees, infrastructure and integration costs will be listed separately.</p>
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
      <div class="rfq-matrix-wrap"><table class="rfq-matrix"><thead><tr><th>Module / Feature</th><th>APSS requirement</th><th>Recommended solution / Appendix</th></tr></thead><tbody>
      <?php foreach($modules as $i=>$m): $code=sprintf('A%02d',$i+1); ?>
      <tr><td><strong><?php echo esc_html($m[0]); ?></strong></td><td><?php echo esc_html($m[1]); ?></td><td><a href="#appendix-<?php echo esc_attr($code); ?>">Custom development — <?php echo esc_html($code); ?> ↗</a></td></tr>
      <?php endforeach; ?>
      <tr><td><strong>Dedicated VPS Hosting</strong></td><td>APSS-owned infrastructure, storage, backups, security and continuity.</td><td><a href="#appendix-VPS">Dedicated VPS infrastructure — VPS ↗</a></td></tr>
      <tr><td><strong>AI API Usage</strong></td><td>Optional AI speaker matching, member support and assisted operations.</td><td><a href="#appendix-AI">Groq / OpenAI usage model — AI ↗</a></td></tr>
      </tbody></table></div>
      <div class="rfq-note">The matrix is a conceptual module summary, not yet the complete 221-item compliance response. Module pricing is included within the fixed-fee proposal rather than charged separately per feature.</div><div class="rfq-gap-audit"><h3>Additional compulsory project-wide requirements</h3><p>The module summaries above do not replace separate commitments for security and PDPA, migration from the six existing tools, single sign-on, APSS account and source/data ownership, volunteer usability, 2,000-member/10,000-contact capacity, testing/UAT, training, support response times, warranty, backups, restoration, three-year total cost and Appendix A. These must be priced and addressed explicitly before submitting the quotation.</p></div>
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
      <div class="rfq-ai-economics"><div><span class="rfq-eyebrow">WHY DEVELOPMENT IS CHANGING</span><h3>AI changes how software is built — and what becomes affordable.</h3><p>In the past, developing custom membership workflows, integrations and automation required extensive manual coding, repetitive testing and maintenance. AI-assisted engineering now helps our team produce prototypes, build routine components, document workflows and test changes more efficiently.</p><p>That creates an opportunity for APSS to consider a more ambitious, purpose-built platform with a leaner development process. <strong>However, AI does not eliminate the work required for architecture, security, data migration, quality assurance or ongoing support.</strong> We will provide transparent fixed development prices and separate running costs so APSS can evaluate the actual savings.</p></div><div class="rfq-economics-steps"><div><b>Before</b><span>Manual repetitive development and disconnected workflows</span></div><div><b>Now</b><span>AI-assisted engineering, faster iterations and reusable components</span></div><div><b>For APSS</b><span>Custom automation with controlled delivery and operating costs</span></div></div></div>
      <div class="rfq-price-summary"><div class="rfq-price-feature"><span>PHASE 1 · FIXED DEVELOPMENT FEE</span><strong>S$18,000</strong><p>S$6,000 per month × 3 months · Custom PHP / React application and agreed phased modules</p></div><div class="rfq-price-mini"><span>One-time VPS setup</span><strong>S$500</strong></div><div class="rfq-price-mini"><span>Total one-time fees</span><strong>S$18,500</strong></div><div class="rfq-price-mini"><span>Development deposit (50%)</span><strong>S$9,000</strong></div></div>
      <div class="rfq-quote-details"><article><h3>Hosting & ongoing operating costs</h3><p>We recommend a dedicated APSS-owned VPS using German technology and Singapore-region cloud infrastructure, subject to the selected provider's availability. APSS may pay the provider directly at its actual invoiced price. If APSS prefers Axon to pay and manage provider billing, a 25% service surcharge applies to the underlying provider cost.</p><p>Recurring VPS, storage, backups, email, payment processing, Groq API, OpenAI API and other third-party subscriptions are separate from the S$18,000 development fee. Actual amounts will be confirmed before purchase.</p></article><article><h3>Payment, launch & support</h3><p>A S$9,000 development deposit is required upon approval. Remaining development milestones and the S$500 VPS setup payment will be documented in the formal quotation. The first month after launch includes post-launch assistance. Subsequent optional maintenance is billed on credit hours at S$80 per hour.</p><p>The planned delivery is approximately three months, in agreed phases, with milestones and UAT criteria to be confirmed. AI-assisted engineering reduces repetitive development work but does not remove security, integration, testing or change-control obligations.</p></article></div>
      <div class="rfq-quote-actions"><div><b>View / Download Phase 1 Quote</b><p>Prepared under Axon 1Pro Solutions. Open the complete fixed-fee quotation or download the PDF after it has been uploaded to the site.</p></div><?php $quote_name = 'APSS_One_Phase1_Quotation_Axon_1Pro_Solutions.pdf'; $quote_path = WP_CONTENT_DIR . '/uploads/apss-proposals/' . $quote_name; $quote_url = content_url('uploads/apss-proposals/' . $quote_name); if (is_file($quote_path)): ?><div class="rfq-quote-links"><a href="<?php echo esc_url($quote_url); ?>" target="_blank" rel="noopener noreferrer">View PDF ↗</a><a href="<?php echo esc_url($quote_url); ?>" download>Download PDF ↓</a></div><?php else: ?><span class="rfq-unavailable">PDF upload pending</span><?php endif; ?></div>
      <div class="rfq-stage-grid"><div><strong>Month 1</strong><p>Discovery, architecture, core membership and identity foundations.</p></div><div><strong>Month 2</strong><p>Speaker directory, events, learning and key operational modules.</p></div><div><strong>Month 3</strong><p>Integrations, testing, data migration, training and launch preparation.</p></div><div><strong>Post-launch</strong><p>First month included; thereafter optional support credits.</p></div></div>
      <div class="rfq-note">Pricing shown is a proposed commercial summary, not an assurance that every one of the 221 RFP items is already covered by a final fixed-scope implementation. Formal exclusions, requirements responses, milestones and taxes (if applicable) must be reconciled with the issued quotation.</div>
    </section>
    <footer class="rfq-footer"><div class="rfq-footer-brand">APSS One <span>×</span> Axon 1Pro</div><p>Confidential proposal reference · Prepared for APSS evaluation · Scope and pricing subject to the formal signed submission.</p><p>Axon 1Pro Solutions · Singapore: 10 Anson Road, #10-11, International Plaza, Singapore 079903 · Philippines: Pacdal Road, Baguio City, Benguet 2600 · Clark-based operations · amit@axon.com.sg · © <?php echo esc_html(date('Y')); ?></p></footer>
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
