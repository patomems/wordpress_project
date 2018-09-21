<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Senses Lite
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

		<?php if( has_post_thumbnail() && esc_attr(get_theme_mod( 'show_single_thumbnail', 1 ) ) ) : 
				echo '<div class="featured-image-wrapper">';          
					the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title(), 'itemprop' => "image"));
			 	echo '</div>'; 
         endif; ?>


	<header class="entry-header">
		
		<?php  senses_lite_entry_titles(); ?>
        
		<div class="entry-meta">
		<?php senses_lite_single_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->


	<div class="entry-content" itemprop="text">
		<?php the_content(); ?>
                
                <?php  // For content split into multiple pages
				senses_lite_multipage_nav();  ?>
              
	</div><!-- .entry-content -->

	<footer class="entry-footer" itemscope itemtype="http://schema.org/WPFooter">
    
 		<?php // For post navigation with next and previous
			if( esc_attr(get_theme_mod( 'show_next_prev', 1 ) ) ) {
			senses_lite_post_pagination();	
			}
		?>   
        
		<?php senses_lite_entry_footer(); ?>   
                     	
		<?php	// Author bio.
		if( esc_attr(get_theme_mod( 'show_author_bio', 1 ) ) ) {
			if ( is_single() && get_the_author_meta( 'description' ) ) :
				get_template_part( 'author-bio' );
			endif;
		}
		?> 
        
	</footer>
</article>
