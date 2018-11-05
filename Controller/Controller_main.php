<?php

/**
 *
 */
class Controller_main {
    function __construct() {
        $this->TemplatingSystem = new TemplatingSystem("view/templates/default.tpl");
    }

    public function default() {
        $this->redirectPortfolio();
    }

    public function redirectPortfolio() {
        header('Location: portfolio');
    }

    public function test() {
        $main = file_get_contents("view/partials/main.html");
        $this->TemplatingSystem->setTemplateData("main", $main);
        $this->TemplatingSystem->setTemplateData("appdir", APP_DIR);
        return $this->TemplatingSystem->getParsedTemplate();
    }
}

 ?>
