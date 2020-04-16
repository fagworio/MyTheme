<?php

function jf_widgets() {
    register_sidebar( [
        'name'          => __( 'Main Sidebar', 'jf' ),
        'id'            => 'jf_sidebar',
        'description'   => __( 'Add the Widets here', 'jf' ),
        'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ] ); 
}