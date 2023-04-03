<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<main id="skip-content" role="main">

	<?php do_action( 'coffee_shop_corner_above_slider' ); ?>

	<?php if( get_theme_mod('coffee_shop_corner_slider_hide_show') != ''){ ?>
		<section id="slider">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			    <?php $coffee_shop_corner_slider_pages = array();
			    for ( $count = 1; $count <= 4; $count++ ) {
			        $mod = intval( get_theme_mod( 'coffee_shop_corner_slider'. $count ));
			        if ( 'page-none-selected' != $mod ) {
			          $coffee_shop_corner_slider_pages[] = $mod;
			        }
			    }
		      	if( !empty($coffee_shop_corner_slider_pages) ) :
			        $args = array(
			          	'post_type' => 'page',
			          	'post__in' => $coffee_shop_corner_slider_pages,
			          	'orderby' => 'post__in'
			        );
		        	$query = new WP_Query( $args );
		        if ( $query->have_posts() ) :
		          	$i = 1;
		    	?>     
				    <div class="carousel-inner" role="listbox">
				      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
					        <div <?php if($i == 1){echo 'class="carousel-item fade-in-image active"';} else{ echo 'class="carousel-item fade-in-image"';}?>>
					        	<div class="row">
					        		<div class="col-lg-7 col-md-7 align-self-center">
					        			<div class="sliderimg">
				            				<img src="<?php esc_url(the_post_thumbnail_url('full')); ?>" alt="<?php the_title_attribute(); ?> "/>
									    </div>
					        		</div>
					        		<div class="col-lg-5 col-md-5 align-self-center">
					        			<div class="carousel-caption">
								            <div class="inner-carousel">
								              	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								              	<p class="mb-0"><?php $coffee_shop_corner_excerpt = get_the_excerpt(); echo esc_html( coffee_shop_corner_string_limit_words( $coffee_shop_corner_excerpt,15 ) ); ?></p>
								              	<a href="<?php the_permalink(); ?>" class="read-btn"><span><?php echo esc_html('Read More','coffee-shop-corner'); ?></span><span class="screen-reader-text"><?php echo esc_html('Read More','coffee-shop-corner'); ?></span></a>
						            		</div>
						            	</div>
					        		</div>
					        	</div>
					        </div>
				      	<?php $i++; endwhile; 
				      	wp_reset_postdata();?>
				    </div>
			    <?php else : ?>
			    	<div class="no-postfound"></div>
	      		<?php endif;
			    endif;?>
			    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			      	<span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
			      	<span class="screen-reader-text"><?php esc_html_e( 'Prev','coffee-shop-corner' );?></span>
			    </a>
			    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			      	<span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
			      	<span class="screen-reader-text"><?php esc_html_e( 'Next','coffee-shop-corner' );?></span>
			    </a>
			</div>
		  	<div class="clearfix"></div>
		  	<?php if(get_theme_mod('coffee_shop_corner_contact_btn_url') != '' || get_theme_mod('coffee_shop_corner_contact_btn_text') != '') {?>
		  		<div class="contact-btn">
		  			<a href="<?php echo esc_url(get_theme_mod('coffee_shop_corner_contact_btn_url')); ?>" target="_blank"><span><?php echo esc_html(get_theme_mod('coffee_shop_corner_contact_btn_text')); ?></span><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('coffee_shop_corner_contact_btn_text')); ?></span></a>
		  		</div>
		  	<?php }?>
		</section>
	<?php }?>
	
	<?php do_action('coffee_shop_corner_below_slider'); ?>

	<?php if(get_theme_mod('coffee_shop_corner_section_small_title') != '' || get_theme_mod('coffee_shop_corner_section_title') != '' || get_theme_mod('coffee_shop_corner_category_setting') != ''){?>

		<section id="service-section" class="py-5">
			<div class="container"> 
	        	<div class="service-head text-center mb-5">
					<?php if(get_theme_mod('coffee_shop_corner_section_small_title') != ''){?>
						<strong><?php echo esc_html(get_theme_mod('coffee_shop_corner_section_small_title')); ?></strong>
					<?php }?>
					<?php if(get_theme_mod('coffee_shop_corner_section_title') != ''){?>
			      		<h3><?php echo esc_html(get_theme_mod('coffee_shop_corner_section_title')); ?></h3>
			      	<?php }?>
		       	</div>
		       	<div class="row">
			       	<?php $coffee_shop_corner_catData1 = get_theme_mod('coffee_shop_corner_category_setting');
					if($coffee_shop_corner_catData1){ 
						$args = array(
							'post_type' => 'post',
							'category_name' => $coffee_shop_corner_catData1,
				        );
				        $i=1; ?>
			    		<?php $query = new WP_Query( $args );
			          	if ( $query->have_posts() ) :
			        		while( $query->have_posts() ) : $query->the_post(); ?>
			        			<div class="col-lg-4 col-md-4">
				      				<div class="service-box mb-4">
				      					<div class="service-img">
				      						<?php the_post_thumbnail(); ?>
				      					</div>
			  							<div class="service-content">
				            				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							              	<p class="mb-0"><?php $coffee_shop_corner_excerpt = get_the_excerpt(); echo esc_html( coffee_shop_corner_string_limit_words( $coffee_shop_corner_excerpt,15 ) ); ?></p>
							              	<div class="service-btn text-right mb-2 mr-2">
							              		<a href="<?php the_permalink(); ?>" class="read-btn"><span><?php echo esc_html('Read More','coffee-shop-corner'); ?></span><span class="screen-reader-text"><?php echo esc_html('Read More','coffee-shop-corner'); ?></span></a>
							              	</div>
			            				</div>
				      				</div>
				      			</div>
			          		<?php $i++; endwhile; 
			          		wp_reset_postdata(); ?>
			          	<?php else : ?>
			              	<div class="no-postfound"></div>
			            <?php endif; ?>
			  		<?php }?>
			  	</div>
			</div>
		</section>

	<?php }?>

	<?php do_action('coffee_shop_corner_below_service_section'); ?>

	<div class="container">
	  	<?php while ( have_posts() ) : the_post(); ?>
	  		<div class="lz-content py-5">
	        	<?php the_content(); ?>
	        </div>
	    <?php endwhile; // end of the loop. ?>
	</div>
</main>

<?php get_footer(); ?>