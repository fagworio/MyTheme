<?php 

function jf_customize_register( $wp_customize ) {
    //Change site identity section to General
    //$wp_customize->get_section( 'title_tagline' )->title    =   'General';
    $wp_customize->add_panel( 'jf', [
        'title'         =>   __( 'MyTheme Settings', 'jf' ),
        'description'   =>  '<p>' . __( 'MyTheme Options Settings', 'jf' ) . '</p>',
        'priority'      =>  160 
    ] );
    jf_social_customizer_section( $wp_customize );
    jf_misc_customizer_section( $wp_customize );
}