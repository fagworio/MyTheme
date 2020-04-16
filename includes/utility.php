<?php 

function is_post_type( $tipo ){
    global $wp_query;
    if($tipo == get_post_type($wp_query->post->ID)) return true;
    return false;
}