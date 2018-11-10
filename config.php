<?php
Define("MAIN_SITE", "/ontwik/portfolio");
Define("PROJECTEN_MAIN_URL", "/ontwik/projectFiles/projecten/");

Define("BESTAND_DIEPTE", 2);

$url = $_SERVER['REQUEST_URI'];
$packets = explode("/", $url);
$path = array_slice($packets, 0, BESTAND_DIEPTE);
$path = implode($path, "/");
Define("APP_DIR", $path);

?>
