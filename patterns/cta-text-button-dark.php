<?php
/**
 * Title: CTA, text, button, dark background
 * Slug: nostos/cta-text-button-dark
 * Description: Call to action with text and button on dark background.
 * Categories: banner, call-to-action
 * Keywords: cta, call to action, dark
 * Viewport width: 1400
 * 
 * @since Nostos 1.1.3
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size"><?php echo esc_html_x( 'Subscribe to the newsletter and stay connected with our community.', 'Sample description for patterns', 'nostos' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"dark","className":"is-style-fill","style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-dark-color has-base-background-color has-text-color has-background has-link-color wp-element-button" style="padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><?php echo esc_html_x( 'χχχχχχχχχχχ.', 'Sample description for patterns', 'nostos' ); ?><?php echo esc_html_x( 'Sign up.', 'Sample description for patterns', 'nostos' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->