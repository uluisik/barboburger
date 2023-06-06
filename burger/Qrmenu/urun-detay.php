<?php include 'includes/header.php';?>
<?php include 'includes/sayfa-navbar.php';?>
<link rel="stylesheet" href="./selectstyle.css">
<?php
           $hizmet = $dbh->query("SELECT * FROM menu ", PDO::FETCH_ASSOC);
            if ($hizmet->rowCount()) {
                foreach ($hizmet as $hizmet) {
                    if(seo($hizmet["urun_adi"]) == $_GET["id"]){
                      $hizmet = cevir("menu",$hizmet,$_SESSION["dil"]);

                      $alerji_bol = explode("|", $hizmet['alerji']);
                        break;
                    }
                }
            }        




?>  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="toolstyle.css?2">
 <title><?=$hizmet['urun_adi'];?></title>   
 

     <div id="pages_maincontent">  
      <a href="javascript:history.back(-1)" class="button_full btyellow"><?php echo $dil["geri-don"];?></a> 

     <h2 class="page_title"><center><b><?=$hizmet['urun_adi'];?> </b>  </h2>

    

	<div class="page_single layout_fullwidth_padding"> 
	

      <div class="shop_item">



          <div class="shop_thumb">

          <div class="shop_thumb_gallery"><a href="img/<?=$hizmet['foto'];?>" title="<?=$hizmet['urun_adi'];?>"><img src="img/<?=$hizmet['foto'];?>" alt="" title="" /></a></div>

        

          </div>

          <div class="shop_item_details">

          <h3><center><?php echo $dil["urun-aciklama"];?></center></h3>

       <p><?=$hizmet['aciklama'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?=$hizmet['urun_fiyat'];?> ₺</b>

           <style type="text/css">
             .ortala {
              margin-left: 35%;
              margin-right:35%;
            }
           </style>
         

           
         
<br><br><br>
  <h3><center>Ürün İçeriği</center></h3>
    <?
 						$goruntulenebilireksecenekler=explode("|", $hizmet["ekstralar"]);
 					  
 						$goruntulenebilireksecenekler = implode(",", $goruntulenebilireksecenekler);
 						$wheregoruntulenebilirsecenekler ="";
 						if($goruntulenebilireksecenekler!=""){
 							$wheregoruntulenebilirsecenekler= "where id in (".$goruntulenebilireksecenekler.")";
 						}else{
 						    $wheregoruntulenebilirsecenekler= "where id in (0)";
 						}
 						    
 					    $alt = $dbh->query("select * from ek_secenek $wheregoruntulenebilirsecenekler   ", PDO::FETCH_ASSOC);
                      if ($alt->rowCount()) {
                         foreach ($alt as $alt) {
                            $alt = cevir("ek_secenek",$alt,$_SESSION["dil"]);
                            
    ?>



							 <div class="col-lg-2">
		                         <div class="custom-control custom-checkbox">
		                             <input type="checkbox" class="custom-control-input" checked="" name="ekstra[]" id="customCheck6" value="<?=$alt["baslik"]?>">
		                             <label class="custom-control-label" for="customCheck6"><?=$alt["baslik"]?></label>
		                          </div> 
		                      </div>

		                  <?
		                      }
		                  }

                      ?>
 

               <div class="contactform">
 
            
          

         
      <div style="height: 24px;">
            <?php 

            for ($i=0; $i < count($alerji_bol); $i++):
              $alerji = $dbh -> prepare("SELECT * FROM alerji WHERE baslik = ?");
              $alerji -> execute(array($alerji_bol[$i]));
              
              $row = $alerji -> fetch();
                if ($alerji->rowCount() > 0) :
                  $row = cevir("alerji",$row,$_SESSION["dil"]);  
              ?>
              
           
             <div class="tooltip">
              <img src="img/<?= $row['foto']; ?>" style="max-height: 48px; float: left;" /> 
              <span class="tooltiptext"><?= $row['aciklama']; ?></span>
            </div> 

            <?php
                endif;
             endfor; ?>


   



            
      

			

       </div>
             
        </div>

            </div>
        

     

         

          </div>




      </div>

      



      </div>

    

      </div>
      

  