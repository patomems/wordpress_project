<?php
/**
 * Left sidebar column for the blog and pages. 
 *
 * @package Senses Lite 
 */


if (   ! is_active_sidebar( 'pageleft'  )
	&& ! is_active_sidebar( 'blogleft' ) 
	)
	return;

if ( is_page() ) {
	
	echo '<div id="left-wrapper"><aside id="sidebar-left" class="widget-area" itemscope="" itemtype="http://schema.org/WPSideBar">';    
	dynamic_sidebar( 'pageleft' );
	echo '</aside></div>';
	
} else {
	
	echo '<div class="col-md-4 col-md-pull-8"><div id="left-wrapper"><aside id="sidebar-left" class="widget-area" itemscope="" itemtype="http://schema.org/WPSideBar">';   
	dynamic_sidebar( 'blogleft' );
	echo '</aside></div></div>';
	
}
?>