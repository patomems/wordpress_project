<?php
/**
 * Right sidebar column. 
 *
 * @package Senses Lite 
 */


if (   ! is_active_sidebar( 'blogright'  )
	&& ! is_active_sidebar( 'pageright' ) 
	)
	return;

if ( is_page() ) {   
	
	echo '<div id="right-wrapper"><aside id="sidebar-right" class="widget-area" itemscope="" itemtype="http://schema.org/WPSideBar">';
	dynamic_sidebar( 'pageright' );	
	echo '</aside></div>';	

} else {

	echo '<div class="col-md-4"><div id="right-wrapper"><aside id="sidebar-right" class="widget-area" itemscope="" itemtype="http://schema.org/WPSideBar">';  
	dynamic_sidebar( 'blogright' );
	echo '</aside></div></div>';
		
}
?>