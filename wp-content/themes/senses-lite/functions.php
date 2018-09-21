<?php
/**
 * senses functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Senses Lite
 */

if ( ! function_exists( 'senses_lite_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function senses_lite_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on senses, use a find and replace
	 * to change 'senses-lite' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'senses-lite', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Add shortcode support to the text widget.
	add_filter('widget_text', 'do_shortcode');

	/**
	 * Add callback for custom TinyMCE editor stylesheets. (editor-style.css)
	 * @see http://codex.wordpress.org/Function_Reference/add_editor_style
	 */
	add_editor_style( );
	
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'height'     => 100,
		'width'      => 500,
		'flex-height' => true,
		'flex-width' => true,
	) );
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */ 
    add_theme_support( 'post-thumbnails' );
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'senses-lite' ),
		'footer' => esc_html__( 'Footer Menu', 'senses-lite' ),
		'bottom-social' => esc_html__( 'Bottom Social Menu', 'senses-lite' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'quote',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'senses_lite_custom_background_args', array(
		'default-color' => '303030',
		'default-image' => '',
	) ) );
}
endif; // senses_lite_setup
add_action( 'after_setup_theme', 'senses_lite_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function senses_lite_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'senses_lite_content_width', 1140 );
}
add_action( 'after_setup_theme', 'senses_lite_content_width', 0 );


/**
 * Register Google fonts.
 * @return string Google fonts URL for the theme.
 */

if ( ! function_exists( 'senses_lite_fonts_url' ) ) :
function senses_lite_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';
	
	/*
	 * Translators: If there are characters in your language that are not supported by Old Standard TT, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== esc_html_x( 'on', 'Old Standard TT font: on or off', 'senses-lite' ) ) {
		$fonts[] = 'Old Standard TT:400,700';
	}	

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Enqueue scripts and styles.
 */
function senses_lite_scripts() {
	
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'senses-lite--fonts', senses_lite_fonts_url(), array(), null );
	
	// Add Font Awesome Icons. Unminified version included.
	if( esc_attr(get_theme_mod( 'load_fontawesome', 1 ) ) ) : 
	wp_enqueue_style('fontAwesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.4.0' );
	endif;
	
	// Load our responsive stylesheet based on Bootstrap. Unminified version included. 
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array( ), '3.3.5' );

	// Load our main stylesheet.
	wp_enqueue_style( 'senses-style', get_stylesheet_uri() );

	// Load our scripts.
	wp_enqueue_script( 'senses-navigation', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20120206', true );
	wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'senses_lite_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load our sidebars.
 */
require get_template_directory() . '/inc/sidebars.php';

/**
 * Load our inline styles.
 */
require get_template_directory() . '/inc/inline-styles.php';
