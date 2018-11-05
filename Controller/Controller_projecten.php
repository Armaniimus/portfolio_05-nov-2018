<?php

/**
 *
 */
class Controller_projecten {
    function __construct() {
        $this->TemplatingSystem = new TemplatingSystem("view/templates/default.tpl");
    }

    public function default() {
        return "hier komen projecten";
    }

    public function projecten() {

    }
}

 ?>
