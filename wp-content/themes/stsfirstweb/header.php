<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stsfirstweb
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head();// head hook such as script and style when you want to insert  ?>
</head>

<?php // if there is logo image, set image and logo
if ( function_exists( 'the_custom_logo' ) ) {
        $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
        $logo = esc_url( $image[0] );
} else {
        $logo = esc_url( get_theme_mod( 'logo' ) );
}
?>

<body <?php body_class();// define body class name ?>>
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'teletype' ); ?></a>
<header id="masthead" class="site-header" role="banner">
</header><!-- #masthead -->


