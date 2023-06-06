<?php $blok="urun-yonetim"; $sayfa="kategori-liste"; ?>
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

            $parent = $_POST['parent'];

            $aciklama = $_POST['aciklama'];

             if ($_FILES['foto']['error'] != 0) {
                    echo 'Dosya yüklenirken hata gerçekleşti lütfen daha sonra tekrar deneyiniz.';
                } else {

                    $dosya_adi = strtolower($_FILES['foto']['name']);
                    if (file_exists('../img/' . $dosya_adi)) {
                        echo "$dosya_adi diye bir dosya var";
                    } else {
                        $boyut = $_FILES['foto']['size'];
                        if ($boyut > (1024 * 1024 * 2)) {
                            echo 'Dosya boyutu 2MB den büyük olamaz.';
                        } else {
                            $dosya_tipi = $_FILES['foto']['type'];
                            $dosya_uzanti = explode('.', $dosya_adi);
                            $dosya_uzanti = $dosya_uzanti[count($dosya_uzanti) - 1];

                            if (!in_array($dosya_tipi, ['image/png', 'image/jpeg']) || !in_array($dosya_uzanti, ['png', 'jpg'])) {
                                //if (($dosya_tipi != 'image/png' || $dosya_uzanti != 'png' )&&( $dosya_tipi != 'image/jpeg' || $dosya_uzanti != 'jpg')) {
                                echo 'Hata, dosya türü JPEG veya PNG olmalı.';
                            } else {
                                $foto = $_FILES['foto']['tmp_name'];
                                copy($foto, '../img/' . $dosya_adi);

                                echo 'Dosyanız upload edildi!';


            $create = $dbh->prepare("INSERT INTO menu_kategori (parent,baslik,aciklama,foto) VALUES ('".$parent."','".$baslik."','".$aciklama."','".$dosya_adi."');" );
            if($create->execute()){

                    $sonId = $dbh->lastInsertId();

                      foreach ($_POST["en"] as $key => $value) {
                                       dilguncelle("en","menu_kategori",$sonId,$key,$value);
                                    }

                                    foreach ($_POST["ar"] as $key => $value) {
                                       dilguncelle("ar","menu_kategori",$sonId,$key,$value);
                                    }

                                    foreach ($_POST["ru"] as $key => $value) {
                                       dilguncelle("ru","menu_kategori",$sonId,$key,$value);
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
                        <a class="breadcrumb-item" href="">Yeni Kategori Ekle</a>
                      
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

                                   <div class="col-lg-12">
                                       <div class="form-group mg-b-10-force">
                                          <label class="form-control-label">Kategori Seçimi: <span class="tx-danger">*</span></label>
                                          <select class="form-control" name="parent">

                                                                <option value="">ANA KATEGORİ EKLEMEK İÇİN SEÇİM YAPMAYIN</option>
                                                                <?php
                                                                $kategori = $dbh->query("select * from menu_kategori WHERE parent = ''  ", PDO::FETCH_ASSOC);
                                                                if ($kategori->rowCount()) {
                                                                    foreach ($kategori as $kategori){
                                                                        echo '<option value="'.$kategori['id'].'">'.$kategori['baslik'].'</option>';
                                                                    }
                                                                }
                                                                ?>

                                                            </select>
                                          <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 350px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-wvtm-container"><span class="select2-selection__rendered" id="select2-wvtm-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                       </div>
                                    </div>
                                               

                                             <div class="col-lg-12">
                                                   <div class="form-group">
                                                      <label class="form-control-label active">Kategori Başlık : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text" value="" name="baslik">
                                                   </div>
                                                </div>

                                                <div class="col-lg-12">
                                                   <div class="form-group">
                                                      <label class="form-control-label active">Kategori Açıklaması : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text" value="" name="aciklama">
                                                   </div>
                                                </div>
                                                
                                             <div class="col-lg-12">
                                                   <div class="form-group">
                                                      <div class="card-body collapse show" id="collapse8">
                                                         <label class="form-control-label active">Kategori Görseli: <span class="tx-danger">*</span></label>
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
                                                      <label class="form-control-label active">Kategori Başlık : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text"   name="en[baslik]">
                                                   </div>
                                                </div>

                                                 <div class="col-lg-12"> 
                                                   <div class="form-group">
                                                      <label class="form-control-label active">Kategori Açıklama : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text"   name="en[aciklama]">
                                                   </div>
                                                </div>  

                                       </div>
                                    </div>
                                 
                                    <div class="tab-pane fade" id="navs-ru">
                                       <div class="card-body">

                                       <div class="col-lg-12">
                                                   <div class="form-group">
                                                      <label class="form-control-label active">Kategori Başlık : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text" name="ru[baslik]">
                                                   </div>
                                                </div>

                                                <div class="col-lg-12">
                                                   <div class="form-group">
                                                      <label class="form-control-label active">Kategori Açıklama  : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text" name="ru[aciklama]">
                                                   </div>
                                                </div>
                      

                                  
                                       </div>
                                    </div>

                                
                                    <div class="tab-pane fade" id="navs-ar">
                                       <div class="card-body">
                                       <div class="col-lg-12">
                                                   <div class="form-group">
                                                      <label class="form-control-label active">Kategori Başlık : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text"  name="ar[baslik]">
                                                   </div>
                                                </div>

                                                <div class="col-lg-12">
                                                   <div class="form-group">
                                                      <label class="form-control-label active">Kategori Açıklama : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text"  name="ar[aciklama]">
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
