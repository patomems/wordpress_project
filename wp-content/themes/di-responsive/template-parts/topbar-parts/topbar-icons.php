<?php
/**
 * Will contain woo icons, social icons and search icon.
 */
?>

<p class="spsl-fr-topbar-icons iconouter">
	
	<?php
	if( class_exists( 'WooCommerce' ) ) {
	?>
		<span class="woo_icons_top_bar_ctmzr">
			<?php get_template_part( 'template-parts/partial/content', 'woo-icons-topbar' ); ?>
		</span>
	<?php
	}
	?>

	<?php
	// Social link open in new tab or same.
	if( get_theme_mod( 's_link_open', '1' ) == 1 ) {
		$s_link_tab = 'target="_blank"';
	} else {
		$s_link_tab = '';
	}

	if( get_theme_mod( 'display_sicons_top_bar', '1' ) == 1 ) {
		echo "<span class='sicons_ctmzr'>";
		if( get_theme_mod( 'sprofile_link_facebook', 'http://facebook.com' ) ) {
		?>
			<a title="<?php esc_attr_e( 'Facebook', 'di-responsive' ); ?>" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_facebook', 'http://facebook.com' ) ); ?>"><span class="fa fa-facebook bgtoph-icon-clr"></span></a>
		<?php
		}
		?>
		
		<?php
		if( get_theme_mod( 'sprofile_link_twitter', 'http://twitter.com' ) ) {
		?>
			<a title="<?php esc_attr_e( 'Twitter', 'di-responsive' ); ?>" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_twitter', 'http://twitter.com' ) ); ?>"><span class="fa fa-twitter bgtoph-icon-clr"></span></a>
		<?php
		}
		?>
		
		<?php
		if( get_theme_mod( 'sprofile_link_youtube', 'http://youtube.com' ) ) {
		?>
			<a title="<?php esc_attr_e( 'YouTube', 'di-responsive' ); ?>" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_youtube', 'http://youtube.com' ) ); ?>"><span class="fa fa-youtube bgtoph-icon-clr"></span></a>
		<?php
		}
		?>
		
		<?php
		if( get_theme_mod( 'sprofile_link_vk' ) ) {
		?>
			<a title="<?php esc_attr_e( 'VK', 'di-responsive' ); ?>" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_vk' ) ); ?>"><span class="fa fa-vk bgtoph-icon-clr"></span></a>
		<?php
		}
		?>

		<?php
		if( get_theme_mod( 'sprofile_link_googleplus' ) ) {
		?>
			<a title="<?php esc_attr_e( 'Google Plus', 'di-responsive' ); ?>" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_googleplus' ) ); ?>"><span class="fa fa-google bgtoph-icon-clr"></span></a>
		<?php
		}
		?>
		
		<?php
		if( get_theme_mod( 'sprofile_link_linkedin' ) ) {
		?>
			<a title="<?php esc_attr_e( 'Linkedin', 'di-responsive' ); ?>" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_linkedin' ) ); ?>"><span class="fa fa-linkedin bgtoph-icon-clr"></span></a>
		<?php
		}
		?>
		
		<?php
		if( get_theme_mod( 'sprofile_link_pinterest' ) ) {
		?>
			<a title="<?php esc_attr_e( 'Pinterest', 'di-responsive' ); ?>" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_pinterest' ) ); ?>"><span class="fa fa-pinterest-p bgtoph-icon-clr"></span></a>
		<?php
		}
		?>

		<?php
		if( get_theme_mod( 'sprofile_link_instagram' ) ) {
		?>
			<a title="<?php esc_attr_e( 'Instagram', 'di-responsive' ); ?>" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_instagram' ) ); ?>"><span class="fa fa-instagram bgtoph-icon-clr"></span></a>
		<?php
		}
		?>

		<?php
		if( get_theme_mod( 'sprofile_link_telegram' ) ) {
		?>
			<a title="<?php esc_attr_e( 'Telegram', 'di-responsive' ); ?>" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_telegram' ) ); ?>"><span class="fa fa-telegram bgtoph-icon-clr"></span></a>
		<?php
		}
		?>

		<?php
		if( get_theme_mod( 'sprofile_link_snapchat' ) ) {
		?>
			<a title="<?php esc_attr_e( 'Snapchat', 'di-responsive' ); ?>" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_snapchat' ) ); ?>"><span class="fa fa-snapchat bgtoph-icon-clr"></span></a>
		<?php
		}
		?>

		<?php
		if( get_theme_mod( 'sprofile_link_flickr' ) ) {
		?>
			<a title="<?php esc_attr_e( 'Flickr', 'di-responsive' ); ?>" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_flickr' ) ); ?>"><span class="fa fa-flickr bgtoph-icon-clr"></span></a>
		<?php
		}
		?>

		<?php
		if( get_theme_mod( 'sprofile_link_reddit' ) ) {
		?>
			<a title="<?php esc_attr_e( 'Reddit', 'di-responsive' ); ?>" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_reddit' ) ); ?>"><span class="fa fa-reddit bgtoph-icon-clr"></span></a>
		<?php
		}
		?>

		<?php
		if( get_theme_mod( 'sprofile_link_tumblr' ) ) {
		?>
			<a title="<?php esc_attr_e( 'Tumblr', 'di-responsive' ); ?>" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_tumblr' ) ); ?>"><span class="fa fa-tumblr bgtoph-icon-clr"></span></a>
		<?php
		}
		?>

		<?php
		if( get_theme_mod( 'sprofile_link_yelp' ) ) {
		?>
			<a title="<?php esc_attr_e( 'Yelp', 'di-responsive' ); ?>" <?php echo $s_link_tab; ?> href="<?php echo esc_url( get_theme_mod( 'sprofile_link_yelp' ) ); ?>"><span class="fa fa-yelp bgtoph-icon-clr"></span></a>
		<?php
		}
		?>

		<?php
		if( get_theme_mod( 'sprofile_link_whatsappno' ) ) {
		?>
			<a title="<?php esc_attr_e( 'WhatsApp', 'di-responsive' ); ?>" <?php echo $s_link_tab; ?> href="whatsapp://send?text=&phone=<?php echo esc_attr( get_theme_mod( 'sprofile_link_whatsappno' ) ); ?>&abid=<?php echo esc_attr( get_theme_mod( 'sprofile_link_whatsappno' ) ); ?>"><span class="fa fa-whatsapp bgtoph-icon-clr"></span></a>
		<?php
		}
		?>
		
		<?php
		if( get_theme_mod( 'sprofile_link_skype' ) ) {
		?>
			<a title="<?php esc_attr_e( 'Skype', 'di-responsive' ); ?>" <?php echo $s_link_tab; ?> href="skype:<?php echo esc_attr( get_theme_mod( 'sprofile_link_skype' ) ); ?>?add"><span class="fa fa-skype bgtoph-icon-clr"></span></a>
		<?php
		}
		echo "</span>";
	}
	?>

	<?php
	if( get_theme_mod( 'top_bar_seach_icon', '1' ) == 1 ) {
	?>
		<a id="scp-btn-search" class="scp-btn-search" title="<?php esc_attr_e( 'Search', 'di-responsive' ); ?>" href="javascript:void(0)"><span class="fa fa-search bgtoph-icon-clr"></span></a>
	<?php
	}
	?>
</p>

<?php
// Top bar search form container.
if( get_theme_mod( 'top_bar_seach_icon', '1' ) == 1 ) {
?>
	<div class="scp-search">
		<button id="scp-btn-search-close" class="scp-btn scp-btn--search-close scp-btn-search-close" aria-label="<?php esc_attr_e( 'Close search form', 'di-responsive' ); ?>"><i class="fa fa-close"></i></button>
		<?php get_search_form(); ?>
	</div>
<?php
}
