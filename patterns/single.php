<?php
/**
 * Title: single
 * Slug: litos/single
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:post-featured-image {"aspectRatio":"16/9","height":"","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px"}}} /-->

<!-- wp:group {"fontSize":"xs","layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-group has-xs-font-size"><!-- wp:template-part {"slug":"post-metatags"} /--></div>
<!-- /wp:group -->

<!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:comments-title {"textAlign":"right","showPostTitle":false,"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"xs"} /--></div>
<!-- /wp:comments -->

<!-- wp:post-title {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|80","left":"0","right":"0"}}}} /-->

<!-- wp:post-content {"style":{"spacing":{"blockGap":"1.6rem"}}} /-->

<!-- wp:post-terms {"term":"post_tag","textAlign":"right","separator":"  ","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"xs"} /-->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)"/>
<!-- /wp:separator -->

<!-- wp:comments {"className":"wp-block-comments-query-loop"} -->
<div class="wp-block-comments wp-block-comments-query-loop"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Comments', 'litos');?></h2>
<!-- /wp:heading -->

<!-- wp:comments-title {"level":3} /-->

<!-- wp:comment-template -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":40} /-->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:comment-author-name /-->

<!-- wp:comment-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:comment-edit-link /-->

<!-- wp:comment-reply-link /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} /--></div>
<!-- /wp:comments -->

<!-- wp:group {"metadata":{"name":"Pagination"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-navigation-link {"textAlign":"right","showTitle":true,"arrow":"arrow"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->