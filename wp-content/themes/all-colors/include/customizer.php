<?php
// Do not allow direct access to the file.
if(  ! defined( 'ABSPATH' ) ) {
    exit;
}
/**
 * Theme Customizer
 *
 */

add_action( 'customize_register', 'all_colors_customize_register' );
 
function all_colors_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'all_colors_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'all_colors_customize_partial_blogdescription',
		) );
	}

  	    $wp_customize->add_setting( 'background_color', array (
			'sanitize_callback' => 'sanitize_text_field',
		) );
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
			'label'    => __( 'Background Color ', 'all-colors' ),
			'section'  => 'all-colors',
			'settings' => 'background_color',
		) ) );
/**
 * Sanitize Functions
 */
 
	function all_colors_sanitize_checkbox( $input ) {
		if ( $input ) {
			return 1;
		}
		return 0;
	}
	
	function all_colors_header_sanitize_position( $input ) {
		$valid = array(
			'center' => esc_attr__( 'center center', 'all-colors' ),
			'real' => esc_attr__( 'Real Size (Deactivate the image height.)', 'all-colors' ),
		);
		
		if ( array_key_exists( $input, $valid ) ) {
			return $input;
		} else {
			return '';
		}
	}
			
	function all_colors_header_sanitize_show( $input ) {
		$valid = array(
				'' => esc_attr__( 'Default', 'all-colors' ),
				'all' => esc_attr__( 'All Pages', 'all-colors' ),
				'home' => esc_attr__( 'Home Page', 'all-colors' ),
		);
		
		if ( array_key_exists( $input, $valid ) ) {
			return $input;
		} else {
			return '';
		}
	}	
	
/**
 * Header Image
 */	
 
 	    $wp_customize->add_setting( 'header_button_1', array (
			'sanitize_callback' => 'sanitize_text_field',
		) );
			
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_button_1', array(
			'label'    => __( 'Header Button 1 ', 'all-colors' ),
			'description'    => __( 'The button is activated after inserting text in the field', 'all-colors' ),
			'priority'    => 1,
			'section'  => 'header_image',
			'settings' => 'header_button_1',
			'type' => 'text',
		) ) );
		
		$wp_customize->add_setting( 'header_button_1_link', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_button_1_link', array(
			'priority'    => 1,
			'label'    => __( 'Button 1 URL', 'all-colors' ),
			'section'  => 'header_image',
			'settings' => 'header_button_1_link',
		) ) );	
		
 		$wp_customize->add_setting( 'header_image_show', array (
			'sanitize_callback' => 'all_colors_header_sanitize_show',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_image_show', array(
			'label'    => __( 'Activate Header Image', 'all-colors' ),
			'section'  => 'header_image',		
			'settings' => 'header_image_show',
			'type'     =>  'select',
			'priority'    => 1,			
            'choices'  => array(
				'' => esc_attr__( 'Default', 'all-colors' ),
				'all' => esc_attr__( 'All Pages', 'all-colors' ),
				'home' => esc_attr__( 'Home Page', 'all-colors' ),
            ),
			'default'  => 'all'	
		) ) );
		
		$wp_customize->add_setting( 'header_image_height', array (
			'sanitize_callback' => 'absint',
		) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_image_height', array(
			'section'  => 'header_image',
			'priority'    => 1,
			'settings' => 'header_image_height',
			'label'       => __( 'Image Height', 'all-colors' ),			
			'type'     =>  'number',
			'input_attrs'     => array(
				'min'  => 200,
				'max'  => 1000,
				'step' => 1,
			),
		) ) );
		
		$wp_customize->add_setting( 'header_image_position', array (
			'sanitize_callback' => 'all_colors_header_sanitize_position',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_image_position', array(
			'label'    => __( 'Image Position', 'all-colors' ),
			'section'  => 'header_image',		
			'settings' => 'header_image_position',
			'type'     =>  'select',
			'priority'    => 2,			
            'choices'  => array(
				'center' => esc_attr__( 'Background Cover (center center)', 'all-colors' ),
				'real' => esc_attr__( 'Real Size (Deactivate the image height.)', 'all-colors' ),
            ),
			'default'  => 'real'	
		) ) );

		$wp_customize->add_setting( 'all_colors_header_shadow', array (
            'default' => '',		
			'sanitize_callback' => 'all_colors_sanitize_checkbox',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'all_colors_header_shadow', array(
			'label'    => __( 'Dectivate Image Shadow:', 'all-colors' ),
			'section'  => 'header_image',
			'priority'    => 3,				
			'settings' => 'all_colors_header_shadow',
			'type' => 'checkbox',
		) ) );
		
}

/**
 * Custom Font Size Styles
 */ 	

add_action( 'wp_enqueue_scripts', 'all_colors_header_position' );	

function all_colors_header_position() {
        $header_image_height = esc_attr(get_theme_mod( 'header_image_height' ) );
        $header_image_position = esc_attr(get_theme_mod( 'header_image_position' ) );

		if( $header_image_height and $header_image_position != 'real' ) { $header_height = ".header-image {height: {$header_image_height}px !important;}";} else {$header_height ="";}
		if( $header_image_position == 'center' ) { $header_position = ".header-image {background-position: center center !important;}";} else {$header_position ="";}
		if( $header_image_position == '50' ) { $header_position = ".header-image {background-position: 50% 50% !important;}";} else {$header_position ="";}
		if( $header_image_position == 'real' ) { $header_position = ".header-image {background-position: no !important; height: auto;}";} else {$header_position ="";}
	
        wp_add_inline_style( 'all-colors-style-css', 
		$header_height.$header_position
		);
}

/**
 * Render the site title for the selective refresh partial.
 */
function all_colors_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 */
function all_colors_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */

add_action( 'customize_preview_init', 'all_colors_customize_preview_js' );

function all_colors_customize_preview_js() {
	wp_enqueue_script( 'colors-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}

/**
 * Custom Font Size Styles
 */ 	

function all_colors_customizing_styles() {

        $header_tagline_hide = esc_attr(get_theme_mod( 'header_tagline_hide' ) );
        $all_colors_top_menu_sub_font_size = esc_attr(get_theme_mod( 'all_colors_top_menu_sub_font_size' ) );
        $all_colors_top_menu_font_size = esc_attr(get_theme_mod( 'all_colors_top_menu_font_size' ) );
        $header_image_show = esc_attr(get_theme_mod( 'header_image_show' ) );
        $sidebar_position = esc_attr(get_theme_mod( 'sidebar_position' ) );
        $all_colors_menu_background_color = esc_attr(get_theme_mod( 'all_colors_menu_background_color' ) );
        $all_colors_menu_color = esc_attr(get_theme_mod( 'all_colors_menu_color' ) );
        $all_colors_menu_background_hover_color = esc_attr(get_theme_mod( 'all_colors_menu_background_hover_color' ) );
        $before_background_color = esc_attr(get_theme_mod( 'before_background_color' ) );
        $before_border_color = esc_attr(get_theme_mod( 'before_border_color' ) );
        $all_colors_link_color = esc_attr(get_theme_mod( 'all_colors_link_color' ) );
        $all_colors_link_hover_color = esc_attr(get_theme_mod( 'all_colors_link_hover_color' ) );

        $all_colors_header_shadow = esc_attr(get_theme_mod( 'all_colors_header_shadow' ) );
		
## Header Styles
		if( $all_colors_header_shadow) { $style28 = ".s-shadow { background-color: inherit !important;}";} else {$style28 ="";}
		if( $header_tagline_hide) { $style9 = ".site-branding .site-description {display: none !important;}";} else {$style9 ="";}
		if( $all_colors_top_menu_sub_font_size) { $style10 = ".main-navigation ul ul li a {font-size: {$all_colors_top_menu_sub_font_size}px !important;}";} else {$style10 ="";}
		if( $all_colors_top_menu_font_size) { $style29 = ".main-navigation ul li a {font-size: {$all_colors_top_menu_font_size}px !important;}";} else {$style29 ="";}
		if( $before_background_color) { $style17 = ".before-header {background: {$before_background_color} !important;}";} else {$style17 ="";}
		if( $before_border_color) { $style19 = ".before-header {border-bottom: 1px solid {$before_border_color} !important;}";} else {$style19 ="";}

		if( ((!is_front_page() or !is_home() ) and (!has_post_thumbnail() or !get_post_meta( get_the_ID(), 'all_colors_value_header_image', true ) ) ) and $header_image_show == 'home' ) { $style11 = ".all-header{display: none !important;} .site-header {overflow: visible;}";} else {$style11 ="";}
		if( ((is_front_page() and !is_home() ) and (!has_post_thumbnail() or !get_post_meta( get_the_ID(), 'all_colors_value_header_image', true ) ) )and $header_image_show == 'home' ) { $style27 = " body .all-header{display: block !important;} body .site-header {overflow: hidden;}";} else {$style27 ="";}
		if (!has_header_image() ) { $style14 = ".site-branding, .all-header {display: none !important;} .grid-top {position: relative;} .site-header{overflow: inherit;}";} else {$style14 ="";}
			
## Sidebar Styles
		if( $sidebar_position == 'no' ) { $style12 = "#content #secondary {display: none !important;}";} else {$style12 ="";}

## Menu Styles		
		if( $all_colors_menu_background_color) { $style15 = ".grid-top, .main-navigation ul ul, .slicknav_menu {background: {$all_colors_menu_background_color} !important; box-shadow: none !important;}";} else {$style15 ="";}
		if( $all_colors_menu_color) { $style16 = ".main-navigation ul li a, .main-navigation ul ul li a, .main-navigation ul ul li a:hover, .main-navigation ul ul li > a:after, .main-navigation ul ul ul li > a:after, .slicknav_nav a {color: {$all_colors_menu_color} !important; }";} else {$style16 ="";}
		if( $all_colors_menu_background_hover_color) { $style18 = ".main-navigation ul li a:hover, .slicknav_nav a:hover {background: {$all_colors_menu_background_hover_color} !important; box-shadow: none !important;}";} else {$style18 ="";}

## Colors Styles
		if( $all_colors_link_color) { $style22 = "a {color: {$all_colors_link_color};}";} else {$style22 ="";}
		if( $all_colors_link_hover_color ) { $style23 = "a:hover {color: {$all_colors_link_hover_color};}";} else {$style23 ="";}
        wp_add_inline_style( 'all-colors-style-css', 
		$style9.$style10.$style11.$style12.$style14.$style15.$style16.$style17.$style18.$style19.$style22.$style23.$style27.$style28.$style29
		);
}
add_action( 'wp_enqueue_scripts', 'all_colors_customizing_styles' );
