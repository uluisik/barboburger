<?php
ob_start();    


require_once (__DIR__."/../../includes/models/User.php");
require_once (__DIR__."/../../includes/models/ResponseMessage.php"); 


session_start(); 
 error_reporting(0);
$host = 'localhost';
$dbname = 'prestijbilisimwe_cafeadisyonv2';
$username = 'prestijbilisimwe_cafeadisyonv2';
$password = 'Pixel5120512Pdra3131..';
$charset = 'utf8';
//$collate = 'utf8_unicode_ci';
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => false,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    //   PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $charset COLLATE $collate"
];

try {
    $baglanti = new PDO($dsn, $username, $password, $options);
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Bağlantı hatası: ' . $e->getMessage();
    exit;
}


$dsn = 'mysql:dbname='.$dbname.';host='.$host.';';
$db_user = $username;
$db_password = $password;
try {
    $dbh = new PDO($dsn, $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $e) {
    echo 'Bağlantı kurulamadı: ' . $e->getMessage();
}
$limit =2;
include "dilfonksyon.php";
?>

