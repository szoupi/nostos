<?php
/**
 * Title: Call to action, with image on the right
 * Slug: nostos/cta-image-right
 * Description: Call to action with light background and image on the right column.
 * Categories: banner, call-to-action
 * Keywords: cta, call to action, image
 * Viewport width: 1400
 * 
 * @since Nostos 1.1.3
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-base-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":null,"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"stretch"} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:group {"style":{"dimensions":{"minHeight":"675px"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top","justifyContent":"left"}} -->
<div class="wp-block-group" style="min-height:675px"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html_x( 'Get Inspired, Stay Informed.', 'Sample description for patterns', 'nostos' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"layout":{"flexSize":"100px","selfStretch":"fixed"},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"med"} -->
<p class="has-med-font-size" style="font-style:normal;font-weight:300"><?php echo esc_html_x( 'Keep up with the latest in personal development, tech, and lifestyle trends.', 'Sample description for patterns', 'nostos' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"fontStyle":"normal","fontWeight":"300"}}} -->
<ul style="font-style:normal;font-weight:300" class="wp-block-list"><!-- wp:list-item -->
<li>Daily updates</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Easy-to-digest posts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Topics you care about</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:spacer {"height":"236px","style":{"layout":{"flexSize":"236px","selfStretch":"fixed"}}} -->
<div style="height:236px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:buttons {"style":{"layout":{"flexSize":"100px","selfStretch":"fixed"}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill","style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" style="padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)">Join Us</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline","style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" style="padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)">Join Us</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":106,"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/boat-in-a-lake-towards-mountain.webp" alt="<?php esc_attr_e( 'boat in a lake heading to mountains', 'nostos' ); ?>"  class="wp-image-106" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->