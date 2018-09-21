<?php
/**
 * The template for displaying Author bios
 * @package Senses Lite 
*/
?>

<div class="author-info" itemscope="" itemtype="http://schema.org/Person">
    
	<div class="author-avatar" itemprop="image">
		<?php
		/**
		 * Filter the author bio avatar size.
		 * @param int $size The avatar height and width size in pixels.
		 */
		$author_bio_avatar_size = apply_filters( 'senses_lite_author_bio_avatar_size', 80 );

		echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
		?>
	</div>

	<div class="author-description">
		<h3 class="author-title" itemprop="name"><?php _e( 'Published by', 'senses-lite' ); ?><span class="author-name"> <?php echo esc_html(get_the_author() ); ?></span></h3>

		<p class="author-bio"><?php the_author_meta( 'description' ); ?></p>
		 <div class="author-website"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author" itemprop="url">
				<?php printf( __( 'View articles written by %s', 'senses-lite' ), esc_html(get_the_author() ) ); ?>
			</a>
            </div>
	</div>
</div>
