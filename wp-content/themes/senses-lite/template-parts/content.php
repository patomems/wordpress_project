<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Senses Lite
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

	<?php // Check for featured image
    
    if ( has_post_thumbnail() ) {        
        echo '<div class="featured-image-wrapper"><a class="featured-image-link" href="' . esc_url( get_permalink() ) . '" aria-hidden="true">';
        the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title(), 'itemprop' => "image"));
        echo '</a></div>';
    }
    ?>
    <div class="entry-summary">
        <header class="entry-header">
        
        <?php 
        if( is_sticky() && is_home() ) :
               echo '<div class="sticky-wrapper"><span class="featured">' , esc_html__( 'Featured', 'senses-lite' ) , '</span></div>'; 
        endif; 
        ?>
        
        <?php  senses_lite_entry_titles(); ?>
        
        <div class="entry-meta post-date"><?php senses_lite_entry_meta(); ?></div><!-- .entry-meta -->
        
        </header><!-- .entry-header -->
    
    <div class="entry-content" itemprop="text">
    
            <?php  // Option of content or excerpt
            $excerptcontent = esc_attr(get_theme_mod( 'excerpt_content', 'excerpt' ));
				 switch ($excerptcontent) {
					case "content" :
						the_content( esc_html__( 'Continue', 'senses-lite') );
					break;
					case "excerpt" : 
						the_excerpt() ;
					break;
                }			
            // load our nav is our post is split into multiple pages
            senses_lite_multipage_nav(); 						
            ?>
    
    </div><!-- .entry-content -->
    
    <footer class="entry-footer"></footer>
    
    </div>
</article>
