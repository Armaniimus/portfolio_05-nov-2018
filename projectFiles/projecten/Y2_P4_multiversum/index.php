<?php
include 'SecurityHeaders.php';

// run normal program
require_once "controller/EntryController.php";
$EntryController = new EntryController('armanjn201_multiversum', 'root', '');
$EntryController->handleRequest();
?>
