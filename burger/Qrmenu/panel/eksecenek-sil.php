﻿<?php



if ($_GET) {



    include("inc/vt.php"); 



    $sorgu = $dbh->prepare("SELECT * FROM ek_secenek Where id=:id");

    $sorgu->execute(['id' => (int)$_GET["id"]]);

    $sonuc = $sorgu->fetch();

    unlink('../img/' . $sonuc["foto"]); 



    $where = ['id' => (int)$_GET['id']];

    $durum = $dbh->prepare("DELETE FROM ek_secenek WHERE id=:id")->execute($where);



    if ($durum) {

        header("location:eksecenek-liste.php");

    }

}



?>