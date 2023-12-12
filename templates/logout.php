<?php
session_start();

$_SESSION = array();

session_destroy();

header  ("Location: /musewords/templates/login.php");

exit;

?>