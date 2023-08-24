<?php
$title = "Logout | Soulmate Healer";
$description = "Logout of your account";
include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/header.php';
session_destroy();

?>
 <meta http-equiv="refresh" content="0;url=/dashboard">
