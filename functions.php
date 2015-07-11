<?php

// 1. customize ACF path
add_filter('acf/settings/path', 'ebay_diversity_acf_settings_path');
 
function ebay_diversity_acf_settings_path( $path ) {
 
    // update path
    $path = get_stylesheet_directory() . '/inc/acf/';
    
    // return
    return $path;
    
}
 

// 2. customize ACF dir
add_filter('acf/settings/dir', 'ebay_diversity_acf_settings_dir');
 
function ebay_diversity_acf_settings_dir( $dir ) {
 
    // update path
    $dir = get_stylesheet_directory_uri() . '/inc/acf/';
    
    // return
    return $dir;
    
}
 

// 3. Hide ACF field group menu item
//add_filter('acf/settings/show_admin', '__return_false');

// 4. Include ACF
include_once( get_stylesheet_directory() . '/inc/acf/acf.php' );

if ( ! function_exists( 'btn_nicole_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function btn_nicole_setup() {

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'carousel-image', 199, 142, false );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'btn_nicole' ),
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

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'btn_nicole_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // ebay_diversity_setup
add_action( 'after_setup_theme', 'btn_nicole_setup' );

/**
 * Enqueue scripts and styles.
 */
function btn_nicole_scripts() {

	wp_enqueue_style( 'btn_nicole-style', get_stylesheet_uri() );


	wp_enqueue_script( 'btn_nicole-bootstrap', get_template_directory_uri() . '/javascripts/application.js', array(), '20120206', false );

	wp_enqueue_script( 'ebay_diversity-column-count', get_template_directory_uri() . '/javascripts/main.js', array('btn_nicole-bootstrap'), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'btn_nicole_scripts' );

/**
 * Load ACF Configuration
 */
require get_template_directory() . '/inc/acf.php';
