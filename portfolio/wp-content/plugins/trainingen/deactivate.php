<?php

/**
 * this function handles the deactivation
 */
function run_ELearning_deactivate() {
    // unregister the post type, so the rules are no longer in memory
    unregister_post_type( 'elearning_lessons' );
    // clear the permalinks to remove our post type's rules from the database
    flush_rewrite_rules();
    
    $themeFile = get_stylesheet_directory() . '/single-elearning_lessons.php';
    if ( file_exists($themeFile) ) {
        unlink($themeFile);
    }
}

?>