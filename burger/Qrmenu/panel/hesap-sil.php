﻿<?php

if ($_GET) {

    include("inc/vt.php"); 

    $sorgu = $dbh->prepare("SELECT * FROM hesap_iste Where id=:id");
    $sorgu->execute(['id' => (int)$_GET["id"]]);
    $sonuc = $sorgu->fetch();
    unlink('../img/' . $sonuc["foto"]); 

    $where = ['id' => (int)$_GET['id']];
    $durum = $dbh->prepare("DELETE FROM hesap_iste WHERE id=:id")->execute($where);

    if ($durum) {
        header("location:hesap-liste.php");
    }
}

?>