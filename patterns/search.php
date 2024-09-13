<?php
/**
 * Title: search
 * Slug: litos/search
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"metadata":{"name":"Main"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:query-title {"type":"search","align":"wide"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":26,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"metadata":{"categories":["posts"],"patternName":"core/query-small-posts","name":"Search results"}} -->
<div class="wp-block-query"><!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php esc_html_e('No posts were found.', 'litos');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:spacer {"height":"5rem"} -->
<div style="height:5rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"default"}} -->
<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","dimRatio":60,"align":"center"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:group {"metadata":{"name":"metatags"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"xs","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group has-xs-font-size" style="font-style:normal;font-weight:300"><!-- wp:post-date {"format":"M j, Y","isLink":true} /-->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php esc_html_e('—', 'litos');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php esc_html_e('by', 'litos');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true} /-->

<!-- wp:post-terms {"term":"category","prefix":"in "} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside"} /-->

<!-- wp:group {"metadata":{"name":"Pagination"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-navigation-link {"textAlign":"right","showTitle":true,"arrow":"arrow"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->