<?php
// theme support
add_theme_support('menus');
add_theme_support('post-thumbnails');

// theme menus
function register_theme_menus() {
    register_nav_menus(
        array (
            "primary-menu" => __( 'Primary Menu' )
        )
    );
}
add_action('init', 'register_theme_menus');

// widgets
function armaniimus_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => "<div class='widget-foot' id='$id'>",
		'after_widget' => '</div>',
		'before_title' => '<h5 class="widget-foot-title">',
		'after_title' => '</h5>'
	));
}
armaniimus_create_widget( 'footer1', 'foot1', 'the first footerblok' );
armaniimus_create_widget( 'footer2', 'foot2', 'the second footerblok' );
armaniimus_create_widget( 'footer3', 'foot3', 'the third footerblok' );


// theme css
function armaniimus_theme_styles() {
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/main.css');
}
add_action( 'wp_enqueue_scripts', 'armaniimus_theme_styles');


// theme js
function armaniimus_theme_js() {
    wp_enqueue_script('hamburger_controller_js', get_template_directory_uri() . '/js/hamburger_controller.js', '', '', true );
    wp_enqueue_script('nav_controller_js', get_template_directory_uri() . '/js/nav_controller.js', '', '', true );
}
add_action( 'wp_enqueue_scripts', 'armaniimus_theme_js');

?>
