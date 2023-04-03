<?php
/**
 * The template for displaying all pages
 * @subpackage Coffee Shop Corner
 * @since 1.0
 * @version 0.1
 */

get_header(); ?>

<?php do_action( 'coffee_shop_corner_above_header_page' ); ?>

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
	<div id="primary" class="content-area">
		<main id="skip-content" class="site-main" role="main">
			<?php
		    $coffee_shop_corner_page_sidebar = get_theme_mod( 'coffee_shop_corner_page_sidebar', 'One Column' );
		    if($coffee_shop_corner_page_sidebar == 'One Column'){ ?>
				<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/page/content', 'page' );

						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
				?>
			<?php }else if($coffee_shop_corner_page_sidebar == 'Left Sidebar'){ ?>
				<div class="row">
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-2'); ?></div>
					<div class="col-lg-8 col-md-8">
						<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/page/content', 'page' );

								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
						?>
					</div>
				</div>
			<?php }else if($coffee_shop_corner_page_sidebar == 'Right Sidebar'){ ?>
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/page/content', 'page' );

								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
						?>
					</div>
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-2'); ?></div>
				</div>
			<?php } else {?>
				<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/page/content', 'page' );

						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
				?>
			<?php }?>
		</main>
	</div>
</div>

<?php do_action( 'coffee_shop_corner_above_footer_page' ); ?>

<?php get_footer();