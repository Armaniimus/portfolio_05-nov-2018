<?php

/**
 * tries to automaticly require a file if the class is called
 * Required for this to work is that files and classes are called the sameway
 */

spl_autoload_register(function ($class) {
    $model =        ELEARN_ROOT . "/model/$class.php";
    $view =         ELEARN_ROOT . "/view/$class.php";
    $controller =   ELEARN_ROOT . "/controller/$class.php";
    
    if (file_exists($model) ) {
        require_once "$model";
        
    } else if (file_exists($view) ) {
        require_once "$view";
        
    } else if (file_exists($controller) ) {
        require_once "$controller";
    }
    
});


?>