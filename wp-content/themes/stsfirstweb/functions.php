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
        wp_enqueue_style( 'stsfirstweb-style', get_stylesheet_uri() );

        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );

}
add_action( 'wp_enqueue_scripts', 'sts_scripts' );

