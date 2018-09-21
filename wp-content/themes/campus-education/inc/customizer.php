<?php
/**
 * Campus Education Theme Customizer
 * @package Campus Education
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function campus_education_customize_register( $wp_customize ) {	

	//add home page setting pannel
	$wp_customize->add_panel( 'campus_education_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'campus-education' ),
	    'description' => __( 'Description of what this panel does.', 'campus-education' ),
	) );

	//layout setting
	$wp_customize->add_section( 'campus_education_theme_layout', array(
    	'title'      => __( 'Layout Settings', 'campus-education' ),
		'priority'   => null,
		'panel' => 'campus_education_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('campus_education_layout',array(
	        'default' => __( 'Right Sidebar', 'campus-education' ),
	        'sanitize_callback' => 'campus_education_sanitize_choices'	        
	    )
    );

	$wp_customize->add_control('campus_education_layout',
	    array(
	        'type' => 'radio',
	        'label' => __( 'Do you want this section', 'campus-education' ),
	        'section' => 'campus_education_theme_layout',
	        'choices' => array(
	            'Left Sidebar' => __('Left Sidebar','campus-education'),
	            'Right Sidebar' => __('Right Sidebar','campus-education'),
	            'One Column' => __('One Column','campus-education'),
	            'Three Columns' => __('Three Columns','campus-education'),
	            'Four Columns' => __('Four Columns','campus-education'),
	            'Grid Layout' => __('Grid Layout','campus-education')
	        ),
	    )
    );

    //Social Icons(topbar)
	$wp_customize->add_section('campus_education_social_media',array(
		'title'	=> __('Social Icon','campus-education'),
		'description'	=> __('Add Header Content here','campus-education'),
		'priority'	=> null,
		'panel' => 'campus_education_panel_id',
	));

	$wp_customize->add_setting('campus_education_facebook',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('campus_education_facebook',array(
		'label'	=> __('Add Facebook link','campus-education'),
		'section'	=> 'campus_education_social_media',
		'setting'	=> 'campus_education_facebook',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('campus_education_twitter',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('campus_education_twitter',array(
		'label'	=> __('Add Twitter link','campus-education'),
		'section'	=> 'campus_education_social_media',
		'setting'	=> 'campus_education_twitter',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('campus_education_google',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('campus_education_google',array(
		'label'	=> __('Add Google Plus link','campus-education'),
		'section'	=> 'campus_education_social_media',
		'setting'	=> 'campus_education_google',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('campus_education_pintrest',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('campus_education_pintrest',array(
		'label'	=> __('Add Pintrest link','campus-education'),
		'section'	=> 'campus_education_social_media',
		'setting'	=> 'campus_education_pintrest',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('campus_education_insta',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('campus_education_insta',array(
		'label'	=> __('Add Instagram link','campus-education'),
		'section'	=> 'campus_education_social_media',
		'setting'	=> 'campus_education_insta',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('campus_education_linkdin',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('campus_education_linkdin',array(
		'label'	=> __('Add Linkdin link','campus-education'),
		'section'	=> 'campus_education_social_media',
		'setting'	=> 'campus_education_linkdin',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('campus_education_youtube',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('campus_education_youtube',array(
		'label'	=> __('Add Youtube link','campus-education'),
		'section'	=> 'campus_education_social_media',
		'setting'	=> 'campus_education_youtube',
		'type'	=> 'url'
	));

	//Topbar section
	$wp_customize->add_section('campus_education_topbar_icon',array(
		'title'	=> __('Topbar Section','campus-education'),
		'description'	=> __('Add Header Content here','campus-education'),
		'priority'	=> null,
		'panel' => 'campus_education_panel_id',
	));

	$wp_customize->add_setting('campus_education_email_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('campus_education_email_text',array(
		'label'	=> __('Add Email Text','campus-education'),
		'section'	=> 'campus_education_topbar_icon',
		'setting'	=> 'campus_education_email_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('campus_education_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('campus_education_email',array(
		'label'	=> __('Add Email Address','campus-education'),
		'section'	=> 'campus_education_topbar_icon',
		'setting'	=> 'campus_education_email',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('campus_education_call_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('campus_education_call_text',array(
		'label'	=> __('Add Contact Text','campus-education'),
		'section'	=> 'campus_education_topbar_icon',
		'setting'	=> 'campus_education_call_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('campus_education_call_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('campus_education_call_number',array(
		'label'	=> __('Add Contact Number','campus-education'),
		'section'	=> 'campus_education_topbar_icon',
		'setting'	=> 'campus_education_call_number',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('campus_education_button_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('campus_education_button_text',array(
		'label'	=> __('Add Button Text','campus-education'),
		'section'	=> 'campus_education_topbar_icon',
		'setting'	=> 'campus_education_button_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('campus_education_button_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('campus_education_button_link',array(
		'label'	=> __('Add Button Link','campus-education'),
		'section'	=> 'campus_education_topbar_icon',
		'setting'	=> 'campus_education_button_link',
		'type'		=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'campus_education_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'campus-education' ),
		'priority'   => null,
		'panel' => 'campus_education_panel_id'
	) );

	$wp_customize->add_setting('campus_education_slider_hide',array(
       'default' => 'false',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('campus_education_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','campus-education'),
       'section' => 'campus_education_slider_section',
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'campus_education_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'campus_education_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'campus_education_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'campus-education' ),
			'section'  => 'campus_education_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	//Welcome Campus Section
	$wp_customize->add_section('campus_education_campus',array(
		'title'	=> __('Welcome To Our Campus','campus-education'),
		'description'	=> __('Add Welcome To Our Campus sections below.','campus-education'),
		'panel' => 'campus_education_panel_id',
	));

	$wp_customize->add_setting('campus_education_campus_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('campus_education_campus_title',array(
		'label'	=> __('Section Title','campus-education'),
		'section'	=> 'campus_education_campus',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('campus_education_campus_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('campus_education_campus_text',array(
		'label'	=> __('Add Text','campus-education'),
		'section'	=> 'campus_education_campus',
		'type'		=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
	if($i==0){
	$default = $category->slug;
	$i++;
	}
	$cats[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('campus_education_campus_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('campus_education_campus_category',array(
		'type'    => 'select',
		'choices' => $cats,
		'label' => __('Select Category to display Latest Post','campus-education'),
		'section' => 'campus_education_campus',
	));

	//footer text
	$wp_customize->add_section('campus_education_footer_section',array(
		'title'	=> __('Footer Text','campus-education'),
		'description'	=> __('Add some text for footer like copyright etc.','campus-education'),
		'panel' => 'campus_education_panel_id'
	));
	
	$wp_customize->add_setting('campus_education_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('campus_education_text',array(
		'label'	=> __('Copyright Text','campus-education'),
		'section'	=> 'campus_education_footer_section',
		'type'		=> 'text'
	));	
}
add_action( 'customize_register', 'campus_education_customize_register' );	

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Campus_Education_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Campus_Education_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Campus_Education_Customize_Section_Pro(
			$manager,
			'example_1',
				array(
				'priority'   => 9,
				'title'    => esc_html__( 'Campus Education Pro', 'campus-education' ),
				'pro_text' => esc_html__( 'Go Pro', 'campus-education' ),
				'pro_url'  => esc_url('https://www.themesglance.com/themes/campus-education-wordpress-theme/')					
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'campus-education-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'campus-education-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Campus_Education_Customize::get_instance();