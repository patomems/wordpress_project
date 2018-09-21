<?php
/**
 * Template part for displaying post summaries
 * This applies to Senses Lite and Senses (Pro)
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Senses Lite
 */


if  (esc_attr(get_theme_mod('blog_style','left-featured')) == 'grid' ) :

	echo '<li class="col-sm-12 col-lg-6">';
	
	   if ( has_post_format( 'image' ) ) {
							
				 get_template_part( 'template-parts/content', 'image' );
			 
			} elseif ( has_post_format( 'aside' ) ) {
					 
				 get_template_part( 'template-parts/content', 'aside' );  
					   
		   } elseif ( has_post_format( 'quote' ) ) { 
			
				 get_template_part( 'template-parts/content', 'quote' ); 
			
			} elseif ( has_post_format( 'status' ) ) { 
			
				 get_template_part( 'template-parts/content', 'status' ); 
			
			}  else {
			   
			   get_template_part( 'template-parts/content', 'grid' );        
					   
			}  
	echo'</li>';	

elseif  (esc_attr(get_theme_mod('blog_style','left-featured')) == 'masonry-style' ) :

	   if ( has_post_format( 'image' ) ) {
							
				 get_template_part( 'template-parts/content', 'image' );
			 
			} elseif ( has_post_format( 'aside' ) ) {
					 
				 get_template_part( 'template-parts/content', 'aside' );  
					   
		   } elseif ( has_post_format( 'quote' ) ) { 
			
				 get_template_part( 'template-parts/content', 'quote' ); 
			
			} elseif ( has_post_format( 'status' ) ) { 
			
				 get_template_part( 'template-parts/content', 'status' ); 
			
			}  else {
			   
			   get_template_part( 'template-parts/content', 'masonry' );        
					   
			} 
						 
else :

	get_template_part( 'template-parts/content', get_post_format() );
	
endif;
?>
