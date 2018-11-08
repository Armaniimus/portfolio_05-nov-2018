<?php
include 'SecurityHeaders.php';

// run normal program
require_once "config.php";
require_once "controller/EntryController.php";

$EntryController = new EntryController(DB_NAME, DB_USERNAME, DB_PASS, DB_SERVER_ADRESS, DB_TYPE);
$EntryController->handleRequest();
?>
