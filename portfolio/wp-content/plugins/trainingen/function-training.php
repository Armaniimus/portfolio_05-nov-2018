<?php
/**
* this function adds the academy tags to the taxonomy
* these are independent from the normal wordpress tags
*/
// function pfx_register_taxonomy_tags() {
// 	$args = array(
// 		'hierarchical' => false,
// 		'label' => 'tags',
// 		'show_in_quick_edit' => true,
// 		'show_admin_column' => false,

// 		'show_ui' => true,
// 		'public' => true,
// 		'show_in_menu' => true,
// 		'has_archive' => false,
// 	);
// 	register_taxonomy( 'artikel_tags', null, $args );
// }
// add_action('init', 'pfx_register_taxonomy_tags');

/**
* this function adds the elearn_cat taxonomy
* these are independent from the wordpress default categories
*/
function pfx_register_taxonomy_cat() {
	$labels = array(
		'name'          => 'Training Categoriën',
		'singular_name' => 'Categorie',
		'search_items'  => 'Categorie zoeken',
		'popular_items' => 'Populaire items',

		'all_items'     => 'Alle categoriën',
		'edit_item'     => 'Edit categorië',
		'view_item'     => 'Bekijk categorie',
		'update_item'   => 'Update categorië',

		'add_new_item'  => 'Voeg categorie toe',
		'not_found'     => 'Geen categoriën gevonden verander uw zoek opdracht',
		'no_terms'      => 'Geen categorien gevonden welke worden gebruikt in posts',
		'back_to_items' => 'Terug naar Categoriën'
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_in_quick_edit'=> true,
		'show_admin_column' => true,

		'show_ui'           => true,
		'public'            => true,
		'show_in_menu'      => true,
		'has_archive'       => false,
	);
	register_taxonomy( 'training_cat', null, $args );
}
add_action('init', 'pfx_register_taxonomy_cat');

/**
* This function adds a custom taxonomy to the wordpress core
*/
function create_posttype() {
	register_post_type( 'trainingen',
		array(
	   		'labels' => array(
				'name'          => 'Trainingen',
				'add_new'       => 'Nieuwe training',
				'add_new_item'  => 'Voeg nieuwe training toe',
				'edit_item'     => 'Training bewerken',

				'search_items'  => 'Zoek in trainingen',
				'all_items'     => 'Alle trainingen',
				'view_items'    => 'Bekijk training',
				'singular_name' => 'Training',

				'name_admin_bar'=> 'Trainingen',
				'menu_name'     => 'Trainingen'
			),
			'show_ui'           => true,
			'public'            => true,
			'publicly_queryable'=> true,
			'show_in_menu'      => true,
// 			'supports'		    => ['title', 'editor', 'author', 'revisions', 'thumbnail', 'excerpt'],
			'supports'		    => ['title', 'revisions', 'thumbnail', 'excerpt'],
			'has_archive'       => true,
// 			'taxonomies'        => array('training_cat', 'training_tags' ),
			'rewrite'      		=> array( 'slug' => 'trainingen', 'with_front' => false ),
		)
	);
}
add_action( 'init', 'create_posttype' );

/**
* Add taxonomies to the custom post type elearning_lessons
*/
function add_taxonomy_trainingen() {
	register_taxonomy_for_object_type( 'training_cat', 'trainingen' );
// 	register_taxonomy_for_object_type( 'training_tags', 'trainingen' );
}
add_action( 'init', 'add_taxonomy_trainingen' );

/**
* The following 2 functions create a dropdown in the lessen adminpage for the difficulty and elearn_cat taxonomy
*/
add_action('restrict_manage_posts', 'control_filter_post_type_by_taxonomy');
function control_filter_post_type_by_taxonomy() {
	$post_type = 'trainingen'; // change to your post type
	$taxonomy  = 'training_cat'; // change to your taxonomy
	filter_post_type_by_taxonomy($post_type, $taxonomy);

// 	$post_type = 'trainingen'; // change to your post type
// 	$taxonomy  = 'trainingen_tags'; // change to your taxonomy
// 	filter_post_type_by_taxonomy($post_type, $taxonomy);
}

function filter_post_type_by_taxonomy($post_type, $taxonomy) {
	global $typenow;

	if ($typenow == $post_type) {
		$selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
		$info_taxonomy = get_taxonomy($taxonomy);
		wp_dropdown_categories(array(
			'show_option_all' => __("Show All {$info_taxonomy->label}"),
			'taxonomy'        => $taxonomy,
			'name'            => $taxonomy,
			'orderby'         => 'name',

			'selected'        => $selected,
			'show_count'      => true,
			'hide_empty'      => true,
		));
	};
}

/**
* the following 2 functions make the earlier defined dropdowns functional
*/
add_filter('parse_query', 'control_convert_id_to_term_in_query');
function control_convert_id_to_term_in_query($query) {
	$post_type = 'trainingen'; // change to your post type

	$taxonomy  = 'training_cat'; // change to your taxonomy
	convert_id_to_term_in_query($query, $post_type, $taxonomy);

// 	$taxonomy  = 'training_tags'; // change to your taxonomy
// 	convert_id_to_term_in_query($query, $post_type, $taxonomy);
}

function convert_id_to_term_in_query($query, $post_type, $taxonomy) {
	global $pagenow;
	$q_vars    = &$query->query_vars;
	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
		$term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
		$q_vars[$taxonomy] = $term->slug;
	}
}

function add_training_styles() {
	wp_enqueue_style( "training_styles", plugins_url("trainingen/css/trainingen.css") );
	wp_enqueue_style( "custome_grid_styles", plugins_url("trainingen/css/grid-v1.3.1.css") );
	// 	echo get_theme_file_uri("trainingen/trainingen.css");
}
add_training_styles();
add_action( 'wp_enqueue_scripts', 'add_training_styles' );

function pfxn_home_pagesize( $query ) {
    if ( is_post_type_archive( 'trainingen' ) ) {
        $query->set( 'posts_per_page', 9 );
        
		if ( !is_admin() && $query->is_main_query() ) {
			if ($query->is_search) {
				$query->set('post_type', 'trainingen');
			}
		}
	}
}
add_action( 'pre_get_posts', 'pfxn_home_pagesize', 1 );

function add_to_plugin_menu() {
	add_submenu_page(
		'edit.php?post_type=trainingen',
		'Edit inhoud trainingen',
		'Edit inhoud trainingen',
		'manage_options',
		'Edit inhoud trainingen',
		'PfxN_Trainingen_Controller'
	);
}
add_action('admin_menu', 'add_to_plugin_menu');

function PfxN_Trainingen_Controller() {
	new PfxN_Trainingen_Controller();
}
?>
