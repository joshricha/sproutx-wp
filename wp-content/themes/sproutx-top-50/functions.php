<?php
/**
 * SproutX Top 50 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SproutX_Top_50
 */

if ( ! function_exists( 'sproutx_top_50_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sproutx_top_50_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on SproutX Top 50, use a find and replace
	 * to change 'sproutx-top-50' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'sproutx-top-50', get_template_directory() . '/languages' );

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
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'header-menu' => esc_html__( 'Primary', 'sproutx-top-50' )
	) );

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
	add_theme_support( 'custom-background', apply_filters( 'sproutx_top_50_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'sproutx_top_50_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sproutx_top_50_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sproutx_top_50_content_width', 640 );
}
add_action( 'after_setup_theme', 'sproutx_top_50_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sproutx_top_50_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sproutx-top-50' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sproutx-top-50' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer area 1', 'sproutx-top-50' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add footer first third widget area', 'sproutx-top-50' ),
		'before_widget' => '<div class="phone col-sm-4">',
		'after_widget'  => '</div><!-- phone -->',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer area 2', 'sproutx-top-50' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add footer second third widget area with address here', 'sproutx-top-50' ),
		'before_widget' => '<address class="col-sm-4">',
		'after_widget'  => '</address>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer area 3', 'sproutx-top-50' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add footer third and final  one-third widget area here', 'sproutx-top-50' ),
		'before_widget' => '<div class="email col-sm-4">',
		'after_widget'  => '</div><!-- email -->',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer area 4 - full width top section', 'sproutx-top-50' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add footer full width top section widget area', 'sproutx-top-50' ),
		'before_widget' => '<div class="col-md-6 col-md-offset-3">',
		'after_widget'  => '</div><!-- col md 6 offset 3 -->',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Logo widget area', 'sproutx-top-50' ),
		'id'            => 'header-logo',
		'description'   => esc_html__( 'Add logo here', 'sproutx-top-50' ),
		'before_widget' => '<div class="logo col-md-4 col-sm-12 text-left">',
		'after_widget'  => '</div><!-- logo -->',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'sproutx_top_50_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sproutx_top_50_scripts() {
	wp_enqueue_style( 'sproutx-top-50-style', get_stylesheet_uri() );

	wp_enqueue_script( 'sproutx-top-50-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'sproutx-top-50-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sproutx_top_50_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
