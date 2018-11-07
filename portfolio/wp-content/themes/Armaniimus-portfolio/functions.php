<?php
add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_theme_menus() {
    register_nav_menus(
        array (
            "primary-menu" => __( 'Primary Menu' )
        )
    );
}
add_action('init', 'register_theme_menus');

function armaniimus_theme_styles() {
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/main.css');
}
add_action( 'wp_enqueue_scripts', 'armaniimus_theme_styles');

function armaniimus_theme_js() {
    wp_enqueue_script('hamburger_controller_js', get_template_directory_uri() . '/js/hamburger_controller.js', '', '', true );
    wp_enqueue_script('nav_controller_js', get_template_directory_uri() . '/js/nav_controller.js', '', '', true );
}
add_action( 'wp_enqueue_scripts', 'armaniimus_theme_js');

?>
