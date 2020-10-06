<?php
// Do not allow direct access to the file.
if(  ! defined( 'ABSPATH' ) ) {
    exit;
}
/**
 * Theme Customizer
 *
 */

add_action( 'customize_register', 'all_colors_customize_all_colors_styles' );
 
function all_colors_customize_all_colors_styles( $wp_customize ) {

  	    $wp_customize->add_setting( 'body_background', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'body_background', array(
			'label'    => __( 'Body Background Color', 'all-colors' ),
			'priority' => 14,
			'section'  => 'colors',
			'settings' => 'body_background',
		) ) );
  	    $wp_customize->add_setting( 'content_background', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'content_background', array(
			'label'    => __( 'Content Background Color', 'all-colors' ),
			'priority' => 14,
			'section'  => 'colors',
			'settings' => 'content_background',
		) ) );

  	    $wp_customize->add_setting( 'menu_color', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_color', array(
			'label'    => __( 'Menu Color ', 'all-colors' ),
			'priority' => 14,
			'section'  => 'colors',
			'settings' => 'menu_color',
		) ) );

  	    $wp_customize->add_setting( 'menu_hover_color', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_hover_color', array(
			'label'    => __( 'Menu Hover Color ', 'all-colors' ),
			'priority' => 14,
			'section'  => 'colors',
			'settings' => 'menu_hover_color',
		) ) );

  	    $wp_customize->add_setting( 'menu_background', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_background', array(
			'label'    => __( 'Menu Background Color', 'all-colors' ),
			'priority' => 14,
			'section'  => 'colors',
			'settings' => 'menu_background',
		) ) );

  	    $wp_customize->add_setting( 'h_colors', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h_colors', array(
			'label'    => __( 'H1, H2, H3, H4, H5, H6', 'all-colors' ),
			'priority' => 14,
			'section'  => 'colors',
			'settings' => 'h_colors',
		) ) );
	
  	    $wp_customize->add_setting( 'link_colors', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_colors', array(
			'label'    => __( 'Link Colors', 'all-colors' ),
			'priority' => 14,
			'section'  => 'colors',
			'settings' => 'link_colors',
		) ) );

  	    $wp_customize->add_setting( 'link_hover_colors', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_hover_colors', array(
			'label'    => __( 'Link Hover Colors', 'all-colors' ),
			'priority' => 14,
			'section'  => 'colors',
			'settings' => 'link_hover_colors',
		) ) );

  	    $wp_customize->add_setting( 'body_colors', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'body_colors', array(
			'label'    => __( 'Body Colors', 'all-colors' ),
			'priority' => 14,
			'section'  => 'colors',
			'settings' => 'body_colors',
		) ) );
		
  	    $wp_customize->add_setting( 'article_background', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'article_background', array(
			'label'    => __( 'Article Background Color', 'all-colors' ),
			'priority' => 14,
			'section'  => 'colors',
			'settings' => 'article_background',
		) ) );
		
  	    $wp_customize->add_setting( 'sidebar_background', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_background', array(
			'label'    => __( 'Sidebar Background Color', 'all-colors' ),
			'priority' => 14,
			'section'  => 'colors',
			'settings' => 'sidebar_background',
		) ) );
		
  	    $wp_customize->add_setting( 'buttons_color', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );				
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'buttons_color', array(
			'label'    => __( 'Buttons Color', 'all-colors' ),
			'priority' => 14,
			'section'  => 'colors',
			'settings' => 'buttons_color',
		) ) );
				
  	    $wp_customize->add_setting( 'buttons_background', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );				
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'buttons_background', array(
			'label'    => __( 'Buttons Background Color', 'all-colors' ),
			'priority' => 14,
			'section'  => 'colors',
			'settings' => 'buttons_background',
		) ) );
						
  	    $wp_customize->add_setting( 'buttons_background_hover', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );				
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'buttons_background_hover', array(
			'label'    => __( 'Buttons Background Hover Color', 'all-colors' ),
			'priority' => 14,
			'section'  => 'colors',
			'settings' => 'buttons_background_hover',
		) ) );
						
  	    $wp_customize->add_setting( 'footer_background', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );				
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_background', array(
			'label'    => __( 'Footer Background Color', 'all-colors' ),
			'priority' => 14,
			'section'  => 'colors',
			'settings' => 'footer_background',
		) ) );
						
  	    $wp_customize->add_setting( 'footer_colors', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );				
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_colors', array(
			'label'    => __( 'Footer Colors', 'all-colors' ),
			'priority' => 14,
			'section'  => 'colors',
			'settings' => 'footer_colors',
		) ) );

  	    $wp_customize->add_setting( 'footer_hover_colors', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );				
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_hover_colors', array(
			'label'    => __( 'Footer Hover Color', 'all-colors' ),
			'priority' => 14,
			'section'  => 'colors',
			'settings' => 'footer_hover_colors',
		) ) );

  	    $wp_customize->add_setting( 'rights_colors', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rights_colors', array(
			'label'    => __( 'Rights  Color', 'all-colors' ),
			'priority' => 14,
			'section'  => 'colors',
			'settings' => 'rights_colors',
		) ) );
		
  	    $wp_customize->add_setting( 'rights_hover_colors', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rights_hover_colors', array(
			'label'    => __( 'Rights Hover Color', 'all-colors' ),
			'priority' => 14,
			'section'  => 'colors',
			'settings' => 'rights_hover_colors',
		) ) );
				
  	    $wp_customize->add_setting( 'rights_background', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		
 		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rights_background', array(
			'label'    => __( 'Rights Background Color', 'all-colors' ),
			'priority' => 14,
			'section'  => 'colors',
			'settings' => 'rights_background',
		) ) );
		
		
		
}

/**
 * Colors Styles
 */ 	

add_action( 'wp_enqueue_scripts', 'all_colors_styles' );	

function all_colors_styles() {
        $content_background_def = esc_attr(get_theme_mod( 'content_background' ) );
        $menu_color_def = esc_attr(get_theme_mod( 'menu_color' ) );
        $menu_hover_color_def = esc_attr(get_theme_mod( 'menu_hover_color' ) );
        $menu_background_def = esc_attr(get_theme_mod( 'menu_background' ) );
        $h_all_colors_def = esc_attr(get_theme_mod( 'h_colors' ) );
        $link_all_colors_def = esc_attr(get_theme_mod( 'link_colors' ) );
        $link_hover_all_colors_def = esc_attr(get_theme_mod( 'link_hover_colors' ) );
        $body_all_colors_def = esc_attr(get_theme_mod( 'body_colors' ) );
		$body_background = esc_attr(get_theme_mod( 'body_background' ) );
        $article_background_def = esc_attr(get_theme_mod( 'article_background' ) );
        $sidebar_background_def = esc_attr(get_theme_mod( 'sidebar_background' ) );
        $buttons_color_def = esc_attr(get_theme_mod( 'buttons_color' ) );
        $buttons_background_def = esc_attr(get_theme_mod( 'buttons_background' ) );
        $buttons_background_hover_def = esc_attr(get_theme_mod( 'buttons_background_hover' ) );
        $footer_background_def = esc_attr(get_theme_mod( 'footer_background' ) );
        $footer_all_colors_def = esc_attr(get_theme_mod( 'footer_colors' ) );
        $footer_hover_all_colors_def = esc_attr(get_theme_mod( 'footer_hover_colors' ) );
        $rights_all_colors_def = esc_attr(get_theme_mod( 'rights_colors' ) );
        $rights_hover_all_colors_def = esc_attr(get_theme_mod( 'rights_hover_colors' ) );
        $rights_background_def = esc_attr(get_theme_mod( 'rights_background' ) );

		if( $content_background_def) { $content_background = "#content {background: {$content_background_def};}";} else {$content_background ="";}
		if( $menu_color_def) { $menu_color = ".main-navigation ul ul li a, .main-navigation ul li a {color: {$menu_color_def};}";} else {$menu_color ="";}
		if( $menu_hover_color_def) { $menu_hover_color = ".main-navigation ul ul li a:hover, .main-navigation ul li a:hover {color: {$menu_hover_color_def};}";} else {$menu_hover_color ="";}
		if( $menu_background_def) { $menu_background = ".main-navigation ul ul, .grid-top {background: {$menu_background_def};}";} else {$menu_background ="";}
		if( $h_all_colors_def) { $h_colors = "h1, h2, h3, h4, h5, h6, h2 a {color: {$h_all_colors_def};}";} else {$h_colors ="";}
		if( $link_all_colors_def) { $link_colors = "#secondary ul li a, a {color: {$link_all_colors_def};}";} else {$link_colors ="";}
		if( $link_hover_all_colors_def) { $link_hover_colors = "#secondary ul li a:hover, a:hover {color: {$link_hover_all_colors_def};}";} else {$link_hover_colors ="";}
		if( $body_all_colors_def) { $body_colors = "body {color: {$body_all_colors_def};}";} else {$body_colors ="";}
		if( $body_background) { $body_background = "body {background: {$body_background} !important;}";} else {$body_background ="";}		
		if( $article_background_def) { $article_background = "article {background: {$article_background_def};}";} else {$article_background ="";}
		if( $sidebar_background_def) { $sidebar_background = "#secondary section {background: {$sidebar_background_def};}";} else {$sidebar_background ="";}
		if( $buttons_color_def) { $buttons_color = ".h-button-1, .link-more a, button, input[type='button'], input[type='reset'], input[type='submit'] {color: {$buttons_color_def};}";} else {$buttons_color ="";}
		if( $buttons_background_def) { $buttons_background = ".h-button-1, .link-more a, button, input[type='button'], input[type='reset'], input[type='submit'] {background: {$buttons_background_def};}";} else {$buttons_background ="";}
		if( $buttons_background_hover_def) { $buttons_background_hover = ".h-button-1:hover, .link-more a:hover, button, input[type='button']:hover, input[type='reset']:hover, input[type='submit']:hover {background: {$buttons_background_hover_def};}";} else {$buttons_background_hover ="";}
		if( $footer_background_def) { $footer_background = ".footer-center {background: {$footer_background_def};}";} else {$footer_background ="";}
		if( $footer_all_colors_def) { $footer_colors = ".footer-center, .footer-widgets h2, .footer-widgets a {color: {$footer_all_colors_def};}";} else {$footer_colors ="";}
		if( $footer_hover_all_colors_def) { $footer_hover_colors = ".footer-widgets a:hover {color: {$footer_hover_all_colors_def};}";} else {$footer_hover_colors ="";}
		if( $rights_all_colors_def) { $rights_colors = ".site-info a, .site-info {color: {$rights_all_colors_def};}";} else {$rights_colors ="";}
		if( $rights_hover_all_colors_def) { $rights_hover_colors = ".site-info a:hover{color: {$rights_hover_all_colors_def};}";} else {$rights_hover_colors ="";}
		if( $rights_background_def) { $rights_background = ".site-info {background: {$rights_background_def};}";} else {$rights_background ="";}
	
        wp_add_inline_style( 'all-colors-style-css', 
		$content_background.$menu_color.$menu_hover_color.$menu_background.$h_colors.$link_colors.$link_hover_colors.$body_colors.$article_background.$sidebar_background.$buttons_color.$buttons_background.$buttons_background_hover.$footer_background.$footer_colors.$footer_hover_colors.$rights_colors.$rights_hover_colors.$rights_background.$body_background
		);
}