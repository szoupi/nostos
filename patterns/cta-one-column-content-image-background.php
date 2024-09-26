<?php
/**
 * Title: One column, content, CTA and background image
 * Slug: nostos/cta-one-column-content-image-background
 * Description: One column with heading, content, call to action and background image, centered aligned.
 * Categories: banner, call-to-action
 * Keywords: cta, call to action, image, background
 * Viewport width: 1400
 * 
 * @since Nostos 1.1.3
 */
?>

<!-- wp:group {"style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/boat-in-a-lake-towards-mountain.webp","id":106,"source":"file","title":"horses-on-two-legs-facing-each-other"},"backgroundSize":"cover"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80","right":"var:preset|spacing|80"}}},"layout":{"type":"constrained","wideSize":""}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"},"dimensions":{"minHeight":"50vw"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:50vw"><!-- wp:group {"style":{"position":{"type":""}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"xxl"} -->
<h2 class="wp-block-heading has-xxl-font-size">Join our community!</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"med"} -->
<p class="has-text-align-center has-med-font-size">Subscribe to the newsletter and stay connected with our community</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"selfStretch":"fixed","flexSize":"40px"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)">Sign up</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->