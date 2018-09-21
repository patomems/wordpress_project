<?php
/**
 * The template for displaying link post formats
 *
 * @package Senses Lite
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
  <?php
global $post;
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1140,1000 ), false, '' );
?>
  <div class="featured-image" style="background-image: url(<?php echo $src[0]; ?> );">
  
    <div class="format-image-overlay">
    
        <header class="entry-header">
        <?php 
            if( is_sticky() && is_home() ) :
                echo '<div class="sticky-wrapper"><span class="featured">' , esc_html__( 'Featured', 'senses-lite' ) , '</span></div>'; 
            endif; 
            ?>
        
        <?php  senses_lite_entry_titles(); ?>
        
        <?php if ( 'post' === get_post_type() ) : ?>
        <div class="entry-meta post-date">
          <?php senses_lite_entry_meta(); ?>
          </div>
        <?php endif; ?>
      </header>
      
      <div class="entry-content" itemprop="text">
        <?php echo '<p class="more-link-wrapper"><a class="more-link" href="' . esc_url( get_permalink() ) . '" itemprop="url">' . esc_html__( 'See More', 'senses-lite' ) . '</a></p>' ; ?>
      </div>
      
      <?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;
	?>
      
      <footer class="entry-footer"></footer>
    </div>
  </div>

</article>
