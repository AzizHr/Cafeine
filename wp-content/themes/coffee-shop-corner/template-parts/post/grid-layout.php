<?php
/**
 * Template part for displaying posts
 *
 * @subpackage Coffee Shop Corner
 * @since 1.0
 * @version 1.4
 */
?>

<div class="col-lg-4 col-md-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service grid-layout'); ?>>
    <div class="article_content">
      <h3><?php the_title(); ?></h3>
      <?php if(has_post_thumbnail()) { ?>
        <?php the_post_thumbnail(); ?>
      <?php }?>
      <?php the_excerpt(); ?>
      <div class="read-btn">
        <a href="<?php the_permalink(); ?>"><span><?php esc_html_e('Read More','coffee-shop-corner'); ?></span><span class="screen-reader-text"><?php esc_html_e('Read More','coffee-shop-corner'); ?></span></a>
      </div>
      <div class="clearfix"></div>
    </div>
  </article>
</div>