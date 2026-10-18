<?php
/**
 * APSS One full-width presentation template.
 * Loaded only for the WordPress page with slug apss-one containing our shortcode.
 */
if (!defined('ABSPATH')) exit;
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class('apss-demo-template'); ?>>
<?php wp_body_open(); ?>
<main id="main-content" role="main">
<?php
while (have_posts()) {
    the_post();
    echo do_shortcode('[apss_one_demo]');
}
?>
</main>
<?php wp_footer(); ?>
</body>
</html>
