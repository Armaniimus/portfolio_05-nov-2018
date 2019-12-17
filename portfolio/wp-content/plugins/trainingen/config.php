<?php
/**
 *  @description
 *  The purpose of this file is to set global constants that can be used throughout the plugin where they are required
 */

$staticPageName = 'trainingsbureau';

define('ELEARN_ROOT', plugin_dir_path( __FILE__ ));

function ELEARN_WEBROOT() {
    $dir    = explode('/', __DIR__);
    $folder = array_pop($dir);
    $root   = plugins_url($folder);

    return $root;
}
define('ELEARN_WEBROOT', ELEARN_WEBROOT() );

$trainersArray = [
	["id" => 1, 	"name" => "name1", 	"tel" => "0612345600", 	"email" => "email00@domain.com", "picture" => "https://via.placeholder.com/150

C/O https://placeholder.com/"],
	["id" => 2, 	"name" => "name2", 	"tel" => "0612345601",	"email" => "email01@domain.com", "picture" => "https://via.placeholder.com/150

C/O https://placeholder.com/"],
	["id" => 3, 	"name" => "name3", 	"tel" => "0612345602",	"email" => "email02@domain.com", "picture" => "https://via.placeholder.com/150

C/O https://placeholder.com/"],
	["id" => 4, 	"name" => "name4", 	"tel" => "0612345603",	"email" => "email03@domain.com", "picture" => "https://via.placeholder.com/150

C/O https://placeholder.com/"],

	["id" => 5, 	"name" => "name5", 	"tel" => "0612345604",	"email" => "email04@domain.com", "picture" => "https://via.placeholder.com/150

C/O https://placeholder.com/"],
	["id" => 6, 	"name" => "name6", 	"tel" => "0612345605",	"email" => "email05@domain.com", "picture" => "https://via.placeholder.com/150

C/O https://placeholder.com/"],
	["id" => 7, 	"name" => "name7", 	"tel" => "0612345606",	"email" => "email06@domain.com", "picture" => "https://via.placeholder.com/495x270.png?text=(^,^)"],
	["id" => 8, 	"name" => "name8", 	"tel" => "0612345607",	"email" => "email07@domain.com", "picture" => "https://via.placeholder.com/1000x270.png?text=(^,^)"],

	["id" => 9, 	"name" => "name9", 	"tel" => "0612345608",	"email" => "email08@domain.com", "picture" => "https://via.placeholder.com/150

C/O https://placeholder.com/"],
	["id" => 10, 	"name" => "nameA", 	"tel" => "0612345609",	"email" => "email09@domain.com", "picture" => "https://via.placeholder.com/150

C/O https://placeholder.com/"],
	["id" => 11, 	"name" => "nameB", 	"tel" => "0612345610",	"email" => "email10@domain.com", "picture" => "https://via.placeholder.com/150

C/O https://placeholder.com/"],
	["id" => 12, 	"name" => "nameC", 	"tel" => "0612345611",	"email" => "email11@domain.com", "picture" => "https://via.placeholder.com/150

C/O https://placeholder.com/"],
];
define('TRAINERS_ARRAY', $trainersArray);
?>