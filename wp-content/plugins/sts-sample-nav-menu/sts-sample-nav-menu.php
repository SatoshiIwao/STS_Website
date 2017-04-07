<?php
/**
* @package sts_sample_nav_menu
*
*/
/*
Plugin Name: STS Sample Nav Menu 
Description: this is test for Sample Menu
Author: Satoshi Iwao
*/

define( "STS_PLUGIN_DIR" , plugin_dir_path( __FILE__ ) );

require_once( STS_PLUGIN_DIR . "sts-data-class.php" );
require_once( STS_PLUGIN_DIR . "sts-walker-class.php");

//add_filter('wp_nav_menu', 'sts_sample_nav_menu');
add_filter('sts_nav_menu_hook_filter', 'sts_nav_menu_filter', 10, 1);
function sts_nav_menu_filter($data) {

    $sts_walker = new Walker_Simple_Example;  

print_r($sts_walker->walk($data, 0));
    return $sts_walker->walk($data, 0);  
}

add_action('sts_nav_menu_hook', "sts_sample_nav_menu", 10, 0);
function sts_sample_nav_menu() {

    $array = sts_init();

    return apply_filters('sts_nav_menu_hook_filter',$array);
    //return "<h1>here, find me!!!</h1>";     
}

function sts_init() {
   
    $array = array();
    $array[0] = new Sts_Data("node_1", 1, 0);
    $array[1] = new Sts_Data("node_1_1", 2, 1);
    $array[2] = new Sts_Data("node_1_2", 3, 1);
    $array[3] = new Sts_Data("node_1_2_1", 4, 3);
    $array[4] = new Sts_Data("node_1_2_2", 5, 3);
    $array[5] = new Sts_Data("node_1_1_1", 6, 2);
    $array[6] = new Sts_Data("node_1_1_2", 7, 2);
    $array[7] = new Sts_Data("node_1_1_3", 8, 2);

    return $array;

}

function sts_nav_menu_action() {
    do_action('sts_nav_menu_hook');
}

?>
