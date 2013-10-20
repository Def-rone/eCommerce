<?php

include('../INCLUDE/connect.php');

//Unset cookies
setcookie("id", "", time()-172800, '/eCommerce/');
setcookie("username", "", time()-172800, '/eCommerce/');
 
$c =$_COOKIE['username'];



//go back to index.php
header('Location: ../index.php');
?>