<?php
session_start();

$_SESSION["logged_in"] = 1;
$_SESSION["role"] = $_GET["role"];

var_dump($_SESSION["role"]);

header("Location: index.php");