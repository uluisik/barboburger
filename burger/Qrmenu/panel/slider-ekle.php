<?php $blok="slider-yonetim"; $sayfa="slider-ekle"; ?>
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

            $baslik = $_POST['baslik'];
            $ana_baslik = $_POST['ana_baslik'];
            $aciklama = $_POST['aciklama'];
            $buton = $_POST['buton'];
            $foto = $_POST['foto'];

            if ($baslik <> "" && $ana_baslik <> "" && $aciklama <> "" && $buton <> "" && isset($_FILES['foto'])) 

                if ($_FILES['foto']['tmp_name'] != "") {
                $boyut = $_FILES['foto']['size'];
                if ($boyut > (1024 * 1024 * 10)) {
                    echo 'Dosya 10MB den büyük olamaz.';
                } else {
                    $tip = $_FILES['foto']['type'];
                    $isim = $_FILES['foto']['name'];
                    $uzanti = explode('.', $isim);
                    $uzanti = $uzanti[count($uzanti) - 1];

                    $random = rand();

                    $dosya = $_FILES['foto']['tmp_name'];
                    $foto_url = $random . "." . $uzanti;

                    copy($dosya, '../img/' . $foto_url);
                    echo '';
                                $satir = [
                                    'foto' => $foto_url,
                                    'ana_baslik' => $ana_baslik,
                                    'baslik' => $baslik,
                                    'aciklama' => $aciklama,
                                    'buton' => $buton,
                                ];

                                $sql = "INSERT INTO slider SET foto=:foto, baslik=:baslik, ana_baslik=:ana_baslik, aciklama=:aciklama, buton=:buton;";
                                $durum = $dbh->prepare($sql)->execute($satir);

                                if ($durum) {
                                    $sonId = $dbh->lastInsertId();
                                    foreach ($_POST["en"] as $key => $value) {
                                       dilguncelle("en","slider",$sonId,$key,$value);
                                    }

                                    foreach ($_POST["ar"] as $key => $value) {
                                       dilguncelle("ar","slider",$sonId,$key,$value);
                                    }

                                    foreach ($_POST["ru"] as $key => $value) {
                                       dilguncelle("ru","slider",$sonId,$key,$value);
                                    }
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
                        <a class="breadcrumb-item" href="">Yeni Slider Ekle</a>
                      
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
                              Yeni Ürünler Ekle
                              </h4>
                           </div>
                           <div class="card-body collapse show" id="collapse1">
                              <form action="" method="post" enctype="multipart/form-data">
                              

                              <div class="nav-tabs-top">
                                 <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                       <a class="nav-link active show" data-toggle="tab" href="#navs-genel">Genel Bilgiler</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" data-toggle="tab" href="#navs-en">İngilizce</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" data-toggle="tab" href="#navs-ru">Rusça</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" data-toggle="tab" href="#navs-ar">Arapca</a>
                                    </li>
                                 </ul>
                                 <div class="tab-content">
                                    <div class="tab-pane fade active show" id="navs-genel">
                                       <div class="card-body">
                                       <div class="row">
                                 <!-- resim boyut değeri -->
                                               
                                <div class="col-lg-4">
                                       <div class="form-group">
                                          <label class="form-control-label active">Ana Başlık: <span class="tx-danger">*</span></label>
                                          <input class="form-control" type="text" name="ana_baslik">
                                       </div>
                                    </div>

                                    <div class="col-lg-4">
                                       <div class="form-group">
                                          <label class="form-control-label active">Başlık : <span class="tx-danger">*</span></label>
                                          <input class="form-control" type="text" name="baslik">
                                       </div>
                                    </div>

                                    <div class="col-lg-4">
                                       <div class="form-group">
                                          <label class="form-control-label active">Buton Linki (örnk: bize-ulasin) : <span class="tx-danger">*</span></label>
                                          <input class="form-control" type="text" name="buton">
                                       </div>
                                    </div>

                                    <div class="col-lg-12">
                                       <div class="form-group">
                                          <label class="form-control-label active">Açıklama : <span class="tx-danger">*</span></label>
                                          <input class="form-control" type="text" name="aciklama">
                                       </div>
                                    </div>
                                                
                                             <div class="col-lg-12">
                                                   <div class="form-group">
                                                      <div class="card-body collapse show" id="collapse8">
                                                         <label class="form-control-label active">Slider Görseli: <span class="tx-danger">*</span></label>
                                                         <input type="file" class="dropify" name="foto" data-show-remove="false" />
                                                       
                                                         </div>
                                                         
                                                   </div>
                                                </div>

                                                  
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="navs-en">
                                       <div class="card-body">
                                         
                                       <div class="col-lg-12"> 
                                                   <div class="form-group">
                                                      <label class="form-control-label active">Ana Başlık : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text" name="en[ana_baslik]">
                                                   </div>
                                                </div>

                                                 <div class="col-lg-12"> 
                                                   <div class="form-group">
                                                      <label class="form-control-label active"> Başlık : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text" name="en[baslik]">
                                                   </div>
                                                </div>  
                                                
                                               <div class="col-lg-12"> 
                                                   <div class="form-group">
                                                      <label class="form-control-label active"> Açıklama : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text" name="en[aciklama]">
                                                   </div>
                                                </div>  

                                       </div>
                                    </div>
                                 
                                    <div class="tab-pane fade" id="navs-ru">
                                       <div class="card-body">

                                      <div class="col-lg-12"> 
                                                   <div class="form-group">
                                                      <label class="form-control-label active">Ana Başlık : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text" name="ru[ana_baslik]">
                                                   </div>
                                                </div>

                                                 <div class="col-lg-12"> 
                                                   <div class="form-group">
                                                      <label class="form-control-label active"> Başlık : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text" name="ru[baslik]">
                                                   </div>
                                                </div>  
                                                
                                                <div class="col-lg-12"> 
                                                   <div class="form-group">
                                                      <label class="form-control-label active"> Açıklama : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text" name="ru[aciklama]">
                                                   </div>
                                                </div>  
                      

                                  
                                       </div>
                                    </div>

                                
                                    <div class="tab-pane fade" id="navs-ar">
                                       <div class="card-body">
                                      <div class="col-lg-12"> 
                                                   <div class="form-group">
                                                      <label class="form-control-label active">Ana Başlık : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text" name="ar[ana_baslik]">
                                                   </div>
                                                </div>

                                                 <div class="col-lg-12"> 
                                                   <div class="form-group">
                                                      <label class="form-control-label active"> Başlık : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text" name="ar[baslik]">
                                                   </div>
                                                </div>  
                                                
                                                <div class="col-lg-12"> 
                                                   <div class="form-group">
                                                      <label class="form-control-label active"> Açıklama : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text" name="ar[aciklama]">
                                                   </div>
                                                </div> 
 
                      

                                       </div>
                                    </div>

                                 </div>
                              </div>




                              <br>
                                                <div class="col-sm-6 col-md-3">
                                                <div class="btn-demo">
                                                   <button class="btn btn-oblong btn-outline-blue btn-block mg-b-10">Ekle</button>
                                                </div>
                                             </div>
                         
                              </form>
                              </div>
                        </div>
                     </div>
                     <!--/ Basic Form End -->   
                  

             <!-- BİTİŞ NOKTASI BURASIDIR . -->
                    
              <div class="col-md-12 col-lg-12"> 

                           <div class="card-body collapse show" id="collapse8">

                              <div class="error-notice"> 

                                 <div class="oaerror success">

                                    <strong>BİLGİLENDİRME..</strong> - Logonun Kalitesi İçin Önerilen Boyutlar: <b>700x466</b> px'dir.

                                 </div>

                              </div>

                           </div> 

                     </div>


                    
               </div>
               <!--/ Main Wrapper End -->
            </div>
            <!--/ Page Inner End -->
            <!--================================-->
            <?php include 'inc/footer.php'; ?> 
