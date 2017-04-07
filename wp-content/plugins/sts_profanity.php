<?php 
/**
* @package sts_filter_profanity
*
*/
/*
Plugin Name: STS Filter Profanity
Description: this is test for filter hook
Author: Satoshi Iwao
*/
function sts_filter_profanity($content) {
    $profanities = array('badword', 'alsobad', 'satoshi');
    $content = str_ireplace($profanities, '{censored}', $content);
    $content .= " findme!!!";
    return $content;
}

add_filter( 'comment_text', 'sts_filter_profanity');
?>
