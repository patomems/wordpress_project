<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Senses Lite
 */

get_header(); ?>

<div id="primary" class="content-area">
                      <div class="container">
                        <div class="row">
                        
						<?php // when we use a layout with a left sidebar
                                if ( esc_attr(get_theme_mod('blog_style','top-featured-right')) == 'top-featured-left' ) : ?>          
                                           
                                           <div class="col-md-8 col-md-push-4 <?php echo esc_attr(get_theme_mod( 'blog_style', 'top-featured-right' )); ?>">
                                            
                                   <?php else : ?>
                                   
                                   <div class="col-md-8 <?php echo esc_attr(get_theme_mod( 'blog_style', 'top-featured-right' )); ?>">        
                                           
                         <?php endif;  ?>  
						 <main id="main" class="site-main" itemprop="mainEntityOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
                  
                            
						<?php if ( have_posts() ) : ?>
                        
                        		<?php // If this layout is centered, then use this
								if ( esc_attr(get_theme_mod('blog_style','top-featured-right')) == 'top-featured-center' ) : ?>
                                	<header class="page-header text-center" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
                                <?php else : ?>
                                   <header class="page-header">
                                <?php endif;  ?>
                                
								<?php
                                    senses_lite_the_archive_title( '<h1 class="page-title" itemprop="headline">', '</h1>' );
                                    senses_lite_archive_description( '<div class="taxonomy-description">', '</div>' );
                                ?>
                                </header><!-- .page-header -->

                            
                             <div class="posts-layout">
								<?php while ( have_posts() ) : the_post(); ?>
                                	<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
                                <?php endwhile; ?>
                            </div>
                            
                        <?php senses_lite_blog_pagination(); ?>
                        
                        <?php else : ?>
                            <?php get_template_part( 'template-parts/content', 'none' ); ?>
                        <?php endif; ?>
           
					</main>
                  </div>
                  
                   <?php 
				   	if  ( esc_attr(get_theme_mod('blog_style','top-featured-right')) == 'top-featured-left' ) :
						get_sidebar( 'left' );
					endif; 
					?>     
                                               
					<?php 
                        if (esc_attr(get_theme_mod('blog_style','top-featured-right')) == 'top-featured-right' ) :
                            get_sidebar( 'right' );
                        endif;  
                    ?>
 


                        </div><!-- .row -->
                </div><!-- .container -->

</div>

<?php get_footer(); ?>
