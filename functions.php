<?php
/**
 * Zomghow functions and definitions
 *
 * @package Zomghow
 * @since Zomghow 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Zomghow 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'zomghow_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since Zomghow 1.0
 */
function zomghow_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Zomghow, use a find and replace
	 * to change 'zomghow' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'zomghow', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'zomghow' ),
	) );

	/**
	 * Add support for the Aside Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', ) );
}
endif; // zomghow_setup
add_action( 'after_setup_theme', 'zomghow_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since Zomghow 1.0
 */
function zomghow_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'zomghow' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	) );
	
	// Area 2, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'First Footer Widget Area', 'zomghow' ),
		'id' => 'first-footer-widget-area',
		'description' => __( 'The first footer widget area', 'zomghow' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	) );

	// Area 3, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Second Footer Widget Area', 'zomghow' ),
		'id' => 'second-footer-widget-area',
		'description' => __( 'The second footer widget area', 'zomghow' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	) );

	// Area 4, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Third Footer Widget Area', 'zomghow' ),
		'id' => 'third-footer-widget-area',
		'description' => __( 'The third footer widget area', 'zomghow' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	) );

	// Area 5, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Fourth Footer Widget Area', 'zomghow' ),
		'id' => 'fourth-footer-widget-area',
		'description' => __( 'The fourth footer widget area', 'zomghow' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	) );
}
add_action( 'widgets_init', 'zomghow_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function zomghow_scripts() {
	global $post;

	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image( $post->ID ) ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'zomghow_scripts' );