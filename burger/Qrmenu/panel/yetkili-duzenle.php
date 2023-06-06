<?php $blok="yetkili-yonetim"; $sayfa="yetkili-liste"; ?>
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
   $kullanici = $_POST['kullanici'];
   $sifre = $_POST['sifre'];
   $isim = $_POST['isim'];
   $soyisim = $_POST['soyisim'];

  $update = $dbh->prepare("UPDATE yetkili SET kullanici = '".$kullanici."',sifre = '".$sifre."',isim = '".$isim."',soyisim = '".$soyisim."' WHERE id = '".$id."'");
    $update->execute();
            }
?>

<?php
$sorgu = $dbh->prepare("SELECT * FROM yetkili Where id=:id");
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
                        <a class="breadcrumb-item" href="">Yönetici Düzenle</a>
                      
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
                              Yönetici Düzenleme Formu
                              </h4>
                           </div>
                           <div class="card-body collapse show" id="collapse1">
                              <form action="" method="post" enctype="multipart/form-data">
                              <div class="row">

                                   <div class="col-lg-12">
                                       <div class="form-group">
                                          <label class="form-control-label active">Kullanıcı Adı: <span class="tx-danger">*</span></label>
                                          <input class="form-control" type="text" value="<?=$sonuc['kullanici'];?>" name="kullanici">
                                       </div>
                                    </div>

                                    <div class="col-lg-6">
                                       <div class="form-group">
                                          <label class="form-control-label active">İsim: <span class="tx-danger">*</span></label>
                                          <input class="form-control" type="text" value="<?=$sonuc['isim'];?>" name="isim">
                                       </div>
                                    </div>

                                     <div class="col-lg-6">
                                       <div class="form-group">
                                          <label class="form-control-label active">Soyisim: <span class="tx-danger">*</span></label>
                                          <input class="form-control" type="text" value="<?=$sonuc['soyisim'];?>" name="soyisim">
                                       </div>
                                    </div>

                                     <div class="col-lg-12">
                                       <div class="form-group">
                                          <label class="form-control-label active">Şifre: <span class="tx-danger">*</span></label>
                                          <input class="form-control" type="password" value="<?=$sonuc['sifre'];?>" name="sifre">
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
               <!-- Bigger Alerts Start -->
                     <!--================================-->              
                     <div class="col-md-12 col-lg-12">
                         
                           <div class="card-body collapse show" id="collapse6">
                              
                              <div class="alert alert-info alert-bordered pd-y-15" role="alert">
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true"><i class="ico icon-close"></i></span>
                                 </button>
                                 <div class="d-sm-flex align-items-center justify-content-start">
                                    <i class="icon ion-ios-information alert-icon tx-52 mg-r-20"></i>
                                   
                                 </div>
                              </div>
                              
                              
                            
                        </div>
                     </div>
                     <!-- / Bigger Alerts End -->
                     <!--================================-->
            <?php include 'inc/footer.php'; ?> 
