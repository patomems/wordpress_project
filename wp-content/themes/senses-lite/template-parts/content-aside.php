<?php
/**
 * The template for displaying aside post formats
 *
 * 
 * @package Senses Lite 
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
    <div class="aside-wrapper">
        <header class="entry-header">
        
        <?php if ( is_single() ) :
        echo '<h1 class="entry-title" itemprop="headline">';		
        	if(the_title( '', '', false ) !='') the_title(); 
        	else esc_html_e('Untitled', 'senses-lite'); 
       		 echo '</h1>';
        else :
			the_title( '<h2 class="screen-reader-text entry-title"  itemprop="headline">', '</h2>' );
        endif; ?>
        
        <div class="entry-meta post-date"><?php senses_lite_entry_meta(); ?></div>
        
        </header>
        
        <div class="entry-content" itemprop="text">
        <?php the_content(); ?>
        </div>
    
    	<footer class="entry-footer"></footer>
    </div>

</article>

