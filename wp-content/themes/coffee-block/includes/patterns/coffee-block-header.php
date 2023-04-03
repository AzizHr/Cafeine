<?php
 /**
  * Title: Transparent Header
  * Slug: coffee-block/header
  * Categories: coffee-block
  */
 if ( class_exists( 'WooCommerce' ) ) {
	 $show ="<!-- wp:woocommerce/mini-cart /-->";
	}
	else{
	 $show =" ";
	}

return array(
	'title'      => __( 'Transparent Header', 'coffee-block' ),
	'categories' => array( 'coffee-block' ),
	'blockTypes' => array( 'core/template-part/coffee-block' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"40px"}}},"className":"has-background coffee-block-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background coffee-block-header" style="padding-top:0px;padding-bottom:40px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"35px","right":"15px","bottom":"35px","left":"15px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="padding-top:35px;padding-right:15px;padding-bottom:35px;padding-left:15px"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-columns" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"className":"coffee-block-header-top-bar-left"} -->
<div class="wp-block-column coffee-block-header-top-bar-left"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:image {"align":"left","id":784,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image alignleft size-full"><img src="'.esc_url(get_template_directory_uri()).'/assets/images/phone-icon.png" alt="" class="wp-image-784"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"80%"} -->
<div class="wp-block-column" style="flex-basis:80%"><!-- wp:heading {"level":5,"textColor":"background"} -->
<h5 class="has-background-color has-text-color"><strong>Call Now</strong></h5>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"textColor":"background"} -->
<h3 class="has-background-color has-text-color"><strong>123 456 7890</strong></h3>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"coffee-block-header-top-bar-logo"} -->
<div class="wp-block-column coffee-block-header-top-bar-logo"><!-- wp:image {"align":"center","id":817,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image aligncenter size-full"><a href="'.home_url().'"><img src="'.esc_url(get_template_directory_uri()).'/assets/images/logo.png" alt="" class="wp-image-817"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"coffee-block-header-top-bar-right"} -->
<div class="wp-block-column coffee-block-header-top-bar-right"><!-- wp:group {"textColor":"background","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group has-background-color has-text-color">'.$show.'</div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"15px","left":"15px"}}},"className":"coffee-block-menu","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group coffee-block-menu" style="padding-right:15px;padding-left:15px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"100px"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"color":{"background":"#ffffff21"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-radius:100px;background-color:#ffffff21;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:navigation {"textColor":"background","icon":"menu","customOverlayBackgroundColor":"#5f1c00","overlayTextColor":"background","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","fontSize":"17px"},"spacing":{"blockGap":"35px"}}} -->
<!-- wp:page-list /-->
<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);