<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

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
		      	<h1><?php woocommerce_page_title(); ?></h1>
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
				 * Hook: woocommerce_before_main_content.
				 *
				 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
				 * @hooked woocommerce_breadcrumb - 20
				 * @hooked WC_Structured_Data::generate_website_data() - 30
				 */
				do_action( 'woocommerce_before_main_content' );

			?>
			<header class="woocommerce-products-header">

				<?php
				/**
				 * Hook: woocommerce_archive_description.
				 *
				 * @hooked woocommerce_taxonomy_archive_description - 10
				 * @hooked woocommerce_product_archive_description - 10
				 */
				do_action( 'woocommerce_archive_description' );
				?>
			</header>
			<?php
			if ( woocommerce_product_loop() ) {

				/**
				 * Hook: woocommerce_before_shop_loop.
				 *
				 * @hooked woocommerce_output_all_notices - 10
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );

				woocommerce_product_loop_start();

				if ( wc_get_loop_prop( 'total' ) ) {
					while ( have_posts() ) {
						the_post();

						/**
						 * Hook: woocommerce_shop_loop.
						 *
						 * @hooked WC_Structured_Data::generate_product_data() - 10
						 */
						do_action( 'woocommerce_shop_loop' );

						wc_get_template_part( 'content', 'product' );
					}
				}

				woocommerce_product_loop_end();

				/**
				 * Hook: woocommerce_after_shop_loop.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			} else {
				/**
				 * Hook: woocommerce_no_products_found.
				 *
				 * @hooked wc_no_products_found - 10
				 */
				do_action( 'woocommerce_no_products_found' );
			}

			/**
			 * Hook: woocommerce_after_main_content.
			 *
			 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			 */
			do_action( 'woocommerce_after_main_content' );?>

		</div>
		<div class="col-lg-4 col-md-4">
			<?php
				/**
				 * Hook: woocommerce_sidebar.
				 *
				 * @hooked woocommerce_get_sidebar - 10
				 */
				do_action( 'woocommerce_sidebar' );
			?>
		</div>
	</div>
</div>

<?php
get_footer( 'shop' );