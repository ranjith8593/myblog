<?php
//include config
require_once('../includes/config.php');

//log user out
$user1->logout();
header('Location: index.php'); 

?>