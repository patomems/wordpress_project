<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Senses Lite
 */

get_header(); ?>

 
<div id="primary" class="content-area">
                     <div class="container">
                        <div class="row"> 
 

                        <?php // if the single layout is set to the left column
						if ( esc_attr(get_theme_mod('single_layout','right-column')) == 'left-column' ) : ?>
                        
                                <div class="col-md-8 col-md-push-4 <?php echo esc_attr(get_theme_mod( 'single_layout', 'right-column' )); ?>">
                                
                                <?php  // or if the single layout is set to full width
								elseif ( esc_attr(get_theme_mod('single_layout','right-column')) == 'full-width' ) : ?>
                                
                                <div class="col-md-12">
                                
                                  <?php  // or use this if the single is set to the right column
								else : ?>
                                
                                <div class="col-md-8  <?php echo esc_attr(get_theme_mod( 'single_layout', 'right-column' )); ?>">
                                
                     	<?php endif;  ?>   
						<main id="main" class="site-main" role="main">
                              		
										<?php while ( have_posts() ) : the_post(); ?>
                                        <?php get_template_part( 'template-parts/content', 'single' ); ?>
                                        
                            
                                        <?php
                                            // If comments are open or we have at least one comment, load up the comment template.
                                            if ( comments_open() || get_comments_number() ) :
                                                comments_template();
                                            endif;
                                        ?>
                            
                                    <?php endwhile; // End of the loop. ?>
                                            </main><!-- #main -->
                                </div>
 
                    <?php if ( esc_attr(get_theme_mod('single_layout','right-column')) == 'left-column' ) :
						get_sidebar( 'left' );
					endif; ?> 
                    
 					<?php if ( esc_attr(get_theme_mod('single_layout','right-column')) == 'right-column' ) :
						get_sidebar( 'right' );
					endif;  ?>
 
 
                        </div>
                </div>
        

</div><!-- #primary --> 


<?php get_footer(); ?>
