<?php include 'includes/header.php';?>
<title>Alerji Listesi</title>
<?php include 'includes/sayfa-navbar.php';
$alerji = cevir("alerji",$alerji,$_SESSION["dil"]); 
?>

     
     <div id="pages_maincontent">
     
              <h2 class="page_title"><center><?php echo $dil["alerjenbaslik"];?></center></h2> 
     
     <div class="page_single layout_fullwidth_padding"> 
              
                <ul class="responsive_table">
                	 <?php

            $sorgu = $dbh->prepare("SELECT * FROM alerji");

            $sorgu->execute();

            while ($sonuc = $sorgu->fetch()) {

                $id = $sonuc['id']; 

                $baslik = $sonuc['baslik'];

                $aciklama = $sonuc['aciklama'];

                $foto = $sonuc['foto'];

                $baslikseo=seo( $sonuc['baslik']); 

                $sonuc = cevir("alerji",$sonuc,$_SESSION["dil"]);

                ?>

                     <li class="table_row">
                        <div class="table_section_small"><img src="img/<?=$sonuc['foto'];?>"> </div>
                        <div class="table_section"><?=$sonuc['baslik'];?></div>
                        <div class="table_section"><?=$sonuc['aciklama'];?></div> 
                     </li>
                    <?php } ?>
                </ul>
              
			    <p><center><?php echo $dil["alerjenuyari"];?></center></p>
              
              
              </div>
      
      </div>
      
      
    </div>
  </div>
</div>
         </div>
    </div>

<?php include 'includes/footer.php';?>   