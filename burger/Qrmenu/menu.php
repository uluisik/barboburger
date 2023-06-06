<?php include 'includes/header.php';?>
<title>Menülerimiz</title>
<?php include 'includes/sayfa-navbar.php';
            $hizmet = $dbh->query("SELECT * FROM menu_kategori ", PDO::FETCH_ASSOC);
            if ($hizmet->rowCount()) {
                foreach ($hizmet as $hizmet) {
                    if(seo($hizmet["baslik"]) == $_GET["id"]){
                        break;
                    }
                }
            }
?>

     <div id="pages_maincontent">

      	<?php

			 $kategori = $dbh->query("SELECT * FROM menu_kategori WHERE id = '".$hizmet['id']."' ", PDO::FETCH_ASSOC);
			    if ($kategori->rowCount()) {
			        foreach($kategori as $kategori){
			        }
			    }

        $kategori = cevir("menu_kategori",$kategori,$_SESSION["dil"]);

			    ?>
      <a href="javascript:history.back(-1)" class="button_full btyellow"><?php echo $dil["geri-don"];?></a>
      <h2 class="page_title"><center><?=$kategori['baslik']?></center></h2>

     <div class="page_single layout_fullwidth_padding">





              <ul class="posts">

              		<?php


            $sorgu = $dbh->prepare("SELECT * FROM menu where parent='".$hizmet["id"]."' ORDER BY sira");
            $sorgu->execute();

            while ($sonuc = $sorgu->fetch()) {

                $id = $sonuc['id'];
                $urun_adi = $sonuc['urun_adi'];
                $parent = $sonuc['parent'];
                $urun_fiyat = $sonuc['urun_fiyat'];
                $aciklama   = $sonuc['aciklama'];
                $baslikseo  = seo( $sonuc['urun_adi']);
                $sonuc      = cevir("menu",$sonuc,$_SESSION["dil"]);
                $durum = $sonuc['aktif'];
                if ($durum == 0) {
                  $icerik = "Şuan serviste değil";
                }else{
                  $icerik = "";
                }
                ?>

					<li class="swipeout">

						   <div class="swiper-wrapper">

								  <div class="swiper-slide swipeout-content item-content">

										<div class="post_entry">

											<div class="post_thumb"><a href="urun-<?=$baslikseo?>" onclick = "<?php if($durum == 0){echo 'return false';} ?>" ><img src="img/<?=$sonuc['foto'];?>" alt="" title="" /></a></div>

											<div class="post_details">

											  <div class="post_category"><a href="urun-<?=$baslikseo?>" onclick = "<?php if($durum == 0){echo 'return false';} ?>" ><?=$sonuc['urun_adi'];?> - <?=$sonuc['urun_fiyat'];?> ₺</a></div>

														<h2><a href="urun-<?=$baslikseo?>" onclick = "<?php if($durum == 0){echo 'return false';} ?>" ><?=$sonuc['aciklama'];?> </a></h2><br/>
                            <?= $icerik;?>

											  </div>



										</div>

								  </div>



						  </div>

					</li>

				<?php } ?>


              </ul>




       </div>


  <center><h5>Selim Öztürk © 2023 - Tüm Hakları Saklıdır.</h5></center>

      </div>






    </div>

  </div>

</div>


         </div>

    </div>


 <?php include 'includes/footer.php';?>
