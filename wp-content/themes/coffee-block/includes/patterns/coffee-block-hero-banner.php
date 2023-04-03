<?php
/**
 * Hero Banner
 */
return array(
	'title'      => __( 'Hero Banner', 'coffee-block' ),
	'categories' => array( 'coffee-block' ),
	'blockTypes' => array( 'core/template-part/coffee-block' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"className":"coffee-block-header-banner","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group coffee-block-header-banner" style="padding-top:0px;padding-bottom:0px"><!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()).'/assets/images/banner-img.jpg","id":106,"dimRatio":90,"customOverlayColor":"#110704","style":{"spacing":{"padding":{"top":"200px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-cover" style="padding-top:200px;padding-right:0px;padding-bottom:0px;padding-left:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-90 has-background-dim" style="background-color:#110704"></span><img class="wp-block-cover__image-background wp-image-106" alt="" src="'.esc_url(get_template_directory_uri()).'/assets/images/banner-img.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"15px","left":"15px"}}},"className":"coffee-block-banner","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group coffee-block-banner" style="padding-right:15px;padding-left:15px"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"20px","bottom":"0px"}}}} -->
<div class="wp-block-columns" style="padding-top:20px;padding-bottom:0px"><!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"80px"}}},"className":"coffee-block-banner-content"} -->
<div class="wp-block-column coffee-block-banner-content" style="padding-top:80px;flex-basis:30%"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"61px","fontStyle":"normal","fontWeight":"800"},"spacing":{"padding":{"bottom":"0px"}}}} -->
<h1 style="padding-bottom:0px;font-size:61px;font-style:normal;font-weight:800">NATURAL <mark style="background-color:rgba(0, 0, 0, 0);color:#ffac47" class="has-inline-color">COFFEE </mark>BEANS</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"20px","bottom":"30px"}}}} -->
<p style="padding-top:20px;padding-bottom:30px;font-size:18px">Sedltricie ornare lacus, vitae auctorting egestasat orci volutpat</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","style":{"color":{"text":"#1b0c08"},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"},"border":{"radius":"100px"},"spacing":{"padding":{"top":"17px","bottom":"17px","left":"40px","right":"40px"}}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:18px;font-style:normal;font-weight:600"><a class="wp-block-button__link has-background-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:100px;color:#1b0c08;padding-top:17px;padding-right:40px;padding-bottom:17px;padding-left:40px">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"coffee-block-banner-image"} -->
<div class="wp-block-column coffee-block-banner-image"><!-- wp:image {"align":"right","id":109,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image alignright size-full"><img src="'.esc_url(get_template_directory_uri()).'/assets/images/banner-top-img.jpg" alt="" class="wp-image-109"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
);