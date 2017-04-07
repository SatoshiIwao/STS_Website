<?php
add_action( 'wp_enqueue_scripts', 'sts_theme_enqueue_styles' );
function sts_theme_enqueue_styles() {

    $parent_style = "twentyseventeen-style";

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

// svg : add new svg here

// cache : delete query string caching: should implement this in plugins? try it!
error_log("here!!!!!");
?>
