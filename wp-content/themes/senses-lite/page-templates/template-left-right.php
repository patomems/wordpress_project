<?php
/**
 * Template Name: Left &amp; Right Columns
 * @package Senses Lite 
*/

get_header(); ?>

<div id="primary" class="content-area">
            <div class="container">
            <div class="row">
            
                    <div class="col-md-6 col-md-push-3">
					<main id="main" class="site-main" itemprop="mainContentOfPage">

                    
                     
                            
                                        <?php
                                        // Start the loop.
                                        while ( have_posts() ) : the_post();
                            
                                            // Include the page content template.
                                            get_template_part( 'template-parts/content', 'page' );
                            
                                            // If comments are open or we have at least one comment, load up the comment template.
                                            if ( comments_open() || get_comments_number() ) {
                                                comments_template();
                                            }
                            
                                        // End of the loop.
                                        endwhile;
                                        ?>
                    
                            
                      </main>     
                            
                    </div>
               
                    <div class="col-md-3 col-md-pull-6">
                        <?php get_sidebar( 'left' ); ?>
                    </div>                
                    
                    <div class="col-md-3">
                        <?php get_sidebar( 'right' ); ?>
                    </div> 
            
            </div>
        </div>
     
    </div> 


<?php get_footer(); ?>    