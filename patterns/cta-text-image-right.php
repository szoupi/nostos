<?php
/**
 * Title: Call to action, picture on the right
 * Slug: nostos/cta-text-image-right
 * Description: Call to action, text, light background and image on the right.
 * Categories: banner, call-to-action
 * Keywords: cta, call to action, image
 * Viewport width: 1400
 * 
 * @since Nostos 1.1.3
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-base-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size"><?php echo esc_html_x( 'Subscribe to the newsletter and stay connected with our community.', 'Sample description for patterns', 'nostos' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","textColor":"base","className":"is-style-fill","style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-base-color has-accent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><?php echo esc_html_x( 'Sign up.', 'Sample description for patterns', 'nostos' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":106,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/boat-in-a-lake-towards-mountain.webp" alt="<?php esc_attr_e( 'boat in a lake heading to mountains', 'nostos' ); ?>" class="wp-image-106"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->