<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

include "inc/vt.php";

$veri_kontrol = $dbh->prepare("SELECT tarih FROM hesap_iste ORDER BY id DESC LIMIT 1");
$veri_kontrol->execute();

if ($veri_kontrol->rowCount() > 0) {
    $veri = $veri_kontrol->fetch(PDO::FETCH_OBJ);

    date_default_timezone_set('Europe/Istanbul');

    $gecmis = strtotime($veri->tarih);
    $bugun = time();
    $fark = $bugun - $gecmis;

    if ($fark < 15){
        echo "data: {$fark}\n\n";
    }
    flush();
}



?>