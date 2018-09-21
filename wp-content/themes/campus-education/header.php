<?php
/**
 * The Header for our theme.
 * @package Campus Education
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'campus-education' ) ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="top-bar">
  <div class="container">
    <div class="top-header">
      <div class="row">
        <div class="col-md-3">
          <div class="contact-details">
            <div class="row">
              <?php if ( get_theme_mod('campus_education_call_text','') != "" ) {?>
                <div class="col-md-2 p-0 conatct-font">
                  <i class="fas fa-phone"></i>
                </div>
                <div class="col-md-10 p-0">
                  <?php if ( get_theme_mod('campus_education_call_text','') != "" ) {?>
                    <p class="bold-font"><?php echo esc_html( get_theme_mod('campus_education_call_text',__('Call us Now','campus-education') )); ?></p>
                  <?php }?>
                  <?php if ( get_theme_mod('campus_education_call_number','') != "" ) {?>
                    <p><?php echo esc_html( get_theme_mod('campus_education_call_number',__('+00-123-456-789','campus-education') )); ?></p>
                  <?php }?>
                </div>
              <?php }?>
            </div>
          </div>
        </div>          
        <div class="col-md-3 p-0">
          <div class="contact-details">
            <div class="row">
              <?php if ( get_theme_mod('campus_education_email_text','') != "" ) {?>
                <div class="col-md-2 p-0 conatct-font">
                  <i class="fas fa-envelope"></i>
                </div>
                <div class="col-md-10 p-0">
                  <?php if ( get_theme_mod('campus_education_email_text','') != "" ) {?>
                    <p class="bold-font"><?php echo esc_html( get_theme_mod('campus_education_email_text',__('Mail us Now','campus-education')) ); ?></p>
                  <?php }?>
                  <?php if ( get_theme_mod('campus_education_email','') != "" ) {?>
                    <p><?php echo esc_html( get_theme_mod('campus_education_email',__('campus@example.com','campus-education')) ); ?></p>
                  <?php }?>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="social-media">
            <?php if( get_theme_mod( 'campus_education_facebook' ) != '') { ?>
              <span class="diamond"><a href="<?php echo esc_url( get_theme_mod( 'campus_education_facebook','' ) ); ?>"><i class="fab fa-facebook-f"></i></a></span>
            <?php } ?>
            <?php if( get_theme_mod( 'campus_education_twitter' ) != '') { ?>
              <span class="diamond"><a href="<?php echo esc_url( get_theme_mod( 'campus_education_twitter','' ) ); ?>"><i class="fab fa-twitter"></i></a></span>
            <?php } ?>
            <?php if( get_theme_mod( 'campus_education_google') != '') { ?>
              <span class="diamond"><a href="<?php echo esc_url( get_theme_mod( 'campus_education_google','' ) ); ?>"><i class="fab fa-google-plus-g"></i></a></span>
            <?php } ?>
            <?php if( get_theme_mod( 'campus_education_pintrest' ) != '') { ?>
              <span class="diamond"><a href="<?php echo esc_url( get_theme_mod( 'campus_education_pintrest','' ) ); ?>"><i class="fab fa-pinterest-p"></i></a></span>
            <?php } ?>
            <?php if( get_theme_mod( 'campus_education_insta' ) != '') { ?>
              <span class="diamond"><a href="<?php echo esc_url( get_theme_mod( 'campus_education_insta','' ) ); ?>"><i class="fab fa-instagram"></i></a></span>
            <?php } ?>
            <?php if( get_theme_mod( 'campus_education_linkdin' ) != '') { ?>
              <span class="diamond"><a href="<?php echo esc_url( get_theme_mod( 'campus_education_linkdin','' ) ); ?>"><i class="fab fa-linkedin-in"></i></a></span>
            <?php } ?>
            <?php if( get_theme_mod( 'campus_education_youtube' ) != '') { ?>
              <span class="diamond"><a href="<?php echo esc_url( get_theme_mod( 'campus_education_youtube','' ) ); ?>"><i class="fab fa-youtube"></i></a></span>
            <?php } ?>
          </div>
        </div>
        <?php if ( get_theme_mod('campus_education_button_text','') != "" ) {?>
          <div class="col-md-2 col-sm-2"> 
            <div class="donate-link">            
              <a href="<?php echo esc_html( get_theme_mod('campus_education_button_link',__('#','campus-education')) ); ?>"><?php echo esc_html( get_theme_mod('campus_education_button_text',__('APPLY ONLINE','campus-education')) ); ?></a>    
            </div>          
          </div>
        <?php }?>
      </div>
    </div>
  </div>    
  <div id="header">
    <div class="container">
      <div class="menu-sec">
        <div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','campus-education'); ?></a></div>
        <div class="row">
          <div class="col-md-3 col-sm-3">
            <div class="logo">
              <?php if( has_custom_logo() ){ campus_education_the_custom_logo();
               }else{ ?>
              <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
              <?php $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) : ?> 
                <p class="site-description"><?php echo esc_html($description); ?></p>
              <?php endif; }?>
            </div>
          </div>
          <div class="menubox col-md-8 col-sm-8 p-0">
            <div class="nav">
              <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
            </div>
          </div>
          <div class="search-box col-md-1 col-sm-1">
            <span class="diamond1"><i class="fas fa-search"></i></span>
          </div>
        </div>
        <div class="serach_outer">
          <div class="closepop"><i class="far fa-window-close"></i></div>
          <div class="serach_inner">
            <?php get_search_form(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>