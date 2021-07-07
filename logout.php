<?php
require 'database/DBController.php';
require 'function.php';
unset($_SESSION['USER_LOGIN']);
header('location:index.php');
die();
?>