<?php
Define("MAIN_SITE", "/portfolio");
Define("PROJECTEN_MAIN_URL", "/projectFiles/projecten/");

Define("BESTAND_DIEPTE", 1);

$url = $_SERVER['REQUEST_URI'];
$packets = explode("/", $url);
$path = array_slice($packets, 0, BESTAND_DIEPTE);
$path = implode($path, "/");
Define("APP_DIR", $path);

?>
