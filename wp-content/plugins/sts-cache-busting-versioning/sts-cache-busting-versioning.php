<?php
/**
* @package sts_cache_busting_versioning
*
*/
/*
Plugin Name: STS Cache Busting Versioning 
Description: cache busting. if string query caching is used, remove it and change to versioning cache
Author: Satoshi Iwao
*/

function sts_cache_busting_version( $src ){
    
    // remove the string query
    $parts = explode( '?ver=', $src );

    // put cache busting version
    $extension_pos = strrpos($parts[0], '.');

    if (isset($parts[1]) && !empty($parts[1]) ) {
        $cache_busting_version = substr($parts[0], 0, $extension_pos) . "." . $parts[1] . substr($parts[0], $extension_pos);
    } else {
        $cache_busting_version = $parts[0];
    }

    //$cache_busting_version = $parts[0];

    return $cache_busting_version;
}
add_filter( 'script_loader_src', 'sts_cache_busting_version', 15, 1 );
add_filter( 'style_loader_src', 'sts_cache_busting_version', 15, 1 );

?>
