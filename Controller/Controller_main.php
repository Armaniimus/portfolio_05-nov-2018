<?php

/**
 *
 */
class Controller_main {
    function __construct() {
        $this->TemplatingSystem = new TemplatingSystem("view/templates/default.tpl");
    }

    public function my_default() {
        $this->redirectPortfolio();
    }

    public function redirectPortfolio() {
        $url = MAIN_SITE;
        header("Location: $url");
    }

    public function test() {
        $main = file_get_contents("view/partials/main.html");
        $this->TemplatingSystem->setTemplateData("main", $main);
        $this->TemplatingSystem->setTemplateData("appdir", APP_DIR);
        return $this->TemplatingSystem->getParsedTemplate();
    }
}

 ?>
