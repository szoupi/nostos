<?php
/**
 * Title: Header with search button
 * Slug: nostos/header-search
 * Description: Header with logo, site title, navigation and search button. 
 * Categories: header
 * Keywords: header, search
 * Block Types: core/template-part/header
 *
 * @since Nostos 1.1.3
 */

?>

<!-- wp:group {"tagName":"header","metadata":{"categories":["woo-commerce"],"patternName":"woocommerce-blocks/header-essential","name":"Header"},"align":"full","className":"tt-nostos-header","style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"},"margin":{"bottom":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"backgroundColor":"base","textColor":"primary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<header class="wp-block-group alignfull tt-nostos-header has-primary-color has-base-background-color has-text-color has-background has-link-color" style="margin-bottom:var(--wp--preset--spacing--80);padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group {"style":{"position":{"type":""}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} /-->

<!-- wp:site-tagline {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"xs"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:navigation {"ref":74,"style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","justifyContent":"right"}} /--></div>
<!-- /wp:group --></header>
<!-- /wp:group -->