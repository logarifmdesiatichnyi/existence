<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../dal/chatdb.php");
$user = $_SESSION["user"];
$message = $_REQUEST["msg"];
addMessage($user, $message);
