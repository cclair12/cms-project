<?php
/**
 * Migration functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 */


/**
 * Sets up theme defaults and registers the various WordPress features that
 * the Migration theme supports.
 *
 * @uses add_editor_style() To add a Visual Editor stylesheet.
 * @uses add_theme_support() To add support for post thumbnails
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 */
function migration_setup() {

	// This theme styles the visual editor with editor-style.css to give it some niceties.
	add_editor_style();

	// Register Custom Navigation Walker
	require_once('wp-bootstrap-navwalker.php');

	register_nav_menus( array(
			 'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );


	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 500, 9999 ); // Unlimited height, soft crop
}
add_action( 'after_setup_theme', 'migration_setup' );

function shapeSpace_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

/**
 * Enqueues scripts and styles for front-end.
 */
function migration_scripts_styles() {
	global $wp_styles;

	 /*
	 * Loads css files.
	 */
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );

	wp_enqueue_style( 'grid', get_template_directory_uri() . '/css/grid.css' );

	wp_enqueue_style( 'bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css' );

	wp_enqueue_style( 'menu', get_template_directory_uri() . '/css/menu.css' );

	wp_enqueue_style( 'repsponsive', get_template_directory_uri() . '/css/responsive.css' );

	/*
	 * Loads our main stylesheet.
	 */
	wp_enqueue_style( 'migration-style', get_stylesheet_uri() );

	/*
	 * Loads js files.
	 */

	wp_enqueue_script( 'responsive-nav', get_template_directory_uri() . '/js/fixed-responsive-nav.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/jquery.bxslider.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/script.js', array('jquery'), '20151215', true );

  wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array('jquery'), '20151215', true );
	/*
	 * Optional: Loads the Internet Explorer specific stylesheet.
	 */
	//wp_enqueue_style( 'migration-ie', get_template_directory_uri() . '/css/ie.css', array( 'migration-style' ), '20121010' );
	//$wp_styles->add_data( 'migration-ie', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'migration_scripts_styles' );
