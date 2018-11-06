<?php

function armaniimus_theme_styles() {
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/main.css');
}
add_action( 'wp_enqueue_scripts', 'armaniimus_theme_styles');

function armaniimus_theme_js() {
    wp_enqueue_script('hamburger_controller_js', get_template_directory_uri() . '/js/hamburger_controller.js', '', '', true );
    wp_enqueue_script('nav_controller_js', get_template_directory_uri() . '/js/nav_controller.js', '', '', true );
    wp_enqueue_script('video_info_storage_js', get_template_directory_uri() . '/js/video_info_storage.js', '', '', true );
    wp_enqueue_script('video_link_switch_js', get_template_directory_uri() . '/js/video_link_switch.js', '', '', true );
}
add_action( 'wp_enqueue_scripts', 'armaniimus_theme_js');

?>
