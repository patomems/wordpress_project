<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Senses Lite
 */

  /**
 * Displays the optional custom logo.
 * Does nothing if the custom logo is not available.
 */ 
if ( ! function_exists( 'senses_lite_custom_logo' ) ) :
function senses_lite_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;
/**
 * Entry titles
 *
 * Creates the appropriate title based on the page.
 * Adds Untitled if no title is provided by the author.
*/

if ( ! function_exists( 'senses_lite_entry_titles' ) ) :

function senses_lite_entry_titles() { 
    
if ( is_single() ) :
	
        echo '<h1 class="entry-title" itemprop="headline">';		
		if(the_title( '', '', false ) !='') the_title(); 
			else esc_html_e('Untitled', 'senses-lite'); 
	echo '</h1>';
	  
 else :
		
	echo '<h2 class="entry-title" itemprop="headline"><a href="' .esc_url( get_permalink() ) .'" rel="bookmark">';			
	if(the_title( '', '', false ) !='') the_title(); 
		else esc_html_e('Untitled', 'senses-lite'); 
	echo '</a></h2>';
	  
    endif;
}

endif;
		
					
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
if ( ! function_exists( 'senses_lite_posted_on' ) ) :
function senses_lite_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s" itemprop="datePublished">%2$s</time>';
	

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	$posted_on = sprintf(
		_x( '%s', 'post date', 'senses-lite' ),
		$time_string
	);
	
	echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

}
endif;



if ( ! function_exists( 'senses_lite_entry_meta' ) ) :
/**
 * Prints HTML with meta information for the categories, tags.
 *
 * Create your own senses_lite_entry_meta() to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 */
function senses_lite_entry_meta() {

if ( esc_attr(get_theme_mod( 'show_entry_post_date', 1 )) ) :
	if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
		senses_lite_posted_on();
	}	
endif;

if ( esc_attr(get_theme_mod( 'show_entry_post_author', 0 )) ) :	
	if ( 'post' == get_post_type() ) {
			if ( is_singular() || is_multi_author() ) {
				printf( '<span class="byline"><span class="author vcard" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person"><span class="screen-reader-text">%1$s </span><a class="url fn n" href="%2$s" itemprop="url"><span itemprop="name">%3$s</span></a></span></span>',
					_x( 'Author', 'Used before post author name.', 'senses-lite' ),
					esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
					get_the_author()
				);
			}	
		}
endif;	


if ( esc_attr(get_theme_mod( 'show_entry_post_format', 0 )) ) :
	$format = get_post_format();
	if ( current_theme_supports( 'post-formats', $format ) ) {
		printf( '<span class="entry-format"><a href="%2$s">%3$s %1$s</a></span>',
			sprintf( '<span class="screen-reader-text">%s </span>', _x( 'Post', 'Used After post format.', 'senses-lite' ) ),
			esc_url( get_post_format_link( $format ) ),
			get_post_format_string( $format )
		);
	}
endif;

	if ( ! is_singular() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		if ( esc_attr(get_theme_mod( 'show_comments_link', 0 )) ) :
			echo '<span class="comments-link">';
			comments_popup_link( sprintf( __( 'Leave a comment<span class="screen-reader-text"> on %s</span>', 'senses-lite' ), get_the_title() ) );
			echo '</span>';
		endif;
	}
		
if( esc_attr(get_theme_mod( 'show_edit', 0 ) ) ) {
              edit_post_link( esc_html__( 'Edit this Post', 'senses-lite' ), '<span class="edit-link">', '</span>' );
            }	

}
endif;






/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
if ( ! function_exists( 'senses_lite_single_posted_on' ) ) :
function senses_lite_single_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s" itemprop="datePublished">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s" itemprop="datePublished">%2$s</time><time class="updated" datetime="%3$s" itemprop="dateUpdated">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		_x( 'Posted on %s', 'post date', 'senses-lite' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		_x( 'by %s', 'post author', 'senses-lite' ),
		'<span class="author vcard" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" itemprop="url"><span itemprop="name">' . esc_html( get_the_author() ) . '</span></a></span>'
	);
	
	
	$format = get_post_format();
	if ( current_theme_supports( 'post-formats', $format ) ) {
		printf( '<span class="entry-format"><a href="%2$s">%3$s %1$s</a></span>',
			sprintf( '<span class="screen-reader-text">%s </span>', _x( 'Post', 'Used After post format.', 'senses-lite' ) ),
			esc_url( get_post_format_link( $format ) ),
			get_post_format_string( $format )
		);
	}	


	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

}
endif;



/**
 * Prints HTML with meta information for the full post footer area.
 */
if ( ! function_exists( 'senses_lite_entry_footer' ) ) :
function senses_lite_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		if( esc_attr(get_theme_mod( 'show_single_categories', 1 ) ) ) :
		$categories_list = get_the_category_list( esc_html__( ', ', 'senses-lite' ) );
		if ( $categories_list && senses_lite_categorized_blog() ) {
			printf( '<span class="cat-links" itemprop="articleSection">' . __( 'Posted in %1$s', 'senses-lite' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}
endif;
		/* translators: used between list items, there is a space after the comma */
		if( esc_attr(get_theme_mod( 'show_tags_list', 1 ) ) ) :
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'senses-lite' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links" itemprop="keywords">' . __( 'Tagged %1$s', 'senses-lite' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
		endif;
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'senses-lite' ), esc_html__( '1 Comment', 'senses-lite' ), esc_html__( '% Comments', 'senses-lite' ) );
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit this post %s', 'senses-lite' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;



/**
 * Multi-page navigation.
 */
if ( ! function_exists( 'senses_lite_multipage_nav' ) ) :
function senses_lite_multipage_nav() {
	wp_link_pages( array(
		'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'senses-lite' ) . '</span>',
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'senses-lite' ) . ' </span>%',
		'separator'   => ', ',
	) );
}
endif;

/**
 * Blog pagination when more than one page of post summaries.
 * Add classes to next_posts_link and previous_posts_link
 */
add_filter('next_posts_link_attributes', 'senses_lite_posts_link_attributes_1');
add_filter('previous_posts_link_attributes', 'senses_lite_posts_link_attributes_2');

function senses_lite_posts_link_attributes_1() {
    return 'class="post-nav-older"';
}
function senses_lite_posts_link_attributes_2() {
    return 'class="post-nav-newer"';
}

// Output the pagination navigation
if ( ! function_exists( 'senses_lite_blog_pagination' ) ) :
function senses_lite_blog_pagination() {	
		echo get_next_posts_link( __('Older Posts', 'senses-lite'));		
		echo get_previous_posts_link( __('Newer Posts', 'senses-lite'));	
}
endif;

/**
 * Single Post previous or next navigation.
 */

if ( ! function_exists( 'senses_lite_post_pagination' ) ) :
function senses_lite_post_pagination() {
	the_post_navigation( array(	
		'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Next Article', 'senses-lite' ) . '</span> ' .
			'<span class="screen-reader-text">' . esc_html__( 'Next Article:', 'senses-lite' ) . '</span> ' .
			'<span class="post-title">%title</span>',
			
		'prev_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Previous Article', 'senses-lite' ) . '</span> ' .
			'<span class="screen-reader-text">' . esc_html__( 'Previous Article:', 'senses-lite' ) . '</span> ' .
			'<span class="post-title">%title</span>',
	) );
}
endif;


/**
 * Shim for `the_archive_title()`.
 *
 * Display the archive title based on the queried object.
 * Custom filter for changing the default archive title labels.
 *
 * @param string $before Optional. Content to prepend to the title. Default empty.
 * @param string $after  Optional. Content to append to the title. Default empty.
 */
 
if ( ! function_exists( 'senses_lite_the_archive_title' ) ) :

function senses_lite_the_archive_title( $before = '', $after = '' ) {
	if ( is_category() ) {
		$title = sprintf( ( '%s' ), single_cat_title( '', false ) );
	} elseif ( is_tag() ) {
		$title = sprintf( esc_html__( 'Posts Tagged with %s', 'senses-lite' ), single_tag_title( '', false ) );
	} elseif ( is_author() ) {
		$title = sprintf( esc_html__( 'Articles by %s', 'senses-lite' ), '<span class="vcard">' . get_the_author() . '</span>' );
	} elseif ( is_year() ) {
		$title = sprintf( esc_html__( 'Articles from: %s', 'senses-lite' ), get_the_date( _x( 'Y', 'yearly archives date format', 'senses-lite' ) ) );
	} elseif ( is_month() ) {
		$title = sprintf( esc_html__( 'Articles from %s', 'senses-lite' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'senses-lite' ) ) );
	} elseif ( is_day() ) {
		$title = sprintf( esc_html__( 'Articles from %s', 'senses-lite' ), get_the_date( _x( 'F j, Y', 'daily archives date format', 'senses-lite' ) ) );
	} elseif ( is_tax( 'post_format' ) ) {
		if ( is_tax( 'post_format', 'post-format-aside' ) ) {
			$title = _x( 'Asides', 'post format archive title', 'senses-lite' );
		} elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
			$title = _x( 'Galleries', 'post format archive title', 'senses-lite' );
		} elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
			$title = _x( 'Images', 'post format archive title', 'senses-lite' );
		} elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
			$title = _x( 'Videos', 'post format archive title', 'senses-lite' );
		} elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
			$title = _x( 'Quotes', 'post format archive title', 'senses-lite' );
		} elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
			$title = _x( 'Links', 'post format archive title', 'senses-lite' );
		} elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
			$title = _x( 'Statuses', 'post format archive title', 'senses-lite' );
		} elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
			$title = _x( 'Audio', 'post format archive title', 'senses-lite' );
		} elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
			$title = _x( 'Chats', 'post format archive title', 'senses-lite' );
		}
	} elseif ( is_post_type_archive() ) {
		$title = sprintf( esc_html__( 'Archives: %s', 'senses-lite' ), post_type_archive_title( '', false ) );
	} elseif ( is_tax() ) {
		$tax = get_taxonomy( get_queried_object()->taxonomy );
		/* translators: 1: Taxonomy singular name, 2: Current taxonomy term */
		$title = sprintf( esc_html__( '%1$s: %2$s', 'senses-lite' ), $tax->labels->singular_name, single_term_title( '', false ) );
	} else {
		$title = esc_html__( 'Archives', 'senses-lite' );
	}

	/**
	 * Filter the archive title.
	 *
	 * @param string $title Archive title to be displayed.
	 */
	$title = apply_filters( 'get_the_archive_title', $title );

	if ( ! empty( $title ) ) {
		echo $before . $title . $after;  // WPCS: XSS OK.
	}
}
endif;

if ( ! function_exists( 'senses_lite_archive_description' ) ) :
/**
 * Shim for `the_archive_description()`.
 *
 * Display category, tag, or term description.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 *
 * @param string $before Optional. Content to prepend to the description. Default empty.
 * @param string $after  Optional. Content to append to the description. Default empty.
 */
function senses_lite_archive_description( $before = '', $after = '' ) {
	$description = apply_filters( 'get_the_archive_description', term_description() );

	if ( ! empty( $description ) ) {
		/**
		 * Filter the archive description.
		 *
		 * @see term_description()
		 *
		 * @param string $description Archive description to be displayed.
		 */
		echo $before . $description . $after;  // WPCS: XSS OK.
	}
}
endif;


/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function senses_lite_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'senses_lite_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'senses_lite_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so senses_lite_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so senses_lite_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in senses_lite_categorized_blog.
 */
function senses_lite_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'senses_lite_categories' );
}
add_action( 'edit_category', 'senses_lite_category_transient_flusher' );
add_action( 'save_post',     'senses_lite_category_transient_flusher' );
