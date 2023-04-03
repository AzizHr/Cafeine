<?php
/**
 * The header for our theme
 *
 * @subpackage Coffee Shop Corner
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}?>

<a class="screen-reader-text skip-link" href="#skip-content"><?php esc_html_e( 'Skip to content', 'coffee-shop-corner' ); ?></a>

<div id="header">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-4 align-self-center">
				<div class="logo text-md-left text-center">
					<?php if ( has_custom_logo() ) : ?>
	            		<?php the_custom_logo(); ?>
		            <?php endif; ?>
	             	<?php if (get_theme_mod('coffee_shop_corner_show_site_title',true)) {?>
	          			<?php $coffee_shop_corner_blog_info = get_bloginfo( 'name' ); ?>
		                <?php if ( ! empty( $coffee_shop_corner_blog_info ) ) : ?>
		                  	<?php if ( is_front_page() && is_home() ) : ?>
		                    	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		                  	<?php else : ?>
	                      		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
	                  		<?php endif; ?>
		                <?php endif; ?>
		            <?php }?>
		            <?php if (get_theme_mod('coffee_shop_corner_show_tagline',true)) {?>
		                <?php $coffee_shop_corner_description = get_bloginfo( 'description', 'display' );
	                  	if ( $coffee_shop_corner_description || is_customize_preview() ) : ?>
		                  	<p class="site-description"><?php echo esc_html($coffee_shop_corner_description); ?></p>
	              		<?php endif; ?>
	          		<?php }?>
				</div>
			</div>
			<div class="<?php if(class_exists('woocommerce')){ ?>col-lg-8 col-md-7 col-6 <?php } else {?> col-lg-9 col-md-8 <?php }?> align-self-center pr-md-0">
				<div class="menu-bar pr-md-5">
					<div class="toggle-menu responsive-menu text-right">
						<?php if(has_nav_menu('primary')){ ?>
			            	<button onclick="coffee_shop_corner_open()" role="tab" class="mobile-menu"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','coffee-shop-corner'); ?></span></button>
			            <?php }?>
			        </div>
					<div id="sidelong-menu" class="nav sidenav">
		                <nav id="primary-site-navigation" class="nav-menu pr-lg-5" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'coffee-shop-corner' ); ?>">
		                  	<?php if(has_nav_menu('primary')){
			                    wp_nav_menu( array( 
									'theme_location' => 'primary',
									'container_class' => 'main-menu-navigation clearfix' ,
									'menu_class' => 'clearfix',
									'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
									'fallback_cb' => 'wp_page_menu',
			                    ) ); 
		                  	} ?>
		                  	<a href="javascript:void(0)" class="closebtn responsive-menu" onclick="coffee_shop_corner_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','coffee-shop-corner'); ?></span></a>
		                </nav>
		            </div>
		        </div>
			</div>
			<?php if(class_exists('woocommerce')){ ?>
				<div class="col-lg-1 col-md-1 col-6 align-self-center">
				    <span class="cart_icon position-relative">
				        <a class="cart-contents" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>"><i class="fas fa-shopping-cart"></i></a>
			            <li class="cart_box">
			              <span class="cart-value"> <?php echo wp_kses_data( WC()->cart->get_cart_contents_count() );?></span>
			            </li>
				    </span>
				</div>
			<?php } ?>
		</div>
	</div>
</div>