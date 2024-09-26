<?php
/**
* Title: Header with search button vertically aligned and centered justified
* Slug: nostos/header-search-centered
* Description: Header with logo, site title, navigation and search button vertically aligned and centered justified. 
* Categories: header
* Keywords: header, search
* Block Types: core/template-part/header
*
* @since Nostos 1.1.3
*/

?>
<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"tagName":"header","metadata":{"categories":["woo-commerce"],"patternName":"woocommerce-blocks/header-essential"},"align":"full","className":"tt-nostos-header","style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"},"margin":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<header class="wp-block-group alignfull tt-nostos-header" style="margin-bottom:var(--wp--preset--spacing--80);padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:site-logo /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} /-->

<!-- wp:site-tagline {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"xs"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:navigation {"ref":74,"style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"style":{"layout":{"selfStretch":"fit","flexSize":null},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"color":{"background":"#fffefe"}},"textColor":"contrast","fontSize":"xs"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group --></div>
<!-- /wp:group -->