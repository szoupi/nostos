<?php
/**
 * Title: Page with sidebar
 * Slug: nostos/wp-custom-template-page-with-sidebar
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"article","metadata":{"name":"Main"},"layout":{"type":"constrained"}} -->
<article class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:post-featured-image {"aspectRatio":"16/9","height":"","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px"}}} /-->

<!-- wp:template-part {"slug":"post-metatags"} /-->

<!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:comments-title {"textAlign":"right","showPostTitle":false,"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"xs"} /--></div>
<!-- /wp:comments -->

<!-- wp:post-title /-->

<!-- wp:post-content /-->

<!-- wp:post-terms {"term":"post_tag","textAlign":"right","separator":"  ","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"xs"} /-->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)"/>
<!-- /wp:separator -->

<!-- wp:comments {"className":"wp-block-comments-query-loop"} -->
<div class="wp-block-comments wp-block-comments-query-loop"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Comments', 'nostos');?></h2>
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
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:template-part {"slug":"sidebar"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></article>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->