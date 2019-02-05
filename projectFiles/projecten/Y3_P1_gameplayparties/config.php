<?php
Define("BESTAND_DIEPTE", 4);

$url = $_SERVER['REQUEST_URI'];
$packets = explode("/", $url);
$path = array_slice($packets, 0, BESTAND_DIEPTE);
$path = implode($path, "/");
Define("APP_DIR", $path);

Define("DB_NAME", "armanjn201_gameplayParties");
Define("DB_USERNAME", "armanjn201_gameplayParties");
Define("DB_PASS", "HO0w4TduTr");
Define("DB_SERVER_ADRESS", "localhost");
Define("DB_TYPE", "mysql");
?>
