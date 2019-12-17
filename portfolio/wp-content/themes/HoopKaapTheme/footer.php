<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
	get_template_part( 'template-parts/footer' );
}

// widgets
function footer_create_widget( $name, $id, $description ) {

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
footer_create_widget( 'footer1', 'foot1', 'the first footerblok' );
footer_create_widget( 'footer2', 'foot2', 'the second footerblok' );
footer_create_widget( 'footer3', 'foot3', 'the third footerblok' );
footer_create_widget( 'footer4', 'foot4', 'the fourth footerblok' );
footer_create_widget( 'footer5', 'foot5', 'the fifth footerblok' );

?>

<?php wp_footer(); ?>

</body>
</html>
