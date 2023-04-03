<?php
/**
 * Cover With Archive title 
 */
return array(
	'title'      => __( 'Cover With Archive title', 'coffee-block' ),
	'categories' => array( 'coffee-block' ),
	'blockTypes' => array( 'core/template-part/coffee-block' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"600"},"color":{"text":"#0a1d2d"}},"className":"coffee-block-inner-banner","layout":{"type":"constrained","contentSize":""},"fontFamily":"poppins"} -->
<div class="wp-block-group coffee-block-inner-banner has-text-color has-poppins-font-family" style="color:#0a1d2d;padding-top:0px;padding-bottom:0px;font-size:40px;font-style:normal;font-weight:600"><!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()).'/assets/images/default-banner.jpg","id":220,"dimRatio":70,"customOverlayColor":"#110704","minHeight":400,"minHeightUnit":"px"} -->
<div class="wp-block-cover" style="min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim" style="background-color:#110704"></span><img class="wp-block-cover__image-background wp-image-220" alt="request-free-img" src="'.esc_url(get_template_directory_uri()).'/assets/images/default-banner.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:query-title {"type":"archive","textAlign":"center","style":{"spacing":{"padding":{"top":"140px"}}},"textColor":"background","className":"coffee-block-inner-banner-title","fontFamily":"poppins"} /--></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
);