<?php
/**
 * Title: One column with heading, content, call to action and image
 * Slug: nostos/cta-one-column-content-image
 * Description: One column with heading, content, call to action and image, centered aligned.
 * Categories: banner, call-to-action
 * Keywords: cta, call to action, image
 * Viewport width: 1400
 * 
 * @since Nostos 1.1.3
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80","right":"var:preset|spacing|80"}}},"layout":{"type":"constrained","wideSize":""}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"layout":{}},"fontSize":"xxl"} -->
<h2 class="wp-block-heading has-text-align-center has-xxl-font-size"><?php echo esc_html_x( 'Inspiration is One Click Away.', 'Sample description for patterns', 'nostos' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"28px","style":{"layout":{}}} -->
<div style="height:28px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"med"} -->
<p class="has-text-align-center has-med-font-size" style="font-style:normal;font-weight:300"><?php echo esc_html_x( 'Dive into articles that challenge the status quo and inspire change. From personal growth to industry trends, there’s something for everyone..', 'Sample description for patterns', 'nostos' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"40px","style":{"layout":{}}} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"style":{"layout":{}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><?php echo esc_html_x( 'Sign up.', 'Sample description for patterns', 'nostos' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"40px","style":{"layout":{}}} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"id":106,"sizeSlug":"large","linkDestination":"none","className":"is-style-default","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<figure class="wp-block-image size-large is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/boat-in-a-lake-towards-mountain.webp" alt="<?php esc_attr_e( 'boat in a lake heading to mountains', 'nostos' ); ?>"  class="wp-image-106"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->