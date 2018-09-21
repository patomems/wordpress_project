<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Senses Lite
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/CreativeWork">


	<?php // Check for featured image
    
    if ( has_post_thumbnail() ) {        
        echo '<div class="featured-image-wrapper">';
        the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title(), 'itemprop' => "image"));
        echo '</div>';
    }
    ?>

	<header class="entry-header">
		<?php the_title( '<h1 class="page-title" itemprop="headline">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content" itemprop="text">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'senses-lite' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
		<?php
		if( esc_attr(get_theme_mod( 'show_edit', 0 ) ) ) :
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'senses-lite' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
			endif;
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

