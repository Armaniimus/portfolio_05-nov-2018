<?php

/**
 *
 */
class Controller_projecten {
    private $mainUrlPart = PROJECTEN_MAIN_URL;
    function __construct() {
        $this->TemplatingSystem = new TemplatingSystem("view/templates/default.tpl");
    }

    public function my_default() {
        return $this->multiversum();
    }

    public function eerstewebsite() {
        $url = $this->mainUrlPart ."Y1_P1_eerste-website";
        header("location: $url");
    }

    public function radiogaga() {
        $url = $this->mainUrlPart ."Y1_P2_radio-gaga";
        header("location: $url");
    }

    public function matwente() {
        $url = $this->mainUrlPart ."Y1_P3_ma-twente";
        header("location: $url");
    }

    public function overderhein() {
        $url = $this->mainUrlPart ."Y1_P4_over-de-rhein";
        header("location: $url");
    }

    public function stardunks() {
        $url = $this->mainUrlPart ."Y2_P3_stardunks";
        header("location: $url");
    }

    public function multiversum() {
        // echo "1";
        $url = $this->mainUrlPart ."Y2_P4_multiversum";
        header("location: $url");
    }

    public function gameplayparties() {
        $url = $this->mainUrlPart ."Y3_P1_gameplayparties";
        header("location: $url");
    }
}

 ?>
