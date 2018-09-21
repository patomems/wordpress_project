<?php
/**
 * senses Theme Customizer.
 *
 * @package Senses Lite
 */



function senses_lite_customizer_registers() {
	
	wp_enqueue_script( 'senses_lite_customizer_script', get_template_directory_uri() . '/js/senses_lite_customizer.js', array("jquery"), '1.0', true  );
	wp_localize_script( 'senses_lite_customizer_script', 'sensesliteCustomizerObject', array(
		'setup' => __( 'Setup Tutorials', 'senses-lite' ),
		'support' => __( 'Theme Support', 'senses-lite' ),
		'review' => __( 'Please Rate Senses Lite', 'senses-lite' ),		
		'pro' => __( 'Get the Pro Version', 'senses-lite' ),
	) );
}
add_action( 'customize_controls_enqueue_scripts', 'senses_lite_customizer_registers' );

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function senses_lite_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	// lets remove the default background color setting so we can reposition it
	$wp_customize->remove_control('background_color');
	
// Begin theme options

	// Setting group to show the site title  
  	$wp_customize->add_setting( 'show_site_title',  array(
		'default' => 1,
		'sanitize_callback' => 'senses_lite_sanitize_checkbox'
   	 ) );  
 	 $wp_customize->add_control( 'show_site_title', array(
		'type'     => 'checkbox',
		'label'    => esc_html__( 'Show Site Title', 'senses-lite' ),
		'section'  => 'title_tagline',
 	 ) );

	// Setting group to show the tagline  
	 $wp_customize->add_setting( 'show_tagline', array(
		'default' => 1,
		'sanitize_callback' => 'senses_lite_sanitize_checkbox'
	  ) );  
	$wp_customize->add_control( 'show_tagline', array(
		'type'     => 'checkbox',
		'label'    => esc_html__( 'Show Tagline', 'senses-lite' ),
		'section'  => 'title_tagline',
	) );
	
	// Setting group for site title spacing
	$wp_customize->add_setting( 'site_title_space', array(
		'default'        => '20',
		'sanitize_callback' => 'senses_lite_sanitize_integer',
	) );
	$wp_customize->add_control( 'site_title_space', array(
		'settings' => 'site_title_space',
		'label'    => esc_html__( 'Site Title &amp; Logo Spacing', 'senses-lite' ),
		'section'  => 'title_tagline',		
		'type'     => 'text',
	) ); 
	 

/*
 * Lets add a few more options to the WP Header Image
 * section in the customizer
 */
 		
 // Setting group to show the WP Custom Header  
  $wp_customize->add_setting( 'show_header_image',  array(
      'default' => 1,
      'sanitize_callback' => 'senses_lite_sanitize_checkbox',
    ) );  
  $wp_customize->add_control( 'show_header_image', array(
    'type'     => 'checkbox',
    'label'    => esc_html__( 'Show the WP Header Image', 'senses-lite' ),
    'section'  => 'header_image',
  ) );	
  
// Setting group for the WP header bg size
	$wp_customize->add_setting( 'header_bg_size', array(
		'default' => 'auto',
		'sanitize_callback' => 'senses_lite_sanitize_bg_size',
	) );  
	$wp_customize->add_control( 'header_bg_size', array(
		  'type' => 'radio',
		  'label' => esc_html__( 'Header Background size', 'senses-lite' ),
		  'section' => 'header_image',
		  'choices' => array(
			  'auto' => esc_html__( 'Auto', 'senses-lite' ),
			  'cover' => esc_html__( 'Cover', 'senses-lite' ),
			  'contain' => esc_html__( 'Contain', 'senses-lite' ),
	) ) );	
// Setting group for the boxed style
	$wp_customize->add_setting( 'bg_position', array(
		'default' => 'fullwidth',
		'sanitize_callback' => 'senses_lite_sanitize_bg_position',
	) );  
	$wp_customize->add_control( 'bg_position', array(
		  'type' => 'radio',
		  'label' => esc_html__( 'Header Background Position', 'senses-lite' ),
		  'section' => 'header_image',
		  'choices' => array(
			  'top' => esc_html__( 'Top', 'senses-lite' ),
			  'bottom' => esc_html__( 'Bottom', 'senses-lite' ),
			  'center' => esc_html__( 'Center', 'senses-lite' ),
	) ) );	

// Setting group header overlay.
	$wp_customize->add_setting( 'header_overlay', array(
		'default'        => '#ffffff',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_overlay', array(
		'label'   => __( 'Header Background Overlay Colour', 'senses-lite' ),
		'section' => 'header_image',
		'settings'   => 'header_overlay',
	) ) ); 	

// Setting group for a background overlay opacity 	
  $wp_customize->add_setting( 'background_opacity',
    array(
      'default' => 0.75,
      'sanitize_callback' => 'senses_lite_sanitize_rangeslider'
    ) );
  
  $wp_customize->add_control( 'background_opacity', array(
    'type'        => 'range',
    'section'     => 'header_image',
    'label'       => __( 'Header Overlay Opacity', 'senses-lite' ),
    'input_attrs' => array(
        'min'   => 0,
        'max'   => 1,
        'step'  => 0.05,
    ) ) );  		

    

/*
 * Create a section
 * Name: Site Options
 */    
$wp_customize->add_section( 'site_options', array(
	'title' => esc_html__( 'Site Options', 'senses-lite' ),
	'priority'       => 30,
) ); 



// Setting group for the boxed style
	$wp_customize->add_setting( 'boxed_style', array(
		'default' => 'fullwidth',
		'sanitize_callback' => 'senses_lite_sanitize_boxed_style',
	) );  
	$wp_customize->add_control( 'boxed_style', array(
		  'type' => 'radio',
		  'label' => esc_html__( 'Boxed Style', 'senses-lite' ),
		  'section' => 'site_options',
		  'choices' => array(
			  'fullwidth' => esc_html__( 'Full Width', 'senses-lite' ),
			  'boxed1920' => esc_html__( 'Boxed 1920px Width', 'senses-lite' ),
			  'boxed1600' => esc_html__( 'Boxed 1600px Width', 'senses-lite' ),
			  'boxed1400' => esc_html__( 'Boxed 1400px Width', 'senses-lite' ),
			  'boxed1200' => esc_html__( 'Boxed 1200px Width', 'senses-lite' ),
	) ) );

 // Setting group to show the WP Custom Header  
  $wp_customize->add_setting( 'show_demo_banner',  array(
      'default' => 1,
      'sanitize_callback' => 'senses_lite_sanitize_checkbox',
    ) );  
  $wp_customize->add_control( 'show_demo_banner', array(
    'type'     => 'checkbox',
    'label'    => esc_html__( 'Show the Demo Banner Image', 'senses-lite' ),
	'description' => esc_html__( 'Show or hide the demo banner image. This can also be disabled once you publish a widget in the Banner sidebar.', 'senses-lite' ),
    'section'  => 'site_options',
  ) );	
  
// Setting group to show or hide the boxed outer shadow
$wp_customize->add_setting( 'show_boxed_shadow',	array(
	'default' => 0,
	'sanitize_callback' => 'senses_lite_sanitize_checkbox',
) );  
$wp_customize->add_control( 'show_boxed_shadow', array(
	'type'     => 'checkbox',
	'label'    => esc_html__( 'Show Boxed Shadow', 'senses-lite' ),
	'description' => esc_html__( 'Show the outer shadow (glow) when you use the boxed style layout for your pages.', 'senses-lite' ),
	'section'  => 'site_options',
) );

// Setting group to show or hide the nav bottom shadow
$wp_customize->add_setting( 'show_nav_shadow',	array(
	'default' => 1,
	'sanitize_callback' => 'senses_lite_sanitize_checkbox',
) );  
$wp_customize->add_control( 'show_nav_shadow', array(
	'type'     => 'checkbox',
	'label'    => esc_html__( 'Show Navigation Shadow', 'senses-lite' ),
	'description' => esc_html__( 'Show the navigation bottom shadow.', 'senses-lite' ),
	'section'  => 'site_options',
) );


// Setting group to enable font awesome 
$wp_customize->add_setting( 'load_fontawesome',	array(
	'default' => 1,
	'sanitize_callback' => 'senses_lite_sanitize_checkbox',
) );  
$wp_customize->add_control( 'load_fontawesome', array(
	'type'     => 'checkbox',
	'label'    => esc_html__( 'Load Font Awesome', 'senses-lite' ),
	'description' => esc_html__( 'Load Font Awesome if not you are not using a plugin for it.', 'senses-lite' ),
	'section'  => 'site_options',
) );


 // Setting group to show the edit links 
  $wp_customize->add_setting( 'show_edit',  array(
      'default' => 0,
      'sanitize_callback' => 'senses_lite_sanitize_checkbox',
    ) );  
  $wp_customize->add_control( 'show_edit', array(
    'type'     => 'checkbox',
    'label'    => esc_html__( 'Show Edit Link', 'senses-lite' ),
	'description' => esc_html__( 'Show the Edit Link on posts and pages.', 'senses-lite' ),
    'section'  => 'site_options',
  ) );


// Setting group for a Copyright
$wp_customize->add_setting( 'copyright', array(
	'default'        => 'Your Name',
	'sanitize_callback' => 'senses_lite_sanitize_text',
) );
$wp_customize->add_control( 'copyright', array(
	'settings' => 'copyright',
	'label'    => esc_html__( 'Your Copyright Name', 'senses-lite' ),
	'section'  => 'site_options',		
	'type'     => 'text',
) );

// Show hide footer upsell link
  $wp_customize->add_setting( 'footer_author_link', array(
      'sanitize_callback' => 'senses_lite_sanitize_checkbox',
    ) );  
	$wp_customize->add_control( 'footer_author_link', array(
		  'type' => 'checkbox',
		  'label' => esc_html__( 'Hide Author Link In Footer', 'senses-lite' ),
		  'section' => 'site_options',
		  'priority' => 10,
		   ) );
/*
 * Create a section
 * Name: Blog Options
 */  
$wp_customize->add_section( 'blog_options',	array(
	'title' => esc_html__( 'Blog Options', 'senses-lite' ),
	'priority' => 32,
)  ); 

// Setting group for blog layout  
$wp_customize->add_setting( 'blog_style', array(
	'default' => 'top-featured-right',
	'sanitize_callback' => 'senses_lite_sanitize_blog_style',
) );  
$wp_customize->add_control( 'blog_style', array(
	  'type' => 'radio',
	  'label' => esc_html__( 'Blog Style', 'senses-lite' ),
	  'section' => 'blog_options',
	  'choices' => array(	 
			'top-featured-center' => esc_html__( 'Top Featured Image Centered', 'senses-lite' ),
			'top-featured-left' => esc_html__( 'Top Featured Image Left Sidebar', 'senses-lite' ),
			'top-featured-right' => esc_html__( 'Top Featured Image Right Sidebar', 'senses-lite' ),	
) ) );

// Setting group for Single layout  
	$wp_customize->add_setting( 'single_layout', array(
		'default' => 'right-column',
		'sanitize_callback' => 'senses_lite_sanitize_single_layout',
	) );  
	$wp_customize->add_control( 'single_layout', array(
		  'type' => 'radio',
		  'label' => esc_html__( 'Single Style', 'senses-lite' ),
		  'section' => 'blog_options',
		  'choices' => array(		
			  'right-column' => esc_html__( 'Right Column Layout', 'senses-lite' ),
			  'left-column' => esc_html__( 'Left Column Layout', 'senses-lite' ),
			  'full-width' => esc_html__( 'Full Width', 'senses-lite' ),
	) ) );


// Setting for content or excerpt
	$wp_customize->add_setting( 'excerpt_content', array(
		'default' => 'content',
		'sanitize_callback' => 'senses_lite_sanitize_excerpt',
	) );
// Control for Content or excerpt
	$wp_customize->add_control( 'excerpt_content', array(
    'label'   => esc_html__( 'Content or Excerpt', 'senses-lite' ),
    'section' => 'blog_options',
    'type'    => 'radio',
        'choices' => array(
            'content' => esc_html__( 'Content', 'senses-lite' ),
            'excerpt' => esc_html__( 'Excerpt', 'senses-lite' ),	
        ),
	
    ));


    
// Setting group to show the date  
  $wp_customize->add_setting( 'show_entry_post_date',  array(
      'default' => 1,
      'sanitize_callback' => 'senses_lite_sanitize_checkbox',
    )
  );  
  $wp_customize->add_control( 'show_entry_post_date', array(
    'type'     => 'checkbox',
    'label'    => esc_html__( 'Show Summary Post Date', 'senses-lite' ),
	'description' => esc_html__( 'Show the Post Date on blog summary posts.', 'senses-lite' ),
    'section'  => 'blog_options',
  ) );
  
  
// Setting group to show published by  
  $wp_customize->add_setting( 'show_entry_post_author',   array(
      'default' => 0,
      'sanitize_callback' => 'senses_lite_sanitize_checkbox',
    )
  ); 
  $wp_customize->add_control( 'show_entry_post_author', array(
    'type'     => 'checkbox',
    'label'    => esc_html__( 'Show Summary Post Author', 'senses-lite' ),
	'description' => esc_html__( 'Show the author name on blog summary posts.', 'senses-lite' ),
    'section'  => 'blog_options',
  ) );

// Setting group to show comments link  
  $wp_customize->add_setting( 'show_comments_link',   array(
      'default' => 0,
      'sanitize_callback' => 'senses_lite_sanitize_checkbox',
    )
  ); 
  $wp_customize->add_control( 'show_comments_link', array(
    'type'     => 'checkbox',
    'label'    => esc_html__( 'Show Summary Comments Link', 'senses-lite' ),
	'description' => esc_html__( 'Show the comments link on blog summary posts.', 'senses-lite' ),
    'section'  => 'blog_options',
  ) );
    
      
// Setting group to show share buttons  
  $wp_customize->add_setting( 'show_single_thumbnail',   array(
      'default' => 1,
      'sanitize_callback' => 'senses_lite_sanitize_checkbox',
    )
  );  
  $wp_customize->add_control( 'show_single_thumbnail', array(
    'type'     => 'checkbox',
    'label'    => esc_html__( 'Show Full Post Featured Image', 'senses-lite' ),
	'description' => esc_html__( 'Show the Featured Image on the full post view.', 'senses-lite' ),
    'section'  => 'blog_options',
  ) );	   
  
	   
// Setting group to show the categories  
  $wp_customize->add_setting( 'show_single_categories',  array(
      'default' => 1,
      'sanitize_callback' => 'senses_lite_sanitize_checkbox',
    )
  );  
  $wp_customize->add_control( 'show_single_categories', array(
    'type'     => 'checkbox',
    'label'    => esc_html__( 'Show Full Post Categories List', 'senses-lite' ),
	'description' => esc_html__( 'Show the list of categories at the bottom of each full post.', 'senses-lite' ),
    'section'  => 'blog_options',
  ) );  

// Setting group to show tags  
  $wp_customize->add_setting( 'show_tags_list',  array(
      'default' => 1,
      'sanitize_callback' => 'senses_lite_sanitize_checkbox',
    )
  );  
  $wp_customize->add_control( 'show_tags_list', array(
    'type'     => 'checkbox',
    'label'    => esc_html__( 'Show Full Post Tags List', 'senses-lite' ),
	'description' => esc_html__( 'Show the list of tags at the bottom of each full post.', 'senses-lite' ),
    'section'  => 'blog_options',
  ) );
  
 // Setting group for the single post next prev nav
  $wp_customize->add_setting( 'show_next_prev',  array(
      'default' => 1,
      'sanitize_callback' => 'senses_lite_sanitize_checkbox'
    )
  );  
  $wp_customize->add_control( 'show_next_prev', array(
    'type'        => 'checkbox',
    'label'       => esc_html__( 'Show Full Post Navigation', 'senses-lite' ),
	'description' => esc_html__( 'Show the Next and Previous post navigation at the bottom of each full post.', 'senses-lite' ),
    'section'     => 'blog_options',
   ) ); 
  
 // Setting group for the author bio on full post
  $wp_customize->add_setting( 'show_author_bio',  array(
      'default' => 1,
      'sanitize_callback' => 'senses_lite_sanitize_checkbox'
    )
  );  
  $wp_customize->add_control( 'show_author_bio', array(
    'type'        => 'checkbox',
    'label'       => esc_html__( 'Show Full Post Author Bio', 'senses-lite' ),
	'description' => esc_html__( 'Show the Author Bio at the bottom of each full post.', 'senses-lite' ),
    'section'     => 'blog_options',
   ) );


/*
 * Add to the Colours tab
 */
 
// Header background
 	$wp_customize->add_setting( 'header_bg', array(
		'default'        => '#ffffff',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_bg', array(
		'label'   => esc_html__( 'Header Background', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'header_bg',
	) ) );

// Page background
 	$wp_customize->add_setting( 'background_color', array(
		'default'        => '#303030',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
		'label'   => esc_html__( 'Page Background', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'background_color',
	) ) );
	
// Site Title
 	$wp_customize->add_setting( 'site_title', array(
		'default'        => '#303030',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_title', array(
		'label'   => esc_html__( 'Site Title', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'site_title',
	) ) );
// Site description
 	$wp_customize->add_setting( 'site_desc', array(
		'default'        => '#969696',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_desc', array(
		'label'   => esc_html__( 'Site Description', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'site_desc',
	) ) );

// mobile menu toggle button background
 	$wp_customize->add_setting( 'mobile_toggle_bg', array(
		'default'        => '#919d74',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_toggle_bg', array(
		'label'   => esc_html__( 'Mobile Menu Toggle Button Background', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'mobile_toggle_bg',
	) ) );
	
// mobile menu toggle button background
 	$wp_customize->add_setting( 'mobile_toggle_label', array(
		'default'        => '#f3f3f3',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_toggle_label', array(
		'label'   => esc_html__( 'Mobile Menu Toggle Button Label', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'mobile_toggle_label',
	) ) );	
	
// mobile menu toggle button active and hover background
 	$wp_customize->add_setting( 'mobile_toggle_hover', array(
		'default'        => '#555c43',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_toggle_hover', array(
		'label'   => esc_html__( 'Mobile Menu Toggle Button Hover and Active Colour Background', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'mobile_toggle_hover',
	) ) );		
	
// mobile menu toggle button active and hover text
 	$wp_customize->add_setting( 'mobile_toggle_hlabel', array(
		'default'        => '#f3f3f3',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_toggle_hlabel', array(
		'label'   => esc_html__( 'Mobile Menu Toggle Button Hover and Active Colour Label', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'mobile_toggle_hlabel',
	) ) );		
	
// mobile menu background
 	$wp_customize->add_setting( 'mobile_menu_bg', array(
		'default'        => '#303030',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_menu_bg', array(
		'label'   => esc_html__( 'Mobile Menu Background Colour', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'mobile_menu_bg',
	) ) );		
	
// mobile menu lines
 	$wp_customize->add_setting( 'mobile_menu_lines', array(
		'default'        => '#424242',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_menu_lines', array(
		'label'   => esc_html__( 'Mobile Menu Separator Lines', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'mobile_menu_lines',
	) ) );	
	
// mobile menu link colour
 	$wp_customize->add_setting( 'mobile_menu_links', array(
		'default'        => '#ffffff',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_menu_links', array(
		'label'   => esc_html__( 'Mobile Menu Item Colour', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'mobile_menu_links',
	) ) );		
	
// mobile menu link hover colour
 	$wp_customize->add_setting( 'mobile_menu_hlinks', array(
		'default'        => '#be9656',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_menu_hlinks', array(
		'label'   => esc_html__( 'Mobile Menu Item Hover Colour', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'mobile_menu_hlinks',
	) ) );	
	
// Main menu background
 	$wp_customize->add_setting( 'nav_bg', array(
		'default'        => '#f8f8f8',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_bg', array(
		'label'   => esc_html__( 'Navigation Background', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'nav_bg',
	) ) );	

// Main submenu background
 	$wp_customize->add_setting( 'nav_submenu_bg', array(
		'default'        => '#f8f8f8',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_submenu_bg', array(
		'label'   => esc_html__( 'Navigation Submenu Background', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'nav_submenu_bg',
	) ) );	
	
// Main menu top border
 	$wp_customize->add_setting( 'nav_top_border', array(
		'default'        => '#efefef',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_top_border', array(
		'label'   => esc_html__( 'Navigation Top Border', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'nav_top_border',
	) ) );		
	
// Main menu bottom border
 	$wp_customize->add_setting( 'nav_bot_border', array(
		'default'        => '#e5e5e5',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_bot_border', array(
		'label'   => esc_html__( 'Navigation Bottom Border', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'nav_bot_border',
	) ) );		

// Main menu link colour
 	$wp_customize->add_setting( 'nav_link_colour', array(
		'default'        => '#222222',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_link_colour', array(
		'label'   => esc_html__( 'Navigation Link Colour', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'nav_link_colour',
	) ) );	

// Main menu link hover and active colour
 	$wp_customize->add_setting( 'nav_link_hcolour', array(
		'default'        => '#be9656',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_link_hcolour', array(
		'label'   => esc_html__( 'Navigation Link Active/Hover Colour', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'nav_link_hcolour',
	) ) );	

// Main menu submenu colour
 	$wp_customize->add_setting( 'nav_submenu_colour', array(
		'default'        => '#727679',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_submenu_colour', array(
		'label'   => esc_html__( 'Navigation Submenu Colour', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'nav_submenu_colour',
	) ) );	

// Main menu submenu bottom border
 	$wp_customize->add_setting( 'nav_submenu_border', array(
		'default'        => '#919d74',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_submenu_border', array(
		'label'   => esc_html__( 'Navigation Submenu Border', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'nav_submenu_border',
	) ) );

// banner background
 	$wp_customize->add_setting( 'banner_bg', array(
		'default'        => '#303030',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'banner_bg', array(
		'label'   => esc_html__( 'Banner Background', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'banner_bg',
	) ) );
	
// Content area background
 	$wp_customize->add_setting( 'content_bg', array(
		'default'        => '#f3f3f3',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'content_bg', array(
		'label'   => esc_html__( 'Content Area Background', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'content_bg',
	) ) );		
// Content area text colour
 	$wp_customize->add_setting( 'content_text', array(
		'default'        => '#656565',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'content_text', array(
		'label'   => esc_html__( 'Content Area Text', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'content_text',
	) ) );		
		
	
// Bottom area bg colour
 	$wp_customize->add_setting( 'bottom_sidebar_bg', array(
		'default'        => '#919d74',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bottom_sidebar_bg', array(
		'label'   => esc_html__( 'Bottom Sidebar area Background', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'bottom_sidebar_bg',
	) ) );	
// Bottom area text colour
 	$wp_customize->add_setting( 'bottom_sidebar_text', array(
		'default'        => '#F1F5E7',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bottom_sidebar_text', array(
		'label'   => esc_html__( 'Bottom Sidebar Text', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'bottom_sidebar_text',
	) ) );		
// Bottom area link colour
 	$wp_customize->add_setting( 'bottom_sidebar_links', array(
		'default'        => '#F1F5E7',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bottom_sidebar_links', array(
		'label'   => esc_html__( 'Bottom Sidebar Links', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'bottom_sidebar_links',
	) ) );	
		
// Bottom area link hover colour
 	$wp_customize->add_setting( 'bottom_sidebar_hlinks', array(
		'default'        => '#d5dead',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bottom_sidebar_hlinks', array(
		'label'   => esc_html__( 'Bottom Sidebar Hover Links', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'bottom_sidebar_hlinks',
	) ) );	
	
// Bottom list border colour
 	$wp_customize->add_setting( 'bottom_list_border', array(
		'default'        => '#b9bbb2',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bottom_list_border', array(
		'label'   => esc_html__( 'Bottom List Border Colour', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'bottom_list_border',
	) ) );

// Bottom area border
 	$wp_customize->add_setting( 'bottom_border', array(
		'default'        => '#555c43',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bottom_border', array(
		'label'   => esc_html__( 'Bottom Border', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'bottom_border',
	) ) );

	
	
// link colour
 	$wp_customize->add_setting( 'content_links', array(
		'default'        => '#af9870',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'content_links', array(
		'label'   => esc_html__( 'Content Links', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'content_links',
	) ) );	
	
	
// link hover colour
 	$wp_customize->add_setting( 'content_hlinks', array(
		'default'        => '#a76526',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'content_hlinks', array(
		'label'   => esc_html__( 'Content Hover Links', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'content_hlinks',
	) ) );	
	

// Content Headings
 	$wp_customize->add_setting( 'content_headings', array(
		'default'        => '#353535',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'content_headings', array(
		'label'   => esc_html__( 'Content Headings', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'content_headings',
	) ) );	

// entry title
 	$wp_customize->add_setting( 'entry_title', array(
		'default'        => '#353535',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'entry_title', array(
		'label'   => esc_html__( 'Post Summary Title Colour', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'entry_title',
	) ) );	
// entry title hover
 	$wp_customize->add_setting( 'entry_title_hover', array(
		'default'        => '#9ca867',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'entry_title_hover', array(
		'label'   => esc_html__( 'Post Summary Title Hover Colour', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'entry_title_hover',
	) ) );	
	
// entry meta colour
 	$wp_customize->add_setting( 'meta_colour', array(
		'default'        => '#9e9e9e',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'meta_colour', array(
		'label'   => esc_html__( 'Meta Entry Info Colour', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'meta_colour',
	) ) );	
	
// More Link colour
 	$wp_customize->add_setting( 'more_link', array(
		'default'        => '#be9656',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'more_link', array(
		'label'   => esc_html__( 'More Link (Read More) Colour', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'more_link',
	) ) );
	
// More Link hover colour
 	$wp_customize->add_setting( 'more_hlink', array(
		'default'        => '#656565',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'more_hlink', array(
		'label'   => esc_html__( 'More Link Hover Colour', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'more_hlink',
	) ) );
			
// left and right list link colour
 	$wp_customize->add_setting( 'left_right_list_links', array(
		'default'        => '#909090',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'left_right_list_links', array(
		'label'   => esc_html__( 'Left &amp; Right Column List Links', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'left_right_list_links',
	) ) );	
	
// left and right list link hover colour
 	$wp_customize->add_setting( 'left_right_list_hlinks', array(
		'default'        => '#a76526',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'left_right_list_hlinks', array(
		'label'   => esc_html__( 'Left &amp; Right Column List Hover Links', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'left_right_list_hlinks',
	) ) );		

// left and right list border colour
 	$wp_customize->add_setting( 'leftright_list_border', array(
		'default'        => '#e6e6e6',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'leftright_list_border', array(
		'label'   => esc_html__( 'Left &amp; Right List Border', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'leftright_list_border',
	) ) );	

// Default button bg
 	$wp_customize->add_setting( 'button_bg', array(
		'default'        => '#919d74',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_bg', array(
		'label'   => esc_html__( 'Button Background', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'button_bg',
	) ) );		
	
// Default button text
 	$wp_customize->add_setting( 'button_text', array(
		'default'        => '#f3f3f3',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_text', array(
		'label'   => esc_html__( 'Button Text', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'button_text',
	) ) );
	
// Default button bg
 	$wp_customize->add_setting( 'button_hbg', array(
		'default'        => '#303030',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_hbg', array(
		'label'   => esc_html__( 'Button Hover Background', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'button_hbg',
	) ) );		
	
// Default button text
 	$wp_customize->add_setting( 'button_htext', array(
		'default'        => '#f3f3f3',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_htext', array(
		'label'   => esc_html__( 'Button Hover Text', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'button_htext',
	) ) );	
	
// Footer background
 	$wp_customize->add_setting( 'footer_bg', array(
		'default'        => '#303030',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg', array(
		'label'   => esc_html__( 'Footer Background', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'footer_bg',
	) ) );	
	
// Footer text
 	$wp_customize->add_setting( 'footer_text', array(
		'default'        => '#dadada',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text', array(
		'label'   => esc_html__( 'Footer Text', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'footer_text',
	) ) );	

// Footer link colour
 	$wp_customize->add_setting( 'footer_link', array(
		'default'        => '#c3b499',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_link', array(
		'label'   => esc_html__( 'Footer Link Colour', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'footer_link',
	) ) );

// Footer link hover colour
 	$wp_customize->add_setting( 'footer_link_hover', array(
		'default'        => '#dadada',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_link_hover', array(
		'label'   => esc_html__( 'Footer Link Hover Colour', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'footer_link_hover',
	) ) );
		
// Social bg
 	$wp_customize->add_setting( 'social_bg', array(
		'default'        => '#555c43',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_bg', array(
		'label'   => esc_html__( 'Social Icon Background', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'social_bg',
	) ) );	
// Social icon
 	$wp_customize->add_setting( 'social_icon', array(
		'default'        => '#ffffff',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_icon', array(
		'label'   => esc_html__( 'Social Icon Colour', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'social_icon',
	) ) );

// Social bg hover
 	$wp_customize->add_setting( 'social_hbg', array(
		'default'        => '#919d74',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_hbg', array(
		'label'   => esc_html__( 'Social Icon Hover Background', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'social_hbg',
	) ) );	
// Social icon hover
 	$wp_customize->add_setting( 'social_hicon', array(
		'default'        => '#ffffff',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_hicon', array(
		'label'   => esc_html__( 'Social Icon Hover Colour', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'social_hicon',
	) ) );


// Sticky label bg
 	$wp_customize->add_setting( 'sticky_bg', array(
		'default'        => '#919d74',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sticky_bg', array(
		'label'   => esc_html__( 'Sticky Featured Label Background', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'sticky_bg',
	) ) );
// Sticky label 
 	$wp_customize->add_setting( 'sticky_label', array(
		'default'        => '#ffffff',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sticky_label', array(
		'label'   => esc_html__( 'Sticky Featured Label Colour', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'sticky_label',
	) ) );	
	
	
// Back to Top background
 	$wp_customize->add_setting( 'backtop_bg', array(
		'default'        => '#000000',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'backtop_bg', array(
		'label'   => esc_html__( 'Back to Top Button Background', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'backtop_bg',
	) ) );
// Back to Top background hover
 	$wp_customize->add_setting( 'backtop_hbg', array(
		'default'        => '#565656',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'backtop_hbg', array(
		'label'   => esc_html__( 'Back to Top Button Hover Background', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'backtop_hbg',
	) ) );
// Back to Top text
 	$wp_customize->add_setting( 'backtop_text', array(
		'default'        => '#ffffff',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'backtop_text', array(
		'label'   => esc_html__( 'Back to Top Button Text', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'backtop_text',
	) ) );	

// quote format background colour
 	$wp_customize->add_setting( 'quotepf_bg', array(
		'default'        => '#919d74',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'quotepf_bg', array(
		'label'   => esc_html__( 'Quote Post Format Background', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'quotepf_bg',
	) ) );	

// quote format text colour
 	$wp_customize->add_setting( 'quotepf_text', array(
		'default'        => '#ffffff',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'quotepf_text', array(
		'label'   => esc_html__( 'Quote Post Format Text', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'quotepf_text',
	) ) );
	
// image format text colour
 	$wp_customize->add_setting( 'imagepf_title', array(
		'default'        => '#c9d6a3',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'imagepf_title', array(
		'label'   => esc_html__( 'Image Post Format Title', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'imagepf_title',
	) ) );	
	
// image format text colour
 	$wp_customize->add_setting( 'copyright_text', array(
		'default'        => '#b5b5b5',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'copyright_text', array(
		'label'   => esc_html__( 'Copyright Text Colour', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'copyright_text',
	) ) );		

// caption text colour
 	$wp_customize->add_setting( 'caption_text', array(
		'default'        => '#fff',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'caption_text', array(
		'label'   => esc_html__( 'Image Caption Text Colour', 'senses-lite' ),
		'section' => 'colors',
		'settings'   => 'caption_text',
	) ) );	
	
/*
 * Create a section
 * Name: Error Page
 */  
	$wp_customize->add_section( 'error_page',	array(
		'title' => esc_html__( 'Error Page', 'senses-lite' ),
		'priority' => 41,
	)  );	
	
// Error box background
 	$wp_customize->add_setting( 'error_bg', array(
		'default'        => '#919d74',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'error_bg', array(
		'label'   => esc_html__( 'Error Middle Background', 'senses-lite' ),
		'section' => 'error_page',
		'settings'   => 'error_bg',
	) ) );	
// Error box text colour
 	$wp_customize->add_setting( 'error_text_colour', array(
		'default'        => '#ffffff',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'error_text_colour', array(
		'label'   => esc_html__( 'Error Text Colour', 'senses-lite' ),
		'section' => 'error_page',
		'settings'   => 'error_text_colour',
	) ) );			
// Setting group for the error page button background
 	$wp_customize->add_setting( 'error_button_bg', array(
		'default'        => '#919d74',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'error_button_bg', array(
		'label'   => esc_html__( 'Error Button Background', 'senses-lite' ),
		'section' => 'error_page',
		'settings'   => 'error_button_bg',
	) ) );	
// Setting group for the error page button text
 	$wp_customize->add_setting( 'error_button_text_colour', array(
		'default'        => '#ffffff',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'error_button_text_colour', array(
		'label'   => esc_html__( 'Error Button Label Colour', 'senses-lite' ),
		'section' => 'error_page',
		'settings'   => 'error_button_text_colour',
	) ) );	
// Setting group for the error page button border
 	$wp_customize->add_setting( 'error_button_border', array(
		'default'        => '#afb39c',
		'sanitize_callback' => 'senses_lite_sanitize_hex_colour',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'error_button_border', array(
		'label'   => esc_html__( 'Error Button Border', 'senses-lite' ),
		'section' => 'error_page',
		'settings'   => 'error_button_border',
	) ) );	


 	
	
}
add_action( 'customize_register', 'senses_lite_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function senses_lite_customize_preview_js() {
	wp_enqueue_script( 'senses_lite_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'senses_lite_customize_preview_js' );


/**
 * This is our theme sanitization settings.
 * Remember to sanitize any additional theme settings you add to the customizer.
 */

// adds sanitization callback function for the header style : radio
	function senses_lite_sanitize_header_style( $input ) {
		$valid = array(
			  'default' => esc_html__( 'Logo to the Left and Menu Right', 'senses-lite' ),
			  'centered' => esc_html__( 'Centered Logo and Menu Below', 'senses-lite' ),		
		);
	 
		if ( array_key_exists( $input, $valid ) ) {
			return $input;
		} else {
			return '';
		}
	} 

// adds sanitization callback function for the header background position : radio
	function senses_lite_sanitize_bg_position( $input ) {
		$valid = array(
			  'top' => esc_html__( 'Top', 'senses-lite' ),
			  'bottom' => esc_html__( 'Bottom', 'senses-lite' ),
			  'center' => esc_html__( 'Center', 'senses-lite' ),
		);

		if ( array_key_exists( $input, $valid ) ) {
			return $input;
		} else {
			return '';
		}
	}
// adds sanitization callback function for the header background size : radio
	function senses_lite_sanitize_bg_size( $input ) {
		$valid = array(
			  'auto' => esc_html__( 'Auto', 'senses-lite' ),
			  'cover' => esc_html__( 'Cover', 'senses-lite' ),
			  'contain' => esc_html__( 'Contain', 'senses-lite' ),
		);

		if ( array_key_exists( $input, $valid ) ) {
			return $input;
		} else {
			return '';
		}
	}
	
// adds sanitization callback function for the boxed style : radio
	function senses_lite_sanitize_boxed_style( $input ) {
		$valid = array(
			  'fullwidth' => esc_html__( 'Full Width', 'senses-lite' ),
			  'boxed1920' => esc_html__( 'Boxed 1920px Width', 'senses-lite' ),
			  'boxed1600' => esc_html__( 'Boxed 1600px Width', 'senses-lite' ),
			  'boxed1400' => esc_html__( 'Boxed 1400px Width', 'senses-lite' ),
			  'boxed1200' => esc_html__( 'Boxed 1200px Width', 'senses-lite' ),
		);

		if ( array_key_exists( $input, $valid ) ) {
			return $input;
		} else {
			return '';
		}
	}
	
// adds sanitization callback function for the blog style : radio
	function senses_lite_sanitize_blog_style( $input ) {
		$valid = array(
			'top-featured-center' => esc_html__( 'Top Featured Image Centered', 'senses-lite' ),
			'top-featured-left' => esc_html__( 'Top Featured Image Left Sidebar', 'senses-lite' ),
			'top-featured-right' => esc_html__( 'Top Featured Image Right Sidebar', 'senses-lite' ),		  
		);

		if ( array_key_exists( $input, $valid ) ) {
			return $input;
		} else {
			return '';
		}
	}

// adds sanitization callback function for the single layout : radio
	function senses_lite_sanitize_single_layout( $input ) {
		$valid = array(
			  'right-column' => esc_html__( 'Right Column Layout', 'senses-lite' ),
			  'left-column' => esc_html__( 'Left Column Layout', 'senses-lite' ),
			  'full-width' => esc_html__( 'Full Width', 'senses-lite' ),
		);

		if ( array_key_exists( $input, $valid ) ) {
			return $input;
		} else {
			return '';
		}
	}
	
// adds sanitization callback function for the featured image : radio
	function senses_lite_sanitize_featured_image( $input ) {
		$valid = array(
			  'left' => esc_html__( 'Left Position', 'senses-lite' ),
			  'top' => esc_html__( 'Top', 'senses-lite' ),
			  'centered' => esc_html__( 'Top Centered', 'senses-lite' ),
		);

		if ( array_key_exists( $input, $valid ) ) {
			return $input;
		} else {
			return '';
		}
	}	
	
	
	
// adds sanitization callback function for the excerpt : radio
	function senses_lite_sanitize_excerpt( $input ) {
		$valid = array(
			'content' => esc_html__( 'Content', 'senses-lite' ),
			'excerpt' => esc_html__( 'Excerpt', 'senses-lite' ),
		);
	 
		if ( array_key_exists( $input, $valid ) ) {
			return $input;
		} else {
			return '';
		}
	}		
	

// adds sanitization callback function for background size
if ( ! function_exists( 'senses_lite_sanitize_background_size' ) ) :
  function senses_lite_sanitize_background_size( $value ) {
    $background_sizes = array( 'auto', 'cover', 'contain' );
    if ( ! in_array( $value, $background_sizes ) ) {
      $value = 'cover';
    }

    return $value;
  }
endif;

// adds sanitization callback function : textarea
if ( ! function_exists( 'senses_lite_sanitize_textarea' ) ) :
  function senses_lite_sanitize_textarea( $value ) {
    if ( !current_user_can('unfiltered_html') )
			$value  = stripslashes( wp_filter_post_kses( addslashes( $value ) ) ); // wp_filter_post_kses() expects slashed

    return $value;
  }
endif;

// adds sanitization callback function for numeric data : number
if ( ! function_exists( 'senses_lite_sanitize_number' ) ) :
	function senses_lite_sanitize_number( $value ) {
		$value = (int) $value; // Force the value into integer type.
		return ( 0 < $value ) ? $value : null;
	}
endif;

// adds sanitization callback function : colors
if ( ! function_exists( 'senses_lite_sanitize_hex_colour' ) ) :
	function senses_lite_sanitize_hex_colour( $color ) {
		if ( $unhashed = sanitize_hex_color_no_hash( $color ) )
			return '#' . $unhashed;
	
		return $color;
	}
endif;

// adds sanitization callback function : text 
if ( ! function_exists( 'senses_lite_sanitize_text' ) ) :
	function senses_lite_sanitize_text( $input ) {
		return wp_kses_post( force_balance_tags( $input ) );
	}
endif;

// adds sanitization callback function : url
if ( ! function_exists( 'senses_lite_sanitize_url' ) ) :
	function senses_lite_sanitize_url( $value) {
		$value = esc_url( $value);
		return $value;
	}
endif;

// adds sanitization callback function : checkbox
if ( ! function_exists( 'senses_lite_sanitize_checkbox' ) ) :
	function senses_lite_sanitize_checkbox( $input ) {
		if ( $input == 1 ) {
			return 1;
		} else {
			return '';
		}
	}	 
endif;

// adds sanitization callback function : absolute integer
if ( ! function_exists( 'senses_lite_sanitize_integer' ) ) :
function senses_lite_sanitize_integer( $input ) {
	return absint( $input );
}
endif;

// adds sanitization callback function : range slider
if ( ! function_exists( 'senses_lite_sanitize_rangeslider' ) ) :
  function senses_lite_sanitize_rangeslider( $value ) {
    if ( is_numeric( $value ) && $value >= 0 && $value <= 1 )
      return $value;

    return 0.5;
  }
endif;

if ( ! function_exists( 'senses_lite_sanitize_opacity' ) ) :

// adds sanitization callback for opacity
  function senses_lite_sanitize_opacity( $value ) {
    if ( is_numeric( $value ) && $value >= 0 && $value <= 1 )
      return $value;

    return 0.75;
  }
endif;
