<?php
add_filter( 'sts_lowercase_all', 'sts_lowercase_all_callback', 10, 1);
function sts_lowercase_all_callback($content) {
    return strtolower($content);
}


add_filter( 'the_content', 'sts_the_content');
function sts_the_content($content) {

    // Don't proceed with this function if we're not viewing a single post.
    if ( ! is_single() ) {
        return $content;
    }
 
    // First, define the message to be displayed.
    $html = '<p>';
        $html .= 'This Is a Custom Message Created By a Hooked Function.';
    $html .= '</p>';
 
    // Now prepend it to the content.
    $content = $html .= $content;
 
    return apply_filters( 'sts_lowercase_all', $content);
}

?>
