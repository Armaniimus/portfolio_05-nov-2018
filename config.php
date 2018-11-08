<?php
Define("MAIN_SITE", "http://localhost/ontwikkelomgeving_portfolio/portfolio");
Define("PROJECTEN_MAIN_URL", "http://localhost/ontwikkelomgeving_portfolio/projectFiles/projecten/");

Define("BESTAND_DIEPTE", 2);

$url = $_SERVER['REQUEST_URI'];
$packets = explode("/", $url);
$path = array_slice($packets, 0, BESTAND_DIEPTE);
$path = implode($path, "/");
Define("APP_DIR", $path);

?>
