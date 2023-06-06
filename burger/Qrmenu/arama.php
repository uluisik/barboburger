<?php include 'includes/header.php';?>
<title>Arama Sonucu</title> 
<?php include 'includes/sayfa-navbar.php';?>
 

     <div id="pages_maincontent">
 
      <a href="kategori" class="button_full btyellow"><?php echo $dil["menu-kategori"];?></a>  

     <div class="page_single layout_fullwidth_padding">  

   



              <ul class="posts">

              		<?php
 
					$gelen = $_POST["arama"];
					if($gelen == null){
					header("location:index.php");
					}
					$cek = $dbh->query("select * from menu where urun_adi like '%$gelen%' ",PDO::FETCH_ASSOC);
					if($cek->rowCount()){
					foreach($cek as $kayit){
						$urun_adi = seo($kayit['urun_adi']);
					echo '

					<li class="swipeout">

						   <div class="swiper-wrapper">		

								  <div class="swiper-slide swipeout-content item-content">

										<div class="post_entry">

											<div class="post_thumb"><a href="urun-'.$urun_adi.'"><img src="img/'.$kayit['foto'].'" alt="" title="" /></a></div>

											<div class="post_details">

											  <div class="post_category"><a href="urun-'.$urun_adi.'">'.$kayit['urun_adi'].' - '.$kayit['urun_fiyat'].' ₺</a></div>				

														<h2><a href="urun-'.$urun_adi.'">'.$kayit['aciklama'].'</a></h2>

											  </div>

											<div class="post_swipe"><img src="images/swipe_more.png" alt="" title="" /></div>

										</div>

								  </div>

								

						  </div>

					</li>

				';
				}
				}
				?>
 
				 

              </ul> 
      

			

       </div>		

      

      </div>

      

      

    </div>

  </div>

</div>



         </div>

    </div>

 
 <?php include 'includes/footer.php';?>