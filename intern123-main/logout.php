<?php

session_start();
$sid = session_id();
$sname = session_name();
$_SESSION = array();

session_destroy();
header("Location: login.php ");

setcookie($sname,$sid,time()-3600, "/");



?>