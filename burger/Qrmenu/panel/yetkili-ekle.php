<?php $blok="yetkili-yonetim"; $sayfa="yetkili-ekle"; ?>
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

            $isim = $_POST['isim'];
            $soyisim = $_POST['soyisim'];
            $kullanici = $_POST['kullanici'];
            $sifre = $_POST['sifre'];

           if ($isim <> "" && $soyisim <> "" && $kullanici <> "" && $sifre <> "" ) {
                                $satir = [
                                    'isim' => $isim,
                                    'soyisim' => $soyisim,
                                    'kullanici' => $kullanici,
                                    'sifre' => $sifre,
                                ];
                                
                                $sql = "INSERT INTO yetkili SET isim=:isim, soyisim=:soyisim, kullanici=:kullanici, sifre=:sifre;";
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
                        <a class="breadcrumb-item" href="">Yeni Yetkili Ekle</a>
                      
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
                              Yeni Yetkili Ekle
                              </h4>
                           </div>
                           <div class="card-body collapse show" id="collapse1">
                              <form action="" method="post" enctype="multipart/form-data">
                              <div class="row">

                                   <div class="col-lg-6">
                                       <div class="form-group">
                                          <label class="form-control-label active">İsim: <span class="tx-danger">*</span></label>
                                          <input class="form-control" type="text" name="isim">
                                       </div>
                                    </div>

                                    <div class="col-lg-6">
                                       <div class="form-group">
                                          <label class="form-control-label active">Soyisim: <span class="tx-danger">*</span></label>
                                          <input class="form-control" type="text" name="soyisim">
                                       </div>
                                    </div>

                                    <div class="col-lg-6">
                                       <div class="form-group">
                                          <label class="form-control-label active">Kullanıcı Adı: <span class="tx-danger">*</span></label>
                                          <input class="form-control" type="text" name="kullanici">
                                       </div>
                                    </div>

                                    <div class="col-lg-6">
                                       <div class="form-group">
                                          <label class="form-control-label active">Şifre: <span class="tx-danger">*</span></label>
                                          <input class="form-control" type="text" name="sifre">
                                       </div>
                                    </div>
                                    
                                    
                                    <br>
                                        <!-- BİTİŞ NOKTASI BURASIDIR . -->
                    
            <div class="col-sm-6 col-md-3">

                                    <div class="btn-demo">

                                       <button class="btn btn-oblong btn-outline-blue btn-block mg-b-10">Güncelle</button>

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
