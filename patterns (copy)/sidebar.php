<?php
/**
 * Title: sidebar
 * Slug: nostos/sidebar
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"36px","padding":{"right":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|40"}},"fontSize":"sm","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-sm-font-size" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:avatar {"size":80,"style":{"border":{"radius":"16px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"med"} -->
<h2 class="wp-block-heading has-med-font-size"><?php esc_html_e('About the author', 'nostos');?></h2>
<!-- /wp:heading -->

<!-- wp:post-author-biography {"fontSize":"xs"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"contrast"} -->
<hr class="wp-block-separator has-text-color has-contrast-color has-alpha-channel-opacity has-contrast-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"med"} -->
<h2 class="wp-block-heading has-med-font-size"><?php esc_html_e('Popular Categories', 'nostos');?></h2>
<!-- /wp:heading -->

<!-- wp:categories {"showHierarchy":true,"showPostCounts":true,"fontSize":"xs"} /--></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"contrast"} -->
<hr class="wp-block-separator has-text-color has-contrast-color has-alpha-channel-opacity has-contrast-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->