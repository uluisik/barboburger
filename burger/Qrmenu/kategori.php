<?php include 'includes/header.php';?>
<title>Ürün Kategorilerimiz</title>
<?php include 'includes/sayfa-navbar.php';?>
     <div id="pages_maincontent">
          <h2 class="page_title"><center><?php echo $dil["menu-kategori"];?></center></h2>     
              <div class="page_single layout_fullwidth_padding">
                   <?php
            $sorgu = $dbh->prepare("SELECT * FROM menu_kategori WHERE parent='' ORDER BY sira");
            $sorgu->execute();
            while ($sonuc = $sorgu->fetch()) {
                $id = $sonuc['id']; 
                $baslik = $sonuc['baslik'];
                $aciklama = $sonuc['aciklama'];
                $foto = $sonuc['foto'];
                $baslikseo=seo( $sonuc['baslik']); 
                $sonuc = cevir("menu_kategori",$sonuc,$_SESSION["dil"]);
                $alt = $dbh->query("select * from menu_kategori WHERE parent = '" .$id. "'   ", PDO::FETCH_ASSOC);                                          
                $sayi=$alt->rowCount();

                ?>
                    <div class="videocontainer" onclick="<? if($sayi>0){?>location.href='altkategori.php?id=<?=$sonuc['id'];?>';<?}else{?>location.href='menu-<?=$baslikseo?>'<?}?>"  style="cursor:pointer;">
                      <img src="img/<?=$sonuc['foto'];?>" alt="" title="">
                    </div>
		                <center> <h3 class="page_subtitle"><b><?=$sonuc['baslik'];?></b><br> <?=$sonuc['aciklama'];?></h3></center> 
                <?php } ?>
              </div>
      </div>
    </div>
  </div>
</div>



         </div>

    </div>

 

  <?php include 'includes/footer.php';?>