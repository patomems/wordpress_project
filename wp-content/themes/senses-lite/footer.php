<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Senses Lite
 */

?>

<div id="content-bottom-wrapper">
<?php get_sidebar( 'content-bottom' ); ?>
</div>

</div><!-- #content -->

 
<div id="feature-bottom-wrapper"> </div>

<div id="bottom-wrapper">
<?php get_sidebar( 'bottom' ); ?>
</div>

<a class="back-to-top"><span class="fa fa-angle-up"></span></a>

<footer id="colophon" class="site-footer">

        <div id="sidebar-footer">       
                <?php get_sidebar( 'footer' ); ?>   
        </div>
        
            <?php if ( has_nav_menu( 'bottom-social' ) ) :
					echo '<nav class="bottom-social-menu">';
						wp_nav_menu( array(
							'theme_location' => 'bottom-social', 'depth' => 1, 'container' => false, 'menu_class' => 'social-icons', 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>',
						) );
					echo '</nav>';
            endif; ?>
 
         <nav id="footer-nav">
            <?php wp_nav_menu( array( 
                    'theme_location' => 'footer', 
                    'fallback_cb' => false, 
                    'depth' => 1,
                    'container' => false, 
                    'menu_id' => 'footer-menu', 
                ) ); 
            ?>
        </nav>
               
         <div class="site-info">
          <?php _e('Copyright &copy;', 'senses-lite'); ?> 
          <?php echo date('Y'); ?> <?php echo esc_html(get_theme_mod( 'copyright', 'Your Name' )); ?>.&nbsp;<?php _e('All rights reserved.', 'senses-lite'); ?>
          <?php
           if( get_theme_mod('copyright') == ''){ 
            if( get_theme_mod('footer_author_link') != 1){
                ?>
            <span>
                <a href="<?php echo esc_url('https://www.shapedpixels.com/themes/senses/');?>"><?php esc_html_e('Senses','senses-lite'); ?></a>
                    <?php echo esc_html__( 'Wordpress Theme by','senses-lite');?> 
                <a href="<?php echo esc_url('https://www.shapedpixels.com');?>">
                    <?php echo esc_html__( 'Shaped Pixels','senses-lite');?>
                </a>
            </span>
            <?php } } ?>
        </div>
        
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
