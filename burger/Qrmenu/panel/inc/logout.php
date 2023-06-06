<?php
$unlanguage = 1;

session_start();
ob_start();
session_destroy();

setcookie("musteri", "");

    
header("Location:../index.php");
ob_end_flush();

?>
