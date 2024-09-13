<?php
/**
 * Title: 404
 * Slug: nostos/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":1,"className":"is-style-default"} -->
<h1 class="wp-block-heading is-style-default" id="page-not-found"><?php esc_html_e('Page Not Found', 'nostos');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('The page you are looking for does not exist, or it has been moved. Please try searching using the form below.', 'nostos');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","fontSize":"medium"} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->