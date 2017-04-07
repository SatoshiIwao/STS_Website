<?php
/**
* @package sts_kickstarter_svg
*
*/
/*
Plugin Name: STS Kickstarter Svg 
Description: add kickstarter svg in hooter
Author: Satoshi Iwao
*/
function sts_kickstarter_svg_icon() {
// Define SVG sprite file.
$custom_svg_icons = plugin_dir_path( __FILE__ )."assets/sts-kickstarter.svg";
// If it exists, include it.
if ( file_exists( $custom_svg_icons ) ) {
require_once( $custom_svg_icons );
}
}
add_action( 'wp_footer', 'sts_kickstarter_svg_icon', 99999 );


function sts_social_links_icons( $social_links_icons ) {
$social_links_icons['kickstarter.com'] = 'kickstarter';
return $social_links_icons;
}
add_filter( 'twentyseventeen_social_links_icons', 'sts_social_links_icons' );

/**
 * Add SVG capabilities. 
 * need to add below in .htaccess file
 * 
 * # Add SVG Mime Types
 *  AddType image/svg+xml svg
 *  AddType image/svg+xml svgz
 *
 *  when remove svg cuz of security issue, also need to remove above in .htaccess
 */
function wpcontent_svg_mime_type( $mimes = array() ) {
  $mimes['svg']  = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'wpcontent_svg_mime_type' );

?>
