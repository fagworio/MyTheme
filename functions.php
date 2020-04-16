
<?php

// Setup
define( 'JF_DEV_MODE', true );

// Includes
include( get_theme_file_path( '/includes/front/enqueue.php' ) );
include( get_theme_file_path( '/includes/setup.php' ) );
include( get_theme_file_path( '/includes/custom_nav_walker.php' ) );
include( get_theme_file_path( '/includes/widgets.php' ) );
include( get_theme_file_path( '/includes/theme_customizer.php' ) );
include( get_theme_file_path( '/includes/customizer/social.php' ) );
include( get_theme_file_path( '/includes/customizer/misc.php' ) );
include( get_theme_file_path( '/includes/customizer/enqueue.php' ) );
include( get_theme_file_path( '/includes/utility.php' ) );

// Hooks
add_action( 'wp_enqueue_scripts', 'jf_enqueue' );
add_action( 'after_setup_theme', 'jf_setup_theme' );
add_action( 'widgets_init', 'jf_widgets' );
add_action( 'customize_register', 'jf_customize_register' );
add_action( 'customize_preview_init', 'jf_customize_preview_init' );
//Shortcodes