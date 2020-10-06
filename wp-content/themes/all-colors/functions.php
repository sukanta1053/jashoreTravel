<?php 
// Do not allow direct access to the file.
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'all_colors_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function all_colors_setup() {
		/*
		 * Make theme available for translation.
		 */
		load_theme_textdomain( 'all-colors', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * WooCommerce Support
		 */		
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
		/*
		 * Gutenberg Support
		 */			
		add_theme_support( 'align-wide' );
		add_theme_support( 'disable-custom-font-sizes');
		add_theme_support( 'disable-custom-colors' );
		add_theme_support( 'wp-block-styles' );		
		add_theme_support( 'responsive-embeds' );
		// This theme uses wp_nav_menu() in one location.
		add_theme_support( 'nav-menus' );
		register_nav_menu('primary', esc_html__( 'Primary', 'all-colors' ) );
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'all_colors_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
			//'default-image' => get_template_directory_uri() . '/images/background.jpg',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 50,
			'width'       => 140,
			'flex-width'  => true,
			'flex-height' => false,
		) );
	}
endif;
add_action( 'after_setup_theme', 'all_colors_setup' );

register_default_headers( array(
    'img1' => array(
        'url'           => get_template_directory_uri() . '/images/header.png',
        'thumbnail_url' => get_template_directory_uri() . '/images/header.png',
        'description'   => esc_html__( 'Default Image 1', 'all-colors' )
    )

));

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function all_colors_content_width() {
	// This variable is intended to be overruled from themes.
	$GLOBALS['content_width'] = apply_filters( 'all_colors_content_width', 640 );
}
add_action( 'after_setup_theme', 'all_colors_content_width', 0 );

/**
 * Register widget area.
 */
function all_colors_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'all-colors' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'all-colors' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'all-colors' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'all-colors' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'all-colors' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'all-colors' ),
		'id'            => 'footer-4',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'all_colors_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function all_colors_scripts() {	
	wp_enqueue_script( 'jquery');	
	wp_enqueue_script( 'jquery-ui-accordion' );
	wp_enqueue_script( 'jquery-ui-core' );
	wp_enqueue_script( 'jquery-ui-tabs' );
	wp_enqueue_style( 'all-colors-style-css', get_stylesheet_uri() );
	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style( 'all-colors-colors-font', '//fonts.googleapis.com/css?family=Playfair+Display:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i' );
	wp_enqueue_style( 'all-colors-animate-css', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'all-colors-font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.7.0'  );
	wp_enqueue_script( 'all-colors-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '', true );
	wp_enqueue_script( 'all-colors-mobile-menu', get_template_directory_uri() . '/js/mobile-menu.js', array(), '', false );
	wp_enqueue_script( 'all-colors-viewportchecker', get_template_directory_uri() . '/js/viewportchecker.js', array(), '', true );
	wp_enqueue_script( 'all-colors-top', get_template_directory_uri() . '/js/to-top.js', array(), '', true );
	wp_enqueue_script( 'all-colors-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'all_colors_scripts' );


/**
 * Includes
 */

require_once get_template_directory() . '/include/colors.php';
require_once get_template_directory() . '/include/content-customizer.php';
require_once get_template_directory() . '/include/custom-header.php';
require_once get_template_directory() . '/include/template-tags.php';
require_once get_template_directory() . '/include/customizer.php';
require_once get_template_directory() . '/include/header-top.php';
require_once get_template_directory() . '/include/back-to-top-button.php';
require_once get_template_directory() . '/include/read-more-button.php';
require_once get_template_directory() . '/include/home-images.php';
require_once get_template_directory() . '/customize-pro/class-customize.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require_once get_template_directory() . '/include/jetpack.php';
}

/**
 * Adds custom classes to the array of body classes.
 */

function all_colors_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'all_colors_body_classes' );


function all_colors_sidebar_position() {
	if ( ( is_active_sidebar('sidebar-1') ) ) { 
		wp_enqueue_style( 'all-colors-sidebar', get_template_directory_uri() . '/layouts/left-sidebar.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'all_colors_sidebar_position' );
/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function all_colors_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'all_colors_pingback_header' );





