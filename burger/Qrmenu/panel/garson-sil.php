<?php

if ($_GET) {

    include("inc/vt.php"); 

    $sorgu = $dbh->prepare("SELECT * FROM garson_cagir Where id=:id");
    $sorgu->execute(['id' => (int)$_GET["id"]]);
    $sonuc = $sorgu->fetch();
    unlink('../img/' . $sonuc["foto"]); 

    $where = ['id' => (int)$_GET['id']];
    $durum = $dbh->prepare("DELETE FROM garson_cagir WHERE id=:id")->execute($where);

    if ($durum) {
        header("location:garson-liste.php");
    }
}

?>