<?php
/**
 * SKT Simple Theme Customizer
 *
 * @package SKT Simple
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function skt_simple_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->remove_control('header_textcolor');
	$wp_customize->remove_control('display_header_text');
	
	$wp_customize->add_setting('color_scheme',array(
			'default'	=> '#333333',
			'sanitize_callback'	=> 'sanitize_hex_color'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'color_scheme',array(
			'label' => __('Color Scheme','skt-simple'),			
			 'description' => __( 'More color options in PRO Version.', 'skt-simple' ),			
			'section' => 'colors',
			'settings' => 'color_scheme'
		))
	);
	
	// Slider Section		
	$wp_customize->add_section(
        'slider_section',
        array(
            'title' => __('Slider Settings', 'skt-simple'),
            'priority' => null,
            'description' => __( 'Featured Image Size Should be ( 1170x667 ) More slider settings available in PRO Version.', 'skt-simple' ),			
        )
    );
	
	
	$wp_customize->add_setting('page-setting7',array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'skt_simple_sanitize_integer'
	));
	
	$wp_customize->add_control('page-setting7',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide one:','skt-simple'),
			'section'	=> 'slider_section'
	));	
	
	$wp_customize->add_setting('page-setting8',array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback'	=> 'skt_simple_sanitize_integer'
	));
	
	$wp_customize->add_control('page-setting8',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide two:','skt-simple'),
			'section'	=> 'slider_section'
	));	
	
	$wp_customize->add_setting('page-setting9',array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback'	=> 'skt_simple_sanitize_integer'
	));
	
	$wp_customize->add_control('page-setting9',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide three:','skt-simple'),
			'section'	=> 'slider_section'
	));	// Slider Section
	
	$wp_customize->add_setting('hide_slides',array(
			'sanitize_callback' => 'sanitize_text_field',
	));	 

	$wp_customize->add_control( 'hide_slides', array(
    	   'section'   => 'slider_section',
    	   'label'     => 'Hide Slider',
    	   'type'      => 'checkbox'
     ));	
	
	
	// Home Welcome Section 	
	$wp_customize->add_section('section_first',array(
		'title'	=> __('Home About Section','skt-simple'),
		'description'	=> __('Select Page from the dropdown for home about section','skt-simple'),
		'priority'	=> null
	));
	
	$wp_customize->add_setting('page-setting1',	array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback' => 'skt_simple_sanitize_integer',
		));
 
	$wp_customize->add_control(	'page-setting1',array('type' => 'dropdown-pages',
			'label' => __('','skt-simple'),
			'section' => 'section_first',
	));
	
	$wp_customize->add_setting('hide_about',array(
			'sanitize_callback' => 'sanitize_text_field',
	));	 

	$wp_customize->add_control( 'hide_about', array(
    	   'section'   => 'section_first',
    	   'label'     => 'Hide This Section',
    	   'type'      => 'checkbox'
     ));
	
	// Home Why Choose Us Section 	
	$wp_customize->add_section('section_second', array(
		'title'	=> __('Home Four Featured Box','skt-simple'),
		'description'	=> __('Select Page from the dropdown for four featured box section','skt-simple'),
		'priority'	=> null
	));	
	
	
	$wp_customize->add_setting('page-column1',	array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback' => 'skt_simple_sanitize_integer',
		));
 
	$wp_customize->add_control(	'page-column1',array('type' => 'dropdown-pages',
			'label' => __('','skt-simple'),
			'section' => 'section_second',
	));	
	
	
	$wp_customize->add_setting('page-column2',	array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback' => 'skt_simple_sanitize_integer',
		));
 
	$wp_customize->add_control(	'page-column2',array('type' => 'dropdown-pages',
			'label' => __('','skt-simple'),
			'section' => 'section_second',
	));
	
	$wp_customize->add_setting('page-column3',	array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback' => 'skt_simple_sanitize_integer',
		));
 
	$wp_customize->add_control(	'page-column3',array('type' => 'dropdown-pages',
			'label' => __('','skt-simple'),
			'section' => 'section_second',
	));	
	
	$wp_customize->add_setting('page-column4',	array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback' => 'skt_simple_sanitize_integer',
		));
 
	$wp_customize->add_control(	'page-column4',array('type' => 'dropdown-pages',
			'label' => __('','skt-simple'),
			'section' => 'section_second',
	));		
	
	
	//end four column part
	
	$wp_customize->add_setting('hide_column',array(
			'sanitize_callback' => 'sanitize_text_field',
	));	 

	$wp_customize->add_control( 'hide_column', array(
    	   'section'   => 'section_second',
    	   'label'     => 'Hide This Section',
    	   'type'      => 'checkbox'
     ));	
	
	
	$wp_customize->add_section('social_sec',array(
			'title'	=> __('Social Settings','skt-simple'),				
			'description' => __( 'More social icon available in PRO Version.', 'skt-simple' ),			
			'priority'		=> null
	));
	
	$wp_customize->add_setting('fb_link',array(
			'default'	=> 'http://www.facebook.com',
			'sanitize_callback'	=> 'esc_url_raw'	
	));
	
	$wp_customize->add_control('fb_link',array(
			'label'	=> __('Add facebook link here','skt-simple'),
			'section'	=> 'social_sec',
			'setting'	=> 'fb_link'
	));	
	$wp_customize->add_setting('twitt_link',array(
			'default'	=> 'https://twitter.com',
			'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('twitt_link',array(
			'label'	=> __('Add twitter link here','skt-simple'),
			'section'	=> 'social_sec',
			'setting'	=> 'twitt_link'
	));
	$wp_customize->add_setting('gplus_link',array(
			'default'	=> 'https://plus.google.com',
			'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('gplus_link',array(
			'label'	=> __('Add google plus link here','skt-simple'),
			'section'	=> 'social_sec',
			'setting'	=> 'gplus_link'
	));
	$wp_customize->add_setting('linked_link',array(
			'default'	=> 'http://linkedin.com',
			'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('linked_link',array(
			'label'	=> __('Add linkedin link here','skt-simple'),
			'section'	=> 'social_sec',
			'setting'	=> 'linked_link'
	));
	
	$wp_customize->add_section('footer_area',array(
			'title'	=> __('Footer Area','skt-simple'),
			'priority'	=> null,
			'description'	=> ''
	));
	
	$wp_customize->add_setting('about_title',array(
			'default'	=> __('About SKT Simple','skt-simple'),
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('about_title',array(
			'label'	=> __('Title for about us','skt-simple'),
			'section'	=> 'footer_area',
			'setting'	=> 'about_title'
	));
	
	$wp_customize->add_setting('about_description',array(
			'default'	=> __('Nam aliquet aliquam ipsum eget volutpat. Duis nec porta purus. Integer adipiscing augue sit amet libero vulputate, et fermentum nibh rutrum. In bibendum nisi sed consequat hendrerit. Aliquam. <br /> </br > Quisque elementum, dolor nec tempus eleifend, nibh mauris aliquet ante, eu tempus sapien nisi non nunc. Nulla facilisi. Suspendisse lobortis laoreet risus, a posuere mauris facilisis at. In viverra euismod velit non cursus.','skt-simple'),
			'sanitize_callback'	=> 'wp_kses_post'
	));
	
	$wp_customize->add_control('about_description', array(	
			'label'	=> __('Description for about us','skt-simple'),
			'section'	=> 'footer_area',
			'setting'	=> 'about_description',
			'type' => 'textarea',
	));
	
	$wp_customize->add_setting('recent_title',array(
			'default'	=> __('Recent Posts','skt-simple'),
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('recent_title',array(
			'label'	=> __('Title for recent posts','skt-simple'),
			'section'	=> 'footer_area',
			'setting'	=> 'recent_title'
	));	
 
	$wp_customize->add_setting('contact_title',array(
			'default'	=> __('Contact Info','skt-simple'),
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('contact_title',array(
			'label'	=> __('Title for contact address','skt-simple'),
			'section'	=> 'footer_area',
			'setting'	=> 'contact_title'
	));
	
	
	$wp_customize->add_setting('contact_add',array(
			'default'	=> __('Etiam luctus venenatis magna, at facilisis leo sagittis in.','skt-simple'),
			'sanitize_callback'	=> 'wp_kses_post'
	));
	
	$wp_customize->add_control('contact_add', array(
				'label'	=> __('Add contact address here','skt-simple'),
				'section'	=> 'footer_area',
				'setting'	=> 'contact_add',
				'type' => 'textarea',
	));
	
	$wp_customize->add_section('header_info',array(
			'title'	=> __('Header And Footer Option','skt-simple'),
			'description'	=> __('','skt-simple'),
			'priority'	=> null
	));
 	
	$wp_customize->add_setting('opning_hours',array(
			'default'	=> __('Mon. - Fri. 10:00 - 21:00','skt-simple'),
			'sanitize_callback'	=> 'wp_kses_post'
	));
	
	$wp_customize->add_control('opning_hours', array(
				'label'	=> __('Add opening hours for header','skt-simple'),
				'section'	=> 'header_info',
				'setting'	=> 'opning_hours',
				'type' => 'textarea',
	));
	
	$wp_customize->add_setting('header_phone',array(
			'default'	=> __(' +11 123 456 7890','skt-simple'),
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('header_phone',array(
			'label'	=> __('Phone Number','skt-simple'),
			'section'	=> 'header_info',
			'setting'	=> 'header_phone'
	));	
	
	$wp_customize->add_setting('footer_email',array(
			'default'	=> __('info@sitename.com','skt-simple'),
			'sanitize_callback'	=> 'sanitize_email'
	));
	
	$wp_customize->add_control('footer_email',array(
			'label'	=> __('Email Address','skt-simple'),
			'section'	=> 'header_info',
			'setting'	=> 'footer_email'
	));		
	
	$wp_customize->add_setting('footer_website',array(
			'default'	=> __('http://sitename.com','skt-simple'),
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('footer_website',array(
			'label'	=> __('Website','skt-simple'),
			'section'	=> 'header_info',
			'setting'	=> 'footer_website'
	));		
 
}
add_action( 'customize_register', 'skt_simple_customize_register' );

//Integer
function skt_simple_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}

function skt_simple_custom_css_styles() {
        wp_enqueue_style( 'skt-simple-custom-styles', get_template_directory_uri() . '/css/custom-style.css' ); 
        $color = esc_attr(get_theme_mod('color_scheme','#333333')); //E.g. #1874c1
        $custom_css = "a, .blog_lists h2 a:hover, .logo h1 span, .social-icons a, .slide_info h2 span, h2.section_title, .header-top{color: {$color};}.menubar, .pagination ul li .current, .pagination ul li a:hover, #commentform input#submit:hover, .nivo-controlNav a.active, .wpcf7 input[type=submit], #pagearea .threebox:hover, .page-numbers, input.search-submit, .post-password-form input[type=submit], .wpcf7-form input[type=submit]{background-color: {$color};}.headerxxx{border-color: {$color};}";
        wp_add_inline_style( 'skt-simple-custom-styles', $custom_css ); // Custom CSS after style sheet
}
add_action( 'wp_enqueue_scripts', 'skt_simple_custom_css_styles' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function skt_simple_customize_preview_js() {
	wp_enqueue_script( 'skt_simple_customizer', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'skt_simple_customize_preview_js' );


function skt_simple_custom_customize_enqueue() {
	wp_enqueue_script( 'skt-simple-custom-customize', get_template_directory_uri() . '/js/custom.customize.js', array( 'jquery', 'customize-controls' ), false, true );
}
add_action( 'customize_controls_enqueue_scripts', 'skt_simple_custom_customize_enqueue' );