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

function maybe_form($name, $default = '') {
	return isset($_POST[$name]) ? $_POST[$name] : $default;
}

function btn_nicole_email_message($name, $address, $email, $message) {
	return sprintf(
	"
		Hi there\n
		%s emailed you using your site. His/her address is %s.\n
		\n
		His/her address is:\n
		%s\n
		\n
		Message:\n
		%s
		\n
		\n
		Reply to this email to respond!\n
		\n
		Have a great day!
	",
	$name, $email, $address, $message);
}

$btn_nicole_error = false;

function btn_nicole_set_error($error) {
	global $btn_nicole_error;
	$btn_nicole_error = $error;
}

function btn_nicole_clear_error() {
	global $btn_nicole_error;
	$btn_nicole_error = false;
}

function btn_nicole_get_error() {
	global $btn_nicole_error;
	if ($btn_nicole_error === false) return;

	return (string) $btn_nicole_error;
}

function btn_nicole_has_error() {
	global $btn_nicole_error;
	return $btn_nicole_error !== false;
}

function btn_nicole_send_email() {
	$to_email = get_bloginfo('admin_email');

	$name = maybe_form('NAME');
	$email = maybe_form('EMAIL');
	$address = maybe_form('ADDRESS');
	$subject = maybe_form('SUBJECT', 'Message on BTNPetCare.com');
	$form_id = maybe_form('FORM_ID', 'Contact Form');
	$message = maybe_form('MESSAGE');

	$mail = wp_mail($to_email, $subject, btn_nicole_email_message($name, $address, $email, $message), array('Reply-To' => $email, 'From' => sprintf('%s <%s>', $name, $email)));

	btn_nicole_set_error('Thanks for your email!');

}

if (maybe_form('DO', false) && maybe_form('RANDO_1234556') === '') {
	add_action('after_setup_theme', 'btn_nicole_send_email');
}

require get_template_directory() . '/inc/acf.php';
