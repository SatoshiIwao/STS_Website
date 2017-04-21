<?php
/**
 * Teletype functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Teletype
 */

/**
 * Requires WordPress 4.2 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.2', '<' ) ) {
        require get_template_directory() . '/inc/back-compat.php';
}

/**
 * Enqueue scripts and styles.
 */
function sts_scripts() {

        // CSS
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'superslides', get_template_directory_uri() . '/css/superslides.css' ); 
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
        wp_enqueue_style( 'stsfirstweb-style', get_stylesheet_uri() );

        wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.min.js', array(), '1.0', false );
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0', false );
        wp_enqueue_script( 'jquery.superslides', get_template_directory_uri() . '/js/jquery.superslides.min.js', array(), '1.0', false );
       
}
add_action( 'wp_enqueue_scripts', 'sts_scripts' );

/** 
 *  Test Admin menu 
 */

add_action( 'admin_menu', 'my_plugin_menu' );

/** Step 1. */
function my_plugin_menu() {
	add_options_page( 'My Plugin Options', 'My Plugin', 'manage_options', 'my-unique-identifier', 'my_plugin_options' );
}

/** Step 3. */
function my_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>Here is where the form would go if I actually had options.</p>';
	echo '</div>';
}


