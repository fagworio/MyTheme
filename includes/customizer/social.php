<?php 

function jf_social_customizer_section( $wp_customize ){
    //Social Network Settings
    $wp_customize->add_section( 'jf_social_section', [
        'title'         =>  __( 'Social Settings', 'jf' ),
        'priority'      =>  30,
        'panel'         => 'jf'
    ] );

    //Facebook
    $wp_customize->add_setting( 'jf_facebook_handle', [
        'default'   =>  ''
    ] );

    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'jf_social_facebook',
            array(
                    'label'          => __( 'Facebook Handle', 'jf' ),
                    'settings'       => 'jf_facebook_handle',
                    'section'        => 'jf_social_section',
                )
            )
    );

    //Twitter
    $wp_customize->add_setting( 'jf_twitter_handle', [
        'default'   =>  ''
    ] );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'jf_social_twitter',
        array(
                'label'          => __( 'Twitter Handle', 'jf' ),
                'settings'       => 'jf_twitter_handle',
                'section'        => 'jf_social_section',
            )
        )
    );

    //Instagram
    $wp_customize->add_setting( 'jf_instagram_handle', [
        'default'   =>  ''
    ] );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'jf_social_instagran',
        array(
                'label'          => __( 'Instagrar Handle', 'jf' ),
                'settings'       => 'jf_instagram_handle',
                'section'        => 'jf_social_section',
            )
        )
    );

    //Phone Number
    $wp_customize->add_setting( 'jf_phone_handle', [
        'default'   =>  ''
    ] );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'jf_social_phone_number',
        array(
                'label'          => __( 'Phone Number', 'jf' ),
                'settings'       => 'jf_phone_handle',
                'section'        => 'jf_social_section',
            )
        )
    );
    //Email
    $wp_customize->add_setting( 'jf_email_handle', [
        'default'   =>  ''
    ] );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'jf_social_email',
        array(
                'label'          => __( 'Email', 'jf' ),
                'settings'       => 'jf_email_handle',
                'section'        => 'jf_social_section',
            )
        )
    );
}