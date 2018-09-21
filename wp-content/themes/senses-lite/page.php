<?php
/**
 * The template for displaying all pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Senses Lite
 */

get_header(); ?>

 <div id="primary" class="content-area">
           <div class="container">
          	<div class="row">
                  <div class="col-lg-8">  
				  <main id="main" class="site-main" role="main" itemprop="mainContentOfPage">
       
                    <?php
						// Start the loop.
						while ( have_posts() ) : the_post();
						
						// Include the page content template.
						get_template_part( 'template-parts/content', 'page' );
						
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						
						// End the loop.
						endwhile;
						?>
						</main>           
                  </div>
            
            	<div class="col-lg-4">        
              	<?php get_sidebar( 'right' ); ?>       
              	</div>
              
          </div>
            
        </div>
        

</div>   

<?php get_footer(); ?>
