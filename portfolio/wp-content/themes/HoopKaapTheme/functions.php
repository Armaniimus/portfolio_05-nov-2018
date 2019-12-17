<?php
/**
 * Theme functions and definitions
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! isset( $content_width ) ) {
	$content_width = 800; // pixels
}

/*
 * Set up theme support
 */
if ( ! function_exists( 'hello_elementor_setup' ) ) {
	function hello_elementor_setup() {
		$hook_result = apply_filters_deprecated( 'elementor_hello_theme_load_textdomain', [ true ], '2.0', 'hello_elementor_load_textdomain' );
		if ( apply_filters( 'hello_elementor_load_textdomain', $hook_result ) ) {
			load_theme_textdomain( 'hello-elementor', get_template_directory() . '/languages' );
		}

		$hook_result = apply_filters_deprecated( 'elementor_hello_theme_register_menus', [ true ], '2.0', 'hello_elementor_register_menus' );
		if ( apply_filters( 'hello_elementor_register_menus', $hook_result ) ) {
			register_nav_menus( array( "primary-menu" => __( 'Primary Menu' ) ) );
		}

		$hook_result = apply_filters_deprecated( 'elementor_hello_theme_add_theme_support', [ true ], '2.0', 'hello_elementor_add_theme_support' );
		if ( apply_filters( 'hello_elementor_add_theme_support', $hook_result ) ) {
			add_theme_support( 'post-thumbnails' );
			add_theme_support( 'automatic-feed-links' );
			add_theme_support( 'title-tag' );
			add_theme_support( 'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			) );
			add_theme_support( 'custom-logo', array(
				'height' => 100,
				'width' => 350,
				'flex-height' => true,
				'flex-width' => true,
			) );

			/*
			 * Editor Style
			 */
			add_editor_style( 'editor-style.css' );

			/*
			 * WooCommerce
			 */
			$hook_result = apply_filters_deprecated( 'elementor_hello_theme_add_woocommerce_support', [ true ], '2.0', 'hello_elementor_add_woocommerce_support' );
			if ( apply_filters( 'hello_elementor_add_woocommerce_support', $hook_result ) ) {
				// WooCommerce in general:
				add_theme_support( 'woocommerce' );
				// Enabling WooCommerce product gallery features (are off by default since WC 3.0.0):
				// zoom:
				add_theme_support( 'wc-product-gallery-zoom' );
				// lightbox:
				add_theme_support( 'wc-product-gallery-lightbox' );
				// swipe:
				add_theme_support( 'wc-product-gallery-slider' );
			}
		}
	}
}
add_action( 'after_setup_theme', 'hello_elementor_setup' );

/*
 * Theme Scripts & Styles
 */
if ( ! function_exists( 'hello_elementor_scripts_styles' ) ) {
	function hello_elementor_scripts_styles() {
		$hook_result = apply_filters_deprecated( 'elementor_hello_theme_enqueue_style', [ true ], '2.0', 'hello_elementor_enqueue_style' );
		if ( apply_filters( 'hello_elementor_enqueue_style', $hook_result ) ) {
			wp_enqueue_style(
				'hello-elementor',
				get_template_directory_uri() . '/style.css'
			);
		}
	}
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_scripts_styles' );

/*
 * Register Elementor Locations
 */
if ( ! function_exists( 'hello_elementor_register_elementor_locations' ) ) {
	function hello_elementor_register_elementor_locations( $elementor_theme_manager ) {
		$hook_result = apply_filters_deprecated( 'elementor_hello_theme_register_elementor_locations', [ true ], '2.0', 'hello_elementor_register_elementor_locations' );
		if ( apply_filters( 'hello_elementor_register_elementor_locations', $hook_result ) ) {
			$elementor_theme_manager->register_all_core_location();
		}
	}
}
add_action( 'elementor/theme/register_locations', 'hello_elementor_register_elementor_locations' );

/*
 * Set default content width
 */
if ( ! function_exists( 'hello_elementor_content_width' ) ) {
	function hello_elementor_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'hello_elementor_content_width', 800 );
	}
}
add_action( 'after_setup_theme', 'hello_elementor_content_width', 0 );

if ( is_admin() ) {
	require get_template_directory() . '/includes/admin-functions.php';
}

// theme css
function hoopkaap_theme_styles() {
// 	echo get_template_directory_uri() . '/assets/css/header.css';
    wp_enqueue_style( 'header_css', get_template_directory_uri() . '/assets/css/header.css');
	wp_enqueue_style( 'footer_css', get_template_directory_uri() . '/assets/css/footer.css');
	wp_enqueue_style( 'grid_css', get_template_directory_uri() . '/assets/css/grid.css');
//     wp_enqueue_style( 'mobile_header_css', get_template_directory_uri() . '/css/header.mobile.css');
//     wp_enqueue_style( 'footer_css', get_template_directory_uri() . '/css/footer.css');
    
//     wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/main.css');
//     wp_enqueue_style( 'font_awsome_css', get_template_directory_uri() . '/css/fontawsomeAll.min.css');
    // wp_enqueue_style( 'style_min_css', get_template_directory_uri() . '/css/style.min.css');
    
//     // test if the page is the blog page
//     if (is_home()) {
//         wp_enqueue_style( 'home_css', get_template_directory_uri() . '/css/home.css');
        
//     // test if its a single blog post page
//     } else if (is_single()) {
//         wp_enqueue_style( 'single_css', get_template_directory_uri() . '/css/single.css');
//     }
}
add_action( 'wp_enqueue_scripts', 'hoopkaap_theme_styles');