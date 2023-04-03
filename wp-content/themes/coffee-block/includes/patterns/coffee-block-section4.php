<?php
/**
 * Our Products
 */
return array(
	'title'      => __( 'Our Products', 'coffee-block' ),
	'categories' => array( 'coffee-block' ),
	'blockTypes' => array( 'core/template-part/coffee-block' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"coffee-block-section4","layout":{"type":"constrained"}} -->
<div class="wp-block-group coffee-block-section4" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()).'/assets/images/product-bg.jpg","id":245,"dimRatio":80,"customOverlayColor":"#160703","className":"coffee-block-porduct-section","style":{"spacing":{"padding":{"top":"80px","right":"0px","bottom":"80px","left":"0px"}}}} -->
<div class="wp-block-cover coffee-block-porduct-section" style="padding-top:80px;padding-right:0px;padding-bottom:80px;padding-left:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim" style="background-color:#160703"></span><img class="wp-block-cover__image-background wp-image-245" alt="" src="'.esc_url(get_template_directory_uri()).'/assets/images/product-bg.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"0px","bottom":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"background"} -->
<h5 class="has-text-align-center has-background-color has-text-color" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0px;padding-bottom:0px;font-size:21px;font-style:normal;font-weight:600">OUR PRODUCTS</h5>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"49px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"0px","bottom":"50px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"background"} -->
<h2 class="has-text-align-center has-background-color has-text-color" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0px;padding-bottom:50px;font-size:49px;font-style:normal;font-weight:700">Our Popular Beans</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"15px","left":"15px"}}},"className":"coffee-block-section4-product-box","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group coffee-block-section4-product-box" style="padding-right:15px;padding-left:15px"><!-- wp:query {"queryId":6,"query":{"perPage":9,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"displayLayout":{"type":"flex","columns":4},"namespace":"woocommerce/product-query","layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:group {"style":{"border":{"color":"#4c403d","width":"1px","radius":"15px"},"spacing":{"padding":{"top":"50px","right":"25px","bottom":"50px","left":"25px"}}},"className":"coffee-block-product-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group coffee-block-product-box has-border-color" style="border-color:#4c403d;border-width:1px;border-radius:15px;padding-top:50px;padding-right:25px;padding-bottom:50px;padding-left:25px"><!-- wp:woocommerce/product-image {"saleBadgeAlign":"center","isDescendentOfQueryLoop":true} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"20px","bottom":"10px"}}},"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
);
