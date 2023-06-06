<?php $blok="masa-yonetim"; $sayfa="masa-liste"; ?>
<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<?php include 'inc/navbar.php'; ?>
<script src="ckeditor/ckeditor/ckeditor.js"></script>
<style>
.zara-yatay {
float:left;
          	 }
</style>
<?php

 if(!empty($_POST)){

   $id = $_GET["id"]; 

   $masa_adi = $_POST['masa_adi'];


  $update = $dbh->prepare("UPDATE masa_no SET masa_adi = '".$masa_adi."' WHERE id = '".$id."'");

    $update->execute();
 
            }

?>

<?php

$sorgu = $dbh->prepare("SELECT * FROM masa_no Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch(); 


?>
            <!-- Page Inner Start -->
            <!--================================-->
            <div class="page-inner">
               <!-- Main Wrapper -->
               <div id="main-wrapper">
                  <!--================================-->
                  <!-- Breadcrumb Start -->
                  <!--================================-->
                  <div class="pageheader pd-t-25 pd-b-35">
                     <div class="pd-t-5 pd-b-5">
                        <h1 class="pd-0 mg-0 tx-20">Özel Yönetim Sistemleri</h1>
                     </div>
                     <div class="breadcrumb pd-0 mg-0">
                        <a class="breadcrumb-item" href="index.php"> Anasayfa</a>
                        <a class="breadcrumb-item" href="">Masa Düzenle</a>
                      
                     </div>
                  </div>
                  <!--/ Breadcrumb End -->
                  <!--================================-->
                  
            <!-- ORTA ALAN BAŞLANGIÇ NOKTASI -->
<!-- Basic Form Start -->
                     <!--================================-->
                     <div class="col-md-12 col-lg-12">
                        <div class="card mg-b-20">
                           <div class="card-header">
                              <h4 class="card-header-title">
                                 Masa Düzenle
                              </h4>
                           </div>
                           <div class="card-body collapse show" id="collapse1">
                              <form action="" method="post" enctype="multipart/form-data">
                              <div class="row">
                                   <div class="">
                                      <?
                                           $sssms= "SHOW TABLE STATUS LIKE 'masa_no'";
                                          $sth = $dbh->prepare( $sssms);
                                          $sth->execute();
                                          
                                          /* Sonuç kümesindeki tüm satırları alalım */
                                       
                                           $result = $sth->fetch();
                                           $phpself=explode("/",dirname($_SERVER['PHP_SELF']));
                                           unset($phpself[count($phpself)-1]);
                                           $phpself= implode("/",$phpself);
                                        
                                          $qrtext="https://". $_SERVER['HTTP_HOST'] . $phpself."/index.php?masa=".md5($_GET["id"]);
                                        
                                          ob_start();
                                          include __DIR__."/../includes/siniflar/phpqrcode/qrlib.php";
                                          
                                          QRCode::png($qrtext, null, QR_ECLEVEL_L, 20);
                                          // phpqrcode_logolu::olustur($qrtext, "../img/$ayar['foto']);
                                          $imageString = base64_encode( ob_get_contents() );
                                          ob_end_clean();
                                      ?>
                                      <div style="float:right">
                                          <img width="300"  src="data:image/png;base64,<?=$imageString?>" />
                                    </div>
                                    </div>
                                   <div class="col-lg-12">
                                       <div class="form-group">
                                          <label class="form-control-label active">Masa Adı: <span class="tx-danger">*</span></label>
                                          <input class="form-control" type="text" value="<?=$sonuc['masa_adi'];?>" name="masa_adi">
                                       </div>
                                    </div>
        
                                    
                                    <br>
                                        <!-- BİTİŞ NOKTASI BURASIDIR . -->
                                    
                                   <div class="col-sm-6 col-md-3">
                                     <div class="btn-demo">
                                       <button class="btn btn-oblong btn-outline-blue btn-block mg-b-10">Düzenle</button>
                                    </div>

                                 </div>

                                     <!-- BİTİŞ NOKTASI BURASIDIR . -->
                              </form> 
                              
                              </div>
                              
                           </div>
                        </div>
                     </div>
                     <!--/ Basic Form End -->   
                  

             <!-- BİTİŞ NOKTASI BURASIDIR . -->
                    


                    
               </div>
               <!--/ Main Wrapper End -->
            </div>
            <!--/ Page Inner End -->
            <!--================================-->
            <?php include 'inc/footer.php'; ?> 
