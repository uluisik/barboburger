<?php include 'includes/header.php';?>
<title>Ürün Kategorilerimiz</title>
<?php include 'includes/sayfa-navbar.php';?>
     <div id="pages_maincontent">
          <h2 class="page_title"><center><?php echo $dil["menu-kategori"];?></center></h2>     
              <div class="page_single layout_fullwidth_padding">
                    <?php
                      $popurunsorgu = $dbh->prepare("SELECT * FROM menu_kategori WHERE parent=:parent   ORDER BY sira");
                      $popurunsorgu->execute(array("parent"=>$_GET["id"]));
                  while ($popurunsonuc = $popurunsorgu->fetch()) {
                    $id = $popurunsonuc['id'];
                    $foto = $popurunsonuc['foto'];
                    $baslik = $popurunsonuc['baslik'];
                    $aciklama = $popurunsonuc['aciklama'];
                    $baslikseo=seo( $popurunsonuc['baslik']); 
                    $popurunsonuc = cevir("menu_kategori",$popurunsonuc,$_SESSION["dil"]);
                  ?>
                    <div class="videocontainer" onclick="location.href='menu-<?=$baslikseo?>';"  style="cursor:pointer;">
                      <img src="img/<?=$popurunsonuc['foto'];?>" alt="" title="">
                    </div>
		                <center> <h3 class="page_subtitle"><b><?=$popurunsonuc['baslik'];?></b><br> <?=$popurunsonuc['aciklama'];?></h3></center> 
                <?php } ?>
              </div>
      </div>
    </div>
  </div>
</div>



         </div>

    </div>

 

  <?php include 'includes/footer.php';?>