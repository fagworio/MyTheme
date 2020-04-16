<?php

function jf_enqueue() {
    $url = get_theme_file_uri();
    $cssPath = '/assets/css/';
    $jsPath = '/assets/js/';
    $ver =  JF_DEV_MODE ? time() : false;

    wp_register_style( 
        'jf_google_fonts', 
        'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i', 
        [],
        $ver
    );
    wp_register_style( 'jf_bootrap', $url . $cssPath . 'bootstrap.css', [], $ver ); 
    wp_register_style( 'jf_style', $url . $cssPath .'style.css', [], $ver );  
    wp_register_style( 'jf_dark', $url . $cssPath .'dark.css', [], $ver );  
    wp_register_style( 'jf_font_icons', $url . $cssPath .'font-icons.css', [], $ver );  
    wp_register_style( 'jf_animate', $url . $cssPath .'animate.css', [], $ver );
    wp_register_style( 'jf_magnific_popup', $url . $cssPath .'magnific-popup.css', [], $ver );
    wp_register_style( 'jf_responsive', $url . $cssPath .'responsive.css', [], $ver );
    wp_register_style( 'jf_custom', $url . $cssPath .'custom.css', [], $ver );

    wp_enqueue_style( 'jf_google_fonts' );
    wp_enqueue_style( 'jf_bootrap' );
    wp_enqueue_style( 'jf_style' );
    wp_enqueue_style( 'jf_dark' );
    wp_enqueue_style( 'jf_font_icons' );
    wp_enqueue_style( 'jf_animate' );
    wp_enqueue_style( 'jf_magnific_popup' );
    wp_enqueue_style( 'jf_responsive' );
    wp_enqueue_style( 'jf_custom' );

    $read_more_color    =   get_theme_mod( 'jf_read_more_color' );
    wp_add_inline_style( 
        'jf_custom',
        'a.more-link{ color:'. $read_more_color .'; border-color: '. $read_more_color .';}'
    );

    wp_register_script( 'jf_plugins', $url . $jsPath . 'plugins.js', [], $ver, true );
    wp_register_script( 'jf_functions', $url . $jsPath . 'functions.js', [], $ver, true );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jf_plugins' );
    wp_enqueue_script( 'jf_functions' );
}