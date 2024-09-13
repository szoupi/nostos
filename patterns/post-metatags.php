<?php
/**
 * Title: post-metatags
 * Slug: nostos/post-metatags
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"xs","layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-group has-xs-font-size" style="font-style:normal;font-weight:300"><!-- wp:post-date {"format":"M j, Y","isLink":true} /-->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php esc_html_e('—', 'nostos');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"xs"} -->
<p class="has-contrast-2-color has-text-color has-xs-font-size"><?php esc_html_e('by', 'nostos');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true} /-->

<!-- wp:post-terms {"term":"category","prefix":"in "} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->