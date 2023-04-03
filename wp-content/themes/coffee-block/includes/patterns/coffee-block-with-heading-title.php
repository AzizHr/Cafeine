<?php
/**
 * Cover With Heading title 
 */

return array(
	'title'      => __( 'Cover With Heading title', 'coffee-block' ),
	'categories' => array( 'coffee-block' ),
	'blockTypes' => array( 'core/template-part/coffee-block' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}}},"className":"coffee-block-inner-banner","layout":{"type":"constrained"}} -->
<div class="wp-block-group coffee-block-inner-banner" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()).'/assets/images/default-banner.jpg","id":220,"dimRatio":70,"customOverlayColor":"#110704","minHeight":400} -->
<div class="wp-block-cover" style="min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim" style="background-color:#110704"></span><img class="wp-block-cover__image-background wp-image-220" alt="request-free-img" src="'.esc_url(get_template_directory_uri()).'/assets/images/default-banner.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"padding":{"top":"140px"}}}} --><h1 class="has-text-align-center" style="padding-top:140px">Shop</h1><!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
);