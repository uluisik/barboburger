<?php



if ($_GET) {



    include("inc/vt.php"); 



    $sorgu = $dbh->prepare("SELECT * FROM masa_no Where id=:id");

    $sorgu->execute(['id' => (int)$_GET["id"]]);

    $sonuc = $sorgu->fetch();

    unlink('../img/' . $sonuc["foto"]); 



    $where = ['id' => (int)$_GET['id']];

    $durum = $dbh->prepare("DELETE FROM masa_no WHERE id=:id")->execute($where);



    if ($durum) {

        header("location:masa-liste.php");

    }

}



?>