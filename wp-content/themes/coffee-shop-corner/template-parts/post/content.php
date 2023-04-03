<?php
/**
 * Template part for displaying posts
 *
 * @subpackage Coffee Shop Corner
 * @since 1.0
 * @version 1.4
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="article_content">
    <?php if(has_post_thumbnail()) { ?>
      <?php the_post_thumbnail(); ?>
    <?php }?>
    <div class="metabox"> 
      <span class="entry-date"><i class="fas fa-calendar-alt"></i><?php echo esc_html( get_the_date()); ?></span>
      <span class="entry-author text-right"><i class="fas fa-user"></i><?php the_author(); ?></span>
    </div>
    <?php the_excerpt(); ?>
    <div class="read-btn">
      <a href="<?php the_permalink(); ?>"><span><?php esc_html_e('Read More','coffee-shop-corner'); ?></span><span class="screen-reader-text"><?php esc_html_e('Read More','coffee-shop-corner'); ?></span></a>
    </div>
    <div class="clearfix"></div>
  </div>
</article>