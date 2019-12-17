<?php
/**
 * Plugin Name: Trainingen
 * Description: A plugin to aid in setting up a training
 * Version:     1.0
 * Author:      ?
 * Author URI:  ?
 * License:     ?
 */


/************************************************************************
 * Purpose of this file is to add all meta data required for the plugin
 * and serve as starting point for all other functionality
 */

/**
 * added to set global constants for the plugin
 */
define('ELEARN_MAIN', __FILE__);
require_once "config.php";


// added to automaticly require php scripts if a class is called;
require_once "autoloader.php";

// add functions to run the plugin
require_once "function-training.php";

/**
 * the activate, deactivate and uninstall Hooks
 */

function Trainingen_activate() {
    require_once "activate.php";
    run_trainingen_activate();
	
	add_action('init', function() {
    	flush_rewrite_rules();
	});
}
register_activation_hook(ELEARN_MAIN, 'Trainingen_activate' );


function Trainingen_deactivate() {
    require_once "deactivate.php";
    run_ELearning_deactivate();
	
	add_action('init', function() {
		flush_rewrite_rules();
	});
}
register_deactivation_hook(ELEARN_MAIN, 'Trainingen_deactivate' );

// add_action('init', function() {
// 	flush_rewrite_rules();
// });
?>
