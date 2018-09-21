<?php

/**
 * Sidebar for the banner area 
 * @package Senses Lite 
 *  
 */


?>

<aside id="banner-wrapper">
    <div id="banner">
		<?php if ( ! dynamic_sidebar( 'banner') ) : ?>
			<?php  // show a sample banner with caption on install but provide a setting to disable it.
				if ( esc_attr(get_theme_mod( 'show_demo_banner', 1 ) ) ) : ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/demo-banner.jpg" />
				<div class="banner-caption"><?php echo esc_html__(' Explore Nature\'s Beauty', 'senses-lite'); ?><span style="color:#E3C575;"><?php echo esc_html__( 'Photographic Blogging', 'senses-lite'); ?></span></div>
			<?php endif; ?>
		<?php endif; ?>
	</div>
</aside>

