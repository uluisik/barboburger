<?php include 'includes/header.php';?>
<title>Hakkımızda</title>
<?php include 'includes/sayfa-navbar.php';
$hakkimizda = cevir("hakkimizda",$hakkimizda,$_SESSION["dil"]); 
?>

						

     <div id="pages_maincontent">

      

          <h2 class="page_title"><center><?php echo $dil["hakkimizda"];?></center></h2>



	<div class="page_single layout_fullwidth_padding">	

	  

              <blockquote>

              <?=$hakkimizda['icerik'];?> 

              </blockquote>  
              
              <a href="bize-ulasin" class="button_full btyellow"><?php echo $dil["bize-ulasin"];?></a> 

         </div>

      

      </div>

      

      

    </div>

  </div>

</div>

         </div>

    </div>


 

  <?php include 'includes/footer.php';?>