<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<div id="inner-pages-header">
	<div class="row">
		<div class="col-lg-6 col-md-6 align-self-center">
			<div class="sliderimg">
				<?php if ( get_header_image() ) { ?>
					<img src="<?php echo esc_url(get_header_image()); ?>" alt="<?php esc_attr_e('Innerpage Image', 'coffee-shop-corner'); ?> "/>
				<?php } else {?>
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/innerpage.png" alt="<?php esc_attr_e('Innerpage Image', 'coffee-shop-corner'); ?> "/>
				<?php }?>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 align-self-center">
			<div class="header-content text-center">
		      	<h1><?php the_title(); ?></h1>
		      	<div class="theme-breadcrumb mt-2">
					<?php coffee_shop_corner_breadcrumb();?>
				</div>
			</div>
		</div>
	</div>
    
	<?php if(get_theme_mod('coffee_shop_corner_contact_btn_url') != '' || get_theme_mod('coffee_shop_corner_contact_btn_text') != '') {?>
  		<div class="contact-btn">
  			<a href="<?php echo esc_url(get_theme_mod('coffee_shop_corner_contact_btn_url')); ?>" target="_blank"><span><?php echo esc_html(get_theme_mod('coffee_shop_corner_contact_btn_text')); ?></span><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('coffee_shop_corner_contact_btn_text')); ?></span></a>
  		</div>
  	<?php }?>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8">
			<?php
				/**
				 * woocommerce_before_main_content hook.
				 *
				 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
				 * @hooked woocommerce_breadcrumb - 20
				 */
				do_action( 'woocommerce_before_main_content' );
			?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'single-product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php
				/**
				 * woocommerce_after_main_content hook.
				 *
				 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
				 */
				do_action( 'woocommerce_after_main_content' );
			?>
		</div>
		<div class="col-lg-4 col-md-4">
			<?php
				/**
				 * woocommerce_sidebar hook.
				 *
				 * @hooked woocommerce_get_sidebar - 10
				 */
				do_action( 'woocommerce_sidebar' );
			?>
		</div>
	</div>
</div>

<?php get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */