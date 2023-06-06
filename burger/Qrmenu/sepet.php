<?php include 'includes/header.php';?>
<title>Sepetim</title>
<script src="https://use.fontawesome.com/4ad898f606.js"></script> 
<?php include 'includes/sayfa-navbar.php';?>

<?php

 if ($_POST['tip']) {
   $tip = $_POST['tip'];
   switch ($tip) {
     case 'ekle':
       /* if (is_array($_SESSION['sepet'][$_POST['urunid']])) {
        $_SESSION['sepet'][$_POST['urunid']]['qty']['menu_porsiyon']+= $_POST['qty']['urunid']['menu_porsiyon'];
        } else {*/
           $_SESSION['sepet'][] = $_POST;

           // 
        //}
       break;
     
    case 'sil':
      $id = $_POST['id'];
      unset($_SESSION['sepet'][$id]);
    break;
   }

     

    header("location: sepetim");
}

 

 ?>
            
     <div id="pages_maincontent">
      
          <h2 class="page_title"><b><center><?php echo $dil["sepetim"];?></center></b></h2>
            
        
  <div class="page_single layout_fullwidth_padding">  
    
         <div class="cartcontainer">            
          <?php 
              if(count($_SESSION['sepet']) > 0){
                  foreach ($_SESSION['sepet'] as $siparis => $siparisdetay) :
                    $array=$siparisdetay;
                    $urun_getir = $dbh -> prepare("SELECT * FROM menu WHERE id = ?");
                    $urun_getir-> execute(array($siparisdetay["urunid"]));
                    $urun = $urun_getir->fetch(PDO::FETCH_ASSOC);
                    $fiyat = $urun["urun_fiyat"];
                    
                    ////
                    $ekstraistek=0;
                    $porsyon="";
                    if($siparisdetay["menu_porsiyon"]>0){
                        $porsyon = $dbh -> prepare("SELECT * FROM porsiyon_secenekleri WHERE id = ?");
                        $porsyon-> execute(array($siparisdetay["menu_porsiyon"]));
                        $porsyon = $porsyon->fetch(PDO::FETCH_ASSOC);
                        $pfiyat = $porsyon["fiyat"]* $array['qty'];
                        $ekstraistek+= $pfiyat;
                     }  

                    ////
              
                    ////
                    $siparisdetayekstra=implode("|", $siparisdetay["ekstra"]);
                    ////



                    $toplam = $fiyat * $array['qty'] + $ekstraistek; 
                    $urun = cevir("menu",$urun,$_SESSION["dil"]);
                    $toplam2 += $toplam;


                    $porsyon = cevir("porsiyon_secenekleri",$porsyon,$_SESSION["dil"]);
            ?>

            <div class="cart_item" id="cartitem1"> 
              <div class="item_title"><span>+ </span><b> <?= $urun["urun_adi"];?>: </b>

              <?=$porsyon?$porsyon["baslik"]:""?>
             <!-- <?= $siparisdetayekstra?> -->
 
             
            </div>
                <div class="item_price"><?= $toplam;?> ₺</div>
              <div class="item_thumb"><img src="img/<?= $urun['foto']; ?>" alt="" title="" /></div>
                <div class="item_qnty"> 
                        <center> <label><?php echo $dil["adet"];?></label>
                        <label><?= $array['qty']; ?></label>                        
                    <form action="" method="post">
                <input type="submit" class="form_submit" id="cartitem1" value="<?php echo $dil["sil"];?>"> </center>
                </div>
          
                    <input type="hidden" name="tip" value="sil">
                    <input type="hidden" value="<?= $siparis; ?>" name="id"> 
                    
                  </form>
                 </div>
            
          <?php
              endforeach;
              ?> 

    <div class="carttotal">
                   
                  <div class="carttotal_row_last">
                  <div class="carttotal_left"><?php echo $dil["toplam-tutar"];?></div> <div class="carttotal_right"><?= $toplam2; ?> ₺</div>
                  </div>
              </div>
            
              <a href="siparis-tamamla" class="button_full btyellow"><?php echo $dil["siparis-tamamla"];?></a>       
               
              <?php
           }else{ ?>

             <div class="success_message">

            <span><?php echo $dil["maalasef"];?></span>

            <img src="images/sad.png" alt="" title="" />

            <p><?php echo $dil["sepetinizde"];?>,<br /><?php echo $dil["ekli"];?></p>            

            </div>

           <?php } ?>
          
              
            
              
        
 </div>
         <a href="kategori" class="button_full btyellow"><?php echo $dil["urun-gozat"];?></a>     
        
         </div>
      
      </div>
      
      
    </div>
  </div>
</div>

         </div>
    </div>

    
<?php include 'includes/footer.php';?>