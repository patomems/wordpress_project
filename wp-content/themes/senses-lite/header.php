<?php
/**
 * The header for our theme.
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Senses Lite
 */

 
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<div id="page" class="hfeed site  <?php echo esc_attr(get_theme_mod( 'boxed_style', 'fullwidth' ) ) ; ?>">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'senses-lite' ); ?></a>
           
	<header id="masthead" <?php if ( get_header_image()  && get_theme_mod( 'show_header_image', 1 ) ) : ?>style="background-image: url('<?php header_image(); ?>')"<?php endif; ?> itemscope="itemscope" itemtype="http://schema.org/WPHeader">
        <div class="site-header">      
            <div class="site-branding">
			
                <?php if ( senses_lite_custom_logo()) : ?>
              <div class="site-logo" itemscope itemtype="http://schema.org/Organization">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> 
					<?php senses_lite_custom_logo(); ?>
					</a>    
               </div>                
                <?php  endif;            
                    if( esc_attr(get_theme_mod( 'show_site_title', 1 ) ) ) :  ?>
                        <div class="site-title" itemprop="headline"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
                    <?php endif; ?>
                            <?php  if ( esc_attr(get_theme_mod( 'show_tagline', 1 ) ) ) : {
                            $description = get_bloginfo( 'description', 'display' );
                            if ( $description || is_customize_preview() ) : ?>
              <div class="site-description" itemprop="description"><?php echo $description; ?></div>
                            <?php endif;				 		  		  
                            }
                endif;  ?>    
    
            </div><!-- .site-branding -->
            
            <nav id="site-navigation" class="main-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                <div class="toggle-container visible-xs visible-sm hidden-md hidden-lg">
                        <button class="menu-toggle"><?php esc_html_e( 'Menu', 'senses-lite' ); ?></button>
                </div>
                              
              <?php if ( has_nav_menu( 'primary' ) ) {																			
                        wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); 
                        } else {
                        wp_nav_menu( array(	'container' => '', 'menu_class' => '', 'title_li' => '' ));							
                       } 
                    ?>                    
            </nav><!-- #site-navigation --> 
         </div><!-- .site-header -->
	</header><!-- #masthead -->

     
    	              
<?php get_sidebar( 'banner' ); ?>	
    	
<div id="feature-top-wrapper">
		
</div>
    
<div id="content" class="site-content">

<div id="breadcrumb-wrapper">
	<?php get_sidebar( 'breadcrumbs' ); ?>
</div>

<div id="content-top-wrapper">
	<?php get_sidebar( 'content-top' ); ?>
</div>