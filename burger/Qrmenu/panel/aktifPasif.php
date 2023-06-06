<?php
if ($_POST) { //post var mı diye bakıyoruz
    include("inc/vt.php"); //veri tabanına bağlanıyoruz

    //değişkenleri integer olarak alıyoruz
    $id = (int)$_POST['id'];
    $durum = (int)$_POST['durum'];

    //Güncellme sorgumuzu yazıyoruz
    $sorgu = $dbh->query("UPDATE menu SET aktif=$durum WHERE  id=$id");

    //gerekli ise geriye değer döndürüyoruz
    echo $id . " nolu kayıt değiştirildi";
}
?>