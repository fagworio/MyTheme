<?php

function jf_misc_customizer_section( $wp_customize ){
    //Misc Settings
    $wp_customize->add_section( 'jf_misc_section', [
        'title'         =>  __( 'Misc Settings', 'jf' ),
        'priority'      =>  30,
        'panel'         =>  'jf'
    ] );

    $wp_customize->add_setting( 'jf_header_show_search', [
        'default'   =>  'yes',
        'transport' =>  'postMessage'
    ] );

    $wp_customize->add_setting( 'jf_header_show_cart', [
        'default'   =>  'yes',
        'transport' =>  'postMessage'
    ] );

    $wp_customize->add_setting( 'jf_footer_copyright_text', [
        'default'   =>  'Copyrights &copy; 2021 All Rights Reserved by MyTheme.',
        'transport' =>  'postMessage'
    ] );

    $wp_customize->add_setting( 'jf_footer_tos_page', [
        'default'   =>  0,
    ] );


    $wp_customize->add_setting( 'jf_footer_privacy_page', [
        'default'   =>  0,
    ] );

    $wp_customize->add_setting( 'jf_read_more_color', [
        'default'   =>  '#1ABC9C',
    ] );

    $wp_customize->add_setting( 'jf_report_file', [
        'default'   =>  '',
    ] );

    $wp_customize->add_setting( 'jf_show_header_popular_posts', [
        'default'   =>  false,
    ] );

    $wp_customize->add_setting( 'jf_show_popular_posts_widget_title', [
        'default'   => 'Breaking News',
    ] );

    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'jf_header_show_search_input',
            array(
                    'label'          => __( 'Show Search Button in Header', 'jf' ),
                    'settings'       => 'jf_header_show_search',
                    'section'        => 'jf_misc_section',
                    'type'           => 'checkbox',
                    'choices'        => array(
                        'yes'   => __( 'Yes' ),
                    )
                )
            )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'jf_header_show_cart_input',
        array(
                'label'          => __( 'Show Cart Button in Header', 'jf' ),
                'settings'       => 'jf_header_show_cart',
                'section'        => 'jf_misc_section',
                'type'           => 'checkbox',
                'choices'        => array(
                    'yes'   => __( 'Yes' ),
                )
            )
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'jf_footer_copyright_text_input',
        array(
                'label'          => __( 'Show Copyright Text in Footer', 'jf' ),
                'settings'       => 'jf_footer_copyright_text',
                'section'        => 'jf_misc_section',
            )
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'jf_footer_tos_page_input',
        array(
                'label'          => __( 'Footer TOS Page', 'jf' ),
                'settings'       => 'jf_footer_tos_page',
                'section'        => 'jf_misc_section',
                'type'           => 'dropdown-pages',
            )
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'jf_footer_privacy_page_input',
        array(
                'label'          => __( 'Show Privacy Page Link', 'jf' ),
                'settings'       => 'jf_footer_privacy_page',
                'section'        => 'jf_misc_section',
                'type'           => 'dropdown-pages',
            )
        )
    );

    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize,
        'jf_read_more_color_input',
        array(
                'label'          => __( 'Read More Link Color', 'jf' ),
                'settings'       => 'jf_read_more_color',
                'section'        => 'jf_misc_section'
            )
        )
    );

    $wp_customize->add_control( new WP_Customize_Upload_Control(
        $wp_customize,
        'jf_report_file_input',
        array(
                'label'          => __( 'File Report', 'jf' ),
                'settings'       => 'jf_report_file',
                'section'        => 'jf_misc_section'
            )
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'jf_show_header_popular_posts_input',
        array(
                'label'          => __( 'Show Header Popular Posts Widget', 'jf' ),
                'settings'       => 'jf_show_header_popular_posts',
                'section'        => 'jf_misc_section',
                'type'           => 'checkbox',
                'choices'        => array(
                    'yes'   => __( 'Yes' ),
                )
            )
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'jf_show_popular_posts_widget_title_input',
        array(
                'label'          => __( 'Popular Posts Widget Title', 'jf' ),
                'settings'       => 'jf_show_popular_posts_widget_title',
                'section'        => 'jf_misc_section',
            )
        )
    );
    
}
