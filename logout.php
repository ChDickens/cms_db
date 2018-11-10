<?php

session_start();
ob_start(); // стартует буфер
$_SESSION['username'] = null;

session_destroy();

header("Location: /index.php",TRUE);