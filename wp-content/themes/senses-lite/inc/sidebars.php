<?php 

/**
 * Register theme sidebars
 * @package Senses Lite 
 */

 
function senses_lite_widgets_init() {

	register_sidebar( array(
		'name' => esc_html__( 'Blog Right Sidebar', 'senses-lite' ),
		'id' => 'blogright',
		'description' => esc_html__( 'Right sidebar for the blog', 'senses-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Blog Left Sidebar', 'senses-lite' ),
		'id' => 'blogleft',
		'description' => esc_html__( 'Left sidebar for the blog', 'senses-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Page Right Sidebar', 'senses-lite' ),
		'id' => 'pageright',
		'description' => esc_html__( 'Right sidebar for pages', 'senses-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Page Left Sidebar', 'senses-lite' ),
		'id' => 'pageleft',
		'description' => esc_html__( 'Left sidebar for pages', 'senses-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	

	register_sidebar( array(
		'name' => esc_html__( 'Banner', 'senses-lite' ),
		'id' => 'banner',
		'description' => esc_html__( 'For Images and Sliders.', 'senses-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Content Top 1', 'senses-lite' ),
		'id' => 'ctop1',
		'description' => esc_html__( 'Content Top 1 position', 'senses-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Content Top 2', 'senses-lite' ),
		'id' => 'ctop2',
		'description' => esc_html__( 'Content Top 2 position', 'senses-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Content Top 3', 'senses-lite' ),
		'id' => 'ctop3',
		'description' => esc_html__( 'Content Top 3 position', 'senses-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Content Top 4', 'senses-lite' ),
		'id' => 'ctop4',
		'description' => esc_html__( 'Content Top 4 position', 'senses-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );		
			
	register_sidebar( array(
		'name' => esc_html__( 'Content Bottom 1', 'senses-lite' ),
		'id' => 'cbottom1',
		'description' => esc_html__( 'Content Bottom 1 position', 'senses-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Content Bottom 2', 'senses-lite' ),
		'id' => 'cbottom2',
		'description' => esc_html__( 'Content Bottom 2 position', 'senses-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Content Bottom 3', 'senses-lite' ),
		'id' => 'cbottom3',
		'description' => esc_html__( 'Content Bottom 3 position', 'senses-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Content Bottom 4', 'senses-lite' ),
		'id' => 'cbottom4',
		'description' => esc_html__( 'Content Bottom 4 position', 'senses-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Bottom 1', 'senses-lite' ),
		'id' => 'bottom1',
		'description' => esc_html__( 'Bottom 1 position', 'senses-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Bottom 2', 'senses-lite' ),
		'id' => 'bottom2',
		'description' => esc_html__( 'Bottom 2 position', 'senses-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Bottom 3', 'senses-lite' ),
		'id' => 'bottom3',
		'description' => esc_html__( 'Bottom 3 position', 'senses-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Bottom 4', 'senses-lite' ),
		'id' => 'bottom4',
		'description' => esc_html__( 'Bottom 4 position', 'senses-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );		

	register_sidebar( array(
		'name' => esc_html__( 'Breadcrumbs', 'senses-lite' ),
		'id' => 'breadcrumbs',
		'description' => esc_html__( 'This is breadcrumbs position but can be used for other things', 'senses-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Footer', 'senses-lite' ),
		'id' => 'footer',
		'description' => esc_html__( 'This is a sidebar position that sits above the footer menu and copyright', 'senses-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );

}
add_action( 'widgets_init', 'senses_lite_widgets_init' );

/**
 * Count the number of widgets to enable resizable widgets
 * in the featured top group.
 */

function senses_lite_ftop() {
	$count = 0;
	if ( is_active_sidebar( 'ftop1' ) )
		$count++;
	if ( is_active_sidebar( 'ftop2' ) )
		$count++;
	if ( is_active_sidebar( 'ftop3' ) )
		$count++;		
	if ( is_active_sidebar( 'ftop4' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-sm-6 col-md-6';
			break;
		case '3':
			$class = 'col-sm-6 col-md-4';
			break;
		case '4':
			$class = 'col-sm-6 col-md-3';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}

/**
 * Count the number of widgets to enable resizable widgets
 * in the content top group.
 */

function senses_lite_ctop() {
	$count = 0;
	if ( is_active_sidebar( 'ctop1' ) )
		$count++;
	if ( is_active_sidebar( 'ctop2' ) )
		$count++;
	if ( is_active_sidebar( 'ctop3' ) )
		$count++;		
	if ( is_active_sidebar( 'ctop4' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-sm-6 col-md-6';
			break;
		case '3':
			$class = 'col-sm-6 col-md-4';
			break;
		case '4':
			$class = 'col-sm-6 col-md-3';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}

/**
 * Count the number of widgets to enable resizable widgets
 * in the content bottom group.
 */

function senses_lite_cbottom() {
	$count = 0;
	if ( is_active_sidebar( 'cbottom1' ) )
		$count++;
	if ( is_active_sidebar( 'cbottom2' ) )
		$count++;
	if ( is_active_sidebar( 'cbottom3' ) )
		$count++;		
	if ( is_active_sidebar( 'cbottom4' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-sm-6 col-md-6';
			break;
		case '3':
			$class = 'col-sm-6 col-md-4';
			break;
		case '4':
			$class = 'col-sm-6 col-md-3';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}
/**
 * Count the number of widgets to enable resizable widgets
 * in the featured bottom group.
 */

function senses_lite_fbottom() {
	$count = 0;
	if ( is_active_sidebar( 'fbottom1' ) )
		$count++;
	if ( is_active_sidebar( 'fbottom2' ) )
		$count++;
	if ( is_active_sidebar( 'fbottom3' ) )
		$count++;		
	if ( is_active_sidebar( 'fbottom4' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-sm-6 col-md-6';
			break;
		case '3':
			$class = 'col-sm-6 col-md-4';
			break;
		case '4':
			$class = 'col-sm-6 col-md-3';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}
/**
 * Count the number of widgets to enable resizable widgets
 * in the bottom group.
 */

function senses_lite_bottom() {
	$count = 0;
	if ( is_active_sidebar( 'bottom1' ) )
		$count++;
	if ( is_active_sidebar( 'bottom2' ) )
		$count++;
	if ( is_active_sidebar( 'bottom3' ) )
		$count++;		
	if ( is_active_sidebar( 'bottom4' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-sm-6 col-lg-6';
			break;
		case '3':
			$class = 'col-sm-6 col-lg-4';
			break;
		case '4':
			$class = 'col-sm-6 col-lg-3';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}
