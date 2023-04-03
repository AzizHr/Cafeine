<?php
 /**
  * Title: Footer
  * Slug: coffee-block/footer
  * Categories: coffee-block
  */
return array(
	'title'      => __( 'Footer', 'coffee-block' ),
	'categories' => array( 'coffee-block' ),
	'blockTypes' => array( 'core/template-part/coffee-block' ),
	'content'    => '<!-- wp:group {"className":"coffee-block-footer","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group coffee-block-footer"><!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()).'/assets/images/footer-bg.jpg","id":116,"dimRatio":90,"customOverlayColor":"#110704","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-cover" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-90 has-background-dim" style="background-color:#110704"></span><img class="wp-block-cover__image-background wp-image-116" alt="" src="'.esc_url(get_template_directory_uri()).'/assets/images/footer-bg.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"40px","right":"15px","left":"15px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="padding-top:80px;padding-right:15px;padding-bottom:40px;padding-left:15px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"60px"}}},"className":"coffee-block-footer-logo","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group coffee-block-footer-logo" style="padding-top:0px;padding-bottom:60px"><!-- wp:image {"align":"center","id":17,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><a href="'.home_url().'"><img src="'.esc_url(get_template_directory_uri()).'/assets/images/footer-logo.png" alt="" class="wp-image-17"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","right":"40px","bottom":"80px","left":"40px"}},"border":{"color":"#644019","width":"1px","radius":"10px"}},"className":"coffee-block-footer-column","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group coffee-block-footer-column has-border-color" style="border-color:#644019;border-width:1px;border-radius:10px;padding-top:80px;padding-right:40px;padding-bottom:80px;padding-left:40px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"29%","style":{"spacing":{"padding":{"right":"8%"}}}} -->
<div class="wp-block-column" style="padding-right:8%;flex-basis:29%"><!-- wp:group {"className":"coffee-block-footer-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group coffee-block-footer-box"><!-- wp:heading {"level":3,"style":{"spacing":{"padding":{"bottom":"20px"}}}} -->
<h3 style="padding-bottom:20px">ABOUT COMPANY</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#d1d1d1"},"typography":{"lineHeight":1.8}}} -->
<p class="has-text-color" style="color:#d1d1d1;line-height:1.8">Proin feugiat diam vitae ligul imperd dapibu vestbul tellus libero, at fermentum mi euis modut Vivamvita dam vitae liguldui vitae turpis sollicitud in rutrum.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%"} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"className":"coffee-block-footer-menu","layout":{"type":"constrained"}} -->
<div class="wp-block-group coffee-block-footer-menu"><!-- wp:heading {"level":3,"style":{"spacing":{"padding":{"bottom":"20px"}}}} -->
<h3 style="padding-bottom:20px">QUICK LINKS</h3>
<!-- /wp:heading -->

<!-- wp:navigation {"customTextColor":"#d8d8d8","overlayMenu":"never","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left","orientation":"vertical"},"style":{"spacing":{"blockGap":"10px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%"} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:group {"className":"coffee-block-footer-menu","layout":{"type":"constrained"}} -->
<div class="wp-block-group coffee-block-footer-menu"><!-- wp:heading {"level":3,"style":{"spacing":{"padding":{"bottom":"20px"}}}} -->
<h3 style="padding-bottom:20px">MY ACCOUNT</h3>
<!-- /wp:heading -->

<!-- wp:navigation {"customTextColor":"#d8d8d8","overlayMenu":"never","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left","orientation":"vertical"},"style":{"spacing":{"blockGap":"10px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"className":"coffee-block-footer-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group coffee-block-footer-box"><!-- wp:heading {"level":3,"style":{"spacing":{"padding":{"bottom":"20px"}}}} -->
<h3 style="padding-bottom:20px">CONTACT INFO</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Proin feugiat diam vitae ligul imperd dapibu vestbul tellus libero</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph -->
<p>Phone: 123 654 7890</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"tertiary","iconColorValue":"#282828","iconBackgroundColorValue":"#ffffff","style":{"spacing":{"blockGap":{"top":"7px","left":"7px"}}},"className":"is-style-default"} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","right":"0px","bottom":"0px","left":"0px"}}},"className":"coffee-block-footer-copyright","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group coffee-block-footer-copyright" style="padding-top:40px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"color":{"text":"#d1d1d1"},"typography":{"lineHeight":1.8}}} -->
<p class="has-text-color" style="color:#d1d1d1;line-height:1.8">Copyright © Coffee Block 2023. All Rights Reserved.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"right","style":{"color":{"text":"#d1d1d1"},"typography":{"lineHeight":1.8}}} -->
<p class="has-text-align-right has-text-color" style="color:#d1d1d1;line-height:1.8">Design by: SKT Themes</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
);
