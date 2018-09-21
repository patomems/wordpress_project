<?php
/**
 * Add inline styles to the head area
 * These styles represents options from the customizer
 * @package Senses Lite 
 */
 
 // Dynamic styles
function senses_lite_inline_styles($custom) {
	
// page background
	$background_color = get_theme_mod( 'background_color', '#303030' );
	$custom .= "body {background-color:" . esc_attr($background_color) . "}"."\n";


// banner background
	$header_bg = get_theme_mod( 'header_bg', '#ffffff' );
	$custom .= "#masthead {background-color:" . esc_attr($header_bg) . "}"."\n";

// site title space
	$site_title_space = get_theme_mod( 'site_title_space', '20' );
	$custom .= ".site-branding {margin-top:" . esc_attr($site_title_space) . "px; margin-bottom:" . esc_attr($site_title_space) . "px;}"."\n";


// show or hide the header image
if( esc_attr(get_theme_mod( 'show_header_image', 1 ) ) ) {
	// header overlay colour and opacity
		$background_opacity = get_theme_mod( 'background_opacity', '0.5' );
		$header_overlay = get_theme_mod( 'header_overlay', '#ffffff' );
		$custom .= "#masthead:before { background-color: " . esc_attr($header_overlay) . "; opacity: " . esc_attr($background_opacity) . "}"."\n";
	
	// header background position
		$bg_position = get_theme_mod( 'bg_position', 'center' );
		$custom .= "#masthead { background-position: " . esc_attr($bg_position) . ";}"."\n";
			
	// header background size
		$header_bg_size = get_theme_mod( 'header_bg_size', 'auto' );
		$custom .= "#masthead { background-size: " . esc_attr($header_bg_size) . ";}"."\n";		
		
}	
	
// Site Title
	$site_title = get_theme_mod( 'site_title', '#303030' );
	$custom .= ".site-title a, .site-title a:visited { color: " . esc_attr($site_title) . ";}"."\n";	
	
// Site description
	$site_desc = get_theme_mod( 'site_desc', '#969696' );
	$custom .= ".site-description { color: " . esc_attr($site_desc) . ";}"."\n";		
	

// mobile menu styling
	$mobile_toggle_bg = get_theme_mod( 'mobile_toggle_bg', '#919d74' );
	$mobile_toggle_label = get_theme_mod( 'mobile_toggle_label', '#f3f3f3' );
	$mobile_toggle_hover = get_theme_mod( 'mobile_toggle_hover', '#555c43' );
	$mobile_toggle_hlabel = get_theme_mod( 'mobile_toggle_hlabel', '#f3f3f3' );
	$mobile_menu_bg = get_theme_mod( 'mobile_menu_bg', '#303030' );
	$mobile_menu_lines = get_theme_mod( 'mobile_menu_lines', '#424242' );
	$mobile_menu_links = get_theme_mod( 'mobile_menu_links', '#fff' );
	$mobile_menu_hlinks = get_theme_mod( 'mobile_menu_hlinks', '#be9656' );
	$custom .= ".menu-toggle:active,.menu-toggle:focus,.menu-toggle:hover { background-color: " . esc_attr($mobile_toggle_hover) . "; color: " . esc_attr($mobile_toggle_hlabel) . ";}
	.menu-toggle { background-color: " . esc_attr($mobile_toggle_bg) . "; color: " . esc_attr($mobile_toggle_label) . ";}
	.toggled-on li { border-color: " . esc_attr($mobile_menu_lines) . ";}
	.main-navigation.toggled-on .nav-menu, .main-navigation.toggled-on a,.main-navigation.toggled-on li.home a { background-color: " . esc_attr($mobile_menu_bg) . "; color: " . esc_attr($mobile_menu_links) . ";}
	.main-navigation.toggled-on li.home a:hover, .main-navigation.toggled-on a:hover, .main-navigation.toggled-on .current-menu-item > a, .main-navigation.toggled-on .current-menu-item > a, .main-navigation.toggled-on .current-menu-ancestor > a { color: " . esc_attr($mobile_menu_hlinks) . ";}"."\n";		
			
// main menu background and borders
	$nav_bg = get_theme_mod( 'nav_bg', '#f8f8f8' );
	$nav_submenu_bg = get_theme_mod( 'nav_submenu_bg', '#f8f8f8' );
	$nav_top_border = get_theme_mod( 'nav_top_border', '#efefef' );
	$nav_bot_border = get_theme_mod( 'nav_bot_border', '#e5e5e5' );
	$custom .= "#site-navigation { border-top-color:" . esc_attr($nav_top_border) . " ; border-bottom-color:" . esc_attr($nav_bot_border) . " ; background-color:" . esc_attr($nav_bg) . "}
	.main-navigation ul ul { background-color: " . esc_attr($nav_submenu_bg) . ";}"."\n";
	
// Main menu link colour
	$nav_link_colour = get_theme_mod( 'nav_link_colour', '#222222' );
	$custom .= ".main-navigation li a, .main-navigation li.home a { color: " . esc_attr($nav_link_colour) . ";}"."\n";	

// Main menu link hover and active colour
	$nav_link_hcolour = get_theme_mod( 'nav_link_hcolour', '#be9656' );
	$custom .= ".main-navigation li.home a:hover, 
	.main-navigation a:hover, 
	.main-navigation .current-menu-item > a, 
	.main-navigation .current-menu-item > a,	
	.main-navigation .current-menu-ancestor > a { color: " . esc_attr($nav_link_hcolour) . ";}"."\n";	
	
// Main menu submenu colour
	$nav_submenu_colour = get_theme_mod( 'nav_submenu_colour', '#727679' );
	$custom .= ".main-navigation li li > a { color: " . esc_attr($nav_submenu_colour) . ";}"."\n";
	
// Main menu submenu border
	$nav_submenu_border = get_theme_mod( 'nav_submenu_border', '#919d74' );
	$custom .= ".main-navigation ul ul { border-color: " . esc_attr($nav_submenu_border) . ";}"."\n";	

// banner background
	$banner_bg = get_theme_mod( 'banner_bg', '#303030' );
	$custom .= "#banner-wrapper {background-color:" . esc_attr($banner_bg) . "}"."\n";

// content area background and text colour
	$content_bg = get_theme_mod( 'content_bg', '#f3f3f3' );
	$content_text = get_theme_mod( 'content_text', '#656565' );
	$custom .= "#page { color: " . esc_attr($content_text) . "; background-color:" . esc_attr($content_bg) . "}
	.post-navigation .meta-nav { color: " . esc_attr($content_text) . "}"."\n";

// content area links
	$content_links = get_theme_mod( 'content_links', '#af9870' );
	$custom .= "a, a:visited { color: " . esc_attr($content_links) . ";}"."\n";

// content area hover links
	$content_hlinks = get_theme_mod( 'content_hlinks', '#a76526' );
	$custom .= "a:hover, a:focus, a:active { color: " . esc_attr($content_hlinks) . ";}"."\n";

// content headings
	$content_headings = get_theme_mod( 'content_headings', '#353535' );
	$entry_title = get_theme_mod( 'entry_title', '#353535' );
	$entry_title_hover = get_theme_mod( 'entry_title_hover', '#9ca867' );
	$custom .= "h1, h2, h3, h4, h5, h6 { color: " . esc_attr($content_headings) . ";}
	.entry-title, .entry-title a { color: " . esc_attr($entry_title) . ";}
	.entry-title a:hover { color: " . esc_attr($entry_title_hover) . ";}"."\n";

// meta info
	$meta_colour = get_theme_mod( 'meta_colour', '#9e9e9e' );
	$custom .= ".entry-meta, .entry-meta a { color: " . esc_attr($meta_colour) . ";}"."\n";

// more link colour
	$more_link = get_theme_mod( 'more_link', '#be9656' );
	$custom .= ".more-link, .more-link:visited { color: " . esc_attr($more_link) . ";}"."\n";

// more link hover colour
	$more_hlink = get_theme_mod( 'more_hlink', '#656565' );
	$custom .= ".more-link:hover { color: " . esc_attr($more_hlink) . ";}"."\n";

// button
	$button_bg = get_theme_mod( 'button_bg', '#919d74' );
	$button_text = get_theme_mod( 'button_text', '#f3f3f3' );
	$custom .= "button, input[type=\"button\"], input[type=\"submit\"], input[type=\"reset\"], .btn { background-color: " . esc_attr($button_bg) . "; color: " . esc_attr($button_text) . ";}"."\n";
	
// button hover
	$button_hbg = get_theme_mod( 'button_hbg', '#303030' );
	$button_htext = get_theme_mod( 'button_htext', '#f3f3f3' );
	$custom .= "button:hover, input[type=\"button\"]:hover, input[type=\"submit\"]:hover, input[type=\"reset\"]:hover, .btn:hover { background-color: " . esc_attr($button_hbg) . "; color: " . esc_attr($button_htext) . ";}"."\n";

// bottom area background
	$bottom_sidebar_bg = get_theme_mod( 'bottom_sidebar_bg', '#919d74' );
	$bottom_sidebar_text = get_theme_mod( 'bottom_sidebar_text', '#F1F5E7' );
	$bottom_border = get_theme_mod( 'bottom_border', '#555c43' );
	$custom .= "#bottom-wrapper {  background-color:" . esc_attr($bottom_sidebar_bg) . "; border-color: " . esc_attr($bottom_border) . "; color: " . esc_attr($bottom_sidebar_text) . ";}
	#bottom-wrapper .widget-title {color: " . esc_attr($bottom_sidebar_text) . "}
	#bottom-wrapper li a, #bottom-wrapper li a:visited {color: " . esc_attr($bottom_sidebar_text) . "}"."\n";

// bottom area links
	$bottom_sidebar_links = get_theme_mod( 'bottom_sidebar_links', '#d5dead' );
	$custom .= "#bottom-wrapper .textwidget a, #bottom-wrapper .textwidget a:visited, #bottom-wrapper li a:hover { color:" . esc_attr($bottom_sidebar_links) . "}"."\n";
	
// bottom area links on hover
	$bottom_sidebar_hlinks = get_theme_mod( 'bottom_sidebar_hlinks', '#ffffff' );
	$custom .= "#bottom-wrapper a:hover { color:" . esc_attr($bottom_sidebar_hlinks) . "}"."\n";
	

// bottom list border colour
	$bottom_list_border = get_theme_mod( 'bottom_list_border', '#b9bbb2' );
	$custom .= "#sidebar-bottom .widget_archive li, #sidebar-bottom .widget_categories li, #sidebar-bottom .widget_links li, #sidebar-bottom .widget_meta li, 
	#sidebar-bottom .widget_nav_menu li, #sidebar-bottom .widget_pages li, #sidebar-bottom .widget_recent_comments li, #sidebar-bottom .widget_recent_entries li, #sidebar-bottom .widget_categories .children, 
	#sidebar-bottom .widget_nav_menu .sub-menu, #sidebar-bottom .widget_pages .children { border-color:" . esc_attr($bottom_list_border) . "}"."\n";

// Left and right column list links
	$left_right_list_links = get_theme_mod( 'left_right_list_links', '#909090' );
	$custom .= "#sidebar-left li a, #sidebar-right li a, #sidebar-left li a:visited, #sidebar-right li a:visited { color:" . esc_attr($left_right_list_links) . "}"."\n";

// Left and right column list hover links
	$left_right_list_hlinks = get_theme_mod( 'left_right_list_hlinks', '#a76526' );
	$custom .= "#sidebar-left li a:hover, #sidebar-right li a:hover { color:" . esc_attr($left_right_list_hlinks) . "}"."\n";
	
// Left and right column list border colour
	$leftright_list_border = get_theme_mod( 'leftright_list_border', '#e6e6e6' );
	$custom .= ".widget_archive li, .widget_categories li, .widget_links li, .widget_meta li, .widget_nav_menu li, .widget_pages li, 
	.widget_recent_comments li, .widget_recent_entries li, .widget_categories .children, .widget_nav_menu .sub-menu, .widget_pages .children { border-color:" . esc_attr($leftright_list_border) . "}"."\n";

// show or hide the navigation shadow
if( esc_attr(get_theme_mod( 'show_nav_shadow', 1 ) ) ) {
	$custom .= "#site-navigation { -webkit-box-shadow: 0 5px 10px 0 rgba(0,0,0,0.25); box-shadow: 0 5px 10px 0 rgba(0,0,0,0.25); }"."\n";	
}
// show or hide the boxed style shadow
if( esc_attr(get_theme_mod( 'show_boxed_shadow', 0 ) ) ) {
	$custom .= "#page {	-webkit-box-shadow: 0px 0px 20px 5px rgba(0,0,0,0.75);  -moz-box-shadow: 0px 0px 20px 5px rgba(0,0,0,0.75); box-shadow: 0px 0px 20px 5px rgba(0,0,0,0.75); }"."\n";
}

// footer area background
	$footer_bg = get_theme_mod( 'footer_bg', '#303030' );
	$footer_text = get_theme_mod( 'footer_text', '#dadada' );
	$footer_link = get_theme_mod( 'footer_link', '#c3b499' );
	$footer_link_hover = get_theme_mod( 'footer_link_hover', '#dadada' );
	$custom .= ".site-footer { color: " . esc_attr($footer_text) . "; background-color:" . esc_attr($footer_bg) . "}
	#sidebar-footer .widget-title { color: " . esc_attr($footer_text) . "}
	#sidebar-footer a, #sidebar-footer a:visited { color: " . esc_attr($footer_link) . "}
	#sidebar-footer a:hover { color: " . esc_attr($footer_link_hover) . "}"."\n";

// social  colour
	$social_bg = get_theme_mod( 'social_bg', '#555c43' );
	$social_icon = get_theme_mod( 'social_icon', '#ffffff' );
	$custom .= ".social-icons a { color: " . esc_attr($social_icon) . "; background-color:" . esc_attr($social_bg) . "}"."\n";
		
// social  hover colour
	$social_hbg = get_theme_mod( 'social_hbg', '#919d74' );
	$social_hicon = get_theme_mod( 'social_hicon', '#ffffff' );
	$custom .= ".social-icons a:hover { color: " . esc_attr($social_hicon) . "; background-color:" . esc_attr($social_hbg) . "}"."\n";	

// pagination  colour
	$pagination_bg = get_theme_mod( 'pagination_bg', '#555c43' );
	$pagination_text = get_theme_mod( 'pagination_text', '#919d74' );
	$custom .= ".pagination .page-numbers { color: " . esc_attr($pagination_text) . "; background-color:" . esc_attr($pagination_bg) . "}"."\n";

// pagination  hover and active colour
	$pagination_hbg = get_theme_mod( 'pagination_hbg', '#aeb399' );
	$pagination_htext = get_theme_mod( 'pagination_htext', '#ffffff' );
	$custom .= ".pagination .page-numbers:hover, .pagination .page-numbers.current { color: " . esc_attr($pagination_htext) . "; background-color:" . esc_attr($pagination_hbg) . "}"."\n";

//  Back to top button bg
	$backtop_bg = get_theme_mod( 'backtop_bg', '#000000' );
	$backtop_text = get_theme_mod( 'backtop_text', '#ffffff' );
	$custom .= ".back-to-top {color:" . esc_attr($backtop_text) ."; background-color:" . esc_attr($backtop_bg) ."}"."\n";
	
//  Back to top button hover bg
	$backtop_hbg = get_theme_mod( 'backtop_hbg', '#565656' );
	$backtop_text = get_theme_mod( 'backtop_text', '#ffffff' );
	$custom .= ".back-to-top:hover { color:" . esc_attr($backtop_text) ."; background-color:" . esc_attr($backtop_hbg) ."}"."\n";

// sticky label bg colour
	$sticky_bg = get_theme_mod( 'sticky_bg', '#919d74' );
	$sticky_label = get_theme_mod( 'sticky_label', '#ffffff' );
	$custom .= ".featured { color: " . esc_attr($sticky_label) . "; background-color:" . esc_attr($sticky_bg) . "}"."\n";


//  error page
	$error_bg = get_theme_mod( 'error_bg', '#919d74' );
	$error_text_colour = get_theme_mod( 'error_text_colour', '#ffffff' );
	$custom .= ".error-box {color:" . esc_attr($error_text_colour) ."; background-color:" . esc_attr($error_bg) ."}"."\n";	

//  error button
	$error_button_bg = get_theme_mod( 'error_button_bg', '#919d74' );
	$error_button_text_colour = get_theme_mod( 'error_button_text_colour', '#ffffff' );
	$error_button_border = get_theme_mod( 'error_button_border', '#afb39c' );
	$custom .= ".error-button.btn {color:" . esc_attr($error_button_text_colour) ."; border-color: ". esc_attr($error_button_border) ."; background-color:" . esc_attr($error_button_bg) ."}"."\n";	

// quote post format background
	$quotepf_bg = get_theme_mod( 'quotepf_bg', '#919d74' );
	$quotepf_text = get_theme_mod( 'quotepf_text', '#ffffff' );
	$custom .= ".format-quote .entry-title, .format-quote p, .format-quote a { color: " . esc_attr($quotepf_text) . ";}
	.format-quote {background-color:" . esc_attr($quotepf_bg) . "}"."\n";

// image post format title colour
	$imagepf_title = get_theme_mod( 'imagepf_title', '#c9d6a3' );
	$custom .= ".format-image .entry-title a, .grid .format-image .entry-title a { color: " . esc_attr($imagepf_title) . ";}"."\n";

// copyright text colour
	$copyright_text = get_theme_mod( 'copyright_text', '#b5b5b5' );
	$custom .= ".site-info { color: " . esc_attr($copyright_text) . ";}"."\n";

// caption text colour
	$caption_text = get_theme_mod( 'caption_text', '#fff' );
	$custom .= ".wp-caption-text { color: " . esc_attr($caption_text) . ";}"."\n";


	
	//Output all the styles
	wp_add_inline_style( 'senses-style', $custom );	
}
add_action( 'wp_enqueue_scripts', 'senses_lite_inline_styles' );	