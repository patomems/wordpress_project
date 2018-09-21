<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix single-posst'); ?>>
	<div class="content-first" itemscope itemtype="http://schema.org/CreativeWork">		
		<div class="content-third">
			<?php
			$template_parts = get_theme_mod( 'single_structure', array( 'categories', 'single_headline', 'date', 'featured_image', 'single_content', 'tags' ) );
			if ( ! empty( $template_parts ) && is_array( $template_parts ) ) {
				foreach ( $template_parts as $part ) {
					get_template_part( 'template-parts/post-parts/post-' . $part );
				}
			}
			?>
		</div>
	</div>
</div>
