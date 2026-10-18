<?php
/**
 * Plugin Name: APSS One Demo Interface
 * Description: APSS One branded concept dashboard. Live CiviCRM membership functionality requires separate integration.
 * Version: 0.1.0
 * Requires PHP: 8.1
 */
if (!defined('ABSPATH')) { exit; }
add_action('wp_enqueue_scripts', function () {
    wp_register_style('apss-one-demo', plugins_url('assets/demo.css', __FILE__), [], '0.1.0');
});
add_shortcode('apss_one_demo', function () {
    wp_enqueue_style('apss-one-demo');
    $logo = 'https://www.asiaspeakers.org/wp-content/uploads/2020/06/logo_2-1.png';
    $modules = [
        ['Membership & Renewals', 'Applications, membership levels, renewal schedules and receipts.', 'Foundation planned'],
        ['Speaker Directory', 'Search public speakers and manage eligible profile listings.', 'Coming soon'],
        ['Events & Registration', 'Meetings, registration, member prices and attendance.', 'Foundation planned'],
        ['Professional Development', '4 Core Modules, 26 electives, assessment, CPD and mentoring.', 'Coming soon'],
        ['SIGs & Community', 'Group discussions, private communities and member announcements.', 'Coming soon'],
        ['Convention & Tickets', 'Multi-day events, passes, sponsor pages and check-in.', 'Coming soon'],
        ['Member Journey', 'Discover, Join, Belong, Develop, Build, Lead and Legacy.', 'Coming soon'],
        ['ExCo Administration', 'Secure portfolio roles, governance tasks and reporting.', 'Coming soon'],
        ['AI Speaker Assistant', 'Optional Groq-backed public speaker search and FAQs.', 'AI concept'],
    ];
    ob_start(); ?>
    <div class="apss-one">
      <header class="apss-header">
        <div class="apss-brand"><img src="<?php echo esc_url($logo); ?>" alt="APSS logo"><div><strong>APSS One</strong><small>Unified Member Platform</small></div></div>
        <span class="apss-demo-label">CONCEPT DEMO · SYNTHETIC DATA ONLY</span>
      </header>
      <section class="apss-hero"><div class="apss-eyebrow">ONE LOGIN · ONE MEMBER RECORD · ONE EXPERIENCE</div><h1>Welcome to APSS One</h1><p>Your single destination for membership, speaker profiles, professional learning, events and community.</p><a href="#apss-modules" class="apss-button">Explore the platform →</a></section>
      <section class="apss-journey"><h2>The APSS Member Journey</h2><p>Discover → Join → Belong → Develop → Build → Lead → Legacy</p><small>Illustrative journey; not connected to member records.</small></section>
      <section id="apss-modules" class="apss-modules"><h2>Explore APSS One</h2><p>Open a module to see its planned capabilities. Functionality is not enabled unless explicitly marked as tested.</p><div class="apss-grid">
        <?php foreach ($modules as $index => $module): ?>
        <details class="apss-tile"><summary><span class="apss-count"><?php echo esc_html(sprintf('%02d', $index+1)); ?></span><strong><?php echo esc_html($module[0]); ?></strong><span class="apss-state"><?php echo esc_html($module[2]); ?></span><p><?php echo esc_html($module[1]); ?></p><span class="apss-more">View concept +</span></summary><div class="apss-details"><p><b>Planned experience:</b> <?php echo esc_html($module[1]); ?></p><p>No live submissions, member lookups or payment processing are enabled in this demonstration.</p></div></details>
        <?php endforeach; ?>
      </div></section>
      <footer class="apss-footer">Technology direction: WordPress + CiviCRM + custom APSS modules. <strong>CiviCRM integration and AI workflows are not installed by this plugin.</strong></footer>
    </div>
    <?php return ob_get_clean();
});
