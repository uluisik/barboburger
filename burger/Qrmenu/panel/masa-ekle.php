<?php $blok="masa-yonetim"; $sayfa="masa-ekle"; ?>
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

        if ($_POST) { 

            $masa_adi = $_POST['masa_adi']; 

           if ($masa_adi <> "" ) {
                                $satir = [
                                    'masa_adi' => $masa_adi,
                                ];
                                
                                $sql = "INSERT INTO masa_no SET masa_adi=:masa_adi;";
                                $durum = $dbh->prepare($sql)->execute($satir);

                                if ($durum) {
                                    $sonId = $dbh->lastInsertId();
                                    echo '<div class="col-md-6 col-lg-6"> 
                           <div class="card-body collapse show" id="collapse8">
                              <div class="error-notice"> 
                                 <div class="oaerror success">
                                    <strong>Eklendi..</strong> - Belirtilen Veri Başarı ile Eklendi
                                 </div>
                              </div>
                           </div> 
                     </div>';
                                    
                                }

                            }
                        }

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
                        <a class="breadcrumb-item" href="">Yeni Masa Ekle</a>
                      
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
                                 Yeni Masa Ekle
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
                                        
                                          $qrtext="https://". $_SERVER['HTTP_HOST'] . $phpself."/index.php?masa=".md5($result["Auto_increment"]);
                                        
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
                                          <input class="form-control" type="text" name="masa_adi">
                                       </div>
                                    </div>
        
                                    
                                    <br>
                                        <!-- BİTİŞ NOKTASI BURASIDIR . -->
                                    
                                   <div class="col-sm-6 col-md-3">
                                     <div class="btn-demo">
                                       <button class="btn btn-oblong btn-outline-blue btn-block mg-b-10">Oluştur</button>
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
