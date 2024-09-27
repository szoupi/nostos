<?php
/**
 * Title: Call to action, accent background, center-aligned
 * Slug: nostos/cta-accent-background-center-aligned
 * Description: Call to action with accent background and center-aligned content. 
 * Categories: call-to-action, banner
 * Keywords: cta, call to action, center, dark
 * Viewport width: 1400 
 *
 * @since Nostos 1.1.3
 */
?>

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"accent","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-accent-background-color has-text-color has-background has-link-color"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","style":{"layout":{"selfStretch":"fit","flexSize":null},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"xxl"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color has-xxl-font-size"><?php echo esc_html_x( 'Get Inspired, Stay Informed.', 'Sample description for patterns', 'nostos' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"layout":{"selfStretch":"fit","flexSize":""},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"med"} -->
<p class="has-text-align-center has-med-font-size" style="font-style:normal;font-weight:300"><?php echo esc_html_x( 'Keep up with the latest in personal development, tech, and lifestyle trends.', 'Sample description for patterns', 'nostos' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"39px","style":{"layout":{"flexSize":"39px","selfStretch":"fixed"}}} -->
<div style="height:39px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:buttons {"style":{"layout":{"flexSize":"100px","selfStretch":"fixed"}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" style="padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><?php echo esc_html_x( 'Learn More.', 'Sample description for patterns', 'nostos' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->