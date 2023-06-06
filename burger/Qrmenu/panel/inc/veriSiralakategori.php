<?php
include('vt.php'); // Veritabanı bağlantısı
$sonuc = "error"; // sonucumuzu varsayılan olarak error olarak ayarlıyoruz
if (is_array($_POST['elemankategori'])) { // gelen değerler (eleman-1) dizi olup olmadığını kontrol ediyoruz
    foreach ($_POST['elemankategori'] as $key => $value) // döngüde elemanların id ve sıra bilgisini alıyoruz
        if ($dbh->query("UPDATE menu_kategori SET sira = $key WHERE id = $value"))
            // her satırın id bilgisi ile sıra bilgisini veritabanında düzenliyoruz
           $sonuc = "success";  // sonuc değişkenine success değerini atıyoruz
}
echo $sonuc; // sonuç değerini geri döndürüyoruz json formatında da döndürebilirdik
?>