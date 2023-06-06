<?php

if ($_GET) {

    include("inc/vt.php"); 

    $sorgu = $dbh->prepare("SELECT * FROM yetkili Where id=:id");
    $sorgu->execute(['id' => (int)$_GET["id"]]);
    $sonuc = $sorgu->fetch();
    unlink('../imgr/' . $sonuc["foto"]); 

    $where = ['id' => (int)$_GET['id']];
    $durum = $dbh->prepare("DELETE FROM yetkili WHERE id=:id")->execute($where);

    if ($durum) {
        header("location:yetkili-listesi.php");
    }
}

?>