<?php $blok="urun-yonetim"; $sayfa="urun-liste"; ?>

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

            $parent = $_POST['parent'];
            $urun_adi = $_POST['urun_adi'];
            $urun_fiyat = $_POST['urun_fiyat'];
            $aciklama = $_POST['aciklama'];
            $alerji = implode("|", $_POST['alerji']);
            $foto = $_POST['foto'];
            $ekstralar=implode("|",$_POST["eksecenek"]);
            if ($parent <> "" && $urun_adi <> "" && $urun_fiyat <> "" && $aciklama <> "" && isset($_FILES['foto'])) 

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
                                    'parent' => $parent,
                                    'urun_adi' => $urun_adi,
                                    'urun_fiyat' => $urun_fiyat,
                                    'aciklama' => $aciklama,
                                    'alerji' => $alerji,
                                    'ekstralar'=> $ekstralar,
                                ];

                                $sql = "INSERT INTO menu SET foto=:foto, parent=:parent, urun_adi=:urun_adi, urun_fiyat=:urun_fiyat, aciklama=:aciklama, alerji=:alerji,ekstralar=:ekstralar;";
                                $durum = $dbh->prepare($sql)->execute($satir);

                                if ($durum) {
                                    $sonId = $dbh->lastInsertId();
                                    foreach ($_POST["en"] as $key => $value) {
                                       dilguncelle("en","menu",$sonId,$key,$value);
                                    }

                                    foreach ($_POST["ar"] as $key => $value) {
                                       dilguncelle("ar","menu",$sonId,$key,$value);
                                    }

                                    foreach ($_POST["ru"] as $key => $value) {
                                       dilguncelle("ru","menu",$sonId,$key,$value);
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

                        <a class="breadcrumb-item" href="">Yeni Ürün Ekle</a>

                      

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

                                       <div class="form-group">

                                         <label class="form-control-label active">Ürün Kategori Seçimi: <span class="tx-danger">*</span></label>
                                         
                                         <select class="form-control" name="parent">
                                            <?php
                                            $kategoric = $dbh->query("select * from menu_kategori WHERE parent = ''  ", PDO::FETCH_ASSOC);
                                            if ($kategoric->rowCount()) {
                                             foreach ($kategoric as $kategori) {
                                                
                                                 $optgroup="optgroup";
                                                 $alt = $dbh->query("select * from menu_kategori WHERE parent = '" . $kategori['id'] . "'   ", PDO::FETCH_ASSOC);
                                                
                                                 
                                                 if ($alt->rowCount()) {
                                                   echo '<optgroup   label="' . $kategori['baslik'] . '" >';
                                                     foreach ($alt as $alt) {
                                                        echo '<option '.($alt['id']==$sonuc["parent"]?"selected":"").' value="' . $alt['id'] . '">' . $alt['baslik'] . '</option>';
                                                     }
                                                   echo '</optgroup>';
                                                 }else{
                                                   echo '<option '.($kategori['id']==$sonuc["parent"]?"selected":"").' value="' . $kategori['id'] . '">' . $kategori['baslik'] . '</option>';
                                                 }
                                                 
                                             
                                             }
                                         }
                                            ?>
                                           </select>

                                       </div>

                                    </div>
                                             
    
    
                                             <div class="col-lg-6">

                                       <div class="form-group">

                                          <label class="form-control-label active">Ürün Adı: <span class="tx-danger">*</span></label>

                                          <input class="form-control" type="text" name="urun_adi" required="">

                                       </div>

                                    </div>

                                        <div class="col-lg-6">

                                       <div class="form-group">

                                          <label class="form-control-label active">Ürün Fiyatı: (sadece tutarı yazın para birimi eklemeyin)<span class="tx-danger">*</span></label>

                                          <input class="form-control" type="text" name="urun_fiyat" required="">

                                       </div>

                                    </div>

                                    	<?php 
                                                        $eksecenek = $dbh -> query("SELECT * FROM ek_secenek")->fetchAll();
                                                        foreach ($eksecenek as $row ) :
                                                      ?>
                                                      <div class="col-lg-2">
                                                         <div class="custom-control custom-checkbox">
                                                             <input type="checkbox" class="custom-control-input" name="eksecenek[]" id="customCheck<?=( $row['id']+100); ?>" value="<?= $row['id'];?>">
                                                             <label class="custom-control-label" for="customCheck<?=( $row['id']+100); ?>"><?= $row['baslik'];?></label>
                                                          </div> 
                                                      </div>
                                                    <?php endforeach; ?>
                                                




                                    
                                     <div class="col-lg-12">

                                       <div class="form-group">

                                          <label class="form-control-label active">Ürün Açıklaması: <span class="tx-danger">*</span></label>

                                          <input class="form-control" type="text" name="aciklama" required="">

                                       </div>

                                    </div>

                                      <?php 
                                                        $alerji = $dbh -> query("SELECT * FROM alerji")->fetchAll();
                                                        foreach ($alerji as $row ) :
                                                      ?>
                                                      <div class="col-lg-2">
                                                         <div class="custom-control custom-checkbox">
                                                             <input type="checkbox" class="custom-control-input" name="alerji[]" id="customCheck<?= $row['id']; ?>" value="<?= $row['baslik'];?>">
                                                             <label class="custom-control-label" for="customCheck<?= $row['id']; ?>"><?= $row['baslik'];?></label>
                                                          </div> 
                                                      </div>
                                                    <?php endforeach; ?>
                                                




 										 
                                             <div class="col-lg-12">
                                                   <div class="form-group">
                                                      <div class="card-body collapse show" id="collapse8">
                                                         <label class="form-control-label active">Ürün Görseli: <span class="tx-danger">*</span></label>
                                                         <input type="file" class="dropify" name="foto" required="" data-show-remove="false" />
                                                       
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
                                                      <label class="form-control-label active">Ürün Adı : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text"   name="en[urun_adi]">
                                                   </div>
                                                </div>

                                                 <div class="col-lg-12"> 
                                                   <div class="form-group">
                                                      <label class="form-control-label active"> Açıklama : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text"   name="en[aciklama]">
                                                   </div>
                                                </div>  

                                       </div>
                                    </div>
                                 
                                    <div class="tab-pane fade" id="navs-ru">
                                       <div class="card-body">

                                       <div class="col-lg-12">
                                                   <div class="form-group">
                                                      <label class="form-control-label active">Ürün Adı : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text" name="ru[urun_adi]">
                                                   </div>
                                                </div>

                                                <div class="col-lg-12">
                                                   <div class="form-group">
                                                      <label class="form-control-label active"> Açıklama  : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text" name="ru[aciklama]">
                                                   </div>
                                                </div>
                      

                                  
                                       </div>
                                    </div>

                                
                                    <div class="tab-pane fade" id="navs-ar">
                                       <div class="card-body">
                                       <div class="col-lg-12">
                                                   <div class="form-group">
                                                      <label class="form-control-label active">Ürün Adı : <span class="tx-danger">*</span></label>
                                                      <input class="form-control" type="text"  name="ar[urun_adi]">
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

                                    <strong>BİLGİLENDİRME..</strong> - Ürün Resimleri için Tavsiye ettiğimiz ebatlar <b>500x500</b> px.

                                 </div>

                              </div>

                           </div> 

                     </div>


             <!-- BİTİŞ NOKTASI BURASIDIR . -->

                    





                    

               </div>

               <!--/ Main Wrapper End -->

            </div>

            <!--/ Page Inner End -->

            <!--================================-->

            

            <?php include 'inc/footer.php'; ?> 

