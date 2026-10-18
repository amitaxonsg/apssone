<?php
/**
 * Plugin Name: APSS One Demo Interface
 * Description: APSS One presentation portal. All example data is synthetic; live CiviCRM integration is a future phase.
 * Version: 0.4.0
 * Requires PHP: 8.1
 */
if (!defined('ABSPATH')) exit;
add_action('wp_enqueue_scripts', function () {
    wp_register_style('apss-one-demo', plugins_url('assets/demo.css', __FILE__), [], '0.4.0');
});
add_shortcode('apss_one_demo', function () {
    wp_enqueue_style('apss-one-demo');
    $logo = 'https://www.asiaspeakers.org/wp-content/uploads/2020/06/logo_2-1.png';
    $groups = [
      'Members' => [
        ['Membership & Renewals','users','Applications, AM/PM/CSP levels, approvals, renewal reminders and payment history.','Application → review → approval → active membership → renewal','CiviCRM integration'],
        ['Speaker Directory','mic-2','Public speaker profiles, expertise, languages, industry focus and enquiries.','Member updates profile → eligibility check → public listing','Custom module'],
        ['Member Journey','route','Seven growth stages: Discover, Join, Belong, Develop, Build, Lead, Legacy.','Engagement evidence → milestone → next recommended action','Custom module'],
      ],
      'Engagement' => [
        ['Events & Check-in','calendar','Meetings, workshops, member pricing, RSVP, QR check-in and attendance.','Create event → register → attend → update member record','CiviCRM extension'],
        ['Communities & SIGs','messages','Special Interest Groups, member discussions, announcements and resource sharing.','Join eligible group → collaborate → receive digests','Custom module'],
        ['Convention & Awards','trophy','Multi-day conference passes, speaker submissions, awards and judging.','Submit → review → register → check in','Custom module'],
      ],
      'Learning' => [
        ['Professional Development','graduation','Four assessed Core Modules and 26 electives across four skill areas.','Enrol → learn → assess → record outcome','Custom module'],
        ['CPD & Certifications','award','Assessor rubrics, evidence uploads, resits, points and certificates.','Submit evidence → independent assessment → certification','Custom module'],
        ['Mentoring','handshake','Mentor matching, cycles, sessions and learning progress.','Request mentor → match → log sessions → review','Custom module'],
      ],
      'Operations' => [
        ['Communications','mail','Member segments, newsletters, event notices, consent and scheduled reminders.','Choose segment → approve → send → report','CiviMail integration'],
        ['Finance & Xero Cloud','wallet','Membership fees, event payments, invoices, receipts, refunds and automated reconciliation with Xero Cloud.','CiviCRM records payment → authorised connector syncs invoice/payment/refund to Xero → reconciliation and exception monitoring','CiviCRM + custom Xero Cloud API connector'],
        ['ExCo Administration','shield','Portfolio roles, approvals, committee handovers, audit trails and reports.','Task assigned → approval → audit → handover','Custom module'],
      ],
      'AI & Insights' => [
        ['AI Speaker Match','sparkles','Match public, approved speaker profiles to enquiries.','Visitor describes event → AI recommends speakers','Optional Groq integration'],
        ['AI Member Assistant','bot','Membership FAQs, events and course recommendations from approved materials.','Ask question → grounded answer → relevant action','Optional Groq integration'],
        ['Analytics & Reporting','chart','Growth, retention, event attendance, PD completion and dashboards.','Choose metric → filter → view or export','Custom reports'],
      ]
    ];
    ob_start(); ?>
    <div class="apss-one" id="apss-one">
      <div class="apss-topbar"><span>ASIA PROFESSIONAL SPEAKERS SINGAPORE</span><span><span class="apss-dot"></span> AXON CONCEPT DEMONSTRATION</span></div>
      <header class="apss-header">
        <a class="apss-brand" href="#apss-one"><img src="<?php echo esc_url($logo); ?>" alt="Asia Professional Speakers Singapore logo" loading="lazy"><span><strong>APSS <em>One</em></strong><small>Your membership. Your community. One place.</small></span></a>
        <nav class="apss-nav" aria-label="APSS One demo navigation"><a href="#apss-journey">Member journey</a><a href="#apss-features">Platform</a><a href="#apss-ai">AI roadmap</a></nav>
        <span class="apss-preview-pill">● Concept preview</span>
      </header>
      <section class="apss-hero">
        <div class="apss-hero-copy">
          <div class="apss-kicker">A NEW DIGITAL HOME FOR APSS</div>
          <h1>One community.<br><span>Limitless possibilities.</span></h1>
          <p>A unified experience connecting professional speakers to their community, learning, events, and opportunities — all powered by one member record.</p>
          <div class="apss-actions"><a class="apss-primary" href="#apss-features">Explore the experience <span>↗</span></a><a class="apss-secondary" href="#apss-journey">See the member journey →</a></div>
          <div class="apss-hero-note">Prototype only · No real membership data · No live transactions</div>
        </div>
        <div class="apss-hero-panel" aria-label="Illustrative member dashboard">
          <div class="apss-windowbar"><span>APSS ONE / MEMBER OVERVIEW</span><span>● ● ●</span></div>
          <div class="apss-avatarline"><div class="apss-avatar">AS</div><div><b>Welcome back, Alex</b><small>Professional member · Illustrative profile</small></div><span class="apss-active">Active (demo)</span></div>
          <div class="apss-mini-grid"><div><small>Journey stage</small><b>Build</b><span>Business & visibility</span></div><div><small>Core modules</small><b>3 / 4</b><span>Illustrative progress</span></div></div>
          <div class="apss-progress-title"><span>Professional development</span><b>75%</b></div><div class="apss-progress"><i></i></div>
          <div class="apss-upcoming"><span class="apss-date"><b>24</b><small>NOV</small></span><div><b>Monthly Member Meeting</b><small>Event example · Registration coming soon</small></div><span>↗</span></div>
          <div class="apss-panel-foot">This panel uses fictional data and demonstrates the planned experience.</div>
        </div>
      </section>
      <section class="apss-value"><div><b>One member record</b><span>Across programmes and activities</span></div><div><b>One login</b><span>For members and volunteers</span></div><div><b>One connected experience</b><span>From discovery to legacy</span></div></section>
      <section id="apss-journey" class="apss-section apss-journey">
        <div class="apss-section-heading"><div><div class="apss-kicker dark">BUILT AROUND EVERY SPEAKER</div><h2>Every milestone, connected.</h2></div><p>Track the seven stages of the APSS membership and speaker growth journey — from your first connection to a lasting legacy.</p></div>
        <div class="apss-steps"><?php foreach (['Discover','Join','Belong','Develop','Build','Lead','Legacy'] as $i=>$step): ?><div class="apss-step"><span><?php echo esc_html(sprintf('%02d',$i+1)); ?></span><b><?php echo esc_html($step); ?></b></div><?php endforeach; ?></div>
        <div class="apss-disclaimer">Journey tracking and eligibility automation are planned features, not implemented in this prototype.</div>
      </section>
      <section id="apss-features" class="apss-section apss-features">
        <div class="apss-section-heading"><div><div class="apss-kicker dark">THE COMPLETE PLATFORM VISION</div><h2>Everything APSS needs.<br><span>Beautifully connected.</span></h2></div><p>Explore each module to understand its proposed member experience and workflow. Select any card to expand the feature concept.</p></div>
        <div class="apss-legend"><span class="apss-tag">Coming soon</span> Indicates planned functionality, not active services</div>
        <?php foreach ($groups as $group=>$modules): ?>
          <div class="apss-group" <?php if ($group==='AI & Insights') echo 'id="apss-ai"'; ?>><h3><?php echo esc_html($group); ?></h3><div class="apss-grid">
            <?php foreach ($modules as $i=>$m): ?>
            <details class="apss-tile"><summary><span class="apss-icon" aria-hidden="true"><?php echo esc_html(['Members'=>'◎','Engagement'=>'◇','Learning'=>'✦','Operations'=>'▤','AI & Insights'=>'✳'][$group]); ?></span><span class="apss-tag">Coming soon</span><h4><?php echo esc_html($m[0]); ?></h4><p><?php echo esc_html($m[2]); ?></p><span class="apss-open">Explore concept <span>↗</span></span></summary><div class="apss-tile-details"><b>How it will work</b><p><?php echo esc_html($m[3]); ?></p><small>Proposed implementation: <?php echo esc_html($m[4]); ?>. This is a planned capability, not an operational feature.</small></div></details>
            <?php endforeach; ?>
          </div></div>
        <?php endforeach; ?>
      </section>
      <section id="apss-architecture" class="apss-section apss-architecture">
        <div class="apss-section-heading"><div><div class="apss-kicker dark">PROPOSED OPEN-SOURCE FOUNDATION</div><h2>One platform. Built for APSS.</h2></div><p>This quotation reference presents a single branded experience delivered with WordPress, CiviCRM and APSS-specific extensions.</p></div>
        <div class="apss-tech-grid">
          <article><span>FOUNDATION 01</span><h3>WordPress</h3><p>Public website, searchable speaker pages, visual editing, user experience and customised member dashboards.</p><a href="https://wordpress.org/" target="_blank" rel="noopener noreferrer">WordPress project ↗</a></article>
          <article><span>FOUNDATION 02</span><h3>CiviCRM</h3><p>Central contact and member records, membership levels and renewals, contributions, standard events, email segments and reports. Custom extensions connect the specialist APSS workflows to its records.</p><a href="https://civicrm.org/" target="_blank" rel="noopener noreferrer">Explore CiviCRM ↗</a></article>
          <article><span>ACCOUNTING INTEGRATION</span><h3>Xero Cloud</h3><p>Xero stays APSS’s accounting system. A proposed secure sync sends approved invoices, payments, refunds and contact references from APSS One to Xero, with mapping, reconciliation, retry logs and duplicate controls.</p><a href="https://www.xero.com/sg/" target="_blank" rel="noopener noreferrer">Xero Cloud ↗</a></article>
        </div>
        <div class="apss-architecture-note"><strong>Integration boundaries:</strong> WordPress and CiviCRM are the proposed foundation, not yet a live CiviCRM connection in this demo. Xero Cloud sync is proposed custom development and requires an authorised APSS Xero connection, validation of accounting rules and API testing.</div>
      </section>
      <section class="apss-section apss-rfp-overview">
        <div class="apss-section-heading"><div><div class="apss-kicker dark">RFP / DELIVERABLE EXPLANATION</div><h2>What we will develop.</h2></div><p>Each module below will be built on the shared membership foundation. The cards above describe the individual workflow; this table shows the development approach for APSS decision-makers.</p></div>
        <div class="apss-table-scroll"><table class="apss-rfp-table"><thead><tr><th>Requested module</th><th>Foundation and custom scope</th><th>Proposal status</th></tr></thead><tbody>
        <?php
          $plans = [
            ['Membership services & journeys','CiviCRM membership, custom approval flow, seven-stage tracking, configurable AM/PM/CSP pathways and renewal automation.'],
            ['Speaker directory','WordPress public profile pages, CiviCRM membership eligibility checks, expertise filters, enquiry routing and member self-editing.'],
            ['Community and SIGs','Custom protected groups, discussions, notifications, moderation, member permissions and resource sharing.'],
            ['Events','CiviEvent-based event records plus custom ticket rules, check-in, attendance, organisers and specialised formats.'],
            ['Convention','Custom passes, multi-day sessions, ticketing, sponsor views and exports linked to CiviCRM contact records.'],
            ['Professional development','Custom course catalogue, protected learning resources, assessments, 4 Core Modules, 26 electives, CPD and mentoring rules.'],
            ['Communications','CiviMail and consent segmentation plus APSS-specific templates, automations, deliverability provider and scheduling.'],
            ['Finance & Xero Cloud','CiviCRM payments/invoices and a custom approved sync to Xero for invoices, payment status, refunds, reconciliation and exceptions.'],
            ['Public website','WordPress page templates, content management, SEO, responsive layouts and member-directory integration.'],
            ['ExCo & administration','Role-based approvals, delegated portfolio access, tasks, audit events, committee handovers and data safeguards.'],
            ['Reports & analytics','Unified member, renewals, events, learning and financial reporting; CSV/Excel exports and ExCo-only metrics.'],
            ['Migration, integration & security','Data matching from existing tools, staging, backups, PDPA procedures, single login and handover documentation.']
          ];
          foreach ($plans as $plan) {
            echo '<tr><th scope="row">'.esc_html($plan[0]).'</th><td>'.esc_html($plan[1]).'</td><td><span class="apss-tag">Coming soon</span></td></tr>';
          }
        ?>
        </tbody></table></div>
        <p class="apss-disclaimer">This is a proposal-reference explanation, not a completed compliance matrix or a fixed-price offer. Final requirement commitments are documented separately against the APSS RFP.</p>
      </section>
      <section id="apss-delivery" class="apss-section apss-quotation-guide">
        <div class="apss-section-heading"><div><div class="apss-kicker dark">PROPOSAL WALKTHROUGH</div><h2>From concept to delivery.</h2></div><p>Use this view alongside the formal quotation to distinguish the current demonstrator from the planned production system.</p></div>
        <div class="apss-quotation-grid">
          <div class="apss-quote-card"><span class="apss-quote-num">01 / FOUNDATION</span><h3>Unified membership</h3><p>WordPress serves the branded experience. CiviCRM is proposed for a single member record, memberships, renewals, contacts, payments and standard events.</p><b>Next development milestone</b><small>CiviCRM installation, member roles, synthetic records and basic status-based workflows.</small></div>
          <div class="apss-quote-card"><span class="apss-quote-num">02 / SPECIALIST MODULES</span><h3>Built around APSS</h3><p>Custom speaker-directory eligibility, community spaces, learning, assessments, CPD, mentoring, competitions and ExCo workflows.</p><b>Planned / Coming Soon</b><small>Detailed scope and acceptance criteria to be confirmed against the 221-item RFP compliance matrix.</small></div>
          <div class="apss-quote-card"><span class="apss-quote-num">03 / CONNECTED SERVICES</span><h3>APSS-operated ecosystem</h3><p>Planned integrations with Xero, Zoom, Google Workspace and payment/email providers, with ownership and access controlled by APSS.</p><b>Planned / Coming Soon</b><small>Integrations, migration and operating costs must appear separately in the formal quotation.</small></div>
          <div class="apss-quote-card"><span class="apss-quote-num">04 / OPTIONAL INTELLIGENCE</span><h3>AI with oversight</h3><p>Optional Groq-backed speaker matching, FAQs and administrative drafting using only approved data and permission-limited application tools.</p><b>Phase 2 concept</b><small>No live AI calls, payment changes or member-data access are enabled in this demo.</small></div>
        </div>
        <div class="apss-quote-disclaimer"><strong>Quotation note:</strong> This demonstration explains proposed workflows; it is not proof that a requirement has been delivered. The signed RFP response, fixed-price schedule, architecture, testing criteria and implementation plan remain the authoritative scope.</div>
      </section>
      <section class="apss-ai-banner"><div><div class="apss-kicker">OPTIONAL PHASE 2 · GROQ API</div><h2>Intelligence that helps people connect.</h2><p>Future AI-powered speaker discovery, membership guidance, and staff-assisted reporting — with strict permissions, approved data and human oversight.</p><span>API service is not connected in this demo.</span></div><div class="apss-ai-mark" aria-hidden="true">✳</div></section>
      <footer class="apss-footer"><div><b>APSS <em>One</em></b><p>A concept proposal by Axon 1Pro Solutions</p></div><div>Built on a proposed WordPress + CiviCRM foundation.<br>All showcased content is illustrative. Features marked Coming Soon are not implemented.</div></footer>
    </div>
    <?php return ob_get_clean();
});


// Apply presentation-only template to the dedicated APSS One page.
// Other WordPress pages, the dashboard and CiviCRM screens are untouched.
add_filter('template_include', function ($template) {
    if (is_admin() || !is_singular('page')) return $template;
    $page = get_queried_object();
    if (!$page || $page->post_name !== 'apss-one') return $template;
    if (!has_shortcode((string) $page->post_content, 'apss_one_demo')) return $template;
    $custom = plugin_dir_path(__FILE__) . 'templates/fullwidth.php';
    return is_readable($custom) ? $custom : $template;
}, 99);
