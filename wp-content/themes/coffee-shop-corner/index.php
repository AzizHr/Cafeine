<?php
/**
 * The main template file
 * @subpackage Coffee Shop Corner
 * @since 1.0
 * @version 0.1
 */

get_header(); ?>

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
		      	<h1><?php echo esc_html('Blog', 'coffee-shop-corner') ?></h1>
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

	<div class="content-area">
		<main id="skip-content" class="site-main" role="main">
			<?php
		    $coffee_shop_corner_layout_option = get_theme_mod( 'coffee_shop_corner_theme_options', 'One Column' );
		    if($coffee_shop_corner_layout_option == 'Left Sidebar'){ ?>
		    	<div class="row">
			        <div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
			        <div class="content_area col-lg-8 col-md-8">
				    	<section id="post_section">
				    		<div class="row">
								<?php
								if ( have_posts() ) :
									while ( have_posts() ) : the_post(); ?>
										
										<div class="col-lg-6 col-md-6">
											<?php get_template_part( 'template-parts/post/content' ); ?>
										</div>

									<?php endwhile;

									else :

										get_template_part( 'template-parts/post/content', 'none' );

									endif;
								?>
							</div>
							<div class="navigation">
				                <?php
				                    the_posts_pagination( array(
				                        'prev_text'          => __( 'Previous page', 'coffee-shop-corner' ),
				                        'next_text'          => __( 'Next page', 'coffee-shop-corner' ),
				                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'coffee-shop-corner' ) . ' </span>',
				                    ) );
				                ?>
				                <div class="clearfix"></div>
			           	 	</div>
						</section>
					</div>
					<div class="clearfix"></div>
				</div>					
			<?php }else if($coffee_shop_corner_layout_option == 'Right Sidebar'){ ?>
				<div class="row">
					<div class="content_area col-lg-8 col-md-8">
						<section id="post_section">
							<div class="row">
								<?php
								if ( have_posts() ) :
									while ( have_posts() ) : the_post(); ?>
										
										<div class="col-lg-6 col-md-6">
											<?php get_template_part( 'template-parts/post/content' ); ?>
										</div>

									<?php endwhile;

									else :

										get_template_part( 'template-parts/post/content', 'none' );

									endif;
								?>
							</div>
							<div class="navigation">
				                <?php
				                    // Previous/next page navigation.
				                    the_posts_pagination( array(
				                        'prev_text'          => __( 'Previous page', 'coffee-shop-corner' ),
				                        'next_text'          => __( 'Next page', 'coffee-shop-corner' ),
				                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'coffee-shop-corner' ) . ' </span>',
				                    ) );
				                ?>
				                <div class="clearfix"></div>
				            </div>
						</section>
					</div>
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
				</div>
			<?php }else if($coffee_shop_corner_layout_option == 'One Column'){ ?>	
				<div class="content_area">
					<section id="post_section">
						<div class="row">
							<?php
							if ( have_posts() ) :
								while ( have_posts() ) : the_post(); ?>
										
										<div class="col-lg-4 col-md-6">
											<?php get_template_part( 'template-parts/post/content' ); ?>
										</div>

									<?php endwhile;

								else :

									get_template_part( 'template-parts/post/content', 'none' );

								endif;
							?>
						</div>
						<div class="navigation">
			                <?php
			                    // Previous/next page navigation.
			                    the_posts_pagination( array(
			                        'prev_text'          => __( 'Previous page', 'coffee-shop-corner' ),
			                        'next_text'          => __( 'Next page', 'coffee-shop-corner' ),
			                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'coffee-shop-corner' ) . ' </span>',
			                    ) );
			                ?>
			                <div class="clearfix"></div>
			            </div>
					</section>
				</div>
			<?php }else if($coffee_shop_corner_layout_option == 'Grid Layout'){ ?>
		    	<div class="content_area">
					<section id="post_section">
						<div class="row">
							<?php
							if ( have_posts() ) :

								/* Start the Loop */
								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/post/grid-layout' );

								endwhile;
								
								else :

									get_template_part( 'template-parts/post/content', 'none' );

								endif;
							?>
						</div>
						<div class="navigation">
			                <?php
			                    // Previous/next page navigation.
			                    the_posts_pagination( array(
			                        'prev_text'          => __( 'Previous page', 'coffee-shop-corner' ),
			                        'next_text'          => __( 'Next page', 'coffee-shop-corner' ),
			                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'coffee-shop-corner' ) . ' </span>',
			                    ) );
			                ?>
			                <div class="clearfix"></div>
			            </div>
					</section>
				</div>
			<?php } else { ?>
				<div class="row">
					<div class="content_area col-lg-8 col-md-8">
						<section id="post_section">
							<div class="row">
								<?php
								if ( have_posts() ) :
									while ( have_posts() ) : the_post(); ?>
										
										<div class="col-lg-6 col-md-6">
											<?php get_template_part( 'template-parts/post/content' ); ?>
										</div>

									<?php endwhile;

									else :

										get_template_part( 'template-parts/post/content', 'none' );

									endif;
								?>
							</div>
							<div class="navigation">
				                <?php
				                    // Previous/next page navigation.
				                    the_posts_pagination( array(
				                        'prev_text'          => __( 'Previous page', 'coffee-shop-corner' ),
				                        'next_text'          => __( 'Next page', 'coffee-shop-corner' ),
				                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'coffee-shop-corner' ) . ' </span>',
				                    ) );
				                ?>
				                <div class="clearfix"></div>
				            </div>
						</section>
					</div>
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?>
					</div>
				</div>
			<?php } ?>
		</main>
	</div>
</div>

<?php get_footer();